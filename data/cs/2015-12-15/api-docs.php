<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'ROA',
    'product' => 'CS',
    'version' => '2015-12-15',
  ),
  'directories' => 
  array (
    0 => 'OpenAckService',
    1 => 
    array (
      'id' => 159670,
      'title' => '集群',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateCluster',
        1 => 'DeleteCluster',
        2 => 'DescribeClustersV1',
        3 => 'DescribeClusterDetail',
        4 => 'DescribeClusterResources',
        5 => 'DescribeKubernetesVersionMetadata',
        6 => 'DescribeUserClusterNamespaces',
        7 => 'DescribeClusterLogs',
        8 => 'RunClusterCheck',
        9 => 'ListClusterChecks',
        10 => 'GetClusterCheck',
        11 => 'ModifyCluster',
        12 => 'MigrateCluster',
        13 => 'DescribeClusterUserKubeconfig',
        14 => 'DescribeSubaccountK8sClusterUserConfig',
        15 => 'UpdateK8sClusterUserConfigExpire',
        16 => 'ScanClusterVuls',
        17 => 'DescribeClusterVuls',
      ),
    ),
    2 => 
    array (
      'id' => 159698,
      'title' => '节点池',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateClusterNodePool',
        1 => 'DeleteClusterNodepool',
        2 => 'DescribeClusterNodePoolDetail',
        3 => 'DescribeClusterNodePools',
        4 => 'DescribeNodePoolVuls',
        5 => 'ModifyClusterNodePool',
        6 => 'ScaleClusterNodePool',
        7 => 'AttachInstancesToNodePool',
        8 => 'RemoveNodePoolNodes',
        9 => 'UpgradeClusterNodepool',
        10 => 'RepairClusterNodePool',
        11 => 'FixNodePoolVuls',
        12 => 'ModifyNodePoolNodeConfig',
        13 => 'SyncClusterNodePool',
        14 => 'DescribeClusterAttachScripts',
        15 => 'CreateAutoscalingConfig',
      ),
    ),
    3 => 
    array (
      'id' => 159692,
      'title' => '节点',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeClusterNodes',
        1 => 'DeleteClusterNodes',
        2 => 'AttachInstances',
      ),
    ),
    4 => 
    array (
      'id' => 159734,
      'title' => '组件',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'InstallClusterAddons',
        1 => 'UnInstallClusterAddons',
        2 => 'DescribeAddons',
        3 => 'DescribeClusterAddonsVersion',
        4 => 'DescribeClusterAddonInstance',
        5 => 'ListAddons',
        6 => 'ListClusterAddonInstances',
        7 => 'GetClusterAddonInstance',
        8 => 'DescribeAddon',
        9 => 'ModifyClusterAddon',
        10 => 'DescribeClusterAddonMetadata',
        11 => 'UpgradeClusterAddons',
        12 => 'DescribeClusterAddonsUpgradeStatus',
      ),
    ),
    5 => 
    array (
      'id' => 159706,
      'title' => '升级',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'UpgradeCluster',
        1 => 'GetUpgradeStatus',
        2 => 'PauseClusterUpgrade',
        3 => 'CancelClusterUpgrade',
        4 => 'ResumeUpgradeCluster',
      ),
    ),
    6 => 
    array (
      'id' => 159660,
      'title' => '权限',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeUserPermission',
        1 => 'GrantPermissions',
      ),
    ),
    7 => 
    array (
      'id' => 159720,
      'title' => '编排模版',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateTemplate',
        1 => 'DescribeTemplateAttribute',
        2 => 'DescribeTemplates',
        3 => 'UpdateTemplate',
        4 => 'DeleteTemplate',
      ),
    ),
    8 => 
    array (
      'id' => 159726,
      'title' => '触发器',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateTrigger',
        1 => 'DeleteTrigger',
        2 => 'DescribeTrigger',
      ),
    ),
    9 => 
    array (
      'id' => 159745,
      'title' => '标签',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListTagResources',
        1 => 'TagResources',
        2 => 'UntagResources',
        3 => 'ModifyClusterTags',
      ),
    ),
    10 => 
    array (
      'id' => 159654,
      'title' => '报警',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'StartAlert',
        1 => 'UpdateContactGroupForAlert',
        2 => 'StopAlert',
        3 => 'DeleteAlertContact',
        4 => 'DeleteAlertContactGroup',
      ),
    ),
    11 => 
    array (
      'id' => 188651,
      'title' => '日志',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'UpdateControlPlaneLog',
        1 => 'CheckControlPlaneLogEnable',
      ),
    ),
    12 => 
    array (
      'id' => 159652,
      'title' => '事件',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeEvents',
        1 => 'DescribeClusterEvents',
      ),
    ),
    13 => 
    array (
      'id' => 187251,
      'title' => '任务',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeTaskInfo',
        1 => 'PauseTask',
        2 => 'ResumeTask',
        3 => 'CancelTask',
        4 => 'DescribeClusterTasks',
      ),
    ),
    14 => 
    array (
      'id' => 159664,
      'title' => '工作流',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'StartWorkflow',
        1 => 'RemoveWorkflow',
        2 => 'CancelWorkflow',
        3 => 'DescirbeWorkflow',
        4 => 'DescribeWorkflows',
      ),
    ),
    15 => 
    array (
      'id' => 159750,
      'title' => '策略治理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DeletePolicyInstance',
        1 => 'ModifyPolicyInstance',
        2 => 'DescribePolicies',
        3 => 'DescribePolicyDetails',
        4 => 'DescribePolicyGovernanceInCluster',
        5 => 'DescribePolicyInstances',
        6 => 'DescribePolicyInstancesStatus',
        7 => 'DeployPolicyInstance',
      ),
    ),
    16 => 
    array (
      'id' => 187255,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeUserQuota',
        1 => 'UpdateUserPermissions',
        2 => 'ListOperationPlans',
        3 => 'CancelOperationPlan',
        4 => 'CheckServiceRole',
        5 => 'GetClusterDiagnosisResult',
        6 => 'GetClusterDiagnosisCheckItems',
        7 => 'CreateClusterDiagnosis',
        8 => 'UpdateResourcesDeleteProtection',
        9 => 'DescribeResourcesDeleteProtection',
      ),
    ),
    17 => 
    array (
      'id' => 188712,
      'title' => '废弃',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeExternalAgent',
        1 => 'CreateKubernetesTrigger',
        2 => 'ResumeComponentUpgrade',
        3 => 'PauseComponentUpgrade',
        4 => 'GetKubernetesTrigger',
        5 => 'DescribeClusters',
        6 => 'DescribeClusterV2UserKubeconfig',
        7 => 'DescribeClusterAddonUpgradeStatus',
        8 => 'CancelComponentUpgrade',
        9 => 'DeleteKubernetesTrigger',
      ),
    ),
  ),
  'components' => 
  array (
    'schemas' => 
    array (
      'addon' => 
      array (
        'title' => '集群插件配置',
        'description' => '集群组件配置。',
        'type' => 'object',
        'properties' => 
        array (
          'name' => 
          array (
            'title' => '插件名称。',
            'description' => '组件名称。',
            'type' => 'string',
            'example' => 'nginx-ingress-controller',
          ),
          'config' => 
          array (
            'title' => '插件配置参数。',
            'description' => '组件配置。',
            'type' => 'string',
            'example' => '{\\"IngressSlbNetworkType\\":\\"internet\\"}',
          ),
          'disabled' => 
          array (
            'title' => '是否禁止默认安装。true | false。',
            'description' => '是否禁止默认安装，集群创建时除了安装必需组件外，还会额外安装一些日志组件等，您可以禁止这些默认行为，后续通过安装组件的API进行安装或者通过控制台安装。取值：

- `true`：禁止默认安装。
- `false`：允许默认安装。
',
            'type' => 'boolean',
            'example' => 'false',
          ),
          'version' => 
          array (
            'title' => '版本。',
            'description' => '组件版本。',
            'type' => 'string',
            'example' => 'v1.9.3-aliyun.1',
          ),
        ),
      ),
      'data_disk' => 
      array (
        'title' => '节点数据盘配置',
        'description' => '节点数据盘配置。',
        'type' => 'object',
        'properties' => 
        array (
          'category' => 
          array (
            'title' => '数据盘类型',
            'description' => '数据盘类型。取值：

- `cloud`：普通云盘。
- `cloud_efficiency`：高效云盘。
- `cloud_ssd`：SSD云盘。
- `cloud_essd`：ESSD云盘。
- `cloud_auto`：ESSD AutoPL云盘。

默认值：`cloud_efficiency`。',
            'type' => 'string',
            'example' => 'cloud_ssd',
          ),
          'size' => 
          array (
            'title' => '数据盘大小，取值范围：40～32767',
            'description' => '数据盘大小，单位为GiB。

取值范围：\\[40,32768\\]。

默认值：`120`。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '40',
          ),
          'encrypted' => 
          array (
            'title' => '是否对数据盘加密。',
            'description' => '是否对数据盘加密。取值：

- `true`：对数据盘加密。
- `false`：不对数据盘加密。

默认值：`false`。',
            'type' => 'string',
            'example' => 'true',
          ),
          'kms_key_id' => 
          array (
            'title' => '数据盘对应的KMS密钥ID',
            'description' => '数据盘对应的KMS密钥ID',
            'type' => 'string',
            'example' => '0e478b7a-4262-4802-b8cb-00d3fb40****',
          ),
          'auto_snapshot_policy_id' => 
          array (
            'title' => '开启云盘备份时的自动备份策略。',
            'description' => '选择自动快照策略ID，云盘会按照快照策略自动备份。

默认值：空，不自动备份。',
            'type' => 'string',
            'example' => 'sp-2zej1nogjvovnz4z****',
          ),
          'performance_level' => 
          array (
            'title' => '数据盘磁盘性能，只针对ESSD磁盘生效',
            'description' => '节点数据盘磁盘性能等级，仅对ESSD磁盘生效。磁盘性能等级和磁盘大小有关。更多信息，请参见[ESSD云盘](~~122389~~)。',
            'type' => 'string',
            'example' => 'PL1',
          ),
          'provisioned_iops' => 
          array (
            'title' => '数据盘预配置的读写IOPS，磁盘类型为cloud_auto时配置。',
            'description' => '数据盘预配置的读写IOPS。可能值：0~min{50,000, 1000\\*容量-基准性能}。
基准性能=min{1,800+50*容量, 50000}。

当`DiskCategory`取值为`cloud_auto`时才支持设置该参数。更多信息，请参见[ESSD AutoPL云盘](~~368372~~)。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1000',
          ),
          'bursting_enabled' => 
          array (
            'title' => '数据盘是否开启Burst（性能突发），磁盘类型为cloud_auto时配置。',
            'description' => '数据盘是否开启Burst（性能突发）。
取值：
- `true`：是。
- `false`：否。

当`DiskCategory`取值为`cloud_auto`时才支持设置该参数。更多信息，请参见[ESSD AutoPL云盘](~~368372~~)。',
            'type' => 'boolean',
            'example' => 'true',
          ),
          'auto_format' => 
          array (
            'title' => '是否挂载。',
            'description' => '是否挂载。',
            'type' => 'boolean',
            'example' => 'true',
          ),
          'file_system' => 
          array (
            'title' => '挂载文件系统类型。auto_format为true时生效，可选值：[ext4,xfs]',
            'description' => '挂载文件系统类型。auto_format为true时生效，可选值：[ext4,xfs]',
            'type' => 'string',
            'example' => 'ext4',
          ),
          'mount_target' => 
          array (
            'title' => '挂载路径。auto_format为true时生效',
            'description' => '挂载路径。auto_format为true时生效',
            'type' => 'string',
            'example' => '/mnt/path1',
          ),
          'disk_name' => 
          array (
            'title' => '数据盘名称。长度为2~128个英文或中文字符。必须以大小字母或中文开头，不能以http://或https://开头。可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。',
            'description' => '数据盘名称。长度为2~128个英文或中文字符。必须以大小字母或中文开头，不能以http://或https://开头。可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。',
            'type' => 'string',
            'example' => 'DataDiskName',
          ),
          'device' => 
          array (
            'title' => '数据盘的挂载点。如果您没有指定该参数，则默认在自动创建ECS实例时由系统分配，从/dev/xvdb开始，到/dev/xvdz结束。',
            'description' => '数据盘的挂载点。如果您没有指定该参数，则默认在自动创建ECS实例时由系统分配，从/dev/xvdb开始，到/dev/xvdz结束。',
            'type' => 'string',
            'example' => '/dev/xvdb',
          ),
          'snapshot_id' => 
          array (
            'title' => '创建数据盘时使用的快照。指定该参数后，DataDisks.Size会被忽略，实际创建的磁盘大小为指定快照的大小。如果该快照创建于2013年7月15日或之前，调用会被拒绝，返回参数中会提示InvalidSnapshot.TooOld。',
            'description' => '创建数据盘时使用的快照。指定该参数后，DataDisks.Size会被忽略，实际创建的磁盘大小为指定快照的大小。如果该快照创建于2013年7月15日或之前，调用会被拒绝，返回参数中会提示InvalidSnapshot.TooOld。',
            'type' => 'string',
            'example' => 's-280s7****',
          ),
        ),
      ),
      'instance_patterns' => 
      array (
        'title' => '实例属性配置。',
        'description' => '实例属性',
        'type' => 'object',
        'properties' => 
        array (
          'core' => 
          array (
            'title' => '实例规格的 vCPU 内核数目。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '4',
          ),
          'memory' => 
          array (
            'title' => '实例规格的内存大小，单位为 GiB。',
            'type' => 'number',
            'format' => 'float',
            'example' => '8',
          ),
          'instance_family_level' => 
          array (
            'title' => '实例规格族级别。',
            'type' => 'string',
            'example' => 'EnterpriseLevel',
          ),
          'max_price' => 
          array (
            'title' => '实例每小时最高价格。',
            'type' => 'number',
            'format' => 'float',
            'example' => '2',
          ),
          'architectures' => 
          array (
            'title' => '实例规格所属的架构类型。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'example' => 'X86',
            ),
          ),
          'burst_performance_option' => 
          array (
            'title' => '是否为性能突发实例规格。',
            'type' => 'string',
            'example' => 'Exclude',
          ),
          'excluded_instance_types' => 
          array (
            'title' => '需要排除的实例规格。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'example' => 'ecs.c6.large',
            ),
          ),
        ),
      ),
      'kubelet_config' => 
      array (
        'title' => 'Kubelet参数配置。',
        'description' => '支持的kubelet配置',
        'type' => 'object',
        'properties' => 
        array (
          'registryPullQPS' => 
          array (
            'title' => '镜像仓库的QPS上限。',
            'description' => '镜像仓库的QPS上限。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '5',
          ),
          'registryBurst' => 
          array (
            'title' => '突发性镜像拉取的个数上限。',
            'description' => '突发性镜像拉取的个数上限。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '10',
          ),
          'eventRecordQPS' => 
          array (
            'title' => '每秒可生成的事件数量。',
            'description' => '每秒可生成的事件数量。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '5',
          ),
          'eventBurst' => 
          array (
            'title' => '事件记录的个数的突发峰值上限。',
            'description' => '事件记录的个数的突发峰值上限。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '10',
          ),
          'kubeAPIQPS' => 
          array (
            'title' => '与API Server通信的每秒查询个数。',
            'description' => '与API Server通信的每秒查询个数。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '5',
          ),
          'kubeAPIBurst' => 
          array (
            'title' => '每秒发送到API Server的突发请求数量上限。',
            'description' => '每秒发送到API Server的突发请求数量上限。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '10',
          ),
          'serializeImagePulls' => 
          array (
            'title' => '是否逐一拉取镜像。',
            'description' => '是否逐一拉取镜像。',
            'type' => 'boolean',
            'example' => 'true',
          ),
          'cpuManagerPolicy' => 
          array (
            'title' => 'CPU管理器策略。',
            'description' => 'CPU管理器策略。',
            'type' => 'string',
            'example' => 'none',
          ),
          'evictionHard' => 
          array (
            'title' => '触发Pod驱逐操作的一组硬性门限。',
            'description' => '触发Pod驱逐操作的一组硬性门限。',
            'type' => 'object',
          ),
          'evictionSoft' => 
          array (
            'title' => '设置一组驱逐阈值。',
            'description' => '设置一组驱逐阈值。',
            'type' => 'object',
          ),
          'evictionSoftGracePeriod' => 
          array (
            'title' => '设置一组驱逐宽限期。',
            'description' => '设置一组驱逐宽限期。',
            'type' => 'object',
          ),
          'systemReserved' => 
          array (
            'title' => '系统预留的资源配置。',
            'description' => '系统预留的资源配置。',
            'type' => 'object',
          ),
          'kubeReserved' => 
          array (
            'title' => 'kubernetes系统预留的资源配置。',
            'description' => 'kubernetes系统预留的资源配置。',
            'type' => 'object',
          ),
          'readOnlyPort' => 
          array (
            'title' => '只读端口号。',
            'description' => '只读端口号。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '0',
          ),
          'maxPods' => 
          array (
            'title' => '运行的Pod个数上限。',
            'description' => '运行的Pod个数上限。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '110',
          ),
          'containerLogMaxSize' => 
          array (
            'title' => '日志文件被轮转之前可以到达的最大大小。',
            'description' => '日志文件被轮转之前可以到达的最大大小。',
            'type' => 'string',
            'example' => '10Mi',
          ),
          'containerLogMaxFiles' => 
          array (
            'title' => '每个容器可以存在的日志文件个数上限。',
            'description' => '每个容器可以存在的日志文件个数上限。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '5',
          ),
          'featureGates' => 
          array (
            'title' => '特性开关，用来开启实验性功能的配置。',
            'description' => '特性开关，用来开启实验性功能的配置。',
            'type' => 'object',
          ),
          'allowedUnsafeSysctls' => 
          array (
            'title' => '允许的sysctl模式白名单。',
            'description' => '允许的sysctl模式白名单。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '允许的sysctl模式白名单。',
              'type' => 'string',
              'example' => 'net.core.somaxconn',
            ),
          ),
        ),
      ),
      'maintenance_window' => 
      array (
        'title' => '集群维护窗口。',
        'description' => '集群维护窗口。',
        'type' => 'object',
        'properties' => 
        array (
          'enable' => 
          array (
            'title' => '是否开启维护窗口。默认值false。',
            'description' => '是否开启维护窗口。取值：
- `true`：开启维护窗口。
- `false`：不开启维护窗口。

默认值：`false`。',
            'type' => 'boolean',
            'example' => 'false',
          ),
          'maintenance_time' => 
          array (
            'title' => '维护起始时间。Golang标准时间格式"15:04:05Z"。',
            'description' => '维护起始时间。Golang标准时间格式，例如15:04:05Z。',
            'type' => 'string',
            'example' => '03:00:00Z',
          ),
          'duration' => 
          array (
            'title' => '维护时长。取值范围1～24，单位为小时。 默认值：3h。',
            'description' => '维护时长。取值范围\\[1,24\\]，单位为小时。

默认值：3h。',
            'type' => 'string',
            'example' => '3h',
          ),
          'weekly_period' => 
          array (
            'title' => '维护周期。取值范围为:Monday~Sunday，多个值用逗号分隔。 默认值：Thursday。',
            'description' => '维护周期，多个值用英文半角逗号（,）分隔。取值：{Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday}

默认值：`Thursday`。',
            'type' => 'string',
            'example' => 'Monday,Thursday',
          ),
        ),
      ),
      'nodepool' => 
      array (
        'title' => '节点池信息。',
        'description' => '节点池。',
        'type' => 'object',
        'properties' => 
        array (
          'auto_scaling' => 
          array (
            'title' => '自动伸缩节点池配置。',
            'description' => '自动伸缩节点池配置。',
            'type' => 'object',
            'properties' => 
            array (
              'enable' => 
              array (
                'title' => '是否开启自动伸缩。',
                'description' => '是否启用自动伸缩。

- `true`：开启节点池自动伸缩功能。
- `false`：不开启自动伸缩，当取值为false时，`auto_scaling`内的其他配置参数将不生效。

默认值：`false`。',
                'type' => 'boolean',
                'required' => true,
                'example' => 'true',
              ),
              'max_instances' => 
              array (
                'title' => '最大实例数。',
                'description' => '自动伸缩组最大实例数。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '10',
              ),
              'min_instances' => 
              array (
                'title' => '最小实例数。',
                'description' => '自动伸缩组最小实例数。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '0',
              ),
              'type' => 
              array (
                'title' => '扩容节点类型。',
                'description' => '自动伸缩类型，按照自动伸缩实例类型划分。取值：

- `cpu`：普通实例型。
- `gpu`：GPU实例型。
- `gpushare`：GPU共享型。
- `spot`：抢占式实例型。

默认值：`cpu`。',
                'type' => 'string',
                'example' => 'cpu',
              ),
              'is_bond_eip' => 
              array (
                'title' => '是否绑定EIP。',
                'description' => '【该字段已废弃】

是否绑定EIP，取值：

- `true`：绑定EIP。
- `false`：不绑定EIP。

默认值：`false`。',
                'type' => 'boolean',
                'deprecated' => true,
                'example' => 'true',
              ),
              'eip_internet_charge_type' => 
              array (
                'title' => 'EIP实例规格。',
                'description' => '【该字段已废弃】

EIP计费类型，取值：

- `PayByBandwidth`：按固定带宽计费。
- `PayByTraffic`：按使用流量计费。

默认值：PayByBandwidth。',
                'type' => 'string',
                'deprecated' => true,
                'example' => 'PayByBandwidth',
              ),
              'eip_bandwidth' => 
              array (
                'title' => '带宽峰值。',
                'description' => '【该字段已废弃】

EIP带宽峰值。单位：Mbps。',
                'type' => 'integer',
                'format' => 'int64',
                'deprecated' => true,
                'example' => '5',
              ),
            ),
          ),
          'kubernetes_config' => 
          array (
            'title' => '集群配置。',
            'description' => '集群相关配置。',
            'type' => 'object',
            'properties' => 
            array (
              'cms_enabled' => 
              array (
                'title' => '是否开启云监控。',
                'description' => '是否在ECS节点上安装云监控，安装后可以在云监控控制台查看所创建ECS实例的监控信息，推荐开启。取值：

- `true`：在ECS节点上安装云监控。
- `false`：不在ECS节点上安装云监控。

默认值：`false`。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'cpu_policy' => 
              array (
                'title' => 'CPU管理策略。',
                'description' => '节点CPU管理策略。当集群版本在1.12.6及以上时支持以下两种策略：

- `static`：允许为节点上具有某些资源特征Pod增强其CPU亲和性和独占性。
- `none`：表示启用现有的默认CPU亲和性方案。

默认值：`none`。',
                'type' => 'string',
                'example' => 'none',
              ),
              'labels' => 
              array (
                'title' => '节点标签。',
                'description' => '节点标签，为Kubernetes集群节点添加标签。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '节点标签。',
                  '$ref' => '#/components/schemas/tag',
                ),
              ),
              'runtime' => 
              array (
                'title' => '容器运行时。',
                'description' => '容器运行时。取值：
- `containerd`：推荐使用，支持所有集群版本。
- `Sandboxed-Container.runv`：安全沙箱容器，提供更高的隔离性，支持1.24版本及以下集群。
- `docker`：支持1.22版本及以下集群。

默认值：`containerd`',
                'type' => 'string',
                'required' => true,
                'example' => 'containerd',
              ),
              'runtime_version' => 
              array (
                'title' => '容器运行时版本。',
                'description' => '容器运行时版本。',
                'type' => 'string',
                'required' => true,
                'example' => '1.6.20',
              ),
              'taints' => 
              array (
                'title' => '污点信息。',
                'description' => '污点配置。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '污点配置。',
                  '$ref' => '#/components/schemas/taint',
                ),
              ),
              'user_data' => 
              array (
                'title' => '节点自定义数据。',
                'description' => '节点自定义数据。',
                'type' => 'string',
                'example' => 'MXM=',
              ),
              'node_name_mode' => 
              array (
                'title' => '自定义节点名称',
                'description' => '节点名称由三部分组成：前缀 + 节点 IP + 后缀：

- 前缀和后缀均可由“.”分隔的一个或多个部分构成，每个部分可以使用小写字母、数字和“-”，节点名称首尾必须为小写字母和数字；
- 节点 IP为完整的节点私网 IP 地址；

传参包含四个部分，由逗号分隔，例如：参数传入"customized,aliyun,ip,com"字符串（其中“customized”和"ip"为固定的字符串，aliyun为前缀，com为后缀），则节点的名称为：aliyun.192.168.xxx.xxx.com。',
                'type' => 'string',
                'example' => 'customized,aliyun,ip,com',
              ),
            ),
          ),
          'nodepool_info' => 
          array (
            'title' => '节点池配置。',
            'description' => '节点池配置。',
            'type' => 'object',
            'properties' => 
            array (
              'name' => 
              array (
                'title' => '节点池名称',
                'description' => '节点池名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'np-test',
              ),
              'resource_group_id' => 
              array (
                'title' => '资源组ID。',
                'description' => '节点池所在资源ID。',
                'type' => 'string',
                'required' => false,
                'example' => 'rg-acfmyvw3wjm****',
              ),
              'type' => 
              array (
                'title' => '节点池类型，对于边缘节点池来说，类型为"edge"',
                'description' => '节点池类型，取值范围：

- `ess`：节点池。
- `edge`：边缘节点池。',
                'type' => 'string',
                'example' => 'ess',
              ),
            ),
          ),
          'scaling_group' => 
          array (
            'title' => '伸缩组配置。',
            'description' => '节点池扩容组配置。',
            'type' => 'object',
            'properties' => 
            array (
              'auto_renew' => 
              array (
                'title' => '节点是否开启自动续费',
                'description' => '节点池是否开启自动续费，当`instance_charge_type`取值为`PrePaid`时才生效，取值：

- `true`：自动续费。
- `false`：不自动续费。

默认值：`true`。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'auto_renew_period' => 
              array (
                'title' => '节点自动续费周期',
                'description' => '节点池自动续费周期。当`instance_charge_type`取值为`PrePaid`时才生效，且为必选值。

当`PeriodUnit=Month`时，取值范围：{1, 2, 3, 6, 12}。

默认值：1。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '0',
              ),
              'data_disks' => 
              array (
                'title' => '数据盘配置。',
                'description' => '节点池节点数据盘配置。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '节点池节点数据盘配置。',
                  '$ref' => '#/components/schemas/data_disk',
                ),
              ),
              'image_id' => 
              array (
                'title' => '自定义镜像。',
                'description' => '自定义镜像ID，默认使用系统提供的镜像。',
                'type' => 'string',
                'example' => 'aliyun_2_1903_x64_20G_alibase_20200904.vhd',
              ),
              'instance_charge_type' => 
              array (
                'title' => '节点付费类型',
                'description' => '节点池节点付费类型，取值：

- `PrePaid`：预付费。
- `PostPaid`：按量付费。

默认值：`PostPaid`。',
                'type' => 'string',
                'required' => true,
                'example' => 'PostPaid',
              ),
              'instance_types' => 
              array (
                'title' => '实例规格。',
                'description' => '实例规格。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '实例规格。',
                  'type' => 'string',
                  'example' => 'ecs.n1.medium',
                ),
                'required' => true,
              ),
              'key_pair' => 
              array (
                'title' => '密钥对名称，和login_password二选一。',
                'description' => '密钥对名称，和`login_password`二选一。

> 如果创建托管节点池，则只支持`key_pair`。',
                'type' => 'string',
                'required' => false,
                'example' => 'np-key',
              ),
              'login_password' => 
              array (
                'title' => 'SSH登录密码。',
                'description' => 'SSH登录密码，和`key_pair`二选一。密码规则为8~30个字符，且至少同时包含三项（大小写字母、数字和特殊符号）。',
                'type' => 'string',
                'required' => false,
                'example' => 'Hello1234',
              ),
              'login_as_non_root' => 
              array (
                'title' => '弹出的ECS实例是否使用以非root用户登陆。',
                'description' => '弹出的ECS实例是否使用以非root用户登录。',
                'type' => 'boolean',
              ),
              'period' => 
              array (
                'title' => '节点包年包月时长。',
                'description' => '节点池节点包年包月时长，当`instance_charge_type`取值为`PrePaid`时才生效且为必选值，取值范围：`period_unit`取值为Month时，`period`取值范围：{ 1, 2, 3, 6, 12}。

默认值：1。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '0',
              ),
              'period_unit' => 
              array (
                'title' => '节点包年包月周期。',
                'description' => '节点池节点付费周期，当`instance_charge_type`取值为`PrePaid`时需要指定周期。

`Month`：目前只支持以月为单位。',
                'type' => 'string',
                'example' => 'Month',
              ),
              'platform' => 
              array (
                'title' => '操作系统发行版，和image_type二选一',
                'description' => '操作系统发行版。取值：

- `CentOS`
- `AliyunLinux`
- `Windows`
- `WindowsCore`

默认值：`AliyunLinux`。',
                'type' => 'string',
                'deprecated' => true,
                'required' => false,
                'example' => 'AliyunLinux',
              ),
              'rds_instances' => 
              array (
                'title' => 'RDS实例列表。',
                'description' => 'RDS实例列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'RDS实例ID。',
                  'type' => 'string',
                  'example' => 'rm-2zey3t89t6280****',
                ),
              ),
              'spot_strategy' => 
              array (
                'title' => '抢占式实例类型',
                'description' => '抢占式实例类型，取值：
- NoSpot：非抢占式实例。
- SpotWithPriceLimit：设置抢占实例价格上限。
- SpotAsPriceGo：系统自动出价，跟随当前市场实际价格。

更多信息，请参见[抢占式实例](~~157759~~)。',
                'type' => 'string',
                'example' => 'NoSpot',
              ),
              'spot_price_limit' => 
              array (
                'title' => '抢占实例价格上限配置。',
                'description' => '当前单台抢占式实例规格市场价格区间配置。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'instance_type' => 
                    array (
                      'title' => '抢占实例规格。',
                      'description' => '抢占式实例规格。',
                      'type' => 'string',
                      'example' => 'ecs.c6.large',
                    ),
                    'price_limit' => 
                    array (
                      'title' => '抢占实例单价。',
                      'description' => '单台实例上限价格。
',
                      'type' => 'string',
                      'example' => '0.39',
                    ),
                  ),
                ),
              ),
              'scaling_policy' => 
              array (
                'title' => '自动伸缩。',
                'description' => '伸缩组模式，取值：

- `release`：标准模式，根据申请资源值的使用量，通过创建、释放ECS的方式进行伸缩。
- `recycle`：极速模式，通过创建、停机、启动的方式进行伸缩，提高再次伸缩的速度（停机时计算资源不收费，只收取存储费用，本地盘机型除外）。

默认值：`release`。',
                'type' => 'string',
                'example' => 'release',
              ),
              'security_group_id' => 
              array (
                'title' => '安全组ID。',
                'description' => '节点池安全组ID，与`security_group_ids`二选一，推荐使用`security_group_ids`。',
                'type' => 'string',
                'required' => false,
                'example' => 'sg-2zeihch86ooz9io4****',
              ),
              'security_group_ids' => 
              array (
                'title' => '多安全组ID',
                'description' => '安全组ID列表，与`security_group_id`二选一，推荐使用`security_group_ids`，当同时指定`security_group_id`和`security_group_ids`将优先使用`security_group_ids`。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '安全组ID。',
                  'type' => 'string',
                  'example' => 'sg-2zeihch86ooz9io4****',
                ),
              ),
              'system_disk_category' => 
              array (
                'title' => '节点系统盘类型。',
                'description' => '节点系统盘类型，取值：

- `cloud_efficiency`：高效云盘。
- `cloud_ssd`：SSD云盘。
- `cloud_essd`：ESSD云盘。
- `cloud_auto`：ESSD AutoPL云盘。
- `cloud_essd_entry`：ESSD Entry云盘。

默认值：`cloud_efficiency`。',
                'type' => 'string',
                'example' => 'cloud_efficiency',
              ),
              'system_disk_categories' => 
              array (
                'title' => '系统盘的多磁盘类型。当无法使用高优先级的磁盘类型时，自动尝试下一优先级的磁盘类型创建系统盘。取值范围：cloud：普通云盘。cloud_efficiency：高效云盘。cloud_ssd：SSD云盘。cloud_essd：ESSD云盘。',
                'description' => '系统盘的多磁盘类型。当无法使用高优先级的磁盘类型时，自动尝试下一优先级的磁盘类型创建系统盘。取值范围：cloud：普通云盘。cloud_efficiency：高效云盘。cloud_ssd：SSD云盘。cloud_essd：ESSD云盘。',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '节点系统盘类型',
                  'description' => '节点系统盘类型',
                  'type' => 'string',
                ),
                'required' => false,
                'maxItems' => 10,
              ),
              'system_disk_size' => 
              array (
                'title' => '节点系统盘大小。',
                'description' => '节点系统盘大小，单位：GiB。

取值范围：[40,500]。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '120',
              ),
              'system_disk_performance_level' => 
              array (
                'title' => '节点系统盘磁盘性能，只针对ESSD磁盘生效',
                'description' => '节点系统盘磁盘性能，只对ESSD磁盘生效。

- PL0：并发极限I/O性能中等，读写时延较为稳定。
- PL1：并发极限I/O性能中等，读写时延较为稳定。
- PL2：并发极限I/O性能较高，读写时延稳定。
- PL3：并发极限I/O性能极高，读写时延极稳定。',
                'type' => 'string',
                'example' => 'PL1',
              ),
              'system_disk_encrypted' => 
              array (
                'title' => '是否加密系统盘。取值范围：true：加密。false：不加密。',
                'description' => '是否加密系统盘。取值范围：true：加密。false：不加密。',
                'type' => 'boolean',
              ),
              'system_disk_kms_key_id' => 
              array (
                'title' => '节点系统盘使用的KMS密钥ID。',
                'description' => '节点系统盘使用的KMS密钥ID。',
                'type' => 'string',
                'example' => '0e478b7a-4262-4802-b8cb-00d3fb40****',
              ),
              'system_disk_encrypt_algorithm' => 
              array (
                'title' => '节点系统盘采用的加密算法。取值范围：aes-256。',
                'description' => '节点系统盘采用的加密算法。取值范围：aes-256。',
                'type' => 'string',
                'example' => 'aes-256',
              ),
              'system_disk_provisioned_iops' => 
              array (
                'title' => '节点系统盘预配置的读写IOPS，磁盘类型为cloud_auto时配置。',
                'description' => '节点系统盘预配置的读写IOPS。可能值：0~min{50,000, 1000\\*容量-基准性能}。 基准性能=min{1,800+50\\*容量, 50000}。

当`SystemDiskCategory`为`cloud_auto`时才支持设置该参数。更多信息，请参见[ESSD AutoPL云盘](~~368372~~)。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1000',
              ),
              'system_disk_bursting_enabled' => 
              array (
                'title' => '节点系统盘是否开启Burst（性能突发），磁盘类型为cloud_auto时配置。',
                'description' => '节点系统盘是否开启Burst（性能突发）。 取值：

- true：是。
- false：否。

当`SystemDiskCategory`取值为`cloud_auto`时才支持设置该参数。更多信息，请参见[ESSD AutoPL云盘](~~368372~~)。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'tags' => 
              array (
                'title' => 'ECS标签',
                'description' => '仅为ECS实例添加标签。

标签键不可以重复，最大长度为128个字符；标签键和标签值都不能以“aliyun”、“acs:”开头，或包含“https://”、“http://”。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'key' => 
                    array (
                      'title' => 'key',
                      'description' => '标签的名称。',
                      'type' => 'string',
                      'example' => 'key',
                    ),
                    'value' => 
                    array (
                      'title' => 'value',
                      'description' => '标签值。',
                      'type' => 'string',
                      'example' => 'value',
                    ),
                  ),
                ),
              ),
              'vswitch_ids' => 
              array (
                'title' => '虚拟交换机ID。',
                'description' => '虚拟交换机ID。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '虚拟交换机ID。',
                  'type' => 'string',
                  'example' => 'vsw-2ze0fmpbwo140ahni****',
                ),
                'required' => true,
              ),
              'multi_az_policy' => 
              array (
                'title' => '多可用区伸缩组ECS实例扩缩容策略',
                'description' => '多可用区伸缩组ECS实例扩缩容策略。取值：

- `PRIORITY`：根据您定义的虚拟交换机（VSwitchIds.N）扩缩容。当优先级较高的虚拟交换机所在可用区无法创建ECS实例时，自动使用下一优先级的虚拟交换机创建ECS实例。

- `COST_OPTIMIZED`：按vCPU单价从低到高进行尝试创建。当伸缩配置设置了抢占式计费方式的多实例规格时，优先创建对应抢占式实例。您可以继续通过`CompensateWithOnDemand`参数指定当抢占式实例由于库存等原因无法创建时，是否自动尝试以按量付费的方式创建。

  >`COST_OPTIMIZED`仅在伸缩配置设置了多实例规格或者选用了抢占式实例的情况下生效。

- `BALANCE`：在伸缩组指定的多可用区之间均匀分配ECS实例。如果由于库存不足等原因可用区之间变得不平衡，您可以通过API RebalanceInstances平衡资源。更多信息，请参见[RebalanceInstances](~~71516~~)。

默认值：`PRIORITY`。',
                'type' => 'string',
                'example' => 'COST_OPTIMIZED',
              ),
              'on_demand_base_capacity' => 
              array (
                'title' => '伸缩组所需要按量实例个数的最小值，取值范围：0~1000。当按量实例个数少于该值时，将优先创建按量实例。',
                'description' => '伸缩组所需要按量实例个数的最小值，取值范围：[0,1000]。当按量实例个数少于该值时，将优先创建按量实例。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '0',
              ),
              'on_demand_percentage_above_base_capacity' => 
              array (
                'title' => '伸缩组满足最小按量实例数（OnDemandBaseCapacity）要求后，超出的实例中按量实例应占的比例，取值范围：0～100。',
                'description' => '伸缩组满足最小按量实例数（`on_demand_base_capacity`）要求后，超出的实例中按量实例应占的比例。取值范围：[0,100]。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'spot_instance_pools' => 
              array (
                'title' => '指定可用实例规格的个数，伸缩组将按成本最低的多个规格均衡创建抢占式实例。取值范围：1~10。',
                'description' => '指定可用实例规格的个数，伸缩组将按成本最低的多个规格均衡创建抢占式实例。取值范围：[1,10]。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '5',
              ),
              'spot_instance_remedy' => 
              array (
                'title' => '是否开启补齐抢占式实例。开启后，当收到抢占式实例将被回收的系统消息时，伸缩组将尝试创建新的实例，替换掉将被回收的抢占式实例。',
                'description' => '是否开启补齐抢占式实例。开启后，当收到抢占式实例将被回收的系统消息时，伸缩组将尝试创建新的实例，替换掉将被回收的抢占式实例。取值：

- `true`：开启补齐抢占式实例。
- `false`：不开启补齐抢占式实例。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'compensate_with_on_demand' => 
              array (
                'title' => '当MultiAZPolicy取值为COST_OPTIMIZED时，如果因价格、库存等原因无法创建足够的抢占式实例，是否允许自动尝试创建按量实例满足ECS实例数量要求。取值范围：true：允许。false：不允许。默认值：true',
                'description' => '当`multi_az_policy`取值为`COST_OPTIMIZED`时，如果因价格、库存等原因无法创建足够的抢占式实例，是否允许自动尝试创建按量实例满足ECS实例数量要求。取值：

- `true`：允许自动尝试创建按量实例满足ECS实例数量要求。
- `false`：不允许自动尝试创建按量实例满足ECS实例数量要求。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'internet_charge_type' => 
              array (
                'title' => '节点公网IP网络计费类型',
                'description' => '公网IP收费类型。取值：

- `PayByBandwidth`：按固定带宽计费。
- `PayByTraffic`：按使用流量计费。',
                'type' => 'string',
                'example' => 'PayByBandwidth',
              ),
              'internet_max_bandwidth_out' => 
              array (
                'title' => '节点公网IP出带宽最大值，单位为Mbps（Mega bit per second），取值范围：1~100',
                'description' => '节点公网IP出带宽最大值，单位为Mbps（Mega bit per second），取值范围：[1,100]',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'image_type' => 
              array (
                'title' => '操作系统发行版类型，推荐使用该字段指定节点操作系统。取值：CentOS、AliyunLinux、AliyunLinux Qboot、AliyunLinuxUEFI、AliyunLinux3、Windows、WindowsCore、AliyunLinux3Arm64、ContainerOS。',
                'description' => '操作系统镜像类型，和platform参数二选一，取值范围：

- `AliyunLinux`：Alinux2镜像。
- `AliyunLinux3`：Alinux3镜像。
- `AliyunLinux3Arm64`：Alinux3镜像ARM版。
- `AliyunLinuxUEFI`：Alinux2镜像UEFI版。
- `CentOS`：CentOS镜像。
- `Windows`：Windows镜像。
- `WindowsCore`：WindowsCore镜像。
- `ContainerOS`：容器优化镜像。',
                'type' => 'string',
                'example' => 'AliyunLinux',
              ),
              'deploymentset_id' => 
              array (
                'title' => '部署集ID。',
                'description' => '部署集ID。',
                'type' => 'string',
                'example' => 'ds-bp1d19mmbsv3jf6xxxxx',
              ),
              'desired_size' => 
              array (
                'title' => '姐弟池期望节点数',
                'description' => '节点池期望节点数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2',
              ),
              'private_pool_options' => 
              array (
                'title' => '私有节点池配置。',
                'description' => '私有节点池配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'id' => 
                  array (
                    'title' => '私有节点池ID。',
                    'description' => '私有节点池ID。',
                    'type' => 'string',
                    'example' => 'eap-bp67acfmxazb4****',
                  ),
                  'match_criteria' => 
                  array (
                    'title' => '私有节点池类型。',
                    'description' => '私有节点池类型，实例启动的私有池容量选项。弹性保障服务或容量预定服务在生效后会生成私有池容量，供实例启动时选择。取值：

- `Open`：开放模式。将自动匹配开放类型的私有池容量。如果没有符合条件的私有池容量，则使用公共池资源启动。

- `Target`：指定模式。使用指定的私有池容量启动实例，如果该私有池容量不可用，则实例会启动失败。

- `None`：不使用模式。实例启动将不使用私有池容量。',
                    'type' => 'string',
                    'example' => 'Open',
                  ),
                ),
              ),
            ),
          ),
          'tee_config' => 
          array (
            'title' => '加密计算节点池配置。',
            'description' => '加密计算节点池配置。',
            'type' => 'object',
            'properties' => 
            array (
              'tee_enable' => 
              array (
                'title' => '是否为加密计算节点池。',
                'description' => '是否为加密计算节点池。',
                'type' => 'boolean',
                'required' => true,
                'example' => 'false',
              ),
            ),
          ),
          'management' => 
          array (
            'title' => '托管节点池配置。',
            'description' => '托管节点池配置。',
            'type' => 'object',
            'properties' => 
            array (
              'enable' => 
              array (
                'title' => '是否开启托管版节点池。',
                'description' => '是否开启托管版节点池，取值：

- `true`：开启托管节点池。
- `false`：不开启托管节点池，只有当`enable=true`时，其他相关配置才生效。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'auto_repair' => 
              array (
                'title' => '自动修复。',
                'description' => '自动修复，仅当`enable=true`时生效。

- `true`：自动修复。
- `false`：不自动修复。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'upgrade_config' => 
              array (
                'title' => '自动升级配置。',
                'description' => '自动升级配置，仅当`enable=true`时生效。',
                'type' => 'object',
                'properties' => 
                array (
                  'auto_upgrade' => 
                  array (
                    'title' => '是否启用自动升级，自修复。',
                    'description' => '是否启用自动升级，取值：

- `true`：启用自动升级。
- `false`：不启用自动升级。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'surge' => 
                  array (
                    'title' => '额外节点数量。',
                    'description' => '额外节点数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'surge_percentage' => 
                  array (
                    'title' => '额外节点比例，和surge二选一。',
                    'description' => '额外节点比例，和`surge`二选一。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'max_unavailable' => 
                  array (
                    'title' => '最大不可用节点数量。',
                    'description' => '最大不可用节点数量，取值范围：\\[1,1000\\]。

默认值：1。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                ),
                'deprecated' => true,
              ),
              'auto_repair_policy' => 
              array (
                'title' => '自动修复节点策略。',
                'description' => '自动修复节点策略。',
                'type' => 'object',
                'properties' => 
                array (
                  'restart_node' => 
                  array (
                    'title' => '是否允许重启节点。',
                    'description' => '是否允许重启节点。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
              'auto_vul_fix' => 
              array (
                'title' => '是否自动修复CVE。',
                'description' => '是否自动修复CVE。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'auto_vul_fix_policy' => 
              array (
                'title' => '自动修复CVE策略。',
                'description' => '自动修复CVE策略。',
                'type' => 'object',
                'properties' => 
                array (
                  'restart_node' => 
                  array (
                    'title' => '是否允许重启节点。',
                    'description' => '是否允许重启节点。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'vul_level' => 
                  array (
                    'title' => '允许自动修复的漏洞级别，以逗号分隔。',
                    'description' => '允许自动修复的漏洞级别，以逗号分隔。',
                    'type' => 'string',
                    'example' => 'asap,nntf',
                  ),
                ),
              ),
              'auto_upgrade' => 
              array (
                'title' => '是否自动升级。',
                'description' => '是否自动升级。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'auto_upgrade_policy' => 
              array (
                'title' => '自动升级策略。',
                'description' => '自动升级策略。',
                'type' => 'object',
                'properties' => 
                array (
                  'auto_upgrade_kubelet' => 
                  array (
                    'title' => '是否允许自动升级kubelet。',
                    'description' => '是否允许自动升级kubelet。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
            ),
          ),
          'count' => 
          array (
            'title' => '节点数量。',
            'description' => '【该字段已废弃，请使用desired_size代替】

节点池节点数量。',
            'type' => 'integer',
            'format' => 'int64',
            'deprecated' => true,
            'example' => '1',
          ),
          'interconnect_mode' => 
          array (
            'title' => '边缘节点池的网络类型。basic：基础型；improved：增强型。该值只对edge类型的节点池有意义。',
            'description' => '边缘节点池的网络类型，该值只对`type`为`edge`类型的节点池有意义，取值范围：

- `basic`：基础型。
- `private`: 专用型。1.22及以上版本支持。',
            'type' => 'string',
            'example' => 'basic',
          ),
          'interconnect_config' => 
          array (
            'title' => '边缘节点池网络相关的配置。该值只对edge类型的节点池有意义',
            'description' => '【该字段已废弃】

边缘节点池配置。',
            'type' => 'object',
            'properties' => 
            array (
              'cen_id' => 
              array (
                'title' => '边缘增强型节点池绑定的云企业网实例ID(CENID)',
                'description' => '【该字段已废弃】

边缘增强型节点池绑定的云企业网实例ID(CENID)。',
                'type' => 'string',
                'deprecated' => true,
                'example' => 'cen-ey9k9nfhz0f*******',
              ),
              'ccn_id' => 
              array (
                'title' => '边缘增强型节点池绑定的云连接网实例ID(CCNID)',
                'description' => '【该字段已废弃】

边缘增强型节点池绑定的云连接网实例ID(CCNID)。',
                'type' => 'string',
                'deprecated' => true,
                'example' => 'ccn-qm5i0i0q9yi*******',
              ),
              'ccn_region_id' => 
              array (
                'title' => '边缘增强型节点池绑定的云连接网实例所属的区域',
                'description' => '【该字段已废弃】

边缘增强型节点池绑定的云连接网实例所属的地域。',
                'type' => 'string',
                'deprecated' => true,
                'example' => 'cn-shanghai',
              ),
              'bandwidth' => 
              array (
                'title' => '边缘增强型节点池的网络带宽，单位M。',
                'description' => '【该字段已废弃】

边缘增强型节点池的网络带宽，单位：Mbps。',
                'type' => 'integer',
                'format' => 'int64',
                'deprecated' => true,
                'example' => '10',
              ),
              'improved_period' => 
              array (
                'title' => '边缘增强型节点池的购买时长，单位月',
                'description' => '【该字段已废弃】

边缘增强型节点池的购买时长，单位：月。',
                'type' => 'string',
                'deprecated' => true,
                'example' => '1',
              ),
            ),
            'deprecated' => true,
          ),
          'max_nodes' => 
          array (
            'title' => '边缘节点池允许容纳的最大节点数量. 节点池内可以容纳的最大节点数量，该参数大于等于0。0表示无额外限制(仅受限于集群整体可以容纳的节点数，节点池本身无额外限制)。边缘节点池该参数值往往大于0；ess类型节点池和默认的edge类型节点池该参数值为0。',
            'description' => '边缘节点池允许容纳的最大节点数量，该参数大于等于0。0表示无额外限制（仅受限于集群整体可以容纳的节点数，节点池本身无额外限制）。边缘节点池该参数值往往大于0；ess类型节点池和默认的edge类型节点池该参数值为0。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '10',
          ),
          'node_config' => 
          array (
            'title' => '节点配置。',
            'description' => '节点配置。',
            'type' => 'object',
            'properties' => 
            array (
              'kubelet_configuration' => 
              array (
                'title' => 'Kubelet参数配置。',
                'description' => 'Kubelet参数配置。',
                '$ref' => '#/components/schemas/kubelet_config',
              ),
            ),
          ),
        ),
      ),
      'runtime' => 
      array (
        'title' => '容器运行时配置',
        'description' => '容器引擎。',
        'type' => 'object',
        'properties' => 
        array (
          'name' => 
          array (
            'title' => '容器运行时名称',
            'description' => '容器运行时名称，ACK支持以下三种容器运行时。

- `containerd`：推荐使用，支持所有集群版本。
- `Sandboxed-Container.runv`：安全沙箱容器，提供更高的隔离性，支持1.24版本及以下集群。
- `docker`：支持1.22版本及以下集群。

默认值：`containerd`',
            'type' => 'string',
            'example' => 'containerd',
          ),
          'version' => 
          array (
            'title' => '容器运行时版本',
            'description' => '容器运行时版本，默认为最新版。

关于安全沙箱运行时的变更详情，请参见[安全沙箱运行时变更记录](~~160312~~)。',
            'type' => 'string',
            'example' => '1.6.20',
          ),
        ),
      ),
      'tag' => 
      array (
        'title' => '集群Tag配置',
        'description' => '标签配置。',
        'type' => 'object',
        'properties' => 
        array (
          'key' => 
          array (
            'title' => 'key值。',
            'description' => '标签`key`值。',
            'type' => 'string',
            'example' => 'env',
          ),
          'value' => 
          array (
            'title' => 'value值。',
            'description' => '标签`value`值。',
            'type' => 'string',
            'example' => 'prod',
          ),
        ),
      ),
      'taint' => 
      array (
        'title' => '节点污点配置',
        'description' => '节点污点配置。',
        'type' => 'object',
        'properties' => 
        array (
          'key' => 
          array (
            'title' => 'key值。',
            'description' => '污点`key`值。',
            'type' => 'string',
            'example' => 'key',
          ),
          'value' => 
          array (
            'title' => 'value值。',
            'description' => '污点`value`值。',
            'type' => 'string',
            'example' => 'value',
          ),
          'effect' => 
          array (
            'title' => '污点生效策略。',
            'description' => '调度策略。取值：

- `NoSchedule`：不能容忍，但仅影响调度过程，已被调度的Pod不受影响，仅对新增加的Pod生效。

- `NoExecute`：不能容忍，当污点变动时，Pod对象会被驱逐。

- `PreferNoSchedule`：柔性约束，节点现存Pod不受影响。尽量不去满足不合要求的Pod调度到节点上。

默认策略：`NoSchedule`。',
            'type' => 'string',
            'example' => 'NoSchedule',
          ),
        ),
      ),
    ),
  ),
  'apis' => 
  array (
    'OpenAckService' => 
    array (
      'summary' => '首次使用容器服务Kubernetes版（Alibaba Cloud Container Service for Kubernetes，简称容器服务ACK）时，您需要使用阿里云账号（主账号）或有相应权限的RAM用户（子账号）开通并授权容器服务。',
      'path' => '/service/open',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '要开通的服务类型',
            'description' => '待开通的服务类型。可选值：

- `propayasgo`：容器服务Kubernetes版（包括ACK托管集群和ACK专有集群）、容器服务Serverless版、注册集群。
- `edgepayasgo`：容器服务Edge版。',
            'type' => 'string',
            'required' => false,
            'example' => 'propayasgo',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回体参数',
            'description' => '返回体参数',
            'type' => 'object',
            'properties' => 
            array (
              'request_id' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F534F',
              ),
              'order_id' => 
              array (
                'title' => '开通服务的订单号。',
                'description' => '开通服务的订单号。',
                'type' => 'string',
                'example' => '2067*******0374',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"request_id\\": \\"20758A-585D-4A41-A9B2-28DA8F4F534F\\",\\n  \\"order_id\\": \\"2067*******0374\\"\\n}","errorExample":""},{"type":"xml","example":"<request_id>20758A-585D-4A41-A9B2-28DA8F4F534F</request_id>\\n<order_id>2067*******0374</order_id>","errorExample":""}]',
      'title' => '开通容器服务Kubernetes版',
      'description' => '- 阿里云账号（主账号）可以开通容器服务ACK。
- RAM用户（子账号）有AdministratorAccess权限的子账号可以开通服务。',
    ),
    'CreateCluster' => 
    array (
      'summary' => '您可以通过OpenAPI创建ACK集群，包含ACK托管集群、ACK专有集群、ACK Serverless集群，ACK Edge集群以及注册集群。创建集群时，您将完成集群信息、集群组件以及ACK相关云资源的配置。',
      'path' => '/clusters',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '411',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcskJEIDU7',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求体参数',
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'name' => 
              array (
                'title' => '集群名称。',
                'description' => '集群名称。

命名规则：由数字、汉字、英文字符或短划线（-）组成，长度范围1~63个字符，且不能以短划线（-）开头。',
                'type' => 'string',
                'required' => true,
                'example' => 'cluster-demo',
              ),
              'region_id' => 
              array (
                'title' => '地域ID',
                'description' => '集群所在的地域ID。

',
                'type' => 'string',
                'required' => true,
                'example' => 'cn-beijing',
              ),
              'cluster_type' => 
              array (
                'title' => '集群类型',
                'description' => '- `Kubernetes`: ACK专有集群。
- `ManagedKubernetes`：ACK托管类的集群，包括ACK托管集群（ACK集群Pro版、ACK集群基础版）、ACK Serverless集群（Pro版、基础版）、ACK Edge集群（Pro版、基础版）、ACK灵骏集群（Pro版）。
- `ExternalKubernetes`：注册集群。',
                'type' => 'string',
                'required' => true,
                'example' => 'Kubernetes',
              ),
              'cluster_spec' => 
              array (
                'title' => '托管版集群类型',
                'description' => '当您选择`cluster_type`为`ManagedKubernetes`并配置`profile`后，您可以进一步指定集群的规格。

- `ack.pro.small`：集群Pro版。
- `ack.standard`：集群基础版（取值为空时默认选择）。',
                'type' => 'string',
                'required' => false,
                'example' => 'ack.pro.small',
              ),
              'kubernetes_version' => 
              array (
                'title' => '集群版本',
                'description' => '集群版本，与Kubernetes社区基线版本保持一致。建议选择最新版本，若不指定，默认使用最新版本。

目前您可以在ACK控制台创建两种最新版本的集群。您可以通过API创建其他Kubernetes版本集群。关于ACK支持的Kubernetes版本，请参见[Kubernetes版本发布概览](~~185269~~)。',
                'type' => 'string',
                'required' => false,
                'example' => '1.16.9-aliyun.1',
              ),
              'runtime' => 
              array (
                'description' => '集群内容器运行时，默认采用Docker运行时，同时还支持Containerd和安全沙箱容器运行时。

更多有关容器引擎的选择，请参见[如何选择Docker运行时与安全沙箱运行时](~~160313~~)。',
                'required' => false,
                '$ref' => '#/components/schemas/runtime',
              ),
              'vpcid' => 
              array (
                'title' => '集群专有网络ID。',
                'description' => '集群使用的专有网络，创建集群时必须为集群提供。',
                'type' => 'string',
                'required' => true,
                'example' => 'vpc-2zeik9h3ahvv2zz95****',
              ),
              'pod_vswitch_ids' => 
              array (
                'title' => '创建Terway网络类型的集群时，需要为pod指定单独的虚拟交换机',
                'description' => 'Pod虚拟交换机列表，您需要为每一个节点虚拟交换机指定至少一个相同可用区的Pod虚拟交换机并且不能跟节点`vswitch`重复，建议选择网段掩码不大于19的虚拟交换机。

> 当集群采用Terway网络类型时，必须为集群指定`pod_vswitch_ids`。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'Pod虚拟交换机列表，您需要为每一个节点虚拟交换机指定至少一个相同可用区的Pod虚拟交换机并且不能跟节点`vswitch`重复，建议选择网段掩码不大于19的虚拟交换机。

> 当集群采用Terway网络类型时，必须为集群指定`pod_vswitch_ids`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'vsw-2ze97jwri7cei0mpw****',
                ),
                'required' => false,
              ),
              'container_cidr' => 
              array (
                'title' => 'POD网络网段',
                'description' => 'Pod网络地址段，必须是有效的私有网段，即以下网段及其子网：10.0.0.0/8、172.16-31.0.0/12-16、192.168.0.0/16。不能与VPC及VPC内已有Kubernetes集群使用的网段重复，创建成功后不能修改。

有关集群网络规划，请参见[VPC下 Kubernetes的网络地址段规划](~~86500~~)。

> 当创建Flannel网络类型的集群时，该字段为必填。',
                'type' => 'string',
                'required' => false,
                'example' => '172.20.0.0/16',
              ),
              'service_cidr' => 
              array (
                'title' => '服务网络网段',
                'description' => 'Service网络地址段，可选范围：10.0.0.0/16-24，172.16-31.0.0/16-24，192.168.0.0/16-24
不能与VPC网段10.1.0.0/21及VPC内已有Kubernetes集群使用的网段重复，创建成功后不能修改。

默认使用172.19.0.0/20网段。',
                'type' => 'string',
                'required' => true,
                'example' => '172.21.0.0/20',
              ),
              'security_group_id' => 
              array (
                'title' => '安全组ID，和is_enterprise_security_group二选一',
                'description' => '使用已有安全组创建集群时需要指定安全组ID，和`is_enterprise_security_group`二选一，集群节点自动加入到此安全组。',
                'type' => 'string',
                'required' => false,
                'example' => 'sg-bp1bdue0qc1g7k****',
              ),
              'is_enterprise_security_group' => 
              array (
                'title' => '自动创建企业安全组',
                'description' => '自动创建企业级安全组，当`security_group_id`为空的时生效。

> 使用普通安全组时，集群内节点与Terway Pod数量之和不能超过2000。所以创建Terway网络类型集群时，建议使用企业安全组。

- `true`：创建并使用企业级安全组。
- `false`：不使用企业级安全组。

默认值：`true`。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'snat_entry' => 
              array (
                'title' => '若您集群内的节点、应用等需要访问公网，勾选该项后我们将为您创建 NAT 网关并自动配置 SNAT 规则',
                'description' => '为专有网络配置SNAT。取值：

- `true`：将为您创建NAT网关并自动配置SNAT规则，若您集群内的节点、应用等需要访问公网需要设置为`true`。
- `false`：不为您创建NAT网关及SNAT规则。这种模式下，集群内节点及应用将不能访问公网。

> 如果创建集群时未开启，后续业务需要访问公网，可手动开启。更多信息，请参见[手动开启](~~178480~~)。

默认值：`true`。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'endpoint_public_access' => 
              array (
                'title' => '使用EIP暴露apiServer',
                'description' => '是否开启公网访问。通过EIP暴露API Server，实现集群公网访问。

- `true`：开启公网访问。
- `false`：不开启公网访问。选择不开放时，则无法通过外网访问集群API Server。

默认值：`false`。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'ssh_flags' => 
              array (
                'title' => '允许公网ssh登录',
                'description' => '是否开放公网SSH登录。用登录"专有版集群"的Master节点，托管版集群中该参数不生效。
- `true`：开放。
- `false`：不开放。

默认值：`false`。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'timezone' => 
              array (
                'title' => '时区',
                'description' => '集群使用的时区。',
                'type' => 'string',
                'required' => false,
                'example' => 'Asia/Shanghai',
              ),
              'node_cidr_mask' => 
              array (
                'title' => '节点IP数量',
                'description' => '节点IP数量，通过指定网络的CIDR来确定IP的数量，只对于Flannel网络类型集群生效。

默认值：`26`。',
                'type' => 'string',
                'required' => false,
                'example' => '25',
              ),
              'user_ca' => 
              array (
                'title' => '自定义集群CA',
                'description' => '自定义集群CA。',
                'type' => 'string',
                'required' => false,
                'example' => '-----BEGIN CERTIFICATE-----****',
              ),
              'user_data' => 
              array (
                'title' => '节点自定义数据',
                'description' => '自定义节点数据。',
                'type' => 'string',
                'required' => false,
                'example' => 'IyEvdXNyL2Jpbi9iYXNoCmVjaG8gIkhlbGxvIEFD****',
              ),
              'cluster_domain' => 
              array (
                'title' => '集群本地域名',
                'description' => '集群本地域名。

命名规则：域名由小数点（.）分隔的一个或多个部分构成，每个部分最长为63个字符，可以使用小写字母、数字和短划线（-），且首尾必须为小写字母或数字。',
                'type' => 'string',
                'required' => false,
                'example' => 'cluster.local',
              ),
              'node_name_mode' => 
              array (
                'title' => '自定义节点名称',
                'description' => '自定义节点名称。

节点名称由三部分组成：前缀+节点IP地址子串+后缀：

- 前缀和后缀均可由英文句号（.）分隔的一个或多个部分构成，每个部分可以使用小写字母、数字和短划线（-），且首尾必须为小写字母和数字。
- IP地址段长度指截取节点IP地址末尾的位数，取值范围\\[5,12\\]。

例如，节点IP地址为：192.168.0.55，指定前缀为aliyun.com，IP地址段长度为5，后缀为test，则节点名称为aliyun.com00055test。',
                'type' => 'string',
                'required' => false,
                'example' => 'aliyun.com00055test',
              ),
              'custom_san' => 
              array (
                'title' => '自定义证书SAN',
                'description' => '自定义证书SAN，多个IP或域名以英文逗号（,）分隔。',
                'type' => 'string',
                'required' => false,
                'example' => 'cs.aliyun.com',
              ),
              'encryption_provider_key' => 
              array (
                'title' => 'Secret落盘加密',
                'description' => 'KMS密钥ID，使用该密钥对数据盘进行加密。更多详情，请参见[密钥管理服务](~~28935~~)。

> 该功能只在专业托管版集群（ACK Pro版集群）中生效。

',
                'type' => 'string',
                'required' => false,
                'example' => '0fe64791-55eb-4fc7-84c5-c6c7cdca****',
              ),
              'service_account_issuer' => 
              array (
                'title' => 'serviceaccount token中的签发身份，即token payload中的iss字段。',
                'description' => 'ServiceAccount是Pod和集群`apiserver`通讯的访问凭证。而`service-account-issuer`是`serviceaccount token`中的签发身份，即`token payload`中的`iss`字段。

关于`ServiceAccount`更多详情，请参见[部署服务账户令牌卷投影](~~160384~~)。',
                'type' => 'string',
                'required' => false,
                'example' => 'kubernetes.default.svc',
              ),
              'api_audiences' => 
              array (
                'title' => '合法的请求token身份，用于apiserver服务端认证请求token是否合法。',
                'description' => 'ServiceAccount是Pod和集群`apiserver`通讯的访问凭证，而`api-audiences`是合法的请求`token`身份，用于`apiserver`服务端认证请求`token`是否合法。支持配置多个`audience`，通过英文半角逗号（,）分割。

关于`ServiceAccount`更多详情，请参见[部署服务账户令牌卷投影](~~160384~~)。',
                'type' => 'string',
                'required' => false,
                'example' => 'kubernetes.default.svc',
              ),
              'image_id' => 
              array (
                'title' => '自定义镜像',
                'description' => '节点自定义镜像，默认使用系统镜像。当选择自定义镜像时，将取代默认系统镜像。请参见[自定义镜像](~~146647~~)。',
                'type' => 'string',
                'required' => false,
                'example' => 'm-bp16z7xko3vvv8gt****',
              ),
              'rds_instances' => 
              array (
                'title' => 'RDS白名单',
                'description' => 'RDS实例列表，选择您想想要添加白名单的RDS实例。 建议前往RDS加入容器Pod网段与Node网段，设置RDS实例会由于实例非运行的状态导致无法弹出。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'RDS实例列表，选择您想想要添加白名单的RDS实例。 建议前往RDS加入容器Pod网段与Node网段，设置RDS实例会由于实例非运行的状态导致无法弹出。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'rm-2zev748xi27xc****',
                ),
                'required' => false,
              ),
              'tags' => 
              array (
                'title' => '集群标签',
                'description' => '节点标签。标签定义规则：

- 标签由区分大小写的键值对组成，您最多可以设置20个标签。
- 标签键不可以重复，最长为64个字符；标签值可以为空，最长为128个字符。标签键和标签值都不能以“aliyun”、“acs:”、“https://”或“http://”开头。详情请参见[Labels and Selectors](https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/#syntax-and-character-set)。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '节点标签。标签定义规则：

- 标签由区分大小写的键值对组成，您最多可以设置20个标签。
- 标签键不可以重复，最长为64个字符；标签值可以为空，最长为128个字符。标签键和标签值都不能以“aliyun”、“acs:”、“https://”或“http://”开头。详情请参见[Labels and Selectors](https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/#syntax-and-character-set)。',
                  'required' => false,
                  '$ref' => '#/components/schemas/tag',
                ),
                'required' => false,
              ),
              'addons' => 
              array (
                'title' => '集群组件配置',
                'description' => '集群组件列表，创建集群时通过`addons`指定想要安装的集群组件。

**网络组件**：必选，包含Flannel和Terway两种网络类型，创建集群时二选一：

- Flannel网络：\\[{"name":"flannel","config":""}\\]。
- Terway网络：\\[{"name": "terway-eniip","config": ""}\\] 。

**存储组件**：可选，仅支持`csi`类型：

`csi`：\\[{"name":"csi-plugin","config": ""},{"name": "csi-provisioner","config": ""}\\]。

**日志组件**：可选。推荐开启，如果不开启日志服务时，将无法使用集群审计功能。

- 使用已有`SLS Project`：\\[{"name": "logtail-ds","config": "{\\"IngressDashboardEnabled\\":\\"true\\",\\"sls_project_name\\":\\"your_sls_project_name\\"}"}\\] 。
- 创建新的`SLS Project`：\\[{"name": "logtail-ds","config": "{\\"IngressDashboardEnabled\\":\\"true\\"}"}\\] 。

**Ingress组件**：可选，ACK专有版集群默认安装Ingress组件`nginx-ingress-controller`。

- 安装Ingress并且开启公网：\\[{"name":"nginx-ingress-controller","config":"{\\"IngressSlbNetworkType\\":\\"internet\\"}"}\\] 。
- 禁止默认安装Ingress：\\[{"name": "nginx-ingress-controller","config": "","disabled": true}\\] 。

**事件中心**：可选，默认开启。

事件中心提供对Kubernetes事件的存储、查询、告警等能力。Kubernetes事件中心关联的Logstore在90天内免费。关于免费策略的更多信息，请参见[创建并使用Kubernetes事件中心](~~150476~~)。

开启事件中心示例：\\[{"name":"ack-node-problem-detector","config":"{\\"sls_project_name\\":\\"your_sls_project_name\\"}"}\\]。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '集群组件列表，创建集群时通过`addons`指定想要安装的集群组件。',
                  'required' => false,
                  '$ref' => '#/components/schemas/addon',
                ),
                'required' => false,
              ),
              'taints' => 
              array (
                'title' => '节点污点信息',
                'description' => '节点污点信息。污点和容忍度（Toleration）相互配合，可以用来避免Pod被分配到不合适的节点上。更多信息，请参见[taint-and-toleration](https://kubernetes.io/zh/docs/concepts/scheduling-eviction/taint-and-toleration/)。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '节点污点信息。污点和容忍度（Toleration）相互配合，可以用来避免Pod被分配到不合适的节点上。更多信息，请参见[taint-and-toleration](https://kubernetes.io/zh/docs/concepts/scheduling-eviction/taint-and-toleration/)。',
                  'required' => false,
                  '$ref' => '#/components/schemas/taint',
                ),
                'required' => false,
              ),
              'cloud_monitor_flags' => 
              array (
                'title' => '为ECS安装云监控',
                'description' => '集群是否安装云监控插件。取值：

- `true`：安装云监控插件。
- `false`：不安装云监控插件。

默认值：`false`。

',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'platform' => 
              array (
                'title' => '操作系统发行版',
                'description' => '操作系统发行版。取值：

- CentOS
- AliyunLinux
- QbootAliyunLinux
- Qboot
- Windows
- WindowsCore

默认值：`CentOS`。',
                'type' => 'string',
                'required' => false,
                'example' => 'CentOS',
              ),
              'os_type' => 
              array (
                'title' => '操作系统平台类型',
                'description' => '操作系统平台类型。取值：
- Windows
- Linux

默认值：`Linux`。',
                'type' => 'string',
                'required' => false,
                'example' => 'Linux',
              ),
              'soc_enabled' => 
              array (
                'title' => '等保安全加固',
                'description' => '等保加固。更多信息，请参见[ACK等保加固使用说明](~~196148~~)。

取值：
- `true`：开启等保加固。
- `false`：不开启等保加固。

默认值：`false`。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'security_hardening_os' => 
              array (
                'title' => '是否开启阿里云OS安全加固。',
                'description' => '阿里云OS安全加固。取值：

- `true`：开启阿里云OS安全加固。
- `false`：不开启阿里云OS安全加固。

默认值：`false`。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'cis_enabled' => 
              array (
                'title' => '【已废弃】请使用security_hardening_os参数代替',
                'description' => '【已废弃】请使用参数security_hardening_os替代。',
                'type' => 'boolean',
                'deprecated' => true,
                'required' => false,
                'example' => 'false',
              ),
              'cpu_policy' => 
              array (
                'title' => 'CPU策略',
                'description' => '节点CPU管理策略。当集群版本在1.12.6及以上时支持以下两种策略：

- `static`：允许为节点上具有某些资源特征Pod增强其CPU亲和性和独占性。
- `none`：表示启用现有的默认CPU亲和性方案。

默认值：`none`。',
                'type' => 'string',
                'required' => false,
                'example' => 'none',
              ),
              'proxy_mode' => 
              array (
                'title' => 'Proxy代理模式，ipvs|iptables',
                'description' => 'kube-proxy代理模式

- `iptables`: 成熟稳定的kube-proxy代理模式，Kubernetes Service的服务发现和负载均衡使用iptables规则配置，但是性能一般，受规模影响较大，适用于集群存在少量的Service。
- `ipvs`：高性能的kube-proxy代理模式，Kubernetes Service的服务发现和负载均衡使用Linux IPVS模块进行配置，适用于集群存在大量的Service，对负载均衡有高性能要求的场景。

默认值：`ipvs`。',
                'type' => 'string',
                'required' => false,
                'example' => 'ipvs',
              ),
              'node_port_range' => 
              array (
                'title' => '节点服务端口范围',
                'description' => '节点服务端口，可选端口范围：\\[30000,65535\\]。

默认值：`30000-32767`。',
                'type' => 'string',
                'required' => false,
                'example' => '30000~32767	',
              ),
              'master_vswitch_ids' => 
              array (
                'title' => '集群Master节点使用的虚拟交换机',
                'description' => 'Master节点交换机ID列表，交换机个数取值范围为\\[1,3\\]。为确保集群的高可用性，推荐您选择3个交换机，且分布在不同的可用区。

指定的实例规格数量需要和`master_count`保持一致，和`master_vswitch_ids`中的元素一一对应。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'Master节点交换机ID列表，交换机个数取值范围为\\[1,3\\]。为确保集群的高可用性，推荐您选择3个交换机，且分布在不同的可用区。

指定的实例规格数量需要和`master_count`保持一致，和`master_vswitch_ids`中的元素一一对应。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'vsw-2ze3ds0mdip0hdz8i****',
                ),
                'required' => false,
              ),
              'key_pair' => 
              array (
                'title' => '密钥对名称，和login_password二选一。',
                'description' => '密钥对名称，和`login_password`二选一。',
                'type' => 'string',
                'required' => false,
                'example' => 'secrity-key',
              ),
              'login_password' => 
              array (
                'title' => 'SSH登录密码。密码规则为8~30 个字符，且至少同时包含三项（大小写字母、数字和特殊符号），和key_pair二选一。',
                'description' => 'SSH登录密码，和`key_pair `二选一。密码规则为8~30个字符，且至少同时包含三项（大小写字母、数字和特殊符号）。',
                'type' => 'string',
                'required' => false,
                'example' => 'Hello@1234',
              ),
              'master_count' => 
              array (
                'title' => '集群Master节点数量',
                'description' => 'Master节点数量，可选值`3`或`5`。

默认值：`3`。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '3',
              ),
              'master_instance_types' => 
              array (
                'title' => '集群Master节点类型',
                'description' => 'Master节点实例类型。更多信息，请参见[实例规格族](~~25378~~)。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'Master节点实例类型。指定的实例规格数量需要和`master_count`保持一致，和`master_instance_types`中的元素一一对应。更多信息，请参见[实例规格族](~~25378~~)。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ecs.n4.xlarge',
                ),
                'required' => false,
              ),
              'master_system_disk_category' => 
              array (
                'title' => '集群Master节点系统盘类型',
                'description' => 'Master节点系统盘类型，取值：

- `cloud_efficiency`：高效云盘。
- `cloud_ssd`：SSD云盘。
- `cloud_essd`：ESSD云盘。

默认值：`cloud_ssd`。不同可用区，默认值可能会有所差异。',
                'type' => 'string',
                'required' => false,
                'example' => 'cloud_ssd',
              ),
              'master_system_disk_size' => 
              array (
                'title' => '集群Master节点系统盘大小，至少40',
                'description' => 'Master节点系统盘类型，取值范围\\[40,500\\]，单位：GiB。

默认值：`120`。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '120',
              ),
              'master_system_disk_performance_level' => 
              array (
                'title' => 'Master节点系统盘磁盘性能，只针对ESSD磁盘生效',
                'description' => '集群Master节点系统盘磁盘性能等级， 仅对ESSD磁盘生效。磁盘性能等级和磁盘大小有关，更多信息，请参见[ESSD云盘](~~122389~~)。',
                'type' => 'string',
                'required' => false,
                'example' => 'PL1',
              ),
              'master_system_disk_snapshot_policy_id' => 
              array (
                'title' => '集群Master节点自动快照备份策略',
                'description' => 'Master节点系统盘采用的自动快照策略ID。',
                'type' => 'string',
                'required' => false,
                'example' => 'sp-2zej1nogjvovnz4z****',
              ),
              'master_instance_charge_type' => 
              array (
                'title' => '集群Master节点付费类型',
                'description' => 'Master节点付费类型，取值：

- `PrePaid`：包年包月。
- `PostPaid`：按量付费。

默认值：`PostPaid`。',
                'type' => 'string',
                'required' => false,
                'example' => 'PrePaid',
              ),
              'master_period_unit' => 
              array (
                'title' => '集群Master节点包年包月周期',
                'description' => 'Master节点付费周期，当付费类型为`PrePaid`的时候必须指定周期。

取值：`Month`，当前仅支持以月为周期。',
                'type' => 'string',
                'required' => false,
                'example' => 'Month',
              ),
              'master_period' => 
              array (
                'title' => '集群Master节点包年包月时长',
                'description' => 'Master节点包年包月时长，当`master_instance_charge_type`取值为`PrePaid`时才生效且为必选值。

取值范围：{1, 2, 3, 6, 12, 24, 36, 48, 60}。

默认值：1。

',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '1',
              ),
              'master_auto_renew' => 
              array (
                'title' => '集群Master节点是否自动续费',
                'description' => 'Master节点是否开启自动续费，当`master_instance_charge_type`取值为`PrePaid`时才生效，可选值为：

- `true`：自动续费。
- `false`：不自动续费。

默认值：`true`。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'master_auto_renew_period' => 
              array (
                'title' => '集群Master节点自动续费时长',
                'description' => 'Master节点自动续费周期，当选择包年包月付费类型时才生效，且为必选值。

取值范围：{1, 2, 3, 6, 12}。

默认值：1。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '1',
              ),
              'num_of_nodes' => 
              array (
                'title' => '集群Worker节点数量',
                'description' => 'Worker节点数。范围是\\[0，100\\]。',
                'type' => 'integer',
                'format' => 'int64',
                'deprecated' => true,
                'required' => false,
                'example' => '3',
              ),
              'vswitch_ids' => 
              array (
                'title' => '集群节点所在虚拟交换机。',
                'description' => '集群节点所在虚拟交换机，当创建零节点的托管版集群时，该字段必填。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '集群节点所在虚拟交换机，当创建零节点的托管版集群时，该字段必填。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'vsw-2ze3ds0mdip0hdz8i****',
                ),
                'required' => true,
              ),
              'worker_vswitch_ids' => 
              array (
                'title' => '集群Worker节点所在虚拟交换机',
                'description' => '集群节点使用的虚拟交换机列表，一个节点对应一个值。

当创建零节点的托管版集群时，字段`worker_vswitch_ids `非必填，但是需要提供`vswitch_ids`。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'Worker节点虚拟交换机列表，取值范围：\\[1,20\\]。为保证高可用性，建议选择不同可用区的虚拟交换机。

当创建零节点的托管版集群时，字段`worker_vswitch_ids `非必填，但是需要提供`vswitch_ids`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'vsw-2ze3ds0mdip0hdz8i****',
                ),
                'deprecated' => true,
                'required' => false,
              ),
              'worker_instance_types' => 
              array (
                'title' => '集群Worker节点类型',
                'description' => 'Worker节点实例配置。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'Worker节点实例规格，至少要指定一个实例规格。更多信息，请参见[实例规格族](~~25378~~)。

> 实例规格优先级随着在数据中的位置增大依次降低。当无法根据优先级较高的实例规格创建出实例时，会自动选择下一优先级的实例规格来创建实例。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ecs.n4.large',
                ),
                'deprecated' => true,
                'required' => false,
              ),
              'worker_system_disk_category' => 
              array (
                'title' => '集群Worker节点系统盘类型',
                'description' => 'Worker节点系统盘类型。更多信息，请参见[块存储概述](~~63136~~)。

取值：

- `cloud_efficiency`：高效云盘。
- `cloud_ssd`：SSD云盘。


默认值：`cloud_ssd`。',
                'type' => 'string',
                'deprecated' => true,
                'required' => false,
                'example' => 'cloud_efficiency',
              ),
              'worker_system_disk_size' => 
              array (
                'title' => '集群Worker节点系统盘大小',
                'description' => 'Worker节点系统盘大小，单位为GiB。

取值范围：\\[40,500\\]。

该参数的取值必须大于或者等于max{40, ImageSize}。

默认值：`120`。',
                'type' => 'integer',
                'format' => 'int64',
                'deprecated' => true,
                'required' => false,
                'example' => '120',
              ),
              'worker_system_disk_snapshot_policy_id' => 
              array (
                'title' => '集群Worker节点系统盘快照备份策略',
                'description' => 'Worker节点系统盘采用的自动快照策略ID。',
                'type' => 'string',
                'deprecated' => true,
                'required' => false,
                'example' => 'sp-2zej1nogjvovnz4z****',
              ),
              'worker_system_disk_performance_level' => 
              array (
                'title' => '集群Worker节点磁盘性能，只对ESSD类型磁盘生效',
                'description' => '当系统盘为ESSD云盘时，可设置ESSD云盘的性能级别PL（Performance Level）。更多信息，请参见[ESSD云盘](~~122389~~)。

取值：

- PL0
- PL1
- PL2
- PL3',
                'type' => 'string',
                'deprecated' => true,
                'required' => false,
                'example' => 'PL1',
              ),
              'worker_data_disks' => 
              array (
                'title' => '集群Worker节点数据盘配置',
                'description' => 'Worker节点数据盘类型、大小等配置的组合。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据盘配置集合。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'category' => 
                    array (
                      'title' => '集群Worker节点数据盘类型',
                      'description' => '数据盘类型。',
                      'type' => 'string',
                      'required' => true,
                      'example' => 'cloud_essd',
                    ),
                    'encrypted' => 
                    array (
                      'title' => '集群Worker节点数据盘是否加密',
                      'description' => '是否对数据盘加密。取值：

- `true`：对数据盘加密。
- `false`：不对数据盘加密。

默认值：`false`。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'true',
                    ),
                    'size' => 
                    array (
                      'title' => '集群Worker节点数据盘大小',
                      'description' => '数据盘大小，取值范围：40～32767。单位：GiB。',
                      'type' => 'string',
                      'required' => true,
                      'example' => '120',
                    ),
                    'performance_level' => 
                    array (
                      'title' => '集群Worker节点数据盘磁盘性能等级，仅对ESSD磁盘生效',
                      'description' => '节点数据盘磁盘性能等级，仅对ESSD磁盘生效。磁盘性能等级和磁盘大小有关。更多信息，请参见[ESSD云盘](~~122389~~)。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'PL1',
                    ),
                  ),
                  'required' => false,
                ),
                'deprecated' => true,
                'required' => false,
              ),
              'worker_instance_charge_type' => 
              array (
                'title' => '集群Worker节点付费类型',
                'description' => 'Worker节点付费类型，取值：

- `PrePaid`：包年包月。
- `PostPaid`：按量付费。

默认值：按量付费。',
                'type' => 'string',
                'deprecated' => true,
                'required' => false,
                'example' => 'PrePaid',
              ),
              'worker_period_unit' => 
              array (
                'title' => '集群Worker节点包年包月周期',
                'description' => 'Wroker节点付费周期，当付费类型为`PrePaid`的时候需要指定周期。

取值：`Month`，当前只支持以月为周期。',
                'type' => 'string',
                'deprecated' => true,
                'required' => false,
                'example' => 'Month',
              ),
              'worker_period' => 
              array (
                'title' => '集群Worker节点包年包月时长',
                'description' => 'Worker节点包年包月时长，当`worker_instance_charge_type`取值为`PrePaid`时才生效且为必选值。

取值范围：{1, 2, 3, 6, 12, 24, 36, 48, 60}。

默认值：1。',
                'type' => 'integer',
                'format' => 'int64',
                'deprecated' => true,
                'required' => false,
                'example' => '1',
              ),
              'worker_auto_renew' => 
              array (
                'title' => '集群Worker节点到期是否自动续费',
                'description' => 'Worker节点是否开启自动续费，当`worker_instance_charge_type`取值为`PrePaid`时才生效，取值：

- `true`：自动续费。
- `false`：不自动续费。

默认值：`true`。',
                'type' => 'boolean',
                'deprecated' => true,
                'required' => false,
                'example' => 'true',
              ),
              'worker_auto_renew_period' => 
              array (
                'title' => '集群Worker节点自动续费时长',
                'description' => 'Worker节点自动续费周期，当选择包年包月付费类型时才生效，且为必选值。

取值范围：{1, 2, 3, 6, 12}。',
                'type' => 'integer',
                'format' => 'int64',
                'deprecated' => true,
                'required' => false,
                'example' => '1',
              ),
              'instances' => 
              array (
                'title' => '使用已有节点创建集群时，已有实例列表',
                'description' => '使用已经节点创建集群时，需要指定ECS实例列表，该实例会作为Worker节点加入集群。

> 使用已有实例创建集群时，该字段必填。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '使用已经节点创建集群时，需要指定ECS实例列表，该实例会作为Worker节点加入集群。

> 使用已有实例创建集群时，该字段必填。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'i-2ze4zxnm36vq00xn****',
                ),
                'required' => false,
              ),
              'format_disk' => 
              array (
                'title' => '使用已有节点创建集群时，是否格式化已有实例的磁盘',
                'description' => '使用已有实例创建集群时，是否对实例进行数据盘挂载，取值：

- `true`：将容器和镜像存储在数据盘，数据盘内原有数据将丢失，请注意备份数据。

- `false`：不将容器和镜像存储在数据盘。

默认值：`false`。

数据盘挂载规则：

- 如果ECS已挂载数据盘，且最后一块数据盘的文件系统未初始化，系统会自动将该数据盘格式化为ext4，用来存放内容/var/lib/docker、/var/lib/kubelet。
- 如果ECS未挂载数据盘，则不会挂载新的数据盘。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'keep_instance_name' => 
              array (
                'title' => '使用已有节点创建集群时，是否保留实例名称。',
                'description' => '使用已有实例创建集群时，是否保留实例名称。

- `true`：保留。
- `false`：不保留，会用系统规则进行替换。

默认值：`true`。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'service_discovery_types' => 
              array (
                'title' => '创建ASK集群时，服务发现类型',
                'description' => '集群内服务发现类型，用于在`ASK`集群中指定服务发现方式。

- `CoreDNS`：使用Kubernetes原生标准服务发现组件CoreDNS，需要在集群部署一组容器用于DNS解析。默认采用两个0.25 Core 512 MiB规格的ECI实例。
- `PrivateZone`：使用阿里云PrivateZone产品提供服务发现能力，需要开启PrivateZone服务。

默认值：不开启。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '集群内服务发现类型，用于在`ASK`集群中指定服务发现方式。

- `CoreDNS`：使用Kubernetes原生标准服务发现组件CoreDNS，需要在集群部署一组容器用于DNS解析。默认采用两个0.25 Core 512 MiB规格的ECI实例。
- `PrivateZone`：使用阿里云PrivateZone产品提供服务发现能力，需要开启PrivateZone服务。

默认值：不开启。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'PrivateZone',
                ),
                'required' => false,
              ),
              'nat_gateway' => 
              array (
                'title' => '使用自动创建专有网络创建ASK集群时，是否在vpc中创建Nat网关并配置SNAT规则。',
                'description' => '创建ASK集群时，是否在VPC中创建NAT网关并配置SNAT规则。取值：

- `true`：将为您创建NAT网关并自动配置SNAT规则，集群VPC将具备公网访问能力。
- `false`：不为您创建NAT网关及SNAT规则。集群VPC将不具备公网访问能力。

默认值：`false`。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'zone_id' => 
              array (
                'title' => '使用自动创建专有网络创建ASK集群时，需要指定专有网络的可用区',
                'description' => '集群所属地域的可用区ID。此参数为ASK集群特有参数。

当创建ASK集群时，如果未指定`vpc_id`和`vswitch_ids`，必须为集群指定`zone_id`，用于自动在该可用区创建VPC网络资源。

',
                'type' => 'string',
                'required' => false,
                'example' => 'cn-beiji****',
              ),
              'profile' => 
              array (
                'title' => '面向场景时的集群类型。  Default：非边缘场景集群。 Edge：边缘场景集群。',
                'description' => '当您选择`cluster_type`为`ManagedKubernetes`时，即ACK托管类的集群时，您可以进一步指定集群的子类型。
- `Default`：ACK托管集群，包括ACK集群Pro版和ACK集群基础版。
- `Edge`：ACK Edge集群，包括ACK Edge集群Pro版和ACK Edge集群基础版。
- `Serverless`：ACK Serverless集群，包括ACK Serverless集群Pro版和ACK Serverless集群基础版。
- `Lingjun`：ACK灵骏集群，提供Pro版。',
                'type' => 'string',
                'required' => false,
                'example' => 'Default',
              ),
              'logging_type' => 
              array (
                'title' => 'ASK 集群开启日志服务',
                'description' => '集群开启日志服务，只针对ACK Serverless集群生效，且取值必须是`SLS`。',
                'type' => 'string',
                'required' => false,
                'example' => 'SLS',
              ),
              'controlplane_log_ttl' => 
              array (
                'title' => '控制平面日志',
                'description' => '控制平面组件日志保存天数。',
                'type' => 'string',
                'required' => false,
                'example' => '30',
              ),
              'controlplane_log_project' => 
              array (
                'title' => '使用已有log project时，需要指定log project',
                'description' => '控制平面组件日志服务Project，可以使用已有Project用于日志存储，也可以使用系统自动创建Project用户日志存储。如果选择自动创建日志服务Project将会自动创建一个名称为`k8s-log-{ClusterID}`的日志服务Project。',
                'type' => 'string',
                'required' => false,
                'example' => 'k8s-log-xxx',
              ),
              'controlplane_log_components' => 
              array (
                'title' => '需要采集日志的组件',
                'description' => '组件名称列表，指定那些控制平面的组件日志需要被收集。

默认采集apiserver、kcm、scheduler组件的日志。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '组件名称列表，指定那些控制平面的组件日志需要被收集。

默认采集apiserver、kcm、scheduler组件的日志。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '["apiserver","kcm","scheduler"]',
                ),
                'required' => false,
              ),
              'deletion_protection' => 
              array (
                'title' => '集群删除保护',
                'description' => '集群删除保护，防止通过控制台或API误删除集群。取值：

- `true`：启用集群删除保护，将不能通过控制台或API删除集群。
- `false`：不启用集群删除保护，则能通过控制台或API删除集群。

默认值：`false`。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'disable_rollback' => 
              array (
                'title' => '该参数已废弃，集群创建失败时默认不会进行回滚操作，您需要自行清理失败的集群。',
                'description' => '集群创建失败是否回滚。取值：

- `true`：当集群创建失败时，进行回滚操作。
- `false`：当集群创建失败时，不进行回滚操作。


默认值：`true`。',
                'type' => 'boolean',
                'deprecated' => true,
                'required' => false,
                'example' => 'true',
              ),
              'timeout_mins' => 
              array (
                'title' => '集群创建超时时间',
                'description' => '集群创建超时时间，单位分钟。

默认值：`60`。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '60',
              ),
              'image_type' => 
              array (
                'title' => '操作系统镜像类型',
                'description' => '操作系统发行版类型，推荐使用该字段指定节点操作系统。取值：

- CentOS
- AliyunLinux
- AliyunLinux Qboot
- AliyunLinuxUEFI
- AliyunLinux3
- Windows
- WindowsCore
- AliyunLinux3Arm64
- ContainerOS

默认值：`CentOS`。',
                'type' => 'string',
                'required' => false,
                'example' => 'AliyunLinux',
              ),
              'load_balancer_spec' => 
              array (
                'title' => '负载均衡规格',
                'description' => '负载均衡规格，取值：
- slb.s1.small
- slb.s2.small
- slb.s2.medium
- slb.s3.small
- slb.s3.medium
- slb.s3.large

默认值：`slb.s2.small`。',
                'type' => 'string',
                'required' => false,
                'example' => 'slb.s2.small',
              ),
              'enable_rrsa' => 
              array (
                'title' => '启用 RRSA 功能',
                'description' => '是否启用RRSA功能。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'resource_group_id' => 
              array (
                'title' => '集群所属资源组ID',
                'description' => '集群所属资源组ID，实现不同资源的隔离。',
                'type' => 'string',
                'required' => false,
                'example' => 'rg-acfm3mkrure****',
              ),
              'charge_type' => 
              array (
                'title' => '付费类型。',
                'description' => '集群付费类型，如下资源的计费方式属于包年包月计费类型：

节点池的节点（ECS）。

API Server的私网SLB实例。

取值：

PrePaid：包年包月。

PostPaid：按量付费。

默认值：PostPaid。',
                'type' => 'string',
                'required' => false,
                'example' => 'PostPaid',
              ),
              'period_unit' => 
              array (
                'title' => '包年包月时间单位。',
                'description' => '付费周期，当付费类型为PrePaid的时候，需要指定周期。

取值：Month，当前仅支持以月为周期。',
                'type' => 'string',
                'required' => false,
                'example' => 'Month',
              ),
              'period' => 
              array (
                'title' => '包年包月时间。',
                'description' => '购买时长。包年包月时长，当charge_type取值为PrePaid时才生效，且为必选值。

取值范围：{1, 2, 3, 6, 12, 24, 36, 48, 60}。

默认值：1。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '1',
              ),
              'ip_stack' => 
              array (
                'title' => '集群的IP协议栈，可取值：
- ipv4：创建仅支持IPv4协议栈的集群；
- dual：创建支持IPv4/IPv6双栈的集群。',
                'description' => '集群ip_stack。',
                'type' => 'string',
                'required' => false,
                'example' => '可选值：
ipv4（单栈）
dual（双栈），默认值为ipv4。',
                'default' => 'ipv4',
                'enum' => 
                array (
                  0 => 'ipv4',
                  1 => 'dual',
                ),
              ),
              'access_control_list' => 
              array (
                'description' => '注册集群 API Server SLB 访问控制列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '注册集群 API Server SLB 访问控制列表。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '192.168.1.0/24
',
                ),
                'required' => false,
              ),
              'nodepools' => 
              array (
                'description' => '节点池列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '节点池配置。',
                  'required' => false,
                  '$ref' => '#/components/schemas/nodepool',
                ),
                'required' => false,
              ),
            ),
            'required' => false,
            'example' => 'cluster-demo',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回体数据。',
            'description' => '返回体。',
            'type' => 'object',
            'properties' => 
            array (
              'cluster_id' => 
              array (
                'title' => '集群ID。',
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'cb95aa626a47740afbf6aa099b650****',
              ),
              'request_id' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '687C5BAA-D103-4993-884B-C35E4314A1E1',
              ),
              'task_id' => 
              array (
                'title' => '任务ID。',
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'T-5a54309c80282e39ea****',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"cluster_id\\": \\"cb95aa626a47740afbf6aa099b650****\\",\\n  \\"request_id\\": \\"687C5BAA-D103-4993-884B-C35E4314A1E1\\",\\n  \\"task_id\\": \\"T-5a54309c80282e39ea****\\"\\n}","errorExample":""},{"type":"xml","example":"<cluster_id>cb95aa626a47740afbf6aa099b650****</cluster_id>\\n<task_id>T-5a54309c80282e39ea00002f</task_id>\\n<request_id>687C5BAA-D103-4993-884B-C35E4314A1E1</request_id>","errorExample":""}]',
      'title' => '创建集群',
      'description' => '本文仅提供创建ACK集群的全量参数配置，关于如何通过OpenAPI创建不同类型ACK集群的具体操作，请参见如下文档操作：
- [通过OpenAPI创建Kubernetes托管版集群](~~90776~~)
- [通过OpenAPI创建Kubernetes专有版集群](~~197620~~)
- [通过OpenAPI创建ACK Serverless集群](~~144246~~)
- [通过OpenAPI创建ACK Edge集群](~~128204~~)
- [通过OpenAPI创建基础托管版安全沙箱Kubernetes集群](~~196321~~)
- [通过OpenAPI创建专有版安全沙箱Kubernetes集群](~~140623~~)',
    ),
    'DeleteCluster' => 
    array (
      'summary' => '如果您的集群无需使用，请删除集群并选择是否删除或保留集群的相关资源。删除集群前，请手动清理工作负载（无状态、有状态、任务和定时任务），否则可能导致集群删除失败。',
      'path' => '/clusters/{ClusterId}',
      'methods' => 
      array (
        0 => 'delete',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '409',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcskEUXDVA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c905d1364c2dd4b6284a3f41790c4****',
          ),
        ),
        1 => 
        array (
          'name' => 'retain_all_resources',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否保留所有资源，如果设置了该值，将会忽略retain_resources。默认值：false。',
            'description' => '是否保留所有资源。如果设置该值为`true`，则会忽略`retain_resources`，通过`DescribeClusterResources`接口查询到的通过集群创建的云资源将被保留。如果该值为`false`，请注意`delete_options`中默认保留的资源仍将被保留，如需删除相关资源，请单独在`delete_options`中设置`delete_mode`为`delete`。

- `true`：保留所有资源，包含所有通过集群创建的云资源
- `false`：不保留所有资源（`delete_options`中定义的默认保留资源除外，如`ALB`在该参数取值为`false`时仍然保留）

默认值：`false`。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'keep_slb',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否保留通过service创建的负载均衡SLB实例。默认值：false。
已废弃，建议使用delete_options替代。',
            'description' => '是否保留SLB，取值：

- `true`：保留创建的SLB资源。
- `false`：不保留创建的SLB资源。

默认值：`false`。
请使用`delete_options`中的`SLB`管理',
            'type' => 'boolean',
            'deprecated' => true,
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'retain_resources',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '要保留的资源列表。',
            'description' => '资源列表。删除集群时如果需要保留资源，则需要提供对应资源的ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源名称。',
              'type' => 'string',
              'required' => false,
              'example' => 'sg-2ze6ess9kho6fdn9****',
            ),
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'delete_options',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '集群关联资源的删除选项。',
            'description' => '集群关联资源的删除选项。',
            'type' => 'array',
            'items' => 
            array (
              'title' => '特定类型资源的删除选项。',
              'description' => '特定类型资源的删除选项。',
              'type' => 'object',
              'properties' => 
              array (
                'resource_type' => 
                array (
                  'title' => '资源类型，可取值：
- SLB：通过service创建的SLB资源，默认删除，可选择保留
- ALB：ALB Ingress Controller创建的ALB资源，默认保留，可选择删除
- SLS_Data：集群日志功能所使用的日志服务Project，默认保留，可选择删除
- SLS_ControlPlane：托管版集群控制平面日志所使用的日志服务Project，默认保留，可选择删除
- PrivateZone：ACK Serverless集群创建的PrivateZone资源，默认保留，可选择删除',
                  'description' => '资源类型，可取值：
- SLB：通过service创建的SLB资源，默认删除，可选择保留
- ALB：ALB Ingress Controller创建的ALB资源，默认保留，可选择删除
- SLS_Data：集群日志功能所使用的日志服务Project，默认保留，可选择删除
- SLS_ControlPlane：托管版集群控制平面日志所使用的日志服务Project，默认保留，可选择删除
- PrivateZone：ACK Serverless集群创建的PrivateZone资源，默认保留，可选择删除',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'SLS_Data',
                ),
                'delete_mode' => 
                array (
                  'title' => '该类型资源的删除策略，可取值：
- delete：删除该类资源
- retain：保留该类资源',
                  'description' => '该类型资源的删除策略，可取值：
- delete：删除该类资源
- retain：保留该类资源',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'delete',
                ),
              ),
              'required' => false,
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
            'title' => '返回体数据。',
            'description' => '返回体数据。',
            'type' => 'object',
            'properties' => 
            array (
              'cluster_id' => 
              array (
                'title' => '集群ID。',
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'cb95aa626a47740afbf6aa099b650****',
              ),
              'request_id' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '687C5BAA-D103-4993-884B-C35E4314****',
              ),
              'task_id' => 
              array (
                'title' => '任务ID。',
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'T-5a54309c80282e39ea****',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"cluster_id\\": \\"cb95aa626a47740afbf6aa099b650****\\",\\n  \\"request_id\\": \\"687C5BAA-D103-4993-884B-C35E4314****\\",\\n  \\"task_id\\": \\"T-5a54309c80282e39ea****\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteClusterResponse>\\n    <task_id>T-5a54309c80282e39ea****</task_id>\\n</DeleteClusterResponse>","errorExample":""}]',
      'title' => '删除集群',
    ),
    'DescribeClustersV1' => 
    array (
      'summary' => '您可以调用DescribeClustersV1接口查看本账号下符合条件的ACK集群（例如指定集群类型、集群规格）列表信息。',
      'path' => '/api/v1/clusters',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '通过集群名称进行模糊查询。',
            'description' => '集群名称。

命名规则：由数字、汉字、英文字符或短划线（-）组成，长度范围1~63个字符，且不能以短划线（-）开头。',
            'type' => 'string',
            'required' => false,
            'example' => 'cluster-demo',
          ),
        ),
        1 => 
        array (
          'name' => 'cluster_type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '集群类型。',
            'description' => '- `Kubernetes`: ACK专有集群。
- `ManagedKubernetes`：ACK托管类的集群，包括ACK托管集群（ACK集群Pro版、ACK集群基础版）、ACK Serverless集群（Pro版、基础版）、ACK Edge集群（Pro版、基础版）、ACK灵骏集群（Pro版）。
- `ExternalKubernetes`：注册集群。',
            'type' => 'string',
            'required' => false,
            'example' => 'Kubernetes',
          ),
        ),
        2 => 
        array (
          'name' => 'page_size',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '单页大小。',
            'description' => '每页显示的记录数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'page_number',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页数。',
            'description' => '当前页码。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '3',
          ),
        ),
        4 => 
        array (
          'name' => 'profile',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '集群标识。',
            'description' => '当您选择`cluster_type`为`ManagedKubernetes`时，即ACK托管类的集群时，您可以进一步指定集群的子类型。
- `Default`：ACK托管集群，包括ACK集群Pro版和ACK集群基础版。

- `Edge`：ACK Edge集群，包括ACK Edge集群Pro版和ACK Edge集群基础版。

- `Serverless`：ACK Serverless集群，包括ACK Serverless集群Pro版和ACK Serverless集群基础版。

- `Lingjun`：ACK灵骏集群，提供Pro版。',
            'type' => 'string',
            'required' => false,
            'example' => 'Default',
          ),
        ),
        5 => 
        array (
          'name' => 'cluster_spec',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '集群规格。',
            'description' => '当您选择`cluster_type`为`ManagedKubernetes`并配置`profile`后，您可以进一步指定集群的规格。

- `ack.pro.small`：集群Pro版。

- `ack.standard`：集群基础版（取值为空时默认选择）。',
            'type' => 'string',
            'required' => false,
            'example' => 'ack.pro.small',
          ),
        ),
        6 => 
        array (
          'name' => 'region_id',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域。',
            'description' => '集群地域。通过指定该字段，可以过滤出该地域下的集群列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        7 => 
        array (
          'name' => 'cluster_id',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'ca418e5e6fa2849d78301341700axxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回数据体。',
            'description' => '返回体数据。',
            'type' => 'object',
            'properties' => 
            array (
              'clusters' => 
              array (
                'title' => '集群详情列表。',
                'description' => '集群信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '集群实例。

',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'cluster_id' => 
                    array (
                      'title' => '集群ID。',
                      'description' => '集群ID。',
                      'type' => 'string',
                      'example' => 'c3fb96524f9274b4495df0f12a6b5****',
                    ),
                    'cluster_type' => 
                    array (
                      'title' => '集群类型。',
                      'description' => '- `Kubernetes`: ACK专有集群。

- `ManagedKubernetes`：ACK托管类的集群，包括ACK托管集群（ACK集群Pro版、ACK集群基础版）、ACK Serverless集群（Pro版、基础版）、ACK Edge集群（Pro版、基础版）、ACK灵骏集群（Pro版）。

- `ExternalKubernetes`：注册集群。',
                      'type' => 'string',
                      'example' => 'Kubernetes',
                    ),
                    'created' => 
                    array (
                      'title' => '集群初始化时间。',
                      'description' => '集群创建时间。',
                      'type' => 'string',
                      'example' => '2020-08-20T10:51:29+08:00',
                    ),
                    'init_version' => 
                    array (
                      'title' => '集群初始化版本。',
                      'description' => '集群版本，与Kubernetes社区基线版本保持一致。建议选择最新版本，若不指定，默认使用最新版本。

目前ACK控制台提供两种最新Kubernetes版本的集群。您可以通过API创建其他Kubernetes版本集群。ACK支持的Kubernetes版本，请参见[Kubernetes版本发布概览](~~185269~~)。',
                      'type' => 'string',
                      'example' => '1.16.9-aliyun.1',
                    ),
                    'current_version' => 
                    array (
                      'title' => '集群当前版本。',
                      'description' => '集群当前版本。',
                      'type' => 'string',
                      'example' => '1.16.9-aliyun.1',
                    ),
                    'next_version' => 
                    array (
                      'title' => '集群可升级版本。',
                      'description' => '集群可升级版本。',
                      'type' => 'string',
                      'example' => '1.18.8-aliyun.1',
                    ),
                    'deletion_protection' => 
                    array (
                      'title' => '集群是否开启删除保护。',
                      'description' => '集群删除保护，防止通过控制台或API误删除集群。取值：

- `true`：启用集群删除保护，将不能通过控制台或API删除集群。
- `false`：不启用集群删除保护，则能通过控制台或API删除集群。
',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'docker_version' => 
                    array (
                      'title' => '集群使用的Docker版本。',
                      'description' => '集群Docker版本。',
                      'type' => 'string',
                      'example' => '19.03.5',
                    ),
                    'external_loadbalancer_id' => 
                    array (
                      'title' => '集群负载均衡服务的ID。',
                      'description' => '集群中Ingress SLB实例。

默认实例规格：性能保障型（slb.s1.small）。',
                      'type' => 'string',
                      'example' => 'lb-2vcrbmlevo6kjpgch****',
                    ),
                    'master_url' => 
                    array (
                      'title' => '集群访问地址列表。',
                      'description' => '集群API Server访问地址，包含内网访问地址以及公网访问地址。',
                      'type' => 'string',
                      'example' => '{\\"api_server_endpoint\\":\\"\\",\\"intranet_api_server_endpoint\\":\\"https://192.168.0.251:6443\\"}',
                    ),
                    'meta_data' => 
                    array (
                      'title' => '集群元数据信息。',
                      'description' => '集群元数据信息。',
                      'type' => 'string',
                      'example' => '{\\"Addons\\":[{\\"config\\":***}',
                    ),
                    'name' => 
                    array (
                      'title' => '集群名称。',
                      'description' => '集群名称。

命名规则：由数字、汉字、英文字符或短划线（-）组成，长度范围1~63个字符，且不能以短划线（-）开头。',
                      'type' => 'string',
                      'example' => 'cluster-demo',
                    ),
                    'network_mode' => 
                    array (
                      'title' => '集群使用的网络类型，例如：VPC网络。',
                      'description' => '集群网络模式。取值：

- `classic`：经典网络。
- `vpc`：专有网络。
- `overlay`：叠加网络。
- `calico`：Calico网络。
',
                      'type' => 'string',
                      'example' => 'vpc',
                    ),
                    'private_zone' => 
                    array (
                      'title' => '集群是否开启Private Zone。',
                      'description' => '集群Private Zone配置。取值：

- `true`：启用Private Zone。
- `false`：不启用Private Zone。
',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'profile' => 
                    array (
                      'title' => '边缘集群表示，用于区分边缘托管版集群。',
                      'description' => '集群标识，取值：

- `Default`：ACK托管集群，包括ACK集群Pro版和ACK集群基础版。

- `Edge`：ACK Edge集群，包括ACK Edge集群Pro版和ACK Edge集群基础版。

- `Serverless`：ACK Serverless集群，包括ACK Serverless集群Pro版和ACK Serverless集群基础版。

- `Lingjun`：ACK灵骏集群，提供Pro版。',
                      'type' => 'string',
                      'example' => 'Default',
                    ),
                    'region_id' => 
                    array (
                      'title' => '地域ID。',
                      'description' => '集群所在地域ID。',
                      'type' => 'string',
                      'example' => 'cn-beijing',
                    ),
                    'resource_group_id' => 
                    array (
                      'title' => '集群资源组ID。',
                      'description' => '集群资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-acfmyvw3wjm****',
                    ),
                    'security_group_id' => 
                    array (
                      'title' => '集群安全组ID。',
                      'description' => '集群安全组ID。',
                      'type' => 'string',
                      'example' => 'sg-2vcgwsrwgt5mp0yi****',
                    ),
                    'size' => 
                    array (
                      'title' => '集群节点数。',
                      'description' => '集群当前节点数量，包含Master节点以及Worker节点。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '5',
                    ),
                    'state' => 
                    array (
                      'title' => '集群运行状态。',
                      'description' => '集群运行状态，取值：

- `initial`：集群创建中。
- `failed`：集群创建失败。
- `running`：集群运行中。
- `updating`：集群升级中。
- ` updating_failed`：集群升级失败。
- `scaling`：集群伸缩中。
- `stopped`：集群已经停止运行。
- `deleting`：集群删除中。
- `deleted`：集群已经被删除。
- `delete_failed`：集群删除失败。   ',
                      'type' => 'string',
                      'example' => 'running',
                    ),
                    'subnet_cidr' => 
                    array (
                      'title' => 'POD网段地址。',
                      'description' => 'Pod网络地址段，必须是有效的私有网段，即以下网段及其子网：
- 10.0.0.0/8
- 172.16-31.0.0/12-16
- 192.168.0.0/16

不能与VPC及VPC内已有Kubernetes集群使用的网段重复，创建成功后不能修改。

关于集群网络规划，请参见[VPC下Kubernetes的网络地址段规划](~~86500~~)。',
                      'type' => 'string',
                      'example' => '172.21.0.0/16',
                    ),
                    'tags' => 
                    array (
                      'title' => '集群标签。',
                      'description' => '集群资源标签。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '集群资源标签。',
                        '$ref' => '#/components/schemas/tag',
                      ),
                    ),
                    'updated' => 
                    array (
                      'title' => '集群更新时间。',
                      'description' => '集群更新时间。',
                      'type' => 'string',
                      'example' => '2020-09-16T11:09:55+08:00',
                    ),
                    'vpc_id' => 
                    array (
                      'title' => '集群所在的VPC ID。',
                      'description' => '集群专有网络ID，创建集群时必传。',
                      'type' => 'string',
                      'example' => 'vpc-2vcg932hsxsxuqbgl****',
                    ),
                    'vswitch_id' => 
                    array (
                      'title' => '集群使用的虚拟交换ID。',
                      'description' => '虚拟交换机ID，创建集群时可选择1~3个虚拟交换机。为保证集群高可用，建议选择不同可用区的虚拟交换机。',
                      'type' => 'string',
                      'example' => 'vsw-2vc41xuumx5z2rdma****,vsw-2vc41xuumx5z2rdma****',
                    ),
                    'worker_ram_role_name' => 
                    array (
                      'title' => '集群Worker RAM角色。',
                      'description' => 'Worker RAM角色名称，授权ECS实例为集群Woker节点。',
                      'type' => 'string',
                      'example' => 'KubernetesWorkerRole-ec87d15b-edca-4302-933f-c8a16bf0****',
                    ),
                    'zone_id' => 
                    array (
                      'title' => '可用区ID。',
                      'description' => '集群所属可用区ID。',
                      'type' => 'string',
                      'example' => 'cn-beijing-b',
                    ),
                    'cluster_spec' => 
                    array (
                      'title' => '托管版集群类型，面向托管集群。 • ack.pro.small：专业托管集群。 • ack.standard ：标准托管集群。',
                      'description' => '当您选择`cluster_type`为`ManagedKubernetes`并配置`profile`后，您可以进一步指定集群的规格。

- `ack.pro.small`：集群Pro版。

- `ack.standard`：集群基础版（取值为空时默认选择）。',
                      'type' => 'string',
                      'example' => 'ack.standard',
                    ),
                    'maintenance_window' => 
                    array (
                      'description' => '集群维护窗口，该功能只在专业托管版中生效。',
                      '$ref' => '#/components/schemas/maintenance_window',
                    ),
                  ),
                ),
              ),
              'page_info' => 
              array (
                'title' => '分页信息。',
                'description' => '分页信息。
',
                'type' => 'object',
                'properties' => 
                array (
                  'page_number' => 
                  array (
                    'title' => '分页数。',
                    'description' => '分页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'page_size' => 
                  array (
                    'title' => '单页大小。',
                    'description' => '单页大小。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '20',
                  ),
                  'total_count' => 
                  array (
                    'title' => '结果总数。',
                    'description' => '结果总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '50',
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"clusters\\": [\\n    {\\n      \\"cluster_id\\": \\"c3fb96524f9274b4495df0f12a6b5****\\",\\n      \\"cluster_type\\": \\"Kubernetes\\",\\n      \\"created\\": \\"2020-08-20T10:51:29+08:00\\",\\n      \\"init_version\\": \\"1.16.9-aliyun.1\\",\\n      \\"current_version\\": \\"1.16.9-aliyun.1\\",\\n      \\"next_version\\": \\"1.18.8-aliyun.1\\",\\n      \\"deletion_protection\\": true,\\n      \\"docker_version\\": \\"19.03.5\\",\\n      \\"external_loadbalancer_id\\": \\"lb-2vcrbmlevo6kjpgch****\\",\\n      \\"master_url\\": \\"{\\\\\\\\\\\\\\"api_server_endpoint\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"intranet_api_server_endpoint\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"https://192.168.0.251:6443\\\\\\\\\\\\\\"}\\",\\n      \\"meta_data\\": \\"{\\\\\\\\\\\\\\"Addons\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"config\\\\\\\\\\\\\\":***}\\",\\n      \\"name\\": \\"cluster-demo\\",\\n      \\"network_mode\\": \\"vpc\\",\\n      \\"private_zone\\": false,\\n      \\"profile\\": \\"Default\\",\\n      \\"region_id\\": \\"cn-beijing\\",\\n      \\"resource_group_id\\": \\"rg-acfmyvw3wjm****\\",\\n      \\"security_group_id\\": \\"sg-2vcgwsrwgt5mp0yi****\\",\\n      \\"size\\": 5,\\n      \\"state\\": \\"running\\",\\n      \\"subnet_cidr\\": \\"172.21.0.0/16\\",\\n      \\"tags\\": [\\n        {\\n          \\"key\\": \\"env\\",\\n          \\"value\\": \\"prod\\"\\n        }\\n      ],\\n      \\"updated\\": \\"2020-09-16T11:09:55+08:00\\",\\n      \\"vpc_id\\": \\"vpc-2vcg932hsxsxuqbgl****\\",\\n      \\"vswitch_id\\": \\"vsw-2vc41xuumx5z2rdma****,vsw-2vc41xuumx5z2rdma****\\",\\n      \\"worker_ram_role_name\\": \\"KubernetesWorkerRole-ec87d15b-edca-4302-933f-c8a16bf0****\\",\\n      \\"zone_id\\": \\"cn-beijing-b\\",\\n      \\"cluster_spec\\": \\"ack.standard\\",\\n      \\"maintenance_window\\": {\\n        \\"enable\\": false,\\n        \\"maintenance_time\\": \\"03:00:00Z\\",\\n        \\"duration\\": \\"3h\\",\\n        \\"weekly_period\\": \\"Monday,Thursday\\"\\n      }\\n    }\\n  ],\\n  \\"page_info\\": {\\n    \\"page_number\\": 3,\\n    \\"page_size\\": 20,\\n    \\"total_count\\": 50\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeClustersV1Response>\\n    <clusters>\\n        <cluster_id>c3fb96524f9274b4495df0f12a6b5****</cluster_id>\\n        <cluster_type>Kubernetes</cluster_type>\\n        <created>2020-08-20T10:51:29+08:00</created>\\n        <init_version>1.16.9-aliyun.1</init_version>\\n        <current_version>1.16.9-aliyun.1</current_version>\\n        <next_version>1.18.8-aliyun.1</next_version>\\n        <deletion_protection>true</deletion_protection>\\n        <docker_version>19.03.5</docker_version>\\n        <external_loadbalancer_id>lb-2vcrbmlevo6kjpgch****</external_loadbalancer_id>\\n        <master_url>{\\\\\\"api_server_endpoint\\\\\\":\\\\\\"\\\\\\",\\\\\\"intranet_api_server_endpoint\\\\\\":\\\\\\"https://192.168.0.251:6443\\\\\\"}</master_url>\\n        <meta_data>{\\\\\\"Addons\\\\\\":[{\\\\\\"config\\\\\\":***}</meta_data>\\n        <name>cluster-demo</name>\\n        <network_mode>vpc</network_mode>\\n        <private_zone>false</private_zone>\\n        <profile>Default</profile>\\n        <region_id>cn-beijing</region_id>\\n        <resource_group_id>rg-acfmyvw3wjm****</resource_group_id>\\n        <security_group_id>sg-2vcgwsrwgt5mp0yi****</security_group_id>\\n        <size>5</size>\\n        <state>running</state>\\n        <subnet_cidr>172.21.0.0/16</subnet_cidr>\\n        <tags>\\n            <key>env</key>\\n            <value>prod</value>\\n        </tags>\\n        <updated>2020-09-16T11:09:55+08:00</updated>\\n        <vpc_id>vpc-2vcg932hsxsxuqbgl****</vpc_id>\\n        <vswitch_id>vsw-2vc41xuumx5z2rdma****,vsw-2vc41xuumx5z2rdma****</vswitch_id>\\n        <worker_ram_role_name>KubernetesWorkerRole-ec87d15b-edca-4302-933f-c8a16bf0****</worker_ram_role_name>\\n        <zone_id>cn-beijing-b</zone_id>\\n        <cluster_spec>ack.standard</cluster_spec>\\n        <maintenance_window>\\n            <enable>false</enable>\\n            <maintenance_time>03:00:00Z</maintenance_time>\\n            <duration>3h</duration>\\n            <weekly_period>Monday,Thursday</weekly_period>\\n        </maintenance_window>\\n    </clusters>\\n    <page_info>\\n        <page_number>3</page_number>\\n        <page_size>20</page_size>\\n        <total_count>50</total_count>\\n    </page_info>\\n</DescribeClustersV1Response>","errorExample":""}]',
      'title' => '查询集群列表',
    ),
    'DescribeClusterDetail' => 
    array (
      'summary' => '您可以调用DescribeClusterDetail接口，根据集群ID查询指定集群的详细信息。',
      'path' => '/clusters/{ClusterId}',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '400',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcskEUXDVA',
          1 => 'FEATUREcskI1OLEY',
          2 => 'FEATUREcskZG2TSX',
          3 => 'FEATUREcskDGKERY',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cdde1f21ae22e483ebcb068a6eb7f****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回数据体。',
            'description' => '返回体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'cluster_id' => 
              array (
                'title' => '集群ID。',
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'c82e6987e2961451182edacd74faf****',
              ),
              'cluster_type' => 
              array (
                'title' => '集群类型。',
                'description' => '- `Kubernetes`: ACK专有集群。

- `ManagedKubernetes`：ACK托管类的集群，包括ACK托管集群（ACK集群Pro版、ACK集群基础版）、ACK Serverless集群（Pro版、基础版）、ACK Edge集群（Pro版、基础版）、ACK灵骏集群（Pro版）。

- `ExternalKubernetes`：注册集群。',
                'type' => 'string',
                'example' => 'Kubernetes',
              ),
              'created' => 
              array (
                'title' => '集群创建时间。',
                'description' => '集群创建时间。',
                'type' => 'string',
                'example' => '2019-11-25T15:50:20+08:00',
              ),
              'init_version' => 
              array (
                'title' => '集群初始化版本。',
                'description' => '集群初始化版本。',
                'type' => 'string',
                'example' => '1.16.6-aliyun.1',
              ),
              'current_version' => 
              array (
                'title' => '集群当前版本。',
                'description' => '集群当前版本。ACK支持的Kubernetes版本，请参见[Kubernetes版本发布概览](~~185269~~)。',
                'type' => 'string',
                'example' => '1.16.6-aliyun.1',
              ),
              'next_version' => 
              array (
                'title' => '集群可升级版本。',
                'type' => 'string',
                'example' => '1.18.8-aliyun.1',
              ),
              'deletion_protection' => 
              array (
                'title' => '集群是否开启删除保护。',
                'description' => '集群删除保护，防止通过控制台或API误删除集群。取值：

- `true`：启用集群删除保护，将不能通过控制台或API删除集群。
- `false`：不启用集群删除保护，则能通过控制台或API删除集群。

',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'docker_version' => 
              array (
                'title' => '集群内Docker版本。',
                'description' => '集群中的Docker版本。',
                'type' => 'string',
                'example' => '19.03.5',
              ),
              'external_loadbalancer_id' => 
              array (
                'title' => '集群Ingress LB实例ID。',
                'type' => 'string',
                'example' => 'lb-2zehc05z3b8dwiifh****',
              ),
              'meta_data' => 
              array (
                'title' => '集群元数据。',
                'description' => '集群元数据信息。',
                'type' => 'string',
                'example' => '\\"Addons\\":***',
              ),
              'name' => 
              array (
                'title' => '集群名称。',
                'description' => '集群名称。

命名规则：由数字、汉字、英文字符或短划线（-）组成，长度范围1~63个字符，且不能以短划线（-）开头。',
                'type' => 'string',
                'example' => 'cluster-demo',
              ),
              'network_mode' => 
              array (
                'title' => '集群采用的网络类型，例如：VPC网络。',
                'type' => 'string',
                'example' => 'vpc',
              ),
              'region_id' => 
              array (
                'title' => '集群所在地域ID。',
                'description' => '集群所在地域ID。',
                'type' => 'string',
                'example' => 'cn-beijing',
              ),
              'resource_group_id' => 
              array (
                'title' => '集群资源组ID。',
                'description' => '集群资源组ID。',
                'type' => 'string',
                'example' => 'rg-acfmyvw3wjm****',
              ),
              'security_group_id' => 
              array (
                'title' => '集群安全组ID。',
                'description' => '集群安全组ID。',
                'type' => 'string',
                'example' => 'sg-25yq****',
              ),
              'size' => 
              array (
                'title' => '集群节点数量。',
                'description' => '集群节点数，包含Master节点及Worker节点。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '5',
              ),
              'state' => 
              array (
                'title' => '集群运行状态。',
                'description' => '集群运行状态，取值：

- `initial`：集群创建中。
- `failed`：集群创建失败。
- `running`：集群运行中。
- `updating`：集群升级中。
- `updating_failed`：集群升级失败。
- `scaling`：集群伸缩中。
- `waiting`：等待接入状态。
- `disconnected`：断开状态。
- `stopped`：集群已经停止运行。
- `deleting`：集群删除中。
- `deleted`：集群已经被删除。
- `delete_failed`：集群删除失败。   ',
                'type' => 'string',
                'example' => 'running',
              ),
              'tags' => 
              array (
                'title' => '集群标签。',
                'description' => '集群资源标签。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '集群资源标签。',
                  '$ref' => '#/components/schemas/tag',
                ),
              ),
              'updated' => 
              array (
                'title' => '集群更新时间。',
                'description' => '集群更新时间。',
                'type' => 'string',
                'example' => '2020-01-13T23:01:03+08:00',
              ),
              'vpc_id' => 
              array (
                'title' => '集群使用的VPC ID。',
                'description' => '集群专有网络ID，创建集群时的必填参数。',
                'type' => 'string',
                'example' => 'vpc-2zecuu62b9zw7a7qn****',
              ),
              'vswitch_id' => 
              array (
                'title' => '集群节点使用的虚拟交换机列表。',
                'description' => '虚拟交换机ID，创建集群时可选择1~3个虚拟交换机。为保证集群高可用，建议选择不同可用区的虚拟交换机。',
                'type' => 'string',
                'example' => 'vsw-2zete8s4qocqg0mf6****,vsw-2zete8s4qocqg0mf6****',
              ),
              'subnet_cidr' => 
              array (
                'title' => 'Pod网络地址段，必须是有效的私有网段，即以下网段及其子网：10.0.0.0/8，172.16-31.0.0/12-16，192.168.0.0/16。不能与 VPC 及VPC 内已有 Kubernetes 集群使用的网段重复，创建成功后不能修改。  有关集群网络规划，请参见：[VPC下 Kubernetes 的网络地址段规划](https://help.aliyun.com/document_detail/～～86500～～)。',
                'description' => 'Pod网络地址段，必须是有效的私有网段，即以下网段及其子网：
- 10.0.0.0/8
- 172.16-31.0.0/12-16
- 192.168.0.0/16

不能与VPC及VPC内已有Kubernetes集群使用的网段重复，创建成功后不能被修改。

关于集群网络规划，请参见[VPC下Kubernetes的网络地址段规划](~~186964~~)。',
                'type' => 'string',
                'example' => '172.20.0.0/16',
              ),
              'zone_id' => 
              array (
                'title' => '集群所在地域内的可用区ID。',
                'type' => 'string',
                'example' => 'cn-beijing-a',
              ),
              'master_url' => 
              array (
                'title' => '集群访问地址。',
                'description' => '集群访问地址，包含内网访问地址及公网访问地址。',
                'type' => 'string',
                'example' => '{\\"intranet_api_server_endpoint\\":\\"https://192.168.0.251:6443\\"***}',
              ),
              'private_zone' => 
              array (
                'title' => '集群是否启用用PrivateZone。  true：启用 false：不启用 默认值：false。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'profile' => 
              array (
                'title' => '面向场景时的集群类型。  Default：非边缘场景集群。 Edge：边缘场景集群。',
                'description' => '当您选择`cluster_type`为`ManagedKubernetes`时，即ACK托管类的集群时，您可以进一步指定集群的子类型。

- `Default`：ACK托管集群，包括ACK集群Pro版和ACK集群基础版。

- `Edge`：ACK Edge集群，包括ACK Edge集群Pro版和ACK Edge集群基础版。

- `Serverless`：ACK Serverless集群，包括ACK Serverless集群Pro版和ACK Serverless集群基础版。

- `Lingjun`：ACK灵骏集群，提供Pro版。',
                'type' => 'string',
                'example' => 'Default',
              ),
              'cluster_spec' => 
              array (
                'title' => '托管版集群类型，面向托管集群。  ack.pro.small：专业托管集群。 ack.standard ：标准托管集群。',
                'description' => '当您选择`cluster_type`为`ManagedKubernetes`并配置`profile`后，您可以进一步指定集群的规格。

- `ack.pro.small`：集群Pro版。

- `ack.standard`：集群基础版（取值为空时默认选择）。',
                'type' => 'string',
                'example' => 'ack.pro.small',
              ),
              'worker_ram_role_name' => 
              array (
                'title' => 'Worker节点RAM角色名称。',
                'description' => 'Worker RAM角色名称，授权ECS实例为集群Woker节点。',
                'type' => 'string',
                'example' => 'KubernetesWorkerRole-ec87d15b-edca-4302-933f-c8a16bf0****',
              ),
              'maintenance_window' => 
              array (
                'description' => '集群维护窗口配置，只在专业托管版本（即：ACK Pro版集群）中生效。',
                '$ref' => '#/components/schemas/maintenance_window',
              ),
              'parameters' => 
              array (
                'description' => '集群ROS参数集合。',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'string',
                  'description' => 'ROS参数',
                  'example' => 'WorkerImageId',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"cluster_id\\": \\"c82e6987e2961451182edacd74faf****\\",\\n  \\"cluster_type\\": \\"Kubernetes\\",\\n  \\"created\\": \\"2019-11-25T15:50:20+08:00\\",\\n  \\"init_version\\": \\"1.16.6-aliyun.1\\",\\n  \\"current_version\\": \\"1.16.6-aliyun.1\\",\\n  \\"deletion_protection\\": true,\\n  \\"docker_version\\": \\"19.03.5\\",\\n  \\"meta_data\\": \\"\\\\\\\\\\\\\\"Addons\\\\\\\\\\\\\\":***\\",\\n  \\"name\\": \\"cluster-demo\\",\\n  \\"region_id\\": \\"cn-beijing\\",\\n  \\"resource_group_id\\": \\"rg-acfmyvw3wjm****\\",\\n  \\"security_group_id\\": \\"sg-25yq****\\",\\n  \\"size\\": 5,\\n  \\"state\\": \\"running\\",\\n  \\"tags\\": [\\n    {\\n      \\"key\\": \\"env\\",\\n      \\"value\\": \\"prod\\"\\n    }\\n  ],\\n  \\"updated\\": \\"2020-01-13T23:01:03+08:00\\",\\n  \\"vpc_id\\": \\"vpc-2zecuu62b9zw7a7qn****\\",\\n  \\"vswitch_id\\": \\"vsw-2zete8s4qocqg0mf6****,vsw-2zete8s4qocqg0mf6****\\",\\n  \\"subnet_cidr\\": \\"172.20.0.0/16\\",\\n  \\"master_url\\": \\"{\\\\\\\\\\\\\\"intranet_api_server_endpoint\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"https://192.168.0.251:6443\\\\\\\\\\\\\\"***}\\",\\n  \\"profile\\": \\"Default\\",\\n  \\"cluster_spec\\": \\"ack.pro.small\\",\\n  \\"worker_ram_role_name\\": \\"KubernetesWorkerRole-ec87d15b-edca-4302-933f-c8a16bf0****\\",\\n  \\"maintenance_window\\": {\\n    \\"enable\\": false,\\n    \\"maintenance_time\\": \\"03:00:00Z\\",\\n    \\"duration\\": \\"3h\\",\\n    \\"weekly_period\\": \\"Monday,Thursday\\"\\n  },\\n  \\"parameters\\": {\\n    \\"key\\": \\"WorkerImageId\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<cluster_id>c82e6987e2961451182edacd74faf****</cluster_id>\\n<cluster_type>Kubernetes</cluster_type>\\n<created>2019-11-25T15:50:20+08:00</created>\\n<init_version>1.16.6-aliyun.1</init_version>\\n<current_version>1.16.6-aliyun.1</current_version>\\n<next_version>1.18.8-aliyun.1</next_version>\\n<deletion_protection>true</deletion_protection>\\n<docker_version>19.03.5</docker_version>\\n<external_loadbalancer_id>lb-2ze3buguz3gx9920z****</external_loadbalancer_id>\\n<meta_data>\\\\\\"Addons\\\\\\":***</meta_data>\\n<name>cluster-demo</name>\\n<network_mode>vpc</network_mode>\\n<region_id>cn-beijing</region_id>\\n<resource_group_id>rg-acfmyvw3wjm****</resource_group_id>\\n<security_group_id>sg-25yq****</security_group_id>\\n<size>5</size>\\n<state>running</state>\\n<tags>\\n    <key>env</key>\\n    <value>prod</value>\\n</tags>\\n<updated>2020-01-13T23:01:03+08:00</updated>\\n<vpc_id>vpc-2zecuu62b9zw7a7qn****</vpc_id>\\n<vswitch_id>vsw-2zete8s4qocqg0mf6****,vsw-2zete8s4qocqg0mf6****</vswitch_id>\\n<subnet_cidr>172.20.0.0/16</subnet_cidr>\\n<zone_id>cn-beijing-a</zone_id>\\n<master_url>{\\\\\\"intranet_api_server_endpoint\\\\\\":\\\\\\"https://192.168.0.251:6443\\\\\\"***}</master_url>\\n<private_zone>false</private_zone>\\n<profile>Default</profile>\\n<cluster_spec>ack.pro.small</cluster_spec>\\n<worker_ram_role_name>KubernetesWorkerRole-ec87d15b-edca-4302-933f-c8a16bf0****</worker_ram_role_name>\\n<maintenance_window>\\n    <enable>false</enable>\\n    <maintenance_time>03:00:00Z</maintenance_time>\\n    <duration>3h</duration>\\n    <weekly_period>Monday,Thursday</weekly_period>\\n</maintenance_window>","errorExample":""}]',
      'title' => '查询指定集群的信息',
    ),
    'DescribeClusterResources' => 
    array (
      'summary' => '您在使用容器服务 Kubernetes 版过程中，会同时使用其他关联的阿里云云产品资源。您可以调用DescribeClusterResources接口查询指定集群的关联资源，例如VPC、SLB等。如果您需要查询节点池或节点资源，您可以调用DescribeClusterNodePools或DescribeClusterNodes接口。',
      'path' => '/clusters/{ClusterId}/resources',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '397',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcskEUXDVA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。

关于如何查看集群ID，请参见[查看集群信息](~~89446~~)。

您也可通过API接口[DescribeClustersV1](~~183905~~)，查看阿里云账号下所有创建的集群信息。',
            'type' => 'string',
            'required' => true,
            'example' => 'cb95aa626a47740afbf6aa099b65****',
          ),
        ),
        1 => 
        array (
          'name' => 'with_addon_resources',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否同时查询集群组件创建的资源。',
            'description' => '是否同时查询集群组件创建的资源。',
            'type' => 'boolean',
            'required' => false,
            'default' => 'false',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回数据体。',
            'description' => '资源对象列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源详情。',
              'type' => 'object',
              'properties' => 
              array (
                'cluster_id' => 
                array (
                  'title' => '集群ID。',
                  'description' => '集群ID。',
                  'type' => 'string',
                  'example' => 'cb95aa626a47740afbf6aa099b65****',
                ),
                'created' => 
                array (
                  'title' => '资源创建时间。',
                  'description' => '资源创建时间。',
                  'type' => 'string',
                  'example' => '2023-08-15T14:34:42+08:00',
                ),
                'instance_id' => 
                array (
                  'title' => '资源实例ID。',
                  'description' => '资源ID。',
                  'type' => 'string',
                  'example' => 'ngw-wz9sphwk42sdtjixo****',
                ),
                'resource_info' => 
                array (
                  'title' => '资源元信息。',
                  'description' => '资源信息。关于资源的源信息，请参见[ListStackResources](~~133836~~)。',
                  'type' => 'string',
                  'example' => '{\\"Id\\":\\"k8s_NAT_Gateway\\",\\"Name\\":\\"k8s_NAT_Gateway\\",\\"Type\\":\\"ALIYUN::VPC::NatGateway\\",\\"Status\\":\\"CREATE_COMPLETE\\",\\"StatusReason\\":\\"state changed\\",\\"Updated\\":\\"2023-08-15T06:33:10\\",\\"PhysicalId\\":\\"ngw-wz9sphwk42sdtjixo****\\"}',
                ),
                'resource_type' => 
                array (
                  'title' => '资源类型。',
                  'description' => '资源类型。',
                  'type' => 'string',
                  'example' => 'ALIYUN::VPC::NatGateway',
                ),
                'state' => 
                array (
                  'title' => '资源状态。',
                  'description' => '资源状态。可选值：

- `CREATE_COMPLETE`：成功创建资源。
- `CREATE_FAILED`：创建资源失败。
- `CREATE_IN_PROGRESS`：创建资源中。
- `DELETE_FAILED`：删除资源失败。
- `DELETE_IN_PROGRESS`：删除资源中。
- `ROLLBACK_COMPLETE`：成功回滚。
- `ROLLBACK_FAILED`：回滚失败。
- `ROLLBACK_IN_PROGRESS`：回滚中。',
                  'type' => 'string',
                  'example' => 'CREATE_COMPLETE',
                ),
                'auto_create' => 
                array (
                  'title' => '是否为自动创建。',
                  'description' => '资源是否由ACK创建：

- 1：表示由ACK创建
- 0：表示该资源为已有资源',
                  'type' => 'integer',
                  'format' => 'int64',
                  'example' => '1',
                ),
                'dependencies' => 
                array (
                  'title' => '依赖的资源。',
                  'description' => '依赖资源列表。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '依赖资源详情。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'cluster_id' => 
                      array (
                        'title' => '依赖资源的集群ID。',
                        'description' => '依赖资源的集群ID。',
                        'type' => 'string',
                        'example' => 'cc5ee03f63e43425cb6f71f1a1756****',
                      ),
                      'resource_type' => 
                      array (
                        'title' => '依赖资源类型。',
                        'description' => '依赖资源类型。',
                        'type' => 'string',
                        'example' => 'ALIYUN::VPC::NatGateway',
                      ),
                      'instance_id' => 
                      array (
                        'title' => '依赖资源实例ID。',
                        'description' => '依赖资源实例ID。',
                        'type' => 'string',
                        'example' => 'ngw-wz9sphwk42sdtjixo****',
                      ),
                    ),
                  ),
                ),
                'associated_object' => 
                array (
                  'title' => '资源关联的k8s对象。',
                  'description' => '资源关联的k8s对象。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'kind' => 
                    array (
                      'title' => 'k8s对象类型。',
                      'description' => 'k8s对象类型。',
                      'type' => 'string',
                      'example' => 'Service',
                    ),
                    'namespace' => 
                    array (
                      'title' => 'k8s对象命名空间。',
                      'description' => 'k8s对象命名空间。',
                      'type' => 'string',
                      'example' => 'kube-system',
                    ),
                    'name' => 
                    array (
                      'title' => 'k8s对象名称。',
                      'description' => 'k8s对象名称。',
                      'type' => 'string',
                      'example' => 'nginx-ingress-lb',
                    ),
                  ),
                ),
                'delete_behavior' => 
                array (
                  'title' => '删除集群时该资源的删除行为。',
                  'description' => '删除集群时该资源的删除行为。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'delete_by_default' => 
                    array (
                      'title' => '删除集群时是否默认删除该资源。',
                      'description' => '删除集群时是否默认删除该资源。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'changeable' => 
                    array (
                      'title' => 'delete_by_default中返回的默认行为是否可以更改。',
                      'description' => 'delete_by_default中返回的默认行为是否可以更改。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                  ),
                ),
                'creator_type' => 
                array (
                  'title' => '该资源创建者的类型。可能的取值：
- user：由用户自行创建；
- system：由ACK管控系统创建；
- addon：由集群组件创建。',
                  'description' => '该资源创建者的类型。可能的取值：
- user：由用户自行创建；
- system：由ACK管控系统创建；
- addon：由集群组件创建。',
                  'type' => 'string',
                  'example' => 'addon',
                  'enum' => 
                  array (
                    0 => 'user',
                    1 => 'system',
                    2 => 'addon',
                  ),
                ),
                'extra_info' => 
                array (
                  'title' => '资源的其他信息。',
                  'description' => '资源的其他信息。',
                  'type' => 'object',
                  'example' => '{"IP": "xx.xx.xx.xx"}',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"[\\n  {\\n    \\"cluster_id\\": \\"cb95aa626a47740afbf6aa099b65****\\",\\n    \\"created\\": \\"2023-08-15T14:34:42+08:00\\",\\n    \\"instance_id\\": \\"ngw-wz9sphwk42sdtjixo****\\",\\n    \\"resource_info\\": \\"{\\\\\\\\\\\\\\"Id\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"k8s_NAT_Gateway\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"Name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"k8s_NAT_Gateway\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"Type\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"ALIYUN::VPC::NatGateway\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"Status\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"CREATE_COMPLETE\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"StatusReason\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"state changed\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"Updated\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"2023-08-15T06:33:10\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"PhysicalId\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"ngw-wz9sphwk42sdtjixo****\\\\\\\\\\\\\\"}\\",\\n    \\"resource_type\\": \\"ALIYUN::VPC::NatGateway\\",\\n    \\"state\\": \\"CREATE_COMPLETE\\",\\n    \\"auto_create\\": 1,\\n    \\"dependencies\\": [\\n      {\\n        \\"cluster_id\\": \\"cc5ee03f63e43425cb6f71f1a1756****\\",\\n        \\"resource_type\\": \\"ALIYUN::VPC::NatGateway\\",\\n        \\"instance_id\\": \\"ngw-wz9sphwk42sdtjixo****\\"\\n      }\\n    ],\\n    \\"associated_object\\": {\\n      \\"kind\\": \\"Service\\",\\n      \\"namespace\\": \\"kube-system\\",\\n      \\"name\\": \\"nginx-ingress-lb\\"\\n    },\\n    \\"delete_behavior\\": {\\n      \\"delete_by_default\\": false,\\n      \\"changeable\\": false\\n    },\\n    \\"creator_type\\": \\"addon\\",\\n    \\"extra_info\\": {\\n      \\"IP\\": \\"xx.xx.xx.xx\\"\\n    }\\n  }\\n]","errorExample":""},{"type":"xml","example":"<DescribeClusterResourcesResponse>\\n    <cluster_id>cb95aa626a47740afbf6aa099b65****</cluster_id>\\n    <created>2023-08-15T14:34:42+08:00</created>\\n    <instance_id>ngw-wz9sphwk42sdtjixo****</instance_id>\\n    <resource_info>{\\\\\\"Id\\\\\\":\\\\\\"k8s_NAT_Gateway\\\\\\",\\\\\\"Name\\\\\\":\\\\\\"k8s_NAT_Gateway\\\\\\",\\\\\\"Type\\\\\\":\\\\\\"ALIYUN::VPC::NatGateway\\\\\\",\\\\\\"Status\\\\\\":\\\\\\"CREATE_COMPLETE\\\\\\",\\\\\\"StatusReason\\\\\\":\\\\\\"state changed\\\\\\",\\\\\\"Updated\\\\\\":\\\\\\"2023-08-15T06:33:10\\\\\\",\\\\\\"PhysicalId\\\\\\":\\\\\\"ngw-wz9sphwk42sdtjixo****\\\\\\"}</resource_info>\\n    <resource_type>ALIYUN::VPC::NatGateway</resource_type>\\n    <state>CREATE_COMPLETE</state>\\n    <auto_create>1</auto_create>\\n    <dependencies>\\n        <cluster_id>cc5ee03f63e43425cb6f71f1a1756****</cluster_id>\\n        <resource_type>ALIYUN::VPC::NatGateway</resource_type>\\n        <instance_id>ngw-wz9sphwk42sdtjixo****</instance_id>\\n    </dependencies>\\n</DescribeClusterResourcesResponse>","errorExample":""}]',
      'title' => '查询指定集群的关联资源',
    ),
    'DescribeKubernetesVersionMetadata' => 
    array (
      'summary' => '您可以调用DescribeKubernetesVersionMetadata接口查询Kubernetes版本的详细信息，包括Kubernetes版本信息、版本的发布日期和过期时间、兼容的操作系统，使用的运行时等。',
      'path' => '/api/v1/metadata/versions',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '526',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcskEUXDVA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域ID。',
            'description' => '集群所在地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'ClusterType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '集群类型。',
            'description' => '集群类型，取值：

- `Kubernetes`: ACK专有版集群。
- `ManagedKubernetes`：ACK托管版集群，包括ACK Pro版集群、ACK基础版集群、ACK Serverless Pro版集群、ACK Serverless基础版集群、ACK Edge Pro版集群、ACK Edge基础版。
- `ExternalKubernetes`：ACK注册集群。
',
            'type' => 'string',
            'required' => true,
            'example' => 'Kubernetes',
          ),
        ),
        2 => 
        array (
          'name' => 'KubernetesVersion',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '要查询的版本，如果为空则查所有版本。',
            'description' => '集群版本，与Kubernetes社区基线版本保持一致。建议选择最新版本，若不指定，默认使用最新版本。

目前在ACK控制台您可以创建两种最新版本的集群。您可以通过API创建其他Kubernetes版本集群。ACK支持的Kubernetes版本，请参见[Kubernetes版本发布概览](~~185269~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '1.26.3-aliyun.1',
          ),
        ),
        3 => 
        array (
          'name' => 'Profile',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '边缘集群标识，用于区分边缘集群，取值：Default或Edge。',
            'description' => '面向场景时的集群类型，取值：

- `Default`：非边缘场景集群。
- `Edge`：边缘场景集群。
- `Serverless`：ASK集群。

默认值：`Default`。',
            'type' => 'string',
            'required' => false,
            'example' => 'Default',
          ),
        ),
        4 => 
        array (
          'name' => 'runtime',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '运行时。',
            'description' => '运行时类型，可以通过指定运行时类型，过滤出运行时所支持的系统镜像，取值：

- `docker`：docker运行时。
- `containerd`：containerd运行时。
- `Sandboxed-Container.runv`：安全沙箱。

若指定运行时类型，将返回指定运行时支持的镜像版本。

若不指定运行时类型，默认返回全部镜像。',
            'type' => 'string',
            'required' => false,
            'example' => 'containerd',
          ),
        ),
        5 => 
        array (
          'name' => 'Mode',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '查询模式，取值：supported、creatable',
            'description' => '查询模式，取值：
- `supported`：查询受支持版本
- `creatable`：查询可创建版本

若指定`KubernetesVersion`，将忽略查询模式。

若不指定查询模式，默认返回可创建版本。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'supported',
            'default' => 'creatable',
            'enum' => 
            array (
            ),
          ),
        ),
        6 => 
        array (
          'name' => 'QueryUpgradableVersion',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否查询该集群版本的可升级版本，仅在指定KubernetesVersion参数时生效。',
            'description' => '是否查询该集群版本的可升级版本，仅在指定KubernetesVersion参数时生效。',
            'type' => 'boolean',
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
            'title' => '返回数据体。	',
            'description' => '集群版本详情列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '版本详情。',
              'type' => 'object',
              'properties' => 
              array (
                'capabilities' => 
                array (
                  'title' => 'Kubernetes版本特性。	',
                  'description' => 'Kubernetes版本功能特性。',
                  'type' => 'object',
                ),
                'images' => 
                array (
                  'title' => 'ECS系统镜像列表。	',
                  'description' => '系统镜像列表。	',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '镜像详情。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'image_id' => 
                      array (
                        'title' => '镜像ID。	',
                        'description' => '镜像ID。',
                        'type' => 'string',
                        'example' => 'centos_7_9_x64_20G_alibase_20221129.vhd',
                      ),
                      'image_name' => 
                      array (
                        'title' => '镜像名称。	',
                        'description' => '镜像名称。',
                        'type' => 'string',
                        'example' => 'CentOS 7.9',
                      ),
                      'platform' => 
                      array (
                        'title' => '操作系统发行版。取值范围： CentOS,AliyunLinux,Windows,WindowsCore。',
                        'description' => '操作系统平台。取值：
- `AliyunLinux`
- `CentOS`
- `Windows`
- `WindowsCore`',
                        'type' => 'string',
                        'example' => 'CentOS',
                      ),
                      'os_version' => 
                      array (
                        'title' => '镜像版本。',
                        'description' => '镜像版本。',
                        'type' => 'string',
                        'example' => '7.9',
                      ),
                      'image_type' => 
                      array (
                        'title' => '镜像类型。	',
                        'description' => '操作系统发行版类型，推荐使用该字段指定节点操作系统。取值：

-  `CentOS`
- `AliyunLinux`
-  `AliyunLinux Qboot`
- `AliyunLinuxUEFI`
- `AliyunLinux3`
- `Windows`
- `WindowsCore`
- `AliyunLinux3Arm64`
- `ContainerOS`',
                        'type' => 'string',
                        'example' => 'CentOS',
                      ),
                      'os_type' => 
                      array (
                        'title' => '操作系统发行版本号。',
                        'description' => '操作系统类型，例如：

- `Windows`
- `Linux`',
                        'type' => 'string',
                        'example' => 'Linux',
                      ),
                      'image_category' => 
                      array (
                        'title' => '镜像分类',
                        'description' => '镜像分类，部分取值：

- `system`：公共镜像。
- `self`：您的自定义镜像。
- `others`：其他用户的公开镜像。
- `marketplace`：镜像市场镜像。
',
                        'type' => 'string',
                        'example' => 'system',
                      ),
                      'architecture' => 
                      array (
                        'title' => '镜像架构',
                        'description' => '镜像架构。',
                        'type' => 'string',
                        'example' => 'x86_64',
                      ),
                    ),
                  ),
                ),
                'meta_data' => 
                array (
                  'title' => 'Kubernetes版本元数据信息。	',
                  'description' => 'Kubernetes版本元数据信息。	',
                  'type' => 'object',
                ),
                'runtimes' => 
                array (
                  'title' => '容器运行时详情。	',
                  'description' => '容器运行时配置。	',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '容器运行时配置。	',
                    '$ref' => '#/components/schemas/runtime',
                  ),
                ),
                'version' => 
                array (
                  'title' => 'Kubernetes版本。	',
                  'description' => 'ACK发布的Kubernetes版本。更多版本信息，请参见[Kubernetes版本发布概览](~~185269~~)。',
                  'type' => 'string',
                  'example' => '1.26.3-aliyun.1',
                ),
                'release_date' => 
                array (
                  'title' => 'Kubernetes版本发布时间。',
                  'description' => 'Kubernetes版本发布时间。',
                  'type' => 'string',
                  'example' => '2023-04-30T00:00:00Z',
                ),
                'expiration_date' => 
                array (
                  'title' => 'Kubernetes版本过期时间。	',
                  'description' => 'Kubernetes版本过期时间。	',
                  'type' => 'string',
                  'example' => '2025-04-30T00:00:00Z',
                ),
                'creatable' => 
                array (
                  'title' => '该版本是否可创建。',
                  'description' => 'Kubernetes版本是否可创建。',
                  'type' => 'boolean',
                  'example' => 'true',
                ),
                'upgradable_versions' => 
                array (
                  'title' => '可升级的版本列表。',
                  'description' => '可升级的版本列表。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'title' => '可升级的版本。',
                    'description' => '可升级的版本。',
                    'type' => 'string',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"[\\n  {\\n    \\"capabilities\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"images\\": [\\n      {\\n        \\"image_id\\": \\"centos_7_9_x64_20G_alibase_20221129.vhd\\",\\n        \\"image_name\\": \\"CentOS 7.9\\",\\n        \\"platform\\": \\"CentOS\\",\\n        \\"os_version\\": \\"7.9\\",\\n        \\"image_type\\": \\"CentOS\\",\\n        \\"os_type\\": \\"Linux\\",\\n        \\"image_category\\": \\"system\\",\\n        \\"architecture\\": \\"x86_64\\"\\n      }\\n    ],\\n    \\"meta_data\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"runtimes\\": [\\n      {\\n        \\"name\\": \\"docker\\",\\n        \\"version\\": \\"19.03.5\\"\\n      }\\n    ],\\n    \\"version\\": \\"1.26.3-aliyun.1\\",\\n    \\"release_date\\": \\"2023-04-30T00:00:00Z\\",\\n    \\"expiration_date\\": \\"2025-04-30T00:00:00Z\\",\\n    \\"creatable\\": true,\\n    \\"upgradable_versions\\": [\\n      \\"\\"\\n    ]\\n  }\\n]","errorExample":""},{"type":"xml","example":"<DescribeKubernetesVersionMetadataResponse>\\n    <images>\\n        <image_id>centos_7_9_x64_20G_alibase_20221129.vhd</image_id>\\n        <image_name>CentOS 7.9</image_name>\\n        <platform>CentOS</platform>\\n        <os_version>7.9</os_version>\\n        <image_type>CentOS</image_type>\\n        <os_type>Linux</os_type>\\n        <image_category/>\\n        <architecture>x86_64</architecture>\\n    </images>\\n    <runtimes>\\n        <name>containerd</name>\\n        <version>1.6.20</version>\\n    </runtimes>\\n    <version>1.26.3-aliyun.1</version>\\n    <release_date>2023-04-30T00:00:00Z</release_date>\\n    <expiration_date>2025-04-30T00:00:00Z</expiration_date>\\n    <creatable>true</creatable>\\n</DescribeKubernetesVersionMetadataResponse>","errorExample":""}]',
      'title' => '查询Kubernetes版本的详细详情',
    ),
    'DescribeUserClusterNamespaces' => 
    array (
      'summary' => '在ACK集群中，可以通过Kubernetes命名空间对集群访问者进行权限和资源的逻辑隔离，只被授予指定命名空间下RBAC权限的用户将无法访问集群其他命名空间内的资源。您可以调用DescribeUserClusterNamespaces接口，查看当前RAM用户或角色在指定的ACK集群内被授予了哪些命名空间内资源的RBAC访问权限。',
      'path' => '/api/v2/k8s/{ClusterId}/namespaces',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '指定的集群ID',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c5b5e80b0b64a4bf6939d2d8fbbc5****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '当前用户有权限访问的命名空间列表',
            'description' => 'RAM用户有权限访问的命名空间名称列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'RAM用户可见的集群命名空间名称列表。',
              'type' => 'string',
              'example' => '[   "default",   "kube-node-lease",   "kube-public",   "kube-system" ]',
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"[\\n  \\"[   \\\\\\"default\\\\\\",   \\\\\\"kube-node-lease\\\\\\",   \\\\\\"kube-public\\\\\\",   \\\\\\"kube-system\\\\\\" ]\\"\\n]","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询RAM用户或角色可见的集群命名空间',
    ),
    'DescribeClusterLogs' => 
    array (
      'summary' => '您可以调用DescribeClusterLogs接口检索集群的日志数据，以便在出现集群问题时进行根因分析和溯源。',
      'path' => '/clusters/{ClusterId}/logs',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c106f377e16f34eb1808d6b9362c9****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回数据体',
            'description' => '日志列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '日志详情。',
              'type' => 'object',
              'properties' => 
              array (
                'ID' => 
                array (
                  'title' => '日志ID。',
                  'description' => '日志ID。',
                  'type' => 'integer',
                  'format' => 'int64',
                  'example' => '590749245',
                ),
                'cluster_id' => 
                array (
                  'title' => '集群ID。',
                  'description' => '集群ID。',
                  'type' => 'string',
                  'example' => 'c23421cfa74454bc8b37163fd19af***',
                ),
                'cluster_log' => 
                array (
                  'title' => '日志内容。',
                  'description' => '日志内容。',
                  'type' => 'string',
                  'example' => 'start to update cluster status to CREATE_COMPLETE',
                ),
                'created' => 
                array (
                  'title' => '日志创建时间。',
                  'description' => '日志产生时间。',
                  'type' => 'string',
                  'example' => '2020-09-11T10:11:51+08:00',
                ),
                'updated' => 
                array (
                  'title' => '日志更新时间。',
                  'description' => '日志更新时间。',
                  'type' => 'string',
                  'example' => '2020-09-11T10:11:51+08:00',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"[\\n  {\\n    \\"ID\\": 590749245,\\n    \\"cluster_id\\": \\"c23421cfa74454bc8b37163fd19af***\\",\\n    \\"cluster_log\\": \\"start to update cluster status to CREATE_COMPLETE\\",\\n    \\"created\\": \\"2020-09-11T10:11:51+08:00\\",\\n    \\"updated\\": \\"2020-09-11T10:11:51+08:00\\"\\n  }\\n]","errorExample":""},{"type":"xml","example":"<DescribeClusterLogsResponse>\\n    <ID>590749245</ID>\\n    <cluster_id>c23421cfa74454bc8b37163fd19af***</cluster_id>\\n    <cluster_log>start to update cluster status to CREATE_COMPLETE</cluster_log>\\n    <created>2020-09-11T10:11:51+08:00</created>\\n    <updated>2020-09-11T10:11:51+08:00</updated>\\n</DescribeClusterLogsResponse>","errorExample":""}]',
      'title' => '查询集群日志',
    ),
    'RunClusterCheck' => 
    array (
      'summary' => '容器智能运维平台提供丰富的Kubernetes集群检查能力，包括集群升级检查、集群迁移检查、组件安装检查、组件升级检查、节点池检查等。在正式执行升级、迁移或安装操作前，容器智能运维平台会自动触发检查，仅当检查通过后您才可以执行变更操作。您也可以手动调用RunClusterCheck接口执行集群检查。建议您定期对集群进行检查和维护，预防集群安全风险。',
      'path' => '/clusters/{cluster_id}/checks',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '197074',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcskEUXDVA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'cluster_id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'ce0da5a1d627e4e9e9f96cae8ad07****',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'type' => 
              array (
                'title' => '检查类型。',
                'description' => '检查类型。',
                'type' => 'string',
                'required' => true,
                'example' => 'NodePoolUpgrade',
              ),
              'target' => 
              array (
                'title' => '检查的对象。',
                'description' => '检查目标。',
                'type' => 'string',
                'required' => false,
                'example' => 'np1f6779297c4444a3a1cdd29be8e5****',
              ),
              'options' => 
              array (
                'title' => '检查选项。',
                'description' => '检查选项。',
                'type' => 'object',
                'required' => false,
                'additionalProperties' => 
                array (
                  'type' => 'string',
                  'description' => '检查参数。',
                  'example' => 'next_version',
                ),
              ),
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'request_id' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'F04DF81D-5C12-1524-B36A-86E02526****',
              ),
              'check_id' => 
              array (
                'title' => '检查ID。',
                'description' => '检查ID。',
                'type' => 'string',
                'example' => '1697100584236600453-ce0da5a1d627e4e9e9f96cae8ad07****-clustercheck-lboto',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"request_id\\": \\"F04DF81D-5C12-1524-B36A-86E02526****\\",\\n  \\"check_id\\": \\"1697100584236600453-ce0da5a1d627e4e9e9f96cae8ad07****-clustercheck-lboto\\"\\n}","type":"json"}]',
      'title' => '发起集群检查',
    ),
    'ListClusterChecks' => 
    array (
      'summary' => '容器智能运维平台提供丰富的Kubernetes集群检查能力，包括集群升级检查、集群迁移检查、组件安装检查、组件升级检查、节点池检查等。您可以调用ListClusterChecks接口，根据集群ID查询集群检查的列表和检查相关信息，例如检查类型、状态、创建和完成时间等。',
      'path' => '/clusters/{cluster_id}/checks',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '197075',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcskEUXDVA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'cluster_id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'ce0da5a1d627e4e9e9f96cae8ad07****',
          ),
        ),
        1 => 
        array (
          'name' => 'type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '检查类型。',
            'description' => '检查类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'ClusterUpgrade',
          ),
        ),
        2 => 
        array (
          'name' => 'target',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '筛选指定的检查对象。',
            'description' => '筛选指定的检查对象。',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'checks' => 
              array (
                'title' => '检查列表。',
                'description' => '检查列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '单次检查信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'check_id' => 
                    array (
                      'title' => '检查ID。',
                      'description' => '检查ID。',
                      'type' => 'string',
                      'example' => '1697100584236600453-ce0da5a1d627e4e9e9f96cae8ad07****-clustercheck-lboto',
                    ),
                    'type' => 
                    array (
                      'title' => '检查类型。',
                      'description' => '检查类型。',
                      'type' => 'string',
                      'example' => 'ClusterUpgrade',
                    ),
                    'status' => 
                    array (
                      'title' => '检查状态。',
                      'description' => '检查状态。',
                      'type' => 'string',
                      'example' => 'Succeeded',
                    ),
                    'message' => 
                    array (
                      'title' => '检查状态信息。',
                      'description' => '检查状态信息。',
                      'type' => 'string',
                      'example' => 'task succeed',
                    ),
                    'created_at' => 
                    array (
                      'title' => '创建时间。',
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2023-10-16T08:31:20.292030178Z',
                    ),
                    'finished_at' => 
                    array (
                      'title' => '完成时间。',
                      'description' => '完成时间。',
                      'type' => 'string',
                      'example' => '2023-10-16T08:35:20.292030178Z',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"checks\\": [\\n    {\\n      \\"check_id\\": \\"1697100584236600453-ce0da5a1d627e4e9e9f96cae8ad07****-clustercheck-lboto\\",\\n      \\"type\\": \\"ClusterUpgrade\\",\\n      \\"status\\": \\"Succeeded\\",\\n      \\"message\\": \\"task succeed\\",\\n      \\"created_at\\": \\"2023-10-16T08:31:20.292030178Z\\",\\n      \\"finished_at\\": \\"2023-10-16T08:35:20.292030178Z\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询所有集群检查的列表',
    ),
    'GetClusterCheck' => 
    array (
      'summary' => '容器智能运维平台提供丰富的Kubernetes集群检查能力，包括集群升级检查、集群迁移检查、组件安装检查、组件升级检查、节点池检查等。您可以调用GetClusterCheck接口，根据集群ID和检查任务ID查看指定检查任务的相关信息，例如检查状态、具体检查项、检查创建和完成时间等。',
      'path' => '/clusters/{cluster_id}/checks/{check_id}',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'cluster_id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ce0da5a1d627e4e9e9f96cae8ad07****',
          ),
        ),
        1 => 
        array (
          'name' => 'check_id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '检查ID。',
            'description' => '检查ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1697100584236600453-ce0da5a1d627e4e9e9f96cae8ad07****-clustercheck-lboto',
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
              'check_id' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '1697100584236600453-ce0da5a1d627e4e9e9f96cae8ad07****-clustercheck-lboto',
              ),
              'type' => 
              array (
                'title' => '检查类型。',
                'description' => '检查类型。',
                'type' => 'string',
                'example' => 'ClusterUpgrade',
              ),
              'status' => 
              array (
                'title' => '检查状态。',
                'description' => '检查状态。',
                'type' => 'string',
                'example' => 'Succeeded',
              ),
              'message' => 
              array (
                'title' => '检查状态信息。',
                'description' => '检查状态信息。',
                'type' => 'string',
                'example' => 'task succeed',
              ),
              'created_at' => 
              array (
                'title' => '创建时间。',
                'description' => '创建时间。',
                'type' => 'string',
                'example' => '2023-10-16T08:31:20.292030178Z',
              ),
              'finished_at' => 
              array (
                'title' => '完成时间。',
                'description' => '完成时间。',
                'type' => 'string',
                'example' => '2023-10-16T08:35:20.292030178Z',
              ),
              'check_items' => 
              array (
                'title' => '检查项。',
                'description' => '检查项。',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'object',
                    'example' => 'Name',
                    'description' => '检查项属性。',
                  ),
                  'description' => '检查项。',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"check_id\\": \\"1697100584236600453-ce0da5a1d627e4e9e9f96cae8ad07****-clustercheck-lboto\\",\\n  \\"type\\": \\"ClusterUpgrade\\",\\n  \\"status\\": \\"Succeeded\\",\\n  \\"message\\": \\"task succeed\\",\\n  \\"created_at\\": \\"2023-10-16T08:31:20.292030178Z\\",\\n  \\"finished_at\\": \\"2023-10-16T08:35:20.292030178Z\\",\\n  \\"check_items\\": {\\n    \\"key\\": [\\n      {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询指定集群检查的信息',
    ),
    'ModifyCluster' => 
    array (
      'summary' => '创建ACK集群后，如需修改集群的配置，您可以调用ModifyCluster接口来完成。',
      'path' => '/api/v2/clusters/{ClusterId}',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '384',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcskEUXDVA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。

',
            'type' => 'string',
            'required' => true,
            'example' => 'cb95aa626a47740afbf6aa099b65****',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求体参数',
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'api_server_eip' => 
              array (
                'title' => '集群是否绑定EIP，用于公网访问API Server。 true | false',
                'description' => '集群是否绑定EIP，用于公网访问API Server。取值：

- `true`：集群绑定EIP。
- `false`：集群不绑定EIP。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'api_server_eip_id' => 
              array (
                'title' => '集群API Server 公网连接端点。',
                'description' => '集群API Server绑定的EIP实例ID，仅当`api_server_eip`取值为`true`时生效。',
                'type' => 'string',
                'required' => false,
                'example' => 'eip-wz9fnasl6dsfhmvci****',
              ),
              'deletion_protection' => 
              array (
                'title' => '集群是否开启删除保护。默认值false。',
                'description' => '集群删除保护，防止通过控制台或API误删除集群。取值：

- `true`：启用集群删除保护，将不能通过控制台或API删除集群。
- `false`：不启用集群删除保护，则能通过控制台或API删除集群。

默认值：`false`。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'instance_deletion_protection' => 
              array (
                'title' => '实例删除保护，防止通过控制台或API误删除释放节点。',
                'description' => '实例删除保护，防止通过控制台或API误删除释放节点。取值：

- `true`: 不能通过控制台或API误删除集群。
- `false`：能通过控制台或API误删除集群。

默认值：`false`。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'ingress_domain_rebinding' => 
              array (
                'title' => '域名是否重新绑定到Ingress的SLB地址。',
                'description' => '重新绑定集群测试域名。取值：

- `true`：重新绑定集群测试域名。
- `false`：不重新绑定集群测试域名。

默认值：`false`。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'ingress_loadbalancer_id' => 
              array (
                'title' => '集群的Ingress SLB的ID。',
                'description' => '被修改集群的SLB实例ID。',
                'type' => 'string',
                'required' => false,
                'example' => 'lb-wz97kes8tnndkpodw****',
              ),
              'resource_group_id' => 
              array (
                'title' => '集群资源组ID。',
                'description' => '集群资源组ID。',
                'type' => 'string',
                'required' => false,
                'example' => 'rg-acfmyvw3wjm****',
              ),
              'maintenance_window' => 
              array (
                'description' => '集群维护窗口，该功能只在Pro托管版集群中生效。',
                'required' => false,
                '$ref' => '#/components/schemas/maintenance_window',
              ),
              'enable_rrsa' => 
              array (
                'title' => '启用或禁用 RRSA 功能（只有托管版集群支持配置该参数）。true: 启用，false: 禁用',
                'description' => '启用或禁用RRSA功能（只有托管版集群支持配置该参数）。取值：

- `true`：启用。
- `false`：禁用。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'access_control_list' => 
              array (
                'description' => '注册集群 API Server SLB 访问控制列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '注册集群 API Server SLB 访问控制列表。

**注意**：不允许填写0.0.0.0/0网段。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '192.168.1.0/24',
                ),
                'required' => false,
              ),
              'cluster_name' => 
              array (
                'title' => '集群名称。',
                'description' => '集群名称。

命名规则：由数字、汉字、英文字符或短划线（-）组成，长度范围1~63个字符，且不能以短划线（-）开头。',
                'type' => 'string',
                'required' => false,
                'example' => 'cluster-new-name',
              ),
              'system_events_logging' => 
              array (
                'title' => '系统事件存储配置。',
                'description' => '系统事件存储配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'enabled' => 
                  array (
                    'title' => '是否开启系统事件存储。',
                    'description' => '是否开启系统事件存储。',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => 'true',
                  ),
                  'logging_project' => 
                  array (
                    'title' => '系统事件存储的LogProject名称。',
                    'description' => '系统事件存储的LogProject名称。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'k8s-log-cb95aa626a47740afbf6aa099b65****',
                  ),
                ),
                'required' => false,
              ),
              'operation_policy' => 
              array (
                'title' => '集群自动运维策略。',
                'description' => '集群自动运维策略。',
                'type' => 'object',
                'properties' => 
                array (
                  'cluster_auto_upgrade' => 
                  array (
                    'title' => '集群自动升级。',
                    'description' => '集群自动升级。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'enabled' => 
                      array (
                        'title' => '是否开启集群自动升级。',
                        'description' => '是否开启集群自动升级。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                      ),
                      'channel' => 
                      array (
                        'title' => '集群自动升级频次。可取值：
- patch
- stable
- rapid',
                        'description' => '集群自动升级频次。可取值：
- patch
- stable
- rapid',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'patch',
                      ),
                    ),
                    'required' => false,
                  ),
                ),
                'required' => false,
              ),
              'api_server_custom_cert_sans' => 
              array (
                'title' => '自定义ApiServer证书SAN（只有托管版集群支持配置该参数）。',
                'description' => '自定义 API Server 证书 SAN（只有托管版集群支持配置该参数）。',
                'type' => 'object',
                'properties' => 
                array (
                  'action' => 
                  array (
                    'title' => '覆盖或追加SAN配置。overwrite: 覆盖，append: 追加',
                    'description' => '覆盖或追加 SAN 配置。取值：
- overwrite: 覆盖
- append: 追加',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'append',
                    'enum' => 
                    array (
                      0 => 'append',
                      1 => 'overwrite',
                    ),
                  ),
                  'subject_alternative_names' => 
                  array (
                    'title' => 'SAN列表',
                    'description' => 'SAN 列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'title' => 'SAN',
                      'description' => 'SAN。',
                      'type' => 'string',
                      'required' => false,
                      'example' => '192.168.0.119',
                    ),
                    'required' => false,
                  ),
                ),
                'required' => false,
              ),
            ),
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
            'title' => '返回数据体。',
            'description' => '返回数据体。',
            'type' => 'object',
            'properties' => 
            array (
              'cluster_id' => 
              array (
                'title' => '集群ID。',
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'cb95aa626a47740afbf6aa09****',
              ),
              'request_id' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '687C5BAA-D103-4993-884B-C35E4314****',
              ),
              'task_id' => 
              array (
                'title' => '任务ID。',
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'T-5a54309c80282e39ea00****',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"cluster_id\\": \\"cb95aa626a47740afbf6aa09****\\",\\n  \\"request_id\\": \\"687C5BAA-D103-4993-884B-C35E4314****\\",\\n  \\"task_id\\": \\"T-5a54309c80282e39ea00****\\"\\n}","errorExample":""},{"type":"xml","example":"<cluster_id>cb95aa626a47740afbf6aa09****</cluster_id>\\n<request_id>687C5BAA-D103-4993-884B-C35E4314****</request_id>\\n<task_id>T-5a54309c80282e39ea00****</task_id>","errorExample":""}]',
      'title' => '修改集群配置',
    ),
    'MigrateCluster' => 
    array (
      'summary' => 'ACK集群Pro版是在ACK集群基础版的基础上发展而来的集群类型，继承了原托管版集群的所有优势，例如控制面托管、控制面高可用等。同时，ACK集群Pro版进一步增强了集群的可靠性、安全性和调度性，并且支持赔付标准的SLA，适合生产环境下有着大规模业务，对稳定性和安全性有高要求的企业客户。建议您将ACK集群基础版迁移至ACK集群Pro版。',
      'path' => '/clusters/{cluster_id}/migrate',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'cluster_id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'c21e0591548ba4c10bdb535d6572b****',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求体。',
            'description' => '请求体参数',
            'type' => 'object',
            'properties' => 
            array (
              'oss_bucket_name' => 
              array (
                'title' => 'bucket名称。',
                'description' => 'Bucket名称。',
                'type' => 'string',
                'required' => false,
                'example' => 'bucket-****',
              ),
              'oss_bucket_endpoint' => 
              array (
                'title' => 'bucket访问端点。',
                'description' => 'Bucket访问端点。',
                'type' => 'string',
                'required' => false,
                'example' => '*******.oss-cn-hangzhou.aliyuncs.com',
              ),
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
            'title' => '响应体',
            'description' => '响应体',
            'type' => 'object',
            'properties' => 
            array (
              'cluster_id' => 
              array (
                'title' => '集群ID。',
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'c21e0591548ba4c10bdb535d6572b',
              ),
              'request_id' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '687C5BAA-D103-4993-884B-C35E4314A1E1',
              ),
              'task_id' => 
              array (
                'title' => '任务ID。',
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'T-62ccd14aacb8db06ca00****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"cluster_id\\": \\"c21e0591548ba4c10bdb535d6572b\\",\\n  \\"request_id\\": \\"687C5BAA-D103-4993-884B-C35E4314A1E1\\",\\n  \\"task_id\\": \\"T-62ccd14aacb8db06ca00****\\"\\n}","errorExample":""},{"type":"xml","example":"<MigrateClusterResponse>\\n    <cluster_id>c8155823d057948c69a****</cluster_id>\\n    <request_id>20758A-585D-4A41-A9B2-28DA8F4F534F</request_id>\\n    <task_id>T-62ccd14aacb8db06ca00****</task_id>\\n</MigrateClusterResponse>","errorExample":""}]',
      'title' => '迁移基础版集群至Pro版',
    ),
    'DescribeClusterUserKubeconfig' => 
    array (
      'summary' => 'KubeConfig用于在客户端配置ACK集群的访问凭据，包含访问目标集群的身份和认证数据等信息。使用kubectl管理集群时，您需要通过KubeConfig来连接。请妥善管理集群的KubeConfig凭据，并在无需使用凭据时及时完成吊销，避免KubeConfig泄露带来的数据泄露等安全风险。',
      'path' => '/k8s/{ClusterId}/user_config',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c5b5e80b0b64a4bf6939d2d8fbbc5****',
          ),
        ),
        1 => 
        array (
          'name' => 'PrivateIpAddress',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'ApiServer是否为内网地址。',
            'description' => '是否获取内网连接配置。取值：
- `true`：仅获取内网连接凭据。
- `false`：仅获取公网连接凭据。 

默认值：`false`。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'TemporaryDurationMinutes',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '临时kubeconfig有效期，单位：分钟。  最小值：15（15分钟）  最大值：4320（3天）。',
            'description' => '临时kubeconfig有效期，单位：分钟。取值范围：15（15分钟）～4320（3天）。
>当不设置该参数时，将由系统自动确定一个更长的有效期，具体过期时间通过返回的`expiration`字段的值确定。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '15',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回数据体。',
            'description' => '返回数据体。',
            'type' => 'object',
            'properties' => 
            array (
              'config' => 
              array (
                'title' => 'kubeconfig内容。',
                'description' => '集群访问配置。关于如何查看访问集群配置信息，请参见[配置集群凭据](~~86494~~)。',
                'type' => 'string',
                'example' => 'apiVersion: v1****',
              ),
              'expiration' => 
              array (
                'title' => 'kubeconfig过期时间。格式：RFC3339 格式的 UTC 时间。',
                'description' => 'kubeconfig的过期时间。格式：RFC3339格式的UTC时间。',
                'type' => 'string',
                'example' => '2024-03-10T09:56:17Z',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"config\\": \\"apiVersion: v1****\\",\\n  \\"expiration\\": \\"2024-03-10T09:56:17Z\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeClusterUserKubeconfigResponse>\\n    <config>apiVersion: v1****</config>\\n    <expiration>2024-03-10T09:56:17Z</expiration>\\n</DescribeClusterUserKubeconfigResponse>","errorExample":""}]',
      'title' => '查询集群KubeConfig',
      'description' => '> KubeConfig签发证书的默认有效期为3年。在临近过期两个月内，您可以通过容器服务管理控制台或获取集群KubeConfig接口获取轮转后刷新的KubeConfig，新KubeConfig证书的有效期仍为3年，老的KubeConfig凭据在证书过期前仍然有效，请您根据控制台显示或接口返回的KubeConfig过期时间及时获取轮转凭据。',
    ),
    'DescribeSubaccountK8sClusterUserConfig' => 
    array (
      'summary' => '作为集群权限管理者，您可以使用阿里云账号（主账号）为账号内指定RAM用户或RAM角色签发包含其身份信息的KubeConfig凭证，用于连接ACK集群。您可以调用DescribeSubaccountK8sClusterUserConfig接口，签发或获取账号内任意RAM用户或角色的KubeConfig。',
      'path' => '/k8s/{ClusterId}/users/{Uid}/user_config',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c5b5e80b0b64a4bf6939d2d8f****',
          ),
        ),
        1 => 
        array (
          'name' => 'Uid',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '阿里云账号内指定的RAM用户或RAM角色ID。',
            'type' => 'string',
            'required' => true,
            'example' => '26562443851650****',
          ),
        ),
        2 => 
        array (
          'name' => 'PrivateIpAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否获取内网连接配置。取值：
- `true`：仅获取内网连接的KubeConfig凭证。
- `false`：仅获取公网连接的KubeConfig凭证。

默认值：`false`。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'TemporaryDurationMinutes',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '临时KubeConfig有效期，单位：分钟。

取值范围：15分钟～4320分钟（3天）。
> 当不设置该参数时，将由系统自动确定一个更长的有效期，具体过期时间通过返回的expiration字段的值确定。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '15',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'config' => 
              array (
                'description' => '集群访问配置。关于如何查看访问集群配置信息，请参见[配置集群凭据](~~86494~~)。',
                'type' => 'string',
                'required' => true,
                'example' => 'apiVersion: v1****',
              ),
              'expiration' => 
              array (
                'description' => 'KubeConfig的过期时间。格式：RFC3339格式的UTC时间。',
                'type' => 'string',
                'example' => '2024-03-10T09:56:17Z',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"config\\": \\"apiVersion: v1****\\",\\n  \\"expiration\\": \\"2024-03-10T09:56:17Z\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeSubaccountK8sClusterUserConfigResponse>\\n    <config>apiVersion: v1****</config>\\n    <expiration>2024-03-10T09:56:17Z</expiration>\\n</DescribeSubaccountK8sClusterUserConfigResponse>","errorExample":""}]',
      'title' => '使用阿里云账号获取指定RAM用户或角色的集群KubeConfig',
      'description' => '> 该接口只允许被阿里云账号调用。',
    ),
    'UpdateK8sClusterUserConfigExpire' => 
    array (
      'summary' => 'ACK集群下发的KubeConfig过期时间默认为3年。您可以使用阿里云账号（主账号）自定义配置，调用UpdateK8sClusterUserConfigExpire接口指定RAM用户或角色在ACK集群中下发的KubeConfig的过期时间（1～876000小时）。',
      'path' => '/k8s/{ClusterId}/user_config/expire',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群id',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'c5b5e80b0b64a4bf6939d2d8fbbc5****',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'expire_hour' => 
              array (
                'title' => 'kubeconfig过期小时',
                'description' => '用户指定的过期时间。单位：小时。
>expire_hour过期小时数需大于0且小于等于 876000小时（100年）。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'docRequired' => true,
                'maximum' => '876000',
                'minimum' => '0',
                'example' => '720',
              ),
              'user' => 
              array (
                'title' => '指定用户id',
                'description' => '用户ID。',
                'type' => 'string',
                'required' => true,
                'docRequired' => false,
                'example' => 'RAM的UID',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '更新用户自定义配置的过期时间',
      'description' => '- 该接口只允许被主账号调用。
- 如果吊销了您在该集群上使用的KubeConfig凭证，设置在该集群KubeConfig自定义过期时间也会被重置，您需要调用该接口重新设置。',
    ),
    'ScanClusterVuls' => 
    array (
      'summary' => '您可以调用ScanClusterVuls接口扫描ACK集群中潜在的安全漏洞，包括容器工作负载漏洞、三方软件漏洞、CVE漏洞、WebCMS漏洞、Windows操作系统漏洞等。建议您定期扫描集群的安全漏洞，提高集群安全性。',
      'path' => '/clusters/{cluster_id}/vuls/scan',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'cluster_id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'c259f563386444ebb8d7****',
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
            'description' => '返回体。',
            'type' => 'object',
            'properties' => 
            array (
              'request_id' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '687C5BAA-D103-4993-884B-C35E4314A1E1',
              ),
              'task_id' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'T-xascadasd*****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"request_id\\": \\"687C5BAA-D103-4993-884B-C35E4314A1E1\\",\\n  \\"task_id\\": \\"T-xascadasd*****\\"\\n}","type":"json"}]',
      'title' => '扫描集群安全漏洞',
    ),
    'DescribeClusterVuls' => 
    array (
      'summary' => '您可以根据集群ID调用DescribeClusterVuls接口查看集群的安全漏洞详细信息，包括漏洞名称、漏洞类型、漏洞等级等。建议您定期扫描集群的安全漏洞，提高集群安全性。',
      'path' => '/clusters/{cluster_id}/vuls',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'cluster_id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'c5cdf7e3938bc4f8eb0e44b21a80f****',
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
            'title' => 'Schema of Response',
            'description' => '返回体',
            'type' => 'object',
            'properties' => 
            array (
              'vul_records' => 
              array (
                'description' => '漏洞列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '漏洞信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'nodepool_name' => 
                    array (
                      'description' => '节点池名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'nodepool_id' => 
                    array (
                      'description' => '节点池ID。',
                      'type' => 'string',
                      'example' => 'np0156da1082b54fa987e32618dd45f5d3',
                    ),
                    'node_count' => 
                    array (
                      'description' => '具有该漏洞的节点数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'vul_name' => 
                    array (
                      'description' => '漏洞名称。',
                      'type' => 'string',
                      'example' => 'oval:com.redhat.rhsa:def:xxxxxxx',
                    ),
                    'vul_alias_name' => 
                    array (
                      'description' => '漏洞别名。',
                      'type' => 'string',
                      'example' => 'CVE-2022-xxxx:rsync 安全漏洞',
                    ),
                    'vul_type' => 
                    array (
                      'description' => '漏洞类型。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'app' => '应用漏洞',
                        'sca' => '应用漏洞（软件成分分析）',
                        'cve' => 'Linux漏洞',
                        'cms' => 'WebCMS漏洞',
                        'sys' => 'Windows漏洞',
                        'emg' => '应急漏洞',
                      ),
                      'example' => 'cve',
                    ),
                    'necessity' => 
                    array (
                      'description' => '漏洞等级。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'nntf' => '低',
                        'later' => '中',
                        'asap' => '高',
                      ),
                      'example' => 'asap',
                    ),
                    'cve_list' => 
                    array (
                      'description' => 'CVE列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'CVE信息。',
                        'type' => 'string',
                        'example' => 'CVE-2022-xxxxx',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"vul_records\\": [\\n    {\\n      \\"nodepool_name\\": \\"test\\",\\n      \\"nodepool_id\\": \\"np0156da1082b54fa987e32618dd45f5d3\\",\\n      \\"node_count\\": 1,\\n      \\"vul_name\\": \\"oval:com.redhat.rhsa:def:xxxxxxx\\",\\n      \\"vul_alias_name\\": \\"CVE-2022-xxxx:rsync 安全漏洞\\",\\n      \\"vul_type\\": \\"cve\\",\\n      \\"necessity\\": \\"asap\\",\\n      \\"cve_list\\": [\\n        \\"CVE-2022-xxxxx\\"\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询集群安全漏洞信息',
    ),
    'CreateClusterNodePool' => 
    array (
      'summary' => '通过节点池，您可以更方便地对节点进行分组管理，例如节点运维、节点配置、开启节点自动弹性伸缩、批量管理、指定调度等。您可以调用CreateClusterNodePool为集群创建节点池。推荐您使用托管节点池，以帮助您自动完成部分节点运维操作，例如高危CVE漏洞自动修复、部分故障修复等，从而降低您的节点运维负担。',
      'path' => '/clusters/{ClusterId}/nodepools',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '553',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcsk4HGX7D',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c61da77e8bfbc4c4c999af2b51b65****',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求体参数。',
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'nodepool_info' => 
              array (
                'title' => '节点池配置',
                'description' => '节点池配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'name' => 
                  array (
                    'title' => '节点池名称',
                    'description' => '节点池名称。',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'nodepool-test',
                  ),
                  'type' => 
                  array (
                    'title' => '节点池类型，对于边缘节点池来说，类型为"edge"',
                    'description' => '节点池类型，取值范围：

- `ess`：普通节点池（包含托管功能和自动弹性伸缩功能）。
- `edge`：边缘节点池。
- `lingjun`：灵骏节点池。',
                    'type' => 'string',
                    'required' => false,
                    'enumValueTitles' => 
                    array (
                      'lingjun' => '灵骏节点池',
                      'edge' => '边缘节点池',
                      'ess' => '普通节点池',
                    ),
                    'example' => 'ess',
                  ),
                  'resource_group_id' => 
                  array (
                    'title' => '资源组ID。',
                    'description' => '节点池的资源组ID，节点池弹出的实例将属于该资源组内。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'rg-acfmyvw3wjmb****',
                  ),
                ),
                'required' => false,
              ),
              'auto_scaling' => 
              array (
                'title' => '自动伸缩节点池配置。',
                'description' => '自动弹性伸缩配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'enable' => 
                  array (
                    'title' => '是否开启自动伸缩。',
                    'description' => '是否启用自动伸缩。取值：
- `true`：开启节点池自动伸缩功能。
- `false`：不开启自动伸缩，当取值为false时，其他`auto_scaling`配置参数将不生效。

默认值：`false`。',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => 'false',
                  ),
                  'type' => 
                  array (
                    'title' => '扩容节点类型。',
                    'description' => '自动弹性伸缩实例类型。仅当`enable=true`生效，取值：

- `cpu`：普通实例型。

- `gpu`：GPU实例型。

- `gpushare`：GPU共享型。

- `spot`：抢占式实例型。

默认值：`cpu`。
><notice>节点池创建后，该字段不支持修改></notice>',
                    'type' => 'string',
                    'required' => false,
                    'enumValueTitles' => 
                    array (
                      'spot' => '抢占式实例型',
                      'cpu' => '普通实例型',
                      'gpushare' => 'GPU共享型',
                      'gpu' => 'GPU实例型',
                    ),
                    'example' => 'cpu',
                  ),
                  'max_instances' => 
                  array (
                    'title' => '最大实例数。',
                    'description' => '自动伸缩最大实例数，节点池的节点数将不会超过该值。仅当`enable=true`生效，取值范围[min_instances, 2000]，默认值为0。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => false,
                    'example' => '10',
                  ),
                  'min_instances' => 
                  array (
                    'title' => '最小实例数。',
                    'description' => '自动伸缩最小实例数，节点池的节点数将不会低于该值。仅当`enable=true`生效，取值范围[0, max_instances]，默认值为0。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => false,
                    'example' => '1',
                  ),
                  'is_bond_eip' => 
                  array (
                    'title' => '【该字段已废弃】
是否绑定EIP。',
                    'description' => '【该字段已废弃】

是否绑定EIP。取值：

- `true`：绑定EIP。

- `false`：不绑定EIP。

默认值：`false`。
<danger>该字段已废弃，请使用internet_charge_type和internet_max_bandwidth_out替代></danger>',
                    'type' => 'boolean',
                    'deprecated' => true,
                    'required' => false,
                    'example' => 'true',
                  ),
                  'eip_internet_charge_type' => 
                  array (
                    'title' => '【该字段已废弃】请使用internet_charge_type代替
EIP实例规格。',
                    'description' => '【该字段已废弃】

EIP计费类型。取值：
- `PayByBandwidth`：按固定带宽计费。
- `PayByTraffic`：按使用流量计费。

默认值：`PayByBandwidth`。
><danger>该字段已废弃，请使用internet_charge_type和internet_max_bandwidth_out替代></danger>',
                    'type' => 'string',
                    'deprecated' => true,
                    'required' => false,
                    'example' => 'PayByBandwidth',
                  ),
                  'eip_bandwidth' => 
                  array (
                    'title' => '【该字段已废弃】请使用internet_max_bandwidth_out代替
带宽峰值。',
                    'description' => '【该字段已废弃】

EIP带宽峰值。单位：Mbps。
><danger>该字段已废弃，请使用internet_charge_type和internet_max_bandwidth_out替代></danger>',
                    'type' => 'integer',
                    'format' => 'int64',
                    'deprecated' => true,
                    'required' => false,
                    'example' => '5',
                  ),
                ),
                'required' => false,
              ),
              'management' => 
              array (
                'title' => '托管节点池配置。',
                'description' => '节点池托管功能配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'enable' => 
                  array (
                    'title' => '是否启用托管节点池。',
                    'description' => '是否开启节点池的托管功能，取值：

- `true`：开启托管功能。

- `false`：不开启托管功能，只有当enable=true时，其他相关配置才生效。

默认值：false。',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => 'false',
                  ),
                  'auto_repair' => 
                  array (
                    'title' => '是否启用自动修复。',
                    'description' => '是否自动修复节点，仅当`enable=true`时生效。

- `true`：自动修复。

- `false`：不自动修复。

当`enable=true`时，默认值为`true`，当`enable=false`时，默认值为`false`',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => 'true',
                  ),
                  'auto_repair_policy' => 
                  array (
                    'title' => '自动修复节点策略。',
                    'description' => '自动修复节点策略。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'restart_node' => 
                      array (
                        'title' => '是否允许重启节点。',
                        'description' => '是否允许重启节点，仅当`auto_repair=true`时生效。取值：

- `true`：允许重启节点。
- `false`：不允许重启节点。

当`auto_repair=true`时，默认值为`true`，当`auto_repair=false`时，默认值为`false`',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true
',
                      ),
                    ),
                    'required' => false,
                  ),
                  'auto_vul_fix' => 
                  array (
                    'title' => '是否自动修复CVE。',
                    'description' => '是否自动修复CVE漏洞，仅当`enable=true`时生效。

- `true`：允许自动修复CVE。
- `false`：不允许自动修复CVE。

当`enable=true`时，默认值为`true`，当`enable=false`时，默认值为`false`',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => 'true',
                  ),
                  'auto_vul_fix_policy' => 
                  array (
                    'title' => '自动修复CVE策略。',
                    'description' => '自动修复CVE策略。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'restart_node' => 
                      array (
                        'title' => '是否允许重启节点。',
                        'description' => '是否允许重启节点，仅当`auto_vul_fix=true`时生效。取值：
- `true`：允许重启节点。
- `false`：不允许重启节点。
当`auto_vul_fix=true`时，默认值为`false`，当`auto_vul_fix=false`时，默认值为`false`',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                      ),
                      'vul_level' => 
                      array (
                        'title' => '允许自动修复的漏洞级别，以逗号分隔。',
                        'description' => '允许自动修复的漏洞级别，以英文逗号分隔，例如：`asap,later`。支持的漏洞级别：

- `asap`：高
- `later`：中
- `nntf`：低

当`auto_vul_fix=true`时，默认值为`asap`',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'asap,nntf',
                      ),
                    ),
                    'required' => false,
                  ),
                  'auto_upgrade' => 
                  array (
                    'title' => '是否自动升级。',
                    'description' => '是否自动升级节点，仅当`enable=true`时生效。
- `true`：启用自动升级。
- `false`：不启用自动升级。

当`enable=true`时，默认值为`true`，当`enable=false`时，默认值为`false`',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => 'true
',
                  ),
                  'auto_upgrade_policy' => 
                  array (
                    'title' => '自动升级策略。',
                    'description' => '自动升级节点策略。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'auto_upgrade_kubelet' => 
                      array (
                        'title' => '是否允许自动升级kubelet。',
                        'description' => '是否允许自动升级kubelet，仅当`auto_upgrade=true`时生效。取值：
- `true`：允许自动升级kubelet。
- `false`：不允许自动升级kubelet。

当`auto_upgrade=true`时，默认值为`true`，当`auto_upgrade=false`时，默认值为`false`',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true
',
                      ),
                      'auto_upgrade_runtime' => 
                      array (
                        'title' => '是否允许自动升级运行时。',
                        'description' => '是否允许自动升级运行时，仅当`auto_upgrade=true`时生效。取值：
- `true`：允许自动升级运行时。
- `false`：不允许自动升级运行时。

默认值为`false`',
                        'type' => 'boolean',
                        'required' => false,
                      ),
                      'auto_upgrade_os' => 
                      array (
                        'title' => '是否允许自动升级操作系统。',
                        'description' => '是否允许自动升级操作系统，仅当`auto_upgrade=true`时生效。取值：
- `true`：允许自动升级操作系统。
- `false`：不允许自动升级操作系统。


默认值为`false`',
                        'type' => 'boolean',
                        'required' => false,
                      ),
                    ),
                    'required' => false,
                  ),
                  'upgrade_config' => 
                  array (
                    'title' => '自动升级配置。',
                    'description' => '自动升级配置，仅当`enable=true`时生效。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'auto_upgrade' => 
                      array (
                        'title' => '【该字段已废弃】请使用上层的auto_upgrade替代
是否启用自动升级',
                        'description' => '是否启用自动升级，取值：

- `true`：启用自动升级。

- `false`：不启用自动升级。

><danger>该字段已废弃，请使用上层的auto_upgrade替代></danger>',
                        'type' => 'boolean',
                        'deprecated' => true,
                        'required' => false,
                        'example' => 'false',
                      ),
                      'surge' => 
                      array (
                        'title' => '额外节点数量。',
                        'description' => '额外节点数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '0',
                      ),
                      'surge_percentage' => 
                      array (
                        'title' => '额外节点比例。和surge二选一。',
                        'description' => '额外节点比例， 和`surge`二选一。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '0',
                      ),
                      'max_unavailable' => 
                      array (
                        'title' => '最大不可用节点数量。',
                        'description' => '最大不可用节点数量。
取值范围：\\[1,1000\\]

默认值：1。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                      ),
                    ),
                    'deprecated' => true,
                    'required' => false,
                  ),
                ),
                'required' => false,
              ),
              'scaling_group' => 
              array (
                'title' => '伸缩组配置',
                'description' => '节点池伸缩组配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'vswitch_ids' => 
                  array (
                    'title' => '虚拟交换机ID。',
                    'description' => '虚拟交换机ID列表，取值范围：\\[1,8\\]。

> 为保证高可用性，建议选择不同可用区的虚拟交换机。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '虚拟交换机ID。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'vsw-wz9mfnhmssud6eicu****',
                    ),
                    'required' => true,
                  ),
                  'instance_types' => 
                  array (
                    'title' => '实例规格。',
                    'description' => '节点池节点实例规格列表，节点池弹出节点时，将从指定的实例规格列表中，挑选出符合要求的实例规格弹出实例。支持的实例规格数量范围：[1,10]


> 为保证高可用性，建议选择多个实例规格。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '实例规格。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'ecs.d1ne.2xlarge',
                    ),
                    'required' => true,
                  ),
                  'instance_charge_type' => 
                  array (
                    'title' => '节点付费类型',
                    'description' => '节点池节点付费类型，取值：
 
- `PrePaid`：预付费实例。

- `PostPaid`：按量付费实例。

默认值：`PostPaid`。',
                    'type' => 'string',
                    'required' => true,
                    'enumValueTitles' => 
                    array (
                      'PostPaid' => '按量付费实例',
                      'PrePaid' => '预付费实例',
                    ),
                    'example' => 'PostPaid',
                  ),
                  'period' => 
                  array (
                    'title' => '节点包年包月时长。',
                    'description' => '节点池节点包年包月时长，仅当`instance_charge_type`取值为`PrePaid`时生效，且为必选值。

- 当`period_unit=Week`时，`period`取值范围：{ 1、2、3、4}。
- 当`period_unit=Month`时，`period` 取值范围：{1、2、3、4、5、6、7、8、9、12、24、36、48、60}。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => false,
                    'example' => '1',
                  ),
                  'period_unit' => 
                  array (
                    'title' => '节点包年包月周期。',
                    'description' => '节点池节点付费周期，仅当`instance_charge_type`取值为`PrePaid`时生效，且为必选值。

- `Month`：以月为计时单位。
- `Week`：以周为计算单位。

默认值`Month`',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Month',
                  ),
                  'auto_renew' => 
                  array (
                    'title' => '节点是否开启自动续费',
                    'description' => '节点池节点是否开启自动续费，当`instance_charge_type`取值为`PrePaid`时才生效。取值：

- `true`：自动续费。
- `false`：不自动续费。

默认值：`true`。',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => 'true',
                  ),
                  'auto_renew_period' => 
                  array (
                    'title' => '节点自动续费周期',
                    'description' => '节点池节点自动续费周期，当选择预付费和自动续费时才生效，且为必选值。当`PeriodUnit=Month`时，取值范围：{1, 2, 3, 6, 12}。

默认值：1
',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => false,
                    'example' => '1',
                  ),
                  'spot_strategy' => 
                  array (
                    'title' => '抢占式实例类型',
                    'description' => '抢占式实例类型。取值：

- `NoSpot`：非抢占式实例。

- `SpotWithPriceLimit`：设置抢占实例价格上限。

- `SpotAsPriceGo`：系统自动出价，跟随当前市场实际价格。

更多信息，请参见[抢占式实例](~~165053~~)。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'NoSpot',
                  ),
                  'spot_price_limit' => 
                  array (
                    'title' => '抢占实例价格上限配置。',
                    'description' => '当前单台抢占式实例规格市场价格区间配置。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '抢占实例市场价格区间配置，可为不同实例规格设置不同的价格区间。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'instance_type' => 
                        array (
                          'title' => '抢占实例规格。',
                          'description' => '抢占式实例规格。',
                          'type' => 'string',
                          'required' => false,
                          'example' => 'ecs.c6.large',
                        ),
                        'price_limit' => 
                        array (
                          'title' => '抢占实例单价。',
                          'description' => '单台实例上限价格。
',
                          'type' => 'string',
                          'required' => false,
                          'example' => '0.39',
                        ),
                      ),
                      'required' => false,
                    ),
                    'required' => false,
                  ),
                  'image_type' => 
                  array (
                    'title' => '操作系统发行版类型，推荐使用该字段指定节点操作系统。取值：CentOS、AliyunLinux、AliyunLinux Qboot、AliyunLinuxUEFI、AliyunLinux3、Windows、WindowsCore、AliyunLinux3Arm64、ContainerOS。',
                    'description' => '操作系统镜像类型，和`platform`参数二选一，取值范围：

- `AliyunLinux`：Alinux2镜像。
- `AliyunLinuxSecurity`：Alinux2镜像UEFI版。
- `AliyunLinux3`：Alinux3镜像。
- `AliyunLinux3Arm64`：Alinux3镜像ARM版。
- `AliyunLinux3Security`：Alinux3镜像UEFI版。
- `CentOS`：CentOS镜像。
- `Windows`：Windows镜像。
- `WindowsCore`：WindowsCore镜像。
- `ContainerOS`：容器优化镜像。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'AliyunLinux3',
                  ),
                  'image_id' => 
                  array (
                    'title' => '自定义镜像。',
                    'description' => '自定义镜像ID，默认使用系统提供的镜像。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'aliyun_2_1903_x64_20G_alibase_20200529.vhd',
                  ),
                  'system_disk_category' => 
                  array (
                    'title' => '节点系统盘类型。',
                    'description' => '节点系统盘类型，取值：
- `cloud`：普通云盘。
- `cloud_efficiency`：高效云盘。
- `cloud_ssd`：SSD云盘。
- `cloud_essd`：ESSD云盘。
- `cloud_auto`：ESSD AutoPL 云盘。
- `cloud_essd_entry`：ESSD Entry 云盘。

默认值：`cloud_efficiency`',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'cloud_efficiency',
                  ),
                  'system_disk_categories' => 
                  array (
                    'title' => '系统盘的多磁盘类型。当无法使用高优先级的磁盘类型时，自动尝试下一优先级的磁盘类型创建系统盘。取值范围：cloud：普通云盘。cloud_efficiency：高效云盘。cloud_ssd：SSD云盘。cloud_essd：ESSD云盘。',
                    'description' => '系统盘的多磁盘类型。当无法使用高优先级的磁盘类型时，自动尝试下一优先级的磁盘类型创建系统盘。取值范围：
- `cloud`：普通云盘。
- `cloud_efficiency`：高效云盘。
- `cloud_ssd`：SSD云盘。
- `cloud_essd`：ESSD云盘。
- `cloud_auto`：ESSD AutoPL云盘。
- `cloud_essd_entry`：ESSD Entry云盘。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'title' => '节点系统盘类型',
                      'description' => '节点系统盘类型。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'cloud_essd',
                      'enum' => 
                      array (
                      ),
                    ),
                    'required' => false,
                    'maxItems' => 10,
                  ),
                  'system_disk_size' => 
                  array (
                    'title' => '节点系统盘大小。',
                    'description' => '节点系统盘大小，单位：GiB。

取值范围：\\[20,20248\\]。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => false,
                    'example' => '120',
                  ),
                  'system_disk_performance_level' => 
                  array (
                    'title' => '节点系统盘磁盘性能，只针对ESSD磁盘生效',
                    'description' => '节点系统盘磁盘性能，只对ESSD磁盘生效。
- PL0：并发极限I/O性能中等，读写时延较为稳定。
- PL1：并发极限I/O性能中等，读写时延较为稳定。
- PL2：并发极限I/O性能较高，读写时延稳定。
- PL3：并发极限I/O性能极高，读写时延极稳定。
> 云盘支持以上四种磁盘性能。但实际创建时，此处可选的性能与您所选的ECS实例规格有关。更多信息，请参见[实例规格族](~~25378~~)。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'PL1',
                  ),
                  'system_disk_encrypted' => 
                  array (
                    'title' => '是否加密系统盘。取值范围：true：加密。false：不加密。',
                    'description' => '是否加密系统盘。取值范围：true：加密。false：不加密。',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => 'false',
                  ),
                  'system_disk_kms_key_id' => 
                  array (
                    'title' => '系统盘使用的KMS密钥ID。',
                    'description' => '系统盘使用的KMS密钥ID。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '0e478b7a-4262-4802-b8cb-00d3fb40****',
                  ),
                  'system_disk_encrypt_algorithm' => 
                  array (
                    'title' => '系统盘采用的加密算法。取值范围：aes-256。',
                    'description' => '系统盘采用的加密算法。取值范围：aes-256。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'aes-256',
                    'enum' => 
                    array (
                    ),
                  ),
                  'system_disk_bursting_enabled' => 
                  array (
                    'title' => '节点系统盘是否开启Burst（性能突发），磁盘类型为cloud_auto时配置。',
                    'description' => '节点系统盘是否开启Burst（性能突发）。 取值：
- true：是。
- false：否。

当`SystemDiskCategory`取值为`cloud_auto`时才支持设置该参数。更多信息，请参见[ESSD AutoPL云盘](~~368372~~)。',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => 'true',
                  ),
                  'system_disk_provisioned_iops' => 
                  array (
                    'title' => '节点系统盘预配置的读写IOPS，磁盘类型为cloud_auto时配置。',
                    'description' => '节点系统盘预配置的读写IOPS。可能值：0~min{50,000, 1000\\*容量-基准性能}。 基准性能=min{1,800+50\\*容量, 50000}。

当`SystemDiskCategory`取值为`cloud_auto`时才支持设置该参数。更多信息，请参见[ESSD AutoPL云盘](~~368372~~)。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => false,
                    'example' => '1000',
                  ),
                  'data_disks' => 
                  array (
                    'title' => '数据盘配置。',
                    'description' => '节点池节点数据盘配置。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '数据盘配置。',
                      'required' => false,
                      '$ref' => '#/components/schemas/data_disk',
                    ),
                    'required' => false,
                  ),
                  'security_group_ids' => 
                  array (
                    'title' => '多安全组ID',
                    'description' => '安全组ID列表，与`security_group_id`二选一，推荐使用`security_group_ids`，当同时指定`security_group_id`和`security_group_ids`将优先使用`security_group_ids`。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '安全组ID列表，与`security_group_id`二选一，推荐使用`security_group_ids`，当同时指定`security_group_id`和`security_group_ids`将优先使用`security_group_ids`。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'sg-wz9a8g2mt6x5llu0****',
                    ),
                    'required' => false,
                  ),
                  'key_pair' => 
                  array (
                    'title' => '密钥对名称，和login_password二选一。',
                    'description' => '免密登录密钥对名称，和`login_password`二选一。

>如果创建托管节点池，则只支持`key_pair`。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'np-key-name',
                  ),
                  'login_password' => 
                  array (
                    'title' => 'SSH登录密码。',
                    'description' => 'SSH登录密码，和`key_pair `二选一。密码规则为8~30个字符，且至少同时包含三项（大小写字母、数字和特殊符号）。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Hello1234',
                  ),
                  'login_as_non_root' => 
                  array (
                    'title' => '弹出的ECS实例是否使用以非root用户登陆。',
                    'description' => '弹出的ECS实例是否使用以非root用户登录。',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => 'true',
                  ),
                  'cis_enabled' => 
                  array (
                    'title' => '【已废弃】请使用security_hardening_os参数代替',
                    'description' => '【已废弃】请使用参数security_hardening_os替代。',
                    'type' => 'boolean',
                    'deprecated' => true,
                    'required' => false,
                    'example' => 'false',
                  ),
                  'soc_enabled' => 
                  array (
                    'title' => '是否开启等保加固，仅当系统镜像选择Alibaba Cloud Linux 2或Alibaba Cloud Linux 3时，可为节点开启等保加固。阿里云为Alibaba Cloud Linux 2和Alibaba Cloud Linux 3等保2.0三级版镜像提供等保合规的基线检查标准和扫描程序。',
                    'description' => '是否开启等保加固，仅当系统镜像选择Alibaba Cloud Linux 2或Alibaba Cloud Linux 3时，可为节点开启等保加固。阿里云为Alibaba Cloud Linux 2和Alibaba Cloud Linux 3等保2.0三级版镜像提供等保合规的基线检查标准和扫描程序。',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => 'false',
                  ),
                  'security_hardening_os' => 
                  array (
                    'title' => '是否开启阿里云OS安全加固。',
                    'description' => '阿里云OS安全加固。取值：

- `true`：开启阿里云OS安全加固。
- `false`：不开启阿里云OS安全加固。

默认值：`false`。',
                    'type' => 'boolean',
                    'required' => false,
                  ),
                  'internet_charge_type' => 
                  array (
                    'title' => '节点公网IP网络计费类型',
                    'description' => '公网IP收费类型。取值：

- PayByBandwidth：按固定带宽计费。
- PayByTraffic：按使用流量计费。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'PayByTraffic',
                  ),
                  'internet_max_bandwidth_out' => 
                  array (
                    'title' => '节点公网IP出带宽最大值，单位为Mbps（Mega bit per second），取值范围：1~100',
                    'description' => '节点公网IP出带宽最大值，单位为Mbps（Mega bit per second），取值范围：\\[1,100\\]',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => false,
                    'example' => '5',
                  ),
                  'tags' => 
                  array (
                    'title' => 'ECS标签',
                    'description' => '仅为ECS实例添加标签。

标签键不可以重复，最大长度为128个字符；标签键和标签值都不能以“aliyun”、“acs:”开头，或包含“https://”、“http://”。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '节点标签。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'key' => 
                        array (
                          'title' => 'key',
                          'description' => '标签的名称。',
                          'type' => 'string',
                          'required' => false,
                          'example' => 'node-k-1',
                        ),
                        'value' => 
                        array (
                          'title' => 'value',
                          'description' => '标签值。',
                          'type' => 'string',
                          'required' => false,
                          'example' => 'node-v-1',
                        ),
                      ),
                      'required' => false,
                    ),
                    'required' => false,
                  ),
                  'desired_size' => 
                  array (
                    'title' => '节点池期望节点数',
                    'description' => '节点池期望节点数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => false,
                    'example' => '0',
                  ),
                  'multi_az_policy' => 
                  array (
                    'title' => '多可用区伸缩组ECS实例扩缩容策略',
                    'description' => '多可用区伸缩组ECS实例扩缩容策略。取值：

- `PRIORITY`：根据您定义的虚拟交换机（VSwitchIds.N）扩缩容。当优先级较高的虚拟交换机所在可用区无法创建ECS实例时，自动使用下一优先级的虚拟交换机创建ECS实例。

- `COST_OPTIMIZED`：按vCPU单价从低到高进行尝试创建。当伸缩配置设置了抢占式计费方式的多实例规格时，优先创建对应抢占式实例。您可以继续通过`CompensateWithOnDemand`参数指定当抢占式实例由于库存等原因无法创建时，是否自动尝试以按量付费的方式创建。

  >`COST_OPTIMIZED`仅在伸缩配置设置了多实例规格或者选用了抢占式实例的情况下生效。

- `BALANCE`：在伸缩组指定的多可用区之间均匀分配ECS实例。如果由于库存不足等原因可用区之间变得不平衡，您可以通过API [RebalanceInstances](~~71516~~)平衡资源。

默认值：`PRIORITY`。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'COST_OPTIMIZED',
                  ),
                  'scaling_policy' => 
                  array (
                    'title' => '自动伸缩。',
                    'description' => '伸缩组模式，取值：

- `release`：标准模式，根据申请资源值的使用量，通过创建、释放ECS的方式进行伸缩。
- `recycle`：极速模式，通过创建、停机、启动的方式进行伸缩，提高再次伸缩的速度（停机时计算资源不收费，只收取存储费用，本地盘机型除外）。

默认值：`release`。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'release',
                  ),
                  'on_demand_base_capacity' => 
                  array (
                    'title' => '伸缩组所需要按量实例个数的最小值，取值范围：0~1000。当按量实例个数少于该值时，将优先创建按量实例。',
                    'description' => '伸缩组所需要按量实例个数的最小值，取值范围：\\[0,1000\\]。当按量实例个数少于该值时，将优先创建按量实例。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => false,
                    'example' => '0',
                  ),
                  'on_demand_percentage_above_base_capacity' => 
                  array (
                    'title' => '伸缩组满足最小按量实例数（OnDemandBaseCapacity）要求后，超出的实例中按量实例应占的比例，取值范围：0～100。',
                    'description' => '伸缩组满足最小按量实例数（`on_demand_base_capacity`）要求后，超出的实例中按量实例应占的比例。取值范围：\\[0,100\\]。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => false,
                    'example' => '20',
                  ),
                  'spot_instance_pools' => 
                  array (
                    'title' => '指定可用实例规格的个数，伸缩组将按成本最低的多个规格均衡创建抢占式实例。取值范围：1~10。',
                    'description' => '指定可用实例规格的个数，伸缩组将按成本最低的多个规格均衡创建抢占式实例。取值范围：\\[1,10\\]。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => false,
                    'example' => '5',
                  ),
                  'spot_instance_remedy' => 
                  array (
                    'title' => '是否开启补齐抢占式实例。开启后，当收到抢占式实例将被回收的系统消息时，伸缩组将尝试创建新的实例，替换掉将被回收的抢占式实例。',
                    'description' => '是否开启补齐抢占式实例。开启后，当收到抢占式实例将被回收的系统消息时，伸缩组将尝试创建新的实例，替换掉将被回收的抢占式实例。取值：

- `true`：开启补齐抢占式实例。
- `false`：不开启补齐抢占式实例。
',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => 'false',
                  ),
                  'compensate_with_on_demand' => 
                  array (
                    'title' => '当MultiAZPolicy取值为COST_OPTIMIZED时，如果因价格、库存等原因无法创建足够的抢占式实例，是否允许自动尝试创建按量实例满足ECS实例数量要求。取值范围：true：允许。false：不允许。默认值：true',
                    'description' => '当`multi_az_policy`取值为`COST_OPTIMIZED`时，如果因价格、库存等原因无法创建足够的抢占式实例，是否允许自动尝试创建按量实例满足ECS实例数量要求。取值：

- `true`：允许自动尝试创建按量实例满足ECS实例数量要求。
- `false`：不允许自动尝试创建按量实例满足ECS实例数量要求。',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => 'true',
                  ),
                  'deploymentset_id' => 
                  array (
                    'title' => '部署集ID。',
                    'description' => '部署集ID。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'ds-bp1d19mmbsv3jf6xxxxx',
                  ),
                  'rds_instances' => 
                  array (
                    'title' => 'RDS实例列表。',
                    'description' => 'RDS实例列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'RDS实例ID。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'rds-****',
                    ),
                    'required' => false,
                  ),
                  'private_pool_options' => 
                  array (
                    'title' => '私有池选项。',
                    'description' => '私有节点池配置。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'id' => 
                      array (
                        'title' => '私有池ID。即弹性保障服务ID或容量预定服务ID。',
                        'description' => '私有节点池ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'eap-bp67acfmxazb4****',
                      ),
                      'match_criteria' => 
                      array (
                        'title' => '实例启动的私有池容量选项。弹性保障服务或容量预定服务在生效后会生成私有池容量，供实例启动时选择。取值范围：  Open：开放模式。将自动匹配开放类型的私有池容量。如果没有符合条件的私有池容量，则使用公共池资源启动。该模式下无需设置PrivatePoolOptions.Id参数。  Target：指定模式。使用指定的私有池容量启动实例，如果该私有池容量不可用，则实例会启动失败。该模式下必须指定私有池ID，即PrivatePoolOptions.Id参数为必填项。  None：不使用模式。实例启动将不使用私有池容量。',
                        'description' => '私有节点池类型，实例启动的私有池容量选项。弹性保障服务或容量预定服务在生效后会生成私有池容量，供实例启动时选择。取值：
- `Open`：开放模式。将自动匹配开放类型的私有池容量。如果没有符合条件的私有池容量，则使用公共池资源启动。
- `Target`：指定模式。使用指定的私有池容量启动实例，如果该私有池容量不可用，则实例会启动失败。
- `None`：不使用模式。实例启动将不使用私有池容量。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Open',
                      ),
                    ),
                    'required' => false,
                  ),
                  'security_group_id' => 
                  array (
                    'title' => '【该字段已废弃】请使用security_group_ids替代
安全组ID。',
                    'description' => '节点池安全组ID，与`security_group_ids`二选一，推荐使用`security_group_ids`。',
                    'type' => 'string',
                    'deprecated' => true,
                    'required' => false,
                    'example' => 'sg-wz9a8g2mt6x5llu0****',
                  ),
                  'platform' => 
                  array (
                    'title' => '【该字段已废弃】请使用image_type替代
操作系统发行版，和image_type二选一',
                    'description' => '操作系统发行版。取值：
- `CentOS`
- `AliyunLinux`
- `Windows`
- `WindowsCore`

默认值：`AliyunLinux`。',
                    'type' => 'string',
                    'deprecated' => true,
                    'required' => false,
                    'example' => 'AliyunLinux',
                  ),
                  'instance_patterns' => 
                  array (
                    'title' => '实例属性',
                    'type' => 'array',
                    'items' => 
                    array (
                      'title' => '实例属性',
                      'required' => false,
                      '$ref' => '#/components/schemas/instance_patterns',
                    ),
                    'required' => false,
                  ),
                ),
                'required' => false,
              ),
              'node_config' => 
              array (
                'title' => '节点配置',
                'description' => '节点配置',
                'type' => 'object',
                'properties' => 
                array (
                  'kubelet_configuration' => 
                  array (
                    'title' => 'Kubelet参数配置。',
                    'description' => 'Kubelet参数配置。',
                    'required' => false,
                    '$ref' => '#/components/schemas/kubelet_config',
                  ),
                ),
                'required' => false,
              ),
              'kubernetes_config' => 
              array (
                'title' => '集群配置',
                'description' => '集群相关配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'labels' => 
                  array (
                    'title' => '节点标签。',
                    'description' => '节点标签，为Kubernetes集群节点添加标签。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '标签配置。',
                      'required' => false,
                      '$ref' => '#/components/schemas/tag',
                    ),
                    'required' => false,
                  ),
                  'taints' => 
                  array (
                    'title' => '污点信息。',
                    'description' => '污点配置。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '污点配置集合。',
                      'required' => false,
                      '$ref' => '#/components/schemas/taint',
                    ),
                    'required' => false,
                  ),
                  'runtime' => 
                  array (
                    'title' => '容器运行时。',
                    'description' => '容器运行时。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'containerd',
                  ),
                  'runtime_version' => 
                  array (
                    'title' => '容器运行时版本。',
                    'description' => '容器运行时版本。
',
                    'type' => 'string',
                    'required' => false,
                    'example' => '1.6.20',
                  ),
                  'cpu_policy' => 
                  array (
                    'title' => 'CPU管理策略。',
                    'description' => '节点CPU管理策略。当集群版本在1.12.6及以上时支持以下两种策略：

- `static`：允许为节点上具有某些资源特征Pod增强其CPU亲和性和独占性。
- `none`：表示启用现有的默认CPU亲和性方案。

默认值：`none`。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'none',
                  ),
                  'user_data' => 
                  array (
                    'title' => '节点自定义数据。',
                    'description' => '节点自定义数据。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'dGhpcyBpcyBhIGV4YW1wbGU=',
                  ),
                  'unschedulable' => 
                  array (
                    'title' => '扩容后的节点是否可调度。',
                    'description' => '扩容后的节点是否可调度。',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => 'true',
                  ),
                  'cms_enabled' => 
                  array (
                    'title' => '是否开启云监控。',
                    'description' => '是否在ECS节点上安装云监控，安装后可以在云监控控制台查看所创建ECS实例的监控信息，推荐开启。取值：

- `true`：在ECS节点上安装云监控。

- `false`：不在ECS节点上安装云监控。

默认值：`false`。',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => 'true',
                  ),
                  'node_name_mode' => 
                  array (
                    'title' => '自定义节点名称',
                    'description' => '节点名称由三部分组成：前缀 \\+ 节点 IP \\+ 后缀：

- 前缀和后缀均可由“.”分隔的一个或多个部分构成，每个部分可以使用小写字母、数字和“-”，节点名称首尾必须为小写字母和数字；
- 节点 IP为完整的节点私网 IP 地址；

传参包含四个部分，由逗号分隔，例如：参数传入"customized,aliyun,ip,com"字符串（其中“customized”和"ip"为固定的字符串，aliyun为前缀，com为后缀），则节点的名称为：aliyun192.168.xxx.xxxcom。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'customized,aliyun,ip,com',
                  ),
                ),
                'required' => false,
              ),
              'tee_config' => 
              array (
                'title' => '加密计算节点池配置。',
                'description' => '加密计算集群配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'tee_enable' => 
                  array (
                    'title' => '是否为加密计算节点池。',
                    'description' => '是否开启加密计算集群。',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => 'true',
                  ),
                ),
                'required' => false,
              ),
              'interconnect_config' => 
              array (
                'title' => '【该字段已废弃】
边缘节点池网络相关的配置。该值只对edge类型的节点池有意义',
                'description' => '【该字段已废弃】

边缘节点池配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'cen_id' => 
                  array (
                    'title' => '边缘增强型节点池绑定的云企业网实例ID(CENID)',
                    'description' => '【该字段已废弃】

边缘增强型节点池绑定的云企业网实例ID(CENID)。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'cen-ey9k9nfhz0f*******',
                  ),
                  'ccn_id' => 
                  array (
                    'title' => '边缘增强型节点池绑定的云连接网实例ID(CCNID)',
                    'description' => '【该字段已废弃】

边缘增强型节点池绑定的云连接网实例ID(CCNID)。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'ccn-qm5i0i0q9yi*******',
                  ),
                  'ccn_region_id' => 
                  array (
                    'title' => '边缘增强型节点池绑定的云连接网实例所属的区域',
                    'description' => '【该字段已废弃】

边缘增强型节点池绑定的云连接网实例所属的地域。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'cn-shanghai',
                  ),
                  'bandwidth' => 
                  array (
                    'title' => '边缘增强型节点池的网络带宽，单位M。',
                    'description' => '【该字段已废弃】

边缘增强型节点池的网络带宽，单位：Mbps。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => false,
                    'example' => '10',
                  ),
                  'improved_period' => 
                  array (
                    'title' => '边缘增强型节点池的购买时长，单位月',
                    'description' => '【该字段已废弃】

边缘增强型节点池的购买时长，单位：月。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '1',
                  ),
                ),
                'deprecated' => true,
                'required' => false,
              ),
              'count' => 
              array (
                'title' => '【该字段已废弃】请使用desired_size替代
节点池节点数量。',
                'description' => '【该字段已废弃，请使用desired_size代替】

节点池节点数量。',
                'type' => 'integer',
                'format' => 'int64',
                'deprecated' => true,
                'required' => false,
                'example' => '1',
              ),
              'max_nodes' => 
              array (
                'title' => '【该字段已废弃】
边缘节点池允许容纳的最大节点数量. 节点池内可以容纳的最大节点数量，该参数大于等于0。0表示无额外限制(仅受限于集群整体可以容纳的节点数，节点池本身无额外限制)。边缘节点池该参数值往往大于0；ess类型节点池和默认的edge类型节点池该参数值为0',
                'description' => '边缘节点池允许容纳的最大节点数量.。该参数大于等于0。0表示无额外限制（仅受限于集群整体可以容纳的节点数，节点池本身无额外限制）。边缘节点池该参数值往往大于0；ess类型节点池和默认的edge类型节点池该参数值为0。',
                'type' => 'integer',
                'format' => 'int64',
                'deprecated' => true,
                'required' => false,
                'example' => '10',
              ),
              'interconnect_mode' => 
              array (
                'title' => '边缘节点池的网络类型。basic：基础型；improved：增强型。该值只对edge类型的节点池有意义。',
                'description' => '边缘节点池的网络类型，该值只对`type`为`edge`类型的节点池有意义，取值范围：

- `basic`：基础型。
- `private`: 专用型。1.22及以上版本支持。',
                'type' => 'string',
                'required' => false,
                'example' => 'basic',
              ),
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
            'title' => '返回数据体。',
            'description' => '节点池配置。',
            'type' => 'object',
            'properties' => 
            array (
              'nodepool_id' => 
              array (
                'title' => '节点池ID',
                'description' => '节点池ID。',
                'type' => 'string',
                'example' => 'np31da1b38983f4511b490fc62108a****',
              ),
              'task_id' => 
              array (
                'title' => '任务ID',
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'T-613b19bbd160ad492800****',
              ),
              'request_id' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0527ac9a-c899-4341-a21a-****',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"nodepool_id\\": \\"np31da1b38983f4511b490fc62108a****\\",\\n  \\"task_id\\": \\"T-613b19bbd160ad492800****\\",\\n  \\"request_id\\": \\"0527ac9a-c899-4341-a21a-****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateClusterNodePoolResponse>\\n    <nodepool_id>np31da1b38983f4511b490fc62108a****</nodepool_id>\\n</CreateClusterNodePoolResponse>","errorExample":""}]',
      'title' => '创建节点池',
    ),
    'DeleteClusterNodepool' => 
    array (
      'summary' => '您可以调用DeleteClusterNodepool接口删除不再使用的节点池。',
      'path' => '/clusters/{ClusterId}/nodepools/{NodepoolId}',
      'methods' => 
      array (
        0 => 'delete',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c61da77e8bfbc4c4c999af2b51b65****',
          ),
        ),
        1 => 
        array (
          'name' => 'NodepoolId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '节点池ID。',
            'description' => '节点池ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'np30db56bcac7843dca90b999c8928****',
          ),
        ),
        2 => 
        array (
          'name' => 'force',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否强制删除。',
            'description' => '是否强制删除。',
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
            'title' => '返回数据体',
            'description' => '返回数据体。',
            'type' => 'object',
            'properties' => 
            array (
              'request_id' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7263C978-3DBD-4E06-B319-793B38A2F388',
              ),
              'task_id' => 
              array (
                'title' => '任务ID',
                'description' => '任务ID',
                'type' => 'string',
                'example' => 'T-655ace947e0e6603af000004',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"request_id\\": \\"7263C978-3DBD-4E06-B319-793B38A2F388\\",\\n  \\"task_id\\": \\"T-655ace947e0e6603af000004\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteClusterNodepoolResponse>\\n    <request_id>7263C978-3DBD-4E06-B319-793B38A2F388</request_id>\\n</DeleteClusterNodepoolResponse>","errorExample":""}]',
      'title' => '删除节点池',
    ),
    'DescribeClusterNodePoolDetail' => 
    array (
      'summary' => '您可以根据节点池ID，调用DescribeClusterNodePoolDetail接口查询集群中目标节点池的配置。',
      'path' => '/clusters/{ClusterId}/nodepools/{NodepoolId}',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '527',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcsk4HGX7D',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c23421cfa74454bc8b37163fd19af****',
          ),
        ),
        1 => 
        array (
          'name' => 'NodepoolId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '节点池ID。',
            'description' => '节点池ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'np31da1b38983f4511b490fc62108a****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回数据体。',
            'description' => '节点池详情。',
            'type' => 'object',
            'properties' => 
            array (
              'nodepool_info' => 
              array (
                'title' => '节点池详情。',
                'description' => '节点池配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'nodepool_id' => 
                  array (
                    'title' => '节点池ID。',
                    'description' => '节点池ID。',
                    'type' => 'string',
                    'example' => 'np615c0e0966124216a0412e10afe0****',
                  ),
                  'name' => 
                  array (
                    'title' => '节点池名称。',
                    'description' => '节点池名称。

命名规则：由数字、汉字、英文字符或短划线（-）组成，长度范围1~63个字符，且不能以短划线（-）开头。',
                    'type' => 'string',
                    'example' => 'default-nodepool',
                  ),
                  'type' => 
                  array (
                    'title' => '节点池类型。',
                    'description' => '节点池类型。',
                    'type' => 'string',
                    'example' => 'ess',
                  ),
                  'is_default' => 
                  array (
                    'title' => '是否为默认节点池。',
                    'description' => '是否为默认节点池，通常一个集群仅有一个默认节点池。取值：
`true`：设置为默认节点池。
`false`：不设置为默认节点池。

',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'resource_group_id' => 
                  array (
                    'title' => '节点池所属资源组ID。',
                    'description' => '资源组ID。',
                    'type' => 'string',
                    'example' => 'rg-acfmyvw3wjmb****',
                  ),
                  'region_id' => 
                  array (
                    'title' => '节点池所属地域ID。',
                    'description' => '地域ID。',
                    'type' => 'string',
                    'example' => 'cn-beijing',
                  ),
                  'created' => 
                  array (
                    'title' => '节点池创建时间。',
                    'description' => '节点池创建时间。',
                    'type' => 'string',
                    'example' => '2020-09-27T19:14:09.156823496+08:00',
                  ),
                  'updated' => 
                  array (
                    'title' => '节点池更新时间。',
                    'description' => '节点池更新时间。',
                    'type' => 'string',
                    'example' => '2020-09-27T20:37:46+08:00',
                  ),
                ),
              ),
              'status' => 
              array (
                'title' => '节点池状态。',
                'description' => '节点池状态配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'state' => 
                  array (
                    'title' => '节点池状态。',
                    'description' => '节点池状态，取值：

- `active`：已激活。
- `scaling`：伸缩中。
- `removing`：节点移除中。
- `deleting`：删除中。
- `updating`：更新中。',
                    'type' => 'string',
                    'example' => 'active',
                  ),
                  'healthy_nodes' => 
                  array (
                    'title' => '处于健康状态节点数。',
                    'description' => '健康节点数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '3',
                  ),
                  'initial_nodes' => 
                  array (
                    'title' => '正在初始化节点数。',
                    'description' => '正在创建节点数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'failed_nodes' => 
                  array (
                    'title' => '失败节点数。',
                    'description' => '失败节点数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'offline_nodes' => 
                  array (
                    'title' => '离线节点数量。',
                    'description' => '离线节点数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'removing_nodes' => 
                  array (
                    'title' => '正在被移除节点数。',
                    'description' => '正在被移除节点数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'serving_nodes' => 
                  array (
                    'title' => '工作节点数量。',
                    'description' => '工作中节点数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '3',
                  ),
                  'total_nodes' => 
                  array (
                    'title' => '总节点数。',
                    'description' => '节点池内总节点数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '3',
                  ),
                ),
              ),
              'auto_scaling' => 
              array (
                'title' => '节点池自动伸缩信息。',
                'description' => '自动伸缩节点池配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'enable' => 
                  array (
                    'title' => '是否启用自动伸缩。',
                    'description' => '是否启用自动伸缩。取值：

- `true`：开启节点池自动伸缩功能。
- `false`：不开启自动伸缩，当取值为false时，`auto_scaling`内的其他配置参数将不生效。
',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'type' => 
                  array (
                    'title' => '扩容组类型',
                    'description' => '自动伸缩类型，按照自动伸缩实例类型划分。取值：

- `cpu`：普通实例型。
- `gpu`：GPU实例型。
- `gpushare`：GPU共享型。
- `spot`：抢占式实例型。
',
                    'type' => 'string',
                    'example' => 'cpu',
                  ),
                  'max_instances' => 
                  array (
                    'title' => '最大实例数。',
                    'description' => '最大实例数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'min_instances' => 
                  array (
                    'title' => '最小实例数。',
                    'description' => '最小实例数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'eip_internet_charge_type' => 
                  array (
                    'title' => 'EIP实例付费类型。',
                    'description' => 'EIP计费类型，取值：

- `PayByBandwidth`：按固定带宽计费。
- `PayByTraffic`：按使用流量计费。
',
                    'type' => 'string',
                    'example' => 'PayByBandwidth',
                  ),
                  'is_bond_eip' => 
                  array (
                    'title' => '是否绑定EIP。',
                    'description' => '是否绑定EIP，取值：

- `true`：绑定EIP。
- `false`：不绑定EIP。

',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'eip_bandwidth' => 
                  array (
                    'title' => 'EIP带宽峰值。',
                    'description' => 'EIP带宽峰值。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '5',
                  ),
                ),
              ),
              'management' => 
              array (
                'title' => '托管版节点池配置。',
                'description' => '托管节点池配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'enable' => 
                  array (
                    'title' => '是否开启托管版节点池。',
                    'description' => '是否开启托管版节点池，取值：

- `true`：开启托管节点池。
- `false`：不开启托管节点池，只有当`enable=true`时，其他相关配置才生效。
',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'auto_repair' => 
                  array (
                    'title' => '自动修复。',
                    'description' => '自动修复，仅当`enable=true`时生效。

- `true`：自动修复。
- `false`：不自动修复。
',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'auto_repair_policy' => 
                  array (
                    'title' => '自动修复节点策略。',
                    'description' => '自动修复节点策略。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'restart_node' => 
                      array (
                        'title' => '是否允许重启节点。',
                        'description' => '是否允许重启节点。',
                        'type' => 'boolean',
                        'example' => 'true',
                      ),
                    ),
                  ),
                  'auto_vul_fix' => 
                  array (
                    'title' => '是否自动修复CVE。',
                    'description' => '是否自动修复CVE。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'auto_vul_fix_policy' => 
                  array (
                    'title' => '自动修复CVE策略。',
                    'description' => '自动修复CVE策略。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'restart_node' => 
                      array (
                        'title' => '是否允许重启节点。',
                        'description' => '是否允许重启节点。',
                        'type' => 'boolean',
                        'example' => 'true',
                      ),
                      'vul_level' => 
                      array (
                        'title' => '允许自动修复的漏洞级别，以逗号分隔。',
                        'description' => '允许自动修复的漏洞级别，以逗号分隔。',
                        'type' => 'string',
                        'example' => 'asap,nntf',
                      ),
                    ),
                  ),
                  'auto_upgrade' => 
                  array (
                    'title' => '是否自动升级。',
                    'description' => '是否自动升级。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'auto_upgrade_policy' => 
                  array (
                    'title' => '自动升级策略。',
                    'description' => '自动升级策略。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'auto_upgrade_kubelet' => 
                      array (
                        'title' => '是否允许自动升级kubelet。',
                        'description' => '是否允许自动升级kubelet。',
                        'type' => 'boolean',
                        'example' => 'true',
                      ),
                    ),
                  ),
                  'upgrade_config' => 
                  array (
                    'title' => '自动升级配置。',
                    'description' => '自动升级配置，仅当`enable=true`时生效。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'auto_upgrade' => 
                      array (
                        'title' => '是否启用自动升级，自修复。',
                        'description' => '是否启用自动升级，取值：

- `true`：启用自动升级。
- `false`：不启用自动升级。
',
                        'type' => 'boolean',
                        'example' => 'true',
                      ),
                      'surge' => 
                      array (
                        'title' => '额外节点数量。',
                        'description' => '额外节点数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '5',
                      ),
                      'surge_percentage' => 
                      array (
                        'title' => '额外节点比例， 和surge 二选一。',
                        'description' => '额外节点比例，和`surge`二选一。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '50',
                      ),
                      'max_unavailable' => 
                      array (
                        'title' => '最大不可用节点数量。',
                        'description' => '最大不可用节点数量，取值范围：\\[1,1000\\]。

默认值：1。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1',
                      ),
                    ),
                  ),
                ),
              ),
              'scaling_group' => 
              array (
                'title' => '节点池扩容组信息。',
                'description' => '扩容组配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'scaling_group_id' => 
                  array (
                    'title' => '扩容组ID	',
                    'description' => '伸缩组ID。',
                    'type' => 'string',
                    'example' => 'asg-2zeieod8giqmov7z****',
                  ),
                  'vswitch_ids' => 
                  array (
                    'title' => '虚拟交换机ID。',
                    'description' => '虚拟交换机ID，取值范围：\\[1,20\\]。

> 为保证高可用性，建议选择不同可用区的虚拟交换机。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '虚拟交换机ID。',
                      'type' => 'string',
                      'example' => 'vsw-2ze3ds0mdip0hdz8i****',
                    ),
                  ),
                  'instance_types' => 
                  array (
                    'title' => '实例规格。',
                    'description' => '节点实例规格列表，您可以选择多个实例规格作为备选，每个节点创建时，将从第一个规格开始尝试购买，直到创建成功。最终购买的实例规格可能随库存变化而不同。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '节点实例规格。',
                      'type' => 'string',
                      'example' => 'ecs.n4.large',
                    ),
                  ),
                  'instance_charge_type' => 
                  array (
                    'title' => '节点付费类型',
                    'description' => '节点池节点付费类型，取值：

- `PrePaid`：预付费。
- `PostPaid`：按量付费。
',
                    'type' => 'string',
                    'example' => 'PostPaid',
                  ),
                  'period' => 
                  array (
                    'title' => '节点包年包月时长。',
                    'description' => '节点包年包月时长，当`instance_charge_type`取值为`PrePaid`时才生效且为必选值。

当`PeriodUnit=Month`时，取值范围：{1, 2 , 3, 6, 12, 24, 36, 48, 60}。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'period_unit' => 
                  array (
                    'title' => '节点包年包月周期。',
                    'description' => '节点付费周期，当`instance_charge_type`取值为`PrePaid`时时候需要指定周期。

`Month`：目前只支持以月为单位。
',
                    'type' => 'string',
                    'example' => 'Month',
                  ),
                  'auto_renew' => 
                  array (
                    'title' => '节点是否开启自动续费',
                    'description' => '节点是否开启自动续费，当`instance_charge_type`取值为`PrePaid`时才生效，取值：

- `true`：自动续费。
- `false`：不自动续费。
',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'auto_renew_period' => 
                  array (
                    'title' => '节点自动续费周期',
                    'description' => '节点自动续费周期。当`instance_charge_type`取值为`PrePaid`时才生效，且为必选值。

当`PeriodUnit=Month`时，取值范围：{1, 2, 3, 6, 12}。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'spot_strategy' => 
                  array (
                    'title' => '抢占式实例类型',
                    'description' => '抢占式实例类型，取值：
- NoSpot：非抢占式实例。
- SpotWithPriceLimit：设置抢占实例价格上限。
- SpotAsPriceGo：系统自动出价，跟随当前市场实际价格。

更多信息，请参见[抢占式实例](~~157759~~)。
',
                    'type' => 'string',
                    'example' => 'NoSpot',
                  ),
                  'spot_price_limit' => 
                  array (
                    'title' => '抢占实例价格上限配置。',
                    'description' => '抢占实例市场价格区间配置。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '抢占实例市场价格区间配置，可为不同实例规格设置不同的价格区间。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'instance_type' => 
                        array (
                          'title' => '抢占实例规格。',
                          'description' => '抢占式实例规格。',
                          'type' => 'string',
                          'example' => 'ecs.c6.large',
                        ),
                        'price_limit' => 
                        array (
                          'title' => '抢占实例单价。',
                          'description' => '单台实例市场价格。

<props="china">单位：元/时。

</props>


<props="intl">单位：美元/时。</props>
',
                          'type' => 'string',
                          'example' => '0.39',
                        ),
                      ),
                    ),
                  ),
                  'image_type' => 
                  array (
                    'title' => '操作系统发行版类型，推荐使用该字段指定节点操作系统。取值：CentOS、AliyunLinux、AliyunLinux Qboot、AliyunLinuxUEFI、AliyunLinux3、Windows、WindowsCore、AliyunLinux3Arm64、ContainerOS。',
                    'description' => '操作系统镜像类型。',
                    'type' => 'string',
                    'example' => 'AliyunLinux',
                  ),
                  'image_id' => 
                  array (
                    'title' => '自定义镜像。',
                    'description' => '自定义镜像ID，可通过`DescribeKubernetesVersionMetadata`查询系统支持的镜像。

',
                    'type' => 'string',
                    'example' => 'aliyun_2_1903_x64_20G_alibase_20200529.vhd',
                  ),
                  'system_disk_category' => 
                  array (
                    'title' => '节点系统盘类型。',
                    'description' => '节点系统盘类型，取值：
- `cloud`：普通云盘。
- `cloud_efficiency`：高效云盘。
- `cloud_ssd`：SSD云盘。
- `cloud_essd`：ESSD云盘。
- `cloud_auto`：ESSD AutoPL 云盘。
- `cloud_essd_entry`：ESSD Entry 云盘。

默认值：`cloud_efficiency`',
                    'type' => 'string',
                    'example' => 'cloud_efficiency',
                  ),
                  'system_disk_categories' => 
                  array (
                    'title' => '系统盘的多磁盘类型。当无法使用高优先级的磁盘类型时，自动尝试下一优先级的磁盘类型创建系统盘。取值范围：cloud：普通云盘。cloud_efficiency：高效云盘。cloud_ssd：SSD云盘。cloud_essd：ESSD云盘。',
                    'description' => '系统盘的多磁盘类型。当无法使用高优先级的磁盘类型时，自动尝试下一优先级的磁盘类型创建系统盘。取值：
- `cloud`：普通云盘。
- `cloud_efficiency`：高效云盘。
- `cloud_ssd`：SSD云盘。
- `cloud_essd`：ESSD云盘。
- `cloud_auto`：ESSD AutoPL 云盘。
- `cloud_essd_entry`：ESSD Entry 云盘。

默认值：`cloud_efficiency`',
                    'type' => 'array',
                    'items' => 
                    array (
                      'title' => '节点系统盘类型',
                      'description' => '节点系统盘类型。',
                      'type' => 'string',
                      'example' => 'cloud_essd',
                      'enum' => 
                      array (
                      ),
                    ),
                    'required' => false,
                    'maxItems' => 10,
                  ),
                  'system_disk_size' => 
                  array (
                    'title' => '节点系统盘大小。',
                    'description' => '节点系统盘大小，单位为GiB。

取值范围：\\[20,500\\]。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '120',
                  ),
                  'system_disk_performance_level' => 
                  array (
                    'title' => '节点系统盘磁盘性能，只针对ESSD磁盘生效',
                    'description' => '节点系统盘磁盘性能，只针对ESSD磁盘生效。',
                    'type' => 'string',
                    'example' => 'PL1',
                  ),
                  'system_disk_encrypted' => 
                  array (
                    'title' => '是否加密系统盘。取值范围：true：加密。false：不加密。',
                    'description' => '是否加密系统盘。取值：
- `true`：加密。
- `false`：不加密。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'system_disk_kms_key_id' => 
                  array (
                    'title' => '系统盘使用的KMS密钥ID。',
                    'description' => '系统盘使用的KMS密钥ID。',
                    'type' => 'string',
                    'example' => '0e478b7a-4262-4802-b8cb-00d3fb40****',
                  ),
                  'system_disk_encrypt_algorithm' => 
                  array (
                    'title' => '系统盘采用的加密算法。取值范围：aes-256。',
                    'description' => '系统盘采用的加密算法。取值范围：aes-256。',
                    'type' => 'string',
                    'example' => 'aes-256',
                    'enum' => 
                    array (
                    ),
                  ),
                  'system_disk_bursting_enabled' => 
                  array (
                    'title' => '节点系统盘是否开启Burst（性能突发），磁盘类型为cloud_auto时配置。',
                    'description' => '节点系统盘是否开启Burst（性能突发），磁盘类型为cloud_auto时配置。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'system_disk_provisioned_iops' => 
                  array (
                    'title' => '节点系统盘预配置的读写IOPS，磁盘类型为cloud_auto时配置。',
                    'description' => '节点系统盘预配置的读写IOPS，磁盘类型为cloud_auto时配置。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1000',
                  ),
                  'data_disks' => 
                  array (
                    'title' => '数据盘配置。',
                    'description' => '节点数据盘类型、大小等配置的组合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '节点数据盘配置。',
                      '$ref' => '#/components/schemas/data_disk',
                    ),
                  ),
                  'security_group_ids' => 
                  array (
                    'title' => '多安全组ID',
                    'description' => '节点池安全组ID列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '节点池安全组ID列表。',
                      'type' => 'string',
                      'example' => 'sg-2ze60ockeekspl3d****',
                    ),
                  ),
                  'key_pair' => 
                  array (
                    'title' => '密钥对名称，和login_password二选一。',
                    'description' => '密钥对名称，和`login_password`二选一。当节点池为托管版节点池时，只支持`key_pair`。',
                    'type' => 'string',
                    'example' => 'pro-nodepool',
                  ),
                  'login_password' => 
                  array (
                    'title' => 'SSH登录密码。',
                    'description' => 'SSH登录密码，和`key_pair`二选一。密码规则为8~30个字符，且至少同时包含三项（大小写字母、数字和特殊符号）。

出于安全性考虑，密码查询结果经过加密处理。',
                    'type' => 'string',
                    'example' => '********',
                  ),
                  'login_as_non_root' => 
                  array (
                    'title' => '弹出的ECS实例是否使用以非root用户登陆。',
                    'description' => '弹出的ECS实例是否使用以非root用户登录。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'cis_enabled' => 
                  array (
                    'title' => '【已废弃】请使用security_hardening_os参数代替',
                    'description' => '【已废弃】请使用参数security_hardening_os替代。',
                    'type' => 'boolean',
                    'deprecated' => true,
                    'example' => 'false',
                  ),
                  'soc_enabled' => 
                  array (
                    'title' => '是否开启等保加固，仅当系统镜像选择Alibaba Cloud Linux 2或Alibaba Cloud Linux 3时，可为节点开启等保加固。阿里云为Alibaba Cloud Linux 2和Alibaba Cloud Linux 3等保2.0三级版镜像提供等保合规的基线检查标准和扫描程序。',
                    'description' => '是否开启等保加固，仅当系统镜像选择Alibaba Cloud Linux 2或Alibaba Cloud Linux 3时，可为节点开启等保加固。阿里云为Alibaba Cloud Linux 2和Alibaba Cloud Linux 3等保2.0三级版镜像提供等保合规的基线检查标准和扫描程序。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'security_hardening_os' => 
                  array (
                    'title' => '是否开启阿里云OS安全加固。',
                    'description' => '阿里云OS安全加固。取值：

- `true`：开启阿里云OS安全加固。
- `false`：不开启阿里云OS安全加固。

默认值：`false`。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'internet_charge_type' => 
                  array (
                    'title' => '节点公网IP网络计费类型',
                    'description' => '节点公网IP网络计费类型。',
                    'type' => 'string',
                    'example' => 'PayByBandwidth',
                  ),
                  'internet_max_bandwidth_out' => 
                  array (
                    'title' => '节点公网IP出带宽最大值，单位为Mbps（Mega bit per second），取值范围：1~100',
                    'description' => '节点公网IP出带宽最大值，单位为Mbps（Mega bit per second），取值范围：1~100。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'tags' => 
                  array (
                    'title' => 'ECS标签',
                    'description' => '仅为ECS实例添加标签。

标签键不可以重复，最大长度为128个字符；标签键和标签值都不能以“aliyun”、“acs:”开头，或包含“https://”、“http://”。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '节点标签。',
                      '$ref' => '#/components/schemas/tag',
                    ),
                  ),
                  'desired_size' => 
                  array (
                    'title' => '节点池期望节点数',
                    'description' => '节点池期望节点数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2',
                  ),
                  'multi_az_policy' => 
                  array (
                    'title' => '多可用区伸缩组ECS实例扩缩容策略',
                    'description' => '多可用区伸缩组ECS实例扩缩容策略。取值：

- `PRIORITY`：根据您定义的虚拟交换机（VSwitchIds.N）扩缩容。当优先级较高的虚拟交换机所在可用区无法创建ECS实例时，自动使用下一优先级的虚拟交换机创建ECS实例。

- `COST_OPTIMIZED`：按vCPU单价从低到高进行尝试创建。当伸缩配置设置了抢占式计费方式的多实例规格时，优先创建对应抢占式实例。您可以继续通过`CompensateWithOnDemand`参数指定当抢占式实例由于库存等原因无法创建时，是否自动尝试以按量付费的方式创建。

  >`COST_OPTIMIZED`仅在伸缩配置设置了多实例规格或者选用了抢占式实例的情况下生效。

- `BALANCE`：在伸缩组指定的多可用区之间均匀分配ECS实例。如果由于库存不足等原因可用区之间变得不平衡，您可以通过API RebalanceInstances平衡资源。更多信息，请参见[RebalanceInstances](~~71516~~)。

默认值：`PRIORITY`。',
                    'type' => 'string',
                    'example' => 'BALANCE',
                  ),
                  'scaling_policy' => 
                  array (
                    'title' => '扩容策略。',
                    'description' => '伸缩组模式，取值：

- `release`：标准模式，根据申请资源值的使用量，通过创建、释放ECS的方式进行伸缩。
- `recycle`：极速模式，通过创建、停机、启动的方式进行伸缩，提高再次伸缩的速度（停机时计算资源不收费，只收取存储费用，本地盘机型除外）。',
                    'type' => 'string',
                    'example' => 'release',
                  ),
                  'on_demand_base_capacity' => 
                  array (
                    'title' => '伸缩组所需要按量实例个数的最小值，取值范围：0~1000。当按量实例个数少于该值时，将优先创建按量实例。',
                    'description' => '伸缩组所需要按量实例个数的最小值，取值范围：\\[0,1000\\]。当按量实例个数少于该值时，将优先创建按量实例。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'on_demand_percentage_above_base_capacity' => 
                  array (
                    'title' => '伸缩组满足最小按量实例数（OnDemandBaseCapacity）要求后，超出的实例中按量实例应占的比例，取值范围：0～100。',
                    'description' => '伸缩组满足最小按量实例数（`on_demand_base_capacity`）要求后，超出的实例中按量实例应占的比例。取值范围：\\[0,100\\]。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '20',
                  ),
                  'spot_instance_pools' => 
                  array (
                    'title' => '指定可用实例规格的个数，伸缩组将按成本最低的多个规格均衡创建抢占式实例。取值范围：1~10。',
                    'description' => '指定可用实例规格的个数，伸缩组将按成本最低的多个规格均衡创建抢占式实例。取值范围：\\[1,10\\]。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '5',
                  ),
                  'spot_instance_remedy' => 
                  array (
                    'title' => '是否开启补齐抢占式实例。开启后，当收到抢占式实例将被回收的系统消息时，伸缩组将尝试创建新的实例，替换掉将被回收的抢占式实例。',
                    'description' => '是否开启补齐抢占式实例。开启后，当收到抢占式实例将被回收的系统消息时，伸缩组将尝试创建新的实例，替换掉将被回收的抢占式实例。取值：

- `true`：开启补齐抢占式实例。
- `false`：不开启补齐抢占式实例。

',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'compensate_with_on_demand' => 
                  array (
                    'title' => '当MultiAZPolicy取值为COST_OPTIMIZED时，如果因价格、库存等原因无法创建足够的抢占式实例，是否允许自动尝试创建按量实例满足ECS实例数量要求。取值范围：true：允许。false：不允许。默认值：true',
                    'description' => '当`multi_az_policy`取值为`COST_OPTIMIZED`时，如果因价格、库存等原因无法创建足够的抢占式实例，是否允许自动尝试创建按量实例满足ECS实例数量要求。取值：

- `true`：允许自动尝试创建按量实例满足ECS实例数量要求。
- `false`：不允许自动尝试创建按量实例满足ECS实例数量要求。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'deploymentset_id' => 
                  array (
                    'title' => '部署集ID。',
                    'description' => '部署集ID。',
                    'type' => 'string',
                    'example' => 'ds-bp1d19mmbsv3jf6xxxxx',
                  ),
                  'rds_instances' => 
                  array (
                    'title' => 'RDS实例列表。',
                    'description' => '如果指定了RDS实例列表，集群节点ECS会自动加入RDS访问白名单。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'RDS实例。',
                      'type' => 'string',
                      'example' => 'rm-xxx',
                    ),
                  ),
                  'private_pool_options' => 
                  array (
                    'title' => '私有池选项。',
                    'description' => '私有节点池配置。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'id' => 
                      array (
                        'title' => '私有池ID。即弹性保障服务ID或容量预定服务ID。',
                        'description' => '私有节点池ID。',
                        'type' => 'string',
                        'example' => 'eap-bp67acfmxazb4****',
                      ),
                      'match_criteria' => 
                      array (
                        'title' => '实例启动的私有池容量选项。弹性保障服务或容量预定服务在生效后会生成私有池容量，供实例启动时选择。取值范围：  Open：开放模式。将自动匹配开放类型的私有池容量。如果没有符合条件的私有池容量，则使用公共池资源启动。该模式下无需设置PrivatePoolOptions.Id参数。  Target：指定模式。使用指定的私有池容量启动实例，如果该私有池容量不可用，则实例会启动失败。该模式下必须指定私有池ID，即PrivatePoolOptions.Id参数为必填项。  None：不使用模式。实例启动将不使用私有池容量。',
                        'description' => '私有节点池类型，实例启动的私有池容量选项。弹性保障服务或容量预定服务在生效后会生成私有池容量，供实例启动时选择。取值：

- `Open`：开放模式。将自动匹配开放类型的私有池容量。如果没有符合条件的私有池容量，则使用公共池资源启动。

- `Target`：指定模式。使用指定的私有池容量启动实例，如果该私有池容量不可用，则实例会启动失败。

- `None`：不使用模式。实例启动将不使用私有池容量。',
                        'type' => 'string',
                        'example' => 'Open',
                      ),
                    ),
                  ),
                  'security_group_id' => 
                  array (
                    'title' => '【该字段已废弃】请使用security_group_ids替代
安全组ID。',
                    'description' => '节点池安全组ID，当节点池绑定了多个安全组时，为`security_group_ids`中的第一个值。',
                    'type' => 'string',
                    'example' => 'sg-2ze60ockeekspl3d****',
                  ),
                  'platform' => 
                  array (
                    'title' => '【该字段已废弃】请使用image_type替代
操作系统发行版，和image_type二选一',
                    'description' => '操作系统发行版。取值：

- `CentOS`
- `AliyunLinux`
- `Windows`
- `WindowsCore`',
                    'type' => 'string',
                    'example' => 'AliyunLinux',
                  ),
                  'ram_policy' => 
                  array (
                    'title' => '节点RAM 角色名称。',
                    'description' => 'Worker RAM角色名称，授权ECS实例为集群Woker节点。',
                    'type' => 'string',
                    'example' => 'KubernetesWorkerRole-021dc54f-929b-437a-8ae0-34c24d3e****',
                  ),
                  'instance_patterns' => 
                  array (
                    'title' => '实例属性',
                    'description' => '实例属性',
                    'type' => 'array',
                    'items' => 
                    array (
                      'title' => '实例属性',
                      'description' => '实例属性',
                      '$ref' => '#/components/schemas/instance_patterns',
                    ),
                  ),
                ),
              ),
              'node_config' => 
              array (
                'title' => '节点配置',
                'description' => '节点配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'kubelet_configuration' => 
                  array (
                    'title' => 'Kubelet参数配置。',
                    'description' => 'Kubelet参数配置。',
                    '$ref' => '#/components/schemas/kubelet_config',
                  ),
                ),
              ),
              'kubernetes_config' => 
              array (
                'title' => '集群配置',
                'description' => '集群相关配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'labels' => 
                  array (
                    'title' => '节点标签。',
                    'description' => '节点标签，为Kubernetes集群节点添加标签。标签定义规则：

- 标签由区分大小写的键值对组成，您最多可以设置20个标签。
- 标签键不可以重复，最长为64个字符；标签值可以为空，最长为128个字符。标签键和标签值都不能以`aliyun`、`acs:`、`https://`或`http://`开头。更多信息，请参见[Labels and Selectors](https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/#syntax-and-character-set)。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'ECS标签。',
                      '$ref' => '#/components/schemas/tag',
                    ),
                  ),
                  'taints' => 
                  array (
                    'title' => '污点信息。',
                    'description' => '节点污点信息。污点和容忍度（Toleration）相互配合，可以用来避免Pod被分配到不合适的节点上。更多信息，请参见[taint-and-toleration](https://kubernetes.io/zh/docs/concepts/scheduling-eviction/taint-and-toleration/)。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '节点污点配置。',
                      '$ref' => '#/components/schemas/taint',
                    ),
                  ),
                  'runtime' => 
                  array (
                    'title' => '容器运行时。',
                    'description' => '容器运行时名称。',
                    'type' => 'string',
                    'example' => 'docker',
                  ),
                  'runtime_version' => 
                  array (
                    'title' => '容器运行时版本。',
                    'description' => '容器运行时版本。',
                    'type' => 'string',
                    'example' => '19.03.5',
                  ),
                  'cpu_policy' => 
                  array (
                    'title' => 'CPU管理策略。',
                    'description' => '节点CPU管理策略。当集群版本在1.12.6及以上时支持以下两种策略：

- `static`：允许为节点上具有某些资源特征Pod增强其CPU亲和性和独占性。
- `none`：表示启用现有的默认CPU亲和性方案。',
                    'type' => 'string',
                    'example' => 'none',
                  ),
                  'user_data' => 
                  array (
                    'title' => '节点自定义数据。',
                    'description' => '节点池自定义数据。更多详情，请参见[生成实例自定义数据](~~49121~~)。',
                    'type' => 'string',
                    'example' => 'IyEvYmluL3NoCmVjaG8gIkhlbGxvIEFDSyEi',
                  ),
                  'unschedulable' => 
                  array (
                    'title' => '扩容后的节点是否可调度。',
                    'description' => '扩容后的节点是否可调度。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'cms_enabled' => 
                  array (
                    'title' => '是否开启云监控。',
                    'description' => '是否在ECS节点上安装云监控，安装后可以在云监控控制台查看所创建ECS实例的监控信息，推荐开启。取值：

- `true`：在ECS节点上安装云监控。
- `false`：不在ECS节点上安装云监控。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'node_name_mode' => 
                  array (
                    'title' => '自定义节点名称',
                    'description' => '节点名称由三部分组成：前缀 \\+ 节点 IP 地址子串 \\+ 后缀：

- 前缀和后缀均可由“.”分隔的一个或多个部分构成，每个部分可以使用小写字母、数字和“-”，节点名称首尾必须为小写字母和数字。
- IP 地址段长度指截取节点 IP 地址末尾的位数，取值范围 5-12。

例如，节点 IP 地址为：192.168.0.55，指定前缀为 aliyun.com，IP 地址段长度为 5，后缀为 test，则节点名称为aliyun.com00055test。',
                    'type' => 'string',
                    'example' => 'customized,test.,5,.com',
                  ),
                ),
              ),
              'tee_config' => 
              array (
                'title' => '加密计算节点池信息。',
                'description' => '加密计算节集群配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'tee_enable' => 
                  array (
                    'title' => '是否为加密计算节点池。',
                    'description' => '是否开启加密计算集群，取值：

- `true`：开启。
- `false`：不开启。
',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                ),
              ),
              'interconnect_config' => 
              array (
                'title' => '边缘节点池网络相关的配置。该值只对edge类型的节点池有意义',
                'description' => '【该字段已废弃】

边缘节点池网络相关的配置。该值只对edge类型的节点池有意义。',
                'type' => 'object',
                'properties' => 
                array (
                  'cen_id' => 
                  array (
                    'title' => '边缘增强型节点池绑定的云企业网实例ID(CENID)',
                    'description' => '【该字段已废弃】

边缘增强型节点池绑定的云企业网实例ID (CENID)。',
                    'type' => 'string',
                    'example' => 'cen-ey9k9nfhz0f*******',
                  ),
                  'ccn_id' => 
                  array (
                    'title' => '边缘增强型节点池绑定的云连接网实例ID(CCNID)',
                    'description' => '【该字段已废弃】

边缘增强型节点池绑定的云连接网实例ID (CCNID)。',
                    'type' => 'string',
                    'example' => 'ccn-qm5i0i0q9yi*******',
                  ),
                  'ccn_region_id' => 
                  array (
                    'title' => '边缘增强型节点池绑定的云连接网实例所属的区域',
                    'description' => '【该字段已废弃】

边缘增强型节点池绑定的云连接网实例所属的区域。',
                    'type' => 'string',
                    'example' => 'cn-shanghai',
                  ),
                  'bandwidth' => 
                  array (
                    'title' => '边缘增强型节点池的网络带宽，单位M',
                    'description' => '【该字段已废弃】

边缘增强型节点池的网络带宽，单位为Mbps。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'improved_period' => 
                  array (
                    'title' => '边缘增强型节点池的购买时长，单位月',
                    'description' => '【该字段已废弃】

边缘增强型节点池的购买时长，单位为月。',
                    'type' => 'string',
                    'example' => '1',
                  ),
                ),
              ),
              'max_nodes' => 
              array (
                'title' => '边缘节点池允许容纳的最大节点数量. 节点池内可以容纳的最大节点数量，该参数大于等于0。0表示无额外限制(仅受限于集群整体可以容纳的节点数，节点池本身无额外限制)。边缘节点池该参数值往往大于0；ess类型节点池和默认的edge类型节点池该参数值为0',
                'description' => '边缘节点池允许容纳的最大节点数量. 节点池内可以容纳的最大节点数量，该参数大于等于0。0表示无额外限制（仅受限于集群整体可以容纳的节点数，节点池本身无额外限制）。边缘节点池该参数值往往大于0；ess类型节点池和默认的edge类型节点池该参数值为0。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'interconnect_mode' => 
              array (
                'title' => '边缘节点池的网络类型。basic：基础型；improved：增强型。该值只对edge类型的节点池有意义',
                'description' => '边缘节点池的网络类型。该值只对edge类型的节点池有意义。

- basic：基础型；
- dedicated：专用型。',
                'type' => 'string',
                'example' => 'basic',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"nodepool_info\\": {\\n    \\"nodepool_id\\": \\"np615c0e0966124216a0412e10afe0****\\",\\n    \\"name\\": \\"default-nodepool\\",\\n    \\"type\\": \\"ess\\",\\n    \\"is_default\\": true,\\n    \\"resource_group_id\\": \\"rg-acfmyvw3wjmb****\\",\\n    \\"region_id\\": \\"cn-beijing\\",\\n    \\"created\\": \\"2020-09-27T19:14:09.156823496+08:00\\",\\n    \\"updated\\": \\"2020-09-27T20:37:46+08:00\\"\\n  },\\n  \\"status\\": {\\n    \\"state\\": \\"active\\",\\n    \\"healthy_nodes\\": 3,\\n    \\"initial_nodes\\": 0,\\n    \\"failed_nodes\\": 0,\\n    \\"offline_nodes\\": 0,\\n    \\"removing_nodes\\": 0,\\n    \\"serving_nodes\\": 3,\\n    \\"total_nodes\\": 3\\n  },\\n  \\"auto_scaling\\": {\\n    \\"enable\\": true,\\n    \\"type\\": \\"cpu\\",\\n    \\"max_instances\\": 10,\\n    \\"min_instances\\": 1,\\n    \\"eip_internet_charge_type\\": \\"PayByBandwidth\\",\\n    \\"is_bond_eip\\": true,\\n    \\"eip_bandwidth\\": 5\\n  },\\n  \\"management\\": {\\n    \\"enable\\": true,\\n    \\"auto_repair\\": true,\\n    \\"auto_repair_policy\\": {\\n      \\"restart_node\\": true\\n    },\\n    \\"auto_vul_fix\\": true,\\n    \\"auto_vul_fix_policy\\": {\\n      \\"restart_node\\": true,\\n      \\"vul_level\\": \\"asap,nntf\\"\\n    },\\n    \\"auto_upgrade\\": true,\\n    \\"auto_upgrade_policy\\": {\\n      \\"auto_upgrade_kubelet\\": true\\n    },\\n    \\"upgrade_config\\": {\\n      \\"auto_upgrade\\": true,\\n      \\"surge\\": 5,\\n      \\"surge_percentage\\": 50,\\n      \\"max_unavailable\\": 1\\n    }\\n  },\\n  \\"scaling_group\\": {\\n    \\"scaling_group_id\\": \\"asg-2zeieod8giqmov7z****\\",\\n    \\"vswitch_ids\\": [\\n      \\"vsw-2ze3ds0mdip0hdz8i****\\"\\n    ],\\n    \\"instance_types\\": [\\n      \\"ecs.n4.large\\"\\n    ],\\n    \\"instance_charge_type\\": \\"PostPaid\\",\\n    \\"period\\": 0,\\n    \\"period_unit\\": \\"Month\\",\\n    \\"auto_renew\\": false,\\n    \\"auto_renew_period\\": 1,\\n    \\"spot_strategy\\": \\"NoSpot\\",\\n    \\"spot_price_limit\\": [\\n      {\\n        \\"instance_type\\": \\"ecs.c6.large\\",\\n        \\"price_limit\\": \\"0.39\\"\\n      }\\n    ],\\n    \\"image_type\\": \\"AliyunLinux\\",\\n    \\"image_id\\": \\"aliyun_2_1903_x64_20G_alibase_20200529.vhd\\",\\n    \\"system_disk_category\\": \\"cloud_efficiency\\",\\n    \\"system_disk_categories\\": [\\n      \\"cloud_essd\\"\\n    ],\\n    \\"system_disk_size\\": 120,\\n    \\"system_disk_performance_level\\": \\"PL1\\",\\n    \\"system_disk_encrypted\\": false,\\n    \\"system_disk_kms_key_id\\": \\"0e478b7a-4262-4802-b8cb-00d3fb40****\\",\\n    \\"system_disk_encrypt_algorithm\\": \\"aes-256\\",\\n    \\"system_disk_bursting_enabled\\": true,\\n    \\"system_disk_provisioned_iops\\": 1000,\\n    \\"data_disks\\": [\\n      {\\n        \\"category\\": \\"cloud_ssd\\",\\n        \\"size\\": 40,\\n        \\"encrypted\\": \\"true\\",\\n        \\"kms_key_id\\": \\"0e478b7a-4262-4802-b8cb-00d3fb40****\\",\\n        \\"auto_snapshot_policy_id\\": \\"sp-2zej1nogjvovnz4z****\\",\\n        \\"performance_level\\": \\"PL1\\",\\n        \\"provisioned_iops\\": 1000,\\n        \\"bursting_enabled\\": true,\\n        \\"auto_format\\": true,\\n        \\"file_system\\": \\"ext4\\",\\n        \\"mount_target\\": \\"/mnt/path1\\",\\n        \\"disk_name\\": \\"DataDiskName\\",\\n        \\"device\\": \\"/dev/xvdb\\",\\n        \\"snapshot_id\\": \\"s-280s7****\\"\\n      }\\n    ],\\n    \\"security_group_ids\\": [\\n      \\"sg-2ze60ockeekspl3d****\\"\\n    ],\\n    \\"key_pair\\": \\"pro-nodepool\\",\\n    \\"login_password\\": \\"********\\",\\n    \\"login_as_non_root\\": true,\\n    \\"cis_enabled\\": false,\\n    \\"soc_enabled\\": false,\\n    \\"security_hardening_os\\": false,\\n    \\"internet_charge_type\\": \\"PayByBandwidth\\",\\n    \\"internet_max_bandwidth_out\\": 10,\\n    \\"tags\\": [\\n      {\\n        \\"key\\": \\"env\\",\\n        \\"value\\": \\"prod\\"\\n      }\\n    ],\\n    \\"desired_size\\": 2,\\n    \\"multi_az_policy\\": \\"BALANCE\\",\\n    \\"scaling_policy\\": \\"release\\",\\n    \\"on_demand_base_capacity\\": 0,\\n    \\"on_demand_percentage_above_base_capacity\\": 20,\\n    \\"spot_instance_pools\\": 5,\\n    \\"spot_instance_remedy\\": false,\\n    \\"compensate_with_on_demand\\": true,\\n    \\"deploymentset_id\\": \\"ds-bp1d19mmbsv3jf6xxxxx\\",\\n    \\"rds_instances\\": [\\n      \\"rm-xxx\\"\\n    ],\\n    \\"private_pool_options\\": {\\n      \\"id\\": \\"eap-bp67acfmxazb4****\\",\\n      \\"match_criteria\\": \\"Open\\"\\n    },\\n    \\"security_group_id\\": \\"sg-2ze60ockeekspl3d****\\",\\n    \\"platform\\": \\"AliyunLinux\\",\\n    \\"ram_policy\\": \\"KubernetesWorkerRole-021dc54f-929b-437a-8ae0-34c24d3e****\\",\\n    \\"instance_patterns\\": [\\n      {\\n        \\"core\\": 4,\\n        \\"memory\\": 8,\\n        \\"instance_family_level\\": \\"EnterpriseLevel\\",\\n        \\"max_price\\": 2,\\n        \\"architectures\\": [\\n          \\"X86\\"\\n        ],\\n        \\"burst_performance_option\\": \\"Exclude\\",\\n        \\"excluded_instance_types\\": [\\n          \\"ecs.c6.large\\"\\n        ]\\n      }\\n    ]\\n  },\\n  \\"node_config\\": {\\n    \\"kubelet_configuration\\": {\\n      \\"registryPullQPS\\": 5,\\n      \\"registryBurst\\": 10,\\n      \\"eventRecordQPS\\": 5,\\n      \\"eventBurst\\": 10,\\n      \\"kubeAPIQPS\\": 5,\\n      \\"kubeAPIBurst\\": 10,\\n      \\"serializeImagePulls\\": true,\\n      \\"cpuManagerPolicy\\": \\"none\\",\\n      \\"evictionHard\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"evictionSoft\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"evictionSoftGracePeriod\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"systemReserved\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"kubeReserved\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"readOnlyPort\\": 0,\\n      \\"maxPods\\": 110,\\n      \\"containerLogMaxSize\\": \\"10Mi\\",\\n      \\"containerLogMaxFiles\\": 5,\\n      \\"featureGates\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"allowedUnsafeSysctls\\": [\\n        \\"\\"\\n      ]\\n    }\\n  },\\n  \\"kubernetes_config\\": {\\n    \\"labels\\": [\\n      {\\n        \\"key\\": \\"env\\",\\n        \\"value\\": \\"prod\\"\\n      }\\n    ],\\n    \\"taints\\": [\\n      {\\n        \\"key\\": \\"key\\",\\n        \\"value\\": \\"value\\",\\n        \\"effect\\": \\"NoSchedule\\"\\n      }\\n    ],\\n    \\"runtime\\": \\"docker\\",\\n    \\"runtime_version\\": \\"19.03.5\\",\\n    \\"cpu_policy\\": \\"none\\",\\n    \\"user_data\\": \\"IyEvYmluL3NoCmVjaG8gIkhlbGxvIEFDSyEi\\",\\n    \\"unschedulable\\": true,\\n    \\"cms_enabled\\": true,\\n    \\"node_name_mode\\": \\"customized,test.,5,.com\\"\\n  },\\n  \\"tee_config\\": {\\n    \\"tee_enable\\": false\\n  },\\n  \\"interconnect_config\\": {\\n    \\"cen_id\\": \\"cen-ey9k9nfhz0f*******\\",\\n    \\"ccn_id\\": \\"ccn-qm5i0i0q9yi*******\\",\\n    \\"ccn_region_id\\": \\"cn-shanghai\\",\\n    \\"bandwidth\\": 10,\\n    \\"improved_period\\": \\"1\\"\\n  },\\n  \\"max_nodes\\": 10,\\n  \\"interconnect_mode\\": \\"basic\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeClusterNodePoolDetailResponse>\\n    <auto_scaling>\\n        <eip_bandwidth>5</eip_bandwidth>\\n        <eip_internet_charge_type>PayByBandwidth</eip_internet_charge_type>\\n        <enable>true</enable>\\n        <is_bond_eip>true</is_bond_eip>\\n        <max_instances>10</max_instances>\\n        <min_instances>1</min_instances>\\n        <type>cpu</type>\\n    </auto_scaling>\\n    <kubernetes_config>\\n        <cms_enabled>true</cms_enabled>\\n        <cpu_policy>none</cpu_policy>\\n        <labels>\\n            <key>env</key>\\n            <value>prod</value>\\n        </labels>\\n        <runtime>docker</runtime>\\n        <runtime_version>19.03.5</runtime_version>\\n        <taints>\\n            <key>key</key>\\n            <value>value</value>\\n            <effect>NoSchedule</effect>\\n        </taints>\\n        <user_data>IyEvYmluL3NoCmVjaG8gIkhlbGxvIEFDSyEi</user_data>\\n        <node_name_mode>customized,test.,5,.com</node_name_mode>\\n    </kubernetes_config>\\n    <nodepool_info>\\n        <created>2020-09-27T19:14:09.156823496+08:00</created>\\n        <is_default>true</is_default>\\n        <name>default-nodepool</name>\\n        <nodepool_id>np615c0e0966124216a0412e10afe0****</nodepool_id>\\n        <region_id>cn-beijing</region_id>\\n        <resource_group_id>rg-acfmyvw3wjmb****</resource_group_id>\\n        <type>ess</type>\\n        <updated>2020-09-27T20:37:46+08:00</updated>\\n    </nodepool_info>\\n    <scaling_group>\\n        <auto_renew>false</auto_renew>\\n        <auto_renew_period>1</auto_renew_period>\\n        <data_disks>\\n            <category>cloud_ssd</category>\\n            <size>40</size>\\n            <encrypted>true</encrypted>\\n            <auto_snapshot_policy_id>sp-2zej1nogjvovnz4z****</auto_snapshot_policy_id>\\n            <performance_level>PL1</performance_level>\\n            <provisioned_iops>1000</provisioned_iops>\\n            <bursting_enabled>true</bursting_enabled>\\n            <auto_format>true</auto_format>\\n            <file_system>ext4</file_system>\\n            <mount_target>/mnt/path1</mount_target>\\n        </data_disks>\\n        <image_id>aliyun_2_1903_x64_20G_alibase_20200529.vhd</image_id>\\n        <instance_charge_type>PostPaid</instance_charge_type>\\n        <instance_types>ecs.n4.large</instance_types>\\n        <multi_az_policy>BALANCE</multi_az_policy>\\n        <on_demand_base_capacity>0</on_demand_base_capacity>\\n        <on_demand_percentage_above_base_capacity>20</on_demand_percentage_above_base_capacity>\\n        <spot_instance_pools>5</spot_instance_pools>\\n        <spot_instance_remedy>false</spot_instance_remedy>\\n        <compensate_with_on_demand>true</compensate_with_on_demand>\\n        <period>0</period>\\n        <period_unit>Month</period_unit>\\n        <platform>AliyunLinux</platform>\\n        <ram_policy>KubernetesWorkerRole-021dc54f-929b-437a-8ae0-34c24d3e****</ram_policy>\\n        <spot_strategy>NoSpot</spot_strategy>\\n        <spot_price_limit>\\n            <instance_type>ecs.c6.large</instance_type>\\n            <price_limit>0.39</price_limit>\\n        </spot_price_limit>\\n        <rds_instances>rm-xxx</rds_instances>\\n        <scaling_group_id>asg-2zeieod8giqmov7z****</scaling_group_id>\\n        <scaling_policy>release</scaling_policy>\\n        <security_group_id>sg-2ze60ockeekspl3d****</security_group_id>\\n        <security_group_ids>sg-2ze60ockeekspl3d****</security_group_ids>\\n        <system_disk_category>cloud_efficiency</system_disk_category>\\n        <system_disk_size>120</system_disk_size>\\n        <system_disk_performance_level>PL1</system_disk_performance_level>\\n        <tags>\\n            <key>env</key>\\n            <value>prod</value>\\n        </tags>\\n        <vswitch_ids>vsw-2ze3ds0mdip0hdz8i****</vswitch_ids>\\n        <login_password>********</login_password>\\n        <key_pair>pro-nodepool</key_pair>\\n        <internet_charge_type>PayByBandwidth</internet_charge_type>\\n        <internet_max_bandwidth_out>10</internet_max_bandwidth_out>\\n        <deploymentset_id>ds-bp1d19mmbsv3jf6xxxxx</deploymentset_id>\\n        <desired_size>2</desired_size>\\n        <private_pool_options>\\n            <id>eap-bp67acfmxazb4****</id>\\n            <match_criteria>Open</match_criteria>\\n        </private_pool_options>\\n    </scaling_group>\\n    <status>\\n        <failed_nodes>0</failed_nodes>\\n        <healthy_nodes>3</healthy_nodes>\\n        <initial_nodes>0</initial_nodes>\\n        <offline_nodes>0</offline_nodes>\\n        <removing_nodes>0</removing_nodes>\\n        <serving_nodes>3</serving_nodes>\\n        <state>active</state>\\n        <total_nodes>3</total_nodes>\\n    </status>\\n    <tee_config>\\n        <tee_enable>false</tee_enable>\\n    </tee_config>\\n    <management>\\n        <enable>true</enable>\\n        <auto_repair>true</auto_repair>\\n        <upgrade_config>\\n            <auto_upgrade>true</auto_upgrade>\\n            <surge>5</surge>\\n            <surge_percentage>50</surge_percentage>\\n            <max_unavailable>1</max_unavailable>\\n        </upgrade_config>\\n        <auto_repair_policy>\\n            <restart_node>true</restart_node>\\n        </auto_repair_policy>\\n        <auto_vul_fix>true</auto_vul_fix>\\n        <auto_vul_fix_policy>\\n            <restart_node>true</restart_node>\\n            <vul_level>asap,nntf</vul_level>\\n        </auto_vul_fix_policy>\\n        <auto_upgrade>true</auto_upgrade>\\n        <auto_upgrade_policy>\\n            <auto_upgrade_kubelet>true</auto_upgrade_kubelet>\\n        </auto_upgrade_policy>\\n    </management>\\n    <interconnect_config>\\n        <cen_id>cen-ey9k9nfhz0f*******</cen_id>\\n        <ccn_id>ccn-qm5i0i0q9yi*******</ccn_id>\\n        <ccn_region_id>cn-shanghai</ccn_region_id>\\n        <bandwidth>10</bandwidth>\\n        <improved_period>1</improved_period>\\n    </interconnect_config>\\n    <interconnect_mode>basic</interconnect_mode>\\n    <max_nodes>10</max_nodes>\\n    <node_config>\\n        <kubelet_configuration>\\n            <registryPullQPS>5</registryPullQPS>\\n            <registryBurst>10</registryBurst>\\n            <eventRecordQPS>5</eventRecordQPS>\\n            <eventBurst>10</eventBurst>\\n            <kubeAPIQPS>5</kubeAPIQPS>\\n            <kubeAPIBurst>10</kubeAPIBurst>\\n            <serializeImagePulls>true</serializeImagePulls>\\n            <cpuManagerPolicy>none</cpuManagerPolicy>\\n            <readOnlyPort>0</readOnlyPort>\\n            <maxPods>110</maxPods>\\n            <containerLogMaxSize>10Mi</containerLogMaxSize>\\n            <containerLogMaxFiles>5</containerLogMaxFiles>\\n        </kubelet_configuration>\\n    </node_config>\\n</DescribeClusterNodePoolDetailResponse>","errorExample":""}]',
      'title' => '查询节点池配置',
    ),
    'DescribeClusterNodePools' => 
    array (
      'summary' => '您可以调用DescribeClusterNodePools接口，查询集群的节点池列表及节点池详细信息。',
      'path' => '/clusters/{ClusterId}/nodepools',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '556',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcsk4HGX7D',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc0f87de0b8fb403f86e10e204f83****',
          ),
        ),
        1 => 
        array (
          'name' => 'NodepoolName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点池名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'nodepool-test
',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回数据体',
            'description' => '节点池详情。',
            'type' => 'object',
            'properties' => 
            array (
              'nodepools' => 
              array (
                'title' => '节点池列表',
                'description' => '节点池实例列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '节点池实例详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'nodepool_info' => 
                    array (
                      'title' => '节点池详情。',
                      'description' => '节点池信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'nodepool_id' => 
                        array (
                          'title' => '节点池ID。',
                          'description' => '节点池ID。',
                          'type' => 'string',
                          'example' => 'np615c0e0966124216a0412e10afe0****',
                        ),
                        'name' => 
                        array (
                          'title' => '节点池名称。',
                          'description' => '节点池名称。

命名规则：由数字、汉字、英文字符或短划线（-）组成，长度范围1~63个字符，且不能以短划线（-）开头。',
                          'type' => 'string',
                          'example' => 'default-nodepool',
                        ),
                        'type' => 
                        array (
                          'title' => '节点池类型。',
                          'description' => '节点池类型。取值：
- `edge`：边缘节点池。
- `ess`：云端节点池。',
                          'type' => 'string',
                          'example' => 'ess',
                        ),
                        'is_default' => 
                        array (
                          'title' => '是否为默认节点池。',
                          'description' => '是否为默认节点池，通常一个集群仅有一个默认节点池。取值：

- `true`：设置为默认节点池。
- `false`：不设置为默认节点池。

',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'resource_group_id' => 
                        array (
                          'title' => '节点池所属资源组ID。',
                          'description' => '资源组ID。',
                          'type' => 'string',
                          'example' => 'rg-acfmyvw3wjm****',
                        ),
                        'region_id' => 
                        array (
                          'title' => '节点池所属地域ID。',
                          'description' => '地域ID。',
                          'type' => 'string',
                          'example' => 'cn-beijing',
                        ),
                        'created' => 
                        array (
                          'title' => '节点池创建时间。',
                          'description' => '节点池创建时间。',
                          'type' => 'string',
                          'example' => '2020-09-27T19:14:09.156823496+08:00',
                        ),
                        'updated' => 
                        array (
                          'title' => '节点池更新时间。',
                          'description' => '节点池更新时间。',
                          'type' => 'string',
                          'example' => '2020-09-27T20:37:46+08:00',
                        ),
                      ),
                    ),
                    'status' => 
                    array (
                      'title' => '节点池状态。',
                      'description' => '节点池状态信息。	',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'state' => 
                        array (
                          'title' => '节点池状态。',
                          'description' => '节点池状态，取值：

- `active`：已激活。
- `scaling`：伸缩中。
- `removing`：节点移除中。
- `deleting`：删除中。
- `updating`：更新中。',
                          'type' => 'string',
                          'example' => 'active',
                        ),
                        'healthy_nodes' => 
                        array (
                          'title' => '处于健康状态节点数。',
                          'description' => '处于健康状态实例数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '3',
                        ),
                        'initial_nodes' => 
                        array (
                          'title' => '正在初始化节点数。',
                          'description' => '正在创建的节点数。	',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'failed_nodes' => 
                        array (
                          'title' => '失败节点数。',
                          'description' => '失败实例数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'offline_nodes' => 
                        array (
                          'title' => '离线节点数量。',
                          'description' => '离线节点数。	',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'removing_nodes' => 
                        array (
                          'title' => '正在被移除节点数。',
                          'description' => '正在被移除的节点数。	',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'serving_nodes' => 
                        array (
                          'title' => '工作节点数量。',
                          'description' => '处于工作状态的节点数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '3',
                        ),
                        'total_nodes' => 
                        array (
                          'title' => '总节点数。',
                          'description' => '节点池内节点数量。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '3',
                        ),
                      ),
                    ),
                    'auto_scaling' => 
                    array (
                      'title' => '节点池自动伸缩信息。',
                      'description' => '自动伸缩配置。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'enable' => 
                        array (
                          'title' => '是否启用自动伸缩。',
                          'description' => '是否启用自动伸缩，取值：

- `true`：开启节点池自动伸缩功能。
- `false`：不开启自动伸缩，当取值为`false`时，`auto_scaling`内的其他配置参数将不生效。

',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'type' => 
                        array (
                          'title' => '扩容组类型',
                          'description' => '自动伸缩类型，按照自动伸缩实例类型划分。取值：

- `cpu`：普通实例型。
- `gpu`：GPU实例型。
- `gpushare`：GPU共享型。
- `spot`：抢占式实例型。
',
                          'type' => 'string',
                          'example' => 'cpu',
                        ),
                        'max_instances' => 
                        array (
                          'title' => '最大实例数。',
                          'description' => '最大实例数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '10',
                        ),
                        'min_instances' => 
                        array (
                          'title' => '最小实例数。',
                          'description' => '最小实例数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2',
                        ),
                        'eip_internet_charge_type' => 
                        array (
                          'title' => 'EIP实例付费类型。',
                          'description' => 'EIP计费类型，取值：

- `PayByBandwidth`：按固定带宽计费。
- `PayByTraffic`：按使用流量计费。
',
                          'type' => 'string',
                          'example' => 'PayByBandwidth',
                        ),
                        'is_bond_eip' => 
                        array (
                          'title' => '是否绑定EIP。',
                          'description' => '是否绑定EIP，取值：

- `true`：绑定EIP。
- `false`：不绑定EIP。

',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'eip_bandwidth' => 
                        array (
                          'title' => 'EIP带宽峰值。',
                          'description' => 'EIP带宽峰值。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '5',
                        ),
                      ),
                    ),
                    'management' => 
                    array (
                      'title' => '托管版节点池配置。',
                      'description' => '托管节点池配置，当前只在专业托管集群中生效。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'enable' => 
                        array (
                          'title' => '是否开启托管版节点池。',
                          'description' => '是否开启托管版节点池，取值：

- `true`：开启托管节点池。
- `false`：不开启托管节点池，只有当`enable=true`时，其他相关配置才生效。
',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'auto_repair' => 
                        array (
                          'title' => '自动修复。',
                          'description' => '自动修复，仅当`enable=true`时生效。

- `true`：自动修复。
- `false`：不自动修复。

',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'auto_repair_policy' => 
                        array (
                          'title' => '自动修复节点策略。',
                          'description' => '自动修复节点策略。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'restart_node' => 
                            array (
                              'title' => '是否允许重启节点。',
                              'description' => '是否允许重启节点。',
                              'type' => 'boolean',
                              'example' => 'true',
                            ),
                          ),
                        ),
                        'auto_vul_fix' => 
                        array (
                          'title' => '是否自动修复CVE。',
                          'description' => '是否自动修复CVE。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'auto_vul_fix_policy' => 
                        array (
                          'title' => '自动修复CVE策略。',
                          'description' => '自动修复CVE策略。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'restart_node' => 
                            array (
                              'title' => '是否允许重启节点。',
                              'description' => '是否允许重启节点。',
                              'type' => 'boolean',
                              'example' => 'true',
                            ),
                            'vul_level' => 
                            array (
                              'title' => '允许自动修复的漏洞级别，以逗号分隔。',
                              'description' => '允许自动修复的漏洞级别，以逗号分隔。',
                              'type' => 'string',
                              'example' => 'asap,nntf',
                            ),
                          ),
                        ),
                        'auto_upgrade' => 
                        array (
                          'title' => '是否自动升级。',
                          'description' => '是否自动升级。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'auto_upgrade_policy' => 
                        array (
                          'title' => '自动升级策略。',
                          'description' => '自动升级策略。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'auto_upgrade_kubelet' => 
                            array (
                              'title' => '是否允许自动升级kubelet。',
                              'description' => '是否允许自动升级kubelet。',
                              'type' => 'boolean',
                              'example' => 'true',
                            ),
                          ),
                        ),
                        'upgrade_config' => 
                        array (
                          'title' => '自动升级配置。',
                          'description' => '自动升级配置，仅当`enable=true`时生效。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'auto_upgrade' => 
                            array (
                              'title' => '是否启用自动升级，自修复。',
                              'description' => '是否启用自动升级，取值：

- `true`：启用自动升级。
- `false`：不启用自动升级。
',
                              'type' => 'boolean',
                              'example' => 'true',
                            ),
                            'surge' => 
                            array (
                              'title' => '额外节点数量。',
                              'description' => '额外节点数量。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '5',
                            ),
                            'surge_percentage' => 
                            array (
                              'title' => '额外节点比例， 和surge 二选一。',
                              'description' => '设置额外节点数的比例，和`surge`二选一。

额外节点数=额外节点数比例×节点数，例如，设置额外节点数比例为50%，存在的节点数为6，那么将产生的额外节点数=50%×6，也就是将生产3个额外节点数。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '50',
                            ),
                            'max_unavailable' => 
                            array (
                              'title' => '最大不可用节点数量。',
                              'description' => '最大不可用节点数量，取值范围：\\[1,1000\\]

默认值：1。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1',
                            ),
                          ),
                        ),
                      ),
                    ),
                    'scaling_group' => 
                    array (
                      'title' => '节点池扩容组信息。',
                      'description' => '扩容组配置。	',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'scaling_group_id' => 
                        array (
                          'title' => '扩容组ID	',
                          'description' => '伸缩组ID。',
                          'type' => 'string',
                          'example' => 'asg-2ze8n5qw4atggut8****',
                        ),
                        'vswitch_ids' => 
                        array (
                          'title' => '虚拟交换机ID。',
                          'description' => '虚拟交换机ID，取值范围：\\[1,20\\]。

> 为保证高可用性，建议选择不同可用区的虚拟交换机。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '虚拟交换机ID。',
                            'type' => 'string',
                            'example' => 'vsw-2ze3ds0mdip0hdz8i****',
                          ),
                        ),
                        'instance_types' => 
                        array (
                          'title' => '实例规格。',
                          'description' => '节点实例规格列表，您可以选择多个实例规格作为备选，每个节点创建时，将从第一个规格开始尝试购买，直到创建成功。最终购买的实例规格可能随库存变化而不同。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '节点实例规格。',
                            'type' => 'string',
                            'example' => 'ecs.n4.large',
                          ),
                          'example' => 'ecs.n4.large',
                        ),
                        'instance_charge_type' => 
                        array (
                          'title' => '节点付费类型',
                          'description' => '节点池节点付费类型，取值：

- `PrePaid`：预付费。
- `PostPaid`：按量付费。

',
                          'type' => 'string',
                          'example' => 'PostPaid',
                        ),
                        'period' => 
                        array (
                          'title' => '节点包年包月时长。',
                          'description' => '节点包年包月时长，当`instance_charge_type`取值为`PrePaid`时才生效且为必选值。

当`PeriodUnit=Month`时，取值范围：{1, 2 , 3, 6, 12, 24, 36, 48, 60}。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'period_unit' => 
                        array (
                          'title' => '节点包年包月周期。',
                          'description' => '节点付费周期，当`instance_charge_type`取值为`PrePaid`时才生效。

`Month`：以月为计时单位，当前只支持以月为单位。

',
                          'type' => 'string',
                          'example' => 'Month',
                        ),
                        'auto_renew' => 
                        array (
                          'title' => '节点是否开启自动续费',
                          'description' => '节点是否开启自动续费，当`instance_charge_type`取值为`PrePaid`时才生效，取值：

- `true`：自动续费。
- `false`：不自动续费。

',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'auto_renew_period' => 
                        array (
                          'title' => '节点自动续费周期',
                          'description' => '节点自动续费周期。当`instance_charge_type`取值为`PrePaid`时才生效，且为必选值。

当`PeriodUnit=Month`时，取值范围：{1, 2, 3, 6, 12}。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'spot_strategy' => 
                        array (
                          'title' => '抢占式实例类型',
                          'description' => '抢占式实例类型，取值：
- NoSpot：非抢占式实例。
- SpotWithPriceLimit：设置抢占实例价格上限。
- SpotAsPriceGo：系统自动出价，跟随当前市场实际价格。

更多信息，请参见[抢占式实例](~~157759~~)。

',
                          'type' => 'string',
                          'example' => 'NoSpot',
                        ),
                        'spot_price_limit' => 
                        array (
                          'title' => '抢占实例价格上限配置。',
                          'description' => '抢占式实例市场价格区间配置。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '抢占实例市场价格区间配置，可为不同实例规格设置不同的价格区间。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'instance_type' => 
                              array (
                                'title' => '抢占实例规格。',
                                'description' => '抢占式实例规格。',
                                'type' => 'string',
                                'example' => 'ecs.c6.large',
                              ),
                              'price_limit' => 
                              array (
                                'title' => '抢占实例单价。',
                                'description' => '单台实例市场价格区间。

<props="china">单位：元/时。</props>

<props="intl">单位：美元/时。</props>
',
                                'type' => 'string',
                                'example' => '0.39',
                              ),
                            ),
                          ),
                        ),
                        'image_type' => 
                        array (
                          'title' => '操作系统发行版类型，推荐使用该字段指定节点操作系统。取值：CentOS、AliyunLinux、AliyunLinux Qboot、AliyunLinuxUEFI、AliyunLinux3、Windows、WindowsCore、AliyunLinux3Arm64、ContainerOS。',
                          'description' => '操作系统镜像类型。',
                          'type' => 'string',
                          'example' => 'AliyunLinux',
                        ),
                        'image_id' => 
                        array (
                          'title' => '自定义镜像。',
                          'description' => '自定义镜像ID，可通过`DescribeKubernetesVersionMetadata`查询系统支持的镜像。
',
                          'type' => 'string',
                          'example' => 'aliyun_2_1903_x64_20G_alibase_20200529.vhd',
                        ),
                        'system_disk_category' => 
                        array (
                          'title' => '节点系统盘类型。',
                          'description' => '节点系统盘类型，取值：

- `cloud_efficiency`：高效云盘。
- `cloud_ssd`：SSD云盘。
',
                          'type' => 'string',
                          'example' => 'cloud_efficiency',
                        ),
                        'system_disk_categories' => 
                        array (
                          'title' => '系统盘的多磁盘类型。当无法使用高优先级的磁盘类型时，自动尝试下一优先级的磁盘类型创建系统盘。取值范围：cloud：普通云盘。cloud_efficiency：高效云盘。cloud_ssd：SSD云盘。cloud_essd：ESSD云盘。',
                          'description' => '系统盘的多磁盘类型。当无法使用高优先级的磁盘类型时，自动尝试下一优先级的磁盘类型创建系统盘。取值范围：cloud：普通云盘。cloud_efficiency：高效云盘。cloud_ssd：SSD云盘。cloud_essd：ESSD云盘。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'title' => '节点系统盘类型',
                            'description' => '节点系统盘类型。',
                            'type' => 'string',
                            'example' => 'EESSD云盘',
                            'enum' => 
                            array (
                            ),
                          ),
                          'required' => false,
                          'maxItems' => 10,
                        ),
                        'system_disk_size' => 
                        array (
                          'title' => '节点系统盘大小。',
                          'description' => '节点系统盘大小，单位为GiB。

取值范围：\\[20,500\\]。

',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '120',
                        ),
                        'system_disk_performance_level' => 
                        array (
                          'title' => '节点系统盘磁盘性能，只针对ESSD磁盘生效',
                          'description' => '节点系统盘磁盘性能，只针对ESSD云盘生效。',
                          'type' => 'string',
                          'example' => 'PL1',
                        ),
                        'system_disk_encrypted' => 
                        array (
                          'title' => '是否加密系统盘。取值范围：true：加密。false：不加密。',
                          'description' => '是否加密系统盘。取值：

- true：加密。
- false：不加密。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'system_disk_kms_key_id' => 
                        array (
                          'title' => '系统盘使用的KMS密钥ID。',
                          'description' => '系统盘使用的KMS密钥ID。',
                          'type' => 'string',
                          'example' => '0e478b7a-4262-4802-b8cb-00d3fb40****',
                        ),
                        'system_disk_encrypt_algorithm' => 
                        array (
                          'title' => '系统盘采用的加密算法。取值范围：aes-256。',
                          'description' => '系统盘采用的加密算法。取值范围：aes-256。',
                          'type' => 'string',
                          'example' => 'aes-256',
                          'enum' => 
                          array (
                          ),
                        ),
                        'system_disk_bursting_enabled' => 
                        array (
                          'title' => '节点系统盘是否开启Burst（性能突发），磁盘类型为cloud_auto时配置。',
                          'description' => '节点系统盘是否开启Burst（性能突发），磁盘类型为cloud_auto时配置。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'system_disk_provisioned_iops' => 
                        array (
                          'title' => '节点系统盘预配置的读写IOPS，磁盘类型为cloud_auto时配置。',
                          'description' => '节点系统盘预配置的读写IOPS，磁盘类型为cloud_auto时配置。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1000',
                        ),
                        'data_disks' => 
                        array (
                          'title' => '数据盘配置。',
                          'description' => '节点数据盘类型、大小等配置的组合。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '节点数据盘配置。',
                            '$ref' => '#/components/schemas/data_disk',
                          ),
                        ),
                        'security_group_ids' => 
                        array (
                          'title' => '多安全组ID',
                          'description' => '节点池安全组ID列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '节点池安全组ID列表。',
                            'type' => 'string',
                            'example' => 'sg-2ze1iuk12m2sb4c4****',
                          ),
                        ),
                        'key_pair' => 
                        array (
                          'title' => '密钥对名称，和login_password二选一。',
                          'description' => '密钥对名称，和`login_password`二选一。

当节点池为托管版节点池时，只支持`key_pair`。',
                          'type' => 'string',
                          'example' => 'pro-nodepool',
                        ),
                        'login_password' => 
                        array (
                          'title' => 'SSH登录密码。',
                          'description' => 'SSH登录密码，和`key_pair`二选一。密码规则为8~30个字符，且至少同时包含三项（大小写字母、数字和特殊符号）。

出于安全性考虑，密码查询结果经过加密处理。',
                          'type' => 'string',
                          'example' => '******',
                        ),
                        'login_as_non_root' => 
                        array (
                          'title' => '弹出的ECS实例是否使用以非root用户登陆。',
                          'description' => '弹出的ECS实例是否使用以非root用户登录。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'cis_enabled' => 
                        array (
                          'title' => '【已废弃】请使用security_hardening_os参数代替',
                          'description' => '【已废弃】请使用参数security_hardening_os替代。',
                          'type' => 'boolean',
                          'deprecated' => true,
                          'example' => 'false',
                        ),
                        'soc_enabled' => 
                        array (
                          'title' => '是否开启等保加固，仅当系统镜像选择Alibaba Cloud Linux 2或Alibaba Cloud Linux 3时，可为节点开启等保加固。阿里云为Alibaba Cloud Linux 2和Alibaba Cloud Linux 3等保2.0三级版镜像提供等保合规的基线检查标准和扫描程序。',
                          'description' => '是否开启等保加固，仅当系统镜像选择Alibaba Cloud Linux 2或Alibaba Cloud Linux 3时，可为节点开启等保加固。阿里云为Alibaba Cloud Linux 2和Alibaba Cloud Linux 3等保2.0三级版镜像提供等保合规的基线检查标准和扫描程序。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'security_hardening_os' => 
                        array (
                          'title' => '是否开启阿里云OS安全加固。',
                          'description' => '阿里云OS安全加固。取值：

- `true`：开启阿里云OS安全加固。
- `false`：不开启阿里云OS安全加固。

默认值：`false`。',
                          'type' => 'boolean',
                        ),
                        'internet_charge_type' => 
                        array (
                          'title' => '节点公网IP网络计费类型',
                          'description' => '节点公网IP网络计费类型。',
                          'type' => 'string',
                          'example' => 'PayByBandwidth',
                        ),
                        'internet_max_bandwidth_out' => 
                        array (
                          'title' => '节点公网IP出带宽最大值，单位为Mbps（Mega bit per second），取值范围：1~100',
                          'description' => '节点公网IP出带宽最大值，单位为Mbps（Mega bit per second），取值范围：1~100。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '10',
                        ),
                        'tags' => 
                        array (
                          'title' => 'ECS标签',
                          'description' => '仅为ECS实例添加标签。

标签键不可以重复，最大长度为128个字符；标签键和标签值都不能以“aliyun”、“acs:”开头，或包含“https://”、“http://”。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '节点标签。',
                            '$ref' => '#/components/schemas/tag',
                          ),
                        ),
                        'desired_size' => 
                        array (
                          'title' => '节点池期望节点数',
                          'description' => '节点池期望节点数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2',
                        ),
                        'multi_az_policy' => 
                        array (
                          'title' => '多可用区伸缩组ECS实例扩缩容策略',
                          'description' => '多可用区伸缩组ECS实例扩缩容策略。取值：

- `PRIORITY`：根据您定义的虚拟交换机（VSwitchIds.N）扩缩容。当优先级较高的虚拟交换机所在可用区无法创建ECS实例时，自动使用下一优先级的虚拟交换机创建ECS实例。

- `COST_OPTIMIZED`：按vCPU单价从低到高进行尝试创建。当伸缩配置设置了抢占式计费方式的多实例规格时，优先创建对应抢占式实例。您可以继续通过`CompensateWithOnDemand`参数指定当抢占式实例由于库存等原因无法创建时，是否自动尝试以按量付费的方式创建。

  >`COST_OPTIMIZED`仅在伸缩配置设置了多实例规格或者选用了抢占式实例的情况下生效。

- `BALANCE`：在伸缩组指定的多可用区之间均匀分配ECS实例。如果由于库存不足等原因可用区之间变得不平衡，您可以通过API `RebalanceInstances`平衡资源。更多信息，请参见[RebalanceInstances](~~71516~~)。

',
                          'type' => 'string',
                          'example' => 'COST_OPTIMIZED',
                        ),
                        'scaling_policy' => 
                        array (
                          'title' => '扩容策略。',
                          'description' => '伸缩组模式，取值：

- `release`：标准模式，根据申请资源值的使用量，通过创建、释放ECS的方式进行伸缩。
- `recycle`：极速模式，通过创建、停机、启动的方式进行伸缩，提高再次伸缩的速度（停机时计算资源不收费，只收取存储费用，本地盘机型除外）。',
                          'type' => 'string',
                          'example' => 'release',
                        ),
                        'on_demand_base_capacity' => 
                        array (
                          'title' => '伸缩组所需要按量实例个数的最小值，取值范围：0~1000。当按量实例个数少于该值时，将优先创建按量实例。',
                          'description' => '伸缩组所需要按量实例个数的最小值，取值范围：\\[0,1000\\]。当按量实例个数少于该值时，将优先创建按量实例。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'on_demand_percentage_above_base_capacity' => 
                        array (
                          'title' => '伸缩组满足最小按量实例数（OnDemandBaseCapacity）要求后，超出的实例中按量实例应占的比例，取值范围：0～100。',
                          'description' => '伸缩组满足最小按量实例数（`on_demand_base_capacity`）要求后，超出的实例中按量实例应占的比例。取值范围：\\[0,100\\]。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '20',
                        ),
                        'spot_instance_pools' => 
                        array (
                          'title' => '指定可用实例规格的个数，伸缩组将按成本最低的多个规格均衡创建抢占式实例。取值范围：1~10。',
                          'description' => '指定可用实例规格的个数，伸缩组将按成本最低的多个规格均衡创建抢占式实例。取值范围：\\[1,10\\]。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '5',
                        ),
                        'spot_instance_remedy' => 
                        array (
                          'title' => '是否开启补齐抢占式实例。开启后，当收到抢占式实例将被回收的系统消息时，伸缩组将尝试创建新的实例，替换掉将被回收的抢占式实例。',
                          'description' => '是否开启补齐抢占式实例。开启后，当收到抢占式实例将被回收的系统消息时，伸缩组将尝试创建新的实例，替换掉将被回收的抢占式实例。取值：

- `true`：开启补齐抢占式实例。
- `false`：不开启补齐抢占式实例。

',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'compensate_with_on_demand' => 
                        array (
                          'title' => '当MultiAZPolicy取值为COST_OPTIMIZED时，如果因价格、库存等原因无法创建足够的抢占式实例，是否允许自动尝试创建按量实例满足ECS实例数量要求。取值范围：true：允许。false：不允许。默认值：true',
                          'description' => '当`multi_az_policy`取值为`COST_OPTIMIZED`时，如果因价格、库存等原因无法创建足够的抢占式实例，是否允许自动尝试创建按量实例满足ECS实例数量要求。取值：

- `true`：允许自动尝试创建按量实例满足ECS实例数量要求。
- `false`：不允许自动尝试创建按量实例满足ECS实例数量要求。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'deploymentset_id' => 
                        array (
                          'title' => '部署集ID。',
                          'description' => '部署集ID。',
                          'type' => 'string',
                          'example' => 'ds-bp1d19mmbsv3jf6xxxxx',
                        ),
                        'rds_instances' => 
                        array (
                          'title' => 'RDS实例列表。',
                          'description' => '如果指定了RDS实例列表，集群节点ECS会自动加入RDS访问白名单。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => 'RDS实例。',
                            'type' => 'string',
                            'example' => 'rm-xxx',
                          ),
                        ),
                        'private_pool_options' => 
                        array (
                          'title' => '私有池选项。',
                          'description' => '私有池选项。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'id' => 
                            array (
                              'title' => '私有池ID。即弹性保障服务ID或容量预定服务ID。',
                              'description' => '私有池ID。即弹性保障服务ID或容量预定服务ID。',
                              'type' => 'string',
                              'example' => 'eap-bp67acfmxazb4****',
                            ),
                            'match_criteria' => 
                            array (
                              'title' => '实例启动的私有池容量选项。弹性保障服务或容量预定服务在生效后会生成私有池容量，供实例启动时选择。取值范围：  Open：开放模式。将自动匹配开放类型的私有池容量。如果没有符合条件的私有池容量，则使用公共池资源启动。该模式下无需设置PrivatePoolOptions.Id参数。  Target：指定模式。使用指定的私有池容量启动实例，如果该私有池容量不可用，则实例会启动失败。该模式下必须指定私有池ID，即PrivatePoolOptions.Id参数为必填项。  None：不使用模式。实例启动将不使用私有池容量。',
                              'description' => '私有节点池类型，实例启动的私有池容量选项。弹性保障服务或容量预定服务在生效后会生成私有池容量，供实例启动时选择。取值：

- `Open`：开放模式。将自动匹配开放类型的私有池容量。如果没有符合条件的私有池容量，则使用公共池资源启动。

- `Target`：指定模式。使用指定的私有池容量启动实例，如果该私有池容量不可用，则实例会启动失败。

- `None`：不使用模式。实例启动将不使用私有池容量。',
                              'type' => 'string',
                              'example' => 'Open',
                            ),
                          ),
                        ),
                        'security_group_id' => 
                        array (
                          'title' => '【该字段已废弃】请使用security_group_ids替代
安全组ID。',
                          'description' => '节点池安全组ID，当节点池绑定多个安全组时，为`security_group_ids`中的第一个值。',
                          'type' => 'string',
                          'example' => 'sg-2ze1iuk12m2sb4c4****',
                        ),
                        'platform' => 
                        array (
                          'title' => '【该字段已废弃】请使用image_type替代
操作系统发行版，和image_type二选一',
                          'description' => '操作系统发行版。取值：

- `CentOS`
- `AliyunLinux`
- `Windows`
- `WindowsCore`',
                          'type' => 'string',
                          'example' => 'AliyunLinux',
                        ),
                        'ram_policy' => 
                        array (
                          'title' => '节点RAM 角色名称。',
                          'description' => 'Worker RAM角色名称，授权ECS实例为集群Woker节点。',
                          'type' => 'string',
                          'example' => 'KubernetesWorkerRole-021dc54f-929b-437a-8ae0-34c24d3e****',
                        ),
                        'instance_patterns' => 
                        array (
                          'title' => '实例属性',
                          'description' => '实例属性',
                          'type' => 'array',
                          'items' => 
                          array (
                            'title' => '实例属性',
                            'description' => '实例属性',
                            '$ref' => '#/components/schemas/instance_patterns',
                          ),
                        ),
                      ),
                    ),
                    'node_config' => 
                    array (
                      'title' => '节点配置',
                      'description' => '节点配置。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'kubelet_configuration' => 
                        array (
                          'title' => 'Kubelet参数配置。',
                          'description' => 'Kubelet参数配置。',
                          '$ref' => '#/components/schemas/kubelet_config',
                        ),
                      ),
                    ),
                    'kubernetes_config' => 
                    array (
                      'title' => '集群配置',
                      'description' => '集群相关配置。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'labels' => 
                        array (
                          'title' => '节点标签。',
                          'description' => '节点标签，为Kubernetes集群节点添加标签。标签定义规则：

- 标签由区分大小写的键值对组成，您最多可以设置20个标签。
- 标签键不可以重复，最长为64个字符；标签值可以为空，最长为128个字符。标签键和标签值都不能以`aliyun`、`acs:`、`https://`或`http://`开头。更多信息，请参见[Labels and Selectors](https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/#syntax-and-character-set)。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '标签配置。',
                            '$ref' => '#/components/schemas/tag',
                          ),
                        ),
                        'taints' => 
                        array (
                          'title' => '污点信息。',
                          'description' => '节点污点信息。污点和容忍度（Toleration）相互配合，可以用来避免Pod被分配到不合适的节点上。更多信息，请参见[taint-and-toleration](https://kubernetes.io/zh/docs/concepts/scheduling-eviction/taint-and-toleration/)。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '节点污点信息。',
                            '$ref' => '#/components/schemas/taint',
                          ),
                        ),
                        'runtime' => 
                        array (
                          'title' => '容器运行时。',
                          'description' => '容器运行时名称。',
                          'type' => 'string',
                          'example' => 'docker',
                        ),
                        'runtime_version' => 
                        array (
                          'title' => '容器运行时版本。',
                          'description' => '容器运行时版本。',
                          'type' => 'string',
                          'example' => '19.03.5',
                        ),
                        'cpu_policy' => 
                        array (
                          'title' => 'CPU管理策略。',
                          'description' => '节点CPU管理策略。当集群版本在1.12.6及以上时支持以下两种策略：

- `static`：允许为节点上具有某些资源特征Pod增强其CPU亲和性和独占性。
- `none`：表示启用现有的默认CPU亲和性方案。',
                          'type' => 'string',
                          'example' => 'none',
                        ),
                        'user_data' => 
                        array (
                          'title' => '节点自定义数据。',
                          'description' => '节点池自定义数据。更多详情，请参见[生成实例自定义数据](~~49121~~)。',
                          'type' => 'string',
                          'example' => 'IyEvYmluL3NoCmVjaG8gIkhlbGxvIEFD****',
                        ),
                        'unschedulable' => 
                        array (
                          'title' => '扩容后的节点是否可调度。',
                          'description' => '扩容后的节点是否可调度。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'cms_enabled' => 
                        array (
                          'title' => '是否开启云监控。',
                          'description' => '是否在ECS节点上安装云监控，安装后可以在云监控控制台查看所创建ECS实例的监控信息，推荐开启。取值：

- `true`：在ECS节点上安装云监控。
- `false`：不在ECS节点上安装云监控

',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'node_name_mode' => 
                        array (
                          'title' => '自定义节点名称',
                          'description' => '节点名称由三部分组成：前缀 \\+ 节点 IP 地址子串 \\+ 后缀：

- 前缀和后缀均可由“.”分隔的一个或多个部分构成，每个部分可以使用小写字母、数字和“-”，节点名称首尾必须为小写字母和数字；
- IP 地址段长度指截取节点 IP 地址末尾的位数，取值范围 5-12

例如：节点 IP 地址为：192.168.0.55，指定前缀为 aliyun.com，IP 地址段长度为 5，后缀为 test，则节点名称为 aliyun.com00055test',
                          'type' => 'string',
                          'example' => 'customized,test.,5,.com',
                        ),
                      ),
                    ),
                    'tee_config' => 
                    array (
                      'title' => '加密计算节点池信息。',
                      'description' => '加密计算配置。	',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'tee_enable' => 
                        array (
                          'title' => '是否为加密计算节点池。',
                          'description' => '是否开启加密计算集群，取值：

- `true`：开启。
- `false`：不开启。
',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                      ),
                    ),
                    'interconnect_config' => 
                    array (
                      'title' => '边缘节点池网络相关的配置。该值只对edge类型的节点池有意义',
                      'description' => '【该字段已废弃】

边缘节点池网络相关的配置。该值只对edge类型的节点池有意义。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'cen_id' => 
                        array (
                          'title' => '边缘增强型节点池绑定的云企业网实例ID(CENID)',
                          'description' => '【该字段已废弃】

边缘增强型节点池绑定的云企业网实例ID(CENID)。',
                          'type' => 'string',
                          'example' => 'cen-ey9k9nfhz0f*******',
                        ),
                        'ccn_id' => 
                        array (
                          'title' => '边缘增强型节点池绑定的云连接网实例ID(CCNID)',
                          'description' => '【该字段已废弃】

边缘增强型节点池绑定的云连接网实例ID(CCNID)。',
                          'type' => 'string',
                          'example' => 'ccn-qm5i0i0q9yi*******',
                        ),
                        'ccn_region_id' => 
                        array (
                          'title' => '边缘增强型节点池绑定的云连接网实例所属的区域',
                          'description' => '【该字段已废弃】

边缘增强型节点池绑定的云连接网实例所属的区域。',
                          'type' => 'string',
                          'example' => 'cn-shanghai',
                        ),
                        'bandwidth' => 
                        array (
                          'title' => '边缘增强型节点池的网络带宽，单位M',
                          'description' => '【该字段已废弃】

边缘增强型节点池的网络带宽，单位：Mbps。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '10',
                        ),
                        'improved_period' => 
                        array (
                          'title' => '边缘增强型节点池的购买时长，单位月',
                          'description' => '【该字段已废弃】

边缘增强型节点池的购买时长，单位：月。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                      ),
                    ),
                    'max_nodes' => 
                    array (
                      'title' => '边缘节点池允许容纳的最大节点数量. 节点池内可以容纳的最大节点数量，该参数大于等于0。0表示无额外限制(仅受限于集群整体可以容纳的节点数，节点池本身无额外限制)。边缘节点池该参数值往往大于0；ess类型节点池和默认的edge类型节点池该参数值为0',
                      'description' => '边缘节点池允许容纳的最大节点数量. 节点池内可以容纳的最大节点数量，该参数大于等于0。0表示无额外限制（仅受限于集群整体可以容纳的节点数，节点池本身无额外限制）。边缘节点池该参数值往往大于0；ess类型节点池和默认的edge类型节点池该参数值为0',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '10',
                    ),
                    'interconnect_mode' => 
                    array (
                      'title' => '边缘节点池的网络类型。basic：基础型；improved：增强型。该值只对edge类型的节点池有意义',
                      'description' => '边缘节点池的网络类型。basic：基础型；dedicated：专用型。该值只对edge类型的节点池有意义。',
                      'type' => 'string',
                      'example' => 'basic',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"nodepools\\": [\\n    {\\n      \\"nodepool_info\\": {\\n        \\"nodepool_id\\": \\"np615c0e0966124216a0412e10afe0****\\",\\n        \\"name\\": \\"default-nodepool\\",\\n        \\"type\\": \\"ess\\",\\n        \\"is_default\\": true,\\n        \\"resource_group_id\\": \\"rg-acfmyvw3wjm****\\",\\n        \\"region_id\\": \\"cn-beijing\\",\\n        \\"created\\": \\"2020-09-27T19:14:09.156823496+08:00\\",\\n        \\"updated\\": \\"2020-09-27T20:37:46+08:00\\"\\n      },\\n      \\"status\\": {\\n        \\"state\\": \\"active\\",\\n        \\"healthy_nodes\\": 3,\\n        \\"initial_nodes\\": 0,\\n        \\"failed_nodes\\": 0,\\n        \\"offline_nodes\\": 0,\\n        \\"removing_nodes\\": 0,\\n        \\"serving_nodes\\": 3,\\n        \\"total_nodes\\": 3\\n      },\\n      \\"auto_scaling\\": {\\n        \\"enable\\": true,\\n        \\"type\\": \\"cpu\\",\\n        \\"max_instances\\": 10,\\n        \\"min_instances\\": 2,\\n        \\"eip_internet_charge_type\\": \\"PayByBandwidth\\",\\n        \\"is_bond_eip\\": true,\\n        \\"eip_bandwidth\\": 5\\n      },\\n      \\"management\\": {\\n        \\"enable\\": true,\\n        \\"auto_repair\\": true,\\n        \\"auto_repair_policy\\": {\\n          \\"restart_node\\": true\\n        },\\n        \\"auto_vul_fix\\": true,\\n        \\"auto_vul_fix_policy\\": {\\n          \\"restart_node\\": true,\\n          \\"vul_level\\": \\"asap,nntf\\"\\n        },\\n        \\"auto_upgrade\\": true,\\n        \\"auto_upgrade_policy\\": {\\n          \\"auto_upgrade_kubelet\\": true\\n        },\\n        \\"upgrade_config\\": {\\n          \\"auto_upgrade\\": true,\\n          \\"surge\\": 5,\\n          \\"surge_percentage\\": 50,\\n          \\"max_unavailable\\": 1\\n        }\\n      },\\n      \\"scaling_group\\": {\\n        \\"scaling_group_id\\": \\"asg-2ze8n5qw4atggut8****\\",\\n        \\"vswitch_ids\\": [\\n          \\"vsw-2ze3ds0mdip0hdz8i****\\"\\n        ],\\n        \\"instance_types\\": [\\n          \\"ecs.n4.large\\"\\n        ],\\n        \\"instance_charge_type\\": \\"PostPaid\\",\\n        \\"period\\": 1,\\n        \\"period_unit\\": \\"Month\\",\\n        \\"auto_renew\\": false,\\n        \\"auto_renew_period\\": 0,\\n        \\"spot_strategy\\": \\"NoSpot\\",\\n        \\"spot_price_limit\\": [\\n          {\\n            \\"instance_type\\": \\"ecs.c6.large\\",\\n            \\"price_limit\\": \\"0.39\\"\\n          }\\n        ],\\n        \\"image_type\\": \\"AliyunLinux\\",\\n        \\"image_id\\": \\"aliyun_2_1903_x64_20G_alibase_20200529.vhd\\",\\n        \\"system_disk_category\\": \\"cloud_efficiency\\",\\n        \\"system_disk_categories\\": [\\n          \\"EESSD云盘\\"\\n        ],\\n        \\"system_disk_size\\": 120,\\n        \\"system_disk_performance_level\\": \\"PL1\\",\\n        \\"system_disk_encrypted\\": false,\\n        \\"system_disk_kms_key_id\\": \\"0e478b7a-4262-4802-b8cb-00d3fb40****\\",\\n        \\"system_disk_encrypt_algorithm\\": \\"aes-256\\",\\n        \\"system_disk_bursting_enabled\\": true,\\n        \\"system_disk_provisioned_iops\\": 1000,\\n        \\"data_disks\\": [\\n          {\\n            \\"category\\": \\"cloud_ssd\\",\\n            \\"size\\": 40,\\n            \\"encrypted\\": \\"true\\",\\n            \\"kms_key_id\\": \\"0e478b7a-4262-4802-b8cb-00d3fb40****\\",\\n            \\"auto_snapshot_policy_id\\": \\"sp-2zej1nogjvovnz4z****\\",\\n            \\"performance_level\\": \\"PL1\\",\\n            \\"provisioned_iops\\": 1000,\\n            \\"bursting_enabled\\": true,\\n            \\"auto_format\\": true,\\n            \\"file_system\\": \\"ext4\\",\\n            \\"mount_target\\": \\"/mnt/path1\\",\\n            \\"disk_name\\": \\"DataDiskName\\",\\n            \\"device\\": \\"/dev/xvdb\\",\\n            \\"snapshot_id\\": \\"s-280s7****\\"\\n          }\\n        ],\\n        \\"security_group_ids\\": [\\n          \\"sg-2ze1iuk12m2sb4c4****\\"\\n        ],\\n        \\"key_pair\\": \\"pro-nodepool\\",\\n        \\"login_password\\": \\"******\\",\\n        \\"login_as_non_root\\": true,\\n        \\"cis_enabled\\": false,\\n        \\"soc_enabled\\": false,\\n        \\"security_hardening_os\\": true,\\n        \\"internet_charge_type\\": \\"PayByBandwidth\\",\\n        \\"internet_max_bandwidth_out\\": 10,\\n        \\"tags\\": [\\n          {\\n            \\"key\\": \\"env\\",\\n            \\"value\\": \\"prod\\"\\n          }\\n        ],\\n        \\"desired_size\\": 2,\\n        \\"multi_az_policy\\": \\"COST_OPTIMIZED\\",\\n        \\"scaling_policy\\": \\"release\\",\\n        \\"on_demand_base_capacity\\": 0,\\n        \\"on_demand_percentage_above_base_capacity\\": 20,\\n        \\"spot_instance_pools\\": 5,\\n        \\"spot_instance_remedy\\": false,\\n        \\"compensate_with_on_demand\\": true,\\n        \\"deploymentset_id\\": \\"ds-bp1d19mmbsv3jf6xxxxx\\",\\n        \\"rds_instances\\": [\\n          \\"rm-xxx\\"\\n        ],\\n        \\"private_pool_options\\": {\\n          \\"id\\": \\"eap-bp67acfmxazb4****\\",\\n          \\"match_criteria\\": \\"Open\\"\\n        },\\n        \\"security_group_id\\": \\"sg-2ze1iuk12m2sb4c4****\\",\\n        \\"platform\\": \\"AliyunLinux\\",\\n        \\"ram_policy\\": \\"KubernetesWorkerRole-021dc54f-929b-437a-8ae0-34c24d3e****\\",\\n        \\"instance_patterns\\": [\\n          {\\n            \\"core\\": 4,\\n            \\"memory\\": 8,\\n            \\"instance_family_level\\": \\"EnterpriseLevel\\",\\n            \\"max_price\\": 2,\\n            \\"architectures\\": [\\n              \\"X86\\"\\n            ],\\n            \\"burst_performance_option\\": \\"Exclude\\",\\n            \\"excluded_instance_types\\": [\\n              \\"ecs.c6.large\\"\\n            ]\\n          }\\n        ]\\n      },\\n      \\"node_config\\": {\\n        \\"kubelet_configuration\\": {\\n          \\"registryPullQPS\\": 5,\\n          \\"registryBurst\\": 10,\\n          \\"eventRecordQPS\\": 5,\\n          \\"eventBurst\\": 10,\\n          \\"kubeAPIQPS\\": 5,\\n          \\"kubeAPIBurst\\": 10,\\n          \\"serializeImagePulls\\": true,\\n          \\"cpuManagerPolicy\\": \\"none\\",\\n          \\"evictionHard\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"evictionSoft\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"evictionSoftGracePeriod\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"systemReserved\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"kubeReserved\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"readOnlyPort\\": 0,\\n          \\"maxPods\\": 110,\\n          \\"containerLogMaxSize\\": \\"10Mi\\",\\n          \\"containerLogMaxFiles\\": 5,\\n          \\"featureGates\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"allowedUnsafeSysctls\\": [\\n            \\"\\"\\n          ]\\n        }\\n      },\\n      \\"kubernetes_config\\": {\\n        \\"labels\\": [\\n          {\\n            \\"key\\": \\"env\\",\\n            \\"value\\": \\"prod\\"\\n          }\\n        ],\\n        \\"taints\\": [\\n          {\\n            \\"key\\": \\"key\\",\\n            \\"value\\": \\"value\\",\\n            \\"effect\\": \\"NoSchedule\\"\\n          }\\n        ],\\n        \\"runtime\\": \\"docker\\",\\n        \\"runtime_version\\": \\"19.03.5\\",\\n        \\"cpu_policy\\": \\"none\\",\\n        \\"user_data\\": \\"IyEvYmluL3NoCmVjaG8gIkhlbGxvIEFD****\\",\\n        \\"unschedulable\\": true,\\n        \\"cms_enabled\\": true,\\n        \\"node_name_mode\\": \\"customized,test.,5,.com\\"\\n      },\\n      \\"tee_config\\": {\\n        \\"tee_enable\\": false\\n      },\\n      \\"interconnect_config\\": {\\n        \\"cen_id\\": \\"cen-ey9k9nfhz0f*******\\",\\n        \\"ccn_id\\": \\"ccn-qm5i0i0q9yi*******\\",\\n        \\"ccn_region_id\\": \\"cn-shanghai\\",\\n        \\"bandwidth\\": 10,\\n        \\"improved_period\\": \\"1\\"\\n      },\\n      \\"max_nodes\\": 10,\\n      \\"interconnect_mode\\": \\"basic\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeClusterNodePoolsResponse>\\n    <nodepools>\\n        <auto_scaling>\\n            <eip_bandwidth>5</eip_bandwidth>\\n            <is_bond_eip>true</is_bond_eip>\\n            <eip_internet_charge_type>PayByBandwidth</eip_internet_charge_type>\\n            <enable>true</enable>\\n            <max_instances>10</max_instances>\\n            <min_instances>2</min_instances>\\n            <type>cpu</type>\\n        </auto_scaling>\\n        <kubernetes_config>\\n            <cms_enabled>true</cms_enabled>\\n            <cpu_policy>none</cpu_policy>\\n            <labels>\\n                <key>env</key>\\n                <value>prod</value>\\n            </labels>\\n            <runtime>docker</runtime>\\n            <runtime_version>19.03.5</runtime_version>\\n            <taints>\\n                <key>key</key>\\n                <value>value</value>\\n                <effect>NoSchedule</effect>\\n            </taints>\\n            <user_data>IyEvYmluL3NoCmVjaG8gIkhlbGxvIEFD****</user_data>\\n        </kubernetes_config>\\n        <nodepool_info>\\n            <created>2020-09-27T19:14:09.156823496+08:00</created>\\n            <is_default>true</is_default>\\n            <name>default-nodepool</name>\\n            <nodepool_id>np615c0e0966124216a0412e10afe0****</nodepool_id>\\n            <region_id>cn-beijing</region_id>\\n            <resource_group_id>rg-acfmyvw3wjm****</resource_group_id>\\n            <type>ess</type>\\n            <updated>2020-09-27T20:37:46+08:00</updated>\\n        </nodepool_info>\\n        <scaling_group>\\n            <auto_renew>false</auto_renew>\\n            <auto_renew_period>0</auto_renew_period>\\n            <data_disks>\\n                <category>cloud_ssd</category>\\n                <size>40</size>\\n                <encrypted>true</encrypted>\\n                <auto_snapshot_policy_id>sp-2zej1nogjvovnz4z****</auto_snapshot_policy_id>\\n            </data_disks>\\n            <image_id>aliyun_2_1903_x64_20G_alibase_20200529.vhd</image_id>\\n            <instance_charge_type>PostPaid</instance_charge_type>\\n            <instance_types>ecs.n4.large</instance_types>\\n            <multi_az_policy>COST_OPTIMIZED</multi_az_policy>\\n            <on_demand_base_capacity>0</on_demand_base_capacity>\\n            <on_demand_percentage_above_base_capacity>20</on_demand_percentage_above_base_capacity>\\n            <spot_instance_pools>5</spot_instance_pools>\\n            <spot_instance_remedy>false</spot_instance_remedy>\\n            <compensate_with_on_demand>true</compensate_with_on_demand>\\n            <period>0</period>\\n            <period_unit>Month</period_unit>\\n            <platform>AliyunLinux</platform>\\n            <ram_policy>KubernetesWorkerRole-021dc54f-929b-437a-8ae0-34c24d3e****</ram_policy>\\n            <spot_strategy>NoSpot</spot_strategy>\\n            <spot_price_limit>\\n                <instance_type>ecs.c6.large</instance_type>\\n                <price_limit>0.39</price_limit>\\n            </spot_price_limit>\\n            <rds_instances>rm-xxx</rds_instances>\\n            <scaling_group_id>asg-2ze8n5qw4atggut8****</scaling_group_id>\\n            <scaling_policy>release</scaling_policy>\\n            <security_group_id>sg-2ze1iuk12m2sb4c4****</security_group_id>\\n            <security_group_ids>sg-2ze1iuk12m2sb4c4****</security_group_ids>\\n            <system_disk_category>cloud_efficiency</system_disk_category>\\n            <system_disk_size>120</system_disk_size>\\n            <tags>\\n                <key>env</key>\\n                <value>prod</value>\\n            </tags>\\n            <vswitch_ids>vsw-2ze3ds0mdip0hdz8i****</vswitch_ids>\\n            <login_password>******</login_password>\\n            <key_pair>pro-nodepool</key_pair>\\n            <internet_charge_type>PayByBandwidth</internet_charge_type>\\n            <internet_max_bandwidth_out>10</internet_max_bandwidth_out>\\n        </scaling_group>\\n        <status>\\n            <failed_nodes>0</failed_nodes>\\n            <healthy_nodes>3</healthy_nodes>\\n            <initial_nodes>0</initial_nodes>\\n            <offline_nodes>0</offline_nodes>\\n            <removing_nodes>0</removing_nodes>\\n            <serving_nodes>3</serving_nodes>\\n            <state>active</state>\\n            <total_nodes>3</total_nodes>\\n        </status>\\n        <tee_config>\\n            <tee_enable>false</tee_enable>\\n        </tee_config>\\n        <management>\\n            <enable>true</enable>\\n            <auto_repair>true</auto_repair>\\n            <upgrade_config>\\n                <auto_upgrade>true</auto_upgrade>\\n                <surge>5</surge>\\n                <surge_percentage>50</surge_percentage>\\n                <max_unavailable>1</max_unavailable>\\n            </upgrade_config>\\n        </management>\\n    </nodepools>\\n</DescribeClusterNodePoolsResponse>","errorExample":""}]',
      'title' => '查询节点池列表',
    ),
    'DescribeNodePoolVuls' => 
    array (
      'summary' => '您可以根据节点池ID调用DescribeNodePoolVuls接口查看节点池的安全漏洞详细信息，包括漏洞名称、漏洞等级等。建议您定期扫描节点池的安全漏洞，提高集群安全性。',
      'path' => '/clusters/{cluster_id}/nodepools/{nodepool_id}/vuls',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '119077',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcsk4HGX7D',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'cluster_id',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c17e742cee942410486f237293d66****',
          ),
        ),
        1 => 
        array (
          'name' => 'nodepool_id',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '节点池ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'np38f32fdbc60e4a1e957ffde77846****',
          ),
        ),
        2 => 
        array (
          'name' => 'necessity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的漏洞修复必要性等级。多个等级之间使用半角逗号（,）分隔。取值：

- `asap`：高
- `later`：中
- `nntf`：低',
            'type' => 'string',
            'required' => false,
            'example' => 'asap',
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
              'vul_records' => 
              array (
                'description' => '节点池漏洞列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '单个节点漏洞列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'instance_id' => 
                    array (
                      'description' => '节点实例ID。',
                      'type' => 'string',
                      'example' => 'i-t4n2qolb0wtzt0pz****',
                    ),
                    'vul_list' => 
                    array (
                      'description' => '漏洞列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '漏洞信息',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'name' => 
                          array (
                            'description' => '漏洞名称。',
                            'type' => 'string',
                            'example' => 'oval:com.redhat.rhsa:def:20193197',
                          ),
                          'alias_name' => 
                          array (
                            'description' => '漏洞别名。',
                            'type' => 'string',
                            'example' => 'RHSA-2019:3197-Important: sudo security update',
                          ),
                          'necessity' => 
                          array (
                            'description' => '漏洞等级。',
                            'type' => 'string',
                            'enumValueTitles' => 
                            array (
                              'nntf' => '暂可不修复',
                              'later' => '可延后修复',
                              'asap' => '需尽快修复',
                            ),
                            'example' => 'asap',
                          ),
                          'cve_list' => 
                          array (
                            'description' => '漏洞对应的CVE列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => 'CVE名称。',
                              'type' => 'string',
                              'example' => 'CVE-2017-10268',
                            ),
                          ),
                          'need_reboot' => 
                          array (
                            'title' => '是否需要重启。',
                            'description' => '是否需要重启。',
                            'type' => 'boolean',
                          ),
                        ),
                      ),
                    ),
                    'node_name' => 
                    array (
                      'description' => '节点名称，集群内节点标识。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou.192.168.x.x',
                    ),
                  ),
                ),
              ),
              'vuls_fix_service_purchased' => 
              array (
                'title' => '是否已购买云安全CVE修复服务',
                'description' => '是否已购买云安全CVE修复服务',
                'type' => 'boolean',
                'example' => 'false',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"vul_records\\": [\\n    {\\n      \\"instance_id\\": \\"i-t4n2qolb0wtzt0pz****\\",\\n      \\"vul_list\\": [\\n        {\\n          \\"name\\": \\"oval:com.redhat.rhsa:def:20193197\\",\\n          \\"alias_name\\": \\"RHSA-2019:3197-Important: sudo security update\\",\\n          \\"necessity\\": \\"asap\\",\\n          \\"cve_list\\": [\\n            \\"CVE-2017-10268\\"\\n          ],\\n          \\"need_reboot\\": true\\n        }\\n      ],\\n      \\"node_name\\": \\"cn-hangzhou.192.168.x.x\\"\\n    }\\n  ],\\n  \\"vuls_fix_service_purchased\\": false\\n}","type":"json"}]',
      'title' => '查询节点池漏洞',
    ),
    'ModifyClusterNodePool' => 
    array (
      'summary' => '您可以根据节点池ID，调用ModifyClusterNodePool接口更新目标节点池的配置。',
      'path' => '/clusters/{ClusterId}/nodepools/{NodepoolId}',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '528',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcsk4HGX7D',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c23421cfa74454bc8b37163fd19af****',
          ),
        ),
        1 => 
        array (
          'name' => 'NodepoolId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '节点池ID。',
            'description' => '节点池ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'p31da1b38983f4511b490fc62108a****',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求体参数。',
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'nodepool_info' => 
              array (
                'title' => '节点池配置。',
                'description' => '节点池配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'name' => 
                  array (
                    'title' => '节点池名称。',
                    'description' => '节点池名称。

命名规则：由数字、汉字、英文字符或短划线（-）组成，长度范围1~63个字符，且不能以短划线（-）开头。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'default-nodepool',
                  ),
                  'resource_group_id' => 
                  array (
                    'title' => '资源组ID。',
                    'description' => '资源组ID。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'rg-acfmyvw3wjm****',
                  ),
                ),
                'required' => false,
              ),
              'auto_scaling' => 
              array (
                'title' => '自动伸缩节点池配置。',
                'description' => '自动伸缩配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'enable' => 
                  array (
                    'title' => '是否开启自动伸缩。',
                    'description' => '是否启用自动伸缩，取值：

- `true`：开启节点池自动伸缩功能。
- `false`：不开启自动伸缩，当取值为false时，`auto_scaling`内的其他配置参数将不生效。

默认值：`false`。',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => 'true',
                  ),
                  'type' => 
                  array (
                    'title' => '自动伸缩节点类型。',
                    'description' => '自动伸缩类型，按照自动伸缩实例类型划分。取值：

- `cpu`：普通实例型。
- `gpu`：GPU实例型。
- `gpushare`：GPU共享型。
- `spot`：抢占式实例型。

默认值：`cpu`。',
                    'type' => 'string',
                    'deprecated' => true,
                    'required' => false,
                    'example' => 'cpu',
                  ),
                  'max_instances' => 
                  array (
                    'title' => '最大实例数。',
                    'description' => '最大实例数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => false,
                    'example' => '10',
                  ),
                  'min_instances' => 
                  array (
                    'title' => '最小实例数。',
                    'description' => '最小实例数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => false,
                    'example' => '2',
                  ),
                  'is_bond_eip' => 
                  array (
                    'title' => '是否绑定EIP。',
                    'description' => '是否绑定EIP，取值：

- `true`：绑定EIP。
- `false`：不绑定EIP。

默认值：`false`。',
                    'type' => 'boolean',
                    'deprecated' => true,
                    'required' => false,
                    'example' => 'true',
                  ),
                  'eip_internet_charge_type' => 
                  array (
                    'title' => 'EIP计费类型。',
                    'description' => 'EIP计费类型，取值：

- `PayByBandwidth`：按固定带宽计费。
- `PayByTraffic`：按使用流量计费。

默认值：`PayByBandwidth`。',
                    'type' => 'string',
                    'deprecated' => true,
                    'required' => false,
                    'example' => 'PayByBandwidth',
                  ),
                  'eip_bandwidth' => 
                  array (
                    'title' => '带宽峰值。',
                    'description' => 'EIP带宽峰值。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'deprecated' => true,
                    'required' => false,
                    'example' => '5',
                  ),
                ),
                'required' => false,
              ),
              'management' => 
              array (
                'title' => '托管版节点池配置。',
                'description' => '托管节点池配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'enable' => 
                  array (
                    'title' => '是否启用托管节点池。',
                    'description' => '是否开启托管节点池，取值：

- `true`：开启托管节点池。
- `false`：不开启托管节点池，只有当`enable=true`时，其他相关配置才生效。

默认值：`false`。',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => 'true',
                  ),
                  'auto_repair' => 
                  array (
                    'title' => '是否开启自动修复。',
                    'description' => '是否自动修复，仅当`enable=true`时生效。取值：

- `true`：自动修复。
- `false`：不自动修复。

默认值：`true`。',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => 'true',
                  ),
                  'auto_repair_policy' => 
                  array (
                    'title' => '自动修复节点策略。',
                    'description' => '自动修复节点策略。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'restart_node' => 
                      array (
                        'title' => '是否允许重启节点。',
                        'description' => '是否允许重启节点，取值：

- `true`：允许重启节点。
- `false`：不允许重启节点。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                      ),
                    ),
                    'required' => false,
                  ),
                  'auto_vul_fix' => 
                  array (
                    'title' => '是否自动修复CVE。',
                    'description' => '是否自动修复CVE，取值：

- `true`：允许自动修复CVE。
- `false`：不允许自动修复CVE。',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => 'true',
                  ),
                  'auto_vul_fix_policy' => 
                  array (
                    'title' => '自动修复CVE策略。',
                    'description' => '自动修复CVE策略。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'restart_node' => 
                      array (
                        'title' => '是否允许重启节点。',
                        'description' => '是否允许重启节点，取值：

- `true`：允许重启节点。
- `false`：不允许重启节点。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                      ),
                      'vul_level' => 
                      array (
                        'title' => '允许自动修复的漏洞级别，以逗号分隔。',
                        'description' => '允许自动修复的漏洞级别，以逗号分隔。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'asap,nntf',
                      ),
                    ),
                    'required' => false,
                  ),
                  'auto_upgrade' => 
                  array (
                    'title' => '是否自动升级。',
                    'description' => '是否启用自动升级，取值：

- `true`：启用自动升级。
- `false`：不启用自动升级。
',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => 'true',
                  ),
                  'auto_upgrade_policy' => 
                  array (
                    'title' => '自动升级策略。',
                    'description' => '自动升级策略。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'auto_upgrade_kubelet' => 
                      array (
                        'title' => '是否允许自动升级kubelet。',
                        'description' => '是否允许自动升级kubelet，取值：

- `true`：允许自动升级kubelet。
- `false`：不允许自动升级kubelet。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                      ),
                      'auto_upgrade_runtime' => 
                      array (
                        'title' => '是否允许自动升级运行时。',
                        'description' => '是否允许自动升级运行时，仅当`auto_upgrade=true`时生效。取值：
- `true`：允许自动升级运行时。
- `false`：不允许自动升级运行时。

默认值为`false`',
                        'type' => 'boolean',
                        'required' => false,
                      ),
                      'auto_upgrade_os' => 
                      array (
                        'title' => '是否允许自动升级操作系统。',
                        'description' => '是否允许自动升级操作系统，仅当`auto_upgrade=true`时生效。取值：
- `true`：允许自动升级操作系统。
- `false`：不允许自动升级操作系统。

默认值为`false`',
                        'type' => 'boolean',
                        'required' => false,
                      ),
                    ),
                    'required' => false,
                  ),
                  'upgrade_config' => 
                  array (
                    'title' => '自动升级配置。',
                    'description' => '自动升级配置，仅当`enable=true`时生效。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'auto_upgrade' => 
                      array (
                        'title' => '是否启用自动升级，自修复。',
                        'description' => '是否启用自动升级：

- true：启用。
- false：不启用。

默认值：`true`。',
                        'type' => 'boolean',
                        'deprecated' => true,
                        'required' => false,
                        'example' => 'true',
                      ),
                      'surge' => 
                      array (
                        'title' => '额外节点数量。',
                        'description' => '额外节点数量。升级的时候节点会不可用，您可以创建额外节点补偿集群的负载。

> 建议创建的额外节点不超过当前的节点数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '5',
                      ),
                      'surge_percentage' => 
                      array (
                        'title' => '额外节点比例， 和surge 二选一。',
                        'description' => '额外节点比例，和`surge`二选一。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '0',
                      ),
                      'max_unavailable' => 
                      array (
                        'title' => '最大不可用节点数量。',
                        'description' => '最大不可用节点数量。

取值范围：\\[1,1000\\]

默认值：1。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                      ),
                    ),
                    'deprecated' => true,
                    'required' => false,
                  ),
                ),
                'required' => false,
              ),
              'scaling_group' => 
              array (
                'title' => '扩容组配置。',
                'description' => '扩容组配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'vswitch_ids' => 
                  array (
                    'title' => '节点使用的虚拟交换机ID。',
                    'description' => '虚拟交换机ID列表，取值范围\\[1,20\\]。

> 为保证高可用性，建议选择不同可用区的虚拟交换机。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '虚拟交换机ID。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'vsw-wz9uwxhawmtzg7u9h****',
                    ),
                    'required' => false,
                  ),
                  'instance_types' => 
                  array (
                    'title' => '节点实例规格。',
                    'description' => '节点实例规格列表，您可以选择多个实例规格作为备选，每个节点创建时，将从第一个规格开始尝试购买，直到创建成功。最终购买的实例规格可能随库存变化而不同。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '实例规格。更多信息，请参见[实例规格族](~~25378~~)。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'ecs.c6.large',
                    ),
                    'required' => false,
                  ),
                  'instance_charge_type' => 
                  array (
                    'title' => '节点付费类型。',
                    'description' => '节点池节点付费类型，取值：

- `PrePaid`：预付费
- `PostPaid`：按量付费

默认值：`PostPaid`。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'PostPaid',
                  ),
                  'period' => 
                  array (
                    'title' => '包年包月时长',
                    'description' => '节点包年包月时长，当`instance_charge_type`取值为`PrePaid`时才生效且为必选值。

当`PeriodUnit=Month`时，取值范围：{1, 2 , 3, 6, 12, 24, 36, 48, 60}。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => false,
                    'example' => '1',
                  ),
                  'period_unit' => 
                  array (
                    'title' => '付费周期',
                    'description' => '节点付费周期，当`instance_charge_type`取值为`PrePaid`时时候需要指定周期。

目前只支持以月为计时单位。

默认值：`Month`。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Month',
                  ),
                  'auto_renew' => 
                  array (
                    'title' => '节点池节点是启用自动续费',
                    'description' => '节点是否开启自动续费，当`instance_charge_type`取值为`PrePaid`时才生效。取值：

- `true`：自动续费。
- `false`：不自动续费。

默认值：`true`。',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => 'true',
                  ),
                  'auto_renew_period' => 
                  array (
                    'title' => '节点池节点自动续费周期',
                    'description' => '节点自动续费周期。当`instance_charge_type`取值为`PrePaid`时才生效，且为必选值。

当`PeriodUnit=Month`时，取值范围：{1, 2 , 3, 6, 12}。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => false,
                    'example' => '1',
                  ),
                  'spot_strategy' => 
                  array (
                    'title' => '抢占式实例类型',
                    'description' => '抢占式实例类型，取值：

- `NoSpot`：非抢占式实例。
- `SpotWithPriceLimit`：设置抢占实例价格上限。
- `SpotAsPriceGo`：系统自动出价，跟随当前市场实际价格。

更多信息，请参见[抢占式实例](~~157759~~)。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'SpotWithPriceLimit',
                  ),
                  'spot_price_limit' => 
                  array (
                    'title' => '抢占实例价格上限配置',
                    'description' => '抢占实例市场价格区间配置。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '抢占实例市场价格区间配置。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'instance_type' => 
                        array (
                          'title' => '抢占式实例规格',
                          'description' => '抢占式实例规格。',
                          'type' => 'string',
                          'required' => false,
                          'example' => 'ecs.c6.large',
                        ),
                        'price_limit' => 
                        array (
                          'title' => '单台实例上限价格，单位：元/小时。',
                          'description' => '单台实例上限价格。

<props="china">单位：元/小时。

</props>

<props="intl">单位：美元/小时。</props>
',
                          'type' => 'string',
                          'required' => false,
                          'example' => '0.39',
                        ),
                      ),
                      'required' => false,
                    ),
                    'required' => false,
                  ),
                  'image_type' => 
                  array (
                    'title' => '操作系统发行版类型，推荐使用该字段指定节点操作系统。取值：CentOS、AliyunLinux、AliyunLinux Qboot、AliyunLinuxUEFI、AliyunLinux3、Windows、WindowsCore、AliyunLinux3Arm64、ContainerOS。',
                    'description' => '操作系统发行版类型，推荐使用该字段指定节点操作系统。取值：

- `AliyunLinux`：Alinux2镜像。
- `AliyunLinuxSecurity`：Alinux2镜像UEFI版。
- `AliyunLinux3`：Alinux3镜像。
- `AliyunLinux3Arm64`：Alinux3镜像ARM版。
- `AliyunLinux3Security`：Alinux3镜像UEFI版。
- `CentOS`：CentOS镜像。
- `Windows`：Windows镜像。
- `WindowsCore`：WindowsCore镜像。
- `ContainerOS`：容器优化镜像。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'AliyunLinux',
                  ),
                  'image_id' => 
                  array (
                    'title' => '自定义镜像',
                    'description' => '自定义镜像ID。可通过`DescribeKubernetesVersionMetadata`查询系统支持的镜像，默认使用系统最新镜像。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'aliyun_2_1903_x64_20G_alibase_20200904.vhd',
                  ),
                  'system_disk_category' => 
                  array (
                    'title' => '节点系统盘类型。',
                    'description' => '节点系统盘类型，取值：

- `cloud_efficiency`：高效云盘。
- `cloud_ssd`：SSD云盘。

默认值：`cloud_ssd`。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'cloud_efficiency',
                  ),
                  'system_disk_categories' => 
                  array (
                    'title' => '系统盘的多磁盘类型。当无法使用高优先级的磁盘类型时，自动尝试下一优先级的磁盘类型创建系统盘。取值范围：cloud：普通云盘。cloud_efficiency：高效云盘。cloud_ssd：SSD云盘。cloud_essd：ESSD云盘。',
                    'description' => '系统盘的多磁盘类型。当无法使用高优先级的磁盘类型时，自动尝试下一优先级的磁盘类型创建系统盘。取值范围：cloud：普通云盘。cloud_efficiency：高效云盘。cloud_ssd：SSD云盘。cloud_essd：ESSD云盘。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'title' => '节点系统盘类型',
                      'description' => '节点系统盘类型',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'cloud_essd',
                      'enum' => 
                      array (
                      ),
                    ),
                    'required' => false,
                    'maxItems' => 10,
                  ),
                  'system_disk_size' => 
                  array (
                    'title' => '节点系统盘大小。',
                    'description' => '节点系统盘大小，单位为GiB。

取值范围：\\[20,500\\]。

该参数的取值必须大于或者等于max{20, ImageSize}。

默认值：max{40, 参数ImageId对应的镜像大小}。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => false,
                    'example' => '120',
                  ),
                  'system_disk_performance_level' => 
                  array (
                    'title' => '节点系统盘磁盘性能，只针对ESSD磁盘生效',
                    'description' => '节点系统盘磁盘性能等级， 仅对ESSD磁盘生效。磁盘性能等级和磁盘大小有关。更多信息，请参见[ESSD云盘](~~122389~~)',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'PL1',
                  ),
                  'system_disk_encrypted' => 
                  array (
                    'title' => '是否加密系统盘。取值范围：true：加密。false：不加密。',
                    'description' => '是否加密系统盘。取值范围：true：加密。false：不加密。',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => 'false',
                  ),
                  'system_disk_kms_key_id' => 
                  array (
                    'title' => '系统盘使用的KMS密钥ID。',
                    'description' => '系统盘使用的KMS密钥ID。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '0e478b7a-4262-4802-b8cb-00d3fb40****',
                  ),
                  'system_disk_encrypt_algorithm' => 
                  array (
                    'title' => '系统盘采用的加密算法。取值范围：aes-256。',
                    'description' => '系统盘采用的加密算法。取值范围：aes-256。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'aes-256',
                    'enum' => 
                    array (
                    ),
                  ),
                  'system_disk_provisioned_iops' => 
                  array (
                    'title' => '节点系统盘预配置的读写IOPS，磁盘类型为cloud_auto时配置。',
                    'description' => '节点系统盘预配置的读写IOPS，磁盘类型为cloud_auto时配置。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => false,
                    'example' => '1000',
                  ),
                  'system_disk_bursting_enabled' => 
                  array (
                    'title' => '节点系统盘是否开启Burst（性能突发），磁盘类型为cloud_auto时配置。',
                    'description' => '节点系统盘是否开启Burst（性能突发），磁盘类型为cloud_auto时配置。',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => 'true',
                  ),
                  'data_disks' => 
                  array (
                    'title' => '数据盘配置。',
                    'description' => '节点数据盘配置，取值范围\\[0,10\\]。最多支持添加10块数据盘。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '节点数据盘配置。',
                      'required' => false,
                      '$ref' => '#/components/schemas/data_disk',
                    ),
                    'required' => false,
                  ),
                  'key_pair' => 
                  array (
                    'title' => '密钥对名称，和login_password二选一。',
                    'description' => '密钥对名称，和`login_password`二选一。当节点池为托管版节点池时，只支持`key_pair`。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'pro-nodepool',
                  ),
                  'login_password' => 
                  array (
                    'title' => 'SSH登录密码，和key_pari二选一。',
                    'description' => 'SSH登录密码，和`key_pair`二选一。密码规则为8~30个字符，且至少同时包含三项（大小写字母、数字和特殊符号）。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Hello1234',
                  ),
                  'internet_charge_type' => 
                  array (
                    'title' => '节点公网IP网络计费类型',
                    'description' => '公网IP收费类型。取值：

- `PayByBandwidth`：按固定带宽计费。
- `PayByTraffic`：按使用流量计费。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'PayByBandwidth',
                  ),
                  'internet_max_bandwidth_out' => 
                  array (
                    'title' => '节点公网IP出带宽最大值，单位为Mbps（Mega bit per second），取值范围：1~100',
                    'description' => '节点公网IP出带宽最大值，单位为Mbps（Mega bit per second），取值范围：\\[1,100\\]。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => false,
                    'example' => '5',
                  ),
                  'tags' => 
                  array (
                    'title' => 'ECS标签。',
                    'description' => '仅为ECS实例添加标签。

标签键不可以重复，最大长度为128个字符；标签键和标签值都不能以“aliyun”、“acs:”开头，或包含“https://”、“http://”。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'ECS实例标签。',
                      'required' => false,
                      '$ref' => '#/components/schemas/tag',
                    ),
                    'required' => false,
                  ),
                  'desired_size' => 
                  array (
                    'title' => '节点池期望节点数',
                    'description' => '节点池期望节点数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => false,
                    'example' => '2',
                  ),
                  'multi_az_policy' => 
                  array (
                    'title' => '多可用区伸缩组ECS实例扩缩容策略',
                    'description' => '多可用区伸缩组ECS实例扩缩容策略。取值：

- `PRIORITY`：根据您定义的虚拟交换机（VSwitchIds.N）扩缩容。当优先级较高的虚拟交换机所在可用区无法创建ECS实例时，自动使用下一优先级的虚拟交换机创建ECS实例。

- `COST_OPTIMIZED`：按vCPU单价从低到高进行尝试创建。当伸缩配置设置了抢占式计费方式的多实例规格时，优先创建对应抢占式实例。您可以继续通过`CompensateWithOnDemand`参数指定当抢占式实例由于库存等原因无法创建时，是否自动尝试以按量付费的方式创建。

  > `COST_OPTIMIZED`仅在伸缩配置设置了多实例规格或者选用了抢占式实例的情况下生效。

- `BALANCE`：在伸缩组指定的多可用区之间均匀分配ECS实例。如果由于库存不足等原因可用区之间变得不平衡，您可以通过API `RebalanceInstances`平衡资源。更多信息，请参见[RebalanceInstances](~~71516~~)。

默认值：`PRIORITY`。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'BALANCE',
                  ),
                  'scaling_policy' => 
                  array (
                    'title' => '扩容策略。',
                    'description' => '伸缩组模式，取值：

- `release`：标准模式，根据申请资源值的使用量，通过创建、释放ECS的方式进行伸缩。
- `recycle`：极速模式，通过创建、停机、启动的方式进行伸缩，提高再次伸缩的速度（停机时计算资源不收费，只收取存储费用，本地盘机型除外）。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'release',
                  ),
                  'on_demand_base_capacity' => 
                  array (
                    'title' => '伸缩组所需要按量实例个数的最小值，取值范围：0~1000。当按量实例个数少于该值时，将优先创建按量实例。',
                    'description' => '伸缩组所需要按量实例个数的最小值，取值范围：\\[0,1000\\]。当按量实例个数少于该值时，将优先创建按量实例。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => false,
                    'example' => '0',
                  ),
                  'on_demand_percentage_above_base_capacity' => 
                  array (
                    'title' => '伸缩组满足最小按量实例数（OnDemandBaseCapacity）要求后，超出的实例中按量实例应占的比例，取值范围：0～100。',
                    'description' => '伸缩组满足最小按量实例数（`on_demand_base_capacity`）要求后，超出的实例中按量实例应占的比例。取值范围：\\[0,100\\]。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => false,
                    'example' => '20',
                  ),
                  'spot_instance_pools' => 
                  array (
                    'title' => '指定可用实例规格的个数，伸缩组将按成本最低的多个规格均衡创建抢占式实例。取值范围：1~10。',
                    'description' => '指定可用实例规格的个数，伸缩组将按成本最低的多个规格均衡创建抢占式实例。取值范围：\\[1,10\\]。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => false,
                    'example' => '5',
                  ),
                  'spot_instance_remedy' => 
                  array (
                    'title' => '是否开启补齐抢占式实例。开启后，当收到抢占式实例将被回收的系统消息时，伸缩组将尝试创建新的实例，替换掉将被回收的抢占式实例。',
                    'description' => '是否开启补齐抢占式实例。开启后，当收到抢占式实例将被回收的系统消息时，伸缩组将尝试创建新的实例，替换掉将被回收的抢占式实例。取值：

- `true`：开启补齐抢占式实例。
- `false`：不开启补齐抢占式实例。
',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => 'false',
                  ),
                  'compensate_with_on_demand' => 
                  array (
                    'title' => '当MultiAZPolicy取值为COST_OPTIMIZED时，如果因价格、库存等原因无法创建足够的抢占式实例，是否允许自动尝试创建按量实例满足ECS实例数量要求。取值范围：true：允许。false：不允许。默认值：true',
                    'description' => '当`multi_az_policy`取值为`COST_OPTIMIZED`时，如果因价格、库存等原因无法创建足够的抢占式实例，是否允许自动尝试创建按量实例满足ECS实例数量要求。取值：

- `true`：允许自动尝试创建按量实例满足ECS实例数量要求。
- `false`：不允许自动尝试创建按量实例满足ECS实例数量要求。',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => 'true',
                  ),
                  'rds_instances' => 
                  array (
                    'title' => 'RDS实例列表。',
                    'description' => 'RDS实例列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'RDS实例ID。如果指定了RDS实例列表，集群节点ECS会自动加入RDS访问白名单。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'rds-xxx',
                    ),
                    'required' => false,
                  ),
                  'private_pool_options' => 
                  array (
                    'title' => '私有池选项。',
                    'description' => '私有节点池配置。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'id' => 
                      array (
                        'title' => '私有池ID。即弹性保障服务ID或容量预定服务ID。',
                        'description' => '私有节点池ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'eap-bp67acfmxazb4****',
                      ),
                      'match_criteria' => 
                      array (
                        'title' => '实例启动的私有池容量选项。弹性保障服务或容量预定服务在生效后会生成私有池容量，供实例启动时选择。取值范围： Open：开放模式。将自动匹配开放类型的私有池容量。如果没有符合条件的私有池容量，则使用公共池资源启动。该模式下无需设置PrivatePoolOptions.Id参数。 Target：指定模式。使用指定的私有池容量启动实例，如果该私有池容量不可用，则实例会启动失败。该模式下必须指定私有池ID，即PrivatePoolOptions.Id参数为必填项。 None：不使用模式。实例启动将不使用私有池容量。',
                        'description' => '私有节点池类型，实例启动的私有池容量选项。弹性保障服务或容量预定服务在生效后会生成私有池容量，供实例启动时选择。取值：
- `Open`：开放模式。将自动匹配开放类型的私有池容量。如果没有符合条件的私有池容量，则使用公共池资源启动。
- `Target`：指定模式。使用指定的私有池容量启动实例，如果该私有池容量不可用，则实例会启动失败。
- `None`：不使用模式。实例启动将不使用私有池容量。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Open',
                      ),
                    ),
                    'required' => false,
                  ),
                  'platform' => 
                  array (
                    'title' => '操作系统发行版。',
                    'description' => '操作系统平台。取值：

- `AliyunLinux`
- `CentOS`
- `Windows`
- `WindowsCore`',
                    'type' => 'string',
                    'deprecated' => true,
                    'required' => false,
                    'example' => 'AliyunLinux',
                  ),
                  'instance_patterns' => 
                  array (
                    'title' => '实例属性',
                    'type' => 'array',
                    'items' => 
                    array (
                      'title' => '实例属性',
                      'required' => false,
                      '$ref' => '#/components/schemas/instance_patterns',
                    ),
                    'required' => false,
                  ),
                ),
                'required' => false,
              ),
              'kubernetes_config' => 
              array (
                'title' => '集群配置。',
                'description' => '集群相关配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'labels' => 
                  array (
                    'title' => '节点标签。',
                    'description' => '节点标签，为Kubernetes集群节点添加标签。标签定义规则：

- 标签由区分大小写的键值对组成，您最多可以设置20个标签。
- 标签键不可以重复，最长为64个字符；标签值可以为空，最长为128个字符。标签键和标签值都不能以`aliyun`、`acs:`、`https://`或`http://`开头。更多信息，请参见[Labels and Selectors](https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/#syntax-and-character-set)。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '节点标签。',
                      'required' => false,
                      '$ref' => '#/components/schemas/tag',
                    ),
                    'required' => false,
                  ),
                  'taints' => 
                  array (
                    'title' => '污点配置。',
                    'description' => '节点污点配置。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '节点污点配置。',
                      'required' => false,
                      '$ref' => '#/components/schemas/taint',
                    ),
                    'required' => false,
                  ),
                  'runtime' => 
                  array (
                    'title' => '容器运行时。',
                    'description' => '容器运行时名称。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'docker',
                  ),
                  'runtime_version' => 
                  array (
                    'title' => '容器运行时版本。',
                    'description' => '容器运行时版本。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '19.03.5',
                  ),
                  'cpu_policy' => 
                  array (
                    'title' => 'CPU管理策略。',
                    'description' => '节点CPU管理策略。当集群版本在1.12.6及以上时支持以下两种策略：

- `static`：允许为节点上具有某些资源特征Pod增强其CPU亲和性和独占性。
- `none`：表示启用现有的默认CPU亲和性方案。

默认值：`none`。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'none',
                  ),
                  'unschedulable' => 
                  array (
                    'description' => '扩容后的节点是否不可调度。',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => 'false',
                  ),
                  'user_data' => 
                  array (
                    'title' => '实例自定义数据。',
                    'description' => '节点池自定义数据。更多信息，请参见[生成实例自定义数据](~~49121~~)。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'IyEvdXNyL2Jpbi9iYXNoCmVjaG8gIkhlbGxvIEFDSyEi',
                  ),
                  'cms_enabled' => 
                  array (
                    'title' => '是否开启云监控。',
                    'description' => '是否在ECS节点上安装云监控，安装后可以在云监控控制台查看所创建ECS实例的监控信息，推荐开启。取值：

- `true`：在ECS节点上安装云监控。
- `false`：不在ECS节点上安装云监控。

默认值：`false`。',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => 'true',
                  ),
                ),
                'required' => false,
              ),
              'tee_config' => 
              array (
                'title' => '加密计算配置。',
                'description' => '加密计算集群配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'tee_enable' => 
                  array (
                    'title' => '是否为加密计算节点池。',
                    'description' => '是否开启加密计算集群，取值：

- `true`：开启。
- `false`：不开启。

默认值：`false`。',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => 'false',
                  ),
                ),
                'required' => false,
              ),
              'update_nodes' => 
              array (
                'title' => '是否同步更新节点标签及污点。',
                'description' => '同步更新节点标签及污点。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'concurrency' => 
              array (
                'title' => '是否并发。',
                'description' => '是否并发。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
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
            'title' => '返回数据。',
            'description' => '返回体数据。',
            'type' => 'object',
            'properties' => 
            array (
              'task_id' => 
              array (
                'title' => '任务ID。',
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'T-5fd211e924e1d00787000293',
              ),
              'nodepool_id' => 
              array (
                'title' => '节点池ID。',
                'description' => '节点池ID。',
                'type' => 'string',
                'example' => 'np737c3ac1ac684703b9e10673aa2c****',
              ),
              'request_id' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '687C5BAA-D103-4993-884B-C35E4314****',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"task_id\\": \\"T-5fd211e924e1d00787000293\\",\\n  \\"nodepool_id\\": \\"np737c3ac1ac684703b9e10673aa2c****\\",\\n  \\"request_id\\": \\"687C5BAA-D103-4993-884B-C35E4314****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyClusterNodePoolResponse>\\n    <task_id>T-5fd211e924e1d00787000293</task_id>\\n    <nodepool_id>np737c3ac1ac684703b9e10673aa2c****</nodepool_id>\\n</ModifyClusterNodePoolResponse>","errorExample":""}]',
      'title' => '修改节点池配置',
    ),
    'ScaleClusterNodePool' => 
    array (
      'summary' => '根据节点池ID，扩容节点池节点。',
      'path' => '/clusters/{ClusterId}/nodepools/{NodepoolId}',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c23421cfa74454bc8b37163fd19af****',
          ),
        ),
        1 => 
        array (
          'name' => 'NodepoolId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '节点池ID',
            'description' => '节点池ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'np31da1b38983f4511b490fc62108a****',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'title' => '扩容配置',
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'count' => 
              array (
                'title' => '扩容节点数量',
                'description' => '扩容节点数量。受当前集群节点配额限制，单次操作最多扩容500个节点。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '1',
              ),
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
            'title' => '返回结构体。',
            'description' => '返回数据体。',
            'type' => 'object',
            'properties' => 
            array (
              'task_id' => 
              array (
                'title' => '任务ID。',
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'T-5faa48fb31b6b8078d00****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"task_id\\": \\"T-5faa48fb31b6b8078d00****\\"\\n}","errorExample":""},{"type":"xml","example":"<task_id>T-5faa48fb31b6b8078d00****</task_id>","errorExample":""}]',
      'title' => '扩容节点池',
    ),
    'AttachInstancesToNodePool' => 
    array (
      'summary' => '如果需要将已有ECS实例添加到ACK集群中作为Worker节点，或移除Worker节点后需将节点实例重新加入节点池，您可以调用AttachInstancesToNodePool将已有节点添加到节点池。',
      'path' => '/clusters/{ClusterId}/nodepools/{NodepoolId}/attach',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c82e6987e2961451182edacd74faf****',
          ),
        ),
        1 => 
        array (
          'name' => 'NodepoolId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '节点池ID。',
            'description' => '节点池ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'np31da1b38983f4511b490fc62108a****',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'instances' => 
              array (
                'description' => '待添加的实例ID列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '待添加的实例ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'i-2zed0sswuau6o89b****',
                ),
                'required' => false,
              ),
              'password' => 
              array (
                'description' => '待添加实例的SSH登录密码。',
                'type' => 'string',
                'required' => false,
                'example' => 'Hello1234',
              ),
              'format_disk' => 
              array (
                'description' => '是否将容器数据和镜像存储在数据盘中。取值：

- `true`：将容器数据和镜像存储在数据盘。

- `false`：不将容器数据和镜像存储在数据盘。

默认值：`false`。


数据盘挂载规则：

- 如果ECS已挂载数据盘，且最后一块数据盘的文件系统未初始化，系统会自动将该数据盘格式化为EXT4，用来存放内容/var/lib/docker、/var/lib/kubelet。
- 如果ECS未挂载数据盘，则不会挂载新的数据盘。
>当选择将数据存储至数据盘并且ECS已挂载数据盘，数据盘内原有数据将丢失，请注意备份数据。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'keep_instance_name' => 
              array (
                'description' => '是否保留原实例名称。取值：

- `true`：保留实例名称。

- `false`：不保留实例名称。

默认值：`true`。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
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
            'title' => 'Schema of Response',
            'description' => '返回体。',
            'type' => 'object',
            'properties' => 
            array (
              'request_id' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D7631D83-6E98-1949-B665-766A62xxxxxx',
              ),
              'task_id' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'T-5a54309c80282e39ea00002f',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"request_id\\": \\"D7631D83-6E98-1949-B665-766A62xxxxxx\\",\\n  \\"task_id\\": \\"T-5a54309c80282e39ea00002f\\"\\n}","type":"json"}]',
      'title' => '添加已有节点到节点池',
    ),
    'RemoveNodePoolNodes' => 
    array (
      'summary' => '当您不再需要集群节点继续工作时，可以调用RemoveNodePoolNodes接口将集群中的节点移出节点池，并同时调整期望节点数。移除节点时，您可以选择是否同时释放ECS、是否自动排空节点。移除节点会涉及Pod迁移，可能会影响业务，请在业务低峰期操作并提前做好相关的数据备份。',
      'path' => '/clusters/{ClusterId}/nodepools/{NodepoolId}/nodes',
      'methods' => 
      array (
        0 => 'delete',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c23421cfa74454bc8b37163fd19af****',
          ),
        ),
        1 => 
        array (
          'name' => 'NodepoolId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '节点池ID。',
            'description' => '节点池ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'np97de2cfb1ba042398dd8f5504c94****',
          ),
        ),
        2 => 
        array (
          'name' => 'release_node',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否释放节点。',
            'description' => '是否释放节点。可选值：
- true：释放。
- false：不释放。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'drain_node',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否排水节点。',
            'description' => '是否排水节点。可选值：
- true：排水。
- false：不排水。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        4 => 
        array (
          'name' => 'nodes',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '【该字段已废弃】请使用instance_ids参数代替
移除节点列表。',
            'description' => '移除节点列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '节点名称。',
              'type' => 'string',
              'required' => false,
              'example' => 'cn-hangzhou.172.16.xxx.xxx',
            ),
            'deprecated' => true,
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'instance_ids',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '移除实例列表。',
            'description' => '移除实例列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'i-bp1c70fqbv1nlu9xxxxx',
            ),
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'concurrency',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否并发移除。',
            'description' => '是否并发移除。',
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
            'title' => '响应体。',
            'description' => '响应体。',
            'type' => 'object',
            'properties' => 
            array (
              'request_id' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A9891419-D125-4D89-AFCA-68846675E2F7',
              ),
              'task_id' => 
              array (
                'title' => '任务ID。',
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'T-62a944794ee141074400****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"request_id\\": \\"A9891419-D125-4D89-AFCA-68846675E2F7\\",\\n  \\"task_id\\": \\"T-62a944794ee141074400****\\"\\n}","errorExample":""},{"type":"xml","example":"<RemoveNodePoolNodesResponse>\\n    <request_id>A9891419-D125-4D89-AFCA-68846675E2F7</request_id>\\n    <task_id>T-62a944794ee141074400****</task_id>\\n</RemoveNodePoolNodesResponse>","errorExample":""}]',
      'title' => '移除节点池节点',
      'description' => '> - 移除节点会涉及Pod迁移，可能会影响业务，请在业务低峰期操作。
- 操作过程中可能存在非预期风险，请提前做好相关的数据备份。
- 操作过程中，后台会把当前节点设置为不可调度状态。
- 移除节点仅移除Worker节点，不会移除Master节点。
- 即使选择了释放节点（即release_node为true的节点），包年包月的节点也不会释放。需要您在移除节点后，通过[ECS控制台](https://ecs.console.aliyun.com/)操作释放。',
    ),
    'UpgradeClusterNodepool' => 
    array (
      'summary' => '您可以调用UpgradeClusterNodepool接口升级指定集群节点池的kubelet版本（建议与控制面版本一致）、操作系统版本或容器运行时版本。',
      'path' => '/clusters/{ClusterId}/nodepools/{NodepoolId}/upgrade',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'c106f377e16f34eb1808d6b9362c9****',
          ),
        ),
        1 => 
        array (
          'name' => 'NodepoolId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '节点池ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'np31da1b38983f4511b490fc62108a****',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数。',
            'type' => 'object',
            'properties' => 
            array (
              'image_id' => 
              array (
                'title' => '节点系统镜像ID。',
                'description' => '节点系统镜像ID。',
                'type' => 'string',
                'required' => false,
                'example' => 'aliyun_2_1903_x64_20G_alibase_20200529.vhd',
              ),
              'runtime_version' => 
              array (
                'title' => '节点运行时版本。',
                'description' => '节点运行时版本。您可以调用[DescribeKubernetesVersionMetadata](~~2667899~~)在runtime中获取运行时版本信息。',
                'type' => 'string',
                'required' => false,
                'example' => '1.5.10',
              ),
              'kubernetes_version' => 
              array (
                'title' => '节点Kubernetes版本。',
                'description' => '节点Kubernetes版本。您可以调用[DescribeKubernetesVersionMetadata](~~2667899~~)在current_version中获取当前集群版本信息。',
                'type' => 'string',
                'required' => false,
                'example' => '1.22.15-aliyun.1',
              ),
              'runtime_type' => 
              array (
                'description' => '运行时类型。您可以调用[DescribeKubernetesVersionMetadata](~~2667899~~)在runtime中获取运行时信息。',
                'type' => 'string',
                'required' => false,
                'example' => 'containerd',
              ),
              'use_replace' => 
              array (
                'description' => '是否使用替盘升级。取值：
- true：使用。
- false：不使用。

默认值：false',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'rolling_policy' => 
              array (
                'title' => '变更策略。',
                'description' => '轮转配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'pause_policy' => 
                  array (
                    'title' => '暂停策略。可取值：
- FirstBatch：第一批完成后暂停
- EveryBatch：每批完成后暂停
- NotPause： 不暂停',
                    'description' => '暂停策略。取值：
- FirstBatch：第一批完成后暂停。
- EveryBatch：每批完成后暂停。
- NotPause： 不暂停。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'NotPause',
                    'default' => 'NotPause',
                    'enum' => 
                    array (
                      0 => 'FirstBatch',
                      1 => 'EveryBatch',
                      2 => 'NotPause',
                    ),
                  ),
                  'batch_interval' => 
                  array (
                    'title' => '批次之间的升级间隔时间，仅在暂停策略为NotPause时生效，单位为分钟，取值范围5-120分钟。',
                    'description' => '批次之间的升级间隔时间，仅在暂停策略为NotPause时生效，单位为分钟，取值范围5-120分钟。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '5分钟',
                    'default' => '0',
                  ),
                  'max_parallelism' => 
                  array (
                    'title' => '升级时的最大并发节点数。',
                    'description' => '最大不可用节点数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '3',
                    'default' => '10',
                  ),
                ),
                'required' => false,
              ),
              'node_names' => 
              array (
                'title' => '指定升级的节点列表。未指定时默认升级节点池内所有节点。',
                'description' => '指定升级的节点列表。未指定时默认升级节点池内所有节点。',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '节点名称。',
                  'description' => '节点名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
                'required' => false,
              ),
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
                'example' => '2D69A58F-345C-4FDE-88E4-BF518944****',
              ),
              'task_id' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'T-5fd211e924e1d0078700****',
              ),
            ),
          ),
        ),
        '5XX' => 
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2D69A58F-345C-4FDE-88E4-BF518944****\\",\\n  \\"task_id\\": \\"T-5fd211e924e1d0078700****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpgradeClusterNodepoolResponse>\\n    <RequestId>2D69A58F-345C-4FDE-88E4-BF518944****</RequestId>\\n    <task_id>T-5fd211e924e1d0078700xxxx</task_id>\\n</UpgradeClusterNodepoolResponse>","errorExample":""}]',
      'title' => '升级节点池',
      'description' => '通过UpgradeClusterNodepool可升级指定集群节点池内节点的Kubernetes版本、操作系统版本或容器运行时版本。成功调用UpgradeClusterNodepool接口后，该API将返回此次升级任务的`task_id`，您可以通过调用任务API管理该操作任务：

- [调用DescribeTaskInfo查询任务详情](~~2667985~~)
- [调用PauseTask暂停正在运行中的任务](~~2667986~~)
- [调用ResumeTask恢复运行已暂停的任务](~~2667987~~)
- [调用CancelTask取消运行中的任务](~~2667988~~)',
    ),
    'RepairClusterNodePool' => 
    array (
      'summary' => '您可以调用RepairClusterNodePool接口修复指定集群节点池的异常节点，使节点保持正常运行状态。',
      'path' => '/clusters/{cluster_id}/nodepools/{nodepool_id}/repair',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '89346',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcskRXV8J4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'cluster_id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID',
            'description' => '集群ID',
            'type' => 'string',
            'required' => true,
            'example' => 'c2273b7f4a30d4ef6b43e0926cdd8****',
          ),
        ),
        1 => 
        array (
          'name' => 'nodepool_id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '节点池ID',
            'description' => '节点池ID',
            'type' => 'string',
            'required' => true,
            'example' => 'np613940c3593c4bea96faa8600cb9****',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求体',
            'description' => '请求体',
            'type' => 'object',
            'properties' => 
            array (
              'nodes' => 
              array (
                'title' => '节点列表，如果不指定则表示当前节点池内所有节点',
                'description' => '节点列表，如果不指定则表示当前节点池内所有节点',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '节点名称',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'cn-beijing.10.0.1.26',
                ),
                'required' => false,
              ),
              'auto_restart' => 
              array (
                'title' => '是否重启节点。',
                'description' => '是否允许重启实例。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'operations' => 
              array (
                'title' => '要执行的修复操作，未指定时默认执行全部修复操作，一般场景下无需指定。',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '修复操作。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'operation_id' => 
                    array (
                      'title' => '修复操作ID。',
                      'type' => 'string',
                      'required' => false,
                    ),
                    'args' => 
                    array (
                      'title' => '修复操作参数列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'title' => '修复操作参数。',
                        'type' => 'string',
                        'required' => false,
                      ),
                      'required' => false,
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
              'request_id' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'db82195b-75a8-40e5-9be4-16f1829dc624',
              ),
              'task_id' => 
              array (
                'title' => '任务ID',
                'description' => '任务ID',
                'type' => 'string',
                'example' => 'T-613b19bbd160ad4928000001',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"request_id\\": \\"db82195b-75a8-40e5-9be4-16f1829dc624\\",\\n  \\"task_id\\": \\"T-613b19bbd160ad4928000001\\"\\n}","errorExample":""},{"type":"xml","example":"<RepairClusterNodePoolResponse>\\n    <request_id>db82195b-75a8-40e5-9be4-16f1829dc624</request_id>\\n    <task_id>T-613b19bbd160ad4928000001</task_id>\\n</RepairClusterNodePoolResponse>","errorExample":""}]',
      'title' => '修复节点池节点',
    ),
    'FixNodePoolVuls' => 
    array (
      'summary' => '阿里云云安全产品会定期扫描ECS节点上的安全漏洞，并提供对应的修复建议与方法。某些CVE的修复可能需要重启节点，请确保集群有充足的节点用于排水操作。您可以调用FixNodePoolVuls接口修复指定集群节点池的节点漏洞，提高集群节点的安全性。',
      'path' => '/clusters/{cluster_id}/nodepools/{nodepool_id}/vuls/fix',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'cluster_id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cf62854ac2130470897be7a27ed1f****',
          ),
        ),
        1 => 
        array (
          'name' => 'nodepool_id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '节点池ID',
            'description' => '节点池ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'np31da1b38983f4511b490fc62108a****',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'vuls' => 
              array (
                'title' => '待修复的漏洞名称列表',
                'description' => '漏洞列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '漏洞名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'oval:com.redhat.rhsa:def:20170574',
                ),
                'required' => false,
              ),
              'nodes' => 
              array (
                'title' => '待修复的节点名称列表',
                'description' => '待修复的节点名称列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '节点名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'cn-beijing.10.0.1.26',
                ),
                'required' => false,
              ),
              'rollout_policy' => 
              array (
                'title' => '轮转修复策略',
                'description' => '轮转修复策略。',
                'type' => 'object',
                'properties' => 
                array (
                  'max_parallelism' => 
                  array (
                    'title' => '轮转修复时的最大并行度',
                    'description' => '轮转修复时的最大并行度，最小值为1，最大值为节点池节点数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => false,
                    'example' => '1',
                  ),
                ),
                'required' => false,
              ),
              'auto_restart' => 
              array (
                'title' => '修复完成后是否自动重启节点。',
                'description' => '是否允许重启。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
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
              'task_id' => 
              array (
                'title' => '修复任务ID',
                'description' => '修复任务ID。',
                'type' => 'string',
                'example' => 'T-60fea8ad2e277f087900****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"task_id\\": \\"T-60fea8ad2e277f087900****\\"\\n}","type":"json"}]',
      'title' => '修复节点池漏洞',
      'description' => '1. 节点池CVE修复基于云安全中心提供，您需要购买云安全中心旗舰版（容器版）才能正常使用。
2. 部分CVE修复需要重启您的节点，容器服务会在您的节点重启前执行本节点的排水工作，请确保集群有足够的节点空余资源用于排水，例如提前扩容节点池。
3. CVE的兼容性由云安全中心保证，您需要关注您的应用与CVE的兼容性，您可以在修复过程中随时暂停或者取消修复。
4. CVE修复是分批次进行的，点击暂停或者取消CVE修复后，已经下发了修复任务的批次会继续执行直到完成，未下发的批次会被暂停任务下发或取消任务下发。',
    ),
    'ModifyNodePoolNodeConfig' => 
    array (
      'summary' => '您可以调用ModifyNodePoolNodeConfig接口修改集群节点池中节点配置信息，例如kubelet配置、节点轮转配置等。修改节点配置会按批次变更节点配置并重启kubelet, 可能会对节点运行和工作负载运行产生一定影响，请在业务低峰期操作。',
      'path' => '/clusters/{ClusterId}/nodepools/{NodepoolId}/node_config',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '152296',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcskRXV8J4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c23421cfa74454bc8b37163fd19af****',
          ),
        ),
        1 => 
        array (
          'name' => 'NodepoolId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '节点池ID。',
            'description' => '节点池ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'np8d8c9c2cd0f64e89884f82a5fbcd****',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求体。',
            'description' => '请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'kubelet_config' => 
              array (
                'description' => 'kubelet参数配置。',
                'required' => false,
                '$ref' => '#/components/schemas/kubelet_config',
              ),
              'rolling_policy' => 
              array (
                'title' => '轮转配置。',
                'description' => '轮转配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'max_parallelism' => 
                  array (
                    'title' => '最大不可用节点数。',
                    'description' => '最大不可用节点数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => false,
                    'example' => '3',
                  ),
                ),
                'required' => false,
              ),
              'os_config' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'sysctl' => 
                  array (
                    'type' => 'object',
                    'required' => false,
                    'additionalProperties' => 
                    array (
                      'type' => 'any',
                    ),
                  ),
                ),
                'required' => false,
              ),
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
            'title' => '响应体。',
            'description' => '响应体。',
            'type' => 'object',
            'properties' => 
            array (
              'request_id' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D7631D83-6E98-1949-B665-766A62****',
              ),
              'task_id' => 
              array (
                'title' => '任务ID。',
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'T-5fd211e924e1d00787****',
              ),
              'nodepool_id' => 
              array (
                'title' => '节点池ID。',
                'description' => '节点池ID。',
                'type' => 'string',
                'example' => 'np737c3ac1ac684703b9e10673aa2c****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"request_id\\": \\"D7631D83-6E98-1949-B665-766A62****\\",\\n  \\"task_id\\": \\"T-5fd211e924e1d00787****\\",\\n  \\"nodepool_id\\": \\"np737c3ac1ac684703b9e10673aa2c****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyNodePoolNodeConfigResponse>\\n    <request_id>D7631D83-6E98-1949-B665-766A62****</request_id>\\n    <task_id>T-5fd211e924e1d00787****</task_id>\\n    <nodepool_id>np737c3ac1ac684703b9e10673aa2c****</nodepool_id>\\n</ModifyNodePoolNodeConfigResponse>","errorExample":""}]',
      'title' => '修改节点池节点配置',
      'description' => '> ACK支持修改节点池内节点的kubelet配置。修改完成后，节点池的节点会自动生效，节点池新增节点也将使用新的配置。',
    ),
    'SyncClusterNodePool' => 
    array (
      'path' => '/clusters/{ClusterId}/sync_nodepools',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'c905d1364c2dd4b6284a3f41790c4****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2D69A58F-345C-4FDE-88E4-BF51894XXXXX',
              ),
            ),
          ),
        ),
        '5XX' => 
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2D69A58F-345C-4FDE-88E4-BF51894XXXXX\\"\\n}","type":"json"}]',
      'title' => '同步节点池',
      'summary' => '您可以调用SyncClusterNodePool接口同步集群节点池，包含节点池元数据、节点池内节点信息等。',
    ),
    'DescribeClusterAttachScripts' => 
    array (
      'summary' => '如果需要将已有ECS实例添加到ACK集群中作为Worker节点，或移除Worker节点后需将节点实例重新加入节点池，ACK支持手动将已有节点到节点池。您可以调用DescribeClusterAttachScripts接口获取添加已有节点的脚本。',
      'path' => '/clusters/{ClusterId}/attachscript',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ca375a93a30474552ad2a0ebe183e****',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'title' => '请求体参数',
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'nodepool_id' => 
              array (
                'title' => '节点池ID。将节点加入指定节点池。',
                'description' => '节点池ID，添加节点时可以将该节点添加到指定的节点池中。

> 如果不指定节点池ID，默认将节点添加至默认节点池。',
                'type' => 'string',
                'required' => false,
                'example' => 'np1c9229d9be2d432c93f77a88fca0****',
              ),
              'format_disk' => 
              array (
                'title' => '数据盘挂载',
                'description' => '手动添加已有实例到集群时，是否对该实例进行数据盘挂载，将容器和镜像存储在数据盘上。取值：

- `true`：对实例进行数据盘挂载，数据盘内原有数据将丢失，请注意备份数据。
- `false`：不对实例进行数据盘挂载。

默认值：`false`。

数据挂载规则：

- 如果 ECS 已挂载数据盘，且最后一块数据盘的文件系统未初始化，系统会自动将该数据盘格式化为 ext4，用来存放内容/var/lib/docker、/var/lib/kubelet 。
- 如果 ECS 未挂载数据盘，则不会挂载新的数据盘。

',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'keep_instance_name' => 
              array (
                'title' => '保留实例名称',
                'description' => '添加已有实到集群时，是否保留实例名称。如果不保留，则实例名称格式为`worker-k8s-for-cs-<clusterid>`。取值：

- `true`：保留实例名称。
- `false`：不保留实例名称，会用系统规则进行替换。

默认值：`true`。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'rds_instances' => 
              array (
                'title' => 'RDS白名单',
                'description' => '如果指定了RDS实例列表，集群节点ECS会自动加入RDS访问白名单。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'RDS实例名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'rm-xxx',
                ),
                'required' => false,
              ),
              'arch' => 
              array (
                'title' => '节点CPU架构,支持amd64、arm、arm64。边缘托管集群专有字段。',
                'description' => '节点CPU架构。支持的CPU架构包括`amd64`、`arm`、`arm64`。

默认值：`amd64`。

> 当集群类型为边缘托管版时必填。',
                'type' => 'string',
                'required' => false,
                'example' => 'amd64',
              ),
              'options' => 
              array (
                'title' => '边缘托管版集群节点的接入配置。',
                'description' => '节点的接入配置参数。

> 当集群类型为边缘托管版时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '{\\"enableIptables\\": true,\\"manageRuntime\\": true,\\"quiet\\": true,\\"allowedClusterAddons\\": [\\"kube-proxy\\",\\"flannel\\",\\"coredns\\"]}',
              ),
            ),
            'required' => false,
            'example' => 'amd64',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '添加节点脚本。',
            'description' => '节点接入脚本。',
            'type' => 'string',
            'example' => '"curl http://aliacs-k8s-cn-hangzhou.oss-cn-hangzhou.aliyuncs.com/public/pkg/run/attach/1.12.6-aliyunedge.1/edgeadm -O edgeadm; chmod u+x edgeadm; ./edgeadm join --openapi-token=XXX --node-spec="{\\"flannelIface\\":\\"eth0\\",\\"enableIptables\\":true,\\"assumeYes\\":true,\\"manageRuntime\\":true,\\"nodeNameStrategy\\":\\"hostname\\",\\"enabledAddons\\":[\\"kube-proxy\\",\\"flannel\\",\\"coredns\\"]}""',
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"\\"\\\\\\"curl http://aliacs-k8s-cn-hangzhou.oss-cn-hangzhou.aliyuncs.com/public/pkg/run/attach/1.12.6-aliyunedge.1/edgeadm -O edgeadm; chmod u+x edgeadm; ./edgeadm join --openapi-token=XXX --node-spec=\\\\\\"{\\\\\\\\\\\\\\"flannelIface\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"eth0\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"enableIptables\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"assumeYes\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"manageRuntime\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"nodeNameStrategy\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"hostname\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"enabledAddons\\\\\\\\\\\\\\":[\\\\\\\\\\\\\\"kube-proxy\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"flannel\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"coredns\\\\\\\\\\\\\\"]}\\\\\\"\\\\\\"\\"","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询添加已有节点到集群节点池的脚本',
    ),
    'CreateAutoscalingConfig' => 
    array (
      'summary' => '您可以创建自动弹性伸缩配置，让系统能够按照配置的伸缩规则自动增加或减少计算资源，满足您的集群工作负载的需求。创建过程中，您可以指定扩缩容的度量指标和阈值、扩容顺序、静默时间等。',
      'path' => '/cluster/{ClusterId}/autoscale/config/',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cdde1f21ae22e483ebcb068a6eb7f****',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求体数据',
            'description' => '请求体数据。',
            'type' => 'object',
            'properties' => 
            array (
              'cool_down_duration' => 
              array (
                'title' => '静默时间，扩容出的节点，在静默时间过后，方可进入缩容判断',
                'description' => '缩容触发时延，节点缩容时需要连续满足触发时延所设定的时间，才能进行缩容。单位：分钟。',
                'type' => 'string',
                'required' => false,
                'example' => '10m',
              ),
              'unneeded_duration' => 
              array (
                'title' => '缩容触发时延，节点缩容时需要连续满足触发时延所设定的时间，方可进行缩容',
                'description' => '静默时间。扩容出的节点，在静默时间过后，才能进入缩容判断。单位：分钟。',
                'type' => 'string',
                'required' => false,
                'example' => '10m',
              ),
              'utilization_threshold' => 
              array (
                'title' => '缩容阈值，节点上 Request 的资源与总资源量的比值',
                'description' => '缩容阈值，节点上Request的资源与总资源量的比值。',
                'type' => 'string',
                'required' => false,
                'example' => '0.5',
              ),
              'gpu_utilization_threshold' => 
              array (
                'title' => 'GPU缩容阈值，节点上 Request 的资源与总资源量的比值',
                'description' => 'GPU缩容阈值，节点上Request的资源与总资源量的比值。',
                'type' => 'string',
                'required' => false,
                'example' => '0.5',
              ),
              'scan_interval' => 
              array (
                'title' => '弹性灵敏度，判断伸缩的间隔时间',
                'description' => '弹性灵敏度，判断伸缩的间隔时间。单位：s。',
                'type' => 'string',
                'required' => false,
                'example' => '30s',
              ),
              'scale_down_enabled' => 
              array (
                'title' => '是否允许缩容',
                'description' => '是否允许进行节点缩容。取值：
- `true`：允许缩容。
- `false`：禁止缩容。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'expander' => 
              array (
                'title' => '节点池扩容顺序策略',
                'description' => '节点池扩容顺序策略。取值：
- `least-waste` ：默认策略。如果可扩容节点池有多个，从中选择一个资源浪费最少的节点池进行扩容。
- `random`：随机策略。如果可扩容节点池有多个，从中任意选择一个节点池进行扩容。
- `priority `：优先级策略。如果可扩容节点池有多个，会按照您自定义的伸缩组顺序，选择优先级高的节点池进行扩容。
优先级的配置存储在kube-system命名空间下ConfigMap的`cluster-autoscaler-priority-expander`中。当自动伸缩进行扩容时，实时读取此配置，将可扩容的伸缩组ID与配置中伸缩组ID进行匹配，在匹配上的伸缩组中选取优先级最大值的伸缩组作为扩容对象。',
                'type' => 'string',
                'required' => false,
                'example' => 'least-waste',
              ),
              'skip_nodes_with_system_pods' => 
              array (
                'title' => '为true则cluster autoscaler将不会缩容有kube-system命名空间下pods（除了DaemonSet 或 mirror pods）的节点',
                'description' => 'cluster autoscaler是否缩容有kube-system命名空间下的Pods（除了DaemonSet或mirror Pods）的节点。
- `true`：不会缩容。
- `false`：缩容。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'skip_nodes_with_local_storage' => 
              array (
                'title' => '为true则cluster autoscaler将不会缩容有local storage（如EmptyDir 或 HostPath）的pods的节点',
                'description' => 'cluster autoscaler是否缩容有local storage（如EmptyDir 或 HostPath）的pods的节点
- `true`：不会缩容。
- `false`：缩容。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'daemonset_eviction_for_nodes' => 
              array (
                'title' => '为true则在缩容时驱逐节点上的DaemonSet pods',
                'description' => '缩容时是否驱逐节点上的DaemonSet pods
- `true`：驱逐。
- `false`：不会驱逐。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'max_graceful_termination_sec' => 
              array (
                'title' => 'CA缩容节点时等待节点上pod终止的最长时间（单位：秒）',
                'description' => 'cluster autoscaler缩容节点时等待节点上pod终止的最长时间。单位：s。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '14400s',
              ),
              'min_replica_count' => 
              array (
                'title' => '考虑缩容时pod应该有的最小副本数',
                'description' => '考虑缩容时Pod应该有的最小副本数。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '0',
              ),
              'recycle_node_deletion_enabled' => 
              array (
                'title' => '极速模式节点缩容成功后是否删除其对应的K8s node对象',
                'description' => '极速模式节点缩容成功后，是否删除其对应的K8s Node对象。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'scale_up_from_zero' => 
              array (
                'title' => '集群ready节点数为0时，CA是否扩容',
                'description' => '集群Ready节点数为0时，CA是否扩容。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '创建弹性伸缩配置',
    ),
    'DescribeClusterNodes' => 
    array (
      'summary' => '您可以调用DescribeClusterNodes接口，查询符合条件的节点列表信息。',
      'path' => '/clusters/{ClusterId}/nodes',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c82e6987e2961451182edacd74faf****',
          ),
        ),
        1 => 
        array (
          'name' => 'instanceIds',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '节点实例ID，按照实例ID进行过滤。  节点池ID不为空时会忽略此字段。多节点用逗号分割',
            'description' => '节点实例ID列表，多值使用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => '"i-bp11xjhwkj8k966u****,i-bp1dmhc2bu5igkyq****"',
          ),
        ),
        2 => 
        array (
          'name' => 'nodepool_id',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '节点池ID。',
            'description' => '节点池ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'np****',
          ),
        ),
        3 => 
        array (
          'name' => 'state',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '节点状态。默认值：all。',
            'description' => '集群节点状态，按照集群节点运行状态进行过滤，取值：

- `all`：以下4种状态的集群节点。
- `running`：正在运行的集群节点。
- `removing`：正在删除的集群节点。
- `initial`：正在初始化的集群节点。
- `failed`：创建失败的集群节点。

默认值：`all`。',
            'type' => 'string',
            'required' => false,
            'example' => 'running',
          ),
        ),
        4 => 
        array (
          'name' => 'pageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '每页大小。',
            'description' => '每页显示的记录数。取值范围为[1,100]。

默认值：10。',
            'type' => 'string',
            'required' => false,
            'example' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'pageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页数量',
            'description' => '页码。

默认值：1。',
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
            'title' => '返回数据体。',
            'description' => '返回数据体。',
            'type' => 'object',
            'properties' => 
            array (
              'nodes' => 
              array (
                'title' => '节点信息列表。',
                'description' => '节点详情列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '节点详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'creation_time' => 
                    array (
                      'title' => '节点创建时间。',
                      'description' => '节点创建时间。',
                      'type' => 'string',
                      'example' => '2020-08-25T11:25:35+08:00',
                    ),
                    'error_message' => 
                    array (
                      'title' => '错误信息说明。',
                      'description' => '节点创建时错误信息。',
                      'type' => 'string',
                      'example' => 'error***',
                    ),
                    'expired_time' => 
                    array (
                      'title' => '节点过期时间。',
                      'description' => '节点到期时间。',
                      'type' => 'string',
                      'example' => '2099-12-31T23:59:00+08:00',
                    ),
                    'host_name' => 
                    array (
                      'title' => '节点主机名。',
                      'description' => '节点主机名。',
                      'type' => 'string',
                      'example' => 'iZ2vcckdmxp7u0urj2k****',
                    ),
                    'image_id' => 
                    array (
                      'title' => '节点使用的镜像ID。',
                      'description' => '节点使用的系统镜像ID。',
                      'type' => 'string',
                      'example' => 'aliyun_2_1903_x64_20G_alibase_20200529.vhd',
                    ),
                    'instance_charge_type' => 
                    array (
                      'title' => '节点付费类型。',
                      'description' => '节点付费类型。取值：

- `PrePaid`：预付费，包年包月。选择该类付费方式时，您必须确认自己的账号支持余额支付或信用支付，否则将返回`InvalidPayMethod`的错误提示。

- `PostPaid`：按量付费。',
                      'type' => 'string',
                      'example' => 'PostPaid',
                    ),
                    'instance_id' => 
                    array (
                      'title' => '节点实例ID。',
                      'description' => '节点实例ID。',
                      'type' => 'string',
                      'example' => 'i-2vcckdmxp7u0urj2****',
                    ),
                    'instance_name' => 
                    array (
                      'title' => '节点名称。',
                      'description' => '节点在集群中的名称。',
                      'type' => 'string',
                      'example' => 'worker-k8s-for-cs-c5cdf7e3938bc4f8eb0e44b21a80f****',
                    ),
                    'instance_role' => 
                    array (
                      'title' => '节点实例角色类型，Master或Worker。',
                      'description' => '节点角色类型：

- Master：集群Master节点。
- Worker：集群Worker节点。',
                      'type' => 'string',
                      'example' => 'Worker',
                    ),
                    'instance_status' => 
                    array (
                      'title' => '节点实例状态，',
                      'description' => '节点运行状态。',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'instance_type' => 
                    array (
                      'title' => '节点实例类型。',
                      'description' => '节点类型。',
                      'type' => 'string',
                      'example' => 'ecs.c5.xlarge',
                    ),
                    'instance_type_family' => 
                    array (
                      'title' => '节点实例所属ECS实例簇名称。',
                      'description' => '节点所属ECS族名称。',
                      'type' => 'string',
                      'example' => 'ecs.c5',
                    ),
                    'ip_address' => 
                    array (
                      'title' => '节点IP地址。',
                      'description' => '节点IP地址。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'IP地址。',
                        'type' => 'string',
                        'example' => '192.168.0.36',
                      ),
                    ),
                    'is_aliyun_node' => 
                    array (
                      'title' => '节点是否为aliyun实例。',
                      'description' => '是否为阿里云实例。取值：

- `true`：是阿里云实例。

- `false`：不是阿里云实例。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'node_name' => 
                    array (
                      'title' => '节点名称，该名称是k8s专用名称。',
                      'description' => '节点名称，集群内节点标识。',
                      'type' => 'string',
                      'example' => 'cn-chengdu.192.168.0.36',
                    ),
                    'node_status' => 
                    array (
                      'title' => '节点状态，是否Ready。',
                      'description' => '节点是否就绪。取值：

- `Ready`：节点已就绪。

- `NotReady`：节点未就绪。

- `Unknown`：未知。

- `Offline`：离线中。',
                      'type' => 'string',
                      'example' => 'Ready',
                    ),
                    'nodepool_id' => 
                    array (
                      'title' => '节点池ID。',
                      'description' => '节点池ID。',
                      'type' => 'string',
                      'example' => 'np0794239424a84eb7a95327369d56****',
                    ),
                    'source' => 
                    array (
                      'title' => '节点通过什么方式创建出来的，例如：ROS。',
                      'description' => '节点通过何种方式初始化，例如：手动创建或ROS创建。',
                      'type' => 'string',
                      'example' => 'ess_attach',
                    ),
                    'state' => 
                    array (
                      'title' => 'ECS运行状态，例如：Running。',
                      'description' => '节点运行状态。取值：

- `pending`：创建中。

- `running`：运行中。

- `starting`：启动中。

- `stopping`：停止中。

- `stopped`：已停止。',
                      'type' => 'string',
                      'example' => 'running',
                    ),
                    'spot_strategy' => 
                    array (
                      'title' => '抢占时实例类型',
                      'description' => '抢占式实例类型，取值：
- NoSpot：非抢占式实例。
- SpotWithPriceLimit：设置抢占实例价格上限。
- SpotAsPriceGo：系统自动出价，跟随当前市场实际价格。
',
                      'type' => 'string',
                      'example' => 'NoSpot',
                    ),
                  ),
                ),
              ),
              'page' => 
              array (
                'title' => '分页信息。',
                'description' => '分页信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'page_number' => 
                  array (
                    'title' => '总页数。',
                    'description' => '页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'page_size' => 
                  array (
                    'title' => '单页展示结果数量。',
                    'description' => '每页显示的记录数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'total_count' => 
                  array (
                    'title' => '结果总条数。',
                    'description' => '结果总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '5',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"nodes\\": [\\n    {\\n      \\"creation_time\\": \\"2020-08-25T11:25:35+08:00\\",\\n      \\"error_message\\": \\"error***\\",\\n      \\"expired_time\\": \\"2099-12-31T23:59:00+08:00\\",\\n      \\"host_name\\": \\"iZ2vcckdmxp7u0urj2k****\\",\\n      \\"image_id\\": \\"aliyun_2_1903_x64_20G_alibase_20200529.vhd\\",\\n      \\"instance_charge_type\\": \\"PostPaid\\",\\n      \\"instance_id\\": \\"i-2vcckdmxp7u0urj2****\\",\\n      \\"instance_name\\": \\"worker-k8s-for-cs-c5cdf7e3938bc4f8eb0e44b21a80f****\\",\\n      \\"instance_role\\": \\"Worker\\",\\n      \\"instance_status\\": \\"Running\\",\\n      \\"instance_type\\": \\"ecs.c5.xlarge\\",\\n      \\"instance_type_family\\": \\"ecs.c5\\",\\n      \\"ip_address\\": [\\n        \\"192.168.0.36\\"\\n      ],\\n      \\"is_aliyun_node\\": true,\\n      \\"node_name\\": \\"cn-chengdu.192.168.0.36\\",\\n      \\"node_status\\": \\"Ready\\",\\n      \\"nodepool_id\\": \\"np0794239424a84eb7a95327369d56****\\",\\n      \\"source\\": \\"ess_attach\\",\\n      \\"state\\": \\"running\\",\\n      \\"spot_strategy\\": \\"NoSpot\\"\\n    }\\n  ],\\n  \\"page\\": {\\n    \\"page_number\\": 1,\\n    \\"page_size\\": 10,\\n    \\"total_count\\": 5\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeClusterNodesResponse>\\n    <nodes>\\n        <creation_time>2020-08-25T11:25:35+08:00</creation_time>\\n        <error_message>error***</error_message>\\n        <expired_time>2099-12-31T23:59:00+08:00</expired_time>\\n        <host_name>iZ2vcckdmxp7u0urj2k****</host_name>\\n        <image_id>aliyun_2_1903_x64_20G_alibase_20200529.vhd</image_id>\\n        <instance_charge_type>PostPaid</instance_charge_type>\\n        <instance_id>i-2vcckdmxp7u0urj2****</instance_id>\\n        <instance_name>worker-k8s-for-cs-c5cdf7e3938bc4f8eb0e44b21a80f****</instance_name>\\n        <instance_role>Worker</instance_role>\\n        <instance_status>Running</instance_status>\\n        <instance_type>ecs.c5.xlarge</instance_type>\\n        <instance_type_family>ecs.c5</instance_type_family>\\n        <ip_address>192.168.0.36</ip_address>\\n        <is_aliyun_node>true</is_aliyun_node>\\n        <node_name>cn-chengdu.192.168.0.36</node_name>\\n        <node_status>Ready</node_status>\\n        <nodepool_id>np0794239424a84eb7a95327369d56****</nodepool_id>\\n        <source>ess_attach</source>\\n        <state>running</state>\\n        <spot_strategy>NoSpot</spot_strategy>\\n    </nodes>\\n    <page>\\n        <page_number>1</page_number>\\n        <page_size>10</page_size>\\n        <total_count>5</total_count>\\n    </page>\\n</DescribeClusterNodesResponse>","errorExample":""}]',
      'title' => '查询集群节点列表',
    ),
    'DeleteClusterNodes' => 
    array (
      'summary' => '当您不再需要集群节点继续工作时，可以调用DeleteClusterNodes接口将集群中的节点移出集群。移除节点时，您可以选择是否同时释放ECS、是否自动排空节点。移除节点会涉及Pod迁移，可能会影响业务，请在业务低峰期操作并提前做好相关的数据备份。',
      'path' => '/clusters/{ClusterId}/nodes',
      'methods' => 
      array (
        0 => 'post',
        1 => 'delete',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c850429a2287b4d968e27e87a4921****',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'title' => '请求体。',
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'drain_node' => 
              array (
                'title' => '是否自动排空节点上的Pod。',
                'description' => '是否自动排空节点上的Pod。取值：
- `true`：自动排空节点上的Pod。
- `false`：不自动排空节点上的Pod。

默认值：`false`。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'release_node' => 
              array (
                'title' => '是否同时释放 ECS',
                'description' => '是否同时移除ECS。取值：

- `true`：同时移除ECS。
- `false`：不同移除ECS。

默认值：`false`。

> 当节点为包年包月实例时，不支持同时移除ECS。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'nodes' => 
              array (
                'title' => '移除节点列表。',
                'description' => '移除节点列表，节点名称必须是节点在集群中的名称，例如：`cn-hangzhou.192.168.0.70`。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '节点名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'cn-chengdu.192.168.0.70',
                ),
                'required' => true,
              ),
            ),
            'required' => false,
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
            'title' => '返回数据体',
            'description' => '返回数据体。',
            'type' => 'object',
            'properties' => 
            array (
              'cluster_id' => 
              array (
                'title' => '集群ID',
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'c104d5d5f301c4e2a8ee578c37bc****',
              ),
              'request_id' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A9891419-D125-4D89-AFCA-68846675E2F7',
              ),
              'task_id' => 
              array (
                'title' => '任务ID',
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'T-60fea8ad2e277f0879000ae9',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"cluster_id\\": \\"c104d5d5f301c4e2a8ee578c37bc****\\",\\n  \\"request_id\\": \\"A9891419-D125-4D89-AFCA-68846675E2F7\\",\\n  \\"task_id\\": \\"T-60fea8ad2e277f0879000ae9\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteClusterNodesResponse>\\n    <cluster_id>c104d5d5f301c4e2a8ee578c37bc****</cluster_id>\\n    <request_id>A9891419-D125-4D89-AFCA-68846675E2F7</request_id>\\n    <task_id>T-60fea8ad2e277f0879000ae9</task_id>\\n</DeleteClusterNodesResponse>","errorExample":""}]',
      'title' => '移除集群节点',
      'description' => '- 移除节点会涉及Pod迁移，可能会影响业务，请在业务低峰期操作。
- 操作过程中可能存在非预期风险，请提前做好相关的数据备份。
- 操作过程中，后台会把当前节点设置为不可调度状态。
- 移除节点仅移除Worker节点，不会移除Master节点。',
    ),
    'AttachInstances' => 
    array (
      'summary' => '添加已有ECS实例到ACK集群。',
      'path' => '/clusters/{ClusterId}/attach',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c106f377e16f34eb1808d6b9362c9****',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'title' => '请求体',
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'instances' => 
              array (
                'title' => '实例列表。',
                'description' => '待添加实例列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '待添加的实例ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'i-2zed0sswuau6o89b****',
                ),
                'required' => true,
              ),
              'key_pair' => 
              array (
                'title' => 'key_pair名称，与login_password二选一',
                'description' => '待添加实例的密钥对名称，和`login_password`二选一。

> 指定`nodepool_id`后，该参数不支持。',
                'type' => 'string',
                'required' => false,
                'example' => 'security-key',
              ),
              'password' => 
              array (
                'title' => 'password，与key_pair二选一。',
                'description' => '待添加实例的SSH登录密码，和`key_pair`二选一。密码规则为8~30个字符，且至少同时包含三项（大小写字母、数字和特殊符号），不支持反斜线（\\）和半角双引号（"）两个符号。

出于安全性考虑，密码传输过程中都是经过加密处理的。',
                'type' => 'string',
                'required' => false,
                'example' => 'Hello1234',
              ),
              'format_disk' => 
              array (
                'title' => '是否格式化数据盘。',
                'description' => '是否将容器数据和镜像存储在数据盘中。取值：

- `true`：将容器数据和镜像存储在数据盘。

- `false`：不将容器数据和镜像存储在数据盘。

默认值：`false`。


数据盘挂载规则：

- 如果ECS已挂载数据盘，且最后一块数据盘的文件系统未初始化，系统会自动将该数据盘格式化为EXT4，用来存放内容/var/lib/docker、/var/lib/kubelet。
- 如果ECS未挂载数据盘，则不会挂载新的数据盘。
>当选择将数据存储至数据盘并且ECS已挂载数据盘，数据盘内原有数据将丢失，请注意备份数据。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'keep_instance_name' => 
              array (
                'title' => '是否保留实例名称。',
                'description' => '是否保留原实例名称。取值：

- `true`：保留实例名称。

- `false`：不保留实例名称。

默认值：`false`。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'is_edge_worker' => 
              array (
                'title' => '是否为边缘节点。',
                'description' => '是否为边缘节点，即ENS节点。取值：

- `true`：表示添加的节点是边缘节点。

- `false`：表示添加的节点是不是边缘节点。

默认值：`false`。

> 如果是边缘节点，取值必须是`true`，用于标识该节点类型为ENS节点。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'nodepool_id' => 
              array (
                'title' => '节点池ID，欲将节点添加到哪个节点池中。。',
                'description' => '节点池ID。如果不指定，则将节点添加到默认节点池中。',
                'type' => 'string',
                'required' => false,
                'example' => 'np615c0e0966124216a0412e10afe0****',
              ),
              'image_id' => 
              array (
                'title' => '自定义镜像ID。',
                'description' => '自定义镜像ID，如果不传则使用默认系统镜像。

>- 实例系统盘镜像将被替换为该镜像。
- 指定`nodepool_id`后，该参数不支持。
',
                'type' => 'string',
                'required' => false,
                'example' => 'aliyun_2_1903_x64_20G_alibase_20200529.vhd',
              ),
              'cpu_policy' => 
              array (
                'title' => 'CPU亲和策略。',
                'description' => '节点CPU管理策略。当集群版本在1.12.6及以上时支持以下两种策略：

- `static`：允许为节点上具有某些资源特征Pod增强其CPU亲和性和独占性。
- `none`：表示启用现有的默认CPU亲和性方案。

默认值：`none`。

> 指定`nodepool_id`后，该参数不支持。',
                'type' => 'string',
                'required' => false,
                'example' => 'none',
              ),
              'user_data' => 
              array (
                'title' => '节点自定义数据。',
                'description' => '节点自定义数据。更多详情，请参见[生成实例自定义数据](~~49121~~)。

> 指定`nodepool_id`后，该参数不支持。',
                'type' => 'string',
                'required' => false,
                'example' => 'IyEvdXNyL2Jpbi9iYXNoCmVjaG8gIkhlbGxvIEFDSyEi',
              ),
              'rds_instances' => 
              array (
                'title' => 'RDS实例列表。',
                'description' => 'RDS实例列表。
',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'RDS实例ID。

> 指定`nodepool_id`后，该参数不支持。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'rm-67yawhau****',
                ),
                'required' => false,
              ),
              'runtime' => 
              array (
                'description' => '容器运行时。
> 指定`nodepool_id`后，该参数不支持。',
                'required' => false,
                '$ref' => '#/components/schemas/runtime',
              ),
              'tags' => 
              array (
                'title' => '节点标签。',
                'description' => '节点标签。标签定义规则：

- 标签由区分大小写的键值对组成，您最多可以设置20个标签。
- 标签键不可以重复，最长为64个字符；标签值可以为空，最长为128个字符。标签键和标签值都不能以`aliyun`、`acs:`、`https://`或`http://`开头。详情请参见[Labels and Selectors](https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/#syntax-and-character-set)。
> 指定`nodepool_id`后，该参数不支持。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '节点标签。',
                  'required' => false,
                  '$ref' => '#/components/schemas/tag',
                ),
                'required' => false,
              ),
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
            'title' => '返回体数据。',
            'description' => '返回体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'list' => 
              array (
                'title' => '节点信息列表。',
                'description' => '节点添加信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '节点添加结果详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'code' => 
                    array (
                      'title' => '状态码。',
                      'description' => '节点添加结果状态码。',
                      'type' => 'string',
                      'example' => '200',
                    ),
                    'instanceId' => 
                    array (
                      'title' => '实例ID。',
                      'description' => '实例ID。',
                      'type' => 'string',
                      'example' => 'i-2ze0lgm3y6iylcbt****',
                    ),
                    'message' => 
                    array (
                      'title' => '添加结果描述。',
                      'description' => '节点添加结果描述信息。',
                      'type' => 'string',
                      'example' => 'successful',
                    ),
                  ),
                ),
              ),
              'task_id' => 
              array (
                'title' => '任务ID。',
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'T-5a544aff80282e39ea000039',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"list\\": [\\n    {\\n      \\"code\\": \\"200\\",\\n      \\"instanceId\\": \\"i-2ze0lgm3y6iylcbt****\\",\\n      \\"message\\": \\"successful\\"\\n    }\\n  ],\\n  \\"task_id\\": \\"T-5a544aff80282e39ea000039\\"\\n}","errorExample":""},{"type":"xml","example":"<AttachInstancesResponse>\\n    <list>\\n        <code>200</code>\\n        <instanceId>i-2ze0lgm3y6iylcbt****</instanceId>\\n        <message>successful</message>\\n    </list>\\n    <task_id>T-5a544aff80282e39ea000039</task_id>\\n</AttachInstancesResponse>","errorExample":""}]',
      'title' => '添加已有实例到集群',
    ),
    'InstallClusterAddons' => 
    array (
      'summary' => '为了增强Kubernetes能力，ACK集群支持了多种组件，例如托管的核心组件，应用、日志和监控、网络、存储、安全组件等。您可以调用InstallClusterAddons接口，通过组件名称和版本安装组件。',
      'path' => '/clusters/{ClusterId}/components/install',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c82e6987e2961451182edacd74faf****',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'Addon列表。',
            'description' => '请求体参数。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '组件详情。',
              'type' => 'object',
              'properties' => 
              array (
                'name' => 
                array (
                  'title' => '组件名称。',
                  'description' => '组件名称。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'ags-metrics-collector',
                ),
                'version' => 
                array (
                  'title' => '组件版本号。',
                  'description' => '组件版本。

> 可以API接口[DescribeClusterAddonsVersion](~~197434~~)通过组件列表查询版本号。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'v1.0.0.2-cc3b2d6-aliyun',
                ),
                'config' => 
                array (
                  'title' => '组件配置信息。',
                  'description' => '组件自定义参数，使用JSON字符串编码。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '{\\"IngressDashboardEnabled\\":\\"true\\",\\"sls_project_name\\":\\"your_sls_project_name\\"}"}',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'example' => 'ags-metrics-collector',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '安装集群组件',
    ),
    'UnInstallClusterAddons' => 
    array (
      'summary' => '当您无需使用集群某些组件时，您可以调用UnInstallClusterAddons接口指定组件名称，删除组件，并选择是否删除关联的阿里云云资源。',
      'path' => '/clusters/{ClusterId}/components/uninstall',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c5b5e80b0b64a4bf6939d2d8fbbc5****',
          ),
        ),
        1 => 
        array (
          'name' => 'addons',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '卸载组件列表。',
            'description' => '组件列表，结构为数组。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '组件详情。',
              'type' => 'object',
              'properties' => 
              array (
                'name' => 
                array (
                  'title' => '组件名称。',
                  'description' => '组件名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ack-node-problem-detector',
                ),
                'cleanup_cloud_resources' => 
                array (
                  'title' => '是否清理组件创建的云资源实例。',
                  'description' => '是否清理云资源。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'true',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '卸载集群组件',
    ),
    'DescribeAddons' => 
    array (
      'summary' => '查询平台支持的所有组件的详情。',
      'path' => '/clusters/components/metadata',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'region',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域ID。',
            'description' => '集群所在地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'cluster_type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '集群类型。  - Kubernetes: 专有版集群。 - ManagedKubernetes：托管版集群。 - Ask：Serverless 集群。 - ExternalKubernetes：注册到ACK的外部集群。',
            'description' => '- `Kubernetes`: ACK专有集群。

- `ManagedKubernetes`：ACK托管类的集群，包括ACK托管集群（ACK集群Pro版、ACK集群基础版）、ACK Serverless集群（Pro版、基础版）、ACK Edge集群（Pro版、基础版）、ACK灵骏集群（Pro版）。

- `ExternalKubernetes`：注册集群。',
            'type' => 'string',
            'required' => false,
            'example' => 'ManagedKubernetes',
          ),
        ),
        2 => 
        array (
          'name' => 'cluster_profile',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群类型，取值：
- `Default`：托管版集群。
- `Serverless`：Serverless集群。
- `Edge`：边缘集群。',
            'type' => 'string',
            'required' => false,
            'example' => 'Default',
          ),
        ),
        3 => 
        array (
          'name' => 'cluster_spec',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当您选择`cluster_type`为`ManagedKubernetes`并配置`profile`后，您可以进一步指定集群的规格。

- `ack.pro.small`：集群Pro版。

- `ack.standard`：集群基础版（取值为空时默认选择）。',
            'type' => 'string',
            'required' => false,
            'example' => 'ack.pro.small',
          ),
        ),
        4 => 
        array (
          'name' => 'cluster_version',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群版本。',
            'type' => 'string',
            'required' => false,
            'example' => '1.24.6-aliyun.1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回数据体。',
            'description' => '返回体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'ComponentGroups' => 
              array (
                'title' => '组件分组信息，例如：存储类组件，网络组件等。',
                'description' => '组件分组列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '组件分组详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'group_name' => 
                    array (
                      'title' => '组件组名称。',
                      'description' => '组件分组名称。',
                      'type' => 'string',
                      'example' => 'storage',
                    ),
                    'items' => 
                    array (
                      'title' => '组件列表',
                      'description' => '该分组内包含的组件名称。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '组件详情。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'name' => 
                          array (
                            'title' => '组件名称。',
                            'description' => '组件名称。',
                            'type' => 'string',
                            'example' => 'flexvolume',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'StandardComponents' => 
              array (
                'title' => '标准组件信息，包含各个组件的描述信息。',
                'description' => '标准组件。',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'name' => 
                    array (
                      'title' => '组件名称。',
                      'description' => '组件名称。',
                      'type' => 'string',
                      'example' => 'ack-arena',
                    ),
                    'version' => 
                    array (
                      'title' => '组件版本。',
                      'description' => '组件版本。',
                      'type' => 'string',
                      'example' => '0.5.0',
                    ),
                    'description' => 
                    array (
                      'title' => '组件描述信息。',
                      'description' => '组件功能说明。',
                      'type' => 'string',
                      'example' => '***',
                    ),
                    'required' => 
                    array (
                      'title' => '是否为必需组件。',
                      'description' => '是否为集群必需组件。取值：

- `true`：必需组件，集群创建时必须要安装的组件。

- `false`：非必需组件，集群创建完成后，可通过`组件管理`进行安装。
',
                      'type' => 'string',
                      'example' => 'false',
                    ),
                    'disabled' => 
                    array (
                      'title' => '是否禁止默认安装。',
                      'description' => '是否禁止默认安装，集群创建时除了安装集群所需的组件外，还会额外安装一些与日志或者路由相关的组件（例如：Ingress），如果您不想默认安装，可通过设置该字段禁止默认安装。取值：

- `true`：禁止默认安装。
- `false`：默认安装。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                  ),
                  'description' => '标准组件的详细信息。',
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'substitutions' => 
        array (
          0 => 'CS::2015-12-15::ListAddons',
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ComponentGroups\\": [\\n    {\\n      \\"group_name\\": \\"storage\\",\\n      \\"items\\": [\\n        {\\n          \\"name\\": \\"flexvolume\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"StandardComponents\\": {\\n    \\"key\\": {\\n      \\"name\\": \\"ack-arena\\",\\n      \\"version\\": \\"0.5.0\\",\\n      \\"description\\": \\"***\\",\\n      \\"required\\": \\"false\\",\\n      \\"disabled\\": false\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<StandardComponents>\\n    <cloud-controller-manager>\\n        <name>cloud-controller-manager</name>\\n        <version>v1.9.3.339-g9830b58-aliyun</version>\\n        <disabled>false</disabled>\\n        <required>true</required>\\n        <description>name: Cloud Controller Manager introduction: Using Cloud Controller Manager to create load balancers for k8s applications and manage node route entries doc:en: https://www.alibabacloud.com/help/doc-detail/94925.htm</description>\\n    </cloud-controller-manager>\\n    <csi-plugin>\\n        <name>csi-plugin</name>\\n        <version>v1.16.9.43-f36bb540-aliyun</version>\\n        <disabled>false</disabled>\\n        <required>false</required>\\n        <description>csi-plugin</description>\\n    </csi-plugin>\\n</StandardComponents>\\n<ComponentGroups>\\n    <group_name>storage</group_name>\\n    <items>\\n        <name>flexvolume</name>\\n    </items>\\n    <items>\\n        <name>alicloud-disk-controller</name>\\n    </items>\\n    <items>\\n        <name>csi-plugin</name>\\n    </items>\\n    <items>\\n        <name>csi-provisioner</name>\\n    </items>\\n</ComponentGroups>\\n<ComponentGroups>\\n    <group_name>network</group_name>\\n    <items>\\n        <name>kube-flannel-ds</name>\\n    </items>\\n    <items>\\n        <name>terway</name>\\n    </items>\\n    <items>\\n        <name>terway-eni</name>\\n    </items>\\n    <items>\\n        <name>terway-eniip</name>\\n    </items>\\n    <items>\\n        <name>nginx-ingress-controller</name>\\n    </items>\\n    <items>\\n        <name>coredns</name>\\n    </items>\\n    <items>\\n        <name>managed-kube-proxy</name>\\n    </items>\\n</ComponentGroups>","errorExample":""}]',
      'title' => '查询集群组件详情',
    ),
    'DescribeClusterAddonsVersion' => 
    array (
      'summary' => '根据集群ID，查询集群中已安装的所有组件的详情。',
      'path' => '/clusters/{ClusterId}/components/version',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c82e6987e2961451182edacd74faf****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '组件版本信息。',
            'description' => '返回体参数。',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'component_name' => 
                array (
                  'title' => '组件名称',
                  'description' => '组件名称。',
                  'type' => 'string',
                  'example' => 'ack-node-problem-detector',
                ),
                'version' => 
                array (
                  'title' => '组件当前版本',
                  'description' => '组件当前版本。

> 如果`version`值不为空，则表示该组件已经安装。',
                  'type' => 'string',
                  'example' => '1.2.1',
                ),
                'next_version' => 
                array (
                  'title' => '组件可升级版本',
                  'description' => '下一个可升级版本。',
                  'type' => 'string',
                  'example' => '1.2.1',
                ),
                'changed' => 
                array (
                  'title' => '组件是否升级过。',
                  'description' => '组件是否有更新。取值：

- `true`：已更新。
- `false`：未更新。',
                  'type' => 'string',
                  'example' => 'false',
                ),
                'can_upgrade' => 
                array (
                  'title' => '组件是否可以升级。',
                  'description' => '组件是否可升级。取值：

- `true`：组件可升级。
- `false`：组件不可升级。',
                  'type' => 'boolean',
                  'example' => 'false',
                ),
                'policy' => 
                array (
                  'title' => '组件升级策略',
                  'description' => '组件升级策略。

- `overwrite`：强制覆盖。

默认值：`overwrite`。

',
                  'type' => 'string',
                  'example' => 'overwrite',
                ),
                'ready_to_upgrade' => 
                array (
                  'title' => '组件是否满足升级条件',
                  'description' => '组件是否满足升级条件。取值：

- `true`：满足升级条件。
- `false`：不满足升级条件。',
                  'type' => 'string',
                  'example' => 'false',
                ),
                'exist' => 
                array (
                  'title' => '组件是否已经存在',
                  'description' => '是否可以在集群中安装该组件。取值：

- `true`：可安装。
- `false`：不可安装。',
                  'type' => 'boolean',
                  'example' => 'true',
                ),
                'required' => 
                array (
                  'title' => '组件是否为集群必需。',
                  'description' => '组件是否为集群必需组件。取值：

- `true`：为必需组件。
- `false`：非必需组件。',
                  'type' => 'boolean',
                  'example' => 'false',
                ),
                'message' => 
                array (
                  'title' => '组件描述信息',
                  'description' => '组件是否可升级的额外说明。',
                  'type' => 'string',
                  'example' => '节点故障检测以及上报至事件中心的插件',
                ),
                'value' => 
                array (
                  'title' => '安装addon的时候，用户自定义的参数值。Yaml字符串。',
                  'description' => '组件安装时，用户自定义的参数值。',
                  'type' => 'string',
                  'example' => 'npd:\\n  # Custom monitor definitions to add to Node Problem Detector ****',
                ),
              ),
              'description' => '组件详情。',
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'substitutions' => 
        array (
          0 => 'CS::2015-12-15::ListClusterAddonInstances',
          1 => 'CS::2015-12-15::GetClusterAddonInstance',
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"key\\": {\\n    \\"component_name\\": \\"ack-node-problem-detector\\",\\n    \\"version\\": \\"1.2.1\\",\\n    \\"next_version\\": \\"1.2.1\\",\\n    \\"changed\\": \\"false\\",\\n    \\"can_upgrade\\": false,\\n    \\"policy\\": \\"overwrite\\",\\n    \\"ready_to_upgrade\\": \\"false\\",\\n    \\"exist\\": true,\\n    \\"required\\": false,\\n    \\"message\\": \\"节点故障检测以及上报至事件中心的插件\\",\\n    \\"value\\": \\"npd:\\\\\\\\n  # Custom monitor definitions to add to Node Problem Detector ****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ack-node-problem-detector>\\n    <exist>true</exist>\\n    <component_name>ack-node-problem-detector</component_name>\\n    <can_upgrade>false</can_upgrade>\\n    <ready_to_upgrade>false</ready_to_upgrade>\\n    <message>节点故障检测以及上报至事件中心的插件</message>\\n    <version>1.2.1</version>\\n    <value>npd:\\n  # Custom monitor definitions to add to Node Problem Detector ****</value>\\n    <required>false</required>\\n    <next_version>1.2.1</next_version>\\n    <changed>false</changed>\\n    <policy>overwrite</policy>\\n</ack-node-problem-detector>","errorExample":""}]',
      'title' => '查询集群组件版本',
    ),
    'DescribeClusterAddonInstance' => 
    array (
      'summary' => '调用DescribeClusterAddonInstance查询已安装的集群组件的版本、状态和配置等信息。',
      'path' => '/clusters/{ClusterID}/components/{AddonName}/instance',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterID',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cd06bbf8a86764a31bcac76136691****',
          ),
        ),
        1 => 
        array (
          'name' => 'AddonName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '组件名称。',
            'description' => '组件名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'terway-eniip',
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
              'name' => 
              array (
                'title' => '组件名称。',
                'description' => '组件名称。',
                'type' => 'string',
                'example' => 'terway-eniip',
              ),
              'version' => 
              array (
                'title' => '组件版本。',
                'description' => '组件版本。',
                'type' => 'string',
                'example' => 'v1.4.3',
              ),
              'state' => 
              array (
                'title' => '组件状态。',
                'description' => '组件状态：

- initial：安装中
- active：已安装
- unhealthy：状态异常
- upgrading：升级中
- updating：变更中
- deleting：卸载中
- deleted：已删除',
                'type' => 'string',
                'example' => 'active',
                'enum' => 
                array (
                  0 => 'initial',
                  1 => 'active',
                  2 => 'unhealthy',
                  3 => 'upgrading',
                  4 => 'updating',
                  5 => 'deleting',
                  6 => 'deleted',
                ),
              ),
              'config' => 
              array (
                'title' => '组件配置。',
                'description' => '组件配置。',
                'type' => 'string',
                'example' => '{"NetworkPolicy":"true"}',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'substitutions' => 
        array (
          0 => 'CS::2015-12-15::GetClusterAddonInstance',
        ),
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"name\\": \\"terway-eniip\\",\\n  \\"version\\": \\"v1.4.3\\",\\n  \\"state\\": \\"active\\",\\n  \\"config\\": \\"{\\\\\\"NetworkPolicy\\\\\\":\\\\\\"true\\\\\\"}\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeClusterAddonInstanceResponse>\\n    <name>terway-eniip</name>\\n    <version>v1.4.3</version>\\n    <state>active</state>\\n    <config>{\\"NetworkPolicy\\":\\"true\\"}</config>\\n</DescribeClusterAddonInstanceResponse>","errorExample":""}]',
      'title' => '查询集群组件实例信息',
    ),
    'ListAddons' => 
    array (
      'summary' => '您可以调用ListAddons接口，根据指定地域、集群类型、集群子类型（profile）、集群版本等参数获取可用组件的列表，并查询组件的详细信息，包括组件托管与否、支持的自定义参数Schema、兼容的操作系统架构等。',
      'path' => '/addons',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'region_id',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域。',
            'description' => '地域。
如果传入了cluster_id，该参数将被忽略。
region_id、cluster_type、profile、cluster_spec、cluster_version五个参数需要同时传入。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'cluster_type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '集群类型。',
            'description' => '集群类型。
如果传入了cluster_id，该参数将被忽略。
region_id、cluster_type、profile、cluster_spec、cluster_version五个参数需要同时传入。',
            'type' => 'string',
            'required' => false,
            'example' => 'ManagedKubernetes',
          ),
        ),
        2 => 
        array (
          'name' => 'profile',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '集群子类型。',
            'description' => '集群子类型。
如果传入了cluster_id，该参数将被忽略。
region_id、cluster_type、profile、cluster_spec、cluster_version五个参数需要同时传入。',
            'type' => 'string',
            'required' => false,
            'example' => 'Default',
          ),
        ),
        3 => 
        array (
          'name' => 'cluster_spec',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '集群规格。',
            'description' => '集群规格。
如果传入了cluster_id，该参数将被忽略。
region_id、cluster_type、profile、cluster_spec、cluster_version五个参数需要同时传入。',
            'type' => 'string',
            'required' => false,
            'example' => 'ack.pro.small',
          ),
        ),
        4 => 
        array (
          'name' => 'cluster_version',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '集群版本。',
            'description' => '集群版本。
如果传入了cluster_id，该参数将被忽略。
region_id、cluster_type、profile、cluster_spec、cluster_version五个参数需要同时传入。',
            'type' => 'string',
            'required' => false,
            'example' => '1.26.3-aliyun.1',
          ),
        ),
        5 => 
        array (
          'name' => 'cluster_id',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。
指定集群ID时，查询该集群可用的组件列表，此时其他参数将会被忽略。',
            'type' => 'string',
            'required' => false,
            'example' => 'c02b3e03be10643e8a644a843ffcb****',
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
              'addons' => 
              array (
                'title' => '可用组件列表。',
                'description' => '可用组件列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'name' => 
                    array (
                      'title' => '组件名称。',
                      'description' => '组件名称。',
                      'type' => 'string',
                      'example' => 'arms-prometheus',
                    ),
                    'version' => 
                    array (
                      'title' => '版本。',
                      'description' => '版本。',
                      'type' => 'string',
                      'example' => '1.1.9',
                    ),
                    'managed' => 
                    array (
                      'title' => '是否为托管组件。',
                      'description' => '是否为托管组件。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'install_by_default' => 
                    array (
                      'title' => '是否默认安装。',
                      'description' => '是否默认安装。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'category' => 
                    array (
                      'title' => '组件分类。',
                      'description' => '组件分类。',
                      'type' => 'string',
                      'example' => 'monitor',
                    ),
                    'config_schema' => 
                    array (
                      'title' => '组件自定义参数的schema。',
                      'description' => '组件自定义参数的schema。',
                      'type' => 'string',
                      'example' => '{}',
                    ),
                    'supported_actions' => 
                    array (
                      'title' => '组件支持的操作，可能的值：
- Install
- Upgrade
- Modify
- Uninstall',
                      'description' => '组件支持的操作，可能的值：
- Install
- Upgrade
- Modify
- Uninstall',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '组件支持的操作，可能的值：
- Install
- Upgrade
- Modify
- Uninstall',
                        'type' => 'string',
                        'example' => 'Install',
                      ),
                    ),
                    'architecture' => 
                    array (
                      'title' => '组件支持的体系结构，可能的值：
- amd64
- arm64',
                      'description' => '组件支持的体系结构，可能的值：
- amd64
- arm64',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '组件支持的操作，可能的值：
- Install
- Upgrade
- Modify
- Uninstall',
                        'type' => 'string',
                        'example' => 'amd64',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"addons\\": [\\n    {\\n      \\"name\\": \\"arms-prometheus\\",\\n      \\"version\\": \\"1.1.9\\",\\n      \\"managed\\": false,\\n      \\"install_by_default\\": false,\\n      \\"category\\": \\"monitor\\",\\n      \\"config_schema\\": \\"{}\\",\\n      \\"supported_actions\\": [\\n        \\"Install\\"\\n      ],\\n      \\"architecture\\": [\\n        \\"amd64\\"\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListAddonsResponse>\\n    <addons>\\n        <name>aliyun-acr-credential-helper</name>\\n        <category>security</category>\\n        <install_by_default>false</install_by_default>\\n        <managed>false</managed>\\n        <version>v21.12.20.0-a6d9879-aliyun</version>\\n        <supported_actions>Install</supported_actions>\\n        <supported_actions>Upgrade</supported_actions>\\n        <supported_actions>Uninstall</supported_actions>\\n        <architecture>amd64</architecture>\\n        <config_schema/>\\n    </addons>\\n    <addons>\\n        <name>ack-scheduler</name>\\n        <category>core</category>\\n        <install_by_default>true</install_by_default>\\n        <managed>true</managed>\\n        <version>v1.26.3-aliyun-5.10-ca3c5b7a</version>\\n        <supported_actions>Modify</supported_actions>\\n        <supported_actions>Upgrade</supported_actions>\\n        <architecture>amd64</architecture>\\n        <config_schema>{\\n  \\"$schema\\": \\"http://json-schema.org/draft-07/schema#\\",\\n  \\"properties\\": {\\n    \\"podMaxBackoffSeconds\\": {\\n      \\"type\\": \\"integer\\",\\n      \\"default\\": 10,\\n      \\"minimum\\": 1,\\n      \\"maximum\\": 100000,\\n      \\"describe\\": \\"PodMaxBackoffSeconds is the max backoff for unschedulable pods.\\",\\n      \\"x-ui-description\\": \\"cos.k8s.addon.config.ack-scheduler.description.pMBS\\",\\n      \\"x-ui-prompt-message\\": \\"cos.k8s.addon.config.ack-scheduler.prompt.pMBS\\", \\n      \\"x-ui-validation-message\\": \\"cos.k8s.addon.config.ack-scheduler.validation.pMBS\\"\\n    },\\n    \\"binpackEnable\\": {\\n      \\"type\\": \\"boolean\\",\\n      \\"default\\": false,\\n      \\"describe\\": \\"enable the bin packing of resources or not\\",\\n      \\"x-ui-description\\": \\"cos.k8s.addon.config.ack-scheduler.description.binpackEnable\\",\\n      \\"x-ui-prompt-message\\": \\"cos.k8s.addon.config.ack-scheduler.prompt.binpackEnable\\", \\n      \\"x-ui-validation-message\\": \\"cos.k8s.addon.config.ack-scheduler.validation.binpackEnable\\"\\n    },\\n    \\"binpackPluginWeight\\": {\\n      \\"type\\": \\"integer\\",\\n      \\"default\\": 100,\\n      \\"minimum\\": 1,\\n      \\"maximum\\": 100000,\\n      \\"describe\\": \\"weight of binpack plugin when scoring\\",\\n      \\"x-ui-description\\": \\"cos.k8s.addon.config.ack-scheduler.description.binpackPluginWeight\\",\\n      \\"x-ui-prompt-message\\": \\"cos.k8s.addon.config.ack-scheduler.prompt.binpackPluginWeight\\", \\n      \\"x-ui-validation-message\\": \\"cos.k8s.addon.config.ack-scheduler.validation.binpackPluginWeight\\"\\n    },\\n    \\"binpackResourceWeight\\": {\\n      \\"type\\": \\"array\\",\\n      \\"items\\": {\\n        \\"type\\": \\"object\\",\\n        \\"properties\\": {\\n          \\"resourceName\\": {\\n            \\"type\\": \\"string\\",\\n            \\"description\\": \\"resource name\\",\\n            \\"default\\": \\"\\",\\n            \\"pattern\\": \\"^([a-zA-z][a-zA-z0-9\\\\\\\\.\\\\\\\\-\\\\\\\\/]*[a-zA-z0-9])|[a-zA-z]$\\",\\n            \\"maxLength\\": 254,\\n            \\"x-ui-description\\": \\"cos.k8s.addon.config.ack-scheduler.description.binpackResourceWeight.key\\",\\n            \\"x-ui-prompt-message\\": \\"cos.k8s.addon.config.ack-scheduler.prompt.binpackResourceWeight.key\\", \\n            \\"x-ui-validation-message\\": \\"cos.k8s.addon.config.ack-scheduler.validation.binpackResourceWeight.key\\"\\n          },\\n          \\"resourceWeight\\": {\\n            \\"type\\": \\"integer\\",\\n            \\"description\\": \\"resource weight\\",\\n            \\"default\\": 1,\\n            \\"minimum\\": 1,\\n            \\"maximum\\": 10000,\\n            \\"x-ui-description\\": \\"cos.k8s.addon.config.ack-scheduler.description.binpackResourceWeight.value\\",\\n            \\"x-ui-prompt-message\\": \\"cos.k8s.addon.config.ack-scheduler.prompt.binpackResourceWeight.value\\", \\n            \\"x-ui-validation-message\\": \\"cos.k8s.addon.config.ack-scheduler.validation.binpackResourceWeight.value\\"\\n          }\\n        }\\n      }\\n    },\\n    \\"connectionQPS\\": {\\n      \\"type\\": \\"integer\\",\\n      \\"default\\": 50,\\n      \\"minimum\\": 1,\\n      \\"maximum\\": 10000,\\n      \\"describe\\": \\"qps controls the number of queries per second allowed for this connection\\",\\n      \\"x-ui-description\\": \\"cos.k8s.addon.config.ack-scheduler.description.connectionQPS\\",\\n      \\"x-ui-prompt-message\\": \\"cos.k8s.addon.config.ack-scheduler.prompt.connectionQPS\\", \\n      \\"x-ui-validation-message\\": \\"cos.k8s.addon.config.ack-scheduler.validation.connectionQPS\\"\\n    },\\n    \\"connectionBurst\\": {\\n      \\"type\\": \\"integer\\",\\n      \\"default\\": 100,\\n      \\"minimum\\": 1,\\n      \\"maximum\\": 10000,\\n      \\"describe\\": \\"burst allows extra queries to accumulate when a client is exceeding its rate\\",\\n      \\"x-ui-description\\": \\"cos.k8s.addon.config.ack-scheduler.description.connectionBurst\\",\\n      \\"x-ui-prompt-message\\": \\"cos.k8s.addon.config.ack-scheduler.prompt.connectionBurst\\", \\n      \\"x-ui-validation-message\\": \\"cos.k8s.addon.config.ack-scheduler.validation.connectionBurst\\"\\n    },\\n    \\"percentageOfNodesToScore\\": {\\n      \\"type\\": \\"integer\\",\\n      \\"default\\": 0,\\n      \\"minimum\\": 0,\\n      \\"maximum\\": 100,\\n      \\"describe\\": \\"percentage of nodes to score when schedule\\",\\n      \\"x-ui-description\\": \\"cos.k8s.addon.config.ack-scheduler.description.percentageOfNodesToScore\\",\\n      \\"x-ui-prompt-message\\": \\"cos.k8s.addon.config.ack-scheduler.prompt.percentageOfNodesToScore\\", \\n      \\"x-ui-validation-message\\": \\"cos.k8s.addon.config.ack-scheduler.validation.percentageOfNodesToScore\\"\\n    },\\n    \\"enableGPUShareScore\\": {\\n      \\"type\\": \\"boolean\\",\\n      \\"default\\": true,\\n      \\"describe\\": \\"enable the score point of gpushare plugin or not\\",\\n      \\"x-ui-description\\": \\"cos.k8s.addon.config.ack-scheduler.description.enableGPUShareScore\\",\\n      \\"x-ui-prompt-message\\": \\"cos.k8s.addon.config.ack-scheduler.description.enableGPUShareScore\\",\\n      \\"x-ui-validation-message\\": \\"cos.k8s.addon.config.ack-scheduler.validation.enableGPUShareScore\\"\\n    },\\n    \\"loadAwareEnable\\": {\\n        \\"type\\": \\"boolean\\",\\n        \\"default\\": false,\\n        \\"describe\\": \\"enable the loadaware scheduling feature\\",\\n        \\"x-ui-description\\": \\"cos.k8s.addon.config.ack-scheduler.description.laEnable\\",\\n        \\"x-ui-prompt-message\\": \\"cos.k8s.addon.config.ack-scheduler.prompt.laEnable\\",\\n        \\"x-ui-validation-message\\": \\"cos.k8s.addon.config.ack-scheduler.validation.laEnable\\"\\n    },\\n    \\"loadAwareResourceWeight\\": {\\n        \\"type\\": \\"array\\",\\n        \\"items\\": {\\n            \\"type\\": \\"object\\",\\n            \\"properties\\": {\\n                \\"resourceName\\": {\\n                    \\"type\\": \\"string\\",\\n                    \\"description\\": \\"resource name\\",\\n                    \\"default\\": \\"cpu\\",\\n                    \\"enum\\": [\\"cpu\\",\\"memory\\"],\\n                    \\"maxLength\\": 254,\\n                    \\"x-ui-description\\": \\"cos.k8s.addon.config.ack-scheduler.description.laResourceWeight.key\\",\\n                    \\"x-ui-prompt-message\\": \\"cos.k8s.addon.config.ack-scheduler.prompt.laResourceWeight.key\\",\\n                    \\"x-ui-validation-message\\": \\"cos.k8s.addon.config.ack-scheduler.validation.laResourceWeight.key\\"\\n                },\\n                \\"resourceWeight\\": {\\n                    \\"type\\": \\"integer\\",\\n                    \\"description\\": \\"resource weight\\",\\n                    \\"default\\": 1,\\n                    \\"minimum\\": 1,\\n                    \\"maximum\\": 10000,\\n                    \\"x-ui-description\\": \\"cos.k8s.addon.config.ack-scheduler.description.laResourceWeight.value\\",\\n                    \\"x-ui-prompt-message\\": \\"cos.k8s.addon.config.ack-scheduler.prompt.laResourceWeight.value\\",\\n                    \\"x-ui-validation-message\\": \\"cos.k8s.addon.config.ack-scheduler.validation.laResourceWeight.value\\"\\n                }\\n            }\\n        }\\n    },\\n    \\"loadAwareAggregatedUsageAggregationType\\": {\\n        \\"type\\": \\"string\\",\\n        \\"description\\": \\"usage aggregation type\\",\\n        \\"default\\": \\"avg\\",\\n        \\"enum\\": [\\"p99\\", \\"avg\\", \\"p90\\", \\"p50\\", \\"p95\\"],\\n        \\"maxLength\\": 254,\\n        \\"x-ui-description\\": \\"cos.k8s.addon.config.ack-scheduler.description.aggregationType.value\\",\\n        \\"x-ui-prompt-message\\": \\"cos.k8s.addon.config.ack-scheduler.prompt.aggregationType.value\\",\\n        \\"x-ui-validation-message\\": \\"cos.k8s.addon.config.ack-scheduler.validation.aggregationType.value\\"\\n    }\\n  },\\n  \\"title\\": \\"Config\\",\\n  \\"type\\": \\"object\\"\\n}</config_schema>\\n    </addons>\\n    <addons>\\n        <name>logtail-ds</name>\\n        <category>monitor</category>\\n        <install_by_default>false</install_by_default>\\n        <managed>false</managed>\\n        <version>v1.8.2.0-aliyun</version>\\n        <supported_actions>Install</supported_actions>\\n        <supported_actions>Upgrade</supported_actions>\\n        <supported_actions>Modify</supported_actions>\\n        <supported_actions>Uninstall</supported_actions>\\n        <architecture>amd64</architecture>\\n        <architecture>arm64</architecture>\\n        <config_schema>{\\n  \\"$schema\\": \\"http://json-schema.org/draft-07/schema#\\",\\n  \\"properties\\": {\\n    \\"LogtailDSLimitCPU\\": {\\n      \\"description\\": \\"the cpu limit for Logtail-ds\\",\\n      \\"type\\": \\"string\\",\\n      \\"pattern\\": \\"(^[1-9][0-9]*$|^0\\\\\\\\.[1-9]$|^[1-9]\\\\\\\\.[0-9]$)\\",\\n      \\"default\\": \\"2\\",\\n      \\"x-ui-description\\": \\"cos.k8s.addon.config.logtail-ds.description.ds.cpulimit\\",\\n      \\"x-ui-prompt-message\\": \\"cos.k8s.addon.config.logtail-ds.prompt.ds.cpulimit\\",\\n      \\"x-ui-validation-message\\": \\"cos.k8s.addon.config.logtail-ds.validation.ds.cpulimit\\",\\n      \\"x-ui-additional-tips\\": \\"\\"\\n    },\\n    \\"LogtailDSLimitMemory\\": {\\n      \\"description\\": \\"the memory limit for Logtail-ds\\",\\n      \\"type\\": \\"string\\",\\n      \\"pattern\\": \\"(^[1-9][0-9]*$)\\",\\n      \\"default\\": \\"2048\\",\\n      \\"x-ui-description\\": \\"cos.k8s.addon.config.logtail-ds.description.ds.memlimit\\",\\n      \\"x-ui-prompt-message\\": \\"cos.k8s.addon.config.logtail-ds.prompt.ds.memlimit\\",\\n      \\"x-ui-validation-message\\": \\"cos.k8s.addon.config.logtail-ds.validation.ds.memlimit\\",\\n      \\"x-ui-additional-tips\\": \\"\\"\\n    },\\n    \\"LogtailDSMaxBytePerSec\\": {\\n      \\"description\\": \\"the Max Byte Per Second for Logtail-ds\\",\\n      \\"type\\": \\"string\\",\\n      \\"pattern\\": \\"(^[1-9][0-9]*$)\\",\\n      \\"default\\": \\"209715200\\",\\n      \\"x-ui-description\\": \\"cos.k8s.addon.config.logtail-ds.description.ds.maxbyte\\",\\n      \\"x-ui-prompt-message\\": \\"cos.k8s.addon.config.logtail-ds.prompt.ds.maxbyte\\",\\n      \\"x-ui-validation-message\\": \\"cos.k8s.addon.config.logtail-ds.validation.ds.maxbyte\\",\\n      \\"x-ui-additional-tips\\": \\"\\"\\n    },\\n    \\"LogtailDSSendRequestConcurrency\\": {\\n      \\"description\\": \\"the Send Cocurrency for Logtail-ds\\",\\n      \\"type\\": \\"string\\",\\n      \\"pattern\\": \\"(^[1-9][0-9]*$)\\",\\n      \\"default\\": \\"40\\",\\n      \\"x-ui-description\\": \\"cos.k8s.addon.config.logtail-ds.description.ds.cocurrency\\",\\n      \\"x-ui-prompt-message\\": \\"cos.k8s.addon.config.logtail-ds.prompt.ds.cocurrency\\",\\n      \\"x-ui-validation-message\\": \\"cos.k8s.addon.config.logtail-ds.validation.ds.cocurrency\\",\\n      \\"x-ui-additional-tips\\": \\"\\"\\n    },\\n    \\"LogtailDSProcessThreadCount\\": {\\n      \\"description\\": \\"the Process Thread Count for Logtail-ds\\",\\n      \\"type\\": \\"string\\",\\n      \\"pattern\\": \\"^[1-9][0-9]*$\\",\\n      \\"default\\": \\"1\\",\\n      \\"x-ui-description\\": \\"cos.k8s.addon.config.logtail-ds.description.ds.threadcount\\",\\n      \\"x-ui-prompt-message\\": \\"cos.k8s.addon.config.logtail-ds.prompt.ds.threadcount\\",\\n      \\"x-ui-validation-message\\": \\"cos.k8s.addon.config.logtail-ds.validation.ds.threadcount\\",\\n      \\"x-ui-additional-tips\\": \\"\\"\\n    },\\n    \\"LogtailDSExternalUserDefineIDs\\": {\\n      \\"description\\": \\"the user define ids for Logtail-ds\\",\\n      \\"type\\": \\"string\\",\\n      \\"pattern\\": \\"^.*$\\",\\n      \\"default\\": \\"\\",\\n      \\"x-ui-description\\": \\"cos.k8s.addon.config.logtail-ds.description.ds.userdefineids\\",\\n      \\"x-ui-prompt-message\\": \\"cos.k8s.addon.config.logtail-ds.prompt.ds.userdefineids\\",\\n      \\"x-ui-validation-message\\": \\"cos.k8s.addon.config.logtail-ds.validation.ds.userdefineids\\",\\n      \\"x-ui-additional-tips\\": \\"\\"\\n    },\\n    \\"LogtailStatefulsetReplicas\\": {\\n      \\"description\\": \\"the Replica for Logtail-StatefulSet\\",\\n      \\"type\\": \\"string\\",\\n      \\"pattern\\": \\"(^0$|^[1-9][0-9]*$)\\",\\n      \\"default\\": \\"1\\",\\n      \\"x-ui-description\\": \\"cos.k8s.addon.config.logtail-ds.description.ss.replica\\",\\n      \\"x-ui-prompt-message\\": \\"cos.k8s.addon.config.logtail-ds.prompt.ss.replica\\",\\n      \\"x-ui-validation-message\\": \\"cos.k8s.addon.config.logtail-ds.validation.ss.replica\\",\\n      \\"x-ui-additional-tips\\": \\"\\"\\n    },\\n    \\"LogtailStatefulsetLimitCPU\\": {\\n      \\"description\\": \\"the cpu limit for Logtail-StatefulSet\\",\\n      \\"type\\": \\"string\\",\\n      \\"pattern\\": \\"(^[1-9][0-9]*$|^0\\\\\\\\.[1-9]$|^[1-9]\\\\\\\\.[0-9]$)\\",\\n      \\"default\\": \\"2\\",\\n      \\"x-ui-description\\": \\"cos.k8s.addon.config.logtail-ds.description.ss.cpulimit\\",\\n      \\"x-ui-prompt-message\\": \\"cos.k8s.addon.config.logtail-ds.prompt.ss.cpulimit\\",\\n      \\"x-ui-validation-message\\": \\"cos.k8s.addon.config.logtail-ds.validation.ss.cpulimit\\",\\n      \\"x-ui-additional-tips\\": \\"\\"\\n    },\\n    \\"LogtailStatefulsetLimitMemory\\": {\\n      \\"description\\": \\"the memory limit for Logtail-StatefulSet\\",\\n      \\"type\\": \\"string\\",\\n      \\"pattern\\": \\"(^[1-9][0-9]*$)\\",\\n      \\"default\\": \\"2048\\",\\n      \\"x-ui-description\\": \\"cos.k8s.addon.config.logtail-ds.description.ss.memlimit\\",\\n      \\"x-ui-prompt-message\\": \\"cos.k8s.addon.config.logtail-ds.prompt.ss.memlimit\\",\\n      \\"x-ui-validation-message\\": \\"cos.k8s.addon.config.logtail-ds.validation.ss.memlimit\\",\\n      \\"x-ui-additional-tips\\": \\"\\"\\n    },\\n    \\"LogtailStatefulsetMaxBytePerSec\\": {\\n      \\"description\\": \\"the Max Byte Per Second for Logtail-StatefulSet\\",\\n      \\"type\\": \\"string\\",\\n      \\"pattern\\": \\"^[1-9][0-9]*$\\",\\n      \\"default\\": \\"209715200\\",\\n      \\"x-ui-description\\": \\"cos.k8s.addon.config.logtail-ds.description.ss.maxbyte\\",\\n      \\"x-ui-prompt-message\\": \\"cos.k8s.addon.config.logtail-ds.prompt.ss.maxbyte\\",\\n      \\"x-ui-validation-message\\": \\"cos.k8s.addon.config.logtail-ds.validation.ss.maxbyte\\",\\n      \\"x-ui-additional-tips\\": \\"\\"\\n    },\\n    \\"LogtailStatefulsetSendRequestConcurrency\\": {\\n      \\"description\\": \\"the SendCocurrency for Logtail-StatefulSet\\",\\n      \\"type\\": \\"string\\",\\n      \\"pattern\\": \\"^[1-9][0-9]*$\\",\\n      \\"default\\": \\"40\\",\\n      \\"x-ui-description\\": \\"cos.k8s.addon.config.logtail-ds.description.ss.cocurrency\\",\\n      \\"x-ui-prompt-message\\": \\"cos.k8s.addon.config.logtail-ds.prompt.ss.cocurrency\\",\\n      \\"x-ui-validation-message\\": \\"cos.k8s.addon.config.logtail-ds.validation.ss.cocurrency\\",\\n      \\"x-ui-additional-tips\\": \\"\\"\\n    },\\n    \\"LogtailStatefulsetProcessThreadCount\\": {\\n      \\"description\\": \\"the Process Thread Count for Logtail-StatefulSet\\",\\n      \\"type\\": \\"string\\",\\n      \\"pattern\\": \\"^[1-9][0-9]*$\\",\\n      \\"default\\": \\"1\\",\\n      \\"x-ui-description\\": \\"cos.k8s.addon.config.logtail-ds.description.ss.threadcount\\",\\n      \\"x-ui-prompt-message\\": \\"cos.k8s.addon.config.logtail-ds.prompt.ss.threadcount\\",\\n      \\"x-ui-validation-message\\": \\"cos.k8s.addon.config.logtail-ds.validation.ss.threadcount\\",\\n      \\"x-ui-additional-tips\\": \\"\\"\\n    },\\n    \\"LogtailStatefulsetExternalUserDefineIDs\\": {\\n      \\"description\\": \\"the user define ids for Logtail-StatefulSet\\",\\n      \\"type\\": \\"string\\",\\n      \\"pattern\\": \\"^.*$\\",\\n      \\"default\\": \\"\\",\\n      \\"x-ui-description\\": \\"cos.k8s.addon.config.logtail-ds.description.ss.userdefineids\\",\\n      \\"x-ui-prompt-message\\": \\"cos.k8s.addon.config.logtail-ds.prompt.ss.userdefineids\\",\\n      \\"x-ui-validation-message\\": \\"cos.k8s.addon.config.logtail-ds.validation.ss.userdefineids\\",\\n      \\"x-ui-additional-tips\\": \\"\\"\\n    },\\n    \\"SlsMonitoring\\": {\\n      \\"description\\": \\"the switch for sls metric components\\",\\n      \\"type\\": \\"string\\",\\n      \\"pattern\\": \\"^(true|false)$\\",\\n      \\"default\\": \\"false\\",\\n      \\"x-ui-description\\": \\"cos.k8s.addon.config.logtail-ds.description.fullstack\\",\\n      \\"x-ui-prompt-message\\": \\"cos.k8s.addon.config.logtail-ds.prompt.fullstack\\",\\n      \\"x-ui-validation-message\\": \\"cos.k8s.addon.config.logtail-ds.validation.fullstack\\",\\n      \\"x-ui-additional-tips\\": \\"\\"\\n    }\\n  },\\n  \\"title\\": \\"Config\\",\\n  \\"type\\": \\"object\\"\\n}</config_schema>\\n    </addons>\\n    <addons>\\n        <name>storage-operator</name>\\n        <category>storage</category>\\n        <install_by_default>true</install_by_default>\\n        <managed>false</managed>\\n        <version>v1.26.2-1de13b6-aliyun</version>\\n        <supported_actions>Install</supported_actions>\\n        <supported_actions>Upgrade</supported_actions>\\n        <architecture>amd64</architecture>\\n        <config_schema/>\\n    </addons>\\n</ListAddonsResponse>","errorExample":""}]',
      'title' => '查询可用的组件列表',
    ),
    'ListClusterAddonInstances' => 
    array (
      'summary' => '您可以调用ListClusterAddonInstances接口获取目标集群已安装的组件实例列表并查询组件实例的相关信息，包括组件版本、状态等。',
      'path' => '/clusters/{cluster_id}/addon_instances',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'cluster_id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'c02b3e03be10643e8a644a843ffcb****',
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
              'addons' => 
              array (
                'title' => '已安装的组件实例列表。',
                'description' => '已安装的组件实例列表。',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '组件实例信息。',
                  'description' => '组件实例信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'name' => 
                    array (
                      'title' => '组件名称。',
                      'description' => '组件名称。',
                      'type' => 'string',
                      'example' => 'coredns',
                    ),
                    'state' => 
                    array (
                      'title' => '组件状态，可能的取值：
- active：已安装
- updating：变更中
- upgrading：升级中
- deleting：卸载中',
                      'description' => '组件状态，可能的取值：
- active：已安装
- updating：变更中
- upgrading：升级中
- deleting：卸载中',
                      'type' => 'string',
                      'example' => 'active',
                    ),
                    'version' => 
                    array (
                      'title' => '组件版本。',
                      'description' => '组件版本。',
                      'type' => 'string',
                      'example' => 'v1.9.3.10-7dfca203-aliyun',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"addons\\": [\\n    {\\n      \\"name\\": \\"coredns\\",\\n      \\"state\\": \\"active\\",\\n      \\"version\\": \\"v1.9.3.10-7dfca203-aliyun\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListClusterAddonInstancesResponse>\\n    <addons>\\n        <name>coredns</name>\\n        <state>active</state>\\n        <version>v1.9.3.10-7dfca203-aliyun</version>\\n    </addons>\\n    <addons>\\n        <name>alicloud-monitor-controller</name>\\n        <state>active</state>\\n        <version>v1.8.1-103ddac-aliyun</version>\\n    </addons>\\n    <addons>\\n        <name>ack-scheduler</name>\\n        <state>active</state>\\n        <version>v1.28.3-aliyun-5.8-89c55520</version>\\n    </addons>\\n    <addons>\\n        <name>cloud-controller-manager</name>\\n        <state>active</state>\\n        <version>v2.8.1</version>\\n    </addons>\\n    <addons>\\n        <name>storage-operator</name>\\n        <state>active</state>\\n        <version>v1.26.2-1de13b6-aliyun</version>\\n    </addons>\\n    <addons>\\n        <name>metrics-server</name>\\n        <state>active</state>\\n        <version>v0.3.9.5-1e8461a-aliyun</version>\\n    </addons>\\n    <addons>\\n        <name>csi-plugin</name>\\n        <state>active</state>\\n        <version>v1.26.2-327ca15-aliyun</version>\\n    </addons>\\n    <addons>\\n        <name>csi-provisioner</name>\\n        <state>active</state>\\n        <version>v1.26.2-327ca15-aliyun</version>\\n    </addons>\\n    <addons>\\n        <name>kube-flannel-ds</name>\\n        <state>active</state>\\n        <version>v0.15.1.22-20a397e6-aliyun</version>\\n    </addons>\\n    <addons>\\n        <name>nginx-ingress-controller</name>\\n        <state>active</state>\\n        <version>v1.1.2-aliyun.1</version>\\n    </addons>\\n    <addons>\\n        <name>ack-node-local-dns</name>\\n        <state>active</state>\\n        <version>1.5.3</version>\\n    </addons>\\n    <addons>\\n        <name>kube-controller-manager</name>\\n        <state>active</state>\\n        <version>v1.28.3-aliyun.1</version>\\n    </addons>\\n    <addons>\\n        <name>kube-apiserver</name>\\n        <state>active</state>\\n        <version>v1.28.3-aliyun.1</version>\\n    </addons>\\n    <addons>\\n        <name>ack-node-problem-detector</name>\\n        <state>active</state>\\n        <version>1.2.18</version>\\n    </addons>\\n</ListClusterAddonInstancesResponse>","errorExample":""}]',
      'title' => '查询集群已安装的组件实例列表',
    ),
    'GetClusterAddonInstance' => 
    array (
      'summary' => '您可以调用GetClusterAddonInstance接口查询集群中目标组件的详细信息，包括目标组件实例的版本、参数配置、日志功能启用状态等。',
      'path' => '/clusters/{cluster_id}/addon_instances/{instance_name}',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'cluster_id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'c02b3e03be10643e8a644a843ffcb****',
          ),
        ),
        1 => 
        array (
          'name' => 'instance_name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '组件实例名称。',
            'description' => '组件实例名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'ack-node-problem-detector',
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
              'name' => 
              array (
                'title' => '组件实例名称。',
                'description' => '组件实例名称。',
                'type' => 'string',
                'example' => 'ack-node-problem-detector',
              ),
              'state' => 
              array (
                'title' => '组件状态，可能的取值：
- active：已安装
- updating：变更中
- upgrading：升级中
- deleting：卸载中',
                'description' => '组件状态，可能的取值：
- active：已安装
- updating：变更中
- upgrading：升级中
- deleting：卸载中',
                'type' => 'string',
                'example' => 'active',
              ),
              'version' => 
              array (
                'title' => '组件实例版本。',
                'description' => '组件实例版本。',
                'type' => 'string',
                'example' => '1.2.16',
              ),
              'config' => 
              array (
                'title' => '组件自定义参数配置。',
                'description' => '组件自定义参数配置。',
                'type' => 'string',
                'example' => '{"sls_project_name":""}',
              ),
              'logging' => 
              array (
                'title' => '组件日志功能状态。',
                'description' => '组件日志功能状态。',
                'type' => 'object',
                'properties' => 
                array (
                  'capable' => 
                  array (
                    'title' => '组件是否支持开启日志功能。',
                    'description' => '组件是否支持开启日志功能。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'enabled' => 
                  array (
                    'title' => '组件日志功能是否开启。',
                    'description' => '组件日志功能是否开启。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'log_project' => 
                  array (
                    'title' => '组件日志功能使用的日志Project。',
                    'description' => '组件日志功能使用的日志Project。',
                    'type' => 'string',
                    'example' => 'my-log-project',
                  ),
                  'logstore' => 
                  array (
                    'title' => '组件日志功能使用的日志logstore。',
                    'description' => '组件日志功能使用的日志logstore。',
                    'type' => 'string',
                    'example' => 'my-logstore',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"name\\": \\"ack-node-problem-detector\\",\\n  \\"state\\": \\"active\\",\\n  \\"version\\": \\"1.2.16\\",\\n  \\"config\\": \\"{\\\\\\"sls_project_name\\\\\\":\\\\\\"\\\\\\"}\\",\\n  \\"logging\\": {\\n    \\"capable\\": false,\\n    \\"enabled\\": false,\\n    \\"log_project\\": \\"my-log-project\\",\\n    \\"logstore\\": \\"my-logstore\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetClusterAddonInstanceResponse>\\n    <name>ack-node-problem-detector</name>\\n    <state>active</state>\\n    <version>1.2.16</version>\\n    <config>{\\"sls_project_name\\":\\"\\"}</config>\\n    <logging>\\n        <capable>false</capable>\\n        <enabled>false</enabled>\\n    </logging>\\n</GetClusterAddonInstanceResponse>","errorExample":""}]',
      'title' => '查询集群内指定组件实例信息',
    ),
    'DescribeAddon' => 
    array (
      'summary' => '您可以调用DescribeAddon接口，根据指定地域、集群类型、集群子类型（profile）、集群版本、组件名称等参数查询目标组件的信息，包括组件托管与否、组件分类、支持的自定义参数Schema、兼容的操作系统架构、该版本要求的最低集群版本等。',
      'path' => '/addons/{addon_name}',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'addon_name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '组件名称。',
            'description' => '组件名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'coredns',
          ),
        ),
        1 => 
        array (
          'name' => 'region_id',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域。',
            'description' => '地域。
如果传入了cluster_id，该参数将被忽略。
region_id、cluster_type、profile、cluster_spec、cluster_version五个参数需要同时传入。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'cluster_type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '集群类型。',
            'description' => '集群类型。
如果传入了cluster_id，该参数将被忽略。
region_id、cluster_type、profile、cluster_spec、cluster_version五个参数需要同时传入。',
            'type' => 'string',
            'required' => false,
            'example' => 'ManagedKubernetes',
          ),
        ),
        3 => 
        array (
          'name' => 'profile',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '集群子类型。',
            'description' => '集群子类型。
如果传入了cluster_id，该参数将被忽略。
region_id、cluster_type、profile、cluster_spec、cluster_version五个参数需要同时传入。',
            'type' => 'string',
            'required' => false,
            'example' => 'Default',
          ),
        ),
        4 => 
        array (
          'name' => 'cluster_spec',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '集群规格。',
            'description' => '集群规格。
如果传入了cluster_id，该参数将被忽略。
region_id、cluster_type、profile、cluster_spec、cluster_version五个参数需要同时传入。',
            'type' => 'string',
            'required' => false,
            'example' => 'ack.pro.small',
          ),
        ),
        5 => 
        array (
          'name' => 'cluster_version',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '集群版本。',
            'description' => '集群版本。
如果传入了cluster_id，该参数将被忽略。
region_id、cluster_type、profile、cluster_spec、cluster_version五个参数需要同时传入。',
            'type' => 'string',
            'required' => false,
            'example' => '1.26.3-aliyun.1',
          ),
        ),
        6 => 
        array (
          'name' => 'cluster_id',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。
指定集群ID时，查询该集群可用的组件列表，此时其他参数将会被忽略。',
            'type' => 'string',
            'required' => false,
            'example' => 'c02b3e03be10643e8a644a843ffcb****',
          ),
        ),
        7 => 
        array (
          'name' => 'version',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '组件版本。',
            'description' => '组件版本。
不指定时，查询该组件可用的最新版本。',
            'type' => 'string',
            'required' => false,
            'example' => 'v1.9.3.10-7dfca203-aliyun',
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
              'name' => 
              array (
                'title' => '组件名称。',
                'description' => '组件名称。',
                'type' => 'string',
                'example' => 'coredns',
              ),
              'version' => 
              array (
                'title' => '组件版本。',
                'description' => '组件版本。',
                'type' => 'string',
                'example' => 'v1.9.3.6-32932850-aliyun',
              ),
              'category' => 
              array (
                'title' => '组件分类。',
                'description' => '组件分类。',
                'type' => 'string',
                'example' => 'network',
              ),
              'managed' => 
              array (
                'title' => '是否为托管组件。',
                'description' => '是否为托管组件。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'install_by_default' => 
              array (
                'title' => '是否默认安装。',
                'description' => '是否默认安装。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'config_schema' => 
              array (
                'title' => '组件自定义参数schema。',
                'description' => '组件自定义参数schema。',
                'type' => 'string',
                'example' => '{}',
              ),
              'supported_actions' => 
              array (
                'title' => '组件支持的操作，可能的值：
- Install
- Upgrade
- Modify
- Uninstall',
                'description' => '组件支持的操作，可能的值：
- Install
- Upgrade
- Modify
- Uninstall',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '组件操作。',
                  'type' => 'string',
                  'example' => 'Install',
                ),
              ),
              'architecture' => 
              array (
                'title' => '组件支持的体系结构，可能的值：
- amd64
- arm64',
                'description' => '组件支持的体系结构，可能的值：
- amd64
- arm64',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '体系结构。',
                  'type' => 'string',
                  'example' => 'amd64',
                ),
              ),
              'newer_versions' => 
              array (
                'title' => '组件新版本。',
                'description' => '组件新版本。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '新版本信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'version' => 
                    array (
                      'title' => '版本号。',
                      'description' => '版本号。',
                      'type' => 'string',
                      'example' => 'v1.9.3.10-7dfca203-aliyun',
                    ),
                    'upgradable' => 
                    array (
                      'title' => '是否可升级到该版本，',
                      'description' => '是否可升级到该版本，',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'minimum_cluster_version' => 
                    array (
                      'title' => '该版本要求的最低集群版本。',
                      'description' => '该版本要求的最低集群版本。',
                      'type' => 'string',
                      'example' => '1.20.4',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"name\\": \\"coredns\\",\\n  \\"version\\": \\"v1.9.3.6-32932850-aliyun\\",\\n  \\"category\\": \\"network\\",\\n  \\"managed\\": false,\\n  \\"install_by_default\\": true,\\n  \\"config_schema\\": \\"{}\\",\\n  \\"supported_actions\\": [\\n    \\"Install\\"\\n  ],\\n  \\"architecture\\": [\\n    \\"amd64\\"\\n  ],\\n  \\"newer_versions\\": [\\n    {\\n      \\"version\\": \\"v1.9.3.10-7dfca203-aliyun\\",\\n      \\"upgradable\\": true,\\n      \\"minimum_cluster_version\\": \\"1.20.4\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeAddonResponse>\\n    <architecture>amd64</architecture>\\n    <architecture>arm64</architecture>\\n    <category>network</category>\\n    <config_schema>{ \\"$schema\\": \\"http://json-schema.org/draft-07/schema#\\", \\"properties\\": { \\"MemoryRequest\\": { \\"type\\": \\"string\\", \\"description\\": \\"memory request for coredns\\", \\"pattern\\": \\"^[1-9][0-9]*(\\\\\\\\.\\\\\\\\d+)?(K|Ki|M|Mi|G|Gi|T|Ti)?$\\", \\"default\\": \\"100Mi\\", \\"x-ui-description\\": \\"cos.k8s.addon.config.coredns.description.memory.request\\", \\"x-ui-prompt-message\\": \\"cos.k8s.addon.config.coredns.prompt.memory.request\\", \\"x-ui-validation-message\\": \\"cos.k8s.addon.config.coredns.validation.memory.request\\", \\"x-ui-additional-tips\\": \\"\\" }, \\"CpuRequest\\": { \\"type\\": \\"string\\", \\"description\\": \\"cpu request for coredns\\", \\"pattern\\": \\"^[1-9][0-9]*(m|\\\\\\\\.\\\\\\\\d+)?$\\", \\"default\\": \\"100m\\", \\"x-ui-description\\": \\"cos.k8s.addon.config.coredns.description.cpu.request\\", \\"x-ui-prompt-message\\": \\"cos.k8s.addon.config.coredns.prompt.cpu.request\\", \\"x-ui-validation-message\\": \\"cos.k8s.addon.config.coredns.validation.cpu.request\\", \\"x-ui-additional-tips\\": \\"\\" }, \\"MemoryLimit\\": { \\"type\\": \\"string\\", \\"description\\": \\"memory limit for coredns\\", \\"pattern\\": \\"^(|[1-9][0-9]*(\\\\\\\\.\\\\\\\\d+)?(K|Ki|M|Mi|G|Gi|T|Ti)?)$\\", \\"default\\": \\"2Gi\\", \\"x-ui-description\\": \\"cos.k8s.addon.config.coredns.description.memory.limit\\", \\"x-ui-prompt-message\\": \\"cos.k8s.addon.config.coredns.prompt.memory.limit\\", \\"x-ui-validation-message\\": \\"cos.k8s.addon.config.coredns.validation.memory.limit\\", \\"x-ui-additional-tips\\": \\"\\" }, \\"CpuLimit\\": { \\"type\\": \\"string\\", \\"description\\": \\"cpu limit for coredns\\", \\"pattern\\": \\"^(|[1-9][0-9]*(m|\\\\\\\\.\\\\\\\\d+)?)$\\", \\"default\\": \\"\\", \\"x-ui-description\\": \\"cos.k8s.addon.config.coredns.description.cpu.limit\\", \\"x-ui-prompt-message\\": \\"cos.k8s.addon.config.coredns.prompt.cpu.limit\\", \\"x-ui-validation-message\\": \\"cos.k8s.addon.config.coredns.validation.cpu.limit\\", \\"x-ui-additional-tips\\": \\"\\" }, \\"NodeSelector\\": { \\"type\\": \\"array\\", \\"items\\": { \\"type\\": \\"object\\", \\"properties\\": { \\"Key\\": { \\"type\\": \\"string\\", \\"description\\": \\"label name\\", \\"default\\": \\"\\", \\"pattern\\": \\"^([a-z0-9]([-a-z0-9]*[a-z0-9])?(\\\\\\\\.[a-z0-9]([-a-z0-9]*[a-z0-9])?)*\\\\\\\\/)?([A-Za-z0-9][-A-Za-z0-9_.]*)?[A-Za-z0-9]$\\", \\"maxLength\\": 254, \\"x-ui-description\\": \\"cos.k8s.addon.config.coredns.description.nodeSelector.key\\", \\"x-ui-prompt-message\\": \\"cos.k8s.addon.config.coredns.prompt.nodeSelector.key\\", \\"x-ui-validation-message\\": \\"cos.k8s.addon.config.coredns.validation.nodeSelector.key\\", \\"x-ui-additional-tips\\": \\"\\" }, \\"Value\\": { \\"type\\": \\"string\\", \\"description\\": \\"label value\\", \\"default\\": \\"\\", \\"pattern\\": \\"^(([A-Za-z0-9][-A-Za-z0-9_.]*)?[A-Za-z0-9])?$\\", \\"maxLength\\": 63, \\"x-ui-description\\": \\"cos.k8s.addon.config.coredns.description.nodeSelector.value\\", \\"x-ui-prompt-message\\": \\"cos.k8s.addon.config.coredns.prompt.nodeSelector.value\\", \\"x-ui-validation-message\\": \\"cos.k8s.addon.config.coredns.validation.nodeSelector.value\\", \\"x-ui-additional-tips\\": \\"\\" } }, \\"required\\": [ \\"Key\\", \\"Value\\" ] }, \\"description\\": \\"node selector for coredns\\", \\"default\\": [ { \\"Key\\": \\"kubernetes.io/os\\", \\"Value\\": \\"linux\\" } ], \\"x-ui-description\\": \\"cos.k8s.addon.config.coredns.description.nodeSelector\\", \\"x-ui-prompt-message\\": \\"cos.k8s.addon.config.coredns.prompt.nodeSelector\\", \\"x-ui-validation-message\\": \\"cos.k8s.addon.config.coredns.validation.nodeSelector\\", \\"x-ui-additional-tips\\": \\"\\" }, \\"Tolerations\\": { \\"type\\": \\"array\\", \\"items\\": { \\"type\\": \\"object\\", \\"description\\": \\"The pod this Toleration is attached to tolerates any taint that matches the triple &lt;key,value,effect&gt; using the matching operator &lt;operator&gt;.\\", \\"properties\\": { \\"effect\\": { \\"description\\": \\"Effect indicates the taint effect to match. Empty means match all taint effects. When specified, allowed values are NoSchedule, PreferNoSchedule and NoExecute.\\", \\"pattern\\": \\"^(NoSchedule|PreferNoSchedule|NoExecute)$\\", \\"maxLength\\": 254, \\"x-ui-description\\": \\"cos.k8s.addon.config.coredns.description.toleration.effect\\", \\"x-ui-prompt-message\\": \\"cos.k8s.addon.config.coredns.prompt.toleration.effect\\", \\"x-ui-validation-message\\": \\"cos.k8s.addon.config.coredns.validation.toleration.effect\\", \\"x-ui-additional-tips\\": \\"\\", \\"type\\": [ \\"string\\", \\"null\\" ] }, \\"key\\": { \\"description\\": \\"Key is the taint key that the toleration applies to. Empty means match all taint keys. If the key is empty, operator must be Exists; this combination means to match all values and all keys.\\", \\"pattern\\": \\"^([a-z0-9]([-a-z0-9]*[a-z0-9])?(\\\\\\\\.[a-z0-9]([-a-z0-9]*[a-z0-9])?)*\\\\\\\\/)?([A-Za-z0-9][-A-Za-z0-9_.]*)?[A-Za-z0-9]$\\", \\"maxLength\\": 254, \\"x-ui-description\\": \\"cos.k8s.addon.config.coredns.description.toleration.key\\", \\"x-ui-prompt-message\\": \\"cos.k8s.addon.config.coredns.prompt.toleration.key\\", \\"x-ui-validation-message\\": \\"cos.k8s.addon.config.coredns.validation.toleration.key\\", \\"x-ui-additional-tips\\": \\"\\", \\"type\\": [ \\"string\\", \\"null\\" ] }, \\"operator\\": { \\"description\\": \\"Operator represents a key\'s relationship to the value. Valid operators are Exists and Equal. Defaults to Equal. Exists is equivalent to wildcard for value, so that a pod can tolerate all taints of a particular category.\\", \\"pattern\\": \\"^(Exists|Equal)$\\", \\"maxLength\\": 254, \\"x-ui-description\\": \\"cos.k8s.addon.config.coredns.description.toleration.operator\\", \\"x-ui-prompt-message\\": \\"cos.k8s.addon.config.coredns.prompt.toleration.operator\\", \\"x-ui-validation-message\\": \\"cos.k8s.addon.config.coredns.validation.toleration.operator\\", \\"x-ui-additional-tips\\": \\"\\", \\"type\\": [ \\"string\\", \\"null\\" ] }, \\"value\\": { \\"description\\": \\"Value is the taint value the toleration matches to. If the operator is Exists, the value should be empty, otherwise just a regular string.\\", \\"pattern\\": \\"^([a-z0-9]([-a-z0-9]*[a-z0-9])?(\\\\\\\\.[a-z0-9]([-a-z0-9]*[a-z0-9])?)*\\\\\\\\/)?([A-Za-z0-9][-A-Za-z0-9_.]*)?[A-Za-z0-9]$\\", \\"maxLength\\": 254, \\"x-ui-description\\": \\"cos.k8s.addon.config.coredns.description.toleration.value\\", \\"x-ui-prompt-message\\": \\"cos.k8s.addon.config.coredns.prompt.toleration.value\\", \\"x-ui-validation-message\\": \\"cos.k8s.addon.config.coredns.validation.toleration.value\\", \\"x-ui-additional-tips\\": \\"\\", \\"type\\": [ \\"string\\", \\"null\\" ] } } }, \\"description\\": \\"tolerations for coredns\\", \\"default\\": [], \\"x-ui-description\\": \\"cos.k8s.addon.config.coredns.description.tolerations\\", \\"x-ui-prompt-message\\": \\"cos.k8s.addon.config.coredns.prompt.tolerations\\", \\"x-ui-validation-message\\": \\"cos.k8s.addon.config.coredns.validation.tolerations\\", \\"x-ui-additional-tips\\": \\"\\" } }, \\"title\\": \\"Config\\", \\"type\\": \\"object\\" }</config_schema>\\n    <install_by_default>true</install_by_default>\\n    <managed>false</managed>\\n    <name>coredns</name>\\n    <supported_actions>Install</supported_actions>\\n    <supported_actions>Upgrade</supported_actions>\\n    <supported_actions>Modify</supported_actions>\\n    <version>v1.9.3.10-7dfca203-aliyun</version>\\n</DescribeAddonResponse>","errorExample":""}]',
      'title' => '查询指定组件的信息',
    ),
    'ModifyClusterAddon' => 
    array (
      'summary' => '您可以调用ModifyClusterAddon配置修改已安装的集群组件实例的配置。修改配置可能会影响业务，请评估影响后在业务低峰期操作并提前做好相关的数据备份。',
      'path' => '/clusters/{cluster_id}/components/{component_id}/config',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'cluster_id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c71d616e629ff40d5b42d7bb87770****',
          ),
        ),
        1 => 
        array (
          'name' => 'component_id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '组件ID',
            'description' => '组件ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'coredns',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '组件配置',
            'description' => '组件配置。',
            'type' => 'object',
            'properties' => 
            array (
              'config' => 
              array (
                'title' => '自定义参数设置',
                'description' => '自定义参数设置。',
                'type' => 'string',
                'required' => false,
                'example' => '{"CpuRequest":"800m"}',
              ),
            ),
            'required' => false,
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
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '修改集群组件实例配置',
      'description' => '使用该API可修改普通集群组件的配置以及ACK Pro集群的管控面参数配置：
<props="china">- 普通组件可配置参数列表可通过`DescribeClusterAddonMetadata ` API查询，详情参见[查询集群组件版本元数据](https://help.aliyun.com/document_detail/415029.html)。</props>
<props="intl">- 普通组件可配置参数列表可通过`DescribeClusterAddonMetadata ` API查询，详情参见[查询集群组件版本元数据](https://www.alibabacloud.com/help/zh/container-service-for-kubernetes/latest/query)。</props>
<props="china">- ACK Pro集群管控面组件可配置的参数列表，请参见[自定义ACK Pro集群的管控面参数](https://help.aliyun.com/document_detail/199588.html)。</props>
<props="intl">- ACK Pro集群管控面组件可配置的参数列表，请参见[自定义ACK Pro集群的管控面参数](https://www.alibabacloud.com/help/zh/container-service-for-kubernetes/latest/customize-control-plane-parameters-for-a-professional-kubernetes-cluster)。</props>

修改配置可能会导致组件重新部署和启动，请评估影响后再进行操作。


',
      'requestParamsDescription' => '`config`参数值为JSON编码后的组件自定义参数配置。',
    ),
    'DescribeClusterAddonMetadata' => 
    array (
      'summary' => '调用DescribeClusterAddonMetadata查询特定集群可使用的指定组件版本信息，包括组件版本、可配置参数等。',
      'path' => '/clusters/{cluster_id}/components/{component_id}/metadata',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '101052',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcskGIIHWM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'cluster_id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID',
            'description' => '集群ID',
            'type' => 'string',
            'required' => true,
            'example' => 'c71d616e629ff40d5b42d7bb87770****',
          ),
        ),
        1 => 
        array (
          'name' => 'component_id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '组件ID',
            'description' => '组件ID',
            'type' => 'string',
            'required' => true,
            'example' => 'coredns',
          ),
        ),
        2 => 
        array (
          'name' => 'version',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '组件版本',
            'description' => '组件版本',
            'type' => 'string',
            'required' => false,
            'example' => '1.8.4.1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '组件版本元数据',
            'description' => '组件版本元数据',
            'type' => 'object',
            'properties' => 
            array (
              'name' => 
              array (
                'title' => '组件名称',
                'description' => '组件名称',
                'type' => 'string',
                'example' => 'coredns',
              ),
              'version' => 
              array (
                'title' => '组件版本',
                'description' => '组件版本',
                'type' => 'string',
                'example' => '1.8.4.1',
              ),
              'config_schema' => 
              array (
                'title' => '组件参数Schema',
                'description' => '组件参数Schema',
                'type' => 'string',
                'example' => '{\\n  \\"$schema\\": \\"https://json-schema.org/draft-07/schema#\\",\\n  \\"properties\\": {\\n    \\"controller\\": {\\n      \\"description\\": \\"\\",\\n      \\"properties\\": {\\n        \\"resources\\": {\\n          \\"properties\\": {\\n            \\"armsPrometheusOperator\\": {\\n              \\"properties\\": {\\n                \\"resources\\": {\\n                  \\"properties\\": {\\n                    \\"limits\\": {\\n                      \\"properties\\": {\\n                        \\"memory\\": {\\n                          \\"description\\": \\"memory limit of arms prometheus operator\\",\\n                          \\"type\\": \\"string\\",\\n                          \\"pattern\\": \\"^[1-9][0-9]*(\\\\\\\\.\\\\\\\\d+)?(K|Ki|M|Mi|G|Gi|T|Ti)?$\\",\\n                          \\"default\\": \\"500m\\",\\n                          \\"x-ui-description\\": \\"<mds-key>\\",\\n                          \\"x-ui-prompt-message\\": \\"<mds-key>\\",\\n                          \\"x-ui-validation-message\\": \\"<mds-key>\\",\\n                          \\"x-ui-additional-tips\\": \\"<mds-key>\\"\\n                        },\\n                        \\"cpu\\": {\\n                          \\"description\\": \\"cpu limit of arms prometheus operator\\",\\n                          \\"type\\": \\"string\\",\\n                          \\"pattern\\": \\"^[1-9][0-9]*(m|\\\\\\\\.\\\\\\\\d+)?$\\",\\n                          \\"default\\": \\"1.0\\",\\n                          \\"x-ui-description\\": \\"<mds-key>\\",\\n                          \\"x-ui-validation-message\\": \\"<mds-key>\\"\\n                        }\\n                      },\\n                      \\"type\\": \\"object\\",\\n                      \\"additionalProperties\\": false\\n                    },\\n                    \\"requests\\": {\\n                      \\"properties\\": {\\n                        \\"memory\\": {\\n                          \\"description\\": \\"memory request of arms prometheus operator\\",\\n                          \\"type\\": \\"string\\",\\n                          \\"pattern\\": \\"^[1-9][0-9]*(\\\\\\\\.\\\\\\\\d+)?(K|Ki|M|Mi|G|Gi|T|Ti)?$\\",\\n                          \\"default\\": \\"500m\\",\\n                          \\"x-ui-description\\": \\"<mds-key>\\",\\n                          \\"x-ui-validation-message\\": \\"<mds-key>\\"\\n                        },\\n                        \\"cpu\\": {\\n                          \\"description\\": \\"cpu request of arms prometheus operator\\",\\n                          \\"type\\": \\"string\\",\\n                          \\"pattern\\": \\"^[1-9][0-9]*(m|\\\\\\\\.\\\\\\\\d+)?$\\",\\n                          \\"default\\": \\"1.0\\",\\n                          \\"x-ui-description\\": \\"<mds-key>\\",\\n                          \\"x-ui-validation-message\\": \\"<mds-key>\\"\\n                        }\\n                      },\\n                      \\"type\\": \\"object\\",\\n                      \\"additionalProperties\\": false\\n                    }\\n                  },\\n                  \\"type\\": \\"object\\",\\n                  \\"additionalProperties\\": false\\n                }\\n              },\\n              \\"type\\": \\"object\\",\\n              \\"additionalProperties\\": false\\n            }\\n          },\\n          \\"type\\": \\"object\\",\\n          \\"additionalProperties\\": false\\n        }\\n      },\\n      \\"type\\": \\"object\\",\\n      \\"additionalProperties\\": false\\n    }\\n  },\\n  \\"title\\": \\"Values\\",\\n  \\"type\\": \\"object\\",\\n  \\"additionalProperties\\": false\\n}',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'substitutions' => 
        array (
          0 => 'CS::2015-12-15::DescribeAddon',
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"name\\": \\"coredns\\",\\n  \\"version\\": \\"1.8.4.1\\",\\n  \\"config_schema\\": \\"{\\\\\\\\n  \\\\\\\\\\\\\\"$schema\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"https://json-schema.org/draft-07/schema#\\\\\\\\\\\\\\",\\\\\\\\n  \\\\\\\\\\\\\\"properties\\\\\\\\\\\\\\": {\\\\\\\\n    \\\\\\\\\\\\\\"controller\\\\\\\\\\\\\\": {\\\\\\\\n      \\\\\\\\\\\\\\"description\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"\\\\\\\\\\\\\\",\\\\\\\\n      \\\\\\\\\\\\\\"properties\\\\\\\\\\\\\\": {\\\\\\\\n        \\\\\\\\\\\\\\"resources\\\\\\\\\\\\\\": {\\\\\\\\n          \\\\\\\\\\\\\\"properties\\\\\\\\\\\\\\": {\\\\\\\\n            \\\\\\\\\\\\\\"armsPrometheusOperator\\\\\\\\\\\\\\": {\\\\\\\\n              \\\\\\\\\\\\\\"properties\\\\\\\\\\\\\\": {\\\\\\\\n                \\\\\\\\\\\\\\"resources\\\\\\\\\\\\\\": {\\\\\\\\n                  \\\\\\\\\\\\\\"properties\\\\\\\\\\\\\\": {\\\\\\\\n                    \\\\\\\\\\\\\\"limits\\\\\\\\\\\\\\": {\\\\\\\\n                      \\\\\\\\\\\\\\"properties\\\\\\\\\\\\\\": {\\\\\\\\n                        \\\\\\\\\\\\\\"memory\\\\\\\\\\\\\\": {\\\\\\\\n                          \\\\\\\\\\\\\\"description\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"memory limit of arms prometheus operator\\\\\\\\\\\\\\",\\\\\\\\n                          \\\\\\\\\\\\\\"type\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"string\\\\\\\\\\\\\\",\\\\\\\\n                          \\\\\\\\\\\\\\"pattern\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"^[1-9][0-9]*(\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\.\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\d+)?(K|Ki|M|Mi|G|Gi|T|Ti)?$\\\\\\\\\\\\\\",\\\\\\\\n                          \\\\\\\\\\\\\\"default\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"500m\\\\\\\\\\\\\\",\\\\\\\\n                          \\\\\\\\\\\\\\"x-ui-description\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"<mds-key>\\\\\\\\\\\\\\",\\\\\\\\n                          \\\\\\\\\\\\\\"x-ui-prompt-message\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"<mds-key>\\\\\\\\\\\\\\",\\\\\\\\n                          \\\\\\\\\\\\\\"x-ui-validation-message\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"<mds-key>\\\\\\\\\\\\\\",\\\\\\\\n                          \\\\\\\\\\\\\\"x-ui-additional-tips\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"<mds-key>\\\\\\\\\\\\\\"\\\\\\\\n                        },\\\\\\\\n                        \\\\\\\\\\\\\\"cpu\\\\\\\\\\\\\\": {\\\\\\\\n                          \\\\\\\\\\\\\\"description\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"cpu limit of arms prometheus operator\\\\\\\\\\\\\\",\\\\\\\\n                          \\\\\\\\\\\\\\"type\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"string\\\\\\\\\\\\\\",\\\\\\\\n                          \\\\\\\\\\\\\\"pattern\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"^[1-9][0-9]*(m|\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\.\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\d+)?$\\\\\\\\\\\\\\",\\\\\\\\n                          \\\\\\\\\\\\\\"default\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"1.0\\\\\\\\\\\\\\",\\\\\\\\n                          \\\\\\\\\\\\\\"x-ui-description\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"<mds-key>\\\\\\\\\\\\\\",\\\\\\\\n                          \\\\\\\\\\\\\\"x-ui-validation-message\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"<mds-key>\\\\\\\\\\\\\\"\\\\\\\\n                        }\\\\\\\\n                      },\\\\\\\\n                      \\\\\\\\\\\\\\"type\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"object\\\\\\\\\\\\\\",\\\\\\\\n                      \\\\\\\\\\\\\\"additionalProperties\\\\\\\\\\\\\\": false\\\\\\\\n                    },\\\\\\\\n                    \\\\\\\\\\\\\\"requests\\\\\\\\\\\\\\": {\\\\\\\\n                      \\\\\\\\\\\\\\"properties\\\\\\\\\\\\\\": {\\\\\\\\n                        \\\\\\\\\\\\\\"memory\\\\\\\\\\\\\\": {\\\\\\\\n                          \\\\\\\\\\\\\\"description\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"memory request of arms prometheus operator\\\\\\\\\\\\\\",\\\\\\\\n                          \\\\\\\\\\\\\\"type\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"string\\\\\\\\\\\\\\",\\\\\\\\n                          \\\\\\\\\\\\\\"pattern\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"^[1-9][0-9]*(\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\.\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\d+)?(K|Ki|M|Mi|G|Gi|T|Ti)?$\\\\\\\\\\\\\\",\\\\\\\\n                          \\\\\\\\\\\\\\"default\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"500m\\\\\\\\\\\\\\",\\\\\\\\n                          \\\\\\\\\\\\\\"x-ui-description\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"<mds-key>\\\\\\\\\\\\\\",\\\\\\\\n                          \\\\\\\\\\\\\\"x-ui-validation-message\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"<mds-key>\\\\\\\\\\\\\\"\\\\\\\\n                        },\\\\\\\\n                        \\\\\\\\\\\\\\"cpu\\\\\\\\\\\\\\": {\\\\\\\\n                          \\\\\\\\\\\\\\"description\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"cpu request of arms prometheus operator\\\\\\\\\\\\\\",\\\\\\\\n                          \\\\\\\\\\\\\\"type\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"string\\\\\\\\\\\\\\",\\\\\\\\n                          \\\\\\\\\\\\\\"pattern\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"^[1-9][0-9]*(m|\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\.\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\d+)?$\\\\\\\\\\\\\\",\\\\\\\\n                          \\\\\\\\\\\\\\"default\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"1.0\\\\\\\\\\\\\\",\\\\\\\\n                          \\\\\\\\\\\\\\"x-ui-description\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"<mds-key>\\\\\\\\\\\\\\",\\\\\\\\n                          \\\\\\\\\\\\\\"x-ui-validation-message\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"<mds-key>\\\\\\\\\\\\\\"\\\\\\\\n                        }\\\\\\\\n                      },\\\\\\\\n                      \\\\\\\\\\\\\\"type\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"object\\\\\\\\\\\\\\",\\\\\\\\n                      \\\\\\\\\\\\\\"additionalProperties\\\\\\\\\\\\\\": false\\\\\\\\n                    }\\\\\\\\n                  },\\\\\\\\n                  \\\\\\\\\\\\\\"type\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"object\\\\\\\\\\\\\\",\\\\\\\\n                  \\\\\\\\\\\\\\"additionalProperties\\\\\\\\\\\\\\": false\\\\\\\\n                }\\\\\\\\n              },\\\\\\\\n              \\\\\\\\\\\\\\"type\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"object\\\\\\\\\\\\\\",\\\\\\\\n              \\\\\\\\\\\\\\"additionalProperties\\\\\\\\\\\\\\": false\\\\\\\\n            }\\\\\\\\n          },\\\\\\\\n          \\\\\\\\\\\\\\"type\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"object\\\\\\\\\\\\\\",\\\\\\\\n          \\\\\\\\\\\\\\"additionalProperties\\\\\\\\\\\\\\": false\\\\\\\\n        }\\\\\\\\n      },\\\\\\\\n      \\\\\\\\\\\\\\"type\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"object\\\\\\\\\\\\\\",\\\\\\\\n      \\\\\\\\\\\\\\"additionalProperties\\\\\\\\\\\\\\": false\\\\\\\\n    }\\\\\\\\n  },\\\\\\\\n  \\\\\\\\\\\\\\"title\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"Values\\\\\\\\\\\\\\",\\\\\\\\n  \\\\\\\\\\\\\\"type\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"object\\\\\\\\\\\\\\",\\\\\\\\n  \\\\\\\\\\\\\\"additionalProperties\\\\\\\\\\\\\\": false\\\\\\\\n}\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeClusterAddonMetadataResponse>\\n    <name>coredns</name>\\n    <version>1.8.4.1</version>\\n    <config_schema>{\\\\n  \\\\\\"$schema\\\\\\": \\\\\\"https://json-schema.org/draft-07/schema#\\\\\\",\\\\n  \\\\\\"properties\\\\\\": {\\\\n    \\\\\\"controller\\\\\\": {\\\\n      \\\\\\"description\\\\\\": \\\\\\"\\\\\\",\\\\n      \\\\\\"properties\\\\\\": {\\\\n        \\\\\\"resources\\\\\\": {\\\\n          \\\\\\"properties\\\\\\": {\\\\n            \\\\\\"armsPrometheusOperator\\\\\\": {\\\\n              \\\\\\"properties\\\\\\": {\\\\n                \\\\\\"resources\\\\\\": {\\\\n                  \\\\\\"properties\\\\\\": {\\\\n                    \\\\\\"limits\\\\\\": {\\\\n                      \\\\\\"properties\\\\\\": {\\\\n                        \\\\\\"memory\\\\\\": {\\\\n                          \\\\\\"description\\\\\\": \\\\\\"memory limit of arms prometheus operator\\\\\\",\\\\n                          \\\\\\"type\\\\\\": \\\\\\"string\\\\\\",\\\\n                          \\\\\\"pattern\\\\\\": \\\\\\"^[1-9][0-9]*(\\\\\\\\\\\\\\\\.\\\\\\\\\\\\\\\\d+)?(K|Ki|M|Mi|G|Gi|T|Ti)?$\\\\\\",\\\\n                          \\\\\\"default\\\\\\": \\\\\\"500m\\\\\\",\\\\n                          \\\\\\"x-ui-description\\\\\\": \\\\\\"&lt;mds-key&gt;\\\\\\",\\\\n                          \\\\\\"x-ui-prompt-message\\\\\\": \\\\\\"&lt;mds-key&gt;\\\\\\",\\\\n                          \\\\\\"x-ui-validation-message\\\\\\": \\\\\\"&lt;mds-key&gt;\\\\\\",\\\\n                          \\\\\\"x-ui-additional-tips\\\\\\": \\\\\\"&lt;mds-key&gt;\\\\\\"\\\\n                        },\\\\n                        \\\\\\"cpu\\\\\\": {\\\\n                          \\\\\\"description\\\\\\": \\\\\\"cpu limit of arms prometheus operator\\\\\\",\\\\n                          \\\\\\"type\\\\\\": \\\\\\"string\\\\\\",\\\\n                          \\\\\\"pattern\\\\\\": \\\\\\"^[1-9][0-9]*(m|\\\\\\\\\\\\\\\\.\\\\\\\\\\\\\\\\d+)?$\\\\\\",\\\\n                          \\\\\\"default\\\\\\": \\\\\\"1.0\\\\\\",\\\\n                          \\\\\\"x-ui-description\\\\\\": \\\\\\"&lt;mds-key&gt;\\\\\\",\\\\n                          \\\\\\"x-ui-validation-message\\\\\\": \\\\\\"&lt;mds-key&gt;\\\\\\"\\\\n                        }\\\\n                      },\\\\n                      \\\\\\"type\\\\\\": \\\\\\"object\\\\\\",\\\\n                      \\\\\\"additionalProperties\\\\\\": false\\\\n                    },\\\\n                    \\\\\\"requests\\\\\\": {\\\\n                      \\\\\\"properties\\\\\\": {\\\\n                        \\\\\\"memory\\\\\\": {\\\\n                          \\\\\\"description\\\\\\": \\\\\\"memory request of arms prometheus operator\\\\\\",\\\\n                          \\\\\\"type\\\\\\": \\\\\\"string\\\\\\",\\\\n                          \\\\\\"pattern\\\\\\": \\\\\\"^[1-9][0-9]*(\\\\\\\\\\\\\\\\.\\\\\\\\\\\\\\\\d+)?(K|Ki|M|Mi|G|Gi|T|Ti)?$\\\\\\",\\\\n                          \\\\\\"default\\\\\\": \\\\\\"500m\\\\\\",\\\\n                          \\\\\\"x-ui-description\\\\\\": \\\\\\"&lt;mds-key&gt;\\\\\\",\\\\n                          \\\\\\"x-ui-validation-message\\\\\\": \\\\\\"&lt;mds-key&gt;\\\\\\"\\\\n                        },\\\\n                        \\\\\\"cpu\\\\\\": {\\\\n                          \\\\\\"description\\\\\\": \\\\\\"cpu request of arms prometheus operator\\\\\\",\\\\n                          \\\\\\"type\\\\\\": \\\\\\"string\\\\\\",\\\\n                          \\\\\\"pattern\\\\\\": \\\\\\"^[1-9][0-9]*(m|\\\\\\\\\\\\\\\\.\\\\\\\\\\\\\\\\d+)?$\\\\\\",\\\\n                          \\\\\\"default\\\\\\": \\\\\\"1.0\\\\\\",\\\\n                          \\\\\\"x-ui-description\\\\\\": \\\\\\"&lt;mds-key&gt;\\\\\\",\\\\n                          \\\\\\"x-ui-validation-message\\\\\\": \\\\\\"&lt;mds-key&gt;\\\\\\"\\\\n                        }\\\\n                      },\\\\n                      \\\\\\"type\\\\\\": \\\\\\"object\\\\\\",\\\\n                      \\\\\\"additionalProperties\\\\\\": false\\\\n                    }\\\\n                  },\\\\n                  \\\\\\"type\\\\\\": \\\\\\"object\\\\\\",\\\\n                  \\\\\\"additionalProperties\\\\\\": false\\\\n                }\\\\n              },\\\\n              \\\\\\"type\\\\\\": \\\\\\"object\\\\\\",\\\\n              \\\\\\"additionalProperties\\\\\\": false\\\\n            }\\\\n          },\\\\n          \\\\\\"type\\\\\\": \\\\\\"object\\\\\\",\\\\n          \\\\\\"additionalProperties\\\\\\": false\\\\n        }\\\\n      },\\\\n      \\\\\\"type\\\\\\": \\\\\\"object\\\\\\",\\\\n      \\\\\\"additionalProperties\\\\\\": false\\\\n    }\\\\n  },\\\\n  \\\\\\"title\\\\\\": \\\\\\"Values\\\\\\",\\\\n  \\\\\\"type\\\\\\": \\\\\\"object\\\\\\",\\\\n  \\\\\\"additionalProperties\\\\\\": false\\\\n}</config_schema>\\n</DescribeClusterAddonMetadataResponse>","errorExample":""}]',
      'title' => '查询集群组件元数据',
    ),
    'UpgradeClusterAddons' => 
    array (
      'summary' => '您可以调用UpgradeClusterAddons接口升级集群组件实例的版本，从而享受新版本带来的功能优化、缺陷修复等。请依次逐个组件升级，确认一个组件升级成功后再升级下一个组件。升级组件前，请了解每个组件升级的注意事项。升级集群组件实例版本可能会影响业务，请评估影响后在业务低峰期操作并提前做好相关的数据备份。',
      'path' => '/clusters/{ClusterId}/components/upgrade',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '493',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcsk6XCUME',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cf4299b79b3e34226abfdc80a4bda****',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'Request body，类型是对象数组',
            'description' => '请求参数。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '组件信息。',
              'type' => 'object',
              'properties' => 
              array (
                'component_name' => 
                array (
                  'title' => '组件名称',
                  'description' => '组件名称。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'coredns',
                ),
                'next_version' => 
                array (
                  'title' => '可升级版本',
                  'description' => '可升级版本。调用`DescribeClusterAddonsVersion`参数可以查看可以升级的版本。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '1.6.7',
                ),
                'version' => 
                array (
                  'title' => '当前版本',
                  'description' => '当前版本。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'v1.6.2',
                ),
                'config' => 
                array (
                  'title' => '组件自定义参数',
                  'description' => '组件自定义参数，使用JSON字符串编码。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '{\\"CpuRequest\\":\\"800m\\"}',
                ),
                'policy' => 
                array (
                  'title' => '组件升级策略。',
                  'description' => '组件升级策略。可选值：
- overwrite：覆盖升级。
- canary：金丝雀升级。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'canary',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '升级集群实例组件',
    ),
    'DescribeClusterAddonsUpgradeStatus' => 
    array (
      'summary' => '根据组件名称查询该组件升级状态。',
      'path' => '/clusters/{ClusterId}/components/upgradestatus',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c23421cfa74454bc8b37163fd19af****',
          ),
        ),
        1 => 
        array (
          'name' => 'componentIds',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '组件名称列表。',
            'description' => '组件名称列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '组件名称。',
              'type' => 'string',
              'required' => true,
              'example' => 'metric-server',
            ),
            'required' => true,
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
            'title' => '组件升级详情',
            'description' => '
返回数据体。',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'addon_info' => 
                array (
                  'title' => '组件信息',
                  'description' => '组件信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'component_name' => 
                    array (
                      'title' => '组件名称',
                      'description' => '组件名称。',
                      'type' => 'string',
                      'example' => 'cloud-controller-manager',
                    ),
                    'version' => 
                    array (
                      'title' => '组件版本',
                      'description' => '组件当前版本。
',
                      'type' => 'string',
                      'example' => 'v1.9.3.340-g9830b58-aliyun',
                    ),
                    'ready_to_upgrade' => 
                    array (
                      'title' => '组件是否满足升级条件',
                      'description' => '组件是否满足升级条件。取值：

- `true`：满足升级条件。
- `false`：不满足升级条件。',
                      'type' => 'string',
                      'example' => 'true',
                    ),
                  ),
                ),
                'tasks' => 
                array (
                  'title' => '升级任务详情',
                  'description' => '升级任务详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'created_at' => 
                    array (
                      'title' => '升级任务创建时间',
                      'description' => '任务开始时间。',
                      'type' => 'string',
                      'example' => '2020-12-28T17:00:50Z',
                    ),
                    'finished_at' => 
                    array (
                      'title' => '升级任务完成时间',
                      'description' => '任务完成时间。',
                      'type' => 'string',
                      'example' => '2020-12-28T17:05:36Z',
                    ),
                    'status' => 
                    array (
                      'title' => '升级任务状态',
                      'description' => '升级任务状态。取值：
- `Upgrading`：升级中。
- `Success`：成功。
- ` Failed`：失败。
- ` Running`：安装中。
- `Paused`：暂停中。
- `Canceled`：已取消。',
                      'type' => 'string',
                      'example' => 'Success',
                    ),
                    'is_canceled' => 
                    array (
                      'title' => '升级任务是否被取消。',
                      'description' => '升级任务是否被取消。取值：

- `true`：任务被取消。
- `false`：任务未被取消。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                  ),
                ),
              ),
              'description' => '组件升级状态详情。',
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'substitutions' => 
        array (
          0 => 'CS::2015-12-15::ListClusterAddonInstances',
          1 => 'CS::2015-12-15::GetClusterAddonInstance',
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"key\\": {\\n    \\"addon_info\\": {\\n      \\"component_name\\": \\"cloud-controller-manager\\",\\n      \\"version\\": \\"v1.9.3.340-g9830b58-aliyun\\",\\n      \\"ready_to_upgrade\\": \\"true\\"\\n    },\\n    \\"tasks\\": {\\n      \\"created_at\\": \\"2020-12-28T17:00:50Z\\",\\n      \\"finished_at\\": \\"2020-12-28T17:05:36Z\\",\\n      \\"status\\": \\"Success\\",\\n      \\"is_canceled\\": false\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeClusterAddonsUpgradeStatusResponse>\\n    <key>\\n        <addon_info>\\n            <component_name>cloud-controller-manager</component_name>\\n            <version>v1.9.3.340-g9830b58-aliyun</version>\\n            <ready_to_upgrade>true</ready_to_upgrade>\\n        </addon_info>\\n        <tasks>\\n            <created_at>2020-12-28T17:00:50Z</created_at>\\n            <finished_at>2020-12-28T17:05:36Z</finished_at>\\n            <status>Success</status>\\n            <is_canceled>false</is_canceled>\\n        </tasks>\\n    </key>\\n</DescribeClusterAddonsUpgradeStatusResponse>","errorExample":""}]',
      'title' => '查询集群组件升级状态',
    ),
    'UpgradeCluster' => 
    array (
      'summary' => '为避免过期版本集群潜在的安全和稳定性风险，同时享用新集群版本的新功能，请随ACK集群的版本发布节奏升级集群。升级集群前，请参考Kubernetes版本说明帮助文档了解待升级版本的版本解读、废弃资源API、升级注意事项等，避免因高版本的功能变更导致业务功能不兼容，继而影响集群正常运行。升级集群前请先进行集群升级检查。升级集群版本可能会影响业务，请评估影响后在业务低峰期操作并提前做好相关的数据备份。',
      'path' => '/api/v2/clusters/{ClusterId}/upgrade',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c82e6987e2961451182edacd74faf****',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求体',
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'component_name' => 
              array (
                'title' => '组件名称，集群升级时取值"k8s"。',
                'description' => '已废弃，无需传递。',
                'type' => 'string',
                'deprecated' => true,
                'required' => false,
                'example' => 'k8s',
              ),
              'next_version' => 
              array (
                'title' => '目标版本。',
                'description' => '集群升级的目标版本。',
                'type' => 'string',
                'required' => false,
                'example' => '1.24.6-aliyun.1',
              ),
              'version' => 
              array (
                'title' => '已废弃，无需传递，请使用 next_version 参数传入升级目标版本。',
                'description' => '已废弃，无需传递，请使用 next_version 参数传入升级目标版本。',
                'type' => 'string',
                'deprecated' => true,
                'required' => false,
                'example' => '1.24.6-aliyun.1',
              ),
              'master_only' => 
              array (
                'title' => '是否仅升级master。',
                'description' => '是否仅升级master。
- true：仅升级master。
- false：升级master和worker。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
                'default' => 'false',
              ),
            ),
            'required' => false,
            'example' => 'k8s',
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
              'cluster_id' => 
              array (
                'title' => '集群ID。',
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'c82e6987e2961451182edacd74faf****',
              ),
              'task_id' => 
              array (
                'title' => '任务ID。',
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'T-5faa48fb31b6b8078d00****',
              ),
              'request_id' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0527ac9a-c899-4341-a21a-****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"cluster_id\\": \\"c82e6987e2961451182edacd74faf****\\",\\n  \\"task_id\\": \\"T-5faa48fb31b6b8078d00****\\",\\n  \\"request_id\\": \\"0527ac9a-c899-4341-a21a-****\\"\\n}","type":"json"}]',
      'title' => '升级集群',
      'description' => '成功调用UpgradeCluster接口后，该API将返回此次升级任务的`task_id`，您可以通过调用任务API管理该操作任务：

- [调用DescribeTaskInfo查询任务详情](~~2667985~~)
- [调用PauseTask暂停正在运行中的任务](~~2667986~~)
- [调用ResumeTask恢复运行已暂停的任务](~~2667987~~)
- [调用CancelTask取消运行中的任务](~~2667988~~)',
    ),
    'GetUpgradeStatus' => 
    array (
      'summary' => '根据集群ID，查询该集群的升级状态。',
      'path' => '/api/v2/clusters/{ClusterId}/upgrade/status',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '387',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcskEUXDVA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c106f377e16f34eb1808d6b9362c9****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回数据体。',
            'description' => '集群升级状态详情。',
            'type' => 'object',
            'properties' => 
            array (
              'error_message' => 
              array (
                'title' => '错误信息描述。',
                'description' => '集群升级中的错误信息。',
                'type' => 'string',
                'example' => 'subject to actual return',
              ),
              'precheck_report_id' => 
              array (
                'title' => '预检查返回ID。',
                'description' => '预检查返回ID。',
                'type' => 'string',
                'example' => 'be4c8eb72de94d459ea7ace7c811d119',
              ),
              'status' => 
              array (
                'title' => '升级状态。',
                'description' => '集群目前升级的状态。取值：

- `success` : 升级成功。
- `fail` : 升级失败。
- `pause` : 升级暂停。
- `running` : 升级进行中。',
                'type' => 'string',
                'example' => 'running',
              ),
              'upgrade_step' => 
              array (
                'title' => '升级任务执行到哪一步了。',
                'description' => '集群目前升级的阶段。取值：

- `not_start` : 暂未开始。
- `prechecking` : 预检查中。
- `upgrading`:  升级中。
- `pause` : 暂停中。
- `success` : 升级成功。',
                'type' => 'string',
                'example' => 'prechecking',
              ),
              'upgrade_task' => 
              array (
                'title' => '升级任务详情。',
                'description' => '升级任务详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'status' => 
                  array (
                    'title' => '任务状态：  emptry、running、success、failed',
                    'description' => '升级任务状态。取值：
- `running`: 执行中。
- `Success`: 执行成功。
- `Failed`: 执行失败。

',
                    'type' => 'string',
                    'example' => 'running',
                  ),
                  'message' => 
                  array (
                    'title' => '任务描述信息。',
                    'description' => '升级任务描述信息。',
                    'type' => 'string',
                    'example' => 'subject to actual return',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'substitutions' => 
        array (
          0 => 'CS::2015-12-15::DescribeTaskInfo',
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"error_message\\": \\"subject to actual return\\",\\n  \\"precheck_report_id\\": \\"be4c8eb72de94d459ea7ace7c811d119\\",\\n  \\"status\\": \\"running\\",\\n  \\"upgrade_step\\": \\"prechecking\\",\\n  \\"upgrade_task\\": {\\n    \\"status\\": \\"running\\",\\n    \\"message\\": \\"subject to actual return\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetUpgradeStatusResponse>\\n    <error_message>subject to actual return</error_message>\\n    <precheck_report_id>be4c8eb72de94d459ea7ace7c811d119</precheck_report_id>\\n    <status>running</status>\\n    <upgrade_step>prechecking</upgrade_step>\\n    <upgrade_task>\\n        <status>running</status>\\n        <message>subject to actual return</message>\\n    </upgrade_task>\\n</GetUpgradeStatusResponse>","errorExample":""}]',
      'title' => '查询集群升级状态',
    ),
    'PauseClusterUpgrade' => 
    array (
      'summary' => '暂停用户集群升级。',
      'path' => '/api/v2/clusters/{ClusterId}/upgrade/pause',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c82e6987e2961451182edacd74faf****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'substitutions' => 
        array (
          0 => 'CS::2015-12-15::PauseTask',
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '暂停集群升级',
    ),
    'CancelClusterUpgrade' => 
    array (
      'summary' => '取消处于升级状态的ACK集群。',
      'path' => '/api/v2/clusters/{ClusterId}/upgrade/cancel',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c106f377e16f34eb1808d6b9362c9****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'substitutions' => 
        array (
          0 => 'CS::2015-12-15::CancelClusterUpgrade',
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '取消集群升级',
    ),
    'ResumeUpgradeCluster' => 
    array (
      'summary' => '根据集群ID，恢复升级处于升级暂停状态的集群。',
      'path' => '/api/v2/clusters/{ClusterId}/upgrade/resume',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c82e6987e2961451182edacd74faf****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'substitutions' => 
        array (
          0 => 'CS::2015-12-15::ResumeTask',
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '重新开始集群升级',
    ),
    'DescribeUserPermission' => 
    array (
      'summary' => '在ACK集群中，您可以创建并指定不同RAM用户或角色拥有不同的访问权限，从而确保安全访问控制和资源隔离。您可以调用DescribeUserPermission接口查询RAM用户或角色拥有的集群权限详情，包括可访问的资源、权限的作用范围、预置的角色类型、权限来源等。',
      'path' => '/permissions/users/{uid}',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'uid',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'RAM 用户的 UID',
            'description' => '指定RAM用户或RAM角色的ID。

> 当为RAM角色授权时，使用RAM角色的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '21175****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回体参数',
            'description' => '返回体参数。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'RAM用户集群授权详情。',
              'type' => 'object',
              'properties' => 
              array (
                'resource_id' => 
                array (
                  'title' => '集群访问配置',
                  'description' => '集群访问配置，格式为：

- 当是集群维度授权时，格式为：`{cluster_id}`。
- 当是命名空间维度授权时，格式为：`{cluster_id}/{namespace}`。
- 当是所有集群授权时，值固定为：`all-clusters`。',
                  'type' => 'string',
                  'example' => 'c1b542****',
                ),
                'resource_type' => 
                array (
                  'title' => '授权类型',
                  'description' => '授权类型，取值：

- `cluster`：集群维度。
- `namespace`：命名空间维度。
- `console`：所有集群维度的授权（之前只用于控制台展示）。

',
                  'type' => 'string',
                  'example' => 'cluster',
                ),
                'role_name' => 
                array (
                  'title' => '自定义角色名称',
                  'description' => '自定义角色名称，当授权自定义角色时，该字段为指定的自定义集群管理角色名称。',
                  'type' => 'string',
                  'example' => 'view',
                ),
                'role_type' => 
                array (
                  'title' => '预置的角色类型',
                  'description' => '预置的角色类型，取值：

- `admin`：管理员。
- `ops`：运维人员。
- `dev`：开发人员。
- `restricted`：受限用户。
- `custom`：使用自定义的集群管理角色。',
                  'type' => 'string',
                  'example' => 'admin',
                ),
                'is_owner' => 
                array (
                  'title' => '是否为集群 owner 的授权',
                  'description' => '是否为集群创建者的授权，取值：

- `0`：代表不是集群创建者的授权记录。
- `1`：代表该授权记录为集群创建者的管理员权限。',
                  'type' => 'integer',
                  'format' => 'int64',
                  'example' => '1',
                ),
                'is_ram_role' => 
                array (
                  'title' => '是否为ram 角色授权',
                  'description' => '是否为RAM角色授权，取值：

- `0`：代表当前记录不是RAM角色授权。
- `1`：代表当前记录是RAM角色授权。

',
                  'type' => 'integer',
                  'format' => 'int64',
                  'example' => '1',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"[\\n  {\\n    \\"resource_id\\": \\"c1b542****\\",\\n    \\"resource_type\\": \\"cluster\\",\\n    \\"role_name\\": \\"view\\",\\n    \\"role_type\\": \\"admin\\",\\n    \\"is_owner\\": 1,\\n    \\"is_ram_role\\": 1\\n  }\\n]","errorExample":""},{"type":"xml","example":"<0>\\n    <resource_id>c1b542**</resource_id>\\n    <resource_type>cluster</resource_type>\\n    <role_name>view</role_name>\\n    <role_type>admin</role_type>\\n    <is_owner>1</is_owner>\\n    <is_ram_role>1</is_ram_role>\\n</0>","errorExample":""}]',
      'title' => '查询RAM用户或角色的集群授权信息',
      'description' => '**注意事项**：

- 如果调用该API的账号为RAM用户或RAM角色，则API将仅能返回调用账号有RBAC管理员权限的集群对应的权限。如您需要该API列出所有集群的权限，则调用账号需具备所有集群的RBAC管理员权限。',
      'responseParamsDescription' => '未在参数列表中展示的 parent_id 参数已废弃，请勿使用。',
    ),
    'GrantPermissions' => 
    array (
      'summary' => '在ACK集群中，非集群创建者或阿里云账号（主账号）在集群中默认没有任何RBAC权限。您可以调用GrantPermissions接口，更新RAM用户或角色拥有的RBAC访问权限，包括可访问的资源、权限的作用范围、预置的角色类型等，从而更好地管理集群的安全访问控制。',
      'path' => '/permissions/users/{uid}',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'uid',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '指定 RAM 用户的 UID',
            'description' => 'RAM用户或RAM角色的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2367****',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求体参数',
            'description' => '请求体参数',
            'type' => 'array',
            'items' => 
            array (
              'description' => '授权详情。',
              'type' => 'object',
              'properties' => 
              array (
                'cluster' => 
                array (
                  'title' => '授权目标集群id',
                  'description' => '授权目标集群ID。

- 当`role_type`参数的值是`all-clusters`时，此参数的值传空字符串。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'c796c60***',
                ),
                'is_custom' => 
                array (
                  'title' => '该授权是否是自定义授权',
                  'description' => '该授权是否是自定义授权（`role_name`使用自定义的ClusterRole名称）。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'false',
                ),
                'role_name' => 
                array (
                  'title' => '预置的角色名称',
                  'description' => '预置的角色名称，取值：

- `admin`: 管理员。
- `ops`：运维人员。
- `dev`：开发人员。
- `restricted`: 受限用户。
- 自定义的ClusterRole名称。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'ops',
                ),
                'role_type' => 
                array (
                  'title' => '授权类型',
                  'description' => '授权类型，取值：

- `cluster`：集群维度。
- `namespace`: 命名空间维度。
- `all-clusters`: 所有集群维度。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'cluster',
                ),
                'namespace' => 
                array (
                  'title' => '命名空间名称',
                  'description' => '命名空间名称，集群维度授权时默认为空。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
                'is_ram_role' => 
                array (
                  'title' => '是否是 RAM 角色授权',
                  'description' => '是否是RAM角色授权。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'false',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '全量更新RAM用户或角色的集群授权信息',
      'description' => '**注意事项**：

- 如果调用这个API的账号是RAM用户账号，请先确保该账号已拥有修改其他RAM用户或RAM角色集群授权信息的权限，否则API将返回`StatusForbidden`或`ForbiddenGrantPermissions`错误码。具体操作，请参见[子账号如何给其他子账号进行RBAC授权](~~119035~~) 。

- 全量更新RAM用户或RAM角色集群授权信息操作会覆盖目标RAM用户或RAM角色已有的集群权限，请求时需要包含想要授权给目标RAM用户或RAM角色的所有权限配置。',
    ),
    'CreateTemplate' => 
    array (
      'summary' => '编排模板是对一组Kubernetes集群资源的定义和描述，以声明性方式描述应用应该如何运行或者配置。您可以基于这些模板自动化部署和管理集群中的资源，例如Pods、Services、Deployments、ConfigMaps、PersistentVolumes等。您可以调用CreateTemplate接口创建一个编排模板。',
      'path' => '/templates',
      'methods' => 
      array (
        0 => 'post',
        1 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '8528',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcskDJFO7P',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求体参数。',
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'name' => 
              array (
                'title' => '模板名称。',
                'description' => '模板名称。

命名规则：由数字、汉字、英文字符或短划线（-）组成，长度范围1~63个字符，且不能以短划线（-）开头。',
                'type' => 'string',
                'required' => true,
                'example' => 'service-account-template',
              ),
              'template' => 
              array (
                'title' => 'YAML格式的模板内容。',
                'description' => 'YAML格式的模板内容。',
                'type' => 'string',
                'required' => true,
                'example' => 'apiVersion: v1\\nkind: ServiceAccount\\nmetadata:\\n  name: test-sa',
              ),
              'tags' => 
              array (
                'title' => '模板标签。',
                'description' => '编排模板标签。',
                'type' => 'string',
                'required' => false,
                'example' => 'test',
              ),
              'description' => 
              array (
                'title' => '模板描述。',
                'description' => '编排模板描述。',
                'type' => 'string',
                'required' => false,
                'example' => 'this is test',
              ),
              'template_type' => 
              array (
                'title' => '模板类型。默认值：kubernetes',
                'description' => '模板类型，取值可以是任意值。

- 当取值是`kubernetes`时将在控制台的编排模板页面展示该模板。

- 当取值是`compose`时将不在控制台展示。

推荐设置为`kubernetes`。

默认值：`compose`。',
                'type' => 'string',
                'required' => false,
                'example' => 'kubernetes',
              ),
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
            'title' => '返回体参数',
            'description' => '返回数据体。',
            'type' => 'object',
            'properties' => 
            array (
              'template_id' => 
              array (
                'title' => '模板ID。',
                'description' => '编排模板ID。',
                'type' => 'string',
                'example' => 'ba1fe77b-b01e-4640-b77e-8f1b80e3e3cf',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"template_id\\": \\"ba1fe77b-b01e-4640-b77e-8f1b80e3e3cf\\"\\n}","errorExample":""},{"type":"xml","example":"<template_id>ba1fe77b-b01e-4640-b77e-8f1b80e3e3cf</template_id>","errorExample":""}]',
      'title' => '创建编排模板',
    ),
    'DescribeTemplateAttribute' => 
    array (
      'summary' => '编排模板是对一组Kubernetes集群资源的定义和描述，以声明性方式描述应用应该如何运行或者配置。您可以调用DescribeTemplateAttribute接口，查询目标编排模板的详细信息，包括访问权限、YAML内容、标签等。',
      'path' => '/templates/{TemplateId}',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'TemplateId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '模板ID。',
            'description' => '模板ID。',
            'type' => 'string',
            'required' => true,
            'example' => '874ec485-e7e6-4373-8a3b-47bde8a****',
          ),
        ),
        1 => 
        array (
          'name' => 'template_type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模板类型，值为创建部署模板时指定的模板类型。',
            'description' => '模板类型，其值可以是任意值。

- 当取值是`kubernetes`时将在控制台的编排模板页面展示该模板。

- 当取值是`compose`时将在控制台Swarm集群页面显示该模板（已废弃）。

- 当取值非`kubernetes`时在控制台的编排模板页面将不会展示该模板，推荐使用`kubernetes`。

默认值：`kubernetes`。
',
            'type' => 'string',
            'required' => false,
            'example' => 'kubernetes',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回参数。',
            'description' => '编排模板详情。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '请求数据体。',
              'type' => 'object',
              'properties' => 
              array (
                'id' => 
                array (
                  'title' => '编排模板ID，模板每次修改，这个ID都会改变。	',
                  'description' => '编排模板ID，每次变更都会有一个模板ID。',
                  'type' => 'string',
                  'example' => '72d20cf8-a533-4ea9-a10d-e7630d3d****',
                ),
                'acl' => 
                array (
                  'title' => '编排模板权限。取值：private，public，shared。',
                  'description' => '编排模板访问权限。',
                  'type' => 'string',
                  'example' => 'private',
                ),
                'name' => 
                array (
                  'title' => '编排模板名称。	',
                  'description' => '编排模板名称。',
                  'type' => 'string',
                  'example' => 'web',
                ),
                'template' => 
                array (
                  'title' => '编排模板内容。	',
                  'description' => '编排模板YAML内容。',
                  'type' => 'string',
                  'example' => 'apiVersion: V1\\n***',
                ),
                'template_type' => 
                array (
                  'title' => '编排模板类型',
                  'description' => '模板类型，其值可以是任意值。

- 当取值是`kubernetes`时将在控制台的编排模板页面展示该模板。

- 当取值是`compose`时将在控制台Swarm集群页面显示该模板（已废弃）。

- 当取值非`kubernetes`时在控制台的编排模板页面将不会展示该模板，推荐使用`kubernetes`。

默认值：`kubernetes`。
',
                  'type' => 'string',
                  'example' => 'kubernetes',
                ),
                'description' => 
                array (
                  'title' => '编排模板描述。',
                  'description' => '编排模板描述信息。',
                  'type' => 'string',
                  'example' => 'test template',
                ),
                'tags' => 
                array (
                  'title' => '部署模板的标签。',
                  'description' => '部署模板的标签。',
                  'type' => 'string',
                  'example' => 'sa',
                ),
                'template_with_hist_id' => 
                array (
                  'title' => '编排模板ID，该ID唯一不随更新而改变。	',
                  'description' => '编排模板唯一ID，不随模板更新而改变。',
                  'type' => 'string',
                  'example' => '874ec485-e7e6-4373-8a3b-47bde8ae****',
                ),
                'created' => 
                array (
                  'title' => '编排模板创建时间。',
                  'description' => '编排模板创建时间。',
                  'type' => 'string',
                  'example' => '2020-09-16T19:21:29+08:00',
                ),
                'updated' => 
                array (
                  'title' => '编排模板修改时间。	',
                  'description' => '编排模板更新时间。',
                  'type' => 'string',
                  'example' => '2020-09-16T19:21:29+08:00',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"[\\n  {\\n    \\"id\\": \\"72d20cf8-a533-4ea9-a10d-e7630d3d****\\",\\n    \\"acl\\": \\"private\\",\\n    \\"name\\": \\"web\\",\\n    \\"template\\": \\"apiVersion: V1\\\\\\\\n***\\",\\n    \\"template_type\\": \\"kubernetes\\",\\n    \\"description\\": \\"test template\\",\\n    \\"tags\\": \\"sa\\",\\n    \\"template_with_hist_id\\": \\"874ec485-e7e6-4373-8a3b-47bde8ae****\\",\\n    \\"created\\": \\"2020-09-16T19:21:29+08:00\\",\\n    \\"updated\\": \\"2020-09-16T19:21:29+08:00\\"\\n  }\\n]","errorExample":""},{"type":"xml","example":"<DescribeTemplateAttributeResponse>\\n    <id>72d20cf8-a533-4ea9-a10d-e7630d3d****</id>\\n    <acl>private</acl>\\n    <name>web</name>\\n    <template>apiVersion: V1\\\\n***</template>\\n    <template_type>kubernetes</template_type>\\n    <description>test template</description>\\n    <tags>sa</tags>\\n    <template_with_hist_id>874ec485-e7e6-4373-8a3b-47bde8ae****</template_with_hist_id>\\n    <created>2020-09-16T19:21:29+08:00</created>\\n    <updated>2020-09-16T19:21:29+08:00</updated>\\n</DescribeTemplateAttributeResponse>","errorExample":""}]',
      'title' => '查询指定编排模板的详情',
    ),
    'DescribeTemplates' => 
    array (
      'summary' => '编排模板是对一组Kubernetes集群资源的定义和描述，以声明性方式描述应用应该如何运行或者配置。您可以调用DescribeTemplates接口获取已创建的编排模板的列表，并查询编排模板的详细信息，包括访问权限、YAML内容、标签等。',
      'path' => '/templates',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'template_type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模板类型，部署模板类型，目前一共有2种类型，取值为：kubernetes或compose。',
            'description' => '模板类型，值可以是任意值。

- 当取值是`kubernetes`时将在控制台的编排模板页面展示该模板。

- 当取值是`compose`时将不在控制台的编排模板页面展示该模板。

默认值：`kubernetes`。',
            'type' => 'string',
            'required' => false,
            'example' => 'kubernetes',
          ),
        ),
        1 => 
        array (
          'name' => 'page_num',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '对查询结果进行分页处理，指定返回第几页的数据。  默认值为 1',
            'description' => '对查询结果进行分页处理，指定返回第几页的数据。

默认值： 1。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'page_size',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '对查询结果进行分页处理，指定每页包含的数据条数。  默认值为 10',
            'description' => '对查询结果进行分页处理，指定每页包含的数据条数。

默认值：10。',
            'type' => 'integer',
            'format' => 'int64',
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
            'title' => '返回体数据。',
            'description' => '返回数据体。',
            'type' => 'object',
            'properties' => 
            array (
              'templates' => 
              array (
                'title' => '模板列表。',
                'description' => '模板列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '部署模板详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'acl' => 
                    array (
                      'title' => '模板访问权限，取值为：private、pubilc或shared。。',
                      'description' => '用户部署模板的访问权限，取值：

- `private`：私有的。
- `public`：公共的。
- `shared`：可共享的。

默认值：`private`。',
                      'type' => 'string',
                      'example' => 'private',
                    ),
                    'id' => 
                    array (
                      'title' => '模板ID。会模板随着更新而变化。',
                      'description' => '部署模板ID。',
                      'type' => 'string',
                      'example' => '874ec485-e7e6-4373-8a3b-47bde8ae789f',
                    ),
                    'name' => 
                    array (
                      'title' => '模板名称。',
                      'description' => '部署模板名称。',
                      'type' => 'string',
                      'example' => 'webserver',
                    ),
                    'description' => 
                    array (
                      'title' => '模板描述信息。',
                      'description' => '部署模板描述信息。',
                      'type' => 'string',
                      'example' => 'a web server',
                    ),
                    'tags' => 
                    array (
                      'title' => '模板标签，如果不显式指定了，默认为模板名称。',
                      'description' => '部署模板的标签，如果不显式指定，默认为模板名称。',
                      'type' => 'string',
                      'example' => 'kubernetes',
                    ),
                    'template' => 
                    array (
                      'title' => '模板详情。',
                      'description' => 'YAML格式的模板内容。',
                      'type' => 'string',
                      'example' => 'apiVersion: apps/v1\\nkind: Deployment\\nmetadata:\\n  name: nginx-deployment-basic\\n  labels:\\n    app: nginx\\nspec:\\n  replicas: 2\\n  selector:\\n    matchLabels:\\n      app: nginx\\n  template:\\n    metadata:\\n      labels:\\n        app: nginx\\n    spec:\\n      containers:\\n      - name: nginx\\n        image: busybox:latest\\n        ports:\\n        - containerPort: 80',
                    ),
                    'template_type' => 
                    array (
                      'title' => '部署模板类型。',
                      'description' => '模板类型，值可以是任意值。

- 当取值是`kubernetes`时将在控制台的编排模板页面展示该模板。

- 当取值是`compose`时将在控制台Swarm集群页面显示该模板（已废弃）。',
                      'type' => 'string',
                      'example' => 'kubernetes',
                    ),
                    'created' => 
                    array (
                      'title' => '模板创建时间。',
                      'description' => '部署模板创建时间。',
                      'type' => 'string',
                      'example' => '2020-06-10T16:30:16+08:00',
                    ),
                    'updated' => 
                    array (
                      'title' => '模板修改时间。',
                      'description' => '部署模板更新时间。',
                      'type' => 'string',
                      'example' => '2020-06-10T16:30:16+08:00',
                    ),
                    'template_with_hist_id' => 
                    array (
                      'title' => '模板唯一ID。',
                      'description' => '模板关联的父模板ID，用于实现模板多版本功能（同一模板的不同版本拥有相同的`template_with_hist_id`值）。',
                      'type' => 'string',
                      'example' => 'ad81d115-7c8b-47e7-a222-9c28d7f6e588',
                    ),
                  ),
                ),
              ),
              'page_info' => 
              array (
                'title' => '分页信息。',
                'description' => '分页信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'page_number' => 
                  array (
                    'title' => '当前页数。',
                    'description' => '展示当前页数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '20',
                  ),
                  'page_size' => 
                  array (
                    'title' => '单页最大数据条数。',
                    'description' => '单页最大数据条数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '3',
                  ),
                  'total_count' => 
                  array (
                    'title' => '结果总数。',
                    'description' => '结果总数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '50',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"templates\\": [\\n    {\\n      \\"acl\\": \\"private\\",\\n      \\"id\\": \\"874ec485-e7e6-4373-8a3b-47bde8ae789f\\",\\n      \\"name\\": \\"webserver\\",\\n      \\"description\\": \\"a web server\\",\\n      \\"tags\\": \\"kubernetes\\",\\n      \\"template\\": \\"apiVersion: apps/v1\\\\\\\\nkind: Deployment\\\\\\\\nmetadata:\\\\\\\\n  name: nginx-deployment-basic\\\\\\\\n  labels:\\\\\\\\n    app: nginx\\\\\\\\nspec:\\\\\\\\n  replicas: 2\\\\\\\\n  selector:\\\\\\\\n    matchLabels:\\\\\\\\n      app: nginx\\\\\\\\n  template:\\\\\\\\n    metadata:\\\\\\\\n      labels:\\\\\\\\n        app: nginx\\\\\\\\n    spec:\\\\\\\\n      containers:\\\\\\\\n      - name: nginx\\\\\\\\n        image: busybox:latest\\\\\\\\n        ports:\\\\\\\\n        - containerPort: 80\\",\\n      \\"template_type\\": \\"kubernetes\\",\\n      \\"created\\": \\"2020-06-10T16:30:16+08:00\\",\\n      \\"updated\\": \\"2020-06-10T16:30:16+08:00\\",\\n      \\"template_with_hist_id\\": \\"ad81d115-7c8b-47e7-a222-9c28d7f6e588\\"\\n    }\\n  ],\\n  \\"page_info\\": {\\n    \\"page_number\\": 20,\\n    \\"page_size\\": 3,\\n    \\"total_count\\": 50\\n  }\\n}","errorExample":""},{"type":"xml","example":"<templates>\\n    <acl>private</acl>\\n    <id>874ec485-e7e6-4373-8a3b-47bde8ae789f</id>\\n    <name>webserver</name>\\n    <description>a web server</description>\\n    <tags>kubernetes</tags>\\n    <template>apiVersion: apps/v1\\\\nkind: Deployment\\\\nmetadata:\\\\n  name: nginx-deployment-basic\\\\n  labels:\\\\n    app: nginx\\\\nspec:\\\\n  replicas: 2\\\\n  selector:\\\\n    matchLabels:\\\\n      app: nginx\\\\n  template:\\\\n    metadata:\\\\n      labels:\\\\n        app: nginx\\\\n    spec:\\\\n      containers:\\\\n      - name: nginx\\\\n        image: busybox:latest\\\\n        ports:\\\\n        - containerPort: 80</template>\\n    <template_type>kubernetes</template_type>\\n    <created>2020-06-10T16:30:16+08:00</created>\\n    <updated>2020-06-10T16:30:16+08:00</updated>\\n    <template_with_hist_id>ad81d115-7c8b-47e7-a222-9c28d7f6e588</template_with_hist_id>\\n</templates>\\n<page_info>\\n    <page_number>20</page_number>\\n    <page_size>3</page_size>\\n    <total_count>50</total_count>\\n</page_info>","errorExample":""}]',
      'title' => '查询所有编排模板',
    ),
    'UpdateTemplate' => 
    array (
      'summary' => '编排模板是对一组Kubernetes集群资源的定义和描述，以声明性方式描述应用应该如何运行或者配置。您可以调用UpdateTemplate接口更新编排模板配置。',
      'path' => '/templates/{TemplateId}',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'TemplateId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '部署模板ID。',
            'description' => '模板ID。',
            'type' => 'string',
            'required' => true,
            'example' => '72d20cf8-a533-4ea9-a10d-e7630d3d2708',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'title' => '请求体',
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'description' => 
              array (
                'title' => '部署模板描述信息。',
                'description' => '部署模板描述信息。',
                'type' => 'string',
                'required' => false,
                'example' => 'web server cluster',
              ),
              'name' => 
              array (
                'title' => '部署模板名称。',
                'description' => '部署模板名称。',
                'type' => 'string',
                'required' => false,
                'example' => 'webserver01',
              ),
              'tags' => 
              array (
                'title' => '部署模板标签',
                'description' => '部署模板标签。',
                'type' => 'string',
                'required' => false,
                'example' => 'web',
              ),
              'template' => 
              array (
                'title' => '部署模板yaml。',
                'description' => 'YAML格式的模板内容。',
                'type' => 'string',
                'required' => false,
                'example' => 'apiVersion: apps/v1\\\\nkind: Deployment\\\\nmetadata:\\\\n  name: nginx-deployment-basic\\\\n  labels:\\\\n    app: nginx\\\\nspec:\\\\n  replicas: 2\\\\n  selector:\\\\n    matchLabels:\\\\n      app: nginx\\\\n  template:\\\\n    metadata:\\\\n      labels:\\\\n        app: nginx\\\\n    spec:\\\\n      containers:\\\\n      - name: nginx\\\\n        image: busybox:latest\\\\n        ports:\\\\n        - containerPort: 8080',
              ),
              'template_type' => 
              array (
                'title' => '部署模板类型。',
                'description' => '模板类型，值可以是任意值。

- 当取值是`kubernetes`时将在控制台的编排模板页面展示该模板。

- 当取值是`compose`时将在控制台Swarm集群页面显示该模板（已废弃）。
',
                'type' => 'string',
                'required' => false,
                'example' => 'kubernetes',
              ),
            ),
            'required' => false,
            'example' => 'webserver01',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '更新编排模板',
    ),
    'DeleteTemplate' => 
    array (
      'summary' => '当您无需使用某些编排模板时，您可以调用DeleteTemplate接口删除编排模板。',
      'path' => '/templates/{TemplateId}',
      'methods' => 
      array (
        0 => 'delete',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TemplateId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '模板ID。',
            'description' => '编排模板ID。',
            'type' => 'string',
            'required' => true,
            'example' => '20663627-81ee-4cfe-9b69-c96fcb84a674',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除编排模板',
    ),
    'CreateTrigger' => 
    array (
      'summary' => '为应用创建触发器。',
      'path' => '/clusters/{cluster_id}/triggers',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'title' => '请求体参数',
            'description' => '请求体参数',
            'type' => 'object',
            'properties' => 
            array (
              'cluster_id' => 
              array (
                'title' => '集群ID。',
                'description' => '集群ID。',
                'type' => 'string',
                'required' => true,
                'example' => 'c5cdf7e3938bc4f8eb0e44b21a80f****',
              ),
              'project_id' => 
              array (
                'title' => '项目名称。',
                'description' => '触发器项目名称。

由应用所在命名空间及应用名称组成，格式为`${namespace}/${name}`。

取值示例：`default/test-app`。',
                'type' => 'string',
                'required' => true,
                'example' => 'default/test-app',
              ),
              'action' => 
              array (
                'title' => '触发器行为',
                'description' => '触发器行为，取值：

`redeploy`：重新部署`project_id`中定义的资源。',
                'type' => 'string',
                'required' => true,
                'example' => 'redeploy',
              ),
              'type' => 
              array (
                'title' => '触发器类型。默认deployment。',
                'description' => '触发器类型。取值：

- `deployment`：针对无状态应用的触发器。 

- `application`：针对应用中心应用的触发器。

默认值：`deployment`。',
                'type' => 'string',
                'required' => false,
                'example' => 'deployment',
              ),
            ),
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'cluster_id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c68deb844dc6d480eb775be611fdf****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回数据体。',
            'description' => '返回数据体。',
            'type' => 'object',
            'properties' => 
            array (
              'id' => 
              array (
                'title' => '触发器ID。',
                'description' => '触发器ID。',
                'type' => 'string',
                'example' => '102536',
              ),
              'cluster_id' => 
              array (
                'title' => '集群ID。',
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'c93095129fc41463aa455d89444fd****',
              ),
              'project_id' => 
              array (
                'title' => '触发器项目名称。',
                'description' => '触发器项目名称。',
                'type' => 'string',
                'example' => 'default/test-app',
              ),
              'type' => 
              array (
                'title' => '触发器类型。默认值为 deployment 。',
                'description' => '触发器类型。默认值为 deployment 。',
                'type' => 'string',
                'example' => 'deployment',
              ),
              'action' => 
              array (
                'title' => '触发器行为。',
                'description' => '触发器行为。例如，`redeploy`：重新部署。',
                'type' => 'string',
                'example' => 'redeploy',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"id\\": \\"102536\\",\\n  \\"cluster_id\\": \\"c93095129fc41463aa455d89444fd****\\",\\n  \\"project_id\\": \\"default/test-app\\",\\n  \\"type\\": \\"deployment\\",\\n  \\"action\\": \\"redeploy\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateTriggerResponse>\\n    <id>102536</id>\\n    <cluster_id>c93095129fc41463aa455d89444fd****</cluster_id>\\n    <project_id>default/test-app</project_id>\\n    <type>deployment</type>\\n    <action>redeploy</action>\\n</CreateTriggerResponse>","errorExample":""}]',
      'title' => '创建触发器',
      'description' => '> 创建触发器仅支持Pod的重新部署。',
    ),
    'DeleteTrigger' => 
    array (
      'summary' => '删除应用触发器。',
      'path' => '/clusters/{cluster_id}/triggers/{Id}',
      'methods' => 
      array (
        0 => 'delete',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'cluster_id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c68deb844dc6d480eb775be611fdf****',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '触发器ID。',
            'description' => '触发器ID。',
            'type' => 'string',
            'required' => true,
            'example' => '123407',
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
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除触发器',
    ),
    'DescribeTrigger' => 
    array (
      'summary' => '查询指定的触发器。',
      'path' => '/clusters/{cluster_id}/triggers',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'cluster_id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c5cdf7e3938bc4f8eb0e44b21a80f****',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '应用所属命名空间。',
            'description' => '应用所属命名空间。',
            'type' => 'string',
            'required' => true,
            'example' => 'default',
          ),
        ),
        2 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '应用类型。',
            'description' => '触发器类型。取值：

- `deployment`：针对无状态应用的触发器。 

- `application`：针对应用中心应用的触发器。

默认值：`deployment`。

当不指定触发器类型时，查询结果将不过滤触发器类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'deployment',
          ),
        ),
        3 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '应用名称。',
            'description' => '应用名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'web-server',
          ),
        ),
        4 => 
        array (
          'name' => 'action',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '触发器行为。',
            'description' => '触发器行为，取值：

`redeploy`：重新部署`project_id`中定义的资源。

当不指定触发器行为时，查询结果将不过滤触发器行为。',
            'type' => 'string',
            'required' => false,
            'example' => 'redeploy',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回参数。',
            'description' => '触发器查询结果详情列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '触发器详情。',
              'type' => 'object',
              'properties' => 
              array (
                'id' => 
                array (
                  'title' => '触发器ID。',
                  'description' => '触发器ID。',
                  'type' => 'string',
                  'example' => '1234',
                ),
                'name' => 
                array (
                  'title' => '触发器名称。',
                  'description' => '触发器名称。',
                  'type' => 'string',
                  'example' => 'test',
                ),
                'cluster_id' => 
                array (
                  'title' => '集群ID',
                  'description' => '集群ID。',
                  'type' => 'string',
                  'example' => 'c259f563386444ebb8d7****',
                ),
                'project_id' => 
                array (
                  'title' => '触发器项目名称',
                  'description' => '触发器项目名称。

由应用所在命名空间及应用名称组成，格式为`${namespace}/${name}`，取值示例：default/test-app。',
                  'type' => 'string',
                  'example' => 'default/test-app',
                ),
                'type' => 
                array (
                  'title' => '触发器类型。',
                  'description' => '触发器类型。

取值：

- `deployment`：针对无状态应用的触发器。 

- `application`：针对应用中心应用的触发器。

默认值：`deployment`。',
                  'type' => 'string',
                  'example' => 'deployment',
                ),
                'action' => 
                array (
                  'title' => '触发器行为',
                  'description' => '触发器行为，取值：

`redeploy`: 重新部署project_id中定义的资源。',
                  'type' => 'string',
                  'example' => 'redeploy',
                ),
                'token' => 
                array (
                  'title' => 'Token',
                  'description' => 'Token信息。',
                  'type' => 'string',
                  'example' => 'eyJhbGci***',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"[\\n  {\\n    \\"id\\": \\"1234\\",\\n    \\"name\\": \\"test\\",\\n    \\"cluster_id\\": \\"c259f563386444ebb8d7****\\",\\n    \\"project_id\\": \\"default/test-app\\",\\n    \\"type\\": \\"deployment\\",\\n    \\"action\\": \\"redeploy\\",\\n    \\"token\\": \\"eyJhbGci***\\"\\n  }\\n]","errorExample":""},{"type":"xml","example":"<DescribeTriggerResponse>\\n    <id>1234</id>\\n    <name>test</name>\\n    <cluster_id>c259f563386444ebb8d7****</cluster_id>\\n    <project_id>default/test-app</project_id>\\n    <type>deployment</type>\\n    <action>redeploy</action>\\n    <token>eyJhbGci***</token>\\n</DescribeTriggerResponse>","errorExample":""}]',
      'title' => '查询触发器',
    ),
    'ListTagResources' => 
    array (
      'summary' => '您可以为集群添加标签键值对，让集群开发或运维人员能够更灵活地对集群进行分类管理，更好的支持监控、成本分析、租户隔离等需求。您可以调用ListTagResources接口，获取资源标签的列表并查询标签的详细信息，例如键值对、绑定的集群等。',
      'path' => '/tags',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'resource_ids',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '集群ID列表。',
            'description' => '要查询的集群ID列表。

',
            'type' => 'array',
            'items' => 
            array (
              'description' => '集群ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'c71cf3d796c374bf48644482cb0c3****',
            ),
            'required' => true,
            'example' => '["xxxxx","xxxxxx"]',
          ),
        ),
        1 => 
        array (
          'name' => 'resource_type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源类型，只支持Cluster',
            'description' => '资源类型，目前支持：`CLUSTER`。',
            'type' => 'string',
            'required' => true,
            'example' => 'CLUSTER',
          ),
        ),
        2 => 
        array (
          'name' => 'region_id',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域ID',
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-beijing',
          ),
        ),
        3 => 
        array (
          'name' => 'tags',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '按标签查找。',
            'description' => '要查询的标签列表，限制最多包含20个子项。

',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签。',
              'required' => false,
              '$ref' => '#/components/schemas/tag',
            ),
            'required' => false,
            'example' => '[{\\"key\\":\\"env\\",\\"value\\",\\"dev\\"},{\\"key\\":\\"dev\\", \\"value\\":\\"IT\\"}]',
          ),
        ),
        4 => 
        array (
          'name' => 'next_token',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '下一次查询Token。',
            'description' => '下一个查询开始的令牌。',
            'type' => 'string',
            'required' => false,
            'example' => '***',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回数据体。',
            'description' => '返回数据体。',
            'type' => 'object',
            'properties' => 
            array (
              'next_token' => 
              array (
                'title' => '下一个查询开始Token，为空说明没有下一个',
                'description' => '下一个查询开始的令牌。

',
                'type' => 'string',
                'example' => 'c374bf4864448****',
              ),
              'request_id' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E368C761-F8F6-4A36-9B58-BD53D5CD0CEB',
              ),
              'tag_resources' => 
              array (
                'title' => '资源标签列表。',
                'description' => '标签资源集。',
                'type' => 'object',
                'properties' => 
                array (
                  'tag_resource' => 
                  array (
                    'title' => '资源标签。',
                    'description' => '标签资源。





',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '资源详情。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'tag_key' => 
                        array (
                          'title' => '标签key。',
                          'description' => '标签的名称。',
                          'type' => 'string',
                          'example' => 'ack.aliyun.com',
                        ),
                        'tag_value' => 
                        array (
                          'title' => '标签值。',
                          'description' => '标签值。',
                          'type' => 'string',
                          'example' => 'c71cf3d796c374bf48644482cb0c3****',
                        ),
                        'resource_id' => 
                        array (
                          'title' => '资源ID。',
                          'description' => '资源ID。',
                          'type' => 'string',
                          'example' => 'i-xxx',
                        ),
                        'resource_type' => 
                        array (
                          'title' => '资源类型。',
                          'description' => '资源类型。更多信息，请参见[标签](~~110425~~)。',
                          'type' => 'string',
                          'example' => 'CLUSTER',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"next_token\\": \\"c374bf4864448****\\",\\n  \\"request_id\\": \\"E368C761-F8F6-4A36-9B58-BD53D5CD0CEB\\",\\n  \\"tag_resources\\": {\\n    \\"tag_resource\\": [\\n      {\\n        \\"tag_key\\": \\"ack.aliyun.com\\",\\n        \\"tag_value\\": \\"c71cf3d796c374bf48644482cb0c3****\\",\\n        \\"resource_id\\": \\"i-xxx\\",\\n        \\"resource_type\\": \\"CLUSTER\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<next_token>c374bf4864448****</next_token>\\n<request_id>E368C761-F8F6-4A36-9B58-BD53D5CD0CEB</request_id>\\n<tag_resources>\\n    <tag_resource>\\n        <tag_key>ack.aliyun.com</tag_key>\\n        <tag_value>c71cf3d796c374bf48644482cb0c3****</tag_value>\\n        <resource_id>i-xxx</resource_id>\\n        <resource_type>CLUSTER</resource_type>\\n    </tag_resource>\\n</tag_resources>","errorExample":""}]',
      'title' => '查询集群的标签列表',
    ),
    'TagResources' => 
    array (
      'summary' => '您可以为集群添加标签键值对，让集群开发或运维人员能够更灵活地对集群进行分类管理，更好的支持监控、成本分析、租户隔离等需求。您可以调用TagResources接口，为集群绑定标签。',
      'path' => '/tags',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求体参数',
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'resource_ids' => 
              array (
                'title' => '资源ID列表',
                'description' => '资源ID列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源ID。数组长度取值范围：\\[1,50\\]。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => '[c1a7bb282fc0d48b****]',
                ),
                'required' => true,
              ),
              'resource_type' => 
              array (
                'title' => '资源类型定义。取值范围：  只支持CLUSTER这一种资源类型',
                'description' => '资源类型定义。取值范围：只支持`CLUSTER`这一种资源类型。',
                'type' => 'string',
                'required' => true,
                'example' => 'CLUSTER',
              ),
              'region_id' => 
              array (
                'title' => '资源所属的地域ID',
                'description' => '资源所属的地域ID。',
                'type' => 'string',
                'required' => true,
                'example' => 'cn-hangzhou',
              ),
              'tags' => 
              array (
                'title' => '资源的标签键值对。数组长度范围：1~20。一旦传值，则不允许为空字符串。最多支持128个字符，不能以aliyun和acs:开头，不能包含http://或者https://。',
                'description' => '资源的标签键值对。数组长度范围：\\[1,20\\]。注意：

- 一旦传值，值不允许为空字符串，最多支持128个字符。
- 不能以`aliyun`和`acs:`开头。
- 不能包含`http://`或者`https://`。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源标签。',
                  'required' => false,
                  '$ref' => '#/components/schemas/tag',
                ),
                'required' => true,
              ),
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
            'title' => '响应体。',
            'description' => '响应体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '2D69A58F-345C-4FDE-88E4-BF51894XXXXX',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2D69A58F-345C-4FDE-88E4-BF51894XXXXX\\"\\n}","errorExample":""},{"type":"xml","example":"<TagResourcesResponse>\\n    <RequestId>2D69A58F-345C-4FDE-88E4-BF51894XXXXX</RequestId>\\n</TagResourcesResponse>","errorExample":""}]',
      'title' => '为集群绑定标签',
    ),
    'UntagResources' => 
    array (
      'summary' => '当您无需使用集群的标签键值对时，您可以调用UntagResources接口，删除资源标签。',
      'path' => '/tags',
      'methods' => 
      array (
        0 => 'delete',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'region_id',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源所属的地域ID',
            'description' => '资源所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'resource_ids',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '资源ID。数组长度取值范围为：1~50',
            'description' => '资源ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID。数组长度取值范围为：\\[1,50\\]。',
              'type' => 'string',
              'required' => false,
              'example' => 'c1a7bb282fc0d48b593***',
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'resource_type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源类型定义。取值范围： 只支持CLUSTER这一种资源类型',
            'description' => '资源类型定义。取值范围：只支持`CLUSTER`这一种资源类型。',
            'type' => 'string',
            'required' => true,
            'example' => 'CLUSTER',
          ),
        ),
        3 => 
        array (
          'name' => 'tag_keys',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '资源的标签键。N的取值范围：1~20',
            'description' => '资源标签键列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源的标签键。数值长度的取值范围：\\[1,20\\]。',
              'type' => 'string',
              'required' => false,
              'example' => 'TestKey1',
            ),
            'required' => true,
          ),
        ),
        4 => 
        array (
          'name' => 'all',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否删除全部自定义标签，仅当tag_keys为空时生效，取值：[true,false]。',
            'description' => '是否删除全部自定义标签，仅当`tag_keys`为空时生效。取值范围：

- `true`: 删除全部标签。
- `false`: 不删除全部标签。',
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
            'title' => '响应体。',
            'description' => '响应体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '2D69A58F-345C-4FDE-88E4-BF51894XXXXX',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2D69A58F-345C-4FDE-88E4-BF51894XXXXX\\"\\n}","errorExample":""},{"type":"xml","example":"<UntagResourcesResponse>\\n    <RequestId>2D69A58F-345C-4FDE-88E4-BF51894XXXXX</RequestId>\\n</UntagResourcesResponse>","errorExample":""}]',
      'title' => '删除集群标签',
    ),
    'ModifyClusterTags' => 
    array (
      'summary' => '您可以为集群添加标签键值对，让集群开发或运维人员能够更灵活地对集群进行分类管理，更好的支持监控、成本分析、租户隔离等需求。您可以调用ModifyClusterTags接口，修改集群标签。',
      'path' => '/clusters/{ClusterId}/tags',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '汲取ID',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c106f377e16f34eb1808d6b9362c9****',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'title' => '集群标签列表。',
            'description' => '修改数据。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签集。',
              'required' => false,
              '$ref' => '#/components/schemas/tag',
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '全量更新集群标签',
      'description' => '- 该API为全量更新，使用时请注意将完整的目标Tags设定为入参，避免丢失已有Tags。如需增量更新，请使用[TagResources接口为集群绑定标签](~~2667969~~)。',
    ),
    'StartAlert' => 
    array (
      'path' => '/alert/{ClusterId}/alert_rule/start',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '集群ID。您可以通过调用ListClusters获取集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'c245ff43c717f494489f42f5f1575e98d',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'flat',
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'alert_rule_group_name' => 
              array (
                'title' => '需要开启的报警规则集的名称。',
                'description' => '需要开启的报警规则集的名称。',
                'type' => 'string',
                'required' => false,
              ),
              'alert_rule_name' => 
              array (
                'title' => '需要开启的报警规则集中具体报警规则的名称，不填写默认开启整个报警规则集。',
                'description' => '需要开启的报警规则集中具体报警规则的名称，不填写默认开启整个报警规则集。',
                'type' => 'string',
                'required' => false,
              ),
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
              'status' => 
              array (
                'description' => '状态。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'msg' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"status\\": true,\\n  \\"msg\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '启动报警规则',
    ),
    'UpdateContactGroupForAlert' => 
    array (
      'path' => '/alert/{ClusterId}/alert_rule/contact_groups',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '集群ID，可以调用ListCluster接口获取。',
            'type' => 'string',
            'required' => false,
            'example' => 'ce7d08276f8a6422282c46272a84bxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '更新报警项联系人分组',
    ),
    'StopAlert' => 
    array (
      'path' => '/alert/{ClusterId}/alert_rule/stop',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '集群ID。

您可以通过调用[ListClusters](~~87116~~)获取集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'c7f9c85baee73452883b3299a0107****',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'alert_rule_group_name' => 
              array (
                'title' => '需要关闭的报警规则集的名称。',
                'description' => '需要关闭的报警规则集的名称。',
                'type' => 'string',
                'required' => false,
              ),
              'alert_rule_name' => 
              array (
                'title' => '需要关闭的报警规则集中具体报警规则的名称，不填写默认关闭整个报警规则集。',
                'description' => '需要关闭的报警规则集中具体报警规则的名称，不填写默认关闭整个报警规则集。',
                'type' => 'string',
                'required' => false,
              ),
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
              'status' => 
              array (
                'description' => '执行结果状态。
- True：执行成功。
- False：执行失败。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'msg' => 
              array (
                'description' => '执行失败时返回信息提示。',
                'type' => 'string',
                'example' => 'Success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"status\\": true,\\n  \\"msg\\": \\"Success\\"\\n}","type":"json"}]',
      'title' => '停止报警规则',
      'summary' => '停止ACK报警中心中报警规则，停止整个报警规则集分组、单个报警规则。',
    ),
    'DeleteAlertContact' => 
    array (
      'path' => '/alert/contacts',
      'methods' => 
      array (
        0 => 'delete',
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'contact_ids',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'integer',
              'format' => 'int64',
              'required' => false,
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
              'body' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'status' => 
                    array (
                      'type' => 'boolean',
                    ),
                    'msg' => 
                    array (
                      'type' => 'string',
                    ),
                    'contact_id' => 
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"0\\": {\\n    \\"status\\": true,\\n    \\"msg\\": \\"\\",\\n    \\"contact_id\\": \\"\\"\\n  },\\n  \\"body\\": []\\n}","type":"json"}]',
      'title' => '删除报警联系人',
    ),
    'DeleteAlertContactGroup' => 
    array (
      'path' => '/alert/contact_groups',
      'methods' => 
      array (
        0 => 'delete',
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'contact_group_ids',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'integer',
              'format' => 'int64',
              'required' => false,
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
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'status' => 
                array (
                  'type' => 'boolean',
                ),
                'msg' => 
                array (
                  'type' => 'string',
                ),
                'contact_group_id' => 
                array (
                  'type' => 'string',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"[\\n  {\\n    \\"status\\": true,\\n    \\"msg\\": \\"\\",\\n    \\"contact_group_id\\": \\"\\"\\n  }\\n]","type":"json"}]',
      'title' => '删除报警联系人分组',
    ),
    'UpdateControlPlaneLog' => 
    array (
      'summary' => 'ACK托管集群支持收集控制面组件日志并投递到您的SLS Log Project中。控制面组件包括Kube API Server、Kube Scheduler、Kube Controller Manager、Cloud Controller Manager等核心组件。您可以调用UpdateControlPlaneLog接口，修改控制面组件日志配置，例如日志保存时间、采集的组件等。',
      'path' => '/clusters/{ClusterId}/controlplanelog',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'c5b5e80b0b64a4bf6939d2d8fbbc5****',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求Body参数。',
            'type' => 'object',
            'properties' => 
            array (
              'log_project' => 
              array (
                'description' => '控制平面组件日志对应存储的SLS Project名称。

默认值：k8s-log-$集群ID。',
                'type' => 'string',
                'required' => false,
                'example' => 'k8s-log-c5b5e80b0b64a4bf6939d2d8fbbc5****',
              ),
              'log_ttl' => 
              array (
                'description' => '日志在SLS logstore里的数据保存时间。取值范围：1~3000，单位：天。

默认值：30天。',
                'type' => 'string',
                'required' => false,
                'example' => '30',
              ),
              'aliuid' => 
              array (
                'description' => '阿里云账号ID。',
                'type' => 'string',
                'required' => false,
                'example' => '162981*****',
              ),
              'components' => 
              array (
                'description' => '当前开启控制平面日志的组件列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '当前开启控制平面日志的组件列表。支持的组件列表：
- `apiserver`
- `ccm`
- `scheduler`
- `kcm`
- `controlplane-events`
-  ` vk`：仅适用于ASK集群。
- `istio`：仅适用于服务网格集群。
- `cluster-operator`：仅适用于ACK One分布式云容器平台。
- `application-controller`：仅适用于ACK One分布式云容器平台。
默认采集`apiserver`、 `ccm`、`scheduler`、`kcm`、`controlplane-events`组件的日志。
',
                  'type' => 'string',
                  'required' => false,
                  'example' => '["apiserver", "ccm", "scheduler",  "kcm", "controlplane-events"]',
                ),
                'required' => false,
              ),
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
            'title' => '返回体数据。',
            'description' => '返回体数据。',
            'type' => 'object',
            'properties' => 
            array (
              'cluster_id' => 
              array (
                'title' => '集群ID。',
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'cb95aa626a47740afbf6aa099b650****',
              ),
              'request_id' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '687C5BAA-D103-4993-884B-C35E4314****',
              ),
              'task_id' => 
              array (
                'title' => '任务ID。',
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'T-5a54309c80282e39ea00****',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"cluster_id\\": \\"cb95aa626a47740afbf6aa099b650****\\",\\n  \\"request_id\\": \\"687C5BAA-D103-4993-884B-C35E4314****\\",\\n  \\"task_id\\": \\"T-5a54309c80282e39ea00****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '修改ACK托管集群控制面组件日志配置',
    ),
    'CheckControlPlaneLogEnable' => 
    array (
      'path' => '/clusters/{ClusterId}/controlplanelog',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'c5b5e80b0b64a4bf6939d2d8fbbc5****',
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
              'log_project' => 
              array (
                'description' => '控制平面组件日志对应存储的SLS Project名称。

默认值：k8s-log-$集群ID。',
                'type' => 'string',
                'required' => false,
                'example' => 'k8s-log-c5b5e80b0b64a4bf6939d2d8fbbc5****',
              ),
              'log_ttl' => 
              array (
                'description' => '日志在SLS logstore里的数据保存时间。取值范围：1~3000，单位：天。

默认值：30天。',
                'type' => 'string',
                'example' => '30',
              ),
              'aliuid' => 
              array (
                'description' => '阿里云账号ID。',
                'type' => 'string',
                'example' => '162981*****',
              ),
              'components' => 
              array (
                'description' => '当前开启控制平面日志的组件列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '当前开启控制平面日志的组件列表。

默认采集`apiserver`、`ccm`、`scheduler`、`kcm`、`controlplane-events`组件的日志。',
                  'type' => 'string',
                  'example' => '["apiserver", "ccm", "scheduler",  "kcm", "controlplane-events"]',
                ),
                'required' => true,
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"log_project\\": \\"k8s-log-c5b5e80b0b64a4bf6939d2d8fbbc5****\\",\\n  \\"log_ttl\\": \\"30\\",\\n  \\"aliuid\\": \\"162981*****\\",\\n  \\"components\\": [\\n    \\"[\\\\\\"apiserver\\\\\\", \\\\\\"ccm\\\\\\", \\\\\\"scheduler\\\\\\",  \\\\\\"kcm\\\\\\", \\\\\\"controlplane-events\\\\\\"]\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<CheckControlPlaneLogEnableResponse>\\n    <log_project>k8s-log-c5b5e80b0b64a4bf6939d2d8fbbc5****</log_project>\\n    <log_ttl>30</log_ttl>\\n    <aliuid>162981*****</aliuid>\\n    <components>[\\"apiserver\\", \\"ccm\\", \\"scheduler\\",  \\"kcm\\", \\"controlplane-events\\"]</components>\\n</CheckControlPlaneLogEnableResponse>","errorExample":""}]',
      'title' => '查询ACK托管集群控制面组件日志配置',
      'summary' => 'ACK托管集群支持收集控制面组件日志并投递到您的SLS Log Project中。控制面组件包括Kube API Server、Kube Scheduler、Kube Controller Manager、Cloud Controller Manager等核心组件。您可以调用CheckControlPlaneLogEnable接口，查询控制面组件当前的日志配置，包括日志保存时间、采集的组件等。',
    ),
    'DescribeEvents' => 
    array (
      'summary' => '集群操作事件包括集群创建、集群变更、节点池创建、节点池扩容、Addon安装、集群升级等。您可以调用DescribeEvents接口，查询某类事件的详细信息，包括事件级别、时间状态、时间发生时间等。',
      'path' => '/events',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'cluster_id',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '集群ID',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cf62854ac2130470897be7a27ed1f****',
          ),
        ),
        1 => 
        array (
          'name' => 'type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '事件类型',
            'description' => '事件类型。取值：
- `cluster_create`：创建集群。
- `cluster_scaleout`：扩容集群。
- `cluster_attach`：添加已有节点。
- `cluster_delete`：删除集群。
- `cluster_upgrade`：升级集群。
- `cluster_migrate`：迁移集群。
- `cluster_node_delete`：移除节点。
- `cluster_node_drain`：清空节点。
- `cluster_modify`：修改集群。
- `cluster_configuration_modify`：修改集群管控配置。
- `cluster_addon_install`：安装组件。
- `cluster_addon_upgrade`：升级组件。
- `cluster_addon_uninstall`：卸载组件。
- `runtime_upgrade`：升级运行时。
- `nodepool_upgrade`：升级节点池。
- `nodepool_update`：更新节点池。',
            'type' => 'string',
            'required' => false,
            'example' => 'nodepool_upgrade',
          ),
        ),
        2 => 
        array (
          'name' => 'page_size',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页数',
            'description' => '每页显示数量。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '50',
          ),
        ),
        3 => 
        array (
          'name' => 'page_number',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '没页记录数量',
            'description' => '分页查询页数。',
            'type' => 'integer',
            'format' => 'int64',
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
            'title' => '返回体参数',
            'description' => '返回体参数',
            'type' => 'object',
            'properties' => 
            array (
              'events' => 
              array (
                'description' => '事件详情。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '事件详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'event_id' => 
                    array (
                      'title' => '事件ID',
                      'description' => '事件ID。',
                      'type' => 'string',
                      'example' => 'A234-1234-1234',
                    ),
                    'type' => 
                    array (
                      'title' => '事件类型',
                      'description' => '事件类型。取值：
- `cluster_create`：创建集群。
- `cluster_scaleout`：扩容集群。
- `cluster_attach`：添加已有节点。
- `cluster_delete`：删除集群。
- `cluster_upgrade`：升级集群。
- `cluster_migrate`：迁移集群。
- `cluster_node_delete`：移除节点。
- `cluster_node_drain`：清空节点。
- `cluster_modify`：修改集群。
- `cluster_configuration_modify`：修改集群管控配置。
- `cluster_addon_install`：安装组件。
- `cluster_addon_upgrade`：升级组件。
- `cluster_addon_uninstall`：卸载组件。
- `runtime_upgrade`：升级运行时。
- `nodepool_upgrade`：升级节点池。
- `nodepool_update`：更新节点池。',
                      'type' => 'string',
                      'example' => 'nodepool_upgrade',
                    ),
                    'source' => 
                    array (
                      'title' => '事件源',
                      'description' => '事件来源。',
                      'type' => 'string',
                      'example' => '/clusters/cf62854ac2130470897be7a27ed1f****/nodepools',
                    ),
                    'subject' => 
                    array (
                      'title' => '事件',
                      'description' => '事件主体。',
                      'type' => 'string',
                      'example' => 'nodePool-id',
                    ),
                    'time' => 
                    array (
                      'title' => '事件开始事件',
                      'description' => '事件开始时间。',
                      'type' => 'string',
                      'example' => '2022-11-23T20:48:01+08:00',
                    ),
                    'cluster_id' => 
                    array (
                      'title' => '集群ID',
                      'description' => '集群ID。',
                      'type' => 'string',
                      'example' => 'cluster-id',
                    ),
                    'data' => 
                    array (
                      'title' => '事件描述',
                      'description' => '事件描述。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'level' => 
                        array (
                          'title' => '事件级别',
                          'description' => '事件等级。',
                          'type' => 'string',
                          'example' => 'info',
                        ),
                        'reason' => 
                        array (
                          'title' => '事件状态',
                          'description' => '事件状态。',
                          'type' => 'string',
                          'example' => 'Started',
                        ),
                        'message' => 
                        array (
                          'title' => '事件详情',
                          'description' => '事件详情。',
                          'type' => 'string',
                          'example' => 'Start to upgrade NodePool nodePool/nodePool-A',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'page_info' => 
              array (
                'description' => '分页信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'page_size' => 
                  array (
                    'title' => '页数',
                    'description' => '每页显示数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '50',
                  ),
                  'page_number' => 
                  array (
                    'title' => '每页记录数量',
                    'description' => '分页查询页数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'total_count' => 
                  array (
                    'title' => '结果总数',
                    'description' => '结果总数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '3',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"events\\": [\\n    {\\n      \\"event_id\\": \\"A234-1234-1234\\",\\n      \\"type\\": \\"nodepool_upgrade\\",\\n      \\"source\\": \\"/clusters/cf62854ac2130470897be7a27ed1f****/nodepools\\",\\n      \\"subject\\": \\"nodePool-id\\",\\n      \\"time\\": \\"2022-11-23T20:48:01+08:00\\",\\n      \\"cluster_id\\": \\"cluster-id\\",\\n      \\"data\\": {\\n        \\"level\\": \\"info\\",\\n        \\"reason\\": \\"Started\\",\\n        \\"message\\": \\"Start to upgrade NodePool nodePool/nodePool-A\\"\\n      }\\n    }\\n  ],\\n  \\"page_info\\": {\\n    \\"page_size\\": 50,\\n    \\"page_number\\": 1,\\n    \\"total_count\\": 3\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeEventsResponse>\\n    <events>\\n        <event_id>A234-1234-1234</event_id>\\n        <type>nodepool_upgrade</type>\\n        <source>/clusters/cf62854ac2130470897be7a27ed1f****/nodepools</source>\\n        <subject>nodePool-id</subject>\\n        <time>2022-11-23T20:48:01+08:00</time>\\n        <cluster_id>cluster-id</cluster_id>\\n        <data>\\n            <level>info</level>\\n            <reason>Started</reason>\\n            <message>Start to upgrade NodePool nodePool/nodePool-A</message>\\n        </data>\\n    </events>\\n    <page_info>\\n        <page_size>50</page_size>\\n        <page_number>1</page_number>\\n        <total_count>3</total_count>\\n    </page_info>\\n</DescribeEventsResponse>","errorExample":""}]',
      'title' => '查询事件详情',
    ),
    'DescribeClusterEvents' => 
    array (
      'summary' => '集群操作事件包括集群创建、集群变更、节点池创建、节点池扩容、Addon安装、集群升级等。您可以调用DescribeClusterEvents接口，获取指定集群中发生的事件列表，并查询事件的详细信息，包括事件级别、时间状态、时间发生时间等。',
      'path' => '/clusters/{ClusterId}/events',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c82e6987e2961451182edacd74faf****',
          ),
        ),
        1 => 
        array (
          'name' => 'page_size',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '每页大小。',
            'description' => '每页大小，取值范围1-50。
默认值：50。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '50',
          ),
        ),
        2 => 
        array (
          'name' => 'page_number',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页页数。',
            'description' => '分页页数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'task_id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的任务ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'T-xascadasd*****',
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
            'title' => '返回体参数。',
            'description' => '返回体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'events' => 
              array (
                'title' => '事件列表。',
                'description' => '事件列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'event_id' => 
                    array (
                      'title' => '事件ID。',
                      'description' => '事件ID。',
                      'type' => 'string',
                      'example' => 'e-9ad04f72-8ee7-46bf-a02c-e4a06b39****',
                    ),
                    'type' => 
                    array (
                      'title' => '事件类型。',
                      'description' => '事件类型。',
                      'type' => 'string',
                      'example' => 'nodepool_update',
                    ),
                    'source' => 
                    array (
                      'title' => '事件源。',
                      'description' => '事件源。',
                      'type' => 'string',
                      'example' => 'cluster',
                    ),
                    'subject' => 
                    array (
                      'title' => '事件子项。',
                      'description' => '事件关联的操作对象。',
                      'type' => 'string',
                      'example' => 'npdd89dc2b76c04f14b06774883b******',
                    ),
                    'time' => 
                    array (
                      'title' => '事件开始时间。',
                      'description' => '事件开始时间。',
                      'type' => 'string',
                      'example' => '2020-12-01T17:31:00Z',
                    ),
                    'cluster_id' => 
                    array (
                      'title' => '集群ID。',
                      'description' => '集群ID。',
                      'type' => 'string',
                      'example' => 'c82e6987e2961451182edacd74faf****',
                    ),
                    'data' => 
                    array (
                      'title' => '事件描述。',
                      'description' => '事件描述。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'level' => 
                        array (
                          'title' => '事件级别。',
                          'description' => '事件级别。',
                          'type' => 'string',
                          'enumValueTitles' => 
                          array (
                            'warning' => 'warning',
                            'error' => 'error',
                            'info' => 'info',
                          ),
                          'example' => 'info',
                        ),
                        'reason' => 
                        array (
                          'title' => '事件状态。',
                          'description' => '事件状态。',
                          'type' => 'string',
                          'example' => 'Started',
                        ),
                        'message' => 
                        array (
                          'title' => '事件详情。',
                          'description' => '事件详情。',
                          'type' => 'string',
                          'example' => 'Start to upgrade NodePool nodePool/npdd89dc2b76c04f14b06774883b******',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'page_info' => 
              array (
                'title' => '分页信息。',
                'description' => '分页信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'page_size' => 
                  array (
                    'title' => '每页大小。',
                    'description' => '每页大小，取值范围1-50。
默认值：50。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '50',
                  ),
                  'page_number' => 
                  array (
                    'title' => '分页页数。',
                    'description' => '分页页数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'total_count' => 
                  array (
                    'title' => '结果总数。',
                    'description' => '结果总数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '3',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"events\\": [\\n    {\\n      \\"event_id\\": \\"e-9ad04f72-8ee7-46bf-a02c-e4a06b39****\\",\\n      \\"type\\": \\"nodepool_update\\",\\n      \\"source\\": \\"cluster\\",\\n      \\"subject\\": \\"npdd89dc2b76c04f14b06774883b******\\",\\n      \\"time\\": \\"2020-12-01T17:31:00Z\\",\\n      \\"cluster_id\\": \\"c82e6987e2961451182edacd74faf****\\",\\n      \\"data\\": {\\n        \\"level\\": \\"info\\",\\n        \\"reason\\": \\"Started\\",\\n        \\"message\\": \\"Start to upgrade NodePool nodePool/npdd89dc2b76c04f14b06774883b******\\"\\n      }\\n    }\\n  ],\\n  \\"page_info\\": {\\n    \\"page_size\\": 50,\\n    \\"page_number\\": 1,\\n    \\"total_count\\": 3\\n  }\\n}","type":"json"}]',
      'title' => '查询指定集群的事件',
    ),
    'DescribeTaskInfo' => 
    array (
      'summary' => '您可以调用DescribeTaskInfo接口，查询集群任务的详细信息，例如任务类型、运行状态、运行阶段等。',
      'path' => '/tasks/{task_id}',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'task_id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '任务ID。',
            'description' => '任务ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'T-5faa48fb31b6b8078d00****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回体参数。',
            'description' => '返回体数据。',
            'type' => 'object',
            'properties' => 
            array (
              'task_id' => 
              array (
                'title' => '任务ID。',
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'T-5faa48fb31b6b8078d000006',
              ),
              'cluster_id' => 
              array (
                'title' => '集群ID。',
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'c78592bfe92244365b3c3ad47f1de****',
              ),
              'task_type' => 
              array (
                'title' => '当前任务类型。',
                'description' => '任务类型，扩容任务的类型为`cluster_scaleout`。',
                'type' => 'string',
                'example' => 'cluster_scaleout',
              ),
              'state' => 
              array (
                'title' => '任务当前状态。',
                'description' => '代表任务的运行状态。取值：
- `running`：任务正在运行中。
- `fail`：任务运行失败。
- `success`：任务运行完成。
',
                'type' => 'string',
                'example' => 'running',
              ),
              'created' => 
              array (
                'title' => '任务创建时间。',
                'description' => '任务创建时间。',
                'type' => 'string',
                'example' => '2020-11-10T16:02:04+08:00',
              ),
              'updated' => 
              array (
                'title' => '任务更新时间。',
                'description' => '任务更新时间。',
                'type' => 'string',
                'example' => '2020-11-10T16:03:06+08:00',
              ),
              'target' => 
              array (
                'title' => '任务执行对象。',
                'description' => '任务执行对象。',
                'type' => 'object',
                'properties' => 
                array (
                  'id' => 
                  array (
                    'title' => '任务执行对象ID。',
                    'description' => '任务执行对象ID。',
                    'type' => 'string',
                    'example' => 'c78592bfe92244365b3c3ad47f1de****
',
                  ),
                  'type' => 
                  array (
                    'title' => '任务执行对象类型。',
                    'description' => '任务执行对象类型。',
                    'type' => 'string',
                    'example' => 'cluster',
                  ),
                ),
              ),
              'parameters' => 
              array (
                'title' => '任务参数。',
                'description' => '任务参数。',
                'type' => 'object',
              ),
              'stages' => 
              array (
                'title' => '任务阶段。',
                'description' => '任务阶段。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '任务阶段。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'state' => 
                    array (
                      'title' => '任务阶段状态。',
                      'description' => '任务阶段状态。',
                      'type' => 'string',
                      'example' => 'running',
                    ),
                    'start_time' => 
                    array (
                      'title' => '任务阶段开始时间。',
                      'description' => '任务阶段开始时间。',
                      'type' => 'string',
                      'example' => '2022-12-15 23:00:00',
                    ),
                    'end_time' => 
                    array (
                      'title' => '任务阶段结束时间。',
                      'description' => '任务阶段结束时间。',
                      'type' => 'string',
                      'example' => '2022-12-15 23:00:00',
                    ),
                    'message' => 
                    array (
                      'title' => '任务阶段信息。',
                      'description' => '任务阶段信息。',
                      'type' => 'string',
                      'example' => 'success to xxxxx',
                    ),
                    'outputs' => 
                    array (
                      'title' => '任务阶段输出。',
                      'description' => '任务阶段输出。',
                      'type' => 'object',
                    ),
                  ),
                ),
              ),
              'current_stage' => 
              array (
                'title' => '任务当前运行阶段。',
                'description' => '任务当前运行阶段。',
                'type' => 'string',
                'example' => 'DrainNodes',
              ),
              'events' => 
              array (
                'title' => '任务产生的事件。',
                'description' => '任务产生的事件。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '事件详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'action' => 
                    array (
                      'title' => '事件动作。',
                      'description' => '事件动作。',
                      'type' => 'string',
                      'example' => 'start',
                    ),
                    'level' => 
                    array (
                      'title' => '事件等级。',
                      'description' => '事件等级。',
                      'type' => 'string',
                      'example' => 'Normal',
                    ),
                    'message' => 
                    array (
                      'title' => '事件消息。',
                      'description' => '事件消息。',
                      'type' => 'string',
                      'example' => 'start to xxx',
                    ),
                    'reason' => 
                    array (
                      'title' => '事件原因。',
                      'description' => '事件原因。',
                      'type' => 'string',
                      'example' => 'NodePoolUpgradeStart',
                    ),
                    'source' => 
                    array (
                      'title' => '事件来源。',
                      'description' => '事件来源。',
                      'type' => 'string',
                      'example' => 'ACK',
                    ),
                    'timestamp' => 
                    array (
                      'title' => '事件生成时间。',
                      'description' => '事件生成时间。',
                      'type' => 'string',
                      'example' => '1669706229286',
                    ),
                  ),
                ),
              ),
              'task_result' => 
              array (
                'title' => '任务执行详情。',
                'description' => '任务执行详情。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '任务详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'data' => 
                    array (
                      'title' => '操作的资源，例如：实例ID。',
                      'description' => '任务操作的资源，例如：扩容时操作资源是实例，那么此处就是实例ID。',
                      'type' => 'string',
                      'example' => 'i-xxx',
                    ),
                    'status' => 
                    array (
                      'title' => '资源的状态。',
                      'description' => '资源扩容的状态。取值：
- `success`：扩容成功。
- `failed`：扩容失败。
- `initial`：初始化中。',
                      'type' => 'string',
                      'example' => 'success',
                    ),
                  ),
                ),
              ),
              'error' => 
              array (
                'title' => '任务错误信息。',
                'description' => '任务错误信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'code' => 
                  array (
                    'title' => '错误码。',
                    'description' => '错误码。',
                    'type' => 'string',
                    'example' => '400',
                  ),
                  'message' => 
                  array (
                    'title' => '错误消息。',
                    'description' => '错误消息。',
                    'type' => 'string',
                    'example' => 'failed to xxx',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"task_id\\": \\"T-5faa48fb31b6b8078d000006\\",\\n  \\"cluster_id\\": \\"c78592bfe92244365b3c3ad47f1de****\\",\\n  \\"task_type\\": \\"cluster_scaleout\\",\\n  \\"state\\": \\"running\\",\\n  \\"created\\": \\"2020-11-10T16:02:04+08:00\\",\\n  \\"updated\\": \\"2020-11-10T16:03:06+08:00\\",\\n  \\"target\\": {\\n    \\"id\\": \\"c78592bfe92244365b3c3ad47f1de****\\\\n\\",\\n    \\"type\\": \\"cluster\\"\\n  },\\n  \\"parameters\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"stages\\": [\\n    {\\n      \\"state\\": \\"running\\",\\n      \\"start_time\\": \\"2022-12-15 23:00:00\\",\\n      \\"end_time\\": \\"2022-12-15 23:00:00\\",\\n      \\"message\\": \\"success to xxxxx\\",\\n      \\"outputs\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  ],\\n  \\"current_stage\\": \\"DrainNodes\\",\\n  \\"events\\": [\\n    {\\n      \\"action\\": \\"start\\",\\n      \\"level\\": \\"Normal\\",\\n      \\"message\\": \\"start to xxx\\",\\n      \\"reason\\": \\"NodePoolUpgradeStart\\",\\n      \\"source\\": \\"ACK\\",\\n      \\"timestamp\\": \\"1669706229286\\"\\n    }\\n  ],\\n  \\"task_result\\": [\\n    {\\n      \\"data\\": \\"i-xxx\\",\\n      \\"status\\": \\"success\\"\\n    }\\n  ],\\n  \\"error\\": {\\n    \\"code\\": \\"400\\",\\n    \\"message\\": \\"failed to xxx\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<cluster_id>c78592bfe92244365b3c3ad47f1de****</cluster_id>\\n<task_id>T-5faa48fb31b6b8078d000006</task_id>\\n<created>2020-11-10T16:02:04+08:00</created>\\n<updated>2020-11-10T16:03:06+08:00</updated>\\n<state>running</state>\\n<task_type>cluster_scaleout</task_type>\\n<task_result>\\n    <data>i-xxx</data>\\n    <status>success</status>\\n</task_result>","errorExample":""}]',
      'title' => '查询任务详情',
    ),
    'PauseTask' => 
    array (
      'summary' => '您可以调用PauseTask接口，暂停执行中的集群任务。',
      'path' => '/tasks/{task_id}/pause',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'task_id',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '任务ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'T-62a944794ee141074400****',
          ),
        ),
      ),
      'responses' => 
      array (
        202 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '暂停任务',
    ),
    'ResumeTask' => 
    array (
      'summary' => '您可以调用ResumeTask接口，恢复已暂停的集群任务。',
      'path' => '/tasks/{task_id}/resume',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'task_id',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '任务ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'T-62a944794ee141074400****',
          ),
        ),
      ),
      'responses' => 
      array (
        202 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '恢复任务',
    ),
    'CancelTask' => 
    array (
      'summary' => '您可以调用CancelTask接口，取消集群任务的执行。',
      'path' => '/tasks/{task_id}/cancel',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'task_id',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '任务ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'T-62ccd14aacb8db06ca00****',
          ),
        ),
      ),
      'responses' => 
      array (
        202 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '取消任务',
    ),
    'DescribeClusterTasks' => 
    array (
      'summary' => '您可以调用DescribeClusterTasks接口，查询集群下的任务列表。',
      'path' => '/clusters/{cluster_id}/tasks',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'cluster_id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群id。',
            'description' => '集群id。',
            'type' => 'string',
            'required' => false,
            'example' => 'c23421cfa74454bc8b37163fd19af****',
          ),
        ),
        1 => 
        array (
          'name' => 'page_size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页显示数量。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'page_number',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码。',
            'type' => 'integer',
            'format' => 'int32',
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
              'page_info' => 
              array (
                'title' => '分页信息。',
                'description' => '分页信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'page_size' => 
                  array (
                    'title' => '每页数量。',
                    'description' => '每页数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'page_number' => 
                  array (
                    'title' => '页数。',
                    'description' => '页数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'total_count' => 
                  array (
                    'title' => '结果总数。',
                    'description' => '结果总数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                ),
              ),
              'tasks' => 
              array (
                'title' => '任务数组。',
                'description' => '任务数组。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '任务详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'task_id' => 
                    array (
                      'title' => '任务ID。',
                      'description' => '任务ID。',
                      'type' => 'string',
                      'example' => 'install-addons-c3xxxxxx',
                    ),
                    'task_type' => 
                    array (
                      'title' => '任务类型。',
                      'description' => '任务类型。',
                      'type' => 'string',
                      'example' => 'cluster_addon_install',
                    ),
                    'state' => 
                    array (
                      'title' => '任务状态。',
                      'description' => '任务状态。',
                      'type' => 'string',
                      'example' => 'success',
                    ),
                    'created' => 
                    array (
                      'title' => '创建时间。',
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2022-08-03T10:11:33+08:00',
                    ),
                    'updated' => 
                    array (
                      'title' => '更新时间。',
                      'description' => '更新时间。',
                      'type' => 'string',
                      'example' => '2022-08-03T10:12:03.482+08:00',
                    ),
                    'error' => 
                    array (
                      'description' => '任务错误信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'message' => 
                        array (
                          'title' => '错误信息。',
                          'description' => '错误信息。',
                          'type' => 'string',
                          'example' => 'Addon status not match',
                        ),
                        'code' => 
                        array (
                          'title' => '错误码。',
                          'description' => '错误码。',
                          'type' => 'string',
                          'example' => 'BadRequest',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'requestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0527ac9a-c899-4341-a21a-xxxxxxxxx',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"page_info\\": {\\n    \\"page_size\\": 10,\\n    \\"page_number\\": 1,\\n    \\"total_count\\": 10\\n  },\\n  \\"tasks\\": [\\n    {\\n      \\"task_id\\": \\"install-addons-c3xxxxxx\\",\\n      \\"task_type\\": \\"cluster_addon_install\\",\\n      \\"state\\": \\"success\\",\\n      \\"created\\": \\"2022-08-03T10:11:33+08:00\\",\\n      \\"updated\\": \\"2022-08-03T10:12:03.482+08:00\\",\\n      \\"error\\": {\\n        \\"message\\": \\"Addon status not match\\",\\n        \\"code\\": \\"BadRequest\\"\\n      }\\n    }\\n  ],\\n  \\"requestId\\": \\"0527ac9a-c899-4341-a21a-xxxxxxxxx\\"\\n}","type":"json"}]',
      'title' => '查询集群任务列表',
    ),
    'StartWorkflow' => 
    array (
      'summary' => '调用StartWorkflow创建一个新的基因工作流。',
      'path' => '/gs/workflow',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '9508',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcskZ9EOG6',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求体参数',
            'description' => '请求体参数',
            'type' => 'object',
            'properties' => 
            array (
              'workflow_type' => 
              array (
                'title' => '工作流类型，可选值：wgs或mapping。',
                'description' => '工作流类型，可选值：wgs或mapping。',
                'type' => 'string',
                'required' => true,
                'example' => 'mapping',
              ),
              'service' => 
              array (
                'title' => 'SLA类型，可选值：s、g、p。 白银级（s）：超过90 Gbp的部分，按1.5 Gbp/min计算增加的时间。 黄金级（g）：超过90 Gbp的部分，按2 Gbp/min计算增加的时间。 铂金级（p）：超过90 Gbp的部分，按3 Gbp/min计算增加的时间。',
                'description' => 'SLA类型，可选值：s、g、p。 

- 白银级（s）：超过90 Gbp的部分，按1.5 Gbp/min计算增加的时间。 
- 黄金级（g）：超过90 Gbp的部分，按2 Gbp/min计算增加的时间。 
- 铂金级（p）：超过90 Gbp的部分，按3 Gbp/min计算增加的时间。',
                'type' => 'string',
                'required' => false,
                'example' => 's',
              ),
              'mapping_oss_region' => 
              array (
                'title' => 'mapping oss数据的存放region。',
                'description' => 'mapping oss数据的存放region。',
                'type' => 'string',
                'required' => false,
                'example' => 'cn-hangzhou',
              ),
              'mapping_fastq_first_filename' => 
              array (
                'title' => 'mapping的第一个fastq文件名。',
                'description' => 'mapping的第一个fastq文件名。',
                'type' => 'string',
                'required' => false,
                'example' => 'MGISEQ2000_PCR-free_NA12878_1_V100003043_L01_1.fq.gz',
              ),
              'mapping_fastq_second_filename' => 
              array (
                'title' => 'mapping的第二个fastq文件名。',
                'description' => 'mapping的第二个fastq文件名。',
                'type' => 'string',
                'required' => false,
                'example' => 'MGISEQ2000_PCR-free_NA12878_1_V100003043_L01_2.fq.gz',
              ),
              'mapping_bucket_name' => 
              array (
                'title' => '存放mapping的bucket名称。',
                'description' => '存放mapping的bucket名称。',
                'type' => 'string',
                'required' => false,
                'example' => 'gene-shenzhen',
              ),
              'mapping_fastq_path' => 
              array (
                'title' => 'mapping的fastq文件路径。',
                'description' => 'mapping的fastq文件路径。',
                'type' => 'string',
                'required' => false,
                'example' => 'fastq/MGISEQ2000',
              ),
              'mapping_reference_path' => 
              array (
                'title' => 'mapping的reference文件位置。',
                'description' => 'mapping的reference文件位置。',
                'type' => 'string',
                'required' => false,
                'example' => 'reference/hg19',
              ),
              'mapping_is_mark_dup' => 
              array (
                'title' => '是否进行dup。',
                'description' => '是否进行dup。',
                'type' => 'string',
                'required' => false,
                'example' => 'true',
              ),
              'mapping_bam_out_path' => 
              array (
                'title' => 'bam文件输出路径。',
                'description' => 'bam文件输出路径。',
                'type' => 'string',
                'required' => false,
                'example' => 'output/bamDirName',
              ),
              'mapping_bam_out_filename' => 
              array (
                'title' => 'bam文件输出名称。',
                'description' => 'bam文件输出名称。',
                'type' => 'string',
                'required' => false,
                'example' => 'abc.bam',
              ),
              'wgs_oss_region' => 
              array (
                'title' => 'wgs oss数据的存放region。',
                'description' => 'wgs oss数据的存放region。',
                'type' => 'string',
                'required' => false,
                'example' => 'cn-shenzhen',
              ),
              'wgs_fastq_first_filename' => 
              array (
                'title' => 'wgs的第一个fastq文件名。',
                'description' => 'wgs的第一个fastq文件名。',
                'type' => 'string',
                'required' => false,
                'example' => 'MGISEQ2000_PCR-free_NA12878_1_V100003043_L01_1.fq.gz',
              ),
              'wgs_fastq_second_filename' => 
              array (
                'title' => 'wgs的第二个fastq文件名。',
                'description' => 'wgs的第二个fastq文件名。',
                'type' => 'string',
                'required' => false,
                'example' => 'MGISEQ2000_PCR-free_NA12878_1_V100003043_L01_2.fq.gz',
              ),
              'wgs_bucket_name' => 
              array (
                'title' => '存放wgs的bucket名称。',
                'description' => '存放wgs的bucket名称。',
                'type' => 'string',
                'required' => false,
                'example' => 'gene-shenzhen',
              ),
              'wgs_fastq_path' => 
              array (
                'title' => 'wgs的fastq文件路径。',
                'description' => 'wgs的fastq文件路径。',
                'type' => 'string',
                'required' => false,
                'example' => 'fastq/MGISEQ2000',
              ),
              'wgs_reference_path' => 
              array (
                'title' => 'wgs的reference文件路径。',
                'description' => 'wgs的reference文件路径。',
                'type' => 'string',
                'required' => false,
                'example' => 'reference/hg19',
              ),
              'wgs_vcf_out_path' => 
              array (
                'title' => 'wgs的vcf输出路径。',
                'description' => 'wgs的vcf输出路径。',
                'type' => 'string',
                'required' => false,
                'example' => 'output/vcf',
              ),
              'wgs_vcf_out_filename' => 
              array (
                'title' => 'wgs的vcf输出文件名称。',
                'description' => 'wgs的vcf输出文件名称。',
                'type' => 'string',
                'required' => false,
                'example' => 'abc.vcf',
              ),
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
            'title' => '返回体参数',
            'description' => '返回体参数',
            'type' => 'object',
            'properties' => 
            array (
              'JobName' => 
              array (
                'title' => '工作流名称',
                'description' => '工作流名称',
                'type' => 'string',
                'example' => 'mapping-gpu-66xv7',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'noSubstitutionReason' => '无替代API，历史原因导致该API被标记为弃用。',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobName\\": \\"mapping-gpu-66xv7\\"\\n}","errorExample":""},{"type":"xml","example":"<JobName>mapping-gpu-66xv7</JobName>","errorExample":""}]',
      'title' => '创建一个新的基因工作流',
    ),
    'RemoveWorkflow' => 
    array (
      'summary' => '调用RemoveWorkflow删除某个指定工作流。',
      'path' => '/gs/workflow/{workflowName}',
      'methods' => 
      array (
        0 => 'delete',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '9507',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcskZ9EOG6',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'workflowName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '工作流名称。',
            'description' => '工作流名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'mapping-gpu-98wt4',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'noSubstitutionReason' => '无替代API，历史原因导致该API被标记为弃用。',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除某个指定工作流',
    ),
    'CancelWorkflow' => 
    array (
      'summary' => '调用CancelWorkflow取消正在运行中的工作流。',
      'path' => '/gs/workflow/{workflowName}',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '9509',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcskZ9EOG6',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'workflowName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '工作流名称。',
            'description' => '工作流名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'mapping-gpu-mhhgh',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求体参数。',
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'action' => 
              array (
                'title' => '执行的操作，目前只支持cancel。',
                'description' => '执行的操作，目前只支持cancel。',
                'type' => 'string',
                'required' => true,
                'example' => 'cancel',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'noSubstitutionReason' => '无替代API，历史原因导致该API被标记为弃用。',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '取消正在运行中的工作流',
    ),
    'DescirbeWorkflow' => 
    array (
      'summary' => '调用DescribeWorkflow查询单个工作流的详细信息。',
      'path' => '/gs/workflow/{workflowName}',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '9505',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcskZ9EOG6',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'workflowName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '工作流名称',
            'description' => '工作流名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'mapping-gpu-mhhgh',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回体参数。',
            'description' => '返回体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'create_time' => 
              array (
                'title' => '工作流创建时间。',
                'description' => '工作流创建时间。',
                'type' => 'string',
                'example' => '2020-01-15 16:30:25 +0800 CST',
              ),
              'duration' => 
              array (
                'title' => '工作流经过时长。',
                'description' => '工作流经过时长。',
                'type' => 'string',
                'example' => '1h15m33.529968361s',
              ),
              'finish_time' => 
              array (
                'title' => '任务结束时间。',
                'description' => '任务结束时间。',
                'type' => 'string',
                'example' => '0001-01-01 00:00:00 +0000 UTC',
              ),
              'input_data_size' => 
              array (
                'title' => '输入数据大小。',
                'description' => '输入数据大小。',
                'type' => 'string',
                'example' => '0',
              ),
              'job_name' => 
              array (
                'title' => '工作流名称。',
                'description' => '工作流名称。',
                'type' => 'string',
                'example' => 'wgs-gpu-97xfn',
              ),
              'job_namespace' => 
              array (
                'title' => '工作流所在命名空间。',
                'description' => '工作流所在命名空间。',
                'type' => 'string',
                'example' => '1171330362041663',
              ),
              'output_data_size' => 
              array (
                'title' => '输出数据大小。',
                'description' => '输出数据大小。',
                'type' => 'string',
                'example' => '0',
              ),
              'status' => 
              array (
                'title' => '工作流当前状态。',
                'description' => '工作流当前状态。',
                'type' => 'string',
                'example' => 'Running',
              ),
              'total_bases' => 
              array (
                'title' => '碱基对个数。',
                'description' => '碱基对个数。',
                'type' => 'string',
                'example' => '0',
              ),
              'total_reads' => 
              array (
                'title' => 'Reads个数。',
                'description' => 'Reads个数。',
                'type' => 'string',
                'example' => '0',
              ),
              'user_input_data' => 
              array (
                'title' => '用户输入参数。',
                'description' => '用户输入参数。',
                'type' => 'string',
                'example' => '{\\"wgs_oss_region\\":\\"cn-shenzhen\\",\\"wgs_fastq_first_name\\":\\"fastq/huada/MGISEQ-200019SZ0002402\\",\\"wgs_fastq_second_name\\":\\"fastq/huada/MGISEQ-200019SZ0002402\\",\\"wgs_bucket_name\\":\\"gene-shenzhen\\",\\"wgs_vcf_file_name\\":\\"output/vcf/huada.vcf\\",\\"wgs_bam_file_name\\":\\"output/bam/huada.bam\\",\\"wgs_reference_file\\":\\"hg19\\",\\"wgs_service\\":\\"g\\"}',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'noSubstitutionReason' => '无替代API，历史原因导致该API被标记为弃用。',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"create_time\\": \\"2020-01-15 16:30:25 +0800 CST\\",\\n  \\"duration\\": \\"1h15m33.529968361s\\",\\n  \\"finish_time\\": \\"0001-01-01 00:00:00 +0000 UTC\\",\\n  \\"input_data_size\\": \\"0\\",\\n  \\"job_name\\": \\"wgs-gpu-97xfn\\",\\n  \\"job_namespace\\": \\"1171330362041663\\",\\n  \\"output_data_size\\": \\"0\\",\\n  \\"status\\": \\"Running\\",\\n  \\"total_bases\\": \\"0\\",\\n  \\"total_reads\\": \\"0\\",\\n  \\"user_input_data\\": \\"{\\\\\\\\\\\\\\"wgs_oss_region\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"cn-shenzhen\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"wgs_fastq_first_name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"fastq/huada/MGISEQ-200019SZ0002402\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"wgs_fastq_second_name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"fastq/huada/MGISEQ-200019SZ0002402\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"wgs_bucket_name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"gene-shenzhen\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"wgs_vcf_file_name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"output/vcf/huada.vcf\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"wgs_bam_file_name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"output/bam/huada.bam\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"wgs_reference_file\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"hg19\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"wgs_service\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"g\\\\\\\\\\\\\\"}\\"\\n}","errorExample":""},{"type":"xml","example":"<create_time>2020-01-15 16:30:25 +0800 CST</create_time>\\n<duration>1h15m33.529968361s</duration>\\n<finish_time>0001-01-01 00:00:00 +0000 UTC</finish_time>\\n<input_data_size>0</input_data_size>\\n<job_name>wgs-gpu-97xfn</job_name>\\n<job_namespace>1171330362041663</job_namespace>\\n<output_data_size>0</output_data_size>\\n<status>Running</status>\\n<total_bases>0</total_bases>\\n<total_reads>0</total_reads>\\n<user_input_data>{\\\\\\"wgs_oss_region\\\\\\":\\\\\\"cn-shenzhen\\\\\\",\\\\\\"wgs_fastq_first_name\\\\\\":\\\\\\"fastq/huada/MGISEQ-200019SZ0002402\\\\\\",\\\\\\"wgs_fastq_second_name\\\\\\":\\\\\\"fastq/huada/MGISEQ-200019SZ0002402\\\\\\",\\\\\\"wgs_bucket_name\\\\\\":\\\\\\"gene-shenzhen\\\\\\",\\\\\\"wgs_vcf_file_name\\\\\\":\\\\\\"output/vcf/huada.vcf\\\\\\",\\\\\\"wgs_bam_file_name\\\\\\":\\\\\\"output/bam/huada.bam\\\\\\",\\\\\\"wgs_reference_file\\\\\\":\\\\\\"hg19\\\\\\",\\\\\\"wgs_service\\\\\\":\\\\\\"g\\\\\\"}</user_input_data>","errorExample":""}]',
      'title' => '查询已创建的所有工作流',
    ),
    'DescribeWorkflows' => 
    array (
      'summary' => '调用DescribeWorkflows查询已创建的所有工作流。',
      'path' => '/gs/workflows',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '9506',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcskZ9EOG6',
        ),
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
            'title' => '返回体参数',
            'description' => '返回体参数',
            'type' => 'object',
            'properties' => 
            array (
              'jobs' => 
              array (
                'title' => 'job信息',
                'description' => 'Job列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'Job详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'cluster_id' => 
                    array (
                      'title' => '集群ID。',
                      'description' => '集群ID。',
                      'type' => 'string',
                      'example' => 'cb1a7214cfc0b41d9bb086affc2d8f51c',
                    ),
                    'job_name' => 
                    array (
                      'title' => '工作流名称。',
                      'description' => '工作流名称。',
                      'type' => 'string',
                      'example' => 'wgs-gpu-qb4dk',
                    ),
                    'create_time' => 
                    array (
                      'title' => '工作流创建时间。',
                      'description' => '工作流创建时间。',
                      'type' => 'string',
                      'example' => '2020-01-15T13:18:52Z',
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
        'noSubstitutionReason' => '无替代API，历史原因导致该API被标记为弃用。',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"jobs\\": [\\n    {\\n      \\"cluster_id\\": \\"cb1a7214cfc0b41d9bb086affc2d8f51c\\",\\n      \\"job_name\\": \\"wgs-gpu-qb4dk\\",\\n      \\"create_time\\": \\"2020-01-15T13:18:52Z\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<jobs>\\n    <cluster_id>cb1a7214cfc0b41d9bb086affc2d8f51c</cluster_id>\\n    <job_name>wgs-gpu-qb4dk</job_name>\\n    <create_time>2020-01-15T13:18:52Z</create_time>\\n</jobs>","errorExample":""}]',
      'title' => '查询工作流的详细信息',
    ),
    'DeletePolicyInstance' => 
    array (
      'summary' => '您可以调用DeletePolicyInstance接口，在指定集群中删除策略规则实例。',
      'path' => '/clusters/{cluster_id}/policies/{policy_name}',
      'methods' => 
      array (
        0 => 'delete',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'cluster_id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '目标集群id',
            'description' => '目标集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c8155823d057948c69a****',
          ),
        ),
        1 => 
        array (
          'name' => 'policy_name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '策略治理规则名称',
            'description' => '策略治理规则名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ACKAllowedRepos',
          ),
        ),
        2 => 
        array (
          'name' => 'instance_name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '策略规则实例id',
            'description' => '策略规则实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'allowed-repos-mqdsf',
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
              'instances' => 
              array (
                'title' => '策略实例列表',
                'description' => '策略实例列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '已删除的实例列表。',
                  'type' => 'string',
                  'example' => '[ "allowed-repos-kqxnc" ]',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"instances\\": [\\n    \\"[ \\\\\\"allowed-repos-kqxnc\\\\\\" ]\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DeletePolicyInstanceResponse>\\n    <instances>[ \\"allowed-repos-kqxnc\\" ]</instances>\\n</DeletePolicyInstanceResponse>","errorExample":""}]',
      'title' => '删除策略规则实例',
    ),
    'ModifyPolicyInstance' => 
    array (
      'summary' => '您可以调用ModifyPolicyInstance接口，在指定集群中更新策略规则实例，调整策略实例的治理动作（告警或拦截）、作用的命名空间范围等。',
      'path' => '/clusters/{cluster_id}/policies/{policy_name}',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'cluster_id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '目标集群id',
            'description' => '目标集群ID',
            'type' => 'string',
            'required' => true,
            'example' => 'c8155823d057948c69a****',
          ),
        ),
        1 => 
        array (
          'name' => 'policy_name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '策略治理规则名称',
            'description' => '策略治理规则名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ACKAllowedRepos',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求参数。',
            'type' => 'object',
            'properties' => 
            array (
              'action' => 
              array (
                'title' => '规则治理动作',
                'description' => '规则治理动作，取值：

- `deny`：拦截违规部署
- `warn`：告警',
                'type' => 'string',
                'required' => false,
                'example' => 'deny',
              ),
              'instance_name' => 
              array (
                'title' => '策略规则实例id',
                'description' => '策略规则实例ID',
                'type' => 'string',
                'required' => false,
                'example' => 'allowed-repos-cbhhb',
              ),
              'namespaces' => 
              array (
                'title' => '限制策略实施的命名空间，为空时表示所有命名空间',
                'description' => '限制策略实施的命名空间，为空时表示所有命名空间',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '策略实例实施范围：

默认""代表集群所有命名空间。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => '["test3","test4"]',
                ),
                'required' => false,
              ),
              'parameters' => 
              array (
                'title' => '当前规则实例的配置参数',
                'description' => '当前规则实例的配置参数。更多参数配置规则，请参见[容器安全策略规则库说明](~~359819~~)。

',
                'type' => 'object',
                'required' => false,
                'example' => '"restrictedNamespaces": [ "test" ]',
              ),
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
              'instances' => 
              array (
                'description' => '已更新的实例列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '已更新的实例列表',
                  'type' => 'string',
                  'example' => '[ "allowed-repos-kqxnc" ]',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"instances\\": [\\n    \\"[ \\\\\\"allowed-repos-kqxnc\\\\\\" ]\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ModifyPolicyInstanceResponse>\\n    <instances>[ \\"allowed-repos-kqxnc\\" ]</instances>\\n</ModifyPolicyInstanceResponse>","errorExample":""}]',
      'title' => '更新策略规则实例',
    ),
    'DescribePolicies' => 
    array (
      'summary' => 'ACK集群容器安全策略供了种类丰富的内置规则库，包括Compliance、Infra、K8s-general和PSP，旨在确保容器在生产环境中的安全运行。您可以调用DescribePolicies接口，查询策略治理规则库的列表。',
      'path' => '/policies',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
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
            'title' => '系统支持的所有策略模板。key为策略类型，value为该策略类型下的所有策略模板名称列表',
            'description' => '规则库列表，key为策略类型，value为该策略类型下的所有策略名称。
',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'title' => '某个策略类型下的所有策略模板名称列表',
              'description' => '某个策略类型下的所有策略模板名称列表',
              'type' => 'array',
              'items' => 
              array (
                'title' => '策略模板名称',
                'type' => 'string',
                'example' => 'ACKNoEnvVarSecrets',
                'description' => '<props="china">更多策略规则，请参见[容器安全策略规则库说明](https://help.aliyun.com/document_detail/359819.html)。
</props>

<props="intl">更多策略规则，请参见[容器安全策略规则库说明](https://www.alibabacloud.com/help/zh/container-service-for-kubernetes/latest/predefined-security-policies-of-ack)。
</props>
',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"key\\": [\\n    \\"ACKNoEnvVarSecrets\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribePoliciesResponse>\\n    <cis-k8s>ACKNoEnvVarSecrets</cis-k8s>\\n    <cis-k8s>ACKPodsRequireSecurityContext</cis-k8s>\\n    <cis-k8s>ACKRestrictNamespaces</cis-k8s>\\n    <cis-k8s>ACKRestrictRoleBindings</cis-k8s>\\n    <infra>ACKBlockProcessNamespaceSharing</infra>\\n    <infra>ACKEmptyDirHasSizeLimit</infra>\\n    <infra>ACKLocalStorageRequireSafeToEvict</infra>\\n    <infra>ACKOSSStorageLocationConstraint</infra>\\n    <k8s-general>ACKBlockAutoinjectServiceEnv</k8s-general>\\n    <k8s-general>ACKBlockAutomountToken</k8s-general>\\n    <k8s-general>ACKBlockLoadBalancer</k8s-general>\\n    <k8s-general>ACKBlockNodePort</k8s-general>\\n    <k8s-general>ACKContainerLimits</k8s-general>\\n    <k8s-general>ACKExternalIPs</k8s-general>\\n    <k8s-general>ACKImageDigests</k8s-general>\\n    <k8s-general>ACKRequiredLabels</k8s-general>\\n    <k8s-general>ACKRequiredProbes</k8s-general>\\n    <k8s-general>ACKAllowedRepos</k8s-general>\\n    <psp>ACKPSPAllowPrivilegeEscalationContainer</psp>\\n    <psp>ACKPSPAllowedUsers</psp>\\n    <psp>ACKPSPAppArmor</psp>\\n    <psp>ACKPSPCapabilities</psp>\\n    <psp>ACKPSPFSGroup</psp>\\n    <psp>ACKPSPFlexVolumes</psp>\\n    <psp>ACKPSPForbiddenSysctls</psp>\\n    <psp>ACKPSPHostFilesystem</psp>\\n    <psp>ACKPSPHostNamespace</psp>\\n    <psp>ACKPSPHostNetworkingPorts</psp>\\n    <psp>ACKPSPPrivilegedContainer</psp>\\n    <psp>ACKPSPProcMount</psp>\\n    <psp>ACKPSPReadOnlyRootFilesystem</psp>\\n    <psp>ACKPSPSELinuxV2</psp>\\n    <psp>ACKPSPSeccomp</psp>\\n    <psp>ACKPSPVolumeTypes</psp>\\n</DescribePoliciesResponse>","errorExample":""}]',
      'title' => '查询策略治理规则库列表',
    ),
    'DescribePolicyDetails' => 
    array (
      'summary' => 'ACK集群容器安全策略供了种类丰富的内置规则库，包括Compliance、Infra、K8s-general和PSP，旨在确保容器在生产环境中的安全运行。您可以调用DescribePolicyDetails接口，查询指定策略治理规则的详细信息，例如规则模板描述、规则治理动作、规则治理等级等。',
      'path' => '/policies/{policy_name}',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'policy_name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '策略治理规则名称',
            'description' => '策略治理规则名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ACKAllowedRepos',
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
              'name' => 
              array (
                'title' => '策略治理规则名称',
                'description' => '策略治理规则名称',
                'type' => 'string',
                'example' => 'ACKAllowedRepos',
              ),
              'category' => 
              array (
                'title' => '规则模板类型',
                'description' => '规则模板类型',
                'type' => 'string',
                'example' => 'k8s-general',
              ),
              'description' => 
              array (
                'title' => '规则模板描述',
                'description' => '规则模板描述',
                'type' => 'string',
                'example' => 'Requires container images to begin with a repo string from a specified list',
              ),
              'action' => 
              array (
                'title' => '规则治理动作 ● enforce: 拦截违规部署 ● inform：告警',
                'description' => '规则治理动作，取值：
- `enforce`：拦截违规部署
- `inform`：告警',
                'type' => 'string',
                'example' => 'enforce',
              ),
              'severity' => 
              array (
                'title' => '规则治理等级',
                'description' => '规则治理等级，取值：
* `high`：高危
* `medium`：中危
* `low`：低危',
                'type' => 'string',
                'example' => 'high',
              ),
              'template' => 
              array (
                'title' => '规则模板详情',
                'description' => '规则模板详情',
                'type' => 'string',
                'example' => '详情请参见请求示例',
              ),
              'no_config' => 
              array (
                'title' => '是否需要配置策略： 0表示需要参数配置 1表示无需参数配置',
                'description' => '是否需要配置策略，取值： 
- 0：表示需要参数配置
- 1：表示无需参数配置',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'is_deleted' => 
              array (
                'title' => '软删除标志：0表示未删除 1表示删除',
                'description' => '是否删除标志，取值：
- 0：表示未删除。
- 1：表示删除。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"name\\": \\"ACKAllowedRepos\\",\\n  \\"category\\": \\"k8s-general\\",\\n  \\"description\\": \\"Requires container images to begin with a repo string from a specified list\\",\\n  \\"action\\": \\"enforce\\",\\n  \\"severity\\": \\"high\\",\\n  \\"template\\": \\"详情请参见请求示例\\",\\n  \\"no_config\\": 0,\\n  \\"is_deleted\\": 0\\n}","errorExample":""},{"type":"xml","example":"<DescribePolicyDetailsResponse>\\n    <name>ACKAllowedRepos</name>\\n    <category>k8s-general</category>\\n    <description>Requires container images to begin with a repo string from a specified list</description>\\n    <action>enforce</action>\\n    <severity>high</severity>\\n    <template>详情请参见请求示例</template>\\n    <no_config>0</no_config>\\n    <is_deleted>0</is_deleted>\\n</DescribePolicyDetailsResponse>","errorExample":""}]',
      'title' => '查询指定策略治理规则的详情',
    ),
    'DescribePolicyGovernanceInCluster' => 
    array (
      'summary' => 'ACK集群容器安全策略供了种类丰富的内置规则库，包括Compliance、Infra、K8s-general和PSP，旨在确保容器在生产环境中的安全运行。您可以调用DescribePolicyGovernanceInCluster接口，查询目标集群策略治理的详细信息，例如集群当前启用的不同等级策略计数统计、策略治理审计日志、拦截和告警情况等。',
      'path' => '/clusters/{cluster_id}/policygovernance',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'cluster_id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '目标集群ID',
            'description' => '目标集群ID',
            'type' => 'string',
            'required' => true,
            'example' => 'c8155823d057948c69a****',
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
              'on_state' => 
              array (
                'title' => '当前集群中开启的不同等级策略计数统计',
                'description' => '当前集群中开启的不同等级策略计数统计',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'enabled_count' => 
                    array (
                      'title' => '当前开启的策略种类计数',
                      'description' => '当前开启的策略种类计数',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '3',
                    ),
                    'total' => 
                    array (
                      'title' => '该等级下策略种类总数',
                      'description' => '该等级下策略种类总数',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '8',
                    ),
                    'severity' => 
                    array (
                      'title' => '策略治理等级',
                      'description' => '策略治理等级',
                      'type' => 'string',
                      'example' => 'high',
                    ),
                  ),
                ),
              ),
              'admit_log' => 
              array (
                'title' => '集群当前策略治理审计日志',
                'description' => '集群当前策略治理审计日志',
                'type' => 'object',
                'properties' => 
                array (
                  'progress' => 
                  array (
                    'title' => '查询结果的状态',
                    'description' => '查询结果的状态，取值：
* `Complete`：查询已经完成，返回结果为完整结果。
* `Incomplete`：查询已经完成，返回结果为不完整结果，需要重复请求以获得完整结果。',
                    'type' => 'string',
                    'example' => 'Complete',
                  ),
                  'count' => 
                  array (
                    'title' => '当前查询到的日志总数',
                    'description' => '当前查询到的日志总数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'log' => 
                  array (
                    'title' => '策略治理审计日志内容',
                    'description' => '策略治理审计日志内容',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'msg' => 
                      array (
                        'title' => '策略治理审计日志信息',
                        'description' => '策略治理审计日志信息',
                        'type' => 'string',
                        'example' => 'd4hdhs*****',
                      ),
                      'cluster_id' => 
                      array (
                        'title' => '目标集群ID',
                        'description' => '目标集群ID',
                        'type' => 'string',
                        'example' => 'c8155823d057948c69a****',
                      ),
                      'constraint_kind' => 
                      array (
                        'title' => '策略类型名称',
                        'description' => '策略类型名称',
                        'type' => 'string',
                        'example' => 'ACKAllowedRepos',
                      ),
                      'resource_name' => 
                      array (
                        'title' => '目标资源名称',
                        'description' => '目标资源名称',
                        'type' => 'string',
                        'example' => 'nginx-deployment-basic2-84ccb74bfc-df22p',
                      ),
                      'resource_kind' => 
                      array (
                        'title' => '目标资源类型',
                        'description' => '目标资源类型',
                        'type' => 'string',
                        'example' => 'Pod',
                      ),
                      'resource_namespace' => 
                      array (
                        'title' => '目标资源命名空间',
                        'description' => '目标资源命名空间',
                        'type' => 'string',
                        'example' => 'default',
                      ),
                    ),
                  ),
                ),
              ),
              'totalViolations' => 
              array (
                'title' => '集群中当前被拦截和告警两种处理类型下不同治理等级的违规计数。',
                'description' => '集群中当前被拦截和告警两种处理类型下不同治理等级的违规计数。',
                'type' => 'object',
                'properties' => 
                array (
                  'deny' => 
                  array (
                    'title' => '被拦截的不同治理等级的违规计数统计',
                    'description' => '被拦截的不同治理等级的违规计数统计',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'severity' => 
                      array (
                        'title' => '策略治理等级',
                        'description' => '策略治理等级',
                        'type' => 'string',
                        'example' => 'high',
                      ),
                      'violations' => 
                      array (
                        'title' => '被拦截的事件计数',
                        'description' => '被拦截的事件计数',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '0',
                      ),
                    ),
                  ),
                  'warn' => 
                  array (
                    'title' => '告警模式下不同治理等级的违规计数统计',
                    'description' => '告警模式下不同治理等级的违规计数统计',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'severity' => 
                      array (
                        'title' => '策略治理等级',
                        'description' => '策略治理等级',
                        'type' => 'string',
                        'example' => 'low',
                      ),
                      'violations' => 
                      array (
                        'title' => '告警的事件计数',
                        'description' => '告警的事件计数',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '5',
                      ),
                    ),
                  ),
                ),
              ),
              'violations' => 
              array (
                'title' => '集群中针对不同策略类型的拦截和告警的审计计数统计列表',
                'description' => '集群中针对不同策略类型的拦截和告警的审计计数统计列表',
                'type' => 'object',
                'properties' => 
                array (
                  'deny' => 
                  array (
                    'title' => '被拦截的不同策略类型的审计计数',
                    'description' => '被拦截的不同策略类型的审计计数',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'policyName' => 
                      array (
                        'title' => '策略名称',
                        'description' => '策略名称',
                        'type' => 'string',
                        'example' => 'policy-gatekeeper-ackallowedrepos',
                      ),
                      'policyDescription' => 
                      array (
                        'title' => '策略描述',
                        'description' => '策略描述',
                        'type' => 'string',
                        'example' => 'Requires container images to begin with a repo string from a specified list.',
                      ),
                      'violations' => 
                      array (
                        'title' => '对应规则的事件计数',
                        'description' => '集群中对应规则类型下被拦截的违规计数统计',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '11',
                      ),
                      'severity' => 
                      array (
                        'title' => '策略治理等级',
                        'description' => '策略治理等级',
                        'type' => 'string',
                        'example' => 'high',
                      ),
                    ),
                  ),
                  'warn' => 
                  array (
                    'title' => '告警的不同策略类型审计计数',
                    'description' => '告警模式下不同治理等级的违规计数统计',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'policyName' => 
                      array (
                        'title' => '策略名称',
                        'description' => '策略名称',
                        'type' => 'string',
                        'example' => 'policy-gatekeeper-ackpspcapabilities',
                      ),
                      'policyDescription' => 
                      array (
                        'title' => '策略描述',
                        'description' => '策略描述',
                        'type' => 'string',
                        'example' => 'Controls Linux capabilities.',
                      ),
                      'violations' => 
                      array (
                        'title' => '对应规则的事件计数',
                        'description' => '集群中对应规则类型下被告警的违规计数统计',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '81',
                      ),
                      'severity' => 
                      array (
                        'title' => '策略治理等级',
                        'description' => '策略治理等级',
                        'type' => 'string',
                        'example' => 'high',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"on_state\\": [\\n    {\\n      \\"enabled_count\\": 3,\\n      \\"total\\": 8,\\n      \\"severity\\": \\"high\\"\\n    }\\n  ],\\n  \\"admit_log\\": {\\n    \\"progress\\": \\"Complete\\",\\n    \\"count\\": 100,\\n    \\"log\\": {\\n      \\"msg\\": \\"d4hdhs*****\\",\\n      \\"cluster_id\\": \\"c8155823d057948c69a****\\",\\n      \\"constraint_kind\\": \\"ACKAllowedRepos\\",\\n      \\"resource_name\\": \\"nginx-deployment-basic2-84ccb74bfc-df22p\\",\\n      \\"resource_kind\\": \\"Pod\\",\\n      \\"resource_namespace\\": \\"default\\"\\n    }\\n  },\\n  \\"totalViolations\\": {\\n    \\"deny\\": {\\n      \\"severity\\": \\"high\\",\\n      \\"violations\\": 0\\n    },\\n    \\"warn\\": {\\n      \\"severity\\": \\"low\\",\\n      \\"violations\\": 5\\n    }\\n  },\\n  \\"violations\\": {\\n    \\"deny\\": {\\n      \\"policyName\\": \\"policy-gatekeeper-ackallowedrepos\\",\\n      \\"policyDescription\\": \\"Requires container images to begin with a repo string from a specified list.\\",\\n      \\"violations\\": 11,\\n      \\"severity\\": \\"high\\"\\n    },\\n    \\"warn\\": {\\n      \\"policyName\\": \\"policy-gatekeeper-ackpspcapabilities\\",\\n      \\"policyDescription\\": \\"Controls Linux capabilities.\\",\\n      \\"violations\\": 81,\\n      \\"severity\\": \\"high\\"\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribePolicyGovernanceInClusterResponse>\\n    <on_state>\\n        <enabled_count>0</enabled_count>\\n        <total>14</total>\\n        <severity>low</severity>\\n    </on_state>\\n    <on_state>\\n        <enabled_count>2</enabled_count>\\n        <total>13</total>\\n        <severity>high</severity>\\n    </on_state>\\n    <on_state>\\n        <enabled_count>1</enabled_count>\\n        <total>8</total>\\n        <severity>medium</severity>\\n    </on_state>\\n    <admit_log>\\n        <progress>Complete</progress>\\n        <count>75</count>\\n        <log>\\n            <__source__>192.168.0.188</__source__>\\n            <__tag__:__hostname__>iZwz98e621h0kvki3ja****</__tag__:__hostname__>\\n            <__tag__:__pack_id__>63DE8FD17599E86****</__tag__:__pack_id__>\\n            <__tag__:__path__>/policy_admit_logs/gatekeeper_admit.log</__tag__:__path__>\\n            <__tag__:__receive_time__>1631168040</__tag__:__receive_time__>\\n            <__tag__:__user_defined_id__>k8s-group-cb36d98a701ef4742b50603866809****</__tag__:__user_defined_id__>\\n            <__tag__:_container_ip_>10.102.0.89</__tag__:_container_ip_>\\n            <__tag__:_container_name_>manager</__tag__:_container_name_>\\n            <__tag__:_image_name_>registry-vpc.cn-shenzhen.aliyuncs.com/acs/gatekeeper:v3.6.0.60-g72c4896-aliyun</__tag__:_image_name_>\\n            <__tag__:_namespace_>kube-system</__tag__:_namespace_>\\n            <__tag__:_node_ip_>192.168.0.188</__tag__:_node_ip_>\\n            <__tag__:_node_name_>cn-shenzhen.192.168.XX.XX</__tag__:_node_name_>\\n            <__tag__:_pod_name_>gatekeeper-7648f64cc8-27nd4</__tag__:_pod_name_>\\n            <__tag__:_pod_uid_>11083b05-eecd-454c-8d22-81c83ce1****</__tag__:_pod_uid_>\\n            <__time__>1631168037</__time__>\\n            <__topic__/>\\n            <cluster_id>cb36d98a701ef4742b50603866809****</cluster_id>\\n            <constraint_action>deny</constraint_action>\\n            <constraint_api_version>v1beta1</constraint_api_version>\\n            <constraint_group>constraints.gatekeeper.sh</constraint_group>\\n            <constraint_kind>ACKAllowedRepos</constraint_kind>\\n            <constraint_name>allowed-repos-80970511-c93d-4c40-b692-be18c077****</constraint_name>\\n            <event_msg>Admission webhook \\"validation.gatekeeper.sh\\" denied request, Resource Namespace: default, Constraint: allowed-repos-80970511-c93d-4c40-b692-be18c0770382, Message: container &lt;nginx&gt; has an invalid image repo &lt;nginx:1.7.9&gt;, allowed repos are [\\"registry.cn-shanghai.aliyuncs.com/acs/\\", \\"registry.cn-hangzhou.aliyuncs.com/acs/\\"]</event_msg>\\n            <event_reason>GatekeeperFailedAdmission</event_reason>\\n            <event_type>violation</event_type>\\n            <level>info</level>\\n            <logger>ack_policy_admit_log_for_sls</logger>\\n            <msg>container &lt;nginx&gt; has an invalid image repo &lt;nginx:1.7.9&gt;, allowed repos are [\\"registry.cn-shanghai.aliyuncs.com/acs/\\", \\"registry.cn-hangzhou.aliyuncs.com/acs/\\"]</msg>\\n            <process>admission</process>\\n            <request_uid>9db8f008-c2e8-4723-a380-18ef358c2827</request_uid>\\n            <request_username>system:serviceaccount:kube-system:replicaset-controller</request_username>\\n            <resource_api_version>v1</resource_api_version>\\n            <resource_group/>\\n            <resource_kind>Pod</resource_kind>\\n            <resource_name>nginx-deployment-basic2-84ccb74bfc-df22p</resource_name>\\n            <resource_namespace>default</resource_namespace>\\n            <time>2021-09-09T06:13:57Z</time>\\n            <ts>1631168037.444757</ts>\\n        </log>\\n        <log>\\n            <__source__>192.168.XX.XX</__source__>\\n        </log>\\n    </admit_log>\\n    <Violation>\\n        <totalViolations>\\n            <deny>\\n                <severity>high</severity>\\n                <violations>75</violations>\\n            </deny>\\n            <deny>\\n                <severity>medium</severity>\\n                <violations>0</violations>\\n            </deny>\\n            <warn>\\n                <severity>high</severity>\\n                <violations>0</violations>\\n            </warn>\\n            <warn>\\n                <severity>medium</severity>\\n                <violations>0</violations>\\n            </warn>\\n        </totalViolations>\\n        <violations>\\n            <deny>\\n                <policyName>policy-gatekeeper-ackallowedrepos</policyName>\\n                <policyDescription>Requires container images to begin with a repo string from a specified list.</policyDescription>\\n                <severity>high</severity>\\n                <violations>11</violations>\\n            </deny>\\n            <deny>\\n                <policyName>policy-gatekeeper-ackpspcapabilities</policyName>\\n                <policyDescription>Controls Linux capabilities.</policyDescription>\\n                <severity>high</severity>\\n                <violations>81</violations>\\n            </deny>\\n        </violations>\\n    </Violation>\\n</DescribePolicyGovernanceInClusterResponse>","errorExample":""}]',
      'title' => '获取集群策略治理详情',
    ),
    'DescribePolicyInstances' => 
    array (
      'summary' => '您可以在ACK集群中选择安全策略类型，配置相关实施动作、作用范围等，创建并部署一个策略实例。您可以调用DescribePolicyInstances接口，获取集群中指定策略规则实例的详细信息，例如策略描述、治理等级等。',
      'path' => '/clusters/{cluster_id}/policies',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'cluster_id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '目标集群ID',
            'description' => '目标集群ID',
            'type' => 'string',
            'required' => true,
            'example' => 'c8155823d057948c69a****',
          ),
        ),
        1 => 
        array (
          'name' => 'policy_name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '策略类型',
            'description' => '策略治理规则名称',
            'type' => 'string',
            'required' => false,
            'example' => 'ACKPSPCapabilities',
          ),
        ),
        2 => 
        array (
          'name' => 'instance_name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '策略实例名称',
            'description' => '策略实例名称',
            'type' => 'string',
            'required' => false,
            'example' => 'allowed-repos-cz4s2',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '策略实例列表',
            'description' => '策略实例列表',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'ali_uid' => 
                array (
                  'title' => '策略实例实施者UID',
                  'description' => '策略实例实施者UID',
                  'type' => 'string',
                  'example' => '16298168****',
                ),
                'cluster_id' => 
                array (
                  'title' => '目标集群ID',
                  'description' => '目标集群ID',
                  'type' => 'string',
                  'example' => 'c8155823d057948c69a****',
                ),
                'instance_name' => 
                array (
                  'title' => '规则实例名称',
                  'description' => '规则实例名称',
                  'type' => 'string',
                  'example' => 'no-env-var-secrets-****',
                ),
                'policy_name' => 
                array (
                  'title' => '策略治理规则名称',
                  'description' => '策略治理规则名称',
                  'type' => 'string',
                  'example' => 'ACKPSPCapabilities',
                ),
                'policy_category' => 
                array (
                  'title' => '策略类型名称',
                  'description' => '策略类型名称',
                  'type' => 'string',
                  'example' => 'k8s-general',
                ),
                'policy_description' => 
                array (
                  'title' => '规则模板描述',
                  'description' => '规则模板描述',
                  'type' => 'string',
                  'example' => 'Restricts secrets used in pod envs',
                ),
                'policy_parameters' => 
                array (
                  'title' => '当前规则实例的配置参数',
                  'description' => '当前规则实例的配置参数',
                  'type' => 'string',
                  'example' => '"restrictedNamespaces": [ "test" ]',
                ),
                'policy_severity' => 
                array (
                  'title' => '规则实例治理等级',
                  'description' => '规则实例治理等级',
                  'type' => 'string',
                  'example' => 'low',
                ),
                'policy_scope' => 
                array (
                  'title' => '策略实例实施范围： 默认"*"代表集群所有ns 否则返回作用namespaces名称，多个namespaces以逗号分隔',
                  'description' => '策略实例实施范围：

默认"*"代表集群所有命名空间。

否则返回作用Namespaces名称，多个Namespaces以逗号（,）分隔。',
                  'type' => 'string',
                  'example' => '*',
                ),
                'policy_action' => 
                array (
                  'title' => '规则治理动作  deny: 拦截违规部署  warn：告警',
                  'description' => '规则治理动作，取值：

- `deny`：拦截违规部署

- `warn`：告警',
                  'type' => 'string',
                  'example' => 'deny',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"[\\n  {\\n    \\"ali_uid\\": \\"16298168****\\",\\n    \\"cluster_id\\": \\"c8155823d057948c69a****\\",\\n    \\"instance_name\\": \\"no-env-var-secrets-****\\",\\n    \\"policy_name\\": \\"ACKPSPCapabilities\\",\\n    \\"policy_category\\": \\"k8s-general\\",\\n    \\"policy_description\\": \\"Restricts secrets used in pod envs\\",\\n    \\"policy_parameters\\": \\"\\\\\\"restrictedNamespaces\\\\\\": [ \\\\\\"test\\\\\\" ]\\",\\n    \\"policy_severity\\": \\"low\\",\\n    \\"policy_scope\\": \\"*\\",\\n    \\"policy_action\\": \\"deny\\"\\n  }\\n]","errorExample":""},{"type":"xml","example":"<DescribePolicyInstancesResponse>\\n    <ali_uid>16298168****</ali_uid>\\n    <cluster_id>c8155823d057948c69a****</cluster_id>\\n    <instance_name>no-env-var-secrets-****</instance_name>\\n    <policy_name>ACKPSPCapabilities</policy_name>\\n    <policy_category>k8s-general</policy_category>\\n    <policy_description>Restricts secrets used in pod envs</policy_description>\\n    <policy_parameters>\\"restrictedNamespaces\\": [ \\"test\\" ]</policy_parameters>\\n    <policy_severity>low</policy_severity>\\n    <policy_scope>*</policy_scope>\\n    <policy_action>deny</policy_action>\\n</DescribePolicyInstancesResponse>","errorExample":""}]',
      'title' => '查询策略实例列表',
    ),
    'DescribePolicyInstancesStatus' => 
    array (
      'summary' => '您可以调用DescribePolicyInstancesStatus接口，查询集群当前不同策略类型对应的实例部署状态，包括每种策略规则对应开启的实例计数，以及不同治理等级下开启的策略种类计数。',
      'path' => '/clusters/{cluster_id}/policies/status',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'cluster_id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '目标集群ID',
            'description' => '目标集群ID',
            'type' => 'string',
            'required' => true,
            'example' => 'c8155823d057948c69a****',
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
              'policy_instances' => 
              array (
                'title' => '不同策略类型下的策略实例计数列表',
                'description' => '不同策略类型下的策略实例计数列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'policy_category' => 
                    array (
                      'description' => '策略类型。支持的策略类型和类型说明详见[容器安全策略规则库说明](~~359819~~)。',
                      'type' => 'string',
                      'example' => 'compliance',
                    ),
                    'policy_name' => 
                    array (
                      'description' => '策略名称。',
                      'type' => 'string',
                      'example' => 'ACKRestrictRoleBindings',
                    ),
                    'policy_description' => 
                    array (
                      'description' => '策略描述。',
                      'type' => 'string',
                      'example' => 'Restricts use of the cluster-admin role.',
                    ),
                    'policy_severity' => 
                    array (
                      'description' => '策略治理等级。',
                      'type' => 'string',
                      'example' => 'medium',
                    ),
                    'policy_instances_count' => 
                    array (
                      'description' => '已部署的策略实例计数，如果字段为空说明未部署该类型策略实例。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                  ),
                ),
              ),
              'instances_severity_count' => 
              array (
                'description' => '集群中当前部署的不同治理等级的策略实例计数。',
                'type' => 'object',
                'example' => '{ "high": 11,     "medium": 1  }',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"policy_instances\\": [\\n    {\\n      \\"policy_category\\": \\"compliance\\",\\n      \\"policy_name\\": \\"ACKRestrictRoleBindings\\",\\n      \\"policy_description\\": \\"Restricts use of the cluster-admin role.\\",\\n      \\"policy_severity\\": \\"medium\\",\\n      \\"policy_instances_count\\": 1\\n    }\\n  ],\\n  \\"instances_severity_count\\": {\\n    \\"high\\": 11,\\n    \\"medium\\": 1\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribePolicyInstancesStatusResponse>\\n    <policy_instances>\\n        <policy_category>k8s-general</policy_category>\\n        <policy_name>ACKBlockNodePort</policy_name>\\n        <policy_description>Disallows all Services with type NodePort.</policy_description>\\n        <policy_severity>high</policy_severity>\\n    </policy_instances>\\n    <policy_instances>\\n        <policy_category>k8s-general</policy_category>\\n        <policy_name>ACKExternalIPs</policy_name>\\n        <policy_description>Restricts Services from containing externalIPs except those in a provided allowlist.</policy_description>\\n        <policy_severity>high</policy_severity>\\n    </policy_instances>\\n    <policy_instances>\\n        <policy_category>psp</policy_category>\\n        <policy_name>ACKPSPHostNamespace</policy_name>\\n        <policy_description>Controls usage of host namespaces.</policy_description>\\n        <policy_severity>high</policy_severity>\\n    </policy_instances>\\n    <policy_instances>\\n        <policy_category>psp</policy_category>\\n        <policy_name>ACKPSPReadOnlyRootFilesystem</policy_name>\\n        <policy_description>Requires the use of a read only root file system.</policy_description>\\n        <policy_severity>medium</policy_severity>\\n    </policy_instances>\\n    <policy_instances>\\n        <policy_category>psp</policy_category>\\n        <policy_name>ACKPSPVolumeTypes</policy_name>\\n        <policy_description>Controls usage of volume types.</policy_description>\\n        <policy_severity>medium</policy_severity>\\n    </policy_instances>\\n    <policy_instances>\\n        <policy_category>infra</policy_category>\\n        <policy_name>ACKOSSStorageLocationConstraint</policy_name>\\n        <policy_description>Restricts location of oss storage in cluster.</policy_description>\\n        <policy_severity>low</policy_severity>\\n    </policy_instances>\\n    <policy_instances>\\n        <policy_category>k8s-general</policy_category>\\n        <policy_name>ACKBlockAutoinjectServiceEnv</policy_name>\\n        <policy_description>Disable autoinjecting information about services into pod\'s environment variables.</policy_description>\\n        <policy_severity>low</policy_severity>\\n    </policy_instances>\\n    <policy_instances>\\n        <policy_category>k8s-general</policy_category>\\n        <policy_name>ACKImageDigests</policy_name>\\n        <policy_description>Requires container images to contain a digest.</policy_description>\\n        <policy_severity>low</policy_severity>\\n    </policy_instances>\\n    <policy_instances>\\n        <policy_category>psp</policy_category>\\n        <policy_name>ACKPSPAllowedUsers</policy_name>\\n        <policy_description>Controls the user and group IDs of the container.</policy_description>\\n        <policy_severity>low</policy_severity>\\n    </policy_instances>\\n    <policy_instances>\\n        <policy_category>psp</policy_category>\\n        <policy_name>ACKPSPHostFilesystem</policy_name>\\n        <policy_description>Controls usage of the host filesystem.</policy_description>\\n        <policy_severity>high</policy_severity>\\n    </policy_instances>\\n    <policy_instances>\\n        <policy_category>infra</policy_category>\\n        <policy_name>ACKBlockProcessNamespaceSharing</policy_name>\\n        <policy_description>Restricts shareProcessNamespace used in pod.</policy_description>\\n        <policy_severity>high</policy_severity>\\n        <policy_instances_count>2</policy_instances_count>\\n    </policy_instances>\\n    <policy_instances>\\n        <policy_category>psp</policy_category>\\n        <policy_name>ACKPSPCapabilities</policy_name>\\n        <policy_description>Controls Linux capabilities.</policy_description>\\n        <policy_severity>high</policy_severity>\\n        <policy_instances_count>5</policy_instances_count>\\n    </policy_instances>\\n    <policy_instances>\\n        <policy_category>psp</policy_category>\\n        <policy_name>ACKPSPForbiddenSysctls</policy_name>\\n        <policy_description>Controls the `sysctl` profile used by containers.</policy_description>\\n        <policy_severity>high</policy_severity>\\n    </policy_instances>\\n    <policy_instances>\\n        <policy_category>psp</policy_category>\\n        <policy_name>ACKPSPSeccomp</policy_name>\\n        <policy_description>Controls the seccomp profile used by containers.</policy_description>\\n        <policy_severity>low</policy_severity>\\n    </policy_instances>\\n    <policy_instances>\\n        <policy_category>k8s-general</policy_category>\\n        <policy_name>ACKBlockLoadBalancer</policy_name>\\n        <policy_description>Disallows all Services with type LoadBalancer.</policy_description>\\n        <policy_severity>high</policy_severity>\\n    </policy_instances>\\n    <policy_instances>\\n        <policy_category>psp</policy_category>\\n        <policy_name>ACKPSPAppArmor</policy_name>\\n        <policy_description>Controls the AppArmor profile used by containers.</policy_description>\\n        <policy_severity>low</policy_severity>\\n    </policy_instances>\\n    <policy_instances>\\n        <policy_category>psp</policy_category>\\n        <policy_name>ACKPSPPrivilegedContainer</policy_name>\\n        <policy_description>Controls running of privileged containers.</policy_description>\\n        <policy_severity>high</policy_severity>\\n    </policy_instances>\\n    <policy_instances>\\n        <policy_category>psp</policy_category>\\n        <policy_name>ACKPSPProcMount</policy_name>\\n        <policy_description>Controls the allowed `procMount` types for the container.</policy_description>\\n        <policy_severity>low</policy_severity>\\n    </policy_instances>\\n    <policy_instances>\\n        <policy_category>psp</policy_category>\\n        <policy_name>ACKPSPSELinuxV2</policy_name>\\n        <policy_description>Controls the SELinux context of the container.</policy_description>\\n        <policy_severity>low</policy_severity>\\n    </policy_instances>\\n    <policy_instances>\\n        <policy_category>infra</policy_category>\\n        <policy_name>ACKEmptyDirHasSizeLimit</policy_name>\\n        <policy_description>Requires that emptydir volume must have a `sizelimit` defined.</policy_description>\\n        <policy_severity>low</policy_severity>\\n    </policy_instances>\\n    <policy_instances>\\n        <policy_category>psp</policy_category>\\n        <policy_name>ACKPSPAllowPrivilegeEscalationContainer</policy_name>\\n        <policy_description>Controls restricting escalation to root privileges.</policy_description>\\n        <policy_severity>medium</policy_severity>\\n    </policy_instances>\\n    <policy_instances>\\n        <policy_category>psp</policy_category>\\n        <policy_name>ACKPSPFSGroup</policy_name>\\n        <policy_description>Controls allocating an FSGroup that owns the Pod\'s volumes.</policy_description>\\n        <policy_severity>medium</policy_severity>\\n    </policy_instances>\\n    <policy_instances>\\n        <policy_category>cis-k8s</policy_category>\\n        <policy_name>ACKPodsRequireSecurityContext</policy_name>\\n        <policy_description>Requires that Pods must have a `securityContext` defined.</policy_description>\\n        <policy_severity>low</policy_severity>\\n    </policy_instances>\\n    <policy_instances>\\n        <policy_category>cis-k8s</policy_category>\\n        <policy_name>ACKRestrictNamespaces</policy_name>\\n        <policy_description>Restricts resources from using the `default` namespace.</policy_description>\\n        <policy_severity>low</policy_severity>\\n    </policy_instances>\\n    <policy_instances>\\n        <policy_category>k8s-general</policy_category>\\n        <policy_name>ACKContainerLimits</policy_name>\\n        <policy_description>Requires containers to have memory and CPU limits set and within a specified maximum amount.</policy_description>\\n        <policy_severity>low</policy_severity>\\n    </policy_instances>\\n    <policy_instances>\\n        <policy_category>psp</policy_category>\\n        <policy_name>ACKPSPHostNetworkingPorts</policy_name>\\n        <policy_description>Controls usage of host networking and ports.</policy_description>\\n        <policy_severity>high</policy_severity>\\n    </policy_instances>\\n    <policy_instances>\\n        <policy_category>k8s-general</policy_category>\\n        <policy_name>ACKBlockAutomountToken</policy_name>\\n        <policy_description>Disable automounting API credentials.</policy_description>\\n        <policy_severity>high</policy_severity>\\n    </policy_instances>\\n    <policy_instances>\\n        <policy_category>k8s-general</policy_category>\\n        <policy_name>ACKRequiredLabels</policy_name>\\n        <policy_description>Requires all resources to contain a specified label with a value matching a provided regular expression.</policy_description>\\n        <policy_severity>low</policy_severity>\\n    </policy_instances>\\n    <policy_instances>\\n        <policy_category>psp</policy_category>\\n        <policy_name>ACKPSPFlexVolumes</policy_name>\\n        <policy_description>Controls the allowlist of Flexvolume drivers.</policy_description>\\n        <policy_severity>medium</policy_severity>\\n    </policy_instances>\\n    <policy_instances>\\n        <policy_category>k8s-general</policy_category>\\n        <policy_name>ACKAllowedRepos</policy_name>\\n        <policy_description>Requires container images to begin with a repo string from a specified list.</policy_description>\\n        <policy_severity>high</policy_severity>\\n        <policy_instances_count>4</policy_instances_count>\\n    </policy_instances>\\n    <policy_instances>\\n        <policy_category>cis-k8s</policy_category>\\n        <policy_name>ACKNoEnvVarSecrets</policy_name>\\n        <policy_description>Restricts secrets used in pod envs.</policy_description>\\n        <policy_severity>medium</policy_severity>\\n        <policy_instances_count>1</policy_instances_count>\\n    </policy_instances>\\n    <policy_instances>\\n        <policy_category>cis-k8s</policy_category>\\n        <policy_name>ACKRestrictRoleBindings</policy_name>\\n        <policy_description>Restricts use of the cluster-admin role.</policy_description>\\n        <policy_severity>medium</policy_severity>\\n    </policy_instances>\\n    <policy_instances>\\n        <policy_category>infra</policy_category>\\n        <policy_name>ACKLocalStorageRequireSafeToEvict</policy_name>\\n        <policy_description>Restricts safe to evict annotation existing in pod with local storage.</policy_description>\\n        <policy_severity>low</policy_severity>\\n    </policy_instances>\\n    <policy_instances>\\n        <policy_category>k8s-general</policy_category>\\n        <policy_name>ACKRequiredProbes</policy_name>\\n        <policy_description>Requires Pods to have readiness and/or liveness probes.</policy_description>\\n        <policy_severity>medium</policy_severity>\\n    </policy_instances>\\n    <instances_severity_count>\\n        <high>11</high>\\n        <medium>1</medium>\\n    </instances_severity_count>\\n</DescribePolicyInstancesStatusResponse>","errorExample":""}]',
      'title' => '查看策略规则对应的实例部署详情',
    ),
    'DeployPolicyInstance' => 
    array (
      'summary' => '您可以在ACK集群中选择安全策略类型，配置策略实例的治理动作（告警或拦截）、作用的命名空间范围等，以创建并部署一个策略实例。您可以调用DeployPolicyInstance接口，在指定集群的命名空间中部署策略规则实例。',
      'path' => '/clusters/{cluster_id}/policies/{policy_name}',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'cluster_id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '目标集群id',
            'description' => '目标集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c8155823d057948c69a****',
          ),
        ),
        1 => 
        array (
          'name' => 'policy_name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '策略治理规则名称',
            'description' => '策略治理规则名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ACKAllowedRepos',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求结构。',
            'type' => 'object',
            'properties' => 
            array (
              'action' => 
              array (
                'title' => '规则治理动作',
                'description' => '规则治理动作，取值：

- `deny`：拦截违规部署
- `warn`：告警',
                'type' => 'string',
                'required' => false,
                'example' => 'deny',
              ),
              'namespaces' => 
              array (
                'title' => '限制策略实施的命名空间，为空时表示所有命名空间',
                'description' => '限制策略实施的命名空间，为空时表示所有命名空间。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '限制策略实施的命名空间，为空时表示所有命名空间。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'default',
                ),
                'required' => false,
              ),
              'parameters' => 
              array (
                'title' => '当前规则实例的配置参数',
                'description' => '当前规则实例的参数配置。每个策略治理规则支持的参数以及对应的参数说明，详见 [容器安全策略规则库说明](https://www.alibabacloud.com/help/doc-detail/359819.html) 。',
                'type' => 'object',
                'required' => false,
                'example' => '{   "repos": [     "registry-vpc.cn-hangzhou.aliyuncs.com/acs/",     "registry.cn-hangzhou.aliyuncs.com/acs/"   ] }',
              ),
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
              'instances' => 
              array (
                'title' => '策略实例列表',
                'description' => '策略实例列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '已部署的实例名称列表。',
                  'type' => 'string',
                  'example' => '[ "allowed-repos-kqxnc" ]',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"instances\\": [\\n    \\"[ \\\\\\"allowed-repos-kqxnc\\\\\\" ]\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DeployPolicyInstanceResponse>\\n    <instances>allowed-repos-kqxnc</instances>\\n</DeployPolicyInstanceResponse>","errorExample":""}]',
      'title' => '部署策略规则实例',
    ),
    'DescribeUserQuota' => 
    array (
      'summary' => '您可以调用DescribeUserQuota接口，查询ACK集群、节点池、节点的相关配额。如需扩大配额，请前往配额中心申请。',
      'path' => '/quota',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
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
            'title' => '返回数据体。',
            'description' => '返回体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'amk_cluster_quota' => 
              array (
                'title' => '托管版集群配额。',
                'description' => '托管版集群配额。默认为20。如果超过默认值，需[到配额平台提交申请](https://quotas.console.aliyun.com/products/csk/quotas)扩容。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'ask_cluster_quota' => 
              array (
                'title' => 'Serverless集群配额。',
                'description' => 'ASK集群配额，默认为20。如果超过默认值，需[到配额平台提交申请](https://quotas.console.aliyun.com/products/csk/quotas)扩容。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '3',
              ),
              'cluster_nodepool_quota' => 
              array (
                'title' => '集群节点池配额。',
                'description' => '单集群节点池配额，默认值为20。如果超过默认值，需[到配额平台提交申请](https://quotas.console.aliyun.com/products/csk/quotas)扩容',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'cluster_quota' => 
              array (
                'title' => '专有版集群托管版集群的总配额。',
                'description' => '单账户总集群配额，默认为50。如果超过默认值，需[到配额平台提交申请](https://quotas.console.aliyun.com/products/csk/quotas)扩容。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '50',
              ),
              'node_quota' => 
              array (
                'title' => '单集群的节点配额。',
                'description' => '单集群节点数配额，默认为100。如果超过默认值，需[到配额平台提交申请](https://quotas.console.aliyun.com/products/csk/quotas)扩容。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100',
              ),
              'edge_improved_nodepool_quota' => 
              array (
                'title' => '边缘增强型节点池quota',
                'description' => '【该字段已废弃】

边缘增强型节点池Quota。',
                'type' => 'object',
                'properties' => 
                array (
                  'bandwidth' => 
                  array (
                    'title' => '每个边缘增强型节点池允许的最大带宽，单位Mbps',
                    'description' => '【该字段已废弃】

每个边缘增强型节点池允许的最大带宽，单位：Mbps。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'count' => 
                  array (
                    'title' => '每个账号下允许创建的边缘增强型节点池数量。',
                    'description' => '【该字段已废弃】

每个账号下允许创建的边缘增强型节点池数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'period' => 
                  array (
                    'title' => '每个边缘增强型节点池最大购买时长，单位月。由于边缘增强型节点池为按量付费，用户暂时无需关注该字段。',
                    'description' => '【该字段已废弃】

每个边缘增强型节点池最大购买时长，单位：月。
>由于边缘增强型节点池为按量付费，您暂时无需关注该字段。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                ),
              ),
              'quotas' => 
              array (
                'description' => '新配额项，如存在该字段，则以该字段为准。',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'quota' => 
                    array (
                      'type' => 'string',
                      'example' => '1',
                      'description' => '配额值，如果超过配额，需到[配额平台](https://quotas.console.aliyun.com/products/csk/quotas)提交申请扩容。',
                    ),
                    'operation_code' => 
                    array (
                      'type' => 'string',
                      'description' => '配额码。',
                      'example' => 'q_Kubernetes_Cluster',
                    ),
                    'adjustable' => 
                    array (
                      'type' => 'boolean',
                      'description' => '是否可调整。',
                      'example' => 'true',
                    ),
                    'unit' => 
                    array (
                      'type' => 'string',
                      'example' => 'Cluster',
                      'description' => '单位。',
                    ),
                  ),
                  'description' => '配额项。',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"amk_cluster_quota\\": 20,\\n  \\"ask_cluster_quota\\": 3,\\n  \\"cluster_nodepool_quota\\": 10,\\n  \\"cluster_quota\\": 50,\\n  \\"node_quota\\": 100,\\n  \\"edge_improved_nodepool_quota\\": {\\n    \\"bandwidth\\": 10,\\n    \\"count\\": 3,\\n    \\"period\\": 3\\n  },\\n  \\"quotas\\": {\\n    \\"key\\": {\\n      \\"quota\\": \\"1\\",\\n      \\"operation_code\\": \\"q_Kubernetes_Cluster\\",\\n      \\"adjustable\\": true,\\n      \\"unit\\": \\"Cluster\\"\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeUserQuotaResponse>\\n    <amk_cluster_quota>20</amk_cluster_quota>\\n    <ask_cluster_quota>3</ask_cluster_quota>\\n    <cluster_nodepool_quota>10</cluster_nodepool_quota>\\n    <cluster_quota>50</cluster_quota>\\n    <node_quota>100</node_quota>\\n    <edge_improved_nodepool_quota>\\n        <bandwidth>10</bandwidth>\\n        <count>3</count>\\n        <period>3</period>\\n    </edge_improved_nodepool_quota>\\n    <quotas>\\n        <key>\\n            <quota>1</quota>\\n            <operation_code>q_Kubernetes_Cluster</operation_code>\\n            <adjustable>true</adjustable>\\n            <unit>Cluster</unit>\\n        </key>\\n    </quotas>\\n</DescribeUserQuotaResponse>","errorExample":""}]',
      'title' => '查询集群配额',
    ),
    'UpdateUserPermissions' => 
    array (
      'summary' => '在ACK集群中，非集群创建者或阿里云账号（主账号）在集群中默认没有任何RBAC权限。您可以调用UpdateUserPermissions接口，更新RAM用户或角色拥有的RBAC访问权限，包括可访问的资源、权限的作用范围、预置的角色类型等，从而更好地管理集群的安全访问控制。',
      'path' => '/permissions/users/{uid}/update',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '213870',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcskM5ADAN',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'uid',
          'in' => 'path',
          'schema' => 
          array (
            'description' => 'RAM用户或RAM角色的ID。',
            'type' => 'string',
            'required' => false,
            'example' => '2367****',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求Body',
            'type' => 'array',
            'items' => 
            array (
              'description' => '请求体参数。',
              'type' => 'object',
              'properties' => 
              array (
                'cluster' => 
                array (
                  'description' => '授权目标集群ID。

- 当`role_type`参数的值是`all-clusters`时，此参数的值传空字符串。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'c796c60***',
                ),
                'is_custom' => 
                array (
                  'description' => '该授权是否是自定义授权（`role_name`使用自定义的ClusterRole名称）。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'false',
                ),
                'role_name' => 
                array (
                  'description' => '预置的角色名称，取值：

- `admin`: 管理员。
- `ops`：运维人员。
- `dev`：开发人员。
- `restricted`: 受限用户。
- 自定义的ClusterRole名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ops',
                ),
                'role_type' => 
                array (
                  'description' => '授权类型，取值：

- `cluster`：集群维度。
- `namespace`: 命名空间维度。
- `all-clusters`: 所有集群维度。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'cluster',
                ),
                'namespace' => 
                array (
                  'description' => '命名空间名称，集群维度授权时默认为空。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
                'is_ram_role' => 
                array (
                  'description' => '是否是RAM角色授权。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'false',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'mode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权方式，取值：

- `apply`：全量更新权限，全量更新RAM用户或RAM角色集群授权信息操作会覆盖目标RAM用户或RAM角色已有的集群权限，请求时需要包含想要授权给目标RAM用户或RAM角色的所有权限配置。
- `delete`: 删除权限，只会删除请求时包含的集群授权信息，不影响RAM用户或RAM角色的其他集群权限。
- `patch`: 新增权限，只会新增请求时包含的集群授权信息，不影响RAM用户或RAM角色的其他集群权限。

默认值：`apply`',
            'type' => 'string',
            'required' => false,
            'example' => 'apply',
            'enum' => 
            array (
              0 => 'delete',
              1 => 'patch',
              2 => 'apply',
            ),
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '更新指定RAM用户/角色的RBAC权限',
      'description' => '**注意事项**：

- 对目标RAM用户或RAM角色集群授权信息的更新方式包括全量更新与增量更新。全量更新RAM用户或RAM角色集群授权信息操作会覆盖目标RAM用户或RAM角色已有的集群权限，请求时需要包含想要授权给目标RAM用户或RAM角色的所有权限配置。增量更新RAM用户或RAM角色集群授权信息操作包括新增以及删除操作，只会针对请求时包含的集群授权信息进行权限变更，不影响RAM用户或RAM角色的其他集群权限。',
    ),
    'ListOperationPlans' => 
    array (
      'summary' => '获取自动运维执行计划列表',
      'path' => '/operation/plans',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'cluster_id',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'c29ced64b3dfe4f33b57ca0aa9f68****',
          ),
        ),
        1 => 
        array (
          'name' => 'type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '执行计划类型。',
            'description' => '执行计划类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'cluster_upgrade',
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
              'plans' => 
              array (
                'title' => '执行计划列表。',
                'description' => '执行计划列表。',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '执行计划。',
                  'description' => '执行计划。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'plan_id' => 
                    array (
                      'title' => '执行计划ID。',
                      'description' => '执行计划ID。',
                      'type' => 'string',
                      'example' => 'P-655c9c127e0e6603ef00****',
                    ),
                    'cluster_id' => 
                    array (
                      'title' => '集群ID。',
                      'description' => '集群ID。',
                      'type' => 'string',
                      'example' => 'c29ced64b3dfe4f33b57ca0aa9f68****',
                    ),
                    'created' => 
                    array (
                      'title' => '执行计划创建时间。',
                      'description' => '执行计划创建时间。',
                      'type' => 'string',
                      'example' => '2023-11-21T20:01:22+08:00',
                    ),
                    'start_time' => 
                    array (
                      'title' => '预期开始执行时间。',
                      'description' => '预期开始执行时间。',
                      'type' => 'string',
                      'example' => '2023-11-22T15:18:00+08:00',
                    ),
                    'end_time' => 
                    array (
                      'title' => '预期结束执行时间。',
                      'description' => '预期结束执行时间。',
                      'type' => 'string',
                      'example' => '2023-11-22T18:00:00+08:00',
                    ),
                    'state' => 
                    array (
                      'title' => '状态。',
                      'description' => '状态。取值：
- scheduled：计划中
- canceled：已取消',
                      'type' => 'string',
                      'example' => 'scheduled',
                    ),
                    'type' => 
                    array (
                      'title' => '类型。',
                      'description' => '类型。取值：
- cluster_upgrade：集群升级',
                      'type' => 'string',
                      'example' => 'cluster_upgrade',
                    ),
                    'target_type' => 
                    array (
                      'title' => '执行目标类型。',
                      'description' => '执行目标类型。',
                      'type' => 'string',
                      'example' => 'cluster',
                    ),
                    'target_id' => 
                    array (
                      'title' => '执行目标ID。',
                      'description' => '执行目标ID。',
                      'type' => 'string',
                      'example' => 'c29ced64b3dfe4f33b57ca0aa9f68****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"plans\\": [\\n    {\\n      \\"plan_id\\": \\"P-655c9c127e0e6603ef00****\\",\\n      \\"cluster_id\\": \\"c29ced64b3dfe4f33b57ca0aa9f68****\\",\\n      \\"created\\": \\"2023-11-21T20:01:22+08:00\\",\\n      \\"start_time\\": \\"2023-11-22T15:18:00+08:00\\",\\n      \\"end_time\\": \\"2023-11-22T18:00:00+08:00\\",\\n      \\"state\\": \\"scheduled\\",\\n      \\"type\\": \\"cluster_upgrade\\",\\n      \\"target_type\\": \\"cluster\\",\\n      \\"target_id\\": \\"c29ced64b3dfe4f33b57ca0aa9f68****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListOperationPlansResponse>\\n    <plans>\\n        <plan_id>P-655c9c127e0e6603ef00****</plan_id>\\n        <cluster_id>c29ced64b3dfe4f33b57ca0aa9f68****</cluster_id>\\n        <created>2023-11-21T20:01:22+08:00</created>\\n        <start_time>2023-11-22T15:18:00+08:00</start_time>\\n        <end_time>2023-11-22T18:00:00+08:00</end_time>\\n        <state>scheduled</state>\\n        <type>cluster_upgrade</type>\\n        <target_type>cluster</target_type>\\n        <target_id>c29ced64b3dfe4f33b57ca0aa9f68****</target_id>\\n    </plans>\\n</ListOperationPlansResponse>","errorExample":""}]',
      'title' => '查询自动运维任务执行计划列表',
    ),
    'CancelOperationPlan' => 
    array (
      'summary' => '使用CancelOperationPlan取消已存在但未执行的自动运维任务执行计划。',
      'path' => '/operation/plans/{plan_id}',
      'methods' => 
      array (
        0 => 'delete',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'plan_id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '执行计划ID。',
            'description' => '执行计划ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'P-655c9c127e0e6603ef00****',
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '873DC52C-28AA-5A5C-938C-684D3D4B****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"873DC52C-28AA-5A5C-938C-684D3D4B****\\"\\n}","errorExample":""},{"type":"xml","example":"<CancelOperationPlanResponse>\\n    <requestId>873DC52C-28AA-5A5C-938C-684D3D4B****</requestId>\\n</CancelOperationPlanResponse>","errorExample":""}]',
      'title' => '取消自动运维任务执行计划',
    ),
    'CheckServiceRole' => 
    array (
      'summary' => '检查当前阿里云账号是否已授权指定服务角色。',
      'path' => '/ram/check-service-role',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '215025',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcskDQP655',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'roles' => 
              array (
                'title' => '需要检查的角色列表',
                'description' => '需要检查的角色列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '角色信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'name' => 
                    array (
                      'title' => '角色名称',
                      'description' => '角色名称',
                      'type' => 'string',
                      'required' => true,
                      'example' => 'AliyunCSManagedAutoScalerRole',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => true,
              ),
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'roles' => 
              array (
                'title' => '角色检查结果',
                'description' => '角色检查结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '角色列表',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'name' => 
                    array (
                      'title' => '角色名称',
                      'description' => '角色名称',
                      'type' => 'string',
                      'example' => 'AliyunCSManagedAutoScalerRole',
                    ),
                    'granted' => 
                    array (
                      'title' => '是否已授权',
                      'description' => '是否已授权',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'message' => 
                    array (
                      'title' => '未授权时的提示信息',
                      'description' => '未授权时的提示信息',
                      'type' => 'string',
                      'example' => 'The role does not exist: AliyunCSManagedAutoScalerRole',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"roles\\": [\\n    {\\n      \\"name\\": \\"AliyunCSManagedAutoScalerRole\\",\\n      \\"granted\\": true,\\n      \\"message\\": \\"The role does not exist: AliyunCSManagedAutoScalerRole\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '检查服务角色授权状态',
    ),
    'GetClusterDiagnosisResult' => 
    array (
      'summary' => '获取集群诊断结果',
      'path' => '/clusters/{cluster_id}/diagnosis/{diagnosis_id}/result',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '211972',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcskVD3FWR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'cluster_id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'c8155823d057948c69a****',
          ),
        ),
        1 => 
        array (
          'name' => 'diagnosis_id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '诊断ID。',
            'description' => '诊断ID。',
            'type' => 'string',
            'required' => false,
            'example' => '6f719f23098240818eb26fe3a37d****
',
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
              'code' => 
              array (
                'description' => '诊断结果代码：
- 0：诊断完成
- 1：诊断失败',
                'type' => 'integer',
                'format' => 'int64',
                'enumValueTitles' => 
                array (
                  0 => '0',
                  1 => '1',
                ),
                'example' => '0',
              ),
              'created' => 
              array (
                'description' => '诊断发起时间。',
                'type' => 'string',
                'example' => '2024-05-28T11:29Z',
              ),
              'diagnosis_id' => 
              array (
                'description' => '诊断ID。',
                'type' => 'string',
                'example' => '6cf6b62e334e4583bdfd26707516****',
              ),
              'finished' => 
              array (
                'description' => '诊断完成时间。',
                'type' => 'string',
                'example' => '2024-05-28T11:29Z',
              ),
              'message' => 
              array (
                'description' => '诊断状态信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'result' => 
              array (
                'description' => '诊断结果。',
                'type' => 'string',
                'example' => '{"phase":5,"version":"20240101"}',
              ),
              'status' => 
              array (
                'description' => '诊断状态：
- 0：诊断已创建
- 1：诊断运行中
- 2：诊断已完成',
                'type' => 'integer',
                'format' => 'int64',
                'enumValueTitles' => 
                array (
                  0 => '0',
                  1 => '1',
                  2 => '2',
                ),
                'example' => '2',
              ),
              'target' => 
              array (
                'description' => '诊断对象。',
                'type' => 'string',
                'example' => '{"name":"cn-hongkong.10.0.0.246"}',
              ),
              'type' => 
              array (
                'description' => '诊断类型。',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'node' => 'node',
                  'ingress' => 'ingress',
                  'cluster' => 'cluster',
                  'memory' => 'memory',
                  'pod' => 'pod',
                  'service' => 'service',
                  'network' => 'network',
                ),
                'example' => 'Node',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"code\\": 0,\\n  \\"created\\": \\"2024-05-28T11:29Z\\",\\n  \\"diagnosis_id\\": \\"6cf6b62e334e4583bdfd26707516****\\",\\n  \\"finished\\": \\"2024-05-28T11:29Z\\",\\n  \\"message\\": \\"success\\",\\n  \\"result\\": \\"{\\\\\\"phase\\\\\\":5,\\\\\\"version\\\\\\":\\\\\\"20240101\\\\\\"}\\",\\n  \\"status\\": 2,\\n  \\"target\\": \\"{\\\\\\"name\\\\\\":\\\\\\"cn-hongkong.10.0.0.246\\\\\\"}\\",\\n  \\"type\\": \\"Node\\"\\n}","type":"json"}]',
      'title' => '查询集群诊断结果',
    ),
    'GetClusterDiagnosisCheckItems' => 
    array (
      'summary' => '获取集群诊断检查项',
      'path' => '/clusters/{cluster_id}/diagnosis/{diagnosis_id}/check_items',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '212434',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcskVD3FWR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'cluster_id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cb95aa626a47740afbf6aa099b650****',
          ),
        ),
        1 => 
        array (
          'name' => 'diagnosis_id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '诊断ID。',
            'description' => '诊断ID。',
            'type' => 'string',
            'required' => false,
            'example' => '6f719f23098240818eb26fe3a37d****',
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
              'request_id' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1DFFD8C6-259E-582B-8B40-002C17DC****',
              ),
              'code' => 
              array (
                'description' => '状态代码。',
                'type' => 'string',
                'example' => 'success',
              ),
              'is_success' => 
              array (
                'description' => '检查是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'check_items' => 
              array (
                'description' => '检查项。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '检查项。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'desc' => 
                    array (
                      'description' => '描述。',
                      'type' => 'string',
                      'example' => 'Check whether the node can access host dns service',
                    ),
                    'display' => 
                    array (
                      'description' => '显示名称。',
                      'type' => 'string',
                      'example' => 'HostDNS',
                    ),
                    'group' => 
                    array (
                      'description' => '检查项分组。',
                      'type' => 'string',
                      'example' => 'Node',
                    ),
                    'level' => 
                    array (
                      'description' => '检查项评估结果。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'normal' => 'normal',
                        'warning' => 'warning',
                        'error' => 'error',
                      ),
                      'example' => 'normal',
                    ),
                    'message' => 
                    array (
                      'description' => '检查结果信息。',
                      'type' => 'string',
                      'example' => 'success',
                    ),
                    'name' => 
                    array (
                      'description' => '检查项名称。',
                      'type' => 'string',
                      'example' => 'HostDNS',
                    ),
                    'refer' => 
                    array (
                      'description' => '参考值。',
                      'type' => 'string',
                      'example' => 'True',
                    ),
                    'value' => 
                    array (
                      'description' => '检查项值。',
                      'type' => 'string',
                      'example' => 'True',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"request_id\\": \\"1DFFD8C6-259E-582B-8B40-002C17DC****\\",\\n  \\"code\\": \\"success\\",\\n  \\"is_success\\": true,\\n  \\"check_items\\": [\\n    {\\n      \\"desc\\": \\"Check whether the node can access host dns service\\",\\n      \\"display\\": \\"HostDNS\\",\\n      \\"group\\": \\"Node\\",\\n      \\"level\\": \\"normal\\",\\n      \\"message\\": \\"success\\",\\n      \\"name\\": \\"HostDNS\\",\\n      \\"refer\\": \\"True\\",\\n      \\"value\\": \\"True\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询集群诊断检查项',
    ),
    'CreateClusterDiagnosis' => 
    array (
      'summary' => '发起集群诊断',
      'path' => '/clusters/{cluster_id}/diagnosis',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '211970',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcskVD3FWR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'cluster_id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'ce0da5a1d627e4e9e9f96cae8ad07****',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'type' => 
              array (
                'title' => '诊断类型。',
                'description' => '诊断类型。',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'node' => 'node',
                  'ingress' => 'ingress',
                  'cluster' => 'cluster',
                  'memory' => 'memory',
                  'pod' => 'pod',
                  'service' => 'service',
                  'network' => 'network',
                ),
                'example' => 'node',
              ),
              'target' => 
              array (
                'title' => '用于指定诊断对象的参数。',
                'description' => '用于指定诊断对象的参数。不同诊断类型的参数示例：

node:
```
{"name": "cn-shanghai.10.10.10.107"}
```

pod
```
{"namespace": "kube-system", "name": "csi-plugin-2cg9f"}
```

network
```
{"src": "10.10.10.108", "dst": "10.11.247.16", "dport": "80"}
```

ingress
```
{"url": "https://example.com"}
```

memory
```
{"node":"cn-hangzhou.172.16.9.240"}
```

service
```
{"namespace": "kube-system", "name": "nginx-ingress-lb"}
```',
                'type' => 'object',
                'required' => false,
                'example' => '{"namespace": "kube-system", "name": "csi-plugin-2cg9f"}',
              ),
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'cluster_id' => 
              array (
                'title' => '集群ID。',
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'c5cdf7e3938bc4f8eb0e44b21a80f****',
              ),
              'diagnosis_id' => 
              array (
                'title' => '诊断ID。',
                'description' => '诊断ID。',
                'type' => 'string',
                'example' => '6f719f23098240818eb26fe3a37d****',
              ),
              'request_id' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '687C5BAA-D103-4993-884B-C35E4314****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"cluster_id\\": \\"c5cdf7e3938bc4f8eb0e44b21a80f****\\",\\n  \\"diagnosis_id\\": \\"6f719f23098240818eb26fe3a37d****\\",\\n  \\"request_id\\": \\"687C5BAA-D103-4993-884B-C35E4314****\\"\\n}","type":"json"}]',
      'title' => '发起集群诊断',
    ),
    'UpdateResourcesDeleteProtection' => 
    array (
      'summary' => '更新指定资源的删除保护状态，当前支持开启或关闭删除保护的资源类型有namespaces和services。',
      'path' => '/clusters/{ClusterId}/resources/protection',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '198784',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcskEUXDVA',
          1 => 'FEATUREcskCWOUHM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '目标集群Id。',
            'type' => 'string',
            'required' => true,
            'example' => 'c850429a2287b4d968e27e87a4921****',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '指定资源的删除保护状态变更请求体',
            'type' => 'object',
            'properties' => 
            array (
              'namespace' => 
              array (
                'description' => '资源所在的namespace。',
                'type' => 'string',
                'required' => false,
                'example' => 'default',
              ),
              'resource_type' => 
              array (
                'description' => '删除保护的资源类型，支持namespaces和services。',
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => 'services',
                'enum' => 
                array (
                  0 => 'services',
                  1 => 'namespaces',
                ),
              ),
              'resources' => 
              array (
                'description' => '目标资源列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '目标资源实例名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
                'required' => false,
              ),
              'enable' => 
              array (
                'description' => '是否开启删除保护：开启为true，关闭为false。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '0527ac9a-c899-4341-a21a-xxxxxxxxx',
              ),
              'namespace' => 
              array (
                'description' => '资源所在的namespace。',
                'type' => 'string',
                'example' => 'default',
              ),
              'resource_type' => 
              array (
                'description' => '删除保护的资源类型。',
                'type' => 'string',
                'example' => 'namespaces或services',
              ),
              'resources' => 
              array (
                'description' => '删除保护状态变更的资源列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '删除保护状态变更的资源实例名称。',
                  'type' => 'string',
                  'example' => 'test1',
                ),
              ),
              'protection' => 
              array (
                'description' => '是否开启删除保护：开启为enable，关闭为disable。',
                'type' => 'string',
                'example' => 'enable或disable',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0527ac9a-c899-4341-a21a-xxxxxxxxx\\",\\n  \\"namespace\\": \\"default\\",\\n  \\"resource_type\\": \\"namespaces或services\\",\\n  \\"resources\\": [\\n    \\"test1\\"\\n  ],\\n  \\"protection\\": \\"enable或disable\\"\\n}","type":"json"}]',
      'title' => '更新指定资源的删除保护状态',
    ),
    'DescribeResourcesDeleteProtection' => 
    array (
      'summary' => '查询指定资源是否开启删除保护，当前支持查询的删除保护资源包括namespaces和services。',
      'path' => '/clusters/{ClusterId}/resources/{ResourceType}/protection',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '198785',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcskCWOUHM',
          1 => 'FEATUREcskEUXDVA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '目标集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c82e6987e2961451182edacd74faf****',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '删除保护的资源类型，支持namespaces和services。',
            'type' => 'string',
            'required' => true,
            'example' => 'namespaces',
            'enum' => 
            array (
              0 => 'namespaces',
              1 => 'services',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询资源所在的Namespace。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        3 => 
        array (
          'name' => 'resources',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的目标资源名称，多个资源以英文半角逗号（,）分割。',
            'type' => 'string',
            'required' => false,
            'example' => 'test1,test2',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '指定资源的删除保护状态列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'name' => 
                array (
                  'description' => '资源实例名称。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'test',
                ),
                'namespace' => 
                array (
                  'description' => '查询资源所在的Namespace。',
                  'type' => 'string',
                  'example' => 'default',
                ),
                'resource' => 
                array (
                  'description' => '删除保护的资源类型。',
                  'type' => 'string',
                  'example' => 'namespaces',
                ),
                'protection' => 
                array (
                  'description' => '是否开启删除保护。
- true：开启。
- false：关闭。

默认值：false。',
                  'type' => 'boolean',
                  'example' => 'false',
                ),
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"[\\n  {\\n    \\"name\\": \\"test\\",\\n    \\"namespace\\": \\"default\\",\\n    \\"resource\\": \\"namespaces\\",\\n    \\"protection\\": false\\n  }\\n]","type":"json"}]',
      'title' => '查询指定资源是否开启删除保护',
    ),
    'DescribeExternalAgent' => 
    array (
      'summary' => '根据集群ID查询集群中部署注册集群的代理配置。',
      'path' => '/k8s/{ClusterId}/external/agent/deployment',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c106f377e16f34eb1808d6b9362c9****',
          ),
        ),
        1 => 
        array (
          'name' => 'PrivateIpAddress',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否获取内网访问凭据。  true：获取内网连接凭据 false：获取公网连接凭据 默认值：false。',
            'description' => '是否获取内网访问凭据。

- `true`：仅获取内网连接凭据。
- `false`：仅获取公网连接凭据。

默认值：`false`。',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'AgentMode',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'agent模式',
            'description' => 'Agent权限模式。

admin：管理员模式，拥有所有权限。
restricted：受限模式，仅拥有部分权限。
默认值：admin。',
            'type' => 'string',
            'required' => false,
            'example' => 'admin',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回数据体。',
            'description' => '返回数据体。',
            'type' => 'object',
            'properties' => 
            array (
              'config' => 
              array (
                'title' => '代理配置。',
                'description' => 'YAML格式的代理配置。',
                'type' => 'string',
                'example' => 'apiVersion: v1****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"config\\": \\"apiVersion: v1****\\"\\n}","errorExample":""},{"type":"xml","example":"<config>apiVersion: v1****</config>","errorExample":""}]',
      'title' => '查询集群代理',
      'description' => '关于集群接入的更多信息，请参见[注册外部Kubernetes集群](~~121053~~)。',
    ),
    'CreateKubernetesTrigger' => 
    array (
      'summary' => '为应用创建触发器。',
      'path' => '/triggers',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'title' => '请求体参数',
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'cluster_id' => 
              array (
                'title' => '集群ID。',
                'description' => '集群ID。',
                'type' => 'string',
                'required' => true,
                'example' => 'c5cdf7e3938bc4f8eb0e44b21a80f****',
              ),
              'project_id' => 
              array (
                'title' => '项目名称。',
                'description' => '触发器项目名称。

由应用所在命名空间及应用名称组成，格式为`${namespace}/${name}`。

取值示例：`default/test-app`。',
                'type' => 'string',
                'required' => true,
                'example' => 'default/test-app',
              ),
              'action' => 
              array (
                'title' => '触发器行为',
                'description' => '触发器行为，取值：

`redeploy`：重新部署`project_id`中定义的资源。',
                'type' => 'string',
                'required' => true,
                'example' => 'redeploy',
              ),
              'type' => 
              array (
                'title' => '触发器类型。默认deployment。',
                'description' => '触发器类型。取值：

- `deployment`：针对无状态应用的触发器。 

- `application`：针对应用中心应用的触发器。

默认值：`deployment`。',
                'type' => 'string',
                'required' => false,
                'example' => 'deployment',
              ),
            ),
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
            'title' => '返回数据体。',
            'description' => '返回数据体。',
            'type' => 'object',
            'properties' => 
            array (
              'id' => 
              array (
                'title' => '触发器ID。',
                'description' => '触发器ID。',
                'type' => 'string',
                'example' => '111',
              ),
              'cluster_id' => 
              array (
                'title' => '集群ID。',
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'c5cdf7e3938bc4f8eb0e44b21a80f****',
              ),
              'project_id' => 
              array (
                'title' => '触发器项目名称。',
                'description' => '触发器项目名称。',
                'type' => 'string',
                'example' => 'default/test-app',
              ),
              'type' => 
              array (
                'title' => '触发器类型。默认值为 deployment 。',
                'description' => '触发器类型。

取值：

- `deployment`：针对无状态应用的触发器。 

- `application`：针对应用中心应用的触发器。
',
                'type' => 'string',
                'example' => 'deployment',
              ),
              'action' => 
              array (
                'title' => '触发器行为。',
                'description' => '触发器行为。例如，`redeploy`：重新部署。',
                'type' => 'string',
                'example' => 'redeploy',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"id\\": \\"111\\",\\n  \\"cluster_id\\": \\"c5cdf7e3938bc4f8eb0e44b21a80f****\\",\\n  \\"project_id\\": \\"default/test-app\\",\\n  \\"type\\": \\"deployment\\",\\n  \\"action\\": \\"redeploy\\"\\n}","errorExample":""},{"type":"xml","example":"<id>111</id>\\n<cluster_id>c5cdf7e3938bc4f8eb0e44b21a80f****</cluster_id>\\n<project_id>default/test-app</project_id>\\n<type>deployment</type>\\n<action>redeploy</action>","errorExample":""}]',
      'title' => '创建触发器',
    ),
    'ResumeComponentUpgrade' => 
    array (
      'summary' => '调用ResumeComponentUpgrade重新启动被暂停的组件升级任务。',
      'path' => '/clusters/{clusterid}/components/{componentid}/resume',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '378',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcskEUXDVA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'clusterid',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c5b5e80b0b64a4bf6939d2d8fbbc5****',
          ),
        ),
        1 => 
        array (
          'name' => 'componentid',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '组件ID。',
            'description' => '组件ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'metric-server',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
        '5XX' => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'substitutions' => 
        array (
          0 => 'CS::2015-12-15::ResumeTask',
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '重新开始组件升级',
    ),
    'PauseComponentUpgrade' => 
    array (
      'summary' => '调用PauseComponentUpgrade暂停组件升级。',
      'path' => '/clusters/{clusterid}/components/{componentid}/pause',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '381',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcskEUXDVA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'clusterid',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c82e6987e2961451182edacd74faf****',
          ),
        ),
        1 => 
        array (
          'name' => 'componentid',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '组件ID。',
            'description' => '组件ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'metric-server',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
        '5XX' => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'substitutions' => 
        array (
          0 => 'CS::2015-12-15::PauseTask',
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '暂停组件升级',
    ),
    'GetKubernetesTrigger' => 
    array (
      'summary' => '根据应用名称查询该应用的触发器。',
      'path' => '/triggers/{ClusterId}',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c5cdf7e3938bc4f8eb0e44b21a80f****',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '应用所属命名空间。',
            'description' => '命名空间名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'default',
          ),
        ),
        2 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '应用类型。',
            'description' => '触发器类型。取值：

- `deployment`：针对无状态应用的触发器。 

- `application`：针对应用中心应用的触发器。

默认值：`deployment`。

当不指定触发器类型时，查询结果将不过滤触发器类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'deployment',
          ),
        ),
        3 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '应用名称。',
            'description' => '应用名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'web-server',
          ),
        ),
        4 => 
        array (
          'name' => 'action',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '触发器行为。',
            'description' => '触发器行为，取值：

`redeploy`：重新部署`project_id`中定义的资源。

当不指定触发器行为时，查询结果将不过滤触发器行为。',
            'type' => 'string',
            'required' => false,
            'example' => 'redeploy',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回参数。',
            'description' => '触发器查询结果详情列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '触发器详情。',
              'type' => 'object',
              'properties' => 
              array (
                'id' => 
                array (
                  'title' => '触发器ID。',
                  'description' => '触发器ID。',
                  'type' => 'string',
                  'example' => '1234',
                ),
                'name' => 
                array (
                  'title' => '触发器名称。',
                  'description' => '触发器名称。',
                  'type' => 'string',
                  'example' => 'test',
                ),
                'cluster_id' => 
                array (
                  'title' => '集群ID',
                  'description' => '集群ID。',
                  'type' => 'string',
                  'example' => 'c259f563386444ebb8d7**',
                ),
                'project_id' => 
                array (
                  'title' => '触发器项目名称',
                  'description' => '触发器项目名称。

由应用所在命名空间及应用名称组成，格式为`${namespace}/${name}`，取值示例：default/test-app。',
                  'type' => 'string',
                  'example' => 'default/test-app',
                ),
                'type' => 
                array (
                  'title' => '触发器类型。',
                  'description' => '触发器类型。

取值：

- `deployment`：针对无状态应用的触发器。 

- `application`：针对应用中心应用的触发器。

默认值：`deployment`。',
                  'type' => 'string',
                  'example' => 'deployment',
                ),
                'action' => 
                array (
                  'title' => '触发器行为',
                  'description' => '触发器行为，取值：

`redeploy`: 重新部署project_id中定义的资源。',
                  'type' => 'string',
                  'example' => 'redeploy',
                ),
                'token' => 
                array (
                  'title' => 'Token',
                  'description' => 'Token',
                  'type' => 'string',
                  'example' => 'eyJhbGci***',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"[\\n  {\\n    \\"id\\": \\"1234\\",\\n    \\"name\\": \\"test\\",\\n    \\"cluster_id\\": \\"c259f563386444ebb8d7**\\",\\n    \\"project_id\\": \\"default/test-app\\",\\n    \\"type\\": \\"deployment\\",\\n    \\"action\\": \\"redeploy\\",\\n    \\"token\\": \\"eyJhbGci***\\"\\n  }\\n]","errorExample":""},{"type":"xml","example":"<0>\\n    <id>1234</id>\\n    <name>test</name>\\n    <cluster_id>c259f563386444ebb8d7**</cluster_id>\\n    <project_id>default/test-app</project_id>\\n    <type>deployment</type>\\n    <action>redeploy</action>\\n</0>","errorExample":""}]',
      'title' => '查询触发器',
    ),
    'DescribeClusters' => 
    array (
      'summary' => '查看容器服务中创建的所有集群（包括Swarm和Kubernetes集群）。',
      'path' => '/clusters',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '根据集群Name进行模糊匹配查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
            'title' => '集群名称。',
          ),
        ),
        1 => 
        array (
          'name' => 'clusterType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'ManagedKubernetes',
            'title' => '集群类型。',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'array',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '348D4C9C-9105-4A1B-A86E-B58F0F875575',
                'index' => 200,
              ),
              'clusters' => 
              array (
                'description' => '集群详情列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'created' => 
                    array (
                      'description' => '集群的创建时间。',
                      'type' => 'string',
                      'example' => '2019-11-25T15:50:20+08:00',
                      'index' => 200,
                    ),
                    'security_group_id' => 
                    array (
                      'description' => '集群安全组ID。
',
                      'type' => 'string',
                      'example' => 'sg-2zedf74ifulatvx0****',
                      'index' => 200,
                    ),
                    'docker_version' => 
                    array (
                      'description' => '集群使用的Docker版本。',
                      'type' => 'string',
                      'example' => '18.09.2',
                      'index' => 200,
                    ),
                    'master_url' => 
                    array (
                      'description' => '连接集群的endpoint地址，包括api_server_endpoint、dashboard_endpoint、mirana_endpoint、reverse_tunnel_endpoint和intranet_api_server_endpoint。更多详细信息，参见[SSH访问Kubernetes集群](~~86491~~)。                           ',
                      'type' => 'string',
                      'example' => '"{\\"api_server_endpoint\\":\\"https://47.93.xx.xxx:6443https://mirana.cs-cn-beijing.aliyuncs.com:4243https://192.xxx.x.xx:6443\\"}",   "external_loadbalancer_id": "lb-2ze3buguz3gx9920z****"',
                      'index' => 200,
                    ),
                    'meta_data' => 
                    array (
                      'description' => '集群元数据信息。',
                      'type' => 'string',
                      'example' => '***',
                      'index' => 200,
                    ),
                    'cluster_id' => 
                    array (
                      'description' => '集群ID。',
                      'type' => 'string',
                      'example' => 'cb95aa626a47740afbf6aa099b650****',
                      'index' => 200,
                    ),
                    'external_loadbalancer_id' => 
                    array (
                      'description' => '集群负载均衡服务的ID。',
                      'type' => 'string',
                      'example' => 'lb-2ze3buguz3gx9920z****',
                      'index' => 200,
                    ),
                    'network_mode' => 
                    array (
                      'description' => '集群网络模式（VPC网络：vpc）。',
                      'type' => 'string',
                      'example' => 'vpc',
                      'index' => 200,
                    ),
                    'zone_id' => 
                    array (
                      'description' => '集群所在地域的Zone的ID。',
                      'type' => 'string',
                      'example' => 'cn-beijing-a',
                      'index' => 200,
                    ),
                    'deletion_protection' => 
                    array (
                      'description' => '是否开启集群删除保护，防止通过控制台或api误删除集群。',
                      'type' => 'boolean',
                      'example' => 'true',
                      'index' => 200,
                    ),
                    'current_version' => 
                    array (
                      'description' => '集群当前版本。
',
                      'type' => 'string',
                      'example' => '1.14.8-aliyun.1',
                      'index' => 200,
                    ),
                    'updated' => 
                    array (
                      'description' => '最后更新时间。',
                      'type' => 'string',
                      'example' => '2020-01-13T23:01:03+08:00',
                      'index' => 200,
                    ),
                    'resource_group_id' => 
                    array (
                      'description' => '集群资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-acfmyvw3wjm****',
                      'index' => 200,
                    ),
                    'cluster_type' => 
                    array (
                      'description' => '集群类型。',
                      'type' => 'string',
                      'example' => 'Kubernetes',
                      'index' => 200,
                    ),
                    'region_id' => 
                    array (
                      'description' => '集群所在地域ID。',
                      'type' => 'string',
                      'example' => 'cn-beijing',
                      'index' => 200,
                    ),
                    'vpc_id' => 
                    array (
                      'description' => '专有网络(VPC) ID。',
                      'type' => 'string',
                      'example' => 'vpc-2zecuu62b9zw7a7qn****',
                      'index' => 200,
                    ),
                    'data_disk_size' => 
                    array (
                      'description' => '数据盘大小，单位GB。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                      'index' => 200,
                    ),
                    'state' => 
                    array (
                      'description' => '集群状态，running为运行状态，filed和stoped为异常状态。',
                      'type' => 'string',
                      'example' => 'running',
                      'index' => 200,
                    ),
                    'size' => 
                    array (
                      'description' => '节点数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '4',
                      'index' => 200,
                    ),
                    'vswitch_id' => 
                    array (
                      'description' => '虚拟交换机(VSwitch) ID。',
                      'type' => 'string',
                      'example' => 'vsw-2zete8s4qocqg0mf6****',
                      'index' => 200,
                    ),
                    'vswitch_cidr' => 
                    array (
                      'description' => '虚拟交换机(VSwitch)的网络前缀。',
                      'type' => 'string',
                      'example' => '"26"',
                      'index' => 200,
                    ),
                    'name' => 
                    array (
                      'description' => '集群名称。',
                      'type' => 'string',
                      'example' => 'my-test-Kubernetes-cluster',
                      'index' => 200,
                    ),
                    'data_disk_category' => 
                    array (
                      'description' => '数据盘类型。',
                      'type' => 'string',
                      'example' => 'cloud',
                      'index' => 200,
                    ),
                    'tags' => 
                    array (
                      'description' => '集群标签。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'key' => 
                          array (
                            'description' => '集群标签名称。',
                            'type' => 'string',
                            'example' => '2',
                            'index' => 200,
                          ),
                          'value' => 
                          array (
                            'description' => '集群标签值。',
                            'type' => 'string',
                            'example' => '3',
                            'index' => 200,
                          ),
                        ),
                      ),
                      'index' => 200,
                      'itemName' => 'tags',
                    ),
                  ),
                ),
                'index' => 200,
                'itemName' => 'clusterDetail',
              ),
            ),
            'title' => '返回数据体。',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'cluster_id' => 
                array (
                  'title' => '集群ID。',
                  'type' => 'string',
                ),
                'cluster_type' => 
                array (
                  'title' => '集群类型。',
                  'type' => 'string',
                ),
                'created' => 
                array (
                  'title' => '集群创建时间。',
                  'type' => 'string',
                ),
                'current_version' => 
                array (
                  'title' => '集群当前版本。',
                  'type' => 'string',
                ),
                'data_disk_category' => 
                array (
                  'title' => '节点系统盘类型。',
                  'type' => 'string',
                ),
                'data_disk_size' => 
                array (
                  'title' => '节点系统盘大小。',
                  'type' => 'integer',
                  'format' => 'int64',
                ),
                'deletion_protection' => 
                array (
                  'title' => '集群是否开启删除保护。',
                  'type' => 'boolean',
                ),
                'docker_version' => 
                array (
                  'title' => '容器运行时版本。',
                  'type' => 'string',
                ),
                'external_loadbalancer_id' => 
                array (
                  'title' => '集群Ingerss SLB实例的ID。',
                  'type' => 'string',
                ),
                'init_version' => 
                array (
                  'title' => '集群创建时版本。',
                  'type' => 'string',
                ),
                'master_url' => 
                array (
                  'title' => '集群的endpoint地址。',
                  'type' => 'string',
                ),
                'meta_data' => 
                array (
                  'title' => '集群元数据。',
                  'type' => 'string',
                ),
                'name' => 
                array (
                  'title' => '集群名称。',
                  'type' => 'string',
                ),
                'network_mode' => 
                array (
                  'title' => '集群使用的网络类型。',
                  'type' => 'string',
                ),
                'private_zone' => 
                array (
                  'title' => '集群是否开启Private Zone，默认false。',
                  'type' => 'boolean',
                ),
                'profile' => 
                array (
                  'title' => '集群标识，区分是否为边缘托管版。',
                  'type' => 'string',
                ),
                'region_id' => 
                array (
                  'title' => '集群所在地域ID。',
                  'type' => 'string',
                ),
                'resource_group_id' => 
                array (
                  'title' => '集群资源组ID。',
                  'type' => 'string',
                ),
                'security_group_id' => 
                array (
                  'title' => '集群安全组ID。',
                  'type' => 'string',
                ),
                'size' => 
                array (
                  'title' => '集群内实例数量。',
                  'type' => 'integer',
                  'format' => 'int64',
                ),
                'state' => 
                array (
                  'title' => '集群运行状态。',
                  'type' => 'string',
                ),
                'subnet_cidr' => 
                array (
                  'title' => 'POD网络。',
                  'type' => 'string',
                ),
                'tags' => 
                array (
                  'title' => '集群标签。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'key' => 
                      array (
                        'title' => '标签名。',
                        'type' => 'string',
                      ),
                      'value' => 
                      array (
                        'title' => '标签值。',
                        'type' => 'string',
                      ),
                    ),
                  ),
                ),
                'updated' => 
                array (
                  'title' => '集群更新时间。',
                  'type' => 'string',
                ),
                'vpc_id' => 
                array (
                  'title' => '集群使用的VPC ID。',
                  'type' => 'string',
                ),
                'vswitch_cidr' => 
                array (
                  'title' => '虚拟交换机网络ID。',
                  'type' => 'string',
                ),
                'vswitch_id' => 
                array (
                  'title' => '节点使用的Vswitch ID。',
                  'type' => 'string',
                ),
                'worker_ram_role_name' => 
                array (
                  'title' => '集群Worker节点RAM角色名称。',
                  'type' => 'string',
                ),
                'zone_id' => 
                array (
                  'title' => '集群所在Region内的区域ID。',
                  'type' => 'string',
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'substitutions' => 
        array (
          0 => 'CS::2015-12-15::DescribeClustersV1',
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"348D4C9C-9105-4A1B-A86E-B58F0F875575\\",\\n  \\"clusters\\": [\\n    {\\n      \\"created\\": \\"2019-11-25T15:50:20+08:00\\",\\n      \\"security_group_id\\": \\"sg-2zedf74ifulatvx0****\\",\\n      \\"docker_version\\": \\"18.09.2\\",\\n      \\"master_url\\": \\"\\\\\\"{\\\\\\\\\\\\\\"api_server_endpoint\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"https://47.93.xx.xxx:6443https://mirana.cs-cn-beijing.aliyuncs.com:4243https://192.xxx.x.xx:6443\\\\\\\\\\\\\\"}\\\\\\",   \\\\\\"external_loadbalancer_id\\\\\\": \\\\\\"lb-2ze3buguz3gx9920z****\\\\\\"\\",\\n      \\"meta_data\\": \\"***\\",\\n      \\"cluster_id\\": \\"cb95aa626a47740afbf6aa099b650****\\",\\n      \\"external_loadbalancer_id\\": \\"lb-2ze3buguz3gx9920z****\\",\\n      \\"network_mode\\": \\"vpc\\",\\n      \\"zone_id\\": \\"cn-beijing-a\\",\\n      \\"deletion_protection\\": true,\\n      \\"current_version\\": \\"1.14.8-aliyun.1\\",\\n      \\"updated\\": \\"2020-01-13T23:01:03+08:00\\",\\n      \\"resource_group_id\\": \\"rg-acfmyvw3wjm****\\",\\n      \\"cluster_type\\": \\"Kubernetes\\",\\n      \\"region_id\\": \\"cn-beijing\\",\\n      \\"vpc_id\\": \\"vpc-2zecuu62b9zw7a7qn****\\",\\n      \\"data_disk_size\\": 0,\\n      \\"state\\": \\"running\\",\\n      \\"size\\": 4,\\n      \\"vswitch_id\\": \\"vsw-2zete8s4qocqg0mf6****\\",\\n      \\"vswitch_cidr\\": \\"\\\\\\"26\\\\\\"\\",\\n      \\"name\\": \\"my-test-Kubernetes-cluster\\",\\n      \\"data_disk_category\\": \\"cloud\\",\\n      \\"tags\\": [\\n        {\\n          \\"key\\": \\"2\\",\\n          \\"value\\": \\"3\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<0>\\n    <name>sl-numa</name>\\n    <cluster_id>cd62be8675b514f278163cf750acb****</cluster_id>\\n    <size>4</size>\\n    <region_id>cn-shenzhen</region_id>\\n    <state>running</state>\\n    <cluster_type>Kubernetes</cluster_type>\\n    <current_version>1.16.6-aliyun.1</current_version>\\n    <resource_group_id>rg-acfmyvw3wjm****</resource_group_id>\\n    <instance_type/>\\n    <vswitch_id>vsw-wz9uwxhawmtzg7u9h****,vsw-wz9uwxhawmtzg7u9h****,vsw-wz9uwxhawmtzg7u9h****,vsw-wz9uwxhawmtzg7u9h****</vswitch_id>\\n    <data_disk_category>cloud</data_disk_category>\\n    <security_group_id>sg-wz956lln6kknnwlw****</security_group_id>\\n    <tags>\\n        <key>ack.aliyun.com</key>\\n        <value>cd62be8675b514f278163cf750acb****</value>\\n    </tags>\\n    <zone_id>cn-shenzhen-e</zone_id>\\n    <docker_version>19.03.5</docker_version>\\n    <deletion_protection>false</deletion_protection>\\n</0>\\n<1>\\n    <name>sl-terway</name>\\n    <cluster_id>c5b269738d1f5427ebd32884fc59c****</cluster_id>\\n    <size>5</size>\\n    <region_id>cn-shenzhen</region_id>\\n    <state>running</state>\\n    <cluster_type>Kubernetes</cluster_type>\\n    <current_version>1.16.6-aliyun.1</current_version>\\n    <vpc_id>vpc-wz984yvbd6lck22z3****</vpc_id>\\n    <vswitch_id>vsw-wz9uwxhawmtzg7u9h****,vsw-wz9uwxhawmtzg7u9h****,vsw-wz9uwxhawmtzg7u9h****,vsw-wz9uwxhawmtzg7u9h****</vswitch_id>\\n    <security_group_id>sg-wz9e8pvnjalx1tm1****</security_group_id>\\n    <tags>\\n        <key>ack.aliyun.com</key>\\n        <value>c5b269738d1f5427ebd32884fc59c****</value>\\n    </tags>\\n    <zone_id>cn-shenzhen-e</zone_id>\\n    <docker_version>19.03.5</docker_version>\\n    <deletion_protection>false</deletion_protection>\\n</1>","errorExample":""}]',
      'title' => '（旧）查询用户所有集群实例',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeClusterV2UserKubeconfig' => 
    array (
      'summary' => '获取集群kubeconfig接口',
      'path' => '/api/v2/k8s/{ClusterId}/user_config',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'PrivateIpAddress',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否为内网访问。',
            'type' => 'boolean',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回数据体。',
            'type' => 'object',
            'properties' => 
            array (
              'config' => 
              array (
                'title' => 'kubeconfig内容。',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'DescribeClusterAddonUpgradeStatus' => 
    array (
      'summary' => '调用DescribeClusterAddonUpgradeStatus查询集群组件升级状态。',
      'path' => '/clusters/{ClusterId}/components/{ComponentId}/upgradestatus',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c106f377e16f34eb1808d6b9362c9****',
          ),
        ),
        1 => 
        array (
          'name' => 'ComponentId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '组件ID。',
            'description' => '组件ID，例如：nginx-ingress-controller、flexvolume、metrics-server。

集群支持的组件，可通过API `DescribeAddons` 进行查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'cloud-controller-manager',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '组件升级状态',
            'description' => '返回体参数。',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'addon_info' => 
                array (
                  'title' => '组件详情',
                  'description' => '组件信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'component_name' => 
                    array (
                      'title' => '组件名称',
                      'description' => '组件名称。',
                      'type' => 'string',
                      'example' => 'cloud-controller-manager',
                    ),
                    'version' => 
                    array (
                      'title' => '组件版本',
                      'description' => '组件当前版本。',
                      'type' => 'string',
                      'example' => 'v1.9.3.340-g9830b58-aliyun',
                    ),
                    'ready_to_upgrade' => 
                    array (
                      'title' => '是否满足升级条件',
                      'description' => '是否满足升级条件。取值：

- `true`：满足升级条件。
- `false`：不满足升级条件。',
                      'type' => 'string',
                      'example' => 'true',
                    ),
                  ),
                ),
                'tasks' => 
                array (
                  'title' => '升级任务详情',
                  'description' => '升级任务详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'created_at' => 
                    array (
                      'title' => '升级开始时间',
                      'description' => '	
升级开始时间。',
                      'type' => 'string',
                      'example' => '0001-01-01T00:00:00Z',
                    ),
                    'finished_at' => 
                    array (
                      'title' => '升级完成时间',
                      'description' => '升级完成时间。',
                      'type' => 'string',
                      'example' => '0001-01-01T00:00:00Z',
                    ),
                    'status' => 
                    array (
                      'title' => '升级任务状态',
                      'description' => '升级任务状态。',
                      'type' => 'string',
                      'example' => 'Success',
                    ),
                    'is_canceled' => 
                    array (
                      'title' => '任务是否被取消',
                      'description' => '升级任务是否被取消。取值：

- `true`：任务被取消。
- `false`：任务未被取消。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                  ),
                ),
              ),
              'description' => '组件升级状态详情。',
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'substitutions' => 
        array (
          0 => 'CS::2015-12-15::GetClusterAddonInstance',
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"key\\": {\\n    \\"addon_info\\": {\\n      \\"component_name\\": \\"cloud-controller-manager\\",\\n      \\"version\\": \\"v1.9.3.340-g9830b58-aliyun\\",\\n      \\"ready_to_upgrade\\": \\"true\\"\\n    },\\n    \\"tasks\\": {\\n      \\"created_at\\": \\"0001-01-01T00:00:00Z\\",\\n      \\"finished_at\\": \\"0001-01-01T00:00:00Z\\",\\n      \\"status\\": \\"Success\\",\\n      \\"is_canceled\\": false\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<cloud-controller-manager>\\n    <tasks>\\n        <created_at>2020-12-28T16:05:32Z</created_at>\\n        <finished_at>2020-12-28T16:06:54Z</finished_at>\\n        <is_canceled>false</is_canceled>\\n        <status>Success</status>\\n    </tasks>\\n    <addon_info>\\n        <component_name>cloud-controller-manager</component_name>\\n        <version>v1.9.3.340-g9830b58-aliyun</version>\\n        <ready_to_upgrade>true</ready_to_upgrade>\\n    </addon_info>\\n</cloud-controller-manager>","errorExample":""}]',
      'title' => '查询集群Addons升级状态',
    ),
    'CancelComponentUpgrade' => 
    array (
      'summary' => '取消集群组件升级。',
      'path' => '/clusters/{clusterId}/components/{componentId}/cancel',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '413',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcskEUXDVA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'clusterId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群ID。',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c82e6987e2961451182edacd74faf****',
          ),
        ),
        1 => 
        array (
          'name' => 'componentId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '组件ID。',
            'description' => '组件ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'metric-server',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
        '5XX' => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'substitutions' => 
        array (
          0 => 'CS::2015-12-15::CancelTask',
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '取消升级集群Addons',
    ),
    'DeleteKubernetesTrigger' => 
    array (
      'summary' => '根据应用触发器ID，删除应用触发器。',
      'path' => '/triggers/revoke/{Id}',
      'methods' => 
      array (
        0 => 'delete',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'Id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '触发器ID。',
            'description' => '触发器ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c5cdf7e3938bc4f8eb0e44b21a80f****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除触发器',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'cs.cn-shenzhen-finance-1.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'cs.cn-qingdao.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'cs.cn-beijing.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'cs.cn-zhangjiakou.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'cs.cn-huhehaote.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'cs.cn-wulanchabu.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'cs.cn-hangzhou.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'cs.cn-shanghai.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'cs.cn-shenzhen.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-guangzhou',
      'endpoint' => 'cs.cn-guangzhou.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'cs.cn-chengdu.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'cs.cn-hongkong.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'cs.ap-northeast-1.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'cs.ap-southeast-1.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'cs.ap-southeast-2.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'cs.ap-southeast-3.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'cs.ap-southeast-5.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'cs.us-east-1.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'cs.us-west-1.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'cs.eu-west-1.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'cs.eu-central-1.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'cs.ap-south-1.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'cs.me-east-1.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'cs-vpc.cn-hangzhou-finance.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'cs.cn-shanghai-finance-1.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'cs.aliyuncs.com',
    ),
  ),
);
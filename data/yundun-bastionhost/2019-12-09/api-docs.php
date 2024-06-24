<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Yundun-bastionhost',
    'version' => '2019-12-09',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 69863,
      'title' => '堡垒机实例（仅支持V3.2.X版本使用）',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeInstanceAttribute',
        1 => 'DescribeInstances',
        2 => 'ConfigInstanceSecurityGroups',
        3 => 'ConfigInstanceWhiteList',
        4 => 'StartInstance',
        5 => 'EnableInstancePublicAccess',
        6 => 'DisableInstancePublicAccess',
        7 => 'ModifyInstanceAttribute',
        8 => 'MoveResourceGroup',
      ),
    ),
    1 => 
    array (
      'id' => 69873,
      'title' => '标签（仅支持V3.2.X版本使用）',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListTagKeys',
        1 => 'ListTagResources',
        2 => 'UntagResources',
        3 => 'TagResources',
      ),
    ),
    2 => 
    array (
      'id' => 69878,
      'title' => '地域（仅支持V3.2.X版本使用）',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeRegions',
      ),
    ),
    3 => 
    array (
      'id' => 174187,
      'title' => '主机（仅支持V3.2.17及以上版本使用）',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateHost',
        1 => 'GetHost',
        2 => 'ListHosts',
        3 => 'DeleteHost',
        4 => 'ModifyHostsPort',
        5 => 'ModifyHostsActiveAddressType',
        6 => 'ModifyHost',
      ),
    ),
    4 => 
    array (
      'id' => 191420,
      'title' => '数据库（仅支持V3.2.40及以上版本使用）',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateDatabase',
        1 => 'ModifyDatabase',
        2 => 'GetDatabase',
        3 => 'ListDatabases',
        4 => 'DeleteDatabase',
      ),
    ),
    5 => 
    array (
      'id' => 191426,
      'title' => '网络域（仅支持V3.2.40及以上版本使用）',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateNetworkDomain',
        1 => 'GetNetworkDomain',
        2 => 'ListNetworkDomains',
        3 => 'DeleteNetworkDomain',
        4 => 'ModifyNetworkDomain',
        5 => 'MoveHostsToNetworkDomain',
        6 => 'MoveDatabasesToNetworkDomain',
      ),
    ),
    6 => 
    array (
      'id' => 174212,
      'title' => '主机账户（仅支持V3.2.17及以上版本使用）',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateHostAccount',
        1 => 'GetHostAccount',
        2 => 'ListHostAccounts',
        3 => 'ModifyHostAccount',
        4 => 'DeleteHostAccount',
        5 => 'ResetHostAccountCredential',
      ),
    ),
    7 => 
    array (
      'id' => 191436,
      'title' => '数据库账户（仅支持V3.2.40及以上版本使用）',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateDatabaseAccount',
        1 => 'ModifyDatabaseAccount',
        2 => 'GetDatabaseAccount',
        3 => 'ListDatabaseAccounts',
        4 => 'ListDatabaseAccountsForUserGroup',
        5 => 'DeleteDatabaseAccount',
      ),
    ),
    8 => 
    array (
      'id' => 69839,
      'title' => '用户（仅支持V3.2.17及以上版本使用）',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateUser',
        1 => 'GetUser',
        2 => 'ListUsers',
        3 => 'ModifyUser',
        4 => 'DeleteUser',
        5 => 'CreateUserPublicKey',
        6 => 'ListUserPublicKeys',
        7 => 'ModifyUserPublicKey',
        8 => 'DeleteUserPublicKey',
        9 => 'LockUsers',
        10 => 'UnlockUsers',
      ),
    ),
    9 => 
    array (
      'id' => 174213,
      'title' => '用户组（仅支持V3.2.17及以上版本使用）',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateUserGroup',
        1 => 'GetUserGroup',
        2 => 'ListUserGroups',
        3 => 'ModifyUserGroup',
        4 => 'DeleteUserGroup',
        5 => 'AddUsersToGroup',
        6 => 'RemoveUsersFromGroup',
      ),
    ),
    10 => 
    array (
      'id' => 174211,
      'title' => '资产组（仅支持V3.2.17及以上的版本使用）',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateHostGroup',
        1 => 'AddDatabasesToGroup',
        2 => 'AddHostsToGroup',
        3 => 'RemoveDatabasesFromGroup',
        4 => 'DeleteHostGroup',
        5 => 'RemoveHostsFromGroup',
        6 => 'ModifyHostGroup',
        7 => 'GetHostGroup',
        8 => 'ListHostGroups',
      ),
    ),
    11 => 
    array (
      'id' => 174214,
      'title' => '主机授权（仅支持V3.2.17及以上版本使用）',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AttachHostAccountsToUser',
        1 => 'ListHostsForUser',
        2 => 'ListHostAccountsForUser',
        3 => 'DetachHostAccountsFromUser',
        4 => 'DetachHostAccountsFromUserGroup',
        5 => 'DetachHostGroupAccountsFromUser',
        6 => 'AttachHostAccountsToUserGroup',
        7 => 'DetachHostGroupAccountsFromUserGroup',
        8 => 'AttachHostGroupAccountsToUser',
        9 => 'AttachHostGroupAccountsToUserGroup',
        10 => 'ListHostAccountsForUserGroup',
        11 => 'ListHostGroupAccountNamesForUser',
        12 => 'ListHostGroupAccountNamesForUserGroup',
        13 => 'ListHostGroupsForUser',
        14 => 'ListHostGroupsForUserGroup',
        15 => 'ListHostsForUserGroup',
      ),
    ),
    12 => 
    array (
      'id' => 191444,
      'title' => '数据库授权（仅支持V3.2.40及以上版本使用）',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AttachDatabaseAccountsToUser',
        1 => 'ListDatabasesForUser',
        2 => 'DetachDatabaseAccountsFromUserGroup',
        3 => 'ListDatabaseAccountsForUser',
        4 => 'DetachDatabaseAccountsFromUser',
        5 => 'AttachDatabaseAccountsToUserGroup',
        6 => 'ListDatabasesForUserGroup',
      ),
    ),
    13 => 
    array (
      'id' => 191452,
      'title' => '运维令牌（仅支持V3.2.40及以上版本使用）',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListOperationDatabases',
        1 => 'ListOperationHosts',
        2 => 'ListOperationHostAccounts',
        3 => 'ListOperationDatabaseAccounts',
        4 => 'GenerateAssetOperationToken',
        5 => 'RenewAssetOperationToken',
      ),
    ),
    14 => 
    array (
      'id' => 191459,
      'title' => '授权规则（仅支持V3.2.40及以上版本使用）',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateRule',
        1 => 'ModifyRule',
        2 => 'GetRule',
        3 => 'ListRules',
        4 => 'EnableRule',
        5 => 'DisableRule',
        6 => 'DeleteRule',
      ),
    ),
    15 => 
    array (
      'id' => 191467,
      'title' => '控制策略（仅支持V3.2.40及以上版本使用）',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreatePolicy',
        1 => 'ModifyPolicy',
        2 => 'GetPolicy',
        3 => 'ListPolicies',
        4 => 'GetPolicyAssetScope',
        5 => 'SetPolicyProtocolConfig',
        6 => 'SetPolicyCommandConfig',
        7 => 'SetPolicyIPAclConfig',
        8 => 'GetPolicyUserScope',
        9 => 'SetPolicyAccessTimeRangeConfig',
        10 => 'SetPolicyAssetScope',
        11 => 'SetPolicyUserScope',
        12 => 'SetPolicyApprovalConfig',
        13 => 'DeletePolicy',
      ),
    ),
    16 => 
    array (
      'id' => 185552,
      'title' => '审批（仅支持V3.2.37及以上版本使用）',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListApproveCommands',
        1 => 'AcceptApproveCommand',
        2 => 'RejectApproveCommand',
        3 => 'ListOperationTickets',
        4 => 'AcceptOperationTicket',
        5 => 'RejectOperationTicket',
      ),
    ),
    17 => 
    array (
      'id' => 174215,
      'title' => '共享密钥（仅支持V3.2.X版本使用）',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateHostShareKey',
        1 => 'GetHostShareKey',
        2 => 'ListHostShareKeys',
        3 => 'ListHostAccountsForHostShareKey',
        4 => 'ModifyHostShareKey',
        5 => 'AttachHostAccountsToHostShareKey',
        6 => 'DetachHostAccountsFromHostShareKey',
        7 => 'DeleteHostShareKey',
      ),
    ),
    18 => 
    array (
      'id' => 174168,
      'title' => '系统设置（仅支持V3.2.X版本使用）',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetInstanceADAuthServer',
        1 => 'ModifyInstanceADAuthServer',
        2 => 'GetInstanceTwoFactor',
        3 => 'ModifyInstanceTwoFactor',
        4 => 'ModifyInstanceLDAPAuthServer',
        5 => 'GetInstanceLDAPAuthServer',
      ),
    ),
    19 => 
    array (
      'id' => 192919,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'VerifyInstanceLDAPAuthServer',
        1 => 'VerifyInstanceADAuthServer',
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
    'DescribeInstanceAttribute' => 
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
            'description' => '要查询的堡垒机实例所在的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的堡垒机的实例的ID。
 > 可通过调用[DescribeInstances](~~153281~~)接口获取堡垒机实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-78v1ghxxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。


',
                'type' => 'string',
                'example' => '082FAB35-6AB9-4FD5-8750-D36673548E76',
              ),
              'InstanceAttribute' => 
              array (
                'description' => '实例属性信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'VpcId' => 
                  array (
                    'description' => '实例绑定的VPC ID。',
                    'type' => 'string',
                    'example' => 'vpc-bp1c85tzgqu1bf5bxxxxx',
                  ),
                  'VswitchId' => 
                  array (
                    'description' => '实例绑定的交换机ID。',
                    'type' => 'string',
                    'example' => 'vsw-bp1xfwzzfti0kjbfxxxxx',
                  ),
                  'Description' => 
                  array (
                    'description' => '备注信息。',
                    'type' => 'string',
                    'example' => '测试API',
                  ),
                  'ExpireTime' => 
                  array (
                    'description' => '堡垒机实例的到期的时间戳。单位为毫秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1578326400000',
                  ),
                  'ModifyPasswordModule' => 
                  array (
                    'description' => '改密任务功能状态。

- **Enable**：开启
- **Disable**：关闭',
                    'type' => 'string',
                    'example' => 'Enable',
                  ),
                  'EniInstanceId' => 
                  array (
                    'description' => '弹性网卡ID。',
                    'type' => 'string',
                    'example' => 'eni-bp1455jrzwm7moaxxxxx',
                  ),
                  'InstanceId' => 
                  array (
                    'description' => '实例ID。',
                    'type' => 'string',
                    'example' => 'bastionhost-cn-78v1ghxxxxx',
                  ),
                  'InternetEndpoint' => 
                  array (
                    'description' => '公网域名。',
                    'type' => 'string',
                    'example' => '******lwb-public.bastionhost.aliyuncs.com',
                  ),
                  'RegionId' => 
                  array (
                    'description' => '实例所在的地域ID。',
                    'type' => 'string',
                    'example' => 'cn-hangzhou',
                  ),
                  'IntranetEndpoint' => 
                  array (
                    'description' => '内网域名。',
                    'type' => 'string',
                    'example' => '******xalwb.bastionhost.aliyuncs.com',
                  ),
                  'StartTime' => 
                  array (
                    'description' => '堡垒机实例的购买或续费的时间戳。单位为毫秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1577681345000',
                  ),
                  'ResourceGroupId' => 
                  array (
                    'description' => '实例所在的企业资源组的ID。',
                    'type' => 'string',
                    'example' => 'rg-aekzc427db******',
                  ),
                  'NetworkProxyModule' => 
                  array (
                    'description' => '网络域代理状态。
- **Enable**：支持网络域代理模式。
- **Disable**：不支持网络域代理模式。',
                    'type' => 'string',
                    'example' => 'Enable',
                  ),
                  'WebTerminalModule' => 
                  array (
                    'description' => 'Web Terminal状态。
- **Enable**：支持Web远程连接。
- **Disable**：不支持Web远程连接。',
                    'type' => 'string',
                    'example' => 'Enable',
                  ),
                  'DbOperationModule' => 
                  array (
                    'description' => '数据库运维状态。
- **Enable**：支持数据库运维。
- **Disable**：不支持数据库运维。',
                    'type' => 'string',
                    'example' => 'Disable',
                  ),
                  'InstanceStatus' => 
                  array (
                    'description' => '实例状态。取值范围：

- **PENDING**：未初始化
- **CREATING**：创建中 
- **RUNNING**：运行中 
- **EXPIRED**：已过期 
- **CREATE_FAILED**：创建失败
- **UPGRADING**：变配中
- **UPGRADE_FAILED**：变配失败',
                    'type' => 'string',
                    'example' => 'RUNNING',
                  ),
                  'LicenseCode' => 
                  array (
                    'description' => '许可Code。',
                    'type' => 'string',
                    'example' => 'bhah_ent_50_asset',
                  ),
                  'PublicNetworkAccess' => 
                  array (
                    'description' => '公网是否可以访问该堡垒机实例。取值：

- **true**：公网可以访问该堡垒机
- **false**：公网不可访问该堡垒机',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'Storage' => 
                  array (
                    'description' => '已购买堡垒机的存储总量。单位：Byte',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2199023255552',
                  ),
                  'Ports' => 
                  array (
                    'description' => '堡垒机运维端口。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '堡垒机运维端口。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'StandardPort' => 
                        array (
                          'description' => '堡垒机标准端口。取值如下：

- **SSH** ：60022 
- **RDP** ：63389
- **HTTPS** ：443',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '60022',
                        ),
                        'CustomPort' => 
                        array (
                          'description' => '用户自定义端口。

> 仅SSH、RDP支持修改 ，如果未自定义堡垒机运维端口，返回与标准端口一致。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '600xx',
                        ),
                      ),
                    ),
                  ),
                  'PublicExportIps' => 
                  array (
                    'description' => '堡垒机公网出口IP列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '堡垒机公网出口IP。',
                      'type' => 'string',
                      'example' => '[10.162.168.xx/32]',
                    ),
                  ),
                  'PublicWhiteList' => 
                  array (
                    'description' => '堡垒机公网白名单列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '堡垒机公网白名单IP。',
                      'type' => 'string',
                      'example' => '[10.162.168.xx/32]',
                    ),
                  ),
                  'AuthorizedSecurityGroups' => 
                  array (
                    'description' => '已授权的安全组ID列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '已授权的安全组ID。',
                      'type' => 'string',
                      'example' => '[sg-bp14u00sh39jvw5xxxxx]',
                    ),
                  ),
                  'PrivateExportIps' => 
                  array (
                    'description' => '堡垒机内网出口IP列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '堡垒机内网出口IP。',
                      'type' => 'string',
                      'example' => '192.168.xx.xx',
                    ),
                  ),
                  'PublicIps' => 
                  array (
                    'description' => '堡垒机公网IP列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '堡垒机公网IP。',
                      'type' => 'string',
                      'example' => '116.62.xx.xx',
                    ),
                  ),
                  'SecurityGroupIds' => 
                  array (
                    'description' => '实例所属安全组ID列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '实例所属安全组ID。',
                      'type' => 'string',
                      'example' => 'sg-bp15ed6xe1yxeycg7o****',
                    ),
                  ),
                  'PrivateWhiteList' => 
                  array (
                    'description' => '内网白名单IP列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '内网白名单IP。',
                      'type' => 'string',
                      'example' => '192.168.xx.xx',
                    ),
                  ),
                  'Bandwidth' => 
                  array (
                    'description' => '堡垒机实例总带宽。',
                    'type' => 'string',
                    'example' => '30',
                  ),
                  'BandwidthPackage' => 
                  array (
                    'description' => '堡垒机扩展带宽包。',
                    'type' => 'string',
                    'example' => '5',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"082FAB35-6AB9-4FD5-8750-D36673548E76\\",\\n  \\"InstanceAttribute\\": {\\n    \\"VpcId\\": \\"vpc-bp1c85tzgqu1bf5bxxxxx\\",\\n    \\"VswitchId\\": \\"vsw-bp1xfwzzfti0kjbfxxxxx\\",\\n    \\"Description\\": \\"测试API\\",\\n    \\"ExpireTime\\": 1578326400000,\\n    \\"ModifyPasswordModule\\": \\"Enable\\",\\n    \\"EniInstanceId\\": \\"eni-bp1455jrzwm7moaxxxxx\\",\\n    \\"InstanceId\\": \\"bastionhost-cn-78v1ghxxxxx\\",\\n    \\"InternetEndpoint\\": \\"******lwb-public.bastionhost.aliyuncs.com\\",\\n    \\"RegionId\\": \\"cn-hangzhou\\",\\n    \\"IntranetEndpoint\\": \\"******xalwb.bastionhost.aliyuncs.com\\",\\n    \\"StartTime\\": 1577681345000,\\n    \\"ResourceGroupId\\": \\"rg-aekzc427db******\\",\\n    \\"NetworkProxyModule\\": \\"Enable\\",\\n    \\"WebTerminalModule\\": \\"Enable\\",\\n    \\"DbOperationModule\\": \\"Disable\\",\\n    \\"InstanceStatus\\": \\"RUNNING\\",\\n    \\"LicenseCode\\": \\"bhah_ent_50_asset\\",\\n    \\"PublicNetworkAccess\\": true,\\n    \\"Storage\\": 2199023255552,\\n    \\"Ports\\": [\\n      {\\n        \\"StandardPort\\": 60022,\\n        \\"CustomPort\\": 0\\n      }\\n    ],\\n    \\"PublicExportIps\\": [\\n      \\"[10.162.168.xx/32]\\"\\n    ],\\n    \\"PublicWhiteList\\": [\\n      \\"[10.162.168.xx/32]\\"\\n    ],\\n    \\"AuthorizedSecurityGroups\\": [\\n      \\"[sg-bp14u00sh39jvw5xxxxx]\\"\\n    ],\\n    \\"PrivateExportIps\\": [\\n      \\"192.168.xx.xx\\"\\n    ],\\n    \\"PublicIps\\": [\\n      \\"116.62.xx.xx\\"\\n    ],\\n    \\"SecurityGroupIds\\": [\\n      \\"sg-bp15ed6xe1yxeycg7o****\\"\\n    ],\\n    \\"PrivateWhiteList\\": [\\n      \\"192.168.xx.xx\\"\\n    ],\\n    \\"Bandwidth\\": \\"30\\",\\n    \\"BandwidthPackage\\": \\"5\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询实例属性信息',
      'summary' => '查询实例所有的属性信息，例如：实例ID、实例的备注信息。',
    ),
    'DescribeInstances' => 
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
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置从返回结果的第几页开始显示查询结果。默认值为**1**，表示从第1页开始显示。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置分页查询时，每页显示的堡垒机实例的数量。默认值为**10**，表示每页显示10条堡垒机实例信息。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
            'default' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置从返回结果的第几页开始显示查询结果。默认值为**1**，表示从第1页开始显示。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机实例的状态。取值：

- **PENDING**：未初始化

- **CREATING**：创建中 

- **RUNNING**：运行中 

- **EXPIRED**：已过期 

- **CREATE_FAILED**：创建失败

- **UPGRADING**：变配中

- **UPGRADE_FAILED**：变配失败',
            'type' => 'string',
            'required' => false,
            'example' => 'RUNNING',
          ),
        ),
        5 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机实例所在的企业资源组的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfm26ougi****',
          ),
        ),
        6 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '堡垒机实例的ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '堡垒机实例的ID。',
              'type' => 'string',
              'required' => false,
              'example' => '2',
            ),
            'required' => false,
            'example' => 'bastionhost-cn-78v1ghxxxxx',
            'maxItems' => 10,
          ),
        ),
        7 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '堡垒机实例的标签信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '堡垒机实例的标签信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '实例的标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
                'Value' => 
                array (
                  'description' => '实例的标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'testapi',
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
              'TotalCount' => 
              array (
                'description' => '查询到的堡垒机实例的总数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '4',
              ),
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '61D36C55-AAFC-4678-8FAD-34FEF9E7182E',
              ),
              'Instances' => 
              array (
                'description' => '查询到的堡垒机实例的列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'VpcId' => 
                    array (
                      'description' => '堡垒机实例绑定的VPC ID。',
                      'type' => 'string',
                      'example' => 'vpc-bp1c85tzgqu1bf5b****',
                    ),
                    'VswitchId' => 
                    array (
                      'description' => '堡垒机实例绑定的交换机ID。',
                      'type' => 'string',
                      'example' => 'vsw-bp1xfwzzfti0kjbf****',
                    ),
                    'ImageVersion' => 
                    array (
                      'description' => '堡垒机实例镜像的版本。',
                      'type' => 'string',
                      'example' => '3.2.41',
                    ),
                    'PlanCode' => 
                    array (
                      'description' => '堡垒机实例的规格。取值：

- **cloudbastion**：基础版
- **cloudbastion_ha**：企业双擎版',
                      'type' => 'string',
                      'example' => 'cloudbastion_ha',
                    ),
                    'Description' => 
                    array (
                      'description' => '堡垒机实例的备注信息。',
                      'type' => 'string',
                      'example' => '测试API',
                    ),
                    'ExpireTime' => 
                    array (
                      'description' => '堡垒机实例的到期的时间戳。单位为毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1578326400000',
                    ),
                    'Legacy' => 
                    array (
                      'description' => '该堡垒机实例是否为旧版堡垒机实例。取值：

- **true**：表示V2和V3.1系列的堡垒机实例。

- **false**：表示V3.2系列的堡垒机实例。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'InstanceId' => 
                    array (
                      'description' => '堡垒机的实例ID。',
                      'type' => 'string',
                      'example' => 'bastionhost-cn-78v1gh****',
                    ),
                    'InternetEndpoint' => 
                    array (
                      'description' => '堡垒机实例的公网域名。',
                      'type' => 'string',
                      'example' => '******lwb-public.bastionhost.aliyuncs.com',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '堡垒机实例所在的地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'IntranetEndpoint' => 
                    array (
                      'description' => '堡垒机实例的私网域名。',
                      'type' => 'string',
                      'example' => '******lwb.bastionhost.aliyuncs.com',
                    ),
                    'StartTime' => 
                    array (
                      'description' => '堡垒机实例的购买或续费的时间戳。单位为毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1577681345000',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'description' => '堡垒机实例所在的企业资源组的ID。',
                      'type' => 'string',
                      'example' => 'g-acfm26ougi****',
                    ),
                    'InstanceStatus' => 
                    array (
                      'description' => '堡垒机实例的状态。取值：

- **PENDING**：未初始化

- **CREATING**：创建中 

- **RUNNING**：运行中 

- **EXPIRED**：已过期 

- **CREATE_FAILED**：创建失败

- **UPGRADING**：变配中

- **UPGRADE_FAILED**：变配失败',
                      'type' => 'string',
                      'example' => 'RUNNING',
                    ),
                    'LicenseCode' => 
                    array (
                      'description' => '堡垒机实例的许可Code。',
                      'type' => 'string',
                      'example' => 'bhah_ent_50_asset',
                    ),
                    'PublicNetworkAccess' => 
                    array (
                      'description' => '公网是否可以访问该堡垒机实例。取值：

- **true**：公网可以访问该堡垒机
- **false**：公网不可访问该堡垒机',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 4,\\n  \\"RequestId\\": \\"61D36C55-AAFC-4678-8FAD-34FEF9E7182E\\",\\n  \\"Instances\\": [\\n    {\\n      \\"VpcId\\": \\"vpc-bp1c85tzgqu1bf5b****\\",\\n      \\"VswitchId\\": \\"vsw-bp1xfwzzfti0kjbf****\\",\\n      \\"ImageVersion\\": \\"3.2.41\\",\\n      \\"PlanCode\\": \\"cloudbastion_ha\\",\\n      \\"Description\\": \\"测试API\\",\\n      \\"ExpireTime\\": 1578326400000,\\n      \\"Legacy\\": false,\\n      \\"InstanceId\\": \\"bastionhost-cn-78v1gh****\\",\\n      \\"InternetEndpoint\\": \\"******lwb-public.bastionhost.aliyuncs.com\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"IntranetEndpoint\\": \\"******lwb.bastionhost.aliyuncs.com\\",\\n      \\"StartTime\\": 1577681345000,\\n      \\"ResourceGroupId\\": \\"g-acfm26ougi****\\",\\n      \\"InstanceStatus\\": \\"RUNNING\\",\\n      \\"LicenseCode\\": \\"bhah_ent_50_asset\\",\\n      \\"PublicNetworkAccess\\": true\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeInstancesResponse>\\n    <TotalCount>4</TotalCount>\\n    <RequestId>61D36C55-AAFC-4678-8FAD-34FEF9E7182E</RequestId>\\n    <Instances>\\n        <VpcId>vpc-bp1c85tzgqu1bf5b****</VpcId>\\n        <VswitchId>vsw-bp1xfwzzfti0kjbf****</VswitchId>\\n        <ImageVersion>3.0.0</ImageVersion>\\n        <PlanCode>cloudbastion_ha</PlanCode>\\n        <Description>测试API</Description>\\n        <ExpireTime>1578326400000</ExpireTime>\\n        <Legacy>false</Legacy>\\n        <InstanceId>bastionhost-cn-78v1gh****</InstanceId>\\n        <InternetEndpoint>drawvxalwb-public.bastionhost.aliyuncs.com</InternetEndpoint>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <IntranetEndpoint>drawvxalwb.bastionhost.aliyuncs.com</IntranetEndpoint>\\n        <StartTime>1577681345000</StartTime>\\n        <ResourceGroupId>g-acfm26ougi****</ResourceGroupId>\\n        <InstanceStatus>RUNNING</InstanceStatus>\\n        <LicenseCode>bhah_ent_50_asset</LicenseCode>\\n        <PublicNetworkAccess>true</PublicNetworkAccess>\\n    </Instances>\\n</DescribeInstancesResponse>","errorExample":""}]',
      'title' => '查询实例的列表信息',
      'summary' => '查询实例的列表信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ConfigInstanceSecurityGroups' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置请求和接收消息的语言类型，默认为**zh**。取值：

- **zh**：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。
> 可通过调用[DescribeInstances](~~153281~~)接口获取堡垒机实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-78v1gh****',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机实例的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'AuthorizedSecurityGroups',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '已授权的安全组ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '已授权的安全组ID。N的取值范围：1~100。',
              'type' => 'string',
              'required' => false,
              'example' => '2',
            ),
            'required' => true,
            'example' => 'sg-bp14u00sh39jvw5****',
            'maxItems' => 100,
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
            'description' => '响应数据。',
            'type' => 'object',
            'properties' => 
            array (
              'InstanceId' => 
              array (
                'description' => '已配置安全组的堡垒机实例ID。',
                'type' => 'string',
                'example' => 'bastionhost-cn-78v1gh****',
              ),
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '0ECCC399-4D35-48A7-8379-5C6180E66235',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"InstanceId\\": \\"bastionhost-cn-78v1gh****\\",\\n  \\"RequestId\\": \\"0ECCC399-4D35-48A7-8379-5C6180E66235\\"\\n}","errorExample":""},{"type":"xml","example":"<ConfigInstanceSecurityGroupsResponse>\\n    <InstanceId>bastionhost-cn-78v1gh****</InstanceId>\\n    <RequestId>0ECCC399-4D35-48A7-8379-5C6180E66235</RequestId>\\n</ConfigInstanceSecurityGroupsResponse>","errorExample":""}]',
      'title' => '为指定的堡垒机实例配置安全组',
      'summary' => '为指定的堡垒机实例配置安全组。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ConfigInstanceWhiteList' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要配置公网IP地址白名单的堡垒机的实例ID。
> 可通过调用[DescribeInstances](~~153281~~)接口获取堡垒机实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-78v1gh****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机实例的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'WhiteList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '需要配置的IP地址白名单。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '需要配置的IP地址白名单。最多支持配置50个IP地址。如果要将多个IP地址加入白名单，多个IP之间使用半角逗号（,）隔开。',
              'type' => 'string',
              'required' => false,
              'example' => '10.162.XX.XX,192.168.XX.XX',
            ),
            'required' => false,
            'example' => '10.162.XX.XX',
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
            'description' => '响应数据。',
            'type' => 'object',
            'properties' => 
            array (
              'InstanceId' => 
              array (
                'description' => '已配置公网IP地址白名单的堡垒机实例ID。',
                'type' => 'string',
                'example' => 'bastionhost-cn-78v1gh****',
              ),
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '47820E32-5968-45CF-982F-09CB80DC180B',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"InstanceId\\": \\"bastionhost-cn-78v1gh****\\",\\n  \\"RequestId\\": \\"47820E32-5968-45CF-982F-09CB80DC180B\\"\\n}","errorExample":""},{"type":"xml","example":"<ConfigInstanceWhiteListResponse>\\n<RequestId>47820E32-5968-45CF-982F-09CB80DC180B</RequestId>\\n<InstanceId>bastionhost-cn-78v1gh****</InstanceId>\\n</ConfigInstanceWhiteListResponse>","errorExample":""}]',
      'title' => '为堡垒机实例配置公网IP地址白名单',
      'summary' => '堡垒机实例开启公网访问后，可以将指定公网IP地址加入白名单，允许公网流量访问堡垒机实例。',
      'description' => '本接口用于为堡垒机实例配置公网IP地址白名单。一般情况下是默认放开所有公网IP访问堡垒机，在需要限制公网IP访问堡垒机时，使用本接口将指定公网IP地址加入白名单，对公网流量访问堡垒机实例进行限制。

本接口的单用户QPS限制为30次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'StartInstance' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要启用的堡垒机的实例ID。
> 可通过调用[DescribeInstances](~~153281~~)接口获取堡垒机实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-78v1gh****',
          ),
        ),
        1 => 
        array (
          'name' => 'VswitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机实例绑定的交换机ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-bp1xfwzzfti0kjbf****',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机实例的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'SecurityGroupIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '堡垒机实例绑定的安全组ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '堡垒机实例绑定的安全组ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'sg-bp1aiupc4yjqgmm****',
            ),
            'required' => true,
            'example' => 'sg-bp1aiupc4yjqgmm****',
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
            'description' => '响应数据。',
            'type' => 'object',
            'properties' => 
            array (
              'InstanceId' => 
              array (
                'description' => '已启用的堡垒机的实例ID。
',
                'type' => 'string',
                'example' => 'bastionhost-cn-78v1gh****',
              ),
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '0F85AE0A-6A87-48F3-A0C7-90B998788A36',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"InstanceId\\": \\"bastionhost-cn-78v1gh****\\",\\n  \\"RequestId\\": \\"0F85AE0A-6A87-48F3-A0C7-90B998788A36\\"\\n}","errorExample":""},{"type":"xml","example":"<StartInstanceResponse>\\n    <InstanceId>bastionhost-cn-78v1gh****</InstanceId>\\n    <RequestId>0F85AE0A-6A87-48F3-A0C7-90B998788A36</RequestId>\\n</StartInstanceResponse>","errorExample":""}]',
      'title' => '启动指定堡垒机实例',
      'summary' => '启动指定堡垒机实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'EnableInstancePublicAccess' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。
> 可通过调用[DescribeInstances](~~153281~~)接口获取堡垒机实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-78v1gh****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机实例的地域ID。',
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
              'InstanceId' => 
              array (
                'description' => '已开启公网访问开关的堡垒机的实例ID。',
                'type' => 'string',
                'example' => 'bastionhost-cn-78v1gh****',
              ),
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'D47B5043-FDD6-4FBE-976E-5FC67A23578F',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"InstanceId\\": \\"bastionhost-cn-78v1gh****\\",\\n  \\"RequestId\\": \\"D47B5043-FDD6-4FBE-976E-5FC67A23578F\\"\\n}","errorExample":""},{"type":"xml","example":"<EnableInstancePublicAccessResponse>\\n    <InstanceId>bastionhost-cn-78v1gh****</InstanceId>\\n    <RequestId>D47B5043-FDD6-4FBE-976E-5FC67A23578F</RequestId>\\n</EnableInstancePublicAccessResponse>","errorExample":""}]',
      'title' => '打开指定堡垒机实例公网访问开关',
      'summary' => '打开指定堡垒机实例公网访问开关。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DisableInstancePublicAccess' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要关闭公网访问开关的堡垒机的实例ID。
> 可通过调用[DescribeInstances](~~153281~~)接口获取堡垒机实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-78v1gh****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机实例的地域ID。',
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
          'headers' => 
          array (
          ),
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'InstanceId' => 
              array (
                'description' => '已关闭公网访问开关的堡垒机的实例ID。',
                'type' => 'string',
                'example' => 'bastionhost-cn-78v1gh****',
              ),
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '76FAAF15-D3A3-4099-9941-FC408D9FDB4C',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"InstanceId\\": \\"bastionhost-cn-78v1gh****\\",\\n  \\"RequestId\\": \\"76FAAF15-D3A3-4099-9941-FC408D9FDB4C\\"\\n}","errorExample":""},{"type":"xml","example":"<DisableInstancePublicAccessResponse>\\n    <InstanceId>bastionhost-cn-78v1gh****</InstanceId>\\n    <RequestId>76FAAF15-D3A3-4099-9941-FC408D9FDB4C</RequestId>\\n</DisableInstancePublicAccessResponse>","errorExample":""}]',
      'title' => '关闭实例的公网访问开关',
      'summary' => '关闭实例的公网访问开关。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
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
            'description' => '堡垒机的实例ID。
> 可通过调用[DescribeInstances](~~153281~~)接口获取堡垒机实例ID。 
',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-78v1gh****',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机实例的描述信息。

> 只能包含字母、汉字、数字、下划线（_）或短划线（-），长度不能超过30字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'Bastionhost demo',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机实例的地域ID。
> 地域ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
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
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'E07158EA-D1A3-4BAA-84DA-2FE230D03884',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E07158EA-D1A3-4BAA-84DA-2FE230D03884\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyInstanceAttributeResponse>\\n    <RequestId>E07158EA-D1A3-4BAA-84DA-2FE230D03884</RequestId>\\n</ModifyInstanceAttributeResponse>","errorExample":""}]',
      'title' => '修改指定堡垒机实例的信息',
      'summary' => '修改指定堡垒机实例的信息。',
    ),
    'MoveResourceGroup' => 
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
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要更换资源组的堡垒机实例ID。
> 您可调用[DescribeInstances](~~153281~~)接口获取堡垒机实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-78v1gh****',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要移入堡垒机实例的资源组ID。
> 您可调用[DescribeInstances](~~153281~~)接口获取堡垒机实例的资源组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'rg-aekznp3oyo****',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型定义。固定取值为**INSTANCE**，表示堡垒机实例。',
            'type' => 'string',
            'required' => true,
            'example' => 'INSTANCE',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机实例的地域ID。',
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
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '1DEEC28D-27B1-4358-B6DC-E1285AE655C5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1DEEC28D-27B1-4358-B6DC-E1285AE655C5\\"\\n}","errorExample":""},{"type":"xml","example":"<MoveResourceGroupResponse>\\n    <RequestId>1DEEC28D-27B1-4358-B6DC-E1285AE655C5</RequestId>\\n</MoveResourceGroupResponse>","errorExample":""}]',
      'title' => '移动堡垒机实例至指定资源组',
      'summary' => '移动堡垒机实例至指定资源组。',
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
            'description' => '堡垒机实例的地域ID。',
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
            'description' => '资源类型定义。

唯一取值为INSTANCE，表示堡垒机实例。',
            'type' => 'string',
            'required' => true,
            'example' => 'INSTANCE',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，显示的每页数据的最大条数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，显示当前页的页码。',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '50177258-E817-4D2F-A5C6-3FD7BC4806E3',
              ),
              'PageNumber' => 
              array (
                'description' => '分页查询时，显示当前页的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时，显示的每页数据的最大条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '标签的总数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '5',
              ),
              'TagKeys' => 
              array (
                'description' => '标签列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TagCount' => 
                    array (
                      'description' => '标签键的总数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'TagKey' => 
                    array (
                      'description' => '标签键名称。',
                      'type' => 'string',
                      'example' => 'key2',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"50177258-E817-4D2F-A5C6-3FD7BC4806E3\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 5,\\n  \\"TagKeys\\": [\\n    {\\n      \\"TagCount\\": 2,\\n      \\"TagKey\\": \\"key2\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListTagKeysResponse>\\n    <TotalCount>5</TotalCount>\\n    <PageSize>10</PageSize>\\n    <RequestId>50177258-E817-4D2F-A5C6-3FD7BC4806E3</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <TagKeys>\\n        <TagCount>2</TagCount>\\n        <TagKey>1</TagKey>\\n    </TagKeys>\\n    <TagKeys>\\n        <TagCount>2</TagCount>\\n        <TagKey>1234567890按时AAAaaa</TagKey>\\n    </TagKeys>\\n    <TagKeys>\\n        <TagCount>1</TagCount>\\n        <TagKey>das</TagKey>\\n    </TagKeys>\\n    <TagKeys>\\n        <TagCount>3</TagCount>\\n        <TagKey>key1</TagKey>\\n    </TagKeys>\\n    <TagKeys>\\n        <TagCount>2</TagCount>\\n        <TagKey>key2</TagKey>\\n    </TagKeys>\\n</ListTagKeysResponse>","errorExample":""}]',
      'title' => '查询堡垒机资源已绑定的标签列表',
      'summary' => '查询一个资源已经绑定的标签列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
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
            'description' => '堡垒机实例的地域ID。',
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
            'description' => '资源类型定义。

唯一取值为INSTANCE，表示堡垒机实例。',
            'type' => 'string',
            'required' => true,
            'example' => 'INSTANCE',
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
            'example' => '6EwFJmScBXFFC3nf.9Rq7HzA7APx7GWLbkZbjHrR6Pq39w',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID。

N的取值范围：1~20。
> 可通过调用[DescribeInstances](~~153281~~)接口获取堡垒机资源ID。',
              'type' => 'string',
              'required' => false,
              'example' => '2',
            ),
            'required' => false,
            'example' => 'bastionhost-cn-78v1gcxxxxx',
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
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '堡垒机实例的标签信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。

N的取值范围：1~20。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
                'Value' => 
                array (
                  'description' => '标签值。

N的取值范围：1~20。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'testapi',
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
            'description' => '响应数据。',
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'description' => '下一个查询开始的Token。',
                'type' => 'string',
                'example' => '4ieSWJCwxvW3dk3wF.BqkrZmP72nWu5zJ5NWydMqyEs****',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '134D6018-EB68-4B7C-BABF-4DB09023E014',
              ),
              'TagResources' => 
              array (
                'description' => '堡垒机实例及其绑定的标签列表。

包括实例ID、资源类型、标签键和标签值信息。',
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
                      'example' => 'testapi',
                    ),
                    'ResourceType' => 
                    array (
                      'description' => '资源类型。

唯一取值为INSTANCE，表示堡垒机实例。',
                      'type' => 'string',
                      'example' => 'INSTANCE',
                    ),
                    'ResourceId' => 
                    array (
                      'description' => '实例ID。',
                      'type' => 'string',
                      'example' => 'bastionhost-cn-78v1gc****',
                    ),
                    'TagKey' => 
                    array (
                      'description' => '标签键。',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"4ieSWJCwxvW3dk3wF.BqkrZmP72nWu5zJ5NWydMqyEs****\\",\\n  \\"RequestId\\": \\"134D6018-EB68-4B7C-BABF-4DB09023E014\\",\\n  \\"TagResources\\": [\\n    {\\n      \\"TagValue\\": \\"testapi\\",\\n      \\"ResourceType\\": \\"INSTANCE\\",\\n      \\"ResourceId\\": \\"bastionhost-cn-78v1gc****\\",\\n      \\"TagKey\\": \\"test\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListTagResourcesResponse>\\n    <NextToken>6EwFJmScBXFFC3nf.9Rq7HzA7APx7GWLbkZbjHrR6P****</NextToken>\\n    <RequestId>134D6018-EB68-4B7C-BABF-4DB09023E014</RequestId>\\n    <TagResources>\\n        <ResourceId>bastionhost-cn-78v1gc****</ResourceId>\\n        <TagKey>test</TagKey>\\n        <ResourceType>INSTANCE</ResourceType>\\n        <TagValue>testapi</TagValue>\\n    </TagResources>\\n</ListTagResourcesResponse>","errorExample":""}]',
      'title' => '查询堡垒机实例已绑定的标签列表',
      'summary' => '查询一个或多个堡垒机实例已经绑定的标签列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '91533',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREbastionhostJYERXM',
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
            'description' => '要查询堡垒机实例的地域ID。
> 地域ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
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
            'description' => '资源类型定义。

唯一取值为**INSTANCE**，表示堡垒机实例。',
            'type' => 'string',
            'required' => true,
            'example' => 'INSTANCE',
          ),
        ),
        2 => 
        array (
          'name' => 'All',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置是否删除堡垒机实例上的全部标签。

- 设置TagKey.N时，All的值只能设置为**false**，删除某个标签。
- 未设置TagKey.N时，All设置为**true**，删除所有的标签。All设置为**false**，不删除标签。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例ID。

N的取值范围：1~20。

> 可通过调用[DescribeInstances](~~153281~~)接口获取堡垒机实例ID。

',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例ID。

N的取值范围：1~20。

> 可通过调用[DescribeInstances](~~153281~~)接口获取堡垒机实例ID。

',
              'type' => 'string',
              'required' => false,
              'example' => 'bastionhost-cn-78v1gc****',
            ),
            'required' => true,
            'maxItems' => 51,
          ),
        ),
        4 => 
        array (
          'name' => 'TagKey',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例的标签键。

N的取值范围：1~20。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例的标签键。

N的取值范围：1~20。',
              'type' => 'string',
              'required' => false,
              'example' => 'test',
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
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'A8A665B9-8550-4942-9DEE-73198051856B',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A8A665B9-8550-4942-9DEE-73198051856B\\"\\n}","errorExample":""},{"type":"xml","example":"<UntagResourcesResponse>\\n    <RequestId>A8A665B9-8550-4942-9DEE-73198051856B</RequestId>\\n</UntagResourcesResponse>","errorExample":""}]',
      'title' => '为指定堡垒机实例批量解绑并删除标签',
      'summary' => '为指定堡垒机实例批量解绑并删除标签。',
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
            'description' => '需要创建并绑定标签的堡垒机实例的地域ID。
> 地域ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
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
            'description' => '资源类型定义。

唯一取值为**INSTANCE** ，表示堡垒机实例。
',
            'type' => 'string',
            'required' => true,
            'example' => 'INSTANCE',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '堡垒机实例ID列表。

N的取值范围为1~20。
> 可通过调用[DescribeInstances](~~153281~~)接口获取堡垒机实例ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '堡垒机实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'bastionhost-cn-78v1gc****',
            ),
            'required' => true,
            'example' => 'bastionhost-cn-78v1gc****',
            'maxItems' => 51,
          ),
        ),
        3 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '堡垒机的标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '实例的标签键。
N的取值范围：1~20。 

> - 该参数不允许传入空字符串。最多支持传入128个字符。
> - 该参数不能以**aliyun**或**acs:**开头，不能包含**http://**或**https://**。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'operation',
                ),
                'Value' => 
                array (
                  'description' => '实例的标签值。  
N的取值范围：1~20。
> - 该参数可设置为空字符串，最多支持传入128个字符。
> - 该参数不能以**aliyun**或**acs:**开头，不能包含**http://**或者**https://**。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'operation_test',
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
            'description' => '响应数据。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '2F24F0A8-4C69-4E89-9392-457D107E2D4A',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2F24F0A8-4C69-4E89-9392-457D107E2D4A\\"\\n}","errorExample":""},{"type":"xml","example":"<TagResourcesResponse>\\n    <RequestId>2F24F0A8-4C69-4E89-9392-457D107E2D4A</RequestId>\\n</TagResourcesResponse>","errorExample":""}]',
      'title' => '为堡垒机实例统一创建并绑定标签',
      'summary' => '为指定的堡垒机实例统一创建并绑定标签。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '91490',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREbastionhostOF2U94',
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
            'description' => '设置返回结果的语言类型。取值范围：
- **zh-CN**（默认值）：中文
- **en-US**：英文
- **ja**：日文

',
            'type' => 'string',
            'required' => false,
            'example' => 'zh-CN',
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
            'required' => false,
            'example' => 'cn-shenzhen',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应数据。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'B7281856-F27D-4ECE-B4F1-50511E550xxx',
              ),
              'Regions' => 
              array (
                'description' => '	
堡垒机实例支持的地域信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RegionEndpoint' => 
                    array (
                      'description' => '地域对应的接入地址。',
                      'type' => 'string',
                      'example' => 'yundun-bastionhost.aliyuncs.com',
                    ),
                    'LocalName' => 
                    array (
                      'description' => '地域名称。',
                      'type' => 'string',
                      'example' => '华东1（杭州）',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B7281856-F27D-4ECE-B4F1-50511E550xxx\\",\\n  \\"Regions\\": [\\n    {\\n      \\"RegionEndpoint\\": \\"yundun-bastionhost.aliyuncs.com\\",\\n      \\"LocalName\\": \\"华东1（杭州）\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeRegionsResponse>\\n    <RequestId>B7281856-F27D-4ECE-B4F1-50511E550xxx</RequestId>\\n    <Regions>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <RegionEndpoint>yundun-bastionhost.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华东1（杭州）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-shanghai</RegionId>\\n        <RegionEndpoint>yundun-bastionhost.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华东2（上海）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-qingdao</RegionId>\\n        <RegionEndpoint>yundun-bastionhost.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华北1（青岛）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-beijing</RegionId>\\n        <RegionEndpoint>yundun-bastionhost.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华北2（北京）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-zhangjiakou</RegionId>\\n        <RegionEndpoint>yundun-bastionhost.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华北3（张家口）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-huhehaote</RegionId>\\n        <RegionEndpoint>yundun-bastionhost.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华北5（呼和浩特）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-shenzhen</RegionId>\\n        <RegionEndpoint>yundun-bastionhost.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华南1（深圳）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-chengdu</RegionId>\\n        <RegionEndpoint>yundun-bastionhost.aliyuncs.com</RegionEndpoint>\\n        <LocalName>西南1（成都）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-hongkong</RegionId>\\n        <RegionEndpoint>yundun-bastionhost.aliyuncs.com</RegionEndpoint>\\n        <LocalName>中国香港</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>ap-southeast-1</RegionId>\\n        <RegionEndpoint>yundun-bastionhost.aliyuncs.com</RegionEndpoint>\\n        <LocalName>新加坡</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>ap-southeast-2</RegionId>\\n        <RegionEndpoint>yundun-bastionhost.aliyuncs.com</RegionEndpoint>\\n        <LocalName>澳大利亚（悉尼）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>ap-southeast-3</RegionId>\\n        <RegionEndpoint>yundun-bastionhost.aliyuncs.com</RegionEndpoint>\\n        <LocalName>马来西亚（吉隆坡）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>ap-southeast-5</RegionId>\\n        <RegionEndpoint>yundun-bastionhost.aliyuncs.com</RegionEndpoint>\\n        <LocalName>印度尼西亚（雅加达）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>ap-northeast-1</RegionId>\\n        <RegionEndpoint>yundun-bastionhost.aliyuncs.com</RegionEndpoint>\\n        <LocalName>日本（东京）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>ap-south-1</RegionId>\\n        <RegionEndpoint>yundun-bastionhost.aliyuncs.com</RegionEndpoint>\\n        <LocalName>印度（孟买）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>eu-central-1</RegionId>\\n        <RegionEndpoint>yundun-bastionhost.aliyuncs.com</RegionEndpoint>\\n        <LocalName>德国（法兰克福）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>eu-west-1</RegionId>\\n        <RegionEndpoint>yundun-bastionhost.aliyuncs.com</RegionEndpoint>\\n        <LocalName>英国（伦敦）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>us-west-1</RegionId>\\n        <RegionEndpoint>yundun-bastionhost.aliyuncs.com</RegionEndpoint>\\n        <LocalName>美国（硅谷）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>us-east-1</RegionId>\\n        <RegionEndpoint>yundun-bastionhost.aliyuncs.com</RegionEndpoint>\\n        <LocalName>美国（弗吉尼亚）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>me-east-1</RegionId>\\n        <RegionEndpoint>yundun-bastionhost.aliyuncs.com</RegionEndpoint>\\n        <LocalName>阿联酋（迪拜）</LocalName>\\n    </Regions>\\n</DescribeRegionsResponse>","errorExample":""}]',
      'title' => '查询堡垒机实例支持的阿里云地域',
      'summary' => '查询堡垒机实例支持的阿里云地域。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateHost' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定新创建主机所在堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定新创建主机所在堡垒机的地域ID。
> Region ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'HostPrivateAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定新创建主机的私网地址，可使用域名或IP地址。
> **ActiveAddressType**选择**Private**时，该参数为必填项。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.XX.XX',
          ),
        ),
        3 => 
        array (
          'name' => 'HostPublicAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定新创建主机的公网地址，可使用域名或IP地址。
> **ActiveAddressType**选择**Public**时，该参数为必填项。',
            'type' => 'string',
            'required' => false,
            'example' => '172.16.XX.XX',
          ),
        ),
        4 => 
        array (
          'name' => 'ActiveAddressType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定新创建主机的地址类型。取值：
- **Public**：公网地址
- **Private**：私网地址',
            'type' => 'string',
            'required' => true,
            'example' => 'Public',
          ),
        ),
        5 => 
        array (
          'name' => 'HostName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定新创建主机的名称，最多支持128字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'host01',
          ),
        ),
        6 => 
        array (
          'name' => 'Source',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定新创建主机的来源。取值：
- **Local**：本地主机
- **Ecs**：ECS实例
- **Rds**：RDS专属集群主机',
            'type' => 'string',
            'required' => true,
            'example' => 'Local',
          ),
        ),
        7 => 
        array (
          'name' => 'OSType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定新创建主机的操作系统。取值：
- **Linux**
- **Windows**',
            'type' => 'string',
            'required' => true,
            'example' => 'Linux',
          ),
        ),
        8 => 
        array (
          'name' => 'Comment',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定主机的备注信息，最多支持500字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'Local Host',
          ),
        ),
        9 => 
        array (
          'name' => 'SourceInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定新创建的ECS实例ID或专属集群主机ID。  
> **Source**选择**Ecs**或**Rds**时，该参数为必填项。',
            'type' => 'string',
            'required' => false,
            'example' => 'i-dfabfda',
          ),
        ),
        10 => 
        array (
          'name' => 'InstanceRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定新创建的ECS实例或专属集群主机所属区域ID。  
> **Source**选择**Ecs**或**Rds**时，该参数为必填项。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        11 => 
        array (
          'name' => 'NetworkDomainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定新创建主机所属的网络域ID。
> 您可以调用[ListNetworkDomains ](~~2758827~~)接口获取该参数。',
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
            'type' => 'object',
            'properties' => 
            array (
              'HostId' => 
              array (
                'description' => '新创建主机的ID。',
                'type' => 'string',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'LicenseOutOfLimit',
            'errorMessage' => 'The host count is out of limit.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HostId\\": \\"1\\",\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateHostResponse>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n    <HostId>1</HostId>\\n</CreateHostResponse>","errorExample":""}]',
      'title' => '在堡垒机中创建需要运维的主机',
      'summary' => '堡垒机支持运维阿里云ECS服务器、线下IDC服务器以及其他云上服务器等不同来源的主机。在通过堡垒机运维主机之前，首先需要在堡垒机中导入主机。您可以参考本接口在堡垒机中创建需要运维的主机。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetHost' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的主机所在堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的主机所在堡垒机的区域ID。
> Region ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'HostId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的主机ID。仅支持输入一个主机ID。
> 您可以调用[ListHosts](~~200665~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'Host' => 
              array (
                'description' => '查询到的主机信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Comment' => 
                  array (
                    'description' => '主机的备注信息。',
                    'type' => 'string',
                    'example' => 'host',
                  ),
                  'ActiveAddressType' => 
                  array (
                    'description' => '主机地址类型。取值：
- **Public** ：公网地址
- **Private** ：私网地址',
                    'type' => 'string',
                    'example' => 'Public',
                  ),
                  'HostPublicAddress' => 
                  array (
                    'description' => '主机的公网地址，可为域名或IP地址。',
                    'type' => 'string',
                    'example' => '1.1.XX.XX',
                  ),
                  'HostName' => 
                  array (
                    'description' => '主机名称。',
                    'type' => 'string',
                    'example' => 'host',
                  ),
                  'Source' => 
                  array (
                    'description' => '主机的来源。取值：
- **Local**：本地主机
- **Ecs**：ECS实例
- **Rds**：RDS专属集群主机',
                    'type' => 'string',
                    'example' => 'Local',
                  ),
                  'HostPrivateAddress' => 
                  array (
                    'description' => '主机的私网地址，可为域名或IP地址。',
                    'type' => 'string',
                    'example' => '192.168.XX.XX',
                  ),
                  'OSType' => 
                  array (
                    'description' => '主机的操作系统。取值：
- **Linux**
- **Windows**',
                    'type' => 'string',
                    'example' => 'Linux',
                  ),
                  'HostId' => 
                  array (
                    'description' => '主机ID。',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'SourceInstanceState' => 
                  array (
                    'description' => '主机状态。取值：
 - **Normal**   ：正常
- **Release**： 已释放',
                    'type' => 'string',
                    'example' => 'Normal',
                  ),
                  'SourceInstanceId' => 
                  array (
                    'description' => '主机对应的ECS实例ID或专属集群主机ID。
> **Source**为**Local**时，该参数返回值为空。',
                    'type' => 'string',
                    'example' => 'i-bp19ienyt0yax748****',
                  ),
                  'Protocols' => 
                  array (
                    'description' => '主机的协议信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'HostFingerPrint' => 
                        array (
                          'description' => '主机指纹信息，可以唯一标识一台主机。只有通过堡垒机运维目标主机时，堡垒机才会记录主机指纹，否则返回为空。',
                          'type' => 'string',
                          'example' => 'ssh-ed25519|3e:46:5a:e1:1f:0d:39:7e:61:35:d5:fa:7b:2b:**:**',
                        ),
                        'Port' => 
                        array (
                          'description' => '主机的服务端口。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '22',
                        ),
                        'ProtocolName' => 
                        array (
                          'description' => '主机使用的协议名称。取值：
- **SSH**
- **RDP**',
                          'type' => 'string',
                          'example' => 'SSH',
                        ),
                      ),
                    ),
                  ),
                  'NetworkDomainId' => 
                  array (
                    'description' => '主机所属的网络域的ID。',
                    'type' => 'string',
                    'example' => '1',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'HostNotFound',
            'errorMessage' => 'The host is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"Host\\": {\\n    \\"Comment\\": \\"host\\",\\n    \\"ActiveAddressType\\": \\"Public\\",\\n    \\"HostPublicAddress\\": \\"1.1.XX.XX\\",\\n    \\"HostName\\": \\"host\\",\\n    \\"Source\\": \\"Local\\",\\n    \\"HostPrivateAddress\\": \\"192.168.XX.XX\\",\\n    \\"OSType\\": \\"Linux\\",\\n    \\"HostId\\": \\"1\\",\\n    \\"SourceInstanceState\\": \\"Normal\\",\\n    \\"SourceInstanceId\\": \\"i-bp19ienyt0yax748****\\",\\n    \\"Protocols\\": [\\n      {\\n        \\"HostFingerPrint\\": \\"ssh-ed25519|3e:46:5a:e1:1f:0d:39:7e:61:35:d5:fa:7b:2b:**:**\\",\\n        \\"Port\\": 22,\\n        \\"ProtocolName\\": \\"SSH\\"\\n      }\\n    ],\\n    \\"NetworkDomainId\\": \\"1\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetHostResponse>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n    <Host>\\n        <Comment>host</Comment>\\n        <Protocols>\\n            <ProtocolName>SSH</ProtocolName>\\n            <HostFingerPrint/>\\n            <Port>22</Port>\\n        </Protocols>\\n        <ActiveAddressType>Public</ActiveAddressType>\\n        <HostPrivateAddress>192.168.XX.XX</HostPrivateAddress>\\n        <HostPublicAddress>1.1.XX.XX</HostPublicAddress>\\n        <OSType>Linux</OSType>\\n        <HostId>1</HostId>\\n        <SourceInstanceId>i-bp19ienyt0yax748****</SourceInstanceId>\\n        <HostName>host</HostName>\\n        <SourceInstanceState>Normal</SourceInstanceState>\\n        <Source>Local</Source>\\n    </Host>\\n</GetHostResponse>","errorExample":""}]',
      'title' => '获取指定主机的详细信息',
      'summary' => '包括主机名称、来源、主机地址、协议端口等信息。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListHosts' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询主机的堡垒机实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询主机的堡垒机所在地域的ID。
> 地域ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置从返回结果的第几页开始显示查询结果。默认值为**1**，表示从第1页开始显示。',
            'type' => 'string',
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
            'description' => '设置分页查询时，每页显示的主机信息的数量。默认值为**10**，表示每页显示10条主机信息。
> 建议PageSize取值不要为空。',
            'type' => 'string',
            'required' => false,
            'example' => '20',
          ),
        ),
        4 => 
        array (
          'name' => 'OSType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的主机的操作系统。取值：
- **Linux**
- **Windows**',
            'type' => 'string',
            'required' => false,
            'example' => 'Linux',
          ),
        ),
        5 => 
        array (
          'name' => 'HostName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的主机名称。不支持模糊查询，只支持精确查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'host',
          ),
        ),
        6 => 
        array (
          'name' => 'HostAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的主机地址，可使用域名或IP地址。不支持模糊查询，只支持精确查询。',
            'type' => 'string',
            'required' => false,
            'example' => '1.1.XX.XX',
          ),
        ),
        7 => 
        array (
          'name' => 'Source',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询主机的来源。取值：
- **Local**：本地主机
- **Ecs**：ECS实例
- **Rds**：RDS专属集群主机',
            'type' => 'string',
            'required' => false,
            'example' => 'Local',
          ),
        ),
        8 => 
        array (
          'name' => 'SourceInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的主机对应的ECS实例ID或专属集群主机ID。不支持模糊查询，只支持精确查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'i-bp19ienyt0yax748****',
          ),
        ),
        9 => 
        array (
          'name' => 'SourceInstanceState',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的主机状态。取值：
 - **Normal**：正常
- **Release**：已释放',
            'type' => 'string',
            'required' => false,
            'example' => 'Normal',
          ),
        ),
        10 => 
        array (
          'name' => 'HostGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的主机所在主机组的ID。
> 您可以调用[ListHostGroups](~~201307~~)接口获取主机组ID。',
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
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '查询到的主机总数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'Hosts' => 
              array (
                'description' => '查询到的主机列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Comment' => 
                    array (
                      'description' => '主机的备注信息。',
                      'type' => 'string',
                      'example' => 'host',
                    ),
                    'ActiveAddressType' => 
                    array (
                      'description' => '主机地址类型。取值：
- **Public** ：公网地址
- **Private** ：私网地址',
                      'type' => 'string',
                      'example' => 'Public',
                    ),
                    'HostPublicAddress' => 
                    array (
                      'description' => '主机的公网地址，可为域名或IP地址。',
                      'type' => 'string',
                      'example' => '1.1.XX.XX',
                    ),
                    'HostName' => 
                    array (
                      'description' => '主机名称。',
                      'type' => 'string',
                      'example' => 'name',
                    ),
                    'HostAccountCount' => 
                    array (
                      'description' => '主机账号数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'Source' => 
                    array (
                      'description' => '主机的来源。取值：
- **Local**：本地主机
- **Ecs**：ECS实例
- **Rds**：RDS专属集群主机',
                      'type' => 'string',
                      'example' => 'Local',
                    ),
                    'HostPrivateAddress' => 
                    array (
                      'description' => '主机的私网地址，可为域名或IP地址。',
                      'type' => 'string',
                      'example' => '192.168.XX.XX',
                    ),
                    'OSType' => 
                    array (
                      'description' => '主机的操作系统。取值：
- **Linux**
- **Windows**',
                      'type' => 'string',
                      'example' => 'Linux',
                    ),
                    'HostId' => 
                    array (
                      'description' => '主机ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'SourceInstanceState' => 
                    array (
                      'description' => '主机状态。取值：
 - **Normal**   ：正常
- **Release**： 已释放',
                      'type' => 'string',
                      'example' => 'Normal',
                    ),
                    'SourceInstanceId' => 
                    array (
                      'description' => '主机对应的ECS实例ID或专属集群主机ID。
> **Source**为**Local**时，该参数返回值为空。',
                      'type' => 'string',
                      'example' => 'i-bp19ienyt0yax748****',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"Hosts\\": [\\n    {\\n      \\"Comment\\": \\"host\\",\\n      \\"ActiveAddressType\\": \\"Public\\",\\n      \\"HostPublicAddress\\": \\"1.1.XX.XX\\",\\n      \\"HostName\\": \\"name\\",\\n      \\"HostAccountCount\\": 1,\\n      \\"Source\\": \\"Local\\",\\n      \\"HostPrivateAddress\\": \\"192.168.XX.XX\\",\\n      \\"OSType\\": \\"Linux\\",\\n      \\"HostId\\": \\"1\\",\\n      \\"SourceInstanceState\\": \\"Normal\\",\\n      \\"SourceInstanceId\\": \\"i-bp19ienyt0yax748****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListHostsResponse>\\n    <TotalCount>1</TotalCount>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n    <Hosts>\\n        <Comment>host</Comment>\\n        <ActiveAddressType>Public</ActiveAddressType>\\n        <HostPublicAddress>1.1.XX.XX</HostPublicAddress>\\n        <HostName>name</HostName>\\n        <HostAccountCount>1</HostAccountCount>\\n        <Source>Local</Source>\\n        <HostPrivateAddress>192.168.XX.XX</HostPrivateAddress>\\n        <OSType>Linux</OSType>\\n        <HostId>1</HostId>\\n        <SourceInstanceState>Normal</SourceInstanceState>\\n        <SourceInstanceId>i-bp19ienyt0yax748****</SourceInstanceId>\\n    </Hosts>\\n</ListHostsResponse>","errorExample":""}]',
      'title' => '查询指定堡垒机实例下的主机列表',
      'summary' => '查询指定堡垒机实例下的主机列表。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteHost' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要删除的主机所在堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要删除的主机所在堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'HostId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要删除的主机ID。
> 您可以调用[ListHosts](~~200665~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'HostNotFound',
            'errorMessage' => 'The host is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteHostResponse>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n</DeleteHostResponse>","errorExample":""}]',
      'title' => '删除单个主机',
      'summary' => '删除单个主机。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyHostsPort' => 
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
            'description' => '要修改协议端口的主机所在堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要修改端口的主机所在堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'HostIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要修改运维协议和端口的主机ID。该参数为JSON格式的字符串，最多可输入100个主机ID。多个主机ID之间使用半角逗号（,）隔开。
> 您可以调用[ListHosts](~~200665~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '["1","2","3"]',
          ),
        ),
        3 => 
        array (
          'name' => 'ProtocolName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要修改端口的协议名称。取值：
- **SSH**
- **RDP**',
            'type' => 'string',
            'required' => true,
            'example' => 'SSH',
          ),
        ),
        4 => 
        array (
          'name' => 'Port',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改后的端口号。端口号为整数，取值范围：22~65535。',
            'type' => 'string',
            'required' => true,
            'example' => '22',
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
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'Results' => 
              array (
                'description' => '接口调用的结果。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Code' => 
                    array (
                      'description' => '接口调用的结果。取值：
- **OK**：操作成功。
- **UNEXPECTED**：未知错误。
- **INVALID_ARGUMENT**：请求参数设置错误。

    > 请检查请求参数，确保参数正确后重新调用接口。

- **OBJECT_NOT_FOUND**：操作的对象不存在。

    > 请检查该堡垒机实例的ID是否存在，主机是否存在，主机ID是否填写正确，然后重新调用接口。

- **OBJECT_AlREADY_EXISTS** ：操作的对象已存在。

',
                      'type' => 'string',
                      'example' => 'OK',
                    ),
                    'Message' => 
                    array (
                      'description' => '该参数已废弃，无需关注。',
                      'type' => 'string',
                      'example' => '无',
                    ),
                    'HostId' => 
                    array (
                      'description' => '主机ID。',
                      'type' => 'string',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"Results\\": [\\n    {\\n      \\"Code\\": \\"OK\\",\\n      \\"Message\\": \\"无\\",\\n      \\"HostId\\": \\"1\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ModifyHostsPortResponse>\\n<RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n<Results>\\n    <Message>无</Message>\\n    <HostId>1</HostId>\\n    <Code>OK</Code>\\n</Results>\\n</ModifyHostsPortResponse>","errorExample":""}]',
      'title' => '批量修改主机指定协议的端口',
      'summary' => '堡垒机对于服务器的RDP和SSH协议使用的是默认端口（RDP协议默认使用3389端口，SSH协议默认使用22端口），如果您在主机中自定义了端口，可通过本接口进行修改。',
      'description' => '# 使用说明
本接口用于批量修改主机运维协议的端口。如果您认为使用运维协议的标准端口不安全（如SSH运维协议的标准端口为22），容易被攻击者发现并入侵，您可以使用本接口自定义运维协议的端口。

> 0~1024为堡垒机保留端口，自定义端口时请不要修改为保留端口。

# QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyHostsActiveAddressType' => 
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
            'description' => '要修改连接地址类型的主机所在堡垒机的实例ID。

> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw***',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要修改连接地址类型的主机所在堡垒机的区域ID。

> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'HostIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要修改连接地址类型的主机ID。该参数为JSON格式的字符串，最多可输入100个主机ID。
您可以调用[ListHosts](~~200665~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '["1","2"]',
          ),
        ),
        3 => 
        array (
          'name' => 'ActiveAddressType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改后的主机连接地址的类型。取值：

- **Public**：公网
- **Private**：私网
',
            'type' => 'string',
            'required' => true,
            'example' => 'Private',
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
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。

',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'Results' => 
              array (
                'description' => '接口的调用结果。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Code' => 
                    array (
                      'description' => '接口的调用结果信息。取值：

- **OK**：操作成功。
- **UNEXPECTED**：未知错误。
- **INVALID_ARGUMENT**：请求参数设置错误。
- **OBJECT_NOT_FOUND**：操作的对象不存在。
- **OBJECT_AlREADY_EXISTS** ：操作的对象已存在。',
                      'type' => 'string',
                      'example' => 'OK',
                    ),
                    'Message' => 
                    array (
                      'description' => '该参数已废弃，无需关注。',
                      'type' => 'string',
                      'example' => '无',
                    ),
                    'HostId' => 
                    array (
                      'description' => '主机ID。',
                      'type' => 'string',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"Results\\": [\\n    {\\n      \\"Code\\": \\"OK\\",\\n      \\"Message\\": \\"无\\",\\n      \\"HostId\\": \\"1\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ModifyHostsActiveAddressTypeResponse>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n    <Results>\\n        <Message/>\\n        <HostId>1</HostId>\\n        <Code>OK</Code>\\n    </Results>\\n</ModifyHostsActiveAddressTypeResponse>","errorExample":""}]',
      'title' => '修改运维主机时使用的连接地址类型',
      'summary' => '堡垒机支持公网运维和私网运维，您可以通过本接口修改运维主机时使用的连接地址类型。',
    ),
    'ModifyHost' => 
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
            'description' => '指定要修改的主机所在堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要修改的主机所在堡垒机的区域ID。
> Region ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'HostId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要修改的主机ID。
> 您可以调用[ListHosts](~~200665~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'HostPrivateAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定修改后主机的私网地址，可使用域名或IP地址。',
            'type' => 'string',
            'required' => false,
            'example' => '193.168.XX.XX',
          ),
        ),
        4 => 
        array (
          'name' => 'HostPublicAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定修改后主机的公网地址，可使用域名或IP地址。',
            'type' => 'string',
            'required' => false,
            'example' => '200.1.XX.XX',
          ),
        ),
        5 => 
        array (
          'name' => 'OSType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定修改后主机的操作系统类型。取值：
- **Linux**
- **Windows**',
            'type' => 'string',
            'required' => false,
            'example' => 'Linux',
          ),
        ),
        6 => 
        array (
          'name' => 'HostName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定修改后主机的名称，最多支持128字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'TestHost',
          ),
        ),
        7 => 
        array (
          'name' => 'Comment',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定修改后主机的备注信息，最多支持500字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'Host for test.',
          ),
        ),
        8 => 
        array (
          'name' => 'NetworkDomainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定修改后主机所属的网络域ID。
> 您可以调用[ListNetworkDomains ](~~2758827~~)接口获取该参数。',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'HostNotFound',
            'errorMessage' => 'The host is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyHostResponse>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n</ModifyHostResponse>","errorExample":""}]',
      'title' => '修改主机基本信息',
      'summary' => '支持修改主机的地址、名称、操作系统类型和备注信息。',
      'description' => '该接口支持修改本地主机、ECS主机、RDS专属集群主机的基本信息。
> 如果您修改了ECS主机或RDS专属集群主机的基本信息，由于堡垒机系统会定期同步ECS主机、RDS专属集群主机的基本信息，修改结果可能会被ECS主机或RDS专属集群主机所同步的基本信息覆盖。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateDatabase' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机实例的ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-7mz2g5hu20e',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的地域ID。
> 地域ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
          ),
        ),
        2 => 
        array (
          'name' => 'NetworkDomainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定新创建数据库所属的网络域ID。
> 您可以调用[ListNetworkDomains ](~~2758827~~)接口获取该参数。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'DatabaseType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库类型，取值如下：

- **MySQL**
- **Oracle**
- **PostgreSQL**
- **SQLServer**',
            'type' => 'string',
            'required' => true,
            'example' => 'MySQL',
          ),
        ),
        4 => 
        array (
          'name' => 'ActiveAddressType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定新创建数据库的地址类型。取值:

- Public：公网地址
- Private：私网地址',
            'type' => 'string',
            'required' => true,
            'example' => 'Public',
          ),
        ),
        5 => 
        array (
          'name' => 'DatabasePrivateAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '私网地址。支持IPv4地址和域名格式。
>ActiveAddressType选择Private时，该参数为必填项。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.XX.XX',
          ),
        ),
        6 => 
        array (
          'name' => 'DatabasePublicAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '公网地址。支持IPv4地址和域名格式。
>ActiveAddressType选择Public时，该参数为必填项。',
            'type' => 'string',
            'required' => false,
            'example' => 'www.example.com',
          ),
        ),
        7 => 
        array (
          'name' => 'DatabasePort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库的访问端口。数据库来源为**Local**，该参数为必填项。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '5433',
          ),
        ),
        8 => 
        array (
          'name' => 'DatabaseName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新创建的数据库实例名称。数据库来源为**Local**，该参数为必填项。',
            'type' => 'string',
            'required' => false,
            'example' => 'Test01',
          ),
        ),
        9 => 
        array (
          'name' => 'SourceInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定新创建的数据库实例ID。  
> **Source**选择**Rds**或**PolarDB**时，该参数为必填项。',
            'type' => 'string',
            'required' => false,
            'example' => 'i-bp19ienyt0yax748****',
          ),
        ),
        10 => 
        array (
          'name' => 'Source',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定新创建数据库的来源。取值：
- Local：本地数据库实例
- Rds：RDS类型数据库实例
- PolarDB: PolarDB类型数据库实例',
            'type' => 'string',
            'required' => true,
            'example' => 'Local',
          ),
        ),
        11 => 
        array (
          'name' => 'Comment',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定新创建的数据库的备注信息。最多支持500字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'cpp',
          ),
        ),
        12 => 
        array (
          'name' => 'SourceInstanceRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定新创建的数据库实例所属地域ID。
>**Source**为**Rds**或**PolarDB**时，该参数为必填项。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
          ),
        ),
        13 => 
        array (
          'name' => 'PolarDBEndpointType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Source为PolarDB时必传，表示PolarDB的Endpoint类型，取值：
- Cluster：集群地址
- Primary：主地址',
            'type' => 'string',
            'required' => false,
            'example' => 'Cluster',
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
              'DatabaseId' => 
              array (
                'description' => '数据库实例ID。',
                'type' => 'string',
                'example' => '334',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '98EDD923-236C-5A88-88E7-4979A91B9325',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'LicenseOutOfLimit',
            'errorMessage' => 'The maximum number of hosts exceeds the license limit.',
          ),
          2 => 
          array (
            'errorCode' => 'DatabaseAlreadyExists',
            'errorMessage' => 'The database already exists.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"DatabaseId\\": \\"334\\",\\n  \\"RequestId\\": \\"98EDD923-236C-5A88-88E7-4979A91B9325\\"\\n}","type":"json"}]',
      'title' => '在堡垒机中创建需要运维的数据库',
      'summary' => '您可以通过本接口，将MySQL、SQL Server、PostgreSQL类型的RDS和MySQL、PostgreSQL、PostgreSQL（兼容Oracle）的PolarDB以及MySQL、SQL Server、PostgreSQL、Oracle类型的自建数据库资产导入至堡垒机。',
    ),
    'ModifyDatabase' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要修改的数据库所在堡垒机实例的ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-72137xe5n01',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要修改的数据库所在堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'DatabaseId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要修改的数据库ID。',
            'type' => 'string',
            'required' => true,
            'example' => '11',
          ),
        ),
        3 => 
        array (
          'name' => 'NetworkDomainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定修改后数据库所属的网络域的ID。
> 您可以调用[ListNetworkDomains ](~~2758827~~)接口获取该参数。',
            'type' => 'string',
            'required' => false,
            'example' => '2',
          ),
        ),
        4 => 
        array (
          'name' => 'ActiveAddressType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定修改后的数据库地址类型。取值：
- **Public** ：公网地址
- **Private** ：私网地址',
            'type' => 'string',
            'required' => false,
            'example' => 'Public',
          ),
        ),
        5 => 
        array (
          'name' => 'DatabasePrivateAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定修改后的数据库的私网地址。支持IPv4地址和域名格式。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.XX.XX',
          ),
        ),
        6 => 
        array (
          'name' => 'DatabasePublicAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定修改后的数据库的公网地址。支持IPv4地址和域名格式。',
            'type' => 'string',
            'required' => false,
            'example' => 'www.example.com',
          ),
        ),
        7 => 
        array (
          'name' => 'DatabasePort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定修改后的数据库端口。',
            'type' => 'string',
            'required' => false,
            'example' => '5433',
          ),
        ),
        8 => 
        array (
          'name' => 'DatabaseName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定修改后的数据库实例名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'pgsql',
          ),
        ),
        9 => 
        array (
          'name' => 'SourceInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要修改的数据库实例ID。  
> **Source**选择**Rds**或**PolarDB**时，该参数为必填项。',
            'type' => 'string',
            'required' => false,
            'example' => 'i-wz99nexqd62z3bvuvpz5',
          ),
        ),
        10 => 
        array (
          'name' => 'Comment',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改后的数据库备注信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'tttttttt',
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
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '162088A7-7D47-56A3-9D04-93DE7B6DBE1C',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'DatabaseAlreadyExists',
            'errorMessage' => 'The database already exists.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'DatabaseNotFound',
            'errorMessage' => 'The database is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"162088A7-7D47-56A3-9D04-93DE7B6DBE1C\\"\\n}","type":"json"}]',
      'title' => '修改数据库基本信息',
      'summary' => '修改数据库基本信息。',
    ),
    'GetDatabase' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的数据库所在堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-wwo36qbv601',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的数据库所在堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'DatabaseId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要查询的数据库ID。
> 您可以调用[ListDatabases ](~~2758822~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '21',
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
              'Database' => 
              array (
                'description' => '查询到的数据库实例详细信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'ActiveAddressType' => 
                  array (
                    'description' => '数据库实例地址类型。取值：

- Public ：公网地址
- Private ：私网地址',
                    'type' => 'string',
                    'example' => 'Public',
                  ),
                  'Comment' => 
                  array (
                    'description' => '数据库实例备注。',
                    'type' => 'string',
                    'example' => 'comment',
                  ),
                  'DatabaseId' => 
                  array (
                    'description' => '数据库实例ID。',
                    'type' => 'string',
                    'example' => '22',
                  ),
                  'DatabaseName' => 
                  array (
                    'description' => '数据库实例名称。',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'DatabasePort' => 
                  array (
                    'description' => '数据库的端口。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '3306',
                  ),
                  'DatabasePrivateAddress' => 
                  array (
                    'description' => '数据库实例的私网地址。',
                    'type' => 'string',
                    'example' => 'rm-bp1zq******',
                  ),
                  'DatabasePublicAddress' => 
                  array (
                    'description' => '数据库实例的公网地址。',
                    'type' => 'string',
                    'example' => 'rm-uf65******',
                  ),
                  'DatabaseType' => 
                  array (
                    'description' => '数据库类型。取值：
- **mysql**
- **sqlserver**
- **postgresql**
- **oracle**',
                    'type' => 'string',
                    'example' => 'MySQL',
                  ),
                  'NetworkDomainId' => 
                  array (
                    'description' => '数据库所属的网络域的ID。',
                    'type' => 'string',
                    'example' => '45',
                  ),
                  'Source' => 
                  array (
                    'description' => '指定新创建数据库实例的来源。取值：

- **Local**：本地数据库实例
- **Rds**：RDS类型数据库实例
- **PolarDB**: PolarDB类型数据库实例',
                    'type' => 'string',
                    'example' => 'Local',
                  ),
                  'SourceInstanceId' => 
                  array (
                    'description' => '数据库对应的RDS实例ID或PolarDB实例ID。
> **Source**为**Local**时，该参数返回值为空。',
                    'type' => 'string',
                    'example' => 'i-wz9527ob0e0nftcsffke',
                  ),
                  'SourceInstanceRegionId' => 
                  array (
                    'description' => '数据库对应的RDS实例或PolarDB实例所在的区域ID。',
                    'type' => 'string',
                    'example' => 'cn-hangzhou',
                  ),
                  'SourceInstanceState' => 
                  array (
                    'description' => '数据库实例状态。取值：
 - **Normal**：正常
- **Release**：已释放',
                    'type' => 'string',
                    'example' => 'Normal',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。
',
                'type' => 'string',
                'example' => '4D72B883-9D15-5B05-B987-DFD10EB1FFB4',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'DatabaseNotFound',
            'errorMessage' => 'The database is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Database\\": {\\n    \\"ActiveAddressType\\": \\"Public\\",\\n    \\"Comment\\": \\"comment\\",\\n    \\"DatabaseId\\": \\"22\\",\\n    \\"DatabaseName\\": \\"test\\",\\n    \\"DatabasePort\\": 3306,\\n    \\"DatabasePrivateAddress\\": \\"rm-bp1zq******\\",\\n    \\"DatabasePublicAddress\\": \\"rm-uf65******\\",\\n    \\"DatabaseType\\": \\"MySQL\\",\\n    \\"NetworkDomainId\\": \\"45\\",\\n    \\"Source\\": \\"Local\\",\\n    \\"SourceInstanceId\\": \\"i-wz9527ob0e0nftcsffke\\",\\n    \\"SourceInstanceRegionId\\": \\"cn-hangzhou\\",\\n    \\"SourceInstanceState\\": \\"Normal\\"\\n  },\\n  \\"RequestId\\": \\"4D72B883-9D15-5B05-B987-DFD10EB1FFB4\\"\\n}","type":"json"}]',
      'title' => '获取指定数据库的详细信息',
      'summary' => '获取指定数据库的详细信息。',
    ),
    'ListDatabases' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-7mz28f5tk0o',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的堡垒机所在的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时，当前页的页码。默认值为1。',
            'type' => 'string',
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
            'description' => '指定分页查询时，每页显示的数据最大条数。  
PageSize参数最大取值为100。每页默认显示的数据条数为20条，PageSize参数值为空时，将默认返回20条数据。
> 建议PageSize取值不要为空。',
            'type' => 'string',
            'required' => false,
            'example' => '20',
          ),
        ),
        4 => 
        array (
          'name' => 'DatabaseType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的数据库类型，取值：

- **MySQL**
- **Oracle**
- **PostgreSQL**
- **SQLServer**',
            'type' => 'string',
            'required' => false,
            'example' => 'MySQL',
          ),
        ),
        5 => 
        array (
          'name' => 'NetworkDomainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的数据库所属的网络域ID。',
            'type' => 'string',
            'required' => false,
            'example' => '2',
          ),
        ),
        6 => 
        array (
          'name' => 'Source',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询数据库的来源。取值：

- **Local**：本地数据库实例
- **Rds**：RDS类型数据库实例
- **PolarDB**: PolarDB类型数据库实例',
            'type' => 'string',
            'required' => false,
            'example' => 'Local',
          ),
        ),
        7 => 
        array (
          'name' => 'HostGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的资产组ID。
> 您可以调用[ListHostGroups](~~201307~~)接口获取该参数。',
            'type' => 'string',
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
              'Databases' => 
              array (
                'description' => '查询到的数据库列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ActiveAddressType' => 
                    array (
                      'description' => '数据库地址类型。取值：
- **Public** ：公网地址
- **Private** ：私网地址',
                      'type' => 'string',
                      'example' => 'Public',
                    ),
                    'Comment' => 
                    array (
                      'description' => '数据库的备注信息。',
                      'type' => 'string',
                      'example' => 'comment',
                    ),
                    'DatabaseId' => 
                    array (
                      'description' => '数据库实例ID。',
                      'type' => 'string',
                      'example' => '9',
                    ),
                    'DatabaseName' => 
                    array (
                      'description' => '数据库实例名称。',
                      'type' => 'string',
                      'example' => 'MySQL0',
                    ),
                    'DatabasePort' => 
                    array (
                      'description' => '数据库的端口。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '3306',
                    ),
                    'DatabasePrivateAddress' => 
                    array (
                      'description' => '数据库的私网地址，可为域名或ip地址。',
                      'type' => 'string',
                      'example' => 'rm-wz973w7******',
                    ),
                    'DatabasePublicAddress' => 
                    array (
                      'description' => '数据库的公网地址，可为域名或ip地址。',
                      'type' => 'string',
                      'example' => 'rm-uf65n2******',
                    ),
                    'DatabaseType' => 
                    array (
                      'description' => '数据库类型，取值：

- **MySQL**
- **Oracle**
- **PostgreSQL**
- **SQLServer**',
                      'type' => 'string',
                      'example' => 'MySQL',
                    ),
                    'NetworkDomainId' => 
                    array (
                      'description' => '数据库所属的网络域的ID。',
                      'type' => 'string',
                      'example' => '8',
                    ),
                    'Source' => 
                    array (
                      'description' => '数据库的来源。取值：

- **Local**：本地数据库实例
- **Rds**：RDS类型数据库实例
- **PolarDB**: PolarDB类型数据库实例',
                      'type' => 'string',
                      'example' => 'Local',
                    ),
                    'SourceInstanceId' => 
                    array (
                      'description' => '数据库对应的RDS实例ID或PolarDB实例ID。
> **Source**为**Local**时，该参数返回值为空。',
                      'type' => 'string',
                      'example' => 'i-wz9ejupczf41******',
                    ),
                    'SourceInstanceRegionId' => 
                    array (
                      'description' => '数据库对应的RDS实例或PolarDB实例所在地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'SourceInstanceState' => 
                    array (
                      'description' => '数据库实例状态。取值：
 - **Normal**   ：正常
- **Release**： 已释放',
                      'type' => 'string',
                      'example' => 'Normal',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'TotalCount' => 
              array (
                'description' => '查询到的数据库总数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '4',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Databases\\": [\\n    {\\n      \\"ActiveAddressType\\": \\"Public\\",\\n      \\"Comment\\": \\"comment\\",\\n      \\"DatabaseId\\": \\"9\\",\\n      \\"DatabaseName\\": \\"MySQL0\\",\\n      \\"DatabasePort\\": 3306,\\n      \\"DatabasePrivateAddress\\": \\"rm-wz973w7******\\",\\n      \\"DatabasePublicAddress\\": \\"rm-uf65n2******\\",\\n      \\"DatabaseType\\": \\"MySQL\\",\\n      \\"NetworkDomainId\\": \\"8\\",\\n      \\"Source\\": \\"Local\\",\\n      \\"SourceInstanceId\\": \\"i-wz9ejupczf41******\\",\\n      \\"SourceInstanceRegionId\\": \\"cn-hangzhou\\",\\n      \\"SourceInstanceState\\": \\"Normal\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"TotalCount\\": 4\\n}","type":"json"}]',
      'title' => '查询指定堡垒机实例下的数据库列表',
      'summary' => '查询指定堡垒机实例下的数据库列表。',
    ),
    'DeleteDatabase' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要删除的数据库实例所在堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-78v1ghxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'DatabaseId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要删除的数据库实例ID。
> 您可以调用[ListDatabases ](~~2758822~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '11',
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
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '81500666-d7f5-4143-8329-0223cc738105',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'DatabaseNotFound',
            'errorMessage' => 'The database is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"81500666-d7f5-4143-8329-0223cc738105\\"\\n}","type":"json"}]',
      'title' => '删除单个数据库实例',
      'summary' => '删除单个数据库实例。',
    ),
    'CreateNetworkDomain' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要创建网络域的堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-lbj3bw4ma02',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要创建网络域的堡垒机的地域ID。
> 区域ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'NetworkDomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要创建的网络域名称，最大128字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'SSH代理',
          ),
        ),
        3 => 
        array (
          'name' => 'NetworkDomainType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要创建的网络域类型。取值：
- Direct：直连，表示堡垒机直接和资产网络连通，不经过中间代理服务器。
- Proxy：代理，资产所在网络与堡垒机网络不通的情况下，可以通过代理服务器转发网络请求，实现对不同网络环境下的资产进行运维。',
            'type' => 'string',
            'required' => true,
            'example' => 'Proxy',
          ),
        ),
        4 => 
        array (
          'name' => 'Comment',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络域的备注。最多500字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'comment',
          ),
        ),
        5 => 
        array (
          'name' => 'Proxies',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '代理服务器信息。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'ProxyType' => 
                array (
                  'description' => '代理方式。取值：
- SSHProxy：SSH代理
- HTTPProxy：HTTP代理
- Socks5Proxy：Socks代理',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'SSHProxy',
                ),
                'NodeType' => 
                array (
                  'description' => '代理服务器节点。取值：

- Master：主代理服务器
- Slave：备代理服务器',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Master',
                ),
                'Address' => 
                array (
                  'description' => '代理服务器地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '47.104.**.**',
                ),
                'Port' => 
                array (
                  'description' => '代理服务器端口。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '22',
                ),
                'User' => 
                array (
                  'description' => '代理服务器主机账户。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'root',
                ),
                'Password' => 
                array (
                  'description' => 'Base64处理后的代理服务器账户的密码。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'UWdi******Ng==',
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
            'type' => 'object',
            'properties' => 
            array (
              'NetworkDomainId' => 
              array (
                'description' => '网络域ID。',
                'type' => 'string',
                'example' => '31',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'A2873E9C-A7EA-5735-845C-65D3792623D2',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'NetworkDomainAlreadyExists',
            'errorMessage' => 'The network domain already exists.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NetworkDomainId\\": \\"31\\",\\n  \\"RequestId\\": \\"A2873E9C-A7EA-5735-845C-65D3792623D2\\"\\n}","type":"json"}]',
      'title' => '创建网络域',
      'summary' => '如果您想统一运维分布在不同网络环境中或与堡垒机所在专有网络（VPC）网络不互通的资产，推荐使用堡垒机的网络域功能。您可以为这些资产配置一台代理服务器，然后在堡垒机中创建网络域并添加代理服务器，将资产加入该网络域后即可通过堡垒机运维资产。',
    ),
    'GetNetworkDomain' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-i7m2btk6g48',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的地域ID。

> Region ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'NetworkDomainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的网络域ID。
> 您可以调用[ListNetworkDomains](~~2758827~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
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
              'NetworkDomain' => 
              array (
                'description' => '网络域的详细信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Comment' => 
                  array (
                    'description' => '网络域的备注。',
                    'type' => 'string',
                    'example' => 'comment',
                  ),
                  'Default' => 
                  array (
                    'description' => '是否为内置网络域。

- **true**：是
- **false**：否',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'NetworkDomainId' => 
                  array (
                    'description' => '网络域ID。',
                    'type' => 'string',
                    'example' => '2',
                  ),
                  'NetworkDomainName' => 
                  array (
                    'description' => '网络域名称。',
                    'type' => 'string',
                    'example' => 'SSH代理',
                  ),
                  'NetworkDomainType' => 
                  array (
                    'description' => '网络域类型。取值：
- Direct：直连
- Proxy：代理',
                    'type' => 'string',
                    'example' => 'Proxy',
                  ),
                  'Proxies' => 
                  array (
                    'description' => '代理服务器信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '代理服务器信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ProxyType' => 
                        array (
                          'description' => '代理方式。取值：
- SSHProxy：SSH代理
- HTTPProxy：HTTP代理
- Socks5Proxy：Socks代理',
                          'type' => 'string',
                          'example' => 'HTTPProxy',
                        ),
                        'NodeType' => 
                        array (
                          'description' => '代理服务器节点。取值：

- Master：主代理服务器
- Slave：备代理服务器',
                          'type' => 'string',
                          'example' => 'Master',
                        ),
                        'Address' => 
                        array (
                          'description' => '代理服务器地址。',
                          'type' => 'string',
                          'example' => '47.102.**.**',
                        ),
                        'Port' => 
                        array (
                          'description' => '代理服务器端口。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '22',
                        ),
                        'User' => 
                        array (
                          'description' => '代理服务器账户名。',
                          'type' => 'string',
                          'example' => 'root',
                        ),
                        'HasPassword' => 
                        array (
                          'description' => '代理服务器是否设置密码。取值：
- **true**：设置密码
- **false**：未设置密码',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'ProxyState' => 
                        array (
                          'description' => '代理服务器状态。
- **Available**：可用
- **Unavailable**：不可用',
                          'type' => 'string',
                          'example' => 'Unavailable',
                        ),
                        'ProxyStateErrorCode' => 
                        array (
                          'description' => '代理服务器状态错误码。

- CHECK_PWD_FAILED：密码错误，验密失败
- CHECK_PWD_TIMEOUT：验密超时
- CHECK_PWD_NETWORK_ERR：网络错误
- UNEXPECTED：未知错误',
                          'type' => 'string',
                          'example' => 'CHECK_PWD_TIMEOUT',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。
',
                'type' => 'string',
                'example' => '05F59944-2E24-595C-B21A-8C9955E60FAF',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NetworkDomainNotFound',
            'errorMessage' => 'The network domain is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NetworkDomain\\": {\\n    \\"Comment\\": \\"comment\\",\\n    \\"Default\\": false,\\n    \\"NetworkDomainId\\": \\"2\\",\\n    \\"NetworkDomainName\\": \\"SSH代理\\",\\n    \\"NetworkDomainType\\": \\"Proxy\\",\\n    \\"Proxies\\": [\\n      {\\n        \\"ProxyType\\": \\"HTTPProxy\\",\\n        \\"NodeType\\": \\"Master\\",\\n        \\"Address\\": \\"47.102.**.**\\",\\n        \\"Port\\": 22,\\n        \\"User\\": \\"root\\",\\n        \\"HasPassword\\": true,\\n        \\"ProxyState\\": \\"Unavailable\\",\\n        \\"ProxyStateErrorCode\\": \\"CHECK_PWD_TIMEOUT\\"\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"05F59944-2E24-595C-B21A-8C9955E60FAF\\"\\n}","type":"json"}]',
      'title' => '获取指定网络域详情',
      'summary' => '获取指定网络域详情。',
    ),
    'ListNetworkDomains' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-tl329pvu70x',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时，当前页的页码。默认值为**1**。',
            'type' => 'string',
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
            'description' => '指定分页查询时，每页显示的数据最大条数。  
PageSize参数最大取值为100。每页默认显示的数据条数为20条，PageSize参数值为空时，将默认返回20条数据。
> 建议PageSize取值不要为空。',
            'type' => 'string',
            'required' => false,
            'example' => '20',
          ),
        ),
        4 => 
        array (
          'name' => 'NetworkDomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络域名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'SSH代理',
          ),
        ),
        5 => 
        array (
          'name' => 'NetworkDomainType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络域类型。取值：

- **Direct**：直连
- **Proxy**：代理',
            'type' => 'string',
            'required' => false,
            'example' => 'Proxy',
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
              'NetworkDomains' => 
              array (
                'description' => '查询到的网络域列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Comment' => 
                    array (
                      'description' => '网络域的备注信息。',
                      'type' => 'string',
                      'example' => 'comment',
                    ),
                    'Default' => 
                    array (
                      'description' => '是否为内置网络域。

- **true**：是
- **false**：否',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'NetworkDomainId' => 
                    array (
                      'description' => '网络域的ID。',
                      'type' => 'string',
                      'example' => '2',
                    ),
                    'NetworkDomainName' => 
                    array (
                      'description' => '网络域名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'NetworkDomainType' => 
                    array (
                      'description' => '网络域类型。取值：

- **Direct**：直连
- **Proxy**：代理',
                      'type' => 'string',
                      'example' => 'Proxy',
                    ),
                    'ProxiesState' => 
                    array (
                      'description' => '代理服务器信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'NodeType' => 
                          array (
                            'description' => '代理服务器节点。取值：

- **Master**：主代理服务器
- **Slave**：备代理服务器',
                            'type' => 'string',
                            'example' => 'Master',
                          ),
                          'ProxyState' => 
                          array (
                            'description' => '代理服务器状态。

- **Available**：可用
- **Unavailable**：不可用',
                            'type' => 'string',
                            'example' => 'Available',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'TotalCount' => 
              array (
                'description' => '查询到的网络域总数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '5',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NetworkDomains\\": [\\n    {\\n      \\"Comment\\": \\"comment\\",\\n      \\"Default\\": true,\\n      \\"NetworkDomainId\\": \\"2\\",\\n      \\"NetworkDomainName\\": \\"test\\",\\n      \\"NetworkDomainType\\": \\"Proxy\\",\\n      \\"ProxiesState\\": [\\n        {\\n          \\"NodeType\\": \\"Master\\",\\n          \\"ProxyState\\": \\"Available\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"TotalCount\\": 5\\n}","type":"json"}]',
      'title' => '获取指定堡垒机下网络域列表',
      'summary' => '获取指定堡垒机下的网络域列表。',
    ),
    'DeleteNetworkDomain' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要删除的网络域所在堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost_std_intl-sg-uq833e2dz02',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要删除的网络域所在堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'NetworkDomainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要删除的网络域ID。',
            'type' => 'string',
            'required' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '66B9D942-E3C8-5068-A479-5A7B7BF3DE35',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NetworkDomainNotFound',
            'errorMessage' => 'The network domain is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"66B9D942-E3C8-5068-A479-5A7B7BF3DE35\\"\\n}","type":"json"}]',
      'title' => '删除单个网络域',
      'summary' => '删除单个网络域。',
    ),
    'ModifyNetworkDomain' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要修改的网络域所在堡垒机的实例ID。

> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-x0r3hyr3f09',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要修改的网络域所在堡垒机的区域ID。
> Region ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'NetworkDomainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要修改的网络域ID。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        3 => 
        array (
          'name' => 'NetworkDomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定修改后的网络域名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        4 => 
        array (
          'name' => 'NetworkDomainType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定修改后的网络域类型。取值：

- **Direct**：直连
- **Proxy**：代理',
            'type' => 'string',
            'required' => false,
            'example' => 'Proxy',
          ),
        ),
        5 => 
        array (
          'name' => 'Comment',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改后的网络域备注信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'xxx',
          ),
        ),
        6 => 
        array (
          'name' => 'Proxies',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '网络域中的代理服务器信息。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'ProxyType' => 
                array (
                  'description' => '修改后的代理方式。取值：

- **SSHProxy**：SSH代理
- **HTTPProxy**：HTTP代理
- **Socks5Proxy**：Socks代理',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'HTTPProxy',
                ),
                'NodeType' => 
                array (
                  'description' => '要修改的代理服务器节点。取值：

- **Master**：主代理服务器
- **Slave**：备代理服务器',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Slave',
                ),
                'Address' => 
                array (
                  'description' => '修改后的代理服务器地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '114.21**.**',
                ),
                'Port' => 
                array (
                  'description' => '修改后的代理服务器端口。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '22',
                ),
                'Password' => 
                array (
                  'description' => '修改后的代理服务器账户的密码。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '***',
                ),
                'User' => 
                array (
                  'description' => '修改后的代理服务器的账户名。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'ED49CD1E-3510-5E5C-9133-E2067B656501',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'NetworkDomainAlreadyExists',
            'errorMessage' => 'The network domain already exists.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NetworkDomainNotFound',
            'errorMessage' => 'The network domain is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ED49CD1E-3510-5E5C-9133-E2067B656501\\"\\n}","type":"json"}]',
      'title' => '修改网络域基本信息',
      'summary' => '修改网络域基本信息。',
    ),
    'MoveHostsToNetworkDomain' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-uax2zmx8005',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'NetworkDomainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要移入的网络域ID。
> 您可以调用[ListNetworkDomains](~~2758827~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '2',
          ),
        ),
        3 => 
        array (
          'name' => 'HostIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '指定要移入网络域的主机ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '主机ID。
> 您可以调用[ListHosts](~~200665~~)接口获取该参数。',
              'type' => 'string',
              'required' => false,
              'example' => '1,2',
            ),
            'required' => true,
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
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'F9B9E190-9C8E-5FEE-B963-7E9F1FD7FB4E',
              ),
              'Results' => 
              array (
                'description' => '接口的调用结果信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Code' => 
                    array (
                      'description' => '接口调用的结果。

> LICENSE_OUT_OF_LIMIT 表示当前版本许可没有开启网络域功能。',
                      'type' => 'string',
                      'example' => 'OK',
                    ),
                    'HostId' => 
                    array (
                      'description' => '主机ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'Message' => 
                    array (
                      'description' => '错误信息。',
                      'type' => 'string',
                      'example' => '无',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F9B9E190-9C8E-5FEE-B963-7E9F1FD7FB4E\\",\\n  \\"Results\\": [\\n    {\\n      \\"Code\\": \\"OK\\",\\n      \\"HostId\\": \\"1\\",\\n      \\"Message\\": \\"无\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量将主机移入指定网络域',
      'summary' => '批量将主机移入指定网络域。',
    ),
    'MoveDatabasesToNetworkDomain' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-zpr3h2zo60l',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'NetworkDomainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要移入的网络域ID。
> 您可以调用[ListNetworkDomains](~~2758827~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        3 => 
        array (
          'name' => 'DatabaseIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '指定要移入网络域的数据库实例ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '数据库实例ID。
> 您可以调用[ListDatabases ](~~2758822~~)接口获取该参数。',
              'type' => 'string',
              'required' => false,
              'example' => '1,2',
            ),
            'required' => true,
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
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'E5B1BC32-72B2-5BFD-BF75-5D38261264D1',
              ),
              'Results' => 
              array (
                'description' => '接口调用的结果。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Code' => 
                    array (
                      'description' => '接口调用的结果。

> LICENSE_OUT_OF_LIMIT 表示当前版本许可没有开启网络域功能。',
                      'type' => 'string',
                      'example' => 'OK',
                    ),
                    'DatabaseId' => 
                    array (
                      'description' => '数据库实例ID。',
                      'type' => 'string',
                      'example' => '45',
                    ),
                    'Message' => 
                    array (
                      'description' => '错误信息。',
                      'type' => 'string',
                      'example' => '无',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E5B1BC32-72B2-5BFD-BF75-5D38261264D1\\",\\n  \\"Results\\": [\\n    {\\n      \\"Code\\": \\"OK\\",\\n      \\"DatabaseId\\": \\"45\\",\\n      \\"Message\\": \\"无\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量将数据库移入指定网络域',
      'summary' => '批量将数据库移入指定网络域。',
    ),
    'CreateHostAccount' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要创建主机账户的主机所在堡垒机的实例ID。
> 可通过调用[DescribeInstances](~~153281~~)接口获取堡垒机实例ID。
',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要创建主机账户的主机所在堡垒机的地域ID。

> 地域ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'HostId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要创建主机账户的主机ID。

> 可通过调用[ListHosts](~~200665~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'ProtocolName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定新建主机账户的协议名称。
<br>取值：
- SSH
- RDP',
            'type' => 'string',
            'required' => true,
            'example' => 'SSH',
          ),
        ),
        4 => 
        array (
          'name' => 'HostAccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定新建主机账户的名称，最长支持128字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'accountname',
          ),
        ),
        5 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定新建主机账户的密码。',
            'type' => 'string',
            'required' => false,
            'example' => '123456',
          ),
        ),
        6 => 
        array (
          'name' => 'PrivateKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定新建主机账户的私钥，即使用Base64编码后的字符串。

> 主机账户协议ProtocolName为SSH时，该参数生效。ProtocolName为RDP时，无需配置该参数。支持同时为主机账户配置密码和私钥。在连接资产时，堡垒机会优先使用私钥进行连接。',
            'type' => 'string',
            'required' => false,
            'example' => '-----BEGIN RSA PRIVATE KEY-----
......
-----END RSA PRIVATE KEY-----
',
          ),
        ),
        7 => 
        array (
          'name' => 'PassPhrase',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '定新建主机账户的私钥口令。

> 主机账户协议ProtocolName为SSH时，您可以配置该参数。ProtocolName为RDP时，无需配置该参数。',
            'type' => 'string',
            'required' => false,
            'example' => '123456',
          ),
        ),
        8 => 
        array (
          'name' => 'HostShareKeyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主机共享密钥ID。',
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
            'type' => 'object',
            'properties' => 
            array (
              'HostAccountId' => 
              array (
                'description' => '主机账户ID。',
                'type' => 'string',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'HostAccountAlreadyExists',
            'errorMessage' => 'The host account already exists.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HostAccountId\\": \\"1\\",\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateHostAccountResponse>\\n    <HostAccountId>1</HostAccountId>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n</CreateHostAccountResponse>","errorExample":""}]',
      'title' => '为指定主机创建主机账户',
      'summary' => '在堡垒机中新建主机后，您可以为其创建相应的主机账户，即将您主机已有的账户托管至堡垒机。创建主机账户后，运维人员即可使用该账户通过堡垒机登录主机进行运维。',
    ),
    'GetHostAccount' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的主机账户所在堡垒机的实例ID。
>您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的主机账户所在堡垒机的区域ID。
>区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'HostAccountId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的主机账户ID。
> 您可以调用[ListHostAccounts](~~204372~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
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
            'description' => '响应数据。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'HostAccount' => 
              array (
                'description' => '查询到的主机账户详细信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'HasPassword' => 
                  array (
                    'description' => '主机账户是否设置密码。取值：

- **true**：已设置密码。
- **false**：未设置密码。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'PrivateKeyFingerprint' => 
                  array (
                    'description' => '私钥的指纹信息。',
                    'type' => 'string',
                    'example' => 'fe:ca:37:42:30:00:9d:95:e6:73:e5:b0:32:0a:**:**',
                  ),
                  'ProtocolName' => 
                  array (
                    'description' => '主机账户的协议名称。取值：

- **SSH**
- **RDP**',
                    'type' => 'string',
                    'example' => 'SSH',
                  ),
                  'HostAccountName' => 
                  array (
                    'description' => '主机账户名称。',
                    'type' => 'string',
                    'example' => 'abc',
                  ),
                  'HostAccountId' => 
                  array (
                    'description' => '主机账户ID。

',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'HostId' => 
                  array (
                    'description' => '主机账户所属主机的ID。

',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'HostShareKeyId' => 
                  array (
                    'description' => '主机共享密钥ID。',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'HostShareKeyName' => 
                  array (
                    'description' => '主机共享密钥名称。',
                    'type' => 'string',
                    'example' => 'name',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'HostAccountNotFound',
            'errorMessage' => 'The host account is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"HostAccount\\": {\\n    \\"HasPassword\\": true,\\n    \\"PrivateKeyFingerprint\\": \\"fe:ca:37:42:30:00:9d:95:e6:73:e5:b0:32:0a:**:**\\",\\n    \\"ProtocolName\\": \\"SSH\\",\\n    \\"HostAccountName\\": \\"abc\\",\\n    \\"HostAccountId\\": \\"1\\",\\n    \\"HostId\\": \\"1\\",\\n    \\"HostShareKeyId\\": \\"1\\",\\n    \\"HostShareKeyName\\": \\"name\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetHostAccountResponse>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n    <HostAccount>\\n        <HostAccountName>abc</HostAccountName>\\n        <ProtocolName>SSH</ProtocolName>\\n        <PrivateKeyFingerprint>fe:ca:37:42:30:00:9d:95:e6:73:e5:b0:32:0a:**:**</PrivateKeyFingerprint>\\n        <HostId>1</HostId>\\n        <HasPassword>true</HasPassword>\\n        <HostAccountId>1</HostAccountId>\\n    </HostAccount>\\n</GetHostAccountResponse>","errorExample":""}]',
      'title' => '获取指定主机账户详情',
      'summary' => '获取指定主机账户详情。',
    ),
    'ListHostAccounts' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的主机所在堡垒机的实例ID。

> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的主机所在堡垒机的地域ID。

> 地域ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'HostId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询主机账户的主机ID。

> 您可以调用[ListHosts](~~200665~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时，当前页的页码。默认值为**1**。',
            'type' => 'string',
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
            'description' => '指定分页查询时，每页显示的数据最大条数。
<br>PageSize参数最大取值为100。每页默认显示的数据条数为20条，PageSize参数值为空时，将默认返回20条数据。

> 建议PageSize取值不要为空。',
            'type' => 'string',
            'required' => false,
            'example' => '20',
          ),
        ),
        5 => 
        array (
          'name' => 'HostAccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的主机账户名称。最多支持128字符，仅支持精确查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'abc',
          ),
        ),
        6 => 
        array (
          'name' => 'ProtocolName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的主机账户的协议名称。
<br>取值：
- SSH
- RDP',
            'type' => 'string',
            'required' => false,
            'example' => 'SSH',
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
                'description' => '查询到的主机账户总数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。

',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'HostAccounts' => 
              array (
                'description' => '查询到的主机账户列表。

',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'HasPassword' => 
                    array (
                      'description' => '当前主机账户是否设置了密码。<br>取值：

- true：已设置密码。
- false：未设置密码。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'PrivateKeyFingerprint' => 
                    array (
                      'description' => '主机账户的私钥指纹信息。',
                      'type' => 'string',
                      'example' => 'fe:ca:37:42:30:00:9d:95:e6:73:e5:b0:32:0a:**:**',
                    ),
                    'ProtocolName' => 
                    array (
                      'description' => '主机账户的协议名称。
<br>取值：

- SSH
- RDP',
                      'type' => 'string',
                      'example' => 'SSH',
                    ),
                    'HostAccountName' => 
                    array (
                      'description' => '主机账户名称。',
                      'type' => 'string',
                      'example' => 'abc',
                    ),
                    'HostAccountId' => 
                    array (
                      'description' => '主机账户ID。

',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'HostId' => 
                    array (
                      'description' => '主机ID。

',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'HostShareKeyId' => 
                    array (
                      'description' => '主机共享密钥ID。	',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'HostShareKeyName' => 
                    array (
                      'description' => '主机共享密钥名称。',
                      'type' => 'string',
                      'example' => 'name',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"HostAccounts\\": [\\n    {\\n      \\"HasPassword\\": true,\\n      \\"PrivateKeyFingerprint\\": \\"fe:ca:37:42:30:00:9d:95:e6:73:e5:b0:32:0a:**:**\\",\\n      \\"ProtocolName\\": \\"SSH\\",\\n      \\"HostAccountName\\": \\"abc\\",\\n      \\"HostAccountId\\": \\"1\\",\\n      \\"HostId\\": \\"1\\",\\n      \\"HostShareKeyId\\": \\"1\\",\\n      \\"HostShareKeyName\\": \\"name\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListHostAccountsResponse>\\n    <TotalCount>1</TotalCount>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n    <HostAccounts>\\n        <HasPassword>true</HasPassword>\\n        <PrivateKeyFingerprint>fe:ca:37:42:30:00:9d:95:e6:73:e5:b0:32:0a:**:**</PrivateKeyFingerprint>\\n        <ProtocolName>SSH</ProtocolName>\\n        <HostAccountName>abc</HostAccountName>\\n        <HostAccountId>1</HostAccountId>\\n        <HostId>1</HostId>\\n        <HostShareKeyId>1</HostShareKeyId>\\n        <HostShareKeyName>name</HostShareKeyName>\\n    </HostAccounts>\\n</ListHostAccountsResponse>","errorExample":""}]',
      'title' => '获取主机账户列表',
      'summary' => '获取主机账户列表。',
    ),
    'ModifyHostAccount' => 
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
            'description' => '指定要修改的主机账户所在堡垒机的实例ID。

> 可通过调用[DescribeInstances](~~153281~~)接口获取堡垒机实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的主机账户所在堡垒机的区域ID。

> 地域ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'HostAccountId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要修改的主机账户ID。

> 您可以调用[ListHostAccounts](~~204372~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'HostAccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定修改后的主机账户名称，最多支持128字符。

',
            'type' => 'string',
            'required' => false,
            'example' => 'abc',
          ),
        ),
        4 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定修改后的主机账户密码。

',
            'type' => 'string',
            'required' => false,
            'example' => '123456',
          ),
        ),
        5 => 
        array (
          'name' => 'PrivateKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定修改后的主机账户私钥，私钥为使用Base64编码后的字符串。

> 主机账户协议为SSH时，该参数生效。主机账户协议为RDP时，无需配置该参数。您可以调用[GetHostAccount](~~204391~~)接口查询主机账户使用的协议。支持同时为主机账户配置密码和私钥。在连接资产时，堡垒机会优先使用私钥进行连接。',
            'type' => 'string',
            'required' => false,
            'example' => '-----BEGIN RSA PRIVATE KEY-----
......
-----END RSA PRIVATE KEY-----
',
          ),
        ),
        6 => 
        array (
          'name' => 'PassPhrase',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定修改后的主机账户的私钥口令。

> 主机账户协议为SSH时，该参数生效。主机账户协议为RDP时，无需配置该参数。',
            'type' => 'string',
            'required' => false,
            'example' => '123456',
          ),
        ),
        7 => 
        array (
          'name' => 'HostShareKeyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主机共享密钥ID。
> 此ID可通过调用[ListHostShareKeys](~~462973~~)接口获取。',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。

',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'HostAccountNotFound',
            'errorMessage' => 'The host account is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyHostAccountResponse>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n</ModifyHostAccountResponse>","errorExample":""}]',
      'title' => '修改主机账户信息',
      'summary' => '修改主机账户信息，支持修改主机账户的名称、密码和私钥信息。',
    ),
    'DeleteHostAccount' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要删除的主机账户所在堡垒机实例的ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的主机账户所在堡垒机的地域ID。
> 地域ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'HostAccountId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要删除的主机账户的ID。
> 您可以调用[ListHostAccounts](~~204372~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'HostAccountNotFound',
            'errorMessage' => 'The host account is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteHostAccountResponse>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n</DeleteHostAccountResponse>","errorExample":""}]',
      'title' => '删除单个主机账户',
      'summary' => '删除单个主机账户。',
      'description' => '# 使用说明
本接口用于删除单个主机账户。如果某个主机的账号不再使用，您可以调用本接口删除已在堡垒机上配置的该主机的主机账户。

> 删除主机账户后，通过堡垒机登录该主机时需要自行输入该主机的主机账户和密码。


# QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ResetHostAccountCredential' => 
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
            'description' => '指定要清除登录凭据的主机账户所在堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要清除登录凭据的主机账户所在堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'HostAccountId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要清除登录凭据的主机账户ID。
> 您可以调用[ListHostAccounts](~~204372~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'CredentialType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要清除的登录凭据类型。取值：
- **Password**：密码
- **PrivateKey**：SSH私钥',
            'type' => 'string',
            'required' => true,
            'example' => 'Password',
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
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'HostAccountNotFound',
            'errorMessage' => 'The host account is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\"\\n}","errorExample":""},{"type":"xml","example":"<ResetHostAccountCredentialResponse>\\r\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\r\\n</ResetHostAccountCredentialResponse>","errorExample":""}]',
      'title' => '清除指定主机账户登录凭据',
      'summary' => '清除指定主机账户登录凭据（密码或SSH私钥）。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateDatabaseAccount' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要新建数据库账户的堡垒机实例的ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-5yd34ol020a',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要新建数据库账户的堡垒机的地域ID。
> 地域ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
          ),
        ),
        2 => 
        array (
          'name' => 'DatabaseId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要创建账户的数据库实例ID。
> 您可以调用[ListDatabaseAccounts](~~2758839~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        3 => 
        array (
          'name' => 'DatabaseAccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定新创建数据库账户的名称。最多支持128字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'root',
          ),
        ),
        4 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定新建数据库账户的密码。',
            'type' => 'string',
            'required' => false,
            'example' => 'MCQ******',
          ),
        ),
        5 => 
        array (
          'name' => 'DatabaseSchema',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名。当DatabaseId对应的Database为Postgres和Oracle时，DatabaseSchema为必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'orcl',
          ),
        ),
        6 => 
        array (
          'name' => 'LoginAttribute',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '登录属性，Oracle类型数据库必须指定，取值：
- SERVICENAME
- SID',
            'type' => 'string',
            'required' => false,
            'example' => 'SID',
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
              'DatabaseAccountId' => 
              array (
                'description' => '数据库账户ID。',
                'type' => 'string',
                'example' => '40',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'B07C465D-B09F-54DD-8FEC-90788BEABAFC',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'DatabaseAccountAlreadyExists',
            'errorMessage' => 'The database account already exists.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"DatabaseAccountId\\": \\"40\\",\\n  \\"RequestId\\": \\"B07C465D-B09F-54DD-8FEC-90788BEABAFC\\"\\n}","type":"json"}]',
      'title' => '为指定数据库实例创建数据库账户',
      'summary' => '数据库创建成功后，您可以为其新建数据库账户。创建成功后，运维员可以使用该账号登录并运维数据库。',
    ),
    'ModifyDatabaseAccount' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要修改的数据库账户所在堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-zpr2zyqx603',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要修改的数据库账户所在堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'DatabaseAccountId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要修改的数据库账户ID。
> 您可以调用[ListDatabaseAccounts](~~2758839~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '2',
          ),
        ),
        3 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定修改后的数据库账户密码。',
            'type' => 'string',
            'required' => false,
            'example' => '14SZ!******',
          ),
        ),
        4 => 
        array (
          'name' => 'DatabaseAccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定修改后的数据库账户名称，最多支持128字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'aaa',
          ),
        ),
        5 => 
        array (
          'name' => 'DatabaseSchema',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定修改后的数据库名。当DatabaseId对应的Database为Postgres和Oracle时，DatabaseSchema为必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'orcl',
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
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '850FA4B4-5BD2-5269-903E-3B7E07E6C975',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'DatabaseAccountAlreadyExists',
            'errorMessage' => 'The database account already exists.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'DatabaseAccountNotFound',
            'errorMessage' => 'The database account is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"850FA4B4-5BD2-5269-903E-3B7E07E6C975\\"\\n}","type":"json"}]',
      'title' => '修改数据库账户基本信息',
      'summary' => '修改数据库账户基本信息。',
    ),
    'GetDatabaseAccount' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-i7m2d7zrw11',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
        2 => 
        array (
          'name' => 'DatabaseAccountId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的数据库账户ID。
> 您可以调用[ListDatabaseAccounts](~~2758839~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '9',
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
              'DatabaseAccount' => 
              array (
                'description' => '查询到的数据库账号信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'DatabaseAccountId' => 
                  array (
                    'description' => '数据库账户ID。',
                    'type' => 'string',
                    'example' => '9',
                  ),
                  'DatabaseAccountName' => 
                  array (
                    'description' => '数据库账户名称。',
                    'type' => 'string',
                    'example' => 'uac',
                  ),
                  'DatabaseSchema' => 
                  array (
                    'description' => '数据库名。当数据库为Postgres和Oracle时，DatabaseSchema有返回值。',
                    'type' => 'string',
                    'example' => 'orcl',
                  ),
                  'HasPassword' => 
                  array (
                    'description' => '当前数据库账户是否设置了密码。<br>取值：

- true：已设置密码。
- false：未设置密码。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'LoginAttribute' => 
                  array (
                    'description' => '登录属性，Oracle类型数据库有返回值：
- SERVICENAME
- SID',
                    'type' => 'string',
                    'example' => 'SID',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'FA06D274-8D0A-59FB-8B7E-584C0EEBBFFF',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'DatabaseAccountNotFound',
            'errorMessage' => 'The database account is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"DatabaseAccount\\": {\\n    \\"DatabaseAccountId\\": \\"9\\",\\n    \\"DatabaseAccountName\\": \\"uac\\",\\n    \\"DatabaseSchema\\": \\"orcl\\",\\n    \\"HasPassword\\": true,\\n    \\"LoginAttribute\\": \\"SID\\"\\n  },\\n  \\"RequestId\\": \\"FA06D274-8D0A-59FB-8B7E-584C0EEBBFFF\\"\\n}","type":"json"}]',
      'title' => '获取指定数据库账户详情',
      'summary' => '获取指定数据库账户详情。',
    ),
    'ListDatabaseAccounts' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。

> 可通过调用[DescribeInstances](~~153281~~)接口获取堡垒机实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-7mz2za0ro06',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
          ),
        ),
        2 => 
        array (
          'name' => 'DatabaseId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询数据库账户的数据库实例ID。
> 您可以调用[ListDatabases](~~2758822~~)接口获取该参数。',
            'type' => 'string',
            'required' => false,
            'example' => '3',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时，当前页的页码。默认值为1。',
            'type' => 'string',
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
            'description' => '指定分页查询时，每页显示的数据最大条数。  
PageSize参数最大取值为100。每页默认显示的数据条数为20条，PageSize参数值为空时，将默认返回20条数据。
> 建议PageSize取值不要为空。',
            'type' => 'string',
            'required' => false,
            'example' => '20',
          ),
        ),
        5 => 
        array (
          'name' => 'DatabaseAccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的数据库账户名称。最多支持128字符，仅支持精确查询。',
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
              'DatabaseAccounts' => 
              array (
                'description' => '查询到的数据库账户列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DatabaseAccountId' => 
                    array (
                      'description' => '数据库账户ID。',
                      'type' => 'string',
                      'example' => '59',
                    ),
                    'DatabaseAccountName' => 
                    array (
                      'description' => '数据库账户名。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'DatabaseId' => 
                    array (
                      'description' => '数据库实例ID。',
                      'type' => 'string',
                      'example' => '4',
                    ),
                    'DatabaseSchema' => 
                    array (
                      'description' => '数据库名。当DatabaseId对应的Database为Postgres和Oracle时，DatabaseSchema有返回值。',
                      'type' => 'string',
                      'example' => 'orcl',
                    ),
                    'HasPassword' => 
                    array (
                      'description' => '数据库账户是否设置密码。取值：

- **true**：已设置密码。
- **false**：未设置密码。',
                      'type' => 'string',
                      'example' => 'true',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '4F6C075F-FC86-476E-943B-097BD4E12948',
              ),
              'TotalCount' => 
              array (
                'description' => '查询到的数据库账户总数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"DatabaseAccounts\\": [\\n    {\\n      \\"DatabaseAccountId\\": \\"59\\",\\n      \\"DatabaseAccountName\\": \\"test\\",\\n      \\"DatabaseId\\": \\"4\\",\\n      \\"DatabaseSchema\\": \\"orcl\\",\\n      \\"HasPassword\\": \\"true\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"4F6C075F-FC86-476E-943B-097BD4E12948\\",\\n  \\"TotalCount\\": 10\\n}","type":"json"}]',
      'title' => '获取数据库账户列表',
      'summary' => '获取数据库账户列表。',
    ),
    'ListDatabaseAccountsForUserGroup' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机实例的ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-pe334a03o0h',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'UserGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询已授权数据库账户列表的用户组ID。
> 您可以调用[ListUserGroups](~~204509~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        3 => 
        array (
          'name' => 'DatabaseId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询数据库账户的数据库实例ID。
> 您可以调用[ListDatabaseAccounts](~~2758839~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '36',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时，当前页的页码。默认值为**1**。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时，每页显示的数据最大条数。  
PageSize参数最大取值为100。每页默认显示的数据条数为20条，PageSize参数值为空时，将默认返回20条数据。
> 建议PageSize取值不要为空。',
            'type' => 'string',
            'required' => false,
            'example' => '20',
          ),
        ),
        6 => 
        array (
          'name' => 'DatabaseAccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的数据库账户名称。最多支持128字符，仅支持精确查询。',
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
              'DatabaseAccounts' => 
              array (
                'description' => '查询到的数据库账户列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DatabaseAccountId' => 
                    array (
                      'description' => '数据库账户ID。',
                      'type' => 'string',
                      'example' => '4',
                    ),
                    'DatabaseAccountName' => 
                    array (
                      'description' => '数据库账户名。',
                      'type' => 'string',
                      'example' => 'root',
                    ),
                    'DatabaseId' => 
                    array (
                      'description' => '数据库账号所属数据库实例ID。',
                      'type' => 'string',
                      'example' => '11',
                    ),
                    'IsAuthorized' => 
                    array (
                      'description' => '数据库账户是否授权给当前用户。取值：
- **true**：已授权
- **false**：未授权',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'ProtocolName' => 
                    array (
                      'description' => '数据库账户的协议名称。取值：

- **MySQL**
- **Oracle**
- **PostgreSQL**
- **SQLServer**',
                      'type' => 'string',
                      'example' => 'MySQL',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'TotalCount' => 
              array (
                'description' => '查询到的数据库账户总数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"DatabaseAccounts\\": [\\n    {\\n      \\"DatabaseAccountId\\": \\"4\\",\\n      \\"DatabaseAccountName\\": \\"root\\",\\n      \\"DatabaseId\\": \\"11\\",\\n      \\"IsAuthorized\\": true,\\n      \\"ProtocolName\\": \\"MySQL\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"TotalCount\\": 10\\n}","type":"json"}]',
      'title' => '查询用户组已授权和未授权的数据库账户列表',
      'summary' => '查询用户组已授权和未授权的数据库账户列表。',
    ),
    'DeleteDatabaseAccount' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要删除的数据库账户所在堡垒机实例的ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要删除的数据库账户所在堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'DatabaseAccountId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要删除的数据库账户ID。
> 您可以调用[ListDatabaseAccounts](~~2758839~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '9',
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
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '81500666-d7f5-4143-8329-0223cc738105',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'DatabaseAccountNotFound',
            'errorMessage' => 'The database account is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"81500666-d7f5-4143-8329-0223cc738105\\"\\n}","type":"json"}]',
      'title' => '删除单个数据库账户',
      'summary' => '删除单个数据库账户。',
    ),
    'CreateUser' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要新建用户的堡垒机实例的ID。
>  您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要新建的用户的堡垒机的地域ID。
>地域ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'Source',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要新建的用户的来源。取值：

- **Local**：本地用户
- **Ram**：RAM用户
-  **AD**：AD用户
-  **LDAP**：LDAP用户',
            'type' => 'string',
            'required' => true,
            'example' => 'Local',
          ),
        ),
        3 => 
        array (
          'name' => 'UserName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要新建的用户的登录名称。该参数只能由字母、数字、下划线（_）组成，最多支持128字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'abc_def',
          ),
        ),
        4 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要新建的用户的登录密码。 至少8位，至少包含大小写字母、数字、特殊符号，最多支持128字符。
> 新创建用户来源为本地用户（即Source取值为Local）时，该参数为必填项。',
            'type' => 'string',
            'required' => false,
            'example' => '213****',
          ),
        ),
        5 => 
        array (
          'name' => 'DisplayName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要新建的用户的显示姓名。最多支持128字符。
> 未填写则默认采用登录名作为显示姓名。',
            'type' => 'string',
            'required' => false,
            'example' => 'Bob',
          ),
        ),
        6 => 
        array (
          'name' => 'Comment',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要新建的用户的备注信息。最多支持500字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'comment',
          ),
        ),
        7 => 
        array (
          'name' => 'Email',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要新建的用户的邮箱。
> - 当TwoFactorStatus为“Enable”，且TwoFactorMethods为“email”时，或当TwoFactorStatus为“Global”，且全局双因子配置中TwoFactorMethods为“email”时，该参数为必填。
> - 您可以调用[GetInstanceTwoFactor](~~462968~~)接口获取全局双因子配置',
            'type' => 'string',
            'required' => false,
            'example' => 'username@example.com',
          ),
        ),
        8 => 
        array (
          'name' => 'Mobile',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要新建的用户的手机号码。
> - 当TwoFactorStatus为“Enable”，且TwoFactorMethods为“sms”或“dingtalk”时，或当TwoFactorStatus为“Global”，且全局双因子配置中TwoFactorMethods为“sms”或“dingtalk”时，该参数为必填。
> - 您可以调用[GetInstanceTwoFactor](~~462968~~)接口获取全局双因子配置',
            'type' => 'string',
            'required' => false,
            'example' => '1359999****',
          ),
        ),
        9 => 
        array (
          'name' => 'SourceUserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要新建的用户的唯一标识。
>- 该参数是堡垒机用户对应的RAM用户的唯一标识。新创建用户来源为RAM用户（即Source取值为Ram）时，该参数为必填项。您可以调用访问控制的[ListUsers](~~28684~~)接口从返回数据UserId获取该参数。
> - 新创建用户来源为AD或LDAP时，该参数为必填项，取值为用户的DN。',
            'type' => 'string',
            'required' => false,
            'example' => '122748924538****',
          ),
        ),
        10 => 
        array (
          'name' => 'MobileCountryCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要新建的用户手机号的国际域名。默认值为CN，取值：

- **CN**：中国内地（+86）
- **HK**：中国香港（+852）
- **MO**：中国澳门（+853）
- **TW**：中国台湾（+886）
- **RU**：俄罗斯（+7）
- **SG**：新加坡（+65）
- **MY**：马来西亚（+60）
- **ID**：印度尼西亚（+62）
- **DE**：德国（+49）
- **AU**：澳大利亚（+61）
- **US**：美国（+1）
- **AE**：迪拜（+971）
- **JP**：日本（+81）
- **GB**：英国（+44）
- **IN**：印度（+91）
- **KR**：韩国（+82）
- **PH**：菲律宾（+63）
- **CH**：瑞士（+41）
- **SE**：瑞典（+46）
- **SA**：沙特（+966）',
            'type' => 'string',
            'required' => false,
            'example' => 'CN',
          ),
        ),
        11 => 
        array (
          'name' => 'EffectiveStartTime',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '开始生效时间戳，单位秒',
            'description' => '用户有效期开始时间（秒，时间戳格式）',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1669630029',
          ),
        ),
        12 => 
        array (
          'name' => 'EffectiveEndTime',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '有效期结束时间戳。单位秒',
            'description' => '用户有效期结束时间（秒，时间戳格式）',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1672502400',
          ),
        ),
        13 => 
        array (
          'name' => 'NeedResetPassword',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '下次登录是否需要重置密码',
            'description' => '下次登录是否需要重置密码。取值：

- **true**：是
- **false**：否

> 未填时默认为false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        14 => 
        array (
          'name' => 'TwoFactorStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户双因子状态，取值：

- **Global**：遵循全局设定
- **Disable**：关闭双因子
- **Enable**：开启双因子，遵循单个用户设定

> 未填时默认为Global。',
            'type' => 'string',
            'required' => false,
            'example' => 'Enable',
          ),
        ),
        15 => 
        array (
          'name' => 'TwoFactorMethods',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '打开双因子认证方式的数组，目前最多支持一个，取值：

- **sms**：短信
- **email**：邮件
- **dingtalk**：钉钉
- **totp OTP**：令牌
>当TwoFactorStatus为“Enable”时，至少指定一种。',
            'type' => 'string',
            'required' => false,
            'example' => '["sms"]',
          ),
        ),
        16 => 
        array (
          'name' => 'LanguageStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '消息通知语言设置。
- **Global**：遵循全局
- **Custom**：自定义

> 未填时默认为Global。',
            'type' => 'string',
            'required' => false,
            'example' => 'Custom',
          ),
        ),
        17 => 
        array (
          'name' => 'Language',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当LanguageStatus为Custom 时，Language为必填。
取值：
- **zh-cn**：简体中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应数据。',
            'type' => 'object',
            'properties' => 
            array (
              'UserId' => 
              array (
                'description' => '新建的用户的ID。',
                'type' => 'string',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'UserAlreadyExists',
            'errorMessage' => 'The user already exists.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"UserId\\": \\"1\\",\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateUserResponse>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n    <UserId>1</UserId>\\n</CreateUserResponse>","errorExample":""}]',
      'title' => '创建用户',
      'summary' => '创建用户。',
      'description' => '本接口用于创建堡垒机的用户，支持添加本地用户、RAM用户、AD用户和LDAP用户。堡垒机管理员为运维员创建登录堡垒机的账户（即新建用户）后，运维员才能使用该账户登录堡垒机运维已授权的主机。

本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~148139~~)。

调用API的请求格式，请参见本文示例中的请求示例。',
    ),
    'GetUser' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的用户所在堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的用户所在堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的用户ID。
> 您可以调用[ListUsers](~~204522~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
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
            'description' => '响应数据。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'User' => 
              array (
                'description' => '查询到的用户详细信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'DisplayName' => 
                  array (
                    'description' => '用户的显示姓名。',
                    'type' => 'string',
                    'example' => 'Bob',
                  ),
                  'Comment' => 
                  array (
                    'description' => '用户备注信息。',
                    'type' => 'string',
                    'example' => 'commet',
                  ),
                  'Email' => 
                  array (
                    'description' => '用户的邮箱地址。',
                    'type' => 'string',
                    'example' => '1099**@qq.com',
                  ),
                  'Mobile' => 
                  array (
                    'description' => '用户的手机号码。',
                    'type' => 'string',
                    'example' => '1359999****',
                  ),
                  'MobileCountryCode' => 
                  array (
                    'description' => '用户手机号码的国际域名。取值：
- **CN**：中国内地（+86）
- **HK**：中国香港（+852）
- **MO**：中国澳门（+853）
- **TW**：中国台湾（+886）
- **RU**：俄罗斯（+7）
- **SG**：新加坡（+65）
- **MY**：马来西亚（+60）
- **ID**：印度尼西亚（+62）
- **DE**：德国（+49）
- **AU**：澳大利亚（+61）
- **US**：美国（+1）
- **AE**：迪拜（+971）
- **JP**：日本（+81）
- **GB**：英国（+44）
- **IN**：印度（+91）
- **KR**：韩国（+82）
- **PH**：菲律宾（+63）
- **CH**：瑞士（+41）
- **SE**：瑞典（+46）',
                    'type' => 'string',
                    'example' => 'CN',
                  ),
                  'UserId' => 
                  array (
                    'description' => '用户ID。',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'Source' => 
                  array (
                    'description' => '用户的来源。取值：
- **Local**：本地用户
- **Ram**：RAM用户',
                    'type' => 'string',
                    'example' => 'Local',
                  ),
                  'UserName' => 
                  array (
                    'description' => '用户的登录名称。',
                    'type' => 'string',
                    'example' => 'abcabc_def',
                  ),
                  'SourceUserId' => 
                  array (
                    'description' => '用户的唯一标识。
> 该参数是堡垒机用户对应的RAM用户的唯一标识。用户来源为RAM用户（即**Source**取值为**Ram**）时，返回该参数。用户来源为本地用户（即**Source**取值为**Local**）时，该参数返回值为空。',
                    'type' => 'string',
                    'example' => '122748924538****',
                  ),
                  'UserState' => 
                  array (
                    'description' => '用户状态组。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '用户的状态。取值：
- **Normal**：正常状态
- **Frozen**：被锁定状态
- **Expired**：已过期状态',
                      'type' => 'string',
                      'example' => '["Normal"]',
                    ),
                  ),
                  'EffectiveStartTime' => 
                  array (
                    'description' => '用户有效期开始时间（秒，时间戳格式）',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1669630029',
                  ),
                  'EffectiveEndTime' => 
                  array (
                    'description' => '用户有效期结束时间（秒，时间戳格式）',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1672502400',
                  ),
                  'NeedResetPassword' => 
                  array (
                    'description' => '下次登录是否需要重置密码。取值：
- **true**：是
- **false**：否',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'TwoFactorMethods' => 
                  array (
                    'description' => '打开的双因子认证方式的数组',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '打开双因子认证方式的数组，目前最多支持一个，取值：

- **sms**：短信
- **email**：邮件
- **dingtalk**：钉钉
- **totp OTP**：令牌',
                      'type' => 'string',
                      'example' => '[
      "sms"
]',
                    ),
                  ),
                  'TwoFactorStatus' => 
                  array (
                    'description' => '用户双因子状态，取值：

- **Global**：遵循全局设定
- **Disable**：关闭双因子
- **Enable**：开启双因子，遵循单个用户设定',
                    'type' => 'string',
                    'example' => 'Enable',
                  ),
                  'LanguageStatus' => 
                  array (
                    'description' => '消息通知语言设置。

- **Global**：遵循全局
- **Custom**：自定义',
                    'type' => 'string',
                    'example' => 'Custom',
                  ),
                  'Language' => 
                  array (
                    'description' => '当LanguageStatus为Custom 时，Language为必填。 取值：

- **zh-cn**：简体中文
- **en**：英文',
                    'type' => 'string',
                    'example' => 'en',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'UserNotFound',
            'errorMessage' => 'The user is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"User\\": {\\n    \\"DisplayName\\": \\"Bob\\",\\n    \\"Comment\\": \\"commet\\",\\n    \\"Email\\": \\"1099**@qq.com\\",\\n    \\"Mobile\\": \\"1359999****\\",\\n    \\"MobileCountryCode\\": \\"CN\\",\\n    \\"UserId\\": \\"1\\",\\n    \\"Source\\": \\"Local\\",\\n    \\"UserName\\": \\"abcabc_def\\",\\n    \\"SourceUserId\\": \\"122748924538****\\",\\n    \\"UserState\\": [\\n      \\"[\\\\\\"Normal\\\\\\"]\\"\\n    ],\\n    \\"EffectiveStartTime\\": 1669630029,\\n    \\"EffectiveEndTime\\": 1672502400,\\n    \\"NeedResetPassword\\": true,\\n    \\"TwoFactorMethods\\": [\\n      \\"[\\\\n      \\\\\\"sms\\\\\\"\\\\n]\\"\\n    ],\\n    \\"TwoFactorStatus\\": \\"Enable\\",\\n    \\"LanguageStatus\\": \\"Custom\\",\\n    \\"Language\\": \\"en\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetUserResponse>\\n    <User>\\n        <Comment>commet</Comment>\\n        <Email>1099**@qq.com</Email>\\n        <UserName>abcabc_def</UserName>\\n        <UserId>1</UserId>\\n        <SourceUserId>122748924538****</SourceUserId>\\n        <DisplayName>Bob</DisplayName>\\n        <MobileCountryCode>CN</MobileCountryCode>\\n        <Mobile>1359999****</Mobile>\\n        <Source>Local</Source>\\n        <UserState>Normal</UserState>\\n    </User>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n</GetUserResponse>","errorExample":""}]',
      'title' => '获取用户信息',
      'summary' => '获取指定堡垒机用户的详细信息。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~148139~~)。
调用API的请求格式，请参见本文示例中的请求示例。
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListUsers' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询用户列表的堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询用户列表的堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时，当前页的页码。默认值为**1**。',
            'type' => 'string',
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
            'description' => '指定分页查询时，每页显示的数据最大条数。  
PageSize参数最大取值为100。每页默认显示的数据条数为20条，PageSize参数值为空时，将默认返回20条数据。
> 建议PageSize取值不要为空。',
            'type' => 'string',
            'required' => false,
            'example' => '20',
          ),
        ),
        4 => 
        array (
          'name' => 'UserName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的用户登录名称。仅支持精确查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'abc',
          ),
        ),
        5 => 
        array (
          'name' => 'DisplayName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的用户显示姓名。仅支持精确查询。',
            'type' => 'string',
            'required' => false,
            'example' => '用户',
          ),
        ),
        6 => 
        array (
          'name' => 'Source',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的用户的来源。取值：
- **Local**：本地用户
- **Ram**：RAM用户
- **AD**：AD用户
- **LDAP**：LDAP用户',
            'type' => 'string',
            'required' => false,
            'example' => 'Local',
          ),
        ),
        7 => 
        array (
          'name' => 'Mobile',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的用户的手机号码。仅支持精确查询。',
            'type' => 'string',
            'required' => false,
            'example' => '1359999****',
          ),
        ),
        8 => 
        array (
          'name' => 'UserState',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的用户状态。取值：
- **Normal**：正常状态
- **Frozen**：被锁定状态
- **Expired**：已过期状态',
            'type' => 'string',
            'required' => false,
            'example' => 'Normal',
          ),
        ),
        9 => 
        array (
          'name' => 'SourceUserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的用户的唯一标识。仅支持精确查询。
> 该参数是堡垒机用户对应的RAM用户的唯一标识。新创建用户来源为RAM用户（即**Source**取值为**Ram**）时，该参数生效。您可以调用访问控制的[ListUsers](~~28684~~)接口从返回数据**UserId**获取该参数。',
            'type' => 'string',
            'required' => false,
            'example' => '122748924538****',
          ),
        ),
        10 => 
        array (
          'name' => 'UserGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的用户组ID。
> 您可以调用[ListUserGroups](~~204509~~)接口获取该参数。',
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
            'description' => '响应数据。',
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '查询到的用户总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'Users' => 
              array (
                'description' => '查询到的用户列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DisplayName' => 
                    array (
                      'description' => '用户的显示姓名。',
                      'type' => 'string',
                      'example' => 'Bob',
                    ),
                    'Email' => 
                    array (
                      'description' => '用户的邮箱地址。',
                      'type' => 'string',
                      'example' => '1099**@qq.com',
                    ),
                    'Comment' => 
                    array (
                      'description' => '用户备注信息。',
                      'type' => 'string',
                      'example' => 'comment',
                    ),
                    'MobileCountryCode' => 
                    array (
                      'description' => '用户手机号码的国际域名。取值：
- **CN**：中国内地（+86）
- **HK**：中国香港（+852）
- **MO**：中国澳门（+853）
- **TW**：中国台湾（+886）
- **RU**：俄罗斯（+7）
- **SG**：新加坡（+65）
- **MY**：马来西亚（+60）
- **ID**：印度尼西亚（+62）
- **DE**：德国（+49）
- **AU**：澳大利亚（+61）
- **US**：美国（+1）
- **AE**：迪拜（+971）
- **JP**：日本（+81）
- **GB**：英国（+44）
- **IN**：印度（+91）
- **KR**：韩国（+82）
- **PH**：菲律宾（+63）
- **CH**：瑞士（+41）
- **SE**：瑞典（+46）',
                      'type' => 'string',
                      'example' => 'CN',
                    ),
                    'Mobile' => 
                    array (
                      'description' => '用户的手机号码。',
                      'type' => 'string',
                      'example' => '1359999****',
                    ),
                    'UserId' => 
                    array (
                      'description' => '用户ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'Source' => 
                    array (
                      'description' => '用户的来源。取值：
- **Local**：本地用户
- **Ram**：RAM用户
- **AD**：AD用户
- **LDAP**：LDAP用户',
                      'type' => 'string',
                      'example' => 'Local',
                    ),
                    'UserName' => 
                    array (
                      'description' => '用户的登录名称。',
                      'type' => 'string',
                      'example' => 'abc_def',
                    ),
                    'SourceUserId' => 
                    array (
                      'description' => '用户的唯一标识。
> 该参数是堡垒机用户对应的RAM用户的唯一标识。用户来源为RAM用户（即**Source**取值为**Ram**）时，返回该参数。用户来源为本地用户（即**Source**取值为**Local**）时，该参数返回值为空。',
                      'type' => 'string',
                      'example' => '122748924538****',
                    ),
                    'UserState' => 
                    array (
                      'description' => '用户状态组。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '用户的状态。取值：
- **Normal**：正常状态
- **Frozen**：被锁定状态
- **Expired**：已过期状态',
                        'type' => 'string',
                        'example' => '["Normal"]',
                      ),
                    ),
                    'EffectiveStartTime' => 
                    array (
                      'title' => '',
                      'description' => '用户有效期开始时间（秒，时间戳格式）',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1669630029',
                    ),
                    'EffectiveEndTime' => 
                    array (
                      'description' => '用户有效期结束时间（秒，时间戳格式）',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1672502400',
                    ),
                    'NeedResetPassword' => 
                    array (
                      'description' => '下次登录是否需要重置密码。取值：

- **true**：是
- **false**：否',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'TwoFactorStatus' => 
                    array (
                      'description' => '用户双因子状态，取值：

- **Global**：遵循全局设定
- **Disable**：关闭双因子
- **Enable**：开启双因子，遵循单个用户设定',
                      'type' => 'string',
                      'example' => 'Enable',
                    ),
                    'TwoFactorMethods' => 
                    array (
                      'description' => '打开的双因子认证方式的数组',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '打开双因子认证方式的数组，目前最多支持一个，取值：

- **sms**：短信
- **email**：邮件
- **dingtalk**：钉钉
- **totp OTP**：令牌',
                        'type' => 'string',
                        'example' => '[
      "sms"
]',
                      ),
                    ),
                    'LanguageStatus' => 
                    array (
                      'description' => '消息通知语言设置

- **Global**：遵循全局
- **Custom**：自定义',
                      'type' => 'string',
                      'example' => 'Custom',
                    ),
                    'Language' => 
                    array (
                      'description' => '当LanguageStatus为Custom 时，Language为必填。 取值：

- **zh-cn**：简体中文
- **en**：英文',
                      'type' => 'string',
                      'example' => 'en',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"Users\\": [\\n    {\\n      \\"DisplayName\\": \\"Bob\\",\\n      \\"Email\\": \\"1099**@qq.com\\",\\n      \\"Comment\\": \\"comment\\",\\n      \\"MobileCountryCode\\": \\"CN\\",\\n      \\"Mobile\\": \\"1359999****\\",\\n      \\"UserId\\": \\"1\\",\\n      \\"Source\\": \\"Local\\",\\n      \\"UserName\\": \\"abc_def\\",\\n      \\"SourceUserId\\": \\"122748924538****\\",\\n      \\"UserState\\": [\\n        \\"[\\\\\\"Normal\\\\\\"]\\"\\n      ],\\n      \\"EffectiveStartTime\\": 1669630029,\\n      \\"EffectiveEndTime\\": 1672502400,\\n      \\"NeedResetPassword\\": true,\\n      \\"TwoFactorStatus\\": \\"Enable\\",\\n      \\"TwoFactorMethods\\": [\\n        \\"[\\\\n      \\\\\\"sms\\\\\\"\\\\n]\\"\\n      ],\\n      \\"LanguageStatus\\": \\"Custom\\",\\n      \\"Language\\": \\"en\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListUsersResponse>\\n    <TotalCount>1</TotalCount>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n    <Users>\\n        <Comment>comment</Comment>\\n        <UserName>abc_def</UserName>\\n        <Email>1099**@qq.com</Email>\\n        <UserId>1</UserId>\\n        <SourceUserId>122748924538****</SourceUserId>\\n        <MobileCountryCode>CN</MobileCountryCode>\\n        <DisplayName>Bob</DisplayName>\\n        <Mobile>1359999****</Mobile>\\n        <Source>Local</Source>\\n        <UserState>Normal</UserState>\\n    </Users>\\n</ListUsersResponse>","errorExample":""}]',
      'title' => '获取用户详情列表',
      'summary' => '获取指定堡垒机的用户列表。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~315526~~)。
调用API的请求格式，请参见本文示例中的请求示例。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyUser' => 
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
            'description' => '指定要修改用户信息的堡垒机实例ID。
>您可以调用[describeinstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要修改用户信息的堡垒机的地域ID。
>地域ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要修改用户信息的用户ID。
> 您可以调用[ListUsers](~~204522~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定修改后的用户密码。至少8位，至少包含大小写字母、数字、特殊符号，最多支持128字符。
> 未填则表示不做修改。',
            'type' => 'string',
            'required' => false,
            'example' => '321****',
          ),
        ),
        4 => 
        array (
          'name' => 'DisplayName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定修改后的用户显示姓名。最多支持128字符。
> 未填则表示不做修改。',
            'type' => 'string',
            'required' => false,
            'example' => 'Bob',
          ),
        ),
        5 => 
        array (
          'name' => 'Comment',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定修改后的用户备注信息。最多支持500字符。
> 未填则表示不做修改。',
            'type' => 'string',
            'required' => false,
            'example' => 'comment',
          ),
        ),
        6 => 
        array (
          'name' => 'Email',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定修改后的用户的邮箱。
> - 当TwoFactorStatus为“Enable”，且TwoFactorMethods为“email”时，或当TwoFactorStatus为“Global”，且全局双因子配置中TwoFactorMethods为“email”时，该参数为必填。
> - 您可以调用[GetInstanceTwoFactor](~~462968~~)接口获取全局双因子配置。
> - 未填则表示不做修改。',
            'type' => 'string',
            'required' => false,
            'example' => 'username@example.com',
          ),
        ),
        7 => 
        array (
          'name' => 'Mobile',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定修改后的用户手机号码。
> - 当TwoFactorStatus为“Enable”，且TwoFactorMethods为“sms”或“dingtalk”时，或当TwoFactorStatus为“Global”，且全局双因子配置中TwoFactorMethods为“sms”或“dingtalk”时，该参数为必填。
> - 您可以调用[GetInstanceTwoFactor](~~462968~~)接口获取全局双因子配置。
> - 未填则表示不做修改。',
            'type' => 'string',
            'required' => false,
            'example' => '1358888****',
          ),
        ),
        8 => 
        array (
          'name' => 'MobileCountryCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定修改后的用户手机号的国际域名。取值：
- **CN**：中国内地（+86）
- **HK**：中国香港（+852）
- **MO**：中国澳门（+853）
- **TW**：中国台湾（+886）
- **RU**：俄罗斯（+7）
- **SG**：新加坡（+65）
- **MY**：马来西亚（+60）
- **ID**：印度尼西亚（+62）
- **DE**：德国（+49）
- **AU**：澳大利亚（+61）
- **US**：美国（+1）
- **AE**：迪拜（+971）
- **JP**：日本（+81）
- **GB**：英国（+44）
- **IN**：印度（+91）
- **KR**：韩国（+82）
- **PH**：菲律宾（+63）
- **CH**：瑞士（+41）
- **SE**：瑞典（+46）
- **SA**：沙特（+966）',
            'type' => 'string',
            'required' => false,
            'example' => 'CN',
          ),
        ),
        9 => 
        array (
          'name' => 'EffectiveStartTime',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用户开始生效时间戳，单位秒',
            'description' => '用户有效期开始时间（秒，时间戳格式）
> 未填则表示不做修改。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1669630029',
          ),
        ),
        10 => 
        array (
          'name' => 'EffectiveEndTime',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用户结束生效时间戳，单位秒',
            'description' => '用户有效期结束时间（秒，时间戳格式）
> 未填则表示不做修改。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1672502400',
          ),
        ),
        11 => 
        array (
          'name' => 'NeedResetPassword',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用户下次登录强制修改密码',
            'description' => '下次登录是否需要重置密码。取值：

- **true**：是
- **false**：否

> 未填则表示不做修改。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        12 => 
        array (
          'name' => 'TwoFactorStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户双因子状态，取值：

- **Global**：遵循全局设定
- **Disable**：关闭双因子
- **Enable**：开启双因子，遵循单个用户设定

> 未填则表示不做修改。',
            'type' => 'string',
            'required' => false,
            'example' => 'Enable',
          ),
        ),
        13 => 
        array (
          'name' => 'TwoFactorMethods',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '打开双因子认证方式的数组，目前最多支持一个，取值：

- **sms**：短信
- **email**：邮件
- **dingtalk**：钉钉
- **totp OTP**：令牌
> 当TwoFactorStatus为“Enable”时，至少指定一种。',
            'type' => 'string',
            'required' => false,
            'example' => '[
      "sms"
]',
          ),
        ),
        14 => 
        array (
          'name' => 'LanguageStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '消息通知语言设置。

- **Global**：遵循全局
- **Custom**：自定义

> 未填则表示不做修改。',
            'type' => 'string',
            'required' => false,
            'example' => 'Custom',
          ),
        ),
        15 => 
        array (
          'name' => 'Language',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当LanguageStatus为Custom 时，Language为必填。 取值：

- **zh-cn**：简体中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应数据。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'UserNotFound',
            'errorMessage' => 'The user is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\"\\n}","type":"json"}]',
      'title' => '修改用户',
      'summary' => '修改堡垒机用户信息。',
    ),
    'DeleteUser' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要删除的用户所在堡垒机的实例ID。
>您可以调用[describeinstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要删除的用户所在堡垒机的地域ID。
>地域id和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要删除的用户ID。
> 您可以调用[ListUsers](~~204522~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
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
            'description' => '响应数据。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。


',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'UserNotFound',
            'errorMessage' => 'The user is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\"\\n}","type":"json"}]',
      'title' => '删除用户',
      'summary' => '删除单个堡垒机用户。',
    ),
    'CreateUserPublicKey' => 
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
            'description' => '指定需创建用户公钥的用户所在的堡垒机的区域id。
>区域id和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定新创建用户公钥的堡垒机实例id。
>您可以调用[listinstances](~~204522~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定新创建用户公钥的用户ID。
> 您可以调用[ListUsers](~~204522~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PublicKeyName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户公钥名称。',
            'type' => 'string',
            'required' => true,
            'example' => '用户公钥',
          ),
        ),
        4 => 
        array (
          'name' => 'PublicKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户公钥。采用Base64编码。',
            'type' => 'string',
            'required' => true,
            'example' => 'c3NoLWVkMjU1MTkgQUFBQUMzTnphQzFsWkRJMU5URTVBQUFBSUxGQnQxUUpyT3IxK2hTTGRkbERMZUx4WGRIZ3hBalBxWHJIbWNFNWxqSk8gbm93Y29kZXJAbm93Y29kZXJkZU1hY0Jvb2stUHJvLmxvY2Fs',
          ),
        ),
        5 => 
        array (
          'name' => 'Comment',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户公钥的备注信息。最多支持500字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'comment',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应数据。',
            'type' => 'object',
            'properties' => 
            array (
              'PublicKeyId' => 
              array (
                'description' => '用户的公钥ID。',
                'type' => 'string',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '5EAB922E-F476-5DFA-9290-313C608E724B',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PublicKeyId\\": \\"1\\",\\n  \\"RequestId\\": \\"5EAB922E-F476-5DFA-9290-313C608E724B\\"\\n}","type":"json"}]',
      'title' => '创建用户公钥',
      'summary' => '您可以创建用户公钥后将公钥托管至堡垒机，运维员即可使用私钥通过运维客户端登录堡垒机。',
      'description' => '本接口用于创建堡垒机的用户的用户公钥。',
    ),
    'ListUserPublicKeys' => 
    array (
      'summary' => '查询用户名下所有的公钥列表。',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要查询公钥的用户所在堡垒机的实例id。
>您可以调用[describeinstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****
',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户的堡垒机的区域id。
>区域id和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时，当前页的页码。默认值为1。',
            'type' => 'string',
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
            'description' => '指定分页查询时，每页显示的数据最大条数。  
PageSize参数最大取值为100。每页默认显示的数据条数为20条，PageSize参数值为空时，将默认返回20条数据。
> 建议PageSize取值不要为空。',
            'type' => 'string',
            'required' => false,
            'example' => '50',
          ),
        ),
        4 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询公钥的用户ID。',
            'type' => 'string',
            'required' => false,
            'example' => '2',
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
            'description' => '响应数据。',
            'type' => 'object',
            'properties' => 
            array (
              'PublicKeys' => 
              array (
                'description' => '用户公钥列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '用户公钥列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'FingerPrint' => 
                    array (
                      'description' => '公钥指纹。',
                      'type' => 'string',
                      'example' => 'd8:7d:b6:27:70:2d:07:fb:c6:b6:66:0a:86:7b:0f:9a',
                    ),
                    'PublicKeyId' => 
                    array (
                      'description' => '公钥ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'PublicKeyName' => 
                    array (
                      'description' => '公钥名称。',
                      'type' => 'string',
                      'example' => 'Keyname',
                    ),
                    'UserId' => 
                    array (
                      'description' => '公钥所属用户的用户ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'Comment' => 
                    array (
                      'description' => '公钥备注信息。',
                      'type' => 'string',
                      'example' => 'comment',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'TotalCount' => 
              array (
                'description' => '公钥总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '5',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PublicKeys\\": [\\n    {\\n      \\"FingerPrint\\": \\"d8:7d:b6:27:70:2d:07:fb:c6:b6:66:0a:86:7b:0f:9a\\",\\n      \\"PublicKeyId\\": \\"1\\",\\n      \\"PublicKeyName\\": \\"Keyname\\",\\n      \\"UserId\\": \\"1\\",\\n      \\"Comment\\": \\"comment\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"TotalCount\\": 5\\n}","type":"json"}]',
      'title' => '获取用户公钥列表',
    ),
    'ModifyUserPublicKey' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要修改用户公钥的堡垒机的实例id。
>您可以调用[describeinstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-nif23******',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要修改用户公钥的堡垒机所在的区域id。
>区域id和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'PublicKeyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要修改的用户公钥id。
> 您可以调用[ListUserPublicKeys](~~477555~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '2',
          ),
        ),
        3 => 
        array (
          'name' => 'PublicKeyName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要修改的公钥名称。最多支持128字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'name',
          ),
        ),
        4 => 
        array (
          'name' => 'PublicKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定修改后的用户公钥。
> 使用Base64编码。',
            'type' => 'string',
            'required' => false,
            'example' => 'c3NoLWVkMjU1MTkgQUFBQUMzTnphQzFsWkRJMU5URTVBQUFBSUhVcjY4UENFYWFzZjFYRVpNYTVsMlNBQytHV3FpeXVsRVpndkV4dmlPM28gcm9vdEA5NjBkMmNhOTcwYjU=',
          ),
        ),
        5 => 
        array (
          'name' => 'Comment',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定修改后的用户组备注信息。最多支持500字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'comment',
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
            'description' => '响应数据。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'AAB631FB-ABD0-5783-99F3-F29573B129E4',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"AAB631FB-ABD0-5783-99F3-F29573B129E4\\"\\n}","type":"json"}]',
      'title' => '修改用户公钥',
      'summary' => '修改用户公钥信息。',
    ),
    'DeleteUserPublicKey' => 
    array (
      'summary' => '删除用户公钥。',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要删除公钥的用户所在堡垒机实例的ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的地域ID。Region ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。

',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'PublicKeyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '公钥ID。
> 您可以调用[ListUserPublicKeys](~~477555~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '11',
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
            'description' => '响应数据。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\"\\n}","type":"json"}]',
      'title' => '删除用户公钥',
      'description' => '本接口用于删除堡垒机用户的用户公钥。',
    ),
    'LockUsers' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要锁定的用户所在堡垒机实例的ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要锁定的用户所在堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'UserIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要锁定的用户ID。该参数为JSON格式的字符串，最多支持添加100个用户ID，多个ID之间使用半角逗号（,）隔开。
> 您可以调用[ListUsers](~~204522~~)接口获取用户ID。',
            'type' => 'string',
            'required' => true,
            'example' => ' ["1","2","3"]',
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
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'Results' => 
              array (
                'description' => '接口的调用结果。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Code' => 
                    array (
                      'description' => '接口调用的结果。取值：
- **OK**：操作成功。
- **UNEXPECTED**：未知错误。
- **INVALID_ARGUMENT**：请求参数设置错误。

    > 请检查请求参数，确保参数正确后重新调用接口。

- **OBJECT_NOT_FOUND**：操作的对象不存在。

    > 请检查该堡垒机实例的ID是否存在，主机是否存在，主机ID是否填写正确，然后重新调用接口。

- **OBJECT_AlREADY_EXISTS** ：操作的对象已存在。

',
                      'type' => 'string',
                      'example' => 'OK',
                    ),
                    'Message' => 
                    array (
                      'description' => '该参数已废弃，无需关注。',
                      'type' => 'string',
                      'example' => '无',
                    ),
                    'UserId' => 
                    array (
                      'description' => '用户ID。',
                      'type' => 'string',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"Results\\": [\\n    {\\n      \\"Code\\": \\"OK\\",\\n      \\"Message\\": \\"无\\",\\n      \\"UserId\\": \\"1\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<LockUsersResponse>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n    <Results>\\n        <Message/>\\n        <UserId>1</UserId>\\n        <Code>OK</Code>\\n    </Results>\\n</LockUsersResponse>","errorExample":""}]',
      'title' => '批量锁定堡垒机用户',
      'summary' => '批量锁定堡垒机用户。',
      'description' => '# 使用说明
本接口用于批量锁定堡垒机用户。如果某个用户在一段时间内无需使用堡垒机进行运维操作，您可以使用本接口锁定该用户，被锁定的用户将无法登录服务器进行运维操作。如果后续需要解锁该用户，您可使用[UnlockUsers](~~204590~~)接口来解锁。

# QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~148139~~)。
调用API的请求格式，请参见本文示例中的请求示例。
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UnlockUsers' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要解锁的用户所在堡垒机实例的ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要解锁的用户所在堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'UserIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要解锁的用户ID。该参数为JSON格式的字符串，最多支持设置100个用户ID，多个ID之间使用半角逗号（,）隔开。
> 您可以调用[ListUsers](~~204522~~)接口获取用户ID。',
            'type' => 'string',
            'required' => true,
            'example' => '["1","2"]',
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
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'Results' => 
              array (
                'description' => '接口的调用结果。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Code' => 
                    array (
                      'description' => '接口调用的结果。取值：
- **OK**：操作成功。
- **UNEXPECTED**：未知错误。
- **INVALID_ARGUMENT**：请求参数设置错误。

    > 请检查请求参数，确保参数正确后重新调用接口。

- **OBJECT_NOT_FOUND**：操作的对象不存在。

    > 请检查该堡垒机实例的ID是否存在，主机是否存在，主机ID是否填写正确，然后重新调用接口。

- **OBJECT_AlREADY_EXISTS** ：操作的对象已存在。
',
                      'type' => 'string',
                      'example' => 'OK',
                    ),
                    'Message' => 
                    array (
                      'description' => '该参数已废弃，无需关注。',
                      'type' => 'string',
                      'example' => '无',
                    ),
                    'UserId' => 
                    array (
                      'description' => '用户ID。',
                      'type' => 'string',
                      'example' => '１',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"Results\\": [\\n    {\\n      \\"Code\\": \\"OK\\",\\n      \\"Message\\": \\"无\\",\\n      \\"UserId\\": \\"１\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<UnlockUsersResponse>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n    <Results>\\n        <Message></Message>\\n        <UserId>１</UserId>\\n        <Code>OK</Code>\\n    </Results>\\n</UnlockUsersResponse>","errorExample":""}]',
      'title' => '批量解锁堡垒机用户',
      'summary' => '批量解锁堡垒机用户。',
      'description' => '本接口是在使用了[LockUsers](~~204591~~)接口锁定了堡垒机用户之后，需要解锁堡垒机用户时使用。用户被解锁之后即可使用堡垒机进行运维操作。

# QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~148139~~)。
调用API的请求格式，请参见本文示例中的请求示例。
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateUserGroup' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要新建用户组的堡垒机实例的ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要新建用户组的堡垒机的地域ID。
> 地域ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'UserGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要新建的用户组的名称。最多支持128字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'group',
          ),
        ),
        3 => 
        array (
          'name' => 'Comment',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新建的用户组的备注信息。最多支持500字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'comment',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应数据。',
            'type' => 'object',
            'properties' => 
            array (
              'UserGroupId' => 
              array (
                'description' => '新建的用户组的ID。',
                'type' => 'string',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'UserGroupAlreadyExists',
            'errorMessage' => 'The user group already exists.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"UserGroupId\\": \\"1\\",\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateUserGroupResponse>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n    <UserGroupId>1</UserGroupId>\\n</CreateUserGroupResponse>","errorExample":""}]',
      'title' => '创建用户组',
      'summary' => '创建堡垒机用户组。',
      'description' => '本接口用于为堡垒机创建用户组。堡垒机管理员可使用本接口创建用户组，然后使用[AddUsersToGroup](~~204600~~)接口为该用户组批量添加用户。将用户添加到同一个用户组，可实现对堡垒机用户的统一授权和管理。

本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~148139~~)。
调用API的请求格式，请参见本文示例中的请求示例。
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetUserGroup' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询用户组详情的堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询用户组详情的堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'UserGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的用户组ID。
> 您可以调用[ListUserGroups](~~204509~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
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
            'description' => '响应数据。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'UserGroup' => 
              array (
                'description' => '查询到的用户组详细信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'UserGroupName' => 
                  array (
                    'description' => '用户组名称。',
                    'type' => 'string',
                    'example' => 'UserGroup01',
                  ),
                  'Comment' => 
                  array (
                    'description' => '用户组备注信息。',
                    'type' => 'string',
                    'example' => 'comment',
                  ),
                  'UserGroupId' => 
                  array (
                    'description' => '用户组ID。',
                    'type' => 'string',
                    'example' => '1',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'UserGroupNotFound',
            'errorMessage' => 'The user group is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"UserGroup\\": {\\n    \\"UserGroupName\\": \\"UserGroup01\\",\\n    \\"Comment\\": \\"comment\\",\\n    \\"UserGroupId\\": \\"1\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetUserGroupResponse>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n    <UserGroup>\\n        <Comment>comment</Comment>\\n        <UserGroupName>UserGroup01</UserGroupName>\\n        <UserGroupId>1</UserGroupId>\\n    </UserGroup>\\n</GetUserGroupResponse>","errorExample":""}]',
      'title' => '获取指定堡垒机用户组的详细信息',
      'summary' => '获取指定堡垒机用户组的详细信息。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~148139~~)。
调用API的请求格式，请参见本文示例中的请求示例。
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListUserGroups' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询用户组列表的堡垒机实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询用户组列表的堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时，当前页的页码。默认值为**1**。',
            'type' => 'string',
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
            'description' => '指定分页查询时，每页显示的数据最大条数。  
PageSize参数最大取值为100。每页默认显示的数据条数为20条，PageSize参数值为空时，将默认返回20条数据。
> 建议PageSize取值不要为空。',
            'type' => 'string',
            'required' => false,
            'example' => '20',
          ),
        ),
        4 => 
        array (
          'name' => 'UserGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的用户组名称。仅支持精确查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'TestGroup01',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应数据。',
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '查询到的用户组总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'UserGroups' => 
              array (
                'description' => '查询到的用户组列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UserGroupName' => 
                    array (
                      'description' => '用户组名称。',
                      'type' => 'string',
                      'example' => 'TestGroup01',
                    ),
                    'MemberCount' => 
                    array (
                      'description' => '用户组内的用户数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '5',
                    ),
                    'Comment' => 
                    array (
                      'description' => '用户组备注信息。',
                      'type' => 'string',
                      'example' => 'comment',
                    ),
                    'UserGroupId' => 
                    array (
                      'description' => '用户组ID。',
                      'type' => 'string',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"UserGroups\\": [\\n    {\\n      \\"UserGroupName\\": \\"TestGroup01\\",\\n      \\"MemberCount\\": 5,\\n      \\"Comment\\": \\"comment\\",\\n      \\"UserGroupId\\": \\"1\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListUserGroupsResponse>\\n    <TotalCount>1</TotalCount>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n    <UserGroups>\\n        <Comment>comment</Comment>\\n        <UserGroupName>TestGroup01</UserGroupName>\\n        <UserGroupId>1</UserGroupId>\\n        <MemberCount>5</MemberCount>\\n    </UserGroups>\\n</ListUserGroupsResponse>","errorExample":""}]',
      'title' => '获取用户组列表',
      'summary' => '获取指定堡垒机下的用户组列表。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~315526~~)。
调用API的请求格式，请参见本文示例中的请求示例。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyUserGroup' => 
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
            'description' => '指定要修改用户组信息的堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要修改用户组信息的堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'UserGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要修改的用户组ID。
> 您可以调用[ListUserGroups](~~204509~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'UserGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定修改后的用户组名称。最多支持128字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'TestUserGroup',
          ),
        ),
        4 => 
        array (
          'name' => 'Comment',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定修改后的用户组备注信息。最多支持500字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'comment',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应数据。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'UserGroupNotFound',
            'errorMessage' => 'The user group is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyUserGroupResponse>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n</ModifyUserGroupResponse>","errorExample":""}]',
      'title' => '修改用户组信息',
      'summary' => '修改用户组信息。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~148139~~)。
调用API的请求格式，请参见本文示例中的请求示例。
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteUserGroup' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要删除用户组的堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要删除用户组的堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'UserGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要删除的用户组ID。
> 您可以调用[ListUserGroups](~~204509~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '１',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应数据。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'UserGroupNotFound',
            'errorMessage' => 'The user group is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteUserGroupResponse>\\r\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\r\\n</DeleteUserGroupResponse>","errorExample":""}]',
      'title' => '删除用户组',
      'summary' => '删除单个堡垒机用户组。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~148139~~)。
调用API的请求格式，请参见本文示例中的请求示例。
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AddUsersToGroup' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要添加用户的用户组所在的堡垒机实例的ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要添加用户的用户组所在的堡垒机实例的地域ID。
> 地域ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'UserGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要添加用户的用户组的ID。
> 您可以调用[ListUserGroups](~~204509~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '１',
          ),
        ),
        3 => 
        array (
          'name' => 'UserIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要添加到用户组的用户ID。该参数为JSON格式的字符串，最多支持设置100个用户ID，多个ID之间使用半角逗号（,）隔开。
> 您可以调用[ListUsers](~~204522~~)接口获取用户ID。',
            'type' => 'string',
            'required' => true,
            'example' => ' ["1","2","3"]',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应数据。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'Results' => 
              array (
                'description' => '接口调用的结果信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Code' => 
                    array (
                      'description' => '接口调用的结果。取值：
- **OK**：操作成功。
- **UNEXPECTED**：未知错误。
- **INVALID_ARGUMENT**：请求参数设置错误。

    > 请检查请求参数，确保参数正确后重新调用接口。

- **OBJECT_NOT_FOUND**：操作的对象不存在。

    > 请检查该堡垒机实例的ID是否存在，主机是否存在，主机ID是否填写正确，然后重新调用接口。

- **OBJECT_AlREADY_EXISTS** ：操作的对象已存在。

',
                      'type' => 'string',
                      'example' => 'OK',
                    ),
                    'Message' => 
                    array (
                      'description' => '该参数已废弃，无需关注。',
                      'type' => 'string',
                      'example' => '无',
                    ),
                    'UserGroupId' => 
                    array (
                      'description' => '用户组ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'UserId' => 
                    array (
                      'description' => '用户ID。',
                      'type' => 'string',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"Results\\": [\\n    {\\n      \\"Code\\": \\"OK\\",\\n      \\"Message\\": \\"无\\",\\n      \\"UserGroupId\\": \\"1\\",\\n      \\"UserId\\": \\"1\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<AddUsersToGroupResponse>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n    <Results>\\n        <Message/>\\n        <Code>OK</Code>\\n        <UserId>1</UserId>\\n        <UserGroupId>1</UserGroupId>\\n    </Results>\\n</AddUsersToGroupResponse>","errorExample":""}]',
      'title' => '批量为用户组添加用户',
      'summary' => '将用户批量添加到用户组。',
      'description' => '# 使用说明
本接口用于将用户批量添加到用户组。在使用[CreateUserGroup](~~204596~~)接口创建用户组之后，您可以使用本接口将多个用户加入到该用户组，对这些用户进行批量授权和管理。

# QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~148139~~)。
调用API的请求格式，请参见本文示例中的请求示例。
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RemoveUsersFromGroup' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要移除用户的用户组所在堡垒机实例的ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要移除用户的用户组所在堡垒机的地域ID。
> 地域ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'UserGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要移除用户的用户组的ID。
> 您可以调用[ListUserGroups](~~204509~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '１',
          ),
        ),
        3 => 
        array (
          'name' => 'UserIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要移除的用户的ID。以该参数为JSON格式的字符串，最多支持设置100个用户ID，多个ID之间使用半角逗号（,）隔开。
> 您可以调用[ListUsers](~~204522~~)接口获取用户ID。',
            'type' => 'string',
            'required' => true,
            'example' => '["1","2","3"]',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应数据。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'Results' => 
              array (
                'description' => '接口的调用结果信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Code' => 
                    array (
                      'description' => '接口调用的结果。取值：
- **OK**：操作成功。
- **UNEXPECTED**：未知错误。
- **INVALID_ARGUMENT**：请求参数设置错误。

    > 请检查请求参数，确保参数正确后重新调用接口。

- **OBJECT_NOT_FOUND**：操作的对象不存在。

    > 请检查该堡垒机实例的ID是否存在，主机是否存在，主机ID是否填写正确，然后重新调用接口。

- **OBJECT_AlREADY_EXISTS** ：操作的对象已存在。

',
                      'type' => 'string',
                      'example' => 'OK',
                    ),
                    'Message' => 
                    array (
                      'description' => '该参数已废弃，无需关注。',
                      'type' => 'string',
                      'example' => '无',
                    ),
                    'UserGroupId' => 
                    array (
                      'description' => '用户组的ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'UserId' => 
                    array (
                      'description' => '用户的ID。',
                      'type' => 'string',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"Results\\": [\\n    {\\n      \\"Code\\": \\"OK\\",\\n      \\"Message\\": \\"无\\",\\n      \\"UserGroupId\\": \\"1\\",\\n      \\"UserId\\": \\"1\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RemoveUsersFromGroupResponse>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n    <Results>\\n        <Message/>\\n        <Code>OK</Code>\\n        <UserId>1</UserId>\\n        <UserGroupId>1</UserGroupId>\\n    </Results>\\n</RemoveUsersFromGroupResponse>","errorExample":""}]',
      'title' => '批量移除用户组内用户',
      'summary' => '批量移除用户组内用户。',
      'description' => '# 使用说明
本接口用于批量移除用户组内的用户。当用户离职或转岗您要回收用户权限，或者用户切换用户组时，可使用本接口将涉及权限变动的用户从用户组内批量移除。

# QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~148139~~)。
调用API的请求格式，请参见本文示例中的请求示例。
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateHostGroup' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定新建资产组所在堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定新建资产组所在堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'HostGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定新建的资产组名称，最多支持128字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'HostGroup01',
          ),
        ),
        3 => 
        array (
          'name' => 'Comment',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定新建资产组的备注信息，最多支持500字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'Local host group',
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
              'HostGroupId' => 
              array (
                'description' => '新创建的资产组ID。',
                'type' => 'string',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'HostGroupAlreadyExists',
            'errorMessage' => 'The host group already exists.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HostGroupId\\": \\"1\\",\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateHostGroupResponse>\\n    <HostGroupId>1</HostGroupId>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n</CreateHostGroupResponse>","errorExample":""}]',
      'title' => '创建资产组',
      'summary' => '您可以按照业务需要创建不同的资产组，然后将同一类型的资产添加到资产组，实现对资产的分类管理和批量操作。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~148139~~)。
调用API的请求格式，请参见本文示例中的请求示例。
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AddDatabasesToGroup' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'HostGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要加入数据库的资产组ID。
> 您可以调用[ListHostGroups](~~201307~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'DatabaseIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '数据库ID组成的数组。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '要加入资产组的数据库ID。最多支持添加100个。
您可以调用[ListDatabases](~~2758822~~)接口获取该参数。',
              'type' => 'string',
              'required' => false,
              'example' => '1',
            ),
            'required' => true,
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
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'Results' => 
              array (
                'description' => '返回结果。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Code' => 
                    array (
                      'description' => '错误码。错误码为**OK**时，表示加入成功；其他错误码表示加入失败。',
                      'type' => 'string',
                      'example' => 'OK',
                    ),
                    'DatabaseId' => 
                    array (
                      'description' => '数据库实例 ID。',
                      'type' => 'string',
                      'example' => '9',
                    ),
                    'HostGroupId' => 
                    array (
                      'description' => '资产组ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'Message' => 
                    array (
                      'description' => '错误信息。',
                      'type' => 'string',
                      'example' => '无',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"Results\\": [\\n    {\\n      \\"Code\\": \\"OK\\",\\n      \\"DatabaseId\\": \\"9\\",\\n      \\"HostGroupId\\": \\"1\\",\\n      \\"Message\\": \\"无\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量将数据库实例加入指定资产组',
      'summary' => '批量将数据库实例加入指定资产组。',
    ),
    'AddHostsToGroup' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要加入主机的资产组所在堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要加入主机的资产组所在堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'HostGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要加入主机的资产组ID。
> 您可以调用[ListHostGroups](~~201307~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'HostIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要加入资产组的主机ID。该参数为JSON格式的字符串，最多支持添加100个主机ID。
> 您可以调用[ListHosts](~~200665~~)接口获取主机ID。',
            'type' => 'string',
            'required' => true,
            'example' => '["1","2","3"]',
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
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '81500666-d7f5-4143-8329-0223cc738105',
              ),
              'Results' => 
              array (
                'description' => '接口的调用结果。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '接口的调用结果。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Code' => 
                    array (
                      'description' => '接口调用的结果。取值：
- **OK**：操作成功。
- **UNEXPECTED**：未知错误。
- **INVALID_ARGUMENT**：请求参数设置错误。

    > 请检查请求参数，确保参数正确后重新调用接口。

- **OBJECT_NOT_FOUND**：操作的对象不存在。

    > 请检查该堡垒机实例的ID是否存在，主机是否存在，主机ID是否填写正确，然后重新调用接口。

- **OBJECT_AlREADY_EXISTS** ：操作的对象已存在。
',
                      'type' => 'string',
                      'example' => 'OK',
                    ),
                    'Message' => 
                    array (
                      'description' => '该参数已废弃，无需关注。',
                      'type' => 'string',
                      'example' => '无',
                    ),
                    'HostGroupId' => 
                    array (
                      'description' => '资产组ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'HostId' => 
                    array (
                      'description' => '主机ID。',
                      'type' => 'string',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"81500666-d7f5-4143-8329-0223cc738105\\",\\n  \\"Results\\": [\\n    {\\n      \\"Code\\": \\"OK\\",\\n      \\"Message\\": \\"无\\",\\n      \\"HostGroupId\\": \\"1\\",\\n      \\"HostId\\": \\"1\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<AddHostsToGroupResponse>\\n    <RequestId>81500666-d7f5-4143-8329-0223cc738105</RequestId>\\n    <Results>\\n        <HostGroupId>1</HostGroupId>\\n        <HostId>1</HostId>\\n        <Code>OK</Code>\\n    </Results>\\n</AddHostsToGroupResponse>","errorExample":""}]',
      'title' => '批量将主机加入指定资产组',
      'summary' => '批量将主机加入指定资产组。',
      'description' => '本接口用于批量将主机加入到指定的主机组当中。通过将多个主机加入到一个主机组，您可以集中管理这些主机，并进行批量授权。

# QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RemoveDatabasesFromGroup' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要移除数据库的资产组所在堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-78v1ghxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要移除数据库的资产组所在堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'HostGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要移除数据库的资产组ID。
> 您可以调用[ListHostGroups](~~201307~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'DatabaseIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '要移除的数据库ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '要移除的数据库ID。该参数为JSON格式的字符串，最多支持输入100个数据库ID。
> 可调用[ListHostGroups](~~475822~~)接口获取资产组下的资产列表。',
              'type' => 'string',
              'required' => false,
              'example' => '["1","2","3"]
',
            ),
            'required' => true,
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
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'Results' => 
              array (
                'description' => '接口的调用结果信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Code' => 
                    array (
                      'description' => '错误码，OK表示成功，其他表示错误。',
                      'type' => 'string',
                      'example' => 'OK',
                    ),
                    'DatabaseId' => 
                    array (
                      'description' => '数据库实例ID。',
                      'type' => 'string',
                      'example' => '20',
                    ),
                    'HostGroupId' => 
                    array (
                      'description' => '资产组ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'Message' => 
                    array (
                      'description' => '错误信息。',
                      'type' => 'string',
                      'example' => '无',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"Results\\": [\\n    {\\n      \\"Code\\": \\"OK\\",\\n      \\"DatabaseId\\": \\"20\\",\\n      \\"HostGroupId\\": \\"1\\",\\n      \\"Message\\": \\"无\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '从指定资产组中批量移除数据库',
      'summary' => '从指定资产组中批量移除数据库。',
    ),
    'DeleteHostGroup' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要删除的资产组所在堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要删除的资产组所在堡垒机的地域ID。
> 地域ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'HostGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要删除的资产组ID。
> 您可以调用[ListHostGroups](~~201307~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'HostGroupNotFound',
            'errorMessage' => 'The host group is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteHostGroupResponse>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n</DeleteHostGroupResponse>","errorExample":""}]',
      'title' => '删除单个资产组',
      'summary' => '删除单个资产组。',
      'description' => '本接口用于删除单个主机组。当堡垒机上某个主机组内的所有主机不在需要通过堡垒机运维时，您可以使用本接口删除该主机组。

### QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~148139~~)。
调用API的请求格式，请参见本文示例中的请求示例。
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RemoveHostsFromGroup' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要移除主机的资产组所在堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要移除主机的资产组所在堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'HostGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要移除主机的资产组ID。
> 您可以调用[ListHostGroups](~~201307~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'HostIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要移除的主机ID。该参数为JSON格式的字符串，最多支持输入100个主机ID。
> 您可以调用[ListHosts](~~200665~~)接口获取主机ID。',
            'type' => 'string',
            'required' => true,
            'example' => '["1","2","3"]',
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
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'Results' => 
              array (
                'description' => '接口的调用结果。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Code' => 
                    array (
                      'description' => '接口的调用结果信息。取值：
- **OK**：操作成功。
- **UNEXPECTED**：未知错误。
- **INVALID_ARGUMENT**：请求参数设置错误。

    > 请检查请求参数，确保参数正确后重新调用接口。

- **OBJECT_NOT_FOUND**：操作的对象不存在。

    > 请检查该堡垒机实例的ID是否存在，主机是否存在，主机ID是否填写正确，然后重新调用接口。

- **OBJECT_AlREADY_EXISTS** ：操作的对象已存在。
',
                      'type' => 'string',
                      'example' => 'OK',
                    ),
                    'Message' => 
                    array (
                      'description' => '该参数已废弃，无需关注。',
                      'type' => 'string',
                      'example' => '无',
                    ),
                    'HostGroupId' => 
                    array (
                      'description' => '资产组ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'HostId' => 
                    array (
                      'description' => '主机ID。',
                      'type' => 'string',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"Results\\": [\\n    {\\n      \\"Code\\": \\"OK\\",\\n      \\"Message\\": \\"无\\",\\n      \\"HostGroupId\\": \\"1\\",\\n      \\"HostId\\": \\"1\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RemoveHostsFromGroupResponse>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n    <Results>\\n        <HostGroupId>1</HostGroupId>\\n        <Message/>\\n        <HostId>1</HostId>\\n        <Code>OK</Code>\\n    </Results>\\n</RemoveHostsFromGroupResponse>","errorExample":""}]',
      'title' => '从指定资产组中批量移除主机',
      'summary' => '从指定资产组中批量移除主机。',
      'description' => '本接口用于从资产组中批量移除主机。如果部分主机不再需要通过资产组统一管理，您可以将这部分主机使用本接口从资产组中移除。

# QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyHostGroup' => 
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
            'description' => '指定要修改的资产组所在堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要修改的资产组所在堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'HostGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要修改的资产组ID。
> 您可以调用[ListHostGroups](~~201307~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'HostGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定修改后的资产组名称，最多支持128字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'Group01',
          ),
        ),
        4 => 
        array (
          'name' => 'Comment',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定修改后的资产组备注信息，最多支持500字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'comment',
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
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'HostGroupNotFound',
            'errorMessage' => 'The host group is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyHostGroupResponse>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n</ModifyHostGroupResponse>","errorExample":""}]',
      'title' => '修改资产组名称或备注信息',
      'summary' => '修改资产组名称或备注信息。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetHostGroup' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的资产组所在的堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的资产组所在堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'HostGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的资产组ID。
> 您可以调用[ListHostGroups](~~201307~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'HostGroup' => 
              array (
                'description' => '查询到的资产组详细信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'HostGroupId' => 
                  array (
                    'description' => '资产组ID。',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'Comment' => 
                  array (
                    'description' => '资产组的备注信息。',
                    'type' => 'string',
                    'example' => '备注',
                  ),
                  'HostGroupName' => 
                  array (
                    'description' => '资产组名称。',
                    'type' => 'string',
                    'example' => '资产组1',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'HostGroupNotFound',
            'errorMessage' => 'The host group is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"HostGroup\\": {\\n    \\"HostGroupId\\": \\"1\\",\\n    \\"Comment\\": \\"备注\\",\\n    \\"HostGroupName\\": \\"资产组1\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetHostGroupResponse>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n    <HostGroup>\\n        <Comment>备注</Comment>\\n        <HostGroupId>1</HostGroupId>\\n        <HostGroupName>主机组1</HostGroupName>\\n    </HostGroup>\\n</GetHostGroupResponse>","errorExample":""}]',
      'title' => '获取指定资产组详情',
      'summary' => '获取指定资产组详情。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListHostGroups' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~462953~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时当前页的页码。默认值为**1**。',
            'type' => 'string',
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
            'description' => '指定分页查询时每页显示的数据最大条数。pagesize参数最大取值为100。每页默认显示的数据条数为20条，pagesize参数值为空时，将默认返回20条数据。
> 建议pagesize取值不要为空。',
            'type' => 'string',
            'required' => false,
            'example' => '20',
          ),
        ),
        4 => 
        array (
          'name' => 'HostGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的资产组名称，不支持模糊查询，只支持精确查询。',
            'type' => 'string',
            'required' => false,
            'example' => '主机组1',
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
                'description' => '查询到的资产组总数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'HostGroups' => 
              array (
                'description' => '查询到的资产组列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'MemberCount' => 
                    array (
                      'description' => '资产组内的主机数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'HostGroupId' => 
                    array (
                      'description' => '资产组id。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'Comment' => 
                    array (
                      'description' => '资产组的备注信息。',
                      'type' => 'string',
                      'example' => '备注',
                    ),
                    'HostGroupName' => 
                    array (
                      'description' => '资产组名称。',
                      'type' => 'string',
                      'example' => '资产组1',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"HostGroups\\": [\\n    {\\n      \\"MemberCount\\": 1,\\n      \\"HostGroupId\\": \\"1\\",\\n      \\"Comment\\": \\"备注\\",\\n      \\"HostGroupName\\": \\"资产组1\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取指定堡垒机下的资产组列表',
      'summary' => '获取指定堡垒机下的资产组列表。',
    ),
    'AttachHostAccountsToUser' => 
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
            'description' => '指定要授权主机和主机账户的用户所在堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要授权主机和主机账户的用户所在堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要授权主机和主机账户的用户ID。
> 您可以调用[ListUsers](~~204522~~)接口获取该参数。
',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'Hosts',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要为用户授权的主机ID和主机账户ID。最多支持设置10个主机ID，每个主机最多支持设置9个主机账户ID。您可以不设置主机账户ID，不设置主机账户ID表示仅为用户授权主机。该参数的具体结构请参考请求参数列表下的Hosts参数结构说明。
> 您可以调用[ListHosts](~~200665~~)接口获取主机ID，调用[ListHostAccounts](~~204372~~)接口获取主机账户ID。',
            'type' => 'string',
            'required' => true,
            'example' => '[ {"HostId":"1"}, {"HostId":"2","HostAccountIds":["1","2","3"]}, {"HostId":"3","HostAccountIds":["4","5","6"]}, {"HostId":"4","HostAccountIds":["9","8","7"]}  ]',
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
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'Results' => 
              array (
                'description' => '接口调用的结果信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Code' => 
                    array (
                      'description' => '接口调用的结果。取值：
- **OK**：操作成功。
- **UNEXPECTED**：未知错误。
- **INVALID_ARGUMENT**：请求参数设置错误。

    > 请检查请求参数，确保参数正确后重新调用接口。

- **OBJECT_NOT_FOUND**：操作的对象不存在。

    > 请检查该堡垒机实例的ID是否存在，主机是否存在，主机ID是否填写正确，然后重新调用接口。

- **OBJECT_AlREADY_EXISTS** ：操作的对象已存在。
',
                      'type' => 'string',
                      'example' => 'OK',
                    ),
                    'Message' => 
                    array (
                      'description' => '该参数已废弃，无需关注。',
                      'type' => 'string',
                      'example' => '无',
                    ),
                    'HostId' => 
                    array (
                      'description' => '主机ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'UserId' => 
                    array (
                      'description' => '用户ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'HostAccounts' => 
                    array (
                      'description' => '为用户授权主机账户操作返回的结果信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Code' => 
                          array (
                            'description' => '为用户授权主机账户操作返回的结果。取值：
- **OK**：操作成功。
- **UNEXPECTED**：未知错误。
- **INVALID_ARGUMENT**：请求参数设置错误。
- **OBJECT_NOT_FOUND**：操作的对象不存在。
- **OBJECT_AlREADY_EXISTS** ：操作的对象已存在。
',
                            'type' => 'string',
                            'example' => 'OK',
                          ),
                          'Message' => 
                          array (
                            'description' => '该参数已废弃，无需关注。',
                            'type' => 'string',
                            'example' => '无',
                          ),
                          'HostAccountId' => 
                          array (
                            'description' => '主机账户ID。',
                            'type' => 'string',
                            'example' => '1',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"Results\\": [\\n    {\\n      \\"Code\\": \\"OK\\",\\n      \\"Message\\": \\"无\\",\\n      \\"HostId\\": \\"1\\",\\n      \\"UserId\\": \\"1\\",\\n      \\"HostAccounts\\": [\\n        {\\n          \\"Code\\": \\"OK\\",\\n          \\"Message\\": \\"无\\",\\n          \\"HostAccountId\\": \\"1\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<AttachHostAccountsToUserResponse>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n    <Results>\\n        <Message/>\\n        <HostId>1</HostId>\\n        <Code>OK</Code>\\n        <UserId>1</UserId>\\n    </Results>\\n    <Results>\\n        <HostAccounts>\\n            <Message/>\\n            <Code>OK</Code>\\n            <HostAccountId>1</HostAccountId>\\n        </HostAccounts>\\n    </Results>\\n</AttachHostAccountsToUserResponse>","errorExample":""}]',
      'title' => '为用户授权主机和主机账户',
      'summary' => '当您新建用户之后，您需要为该用户授权资产。授权后该用户才可以使用堡垒机运维已授权的资产。',
      'requestParamsDescription' => 'Hosts参数结构说明
| 字段 | 类型 | 示例值 |描述 |
| --- | --- | --- |--- |
| HostId | string |1 |主机ID。|
| HostAccountIds | array[string] |["9","8","7"]|主机账户ID。该参数为JSON格式的字符串，最多可设置10个主机账户ID。 |

以下是该参数的取值示例。

```
[
{"HostId":"1"},
{"HostId":"2","HostAccountIds":["1","2","3",...]},
{"HostId":"3","HostAccountIds":["4","5","6",...]},
{"HostId":"4","HostAccountIds":["9","8","7",...]}
]```',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListHostsForUser' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的用户所在堡垒机实例的ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要的用户所在堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'Mode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的主机列表的模式。取值：
- **Authorized**：已授权（默认）
- **Unauthorized**：未授权',
            'type' => 'string',
            'required' => false,
            'example' => 'Authorized',
          ),
        ),
        3 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的用户ID。
> 您可以调用[ListUsers](~~204522~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时，当前页的页码。默认值为1。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时，每页显示的数据最大条数。  
PageSize参数最大取值为100。每页默认显示的数据条数为20条，PageSize参数值为空时，将默认返回20条数据。
> 建议PageSize取值不要为空。',
            'type' => 'string',
            'required' => false,
            'example' => '20',
          ),
        ),
        6 => 
        array (
          'name' => 'HostAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的主机地址，可使用域名或IP地址。仅支持精确查询。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.XX.XX',
          ),
        ),
        7 => 
        array (
          'name' => 'HostName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的主机名称。仅支持精确查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'abc',
          ),
        ),
        8 => 
        array (
          'name' => 'OSType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的主机的操作系统类型。取值：
- **Linux**
- **Windows**',
            'type' => 'string',
            'required' => false,
            'example' => 'Linux',
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
                'description' => '查询到的主机总数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE ',
              ),
              'Hosts' => 
              array (
                'description' => '查询到的主机列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Comment' => 
                    array (
                      'description' => '主机的备注信息。',
                      'type' => 'string',
                      'example' => 'comment',
                    ),
                    'ActiveAddressType' => 
                    array (
                      'description' => '主机的地址类型。取值：
- **Public**：公网地址
- **Private**：私网地址',
                      'type' => 'string',
                      'example' => 'Public',
                    ),
                    'HostPublicAddress' => 
                    array (
                      'description' => '主机的公网地址，可为域名或IP地址。',
                      'type' => 'string',
                      'example' => '10.158.XX.XX',
                    ),
                    'HostName' => 
                    array (
                      'description' => '主机名称。',
                      'type' => 'string',
                      'example' => 'host01',
                    ),
                    'HostPrivateAddress' => 
                    array (
                      'description' => '主机的私网地址，可为域名或IP地址。',
                      'type' => 'string',
                      'example' => '192.168.XX.XX',
                    ),
                    'OSType' => 
                    array (
                      'description' => '主机的操作系统类型。取值：
- **Linux**
- **Windows**',
                      'type' => 'string',
                      'example' => 'Linux',
                    ),
                    'HostId' => 
                    array (
                      'description' => '主机ID。',
                      'type' => 'string',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE \\",\\n  \\"Hosts\\": [\\n    {\\n      \\"Comment\\": \\"comment\\",\\n      \\"ActiveAddressType\\": \\"Public\\",\\n      \\"HostPublicAddress\\": \\"10.158.XX.XX\\",\\n      \\"HostName\\": \\"host01\\",\\n      \\"HostPrivateAddress\\": \\"192.168.XX.XX\\",\\n      \\"OSType\\": \\"Linux\\",\\n      \\"HostId\\": \\"1\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListHostsForUserResponse>\\n    <Hosts>\\n        <Comment>comment</Comment>\\n        <ActiveAddressType>Public</ActiveAddressType>\\n        <HostPrivateAddress>192.168.XX.XX</HostPrivateAddress>\\n        <HostPublicAddress>10.158.XX.XX</HostPublicAddress>\\n        <OSType>Linux</OSType>\\n        <HostId>1</HostId>\\n        <HostName>host01</HostName>\\n    </Hosts>\\n    <TotalCount>1</TotalCount>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE </RequestId>\\n</ListHostsForUserResponse>","errorExample":""}]',
      'title' => '查询指定用户已授权或未授权的主机列表',
      'summary' => '查询指定堡垒机用户已授权或未授权的主机列表。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~148139~~)。
调用API的请求格式，请参见本文示例中的请求示例。
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListHostAccountsForUser' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询已授权主机账户列表的用户所在堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询已授权主机账户列表的用户所在堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询已授权主机账户列表的用户ID。
> 您可以调用[ListUsers](~~204522~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'HostId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的主机账户的主机ID。
> 您可以调用[ListHosts](~~200665~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时，当前页的页码。默认值为**1**。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时，每页显示的数据最大条数。  
PageSize参数最大取值为100。每页默认显示的数据条数为20条，PageSize参数值为空时，将默认返回20条数据。
> 建议PageSize取值不要为空。',
            'type' => 'string',
            'required' => false,
            'example' => '20',
          ),
        ),
        6 => 
        array (
          'name' => 'HostAccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的主机账户名称。支持精确查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'root',
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
                'description' => '查询到的主机账户总数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE ',
              ),
              'HostAccounts' => 
              array (
                'description' => '查询到的主机账户列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'HostAccountName' => 
                    array (
                      'description' => '主机账户名称。',
                      'type' => 'string',
                      'example' => 'root',
                    ),
                    'HostAccountId' => 
                    array (
                      'description' => '主机账户ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'IsAuthorized' => 
                    array (
                      'description' => '主机账户是否授权给当前用户。取值：
- **true**：已授权
- **false**：未授权
',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'ProtocolName' => 
                    array (
                      'description' => '主机账户的协议名称。取值：
- **SSH**
- **RDP**',
                      'type' => 'string',
                      'example' => 'SSH',
                    ),
                    'HostId' => 
                    array (
                      'description' => '主机账户所在主机的ID。',
                      'type' => 'string',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE \\",\\n  \\"HostAccounts\\": [\\n    {\\n      \\"HostAccountName\\": \\"root\\",\\n      \\"HostAccountId\\": \\"1\\",\\n      \\"IsAuthorized\\": true,\\n      \\"ProtocolName\\": \\"SSH\\",\\n      \\"HostId\\": \\"1\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListHostAccountsForUserResponse>\\n    <TotalCount>1</TotalCount>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE </RequestId>\\n    <HostAccounts>\\n        <HostAccountName>root</HostAccountName>\\n        <ProtocolName>SSH</ProtocolName>\\n        <HostId>1</HostId>\\n        <IsAuthorized>true</IsAuthorized>\\n        <HostAccountId>1</HostAccountId>\\n    </HostAccounts>\\n</ListHostAccountsForUserResponse>","errorExample":""}]',
      'title' => '查询指定用户已授权和未授权的主机账户列表',
      'summary' => '查询指定用户在指定主机下已授权和未授权的主机账户列表。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~148139~~)。
调用API的请求格式，请参见本文示例中的请求示例。
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DetachHostAccountsFromUser' => 
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
            'description' => '指定要移除授权主机和主机账户的用户所在堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要移除授权主机和主机账户的用户所在堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要移除授权主机和主机账户的用户ID。
> 您可以调用[ListUsers](~~204522~~)接口获取该参数。
',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'Hosts',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要为用户移除授权的主机ID和主机账户ID。最多支持设置10个主机ID，每个主机最多支持设置10个主机账户ID。您可以不设置主机账户ID，不设置主机账户ID表示为用户移除授权主机和该主机的所有授权主机账户。该参数的具体结构请参考请求参数列表下的Hosts参数结构说明。
> 您可以调用[ListHosts](~~200665~~)接口获取主机ID，调用[ListHostAccountsForUser](~~466581~~)接口获取目标主机已授权的主机账户ID。',
            'type' => 'string',
            'required' => true,
            'example' => '[ {"HostId":"1"}, {"HostId":"2","HostAccountIds":["1","2","3"]}, {"HostId":"3","HostAccountIds":["4","5","6"]}, {"HostId":"4","HostAccountIds":["9","8","7"]} ]',
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
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'Results' => 
              array (
                'description' => '接口的调用结果。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Code' => 
                    array (
                      'description' => '接口的调用结果信息。取值：
- **OK**：操作成功。
- **UNEXPECTED**：未知错误。
- **INVALID_ARGUMENT**：请求参数设置错误。
- **OBJECT_NOT_FOUND**：操作的对象不存在。
- **OBJECT_AlREADY_EXISTS** ：操作的对象已存在。
',
                      'type' => 'string',
                      'example' => 'OK',
                    ),
                    'Message' => 
                    array (
                      'description' => '该参数已废弃，无需关注。',
                      'type' => 'string',
                      'example' => '无',
                    ),
                    'HostId' => 
                    array (
                      'description' => '主机ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'UserId' => 
                    array (
                      'description' => '用户ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'HostAccounts' => 
                    array (
                      'description' => '为用户移除授权主机账户操作返回的结果信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Code' => 
                          array (
                            'description' => '为用户移除授权主机账户操作返回的结果。取值：
- **OK**：操作成功。
- **UNEXPECTED**：未知错误。
- **INVALID_ARGUMENT**：请求参数设置错误。
- **OBJECT_NOT_FOUND**：操作的对象不存在。
- **OBJECT_AlREADY_EXISTS** ：操作的对象已存在。
',
                            'type' => 'string',
                            'example' => 'OK',
                          ),
                          'Message' => 
                          array (
                            'description' => '该参数已废弃，无需关注。',
                            'type' => 'string',
                            'example' => '无',
                          ),
                          'HostAccountId' => 
                          array (
                            'description' => '主机账户ID。',
                            'type' => 'string',
                            'example' => '1',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"Results\\": [\\n    {\\n      \\"Code\\": \\"OK\\",\\n      \\"Message\\": \\"无\\",\\n      \\"HostId\\": \\"1\\",\\n      \\"UserId\\": \\"1\\",\\n      \\"HostAccounts\\": [\\n        {\\n          \\"Code\\": \\"OK\\",\\n          \\"Message\\": \\"无\\",\\n          \\"HostAccountId\\": \\"1\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DetachHostAccountsFromUserResponse>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n    <Results>\\n        <Message/>\\n        <HostId>1</HostId>\\n        <Code>OK</Code>\\n        <UserId>1</UserId>\\n    </Results>\\n    <Results>\\n        <HostAccounts>\\n            <Message/>\\n            <Code>OK</Code>\\n            <HostAccountId>1</HostAccountId>\\n        </HostAccounts>\\n    </Results>\\n</DetachHostAccountsFromUserResponse>","errorExample":""}]',
      'title' => '移除给用户授权的主机及主机账户',
      'summary' => '移除给用户授权的主机及主机账户。',
      'requestParamsDescription' => 'Hosts参数结构说明
| 字段 | 类型 | 示例值 |描述 |
| --- | --- | --- |--- |
| HostId | string |1 |主机ID。|
| HostAccountIds | array[string] |["9","8","7"]|主机账户ID。该参数为JSON格式的字符串，最多可设置10个主机账户ID。 |

以下是该参数的取值示例。
``` 
[
{"HostId":"1"},
{"HostId":"2","HostAccountIds":["1","2","3",...]},
{"HostId":"3","HostAccountIds":["4","5","6",...]},
{"HostId":"4","HostAccountIds":["9","8","7",...]}
]
```
调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~148139~~)。
调用API的请求格式，请参见本文示例中的请求示例。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DetachHostAccountsFromUserGroup' => 
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
            'description' => '指定要移除授权主机和主机账户的用户组所在堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要移除授权主机和主机账户的用户组所在堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'UserGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要移除授权主机和主机账户的用户组ID。
> 您可以调用[ListUserGroups](~~204509~~)接口获取该参数。
',
            'type' => 'string',
            'required' => true,
            'example' => '１',
          ),
        ),
        3 => 
        array (
          'name' => 'Hosts',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要为用户组移除授权的主机ID和主机账户ID。  
最多支持设置10个主机ID，每个主机最多支持设置10个主机账户ID。您可以不设置主机账户ID，不设置主机账户ID表示为用户组移除授权主机和该主机的所有授权主机账户。该参数的具体结构请参考请求参数列表下的Hosts参数结构说明。
> 您可以调用[ListHosts](~~200665~~)接口获取主机ID，调用[ListHostAccounts](~~204372~~)接口获取主机账户ID。',
            'type' => 'string',
            'required' => true,
            'example' => '[ {"HostId":"1"}, {"HostId":"2","HostAccountIds":["1","2","3",...]}, {"HostId":"3","HostAccountIds":["4","5","6"]}, {"HostId":"4","HostAccountIds":["9","8","7"]} ]',
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
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'Results' => 
              array (
                'description' => '接口的调用结果。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Code' => 
                    array (
                      'description' => '接口的调用结果信息。取值：
- **OK**：操作成功。
- **UNEXPECTED**：未知错误。
- **INVALID_ARGUMENT**：请求参数设置错误。
- **OBJECT_NOT_FOUND**：操作的对象不存在。
- **OBJECT_AlREADY_EXISTS** ：操作的对象已存在。
',
                      'type' => 'string',
                      'example' => 'OK',
                    ),
                    'Message' => 
                    array (
                      'description' => '该参数已废弃，无需关注。',
                      'type' => 'string',
                      'example' => '无',
                    ),
                    'HostId' => 
                    array (
                      'description' => '主机ID。',
                      'type' => 'string',
                      'example' => '１',
                    ),
                    'UserGroupId' => 
                    array (
                      'description' => '用户组ID。',
                      'type' => 'string',
                      'example' => '１',
                    ),
                    'HostAccounts' => 
                    array (
                      'description' => '为用户组移除授权主机账户操作返回的结果信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Code' => 
                          array (
                            'description' => '为用户组移除授权主机账户操作返回的结果。取值：
- **OK**：操作成功。
- **UNEXPECTED**：未知错误。
- **INVALID_ARGUMENT**：请求参数设置错误。
- **OBJECT_NOT_FOUND**：操作的对象不存在。
- **OBJECT_AlREADY_EXISTS** ：操作的对象已存在。
',
                            'type' => 'string',
                            'example' => 'OK',
                          ),
                          'Message' => 
                          array (
                            'description' => '该参数已废弃，无需关注。',
                            'type' => 'string',
                            'example' => '无',
                          ),
                          'HostAccountId' => 
                          array (
                            'description' => '主机账户ID。',
                            'type' => 'string',
                            'example' => '１',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"Results\\": [\\n    {\\n      \\"Code\\": \\"OK\\",\\n      \\"Message\\": \\"无\\",\\n      \\"HostId\\": \\"１\\",\\n      \\"UserGroupId\\": \\"１\\",\\n      \\"HostAccounts\\": [\\n        {\\n          \\"Code\\": \\"OK\\",\\n          \\"Message\\": \\"无\\",\\n          \\"HostAccountId\\": \\"１\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DetachHostAccountsFromUserGroupResponse>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n    <Results>\\n        <Message/>\\n        <HostId>１</HostId>\\n        <Code>OK</Code>\\n        <UserGroupId>１</UserGroupId>\\n    </Results>\\n    <Results>\\n        <HostAccounts>\\n            <Message/>\\n            <Code>OK</Code>\\n            <HostAccountId>１</HostAccountId>\\n        </HostAccounts>\\n    </Results>\\n</DetachHostAccountsFromUserGroupResponse>","errorExample":""}]',
      'title' => '移除给用户组授权的主机及主机账户',
      'summary' => '移除给用户组授权的主机及主机账户。',
      'requestParamsDescription' => 'Hosts参数结构说明
| 字段 | 类型 | 示例值 |描述 |
| --- | --- | --- |--- |
| HostId | string |1 |主机ID。|
| HostAccountIds | array[string] |["9","8","7"]|主机账户ID。该参数为JSON格式的字符串，最多可设置10个主机账户ID。 |

以下是该参数的取值示例。

```
[
{"HostId":"1"},
{"HostId":"2","HostAccountIds":["1","2","3",...]},
{"HostId":"3","HostAccountIds":["4","5","6",...]},
{"HostId":"4","HostAccountIds":["9","8","7",...]}
]```',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DetachHostGroupAccountsFromUser' => 
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
            'description' => '指定要移除主机组和主机账户授权的用户所在堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要移除主机组和主机账户授权的用户所在堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要移除主机组和主机账户授权的用户ID。
> 您可以调用[ListUsers](~~204522~~)接口获取该参数。
',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'HostGroups',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要为用户移除授权的主机组ID和主机账户名称。最多支持设置10个主机组ID，每个主机组最多支持设置10个主机账户名称。您可以不设置主机账户名称，不设置主机账户名称表示为用户移除主机组和该主机组下所有主机账户的授权。该参数的具体结构请参考请求参数列表下的HostGroups参数结构说明。
> 您可以调用[ListHostGroups](~~201307~~)接口获取主机组ID，调用[ListHostAccounts](~~204372~~)接口获取主机账户名称。',
            'type' => 'string',
            'required' => true,
            'example' => '[ {"HostGroupId":"1"}, {"HostGroupId":"2","HostAccountNames":["root","111","abc"]}]',
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
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'Results' => 
              array (
                'description' => '接口的调用结果。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Code' => 
                    array (
                      'description' => '接口的调用结果信息。取值：
- **OK**：操作成功。
- **UNEXPECTED**：未知错误。
- **INVALID_ARGUMENT**：请求参数设置错误。
- **OBJECT_NOT_FOUND**：操作的对象不存在。
- **OBJECT_AlREADY_EXISTS** ：操作的对象已存在。
',
                      'type' => 'string',
                      'example' => 'OK',
                    ),
                    'Message' => 
                    array (
                      'description' => '该参数已废弃，无需关注。',
                      'type' => 'string',
                      'example' => '无',
                    ),
                    'HostGroupId' => 
                    array (
                      'description' => '主机组ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'UserId' => 
                    array (
                      'description' => '用户ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'HostAccountNames' => 
                    array (
                      'description' => '为用户移除主机账户授权操作返回的结果信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Code' => 
                          array (
                            'description' => '为用户移除主机账户授权操作返回的结果。取值：
- **OK**：操作成功。
- **UNEXPECTED**：未知错误。
- **INVALID_ARGUMENT**：请求参数设置错误。
- **OBJECT_NOT_FOUND**：操作的对象不存在。
- **OBJECT_AlREADY_EXISTS** ：操作的对象已存在。
',
                            'type' => 'string',
                            'example' => 'OK',
                          ),
                          'Message' => 
                          array (
                            'description' => '该参数已废弃，无需关注。',
                            'type' => 'string',
                            'example' => '无',
                          ),
                          'HostAccountName' => 
                          array (
                            'description' => '主机账户名称。',
                            'type' => 'string',
                            'example' => 'root',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"Results\\": [\\n    {\\n      \\"Code\\": \\"OK\\",\\n      \\"Message\\": \\"无\\",\\n      \\"HostGroupId\\": \\"1\\",\\n      \\"UserId\\": \\"1\\",\\n      \\"HostAccountNames\\": [\\n        {\\n          \\"Code\\": \\"OK\\",\\n          \\"Message\\": \\"无\\",\\n          \\"HostAccountName\\": \\"root\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DetachHostGroupAccountsFromUserResponse>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n    <Results>\\n        <HostGroupId>1</HostGroupId>\\n        <Message/>\\n        <Code>OK</Code>\\n        <UserId>1</UserId>\\n    </Results>\\n    <Results>\\n        <HostAccountNames>\\n            <HostAccountName>root</HostAccountName>\\n            <Message/>\\n            <Code>OK</Code>\\n        </HostAccountNames>\\n    </Results>\\n</DetachHostGroupAccountsFromUserResponse>","errorExample":""}]',
      'title' => '移除用户已授权的主机组及主机账户',
      'summary' => '移除用户已授权的主机组及主机账户。',
      'requestParamsDescription' => 'HostGroups参数结构说明
| 字段 | 类型 | 示例值 |描述 |
| --- | --- | --- |--- |
| HostGroupId | string |1 |主机组ID。|
| HostAccountNames | array[string] |["root","111","abc"]|主机账户名称。该参数为JSON格式的字符串，最多可设置10个主机账户名称。 |

以下是该参数的取值示例。
``` 
[
{"HostGroupId":"1"}, 
{"HostGroupId":"2","HostAccountNames":["root","111","abc"]}, 
{"HostGroupId":"3","HostAccountNames":["root","111","abc"]},  
{"HostGroupId":"4","HostAccountNames":["root","111","abc"]} 
]
```
调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~148139~~)。
调用API的请求格式，请参见本文示例中的请求示例。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AttachHostAccountsToUserGroup' => 
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
            'description' => '指定要授权主机和主机账户的用户组所在堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要授权主机和主机账户的用户组所在堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'UserGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要授权主机和主机账户的用户组ID。
> 您可以调用[ListUserGroups](~~204509~~)接口获取该参数。
',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'Hosts',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要为用户组授权的主机ID和主机账户ID。最多支持设置10个主机ID，每个主机最多支持设置10个主机账户ID。您可以不设置主机账户ID，不设置主机账户ID表示仅为用户组授权主机。该参数的具体结构请参考请求参数列表下的Hosts参数结构说明。
> 您可以调用[ListHosts](~~200665~~)接口获取主机ID，调用[ListHostAccounts](~~204372~~)接口获取主机账户ID。',
            'type' => 'string',
            'required' => true,
            'example' => '[ {"HostId":"1"}, {"HostId":"2","HostAccountIds":["1","2","3",...]}, {"HostId":"3","HostAccountIds":["4","5","6",...]}, {"HostId":"4","HostAccountIds":["9","8","7",...]} ... ]',
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
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'Results' => 
              array (
                'description' => '接口的调用结果。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Code' => 
                    array (
                      'description' => '接口的调用结果信息。取值：
- **OK**：操作成功。
- **UNEXPECTED**：未知错误。
- **INVALID_ARGUMENT**：请求参数设置错误。
- **OBJECT_NOT_FOUND**：操作的对象不存在。
- **OBJECT_AlREADY_EXISTS** ：操作的对象已存在。
',
                      'type' => 'string',
                      'example' => 'OK',
                    ),
                    'Message' => 
                    array (
                      'description' => '该参数已废弃，无需关注。',
                      'type' => 'string',
                      'example' => '无',
                    ),
                    'HostId' => 
                    array (
                      'description' => '主机ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'UserGroupId' => 
                    array (
                      'description' => '用户组ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'HostAccounts' => 
                    array (
                      'description' => '为用户组授权主机账户操作返回的结果信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Code' => 
                          array (
                            'description' => '为用户组授权主机账户操作返回的结果。取值：
- **OK**：操作成功。
- **UNEXPECTED**：未知错误。
- **INVALID_ARGUMENT**：请求参数设置错误。
- **OBJECT_NOT_FOUND**：操作的对象不存在。
- **OBJECT_AlREADY_EXISTS** ：操作的对象已存在。
',
                            'type' => 'string',
                            'example' => 'OK',
                          ),
                          'Message' => 
                          array (
                            'description' => '该参数已废弃，无需关注。',
                            'type' => 'string',
                            'example' => '无',
                          ),
                          'HostAccountId' => 
                          array (
                            'description' => '主机账户ID。',
                            'type' => 'string',
                            'example' => '1',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"Results\\": [\\n    {\\n      \\"Code\\": \\"OK\\",\\n      \\"Message\\": \\"无\\",\\n      \\"HostId\\": \\"1\\",\\n      \\"UserGroupId\\": \\"1\\",\\n      \\"HostAccounts\\": [\\n        {\\n          \\"Code\\": \\"OK\\",\\n          \\"Message\\": \\"无\\",\\n          \\"HostAccountId\\": \\"1\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<AttachHostAccountsToUserGroupResponse>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n    <Results>\\n        <Message/>\\n        <HostId>1</HostId>\\n        <Code>OK</Code>\\n        <UserGroupId>1</UserGroupId>\\n    </Results>\\n    <Results>\\n        <HostAccounts>\\n            <Message/>\\n            <Code>OK</Code>\\n            <HostAccountId>1</HostAccountId>\\n        </HostAccounts>\\n    </Results>\\n</AttachHostAccountsToUserGroupResponse>","errorExample":""}]',
      'title' => '为用户组授权主机及主机账户',
      'summary' => '为用户组授权主机及主机账户。',
      'description' => '为用户组授权主机和主机账户后，该用户组内的用户都可以访问已授权的主机。',
      'requestParamsDescription' => 'Hosts参数结构说明
| 字段 | 类型 | 示例值 |描述 |
| --- | --- | --- |--- |
| HostId | string |1 |主机ID。|
| HostAccountIds | array[string] |["9","8","7"]|主机账户ID。该参数为JSON格式的字符串，最多可设置10个主机账户ID。 |

以下是该参数的取值示例。
``` 
[
{"HostId":"1"},
{"HostId":"2","HostAccountIds":["1","2","3",...]},
{"HostId":"3","HostAccountIds":["4","5","6",...]},
{"HostId":"4","HostAccountIds":["9","8","7",...]}
]
```
调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~148139~~)。
调用API的请求格式，请参见本文示例中的请求示例。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DetachHostGroupAccountsFromUserGroup' => 
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
            'description' => '指定要移除主机组和主机账户授权的用户组所在堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要移除主机组和主机账户授权的用户组所在堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'UserGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要移除主机组和主机账户授权的用户组ID。
> 您可以调用[ListUserGroups](~~204509~~)接口获取该参数。
',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'HostGroups',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要为用户组移除授权的主机组ID和主机账户名称。最多支持设置10个主机组ID，每个主机组最多支持设置10个主机账户名称。您可以不设置主机账户名称，不设置主机账户名称表示为用户组移除主机组和该主机组下所有主机账户的授权。该参数的具体结构请参考请求参数列表下的HostGroups参数结构说明。
> 您可以调用[ListHostGroups](~~201307~~)接口获取主机组ID，调用[ListHostAccounts](~~204372~~)接口获取主机账户名称。',
            'type' => 'string',
            'required' => true,
            'example' => '[ {"HostGroupId":"1"}, {"HostGroupId":"2","HostAccountNames":["root","111","abc"]}, {"HostGroupId":"3","HostAccountNames":["root","111","abc"]}, {"HostGroupId":"4","HostAccountNames":["root","111","abc"]}]',
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
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'Results' => 
              array (
                'description' => '接口的调用结果。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Code' => 
                    array (
                      'description' => '接口的调用结果信息。取值：
- **OK**：操作成功。
- **UNEXPECTED**：未知错误。
- **INVALID_ARGUMENT**：请求参数设置错误。
- **OBJECT_NOT_FOUND**：操作的对象不存在。
- **OBJECT_AlREADY_EXISTS** ：操作的对象已存在。
',
                      'type' => 'string',
                      'example' => 'OK',
                    ),
                    'Message' => 
                    array (
                      'description' => '该参数已废弃，无需关注。',
                      'type' => 'string',
                      'example' => '无',
                    ),
                    'HostGroupId' => 
                    array (
                      'description' => '主机组ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'UserGroupId' => 
                    array (
                      'description' => '用户组ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'HostAccountNames' => 
                    array (
                      'description' => '为用户组移除主机账户授权操作返回的结果信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Code' => 
                          array (
                            'description' => '为用户组移除主机账户授权操作返回的结果。取值：
- **OK**：操作成功。
- **UNEXPECTED**：未知错误。
- **INVALID_ARGUMENT**：请求参数设置错误。
- **OBJECT_NOT_FOUND**：操作的对象不存在。
- **OBJECT_AlREADY_EXISTS** ：操作的对象已存在。
',
                            'type' => 'string',
                            'example' => 'OK',
                          ),
                          'Message' => 
                          array (
                            'description' => '该参数已废弃，无需关注。',
                            'type' => 'string',
                            'example' => '无',
                          ),
                          'HostAccountName' => 
                          array (
                            'description' => '主机账户名称。',
                            'type' => 'string',
                            'example' => 'root',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"Results\\": [\\n    {\\n      \\"Code\\": \\"OK\\",\\n      \\"Message\\": \\"无\\",\\n      \\"HostGroupId\\": \\"1\\",\\n      \\"UserGroupId\\": \\"1\\",\\n      \\"HostAccountNames\\": [\\n        {\\n          \\"Code\\": \\"OK\\",\\n          \\"Message\\": \\"无\\",\\n          \\"HostAccountName\\": \\"root\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DetachHostGroupAccountsFromUserGroupResponse>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n    <Results>\\n        <Message/>\\n        <HostGroupId>1</HostGroupId>\\n        <Code>OK</Code>\\n        <UserGroupId>1</UserGroupId>\\n    </Results>\\n    <Results>\\n        <HostAccountNames>\\n            <HostAccountName>root</HostAccountName>\\n            <Message/>\\n            <Code>OK</Code>\\n        </HostAccountNames>\\n    </Results>\\n</DetachHostGroupAccountsFromUserGroupResponse>","errorExample":""}]',
      'title' => '移除用户组已授权的主机组及主机账户',
      'summary' => '移除用户组已授权的主机组及主机账户。',
      'requestParamsDescription' => 'HostGroups参数结构说明
| 字段 | 类型 | 示例值 |描述 |
| --- | --- | --- |--- |
| HostGroupId | string |1 |主机组ID。|
| HostAccountNames | array[string] |["root","111","abc"]|主机账户名称。该参数为JSON格式的字符串，最多可设置10个主机账户名称。 |

以下是该参数的取值示例。
``` 
[
{"HostGroupId":"1"}, 
{"HostGroupId":"2","HostAccountNames":["root","111","abc"]}, 
{"HostGroupId":"3","HostAccountNames":["root","111","abc"]},  
{"HostGroupId":"4","HostAccountNames":["root","111","abc"]} 
]
```
调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~148139~~)。
调用API的请求格式，请参见本文示例中的请求示例。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AttachHostGroupAccountsToUser' => 
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
            'description' => '指定要授权主机组和主机账户的用户所在堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要授权主机组和主机账户的用户所在堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要授权主机组和主机账户的用户ID。
> 您可以调用[ListUsers](~~204522~~)接口获取该参数。
',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'HostGroups',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要为用户授权的主机组ID和主机账户名称。最多支持设置10个主机组ID，每个主机组最多支持设置10个主机账户名称。您可以不设置主机账户名称，不设置主机账户名称表示仅为用户授权主机组。该参数的具体结构请参考请求参数列表下的HostGroups参数结构说明。
> 您可以调用[ListHostGroups](~~201307~~)接口获取主机组ID，调用[ListHostAccounts](~~204372~~)接口获取主机账户名称。',
            'type' => 'string',
            'required' => true,
            'example' => '[ {"HostGroupId":"1"}, {"HostGroupId":"2","HostAccountNames":["root","111","abc"]}, {"HostGroupId":"3","HostAccountNames":["root","111","abc"]}, {"HostGroupId":"4","HostAccountNames":["root","111","abc"]} ]',
            'pattern' => '^[^\';<>=|\\(\\)]+$',
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
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'Results' => 
              array (
                'description' => '接口的调用结果。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Code' => 
                    array (
                      'description' => '接口的调用结果信息。取值：
- **OK**：操作成功。
- **UNEXPECTED**：未知错误。
- **INVALID_ARGUMENT**：请求参数设置错误。
- **OBJECT_NOT_FOUND**：操作的对象不存在。
- **OBJECT_AlREADY_EXISTS** ：操作的对象已存在。
',
                      'type' => 'string',
                      'example' => 'OK',
                    ),
                    'Message' => 
                    array (
                      'description' => '该参数已废弃，无需关注。',
                      'type' => 'string',
                      'example' => '无',
                    ),
                    'HostGroupId' => 
                    array (
                      'description' => '主机组ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'UserId' => 
                    array (
                      'description' => '用户ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'HostAccountNames' => 
                    array (
                      'description' => '为用户授权主机账户名称操作的返回结果信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Code' => 
                          array (
                            'description' => '为用户授权主机账户名称操作的返回结果。取值：
- **OK**：操作成功。
- **UNEXPECTED**：未知错误。
- **INVALID_ARGUMENT**：请求参数设置错误。
- **OBJECT_NOT_FOUND**：操作的对象不存在。
- **OBJECT_AlREADY_EXISTS** ：操作的对象已存在。
',
                            'type' => 'string',
                            'example' => 'OK',
                          ),
                          'Message' => 
                          array (
                            'description' => '该参数已废弃，无需关注。',
                            'type' => 'string',
                            'example' => '无',
                          ),
                          'HostAccountName' => 
                          array (
                            'description' => '主机账户名称。',
                            'type' => 'string',
                            'example' => 'root',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"Results\\": [\\n    {\\n      \\"Code\\": \\"OK\\",\\n      \\"Message\\": \\"无\\",\\n      \\"HostGroupId\\": \\"1\\",\\n      \\"UserId\\": \\"1\\",\\n      \\"HostAccountNames\\": [\\n        {\\n          \\"Code\\": \\"OK\\",\\n          \\"Message\\": \\"无\\",\\n          \\"HostAccountName\\": \\"root\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<AttachHostGroupAccountsToUserResponse>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n    <Results>\\n        <HostGroupId>1</HostGroupId>\\n        <Message/>\\n        <Code>OK</Code>\\n        <UserId>1</UserId>\\n    </Results>\\n    <Results>\\n        <HostAccountNames>\\n            <HostAccountName>root</HostAccountName>\\n            <Message/>\\n            <Code>OK</Code>\\n        </HostAccountNames>\\n    </Results>\\n</AttachHostGroupAccountsToUserResponse>","errorExample":""}]',
      'title' => '为用户授权主机组和主机账号',
      'summary' => '为用户授权主机组和主机账号。',
      'requestParamsDescription' => 'HostGroups参数结构说明
| 字段 | 类型 | 示例值 |描述 |
| --- | --- | --- |--- |
| HostGroupId | string |1 |主机组ID。|
| HostAccountNames | array[string] |["root","111","abc"]|主机账户名称。该参数为JSON格式的字符串，最多可设置10个主机账户名称。 |

以下是该参数的取值示例。
``` 
[
{"HostGroupId":"1"}, 
{"HostGroupId":"2","HostAccountNames":["root","111","abc"]}, 
{"HostGroupId":"3","HostAccountNames":["root","111","abc"]},  
{"HostGroupId":"4","HostAccountNames":["root","111","abc"]} 
]
```
调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~148139~~)。
调用API的请求格式，请参见本文示例中的请求示例。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AttachHostGroupAccountsToUserGroup' => 
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
            'description' => '指定要授权主机组和主机账户的用户组所在堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要授权主机组和主机账户的用户组所在堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'UserGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要授权主机组和主机账户的用户组ID。
> 您可以调用[ListUserGroups](~~204509~~)接口获取该参数。
',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'HostGroups',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要为用户组授权的主机组ID和主机账户名称。最多支持设置10个主机组ID，每个主机组最多支持设置10个主机账户名称。您可以不设置主机账户名称，不设置主机账户名称表示仅为用户组授权主机组。该参数的具体结构请参考请求参数列表下的HostGroups参数结构说明。
> 您可以调用[ListHostGroups](~~201307~~)接口获取主机组ID，调用[ListHostAccounts](~~204372~~)接口获取主机账户名称。',
            'type' => 'string',
            'required' => true,
            'example' => '[ {"HostGroupId":"1"}, {"HostGroupId":"2","HostAccountNames":["root","111","abc"]}, {"HostGroupId":"3","HostAccountNames":["root","111","abc"]}, {"HostGroupId":"4","HostAccountNames":["root","111","abc"]}]',
            'pattern' => '^[^\';<>=|\\(\\)]+$',
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
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'Results' => 
              array (
                'description' => '接口的调用结果。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Code' => 
                    array (
                      'description' => '接口的调用结果信息。取值：
- **OK**：操作成功。
- **UNEXPECTED**：未知错误。
- **INVALID_ARGUMENT**：请求参数设置错误。
- **OBJECT_NOT_FOUND**：操作的对象不存在。
- **OBJECT_AlREADY_EXISTS** ：操作的对象已存在。
',
                      'type' => 'string',
                      'example' => 'OK',
                    ),
                    'Message' => 
                    array (
                      'description' => '该参数已废弃，无需关注。',
                      'type' => 'string',
                      'example' => '无',
                    ),
                    'HostGroupId' => 
                    array (
                      'description' => '主机组ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'UserGroupId' => 
                    array (
                      'description' => '用户组ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'HostAccountNames' => 
                    array (
                      'description' => '为用户组授权主机账户名称操作返回的结果信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Code' => 
                          array (
                            'description' => '为用户组授权主机账户名称操作返回的结果。取值：
- **OK**：操作成功。
- **UNEXPECTED**：未知错误。
- **INVALID_ARGUMENT**：请求参数设置错误。
- **OBJECT_NOT_FOUND**：操作的对象不存在。
- **OBJECT_AlREADY_EXISTS** ：操作的对象已存在。
',
                            'type' => 'string',
                            'example' => 'OK',
                          ),
                          'Message' => 
                          array (
                            'description' => '该参数已废弃，无需关注。',
                            'type' => 'string',
                            'example' => '无',
                          ),
                          'HostAccountName' => 
                          array (
                            'description' => '主机账户名称。',
                            'type' => 'string',
                            'example' => 'abc',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"Results\\": [\\n    {\\n      \\"Code\\": \\"OK\\",\\n      \\"Message\\": \\"无\\",\\n      \\"HostGroupId\\": \\"1\\",\\n      \\"UserGroupId\\": \\"1\\",\\n      \\"HostAccountNames\\": [\\n        {\\n          \\"Code\\": \\"OK\\",\\n          \\"Message\\": \\"无\\",\\n          \\"HostAccountName\\": \\"abc\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<AttachHostGroupAccountsToUserGroupResponse>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n    <Results>\\n        <Message/>\\n        <HostGroupId>1</HostGroupId>\\n        <Code>OK</Code>\\n        <UserGroupId>1</UserGroupId>\\n    </Results>\\n    <Results>\\n        <HostAccountNames>\\n            <HostAccountName>abc</HostAccountName>\\n            <Message/>\\n            <Code>OK</Code>\\n        </HostAccountNames>\\n    </Results>\\n</AttachHostGroupAccountsToUserGroupResponse>","errorExample":""}]',
      'title' => '为用户组授权主机组和主机账号',
      'summary' => '为用户组授权主机组和主机账号。',
      'requestParamsDescription' => 'HostGroups参数结构说明
| 字段 | 类型 | 示例值 |描述 |
| --- | --- | --- |--- |
| HostGroupId | string |1 |主机组ID。|
| HostAccountNames | array[string] |["root","111","abc"]|主机账户名称。该参数为JSON格式的字符串，最多可设置10个主机账户名称。 |

以下是该参数的取值示例。
``` 
[
{"HostGroupId":"1"}, 
{"HostGroupId":"2","HostAccountNames":["root","111","abc"]}, 
{"HostGroupId":"3","HostAccountNames":["root","111","abc"]},  
{"HostGroupId":"4","HostAccountNames":["root","111","abc"]} 
]
```
调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~148139~~)。
调用API的请求格式，请参见本文示例中的请求示例。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListHostAccountsForUserGroup' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询已授权主机账户列表的用户组所在堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询已授权主机账户列表的用户组所在堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'UserGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询已授权主机账户列表的用户组ID。
> 您可以调用[ListUserGroups](~~204509~~)接口获取该参数。
',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'HostId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的主机账户的主机ID。
> 您可以调用[ListHosts](~~200665~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时，当前页的页码。默认值为**1**。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时，每页显示的数据最大条数。  
PageSize参数最大取值为100。每页默认显示的数据条数为20条，PageSize参数值为空时，将默认返回20条数据。
> 建议PageSize取值不要为空。',
            'type' => 'string',
            'required' => false,
            'example' => '20',
          ),
        ),
        6 => 
        array (
          'name' => 'HostAccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的主机账户名称。支持精确查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'root',
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
                'description' => '查询到的主机账户总数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'HostAccounts' => 
              array (
                'description' => '查询到的主机账户列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'HostAccountName' => 
                    array (
                      'description' => '主机账户名称。',
                      'type' => 'string',
                      'example' => 'host１',
                    ),
                    'HostAccountId' => 
                    array (
                      'description' => '主机账户ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'IsAuthorized' => 
                    array (
                      'description' => '主机账户是否授权给当前用户组。取值：
- **true**：已授权
- **false**：未授权
',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'ProtocolName' => 
                    array (
                      'description' => '主机账户的协议名称。取值：
- **SSH**
- **RDP**',
                      'type' => 'string',
                      'example' => 'SSH',
                    ),
                    'HostId' => 
                    array (
                      'description' => '主机账户所在主机的ID。',
                      'type' => 'string',
                      'example' => '１',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"HostAccounts\\": [\\n    {\\n      \\"HostAccountName\\": \\"host１\\",\\n      \\"HostAccountId\\": \\"1\\",\\n      \\"IsAuthorized\\": true,\\n      \\"ProtocolName\\": \\"SSH\\",\\n      \\"HostId\\": \\"１\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListHostAccountsForUserGroupResponse>\\n    <TotalCount>1</TotalCount>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n    <HostAccounts>\\n        <HostAccountName>host１</HostAccountName>\\n        <ProtocolName>SSH</ProtocolName>\\n        <IsAuthorized>true</IsAuthorized>\\n        <HostId>１</HostId>\\n        <HostAccountId>1</HostAccountId>\\n    </HostAccounts>\\n</ListHostAccountsForUserGroupResponse>","errorExample":""}]',
      'title' => '查询指定用户组已授权和未授权的主机账户列表',
      'summary' => '查询指定用户组在指定主机下已授权和未授权的主机账户列表。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~148139~~)。
调用API的请求格式，请参见本文示例中的请求示例。
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListHostGroupAccountNamesForUser' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的用户所在堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的用户所在堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的用户ID。
> 您可以调用[ListUsers](~~204522~~)接口获取该参数。
',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'HostGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的主机组ID。
> 您可以调用[ListHostGroups](~~201307~~)接口获取该参数。

',
            'type' => 'string',
            'required' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'HostAccountNames' => 
              array (
                'description' => '查询到的主机账户名称列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '查询到的主机账户名称。',
                  'type' => 'string',
                  'example' => 'abc',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"HostAccountNames\\": [\\n    \\"abc\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListHostGroupAccountNamesForUserResponse>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n    <HostAccountNames>abc</HostAccountNames>\\n</ListHostGroupAccountNamesForUserResponse>","errorExample":""}]',
      'title' => '查询主机组中已授权的主机账户名称',
      'summary' => '查询指定用户在指定主机组中已授权的主机账户名称。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~148139~~)。
调用API的请求格式，请参见本文示例中的请求示例。
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListHostGroupAccountNamesForUserGroup' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的用户组所在堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的用户组所在堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'UserGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的用户组ID。
> 您可以调用[ListUserGroups](~~204509~~)接口获取该参数。
',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'HostGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的主机组ID。
> 您可以调用[ListHostGroups](~~201307~~)接口获取该参数。

',
            'type' => 'string',
            'required' => true,
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
            'description' => '响应数据。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'HostAccountNames' => 
              array (
                'description' => '查询到的主机账户名称。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '查询到的主机账户名称。',
                  'type' => 'string',
                  'example' => '["root","abc"]',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"HostAccountNames\\": [\\n    \\"[\\\\\\"root\\\\\\",\\\\\\"abc\\\\\\"]\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListHostGroupAccountNamesForUserGroupResponse>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n    <HostAccountNames>root</HostAccountNames>\\n    <HostAccountNames>abc</HostAccountNames>\\n</ListHostGroupAccountNamesForUserGroupResponse>","errorExample":""}]',
      'title' => '查询已授权的主机账户名称',
      'summary' => '查询指定用户组在指定主机组中已授权的主机账户名称。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~148139~~)。
调用API的请求格式，请参见本文示例中的请求示例。
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListHostGroupsForUser' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的用户所在堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的用户所在堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'Mode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的主机组列表的模式。取值：
- **Authorized**：已授权（默认）
- **Unauthorized**：未授权',
            'type' => 'string',
            'required' => false,
            'example' => 'Authorized',
          ),
        ),
        3 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的用户ID。
> 您可以调用[ListUsers](~~204522~~)接口获取该参数。
',
            'type' => 'string',
            'required' => true,
            'example' => '１',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时，当前页的页码。默认值为**1**。',
            'type' => 'string',
            'required' => false,
            'example' => '１',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时，每页显示的数据最大条数。  
PageSize参数最大取值为100。每页默认显示的数据条数为20条，PageSize参数值为空时，将默认返回20条数据。
> 建议PageSize取值不要为空。',
            'type' => 'string',
            'required' => false,
            'example' => '20',
          ),
        ),
        6 => 
        array (
          'name' => 'HostGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的主机组名称。最多支持128字符，仅支持精确查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'group',
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
                'description' => '查询到的主机组总数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'HostGroups' => 
              array (
                'description' => '查询到的主机组列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'HostGroupId' => 
                    array (
                      'description' => '主机组ID。',
                      'type' => 'string',
                      'example' => '１',
                    ),
                    'Comment' => 
                    array (
                      'description' => '主机组的备注信息。',
                      'type' => 'string',
                      'example' => 'comment',
                    ),
                    'HostGroupName' => 
                    array (
                      'description' => '主机组名称。',
                      'type' => 'string',
                      'example' => 'group',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"HostGroups\\": [\\n    {\\n      \\"HostGroupId\\": \\"１\\",\\n      \\"Comment\\": \\"comment\\",\\n      \\"HostGroupName\\": \\"group\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListHostGroupsForUserResponse>\\n    <TotalCount>1</TotalCount>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n    <HostGroups>\\n        <Comment>comment</Comment>\\n        <HostGroupId>１</HostGroupId>\\n        <HostGroupName>group</HostGroupName>\\n    </HostGroups>\\n</ListHostGroupsForUserResponse>","errorExample":""}]',
      'title' => '查询指定用户已授权或未授权的主机组列表',
      'summary' => '查询指定堡垒机用户已授权或未授权的主机组列表。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~148139~~)。
调用API的请求格式，请参见本文示例中的请求示例。
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListHostGroupsForUserGroup' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的用户组所在堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的用户组所在堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'Mode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的主机组列表的模式。取值：
- **Authorized**：已授权（默认）
- **Unauthorized**：未授权',
            'type' => 'string',
            'required' => false,
            'example' => 'Authorized',
          ),
        ),
        3 => 
        array (
          'name' => 'UserGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的用户组ID。
> 您可以调用[ListUserGroups](~~204509~~)接口获取该参数。
',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时，当前页的页码。默认值为**1**。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时，每页显示的数据最大条数。  
PageSize参数最大取值为100。每页默认显示的数据条数为20条，PageSize参数值为空时，将默认返回20条数据。
> 建议PageSize取值不要为空。',
            'type' => 'string',
            'required' => false,
            'example' => '20',
          ),
        ),
        6 => 
        array (
          'name' => 'HostGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的主机组名称。仅支持精确查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'group',
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
                'description' => '查询到的主机组总数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'HostGroups' => 
              array (
                'description' => '查询到的主机组列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'HostGroupId' => 
                    array (
                      'description' => '主机组ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'Comment' => 
                    array (
                      'description' => '主机组的备注信息。',
                      'type' => 'string',
                      'example' => 'comment',
                    ),
                    'HostGroupName' => 
                    array (
                      'description' => '主机组名称。',
                      'type' => 'string',
                      'example' => 'group',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"HostGroups\\": [\\n    {\\n      \\"HostGroupId\\": \\"1\\",\\n      \\"Comment\\": \\"comment\\",\\n      \\"HostGroupName\\": \\"group\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListHostGroupsForUserGroupResponse>\\n    <TotalCount>1</TotalCount>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n    <HostGroups>\\n        <Comment>comment</Comment>\\n        <HostGroupId>1</HostGroupId>\\n        <HostGroupName>group</HostGroupName>\\n    </HostGroups>\\n</ListHostGroupsForUserGroupResponse>","errorExample":""}]',
      'title' => '查询指定用户组已授权或未授权的主机组列表',
      'summary' => '查询指定堡垒机用户组已授权或未授权的主机组列表。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~148139~~)。
调用API的请求格式，请参见本文示例中的请求示例。
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListHostsForUserGroup' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询授权主机列表的用户组所在堡垒机实例的ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询授权主机列表的用户组所在堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'Mode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的主机列表的模式。取值：
- **Authorized**：已授权（默认）
- **Unauthorized**：未授权',
            'type' => 'string',
            'required' => false,
            'example' => 'Authorized',
          ),
        ),
        3 => 
        array (
          'name' => 'UserGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询授权主机列表的用户组ID。
> 您可以调用[ListUserGroups](~~204509~~)接口获取该参数。
',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时，当前页的页码。默认值为1。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时，每页显示的数据最大条数。  
PageSize参数最大取值为100。每页默认显示的数据条数为20条，PageSize参数值为空时，将默认返回20条数据。
> 建议PageSize取值不要为空。',
            'type' => 'string',
            'required' => false,
            'example' => '20',
          ),
        ),
        6 => 
        array (
          'name' => 'HostAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的主机地址，可使用域名或IP地址。仅支持精确查询。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.XX.XX',
          ),
        ),
        7 => 
        array (
          'name' => 'HostName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的主机名称。仅支持精确查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'abc',
          ),
        ),
        8 => 
        array (
          'name' => 'OSType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的主机的操作系统类型。取值：
- **Linux**
- **Windows**',
            'type' => 'string',
            'required' => false,
            'example' => 'Linux',
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
                'description' => '查询到的主机总数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'Hosts' => 
              array (
                'description' => '查询到的主机列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Comment' => 
                    array (
                      'description' => '主机的备注信息。',
                      'type' => 'string',
                      'example' => 'comment',
                    ),
                    'ActiveAddressType' => 
                    array (
                      'description' => '主机的地址类型。取值：
- **Public**：公网地址
- **Private**：私网地址',
                      'type' => 'string',
                      'example' => 'Public',
                    ),
                    'HostPublicAddress' => 
                    array (
                      'description' => '主机的公网地址，可为域名或IP地址。',
                      'type' => 'string',
                      'example' => '10.158.XX.XX',
                    ),
                    'HostName' => 
                    array (
                      'description' => '主机名称。',
                      'type' => 'string',
                      'example' => 'host1',
                    ),
                    'HostPrivateAddress' => 
                    array (
                      'description' => '主机的私网地址，可为域名或IP地址。',
                      'type' => 'string',
                      'example' => '192.168.XX.XX',
                    ),
                    'OSType' => 
                    array (
                      'description' => '主机的操作系统类型。取值：
- **Linux**
- **Windows**',
                      'type' => 'string',
                      'example' => 'Linux',
                    ),
                    'HostId' => 
                    array (
                      'description' => '主机ID。',
                      'type' => 'string',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 10,\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"Hosts\\": [\\n    {\\n      \\"Comment\\": \\"comment\\",\\n      \\"ActiveAddressType\\": \\"Public\\",\\n      \\"HostPublicAddress\\": \\"10.158.XX.XX\\",\\n      \\"HostName\\": \\"host1\\",\\n      \\"HostPrivateAddress\\": \\"192.168.XX.XX\\",\\n      \\"OSType\\": \\"Linux\\",\\n      \\"HostId\\": \\"1\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListHostsForUserGroupResponse>\\n    <Hosts>\\n        <Comment>comment</Comment>\\n        <ActiveAddressType>Public</ActiveAddressType>\\n        <HostPrivateAddress>192.168.XX.XX</HostPrivateAddress>\\n        <HostPublicAddress>10.158.XX.XX</HostPublicAddress>\\n        <OSType>Linux</OSType>\\n        <HostId>1</HostId>\\n        <HostName>host1</HostName>\\n    </Hosts>\\n    <TotalCount>10</TotalCount>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n</ListHostsForUserGroupResponse>","errorExample":""}]',
      'title' => '查询指定用户组已授权或未授权的主机列表',
      'summary' => '查询指定堡垒机用户组已授权或未授权的主机列表。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~148139~~)。
调用API的请求格式，请参见本文示例中的请求示例。
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AttachDatabaseAccountsToUser' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要授权数据库和数据库账户的用户所在堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-wwo36qbv601',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的地域ID。
> 地域ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要授权的用户ID。
> 您可以调用[ListUsers](~~204522~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'Databases',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '数据库对象数组。
> 最大数据库数10个，数据库账号数10个。允许不传账号，不传账号则代表授权到数据库。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'DatabaseId' => 
                array (
                  'description' => '要授权的数据库实例 ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '22',
                ),
                'DatabaseAccountIds' => 
                array (
                  'description' => '数据库账户ID数组。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '数据库账户ID。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '1',
                  ),
                  'required' => false,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '23120B8E-8737-50BD-A3A3-902A7821F04D',
              ),
              'Results' => 
              array (
                'description' => '接口的调用结果。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Code' => 
                    array (
                      'description' => '错误码。错误码为**OK**时，表示授权成功；其他错误码表示授权失败。',
                      'type' => 'string',
                      'example' => 'OK',
                    ),
                    'DatabaseAccounts' => 
                    array (
                      'description' => '数据库账号信息的列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Code' => 
                          array (
                            'description' => '错误码。错误码为OK时，表示授权成功；其他错误码表示授权失败。',
                            'type' => 'string',
                            'example' => 'OK',
                          ),
                          'DatabaseAccountId' => 
                          array (
                            'description' => '数据库账户ID。',
                            'type' => 'string',
                            'example' => '6',
                          ),
                          'Message' => 
                          array (
                            'description' => '错误信息。',
                            'type' => 'string',
                            'example' => 'success',
                          ),
                        ),
                      ),
                    ),
                    'DatabaseId' => 
                    array (
                      'description' => '数据库实例 ID。',
                      'type' => 'string',
                      'example' => '22',
                    ),
                    'Message' => 
                    array (
                      'description' => '错误信息。',
                      'type' => 'string',
                      'example' => '无',
                    ),
                    'UserId' => 
                    array (
                      'description' => '用户ID。',
                      'type' => 'string',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"23120B8E-8737-50BD-A3A3-902A7821F04D\\",\\n  \\"Results\\": [\\n    {\\n      \\"Code\\": \\"OK\\",\\n      \\"DatabaseAccounts\\": [\\n        {\\n          \\"Code\\": \\"OK\\",\\n          \\"DatabaseAccountId\\": \\"6\\",\\n          \\"Message\\": \\"success\\"\\n        }\\n      ],\\n      \\"DatabaseId\\": \\"22\\",\\n      \\"Message\\": \\"无\\",\\n      \\"UserId\\": \\"1\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '为用户授权数据库及数据库账户',
      'summary' => '为用户授权数据库及数据库账户。',
      'requestParamsDescription' => '入参数据结构

Database对象数组

| 字段 | 类型 | 描述 |
| --- | --- | --- |
| DatabaseId | string |数据库ID。|
| DatabaseAccountIds | array[string] | 账号ID数组。最多10个 |

以下是该参数的取值示例。

```
[
{"DatabaseId":"1"}                                           // 只授权数据库
{"DatabaseId":"2","DatabaseAccountIds":["1","2","3",...]},       // 授权数据库，且授权账号
{"DatabaseId":"5","DatabaseAccountIds":[]}                       // 不支持
]
```',
    ),
    'ListDatabasesForUser' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。

> 可通过调用[DescribeInstances](~~153281~~)接口获取堡垒机实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-tl32swayw7o',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的地域ID。
> 地域ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询已授权数据库的用户ID。
> 您可以调用[ListUsers](~~204522~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置从返回结果的第几页开始显示查询结果。默认值为**1**，表示从第1页开始显示。',
            'type' => 'string',
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
            'description' => '指定分页查询时，每页显示的数据最大条数。  
PageSize参数最大取值为100。每页默认显示的数据条数为20条，PageSize参数值为空时，将默认返回20条数据。
> 建议PageSize取值不要为空。',
            'type' => 'string',
            'required' => false,
            'example' => '20',
          ),
        ),
        5 => 
        array (
          'name' => 'DatabaseName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的数据库实例名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'MySQL-8.0',
          ),
        ),
        6 => 
        array (
          'name' => 'DatabaseAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的数据库地址。仅支持精确查询。',
            'type' => 'string',
            'required' => false,
            'example' => '47.101.**.**',
          ),
        ),
        7 => 
        array (
          'name' => 'DatabaseType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的数据库类型，取值：

- **MySQL**
- **Oracle**
- **PostgreSQL**
- **SQLServer**',
            'type' => 'string',
            'required' => false,
            'example' => 'MySQL',
          ),
        ),
        8 => 
        array (
          'name' => 'NetworkDomainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询已授权数据库列表的网络域ID。',
            'type' => 'string',
            'required' => false,
            'example' => '5',
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
              'Databases' => 
              array (
                'description' => '查询到的数据库列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ActiveAddressType' => 
                    array (
                      'description' => '数据库地址类型。取值：
- **Public** ：公网地址
- **Private** ：私网地址',
                      'type' => 'string',
                      'example' => 'Private',
                    ),
                    'Comment' => 
                    array (
                      'description' => '数据库实例的备注信息。',
                      'type' => 'string',
                      'example' => 'comment',
                    ),
                    'DatabaseId' => 
                    array (
                      'description' => '数据库实例ID。',
                      'type' => 'string',
                      'example' => '36',
                    ),
                    'DatabaseName' => 
                    array (
                      'description' => '数据库实例名称。',
                      'type' => 'string',
                      'example' => 'MySQL56',
                    ),
                    'DatabasePort' => 
                    array (
                      'description' => '数据库的端口。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '3306',
                    ),
                    'DatabasePrivateAddress' => 
                    array (
                      'description' => '数据库的私网地址，可为域名或IP地址。',
                      'type' => 'string',
                      'example' => '192.168.XX.XX',
                    ),
                    'DatabasePublicAddress' => 
                    array (
                      'description' => '数据库的公网地址，可为域名或IP地址。',
                      'type' => 'string',
                      'example' => 'www.example.com',
                    ),
                    'DatabaseType' => 
                    array (
                      'description' => '数据库类型，取值：

- **MySQL**
- **Oracle**
- **PostgreSQL**
- **SQLServer**',
                      'type' => 'string',
                      'example' => 'MySQL',
                    ),
                    'NetworkDomainId' => 
                    array (
                      'description' => '数据库所属的网络域的ID。',
                      'type' => 'string',
                      'example' => '2',
                    ),
                    'Source' => 
                    array (
                      'description' => '数据库的来源。取值：

- **Local**：本地数据库实例
- **Rds**：RDS类型数据库实例
- **PolarDB**: PolarDB类型数据库实例',
                      'type' => 'string',
                      'example' => 'Local',
                    ),
                    'SourceInstanceId' => 
                    array (
                      'description' => '数据库对应的RDS实例ID或PolarDB实例ID。
> **Source**为**Local**时，该参数返回值为空。',
                      'type' => 'string',
                      'example' => 'i-wz9fv2hwux78x9******',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'A8A665B9-8550-4942-9DEE-73198051856B',
              ),
              'TotalCount' => 
              array (
                'description' => '查询到的数据库总数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '15',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Databases\\": [\\n    {\\n      \\"ActiveAddressType\\": \\"Private\\",\\n      \\"Comment\\": \\"comment\\",\\n      \\"DatabaseId\\": \\"36\\",\\n      \\"DatabaseName\\": \\"MySQL56\\",\\n      \\"DatabasePort\\": 3306,\\n      \\"DatabasePrivateAddress\\": \\"192.168.XX.XX\\",\\n      \\"DatabasePublicAddress\\": \\"www.example.com\\",\\n      \\"DatabaseType\\": \\"MySQL\\",\\n      \\"NetworkDomainId\\": \\"2\\",\\n      \\"Source\\": \\"Local\\",\\n      \\"SourceInstanceId\\": \\"i-wz9fv2hwux78x9******\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"A8A665B9-8550-4942-9DEE-73198051856B\\",\\n  \\"TotalCount\\": 15\\n}","type":"json"}]',
      'title' => '查询用户已授权的数据库列表',
      'summary' => '查询用户已授权的数据库列表。',
    ),
    'DetachDatabaseAccountsFromUserGroup' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机实例的ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-7mz2v120f0y',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'UserGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要移除授权数据库和数据库账户的用户组ID。
> 您可以调用[ListUserGroups](~~204509~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'Databases',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '要移除授权的数据库信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '最多支持设置10个数据库实例ID，每个数据库实例最多支持设置10个数据库账户ID。您可以不设置数据库账户ID，不设置数据库账户ID表示为用户移除授权数据库实例和该数据库实例的所有授权数据库账户。',
              'type' => 'object',
              'properties' => 
              array (
                'DatabaseId' => 
                array (
                  'description' => '指定要移除授权的数据库实例ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '4',
                ),
                'DatabaseAccountIds' => 
                array (
                  'description' => '要移除授权的数据库账户ID。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '指定要移除授权的数据库账户ID。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '["1","2","3"]',
                  ),
                  'required' => false,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'AC528ED1-C302-56E5-9CB5-ADA625D64FF9',
              ),
              'Results' => 
              array (
                'description' => '返回结果信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Code' => 
                    array (
                      'description' => '错误码。错误码为**OK**时，表示移除成功；其他错误码表示移除失败。',
                      'type' => 'string',
                      'example' => 'OK',
                    ),
                    'DatabaseAccounts' => 
                    array (
                      'description' => '数据库账户信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Code' => 
                          array (
                            'description' => '错误码。错误码为**OK**时，表示移除成功；其他错误码表示移除失败。',
                            'type' => 'string',
                            'example' => 'OK',
                          ),
                          'DatabaseAccountId' => 
                          array (
                            'description' => '移除授权的数据库账户ID。',
                            'type' => 'string',
                            'example' => '5',
                          ),
                          'Message' => 
                          array (
                            'description' => '错误信息。',
                            'type' => 'string',
                            'example' => '无',
                          ),
                        ),
                      ),
                    ),
                    'DatabaseId' => 
                    array (
                      'description' => '移除授权的数据库ID。',
                      'type' => 'string',
                      'example' => '27',
                    ),
                    'Message' => 
                    array (
                      'description' => '错误信息。',
                      'type' => 'string',
                      'example' => '无',
                    ),
                    'UserGroupId' => 
                    array (
                      'description' => '用户组ID。',
                      'type' => 'string',
                      'example' => '3',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"AC528ED1-C302-56E5-9CB5-ADA625D64FF9\\",\\n  \\"Results\\": [\\n    {\\n      \\"Code\\": \\"OK\\",\\n      \\"DatabaseAccounts\\": [\\n        {\\n          \\"Code\\": \\"OK\\",\\n          \\"DatabaseAccountId\\": \\"5\\",\\n          \\"Message\\": \\"无\\"\\n        }\\n      ],\\n      \\"DatabaseId\\": \\"27\\",\\n      \\"Message\\": \\"无\\",\\n      \\"UserGroupId\\": \\"3\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '移除给用户组授权的数据库及数据库账户',
      'summary' => '移除给用户组授权的数据库及数据库账户。',
      'requestParamsDescription' => '入参数据结构

Database对象数组

| 字段 | 类型 | 描述 |
| --- | --- | --- |
| DatabaseId | string | 数据库实例ID |
| DatabaseAccountIds | array[string] | 数据库账户ID数组。该参数为JSON格式的字符串，最多可设置10个数据库账户ID。 |

以下是该参数的取值示例。
``` 
[
{"DatabaseId":"1"}                                          // 取消数据库授权，并且删除账号授权
{"DatabaseId":"2","DatabaseAccountIds":["1","2","3",...]},      // 只取消账号授权
{"DatabaseId":"5","DatabaseAccountIds":[]}                      // 不支持
...
]
```',
    ),
    'ListDatabaseAccountsForUser' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-zz42zoqql01',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询已授权数据库账户列表的用户ID。
> 您可以调用[ListUsers](~~204522~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '2',
          ),
        ),
        3 => 
        array (
          'name' => 'DatabaseId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的数据库账户的数据库ID。',
            'type' => 'string',
            'required' => true,
            'example' => '89',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置从返回结果的第几页开始显示查询结果。默认值为**1**，表示从第1页开始显示。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时，每页显示的数据最大条数。  
PageSize参数最大取值为100。每页默认显示的数据条数为20条，PageSize参数值为空时，将默认返回20条数据。
> 建议PageSize取值不要为空。',
            'type' => 'string',
            'required' => false,
            'example' => '20',
          ),
        ),
        6 => 
        array (
          'name' => 'DatabaseAccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的数据库账户名称。最多支持128字符，仅支持精确查询。',
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
              'DatabaseAccounts' => 
              array (
                'description' => '查询到的数据库账户列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DatabaseAccountId' => 
                    array (
                      'description' => '数据库账户ID。',
                      'type' => 'string',
                      'example' => '6',
                    ),
                    'DatabaseAccountName' => 
                    array (
                      'description' => '数据库账户名。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'DatabaseId' => 
                    array (
                      'description' => '数据库账号所属数据库实例ID。',
                      'type' => 'string',
                      'example' => '70',
                    ),
                    'IsAuthorized' => 
                    array (
                      'description' => '数据库账户是否授权给当前用户。取值：
- **true**：已授权
- **false**：未授权',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'ProtocolName' => 
                    array (
                      'description' => '数据库账户的协议名称。取值：
- **MySQL**
- **Oracle**
- **PostgreSQL**
- **SQLServer**',
                      'type' => 'string',
                      'example' => 'MySQL',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '00E3701B-3616-55FE-93EC-E7CF5480B654',
              ),
              'TotalCount' => 
              array (
                'description' => '查询到的数据库账户总数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '3',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"DatabaseAccounts\\": [\\n    {\\n      \\"DatabaseAccountId\\": \\"6\\",\\n      \\"DatabaseAccountName\\": \\"test\\",\\n      \\"DatabaseId\\": \\"70\\",\\n      \\"IsAuthorized\\": true,\\n      \\"ProtocolName\\": \\"MySQL\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"00E3701B-3616-55FE-93EC-E7CF5480B654\\",\\n  \\"TotalCount\\": 3\\n}","type":"json"}]',
      'title' => '查询指定用户已授权和未授权的数据库账户列表',
      'summary' => '查询用户已授权和未授权的数据库账户列表。',
    ),
    'DetachDatabaseAccountsFromUser' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。
> 可通过调用DescribeInstances接口获取堡垒机实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-pe335ipfk01',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要移除授权数据库和数据库账户的用户ID。
> 您可以调用[ListUsers](~~204522~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'Databases',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '数据库实例列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '最多支持设置10个数据库实例ID，每个数据库实例最多支持设置10个数据库账户ID。您可以不设置数据库账户ID，不设置数据库账户ID表示为用户移除授权数据库实例和该数据库实例的所有授权数据库账户。',
              'type' => 'object',
              'properties' => 
              array (
                'DatabaseId' => 
                array (
                  'description' => '指定要移除授权的数据库实例ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '8',
                ),
                'DatabaseAccountIds' => 
                array (
                  'description' => '数据库账户ID数组。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '指定要移除授权的数据库账户ID。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '["1","2","3"]',
                  ),
                  'required' => false,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '79D7E114-CB52-5695-AB15-12776C308387',
              ),
              'Results' => 
              array (
                'description' => '接口调用的结果。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Code' => 
                    array (
                      'description' => '错误码。错误码为**OK**时，表示移除成功；其他错误码表示移除失败。',
                      'type' => 'string',
                      'example' => 'OK',
                    ),
                    'DatabaseAccounts' => 
                    array (
                      'description' => '数据库账号信息的列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '数据库账号信息的列表。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Code' => 
                          array (
                            'description' => '错误码。错误码为OK时，表示移除成功；其他错误码表示移除失败。',
                            'type' => 'string',
                            'example' => 'OK',
                          ),
                          'DatabaseAccountId' => 
                          array (
                            'description' => '移除授权的数据库账户ID。',
                            'type' => 'string',
                            'example' => '9',
                          ),
                          'Message' => 
                          array (
                            'description' => '错误信息。',
                            'type' => 'string',
                            'example' => '无',
                          ),
                        ),
                      ),
                    ),
                    'DatabaseId' => 
                    array (
                      'description' => '移除授权的数据库ID。',
                      'type' => 'string',
                      'example' => '4',
                    ),
                    'Message' => 
                    array (
                      'description' => '错误信息。',
                      'type' => 'string',
                      'example' => '无',
                    ),
                    'UserId' => 
                    array (
                      'description' => '用户ID。',
                      'type' => 'string',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"79D7E114-CB52-5695-AB15-12776C308387\\",\\n  \\"Results\\": [\\n    {\\n      \\"Code\\": \\"OK\\",\\n      \\"DatabaseAccounts\\": [\\n        {\\n          \\"Code\\": \\"OK\\",\\n          \\"DatabaseAccountId\\": \\"9\\",\\n          \\"Message\\": \\"无\\"\\n        }\\n      ],\\n      \\"DatabaseId\\": \\"4\\",\\n      \\"Message\\": \\"无\\",\\n      \\"UserId\\": \\"1\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '移除给用户授权的数据库及数据库账户',
      'summary' => '移除给用户授权的数据库及数据库账户。',
      'requestParamsDescription' => '入参数据结构

Database对象数组

| 字段 | 类型 | 描述 |
| --- | --- | --- |
| DatabaseId | string | 数据库实例ID |
| DatabaseAccountIds | array[string] | 数据库账户ID数组。该参数为JSON格式的字符串，最多可设置10个数据库账户ID。 |

以下是该参数的取值示例。
``` 
[
{"DatabaseId":"1"}                                          // 取消数据库授权，并且删除账号授权
{"DatabaseId":"2","DatabaseAccountIds":["1","2","3",...]},      // 只取消账号授权
{"DatabaseId":"5","DatabaseAccountIds":[]}                      // 不支持
...
]
```',
    ),
    'AttachDatabaseAccountsToUserGroup' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-zvp282aly06',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'UserGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要添加授权的用户组ID。',
            'type' => 'string',
            'required' => true,
            'example' => '2',
          ),
        ),
        3 => 
        array (
          'name' => 'Databases',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '数据库对象数组。
>最大数据库数10个，数据库账号数10个。允许不传账号，不传账号则代表授权到数据库。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'DatabaseId' => 
                array (
                  'description' => '要授权的数据库实例 ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '58',
                ),
                'DatabaseAccountIds' => 
                array (
                  'description' => '数据库账户ID数组。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '数据库账户ID。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '["1","2","3"]',
                  ),
                  'required' => false,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '5D0EB759-CB0A-537D-A2CC-13A9854FA08D',
              ),
              'Results' => 
              array (
                'description' => '接口的调用结果。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Code' => 
                    array (
                      'description' => '错误码。错误码为OK时，表示授权成功；其他错误码表示授权失败。',
                      'type' => 'string',
                      'example' => 'OK',
                    ),
                    'DatabaseAccounts' => 
                    array (
                      'description' => '数据库账号信息的列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Code' => 
                          array (
                            'description' => '错误码。错误码为OK时，表示授权成功；其他错误码表示授权失败。',
                            'type' => 'string',
                            'example' => 'OK',
                          ),
                          'DatabaseAccountId' => 
                          array (
                            'description' => '数据库账户ID。',
                            'type' => 'string',
                            'example' => '8',
                          ),
                          'Message' => 
                          array (
                            'description' => '错误信息。',
                            'type' => 'string',
                            'example' => '无',
                          ),
                        ),
                      ),
                    ),
                    'DatabaseId' => 
                    array (
                      'description' => '数据库实例 ID。',
                      'type' => 'string',
                      'example' => '2',
                    ),
                    'Message' => 
                    array (
                      'description' => '错误信息。',
                      'type' => 'string',
                      'example' => '无',
                    ),
                    'UserGroupId' => 
                    array (
                      'description' => '用户组ID。',
                      'type' => 'string',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5D0EB759-CB0A-537D-A2CC-13A9854FA08D\\",\\n  \\"Results\\": [\\n    {\\n      \\"Code\\": \\"OK\\",\\n      \\"DatabaseAccounts\\": [\\n        {\\n          \\"Code\\": \\"OK\\",\\n          \\"DatabaseAccountId\\": \\"8\\",\\n          \\"Message\\": \\"无\\"\\n        }\\n      ],\\n      \\"DatabaseId\\": \\"2\\",\\n      \\"Message\\": \\"无\\",\\n      \\"UserGroupId\\": \\"1\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '为用户组授权数据库及数据库账户',
      'summary' => '为用户组授权数据库及数据库账户。',
      'requestParamsDescription' => '入参数据结构

Database对象数组

| 字段 | 类型 | 描述 |
| --- | --- | --- |
| DatabaseId | string |数据库ID。|
| DatabaseAccountIds | array[string] | 账号ID数组。最多10个 |

以下是该参数的取值示例。

```
[
{"DatabaseId":"1"}                                           // 只授权数据库
{"DatabaseId":"2","DatabaseAccountIds":["1","2","3",...]},       // 授权数据库，且授权账号
{"DatabaseId":"5","DatabaseAccountIds":[]}                       // 不支持
]
```',
    ),
    'ListDatabasesForUserGroup' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-7mz2ve7h00a',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'UserGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询已授权数据库的用户组ID。',
            'type' => 'string',
            'required' => true,
            'example' => '2',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时，当前页的页码。默认值为1。',
            'type' => 'string',
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
            'description' => '指定分页查询时，每页显示的数据最大条数。  
PageSize参数最大取值为100。每页默认显示的数据条数为20条，PageSize参数值为空时，将默认返回20条数据。
> 建议PageSize取值不要为空。',
            'type' => 'string',
            'required' => false,
            'example' => '20',
          ),
        ),
        5 => 
        array (
          'name' => 'DatabaseName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的数据库实例名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        6 => 
        array (
          'name' => 'DatabaseAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的数据库地址。仅支持精确查询。',
            'type' => 'string',
            'required' => false,
            'example' => '47.101.**.**
',
          ),
        ),
        7 => 
        array (
          'name' => 'DatabaseType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的数据库类型，取值：

- **MySQL**
- **Oracle**
- **PostgreSQL**
- **SQLServer**',
            'type' => 'string',
            'required' => false,
            'example' => 'MySQL',
          ),
        ),
        8 => 
        array (
          'name' => 'NetworkDomainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络域ID。',
            'type' => 'string',
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
            'type' => 'object',
            'properties' => 
            array (
              'Databases' => 
              array (
                'description' => '查询到的数据库列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ActiveAddressType' => 
                    array (
                      'description' => '数据库地址类型。取值：
- **Public** ：公网地址
- **Private** ：私网地址',
                      'type' => 'string',
                      'example' => 'Private',
                    ),
                    'Comment' => 
                    array (
                      'description' => '数据库实例的备注信息。',
                      'type' => 'string',
                      'example' => 'comment',
                    ),
                    'DatabaseAccountCount' => 
                    array (
                      'description' => '查询到的数据库账户总数量。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2',
                    ),
                    'DatabaseId' => 
                    array (
                      'description' => '数据库账号所属数据库实例ID。',
                      'type' => 'string',
                      'example' => '2',
                    ),
                    'DatabaseName' => 
                    array (
                      'description' => '数据库实例名称。',
                      'type' => 'string',
                      'example' => 'MySQL0',
                    ),
                    'DatabasePort' => 
                    array (
                      'description' => '数据库的端口。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '3306',
                    ),
                    'DatabasePrivateAddress' => 
                    array (
                      'description' => '数据库的私网地址，可为域名或ip地址。',
                      'type' => 'string',
                      'example' => 'rm-bp1******',
                    ),
                    'DatabasePublicAddress' => 
                    array (
                      'description' => '数据库的公网地址，可为域名或ip地址。',
                      'type' => 'string',
                      'example' => 'rm-uf65******',
                    ),
                    'DatabaseType' => 
                    array (
                      'description' => '数据库类型，取值：

- **MySQL**
- **Oracle**
- **PostgreSQL**
- **SQLServer**',
                      'type' => 'string',
                      'example' => 'MySQL',
                    ),
                    'NetworkDomainId' => 
                    array (
                      'description' => '数据库所属的网络域的ID。',
                      'type' => 'string',
                      'example' => '5',
                    ),
                    'Source' => 
                    array (
                      'description' => '数据库的来源。取值：

- **Local**：本地数据库实例
- **Rds**：RDS类型数据库实例
- **PolarDB**: PolarDB类型数据库实例',
                      'type' => 'string',
                      'example' => 'Local',
                    ),
                    'SourceInstanceId' => 
                    array (
                      'description' => '数据库对应的RDS实例ID或PolarDB实例ID。
> **Source**为**Local**时，该参数返回值为空。',
                      'type' => 'string',
                      'example' => 'i-wz9c7mjxywmdmqk7q6e4',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'TotalCount' => 
              array (
                'description' => '查询到的数据库总数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '15',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Databases\\": [\\n    {\\n      \\"ActiveAddressType\\": \\"Private\\",\\n      \\"Comment\\": \\"comment\\",\\n      \\"DatabaseAccountCount\\": 2,\\n      \\"DatabaseId\\": \\"2\\",\\n      \\"DatabaseName\\": \\"MySQL0\\",\\n      \\"DatabasePort\\": 3306,\\n      \\"DatabasePrivateAddress\\": \\"rm-bp1******\\",\\n      \\"DatabasePublicAddress\\": \\"rm-uf65******\\",\\n      \\"DatabaseType\\": \\"MySQL\\",\\n      \\"NetworkDomainId\\": \\"5\\",\\n      \\"Source\\": \\"Local\\",\\n      \\"SourceInstanceId\\": \\"i-wz9c7mjxywmdmqk7q6e4\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"TotalCount\\": 15\\n}","type":"json"}]',
      'title' => '查询用户组已授权的数据库列表',
      'summary' => '查询用户组已授权的数据库列表。',
    ),
    'ListOperationDatabases' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-tl32wdd',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的地域ID。
> 地域ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时，当前页的页码。默认值为**1**。',
            'type' => 'string',
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
            'description' => '指定分页查询时，每页显示的数据最大条数。  
PageSize参数最大取值为100。每页默认显示的数据条数为20条，PageSize参数值为空时，将默认返回20条数据。
> 建议PageSize取值不要为空。',
            'type' => 'string',
            'required' => false,
            'example' => '20',
          ),
        ),
        4 => 
        array (
          'name' => 'DatabaseType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库类型，取值如下：

- **MySQL**
- **SQLServer**
- **Oracle**
- **PostgreSQL**',
            'type' => 'string',
            'required' => false,
            'example' => 'MySQL',
          ),
        ),
        5 => 
        array (
          'name' => 'DatabaseName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库实例名称。精确搜索。',
            'type' => 'string',
            'required' => false,
            'example' => 'aaa',
          ),
        ),
        6 => 
        array (
          'name' => 'DatabaseAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库实例地址。',
            'type' => 'string',
            'required' => false,
            'example' => '10.167.XX.XX',
          ),
        ),
        7 => 
        array (
          'name' => 'Source',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库实例的来源。取值：
- **Local**：本地数据库
- **Rds**：RDS数据库
- **PolarDB**：PolarDB数据库',
            'type' => 'string',
            'required' => false,
            'example' => 'Local',
          ),
        ),
        8 => 
        array (
          'name' => 'SourceInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'RDS数据库实例ID，精确搜索。',
            'type' => 'string',
            'required' => false,
            'example' => 'i-bp19ienyt0yax748****',
          ),
        ),
        9 => 
        array (
          'name' => 'SourceInstanceState',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按实例状态过滤

- **Normal**：正常
- **RemoteRelease** ：已释放',
            'type' => 'string',
            'required' => false,
            'example' => 'Normal',
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
              'Databases' => 
              array (
                'description' => '数据库实例列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ActiveAddressType' => 
                    array (
                      'description' => '数据库的地址类型。取值：
- **Public**：公网地址有效
- **Private**：私网地址有效',
                      'type' => 'string',
                      'example' => 'Private',
                    ),
                    'Comment' => 
                    array (
                      'description' => '数据库实例的备注信息。',
                      'type' => 'string',
                      'example' => 'cpp',
                    ),
                    'DatabaseId' => 
                    array (
                      'description' => '数据库实例ID。',
                      'type' => 'string',
                      'example' => '26',
                    ),
                    'DatabaseName' => 
                    array (
                      'description' => '数据库实例名称。',
                      'type' => 'string',
                      'example' => 'zDatabase',
                    ),
                    'DatabasePort' => 
                    array (
                      'description' => '数据库的端口。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '3306',
                    ),
                    'DatabasePrivateAddress' => 
                    array (
                      'description' => '数据库私网地址。',
                      'type' => 'string',
                      'example' => 'rm-b******9b.mysql.rds.aliyuncs.com',
                    ),
                    'DatabasePublicAddress' => 
                    array (
                      'description' => '数据库公网地址。',
                      'type' => 'string',
                      'example' => 'rm-uf******p45.mysql.rds.aliyuncs.com',
                    ),
                    'DatabaseType' => 
                    array (
                      'description' => '数据库类型，取值：
- **MySQL**
- **PostgreSQL**
- **Oracle**
- **SQLServer**',
                      'type' => 'string',
                      'example' => 'MySQL',
                    ),
                    'Source' => 
                    array (
                      'description' => '数据库实例的来源。
- **Local**：本地主机
- **Rds**：RDS数据库
- **PolarDB**：PolarDB数据库',
                      'type' => 'string',
                      'example' => 'Local',
                    ),
                    'SourceInstanceId' => 
                    array (
                      'description' => 'RDS实例ID。',
                      'type' => 'string',
                      'example' => 'i-wz9225bhipya******',
                    ),
                    'SourceInstanceRegionId' => 
                    array (
                      'description' => 'RDS的源实例地域ID。',
                      'type' => 'string',
                      'example' => 'cn-shanghai',
                    ),
                    'SourceInstanceState' => 
                    array (
                      'description' => '数据库实例的状态：
 - **Normal**：正常
- **Release**：已释放',
                      'type' => 'string',
                      'example' => 'Normal',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求ID。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'TotalCount' => 
              array (
                'description' => '查询到的数据库总数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '15',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Databases\\": [\\n    {\\n      \\"ActiveAddressType\\": \\"Private\\",\\n      \\"Comment\\": \\"cpp\\",\\n      \\"DatabaseId\\": \\"26\\",\\n      \\"DatabaseName\\": \\"zDatabase\\",\\n      \\"DatabasePort\\": 3306,\\n      \\"DatabasePrivateAddress\\": \\"rm-b******9b.mysql.rds.aliyuncs.com\\",\\n      \\"DatabasePublicAddress\\": \\"rm-uf******p45.mysql.rds.aliyuncs.com\\",\\n      \\"DatabaseType\\": \\"MySQL\\",\\n      \\"Source\\": \\"Local\\",\\n      \\"SourceInstanceId\\": \\"i-wz9225bhipya******\\",\\n      \\"SourceInstanceRegionId\\": \\"cn-shanghai\\",\\n      \\"SourceInstanceState\\": \\"Normal\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"TotalCount\\": 15\\n}","type":"json"}]',
      'title' => '获取当前RAM用户已授权的数据库列表',
      'summary' => '获取当前RAM用户已授权的数据库列表。',
    ),
    'ListOperationHosts' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-09k22avmw0q',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时，当前页的页码。默认值为1。',
            'type' => 'string',
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
            'description' => '指定分页查询时，每页显示的数据最大条数。  
PageSize参数最大取值为100。每页默认显示的数据条数为20条，PageSize参数值为空时，将默认返回20条数据。
> 建议PageSize取值不要为空。',
            'type' => 'string',
            'required' => false,
            'example' => '20',
          ),
        ),
        4 => 
        array (
          'name' => 'OSType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的主机的操作系统。取值：
- **Linux**
- **Windows**',
            'type' => 'string',
            'required' => false,
            'example' => 'Linux',
          ),
        ),
        5 => 
        array (
          'name' => 'HostName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的主机名称。不支持模糊查询，只支持精确查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'abc',
          ),
        ),
        6 => 
        array (
          'name' => 'HostAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的主机地址，可使用域名或IP地址。不支持模糊查询，只支持精确查询。',
            'type' => 'string',
            'required' => false,
            'example' => '10.162.172.132',
          ),
        ),
        7 => 
        array (
          'name' => 'Source',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询主机的来源。取值：
- **Local**：本地主机
- **Ecs**：ECS实例',
            'type' => 'string',
            'required' => false,
            'example' => 'Local',
          ),
        ),
        8 => 
        array (
          'name' => 'SourceInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECS实例ID。精确搜索。',
            'type' => 'string',
            'required' => false,
            'example' => 'i-bp19ienyt0yax748****',
          ),
        ),
        9 => 
        array (
          'name' => 'SourceInstanceState',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的主机状态。取值：
 - **Normal**：正常
- **Release**：已释放',
            'type' => 'string',
            'required' => false,
            'example' => 'Normal',
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
              'Hosts' => 
              array (
                'description' => '查询到的主机列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ActiveAddressType' => 
                    array (
                      'description' => '主机地址类型。
- **Public** ：公网地址有效
- **Private** ：私网地址有效',
                      'type' => 'string',
                      'example' => 'Public',
                    ),
                    'Comment' => 
                    array (
                      'description' => '主机的备注信息。',
                      'type' => 'string',
                      'example' => 'comment',
                    ),
                    'HostId' => 
                    array (
                      'description' => '主机ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'HostName' => 
                    array (
                      'description' => '主机名称。',
                      'type' => 'string',
                      'example' => 'host1',
                    ),
                    'HostPrivateAddress' => 
                    array (
                      'description' => '主机的私网地址。',
                      'type' => 'string',
                      'example' => '192.168.XX.XX',
                    ),
                    'HostPublicAddress' => 
                    array (
                      'description' => '主机的公网地址。',
                      'type' => 'string',
                      'example' => '10.158.XX.XX',
                    ),
                    'OSType' => 
                    array (
                      'description' => '主机的操作系统。
- **Linux**
- **Windows**',
                      'type' => 'string',
                      'example' => 'Linux',
                    ),
                    'Source' => 
                    array (
                      'description' => '主机的来源。
- **Local**：本地主机
- **Ecs**：ECS实例',
                      'type' => 'string',
                      'example' => 'Local',
                    ),
                    'SourceInstanceId' => 
                    array (
                      'description' => 'ECS实例ID。',
                      'type' => 'string',
                      'example' => 'i-bp19ienyt0yax748****',
                    ),
                    'SourceInstanceState' => 
                    array (
                      'description' => '主机状态。
 - **Normal**   ：正常
- **Release**： 已释放',
                      'type' => 'string',
                      'example' => 'Normal',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '4F6C075F-FC86-476E-943B-097BD4E12948',
              ),
              'TotalCount' => 
              array (
                'description' => '查询到的主机总数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '5',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Hosts\\": [\\n    {\\n      \\"ActiveAddressType\\": \\"Public\\",\\n      \\"Comment\\": \\"comment\\",\\n      \\"HostId\\": \\"1\\",\\n      \\"HostName\\": \\"host1\\",\\n      \\"HostPrivateAddress\\": \\"192.168.XX.XX\\",\\n      \\"HostPublicAddress\\": \\"10.158.XX.XX\\",\\n      \\"OSType\\": \\"Linux\\",\\n      \\"Source\\": \\"Local\\",\\n      \\"SourceInstanceId\\": \\"i-bp19ienyt0yax748****\\",\\n      \\"SourceInstanceState\\": \\"Normal\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"4F6C075F-FC86-476E-943B-097BD4E12948\\",\\n  \\"TotalCount\\": 5\\n}","type":"json"}]',
      'title' => '获取当前RAM用户已授权的主机列表',
      'summary' => '获取当前RAM用户已授权的主机列表。',
    ),
    'ListOperationHostAccounts' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。

> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'HostId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询主机账户的主机ID。
> 您可以调用[ListOperationHosts](~~2758857~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时，当前页的页码。默认值为**1**。',
            'type' => 'string',
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
            'description' => '指定分页查询时，每页显示的数据最大条数。  
PageSize参数最大取值为100。每页默认显示的数据条数为20条，PageSize参数值为空时，将默认返回20条数据。
> 建议PageSize取值不要为空。',
            'type' => 'string',
            'required' => false,
            'example' => '20',
          ),
        ),
        5 => 
        array (
          'name' => 'HostAccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的主机账户名称。仅支持精确查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'root',
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
              'HostAccounts' => 
              array (
                'description' => '查询到的主机账户列表。

',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'HasPassword' => 
                    array (
                      'description' => '当前主机账户是否设置了密码。

- **true**：已设置密码。
- **false**：未设置密码。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'HostAccountId' => 
                    array (
                      'description' => '主机账户ID。	',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'HostAccountName' => 
                    array (
                      'description' => '主机账户名称。',
                      'type' => 'string',
                      'example' => 'root',
                    ),
                    'HostId' => 
                    array (
                      'description' => '主机ID。',
                      'type' => 'string',
                      'example' => '１',
                    ),
                    'HostShareKeyId' => 
                    array (
                      'description' => '主机共享密钥ID。	',
                      'type' => 'string',
                      'example' => '3',
                    ),
                    'PrivateKeyFingerprint' => 
                    array (
                      'description' => '主机账户的私钥指纹信息。',
                      'type' => 'string',
                      'example' => 'fe:ca:37:42:30:00:9d:95:e6:73:e5:b0:32:0a:**:**',
                    ),
                    'ProtocolName' => 
                    array (
                      'description' => '主机账户的协议名称。
- **SSH**
- **RDP**',
                      'type' => 'string',
                      'example' => 'SSH',
                    ),
                    'SSHConfig' => 
                    array (
                      'description' => 'SSH账户运维权限。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'EnableSFTPChannel' => 
                        array (
                          'description' => '该账户是否开启SFTP通道。',
                          'type' => 'boolean',
                        ),
                        'EnableSSHChannel' => 
                        array (
                          'description' => '该账户是否开启SSH通道。',
                          'type' => 'boolean',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'TotalCount' => 
              array (
                'description' => '查询到的主机账户总数量。',
                'type' => 'integer',
                'format' => 'int64',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"HostAccounts\\": [\\n    {\\n      \\"HasPassword\\": true,\\n      \\"HostAccountId\\": \\"1\\",\\n      \\"HostAccountName\\": \\"root\\",\\n      \\"HostId\\": \\"１\\",\\n      \\"HostShareKeyId\\": \\"3\\",\\n      \\"PrivateKeyFingerprint\\": \\"fe:ca:37:42:30:00:9d:95:e6:73:e5:b0:32:0a:**:**\\",\\n      \\"ProtocolName\\": \\"SSH\\",\\n      \\"SSHConfig\\": {\\n        \\"EnableSFTPChannel\\": true,\\n        \\"EnableSSHChannel\\": true\\n      }\\n    }\\n  ],\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"TotalCount\\": 1\\n}","type":"json"}]',
      'title' => '获取当前RAM用户已授权的主机账户列表',
      'summary' => '获取当前RAM用户已授权的主机账户列表。',
    ),
    'ListOperationDatabaseAccounts' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机实例的ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-2r42t9cvf0i',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的地域ID。
> 地域ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
          ),
        ),
        2 => 
        array (
          'name' => 'DatabaseId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库实例ID。
> 您可以调用[ListOperationDatabases](~~2758856~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '56',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时，当前页的页码。默认值为**1**。',
            'type' => 'string',
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
            'description' => '指定分页查询时，每页显示的数据最大条数。
<br>PageSize参数最大取值为100。每页默认显示的数据条数为20条，PageSize参数值为空时，将默认返回20条数据。

> 建议PageSize取值不要为空。',
            'type' => 'string',
            'required' => false,
            'example' => '20',
          ),
        ),
        5 => 
        array (
          'name' => 'DatabaseAccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号名称。精确匹配。',
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
              'DatabaseAccounts' => 
              array (
                'description' => '查询到的数据库账户列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '响应数据。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DBName' => 
                    array (
                      'description' => 'PostgreSQL和Oracle对应的数据库名。',
                      'type' => 'string',
                      'example' => 'xe',
                    ),
                    'DatabaseAccountId' => 
                    array (
                      'description' => '数据库账号ID。',
                      'type' => 'string',
                      'example' => '3',
                    ),
                    'DatabaseAccountName' => 
                    array (
                      'description' => '数据库账号名称。',
                      'type' => 'string',
                      'example' => 'system',
                    ),
                    'DatabaseId' => 
                    array (
                      'description' => '数据库实例ID。',
                      'type' => 'string',
                      'example' => '2',
                    ),
                    'HasPassword' => 
                    array (
                      'description' => '数据库主机账户是否设置密码。',
                      'type' => 'string',
                      'example' => 'true',
                    ),
                    'LoginAttribute' => 
                    array (
                      'description' => '登录属性，Oracle类型数据库有返回值：

- **SERVICENAME**
- **SID**',
                      'type' => 'string',
                      'example' => 'SID',
                    ),
                    'ProtocolName' => 
                    array (
                      'description' => '数据库账户的协议名称。',
                      'type' => 'string',
                      'example' => 'MySQL',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'TotalCount' => 
              array (
                'description' => '查询到的可运维数据库账户总数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '5',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"DatabaseAccounts\\": [\\n    {\\n      \\"DBName\\": \\"xe\\",\\n      \\"DatabaseAccountId\\": \\"3\\",\\n      \\"DatabaseAccountName\\": \\"system\\",\\n      \\"DatabaseId\\": \\"2\\",\\n      \\"HasPassword\\": \\"true\\",\\n      \\"LoginAttribute\\": \\"SID\\",\\n      \\"ProtocolName\\": \\"MySQL\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"TotalCount\\": 5\\n}","type":"json"}]',
      'title' => '获取当前RAM用户已授权的数据库账户列表',
      'summary' => '获取当前RAM用户已授权的数据库账户列表。',
    ),
    'GenerateAssetOperationToken' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要申请运维令牌操作所在堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的地域ID。
> 地域ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'AssetType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要申请令牌的资产类型。取值：
- **Host**：主机。
- **Database**：数据库。',
            'type' => 'string',
            'required' => true,
            'example' => 'Host',
          ),
        ),
        3 => 
        array (
          'name' => 'AssetId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要申请运维令牌的资产ID。',
            'type' => 'string',
            'required' => true,
            'example' => '11',
          ),
        ),
        4 => 
        array (
          'name' => 'AssetAccountId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '申请运维令牌的资产账户ID。
> AssetAccountId和AssetAccountName需要至少指定一个，当同时指定时，优先使用AssetAccountId',
            'type' => 'string',
            'required' => false,
            'example' => '2',
          ),
        ),
        5 => 
        array (
          'name' => 'AssetAccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主机账号名，当为自定义账号时，填写真实账户名。

> 当AssetAccountId和AssetAccountName同时指定时，优先使用AssetAccountId',
            'type' => 'string',
            'required' => false,
            'example' => 'root',
          ),
        ),
        6 => 
        array (
          'name' => 'AssetAccountPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'base64后的密码。当为自定义账号申请运维令牌时必填,',
            'type' => 'string',
            'required' => false,
            'example' => 'dGVzdHBhc3N3b3Jk',
          ),
        ),
        7 => 
        array (
          'name' => 'AssetAccountProtocolName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协议名称。取值：

- SSH
- RDP
- Oracle
- PostgreSQL
- MySQL
- SQLServer',
            'type' => 'string',
            'required' => false,
            'example' => 'SSH',
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
              'AssetOperationToken' => 
              array (
                'description' => '响应数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'CountLeft' => 
                  array (
                    'description' => '运维令牌剩余可使用的次数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'ExpireTime' => 
                  array (
                    'description' => '运维令牌过期时间。时间戳格式。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1709110797',
                  ),
                  'HasCountLimit' => 
                  array (
                    'description' => '是否有使用次数限制.',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'MaxRenewCount' => 
                  array (
                    'description' => '最大续期次数，0表示不可续期。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'RenewCount' => 
                  array (
                    'description' => '已经续期的次数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'Token' => 
                  array (
                    'description' => '申请的运维令牌。',
                    'type' => 'string',
                    'example' => 'NmYyMmEzNmMwYzljNGY******',
                  ),
                  'TokenId' => 
                  array (
                    'description' => '运维令牌ID。',
                    'type' => 'string',
                    'example' => '1',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AssetOperationToken\\": {\\n    \\"CountLeft\\": 1,\\n    \\"ExpireTime\\": 1709110797,\\n    \\"HasCountLimit\\": true,\\n    \\"MaxRenewCount\\": 10,\\n    \\"RenewCount\\": 1,\\n    \\"Token\\": \\"NmYyMmEzNmMwYzljNGY******\\",\\n    \\"TokenId\\": \\"1\\"\\n  },\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\"\\n}","type":"json"}]',
      'title' => '申请运维令牌',
      'summary' => '您可以通过该接口申请主机或数据库运维令牌，并通过运维令牌运维资产。',
    ),
    'RenewAssetOperationToken' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。

> 可通过调用[DescribeInstances](~~153281~~)接口获取堡垒机实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'TokenId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要续期的运维令牌ID。
> 您可以调用[GenerateAssetOperationToken](~~2758861~~)接口获取该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'NmYyMmEzNmMwYzljNGYxMjh******',
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
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\"\\n}","type":"json"}]',
      'title' => '续期运维令牌',
      'summary' => '您可以通过该接口续期运维令牌，单次可将运维令牌续期1小时。',
    ),
    'CreateRule' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。
> 可通过调用DescribeInstances接口获取堡垒机实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-5yd2ymfsa0e',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的地域ID。
> 地域ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'RuleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权规则名称。最大128字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'rule',
          ),
        ),
        3 => 
        array (
          'name' => 'Comment',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权规则备注。最大500字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'comment',
          ),
        ),
        4 => 
        array (
          'name' => 'EffectiveStartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权规则有效期开始时间（秒，时间戳格式）',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1669630029',
          ),
        ),
        5 => 
        array (
          'name' => 'EffectiveEndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权规则有效期结束时间（秒，时间戳格式）',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1672502400',
          ),
        ),
        6 => 
        array (
          'name' => 'UserIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '用户ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '用户ID数组。',
              'type' => 'string',
              'required' => false,
              'example' => '["1"]',
            ),
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'UserGroupIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '用户组ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '用户组ID数组。',
              'type' => 'string',
              'required' => false,
              'example' => '["1"]',
            ),
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'Hosts',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '主机ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '要授权的主机ID与主机账户ID数组。',
              'type' => 'object',
              'properties' => 
              array (
                'HostId' => 
                array (
                  'description' => '主机ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '[{"HostId":"1"}]',
                ),
                'HostAccountIds' => 
                array (
                  'description' => '主机账户ID。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '主机账户ID数组。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '[{"HostId":"1","HostAccountIds":["1"]}]',
                  ),
                  'required' => false,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        9 => 
        array (
          'name' => 'Databases',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '数据库信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '要授权的数据库实例ID与数据库账户ID数组。',
              'type' => 'object',
              'properties' => 
              array (
                'DatabaseId' => 
                array (
                  'description' => '数据库实例ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '[
    {
        "DatabaseId": "1"
    }
]',
                ),
                'DatabaseAccountIds' => 
                array (
                  'description' => '数据库账户ID。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '数据库账户ID数组。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '[
    {
        "DatabaseId": "1",
        "DatabaseAccountIds": ["1", "2"] 
    }
]',
                  ),
                  'required' => false,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        10 => 
        array (
          'name' => 'HostGroups',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '要授权的资产组信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '要授权的资产组数组。',
              'type' => 'object',
              'properties' => 
              array (
                'HostGroupId' => 
                array (
                  'description' => '资产组ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '[{"HostGroupId":"1"}]',
                ),
                'HostAccountNames' => 
                array (
                  'description' => '资产账户名。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '资产账户名。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '[{"HostGroupId":"1","HostAccountNames":["root"]}]',
                  ),
                  'required' => false,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'BFA818E3-0A53-51F4-8DB5-AF2A62A6D042',
              ),
              'RuleId' => 
              array (
                'description' => '授权规则ID。',
                'type' => 'string',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'RuleAlreadyExists',
            'errorMessage' => 'The rule already exists.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BFA818E3-0A53-51F4-8DB5-AF2A62A6D042\\",\\n  \\"RuleId\\": \\"1\\"\\n}","type":"json"}]',
      'title' => '创建授权规则',
      'summary' => '创建授权规则。',
      'requestParamsDescription' => '### Hosts 数组
#### Host结构
| 字段 | 类型 | 描述 |
|---|---|---|
| HostId | string | 主机ID |
| HostAccountIds | array[string] | 主机账号ID数组 |

### HostGroups 数组
#### HostGroup结构
| 字段 | 类型 | 描述 |
|---|---|---|
| HostGroupId | string | 主机组ID |
| HostAccountNames | array[string] | 主机账号名数组 |

#### AssetGroup结构
| 字段 | 类型 | 描述 |
|---|---|---|
| AssetGroupId | string | 资产组ID |
| AssetAccountNames | array[string] | 资产账号名数组 |',
    ),
    'ModifyRule' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要修改的授权规则所在堡垒机实例的ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-zmb2y9ydw08',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要修改授权规则所在的堡垒机的地域ID。
> 地域ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要修改的授权规则ID。',
            'type' => 'string',
            'required' => true,
            'example' => '68',
          ),
        ),
        3 => 
        array (
          'name' => 'RuleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改后的授权规则名称。长度为1-128个字符，不能以特殊字符开头，只可包含特殊字符中的\'.\'、\'_\'、\'-\'、\'以及空格。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        4 => 
        array (
          'name' => 'Comment',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定修改后授权规则的备注信息，最多支持500字符。',
            'type' => 'string',
            'required' => false,
            'example' => '测试',
          ),
        ),
        5 => 
        array (
          'name' => 'EffectiveStartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改后授权规则有效期开始时间（秒，时间戳格式）',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1669630029',
          ),
        ),
        6 => 
        array (
          'name' => 'EffectiveEndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改后授权规则有效期结束时间（秒，时间戳格式）',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1672502400',
          ),
        ),
        7 => 
        array (
          'name' => 'UserIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '修改后授权规则关联的用户ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '修改后授权规则关联的用户ID列表。',
              'type' => 'string',
              'required' => false,
              'example' => '["1"]',
            ),
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'UserGroupIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '修改后授权规则关联的用户组ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '修改后授权规则关联的用户组ID列表。',
              'type' => 'string',
              'required' => false,
              'example' => '["1"]',
            ),
            'required' => false,
          ),
        ),
        9 => 
        array (
          'name' => 'Hosts',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '修改后授权规则关联的主机ID与主机账户ID数组。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'HostId' => 
                array (
                  'description' => '主机ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '[{"HostId":"1"}]',
                ),
                'HostAccountIds' => 
                array (
                  'description' => '主机账户ID列表。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '主机账户ID列表。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '[{"HostId":"1","HostAccountIds":["1"]}]',
                  ),
                  'required' => false,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        10 => 
        array (
          'name' => 'Databases',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '修改后授权的数据库实例和数据库账户列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'DatabaseId' => 
                array (
                  'description' => '数据库实例ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '[
    {
        "DatabaseId": "1"
    }
]',
                ),
                'DatabaseAccountIds' => 
                array (
                  'description' => '数据库账户ID列表。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '数据库账户ID列表。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '[
    {
        "DatabaseId": "1",
        "DatabaseAccountIds": ["1", "2"] 
    }
]',
                  ),
                  'required' => false,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        11 => 
        array (
          'name' => 'HostGroups',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '修改后授权的资产组和账户列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'HostGroupId' => 
                array (
                  'description' => '资产组ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '[{"HostGroupId":"1"}]
',
                ),
                'HostAccountNames' => 
                array (
                  'description' => '资产账户名列表。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '资产账户名列表。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '[{"HostGroupId":"1","HostAccountNames":["root"]}]
',
                  ),
                  'required' => false,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '67EB57AD-5C83-537B-B2A1-6082798965F0',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'RuleAlreadyExists',
            'errorMessage' => 'The rule already exists.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'RuleNotFound',
            'errorMessage' => 'The rule is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"67EB57AD-5C83-537B-B2A1-6082798965F0\\"\\n}","type":"json"}]',
      'title' => '修改授权规则基本信息',
      'summary' => '修改授权规则基本信息。',
    ),
    'GetRule' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机实例的ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-wwo35essw07',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
        2 => 
        array (
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的授权规则ID。',
            'type' => 'string',
            'required' => true,
            'example' => '18',
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
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'Rule' => 
              array (
                'description' => '授权规则信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Comment' => 
                  array (
                    'description' => '授权规则备注。',
                    'type' => 'string',
                    'example' => 'comment',
                  ),
                  'Databases' => 
                  array (
                    'description' => '已授权的数据库信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DatabaseAccounts' => 
                        array (
                          'description' => '已授权数据库信息。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'DatabaseAccountId' => 
                              array (
                                'description' => '已授权的数据库账户ID。',
                                'type' => 'string',
                                'example' => '5',
                              ),
                            ),
                          ),
                        ),
                        'DatabaseId' => 
                        array (
                          'description' => '已授权的数据库实例ID。',
                          'type' => 'string',
                          'example' => '2',
                        ),
                      ),
                    ),
                  ),
                  'EffectiveEndTime' => 
                  array (
                    'description' => '授权规则有效期结束时间（秒，时间戳格式）',
                    'type' => 'string',
                    'example' => '1698720972',
                  ),
                  'EffectiveStartTime' => 
                  array (
                    'description' => '授权规则有效期开始时间（秒，时间戳格式）',
                    'type' => 'string',
                    'example' => '1687140883',
                  ),
                  'HostGroups' => 
                  array (
                    'description' => '已授权的资产组列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'HostAccountNames' => 
                        array (
                          'description' => '已授权资产账户信息。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '资产组中已授权的账户名。',
                            'type' => 'string',
                            'example' => 'root',
                          ),
                        ),
                        'HostGroupId' => 
                        array (
                          'description' => '已授权的资产组ID。',
                          'type' => 'string',
                          'example' => '7',
                        ),
                      ),
                    ),
                  ),
                  'Hosts' => 
                  array (
                    'description' => '已授权的主机信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'HostAccounts' => 
                        array (
                          'description' => '已授权的主机账户列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'HostAccountId' => 
                              array (
                                'description' => '已授权的主机账户ID。',
                                'type' => 'string',
                                'example' => '9',
                              ),
                            ),
                          ),
                        ),
                        'HostId' => 
                        array (
                          'description' => '已授权的主机ID。',
                          'type' => 'string',
                          'example' => '52',
                        ),
                      ),
                    ),
                  ),
                  'RuleId' => 
                  array (
                    'description' => '授权规则ID。',
                    'type' => 'string',
                    'example' => '3',
                  ),
                  'RuleName' => 
                  array (
                    'description' => '授权规则名称。',
                    'type' => 'string',
                    'example' => 'rule',
                  ),
                  'UserGroups' => 
                  array (
                    'description' => '已授权的用户组列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'UserGroupId' => 
                        array (
                          'description' => '已授权的用户组ID。',
                          'type' => 'string',
                          'example' => '2',
                        ),
                      ),
                    ),
                  ),
                  'Users' => 
                  array (
                    'description' => '已授权的用户列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'UserId' => 
                        array (
                          'description' => '已授权的用户ID。',
                          'type' => 'string',
                          'example' => '3',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'RuleNotFound',
            'errorMessage' => 'The rule is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"Rule\\": {\\n    \\"Comment\\": \\"comment\\",\\n    \\"Databases\\": [\\n      {\\n        \\"DatabaseAccounts\\": [\\n          {\\n            \\"DatabaseAccountId\\": \\"5\\"\\n          }\\n        ],\\n        \\"DatabaseId\\": \\"2\\"\\n      }\\n    ],\\n    \\"EffectiveEndTime\\": \\"1698720972\\",\\n    \\"EffectiveStartTime\\": \\"1687140883\\",\\n    \\"HostGroups\\": [\\n      {\\n        \\"HostAccountNames\\": [\\n          \\"root\\"\\n        ],\\n        \\"HostGroupId\\": \\"7\\"\\n      }\\n    ],\\n    \\"Hosts\\": [\\n      {\\n        \\"HostAccounts\\": [\\n          {\\n            \\"HostAccountId\\": \\"9\\"\\n          }\\n        ],\\n        \\"HostId\\": \\"52\\"\\n      }\\n    ],\\n    \\"RuleId\\": \\"3\\",\\n    \\"RuleName\\": \\"rule\\",\\n    \\"UserGroups\\": [\\n      {\\n        \\"UserGroupId\\": \\"2\\"\\n      }\\n    ],\\n    \\"Users\\": [\\n      {\\n        \\"UserId\\": \\"3\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取指定授权规则详情',
      'summary' => '获取指定授权规则详情。',
    ),
    'ListRules' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-5yd34ol020a',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的区域ID。
> Region ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时，当前页的页码。默认值为1。',
            'type' => 'string',
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
            'description' => '指定分页查询时，每页显示的数据最大条数。  
PageSize参数最大取值为100。每页默认显示的数据条数为20条，PageSize参数值为空时，将默认返回20条数据。
> 建议PageSize取值不要为空。',
            'type' => 'string',
            'required' => false,
            'example' => '20',
          ),
        ),
        4 => 
        array (
          'name' => 'RuleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的授权规则名称。仅支持精确查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'rule',
          ),
        ),
        5 => 
        array (
          'name' => 'RuleState',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的授权规则状态
- **Enabled**：正常
- **Disabled**：已禁用',
            'type' => 'string',
            'required' => false,
            'example' => 'Enabled',
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
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'Rules' => 
              array (
                'description' => '查询到的授权规则列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Comment' => 
                    array (
                      'description' => '授权规则的备注信息。',
                      'type' => 'string',
                      'example' => 'comment',
                    ),
                    'EffectiveEndTime' => 
                    array (
                      'description' => '授权规则有效期结束时间（秒，时间戳格式）',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1709258400',
                    ),
                    'EffectiveStartTime' => 
                    array (
                      'description' => '授权规则有效期开始时间（秒，时间戳格式）',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1685499134',
                    ),
                    'RuleId' => 
                    array (
                      'description' => '授权规则ID。',
                      'type' => 'string',
                      'example' => '13',
                    ),
                    'RuleName' => 
                    array (
                      'description' => '授权规则名称。',
                      'type' => 'string',
                      'example' => 'rule',
                    ),
                    'RuleState' => 
                    array (
                      'description' => '授权规则状态
- **Enabled**：正常
- **Disabled**：已禁用',
                      'type' => 'string',
                      'example' => 'Enabled',
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'description' => '查询到的授权规则总数量。',
                'type' => 'integer',
                'format' => 'int64',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"Rules\\": [\\n    {\\n      \\"Comment\\": \\"comment\\",\\n      \\"EffectiveEndTime\\": 1709258400,\\n      \\"EffectiveStartTime\\": 1685499134,\\n      \\"RuleId\\": \\"13\\",\\n      \\"RuleName\\": \\"rule\\",\\n      \\"RuleState\\": \\"Enabled\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 1\\n}","type":"json"}]',
      'title' => '获取指定堡垒机下授权规则列表',
      'summary' => '获取指定堡垒机下授权规则列表。',
    ),
    'EnableRule' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机实例的ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-78v1ghxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要启用的授权规则ID。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
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
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '4F6C075F-FC86-476E-943B-097BD4E12948',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'RuleNotFound',
            'errorMessage' => 'The rule is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4F6C075F-FC86-476E-943B-097BD4E12948\\"\\n}","type":"json"}]',
      'title' => '启用授权规则',
      'summary' => '启用授权规则。',
    ),
    'DisableRule' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-78v1gh****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要禁用的授权规则ID。',
            'type' => 'string',
            'required' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '98DBE5C2-7D7A-5393-9E5A-71074336D33B',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'RuleNotFound',
            'errorMessage' => 'The rule is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"98DBE5C2-7D7A-5393-9E5A-71074336D33B\\"\\n}","type":"json"}]',
      'title' => '禁用授权规则',
      'summary' => '禁用授权规则。',
    ),
    'DeleteRule' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要删除的授权规则所在堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要删除授权规则的堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要删除的授权规则ID。',
            'type' => 'string',
            'required' => true,
            'example' => '5',
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
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'RuleNotFound',
            'errorMessage' => 'The rule is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\"\\n}","type":"json"}]',
      'title' => '删除单个授权规则',
      'summary' => '删除单个授权规则。',
    ),
    'CreatePolicy' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要新建控制策略的堡垒机实例的ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-20p364c1w0g',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定需创建控制策略所在的堡垒机的区域id。
>区域id和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
          ),
        ),
        2 => 
        array (
          'name' => 'PolicyName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定控制策略名称。最大128字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'policytest',
          ),
        ),
        3 => 
        array (
          'name' => 'Comment',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '控制策略的备注。最大500字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'comment',
          ),
        ),
        4 => 
        array (
          'name' => 'Priority',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '控制策略的优先级，1-100，数字越小优先级越高。默认 1',
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
            'type' => 'object',
            'properties' => 
            array (
              'PolicyId' => 
              array (
                'description' => '控制策略ID。',
                'type' => 'string',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '7E68165E-1191-5CC2-B54B-5EF7390A5400',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'PolicyAlreadyExists',
            'errorMessage' => 'The policy already exists.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PolicyId\\": \\"1\\",\\n  \\"RequestId\\": \\"7E68165E-1191-5CC2-B54B-5EF7390A5400\\"\\n}","type":"json"}]',
      'title' => '创建控制策略',
      'summary' => '创建控制策略。',
    ),
    'ModifyPolicy' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要修改的控制策略所在堡垒机的实例id。
>您可以调用[describeinstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-09k1u8mv501',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要修改的控制策略所在堡垒机的地域ID。
> 地域ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'PolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要修改的控制策略的ID。',
            'type' => 'string',
            'required' => true,
            'example' => '7',
          ),
        ),
        3 => 
        array (
          'name' => 'PolicyName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改后的控制策略名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        4 => 
        array (
          'name' => 'Comment',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改后的控制策略备注。',
            'type' => 'string',
            'required' => false,
            'example' => '测试',
          ),
        ),
        5 => 
        array (
          'name' => 'Priority',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定修改后的控制策略的优先级，1-100，数字越小优先级越高。默认 1。',
            'type' => 'string',
            'required' => false,
            'example' => '3',
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
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'A34F9731-A4EA-5D1D-8445-BAEF782BFFE6',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'PolicyAlreadyExists',
            'errorMessage' => 'The policy already exists.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'PolicyNotFound',
            'errorMessage' => 'The policy is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A34F9731-A4EA-5D1D-8445-BAEF782BFFE6\\"\\n}","type":"json"}]',
      'title' => '修改控制策略基本信息',
      'summary' => '修改控制策略基本信息。',
    ),
    'GetPolicy' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的控制策略所在堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-zvp2d3syb0g',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的控制策略所在堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'PolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的控制策略ID。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
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
              'Policy' => 
              array (
                'description' => '控制策略详细信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'AccessTimeRangeConfig' => 
                  array (
                    'description' => '登录时段限制详情。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'EffectiveTime' => 
                      array (
                        'description' => '允许登录的时段详情。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Days' => 
                            array (
                              'description' => '允许登录的日期。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '允许登录的星期日期。

- **1**：周一
- **2**：周二
- **3**：周三
- **4**：周四
- **5**：周五
- **6**：周六
- **7**：周日',
                                'type' => 'string',
                                'example' => '[2]',
                              ),
                            ),
                            'Hours' => 
                            array (
                              'description' => '允许登录的时间。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '每天允许登录的时间。取值：

- **0**：0:00到1:00。
- **1**：1:00到2:00。
- **2**：2:00到3:00。
- **3**：3:00到4:00。
- **4**：4:00到5:00。
- **5**：5:00到6:00。
- **6**：6:00到7:00。
- **7**：7:00到8:00。
- **8**：8:00到9:00。
- **9**：9:00到10:00。
- **10**：10:00到11:00。
- **11**：11:00到12:00。
- **12**：12:00到13:00。
- **13**：13:00到14:00。
- **14**：14:00到15:00。
- **15**：15:00到16:00。
- **16**：16:00到17:00。
- **17**：17:00到18:00。
- **18**：18:00到19:00。
- **19**：19:00到20:00。
- **20**：20:00到21:00。
- **21**：21:00到22:00。
- **22**：22:00到23:00。
- **23**：23:00到0:00。',
                                'type' => 'string',
                                'example' => '[0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23]',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'CommandConfig' => 
                  array (
                    'description' => '命令策略详情。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Approval' => 
                      array (
                        'description' => '命令审批配置详情。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Commands' => 
                          array (
                            'description' => '命令列表数组。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '已配置需要审批的命令详情。',
                              'type' => 'string',
                              'example' => 'ls',
                            ),
                          ),
                        ),
                      ),
                      'Deny' => 
                      array (
                        'description' => '命令控制配置详情。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'AclType' => 
                          array (
                            'description' => '命令控制类型。取值：

- white：白名单模式。
- black：黑名单模式。',
                            'type' => 'string',
                            'example' => 'black',
                          ),
                          'Commands' => 
                          array (
                            'description' => '命令列表数组。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '命令详情。',
                              'type' => 'string',
                              'example' => 'ls',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'Comment' => 
                  array (
                    'description' => '控制策略的备注。',
                    'type' => 'string',
                    'example' => 'comment',
                  ),
                  'IPAclConfig' => 
                  array (
                    'description' => '来源IP限制配置详情。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'AclType' => 
                      array (
                        'description' => '来源IP限制模式。取值：

- white：白名单模式。
- black：黑名单模式。',
                        'type' => 'string',
                        'example' => 'black',
                      ),
                      'IPs' => 
                      array (
                        'description' => '限制登录的IP信息。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '限制的IP列表。',
                          'type' => 'string',
                          'example' => '[10.10.**.**]',
                        ),
                      ),
                    ),
                  ),
                  'PolicyName' => 
                  array (
                    'description' => '控制策略名称。',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'PolicyId' => 
                  array (
                    'description' => '控制策略ID。',
                    'type' => 'string',
                    'example' => '3',
                  ),
                  'Priority' => 
                  array (
                    'description' => '控制策略的优先级，数字越小优先级越高。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'ProtocolConfig' => 
                  array (
                    'description' => '协议控制详情。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'RDP' => 
                      array (
                        'description' => 'RDP选项配置详情。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ClipboardDownload' => 
                          array (
                            'description' => '粘贴板下载配置。取值：

- Enable：启用
- Disable：禁用',
                            'type' => 'string',
                            'example' => 'Enable',
                          ),
                          'ClipboardUpload' => 
                          array (
                            'description' => '粘贴板上传配置。取值：

- Enable：启用
- Disable：禁用',
                            'type' => 'string',
                            'example' => 'Enable',
                          ),
                          'DiskRedirection' => 
                          array (
                            'description' => '驱动器/打印机映射配置。取值：

- Enable：启用
- Disable：禁用',
                            'type' => 'string',
                            'example' => 'Enable',
                          ),
                          'RecordKeyboard' => 
                          array (
                            'description' => '键盘记录配置。取值：

- Enable：启用
- Disable：禁用',
                            'type' => 'string',
                            'example' => 'Enable',
                          ),
                        ),
                      ),
                      'SSH' => 
                      array (
                        'description' => 'SSH和SFTP选项配置详情。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ExecCommand' => 
                          array (
                            'description' => '远程执行命令配置。取值：

- Enable：启用
- Disable：禁用',
                            'type' => 'string',
                            'example' => 'Enable',
                          ),
                          'SFTPChannel' => 
                          array (
                            'description' => 'SFTP通道配置。取值：

- Enable：启用
- Disable：禁用',
                            'type' => 'string',
                            'example' => 'Enable',
                          ),
                          'SFTPDownloadFile' => 
                          array (
                            'description' => 'SFTP选项文件下载配置。取值：

- Enable：启用
- Disable：禁用',
                            'type' => 'string',
                            'example' => 'Enable',
                          ),
                          'SFTPMkdir' => 
                          array (
                            'description' => 'SFTP选项创建文件夹配置。取值：

- Enable：启用
- Disable：禁用',
                            'type' => 'string',
                            'example' => 'Enable',
                          ),
                          'SFTPRemoveFile' => 
                          array (
                            'description' => 'SFTP选项删除文件配置。取值：

- Enable：启用
- Disable：禁用',
                            'type' => 'string',
                            'example' => 'Enable',
                          ),
                          'SFTPRenameFile' => 
                          array (
                            'description' => 'SFTP选项文件重命名配置。取值：

- Enable：启用
- Disable：禁用',
                            'type' => 'string',
                            'example' => 'Enable',
                          ),
                          'SFTPRmdir' => 
                          array (
                            'description' => 'SFTP选项删除文件夹配置。取值：

- Enable：启用
- Disable：禁用',
                            'type' => 'string',
                            'example' => 'Enable',
                          ),
                          'SFTPUploadFile' => 
                          array (
                            'description' => 'SFTP选项文件上传配置。取值：

- Enable：启用
- Disable：禁用',
                            'type' => 'string',
                            'example' => 'Enable',
                          ),
                          'SSHChannel' => 
                          array (
                            'description' => 'SSH通道配置。取值：

- Enable：启用
- Disable：禁用',
                            'type' => 'string',
                            'example' => 'Enable',
                          ),
                          'X11Forwarding' => 
                          array (
                            'description' => 'X11转发配置。取值：

- Enable：启用
- Disable：禁用',
                            'type' => 'string',
                            'example' => 'Enable',
                          ),
                        ),
                      ),
                    ),
                  ),
                  'ApprovalConfig' => 
                  array (
                    'description' => '运维审批配置详情。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'SwitchStatus' => 
                      array (
                        'description' => '控制策略中的运维审批配置。取值：

- **On**：开启运维审批
- **Off**：关闭运维审批',
                        'type' => 'string',
                        'example' => 'Off',
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '0D29F2C0-8B4B-5861-9474-F3F23D25594B',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'PolicyNotFound',
            'errorMessage' => 'The policy is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Policy\\": {\\n    \\"AccessTimeRangeConfig\\": {\\n      \\"EffectiveTime\\": [\\n        {\\n          \\"Days\\": [\\n            \\"[2]\\"\\n          ],\\n          \\"Hours\\": [\\n            \\"[0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23]\\"\\n          ]\\n        }\\n      ]\\n    },\\n    \\"CommandConfig\\": {\\n      \\"Approval\\": {\\n        \\"Commands\\": [\\n          \\"ls\\"\\n        ]\\n      },\\n      \\"Deny\\": {\\n        \\"AclType\\": \\"black\\",\\n        \\"Commands\\": [\\n          \\"ls\\"\\n        ]\\n      }\\n    },\\n    \\"Comment\\": \\"comment\\",\\n    \\"IPAclConfig\\": {\\n      \\"AclType\\": \\"black\\",\\n      \\"IPs\\": [\\n        \\"[10.10.**.**]\\"\\n      ]\\n    },\\n    \\"PolicyName\\": \\"test\\",\\n    \\"PolicyId\\": \\"3\\",\\n    \\"Priority\\": 1,\\n    \\"ProtocolConfig\\": {\\n      \\"RDP\\": {\\n        \\"ClipboardDownload\\": \\"Enable\\",\\n        \\"ClipboardUpload\\": \\"Enable\\",\\n        \\"DiskRedirection\\": \\"Enable\\",\\n        \\"RecordKeyboard\\": \\"Enable\\"\\n      },\\n      \\"SSH\\": {\\n        \\"ExecCommand\\": \\"Enable\\",\\n        \\"SFTPChannel\\": \\"Enable\\",\\n        \\"SFTPDownloadFile\\": \\"Enable\\",\\n        \\"SFTPMkdir\\": \\"Enable\\",\\n        \\"SFTPRemoveFile\\": \\"Enable\\",\\n        \\"SFTPRenameFile\\": \\"Enable\\",\\n        \\"SFTPRmdir\\": \\"Enable\\",\\n        \\"SFTPUploadFile\\": \\"Enable\\",\\n        \\"SSHChannel\\": \\"Enable\\",\\n        \\"X11Forwarding\\": \\"Enable\\"\\n      }\\n    },\\n    \\"ApprovalConfig\\": {\\n      \\"SwitchStatus\\": \\"Off\\"\\n    }\\n  },\\n  \\"RequestId\\": \\"0D29F2C0-8B4B-5861-9474-F3F23D25594B\\"\\n}","type":"json"}]',
      'title' => '获取指定控制策略详情',
      'summary' => '获取指定控制策略详情。',
    ),
    'ListPolicies' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-5yd393wzk08',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置从返回结果的第几页开始显示查询结果。默认值为**1**，表示从第1页开始显示。',
            'type' => 'string',
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
            'description' => '指定分页查询时，每页显示的数据最大条数。  
PageSize参数最大取值为100。每页默认显示的数据条数为20条，PageSize参数值为空时，将默认返回20条数据。
> 建议PageSize取值不要为空。',
            'type' => 'string',
            'required' => false,
            'example' => '20',
          ),
        ),
        4 => 
        array (
          'name' => 'PolicyName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的控制策略名称。仅支持精确查询。',
            'type' => 'string',
            'required' => false,
            'example' => '123',
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
              'Policies' => 
              array (
                'description' => '控制策略列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Comment' => 
                    array (
                      'description' => '控制策略备注。',
                      'type' => 'string',
                      'example' => '备注',
                    ),
                    'PolicyId' => 
                    array (
                      'description' => '控制策略ID。',
                      'type' => 'string',
                      'example' => '2',
                    ),
                    'PolicyName' => 
                    array (
                      'description' => '控制策略名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'Priority' => 
                    array (
                      'description' => '控制策略的优先级，数字越小优先级越高。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'TotalCount' => 
              array (
                'description' => '查询到的控制策略总数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Policies\\": [\\n    {\\n      \\"Comment\\": \\"备注\\",\\n      \\"PolicyId\\": \\"2\\",\\n      \\"PolicyName\\": \\"test\\",\\n      \\"Priority\\": 1\\n    }\\n  ],\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"TotalCount\\": 10\\n}","type":"json"}]',
      'title' => '获取控制策略列表',
      'summary' => '获取控制策略列表。',
    ),
    'GetPolicyAssetScope' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'PolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '控制策略ID。

> 您可以调用[ListPolicies](~~2758876~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '7',
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
              'AssetScope' => 
              array (
                'description' => '控制策略生效的资产范围。',
                'type' => 'object',
                'properties' => 
                array (
                  'Databases' => 
                  array (
                    'description' => '控制策略生效的数据库资产列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AccountScopeType' => 
                        array (
                          'description' => '控制策略生效的数据库账户范围。取值：

- **All**：针对数据库中的所有账户生效
- **AccountId**：针对数据库中指定的账户生效',
                          'type' => 'string',
                          'example' => 'AccountId',
                        ),
                        'DatabaseAccountIds' => 
                        array (
                          'description' => '控制策略生效的数据库账户ID列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '数据库账户ID。',
                            'type' => 'string',
                            'example' => '3
',
                          ),
                        ),
                        'DatabaseId' => 
                        array (
                          'description' => '数据库实例ID。',
                          'type' => 'string',
                          'example' => '17',
                        ),
                      ),
                    ),
                  ),
                  'HostGroups' => 
                  array (
                    'description' => '控制策略生效的资产组范围。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AccountNames' => 
                        array (
                          'description' => '控制策略生效的资产账户范围。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '资产账户名。',
                            'type' => 'string',
                            'example' => 'root',
                          ),
                        ),
                        'AccountScopeType' => 
                        array (
                          'description' => '控制策略生效的资产账户范围。取值：

- **All**：针对资产组中的所有账户生效
- **AccountName**：针对资产组中指定的账户生效',
                          'type' => 'string',
                          'example' => 'All',
                        ),
                        'HostGroupId' => 
                        array (
                          'description' => '资产组ID。',
                          'type' => 'string',
                          'example' => '4',
                        ),
                      ),
                    ),
                  ),
                  'Hosts' => 
                  array (
                    'description' => '控制策略生效的主机范围。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AccountScopeType' => 
                        array (
                          'description' => '控制策略生效的主机账户范围。取值：

- **All**：针对主机中的所有账户生效
- **AccountId**：针对主机中指定的账户生效',
                          'type' => 'string',
                          'example' => 'All',
                        ),
                        'HostAccountIds' => 
                        array (
                          'description' => '控制策略生效的主机账户范围。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '主机账户ID列表。',
                            'type' => 'string',
                            'example' => '3',
                          ),
                        ),
                        'HostId' => 
                        array (
                          'description' => '主机ID。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                      ),
                    ),
                  ),
                  'ScopeType' => 
                  array (
                    'description' => '控制策略生效的资产范围。

> - 返回**All**时表示控制策略针对所有资产生效。
> - 返回空值表示策略对指定资产生效，具体生效范围为Databases、HostGroups和Hosts的返回值。',
                    'type' => 'string',
                    'example' => 'All',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AssetScope\\": {\\n    \\"Databases\\": [\\n      {\\n        \\"AccountScopeType\\": \\"AccountId\\",\\n        \\"DatabaseAccountIds\\": [\\n          \\"3\\\\n\\"\\n        ],\\n        \\"DatabaseId\\": \\"17\\"\\n      }\\n    ],\\n    \\"HostGroups\\": [\\n      {\\n        \\"AccountNames\\": [\\n          \\"root\\"\\n        ],\\n        \\"AccountScopeType\\": \\"All\\",\\n        \\"HostGroupId\\": \\"4\\"\\n      }\\n    ],\\n    \\"Hosts\\": [\\n      {\\n        \\"AccountScopeType\\": \\"All\\",\\n        \\"HostAccountIds\\": [\\n          \\"3\\"\\n        ],\\n        \\"HostId\\": \\"1\\"\\n      }\\n    ],\\n    \\"ScopeType\\": \\"All\\"\\n  },\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\"\\n}","type":"json"}]',
      'title' => ' 获取指定控制策略生效资产范围',
      'summary' => '获取指定控制策略生效资产范围。',
    ),
    'SetPolicyProtocolConfig' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'PolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要修改的控制策略的ID。

> 您可以调用[ListPolicies](~~2758876~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '61',
          ),
        ),
        3 => 
        array (
          'name' => 'ProtocolConfig',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '协议控制配置。',
            'type' => 'object',
            'properties' => 
            array (
              'RDP' => 
              array (
                'description' => 'RDP选项配置详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'RecordKeyboard' => 
                  array (
                    'description' => '键盘记录配置。取值：

- Enable：启用
- Disable：禁用
> 不填则默认设置为 Disable。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Enable',
                    'enum' => 
                    array (
                      0 => 'Enable',
                      1 => 'Disable',
                    ),
                  ),
                  'DiskRedirection' => 
                  array (
                    'description' => '驱动器/打印机映射配置。取值：

- Enable：启用
- Disable：禁用
> 不填则默认设置为 Disable。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Enable',
                    'enum' => 
                    array (
                      0 => 'Enable',
                      1 => 'Disable',
                    ),
                  ),
                  'ClipboardDownload' => 
                  array (
                    'description' => '粘贴板下载配置。取值：

- Enable：启用
- Disable：禁用

> 不填则默认设置为 Disable。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Enable',
                    'enum' => 
                    array (
                      0 => 'Enable',
                      1 => 'Disable',
                    ),
                  ),
                  'ClipboardUpload' => 
                  array (
                    'description' => '粘贴板上传配置。取值：

- Enable：启用
- Disable：禁用
> 不填则默认设置为 Disable。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Enable',
                    'enum' => 
                    array (
                      0 => 'Enable',
                      1 => 'Disable',
                    ),
                  ),
                ),
                'required' => false,
              ),
              'SSH' => 
              array (
                'description' => 'SSH和SFTP选项配置详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'X11Forwarding' => 
                  array (
                    'description' => 'X11转发配置。取值：

- Enable：启用
- Disable：禁用
> 不填则默认设置为 Disable。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Enable',
                    'enum' => 
                    array (
                      0 => 'Enable',
                      1 => 'Disable',
                    ),
                  ),
                  'SFTPChannel' => 
                  array (
                    'description' => 'SFTP通道配置。取值：

- Enable：启用
- Disable：禁用

> - 不填则默认设置为 Disable。
> - SSH通道和SFTP通道必须至少有一项为Enable。
> - 如果您为主机账户开启仅开启SFTP权限，请勿在控制策略里为该账户禁用SSH通道及SFTP通道，否则将无法通过堡垒机使用该主机账户访问目标服务器。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Enable',
                    'enum' => 
                    array (
                      0 => 'Enable',
                      1 => 'Disable',
                    ),
                  ),
                  'SSHChannel' => 
                  array (
                    'description' => 'SSH通道配置。取值：

- Enable：启用
- Disable：禁用

> - 不填则默认设置为 Disable。
> - SSH通道和SFTP通道必须至少有一项为Enable。SSH通道设置为Disable后，将无法通过SSH权限登录资产账户，请谨慎配置。
> - 如果您为主机账户开启仅开启SFTP权限，请勿在控制策略里为该账户禁用SSH通道及SFTP通道，否则将无法通过堡垒机使用该主机账户访问目标服务器。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Enable',
                    'enum' => 
                    array (
                      0 => 'Enable',
                      1 => 'Disable',
                    ),
                  ),
                  'ExecCommand' => 
                  array (
                    'description' => '远程执行命令配置。取值：

- Enable：启用
- Disable：禁用
> 不填则默认设置为 Disable。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Enable',
                    'enum' => 
                    array (
                      0 => 'Enable',
                      1 => 'Disable',
                    ),
                  ),
                  'SFTPUploadFile' => 
                  array (
                    'description' => 'SFTP选项文件上传配置。取值：

- Enable：启用
- Disable：禁用
> 不填则默认设置为 Disable。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Enable',
                    'enum' => 
                    array (
                      0 => 'Enable',
                      1 => 'Disable',
                    ),
                  ),
                  'SFTPDownloadFile' => 
                  array (
                    'description' => 'SFTP选项文件下载配置。取值：

- Enable：启用
- Disable：禁用
> 不填则默认设置为 Disable。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Enable',
                    'enum' => 
                    array (
                      0 => 'Enable',
                      1 => 'Disable',
                    ),
                  ),
                  'SFTPRemoveFile' => 
                  array (
                    'description' => 'SFTP选项删除文件配置。取值：

- Enable：启用
- Disable：禁用
> 不填则默认设置为 Disable。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Enable',
                    'enum' => 
                    array (
                      0 => 'Enable',
                      1 => 'Disable',
                    ),
                  ),
                  'SFTPRenameFile' => 
                  array (
                    'description' => 'SFTP选项文件重命名配置。取值：

- Enable：启用
- Disable：禁用
> 不填则默认设置为 Disable。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Enable',
                    'enum' => 
                    array (
                      0 => 'Enable',
                      1 => 'Disable',
                    ),
                  ),
                  'SFTPMkdir' => 
                  array (
                    'description' => 'SFTP选项创建文件夹配置。取值：

- Enable：启用
- Disable：禁用
> 不填则默认设置为 Disable。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Enable',
                    'enum' => 
                    array (
                      0 => 'Enable',
                      1 => 'Disable',
                    ),
                  ),
                  'SFTPRmdir' => 
                  array (
                    'description' => 'SFTP选项删除文件夹配置。取值：

- Enable：启用
- Disable：禁用
> 不填则默认设置为 Disable。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Enable',
                    'enum' => 
                    array (
                      0 => 'Enable',
                      1 => 'Disable',
                    ),
                  ),
                ),
                'required' => false,
              ),
            ),
            'required' => true,
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
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '81500666-d7f5-4143-8329-0223cc738105',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'PolicyNotFound',
            'errorMessage' => 'The policy is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"81500666-d7f5-4143-8329-0223cc738105\\"\\n}","type":"json"}]',
      'title' => '设置指定控制策略的协议控制配置',
      'summary' => '设置指定控制策略的协议控制配置。',
    ),
    'SetPolicyCommandConfig' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-78v1ghxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'PolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定需要修改的控制策略ID。

> 您可以调用[ListPolicies](~~2758876~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '45',
          ),
        ),
        3 => 
        array (
          'name' => 'CommandConfig',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '命令控制配置。

> 仅适用于Linux主机。',
            'type' => 'object',
            'properties' => 
            array (
              'Deny' => 
              array (
                'description' => '命令控制配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'AclType' => 
                  array (
                    'description' => '命令控制类型。取值：

- **black**：黑名单模式
- **white**：白名单模式',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'white',
                    'enum' => 
                    array (
                      0 => 'black',
                      1 => 'white',
                    ),
                  ),
                  'Commands' => 
                  array (
                    'description' => '命令列表。

> AclType 设置为 white 时，Commands 为必填。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '需要控制的命令列表。',
                      'type' => 'string',
                      'required' => true,
                      'example' => '["mkdir"]',
                    ),
                    'required' => false,
                  ),
                ),
                'required' => true,
              ),
              'Approval' => 
              array (
                'description' => '命令审批配置。

> 命令审批对命令控制（白名单或黑名单）以外的命令生效。命令控制策略生效的优先级高于命令审批。',
                'type' => 'object',
                'properties' => 
                array (
                  'Commands' => 
                  array (
                    'description' => '需要审批的命令列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '需要审批的命令列表。',
                      'type' => 'string',
                      'required' => false,
                      'example' => '["mkdir"]',
                    ),
                    'required' => false,
                  ),
                ),
                'required' => false,
              ),
            ),
            'required' => true,
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
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '4F6C075F-FC86-476E-943B-097BD4E12948',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'PolicyNotFound',
            'errorMessage' => 'The policy is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4F6C075F-FC86-476E-943B-097BD4E12948\\"\\n}","type":"json"}]',
      'title' => '设置指定控制策略的命令控制配置',
      'summary' => '配置在指定策略生效用户和主机中，允许或禁止执行的命令，以及需要审批的命令。',
    ),
    'SetPolicyIPAclConfig' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。

> 可通过调用[DescribeInstances](~~153281~~)接口获取堡垒机实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的地域ID。

> Region ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'PolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定需要修改的控制策略ID。

> 您可以调用[ListPolicies](~~2758876~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        3 => 
        array (
          'name' => 'IPAclConfig',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '来源IP限制配置。',
            'type' => 'object',
            'properties' => 
            array (
              'AclType' => 
              array (
                'description' => '来源IP限制模式。取值：

- **black**：黑名单模式
- **white**：白名单模式',
                'type' => 'string',
                'required' => true,
                'enumValueTitles' => 
                array (
                ),
                'example' => 'white',
                'enum' => 
                array (
                  0 => 'black',
                  1 => 'white',
                ),
              ),
              'IPs' => 
              array (
                'description' => '来源IP限制列表。

> - AclType 设置为 white 时，IPs列表内容必填。
> - AclType 设置为black 但暂不需要设置来源IP黑名单时，IPs请传空列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '来源IP限制列表。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '1.1.1.1',
                  'pattern' => '^((25[0-5]|2[0-4]\\d|((1\\d{2})|([1-9]?\\d)))\\.){3}(25[0-5]|2[0-4]\\d|((1\\d{2})|([1-9]?\\d)))(\\s?-\\s?((25[0-5]|2[0-4]\\d|((1\\d{2})|([1-9]?\\d)))\\.){3}(25[0-5]|2[0-4]\\d|((1\\d{2})|([1-9]?\\d))))?$',
                ),
                'required' => true,
              ),
            ),
            'required' => true,
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
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'PolicyNotFound',
            'errorMessage' => 'The policy is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\"\\n}","type":"json"}]',
      'title' => '设置指定控制策略的访问控制配置',
      'summary' => '设置指定控制策略的访问控制配置。',
    ),
    'GetPolicyUserScope' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的控制策略所在堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastion-xxxx-xx',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的控制策略所在堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'PolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的控制策略ID。

> 您可以调用[ListPolicies](~~2758876~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'UserScope' => 
              array (
                'description' => '控制策略生效的用户范围。',
                'type' => 'object',
                'properties' => 
                array (
                  'ScopeType' => 
                  array (
                    'description' => '控制策略生效的用户范围。

> - 返回 **All** 时表示策略针对所有用户生效。
> - 返回空值表示策略对指定用户生效，具体生效范围为UserGroupIds和UserIds的返回值。',
                    'type' => 'string',
                    'example' => 'All',
                  ),
                  'UserGroupIds' => 
                  array (
                    'description' => '控制策略生效的用户组范围。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '用户组ID。',
                      'type' => 'string',
                      'example' => '["1", "2", "3"]',
                    ),
                  ),
                  'UserIds' => 
                  array (
                    'description' => '控制策略生效的用户范围。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '用户ID。',
                      'type' => 'string',
                      'example' => '["1", "2", "3"]',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"UserScope\\": {\\n    \\"ScopeType\\": \\"All\\",\\n    \\"UserGroupIds\\": [\\n      \\"[\\\\\\"1\\\\\\", \\\\\\"2\\\\\\", \\\\\\"3\\\\\\"]\\"\\n    ],\\n    \\"UserIds\\": [\\n      \\"[\\\\\\"1\\\\\\", \\\\\\"2\\\\\\", \\\\\\"3\\\\\\"]\\"\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取指定控制策略生效用户范围',
      'summary' => '获取指定控制策略生效用户范围。',
    ),
    'SetPolicyAccessTimeRangeConfig' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。

> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'PolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '控制策略ID。',
            'type' => 'string',
            'required' => true,
            'example' => '13',
          ),
        ),
        3 => 
        array (
          'name' => 'AccessTimeRangeConfig',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '登录时段限制配置。',
            'type' => 'object',
            'properties' => 
            array (
              'EffectiveTime' => 
              array (
                'description' => '允许登录的时段详情。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Days' => 
                    array (
                      'description' => '允许登录的星期日期。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '允许登录的星期日期。

- **1**：周一
- **2**：周二
- **3**：周三
- **4**：周四
- **5**：周五
- **6**：周六
- **7**：周日',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '[7]',
                      ),
                      'required' => false,
                    ),
                    'Hours' => 
                    array (
                      'description' => '每天允许登录的时间。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '每天允许登录的时间。取值：

- **0**：0:00到1:00。
- **1**：1:00到2:00。
- **2**：2:00到3:00。
- **3**：3:00到4:00。
- **4**：4:00到5:00。
- **5**：5:00到6:00。
- **6**：6:00到7:00。
- **7**：7:00到8:00。
- **8**：8:00到9:00。
- **9**：9:00到10:00。
- **10**：10:00到11:00。
- **11**：11:00到12:00。
- **12**：12:00到13:00。
- **13**：13:00到14:00。
- **14**：14:00到15:00。
- **15**：15:00到16:00。
- **16**：16:00到17:00。
- **17**：17:00到18:00。
- **18**：18:00到19:00。
- **19**：19:00到20:00。
- **20**：20:00到21:00。
- **21**：21:00到22:00。
- **22**：22:00到23:00。
- **23**：23:00到0:00。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '[9, 14]',
                      ),
                      'required' => false,
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
              ),
            ),
            'required' => true,
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
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'PolicyNotFound',
            'errorMessage' => 'The policy is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\"\\n}","type":"json"}]',
      'title' => '设置指定控制策略的登录时段限制配置',
      'summary' => '设置指定控制策略的登录时段限制配置。',
    ),
    'SetPolicyAssetScope' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'PolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要修改的控制策略的ID。',
            'type' => 'string',
            'required' => true,
            'example' => '7',
          ),
        ),
        3 => 
        array (
          'name' => 'ScopeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '控制策略生效的资产范围。取值：
- **All**：针对所有资产生效
- **Host**：针对已选择的主机生效
- **Database**：针对已选择的数据库生效
- **HostGroup**：针对已选择的资产组生效',
            'type' => 'string',
            'required' => true,
            'example' => 'All',
          ),
        ),
        4 => 
        array (
          'name' => 'Hosts',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '控制策略生效的主机范围。

> 当ScopeType为 Host 时必填。最多500 个。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'HostId' => 
                array (
                  'description' => '主机ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '1',
                ),
                'AccountScopeType' => 
                array (
                  'description' => '控制策略生效的主机账户范围。取值：

- **All**：针对主机中的所有账户生效
- **AccountId**：针对主机中指定的账户生效',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'All',
                ),
                'HostAccountIds' => 
                array (
                  'description' => '控制策略生效的主机账户范围。

> 当AccountScopeType为 AccountId 时必填',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '主机账户ID列表。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '["96"]',
                  ),
                  'required' => false,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'Databases',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '控制策略生效的数据库资产范围。

> 当ScopeType为  Database 时必填。最多500 个。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'DatabaseId' => 
                array (
                  'description' => '数据库实例ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '3',
                ),
                'AccountScopeType' => 
                array (
                  'description' => '控制策略生效的数据库账户范围。取值：

- **All**：针对数据库中的所有账户生效
- **AccountId**：针对数据库中指定的账户生效',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'AccountId',
                ),
                'DatabaseAccountIds' => 
                array (
                  'description' => '控制策略生效的数据库账户范围。

> 当AccountScopeType为 AccountId 时必填',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '数据库账户ID列表。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '["3"]',
                  ),
                  'required' => false,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'HostGroups',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '控制策略生效的资产组范围。

> 当ScopeType为  HostGroup 时必填。最多100 个。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'HostGroupId' => 
                array (
                  'description' => '资产组ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '86',
                ),
                'AccountScopeType' => 
                array (
                  'description' => '控制策略生效的资产账户范围。取值：

- **All**：针对资产组中的所有账户生效
- **AccountName**：针对资产组中指定的账户生效',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'All',
                ),
                'AccountNames' => 
                array (
                  'description' => '控制策略生效的资产账户范围。

> 当AccountScopeType为 AccountNames 时必填',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '资产账户名。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '["root", "admin"]',
                    'minLength' => 1,
                    'pattern' => '^\\S+$',
                  ),
                  'required' => false,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '5EAB922E-F476-5DFA-9290-313C608E724B',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'PolicyNotFound',
            'errorMessage' => 'The policy is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5EAB922E-F476-5DFA-9290-313C608E724B\\"\\n}","type":"json"}]',
      'title' => '设置指定控制策略的资产生效范围',
      'summary' => '设置指定控制策略的资产生效范围。',
    ),
    'SetPolicyUserScope' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机实例的ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'PolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要修改的控制策略ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'ScopeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '控制策略生效的用户范围。取值：

- **All**：策略针对所有用户生效
- **User**：策略针对已选择的用户生效
- **UserGroup**：策略针对已选择的用户组生效',
            'type' => 'string',
            'required' => true,
            'example' => 'All',
          ),
        ),
        4 => 
        array (
          'name' => 'UserIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '控制策略生效的用户范围。

>当ScopeType为 User 时必填，最多500 个。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '用户ID。',
              'type' => 'string',
              'required' => false,
              'example' => '["1", "2", "3"]',
            ),
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'UserGroupIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '控制策略生效的用户组范围。

>当ScopeType为 UserGroup 时必填，最多100 个。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '用户组ID。',
              'type' => 'string',
              'required' => false,
              'example' => '["1", "2", "3"]',
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
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE ',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'PolicyNotFound',
            'errorMessage' => 'The policy is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE \\"\\n}","type":"json"}]',
      'title' => '设置指定控制策略的用户生效范围',
      'summary' => '设置指定控制策略的用户生效范围。',
    ),
    'SetPolicyApprovalConfig' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。
> 可通过调用DescribeInstances接口获取堡垒机实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的区域ID。
> 区域ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'PolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定需要修改的控制策略ID。',
            'type' => 'string',
            'required' => true,
            'example' => '7',
          ),
        ),
        3 => 
        array (
          'name' => 'ApprovalConfig',
          'in' => 'query',
          'allowEmptyValue' => false,
          'style' => 'json',
          'schema' => 
          array (
            'description' => '控制策略中的运维审批配置。',
            'type' => 'object',
            'properties' => 
            array (
              'SwitchStatus' => 
              array (
                'description' => '控制策略中的运维审批配置。取值：

- **On**：开启运维审批
- **Off**：关闭运维审批',
                'type' => 'string',
                'required' => true,
                'example' => 'On',
                'enum' => 
                array (
                  0 => 'Off',
                  1 => 'On',
                ),
              ),
            ),
            'required' => true,
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
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'PolicyNotFound',
            'errorMessage' => 'The policy is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\"\\n}","type":"json"}]',
      'title' => '设置指定控制策略的运维审批配置',
      'summary' => '设置指定控制策略的运维审批配置。',
    ),
    'DeletePolicy' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要删除的控制策略所在堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的地域ID。
> 地域ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'PolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要删除的控制策略ID。',
            'type' => 'string',
            'required' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'PolicyNotFound',
            'errorMessage' => 'The policy is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\"\\n}","type":"json"}]',
      'title' => '删除单个控制策略',
      'summary' => '删除单个控制策略。',
    ),
    'ListApproveCommands' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-zvp2xvysf08',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的地域ID。
> 地域ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时，当前页的页码。默认值为**1**。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时，每页显示的数据最大条数。  
PageSize参数最大取值为1000。每页默认显示的数据条数为20条，PageSize参数值为空时，将默认返回20条数据。
> 建议PageSize取值不要为空。',
            'type' => 'string',
            'required' => true,
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
            'description' => '响应数据。',
            'type' => 'object',
            'properties' => 
            array (
              'ApproveCommands' => 
              array (
                'description' => '命令列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '响应数据。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ApproveCommandId' => 
                    array (
                      'description' => '待审批的命令ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'AssetAccountName' => 
                    array (
                      'description' => '运维的资产账户名。',
                      'type' => 'string',
                      'example' => 'root',
                    ),
                    'AssetIp' => 
                    array (
                      'description' => '运维的资产IP。',
                      'type' => 'string',
                      'example' => '10.167.66.167',
                    ),
                    'AssetName' => 
                    array (
                      'description' => '运维的资产名称。',
                      'type' => 'string',
                      'example' => 'poros-test',
                    ),
                    'ClientIp' => 
                    array (
                      'description' => '提交申请的来源IP。',
                      'type' => 'string',
                      'example' => '172.18.60.68',
                    ),
                    'ClientUser' => 
                    array (
                      'description' => '提交申请的堡垒机用户。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'Command' => 
                    array (
                      'description' => '待审批的命令。',
                      'type' => 'string',
                      'example' => '/bin/bash',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '提交申请的时间。（秒，时间戳格式）',
                      'type' => 'string',
                      'example' => '1679393152',
                    ),
                    'ProtocolName' => 
                    array (
                      'description' => '运维的协议名。',
                      'type' => 'string',
                      'example' => 'SSH',
                    ),
                    'SessionId' => 
                    array (
                      'description' => '触发审批的运维的会话ID。',
                      'type' => 'string',
                      'example' => '95f873ab64a76d5b0000000000004d5e',
                    ),
                    'State' => 
                    array (
                      'description' => '审批状态。取值：

- Wait：待审批',
                      'type' => 'string',
                      'example' => 'Wait',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '接口请求的唯一id标识。',
                'type' => 'string',
                'example' => 'E3EF7711-766D-5888-997B-EFBA76809229',
              ),
              'TotalCount' => 
              array (
                'description' => '待审批的命令总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '15',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ApproveCommands\\": [\\n    {\\n      \\"ApproveCommandId\\": \\"1\\",\\n      \\"AssetAccountName\\": \\"root\\",\\n      \\"AssetIp\\": \\"10.167.66.167\\",\\n      \\"AssetName\\": \\"poros-test\\",\\n      \\"ClientIp\\": \\"172.18.60.68\\",\\n      \\"ClientUser\\": \\"test\\",\\n      \\"Command\\": \\"/bin/bash\\",\\n      \\"CreateTime\\": \\"1679393152\\",\\n      \\"ProtocolName\\": \\"SSH\\",\\n      \\"SessionId\\": \\"95f873ab64a76d5b0000000000004d5e\\",\\n      \\"State\\": \\"Wait\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"E3EF7711-766D-5888-997B-EFBA76809229\\",\\n  \\"TotalCount\\": 15\\n}","type":"json"}]',
      'title' => '获取需要审批的命令列表',
      'summary' => '获取需要审批的命令列表。',
      'description' => '本接口用于管理员获取需要审批的命令列表。

本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'AcceptApproveCommand' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。
> 可通过调用DescribeInstances接口获取堡垒机实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的地域ID。
> 地域ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'CommandId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要允许执行的命令ID。您可以通过接口ListApproveCommands查询所有需要审批的CommandId。',
            'type' => 'string',
            'required' => true,
            'example' => '7',
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
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\"\\n}","type":"json"}]',
      'title' => '允许单个命令',
      'summary' => '单个允许命令执行。',
      'description' => '本接口用于管理员审批允许运维员的命令执行申请。

本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'RejectApproveCommand' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的地域ID。
> 地域ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'CommandId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要审批拒绝的命令ID。您可以通过接口ListApproveCommands查询所有需要审批的CommandId。',
            'type' => 'string',
            'required' => true,
            'example' => '574',
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
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\"\\n}","type":"json"}]',
      'title' => '拒绝单个命令',
      'summary' => '单个拒绝命令执行。',
      'description' => '本接口用于管理员审批拒绝运维员的命令执行申请。

本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'ListOperationTickets' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的地域ID。
> 地域ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时，当前页的页码。默认值为**1**。',
            'type' => 'string',
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
            'description' => '指定分页查询时，每页显示的数据最大条数。  
PageSize参数最大取值为1000。每页默认显示的数据条数为20条，PageSize参数值为空时，将默认返回20条数据。
> 建议PageSize取值不要为空。',
            'type' => 'string',
            'required' => false,
            'example' => '20',
          ),
        ),
        4 => 
        array (
          'name' => 'AssetAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '精确搜索待审批的运维资产地址。',
            'type' => 'string',
            'required' => false,
            'example' => '10.167.66.167',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应数据。',
            'type' => 'object',
            'properties' => 
            array (
              'OperationTickets' => 
              array (
                'description' => '待审批的运维申请列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '响应数据。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ApplyUserId' => 
                    array (
                      'description' => '运维申请人ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'ApplyUsername' => 
                    array (
                      'description' => '运维申请人用户名。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'AssetAccountId' => 
                    array (
                      'description' => '申请运维的资产账户ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'AssetAccountName' => 
                    array (
                      'description' => '申请运维的资产账户登录名。',
                      'type' => 'string',
                      'example' => 'root',
                    ),
                    'AssetAddress' => 
                    array (
                      'description' => '申请运维的资产地址。',
                      'type' => 'string',
                      'example' => '10.167.66.167',
                    ),
                    'AssetId' => 
                    array (
                      'description' => '申请运维的资产ID。',
                      'type' => 'string',
                      'example' => '2',
                    ),
                    'AssetName' => 
                    array (
                      'description' => '申请运维的资产名称，',
                      'type' => 'string',
                      'example' => 'poros-test',
                    ),
                    'AssetNetworkDomainId' => 
                    array (
                      'description' => '申请运维的资产所属的网络域ID。',
                      'type' => 'string',
                      'example' => '2',
                    ),
                    'AssetOs' => 
                    array (
                      'description' => '申请运维的资产操作系统类型。',
                      'type' => 'string',
                      'example' => 'Linux',
                    ),
                    'AssetSource' => 
                    array (
                      'description' => '申请运维的资产所属资产源的名称。取值：
- Local：本地主机
- Ecs：ECS实例
- Rds：RDS实例
- 第三方资产源名称',
                      'type' => 'string',
                      'example' => 'Local',
                    ),
                    'AssetSourceInstanceId' => 
                    array (
                      'description' => '申请运维的资产所属资产源的ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'CreatedTime' => 
                    array (
                      'description' => '提交申请的时间。（秒，时间戳格式）',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1669965908',
                    ),
                    'OperationTicketId' => 
                    array (
                      'description' => '需要审批的运维申请单的ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'ProtocolName' => 
                    array (
                      'description' => '申请运维的协议名称。',
                      'type' => 'string',
                      'example' => 'SSH',
                    ),
                    'State' => 
                    array (
                      'description' => '审批状态。取值：

- Normal：待审批',
                      'type' => 'string',
                      'example' => 'Normal',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'TotalCount' => 
              array (
                'description' => '待审批的运维申请单总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"OperationTickets\\": [\\n    {\\n      \\"ApplyUserId\\": \\"1\\",\\n      \\"ApplyUsername\\": \\"test\\",\\n      \\"AssetAccountId\\": \\"1\\",\\n      \\"AssetAccountName\\": \\"root\\",\\n      \\"AssetAddress\\": \\"10.167.66.167\\",\\n      \\"AssetId\\": \\"2\\",\\n      \\"AssetName\\": \\"poros-test\\",\\n      \\"AssetNetworkDomainId\\": \\"2\\",\\n      \\"AssetOs\\": \\"Linux\\",\\n      \\"AssetSource\\": \\"Local\\",\\n      \\"AssetSourceInstanceId\\": \\"1\\",\\n      \\"CreatedTime\\": 1669965908,\\n      \\"OperationTicketId\\": \\"1\\",\\n      \\"ProtocolName\\": \\"SSH\\",\\n      \\"State\\": \\"Normal\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"TotalCount\\": 20\\n}","type":"json"}]',
      'title' => '获取需要审批的运维申请列表',
      'summary' => '获取需要审批的运维申请列表。',
      'description' => '本接口用于管理员获取需要审批的运维申请列表。

本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'AcceptOperationTicket' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机实例的ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的地域ID。
> 地域ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'OperationTicketId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要允许的运维申请的ID。您可以通过接口ListOperationTickets查询所有需要审批的OperationTicketId。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'EffectCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '允许登录的次数限制。取值：

- 0：不限制登录次数，运维员在有效期内可以无限次数登录。

- 1：运维员在有效期内只允许登录一次。
> 数据库资产运维审批的登录次数限制只能设置为不限制登录次数。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'EffectStartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '允许登录的有效期开始时间。（秒，时间戳格式）',
            'type' => 'string',
            'required' => true,
            'example' => '1685600242',
          ),
        ),
        5 => 
        array (
          'name' => 'EffectEndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '允许登录的有效期结束时间。（秒，时间戳格式）',
            'type' => 'string',
            'required' => true,
            'example' => '1679393152',
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
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\"\\n}","type":"json"}]',
      'title' => '允许运维申请',
      'summary' => '允许运维申请。',
      'description' => '本接口用于管理员审批允许运维员的运维申请。

本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'RejectOperationTicket' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。
> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的地域ID。
> 地域ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'OperationTicketId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要拒绝的运维申请的ID。您可以通过接口ListOperationTickets查询所有需要审批的OperationTicketId。',
            'type' => 'string',
            'required' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\"\\n}","type":"json"}]',
      'title' => '拒绝运维申请',
      'summary' => '拒绝运维申请。',
      'description' => '本接口用于管理员审批拒绝运维员的运维申请。

本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'CreateHostShareKey' => 
    array (
      'summary' => '新增主机共享密钥。',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的区域ID。 Region ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'HostShareKeyName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要新增的主机共享密钥名称。最大长度128字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'name',
          ),
        ),
        3 => 
        array (
          'name' => 'PrivateKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '私钥（Base64编码后的字符串）。',
            'type' => 'string',
            'required' => true,
            'example' => '****',
          ),
        ),
        4 => 
        array (
          'name' => 'PassPhrase',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '私钥口令（Base64编码后的字符串）。',
            'type' => 'string',
            'required' => false,
            'example' => '*****',
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
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'HostShareKeyId' => 
              array (
                'description' => '主机共享密钥的ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10235',
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
            'errorCode' => 'HostShareKeyAlreadyExists',
            'errorMessage' => 'The host share key already exists.	',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"HostShareKeyId\\": 10235\\n}","errorExample":""},{"type":"xml","example":"<CreateHostShareKeyResponse>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n    <HostShareKeyId>10235</HostShareKeyId>\\n</CreateHostShareKeyResponse>","errorExample":""}]',
      'title' => '新增主机共享密钥',
    ),
    'GetHostShareKey' => 
    array (
      'summary' => '查询主机共享密钥的详情。',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的地域ID。Region ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'HostShareKeyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的主机共享密钥的ID。',
            'type' => 'string',
            'required' => true,
            'example' => '10427',
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
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'HostShareKey' => 
              array (
                'description' => '共享密钥的详情。
',
                'type' => 'object',
                'properties' => 
                array (
                  'HostShareKeyId' => 
                  array (
                    'description' => '主机共享密钥ID。',
                    'type' => 'string',
                    'example' => '10427',
                  ),
                  'HostShareKeyName' => 
                  array (
                    'description' => '主机共享密钥的名称。',
                    'type' => 'string',
                    'example' => 'name',
                  ),
                  'LastModifyKeyAt' => 
                  array (
                    'description' => '主机共享密钥上次修改的时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1644287246',
                  ),
                  'PrivateKeyFingerPrint' => 
                  array (
                    'description' => '私钥的指纹。',
                    'type' => 'string',
                    'example' => '***',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'HostShareKeyNotFound',
            'errorMessage' => 'The host share key is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"HostShareKey\\": {\\n    \\"HostShareKeyId\\": \\"10427\\",\\n    \\"HostShareKeyName\\": \\"name\\",\\n    \\"LastModifyKeyAt\\": 1644287246,\\n    \\"PrivateKeyFingerPrint\\": \\"***\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetHostShareKeyResponse>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n    <HostShareKey>\\n        <HostShareKeyId>10427</HostShareKeyId>\\n        <HostShareKeyName>name</HostShareKeyName>\\n        <LastModifyKeyAt>1644287246</LastModifyKeyAt>\\n        <PrivateKeyFingerPrint>***</PrivateKeyFingerPrint>\\n    </HostShareKey>\\n</GetHostShareKeyResponse>","errorExample":""}]',
      'title' => '查询主机共享密钥的详情',
    ),
    'ListHostShareKeys' => 
    array (
      'summary' => '查询主机共享密钥的列表。',
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的地域ID。Region ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置从返回结果的第几页开始显示查询结果。默认值为**1**，表示从第1页开始显示。',
            'type' => 'string',
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
            'description' => '设置分页查询时，每页显示的主机共享密钥的数量。默认值为**20**，表示每页显示20条主机共享密钥。',
            'type' => 'string',
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
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'TotalCount' => 
              array (
                'description' => '查询到的主机共享密钥的总数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'HostShareKeys' => 
              array (
                'description' => '主机共享密钥的列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'HostAccountCount' => 
                    array (
                      'description' => '关联主机账号的数量。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'LastModifyKeyAt' => 
                    array (
                      'description' => '密钥上次修改的时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1644806406',
                    ),
                    'HostShareKeyName' => 
                    array (
                      'description' => '主机共享密钥的名称。',
                      'type' => 'string',
                      'example' => 'name',
                    ),
                    'PrivateKeyFingerPrint' => 
                    array (
                      'description' => '私钥的指纹。',
                      'type' => 'string',
                      'example' => '****',
                    ),
                    'HostShareKeyId' => 
                    array (
                      'description' => '共享密钥的ID。',
                      'type' => 'string',
                      'example' => '10247',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"TotalCount\\": 10,\\n  \\"HostShareKeys\\": [\\n    {\\n      \\"HostAccountCount\\": 1,\\n      \\"LastModifyKeyAt\\": 1644806406,\\n      \\"HostShareKeyName\\": \\"name\\",\\n      \\"PrivateKeyFingerPrint\\": \\"****\\",\\n      \\"HostShareKeyId\\": \\"10247\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListHostShareKeysResponse>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n    <TotalCount>10</TotalCount>\\n    <HostShareKeys>\\n        <HostAccountCount>1</HostAccountCount>\\n        <LastModifyKeyAt>1644806406</LastModifyKeyAt>\\n        <HostShareKeyName>name</HostShareKeyName>\\n        <PrivateKeyFingerPrint>****</PrivateKeyFingerPrint>\\n        <HostShareKeyId>10247</HostShareKeyId>\\n    </HostShareKeys>\\n</ListHostShareKeysResponse>","errorExample":""}]',
      'title' => '查询主机共享密钥的列表',
    ),
    'ListHostAccountsForHostShareKey' => 
    array (
      'summary' => '获取主机共享密钥关联的主机账号。',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的地域ID。Region ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'HostShareKeyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主机共享密钥的ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1124',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置从返回结果的第几页开始显示查询结果。默认值为**1**，表示从第1页开始显示。',
            'type' => 'string',
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
            'description' => '设置分页查询时，每页显示的主机共享密钥关联的主机账号的数量。默认值为**10**，表示每页显示10条主机共享密钥关联的主机账号。',
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
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'HostAccounts' => 
              array (
                'description' => '主机共享密钥关联的主机账号的列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'HostAccountName' => 
                    array (
                      'description' => '主机账号的名称。',
                      'type' => 'string',
                      'example' => 'root1234',
                    ),
                    'HostId' => 
                    array (
                      'description' => '主机的ID。',
                      'type' => 'string',
                      'example' => '1113',
                    ),
                    'HostsAccountId' => 
                    array (
                      'description' => '主机账号的ID。',
                      'type' => 'string',
                      'example' => '1235',
                    ),
                    'ProtocolName' => 
                    array (
                      'description' => '运维协议的名称。',
                      'type' => 'string',
                      'example' => 'SSH',
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'description' => '主机共享密钥关联的主机账号的总数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '5',
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
            'errorCode' => 'HostShareKeyNotFound',
            'errorMessage' => 'The host share key is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"HostAccounts\\": [\\n    {\\n      \\"HostAccountName\\": \\"root1234\\",\\n      \\"HostId\\": \\"1113\\",\\n      \\"HostsAccountId\\": \\"1235\\",\\n      \\"ProtocolName\\": \\"SSH\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 5\\n}","errorExample":""},{"type":"xml","example":"<ListHostAccountsForHostShareKeyResponse>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n    <HostAccounts>\\n        <HostAccountName>root1234</HostAccountName>\\n        <HostId>1113</HostId>\\n        <HostsAccountId>1235</HostsAccountId>\\n        <ProtocolName>SSH</ProtocolName>\\n    </HostAccounts>\\n    <TotalCount>5</TotalCount>\\n</ListHostAccountsForHostShareKeyResponse>","errorExample":""}]',
      'title' => '获取主机共享密钥关联的主机账号',
    ),
    'ModifyHostShareKey' => 
    array (
      'summary' => '修改主机共享密钥。',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的地域ID。Region ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'HostShareKeyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要修改的主机共享密钥的ID。',
            'type' => 'string',
            'required' => true,
            'example' => '10247',
          ),
        ),
        3 => 
        array (
          'name' => 'HostShareKeyName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主机共享密钥的名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'name',
          ),
        ),
        4 => 
        array (
          'name' => 'PrivateKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '私钥（Base64编码后的字符串）。',
            'type' => 'string',
            'required' => false,
            'example' => '****',
          ),
        ),
        5 => 
        array (
          'name' => 'PassPhrase',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '私钥口令（Base64编码后的字符串）。',
            'type' => 'string',
            'required' => false,
            'example' => '****',
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
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyHostShareKeyResponse>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n</ModifyHostShareKeyResponse>","errorExample":""}]',
      'title' => '修改主机共享密钥',
    ),
    'AttachHostAccountsToHostShareKey' => 
    array (
      'summary' => '关联主机账号到主机共享密钥。',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的地域ID。Region ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'HostShareKeyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主机共享密钥的ID。
> 此参数为必传参数。',
            'type' => 'string',
            'required' => false,
            'example' => '10267',
          ),
        ),
        3 => 
        array (
          'name' => 'HostAccountIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主机账号的ID列表。
> 此参数为必传参数。',
            'type' => 'string',
            'required' => false,
            'example' => '["1","2","3"]',
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
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'Results' => 
              array (
                'description' => '接口调用的结果。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Code' => 
                    array (
                      'description' => '错误码。错误码为**OK**时，表示关联成功；其他错误码表示关联失败。',
                      'type' => 'string',
                      'example' => 'OK',
                    ),
                    'Message' => 
                    array (
                      'description' => '错误信息。',
                      'type' => 'string',
                      'example' => 'The host account does not exist',
                    ),
                    'HostShareKeyId' => 
                    array (
                      'description' => '主机共享密钥的ID。

',
                      'type' => 'string',
                      'example' => '10267',
                    ),
                    'HostAccountId' => 
                    array (
                      'description' => '主机账号的ID。',
                      'type' => 'string',
                      'example' => '1201',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"Results\\": [\\n    {\\n      \\"Code\\": \\"OK\\",\\n      \\"Message\\": \\"The host account does not exist\\",\\n      \\"HostShareKeyId\\": \\"10267\\",\\n      \\"HostAccountId\\": \\"1201\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<AttachHostAccountsToHostShareKeyResponse>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n    <Results>\\n        <Code>OK</Code>\\n        <Message>The host account does not exist</Message>\\n        <HostShareKeyId>10267</HostShareKeyId>\\n        <HostAccountId>1201</HostAccountId>\\n    </Results>\\n</AttachHostAccountsToHostShareKeyResponse>","errorExample":""}]',
      'title' => '关联主机账号到主机共享密钥',
    ),
    'DetachHostAccountsFromHostShareKey' => 
    array (
      'summary' => '移除主机账号和主机共享密钥的关联。',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的地域ID。Region ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'HostShareKeyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主机共享密钥的ID。
',
            'type' => 'string',
            'required' => true,
            'example' => '11',
          ),
        ),
        3 => 
        array (
          'name' => 'HostAccountIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主机账号ID列表。',
            'type' => 'string',
            'required' => true,
            'example' => '["1","2","3"]',
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
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'Results' => 
              array (
                'description' => '接口调用的结果。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Code' => 
                    array (
                      'description' => '错误码。错误码为**OK**时，表示移除成功；其他错误码表示移除失败。',
                      'type' => 'string',
                      'example' => 'OK',
                    ),
                    'Message' => 
                    array (
                      'description' => '错误信息。',
                      'type' => 'string',
                      'example' => 'The host account does not exist',
                    ),
                    'HostShareKeyId' => 
                    array (
                      'description' => '主机共享密钥的ID。',
                      'type' => 'string',
                      'example' => '11',
                    ),
                    'HostAccountId' => 
                    array (
                      'description' => '主机账号的ID。',
                      'type' => 'string',
                      'example' => '12407',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"Results\\": [\\n    {\\n      \\"Code\\": \\"OK\\",\\n      \\"Message\\": \\"The host account does not exist\\",\\n      \\"HostShareKeyId\\": \\"11\\",\\n      \\"HostAccountId\\": \\"12407\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DetachHostAccountsFromHostShareKeyResponse>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n    <Results>\\n        <Code>OK</Code>\\n        <Message>The host account does not exist</Message>\\n        <HostShareKeyId>11</HostShareKeyId>\\n        <HostAccountId>12407</HostAccountId>\\n    </Results>\\n</DetachHostAccountsFromHostShareKeyResponse>","errorExample":""}]',
      'title' => '移除主机账号和主机共享密钥的关联',
    ),
    'DeleteHostShareKey' => 
    array (
      'summary' => '删除主机共享密钥。',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的地域ID。Region ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'HostShareKeyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主机共享密钥的ID。

> 此参数为必传参数。',
            'type' => 'string',
            'required' => false,
            'example' => '11206',
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
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteHostShareKeyResponse>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n</DeleteHostShareKeyResponse>","errorExample":""}]',
      'title' => '删除主机共享密钥',
    ),
    'GetInstanceADAuthServer' => 
    array (
      'summary' => '查询堡垒机实例上AD认证的配置信息。',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的堡垒机实例的ID。
您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的堡垒机实例的地域ID。
> 地域ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
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
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '89398CFB-4EB6-4C7E-BB3C-EF213AC8FA50',
              ),
              'AD' => 
              array (
                'description' => 'AD认证的配置信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Account' => 
                  array (
                    'description' => '服务器账号的DN。',
                    'type' => 'string',
                    'example' => 'cn=Manager,dc=test,dc=com',
                  ),
                  'BaseDN' => 
                  array (
                    'description' => '连接AD服务器的BASE DN。',
                    'type' => 'string',
                    'example' => 'dc=test,dc=com',
                  ),
                  'Domain' => 
                  array (
                    'description' => 'AD服务器上的域。',
                    'type' => 'string',
                    'example' => 'domain',
                  ),
                  'EmailMapping' => 
                  array (
                    'description' => '
AD服务器上对应的用户邮箱的字段名称。',
                    'type' => 'string',
                    'example' => 'emailAttr',
                  ),
                  'Filter' => 
                  array (
                    'description' => '用户的筛选条件。',
                    'type' => 'string',
                    'example' => '(&(objectClass=top))',
                  ),
                  'IsSSL' => 
                  array (
                    'description' => '是否支持SSL。取值：

- **true**：是
- **false**：否',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'MobileMapping' => 
                  array (
                    'description' => 'AD服务器上对应的用户手机号的字段名称。',
                    'type' => 'string',
                    'example' => 'mobileAttr',
                  ),
                  'NameMapping' => 
                  array (
                    'description' => 'AD服务器上对应的用户名称的字段名称。',
                    'type' => 'string',
                    'example' => 'nameAttr',
                  ),
                  'HasPassword' => 
                  array (
                    'description' => '是否设置密码。取值：
- **true**：设置密码
- **false**：未设置密码',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'Port' => 
                  array (
                    'description' => '服务器的端口。	',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '389',
                  ),
                  'Server' => 
                  array (
                    'description' => '服务器的地址。',
                    'type' => 'string',
                    'example' => '192.168.XX.XX',
                  ),
                  'StandbyServer' => 
                  array (
                    'description' => '备用服务器的地址。',
                    'type' => 'string',
                    'example' => '192.168.XX.XX',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"89398CFB-4EB6-4C7E-BB3C-EF213AC8FA50\\",\\n  \\"AD\\": {\\n    \\"Account\\": \\"cn=Manager,dc=test,dc=com\\",\\n    \\"BaseDN\\": \\"dc=test,dc=com\\",\\n    \\"Domain\\": \\"domain\\",\\n    \\"EmailMapping\\": \\"emailAttr\\",\\n    \\"Filter\\": \\"(&(objectClass=top))\\",\\n    \\"IsSSL\\": true,\\n    \\"MobileMapping\\": \\"mobileAttr\\",\\n    \\"NameMapping\\": \\"nameAttr\\",\\n    \\"HasPassword\\": true,\\n    \\"Port\\": 389,\\n    \\"Server\\": \\"192.168.XX.XX\\",\\n    \\"StandbyServer\\": \\"192.168.XX.XX\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetInstanceADAuthServerResponse>\\n    <RequestId>89398CFB-4EB6-4C7E-BB3C-EF213AC8FA50</RequestId>\\n    <AD>\\n        <Account>cn=Manager,dc=test,dc=com</Account>\\n        <BaseDN>dc=test,dc=com</BaseDN>\\n        <Domain>domain</Domain>\\n        <EmailMapping>emailAttr</EmailMapping>\\n        <Filter>(&amp;(objectClass=top))</Filter>\\n        <IsSSL>true</IsSSL>\\n        <MobileMapping>mobileAttr</MobileMapping>\\n        <NameMapping>nameAttr</NameMapping>\\n        <HasPassword>true</HasPassword>\\n        <Port>389</Port>\\n        <Server>192.168.XX.XX</Server>\\n        <StandbyServer>192.168.XX.XX</StandbyServer>\\n    </AD>\\n</GetInstanceADAuthServerResponse>","errorExample":""}]',
      'title' => '查询堡垒机实例上AD认证的配置信息',
      'description' => '### 使用说明
本接口用于查询堡垒机实例上AD认证的配置信息。通过堡垒机的AD认证功能，可以将AD服务器的用户同步到堡垒机。同步成功后，用户可通过堡垒机运维服务器。


### QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'ModifyInstanceADAuthServer' => 
    array (
      'summary' => '修改堡垒机实例的AD认证服务器的配置。',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。您可以调用[DescribeInstances](~~153281~~)接口获取该参数。

',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的地域ID。Region ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。

',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'Server',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务器的地址。

',
            'type' => 'string',
            'required' => true,
            'example' => '192.168.XX.XX',
          ),
        ),
        3 => 
        array (
          'name' => 'StandbyServer',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备用服务器的地址。

',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.XX.XX',
          ),
        ),
        4 => 
        array (
          'name' => 'Port',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问服务器的端口。

',
            'type' => 'string',
            'format' => 'int32',
            'required' => true,
            'example' => '389',
          ),
        ),
        5 => 
        array (
          'name' => 'IsSSL',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否支持SSL。取值：

- **true**：支持
- **false**：不支持

',
            'type' => 'string',
            'required' => true,
            'example' => 'true',
          ),
        ),
        6 => 
        array (
          'name' => 'BaseDN',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '基准域名（Base DN）。',
            'type' => 'string',
            'required' => true,
            'example' => 'dc=test,dc=com',
          ),
        ),
        7 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AD服务器上的域。',
            'type' => 'string',
            'required' => true,
            'example' => 'domain',
          ),
        ),
        8 => 
        array (
          'name' => 'Account',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务器的账号。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn=Manager,dc=test,dc=com',
          ),
        ),
        9 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务器账号的密码。',
            'type' => 'string',
            'required' => false,
            'example' => '******',
          ),
        ),
        10 => 
        array (
          'name' => 'Filter',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户的筛选条件。',
            'type' => 'string',
            'required' => false,
            'example' => '(objectClass=top)',
          ),
        ),
        11 => 
        array (
          'name' => 'NameMapping',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户名称对应服务器的属性名。

',
            'type' => 'string',
            'required' => false,
            'example' => 'nameAttr',
          ),
        ),
        12 => 
        array (
          'name' => 'EmailMapping',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户邮箱对应服务器的属性名。',
            'type' => 'string',
            'required' => false,
            'example' => 'emailAttr',
          ),
        ),
        13 => 
        array (
          'name' => 'MobileMapping',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户手机号对应服务器的属性名。',
            'type' => 'string',
            'required' => false,
            'example' => 'mobileAttr',
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
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'C9E97677-BD74-584B-AFCE-948C2A70BB82',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C9E97677-BD74-584B-AFCE-948C2A70BB82\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyInstanceADAuthServerResponse>\\n    <RequestId>C9E97677-BD74-584B-AFCE-948C2A70BB82</RequestId>\\n</ModifyInstanceADAuthServerResponse>","errorExample":""}]',
      'title' => '修改堡垒机实例的AD认证服务器的配置',
    ),
    'GetInstanceTwoFactor' => 
    array (
      'summary' => '查询堡垒机实例的双因子认证的配置信息。',
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
            'description' => '要查询的堡垒机实例的ID。

> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的堡垒机实例的地域ID。
> 地域ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。
',
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
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'EC9BF0F4-8983-491A-BC8C-1B4DD94976DE',
              ),
              'Config' => 
              array (
                'description' => '双因子认证的配置信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'EnableTwoFactor' => 
                  array (
                    'description' => '是否开启了双因子。取值：

- **true**：是
- **false**：否',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'TwoFactorMethods' => 
                  array (
                    'description' => '已配置的双因子认证方式列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '开启双因子认证时验证码的发送方式。取值：

- **sms**：短信
- **email**：邮件
- **dingtalk** 钉钉工作通知',
                      'type' => 'string',
                      'example' => 'sms',
                    ),
                  ),
                  'SkipTwoFactorTime' => 
                  array (
                    'description' => '双因子认证成功后，后续登录堡垒机时跳过双因子认证的时间。取值范围为`[0,168]`，单位为小时。

> 0表示不跳过，即每次登录堡垒机都需要双因子认证。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9BF0F4-8983-491A-BC8C-1B4DD94976DE\\",\\n  \\"Config\\": {\\n    \\"EnableTwoFactor\\": true,\\n    \\"TwoFactorMethods\\": [\\n      \\"sms\\"\\n    ],\\n    \\"SkipTwoFactorTime\\": 1\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetInstanceTwoFactorResponse>\\n    <RequestId>EC9BF0F4-8983-491A-BC8C-1B4DD94976DE</RequestId>\\n    <Config>\\n        <EnableTwoFactor>true</EnableTwoFactor>\\n        <TwoFactorMethods>sms</TwoFactorMethods>\\n        <SkipTwoFactorTime>1</SkipTwoFactorTime>\\n        <MessageLanguage>zh-cn</MessageLanguage>\\n    </Config>\\n</GetInstanceTwoFactorResponse>","errorExample":""}]',
      'title' => '查询堡垒机实例的双因子认证的配置信息',
      'description' => '本接口用于查询堡垒机实例的双因子认证的配置信息。双因子认证是在本地用户登录堡垒机时发送验证码，对用户身份进行二次认证，可以有效降低账户泄露等情况带来的安全风险。

### QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'ModifyInstanceTwoFactor' => 
    array (
      'summary' => '修改堡垒机实例的双因子配置。',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。

> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的地域ID。

> Region ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'EnableTwoFactor',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启双因子。取值：

- **true**：开启
- **false**：不开启',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'TwoFactorMethods',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '双因子验证码发送方式。当EnableTwoFactor为true时，至少要指定一种方式。取值：

- **sms**：短信
- **email**：邮箱
- **dingtalk**：钉钉工作通知',
            'type' => 'string',
            'required' => false,
            'example' => '["sms"]',
          ),
        ),
        4 => 
        array (
          'name' => 'SkipTwoFactorTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '双因子认证成功后，后续登录堡垒机时跳过双因子认证的时间，取值范围为0~168，单位（小时）。0表示不跳过，每次都需要双因子认证。',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '9CE1A352-15E9-5EB4-B589-87A8DEECB20D',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9CE1A352-15E9-5EB4-B589-87A8DEECB20D\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyInstanceTwoFactorResponse>\\n    <RequestId>9CE1A352-15E9-5EB4-B589-87A8DEECB20D</RequestId>\\n</ModifyInstanceTwoFactorResponse>","errorExample":""}]',
      'title' => '修改堡垒机实例的双因子配置',
    ),
    'ModifyInstanceLDAPAuthServer' => 
    array (
      'summary' => '修改堡垒机实例LDAP认证服务器的配置。',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。您可以调用[DescribeInstances](~~153281~~)接口获取该参数。

',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的地域ID。Region ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'Server',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务器的地址。',
            'type' => 'string',
            'required' => true,
            'example' => '192.168.XX.XX',
          ),
        ),
        3 => 
        array (
          'name' => 'StandbyServer',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备用服务器的地址。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.XX.XX',
          ),
        ),
        4 => 
        array (
          'name' => 'Port',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问服务器的端口。',
            'type' => 'string',
            'required' => true,
            'example' => '389',
          ),
        ),
        5 => 
        array (
          'name' => 'IsSSL',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否支持SSL。取值：

- **true**：支持
- **false**：不支持',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
          ),
        ),
        6 => 
        array (
          'name' => 'BaseDN',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '基准域名（Base DN）。',
            'type' => 'string',
            'required' => true,
            'example' => 'dc=test,dc=com',
          ),
        ),
        7 => 
        array (
          'name' => 'Account',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务器的账号。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn=Manager,dc=test,dc=com',
          ),
        ),
        8 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务器账号的密码。添加LDAP认证服务器时为必填。修改LDAP认证服务器信息时，不填则表示保留当前密码。',
            'type' => 'string',
            'required' => false,
            'example' => '******',
          ),
        ),
        9 => 
        array (
          'name' => 'Filter',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户的筛选条件。',
            'type' => 'string',
            'required' => false,
            'example' => '(objectClass=top)',
          ),
        ),
        10 => 
        array (
          'name' => 'LoginNameMapping',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户登录名对应服务器的属性名。',
            'type' => 'string',
            'required' => false,
            'example' => 'userNameAttr',
          ),
        ),
        11 => 
        array (
          'name' => 'NameMapping',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户名称对应服务器的属性名。',
            'type' => 'string',
            'required' => false,
            'example' => 'nameAttr',
          ),
        ),
        12 => 
        array (
          'name' => 'EmailMapping',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户邮箱对应服务器的属性名。',
            'type' => 'string',
            'required' => false,
            'example' => 'emailAttr',
          ),
        ),
        13 => 
        array (
          'name' => 'MobileMapping',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户手机号对应服务器的属性名。',
            'type' => 'string',
            'required' => false,
            'example' => 'mobileAttr',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '8F1085E3-F048-5F34-B650-F145216E4AA4',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8F1085E3-F048-5F34-B650-F145216E4AA4\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyInstanceLDAPAuthServerResponse>\\n    <RequestId>8F1085E3-F048-5F34-B650-F145216E4AA4</RequestId>\\n</ModifyInstanceLDAPAuthServerResponse>","errorExample":""}]',
      'title' => '修改堡垒机实例LDAP认证服务器的配置',
    ),
    'GetInstanceLDAPAuthServer' => 
    array (
      'summary' => '获取堡垒机实例LDAP认证的配置。',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。

> 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的地域ID。

> Region ID和地域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
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
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '1C60E741-102D-5E8F-9710-B06D3F0183FE',
              ),
              'LDAP' => 
              array (
                'description' => 'LDAP认证的配置信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Account' => 
                  array (
                    'description' => '服务器的账号。',
                    'type' => 'string',
                    'example' => 'cn=Manager,dc=test,dc=com',
                  ),
                  'BaseDN' => 
                  array (
                    'description' => '基准域名（Base DN）。',
                    'type' => 'string',
                    'example' => 'dc=test,dc=com',
                  ),
                  'EmailMapping' => 
                  array (
                    'description' => '用户邮箱对应的服务器的属性名。',
                    'type' => 'string',
                    'example' => 'emailAttr',
                  ),
                  'Filter' => 
                  array (
                    'description' => '用户的筛选条件。',
                    'type' => 'string',
                    'example' => '(&(objectClass=top))',
                  ),
                  'IsSSL' => 
                  array (
                    'description' => '是否支持SSL。取值：

- **true**：支持
- **false**：不支持',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'LoginNameMapping' => 
                  array (
                    'description' => '用户登录名对应服务器属性名。',
                    'type' => 'string',
                    'example' => 'userNameAttr',
                  ),
                  'MobileMapping' => 
                  array (
                    'description' => '用户手机号对应的服务器的属性名。',
                    'type' => 'string',
                    'example' => 'mobileAttr',
                  ),
                  'NameMapping' => 
                  array (
                    'description' => '用户名称对应的服务器的属性名。',
                    'type' => 'string',
                    'example' => 'nameAttr',
                  ),
                  'HasPassword' => 
                  array (
                    'description' => '是否设置密码。取值：

- **true**：设置密码
- **false**：未设置密码',
                    'type' => 'string',
                    'example' => 'true',
                  ),
                  'Port' => 
                  array (
                    'description' => '访问服务器的端口。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '389',
                  ),
                  'Server' => 
                  array (
                    'description' => '服务器的地址。',
                    'type' => 'string',
                    'example' => '192.168.XX.XX',
                  ),
                  'StandbyServer' => 
                  array (
                    'description' => '备用服务器的地址。',
                    'type' => 'string',
                    'example' => '192.168.XX.XX',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1C60E741-102D-5E8F-9710-B06D3F0183FE\\",\\n  \\"LDAP\\": {\\n    \\"Account\\": \\"cn=Manager,dc=test,dc=com\\",\\n    \\"BaseDN\\": \\"dc=test,dc=com\\",\\n    \\"EmailMapping\\": \\"emailAttr\\",\\n    \\"Filter\\": \\"(&(objectClass=top))\\",\\n    \\"IsSSL\\": true,\\n    \\"LoginNameMapping\\": \\"userNameAttr\\",\\n    \\"MobileMapping\\": \\"mobileAttr\\",\\n    \\"NameMapping\\": \\"nameAttr\\",\\n    \\"HasPassword\\": \\"true\\",\\n    \\"Port\\": 389,\\n    \\"Server\\": \\"192.168.XX.XX\\",\\n    \\"StandbyServer\\": \\"192.168.XX.XX\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetInstanceLDAPAuthServerResponse>\\n    <RequestId>1C60E741-102D-5E8F-9710-B06D3F0183FE</RequestId>\\n    <LDAP>\\n        <Account>cn=Manager,dc=test,dc=com</Account>\\n        <BaseDN>dc=test,dc=com</BaseDN>\\n        <EmailMapping>emailAttr</EmailMapping>\\n        <Filter>(&amp;(objectClass=top))</Filter>\\n        <IsSSL>true</IsSSL>\\n        <LoginNameMapping>userNameAttr</LoginNameMapping>\\n        <MobileMapping>mobileAttr</MobileMapping>\\n        <NameMapping>nameAttr</NameMapping>\\n        <HasPassword>true</HasPassword>\\n        <Port>389</Port>\\n        <Server>192.168.XX.XX</Server>\\n        <StandbyServer>192.168.XX.XX</StandbyServer>\\n    </LDAP>\\n</GetInstanceLDAPAuthServerResponse>","errorExample":""}]',
      'title' => '获取堡垒机实例LDAP认证的配置',
    ),
    'VerifyInstanceLDAPAuthServer' => 
    array (
      'summary' => '验证实例LDAP服务配置。',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的区域ID。 Region ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'Server',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务器的地址。',
            'type' => 'string',
            'required' => true,
            'example' => '192.168.XX.XX',
          ),
        ),
        3 => 
        array (
          'name' => 'StandbyServer',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备用服务器的地址。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.XX.XX',
          ),
        ),
        4 => 
        array (
          'name' => 'Port',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问服务器的端口。',
            'type' => 'string',
            'required' => true,
            'example' => '389',
          ),
        ),
        5 => 
        array (
          'name' => 'IsSSL',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否支持SSL。取值：

- **true**：支持
- **false**：不支持',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
          ),
        ),
        6 => 
        array (
          'name' => 'BaseDN',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '基准域名（Base DN）。',
            'type' => 'string',
            'required' => true,
            'example' => 'dc=test,dc=com',
          ),
        ),
        7 => 
        array (
          'name' => 'Account',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务器的账号。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn=Manager,dc=test,dc=com',
          ),
        ),
        8 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务器账号的密码。',
            'type' => 'string',
            'required' => false,
            'example' => '******',
          ),
        ),
        9 => 
        array (
          'name' => 'Filter',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户的筛选条件。',
            'type' => 'string',
            'required' => false,
            'example' => '(objectClass=top)',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'C9E97677-BD74-584B-AFCE-948C2A70BB83',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C9E97677-BD74-584B-AFCE-948C2A70BB83\\"\\n}","errorExample":""},{"type":"xml","example":"<VerifyInstanceLDAPAuthServerResponse>\\n    <RequestId>C9E97677-BD74-584B-AFCE-948C2A70BB83</RequestId>\\n</VerifyInstanceLDAPAuthServerResponse>","errorExample":""}]',
      'title' => '验证实例LDAP服务配置。',
    ),
    'VerifyInstanceADAuthServer' => 
    array (
      'summary' => '验证实例AD服务配置。',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的实例ID。 您可以调用[DescribeInstances](~~153281~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bastionhost-cn-st220aw****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '堡垒机的区域ID。 Region ID和区域名称的对应关系，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'Server',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务器的地址。',
            'type' => 'string',
            'required' => true,
            'example' => '192.168.XX.XX',
          ),
        ),
        3 => 
        array (
          'name' => 'StandbyServer',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备用服务器的地址。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.XX.XX',
          ),
        ),
        4 => 
        array (
          'name' => 'Port',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '端口。',
            'type' => 'string',
            'required' => true,
            'example' => '389',
          ),
        ),
        5 => 
        array (
          'name' => 'IsSSL',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否支持SSL。取值：

- **true**：支持
- **false**：不支持',
            'type' => 'string',
            'required' => true,
            'example' => 'true',
          ),
        ),
        6 => 
        array (
          'name' => 'BaseDN',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '基准域名（Base DN）。',
            'type' => 'string',
            'required' => true,
            'example' => 'dc=test,dc=com',
          ),
        ),
        7 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AD服务器上的域。',
            'type' => 'string',
            'required' => true,
            'example' => 'domain',
          ),
        ),
        8 => 
        array (
          'name' => 'Account',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务器的账号。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn=Manager,dc=test,dc=com',
          ),
        ),
        9 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务器账号的密码。',
            'type' => 'string',
            'required' => true,
            'example' => '******',
          ),
        ),
        10 => 
        array (
          'name' => 'Filter',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户的筛选条件。',
            'type' => 'string',
            'required' => false,
            'example' => '(objectClass=top)',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '8F1085E3-F048-5F34-B650-F145216E4AA5',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The argument is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An unknown error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8F1085E3-F048-5F34-B650-F145216E4AA5\\"\\n}","errorExample":""},{"type":"xml","example":"<VerifyInstanceADAuthServerResponse>\\n    <RequestId>8F1085E3-F048-5F34-B650-F145216E4AA5</RequestId>\\n</VerifyInstanceADAuthServerResponse>","errorExample":""}]',
      'title' => '验证实例AD服务配置。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-north-2-gov-1',
      'endpoint' => 'yundun-bastionhost.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'yundun-bastionhost.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'yundun-bastionhost.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'yundun-bastionhost.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'bastionhost.ap-southeast-5.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'yundun-bastionhost.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-huhehaote-nebula-1',
      'endpoint' => 'yundun-bastionhost.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'yundun-bastionhost.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'bastionhost.ap-northeast-1.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'bastionhost.eu-central-1.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-heyuan',
      'endpoint' => 'yundun-bastionhost.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'bastionhost.cn-zhangjiakou.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'bastionhost.ap-south-1.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'yundun-bastionhost.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'cn-haidian-cm12-c01',
      'endpoint' => 'yundun-bastionhost.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'bastionhost.eu-west-1.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'bastionhost.ap-southeast-2.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'bastionhost.cn-huhehaote.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'bastionhost.ap-southeast-3.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'yundun-bastionhost.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'yundun-bastionhost.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'yundun-bastionhost.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'bastionhost.ap-southeast-1.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'bastionhost.us-west-1.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'bastionhost.cn-hongkong.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'bastionhost.us-east-1.aliyuncs.com',
    ),
  ),
);
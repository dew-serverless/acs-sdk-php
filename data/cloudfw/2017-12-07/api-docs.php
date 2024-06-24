<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Cloudfw',
    'version' => '2017-12-07',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 191697,
      'title' => 'NAT防火墙',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeNatFirewallList',
        1 => 'CreateSecurityProxy',
        2 => 'DeleteSecurityProxy',
        3 => 'SwitchSecurityProxy',
      ),
    ),
    1 => 
    array (
      'id' => 74129,
      'title' => '防火墙开关',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeAssetList',
        1 => 'PutDisableFwSwitch',
        2 => 'PutEnableAllFwSwitch',
        3 => 'PutEnableFwSwitch',
        4 => 'PutDisableAllFwSwitch',
      ),
    ),
    2 => 
    array (
      'id' => 74134,
      'title' => '访问控制',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 186814,
          'title' => 'NAT边界',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateNatFirewallControlPolicy',
            1 => 'DescribeNatFirewallControlPolicy',
            2 => 'DescribeNatFirewallPolicyPriorUsed',
            3 => 'ModifyNatFirewallControlPolicyPosition',
            4 => 'ModifyNatFirewallControlPolicy',
            5 => 'DeleteNatFirewallControlPolicy',
          ),
        ),
        1 => 
        array (
          'id' => 186815,
          'title' => 'VPC边界',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateVpcFirewallControlPolicy',
            1 => 'BatchCopyVpcFirewallControlPolicy',
            2 => 'ResetVpcFirewallRuleHitCount',
            3 => 'DescribeVpcFirewallAclGroupList',
            4 => 'DescribeVpcFirewallPolicyPriorUsed',
            5 => 'DescribeVpcFirewallControlPolicy',
            6 => 'ModifyVpcFirewallControlPolicyPosition',
            7 => 'ModifyVpcFirewallControlPolicy',
            8 => 'DeleteVpcFirewallControlPolicy',
          ),
        ),
        2 => 
        array (
          'id' => 186816,
          'title' => '互联网边界',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'DescribeACLProtectTrend',
            1 => 'DescribePolicyAdvancedConfig',
            2 => 'ModifyPolicyAdvancedConfig',
            3 => 'DescribePolicyPriorUsed',
            4 => 'DescribeDomainResolve',
            5 => 'DescribeControlPolicy',
            6 => 'ModifyControlPolicyPosition',
            7 => 'ModifyControlPolicy',
            8 => 'DeleteControlPolicy',
            9 => 'AddControlPolicy',
          ),
        ),
      ),
    ),
    3 => 
    array (
      'id' => 74138,
      'title' => 'VPC边界防火墙',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 186817,
          'title' => '入侵防御',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'ModifyVpcFirewallDefaultIPSConfig',
            1 => 'DescribeVpcFirewallDefaultIPSConfig',
          ),
        ),
        1 => 
        array (
          'id' => 186818,
          'title' => '高速通道',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'DeleteVpcFirewallConfigure',
            1 => 'ModifyVpcFirewallConfigure',
            2 => 'ModifyVpcFirewallSwitchStatus',
            3 => 'DescribeVpcFirewallDetail',
            4 => 'DescribeVpcFirewallList',
            5 => 'CreateVpcFirewallConfigure',
          ),
        ),
        2 => 
        array (
          'id' => 186819,
          'title' => '云企业网（基础版）',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateVpcFirewallCenConfigure',
            1 => 'ModifyVpcFirewallCenSwitchStatus',
            2 => 'ModifyVpcFirewallCenConfigure',
            3 => 'DescribeVpcFirewallCenList',
            4 => 'DescribeVpcFirewallCenDetail',
            5 => 'DeleteVpcFirewallCenConfigure',
          ),
        ),
        3 => 
        array (
          'id' => 186820,
          'title' => '云企业网（企业版）',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'DeleteFirewallV2RoutePolicies',
            1 => 'CreateTrFirewallV2',
            2 => 'CreateTrFirewallV2RoutePolicy',
            3 => 'DescribeTrFirewallsV2Detail',
            4 => 'DescribeTrFirewallsV2List',
            5 => 'DescribeTrFirewallsV2RouteList',
            6 => 'DescribeTrFirewallV2RoutePolicyList',
            7 => 'DescribeTrFirewallPolicyBackUpAssociationList',
            8 => 'ModifyTrFirewallV2Configuration',
            9 => 'ModifyFirewallV2RoutePolicySwitch',
            10 => 'ModifyTrFirewallV2RoutePolicyScope',
            11 => 'DeleteTrFirewallV2',
          ),
        ),
      ),
    ),
    4 => 
    array (
      'id' => 74122,
      'title' => '多账号管控',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddInstanceMembers',
        1 => 'DeleteInstanceMembers',
        2 => 'ModifyInstanceMemberAttributes',
        3 => 'DescribeInstanceMembers',
      ),
    ),
    5 => 
    array (
      'id' => 177081,
      'title' => '攻击防护',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeRiskEventPayload',
        1 => 'DescribeVulnerabilityProtectedList',
        2 => 'DescribeRiskEventGroup',
        3 => 'DescribeUserAssetIPTrafficInfo',
        4 => 'DescribeInvadeEventList',
        5 => 'DescribeOutgoingDestinationIP',
        6 => 'DescribeOutgoingDomain',
      ),
    ),
    6 => 
    array (
      'id' => 74155,
      'title' => '地址簿',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddAddressBook',
        1 => 'DeleteAddressBook',
        2 => 'ModifyAddressBook',
        3 => 'DescribeAddressBook',
      ),
    ),
    7 => 
    array (
      'id' => 181516,
      'title' => '流量分析',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeInternetOpenIp',
        1 => 'DescribeInternetTrafficTrend',
      ),
    ),
    8 => 
    array (
      'id' => 188947,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ReleasePostInstance',
        1 => 'DescribeAssetRiskList',
        2 => 'DescribeVpcListLite',
        3 => 'ModifyVpcFirewallIPSWhitelist',
        4 => 'DescribeVpcFirewallIPSWhitelist',
        5 => 'DeleteControlPolicyTemplate',
        6 => 'DescribePrefixLists',
        7 => 'CreateDownloadTask',
        8 => 'DescribeDownloadTaskType',
        9 => 'DeleteDownloadTask',
        10 => 'DescribeDownloadTask',
        11 => 'DeleteNatFirewallControlPolicyBatch',
        12 => 'ResetNatFirewallRuleHitCount',
        13 => 'DescribeNatAclPageStatus',
        14 => 'DescribeInstanceRiskLevels',
        15 => 'DescribeCfwRiskLevelSummary',
        16 => 'DescribeVpcZone',
        17 => 'DescribeSignatureLibVersion',
        18 => 'DescribePostpayTrafficTotal',
        19 => 'DescribePostpayTrafficDetail',
        20 => 'BatchDeleteVpcFirewallControlPolicy',
      ),
    ),
    9 => 
    array (
      'id' => 0,
      'title' => '其它',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeDefaultIPSConfig',
        1 => 'ModifyDefaultIPSConfig',
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
    'DescribeNatFirewallList' => 
    array (
      'summary' => '本接口用于获取NAT边界防火墙的详细信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '115925',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcfwOG6NL8',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回消息的语言类型。取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回消息的语言类型。取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页面的页码。',
            'type' => 'integer',
            'format' => 'int64',
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
            'description' => '分页查询时，设置每页包含NAT边界防火墙的数量。

默认值为**10**，表示每页包含**10**条结果。最大值为**50**。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
            'default' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'ProxyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'NAT防火墙ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'proxy-nat97a******
',
          ),
        ),
        5 => 
        array (
          'name' => 'ProxyName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'NAT防火墙名称。支持大小写英文字母、中文、数字、下划线（_）、长度为[4,50]个字符,且不能以下划线开头。',
            'type' => 'string',
            'required' => false,
            'example' => 'nat-防火墙测试
',
          ),
        ),
        6 => 
        array (
          'name' => 'RegionNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC所在的地域ID。

> 关于云防火墙支持地域的详细信息，请参见[支持的地域](~~195657~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        7 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-8vbwbo90rq0anm6t****',
          ),
        ),
        8 => 
        array (
          'name' => 'NatGatewayId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'NAT网关的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'nat-bp123456g******',
          ),
        ),
        9 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云防火墙状态。取值：

- configuring：创建中
- deleting：删除中
- normal：正常
- abnormal：异常
- opening：开启中
- closing：关闭中
- closed：已关闭',
            'type' => 'string',
            'required' => false,
            'example' => 'normal',
          ),
        ),
        10 => 
        array (
          'name' => 'MemberUid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前阿里云账号的成员账号UID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '147783******',
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
                'description' => 'NAT边界防火墙的总数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => '15FCCC52-1E23-57AE-B5EF-3E00A3******
',
              ),
              'NatFirewallList' => 
              array (
                'description' => '云防火墙列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '云防火墙列表',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'MemberUid' => 
                    array (
                      'description' => '云防火墙成员账号的UID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '19106481******',
                    ),
                    'AliUid' => 
                    array (
                      'description' => '阿里云账号的UID。

> 云防火墙成员账号的主账号。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '19106481******
',
                    ),
                    'ProxyId' => 
                    array (
                      'description' => 'NAT防火墙ID。',
                      'type' => 'string',
                      'example' => 'proxy-nat30******',
                    ),
                    'ProxyName' => 
                    array (
                      'description' => 'NAT防火墙名称。',
                      'type' => 'string',
                      'example' => 'nat-防火墙测试
',
                    ),
                    'ProxyStatus' => 
                    array (
                      'description' => '云防火墙状态。取值：

- configuring：创建中
- deleting：删除中
- normal：正常 
- abnormal：异常
- opening：开启中
- closing：关闭中
- closed：已关闭',
                      'type' => 'string',
                      'example' => 'normal',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '云防火墙所在的地域ID。
> 关于云防火墙支持地域的详细信息，请参见[支持的地域](~~195657~~)。',
                      'type' => 'string',
                      'example' => 'cn-qingdao',
                    ),
                    'NatGatewayId' => 
                    array (
                      'description' => '要查询的NAT网关的ID。',
                      'type' => 'string',
                      'example' => 'ngw-uf6tnblxip4qcxg******',
                    ),
                    'NatGatewayName' => 
                    array (
                      'description' => 'NAT网关的名称',
                      'type' => 'string',
                      'example' => 'NAT网关测试
',
                    ),
                    'VpcId' => 
                    array (
                      'description' => 'VPC实例ID。',
                      'type' => 'string',
                      'example' => 'vpc-2ze26ya******',
                    ),
                    'VpcName' => 
                    array (
                      'description' => 'VPC的实例名称。',
                      'type' => 'string',
                      'example' => 'vpc-测试实例',
                    ),
                    'ErrorDetail' => 
                    array (
                      'description' => '错误原因。',
                      'type' => 'string',
                      'example' => '防火墙创建失败',
                    ),
                    'StrictMode' => 
                    array (
                      'description' => '是否启用严格模式

- 1：启用严格模式 
- 0：禁用严格模式',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'NatRouteEntryList' => 
                    array (
                      'description' => 'NAT网关默认路由条目列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'NAT网关默认路由条目。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'RouteTableId' => 
                          array (
                            'description' => 'NAT网关默认路由所在路由表。',
                            'type' => 'string',
                            'example' => 'vtb-bp18o0gb******',
                          ),
                          'NextHopId' => 
                          array (
                            'description' => '原NAT网关下一跳转地址。',
                            'type' => 'string',
                            'example' => 'ngw-2ze0s284r9atg5******',
                          ),
                          'NextHopType' => 
                          array (
                            'description' => '下一跳的网络类型。取值：NatGateway。',
                            'type' => 'string',
                            'example' => 'NatGateway',
                          ),
                          'DestinationCidr' => 
                          array (
                            'description' => '默认路由目的网段。',
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
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": 10,\\n  \\"RequestId\\": \\"15FCCC52-1E23-57AE-B5EF-3E00A3******\\\\n\\",\\n  \\"NatFirewallList\\": [\\n    {\\n      \\"MemberUid\\": 0,\\n      \\"AliUid\\": 0,\\n      \\"ProxyId\\": \\"proxy-nat30******\\",\\n      \\"ProxyName\\": \\"nat-防火墙测试\\\\n\\",\\n      \\"ProxyStatus\\": \\"normal\\",\\n      \\"RegionId\\": \\"cn-qingdao\\",\\n      \\"NatGatewayId\\": \\"ngw-uf6tnblxip4qcxg******\\",\\n      \\"NatGatewayName\\": \\"NAT网关测试\\\\n\\",\\n      \\"VpcId\\": \\"vpc-2ze26ya******\\",\\n      \\"VpcName\\": \\"vpc-测试实例\\",\\n      \\"ErrorDetail\\": \\"防火墙创建失败\\",\\n      \\"StrictMode\\": 0,\\n      \\"NatRouteEntryList\\": [\\n        {\\n          \\"RouteTableId\\": \\"vtb-bp18o0gb******\\",\\n          \\"NextHopId\\": \\"ngw-2ze0s284r9atg5******\\",\\n          \\"NextHopType\\": \\"NatGateway\\",\\n          \\"DestinationCidr\\": \\"0.0.0.0/0\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询NAT防火墙',
    ),
    'CreateSecurityProxy' => 
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
        'abilityTreeCode' => '68127',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcfwOG6NL8',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收消息的语言类型。取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'ProxyName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'NAT防火墙名称。支持大小写英文字母、中文、数字、下划线（_）、长度为4~50个字符，且不能以下划线开头。',
            'type' => 'string',
            'required' => true,
            'example' => 'nat-防火墙名称',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC所在的地域ID。

> 关于云防火墙支持地域的详细信息，请参见[支持的地域](~~195657~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'vpc-uf6b5lyul0x******',
          ),
        ),
        4 => 
        array (
          'name' => 'NatGatewayId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => ' NAT网关的ID。 ',
            'type' => 'string',
            'required' => true,
            'example' => 'nat-bp1okz6k7******',
          ),
        ),
        5 => 
        array (
          'name' => 'VswitchAuto',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用交换机自动模式。取值：
- **true**：自动模式
- **false**：手动模式',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
          ),
        ),
        6 => 
        array (
          'name' => 'VswitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '交换机ID。交换机手动模式时必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-bp1sqg9w******',
          ),
        ),
        7 => 
        array (
          'name' => 'NatRouteEntryList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'NAT网关待切换路由列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '安全防护目的地址列表。',
              'type' => 'object',
              'properties' => 
              array (
                'NextHopId' => 
                array (
                  'description' => '原NAT网关下一跳转地址。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'ngw-bp1okz6******',
                ),
                'DestinationCidr' => 
                array (
                  'description' => '默认路由目的网段。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '0.0.0.0/0',
                ),
                'NextHopType' => 
                array (
                  'description' => '下一跳的网络类型。取值：NatGateway。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'NatGateway',
                ),
                'RouteTableId' => 
                array (
                  'description' => 'NAT网关默认路由所在路由表。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'vtb-2ze1******',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 10000,
          ),
        ),
        8 => 
        array (
          'name' => 'FirewallSwitch',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全防护开关。取值：
- **open**：打开
- **close**：关闭',
            'type' => 'string',
            'required' => false,
            'example' => 'close',
          ),
        ),
        9 => 
        array (
          'name' => 'StrictMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否启用严格模式

-  1：启用严格模式
-  0：禁用严格模式',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        10 => 
        array (
          'name' => 'VswitchCidr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟交换机的网段。交换机自动模式时必填。',
            'type' => 'string',
            'required' => false,
            'example' => '0.0.0.0/0',
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
              'ProxyId' => 
              array (
                'description' => 'NAT防火墙ID。',
                'type' => 'string',
                'example' => 'proxy-nat97a******',
              ),
              'RequestId' => 
              array (
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => '15FCCC52-1E23-57AE-B5EF-3E00A3******',
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
            'errorCode' => 'ErrorDnatNotSupport',
            'errorMessage' => 'Secure proxy does not support DNAT entries',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ProxyId\\": \\"proxy-nat97a******\\",\\n  \\"RequestId\\": \\"15FCCC52-1E23-57AE-B5EF-3E00A3******\\"\\n}","type":"json"}]',
      'title' => ' 创建NAT防火墙',
      'summary' => '创建NAT防火墙。',
    ),
    'DeleteSecurityProxy' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '68156',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcfwOG6NL8',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：
- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'ProxyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'NAT防火墙ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'proxy-nat00ab******',
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
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => '7447795A-39AB-52CB-8F92-128DF******',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7447795A-39AB-52CB-8F92-128DF******\\"\\n}","type":"json"}]',
      'title' => '删除NAT防火墙',
      'summary' => '删除NAT防火墙。',
    ),
    'SwitchSecurityProxy' => 
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
        'operationType' => 'get',
        'abilityTreeCode' => '68530',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcfwOG6NL8',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文

- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'ProxyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'NAT防火墙ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'proxy-natbf******',
          ),
        ),
        2 => 
        array (
          'name' => 'Switch',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全防护开关。取值：
- open：打开
- close：关闭',
            'type' => 'string',
            'required' => true,
            'example' => 'open',
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
                'description' => '结果的请求ID。',
                'type' => 'string',
                'example' => 'F1E55690-3ABA-58FA-90E3-593EF******',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F1E55690-3ABA-58FA-90E3-593EF******\\"\\n}","type":"json"}]',
      'title' => '开/关NAT防火墙',
      'summary' => '开/关NAT防火墙。',
    ),
    'DescribeAssetList' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收消息的语言类型。取值：

- **zh**（默认）：中文。
- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，设置当前页的页码。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，设置每页包含云防火墙防护资产的数量。',
            'type' => 'string',
            'required' => true,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云防火墙所在的地域ID。

>  关于云防火墙支持地域的详细信息，请参见[支持的地域](~~195657~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        4 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云防火墙状态。取值：

- **open**：保护中。
- **opening**：保护开启中。
- **closed**：保护未开启。
- **closing**：保护关闭中。

>不设置该参数表示查询所有防火墙状态。',
            'type' => 'string',
            'required' => false,
            'example' => 'open',
          ),
        ),
        5 => 
        array (
          'name' => 'SearchItem',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资产的IP或者实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => '192.0.XX.XX',
          ),
        ),
        6 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本参数已废弃。',
            'type' => 'string',
            'required' => false,
            'example' => 'eip',
          ),
        ),
        7 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资产类型。取值：

- **BastionHostEgressIP**：堡垒机出口IP。
- **BastionHostIngressIP**：堡垒机入口IP。
- **EcsEIP**：ECS EIP。
- **EcsPublicIP**：ECS公网IP。
- **EIP**：弹性公网IP。
- **EniEIP**：弹性网卡EIP。
- **NatEIP**：NAT EIP。
- **SlbEIP**：SLB EIP(CLB EIP)。
- **SlbPublicIP**：SLB 公网IP(CLB 公网IP)。
- **NatPublicIP**：NAT公网IP。
- **HAVIP**：高可用虚拟IP。',
            'type' => 'string',
            'required' => false,
            'example' => 'EIP',
          ),
        ),
        8 => 
        array (
          'name' => 'SgStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全组策略状态。取值：

- **pass**：已下发。
- **block**：未下发。
- **unsupport**：不支持。
>不设置该参数表示查询所有安全组策略状态。',
            'type' => 'string',
            'required' => false,
            'example' => 'pass',
          ),
        ),
        9 => 
        array (
          'name' => 'IpVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云防火墙防护的资产的IP版本。取值：

- **4**（默认）：IPv4。
- **6**：IPv6。',
            'type' => 'string',
            'required' => false,
            'example' => '4',
          ),
        ),
        10 => 
        array (
          'name' => 'MemberUid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云防火墙成员账号的UID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '258039427902****',
          ),
        ),
        11 => 
        array (
          'name' => 'UserType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户类型。取值：

- **buy**（默认）：付费用户。
- **free**：免费用户。',
            'type' => 'string',
            'required' => false,
            'example' => 'buy',
          ),
        ),
        12 => 
        array (
          'name' => 'NewResourceTag',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资产发现的时间。取值：
- **discovered in 1 hour**：资产是1小时内新增的。
- **discovered in 1 day**：资产是1天内新增的。
- **discovered in 7 days**：资产是7天内新增的。',
            'type' => 'string',
            'required' => false,
            'example' => 'discovered in 1 hour',
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
                'description' => '云防火墙防护的资产总数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '12',
              ),
              'RequestId' => 
              array (
                'description' => '结果的请求ID。',
                'type' => 'string',
                'example' => 'CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D',
              ),
              'Assets' => 
              array (
                'description' => '云防火墙防护的资产信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RiskLevel' => 
                    array (
                      'description' => '资产的风险级别。取值：

- **low**：低风险。

- **middle**：中风险。

- **hight**：高风险。

> 仅当UserType的值为free时，才会返回该参数。',
                      'type' => 'string',
                      'example' => 'low',
                    ),
                    'BindInstanceName' => 
                    array (
                      'description' => '绑定资产实例名称。',
                      'type' => 'string',
                      'example' => 'instance01',
                    ),
                    'Type' => 
                    array (
                      'description' => '该参数已废弃。',
                      'type' => 'string',
                      'example' => 'eip',
                    ),
                    'SgStatusTime' => 
                    array (
                      'description' => '最近一次安全组状态检测时间，使用时间戳格式。单位：秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1615082937',
                    ),
                    'ResourceInstanceId' => 
                    array (
                      'description' => '资产实例ID。',
                      'type' => 'string',
                      'example' => 'i-8vbdrjrxzt78****',
                    ),
                    'MemberUid' => 
                    array (
                      'description' => '云防火墙成员账号的UID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '258039427902****',
                    ),
                    'IntranetAddress' => 
                    array (
                      'description' => '服务器内网IP。',
                      'type' => 'string',
                      'example' => '192.168.XX.XX',
                    ),
                    'SyncStatus' => 
                    array (
                      'description' => '资产引流支持状态。取值：

- **enable**：支持引流。
- **disable**：不支持引流。
',
                      'type' => 'string',
                      'example' => 'enable',
                    ),
                    'AliUid' => 
                    array (
                      'description' => '阿里云账号的UID。

> 云防火墙成员账号的主账号。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '158039427902****',
                    ),
                    'ProtectStatus' => 
                    array (
                      'description' => '防火墙状态。取值：

- **open**：保护中。
- **opening**：保护开启中。
- **closed**：未受保护。
- **closing**：保护关闭中。
',
                      'type' => 'string',
                      'example' => 'open',
                    ),
                    'InternetAddress' => 
                    array (
                      'description' => '服务器公网IP。',
                      'type' => 'string',
                      'example' => '192.0.XX.XX',
                    ),
                    'BindInstanceId' => 
                    array (
                      'description' => '绑定资产实例ID。',
                      'type' => 'string',
                      'example' => 'i-8vbdrjrxzt78****',
                    ),
                    'RegionID' => 
                    array (
                      'description' => '资产所在的地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'RegionStatus' => 
                    array (
                      'description' => '资产所在地域是否支持开启云防火墙防护状态。取值：

- **enable**：支持。
- **disable**：不支持。
',
                      'type' => 'string',
                      'example' => 'enable',
                    ),
                    'ResourceType' => 
                    array (
                      'description' => '资产类型。取值：


- **BastionHostEgressIP**：堡垒机出口IP。
- **BastionHostIngressIP**：堡垒机入口IP。
- **EcsEIP**：ECS EIP。
- **EcsPublicIP**：ECS公网IP。
- **EIP**：弹性公网IP。
- **EniEIP**：弹性网卡EIP。
- **NatEIP**：NAT EIP。
- **SlbEIP**：SLB EIP。
- **SlbPublicIP**：SLB公网IP。
- **NatPublicIP**：NAT公网IP。
- **HAVIP**：高可用虚拟IP。',
                      'type' => 'string',
                      'example' => 'EIP',
                    ),
                    'IpVersion' => 
                    array (
                      'description' => '云防火墙防护的资产的IP地址版本。

取值：

- **4**：表示IPv4地址。

- **6**：表示IPv6地址。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '4',
                    ),
                    'SgStatus' => 
                    array (
                      'description' => '安全组策略。取值：

- **pass**：已下发。
- **block**：未下发。
- **unsupport**：不支持。',
                      'type' => 'string',
                      'example' => 'block',
                    ),
                    'Note' => 
                    array (
                      'description' => '资产的备注信息。取值：

- **REGION\\_NOT\\_SUPPORT**：地域不支持。
- **NETWORK\\_NOT\\_SUPPORT**：网络不支持。',
                      'type' => 'string',
                      'example' => 'REGION_NOT_SUPPORT',
                    ),
                    'Name' => 
                    array (
                      'description' => '云防火墙防护的资产的实例名称。',
                      'type' => 'string',
                      'example' => 'instance01',
                    ),
                    'CreateTimeStamp' => 
                    array (
                      'description' => '云防火墙发现资产的时间。',
                      'type' => 'string',
                      'example' => '2023-02-28 10:29:58',
                    ),
                    'NewResourceTag' => 
                    array (
                      'description' => '资产发现的时间。取值：
- **discovered in 1 hour**：资产是1小时内新增的。
- **discovered in 1 day**：资产是1天内新增的。
- **discovered in 7 days**：资产是7天内新增的。',
                      'type' => 'string',
                      'example' => 'discovered in 1 hour',
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
            'errorCode' => 'ErrorDBSelect',
            'errorMessage' => 'An error occurred while querying database.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 12,\\n  \\"RequestId\\": \\"CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D\\",\\n  \\"Assets\\": [\\n    {\\n      \\"RiskLevel\\": \\"low\\",\\n      \\"BindInstanceName\\": \\"instance01\\",\\n      \\"Type\\": \\"eip\\",\\n      \\"SgStatusTime\\": 1615082937,\\n      \\"ResourceInstanceId\\": \\"i-8vbdrjrxzt78****\\",\\n      \\"MemberUid\\": 0,\\n      \\"IntranetAddress\\": \\"192.168.XX.XX\\",\\n      \\"SyncStatus\\": \\"enable\\",\\n      \\"AliUid\\": 0,\\n      \\"ProtectStatus\\": \\"open\\",\\n      \\"InternetAddress\\": \\"192.0.XX.XX\\",\\n      \\"BindInstanceId\\": \\"i-8vbdrjrxzt78****\\",\\n      \\"RegionID\\": \\"cn-hangzhou\\",\\n      \\"RegionStatus\\": \\"enable\\",\\n      \\"ResourceType\\": \\"EIP\\",\\n      \\"IpVersion\\": 4,\\n      \\"SgStatus\\": \\"block\\",\\n      \\"Note\\": \\"REGION_NOT_SUPPORT\\",\\n      \\"Name\\": \\"instance01\\",\\n      \\"CreateTimeStamp\\": \\"2023-02-28 10:29:58\\",\\n      \\"NewResourceTag\\": \\"discovered in 1 hour\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeAssetListResponse>\\n    <TotalCount>12</TotalCount>\\n    <RequestId>CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D</RequestId>\\n    <Assets>\\n        <RiskLevel>low</RiskLevel>\\n        <BindInstanceName>instance01</BindInstanceName>\\n        <Type>eip</Type>\\n        <SgStatusTime>1615082937</SgStatusTime>\\n        <ResourceInstanceId>i-8vbdrjrxzt78****</ResourceInstanceId>\\n        <IntranetAddress>192.168.XX.XX</IntranetAddress>\\n        <SyncStatus>enable</SyncStatus>\\n        <ProtectStatus>open</ProtectStatus>\\n        <InternetAddress>192.0.XX.XX</InternetAddress>\\n        <BindInstanceId>i-8vbdrjrxzt78****</BindInstanceId>\\n        <RegionID>cn-hangzhou</RegionID>\\n        <RegionStatus>enable</RegionStatus>\\n        <ResourceType>EIP</ResourceType>\\n        <IpVersion>4</IpVersion>\\n        <SgStatus>block</SgStatus>\\n        <Note>REGION_NOT_SUPPORT</Note>\\n        <Name>instance01</Name>\\n    </Assets>\\n</DescribeAssetListResponse>","errorExample":""}]',
      'title' => '查询云防火墙防护的资产的信息',
      'summary' => '查询云防火墙防护的资产的信息。',
      'description' => '本接口一般用于分页查询云防火墙防护的资产的信息。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'PutDisableFwSwitch' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '68509',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcfwEWN5PJ',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SourceIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问者源IP地址。',
            'type' => 'string',
            'deprecated' => true,
            'required' => false,
            'example' => '192.0.XX.XX',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收消息的语言类型。取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'IpaddrList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'IP地址列表。
> IpaddrList、RegionList、ResourceTypeList三个参数不允许同时为空，必须为其中一个参数设置取值。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'IP地址。',
              'type' => 'string',
              'required' => false,
              'example' => '192.0.XX.XX',
            ),
            'required' => false,
            'example' => '["192.0.XX.XX","192.0.XX.XX"]',
            'maxItems' => 200,
          ),
        ),
        3 => 
        array (
          'name' => 'RegionList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '区域列表。
> IpaddrList、RegionList、ResourceTypeList三个参数不允许同时为空，必须为其中一个参数设置取值。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '区域ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'cn-hangzhou',
            ),
            'required' => false,
            'example' => '["cn-hangzhou","cn-shanghai"]',
            'maxItems' => 200,
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceTypeList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资产类型列表。

> IpaddrList、RegionList、ResourceTypeList三个参数不允许同时为空，必须为其中一个参数设置取值。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资产类型。取值：

- BastionHostIP：堡垒机出口IP。
- BastionHostIngressIP：堡垒机入口IP。 
- EcsEIP：ECS EIP。
- EcsPublicIP ：ECS公网IP。
- EIP：弹性公网IP。
- EniEIP：弹性网卡EIP。
- NatEIP：NAT EIP。
- SlbEIP：SLB EIP。
- SlbPublicIP：SLB公网IP。
- NatPublicIP：NAT公网IP。
- HAVIP：高可用虚拟IP。',
              'type' => 'string',
              'required' => false,
              'example' => 'EcsPublicIP',
            ),
            'required' => false,
            'example' => '["EcsPublicIp","NatEip"]',
            'maxItems' => 200,
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'B2841452-CB8D-4F7D-B247-38E1CF7334F8',
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
            'errorCode' => 'ErrorParamsNotEnough',
            'errorMessage' => 'Parameters are insufficient.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorDBSelect',
            'errorMessage' => 'An error occurred while querying database.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorInstanceStatusNotNormal',
            'errorMessage' => 'This operation is not supported when the instance is in the current state.',
          ),
          3 => 
          array (
            'errorCode' => 'ErrorRecordLog',
            'errorMessage' => 'An error occurred while updating the operation log.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'ErrorAuthentication',
            'errorMessage' => 'An authentication error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B2841452-CB8D-4F7D-B247-38E1CF7334F8\\"\\n}","errorExample":""},{"type":"xml","example":"<PutDisableFwSwitchResponse>\\n    <RequestId>B2841452-CB8D-4F7D-B247-38E1CF7334F8</RequestId>\\n</PutDisableFwSwitchResponse>","errorExample":""}]',
      'title' => '关闭防火墙开关',
      'summary' => '关闭防火墙开关。',
      'description' => '本接口用于关闭防火墙开关，关闭防火墙开关后流量不经过云防火墙。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~94763~~)。
调用API的请求格式，请参见本文**示例**中的请求示例。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'PutEnableAllFwSwitch' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '68511',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcfwEWN5PJ',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SourceIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问者源IP地址。',
            'type' => 'string',
            'deprecated' => true,
            'required' => false,
            'example' => '192.0.XX.XX',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云防火墙的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'i-2ze8v2x5kd9qyvp2****',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'B2841452-CB8D-4F7D-B247-38E1CF7334F8',
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
            'errorCode' => 'ErrorParamsNotEnough',
            'errorMessage' => 'Parameters are insufficient.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorInstanceStatusNotNormal',
            'errorMessage' => 'This operation is not supported when the instance is in the current state.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorInstanceOpenIpNumExceed',
            'errorMessage' => 'The maximum number of protected assets has been reached.',
          ),
          3 => 
          array (
            'errorCode' => 'ErrorRecordLog',
            'errorMessage' => 'An error occurred while updating the operation log.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B2841452-CB8D-4F7D-B247-38E1CF7334F8\\"\\n}","errorExample":""},{"type":"xml","example":"<PutEnableAllFwSwitchResponse>\\n    <RequestId>B2841452-CB8D-4F7D-B247-38E1CF7334F8</RequestId>\\n</PutEnableAllFwSwitchResponse>","errorExample":""}]',
      'title' => '开启所有防火墙开关',
      'summary' => '开启所有防火墙开关。',
      'description' => '本接口用于防护您阿里云账号的所有公网IP。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~94763~~)。
调用API的请求格式，请参见本文**示例**中的请求示例。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'PutEnableFwSwitch' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SourceIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问者源IP地址。',
            'type' => 'string',
            'deprecated' => true,
            'required' => false,
            'example' => '192.0.X.X',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收消息的语言类型。

- **zh**：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'IpaddrList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'IP地址列表。

> IpaddrList、RegionList、ResourceTypeList三个参数不允许同时为空，必须为其中一个参数设置取值。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'IP地址列表。

> IpaddrList、RegionList、ResourceTypeList三个参数不允许同时为空，必须为其中一个参数设置取值。',
              'type' => 'string',
              'required' => false,
              'example' => '["192.0.XX.XX","192.0.XX.XX"]',
            ),
            'required' => false,
            'example' => '["192.0.X.X","192.0.X.X"]',
            'maxItems' => 200,
          ),
        ),
        3 => 
        array (
          'name' => 'RegionList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '区域列表。

> IpaddrList、RegionList、ResourceTypeList三个参数不允许同时为空，必须为其中一个参数设置取值。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '区域列表。

> IpaddrList、RegionList、ResourceTypeList三个参数不允许同时为空，必须为其中一个参数设置取值。',
              'type' => 'string',
              'required' => false,
              'example' => 'cn-hangzhou,cn-shanghai',
            ),
            'required' => false,
            'example' => '["cn-hangzhou","cn-shanghai"]',
            'maxItems' => 200,
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceTypeList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资产类型列表。

取值：
- BastionHostIP：堡垒机出口IP。
- BastionHostIngressIP：堡垒机入口IP。 
- EcsEIP：ECS EIP。
- EcsPublicIP ：ECS公网IP。
- EIP：弹性公网IP。
- EniEIP：弹性网卡EIP。
- NatEIP：NAT EIP。
- SlbEIP：SLB EIP。
- SlbPublicIP：SLB公网IP。
- NatPublicIP：NAT公网IP。
- HAVIP：高可用虚拟IP。

> IpaddrList、RegionList、ResourceTypeList三个参数不允许同时为空，必须为其中一个参数设置取值。
',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资产类型列表。

取值：
- BastionHostIP：堡垒机出口IP。
- BastionHostIngressIP：堡垒机入口IP。 
- EcsEIP：ECS EIP。
- EcsPublicIP ：ECS公网IP。
- EIP：弹性公网IP。
- EniEIP：弹性网卡EIP。
- NatEIP：NAT EIP。
- SlbEIP：SLB EIP。
- SlbPublicIP：SLB公网IP。
- NatPublicIP：NAT公网IP。
- HAVIP：高可用虚拟IP。

> IpaddrList、RegionList、ResourceTypeList三个参数不允许同时为空，必须为其中一个参数设置取值。
',
              'type' => 'string',
              'required' => false,
              'example' => 'EcsPublicIp,NatEip',
            ),
            'required' => false,
            'example' => '["EcsPublicIp","NatEip"]',
            'maxItems' => 200,
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
                'example' => 'B2841452-CB8D-4F7D-B247-38E1CF7334F8',
              ),
              'AbnormalResourceStatusList' => 
              array (
                'description' => '资产未同步时的状态信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Resource' => 
                    array (
                      'description' => '资产IP。',
                      'type' => 'string',
                      'example' => '203.0.113.0',
                    ),
                    'Status' => 
                    array (
                      'description' => '资产未同步时的状态。取值：
- ip_not_sync：资产未同步。',
                      'type' => 'string',
                      'example' => 'ip_not_sync',
                    ),
                    'Msg' => 
                    array (
                      'description' => '资产未同步时的信息。取值：
- cloudfirewall do not sync this ip address：云防火墙没有同步这个资产IP。',
                      'type' => 'string',
                      'example' => 'cloudfirewall do not sync this ip address',
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
            'errorCode' => 'ErrorInstanceOpenIpNumExceed',
            'errorMessage' => 'The maximum number of protected assets has been reached.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorInstanceStatusNotNormal',
            'errorMessage' => 'This operation is not supported when the instance is in the current state.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorParamsNotEnough',
            'errorMessage' => 'Parameters are insufficient.',
          ),
          3 => 
          array (
            'errorCode' => 'ErrorDBTxError',
            'errorMessage' => 'A database transaction error occurred.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'ErrorAuthentication',
            'errorMessage' => 'An authentication error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B2841452-CB8D-4F7D-B247-38E1CF7334F8\\",\\n  \\"AbnormalResourceStatusList\\": [\\n    {\\n      \\"Resource\\": \\"203.0.113.0\\",\\n      \\"Status\\": \\"ip_not_sync\\",\\n      \\"Msg\\": \\"cloudfirewall do not sync this ip address\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<PutEnableFwSwitchResponse>\\n    <RequestId>B2841452-CB8D-4F7D-B247-38E1CF7334F8</RequestId>\\n</PutEnableFwSwitchResponse>","errorExample":""}]',
      'title' => '开启防火墙开关',
      'summary' => '开启防火墙开关。',
      'description' => '本接口用于开启防火墙开关，防火墙开关开启后流量才会经过云防火墙。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'PutDisableAllFwSwitch' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '68508',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcfwEWN5PJ',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SourceIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问者源IP地址。',
            'type' => 'string',
            'deprecated' => true,
            'required' => false,
            'example' => '192.0.XX.XX',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云防火墙的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'i-2ze8v2x5kd9qyvp2****',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'B2841452-CB8D-4F7D-B247-38E1CF7334F8',
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
            'errorCode' => 'ErrorParamsNotEnough',
            'errorMessage' => 'Parameters are insufficient.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorDBSelect',
            'errorMessage' => 'An error occurred while querying database.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorInstanceStatusNotNormal',
            'errorMessage' => 'This operation is not supported when the instance is in the current state.',
          ),
          3 => 
          array (
            'errorCode' => 'ErrorRecordLog',
            'errorMessage' => 'An error occurred while updating the operation log.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'ErrorAuthentication',
            'errorMessage' => 'An authentication error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B2841452-CB8D-4F7D-B247-38E1CF7334F8\\"\\n}","errorExample":""},{"type":"xml","example":"<PutDisableAllFwSwitchResponse>\\r\\n<RequestId>B2841452-CB8D-4F7D-B247-38E1CF7334F8</RequestId>\\r\\n</PutDisableAllFwSwitchResponse>","errorExample":""}]',
      'title' => '关闭所有防火墙开关',
      'summary' => '关闭所有防火墙开关。',
      'description' => '本接口用于关闭所有防火墙开关。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~94763~~)。 
调用API的请求格式，请参见本文**示例**中的请求示例。',
      'extraInfo' => ' ',
    ),
    'CreateNatFirewallControlPolicy' => 
    array (
      'summary' => '添加NAT防火墙访问控制策略。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '170916',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcfw7YI1ZZ',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收消息的语言类型。

取值：

- **zh**：（默认）中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'AclAction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全访问控制策略中访问流量通过云防火墙的方式（动作）。

取值：

- **accept**：放行
- **drop**：拒绝
- **log**：观察',
            'type' => 'string',
            'required' => true,
            'example' => 'log',
          ),
        ),
        2 => 
        array (
          'name' => 'ApplicationNameList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '访问控制策略支持的应用类型列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '访问控制策略支持的应用类型。',
              'type' => 'string',
              'required' => false,
              'example' => 'ANY',
            ),
            'required' => true,
            'maxItems' => 5,
          ),
        ),
        3 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的描述信息。',
            'type' => 'string',
            'required' => true,
            'example' => '放行流量',
          ),
        ),
        4 => 
        array (
          'name' => 'DestPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略中流量访问的目的端口。取值：

- 当协议类型为ICMP时，DestPort取值为空。
   
> 协议类型为ICMP时，不支持对目的端口进行访问控制。

- 当协议类型为TCP、UDP或ANY时，并且目的端口类型（DestPortType）为group时，DestPort取值为空。

> 访问控制策略目的端口类型选择group（目的端口地址簿）时，您无需设置具体的目的端口号。需要该访问控制策略管控的所有端口会包含在目的端口地址簿中。

- 当协议类型为TCP、UDP或ANY时，并且目的端口类型（DestPortType）为port时，DestPort取值为目的端口号。
',
            'type' => 'string',
            'required' => false,
            'example' => '80',
          ),
        ),
        5 => 
        array (
          'name' => 'Destination',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略中的目的地址段。

取值：
- 当DestinationType为net时，Destination为目的CIDR。
  
  例如：1.2.XX.XX/24

- 当DestinationType为group时，Destination为目的地址簿名称。

  例如：db_group

- 当DestinationType为domain时，Destination为目的域名。

  例如：*.aliyuncs.com

- 当DestinationType为location时，Destination为目的区域。

  例如： \\["BJ11", "ZB"\\]',
            'type' => 'string',
            'required' => true,
            'example' => 'XX.XX.XX.XX/24',
          ),
        ),
        6 => 
        array (
          'name' => 'DestinationType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略中的目的地址类型。

取值：

- **net**：目的网段（CIDR地址）
- **group**：目的地址簿
- **domain**：目的域名',
            'type' => 'string',
            'required' => true,
            'example' => 'net',
          ),
        ),
        7 => 
        array (
          'name' => 'NatGatewayId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'NAT网关的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ngx-xxxxxxx',
          ),
        ),
        8 => 
        array (
          'name' => 'Proto',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略中流量访问的安全协议类型。

取值：

- ANY（表示查询所有协议类型）
- TCP
- UDP
- ICMP',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'ANY',
          ),
        ),
        9 => 
        array (
          'name' => 'Source',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略中的源地址。

取值：

- 当**SourceType**为`net`时，Source为源CIDR地址。

  例如：10.2.4.0/24

- 当**SourceType**为`group`时，Source为源地址簿名称。

  例如：db_group',
            'type' => 'string',
            'required' => true,
            'example' => '192.168.0.25/32',
          ),
        ),
        10 => 
        array (
          'name' => 'SourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略中的源地址类型。

取值：

- **net**：源网段（CIDR地址）
- **group**：源地址簿
',
            'type' => 'string',
            'required' => true,
            'example' => 'net',
          ),
        ),
        11 => 
        array (
          'name' => 'NewOrder',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略生效的优先级。优先级数字从1开始顺序递增，优先级数字越小，优先级越高。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        12 => 
        array (
          'name' => 'DestPortType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全访问控制策略中访问流量的目的端口类型。

- **port**：端口
- **group**：端口地址簿',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'port',
          ),
        ),
        13 => 
        array (
          'name' => 'DestPortGroup',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略中访问流量的目的端口地址簿名称。


> DestPortType设置为group时，您需要设置目的端口地址簿名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'my_port_group',
          ),
        ),
        14 => 
        array (
          'name' => 'Release',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的启用状态。策略创建后默认启用该策略。取值：

- **true**：启用访问控制策略
- **false**：不启用访问控制策略',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
          ),
        ),
        15 => 
        array (
          'name' => 'DomainResolveType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的域名解析方式。取值：

- **0**：基于FQDN
- **1**：基于DNS动态解析
- **2**：基于FQDN与DNS动态解析',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        16 => 
        array (
          'name' => 'IpVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '支持的IP地址版本。取值：

- **4**（默认）：代表IPv4地址',
            'type' => 'string',
            'required' => false,
            'example' => '4',
          ),
        ),
        17 => 
        array (
          'name' => 'Direction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的流量方向。取值：

- **out**：内对外流量访问控制',
            'type' => 'string',
            'required' => true,
            'example' => 'out',
          ),
        ),
        18 => 
        array (
          'name' => 'RepeatType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的策略有效期的重复类型。取值：
- **Permanent**（默认）：总是
- **None**：指定单次时间
- **Daily**：每天
- **Weekly**：每周
- **Monthly**：每月',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Daily' => '每天',
              'Monthly' => '每月',
              'Permanent' => '总是',
              'Weekly' => '每周',
              'None' => '指定单次时间',
            ),
            'example' => 'Permanent',
          ),
        ),
        19 => 
        array (
          'name' => 'RepeatDays',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '访问控制策略的策略有效期的重复日期集合。
- 当RepeatType为`Permanent`、`None`、`Daily`时，RepeatDays为空集合。
  例如：[]
- 当RepeatType为Weekly时，RepeatDays不能为空。
  例如：[0, 6]
> RepeatType设置为Weekly时，RepeatDays不允许重复。
- 当RepeatType为`Monthly`时，RepeatDays不能为空。
  例如：[1, 31]
> RepeatType设置为Monthly时，RepeatDays不允许重复。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '访问控制策略的策略有效期的重复日期。
> RepeatType设置为Weekly时，取值范围：0~6，每周开始于周日。
> RepeatType设置为Monthly时，取值范围：1~31。',
              'type' => 'integer',
              'format' => 'int64',
              'required' => false,
              'example' => '1',
            ),
            'required' => false,
          ),
        ),
        20 => 
        array (
          'name' => 'RepeatStartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的策略有效期的重复开始时间。例如：08:00，必须为整点或半点时间，且小于重复结束时间至少半小时。
> 当RepeatType为Permanent、None时，RepeatStartTime为空。当RepeatType为Daily、Weekly、Monthly时，RepeatStartTime必须有值，您需要设置重复开始时间。',
            'type' => 'string',
            'required' => false,
            'example' => '08:00',
          ),
        ),
        21 => 
        array (
          'name' => 'RepeatEndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的策略有效期的重复结束时间。例如：23:30，必须为整点或半点时间，且大于重复开始时间至少半小时。
> 当RepeatType为Permanent、None时，RepeatEndTime为空。当RepeatType为Daily、Weekly、Monthly时，RepeatEndTime必须有值，您需要设置重复结束时间。',
            'type' => 'string',
            'required' => false,
            'example' => '23:30',
          ),
        ),
        22 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的策略有效期的开始时间。使用秒级时间戳格式表示。必须为整点或半点时间，且小于结束时间至少半小时。
> 当RepeatType为Permanent时，StartTime为空。当RepeatType为None、Daily、Weekly、Monthly时，StartTime必须有值，您需要设置开始时间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1694761200',
          ),
        ),
        23 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的策略有效期的结束时间。使用秒级时间戳格式表示。必须为整点或半点时间，且大于开始时间至少半小时。
> 当RepeatType为Permanent时，EndTime为空。当RepeatType为None、Daily、Weekly、Monthly时，EndTime必须有值，您需要设置结束时间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1694764800',
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
              'AclUuid' => 
              array (
                'description' => '安全访问控制策略的唯一标识ID。

> 修改安全访问控制策略，需要提供该策略的唯一标识ID，该ID可调用DescribeNatFirewallControlPolicy接口获取。',
                'type' => 'string',
                'example' => '6504d2fb-ab36-49c3-92a6-*****',
              ),
              'RequestId' => 
              array (
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => '0DC783F1-B3A7-578D-8A63-*****',
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
            'errorCode' => 'ErrorParametersUid',
            'errorMessage' => 'The aliUid parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorUUIDNew',
            'errorMessage' => 'The UUID is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorParametersSource',
            'errorMessage' => 'The source is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'ErrorParametersDestination',
            'errorMessage' => 'The Destination parameter is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'ErrorParametersProto',
            'errorMessage' => 'The protocol is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'ErrorParametersDestPort',
            'errorMessage' => 'The dst_port is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'ErrorParametersAction',
            'errorMessage' => 'The action is invalid.',
          ),
          7 => 
          array (
            'errorCode' => 'ErrorParametersAppId',
            'errorMessage' => 'The AppId parameter is incorrect.',
          ),
          8 => 
          array (
            'errorCode' => 'ErrorDBSelect',
            'errorMessage' => 'An error occurred while querying database.',
          ),
          9 => 
          array (
            'errorCode' => 'ErrorParameters',
            'errorMessage' => 'A parameter error occurred.',
          ),
          10 => 
          array (
            'errorCode' => 'ErrorAddressCountExceed',
            'errorMessage' => 'The maximum number of addresses is exceeded.',
          ),
          11 => 
          array (
            'errorCode' => 'ErrorParametersNewOrder',
            'errorMessage' => 'The newOrder is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'ErrorDBInsert',
            'errorMessage' => 'An error occurred while performing an insert operation in the database.',
          ),
          13 => 
          array (
            'errorCode' => 'ErrorDBDelete',
            'errorMessage' => 'An error occurred while deleting the database.',
          ),
          14 => 
          array (
            'errorCode' => 'ErrorRecordLog',
            'errorMessage' => 'An error occurred while updating the operation log.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AclUuid\\": \\"6504d2fb-ab36-49c3-92a6-*****\\",\\n  \\"RequestId\\": \\"0DC783F1-B3A7-578D-8A63-*****\\"\\n}","type":"json"}]',
      'title' => '添加NAT防火墙访问控制策略',
      'description' => '使用本接口创建一条对经过NAT防火墙流量放行、拒绝或观察的策略。',
    ),
    'DescribeNatFirewallControlPolicy' => 
    array (
      'summary' => '获取所有NAT防火墙访问控制策略的信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '171421',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcfw7YI1ZZ',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收消息的语言类型。取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'NatGatewayId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的NAT网关的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ngw-xxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，设置当前页的页码。',
            'type' => 'string',
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
            'description' => '分页查询时，显示的每页数据的最大条数。默认值为10.',
            'type' => 'string',
            'required' => false,
            'example' => '10',
            'default' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'Source',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略中的访问源地址。支持使用模糊查询的方式进行查询。SourceType（源类型）不同，访问源地址的取值也不同。

- 当SourceType为`net`时，访问源为CIDR格式的IP地址段。例如：192.0.XX.XX/24。

- 当SourceType为`group`时，访问源为源地址簿名称。例如：db_group为空（表示查询所有访问控制源）。

- 当SourceType为`location`时，访问源为源区域。例如：北京或beijing（支持使用中文或英文进行查询）。

> 不设置该参数表示查询所有类型的访问源。
',
            'type' => 'string',
            'required' => false,
            'example' => '1.1.1.1/32',
          ),
        ),
        5 => 
        array (
          'name' => 'Destination',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略中的目的地址。支持模糊查询。DestinationType（目的类型）不同，目的地址的取值也不同。

- 当DestinationType为`net`时，目的地址为CIDR格式的IP地址段。例如：10.0.3.0/24。

- 当DestinationType为`domain`时，目的地址为域名。例如：aliyun。

- 当DestinationType为`group`时，目的地址为地址簿的名称。例如：db_group。

- 当DestinationType为`location`时，目的地址为区域名称（具体区域位置编码请参见[AddControlPolicy](~~474128~~)）。例如：["BJ11", "ZB"]。

> 不设置该参数表示查询所有类型的目的地址。',
            'type' => 'string',
            'required' => false,
            'example' => 'x.x.x.x/32',
          ),
        ),
        6 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的描述信息。支持模糊查询。

> 不设置该参数表示查询所有策略的描述信息。
',
            'type' => 'string',
            'required' => false,
            'example' => '描述信息',
          ),
        ),
        7 => 
        array (
          'name' => 'Proto',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略中访问流量的协议类型。取值：

- **TCP**
- **UDP**
- **ICMP**
- **ANY**（表示所有协议类型）
> 不设置该参数表示查询所有协议类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'ANY',
          ),
        ),
        8 => 
        array (
          'name' => 'AclAction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全访问控制策略中访问流量通过云防火墙的方式（动作）。

取值：

- **accept**：放行
- **drop**：拒绝
- **log**：观察',
            'type' => 'string',
            'required' => false,
            'example' => 'accept',
          ),
        ),
        9 => 
        array (
          'name' => 'AclUuid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的唯一标识ID。',
            'type' => 'string',
            'required' => false,
            'example' => '323f0697-2a21-4e43-b142-*****',
          ),
        ),
        10 => 
        array (
          'name' => 'Release',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的启用状态。策略创建后默认启用该策略。取值：

- **true**：启用访问控制策略

- **false**：不启用访问控制策略',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
          ),
        ),
        11 => 
        array (
          'name' => 'Direction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略控制的流量方向。取值：
- **out**：内对外方向的流量访问控制。',
            'type' => 'string',
            'required' => true,
            'example' => 'out',
          ),
        ),
        12 => 
        array (
          'name' => 'RepeatType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的策略有效期的重复类型。取值：
- **Permanent**（默认）：总是
- **None**：指定单次时间
- **Daily**：每天
- **Weekly**：每周
- **Monthly**：每月',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Daily' => '每天',
              'Monthly' => '每月',
              'Permanent' => '总是',
              'Weekly' => '每周',
              'None' => '指定单次时间',
            ),
            'example' => 'Permanent',
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
                'description' => '返回结果的总条数。',
                'type' => 'string',
                'example' => '28',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'F283567D-8A52-5BAE-9472-*****',
              ),
              'Policys' => 
              array (
                'description' => 'NAT防火墙访问控制策略的信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'NAT防火墙访问控制策略的信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Destination' => 
                    array (
                      'description' => '访问控制策略中的目的地址。DestinationType（目的类型）不同，目的地址的取值也不同。取值：

- 当**DestinationType**为**net**时，目的地址为CIDR格式的IP地址段。例如：192.0.XX.XX/24。

- 当**DestinationType**为**domain**时，目的地址为域名。例如：aliyuncs.com。

- 当**DestinationType**为**group**时，目的地址为地址簿的名称。例如：db_group。

- 当**DestinationType**为**location**时，目的地址为区域名称（具体区域位置编码请参见[AddControlPolicy](~~138867~~)）。例如： \\["BJ11", "ZB"\\]。

 ',
                      'type' => 'string',
                      'example' => 'x.x.x.x/32',
                    ),
                    'Order' => 
                    array (
                      'description' => '访问控制策略生效的优先级。

优先级数字从1开始顺序递增，优先级数字越小，优先级越高。
',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'DestPortGroup' => 
                    array (
                      'description' => '访问控制策略中流量访问的目的端口地址簿名称。',
                      'type' => 'string',
                      'example' => 'my_port_group',
                    ),
                    'SourceType' => 
                    array (
                      'description' => '访问控制策略中的源地址类型。取值：

- **net**：源网段（CIDR地址）
- **group**：源地址簿
- **location**：源区域',
                      'type' => 'string',
                      'example' => 'net',
                    ),
                    'DnsResultTime' => 
                    array (
                      'description' => 'DNS解析的时间戳。使用秒级时间戳格式表示。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1579261141',
                    ),
                    'DnsResult' => 
                    array (
                      'description' => 'DNS解析结果。',
                      'type' => 'string',
                      'example' => '111.0.XX.XX,112.0.XX.XX',
                    ),
                    'ApplicationNameList' => 
                    array (
                      'description' => '应用名称，支持多选。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '应用名称，支持多选。',
                        'type' => 'string',
                        'example' => '[\'HTTP\', \'HTTPS\']',
                      ),
                    ),
                    'AclUuid' => 
                    array (
                      'description' => '访问控制策略的唯一标识ID。',
                      'type' => 'string',
                      'example' => '01281255-d220-4db1-8f4f-c4df221a****',
                    ),
                    'DestPortType' => 
                    array (
                      'description' => '访问控制策略中流量访问的目的端口类型。取值：
- **port**：端口
- **group**：端口地址簿',
                      'type' => 'string',
                      'example' => 'port',
                    ),
                    'Source' => 
                    array (
                      'description' => '访问控制策略中的访问源地址。取值：

- 当**SourceType**为`net`时，访问源为CIDR格式的IP地址段。例如：192.0.XX.XX/24。
- 当**SourceType**为`group`时，访问源地址为源地址簿名称。例如：db_group。
- 当**SourceType**为`location`时，访问源地址为区域（具体区域位置编码请参见[AddControlPolicy](~~138867~~)）。例如： \\["BJ11", "ZB"\\]。
',
                      'type' => 'string',
                      'example' => '192.0.XX.XX/24',
                    ),
                    'DestinationType' => 
                    array (
                      'description' => '访问控制策略中的目的地址类型。取值：

- **net**：目的网段（CIDR）
- **group**：目的地址簿
- **domain**：目的域名
- **location**：目的区域',
                      'type' => 'string',
                      'example' => 'net',
                    ),
                    'HitTimes' => 
                    array (
                      'description' => '访问控制策略的命中次数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '100',
                    ),
                    'HitLastTime' => 
                    array (
                      'description' => '最新命中时间戳。使用秒级时间戳格式表示。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1579261141',
                    ),
                    'DestPort' => 
                    array (
                      'description' => '访问控制策略中访问流量的目的端口。',
                      'type' => 'string',
                      'example' => '80',
                    ),
                    'Description' => 
                    array (
                      'description' => '访问控制策略的描述信息。',
                      'type' => 'string',
                      'example' => '描述信息',
                    ),
                    'AclAction' => 
                    array (
                      'description' => '访问控制策略中设置的流量通过云防火墙的方式（动作）。取值：

- **accept**：放行
- **drop**：拒绝
- **log**：观察',
                      'type' => 'string',
                      'example' => 'accept',
                    ),
                    'Proto' => 
                    array (
                      'description' => '访问控制策略中流量访问的安全协议类型。取值：

- **ANY**
- **TCP**
- **UDP**
- **ICMP**',
                      'type' => 'string',
                      'example' => 'TCP',
                    ),
                    'DestinationGroupCidrs' => 
                    array (
                      'description' => '访问控制策略中的目的地址簿中的网段列表。
',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '访问控制策略中的目的地址簿中的网段列表。
',
                        'type' => 'string',
                        'example' => '[
      "112.0.XX.XX/24",
      "112.0.XX.XX/32"
]',
                      ),
                    ),
                    'DestPortGroupPorts' => 
                    array (
                      'description' => '目的端口地址簿中包含的端口列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '目的端口地址簿中包含的端口列表。',
                        'type' => 'string',
                        'example' => '[80,443]',
                      ),
                    ),
                    'SourceGroupCidrs' => 
                    array (
                      'description' => '访问控制策略中的源地址簿中的网段列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '访问控制策略中的源地址簿中的网段列表。',
                        'type' => 'string',
                        'example' => '[\'192.0.XX.XX/24\', \'192.0.XX.XX/32\']',
                      ),
                    ),
                    'Release' => 
                    array (
                      'description' => '访问控制策略的启用状态。策略创建后默认启用该策略。取值：

- **true**：启用访问控制策略

- **false**：不启用访问控制策略',
                      'type' => 'string',
                      'example' => 'true',
                    ),
                    'SourceGroupType' => 
                    array (
                      'description' => '访问控制策略中的源地址簿类型。唯一取值： **ip**。表示IP地址簿，包含一个或多个IP地址段。',
                      'type' => 'string',
                      'example' => 'ip',
                    ),
                    'DestinationGroupType' => 
                    array (
                      'description' => '访问控制策略中的目的地址簿类型。取值：

- **ip**：IP地址簿，包含一个或多个IP地址段。

- **domain**：域名地址簿，包含一个或多个域名地址。',
                      'type' => 'string',
                      'example' => 'ip',
                    ),
                    'NatGatewayId' => 
                    array (
                      'description' => '要查询的NAT网关的ID。',
                      'type' => 'string',
                      'example' => 'ngw-xxxxxx',
                    ),
                    'DomainResolveType' => 
                    array (
                      'description' => '访问控制策略的域名解析方式。策略创建后默认启用该策略。取值：

- **0**：基于FQDN
- **1**：基于DNS动态解析
- **2**：基于FQDN与DNS动态解析',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'SpreadCnt' => 
                    array (
                      'description' => '占用访问控制策略的规格数，即每条策略占用规格数的累加值。
单条策略占用访问控制策略的规格数=访问源地址段个数 \\* 目的地址个数（IP地址段个数或区域个数或域名个数）\\* 应用数 \\* 端口段个数。',
                      'type' => 'string',
                      'example' => '10,000',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建策略的时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1761062400',
                    ),
                    'ModifyTime' => 
                    array (
                      'description' => '修改策略的时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1761062400',
                    ),
                    'RepeatType' => 
                    array (
                      'description' => '访问控制策略的策略有效期的重复类型。取值：
- **Permanent**（默认）：总是
- **None**：指定单次时间
- **Daily**：每天
- **Weekly**：每周
- **Monthly**：每月',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Daily' => '每天',
                        'Monthly' => '每月',
                        'Permanent' => '总是',
                        'Weekly' => '每周',
                        'None' => '指定单次时间',
                      ),
                      'example' => 'Permanent',
                    ),
                    'RepeatDays' => 
                    array (
                      'description' => '访问控制策略的策略有效期的重复日期集合。
- 当RepeatType为`Permanent`、`None`、`Daily`时，RepeatDays为空集合。
  例如：[]
- 当RepeatType为Weekly时，RepeatDays不能为空。
  例如：[0, 6]
> RepeatType设置为Weekly时，RepeatDays不允许重复。
- 当RepeatType为`Monthly`时，RepeatDays不能为空。
  例如：[1, 31]
> RepeatType设置为Monthly时，RepeatDays不允许重复。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '访问控制策略的策略有效期的重复日期。
> RepeatType设置为Weekly时，取值范围：0~6，每周开始于周日。
> RepeatType设置为Monthly时，取值范围：1~31。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1',
                      ),
                    ),
                    'RepeatStartTime' => 
                    array (
                      'description' => '访问控制策略的策略有效期的重复开始时间。例如：08:00，必须为整点或半点时间，且小于重复结束时间至少半小时。
> 当RepeatType为Permanent、None时，RepeatStartTime为空。当RepeatType为Daily、Weekly、Monthly时，RepeatStartTime必须有值，您需要设置重复开始时间。',
                      'type' => 'string',
                      'example' => '08:00',
                    ),
                    'RepeatEndTime' => 
                    array (
                      'description' => '访问控制策略的策略有效期的重复结束时间。例如：23:30，必须为整点或半点时间，且大于重复开始时间至少半小时。
> 当RepeatType为Permanent、None时，RepeatEndTime为空。当RepeatType为Daily、Weekly、Monthly时，RepeatEndTime必须有值，您需要设置重复结束时间。',
                      'type' => 'string',
                      'example' => '23:30',
                    ),
                    'StartTime' => 
                    array (
                      'description' => '访问控制策略的策略有效期的开始时间。使用秒级时间戳格式表示。必须为整点或半点时间，且小于结束时间至少半小时。
> 当RepeatType为Permanent时，StartTime为空。当RepeatType为None、Daily、Weekly、Monthly时，StartTime必须有值，您需要设置开始时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1694761200',
                    ),
                    'EndTime' => 
                    array (
                      'description' => '访问控制策略的策略有效期的结束时间。使用秒级时间戳格式表示。必须为整点或半点时间，且大于开始时间至少半小时。
> 当RepeatType为Permanent时，EndTime为空。当RepeatType为None、Daily、Weekly、Monthly时，EndTime必须有值，您需要设置结束时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1694764800',
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
            'errorCode' => 'ErrorParametersUid',
            'errorMessage' => 'The aliUid parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorParametersPageSizeOrNo',
            'errorMessage' => 'Either pageSize or pageNo is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorParameterIpVersion',
            'errorMessage' => 'The IP version is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'ErrorParametersDirection',
            'errorMessage' => 'The direction is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'ErrorDBSelect',
            'errorMessage' => 'An error occurred while querying database.',
          ),
          5 => 
          array (
            'errorCode' => 'ErrorUnmarshalJSON',
            'errorMessage' => 'An error occurred while parsing JSON.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": \\"28\\",\\n  \\"RequestId\\": \\"F283567D-8A52-5BAE-9472-*****\\",\\n  \\"Policys\\": [\\n    {\\n      \\"Destination\\": \\"x.x.x.x/32\\",\\n      \\"Order\\": 1,\\n      \\"DestPortGroup\\": \\"my_port_group\\",\\n      \\"SourceType\\": \\"net\\",\\n      \\"DnsResultTime\\": 1579261141,\\n      \\"DnsResult\\": \\"111.0.XX.XX,112.0.XX.XX\\",\\n      \\"ApplicationNameList\\": [\\n        \\"[\'HTTP\', \'HTTPS\']\\"\\n      ],\\n      \\"AclUuid\\": \\"01281255-d220-4db1-8f4f-c4df221a****\\",\\n      \\"DestPortType\\": \\"port\\",\\n      \\"Source\\": \\"192.0.XX.XX/24\\",\\n      \\"DestinationType\\": \\"net\\",\\n      \\"HitTimes\\": 100,\\n      \\"HitLastTime\\": 1579261141,\\n      \\"DestPort\\": \\"80\\",\\n      \\"Description\\": \\"描述信息\\",\\n      \\"AclAction\\": \\"accept\\",\\n      \\"Proto\\": \\"TCP\\",\\n      \\"DestinationGroupCidrs\\": [\\n        \\"[\\\\n      \\\\\\"112.0.XX.XX/24\\\\\\",\\\\n      \\\\\\"112.0.XX.XX/32\\\\\\"\\\\n]\\"\\n      ],\\n      \\"DestPortGroupPorts\\": [\\n        \\"[80,443]\\"\\n      ],\\n      \\"SourceGroupCidrs\\": [\\n        \\"[\'192.0.XX.XX/24\', \'192.0.XX.XX/32\']\\"\\n      ],\\n      \\"Release\\": \\"true\\",\\n      \\"SourceGroupType\\": \\"ip\\",\\n      \\"DestinationGroupType\\": \\"ip\\",\\n      \\"NatGatewayId\\": \\"ngw-xxxxxx\\",\\n      \\"DomainResolveType\\": 0,\\n      \\"SpreadCnt\\": \\"10,000\\",\\n      \\"CreateTime\\": 1761062400,\\n      \\"ModifyTime\\": 1761062400,\\n      \\"RepeatType\\": \\"Permanent\\",\\n      \\"RepeatDays\\": [\\n        1\\n      ],\\n      \\"RepeatStartTime\\": \\"08:00\\",\\n      \\"RepeatEndTime\\": \\"23:30\\",\\n      \\"StartTime\\": 1694761200,\\n      \\"EndTime\\": 1694764800\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取所有NAT防火墙访问控制策略的信息',
      'description' => '本接口一般用于分页查询NAT防火墙访问控制策略的信息。',
    ),
    'DescribeNatFirewallPolicyPriorUsed' => 
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
        'abilityTreeCode' => '171493',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcfw7YI1ZZ',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文。
- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'NatGatewayId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'NAT网关的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ngw-xxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'Direction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的流量方向。

取值：

- **out**：内对外流量。',
            'type' => 'string',
            'required' => true,
            'example' => 'out',
          ),
        ),
        3 => 
        array (
          'name' => 'IpVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '支持的IP地址版本。取值：

- **4**（默认）：代表IPv4地址',
            'type' => 'string',
            'required' => false,
            'example' => '4',
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
              'End' => 
              array (
                'description' => '访问控制策略生效的优先级最低值。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '28',
              ),
              'Start' => 
              array (
                'description' => '访问控制策略生效的优先级最高值。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => 'BCDF3907-1011-5504-B015-CC7603C0E6B6',
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
            'errorCode' => 'ErrorParametersUid',
            'errorMessage' => 'The aliUid parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorDBSelect',
            'errorMessage' => 'An error occurred while querying database.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"End\\": 28,\\n  \\"Start\\": 1,\\n  \\"RequestId\\": \\"BCDF3907-1011-5504-B015-CC7603C0E6B6\\"\\n}","type":"json"}]',
      'title' => '查询NAT防火墙访问控制策略优先级使用范围',
      'summary' => '查询NAT防火墙访问控制策略优先级生效范围。',
      'description' => '本接口一般用于查询NAT防火墙内对外流量访问控制策略优先级生效范围。',
    ),
    'ModifyNatFirewallControlPolicyPosition' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '171422',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcfw7YI1ZZ',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收消息的语言类型。取值：
- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'NatGatewayId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => ' NAT网关的ID。 ',
            'type' => 'string',
            'required' => true,
            'example' => 'ngw-xxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'Direction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的流量方向。

取值：

- **out**：内对外流量。',
            'type' => 'string',
            'required' => false,
            'example' => 'out',
            'default' => 'out',
          ),
        ),
        3 => 
        array (
          'name' => 'NewOrder',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '为NAT防火墙IPv4访问控制策略设置一个新的优先级。
优先级使用数字表示，输入数字1表示优先级最高，数字越大优先级越低。

> 新的优先级数字不能超出您已创建的NAT防火墙IPv4策略优先级的范围，否则会导致调用该接口时出错。

建议您在调用该接口前，先调用DescribeNatFirewallPolicyPriorUsed查询NAT防火墙指定流量方向的IPv4策略优先级范围。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '5',
          ),
        ),
        4 => 
        array (
          'name' => 'AclUuid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全访问控制策略的唯一标识ID。',
            'type' => 'string',
            'required' => true,
            'example' => '66461eea-e659-4225-84c9-*****',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '68617208-F5F7-5B44-BB1E-*****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"68617208-F5F7-5B44-BB1E-*****\\"\\n}","type":"json"}]',
      'title' => '修改NAT防火墙访问控制策略的优先级',
      'summary' => '修改NAT防火墙访问控制策略的优先级。',
    ),
    'ModifyNatFirewallControlPolicy' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文。

- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'AclAction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全访问控制策略中流量通过云防火墙的方式。取值：
- **accept**：放行
- **drop**：拒绝
- **log**：观察',
            'type' => 'string',
            'required' => true,
            'example' => 'log',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的描述信息。支持模糊查询。

> 不设置该参数表示查询所有策略的描述信息。
',
            'type' => 'string',
            'required' => true,
            'example' => '描述信息',
          ),
        ),
        3 => 
        array (
          'name' => 'DestPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙访问控制策略中流量访问的目的端口。

> 当**DestPortType**为`port`时，设置该参数。',
            'type' => 'string',
            'required' => false,
            'example' => '80',
          ),
        ),
        4 => 
        array (
          'name' => 'Destination',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全访问控制策略中的目的地址。

- 当**DestinationType**为net时，**Destination**为目的CIDR。例如：1.2.3.4/24
- 当**DestinationType**为group时，**Destination**为目的地址簿名称。例如：db_group
- 当**DestinationType**为domain时，**Destination**为目的域名。例如：*.aliyuncs.com
- 当**DestinationType**为location时，**Destination**为目的区域（具体区域位置编码见后文）。例如： \\["BJ11", "ZB"\\]',
            'type' => 'string',
            'required' => true,
            'example' => 'x.x.x.x/32',
          ),
        ),
        5 => 
        array (
          'name' => 'DestinationType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全访问控制策略中的目的地址类型。取值：

- **net**：目的网段（CIDR）
- **group**：目的地址簿
- **domain**：目的域名
- **location**：目的区域',
            'type' => 'string',
            'required' => true,
            'example' => 'net',
          ),
        ),
        6 => 
        array (
          'name' => 'NatGatewayId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'NAT网关的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ngw-xxxxxx',
          ),
        ),
        7 => 
        array (
          'name' => 'Proto',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全访问控制策略中流量访问的安全协议类型。支持的应用类型有以下几种：

- **ANY**
- **TCP**
- **UDP**
- **ICMP**

> **ANY**表示策略应用在所有类型的应用中。

> 访问的目的地址为域名类型的威胁情报地址簿或云服务地址簿时，可选配置TCP/ANY协议。选择TCP时，应用可选HTTP/HTTPS/SMTP/SMTPS/SSL五种，选择ANY时，应用可选ANY。',
            'type' => 'string',
            'required' => true,
            'example' => 'TCP',
          ),
        ),
        8 => 
        array (
          'name' => 'Source',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略中的源地址。取值：

- 当**SourceType**为`net`时，Source为源CIDR地址，例如：10.2.XX.XX/24

- 当**SourceType**为`group`时，Source为源地址簿名称，例如：db_group。',
            'type' => 'string',
            'required' => true,
            'example' => '10.2.XX.XX/24',
          ),
        ),
        9 => 
        array (
          'name' => 'AclUuid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的唯一标识ID。

删除安全访问控制策略，需要提供该策略的唯一标识ID。您可调用DescribeNatFirewallControlPolicy接口获取该ID。',
            'type' => 'string',
            'required' => true,
            'example' => '63ab1c02-926a-4d1b-9ef7-*****',
          ),
        ),
        10 => 
        array (
          'name' => 'Direction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的流量方向。取值：
- **out**：内对外流量。',
            'type' => 'string',
            'required' => false,
            'example' => 'out',
            'default' => 'out',
          ),
        ),
        11 => 
        array (
          'name' => 'SourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略中的源地址类型。取值：

- **net**：源网段（CIDR地址）
- **group**：源地址簿',
            'type' => 'string',
            'required' => true,
            'example' => 'net',
          ),
        ),
        12 => 
        array (
          'name' => 'DestPortType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全访问控制策略中访问流量的目的端口类型。

- **port**：端口
- **group**：端口地址簿',
            'type' => 'string',
            'required' => false,
            'example' => 'port',
          ),
        ),
        13 => 
        array (
          'name' => 'DestPortGroup',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略中访问流量的目的端口地址簿名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'my_dest_port_group',
          ),
        ),
        14 => 
        array (
          'name' => 'Release',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全访问控制策略的状态。取值：

- **true**：策略开启状态

- **false**：策略关闭状态',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
          ),
        ),
        15 => 
        array (
          'name' => 'ApplicationNameList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'array',
            'items' => 
            array (
              'description' => '访问控制策略支持的应用类型列表。',
              'type' => 'string',
              'required' => false,
              'example' => 'ANY',
            ),
            'required' => false,
            'maxItems' => 5,
          ),
        ),
        16 => 
        array (
          'name' => 'DomainResolveType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的域名解析方式。取值：

- **0**：基于FQDN
- **1**：基于DNS动态解析
- **2**：基于FQDN与DNS动态解析',
            'type' => 'string',
            'required' => false,
            'example' => '0',
          ),
        ),
        17 => 
        array (
          'name' => 'RepeatType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的策略有效期的重复类型。取值：
- **Permanent**（默认）：总是
- **None**：指定单次时间
- **Daily**：每天
- **Weekly**：每周
- **Monthly**：每月',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Daily' => '每天',
              'Monthly' => '每月',
              'Permanent' => '总是',
              'Weekly' => '每周',
              'None' => '指定单次时间',
            ),
            'example' => 'Permanent',
          ),
        ),
        18 => 
        array (
          'name' => 'RepeatDays',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '访问控制策略的策略有效期的重复日期集合。
- 当RepeatType为`Permanent`、`None`、`Daily`时，RepeatDays为空集合。
  例如：[]
- 当RepeatType为Weekly时，RepeatDays不能为空。
  例如：[0, 6]
> RepeatType设置为Weekly时，RepeatDays不允许重复。
- 当RepeatType为`Monthly`时，RepeatDays不能为空。
  例如：[1, 31]
> RepeatType设置为Monthly时，RepeatDays不允许重复。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '访问控制策略的策略有效期的重复日期。
> RepeatType设置为Weekly时，取值范围：0~6，每周开始于周日。
> RepeatType设置为Monthly时，取值范围：1~31。',
              'type' => 'integer',
              'format' => 'int64',
              'required' => false,
              'example' => '1',
            ),
            'required' => false,
          ),
        ),
        19 => 
        array (
          'name' => 'RepeatStartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的策略有效期的重复开始时间。例如：08:00，必须为整点或半点时间，且小于重复结束时间至少半小时。
> 当RepeatType为Permanent、None时，RepeatStartTime为空。当RepeatType为Daily、Weekly、Monthly时，RepeatStartTime必须有值，您需要设置重复开始时间。',
            'type' => 'string',
            'required' => false,
            'example' => '08:00',
          ),
        ),
        20 => 
        array (
          'name' => 'RepeatEndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的策略有效期的重复结束时间。例如：23:30，必须为整点或半点时间，且大于重复开始时间至少半小时。
> 当RepeatType为Permanent、None时，RepeatEndTime为空。当RepeatType为Daily、Weekly、Monthly时，RepeatEndTime必须有值，您需要设置重复结束时间。',
            'type' => 'string',
            'required' => false,
            'example' => '23:30',
          ),
        ),
        21 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的策略有效期的开始时间。使用秒级时间戳格式表示。必须为整点或半点时间，且小于结束时间至少半小时。
> 当RepeatType为Permanent时，StartTime为空。当RepeatType为None、Daily、Weekly、Monthly时，StartTime必须有值，您需要设置开始时间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1694761200',
          ),
        ),
        22 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的策略有效期的结束时间。使用秒级时间戳格式表示。必须为整点或半点时间，且大于开始时间至少半小时。
> 当RepeatType为Permanent时，EndTime为空。当RepeatType为None、Daily、Weekly、Monthly时，EndTime必须有值，您需要设置结束时间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1694764800',
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
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => '3768197C-E6E8-52CD-8358-*****',
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
            'errorCode' => 'ErrorParametersUid',
            'errorMessage' => 'The aliUid parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorDBSelect',
            'errorMessage' => 'An error occurred while querying database.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorParametersAppId',
            'errorMessage' => 'The AppId parameter is incorrect.',
          ),
          3 => 
          array (
            'errorCode' => 'ErrorParametersSource',
            'errorMessage' => 'The source is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'ErrorParametersProto',
            'errorMessage' => 'The protocol is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'ErrorParametersDestination',
            'errorMessage' => 'The Destination parameter is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'ErrorParametersDestPort',
            'errorMessage' => 'The dst_port is invalid.',
          ),
          7 => 
          array (
            'errorCode' => 'ErrorParametersAction',
            'errorMessage' => 'The action is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'ErrorAddressCountExceed',
            'errorMessage' => 'The maximum number of addresses is exceeded.',
          ),
          9 => 
          array (
            'errorCode' => 'ErrorAclNotExist',
            'errorMessage' => 'The ACL does not exist.',
          ),
          10 => 
          array (
            'errorCode' => 'ErrorRecordLog',
            'errorMessage' => 'An error occurred while updating the operation log.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3768197C-E6E8-52CD-8358-*****\\"\\n}","type":"json"}]',
      'title' => '修改NAT防火墙访问控制策略的配置信息',
      'summary' => '修改NAT防火墙安全访问控制策略的配置信息。',
      'description' => '本接口一般用于修改流量通过NAT防火墙方式为放行、拒绝或观察的访问控制策略的配置信息。',
    ),
    'DeleteNatFirewallControlPolicy' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '171413',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcfw7YI1ZZ',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收消息的语言类型。取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'AclUuid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的唯一标识ID。

删除安全访问控制策略，需要提供该策略的唯一标识ID。您可调用DescribeNatFirewallControlPolicy接口获取该ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'b6c8f905-2eb6-442a-ba35-9416e9dbb2c5',
          ),
        ),
        2 => 
        array (
          'name' => 'NatGatewayId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'NAT网关的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ngw-xxxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'Direction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全访问控制策略管控的流量方向。

取值：

- **out**：流量从内到外。',
            'type' => 'string',
            'required' => true,
            'example' => 'out',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '31306819-C4BC-56F3-BBE6-*****',
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
            'errorCode' => 'ErrorParametersUid',
            'errorMessage' => 'The aliUid parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorDBSelect',
            'errorMessage' => 'An error occurred while querying database.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorDBDelete',
            'errorMessage' => 'An error occurred while deleting the database.',
          ),
          3 => 
          array (
            'errorCode' => 'ErrorRecordLog',
            'errorMessage' => 'An error occurred while updating the operation log.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"31306819-C4BC-56F3-BBE6-*****\\"\\n}","type":"json"}]',
      'title' => '删除NAT防火墙访问控制策略',
      'summary' => '删除NAT防火墙访问控制策略。',
      'description' => '本接口一般用于删除NAT防火墙流量方向为内对外的访问控制策略。',
    ),
    'CreateVpcFirewallControlPolicy' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'AclAction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙访问控制策略中设置的流量通过云防火墙的方式（动作）。取值：

- **accept**：放行
- **drop**：拒绝
- **log**：观察',
            'type' => 'string',
            'required' => true,
            'example' => 'accept',
          ),
        ),
        2 => 
        array (
          'name' => 'ApplicationName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙访问控制策略支持的应用类型。取值：

- **FTP**
- **HTTP**
- **HTTPS**
- **MySQL**
- **SMTP**
- **SMTPS**
- **RDP**
- **VNC**
- **SSH**
- **Redis**
- **MQTT**
- **MongoDB**
- **Memcache**
- **SSL**
- **ANY**（表示支持所有的应用类型）
',
            'type' => 'string',
            'required' => false,
            'example' => 'HTTP',
          ),
        ),
        3 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙访问控制策略的描述信息。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        4 => 
        array (
          'name' => 'DestPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙访问控制策略中流量访问的目的端口。

> 当**DestPortType**为`port`时，设置该参数。',
            'type' => 'string',
            'required' => false,
            'example' => '80',
          ),
        ),
        5 => 
        array (
          'name' => 'Destination',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙访问控制策略中流量访问的目的地址。取值：

- 当**DestinationType**为`net`时，**Destination**为目的CIDR地址。

- 当**DestinationType**为`group`时，**Destination**为目的地址簿名称。

- 当**DestinationType**为`domain`时，**Destination**为目的域名。',
            'type' => 'string',
            'required' => true,
            'example' => '10.2.XX.XX/24',
          ),
        ),
        6 => 
        array (
          'name' => 'DestinationType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙访问控制策略中的目的地址类型。取值：

- **net**：目的网段（CIDR）
- **group**：目的地址簿
- **domain**：目的域名
',
            'type' => 'string',
            'required' => true,
            'example' => 'net',
          ),
        ),
        7 => 
        array (
          'name' => 'VpcFirewallId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙访问控制策略组ID。
-  当VPC边界防火墙防护通过云企业网连接的两个VPC之间的流量时，策略组ID使用云企业网实例ID。
  
- 当VPC边界防火墙防护通过高速通道连接的两个VPC之间的流量时，策略组ID使用VPC边界防火墙实例ID。

> 您可以调用[DescribeVpcFirewallAclGroupList](~~159760~~)接口获取该ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'vfw-a42bbb7b887148c9****',
          ),
        ),
        8 => 
        array (
          'name' => 'Proto',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙访问控制策略中流量访问的安全协议类型。取值：

- **ANY**（不确定具体协议类型时可设置为ANY）
- **TCP**
- **UDP**
- **ICMP**',
            'type' => 'string',
            'required' => true,
            'example' => 'TCP',
          ),
        ),
        9 => 
        array (
          'name' => 'Source',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙访问控制策略中的源地址。

- 当SourceType为`net`时，Source为源CIDR。
- 当SourceType为`group`时，Source为源地址簿名称。
',
            'type' => 'string',
            'required' => true,
            'example' => '10.2.XX.XX/24',
          ),
        ),
        10 => 
        array (
          'name' => 'SourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙访问控制策略中的源地址类型。取值：

- **net**：源网段（CIDR）

- **group**：源地址簿
',
            'type' => 'string',
            'required' => true,
            'example' => 'net',
          ),
        ),
        11 => 
        array (
          'name' => 'NewOrder',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙访问控制策略生效的优先级。

优先级数字从1开始顺序递增，优先级数字越小，优先级越高。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        12 => 
        array (
          'name' => 'DestPortType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙访问控制策略中流量访问的目的端口类型。取值：

- **port**：端口
- **group**：端口地址簿',
            'type' => 'string',
            'required' => false,
            'example' => 'port',
          ),
        ),
        13 => 
        array (
          'name' => 'DestPortGroup',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙访问控制策略中流量访问的目的端口地址簿名称。

> 当**DestPortType**为`group`时，设置该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'my_port_group',
          ),
        ),
        14 => 
        array (
          'name' => 'MemberUid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前阿里云账号的成员账号UID。',
            'type' => 'string',
            'required' => false,
            'example' => '258039427902****',
          ),
        ),
        15 => 
        array (
          'name' => 'Release',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的启用状态。策略创建后默认启用该策略。取值：

- **true**：启用访问控制策略
- **false**：不启用访问控制策略',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
          ),
        ),
        16 => 
        array (
          'name' => 'ApplicationNameList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '访问控制策略支持的应用类型列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '访问控制策略支持的应用类型。取值：
- **FTP**
- **HTTP**
- **HTTPS**
- **Memcache**
- **MongoDB**
- **MQTT**
- **MySQL**
- **RDP**
- **Redis**
- **SMTP**
- **SMTPS**
- **SSH**
- **SSL_No_Cert**
- **SSL**
- **VNC**
- **ANY**（表示所有类型的应用）

> 支持的应用类型取值与协议类型（Proto）取值存在依赖关系。Proto为TCP协议时，ApplicationNameList支持选择以上所有应用类型，使用`["HTTP","HTTPS",……]`格式表示；Proto为UDP、ICMP或ANY协议类型时，ApplicationNameList仅支持选择ANY。ApplicationNameList和ApplicationName二选一，必须传其中一个，不能同时为空。当ApplicationNameList和ApplicationName同时传值时，以ApplicationNameList为准。',
              'type' => 'string',
              'required' => false,
              'example' => '[
      "ANY"
]',
            ),
            'required' => false,
            'maxItems' => 5,
          ),
        ),
        17 => 
        array (
          'name' => 'RepeatType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的策略有效期的重复类型。取值：
- **Permanent**（默认）：总是
- **None**：指定单次时间
- **Daily**：每天
- **Weekly**：每周
- **Monthly**：每月',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Daily' => '每天',
              'Monthly' => '每月',
              'Permanent' => '总是',
              'Weekly' => '每周',
              'None' => '指定单次时间',
            ),
            'example' => 'Permanent',
          ),
        ),
        18 => 
        array (
          'name' => 'RepeatDays',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '访问控制策略的策略有效期的重复日期集合。
- 当RepeatType为`Permanent`、`None`、`Daily`时，RepeatDays为空集合。
  例如：[]
- 当RepeatType为Weekly时，RepeatDays不能为空。
  例如：[0, 6]
> RepeatType设置为Weekly时，RepeatDays不允许重复。
- 当RepeatType为`Monthly`时，RepeatDays不能为空。
  例如：[1, 31]
> RepeatType设置为Monthly时，RepeatDays不允许重复。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '访问控制策略的策略有效期的重复日期。
> RepeatType设置为Weekly时，取值范围：0~6，每周开始于周日。
> RepeatType设置为Monthly时，取值范围：1~31。',
              'type' => 'integer',
              'format' => 'int64',
              'required' => false,
              'example' => '1',
            ),
            'required' => false,
          ),
        ),
        19 => 
        array (
          'name' => 'RepeatStartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的策略有效期的重复开始时间。例如：08:00，必须为整点或半点时间，且小于重复结束时间至少半小时。
> 当RepeatType为Permanent、None时，RepeatStartTime为空。当RepeatType为Daily、Weekly、Monthly时，RepeatStartTime必须有值，您需要设置重复开始时间。',
            'type' => 'string',
            'required' => false,
            'example' => '08:00',
          ),
        ),
        20 => 
        array (
          'name' => 'RepeatEndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的策略有效期的重复结束时间。例如：23:30，必须为整点或半点时间，且大于重复开始时间至少半小时。
> 当RepeatType为Permanent、None时，RepeatEndTime为空。当RepeatType为Daily、Weekly、Monthly时，RepeatEndTime必须有值，您需要设置重复结束时间。',
            'type' => 'string',
            'required' => false,
            'example' => '23:30',
          ),
        ),
        21 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的策略有效期的开始时间。使用秒级时间戳格式表示。必须为整点或半点时间，且小于结束时间至少半小时。
> 当RepeatType为Permanent时，StartTime为空。当RepeatType为None、Daily、Weekly、Monthly时，StartTime必须有值，您需要设置开始时间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1694761200',
          ),
        ),
        22 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的策略有效期的结束时间。使用秒级时间戳格式表示。必须为整点或半点时间，且大于开始时间至少半小时。
> 当RepeatType为Permanent时，EndTime为空。当RepeatType为None、Daily、Weekly、Monthly时，EndTime必须有值，您需要设置结束时间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1694764800',
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
              'AclUuid' => 
              array (
                'description' => '安全访问控制策略的唯一标识ID。',
                'type' => 'string',
                'example' => '00281255-d220-4db1-8f4f-c4df221ad84c',
              ),
              'RequestId' => 
              array (
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => 'CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D',
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
            'errorCode' => 'ErrorParametersUid',
            'errorMessage' => 'The aliUid parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorUUIDNew',
            'errorMessage' => 'The UUID is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorParametersSource',
            'errorMessage' => 'The source is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'ErrorParametersDestination',
            'errorMessage' => 'The Destination parameter is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'ErrorParametersProto',
            'errorMessage' => 'The protocol is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'ErrorParametersDestPort',
            'errorMessage' => 'The dst_port is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'ErrorParametersAction',
            'errorMessage' => 'The action is invalid.',
          ),
          7 => 
          array (
            'errorCode' => 'ErrorParametersAppId',
            'errorMessage' => 'The AppId parameter is incorrect.',
          ),
          8 => 
          array (
            'errorCode' => 'ErrorDBSelect',
            'errorMessage' => 'An error occurred while querying database.',
          ),
          9 => 
          array (
            'errorCode' => 'ErrorParameters',
            'errorMessage' => 'A parameter error occurred.',
          ),
          10 => 
          array (
            'errorCode' => 'ErrorAddressCountExceed',
            'errorMessage' => 'The maximum number of addresses is exceeded.',
          ),
          11 => 
          array (
            'errorCode' => 'ErrorParametersNewOrder',
            'errorMessage' => 'The newOrder is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'ErrorDBInsert',
            'errorMessage' => 'An error occurred while performing an insert operation in the database.',
          ),
          13 => 
          array (
            'errorCode' => 'ErrorDBDelete',
            'errorMessage' => 'An error occurred while deleting the database.',
          ),
          14 => 
          array (
            'errorCode' => 'ErrorRecordLog',
            'errorMessage' => 'An error occurred while updating the operation log.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"AclUuid\\": \\"00281255-d220-4db1-8f4f-c4df221ad84c\\",\\n  \\"RequestId\\": \\"CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateVpcFirewallControlPolicyResponse>\\n    <AclUuid>00281255-d220-4db1-8f4f-c4df221ad84c</AclUuid>\\n    <RequestId>CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D</RequestId>\\n</CreateVpcFirewallControlPolicyResponse>","errorExample":""}]',
      'title' => '为指定VPC防火墙策略组添加访问控制策略',
      'summary' => '为指定VPC防火墙策略组添加访问控制策略。',
      'description' => '本接口一般用于为指定VPC边界防火墙策略组添加访问控制策略。VPC边界防火墙防护通过云企业网连接的两个VPC之间的流量或防护通过高速通道连接的两个VPC之间的流量时，使用不同的访问控制策略。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'BatchCopyVpcFirewallControlPolicy' => 
    array (
      'summary' => '从源VPC边界防火墙策略组拷贝所有策略到目标VPC边界防火墙策略组。',
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
      'systemTags' => 
      array (
        'operationType' => 'update',
        'riskType' => 'high',
        'chargeType' => 'free',
        'abilityTreeCode' => '104390',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcfw8B8ITI',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SourceIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问者源IP地址。',
            'type' => 'string',
            'deprecated' => true,
            'required' => false,
            'example' => '192.0.XX.XX',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文。

- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'SourceVpcFirewallId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该操作的源VPC边界防火墙的访问控制策略组ID。取值：

- VPC边界防火墙防护云企业网内的网络实例（网络实例包含VPC、VBR和CCN）和指定VPC之间的互访流量时，策略组ID使用云企业网实例ID。

- VPC边界防火墙防护通过高速通道连接的两个VPC之间的流量时，策略组ID使用VPC边界防火墙实例ID。

> 您可以通过调用[DescribeVpcFirewallAclGroupList](~~159760~~)接口获取该ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'vfw-a42bbb7b887148c9****',
          ),
        ),
        3 => 
        array (
          'name' => 'TargetVpcFirewallId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该操作的目标VPC边界防火墙的访问控制策略组ID。取值：

- VPC边界防火墙防护云企业网内的网络实例（网络实例包含VPC、VBR和CCN）和指定VPC之间的互访流量时，策略组ID使用云企业网实例ID。

- VPC边界防火墙防护通过高速通道连接的两个VPC之间的流量时，策略组ID使用VPC边界防火墙实例ID。

> 您可以通过调用[DescribeVpcFirewallAclGroupList](~~159760~~)接口获取该ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'vfw-e37d3a04cf79446a****',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '850A84D6-0DE4-4797-A1E8-00090125k6j3',
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
            'errorCode' => 'ErrorParametersUid',
            'errorMessage' => 'The aliUid parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorParametersSource',
            'errorMessage' => 'The source is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorDBSelect',
            'errorMessage' => 'An error occurred while querying database.',
          ),
          3 => 
          array (
            'errorCode' => 'ErrorParametersTarget',
            'errorMessage' => 'Target VPC Firewall ID not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'ErrorParametersSourceTarget',
            'errorMessage' => 'Source and target firewall is same.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"850A84D6-0DE4-4797-A1E8-00090125k6j3\\"\\n}","errorExample":""},{"type":"xml","example":"<BatchCopyVpcFirewallControlPolicyResponse>\\n    <RequestId>850A84D6-0DE4-4797-A1E8-00090125k6j3</RequestId>\\n</BatchCopyVpcFirewallControlPolicyResponse>","errorExample":""}]',
      'title' => '从源VPC边界防火墙策略组拷贝所有策略到目标VPC边界防火墙策略组',
      'description' => '本接口一般用于从一个VPC边界防火墙策略组拷贝所有策略到目标VPC边界防火墙策略组。

进行该操作之前，建议您先进行策略备份。关于策略备份的详细信息，请参见[策略备份](~~170363~~)。

该操作完成后，目标VPC边界防火墙策略组内的策略会完全替换成源VPC边界防火墙策略组内的策略。

源VPC边界防火墙策略组和目标VPC边界防火墙策略组必须属于同一个阿里云账号。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
    ),
    'ResetVpcFirewallRuleHitCount' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '68521',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcfw8B8ITI',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。

取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'AclUuid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的唯一标识ID。

重置访问控制策略时，需要提供该策略的唯一标识ID。您可调用[DescribeVpcFirewallControlPolicy](~~159758~~)接口获取该ID。',
            'type' => 'string',
            'required' => true,
            'example' => '00281255-d220-4db1-8f4f-c4df221a****',
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
                'description' => '结果的请求ID。',
                'type' => 'string',
                'example' => 'CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        200 => 
        array (
          0 => 
          array (
            'errorCode' => 'ErrorDBUpdateError',
            'errorMessage' => 'A database update error occurred.',
          ),
        ),
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ErrorParametersUid',
            'errorMessage' => 'The aliUid parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D\\"\\n}","errorExample":""},{"type":"xml","example":"<ResetVpcFirewallRuleHitCountResponse>\\r\\n<RequestId>CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D</RequestId>\\r\\n</ResetVpcFirewallRuleHitCountResponse>","errorExample":""}]',
      'title' => '将VPC防火墙问控制策略命中计数清零',
      'summary' => '将指定的VPC防火墙策略组访问控制策略的命中计数清零。',
      'description' => '本接口一般用于将指定的VPC防火墙策略组访问控制策略的命中计数清零。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeVpcFirewallAclGroupList' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收消息的语言类型。

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'FirewallConfigureStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC防火墙的配置状态。

- **notconfigured**：VPC边界防火墙未配置（即未创建防火墙） 。
- **configured**：VPC边界防火墙已配置（即已创建了防火墙）。
- 不填：表示查询所有VPC边界防火墙的访问控制策略。',
            'type' => 'string',
            'required' => false,
            'example' => 'configured',
          ),
        ),
        2 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，显示的当前页的页码。
默认值为1。',
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
            'description' => '分页查询时，显示的每页数据的最大条数。
可设置值最大为50。',
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
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => 'VPC防火墙访问控制策略组的总数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '结果的请求ID。',
                'type' => 'string',
                'example' => 'CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D',
              ),
              'AclGroupList' => 
              array (
                'description' => 'VPC防火墙访问控制策略组的信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '无',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AclGroupId' => 
                    array (
                      'description' => 'VPC边界防火墙的访问控制策略组ID。

取值：

- VPC边界防火墙防护云企业网时，策略组ID使用云企业网实例ID。

  例如：cen-ervw0g12b5jbw*\\*\\*\\*

- VPC边界防火墙防护高速通道时，策略组ID使用VPC边界防火墙实例ID。

  例如：vfw-a42bbb7b887148c9*\\*\\*\\*',
                      'type' => 'string',
                      'example' => 'vfw-a42bbb7b887148c9****',
                    ),
                    'AclGroupName' => 
                    array (
                      'description' => 'VPC边界防火墙的访问控制策略组名称。

- VPC边界防火墙防护云企业网时，策略组名称使用云企业网名称。
- VPC边界防火墙防护高速通道时，策略组名称使用VPC边界防火墙名称。',
                      'type' => 'string',
                      'example' => 'group_test',
                    ),
                    'MemberUid' => 
                    array (
                      'description' => '当前阿里云账号的成员账号ID。',
                      'type' => 'string',
                      'example' => '258039427902****',
                    ),
                    'AclRuleCount' => 
                    array (
                      'description' => 'VPC边界防火墙访问控制策略组的策略数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '9',
                    ),
                    'IsDefault' => 
                    array (
                      'description' => '是否是默认防火墙。取值：
- **true**：是默认防火墙。
- **false**：不是默认防火墙。',
                      'type' => 'boolean',
                      'enumValueTitles' => 
                      array (
                        'true' => '是默认防火墙',
                        'false' => '不是默认防火墙',
                      ),
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ErrorAliUid',
            'errorMessage' => 'The aliuid is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorDBSelectError',
            'errorMessage' => 'A database select error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorPageNo',
            'errorMessage' => 'Either page number or page size is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D\\",\\n  \\"AclGroupList\\": [\\n    {\\n      \\"AclGroupId\\": \\"vfw-a42bbb7b887148c9****\\",\\n      \\"AclGroupName\\": \\"group_test\\",\\n      \\"MemberUid\\": \\"258039427902****\\",\\n      \\"AclRuleCount\\": 9,\\n      \\"IsDefault\\": true\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeVpcFirewallAclGroupListResponse>\\n    <TotalCount>1</TotalCount>\\n    <RequestId>CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D</RequestId>\\n    <AclGroupList>\\n        <AclGroupId>vfw-a42bbb7b887148c9****</AclGroupId>\\n        <AclGroupName>group_test</AclGroupName>\\n        <MemberUid>258039427902****</MemberUid>\\n    </AclGroupList>\\n</DescribeVpcFirewallAclGroupListResponse>","errorExample":""}]',
      'title' => '获取VPC防火墙所有访问控制策略组信息',
      'summary' => '获取VPC防火墙所有访问控制策略组信息。',
      'description' => '本接口一般用于查询VPC防火墙所有访问控制策略组信息。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeVpcFirewallPolicyPriorUsed' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。

取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'VpcFirewallId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙的访问控制策略组ID。您可调用[DescribeVpcFirewallAclGroupList](~~159760~~)接口获取该ID。

取值：

- VPC边界防火墙防护云企业网时，策略组ID使用云企业网实例ID。

  例如cen-ervw0g12b5jbw*\\*\\*\\*

- VPC边界防火墙防护高速通道时，策略组ID使用VPC边界防火墙实例ID。

   例如vfw-a42bbb7b887148c9*\\*\\*\\*',
            'type' => 'string',
            'required' => true,
            'example' => 'vfw-a42bbb7b887148c9****',
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
              'End' => 
              array (
                'description' => '访问控制策略生效的优先级最低值。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '150',
              ),
              'Start' => 
              array (
                'description' => '访问控制策略生效的优先级最高值。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '结果的请求ID。',
                'type' => 'string',
                'example' => 'CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D',
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
            'errorCode' => 'ErrorParametersUid',
            'errorMessage' => 'The aliUid parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorDBSelect',
            'errorMessage' => 'An error occurred while querying database.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"End\\": 150,\\n  \\"Start\\": 1,\\n  \\"RequestId\\": \\"CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeVpcFirewallPolicyPriorUsedResponse>\\n<RequestId>CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D</RequestId>\\n<Start>1</Start>\\n<End>150</End>\\n</DescribeVpcFirewallPolicyPriorUsedResponse>","errorExample":""}]',
      'title' => '查询VPC防火墙策略组访问控制策略优先级生效范围',
      'summary' => '查询指定VPC防火墙策略组访问控制策略优先级生效范围。',
      'description' => '本接口一般用于查询指定VPC防火墙策略组访问控制策略优先级生效范围。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeVpcFirewallControlPolicy' => 
    array (
      'summary' => '查询指定的VPC边界防火墙的所有访问控制策略信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。

取值：

- **zh**（默认）：中文

- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'VpcFirewallId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙的实例ID。取值：

- 当VPC边界防火墙防护通过云企业网连接的两个VPC之间的流量时，该参数值使用云企业网实例ID。

- 当VPC边界防火墙防护通过高速通道连接的两个VPC之间的流量时，该参数值使用VPC边界防火墙实例ID。

> 您可以调用[DescribeVpcFirewallAclGroupList](~~159760~~)接口获取该ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'vfw-a42bbb7b887148c9****',
          ),
        ),
        2 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，设置当前页的页码。',
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
            'description' => '分页查询时，设置每页包含VPC边界防火墙的访问控制策略数量。

可设置值最大为50。',
            'type' => 'string',
            'required' => true,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'Source',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙访问控制策略中的访问源地址。支持使用模糊查询。

> Source可以是单个CIDR地址或地址簿名称。

',
            'type' => 'string',
            'required' => false,
            'example' => '192.0.XX.XX/24',
          ),
        ),
        5 => 
        array (
          'name' => 'Destination',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙访问控制策略中的目的地址。支持模糊查询。

> Destination可以是单个CIDR地址或域名，也可以是地址薄名称。

',
            'type' => 'string',
            'required' => false,
            'example' => '192.0.XX.XX/24',
          ),
        ),
        6 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙访问控制策略的描述信息。支持模糊查询。
',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        7 => 
        array (
          'name' => 'Proto',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙访问控制策略中访问流量的协议类型。取值：

- **TCP**
- **UDP**
- **ICMP**
- **ANY**（查询所有协议类型）

> 不设置该参数表示查询所有协议类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'TCP',
          ),
        ),
        8 => 
        array (
          'name' => 'AclAction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙访问控制策略中设置的访问流量通过云防火墙的方式（动作）。取值：

- **accept**：放行
- **drop**：拒绝
- **log**：观察

> 不设置该参数表示查询所有动作。
',
            'type' => 'string',
            'required' => false,
            'example' => 'accept',
          ),
        ),
        9 => 
        array (
          'name' => 'MemberUid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前阿里云账号的成员账号UID。',
            'type' => 'string',
            'required' => false,
            'example' => '258039427902****',
          ),
        ),
        10 => 
        array (
          'name' => 'AclUuid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙访问控制策略的唯一标识ID。',
            'type' => 'string',
            'required' => false,
            'example' => '4037fbf7-3e39-4634-92a4-d0155247****',
          ),
        ),
        11 => 
        array (
          'name' => 'Release',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的启用状态。取值：

- **true**：启用访问控制策略
- **false**：不启用访问控制策略',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
          ),
        ),
        12 => 
        array (
          'name' => 'RepeatType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的策略有效期的重复类型。取值：
- **Permanent**（默认）：总是
- **None**：指定单次时间
- **Daily**：每天
- **Weekly**：每周
- **Monthly**：每月',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Daily' => '每天',
              'Monthly' => '每月',
              'Permanent' => '总是',
              'Weekly' => '每周',
              'None' => '指定单次时间',
            ),
            'example' => 'Permanent',
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
                'description' => 'VPC边界防火墙访问控制策略的总数量。',
                'type' => 'string',
                'example' => '20',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D',
              ),
              'Policys' => 
              array (
                'description' => 'VPC边界防火墙访问控制策略的信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Destination' => 
                    array (
                      'description' => 'VPC边界防火墙访问控制策略中的目的地址。取值：

- 当**DestinationType**为`net`时，Destination为目的CIDR地址。

- 当**DestinationType**为`domain`时，Destination为目的域名。

- 当**DestinationType**为`group`时，Destination为目的地址簿名称。
',
                      'type' => 'string',
                      'example' => '192.0.XX.XX/24',
                    ),
                    'Order' => 
                    array (
                      'description' => 'VPC边界防火墙访问控制策略生效的优先级。

优先级数字从1开始顺序递增，优先级数字越小，表示优先级越高。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'DestPortGroup' => 
                    array (
                      'description' => 'VPC边界防火墙访问控制策略中访问流量的目的端口地址簿名称。',
                      'type' => 'string',
                      'example' => 'my_port_group',
                    ),
                    'SourceType' => 
                    array (
                      'description' => 'VPC边界防火墙访问控制策略中源地址类型。取值：

- **net**：源CIDR地址
- **group**：源地址簿
',
                      'type' => 'string',
                      'example' => 'net',
                    ),
                    'ApplicationName' => 
                    array (
                      'description' => 'VPC边界防火墙访问控制策略支持的应用类型，推荐使用ApplicationNameList。取值：

- **HTTP**
- **HTTPS**
- **MySQL**
- **SMTP**
- **SMTPS**
- **RDP**
- **VNC**
- **SSH**
- **Redis**
- **MQTT**
- **MongoDB**
- **Memcache**
- **SSL**
- **ANY**（表示查询访问控制策略所有的应用类型）',
                      'type' => 'string',
                      'example' => 'HTTP',
                    ),
                    'AclUuid' => 
                    array (
                      'description' => 'VPC边界防火墙访问控制策略的唯一标识ID。',
                      'type' => 'string',
                      'example' => '4037fbf7-3e39-4634-92a4-d0155247****',
                    ),
                    'DestPortType' => 
                    array (
                      'description' => 'VPC边界防火墙访问控制策略中访问流量的目的端口类型。取值：
- **port**：单个端口
- **group**：端口地址簿',
                      'type' => 'string',
                      'example' => 'port',
                    ),
                    'Source' => 
                    array (
                      'description' => 'VPC边界防火墙访问控制策略中的访问源地址。取值：

- 当**SourceType**为`net`时，Source为访问源CIDR地址。

- 当**SourceType**为`group`时，Source为地址簿名称。

',
                      'type' => 'string',
                      'example' => '192.0.XX.XX/24',
                    ),
                    'DestinationType' => 
                    array (
                      'description' => 'VPC边界防火墙访问控制策略中目的地址的类型。取值：

- **net**：目的CIDR地址
- **group**：目的地址簿
- **domain**：目的域名
',
                      'type' => 'string',
                      'example' => 'net',
                    ),
                    'HitTimes' => 
                    array (
                      'description' => 'VPC边界防火墙访问控制策略的命中次数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '100',
                    ),
                    'DestPort' => 
                    array (
                      'description' => 'VPC边界防火墙访问控制策略中访问流量的目的端口。',
                      'type' => 'string',
                      'example' => '80',
                    ),
                    'Description' => 
                    array (
                      'description' => 'VPC边界防火墙访问控制策略的描述信息。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'AclAction' => 
                    array (
                      'description' => 'VPC边界防火墙访问控制策略中设置的访问流量通过云防火墙的方式（动作）。取值：

- **accept**：放行
- **drop**：拒绝
- **log**：观察',
                      'type' => 'string',
                      'example' => 'accept',
                    ),
                    'ApplicationId' => 
                    array (
                      'description' => 'VPC边界防火墙访问控制策略中设置访问流量的应用的ID。',
                      'type' => 'string',
                      'example' => '10**',
                    ),
                    'Proto' => 
                    array (
                      'description' => 'VPC边界防火墙访问控制策略中访问流量的协议类型。取值：

- **TCP**
- **UDP**
- **ICMP**
- **ANY**（表示查询所有协议类型）',
                      'type' => 'string',
                      'example' => 'TCP',
                    ),
                    'DestinationGroupCidrs' => 
                    array (
                      'description' => 'VPC边界防火墙访问控制策略中目的地址簿中的网段信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'VPC边界防火墙访问控制策略中目的地址簿中的网段列表。',
                        'type' => 'string',
                        'example' => '["192.0.XX.XX/24", "192.0.XX.XX/32"]',
                      ),
                    ),
                    'DestPortGroupPorts' => 
                    array (
                      'description' => 'VPC边界防火墙访问控制策略中目的端口地址簿的详细信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'VPC边界防火墙访问控制策略中目的端口地址簿中包含的端口列表。',
                        'type' => 'string',
                        'example' => '[80,443]',
                      ),
                    ),
                    'SourceGroupCidrs' => 
                    array (
                      'description' => 'VPC边界防火墙访问控制策略中源地址簿的详细信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'VPC边界防火墙访问控制策略中，源地址簿中的网段列表。',
                        'type' => 'string',
                        'example' => '["192.0.XX.XX/24", "198.51.XX.XX/32"]',
                      ),
                    ),
                    'MemberUid' => 
                    array (
                      'description' => '当前阿里云账号的成员账号UID。',
                      'type' => 'string',
                      'example' => '258039427902****',
                    ),
                    'Release' => 
                    array (
                      'description' => '访问控制策略的启用状态。策略创建后默认启用该策略。取值：

- **true**：启用访问控制策略
- **false**：不启用访问控制策略',
                      'type' => 'string',
                      'example' => 'true',
                    ),
                    'SourceGroupType' => 
                    array (
                      'description' => '访问控制策略中的源地址簿类型。唯一取值： **ip**。表示IP地址簿，包含一个或多个IP地址段。',
                      'type' => 'string',
                      'example' => 'ip',
                    ),
                    'DestinationGroupType' => 
                    array (
                      'description' => '访问控制策略中的目的地址簿类型。取值：

- **ip**：IP地址簿，包含一个或多个IP地址段。
- **domain**：域名地址簿，包含一个或多个域名地址。',
                      'type' => 'string',
                      'example' => 'ip',
                    ),
                    'HitLastTime' => 
                    array (
                      'description' => '最新命中时间戳。使用秒级时间戳格式表示。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1579261141',
                    ),
                    'ModifyTime' => 
                    array (
                      'description' => '修改策略的时间。使用秒级时间戳格式表示。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1761062400',
                    ),
                    'SpreadCnt' => 
                    array (
                      'description' => '占用访问控制策略的规格数，即每条策略占用规格数的累加值。
单条策略占用访问控制策略的规格数=访问源地址段个数 \\* 目的地址个数（IP地址段个数或域名个数）\\* 应用数 \\* 端口段个数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '10,000',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建策略的时间。使用秒级时间戳格式表示。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1761062400',
                    ),
                    'ApplicationNameList' => 
                    array (
                      'description' => '应用名称列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'VPC边界防火墙访问控制策略支持的应用类型列表。取值：

- **HTTP**
- **HTTPS**
- **MySQL**
- **SMTP**
- **SMTPS**
- **RDP**
- **VNC**
- **SSH**
- **Redis**
- **MQTT**
- **MongoDB**
- **Memcache**
- **SSL**
- **ANY**（表示查询访问控制策略所有的应用类型）',
                        'type' => 'string',
                        'example' => '[
    "HTTPS", 
    "SMTPS", 
    "SSL"
]',
                      ),
                    ),
                    'RepeatType' => 
                    array (
                      'description' => '访问控制策略的策略有效期的重复类型。取值：
- **Permanent**（默认）：总是
- **None**：指定单次时间
- **Daily**：每天
- **Weekly**：每周
- **Monthly**：每月',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Daily' => '每天',
                        'Monthly' => '每月',
                        'Permanent' => '总是',
                        'Weekly' => '每周',
                        'None' => '指定单次时间',
                      ),
                      'example' => 'Permanent',
                    ),
                    'RepeatDays' => 
                    array (
                      'description' => '访问控制策略的策略有效期的重复日期集合。
- 当RepeatType为`Permanent`、`None`、`Daily`时，RepeatDays为空集合。
  例如：[]
- 当RepeatType为Weekly时，RepeatDays不能为空。
  例如：[0, 6]
> RepeatType设置为Weekly时，RepeatDays不允许重复。
- 当RepeatType为`Monthly`时，RepeatDays不能为空。
  例如：[1, 31]
> RepeatType设置为Monthly时，RepeatDays不允许重复。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '访问控制策略的策略有效期的重复日期。
> RepeatType设置为Weekly时，取值范围：0~6，每周开始于周日。
> RepeatType设置为Monthly时，取值范围：1~31。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1',
                      ),
                    ),
                    'RepeatStartTime' => 
                    array (
                      'description' => '访问控制策略的策略有效期的重复开始时间。例如：08:00，必须为整点或半点时间，且小于重复结束时间至少半小时。
> 当RepeatType为Permanent、None时，RepeatStartTime为空。当RepeatType为Daily、Weekly、Monthly时，RepeatStartTime必须有值，您需要设置重复开始时间。',
                      'type' => 'string',
                      'example' => '08:00',
                    ),
                    'RepeatEndTime' => 
                    array (
                      'description' => '访问控制策略的策略有效期的重复结束时间。例如：23:30，必须为整点或半点时间，且大于重复开始时间至少半小时。
> 当RepeatType为Permanent、None时，RepeatEndTime为空。当RepeatType为Daily、Weekly、Monthly时，RepeatEndTime必须有值，您需要设置重复结束时间。',
                      'type' => 'string',
                      'example' => '23:30',
                    ),
                    'StartTime' => 
                    array (
                      'description' => '访问控制策略的策略有效期的开始时间。使用秒级时间戳格式表示。必须为整点或半点时间，且小于结束时间至少半小时。
> 当RepeatType为Permanent时，StartTime为空。当RepeatType为None、Daily、Weekly、Monthly时，StartTime必须有值，您需要设置开始时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1694761200',
                    ),
                    'EndTime' => 
                    array (
                      'description' => '访问控制策略的策略有效期的结束时间。使用秒级时间戳格式表示。必须为整点或半点时间，且大于开始时间至少半小时。
> 当RepeatType为Permanent时，EndTime为空。当RepeatType为None、Daily、Weekly、Monthly时，EndTime必须有值，您需要设置结束时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1694764800',
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
            'errorCode' => 'ErrorParametersUid',
            'errorMessage' => 'The aliUid parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorParametersPageSizeOrNo',
            'errorMessage' => 'Either pageSize or pageNo is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorDBSelect',
            'errorMessage' => 'An error occurred while querying database.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": \\"20\\",\\n  \\"RequestId\\": \\"CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D\\",\\n  \\"Policys\\": [\\n    {\\n      \\"Destination\\": \\"192.0.XX.XX/24\\",\\n      \\"Order\\": 1,\\n      \\"DestPortGroup\\": \\"my_port_group\\",\\n      \\"SourceType\\": \\"net\\",\\n      \\"ApplicationName\\": \\"HTTP\\",\\n      \\"AclUuid\\": \\"4037fbf7-3e39-4634-92a4-d0155247****\\",\\n      \\"DestPortType\\": \\"port\\",\\n      \\"Source\\": \\"192.0.XX.XX/24\\",\\n      \\"DestinationType\\": \\"net\\",\\n      \\"HitTimes\\": 100,\\n      \\"DestPort\\": \\"80\\",\\n      \\"Description\\": \\"test\\",\\n      \\"AclAction\\": \\"accept\\",\\n      \\"ApplicationId\\": \\"10**\\",\\n      \\"Proto\\": \\"TCP\\",\\n      \\"DestinationGroupCidrs\\": [\\n        \\"[\\\\\\"192.0.XX.XX/24\\\\\\", \\\\\\"192.0.XX.XX/32\\\\\\"]\\"\\n      ],\\n      \\"DestPortGroupPorts\\": [\\n        \\"[80,443]\\"\\n      ],\\n      \\"SourceGroupCidrs\\": [\\n        \\"[\\\\\\"192.0.XX.XX/24\\\\\\", \\\\\\"198.51.XX.XX/32\\\\\\"]\\"\\n      ],\\n      \\"MemberUid\\": \\"258039427902****\\",\\n      \\"Release\\": \\"true\\",\\n      \\"SourceGroupType\\": \\"ip\\",\\n      \\"DestinationGroupType\\": \\"ip\\",\\n      \\"HitLastTime\\": 1579261141,\\n      \\"ModifyTime\\": 1761062400,\\n      \\"SpreadCnt\\": 0,\\n      \\"CreateTime\\": 1761062400,\\n      \\"ApplicationNameList\\": [\\n        \\"[\\\\n    \\\\\\"HTTPS\\\\\\", \\\\n    \\\\\\"SMTPS\\\\\\", \\\\n    \\\\\\"SSL\\\\\\"\\\\n]\\"\\n      ],\\n      \\"RepeatType\\": \\"Permanent\\",\\n      \\"RepeatDays\\": [\\n        1\\n      ],\\n      \\"RepeatStartTime\\": \\"08:00\\",\\n      \\"RepeatEndTime\\": \\"23:30\\",\\n      \\"StartTime\\": 1694761200,\\n      \\"EndTime\\": 1694764800\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeVpcFirewallControlPolicyResponse>\\n    <TotalCount>20</TotalCount>\\n    <RequestId>CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D</RequestId>\\n    <Policys>\\n        <Destination>192.0.XX.XX/24</Destination>\\n        <Order>1</Order>\\n        <DestPortGroup>my_port_group</DestPortGroup>\\n        <SourceType>net</SourceType>\\n        <ApplicationName>HTTP</ApplicationName>\\n        <AclUuid>4037fbf7-3e39-4634-92a4-d0155247****</AclUuid>\\n        <DestPortType>port</DestPortType>\\n        <Source>192.0.XX.XX/24</Source>\\n        <DestinationType>net</DestinationType>\\n        <HitTimes>100</HitTimes>\\n        <DestPort>80</DestPort>\\n        <Description>test</Description>\\n        <AclAction>accept</AclAction>\\n        <ApplicationId>10**</ApplicationId>\\n        <Proto>TCP</Proto>\\n        <DestinationGroupCidrs>[\\"192.0.XX.XX/24\\", \\"192.0.XX.XX/32\\"]</DestinationGroupCidrs>\\n        <DestPortGroupPorts>[80,443]</DestPortGroupPorts>\\n        <SourceGroupCidrs>[\\"192.0.XX.XX/24\\", \\"198.51.XX.XX/32\\"]</SourceGroupCidrs>\\n        <MemberUid>258039427902****</MemberUid>\\n        <Release>true</Release>\\n        <SourceGroupType>ip</SourceGroupType>\\n        <DestinationGroupType>ip</DestinationGroupType>\\n    </Policys>\\n</DescribeVpcFirewallControlPolicyResponse>","errorExample":""}]',
      'title' => '查询指定的VPC边界防火墙的所有访问控制策略信息',
      'description' => '本接口一般用于查询VPC边界防火墙的访问控制策略。VPC边界防火墙防护通过云企业网连接的两个VPC之间的流量或防护通过高速通道连接的两个VPC之间的流量时，使用不同的访问控制策略。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyVpcFirewallControlPolicyPosition' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '68497',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcfw8B8ITI',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。

取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'VpcFirewallId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙的访问控制策略组ID。您可调用[DescribeVpcFirewallAclGroupList](~~159760~~)接口获取该ID。

取值：

- VPC边界防火墙防护云企业网时，策略组ID使用云企业网实例ID。
  
   例如cen-ervw0g12b5jbw*\\*\\*\\*

- VPC边界防火墙防护高速通道时，策略组ID使用VPC边界防火墙实例ID。

  例如vfw-a42bbb7b887148c9*\\*\\*\\*',
            'type' => 'string',
            'required' => true,
            'example' => 'vfw-a42bbb7b887148c9****',
          ),
        ),
        2 => 
        array (
          'name' => 'NewOrder',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略优先级修改后，该策略的新优先级。
> 新优先级的取值范围，请参见[查询优先级生效范围API](~~474145~~)',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'OldOrder',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略优先级修改前，该策略的原优先级。

> 此参数不推荐使用, 建议使用AclUuid参数指定要修改的策略。',
            'type' => 'string',
            'required' => false,
            'example' => '5',
          ),
        ),
        4 => 
        array (
          'name' => 'AclUuid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的唯一标识ID。

修改访问控制策略时，需要提供该策略的唯一标识ID。您可调用[DescribeVpcFirewallControlPolicy](~~159758~~)接口获取该ID。',
            'type' => 'string',
            'required' => false,
            'example' => '2746d9ff-5d7c-449d-a2a9-ccaa15fe****',
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
                'description' => '结果的请求ID。',
                'type' => 'string',
                'example' => '850A84D6-0DE4-4797-A1E8-00090125EEB1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"850A84D6-0DE4-4797-A1E8-00090125EEB1\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyVpcFirewallControlPolicyPositionResponse>\\n    <RequestId>850A84D6-0DE4-4797-A1E8-00090125EEB1</RequestId>\\n</ModifyVpcFirewallControlPolicyPositionResponse>","errorExample":""}]',
      'title' => '修改VPC防火墙策略组访问控制策略优先级',
      'summary' => '修改指定VPC防火墙策略组访问控制策略的优先级。',
      'description' => '本接口一般用于修改指定VPC防火墙策略组访问控制策略的优先级。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyVpcFirewallControlPolicy' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收消息的语言类型。

取值：

- **zh**：（默认）中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'AclAction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全访问控制策略中访问流量通过云防火墙的方式（动作）。

取值：

- **accept**：放行
- **drop**：拒绝
- **log**：观察',
            'type' => 'string',
            'required' => true,
            'example' => 'accept',
          ),
        ),
        2 => 
        array (
          'name' => 'ApplicationName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略支持的应用类型。

取值：

- ANY（表示查询所有类型的应用）
- FTP
- HTTP
- HTTPS
- MySQL
- SMTP
- SMTPS
- RDP
- VNC
- SSH
- Redis
- MQTT
- MongoDB
- Memcache
- SSL',
            'type' => 'string',
            'required' => false,
            'example' => 'HTTP',
          ),
        ),
        3 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的描述信息。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        4 => 
        array (
          'name' => 'DestPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略中访问流量的目的端口。',
            'type' => 'string',
            'required' => false,
            'example' => '80',
          ),
        ),
        5 => 
        array (
          'name' => 'Destination',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略中的目的地址。

- 当**DestinationType**为`net`时，Destination为目的CIDR地址。
  
  例如：10.2.3.0/24

- 当**DestinationType**为`group`时，Destination为目的地址簿名称。

  例如：db_group

- 当**DestinationType**为`domain`时，Destination为目的域名。

  例如：*.aliyuncs.com
',
            'type' => 'string',
            'required' => true,
            'example' => '10.2.X.X/XX',
          ),
        ),
        6 => 
        array (
          'name' => 'DestinationType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略中的目的地址类型。

取值：

- **net**：目的网段（CIDR地址）
- **group**：目的地址簿
- **domain**：目的域名',
            'type' => 'string',
            'required' => true,
            'example' => 'net',
          ),
        ),
        7 => 
        array (
          'name' => 'VpcFirewallId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙的实例ID。您可调用[DescribeVpcFirewallAclGroupList](~~159760~~)接口获取该ID。

- VPC边界防火墙防护云企业网时，该参数值使用云企业网实例ID。

  例如cen-ervw0g12b5jbw*\\*\\*\\*

- VPC边界防火墙防护高速通道时，该参数值使用VPC边界防火墙实例ID。
  
  例如vfw-a42bbb7b887148c9*\\*\\*\\*',
            'type' => 'string',
            'required' => true,
            'example' => 'vfw-a42bbb7b887148c9****',
          ),
        ),
        8 => 
        array (
          'name' => 'Proto',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略中流量访问的安全协议类型。

取值：

- ANY（表示查询所有协议类型）
- TCP
- UDP
- ICMP',
            'type' => 'string',
            'required' => true,
            'example' => 'TCP',
          ),
        ),
        9 => 
        array (
          'name' => 'Source',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略中的源地址。

取值：

- 当**SourceType**为`net`时，Source为源CIDR地址。

  例如：10.2.4.0/24

- 当**SourceType**为`group`时，Source为源地址簿名称。

  例如：db_group',
            'type' => 'string',
            'required' => true,
            'example' => '10.2.X.X/XX',
          ),
        ),
        10 => 
        array (
          'name' => 'AclUuid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的唯一标识ID。

修改访问控制策略时，需要提供该策略的唯一标识ID。您可调用[DescribeVpcFirewallControlPolicy](~~159758~~)接口获取该ID。',
            'type' => 'string',
            'required' => true,
            'example' => '00281255-d220-4db1-8f4f-c4df221a****',
          ),
        ),
        11 => 
        array (
          'name' => 'SourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略中的源地址类型。

取值：

- **net**：源网段（CIDR地址）
- **group**：源地址簿
',
            'type' => 'string',
            'required' => true,
            'example' => 'net',
          ),
        ),
        12 => 
        array (
          'name' => 'DestPortType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全访问控制策略中访问流量的目的端口类型。

- **port**：端口
- **group**：端口地址簿',
            'type' => 'string',
            'required' => false,
            'example' => 'port',
          ),
        ),
        13 => 
        array (
          'name' => 'DestPortGroup',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略中访问流量的目的端口地址簿名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'my_port_group',
          ),
        ),
        14 => 
        array (
          'name' => 'Release',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的启用状态。策略创建后默认启用该策略。取值：

- **true**：启用访问控制策略
- **false**：不启用访问控制策略',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
          ),
        ),
        15 => 
        array (
          'name' => 'ApplicationNameList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '应用名称列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '应用名称。',
              'type' => 'string',
              'required' => false,
              'example' => '["ANY"]',
            ),
            'required' => false,
            'maxItems' => 5,
          ),
        ),
        16 => 
        array (
          'name' => 'RepeatType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的策略有效期的重复类型。取值：
- **Permanent**（默认）：总是
- **None**：指定单次时间
- **Daily**：每天
- **Weekly**：每周
- **Monthly**：每月',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Daily' => '每天',
              'Monthly' => '每月',
              'Permanent' => '总是',
              'Weekly' => '每周',
              'None' => '指定单次时间',
            ),
            'example' => 'Permanent',
          ),
        ),
        17 => 
        array (
          'name' => 'RepeatDays',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '访问控制策略的策略有效期的重复日期集合。
- 当RepeatType为`Permanent`、`None`、`Daily`时，RepeatDays为空集合。
  例如：[]
- 当RepeatType为Weekly时，RepeatDays不能为空。
  例如：[0, 6]
> RepeatType设置为Weekly时，RepeatDays不允许重复。
- 当RepeatType为`Monthly`时，RepeatDays不能为空。
  例如：[1, 31]
> RepeatType设置为Monthly时，RepeatDays不允许重复。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '访问控制策略的策略有效期的重复日期。
> RepeatType设置为Weekly时，取值范围：0~6，每周开始于周日。
> RepeatType设置为Monthly时，取值范围：1~31。',
              'type' => 'integer',
              'format' => 'int64',
              'required' => false,
              'example' => '1',
            ),
            'required' => false,
          ),
        ),
        18 => 
        array (
          'name' => 'RepeatStartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的策略有效期的重复开始时间。例如：08:00，必须为整点或半点时间，且小于重复结束时间至少半小时。
> 当RepeatType为Permanent、None时，RepeatStartTime为空。当RepeatType为Daily、Weekly、Monthly时，RepeatStartTime必须有值，您需要设置重复开始时间。',
            'type' => 'string',
            'required' => false,
            'example' => '08:00',
          ),
        ),
        19 => 
        array (
          'name' => 'RepeatEndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的策略有效期的重复结束时间。例如：23:30，必须为整点或半点时间，且大于重复开始时间至少半小时。
> 当RepeatType为Permanent、None时，RepeatEndTime为空。当RepeatType为Daily、Weekly、Monthly时，RepeatEndTime必须有值，您需要设置重复结束时间。',
            'type' => 'string',
            'required' => false,
            'example' => '23:30',
          ),
        ),
        20 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的策略有效期的开始时间。使用秒级时间戳格式表示。必须为整点或半点时间，且小于结束时间至少半小时。
> 当RepeatType为Permanent时，StartTime为空。当RepeatType为None、Daily、Weekly、Monthly时，StartTime必须有值，您需要设置开始时间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1694761200',
          ),
        ),
        21 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的策略有效期的结束时间。使用秒级时间戳格式表示。必须为整点或半点时间，且大于开始时间至少半小时。
> 当RepeatType为Permanent时，EndTime为空。当RepeatType为None、Daily、Weekly、Monthly时，EndTime必须有值，您需要设置结束时间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1694764800',
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
                'description' => '结果的请求ID。',
                'type' => 'string',
                'example' => 'CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D',
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
            'errorCode' => 'ErrorParametersUid',
            'errorMessage' => 'The aliUid parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorDBSelect',
            'errorMessage' => 'An error occurred while querying database.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorParametersAppId',
            'errorMessage' => 'The AppId parameter is incorrect.',
          ),
          3 => 
          array (
            'errorCode' => 'ErrorParametersSource',
            'errorMessage' => 'The source is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'ErrorParametersProto',
            'errorMessage' => 'The protocol is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'ErrorParametersDestination',
            'errorMessage' => 'The Destination parameter is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'ErrorParametersDestPort',
            'errorMessage' => 'The dst_port is invalid.',
          ),
          7 => 
          array (
            'errorCode' => 'ErrorParametersAction',
            'errorMessage' => 'The action is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'ErrorAddressCountExceed',
            'errorMessage' => 'The maximum number of addresses is exceeded.',
          ),
          9 => 
          array (
            'errorCode' => 'ErrorAclNotExist',
            'errorMessage' => 'The ACL does not exist.',
          ),
          10 => 
          array (
            'errorCode' => 'ErrorRecordLog',
            'errorMessage' => 'An error occurred while updating the operation log.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyVpcFirewallControlPolicyResponse>\\n    <RequestId>CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D</RequestId>\\n</ModifyVpcFirewallControlPolicyResponse>","errorExample":""}]',
      'title' => '修改VPC防火墙策略组的访问控制策略',
      'summary' => '修改指定VPC防火墙策略组的访问控制策略的配置信息。',
      'description' => '本接口一般用于修改指定VPC防火墙策略组的访问控制策略的配置信息。防护每个云企业网的VPC防火墙实例和防护每个高速通道的VPC防火墙实例使用不同的访问控制策略。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteVpcFirewallControlPolicy' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '68166',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcfw8B8ITI',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。

- **zh**：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'AclUuid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙访问控制策略的唯一标识ID。

删除安全访问控制策略时，需要提供该策略的唯一标识ID。您可调用[DescribeVpcFirewallControlPolicy](~~159758~~)接口获取该ID。',
            'type' => 'string',
            'required' => true,
            'example' => '00281255-d220-4db1-8f4f-c4df2214****',
          ),
        ),
        2 => 
        array (
          'name' => 'VpcFirewallId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙的访问控制策略组ID。您可调用[DescribeVpcFirewallAclGroupList](~~159760~~)接口获取该ID。

取值：

- VPC边界防火墙防护云企业网时，策略组ID使用云企业网实例ID。

   例如：cen-ervw0g12b5jbw*\\*\\*\\*

- VPC边界防火墙防护高速通道时，策略组ID使用VPC边界防火墙实例ID。
  
  例如：vfw-a42bbb7b887148c9*\\*\\*\\*',
            'type' => 'string',
            'required' => true,
            'example' => 'vfw-a42bbb7b887148c91****',
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
                'description' => '结果的请求ID。',
                'type' => 'string',
                'example' => 'CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D',
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
            'errorCode' => 'ErrorParametersUid',
            'errorMessage' => 'The aliUid parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorDBSelect',
            'errorMessage' => 'An error occurred while querying database.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorDBDelete',
            'errorMessage' => 'An error occurred while deleting the database.',
          ),
          3 => 
          array (
            'errorCode' => 'ErrorRecordLog',
            'errorMessage' => 'An error occurred while updating the operation log.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteVpcFirewallControlPolicyResponse>\\r\\n<RequestId>CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D</RequestId>\\r\\n</DeleteVpcFirewallControlPolicyResponse>","errorExample":""}]',
      'title' => '删除VPC防火墙策略组访问控制策略',
      'summary' => '删除指定VPC防火墙策略组的访问控制策略。',
      'description' => '本接口一般用于删除指定VPC防火墙策略组的访问控制策略。防护每个云企业网的VPC防火墙实例和防护每个高速通道的VPC防火墙实例使用不同的访问控制策略。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeACLProtectTrend' => 
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
          'name' => 'SourceIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本参数已废弃。',
            'type' => 'string',
            'required' => false,
            'example' => '223.95.87.130',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文。

- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文。

- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        3 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置查询开始时间。使用秒级时间戳格式表示。',
            'type' => 'string',
            'required' => false,
            'example' => '1677050306',
          ),
        ),
        4 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置查询结束时间。使用秒级时间戳格式表示。',
            'type' => 'string',
            'required' => false,
            'example' => '1670397599',
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
                'description' => '本次调用请求的ID。',
                'type' => 'string',
                'example' => '9063AB86-6FFA-5B2D-A16D-697C966DECA3',
              ),
              'Interval' => 
              array (
                'description' => '返回数据的步长，单位为秒，即每隔多少秒返回一个结果。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '86400',
              ),
              'TotalProtectCnt' => 
              array (
                'description' => '互联网访问控制总拦截数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '300',
              ),
              'InProtectCnt' => 
              array (
                'description' => '互联网访问控制外对内拦截次数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100',
              ),
              'InterVPCProtectCnt' => 
              array (
                'description' => '本参数已废弃。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '0',
              ),
              'OutProtectCnt' => 
              array (
                'description' => '互联网访问控制内对外拦截次数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'TrendList' => 
              array (
                'description' => '互联网访问控制拦截趋势数据列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Time' => 
                    array (
                      'description' => '每天0点的时间戳，单位为秒，表示当天的时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1697299200',
                    ),
                    'ProtectCnt' => 
                    array (
                      'description' => '互联网访问控制当天拦截数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '100',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9063AB86-6FFA-5B2D-A16D-697C966DECA3\\",\\n  \\"Interval\\": 86400,\\n  \\"TotalProtectCnt\\": 300,\\n  \\"InProtectCnt\\": 100,\\n  \\"InterVPCProtectCnt\\": 0,\\n  \\"OutProtectCnt\\": 200,\\n  \\"TrendList\\": [\\n    {\\n      \\"Time\\": 1697299200,\\n      \\"ProtectCnt\\": 100\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询互联网访问控制拦截趋势图',
      'summary' => '查询互联网访问控制拦截趋势图。',
    ),
    'DescribePolicyAdvancedConfig' => 
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
          'name' => 'SourceIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问者源IP地址。',
            'type' => 'string',
            'deprecated' => true,
            'required' => false,
            'example' => '192.0.XX.XX',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
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
              'InternetSwitch' => 
              array (
                'description' => '访问控制策略严格模式的开启状态。取值：
- **on**：严格模式已开启。
- **off**：严格模式已关闭。',
                'type' => 'string',
                'example' => 'off',
              ),
              'RequestId' => 
              array (
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => '850A84D6-0DE4-4797-A1E8-00090125EEB1',
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
            'errorCode' => 'ErrorParametersUid',
            'errorMessage' => 'The aliUid parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorDBSelect',
            'errorMessage' => 'An error occurred while querying database.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"InternetSwitch\\": \\"off\\",\\n  \\"RequestId\\": \\"850A84D6-0DE4-4797-A1E8-00090125EEB1\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribePolicyAdvancedConfigResponse>\\n  <RequestId>850A84D6-0DE4-4797-A1E8-00090125EEB1</RequestId>\\n  <InternetSwitch>off</InternetSwitch>\\n</DescribePolicyAdvancedConfigResponse>","errorExample":""}]',
      'title' => '查询访问控制策略严格模式的开启状态',
      'summary' => '查询访问控制策略严格模式的开启状态。',
      'description' => '本接口一般用于查询访问控制策略严格模式的开启状态。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyPolicyAdvancedConfig' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '68479',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcfwJZTBPW',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SourceIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问者源IP地址。',
            'type' => 'string',
            'deprecated' => true,
            'required' => false,
            'example' => '192.0.XX.XX',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'InternetSwitch',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改访问控制策略严格模式的开关状态。取值：

- **on**：开启严格模式。
- **off**：关闭严格模式。',
            'type' => 'string',
            'required' => true,
            'example' => 'off',
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
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => 'B2841452-CB8D-4F7D-B247-38E1CF7334F8',
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
            'errorCode' => 'ErrorParametersUid',
            'errorMessage' => 'The aliUid parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorParameters',
            'errorMessage' => 'A parameter error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorDBSelect',
            'errorMessage' => 'An error occurred while querying database.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B2841452-CB8D-4F7D-B247-38E1CF7334F8\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyPolicyAdvancedConfigResponse>\\r\\n <RequestId>B2841452-CB8D-4F7D-B247-38E1CF7334F8</RequestId>\\r\\n</ModifyPolicyAdvancedConfigResponse>","errorExample":""}]',
      'title' => '开启或关闭访问控制策略严格模式',
      'summary' => '开启或关闭访问控制策略严格模式。',
      'description' => '本接口一般用于开启或关闭访问控制策略严格模式。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribePolicyPriorUsed' => 
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
          'name' => 'SourceIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问者源IP地址。',
            'type' => 'string',
            'deprecated' => true,
            'required' => false,
            'example' => '192.0.XX.XX',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。

取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'Direction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的流量方向。

取值：

- **in**：外对内流量。
- **out**：内对外流量。',
            'type' => 'string',
            'required' => true,
            'example' => 'in',
          ),
        ),
        3 => 
        array (
          'name' => 'IpVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云防火墙防护的资产的IP版本。


取值：

- **4**（默认）：IpV4

- **6**：IpV6',
            'type' => 'string',
            'required' => false,
            'example' => '6',
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
              'End' => 
              array (
                'description' => '您已创建的访问控制策略的最低优先级。

> -1表示最低优先级。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '150',
              ),
              'Start' => 
              array (
                'description' => '您已创建的访问控制策略的最高优先级。

> 0表示最高优先级。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '-1',
              ),
              'RequestId' => 
              array (
                'description' => '结果的请求ID。',
                'type' => 'string',
                'example' => 'CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D',
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
            'errorCode' => 'ErrorParameterIpVersion',
            'errorMessage' => 'The IP version is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorParametersDirection',
            'errorMessage' => 'The direction is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorParametersUid',
            'errorMessage' => 'The aliUid parameter is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'ErrorDBSelect',
            'errorMessage' => 'An error occurred while querying database.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"End\\": 150,\\n  \\"Start\\": -1,\\n  \\"RequestId\\": \\"CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribePolicyPriorUsedResponse>\\n    <End>150</End>\\n    <Start>-1</Start>\\n    <RequestId>CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D</RequestId>\\n</DescribePolicyPriorUsedResponse>","errorExample":""}]',
      'title' => '查询访问控制策略优先级使用范围',
      'summary' => '查询访问控制策略优先级生效范围。',
      'description' => '本接口一般用于查询外对内流量或内对外流量访问控制策略优先级生效范围。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDomainResolve' => 
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
          'name' => 'SourceIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问者源IP地址。',
            'type' => 'string',
            'deprecated' => true,
            'required' => false,
            'example' => '192.0.XX.XX',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收消息的语言类型。

取值包括：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收消息的语言类型。

取值包括：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        3 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待解析的域名地址。',
            'type' => 'string',
            'required' => true,
            'example' => 'www.aliyundoc.com',
          ),
        ),
        4 => 
        array (
          'name' => 'IpVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云防火墙防护的资产的IP版本。取值：

- **4**（默认）：IPV4
- **6**：IPV6',
            'type' => 'string',
            'required' => false,
            'example' => '6',
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
                'description' => '结果的请求ID。',
                'type' => 'string',
                'example' => 'CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D',
              ),
              'ResolveResult' => 
              array (
                'description' => '域名解析结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'IpAddrs' => 
                  array (
                    'description' => '域名解析结果，多个IP地址用半角逗号（,）分隔。',
                    'type' => 'string',
                    'example' => '11.1.X.X,12.1.X.X',
                  ),
                  'UpdateTime' => 
                  array (
                    'description' => '解析时间戳。单位：秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1579091739',
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
            'errorCode' => 'ErrorParameters',
            'errorMessage' => 'A parameter error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorDBSelect',
            'errorMessage' => 'An error occurred while querying database.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorDomainResolve',
            'errorMessage' => 'A domain resolution error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D\\",\\n  \\"ResolveResult\\": {\\n    \\"IpAddrs\\": \\"11.1.X.X,12.1.X.X\\",\\n    \\"UpdateTime\\": 1579091739\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDomainResolveResponse>\\n    <RequestId>CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D</RequestId>\\n    <ResolveResult>\\n        <IpAddrs>11.1.X.X,12.1.X.X</IpAddrs>\\n        <UpdateTime>1579091739</UpdateTime>\\n    </ResolveResult>\\n</DescribeDomainResolveResponse>","errorExample":""}]',
      'title' => '获取域名DNS的解析结果',
      'summary' => '获取域名DNS的解析结果。',
      'description' => '本接口一般用于获取域名DNS的解析结果。当前仅支持从阿里云云解析DNS获取解析结果。要查询的域名必须使用云解析DNS，才能查询到其解析结果。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeControlPolicy' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收消息的语言类型。取值：
- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收消息的语言类型。取值：
- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'Direction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略控制的流量方向。取值：
- **in**：外对内方向的流量访问控制。
- **out**：内对外方向的流量访问控制。',
            'type' => 'string',
            'required' => true,
            'example' => 'in',
          ),
        ),
        3 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，显示的当前页的页码。

默认值为1。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，显示的每页数据的最大条数。
',
            'type' => 'string',
            'required' => true,
            'example' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'Source',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略中的访问源地址。支持使用模糊查询的方式进行查询。SourceType（源类型）不同，访问源地址的取值也不同。

- 当SourceType为`net`时，访问源为CIDR格式的IP地址段。例如：192.0.XX.XX/24。

- 当SourceType为`group`时，访问源为源地址簿名称。例如：db_group为空（表示查询所有访问控制源）。

- 当SourceType为`location`时，访问源为源区域。例如：北京或beijing（支持使用中文或英文进行查询）。

> 不设置该参数表示查询所有类型的访问源。
',
            'type' => 'string',
            'required' => false,
            'example' => '192.0.XX.XX',
          ),
        ),
        6 => 
        array (
          'name' => 'Destination',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略中的目的地址。支持模糊查询。DestinationType（目的类型）不同，目的地址的取值也不同。

- 当DestinationType为`net`时，目的地址为CIDR格式的IP地址段。例如：10.0.3.0/24。

- 当DestinationType为`domain`时，目的地址为域名。例如：aliyun。

- 当DestinationType为`group`时，目的地址为地址簿的名称。例如：db_group。

- 当DestinationType为`location`时，目的地址为区域名称（具体区域位置编码请参见AddControlPolicy。例如：["BJ11", "ZB"]。

> 不设置该参数表示查询所有类型的目的地址。',
            'type' => 'string',
            'required' => false,
            'example' => '192.0.XX.XX',
          ),
        ),
        7 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的描述信息。支持模糊查询。

> 不设置该参数表示查询所有策略的描述信息。
',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        8 => 
        array (
          'name' => 'Proto',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略中访问流量的协议类型。取值：

- **TCP**
- **UDP**
- **ICMP**
- **ANY**（表示所有协议类型）
> 不设置该参数表示查询所有协议类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'TCP',
          ),
        ),
        9 => 
        array (
          'name' => 'AclAction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略中设置的流量通过云防火墙的方式（动作）。取值：

- **accept**：放行

- **drop**：拒绝

- **log**：观察

> 不设置该参数表示查询所有的动作类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'accept',
          ),
        ),
        10 => 
        array (
          'name' => 'Release',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的启用状态。取值：

- **true**：启用访问控制策略

- **false**：不启用访问控制策略',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
          ),
        ),
        11 => 
        array (
          'name' => 'AclUuid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的唯一标识ID。',
            'type' => 'string',
            'required' => false,
            'example' => '00281255-d220-4db1-8f4f-c4df221a****',
          ),
        ),
        12 => 
        array (
          'name' => 'IpVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '支持的IP地址版本。取值：

- **4**（默认）：代表IPv4地址

- **6**：代表IPv6地址',
            'type' => 'string',
            'required' => false,
            'example' => '6',
          ),
        ),
        13 => 
        array (
          'name' => 'RepeatType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的策略有效期的重复类型。取值：
- **Permanent**（默认）：总是
- **None**：指定单次时间
- **Daily**：每天
- **Weekly**：每周
- **Monthly**：每月',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Daily' => '每天',
              'Monthly' => '每月',
              'Permanent' => '总是',
              'Weekly' => '每周',
              'None' => '指定单次时间',
            ),
            'example' => 'Permanent',
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
              'PageNo' => 
              array (
                'description' => '分页查询时，显示的当前页的页码。',
                'type' => 'string',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时，显示的每页数据的最大条数。',
                'type' => 'string',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '结果的请求ID。',
                'type' => 'string',
                'example' => 'CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2****',
              ),
              'TotalCount' => 
              array (
                'description' => '访问控制策略的总数量。',
                'type' => 'string',
                'example' => '100',
              ),
              'Policys' => 
              array (
                'description' => '访问控制策略的信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '无',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Direction' => 
                    array (
                      'description' => '访问控制策略的流量方向。取值：

- **in**：外对内流量访问控制
- **out**：内对外流量访问控制',
                      'type' => 'string',
                      'example' => 'in',
                    ),
                    'Order' => 
                    array (
                      'description' => '访问控制策略生效的优先级。

优先级数字从1开始顺序递增，优先级数字越小，优先级越高。
',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'SourceType' => 
                    array (
                      'description' => '访问控制策略中的源地址类型。取值：

- **net**：源网段（CIDR地址）
- **group**：源地址簿
- **location**：源区域',
                      'type' => 'string',
                      'example' => 'net',
                    ),
                    'ApplicationName' => 
                    array (
                      'description' => '访问控制策略支持的应用类型，推荐使用ApplicationNameList。取值：
- **FTP**
- **HTTP**
- **HTTPS**
- **Memcache**
- **MongoDB**
- **MQTT**
- **MySQL**
- **RDP**
- **Redis**
- **SMTP**
- **SMTPS**
- **SSH**
- **SSL**
- **VNC**
- **ANY**（表示所有应用类型）',
                      'type' => 'string',
                      'example' => 'HTTP',
                    ),
                    'HitTimes' => 
                    array (
                      'description' => '访问控制策略的命中次数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '100',
                    ),
                    'Description' => 
                    array (
                      'description' => '访问控制策略的描述信息。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'SourceGroupType' => 
                    array (
                      'description' => '访问控制策略中的源地址簿类型。取值：

- **ip**：IP地址簿，包含一个或多个IP地址段。

- **tag**：ECS标签地址簿，包含一个或多个ECS标签下的IP地址。

- **domain**：域名地址簿，包含一个或多个域名地址。

- **threat**：威胁地址簿，包含一个或多个恶意IP或域名地址。

- **backsrc**：回源地址簿，包含一个或多个DDoS防护实例或WAF实例的回源地址。
',
                      'type' => 'string',
                      'example' => 'ip',
                    ),
                    'DnsResultTime' => 
                    array (
                      'description' => 'DNS解析的时间戳。使用秒级时间戳格式表示。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1579261141',
                    ),
                    'DnsResult' => 
                    array (
                      'description' => 'DNS解析结果。',
                      'type' => 'string',
                      'example' => '192.0.XX.XX,192.0.XX.XX',
                    ),
                    'Proto' => 
                    array (
                      'description' => '访问控制策略中流量访问的安全协议类型。取值：

- **ANY**
- **TCP**
- **UDP**
- **ICMP**',
                      'type' => 'string',
                      'example' => 'TCP',
                    ),
                    'DestinationGroupType' => 
                    array (
                      'description' => '访问控制策略中的目的地址簿类型。取值：

- **ip**：IP地址簿，包含一个或多个IP地址段。

- **tag**：ECS标签地址簿，包含一个或多个ECS标签下的IP地址。

- **domain**：域名地址簿，包含一个或多个域名地址。

- **threat**：威胁地址簿，包含一个或多个恶意IP或域名地址。

- **backsrc**：回源地址簿，包含一个或多个DDoS防护实例或WAF实例的回源地址。
',
                      'type' => 'string',
                      'example' => 'ip',
                    ),
                    'Destination' => 
                    array (
                      'description' => '访问控制策略中的目的地址。DestinationType（目的类型）不同，目的地址的取值也不同。取值：

- 当**DestinationType**为**net**时，目的地址为CIDR格式的IP地址段。例如：192.0.XX.XX/24。
- 当**DestinationType**为**domain**时，目的地址为域名。例如：aliyuncs.com。
- 当**DestinationType**为**group**时，目的地址为地址簿的名称。例如：db_group。
- 当**DestinationType**为**location**时，目的地址为区域名称（具体区域位置编码请参见AddControlPolicy。例如： \\["BJ11", "ZB"\\]。',
                      'type' => 'string',
                      'example' => '192.0.XX.XX/24',
                    ),
                    'HitLastTime' => 
                    array (
                      'description' => '最新命中时间戳。使用秒级时间戳格式表示。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1579261141',
                    ),
                    'DestPortGroup' => 
                    array (
                      'description' => '访问控制策略中流量访问的目的端口地址簿名称。',
                      'type' => 'string',
                      'example' => 'my_port_group',
                    ),
                    'AclUuid' => 
                    array (
                      'description' => '访问控制策略的唯一标识ID。',
                      'type' => 'string',
                      'example' => '00281255-d220-4db1-8f4f-c4df221a****',
                    ),
                    'DestPortType' => 
                    array (
                      'description' => '访问控制策略中流量访问的目的端口类型。取值：
- **port**：端口
- **group**：端口地址簿',
                      'type' => 'string',
                      'example' => 'port',
                    ),
                    'Source' => 
                    array (
                      'description' => '访问控制策略中的访问源地址。取值：

- 当**SourceType**为`net`时，访问源为CIDR格式的IP地址段。例如：192.0.XX.XX/24。
- 当**SourceType**为`group`时，访问源地址为源地址簿名称。例如：db_group。
- 当**SourceType**为`location`时，访问源地址为区域（具体区域位置编码请参见[AddControlPolicy](~~138867~~)）。例如： \\["BJ11", "ZB"\\]。
',
                      'type' => 'string',
                      'example' => '192.0.XX.XX/24',
                    ),
                    'DestinationType' => 
                    array (
                      'description' => '访问控制策略中的目的地址类型。取值：

- **net**：目的网段（CIDR）
- **group**：目的地址簿
- **domain**：目的域名
- **location**：目的区域',
                      'type' => 'string',
                      'example' => 'net',
                    ),
                    'DestPort' => 
                    array (
                      'description' => '访问控制策略中访问流量的目的端口。',
                      'type' => 'string',
                      'example' => '80',
                    ),
                    'IpVersion' => 
                    array (
                      'description' => '支持的IP地址版本。取值：

- **4**：代表IPv4地址
- **6**：代表IPv6地址',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '6',
                    ),
                    'AclAction' => 
                    array (
                      'description' => '访问控制策略中设置的流量通过云防火墙的方式（动作）。取值：

- **accept**：放行
- **drop**：拒绝
- **log**：观察',
                      'type' => 'string',
                      'example' => 'accept',
                    ),
                    'Release' => 
                    array (
                      'description' => '访问控制策略的启用状态。策略创建后默认启用该策略。取值：

- **true**：启用访问控制策略

- **false**：不启用访问控制策略',
                      'type' => 'string',
                      'example' => 'true',
                    ),
                    'ApplicationId' => 
                    array (
                      'description' => '访问控制策略中设置访问流量的应用ID。',
                      'type' => 'string',
                      'example' => '10***',
                    ),
                    'DestinationGroupCidrs' => 
                    array (
                      'description' => '访问控制策略中的目的地址簿中的网段列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '访问控制策略中的目的地址簿中的网段。',
                        'type' => 'string',
                        'example' => '192.0.XX.XX/24',
                      ),
                    ),
                    'DestPortGroupPorts' => 
                    array (
                      'description' => '目的端口地址簿中包含的端口列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '目的端口地址簿中包含的端口。',
                        'type' => 'string',
                        'example' => '80/80',
                      ),
                    ),
                    'SourceGroupCidrs' => 
                    array (
                      'description' => '访问控制策略中的源地址簿中的网段列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '访问控制策略中的源地址簿中的网段。',
                        'type' => 'string',
                        'example' => '192.0.XX.XX/24',
                      ),
                    ),
                    'ApplicationNameList' => 
                    array (
                      'description' => '应用名称列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '访问控制策略支持的应用类型列表。取值：
- **FTP**
- **HTTP**
- **HTTPS**
- **Memcache**
- **MongoDB**
- **MQTT**
- **MySQL**
- **RDP**
- **Redis**
- **SMTP**
- **SMTPS**
- **SSH**
- **SSL**
- **VNC**
- **ANY**（表示所有应用类型）',
                        'type' => 'string',
                        'example' => 'HTTP',
                      ),
                    ),
                    'SpreadCnt' => 
                    array (
                      'description' => '占用访问控制策略的规格数，即每条策略占用规格数的累加值。
单条策略占用的规格数 = 源地址个数（IP地址段个数或区域个数）\\* 目的地址个数（IP地址段个数或区域个数或域名个数）\\* 端口段个数 \\* 应用数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '10000',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建策略的时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1761062400',
                    ),
                    'ModifyTime' => 
                    array (
                      'description' => '修改策略的时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1761062400',
                    ),
                    'RepeatType' => 
                    array (
                      'description' => '访问控制策略的策略有效期的重复类型。取值：
- **Permanent**（默认）：总是
- **None**：指定单次时间
- **Daily**：每天
- **Weekly**：每周
- **Monthly**：每月',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Daily' => '每天',
                        'Monthly' => '每月',
                        'Permanent' => '总是',
                        'Weekly' => '每周',
                        'None' => '指定单次时间',
                      ),
                      'example' => 'Permanent',
                    ),
                    'RepeatDays' => 
                    array (
                      'description' => '访问控制策略的策略有效期的重复日期集合。
- 当RepeatType为`Permanent`、`None`、`Daily`时，RepeatDays为空集合。
  例如：[]
- 当RepeatType为Weekly时，RepeatDays不能为空。
  例如：[0, 6]
> RepeatType设置为Weekly时，RepeatDays不允许重复。
- 当RepeatType为`Monthly`时，RepeatDays不能为空。
  例如：[1, 31]
> RepeatType设置为Monthly时，RepeatDays不允许重复。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '访问控制策略的策略有效期的重复日期。
> RepeatType设置为Weekly时，取值范围：0~6，每周开始于周日。
> RepeatType设置为Monthly时，取值范围：1~31。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1',
                      ),
                    ),
                    'RepeatStartTime' => 
                    array (
                      'description' => '访问控制策略的策略有效期的重复开始时间。例如：08:00，必须为整点或半点时间，且小于重复结束时间至少半小时。
> 当RepeatType为Permanent、None时，RepeatStartTime为空。当RepeatType为Daily、Weekly、Monthly时，RepeatStartTime必须有值，您需要设置重复开始时间。',
                      'type' => 'string',
                      'example' => '08:00',
                    ),
                    'RepeatEndTime' => 
                    array (
                      'description' => '访问控制策略的策略有效期的重复结束时间。例如：23:30，必须为整点或半点时间，且大于重复开始时间至少半小时。
> 当RepeatType为Permanent、None时，RepeatEndTime为空。当RepeatType为Daily、Weekly、Monthly时，RepeatEndTime必须有值，您需要设置重复结束时间。',
                      'type' => 'string',
                      'example' => '23:30',
                    ),
                    'StartTime' => 
                    array (
                      'description' => '访问控制策略的策略有效期的开始时间。使用秒级时间戳格式表示。必须为整点或半点时间，且小于结束时间至少半小时。
> 当RepeatType为Permanent时，StartTime为空。当RepeatType为None、Daily、Weekly、Monthly时，StartTime必须有值，您需要设置开始时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1694761200',
                    ),
                    'EndTime' => 
                    array (
                      'description' => '访问控制策略的策略有效期的结束时间。使用秒级时间戳格式表示。必须为整点或半点时间，且大于开始时间至少半小时。
> 当RepeatType为Permanent时，EndTime为空。当RepeatType为None、Daily、Weekly、Monthly时，EndTime必须有值，您需要设置结束时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1694764800',
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
            'errorCode' => 'ErrorParametersUid',
            'errorMessage' => 'The aliUid parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorParametersPageSizeOrNo',
            'errorMessage' => 'Either pageSize or pageNo is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorParameterIpVersion',
            'errorMessage' => 'The IP version is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'ErrorParametersDirection',
            'errorMessage' => 'The direction is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'ErrorDBSelect',
            'errorMessage' => 'An error occurred while querying database.',
          ),
          5 => 
          array (
            'errorCode' => 'ErrorUnmarshalJSON',
            'errorMessage' => 'An error occurred while parsing JSON.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageNo\\": \\"1\\",\\n  \\"PageSize\\": \\"10\\",\\n  \\"RequestId\\": \\"CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2****\\",\\n  \\"TotalCount\\": \\"100\\",\\n  \\"Policys\\": [\\n    {\\n      \\"Direction\\": \\"in\\",\\n      \\"Order\\": 1,\\n      \\"SourceType\\": \\"net\\",\\n      \\"ApplicationName\\": \\"HTTP\\",\\n      \\"HitTimes\\": 100,\\n      \\"Description\\": \\"test\\",\\n      \\"SourceGroupType\\": \\"ip\\",\\n      \\"DnsResultTime\\": 1579261141,\\n      \\"DnsResult\\": \\"192.0.XX.XX,192.0.XX.XX\\",\\n      \\"Proto\\": \\"TCP\\",\\n      \\"DestinationGroupType\\": \\"ip\\",\\n      \\"Destination\\": \\"192.0.XX.XX/24\\",\\n      \\"HitLastTime\\": 1579261141,\\n      \\"DestPortGroup\\": \\"my_port_group\\",\\n      \\"AclUuid\\": \\"00281255-d220-4db1-8f4f-c4df221a****\\",\\n      \\"DestPortType\\": \\"port\\",\\n      \\"Source\\": \\"192.0.XX.XX/24\\",\\n      \\"DestinationType\\": \\"net\\",\\n      \\"DestPort\\": \\"80\\",\\n      \\"IpVersion\\": 6,\\n      \\"AclAction\\": \\"accept\\",\\n      \\"Release\\": \\"true\\",\\n      \\"ApplicationId\\": \\"10***\\",\\n      \\"DestinationGroupCidrs\\": [\\n        \\"192.0.XX.XX/24\\"\\n      ],\\n      \\"DestPortGroupPorts\\": [\\n        \\"80/80\\"\\n      ],\\n      \\"SourceGroupCidrs\\": [\\n        \\"192.0.XX.XX/24\\"\\n      ],\\n      \\"ApplicationNameList\\": [\\n        \\"HTTP\\"\\n      ],\\n      \\"SpreadCnt\\": 10000,\\n      \\"CreateTime\\": 1761062400,\\n      \\"ModifyTime\\": 1761062400,\\n      \\"RepeatType\\": \\"Permanent\\",\\n      \\"RepeatDays\\": [\\n        1\\n      ],\\n      \\"RepeatStartTime\\": \\"08:00\\",\\n      \\"RepeatEndTime\\": \\"23:30\\",\\n      \\"StartTime\\": 1694761200,\\n      \\"EndTime\\": 1694764800\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeControlPolicyResponse>\\n    <PageNo>1</PageNo>\\n    <PageSize>10</PageSize>\\n    <RequestId>CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2****</RequestId>\\n    <TotalCount>100</TotalCount>\\n    <Policys>\\n        <Direction>in</Direction>\\n        <Order>1</Order>\\n        <SourceType>net</SourceType>\\n        <ApplicationName>HTTP</ApplicationName>\\n        <HitTimes>100</HitTimes>\\n        <Description>test</Description>\\n        <SourceGroupType>ip</SourceGroupType>\\n        <DnsResultTime>1579261141</DnsResultTime>\\n        <DnsResult>192.0.XX.XX,192.0.XX.XX</DnsResult>\\n        <Proto>TCP</Proto>\\n        <DestinationGroupType>ip</DestinationGroupType>\\n        <Destination>192.0.XX.XX/24</Destination>\\n        <HitLastTime>1579261141</HitLastTime>\\n        <DestPortGroup>my_port_group</DestPortGroup>\\n        <AclUuid>00281255-d220-4db1-8f4f-c4df221a****</AclUuid>\\n        <DestPortType>port</DestPortType>\\n        <Source>192.0.XX.XX/24</Source>\\n        <DestinationType>net</DestinationType>\\n        <DestPort>80</DestPort>\\n        <IpVersion>6</IpVersion>\\n        <AclAction>accept</AclAction>\\n        <Release>true</Release>\\n        <ApplicationId>10***</ApplicationId>\\n        <DestinationGroupCidrs>192.0.XX.XX/24</DestinationGroupCidrs>\\n        <DestPortGroupPorts>80/80</DestPortGroupPorts>\\n        <SourceGroupCidrs>192.0.XX.XX/24</SourceGroupCidrs>\\n        <ApplicationNameList>HTTP</ApplicationNameList>\\n        <SpreadCnt>10000</SpreadCnt>\\n        <CreateTime>1761062400</CreateTime>\\n        <ModifyTime>1761062400</ModifyTime>\\n    </Policys>\\n</DescribeControlPolicyResponse>","errorExample":""}]',
      'title' => '获取所有访问控制策略的信息',
      'summary' => '获取所有访问控制策略的信息。',
      'description' => '本接口一般用于分页查询访问控制策略的信息。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyControlPolicyPosition' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '68468',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcfwJZTBPW',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SourceIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问者源IP地址。',
            'type' => 'string',
            'deprecated' => true,
            'required' => false,
            'example' => '192.0.XX.XX',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收消息的语言类型。取值：

- zh（默认）：中文。
- en：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'Direction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '互联网边界防火墙IPv4访问控制策略的流量方向。取值：

- in：外对内流量。
- out：内对外流量。',
            'type' => 'string',
            'required' => true,
            'example' => 'in',
          ),
        ),
        3 => 
        array (
          'name' => 'NewOrder',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '为互联网边界防火墙IPv4访问控制策略设置一个新的优先级。
优先级使用数字表示，输入数字1表示优先级最高，数字越大优先级越低。

> 新的优先级数字不能超出您已创建的互联网边界防火墙IPv4策略优先级的范围，否则会导致调用该接口时出错。
> 建议您在调用该接口前，先调用[DescribePolicyPriorUsed](~~138862~~)查询互联网边界防火墙指定流量方向的IPv4策略优先级范围。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'OldOrder',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要修改的互联网边界防火墙IPv4访问控制策略当前的优先级。',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '850A84D6-0DE4-4797-A1E8-00090125EEB1',
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
            'errorCode' => 'ErrorParametersUid',
            'errorMessage' => 'The aliUid parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorParameterIpVersion',
            'errorMessage' => 'The IP version is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorParametersDirection',
            'errorMessage' => 'The direction is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'ErrorDBSelect',
            'errorMessage' => 'An error occurred while querying database.',
          ),
          4 => 
          array (
            'errorCode' => 'ErrorParameters',
            'errorMessage' => 'A parameter error occurred.',
          ),
          5 => 
          array (
            'errorCode' => 'ErrorParametersNewOrder',
            'errorMessage' => 'The newOrder is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'ErrorParametersOldOrder',
            'errorMessage' => 'The oldOrder is invalid.',
          ),
          7 => 
          array (
            'errorCode' => 'ErrorDBDelete',
            'errorMessage' => 'An error occurred while deleting the database.',
          ),
          8 => 
          array (
            'errorCode' => 'ErrorDBInsert',
            'errorMessage' => 'An error occurred while performing an insert operation in the database.',
          ),
          9 => 
          array (
            'errorCode' => 'ErrorRecordLog',
            'errorMessage' => 'An error occurred while updating the operation log.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"850A84D6-0DE4-4797-A1E8-00090125EEB1\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyControlPolicyPositionResponse>\\n    <RequestId>850A84D6-0DE4-4797-A1E8-00090125EEB1</RequestId>\\n</ModifyControlPolicyPositionResponse>","errorExample":""}]',
      'title' => '修改访问控制策略的优先级',
      'summary' => '修改互联网边界防火墙IPv4访问控制策略（表示访问控制策略中的访问源IP、目的IP使用IPv4格式）的优先级。',
      'description' => '本接口一般用于修改互联网边界防火墙IPv4访问控制策略的优先级。暂不支持以调用接口的方式修改互联网边界防火墙IPv6访问控制策略的优先级。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'ModifyControlPolicy' => 
    array (
      'summary' => '修改安全访问控制策略的配置信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：
- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'AclAction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全访问控制策略中流量通过云防火墙的方式。取值：
- **accept**：放行
- **drop**：拒绝
- **log**：观察',
            'type' => 'string',
            'required' => true,
            'example' => 'accept',
          ),
        ),
        2 => 
        array (
          'name' => 'ApplicationName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全访问控制策略支持的应用类型。支持的应用类型有以下几种：

- **ANY**
- **HTTP**
- **HTTPS**
- **MySQL**
- **SMTP**
- **SMTPS**
- **RDP**
- **VNC**
- **SSH**
- **Redis**
- **MQTT**
- **MongoDB**
- **Memcache**
- **SSL**

> **ANY**表示策略应用在所有类型的应用中。

> ApplicationNameList和ApplicationName二选一，必须传其中一个，不能同时为空。当ApplicationNameList和ApplicationName同时传值时，以ApplicationNameList为准。',
            'type' => 'string',
            'required' => false,
            'example' => 'HTTP',
          ),
        ),
        3 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全访问控制策略的描述信息。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        4 => 
        array (
          'name' => 'DestPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全访问控制策略中流量访问的目的端口。',
            'type' => 'string',
            'required' => false,
            'example' => '80',
          ),
        ),
        5 => 
        array (
          'name' => 'Destination',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全访问控制策略中的目的地址。

- 当**DestinationType**为net时，**Destination**为目的CIDR。例如：1.2.XX.XX/24
- 当**DestinationType**为group时，**Destination**为目的地址簿名称。例如：db_group
- 当**DestinationType**为domain时，**Destination**为目的域名。例如：*.aliyuncs.com
- 当**DestinationType**为location时，**Destination**为目的区域（具体区域位置编码见后文）。例如： \\["BJ11", "ZB"\\]',
            'type' => 'string',
            'required' => true,
            'example' => '192.0.XX.XX/24',
          ),
        ),
        6 => 
        array (
          'name' => 'DestinationType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全访问控制策略中的目的地址类型。取值：

- **net**：目的网段（CIDR）
- **group**：目的地址簿
- **domain**：目的域名
- **location**：目的区域',
            'type' => 'string',
            'required' => true,
            'example' => 'net',
          ),
        ),
        7 => 
        array (
          'name' => 'Direction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全访问控制策略的流量方向。取值：

- **in**：外对内流量访问控制
- **out**：内对外流量访问控制',
            'type' => 'string',
            'required' => true,
            'example' => 'in',
          ),
        ),
        8 => 
        array (
          'name' => 'Proto',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全访问控制策略中流量访问的安全协议类型。支持的应用类型有以下几种：

- **ANY**
- **TCP**
- **UDP**
- **ICMP**

> **ANY**表示策略应用在所有类型的应用中。

> 流量方向为出向时，访问的目的地址为域名类型的威胁情报地址簿或云服务地址簿时，可选配置TCP/ANY协议。选择TCP时，应用可选HTTP/HTTPS/SMTP/SMTPS/SSL五种，选择ANY时，应用可选ANY。',
            'type' => 'string',
            'required' => true,
            'example' => 'TCP',
          ),
        ),
        9 => 
        array (
          'name' => 'Source',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全访问控制策略中的源地址。

- 当**SourceType**为net时，**Source**为源CIDR。例如：1.2.XX.XX/24
- 当**SourceType**为group时，**Source**为源地址簿名称。例如：db_group
- 当**SourceType**为location时，**Source**为源区域（具体区域位置编码见后文）。例如\\["BJ11", "ZB"\\]',
            'type' => 'string',
            'required' => true,
            'example' => '192.0.XX.XX/24',
          ),
        ),
        10 => 
        array (
          'name' => 'AclUuid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全访问控制策略的唯一标识ID。

> 修改安全访问控制策略，需要提供该策略的唯一标识ID，该ID可调用[DescribeControlPolicy](~~138866~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'example' => '00281255-d220-4db1-8f4f-c4df221ad84c',
          ),
        ),
        11 => 
        array (
          'name' => 'SourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全访问控制策略中的源地址类型。取值：

-  **net**：源网段（CIDR）
- **group**：源地址簿

- **location**：源区域',
            'type' => 'string',
            'required' => true,
            'example' => 'net',
          ),
        ),
        12 => 
        array (
          'name' => 'DestPortType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全访问控制策略中流量访问的目的端口类型。取值：

- **port**：端口
- **group**：端口地址簿',
            'type' => 'string',
            'required' => false,
            'example' => 'port',
          ),
        ),
        13 => 
        array (
          'name' => 'DestPortGroup',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全访问控制策略中流量访问的目的端口地址簿名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'my_port_group',
          ),
        ),
        14 => 
        array (
          'name' => 'Release',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全访问控制策略的状态。取值：

- true：策略开启状态
- false：策略关闭状态',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
          ),
        ),
        15 => 
        array (
          'name' => 'ApplicationNameList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '应用名称列表。

> ApplicationNameList和ApplicationName二选一，必须传其中一个，不能同时为空。当ApplicationNameList和ApplicationName同时传值时，以ApplicationNameList为准。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '应用名称。',
              'type' => 'string',
              'required' => false,
              'example' => 'HTTP',
            ),
            'required' => false,
            'maxItems' => 5,
          ),
        ),
        16 => 
        array (
          'name' => 'RepeatType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的策略有效期的重复类型。取值：
- **Permanent**（默认）：总是
- **None**：指定单次时间
- **Daily**：每天
- **Weekly**：每周
- **Monthly**：每月',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Daily' => '每天',
              'Monthly' => '每月',
              'Permanent' => '总是',
              'Weekly' => '每周',
              'None' => '指定单次时间',
            ),
            'example' => 'Permanent',
          ),
        ),
        17 => 
        array (
          'name' => 'RepeatDays',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '访问控制策略的策略有效期的重复日期集合。
- 当RepeatType为`Permanent`、`None`、`Daily`时，RepeatDays为空集合。
  例如：[]
- 当RepeatType为Weekly时，RepeatDays不能为空。
  例如：[0, 6]
> RepeatType设置为Weekly时，RepeatDays不允许重复。
- 当RepeatType为`Monthly`时，RepeatDays不能为空。
  例如：[1, 31]
> RepeatType设置为Monthly时，RepeatDays不允许重复。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '访问控制策略的策略有效期的重复日期。
> RepeatType设置为Weekly时，取值范围：0~6，每周开始于周日。
> RepeatType设置为Monthly时，取值范围：1~31。',
              'type' => 'integer',
              'format' => 'int64',
              'required' => false,
              'example' => '1',
            ),
            'required' => false,
          ),
        ),
        18 => 
        array (
          'name' => 'RepeatStartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的策略有效期的重复开始时间。例如：08:00，必须为整点或半点时间，且小于重复结束时间至少半小时。
> 当RepeatType为Permanent、None时，RepeatStartTime为空。当RepeatType为Daily、Weekly、Monthly时，RepeatStartTime必须有值，您需要设置重复开始时间。',
            'type' => 'string',
            'required' => false,
            'example' => '08:00',
          ),
        ),
        19 => 
        array (
          'name' => 'RepeatEndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的策略有效期的重复结束时间。例如：23:30，必须为整点或半点时间，且大于重复开始时间至少半小时。
> 当RepeatType为Permanent、None时，RepeatEndTime为空。当RepeatType为Daily、Weekly、Monthly时，RepeatEndTime必须有值，您需要设置重复结束时间。',
            'type' => 'string',
            'required' => false,
            'example' => '23:30',
          ),
        ),
        20 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的策略有效期的开始时间。使用秒级时间戳格式表示。必须为整点或半点时间，且小于结束时间至少半小时。
> 当RepeatType为Permanent时，StartTime为空。当RepeatType为None、Daily、Weekly、Monthly时，StartTime必须有值，您需要设置开始时间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1694761200',
          ),
        ),
        21 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的策略有效期的结束时间。使用秒级时间戳格式表示。必须为整点或半点时间，且大于开始时间至少半小时。
> 当RepeatType为Permanent时，EndTime为空。当RepeatType为None、Daily、Weekly、Monthly时，EndTime必须有值，您需要设置结束时间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1694764800',
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
                'description' => '结果的请求ID。',
                'type' => 'string',
                'example' => 'CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D',
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
            'errorCode' => 'ErrorParametersUid',
            'errorMessage' => 'The aliUid parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorParametersDirection',
            'errorMessage' => 'The direction is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorDBSelect',
            'errorMessage' => 'An error occurred while querying database.',
          ),
          3 => 
          array (
            'errorCode' => 'ErrorRecordLog',
            'errorMessage' => 'An error occurred while updating the operation log.',
          ),
          4 => 
          array (
            'errorCode' => 'ErrorParameters',
            'errorMessage' => 'Error Parameters',
          ),
          5 => 
          array (
            'errorCode' => 'ErrorParametersSource',
            'errorMessage' => 'The source is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyControlPolicyResponse>\\n    <RequestId>CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D</RequestId>\\n</ModifyControlPolicyResponse>","errorExample":""}]',
      'title' => '修改安全访问控制策略的配置信息',
      'description' => '本接口一般用于修改流量通过云防火墙方式为放行、拒绝或观察的访问控制策略的配置信息。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteControlPolicy' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '68146',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcfwJZTBPW',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SourceIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流量的源IP地址。',
            'type' => 'string',
            'deprecated' => true,
            'required' => false,
            'example' => '192.0.XX.XX',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。

取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'AclUuid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的唯一标识ID。

删除安全访问控制策略，需要提供该策略的唯一标识ID。您可调用[DescribeControlPolicy](~~138866~~)接口获取该ID。',
            'type' => 'string',
            'required' => true,
            'example' => '00281255-d220-4db1-8f4f-c4df221ad84c',
          ),
        ),
        3 => 
        array (
          'name' => 'Direction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全访问控制策略管控的流量方向。

取值：

- **in**：流量从外到内。
- **out**：流量从内到外。',
            'type' => 'string',
            'required' => true,
            'example' => 'in',
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
                'description' => '结果的请求ID。',
                'type' => 'string',
                'example' => 'CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D',
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
            'errorCode' => 'ErrorParametersUid',
            'errorMessage' => 'The aliUid parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorDBSelect',
            'errorMessage' => 'An error occurred while querying database.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorParametersDirection',
            'errorMessage' => 'The direction is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'ErrorRecordLog',
            'errorMessage' => 'An error occurred while updating the operation log.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteControlPolicyResponse>\\r\\n<RequestId>CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D</RequestId>\\r\\n</DeleteControlPolicyResponse>","errorExample":""}]',
      'title' => '删除访问控制策略',
      'summary' => '删除访问控制策略。',
      'description' => '本接口一般用于删除流量方向为外对内或内对外的访问控制策略。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AddControlPolicy' => 
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
          'name' => 'SourceIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问者源IP地址。',
            'type' => 'string',
            'deprecated' => true,
            'required' => false,
            'example' => '192.0.XX.XX',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'AclAction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略中设置的流量通过云防火墙的方式。取值：

- **accept**：放行
- **drop**：拒绝
- **log**：观察',
            'type' => 'string',
            'required' => true,
            'example' => 'accept',
          ),
        ),
        3 => 
        array (
          'name' => 'ApplicationName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略支持的应用类型。取值：
- **FTP**
- **HTTP**
- **HTTPS**
- **Memcache**
- **MongoDB**
- **MQTT**
- **MySQL**
- **RDP**
- **Redis**
- **SMTP**
- **SMTPS**
- **SSH**
- **SSL_No_Cert**
- **SSL**
- **VNC**
- **ANY**（表示所有类型的应用）

> 支持的应用类型取值与协议类型（Proto）取值存在依赖关系。Proto为TCP协议时，ApplicationName支持选择以上所有应用类型中的任意一种；Proto为UDP、ICMP或ANY协议类型时，ApplicationName仅支持选择ANY。ApplicationNameList和ApplicationName二选一，必须传其中一个，不能同时为空。',
            'type' => 'string',
            'required' => false,
            'example' => 'ANY',
          ),
        ),
        4 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的描述信息。',
            'type' => 'string',
            'required' => true,
            'example' => '放行流量',
          ),
        ),
        5 => 
        array (
          'name' => 'DestPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略中流量访问的目的端口。取值：

- 当协议类型为ICMP时，DestPort取值为空。
   
> 协议类型为ICMP时，不支持对目的端口进行访问控制。

- 当协议类型为TCP、UDP或ANY时，并且目的端口类型（DestPortType）为group时，DestPort取值为空。

> 访问控制策略目的端口类型选择group（目的端口地址簿）时，您无需设置具体的目的端口号。需要该访问控制策略管控的所有端口会包含在目的端口地址簿中。

- 当协议类型为TCP、UDP或ANY时，并且目的端口类型（DestPortType）为port时，DestPort取值为目的端口号。
',
            'type' => 'string',
            'required' => false,
            'example' => '80',
          ),
        ),
        6 => 
        array (
          'name' => 'Destination',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略中的目的地址段。

取值：
- 当DestinationType为net时，Destination为目的CIDR。
  
  例如：1.2.XX.XX/24

- 当DestinationType为group时，Destination为目的地址簿名称。

  例如：db_group

- 当DestinationType为domain时，Destination为目的域名。

  例如：*.aliyuncs.com

- 当DestinationType为location时，Destination为目的区域。

  例如： \\["BJ11", "ZB"\\]',
            'type' => 'string',
            'required' => true,
            'example' => '192.0.XX.XX/24',
          ),
        ),
        7 => 
        array (
          'name' => 'DestinationType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略中的目的地址类型。取值：

- **net**：目的网段（CIDR地址）
- **group**：目的地址簿
- **domain**：目的域名
- **location**：目的区域',
            'type' => 'string',
            'required' => true,
            'example' => 'net',
          ),
        ),
        8 => 
        array (
          'name' => 'Direction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的流量方向。取值：

- **in**：外对内流量访问控制
- **out**：内对外流量访问控制',
            'type' => 'string',
            'required' => true,
            'example' => 'in',
          ),
        ),
        9 => 
        array (
          'name' => 'Proto',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略中流量访问的协议类型。取值：

- **ANY**（任何协议）
- **TCP**
- **UDP**
- **ICMP**',
            'type' => 'string',
            'required' => true,
            'example' => 'ANY',
          ),
        ),
        10 => 
        array (
          'name' => 'Source',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略中的源地址。取值：

- 当SourceType为net时，Source为源CIDR地址。

  例如：1.1.XX.XX/24

- 当SourceType为group时，Source为源地址簿名称。

  例如：db_group

- 当SourceType为location时，Source为源区域。

  例如\\["BJ11", "ZB"\\]',
            'type' => 'string',
            'required' => true,
            'example' => '192.0.XX.XX/24',
          ),
        ),
        11 => 
        array (
          'name' => 'SourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略中的源地址类型。取值：
- **net**：源网段（CIDR）
- **group**：源地址簿
- **location**：源区域',
            'type' => 'string',
            'required' => true,
            'example' => 'net',
          ),
        ),
        12 => 
        array (
          'name' => 'NewOrder',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略生效的优先级。优先级数字从1开始顺序递增，优先级数字越小，优先级越高。
',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        13 => 
        array (
          'name' => 'DestPortType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略中流量访问的目的端口类型。

取值：

- **port**：端口
- **group**：端口地址簿',
            'type' => 'string',
            'required' => false,
            'example' => 'port',
          ),
        ),
        14 => 
        array (
          'name' => 'DestPortGroup',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略中访问流量的目的端口地址簿名称。


> DestPortType设置为group时，您需要设置目的端口地址簿名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'my_port_group',
          ),
        ),
        15 => 
        array (
          'name' => 'Release',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的启用状态。策略创建后默认启用该策略。取值：
- **true**：启用访问控制策略

- **false**：不启用访问控制策略',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
          ),
        ),
        16 => 
        array (
          'name' => 'IpVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '支持的IP地址版本。

取值：

- **4**：表示IPv4地址

- **6**：表示IPv6地址',
            'type' => 'string',
            'required' => false,
            'example' => '6',
          ),
        ),
        17 => 
        array (
          'name' => 'ApplicationNameList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '访问控制策略支持的应用类型列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '访问控制策略支持的应用类型。取值：
- **FTP**
- **HTTP**
- **HTTPS**
- **Memcache**
- **MongoDB**
- **MQTT**
- **MySQL**
- **RDP**
- **Redis**
- **SMTP**
- **SMTPS**
- **SSH**
- **SSL_No_Cert**
- **SSL**
- **VNC**
- **ANY**（表示所有类型的应用）

> 支持的应用类型取值与协议类型（Proto）取值存在依赖关系。Proto为TCP协议时，ApplicationNameList支持选择以上所有应用类型，使用`["HTTP","HTTPS",……]`格式表示；Proto为UDP、ICMP或ANY协议类型时，ApplicationNameList仅支持选择ANY。ApplicationNameList和ApplicationName二选一，必须传其中一个，不能同时为空。当ApplicationNameList和ApplicationName同时传值时，以ApplicationNameList为准。',
              'type' => 'string',
              'required' => false,
              'example' => '["ANY"]',
            ),
            'required' => false,
            'maxItems' => 5,
          ),
        ),
        18 => 
        array (
          'name' => 'RepeatType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的策略有效期的重复类型。取值：
- **Permanent**（默认）：总是
- **None**：指定单次时间
- **Daily**：每天
- **Weekly**：每周
- **Monthly**：每月',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Daily' => '每天',
              'Monthly' => '每月',
              'Permanent' => '总是',
              'Weekly' => '每周',
              'None' => '指定单次时间',
            ),
            'example' => 'Permanent',
          ),
        ),
        19 => 
        array (
          'name' => 'RepeatDays',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '访问控制策略的策略有效期的重复日期集合。
- 当RepeatType为`Permanent`、`None`、`Daily`时，RepeatDays为空集合。
  例如：[]
- 当RepeatType为Weekly时，RepeatDays不能为空。
  例如：[0, 6]
> RepeatType设置为Weekly时，RepeatDays不允许重复。
- 当RepeatType为`Monthly`时，RepeatDays不能为空。
  例如：[1, 31]
> RepeatType设置为Monthly时，RepeatDays不允许重复。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '访问控制策略的策略有效期的重复日期。
> RepeatType设置为Weekly时，取值范围：0~6，每周开始于周日。
> RepeatType设置为Monthly时，取值范围：1~31。',
              'type' => 'integer',
              'format' => 'int64',
              'required' => false,
              'example' => '1',
            ),
            'required' => false,
          ),
        ),
        20 => 
        array (
          'name' => 'RepeatStartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的策略有效期的重复开始时间。例如：08:00，必须为整点或半点时间，且小于重复结束时间至少半小时。
> 当RepeatType为Permanent、None时，RepeatStartTime为空。当RepeatType为Daily、Weekly、Monthly时，RepeatStartTime必须有值，您需要设置重复开始时间。',
            'type' => 'string',
            'required' => false,
            'example' => '08:00',
          ),
        ),
        21 => 
        array (
          'name' => 'RepeatEndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的策略有效期的重复结束时间。例如：23:30，必须为整点或半点时间，且大于重复开始时间至少半小时。
> 当RepeatType为Permanent、None时，RepeatEndTime为空。当RepeatType为Daily、Weekly、Monthly时，RepeatEndTime必须有值，您需要设置重复结束时间。',
            'type' => 'string',
            'required' => false,
            'example' => '23:30',
          ),
        ),
        22 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的策略有效期的开始时间。使用秒级时间戳格式表示。必须为整点或半点时间，且小于结束时间至少半小时。
> 当RepeatType为Permanent时，StartTime为空。当RepeatType为None、Daily、Weekly、Monthly时，StartTime必须有值，您需要设置开始时间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1694761200',
          ),
        ),
        23 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的策略有效期的结束时间。使用秒级时间戳格式表示。必须为整点或半点时间，且大于开始时间至少半小时。
> 当RepeatType为Permanent时，EndTime为空。当RepeatType为None、Daily、Weekly、Monthly时，EndTime必须有值，您需要设置结束时间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1694764800',
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
              'AclUuid' => 
              array (
                'description' => '互联网边界防火墙访问控制策略的唯一标识ID。',
                'type' => 'string',
                'example' => '00281255-d220-4db1-8f4f-c4df221ad84c',
              ),
              'RequestId' => 
              array (
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => 'CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D',
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
            'errorCode' => 'ErrorAclExtendedCountExceed',
            'errorMessage' => 'acl or expand acl count exceed',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorAddressCountExceed',
            'errorMessage' => 'The maximum number of addresses is exceeded.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorParametersSource',
            'errorMessage' => 'The source is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'ErrorDomainResolve',
            'errorMessage' => 'An error occurred while resolving the domain.',
          ),
          4 => 
          array (
            'errorCode' => 'ErrorParametersDirection',
            'errorMessage' => 'The direction is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'ErrorDBSelect',
            'errorMessage' => 'An error occurred while querying database.',
          ),
          6 => 
          array (
            'errorCode' => 'ErrorParameterIpVersion',
            'errorMessage' => 'The IP version is invalid.',
          ),
          7 => 
          array (
            'errorCode' => 'ErrorParametersDestination',
            'errorMessage' => 'The Destination parameter is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'ErrorParametersProto',
            'errorMessage' => 'The protocol is invalid.',
          ),
          9 => 
          array (
            'errorCode' => 'ErrorParametersDestPort',
            'errorMessage' => 'The dst_port is invalid.',
          ),
          10 => 
          array (
            'errorCode' => 'ErrorParametersAction',
            'errorMessage' => 'The action is invalid.',
          ),
          11 => 
          array (
            'errorCode' => 'ErrorParametersUid',
            'errorMessage' => 'The aliUid parameter is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'ErrorParametersAppId',
            'errorMessage' => 'The AppId parameter is incorrect.',
          ),
          13 => 
          array (
            'errorCode' => 'ErrorAclDomainAnyCountExceed',
            'errorMessage' => 'The number of resolved domain names cannot exceed 200. ACL configuration can be continued for HTTP, HTTPS, SMTP, SMTPS, and SSL applications.',
          ),
          14 => 
          array (
            'errorCode' => 'ErrorParametersGroupPort',
            'errorMessage' => 'The group port is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"AclUuid\\": \\"00281255-d220-4db1-8f4f-c4df221ad84c\\",\\n  \\"RequestId\\": \\"CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D\\"\\n}","errorExample":""},{"type":"xml","example":"<AddControlPolicyResponse>\\n    <AclUuid>00281255-d220-4db1-8f4f-c4df221ad84c</AclUuid>\\n    <RequestId>CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D</RequestId>\\n</AddControlPolicyResponse>","errorExample":""}]',
      'title' => '添加访问控制策略',
      'summary' => '添加访问控制策略。',
      'description' => '您可以使用本接口创建一条对经过云防火墙流量放行、拒绝或观察的策略。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => '地区编号如下：

- 中国：ZD 
- 北京市：BJ11 
- 天津市：TJ12 
-  河北省：HB13 
- 山西省：SX14
- 辽宁省：LN21 
- 吉林省：JL22 
- 上海市：SH31 
- 江苏省：JS32 
- 浙江省：ZJ33 
- 安徽省：AH34 
- 福建省：FJ35 
- 江西省：JX36 
- 山东省：SD37 
- 河南省：HN41 
- 湖北省：HB42 
- 湖南省：HN43 
- 广东省：GD44 
- 海南省：HN46 
- 重庆市：CQ50 
- 四川省：SC51 
- 贵州省：GZ52 
- 云南省：YN53 
- 陕西省：SX61 
- 甘肃省：GS62 
- 青海省：QH63 
- 黑龙江省：HLJ23 
- 西藏自治区：XZ54 
- 广西壮族自治区：GX45 
- 内蒙古自治区：NMG15 
- 宁夏回族自治区：NX64 
- 新疆维吾尔自治区：XJ65 
- 中国台湾：TW 
- 中国香港特别行政区：HK 
- 中国澳门特别行政区：MO 
- 海外：ZB 
- 亚洲（中国内地除外）：ZC 
- 欧洲：EU 
- 非洲：AF 
- 北美洲：NA 
- 南美洲：LA 
- 大洋洲：OA 
- 南极洲：AQ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyVpcFirewallDefaultIPSConfig' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SourceIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问者源IP地址。',
            'type' => 'string',
            'deprecated' => true,
            'required' => false,
            'example' => '192.0.XX.XX',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文。

- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'VpcFirewallId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙的实例ID。取值：

- VPC边界防火墙防护云企业网内的网络实例（网络实例包含VPC、VBR和CCN）和指定VPC之间的互访流量时，实例ID使用云企业网实例ID。您可以通过调用[DescribeVpcFirewallCenList](~~345777~~)接口，查询云企业网的实例ID。

- VPC边界防火墙防护通过高速通道连接的两个VPC之间的互访流量时，实例ID使用VPC边界防火墙实例ID。您可以通过调用[DescribeVpcFirewallList](~~342932~~)接口，查询VPC边界防火墙的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'vfw-m5e7dbc4y****',
          ),
        ),
        3 => 
        array (
          'name' => 'BasicRules',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '基础规则开关。取值：

- **1**：开。

- **0**：关。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'EnableAllPatch',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟补丁开关。取值：

- **1**：开。

- **0**：关。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'RunMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPS防御模式。取值：

- **1**：拦截模式。

- **0**：观察模式。',
            'type' => 'string',
            'required' => true,
            'example' => '0',
          ),
        ),
        6 => 
        array (
          'name' => 'MemberUid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前阿里云账号的成员账号UID。',
            'type' => 'string',
            'required' => false,
            'example' => '258039427902****',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '3B51B5BF-3C26-5009-ADAB-190E58DE4D6E',
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
            'errorCode' => 'ErrorParametersUid',
            'errorMessage' => 'The aliUid parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorParameters',
            'errorMessage' => 'A parameter error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorDBSelect',
            'errorMessage' => 'An error occurred while querying database.',
          ),
          3 => 
          array (
            'errorCode' => 'ErrorDBInsert',
            'errorMessage' => 'An error occurred while performing an insert operation in the database.',
          ),
          4 => 
          array (
            'errorCode' => 'ErrorRecordLog',
            'errorMessage' => 'An error occurred while updating the operation log.',
          ),
          5 => 
          array (
            'errorCode' => 'ErrorInvalidMemberUid',
            'errorMessage' => 'Member uid is invalid',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3B51B5BF-3C26-5009-ADAB-190E58DE4D6E\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyVpcFirewallDefaultIPSConfigResponse>\\n    <RequestId>3B51B5BF-3C26-5009-ADAB-190E58DE4D6E</RequestId>\\n</ModifyVpcFirewallDefaultIPSConfigResponse>","errorExample":""}]',
      'title' => '修改VPC边界防火墙的入侵防御配置信息',
      'summary' => '修改VPC边界防火墙的入侵防御配置信息。',
      'description' => '本接口一般用于修改VPC边界防火墙的入侵防御配置信息。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
    ),
    'DescribeVpcFirewallDefaultIPSConfig' => 
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
          'name' => 'VpcFirewallId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙的实例ID。取值：
- VPC边界防火墙防护云企业网内的网络实例（网络实例包含VPC、VBR和CCN）和指定VPC之间的互访流量时，实例ID使用云企业网实例ID。您可以通过调用[DescribeVpcFirewallCenList](~~345777~~)接口，查询云企业网的实例ID。
- VPC边界防火墙防护通过高速通道连接的两个VPC之间的流量时，实例ID使用VPC边界防火墙实例ID。您可以通过调用[DescribeVpcFirewallList](~~342932~~)接口，查询VPC边界防火墙的实例ID。
',
            'type' => 'string',
            'required' => true,
            'example' => 'vfw-m5e7dbc4y****',
          ),
        ),
        1 => 
        array (
          'name' => 'MemberUid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前阿里云账号的成员账号UID。',
            'type' => 'string',
            'required' => false,
            'example' => '258039427902****',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '850A84D6-0DE4-4797-A1E8-00090125adf1',
              ),
              'RunMode' => 
              array (
                'description' => 'IPS防御模式。取值：

- **1**：拦截模式。

- **0**：观察模式。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'EnableAllPatch' => 
              array (
                'description' => '虚拟补丁开关。取值：

- **1**：开。

- **0**：关。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'BasicRules' => 
              array (
                'description' => '基础规则开关。取值：

- **1**：开。

- **0**：关。',
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
            'errorCode' => 'ErrorParametersUid',
            'errorMessage' => 'The aliUid parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorVpcFirewallId',
            'errorMessage' => 'The VPC firewall ID is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorDBSelect',
            'errorMessage' => 'An error occurred while querying database.',
          ),
          3 => 
          array (
            'errorCode' => 'ErrorInvalidMemberUid',
            'errorMessage' => 'Member uid is invalid',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"850A84D6-0DE4-4797-A1E8-00090125adf1\\",\\n  \\"RunMode\\": 0,\\n  \\"EnableAllPatch\\": 1,\\n  \\"BasicRules\\": 1\\n}","errorExample":""},{"type":"xml","example":"<DescribeVpcFirewallDefaultIPSConfigResponse>\\n    <RequestId>850A84D6-0DE4-4797-A1E8-00090125adf1</RequestId>\\n    <RunMode>0</RunMode>\\n    <EnableAllPatch>1</EnableAllPatch>\\n    <BasicRules>1</BasicRules>\\n</DescribeVpcFirewallDefaultIPSConfigResponse>","errorExample":""}]',
      'title' => '获取指定VPC边界防火墙的入侵防御配置信息',
      'summary' => '获取指定VPC边界防火墙的入侵防御配置信息。',
      'description' => '本接口一般用于获取指定VPC边界防火墙的入侵防御配置信息。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
    ),
    'DeleteVpcFirewallConfigure' => 
    array (
      'summary' => '删除VPC边界防火墙（防护通过高速通道连接的两个VPC之间流量）。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文。

- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'VpcFirewallIdList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '要删除的VPC边界防火墙的实例ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'VPC边界防火墙的实例ID。

> 您可以通过调用[DescribeVpcFirewallList](~~342932~~)接口查询VPC边界防火墙的实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'vfw-m5e7dbc4y****',
            ),
            'required' => true,
            'maxItems' => 200,
          ),
        ),
        2 => 
        array (
          'name' => 'MemberUid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前阿里云账号的成员账号UID。',
            'type' => 'string',
            'required' => false,
            'example' => '258039427902****',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '850A84D6-0DE4-4797-A1E8-00090125k6j3',
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
            'errorCode' => 'ErrorAliUid',
            'errorMessage' => 'The aliuid is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorVpcFirewallNotFound',
            'errorMessage' => 'The specified VPC firewall does not exist. Please select again.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorDBTxError',
            'errorMessage' => 'A database transaction error occurred.',
          ),
          3 => 
          array (
            'errorCode' => 'ErrorDBUpdateError',
            'errorMessage' => 'A database update error occurred.',
          ),
          4 => 
          array (
            'errorCode' => 'ErrorRecordLog',
            'errorMessage' => 'An error occurred while updating the operation log.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"850A84D6-0DE4-4797-A1E8-00090125k6j3\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteVpcFirewallConfigureResponse>\\n    <RequestId>850A84D6-0DE4-4797-A1E8-00090125k6j3</RequestId>\\n</DeleteVpcFirewallConfigureResponse>","errorExample":""}]',
      'title' => '删除VPC边界防火墙',
      'description' => '本接口一般用于删除VPC边界防火墙。该VPC边界防火墙是防护通过高速通道连接的两个VPC之间流量。
调用本接口前，必须已经调用[CreateVpcFirewallConfigure](~~342893~~)接口创建了VPC边界防火墙。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
    ),
    'ModifyVpcFirewallConfigure' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文。

- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'VpcFirewallId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙的实例ID。

> 您可以调用[DescribeVpcFirewallList](~~342932~~)接口查询VPC边界防火墙的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'vfw-m5e7dbc4y****',
          ),
        ),
        2 => 
        array (
          'name' => 'VpcFirewallName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙的实例名称。',
            'type' => 'string',
            'required' => true,
            'example' => '测试环境防火墙',
          ),
        ),
        3 => 
        array (
          'name' => 'LocalVpcCidrTableList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本端VPC的网段信息，以JSON格式表示，具体包含以下参数：

- **RouteTableId**：表示本端VPC的路由表ID。

- **RouteEntryList**：该参数使用JSON格式，包含DestinationCidr（表示本端VPC的目标网段）和NextHopInstanceId（表示本端VPC的下一跳实例ID）。

> 您可以调用[DescribeVpcFirewallDetail](~~342892~~)接口查询VPC边界防火墙的本端VPC网段信息。',
            'type' => 'string',
            'required' => true,
            'example' => '[{"RouteTableId":"vtb-1234","RouteEntryList":[{"DestinationCidr":"192.168.XX.XX/24","NextHopInstanceId":"vrt-m5eb5me6c3l5sezae****"}]},{"RouteTableId":"vtb-1235","RouteEntryList":[{"DestinationCidr":"192.168.XX.XX/24","NextHopInstanceId":"vrt-m5eb5me6c3l5sezae****"}]}]',
          ),
        ),
        4 => 
        array (
          'name' => 'PeerVpcCidrTableList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '对端VPC的网段信息，以JSON格式表示，具体包含以下参数：

- **RouteTableId**：表示对端VPC的路由表ID。

- **RouteEntryList**：该参数使用JSON格式，包含DestinationCidr（表示对端VPC的目标网段）和NextHopInstanceId（表示对端VPC的下一跳实例ID）。

> 您可以调用[DescribeVpcFirewallDetail](~~342892~~)接口查询VPC边界防火墙的对端VPC网段信息。',
            'type' => 'string',
            'required' => true,
            'example' => '[{"RouteTableId":"vtb-1234","RouteEntryList":[{"DestinationCidr":"192.168.XX.XX/24","NextHopInstanceId":"vrt-m5eb5me6c3l5sezae****"}]},{"RouteTableId":"vtb-1235","RouteEntryList":[{"DestinationCidr":"192.168.XX.XX/24","NextHopInstanceId":"vrt-m5eb5me6c3l5sezae****"}]}]',
          ),
        ),
        5 => 
        array (
          'name' => 'MemberUid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前阿里云账号的成员账号UID。',
            'type' => 'string',
            'required' => false,
            'example' => '258039427902****',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '850A84D6-0DE4-4797-A1E8-00090125k6f8',
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
            'errorCode' => 'ErrorAliUid',
            'errorMessage' => 'The aliuid is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorVpcFirewallNotFound',
            'errorMessage' => 'The specified VPC firewall does not exist. Please select again.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorDBSelectError',
            'errorMessage' => 'A database select error occurred.',
          ),
          3 => 
          array (
            'errorCode' => 'ErrorUnmarshalJSON',
            'errorMessage' => 'An error occurred while parsing JSON.',
          ),
          4 => 
          array (
            'errorCode' => 'ErrorDBTxError',
            'errorMessage' => 'A database transaction error occurred.',
          ),
          5 => 
          array (
            'errorCode' => 'ErrorDBUpdateError',
            'errorMessage' => 'A database update error occurred.',
          ),
          6 => 
          array (
            'errorCode' => 'ErrorRecordLog',
            'errorMessage' => 'An error occurred while updating the operation log.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"850A84D6-0DE4-4797-A1E8-00090125k6f8\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyVpcFirewallConfigureResponse>\\n    <RequestId>850A84D6-0DE4-4797-A1E8-00090125k6f8</RequestId>\\n</ModifyVpcFirewallConfigureResponse>","errorExample":""}]',
      'title' => '修改VPC边界防火墙的配置信息',
      'summary' => '修改VPC边界防火墙（防护通过高速通道连接的两个VPC之间的流量）的配置信息。',
      'description' => '本接口一般用于修改VPC边界防火墙的配置信息。该VPC边界防火墙是防护通过高速通道连接的两个VPC之间的流量。
调用本接口前，必须已经调用[CreateVpcFirewallConfigure](~~342893~~)接口创建了VPC边界防火墙。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
    ),
    'ModifyVpcFirewallSwitchStatus' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文。

- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'VpcFirewallId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙的实例ID。

> 您可以通过调用[DescribeVpcFirewallList](~~342932~~)接口查询VPC边界防火墙的实例ID。
',
            'type' => 'string',
            'required' => true,
            'example' => 'vfw-m5e7dbc4y****',
          ),
        ),
        2 => 
        array (
          'name' => 'FirewallSwitch',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置VPC边界防火墙的开关状态。取值：

- **open**：开启。

- **close**：关闭。',
            'type' => 'string',
            'required' => true,
            'example' => 'open',
          ),
        ),
        3 => 
        array (
          'name' => 'MemberUid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前阿里云账号的成员账号UID。',
            'type' => 'string',
            'required' => false,
            'example' => '258039427902****',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '850A84D6-0DE4-4797-A1E8-00090125afj2',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        200 => 
        array (
          0 => 
          array (
            'errorCode' => 'ErrorDBUpdateError',
            'errorMessage' => 'A database update error occurred.',
          ),
        ),
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ErrorFirewallSwitch',
            'errorMessage' => 'The firewall enabling parameter is incorrect. Please select again.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorDBTxError',
            'errorMessage' => 'A database transaction error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorRecordLog',
            'errorMessage' => 'An error occurred while updating the operation log.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"850A84D6-0DE4-4797-A1E8-00090125afj2\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyVpcFirewallSwitchStatusResponse>\\n    <RequestId>850A84D6-0DE4-4797-A1E8-00090125afj2</RequestId>\\n</ModifyVpcFirewallSwitchStatusResponse>","errorExample":""}]',
      'title' => '修改VPC边界防火墙的开关状态',
      'summary' => '修改VPC边界防火墙（防护通过高速通道连接的两个VPC之间的流量）的开关状态。',
      'description' => '本接口一般用于修改VPC边界防火墙的开关状态。该VPC边界防火墙是防护通过高速通道连接的两个VPC之间的流量。打开VPC边界防火墙的开关后，高速通道连接的两个VPC之间的互访流量会受VPC边界防火墙防护。关闭VPC边界防火墙的开关后，VPC边界防火墙不再防护通过高速通道连接的两个VPC之间的互访流量。

调用本接口前，必须已经调用[CreateVpcFirewallConfigure](~~342893~~)接口创建了VPC边界防火墙。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
    ),
    'DescribeVpcFirewallDetail' => 
    array (
      'summary' => '查询VPC边界防火墙（防护通过高速通道连接的两个VPC之间的流量）的详细信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文。

- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文。

- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'VpcFirewallId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙的实例ID。

> 您可以调用[DescribeVpcFirewallList](~~342932~~)接口查询VPC边界防火墙的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'vfw-m5e7dbc4y****',
          ),
        ),
        3 => 
        array (
          'name' => 'LocalVpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本端VPC的实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-8vbwbo90rq0anm6t****',
          ),
        ),
        4 => 
        array (
          'name' => 'PeerVpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '对端VPC的实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-90rq0anm6t8vbwbo****',
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
              'ConnectType' => 
              array (
                'description' => 'VPC边界防火墙的互通类型。取值：**expressconnect**，表示高速通道。

',
                'type' => 'string',
                'example' => 'expressconnect',
              ),
              'VpcFirewallId' => 
              array (
                'description' => 'VPC边界防火墙实例ID。',
                'type' => 'string',
                'example' => 'vfw-m5e7dbc4y****',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '850A84D6-0DE4-4797-A1E8-00090125g4d2',
              ),
              'Bandwidth' => 
              array (
                'description' => '高速通道的带宽规格。单位：Mbps。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'VpcFirewallName' => 
              array (
                'description' => 'VPC边界防火墙的实例名称。',
                'type' => 'string',
                'example' => '测试防火墙',
              ),
              'FirewallSwitchStatus' => 
              array (
                'description' => 'VPC边界防火墙的状态。取值：
- **opened**：已开启。
- **closed**：已关闭。
- **notconfigured**：表示暂未配置VPC边界防火墙。
- **configured**：表示已配置VPC边界防火墙。',
                'type' => 'string',
                'example' => 'opened',
              ),
              'LocalVpc' => 
              array (
                'description' => '本端VPC的详细信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'VpcId' => 
                  array (
                    'description' => '本端VPC的实例ID。',
                    'type' => 'string',
                    'example' => 'vpc-8vbwbo90rq0anm6t****',
                  ),
                  'VpcName' => 
                  array (
                    'description' => '本端VPC的实例名称。',
                    'type' => 'string',
                    'example' => '测试用实例',
                  ),
                  'RegionNo' => 
                  array (
                    'description' => '本端VPC所属地域ID。',
                    'type' => 'string',
                    'example' => 'cn-hangzhou',
                  ),
                  'EniPrivateIpAddress' => 
                  array (
                    'description' => '本端VPC中弹性网卡私网IP。',
                    'type' => 'string',
                    'example' => '192.168.XX.XX',
                  ),
                  'RouterInterfaceId' => 
                  array (
                    'description' => '本端VPC中路由器接口ID。',
                    'type' => 'string',
                    'example' => 'vrt-m5eb5me6c3l5sezae****',
                  ),
                  'EniId' => 
                  array (
                    'description' => '本端VPC中弹性网卡的实例ID。',
                    'type' => 'string',
                    'example' => 'eni-8vbhfosfqv2rff42****',
                  ),
                  'VpcCidrTableList' => 
                  array (
                    'description' => '本端VPC的网段列表信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RouteTableId' => 
                        array (
                          'description' => '本端VPC的路由表ID。',
                          'type' => 'string',
                          'example' => 'vtb-1234',
                        ),
                        'RouteEntryList' => 
                        array (
                          'description' => '本端VPC的路由条目列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'NextHopInstanceId' => 
                              array (
                                'description' => '本端VPC中的下一跳实例ID。',
                                'type' => 'string',
                                'example' => 'vrt-m5eb5me6c3l5sezae****',
                              ),
                              'DestinationCidr' => 
                              array (
                                'description' => '本端VPC的目标网段。',
                                'type' => 'string',
                                'example' => '192.168.XX.XX/24',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'PeerVpc' => 
              array (
                'description' => '对端VPC的详细信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'VpcId' => 
                  array (
                    'description' => '对端VPC的实例ID。',
                    'type' => 'string',
                    'example' => 'vpc-90rq0anm6t8vbwbo****',
                  ),
                  'VpcName' => 
                  array (
                    'description' => '对端VPC的实例名称。',
                    'type' => 'string',
                    'example' => '测试vpc2',
                  ),
                  'RegionNo' => 
                  array (
                    'description' => '对端VPC所属地域ID。',
                    'type' => 'string',
                    'example' => 'cn-hangzhou',
                  ),
                  'EniPrivateIpAddress' => 
                  array (
                    'description' => '对端VPC中弹性网卡私网IP。',
                    'type' => 'string',
                    'example' => '192.168.XX.XX',
                  ),
                  'RouterInterfaceId' => 
                  array (
                    'description' => '对端VPC中路由器接口ID。',
                    'type' => 'string',
                    'example' => 'vrt-m5eb5me6c3l5sezae****',
                  ),
                  'EniId' => 
                  array (
                    'description' => '对端VPC中弹性网卡的实例ID。',
                    'type' => 'string',
                    'example' => 'eni-8vbhfosfqv2rff42****',
                  ),
                  'VpcCidrTableList' => 
                  array (
                    'description' => '对端VPC的网段列表信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RouteTableId' => 
                        array (
                          'description' => '对端VPC的路由表ID。',
                          'type' => 'string',
                          'example' => 'vtb-1256',
                        ),
                        'RouteEntryList' => 
                        array (
                          'description' => '对端VPC路由条目列表信息。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'NextHopInstanceId' => 
                              array (
                                'description' => '对端VPC中的下一跳实例ID。',
                                'type' => 'string',
                                'example' => 'vrt-m5eb5me6c3l5sezae****',
                              ),
                              'DestinationCidr' => 
                              array (
                                'description' => '对端VPC的目标网段。',
                                'type' => 'string',
                                'example' => '192.168.XX.XX/24',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'MemberUid' => 
              array (
                'description' => '云防火墙成员账号的UID。',
                'type' => 'string',
                'example' => '258039427902****',
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
            'errorCode' => 'ErrorAliUid',
            'errorMessage' => 'The aliuid is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorFirewallNotFound',
            'errorMessage' => 'Firewall not found',
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ConnectType\\": \\"expressconnect\\",\\n  \\"VpcFirewallId\\": \\"vfw-m5e7dbc4y****\\",\\n  \\"RequestId\\": \\"850A84D6-0DE4-4797-A1E8-00090125g4d2\\",\\n  \\"Bandwidth\\": 2,\\n  \\"VpcFirewallName\\": \\"测试防火墙\\",\\n  \\"FirewallSwitchStatus\\": \\"opened\\",\\n  \\"LocalVpc\\": {\\n    \\"VpcId\\": \\"vpc-8vbwbo90rq0anm6t****\\",\\n    \\"VpcName\\": \\"测试用实例\\",\\n    \\"RegionNo\\": \\"cn-hangzhou\\",\\n    \\"EniPrivateIpAddress\\": \\"192.168.XX.XX\\",\\n    \\"RouterInterfaceId\\": \\"vrt-m5eb5me6c3l5sezae****\\",\\n    \\"EniId\\": \\"eni-8vbhfosfqv2rff42****\\",\\n    \\"VpcCidrTableList\\": [\\n      {\\n        \\"RouteTableId\\": \\"vtb-1234\\",\\n        \\"RouteEntryList\\": [\\n          {\\n            \\"NextHopInstanceId\\": \\"vrt-m5eb5me6c3l5sezae****\\",\\n            \\"DestinationCidr\\": \\"192.168.XX.XX/24\\"\\n          }\\n        ]\\n      }\\n    ]\\n  },\\n  \\"PeerVpc\\": {\\n    \\"VpcId\\": \\"vpc-90rq0anm6t8vbwbo****\\",\\n    \\"VpcName\\": \\"测试vpc2\\",\\n    \\"RegionNo\\": \\"cn-hangzhou\\",\\n    \\"EniPrivateIpAddress\\": \\"192.168.XX.XX\\",\\n    \\"RouterInterfaceId\\": \\"vrt-m5eb5me6c3l5sezae****\\",\\n    \\"EniId\\": \\"eni-8vbhfosfqv2rff42****\\",\\n    \\"VpcCidrTableList\\": [\\n      {\\n        \\"RouteTableId\\": \\"vtb-1256\\",\\n        \\"RouteEntryList\\": [\\n          {\\n            \\"NextHopInstanceId\\": \\"vrt-m5eb5me6c3l5sezae****\\",\\n            \\"DestinationCidr\\": \\"192.168.XX.XX/24\\"\\n          }\\n        ]\\n      }\\n    ]\\n  },\\n  \\"MemberUid\\": \\"258039427902****\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeVpcFirewallDetailResponse>\\n    <ConnectType>expressconnect</ConnectType>\\n    <VpcFirewallId>vfw-m5e7dbc4y****</VpcFirewallId>\\n    <RequestId>850A84D6-0DE4-4797-A1E8-00090125g4d2</RequestId>\\n    <Bandwidth>2</Bandwidth>\\n    <VpcFirewallName>测试防火墙</VpcFirewallName>\\n    <FirewallSwitchStatus>opened</FirewallSwitchStatus>\\n    <LocalVpc>\\n        <VpcId>vpc-8vbwbo90rq0anm6t****</VpcId>\\n        <VpcName>测试用实例</VpcName>\\n        <RegionNo>cn-hangzhou</RegionNo>\\n        <EniPrivateIpAddress>192.168.XX.XX</EniPrivateIpAddress>\\n        <RouterInterfaceId>vrt-m5eb5me6c3l5sezae****</RouterInterfaceId>\\n        <EniId>eni-8vbhfosfqv2rff42****</EniId>\\n        <VpcCidrTableList>\\n            <RouteTableId>vtb-1234</RouteTableId>\\n            <RouteEntryList>\\n                <NextHopInstanceId>vrt-m5eb5me6c3l5sezae****</NextHopInstanceId>\\n                <DestinationCidr>192.168.XX.XX/24</DestinationCidr>\\n            </RouteEntryList>\\n        </VpcCidrTableList>\\n    </LocalVpc>\\n    <PeerVpc>\\n        <VpcId>vpc-90rq0anm6t8vbwbo****</VpcId>\\n        <VpcName>测试vpc2</VpcName>\\n        <RegionNo>cn-hangzhou</RegionNo>\\n        <EniPrivateIpAddress>192.168.XX.XX</EniPrivateIpAddress>\\n        <RouterInterfaceId>vrt-m5eb5me6c3l5sezae****</RouterInterfaceId>\\n        <EniId>eni-8vbhfosfqv2rff42****</EniId>\\n        <VpcCidrTableList>\\n            <RouteTableId>vtb-1256</RouteTableId>\\n            <RouteEntryList>\\n                <NextHopInstanceId>vrt-m5eb5me6c3l5sezae****</NextHopInstanceId>\\n                <DestinationCidr>192.168.XX.XX/24</DestinationCidr>\\n            </RouteEntryList>\\n        </VpcCidrTableList>\\n    </PeerVpc>\\n    <MemberUid>258039427902****</MemberUid>\\n</DescribeVpcFirewallDetailResponse>","errorExample":""}]',
      'title' => '查询VPC边界防火墙的详情',
      'description' => '本接口用于获取VPC边界防火墙的详细信息。该VPC边界防火墙是防护通过高速通道连接的两个VPC之间的流量。
调用本接口前，必须已经调用[CreateVpcFirewallConfigure](~~342893~~)接口创建了VPC边界防火墙。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
    ),
    'DescribeVpcFirewallList' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文。
- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文。
- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC所在的地域ID。

> 关于云防火墙支持地域的详细信息，请参见[支持的地域](~~195657~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-8vbwbo90rq0anm6t****',
          ),
        ),
        4 => 
        array (
          'name' => 'FirewallSwitchStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙的状态。取值：

- **opened**：已开启。
- **closed**：已关闭。
- **notconfigured**：表示暂未配置VPC边界防火墙。
- **configured**：表示已配置VPC边界防火墙。

> 不设置该参数表示查询所有状态的VPC边界防火墙。',
            'type' => 'string',
            'required' => false,
            'example' => 'opened',
          ),
        ),
        5 => 
        array (
          'name' => 'VpcFirewallId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙的实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vfw-m5e7dbc4y****',
          ),
        ),
        6 => 
        array (
          'name' => 'VpcFirewallName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙的实例名称。',
            'type' => 'string',
            'required' => false,
            'example' => '测试环境防火墙',
          ),
        ),
        7 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，设置当前页面的页码。

默认值为**1**，表示返回第**1**页数据。',
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
            'description' => '分页查询时，设置每页包含VPC边界防火墙的数量。

默认值为**10**，表示每页包含**10**条结果。最大值为**50**。',
            'type' => 'string',
            'required' => false,
            'example' => '10',
          ),
        ),
        9 => 
        array (
          'name' => 'MemberUid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前阿里云账号的成员账号UID。',
            'type' => 'string',
            'required' => false,
            'example' => '258039427902****',
          ),
        ),
        10 => 
        array (
          'name' => 'ConnectSubType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '连接子类型。取值：

- **vpc2vpc**：高速通道。
- **vpcpeer**：对等连接。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpcpeer',
          ),
        ),
        11 => 
        array (
          'name' => 'PeerUid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '对端VPC云账号UID。',
            'type' => 'string',
            'required' => false,
            'example' => '258039427902****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'VPC防火墙的列表。',
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => 'VPC边界防火墙的总数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '850A84D6-0DE4-4797-A1E8-00090125k8g2',
              ),
              'VpcFirewalls' => 
              array (
                'description' => 'VPC边界防火墙的详细信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'VPC边界防火墙的详细信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ConnectType' => 
                    array (
                      'description' => 'VPC边界防火墙的互通类型。取值：**expressconnect**，表示高速通道。',
                      'type' => 'string',
                      'example' => 'expressconnect',
                    ),
                    'VpcFirewallId' => 
                    array (
                      'description' => 'VPC边界防火墙的实例ID。',
                      'type' => 'string',
                      'example' => 'vfw-m5e7dbc4y****',
                    ),
                    'RegionStatus' => 
                    array (
                      'description' => '地域开放状态。取值：

- **enable**：已开放，表示该地域允许配置VPC边界防火墙。
- **disable**：未开放，表示该地域不允许配置VPC边界防火墙。',
                      'type' => 'string',
                      'example' => 'enable',
                    ),
                    'Bandwidth' => 
                    array (
                      'description' => '高速通道的带宽规格。单位：Mbps。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'VpcFirewallName' => 
                    array (
                      'description' => 'VPC边界防火墙的实例名称。',
                      'type' => 'string',
                      'example' => '测试防火墙',
                    ),
                    'FirewallSwitchStatus' => 
                    array (
                      'description' => 'VPC边界防火墙开关的状态。取值：

- **opened**：已开启。
- **closed**：已关闭。
- **notconfigured**：表示暂未配置VPC边界防火墙。',
                      'type' => 'string',
                      'example' => 'opened',
                    ),
                    'LocalVpc' => 
                    array (
                      'description' => '本端VPC的详细信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'VpcName' => 
                        array (
                          'description' => '本端VPC的实例名称。',
                          'type' => 'string',
                          'example' => '测试用实例',
                        ),
                        'VpcId' => 
                        array (
                          'description' => '本端VPC的实例ID。',
                          'type' => 'string',
                          'example' => 'vpc-8vbwbo90rq0anm6t****',
                        ),
                        'AuthorizationStatus' => 
                        array (
                          'description' => '本端VPC的授权状态。取值：authorized，表示已授权。',
                          'type' => 'string',
                          'example' => 'authorized',
                        ),
                        'OwnerId' => 
                        array (
                          'description' => '本端VPC所属阿里云账号的UID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '158039427902****',
                        ),
                        'RegionNo' => 
                        array (
                          'description' => '本端VPC所属地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'VpcCidrTableList' => 
                        array (
                          'description' => '本端VPC的网段列表信息。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '本端VPC的网段列表信息。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'RouteTableId' => 
                              array (
                                'description' => '本端VPC的路由表ID。',
                                'type' => 'string',
                                'example' => 'vtb-1234',
                              ),
                              'RouteEntryList' => 
                              array (
                                'description' => '本端VPC的路由条目列表。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '本端VPC的路由条目列表。',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'NextHopInstanceId' => 
                                    array (
                                      'description' => '本端VPC的下一跳实例ID。',
                                      'type' => 'string',
                                      'example' => 'vrt-m5eb5me6c3l5sezae****',
                                    ),
                                    'DestinationCidr' => 
                                    array (
                                      'description' => '本端VPC的目标网段。',
                                      'type' => 'string',
                                      'example' => '192.168.XX.XX/24',
                                    ),
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                    'PeerVpc' => 
                    array (
                      'description' => '对端VPC的详细信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'VpcName' => 
                        array (
                          'description' => '对端VPC的实例名称。',
                          'type' => 'string',
                          'example' => '测试vpc2',
                        ),
                        'VpcId' => 
                        array (
                          'description' => '对端VPC的实例ID。',
                          'type' => 'string',
                          'example' => 'vpc-8vbwbo90rq0anm6t****',
                        ),
                        'AuthorizationStatus' => 
                        array (
                          'description' => '对端VPC的授权状态。取值：**authorized**，表示已授权。',
                          'type' => 'string',
                          'example' => 'authorized',
                        ),
                        'OwnerId' => 
                        array (
                          'description' => '对端VPC所属的阿里云账号的UID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '158039427902****',
                        ),
                        'RegionNo' => 
                        array (
                          'description' => '对端VPC所属地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'VpcCidrTableList' => 
                        array (
                          'description' => '对端VPC网段列表信息。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '对端VPC网段列表信息。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'RouteTableId' => 
                              array (
                                'description' => '对端VPC的路由表ID。',
                                'type' => 'string',
                                'example' => 'vtb-1256',
                              ),
                              'RouteEntryList' => 
                              array (
                                'description' => '对端VPC路由条目列表信息。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '对端VPC路由条目列表信息。',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'NextHopInstanceId' => 
                                    array (
                                      'description' => '对端VPC的下一跳实例ID。',
                                      'type' => 'string',
                                      'example' => 'vrt-m5eb5me6c3l5sezae****',
                                    ),
                                    'DestinationCidr' => 
                                    array (
                                      'description' => '对端VPC的目标网段。',
                                      'type' => 'string',
                                      'example' => '192.168.XX.XX/24',
                                    ),
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                    'IpsConfig' => 
                    array (
                      'description' => 'IPS配置信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'BasicRules' => 
                        array (
                          'description' => '基础规则开关。取值：

- **1**：开启状态。
- **0**：关闭状态。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'EnableAllPatch' => 
                        array (
                          'description' => '虚拟补丁开关。取值：

- **1**：开启状态。
- **0**：关闭状态。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'RunMode' => 
                        array (
                          'description' => 'IPS防御模式。取值：

- **1**：拦截模式。
- **0**：观察模式。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                      ),
                    ),
                    'MemberUid' => 
                    array (
                      'description' => '阿里云成员账号的UID。',
                      'type' => 'string',
                      'example' => '258039427902****',
                    ),
                    'ResultCode' => 
                    array (
                      'description' => '创建VPC边界防火墙的操作结果代码。取值：

- **Unauthorized**：表示存在未授权的VPC, 不允许创建VPC边界防火墙。
- **RegionDisable**：表示VPC所在的地域是VPC边界防火墙不支持的地域, 不允许创建VPC边界防火墙。
- **空字符串**：表示该网络实例可以正常创建VPC边界防火墙。',
                      'type' => 'string',
                      'example' => 'Unauthorized',
                    ),
                    'ConnectSubType' => 
                    array (
                      'description' => '连接子类型。取值：

- **vpc2vpc**：高速通道。
- **vpcpeer**：对等连接。',
                      'type' => 'string',
                      'example' => 'vpcpeer',
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
            'errorCode' => 'ErrorDBSelectError',
            'errorMessage' => 'A database select error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorPageNo',
            'errorMessage' => 'Either page number or page size is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorUnmarshalJSON',
            'errorMessage' => 'An error occurred while parsing JSON.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 10,\\n  \\"RequestId\\": \\"850A84D6-0DE4-4797-A1E8-00090125k8g2\\",\\n  \\"VpcFirewalls\\": [\\n    {\\n      \\"ConnectType\\": \\"expressconnect\\",\\n      \\"VpcFirewallId\\": \\"vfw-m5e7dbc4y****\\",\\n      \\"RegionStatus\\": \\"enable\\",\\n      \\"Bandwidth\\": 2,\\n      \\"VpcFirewallName\\": \\"测试防火墙\\",\\n      \\"FirewallSwitchStatus\\": \\"opened\\",\\n      \\"LocalVpc\\": {\\n        \\"VpcName\\": \\"测试用实例\\",\\n        \\"VpcId\\": \\"vpc-8vbwbo90rq0anm6t****\\",\\n        \\"AuthorizationStatus\\": \\"authorized\\",\\n        \\"OwnerId\\": 0,\\n        \\"RegionNo\\": \\"cn-hangzhou\\",\\n        \\"VpcCidrTableList\\": [\\n          {\\n            \\"RouteTableId\\": \\"vtb-1234\\",\\n            \\"RouteEntryList\\": [\\n              {\\n                \\"NextHopInstanceId\\": \\"vrt-m5eb5me6c3l5sezae****\\",\\n                \\"DestinationCidr\\": \\"192.168.XX.XX/24\\"\\n              }\\n            ]\\n          }\\n        ]\\n      },\\n      \\"PeerVpc\\": {\\n        \\"VpcName\\": \\"测试vpc2\\",\\n        \\"VpcId\\": \\"vpc-8vbwbo90rq0anm6t****\\",\\n        \\"AuthorizationStatus\\": \\"authorized\\",\\n        \\"OwnerId\\": 0,\\n        \\"RegionNo\\": \\"cn-hangzhou\\",\\n        \\"VpcCidrTableList\\": [\\n          {\\n            \\"RouteTableId\\": \\"vtb-1256\\",\\n            \\"RouteEntryList\\": [\\n              {\\n                \\"NextHopInstanceId\\": \\"vrt-m5eb5me6c3l5sezae****\\",\\n                \\"DestinationCidr\\": \\"192.168.XX.XX/24\\"\\n              }\\n            ]\\n          }\\n        ]\\n      },\\n      \\"IpsConfig\\": {\\n        \\"BasicRules\\": 1,\\n        \\"EnableAllPatch\\": 1,\\n        \\"RunMode\\": 0\\n      },\\n      \\"MemberUid\\": \\"258039427902****\\",\\n      \\"ResultCode\\": \\"Unauthorized\\",\\n      \\"ConnectSubType\\": \\"vpcpeer\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeVpcFirewallListResponse>\\n    <TotalCount>10</TotalCount>\\n    <RequestId>850A84D6-0DE4-4797-A1E8-00090125k8g2</RequestId>\\n    <VpcFirewalls>\\n        <ConnectType>expressconnect</ConnectType>\\n        <VpcFirewallId>vfw-m5e7dbc4y****</VpcFirewallId>\\n        <RegionStatus>enable</RegionStatus>\\n        <Bandwidth>2</Bandwidth>\\n        <VpcFirewallName>测试防火墙</VpcFirewallName>\\n        <FirewallSwitchStatus>opened</FirewallSwitchStatus>\\n        <LocalVpc>\\n            <VpcName>测试用实例</VpcName>\\n            <VpcId>vpc-8vbwbo90rq0anm6t****</VpcId>\\n            <AuthorizationStatus>authorized</AuthorizationStatus>\\n            <RegionNo>cn-hangzhou</RegionNo>\\n            <VpcCidrTableList>\\n                <RouteTableId>vtb-1234</RouteTableId>\\n                <RouteEntryList>\\n                    <NextHopInstanceId>vrt-m5eb5me6c3l5sezae****</NextHopInstanceId>\\n                    <DestinationCidr>192.168.XX.XX/24</DestinationCidr>\\n                </RouteEntryList>\\n            </VpcCidrTableList>\\n        </LocalVpc>\\n        <PeerVpc>\\n            <VpcName>测试vpc2</VpcName>\\n            <VpcId>vpc-8vbwbo90rq0anm6t****</VpcId>\\n            <AuthorizationStatus>authorized</AuthorizationStatus>\\n            <RegionNo>cn-hangzhou</RegionNo>\\n            <VpcCidrTableList>\\n                <RouteTableId>vtb-1256</RouteTableId>\\n                <RouteEntryList>\\n                    <NextHopInstanceId>vrt-m5eb5me6c3l5sezae****</NextHopInstanceId>\\n                    <DestinationCidr>192.168.XX.XX/24</DestinationCidr>\\n                </RouteEntryList>\\n            </VpcCidrTableList>\\n        </PeerVpc>\\n        <IpsConfig>\\n            <BasicRules>1</BasicRules>\\n            <EnableAllPatch>1</EnableAllPatch>\\n            <RunMode>0</RunMode>\\n        </IpsConfig>\\n        <MemberUid>258039427902****</MemberUid>\\n    </VpcFirewalls>\\n</DescribeVpcFirewallListResponse>","errorExample":""}]',
      'title' => '获取高速通道防火墙列表',
      'summary' => '查询VPC边界防火墙（防护通过高速通道连接的两个VPC之间的流量）的信息。',
      'description' => '本接口一般用于分页查询VPC边界防火墙的信息。该VPC边界防火墙是防护通过高速通道连接两个VPC之间的流量。

### QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
    ),
    'CreateVpcFirewallConfigure' => 
    array (
      'summary' => '创建VPC边界防火墙（防护通过高速通道连接的两个VPC之间的流量）。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文。

- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'VpcFirewallName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙的实例名称。',
            'type' => 'string',
            'required' => true,
            'example' => '测试用实例',
          ),
        ),
        2 => 
        array (
          'name' => 'LocalVpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本端VPC的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'vpc-8vbwbo90rq0anm6t****',
          ),
        ),
        3 => 
        array (
          'name' => 'LocalVpcRegion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本端VPC所属地域ID。

> 关于云防火墙支持地域的详细信息，请参见[支持的地域](~~195657~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        4 => 
        array (
          'name' => 'PeerVpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '对端VPC的实例ID。
',
            'type' => 'string',
            'required' => true,
            'example' => 'vpc-wb8vbo90rq0anm6t****',
          ),
        ),
        5 => 
        array (
          'name' => 'PeerVpcRegion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '对端VPC所属地域ID。
> 关于云防火墙支持地域的详细信息，请参见[支持的地域](~~195657~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        6 => 
        array (
          'name' => 'FirewallSwitch',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置VPC边界防火墙创建后的开启状态。取值： 

- **open**（默认）：创建VPC边界防火墙后自动开启防护。

- **close**：创建VPC边界防火墙后不自动开启防护。您可以调用接口[ModifyVpcFirewallSwitchStatus](~~342935~~)开启防护。
',
            'type' => 'string',
            'required' => true,
            'example' => 'open',
          ),
        ),
        7 => 
        array (
          'name' => 'LocalVpcCidrTableList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本端VPC的网段列表，以JSON格式表示，具体包含以下参数：

- **RouteTableId**：表示本端VPC的路由表ID。
- **RouteEntryList**：该参数使用JSON格式，包含DestinationCidr（表示本端VPC的目标网段）和NextHopInstanceId（表示本端VPC的下一跳实例ID）。',
            'type' => 'string',
            'required' => true,
            'example' => '[{"RouteTableId":"vtb-1234","RouteEntryList":[{"DestinationCidr":"192.168.XX.XX/24","NextHopInstanceId":"vrt-m5eb5me6c3l5sezae****"}]},{"RouteTableId":"vtb-1235","RouteEntryList":[{"DestinationCidr":"192.168.XX.XX/24","NextHopInstanceId":"vrt-m5eb5me6c3l5sezae****"}]}]',
          ),
        ),
        8 => 
        array (
          'name' => 'PeerVpcCidrTableList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '对端VPC的网段列表，以JSON格式表示，具体包含以下参数：
- **RouteTableId**：表示对端VPC的路由表ID。
- **RouteEntryList**：该参数使用JSON格式，包含DestinationCidr（表示对端VPC的目标网段）和NextHopInstanceId（表示对端VPC的下一跳实例ID）。',
            'type' => 'string',
            'required' => true,
            'example' => '[{"RouteTableId":"vtb-1234","RouteEntryList":[{"DestinationCidr":"192.168.XX.XX/24","NextHopInstanceId":"vrt-m5eb5me6c3l5sezae****"}]},{"RouteTableId":"vtb-1235","RouteEntryList":[{"DestinationCidr":"192.168.XX.XX/24","NextHopInstanceId":"vrt-m5eb5me6c3l5sezae****"}]}]',
          ),
        ),
        9 => 
        array (
          'name' => 'MemberUid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阿里云成员账号的UID。',
            'type' => 'string',
            'required' => false,
            'example' => '258039427902****',
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
              'VpcFirewallId' => 
              array (
                'description' => 'VPC边界防火墙实例ID。',
                'type' => 'string',
                'example' => 'vfw-m5e7dbc4y****',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '850A84D6-0DE4-4797-A1E8-00090125h4j6',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"VpcFirewallId\\": \\"vfw-m5e7dbc4y****\\",\\n  \\"RequestId\\": \\"850A84D6-0DE4-4797-A1E8-00090125h4j6\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateVpcFirewallConfigureResponse>\\n    <VpcFirewallId>vfw-m5e7dbc4y****</VpcFirewallId>\\n    <RequestId>850A84D6-0DE4-4797-A1E8-00090125h4j6</RequestId>\\n</CreateVpcFirewallConfigureResponse>","errorExample":""}]',
      'title' => '创建VPC边界防火墙',
      'description' => '本接口一般用于创建VPC边界防火墙。该VPC边界防火墙是防护通过高速通道连接的两个VPC之间的流量。该VPC边界防火墙不支持防护VPC跨地域、跨账号以及VPC与VBR间的互访流量。更多信息，请参见[VPC边界防火墙限制说明](~~172295~~)。

### QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
    ),
    'CreateVpcFirewallCenConfigure' => 
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
        'abilityTreeCode' => '68133',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcfwMD8M6R',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文。

- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'VpcFirewallName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙的实例名称。',
            'type' => 'string',
            'required' => true,
            'example' => '测试用实例',
          ),
        ),
        2 => 
        array (
          'name' => 'NetworkInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建VPC边界防火墙的VPC实例ID。
',
            'type' => 'string',
            'required' => true,
            'example' => 'vpc-bp10zlifxh6j0232w****',
          ),
        ),
        3 => 
        array (
          'name' => 'VpcRegion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建VPC边界防火墙的VPC所属地域ID。

> 关于云防火墙支持地域的详细信息，请参见[支持的地域](~~195657~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        4 => 
        array (
          'name' => 'FirewallSwitch',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置VPC边界防火墙的开关状态。取值：

- **open**（默认）：创建VPC边界防火墙后自动开启防护。
- **close**：创建VPC边界防火墙后不自动开启防护。您可以调用接口[ModifyVpcFirewallCenSwitchStatus](~~345780~~)开启防护。',
            'type' => 'string',
            'required' => true,
            'example' => 'open',
          ),
        ),
        5 => 
        array (
          'name' => 'CenId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云企业网实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cen-x5jayxou71ad73****',
          ),
        ),
        6 => 
        array (
          'name' => 'MemberUid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前阿里云账号的成员账号UID。',
            'type' => 'string',
            'required' => false,
            'example' => '258039427902****',
          ),
        ),
        7 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定云防火墙接口所属的vSwitch ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-qzeaol304m***',
          ),
        ),
        8 => 
        array (
          'name' => 'FirewallVpcCidrBlock',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '防火墙所使用VPC网段, 需配置子网掩码不大于28位网段来分配给创建防火墙过程所需VPC网段，用以自动创建防火墙安全VPC（Cloud_Firewall_VPC）进行流量引流处理。

如果不填此参数，则默认自动分配网段10.0.0.0/8。

> 参数仅本CEN本地域首次创建VPC防火墙时有效。',
            'type' => 'string',
            'required' => false,
            'example' => '10.0.0.0/8',
          ),
        ),
        9 => 
        array (
          'name' => 'FirewallVpcZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '防火墙交换机所属的可用区ID。
如果您的业务延时敏感，您可以自定义防火墙交换机可用区和业务VPC交换机可用区相同，以便降低延时。

如果不填此参数，则默认自动分配交换机可用区。



> 参数仅本CEN本地域首次创建VPC防火墙时有效。关于各地域可用区的详细信息，请参见[查询可用区列表API](~~36064~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-a',
          ),
        ),
        10 => 
        array (
          'name' => 'FirewallVSwitchCidrBlock',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '防火墙所使用vSwitch网段, 需配置子网掩码不大于29位且不与网络规划冲突的网段来分配给创建防火墙过程所需vSwitch网段，用以自动创建防火墙安全VPC内的交换机（Cloud_Firewall_VSWITCH）进行流量引流处理。交换机网段必须是防火墙VPC网段的子网。

如果不填此参数, 则默认自动分配网段10.219.219.216/29。

> 参数仅本CEN本地域首次创建VPC防火墙时有效。',
            'type' => 'string',
            'required' => false,
            'example' => '10.0.*.*/28',
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
              'VpcFirewallId' => 
              array (
                'description' => 'VPC边界防火墙的实例ID。',
                'type' => 'string',
                'example' => 'vfw-m5e7dbc4y****',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '850A84D6-0DE4-4797-A1E8-00090125h4j6',
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
            'errorCode' => 'ErrorAliUid',
            'errorMessage' => 'The aliuid is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorVpcFirewallExist',
            'errorMessage' => 'The firewall has been configured and cannot be created repeatedly.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorVpcId',
            'errorMessage' => 'The VPC ID is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'ErrorRegionNoError',
            'errorMessage' => 'The region is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'ErrorVpcFirewallNotFound',
            'errorMessage' => 'The specified VPC firewall does not exist. Please select again.',
          ),
          5 => 
          array (
            'errorCode' => 'ErrorDBSelectError',
            'errorMessage' => 'A database select error occurred.',
          ),
          6 => 
          array (
            'errorCode' => 'ErrorDBTxError',
            'errorMessage' => 'A database transaction error occurred.',
          ),
          7 => 
          array (
            'errorCode' => 'ErrorDBUpdateError',
            'errorMessage' => 'A database update error occurred.',
          ),
          8 => 
          array (
            'errorCode' => 'ErrorRecordLog',
            'errorMessage' => 'An error occurred while updating the operation log.',
          ),
          9 => 
          array (
            'errorCode' => 'ErrorCenVbrNotSupport',
            'errorMessage' => '云企业网vbr不支持开防火墙',
          ),
          10 => 
          array (
            'errorCode' => 'ErrorCenNotSupportCCN',
            'errorMessage' => 'VPC防火墙云企业网CCN实例, 不支持开启VPC防火墙',
          ),
          11 => 
          array (
            'errorCode' => 'ErrorCenNotSupportMultipleAccounts',
            'errorMessage' => 'The current version of Cloud Firewall does not support multiple accounts when it uses VPC Firewall to protect Cloud Enterprise Network. Upgrade the specifications and try again.',
          ),
          12 => 
          array (
            'errorCode' => 'ErrorFirewallStatus',
            'errorMessage' => 'Firewall status error, please try again later.',
          ),
          13 => 
          array (
            'errorCode' => 'ErrorFirewallQuotaNotEmpty',
            'errorMessage' => 'quota is not enough, unable to configure VPC firewall, please increase quota first.',
          ),
          14 => 
          array (
            'errorCode' => 'ErrorHubvpcCannotCreate',
            'errorMessage' => 'HUB VPC不允许创建防火墙',
          ),
          15 => 
          array (
            'errorCode' => 'ErrorCenVpcEcConflict',
            'errorMessage' => 'The VPC of the cloud enterprise network conflicts with the VPC of the high-speed channel, and the firewall cannot be opened. Please select again',
          ),
          16 => 
          array (
            'errorCode' => 'ErrorRegionNoDisable',
            'errorMessage' => 'There are unsupported regions, please reselect',
          ),
          17 => 
          array (
            'errorCode' => 'ErrorCenFirewallVpcNumInvalid',
            'errorMessage' => '云企业网vpc数量不足, 无法开启VPC边界防火墙',
          ),
          18 => 
          array (
            'errorCode' => 'ErrorDestCidrError',
            'errorMessage' => 'The target network segment is wrong. Please configure the target network segment correctly.',
          ),
          19 => 
          array (
            'errorCode' => 'ErrorVpcCustomRouteTableWithVswitch',
            'errorMessage' => 'VPC存在自定义路由表且关联了vswitch, 不允许创建VPC防火墙',
          ),
          20 => 
          array (
            'errorCode' => 'ErrorCenNotSupportTREnterpriseAutoMode',
            'errorMessage' => 'VPC firewall does not support TR Enterprise Edition auto mode protection, please use manual mode protection',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"VpcFirewallId\\": \\"vfw-m5e7dbc4y****\\",\\n  \\"RequestId\\": \\"850A84D6-0DE4-4797-A1E8-00090125h4j6\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateVpcFirewallCenConfigureResponse>\\n    <VpcFirewallId>vfw-m5e7dbc4y****</VpcFirewallId>\\n    <RequestId>850A84D6-0DE4-4797-A1E8-00090125h4j6</RequestId>\\n</CreateVpcFirewallCenConfigureResponse>","errorExample":""}]',
      'title' => '创建VPC边界防火墙',
      'summary' => '创建VPC边界防火墙（防护云企业网内的网络实例和指定VPC之间的互访流量）。',
      'description' => '本接口一般用于为云企业网内的VPC实例创建VPC边界防火墙。该VPC边界防火墙可以防护云企业网内的网络实例（网络实例包含VPC、VBR和CCN）和指定VPC之间的互访流量，不支持防护VBR与VBR、CCN与CCN、VBR与CCN之间的互访流量。更多信息，请参见[VPC边界防火墙限制说明](~~172295~~)。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
    ),
    'ModifyVpcFirewallCenSwitchStatus' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文。

- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'VpcFirewallId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙的实例ID。

> 您可以通过调用[DescribeVpcFirewallCenList](~~345777~~)接口查询VPC边界防火墙的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'vfw-m5e7dbc4y****',
          ),
        ),
        2 => 
        array (
          'name' => 'FirewallSwitch',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置VPC边界防火墙的开关状态。取值：

- **open**：开启。

- **close**：关闭。',
            'type' => 'string',
            'required' => true,
            'example' => 'open',
          ),
        ),
        3 => 
        array (
          'name' => 'MemberUid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前阿里云账号的成员账号UID。',
            'type' => 'string',
            'required' => false,
            'example' => '258039427902****',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '850A84D6-0DE4-4797-A1E8-00090125afj2',
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
            'errorCode' => 'ErrorVpcFirewallId',
            'errorMessage' => 'The VPC firewall ID is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorFirewallSwitch',
            'errorMessage' => 'The firewall enabling parameter is incorrect. Please select again.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorDBTxError',
            'errorMessage' => 'A database transaction error occurred.',
          ),
          3 => 
          array (
            'errorCode' => 'ErrorDBUpdateError',
            'errorMessage' => 'A database update error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"850A84D6-0DE4-4797-A1E8-00090125afj2\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyVpcFirewallCenSwitchStatusResponse>\\n    <RequestId>850A84D6-0DE4-4797-A1E8-00090125afj2</RequestId>\\n</ModifyVpcFirewallCenSwitchStatusResponse>","errorExample":""}]',
      'title' => '修改VPC边界防火墙的开关状态（云企业网）',
      'summary' => '修改VPC边界防火墙（防护云企业网内的网络实例和指定VPC之间的互访流量）的开关状态。',
      'description' => '本接口一般用于修改VPC边界防火墙的开关状态。该VPC边界防火墙是防护云企业网内的网络实例（网络实例包含VPC、VBR和CCN）和指定VPC之间的互访流量。打开VPC边界防火墙的开关后，云企业网内的网络实例和指定VPC之间的互访流量会受VPC边界防火墙防护。关闭VPC边界防火墙的开关后，VPC边界防火墙不再防护云企业网内的网络实例和指定VPC之间的互访流量。

调用本接口前，必须已经调用[CreateVpcFirewallCenConfigure](~~345772~~)接口创建了VPC边界防火墙。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
    ),
    'ModifyVpcFirewallCenConfigure' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文。

- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'VpcFirewallId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙的实例ID。

> 您可以通过调用[DescribeVpcFirewallCenList](~~345777~~)接口查询VPC边界防火墙的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'vfw-m5e7dbc4y****',
          ),
        ),
        2 => 
        array (
          'name' => 'VpcFirewallName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙的实例名称。',
            'type' => 'string',
            'required' => true,
            'example' => '测试用实例',
          ),
        ),
        3 => 
        array (
          'name' => 'MemberUid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前阿里云账号的成员账号UID。',
            'type' => 'string',
            'required' => false,
            'example' => '258039427902****',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '850A84D6-0DE4-4797-A1E8-00090125k6f8',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        200 => 
        array (
          0 => 
          array (
            'errorCode' => 'ErrorDBUpdateError',
            'errorMessage' => 'A database update error occurred.',
          ),
        ),
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ErrorAliUid',
            'errorMessage' => 'The aliuid is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorVpcFirewallIdNotFound',
            'errorMessage' => 'The VPC firewall ID is not found.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorDBSelectError',
            'errorMessage' => 'A database select error occurred.',
          ),
          3 => 
          array (
            'errorCode' => 'ErrorRegionNoError',
            'errorMessage' => 'The region is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'ErrorUnmarshalJSON',
            'errorMessage' => 'An error occurred while parsing JSON.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"850A84D6-0DE4-4797-A1E8-00090125k6f8\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyVpcFirewallCenConfigureResponse>\\n    <RequestId>850A84D6-0DE4-4797-A1E8-00090125k6f8</RequestId>\\n</ModifyVpcFirewallCenConfigureResponse>","errorExample":""}]',
      'title' => '修改VPC边界防火墙的配置信息（云企业网）',
      'summary' => '修改VPC边界防火墙（防护云企业网内的网络实例和指定VPC之间的互访流量）的配置信息。',
      'description' => '本接口一般用于修改VPC边界防火墙的配置信息。该VPC边界防火墙是防护云企业网内的网络实例（网络实例包含VPC、VBR和CCN）和指定VPC之间的互访流量。
调用本接口前，必须已经调用[CreateVpcFirewallCenConfigure](~~345772~~)接口创建了VPC边界防火墙。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
    ),
    'DescribeVpcFirewallCenList' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收消息的语言类型。取值：

- **zh**（默认）：中文。

- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收消息的语言类型。取值：

- **zh**（默认）：中文。

- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC所在的地域ID。

> 关于云防火墙支持地域的详细信息，请参见[支持的地域](~~195657~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'NetworkInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-8vbwbo90rq0anm6t****',
          ),
        ),
        4 => 
        array (
          'name' => 'FirewallSwitchStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙的状态。取值：

- **opened**：已开启。

- **closed**：已关闭。

- **notconfigured**：表示暂未配置VPC边界防火墙。

- **configured**：表示已配置但未开启VPC边界防火墙。

> 不设置该参数表示查询所有状态的VPC边界防火墙。',
            'type' => 'string',
            'required' => false,
            'example' => 'opened',
          ),
        ),
        5 => 
        array (
          'name' => 'VpcFirewallId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙的实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vfw-m5e7dbc4y****',
          ),
        ),
        6 => 
        array (
          'name' => 'VpcFirewallName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙的实例名称。',
            'type' => 'string',
            'required' => false,
            'example' => '测试环境防火墙',
          ),
        ),
        7 => 
        array (
          'name' => 'CenId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云企业网实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cen-x5jayxou71ad73****',
          ),
        ),
        8 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，设置当前页面的页码。

默认值为1，表示返回第1页数据。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，设置每页包含VPC边界防火墙的数量。

默认值为10，表示每页包含10条结果。最大值为50。',
            'type' => 'string',
            'required' => false,
            'example' => '10',
          ),
        ),
        10 => 
        array (
          'name' => 'RouteMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '路由模式。取值：

- **auto**：表示自动模式。

- **manual**：表示手动模式。

> 不设置该参数表示查询所有路由模式的VPC边界防火墙。',
            'type' => 'string',
            'required' => false,
            'example' => 'auto',
          ),
        ),
        11 => 
        array (
          'name' => 'MemberUid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前阿里云账号的成员账号（其他阿里云账号）UID。',
            'type' => 'string',
            'required' => false,
            'example' => '258039427902****',
          ),
        ),
        12 => 
        array (
          'name' => 'TransitRouterType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '转发实例路由器类型。可选值：

- **Basic**：基础版转发路由器。

- **Enterprise**：企业版转发路由器。',
            'type' => 'string',
            'required' => false,
            'example' => 'Basic',
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
                'description' => 'VPC边界防火墙的总数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '850A84D6-0DE4-4797-A1E8-00090125k8g2',
              ),
              'VpcFirewalls' => 
              array (
                'description' => 'VPC边界防火墙的详细信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ConnectType' => 
                    array (
                      'description' => 'VPC边界防火墙的互通类型。取值：cen，表示云企业网。',
                      'type' => 'string',
                      'example' => 'cen',
                    ),
                    'VpcFirewallId' => 
                    array (
                      'description' => 'VPC边界防火墙的实例ID。',
                      'type' => 'string',
                      'example' => 'vfw-m5e7dbc4y****',
                    ),
                    'RegionStatus' => 
                    array (
                      'description' => '地域开放状态。取值：

- **enable**：已开放，表示该地域允许配置VPC边界防火墙。

- **disable**：未开放，表示该地域不允许配置VPC边界防火墙。',
                      'type' => 'string',
                      'example' => 'enable',
                    ),
                    'CenId' => 
                    array (
                      'description' => '云企业网实例ID。',
                      'type' => 'string',
                      'example' => 'cen-x5jayxou71ad73****',
                    ),
                    'VpcFirewallName' => 
                    array (
                      'description' => 'VPC边界防火墙的实例名称。',
                      'type' => 'string',
                      'example' => '测试防火墙',
                    ),
                    'ResultCode' => 
                    array (
                      'description' => '创建VPC边界防火墙的操作结果代码。取值：

- **Unauthorized**：表示存在未授权的网络实例, 不允许创建VPC边界防火墙。

- **RegionDisable**：表示网络实例所在的地域是VPC边界防火墙不支持的地域, 不允许创建VPC边界防火墙。

- **OpsDisable**：表示不允许创建VPC边界防火墙。

- **VbrNotSupport**：表示云企业网中的VBR不支持创建VPC边界防火墙。

- 空字符串，表示该网络实例可以正常创建VPC边界防火墙。
',
                      'type' => 'string',
                      'example' => 'Unauthorized',
                    ),
                    'CenName' => 
                    array (
                      'description' => '云企业网实例名称。',
                      'type' => 'string',
                      'example' => '测试云企业网',
                    ),
                    'FirewallSwitchStatus' => 
                    array (
                      'description' => 'VPC边界防火墙开关的状态。取值：

- **opened**：已开启。

- **closed**：已关闭。

- **notconfigured**：表示暂未配置VPC边界防火墙。',
                      'type' => 'string',
                      'example' => 'opened',
                    ),
                    'LocalVpc' => 
                    array (
                      'description' => 'VPC的详细信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'VpcId' => 
                        array (
                          'description' => 'VPC的实例ID。',
                          'type' => 'string',
                          'example' => 'vpc-8vbwbo90rq0anm6t****',
                        ),
                        'TransitRouterType' => 
                        array (
                          'description' => '云企业网转发路由器（CEN-TR）的版本。取值：

- **Basic**：基础版转发路由器。

- **Enterprise**：企业版转发路由器。',
                          'type' => 'string',
                          'example' => 'Basic',
                        ),
                        'NetworkInstanceId' => 
                        array (
                          'description' => '网络实例ID。',
                          'type' => 'string',
                          'example' => 'vpc-2zefk9fbn8j7v585g****',
                        ),
                        'RouteMode' => 
                        array (
                          'description' => '路由模式。取值：

- **auto**：表示自动模式。

- **manual**：表示手动模式。
',
                          'type' => 'string',
                          'example' => 'auto',
                        ),
                        'RegionNo' => 
                        array (
                          'description' => 'VPC所属地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'AuthorizationStatus' => 
                        array (
                          'description' => 'VPC的授权状态。取值：**authorized**，表示已授权。',
                          'type' => 'string',
                          'example' => 'authorized',
                        ),
                        'ManualVSwitchId' => 
                        array (
                          'description' => '路由模式为手动模式时指定的vSwitch的ID。',
                          'type' => 'string',
                          'example' => 'vsw-zeq4o875u****',
                        ),
                        'OwnerId' => 
                        array (
                          'description' => 'VPC所属阿里云账号的UID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '158039427902****',
                        ),
                        'NetworkInstanceType' => 
                        array (
                          'description' => '网络实例的类型。取值：

- **VPC**（Virtual Private Cloud）。

- **VBR**（Virtual Border Router）。

- **CCN**（Cloud Connect Network）。',
                          'type' => 'string',
                          'example' => 'VPC',
                        ),
                        'VpcName' => 
                        array (
                          'description' => 'VPC的实例名称。',
                          'type' => 'string',
                          'example' => '测试用实例',
                        ),
                        'SupportManualMode' => 
                        array (
                          'description' => '路由模式是否支持手动模式。取值：

- **1**：支持。

- **0**：不支持。',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'NetworkInstanceName' => 
                        array (
                          'description' => '网络实例的名称。',
                          'type' => 'string',
                          'example' => '测试业务VPC',
                        ),
                        'VpcCidrTableList' => 
                        array (
                          'description' => 'VPC的网段列表信息。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => 'VPC的网段列表信息。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'RouteTableId' => 
                              array (
                                'description' => 'VPC的路由表ID。',
                                'type' => 'string',
                                'example' => 'vtb-1234',
                              ),
                              'RouteEntryList' => 
                              array (
                                'description' => 'VPC的路由条目列表。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => 'VPC的路由条目列表。',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'NextHopInstanceId' => 
                                    array (
                                      'description' => 'VPC中的下一跳实例ID。',
                                      'type' => 'string',
                                      'example' => 'vrt-m5eb5me6c3l5sezae****',
                                    ),
                                    'DestinationCidr' => 
                                    array (
                                      'description' => 'VPC的目标网段。',
                                      'type' => 'string',
                                      'example' => '192.168.XX.XX/24',
                                    ),
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'DefendCidrList' => 
                        array (
                          'description' => 'VPC边界防火墙防护的网段列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => 'VPC边界防火墙防护的网段。',
                            'type' => 'string',
                            'example' => '10.0.XX.XX/24',
                          ),
                        ),
                      ),
                    ),
                    'IpsConfig' => 
                    array (
                      'description' => 'IPS配置信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'BasicRules' => 
                        array (
                          'description' => '基础规则开关。取值：

- **1**：开启状态。

- **0**：关闭状态。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'EnableAllPatch' => 
                        array (
                          'description' => '虚拟补丁开关。取值：

- **1**：开启状态。

- **0**：关闭状态。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'RunMode' => 
                        array (
                          'description' => 'IPS防御模式。取值：

- **1**：拦截模式。

- **0**：观察模式。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                      ),
                    ),
                    'MemberUid' => 
                    array (
                      'description' => '当前阿里云账号的成员账号（其他阿里云账号）UID。',
                      'type' => 'string',
                      'example' => '258039427902****',
                    ),
                    'PrecheckStatus' => 
                    array (
                      'description' => '是否可以自动开墙，即云防火墙会根据路由学习，自动防护VPC流量。取值：

- **passed**：可以自动开墙。

- **failed**：不可以自动开墙。

- **unknown**：未知状态。
',
                      'type' => 'string',
                      'example' => 'failed',
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
            'errorCode' => 'ErrorAliUid',
            'errorMessage' => 'The aliuid is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorDBSelectError',
            'errorMessage' => 'A database select error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorAssetsStatus',
            'errorMessage' => 'firewall status is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'ErrorPageNo',
            'errorMessage' => 'Either page number or page size is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'ErrorInvalidMemberUid',
            'errorMessage' => 'Member uid is invalid',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 10,\\n  \\"RequestId\\": \\"850A84D6-0DE4-4797-A1E8-00090125k8g2\\",\\n  \\"VpcFirewalls\\": [\\n    {\\n      \\"ConnectType\\": \\"cen\\",\\n      \\"VpcFirewallId\\": \\"vfw-m5e7dbc4y****\\",\\n      \\"RegionStatus\\": \\"enable\\",\\n      \\"CenId\\": \\"cen-x5jayxou71ad73****\\",\\n      \\"VpcFirewallName\\": \\"测试防火墙\\",\\n      \\"ResultCode\\": \\"Unauthorized\\",\\n      \\"CenName\\": \\"测试云企业网\\",\\n      \\"FirewallSwitchStatus\\": \\"opened\\",\\n      \\"LocalVpc\\": {\\n        \\"VpcId\\": \\"vpc-8vbwbo90rq0anm6t****\\",\\n        \\"TransitRouterType\\": \\"Basic\\",\\n        \\"NetworkInstanceId\\": \\"vpc-2zefk9fbn8j7v585g****\\",\\n        \\"RouteMode\\": \\"auto\\",\\n        \\"RegionNo\\": \\"cn-hangzhou\\",\\n        \\"AuthorizationStatus\\": \\"authorized\\",\\n        \\"ManualVSwitchId\\": \\"vsw-zeq4o875u****\\",\\n        \\"OwnerId\\": 0,\\n        \\"NetworkInstanceType\\": \\"VPC\\",\\n        \\"VpcName\\": \\"测试用实例\\",\\n        \\"SupportManualMode\\": \\"0\\",\\n        \\"NetworkInstanceName\\": \\"测试业务VPC\\",\\n        \\"VpcCidrTableList\\": [\\n          {\\n            \\"RouteTableId\\": \\"vtb-1234\\",\\n            \\"RouteEntryList\\": [\\n              {\\n                \\"NextHopInstanceId\\": \\"vrt-m5eb5me6c3l5sezae****\\",\\n                \\"DestinationCidr\\": \\"192.168.XX.XX/24\\"\\n              }\\n            ]\\n          }\\n        ],\\n        \\"DefendCidrList\\": [\\n          \\"10.0.XX.XX/24\\"\\n        ]\\n      },\\n      \\"IpsConfig\\": {\\n        \\"BasicRules\\": 1,\\n        \\"EnableAllPatch\\": 1,\\n        \\"RunMode\\": 0\\n      },\\n      \\"MemberUid\\": \\"258039427902****\\",\\n      \\"PrecheckStatus\\": \\"failed\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeVpcFirewallCenListResponse>\\n    <TotalCount>10</TotalCount>\\n    <RequestId>850A84D6-0DE4-4797-A1E8-00090125k8g2</RequestId>\\n    <VpcFirewalls>\\n        <ConnectType>cen</ConnectType>\\n        <VpcFirewallId>vfw-m5e7dbc4y****</VpcFirewallId>\\n        <RegionStatus>enable</RegionStatus>\\n        <CenId>cen-x5jayxou71ad73****</CenId>\\n        <VpcFirewallName>测试防火墙</VpcFirewallName>\\n        <ResultCode>Unauthorized</ResultCode>\\n        <CenName>测试云企业网</CenName>\\n        <FirewallSwitchStatus>opened</FirewallSwitchStatus>\\n        <LocalVpc>\\n            <VpcId>vpc-8vbwbo90rq0anm6t****</VpcId>\\n            <TransitRouterType>Basic</TransitRouterType>\\n            <NetworkInstanceId>vpc-2zefk9fbn8j7v585g****</NetworkInstanceId>\\n            <RouteMode>auto</RouteMode>\\n            <RegionNo>cn-hangzhou</RegionNo>\\n            <AuthorizationStatus>authorized</AuthorizationStatus>\\n            <ManualVSwitchId>vsw-zeq4o875u****</ManualVSwitchId>\\n            <NetworkInstanceType>VPC</NetworkInstanceType>\\n            <VpcName>测试用实例</VpcName>\\n            <SupportManualMode>0</SupportManualMode>\\n            <NetworkInstanceName>测试业务VPC</NetworkInstanceName>\\n            <VpcCidrTableList>\\n                <RouteTableId>vtb-1234</RouteTableId>\\n                <RouteEntryList>\\n                    <NextHopInstanceId>vrt-m5eb5me6c3l5sezae****</NextHopInstanceId>\\n                    <DestinationCidr>192.168.XX.XX/24</DestinationCidr>\\n                </RouteEntryList>\\n            </VpcCidrTableList>\\n            <DefendCidrList>10.0.XX.XX/24</DefendCidrList>\\n        </LocalVpc>\\n        <IpsConfig>\\n            <BasicRules>1</BasicRules>\\n            <EnableAllPatch>1</EnableAllPatch>\\n            <RunMode>0</RunMode>\\n        </IpsConfig>\\n        <MemberUid>258039427902****</MemberUid>\\n        <PrecheckStatus>failed</PrecheckStatus>\\n    </VpcFirewalls>\\n</DescribeVpcFirewallCenListResponse>","errorExample":""}]',
      'title' => '查询云企业网（基础版）防火墙列表',
      'summary' => '查询VPC边界防火墙（防护云企业网内的网络实例和指定VPC之间的互访流量）的信息。',
      'description' => '本接口一般用于查询VPC边界防火墙的信息。该VPC边界防火墙是防护云企业网内的网络实例（网络实例包含VPC、VBR和CCN）和指定VPC之间的互访流量。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
    ),
    'DescribeVpcFirewallCenDetail' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文。

- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文。

- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'VpcFirewallId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙的实例ID。

> 您可以调用[DescribeVpcFirewallCenList](~~345777~~)接口查询VPC边界防火墙的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'vfw-m5e7dbc4y****',
          ),
        ),
        3 => 
        array (
          'name' => 'NetworkInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建VPC边界防火墙的VPC实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-2zefk9fbn8j7v585g****',
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
              'ConnectType' => 
              array (
                'description' => 'VPC边界防火墙的互通类型。取值：**cen**，表示云企业网。
',
                'type' => 'string',
                'example' => 'cen',
              ),
              'VpcFirewallName' => 
              array (
                'description' => 'VPC边界防火墙的实例名称。',
                'type' => 'string',
                'example' => '测试防火墙',
              ),
              'VpcFirewallId' => 
              array (
                'description' => 'VPC边界防火墙的实例ID。',
                'type' => 'string',
                'example' => 'vfw-m5e7dbc4y****',
              ),
              'FirewallSwitchStatus' => 
              array (
                'description' => 'VPC边界防火墙的开关状态。取值：

- **opened**：已开启。

- **closed**：已关闭。

- **notconfigured**：未配置。',
                'type' => 'string',
                'example' => 'opened',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '850A84D6-0DE4-4797-A1E8-00090125g4d2',
              ),
              'LocalVpc' => 
              array (
                'description' => 'VPC的详细信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'VpcId' => 
                  array (
                    'description' => 'VPC的实例ID。',
                    'type' => 'string',
                    'example' => 'vpc-8vbwbo90rq0anm6t****',
                  ),
                  'TransitRouterType' => 
                  array (
                    'description' => '云企业网转发路由器（CEN-TR）的版本。取值：

- **Basic**：基础版。

- **Enterprise**：企业版。',
                    'type' => 'string',
                    'example' => 'Basic',
                  ),
                  'RouteMode' => 
                  array (
                    'description' => '路由模式,。取值：

- auto：表示自动模式。

- manual：表示手动模式。
',
                    'type' => 'string',
                    'example' => 'auto',
                  ),
                  'NetworkInstanceId' => 
                  array (
                    'description' => '创建VPC边界防火墙的VPC实例ID。',
                    'type' => 'string',
                    'example' => 'vpc-2zefk9fbn8j7v585g****',
                  ),
                  'RegionNo' => 
                  array (
                    'description' => 'VPC所属地域ID。',
                    'type' => 'string',
                    'example' => 'cn-hangzhou',
                  ),
                  'ManualVSwitchId' => 
                  array (
                    'description' => '路由模式为手动模式时指定的vSwitch的ID。',
                    'type' => 'string',
                    'example' => 'vsw-zeq4o875u****',
                  ),
                  'OwnerId' => 
                  array (
                    'description' => 'VPC所属阿里云账户的UID。',
                    'type' => 'string',
                    'example' => '158039427902****',
                  ),
                  'NetworkInstanceType' => 
                  array (
                    'description' => '网络实例的类型。取值：**VPC**。
',
                    'type' => 'string',
                    'example' => 'VPC',
                  ),
                  'VpcName' => 
                  array (
                    'description' => 'VPC的实例名称。',
                    'type' => 'string',
                    'example' => '测试用实例',
                  ),
                  'SupportManualMode' => 
                  array (
                    'description' => '路由模式是否支持手动模式。取值：

- **1**：支持。
- **0**：不支持。',
                    'type' => 'string',
                    'example' => '0',
                  ),
                  'TransitRouterId' => 
                  array (
                    'description' => 'CEN-TR的实例ID。',
                    'type' => 'string',
                    'example' => 'tr-2zetwxskej633l3u1****',
                  ),
                  'AttachmentId' => 
                  array (
                    'description' => '网络实例的连接ID。',
                    'type' => 'string',
                    'example' => 'tr-attach-sxig7bye51fid5****',
                  ),
                  'NetworkInstanceName' => 
                  array (
                    'description' => '网络实例的名称。',
                    'type' => 'string',
                    'example' => '测试业务vpc',
                  ),
                  'AttachmentName' => 
                  array (
                    'description' => '网络实例的连接名称',
                    'type' => 'string',
                    'example' => '本地测试',
                  ),
                  'VpcCidrTableList' => 
                  array (
                    'description' => 'VPC的网段列表信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RouteTableId' => 
                        array (
                          'description' => 'VPC的路由表ID。',
                          'type' => 'string',
                          'example' => 'vtb-1234',
                        ),
                        'RouteEntryList' => 
                        array (
                          'description' => 'VPC的路由条目列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'NextHopInstanceId' => 
                              array (
                                'description' => 'VPC中的下一跳实例ID。',
                                'type' => 'string',
                                'example' => 'vrt-m5eb5me6c3l5sezae****',
                              ),
                              'DestinationCidr' => 
                              array (
                                'description' => 'VPC的目标网段。',
                                'type' => 'string',
                                'example' => '192.168.XX.XX/24',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'EniList' => 
                  array (
                    'description' => '弹性网卡列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'EniId' => 
                        array (
                          'description' => 'VPC中弹性网卡的实例ID。',
                          'type' => 'string',
                          'example' => 'eni-8vbhfosfqv2rff42****',
                        ),
                        'EniPrivateIpAddress' => 
                        array (
                          'description' => 'VPC中弹性网卡的私网IP。',
                          'type' => 'string',
                          'example' => '192.168.XX.XX',
                        ),
                        'EniVSwitchId' => 
                        array (
                          'description' => 'VPC中弹性网卡的虚拟交换机ID。',
                          'type' => 'string',
                          'example' => 'vsw-wz9viido7j436b0n1****',
                        ),
                      ),
                    ),
                  ),
                  'DefendCidrList' => 
                  array (
                    'description' => 'VPC边界防火墙防护的网段列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'VPC边界防火墙防护的网段。',
                      'type' => 'string',
                      'example' => '10.0.XX.XX/24',
                    ),
                  ),
                ),
              ),
              'FirewallVpc' => 
              array (
                'description' => '防火墙所使用VPC。',
                'type' => 'object',
                'properties' => 
                array (
                  'VpcId' => 
                  array (
                    'description' => 'VPC实例ID。',
                    'type' => 'string',
                    'example' => 'vpc-bp1245k5oagy2bp74****',
                  ),
                  'VpcCidr' => 
                  array (
                    'description' => 'VPC的网段。',
                    'type' => 'string',
                    'example' => '10.0.0.0/8',
                  ),
                  'VswitchId' => 
                  array (
                    'description' => '虚拟交换机ID。',
                    'type' => 'string',
                    'example' => 'vsw-bp1sqg9wms9wxcs1****',
                  ),
                  'VswitchCidr' => 
                  array (
                    'description' => '虚拟交换机的网段。',
                    'type' => 'string',
                    'example' => '10.0.0.1/24',
                  ),
                  'ZoneId' => 
                  array (
                    'description' => '可用区ID。',
                    'type' => 'string',
                    'example' => 'cn-hangzhou-i',
                  ),
                  'AllowConfiguration' => 
                  array (
                    'description' => 'CEN基础版创建VPC防火墙时是否允许配置防火墙VPC网段。取值：
- **1**：允许。
- **0**：不允许。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
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
            'errorCode' => 'ErrorAliUid',
            'errorMessage' => 'The aliuid is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorDBSelectError',
            'errorMessage' => 'A database select error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorVpcFirewallId',
            'errorMessage' => 'The VPC firewall ID is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'ErrorVpcFirewallExist',
            'errorMessage' => 'The firewall has been configured and cannot be created repeatedly.',
          ),
          4 => 
          array (
            'errorCode' => 'ErrorUnmarshalJSON',
            'errorMessage' => 'An error occurred while parsing JSON.',
          ),
          5 => 
          array (
            'errorCode' => 'ErrorDBTxError',
            'errorMessage' => 'A database transaction error occurred.',
          ),
          6 => 
          array (
            'errorCode' => 'ErrorVpcOpenApi',
            'errorMessage' => 'vpc open api failed',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ConnectType\\": \\"cen\\",\\n  \\"VpcFirewallName\\": \\"测试防火墙\\",\\n  \\"VpcFirewallId\\": \\"vfw-m5e7dbc4y****\\",\\n  \\"FirewallSwitchStatus\\": \\"opened\\",\\n  \\"RequestId\\": \\"850A84D6-0DE4-4797-A1E8-00090125g4d2\\",\\n  \\"LocalVpc\\": {\\n    \\"VpcId\\": \\"vpc-8vbwbo90rq0anm6t****\\",\\n    \\"TransitRouterType\\": \\"Basic\\",\\n    \\"RouteMode\\": \\"auto\\",\\n    \\"NetworkInstanceId\\": \\"vpc-2zefk9fbn8j7v585g****\\",\\n    \\"RegionNo\\": \\"cn-hangzhou\\",\\n    \\"ManualVSwitchId\\": \\"vsw-zeq4o875u****\\",\\n    \\"OwnerId\\": \\"158039427902****\\",\\n    \\"NetworkInstanceType\\": \\"VPC\\",\\n    \\"VpcName\\": \\"测试用实例\\",\\n    \\"SupportManualMode\\": \\"0\\",\\n    \\"TransitRouterId\\": \\"tr-2zetwxskej633l3u1****\\",\\n    \\"AttachmentId\\": \\"tr-attach-sxig7bye51fid5****\\",\\n    \\"NetworkInstanceName\\": \\"测试业务vpc\\",\\n    \\"AttachmentName\\": \\"本地测试\\",\\n    \\"VpcCidrTableList\\": [\\n      {\\n        \\"RouteTableId\\": \\"vtb-1234\\",\\n        \\"RouteEntryList\\": [\\n          {\\n            \\"NextHopInstanceId\\": \\"vrt-m5eb5me6c3l5sezae****\\",\\n            \\"DestinationCidr\\": \\"192.168.XX.XX/24\\"\\n          }\\n        ]\\n      }\\n    ],\\n    \\"EniList\\": [\\n      {\\n        \\"EniId\\": \\"eni-8vbhfosfqv2rff42****\\",\\n        \\"EniPrivateIpAddress\\": \\"192.168.XX.XX\\",\\n        \\"EniVSwitchId\\": \\"vsw-wz9viido7j436b0n1****\\"\\n      }\\n    ],\\n    \\"DefendCidrList\\": [\\n      \\"10.0.XX.XX/24\\"\\n    ]\\n  },\\n  \\"FirewallVpc\\": {\\n    \\"VpcId\\": \\"vpc-bp1245k5oagy2bp74****\\",\\n    \\"VpcCidr\\": \\"10.0.0.0/8\\",\\n    \\"VswitchId\\": \\"vsw-bp1sqg9wms9wxcs1****\\",\\n    \\"VswitchCidr\\": \\"10.0.0.1/24\\",\\n    \\"ZoneId\\": \\"cn-hangzhou-i\\",\\n    \\"AllowConfiguration\\": 0\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeVpcFirewallCenDetailResponse>\\n    <ConnectType>cen</ConnectType>\\n    <VpcFirewallName>测试防火墙</VpcFirewallName>\\n    <VpcFirewallId>vfw-m5e7dbc4y****</VpcFirewallId>\\n    <FirewallSwitchStatus>opened</FirewallSwitchStatus>\\n    <RequestId>850A84D6-0DE4-4797-A1E8-00090125g4d2</RequestId>\\n    <LocalVpc>\\n        <VpcId>vpc-8vbwbo90rq0anm6t****</VpcId>\\n        <TransitRouterType>Basic</TransitRouterType>\\n        <RouteMode>auto</RouteMode>\\n        <NetworkInstanceId>vpc-2zefk9fbn8j7v585g****</NetworkInstanceId>\\n        <RegionNo>cn-hangzhou</RegionNo>\\n        <ManualVSwitchId>vsw-zeq4o875u****</ManualVSwitchId>\\n        <OwnerId>158039427902****</OwnerId>\\n        <NetworkInstanceType>VPC</NetworkInstanceType>\\n        <VpcName>测试用实例</VpcName>\\n        <SupportManualMode>0</SupportManualMode>\\n        <TransitRouterId>tr-2zetwxskej633l3u1****</TransitRouterId>\\n        <AttachmentId>tr-attach-sxig7bye51fid5****</AttachmentId>\\n        <NetworkInstanceName>测试业务vpc</NetworkInstanceName>\\n        <AttachmentName>本地测试</AttachmentName>\\n        <VpcCidrTableList>\\n            <RouteTableId>vtb-1234</RouteTableId>\\n            <RouteEntryList>\\n                <NextHopInstanceId>vrt-m5eb5me6c3l5sezae****</NextHopInstanceId>\\n                <DestinationCidr>192.168.XX.XX/24</DestinationCidr>\\n            </RouteEntryList>\\n        </VpcCidrTableList>\\n        <EniList>\\n            <EniId>eni-8vbhfosfqv2rff42****</EniId>\\n            <EniPrivateIpAddress>192.168.XX.XX</EniPrivateIpAddress>\\n        </EniList>\\n        <DefendCidrList>10.0.XX.XX/24</DefendCidrList>\\n    </LocalVpc>\\n</DescribeVpcFirewallCenDetailResponse>","errorExample":""}]',
      'title' => '查询VPC边界防火墙的详细信息',
      'summary' => '查询VPC边界防火墙（防护云企业网内的网络实例和指定VPC之间的互访流量）的详细信息。',
      'description' => '本接口一般用于获取VPC边界防火墙的详细信息。该VPC边界防火墙是防护云企业网内的网络实例（网络实例包含VPC、VBR和CCN）和指定VPC之间的互访流量。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
    ),
    'DeleteVpcFirewallCenConfigure' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文。

- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'VpcFirewallIdList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙的实例ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'VPC边界防火墙的实例ID。

> 您可以通过调用[DescribeVpcFirewallCenList](~~345777~~)接口查询VPC边界防火墙的实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'vfw-m5e7dbc4y****',
            ),
            'required' => true,
            'maxItems' => 200,
          ),
        ),
        2 => 
        array (
          'name' => 'MemberUid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前阿里云账号的成员账号UID。',
            'type' => 'string',
            'required' => false,
            'example' => '258039427902****',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '850A84D6-0DE4-4797-A1E8-00090125k6j3',
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
            'errorCode' => 'ErrorAliUid',
            'errorMessage' => 'The aliuid is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorVpcFirewallId',
            'errorMessage' => 'The VPC firewall ID is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorDBTxError',
            'errorMessage' => 'A database transaction error occurred.',
          ),
          3 => 
          array (
            'errorCode' => 'ErrorDBUpdateError',
            'errorMessage' => 'A database update error occurred.',
          ),
          4 => 
          array (
            'errorCode' => 'ErrorRecordLog',
            'errorMessage' => 'An error occurred while updating the operation log.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"850A84D6-0DE4-4797-A1E8-00090125k6j3\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteVpcFirewallCenConfigureResponse>\\n    <RequestId>850A84D6-0DE4-4797-A1E8-00090125k6j3</RequestId>\\n</DeleteVpcFirewallCenConfigureResponse>","errorExample":""}]',
      'title' => '删除VPC边界防火墙（云企业网）',
      'summary' => '删除VPC边界防火墙（防护云企业网内的网络实例和指定VPC之间的互访流量）。',
      'description' => '本接口一般用于删除VPC边界防火墙。该VPC边界防火墙是防护云企业网内的网络实例（网络实例包含VPC、VBR和CCN）和指定VPC之间的互访流量。
调用本接口前，必须已经调用[CreateVpcFirewallCenConfigure](~~345772~~)接口创建了VPC边界防火墙。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
    ),
    'DeleteFirewallV2RoutePolicies' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收消息的语言类型。取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'FirewallId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vfw-tr-d5ba592ac6c84aff****',
          ),
        ),
        2 => 
        array (
          'name' => 'TrFirewallRoutePolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '防火墙路由策略ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'policy-2d06d3568fd74d60****',
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
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => '22B6B889-4E9F-56B3-AF3D-53749C477D1D',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"22B6B889-4E9F-56B3-AF3D-53749C477D1D\\"\\n}","type":"json"}]',
      'title' => '删除TR防火墙路由策略',
      'summary' => '删除TR防火墙路由策略。',
    ),
    'CreateTrFirewallV2' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收消息的语言类型。取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'FirewallName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云防火墙的名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'VPC边界防火墙云企业网企业版',
          ),
        ),
        2 => 
        array (
          'name' => 'RouteMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '路由模式。取值：

- **managed**：表示自动模式

- **manual**：表示手动模式',
            'type' => 'string',
            'required' => false,
            'example' => 'managed',
          ),
        ),
        3 => 
        array (
          'name' => 'TransitRouterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '转发路由器实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'tr-m5etmb2q7e0mxcur****',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '转发路由器实例I的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        5 => 
        array (
          'name' => 'FirewallVpcCidr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动模式下防火墙VPC网段。',
            'type' => 'string',
            'required' => false,
            'example' => '10.0.0.0/16',
          ),
        ),
        6 => 
        array (
          'name' => 'FirewallSubnetCidr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动模式下防火墙VPC中存放防火墙ENI的子网网段。',
            'type' => 'string',
            'required' => false,
            'example' => '10.0.1.0/24',
          ),
        ),
        7 => 
        array (
          'name' => 'TrAttachmentSlaveCidr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动模式下防火墙VPC中用于连接TR的子网备用网段。',
            'type' => 'string',
            'required' => false,
            'example' => '10.0.0.16/28',
          ),
        ),
        8 => 
        array (
          'name' => 'TrAttachmentMasterCidr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动模式下防火墙VPC中用于连接TR的子网主用网段。',
            'type' => 'string',
            'required' => false,
            'example' => '10.0.3.0/24',
          ),
        ),
        9 => 
        array (
          'name' => 'CenId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云企业网实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cen-4xbjup276au29r****',
          ),
        ),
        10 => 
        array (
          'name' => 'FirewallDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '防火墙描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'VPC边界防火墙云企业网企业版',
          ),
        ),
        11 => 
        array (
          'name' => 'FirewallVpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '手动模式下创建防火墙ENI的VPC ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-wz9r5qvryn0lg3atb****',
          ),
        ),
        12 => 
        array (
          'name' => 'FirewallVswitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '手动模式下创建防火墙ENI的VSW ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-uf6ydz3vqj77mr5l6****',
          ),
        ),
        13 => 
        array (
          'name' => 'TrAttachmentSlaveZone',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '交换机备可用区。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-chengdu-b',
          ),
        ),
        14 => 
        array (
          'name' => 'TrAttachmentMasterZone',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '交换机主可用区。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-chengdu-a',
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
              'FirewallId' => 
              array (
                'description' => 'VPC边界防火墙实例ID。',
                'type' => 'string',
                'example' => 'vfw-tr-37e22bf0d9b34870****',
              ),
              'RequestId' => 
              array (
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => '822B9125-6E1A-551C-8EAF-6E7AE7444B00',
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
            'errorCode' => 'ErrorTrResourceNotReady',
            'errorMessage' => 'Transit Router has not been detected by cloud firewall',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"FirewallId\\": \\"vfw-tr-37e22bf0d9b34870****\\",\\n  \\"RequestId\\": \\"822B9125-6E1A-551C-8EAF-6E7AE7444B00\\"\\n}","type":"json"}]',
      'title' => '创建TR防火墙',
      'summary' => '创建TR防火墙。',
    ),
    'CreateTrFirewallV2RoutePolicy' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收消息的语言类型。取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'PolicyType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙云企业网企业版引流场景类型。取值：

- **fullmesh**：多点间互联

- **one_to_one**：点到点

- **end_to_end**：点到多点',
            'type' => 'string',
            'required' => false,
            'example' => 'fullmesh',
          ),
        ),
        2 => 
        array (
          'name' => 'PolicyName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '引流名称。',
            'type' => 'string',
            'required' => false,
            'example' => '新加坡点到多点',
          ),
        ),
        3 => 
        array (
          'name' => 'PolicyDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '引流描述。',
            'type' => 'string',
            'required' => false,
            'example' => '新加坡点到多点',
          ),
        ),
        4 => 
        array (
          'name' => 'FirewallId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vfw-tr-f8ce36689b224f77****',
          ),
        ),
        5 => 
        array (
          'name' => 'SrcCandidateList',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '主引流实例列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '引流实例。',
              'type' => 'object',
              'properties' => 
              array (
                'CandidateId' => 
                array (
                  'description' => '引流实例的ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'vpc-2ze9epancaw8t4sha****',
                ),
                'CandidateType' => 
                array (
                  'description' => '引流实例类型。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'VPC',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'DestCandidateList',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '子引流实例列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '子引流实例。',
              'type' => 'object',
              'properties' => 
              array (
                'CandidateId' => 
                array (
                  'description' => '引流实例的ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'vpc-2ze9epancaw8t4sha****',
                ),
                'CandidateType' => 
                array (
                  'description' => '引流实例类型。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'VPC',
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
              'TrFirewallRoutePolicyId' => 
              array (
                'description' => '防火墙路由策略ID。',
                'type' => 'string',
                'example' => 'policy-8ebed27e13e14ce2****',
              ),
              'RequestId' => 
              array (
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => 'C91D68BA-A0BE-51BF-A0F1-1CB5C57FE58D',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TrFirewallRoutePolicyId\\": \\"policy-8ebed27e13e14ce2****\\",\\n  \\"RequestId\\": \\"C91D68BA-A0BE-51BF-A0F1-1CB5C57FE58D\\"\\n}","type":"json"}]',
      'title' => '创建TR防火墙路由规则',
      'summary' => '创建TR防火墙路由规则。',
    ),
    'DescribeTrFirewallsV2Detail' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收消息的语言类型。取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'FirewallId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vfw-tr-a5a6b89f46764928****',
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
              'FirewallName' => 
              array (
                'description' => 'VPC边界防火墙实例名称。',
                'type' => 'string',
                'example' => 'cloudfirewall-manual',
              ),
              'RequestId' => 
              array (
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => '7E53A7FB-3EB9-5E33-8E50-B8F417D1E02B',
              ),
              'FirewallId' => 
              array (
                'description' => 'VPC边界防火墙实例ID。',
                'type' => 'string',
                'example' => 'vfw-tr-9c7c711abdfa4d80****',
              ),
              'FirewallStatus' => 
              array (
                'description' => '防火墙状态。取值：

- Creating：创建中

- Deleting：删除中

- Ready：就绪',
                'type' => 'string',
                'example' => 'Ready',
              ),
              'CenId' => 
              array (
                'description' => '云企业网实例ID。',
                'type' => 'string',
                'example' => 'cen-37nddhri7jf0d2****',
              ),
              'TransitRouterId' => 
              array (
                'description' => '转发路由器实例ID。',
                'type' => 'string',
                'example' => 'tr-wz9y8sgug8b1xb416****',
              ),
              'RegionNo' => 
              array (
                'description' => '转发路由器实例I的地域ID。',
                'type' => 'string',
                'example' => 'cn-shanghai',
              ),
              'FirewallEniId' => 
              array (
                'description' => '防火墙ENI ID。',
                'type' => 'string',
                'example' => 'eni-uf621u00nafypeex****',
              ),
              'FirewallEniVpcId' => 
              array (
                'description' => '防火墙ENI 所在的VPC ID。',
                'type' => 'string',
                'example' => 'vpc-2zeppcci782zeh2bk****',
              ),
              'FirewallEniVswitchId' => 
              array (
                'description' => '防火墙ENI 所在的VSWITCH ID。',
                'type' => 'string',
                'example' => 'vsw-uf6ptq1kl1c1d9pw9****',
              ),
              'FirewallDescription' => 
              array (
                'description' => '防火墙描述。',
                'type' => 'string',
                'example' => 'VPC边界防火墙',
              ),
              'RouteMode' => 
              array (
                'description' => '路由模式。取值：

- **managed**：表示自动模式

- **manual**：表示手动模式',
                'type' => 'string',
                'example' => 'managed',
              ),
              'FirewallSwitchStatus' => 
              array (
                'description' => 'VPC边界防火墙的状态。取值：

- **opened**：已开启

- **closed**：已关闭

- **notconfigured**：表示暂未配置VPC边界防火墙

- **configured**：表示已配置VPC边界防火墙

- **creating**：表示正在创建VPC边界防火墙

- **opening**：表示正在开启VPC边界防火墙

- **deleting**：表示正在删除VPC边界防火墙


> 不设置该参数表示查询所有状态的VPC边界防火墙',
                'type' => 'string',
                'example' => 'opened',
              ),
              'FirewallVpcCidr' => 
              array (
                'description' => '自动模式下防火墙VPC网段。',
                'type' => 'string',
                'example' => '10.0.0.0/16',
              ),
              'FirewallSubnetCidr' => 
              array (
                'description' => '自动模式下防火墙VPC中存放防火墙ENI的子网网段。',
                'type' => 'string',
                'example' => '10.0.1.0/24',
              ),
              'TrAttachmentMasterCidr' => 
              array (
                'description' => '自动模式下防火墙VPC中用于连接TR的子网主用网段。',
                'type' => 'string',
                'example' => '10.0.2.0/24',
              ),
              'TrAttachmentSlaveCidr' => 
              array (
                'description' => '自动模式下防火墙VPC中用于连接TR的子网备用网段。',
                'type' => 'string',
                'example' => '10.0.3.0/24',
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
            'errorCode' => 'ErrorTrFirewallNotExist',
            'errorMessage' => 'Cen TR firewall not exist',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"FirewallName\\": \\"cloudfirewall-manual\\",\\n  \\"RequestId\\": \\"7E53A7FB-3EB9-5E33-8E50-B8F417D1E02B\\",\\n  \\"FirewallId\\": \\"vfw-tr-9c7c711abdfa4d80****\\",\\n  \\"FirewallStatus\\": \\"Ready\\",\\n  \\"CenId\\": \\"cen-37nddhri7jf0d2****\\",\\n  \\"TransitRouterId\\": \\"tr-wz9y8sgug8b1xb416****\\",\\n  \\"RegionNo\\": \\"cn-shanghai\\",\\n  \\"FirewallEniId\\": \\"eni-uf621u00nafypeex****\\",\\n  \\"FirewallEniVpcId\\": \\"vpc-2zeppcci782zeh2bk****\\",\\n  \\"FirewallEniVswitchId\\": \\"vsw-uf6ptq1kl1c1d9pw9****\\",\\n  \\"FirewallDescription\\": \\"VPC边界防火墙\\",\\n  \\"RouteMode\\": \\"managed\\",\\n  \\"FirewallSwitchStatus\\": \\"opened\\",\\n  \\"FirewallVpcCidr\\": \\"10.0.0.0/16\\",\\n  \\"FirewallSubnetCidr\\": \\"10.0.1.0/24\\",\\n  \\"TrAttachmentMasterCidr\\": \\"10.0.2.0/24\\",\\n  \\"TrAttachmentSlaveCidr\\": \\"10.0.3.0/24\\"\\n}","type":"json"}]',
      'title' => '获取TR防火墙详情',
      'summary' => '获取TR防火墙详情。',
    ),
    'DescribeTrFirewallsV2List' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收消息的语言类型。取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '转发路由器实例I的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'FirewallSwitchStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙的状态。取值：

- **opened**：已开启

- **closed**：已关闭

- **notconfigured**：表示暂未配置VPC边界防火墙

- **configured**：表示已配置VPC边界防火墙

- **creating**：表示正在创建VPC边界防火墙

- **opening**：表示正在开启VPC边界防火墙

- **deleting**：表示正在删除VPC边界防火墙


> 不设置该参数表示查询所有状态的VPC边界防火墙',
            'type' => 'string',
            'required' => false,
            'example' => 'opened',
          ),
        ),
        3 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时的页码。默认值为**1**。',
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
            'description' => '分页查询时，显示的每页数据的最大条数。默认值为10.',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'FirewallId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vfw-tr-f1799baa9e254651****',
          ),
        ),
        6 => 
        array (
          'name' => 'FirewallName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙实例名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'VPC边界防火墙云企业网企业版
',
          ),
        ),
        7 => 
        array (
          'name' => 'RouteMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '路由模式。取值：

- **managed**：表示自动模式。

- **manual**：表示手动模式。

> 不设置该参数表示查询所有路由模式的VPC边界防火墙。',
            'type' => 'string',
            'required' => false,
            'example' => 'managed',
          ),
        ),
        8 => 
        array (
          'name' => 'CenId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云企业网实例的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cen-rig0t5zi96crkl****',
          ),
        ),
        9 => 
        array (
          'name' => 'TransitRouterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '转发路由器实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'tr-uf6egtvyaedvt20xl****',
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
                'description' => '返回结果的总条数。',
                'type' => 'string',
                'example' => '6',
              ),
              'RequestId' => 
              array (
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => '1471E2EC-F706-5F11-A79B-BD583ACB8297',
              ),
              'VpcTrFirewalls' => 
              array (
                'description' => 'VPC边界防火墙列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'VPC边界防火墙。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'VpcFirewallName' => 
                    array (
                      'description' => 'VPC边界防火墙的实例名称。',
                      'type' => 'string',
                      'example' => 'VPC边界防火墙',
                    ),
                    'FirewallSwitchStatus' => 
                    array (
                      'description' => 'VPC边界防火墙的状态。取值：

- **opened**：已开启

- **closed**：已关闭

- **notconfigured**：表示暂未配置VPC边界防火墙

- **configured**：表示已配置VPC边界防火墙

- **creating**：表示正在创建VPC边界防火墙

- **opening**：表示正在开启VPC边界防火墙

- **deleting**：表示正在删除VPC边界防火墙


> 不设置该参数表示查询所有状态的VPC边界防火墙',
                      'type' => 'string',
                      'example' => 'opened',
                    ),
                    'CenId' => 
                    array (
                      'description' => ' 云企业网实例的ID。  ',
                      'type' => 'string',
                      'example' => 'cen-03f8s0z052ka3v****',
                    ),
                    'CenName' => 
                    array (
                      'description' => '云企业网实例名称。',
                      'type' => 'string',
                      'example' => 'cen_swas',
                    ),
                    'RouteMode' => 
                    array (
                      'description' => '路由模式。取值：

- **managed**：表示自动模式

- **manual**：表示手动模式',
                      'type' => 'string',
                      'example' => 'managed',
                    ),
                    'RegionStatus' => 
                    array (
                      'description' => '地域开放状态。取值：

- **enable**：已开放，表示该地域允许配置VPC边界防火墙

- **disable**：未开放，表示该地域不允许配置VPC边界防火墙',
                      'type' => 'string',
                      'example' => 'enable',
                    ),
                    'ResultCode' => 
                    array (
                      'description' => '创建VPC边界防火墙的操作结果代码。取值：

- **RegionDisable**：表示网络实例所在的地域是VPC边界防火墙不支持的地域, 不允许创建VPC边界防火墙

- **空字符串**，表示该网络实例可以正常创建VPC边界防火墙',
                      'type' => 'string',
                      'example' => ' RegionDisable',
                    ),
                    'RegionNo' => 
                    array (
                      'description' => '转发路由器实例I的地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'TransitRouterId' => 
                    array (
                      'description' => '转发路由器实例ID。',
                      'type' => 'string',
                      'example' => 'tr-2vcmhjs88nil55fvu****',
                    ),
                    'FirewallId' => 
                    array (
                      'description' => 'VPC边界防火墙实例ID。',
                      'type' => 'string',
                      'example' => 'vfw-tr-99bc4f0fc88b4d00****',
                    ),
                    'IpsConfig' => 
                    array (
                      'description' => 'IPS配置信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'BasicRules' => 
                        array (
                          'description' => '基础规则开关。取值：

- **1**：开启状态

- **0**：关闭状态',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'EnableAllPatch' => 
                        array (
                          'description' => '虚拟补丁开关。取值：

- **1**：开启状态
- **0**：关闭状态',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'RunMode' => 
                        array (
                          'description' => 'IPS防御模式。取值：

- **1**：拦截模式
- **0**：观察模式',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                      ),
                    ),
                    'OwnerId' => 
                    array (
                      'description' => 'VPC实例所属账号ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '171761785151****',
                    ),
                    'PrecheckStatus' => 
                    array (
                      'description' => '是否可以自动开墙。取值：

- **passed**：可以自动开墙

- **failed**：不可以自动开墙

- **unknown**：未知状态',
                      'type' => 'string',
                      'example' => 'passed',
                    ),
                    'ProtectedResource' => 
                    array (
                      'description' => '已防护的资源列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Count' => 
                        array (
                          'description' => '已防护的资源个数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'VpcList' => 
                        array (
                          'description' => '已防护的VPC列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '已防护的VPC列表。',
                            'type' => 'string',
                            'example' => '["vpc-2zegxdvs5f2je81ph****"]',
                          ),
                        ),
                        'VbrList' => 
                        array (
                          'description' => '已防护的VBR列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '已防护的VBR列表。',
                            'type' => 'string',
                            'example' => '[
      "vbr-2zegxdvs5f2je81ph****"
]',
                          ),
                        ),
                        'VpnList' => 
                        array (
                          'description' => '已防护的VPN列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '已防护的VPN列表。',
                            'type' => 'string',
                            'example' => '[
      "vpn-2zegxdvs5f2je81ph****"
]',
                          ),
                        ),
                        'PeerTrList' => 
                        array (
                          'description' => '已防护的对端TR列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '已防护的对端TR列表。',
                            'type' => 'string',
                            'example' => '[
      "tr-2zegxdvs5f2je81ph****"
]',
                          ),
                        ),
                      ),
                    ),
                    'UnprotectedResource' => 
                    array (
                      'description' => '未防护的资源列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Count' => 
                        array (
                          'description' => '未防护的资源个数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'VpcList' => 
                        array (
                          'description' => '未防护的VPC列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '未防护的VPC列表。',
                            'type' => 'string',
                            'example' => '[
      "vpc-2zegxdvs5f2je81ph****"
]',
                          ),
                        ),
                        'VbrList' => 
                        array (
                          'description' => '未防护的VBR列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '未防护的VBR列表。',
                            'type' => 'string',
                            'example' => '[
      "vbr-2zegxdvs5f2je81ph****"
]',
                          ),
                        ),
                        'VpnList' => 
                        array (
                          'description' => '未防护的VPN列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '未防护的VPN列表。',
                            'type' => 'string',
                            'example' => '[
      "vpn-2zegxdvs5f2je81ph****"
]',
                          ),
                        ),
                        'PeerTrList' => 
                        array (
                          'description' => '未防护的对端TR列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '未防护的对端TR列表。',
                            'type' => 'string',
                            'example' => '[
      "tr-2zegxdvs5f2je81ph****"
]',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": \\"6\\",\\n  \\"RequestId\\": \\"1471E2EC-F706-5F11-A79B-BD583ACB8297\\",\\n  \\"VpcTrFirewalls\\": [\\n    {\\n      \\"VpcFirewallName\\": \\"VPC边界防火墙\\",\\n      \\"FirewallSwitchStatus\\": \\"opened\\",\\n      \\"CenId\\": \\"cen-03f8s0z052ka3v****\\",\\n      \\"CenName\\": \\"cen_swas\\",\\n      \\"RouteMode\\": \\"managed\\",\\n      \\"RegionStatus\\": \\"enable\\",\\n      \\"ResultCode\\": \\" RegionDisable\\",\\n      \\"RegionNo\\": \\"cn-hangzhou\\",\\n      \\"TransitRouterId\\": \\"tr-2vcmhjs88nil55fvu****\\",\\n      \\"FirewallId\\": \\"vfw-tr-99bc4f0fc88b4d00****\\",\\n      \\"IpsConfig\\": {\\n        \\"BasicRules\\": 1,\\n        \\"EnableAllPatch\\": 1,\\n        \\"RunMode\\": 1\\n      },\\n      \\"OwnerId\\": 0,\\n      \\"PrecheckStatus\\": \\"passed\\",\\n      \\"ProtectedResource\\": {\\n        \\"Count\\": 1,\\n        \\"VpcList\\": [\\n          \\"[\\\\\\"vpc-2zegxdvs5f2je81ph****\\\\\\"]\\"\\n        ],\\n        \\"VbrList\\": [\\n          \\"[\\\\n      \\\\\\"vbr-2zegxdvs5f2je81ph****\\\\\\"\\\\n]\\"\\n        ],\\n        \\"VpnList\\": [\\n          \\"[\\\\n      \\\\\\"vpn-2zegxdvs5f2je81ph****\\\\\\"\\\\n]\\"\\n        ],\\n        \\"PeerTrList\\": [\\n          \\"[\\\\n      \\\\\\"tr-2zegxdvs5f2je81ph****\\\\\\"\\\\n]\\"\\n        ]\\n      },\\n      \\"UnprotectedResource\\": {\\n        \\"Count\\": 1,\\n        \\"VpcList\\": [\\n          \\"[\\\\n      \\\\\\"vpc-2zegxdvs5f2je81ph****\\\\\\"\\\\n]\\"\\n        ],\\n        \\"VbrList\\": [\\n          \\"[\\\\n      \\\\\\"vbr-2zegxdvs5f2je81ph****\\\\\\"\\\\n]\\"\\n        ],\\n        \\"VpnList\\": [\\n          \\"[\\\\n      \\\\\\"vpn-2zegxdvs5f2je81ph****\\\\\\"\\\\n]\\"\\n        ],\\n        \\"PeerTrList\\": [\\n          \\"[\\\\n      \\\\\\"tr-2zegxdvs5f2je81ph****\\\\\\"\\\\n]\\"\\n        ]\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取云企业网（企业版）防火墙列表',
      'summary' => '获取TR防火墙列表。',
    ),
    'DescribeTrFirewallsV2RouteList' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收消息的语言类型。取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'FirewallId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vfw-tr-8bcfa0f2f12d411e****',
          ),
        ),
        2 => 
        array (
          'name' => 'TrFirewallRoutePolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '防火墙路由策略ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'policy-7d5c672e37ee4175****',
          ),
        ),
        3 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时的页码。默认值为1。',
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
            'description' => '分页查询时，显示的每页数据的最大条数。默认值为10.',
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
            'type' => 'object',
            'properties' => 
            array (
              'FirewallRouteDetailList' => 
              array (
                'description' => '云防火墙路由表列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '云防火墙路由表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TrFirewallRoutePolicyId' => 
                    array (
                      'description' => '防火墙路由策略ID。',
                      'type' => 'string',
                      'example' => 'policy-04ecbbc6720d4f90****',
                    ),
                    'TrFirewallRouteTableId' => 
                    array (
                      'description' => '路由所属路由表的ID。',
                      'type' => 'string',
                      'example' => 'vtb-2zeockxxxorv0mnhz****',
                    ),
                    'TrFirewallRouteDestination' => 
                    array (
                      'description' => '路由目的地址。',
                      'type' => 'string',
                      'example' => '192.168.10.0/25',
                    ),
                    'TrFirewallRouteNexthop' => 
                    array (
                      'description' => '路由下一跳ID。',
                      'type' => 'string',
                      'example' => 'tr-attach-hnxab1y0pxn16p****',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => 'ABF190A2-B4D0-53F6-995A-5690A721F91C',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"FirewallRouteDetailList\\": [\\n    {\\n      \\"TrFirewallRoutePolicyId\\": \\"policy-04ecbbc6720d4f90****\\",\\n      \\"TrFirewallRouteTableId\\": \\"vtb-2zeockxxxorv0mnhz****\\",\\n      \\"TrFirewallRouteDestination\\": \\"192.168.10.0/25\\",\\n      \\"TrFirewallRouteNexthop\\": \\"tr-attach-hnxab1y0pxn16p****\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"ABF190A2-B4D0-53F6-995A-5690A721F91C\\"\\n}","type":"json"}]',
      'title' => '获取TR防火墙路由表列表',
      'summary' => '获取TR防火墙路由表列表。',
    ),
    'DescribeTrFirewallV2RoutePolicyList' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收消息的语言类型。取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'FirewallId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vfw-tr-d5ba592ac6c84aff****',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，显示的每页数据的最大条数。默认值为10.',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时的页码。默认值为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PolicyId',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '防火墙路由策略ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'policy-7b66257c14e141fb****',
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
              'TrFirewallRoutePolicies' => 
              array (
                'description' => '防火墙路由策略列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '防火墙路由策略。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PolicyType' => 
                    array (
                      'description' => 'VPC边界防火墙云企业网企业版引流场景类型。取值：

- **fullmesh**：多点间互联

- **one_to_one**：点到点

- **end_to_end**：点到多点',
                      'type' => 'string',
                      'example' => 'fullmesh',
                    ),
                    'PolicyName' => 
                    array (
                      'description' => '策略名称。',
                      'type' => 'string',
                      'example' => '新加坡点到多点',
                    ),
                    'PolicyDescription' => 
                    array (
                      'description' => '策略描述。',
                      'type' => 'string',
                      'example' => '点到多点',
                    ),
                    'SrcCandidateList' => 
                    array (
                      'description' => '主引流实例列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '主引流实例。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'CandidateId' => 
                          array (
                            'description' => '引流实例的ID。',
                            'type' => 'string',
                            'example' => 'vpc-2ze9epancaw8t4sha****',
                          ),
                          'CandidateType' => 
                          array (
                            'description' => '引流实例类型。',
                            'type' => 'string',
                            'example' => 'VPC',
                          ),
                        ),
                      ),
                    ),
                    'DestCandidateList' => 
                    array (
                      'description' => '子引流实例列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '子引流实例。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'CandidateId' => 
                          array (
                            'description' => '引流实例的ID。',
                            'type' => 'string',
                            'example' => 'vpc-2ze9epancaw8t4sha****',
                          ),
                          'CandidateType' => 
                          array (
                            'description' => '引流实例类型。',
                            'type' => 'string',
                            'example' => 'VPC',
                          ),
                        ),
                      ),
                    ),
                    'TrFirewallRoutePolicyId' => 
                    array (
                      'description' => '防火墙路由策略ID。',
                      'type' => 'string',
                      'example' => 'policy-7b66257c14e141fb****',
                    ),
                    'PolicyStatus' => 
                    array (
                      'description' => '策略状态。取值：

- creating：创建中

- deleting：删除中

- opening：开启中

- opened：已开启

- closing：关闭中

- closed：已关闭',
                      'type' => 'string',
                      'example' => 'opened',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => '95EB5F3A-67FE-5780-92BD-5ECBA772AB7E',
              ),
              'TotalCount' => 
              array (
                'description' => '返回结果的总条数。',
                'type' => 'string',
                'example' => '1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TrFirewallRoutePolicies\\": [\\n    {\\n      \\"PolicyType\\": \\"fullmesh\\",\\n      \\"PolicyName\\": \\"新加坡点到多点\\",\\n      \\"PolicyDescription\\": \\"点到多点\\",\\n      \\"SrcCandidateList\\": [\\n        {\\n          \\"CandidateId\\": \\"vpc-2ze9epancaw8t4sha****\\",\\n          \\"CandidateType\\": \\"VPC\\"\\n        }\\n      ],\\n      \\"DestCandidateList\\": [\\n        {\\n          \\"CandidateId\\": \\"vpc-2ze9epancaw8t4sha****\\",\\n          \\"CandidateType\\": \\"VPC\\"\\n        }\\n      ],\\n      \\"TrFirewallRoutePolicyId\\": \\"policy-7b66257c14e141fb****\\",\\n      \\"PolicyStatus\\": \\"opened\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"95EB5F3A-67FE-5780-92BD-5ECBA772AB7E\\",\\n  \\"TotalCount\\": \\"1\\"\\n}","type":"json"}]',
      'title' => '获取TR防火墙路由策略列表',
      'summary' => '获取TR防火墙路由策略列表。',
    ),
    'DescribeTrFirewallPolicyBackUpAssociationList' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收消息的语言类型。取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'FirewallId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vfw-tr-8b268ce1b26e4c68****',
          ),
        ),
        2 => 
        array (
          'name' => 'TrFirewallRoutePolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '防火墙路由策略ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'policy-5dcafb12ff794a56****',
          ),
        ),
        3 => 
        array (
          'name' => 'CandidateList',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '引流实例列表',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'CandidateId' => 
                array (
                  'description' => '引流实例的ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'vpc-wz9grb8ng3y7h7lf2****
',
                ),
                'CandidateType' => 
                array (
                  'description' => '引流实例类型。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'VPC',
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
              'PolicyAssociationBackupConfigs' => 
              array (
                'description' => '恢复路由表列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '恢复路由表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CandidateType' => 
                    array (
                      'description' => '引流实例类型。',
                      'type' => 'string',
                      'example' => 'VPC',
                    ),
                    'CandidateId' => 
                    array (
                      'description' => '引流实例ID。',
                      'type' => 'string',
                      'example' => 'vpc-wz9grb8ng3y7h7lf2****',
                    ),
                    'OriginalRouteTableId' => 
                    array (
                      'description' => '恢复路由表ID。',
                      'type' => 'string',
                      'example' => 'vtb-wz9slp3s7m4qrzvnq****',
                    ),
                    'CurrentRouteTableId' => 
                    array (
                      'description' => '引流后路由表。',
                      'type' => 'string',
                      'example' => 'vtb-wz9898grickmh5j09****',
                    ),
                    'CandidateName' => 
                    array (
                      'description' => '引流实例名称。',
                      'type' => 'string',
                      'example' => 'VPC引流实例',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => 'C264A756-9B48-57E3-B312-716941E146C6',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PolicyAssociationBackupConfigs\\": [\\n    {\\n      \\"CandidateType\\": \\"VPC\\",\\n      \\"CandidateId\\": \\"vpc-wz9grb8ng3y7h7lf2****\\",\\n      \\"OriginalRouteTableId\\": \\"vtb-wz9slp3s7m4qrzvnq****\\",\\n      \\"CurrentRouteTableId\\": \\"vtb-wz9898grickmh5j09****\\",\\n      \\"CandidateName\\": \\"VPC引流实例\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"C264A756-9B48-57E3-B312-716941E146C6\\"\\n}","type":"json"}]',
      'title' => '获取TR防火墙恢复路由表',
      'summary' => '获取TR防火墙ACL备份。',
    ),
    'ModifyTrFirewallV2Configuration' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收消息的语言类型。取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'FirewallId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vfw-tr-bcdf89d405ce4bd2****',
          ),
        ),
        2 => 
        array (
          'name' => 'FirewallName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙实例名。',
            'type' => 'string',
            'required' => false,
            'example' => 'VPC边界防火墙',
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
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => 'A74C8FDD-2BEF-52D5-8B01-EB6FD94606F9',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A74C8FDD-2BEF-52D5-8B01-EB6FD94606F9\\"\\n}","type":"json"}]',
      'title' => '修改TR防火墙配置',
      'summary' => '修改TR防火墙配置。',
    ),
    'ModifyFirewallV2RoutePolicySwitch' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收消息的语言类型。取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'FirewallId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vfw-tr-5b202e7f0be64611****',
          ),
        ),
        2 => 
        array (
          'name' => 'TrFirewallRoutePolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '防火墙路由策略ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'policy-93684cc5caa44b2e****',
          ),
        ),
        3 => 
        array (
          'name' => 'TrFirewallRoutePolicySwitchStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '策略开关。取值：

- open：开启

- close：关闭',
            'type' => 'string',
            'required' => false,
            'example' => 'open',
          ),
        ),
        4 => 
        array (
          'name' => 'ShouldRecover',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否恢复引流配置。取值：

- true：路由回滚

- false：路由撤销',
            'type' => 'string',
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
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => '1F6D4A8D-EC01-5996-A61A-AA3B56490C00',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1F6D4A8D-EC01-5996-A61A-AA3B56490C00\\"\\n}","type":"json"}]',
      'title' => '修改路由策略开关',
      'summary' => '修改路由策略开关。',
    ),
    'ModifyTrFirewallV2RoutePolicyScope' => 
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
        'operationType' => 'update',
        'abilityTreeCode' => '142854',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcfwMD8M6R',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收消息的语言类型。取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'TrFirewallRoutePolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '防火墙路由策略ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'policy-4d724d0139df48f1****',
          ),
        ),
        2 => 
        array (
          'name' => 'FirewallId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'vfw-tr-6520de0253bc4669****',
          ),
        ),
        3 => 
        array (
          'name' => 'SrcCandidateList',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '主引流实例列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '主引流实例。',
              'type' => 'object',
              'properties' => 
              array (
                'CandidateId' => 
                array (
                  'description' => '引流实例的ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'vpc-2ze9epancaw8t4sha****
',
                ),
                'CandidateType' => 
                array (
                  'description' => '引流实例类型。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'VPC
',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'DestCandidateList',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '子引流实例列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '子引流实例。',
              'type' => 'object',
              'properties' => 
              array (
                'CandidateId' => 
                array (
                  'description' => '引流实例的ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'vpc-2ze9epancaw8t4uzi****
',
                ),
                'CandidateType' => 
                array (
                  'description' => '引流实例类型。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'VPC',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'ShouldRecover',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否恢复引流配置。取值：

- true：路由回滚

- false：路由撤销',
            'type' => 'string',
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
              'TrFirewallRoutePolicyId' => 
              array (
                'description' => '防火墙路由策略ID。',
                'type' => 'string',
                'example' => 'policy-4d724d0139df48f1****',
              ),
              'RequestId' => 
              array (
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => 'E7D4D635-0C70-5CEB-A609-851E94D51FBB',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TrFirewallRoutePolicyId\\": \\"policy-4d724d0139df48f1****\\",\\n  \\"RequestId\\": \\"E7D4D635-0C70-5CEB-A609-851E94D51FBB\\"\\n}","type":"json"}]',
      'title' => '修改TR防火墙路由策略范围',
      'summary' => '修改TR防火墙路由策略范围。',
      'description' => '支持*点到多点*和*多点间互联*场景的修改，不支持*点到点*场景的修改。',
    ),
    'DeleteTrFirewallV2' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收消息的语言类型。取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'FirewallId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vfw-tr-99bc4f0fc88b4d00****',
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
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => 'A774E66E-B170-59FC-9AAF-3068B15E991F',
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
            'errorCode' => 'ErrorTrFirewallNotExist',
            'errorMessage' => 'Cen TR firewall not exist',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A774E66E-B170-59FC-9AAF-3068B15E991F\\"\\n}","type":"json"}]',
      'title' => '删除TR防火墙',
      'summary' => '删除TR防火墙。',
    ),
    'AddInstanceMembers' => 
    array (
      'summary' => '添加云防火墙成员账号。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'Members',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '云防火墙成员账号。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '无',
              'type' => 'object',
              'properties' => 
              array (
                'MemberDesc' => 
                array (
                  'description' => '云防火墙成员账号的备注信息，长度为1~256个字符。最多可添加20个成员账号。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'renewal',
                ),
                'MemberUid' => 
                array (
                  'description' => '云防火墙成员账号的UID。最多可添加20个成员账号。',
                  'type' => 'integer',
                  'format' => 'int64',
                  'required' => true,
                  'example' => '258039427902****',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'B40A54DF-C142-44F7-8441-B31C1EADB36E',
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
            'errorCode' => 'ErrorParamsNotEnough',
            'errorMessage' => 'Parameters are insufficient.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorParamsInvalid',
            'errorMessage' => 'Invalid Params',
          ),
          2 => 
          array (
            'errorCode' => 'ErrotMaxInstanceMemberNumExceed',
            'errorMessage' => 'The maximum number of firewall instance members is exceeded.',
          ),
          3 => 
          array (
            'errorCode' => 'ErrorDBSelect',
            'errorMessage' => 'An error occurred while querying database.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B40A54DF-C142-44F7-8441-B31C1EADB36E\\"\\n}","errorExample":""},{"type":"xml","example":"<AddInstanceMembersResponse>\\n    <RequestId>B40A54DF-C142-44F7-8441-B31C1EADB36E</RequestId>\\n</AddInstanceMembersResponse>","errorExample":""}]',
      'title' => '添加云防火墙成员账号',
      'description' => '本接口一般用于添加云防火墙成员账号。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteInstanceMembers' => 
    array (
      'summary' => '删除云防火墙成员账号。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'MemberUids',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '云防火墙成员账号的UID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '云防火墙成员账号的UID列表。',
              'type' => 'integer',
              'format' => 'int64',
              'required' => false,
              'example' => '258039427902****',
            ),
            'required' => true,
            'example' => '1234123412341234',
            'maxItems' => 200,
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '03E8AA70-0CC9-42EA-97AA-EA68377930B4',
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
            'errorCode' => 'ErrorParamsNotEnough',
            'errorMessage' => 'Parameters are insufficient.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorDBInsert',
            'errorMessage' => 'An error occurred while performing an insert operation in the database.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'ErrorAuthentication',
            'errorMessage' => 'An authentication error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"03E8AA70-0CC9-42EA-97AA-EA68377930B4\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteInstanceMembersResponse>\\n    <RequestId>03E8AA70-0CC9-42EA-97AA-EA68377930B4</RequestId>\\n</DeleteInstanceMembersResponse>","errorExample":""}]',
      'title' => '删除云防火墙成员账号',
      'description' => '调用DeleteInstanceMembers接口一次最多可删除20个云防火墙成员账号，多个成员账号之间使用用英文逗号（,）分隔。成员账号被删除后，云防火墙无法访问被删除成员账号的云资源，请谨慎操作。删除前，调用[DescribeInstanceMembers](~~271704~~)接口获取云防火墙成员账号信息。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyInstanceMemberAttributes' => 
    array (
      'summary' => '更新云防火墙成员账号信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'Members',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '云防火墙成员账号。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '无',
              'type' => 'object',
              'properties' => 
              array (
                'MemberDesc' => 
                array (
                  'description' => '云防火墙成员账号的备注信息。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'renewal',
                ),
                'MemberUid' => 
                array (
                  'description' => '云防火墙成员账号的UID。',
                  'type' => 'integer',
                  'format' => 'int64',
                  'required' => true,
                  'example' => '123412341234****',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'AB74E747-BA5C-492C-87DD-CEA67FCFFFE5',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        200 => 
        array (
          0 => 
          array (
            'errorCode' => 'ErrorDBUpdateError',
            'errorMessage' => 'A database update error occurred.',
          ),
        ),
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ErrorParamsNotEnough',
            'errorMessage' => 'Parameters are insufficient.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'ErrorAuthentication',
            'errorMessage' => 'An authentication error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"AB74E747-BA5C-492C-87DD-CEA67FCFFFE5\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyInstanceMemberAttributesResponse>\\n    <RequestId>AB74E747-BA5C-492C-87DD-CEA67FCFFFE5</RequestId>\\n</ModifyInstanceMemberAttributesResponse>","errorExample":""}]',
      'title' => '更新云防火墙成员账号信息',
      'description' => '本接口一般用于更新云防火墙成员账号信息。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeInstanceMembers' => 
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
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，返回第几页数据。
默认值为**1**，表示返回第1页数据。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，每页包含多少条结果。

默认值为**20**，表示每页包含20条结果。',
            'type' => 'string',
            'required' => false,
            'example' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'MemberUid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云防火墙成员账号的UID。',
            'type' => 'string',
            'required' => false,
            'example' => '258039427902****',
          ),
        ),
        3 => 
        array (
          'name' => 'MemberDisplayName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云防火墙成员账号的名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'cloudfirewall_2',
          ),
        ),
        4 => 
        array (
          'name' => 'MemberDesc',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云防火墙成员账号的备注信息，长度为1~256个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'renewal',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'A531AE1A-FBA2-48B6-BAB8-84D02BD409EE',
              ),
              'PageInfo' => 
              array (
                'description' => '分页查询时的页面信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'CurrentPage' => 
                  array (
                    'description' => '本次查询第几页数据。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '本次查询每页包含多少条结果。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '20',
                  ),
                  'TotalCount' => 
                  array (
                    'description' => '云防火墙成员账号的总数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '20',
                  ),
                ),
              ),
              'Members' => 
              array (
                'description' => '云防火墙成员账号的信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'MemberDesc' => 
                    array (
                      'description' => '云防火墙成员账号的备注信息。',
                      'type' => 'string',
                      'example' => 'renewal',
                    ),
                    'MemberDisplayName' => 
                    array (
                      'description' => '云防火墙成员账号的名称。',
                      'type' => 'string',
                      'example' => 'cloudfirewall_2',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '云防火墙成员账号的加入时间。使用时间戳格式，单位：秒。
',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1615189819',
                    ),
                    'MemberUid' => 
                    array (
                      'description' => '云防火墙成员账号的UID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '258039427902****',
                    ),
                    'MemberStatus' => 
                    array (
                      'description' => '云防火墙成员账号的状态。取值：
- **normal**：正常
- **deleting**：删除中',
                      'type' => 'string',
                      'example' => 'normal',
                    ),
                    'ModifyTime' => 
                    array (
                      'description' => '云防火墙成员账号的最近修改时间。使用时间戳格式，单位：秒。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1615189819',
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
            'errorCode' => 'ErrorParameters',
            'errorMessage' => 'A parameter error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorDBSelect',
            'errorMessage' => 'An error occurred while querying database.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorParamsNotEnough',
            'errorMessage' => 'Parameters are insufficient.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A531AE1A-FBA2-48B6-BAB8-84D02BD409EE\\",\\n  \\"PageInfo\\": {\\n    \\"CurrentPage\\": 1,\\n    \\"PageSize\\": 20,\\n    \\"TotalCount\\": 20\\n  },\\n  \\"Members\\": [\\n    {\\n      \\"MemberDesc\\": \\"renewal\\",\\n      \\"MemberDisplayName\\": \\"cloudfirewall_2\\",\\n      \\"CreateTime\\": 1615189819,\\n      \\"MemberUid\\": 0,\\n      \\"MemberStatus\\": \\"normal\\",\\n      \\"ModifyTime\\": 1615189819\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeInstanceMembersResponse>\\n    <RequestId>A531AE1A-FBA2-48B6-BAB8-84D02BD409EE</RequestId>\\n    <PageInfo>\\n        <CurrentPage>1</CurrentPage>\\n        <PageSize>20</PageSize>\\n        <TotalCount>20</TotalCount>\\n    </PageInfo>\\n    <Members>\\n        <MemberDesc>renewal</MemberDesc>\\n        <MemberDisplayName>cloudfirewall_2</MemberDisplayName>\\n        <CreateTime>1615189819</CreateTime>\\n        <MemberStatus>normal</MemberStatus>\\n        <ModifyTime>1615189819</ModifyTime>\\n    </Members>\\n</DescribeInstanceMembersResponse>","errorExample":""}]',
      'title' => '获取云防火墙成员账号信息',
      'summary' => '获取云防火墙成员账号信息。',
      'description' => '本接口一般用于查询云防火墙成员账号信息。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeRiskEventPayload' => 
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '68349',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcfw516PD4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置查询开始时间。使用秒级时间戳格式表示。',
            'type' => 'string',
            'required' => true,
            'example' => '1669533617',
          ),
        ),
        1 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置查询结束时间。使用秒级时间戳格式表示。',
            'type' => 'string',
            'required' => true,
            'example' => '1681288980',
          ),
        ),
        2 => 
        array (
          'name' => 'SrcIP',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的源IP。设置该参数表示查询包含了这条源IP的入侵防御事件。',
            'type' => 'string',
            'required' => false,
            'example' => '203.0.113.1',
          ),
        ),
        3 => 
        array (
          'name' => 'DstIP',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的目的IP。设置该参数表示查询包含了这条目的IP的入侵防御事件。',
            'type' => 'string',
            'required' => false,
            'example' => '203.0.113.2',
          ),
        ),
        4 => 
        array (
          'name' => 'UUID',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '入侵防御事件的UUID。',
            'type' => 'string',
            'required' => true,
            'example' => 'e62c25e0-1073-46bd-9567-b8f12b3d****',
          ),
        ),
        5 => 
        array (
          'name' => 'FirewallType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云防火墙类型。取值：
- **VpcFirewall**：表示VPC边界防火墙
- **InternetFirewall**（默认）：表示互联网边界防火墙',
            'type' => 'string',
            'required' => false,
            'example' => 'InternetFirewall',
          ),
        ),
        6 => 
        array (
          'name' => 'SrcVpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的源VPC ID。设置该参数表示查询包含了这条源VPC ID的入侵防御事件。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-wz9j2lqyo15udw5nt****',
          ),
        ),
        7 => 
        array (
          'name' => 'DstVpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的目的VPC ID。设置该参数表示查询包含了这条目的VPC ID的入侵防御事件。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-uf6jr1klwqb60dyn2****',
          ),
        ),
        8 => 
        array (
          'name' => 'PublicIP',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的公网资产IP。设置该参数表示查询包含了这条资产IP的失陷感知事件。',
            'type' => 'string',
            'required' => false,
            'example' => '203.0.113.3',
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
              'DstIP' => 
              array (
                'description' => '入侵防御事件的目的IP。',
                'type' => 'string',
                'example' => '203.0.113.1',
              ),
              'DstPort' => 
              array (
                'description' => '入侵防御事件的目的Port。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '8080',
              ),
              'Payload' => 
              array (
                'description' => '入侵防御事件的攻击Payload。',
                'type' => 'string',
                'example' => '302902010004067075626c6963a01c0204036a5f43020100020100300e300c06082b060102010101000500',
              ),
              'SrcVpcId' => 
              array (
                'description' => '入侵防御事件的源VPC ID。',
                'type' => 'string',
                'example' => 'vpc-t4nlt09olhpazpoeg****',
              ),
              'SrcPort' => 
              array (
                'description' => '入侵防御事件的源端口。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '54360',
              ),
              'RequestId' => 
              array (
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => '68055BA4-D8BD-5611-AC49-C651E619A12E',
              ),
              'PayloadLen' => 
              array (
                'description' => '入侵防御事件的攻击Payload长度。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '457',
              ),
              'DstVpcId' => 
              array (
                'description' => '入侵防御事件的目的VPC ID。',
                'type' => 'string',
                'example' => 'vpc-bp10w5nb30r4jzfyc****',
              ),
              'SrcIP' => 
              array (
                'description' => '入侵防御事件的源IP。',
                'type' => 'string',
                'example' => '203.0.113.2',
              ),
              'Proto' => 
              array (
                'description' => '入侵防御攻击事件的协议类型。取值：

- **TCP**
- **UDP**',
                'type' => 'string',
                'example' => 'TCP',
              ),
              'XForwardFor' => 
              array (
                'description' => 'HTTP X-Forwarded-For字段。',
                'type' => 'string',
                'example' => '203.0.113.4',
              ),
              'RealIp' => 
              array (
                'description' => 'HTTP X-Real-IP字段。',
                'type' => 'string',
                'example' => '203.0.113.3',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"DstIP\\": \\"203.0.113.1\\",\\n  \\"DstPort\\": 8080,\\n  \\"Payload\\": \\"302902010004067075626c6963a01c0204036a5f43020100020100300e300c06082b060102010101000500\\",\\n  \\"SrcVpcId\\": \\"vpc-t4nlt09olhpazpoeg****\\",\\n  \\"SrcPort\\": 54360,\\n  \\"RequestId\\": \\"68055BA4-D8BD-5611-AC49-C651E619A12E\\",\\n  \\"PayloadLen\\": 457,\\n  \\"DstVpcId\\": \\"vpc-bp10w5nb30r4jzfyc****\\",\\n  \\"SrcIP\\": \\"203.0.113.2\\",\\n  \\"Proto\\": \\"TCP\\",\\n  \\"XForwardFor\\": \\"203.0.113.4\\",\\n  \\"RealIp\\": \\"203.0.113.3\\"\\n}","type":"json"}]',
      'title' => '获取入侵防御事件的攻击payload',
      'summary' => '获取入侵防御事件的攻击Payload。',
    ),
    'DescribeVulnerabilityProtectedList' => 
    array (
      'summary' => '获取云防火墙支持防护的漏洞列表。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'SourceIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问源的IP地址。',
            'type' => 'string',
            'deprecated' => true,
            'required' => false,
            'example' => '112.239.XX.XX',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回消息的语言类型。取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回消息的语言类型。取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        3 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置查询开始时间。使用秒级时间戳格式表示。',
            'type' => 'string',
            'required' => true,
            'example' => '1655778046',
          ),
        ),
        4 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置查询结束时间。使用秒级时间戳格式表示。',
            'type' => 'string',
            'required' => true,
            'example' => '1646063922',
          ),
        ),
        5 => 
        array (
          'name' => 'VulnStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '漏洞防护状态。取值：

- **partProtected** ：部分防护中
- **protected** ：防护中
- **unProtected** ：未防护',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'protected' => 'protected',
              'unProtected' => 'unProtected',
              'partProtected' => 'partProtected',
            ),
            'example' => 'protected',
          ),
        ),
        6 => 
        array (
          'name' => 'VulnCveName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '漏洞CVE编号。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'CVE-2022-2992',
          ),
        ),
        7 => 
        array (
          'name' => 'AttackType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '漏洞防护事件的攻击类型。取值：
- **1**：异常连接
- **2**：命令执行
- **3**：暴力破解
- **4**：扫描
- **5**：其它
- **6**：信息泄露
- **7**：DoS攻击
- **8**：溢出攻击
- **9**：Web攻击
- **10**：木马后门
- **11**：病毒蠕虫
- **12**：挖矿行为
- **13**：反弹Shell

>不设置该参数表示查询全部攻击类型。',
            'type' => 'string',
            'required' => false,
            'example' => '13',
          ),
        ),
        8 => 
        array (
          'name' => 'VulnType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '漏洞类型。取值：

- **App**：应用漏洞
- **emg**：应急漏洞
- **cms**：Web-CMS漏洞',
            'type' => 'string',
            'required' => false,
            'example' => 'emg',
          ),
        ),
        9 => 
        array (
          'name' => 'VulnLevel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '漏洞风险等级。取值：

- **high**：高危
- **medium**：中危
- **low**：低危',
            'type' => 'string',
            'required' => false,
            'example' => 'medium',
          ),
        ),
        10 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时的当前页的页码。默认值为1。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        11 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，显示的每页数据的最大条数。支持最大取值为50。',
            'type' => 'string',
            'required' => false,
            'example' => '10',
          ),
        ),
        12 => 
        array (
          'name' => 'SortKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序依据。唯一取值：**attackCnt**，表示攻击次数。',
            'type' => 'string',
            'required' => false,
            'example' => 'attackCnt',
          ),
        ),
        13 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序方式。取值：

- **asc**：升序。
-  **desc**（默认）：降序。',
            'type' => 'string',
            'required' => false,
            'example' => 'desc',
          ),
        ),
        14 => 
        array (
          'name' => 'VulnResource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '漏洞影响的资产数。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        15 => 
        array (
          'name' => 'UserType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户类型。唯一取值：**buy**，表示付费型。',
            'type' => 'string',
            'required' => false,
            'example' => 'buy',
          ),
        ),
        16 => 
        array (
          'name' => 'BuyVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云防火墙的版本。按量付费版本填10，其它版本不需要填写。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
          ),
        ),
        17 => 
        array (
          'name' => 'MemberUid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云防火墙成员账号的UID。',
            'type' => 'string',
            'required' => false,
            'example' => '258039427902****',
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
            'description' => 'DescribeVulnerabilityProtectedList 应答',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '结果的请求ID。',
                'type' => 'string',
                'example' => 'D355C631-1537-59C5-A56E-F6C5037B99E5',
              ),
              'TotalCount' => 
              array (
                'description' => '云防火墙已检测的漏洞总数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '5',
              ),
              'ZeroResourceCount' => 
              array (
                'description' => '检测到的漏洞资产数为0的个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'VulnList' => 
              array (
                'description' => '漏洞信息集合。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '漏洞信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'VulnName' => 
                    array (
                      'description' => '漏洞名称。',
                      'type' => 'string',
                      'example' => 'fastjson <= 1.2.80 反序列化任意代码执行漏洞',
                    ),
                    'AttackType' => 
                    array (
                      'description' => '漏洞防护事件的攻击类型。取值：
- **1**：异常连接
- **2**：命令执行
- **3**：暴力破解
- **4**：扫描
- **5**：其它
- **6**：信息泄露
- **7**：DoS攻击
- **8**：溢出攻击
- **9**：Web攻击
- **10**：木马后门
- **11**：病毒蠕虫
- **12**：挖矿行为
- **13**：反弹Shell',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '13',
                    ),
                    'NeedRuleClass' => 
                    array (
                      'description' => '需要开启的RuleClass等级。取值：

- **1**（默认）：宽松
- **2**：中等
- **3**：严格',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'VulnType' => 
                    array (
                      'description' => '漏洞类型。取值：

- **emg**：应急漏洞
- **webcms**：Web-CMS漏洞
- **app**：应用漏洞',
                      'type' => 'string',
                      'example' => 'emg',
                    ),
                    'VulnKey' => 
                    array (
                      'description' => '漏洞编码。',
                      'type' => 'string',
                      'example' => 'dedecms-archive.helper.php-vul',
                    ),
                    'VulnLevel' => 
                    array (
                      'description' => '漏洞等级。取值：

- **high**：高危
- **medium**：中危
- **low**：低危',
                      'type' => 'string',
                      'example' => 'high',
                    ),
                    'NeedOpenBasicRule' => 
                    array (
                      'description' => '漏洞对应基础防御规则的状态。取值：

- **true**：开启
- **false**：关闭
> 当取值为true时，一键防护时需要设置该漏洞对应的基础防御状态为拦截。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'CveId' => 
                    array (
                      'description' => 'CVE编号列表。',
                      'type' => 'string',
                      'example' => '12112131123, 1231123112',
                    ),
                    'FirstTime' => 
                    array (
                      'description' => '首次发生攻击的时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1608687364',
                    ),
                    'BasicRuleIds' => 
                    array (
                      'description' => '关联的规则ID。',
                      'type' => 'string',
                      'example' => '12,12',
                    ),
                    'LastTime' => 
                    array (
                      'description' => '最近一次的攻击时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1608687364',
                    ),
                    'NeedOpenVirtualPatcheUuids' => 
                    array (
                      'description' => '需要升级为拦截模式的虚拟补丁规则UUID。',
                      'type' => 'string',
                      'example' => 'UUID-1231231234',
                    ),
                    'NeedOpenBasicRuleUuids' => 
                    array (
                      'description' => '需要升级为拦截模式的基础防御规则UUID。',
                      'type' => 'string',
                      'example' => 'UUID-1231231',
                    ),
                    'NeedOpenVirtualPatche' => 
                    array (
                      'description' => '漏洞对应虚拟补丁的状态。取值：

- **true**：开启
- **false**：关闭
> 当取值为true时，一键防护时需要设置该漏洞对应的虚拟补丁状态为拦截。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'VirtualPatcheIds' => 
                    array (
                      'description' => '关联的规则ID。',
                      'type' => 'string',
                      'example' => '13,13',
                    ),
                    'HighlightTag' => 
                    array (
                      'description' => '该漏洞是否需要重要关注。取值：

- **0**：不需要
- **1**：需要',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'NeedOpenRunMode' => 
                    array (
                      'description' => '一键防护时是否需要设置威胁引擎运行模式。取值：

- **true**：需要

- **false**：不需要',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'VulnStatus' => 
                    array (
                      'description' => '漏洞防护状态。取值：

- **partProtected**：部分防护中
- **protected**：防护中
- **unProtected**：未防护',
                      'type' => 'string',
                      'example' => 'protected',
                    ),
                    'AttackCnt' => 
                    array (
                      'description' => '漏洞的攻击次数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'ResourceCnt' => 
                    array (
                      'description' => '存在漏洞的资产数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'MemberUid' => 
                    array (
                      'description' => '当前阿里云账号的成员账号UID。',
                      'type' => 'string',
                      'example' => '119384235299****',
                    ),
                    'ResourceList' => 
                    array (
                      'description' => '漏洞资产列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '漏洞资产。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ResourceType' => 
                          array (
                            'description' => '漏洞资产类型。取值：

- **SLB**
- **EIP**
- **ECS**',
                            'type' => 'string',
                            'example' => 'EIP',
                          ),
                          'Eip' => 
                          array (
                            'description' => '实例的EIP。',
                            'type' => 'string',
                            'example' => '203.107.XX.XX',
                          ),
                          'InternetIp' => 
                          array (
                            'description' => '实例的公网IP。',
                            'type' => 'string',
                            'example' => '47.96.XX.XX',
                          ),
                          'VulnStatus' => 
                          array (
                            'description' => '漏洞防护状态。取值：

- **partProtected**：部分防护中
- **protected**：防护中
- **unProtected**：未防护',
                            'type' => 'string',
                            'example' => 'protected',
                          ),
                          'ResourceId' => 
                          array (
                            'description' => '实例ID。',
                            'type' => 'string',
                            'example' => 'vfw-m5e7dbc4y****',
                          ),
                          'ResourceName' => 
                          array (
                            'description' => '实例的名称。',
                            'type' => 'string',
                            'example' => 'ECS',
                          ),
                          'IntranetIp' => 
                          array (
                            'description' => '实例的私网IP。',
                            'type' => 'string',
                            'example' => '192.168.XX.XX',
                          ),
                          'RegionId' => 
                          array (
                            'description' => '云防火墙所在的地域ID。
> 关于云防火墙支持地域的详细信息，请参见[支持的地域](~~195657~~)。',
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
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D355C631-1537-59C5-A56E-F6C5037B99E5\\",\\n  \\"TotalCount\\": 5,\\n  \\"ZeroResourceCount\\": 1,\\n  \\"VulnList\\": [\\n    {\\n      \\"VulnName\\": \\"fastjson <= 1.2.80 反序列化任意代码执行漏洞\\",\\n      \\"AttackType\\": 13,\\n      \\"NeedRuleClass\\": 1,\\n      \\"VulnType\\": \\"emg\\",\\n      \\"VulnKey\\": \\"dedecms-archive.helper.php-vul\\",\\n      \\"VulnLevel\\": \\"high\\",\\n      \\"NeedOpenBasicRule\\": false,\\n      \\"CveId\\": \\"12112131123, 1231123112\\",\\n      \\"FirstTime\\": 1608687364,\\n      \\"BasicRuleIds\\": \\"12,12\\",\\n      \\"LastTime\\": 1608687364,\\n      \\"NeedOpenVirtualPatcheUuids\\": \\"UUID-1231231234\\",\\n      \\"NeedOpenBasicRuleUuids\\": \\"UUID-1231231\\",\\n      \\"NeedOpenVirtualPatche\\": true,\\n      \\"VirtualPatcheIds\\": \\"13,13\\",\\n      \\"HighlightTag\\": 0,\\n      \\"NeedOpenRunMode\\": true,\\n      \\"VulnStatus\\": \\"protected\\",\\n      \\"AttackCnt\\": 0,\\n      \\"ResourceCnt\\": 0,\\n      \\"MemberUid\\": \\"119384235299****\\",\\n      \\"ResourceList\\": [\\n        {\\n          \\"ResourceType\\": \\"EIP\\",\\n          \\"Eip\\": \\"203.107.XX.XX\\",\\n          \\"InternetIp\\": \\"47.96.XX.XX\\",\\n          \\"VulnStatus\\": \\"protected\\",\\n          \\"ResourceId\\": \\"vfw-m5e7dbc4y****\\",\\n          \\"ResourceName\\": \\"ECS\\",\\n          \\"IntranetIp\\": \\"192.168.XX.XX\\",\\n          \\"RegionId\\": \\"cn-beijing\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeVulnerabilityProtectedListResponse>\\n    <RequestId>D355C631-1537-59C5-A56E-F6C5037B99E5</RequestId>\\n    <TotalCount>5</TotalCount>\\n    <ZeroResourceCount>1</ZeroResourceCount>\\n    <VulnList>\\n        <VulnName>fastjson &lt;= 1.2.80 反序列化任意代码执行漏洞</VulnName>\\n        <AttackType>13</AttackType>\\n        <NeedRuleClass>1</NeedRuleClass>\\n        <VulnType>emg</VulnType>\\n        <VulnKey>dedecms-archive.helper.php-vul</VulnKey>\\n        <VulnLevel>high</VulnLevel>\\n        <NeedOpenBasicRule>false</NeedOpenBasicRule>\\n        <CveId>12112131123, 1231123112</CveId>\\n        <FirstTime>1608687364</FirstTime>\\n        <BasicRuleIds>12,12</BasicRuleIds>\\n        <LastTime>1608687364</LastTime>\\n        <NeedOpenVirtualPatcheUuids>UUID-1231231234</NeedOpenVirtualPatcheUuids>\\n        <NeedOpenBasicRuleUuids>UUID-1231231</NeedOpenBasicRuleUuids>\\n        <NeedOpenVirtualPatche>true</NeedOpenVirtualPatche>\\n        <VirtualPatcheIds>13,13</VirtualPatcheIds>\\n        <HighlightTag>0</HighlightTag>\\n        <NeedOpenRunMode>true</NeedOpenRunMode>\\n        <VulnStatus>protected</VulnStatus>\\n        <AttackCnt>0</AttackCnt>\\n        <ResourceCnt>0</ResourceCnt>\\n        <ResourceList>\\n            <ResourceType>EIP</ResourceType>\\n            <Eip>203.107.XX.XX</Eip>\\n            <InternetIp>47.96.XX.XX</InternetIp>\\n            <VulnStatus>protected</VulnStatus>\\n            <ResourceId>vfw-m5e7dbc4y****</ResourceId>\\n            <ResourceName>ECS</ResourceName>\\n            <IntranetIp>192.168.XX.XX</IntranetIp>\\n            <RegionId>cn-beijing</RegionId>\\n        </ResourceList>\\n    </VulnList>\\n</DescribeVulnerabilityProtectedListResponse>","errorExample":""}]',
      'title' => '获取漏洞防护列表',
    ),
    'DescribeRiskEventGroup' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：
- **zh**（默认）：表示中文。
- **en**：表示英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：
- **zh**（默认）：表示中文。
- **en**：表示英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置查询开始时间。使用秒级时间戳格式表示。',
            'type' => 'string',
            'required' => true,
            'example' => '1534408189',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置查询结束时间。使用秒级时间戳格式表示。',
            'type' => 'string',
            'required' => true,
            'example' => '1534408267',
          ),
        ),
        4 => 
        array (
          'name' => 'Direction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '入侵防御事件的流量的方向。取值：
- **in**：表示进方向。
- **out**：表示出方向。

>不设置该参数表示查询所有流量方向。',
            'type' => 'string',
            'required' => false,
            'example' => 'in',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置分页查询每页包含多少条结果。

默认值为**6**，表示每页包含6条结果。最大值为**10**。',
            'type' => 'string',
            'required' => false,
            'example' => '6',
          ),
        ),
        6 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置分页查询返回第几页数据。
默认值为**1**，表示返回第1页数据。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'DataType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '风险事件类型。  
唯一取值：**session**，表示入侵防御事件。
',
            'type' => 'string',
            'required' => true,
            'example' => 'session',
          ),
        ),
        8 => 
        array (
          'name' => 'RuleSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '入侵防御事件的检测规则来源。取值：
- **1**：表示基础防御。
- **2**：表示虚拟补丁。
- **4**：表示威胁情报。

> 不设置该参数表示查询所有规则来源。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'RuleResult',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云防火墙的防御状态。取值：
- **1**：表示告警。
- **2**：表示拦截。

> 不设置该参数表示查询所有防御状态。
',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        10 => 
        array (
          'name' => 'SrcIP',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的源IP。设置该参数表示查询包含了这条源IP的入侵防御事件。',
            'type' => 'string',
            'required' => false,
            'example' => '192.0.XX.XX',
          ),
        ),
        11 => 
        array (
          'name' => 'DstIP',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的目的IP。设置该参数表示查询包含了这条目的IP的入侵防御事件。',
            'type' => 'string',
            'required' => false,
            'example' => '192.0.XX.XX',
          ),
        ),
        12 => 
        array (
          'name' => 'VulLevel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '入侵防御事件的安全等级。取值：
- **1**：表示低危。
- **2**：表示中危。
- **3**：表示高危。

> 不设置该参数表示查询所有安全等级。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        13 => 
        array (
          'name' => 'FirewallType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云防火墙类型。取值：
- **VpcFirewall**：表示VPC边界防火墙。
- **InternetFirewall**（默认）：表示互联网边界防火墙。',
            'type' => 'string',
            'required' => false,
            'example' => 'InternetFirewall',
          ),
        ),
        14 => 
        array (
          'name' => 'SrcNetworkInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '源VPC实例ID。
> 仅在FirewallType为VpcFirewall时，需要设置该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-uf6e9a9zyokj2ywuo****',
          ),
        ),
        15 => 
        array (
          'name' => 'DstNetworkInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目的VPC实例ID。
> 仅在FirewallType为VpcFirewall时，需要设置该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-uf6e9a9zyokj2ywuo****',
          ),
        ),
        16 => 
        array (
          'name' => 'AttackType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '入侵防御事件的攻击类型。取值：
- **1**：表示异常连接。
- **2**：表示命令执行。
- **3**：表示暴力破解。
- **4**：表示扫描。
- **5**：表示其它。
- **6**：表示信息泄露。
- **7**：表示Dos攻击。
- **8**：表示溢出攻击。
- **9**：表示Web攻击。
- **10**：表示木马后门。
- **11**：表示病毒蠕虫。
- **12**：表示挖矿行为。
- **13**：表示反弹Shell。

>不设置该参数表示查询全部攻击类型。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        17 => 
        array (
          'name' => 'NoLocation',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否查询IP地址位置信息。
- **true**： 表示不查询IP地理位置信息。
- **false**（默认）：表示查询IP地理位置信息。
',
            'type' => 'string',
            'required' => false,
            'example' => 'false',
          ),
        ),
        18 => 
        array (
          'name' => 'AttackApp',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '被攻击应用的名称的列表，使用`["AttackApp1","AttackApp2"]`格式表示。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '被攻击应用的名称的列表，使用`["AttackApp1","AttackApp2"]`格式表示。',
              'type' => 'string',
              'required' => false,
              'example' => 'Redis',
            ),
            'required' => false,
            'example' => '["MySql","DNS"]',
            'maxItems' => 100,
          ),
        ),
        19 => 
        array (
          'name' => 'BuyVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '购买版本。取值：
- **2**：高级版。
- **3**：企业版。
- **4**：旗舰版。
- **10**：按量付费版。
',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
          ),
        ),
        20 => 
        array (
          'name' => 'Sort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '根据指定字段排序。取值：

- **VulLevel**（默认）：根据风险等级排序。

- **LastTime**：根据最近发生时间排序。',
            'type' => 'string',
            'required' => false,
            'example' => 'LastTime',
          ),
        ),
        21 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序方式。取值：

- **asc**：升序。

-  **desc**（默认）：降序。',
            'type' => 'string',
            'required' => false,
            'example' => 'desc',
          ),
        ),
        22 => 
        array (
          'name' => 'EventName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '入侵防御事件名称。',
            'type' => 'string',
            'required' => false,
            'example' => '木马后门通信',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '入侵防御事件的详细数据。',
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '风险事件的总数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'B14757D0-4640-4B44-AC67-7F558FE7E6EF',
              ),
              'DataList' => 
              array (
                'description' => '返回数据列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回数据列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Direction' => 
                    array (
                      'description' => '该入侵防御事件的流量方向。取值：
- **in**：表示进方向。
- **out**：表示出方向。',
                      'type' => 'string',
                      'example' => 'in',
                    ),
                    'EventName' => 
                    array (
                      'description' => '入侵防御事件名称。',
                      'type' => 'string',
                      'example' => 'Web目录穿越攻击',
                    ),
                    'DstIP' => 
                    array (
                      'description' => '查询到的目的IP。表示入侵防御事件中包含了这条目的IP。',
                      'type' => 'string',
                      'example' => '192.0.XX.XX',
                    ),
                    'AttackType' => 
                    array (
                      'description' => '该入侵防御事件的攻击类型。取值：
- **1**：表示异常连接。
- **2**：表示命令执行。
- **3**：表示暴力破解。
- **4**：表示扫描。
- **5**：表示其它。
- **6**：表示信息泄露。
- **7**：表示Dos攻击。
- **8**：表示溢出攻击。
- **9**：表示Web攻击。
- **10**：表示木马后门。
- **11**：表示病毒蠕虫。
- **12**：表示挖矿行为。
- **13**：表示反弹Shell。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'Tag' => 
                    array (
                      'description' => '重保情报标签。',
                      'type' => 'string',
                      'example' => '重保情报',
                    ),
                    'RuleId' => 
                    array (
                      'description' => '本次入侵防御事件的防护规则ID。',
                      'type' => 'string',
                      'example' => '1000****',
                    ),
                    'EventId' => 
                    array (
                      'description' => '入侵防御事件ID。',
                      'type' => 'string',
                      'example' => '2b58efae-4c4b-4d96-9544-a586fb1f****',
                    ),
                    'ResourceType' => 
                    array (
                      'description' => '该入侵防御事件的公网IP类型。取值：
 -  **EIP**：表示弹性公网IP。
 - **EcsPublicIP**：表示ECS公网IP。
 - **EcsEIP**：表示ECS EIP。
 - **NatPublicIP**：表示NAT公网IP。
 - **NatEIP**：表示NAT EIP。
 - **SlbPublicIp**：表示SLB 公网IP。',
                      'type' => 'string',
                      'example' => 'EcsPublicIP',
                    ),
                    'FirstEventTime' => 
                    array (
                      'description' => '入侵事件首次发生时间。使用秒级时间戳格式表示。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1534408189',
                    ),
                    'Description' => 
                    array (
                      'description' => '该入侵防御事件的描述。',
                      'type' => 'string',
                      'example' => '检测到HTTP请求的Web访问中使用了目录穿越攻击。',
                    ),
                    'EventCount' => 
                    array (
                      'description' => '入侵防御事件数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '100',
                    ),
                    'VulLevel' => 
                    array (
                      'description' => '该入侵防御事件的安全等级。取值：
- **1**：表示低危。
- **2**：表示中危。
- **3**：表示高危。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'AttackApp' => 
                    array (
                      'description' => '被攻击应用的名称。',
                      'type' => 'string',
                      'example' => 'MySql',
                    ),
                    'RuleSource' => 
                    array (
                      'description' => '本次入侵防御事件的检测规则来源。取值：
- **1**：表示基础防御。
- **2**：表示虚拟补丁。
- **4**：表示威胁情报。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'RuleResult' => 
                    array (
                      'description' => '防御状态。取值：
- **1**：表示告警。
- **2**：表示拦截。
',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'SrcIP' => 
                    array (
                      'description' => '查询到的源IP。表示入侵防御事件中包含了这条源IP。',
                      'type' => 'string',
                      'example' => '192.0.XX.XX',
                    ),
                    'LastEventTime' => 
                    array (
                      'description' => '入侵防御事件上次发生的时间。使用秒级时间戳格式表示。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1534408267',
                    ),
                    'ResourcePrivateIPList' => 
                    array (
                      'description' => '该入侵防御事件的私网IP信息，以**RegionNo**、**ResourceInstanceId**、**ResourceInstanceName**和**ResourcePrivateIP**的数组形式返回该IP信息。  
其中，**RegionNo**表示该IP所属的地域ID，**ResourceInstanceId**表示该IP所属的实例ID，**ResourceInstanceName**表示该IP所属的实例名，**ResourcePrivateIP**表示该IP。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '该入侵防御事件的私网IP信息，以**RegionNo**、**ResourceInstanceId**、**ResourceInstanceName**和**ResourcePrivateIP**的数组形式返回该IP信息。  
其中，**RegionNo**表示该IP所属的地域ID，**ResourceInstanceId**表示该IP所属的实例ID，**ResourceInstanceName**表示该IP所属的实例名，**ResourcePrivateIP**表示该IP。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ResourceInstanceName' => 
                          array (
                            'description' => '实例名。',
                            'type' => 'string',
                            'example' => 'LD-shenzhen-zy****',
                          ),
                          'ResourcePrivateIP' => 
                          array (
                            'description' => '私网IP。',
                            'type' => 'string',
                            'example' => '10.255.XX.XX',
                          ),
                          'ResourceInstanceId' => 
                          array (
                            'description' => '实例ID。',
                            'type' => 'string',
                            'example' => 'i-wz92jf4scg2zb74p****',
                          ),
                          'RegionNo' => 
                          array (
                            'description' => '地域ID。表示私网IP所属的地域ID。',
                            'type' => 'string',
                            'example' => 'cn-hangzhou',
                          ),
                        ),
                      ),
                    ),
                    'SrcPrivateIPList' => 
                    array (
                      'description' => '入侵防御事件的源私网IP列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '入侵防御事件的源私网IP列表。
>只有出方向会返回该参数的值。',
                        'type' => 'string',
                        'example' => '["192.168.XX.XX","192.168.XX.XX"]',
                      ),
                    ),
                    'VpcSrcInfo' => 
                    array (
                      'description' => '该入侵防御事件的源VPC信息，该结构体包含**EcsInstanceId**、**EcsInstanceName**、**NetworkInstanceId**、**NetworkInstanceName**和**RegionNo**参数。  
其中，**EcsInstanceId**表示该VPC中的ECS实例ID，**EcsInstanceName**表示该VPC中的ECS实例名，**NetworkInstanceId**表示该VPC实例ID，**NetworkInstanceName**表示该VPC实例名，**RegionNo**表示该VPC实例所属的地域ID。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'EcsInstanceName' => 
                        array (
                          'description' => 'ECS实例名。',
                          'type' => 'string',
                          'example' => 'LD-shenzhen-zy****',
                        ),
                        'NetworkInstanceName' => 
                        array (
                          'description' => 'VPC实例名。',
                          'type' => 'string',
                          'example' => 'VPC-SH-TX****',
                        ),
                        'NetworkInstanceId' => 
                        array (
                          'description' => 'VPC实例ID。',
                          'type' => 'string',
                          'example' => 'vpc-uf6e9a9zyokj2ywuo****',
                        ),
                        'EcsInstanceId' => 
                        array (
                          'description' => 'ECS实例ID。',
                          'type' => 'string',
                          'example' => 'i-wz92jf4scg2zb74p****',
                        ),
                        'RegionNo' => 
                        array (
                          'description' => '地域ID。表示源VPC实例所属的地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                      ),
                    ),
                    'VpcDstInfo' => 
                    array (
                      'description' => '该入侵防御事件的目的VPC信息，该结构体包含**EcsInstanceId**、**EcsInstanceName**、**NetworkInstanceId**、**NetworkInstanceName**和**RegionNo**参数。  
其中，**EcsInstanceId**表示该VPC中的ECS实例ID，**EcsInstanceName**表示该VPC中的ECS实例名，**NetworkInstanceId**表示该VPC实例ID，**NetworkInstanceName**表示该VPC实例名，**RegionNo**表示该VPC实例所属的地域ID。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'EcsInstanceName' => 
                        array (
                          'description' => 'ECS实例名。',
                          'type' => 'string',
                          'example' => 'LD-shenzhen-zy****',
                        ),
                        'NetworkInstanceName' => 
                        array (
                          'description' => 'VPC实例名。',
                          'type' => 'string',
                          'example' => 'VPC-SH-TX****',
                        ),
                        'NetworkInstanceId' => 
                        array (
                          'description' => 'VPC实例ID。',
                          'type' => 'string',
                          'example' => 'vpc-uf6e9a9zyokj2ywuo****',
                        ),
                        'EcsInstanceId' => 
                        array (
                          'description' => 'ECS实例ID。',
                          'type' => 'string',
                          'example' => 'i-wz92jf4scg2zb74p****',
                        ),
                        'RegionNo' => 
                        array (
                          'description' => '地域ID。表示目的VPC实例所属的地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                      ),
                    ),
                    'IPLocationInfo' => 
                    array (
                      'description' => 'IP地理位置信息，该结构体包含**CityId**、**CityName**、**CountryId**和**CountryName**参数。  
其中，**CityId**表示该IP所属的城市ID，**CityName**表示该IP所属的城市名，**CountryId**表示该IP所属的国家ID，**CountryName**表示该IP所属的国家名。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CityId' => 
                        array (
                          'description' => '城市ID。',
                          'type' => 'string',
                          'example' => '510100',
                        ),
                        'CountryName' => 
                        array (
                          'description' => '国家名。',
                          'type' => 'string',
                          'example' => '中国',
                        ),
                        'CityName' => 
                        array (
                          'description' => '城市名。',
                          'type' => 'string',
                          'example' => '四川省成都',
                        ),
                        'CountryId' => 
                        array (
                          'description' => '国家ID。',
                          'type' => 'string',
                          'example' => 'CN',
                        ),
                      ),
                    ),
                    'SrcIPTag' => 
                    array (
                      'description' => '源IP标签，用于标识是否为云产品回源IP。',
                      'type' => 'string',
                      'example' => 'WAF Back-to-origin Address',
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
            'errorCode' => 'ErrorAliUid',
            'errorMessage' => 'The aliuid is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 20,\\n  \\"RequestId\\": \\"B14757D0-4640-4B44-AC67-7F558FE7E6EF\\",\\n  \\"DataList\\": [\\n    {\\n      \\"Direction\\": \\"in\\",\\n      \\"EventName\\": \\"Web目录穿越攻击\\",\\n      \\"DstIP\\": \\"192.0.XX.XX\\",\\n      \\"AttackType\\": 1,\\n      \\"Tag\\": \\"重保情报\\",\\n      \\"RuleId\\": \\"1000****\\",\\n      \\"EventId\\": \\"2b58efae-4c4b-4d96-9544-a586fb1f****\\",\\n      \\"ResourceType\\": \\"EcsPublicIP\\",\\n      \\"FirstEventTime\\": 1534408189,\\n      \\"Description\\": \\"检测到HTTP请求的Web访问中使用了目录穿越攻击。\\",\\n      \\"EventCount\\": 100,\\n      \\"VulLevel\\": 1,\\n      \\"AttackApp\\": \\"MySql\\",\\n      \\"RuleSource\\": 1,\\n      \\"RuleResult\\": 2,\\n      \\"SrcIP\\": \\"192.0.XX.XX\\",\\n      \\"LastEventTime\\": 1534408267,\\n      \\"ResourcePrivateIPList\\": [\\n        {\\n          \\"ResourceInstanceName\\": \\"LD-shenzhen-zy****\\",\\n          \\"ResourcePrivateIP\\": \\"10.255.XX.XX\\",\\n          \\"ResourceInstanceId\\": \\"i-wz92jf4scg2zb74p****\\",\\n          \\"RegionNo\\": \\"cn-hangzhou\\"\\n        }\\n      ],\\n      \\"SrcPrivateIPList\\": [\\n        \\"[\\\\\\"192.168.XX.XX\\\\\\",\\\\\\"192.168.XX.XX\\\\\\"]\\"\\n      ],\\n      \\"VpcSrcInfo\\": {\\n        \\"EcsInstanceName\\": \\"LD-shenzhen-zy****\\",\\n        \\"NetworkInstanceName\\": \\"VPC-SH-TX****\\",\\n        \\"NetworkInstanceId\\": \\"vpc-uf6e9a9zyokj2ywuo****\\",\\n        \\"EcsInstanceId\\": \\"i-wz92jf4scg2zb74p****\\",\\n        \\"RegionNo\\": \\"cn-hangzhou\\"\\n      },\\n      \\"VpcDstInfo\\": {\\n        \\"EcsInstanceName\\": \\"LD-shenzhen-zy****\\",\\n        \\"NetworkInstanceName\\": \\"VPC-SH-TX****\\",\\n        \\"NetworkInstanceId\\": \\"vpc-uf6e9a9zyokj2ywuo****\\",\\n        \\"EcsInstanceId\\": \\"i-wz92jf4scg2zb74p****\\",\\n        \\"RegionNo\\": \\"cn-hangzhou\\"\\n      },\\n      \\"IPLocationInfo\\": {\\n        \\"CityId\\": \\"510100\\",\\n        \\"CountryName\\": \\"中国\\",\\n        \\"CityName\\": \\"四川省成都\\",\\n        \\"CountryId\\": \\"CN\\"\\n      },\\n      \\"SrcIPTag\\": \\"WAF Back-to-origin Address\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeRiskEventGroupResponse>\\n    <TotalCount>20</TotalCount>\\n    <RequestId>B14757D0-4640-4B44-AC67-7F558FE7E6EF</RequestId>\\n    <DataList>\\n        <Direction>in</Direction>\\n        <EventName>WEB目录穿越攻击</EventName>\\n        <DstIP>192.0.XX.XX</DstIP>\\n        <AttackType>1</AttackType>\\n        <Tag>重保情报</Tag>\\n        <RuleId>1000****</RuleId>\\n        <EventId>2b58efae-4c4b-4d96-9544-a586fb1f****</EventId>\\n        <ResourceType>EcsPublicIP</ResourceType>\\n        <FirstEventTime>1534408189</FirstEventTime>\\n        <Description>检测到HTTP请求的WEB访问中使用了目录穿越攻击。</Description>\\n        <EventCount>100</EventCount>\\n        <VulLevel>1</VulLevel>\\n        <AttackApp>MySql</AttackApp>\\n        <RuleSource>1</RuleSource>\\n        <RuleResult>2</RuleResult>\\n        <SrcIP>192.0.XX.XX</SrcIP>\\n        <LastEventTime>1534408267</LastEventTime>\\n        <ResourcePrivateIPList>\\n            <ResourceInstanceName>LD-shenzhen-zy****</ResourceInstanceName>\\n            <ResourcePrivateIP>10.255.XX.XX</ResourcePrivateIP>\\n            <ResourceInstanceId>i-wz92jf4scg2zb74p****</ResourceInstanceId>\\n            <RegionNo>cn-hangzhou</RegionNo>\\n        </ResourcePrivateIPList>\\n        <SrcPrivateIPList>[\\"192.168.XX.XX\\",\\"192.168.XX.XX\\"]</SrcPrivateIPList>\\n        <VpcSrcInfo>\\n            <EcsInstanceName>LD-shenzhen-zy****</EcsInstanceName>\\n            <NetworkInstanceName>VPC-SH-TX****</NetworkInstanceName>\\n            <NetworkInstanceId>vpc-uf6e9a9zyokj2ywuo****</NetworkInstanceId>\\n            <EcsInstanceId>i-wz92jf4scg2zb74p****</EcsInstanceId>\\n            <RegionNo>cn-hangzhou</RegionNo>\\n        </VpcSrcInfo>\\n        <VpcDstInfo>\\n            <EcsInstanceName>LD-shenzhen-zy****</EcsInstanceName>\\n            <NetworkInstanceName>VPC-SH-TX****</NetworkInstanceName>\\n            <NetworkInstanceId>vpc-uf6e9a9zyokj2ywuo****</NetworkInstanceId>\\n            <EcsInstanceId>i-wz92jf4scg2zb74p****</EcsInstanceId>\\n            <RegionNo>cn-hangzhou</RegionNo>\\n        </VpcDstInfo>\\n        <IPLocationInfo>\\n            <CityId>510100</CityId>\\n            <CountryName>中国</CountryName>\\n            <CityName>四川省成都</CityName>\\n            <CountryId>CN</CountryId>\\n        </IPLocationInfo>\\n    </DataList>\\n</DescribeRiskEventGroupResponse>","errorExample":""}]',
      'title' => '获取入侵防御事件的详细数据',
      'summary' => '获取入侵防御事件的详细数据。',
      'description' => '本接口用于查询和下载入侵防御详细数据，建议一次查询5~10条。为避免查询超时，如果无需返回IP地理位置信息，请设置参数NoLocation为true。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~94763~~)。 
调用API的请求格式，请参见本文**示例**中的请求示例。 ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeUserAssetIPTrafficInfo' => 
    array (
      'summary' => '查询用户指定资产的流量信息。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '语言',
            'description' => '接收消息的语言类型。取值：

- **zh**（默认）：中文。
- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
            'default' => 'zh',
            'enum' => 
            array (
              0 => 'zh',
              1 => 'en',
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'AssetIP',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资产IP',
            'description' => '目标资产的IP。',
            'type' => 'string',
            'required' => true,
            'example' => '192.0.XX.XX',
          ),
        ),
        2 => 
        array (
          'name' => 'TrafficTime',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '时间',
            'description' => '设置查询时间。使用秒级时间戳格式表示。',
            'type' => 'string',
            'required' => true,
            'example' => '1656923760',
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
                'description' => '本次调用请求的ID。',
                'type' => 'string',
                'example' => 'F0F82705-CFC7-5F83-86C8-A063892F****',
              ),
              'StartTime' => 
              array (
                'title' => '开始时间',
                'description' => '查询开始时间。使用秒级时间戳格式表示。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1656837360',
              ),
              'EndTime' => 
              array (
                'title' => '结束时间',
                'description' => '查询结束时间。使用秒级时间戳格式表示。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1656923760',
              ),
              'InBps' => 
              array (
                'description' => '入方向的网络吞吐率（每秒发送多少字节）。单位：bps。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '4520',
              ),
              'OutBps' => 
              array (
                'description' => '出方向的网络吞吐率（每秒发送多少字节）。单位：bps。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '4180',
              ),
              'InPps' => 
              array (
                'description' => '入方向的网络吞吐率（每秒发送多少个分组数据包）。单位：pps。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '233',
              ),
              'OutPps' => 
              array (
                'description' => '出方向的网络吞吐率（每秒发送多少个分组数据包）。单位：pps。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '224',
              ),
              'SessionCount' => 
              array (
                'description' => '请求次数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '50',
              ),
              'NewConn' => 
              array (
                'description' => '新建连接数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '43',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F0F82705-CFC7-5F83-86C8-A063892F****\\",\\n  \\"StartTime\\": 1656837360,\\n  \\"EndTime\\": 1656923760,\\n  \\"InBps\\": 4520,\\n  \\"OutBps\\": 4180,\\n  \\"InPps\\": 233,\\n  \\"OutPps\\": 224,\\n  \\"SessionCount\\": 50,\\n  \\"NewConn\\": 43\\n}","errorExample":""},{"type":"xml","example":"<DescribeUserAssetIPTrafficInfoResponse>\\n    <RequestId>F0F82705-CFC7-5F83-86C8-A063892F****</RequestId>\\n    <StartTime>1656837360</StartTime>\\n    <EndTime>1656923760</EndTime>\\n    <InBps>4520</InBps>\\n    <OutBps>4180</OutBps>\\n    <InPps>233</InPps>\\n    <OutPps>224</OutPps>\\n    <SessionCount>50</SessionCount>\\n    <NewConn>43</NewConn>\\n</DescribeUserAssetIPTrafficInfoResponse>","errorExample":""}]',
      'title' => '查询用户指定资产的流量信息',
    ),
    'DescribeInvadeEventList' => 
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
          'name' => 'SourceIp',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '源IP',
            'description' => '访问者源IP地址。',
            'type' => 'string',
            'deprecated' => true,
            'required' => false,
            'example' => '192.0.XX.XX',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '语言',
            'description' => '接收消息的语言类型。取值：

- **zh**（默认）：中文。
- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
            'default' => 'zh',
            'enum' => 
            array (
              0 => 'zh',
              1 => 'en',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '开始时间',
            'description' => '设置查询开始时间。使用秒级时间戳格式表示。不填表示以最近30天开始查询。',
            'type' => 'string',
            'required' => false,
            'example' => '1656750960',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '结束时间',
            'description' => '设置查询结束时间。使用秒级时间戳格式表示。不填表示以当前时间结束。',
            'type' => 'string',
            'required' => false,
            'example' => '1656837360',
          ),
        ),
        4 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '当前页',
            'description' => '设置分页查询返回第几页数据。

默认值为1，表示返回第1页数据。',
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
            'title' => '每页多少条',
            'description' => '设置分页查询每页包含多少条结果。

默认值为6，表示每页包含6条结果。最大值为10。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'AssetsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'ins_1321_asedb_****',
          ),
        ),
        7 => 
        array (
          'name' => 'AssetsInstanceName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例名称',
            'description' => '实例名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'ECS_test',
          ),
        ),
        8 => 
        array (
          'name' => 'IsIgnore',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否忽略',
            'description' => '是否已忽略该失陷感知。取值：

- **true**：已忽略。

- **false**：未忽略。',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
          ),
        ),
        9 => 
        array (
          'name' => 'AssetsIP',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资产IP',
            'description' => '受影响的资产IP。',
            'type' => 'string',
            'required' => false,
            'example' => '10.0.XX.XX',
          ),
        ),
        10 => 
        array (
          'name' => 'EventKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '事件key',
            'description' => '失陷感知事件的ID。',
            'type' => 'string',
            'required' => false,
            'example' => '69d189e2-ec17-4676-a2fe-02969234****',
          ),
        ),
        11 => 
        array (
          'name' => 'EventName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '事件名称',
            'description' => '失陷感知事件的名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'event_test',
          ),
        ),
        12 => 
        array (
          'name' => 'EventUuid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '事件UUID',
            'description' => '失陷感知事件的UUID。',
            'type' => 'string',
            'required' => false,
            'example' => 'fadd-dfdd-****',
          ),
        ),
        13 => 
        array (
          'name' => 'MemberUid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '成员账号UID',
            'description' => '成员账号UID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '135809047715****',
          ),
        ),
        14 => 
        array (
          'name' => 'ProcessStatusList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '处理状态列表',
            'description' => '处理状态列表。',
            'type' => 'array',
            'items' => 
            array (
              'title' => '处理状态',
              'description' => '失陷感知事件处理状态。取值：

- **0**：未处理。
- **20**：已解决。
',
              'type' => 'integer',
              'format' => 'int32',
              'required' => false,
              'example' => '0',
              'default' => '0',
              'enum' => 
              array (
              ),
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        15 => 
        array (
          'name' => 'RiskLevel',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '风险等级',
            'description' => '风险评估等级。',
            'type' => 'array',
            'items' => 
            array (
              'title' => '风险等级值',
              'description' => '风险评估等级。取值：


- **1**：低危。
- **2**：中危。
- **3**：高危。',
              'type' => 'integer',
              'format' => 'int32',
              'required' => false,
              'example' => '3',
              'enum' => 
              array (
              ),
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
              'LowLevelPercent' => 
              array (
                'title' => '低风险等级比例',
                'description' => '低风险等级比例。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID。',
                'type' => 'string',
                'example' => 'F0F82705-CFC7-5F83-86C8-A063892F****',
              ),
              'MiddleLevelPercent' => 
              array (
                'title' => '中风险等级比例',
                'description' => '中风险等级比例。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '40',
              ),
              'HighLevelPercent' => 
              array (
                'title' => '高风险等级比例',
                'description' => '高风险等级比例。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '40',
              ),
              'PageInfo' => 
              array (
                'title' => '分页信息',
                'description' => '分页信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'CurrentPage' => 
                  array (
                    'title' => '当前页',
                    'description' => '分页查询时，显示的当前页的页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'title' => '每页大小',
                    'description' => '分页查询时，显示的每页数据的最大条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'TotalCount' => 
                  array (
                    'title' => '总数',
                    'description' => '失陷感知事件的总数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '40',
                  ),
                ),
              ),
              'EventList' => 
              array (
                'title' => '事件列表',
                'description' => '失陷感知事件列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RiskLevel' => 
                    array (
                      'title' => '风险等级',
                      'description' => '风险评估等级。取值：


- **1**：低危。
- **2**：中危。
- **3**：高危。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                      'enum' => 
                      array (
                      ),
                    ),
                    'EventName' => 
                    array (
                      'title' => '事件名称',
                      'description' => '失陷感知事件的名称。',
                      'type' => 'string',
                      'example' => 'event_test',
                    ),
                    'EventKey' => 
                    array (
                      'title' => 'CVE编号',
                      'description' => '失陷感知事件的ID。',
                      'type' => 'string',
                      'example' => '69d189e2-ec17-4676-a2fe-02969234****',
                    ),
                    'EventUuid' => 
                    array (
                      'title' => '事件UUID',
                      'description' => '失陷感知事件的UUID。',
                      'type' => 'string',
                      'example' => 'fadd-dfdd-****',
                    ),
                    'MemberUid' => 
                    array (
                      'title' => '成员账号UID',
                      'description' => '成员账号UID。',
                      'type' => 'string',
                      'example' => '135809047715****',
                    ),
                    'AssetsType' => 
                    array (
                      'title' => '资产类型',
                      'description' => '受影响的资产类型。取值：

- **BastionHostIP**：堡垒机出口IP。
- **BastionHostIngressIP**：堡垒机入口IP。
- **EcsEIP**：ECS EIP。
- **EcsPublicIP**：ECS公网IP。
- **EIP**：弹性公网IP。
- **EniEIP**：弹性网卡EIP。
- **NatEIP**：NAT EIP。
- **SlbEIP**：SLB EIP。
- **SlbPublicIP**：SLB公网IP。
- **NatPublicIP**：NAT公网IP。
- **HAVIP**：高可用虚拟IP。',
                      'type' => 'string',
                      'example' => 'EcsPublicIp',
                    ),
                    'FirstTime' => 
                    array (
                      'title' => '首次出现时间',
                      'description' => '失陷感知事件首次出现的时间。使用秒级时间戳格式表示。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1656750960',
                    ),
                    'EventSrc' => 
                    array (
                      'title' => '事件来源',
                      'description' => '失陷感知事件的来源。取值：

- **IPS**：入侵防御事件。

- **offline**：离线事件。',
                      'type' => 'string',
                      'example' => 'IPS',
                    ),
                    'PrivateIP' => 
                    array (
                      'title' => '私网IP',
                      'description' => '受影响资产的私网IP。',
                      'type' => 'string',
                      'example' => '192.168.XX.XX',
                    ),
                    'AssetsInstanceName' => 
                    array (
                      'title' => '资产名称',
                      'description' => '受影的响资产名称。',
                      'type' => 'string',
                      'example' => 'ECS_test',
                    ),
                    'LastTime' => 
                    array (
                      'title' => '最近一次时间',
                      'description' => '失陷感知事件最近一次出现的时间。使用秒级时间戳格式表示。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1656837360',
                    ),
                    'PublicIpType' => 
                    array (
                      'title' => '公开类型',
                      'description' => '受影响的资产类型。取值：

- **BastionHostIP**：堡垒机出口IP。
- **BastionHostIngressIP**：堡垒机入口IP。
- **EcsEIP**：ECS EIP。
- **EcsPublicIP**：ECS公网IP。
- **EIP**：弹性公网IP。
- **EniEIP**：弹性网卡EIP。
- **NatEIP**：NAT EIP。
- **SlbEIP**：SLB EIP。
- **SlbPublicIP**：SLB公网IP。
- **NatPublicIP**：NAT公网IP。
- **HAVIP**：高可用虚拟IP。',
                      'type' => 'string',
                      'example' => 'EcsPublicIp',
                    ),
                    'IsIgnore' => 
                    array (
                      'title' => '是否忽略',
                      'description' => '是否忽略失陷感知事件。取值：

- **true**：已忽略。

- **false**：未忽略。
',
                      'type' => 'boolean',
                      'example' => 'true',
                      'default' => 'false',
                    ),
                    'PublicIP' => 
                    array (
                      'title' => '公网IP',
                      'description' => '受影响资产的公网IP。',
                      'type' => 'string',
                      'example' => '198.51.XX.XX',
                    ),
                    'ProcessStatus' => 
                    array (
                      'title' => '处理状态',
                      'description' => '失陷感知事件的处理状态。取值：

- **0**：未处理。
- **20**：已解决。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '20',
                    ),
                    'AssetsInstanceId' => 
                    array (
                      'title' => '资产实例ID',
                      'description' => '受影响的资产实例ID。',
                      'type' => 'string',
                      'example' => 'i-ECS****',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"LowLevelPercent\\": 20,\\n  \\"RequestId\\": \\"F0F82705-CFC7-5F83-86C8-A063892F****\\",\\n  \\"MiddleLevelPercent\\": 40,\\n  \\"HighLevelPercent\\": 40,\\n  \\"PageInfo\\": {\\n    \\"CurrentPage\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"TotalCount\\": 40\\n  },\\n  \\"EventList\\": [\\n    {\\n      \\"RiskLevel\\": 1,\\n      \\"EventName\\": \\"event_test\\",\\n      \\"EventKey\\": \\"69d189e2-ec17-4676-a2fe-02969234****\\",\\n      \\"EventUuid\\": \\"fadd-dfdd-****\\",\\n      \\"MemberUid\\": \\"135809047715****\\",\\n      \\"AssetsType\\": \\"EcsPublicIp\\",\\n      \\"FirstTime\\": 1656750960,\\n      \\"EventSrc\\": \\"IPS\\",\\n      \\"PrivateIP\\": \\"192.168.XX.XX\\",\\n      \\"AssetsInstanceName\\": \\"ECS_test\\",\\n      \\"LastTime\\": 1656837360,\\n      \\"PublicIpType\\": \\"EcsPublicIp\\",\\n      \\"IsIgnore\\": true,\\n      \\"PublicIP\\": \\"198.51.XX.XX\\",\\n      \\"ProcessStatus\\": 20,\\n      \\"AssetsInstanceId\\": \\"i-ECS****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeInvadeEventListResponse>\\n    <LowLevelPercent>20</LowLevelPercent>\\n    <RequestId>F0F82705-CFC7-5F83-86C8-A063892F****</RequestId>\\n    <MiddleLevelPercent>40</MiddleLevelPercent>\\n    <HighLevelPercent>40</HighLevelPercent>\\n    <PageInfo>\\n        <CurrentPage>1</CurrentPage>\\n        <PageSize>10</PageSize>\\n        <TotalCount>40</TotalCount>\\n    </PageInfo>\\n    <EventList>\\n        <RiskLevel>1</RiskLevel>\\n        <EventName>event_test</EventName>\\n        <EventKey>69d189e2-ec17-4676-a2fe-02969234****</EventKey>\\n        <EventUuid>fadd-dfdd-****</EventUuid>\\n        <MemberUid>135809047715****</MemberUid>\\n        <AssetsType>EcsPublicIp</AssetsType>\\n        <FirstTime>1656750960</FirstTime>\\n        <EventSrc>IPS</EventSrc>\\n        <PrivateIP>192.168.XX.XX</PrivateIP>\\n        <AssetsInstanceName>ECS_test</AssetsInstanceName>\\n        <LastTime>1656837360</LastTime>\\n        <PublicIpType>EcsPublicIp</PublicIpType>\\n        <IsIgnore>true</IsIgnore>\\n        <PublicIP>198.51.XX.XX</PublicIP>\\n        <ProcessStatus>20</ProcessStatus>\\n        <AssetsInstanceId>i-ECS****</AssetsInstanceId>\\n    </EventList>\\n</DescribeInvadeEventListResponse>","errorExample":""}]',
      'title' => '查询云防火墙失陷感知事件的信息',
      'summary' => '查询云防火墙失陷感知事件的信息。',
    ),
    'DescribeOutgoingDestinationIP' => 
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '语言',
            'description' => '接收消息的语言类型。取值：

- **zh**（默认）：中文。
- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
            'default' => 'zh',
            'enum' => 
            array (
              0 => 'zh',
              1 => 'en',
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '开始时间,Unix timestamp, 精确到秒',
            'description' => '设置查询开始时间。使用秒级时间戳格式表示。',
            'type' => 'string',
            'required' => true,
            'example' => '1656837360',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '结束时间',
            'description' => '设置查询结束时间。使用秒级时间戳格式表示。',
            'type' => 'string',
            'required' => true,
            'example' => '1656923760',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '每页大小',
            'description' => '设置分页查询每页包含多少条结果。

默认值为6，表示每页包含6条结果。最大值为10。',
            'type' => 'string',
            'required' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '当前页',
            'description' => '设置分页查询返回第几页数据。

默认值为1，表示返回第1页数据。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'CategoryId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分类, 枚举值.
默认值: 空
可选值: 
All (全部分类)
RiskDomain (风险域名分类)
RiskIP (风险IP分类)
AliYun (云产品分类)
NotAliYun (非云产品分类)',
            'description' => '产品分类ID。默认值为空，取值：

- **All** ：全部分类
- **RiskDomain** ：风险域名分类
- **RiskIP** ：风险IP分类
- **AliYun** ：云产品分类
- **NotAliYun** ：非云产品分类',
            'type' => 'string',
            'required' => false,
            'example' => 'All',
          ),
        ),
        6 => 
        array (
          'name' => 'DstIP',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '目的IP',
            'description' => '主动外联域名的目的IP。',
            'type' => 'string',
            'required' => false,
            'example' => '10.0.XX.XX',
          ),
        ),
        7 => 
        array (
          'name' => 'PublicIP',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '公网IP',
            'description' => '外联ECS的公网IP。',
            'type' => 'string',
            'required' => false,
            'example' => '192.0.XX.XX',
          ),
        ),
        8 => 
        array (
          'name' => 'PrivateIP',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '私网IP',
            'description' => '外联ECS的私网IP。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.XX.XX',
          ),
        ),
        9 => 
        array (
          'name' => 'Port',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '端口号',
            'description' => '端口号。',
            'type' => 'string',
            'required' => false,
            'example' => '80',
          ),
        ),
        10 => 
        array (
          'name' => 'Sort',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '顺序, 枚举值, 可选:asc, desc',
            'description' => '按照指定的字段排序。取值：

- **SessionCount**（默认值）：请求次数。
- **TotalBytes**：总流量数。',
            'type' => 'string',
            'required' => false,
            'example' => 'SessionCount',
            'enum' => 
            array (
            ),
          ),
        ),
        11 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序字段, 枚举值.
默认值: SessionCount
可选值: InBytes, OutBytes,TotalBytes,SessionCount',
            'description' => '排序方式。取值：

- **asc**：升序。
- **desc**（默认）：降序。
',
            'type' => 'string',
            'required' => false,
            'example' => 'desc',
            'enum' => 
            array (
            ),
          ),
        ),
        12 => 
        array (
          'name' => 'TagIdNew',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '情报标签ID。取值：
- **AliYun**：阿里云产品
- **RiskDomain**：风险域名
- **RiskIP**：风险IP
- **TrustedDomain**：信誉网站
- **AliPay**：支付宝
- **DingDing**：钉钉
- **WeChat**：微信
- **QQ**：腾讯QQ
- **SecurityService**：安全服务
- **Microsoft**：微软
- **Amazon**：亚马逊
- **Pan**：网盘
- **Map**：地图
- **Code**：代码托管
- **SystemService**：系统服务
- **Taobao**：淘宝
- **Google**：谷歌
- **ThirdPartyService**：第三方平台服务
- **FirstFlow**：首次
- **Downloader**：恶意下载
- **Alexa Top1M**：热门网站
- **Miner**：矿池
- **Intelligence**：威胁情报
- **DDoS**：DDoS木马
- **Ransomware**：勒索软件
- **Spyware**：间谍软件
- **Rogue**：流氓软件
- **Botnet**：僵尸网络
- **Suspicious**：可疑网站
- **C&C**：远控
- **Gang**：团伙
- **CVE**：漏洞CVE
- **Backdoor**：木马后门
- **Phishing**：钓鱼网站
- **APT**：APT攻击
- **Supply Chain Attack**：供应链攻击
- **Malicious software**：恶意软件',
            'type' => 'string',
            'required' => false,
            'example' => 'AliYun',
          ),
        ),
        13 => 
        array (
          'name' => 'ApplicationName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略支持的应用类型。取值：
- **FTP**
- **HTTP**
- **HTTPS**
- **Memcache**
- **MongoDB**
- **MQTT**
- **MySQL**
- **RDP**
- **Redis**
- **SMTP**
- **SMTPS**
- **SSH**
- **SSL_No_Cert**
- **SSL**
- **VNC**

> 支持的应用类型取值与协议类型（Proto）取值存在依赖关系。Proto为TCP协议时，ApplicationNameList支持选择以上所有应用类型。当ApplicationNameList和ApplicationName同时传值时，以ApplicationNameList为准。
',
            'type' => 'string',
            'required' => false,
            'example' => 'FTP',
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
                'title' => '总数',
                'description' => '外联IP的总数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '50',
              ),
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID。',
                'type' => 'string',
                'example' => 'F0F82705-CFC7-5F83-86C8-A063892F****',
              ),
              'DstIPList' => 
              array (
                'title' => '外联IP列表',
                'description' => '主动外联的IP列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '主动外联的IP列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AclCoverage' => 
                    array (
                      'title' => 'ACL覆盖',
                      'description' => '是否覆盖访问控制策略。取值：

- **Uncovered**：未覆盖。

- **FullCoverage**：已覆盖。',
                      'type' => 'string',
                      'example' => 'Uncovered',
                    ),
                    'DstIP' => 
                    array (
                      'title' => '目的IP',
                      'description' => '主动外联域名的目的IP。',
                      'type' => 'string',
                      'example' => '10.0.XX.XX',
                    ),
                    'AclRecommendDetail' => 
                    array (
                      'title' => 'ACL推荐内容',
                      'description' => 'ACL的建议信息。',
                      'type' => 'string',
                      'example' => '建议放行',
                    ),
                    'HasAclRecommend' => 
                    array (
                      'title' => '是否有推荐ACL',
                      'description' => '是否有推荐ACL。取值：

- **true**：是。

- **false**：否。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'InBytes' => 
                    array (
                      'title' => '入方向流量',
                      'description' => '入方向的流量。单位：Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '472',
                    ),
                    'CategoryName' => 
                    array (
                      'title' => '分类名称',
                      'description' => '产品的分类名称。取值：

- **阿里云产品**

- **非阿里云产品**',
                      'type' => 'string',
                      'example' => '阿里云产品',
                    ),
                    'RuleName' => 
                    array (
                      'title' => '规则名称',
                      'description' => 'ACL规则名称。',
                      'type' => 'string',
                      'example' => '默认规则',
                    ),
                    'RuleId' => 
                    array (
                      'title' => '规则UUID',
                      'description' => 'ACL规则UUID。',
                      'type' => 'string',
                      'example' => 'fadsfd-dfadf-df****',
                    ),
                    'SessionCount' => 
                    array (
                      'title' => '会话数',
                      'description' => '请求次数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '4',
                    ),
                    'GroupName' => 
                    array (
                      'title' => '规则中的组名称',
                      'description' => '规则的组名称。',
                      'type' => 'string',
                      'example' => '规则_test',
                    ),
                    'SecuritySuggest' => 
                    array (
                      'title' => '安全建议',
                      'description' => '主动外联域名的安全策略。取值：

- **pass**：放行。

- **alert**：拒绝。

- **drop**：观察。',
                      'type' => 'string',
                      'example' => 'pass',
                    ),
                    'OutBytes' => 
                    array (
                      'title' => '出流量',
                      'description' => '出方向的流量。单位：Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '965',
                    ),
                    'AclStatus' => 
                    array (
                      'title' => 'ACL状态',
                      'description' => '访问控制策略的健康状态。取值：

- **Normal**：健康。
- **Abnormal**：不健康。',
                      'type' => 'string',
                      'example' => 'Normal',
                    ),
                    'IsMarkNormal' => 
                    array (
                      'title' => '是否正常',
                      'description' => '是否加入白名单。取值：
- **true**：已加入。

- **false**：未加入。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'CategoryId' => 
                    array (
                      'title' => '分类ID',
                      'description' => '产品分类ID。取值：

- **Aliyun**：阿里云产品。

- **NotAliyun**：非阿里云产品。',
                      'type' => 'string',
                      'example' => 'Aliyun',
                    ),
                    'TagList' => 
                    array (
                      'title' => '标签列表',
                      'description' => '标签列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签列表。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'RiskLevel' => 
                          array (
                            'title' => '风险等级',
                            'description' => '风险评估等级。取值：

- **1**：低危。
- **2**：中危。
- **3**：高危。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                            'enum' => 
                            array (
                            ),
                          ),
                          'TagName' => 
                          array (
                            'title' => '标签名',
                            'description' => '情报标签名称。',
                            'type' => 'string',
                            'example' => '放行标签',
                          ),
                          'TagId' => 
                          array (
                            'title' => '标签ID',
                            'description' => '情报标签ID。',
                            'type' => 'string',
                            'example' => 'AliYun',
                          ),
                          'TagDescribe' => 
                          array (
                            'title' => '标签描述',
                            'description' => '情报标签的描述。',
                            'type' => 'string',
                            'example' => '放行标签',
                          ),
                          'ClassId' => 
                          array (
                            'description' => '情报标签的分类。取值：

- **Suspicious**：可疑。
- **Malicious**：恶意。
- **Trusted**：信任。',
                            'type' => 'string',
                            'example' => 'Trusted',
                          ),
                        ),
                      ),
                    ),
                    'ApplicationPortList' => 
                    array (
                      'description' => '应用端口列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'title' => '端口列表',
                        'description' => '端口列表。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Port' => 
                          array (
                            'title' => '端口',
                            'description' => '应用的端口。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '80',
                          ),
                          'ApplicationName' => 
                          array (
                            'title' => '应用名',
                            'description' => '访问控制策略支持的应用类型。取值：
- **FTP**
- **HTTP**
- **HTTPS**
- **Memcache**
- **MongoDB**
- **MQTT**
- **MySQL**
- **RDP**
- **Redis**
- **SMTP**
- **SMTPS**
- **SSH**
- **SSL_No_Cert**
- **SSL**
- **VNC**

> 支持的应用类型取值与协议类型（Proto）取值存在依赖关系。Proto为TCP协议时，ApplicationNameList支持选择以上所有应用类型。当ApplicationNameList和ApplicationName同时传值时，以ApplicationNameList为准。
',
                            'type' => 'string',
                            'example' => 'HTTP',
                          ),
                        ),
                      ),
                    ),
                    'CategoryClassId' => 
                    array (
                      'description' => '情报标签的分类。取值：

- **Suspicious**：可疑。
- **Malicious**：恶意。
- **Trusted**：信任。',
                      'type' => 'string',
                      'example' => 'Trusted',
                    ),
                    'SecurityReason' => 
                    array (
                      'description' => '安全原因。',
                      'type' => 'string',
                      'example' => '智能策略：该目的域名所属组织为阿里云计算有限公司，主要业务为阿里云，未发现安全风险，可用于配置外联白名单。',
                    ),
                    'TotalBytes' => 
                    array (
                      'description' => '总流量。单位：byte。',
                      'type' => 'string',
                      'example' => '800',
                    ),
                    'HasAcl' => 
                    array (
                      'description' => '是否有访问控制规则。取值：

- **true**：有。
- **false** ：没有。',
                      'type' => 'string',
                      'example' => 'true',
                    ),
                    'AddressGroupList' => 
                    array (
                      'description' => '地址簿信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'AddressGroupUUID' => 
                          array (
                            'description' => '地址簿唯一标识。',
                            'type' => 'string',
                            'example' => 'f04ac7ce-628b-4cb7-be61-310222b7****',
                          ),
                          'AddressGroupName' => 
                          array (
                            'description' => '地址簿名称。',
                            'type' => 'string',
                            'example' => 'IP地址簿',
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 50,\\n  \\"RequestId\\": \\"F0F82705-CFC7-5F83-86C8-A063892F****\\",\\n  \\"DstIPList\\": [\\n    {\\n      \\"AclCoverage\\": \\"Uncovered\\",\\n      \\"DstIP\\": \\"10.0.XX.XX\\",\\n      \\"AclRecommendDetail\\": \\"建议放行\\",\\n      \\"HasAclRecommend\\": true,\\n      \\"InBytes\\": 472,\\n      \\"CategoryName\\": \\"阿里云产品\\",\\n      \\"RuleName\\": \\"默认规则\\",\\n      \\"RuleId\\": \\"fadsfd-dfadf-df****\\",\\n      \\"SessionCount\\": 4,\\n      \\"GroupName\\": \\"规则_test\\",\\n      \\"SecuritySuggest\\": \\"pass\\",\\n      \\"OutBytes\\": 965,\\n      \\"AclStatus\\": \\"Normal\\",\\n      \\"IsMarkNormal\\": true,\\n      \\"CategoryId\\": \\"Aliyun\\",\\n      \\"TagList\\": [\\n        {\\n          \\"RiskLevel\\": 1,\\n          \\"TagName\\": \\"放行标签\\",\\n          \\"TagId\\": \\"AliYun\\",\\n          \\"TagDescribe\\": \\"放行标签\\",\\n          \\"ClassId\\": \\"Trusted\\"\\n        }\\n      ],\\n      \\"ApplicationPortList\\": [\\n        {\\n          \\"Port\\": 80,\\n          \\"ApplicationName\\": \\"HTTP\\"\\n        }\\n      ],\\n      \\"CategoryClassId\\": \\"Trusted\\",\\n      \\"SecurityReason\\": \\"智能策略：该目的域名所属组织为阿里云计算有限公司，主要业务为阿里云，未发现安全风险，可用于配置外联白名单。\\",\\n      \\"TotalBytes\\": \\"800\\",\\n      \\"HasAcl\\": \\"true\\",\\n      \\"AddressGroupList\\": [\\n        {\\n          \\"AddressGroupUUID\\": \\"f04ac7ce-628b-4cb7-be61-310222b7****\\",\\n          \\"AddressGroupName\\": \\"IP地址簿\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeOutgoingDestinationIPResponse>\\n    <TotalCount>50</TotalCount>\\n    <RequestId>F0F82705-CFC7-5F83-86C8-A063892F****</RequestId>\\n    <DstIPList>\\n        <AclCoverage>Uncovered</AclCoverage>\\n        <DstIP>10.0.XX.XX</DstIP>\\n        <AclRecommendDetail>建议放行</AclRecommendDetail>\\n        <HasAclRecommend>true</HasAclRecommend>\\n        <InBytes>472</InBytes>\\n        <CategoryName>阿里云产品</CategoryName>\\n        <RuleName>默认规则</RuleName>\\n        <RuleId>fadsfd-dfadf-df****</RuleId>\\n        <SessionCount>4</SessionCount>\\n        <GroupName>规则_test</GroupName>\\n        <SecuritySuggest>pass</SecuritySuggest>\\n        <OutBytes>965</OutBytes>\\n        <AclStatus>Normal</AclStatus>\\n        <IsMarkNormal>true</IsMarkNormal>\\n        <CategoryId>Aliyun</CategoryId>\\n        <TagList>\\n            <RiskLevel>1</RiskLevel>\\n            <TagName>放行标签</TagName>\\n            <TagId>AliYun</TagId>\\n            <TagDescribe>放行标签</TagDescribe>\\n            <ClassId>Trusted</ClassId>\\n        </TagList>\\n        <ApplicationPortList>\\n            <Port>80</Port>\\n            <ApplicationName>HTTP</ApplicationName>\\n        </ApplicationPortList>\\n        <CategoryClassId>Trusted</CategoryClassId>\\n        <SecurityReason>智能策略：该目的域名所属组织为阿里云计算有限公司，主要业务为阿里云，未发现安全风险，可用于配置外联白名单。</SecurityReason>\\n        <TotalBytes>800</TotalBytes>\\n        <HasAcl>true</HasAcl>\\n        <AddressGroupList>\\n            <AddressGroupUUID>f04ac7ce-628b-4cb7-be61-310222b7****</AddressGroupUUID>\\n            <AddressGroupName>IP地址簿</AddressGroupName>\\n        </AddressGroupList>\\n    </DstIPList>\\n</DescribeOutgoingDestinationIPResponse>","errorExample":""}]',
      'title' => '查询主动外联的目的IP信息',
      'summary' => '查询主动外联的目的IP信息。',
    ),
    'DescribeOutgoingDomain' => 
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '语言, 枚举值.
默认值: zh
可选值: en',
            'description' => '请求消息的语言类型。取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '开始时间,Unix timestamp, 精确到秒',
            'description' => '设置查询开始时间。使用秒级时间戳格式表示。',
            'type' => 'string',
            'required' => true,
            'example' => '1656664560',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '结束时间,Unix timestamp, 精确到秒',
            'description' => '设置查询结束时间。使用秒级时间戳格式表示。',
            'type' => 'string',
            'required' => true,
            'example' => '1656750960',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '每页条数, 不得超过100, 超过100会设置为100',
            'description' => '设置分页查询每页包含多少条结果。

默认值为6，表示每页包含6条结果。最大值为100。',
            'type' => 'string',
            'required' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '当前页',
            'description' => '设置分页查询返回第几页数据。

默认值为1，表示返回第1页数据。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'CategoryId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分类, 枚举值.
默认值: 空
可选值: 
All (全部分类)
RiskDomain (风险域名分类)
RiskIP (风险IP分类)
AliYun (云产品分类)
NotAliYun (非云产品分类)',
            'description' => '产品分类。默认值：空。取值：

- **All** ：全部分类
- **RiskDomain**：风险域名分类
- **RiskIP** ：风险IP分类
- **AliYun** ：云产品分类
- **NotAliYun** ：非云产品分类',
            'type' => 'string',
            'required' => false,
            'example' => 'All',
          ),
        ),
        6 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '域名',
            'description' => '主动外联的域名。',
            'type' => 'string',
            'required' => false,
            'example' => 'www.aliyundoc.com',
          ),
        ),
        7 => 
        array (
          'name' => 'PublicIP',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '公网IP',
            'description' => '外联ECS的公网IP。',
            'type' => 'string',
            'required' => false,
            'example' => '192.0.XX.XX',
          ),
        ),
        8 => 
        array (
          'name' => 'Sort',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '顺序, 枚举值, 可选:asc, desc',
            'description' => '按照指定的字段排序。取值：

- **SessionCount**（默认值）：请求次数
- **TotalBytes**：总流量数
',
            'type' => 'string',
            'required' => false,
            'example' => 'SessionCount',
            'enum' => 
            array (
            ),
          ),
        ),
        9 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序字段, 枚举值.
默认值: SessionCount
可选值: InBytes, OutBytes,TotalBytes,SessionCount',
            'description' => '排序方式。取值：

- **asc**：升序
- **desc**（默认）：降序
',
            'type' => 'string',
            'required' => false,
            'example' => 'desc',
            'enum' => 
            array (
            ),
          ),
        ),
        10 => 
        array (
          'name' => 'TagIdNew',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '情报标签ID。取值：

- **AliYun**：阿里云产品
- **RiskDomain**：风险域名
- **RiskIP**：风险IP
- **TrustedDomain**：信誉网站
- **AliPay**：支付宝
- **DingDing**：钉钉
- **WeChat**：微信
- **QQ**：腾讯QQ
- **SecurityService**：安全服务
- **Microsoft**：微软
- **Amazon**：亚马逊
- **Pan**：网盘
- **Map**：地图
- **Code**：代码托管
- **SystemService**：系统服务
- **Taobao**：淘宝
- **Google**：谷歌
- **ThirdPartyService**：第三方平台服务
- **FirstFlow**：首次
- **Downloader**：恶意下载
- **Alexa Top1M**：热门网站
- **Miner**：矿池
- **Intelligence**：威胁情报
- **DDoS**：DDoS木马
- **Ransomware**：勒索软件
- **Spyware**：间谍软件
- **Rogue**：流氓软件
- **Botnet**：僵尸网络
- **Suspicious**：可疑网站
- **C&C**：远控
- **Gang**：团伙
- **CVE**：漏洞CVE
- **Backdoor**：木马后门
- **Phishing**：钓鱼网站
- **APT**：APT攻击
- **Supply Chain Attack**：供应链攻击
- **Malicious software**：恶意软件',
            'type' => 'string',
            'required' => false,
            'example' => 'AliYun',
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
                'title' => '总数',
                'description' => '外联域名的总数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '132',
              ),
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID。',
                'type' => 'string',
                'example' => 'F0F82705-CFC7-5F83-86C8-A063892F****',
              ),
              'DomainList' => 
              array (
                'description' => '外联域名列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '外联域名列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AclCoverage' => 
                    array (
                      'title' => 'ACL覆盖',
                      'description' => '访问控制策略是否覆盖。取值：

- **Uncovered**：未覆盖
- **FullCoverage**：已覆盖',
                      'type' => 'string',
                      'example' => 'Uncovered',
                    ),
                    'Domain' => 
                    array (
                      'title' => '域名',
                      'description' => '主动外联的域名。',
                      'type' => 'string',
                      'example' => 'www.aliyundoc.com',
                    ),
                    'AclRecommendDetail' => 
                    array (
                      'title' => 'ACL推荐内容',
                      'description' => 'ACL推荐内容。',
                      'type' => 'string',
                      'example' => '建议放行',
                    ),
                    'HasAclRecommend' => 
                    array (
                      'title' => '是否有ACL推荐规则',
                      'description' => '是否有推荐ACL。取值：

- **true**：是
- **false**：否',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'InBytes' => 
                    array (
                      'title' => '入流量',
                      'description' => '入方向的流量。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '3214',
                    ),
                    'CategoryName' => 
                    array (
                      'title' => '分类名称',
                      'description' => '产品的分类名称。取值：

- **阿里云产品**
- **非阿里云产品**',
                      'type' => 'string',
                      'example' => '阿里云产品',
                    ),
                    'RuleName' => 
                    array (
                      'title' => '规则名称',
                      'description' => 'ACL规则名称。',
                      'type' => 'string',
                      'example' => '默认规则',
                    ),
                    'RuleId' => 
                    array (
                      'title' => 'ACL规则ID',
                      'description' => 'ACL规则ID。',
                      'type' => 'string',
                      'example' => 'add-dfadf-f****',
                    ),
                    'SessionCount' => 
                    array (
                      'title' => '会话数',
                      'description' => '请求次数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '12',
                    ),
                    'GroupName' => 
                    array (
                      'title' => '规则中的组名称',
                      'description' => '规则的组名称。',
                      'type' => 'string',
                      'example' => '外量地址组',
                    ),
                    'SecuritySuggest' => 
                    array (
                      'title' => '安全建议',
                      'description' => '主动外联域名的安全策略。取值：

- **pass**：放行
- **alert**：观察
- **drop**：拒绝',
                      'type' => 'string',
                      'example' => 'pass',
                    ),
                    'OutBytes' => 
                    array (
                      'title' => '出流量',
                      'description' => '出方向的流量。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '4582',
                    ),
                    'AclStatus' => 
                    array (
                      'title' => 'ACL状态',
                      'description' => '访问控制策略的健康状态。取值：

- **Normal**：健康
- **Abnormal**：不健康',
                      'type' => 'string',
                      'example' => 'Normal',
                    ),
                    'IsMarkNormal' => 
                    array (
                      'title' => '是否正常',
                      'description' => '外联域名是否标记为正常。取值：

- **true**：正常
- **false**：不正常',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'CategoryId' => 
                    array (
                      'title' => '分类ID',
                      'description' => '产品分类ID。取值：

- **Aliyun**：阿里云产品
- **NotAliyun**：非阿里云产品',
                      'type' => 'string',
                      'example' => 'Aliyun',
                    ),
                    'AddressGroupUUID' => 
                    array (
                      'title' => '地址簿UUID',
                      'description' => '地址簿UUID。',
                      'type' => 'string',
                      'example' => 'fdad-fdafa-dafa-dfa****',
                    ),
                    'AddressGroupName' => 
                    array (
                      'title' => '地址簿名称',
                      'description' => '地址簿的名称。',
                      'type' => 'string',
                      'example' => '外联地址簿',
                    ),
                    'CategoryClassId' => 
                    array (
                      'description' => '情报标签的分类。取值：

- **Suspicious**：可疑
- **Malicious**：恶意
- **Trusted**：信任',
                      'type' => 'string',
                      'example' => 'Trusted',
                    ),
                    'Business' => 
                    array (
                      'description' => '网站业务。',
                      'type' => 'string',
                      'example' => '阿里云',
                    ),
                    'HasAcl' => 
                    array (
                      'description' => '是否已有`ACL`覆盖此域名管控。取值：

- **true**：有
- **false** ：没有',
                      'type' => 'string',
                      'example' => 'true',
                    ),
                    'Organization' => 
                    array (
                      'description' => '组织名称。',
                      'type' => 'string',
                      'example' => '阿里云计算有限公司',
                    ),
                    'SecurityReason' => 
                    array (
                      'description' => '安全原因。',
                      'type' => 'string',
                      'example' => '智能策略：该目的域名所属组织为阿里云计算有限公司，主要业务为阿里云，未发现安全风险，可用于配置外联白名单。',
                    ),
                    'TotalBytes' => 
                    array (
                      'description' => '总流量。单位：byte。',
                      'type' => 'string',
                      'example' => '800',
                    ),
                    'TagList' => 
                    array (
                      'description' => '标签列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'RiskLevel' => 
                          array (
                            'title' => '风险等级',
                            'description' => '风险评估等级，取值：

- **1**：低危
- **2**：中危
- **3**：高危',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '3',
                          ),
                          'TagName' => 
                          array (
                            'title' => '标签名称',
                            'description' => '标签名称。',
                            'type' => 'string',
                            'example' => '加白标签',
                          ),
                          'TagId' => 
                          array (
                            'title' => '标签ID',
                            'description' => '情报标签ID。',
                            'type' => 'string',
                            'example' => 'AliYun',
                          ),
                          'TagDescribe' => 
                          array (
                            'title' => '标签描述',
                            'description' => '标签描述。',
                            'type' => 'string',
                            'example' => '加白标签',
                          ),
                          'ClassId' => 
                          array (
                            'description' => '情报标签的分类。取值：

- **Suspicious**：可疑
- **Malicious**：恶意
- **Trusted**：信任',
                            'type' => 'string',
                            'example' => 'Trusted',
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 132,\\n  \\"RequestId\\": \\"F0F82705-CFC7-5F83-86C8-A063892F****\\",\\n  \\"DomainList\\": [\\n    {\\n      \\"AclCoverage\\": \\"Uncovered\\",\\n      \\"Domain\\": \\"www.aliyundoc.com\\",\\n      \\"AclRecommendDetail\\": \\"建议放行\\",\\n      \\"HasAclRecommend\\": true,\\n      \\"InBytes\\": 3214,\\n      \\"CategoryName\\": \\"阿里云产品\\",\\n      \\"RuleName\\": \\"默认规则\\",\\n      \\"RuleId\\": \\"add-dfadf-f****\\",\\n      \\"SessionCount\\": 12,\\n      \\"GroupName\\": \\"外量地址组\\",\\n      \\"SecuritySuggest\\": \\"pass\\",\\n      \\"OutBytes\\": 4582,\\n      \\"AclStatus\\": \\"Normal\\",\\n      \\"IsMarkNormal\\": true,\\n      \\"CategoryId\\": \\"Aliyun\\",\\n      \\"AddressGroupUUID\\": \\"fdad-fdafa-dafa-dfa****\\",\\n      \\"AddressGroupName\\": \\"外联地址簿\\",\\n      \\"CategoryClassId\\": \\"Trusted\\",\\n      \\"Business\\": \\"阿里云\\",\\n      \\"HasAcl\\": \\"true\\",\\n      \\"Organization\\": \\"阿里云计算有限公司\\",\\n      \\"SecurityReason\\": \\"智能策略：该目的域名所属组织为阿里云计算有限公司，主要业务为阿里云，未发现安全风险，可用于配置外联白名单。\\",\\n      \\"TotalBytes\\": \\"800\\",\\n      \\"TagList\\": [\\n        {\\n          \\"RiskLevel\\": 3,\\n          \\"TagName\\": \\"加白标签\\",\\n          \\"TagId\\": \\"AliYun\\",\\n          \\"TagDescribe\\": \\"加白标签\\",\\n          \\"ClassId\\": \\"Trusted\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeOutgoingDomainResponse>\\n    <TotalCount>132</TotalCount>\\n    <RequestId>F0F82705-CFC7-5F83-86C8-A063892F****</RequestId>\\n    <DomainList>\\n        <AclCoverage>Uncovered</AclCoverage>\\n        <Domain>www.aliyundoc.com</Domain>\\n        <AclRecommendDetail>建议放行</AclRecommendDetail>\\n        <HasAclRecommend>true</HasAclRecommend>\\n        <InBytes>3214</InBytes>\\n        <CategoryName>阿里云产品</CategoryName>\\n        <RuleName>默认规则</RuleName>\\n        <RuleId>add-dfadf-f****</RuleId>\\n        <SessionCount>12</SessionCount>\\n        <GroupName>外量地址组</GroupName>\\n        <SecuritySuggest>pass</SecuritySuggest>\\n        <OutBytes>4582</OutBytes>\\n        <AclStatus>Normal</AclStatus>\\n        <IsMarkNormal>true</IsMarkNormal>\\n        <CategoryId>Aliyun</CategoryId>\\n        <AddressGroupUUID>fdad-fdafa-dafa-dfa****</AddressGroupUUID>\\n        <AddressGroupName>外联地址簿</AddressGroupName>\\n        <CategoryClassId>Trusted</CategoryClassId>\\n        <Business>阿里云</Business>\\n        <HasAcl>true</HasAcl>\\n        <Organization>阿里云计算有限公司</Organization>\\n        <SecurityReason>智能策略：该目的域名所属组织为阿里云计算有限公司，主要业务为阿里云，未发现安全风险，可用于配置外联白名单。</SecurityReason>\\n        <TotalBytes>800</TotalBytes>\\n        <TagList>\\n            <RiskLevel>3</RiskLevel>\\n            <TagName>加白标签</TagName>\\n            <TagId>AliYun</TagId>\\n            <TagDescribe>加白标签</TagDescribe>\\n            <ClassId>Trusted</ClassId>\\n        </TagList>\\n    </DomainList>\\n</DescribeOutgoingDomainResponse>","errorExample":""}]',
      'title' => '查询主动外联的域名信息',
      'summary' => '查询主动外联的域名信息。',
    ),
    'AddAddressBook' => 
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
        'operationType' => 'create',
        'abilityTreeCode' => '68093',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcfwC140SS',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SourceIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问者源IP地址。',
            'type' => 'string',
            'deprecated' => true,
            'required' => false,
            'example' => '192.0.XX.XX',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收消息的语言类型。

- **zh**（默认）：中文。
- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'AddressList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地址簿的地址列表，多个地址间用英文逗号分隔。

> 当GroupType为`ip`、`port`或`domain`时必须设置。

- 当GroupType为`ip`时，地址列表中填写IP地址。例如：192.0.XX.XX/32, 192.0.XX.XX/24。

- 当GroupType为`port`时，地址列表中填写端口或端口范围。例如：80, 100/200。

- 当GroupType为`domain`时，地址列表中填写域名。例如：example.com, aliyundoc.com。',
            'type' => 'string',
            'required' => false,
            'example' => '192.0.XX.XX/32, 192.0.XX.XX/24',
          ),
        ),
        3 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地址簿的描述信息。',
            'type' => 'string',
            'required' => true,
            'example' => 'sz-001',
          ),
        ),
        4 => 
        array (
          'name' => 'GroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地址簿的名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'sz-001',
          ),
        ),
        5 => 
        array (
          'name' => 'GroupType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地址簿的类型，可选值包括：

- **ip**：IP地址簿。

- **domain**：域名地址簿。

- **port**：端口地址簿。

- **tag**：ECS标签地址簿。',
            'type' => 'string',
            'required' => true,
            'example' => 'ip',
          ),
        ),
        6 => 
        array (
          'name' => 'AutoAddTagEcs',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动添加新匹配标签的ECS公网IP到地址簿。

- **1**：表示自动添加。

- **0**（默认）：表示不自动添加。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'TagRelation',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待匹配的多个ECS标签间的关系。

- **and**（默认）：多个标签间为“与”关系，即同时匹配多个标签的ECS公网IP才会被加入地址簿。

- **or**：多个标签间为“或”关系，即只要匹配一个标签的ECS公网IP就会被加入地址簿。',
            'type' => 'string',
            'required' => false,
            'example' => 'and',
          ),
        ),
        8 => 
        array (
          'name' => 'TagList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '待匹配的标签列表信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '无',
              'type' => 'object',
              'properties' => 
              array (
                'TagValue' => 
                array (
                  'description' => '待匹配的ECS标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '1',
                ),
                'TagKey' => 
                array (
                  'description' => '待匹配的ECS标签Key。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TXY',
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
              'GroupUuid' => 
              array (
                'description' => '添加成功后返回的地址簿唯一标识ID。',
                'type' => 'string',
                'example' => 'f04ac7ce-628b-4cb7-be61-310222b7****',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2****',
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
            'errorCode' => 'ErrorParametersGroupType',
            'errorMessage' => 'The group type is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorParametersUid',
            'errorMessage' => 'The aliUid parameter is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorParametersGroupAddress',
            'errorMessage' => 'The IP address of the address group is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'ErrorDBSelect',
            'errorMessage' => 'An error occurred while querying database.',
          ),
          4 => 
          array (
            'errorCode' => 'ErrorAddressCountExceed',
            'errorMessage' => 'The maximum number of addresses is exceeded.',
          ),
          5 => 
          array (
            'errorCode' => 'ErrorAddressGroupExist',
            'errorMessage' => 'The address group already exists.',
          ),
          6 => 
          array (
            'errorCode' => 'ErrorParamDomain',
            'errorMessage' => 'The parameter Domain is invalid.',
          ),
          7 => 
          array (
            'errorCode' => 'ErrorUUIDNew',
            'errorMessage' => 'The UUID is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'ErrorAddressGroupCountExceed',
            'errorMessage' => 'The maximum number of address group is exceeded.',
          ),
          9 => 
          array (
            'errorCode' => 'ErrorDBInsert',
            'errorMessage' => 'An error occurred while performing an insert operation in the database.',
          ),
          10 => 
          array (
            'errorCode' => 'ErrorRecordLog',
            'errorMessage' => 'An error occurred while updating the operation log.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"GroupUuid\\": \\"f04ac7ce-628b-4cb7-be61-310222b7****\\",\\n  \\"RequestId\\": \\"CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2****\\"\\n}","errorExample":""},{"type":"xml","example":"<AddAddressBookResponse>\\n    <GroupUuid>f04ac7ce-628b-4cb7-be61-310222b7****</GroupUuid>\\n    <RequestId>CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2****</RequestId>\\n</AddAddressBookResponse>","errorExample":""}]',
      'title' => '添加访问控制地址簿',
      'summary' => '添加安全访问控制地址簿，包括IP地址簿、ECS标签地址簿、端口地址簿和域名地址簿。',
      'description' => '本接口一般用于添加访问控制的IP地址簿、ECS标签地址簿、端口地址簿或域名地址簿。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~94763~~)。 
调用API的请求格式，请参见本文**示例**中的请求示例。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteAddressBook' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '68139',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcfwC140SS',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SourceIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问者源IP地址。',
            'type' => 'string',
            'deprecated' => true,
            'required' => false,
            'example' => '192.0.XX.XX',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。
- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'GroupUuid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地址簿的唯一标识ID。

删除安全访问控制的地址簿，需要提供该地址簿的唯一标识ID，该ID可调用[DescribeAddressBook](~~138869~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'example' => '0657ab9d-fe8b-4174-b2a6-6baf358e****',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '850A84D6-0DE4-4797-A1E8-00090125EEB1',
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
            'errorCode' => 'ErrorRecordLog',
            'errorMessage' => 'An error occurred while updating the operation log.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorDBSelect',
            'errorMessage' => 'An error occurred while querying database.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorAddressGroupReference',
            'errorMessage' => 'The address group is in use and cannot be deleted.',
          ),
          3 => 
          array (
            'errorCode' => 'ErrorParametersUid',
            'errorMessage' => 'The aliUid parameter is invalid.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'ErrorAuthentication',
            'errorMessage' => 'An authentication error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"850A84D6-0DE4-4797-A1E8-00090125EEB1\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteAddressBookResponse>\\n    <RequestId>850A84D6-0DE4-4797-A1E8-00090125EEB1</RequestId>\\n</DeleteAddressBookResponse>","errorExample":""}]',
      'title' => '删除安全访问控制的地址簿',
      'summary' => '删除访问控制地址簿。',
      'description' => '本接口一般用于删除访问控制中的地址簿。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~94763~~)。 
调用API的请求格式，请参见本文**示例**中的请求示例。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyAddressBook' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SourceIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问者源IP地址。',
            'type' => 'string',
            'deprecated' => true,
            'required' => false,
            'example' => '192.0.XX.XX',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：
- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'AddressList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地址簿中的地址列表，多个地址间用英文逗号分隔。当GroupType为**ip**、**port**或**domain**时，您必须配置此参数。

- 当GroupType为**ip**时，地址列表中填写IP地址，例如：1.2.XX.XX/32，1.2.XX.XX/24。

- 当GroupType为**port**时，地址列表中填写端口或端口范围，例如：80/80，100/200。

- 当GroupType为**domain**时，地址列表中填写域名，例如：demo1.aliyun.com，demo2.aliyun.com。',
            'type' => 'string',
            'required' => false,
            'example' => '192.0.XX.XX/32，192.0.XX.XX/24',
          ),
        ),
        3 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地址簿的描述信息。',
            'type' => 'string',
            'required' => true,
            'example' => 'bj-001',
          ),
        ),
        4 => 
        array (
          'name' => 'GroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地址簿的名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'bj-001',
          ),
        ),
        5 => 
        array (
          'name' => 'GroupUuid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地址簿的唯一标识ID。

>修改访问控制策略中设置的地址簿信息，需要提供该地址簿的唯一标识ID，该ID可调用[DescribeAddressBook](~~138869~~)接口查询。',
            'type' => 'string',
            'required' => true,
            'example' => '0657ab9d-fe8b-4174-b2a6-6baf358e****',
          ),
        ),
        6 => 
        array (
          'name' => 'AutoAddTagEcs',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动添加新匹配标签的ECS公网IP到地址簿。取值：

- **1**：表示自动添加

- **0**：表示不自动添加',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'TagRelation',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '多个ECS标签间的关系。取值：

- **and**：多个标签间为“与”关系，即同时匹配多个标签的ECS公网IP才会被加入地址簿。

- **or**：多个标签间为“或”关系，即只要匹配一个标签的ECS公网IP就会被加入地址簿。',
            'type' => 'string',
            'required' => false,
            'example' => 'and',
          ),
        ),
        8 => 
        array (
          'name' => 'TagList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '待匹配的标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '无',
              'type' => 'object',
              'properties' => 
              array (
                'TagValue' => 
                array (
                  'description' => '待匹配的ECS标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '1',
                ),
                'TagKey' => 
                array (
                  'description' => '待匹配的ECS标签Key。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TXY',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D',
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
            'errorCode' => 'ErrorParametersUid',
            'errorMessage' => 'The aliUid parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorDBSelect',
            'errorMessage' => 'An error occurred while querying database.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorAddressCountExceed',
            'errorMessage' => 'The maximum number of addresses is exceeded.',
          ),
          3 => 
          array (
            'errorCode' => 'ErrorParametersGroupAddress',
            'errorMessage' => 'The IP address of the address group is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'ErrorParamDomain',
            'errorMessage' => 'The parameter Domain is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'ErrorAddressGroupNotExist',
            'errorMessage' => 'The address group does not exist.',
          ),
          6 => 
          array (
            'errorCode' => 'ErrorDBInsert',
            'errorMessage' => 'An error occurred while performing an insert operation in the database.',
          ),
          7 => 
          array (
            'errorCode' => 'ErrorRecordLog',
            'errorMessage' => 'An error occurred while updating the operation log.',
          ),
          8 => 
          array (
            'errorCode' => 'ErrorParametersGroupPort',
            'errorMessage' => 'The group port is invalid.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'ErrorAuthentication',
            'errorMessage' => 'An authentication error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyAddressBookResponse>\\n    <RequestId>CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D</RequestId>\\n</ModifyAddressBookResponse>","errorExample":""}]',
      'title' => '修改访问控制策略中设置的地址簿',
      'summary' => '修改访问控制策略中设置的地址簿。',
      'description' => '本接口一般用于修改访问控制策略中设置的地址簿。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~94763~~)。 
调用API的请求格式，请参见本文**示例**中的请求示例。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAddressBook' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求消息的语言类型。取值：
- **zh**（默认）：中文。
- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，设置当前页面的页码。

默认值为1，表示返回第1页数据。',
            'type' => 'string',
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
            'description' => '分页查询时，设置每页包含的地址簿的数量。

默认值为10，表示每页包含10条结果。最大值为50。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '10',
            'default' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'Query',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '搜索条件，输入待查询地址簿信息。',
            'type' => 'string',
            'required' => false,
            'example' => '192.0.XX.XX',
          ),
        ),
        4 => 
        array (
          'name' => 'GroupType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地址簿的类型。取值：

- **ip**：IP地址簿。

- **domain**：域名地址簿。

- **port**：端口地址簿。

- **tag**：ECS标签地址簿。

- **allCloud**：云服务地址簿。

- **threat**：威胁情报地址簿。

> 不设置该参数表示查询IP地址簿和ECS标签地址簿。',
            'type' => 'string',
            'required' => false,
            'example' => 'ip',
          ),
        ),
        5 => 
        array (
          'name' => 'ContainPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询包含指定端口的地址簿。仅当**GroupType**参数的值为**port**时，该参数才会作为本次查询的条件。',
            'type' => 'string',
            'required' => false,
            'example' => '80',
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
              'PageNo' => 
              array (
                'description' => '当前页面的页码。',
                'type' => 'string',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页包含的地址簿的数量。',
                'type' => 'string',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '结果的请求ID。',
                'type' => 'string',
                'example' => 'B36F150A-1E27-43AA-B72C-D2AC712F09DA',
              ),
              'TotalCount' => 
              array (
                'description' => '地址簿的总数量。',
                'type' => 'string',
                'example' => '100',
              ),
              'Acls' => 
              array (
                'description' => '地址簿信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AddressListCount' => 
                    array (
                      'description' => '地址簿中包含地址的个数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'GroupUuid' => 
                    array (
                      'description' => '地址簿的唯一标识ID。',
                      'type' => 'string',
                      'example' => 'f04ac7ce-628b-4cb7-be61-310222b7****',
                    ),
                    'AutoAddTagEcs' => 
                    array (
                      'description' => '是否自动添加新匹配标签的ECS（新购且完成标签设置的ECS或修改标签的ECS）公网IP到地址簿。取值：

- **1**：表示自动添加。

- **0**：表示不自动添加。
',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'Description' => 
                    array (
                      'description' => '地址簿的描述信息。',
                      'type' => 'string',
                      'example' => 'DEMO地址簿',
                    ),
                    'GroupName' => 
                    array (
                      'description' => '地址簿的名称。',
                      'type' => 'string',
                      'example' => 'demo_address_book',
                    ),
                    'ReferenceCount' => 
                    array (
                      'description' => '地址簿被引用次数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '3',
                    ),
                    'GroupType' => 
                    array (
                      'description' => '地址簿的类型。取值：

- **ip**：IP地址簿。

- **domain**：域名地址簿。

- **port**：端口地址簿。

- **tag**：ECS标签地址簿。

- **allCloud**：云服务地址簿。

- **threat**：威胁情报地址簿。',
                      'type' => 'string',
                      'example' => 'ip',
                    ),
                    'TagRelation' => 
                    array (
                      'description' => '多个ECS标签间的关系。取值：

- **and**：多个标签间为“与”关系，即同时匹配多个标签的ECS公网IP才会被加入地址簿。

- **or**：多个标签间为“或”关系，即只要匹配一个标签的ECS公网IP就会被加入地址簿。',
                      'type' => 'string',
                      'example' => 'and',
                    ),
                    'TagList' => 
                    array (
                      'description' => '地址簿支持自动添加的待匹配ECS标签信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'TagValue' => 
                          array (
                            'description' => '待匹配的ECS标签值。',
                            'type' => 'string',
                            'example' => '全部VALUE',
                          ),
                          'TagKey' => 
                          array (
                            'description' => '待匹配的ECS标签Key。',
                            'type' => 'string',
                            'example' => 'company',
                          ),
                        ),
                      ),
                    ),
                    'AddressList' => 
                    array (
                      'description' => '地址簿的地址列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '地址簿的地址列表信息。',
                        'type' => 'string',
                        'example' => '[ "192.168.XX.XX/32", "192.168.XX.XX/32" ]',
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
            'errorCode' => 'ErrorParametersGroupType',
            'errorMessage' => 'The group type is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorParametersUid',
            'errorMessage' => 'The aliUid parameter is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorParametersPageSizeOrNo',
            'errorMessage' => 'Either pageSize or pageNo is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'ErrorDBSelect',
            'errorMessage' => 'An error occurred while querying database.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageNo\\": \\"1\\",\\n  \\"PageSize\\": \\"10\\",\\n  \\"RequestId\\": \\"B36F150A-1E27-43AA-B72C-D2AC712F09DA\\",\\n  \\"TotalCount\\": \\"100\\",\\n  \\"Acls\\": [\\n    {\\n      \\"AddressListCount\\": 2,\\n      \\"GroupUuid\\": \\"f04ac7ce-628b-4cb7-be61-310222b7****\\",\\n      \\"AutoAddTagEcs\\": 1,\\n      \\"Description\\": \\"DEMO地址簿\\",\\n      \\"GroupName\\": \\"demo_address_book\\",\\n      \\"ReferenceCount\\": 3,\\n      \\"GroupType\\": \\"ip\\",\\n      \\"TagRelation\\": \\"and\\",\\n      \\"TagList\\": [\\n        {\\n          \\"TagValue\\": \\"全部VALUE\\",\\n          \\"TagKey\\": \\"company\\"\\n        }\\n      ],\\n      \\"AddressList\\": [\\n        \\"[ \\\\\\"192.168.XX.XX/32\\\\\\", \\\\\\"192.168.XX.XX/32\\\\\\" ]\\"\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeAddressBookResponse>\\n    <PageNo>1</PageNo>\\n    <PageSize>10</PageSize>\\n    <RequestId>B36F150A-1E27-43AA-B72C-D2AC712F09DA</RequestId>\\n    <TotalCount>100</TotalCount>\\n    <Acls>\\n        <AddressListCount>2</AddressListCount>\\n        <GroupUuid>f04ac7ce-628b-4cb7-be61-310222b7****</GroupUuid>\\n        <AutoAddTagEcs>1</AutoAddTagEcs>\\n        <Description>DEMO地址簿</Description>\\n        <GroupName>demo_address_book</GroupName>\\n        <ReferenceCount>3</ReferenceCount>\\n        <GroupType>ip</GroupType>\\n        <TagRelation>and</TagRelation>\\n        <TagList>\\n            <TagValue>全部VALUE</TagValue>\\n            <TagKey>company</TagKey>\\n        </TagList>\\n        <AddressList>[ \\"192.168.XX.XX/32\\", \\"192.168.XX.XX/32\\" ]</AddressList>\\n    </Acls>\\n</DescribeAddressBookResponse>","errorExample":""}]',
      'title' => '查询访问控制策略地址簿',
      'summary' => '查询云防火墙访问控制策略地址簿的详细信息。',
      'description' => '本接口一般用于查询访问控制策略地址簿的详细信息。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeInternetOpenIp' => 
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收消息的语言类型。

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的应用名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'SSH',
          ),
        ),
        2 => 
        array (
          'name' => 'RiskLevel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '风险等级，不填为全部风险等级。取值：
- **3**：高风险
- **2**：中风险
- **1**：低风险
- **0**：无风险',
            'type' => 'string',
            'required' => false,
            'example' => '2',
          ),
        ),
        3 => 
        array (
          'name' => 'Port',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '端口号。',
            'type' => 'string',
            'required' => false,
            'example' => '80',
          ),
        ),
        4 => 
        array (
          'name' => 'AssetsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'i-uf6faknmuby7ezht****',
          ),
        ),
        5 => 
        array (
          'name' => 'AssetsInstanceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'launch-advisor-2023****',
          ),
        ),
        6 => 
        array (
          'name' => 'PublicIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的公网IP。',
            'type' => 'string',
            'required' => false,
            'example' => '203.0.113.1',
          ),
        ),
        7 => 
        array (
          'name' => 'RegionNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
          ),
        ),
        8 => 
        array (
          'name' => 'AssetsType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的资产类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'EcsEIP',
          ),
        ),
        9 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '公网IP暴露的开始时间。使用秒级时间戳格式表示。',
            'type' => 'string',
            'required' => false,
            'example' => '1681957629',
          ),
        ),
        10 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '公网IP暴露的结束时间。使用秒级时间戳格式表示。',
            'type' => 'string',
            'required' => false,
            'example' => '1663640336',
          ),
        ),
        11 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置分页查询时的页码。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        12 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置分页查询每页包含多少条结果。',
            'type' => 'string',
            'required' => true,
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
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID。',
                'type' => 'string',
                'example' => '6B780BD6-282C-51A9-A8E6-59F636BAFA54',
              ),
              'PageInfo' => 
              array (
                'description' => '分页查询时的页面信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'CurrentPage' => 
                  array (
                    'description' => '分页查询时，显示的当前页的页码。',
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
                    'description' => '查询到的数据总条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '40',
                  ),
                ),
              ),
              'DataList' => 
              array (
                'description' => '返回数据列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回数据列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RiskLevel' => 
                    array (
                      'description' => '风险等级。取值：
- **3**：高风险
- **2**：中风险
- **1**：低风险
- **0**：无风险',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '3',
                    ),
                    'TrafficPercent1Day' => 
                    array (
                      'description' => '1日流量占比，暴露IP的最近1日流量占资产最近1日所有流量的占比。单位：百分比（%）。',
                      'type' => 'string',
                      'example' => '11.1',
                    ),
                    'AclRecommendDetail' => 
                    array (
                      'description' => '没有智能推荐策略的原因。取值：
- 当前无智能策略推荐
- 当前只对部分用户开放该功能
- 策略配置已经修改，当前无智能策略推荐
- 智能策略已经配置，当前无新智能策略推荐',
                      'type' => 'string',
                      'example' => '当前无智能策略推荐',
                    ),
                    'AssetsName' => 
                    array (
                      'description' => '实例名称。',
                      'type' => 'string',
                      'example' => 'launch-advisor-2023****',
                    ),
                    'RegionNo' => 
                    array (
                      'description' => '实例所在的地域ID。',
                      'type' => 'string',
                      'example' => 'cn-shenzhen',
                    ),
                    'AssetsType' => 
                    array (
                      'description' => '实例的资产类型。',
                      'type' => 'string',
                      'example' => 'EcsEIP',
                    ),
                    'HasAclRecommend' => 
                    array (
                      'description' => '是否有推荐ACL。取值：

- **true**：是
- **false**：否',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'DetailNum' => 
                    array (
                      'description' => '端口总明细数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '5',
                    ),
                    'TrafficPercent7Day' => 
                    array (
                      'description' => '7日流量占比，暴露IP的最近7日流量占资产最近7日所有流量的占比。单位：百分比（%）。',
                      'type' => 'string',
                      'example' => '77.7',
                    ),
                    'TrafficPercent30Day' => 
                    array (
                      'description' => '30日流量占比，暴露IP的最近30日流量占资产最近30日所有流量的占比。单位：百分比（%）。',
                      'type' => 'string',
                      'example' => '99.9',
                    ),
                    'PublicIp' => 
                    array (
                      'description' => '实例的公网IP。',
                      'type' => 'string',
                      'example' => '203.0.113.1',
                    ),
                    'RiskReason' => 
                    array (
                      'description' => '风险原因。',
                      'type' => 'string',
                      'example' => '历史流量均为黑流量',
                    ),
                    'AssetsInstanceId' => 
                    array (
                      'description' => '实例ID。',
                      'type' => 'string',
                      'example' => 'i-bp1ix9w22kv6aew9****',
                    ),
                    'PortList' => 
                    array (
                      'description' => '端口列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '端口列表。',
                        'type' => 'string',
                        'example' => '["3000","5601","8886,"8887","8889"]',
                      ),
                    ),
                    'ServiceNameList' => 
                    array (
                      'description' => '应用列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '应用列表。',
                        'type' => 'string',
                        'example' => '[\'HTTPS\', \'RDP\', \'SSL\', \'Unknown\']',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6B780BD6-282C-51A9-A8E6-59F636BAFA54\\",\\n  \\"PageInfo\\": {\\n    \\"CurrentPage\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"TotalCount\\": 40\\n  },\\n  \\"DataList\\": [\\n    {\\n      \\"RiskLevel\\": 3,\\n      \\"TrafficPercent1Day\\": \\"11.1\\",\\n      \\"AclRecommendDetail\\": \\"当前无智能策略推荐\\",\\n      \\"AssetsName\\": \\"launch-advisor-2023****\\",\\n      \\"RegionNo\\": \\"cn-shenzhen\\",\\n      \\"AssetsType\\": \\"EcsEIP\\",\\n      \\"HasAclRecommend\\": true,\\n      \\"DetailNum\\": 5,\\n      \\"TrafficPercent7Day\\": \\"77.7\\",\\n      \\"TrafficPercent30Day\\": \\"99.9\\",\\n      \\"PublicIp\\": \\"203.0.113.1\\",\\n      \\"RiskReason\\": \\"历史流量均为黑流量\\",\\n      \\"AssetsInstanceId\\": \\"i-bp1ix9w22kv6aew9****\\",\\n      \\"PortList\\": [\\n        \\"[\\\\\\"3000\\\\\\",\\\\\\"5601\\\\\\",\\\\\\"8886,\\\\\\"8887\\\\\\",\\\\\\"8889\\\\\\"]\\"\\n      ],\\n      \\"ServiceNameList\\": [\\n        \\"[\'HTTPS\', \'RDP\', \'SSL\', \'Unknown\']\\"\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取防护资产暴露到互联网的IP',
      'summary' => '获取防护资产暴露到互联网的IP。',
    ),
    'DescribeInternetTrafficTrend' => 
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
        'abilityTreeCode' => '68287',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcfwVPGXSE',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SourceIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问者源ip地址。',
            'type' => 'string',
            'deprecated' => true,
            'required' => false,
            'example' => '101.80.171.196',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：
- **zh**（默认）：表示中文
- **en**：表示英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：
- **zh**（默认）：表示中文
- **en**：表示英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        3 => 
        array (
          'name' => 'Direction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '互联网流量方向。取值：

- **in**：外对内流量访问控制
- **out**：内对外流量访问控制',
            'type' => 'string',
            'required' => false,
            'example' => 'in',
          ),
        ),
        4 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间。使用秒级时间戳格式表示。',
            'type' => 'string',
            'required' => true,
            'example' => '1670307484',
          ),
        ),
        5 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间。使用秒级时间戳格式表示。',
            'type' => 'string',
            'required' => true,
            'example' => '1674958929',
          ),
        ),
        6 => 
        array (
          'name' => 'SourceCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '溯源码。',
            'type' => 'string',
            'required' => true,
            'example' => 'yundun',
          ),
        ),
        7 => 
        array (
          'name' => 'SrcPublicIP',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '公网源IP地址。',
            'type' => 'string',
            'required' => false,
            'example' => '47.112.210.136',
          ),
        ),
        8 => 
        array (
          'name' => 'SrcPrivateIP',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '私网源IP地址。',
            'type' => 'string',
            'required' => false,
            'example' => '10.100.134.60',
          ),
        ),
        9 => 
        array (
          'name' => 'TrafficType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '采集的流量类型。取值：
          
- **max**（默认）：流量峰值
  
- **avg**：流量均值',
            'type' => 'string',
            'required' => false,
            'example' => 'max',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'MaxTotalBps' => 
              array (
                'description' => '出方向和入方向总的峰值网络吞吐率（每秒发送多少bit）。单位：bps。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '89783147',
              ),
              'MaxBandwidthTime' => 
              array (
                'description' => '峰值带宽发生时间戳。使用秒级时间戳格式表示。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1672736400',
              ),
              'AvgInBps' => 
              array (
                'description' => '入方向的平均网络吞吐率（每秒发送多少bit）。单位：bps。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '6114152',
              ),
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID。',
                'type' => 'string',
                'example' => 'C7E837BE-0379-565E-B7B4-DE595C8D337C',
              ),
              'MaxInBps' => 
              array (
                'description' => '入方向的峰值网络吞吐率（每秒发送多少bit）。单位：bps。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10275643',
              ),
              'MaxOutBps' => 
              array (
                'description' => '出方向的峰值网络吞吐率（每秒发送多少bit）。单位：bps。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '395188',
              ),
              'AvgSession' => 
              array (
                'description' => '平均请求次数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '79013',
              ),
              'MaxSession' => 
              array (
                'description' => '峰值请求次数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '931641',
              ),
              'AvgTotalBps' => 
              array (
                'description' => '出方向和入方向总的平均网络吞吐率（每秒发送多少bit）。单位：bps。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2306',
              ),
              'AvgOutBps' => 
              array (
                'description' => '出方向的平均网络吞吐率（每秒发送多少bit）。单位：bps。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '70148993',
              ),
              'TotalInBytes' => 
              array (
                'description' => '入方向的网络吞吐量（总共发送多少字节）。单位：Byte。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '41536824243873',
              ),
              'TotalOutBytes' => 
              array (
                'description' => '出方向的网络吞吐量（总共发送多少字节）。单位：Byte。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2660894567178',
              ),
              'TotalBytes' => 
              array (
                'description' => '出方向和入方向总的网络吞吐量（总共发送多少字节）。单位：Byte。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '963227674958',
              ),
              'TotalSession' => 
              array (
                'description' => '总请求次数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1061449',
              ),
              'TotalExceedBytes' => 
              array (
                'description' => '总超量流量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '4243873',
              ),
              'MaxDayExceedBytes' => 
              array (
                'description' => '最大日超量流量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '873',
              ),
              'DataList' => 
              array (
                'description' => '流量统计信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '流量统计信息列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SessionCount' => 
                    array (
                      'description' => '请求次数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '27',
                    ),
                    'Time' => 
                    array (
                      'description' => '流量发生的时间。使用秒级时间戳格式表示。

若该时间点未加工完成，则其他字段值均为-1。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1659405600',
                    ),
                    'InBps' => 
                    array (
                      'description' => '入方向的网络吞吐率（每秒发送多少bit）。单位：bps。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '187',
                    ),
                    'InPps' => 
                    array (
                      'description' => '入方向的网络吞吐率（每秒发送多少个分组数据包）。单位：pps。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2',
                    ),
                    'NewConn' => 
                    array (
                      'description' => '新建连接数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '27',
                    ),
                    'OutBytes' => 
                    array (
                      'description' => '出方向的网络吞吐量（总共发送多少字节）。单位：Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1123',
                    ),
                    'OutPps' => 
                    array (
                      'description' => '出方向的网络吞吐率（每秒发送多少个分组数据包）。单位：pps。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2',
                    ),
                    'InBytes' => 
                    array (
                      'description' => '入方向的网络吞吐量（总共发送多少字节）。单位：Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '235',
                    ),
                    'OutBps' => 
                    array (
                      'description' => '出方向的网络吞吐率（每秒发送多少bit）。单位：bps。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '45',
                    ),
                    'TotalBps' => 
                    array (
                      'description' => '出方向和入方向总的网络吞吐率（每秒发送多少bit）。单位：bps。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '232',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"MaxTotalBps\\": 89783147,\\n  \\"MaxBandwidthTime\\": 1672736400,\\n  \\"AvgInBps\\": 6114152,\\n  \\"RequestId\\": \\"C7E837BE-0379-565E-B7B4-DE595C8D337C\\",\\n  \\"MaxInBps\\": 10275643,\\n  \\"MaxOutBps\\": 395188,\\n  \\"AvgSession\\": 79013,\\n  \\"MaxSession\\": 931641,\\n  \\"AvgTotalBps\\": 2306,\\n  \\"AvgOutBps\\": 70148993,\\n  \\"TotalInBytes\\": 41536824243873,\\n  \\"TotalOutBytes\\": 2660894567178,\\n  \\"TotalBytes\\": 963227674958,\\n  \\"TotalSession\\": 1061449,\\n  \\"TotalExceedBytes\\": 4243873,\\n  \\"MaxDayExceedBytes\\": 873,\\n  \\"DataList\\": [\\n    {\\n      \\"SessionCount\\": 27,\\n      \\"Time\\": 1659405600,\\n      \\"InBps\\": 187,\\n      \\"InPps\\": 2,\\n      \\"NewConn\\": 27,\\n      \\"OutBytes\\": 1123,\\n      \\"OutPps\\": 2,\\n      \\"InBytes\\": 235,\\n      \\"OutBps\\": 45,\\n      \\"TotalBps\\": 232\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取互联网流量趋势',
      'summary' => '获取互联网流量趋势。',
    ),
    'ReleasePostInstance' => 
    array (
      'summary' => '释放按量付费防火墙。',
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
        'operationType' => 'get',
        'riskType' => 'high',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云防火墙实例的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cfw_elasticity_public_cn-xxx',
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
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'EE316A19-xxxx-5043-9DF1-C04458ABC570',
              ),
              'Success' => 
              array (
                'description' => '本次请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ReleaseStatus' => 
              array (
                'description' => '是否释放成功：
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"EE316A19-xxxx-5043-9DF1-C04458ABC570\\",\\n  \\"Success\\": true,\\n  \\"ReleaseStatus\\": true\\n}","type":"json"}]',
      'title' => '释放按量付费防火墙',
    ),
    'DescribeAssetRiskList' => 
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
          'name' => 'SourceIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问者源IP地址。',
            'type' => 'string',
            'required' => false,
            'example' => '47.100.XX.XX',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收消息的语言类型。取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'IpVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云防火墙防护的资产的IP版本。


取值：

- **4**（默认）：IpV4

- **6**：IpV6',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '4',
          ),
        ),
        3 => 
        array (
          'name' => 'IpAddrList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '待查询的IP地址列表参数，IP地址之间用半角逗号（,）分隔，一次性最多查询20个IP地址。

>- IPv4举例：47.97.XX.XX。
>- IPv6举例：2001:db8:ffff:ffff:ffff:XXXX:ffff。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '待查询的IP地址列表参数，IP地址之间用半角逗号（,）分隔，一次性最多查询20个IP地址。

>- IPv4举例：47.97.XX.XX。
>- IPv6举例：2001:db8:ffff:ffff:ffff:XXXX:ffff。',
              'type' => 'string',
              'required' => false,
              'example' => '47.97.XX.XX',
            ),
            'required' => false,
            'maxItems' => 200,
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
                'description' => '返回结果的总条数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '12',
              ),
              'RequestId' => 
              array (
                'description' => '结果的请求ID。',
                'type' => 'string',
                'example' => '443C5781-1C03-5FCD-8EC5-FB9C0B9AC396',
              ),
              'AssetList' => 
              array (
                'description' => '返回的资产详情。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回的资产详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RiskLevel' => 
                    array (
                      'description' => '风险等级。取值：
- **low**：低风险
- **middle**：中风险
- **high**：高风险',
                      'type' => 'string',
                      'example' => 'low',
                    ),
                    'Ip' => 
                    array (
                      'description' => '服务器IP。',
                      'type' => 'string',
                      'example' => '39.108.XX.XX',
                    ),
                    'IpVersion' => 
                    array (
                      'description' => '云防火墙防护的资产的IP地址版本。

取值：

- **4**：表示IPv4地址。

- **6**：表示IPv6地址。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '4',
                    ),
                    'Reason' => 
                    array (
                      'description' => '风险原因。',
                      'type' => 'string',
                      'example' => 'other',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": 12,\\n  \\"RequestId\\": \\"443C5781-1C03-5FCD-8EC5-FB9C0B9AC396\\",\\n  \\"AssetList\\": [\\n    {\\n      \\"RiskLevel\\": \\"low\\",\\n      \\"Ip\\": \\"39.108.XX.XX\\",\\n      \\"IpVersion\\": 4,\\n      \\"Reason\\": \\"other\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取资产风险等级列表',
      'summary' => '获取资产风险等级列表。',
    ),
    'DescribeVpcListLite' => 
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
          'name' => 'SourceIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问者源IP地址。',
            'type' => 'string',
            'required' => false,
            'example' => '58.34.174.194',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文。

- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'VpcName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC的实例名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-shanghai',
          ),
        ),
        3 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-8vbwbo90rq0anm6t****',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC所在的地域ID。

> 关于云防火墙支持地域的详细信息，请参见[支持的地域](~~195657~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
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
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => '55E56A55-D93A-5614-AE00-BE2F8077F891',
              ),
              'VpcList' => 
              array (
                'description' => 'VPC信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'VPC信息列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'VpcId' => 
                    array (
                      'description' => 'VPC实例ID。',
                      'type' => 'string',
                      'example' => 'vpc-wz9dqhljd10fk0b4eh885',
                    ),
                    'VpcName' => 
                    array (
                      'description' => 'VPC的实例名称。',
                      'type' => 'string',
                      'example' => 'Cloud_Firewall_VPC',
                    ),
                    'RegionNo' => 
                    array (
                      'description' => 'VPC所属地域ID。',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"55E56A55-D93A-5614-AE00-BE2F8077F891\\",\\n  \\"VpcList\\": [\\n    {\\n      \\"VpcId\\": \\"vpc-wz9dqhljd10fk0b4eh885\\",\\n      \\"VpcName\\": \\"Cloud_Firewall_VPC\\",\\n      \\"RegionNo\\": \\"cn-hangzhou\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取VPC列表',
      'summary' => '获取VPC列表。',
    ),
    'ModifyVpcFirewallIPSWhitelist' => 
    array (
      'summary' => '修改VPC防火墙IPS白名单。',
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
        'operationType' => 'update',
        'abilityTreeCode' => '138370',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcfw1FTUMS',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：
- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'MemberUid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前阿里云账号的成员账号UID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1415189284827022',
          ),
        ),
        2 => 
        array (
          'name' => 'VpcFirewallId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'vfw-d7b8ce273791475b9b0b',
          ),
        ),
        3 => 
        array (
          'name' => 'WhiteType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '白名单类型。取值：
 - **1**：目的类型
- **2**：源类型',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'ListType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '列表类型。取值：
 - **1**：用户自定义类型
- **2**：地址簿类型',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'ListValue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '对应列表类型的值。',
            'type' => 'string',
            'required' => false,
            'example' => '10.130.0.0/20,10.130.17.11/32',
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
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => 'F2E8D49A-E5AA-5FF8-8822-25282DCF4BE8',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F2E8D49A-E5AA-5FF8-8822-25282DCF4BE8\\"\\n}","type":"json"}]',
      'title' => '修改VPC防火墙IPS白名单',
    ),
    'DescribeVpcFirewallIPSWhitelist' => 
    array (
      'summary' => '获取VPC防火墙IPS白名单。',
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。

取值：

- **zh**（默认）：中文

- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'MemberUid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云防火墙成员账号的UID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1766185894104675',
          ),
        ),
        2 => 
        array (
          'name' => 'VpcFirewallId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'vfw-3547deab1c9b4190a53f',
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
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => 'B5EE02F9-4F21-56CA-AA49-F9F8D69483C1',
              ),
              'Whitelists' => 
              array (
                'description' => 'VPC边界防火墙IPS白名单的详细信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'VPC边界防火墙IPS白名单的详细信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'VpcFirewallId' => 
                    array (
                      'description' => 'VPC边界防火墙的实例ID。',
                      'type' => 'string',
                      'example' => 'vfw-57431e9abe424852a578',
                    ),
                    'WhiteType' => 
                    array (
                      'description' => '白名单类型。取值：
 - **1**：目的类型
- **2**：源类型',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'ListValue' => 
                    array (
                      'description' => '对应列表类型的值。',
                      'type' => 'string',
                      'example' => '10.10.200.4/32,10.10.200.25/32',
                    ),
                    'ListType' => 
                    array (
                      'description' => '列表类型。取值：
 - **1**：用户自定义类型
- **2**：地址簿类型',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'WhiteListValue' => 
                    array (
                      'description' => '列表类型数组的内容。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '列表类型数组的内容。',
                        'type' => 'string',
                        'example' => '10.10.200.4/32',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B5EE02F9-4F21-56CA-AA49-F9F8D69483C1\\",\\n  \\"Whitelists\\": [\\n    {\\n      \\"VpcFirewallId\\": \\"vfw-57431e9abe424852a578\\",\\n      \\"WhiteType\\": 1,\\n      \\"ListValue\\": \\"10.10.200.4/32,10.10.200.25/32\\",\\n      \\"ListType\\": 1,\\n      \\"WhiteListValue\\": [\\n        \\"10.10.200.4/32\\"\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取VPC防火墙IPS白名单',
    ),
    'DeleteControlPolicyTemplate' => 
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
        'abilityTreeCode' => '140699',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcfwJZTBPW',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SourceIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问者源IP地址。',
            'type' => 'string',
            'required' => false,
            'example' => '61.178.12.52',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：
- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：
- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
          ),
        ),
        3 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略模板ID。',
            'type' => 'string',
            'required' => true,
            'example' => '719ce620-ae23-4e42-9f93-9191b4400b55',
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
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => '4E7F94C7-781F-5192-86CF-DB085013C810',
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
            'errorCode' => 'ErrorParametersUid',
            'errorMessage' => 'The aliUid parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorParameterIpVersion',
            'errorMessage' => 'The IP version is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorParametersDirection',
            'errorMessage' => 'The direction is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'ErrorDBSelect',
            'errorMessage' => 'An error occurred while querying database.',
          ),
          4 => 
          array (
            'errorCode' => 'ErrorUnmarshalJSON',
            'errorMessage' => 'An error occurred while parsing JSON.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4E7F94C7-781F-5192-86CF-DB085013C810\\"\\n}","type":"json"}]',
      'title' => '删除ACL模板',
      'summary' => '删除ACL模板。',
    ),
    'DescribePrefixLists' => 
    array (
      'summary' => '查询前缀列表。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SourceIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问者源IP地址。',
            'type' => 'string',
            'required' => false,
            'example' => '47.100.XX.XX',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在的地域ID。',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => '67FD76C2-C493-5815-8107-643FD7AB77C7',
              ),
              'PrefixList' => 
              array (
                'description' => '前缀列表信息组成的数组。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '前缀列表信息组成的数组。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PrefixListId' => 
                    array (
                      'description' => '前缀列表ID。',
                      'type' => 'string',
                      'example' => 'pl-uf64nco3ujjqchx6aaji',
                    ),
                    'PrefixListName' => 
                    array (
                      'description' => '前缀列表的名称。',
                      'type' => 'string',
                      'example' => 'participant-name',
                    ),
                    'Description' => 
                    array (
                      'description' => '描述。',
                      'type' => 'string',
                      'example' => 'TCP_14900-14911',
                    ),
                    'CreationTime' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2023-10-16T08:31:06Z',
                    ),
                    'AssociationCount' => 
                    array (
                      'description' => '关联资源的数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'MaxEntries' => 
                    array (
                      'description' => '前缀列表支持的最大条目容量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '20',
                    ),
                    'AddressFamily' => 
                    array (
                      'description' => '前缀列表的地址族。可能值：

- IPv4。
- IPv6。',
                      'type' => 'string',
                      'example' => 'IPv4',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"67FD76C2-C493-5815-8107-643FD7AB77C7\\",\\n  \\"PrefixList\\": [\\n    {\\n      \\"PrefixListId\\": \\"pl-uf64nco3ujjqchx6aaji\\",\\n      \\"PrefixListName\\": \\"participant-name\\",\\n      \\"Description\\": \\"TCP_14900-14911\\",\\n      \\"CreationTime\\": \\"2023-10-16T08:31:06Z\\",\\n      \\"AssociationCount\\": 2,\\n      \\"MaxEntries\\": 20,\\n      \\"AddressFamily\\": \\"IPv4\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询前缀列表',
    ),
    'CreateDownloadTask' => 
    array (
      'summary' => '创建文件下载任务。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '语言, 枚举值.
默认值: zh
可选值: en',
            'description' => '接收消息的语言类型。

取值：

- **zh**：（默认）中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskData',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下载任务的请求查询条件。',
            'type' => 'string',
            'required' => false,
            'example' => '{\\"SearchItem\\":\\"\\",\\"UserType\\":\\"buy\\",\\"IpVersion\\":\\"4\\"}',
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
              'TaskId' => 
              array (
                'description' => '任务Id，任务的唯一标识。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '132',
              ),
              'RequestId' => 
              array (
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => 'E7F333E0-7B70-54DA-A307-4B2B49DEE923',
              ),
              'TaskName' => 
              array (
                'title' => '',
                'description' => '文件下载任务的名称。',
                'type' => 'string',
                'example' => '互联网边界防火墙资产-IPv4',
              ),
              'Status' => 
              array (
                'description' => '任务状态。取值：

finish：任务完成。即任务已经完成，可以通过查询任务，获取任务文件下载链接。

start：任务开始。

error：任务失败。

expire：任务过期。即任务文件已经失效，无法下载。',
                'type' => 'string',
                'example' => 'start',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TaskId\\": 132,\\n  \\"RequestId\\": \\"E7F333E0-7B70-54DA-A307-4B2B49DEE923\\",\\n  \\"TaskName\\": \\"互联网边界防火墙资产-IPv4\\",\\n  \\"Status\\": \\"start\\"\\n}","type":"json"}]',
      'title' => '创建文件下载任务',
    ),
    'DescribeDownloadTaskType' => 
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '语言, 枚举值.
默认值: zh
可选值: en',
            'description' => '接收消息的语言类型。取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '每页条数, 不得超过100, 超过100会设置为100',
            'description' => '分页查询时，显示的每页数据的最大条数。默认值为10。可设置的最大值为50。',
            'type' => 'string',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，返回第几页数据。
默认值为**1**，表示返回第1页数据。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'TaskType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '任务类型',
            'description' => '任务类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'InternetFirewallAsset',
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
                'title' => '总数',
                'description' => '总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '3',
              ),
              'RequestId' => 
              array (
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => 'B835494C-D093-5524-BBDE-BD272077B40E',
              ),
              'TaskTypeArray' => 
              array (
                'description' => '任务类型列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '任务类型信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TaskName' => 
                    array (
                      'title' => '名称',
                      'description' => '任务类型名称。',
                      'type' => 'string',
                      'example' => '互联网边界防火墙资产',
                    ),
                    'TaskType' => 
                    array (
                      'description' => '任务类型。',
                      'type' => 'string',
                      'example' => 'InternetFirewallAsset',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": 3,\\n  \\"RequestId\\": \\"B835494C-D093-5524-BBDE-BD272077B40E\\",\\n  \\"TaskTypeArray\\": [\\n    {\\n      \\"TaskName\\": \\"互联网边界防火墙资产\\",\\n      \\"TaskType\\": \\"InternetFirewallAsset\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询文件下载任务类型',
      'summary' => '查询下载任务类型。对应下载任务相关接口中的TaskType字段。',
    ),
    'DeleteDownloadTask' => 
    array (
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '语言, 枚举值.
默认值: zh
可选值: en',
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文。

- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件下载任务的任务 ID。',
            'type' => 'string',
            'required' => false,
            'example' => '4376',
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
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => '064022A8-F415-572C-B3C1-657152833F11',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"064022A8-F415-572C-B3C1-657152833F11\\"\\n}","type":"json"}]',
      'title' => '删除文件下载任务',
      'summary' => '删除文件下载任务。',
      'description' => '调用该接口会立即删除文件下载任务，并删除下载文件。
><danger>删除操作会删除对应任务及文件。**对应文件无法再使用已有下载链接下载。此操作不可逆，请谨慎操作。**></danger>',
      'responseParamsDescription' => '成功返回即表明任务已经删除完成。',
    ),
    'DescribeDownloadTask' => 
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
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '语言, 枚举值.
默认值: zh
可选值: en',
            'description' => '接收消息的语言类型。取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '每页条数, 不得超过100, 超过100会设置为100',
            'description' => '分页查询时，显示的每页数据的最大条数。默认为10。
可设置值最大为50。',
            'type' => 'string',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '当前页',
            'description' => '分页查询时，设置当前页的页码。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'TaskType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '任务类型',
            'description' => '任务类型，枚举值。可填枚举值见接口：查询文件下载任务类型。不填默认查询所有文件。',
            'type' => 'string',
            'required' => false,
            'example' => 'InternetFirewallAsset',
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
                'title' => '总数',
                'description' => '任务总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '132',
              ),
              'RequestId' => 
              array (
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => '3F2BED13-F3D0-5984-80D6-D5F298CFEA88',
              ),
              'Tasks' => 
              array (
                'description' => '任务列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '任务信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TaskId' => 
                    array (
                      'title' => '任务id',
                      'description' => '任务id。',
                      'type' => 'string',
                      'example' => '1111',
                    ),
                    'TaskName' => 
                    array (
                      'title' => '名称',
                      'description' => '任务名称。',
                      'type' => 'string',
                      'example' => '互联网边界防火墙资产-IPv4',
                    ),
                    'Status' => 
                    array (
                      'title' => '',
                      'description' => '任务状态。取值：

- **finish**：任务完成。
- **start**：任务开始。
- **error**：任务失败。
- **expire**：任务过期。即任务文件已经失效，无法下载。',
                      'type' => 'string',
                      'example' => 'finish',
                    ),
                    'FileURL' => 
                    array (
                      'description' => 'OSS文件地址。',
                      'type' => 'string',
                      'example' => 'https://cfw-table-download-cn.oss-cn-hangzhou.aliyuncs.com/%E4%BA%92%E8%81%94%E7%BD%91%E8%BE%B9%E7%95%8C%E9%98%B2%E7%81%AB%E5%A2%99%E8%B5%84%E4%BA%A7-IPv4_1069.csv?Expires=1708583913&OSSAccessKeyId=****&Signature=******%3D',
                    ),
                    'FileSize' => 
                    array (
                      'title' => '',
                      'description' => '文件大小。',
                      'type' => 'string',
                      'example' => '24.04KB',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建任务的时间。使用秒级时间戳格式表示。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1706595827',
                    ),
                    'ExpireTime' => 
                    array (
                      'description' => '任务过期的时间。使用秒级时间戳格式表示。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1714371828',
                    ),
                    'TaskType' => 
                    array (
                      'description' => '任务类型。',
                      'type' => 'string',
                      'example' => 'InternetFirewallAsset',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": 132,\\n  \\"RequestId\\": \\"3F2BED13-F3D0-5984-80D6-D5F298CFEA88\\",\\n  \\"Tasks\\": [\\n    {\\n      \\"TaskId\\": \\"1111\\",\\n      \\"TaskName\\": \\"互联网边界防火墙资产-IPv4\\",\\n      \\"Status\\": \\"finish\\",\\n      \\"FileURL\\": \\"https://cfw-table-download-cn.oss-cn-hangzhou.aliyuncs.com/%E4%BA%92%E8%81%94%E7%BD%91%E8%BE%B9%E7%95%8C%E9%98%B2%E7%81%AB%E5%A2%99%E8%B5%84%E4%BA%A7-IPv4_1069.csv?Expires=1708583913&OSSAccessKeyId=****&Signature=******%3D\\",\\n      \\"FileSize\\": \\"24.04KB\\",\\n      \\"CreateTime\\": 1706595827,\\n      \\"ExpireTime\\": 1714371828,\\n      \\"TaskType\\": \\"InternetFirewallAsset\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询文件下载任务',
      'summary' => '查询文件下载任务，包括任务信息以及下载地址。',
    ),
    'DeleteNatFirewallControlPolicyBatch' => 
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：
- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'AclUuidList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'ACL uuid 列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'ACL uuid。',
              'type' => 'string',
              'required' => false,
              'example' => '6fb052a4-baad-4d86-8e2e-b79cc060535c',
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        2 => 
        array (
          'name' => 'NatGatewayId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'NAT网关的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ngw-uf6j0426ap74vd6vrb676',
          ),
        ),
        3 => 
        array (
          'name' => 'Direction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略的流量方向。取值：
- **out**：内对外流量。',
            'type' => 'string',
            'required' => false,
            'example' => 'out',
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
                'description' => '结果的请求ID。',
                'type' => 'string',
                'example' => '450D47F5-956E-543E-8502-2F71C8C54E72',
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
            'errorCode' => 'ErrorParametersUid',
            'errorMessage' => 'The aliUid parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorDBSelect',
            'errorMessage' => 'An error occurred while querying database.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorDBDelete',
            'errorMessage' => 'An error occurred while deleting the database.',
          ),
          3 => 
          array (
            'errorCode' => 'ErrorRecordLog',
            'errorMessage' => 'An error occurred while updating the operation log.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"450D47F5-956E-543E-8502-2F71C8C54E72\\"\\n}","type":"json"}]',
      'title' => '批量删除NAT防火墙策略',
      'summary' => '批量删除NAT防火墙策略。',
    ),
    'ResetNatFirewallRuleHitCount' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：
- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'AclUuid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略唯一标识。',
            'type' => 'string',
            'required' => true,
            'example' => '3de3aed5-6de7-4ecd-9106-cfe994b9c49f',
          ),
        ),
        2 => 
        array (
          'name' => 'NatGatewayId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'NAT网关的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'ngw-zm0h3c1exm5bifuorg8c5',
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
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => '5CAA0FFD-4B94-5BB9-8B0A-ECFC86A0E666',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        200 => 
        array (
          0 => 
          array (
            'errorCode' => 'ErrorDBUpdateError',
            'errorMessage' => 'A database update error occurred.',
          ),
        ),
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ErrorParametersUid',
            'errorMessage' => 'The aliUid parameter is invalid.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5CAA0FFD-4B94-5BB9-8B0A-ECFC86A0E666\\"\\n}","type":"json"}]',
      'title' => '重置NAT防火墙命中数',
      'summary' => '重置NAT防火墙命中数。',
    ),
    'DescribeNatAclPageStatus' => 
    array (
      'summary' => '查询NAT防火墙分页状态。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文。

- **en**：英文。',
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
            'type' => 'object',
            'properties' => 
            array (
              'NatAclPageEnable' => 
              array (
                'description' => '是否支持NAT ACL独立页面支持。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'RequestId' => 
              array (
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => 'B97F9AD7-A2DB-5F8F-9206-DF89DE0AC9E8',
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
            'errorCode' => 'ErrorParametersUid',
            'errorMessage' => 'The aliUid parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorParametersPageSizeOrNo',
            'errorMessage' => 'Either pageSize or pageNo is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorParameterIpVersion',
            'errorMessage' => 'The IP version is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'ErrorParametersDirection',
            'errorMessage' => 'The direction is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'ErrorDBSelect',
            'errorMessage' => 'An error occurred while querying database.',
          ),
          5 => 
          array (
            'errorCode' => 'ErrorUnmarshalJSON',
            'errorMessage' => 'An error occurred while parsing JSON.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NatAclPageEnable\\": true,\\n  \\"RequestId\\": \\"B97F9AD7-A2DB-5F8F-9206-DF89DE0AC9E8\\"\\n}","type":"json"}]',
      'title' => '查询NAT防火墙分页状态',
    ),
    'DescribeInstanceRiskLevels' => 
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
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收消息的语言类型。取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'Instances',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '实例列表信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Uuid' => 
                array (
                  'description' => '实例的UUID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '181ad081-e4f2-4e3e-b925-03b67f648397',
                ),
                'InstanceId' => 
                array (
                  'description' => '云防火墙的ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'vipcloudfw-cn-7mz2fj8nm0u',
                ),
                'IntranetIp' => 
                array (
                  'description' => '实例的私网IP。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '172.17.XX.XX',
                ),
                'InternetIp' => 
                array (
                  'description' => '实例的公网IP。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '实例的公网IP。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '60.205.XX.XX',
                  ),
                  'required' => false,
                  'maxItems' => 100,
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
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => '9AABB1B7-C81F-5158-9EF9-B2DD5D3DA014',
              ),
              'InstanceRisks' => 
              array (
                'description' => '实例风险列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'InstanceId' => 
                    array (
                      'description' => '云防火墙实例的ID。',
                      'type' => 'string',
                      'example' => 'vipcloudfw-cn-7mz2fj8nm0u',
                    ),
                    'Level' => 
                    array (
                      'description' => '风险等级。取值包括：
- **medium**：中等',
                      'type' => 'string',
                      'example' => 'medium',
                    ),
                    'Details' => 
                    array (
                      'description' => 'ECS实例风险列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'ECS实例风险列表。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Ip' => 
                          array (
                            'description' => '服务器IP地址。',
                            'type' => 'string',
                            'example' => '203.107.XX.XX',
                          ),
                          'Type' => 
                          array (
                            'description' => '类型。',
                            'type' => 'string',
                            'example' => 'ResourceNotProtected',
                          ),
                          'Level' => 
                          array (
                            'description' => '风险等级。取值包括：
- **medium**：中等',
                            'type' => 'string',
                            'example' => 'medium',
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9AABB1B7-C81F-5158-9EF9-B2DD5D3DA014\\",\\n  \\"InstanceRisks\\": [\\n    {\\n      \\"InstanceId\\": \\"vipcloudfw-cn-7mz2fj8nm0u\\",\\n      \\"Level\\": \\"medium\\",\\n      \\"Details\\": [\\n        {\\n          \\"Ip\\": \\"203.107.XX.XX\\",\\n          \\"Type\\": \\"ResourceNotProtected\\",\\n          \\"Level\\": \\"medium\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询实例风险等级',
      'summary' => '查询实例风险等级。',
    ),
    'DescribeCfwRiskLevelSummary' => 
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收消息的语言类型。

取值包括：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云防火墙所在的地域ID。
>  关于云防火墙支持地域的详细信息，请参见[支持的地域](~~195657~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'EcsEIP',
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
                'description' => '结果的请求ID。',
                'type' => 'string',
                'example' => 'F1F30435-FA0A-52DA-A5DE-C16FD6C171DA',
              ),
              'RiskList' => 
              array (
                'description' => '风险列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '风险列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Type' => 
                    array (
                      'description' => '类型。',
                      'type' => 'string',
                      'example' => 'ResourceNotProtected',
                    ),
                    'Num' => 
                    array (
                      'description' => '风险ECS数量。',
                      'type' => 'string',
                      'example' => '50',
                    ),
                    'Level' => 
                    array (
                      'description' => '风险等级。取值包括：
- **medium**：中等',
                      'type' => 'string',
                      'example' => 'medium',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F1F30435-FA0A-52DA-A5DE-C16FD6C171DA\\",\\n  \\"RiskList\\": [\\n    {\\n      \\"Type\\": \\"ResourceNotProtected\\",\\n      \\"Num\\": \\"50\\",\\n      \\"Level\\": \\"medium\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询防火墙风险等级',
      'summary' => '查询防火墙风险等级。',
    ),
    'DescribeVpcZone' => 
    array (
      'summary' => '查询VPC zone。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'MemberUid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云防火墙成员账号的UID。',
            'type' => 'string',
            'required' => false,
            'example' => '1415189284827022',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
          ),
        ),
        3 => 
        array (
          'name' => 'Environment',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '环境。取值：
- **VPC**：VPC
- **TransitRouter**：TransitRouter',
            'type' => 'string',
            'required' => false,
            'example' => 'VPC',
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
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => '694DFBF3-C060-529F-92D0-7FC7E0DA1E21',
              ),
              'ZoneList' => 
              array (
                'description' => '可用区列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '可用区列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ZoneId' => 
                    array (
                      'description' => '可用区ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou-b',
                    ),
                    'LocalName' => 
                    array (
                      'description' => '可用区名称。',
                      'type' => 'string',
                      'example' => '华东 1 可用区 B',
                    ),
                    'ZoneType' => 
                    array (
                      'description' => '查询到的可用区的类型，默认取值为 AvailabilityZone 即普通云上可用区。',
                      'type' => 'string',
                      'example' => 'AvailabilityZone',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"694DFBF3-C060-529F-92D0-7FC7E0DA1E21\\",\\n  \\"ZoneList\\": [\\n    {\\n      \\"ZoneId\\": \\"cn-hangzhou-b\\",\\n      \\"LocalName\\": \\"华东 1 可用区 B\\",\\n      \\"ZoneType\\": \\"AvailabilityZone\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询VPC zone',
    ),
    'DescribeSignatureLibVersion' => 
    array (
      'summary' => '查询特征库版本信息。',
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
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
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
              'TotalCount' => 
              array (
                'title' => '总数',
                'description' => '总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '132',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '9C50C2A9-4BBB-5504-8ADA-C41A79B8C946',
              ),
              'Version' => 
              array (
                'description' => '版本信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '版本号。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Type' => 
                    array (
                      'title' => '类型',
                      'description' => '类型。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'ips' => '基础防御和虚拟补丁',
                        'intelligence' => '威胁情报',
                      ),
                      'example' => 'ips',
                    ),
                    'Version' => 
                    array (
                      'title' => '版本',
                      'description' => '版本。',
                      'type' => 'string',
                      'example' => 'IPS-2307-02',
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
            'errorCode' => 'IdempotentParameterMismatch',
            'errorMessage' => 'The request uses the same client token as a previous, but non-identical request. Do not reuse a client token with different requests, unless the requests are identical.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": 132,\\n  \\"RequestId\\": \\"9C50C2A9-4BBB-5504-8ADA-C41A79B8C946\\",\\n  \\"Version\\": [\\n    {\\n      \\"Type\\": \\"ips\\",\\n      \\"Version\\": \\"IPS-2307-02\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询特征库版本信息',
    ),
    'DescribePostpayTrafficTotal' => 
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
        'abilityTreeCode' => '183500',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcfwVPGXSE',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '语言, 枚举值.
默认值: zh
可选值: en',
            'description' => '接收消息的语言类型。取值：
- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
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
              'TotalAssets' => 
              array (
                'title' => '总数',
                'description' => '所有边界防护总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '132',
              ),
              'RequestId' => 
              array (
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => '826B6280-9704-5643-97B1-6B47AC3F027A',
              ),
              'TotalTraffic' => 
              array (
                'description' => '总流量。包年包月版本对应为弹性处理总流量。单位：Byte。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2320274874426',
              ),
              'TotalNatAssets' => 
              array (
                'description' => 'NAT边界防护总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'TotalNatTraffic' => 
              array (
                'description' => 'NAT边界总流量。包年包月版本对应为NAT边界弹性处理总流量。单位：Byte。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '560646279',
              ),
              'TotalVpcAssets' => 
              array (
                'description' => 'VPC边界防护总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '3',
              ),
              'TotalVpcTraffic' => 
              array (
                'description' => 'VPC边界总流量。包年包月版本对应为VPC边界弹性处理总流量。单位：Byte。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2320274874426',
              ),
              'TotalInternetAssets' => 
              array (
                'description' => '互联网边界防护总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '128',
              ),
              'TotalInternetTraffic' => 
              array (
                'description' => '互联网边界总流量。包年包月版本对应为互联网边界弹性处理总流量。单位：Byte。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2320274874426',
              ),
              'TotalBillTraffic' => 
              array (
                'description' => '包年包月版本对应为弹性处理总出账流量，即减免后的流量大小。单位：Byte。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2320274874426',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalAssets\\": 132,\\n  \\"RequestId\\": \\"826B6280-9704-5643-97B1-6B47AC3F027A\\",\\n  \\"TotalTraffic\\": 2320274874426,\\n  \\"TotalNatAssets\\": 1,\\n  \\"TotalNatTraffic\\": 560646279,\\n  \\"TotalVpcAssets\\": 3,\\n  \\"TotalVpcTraffic\\": 2320274874426,\\n  \\"TotalInternetAssets\\": 128,\\n  \\"TotalInternetTraffic\\": 2320274874426,\\n  \\"TotalBillTraffic\\": 2320274874426\\n}","type":"json"}]',
      'title' => '查询后付费计费流量总计',
      'summary' => '查询后付费计费流量总计，包括各个边界防火墙。',
      'description' => '统计范围为该用户当前云防火墙实例，包括自购买之日起的所有数据。',
    ),
    'DescribePostpayTrafficDetail' => 
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
        'abilityTreeCode' => '183328',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcfwVPGXSE',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '语言, 枚举值.
默认值: zh
可选值: en',
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，显示的每页数据的最大条数。默认值为10。可设置的最大值为50。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，显示的当前页的页码。
默认值为1。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '任务类型',
            'description' => '设置查询开始时间。使用YYYYMMDD格式的日期表示。',
            'type' => 'string',
            'required' => true,
            'example' => '20240101',
          ),
        ),
        4 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置查询结束时间。使用YYYYMMDD格式的日期表示。',
            'type' => 'string',
            'required' => true,
            'example' => '20240131',
          ),
        ),
        5 => 
        array (
          'name' => 'SearchItem',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资产的IP或者实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => '192.0.XX.XX',
          ),
        ),
        6 => 
        array (
          'name' => 'TrafficType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '统计流量的边界类型。必填。取值：
          
- **EIP_TRAFFIC**：互联网边界流量。
  
- **NatGateway_TRAFFIC**：NAT边界流量。
- **VPC_TRAFFIC**：VPC边界流量。',
            'type' => 'string',
            'required' => true,
            'example' => 'VPC_TRAFFIC',
          ),
        ),
        7 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按照指定的字段排序。取值：

- **resourceId**：资源ID。
- **trafficDay**：日期。',
            'type' => 'string',
            'required' => false,
            'example' => 'resourceId',
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
                'title' => '总数',
                'description' => '流量统计总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '132',
              ),
              'RequestId' => 
              array (
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => '0525EADE-C112-5702-A5BC-0E2F6F94DB23',
              ),
              'TrafficList' => 
              array (
                'description' => '流量统计列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '流量统计信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TrafficDay' => 
                    array (
                      'description' => '流量统计日期。',
                      'type' => 'string',
                      'example' => '20231001',
                    ),
                    'TrafficType' => 
                    array (
                      'description' => '统计流量的边界类型。取值：
          
- **EIP_TRAFFIC**：互联网边界流量。
  
- **NatGateway_TRAFFIC**：NAT边界流量。
- **VPC_TRAFFIC**：VPC边界流量。',
                      'type' => 'string',
                      'example' => 'EIP_TRAFFIC',
                    ),
                    'InstanceId' => 
                    array (
                      'description' => '资产实例的ID。',
                      'type' => 'string',
                      'example' => 'i-8vb2d7c9mtn0bo9qcraq',
                    ),
                    'ResourceId' => 
                    array (
                      'description' => '资源ID。互联网边界为资产的公网IP，NAT边界为资产的防火墙实例ID。',
                      'type' => 'string',
                      'example' => '39.106.146.214',
                    ),
                    'InstanceType' => 
                    array (
                      'description' => '资产类型。仅互联网边界该值生效。',
                      'type' => 'string',
                      'example' => 'EcsPublicIP',
                    ),
                    'TotalBytes' => 
                    array (
                      'description' => '出方向和入方向总的网络吞吐量（总共发送和接收多少字节）。单位：Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1215096939',
                    ),
                    'InBytes' => 
                    array (
                      'description' => '入方向的网络吞吐量（总计字节数）。单位：Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1115096939',
                    ),
                    'OutBytes' => 
                    array (
                      'description' => '出方向的网络吞吐量（总计字节数）。单位：Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '100000000',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": 132,\\n  \\"RequestId\\": \\"0525EADE-C112-5702-A5BC-0E2F6F94DB23\\",\\n  \\"TrafficList\\": [\\n    {\\n      \\"TrafficDay\\": \\"20231001\\",\\n      \\"TrafficType\\": \\"EIP_TRAFFIC\\",\\n      \\"InstanceId\\": \\"i-8vb2d7c9mtn0bo9qcraq\\",\\n      \\"ResourceId\\": \\"39.106.146.214\\",\\n      \\"InstanceType\\": \\"EcsPublicIP\\",\\n      \\"TotalBytes\\": 1215096939,\\n      \\"InBytes\\": 1115096939,\\n      \\"OutBytes\\": 100000000\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询后付费计费流量明细',
      'summary' => '查询后付费计费流量明细。',
      'description' => '该明细对于按量付费用户精确至具体资源实例粒度，对于包年包月用户仅支持整体查询。',
    ),
    'BatchDeleteVpcFirewallControlPolicy' => 
    array (
      'summary' => '批量删除VPC防火墙访问控制策略。',
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
        0 => 
        array (
          'name' => 'VpcFirewallId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC边界防火墙的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'vfw-m5e7dbc4y****',
          ),
        ),
        1 => 
        array (
          'name' => 'AclUuidList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'ACL UUID 列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'ACL UUID 列表。',
              'type' => 'string',
              'required' => false,
              'example' => '6fb052a4-baad-4d86-8e2e-b79cc060535c',
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
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => 'B2841452-CB8D-4F7D-B247-38E1CF7334F8',
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
            'errorCode' => 'ErrorParametersUid',
            'errorMessage' => 'The aliUid parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorDBSelect',
            'errorMessage' => 'An error occurred while querying database.',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorRecordLog',
            'errorMessage' => 'An error occurred while updating the operation log.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B2841452-CB8D-4F7D-B247-38E1CF7334F8\\"\\n}","type":"json"}]',
      'title' => '批量删除VPC防火墙访问控制策略',
    ),
    'DescribeDefaultIPSConfig' => 
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
        'abilityTreeCode' => '68241',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcfw1FTUMS',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收消息的语言类型。取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
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
                'description' => '结果的请求ID。',
                'type' => 'string',
                'example' => '133173B9-8010-5DF5-8B93-********',
              ),
              'RuleClass' => 
              array (
                'description' => 'IPS规则组。取值：

- **1**：宽松规则组。

- **2**：中等规则组。

- **3**：严格规则组。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '3',
              ),
              'CtiRules' => 
              array (
                'description' => '威胁情报。取值：

- **1**：开启。

- **0**：关闭。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'PatchRules' => 
              array (
                'description' => '虚拟补丁开关。取值：
- **1**：开启。

- **0**：关闭。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RunMode' => 
              array (
                'description' => 'IPS防御模式。取值：

- **1**：拦截模式。

- **0**：观察模式。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'BasicRules' => 
              array (
                'description' => '基础规则开关。取值：

- **1**：开启。

- **0**：关闭。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"133173B9-8010-5DF5-8B93-********\\",\\n  \\"RuleClass\\": 3,\\n  \\"CtiRules\\": 0,\\n  \\"PatchRules\\": 0,\\n  \\"RunMode\\": 0,\\n  \\"BasicRules\\": 0\\n}","type":"json"}]',
      'title' => '获取默认的IPS配置',
      'summary' => '获取默认的IPS配置。',
    ),
    'ModifyDefaultIPSConfig' => 
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
        'abilityTreeCode' => '68470',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcfw1FTUMS',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文。

- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'CtiRules',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '威胁情报开关。取值：

- **1**：开启。

- **0**：关闭。',
            'type' => 'string',
            'required' => true,
            'example' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'BasicRules',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '基础规则开关。取值：

- **1**：开启。

- **0**：关闭。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PatchRules',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟补丁开关。取值：

- **1**：开启。

- **0**：关闭。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'RunMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPS防御模式。取值：

- **1**：拦截模式。

- **0**：观察模式。',
            'type' => 'string',
            'required' => true,
            'example' => '0',
          ),
        ),
        5 => 
        array (
          'name' => 'RuleClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPS规则组。取值：

- **1**：宽松规则组。

- **2**：中等规则组。

- **3**：严格规则组。',
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
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => '65885B52-00EC-5728-96******',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"65885B52-00EC-5728-96******\\"\\n}","type":"json"}]',
      'title' => '修改默认IPS配置',
      'summary' => '修改默认IPS配置。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'ap-northeast-2-pop',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-beijing-finance-pop',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-beijing-gov-1',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-beijing-nu16-b01',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-edge-1',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'cn-fujian',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'cn-haidian-cm12-c01',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'cn-hangzhou-bj-b01',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'cn-hangzhou-internal-prod-1',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-1',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-2',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-3',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'cn-hangzhou-test-306',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-hongkong-finance-pop',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-huhehaote-nebula-1',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'cn-north-2-gov-1',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    26 => 
    array (
      'regionId' => 'cn-qingdao-nebula',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    27 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    28 => 
    array (
      'regionId' => 'cn-shanghai-et15-b01',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    29 => 
    array (
      'regionId' => 'cn-shanghai-et2-b01',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    30 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    31 => 
    array (
      'regionId' => 'cn-shanghai-inner',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    32 => 
    array (
      'regionId' => 'cn-shanghai-internal-test-1',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    33 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    34 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    35 => 
    array (
      'regionId' => 'cn-shenzhen-inner',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    36 => 
    array (
      'regionId' => 'cn-shenzhen-st4-d01',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    37 => 
    array (
      'regionId' => 'cn-shenzhen-su18-b01',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    38 => 
    array (
      'regionId' => 'cn-wuhan',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    39 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    40 => 
    array (
      'regionId' => 'cn-yushanfang',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    41 => 
    array (
      'regionId' => 'cn-zhangbei-na61-b01',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    42 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    43 => 
    array (
      'regionId' => 'cn-zhangjiakou-na62-a01',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    44 => 
    array (
      'regionId' => 'cn-zhengzhou-nebula-1',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    45 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    46 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    47 => 
    array (
      'regionId' => 'eu-west-1-oxs',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    48 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    49 => 
    array (
      'regionId' => 'rus-west-1-pop',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    50 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    51 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    52 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    53 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    54 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    55 => 
    array (
      'regionId' => 'cn-heyuan',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    56 => 
    array (
      'regionId' => 'cn-guangzhou',
      'endpoint' => 'cloudfw.aliyuncs.com',
    ),
    57 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'cloudfw.ap-southeast-1.aliyuncs.com',
    ),
  ),
);
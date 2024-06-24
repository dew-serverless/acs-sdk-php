<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'csas',
    'version' => '2023-01-20',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 191724,
      'title' => '身份源配置管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListIdpConfigs',
        1 => 'GetIdpConfig',
        2 => 'GetActiveIdpConfig',
        3 => 
        array (
          'id' => 191728,
          'title' => '自定义身份源',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'ListIdpDepartments',
            1 => 'CreateIdpDepartment',
            2 => 'ListClientUsers',
            3 => 'UpdateClientUser',
            4 => 'GetClientUser',
            5 => 'DeleteIdpDepartment',
            6 => 'CreateClientUser',
            7 => 'UpdateIdpDepartment',
            8 => 'UpdateClientUserStatus',
            9 => 'DeleteClientUser',
            10 => 'UpdateClientUserPassword',
          ),
        ),
      ),
    ),
    1 => 
    array (
      'id' => 185976,
      'title' => '终端设备管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'UpdateUserDevicesStatus',
        1 => 'ListExcessiveDeviceRegistrationApplications',
        2 => 'UpdateExcessiveDeviceRegistrationApplicationsStatus',
        3 => 'UpdateUserDevicesSharingStatus',
        4 => 'ListUserDevices',
        5 => 'ExportUserDevices',
        6 => 'GetUserDevice',
        7 => 'DeleteUserDevices',
        8 => 'ListSoftwareForUserDevice',
      ),
    ),
    2 => 
    array (
      'id' => 185984,
      'title' => '设备注册策略',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListRegistrationPolicies',
        1 => 'ListUserGroupsForRegistrationPolicy',
        2 => 'ListRegistrationPoliciesForUserGroup',
        3 => 'GetRegistrationPolicy',
        4 => 'DeleteRegistrationPolicies',
        5 => 'UpdateRegistrationPolicy',
        6 => 'CreateRegistrationPolicy',
      ),
    ),
    3 => 
    array (
      'id' => 181189,
      'title' => '用户组',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListUserGroups',
        1 => 'ListPolicesForUserGroup',
        2 => 'GetUserGroup',
        3 => 'CreateUserGroup',
        4 => 'DeleteUserGroup',
        5 => 'UpdateUserGroup',
      ),
    ),
    4 => 
    array (
      'id' => 190835,
      'title' => '用户管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListUsers',
        1 => 'UpdateUsersStatus',
      ),
    ),
    5 => 
    array (
      'id' => 181191,
      'title' => '内网访问应用',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListPrivateAccessApplications',
        1 => 'ListTagsForPrivateAccessApplication',
        2 => 'ListPolicesForPrivateAccessApplication',
        3 => 'GetPrivateAccessApplication',
        4 => 'CreatePrivateAccessApplication',
        5 => 'DeletePrivateAccessApplication',
        6 => 'UpdatePrivateAccessApplication',
      ),
    ),
    6 => 
    array (
      'id' => 181192,
      'title' => 'Connector',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListConnectors',
        1 => 'AttachApplication2Connector',
        2 => 'DetachApplication2Connector',
      ),
    ),
    7 => 
    array (
      'id' => 181193,
      'title' => '内网访问标签',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListPrivateAccessTags',
        1 => 'ListApplicationsForPrivateAccessTag',
        2 => 'ListPolicesForPrivateAccessTag',
        3 => 'CreatePrivateAccessTag',
        4 => 'DeletePrivateAccessTag',
      ),
    ),
    8 => 
    array (
      'id' => 181194,
      'title' => '内网访问策略',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListPrivateAccessPolices',
        1 => 'ListUserGroupsForPrivateAccessPolicy',
        2 => 'ListApplicationsForPrivateAccessPolicy',
        3 => 'ListTagsForPrivateAccessPolicy',
        4 => 'GetPrivateAccessPolicy',
        5 => 'CreatePrivateAccessPolicy',
        6 => 'DeletePrivateAccessPolicy',
        7 => 'UpdatePrivateAccessPolicy',
      ),
    ),
    9 => 
    array (
      'id' => 182283,
      'title' => '全球办公',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListDynamicRoutes',
        1 => 'ListPrivateAccessApplicationsForDynamicRoute',
        2 => 'ListPrivateAccessTagsForDynamicRoute',
        3 => 'GetDynamicRoute',
        4 => 'ListDynamicRouteRegions',
        5 => 'CreateDynamicRoute',
        6 => 'UpdateDynamicRoute',
        7 => 'DeleteDynamicRoute',
      ),
    ),
    10 => 
    array (
      'id' => 193109,
      'title' => '数字水印',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'LookupWmInfoMapping',
        1 => 'CreateWmInfoMapping',
        2 => 'CreateWmBaseImage',
        3 => 'GetWmExtractTask',
        4 => 'GetWmEmbedTask',
        5 => 'CreateWmExtractTask',
        6 => 'CreateWmEmbedTask',
      ),
    ),
    11 => 
    array (
      'id' => 190079,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'RevokeUserSession',
        1 => 'ListPopTrafficStatistics',
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
    'ListIdpConfigs' => 
    array (
      'summary' => '查询当前阿里云账户身份源配置信息。',
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
        'abilityTreeCode' => '215351',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcsas62O8LY',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'minimum' => '1',
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
            'description' => '分页大小。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'Include',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的身份源配置类型。多个类型以","分隔。',
            'type' => 'string',
            'required' => false,
            'example' => 'CSAS,DingTalk,LDAP',
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
                'example' => 'FD724DBC-CD76-5235-BF76-59C51B73296D',
              ),
              'Data' => 
              array (
                'description' => '身份源配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalNum' => 
                  array (
                    'description' => '记录总数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'DataList' => 
                  array (
                    'description' => '身份源配置列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Id' => 
                        array (
                          'description' => '身份源配置ID。',
                          'type' => 'string',
                          'example' => '277',
                        ),
                        'Name' => 
                        array (
                          'description' => '身份源配置名称。',
                          'type' => 'string',
                          'example' => '示例身份源',
                        ),
                        'Type' => 
                        array (
                          'description' => '身份源配置类型。',
                          'type' => 'string',
                          'example' => 'DingTalk',
                        ),
                        'Description' => 
                        array (
                          'description' => '身份源配置描述。',
                          'type' => 'string',
                          'example' => '示例描述',
                        ),
                        'Mfa' => 
                        array (
                          'description' => '二次认证类型。',
                          'type' => 'string',
                          'example' => 'totp',
                        ),
                        'MobileLoginType' => 
                        array (
                          'description' => '移动端登录类型。',
                          'type' => 'string',
                          'example' => 'password',
                        ),
                        'MobileMfaConfigType' => 
                        array (
                          'description' => '移动端二次认证配置类型。',
                          'type' => 'string',
                          'example' => 'password',
                        ),
                        'MultiIdpInfo' => 
                        array (
                          'description' => '多身份源配置ID列表。',
                          'type' => 'string',
                          'example' => '1482,1355',
                        ),
                        'PcLoginType' => 
                        array (
                          'description' => 'PC端登录类型。',
                          'type' => 'string',
                          'example' => 'password',
                        ),
                        'Status' => 
                        array (
                          'description' => '身份源配置启用状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。',
                          'type' => 'string',
                          'example' => 'Disabled',
                        ),
                        'UpdateTime' => 
                        array (
                          'description' => '更新时间。',
                          'type' => 'string',
                          'example' => '2023-05-09T02:22:41.430Z',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FD724DBC-CD76-5235-BF76-59C51B73296D\\",\\n  \\"Data\\": {\\n    \\"TotalNum\\": 1,\\n    \\"DataList\\": [\\n      {\\n        \\"Id\\": \\"277\\",\\n        \\"Name\\": \\"示例身份源\\",\\n        \\"Type\\": \\"DingTalk\\",\\n        \\"Description\\": \\"示例描述\\",\\n        \\"Mfa\\": \\"totp\\",\\n        \\"MobileLoginType\\": \\"password\\",\\n        \\"MobileMfaConfigType\\": \\"password\\",\\n        \\"MultiIdpInfo\\": \\"1482,1355\\",\\n        \\"PcLoginType\\": \\"password\\",\\n        \\"Status\\": \\"Disabled\\",\\n        \\"UpdateTime\\": \\"2023-05-09T02:22:41.430Z\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询身份源配置信息',
    ),
    'GetIdpConfig' => 
    array (
      'summary' => '查询当前阿里云账户指定的身份源配置详情信息。',
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
        'abilityTreeCode' => '215357',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcsas62O8LY',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '身份源配置ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1465',
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
                'example' => '58D6B23E-E5DA-5418-8F61-51A3B5A30049',
              ),
              'Data' => 
              array (
                'description' => '身份源配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'Id' => 
                  array (
                    'description' => '身份源配置ID。',
                    'type' => 'string',
                    'example' => '1465',
                  ),
                  'Name' => 
                  array (
                    'description' => '身份源配置名称。',
                    'type' => 'string',
                    'example' => '示例身份源',
                  ),
                  'Type' => 
                  array (
                    'description' => '身份源配置类型。',
                    'type' => 'string',
                    'example' => 'CSAS',
                  ),
                  'IdpMetadata' => 
                  array (
                    'description' => '身份提供商IdP的元数据。',
                    'type' => 'string',
                    'example' => '<?xml version="1.0" encoding="utf-8"?>***',
                  ),
                  'AccessKey' => 
                  array (
                    'description' => 'AccessKey ID',
                    'type' => 'string',
                    'example' => 'LTAI5tJVztnh6N****',
                  ),
                  'AccessKeySecret' => 
                  array (
                    'description' => 'AccessKey Secret',
                    'type' => 'string',
                    'example' => 'E75ktr5jENiR3ssj****',
                  ),
                  'Status' => 
                  array (
                    'description' => '身份源配置启用状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。',
                    'type' => 'string',
                    'example' => 'Enabled',
                  ),
                  'MfaConfigType' => 
                  array (
                    'description' => '二次认证配置类型。',
                    'type' => 'string',
                    'example' => 'totp',
                  ),
                  'UpdateTime' => 
                  array (
                    'description' => '更新时间。',
                    'type' => 'string',
                    'example' => '2024-02-26T02:02:42Z',
                  ),
                  'GetGroupUrl' => 
                  array (
                    'description' => '自建身份源查询组织架构链接地址。',
                    'type' => 'string',
                    'example' => 'https://172.10.XX.XX:4321/getGroup?name=%s&pass=%s',
                  ),
                  'Description' => 
                  array (
                    'description' => '身份源配置描述。',
                    'type' => 'string',
                    'example' => '示例身份源',
                  ),
                  'MultiIdpInfo' => 
                  array (
                    'description' => '多身份源配置ID列表。',
                    'type' => 'string',
                    'example' => '1482,1355',
                  ),
                  'PcLoginType' => 
                  array (
                    'description' => 'PC端登录类型。',
                    'type' => 'string',
                    'example' => 'password',
                  ),
                  'MobileLoginType' => 
                  array (
                    'description' => '移动端登录类型。',
                    'type' => 'string',
                    'example' => 'password',
                  ),
                  'MobileMfaConfigType' => 
                  array (
                    'description' => '移动端二次认证配置类型。',
                    'type' => 'string',
                    'example' => 'totp',
                  ),
                  'VerifyToken' => 
                  array (
                    'description' => '自建二次认证服务请求签名校验Token',
                    'type' => 'string',
                    'example' => '7JAr3fYtn****',
                  ),
                  'VerifyAesKey' => 
                  array (
                    'description' => '自建二次认证服务请求加密密钥。',
                    'type' => 'string',
                    'example' => 'QVhaU0RDR0JIWV****',
                  ),
                  'VerifyUrl' => 
                  array (
                    'description' => '自建二次认证服务验证链接地址。',
                    'type' => 'string',
                    'example' => 'http://172.10.XX.XX:1234/otp_verify',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"58D6B23E-E5DA-5418-8F61-51A3B5A30049\\",\\n  \\"Data\\": {\\n    \\"Id\\": \\"1465\\",\\n    \\"Name\\": \\"示例身份源\\",\\n    \\"Type\\": \\"CSAS\\",\\n    \\"IdpMetadata\\": \\"<?xml version=\\\\\\"1.0\\\\\\" encoding=\\\\\\"utf-8\\\\\\"?>***\\",\\n    \\"AccessKey\\": \\"LTAI5tJVztnh6N****\\",\\n    \\"AccessKeySecret\\": \\"E75ktr5jENiR3ssj****\\",\\n    \\"Status\\": \\"Enabled\\",\\n    \\"MfaConfigType\\": \\"totp\\",\\n    \\"UpdateTime\\": \\"2024-02-26T02:02:42Z\\",\\n    \\"GetGroupUrl\\": \\"https://172.10.XX.XX:4321/getGroup?name=%s&pass=%s\\",\\n    \\"Description\\": \\"示例身份源\\",\\n    \\"MultiIdpInfo\\": \\"1482,1355\\",\\n    \\"PcLoginType\\": \\"password\\",\\n    \\"MobileLoginType\\": \\"password\\",\\n    \\"MobileMfaConfigType\\": \\"totp\\",\\n    \\"VerifyToken\\": \\"7JAr3fYtn****\\",\\n    \\"VerifyAesKey\\": \\"QVhaU0RDR0JIWV****\\",\\n    \\"VerifyUrl\\": \\"http://172.10.XX.XX:1234/otp_verify\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询身份源配置详情',
    ),
    'GetActiveIdpConfig' => 
    array (
      'summary' => '查询当前阿里云账户已启用的身份源配置。',
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
        'abilityTreeCode' => '215457',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcsas62O8LY',
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
                'example' => '4D169859-A4F2-5EC8-853B-8447787C0D8A',
              ),
              'Data' => 
              array (
                'description' => '身份源配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'Id' => 
                  array (
                    'description' => '身份源配置ID。',
                    'type' => 'string',
                    'example' => 'idp-cfg001',
                  ),
                  'Name' => 
                  array (
                    'description' => '身份源配置名称。',
                    'type' => 'string',
                    'example' => '测试身份源',
                  ),
                  'Type' => 
                  array (
                    'description' => '身份源配置类型。',
                    'type' => 'string',
                    'example' => 'DingTalk',
                  ),
                  'Description' => 
                  array (
                    'description' => '身份源配置描述。',
                    'type' => 'string',
                    'example' => '示例身份源',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4D169859-A4F2-5EC8-853B-8447787C0D8A\\",\\n  \\"Data\\": {\\n    \\"Id\\": \\"idp-cfg001\\",\\n    \\"Name\\": \\"测试身份源\\",\\n    \\"Type\\": \\"DingTalk\\",\\n    \\"Description\\": \\"示例身份源\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询已启用的身份源配置',
    ),
    'ListIdpDepartments' => 
    array (
      'summary' => '查询当前阿里云账户自定义身份源部门信息。',
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
        'abilityTreeCode' => '215359',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcsas62O8LY',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IdpConfigId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义身份源配置ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1440',
          ),
        ),
        1 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码。',
            'type' => 'integer',
            'format' => 'int64',
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
            'description' => '分页大小。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
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
                'example' => '102350E7-1A20-58F5-9D63-ABEA820AE6E1',
              ),
              'Data' => 
              array (
                'description' => '部门信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalNum' => 
                  array (
                    'description' => '记录总数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2',
                  ),
                  'DataList' => 
                  array (
                    'description' => '部门信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Id' => 
                        array (
                          'description' => '部门ID。',
                          'type' => 'string',
                          'example' => '30520',
                        ),
                        'Name' => 
                        array (
                          'description' => '部门名称。',
                          'type' => 'string',
                          'example' => '示例部门',
                        ),
                        'IdpConfigId' => 
                        array (
                          'description' => '自定义身份源配置ID。',
                          'type' => 'string',
                          'example' => '1440',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"102350E7-1A20-58F5-9D63-ABEA820AE6E1\\",\\n  \\"Data\\": {\\n    \\"TotalNum\\": 2,\\n    \\"DataList\\": [\\n      {\\n        \\"Id\\": \\"30520\\",\\n        \\"Name\\": \\"示例部门\\",\\n        \\"IdpConfigId\\": \\"1440\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询自定义身份源部门',
    ),
    'CreateIdpDepartment' => 
    array (
      'summary' => '创建当前阿里云账户自定义身份源部门。',
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
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '215362',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcsas62O8LY',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IdpConfigId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义身份源配置ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1222',
          ),
        ),
        1 => 
        array (
          'name' => 'DepartmentName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '部门名称。',
            'type' => 'string',
            'required' => true,
            'example' => '示例部门',
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
                'example' => 'D6707286-A50E-57B1-B2CF-EFAC59E850D8',
              ),
              'Data' => 
              array (
                'description' => '创建的部门ID。',
                'type' => 'string',
                'example' => '726',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D6707286-A50E-57B1-B2CF-EFAC59E850D8\\",\\n  \\"Data\\": \\"726\\"\\n}","type":"json"}]',
      'title' => '创建自定义身份源部门',
    ),
    'ListClientUsers' => 
    array (
      'summary' => '查询当前阿里云账户自定义身份源的用户信息。',
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
        'abilityTreeCode' => '215379',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcsas62O8LY',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IdpConfigId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义身份源配置ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1071',
          ),
        ),
        1 => 
        array (
          'name' => 'DepartmentId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '部门ID。',
            'type' => 'string',
            'required' => false,
            'example' => '10785',
          ),
        ),
        2 => 
        array (
          'name' => 'Username',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户名称。',
            'type' => 'string',
            'required' => false,
            'example' => '张三',
          ),
        ),
        3 => 
        array (
          'name' => 'Email',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '电子邮件地址。',
            'type' => 'string',
            'required' => false,
            'example' => 'johndoe@example.com',
          ),
        ),
        4 => 
        array (
          'name' => 'MobileNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '手机号码，不需要带国家编码。',
            'type' => 'string',
            'required' => false,
            'example' => '18980976559',
          ),
        ),
        5 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户启用状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。',
            'type' => 'string',
            'required' => false,
            'example' => 'Enabled',
          ),
        ),
        6 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'minimum' => '1',
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
            'description' => '分页大小。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'exclusiveMinimum' => false,
            'example' => '10',
            'default' => '10',
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
                'example' => 'FEF1144C-95D1-5F7C-81EF-9DB70EA49FCE',
              ),
              'Data' => 
              array (
                'description' => '用户信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalNum' => 
                  array (
                    'description' => '记录总数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2',
                  ),
                  'DataList' => 
                  array (
                    'description' => '用户信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Id' => 
                        array (
                          'description' => '用户ID。',
                          'type' => 'string',
                          'example' => '1970',
                        ),
                        'IdpConfigId' => 
                        array (
                          'description' => '自定义身份源配置ID。',
                          'type' => 'string',
                          'example' => '1026',
                        ),
                        'Username' => 
                        array (
                          'description' => '用户名称。',
                          'type' => 'string',
                          'example' => '张三',
                        ),
                        'UserId' => 
                        array (
                          'description' => '用户唯一标识。',
                          'type' => 'string',
                          'example' => 'su_dead7216****',
                        ),
                        'Description' => 
                        array (
                          'description' => '用户描述。',
                          'type' => 'string',
                          'example' => '示例用户',
                        ),
                        'Email' => 
                        array (
                          'description' => '电子邮件地址。',
                          'type' => 'string',
                          'example' => 'johndoe@example.com',
                        ),
                        'MobileNumber' => 
                        array (
                          'description' => '手机号码，不需要带国家编码。',
                          'type' => 'string',
                          'example' => '15800820468',
                        ),
                        'DepartmentId' => 
                        array (
                          'description' => '部门ID。',
                          'type' => 'string',
                          'example' => '10800',
                        ),
                        'Status' => 
                        array (
                          'description' => '用户启用状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。',
                          'type' => 'string',
                          'example' => 'Disabled',
                        ),
                        'Department' => 
                        array (
                          'description' => '用户所属部门。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Id' => 
                            array (
                              'description' => '部门ID。',
                              'type' => 'string',
                              'example' => '105',
                            ),
                            'Name' => 
                            array (
                              'description' => '部门名称。',
                              'type' => 'string',
                              'example' => '示例部门',
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FEF1144C-95D1-5F7C-81EF-9DB70EA49FCE\\",\\n  \\"Data\\": {\\n    \\"TotalNum\\": 2,\\n    \\"DataList\\": [\\n      {\\n        \\"Id\\": \\"1970\\",\\n        \\"IdpConfigId\\": \\"1026\\",\\n        \\"Username\\": \\"张三\\",\\n        \\"UserId\\": \\"su_dead7216****\\",\\n        \\"Description\\": \\"示例用户\\",\\n        \\"Email\\": \\"johndoe@example.com\\",\\n        \\"MobileNumber\\": \\"15800820468\\",\\n        \\"DepartmentId\\": \\"10800\\",\\n        \\"Status\\": \\"Disabled\\",\\n        \\"Department\\": {\\n          \\"Id\\": \\"105\\",\\n          \\"Name\\": \\"示例部门\\"\\n        }\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询自定义身份用户信息',
    ),
    'UpdateClientUser' => 
    array (
      'summary' => '设置当前阿里云账户自定义身份源指定用户的信息。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '215389',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcsas62O8LY',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户ID。',
            'type' => 'string',
            'required' => true,
            'example' => '20644',
          ),
        ),
        1 => 
        array (
          'name' => 'DepartmentId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '部门ID。',
            'type' => 'string',
            'required' => false,
            'example' => '10701',
          ),
        ),
        2 => 
        array (
          'name' => 'Email',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '电子邮件地址。',
            'type' => 'string',
            'required' => false,
            'example' => 'johndoe@example.com',
          ),
        ),
        3 => 
        array (
          'name' => 'MobileNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '手机号码，不需要带国家编码。',
            'type' => 'string',
            'required' => false,
            'example' => '13641966835',
          ),
        ),
        4 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户描述。',
            'type' => 'string',
            'required' => false,
            'example' => '示例用户',
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
                'example' => 'BE4FB974-11BC-5453-9BE1-1606A73EACA6',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BE4FB974-11BC-5453-9BE1-1606A73EACA6\\"\\n}","type":"json"}]',
      'title' => '设置自定义身份源指定用户信息',
    ),
    'GetClientUser' => 
    array (
      'summary' => '查询当前阿里云账户自定义身份源指定用户的详情信息。',
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
        'abilityTreeCode' => '215387',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcsas62O8LY',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IdpConfigId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义身份源配置ID。',
            'type' => 'string',
            'required' => true,
            'example' => '598',
          ),
        ),
        1 => 
        array (
          'name' => 'Username',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户名称。',
            'type' => 'string',
            'required' => true,
            'example' => '张三',
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
                'example' => '58D6B23E-E5DA-5418-8F61-51A3B5A30049',
              ),
              'Data' => 
              array (
                'description' => '用户详情信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Id' => 
                  array (
                    'description' => '用户ID。',
                    'type' => 'string',
                    'example' => '83',
                  ),
                  'IdpConfigId' => 
                  array (
                    'description' => '自定义身份源配置ID。',
                    'type' => 'string',
                    'example' => '598',
                  ),
                  'Username' => 
                  array (
                    'description' => '用户名称。',
                    'type' => 'string',
                    'example' => '张三',
                  ),
                  'UserId' => 
                  array (
                    'description' => '用户唯一标识。',
                    'type' => 'string',
                    'example' => 'su_abcd7215****',
                  ),
                  'Description' => 
                  array (
                    'description' => '用户描述。',
                    'type' => 'string',
                    'example' => '示例用户',
                  ),
                  'Email' => 
                  array (
                    'description' => '电子邮件地址。',
                    'type' => 'string',
                    'example' => 'johndoe@example.com',
                  ),
                  'MobileNumber' => 
                  array (
                    'description' => '手机号码，不需要带国家编码。',
                    'type' => 'string',
                    'example' => '13641966835',
                  ),
                  'DepartmentId' => 
                  array (
                    'description' => '部门ID。',
                    'type' => 'string',
                    'example' => '10713',
                  ),
                  'Status' => 
                  array (
                    'description' => '用户启用状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。',
                    'type' => 'string',
                    'example' => 'Disabled',
                  ),
                  'Department' => 
                  array (
                    'description' => '用户所属部门。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Id' => 
                      array (
                        'description' => '部门ID。',
                        'type' => 'string',
                        'example' => '107',
                      ),
                      'Name' => 
                      array (
                        'description' => '部门名称。',
                        'type' => 'string',
                        'example' => '示例部门',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"58D6B23E-E5DA-5418-8F61-51A3B5A30049\\",\\n  \\"Data\\": {\\n    \\"Id\\": \\"83\\",\\n    \\"IdpConfigId\\": \\"598\\",\\n    \\"Username\\": \\"张三\\",\\n    \\"UserId\\": \\"su_abcd7215****\\",\\n    \\"Description\\": \\"示例用户\\",\\n    \\"Email\\": \\"johndoe@example.com\\",\\n    \\"MobileNumber\\": \\"13641966835\\",\\n    \\"DepartmentId\\": \\"10713\\",\\n    \\"Status\\": \\"Disabled\\",\\n    \\"Department\\": {\\n      \\"Id\\": \\"107\\",\\n      \\"Name\\": \\"示例部门\\"\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '查询自定义身份源用户详情',
    ),
    'DeleteIdpDepartment' => 
    array (
      'summary' => '删除当前阿里云账户自定义身份源指定的部门。',
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
        'operationType' => 'delete',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '215371',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcsas62O8LY',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IdpConfigId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义身份源配置ID。',
            'type' => 'string',
            'required' => true,
            'example' => '507',
          ),
        ),
        1 => 
        array (
          'name' => 'DepartmentId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '部门ID。',
            'type' => 'string',
            'required' => true,
            'example' => '10829',
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
                'example' => 'FEF1144C-95D1-5F7C-81EF-9DB70EA49FCE',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FEF1144C-95D1-5F7C-81EF-9DB70EA49FCE\\"\\n}","type":"json"}]',
      'title' => '删除自定义身份源指定部门',
    ),
    'CreateClientUser' => 
    array (
      'summary' => '创建当前阿里云账户自定义身份源用户。',
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
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '215388',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcsas62O8LY',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IdpConfigId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义身份源配置ID。',
            'type' => 'string',
            'required' => true,
            'example' => '727',
          ),
        ),
        1 => 
        array (
          'name' => 'Username',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户名称。',
            'type' => 'string',
            'required' => true,
            'example' => '张三',
          ),
        ),
        2 => 
        array (
          'name' => 'DepartmentId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '部门ID。',
            'type' => 'string',
            'required' => false,
            'example' => '10797',
          ),
        ),
        3 => 
        array (
          'name' => 'Email',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '电子邮件地址。',
            'type' => 'string',
            'required' => true,
            'example' => 'johndoe@example.com',
          ),
        ),
        4 => 
        array (
          'name' => 'MobileNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '手机号码，不需要带国家编码。',
            'type' => 'string',
            'required' => false,
            'example' => '13641966835',
          ),
        ),
        5 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '密码。若为空则自动生成随机密码。',
            'type' => 'string',
            'required' => false,
            'example' => 'kehudiyi',
          ),
        ),
        6 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户描述。',
            'type' => 'string',
            'required' => false,
            'example' => '示例用户',
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
                'example' => '58D6B23E-E5DA-5418-8F61-51A3B5A30049',
              ),
              'Data' => 
              array (
                'description' => '创建的用户ID。',
                'type' => 'string',
                'example' => '726',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"58D6B23E-E5DA-5418-8F61-51A3B5A30049\\",\\n  \\"Data\\": \\"726\\"\\n}","type":"json"}]',
      'title' => '创建自定义身份源用户',
    ),
    'UpdateIdpDepartment' => 
    array (
      'summary' => '删除当前阿里云账户自定义身份源指定的部门。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '215363',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcsas62O8LY',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IdpConfigId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义身份源配置ID。',
            'type' => 'string',
            'required' => true,
            'example' => '598',
          ),
        ),
        1 => 
        array (
          'name' => 'DepartmentId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '部门ID。',
            'type' => 'string',
            'required' => true,
            'example' => '10653',
          ),
        ),
        2 => 
        array (
          'name' => 'DepartmentName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '部门名称。',
            'type' => 'string',
            'required' => true,
            'example' => '示例部门',
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
                'example' => '4D169859-A4F2-5EC8-853B-8447787C0D8A',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4D169859-A4F2-5EC8-853B-8447787C0D8A\\"\\n}","type":"json"}]',
      'title' => '修改自定义身份源指定部门',
    ),
    'UpdateClientUserStatus' => 
    array (
      'summary' => '设置当前阿里云账户自定义身份源指定用户的启用状态。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '215392',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcsas62O8LY',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1495',
          ),
        ),
        1 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户启用状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。',
            'type' => 'string',
            'required' => true,
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
                'example' => 'BE4FB974-11BC-5453-9BE1-1606A73EACA6',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BE4FB974-11BC-5453-9BE1-1606A73EACA6\\"\\n}","type":"json"}]',
      'title' => '设置自定义身份源用户启用状态',
    ),
    'DeleteClientUser' => 
    array (
      'summary' => '删除当前阿里云账户自定义身份源的指定用户。',
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
        'operationType' => 'delete',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '215391',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcsas62O8LY',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待删除的用户ID。',
            'type' => 'string',
            'required' => true,
            'example' => '27058',
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
                'example' => '102350E7-1A20-58F5-9D63-ABEA820AE6E1',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"102350E7-1A20-58F5-9D63-ABEA820AE6E1\\"\\n}","type":"json"}]',
      'title' => '删除自定义身份源指定用户',
    ),
    'UpdateClientUserPassword' => 
    array (
      'summary' => '设置当前阿里云账户自定义身份源指定用户的密码。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '215390',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcsas62O8LY',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户ID。',
            'type' => 'string',
            'required' => false,
            'example' => '1128',
          ),
        ),
        1 => 
        array (
          'name' => 'Username',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户名称。',
            'type' => 'string',
            'required' => false,
            'example' => '张三',
          ),
        ),
        2 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '密码。若为空则自动生成随机密码。',
            'type' => 'string',
            'required' => false,
            'example' => 'kehudiyidj',
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
                'example' => 'EFE7EBB2-449D-5BBB-B381-CA7839BC1649',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EFE7EBB2-449D-5BBB-B381-CA7839BC1649\\"\\n}","type":"json"}]',
      'title' => '设置自定义身份源指定用户的密码',
      'requestParamsDescription' => 'Id或Username至少指定其一，优先使用Id。',
    ),
    'UpdateUserDevicesStatus' => 
    array (
      'summary' => '批量修改当前阿里云账号下终端设备状态。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DeviceTags',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '终端设备ID集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '终端设备ID。取值：
- [GetUserDevice](~~GetUserDevice~~)：查询用户终端设备详情。
- [ListUserDevices](~~ListUserDevices~~)：批量查询用户终端设备。',
              'type' => 'string',
              'required' => false,
              'example' => '36efa42d-2c32-c4dc-e3fc-8541e33a****
',
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceAction',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '终端设备状态操作。取值：
- **Locked**：锁定。
- **Lost**：挂失。
- **Unbound**：解绑。只有终端设备为离线或长期离线状态时允许解绑。
- **Unlocked**：解锁。只有终端设备为锁定状态时允许解锁。
- **Found**：找回。只有终端设备为挂失状态时允许解锁。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'Lost' => '挂失',
              'Locked' => '锁定',
              'Unlocked' => '解锁',
              'Unbound' => '解绑',
              'Found' => '找回',
            ),
            'example' => 'Unbound',
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
                'example' => '5FEF5CFA-14CC-5DE5-BD1F-AFFE0996E71D',
              ),
              'Devices' => 
              array (
                'description' => '终端设备列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '终端设备。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DeviceTag' => 
                    array (
                      'description' => '终端设备ID。',
                      'type' => 'string',
                      'example' => '36efa42d-2c32-c4dc-e3fc-8541e33a****',
                    ),
                    'DeviceType' => 
                    array (
                      'description' => '终端设备操作系统类型。取值：
- **Windows**：Windows系统。
- **macOS**：macOS系统。
- **Linux**：Linux系统。
- **Android**：Android系统。
- **iOS**：iOS系统。
- **Windows_Wuying**：无影云桌面系统。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Linux' => 'Linux系统',
                        'Windows_Wuying' => '无影云桌面系统',
                        'Windows' => 'Windows系统',
                        'iOS' => 'iOS系统',
                        'macOS' => 'macOS系统',
                        'Android' => 'Android系统',
                      ),
                      'example' => 'Windows',
                    ),
                    'DeviceModel' => 
                    array (
                      'description' => '终端设备型号。',
                      'type' => 'string',
                      'example' => 'MacBookPro17,1',
                    ),
                    'DeviceVersion' => 
                    array (
                      'description' => '终端设备操作系统版本。',
                      'type' => 'string',
                      'example' => '3.5.1',
                    ),
                    'Hostname' => 
                    array (
                      'description' => '终端设备名称。',
                      'type' => 'string',
                      'example' => 'win10-64bit',
                    ),
                    'Username' => 
                    array (
                      'description' => '用户名。',
                      'type' => 'string',
                      'example' => '王先生',
                    ),
                    'SaseUserId' => 
                    array (
                      'description' => '用户ID。',
                      'type' => 'string',
                      'example' => 'su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****',
                    ),
                    'Department' => 
                    array (
                      'description' => '用户所属部门。',
                      'type' => 'string',
                      'example' => '测试部',
                    ),
                    'InnerIP' => 
                    array (
                      'description' => '终端设备内网IP地址。',
                      'type' => 'string',
                      'example' => '192.168.XX.XX',
                    ),
                    'SrcIP' => 
                    array (
                      'description' => '终端设备登录IP地址。',
                      'type' => 'string',
                      'example' => '11.49.XX.XX',
                    ),
                    'Memory' => 
                    array (
                      'description' => '终端设备内存容量。单位：GB。',
                      'type' => 'string',
                      'example' => '16',
                    ),
                    'CPU' => 
                    array (
                      'description' => '终端设备CPU型号。',
                      'type' => 'string',
                      'example' => 'Apple M1',
                    ),
                    'Disk' => 
                    array (
                      'description' => '终端设备磁盘型号。',
                      'type' => 'string',
                      'example' => 'APPLE SSD AP0512Q Media',
                    ),
                    'Mac' => 
                    array (
                      'description' => '终端设备MAC地址。',
                      'type' => 'string',
                      'example' => '00:16:XX:XX:7c:46',
                    ),
                    'AppVersion' => 
                    array (
                      'description' => '客户端版本。',
                      'type' => 'string',
                      'example' => '2.2.0',
                    ),
                    'DeviceBelong' => 
                    array (
                      'description' => '终端设备归属。取值：
- **Personal**：个人设备。
- **Company**：公司设备。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Company' => '公司设备',
                        'Personal' => '个人设备',
                      ),
                      'example' => 'Company',
                    ),
                    'SharingStatus' => 
                    array (
                      'description' => '设备是否开启共享。取值：
- **true**：开启共享。
- **false**：关闭共享。',
                      'type' => 'boolean',
                      'enumValueTitles' => 
                      array (
                        'true' => '开启共享',
                        'false' => '关闭共享',
                      ),
                      'example' => 'true',
                    ),
                    'DeviceStatus' => 
                    array (
                      'description' => '终端设备状态。取值：
- **Online**：在线。
- **Offline**：离线。
- **LongTermOffline**：长期离线。
- **Locked**：锁定。
- **Lost**：挂失。
- **Unbound**：解绑。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Lost' => '挂失',
                        'Locked' => '锁定',
                        'LongTermOffline' => '长期离线',
                        'Offline' => '离线',
                        'Unbound' => '解绑',
                        'Online' => '在线',
                      ),
                      'example' => 'Online',
                    ),
                    'AppStatus' => 
                    array (
                      'description' => '客户端状态。取值：
- **Online**：在线。
- **Offline**：离线。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Offline' => '离线',
                        'Online' => '在线',
                      ),
                      'example' => 'Online',
                    ),
                    'PaStatus' => 
                    array (
                      'description' => '内网访问状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。
- **Unprovisioned**：未配置。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Enabled' => '开启',
                        'Disabled' => '关闭',
                        'Unprovisioned' => '未配置',
                      ),
                      'example' => 'Enabled',
                    ),
                    'IaStatus' => 
                    array (
                      'description' => '互联网访问状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。
- **Unprovisioned**：未配置。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Enabled' => '开启',
                        'Diabled' => '关闭',
                        'Unprovisioned' => '未配置',
                      ),
                      'example' => 'Enabled',
                    ),
                    'DlpStatus' => 
                    array (
                      'description' => '办公数据保护状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。
- **Unprovisioned**：未配置。
- **Unauthorized**：未授权。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Enabled' => '开启',
                        'Unauthorized' => '未授权',
                        'Disabled' => '关闭',
                        'Unprovisioned' => '未配置',
                      ),
                      'example' => 'Enabled',
                    ),
                    'NacStatus' => 
                    array (
                      'description' => '网络准入状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。
- **Unprovisioned**：未配置。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Enabled' => '开启',
                        'Disabled' => '关闭',
                        'Unprovisioned' => '未配置',
                      ),
                      'example' => 'Enabled',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '终端设备注册时间。',
                      'type' => 'string',
                      'example' => '2023-07-17 18:46:55',
                    ),
                    'UpdateTime' => 
                    array (
                      'description' => '终端设备最后在线时间。',
                      'type' => 'string',
                      'example' => '2023-08-24 19:04:42',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5FEF5CFA-14CC-5DE5-BD1F-AFFE0996E71D\\",\\n  \\"Devices\\": [\\n    {\\n      \\"DeviceTag\\": \\"36efa42d-2c32-c4dc-e3fc-8541e33a****\\",\\n      \\"DeviceType\\": \\"Windows\\",\\n      \\"DeviceModel\\": \\"MacBookPro17,1\\",\\n      \\"DeviceVersion\\": \\"3.5.1\\",\\n      \\"Hostname\\": \\"win10-64bit\\",\\n      \\"Username\\": \\"王先生\\",\\n      \\"SaseUserId\\": \\"su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****\\",\\n      \\"Department\\": \\"测试部\\",\\n      \\"InnerIP\\": \\"192.168.XX.XX\\",\\n      \\"SrcIP\\": \\"11.49.XX.XX\\",\\n      \\"Memory\\": \\"16\\",\\n      \\"CPU\\": \\"Apple M1\\",\\n      \\"Disk\\": \\"APPLE SSD AP0512Q Media\\",\\n      \\"Mac\\": \\"00:16:XX:XX:7c:46\\",\\n      \\"AppVersion\\": \\"2.2.0\\",\\n      \\"DeviceBelong\\": \\"Company\\",\\n      \\"SharingStatus\\": true,\\n      \\"DeviceStatus\\": \\"Online\\",\\n      \\"AppStatus\\": \\"Online\\",\\n      \\"PaStatus\\": \\"Enabled\\",\\n      \\"IaStatus\\": \\"Enabled\\",\\n      \\"DlpStatus\\": \\"Enabled\\",\\n      \\"NacStatus\\": \\"Enabled\\",\\n      \\"CreateTime\\": \\"2023-07-17 18:46:55\\",\\n      \\"UpdateTime\\": \\"2023-08-24 19:04:42\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量修改用户终端设备状态',
    ),
    'ListExcessiveDeviceRegistrationApplications' => 
    array (
      'summary' => '查询当前阿里云账号下用户终端设备的超额注册申请列表。',
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
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时显示的当前页的页码。取值：1~10000。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页数量。取值范围：1~500。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'Username',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户名。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）、星号（*）、at（@）和空格。',
            'type' => 'string',
            'required' => false,
            'example' => '王先生',
          ),
        ),
        3 => 
        array (
          'name' => 'SaseUserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户ID。取值来源：
- [GetUserDevice](~~GetUserDevice~~)：查询用户终端设备详情。
- [ListUserDevices](~~ListUserDevices~~)：批量查询用户终端设备。',
            'type' => 'string',
            'required' => false,
            'example' => 'su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****',
          ),
        ),
        4 => 
        array (
          'name' => 'Department',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户所属部门。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、半角逗号（,）、半角分号（;）、短划线（-）、下划线（_）、分隔号（/）、at（@）和空格。',
            'type' => 'string',
            'required' => false,
            'example' => '测试部',
          ),
        ),
        5 => 
        array (
          'name' => 'Hostname',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端设备名称。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、半角逗号（,）、半角分号（;）、短划线（-）、下划线（\\_）、分隔号（/）、at（@）和空格。单独输入下划线（\\_）将额外查询所有名称中带4字节utf-8字符的终端设备。',
            'type' => 'string',
            'required' => false,
            'example' => 'win10-64bit',
          ),
        ),
        6 => 
        array (
          'name' => 'Mac',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端设备MAC地址。',
            'type' => 'string',
            'required' => false,
            'example' => '00:16:XX:XX:7c:46',
          ),
        ),
        7 => 
        array (
          'name' => 'DeviceTag',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端设备ID。取值：
- [GetUserDevice](~~GetUserDevice~~)：查询用户终端设备详情。
- [ListUserDevices](~~ListUserDevices~~)：批量查询用户终端设备。',
            'type' => 'string',
            'required' => false,
            'example' => '36efa42d-2c32-c4dc-e3fc-8541e33a****
',
          ),
        ),
        8 => 
        array (
          'name' => 'Statuses',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '超额注册申请状态集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '超额注册申请状态。取值：
- **Pending**：待处理。
- **Approved**：通过。
- **Rejected**：拒绝。',
              'type' => 'string',
              'required' => false,
              'enumValueTitles' => 
              array (
                'Approved' => '通过',
                'Rejected' => '拒绝',
                'Pending' => '待处理',
              ),
              'example' => 'Pending',
            ),
            'required' => false,
          ),
        ),
        9 => 
        array (
          'name' => 'ApplicationIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '超额注册申请ID集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '超额注册申请ID。取值来源[ListExcessiveDeviceRegistrationApplications](~~ListExcessiveDeviceRegistrationApplications~~)：批量查询设备超额注册申请。',
              'type' => 'string',
              'required' => false,
              'example' => 'reg-application-0f4a127b7e78****',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '58D6B23E-E5DA-5418-8F61-51A3B5A30049',
              ),
              'TotalNum' => 
              array (
                'description' => '超额注册申请总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'Applications' => 
              array (
                'description' => '超额注册申请列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '超额注册申请。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DeviceTag' => 
                    array (
                      'description' => '终端设备ID。',
                      'type' => 'string',
                      'example' => '36efa42d-2c32-c4dc-e3fc-8541e33a****',
                    ),
                    'DeviceType' => 
                    array (
                      'description' => '终端设备操作系统类型。取值：
- **Windows**：Windows系统。
- **macOS**：macOS系统。
- **Linux**：Linux系统。
- **Android**：Android系统。
- **iOS**：iOS系统。
- **Windows_Wuying**：无影云桌面系统。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Linux' => 'Linux系统',
                        'Windows_Wuying' => '无影云桌面系统',
                        'Windows' => 'Windows系统',
                        'iOS' => 'iOS系统',
                        'macOS' => 'macOS系统',
                        'Android' => 'Android系统',
                      ),
                      'example' => 'Windows',
                    ),
                    'Hostname' => 
                    array (
                      'description' => '终端设备名称。',
                      'type' => 'string',
                      'example' => 'win10-64bit',
                    ),
                    'Username' => 
                    array (
                      'description' => '用户名。',
                      'type' => 'string',
                      'example' => '王先生',
                    ),
                    'SaseUserId' => 
                    array (
                      'description' => '用户ID。',
                      'type' => 'string',
                      'example' => 'su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****',
                    ),
                    'Department' => 
                    array (
                      'description' => '用户所属部门。',
                      'type' => 'string',
                      'example' => '测试部',
                    ),
                    'Mac' => 
                    array (
                      'description' => '终端设备MAC地址。',
                      'type' => 'string',
                      'example' => '00:16:XX:XX:7c:46',
                    ),
                    'IsUsed' => 
                    array (
                      'description' => '超额注册申请是否被使用。取值：
- **true**：被使用。
- **false**：尚未使用。',
                      'type' => 'boolean',
                      'enumValueTitles' => 
                      array (
                        'true' => '被使用',
                        'false' => '尚未使用',
                      ),
                      'example' => 'false',
                    ),
                    'Status' => 
                    array (
                      'description' => '超额注册申请状态。取值：
- **Pending**：待处理。
- **Approved**：通过。
- **Rejected**：拒绝。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Approved' => '通过',
                        'Rejected' => '拒绝',
                        'Pending' => '待处理',
                      ),
                      'example' => 'Approved',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '超额注册申请创建时间。',
                      'type' => 'string',
                      'example' => '2023-07-17 18:46:55',
                    ),
                    'Description' => 
                    array (
                      'description' => '超额注册申请理由。',
                      'type' => 'string',
                      'example' => '这是一条超额注册申请',
                    ),
                    'ApplicationId' => 
                    array (
                      'description' => '超额注册申请ID。',
                      'type' => 'string',
                      'example' => 'reg-application-0f4a127b7e78****',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"58D6B23E-E5DA-5418-8F61-51A3B5A30049\\",\\n  \\"TotalNum\\": 1,\\n  \\"Applications\\": [\\n    {\\n      \\"DeviceTag\\": \\"36efa42d-2c32-c4dc-e3fc-8541e33a****\\",\\n      \\"DeviceType\\": \\"Windows\\",\\n      \\"Hostname\\": \\"win10-64bit\\",\\n      \\"Username\\": \\"王先生\\",\\n      \\"SaseUserId\\": \\"su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****\\",\\n      \\"Department\\": \\"测试部\\",\\n      \\"Mac\\": \\"00:16:XX:XX:7c:46\\",\\n      \\"IsUsed\\": false,\\n      \\"Status\\": \\"Approved\\",\\n      \\"CreateTime\\": \\"2023-07-17 18:46:55\\",\\n      \\"Description\\": \\"这是一条超额注册申请\\",\\n      \\"ApplicationId\\": \\"reg-application-0f4a127b7e78****\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量查询设备超额注册申请',
    ),
    'UpdateExcessiveDeviceRegistrationApplicationsStatus' => 
    array (
      'summary' => '批量修改当前阿里云账号下超额注册申请状态。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '超额注册申请状态。取值：
- **Approved**：通过。只有设备注册申请为待处理状态时允许通过。
- **Rejected**：拒绝。只有设备注册申请为待处理状态时允许拒绝。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'Approved' => '通过',
              'Rejected' => '拒绝',
            ),
            'example' => 'Approved',
          ),
        ),
        1 => 
        array (
          'name' => 'ApplicationIds',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '超额注册申请ID集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '超额注册申请ID。取值来源[ListExcessiveDeviceRegistrationApplications](~~ListExcessiveDeviceRegistrationApplications~~)：批量查询设备超额注册申请。',
              'type' => 'string',
              'required' => false,
              'example' => 'reg-application-0f4a127b7e78****
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
                'example' => '102350E7-1A20-58F5-9D63-ABEA820AE6E1',
              ),
              'Applications' => 
              array (
                'description' => '超额注册申请列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '超额注册申请。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DeviceTag' => 
                    array (
                      'description' => '终端设备ID。',
                      'type' => 'string',
                      'example' => '36efa42d-2c32-c4dc-e3fc-8541e33a****',
                    ),
                    'DeviceType' => 
                    array (
                      'description' => '终端设备操作系统类型。取值：
- **Windows**：Windows系统。
- **macOS**：macOS系统。
- **Linux**：Linux系统。
- **Android**：Android系统。
- **iOS**：iOS系统。
- **Windows_Wuying**：无影云桌面系统。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Linux' => 'Linux系统',
                        'Windows_Wuying' => '无影云桌面系统',
                        'Windows' => 'Windows系统',
                        'iOS' => 'iOS系统',
                        'macOS' => 'macOS系统',
                        'Android' => 'Android系统',
                      ),
                      'example' => 'Windows',
                    ),
                    'Hostname' => 
                    array (
                      'description' => '终端设备名称。',
                      'type' => 'string',
                      'example' => 'win10-64bit',
                    ),
                    'Username' => 
                    array (
                      'description' => '用户名。',
                      'type' => 'string',
                      'example' => '王先生',
                    ),
                    'SaseUserId' => 
                    array (
                      'description' => '用户ID。',
                      'type' => 'string',
                      'example' => 'su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****',
                    ),
                    'Department' => 
                    array (
                      'description' => '用户所属部门。',
                      'type' => 'string',
                      'example' => '测试部',
                    ),
                    'Mac' => 
                    array (
                      'description' => '终端设备MAC地址。',
                      'type' => 'string',
                      'example' => '00:16:XX:XX:7c:46',
                    ),
                    'IsUsed' => 
                    array (
                      'description' => '超额注册申请是否被使用。取值：
- **true**：被使用。
- **false**：尚未使用。',
                      'type' => 'boolean',
                      'enumValueTitles' => 
                      array (
                        'true' => '被使用',
                        'false' => '尚未使用',
                      ),
                      'example' => 'false',
                    ),
                    'Status' => 
                    array (
                      'description' => '超额注册申请状态。取值：
- **Pending**：待处理。
- **Approved**：通过。
- **Rejected**：拒绝。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Approved' => '通过',
                        'Rejected' => '拒绝',
                        'Pending' => '待处理',
                      ),
                      'example' => 'Approved',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '超额注册申请创建时间。',
                      'type' => 'string',
                      'example' => '2023-07-17 18:46:55',
                    ),
                    'Description' => 
                    array (
                      'description' => '超额注册申请理由。',
                      'type' => 'string',
                      'example' => '这是一条超额注册申请',
                    ),
                    'ApplicationId' => 
                    array (
                      'description' => '超额注册申请ID。',
                      'type' => 'string',
                      'example' => 'reg-application-0f4a127b7e78****',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"102350E7-1A20-58F5-9D63-ABEA820AE6E1\\",\\n  \\"Applications\\": [\\n    {\\n      \\"DeviceTag\\": \\"36efa42d-2c32-c4dc-e3fc-8541e33a****\\",\\n      \\"DeviceType\\": \\"Windows\\",\\n      \\"Hostname\\": \\"win10-64bit\\",\\n      \\"Username\\": \\"王先生\\",\\n      \\"SaseUserId\\": \\"su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****\\",\\n      \\"Department\\": \\"测试部\\",\\n      \\"Mac\\": \\"00:16:XX:XX:7c:46\\",\\n      \\"IsUsed\\": false,\\n      \\"Status\\": \\"Approved\\",\\n      \\"CreateTime\\": \\"2023-07-17 18:46:55\\",\\n      \\"Description\\": \\"这是一条超额注册申请\\",\\n      \\"ApplicationId\\": \\"reg-application-0f4a127b7e78****\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量修改设备超额注册申请状态',
    ),
    'UpdateUserDevicesSharingStatus' => 
    array (
      'summary' => '批量修改企业用户的终端设备共享状态。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DeviceTags',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '终端设备ID集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '终端设备ID。取值：
- [GetUserDevice](~~GetUserDevice~~)：查询用户终端设备详情。
- [ListUserDevices](~~ListUserDevices~~)：批量查询用户终端设备。',
              'type' => 'string',
              'required' => false,
              'example' => '36efa42d-2c32-c4dc-e3fc-8541e33a****
',
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'SharingStatus',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '设备是否开启共享。取值：
- **true**：开启共享。
- **false**：关闭共享。',
            'type' => 'boolean',
            'required' => true,
            'enumValueTitles' => 
            array (
              'true' => '开启共享',
              'false' => '关闭共享',
            ),
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
                'example' => '4D169859-A4F2-5EC8-853B-8447787C0D8A',
              ),
              'Devices' => 
              array (
                'description' => '终端设备列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '终端设备。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DeviceTag' => 
                    array (
                      'description' => '终端设备ID。',
                      'type' => 'string',
                      'example' => '36efa42d-2c32-c4dc-e3fc-8541e33a****',
                    ),
                    'DeviceType' => 
                    array (
                      'description' => '终端设备操作系统类型。取值：
- **Windows**：Windows系统。
- **macOS**：macOS系统。
- **Linux**：Linux系统。
- **Android**：Android系统。
- **iOS**：iOS系统。
- **Windows_Wuying**：无影云桌面系统。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Linux' => 'Linux系统',
                        'Windows_Wuying' => '无影云桌面系统',
                        'Windows' => 'Windows系统',
                        'iOS' => 'iOS系统',
                        'macOS' => 'macOS系统',
                        'Android' => 'Android系统',
                      ),
                      'example' => 'Windows',
                    ),
                    'DeviceModel' => 
                    array (
                      'description' => '终端设备型号。',
                      'type' => 'string',
                      'example' => 'MacBookPro17,1',
                    ),
                    'DeviceVersion' => 
                    array (
                      'description' => '终端设备操作系统版本。',
                      'type' => 'string',
                      'example' => '3.5.1',
                    ),
                    'Hostname' => 
                    array (
                      'description' => '终端设备名称。',
                      'type' => 'string',
                      'example' => 'win10-64bit',
                    ),
                    'Username' => 
                    array (
                      'description' => '用户名。',
                      'type' => 'string',
                      'example' => '王先生',
                    ),
                    'SaseUserId' => 
                    array (
                      'description' => '用户ID。',
                      'type' => 'string',
                      'example' => 'su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****',
                    ),
                    'Department' => 
                    array (
                      'description' => '用户所属部门。',
                      'type' => 'string',
                      'example' => '测试部',
                    ),
                    'InnerIP' => 
                    array (
                      'description' => '终端设备内网IP地址。',
                      'type' => 'string',
                      'example' => '192.168.XX.XX',
                    ),
                    'SrcIP' => 
                    array (
                      'description' => '终端设备登录IP地址。',
                      'type' => 'string',
                      'example' => '11.49.XX.XX',
                    ),
                    'Memory' => 
                    array (
                      'description' => '终端设备内存容量。单位：GB。',
                      'type' => 'string',
                      'example' => '16',
                    ),
                    'CPU' => 
                    array (
                      'description' => '终端设备CPU型号。',
                      'type' => 'string',
                      'example' => 'Apple M1',
                    ),
                    'Disk' => 
                    array (
                      'description' => '终端设备磁盘型号。',
                      'type' => 'string',
                      'example' => 'APPLE SSD AP0512Q Media',
                    ),
                    'Mac' => 
                    array (
                      'description' => '终端设备MAC地址。',
                      'type' => 'string',
                      'example' => '00:16:XX:XX:7c:46',
                    ),
                    'AppVersion' => 
                    array (
                      'description' => '客户端版本。',
                      'type' => 'string',
                      'example' => '2.2.0',
                    ),
                    'DeviceBelong' => 
                    array (
                      'description' => '终端设备归属。取值：
- **Personal**：个人设备。
- **Company**：公司设备。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Company' => '公司设备',
                        'Personal' => '个人设备',
                      ),
                      'example' => 'Company',
                    ),
                    'SharingStatus' => 
                    array (
                      'description' => '设备是否开启共享。取值：
- **true**：开启共享。
- **false**：关闭共享。',
                      'type' => 'boolean',
                      'enumValueTitles' => 
                      array (
                        'true' => '开启共享',
                        'false' => '关闭共享',
                      ),
                      'example' => 'true',
                    ),
                    'DeviceStatus' => 
                    array (
                      'description' => '终端设备状态。取值：
- **Online**：在线。
- **Offline**：离线。
- **LongTermOffline**：长期离线。
- **Locked**：锁定。
- **Lost**：挂失。
- **Unbound**：解绑。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Lost' => '挂失',
                        'Locked' => '锁定',
                        'LongTermOffline' => '长期离线',
                        'Offline' => '离线',
                        'Unbound' => '解绑',
                        'Online' => '在线',
                      ),
                      'example' => 'Online',
                    ),
                    'AppStatus' => 
                    array (
                      'description' => '客户端状态。取值：
- **Online**：在线。
- **Offline**：离线。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Offline' => '离线',
                        'Online' => '在线',
                      ),
                      'example' => 'Online',
                    ),
                    'PaStatus' => 
                    array (
                      'description' => '内网访问状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。
- **Unprovisioned**：未配置。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Enabled' => '开启',
                        'Disabled' => '关闭',
                        'Unprovisioned' => '未配置',
                      ),
                      'example' => 'Enabled',
                    ),
                    'IaStatus' => 
                    array (
                      'description' => '互联网访问状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。
- **Unprovisioned**：未配置。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Enabled' => '开启',
                        'Disabled' => '关闭',
                        'Unprovisioned' => '未配置',
                      ),
                      'example' => 'Enabled',
                    ),
                    'DlpStatus' => 
                    array (
                      'description' => '办公数据保护状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。
- **Unprovisioned**：未配置。
- **Unauthorized**：未授权。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Enabled' => '开启',
                        'Unauthorized' => '未授权',
                        'Disabled' => '关闭',
                        'Unprovisioned' => '未配置',
                      ),
                      'example' => 'Enabled',
                    ),
                    'NacStatus' => 
                    array (
                      'description' => '网络准入状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。
- **Unprovisioned**：未配置。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Enabled' => '开启',
                        'Disabled' => '关闭',
                        'Unprovisioned' => '未配置',
                      ),
                      'example' => 'Enabled',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '终端设备注册时间。',
                      'type' => 'string',
                      'example' => '2023-05-16 17:18:46',
                    ),
                    'UpdateTime' => 
                    array (
                      'description' => '终端设备最后在线时间。',
                      'type' => 'string',
                      'example' => '2023-08-24 19:04:42',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4D169859-A4F2-5EC8-853B-8447787C0D8A\\",\\n  \\"Devices\\": [\\n    {\\n      \\"DeviceTag\\": \\"36efa42d-2c32-c4dc-e3fc-8541e33a****\\",\\n      \\"DeviceType\\": \\"Windows\\",\\n      \\"DeviceModel\\": \\"MacBookPro17,1\\",\\n      \\"DeviceVersion\\": \\"3.5.1\\",\\n      \\"Hostname\\": \\"win10-64bit\\",\\n      \\"Username\\": \\"王先生\\",\\n      \\"SaseUserId\\": \\"su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****\\",\\n      \\"Department\\": \\"测试部\\",\\n      \\"InnerIP\\": \\"192.168.XX.XX\\",\\n      \\"SrcIP\\": \\"11.49.XX.XX\\",\\n      \\"Memory\\": \\"16\\",\\n      \\"CPU\\": \\"Apple M1\\",\\n      \\"Disk\\": \\"APPLE SSD AP0512Q Media\\",\\n      \\"Mac\\": \\"00:16:XX:XX:7c:46\\",\\n      \\"AppVersion\\": \\"2.2.0\\",\\n      \\"DeviceBelong\\": \\"Company\\",\\n      \\"SharingStatus\\": true,\\n      \\"DeviceStatus\\": \\"Online\\",\\n      \\"AppStatus\\": \\"Online\\",\\n      \\"PaStatus\\": \\"Enabled\\",\\n      \\"IaStatus\\": \\"Enabled\\",\\n      \\"DlpStatus\\": \\"Enabled\\",\\n      \\"NacStatus\\": \\"Enabled\\",\\n      \\"CreateTime\\": \\"2023-05-16 17:18:46\\",\\n      \\"UpdateTime\\": \\"2023-08-24 19:04:42\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量修改用户终端设备共享状态',
    ),
    'ListUserDevices' => 
    array (
      'summary' => '查询当前阿里云账号下用户终端设备列表。',
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
        'abilityTreeCode' => '192473',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcsas3KYQ7V',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时显示的当前页的页码。取值：1~10000。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页数量。取值范围：1~500。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'Username',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户名。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）、星号（*）、at（@）和空格。',
            'type' => 'string',
            'required' => false,
            'example' => '王先生',
          ),
        ),
        3 => 
        array (
          'name' => 'SaseUserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户ID。取值来源：
- [GetUserDevice](~~GetUserDevice~~)：查询用户终端设备详情。
- [ListUserDevices](~~ListUserDevices~~)：批量查询用户终端设备。',
            'type' => 'string',
            'required' => false,
            'example' => 'su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****',
          ),
        ),
        4 => 
        array (
          'name' => 'Department',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户所属部门。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、半角逗号（,）、半角分号（;）、短划线（-）、下划线（_）、分隔号（/）、at（@）和空格。',
            'type' => 'string',
            'required' => false,
            'example' => '测试部',
          ),
        ),
        5 => 
        array (
          'name' => 'Hostname',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端设备名称。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、半角逗号（,）、半角分号（;）、短划线（-）、下划线（\\_）、分隔号（/）、at（@）和空格。单独输入下划线（\\_）将额外查询所有名称中带4字节utf-8字符的终端设备。',
            'type' => 'string',
            'required' => false,
            'example' => 'win10-64bit',
          ),
        ),
        6 => 
        array (
          'name' => 'DeviceBelong',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端设备归属。取值：
- **Personal**：个人设备。
- **Company**：公司设备。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Company' => '公司设备',
              'Personal' => '个人设备',
            ),
            'example' => 'Company',
          ),
        ),
        7 => 
        array (
          'name' => 'Mac',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端设备MAC地址。',
            'type' => 'string',
            'required' => false,
            'example' => '00:16:XX:XX:7c:46',
          ),
        ),
        8 => 
        array (
          'name' => 'SharingStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备是否开启共享。取值：
- **true**：开启共享。
- **false**：关闭共享。',
            'type' => 'boolean',
            'required' => false,
            'enumValueTitles' => 
            array (
              'true' => '开启共享',
              'false' => '关闭共享',
            ),
            'example' => 'true',
          ),
        ),
        9 => 
        array (
          'name' => 'DeviceStatuses',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '终端设备状态集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '终端设备状态。取值：
- **Online**：在线。
- **Offline**：离线。包括长期离线状态。
- **LongTermOffline**：长期离线。
- **Locked**：锁定。
- **Lost**：挂失。
- **Unbound**：解绑。',
              'type' => 'string',
              'required' => false,
              'enumValueTitles' => 
              array (
                'Lost' => '挂失',
                'Locked' => '锁定',
                'LongTermOffline' => '长期离线',
                'Offline' => '离线(包括长期离线)',
                'Unbound' => '解绑',
                'Online' => '在线',
              ),
              'example' => 'Online',
            ),
            'required' => false,
          ),
        ),
        10 => 
        array (
          'name' => 'AppStatuses',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '客户端状态集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '客户端状态。取值：
- **Online**：在线。
- **Offline**：离线。',
              'type' => 'string',
              'required' => false,
              'enumValueTitles' => 
              array (
                'Offline' => '离线',
                'Online' => '在线',
              ),
              'example' => 'Online',
            ),
            'required' => false,
          ),
        ),
        11 => 
        array (
          'name' => 'PaStatuses',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '内网访问状态集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '内网访问状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。
- **Unprovisioned**：未配置。',
              'type' => 'string',
              'required' => false,
              'enumValueTitles' => 
              array (
                'Enabled' => '开启',
                'Disabled' => '关闭',
                'Unprovisioned' => '未配置',
              ),
              'example' => 'Enabled',
            ),
            'required' => false,
          ),
        ),
        12 => 
        array (
          'name' => 'IaStatuses',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '互联网访问状态集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '互联网访问状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。
- **Unprovisioned**：未配置。',
              'type' => 'string',
              'required' => false,
              'enumValueTitles' => 
              array (
                'Enabled' => '开启',
                'Disabled' => '关闭',
                'Unprovisioned' => '未配置',
              ),
              'example' => 'Disabled',
            ),
            'required' => false,
          ),
        ),
        13 => 
        array (
          'name' => 'DlpStatuses',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '办公数据保护状态集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '办公数据保护状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。
- **Unprovisioned**：未配置。
- **Unauthorized**：未授权。',
              'type' => 'string',
              'required' => false,
              'enumValueTitles' => 
              array (
                'Enabled' => '开启',
                'Unauthorized' => '未授权',
                'Disabled' => '关闭',
                'Unprovisioned' => '未配置',
              ),
              'example' => 'Enabled',
            ),
            'required' => false,
          ),
        ),
        14 => 
        array (
          'name' => 'NacStatuses',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '网络准入状态集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '网络准入状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。
- **Unprovisioned**：未配置。',
              'type' => 'string',
              'required' => false,
              'enumValueTitles' => 
              array (
                'Enabled' => '开启',
                'Disabled' => '关闭',
                'Unprovisioned' => '未配置',
              ),
              'example' => 'Unprovisioned',
            ),
            'required' => false,
          ),
        ),
        15 => 
        array (
          'name' => 'DeviceTypes',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '终端设备操作系统类型集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '终端设备操作系统类型。取值：
- **Windows**：Windows系统。
- **macOS**：macOS系统。
- **Linux**：Linux系统。
- **Android**：Android系统。
- **iOS**：iOS系统。
- **Windows_Wuying**：无影云桌面系统。',
              'type' => 'string',
              'required' => false,
              'enumValueTitles' => 
              array (
                'Linux' => 'Linux系统',
                'Windows_Wuying' => '无影云桌面系统',
                'Windows' => 'Windows系统',
                'iOS' => 'iOS系统',
                'macOS' => 'macOS系统',
                'Android' => 'Android系统',
              ),
              'example' => 'Windows',
            ),
            'required' => false,
          ),
        ),
        16 => 
        array (
          'name' => 'DeviceTags',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '终端设备ID集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '终端设备ID。取值：
- [GetUserDevice](~~GetUserDevice~~)：查询用户终端设备详情。
- [ListUserDevices](~~ListUserDevices~~)：批量查询用户终端设备。',
              'type' => 'string',
              'required' => false,
              'example' => '36efa42d-2c32-c4dc-e3fc-8541e33a****',
            ),
            'required' => false,
          ),
        ),
        17 => 
        array (
          'name' => 'SortBy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序参数。取值：
- **Username**：按Username升序排列。
- **AppVersion**：按AppVersion降序排列。
- **UpdateTime**：按UpdateTime降序排列。
- **CreateTime**：按CreateTime降序排列。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'AppVersion' => '按AppVersion降序排列',
              'Username' => '按Username升序排列',
              'CreateTime' => '按CreateTime降序排列',
              'UpdateTime' => '按UpdateTime降序排列',
            ),
            'example' => 'UpdateTime',
          ),
        ),
        18 => 
        array (
          'name' => 'InnerIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端设备内网IP地址。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.XX.XX',
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
                'example' => '5FEF5CFA-14CC-5DE5-BD1F-AFFE0996E71D',
              ),
              'TotalNum' => 
              array (
                'description' => '终端设备总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'Devices' => 
              array (
                'description' => '终端设备列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '终端设备。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DeviceTag' => 
                    array (
                      'description' => '终端设备ID。',
                      'type' => 'string',
                      'example' => '36efa42d-2c32-c4dc-e3fc-8541e33a****',
                    ),
                    'DeviceType' => 
                    array (
                      'description' => '终端设备操作系统类型。取值：
- **Windows**：Windows系统。
- **macOS**：macOS系统。
- **Linux**：Linux系统。
- **Android**：Android系统。
- **iOS**：iOS系统。
- **Windows_Wuying**：无影云桌面系统。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Linux' => 'Linux系统',
                        'Windows_Wuying' => '无影云桌面系统',
                        'Windows' => 'Windows系统',
                        'iOS' => 'iOS系统',
                        'macOS' => 'macOS系统',
                        'Android' => 'Android系统',
                      ),
                      'example' => 'Windows',
                    ),
                    'DeviceModel' => 
                    array (
                      'description' => '终端设备型号。',
                      'type' => 'string',
                      'example' => 'MacBookPro17,1',
                    ),
                    'DeviceVersion' => 
                    array (
                      'description' => '终端设备操作系统版本。',
                      'type' => 'string',
                      'example' => '3.5.1',
                    ),
                    'Hostname' => 
                    array (
                      'description' => '终端设备名称。',
                      'type' => 'string',
                      'example' => 'win10-64bit',
                    ),
                    'Username' => 
                    array (
                      'description' => '用户名。',
                      'type' => 'string',
                      'example' => '王先生',
                    ),
                    'SaseUserId' => 
                    array (
                      'description' => '用户ID。',
                      'type' => 'string',
                      'example' => 'su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****',
                    ),
                    'Department' => 
                    array (
                      'description' => '用户所属部门。',
                      'type' => 'string',
                      'example' => '测试部',
                    ),
                    'InnerIP' => 
                    array (
                      'description' => '终端设备内网IP地址。',
                      'type' => 'string',
                      'example' => '192.168.XX.XX',
                    ),
                    'SrcIP' => 
                    array (
                      'description' => '终端设备登录IP地址。',
                      'type' => 'string',
                      'example' => '11.49.XX.XX',
                    ),
                    'Memory' => 
                    array (
                      'description' => '终端设备内存容量。单位：GB。',
                      'type' => 'string',
                      'example' => '16',
                    ),
                    'CPU' => 
                    array (
                      'description' => '终端设备CPU型号。',
                      'type' => 'string',
                      'example' => 'Apple M1',
                    ),
                    'Disk' => 
                    array (
                      'description' => '终端设备磁盘型号。',
                      'type' => 'string',
                      'example' => 'APPLE SSD AP0512Q Media',
                    ),
                    'Mac' => 
                    array (
                      'description' => '终端设备MAC地址。',
                      'type' => 'string',
                      'example' => '00:16:XX:XX:7c:46',
                    ),
                    'AppVersion' => 
                    array (
                      'description' => '客户端版本。',
                      'type' => 'string',
                      'example' => '2.2.0',
                    ),
                    'DeviceBelong' => 
                    array (
                      'description' => '终端设备归属。取值：
- **Personal**：个人设备。
- **Company**：公司设备。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Company' => '公司设备',
                        'Personal' => '个人设备',
                      ),
                      'example' => 'Company',
                    ),
                    'SharingStatus' => 
                    array (
                      'description' => '设备是否开启共享。取值：
- **true**：开启共享。
- **false**：关闭共享。',
                      'type' => 'boolean',
                      'enumValueTitles' => 
                      array (
                        'true' => '开启共享',
                        'false' => '关闭共享',
                      ),
                      'example' => 'true',
                    ),
                    'DeviceStatus' => 
                    array (
                      'description' => '终端设备状态。取值：
- **Online**：在线。
- **Offline**：离线。
- **LongTermOffline**：长期离线。
- **Locked**：锁定。
- **Lost**：挂失。
- **Unbound**：解绑。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Lost' => '挂失',
                        'Locked' => '锁定',
                        'LongTermOffline' => '长期离线',
                        'Offline' => '离线',
                        'Unbound' => '解绑',
                        'Online' => '在线',
                      ),
                      'example' => 'Online',
                    ),
                    'AppStatus' => 
                    array (
                      'description' => '客户端状态。取值：
- **Online**：在线。
- **Offline**：离线。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Offline' => '离线',
                        'Online' => '在线',
                      ),
                      'example' => 'Online',
                    ),
                    'PaStatus' => 
                    array (
                      'description' => '内网访问状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。
- **Unprovisioned**：未配置。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Enabled' => '开启',
                        'Disabled' => '关闭',
                        'Unprovisioned' => '未配置',
                      ),
                      'example' => 'Enabled',
                    ),
                    'IaStatus' => 
                    array (
                      'description' => '互联网访问状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。
- **Unprovisioned**：未配置。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Enabled' => '开启',
                        'Disabled' => '关闭',
                        'Unprovisioned' => '未配置',
                      ),
                      'example' => 'Enabled',
                    ),
                    'DlpStatus' => 
                    array (
                      'description' => '办公数据保护状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。
- **Unprovisioned**：未配置。
- **Unauthorized**：未授权。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Enabled' => '开启',
                        'Unauthorized' => '未授权',
                        'Disabled' => '关闭',
                        'Unprovisioned' => '未配置',
                      ),
                      'example' => 'Enabled',
                    ),
                    'NacStatus' => 
                    array (
                      'description' => '网络准入状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。
- **Unprovisioned**：未配置。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Enabled' => '开启',
                        'Disabled' => '关闭',
                        'Unprovisioned' => '未配置',
                      ),
                      'example' => 'Enabled',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '终端设备注册时间。',
                      'type' => 'string',
                      'example' => '2023-07-17 18:46:55',
                    ),
                    'UpdateTime' => 
                    array (
                      'description' => '终端设备最后在线时间。',
                      'type' => 'string',
                      'example' => '2023-08-24 19:04:42',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5FEF5CFA-14CC-5DE5-BD1F-AFFE0996E71D\\",\\n  \\"TotalNum\\": 1,\\n  \\"Devices\\": [\\n    {\\n      \\"DeviceTag\\": \\"36efa42d-2c32-c4dc-e3fc-8541e33a****\\",\\n      \\"DeviceType\\": \\"Windows\\",\\n      \\"DeviceModel\\": \\"MacBookPro17,1\\",\\n      \\"DeviceVersion\\": \\"3.5.1\\",\\n      \\"Hostname\\": \\"win10-64bit\\",\\n      \\"Username\\": \\"王先生\\",\\n      \\"SaseUserId\\": \\"su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****\\",\\n      \\"Department\\": \\"测试部\\",\\n      \\"InnerIP\\": \\"192.168.XX.XX\\",\\n      \\"SrcIP\\": \\"11.49.XX.XX\\",\\n      \\"Memory\\": \\"16\\",\\n      \\"CPU\\": \\"Apple M1\\",\\n      \\"Disk\\": \\"APPLE SSD AP0512Q Media\\",\\n      \\"Mac\\": \\"00:16:XX:XX:7c:46\\",\\n      \\"AppVersion\\": \\"2.2.0\\",\\n      \\"DeviceBelong\\": \\"Company\\",\\n      \\"SharingStatus\\": true,\\n      \\"DeviceStatus\\": \\"Online\\",\\n      \\"AppStatus\\": \\"Online\\",\\n      \\"PaStatus\\": \\"Enabled\\",\\n      \\"IaStatus\\": \\"Enabled\\",\\n      \\"DlpStatus\\": \\"Enabled\\",\\n      \\"NacStatus\\": \\"Enabled\\",\\n      \\"CreateTime\\": \\"2023-07-17 18:46:55\\",\\n      \\"UpdateTime\\": \\"2023-08-24 19:04:42\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量查询用户终端设备',
    ),
    'ExportUserDevices' => 
    array (
      'summary' => '导出用户终端设备列表excel文件。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '197383',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcsas3KYQ7V',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Username',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户名。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）、星号（*）、at（@）和空格。',
            'type' => 'string',
            'required' => false,
            'example' => '王先生',
          ),
        ),
        1 => 
        array (
          'name' => 'SaseUserId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户ID。取值来源：
- [ListUsers](~~ListUsers~~)：批量查询用户。',
            'type' => 'string',
            'required' => false,
            'example' => 'su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****',
          ),
        ),
        2 => 
        array (
          'name' => 'Department',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户所属部门。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、半角逗号（,）、半角分号（;）、短划线（-）、下划线（_）、分隔号（/）、at（@）和空格。',
            'type' => 'string',
            'required' => false,
            'example' => '测试部',
          ),
        ),
        3 => 
        array (
          'name' => 'Hostname',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '终端设备名称。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、半角逗号（,）、半角分号（;）、短划线（-）、下划线（\\_）、分隔号（/）、at（@）和空格。单独输入下划线（\\_）将额外查询所有名称中带4字节utf-8字符的终端设备。',
            'type' => 'string',
            'required' => false,
            'example' => 'win10-64bit',
          ),
        ),
        4 => 
        array (
          'name' => 'DeviceBelong',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '终端设备归属。取值：
- **Personal**：个人设备。
- **Company**：公司设备。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Company' => '公司设备',
              'Personal' => '个人设备',
            ),
            'example' => 'Company',
          ),
        ),
        5 => 
        array (
          'name' => 'Mac',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '终端设备MAC地址。',
            'type' => 'string',
            'required' => false,
            'example' => '00:16:XX:XX:7c:46',
          ),
        ),
        6 => 
        array (
          'name' => 'SharingStatus',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '设备是否开启共享。取值：
- **true**：开启共享。
- **false**：关闭共享。',
            'type' => 'boolean',
            'required' => false,
            'enumValueTitles' => 
            array (
              'true' => '开启共享',
              'false' => '关闭共享',
            ),
            'example' => 'true',
          ),
        ),
        7 => 
        array (
          'name' => 'DeviceStatuses',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '终端设备状态集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '终端设备状态。取值：
- **Online**：在线。
- **Offline**：离线。包括长期离线状态。
- **LongTermOffline**：长期离线。
- **Locked**：锁定。
- **Lost**：挂失。
- **Unbound**：解绑。',
              'type' => 'string',
              'required' => false,
              'enumValueTitles' => 
              array (
                'Lost' => '挂失',
                'Locked' => '锁定',
                'LongTermOffline' => '长期离线',
                'Offline' => '离线',
                'Unbound' => '解绑',
                'Online' => '在线',
              ),
              'example' => 'Online',
            ),
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'AppStatuses',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '客户端状态集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '客户端状态。取值：
- **Online**：在线。
- **Offline**：离线。',
              'type' => 'string',
              'required' => false,
              'enumValueTitles' => 
              array (
                'Offline' => '离线',
                'Online' => '在线',
              ),
              'example' => 'Online',
            ),
            'required' => false,
          ),
        ),
        9 => 
        array (
          'name' => 'PaStatuses',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '内网访问状态集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '内网访问状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。
- **Unprovisioned**：未配置。',
              'type' => 'string',
              'required' => false,
              'enumValueTitles' => 
              array (
                'Enabled' => '开启',
                'Disabled' => '关闭',
                'Unprovisioned' => '未配置',
              ),
              'example' => 'Enabled',
            ),
            'required' => false,
          ),
        ),
        10 => 
        array (
          'name' => 'IaStatuses',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '互联网访问状态集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '互联网访问状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。
- **Unprovisioned**：未配置。',
              'type' => 'string',
              'required' => false,
              'enumValueTitles' => 
              array (
                'Enabled' => '开启',
                'Disabled' => '关闭',
                'Unprovisioned' => '未配置',
              ),
              'example' => 'Disabled',
            ),
            'required' => false,
          ),
        ),
        11 => 
        array (
          'name' => 'DlpStatuses',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '办公数据保护状态集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '办公数据保护状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。
- **Unprovisioned**：未配置。
- **Unauthorized**：未授权。',
              'type' => 'string',
              'required' => false,
              'enumValueTitles' => 
              array (
                'Enabled' => '开启',
                'Unauthorized' => '未授权',
                'Disabled' => '关闭',
                'Unprovisioned' => '未配置',
              ),
              'example' => 'Enabled',
            ),
            'required' => false,
          ),
        ),
        12 => 
        array (
          'name' => 'NacStatuses',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '网络准入状态集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '网络准入状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。
- **Unprovisioned**：未配置。',
              'type' => 'string',
              'required' => false,
              'enumValueTitles' => 
              array (
                'Enabled' => '开启',
                'Disabled' => '关闭',
                'Unprovisioned' => '未配置',
              ),
              'example' => 'Unprovisioned',
            ),
            'required' => false,
          ),
        ),
        13 => 
        array (
          'name' => 'DeviceTypes',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '终端设备操作系统类型集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '终端设备操作系统类型。取值：
- **Windows**：Windows系统。
- **macOS**：macOS系统。
- **Linux**：Linux系统。
- **Android**：Android系统。
- **iOS**：iOS系统。
- **Windows_Wuying**：无影云桌面系统。',
              'type' => 'string',
              'required' => false,
              'enumValueTitles' => 
              array (
                'Linux' => 'Linux系统',
                'Windows_Wuying' => '无影云桌面系统',
                'Windows' => 'Windows系统',
                'iOS' => 'iOS系统',
                'macOS' => 'macOS系统',
                'Android' => 'Android系统',
              ),
              'example' => 'Windows',
            ),
            'required' => false,
          ),
        ),
        14 => 
        array (
          'name' => 'DeviceTags',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '终端设备ID集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '终端设备ID。取值：
- [GetUserDevice](~~GetUserDevice~~)：查询用户终端设备详情。
- [ListUserDevices](~~ListUserDevices~~)：批量查询用户终端设备。',
              'type' => 'string',
              'required' => false,
              'example' => '36efa42d-2c32-c4dc-e3fc-8541e33a****
',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '748CFDC7-1EB6-5B8B-9405-DA76ED5BB60D',
              ),
              'SignedUrl' => 
              array (
                'description' => '文件下载URL，有效时间1分钟。',
                'type' => 'string',
                'example' => 'https://sase-export.oss-cn-hangzhou.aliyuncs.com/export%2Fapp-device%2F20240607154831.xlsx?Expires=1717746571&OSSAccessKeyId=********************',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"748CFDC7-1EB6-5B8B-9405-DA76ED5BB60D\\",\\n  \\"SignedUrl\\": \\"https://sase-export.oss-cn-hangzhou.aliyuncs.com/export%2Fapp-device%2F20240607154831.xlsx?Expires=1717746571&OSSAccessKeyId=********************\\"\\n}","type":"json"}]',
      'title' => '导出用户终端设备列表',
    ),
    'GetUserDevice' => 
    array (
      'summary' => '查询当前阿里云账号下用户终端设备详情。',
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
          'name' => 'DeviceTag',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端设备ID。取值：
- [GetUserDevice](~~GetUserDevice~~)：查询用户终端设备详情。
- [ListUserDevices](~~ListUserDevices~~)：批量查询用户终端设备。',
            'type' => 'string',
            'required' => true,
            'example' => '36efa42d-2c32-c4dc-e3fc-8541e33a****
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'EFE7EBB2-449D-5BBB-B381-CA7839BC1649',
              ),
              'Device' => 
              array (
                'description' => '终端设备。',
                'type' => 'object',
                'properties' => 
                array (
                  'DeviceTag' => 
                  array (
                    'description' => '终端设备ID。',
                    'type' => 'string',
                    'example' => '36efa42d-2c32-c4dc-e3fc-8541e33a****',
                  ),
                  'DeviceType' => 
                  array (
                    'description' => '终端设备操作系统类型。取值：
- **Windows**：Windows系统。
- **macOS**：macOS系统。
- **Linux**：Linux系统。
- **Android**：Android系统。
- **iOS**：iOS系统。
- **Windows_Wuying**：无影云桌面系统。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'Linux' => 'Linux系统',
                      'Windows_Wuying' => '无影云桌面系统',
                      'Windows' => 'Windows系统',
                      'iOS' => 'iOS系统',
                      'macOS' => 'macOS系统',
                      'Android' => 'Android系统',
                    ),
                    'example' => 'Windows',
                  ),
                  'DeviceModel' => 
                  array (
                    'description' => '终端设备型号。',
                    'type' => 'string',
                    'example' => 'MacBookPro17,1',
                  ),
                  'DeviceVersion' => 
                  array (
                    'description' => '终端设备操作系统版本。',
                    'type' => 'string',
                    'example' => '3.5.1',
                  ),
                  'Hostname' => 
                  array (
                    'description' => '终端设备名称。',
                    'type' => 'string',
                    'example' => 'win10-64bit',
                  ),
                  'Username' => 
                  array (
                    'description' => '用户名。',
                    'type' => 'string',
                    'example' => '王先生',
                  ),
                  'SaseUserId' => 
                  array (
                    'description' => '用户ID。',
                    'type' => 'string',
                    'example' => 'su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****',
                  ),
                  'Department' => 
                  array (
                    'description' => '用户所属部门。',
                    'type' => 'string',
                    'example' => '测试部',
                  ),
                  'InnerIP' => 
                  array (
                    'description' => '终端设备内网IP地址。',
                    'type' => 'string',
                    'example' => '172.16.XX.XX',
                  ),
                  'SrcIP' => 
                  array (
                    'description' => '终端设备登录IP地址。',
                    'type' => 'string',
                    'example' => '106.14.XX.XX',
                  ),
                  'Memory' => 
                  array (
                    'description' => '终端设备内存容量。单位：GB。',
                    'type' => 'string',
                    'example' => '16',
                  ),
                  'CPU' => 
                  array (
                    'description' => '终端设备CPU型号。',
                    'type' => 'string',
                    'example' => 'Apple M1',
                  ),
                  'Disk' => 
                  array (
                    'description' => '终端设备磁盘型号。',
                    'type' => 'string',
                    'example' => 'APPLE SSD AP0512Q Media',
                  ),
                  'Mac' => 
                  array (
                    'description' => '终端设备MAC地址。',
                    'type' => 'string',
                    'example' => '48:9e:XX:XX:02:80',
                  ),
                  'AppVersion' => 
                  array (
                    'description' => '客户端版本。',
                    'type' => 'string',
                    'example' => '2.2.0',
                  ),
                  'DeviceBelong' => 
                  array (
                    'description' => '终端设备归属。取值：
- **Personal**：个人设备。
- **Company**：公司设备。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'Company' => '公司设备',
                      'Personal' => '个人设备',
                    ),
                    'example' => 'Company',
                  ),
                  'SharingStatus' => 
                  array (
                    'description' => '设备是否开启共享。取值：
- **true**：开启共享。
- **false**：关闭共享。',
                    'type' => 'boolean',
                    'enumValueTitles' => 
                    array (
                      'true' => '开启共享',
                      'false' => '关闭共享',
                    ),
                    'example' => 'true',
                  ),
                  'DeviceStatus' => 
                  array (
                    'description' => '终端设备状态。取值：
- **Online**：在线。
- **Offline**：离线。
- **LongTermOffline**：长期离线。
- **Locked**：锁定。
- **Lost**：挂失。
- **Unbound**：解绑。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'Lost' => '挂失',
                      'Locked' => '锁定',
                      'LongTermOffline' => '长期离线',
                      'Offline' => '离线',
                      'Unbound' => '解绑',
                      'Online' => '在线',
                    ),
                    'example' => 'Online',
                  ),
                  'AppStatus' => 
                  array (
                    'description' => '客户端状态。取值：
- **Online**：在线。
- **Offline**：离线。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'Offline' => '离线',
                      'Online' => '在线',
                    ),
                    'example' => 'Online',
                  ),
                  'PaStatus' => 
                  array (
                    'description' => '内网访问状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。
- **Unprovisioned**：未配置。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'Enabled' => '在线',
                      'Disabled' => '离线',
                      'Unprovisioned' => '未配置',
                    ),
                    'example' => 'Enabled',
                  ),
                  'IaStatus' => 
                  array (
                    'description' => '互联网访问状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。
- **Unprovisioned**：未配置。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'Enabled' => '开启',
                      'Disabled' => '关闭',
                      'Unprovisioned' => '未配置',
                    ),
                    'example' => 'Disabled',
                  ),
                  'DlpStatus' => 
                  array (
                    'description' => '办公数据保护状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。
- **Unprovisioned**：未配置。
- **Unauthorized**：未授权。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'Enabled' => '开启',
                      'Unauthorized' => '未授权',
                      'Disabled' => '关闭',
                      'Unprovisioned' => '未配置',
                    ),
                    'example' => 'Unauthorized',
                  ),
                  'NacStatus' => 
                  array (
                    'description' => '网络准入状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。
- **Unprovisioned**：未配置。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'Enabled' => '开启',
                      'Disabled' => '关闭',
                      'Unprovisioned' => '未配置',
                    ),
                    'example' => 'Unprovisioned',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '终端设备注册时间。',
                    'type' => 'string',
                    'example' => '2023-05-16 17:18:46',
                  ),
                  'UpdateTime' => 
                  array (
                    'description' => '终端设备最后在线时间。',
                    'type' => 'string',
                    'example' => '2023-08-24 19:04:42',
                  ),
                  'HistoryUsers' => 
                  array (
                    'description' => '终端设备历史用户集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '终端设备历史用户。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Username' => 
                        array (
                          'description' => '用户名。',
                          'type' => 'string',
                          'example' => '张女士',
                        ),
                        'SaseUserId' => 
                        array (
                          'description' => '用户ID。',
                          'type' => 'string',
                          'example' => 'su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EFE7EBB2-449D-5BBB-B381-CA7839BC1649\\",\\n  \\"Device\\": {\\n    \\"DeviceTag\\": \\"36efa42d-2c32-c4dc-e3fc-8541e33a****\\",\\n    \\"DeviceType\\": \\"Windows\\",\\n    \\"DeviceModel\\": \\"MacBookPro17,1\\",\\n    \\"DeviceVersion\\": \\"3.5.1\\",\\n    \\"Hostname\\": \\"win10-64bit\\",\\n    \\"Username\\": \\"王先生\\",\\n    \\"SaseUserId\\": \\"su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****\\",\\n    \\"Department\\": \\"测试部\\",\\n    \\"InnerIP\\": \\"172.16.XX.XX\\",\\n    \\"SrcIP\\": \\"106.14.XX.XX\\",\\n    \\"Memory\\": \\"16\\",\\n    \\"CPU\\": \\"Apple M1\\",\\n    \\"Disk\\": \\"APPLE SSD AP0512Q Media\\",\\n    \\"Mac\\": \\"48:9e:XX:XX:02:80\\",\\n    \\"AppVersion\\": \\"2.2.0\\",\\n    \\"DeviceBelong\\": \\"Company\\",\\n    \\"SharingStatus\\": true,\\n    \\"DeviceStatus\\": \\"Online\\",\\n    \\"AppStatus\\": \\"Online\\",\\n    \\"PaStatus\\": \\"Enabled\\",\\n    \\"IaStatus\\": \\"Disabled\\",\\n    \\"DlpStatus\\": \\"Unauthorized\\",\\n    \\"NacStatus\\": \\"Unprovisioned\\",\\n    \\"CreateTime\\": \\"2023-05-16 17:18:46\\",\\n    \\"UpdateTime\\": \\"2023-08-24 19:04:42\\",\\n    \\"HistoryUsers\\": [\\n      {\\n        \\"Username\\": \\"张女士\\",\\n        \\"SaseUserId\\": \\"su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询用户终端设备详情',
    ),
    'DeleteUserDevices' => 
    array (
      'summary' => '批量删除用户终端设备。',
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
        'operationType' => 'delete',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '197382',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcsas3KYQ7V',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DeviceTags',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '终端设备ID集合。最多100条。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '终端设备ID。取值：
- [GetUserDevice](~~GetUserDevice~~)：查询用户终端设备详情。
- [ListUserDevices](~~ListUserDevices~~)：批量查询用户终端设备。',
              'type' => 'string',
              'required' => false,
              'example' => '36efa42d-2c32-c4dc-e3fc-8541e33a****',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '5FEF5CFA-14CC-5DE5-BD1F-AFFE0996E71D
',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5FEF5CFA-14CC-5DE5-BD1F-AFFE0996E71D\\\\n\\"\\n}","type":"json"}]',
      'title' => '批量删除用户终端设备',
      'description' => '单次最多删除100台设备。每台设备的设备状态必须是离线或长期离线状态，若传入的终端设备ID集合中部分设备状态不符，则仅删除状态符合的设备，接口仍返回成功。',
    ),
    'ListSoftwareForUserDevice' => 
    array (
      'summary' => '查询当前阿里云账号下用户终端设备安装的软件列表。',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时显示的当前页的页码。取值：1~10000。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页数量。取值：1~500。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceTag',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端设备ID。取值：
- [GetUserDevice](~~GetUserDevice~~)：查询用户终端设备详情。
- [ListUserDevices](~~ListUserDevices~~)：批量查询用户终端设备。',
            'type' => 'string',
            'required' => true,
            'example' => '36efa42d-2c32-c4dc-e3fc-8541e33a****
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '102350E7-1A20-58F5-9D63-ABEA820AE6E1',
              ),
              'TotalNum' => 
              array (
                'description' => '终端设备安装的软件总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'Software' => 
              array (
                'description' => '终端设备安装的软件列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '终端设备安装的软件。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'description' => '软件名称。',
                      'type' => 'string',
                      'example' => '钉钉',
                    ),
                    'Inc' => 
                    array (
                      'description' => '软件出品公司。',
                      'type' => 'string',
                      'example' => 'Alibaba (China) Network Technology Co.,Ltd.',
                    ),
                    'Versions' => 
                    array (
                      'description' => '软件版本集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '软件版本。',
                        'type' => 'string',
                        'example' => '7.0.40',
                      ),
                    ),
                    'InstallTime' => 
                    array (
                      'description' => '软件安装时间。',
                      'type' => 'string',
                      'example' => '2023-08-18 02:43:02',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"102350E7-1A20-58F5-9D63-ABEA820AE6E1\\",\\n  \\"TotalNum\\": 1,\\n  \\"Software\\": [\\n    {\\n      \\"Name\\": \\"钉钉\\",\\n      \\"Inc\\": \\"Alibaba (China) Network Technology Co.,Ltd.\\",\\n      \\"Versions\\": [\\n        \\"7.0.40\\"\\n      ],\\n      \\"InstallTime\\": \\"2023-08-18 02:43:02\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量查询用户终端设备安装软件',
    ),
    'ListRegistrationPolicies' => 
    array (
      'summary' => '查询当前阿里云账号下设备注册策略列表。',
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
            'description' => '分页查询时显示的当前页的页码。取值：1~10000。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页数量。取值：1~500。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备注册策略名称。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'registration_policy_name',
          ),
        ),
        3 => 
        array (
          'name' => 'UserGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户组ID。取值来源：
- [ListUserGroups](~~ListUserGroups~~)：批量查询用户组。
- [CreateUserGroup](~~CreateUserGroup~~)：创建用户组。',
            'type' => 'string',
            'required' => false,
            'example' => 'usergroup-6f1ef2fc56b6****',
          ),
        ),
        4 => 
        array (
          'name' => 'CompanyLimitType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '公司设备注册限制类型。取值：
- **Unlimited**：不限制。
- **LimitAll**：按照总数限制。
- **LimitDiff**：按照终端分类限制。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'LimitAll' => '按照总数限制',
              'LimitDiff' => '按照终端分类限制',
              'Unlimited' => '不限制',
            ),
            'example' => 'LimitAll',
          ),
        ),
        5 => 
        array (
          'name' => 'PersonalLimitType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '个人设备注册限制类型。取值：
- **Unlimited**：不限制。
- **LimitAll**：按照总数限制。
- **LimitDiff**：按照终端分类限制。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'LimitAll' => '按照总数限制',
              'LimitDiff' => '按照终端分类限制',
              'Unlimited' => '不限制',
            ),
            'example' => 'LimitDiff',
          ),
        ),
        6 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备注册策略状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Enabled' => '开启',
              'Disabled' => '关闭',
            ),
            'example' => 'Enabled',
          ),
        ),
        7 => 
        array (
          'name' => 'MatchMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '策略匹配目标类型。取值：
- **UserGroupAll**：关联全体用户。
- **UserGroupNormal**：关联部分用户组。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'UserGroupNormal' => '关联部分用户组',
              'UserGroupAll' => '关联全体用户',
            ),
            'example' => 'UserGroupAll',
          ),
        ),
        8 => 
        array (
          'name' => 'PolicyIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '设备注册策略ID集合。最多可输入100个设备注册策略ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '设备注册策略ID。取值来源：
- [ListRegistrationPolicies](~~ListRegistrationPolicies~~)：批量查询设备注册策略。
- [GetRegistrationPolicy](~~GetRegistrationPolicy~~)：查询设备注册策略详情。
- [CreateRegistrationPolicy](~~CreateRegistrationPolicy~~)：创建设备注册策略。
- [UpdateRegistrationPolicy](~~UpdateRegistrationPolicy~~)：更新设备注册策略。',
              'type' => 'string',
              'required' => false,
              'example' => 'reg-policy-63b2f1844b86****',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '7A8FE38A-E29C-5678-B84A-FEDBCB83552F',
              ),
              'TotalNum' => 
              array (
                'description' => '设备注册策略总数。',
                'type' => 'string',
                'example' => '1',
              ),
              'Policies' => 
              array (
                'description' => '设备注册策略列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '设备注册策略。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'description' => '设备注册策略名称。',
                      'type' => 'string',
                      'example' => 'registration_policy_name',
                    ),
                    'PolicyId' => 
                    array (
                      'description' => '设备注册策略ID。',
                      'type' => 'string',
                      'example' => 'reg-policy-dcbfd33cb004****',
                    ),
                    'Description' => 
                    array (
                      'description' => '设备注册策略描述。',
                      'type' => 'string',
                      'example' => '这是一条设备注册策略。',
                    ),
                    'Priority' => 
                    array (
                      'description' => '设备注册策略优先级。数字0表示优先级最高，数字99表示优先级最低。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'Whitelist' => 
                    array (
                      'description' => '设备注册策略白名单用户列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '设备注册策略白名单用户。',
                        'type' => 'string',
                        'example' => '王先生',
                      ),
                    ),
                    'Status' => 
                    array (
                      'description' => '设备注册策略状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Enabled' => '开启',
                        'Disabled' => '关闭',
                      ),
                      'example' => 'Enabled',
                    ),
                    'MatchMode' => 
                    array (
                      'description' => '策略匹配目标类型。取值：
- **UserGroupAll**：关联全体用户。
- **UserGroupNormal**：关联部分用户组。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'UserGroupNormal' => '关联部分用户组',
                        'UserGroupAll' => '关联全体用户',
                      ),
                      'example' => 'UserGroupNormal',
                    ),
                    'UserGroupIds' => 
                    array (
                      'description' => '设备注册策略，用户组ID集合。当策略匹配目标类型为**UserGroupNormal**时，该字段有值。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '设备注册策略，策略匹配目标类型为**UserGroupNormal**时的用户组ID。',
                        'type' => 'string',
                        'example' => 'usergroup-086bcf2d650b****',
                      ),
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '设备注册策略创建时间。',
                      'type' => 'string',
                      'example' => '2023-05-16 17:18:46',
                    ),
                    'LimitDetail' => 
                    array (
                      'description' => '设备注册策略限制详情列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '设备注册策略限制详情。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'DeviceBelong' => 
                          array (
                            'description' => '设备归属。取值：
- **Company**：公司设备。
- **Personal**：个人设备。',
                            'type' => 'string',
                            'enumValueTitles' => 
                            array (
                              'Company' => '公司设备',
                              'Personal' => '个人设备',
                            ),
                            'example' => 'Company',
                          ),
                          'LimitType' => 
                          array (
                            'description' => '设备注册限制类型。取值：
- **Unlimited**：不限制。
- **LimitAll**：按照总数限制。
- **LimitDiff**：按照终端分类限制。',
                            'type' => 'string',
                            'enumValueTitles' => 
                            array (
                              'LimitAll' => '按照总数限制',
                              'LimitDiff' => '按照终端分类限制',
                              'Unlimited' => '不限制',
                            ),
                            'example' => 'LimitAll',
                          ),
                          'LimitCount' => 
                          array (
                            'description' => '设备注册限制数量。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'All' => 
                              array (
                                'description' => '设备注册限制总数。当设备注册限制类型为**LimitAll**时，该字段的值有效。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '3',
                              ),
                              'PC' => 
                              array (
                                'description' => '设备注册限制PC端登录数量。当设备注册限制类型为**LimitDiff**时，该字段的值有效。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                              ),
                              'Mobile' => 
                              array (
                                'description' => '设备注册限制移动端登录数量。当设备注册限制类型为**LimitDiff**时，该字段的值有效。',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7A8FE38A-E29C-5678-B84A-FEDBCB83552F\\",\\n  \\"TotalNum\\": \\"1\\",\\n  \\"Policies\\": [\\n    {\\n      \\"Name\\": \\"registration_policy_name\\",\\n      \\"PolicyId\\": \\"reg-policy-dcbfd33cb004****\\",\\n      \\"Description\\": \\"这是一条设备注册策略。\\",\\n      \\"Priority\\": 1,\\n      \\"Whitelist\\": [\\n        \\"王先生\\"\\n      ],\\n      \\"Status\\": \\"Enabled\\",\\n      \\"MatchMode\\": \\"UserGroupNormal\\",\\n      \\"UserGroupIds\\": [\\n        \\"usergroup-086bcf2d650b****\\"\\n      ],\\n      \\"CreateTime\\": \\"2023-05-16 17:18:46\\",\\n      \\"LimitDetail\\": [\\n        {\\n          \\"DeviceBelong\\": \\"Company\\",\\n          \\"LimitType\\": \\"LimitAll\\",\\n          \\"LimitCount\\": {\\n            \\"All\\": 3,\\n            \\"PC\\": 0,\\n            \\"Mobile\\": 0\\n          }\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量查询设备注册策略',
      'responseParamsDescription' => '策略列表按照优先级从高至低、创建时间由晚至早的顺序返回。',
    ),
    'ListUserGroupsForRegistrationPolicy' => 
    array (
      'summary' => '查询当前阿里云账号下设备注册策略相关用户组。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PolicyIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '设备注册策略ID集合。最多可输入100个设备注册策略ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '设备注册策略ID。取值来源：
- [ListRegistrationPolicies](~~ListRegistrationPolicies~~)：批量查询设备注册策略。
- [GetRegistrationPolicy](~~GetRegistrationPolicy~~)：查询设备注册策略详情。
- [CreateRegistrationPolicy](~~CreateRegistrationPolicy~~)：创建设备注册策略。
- [UpdateRegistrationPolicy](~~UpdateRegistrationPolicy~~)：更新设备注册策略。',
              'type' => 'string',
              'required' => false,
              'example' => 'reg-policy-63b2f1844b86****
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
                'example' => 'D89009C7-54C6-51B6-BAE7-3F373920C6BF',
              ),
              'Policies' => 
              array (
                'description' => '设备注册策略列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '设备注册策略。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PolicyId' => 
                    array (
                      'description' => '设备注册策略ID。',
                      'type' => 'string',
                      'example' => 'reg-policy-f25c9e5872e5****',
                    ),
                    'UserGroups' => 
                    array (
                      'description' => '设备注册策略的用户组集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '设备注册策略的用户组。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'UserGroupId' => 
                          array (
                            'description' => '用户组ID。',
                            'type' => 'string',
                            'example' => 'usergroup-6f1ef2fc56b6****',
                          ),
                          'Name' => 
                          array (
                            'description' => '用户组名称。',
                            'type' => 'string',
                            'example' => 'user_group_name',
                          ),
                          'Description' => 
                          array (
                            'description' => '用户组描述。',
                            'type' => 'string',
                            'example' => '这是一条被设备注册策略引用的用户组。',
                          ),
                          'CreateTime' => 
                          array (
                            'description' => '用户组创建时间。',
                            'type' => 'string',
                            'example' => '2022-09-27 18:10:25',
                          ),
                          'Attributes' => 
                          array (
                            'description' => '用户组属性集合。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '用户组属性。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'UserGroupType' => 
                                array (
                                  'description' => '用户组的类型。取值：
- **username**：用户名。
- **department**：部门。
- **email**：邮箱。
- **telephone**：手机。',
                                  'type' => 'string',
                                  'enumValueTitles' => 
                                  array (
                                    'telephone' => '手机',
                                    'department' => '部门',
                                    'email' => '邮箱',
                                    'username' => '用户名',
                                  ),
                                  'example' => 'department',
                                ),
                                'Relation' => 
                                array (
                                  'description' => '用户组的关系。取值：
- **Equal**：等于。
- **Unequal**：不等于。',
                                  'type' => 'string',
                                  'enumValueTitles' => 
                                  array (
                                    'Unequal' => '不等于',
                                    'Equal' => '等于',
                                  ),
                                  'example' => 'Equal',
                                ),
                                'Value' => 
                                array (
                                  'description' => '用户组属性的值。
- 当用户组类型为**username**时，表示用户名的值。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。
- 当用户组类型为**department**时，表示部门的值。如：OU=部门1,OU=SASE钉钉。
- 当用户组类型为**email**时，表示邮箱的值。如：username@example.com。
- 当用户组类型为**telephone**时，表示手机的值。如：13900001234。',
                                  'type' => 'string',
                                  'example' => 'OU=部门1,OU=SASE钉钉',
                                ),
                                'IdpId' => 
                                array (
                                  'description' => '用户组的身份源ID。当自定义用户组类型为**department**时，存在该值。',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '12',
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
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D89009C7-54C6-51B6-BAE7-3F373920C6BF\\",\\n  \\"Policies\\": [\\n    {\\n      \\"PolicyId\\": \\"reg-policy-f25c9e5872e5****\\",\\n      \\"UserGroups\\": [\\n        {\\n          \\"UserGroupId\\": \\"usergroup-6f1ef2fc56b6****\\",\\n          \\"Name\\": \\"user_group_name\\",\\n          \\"Description\\": \\"这是一条被设备注册策略引用的用户组。\\",\\n          \\"CreateTime\\": \\"2022-09-27 18:10:25\\",\\n          \\"Attributes\\": [\\n            {\\n              \\"UserGroupType\\": \\"department\\",\\n              \\"Relation\\": \\"Equal\\",\\n              \\"Value\\": \\"OU=部门1,OU=SASE钉钉\\",\\n              \\"IdpId\\": 12\\n            }\\n          ]\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量查询设备注册策略的用户组',
    ),
    'ListRegistrationPoliciesForUserGroup' => 
    array (
      'summary' => '查询当前阿里云账号下用户组相关的设备注册策略。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserGroupIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '用户组ID集合。最多可输入100个用户组ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '用户组ID。取值来源：
- [ListUserGroups](~~ListUserGroups~~)：批量查询用户组。
- [CreateUserGroup](~~CreateUserGroup~~)：创建用户组。',
              'type' => 'string',
              'required' => false,
              'example' => 'usergroup-6f1ef2fc56b6****',
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
                'example' => '58D6B23E-E5DA-5418-8F61-51A3B5A30049',
              ),
              'UserGroups' => 
              array (
                'description' => '用户组列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '用户组。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UserGroupId' => 
                    array (
                      'description' => '用户组ID。',
                      'type' => 'string',
                      'example' => 'usergroup-6f1ef2fc56b6****',
                    ),
                    'Policies' => 
                    array (
                      'description' => '设备注册策略集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '设备注册策略。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Name' => 
                          array (
                            'description' => '设备注册策略名称。',
                            'type' => 'string',
                            'example' => 'registration_policy_name',
                          ),
                          'PolicyId' => 
                          array (
                            'description' => '设备注册策略ID。',
                            'type' => 'string',
                            'example' => 'reg-policy-dcbfd33cb004****',
                          ),
                          'Description' => 
                          array (
                            'description' => '设备注册策略描述。',
                            'type' => 'string',
                            'example' => '这是一条设备注册策略。',
                          ),
                          'Priority' => 
                          array (
                            'description' => '设备注册策略优先级。数字0表示优先级最高，数字99表示优先级最低。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '1',
                          ),
                          'Status' => 
                          array (
                            'description' => '设备注册策略状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。',
                            'type' => 'string',
                            'enumValueTitles' => 
                            array (
                              'Enabled' => '开启',
                              'Disabled' => '关闭',
                            ),
                            'example' => 'Enabled',
                          ),
                          'Whitelist' => 
                          array (
                            'description' => '设备注册策略白名单用户列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '设备注册策略白名单用户。',
                              'type' => 'string',
                              'example' => '王先生',
                            ),
                          ),
                          'MatchMode' => 
                          array (
                            'description' => '策略匹配目标类型。取值：
- **UserGroupAll**：关联全体用户。
- **UserGroupNormal**：关联部分用户组。',
                            'type' => 'string',
                            'enumValueTitles' => 
                            array (
                              'UserGroupNormal' => '关联部分用户组',
                              'UserGroupAll' => '关联全体用户',
                            ),
                            'example' => 'UserGroupNormal',
                          ),
                          'CreateTime' => 
                          array (
                            'description' => '设备注册策略创建时间。',
                            'type' => 'string',
                            'example' => '2023-05-16 17:18:46',
                          ),
                          'LimitDetail' => 
                          array (
                            'description' => '设备注册策略限制详情列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '设备注册策略限制详情。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'DeviceBelong' => 
                                array (
                                  'description' => '设备归属。取值：
- **Company**：公司设备。
- **Personal**：个人设备。',
                                  'type' => 'string',
                                  'enumValueTitles' => 
                                  array (
                                    'Company' => '公司设备',
                                    'Personal' => '个人设备',
                                  ),
                                  'example' => 'Company',
                                ),
                                'LimitType' => 
                                array (
                                  'description' => '设备注册限制类型。取值：
- **Unlimited**：不限制。
- **LimitAll**：按照总数限制。
- **LimitDiff**：按照终端分类限制。',
                                  'type' => 'string',
                                  'enumValueTitles' => 
                                  array (
                                    'LimitAll' => '按照总数限制',
                                    'LimitDiff' => '按照终端分类限制',
                                    'Unlimited' => '不限制',
                                  ),
                                  'example' => 'LimitAll',
                                ),
                                'LimitCount' => 
                                array (
                                  'description' => '设备注册限制数量。',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'All' => 
                                    array (
                                      'description' => '设备注册限制总数。当设备注册限制类型为**LimitAll**时，该字段的值有效。',
                                      'type' => 'string',
                                      'example' => '3',
                                    ),
                                    'PC' => 
                                    array (
                                      'description' => '设备注册限制PC端登录数量。当设备注册限制类型为**LimitDiff**时，该字段的值有效。',
                                      'type' => 'string',
                                      'example' => '0',
                                    ),
                                    'Mobile' => 
                                    array (
                                      'description' => '设备注册限制移动端登录数量。当设备注册限制类型为**LimitDiff**时，该字段的值有效。',
                                      'type' => 'string',
                                      'example' => '0',
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
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"58D6B23E-E5DA-5418-8F61-51A3B5A30049\\",\\n  \\"UserGroups\\": [\\n    {\\n      \\"UserGroupId\\": \\"usergroup-6f1ef2fc56b6****\\",\\n      \\"Policies\\": [\\n        {\\n          \\"Name\\": \\"registration_policy_name\\",\\n          \\"PolicyId\\": \\"reg-policy-dcbfd33cb004****\\",\\n          \\"Description\\": \\"这是一条设备注册策略。\\",\\n          \\"Priority\\": 1,\\n          \\"Status\\": \\"Enabled\\",\\n          \\"Whitelist\\": [\\n            \\"王先生\\"\\n          ],\\n          \\"MatchMode\\": \\"UserGroupNormal\\",\\n          \\"CreateTime\\": \\"2023-05-16 17:18:46\\",\\n          \\"LimitDetail\\": [\\n            {\\n              \\"DeviceBelong\\": \\"Company\\",\\n              \\"LimitType\\": \\"LimitAll\\",\\n              \\"LimitCount\\": {\\n                \\"All\\": \\"3\\",\\n                \\"PC\\": \\"0\\",\\n                \\"Mobile\\": \\"0\\"\\n              }\\n            }\\n          ]\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量查询用户组的设备注册策略',
    ),
    'GetRegistrationPolicy' => 
    array (
      'summary' => '查询当前阿里云账号下设备注册策略详情。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备注册策略ID。取值来源：
- [ListRegistrationPolicies](~~ListRegistrationPolicies~~)：批量查询设备注册策略。
- [GetRegistrationPolicy](~~GetRegistrationPolicy~~)：查询设备注册策略详情。
- [CreateRegistrationPolicy](~~CreateRegistrationPolicy~~)：创建设备注册策略。
- [UpdateRegistrationPolicy](~~UpdateRegistrationPolicy~~)：更新设备注册策略。',
            'type' => 'string',
            'required' => true,
            'example' => 'reg-policy-dcbfd33cb004****
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '47363C2B-1AAA-5954-8847-0E50FCC54117',
              ),
              'Name' => 
              array (
                'description' => '设备注册策略名称。',
                'type' => 'string',
                'example' => 'registration_policy_name',
              ),
              'PolicyId' => 
              array (
                'description' => '设备注册策略ID。',
                'type' => 'string',
                'example' => 'reg-policy-dcbfd33cb004****',
              ),
              'Description' => 
              array (
                'description' => '设备注册策略描述。',
                'type' => 'string',
                'example' => '这是一条设备注册策略。',
              ),
              'Priority' => 
              array (
                'description' => '设备注册策略优先级。数字0表示优先级最高，数字99表示优先级最低。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '99',
              ),
              'Whitelist' => 
              array (
                'description' => '设备注册策略白名单用户列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '设备注册策略白名单用户。',
                  'type' => 'string',
                  'example' => '王先生',
                ),
              ),
              'Status' => 
              array (
                'description' => '设备注册策略状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。',
                'type' => 'string',
                'example' => 'Enabled',
              ),
              'MatchMode' => 
              array (
                'description' => '策略匹配目标类型。取值：
- **UserGroupAll**：关联全体用户。
- **UserGroupNormal**：关联部分用户组。',
                'type' => 'string',
                'example' => 'UserGroupAll',
              ),
              'UserGroupIds' => 
              array (
                'description' => '设备注册策略，用户组ID集合。当策略匹配目标类型为**UserGroupNormal**时，该字段有值。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '设备注册策略，策略匹配目标类型为**UserGroupNormal**时的用户组ID。',
                  'type' => 'string',
                  'example' => 'usergroup-086bcf2d650b****',
                ),
              ),
              'CreateTime' => 
              array (
                'description' => '设备注册策略创建时间。',
                'type' => 'string',
                'example' => '2023-05-16 17:18:46',
              ),
              'LimitDetail' => 
              array (
                'description' => '设备注册策略限制详情列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '设备注册策略限制详情列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DeviceBelong' => 
                    array (
                      'description' => '设备归属。取值：
- **Company**：公司设备。
- **Personal**：个人设备。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Company' => '公司设备',
                        'Personal' => '个人设备',
                      ),
                      'example' => 'Personal',
                    ),
                    'LimitType' => 
                    array (
                      'description' => '设备注册限制类型。取值：
- **Unlimited**：不限制。
- **LimitAll**：按照总数限制。
- **LimitDiff**：按照终端分类限制。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'LimitAll' => '按照总数限制',
                        'LimitDiff' => '按照终端分类限制',
                        'Unlimited' => '不限制',
                      ),
                      'example' => 'LimitDiff',
                    ),
                    'LimitCount' => 
                    array (
                      'description' => '设备注册限制数量。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'All' => 
                        array (
                          'description' => '设备注册限制总数。当设备注册限制类型为**LimitAll**时，该字段的值有效。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'PC' => 
                        array (
                          'description' => '设备注册限制PC端登录数量。当设备注册限制类型为**LimitDiff**时，该字段的值有效。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'Mobile' => 
                        array (
                          'description' => '设备注册限制移动端登录数量。当设备注册限制类型为**LimitDiff**时，该字段的值有效。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"47363C2B-1AAA-5954-8847-0E50FCC54117\\",\\n  \\"Name\\": \\"registration_policy_name\\",\\n  \\"PolicyId\\": \\"reg-policy-dcbfd33cb004****\\",\\n  \\"Description\\": \\"这是一条设备注册策略。\\",\\n  \\"Priority\\": 99,\\n  \\"Whitelist\\": [\\n    \\"王先生\\"\\n  ],\\n  \\"Status\\": \\"Enabled\\",\\n  \\"MatchMode\\": \\"UserGroupAll\\",\\n  \\"UserGroupIds\\": [\\n    \\"usergroup-086bcf2d650b****\\"\\n  ],\\n  \\"CreateTime\\": \\"2023-05-16 17:18:46\\",\\n  \\"LimitDetail\\": [\\n    {\\n      \\"DeviceBelong\\": \\"Personal\\",\\n      \\"LimitType\\": \\"LimitDiff\\",\\n      \\"LimitCount\\": {\\n        \\"All\\": 0,\\n        \\"PC\\": 2,\\n        \\"Mobile\\": 2\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询设备注册策略详情',
    ),
    'DeleteRegistrationPolicies' => 
    array (
      'summary' => '批量删除当前阿里云账号下设备注册策略。',
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
        'operationType' => 'delete',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PolicyIds',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '设备注册策略ID集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '设备注册策略ID。取值来源：
- [ListRegistrationPolicies](~~ListRegistrationPolicies~~)：批量查询设备注册策略。
- [GetRegistrationPolicy](~~GetRegistrationPolicy~~)：查询设备注册策略详情。
- [CreateRegistrationPolicy](~~CreateRegistrationPolicy~~)：创建设备注册策略。
- [UpdateRegistrationPolicy](~~UpdateRegistrationPolicy~~)：更新设备注册策略。',
              'type' => 'string',
              'required' => false,
              'example' => 'reg-policy-63b2f1844b86****
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
                'example' => 'D6707286-A50E-57B1-B2CF-EFAC59E850D8',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D6707286-A50E-57B1-B2CF-EFAC59E850D8\\"\\n}","type":"json"}]',
      'title' => '批量删除设备注册策略',
    ),
    'UpdateRegistrationPolicy' => 
    array (
      'summary' => '修改当前阿里云账号下设备注册策略。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '设备注册策略名称。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'registration_policy_name',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '设备注册策略描述。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）、短划线（-）和空格。',
            'type' => 'string',
            'required' => false,
            'example' => '这是一条设备注册策略',
          ),
        ),
        2 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '设备注册策略状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Enabled' => '开启',
              'Disabled' => '关闭',
            ),
            'example' => 'Enabled',
          ),
        ),
        3 => 
        array (
          'name' => 'Whitelist',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '设备注册策略白名单用户列表。最多可输入1000个用户名。必传。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '设备注册策略白名单用户。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）、星号（*）、at（@）和空格。',
              'type' => 'string',
              'required' => false,
              'example' => '王先生',
            ),
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'Priority',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '设备注册策略优先级。数字0表示优先级最高，数字99表示优先级最低。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '0',
          ),
        ),
        5 => 
        array (
          'name' => 'CompanyLimitType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '公司设备注册限制类型。取值：
- **Unlimited**：不限制。
- **LimitAll**：按照总数限制。
- **LimitDiff**：按照终端分类限制。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'LimitAll' => '按照总数限制',
              'LimitDiff' => '按照终端分类限制',
              'Unlimited' => '不限制',
            ),
            'example' => 'LimitAll',
          ),
        ),
        6 => 
        array (
          'name' => 'CompanyLimitCount',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '公司设备注册限制数量。',
            'type' => 'object',
            'properties' => 
            array (
              'All' => 
              array (
                'description' => '公司设备注册限制总数。取值范围为0～100，默认为0。当公司设备注册限制类型为**LimitAll**时，该字段的值有效。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '1',
              ),
              'PC' => 
              array (
                'description' => '公司设备注册限制PC端登录数量。取值范围为0～100，默认为0。当公司设备注册限制类型为**LimitDiff**时，该字段的值有效。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '0',
              ),
              'Mobile' => 
              array (
                'description' => '公司设备注册限制移动端登录数量。取值范围为0～100，默认为0。当公司设备注册限制类型为**LimitDiff**时，该字段的值有效。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '0',
              ),
            ),
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'PersonalLimitType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '个人设备注册限制类型。取值：
- **Unlimited**：不限制。
- **LimitAll**：按照总数限制。
- **LimitDiff**：按照终端分类限制。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'LimitAll' => '按照总数限制',
              'LimitDiff' => '按照终端分类限制',
              'Unlimited' => '不限制',
            ),
            'example' => 'LimitDiff',
          ),
        ),
        8 => 
        array (
          'name' => 'PersonalLimitCount',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '个人设备注册限制数量。',
            'type' => 'object',
            'properties' => 
            array (
              'All' => 
              array (
                'description' => '个人设备注册限制总数。取值范围为0～100，默认为0。当个人设备注册限制类型为**LimitAll**时，该字段的值有效。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '0',
              ),
              'PC' => 
              array (
                'description' => '个人设备注册限制PC端登录数量。取值范围为0～100，默认为0。当个人设备注册限制类型为**LimitDiff**时，该字段的值有效。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '2',
              ),
              'Mobile' => 
              array (
                'description' => '个人设备注册限制移动端登录数量。取值范围为0～100，默认为0。当个人设备注册限制类型为**LimitDiff**时，该字段的值有效。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '1',
              ),
            ),
            'required' => false,
          ),
        ),
        9 => 
        array (
          'name' => 'MatchMode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '策略匹配目标类型。取值：
- **UserGroupAll**：关联全体用户。
- **UserGroupNormal**：关联部分用户组。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'UserGroupNormal' => '关联部分用户组',
              'UserGroupAll' => '关联全体用户',
            ),
            'example' => 'UserGroupNormal',
          ),
        ),
        10 => 
        array (
          'name' => 'UserGroupIds',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '设备注册策略的用户组ID集合，当策略匹配目标类型为**UserGroupNormal**时，必填。单个策略的用户组最大支持100个。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '设备注册策略，策略匹配目标类型为**UserGroupNormal**时的用户组ID。取值来源：
- [ListUserGroups](~~ListUserGroups~~)：批量查询用户组。
- [CreateUserGroup](~~CreateUserGroup~~)：创建用户组。',
              'type' => 'string',
              'required' => false,
              'example' => 'usergroup-086bcf2d650b****',
            ),
            'required' => false,
          ),
        ),
        11 => 
        array (
          'name' => 'PolicyId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '设备注册策略ID。取值来源：
- [ListRegistrationPolicies](~~ListRegistrationPolicies~~)：批量查询设备注册策略。
- [GetRegistrationPolicy](~~GetRegistrationPolicy~~)：查询设备注册策略详情。
- [CreateRegistrationPolicy](~~CreateRegistrationPolicy~~)：创建设备注册策略。
- [UpdateRegistrationPolicy](~~UpdateRegistrationPolicy~~)：更新设备注册策略。',
            'type' => 'string',
            'required' => true,
            'example' => 'reg-policy-63b2f1844b86****',
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
                'example' => '27064ECA-0936-59F3-8A98-EC821E5BD08F',
              ),
              'Policy' => 
              array (
                'description' => '设备注册策略。',
                'type' => 'object',
                'properties' => 
                array (
                  'Name' => 
                  array (
                    'description' => '设备注册策略名称。',
                    'type' => 'string',
                    'example' => 'registration_policy_name',
                  ),
                  'PolicyId' => 
                  array (
                    'description' => '设备注册策略ID。',
                    'type' => 'string',
                    'example' => '设备注册策略ID',
                  ),
                  'Priority' => 
                  array (
                    'description' => '设备注册策略优先级。数字0表示优先级最高，数字99表示优先级最低。',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'Description' => 
                  array (
                    'description' => '设备注册策略描述。',
                    'type' => 'string',
                    'example' => '这是一条设备注册策略',
                  ),
                  'Whitelist' => 
                  array (
                    'description' => '设备注册策略白名单用户列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '设备注册策略白名单用户。',
                      'type' => 'string',
                      'example' => '韩梅梅',
                    ),
                  ),
                  'Status' => 
                  array (
                    'description' => '设备注册策略状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'Enabled' => '开启',
                      'Disabled' => '关闭',
                    ),
                    'example' => 'Enabled',
                  ),
                  'MatchMode' => 
                  array (
                    'description' => '策略匹配目标类型。取值：
- **UserGroupAll**：关联全体用户。
- **UserGroupNormal**：关联部分用户组。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'UserGroupNormal' => '关联部分用户组',
                      'UserGroupAll' => '关联全体用户',
                    ),
                    'example' => 'UserGroupNormal',
                  ),
                  'UserGroupIds' => 
                  array (
                    'description' => '设备注册策略，用户组ID集合。当策略匹配目标类型为**UserGroupNormal**时，该字段有值。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '设备注册策略，策略匹配目标类型为**UserGroupNormal**时的用户组ID。',
                      'type' => 'string',
                      'example' => 'usergroup-086bcf2d650b****',
                    ),
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '设备注册策略创建时间。',
                    'type' => 'string',
                    'example' => '2023-05-16 17:18:46',
                  ),
                  'LimitDetail' => 
                  array (
                    'description' => '设备注册策略限制详情列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '设备注册策略限制详情。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DeviceBelong' => 
                        array (
                          'description' => '设备归属。取值：
- **Company**：公司设备。
- **Personal**：个人设备。',
                          'type' => 'string',
                          'enumValueTitles' => 
                          array (
                            'Company' => '公司设备',
                            'Personal' => '个人设备',
                          ),
                          'example' => 'Company',
                        ),
                        'LimitType' => 
                        array (
                          'description' => '设备注册限制类型。取值：
- **Unlimited**：不限制。
- **LimitAll**：按照总数限制。
- **LimitDiff**：按照终端分类限制。',
                          'type' => 'string',
                          'enumValueTitles' => 
                          array (
                            'LimitAll' => '按照总数限制',
                            'LimitDiff' => '按照终端分类限制',
                            'Unlimited' => '不限制',
                          ),
                          'example' => 'LimitAll',
                        ),
                        'LimitCount' => 
                        array (
                          'description' => '设备注册限制数量。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'All' => 
                            array (
                              'description' => '设备注册限制总数。当设备注册限制类型为**LimitAll**时，该字段的值有效。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '1',
                            ),
                            'PC' => 
                            array (
                              'description' => '设备注册限制PC端登录数量。当设备注册限制类型为**LimitDiff**时，该字段的值有效。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '0',
                            ),
                            'Mobile' => 
                            array (
                              'description' => '设备注册限制移动端登录数量。当设备注册限制类型为**LimitDiff**时，该字段的值有效。',
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
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"27064ECA-0936-59F3-8A98-EC821E5BD08F\\",\\n  \\"Policy\\": {\\n    \\"Name\\": \\"registration_policy_name\\",\\n    \\"PolicyId\\": \\"设备注册策略ID\\",\\n    \\"Priority\\": \\"1\\",\\n    \\"Description\\": \\"这是一条设备注册策略\\",\\n    \\"Whitelist\\": [\\n      \\"韩梅梅\\"\\n    ],\\n    \\"Status\\": \\"Enabled\\",\\n    \\"MatchMode\\": \\"UserGroupNormal\\",\\n    \\"UserGroupIds\\": [\\n      \\"usergroup-086bcf2d650b****\\"\\n    ],\\n    \\"CreateTime\\": \\"2023-05-16 17:18:46\\",\\n    \\"LimitDetail\\": [\\n      {\\n        \\"DeviceBelong\\": \\"Company\\",\\n        \\"LimitType\\": \\"LimitAll\\",\\n        \\"LimitCount\\": {\\n          \\"All\\": 1,\\n          \\"PC\\": 0,\\n          \\"Mobile\\": 0\\n        }\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '修改设备注册策略',
    ),
    'CreateRegistrationPolicy' => 
    array (
      'summary' => '创建当前阿里云账号下设备注册策略。',
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
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '设备注册策略名称。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => true,
            'example' => 'registration_policy_name',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '设备注册策略描述。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）、短划线（-）和空格。',
            'type' => 'string',
            'required' => false,
            'example' => '这是一条设备注册策略',
          ),
        ),
        2 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '设备注册策略状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'Enabled' => '开启',
              'Disabled' => '关闭',
            ),
            'example' => 'Enabled',
          ),
        ),
        3 => 
        array (
          'name' => 'Whitelist',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '设备注册策略白名单用户列表。最多可输入1000个用户名。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '设备注册策略白名单用户。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）、星号（*）、at（@）和空格。',
              'type' => 'string',
              'required' => false,
              'example' => '王先生',
            ),
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'Priority',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '设备注册策略优先级。数字0表示优先级最高，数字99表示优先级最低。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '99',
          ),
        ),
        5 => 
        array (
          'name' => 'CompanyLimitType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '公司设备注册限制类型。取值：
- **Unlimited**：不限制。
- **LimitAll**：按照总数限制。
- **LimitDiff**：按照终端分类限制。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'LimitAll' => '按照总数限制',
              'LimitDiff' => '按照终端分类限制',
              'Unlimited' => '不限制',
            ),
            'example' => 'LimitAll',
          ),
        ),
        6 => 
        array (
          'name' => 'CompanyLimitCount',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '公司设备注册限制数量。',
            'type' => 'object',
            'properties' => 
            array (
              'All' => 
              array (
                'description' => '公司设备注册限制总数。取值范围为0～100，默认为0。当公司设备注册限制类型为**LimitAll**时，该字段的值有效。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '1',
              ),
              'PC' => 
              array (
                'description' => '公司设备注册限制PC端登录数量。取值范围为0～100，默认为0。当公司设备注册限制类型为**LimitDiff**时，该字段的值有效。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '0',
              ),
              'Mobile' => 
              array (
                'description' => '公司设备注册限制移动端登录数量。取值范围为0～100，默认为0。当公司设备注册限制类型为**LimitDiff**时，该字段的值有效。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '0',
              ),
            ),
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'PersonalLimitType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '个人设备注册限制类型。取值：
- **Unlimited**：不限制。
- **LimitAll**：按照总数限制。
- **LimitDiff**：按照终端分类限制。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'LimitAll' => '按照总数限制',
              'LimitDiff' => '按照终端分类限制',
              'Unlimited' => '不限制',
            ),
            'example' => 'LimitDiff',
          ),
        ),
        8 => 
        array (
          'name' => 'PersonalLimitCount',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '个人设备注册限制数量。',
            'type' => 'object',
            'properties' => 
            array (
              'All' => 
              array (
                'description' => '个人设备注册限制总数。取值范围为0～100，默认为0。当个人设备注册限制类型为**LimitAll**时，该字段的值有效。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '0',
              ),
              'PC' => 
              array (
                'description' => '个人设备注册限制PC端登录数量。取值范围为0～100，默认为0。当个人设备注册限制类型为**LimitDiff**时，该字段的值有效。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '2',
              ),
              'Mobile' => 
              array (
                'description' => '个人设备注册限制移动端登录数量。取值范围为0～100，默认为0。当个人设备注册限制类型为**LimitDiff**时，该字段的值有效。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '3',
              ),
            ),
            'required' => false,
          ),
        ),
        9 => 
        array (
          'name' => 'MatchMode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '策略匹配目标类型。取值：
- **UserGroupAll**：关联全体用户。
- **UserGroupNormal**：关联部分用户组。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'UserGroupNormal' => '关联部分用户组',
              'UserGroupAll' => '关联全体用户',
            ),
            'example' => 'UserGroupAll',
          ),
        ),
        10 => 
        array (
          'name' => 'UserGroupIds',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '设备注册策略的用户组ID集合，当策略匹配目标类型为**UserGroupNormal**时必填。单个策略的用户组最大支持100个。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '设备注册策略，策略匹配目标类型为**UserGroupNormal**时的用户组ID。取值来源：
- [ListUserGroups](~~ListUserGroups~~)：批量查询用户组。
- [CreateUserGroup](~~CreateUserGroup~~)：创建用户组。',
              'type' => 'string',
              'required' => false,
              'example' => 'usergroup-086bcf2d650b****',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'FEF1144C-95D1-5F7C-81EF-9DB70EA49FCE',
              ),
              'Policy' => 
              array (
                'description' => '设备注册策略。',
                'type' => 'object',
                'properties' => 
                array (
                  'Name' => 
                  array (
                    'description' => '设备注册策略名称。',
                    'type' => 'string',
                    'example' => 'registration_policy_name',
                  ),
                  'PolicyId' => 
                  array (
                    'description' => '设备注册策略ID。',
                    'type' => 'string',
                    'example' => 'reg-policy-dcbfd33cb004****',
                  ),
                  'Priority' => 
                  array (
                    'description' => '设备注册策略优先级。数字0表示优先级最高，数字99表示优先级最低。',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'Description' => 
                  array (
                    'description' => '设备注册策略描述。',
                    'type' => 'string',
                    'example' => '这是一条设备注册策略',
                  ),
                  'Whitelist' => 
                  array (
                    'description' => '设备注册策略白名单用户列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '设备注册策略白名单用户。',
                      'type' => 'string',
                      'example' => '王先生',
                    ),
                  ),
                  'Status' => 
                  array (
                    'description' => '设备注册策略状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'Enabled' => '开启',
                      'Disabled' => '关闭',
                    ),
                    'example' => 'Enabled',
                  ),
                  'MatchMode' => 
                  array (
                    'description' => '策略匹配目标类型。取值：
- **UserGroupAll**：关联全体用户。
- **UserGroupNormal**：关联部分用户组。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'UserGroupNormal' => '关联部分用户组',
                      'UserGroupAll' => '关联全体用户',
                    ),
                    'example' => 'UserGroupNormal',
                  ),
                  'UserGroupIds' => 
                  array (
                    'description' => '设备注册策略，用户组ID集合。当策略匹配目标类型为**UserGroupNormal**时，该字段有值。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '设备注册策略，策略匹配目标类型为**UserGroupNormal**时的用户组ID。',
                      'type' => 'string',
                      'example' => 'usergroup-086bcf2d650b****',
                    ),
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '设备注册策略创建时间。',
                    'type' => 'string',
                    'example' => '2023-05-16 17:18:46',
                  ),
                  'LimitDetail' => 
                  array (
                    'description' => '设备注册策略限制详情列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '设备注册策略限制详情。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DeviceBelong' => 
                        array (
                          'description' => '设备归属。取值：
- **Company**：公司设备。
- **Personal**：个人设备。',
                          'type' => 'string',
                          'enumValueTitles' => 
                          array (
                            'Company' => '公司设备',
                            'Personal' => '个人设备',
                          ),
                          'example' => 'Company',
                        ),
                        'LimitType' => 
                        array (
                          'description' => '设备注册限制类型。取值：
- **Unlimited**：不限制。
- **LimitAll**：按照总数限制。
- **LimitDiff**：按照终端分类限制。',
                          'type' => 'string',
                          'enumValueTitles' => 
                          array (
                            'LimitAll' => '按照总数限制',
                            'LimitDiff' => '按照终端分类限制',
                            'Unlimited' => '不限制',
                          ),
                          'example' => 'LimitDiff',
                        ),
                        'LimitCount' => 
                        array (
                          'description' => '设备注册限制数量。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'All' => 
                            array (
                              'description' => '设备注册限制总数。当设备注册限制类型为**LimitAll**时，该字段的值有效。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '0',
                            ),
                            'PC' => 
                            array (
                              'description' => '设备注册限制PC端登录数量。当设备注册限制类型为**LimitDiff**时，该字段的值有效。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '2',
                            ),
                            'Mobile' => 
                            array (
                              'description' => '设备注册限制移动端登录数量。当设备注册限制类型为**LimitDiff**时，该字段的值有效。',
                              'type' => 'integer',
                              'format' => 'int32',
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
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FEF1144C-95D1-5F7C-81EF-9DB70EA49FCE\\",\\n  \\"Policy\\": {\\n    \\"Name\\": \\"registration_policy_name\\",\\n    \\"PolicyId\\": \\"reg-policy-dcbfd33cb004****\\",\\n    \\"Priority\\": \\"1\\",\\n    \\"Description\\": \\"这是一条设备注册策略\\",\\n    \\"Whitelist\\": [\\n      \\"王先生\\"\\n    ],\\n    \\"Status\\": \\"Enabled\\",\\n    \\"MatchMode\\": \\"UserGroupNormal\\",\\n    \\"UserGroupIds\\": [\\n      \\"usergroup-086bcf2d650b****\\"\\n    ],\\n    \\"CreateTime\\": \\"2023-05-16 17:18:46\\",\\n    \\"LimitDetail\\": [\\n      {\\n        \\"DeviceBelong\\": \\"Company\\",\\n        \\"LimitType\\": \\"LimitDiff\\",\\n        \\"LimitCount\\": {\\n          \\"All\\": 0,\\n          \\"PC\\": 2,\\n          \\"Mobile\\": 3\\n        }\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '创建设备注册策略',
    ),
    'ListUserGroups' => 
    array (
      'summary' => '批量查询当前阿里云账号下所有用户组的信息。',
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
            'description' => '分页查询时显示的当前页的页码。取值：1~10000。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '10000',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页数量。取值：1~1000。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '1000',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'UserGroupIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '用户组ID集合。最多可输入100个用户组ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '用户组ID。取值来源：
- [ListUserGroups](~~ListUserGroups~~)：批量查询用户组。
- [CreateUserGroup](~~CreateUserGroup~~)：创建用户组。',
              'type' => 'string',
              'required' => false,
              'example' => 'usergroup-6f1ef2fc56b6****',
            ),
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户组名称。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'user_group_name',
          ),
        ),
        4 => 
        array (
          'name' => 'AttributeValue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户组属性的值。长度为1~128个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'username',
          ),
        ),
        5 => 
        array (
          'name' => 'PAPolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '内网访问策略ID。取值来源：
- [ListPrivateAccessPolices](~~ListPrivateAccessPolices~~)：批量查询内网访问策略。
- [CreatePrivateAccessPolicy](~~CreatePrivateAccessPolicy~~)：创建内网访问策略。',
            'type' => 'string',
            'required' => false,
            'example' => 'pa-policy-54a7838a48bf****',
          ),
        ),
      ),
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
                'example' => '4AB972E2-D702-5464-B132-B1911498B8BF',
              ),
              'TotalNum' => 
              array (
                'description' => '用户组的总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'UserGroups' => 
              array (
                'description' => '用户组列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '用户组。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UserGroupId' => 
                    array (
                      'description' => '用户组ID。',
                      'type' => 'string',
                      'example' => 'usergroup-6f1ef2fc56b6****',
                    ),
                    'Name' => 
                    array (
                      'description' => '用户组名称。',
                      'type' => 'string',
                      'example' => 'user_group_name',
                    ),
                    'Description' => 
                    array (
                      'description' => '用户组描述。',
                      'type' => 'string',
                      'example' => '这是一条用户组',
                    ),
                    'Attributes' => 
                    array (
                      'description' => '用户组属性集合。多个用户组属性之间是或的关系，按照合集生效。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '用户组属性。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'UserGroupType' => 
                          array (
                            'description' => '用户组的类型。取值：
- **username**：用户名。
- **department**：部门。
- **email**：邮箱。
- **telephone**：手机。',
                            'type' => 'string',
                            'enumValueTitles' => 
                            array (
                              'telephone' => '手机',
                              'department' => '部门',
                              'email' => '邮箱',
                              'username' => '用户名',
                            ),
                            'example' => 'department',
                          ),
                          'Relation' => 
                          array (
                            'description' => '用户组的关系。取值：
- **Equal**：等于。
- **Unequal**：不等于。',
                            'type' => 'string',
                            'enumValueTitles' => 
                            array (
                              'Unequal' => '不等于',
                              'Equal' => '等于',
                            ),
                            'example' => 'Equal',
                          ),
                          'Value' => 
                          array (
                            'description' => '用户组属性的值。
- 当用户组类型为**username**时，表示用户名的值。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。
- 当用户组类型为**department**时，表示部门的值。如：OU=部门1,OU=SASE钉钉。
- 当用户组类型为**email**时，表示邮箱的值。如：username@example.com。
- 当用户组类型为**telephone**时，表示手机的值。如：13900001234。',
                            'type' => 'string',
                            'example' => 'OU=部门1,OU=SASE钉钉',
                          ),
                          'IdpId' => 
                          array (
                            'description' => '用户组的身份源ID。当自定义用户组类型为**department**时，存在该值。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '12',
                          ),
                        ),
                      ),
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '用户组创建时间。',
                      'type' => 'string',
                      'example' => '2022-10-10 11:39:22',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4AB972E2-D702-5464-B132-B1911498B8BF\\",\\n  \\"TotalNum\\": 1,\\n  \\"UserGroups\\": [\\n    {\\n      \\"UserGroupId\\": \\"usergroup-6f1ef2fc56b6****\\",\\n      \\"Name\\": \\"user_group_name\\",\\n      \\"Description\\": \\"这是一条用户组\\",\\n      \\"Attributes\\": [\\n        {\\n          \\"UserGroupType\\": \\"department\\",\\n          \\"Relation\\": \\"Equal\\",\\n          \\"Value\\": \\"OU=部门1,OU=SASE钉钉\\",\\n          \\"IdpId\\": 12\\n        }\\n      ],\\n      \\"CreateTime\\": \\"2022-10-10 11:39:22\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量查询用户组',
    ),
    'ListPolicesForUserGroup' => 
    array (
      'summary' => '批量查询当前阿里云账号下用户组的策略。',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserGroupIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '用户组ID集合。最多可输入100个用户组ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '用户组ID。取值来源：
- [ListUserGroups](~~ListUserGroups~~)：批量查询用户组。
- [CreateUserGroup](~~CreateUserGroup~~)：创建用户组。',
              'type' => 'string',
              'required' => false,
              'example' => 'usergroup-6f1ef2fc56b6****',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '5F04DFBD-3F48-5F70-AE72-474026670128',
              ),
              'UserGroups' => 
              array (
                'description' => '用户组列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '用户组。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UserGroupId' => 
                    array (
                      'description' => '用户组ID。',
                      'type' => 'string',
                      'example' => 'usergroup-6f1ef2fc56b6****',
                    ),
                    'Polices' => 
                    array (
                      'description' => '策略集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '策略。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'PolicyId' => 
                          array (
                            'description' => '策略ID。',
                            'type' => 'string',
                            'example' => 'pa-policy-ce2bf7236fab****',
                          ),
                          'PolicyType' => 
                          array (
                            'description' => '策略类型。取值：
- **PrivateAccess**：内网访问。
- **URLFilter：URL**防护。
- **AppAccessControl**：应用管控。
- **DLP**：数据防泄漏。
- **NAC**：网络准入。',
                            'type' => 'string',
                            'enumValueTitles' => 
                            array (
                              'NAC' => '网络准入',
                              'URLFilter' => 'URL防护',
                              'DLP' => '数据防泄漏',
                              'PrivateAccess' => '内网访问',
                              'AppAccessControl' => '应用管控',
                            ),
                            'example' => 'PrivateAccess',
                          ),
                          'Name' => 
                          array (
                            'description' => '策略名称。',
                            'type' => 'string',
                            'example' => 'private_access_policy_name',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5F04DFBD-3F48-5F70-AE72-474026670128\\",\\n  \\"UserGroups\\": [\\n    {\\n      \\"UserGroupId\\": \\"usergroup-6f1ef2fc56b6****\\",\\n      \\"Polices\\": [\\n        {\\n          \\"PolicyId\\": \\"pa-policy-ce2bf7236fab****\\",\\n          \\"PolicyType\\": \\"PrivateAccess\\",\\n          \\"Name\\": \\"private_access_policy_name\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量查询用户组的策略',
    ),
    'GetUserGroup' => 
    array (
      'summary' => '查询当前阿里云账号下的用户组详情。',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户组ID。取值来源：
- [ListUserGroups](~~ListUserGroups~~)：批量查询用户组。
- [CreateUserGroup](~~CreateUserGroup~~)：创建用户组。',
            'type' => 'string',
            'required' => true,
            'example' => 'usergroup-6f1ef2fc56b6****',
          ),
        ),
      ),
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
                'example' => '1310DBC7-7E1F-55D3-B4B4-E4BE912517FB',
              ),
              'UserGroup' => 
              array (
                'description' => '用户组。',
                'type' => 'object',
                'properties' => 
                array (
                  'UserGroupId' => 
                  array (
                    'description' => '用户组ID。',
                    'type' => 'string',
                    'example' => 'usergroup-6f1ef2fc56b6****',
                  ),
                  'Name' => 
                  array (
                    'description' => '用户组名称。',
                    'type' => 'string',
                    'example' => 'user_group_name',
                  ),
                  'Description' => 
                  array (
                    'description' => '用户组描述。',
                    'type' => 'string',
                    'example' => '这是一条用户组
',
                  ),
                  'Attributes' => 
                  array (
                    'description' => '用户组属性集合。多个用户组属性之间是或的关系，按照合集生效。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '用户组属性。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'UserGroupType' => 
                        array (
                          'description' => '用户组的类型。取值：
- **username**：用户名。
- **department**：部门。
- **email**：邮箱。
- **telephone**：手机。',
                          'type' => 'string',
                          'enumValueTitles' => 
                          array (
                            'telephone' => '手机',
                            'department' => '部门',
                            'email' => '邮箱',
                            'username' => '用户名',
                          ),
                          'example' => 'department',
                        ),
                        'Relation' => 
                        array (
                          'description' => '用户组的关系。取值：
- **Equal**：等于。
- **Unequal**：不等于。',
                          'type' => 'string',
                          'enumValueTitles' => 
                          array (
                            'Unequal' => '不等于',
                            'Equal' => '等于',
                          ),
                          'example' => 'Equal',
                        ),
                        'Value' => 
                        array (
                          'description' => '用户组属性的值。
- 当用户组类型为**username**时，表示用户名的值。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。
- 当用户组类型为**department**时，表示部门的值。如：OU=部门1,OU=SASE钉钉。
- 当用户组类型为**email**时，表示邮箱的值。如：username@example.com。
- 当用户组类型为**telephone**时，表示手机的值。如：13900001234。',
                          'type' => 'string',
                          'example' => 'OU=部门1,OU=SASE钉钉',
                        ),
                        'IdpId' => 
                        array (
                          'description' => '用户组的身份源ID。当自定义用户组类型为**department**时，存在该值。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '12',
                        ),
                      ),
                    ),
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '用户组创建时间。',
                    'type' => 'string',
                    'example' => '2022-10-10 11:39:22',
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
            'errorCode' => 'UserGroup.NotFound',
            'errorMessage' => 'The userGroup is not found.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1310DBC7-7E1F-55D3-B4B4-E4BE912517FB\\",\\n  \\"UserGroup\\": {\\n    \\"UserGroupId\\": \\"usergroup-6f1ef2fc56b6****\\",\\n    \\"Name\\": \\"user_group_name\\",\\n    \\"Description\\": \\"这是一条用户组\\\\n\\",\\n    \\"Attributes\\": [\\n      {\\n        \\"UserGroupType\\": \\"department\\",\\n        \\"Relation\\": \\"Equal\\",\\n        \\"Value\\": \\"OU=部门1,OU=SASE钉钉\\",\\n        \\"IdpId\\": 12\\n      }\\n    ],\\n    \\"CreateTime\\": \\"2022-10-10 11:39:22\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询用户组详情',
    ),
    'CreateUserGroup' => 
    array (
      'summary' => '创建当前阿里云账号下用户组。',
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
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户组名称。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => true,
            'example' => 'user_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户组描述。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）、短划线（-）和空格。',
            'type' => 'string',
            'required' => false,
            'example' => '这是一条用户组',
          ),
        ),
        2 => 
        array (
          'name' => 'Attributes',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '用户组属性集合。最大数量3000个。多个用户组属性之间是或的关系，按照合集生效。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '用户组属性。',
              'type' => 'object',
              'properties' => 
              array (
                'UserGroupType' => 
                array (
                  'description' => '用户组的类型。取值：
- **username**：用户名。
- **department**：部门。
- **email**：邮箱。
- **telephone**：手机。',
                  'type' => 'string',
                  'required' => true,
                  'enumValueTitles' => 
                  array (
                    'telephone' => '手机',
                    'department' => '部门',
                    'email' => '邮箱',
                    'username' => '用户名',
                  ),
                  'example' => 'department',
                ),
                'Relation' => 
                array (
                  'description' => '用户组的关系。取值：
- **Equal**：等于。
- **Unequal**：不等于。',
                  'type' => 'string',
                  'required' => true,
                  'enumValueTitles' => 
                  array (
                    'Unequal' => '不等于',
                    'Equal' => '等于',
                  ),
                  'example' => 'Equal',
                ),
                'Value' => 
                array (
                  'description' => '用户组属性的值。
- 当用户组类型为**username**时，表示用户名的值。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）、星号（*）、at（@）和空格。
- 当用户组类型为**department**时，表示部门的值。如：OU=部门1,OU=SASE钉钉。
- 当用户组类型为**email**时，表示邮箱的值。如：username@example.com。
- 当用户组类型为**telephone**时，表示手机的值。如：13900001234。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'OU=部门1,OU=SASE钉钉',
                ),
                'IdpId' => 
                array (
                  'description' => '用户组的身份源ID。当自定义用户组类型为**department**时，存在该值。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '12',
                ),
              ),
              'required' => true,
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '102350E7-1A20-58F5-9D63-ABEA820AE6E1',
              ),
              'UserGroupId' => 
              array (
                'description' => '用户组ID。',
                'type' => 'string',
                'example' => 'usergroup-6f1ef2fc56b6****',
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
            'errorCode' => 'UserGroup.NameExisted',
            'errorMessage' => 'The userGroup name is existed.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"102350E7-1A20-58F5-9D63-ABEA820AE6E1\\",\\n  \\"UserGroupId\\": \\"usergroup-6f1ef2fc56b6****\\"\\n}","type":"json"}]',
      'title' => '创建用户组',
      'description' => '默认最多可创建500个用户组。',
    ),
    'DeleteUserGroup' => 
    array (
      'summary' => '删除当前阿里云账号下用户组。',
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
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户组ID。取值来源：
- [ListUserGroups](~~ListUserGroups~~)：批量查询用户组。
- [CreateUserGroup](~~CreateUserGroup~~)：创建用户组。',
            'type' => 'string',
            'required' => true,
            'example' => 'usergroup-6f1ef2fc56b6****',
          ),
        ),
      ),
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
                'example' => '58D6B23E-E5DA-5418-8F61-51A3B5A30049',
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
            'errorCode' => 'UserGroup.NotFound',
            'errorMessage' => 'The userGroup is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'UserGroup.UsedByPolicy',
            'errorMessage' => 'The userGroup is used by policy.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"58D6B23E-E5DA-5418-8F61-51A3B5A30049\\"\\n}","type":"json"}]',
      'title' => '删除用户组',
      'description' => '当存在策略引用时，不允许删除。
参考：
- [ListPolicesForUserGroup](~~ListPolicesForUserGroup~~)：批量查询用户组的策略。',
    ),
    'UpdateUserGroup' => 
    array (
      'summary' => '修改当前阿里云账号下用户组。',
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户组ID。取值来源：
- [ListUserGroups](~~ListUserGroups~~)：批量查询用户组。
- [CreateUserGroup](~~CreateUserGroup~~)：创建用户组。',
            'type' => 'string',
            'required' => true,
            'example' => 'usergroup-6f1ef2fc56b6****',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户组描述。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）、短划线（-）和空格。',
            'type' => 'string',
            'required' => false,
            'example' => '这是一条用户组
',
          ),
        ),
        2 => 
        array (
          'name' => 'Attributes',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '用户组属性集合。最大总数3000个。多个用户组属性之间是或的关系，按照合集生效。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '用户组属性。',
              'type' => 'object',
              'properties' => 
              array (
                'UserGroupType' => 
                array (
                  'description' => '用户组的类型。取值：
- **username**：用户名。
- **department**：部门。
- **email**：邮箱。
- **telephone**：手机。',
                  'type' => 'string',
                  'required' => true,
                  'enumValueTitles' => 
                  array (
                    'telephone' => '手机',
                    'department' => '部门',
                    'email' => '邮箱',
                    'username' => '用户名',
                  ),
                  'example' => 'department',
                ),
                'Relation' => 
                array (
                  'description' => '用户组的关系。取值：
- **Equal**：等于。
- **Unequal**：不等于。',
                  'type' => 'string',
                  'required' => true,
                  'enumValueTitles' => 
                  array (
                    'Unequal' => '不等于',
                    'Equal' => '等于',
                  ),
                  'example' => 'Equal',
                ),
                'Value' => 
                array (
                  'description' => '用户组属性的值。
- 当用户组类型为**username**时，表示用户名的值。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）、星号（*）、at（@）和空格。
- 当用户组类型为**department**时，表示部门的值。如：OU=部门1,OU=SASE钉钉。
- 当用户组类型为**email**时，表示邮箱的值。如：username@example.com。
- 当用户组类型为**telephone**时，表示手机的值。如：13900001234。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'OU=部门1,OU=SASE钉钉',
                ),
                'IdpId' => 
                array (
                  'description' => '用户组的身份源ID。当自定义用户组类型为**department**时，存在该值。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '12',
                ),
              ),
              'required' => true,
            ),
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'ModifyType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户组的修改类型。取值：
- **Cover**（默认）：使用**Attributes**参数的值覆盖原用户组属性集合。
- **Append**：在用户组属性集合中分别增加**Attributes**参数中输入的值。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Cover' => '覆盖',
              'Append' => '附加',
            ),
            'example' => 'Cover',
          ),
        ),
      ),
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
                'example' => 'FD724DBC-CD76-5235-BF76-59C51B73296D',
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
            'errorCode' => 'UserGroup.NotFound',
            'errorMessage' => 'The userGroup is not found.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FD724DBC-CD76-5235-BF76-59C51B73296D\\"\\n}","type":"json"}]',
      'title' => '修改用户组',
    ),
    'ListUsers' => 
    array (
      'summary' => '查询当前阿里云账号下登录用户列表。',
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
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时显示的当前页的页码。取值：1~10000。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页数量。取值：1~500。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'FuzzyUsername',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模糊匹配用户名。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）、星号（*）、at（@）和空格。',
            'type' => 'string',
            'required' => false,
            'example' => '王先生',
          ),
        ),
        3 => 
        array (
          'name' => 'PreciseUsername',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '精确匹配用户名。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）、星号（*）、at（@）和空格。',
            'type' => 'string',
            'required' => false,
            'example' => '王先生@alibaba.com',
          ),
        ),
        4 => 
        array (
          'name' => 'SaseUserIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '用户ID集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '用户ID。取值来源：

ListUsers：批量查询登录用户。',
              'type' => 'string',
              'required' => false,
              'example' => 'su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****',
            ),
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户状态。取值：
- **Enabled**：启用。
- **Disabled**：禁用。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Enabled' => '启用',
              'Disabled' => '禁用',
            ),
            'example' => 'Enabled',
          ),
        ),
        6 => 
        array (
          'name' => 'Department',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户所属部门。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、半角逗号（,）、半角分号（;）、短划线（-）、下划线（_）、分隔号（/）、at（@）和空格。',
            'type' => 'string',
            'required' => false,
            'example' => '测试部',
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
                'example' => '5FEF5CFA-14CC-5DE5-BD1F-AFFE0996E71D',
              ),
              'TotalNum' => 
              array (
                'description' => '用户总数。',
                'type' => 'string',
                'example' => '1',
              ),
              'Users' => 
              array (
                'description' => '用户列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '用户。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Username' => 
                    array (
                      'description' => '用户名。',
                      'type' => 'string',
                      'example' => '王先生',
                    ),
                    'SaseUserId' => 
                    array (
                      'description' => '用户ID。',
                      'type' => 'string',
                      'example' => 'su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****',
                    ),
                    'Department' => 
                    array (
                      'description' => '用户所属部门。',
                      'type' => 'string',
                      'example' => '测试部',
                    ),
                    'Email' => 
                    array (
                      'description' => '用户邮箱。',
                      'type' => 'string',
                      'example' => 'a***@example.net',
                    ),
                    'Phone' => 
                    array (
                      'description' => '用户手机号码。',
                      'type' => 'string',
                      'example' => '1381111****',
                    ),
                    'Status' => 
                    array (
                      'description' => '用户状态。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Enabled' => '启用',
                        'Disabled' => '禁用',
                      ),
                      'example' => 'Enabled',
                    ),
                    'IdpName' => 
                    array (
                      'description' => '用户身份源名称。',
                      'type' => 'string',
                      'example' => '飞书',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5FEF5CFA-14CC-5DE5-BD1F-AFFE0996E71D\\",\\n  \\"TotalNum\\": \\"1\\",\\n  \\"Users\\": [\\n    {\\n      \\"Username\\": \\"王先生\\",\\n      \\"SaseUserId\\": \\"su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****\\",\\n      \\"Department\\": \\"测试部\\",\\n      \\"Email\\": \\"a***@example.net\\",\\n      \\"Phone\\": \\"1381111****\\",\\n      \\"Status\\": \\"Enabled\\",\\n      \\"IdpName\\": \\"飞书\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量查询用户',
    ),
    'UpdateUsersStatus' => 
    array (
      'summary' => '批量修改当前阿里云账号下登录用户的状态。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SaseUserIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '用户ID集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '用户ID。取值来源：

 ListUsers：批量查询登录用户。',
              'type' => 'string',
              'required' => false,
              'example' => 'su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****',
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '登录用户状态。取值：
- **Enabled**：启用。
- **Disabled**：禁用。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'Enabled' => '启用',
              'Disabled' => '禁用',
            ),
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
                'example' => '47363C2B-1AAA-5954-8847-0E50FCC54117',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"47363C2B-1AAA-5954-8847-0E50FCC54117\\"\\n}","type":"json"}]',
      'title' => '批量修改用户状态',
    ),
    'ListPrivateAccessApplications' => 
    array (
      'summary' => '批量查询当前阿里云账号下所有内网访问应用的信息。',
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
            'description' => '分页查询时显示的当前页的页码。取值：1~10000。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页数量。取值：1~1000。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '内网访问应用名称。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'private_access_application_name',
          ),
        ),
        3 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '内网访问应用状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Enabled' => '开启',
              'Disabled' => '关闭',
            ),
            'example' => 'Enabled',
          ),
        ),
        4 => 
        array (
          'name' => 'Address',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '内网访问应用地址。长度为1~128个字符，支持IPv4地址、CIDR、域名、泛域名。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.0.0/16',
          ),
        ),
        5 => 
        array (
          'name' => 'ApplicationIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '内网访问应用ID集合。最多可输入100个内网访问应用ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '内网访问应用ID。取值来源：
- [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~)：批量查询内网访问应用。
- [CreatePrivateAccessApplication](~~CreatePrivateAccessApplication~~)：创建内网访问应用。',
              'type' => 'string',
              'required' => false,
              'example' => 'pa-application-e12860ef6c48****',
            ),
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'TagId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '内网访问标签ID。取值来源：
- [ListPrivateAccessTags](~~ListPrivateAccessTags~~)：批量查询内网访问标签。
- [CreatePrivateAccessTag](~~CreatePrivateAccessTag~~)：创建内网访问标签。',
            'type' => 'string',
            'required' => false,
            'example' => 'tag-d3f64e8bdd4a****',
          ),
        ),
        7 => 
        array (
          'name' => 'PolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '内网访问策略ID。取值来源：
- [ListPrivateAccessPolices](~~ListPrivateAccessPolices~~)：批量查询内网访问策略。
- [CreatePrivateAccessPolicy](~~CreatePrivateAccessPolicy~~)：创建内网访问策略。',
            'type' => 'string',
            'required' => false,
            'example' => 'pa-policy-54a7838a48bf****',
          ),
        ),
        8 => 
        array (
          'name' => 'ConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ConnectorID。取值来源：[ListConnectors](~~ListConnectors~~)批量查询Connector。',
            'type' => 'string',
            'required' => false,
            'example' => 'connector-94db94e06b98****',
          ),
        ),
      ),
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
                'example' => '748CFDC7-1EB6-5B8B-9405-DA76ED5BB60D',
              ),
              'TotalNum' => 
              array (
                'description' => '内网访问应用总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Applications' => 
              array (
                'description' => '内网访问应用列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '内网访问应用。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ApplicationId' => 
                    array (
                      'description' => '内网访问应用ID。',
                      'type' => 'string',
                      'example' => 'pa-application-e12860ef6c48****',
                    ),
                    'Name' => 
                    array (
                      'description' => '内网访问应用名称。',
                      'type' => 'string',
                      'example' => 'private_access_application_name',
                    ),
                    'Description' => 
                    array (
                      'description' => '内网访问应用描述。',
                      'type' => 'string',
                      'example' => '这是一条内网访问应用',
                    ),
                    'Addresses' => 
                    array (
                      'description' => '内网访问应用地址集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '内网访问应用地址。长度为1~128个字符，支持IPv4地址、CIDR、域名、泛域名。',
                        'type' => 'string',
                        'example' => '192.168.0.0/16',
                      ),
                    ),
                    'PortRanges' => 
                    array (
                      'description' => '内网访问应用端口范围集合。多个端口范围不可重复或重叠。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '内网访问应用端口范围。取值：1~65535。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Begin' => 
                          array (
                            'description' => '起始端口。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '80',
                          ),
                          'End' => 
                          array (
                            'description' => '结束端口。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '81',
                          ),
                        ),
                      ),
                    ),
                    'Protocol' => 
                    array (
                      'description' => '内网访问应用协议。取值：
- **All**：全部。
- **TCP**
- **UDP**',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'All' => 'All',
                        'TCP' => 'TCP',
                        'UDP' => 'UDP',
                      ),
                      'example' => 'All',
                    ),
                    'Status' => 
                    array (
                      'description' => '内网访问应用状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Enabled' => '开启',
                        'Disabled' => '关闭',
                      ),
                      'example' => 'Enabled',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '内网访问应用创建时间。',
                      'type' => 'string',
                      'example' => '2022-12-16 15:03:42',
                    ),
                    'TagIds' => 
                    array (
                      'description' => '内网访问标签ID集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '内网访问标签ID。',
                        'type' => 'string',
                        'example' => 'tag-d3f64e8bdd4a****',
                      ),
                    ),
                    'PolicyIds' => 
                    array (
                      'description' => '内网访问策略ID集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '内网访问策略ID。',
                        'type' => 'string',
                        'example' => 'pa-policy-54a7838a48bf****',
                      ),
                    ),
                    'ConnectorIds' => 
                    array (
                      'description' => 'ConnectorID集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'ConnectorID。',
                        'type' => 'string',
                        'example' => 'connector-94db94e06b98****',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"748CFDC7-1EB6-5B8B-9405-DA76ED5BB60D\\",\\n  \\"TotalNum\\": 1,\\n  \\"Applications\\": [\\n    {\\n      \\"ApplicationId\\": \\"pa-application-e12860ef6c48****\\",\\n      \\"Name\\": \\"private_access_application_name\\",\\n      \\"Description\\": \\"这是一条内网访问应用\\",\\n      \\"Addresses\\": [\\n        \\"192.168.0.0/16\\"\\n      ],\\n      \\"PortRanges\\": [\\n        {\\n          \\"Begin\\": 80,\\n          \\"End\\": 81\\n        }\\n      ],\\n      \\"Protocol\\": \\"All\\",\\n      \\"Status\\": \\"Enabled\\",\\n      \\"CreateTime\\": \\"2022-12-16 15:03:42\\",\\n      \\"TagIds\\": [\\n        \\"tag-d3f64e8bdd4a****\\"\\n      ],\\n      \\"PolicyIds\\": [\\n        \\"pa-policy-54a7838a48bf****\\"\\n      ],\\n      \\"ConnectorIds\\": [\\n        \\"connector-94db94e06b98****\\"\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量查询内网访问应用',
    ),
    'ListTagsForPrivateAccessApplication' => 
    array (
      'summary' => '批量查询当前阿里云账号下内网访问应用的标签。',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ApplicationIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '内网访问应用ID集合。最多可输入100个内网访问应用ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '内网访问应用ID。取值来源：
- [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~)：批量查询内网访问应用。
- [CreatePrivateAccessApplication](~~CreatePrivateAccessApplication~~)：创建内网访问应用。',
              'type' => 'string',
              'required' => false,
              'example' => 'pa-application-7a4445897856****',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '7241F45B-E8D3-5BA3-8172-8A58AC2AB0FC',
              ),
              'Applications' => 
              array (
                'description' => '内网访问应用列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '内网访问应用。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ApplicationId' => 
                    array (
                      'description' => '内网访问应用ID。',
                      'type' => 'string',
                      'example' => 'pa-application-7a4445897856****',
                    ),
                    'Tags' => 
                    array (
                      'description' => '内网访问标签集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '内网访问标签。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'TagId' => 
                          array (
                            'description' => '内网访问标签ID。',
                            'type' => 'string',
                            'example' => 'tag-c0cb77857a99****',
                          ),
                          'Name' => 
                          array (
                            'description' => '内网访问标签名称。',
                            'type' => 'string',
                            'example' => 'tag_name',
                          ),
                          'Description' => 
                          array (
                            'description' => '内网访问标签描述。',
                            'type' => 'string',
                            'example' => '这是一条内网访问标签',
                          ),
                          'TagType' => 
                          array (
                            'description' => '内网访问标签类型。取值：
- **Default**：默认。
- **Custom**：自定义。',
                            'type' => 'string',
                            'enumValueTitles' => 
                            array (
                              'Custom' => '自定义',
                              'Default' => '默认',
                            ),
                            'example' => 'Default',
                          ),
                          'CreateTime' => 
                          array (
                            'description' => '内网访问标签创建时间。',
                            'type' => 'string',
                            'example' => '2022-07-01 16:05:26',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7241F45B-E8D3-5BA3-8172-8A58AC2AB0FC\\",\\n  \\"Applications\\": [\\n    {\\n      \\"ApplicationId\\": \\"pa-application-7a4445897856****\\",\\n      \\"Tags\\": [\\n        {\\n          \\"TagId\\": \\"tag-c0cb77857a99****\\",\\n          \\"Name\\": \\"tag_name\\",\\n          \\"Description\\": \\"这是一条内网访问标签\\",\\n          \\"TagType\\": \\"Default\\",\\n          \\"CreateTime\\": \\"2022-07-01 16:05:26\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量查询内网访问应用的标签',
    ),
    'ListPolicesForPrivateAccessApplication' => 
    array (
      'summary' => '批量查询当前阿里云账号下内网访问应用的策略。',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ApplicationIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '内网访问应用ID集合。最多可输入100个内网访问应用ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '内网访问应用ID。取值来源：
- [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~)：批量查询内网访问应用。
- [CreatePrivateAccessApplication](~~CreatePrivateAccessApplication~~)：创建内网访问应用。',
              'type' => 'string',
              'required' => false,
              'example' => 'pa-application-b927baf3e592****',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '4AB972E2-D702-5464-B132-B1911498B8BF',
              ),
              'Applications' => 
              array (
                'description' => '内网访问应用列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '内网访问应用。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ApplicationId' => 
                    array (
                      'description' => '内网访问应用ID。',
                      'type' => 'string',
                      'example' => 'pa-application-b927baf3e592****',
                    ),
                    'Policies' => 
                    array (
                      'description' => '内网访问策略集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '内网访问策略。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'PolicyId' => 
                          array (
                            'description' => '内网访问策略ID。',
                            'type' => 'string',
                            'example' => 'pa-policy-867ef4007c8a****',
                          ),
                          'Name' => 
                          array (
                            'description' => '内网访问策略名称。',
                            'type' => 'string',
                            'example' => 'private_access_policy_name
',
                          ),
                          'Description' => 
                          array (
                            'description' => '内网访问策略描述。',
                            'type' => 'string',
                            'example' => '这是一条内网访问策略
',
                          ),
                          'PolicyAction' => 
                          array (
                            'description' => '内网访问策略动作。取值：
- **Block**：阻断。
- **Allow**：允许。',
                            'type' => 'string',
                            'enumValueTitles' => 
                            array (
                              'Block' => '阻断',
                              'Allow' => '允许',
                            ),
                            'example' => 'Allow',
                          ),
                          'Priority' => 
                          array (
                            'description' => '内网访问策略优先级。数字1表示优先级最高。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'Status' => 
                          array (
                            'description' => '内网访问策略状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。',
                            'type' => 'string',
                            'enumValueTitles' => 
                            array (
                              'Enabled' => '开启',
                              'Disabled' => '关闭',
                            ),
                            'example' => 'Enabled',
                          ),
                          'ApplicationType' => 
                          array (
                            'description' => '内网访问策略的应用类型。取值：
- **Application**：应用。
- **Tag**：标签。',
                            'type' => 'string',
                            'enumValueTitles' => 
                            array (
                              'Tag' => '标签',
                              'Application' => '应用',
                            ),
                            'example' => 'Application',
                          ),
                          'UserGroupType' => 
                          array (
                            'description' => '内网访问策略的用户组类型。取值：
- **Normal**：普通用户组。
- **Custom**：自定义用户组。',
                            'type' => 'string',
                            'enumValueTitles' => 
                            array (
                              'Custom' => '自定义',
                              'Normal' => '普通',
                            ),
                            'example' => 'Normal',
                          ),
                          'CustomUserAttributes' => 
                          array (
                            'description' => '自定义用户组属性集合。多个自定义用户组属性之间是或的关系，按照合集生效。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '自定义用户组属性。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'UserGroupType' => 
                                array (
                                  'description' => '用户组的类型。取值：
- **username**：用户名。
- **department**：部门。
- **email**：邮箱。
- **telephone**：手机。',
                                  'type' => 'string',
                                  'enumValueTitles' => 
                                  array (
                                    'telephone' => '手机',
                                    'department' => '部门',
                                    'email' => '邮箱',
                                    'username' => '用户名',
                                  ),
                                  'example' => 'department',
                                ),
                                'Relation' => 
                                array (
                                  'description' => '用户组的关系。取值：
- **Equal**：等于。
- **Unequal**：不等于。',
                                  'type' => 'string',
                                  'enumValueTitles' => 
                                  array (
                                    'Unequal' => '不等于',
                                    'Equal' => '等于',
                                  ),
                                  'example' => 'Equal',
                                ),
                                'Value' => 
                                array (
                                  'description' => '用户组属性的值。
- 当用户组类型为**username**时，表示用户名的值。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。
- 当用户组类型为**department**时，表示部门的值。如：OU=部门1,OU=SASE钉钉。
- 当用户组类型为**email**时，表示邮箱的值。如：username@example.com。
- 当用户组类型为**telephone**时，表示手机的值。如：13900001234。',
                                  'type' => 'string',
                                  'example' => 'OU=部门1,OU=SASE钉钉',
                                ),
                                'IdpId' => 
                                array (
                                  'description' => '用户组的身份源ID。当自定义用户组类型为**department**时，存在该值。',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '12',
                                ),
                              ),
                            ),
                          ),
                          'CreateTime' => 
                          array (
                            'description' => '内网访问策略创建时间。',
                            'type' => 'string',
                            'example' => '2022-09-27 18:10:25',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4AB972E2-D702-5464-B132-B1911498B8BF\\",\\n  \\"Applications\\": [\\n    {\\n      \\"ApplicationId\\": \\"pa-application-b927baf3e592****\\",\\n      \\"Policies\\": [\\n        {\\n          \\"PolicyId\\": \\"pa-policy-867ef4007c8a****\\",\\n          \\"Name\\": \\"private_access_policy_name\\\\n\\",\\n          \\"Description\\": \\"这是一条内网访问策略\\\\n\\",\\n          \\"PolicyAction\\": \\"Allow\\",\\n          \\"Priority\\": 1,\\n          \\"Status\\": \\"Enabled\\",\\n          \\"ApplicationType\\": \\"Application\\",\\n          \\"UserGroupType\\": \\"Normal\\",\\n          \\"CustomUserAttributes\\": [\\n            {\\n              \\"UserGroupType\\": \\"department\\",\\n              \\"Relation\\": \\"Equal\\",\\n              \\"Value\\": \\"OU=部门1,OU=SASE钉钉\\",\\n              \\"IdpId\\": 12\\n            }\\n          ],\\n          \\"CreateTime\\": \\"2022-09-27 18:10:25\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量查询内网访问应用的策略',
    ),
    'GetPrivateAccessApplication' => 
    array (
      'summary' => '查询当前阿里云账号下内网访问应用详情。',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ApplicationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '内网访问应用ID。取值来源：
- [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~)：批量查询内网访问应用。
- [CreatePrivateAccessApplication](~~CreatePrivateAccessApplication~~)：创建内网访问应用。',
            'type' => 'string',
            'required' => true,
            'example' => 'pa-application-e12860ef6c48****',
          ),
        ),
      ),
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
                'example' => '3ACC5EDC-2B7D-5032-8C58-D7615D66C1D4',
              ),
              'Application' => 
              array (
                'description' => '内网访问应用。',
                'type' => 'object',
                'properties' => 
                array (
                  'ApplicationId' => 
                  array (
                    'description' => '内网访问应用ID。',
                    'type' => 'string',
                    'example' => 'pa-application-e12860ef6c48****',
                  ),
                  'Name' => 
                  array (
                    'description' => '内网访问应用名称。',
                    'type' => 'string',
                    'example' => 'private_access_application_name',
                  ),
                  'Description' => 
                  array (
                    'description' => '内网访问应用描述。',
                    'type' => 'string',
                    'example' => '这是一条内网访问应用',
                  ),
                  'Addresses' => 
                  array (
                    'description' => '内网访问应用地址集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '内网访问应用地址。长度为1~128个字符，支持IPv4地址、CIDR、域名、泛域名。',
                      'type' => 'string',
                      'example' => '192.168.0.0/16',
                    ),
                  ),
                  'PortRanges' => 
                  array (
                    'description' => '内网访问应用端口范围集合。多个端口范围不可重复或重叠。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '内网访问应用端口范围。取值：1~65535。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Begin' => 
                        array (
                          'description' => '起始端口。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '80',
                        ),
                        'End' => 
                        array (
                          'description' => '结束端口。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '81',
                        ),
                      ),
                    ),
                  ),
                  'Protocol' => 
                  array (
                    'description' => '内网访问应用协议。取值：
- **All**：全部。
- **TCP**。
- **UDP**。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'All' => 'All',
                      'TCP' => 'TCP',
                      'UDP' => 'UDP',
                    ),
                    'example' => 'All',
                  ),
                  'Status' => 
                  array (
                    'description' => '内网访问应用状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'Enabled' => '开启',
                      'Disabled' => '关闭',
                    ),
                    'example' => 'Enabled',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '内网访问应用创建时间。',
                    'type' => 'string',
                    'example' => '2022-08-30 16:50:32',
                  ),
                  'TagIds' => 
                  array (
                    'description' => '内网访问标签ID集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '内网访问标签ID。',
                      'type' => 'string',
                      'example' => 'tag-d3f64e8bdd4a****',
                    ),
                  ),
                  'PolicyIds' => 
                  array (
                    'description' => '内网访问策略ID集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '内网访问策略ID。',
                      'type' => 'string',
                      'example' => 'pa-policy-54a7838a48bf****',
                    ),
                  ),
                  'ConnectorIds' => 
                  array (
                    'description' => 'ConnectorID集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'ConnectorID。',
                      'type' => 'string',
                      'example' => 'connector-94db94e06b98****',
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
            'errorCode' => 'Application.NotFound',
            'errorMessage' => 'The application is not found.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3ACC5EDC-2B7D-5032-8C58-D7615D66C1D4\\",\\n  \\"Application\\": {\\n    \\"ApplicationId\\": \\"pa-application-e12860ef6c48****\\",\\n    \\"Name\\": \\"private_access_application_name\\",\\n    \\"Description\\": \\"这是一条内网访问应用\\",\\n    \\"Addresses\\": [\\n      \\"192.168.0.0/16\\"\\n    ],\\n    \\"PortRanges\\": [\\n      {\\n        \\"Begin\\": 80,\\n        \\"End\\": 81\\n      }\\n    ],\\n    \\"Protocol\\": \\"All\\",\\n    \\"Status\\": \\"Enabled\\",\\n    \\"CreateTime\\": \\"2022-08-30 16:50:32\\",\\n    \\"TagIds\\": [\\n      \\"tag-d3f64e8bdd4a****\\"\\n    ],\\n    \\"PolicyIds\\": [\\n      \\"pa-policy-54a7838a48bf****\\"\\n    ],\\n    \\"ConnectorIds\\": [\\n      \\"connector-94db94e06b98****\\"\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询内网访问应用详情',
    ),
    'CreatePrivateAccessApplication' => 
    array (
      'summary' => '创建当前阿里云账号下内网访问应用。',
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
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '内网访问应用名称。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => true,
            'example' => 'private_access_application_name',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '内网访问应用描述。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）、短划线（-）和空格。',
            'type' => 'string',
            'required' => false,
            'example' => '这是一条内网访问应用',
          ),
        ),
        2 => 
        array (
          'name' => 'Addresses',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '内网访问应用地址集合。最多可输入1000个内网访问应用地址。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '内网访问应用地址。长度为1~128个字符，支持IPv4地址、CIDR、域名、泛域名。',
              'type' => 'string',
              'required' => true,
              'example' => '192.168.0.0/16',
            ),
            'required' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'PortRanges',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '内网访问应用端口范围集合。最多可输入65535个端口范围。多个端口范围不可重复或重叠。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '内网访问应用端口范围。取值：1~65535。',
              'type' => 'object',
              'properties' => 
              array (
                'Begin' => 
                array (
                  'description' => '起始端口。小于等于结束端口。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => true,
                  'maximum' => '65535',
                  'minimum' => '1',
                  'example' => '80',
                ),
                'End' => 
                array (
                  'description' => '结束端口。大于等于起始端口。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => true,
                  'maximum' => '65535',
                  'minimum' => '1',
                  'example' => '81',
                ),
              ),
              'required' => true,
            ),
            'required' => true,
          ),
        ),
        4 => 
        array (
          'name' => 'Protocol',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '内网访问应用协议。取值：
- **All**：全部。
- **TCP**
- **UDP**',
            'type' => 'string',
            'required' => true,
            'example' => 'All',
            'enum' => 
            array (
              0 => 'All',
              1 => 'TCP',
              2 => 'UDP',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '内网访问应用状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'Enabled' => '开启',
              'Disabled' => '关闭',
            ),
            'example' => 'Enabled',
            'enum' => 
            array (
              0 => 'Enabled',
              1 => 'Disabled',
            ),
          ),
        ),
        6 => 
        array (
          'name' => 'TagIds',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '内网访问标签ID集合。1个内网访问应用最多可关联6个自定义类型的内网访问标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '内网访问标签ID。取值来源：
- [ListPrivateAccessTags](~~ListPrivateAccessTags~~)：批量查询内网访问标签。
- [CreatePrivateAccessTag](~~CreatePrivateAccessTag~~)：创建内网访问标签。',
              'type' => 'string',
              'required' => false,
              'example' => 'tag-d3f64e8bdd4a****',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'BE4FB974-11BC-5453-9BE1-1606A73EACA6',
              ),
              'ApplicationId' => 
              array (
                'description' => '内网访问应用ID。',
                'type' => 'string',
                'example' => 'pa-application-e12860ef6c48****',
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
            'errorCode' => 'Application.NameExisted',
            'errorMessage' => 'The application name is existed.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BE4FB974-11BC-5453-9BE1-1606A73EACA6\\",\\n  \\"ApplicationId\\": \\"pa-application-e12860ef6c48****\\"\\n}","type":"json"}]',
      'title' => '创建内网访问应用',
      'description' => '默认最多可创建500个内网访问应用。',
    ),
    'DeletePrivateAccessApplication' => 
    array (
      'summary' => '删除当前阿里云账号下内网访问应用。',
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
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ApplicationId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '内网访问应用ID。取值来源：
- [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~)：批量查询内网访问应用。
- [CreatePrivateAccessApplication](~~CreatePrivateAccessApplication~~)：创建内网访问应用。',
            'type' => 'string',
            'required' => true,
            'example' => 'pa-application-e12860ef6c48****',
          ),
        ),
      ),
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
                'example' => 'BE4FB974-11BC-5453-9BE1-1606A73EACA6',
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
            'errorCode' => 'Application.NotFound',
            'errorMessage' => 'The application is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Application.UsedByPolicy',
            'errorMessage' => 'The application is used by policy.',
          ),
          1 => 
          array (
            'errorCode' => 'Application.UsedByWorkshop',
            'errorMessage' => 'The application is used by workshop.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BE4FB974-11BC-5453-9BE1-1606A73EACA6\\"\\n}","type":"json"}]',
      'title' => '删除内网访问应用',
      'description' => '当存在办公区识别、策略引用时，不允许删除。参考：
- [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~)：批量查询内网访问应用。
- [ListPrivateAccessPolices](~~ListPrivateAccessPolices~~)：批量查询内网访问策略。',
    ),
    'UpdatePrivateAccessApplication' => 
    array (
      'summary' => '修改当前阿里云账号下内网访问应用。',
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ApplicationId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '内网访问应用ID。取值来源：
- [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~)：批量查询内网访问应用。
- [CreatePrivateAccessApplication](~~CreatePrivateAccessApplication~~)：创建内网访问应用。',
            'type' => 'string',
            'required' => true,
            'example' => 'pa-application-e12860ef6c48****',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '内网访问应用描述。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）、短划线（-）和空格。',
            'type' => 'string',
            'required' => false,
            'example' => '这是一条内网访问应用',
          ),
        ),
        2 => 
        array (
          'name' => 'Addresses',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '内网访问应用地址集合。最多可输入1000个内网访问应用地址。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '内网访问应用地址。长度为1~128个字符，支持IPv4地址、CIDR、域名、泛域名。',
              'type' => 'string',
              'required' => false,
              'example' => '192.168.0.0/16',
            ),
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'PortRanges',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '内网访问应用端口范围集合。最多可输入65535个端口范围。多个端口范围不可重复或重叠。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '内网访问应用端口范围。取值：1~65535。',
              'type' => 'object',
              'properties' => 
              array (
                'Begin' => 
                array (
                  'description' => '起始端口。小于等于结束端口。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '65535',
                  'minimum' => '1',
                  'example' => '80',
                ),
                'End' => 
                array (
                  'description' => '结束端口。大于等于起始端口。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '65535',
                  'minimum' => '1',
                  'example' => '81',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'Protocol',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '内网访问应用协议。取值：
- **All**：全部。
- **TCP**
- **UDP**',
            'type' => 'string',
            'required' => false,
            'example' => 'All',
            'enum' => 
            array (
              0 => 'All',
              1 => 'TCP',
              2 => 'UDP',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '内网访问应用状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Enabled' => '开启',
              'Disabled' => '关闭',
            ),
            'example' => 'Enabled',
            'enum' => 
            array (
              0 => 'Enabled',
              1 => 'Disabled',
            ),
          ),
        ),
        6 => 
        array (
          'name' => 'TagIds',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '内网访问标签ID集合。1个内网访问应用最多可关联6个自定义类型的内网访问标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '内网访问标签ID。取值来源：
- [ListPrivateAccessTags](~~ListPrivateAccessTags~~)：批量查询内网访问标签。
- [CreatePrivateAccessTag](~~CreatePrivateAccessTag~~)：创建内网访问标签。',
              'type' => 'string',
              'required' => false,
              'example' => 'tag-d3f64e8bdd4a****',
            ),
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'ModifyType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '内网访问应用的修改类型。取值：
- **Cover**（默认）：使用**Addresses**、**PortRanges**、**TagIds**参数的值覆盖原地址、端口范围、标签ID集合。
- **Append**：在原地址、端口范围、标签ID集合中分别增加**Addresses**、**PortRanges**、**TagIds**参数中输入的值。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Cover' => '覆盖',
              'Append' => '附加',
            ),
            'example' => 'Cover',
          ),
        ),
      ),
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
                'example' => 'FD724DBC-CD76-5235-BF76-59C51B73296D',
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
            'errorCode' => 'Application.NotFound',
            'errorMessage' => 'The application is not found.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FD724DBC-CD76-5235-BF76-59C51B73296D\\"\\n}","type":"json"}]',
      'title' => '修改内网访问应用',
    ),
    'ListConnectors' => 
    array (
      'summary' => '批量查询当前阿里云账号下Connector实例。',
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
            'description' => '分页查询时显示的当前页的页码。取值：1~10000。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页数量。取值：1~1000。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Connector名称。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'connector_name',
          ),
        ),
        3 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Connector连接状态。取值：
- **Online**：在线。
- **Offline**：离线。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Offline' => '离线',
              'Online' => '在线',
            ),
            'example' => 'Online',
          ),
        ),
        4 => 
        array (
          'name' => 'SwitchStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Connector实例状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Enabled' => '开启',
              'Disabled' => '关闭',
            ),
            'example' => 'Enabled',
          ),
        ),
        5 => 
        array (
          'name' => 'ConnectorIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => 'ConnectorID集合。最多可输入100个ConnectorID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'ConnectorID。取值来源：[ListConnectors](~~ListConnectors~~)批量查询Connector。',
              'type' => 'string',
              'required' => false,
              'example' => 'connector-94db94e06b98****',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '58D6B23E-E5DA-5418-8F61-51A3B5A30049',
              ),
              'TotalNum' => 
              array (
                'description' => 'Connector总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Connectors' => 
              array (
                'description' => 'Connector列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'Connector。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ConnectorId' => 
                    array (
                      'description' => 'ConnectorID。',
                      'type' => 'string',
                      'example' => 'connector-94db94e06b98****',
                    ),
                    'Name' => 
                    array (
                      'description' => 'Connector名称。',
                      'type' => 'string',
                      'example' => 'connector_name',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'SwitchStatus' => 
                    array (
                      'description' => 'Connector实例状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Enabled' => '开启',
                        'Disabled' => '关闭',
                      ),
                      'example' => 'Enabled',
                    ),
                    'Status' => 
                    array (
                      'description' => 'Connector连接状态。取值：
- **Online**：在线。
- **Offline**：离线。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Offline' => '离线',
                        'Online' => '在线',
                      ),
                      'example' => 'Online',
                    ),
                    'Applications' => 
                    array (
                      'description' => '关联的内网访问应用集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '关联的内网访问应用。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ApplicationId' => 
                          array (
                            'description' => '内网访问应用ID。',
                            'type' => 'string',
                            'example' => 'pa-application-e12860ef6c48****
',
                          ),
                          'ApplicationName' => 
                          array (
                            'description' => '内网访问应用名称。',
                            'type' => 'string',
                            'example' => 'application_name',
                          ),
                        ),
                      ),
                    ),
                    'UpgradeTime' => 
                    array (
                      'description' => 'Connector升级时间。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Start' => 
                        array (
                          'description' => '开始时间。',
                          'type' => 'string',
                          'example' => '20:00',
                        ),
                        'End' => 
                        array (
                          'description' => '结束时间。',
                          'type' => 'string',
                          'example' => '23:00',
                        ),
                      ),
                    ),
                    'ConnectorClients' => 
                    array (
                      'description' => '部署的ConnectorClient集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '部署的ConnectorClient。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'DevTag' => 
                          array (
                            'description' => 'ConnectorClient的设备唯一标识。',
                            'type' => 'string',
                            'example' => 'C50A2386-F851-4F11-920B-DF7148DA0C22',
                          ),
                          'Hostname' => 
                          array (
                            'description' => 'ConnectorClient主机名。',
                            'type' => 'string',
                            'example' => 'connector_client',
                          ),
                          'ConnectionStatus' => 
                          array (
                            'description' => 'ConnectorClient和ConnectorServer的连接状态。',
                            'type' => 'string',
                            'enumValueTitles' => 
                            array (
                              'Connected' => '已连接',
                              'Disconnected' => '未连接',
                            ),
                            'example' => 'Disconnected',
                          ),
                          'PublicIp' => 
                          array (
                            'description' => 'ConnectorClient公网IP。',
                            'type' => 'string',
                            'example' => '192.0.2.1',
                          ),
                        ),
                      ),
                    ),
                    'CreateTime' => 
                    array (
                      'description' => 'Connector创建时间。',
                      'type' => 'string',
                      'example' => '2022-09-27 18:10:25',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"58D6B23E-E5DA-5418-8F61-51A3B5A30049\\",\\n  \\"TotalNum\\": 1,\\n  \\"Connectors\\": [\\n    {\\n      \\"ConnectorId\\": \\"connector-94db94e06b98****\\",\\n      \\"Name\\": \\"connector_name\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"SwitchStatus\\": \\"Enabled\\",\\n      \\"Status\\": \\"Online\\",\\n      \\"Applications\\": [\\n        {\\n          \\"ApplicationId\\": \\"pa-application-e12860ef6c48****\\\\n\\",\\n          \\"ApplicationName\\": \\"application_name\\"\\n        }\\n      ],\\n      \\"UpgradeTime\\": {\\n        \\"Start\\": \\"20:00\\",\\n        \\"End\\": \\"23:00\\"\\n      },\\n      \\"ConnectorClients\\": [\\n        {\\n          \\"DevTag\\": \\"C50A2386-F851-4F11-920B-DF7148DA0C22\\",\\n          \\"Hostname\\": \\"connector_client\\",\\n          \\"ConnectionStatus\\": \\"Disconnected\\",\\n          \\"PublicIp\\": \\"192.0.2.1\\"\\n        }\\n      ],\\n      \\"CreateTime\\": \\"2022-09-27 18:10:25\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量查询Connector',
    ),
    'AttachApplication2Connector' => 
    array (
      'summary' => '挂载当前阿里云账号下Connector的内网访问应用。',
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ConnectorId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'ConnectorID。',
            'type' => 'string',
            'required' => true,
            'example' => 'connector-94db94e06b98****
',
          ),
        ),
        1 => 
        array (
          'name' => 'ApplicationIds',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '内网访问应用ID集合。一个Connector最多可挂载内网访问应用的数量不超过内网访问应用总数。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '内网访问策略的应用ID。取值来源：
- [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~)：批量查询内网访问应用。
- [CreatePrivateAccessApplication](~~CreatePrivateAccessApplication~~)：创建内网访问应用。',
              'type' => 'string',
              'required' => true,
              'example' => 'pa-application-f4dd77bced90****',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '7E9D7ACD-53D5-56EF-A913-79D148D06299',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7E9D7ACD-53D5-56EF-A913-79D148D06299\\"\\n}","type":"json"}]',
      'title' => '挂载Connector的应用',
    ),
    'DetachApplication2Connector' => 
    array (
      'summary' => '卸载当前阿里云账号下Connector的内网访问应用。',
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ConnectorId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'ConnectorID。',
            'type' => 'string',
            'required' => true,
            'example' => 'connector-94db94e06b98****',
          ),
        ),
        1 => 
        array (
          'name' => 'ApplicationIds',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '内网访问应用ID集合。最多可输入100个内网访问应用ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '内网访问策略的应用ID。取值来源：
- [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~)：批量查询内网访问应用。
- [CreatePrivateAccessApplication](~~CreatePrivateAccessApplication~~)：创建内网访问应用。',
              'type' => 'string',
              'required' => true,
              'example' => 'pa-application-b927baf3e592****',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '4D169859-A4F2-5EC8-853B-8447787C0D8A',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4D169859-A4F2-5EC8-853B-8447787C0D8A\\"\\n}","type":"json"}]',
      'title' => '卸载Connector的应用',
    ),
    'ListPrivateAccessTags' => 
    array (
      'summary' => '批量查询当前阿里云账号下所有内网访问标签的信息。',
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
            'description' => '分页查询时显示的当前页的页码。取值：1~10000。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页数量。取值：1~1000。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '内网访问标签名称。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'tag_name',
          ),
        ),
        3 => 
        array (
          'name' => 'TagIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '内网访问标签ID集合。最多可输入100个内网访问标签ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '内网访问标签ID。取值来源：
- [ListPrivateAccessTags](~~ListPrivateAccessTags~~)：批量查询内网访问标签。
- [CreatePrivateAccessTag](~~CreatePrivateAccessTag~~)：创建内网访问标签。',
              'type' => 'string',
              'required' => false,
              'example' => 'tag-d3f64e8bdd4a****',
            ),
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'ApplicationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '内网访问应用ID。取值来源：
- [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~)：批量查询内网访问应用。
- [CreatePrivateAccessApplication](~~CreatePrivateAccessApplication~~)：创建内网访问应用。',
            'type' => 'string',
            'required' => false,
            'example' => 'pa-application-e12860ef6c48****',
          ),
        ),
        5 => 
        array (
          'name' => 'PolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '内网访问策略ID。取值来源：
- [ListPrivateAccessPolices](~~ListPrivateAccessPolices~~)：批量查询内网访问策略。
- [CreatePrivateAccessPolicy](~~CreatePrivateAccessPolicy~~)：创建内网访问策略。',
            'type' => 'string',
            'required' => false,
            'example' => 'pa-policy-54a7838a48bf****',
          ),
        ),
        6 => 
        array (
          'name' => 'SimpleMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '简单查询模式。如果值为true，表示不需要查询PolicyId字段。',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '54C1D236-CDB9-586C-B44D-AFDCEA195545',
              ),
              'TotalNum' => 
              array (
                'description' => '内网访问标签总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Tags' => 
              array (
                'description' => '内网访问标签列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '内网访问标签。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TagId' => 
                    array (
                      'description' => '内网访问标签ID。',
                      'type' => 'string',
                      'example' => 'tag-d3f64e8bdd4a****',
                    ),
                    'Name' => 
                    array (
                      'description' => '内网访问标签名称。',
                      'type' => 'string',
                      'example' => 'tag_name',
                    ),
                    'Description' => 
                    array (
                      'description' => '内网访问标签描述。',
                      'type' => 'string',
                      'example' => '这是一条内网访问标签',
                    ),
                    'TagType' => 
                    array (
                      'description' => '内网访问标签类型。取值：
- **Default**：默认。
- **Custom**：自定义。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Custom' => '自定义',
                        'Default' => '默认',
                      ),
                      'example' => 'Default',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '内网访问标签创建时间。',
                      'type' => 'string',
                      'example' => '2022-10-10 11:39:34',
                    ),
                    'ApplicationIds' => 
                    array (
                      'description' => '内网访问应用ID集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '内网访问应用ID。',
                        'type' => 'string',
                        'example' => 'pa-application-e12860ef6c48****',
                      ),
                    ),
                    'PolicyIds' => 
                    array (
                      'description' => '内网访问策略ID集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '内网访问策略ID。',
                        'type' => 'string',
                        'example' => 'pa-policy-54a7838a48bf****',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"54C1D236-CDB9-586C-B44D-AFDCEA195545\\",\\n  \\"TotalNum\\": 1,\\n  \\"Tags\\": [\\n    {\\n      \\"TagId\\": \\"tag-d3f64e8bdd4a****\\",\\n      \\"Name\\": \\"tag_name\\",\\n      \\"Description\\": \\"这是一条内网访问标签\\",\\n      \\"TagType\\": \\"Default\\",\\n      \\"CreateTime\\": \\"2022-10-10 11:39:34\\",\\n      \\"ApplicationIds\\": [\\n        \\"pa-application-e12860ef6c48****\\"\\n      ],\\n      \\"PolicyIds\\": [\\n        \\"pa-policy-54a7838a48bf****\\"\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量查询内网访问标签',
    ),
    'ListApplicationsForPrivateAccessTag' => 
    array (
      'summary' => '批量查询当前阿里云账号下内网访问标签的应用。',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TagIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '内网访问标签ID集合。最多可输入100个内网访问标签ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '内网访问标签ID。取值来源：
- [ListPrivateAccessTags](~~ListPrivateAccessTags~~)：批量查询内网访问标签。
- [CreatePrivateAccessTag](~~CreatePrivateAccessTag~~)：创建内网访问标签。',
              'type' => 'string',
              'required' => false,
              'example' => 'tag-7ffc82853476****',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'B608C6AE-623D-55C4-9454-601B88AE937E',
              ),
              'Tags' => 
              array (
                'description' => '内网访问标签列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '内网访问标签。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TagId' => 
                    array (
                      'description' => '内网访问标签ID。',
                      'type' => 'string',
                      'example' => 'tag-7ffc82853476****',
                    ),
                    'Applications' => 
                    array (
                      'description' => '内网访问应用集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '内网访问应用。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ApplicationId' => 
                          array (
                            'description' => '内网访问应用ID。',
                            'type' => 'string',
                            'example' => 'pa-application-7a9243dd02f4****',
                          ),
                          'Name' => 
                          array (
                            'description' => '内网访问应用名称。',
                            'type' => 'string',
                            'example' => 'private_access_application_name
',
                          ),
                          'Description' => 
                          array (
                            'description' => '内网访问应用描述。',
                            'type' => 'string',
                            'example' => '这是一条内网访问应用
',
                          ),
                          'Addresses' => 
                          array (
                            'description' => '内网访问应用地址集合。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '内网访问应用地址。长度为1~128个字符，支持IPv4地址、CIDR、域名、泛域名。',
                              'type' => 'string',
                              'example' => '192.168.0.0/16',
                            ),
                          ),
                          'PortRanges' => 
                          array (
                            'description' => '内网访问应用端口范围集合。多个端口范围不可重复或重叠。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '内网访问应用端口范围。取值：1~65535。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Begin' => 
                                array (
                                  'description' => '起始端口。',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '80',
                                ),
                                'End' => 
                                array (
                                  'description' => '结束端口。',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '81',
                                ),
                              ),
                            ),
                          ),
                          'Protocol' => 
                          array (
                            'description' => '内网访问应用协议。取值：
- **All**：全部。
- **TCP**
- **UDP**',
                            'type' => 'string',
                            'enumValueTitles' => 
                            array (
                              'All' => 'All',
                              'TCP' => 'TCP',
                              'UDP' => 'UDP',
                            ),
                            'example' => 'All',
                          ),
                          'Status' => 
                          array (
                            'description' => '内网访问应用状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。',
                            'type' => 'string',
                            'enumValueTitles' => 
                            array (
                              'Enabled' => '开启',
                              'Disabled' => '关闭',
                            ),
                            'example' => 'Enabled',
                          ),
                          'CreateTime' => 
                          array (
                            'description' => '内网访问应用创建时间。',
                            'type' => 'string',
                            'example' => '2022-09-27 18:10:25',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B608C6AE-623D-55C4-9454-601B88AE937E\\",\\n  \\"Tags\\": [\\n    {\\n      \\"TagId\\": \\"tag-7ffc82853476****\\",\\n      \\"Applications\\": [\\n        {\\n          \\"ApplicationId\\": \\"pa-application-7a9243dd02f4****\\",\\n          \\"Name\\": \\"private_access_application_name\\\\n\\",\\n          \\"Description\\": \\"这是一条内网访问应用\\\\n\\",\\n          \\"Addresses\\": [\\n            \\"192.168.0.0/16\\"\\n          ],\\n          \\"PortRanges\\": [\\n            {\\n              \\"Begin\\": 80,\\n              \\"End\\": 81\\n            }\\n          ],\\n          \\"Protocol\\": \\"All\\",\\n          \\"Status\\": \\"Enabled\\",\\n          \\"CreateTime\\": \\"2022-09-27 18:10:25\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量查询内网访问标签的应用',
    ),
    'ListPolicesForPrivateAccessTag' => 
    array (
      'summary' => '批量查询当前阿里云账号下内网访问标签的策略。',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TagIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '内网访问标签ID集合。最多可输入100个内网访问标签ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '内网访问标签ID。取值来源：
- [ListPrivateAccessTags](~~ListPrivateAccessTags~~)：批量查询内网访问标签。
- [CreatePrivateAccessTag](~~CreatePrivateAccessTag~~)：创建内网访问标签。',
              'type' => 'string',
              'required' => false,
              'example' => 'tag-b927baf3e592****',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '4D169859-A4F2-5EC8-853B-8447787C0D8A',
              ),
              'Tags' => 
              array (
                'description' => '内网访问标签列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '内网访问标签。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TagId' => 
                    array (
                      'description' => '内网访问标签ID。',
                      'type' => 'string',
                      'example' => 'tag-b927baf3e592****
',
                    ),
                    'Polices' => 
                    array (
                      'description' => '内网访问策略集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '内网访问策略。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'PolicyId' => 
                          array (
                            'description' => '内网访问策略ID。',
                            'type' => 'string',
                            'example' => 'pa-policy-867ef4007c8a****',
                          ),
                          'Name' => 
                          array (
                            'description' => '内网访问策略名称。',
                            'type' => 'string',
                            'example' => 'private_access_policy_name
',
                          ),
                          'Description' => 
                          array (
                            'description' => '内网访问策略描述。',
                            'type' => 'string',
                            'example' => '这是一条内网访问策略',
                          ),
                          'PolicyAction' => 
                          array (
                            'description' => '内网访问策略动作。取值：
- **Block**：阻断。
- **Allow**：允许。',
                            'type' => 'string',
                            'enumValueTitles' => 
                            array (
                              'Block' => '阻断',
                              'Allow' => '允许',
                            ),
                            'example' => 'Allow',
                          ),
                          'Priority' => 
                          array (
                            'description' => '内网访问策略优先级。数字1表示优先级最高。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'Status' => 
                          array (
                            'description' => '内网访问策略状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。',
                            'type' => 'string',
                            'enumValueTitles' => 
                            array (
                              'Enabled' => '开启',
                              'Disabled' => '关闭',
                            ),
                            'example' => 'Enabled',
                          ),
                          'ApplicationType' => 
                          array (
                            'description' => '内网访问策略的应用类型。取值：
- **Application**：应用。
- **Tag**：标签。',
                            'type' => 'string',
                            'enumValueTitles' => 
                            array (
                              'Tag' => '标签',
                              'Application' => '应用',
                            ),
                            'example' => 'Application',
                          ),
                          'UserGroupType' => 
                          array (
                            'description' => '内网访问策略的用户组类型。取值：
- **Normal**：普通用户组。
- **Custom**：自定义用户组。',
                            'type' => 'string',
                            'enumValueTitles' => 
                            array (
                              'Custom' => '自定义',
                              'Normal' => '普通',
                            ),
                            'example' => 'Normal',
                          ),
                          'CustomUserAttributes' => 
                          array (
                            'description' => '自定义用户组属性集合。多个自定义用户组属性之间是或的关系，按照合集生效。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '自定义用户组属性。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'UserGroupType' => 
                                array (
                                  'description' => '用户组的类型。取值：
- **username**：用户名。
- **department**：部门。
- **email**：邮箱。
- **telephone**：手机。',
                                  'type' => 'string',
                                  'enumValueTitles' => 
                                  array (
                                    'telephone' => '手机',
                                    'department' => '部门',
                                    'email' => '邮箱',
                                    'username' => '用户名',
                                  ),
                                  'example' => 'department
',
                                ),
                                'Relation' => 
                                array (
                                  'description' => '用户组的关系。取值：
- **Equal**：等于。
- **Unequal**：不等于。',
                                  'type' => 'string',
                                  'enumValueTitles' => 
                                  array (
                                    'Unequal' => '不等于',
                                    'Equal' => '等于',
                                  ),
                                  'example' => 'Equal',
                                ),
                                'Value' => 
                                array (
                                  'description' => '用户组属性的值。
- 当用户组类型为**username**时，表示用户名的值。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。
- 当用户组类型为**department**时，表示部门的值。如：OU=部门1,OU=SASE钉钉。
- 当用户组类型为**email**时，表示邮箱的值。如：username@example.com。
- 当用户组类型为**telephone**时，表示手机的值。如：13900001234。',
                                  'type' => 'string',
                                  'example' => 'OU=部门1,OU=SASE钉钉',
                                ),
                                'IdpId' => 
                                array (
                                  'description' => '用户组的身份源ID。当自定义用户组类型为**department**时，存在该值。',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '12',
                                ),
                              ),
                            ),
                          ),
                          'CreateTime' => 
                          array (
                            'description' => '内网访问策略创建时间。',
                            'type' => 'string',
                            'example' => '2023-02-21 14:10:16',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4D169859-A4F2-5EC8-853B-8447787C0D8A\\",\\n  \\"Tags\\": [\\n    {\\n      \\"TagId\\": \\"tag-b927baf3e592****\\\\n\\",\\n      \\"Polices\\": [\\n        {\\n          \\"PolicyId\\": \\"pa-policy-867ef4007c8a****\\",\\n          \\"Name\\": \\"private_access_policy_name\\\\n\\",\\n          \\"Description\\": \\"这是一条内网访问策略\\",\\n          \\"PolicyAction\\": \\"Allow\\",\\n          \\"Priority\\": 1,\\n          \\"Status\\": \\"Enabled\\",\\n          \\"ApplicationType\\": \\"Application\\",\\n          \\"UserGroupType\\": \\"Normal\\",\\n          \\"CustomUserAttributes\\": [\\n            {\\n              \\"UserGroupType\\": \\"department\\\\n\\",\\n              \\"Relation\\": \\"Equal\\",\\n              \\"Value\\": \\"OU=部门1,OU=SASE钉钉\\",\\n              \\"IdpId\\": 12\\n            }\\n          ],\\n          \\"CreateTime\\": \\"2023-02-21 14:10:16\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量查询内网访问标签的策略',
    ),
    'CreatePrivateAccessTag' => 
    array (
      'summary' => '创建当前阿里云账号下内网访问标签。',
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
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '内网访问标签名称。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => true,
            'example' => 'tag_name',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '内网访问标签描述。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）、短划线（-）和空格。',
            'type' => 'string',
            'required' => false,
            'example' => '这是一条内网访问标签',
          ),
        ),
      ),
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
                'example' => '102350E7-1A20-58F5-9D63-ABEA820AE6E1',
              ),
              'TagId' => 
              array (
                'description' => '内网访问标签ID。',
                'type' => 'string',
                'example' => 'tag-d3f64e8bdd4a****',
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
            'errorCode' => 'Tag.NameExisted',
            'errorMessage' => 'The tag name is existed.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"102350E7-1A20-58F5-9D63-ABEA820AE6E1\\",\\n  \\"TagId\\": \\"tag-d3f64e8bdd4a****\\"\\n}","type":"json"}]',
      'title' => '创建内网访问标签',
      'description' => '默认最多可创建500个内网访问标签。',
    ),
    'DeletePrivateAccessTag' => 
    array (
      'summary' => '删除当前阿里云账号下内网访问标签。',
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
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TagId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '内网访问标签ID。取值来源：
- [ListPrivateAccessTags](~~ListPrivateAccessTags~~)：批量查询内网访问标签。
- [CreatePrivateAccessTag](~~CreatePrivateAccessTag~~)：创建内网访问标签。',
            'type' => 'string',
            'required' => true,
            'example' => 'tag-d3f64e8bdd4a****',
          ),
        ),
      ),
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
                'example' => 'FD724DBC-CD76-5235-BF76-59C51B73296D',
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
            'errorCode' => 'Tag.NotFound',
            'errorMessage' => 'The tag is not found.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Tag.UsedByApplication',
            'errorMessage' => 'The tag is used by application.',
          ),
          1 => 
          array (
            'errorCode' => 'Tag.UsedByPolicy',
            'errorMessage' => 'The tag is used by policy.',
          ),
          2 => 
          array (
            'errorCode' => 'Tag.UsedByWorkshop',
            'errorMessage' => 'The tag is used by workshop.',
          ),
          3 => 
          array (
            'errorCode' => 'Tag.DefaultCannotDelete',
            'errorMessage' => 'The default tag cannot be deleted.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FD724DBC-CD76-5235-BF76-59C51B73296D\\"\\n}","type":"json"}]',
      'title' => '删除内网访问标签',
      'description' => '当存在应用、办公区识别、策略引用时，不允许删除。参考：
- [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~)：批量查询内网访问应用。
- [ListPrivateAccessTags](~~ListPrivateAccessTags~~)：批量查询内网访问标签。
- [ListPrivateAccessPolices](~~ListPrivateAccessPolices~~)：批量查询内网访问策略。',
    ),
    'ListPrivateAccessPolices' => 
    array (
      'summary' => '获取当前阿里云账号下所有内网访问策略的信息。',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '163588',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcsas7ZB8UX',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时显示的当前页的页码。取值：1~10000。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页数量。取值：1~1000。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '内网访问策略名称。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'private_access_policy_name
',
          ),
        ),
        3 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '内网访问策略状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Enabled' => '开启',
              'Disabled' => '关闭',
            ),
            'example' => 'Enabled',
          ),
        ),
        4 => 
        array (
          'name' => 'PolicyAction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '内网访问策略动作。取值：
- **Block**：阻断。
- **Allow**：允许。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Block' => '阻断',
              'Allow' => '允许',
            ),
            'example' => 'Allow',
          ),
        ),
        5 => 
        array (
          'name' => 'PolicyIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '内网访问策略ID集合。最多可输入100个内网访问策略ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '内网访问策略ID。取值来源：
- [ListPrivateAccessPolices](~~ListPrivateAccessPolices~~)：批量查询内网访问策略。
- [CreatePrivateAccessPolicy](~~CreatePrivateAccessPolicy~~)：创建内网访问策略。',
              'type' => 'string',
              'required' => false,
              'example' => 'pa-policy-63b2f1844b86****',
            ),
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'UserGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户组ID。取值来源：
- [ListUserGroups](~~ListUserGroups~~)：批量查询用户组。
- [CreateUserGroup](~~CreateUserGroup~~)：创建用户组。',
            'type' => 'string',
            'required' => false,
            'example' => 'usergroup-6f1ef2fc56b6****',
          ),
        ),
        7 => 
        array (
          'name' => 'ApplicationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '内网访问应用ID。无法和内网访问标签ID同时过滤。取值来源：
 - [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~)：批量查询内网访问应用。
 - [CreatePrivateAccessApplication](~~CreatePrivateAccessApplication~~)：创建内网访问应用。',
            'type' => 'string',
            'required' => false,
            'example' => 'pa-application-e12860ef6c48****',
          ),
        ),
        8 => 
        array (
          'name' => 'TagId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '内网访问标签ID。无法和应用ID同时过滤。取值来源：
 - [ListPrivateAccessTags](~~ListPrivateAccessTags~~)：批量查询内网访问标签。
 - [CreatePrivateAccessTag](~~CreatePrivateAccessTag~~)：创建内网访问标签。',
            'type' => 'string',
            'required' => false,
            'example' => 'tag-c0cb77857a99****',
          ),
        ),
        9 => 
        array (
          'name' => 'ApplicationName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '内网访问应用名称。',
            'type' => 'string',
            'required' => false,
            'example' => '办公',
          ),
        ),
        10 => 
        array (
          'name' => 'TagName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签名称。',
            'type' => 'string',
            'required' => false,
            'example' => '云产品',
          ),
        ),
      ),
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
                'example' => '748CFDC7-1EB6-5B8B-9405-DA76ED5BB60D',
              ),
              'TotalNum' => 
              array (
                'description' => '内网访问策略的总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Polices' => 
              array (
                'description' => '内网访问策略列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '内网访问策略。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PolicyId' => 
                    array (
                      'description' => '内网访问策略ID。',
                      'type' => 'string',
                      'example' => 'pa-policy-63b2f1844b86****',
                    ),
                    'Name' => 
                    array (
                      'description' => '内网访问策略名称。',
                      'type' => 'string',
                      'example' => 'private_access_policy_name',
                    ),
                    'Description' => 
                    array (
                      'description' => '内网访问策略描述。',
                      'type' => 'string',
                      'example' => '这是一条内网访问策略',
                    ),
                    'PolicyAction' => 
                    array (
                      'description' => '内网访问策略动作。取值：
- **Block**：阻断。
- **Allow**：允许。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Block' => '阻断',
                        'Allow' => '允许',
                      ),
                      'example' => 'Allow',
                    ),
                    'Priority' => 
                    array (
                      'description' => '内网访问策略优先级。数字1表示优先级最高。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'Status' => 
                    array (
                      'description' => '内网访问策略状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Enabled' => '开启',
                        'Disabled' => '关闭',
                      ),
                      'example' => 'Enabled',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '内网访问策略创建时间。',
                      'type' => 'string',
                      'example' => '2022-07-10 15:50:23',
                    ),
                    'UserGroupMode' => 
                    array (
                      'description' => '内网访问策略的用户组类型。取值：
- **Normal**：普通用户组。
- **Custom**：自定义用户组。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Custom' => '自定义用户组',
                        'Normal' => '普通用户组',
                      ),
                      'example' => 'Normal',
                    ),
                    'UserGroupIds' => 
                    array (
                      'description' => '内网访问策略，用户组ID集合。当用户组类型为**Normal**时，该字段有值。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '内网访问策略，用户组类型为**Normal**的用户组ID。',
                        'type' => 'string',
                        'example' => 'usergroup-6f1ef2fc56b6****',
                      ),
                    ),
                    'CustomUserAttributes' => 
                    array (
                      'description' => '自定义用户组属性集合。多个自定义用户组属性之间是或的关系，按照合集生效。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '自定义用户组属性。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'UserGroupType' => 
                          array (
                            'description' => '用户组的类型。取值：
- **username**：用户名。
- **department**：部门。
- **email**：邮箱。
- **telephone**：手机。',
                            'type' => 'string',
                            'enumValueTitles' => 
                            array (
                              'telephone' => '手机',
                              'department' => '部门',
                              'email' => '邮箱',
                              'username' => '用户名',
                            ),
                            'example' => 'department',
                          ),
                          'Relation' => 
                          array (
                            'description' => '用户组的关系。取值：
- **Equal**：等于。
- **Unequal**：不等于。',
                            'type' => 'string',
                            'enumValueTitles' => 
                            array (
                              'Unequal' => '不等于',
                              'Equal' => '等于',
                            ),
                            'example' => 'Equal',
                          ),
                          'Value' => 
                          array (
                            'description' => '用户组属性的值。
- 当用户组类型为**username**时，表示用户名的值。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。
- 当用户组类型为**department**时，表示部门的值。如：OU=部门1,OU=SASE钉钉。
- 当用户组类型为**email**时，表示邮箱的值。如：username@example.com。
- 当用户组类型为**telephone**时，表示手机的值。如：13900001234。',
                            'type' => 'string',
                            'example' => 'OU=部门1,OU=SASE钉钉',
                          ),
                          'IdpId' => 
                          array (
                            'description' => '用户组的身份源ID。当自定义用户组类型为**department**时，存在该值。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '12',
                          ),
                        ),
                      ),
                    ),
                    'ApplicationType' => 
                    array (
                      'description' => '内网访问策略的应用类型。取值：
- **Application**：应用。
- **Tag**：标签。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Tag' => '标签',
                        'Application' => '应用',
                      ),
                      'example' => 'Application',
                    ),
                    'ApplicationIds' => 
                    array (
                      'description' => '内网访问策略的应用ID集合。当应用类型为**Application**时，该字段有值。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '内网访问策略的应用ID。',
                        'type' => 'string',
                        'example' => 'pa-application-e12860ef6c48****',
                      ),
                    ),
                    'TagIds' => 
                    array (
                      'description' => '内网访问策略的标签ID集合。当应用类型为**Tag**时，该字段有值。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '内网访问策略的标签ID。',
                        'type' => 'string',
                        'example' => 'tag-d3f64e8bdd4a****',
                      ),
                    ),
                    'DeviceAttributeId' => 
                    array (
                      'description' => '安全基线策略的ID。',
                      'type' => 'string',
                      'example' => 'dag-d3f64e8bdd4a****',
                    ),
                    'DeviceAttributeAction' => 
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"748CFDC7-1EB6-5B8B-9405-DA76ED5BB60D\\",\\n  \\"TotalNum\\": 1,\\n  \\"Polices\\": [\\n    {\\n      \\"PolicyId\\": \\"pa-policy-63b2f1844b86****\\",\\n      \\"Name\\": \\"private_access_policy_name\\",\\n      \\"Description\\": \\"这是一条内网访问策略\\",\\n      \\"PolicyAction\\": \\"Allow\\",\\n      \\"Priority\\": 1,\\n      \\"Status\\": \\"Enabled\\",\\n      \\"CreateTime\\": \\"2022-07-10 15:50:23\\",\\n      \\"UserGroupMode\\": \\"Normal\\",\\n      \\"UserGroupIds\\": [\\n        \\"usergroup-6f1ef2fc56b6****\\"\\n      ],\\n      \\"CustomUserAttributes\\": [\\n        {\\n          \\"UserGroupType\\": \\"department\\",\\n          \\"Relation\\": \\"Equal\\",\\n          \\"Value\\": \\"OU=部门1,OU=SASE钉钉\\",\\n          \\"IdpId\\": 12\\n        }\\n      ],\\n      \\"ApplicationType\\": \\"Application\\",\\n      \\"ApplicationIds\\": [\\n        \\"pa-application-e12860ef6c48****\\"\\n      ],\\n      \\"TagIds\\": [\\n        \\"tag-d3f64e8bdd4a****\\"\\n      ],\\n      \\"DeviceAttributeId\\": \\"dag-d3f64e8bdd4a****\\",\\n      \\"DeviceAttributeAction\\": \\"\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量查询内网访问策略',
    ),
    'ListUserGroupsForPrivateAccessPolicy' => 
    array (
      'summary' => '批量查询当前阿里云账号下内网访问策略的用户组。',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PolicyIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '内网访问策略ID集合。最多可输入100个内网访问策略ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '内网访问策略ID。取值来源：
- [ListPrivateAccessPolices](~~ListPrivateAccessPolices~~)：批量查询内网访问策略。
- [CreatePrivateAccessPolicy](~~CreatePrivateAccessPolicy~~)：创建内网访问策略。',
              'type' => 'string',
              'required' => false,
              'example' => 'pa-policy-1b0d0e8b4bcf****',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '58D6B23E-E5DA-5418-8F61-51A3B5A30049',
              ),
              'Polices' => 
              array (
                'description' => '内网访问策略列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '内网访问策略。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PolicyId' => 
                    array (
                      'description' => '内网访问策略ID。',
                      'type' => 'string',
                      'example' => 'pa-policy-1b0d0e8b4bcf****',
                    ),
                    'UserGroups' => 
                    array (
                      'description' => '内网访问策略的用户组集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '内网访问策略的用户组。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'UserGroupId' => 
                          array (
                            'description' => '用户组ID。',
                            'type' => 'string',
                            'example' => 'usergroup-6f1ef2fc56b6****',
                          ),
                          'Name' => 
                          array (
                            'description' => '用户组名称。',
                            'type' => 'string',
                            'example' => 'user_group_name',
                          ),
                          'Description' => 
                          array (
                            'description' => '用户组描述。',
                            'type' => 'string',
                            'example' => '这是一条被内网访问策略引用的用户组',
                          ),
                          'Attributes' => 
                          array (
                            'description' => '用户组属性集合。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '用户组属性。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'UserGroupType' => 
                                array (
                                  'description' => '用户组的类型。取值：
- **username**：用户名。
- **department**：部门。
- **email**：邮箱。
- **telephone**：手机。',
                                  'type' => 'string',
                                  'enumValueTitles' => 
                                  array (
                                    'telephone' => '手机',
                                    'department' => '部门',
                                    'email' => '邮箱',
                                    'username' => '用户名',
                                  ),
                                  'example' => 'department',
                                ),
                                'Relation' => 
                                array (
                                  'description' => '用户组的关系。取值：
- **Equal**：等于。
- **Unequal**：不等于。',
                                  'type' => 'string',
                                  'enumValueTitles' => 
                                  array (
                                    'Unequal' => '不等于',
                                    'Equal' => '等于',
                                  ),
                                  'example' => 'Equal',
                                ),
                                'Value' => 
                                array (
                                  'description' => '用户组属性的值。
- 当用户组类型为**username**时，表示用户名的值。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。
- 当用户组类型为**department**时，表示部门的值。如：OU=部门1,OU=SASE钉钉。
- 当用户组类型为**email**时，表示邮箱的值。如：username@example.com。
- 当用户组类型为**telephone**时，表示手机的值。如：13900001234。',
                                  'type' => 'string',
                                  'example' => 'OU=部门1,OU=SASE钉钉',
                                ),
                                'IdpId' => 
                                array (
                                  'description' => '用户组的身份源ID。当自定义用户组类型为**department**时，存在该值。',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '12',
                                ),
                              ),
                            ),
                          ),
                          'CreateTime' => 
                          array (
                            'description' => '用户组创建时间。',
                            'type' => 'string',
                            'example' => '2022-09-27 18:10:25
',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"58D6B23E-E5DA-5418-8F61-51A3B5A30049\\",\\n  \\"Polices\\": [\\n    {\\n      \\"PolicyId\\": \\"pa-policy-1b0d0e8b4bcf****\\",\\n      \\"UserGroups\\": [\\n        {\\n          \\"UserGroupId\\": \\"usergroup-6f1ef2fc56b6****\\",\\n          \\"Name\\": \\"user_group_name\\",\\n          \\"Description\\": \\"这是一条被内网访问策略引用的用户组\\",\\n          \\"Attributes\\": [\\n            {\\n              \\"UserGroupType\\": \\"department\\",\\n              \\"Relation\\": \\"Equal\\",\\n              \\"Value\\": \\"OU=部门1,OU=SASE钉钉\\",\\n              \\"IdpId\\": 12\\n            }\\n          ],\\n          \\"CreateTime\\": \\"2022-09-27 18:10:25\\\\n\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量查询内网访问策略的用户组',
    ),
    'ListApplicationsForPrivateAccessPolicy' => 
    array (
      'summary' => '批量查询当前阿里云账号下内网访问策略的应用。',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PolicyIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '内网访问策略ID集合。最多可输入100个内网访问策略ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '内网访问策略ID。取值来源：
- [ListPrivateAccessPolices](~~ListPrivateAccessPolices~~)：批量查询内网访问策略。
- [CreatePrivateAccessPolicy](~~CreatePrivateAccessPolicy~~)：创建内网访问策略。',
              'type' => 'string',
              'required' => false,
              'example' => 'pa-policy-1b0d0e8b4bcf****',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '4D169859-A4F2-5EC8-853B-8447787C0D8A',
              ),
              'Polices' => 
              array (
                'description' => '内网访问策略列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '内网访问策略。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PolicyId' => 
                    array (
                      'description' => '策略ID。',
                      'type' => 'string',
                      'example' => 'pa-policy-1b0d0e8b4bcf****',
                    ),
                    'Applications' => 
                    array (
                      'description' => '内网访问应用集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '内网访问应用。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ApplicationId' => 
                          array (
                            'description' => '内网访问应用ID。',
                            'type' => 'string',
                            'example' => 'pa-application-7a9243dd02f4****',
                          ),
                          'Name' => 
                          array (
                            'description' => '内网访问应用名称。',
                            'type' => 'string',
                            'example' => 'application_name',
                          ),
                          'Description' => 
                          array (
                            'description' => '内网访问应用描述。',
                            'type' => 'string',
                            'example' => '这是一条被内网访问策略引用的内网访问应用',
                          ),
                          'Addresses' => 
                          array (
                            'description' => '内网访问应用地址集合。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '内网访问应用地址。',
                              'type' => 'string',
                              'example' => '192.168.0.0/16',
                            ),
                          ),
                          'PortRanges' => 
                          array (
                            'description' => '内网访问应用端口范围集合。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '内网访问应用端口范围。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Begin' => 
                                array (
                                  'description' => '起始端口。',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '80',
                                ),
                                'End' => 
                                array (
                                  'description' => '结束端口。',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '81',
                                ),
                              ),
                            ),
                          ),
                          'Protocol' => 
                          array (
                            'description' => '内网访问应用协议。取值：
- **All**：全部。
- **TCP**
- **UDP**',
                            'type' => 'string',
                            'enumValueTitles' => 
                            array (
                              'All' => 'All',
                              'TCP' => 'TCP',
                              'UDP' => 'UDP',
                            ),
                            'example' => 'TCP',
                          ),
                          'Status' => 
                          array (
                            'description' => '内网访问应用状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。',
                            'type' => 'string',
                            'enumValueTitles' => 
                            array (
                              'Enabled' => '开启',
                              'Disabled' => '关闭',
                            ),
                            'example' => 'Enabled',
                          ),
                          'CreateTime' => 
                          array (
                            'description' => '内网访问应用创建时间。',
                            'type' => 'string',
                            'example' => '2022-09-27 18:10:25',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4D169859-A4F2-5EC8-853B-8447787C0D8A\\",\\n  \\"Polices\\": [\\n    {\\n      \\"PolicyId\\": \\"pa-policy-1b0d0e8b4bcf****\\",\\n      \\"Applications\\": [\\n        {\\n          \\"ApplicationId\\": \\"pa-application-7a9243dd02f4****\\",\\n          \\"Name\\": \\"application_name\\",\\n          \\"Description\\": \\"这是一条被内网访问策略引用的内网访问应用\\",\\n          \\"Addresses\\": [\\n            \\"192.168.0.0/16\\"\\n          ],\\n          \\"PortRanges\\": [\\n            {\\n              \\"Begin\\": 80,\\n              \\"End\\": 81\\n            }\\n          ],\\n          \\"Protocol\\": \\"TCP\\",\\n          \\"Status\\": \\"Enabled\\",\\n          \\"CreateTime\\": \\"2022-09-27 18:10:25\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量查询内网访问策略的应用',
    ),
    'ListTagsForPrivateAccessPolicy' => 
    array (
      'summary' => '批量查询当前阿里云账号下内网访问策略的标签。',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PolicyIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '内网访问策略ID集合。最多可输入100个内网访问策略ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '内网访问策略ID。取值来源：
- [ListPrivateAccessPolices](~~ListPrivateAccessPolices~~)：批量查询内网访问策略。
- [CreatePrivateAccessPolicy](~~CreatePrivateAccessPolicy~~)：创建内网访问策略。',
              'type' => 'string',
              'required' => false,
              'example' => 'pa-policy-1b0d0e8b4bcf****',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '9EE61139-A6A8-5E13-80AF-83435C21B26B',
              ),
              'Polices' => 
              array (
                'description' => '内网访问策略列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '内网访问策略。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PolicyId' => 
                    array (
                      'description' => '内网访问策略ID。',
                      'type' => 'string',
                      'example' => 'pa-policy-1b0d0e8b4bcf****',
                    ),
                    'Tags' => 
                    array (
                      'description' => '内网访问标签集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '内网访问标签。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'TagId' => 
                          array (
                            'description' => '内网访问标签ID。',
                            'type' => 'string',
                            'example' => 'tag-d3f64e8bdd4a****',
                          ),
                          'Name' => 
                          array (
                            'description' => '内网访问标签名称。',
                            'type' => 'string',
                            'example' => 'tag_name',
                          ),
                          'Description' => 
                          array (
                            'description' => '内网访问标签描述。',
                            'type' => 'string',
                            'example' => '这是一条被内网访问策略引用的标签',
                          ),
                          'TagType' => 
                          array (
                            'description' => '内网访问标签类型。取值：
- **Default**：默认。
- **Custom**：自定义。',
                            'type' => 'string',
                            'enumValueTitles' => 
                            array (
                              'Custom' => '自定义',
                              'Default' => '默认',
                            ),
                            'example' => 'Default',
                          ),
                          'CreateTime' => 
                          array (
                            'description' => '内网访问标签创建时间。',
                            'type' => 'string',
                            'example' => '2023-02-21 14:10:16',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9EE61139-A6A8-5E13-80AF-83435C21B26B\\",\\n  \\"Polices\\": [\\n    {\\n      \\"PolicyId\\": \\"pa-policy-1b0d0e8b4bcf****\\",\\n      \\"Tags\\": [\\n        {\\n          \\"TagId\\": \\"tag-d3f64e8bdd4a****\\",\\n          \\"Name\\": \\"tag_name\\",\\n          \\"Description\\": \\"这是一条被内网访问策略引用的标签\\",\\n          \\"TagType\\": \\"Default\\",\\n          \\"CreateTime\\": \\"2023-02-21 14:10:16\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量查询内网访问策略的标签',
    ),
    'GetPrivateAccessPolicy' => 
    array (
      'summary' => '获取当前阿里云账号下指定内网访问策略的详情信息。',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '163586',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcsas7ZB8UX',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '内网访问策略ID。取值来源：
- [ListPrivateAccessPolices](~~ListPrivateAccessPolices~~)：批量查询内网访问策略。
- [CreatePrivateAccessPolicy](~~CreatePrivateAccessPolicy~~)：创建内网访问策略。',
            'type' => 'string',
            'required' => true,
            'example' => 'pa-policy-63b2f1844b86****',
          ),
        ),
      ),
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
                'example' => '7E9D7ACD-53D5-56EF-A913-79D148D06299',
              ),
              'Policy' => 
              array (
                'description' => '内网访问策略。',
                'type' => 'object',
                'properties' => 
                array (
                  'PolicyId' => 
                  array (
                    'description' => '内网访问策略ID。',
                    'type' => 'string',
                    'example' => 'pa-policy-63b2f1844b86****',
                  ),
                  'Name' => 
                  array (
                    'description' => '内网访问策略名称。',
                    'type' => 'string',
                    'example' => 'private_access_policy_name',
                  ),
                  'Description' => 
                  array (
                    'description' => '内网访问策略描述。',
                    'type' => 'string',
                    'example' => '这是一条内网访问策略',
                  ),
                  'PolicyAction' => 
                  array (
                    'description' => '内网访问策略动作。取值：
- **Block**：阻断。
- **Allow**：允许。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'Block' => '阻断',
                      'Allow' => '允许',
                    ),
                    'example' => 'Allow',
                  ),
                  'Priority' => 
                  array (
                    'description' => '内网访问策略优先级。数字1表示优先级最高。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Status' => 
                  array (
                    'description' => '内网访问策略状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'Enabled' => '开启',
                      'Disabled' => '关闭',
                    ),
                    'example' => 'Enabled',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '内网访问策略创建时间。',
                    'type' => 'string',
                    'example' => '2021-07-29 11:26:02',
                  ),
                  'UserGroupMode' => 
                  array (
                    'description' => '内网访问策略的用户组类型。取值：
- **Normal**：普通用户组。
- **Custom**：自定义用户组。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'Custom' => '自定义用户组',
                      'Normal' => '普通用户组',
                    ),
                    'example' => 'Normal',
                  ),
                  'UserGroupIds' => 
                  array (
                    'description' => '内网访问策略，用户组ID集合。当用户组类型为Normal时，该字段有值。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '内网访问策略，用户组类型为Normal的用户组ID。',
                      'type' => 'string',
                      'example' => 'usergroup-6f1ef2fc56b6****',
                    ),
                  ),
                  'CustomUserAttributes' => 
                  array (
                    'description' => '自定义用户组属性集合。多个自定义用户组属性之间是或的关系，按照合集生效。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '自定义用户组属性。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'UserGroupType' => 
                        array (
                          'description' => '自定义用户组的类型。取值：
- **username**：用户名。
- **department**：部门。
- **email**：邮箱。
- **telephone**：手机。',
                          'type' => 'string',
                          'enumValueTitles' => 
                          array (
                            'telephone' => '手机',
                            'department' => '部门',
                            'email' => '邮箱',
                            'username' => '用户名',
                          ),
                          'example' => 'department',
                        ),
                        'Relation' => 
                        array (
                          'description' => '自定义用户组的关系。取值：
- **Equal**：等于。
- **Unequal**：不等于。',
                          'type' => 'string',
                          'enumValueTitles' => 
                          array (
                            'Unequal' => '不等于',
                            'Equal' => '等于',
                          ),
                          'example' => 'Equal',
                        ),
                        'Value' => 
                        array (
                          'description' => '自定义用户组属性的值。
- 当用户组类型为**username**时，表示用户名的值。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。
- 当用户组类型为**department**时，表示部门的值。如：OU=部门1,OU=SASE钉钉。
- 当用户组类型为**email**时，表示邮箱的值。如：username@example.com。
- 当用户组类型为**telephone**时，表示手机的值。如：13900001234。',
                          'type' => 'string',
                          'example' => 'OU=部门1,OU=SASE钉钉',
                        ),
                        'IdpId' => 
                        array (
                          'description' => '自定义用户组的身份源ID。当自定义用户组类型为**department**时，必填。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '12',
                        ),
                      ),
                    ),
                  ),
                  'ApplicationType' => 
                  array (
                    'description' => '内网访问策略的应用类型。取值：
- **Application**：应用。
- **Tag**：标签。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'Tag' => '标签',
                      'Application' => '应用',
                    ),
                    'example' => 'Application',
                  ),
                  'ApplicationIds' => 
                  array (
                    'description' => '内网访问策略的应用ID集合。当应用类型为Application时，该字段有值。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '内网访问策略的应用ID。',
                      'type' => 'string',
                      'example' => 'pa-application-e12860ef6c48****
',
                    ),
                  ),
                  'TagIds' => 
                  array (
                    'description' => '内网访问策略的标签ID集合。当应用类型为Tag时，该字段有值。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '内网访问策略的标签ID。',
                      'type' => 'string',
                      'example' => 'tag-d3f64e8bdd4a****
',
                    ),
                  ),
                  'DeviceAttributeId' => 
                  array (
                    'description' => '安全基线策略的ID。',
                    'type' => 'string',
                    'example' => 'dag-d3f64e8bdd4a****',
                  ),
                  'DeviceAttributeAction' => 
                  array (
                    'type' => 'string',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7E9D7ACD-53D5-56EF-A913-79D148D06299\\",\\n  \\"Policy\\": {\\n    \\"PolicyId\\": \\"pa-policy-63b2f1844b86****\\",\\n    \\"Name\\": \\"private_access_policy_name\\",\\n    \\"Description\\": \\"这是一条内网访问策略\\",\\n    \\"PolicyAction\\": \\"Allow\\",\\n    \\"Priority\\": 1,\\n    \\"Status\\": \\"Enabled\\",\\n    \\"CreateTime\\": \\"2021-07-29 11:26:02\\",\\n    \\"UserGroupMode\\": \\"Normal\\",\\n    \\"UserGroupIds\\": [\\n      \\"usergroup-6f1ef2fc56b6****\\"\\n    ],\\n    \\"CustomUserAttributes\\": [\\n      {\\n        \\"UserGroupType\\": \\"department\\",\\n        \\"Relation\\": \\"Equal\\",\\n        \\"Value\\": \\"OU=部门1,OU=SASE钉钉\\",\\n        \\"IdpId\\": 12\\n      }\\n    ],\\n    \\"ApplicationType\\": \\"Application\\",\\n    \\"ApplicationIds\\": [\\n      \\"pa-application-e12860ef6c48****\\\\n\\"\\n    ],\\n    \\"TagIds\\": [\\n      \\"tag-d3f64e8bdd4a****\\\\n\\"\\n    ],\\n    \\"DeviceAttributeId\\": \\"dag-d3f64e8bdd4a****\\",\\n    \\"DeviceAttributeAction\\": \\"\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询内网访问策略详情',
    ),
    'CreatePrivateAccessPolicy' => 
    array (
      'summary' => '创建当前阿里云账号下内网访问策略。',
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
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '163595',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcsas7ZB8UX',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '内网访问策略名称。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => true,
            'example' => 'private_access_policy_name',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '内网访问策略描述。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）、短划线（-）和空格。',
            'type' => 'string',
            'required' => false,
            'example' => '这是一条内网访问策略',
          ),
        ),
        2 => 
        array (
          'name' => 'PolicyAction',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '内网访问策略动作。取值：
- **Block**：阻断。
- **Allow**：允许。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'Block' => '阻断',
              'Allow' => '允许',
            ),
            'example' => 'Allow',
          ),
        ),
        3 => 
        array (
          'name' => 'ApplicationType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '内网访问策略的应用类型。取值：
- **Application**：应用。
- **Tag**：标签。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'Tag' => '标签',
              'Application' => '应用',
            ),
            'example' => 'Application',
          ),
        ),
        4 => 
        array (
          'name' => 'ApplicationIds',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '内网访问策略的应用ID集合。最多可输入100个内网访问应用ID。当**ApplicationType**为**Application时**，必填。和**TagIds**互斥。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '内网访问策略的应用ID。取值来源：
- [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~)：批量查询内网访问应用。
- [CreatePrivateAccessApplication](~~CreatePrivateAccessApplication~~)：创建内网访问应用。',
              'type' => 'string',
              'required' => false,
              'example' => 'pa-application-f4dd77bced90****',
            ),
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'TagIds',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '内网访问标签ID集合。最多可输入100个内网访问标签ID。当**ApplicationType**为**Tag时**，必填。和**ApplicationIds**互斥。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '内网访问策略的标签ID。取值来源：
- [ListPrivateAccessTags](~~ListPrivateAccessTags~~)：批量查询内网访问标签。
- [CreatePrivateAccessTag](~~CreatePrivateAccessTag~~)：创建内网访问标签。',
              'type' => 'string',
              'required' => false,
              'example' => 'tag-d3f64e8bdd4a****',
            ),
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'UserGroupMode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '内网访问策略的用户组类型。取值：
- **Normal**：普通用户组。
- **Custom**：自定义用户组。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'Custom' => '自定义用户组',
              'Normal' => '普通用户组',
            ),
            'example' => 'Normal',
          ),
        ),
        7 => 
        array (
          'name' => 'UserGroupIds',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '内网访问策略的用户组ID集合，当用户组类型为**Normal**时，必填。和自定义用户组集合互斥。最多可输入2000个用户组ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '内网访问策略用户组类型为Normal的用户组ID。取值来源：
- [ListUserGroups](~~ListUserGroups~~)：批量查询用户组。
- [CreateUserGroup](~~CreateUserGroup~~)：创建用户组。',
              'type' => 'string',
              'required' => false,
              'example' => 'usergroup-927a4c7fee94****',
            ),
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'CustomUserAttributes',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '内网访问策略的自定义用户组集合，当用户组类型为**Custom**时，必填。和用户组ID集合互斥。最多可输入10个自定义用户组。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '内网访问策略的自定义用户组。',
              'type' => 'object',
              'properties' => 
              array (
                'UserGroupType' => 
                array (
                  'description' => '自定义用户组的类型。取值：
- **username**：用户名。
- **department**：部门。
- **email**：邮箱。
- **telephone**：手机。',
                  'type' => 'string',
                  'required' => false,
                  'enumValueTitles' => 
                  array (
                    'telephone' => '手机',
                    'department' => '部门',
                    'email' => '邮箱',
                    'username' => '用户名',
                  ),
                  'example' => 'department',
                ),
                'Relation' => 
                array (
                  'description' => '自定义用户组的关系。取值：
- **Equal**：等于。
- **Unequal**：不等于。',
                  'type' => 'string',
                  'required' => false,
                  'enumValueTitles' => 
                  array (
                    'Unequal' => '不等于',
                    'Equal' => '等于',
                  ),
                  'example' => 'Equal',
                ),
                'Value' => 
                array (
                  'description' => '自定义用户组属性的值。
- 当用户组类型为**username**时，表示用户名的值。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）、星号（*）、at（@）和空格。
- 当用户组类型为**department**时，表示部门的值。如：OU=部门1,OU=SASE钉钉。
- 当用户组类型为**email**时，表示邮箱的值。如：username@example.com。
- 当用户组类型为**telephone**时，表示手机的值。如：13900001234。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'OU=部门1,OU=SASE钉钉',
                ),
                'IdpId' => 
                array (
                  'description' => '自定义用户组的身份源ID。当自定义用户组类型为**department**时，必填。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '12',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        9 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '内网访问策略的状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'Enabled' => '开启',
              'Disabled' => '关闭',
            ),
            'example' => 'Enabled',
          ),
        ),
        10 => 
        array (
          'name' => 'Priority',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '内网访问策略优先级。数字1表示优先级最高。取值：1~1000，最大值为内网访问策略总数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        11 => 
        array (
          'name' => 'DeviceAttributeId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '安全基线策略的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'dag-d3f64e8bdd4a****',
          ),
        ),
        12 => 
        array (
          'name' => 'DeviceAttributeAction',
          'in' => 'formData',
          'schema' => 
          array (
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'EFE7EBB2-449D-5BBB-B381-CA7839BC1649',
              ),
              'PolicyId' => 
              array (
                'description' => '内网访问策略ID。',
                'type' => 'string',
                'example' => 'pa-policy-867ef4007c8a****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EFE7EBB2-449D-5BBB-B381-CA7839BC1649\\",\\n  \\"PolicyId\\": \\"pa-policy-867ef4007c8a****\\"\\n}","type":"json"}]',
      'title' => '创建内网访问策略',
      'description' => '默认最多可创建500个内网访问策略。',
    ),
    'DeletePrivateAccessPolicy' => 
    array (
      'summary' => '删除当前阿里云账号下内网访问策略。',
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
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PolicyId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '内网访问策略ID。取值来源：
- [ListPrivateAccessPolices](~~ListPrivateAccessPolices~~)：批量查询内网访问策略。
- [CreatePrivateAccessPolicy](~~CreatePrivateAccessPolicy~~)：创建内网访问策略。',
            'type' => 'string',
            'required' => true,
            'example' => 'pa-policy-867ef4007c8a****',
          ),
        ),
      ),
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
                'example' => '4D169859-A4F2-5EC8-853B-8447787C0D8A',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4D169859-A4F2-5EC8-853B-8447787C0D8A\\"\\n}","type":"json"}]',
      'title' => '删除内网访问策略',
    ),
    'UpdatePrivateAccessPolicy' => 
    array (
      'summary' => '修改当前阿里云账号下内网访问策略。',
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
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '163583',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcsas7ZB8UX',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PolicyId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '内网访问策略ID。取值来源：
- [ListPrivateAccessPolices](~~ListPrivateAccessPolices~~)：批量查询内网访问策略。
- [CreatePrivateAccessPolicy](~~CreatePrivateAccessPolicy~~)：创建内网访问策略。',
            'type' => 'string',
            'required' => true,
            'example' => 'pa-policy-63b2f1844b86****',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '内网访问策略描述。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）、短划线（-）和空格。',
            'type' => 'string',
            'required' => false,
            'example' => '这是一条内网访问策略',
          ),
        ),
        2 => 
        array (
          'name' => 'PolicyAction',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '内网访问策略动作。取值：
- **Block**：阻断。
- **Allow**：允许。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Block' => '阻断',
              'Allow' => '允许',
            ),
            'example' => 'Allow',
          ),
        ),
        3 => 
        array (
          'name' => 'ApplicationType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '内网访问策略的应用类型。取值：
- **Application**：应用。
- **Tag**：标签。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Tag' => '标签',
              'Application' => '应用',
            ),
            'example' => 'Application',
          ),
        ),
        4 => 
        array (
          'name' => 'ApplicationIds',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '内网访问策略的应用ID集合。一条策略最多支持100个内网访问应用ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '内网访问策略的应用ID。取值来源：
- [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~)：批量查询内网访问应用。
- [CreatePrivateAccessApplication](~~CreatePrivateAccessApplication~~)：创建内网访问应用。',
              'type' => 'string',
              'required' => false,
              'example' => 'pa-application-f4dd77bced90****',
            ),
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'TagIds',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '内网访问标签ID集合。一条策略最多支持100个内网访问标签ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '内网访问策略的标签ID。取值来源：
- [ListPrivateAccessTags](~~ListPrivateAccessTags~~)：批量查询内网访问标签。
- [CreatePrivateAccessTag](~~CreatePrivateAccessTag~~)：创建内网访问标签。',
              'type' => 'string',
              'required' => false,
              'example' => 'tag-57c8238455b9****',
            ),
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'UserGroupMode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '内网访问策略的用户组类型。取值：
- **Normal**：普通用户组。
- **Custom**：自定义用户组。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Custom' => '自定义用户组',
              'Normal' => '普通用户组',
            ),
            'example' => 'Normal',
          ),
        ),
        7 => 
        array (
          'name' => 'UserGroupIds',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '内网访问策略的用户组ID集合，当用户组类型为**Normal**时，必填。和自定义用户组集合互斥。单个策略的用户组最大支持10000个，单次修改的用户组ID数量最多2000个。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '内网访问策略用户组类型为Normal的用户组ID。取值来源：
- [ListUserGroups](~~ListUserGroups~~)：批量查询用户组。
- [CreateUserGroup](~~CreateUserGroup~~)：创建用户组。',
              'type' => 'string',
              'required' => false,
              'example' => 'usergroup-927a4c7fee94****',
            ),
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'CustomUserAttributes',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '内网访问策略的自定义用户组集合，当用户组类型为**Custom**时，必填。和用户组ID集合互斥。自定义用户组总数最多10个。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '内网访问策略的自定义用户组。',
              'type' => 'object',
              'properties' => 
              array (
                'UserGroupType' => 
                array (
                  'description' => '自定义用户组的类型。取值：
- **username**：用户名。
- **department**：部门。
- **email**：邮箱。
- **telephone**：手机。',
                  'type' => 'string',
                  'required' => true,
                  'enumValueTitles' => 
                  array (
                    'telephone' => '手机',
                    'department' => '部门',
                    'email' => '邮箱',
                    'username' => '用户名',
                  ),
                  'example' => 'department
',
                ),
                'Relation' => 
                array (
                  'description' => '自定义用户组的关系。取值：
- **Equal**：等于。
- **Unequal**：不等于。',
                  'type' => 'string',
                  'required' => true,
                  'enumValueTitles' => 
                  array (
                    'Unequal' => '不等于',
                    'Equal' => '等于',
                  ),
                  'example' => 'Equal',
                ),
                'Value' => 
                array (
                  'description' => '自定义用户组属性的值。
- 当用户组类型为**username**时，表示用户名的值。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）、星号（*）、at（@）和空格。
- 当用户组类型为**department**时，表示部门的值。如：OU=部门1,OU=SASE钉钉。
- 当用户组类型为**email**时，表示邮箱的值。如：username@example.com。
- 当用户组类型为**telephone**时，表示手机的值。如：13900001234。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'OU=部门1,OU=SASE钉钉',
                ),
                'IdpId' => 
                array (
                  'description' => '自定义用户组的身份源ID。当自定义用户组类型为**department**时，必填。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '12',
                ),
              ),
              'required' => true,
            ),
            'required' => false,
          ),
        ),
        9 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '内网访问策略的状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Enabled' => '开启',
              'Disabled' => '关闭',
            ),
            'example' => 'Enabled',
          ),
        ),
        10 => 
        array (
          'name' => 'Priority',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '内网访问策略优先级。数字1表示优先级最高。取值：1~1000，最大值为内网访问策略总数减一。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        11 => 
        array (
          'name' => 'ModifyType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '内网访问策略的修改类型。取值：
- **Cover**（默认）：使用**ApplicationIds**、**UserGroupIds**、**CustomUserAttributes**参数的值覆盖原应用ID集合、用户组ID集合、自定义用户组集合。
- **Append**：在原应用ID集合、用户组ID集合、自定义用户组集合中分别增加**ApplicationIds**、**UserGroupIds**、**CustomUserAttributes**参数中输入的值。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Cover' => '覆盖',
              'Append' => '附加',
            ),
            'example' => 'Cover',
          ),
        ),
        12 => 
        array (
          'name' => 'DeviceAttributeId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '安全基线策略的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'dag-d3f64e8bdd4a****',
          ),
        ),
        13 => 
        array (
          'name' => 'DeviceAttributeAction',
          'in' => 'formData',
          'schema' => 
          array (
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '5FEF5CFA-14CC-5DE5-BD1F-AFFE0996E71D',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5FEF5CFA-14CC-5DE5-BD1F-AFFE0996E71D\\"\\n}","type":"json"}]',
      'title' => '修改内网访问策略',
    ),
    'ListDynamicRoutes' => 
    array (
      'summary' => '获取当前阿里云账号下所有动态路由的信息。',
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
            'description' => '分页查询时显示的当前页的页码。取值：1~10000。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页数量。取值：1~1000。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '动态路由名称。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'dynamic_route_name',
          ),
        ),
        3 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '动态路由状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Enabled' => '开启',
              'Disabled' => '关闭',
            ),
            'example' => 'Enabled',
          ),
        ),
        4 => 
        array (
          'name' => 'DynamicRouteIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '动态路由ID集合。最多可输入100个动态路由ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '动态路由ID。取值来源：
- [ListDynamicRoutes](~~ListDynamicRoutes~~)：批量查询动态路由。
- [CreateDynamicRoute](~~CreateDynamicRoute~~)：创建动态路由。',
              'type' => 'string',
              'required' => false,
              'example' => 'dr-30108b6c9d31****',
            ),
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'RegionIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => 'SASE的POP集群接入点支持的地域列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'SASE的POP集群接入点支持的地域。取值来源：
 - [ListDynamicRouteRegions](~~ListDynamicRouteRegions~~)：批量查询动态路由已授权地域。',
              'type' => 'string',
              'required' => false,
              'enumValueTitles' => 
              array (
                'cn-shenzhen' => '深圳',
                'cn-beijing' => '北京',
                'cn-shanghai' => '上海',
                'ap-southeast-1' => '新加坡',
                'us-east-1' => '弗吉尼亚',
                'us-west-1' => '硅谷',
                'cn-hangzhou' => '杭州',
                'cn-chengdu' => '成都',
              ),
              'example' => 'ap-southeast-1',
            ),
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'ApplicationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '动态路由的内网访问应用ID。无法和内网访问标签ID同时过滤。取值来源：
 - [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~)：批量查询内网访问应用。
 - [CreatePrivateAccessApplication](~~CreatePrivateAccessApplication~~)：创建内网访问应用。',
            'type' => 'string',
            'required' => false,
            'example' => 'pa-application-e12860ef6c48****',
          ),
        ),
        7 => 
        array (
          'name' => 'TagId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '动态路由的内网访问标签ID。无法和内网访问应用ID同时过滤。取值来源：
 - [ListPrivateAccessTags](~~ListPrivateAccessTags~~)：批量查询内网访问标签。
 - [CreatePrivateAccessTag](~~CreatePrivateAccessTag~~)：创建内网访问标签。',
            'type' => 'string',
            'required' => false,
            'example' => 'tag-d3f64e8bdd4a****',
          ),
        ),
        8 => 
        array (
          'name' => 'NextHop',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '动态路由下一跳实例ID。取值来源：
 - [ListConnectors](~~ListConnectors~~)：批量查询Connector。',
            'type' => 'string',
            'required' => false,
            'example' => 'connector-8ccb13b6f52c****',
          ),
        ),
      ),
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
                'example' => '58D6B23E-E5DA-5418-8F61-51A3B5A30049',
              ),
              'TotalNum' => 
              array (
                'description' => '动态路由的总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'DynamicRoutes' => 
              array (
                'description' => '动态路由列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '动态路由。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DynamicRouteId' => 
                    array (
                      'description' => '动态路由ID。',
                      'type' => 'string',
                      'example' => 'dr-a0ca843f53cf****',
                    ),
                    'Name' => 
                    array (
                      'description' => '动态路由的名称。',
                      'type' => 'string',
                      'example' => 'dynamic_route_name',
                    ),
                    'Description' => 
                    array (
                      'description' => '动态路由的描述。',
                      'type' => 'string',
                      'example' => '这是一条动态路由',
                    ),
                    'Status' => 
                    array (
                      'description' => '动态路由状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Enabled' => '开启',
                        'Disabled' => '关闭',
                      ),
                      'example' => 'Enabled',
                    ),
                    'Priority' => 
                    array (
                      'description' => '动态路由优先级。数字1表示优先级最高。优先级排序和列表查询从上到下保持一致。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'RegionIds' => 
                    array (
                      'description' => 'SASE的POP集群接入点支持的地域列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'SASE的POP集群接入点支持的地域。',
                        'type' => 'string',
                        'enumValueTitles' => 
                        array (
                          'cn-shenzhen' => '深圳',
                          'cn-beijing' => '北京',
                          'cn-shanghai' => '上海',
                          'ap-southeast-1' => '新加坡',
                          'us-east-1' => '弗吉尼亚',
                          'us-west-1' => '硅谷',
                          'cn-hangzhou' => '杭州',
                          'cn-chengdu' => '成都',
                        ),
                        'example' => 'ap-southeast-1',
                      ),
                    ),
                    'ApplicationType' => 
                    array (
                      'description' => '动态路由的应用类型。取值：
- **All**：全部应用。
- **Application**：应用。
- **Tag**：标签。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'All' => '全部应用',
                        'Tag' => '标签',
                        'Application' => '应用',
                      ),
                      'example' => 'Application',
                    ),
                    'ApplicationIds' => 
                    array (
                      'description' => '动态路由的内网访问应用ID集合。当应用类型为**Application**时，该字段有值。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '动态路由的内网访问应用ID。',
                        'type' => 'string',
                        'example' => 'pa-application-e12860ef6c48****',
                      ),
                    ),
                    'TagIds' => 
                    array (
                      'description' => '动态路由的内网访问标签ID集合。当应用类型为**Tag**时，该字段有值。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '动态路由的内网访问标签ID。',
                        'type' => 'string',
                        'example' => 'tag-d3f64e8bdd4a****',
                      ),
                    ),
                    'DynamicRouteType' => 
                    array (
                      'description' => '动态路由类型。取值：**connector**：自有专线。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'connector' => '自有专线',
                      ),
                      'example' => 'connector',
                    ),
                    'NextHop' => 
                    array (
                      'description' => '动态路由下一跳示例ID。',
                      'type' => 'string',
                      'example' => 'connector-8ccb13b6f52c****',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '动态路由创建时间。',
                      'type' => 'string',
                      'example' => '2023-03-21 11:50:03',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"58D6B23E-E5DA-5418-8F61-51A3B5A30049\\",\\n  \\"TotalNum\\": 1,\\n  \\"DynamicRoutes\\": [\\n    {\\n      \\"DynamicRouteId\\": \\"dr-a0ca843f53cf****\\",\\n      \\"Name\\": \\"dynamic_route_name\\",\\n      \\"Description\\": \\"这是一条动态路由\\",\\n      \\"Status\\": \\"Enabled\\",\\n      \\"Priority\\": 1,\\n      \\"RegionIds\\": [\\n        \\"ap-southeast-1\\"\\n      ],\\n      \\"ApplicationType\\": \\"Application\\",\\n      \\"ApplicationIds\\": [\\n        \\"pa-application-e12860ef6c48****\\"\\n      ],\\n      \\"TagIds\\": [\\n        \\"tag-d3f64e8bdd4a****\\"\\n      ],\\n      \\"DynamicRouteType\\": \\"connector\\",\\n      \\"NextHop\\": \\"connector-8ccb13b6f52c****\\",\\n      \\"CreateTime\\": \\"2023-03-21 11:50:03\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量查询动态路由',
    ),
    'ListPrivateAccessApplicationsForDynamicRoute' => 
    array (
      'summary' => '批量查询当前阿里云账号下动态路由的应用。',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DynamicRouteIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '动态路由ID集合。最多可输入100个动态路由ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '动态路由ID。取值来源：
- [ListDynamicRoutes](~~2525438~~)：批量查询动态路由。
- [CreateDynamicRoute](~~2525443~~)：创建动态路由。',
              'type' => 'string',
              'required' => false,
              'example' => 'dr-ca9fddfac7c6****',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'BE4FB974-11BC-5453-9BE1-1606A73EACA6',
              ),
              'DynamicRoutes' => 
              array (
                'description' => '动态路由列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '动态路由。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DynamicRouteId' => 
                    array (
                      'description' => '动态路由ID。',
                      'type' => 'string',
                      'example' => 'dr-ca9fddfac7c6****
',
                    ),
                    'Applications' => 
                    array (
                      'description' => '内网访问应用集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '内网访问应用。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ApplicationId' => 
                          array (
                            'description' => '内网访问应用ID。',
                            'type' => 'string',
                            'example' => 'pa-application-7a9243dd02f4****',
                          ),
                          'Name' => 
                          array (
                            'description' => '内网访问应用名称。',
                            'type' => 'string',
                            'example' => 'application_name',
                          ),
                          'Description' => 
                          array (
                            'description' => '内网访问应用描述。',
                            'type' => 'string',
                            'example' => '这是一条被动态路由引用的内网访问应用',
                          ),
                          'Addresses' => 
                          array (
                            'description' => '内网访问应用地址集合。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '内网访问应用地址。',
                              'type' => 'string',
                              'example' => '192.168.0.0/16',
                            ),
                          ),
                          'PortRanges' => 
                          array (
                            'description' => '内网访问应用端口范围集合。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '内网访问应用端口范围。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Begin' => 
                                array (
                                  'description' => '起始端口。',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '80',
                                ),
                                'End' => 
                                array (
                                  'description' => '结束端口。',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '81',
                                ),
                              ),
                            ),
                          ),
                          'Protocol' => 
                          array (
                            'description' => '内网访问应用协议。取值：
- **All**：全部。
- **TCP**
- **UDP**',
                            'type' => 'string',
                            'enumValueTitles' => 
                            array (
                              'All' => 'All',
                              'TCP' => 'TCP',
                              'UDP' => 'UDP',
                            ),
                            'example' => 'All',
                          ),
                          'Status' => 
                          array (
                            'description' => '内网访问应用状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。',
                            'type' => 'string',
                            'enumValueTitles' => 
                            array (
                              'Enabled' => '开启',
                              'Disabled' => '关闭',
                            ),
                            'example' => 'Enabled',
                          ),
                          'CreateTime' => 
                          array (
                            'description' => '内网访问应用创建时间。',
                            'type' => 'string',
                            'example' => '2022-04-13 13:33:24',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BE4FB974-11BC-5453-9BE1-1606A73EACA6\\",\\n  \\"DynamicRoutes\\": [\\n    {\\n      \\"DynamicRouteId\\": \\"dr-ca9fddfac7c6****\\\\n\\",\\n      \\"Applications\\": [\\n        {\\n          \\"ApplicationId\\": \\"pa-application-7a9243dd02f4****\\",\\n          \\"Name\\": \\"application_name\\",\\n          \\"Description\\": \\"这是一条被动态路由引用的内网访问应用\\",\\n          \\"Addresses\\": [\\n            \\"192.168.0.0/16\\"\\n          ],\\n          \\"PortRanges\\": [\\n            {\\n              \\"Begin\\": 80,\\n              \\"End\\": 81\\n            }\\n          ],\\n          \\"Protocol\\": \\"All\\",\\n          \\"Status\\": \\"Enabled\\",\\n          \\"CreateTime\\": \\"2022-04-13 13:33:24\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量查询动态路由的应用',
    ),
    'ListPrivateAccessTagsForDynamicRoute' => 
    array (
      'summary' => '批量查询当前阿里云账号下动态路由的标签。',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DynamicRouteIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '动态路由ID集合。最多可输入100个动态路由ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '动态路由ID。取值来源：
- [ListDynamicRoutes](~~2525438~~)：批量查询动态路由。
- [CreateDynamicRoute](~~2525443~~)：创建动态路由。',
              'type' => 'string',
              'required' => false,
              'example' => 'dr-ca9fddfac7c6****',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'B608C6AE-623D-55C4-9454-601B88AE937E',
              ),
              'DynamicRoutes' => 
              array (
                'description' => '动态路由列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '动态路由。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DynamicRouteId' => 
                    array (
                      'description' => '动态路由ID。',
                      'type' => 'string',
                      'example' => 'dr-ca9fddfac7c6****',
                    ),
                    'Tags' => 
                    array (
                      'description' => '内网访问标签集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '内网访问标签。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'TagId' => 
                          array (
                            'description' => '内网访问标签ID。',
                            'type' => 'string',
                            'example' => 'tag-d3f64e8bdd4a****',
                          ),
                          'Name' => 
                          array (
                            'description' => '内网访问标签名称。',
                            'type' => 'string',
                            'example' => 'tag_name',
                          ),
                          'Description' => 
                          array (
                            'description' => '内网访问标签描述。',
                            'type' => 'string',
                            'example' => '这是一条被动态路由引用的内网访问标签',
                          ),
                          'TagType' => 
                          array (
                            'description' => '内网访问标签类型。取值：
- **Default**：默认。
- **Custom**：自定义。',
                            'type' => 'string',
                            'enumValueTitles' => 
                            array (
                              'Custom' => '自定义',
                              'Default' => '默认',
                            ),
                            'example' => 'Custom',
                          ),
                          'CreateTime' => 
                          array (
                            'description' => '内网访问标签创建时间。',
                            'type' => 'string',
                            'example' => '2022-10-23 14:02:56',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B608C6AE-623D-55C4-9454-601B88AE937E\\",\\n  \\"DynamicRoutes\\": [\\n    {\\n      \\"DynamicRouteId\\": \\"dr-ca9fddfac7c6****\\",\\n      \\"Tags\\": [\\n        {\\n          \\"TagId\\": \\"tag-d3f64e8bdd4a****\\",\\n          \\"Name\\": \\"tag_name\\",\\n          \\"Description\\": \\"这是一条被动态路由引用的内网访问标签\\",\\n          \\"TagType\\": \\"Custom\\",\\n          \\"CreateTime\\": \\"2022-10-23 14:02:56\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量查询动态路由的标签',
    ),
    'GetDynamicRoute' => 
    array (
      'summary' => '获取当前阿里云账号下指定动态路由的详情信息。',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DynamicRouteId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '动态路由ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dr-16ff07c8207d****',
          ),
        ),
      ),
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
                'example' => '58D6B23E-E5DA-5418-8F61-51A3B5A30049',
              ),
              'DynamicRoute' => 
              array (
                'description' => '动态路由。',
                'type' => 'object',
                'properties' => 
                array (
                  'DynamicRouteId' => 
                  array (
                    'description' => '动态路由ID。',
                    'type' => 'string',
                    'example' => 'dr-16ff07c8207d****
',
                  ),
                  'Name' => 
                  array (
                    'description' => '动态路由名称。',
                    'type' => 'string',
                    'example' => 'dynamic_route_name',
                  ),
                  'Description' => 
                  array (
                    'description' => '动态路由的描述。',
                    'type' => 'string',
                    'example' => '这是一条动态路由
',
                  ),
                  'Status' => 
                  array (
                    'description' => '动态路由状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'Enabled' => '开启',
                      'Disabled' => '关闭',
                    ),
                    'example' => 'Enabled',
                  ),
                  'Priority' => 
                  array (
                    'description' => '动态路由优先级。数字1表示优先级最高。优先级排序和列表查询从上到下保持一致。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'RegionIds' => 
                  array (
                    'description' => 'SASE的POP集群接入点支持的地域列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'SASE的POP集群接入点支持的地域。',
                      'type' => 'string',
                      'example' => 'ap-southeast-1',
                    ),
                  ),
                  'ApplicationType' => 
                  array (
                    'description' => '动态路由的应用类型。取值：
- **All**：全部应用。
- **Application**：应用。
- **Tag**：标签。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'All' => '全部应用',
                      'Tag' => '标签',
                      'Application' => '应用',
                    ),
                    'example' => 'Application',
                  ),
                  'ApplicationIds' => 
                  array (
                    'description' => '动态路由的内网访问应用ID集合。当应用类型为**Application**时，该字段有值。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '动态路由的内网访问应用ID。',
                      'type' => 'string',
                      'example' => 'pa-application-e12860ef6c48****
',
                    ),
                  ),
                  'TagIds' => 
                  array (
                    'description' => '动态路由的内网访问标签ID集合。当应用类型为**Tag**时，该字段有值。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '动态路由的内网访问标签ID。',
                      'type' => 'string',
                      'example' => 'tag-fc0e2395e6f2****',
                    ),
                  ),
                  'DynamicRouteType' => 
                  array (
                    'description' => '动态路由类型。取值：**connector**：自有专线。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'connector' => '自有专线',
                    ),
                    'example' => 'connector',
                  ),
                  'NextHop' => 
                  array (
                    'description' => '动态路由下一跳实例ID。',
                    'type' => 'string',
                    'example' => 'connector-8ccb13b6f52c****',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '动态路由创建时间。',
                    'type' => 'string',
                    'example' => '2023-02-09 10:31:47',
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
            'errorCode' => 'DynamicRoute.NotFound',
            'errorMessage' => 'The dynamicRoute is not found.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"58D6B23E-E5DA-5418-8F61-51A3B5A30049\\",\\n  \\"DynamicRoute\\": {\\n    \\"DynamicRouteId\\": \\"dr-16ff07c8207d****\\\\n\\",\\n    \\"Name\\": \\"dynamic_route_name\\",\\n    \\"Description\\": \\"这是一条动态路由\\\\n\\",\\n    \\"Status\\": \\"Enabled\\",\\n    \\"Priority\\": 1,\\n    \\"RegionIds\\": [\\n      \\"ap-southeast-1\\"\\n    ],\\n    \\"ApplicationType\\": \\"Application\\",\\n    \\"ApplicationIds\\": [\\n      \\"pa-application-e12860ef6c48****\\\\n\\"\\n    ],\\n    \\"TagIds\\": [\\n      \\"tag-fc0e2395e6f2****\\"\\n    ],\\n    \\"DynamicRouteType\\": \\"connector\\",\\n    \\"NextHop\\": \\"connector-8ccb13b6f52c****\\",\\n    \\"CreateTime\\": \\"2023-02-09 10:31:47\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询动态路由详情',
    ),
    'ListDynamicRouteRegions' => 
    array (
      'summary' => '批量查询当前阿里云账号下查询SASE的POP集群接入点支持地域。',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '58D6B23E-E5DA-5418-8F61-51A3B5A30049',
              ),
              'TotalNum' => 
              array (
                'description' => '已授权SASE全球办公服务的POP集群接入点的地域总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Regions' => 
              array (
                'description' => '已授权SASE全球办公服务的POP集群接入点的地域列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '已授权SASE全球办公服务的POP集群接入点的地域。',
                  'type' => 'string',
                  'enumValueTitles' => 
                  array (
                    'ap-southeast-1' => '新加坡',
                    'us-east-1' => '弗吉尼亚',
                    'us-west-1' => '硅谷',
                  ),
                  'example' => 'ap-southeast-1',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"58D6B23E-E5DA-5418-8F61-51A3B5A30049\\",\\n  \\"TotalNum\\": 1,\\n  \\"Regions\\": [\\n    \\"ap-southeast-1\\"\\n  ]\\n}","type":"json"}]',
      'title' => '批量查询动态路由已授权地域',
    ),
    'CreateDynamicRoute' => 
    array (
      'summary' => '创建当前阿里云账号下创建动态路由。',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '动态路由名称。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => true,
            'example' => 'dynamic_route_name',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '动态路由描述。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）、短划线（-）和空格。',
            'type' => 'string',
            'required' => false,
            'example' => '这是一条动态路由',
          ),
        ),
        2 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '动态路由状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。',
            'type' => 'string',
            'required' => true,
            'example' => 'Disabled',
          ),
        ),
        3 => 
        array (
          'name' => 'Priority',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '动态路由优先级。数字1表示优先级最高。取值：1-99。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '99',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionIds',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => 'SASE的POP集群接入点支持的地域列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'SASE的POP集群接入点支持的地域。取值来源：
 - [ListDynamicRouteRegions](~~2525442~~)：批量查询动态路由已授权地域。',
              'type' => 'string',
              'required' => true,
              'enumValueTitles' => 
              array (
                'cn-shenzhen' => '深圳',
                'cn-beijing' => '北京',
                'cn-shanghai' => '上海',
                'ap-southeast-1' => '新加坡',
                'us-east-1' => '弗吉尼亚',
                'us-west-1' => '硅谷',
                'cn-hangzhou' => '杭州',
                'cn-chengdu' => '成都',
              ),
              'example' => 'ap-southeast-1',
            ),
            'required' => true,
          ),
        ),
        5 => 
        array (
          'name' => 'ApplicationType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '动态路由的应用类型。取值：
- **All**：全部应用。
- **Application**：应用。
- **Tag**：标签。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'All' => '全部应用',
              'Tag' => '标签',
              'Application' => '应用',
            ),
            'example' => 'Application',
          ),
        ),
        6 => 
        array (
          'name' => 'ApplicationIds',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '动态路由的内网访问应用ID集合。最多可输入200个内网访问应用ID。当**ApplicationType**为**Application**时，必填。和**TagIds**二选一。当**ApplicationType**为**All**时，禁止输入。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '动态路由的内网访问应用ID。取值来源：
- [ListPrivateAccessApplications](~~611394~~)：批量查询内网访问应用。
- [CreatePrivateAccessApplication](~~611541~~)：创建内网访问应用。',
              'type' => 'string',
              'required' => true,
              'example' => 'pa-application-7a4445897856****',
            ),
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'TagIds',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '动态路由的内网访问标签ID集合。最多可输入40个内网访问标签ID。当**ApplicationType**为**Tag**时，必填。和**ApplicationIds**二选一。当**ApplicationType**为**All**时，禁止输入。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '动态路由的内网访问标签ID。取值来源：
- [ListPrivateAccessTags](~~611549~~)：批量查询内网访问标签。
- [CreatePrivateAccessTag](~~611552~~)：创建内网访问标签。',
              'type' => 'string',
              'required' => true,
              'example' => 'tag-d3f64e8bdd4a****',
            ),
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'DynamicRouteType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '动态路由类型。取值：**connector**：自有专线。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'connector' => '自有专线',
            ),
            'example' => 'connector',
          ),
        ),
        9 => 
        array (
          'name' => 'NextHop',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '动态路由下一跳实例ID。取值来源：
 - [ListConnectors](~~611545~~)：批量查询Connector。',
            'type' => 'string',
            'required' => true,
            'example' => 'connector-8ccb13b6f52c****',
          ),
        ),
      ),
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
                'example' => '102350E7-1A20-58F5-9D63-ABEA820AE6E1',
              ),
              'DynamicRouteId' => 
              array (
                'description' => '动态路由ID。',
                'type' => 'string',
                'example' => 'dr-ca9fddfac7c6****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"102350E7-1A20-58F5-9D63-ABEA820AE6E1\\",\\n  \\"DynamicRouteId\\": \\"dr-ca9fddfac7c6****\\"\\n}","type":"json"}]',
      'title' => '创建动态路由',
      'description' => '默认最多可创建100个动态路由。',
    ),
    'UpdateDynamicRoute' => 
    array (
      'summary' => '修改当前阿里云账号下动态路由。',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DynamicRouteId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '动态路由ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dr-ca9fddfac7c6****',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '动态路由名称。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'dynamic_route_name',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '动态路由描述。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）、短划线（-）和空格。',
            'type' => 'string',
            'required' => false,
            'example' => '这是一条动态路由',
          ),
        ),
        3 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '动态路由状态。取值：
- **Enabled**：开启。
- **Disabled**：关闭。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Enabled' => '开启',
              'Disabled' => '关闭',
            ),
            'example' => 'Disabled',
          ),
        ),
        4 => 
        array (
          'name' => 'Priority',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '动态路由优先级。数字1表示优先级最高。取值：1-99。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '99',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionIds',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => 'SASE的POP集群接入点支持的地域列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'SASE的POP集群接入点支持的地域。取值来源：
 - [ListDynamicRouteRegions](~~2525442~~)：批量查询动态路由已授权地域。',
              'type' => 'string',
              'required' => false,
              'enumValueTitles' => 
              array (
                'cn-shenzhen' => '深圳',
                'cn-beijing' => '北京',
                'cn-shanghai' => '上海',
                'ap-southeast-1' => '新加坡',
                'us-east-1' => '弗吉尼亚',
                'us-west-1' => '硅谷',
                'cn-hangzhou' => '杭州',
                'cn-chengdu' => '成都',
              ),
              'example' => 'ap-southeast-1',
            ),
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'ApplicationType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '动态路由的应用类型。取值：
- **All**：全部应用。
- **Application**：应用。
- **Tag**：标签。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'All' => '全部应用',
              'Tag' => '标签',
              'Application' => '应用',
            ),
            'example' => 'Application',
          ),
        ),
        7 => 
        array (
          'name' => 'ApplicationIds',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '动态路由的应用ID集合。最多可输入200个内网访问应用ID。当**ApplicationType**为**Application**时，必填。和**TagIds**二选一。当**ApplicationType**为**All**时，禁止输入。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '动态路由的内网访问应用ID。取值来源：
- [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~)：批量查询内网访问应用。
- [CreatePrivateAccessApplication](~~CreatePrivateAccessApplication~~)：创建内网访问应用。',
              'type' => 'string',
              'required' => false,
              'example' => 'pa-application-f4dd77bced90****',
            ),
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'TagIds',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '动态路由的内网访问标签ID集合。最多可输入40个内网访问标签ID。当**ApplicationType**为**Tag**时，必填。和**ApplicationIds**二选一。当**ApplicationType**为**All**时，禁止输入。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '动态路由的内网访问标签ID。取值来源：
- [ListPrivateAccessTags](~~ListPrivateAccessTags~~)：批量查询内网访问标签。
- [CreatePrivateAccessTag](~~CreatePrivateAccessTag~~)：创建内网访问标签。',
              'type' => 'string',
              'required' => false,
              'example' => 'tag-d3f64e8bdd4a****',
            ),
            'required' => false,
          ),
        ),
        9 => 
        array (
          'name' => 'DynamicRouteType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '动态路由类型。取值：**connector**：自由专线。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'connector' => '自有专线',
            ),
            'example' => 'connector',
          ),
        ),
        10 => 
        array (
          'name' => 'NextHop',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '动态路由下一跳实例ID。取值来源：
 - [ListConnectors](~~ListConnectors~~)：批量查询Connector。',
            'type' => 'string',
            'required' => false,
            'example' => 'connector-8ccb13b6f52c****',
          ),
        ),
        11 => 
        array (
          'name' => 'ModifyType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '动态路由的修改类型。取值：
- **Cover**（默认）：使用**RegionIds**、**ApplicationIds**、**TagIds**、参数的值覆盖原SASE的POP集群接入点支持的地域、内网访问应用ID集合、内网访问标签集合。
- **Append**：在原SASE的POP集群接入点支持的地域、内网访问应用ID集合、内网访问标签集合中分别增加**RegionIds**、**ApplicationIds**、**TagIds**参数中输入的值。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Cover' => '覆盖',
              'Append' => '附加',
            ),
            'example' => 'Cover',
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
                'example' => 'BE4FB974-11BC-5453-9BE1-1606A73EACA6',
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
            'errorCode' => 'DynamicRoute.NotFound',
            'errorMessage' => 'The dynamicRoute is not found.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BE4FB974-11BC-5453-9BE1-1606A73EACA6\\"\\n}","type":"json"}]',
      'title' => '修改动态路由',
    ),
    'DeleteDynamicRoute' => 
    array (
      'summary' => '删除当前阿里云账号下动态路由。',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DynamicRouteId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '动态路由ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dr-ca9fddfac7c6****',
          ),
        ),
      ),
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
                'example' => '748CFDC7-1EB6-5B8B-9405-DA76ED5BB60D',
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
            'errorCode' => 'DynamicRoute.NotFound',
            'errorMessage' => 'The dynamicRoute is not found.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"748CFDC7-1EB6-5B8B-9405-DA76ED5BB60D\\"\\n}","type":"json"}]',
      'title' => '删除动态路由',
    ),
    'LookupWmInfoMapping' => 
    array (
      'summary' => '通过查询已创建的水印信息映射关系，根据数字格式的水印信息查找得到对应的字符串格式的水印信息。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '226773',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcsas3KYQ7V',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WmType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '水印类型，枚举值:
PureDocument: 常规文档水印
PureWebappInvisible: 常规网页水印
PureAppInvisible: 常规APP水印
PureScreenInvisible: 常规屏幕水印
PureImage: 常规图片水印
PureAudio: 常规音频水印
PureVideo: 常规视频水印
AigcDocument: AIGC文档水印
AigcWebappInvisible: AIGC网页水印
AigcAppInvisible: AIGCAPP水印
AigcScreenInvisible: AIGC屏幕水印
AigcImage: AIGC图片水印
AigcAudio: AIGC音频水印
AigcVideo: AIGC视频水印',
            'description' => '水印类型。取值：
- **PureWebappInvisible**：网页水印。
- **PureAppInvisible**：App水印。
- **PureScreenInvisible**：屏幕水印。
- **PureDocument**：文档水印。
- **PureImage**：图片水印。
- **PureAudio**：音频水印。
- **PureVideo**：视频水印。
- **AigcWebappInvisible**：AIGC网页水印。
- **AigcAppInvisible**：AIGC App水印。
- **AigcScreenInvisible**：AIGC屏幕水印。
- **AigcDocument**：AIGC文档水印。
- **AigcImage**：AIGC图片水印。
- **AigcAudio**：AIGC音频水印。
- **AigcVideo**：AIGC视频水印。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'enumValueTitles' => 
            array (
              'PureImage' => '图片水印',
              'AigcAppInvisible' => 'AIGC App水印',
              'PureWebappInvisible' => '网页水印',
              'AigcAudio' => 'AIGC音频水印',
              'PureDocument' => '文档水印',
              'PureAudio' => '音频水印',
              'AigcScreenInvisible' => 'AIGC屏幕水印',
              'AigcVideo' => 'AIGC视频水印',
              'AigcImage' => 'AIGC图片水印',
              'AigcWebappInvisible' => 'AIGC网页水印',
              'PureAppInvisible' => 'App水印',
              'PureScreenInvisible' => '屏幕水印',
              'PureVideo' => '视频水印',
            ),
            'example' => 'PureDocument',
            'enum' => 
            array (
              0 => 'PureWebappInvisible',
              1 => 'PureAppInvisible',
              2 => 'PureScreenInvisible',
              3 => 'PureImage',
              4 => 'PureAudio',
              5 => 'PureVideo',
              6 => 'AigcWebappInvisible',
              7 => 'AigcAppInvisible',
              8 => 'AigcScreenInvisible',
              9 => 'AigcImage',
              10 => 'AigcAudio',
              11 => 'AigcVideo',
              12 => 'PureDocument',
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'WmInfoSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '水印信息的容量位宽，可用值为 32, 40, 64，不传时默认为32。非32时需显式指定。比如嵌入式使用的是 40 位的sdk，那么提取时也需要将该值设为 40。',
            'description' => '水印信息的容量位宽，默认为32。该参数应该和实际嵌入或者生成透明图时的容量位宽保持一致。取值范围：32~64。该参数的值应当和创建映射关系时保持一致。否则会导致查询不到映射关系。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '64',
            'minimum' => '32',
            'example' => '32',
          ),
        ),
        2 => 
        array (
          'name' => 'WmInfoUint',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数字格式的水印信息。取值来源：
- [CreateWmInfoMapping](~~CreateWmInfoMapping~~)：创建水印信息映射关系接口的**WmInfoUint**返回值。',
            'type' => 'string',
            'required' => true,
            'example' => '123***',
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
                'example' => '7E9D7ACD-53D5-56EF-A913-79D148D06299',
              ),
              'Data' => 
              array (
                'description' => '映射关系查询结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'WmInfoBytesB64' => 
                  array (
                    'description' => '根据映射关系查询得到的字符串格式的水印信息。取值来源：
- [CreateWmInfoMapping](~~CreateWmInfoMapping~~)：创建水印信息映射关系接口的**WmInfoBytesB64**参数。',
                    'type' => 'string',
                    'example' => 'aGVsbG8gc2F*****
',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7E9D7ACD-53D5-56EF-A913-79D148D06299\\",\\n  \\"Data\\": {\\n    \\"WmInfoBytesB64\\": \\"aGVsbG8gc2F*****\\\\n\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询水印信息映射关系',
    ),
    'CreateWmInfoMapping' => 
    array (
      'summary' => '创建一条字符串格式的水印信息到数字格式的水印信息的映射关系。',
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
        'abilityTreeCode' => '226693',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcsas3KYQ7V',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WmType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '水印类型，枚举值:
PureDocument: 常规文档水印
PureWebappInvisible: 常规网页水印
PureAppInvisible: 常规APP水印
PureScreenInvisible: 常规屏幕水印
PureImage: 常规图片水印
PureAudio: 常规音频水印
PureVideo: 常规视频水印
AigcDocument: AIGC文档水印
AigcWebappInvisible: AIGC网页水印
AigcAppInvisible: AIGCAPP水印
AigcScreenInvisible: AIGC屏幕水印
AigcImage: AIGC图片水印
AigcAudio: AIGC音频水印
AigcVideo: AIGC视频水印',
            'description' => '水印类型。取值：
- **PureWebappInvisible**：网页水印。
- **PureAppInvisible**：App水印。
- **PureScreenInvisible**：屏幕水印。
- **PureDocument**：文档水印。
- **PureImage**：图片水印。
- **PureAudio**：音频水印。
- **PureVideo**：视频水印。
- **AigcWebappInvisible**：AIGC网页水印。
- **AigcAppInvisible**：AIGC App水印。
- **AigcScreenInvisible**：AIGC屏幕水印。
- **AigcDocument**：AIGC文档水印。
- **AigcImage**：AIGC图片水印。
- **AigcAudio**：AIGC音频水印。
- **AigcVideo**：AIGC视频水印。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'enumValueTitles' => 
            array (
              'PureImage' => '图片水印',
              'AigcAppInvisible' => 'AIGC App水印',
              'PureWebappInvisible' => '网页水印',
              'AigcAudio' => 'AIGC音频水印',
              'PureDocument' => '文档水印',
              'PureAudio' => '音频水印',
              'AigcScreenInvisible' => 'AIGC屏幕水印',
              'AigcVideo' => 'AIGC视频水印',
              'AigcImage' => 'AIGC图片水印',
              'AigcWebappInvisible' => 'AIGC网页水印',
              'PureAppInvisible' => 'App水印',
              'PureScreenInvisible' => '屏幕水印',
              'PureVideo' => '视频水印',
            ),
            'example' => 'PureDocument',
            'enum' => 
            array (
              0 => 'PureWebappInvisible',
              1 => 'PureAppInvisible',
              2 => 'PureScreenInvisible',
              3 => 'PureImage',
              4 => 'PureAudio',
              5 => 'PureVideo',
              6 => 'AigcWebappInvisible',
              7 => 'AigcAppInvisible',
              8 => 'AigcScreenInvisible',
              9 => 'AigcImage',
              10 => 'AigcAudio',
              11 => 'AigcVideo',
              12 => 'PureDocument',
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'WmInfoSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '水印信息的容量位宽，可用值为 32, 40, 64，不传时默认为32。非32时需显式指定。比如嵌入式使用的是 40 位的sdk，那么提取时也需要将该值设为 40。',
            'description' => '水印信息的容量位宽，默认为32。该参数应该和实际嵌入或者生成透明图时的容量位宽保持一致。取值范围：32~64。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '64',
            'minimum' => '32',
            'example' => '32',
          ),
        ),
        2 => 
        array (
          'name' => 'WmInfoBytesB64',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'base64 编码后的字符串格式水印信息 。若设置该值，则 wmInfoUint 不能设置。',
            'description' => 'Base64编码后的字符串格式水印信息 。长度1～300个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'aGVsbG8gc2F*****
',
            'maxLength' => 400,
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
                'example' => '7E9D7ACD-53D5-56EF-A913-79D148D06299',
              ),
              'Data' => 
              array (
                'description' => '映射结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'WmInfoUint' => 
                  array (
                    'description' => '映射得到的数字格式的水印信息。后续可以使用该值查找到对应映射的字符串格式的水印信息。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123***',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7E9D7ACD-53D5-56EF-A913-79D148D06299\\",\\n  \\"Data\\": {\\n    \\"WmInfoUint\\": 0\\n  }\\n}","type":"json"}]',
      'title' => '创建水印信息映射关系',
    ),
    'CreateWmBaseImage' => 
    array (
      'summary' => '获取网页水印、屏幕水印和App水印的暗水印透明底图。',
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
        'abilityTreeCode' => '226309',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcsas3KYQ7V',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WmType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '水印类型
PureWebappInvisible: 常规网页水印
PureAppInvisible: 常规APP水印
PureScreenInvisible: 常规屏幕水印
AigcWebappInvisible: AIGC网页水印
AigcAppInvisible: AIGCAPP水印
AigcScreenInvisible: AIGC屏幕水印',
            'description' => '水印类型。取值：
- **PureWebappInvisible**：网页水印。
- **PureAppInvisible**：App水印。
- **PureScreenInvisible**：屏幕水印。
- **AigcWebappInvisible**：AIGC网页水印。
- **AigcAppInvisible**：AIGC App水印。
- **AigcScreenInvisible**：AIGC屏幕水印。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'AigcAppInvisible' => 'AIGC App水印',
              'PureWebappInvisible' => '网页水印',
              'AigcWebappInvisible' => 'AIGC网页水印',
              'PureAppInvisible' => 'App水印',
              'PureScreenInvisible' => '屏幕水印',
              'AigcScreenInvisible' => 'AIGC屏幕水印',
            ),
            'example' => 'PureWebappInvisible',
            'enum' => 
            array (
              0 => 'PureWebappInvisible',
              1 => 'PureAppInvisible',
              2 => 'PureScreenInvisible',
              3 => 'AigcWebappInvisible',
              4 => 'AigcAppInvisible',
              5 => 'AigcScreenInvisible',
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'WmInfoSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '水印信息的容量位宽，可用值为 32, 40, 64，不传时默认为32。非32时需显式指定。比如嵌入式使用的是 40 位的sdk，那么提取时也需要将该值设为 40。',
            'description' => '水印信息的容量位宽，默认为32。该参数嵌入和提取时需要保持一致。比如嵌入式使用的是 40 位的SDK，那么提取时也需要将该值设为 40。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'enumValueTitles' => 
            array (
              32 => '32',
              40 => '40',
              64 => '64',
            ),
            'example' => '32',
          ),
        ),
        2 => 
        array (
          'name' => 'WmInfoUint',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '10进制数字格式水印信息。若设置该值，则 WmInfoBytesB64 不能设置。

取值范围取决于  WmInfoSize 参数：

- 当 WmInfoSize 为**32**时，取值范围为 1~4294967295。

- 当 WmInfoSize 为**40**时，取值范围为 1~1099511627775。

- 当 WmInfoSize 为**64**时，取值范围为 1~18446744073709551615。',
            'type' => 'string',
            'required' => false,
            'example' => '12*****',
          ),
        ),
        3 => 
        array (
          'name' => 'WmInfoBytesB64',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'base64 编码后的字符串格式水印信息 。若设置该值，则 wmInfoUint 参数不能设置。',
            'description' => 'Base64编码后的字符串格式水印信息 。长度1～300个字符。若设置该值，则 WmInfoUint 参数不能设置。',
            'type' => 'string',
            'required' => false,
            'example' => 'aGVsbG8gc2F*****',
            'maxLength' => 400,
          ),
        ),
        4 => 
        array (
          'name' => 'Scale',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '水印图片的缩放比例。',
            'description' => '水印图片的缩放比例。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '3',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'Width',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '水印图片的宽度，单位为像素。取值范围为 [100, 5000]',
            'description' => '水印图片的宽度，单位为像素。取值：100~5000。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '5000',
            'minimum' => '100',
            'example' => '1920',
          ),
        ),
        6 => 
        array (
          'name' => 'Height',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '水印图片的高度，单位为像素。取值范围为 [100, 5000]',
            'description' => '水印图片的高度，单位为像素。取值：100~5000。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '5000',
            'minimum' => '100',
            'example' => '1080',
          ),
        ),
        7 => 
        array (
          'name' => 'Opacity',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '水印图片的透明度。取值范围为 [1, 255]',
            'description' => '水印图片的透明度。取值：1~255。取值越大，透明度越低。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '255',
            'minimum' => '1',
            'example' => '255',
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
                'example' => '58D6B23E-E5DA-5418-8F61-51A3B5A30049',
              ),
              'Data' => 
              array (
                'description' => '透明图信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'ImageId' => 
                  array (
                    'description' => '透明图ID，相同的ID表示图片内容完全一致。',
                    'type' => 'string',
                    'example' => 'fafb432cdede9b20640e12105845386e-496883833-8242409229217337*****',
                  ),
                  'ImageUrl' => 
                  array (
                    'description' => '可用于下载图片的临时URL。',
                    'type' => 'string',
                    'example' => 'https://example.com/test-*****.png',
                  ),
                  'ImageUrlExp' => 
                  array (
                    'description' => '图片临时URL的有效截止时间，格式为Unix时间戳，单位为秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '17185*****',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"58D6B23E-E5DA-5418-8F61-51A3B5A30049\\",\\n  \\"Data\\": {\\n    \\"ImageId\\": \\"fafb432cdede9b20640e12105845386e-496883833-8242409229217337*****\\",\\n    \\"ImageUrl\\": \\"https://example.com/test-*****.png\\",\\n    \\"ImageUrlExp\\": 0\\n  }\\n}","type":"json"}]',
      'title' => '创建暗水印透明底图',
    ),
    'GetWmExtractTask' => 
    array (
      'summary' => '根据创建提取任务时获取的任务ID，查询水印提取任务结果。',
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
        'abilityTreeCode' => '216135',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcsas3KYQ7V',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '创建提取任务返回的 task id',
            'description' => '提取任务ID。取值来源：
- [CreateWmExtractTask](~~CreateWmExtractTask~~)：创建水印提取任务。',
            'type' => 'string',
            'required' => true,
            'example' => 'wmt-9648c22d2eb2cb57bb855dcae7898464********',
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
                'example' => '102350E7-1A20-58F5-9D63-ABEA820AE6E1',
              ),
              'Data' => 
              array (
                'description' => '任务结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'CreateTime' => 
                  array (
                    'title' => '任务创建时间',
                    'description' => '任务创建时间',
                    'type' => 'string',
                    'example' => '2024-01-01 11:22:33',
                  ),
                  'TaskId' => 
                  array (
                    'title' => '任务id',
                    'description' => '任务ID。',
                    'type' => 'string',
                    'example' => 'wmt-9648c22d2eb2cb57bb855dcae7898464********',
                  ),
                  'Status' => 
                  array (
                    'title' => '任务状态
Running: 运行中
Success: 任务执行成功
Failed: 任务执行失败',
                    'description' => '任务状态。取值：
- **Running**：运行中。
- **Success**：成功。
- **Failed**：失败。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'Failed' => '失败',
                      'Running' => '运行中',
                      'Success' => '成功',
                    ),
                    'example' => 'Success',
                    'enum' => 
                    array (
                      0 => 'Running',
                      1 => 'Success',
                      2 => 'Failed',
                    ),
                  ),
                  'Filename' => 
                  array (
                    'title' => '创建提取任务时传入的文件名',
                    'description' => '创建提取任务时传入的文件名。',
                    'type' => 'string',
                    'example' => 'test-****.pdf',
                  ),
                  'WmType' => 
                  array (
                    'title' => '创建提取任务时传入的水印类型',
                    'description' => '创建提取任务时传入的水印类型。',
                    'type' => 'string',
                    'example' => 'PureDocument',
                  ),
                  'WmInfoSize' => 
                  array (
                    'title' => '创建提取任务时传入的参数',
                    'description' => '创建提取任务时传入的参数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '32',
                  ),
                  'WmInfoUint' => 
                  array (
                    'title' => '提取得到的结果',
                    'description' => '提取得到的10进制数字格式的水印信息。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123**',
                  ),
                  'WmInfoBytesB64' => 
                  array (
                    'title' => '提取得到的结果',
                    'description' => '提取得到的base64编码字符串格式的水印信息。',
                    'type' => 'string',
                    'example' => 'aGVsbG8gc2Fz****',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"102350E7-1A20-58F5-9D63-ABEA820AE6E1\\",\\n  \\"Data\\": {\\n    \\"CreateTime\\": \\"2024-01-01 11:22:33\\",\\n    \\"TaskId\\": \\"wmt-9648c22d2eb2cb57bb855dcae7898464********\\",\\n    \\"Status\\": \\"Success\\",\\n    \\"Filename\\": \\"test-****.pdf\\",\\n    \\"WmType\\": \\"PureDocument\\",\\n    \\"WmInfoSize\\": 32,\\n    \\"WmInfoUint\\": 0,\\n    \\"WmInfoBytesB64\\": \\"aGVsbG8gc2Fz****\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询水印提取任务详情',
    ),
    'GetWmEmbedTask' => 
    array (
      'summary' => '使用创建水印嵌入任务得到的任务ID，查询嵌入任务结果。',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '216126',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcsas3KYQ7V',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '创建嵌入任务时得到的任务ID',
            'description' => '创建嵌入任务时得到的任务ID。取值来源：
- [CreateWmEmbedTask](~~CreateWmEmbedTask~~)：创建水印嵌入任务。',
            'type' => 'string',
            'required' => true,
            'example' => 'job:5GfrJYsoaffmCE7Z5bZtjU********',
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
                'example' => 'D6707286-A50E-57B1-B2CF-EFAC59E850D8',
              ),
              'Data' => 
              array (
                'description' => '水印嵌入任务结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'TaskId' => 
                  array (
                    'title' => '嵌入任务ID',
                    'description' => '任务ID。',
                    'type' => 'string',
                    'example' => 'job:5GfrJYsoaffmCE7Z5bZtjUxxxxxxxxxx',
                  ),
                  'TaskStatus' => 
                  array (
                    'title' => '任务状态
Running: 运行中
Success: 任务执行成功
Failed: 任务执行失败
',
                    'description' => '任务状态。取值：
- **Running**：运行中。
- **Success**：成功。
- **Failed**：失败。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'Failed' => '失败',
                      'Running' => '运行中',
                      'Success' => '成功',
                    ),
                    'example' => 'Success',
                    'enum' => 
                    array (
                      0 => 'Running',
                      1 => 'Success',
                      2 => 'Failed',
                    ),
                  ),
                  'FileUrl' => 
                  array (
                    'title' => '输入文件的下载 url',
                    'description' => '嵌入水印信息得到的文件的临时URL。',
                    'type' => 'string',
                    'example' => 'https://example.com/embed-****.pdf',
                  ),
                  'FileUrlExp' => 
                  array (
                    'title' => 'fileUrl 的过期时间，格式为 unix 时间戳，单位为秒',
                    'description' => 'FileUrl的过期时间，格式为Unix时间戳，精度为秒。',
                    'type' => 'string',
                    'example' => '171859****',
                  ),
                  'Filename' => 
                  array (
                    'title' => '输出文件的文件名',
                    'description' => '嵌入水印信息得到的文件的文件名。',
                    'type' => 'string',
                    'example' => 'embed-****.pdf
',
                  ),
                  'OutFileHashMd5' => 
                  array (
                    'title' => '输出文件的md5哈希，用于校验',
                    'description' => '嵌入水印信息得到的文件的md5哈希，用于排查问题。',
                    'type' => 'string',
                    'example' => 'd41d8cd98f00b204e9800998ecf8****',
                  ),
                  'OutFileSize' => 
                  array (
                    'title' => '输入文件的大小（单位为字节），用于校验',
                    'description' => '嵌入水印信息得到的文件的大小，单位为字节。用于排查问题。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123**',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D6707286-A50E-57B1-B2CF-EFAC59E850D8\\",\\n  \\"Data\\": {\\n    \\"TaskId\\": \\"job:5GfrJYsoaffmCE7Z5bZtjUxxxxxxxxxx\\",\\n    \\"TaskStatus\\": \\"Success\\",\\n    \\"FileUrl\\": \\"https://example.com/embed-****.pdf\\",\\n    \\"FileUrlExp\\": \\"171859****\\",\\n    \\"Filename\\": \\"embed-****.pdf\\\\n\\",\\n    \\"OutFileHashMd5\\": \\"d41d8cd98f00b204e9800998ecf8****\\",\\n    \\"OutFileSize\\": 0\\n  }\\n}","type":"json"}]',
      'title' => '查询水印嵌入任务详情',
    ),
    'CreateWmExtractTask' => 
    array (
      'summary' => '创建数字水印提取任务。',
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
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '216136',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcsas3KYQ7V',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WmType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '水印类型，枚举值:
PureDocument: 常规文档水印
PureWebappInvisible: 常规网页水印
PureAppInvisible: 常规APP水印
PureScreenInvisible: 常规屏幕水印
PureImage: 常规图片水印
PureAudio: 常规音频水印
PureVideo: 常规视频水印
AigcDocument: AIGC文档水印
AigcWebappInvisible: AIGC网页水印
AigcAppInvisible: AIGCAPP水印
AigcScreenInvisible: AIGC屏幕水印
AigcImage: AIGC图片水印
AigcAudio: AIGC音频水印
AigcVideo: AIGC视频水印',
            'description' => '水印类型。取值：
- **PureWebappInvisible**：网页水印。
- **PureAppInvisible**：App水印。
- **PureScreenInvisible**：屏幕水印。
- **PureDocument**：文档水印。
- **PureImage**：图片水印。
- **PureAudio**：音频水印。
- **PureVideo**：视频水印。
- **AigcWebappInvisible**：AIGC网页水印。
- **AigcAppInvisible**：AIGC App水印。
- **AigcScreenInvisible**：AIGC屏幕水印。
- **AigcDocument**：AIGC文档水印。
- **AigcImage**：AIGC图片水印。
- **AigcAudio**：AIGC音频水印。
- **AigcVideo**：AIGC视频水印。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'enumValueTitles' => 
            array (
              'PureImage' => '图片水印',
              'AigcAppInvisible' => 'AIGC App水印',
              'PureWebappInvisible' => '网页水印',
              'AigcAudio' => 'AIGC音频水印',
              'PureDocument' => 'AIGC文档水印',
              'PureAudio' => '音频水印',
              'AigcScreenInvisible' => 'AIGC屏幕水印',
              'AigcVideo' => 'AIGC视频水印',
              'AigcImage' => 'AIGC图片水印',
              'AigcWebappInvisible' => 'AIGC网页水印',
              'PureAppInvisible' => 'App水印',
              'PureScreenInvisible' => '屏幕水印',
              'PureVideo' => '视频水印',
            ),
            'example' => 'PureDocument',
            'enum' => 
            array (
              0 => 'PureWebappInvisible',
              1 => 'PureAppInvisible',
              2 => 'PureScreenInvisible',
              3 => 'PureImage',
              4 => 'PureAudio',
              5 => 'PureVideo',
              6 => 'AigcWebappInvisible',
              7 => 'AigcAppInvisible',
              8 => 'AigcScreenInvisible',
              9 => 'AigcImage',
              10 => 'AigcAudio',
              11 => 'AigcVideo',
              12 => 'PureDocument',
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'FileUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '可用于下载文件的 URL
控制台调用时传递文件的 oss 路径',
            'description' => '用于下载待提取文件的URL，需要可以公网访问。',
            'type' => 'string',
            'required' => true,
            'example' => 'https://example.com/test-****.pdf',
          ),
        ),
        2 => 
        array (
          'name' => 'Filename',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '文件名，后端需要根据文件名的后缀判断校验文件类型',
            'description' => '待提取文件的文件名，后端需要根据文件名的后缀判断校验文件类型。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-****.pdf',
          ),
        ),
        3 => 
        array (
          'name' => 'WmInfoSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '水印信息的容量位宽，可用值为 32, 40, 64，不传时默认为32。非32时需显式指定。比如嵌入式使用的是 40 位的sdk，那么提取时也需要将该值设为 40。',
            'description' => '水印信息的容量位宽，默认为32。该参数嵌入和提取时需要保持一致。比如嵌入式使用的是 40 位的SDK，那么提取时也需要将该值设为 40。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '64',
            'minimum' => '32',
            'example' => '32',
          ),
        ),
        4 => 
        array (
          'name' => 'VideoSpeed',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '长视频水印参数：含义为视频倍速，浮点数字符串。默认1，代表添加水印时的采用倍速，或者添加水印之后，视频时间轴拉伸的倍速',
            'description' => '长视频水印参数：含义为视频倍速，浮点数字符串。默认1，代表添加水印时的采用倍速，或者添加水印之后，视频时间轴拉伸的倍速。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'VideoIsLong',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '视频水印参数：在嵌入视频水印时，通过该值控制使用使用长视频的SDK。默认为 false，此时会使用短视频的 SDK',
            'description' => '视频水印参数：是否使用长视频水印SDK，默认为false。取值：

- **true**：是
- **false**：否',
            'type' => 'boolean',
            'required' => false,
            'enumValueTitles' => 
            array (
              'true' => '是',
              'false' => '否',
            ),
            'example' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'DocumentIsCapture',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '文档水印参数：当提取文档截图中的背景暗水印信息时将该参数设为true。默认为 false',
            'description' => '文档水印参数：指定待提取文件是否为添加了背景水文档的截图。服务会根据待提取文件是否为图像文件来判断是否走文档背景水印提取逻辑，因此默认无需设置该参数 。取值：

- **true**：是
- **false**：否',
            'type' => 'boolean',
            'required' => false,
            'enumValueTitles' => 
            array (
              'true' => '是',
              'false' => '否',
            ),
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
                'title' => 'Id of the request',
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'D6707286-A50E-57B1-B2CF-EFAC59E850D8',
              ),
              'Data' => 
              array (
                'description' => '水印提取任务信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'TaskId' => 
                  array (
                    'title' => 'task id, 用于查询任务结果',
                    'description' => '任务ID，用于查询任务结果。',
                    'type' => 'string',
                    'example' => 'wmt-9648c22d2eb2cb57bb855dcae7898464********',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D6707286-A50E-57B1-B2CF-EFAC59E850D8\\",\\n  \\"Data\\": {\\n    \\"TaskId\\": \\"wmt-9648c22d2eb2cb57bb855dcae7898464********\\"\\n  }\\n}","type":"json"}]',
      'title' => '创建水印提取任务',
    ),
    'CreateWmEmbedTask' => 
    array (
      'summary' => '创建数字水印嵌入任务。',
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
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '216120',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcsas3KYQ7V',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WmType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '水印类型
PureDocument: 常规文档水印
PureImage: 常规图片水印
PureAudio: 常规音频水印
PureVideo: 常规视频水印
AigcDocument: AIGC文档水印
AigcImage: AIGC图片水印
AigcAudio: AIGC音频水印
AigcVideo: AIGC视频水印',
            'description' => '水印类型。取值：
- **PureDocument**：文档水印。
- **PureImage**：图片水印。
- **PureAudio**：音频水印。
- **PureVideo**：视频水印。
- **AigcDocument**：AIGC文档水印。
- **AigcImage**：AIGC图片水印。
- **AigcAudio**：AIGC音频水印。
- **AigcVideo**：AIGC视频水印。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'PureImage' => '图片水印',
              'AigcImage' => 'AIGC图片水印',
              'AigcAudio' => 'AIGC音频水印',
              'PureDocument' => '文档水印',
              'PureAudio' => '音频水印',
              'PureVideo' => '视频水印',
              'AigcDocument' => 'AIGC文档水印',
              'AigcVideo' => 'AIGC视频水印',
            ),
            'example' => 'PureDocument',
            'enum' => 
            array (
              0 => 'PureDocument',
              1 => 'PureImage',
              2 => 'PureAudio',
              3 => 'PureVideo',
              4 => 'AigcDocument',
              5 => 'AigcImage',
              6 => 'AigcAudio',
              7 => 'AigcVideo',
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'Filename',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '文件名，后端需要根据文件名的后缀判断校验文件类型',
            'description' => '待嵌入文件的文件名，后端需要根据文件名的后缀判断校验文件类型。',
            'type' => 'string',
            'required' => true,
            'example' => 'abc****.pdf',
          ),
        ),
        2 => 
        array (
          'name' => 'FileUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '可用于下载文件的 URL
控制台调用时传递文件的 oss 路径',
            'description' => '可用于下载待嵌入文件的URL，需要可以公网访问。',
            'type' => 'string',
            'required' => true,
            'example' => 'https://example.com/abc****.pdf',
          ),
        ),
        3 => 
        array (
          'name' => 'WmInfoSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '水印信息的容量位宽，可用值为 32, 40, 64，不传时默认为32。非32时需显式指定。比如嵌入式使用的是 40 位的sdk，那么提取时也需要将该值设为 40。',
            'description' => '水印信息的容量位宽，默认为32。该参数嵌入和提取时需要保持一致。比如嵌入式使用的是 40 位的SDK，那么提取时也需要将该值设为 40。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '64',
            'minimum' => '32',
            'enumValueTitles' => 
            array (
              32 => '32',
              40 => '40',
              64 => '64',
            ),
            'example' => '32',
          ),
        ),
        4 => 
        array (
          'name' => 'WmInfoUint',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '10进制数字格式水印信息。若设置该值，则 WmInfoBytesB64 不能设置。

取值范围取决于 WmInfoSize 参数：

- 当 WmInfoSize 为32时，取值范围为 1~4294967295。

- 当 WmInfoSize 为40时，取值范围为 1~1099511627775。

- 当 WmInfoSize 为64时，取值范围为 1~18446744073709551615。',
            'type' => 'string',
            'required' => false,
            'example' => '123***',
          ),
        ),
        5 => 
        array (
          'name' => 'WmInfoBytesB64',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'base64 编码后的字符串格式水印信息 。若设置该值，则 wmInfoUint 不能设置。',
            'description' => 'Base64 编码后的字符串格式水印信息 。若设置该值，则 WmInfoUint 不能设置。',
            'type' => 'string',
            'required' => false,
            'example' => 'aGVsbG8gc2F*****',
            'maxLength' => 400,
          ),
        ),
        6 => 
        array (
          'name' => 'VideoIsLong',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '视频水印参数：默认为 false，此时会使用短视频的 SDK，设为true时会使用使用长视频的SDK',
            'description' => '视频水印参数：是否使用长视频水印SDK，默认为false。取值：

- **true**: 是
- **false**: 否',
            'type' => 'boolean',
            'required' => false,
            'enumValueTitles' => 
            array (
              'true' => '是',
              'false' => '否',
            ),
            'example' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'VideoBitrate',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '短视频水印参数，含义为视频的比特率(bitrate)，短视频时必须设置该参数。',
            'description' => '短视频水印参数：含义为视频的比特率，默认会自动获取视频的比特率，可以通过该参数强制指定提取时使用的比特率。通常无需设置该参数。',
            'type' => 'string',
            'required' => false,
            'example' => '3000k',
          ),
        ),
        8 => 
        array (
          'name' => 'ImageEmbedLevel',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '图像水印参数：取值范围为 [0, 4]，默认值为 2。更大的值意味着更高的鲁棒性，但是视觉质量会下降。',
            'description' => '图像水印参数：更大的值意味着更高的鲁棒性，但是视觉质量会下降。默认值2。取值：0~4。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '2',
          ),
        ),
        9 => 
        array (
          'name' => 'ImageEmbedJpegQuality',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '图像水印参数：期望的输出图像jpeg压缩质量因子，取值范围 [1, 100]，默认值 95',
            'description' => '图像水印参数：期望的输出图像jpeg压缩质量因子，默认值 95。取值：1~100。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '95',
          ),
        ),
        10 => 
        array (
          'name' => 'DocumentControl',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '文档水印控制参数。',
            'type' => 'object',
            'properties' => 
            array (
              'InvisibleAntiTextCopy' => 
              array (
                'description' => '是否启用零宽字符暗水印。零宽字符暗水印可以抵抗文档增、删、改、另存（格式不变）、部分文本复制粘贴、CopytoTxt攻击。不能抵抗格式转换toPDF攻击。取值：

- **true**：是
- **false**：否',
                'type' => 'boolean',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'true' => '是',
                  'false' => '否',
                ),
                'example' => 'true',
              ),
              'InvisibleAntiAllCopy' => 
              array (
                'description' => '是否启用组件暗水印。组件暗水印可以抵抗文档增、删、改、另存（格式不变）、docx全选复制拷贝到新docx文档，不能抵抗格式转换攻击。取值：

- **true**：是
- **false**：否',
                'type' => 'boolean',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'true' => '是',
                  'false' => '否',
                ),
                'example' => 'true',
              ),
              'BackgroundControl' => 
              array (
                'description' => '背景水印控制参数。',
                'type' => 'object',
                'properties' => 
                array (
                  'BgAddVisible' => 
                  array (
                    'description' => '是否启用背景明水印。取值：

- **true**：是
- **false**：否',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => 'true',
                  ),
                  'BgVisibleControl' => 
                  array (
                    'description' => '背景明水印控制参数。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'VisibleText' => 
                      array (
                        'description' => '背景明水印文案。格式为utf8字符串。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'hello ****',
                        'maxLength' => 1000,
                      ),
                      'Mode' => 
                      array (
                        'title' => '',
                        'description' => '背景明水印模式。取值：

- **pos**：在背景的特定位置嵌入一处明水印文案。
- **repeat**：在文档背景中平铺嵌入多处明水印文案。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'pos',
                        'enum' => 
                        array (
                          0 => 'repeat',
                          1 => 'pos',
                        ),
                      ),
                      'FontSize' => 
                      array (
                        'description' => '明水印文字字号。取值越大，字体越大。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '200',
                        'example' => '30',
                      ),
                      'FontColor' => 
                      array (
                        'description' => '明水印文字颜色。格式为 0xFFFFFF RGB颜色格式。如 0x000000 表示黑色。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0x000000',
                        'pattern' => '^0[xX][0-9a-fA-F]{6}$',
                      ),
                      'Angle' => 
                      array (
                        'description' => '明水印文字逆时针旋转角度。取值范围1~360。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '360',
                        'minimum' => '0',
                        'example' => '30',
                      ),
                      'PosX' => 
                      array (
                        'description' => 'Mode为pos时生效。控制明水印水平位置的参数，以左下角为原点。数值在0～1之间时，为比例控制。数值大于1时，为精确的像素位置控制。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0.5',
                        'pattern' => '^[\\d.]+$',
                      ),
                      'PosY' => 
                      array (
                        'description' => 'Mode为pos时生效。控制明水印垂直位置的参数，以左下角为原点。数值在0～1之间时，为比例控制，数值大于1时，为精确的像素位置控制。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0.5',
                        'pattern' => '^[\\d.]+$',
                      ),
                      'HorizontalNumber' => 
                      array (
                        'description' => 'Mode为repeat时生效。表示明水印在水平方向上重复出现的次数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '200',
                        'example' => '3',
                      ),
                      'VerticalNumber' => 
                      array (
                        'description' => 'Mode为repeat时生效。表示明水印在垂直方向上重复出现的次数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '200',
                        'example' => '3',
                      ),
                      'Opacity' => 
                      array (
                        'description' => '明水印透明度参数。取值范围1~255。取值越大，越不透明。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '255',
                        'minimum' => '1',
                        'example' => '100',
                      ),
                    ),
                    'required' => false,
                  ),
                  'BgAddInvisible' => 
                  array (
                    'description' => '是否添加背景暗水印。取值：

- **true**：是
- **false**：否',
                    'type' => 'boolean',
                    'required' => false,
                    'enumValueTitles' => 
                    array (
                      'true' => '是',
                      'false' => '否',
                    ),
                    'example' => 'true',
                  ),
                  'BgInvisibleControl' => 
                  array (
                    'description' => '背景暗水印控制参数。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Opacity' => 
                      array (
                        'description' => '背景暗水印透明度参数。取值范围1~13。取值越大，越不透明。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '255',
                        'minimum' => '1',
                        'example' => '10',
                      ),
                    ),
                    'required' => false,
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
                'example' => 'BE4FB974-11BC-5453-9BE1-1606A73EACA6',
              ),
              'Data' => 
              array (
                'description' => '任务信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'TaskId' => 
                  array (
                    'title' => '嵌入任务ID',
                    'description' => '任务ID，用于后续查询任务执行结果。',
                    'type' => 'string',
                    'example' => 'job:5GfrJYsoaffmCE7Z5bZtjUefzxfd****',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BE4FB974-11BC-5453-9BE1-1606A73EACA6\\",\\n  \\"Data\\": {\\n    \\"TaskId\\": \\"job:5GfrJYsoaffmCE7Z5bZtjUefzxfd****\\"\\n  }\\n}","type":"json"}]',
      'title' => '创建水印嵌入任务',
    ),
    'RevokeUserSession' => 
    array (
      'summary' => '吊销用户登录会话',
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
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '224559',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcsas62O8LY',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IdpId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户所属身份源配置ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'idp-cfg9vcrqylo39c39uxnw',
          ),
        ),
        1 => 
        array (
          'name' => 'ExternalIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '外部身份源用户唯一ID。',
            'type' => 'string',
            'required' => true,
            'example' => '12345678',
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
                'example' => 'D6707286-A50E-57B1-B2CF-EFAC59E850D8',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D6707286-A50E-57B1-B2CF-EFAC59E850D8\\"\\n}","type":"json"}]',
      'title' => '吊销用户登录会话',
    ),
    'ListPopTrafficStatistics' => 
    array (
      'summary' => '查询SASE的POP节点带宽。',
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
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据的起始时间。以秒为单位的UNIX时间戳。',
            'type' => 'string',
            'required' => false,
            'example' => '1681035708',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间。以秒为单位的UNIX时间戳。',
            'type' => 'string',
            'required' => false,
            'example' => '1681293719',
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
                'example' => 'EFE7EBB2-449D-5BBB-B381-CA7839BC1649',
              ),
              'TrafficData' => 
              array (
                'description' => 'POP点带宽数据列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '流入/流出带宽数据列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'MetricName' => 
                    array (
                      'description' => '统计指标名称。分为流入、流出两种。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'InternetTx' => 'InternetTx',
                        'InternetRx' => 'InternetRx',
                      ),
                      'example' => 'InternetTx',
                    ),
                    'Datapoints' => 
                    array (
                      'description' => 'POP点带宽数据点列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'POP点带宽数据点。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'DateTime' => 
                          array (
                            'description' => '该数据点对应时间。',
                            'type' => 'string',
                            'example' => '2023-12-06 15:29:00',
                          ),
                          'Average' => 
                          array (
                            'description' => '以分钟为单位的平均带宽值。单位为Byte/s。',
                            'type' => 'number',
                            'format' => 'double',
                            'example' => '15325',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
            'enumValueTitles' => 
            array (
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EFE7EBB2-449D-5BBB-B381-CA7839BC1649\\",\\n  \\"TrafficData\\": [\\n    {\\n      \\"MetricName\\": \\"InternetTx\\",\\n      \\"Datapoints\\": [\\n        {\\n          \\"DateTime\\": \\"2023-12-06 15:29:00\\",\\n          \\"Average\\": 15325\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询POP点带宽统计',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'public',
      'endpoint' => 'csas.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'csas.aliyuncs.com',
    ),
  ),
);
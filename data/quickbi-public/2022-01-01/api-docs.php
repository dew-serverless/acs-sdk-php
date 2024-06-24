<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'quickbi-public',
    'version' => '2022-01-01',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 163985,
      'title' => '组织用户管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddUser',
        1 => 'BatchAddFeishuUsers',
        2 => 'DeleteUser',
        3 => 'UpdateUser',
        4 => 'QueryUserList',
        5 => 'QueryUserInfoByUserId',
        6 => 'QueryUserInfoByAccount',
      ),
    ),
    1 => 
    array (
      'id' => 163992,
      'title' => '用户标签管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddUserTagMeta',
        1 => 'DeleteUserTagMeta',
        2 => 'UpdateUserTagValue',
        3 => 'QueryUserTagMetaList',
        4 => 'QueryUserTagValueList',
        5 => 'UpdateUserTagMeta',
      ),
    ),
    2 => 
    array (
      'id' => 163999,
      'title' => '组织用户组管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateUserGroup',
        1 => 'AddUserGroupMember',
        2 => 'AddUserGroupMembers',
        3 => 'DeleteUserGroup',
        4 => 'DeleteUserGroupMember',
        5 => 'DeleteUserGroupMembers',
        6 => 'WithdrawAllUserGroups',
        7 => 'UpdateUserGroup',
        8 => 'GetUserGroupInfo',
        9 => 'ListByUserGroupId',
        10 => 'ListUserGroupsByUserId',
        11 => 'QueryUserGroupListByParentId',
        12 => 'QueryUserGroupMember',
      ),
    ),
    3 => 
    array (
      'id' => 190322,
      'title' => '角色管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListWorkspaceRoleUsers',
        1 => 'QueryWorkspaceRoleConfig',
        2 => 'QueryOrganizationRoleConfig',
        3 => 'ListWorkspaceRoles',
        4 => 'ListOrganizationRoles',
        5 => 'ListOrganizationRoleUsers',
      ),
    ),
    4 => 
    array (
      'id' => 164013,
      'title' => '报表分享授权管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddShareReport',
        1 => 'CancelReportShare',
        2 => 'QuerySharesToUserList',
        3 => 'QueryShareList',
      ),
    ),
    5 => 
    array (
      'id' => 164018,
      'title' => '数据门户菜单授权管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AuthorizeMenu',
        1 => 'CancelAuthorizationMenu',
        2 => 'ChangeVisibilityModel',
        3 => 'ListPortalMenus',
        4 => 'ListPortalMenuAuthorization',
      ),
    ),
    6 => 
    array (
      'id' => 164024,
      'title' => '行级权限管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'SetDataLevelPermissionRuleConfig',
        1 => 'AddDataLevelPermissionRuleUsers',
        2 => 'AddDataLevelPermissionWhiteList',
        3 => 'DeleteDataLevelRuleConfig',
        4 => 'DeleteDataLevelPermissionRuleUsers',
        5 => 'UpdateDataLevelPermissionStatus',
        6 => 'SetDataLevelPermissionExtraConfig',
        7 => 'SetDataLevelPermissionWhiteList',
        8 => 'QueryDatasetSwitchInfo',
        9 => 'ListCubeDataLevelPermissionConfig',
        10 => 'ListDataLevelPermissionWhiteList',
      ),
    ),
    7 => 
    array (
      'id' => 164036,
      'title' => '工作空间管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddUserToWorkspace',
        1 => 'AddWorkspaceUsers',
        2 => 'DeleteUserFromWorkspace',
        3 => 'UpdateWorkspaceUsersRole',
        4 => 'UpdateWorkspaceUserRole',
        5 => 'QueryWorkspaceUserList',
        6 => 'QueryOrganizationWorkspaceList',
        7 => 'QueryUserRoleInfoInWorkspace',
      ),
    ),
    8 => 
    array (
      'id' => 164045,
      'title' => '报表资源管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'UpdateEmbeddedStatus',
        1 => 'QueryWorksByOrganization',
        2 => 'QueryWorksByWorkspace',
        3 => 'QueryReadableResourcesListByUserId',
        4 => 'CheckReadable',
        5 => 'QueryEmbeddedInfo',
        6 => 'QueryEmbeddedStatus',
        7 => 'QueryWorks',
        8 => 'QueryWorksBloodRelationship',
        9 => 'QueryComponentPerformance',
        10 => 'QueryReportPerformance',
      ),
    ),
    9 => 
    array (
      'id' => 164055,
      'title' => '数据集资源管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ModifyApiDatasourceParameters',
        1 => 'ListApiDatasource',
        2 => 'QueryDatasetInfo',
        3 => 'QueryDatasetDetailInfo',
        4 => 'QueryDatasetList',
        5 => 'AllotDatasetAccelerationTask',
        6 => 'QueryCubePerformance',
        7 => 'QueryCubeOptimization',
      ),
    ),
    10 => 
    array (
      'id' => 164059,
      'title' => '收藏管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'SaveFavorites',
        1 => 'CancelCollection',
        2 => 'ListCollections',
      ),
    ),
    11 => 
    array (
      'id' => 164063,
      'title' => '首页管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListFavoriteReports',
        1 => 'ListRecentViewReports',
        2 => 'ListSharedReports',
      ),
    ),
    12 => 
    array (
      'id' => 164067,
      'title' => '数据服务',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'QueryDataService',
      ),
    ),
    13 => 
    array (
      'id' => 164069,
      'title' => '嵌入分析',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateTicket4Copilot',
        1 => 'CreateTicket',
        2 => 'DeleteTicket',
        3 => 'DelayTicketExpireTime',
        4 => 'UpdateTicketNum',
        5 => 'QueryTicketInfo',
      ),
    ),
    14 => 
    array (
      'id' => 164075,
      'title' => '开放审批',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ResultCallback',
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
    'AddUser' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AdminUser',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '是否是管理员。取值范围： 

- true：是 
- false：否',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => false,
            'example' => 'true',
          ),
        ),
        1 => 
        array (
          'name' => 'AuthAdminUser',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '是否是权限管理员。取值范围： 

- true：是 
- false：否',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => false,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'UserType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '组织成员的角色类型。取值范围：
- 1 ：开发者
- 2 ：访问者
- 3 ：分析师',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '10',
            'minimum' => '1',
            'example' => '1',
            'enum' => 
            array (
              0 => '1',
              1 => '2',
              2 => '3',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阿里云账号名称。

- 说明：如果是子账号，格式为『主账号：子账号』。例如：master_test@aliyun.com:subaccount
- 格式检查：最大长度50个字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'xxxxxx@163.com',
          ),
        ),
        4 => 
        array (
          'name' => 'NickName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阿里云账号昵称。

- 格式检查：最大长度50个字符。
- 特殊格式校验：中英文数字 _ \\ / | () ] \\[',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '张三',
          ),
        ),
        5 => 
        array (
          'name' => 'RoleIds',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

-  true：请求成功
-  false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'description' => '返回新增阿里云用户的详细信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'UserType' => 
                  array (
                    'description' => '组织成员的角色类型。取值范围：
- 1 ：开发者
- 2 ：访问者
- 3 ：分析师',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'UserId' => 
                  array (
                    'description' => 'Quick BI中的UserID。',
                    'type' => 'string',
                    'example' => 'b5d8fd9348cc4327****afb604',
                  ),
                  'AuthAdminUser' => 
                  array (
                    'description' => '是否是权限管理员。取值范围： 

- true：是 
- false：否',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'NickName' => 
                  array (
                    'description' => '阿里云账号昵称。',
                    'type' => 'string',
                    'example' => '张三',
                  ),
                  'AdminUser' => 
                  array (
                    'description' => '是否是管理员。取值范围： 

- true：是 
- false：否',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'AccountName' => 
                  array (
                    'description' => '阿里云账户。',
                    'type' => 'string',
                    'example' => 'xxxxxx@163.com',
                  ),
                  'RoleIdList' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
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
            'errorCode' => 'Organization.Developers.ReachedTheUpperLimit',
            'errorMessage' => 'The developers of the organization have reached the upper limit:%s',
          ),
          1 => 
          array (
            'errorCode' => 'Organization.Viewers.ReachedTheUpperLimit',
            'errorMessage' => 'The visitors of the organization have reached the upper limit:%s.',
          ),
          2 => 
          array (
            'errorCode' => 'Organization.Analysts.ReachedTheUpperLimit',
            'errorMessage' => 'The analysts of the organization have reached the upper limit:%s.',
          ),
          3 => 
          array (
            'errorCode' => 'NickName.AlreadyIn.Organization',
            'errorMessage' => 'The alias already exists.',
          ),
          4 => 
          array (
            'errorCode' => 'User.AlreadyIn.Organization',
            'errorMessage' => 'This user is already a member of the current organization.',
          ),
          5 => 
          array (
            'errorCode' => 'Invalid.User.Organization',
            'errorMessage' => 'The user is not in your organization.',
          ),
          6 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          7 => 
          array (
            'errorCode' => 'Instance.Over.MaxLicense',
            'errorMessage' => 'You have reached the maximum number of users that can be added. Please upgrade the configurations or remove some users first.',
          ),
          8 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          9 => 
          array (
            'errorCode' => 'AnalystUser.NotSupport.AdminOrDevRole',
            'errorMessage' => 'Analyst users do not support granting workspace administrator or developer roles.',
          ),
          10 => 
          array (
            'errorCode' => 'Workspace.Not.Exist',
            'errorMessage' => 'The group workspace does not exist.',
          ),
          11 => 
          array (
            'errorCode' => 'Workspace.Type.Error',
            'errorMessage' => 'The type of group workspace is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'Viewer.AddInTo.Workspace',
            'errorMessage' => 'Organization members with viewer type are not allowed to add to workspace: %s.',
          ),
          13 => 
          array (
            'errorCode' => 'User.AlreadyIn.Workspace',
            'errorMessage' => 'This user already exists.',
          ),
          14 => 
          array (
            'errorCode' => 'User.AlreadyIn.Role',
            'errorMessage' => 'The user is already assigned this role.',
          ),
          15 => 
          array (
            'errorCode' => 'User.OrganizationRole.NotExist',
            'errorMessage' => 'User %s must have role in organization.',
          ),
          16 => 
          array (
            'errorCode' => 'Viewer.CannotHave.CustomRole',
            'errorMessage' => 'Organization viewer cannot have custom roles.',
          ),
          17 => 
          array (
            'errorCode' => 'UserAnalyst.NotSupport.ThisRole',
            'errorMessage' => 'This role has permissions that analysts cannot grant.',
          ),
          18 => 
          array (
            'errorCode' => 'RoleCount.ExceedsLimit.Error',
            'errorMessage' => 'The user role cannot exceed three.',
          ),
          19 => 
          array (
            'errorCode' => 'BindRole.NotExist.Error',
            'errorMessage' => 'Bind role not exist, %s.',
          ),
          20 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          21 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          22 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          23 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          24 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          25 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          26 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          27 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          28 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          29 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          30 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          31 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          32 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": {\\n    \\"UserType\\": 1,\\n    \\"UserId\\": \\"b5d8fd9348cc4327****afb604\\",\\n    \\"AuthAdminUser\\": true,\\n    \\"NickName\\": \\"张三\\",\\n    \\"AdminUser\\": true,\\n    \\"AccountName\\": \\"xxxxxx@163.com\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<AddUserResponse>\\n    <Success>true</Success>\\n    <RequestId>D787E1A3-A93C-424A-B626-C2B05DF8D885</RequestId>\\n    <Result>\\n        <UserType>1</UserType>\\n        <UserId>b5d8fd9348cc4327****afb604</UserId>\\n        <AuthAdminUser>true</AuthAdminUser>\\n        <NickName>张三</NickName>\\n        <AdminUser>true</AdminUser>\\n        <AccountName>xxxxxx@163.com</AccountName>\\n    </Result>\\n</AddUserResponse>","errorExample":""}]',
      'title' => '添加组织成员',
      'summary' => '添加组织成员。',
    ),
    'BatchAddFeishuUsers' => 
    array (
      'summary' => '批量添加飞书用户。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IsAuthAdmin',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否是权限管理员

- true
- false

不填写默认为false',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => false,
            'example' => 'true',
          ),
        ),
        1 => 
        array (
          'name' => 'IsAdmin',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否为admin用户：
- true
- false

不填写默认为false',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => false,
            'example' => 'False',
          ),
        ),
        2 => 
        array (
          'name' => 'FeishuUsers',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要添加的用户信息',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '{"ad****fd": "张三", "82****5a": "李四"}"',
          ),
        ),
        3 => 
        array (
          'name' => 'UserGroupIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '所属用户组',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '"0d5fb19b-5555-41f0-99da-1248fc27ca51,0f868dd6_68dd_4d13_8422_c5dca3bd4b61"',
          ),
        ),
        4 => 
        array (
          'name' => 'UserType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户类型
- 开发者类型：1
- 访问者类型：2
- 分析师：3 ',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
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
                'description' => '请求 ID。',
                'type' => 'string',
                'example' => 'D8749D65-E80A-433C-AF1B-CE9C180FF3B4',
              ),
              'Result' => 
              array (
                'description' => '返回添加用户组成员的结果。取值范围：

- true：添加成功

- false：添加失败',
                'type' => 'object',
                'properties' => 
                array (
                  'OkCount' => 
                  array (
                    'description' => '成功计数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'FailCount' => 
                  array (
                    'description' => '失败校验的个数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'FailResults' => 
                  array (
                    'description' => '失败的具体详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'FailInfos' => 
                        array (
                          'description' => '错误原因。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Code' => 
                              array (
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'ACCOUNT_EXIST',
                              ),
                              'Input' => 
                              array (
                                'description' => '错误的输入值。',
                                'type' => 'string',
                                'example' => '20',
                              ),
                              'CodeDesc' => 
                              array (
                                'description' => '错误码描述。',
                                'type' => 'string',
                                'example' => '账号已存在',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
                'example' => 'True',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'True',
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
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'Feishhu.Config.Not.Exit',
            'errorMessage' => 'Feishu is not configured in the current organization',
          ),
          2 => 
          array (
            'errorCode' => 'Feishu.User.Need.Sync.Contact',
            'errorMessage' => 'Feishu need to sync contact list.',
          ),
          3 => 
          array (
            'errorCode' => 'Feishu.Parameter.Error',
            'errorMessage' => 'Feishu config error: %s.',
          ),
          4 => 
          array (
            'errorCode' => 'Mail.Invalid',
            'errorMessage' => 'Email/phone number is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'Usergroup.Not.Exist',
            'errorMessage' => 'The user group does not exist.',
          ),
          6 => 
          array (
            'errorCode' => 'Instance.Over.MaxLicense',
            'errorMessage' => 'You have reached the maximum number of users that can be added. Please upgrade the configurations or remove some users first.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'Feishu.User.Duplicated',
            'errorMessage' => 'Feishu account already exists or bound：%s.',
          ),
          9 => 
          array (
            'errorCode' => 'Viewer.CannotHave.CustomRole',
            'errorMessage' => 'Organization viewer cannot have custom roles.',
          ),
          10 => 
          array (
            'errorCode' => 'UserAnalyst.NotSupport.ThisRole',
            'errorMessage' => 'This role has permissions that analysts cannot grant.',
          ),
          11 => 
          array (
            'errorCode' => 'User.OrganizationRole.NotExist',
            'errorMessage' => 'User %s must have role in organization.',
          ),
          12 => 
          array (
            'errorCode' => 'FeishuUser.UserGroup.AssociationError',
            'errorMessage' => 'Feishu User can only be added into feishu or Bi user group.',
          ),
          13 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          14 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          15 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          16 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          17 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          18 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          19 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          20 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          21 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          22 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          23 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          24 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          25 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          26 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D8749D65-E80A-433C-AF1B-CE9C180FF3B4\\",\\n  \\"Result\\": {\\n    \\"OkCount\\": 1,\\n    \\"FailCount\\": 10,\\n    \\"FailResults\\": [\\n      {\\n        \\"FailInfos\\": [\\n          {\\n            \\"Code\\": \\"ACCOUNT_EXIST\\",\\n            \\"Input\\": \\"20\\",\\n            \\"CodeDesc\\": \\"账号已存在\\"\\n          }\\n        ]\\n      }\\n    ]\\n  },\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '批量添加飞书用户',
    ),
    'DeleteUser' => 
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待删除的用户ID。此处的用户ID为Quick BI的UserID，而非阿里云的UID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'fe67f61a35a94b7da1a34ba174a7****',
          ),
        ),
        1 => 
        array (
          'name' => 'TransferUserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '继承者的用户ID。如果不为空，则将删除用户在工作空间内的报表资源转移给继承者，否则转移给空间owner。
- 继承者不能是组织访问者
- 继承者在工作空间的权限不能小于删除掉的用户，管理权限>开发权限>分享权限>查看权限
- 继承者不在工作空间内，会自动加入工作空间',
            'type' => 'string',
            'required' => false,
            'example' => 'f5****afccd9e434a274',
          ),
        ),
      ),
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
                'example' => 'DC4E1E63-B337-44F8-8C22-6F00DF67E2C3',
              ),
              'Result' => 
              array (
                'description' => '返回接口执行结果。取值范围：

- true：执行成功
- false：执行失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'CannotRemove.OrganizationOwner',
            'errorMessage' => 'You cannot remove the organization owner from the organization.',
          ),
          1 => 
          array (
            'errorCode' => 'Member.ExistInWorkspace.Error',
            'errorMessage' => 'You cannot remove a user who is a member of a group workspace.',
          ),
          2 => 
          array (
            'errorCode' => 'Workspace.Not.Exist',
            'errorMessage' => 'The group workspace does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'Workspace.Type.Error',
            'errorMessage' => 'The type of group workspace is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'Not.Organization.AuthAdmin',
            'errorMessage' => 'You are not a role administrator of the organization and do not have the permission to perform the operation.',
          ),
          5 => 
          array (
            'errorCode' => 'Works.Transfer.Error',
            'errorMessage' => 'You are not authorized to transfer this item.',
          ),
          6 => 
          array (
            'errorCode' => 'CanNot.Remove.WorkspaceOwner',
            'errorMessage' => 'You cannot remove the group workspace owner from the group.',
          ),
          7 => 
          array (
            'errorCode' => 'User.NotIn.Workspace',
            'errorMessage' => 'The user is not a member of the group workspace.',
          ),
          8 => 
          array (
            'errorCode' => 'Transfer.TargetUser.NotExist',
            'errorMessage' => 'The new owner does not exist. Please ensure that the target user has logged on to the system.',
          ),
          9 => 
          array (
            'errorCode' => 'User.RoleType.Valid',
            'errorMessage' => 'The role ID is invalid.',
          ),
          10 => 
          array (
            'errorCode' => 'Viewer.AddInTo.Workspace',
            'errorMessage' => 'Organization members with viewer type are not allowed to add to workspace: %s.',
          ),
          11 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          12 => 
          array (
            'errorCode' => 'UserAnalyst.NotSupport.ThisRole',
            'errorMessage' => 'This role has permissions that analysts cannot grant.',
          ),
          13 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          14 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          15 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          16 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          17 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          18 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          19 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          20 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          21 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          22 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          23 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          24 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          25 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          26 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          27 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DC4E1E63-B337-44F8-8C22-6F00DF67E2C3\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteUserResponse>\\n    <RequestId>DC4E1E63-B337-44F8-8C22-6F00DF67E2C3</RequestId>\\n    <Result>true</Result>\\n    <Success>true</Success>\\n</DeleteUserResponse>","errorExample":""}]',
      'title' => '删除组织用户',
      'summary' => '删除指定组织用户。',
    ),
    'UpdateUser' => 
    array (
      'summary' => '更新组织下指定成员的信息。',
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
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待更新的用户ID。此处的用户ID为Quick BI的UserID，而非阿里云的UID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'fe67f61a35a94b7da1a34ba174a7****',
          ),
        ),
        1 => 
        array (
          'name' => 'AdminUser',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '是否是组织管理员。取值范围：

- true：是
- false：否',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => false,
            'example' => 'true',
            'deprecated' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'AuthAdminUser',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否是权限管理员。取值范围：

- true：是
- false：否',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'UserType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '组织成员的角色类型。取值范围：

- 1 ：开发者
- 2 ：访问者
- 3 ：分析师',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'maximum' => '10',
            'minimum' => '1',
            'example' => '1',
            'enum' => 
            array (
              0 => '1',
              1 => '2',
              2 => '3',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'NickName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '昵称。

- 格式检查：最大长度50个字符。
- 特殊格式校验：中英文数字 _ \\ / | () ] [',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '小张',
          ),
        ),
        5 => 
        array (
          'name' => 'RoleIds',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
      ),
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
                'example' => 'DC4E1E63-B337-44F8-8C22-6F00DF67E2C3',
              ),
              'Result' => 
              array (
                'description' => '返回接口执行结果。取值范围：

- true：执行成功
- false：执行失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          1 => 
          array (
            'errorCode' => 'NickName.AlreadyIn.Organization',
            'errorMessage' => 'The alias already exists.',
          ),
          2 => 
          array (
            'errorCode' => 'Fobbiden.Action',
            'errorMessage' => 'The organization owner must have the administrator role.',
          ),
          3 => 
          array (
            'errorCode' => 'Invalid.User.Organization',
            'errorMessage' => 'The user is not in your organization.',
          ),
          4 => 
          array (
            'errorCode' => 'Organization.Developers.ReachedTheUpperLimit',
            'errorMessage' => 'The developers of the organization have reached the upper limit:%s',
          ),
          5 => 
          array (
            'errorCode' => 'Organization.Viewers.ReachedTheUpperLimit',
            'errorMessage' => 'The visitors of the organization have reached the upper limit:%s.',
          ),
          6 => 
          array (
            'errorCode' => 'Organization.Analysts.ReachedTheUpperLimit',
            'errorMessage' => 'The analysts of the organization have reached the upper limit:%s.',
          ),
          7 => 
          array (
            'errorCode' => 'Instance.Over.MaxLicense',
            'errorMessage' => 'You have reached the maximum number of users that can be added. Please upgrade the configurations or remove some users first.',
          ),
          8 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          9 => 
          array (
            'errorCode' => 'Mail.Invalid',
            'errorMessage' => 'Email/phone number is invalid.',
          ),
          10 => 
          array (
            'errorCode' => 'OrganizationDeveloper.CanNotChangeTo.AnalystOrViewer',
            'errorMessage' => 'Organization user can not change developer to analyst or viewer.',
          ),
          11 => 
          array (
            'errorCode' => 'OrgAdminOrPermissionAdmin.CannotChangeTo.Viewer',
            'errorMessage' => 'Organization admin or permission admin can not change to viewer.',
          ),
          12 => 
          array (
            'errorCode' => 'ChangeTo.Viewer.Error',
            'errorMessage' => 'The organization user type cannot be changed because the user already belongs to a workspace.',
          ),
          13 => 
          array (
            'errorCode' => 'UserAnalyst.NotSupport.ThisRole',
            'errorMessage' => 'This role has permissions that analysts cannot grant.',
          ),
          14 => 
          array (
            'errorCode' => 'Viewer.CannotHave.CustomRole',
            'errorMessage' => 'Organization viewer cannot have custom roles.',
          ),
          15 => 
          array (
            'errorCode' => 'User.OrganizationRole.NotExist',
            'errorMessage' => 'User %s must have role in organization.',
          ),
          16 => 
          array (
            'errorCode' => 'RoleCount.ExceedsLimit.Error',
            'errorMessage' => 'The user role cannot exceed three.',
          ),
          17 => 
          array (
            'errorCode' => 'BindRole.NotExist.Error',
            'errorMessage' => 'Bind role not exist, %s.',
          ),
          18 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          19 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          20 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          21 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          22 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          23 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          24 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          25 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          26 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          27 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          28 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          29 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DC4E1E63-B337-44F8-8C22-6F00DF67E2C3\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UpdateUserResponse>\\n    <RequestId>DC4E1E63-B337-44F8-8C22-6F00DF67E2C3</RequestId>\\n    <Result>true</Result>\\n    <Success>true</Success>\\n</UpdateUserResponse>","errorExample":""}]',
      'title' => '更新组织成员信息',
    ),
    'QueryUserList' => 
    array (
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
          'name' => 'Keyword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '组织成员用户名或昵称的关键字。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '测试用户',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '组织成员列表的当前页码：

- 起始值：1
- 默认值：1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'maximum' => '99999999',
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
            'description' => '	
分页查询时的每页行数：

- 默认值：10
- 最大值：1000',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'maximum' => '1000',
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
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'description' => '返回用户列表的分页结果，组织成员的详细信息列表存放在返回参数Data中。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalPages' => 
                  array (
                    'description' => '总页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageNum' => 
                  array (
                    'description' => '页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '请求接口时设置的每页行数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'TotalNum' => 
                  array (
                    'description' => '总行数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Data' => 
                  array (
                    'description' => '返回请求的用户列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'UserType' => 
                        array (
                          'description' => '组织成员的角色类型。取值范围：

- 1 ：开发者
- 2 ：访问者
- 3 ：分析师',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'UserId' => 
                        array (
                          'description' => 'Quick BI中的UserID。',
                          'type' => 'string',
                          'example' => 'fe67f61a35a94b7da1a34ba174a7****',
                        ),
                        'AuthAdminUser' => 
                        array (
                          'description' => '	
是否是权限管理员。取值范围：

- true：是
- false：否',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'AccountId' => 
                        array (
                          'description' => '阿里云账号ID。非Ram自助读取添加的用户，需要登录后才能获取到阿里云ID。',
                          'type' => 'string',
                          'example' => '1355********',
                        ),
                        'NickName' => 
                        array (
                          'description' => '组织成员的昵称。',
                          'type' => 'string',
                          'example' => '测试用户',
                        ),
                        'AdminUser' => 
                        array (
                          'description' => '是否是组织管理员。取值范围：

- true：是
- false：否',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'AccountName' => 
                        array (
                          'description' => '阿里云账号名称。',
                          'type' => 'string',
                          'example' => '测试用户',
                        ),
                        'RoleIdList' => 
                        array (
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int64',
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
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          5 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          9 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          10 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          11 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          13 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          14 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          15 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": {\\n    \\"TotalPages\\": 1,\\n    \\"PageNum\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"TotalNum\\": 1,\\n    \\"Data\\": [\\n      {\\n        \\"UserType\\": 1,\\n        \\"UserId\\": \\"fe67f61a35a94b7da1a34ba174a7****\\",\\n        \\"AuthAdminUser\\": true,\\n        \\"AccountId\\": \\"1355********\\",\\n        \\"NickName\\": \\"测试用户\\",\\n        \\"AdminUser\\": true,\\n        \\"AccountName\\": \\"测试用户\\",\\n        \\"RoleIdList\\": [\\n          0\\n        ]\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryUserListResponse>\\n    <Success>true</Success>\\n    <RequestId>D787E1A3-A93C-424A-B626-C2B05DF8D885</RequestId>\\n    <Result>\\n        <TotalPages>1</TotalPages>\\n        <PageNum>1</PageNum>\\n        <PageSize>10</PageSize>\\n        <TotalNum>1</TotalNum>\\n        <Data>\\n            <UserType>1</UserType>\\n            <UserId>fe67f61a35a94b7da1a34ba174a7****</UserId>\\n            <AuthAdminUser>true</AuthAdminUser>\\n            <AccountId>135562959848</AccountId>\\n            <NickName>测试用户</NickName>\\n            <AdminUser>true</AdminUser>\\n            <AccountName>测试用户</AccountName>\\n        </Data>\\n    </Result>\\n</QueryUserListResponse>","errorExample":""}]',
      'title' => '查询组织成员列表信息',
      'summary' => '查询组织成员列表信息。',
    ),
    'QueryUserInfoByUserId' => 
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
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户ID。此处的UserID为Quick BI的UserID，而非阿里云的UID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'fe67f61a35a94b7da1a34ba174a7****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'description' => '返回的组织用户信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'UserType' => 
                  array (
                    'description' => '组织成员的角色类型。取值范围：

- 1 ：开发者
- 2 ：访问者
- 3 ：分析师',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Email' => 
                  array (
                    'description' => '邮箱。',
                    'type' => 'string',
                    'example' => '1386587****@163.com',
                  ),
                  'UserId' => 
                  array (
                    'description' => 'Quick BI中的UserID。',
                    'type' => 'string',
                    'example' => 'fe67f61a35a94b7da1a34ba174a7****',
                  ),
                  'AuthAdminUser' => 
                  array (
                    'description' => '是否为权限管理员。取值范围：

- true：是
- false：否',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'AccountId' => 
                  array (
                    'description' => '阿里云账号ID。',
                    'type' => 'string',
                    'example' => '135****5848',
                  ),
                  'NickName' => 
                  array (
                    'description' => '昵称。',
                    'type' => 'string',
                    'example' => '测试用户',
                  ),
                  'AdminUser' => 
                  array (
                    'description' => '	
是否为组织管理员。取值范围：

- true：是
- false：否',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'Phone' => 
                  array (
                    'description' => '手机号码。',
                    'type' => 'string',
                    'example' => '1386587****',
                  ),
                  'AccountName' => 
                  array (
                    'description' => '阿里云账号名称。',
                    'type' => 'string',
                    'example' => '1386587****@163.com',
                  ),
                  'RoleIdList' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
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
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          3 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          10 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          11 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          12 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          13 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          14 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          15 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": {\\n    \\"UserType\\": 1,\\n    \\"Email\\": \\"1386587****@163.com\\",\\n    \\"UserId\\": \\"fe67f61a35a94b7da1a34ba174a7****\\",\\n    \\"AuthAdminUser\\": true,\\n    \\"AccountId\\": \\"135****5848\\",\\n    \\"NickName\\": \\"测试用户\\",\\n    \\"AdminUser\\": true,\\n    \\"Phone\\": \\"1386587****\\",\\n    \\"AccountName\\": \\"1386587****@163.com\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryUserInfoByUserIdResponse>\\n    <Success>true</Success>\\n    <RequestId>D787E1A3-A93C-424A-B626-C2B05DF8D885</RequestId>\\n    <Result>\\n        <UserType>1</UserType>\\n        <Email>1386587****@163.com</Email>\\n        <UserId>fe67f61a35a94b7da1a34ba174a7****</UserId>\\n        <AuthAdminUser>true</AuthAdminUser>\\n        <AccountId>135****5848</AccountId>\\n        <NickName>测试用户</NickName>\\n        <AdminUser>true</AdminUser>\\n        <Phone>1386587****</Phone>\\n        <AccountName>1386587****@163.com</AccountName>\\n    </Result>\\n</QueryUserInfoByUserIdResponse>","errorExample":""}]',
      'title' => '根据用户ID查询用户信息',
      'summary' => '根据用户ID查询用户信息。',
    ),
    'QueryUserInfoByAccount' => 
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
          'name' => 'Account',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '输入待查询的阿里云账号名或阿里云ID。
- 当输入账号名时：
    - 如果组织用户是主账号（例如main_account），则查询账号格式为主账号。即，要输入的主账号main_account。 
    - 如果组织用户是子账号（例如zhangsan@test.onaliyun.com），则查询账号格式为子账号的头部，即，要输入的子账号为zhangsan。
- 当输入阿里云ID时：
    - 输入完整的账号UID，即可查询到对应的账号信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1386587****@163.com',
          ),
        ),
        1 => 
        array (
          'name' => 'ParentAccountName',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：
- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'description' => '返回的组织用户信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'UserType' => 
                  array (
                    'description' => '组织成员的角色类型。取值范围：

- 1 ：开发者
- 2 ：访问者
- 3 ：分析师',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Email' => 
                  array (
                    'description' => '邮箱。',
                    'type' => 'string',
                    'example' => '1386587****@163.com',
                  ),
                  'UserId' => 
                  array (
                    'description' => 'Quick BI中的UserID。',
                    'type' => 'string',
                    'example' => 'fe67f61a35a94b7da1a34ba174a7****',
                  ),
                  'AuthAdminUser' => 
                  array (
                    'description' => '是否为权限管理员。取值范围：

- true：是
- false：否',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'AccountId' => 
                  array (
                    'description' => '阿里云账号ID。',
                    'type' => 'string',
                    'example' => '135****5848',
                  ),
                  'NickName' => 
                  array (
                    'description' => '昵称。',
                    'type' => 'string',
                    'example' => '测试用户',
                  ),
                  'AdminUser' => 
                  array (
                    'description' => '是否为组织管理员。取值范围：

- true：是
- false：否',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'Phone' => 
                  array (
                    'description' => '手机号码。',
                    'type' => 'string',
                    'example' => '1386587****',
                  ),
                  'AccountName' => 
                  array (
                    'description' => '阿里云账号名称。（子账号会去除@后面的域名信息，例如test@test.com，会返回test）',
                    'type' => 'string',
                    'example' => '1386587****@163.com',
                  ),
                  'RoleIdList' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
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
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'AE0579100001',
            'errorMessage' => 'Duplicate users found with account name: %s.',
          ),
          3 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          4 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          6 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          10 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          11 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          12 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          13 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          14 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          15 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          16 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": {\\n    \\"UserType\\": 1,\\n    \\"Email\\": \\"1386587****@163.com\\",\\n    \\"UserId\\": \\"fe67f61a35a94b7da1a34ba174a7****\\",\\n    \\"AuthAdminUser\\": true,\\n    \\"AccountId\\": \\"135****5848\\",\\n    \\"NickName\\": \\"测试用户\\",\\n    \\"AdminUser\\": true,\\n    \\"Phone\\": \\"1386587****\\",\\n    \\"AccountName\\": \\"1386587****@163.com\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryUserInfoByAccountResponse>\\n    <Success>true</Success>\\n    <RequestId>D787E1A3-A93C-424A-B626-C2B05DF8D885</RequestId>\\n    <Result>\\n        <UserType>1</UserType>\\n        <Email>1386587****@163.com</Email>\\n        <UserId>fe67f61a35a94b7da1a34ba174a7****</UserId>\\n        <AuthAdminUser>true</AuthAdminUser>\\n        <AccountId>135****5848</AccountId>\\n        <NickName>测试用户</NickName>\\n        <AdminUser>true</AdminUser>\\n        <Phone>1386587****</Phone>\\n        <AccountName>1386587****@163.com</AccountName>\\n    </Result>\\n</QueryUserInfoByAccountResponse>","errorExample":""}]',
      'title' => '根据账号查询用户信息',
      'summary' => '根据阿里云ID或阿里云账户名查询用户信息。',
    ),
    'AddUserTagMeta' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TagName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签名称。格式检查：
- 最大长度50个字符。
- 只允许输入中英文数字和/\\|[]()符号。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '职位',
          ),
        ),
        1 => 
        array (
          'name' => 'TagDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签描述。格式检查：最大长度255个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '部门内的职位',
          ),
        ),
      ),
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
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'description' => '返回添加成功的标签ID。',
                'type' => 'string',
                'example' => '0822a7d9-****-****-****-f20163ab9b0d',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'TagName.Repeat',
            'errorMessage' => 'The tag name is duplicated.',
          ),
          1 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'Name.Length.Exceeded',
            'errorMessage' => 'The max length of name exceeded.',
          ),
          3 => 
          array (
            'errorCode' => 'Name.RegularExpression.Error',
            'errorMessage' => 'Name format validation failed.',
          ),
          4 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          5 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          7 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          10 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          11 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          12 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          13 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          14 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          15 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          16 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          17 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          18 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": \\"0822a7d9-****-****-****-f20163ab9b0d\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<AddUserTagMetaResponse>\\n    <RequestId>D787E1A3-A93C-424A-B626-C2B05DF8D885</RequestId>\\n    <Result>0822a7d9-****-****-****-f20163ab9b0d</Result>\\n    <Success>true</Success>\\n</AddUserTagMetaResponse>","errorExample":""}]',
      'title' => '新增组织成员标签元信息',
      'summary' => '新增组织成员标签元信息。',
    ),
    'DeleteUserTagMeta' => 
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TagId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待删除的标签ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pop_001',
          ),
        ),
      ),
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
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'description' => '返回删除标签的执行结果。取值范围：

- true：执行成功
- false：执行失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'UserTag.NotIn.CurrentOrganization',
            'errorMessage' => 'The user tag is not in the current organization.',
          ),
          1 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          3 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          10 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          11 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          12 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          13 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          14 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          15 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          16 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteUserTagMetaResponse>\\n    <RequestId>D787E1A3-A93C-424A-B626-C2B05DF8D885</RequestId>\\n    <Result>true</Result>\\n    <Success>true</Success>\\n</DeleteUserTagMetaResponse>","errorExample":""}]',
      'title' => '删除组织成员标签元信息',
      'summary' => '删除组织成员的标签元信息。',
    ),
    'UpdateUserTagValue' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待修改标签值的用户ID。此处的用户ID为Quick BI的UserID，而非阿里云的UID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'fe67f61a35a94b7da1a34ba174a7****',
          ),
        ),
        1 => 
        array (
          'name' => 'TagId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待修改的标签ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pop_001',
          ),
        ),
        2 => 
        array (
          'name' => 'TagValue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待修改的标签值。

- 如果需要清除该标签，则设置标签值为（$NULL$）。
- 多值请用英文逗号分割。
- 格式校验，最大长度：3000字符',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '产品总监',
          ),
        ),
      ),
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
                'example' => '46e5374665ba4b679ee22e2a29270',
              ),
              'Result' => 
              array (
                'description' => '返回修改用户标签的结果。取值范围：

- true：执行成功
- false：执行失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'UserTag.NotIn.CurrentOrganization',
            'errorMessage' => 'The user tag is not in the current organization.',
          ),
          1 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          3 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          10 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          11 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          12 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          13 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          14 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          15 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          16 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"46e5374665ba4b679ee22e2a29270\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UpdateUserTagValueResponse>\\n    <RequestId>46e5374665ba4b679ee22e2a29270</RequestId>\\n    <Result>true</Result>\\n    <Success>true</Success>\\n</UpdateUserTagValueResponse>","errorExample":""}]',
      'title' => '更新组织成员标签值',
      'summary' => '更新组织成员标签值。',
    ),
    'QueryUserTagMetaList' => 
    array (
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
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'description' => '返回组织内的用户标签列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TagName' => 
                    array (
                      'description' => '标签名称。',
                      'type' => 'string',
                      'example' => '职位',
                    ),
                    'TagDescription' => 
                    array (
                      'description' => '标签描述。',
                      'type' => 'string',
                      'example' => '用于区分部分职位',
                    ),
                    'TagId' => 
                    array (
                      'description' => '标签 ID。',
                      'type' => 'string',
                      'example' => 'pop_001',
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
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          5 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          9 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          10 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          11 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          13 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          14 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          15 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": [\\n    {\\n      \\"TagName\\": \\"职位\\",\\n      \\"TagDescription\\": \\"用于区分部分职位\\",\\n      \\"TagId\\": \\"pop_001\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<QueryUserTagMetaListResponse>\\n    <Success>true</Success>\\n    <RequestId>D787E1A3-A93C-424A-B626-C2B05DF8D885</RequestId>\\n    <Result>\\n        <TagName>职位</TagName>\\n        <TagDescription>用于区分部分职位</TagDescription>\\n        <TagId>pop_001</TagId>\\n    </Result>\\n</QueryUserTagMetaListResponse>","errorExample":""}]',
      'title' => '查询组织成员标签元信息列表',
      'summary' => '查询组织内成员标签元信息列表。',
    ),
    'QueryUserTagValueList' => 
    array (
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
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '此处的用户ID为Quick BI的UserID，而非阿里云的UID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'fe67f61a35a94b7da1a34ba174a7****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'description' => '返回用户标签及标签值列表的请求结果。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TagValue' => 
                    array (
                      'description' => '标签的值。',
                      'type' => 'string',
                      'example' => '主管',
                    ),
                    'TagName' => 
                    array (
                      'description' => '标签名称。',
                      'type' => 'string',
                      'example' => '职位',
                    ),
                    'TagId' => 
                    array (
                      'description' => '标签 ID。',
                      'type' => 'string',
                      'example' => 'pop_001',
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
            'errorCode' => 'UserTag.NotIn.CurrentOrganization',
            'errorMessage' => 'The user tag is not in the current organization.',
          ),
          1 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'Invalid.User.Organization',
            'errorMessage' => 'The user is not in your organization.',
          ),
          3 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          4 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          10 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          11 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          12 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          13 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          14 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          15 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          16 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": [\\n    {\\n      \\"TagValue\\": \\"主管\\",\\n      \\"TagName\\": \\"职位\\",\\n      \\"TagId\\": \\"pop_001\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<QueryUserTagValueListResponse>\\n    <Success>true</Success>\\n    <RequestId>D787E1A3-A93C-424A-B626-C2B05DF8D885</RequestId>\\n    <Result>\\n        <TagValue>主管</TagValue>\\n        <TagName>职位</TagName>\\n        <TagId>pop_001</TagId>\\n    </Result>\\n</QueryUserTagValueListResponse>","errorExample":""}]',
      'title' => '查询组织成员标签值列表',
      'summary' => '查询特定用户标签值列表。',
    ),
    'UpdateUserTagMeta' => 
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TagId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的TagID。

- 格式检查：最大长度64个字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'e82f6c6c0333431bad0225b2f85e****',
          ),
        ),
        1 => 
        array (
          'name' => 'TagName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签名称。
- 格式检查：最大长度50个字符。
- 只允许输入中英文数字和/\\|[]()符号。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '职位',
          ),
        ),
        2 => 
        array (
          'name' => 'TagDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签描述。

- 格式检查：最大长度255个字符。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '部门内的工作职位',
          ),
        ),
      ),
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
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'description' => '接口是否执行成功。取值范围：

- true：执行成功
- false：执行失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'UserTag.NotIn.CurrentOrganization',
            'errorMessage' => 'The user tag is not in the current organization.',
          ),
          1 => 
          array (
            'errorCode' => 'TagName.Repeat',
            'errorMessage' => 'The tag name is duplicated.',
          ),
          2 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          3 => 
          array (
            'errorCode' => 'Name.Length.Exceeded',
            'errorMessage' => 'The max length of name exceeded.',
          ),
          4 => 
          array (
            'errorCode' => 'Name.RegularExpression.Error',
            'errorMessage' => 'Name format validation failed.',
          ),
          5 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          6 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          8 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          10 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          11 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          13 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          14 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          15 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          16 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          17 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          18 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          19 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UpdateUserTagMetaResponse>\\n    <RequestId>D787E1A3-A93C-424A-B626-C2B05DF8D885</RequestId>\\n    <Result>true</Result>\\n    <Success>true</Success>\\n</UpdateUserTagMetaResponse>","errorExample":""}]',
      'title' => '更新组织成员标签元信息',
      'summary' => '用于更新组织成员标签元信息。',
    ),
    'CreateUserGroup' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户组唯一ID。

- 无需传入，系统会自动生成；当用户主动传入UserGroupId时，以用户传入的ID作为用户组ID，用户需要自行保证该ID在组织内唯一。
- 格式校验：最大长度64，不能为-1，',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'pop0001',
          ),
        ),
        1 => 
        array (
          'name' => 'UserGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户组名称。

- 格式校验：最大长度255
- 特殊格式校验：中英文数字 _ \\ / | () ] \\[',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '杭州财报',
          ),
        ),
        2 => 
        array (
          'name' => 'UserGroupDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户组描述。

- 格式校验：最大长度255
- 特殊格式校验：中英文数字 _ \\ / | () ] \\[',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '用户分组描述',
          ),
        ),
        3 => 
        array (
          'name' => 'ParentUserGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '父用户组ID。可以将新建的用户组添加到该分组下：
- 当输入父用户组ID时，新建的用户组会添加到该ID的用户组下。
- 当输入-1时，新建的用户组会添加到根目录下。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '3d2c23d4-2b41-4af8-a1f5-f6390f32****',
          ),
        ),
      ),
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
                'description' => '请求 ID。',
                'type' => 'string',
                'example' => '36829379-0C38-5BC0-830A-92665BF77D4F',
              ),
              'Result' => 
              array (
                'description' => '返回用户组添加成功后的ID。如果添加失败，返回空字符串“”。',
                'type' => 'string',
                'example' => 'f5eeb52e-d9c2-4a8b-80e3-47ab55c2****',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Usergroup.Not.Exist',
            'errorMessage' => 'The user group does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'Duplicate.Name.Error',
            'errorMessage' => 'The name already exists.',
          ),
          2 => 
          array (
            'errorCode' => 'UserGroup.Parent.NotFound',
            'errorMessage' => 'The parent user group does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'Duplicate.UserGroup.Id',
            'errorMessage' => 'Duplicated usergroupId %s.',
          ),
          4 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          5 => 
          array (
            'errorCode' => 'RootUserGroup.Create.Error',
            'errorMessage' => 'organization %s has synchronized with other organizational structures, so user groups cannot be created under the root user group.',
          ),
          6 => 
          array (
            'errorCode' => 'UserGroup.Already.Synchronized',
            'errorMessage' => 'Organization has synchronized with other organizational structures, so you are not allowed to add users under group.',
          ),
          7 => 
          array (
            'errorCode' => 'UserGroup.Layer.Limited',
            'errorMessage' => 'The user group cannot have more than ten layers.',
          ),
          8 => 
          array (
            'errorCode' => 'Duplicate.UserGroupName.Error',
            'errorMessage' => 'There is already a user group with the same name %s, please rename it before saving。',
          ),
          9 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          10 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          11 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          12 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          13 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          14 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          15 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          16 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          17 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          18 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          19 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          20 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"36829379-0C38-5BC0-830A-92665BF77D4F\\",\\n  \\"Result\\": \\"f5eeb52e-d9c2-4a8b-80e3-47ab55c2****\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreateUserGroupResponse>\\n    <RequestId>36829379-0C38-5BC0-830A-92665BF77D4F</RequestId>\\n    <Result>f5eeb52e-d9c2-4a8b-80e3-47ab55c2****</Result>\\n    <Success>true</Success>\\n</CreateUserGroupResponse>","errorExample":""}]',
      'title' => '新建用户组',
      'summary' => '新建用户组，可以指定父用户组。',
    ),
    'AddUserGroupMember' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '555c4cd****',
          ),
        ),
        1 => 
        array (
          'name' => 'UserIdList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Quick BI的用户ID，可输入多个，以英文逗号（,）分隔，例如：abc,efg。最多可输入1000条。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '46e537a5****,3dadsu****',
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
                'description' => '请求 ID。',
                'type' => 'string',
                'example' => 'B6141A5A-A9EF-5F16-BF34-EFB9C1CCE4F3',
              ),
              'Result' => 
              array (
                'description' => '返回添加用户组成员的结果。取值范围：

- true：添加成功

- false：添加失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功

- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Invalid.User',
            'errorMessage' => 'The user does not exist and cannot be added to a user group.',
          ),
          1 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          2 => 
          array (
            'errorCode' => 'Usergroup.Not.Exist',
            'errorMessage' => 'The user group does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          4 => 
          array (
            'errorCode' => 'Parameter.Length.Exceed',
            'errorMessage' => 'Parameter length exceeds maximum limit: [%s].',
          ),
          5 => 
          array (
            'errorCode' => 'UserGroup.Already.Synchronized',
            'errorMessage' => 'Organization has synchronized with other organizational structures, so you are not allowed to add users under group.',
          ),
          6 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          7 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          10 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          11 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          13 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          14 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          15 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          16 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          17 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          18 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          19 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B6141A5A-A9EF-5F16-BF34-EFB9C1CCE4F3\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<AddUserGroupMemberResponse>\\n    <RequestId>B6141A5A-A9EF-5F16-BF34-EFB9C1CCE4F3</RequestId>\\n    <Result>true</Result>\\n    <Success>true</Success>\\n</AddUserGroupMemberResponse>","errorExample":""}]',
      'title' => '添加成员到用户组',
      'summary' => '将组织成员添加到指定的用户组。',
    ),
    'AddUserGroupMembers' => 
    array (
      'summary' => '将用户批量添加到指定的用户组中。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => ' Quick BI的用户ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '46e5****37a5',
          ),
        ),
        1 => 
        array (
          'name' => 'UserGroupIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户组ID，以英文逗号分隔。示例：aGroupId,bGroupId,cGroupIds',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0d5fb19b-****-****-99da-1248fc27ca51',
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
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D8749D65-E80A-433C-AF1B-CE9C180FF3B4',
              ),
              'Result' => 
              array (
                'title' => '接口执行结果。取值范围：true：请求成功false：请求失败',
                'description' => '接口执行结果。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功。取值范围：true：请求成功false：请求失败',
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'Invalid.User',
            'errorMessage' => 'The user does not exist and cannot be added to a user group.',
          ),
          2 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          3 => 
          array (
            'errorCode' => 'Usergroup.Not.Exist',
            'errorMessage' => 'The user group does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'The length of the parameter must not exceed 1000.',
          ),
          5 => 
          array (
            'errorCode' => 'UserGroup.Already.Synchronized',
            'errorMessage' => 'Organization has synchronized with other organizational structures, so you are not allowed to add users under group.',
          ),
          6 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          7 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          10 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          11 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          12 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          13 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          14 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          15 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          16 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          17 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          18 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D8749D65-E80A-433C-AF1B-CE9C180FF3B4\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<AddUserGroupMembersResponse>\\n    <RequestId>D8749D65-E80A-433C-AF1B-CE9C180FF3B4</RequestId>\\n    <Result>true</Result>\\n    <Success>true</Success>\\n</AddUserGroupMembersResponse>","errorExample":""}]',
      'title' => '批量添加成员到用户组',
    ),
    'DeleteUserGroup' => 
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'f5eeb52e-d9c2-4a8b-80e3-47ab55c2****',
          ),
        ),
      ),
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
                'example' => 'F2775AB6-DE99-5FA6-86A4-72EA0A8AFEE3',
              ),
              'Result' => 
              array (
                'description' => '返回接口执行结果。取值范围：

- true：执行成功
- false：执行失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Usergroup.Not.Exist',
            'errorMessage' => 'The user group does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'UserGroup.Remove.RootNode',
            'errorMessage' => 'The root user group cannot be deleted.',
          ),
          2 => 
          array (
            'errorCode' => 'UserGroup.Remove.WithChildren',
            'errorMessage' => 'This user group contains a child user group and cannot be deleted.',
          ),
          3 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          4 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          5 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          7 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          10 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          11 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          12 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          13 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          14 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          15 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          16 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          17 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          18 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F2775AB6-DE99-5FA6-86A4-72EA0A8AFEE3\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteUserGroupResponse>\\n    <RequestId>F2775AB6-DE99-5FA6-86A4-72EA0A8AFEE3</RequestId>\\n    <Result>true</Result>\\n    <Success>true</Success>\\n</DeleteUserGroupResponse>","errorExample":""}]',
      'title' => '删除用户组',
      'summary' => '删除组织内的用户组。',
    ),
    'DeleteUserGroupMember' => 
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '46e537****',
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Quick BI的用户ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2fe4fbd8****',
          ),
        ),
      ),
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
                'example' => 'DC4E1E63-B337-44F8-8C22-6F00DF67E2C3',
              ),
              'Result' => 
              array (
                'description' => '返回删除用户组成员的结果。取值范围：

- true：删除成功

- false：删除失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功

- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Usergroup.Not.Exist',
            'errorMessage' => 'The user group does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          3 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          10 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          11 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          12 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          13 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          14 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          15 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          16 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DC4E1E63-B337-44F8-8C22-6F00DF67E2C3\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteUserGroupMemberResponse>\\n    <RequestId>DC4E1E63-B337-44F8-8C22-6F00DF67E2C3</RequestId>\\n    <Result>true</Result>\\n    <Success>true</Success>\\n</DeleteUserGroupMemberResponse>","errorExample":""}]',
      'title' => '删除用户组成员',
      'summary' => '删除指定用户组下的指定成员。',
    ),
    'DeleteUserGroupMembers' => 
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
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要退出用户组的用户ID。此处的用户ID为Quick BI的UserID，而非阿里云的UID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '204627493484****',
          ),
        ),
        1 => 
        array (
          'name' => 'UserGroupIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要退出的用户组ID。

- 支持批量传参，ID之间用半角逗号（,）隔开。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '34fd141d-4598-4093-8c33-8e066dcb****,3d2c23d4-2b41-4af8-a1f5-f6390f32****',
          ),
        ),
      ),
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
                'example' => 'ABBAD906-3925-5D18-B23D-714053AB0AA2',
              ),
              'Result' => 
              array (
                'description' => '返回接口执行结果。取值范围：

- true：执行成功
- false：执行失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Usergroup.NotBelongTo.CurrentOrganization',
            'errorMessage' => 'The usergroup %s does not belong to the current organization.',
          ),
          1 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          3 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          10 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          11 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          12 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          13 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          14 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          15 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          16 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"ABBAD906-3925-5D18-B23D-714053AB0AA2\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteUserGroupMembersResponse>\\n    <RequestId>ABBAD906-3925-5D18-B23D-714053AB0AA2</RequestId>\\n    <Result>true</Result>\\n    <Success>true</Success>\\n</DeleteUserGroupMembersResponse>","errorExample":""}]',
      'title' => '用户批量退出用户组',
      'summary' => '指定用户批量退出用户组。',
    ),
    'WithdrawAllUserGroups' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户ID。此处为Quick BI的UserID，而非阿里云的UID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '46e5374665ba4b679ee22e2a2927****',
          ),
        ),
      ),
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
                'example' => 'D8749D65-E80A-433C-AF1B-CE9C180FF3B4',
              ),
              'Result' => 
              array (
                'description' => '返回接口执行结果。取值范围：

- true：执行成功
- false：执行失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          5 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          9 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          10 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          11 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D8749D65-E80A-433C-AF1B-CE9C180FF3B4\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<WithdrawAllUserGroupsResponse>\\n    <RequestId>D8749D65-E80A-433C-AF1B-CE9C180FF3B4</RequestId>\\n    <Result>true</Result>\\n    <Success>true</Success>\\n</WithdrawAllUserGroupsResponse>","errorExample":""}]',
      'title' => '用户退出所有用户组',
      'summary' => '使用户退出所有用户组，该过程不可逆，请谨慎操作。',
    ),
    'UpdateUserGroup' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'f5eeb52e-d9c2-4a8b-80e3-47ab55c2****',
          ),
        ),
        1 => 
        array (
          'name' => 'UserGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户组名称。

- 格式校验：最大长度255
- 特殊格式校验：中英文数字 _ \\ / | () ] \\[',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'pop0001',
          ),
        ),
        2 => 
        array (
          'name' => 'UserGroupDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户组描述。

- 格式校验：最大长度255
- 特殊格式校验：中英文数字 _ \\ / | () ] \\[',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '描述信息',
          ),
        ),
      ),
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
                'example' => '4AEF8C5C-D5D2-55D3-BB2F-9D3AA1B6F4FA',
              ),
              'Result' => 
              array (
                'description' => '接口是否执行成功。取值范围：

- true：执行成功
- false：执行失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Usergroup.Not.Exist',
            'errorMessage' => 'The user group does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'UserGroup.Remove.RootNode',
            'errorMessage' => 'The root user group cannot be deleted.',
          ),
          2 => 
          array (
            'errorCode' => 'UserGroup.Remove.WithChildren',
            'errorMessage' => 'This user group contains a child user group and cannot be deleted.',
          ),
          3 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          4 => 
          array (
            'errorCode' => 'Duplicate.Name.Error',
            'errorMessage' => 'The name already exists.',
          ),
          5 => 
          array (
            'errorCode' => 'Duplicate.UserGroupName.Error',
            'errorMessage' => 'There is already a user group with the same name %s, please rename it before saving。',
          ),
          6 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          7 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          9 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          10 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          11 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          12 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          13 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          14 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          15 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          16 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          17 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          18 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          19 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          20 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4AEF8C5C-D5D2-55D3-BB2F-9D3AA1B6F4FA\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UpdateUserGroupResponse>\\n    <RequestId>4AEF8C5C-D5D2-55D3-BB2F-9D3AA1B6F4FA</RequestId>\\n    <Result>true</Result>\\n    <Success>true</Success>\\n</UpdateUserGroupResponse>","errorExample":""}]',
      'title' => '更新用户组信息',
      'summary' => '更新组织下指定用户组的信息。',
    ),
    'GetUserGroupInfo' => 
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
      'operationType' => 'read',
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Keyword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户组名称关键字。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '测试用户组',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求 ID。',
                'type' => 'string',
                'example' => 'D7980306-1F08-5A88-9FE7-ECB8B9C4C0F5',
              ),
              'Result' => 
              array (
                'description' => '用户组信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'IdentifiedPath' => 
                    array (
                      'description' => '用户组的目录层级。',
                      'type' => 'string',
                      'example' => '2fe4fbd8-588f-489a-b3e1-e92c7af0****/34fd141d-4598-4093-8c33-8e066dcb****',
                    ),
                    'ParentUsergroupId' => 
                    array (
                      'description' => '父用户组ID。',
                      'type' => 'string',
                      'example' => '2fe4fbd8-588f-489a-b3e1-e92c7af0****',
                    ),
                    'ModifiedTime' => 
                    array (
                      'description' => '用户组最新修改时间。',
                      'type' => 'string',
                      'example' => '2021-03-15 20:36:40',
                    ),
                    'CreateUser' => 
                    array (
                      'description' => '子用户组创建者。此处为Quick BI的UserID，而非阿里云的UID。',
                      'type' => 'string',
                      'example' => '46e5374665ba4b679ee22e2a2927****',
                    ),
                    'UsergroupName' => 
                    array (
                      'description' => '用户组名称。',
                      'type' => 'string',
                      'example' => '测试用户组01',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '用户组创建时间。',
                      'type' => 'string',
                      'example' => '2021-03-15 17:13:55',
                    ),
                    'UsergroupDesc' => 
                    array (
                      'description' => '用户组备注。',
                      'type' => 'string',
                      'example' => '测试描述',
                    ),
                    'UsergroupId' => 
                    array (
                      'description' => '用户组ID。',
                      'type' => 'string',
                      'example' => '34fd141d-4598-4093-8c33-8e066dcb****',
                    ),
                    'ModifyUser' => 
                    array (
                      'description' => '用户组修改者。此处为Quick BI的UserID，而非阿里云的UID。',
                      'type' => 'string',
                      'example' => '46e5374665ba4b679ee22e2a2927****',
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
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          5 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          9 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          10 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          11 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          13 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          14 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          15 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"D7980306-1F08-5A88-9FE7-ECB8B9C4C0F5\\",\\n  \\"Result\\": [\\n    {\\n      \\"IdentifiedPath\\": \\"2fe4fbd8-588f-489a-b3e1-e92c7af0****/34fd141d-4598-4093-8c33-8e066dcb****\\",\\n      \\"ParentUsergroupId\\": \\"2fe4fbd8-588f-489a-b3e1-e92c7af0****\\",\\n      \\"ModifiedTime\\": \\"2021-03-15 20:36:40\\",\\n      \\"CreateUser\\": \\"46e5374665ba4b679ee22e2a2927****\\",\\n      \\"UsergroupName\\": \\"测试用户组01\\",\\n      \\"CreateTime\\": \\"2021-03-15 17:13:55\\",\\n      \\"UsergroupDesc\\": \\"测试描述\\",\\n      \\"UsergroupId\\": \\"34fd141d-4598-4093-8c33-8e066dcb****\\",\\n      \\"ModifyUser\\": \\"46e5374665ba4b679ee22e2a2927****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<GetUserGroupInfoResponse>\\n    <Success>true</Success>\\n    <RequestId>D7980306-1F08-5A88-9FE7-ECB8B9C4C0F5</RequestId>\\n    <Result>\\n        <IdentifiedPath>2fe4fbd8-588f-489a-b3e1-e92c7af0****/34fd141d-4598-4093-8c33-8e066dcb****</IdentifiedPath>\\n        <ParentUsergroupId>2fe4fbd8-588f-489a-b3e1-e92c7af0****</ParentUsergroupId>\\n        <ModifiedTime>2021-03-15 20:36:40</ModifiedTime>\\n        <CreateUser>46e5374665ba4b679ee22e2a2927****</CreateUser>\\n        <UsergroupName>测试用户组01</UsergroupName>\\n        <CreateTime>2021-03-15 17:13:55</CreateTime>\\n        <UsergroupDesc>测试描述</UsergroupDesc>\\n        <UsergroupId>34fd141d-4598-4093-8c33-8e066dcb****</UsergroupId>\\n        <ModifyUser>46e5374665ba4b679ee22e2a2927****</ModifyUser>\\n    </Result>\\n</GetUserGroupInfoResponse>","errorExample":""}]',
      'title' => '根据关键字获取用户组信息',
      'summary' => '根据用户组名称关键字搜索用户组信息。',
    ),
    'ListByUserGroupId' => 
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
          'name' => 'UserGroupIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的用户组ID，批量查询时用半角逗号（,）隔开。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '34fe-***-6dcb,84q9-****-4a274',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D8749D65-E80A-433C-AF1B-CE9C180FF3B4',
              ),
              'Result' => 
              array (
                'description' => '返回用户组查询结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'UserGroupModels' => 
                  array (
                    'description' => '查询到的用户组详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'IdentifiedPath' => 
                        array (
                          'description' => '用户组路径。',
                          'type' => 'string',
                          'example' => '2fe4fbd8-****-af083ea/34fd1-****-dcbc33f',
                        ),
                        'ParentUsergroupId' => 
                        array (
                          'description' => '上级用户组的ID。',
                          'type' => 'string',
                          'example' => '2fe4fbd8-588f-489a-b3e1-e92c7af083ea',
                        ),
                        'ModifiedTime' => 
                        array (
                          'description' => '修改时间。',
                          'type' => 'string',
                          'example' => '2021-03-15 20:36:40',
                        ),
                        'CreateUser' => 
                        array (
                          'description' => '创建者在Quick BI的UserID。',
                          'type' => 'string',
                          'example' => '46e5*******ee22e2a292704c8',
                        ),
                        'UsergroupName' => 
                        array (
                          'description' => '用户组名称。',
                          'type' => 'string',
                          'example' => '测试用户组',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建时间。',
                          'type' => 'string',
                          'example' => '2021-03-15 17:13:55',
                        ),
                        'UsergroupDesc' => 
                        array (
                          'description' => '用户组描述信息。',
                          'type' => 'string',
                          'example' => '描述信息',
                        ),
                        'UsergroupId' => 
                        array (
                          'description' => '用户组ID。',
                          'type' => 'string',
                          'example' => '34fd141d-****-4093-8c33-8e066dcbc33f',
                        ),
                        'ModifyUser' => 
                        array (
                          'description' => '修改者在Quick BI的UserID。',
                          'type' => 'string',
                          'example' => '46e5*******ee22e2a292704c8',
                        ),
                      ),
                    ),
                  ),
                  'FailedUserGroupIds' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '查询失败的用户组ID。',
                      'type' => 'string',
                      'example' => '[]',
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
            'errorCode' => 'Usergroup.Not.Exist',
            'errorMessage' => 'The user group does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          3 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          10 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          11 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          12 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          13 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          14 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          15 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          16 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"D8749D65-E80A-433C-AF1B-CE9C180FF3B4\\",\\n  \\"Result\\": {\\n    \\"UserGroupModels\\": [\\n      {\\n        \\"IdentifiedPath\\": \\"2fe4fbd8-****-af083ea/34fd1-****-dcbc33f\\",\\n        \\"ParentUsergroupId\\": \\"2fe4fbd8-588f-489a-b3e1-e92c7af083ea\\",\\n        \\"ModifiedTime\\": \\"2021-03-15 20:36:40\\",\\n        \\"CreateUser\\": \\"46e5*******ee22e2a292704c8\\",\\n        \\"UsergroupName\\": \\"测试用户组\\",\\n        \\"CreateTime\\": \\"2021-03-15 17:13:55\\",\\n        \\"UsergroupDesc\\": \\"描述信息\\",\\n        \\"UsergroupId\\": \\"34fd141d-****-4093-8c33-8e066dcbc33f\\",\\n        \\"ModifyUser\\": \\"46e5*******ee22e2a292704c8\\"\\n      }\\n    ],\\n    \\"FailedUserGroupIds\\": [\\n      \\"[]\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListByUserGroupIdResponse>\\n    <Success>true</Success>\\n    <RequestId>D8749D65-E80A-433C-AF1B-CE9C180FF3B4</RequestId>\\n    <Result>\\n        <UserGroupModels>\\n            <IdentifiedPath>2fe4fbd8-****-af083ea/34fd1-****-dcbc33f</IdentifiedPath>\\n            <ParentUsergroupId>2fe4fbd8-588f-489a-b3e1-e92c7af083ea</ParentUsergroupId>\\n            <ModifiedTime>2021-03-15 20:36:40</ModifiedTime>\\n            <CreateUser>46e5*******ee22e2a292704c8</CreateUser>\\n            <UsergroupName>测试用户组</UsergroupName>\\n            <CreateTime>2021-03-15 17:13:55</CreateTime>\\n            <UsergroupDesc>描述信息</UsergroupDesc>\\n            <UsergroupId>34fd141d-****-4093-8c33-8e066dcbc33f</UsergroupId>\\n            <ModifyUser>46e5*******ee22e2a292704c8</ModifyUser>\\n        </UserGroupModels>\\n        <FailedUserGroupIds>[]</FailedUserGroupIds>\\n    </Result>\\n</ListByUserGroupIdResponse>","errorExample":""}]',
      'title' => '批量查询用户组',
      'summary' => '根据用户组ID批量查询用户组信息。',
    ),
    'ListUserGroupsByUserId' => 
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
      'operationType' => 'read',
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户ID。此处为Quick BI的UserID，而非阿里云的UID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '46e5374665ba4b679ee22e2a2927****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E2440604-3059-561A-AD68-DEDBC870EB2B',
              ),
              'Result' => 
              array (
                'description' => '用户组信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'IdentifiedPath' => 
                    array (
                      'description' => '用户组的目录层级。',
                      'type' => 'string',
                      'example' => '2fe4fbd8-588f-489a-b3e1-e92c7af0****/3d2c23d4-2b41-4af8-a1f5-f6390f32****/f5eeb52e-d9c2-4a8b-80e3-47ab55c2****',
                    ),
                    'ParentUsergroupId' => 
                    array (
                      'description' => '用户组ID。',
                      'type' => 'string',
                      'example' => '2fe4fbd8-588f-489a-b3e1-e92c7af0****',
                    ),
                    'ModifiedTime' => 
                    array (
                      'description' => '用户组最新修改时间。',
                      'type' => 'string',
                      'example' => '2021-03-15 20:36:40',
                    ),
                    'CreateUser' => 
                    array (
                      'description' => '用户组创建者。此处为Quick BI的UserID，而非阿里云的UID。',
                      'type' => 'string',
                      'example' => '46e5374665ba4b679ee22e2a2927****',
                    ),
                    'UsergroupName' => 
                    array (
                      'description' => '用户组名称。',
                      'type' => 'string',
                      'example' => '测试用户组',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '用户组创建时间。',
                      'type' => 'string',
                      'example' => '2021-03-15 17:13:55',
                    ),
                    'UsergroupDesc' => 
                    array (
                      'description' => '用户组备注。',
                      'type' => 'string',
                      'example' => '备注',
                    ),
                    'UsergroupId' => 
                    array (
                      'description' => '用户组ID。',
                      'type' => 'string',
                      'example' => '34fd141d-4598-4093-8c33-8e066dcb****',
                    ),
                    'ModifyUser' => 
                    array (
                      'description' => '用户组修改者。此处为Quick BI的UserID，而非阿里云的UID。',
                      'type' => 'string',
                      'example' => '46e5374665ba4b679ee22e2a2927****',
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
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          5 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          9 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          10 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          11 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          13 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          14 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          15 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"E2440604-3059-561A-AD68-DEDBC870EB2B\\",\\n  \\"Result\\": [\\n    {\\n      \\"IdentifiedPath\\": \\"2fe4fbd8-588f-489a-b3e1-e92c7af0****/3d2c23d4-2b41-4af8-a1f5-f6390f32****/f5eeb52e-d9c2-4a8b-80e3-47ab55c2****\\",\\n      \\"ParentUsergroupId\\": \\"2fe4fbd8-588f-489a-b3e1-e92c7af0****\\",\\n      \\"ModifiedTime\\": \\"2021-03-15 20:36:40\\",\\n      \\"CreateUser\\": \\"46e5374665ba4b679ee22e2a2927****\\",\\n      \\"UsergroupName\\": \\"测试用户组\\",\\n      \\"CreateTime\\": \\"2021-03-15 17:13:55\\",\\n      \\"UsergroupDesc\\": \\"备注\\",\\n      \\"UsergroupId\\": \\"34fd141d-4598-4093-8c33-8e066dcb****\\",\\n      \\"ModifyUser\\": \\"46e5374665ba4b679ee22e2a2927****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListUserGroupsByUserIdResponse>\\n    <Success>true</Success>\\n    <RequestId>E2440604-3059-561A-AD68-DEDBC870EB2B</RequestId>\\n    <Result>\\n        <IdentifiedPath>2fe4fbd8-588f-489a-b3e1-e92c7af0****/3d2c23d4-2b41-4af8-a1f5-f6390f32****/f5eeb52e-d9c2-4a8b-80e3-47ab55c2****</IdentifiedPath>\\n        <ParentUsergroupId>2fe4fbd8-588f-489a-b3e1-e92c7af0****</ParentUsergroupId>\\n        <ModifiedTime>2021-03-15 20:36:40</ModifiedTime>\\n        <CreateUser>46e5374665ba4b679ee22e2a2927****</CreateUser>\\n        <UsergroupName>测试用户组</UsergroupName>\\n        <CreateTime>2021-03-15 17:13:55</CreateTime>\\n        <UsergroupDesc>备注</UsergroupDesc>\\n        <UsergroupId>34fd141d-4598-4093-8c33-8e066dcb****</UsergroupId>\\n        <ModifyUser>46e5374665ba4b679ee22e2a2927****</ModifyUser>\\n    </Result>\\n</ListUserGroupsByUserIdResponse>","errorExample":""}]',
      'title' => '查询用户所属的用户组信息列表',
      'summary' => '根据用户的UserID，查询该用户所属的所有用户组信息。',
    ),
    'QueryUserGroupListByParentId' => 
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
          'name' => 'ParentUserGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '父用户组ID。

- 当输入父用户组ID时，可以获取该ID下的子用户组信息。
- 当输入-1时，可以获取根目录下的子用户组信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '3d2c23d4-2b41-4af8-a1f5-f6390f32****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '72B19D61-B37A-5C7A-9389-0856CD7935B3',
              ),
              'Result' => 
              array (
                'description' => '子用户组信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'IdentifiedPath' => 
                    array (
                      'description' => '子用户组的目录层级。',
                      'type' => 'string',
                      'example' => '2fe4fbd8-588f-489a-b3e1-e92c7af0****/3d2c23d4-2b41-4af8-a1f5-f6390f32****/f5eeb52e-d9c2-4a8b-80e3-47ab55c2****',
                    ),
                    'ModifiedTime' => 
                    array (
                      'description' => '子用户组最新修改时间。',
                      'type' => 'string',
                      'example' => '2020-11-16 15:49:08',
                    ),
                    'CreateUser' => 
                    array (
                      'description' => '子用户组创建者。此处为Quick BI的UserID，而非阿里云的UID。',
                      'type' => 'string',
                      'example' => '136516262323****',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '子用户组创建时间。',
                      'type' => 'string',
                      'example' => '2020-10-30 10:03:09',
                    ),
                    'UserGroupId' => 
                    array (
                      'description' => '子用户组ID。',
                      'type' => 'string',
                      'example' => 'f5eeb52e-d9c2-4a8b-80e3-47ab55c2****',
                    ),
                    'UserGroupName' => 
                    array (
                      'description' => '子用户组名称。',
                      'type' => 'string',
                      'example' => 'popapi测试分组',
                    ),
                    'ModifyUser' => 
                    array (
                      'description' => '子用户组修改者。此处为Quick BI的UserID，而非阿里云的UID。',
                      'type' => 'string',
                      'example' => '136516262323****',
                    ),
                    'ParentUserGroupId' => 
                    array (
                      'description' => '父用户组ID。',
                      'type' => 'string',
                      'example' => '3d2c23d4-2b41-4af8-a1f5-f6390f32****',
                    ),
                    'UserGroupDescription' => 
                    array (
                      'description' => '子用户组备注。',
                      'type' => 'string',
                      'example' => '用来测试的用户组',
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
            'errorCode' => 'UserGroup.NotIn.Organization',
            'errorMessage' => 'The user group is not in the current organization.',
          ),
          1 => 
          array (
            'errorCode' => 'Usergroup.Not.Exist',
            'errorMessage' => 'The user group does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          3 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          4 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          6 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          10 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          11 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          12 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          13 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          14 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          15 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          16 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          17 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"72B19D61-B37A-5C7A-9389-0856CD7935B3\\",\\n  \\"Result\\": [\\n    {\\n      \\"IdentifiedPath\\": \\"2fe4fbd8-588f-489a-b3e1-e92c7af0****/3d2c23d4-2b41-4af8-a1f5-f6390f32****/f5eeb52e-d9c2-4a8b-80e3-47ab55c2****\\",\\n      \\"ModifiedTime\\": \\"2020-11-16 15:49:08\\",\\n      \\"CreateUser\\": \\"136516262323****\\",\\n      \\"CreateTime\\": \\"2020-10-30 10:03:09\\",\\n      \\"UserGroupId\\": \\"f5eeb52e-d9c2-4a8b-80e3-47ab55c2****\\",\\n      \\"UserGroupName\\": \\"popapi测试分组\\",\\n      \\"ModifyUser\\": \\"136516262323****\\",\\n      \\"ParentUserGroupId\\": \\"3d2c23d4-2b41-4af8-a1f5-f6390f32****\\",\\n      \\"UserGroupDescription\\": \\"用来测试的用户组\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<QueryUserGroupListByParentIdResponse>\\n    <Success>true</Success>\\n    <RequestId>72B19D61-B37A-5C7A-9389-0856CD7935B3</RequestId>\\n    <Result>\\n        <IdentifiedPath>2fe4fbd8-588f-489a-b3e1-e92c7af0****/3d2c23d4-2b41-4af8-a1f5-f6390f32****/f5eeb52e-d9c2-4a8b-80e3-47ab55c2****</IdentifiedPath>\\n        <ModifiedTime>2020-11-16 15:49:08</ModifiedTime>\\n        <CreateUser>136516262323****</CreateUser>\\n        <CreateTime>2020-10-30 10:03:09</CreateTime>\\n        <UserGroupId>f5eeb52e-d9c2-4a8b-80e3-47ab55c2****</UserGroupId>\\n        <UserGroupName>popapi测试分组</UserGroupName>\\n        <ModifyUser>136516262323****</ModifyUser>\\n        <ParentUserGroupId>3d2c23d4-2b41-4af8-a1f5-f6390f32****</ParentUserGroupId>\\n        <UserGroupDescription>用来测试的用户组</UserGroupDescription>\\n    </Result>\\n</QueryUserGroupListByParentIdResponse>","errorExample":""}]',
      'title' => '查询父用户组下的子用户组列表',
      'summary' => '获取指定父用户组下的子用户组信息。',
    ),
    'QueryUserGroupMember' => 
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
          'name' => 'UserGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2fe4fbd8-588f-489a-b3e1-e92c7af0****',
          ),
        ),
        1 => 
        array (
          'name' => 'Keyword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户组成员用户名或昵称的关键字。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '小刘',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '48C930FF-DFCF-5986-902B-E24C202E2443',
              ),
              'Result' => 
              array (
                'description' => '用户组成员列表的请求结果。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ParentUserGroupName' => 
                    array (
                      'description' => '所属用户组名称。',
                      'type' => 'string',
                      'example' => '财务组',
                    ),
                    'IsUserGroup' => 
                    array (
                      'description' => '是否为用户组。取值范围：

- true：用户组
- false：用户',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'Name' => 
                    array (
                      'description' => '用户组名称或用户组成员昵称 。',
                      'type' => 'string',
                      'example' => '小刘的测试用户组',
                    ),
                    'ParentUserGroupId' => 
                    array (
                      'description' => '所属用户组ID。',
                      'type' => 'string',
                      'example' => '2fe4fbd8-588f-489a-b3e1-e92c7af0****',
                    ),
                    'Id' => 
                    array (
                      'description' => '用户组ID或用户组成员ID。',
                      'type' => 'string',
                      'example' => '3d2c23d4-2b41-4af8-a1f5-f6390f32****',
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
            'errorCode' => 'Usergroup.Not.Exist',
            'errorMessage' => 'The user group does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          3 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          10 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          11 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          12 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          13 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          14 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          15 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          16 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"48C930FF-DFCF-5986-902B-E24C202E2443\\",\\n  \\"Result\\": [\\n    {\\n      \\"ParentUserGroupName\\": \\"财务组\\",\\n      \\"IsUserGroup\\": true,\\n      \\"Name\\": \\"小刘的测试用户组\\",\\n      \\"ParentUserGroupId\\": \\"2fe4fbd8-588f-489a-b3e1-e92c7af0****\\",\\n      \\"Id\\": \\"3d2c23d4-2b41-4af8-a1f5-f6390f32****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<QueryUserGroupMemberResponse>\\n    <Success>true</Success>\\n    <RequestId>48C930FF-DFCF-5986-902B-E24C202E2443</RequestId>\\n    <Result>\\n        <ParentUserGroupName>财务组</ParentUserGroupName>\\n        <IsUserGroup>true</IsUserGroup>\\n        <Name>小刘的测试用户组</Name>\\n        <ParentUserGroupId>2fe4fbd8-588f-489a-b3e1-e92c7af0****</ParentUserGroupId>\\n        <Id>3d2c23d4-2b41-4af8-a1f5-f6390f32****</Id>\\n    </Result>\\n</QueryUserGroupMemberResponse>","errorExample":""}]',
      'title' => '查询用户组成员列表',
      'summary' => '获取用户组下的成员列表信息。',
    ),
    'ListWorkspaceRoleUsers' => 
    array (
      'summary' => '获取指定空间角色下的用户列表。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RoleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '空间角色ID，包括预置角色和自定义角色：

- 25：空间管理员（预置角色）
- 26：开发者（预置角色）
- 27：分析者（预置角色）
- 30：阅览者（预置角色）
- 自定义角色：自定义角色对应的角色ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '25',
          ),
        ),
        1 => 
        array (
          'name' => 'WorkspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '726bee5a-****-43e1-9a8e-b550f0120f35',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时的当前页：

- 起始值：1
- 默认值：1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时的每页行数：

- 默认值：10
- 最大值：1000',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'Keyword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户昵称的关键字。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '测试pop用户',
          ),
        ),
      ),
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
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'description' => '返回空间角色下的用户列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalNum' => 
                  array (
                    'description' => '总行数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'TotalPages' => 
                  array (
                    'description' => '总页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageNum' => 
                  array (
                    'description' => '	
页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '请求接口时设置的每页行数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'Data' => 
                  array (
                    'description' => '用户列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '用户详情。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'UserId' => 
                        array (
                          'description' => '组织成员在Quick BI的UserID。',
                          'type' => 'string',
                          'example' => 'b5d8fd9348cc4327****afb604
',
                        ),
                        'NickName' => 
                        array (
                          'description' => '组织成员的昵称。',
                          'type' => 'string',
                          'example' => '测试用户',
                        ),
                        'WorkspaceName' => 
                        array (
                          'description' => '工作空间名称。',
                          'type' => 'string',
                          'example' => '测试空间',
                        ),
                        'WorkspaceId' => 
                        array (
                          'description' => '工作空间ID。',
                          'type' => 'string',
                          'example' => '7350a155-0e94-4c6c-8620-57bbec38****',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：
- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'Invalid.Workspace',
            'errorMessage' => 'The workspace is not owned by the organization.',
          ),
          2 => 
          array (
            'errorCode' => 'User.Role.NotExist',
            'errorMessage' => 'User role not exist: %s.',
          ),
          3 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          4 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          6 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          10 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          11 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          12 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          13 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          14 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          15 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          16 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          17 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": {\\n    \\"TotalNum\\": 1,\\n    \\"TotalPages\\": 1,\\n    \\"PageNum\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Data\\": [\\n      {\\n        \\"UserId\\": \\"b5d8fd9348cc4327****afb604\\\\n\\",\\n        \\"NickName\\": \\"测试用户\\",\\n        \\"WorkspaceName\\": \\"测试空间\\",\\n        \\"WorkspaceId\\": \\"7350a155-0e94-4c6c-8620-57bbec38****\\"\\n      }\\n    ]\\n  },\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '获取指定空间角色下的用户列表',
    ),
    'QueryWorkspaceRoleConfig' => 
    array (
      'summary' => '获取指定空间角色的配置。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RoleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '空间角色ID，包括预置角色和自定义角色：

- 25：空间管理员（预置角色）
- 26：开发者（预置角色）
- 27：分析者（预置角色）
- 30：阅览者（预置角色）
- 自定义角色：自定义角色对应的角色ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '25',
          ),
        ),
      ),
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
                'example' => 'D8749D65-E80A-433C-AF1B-CE9C180FF3B4',
              ),
              'Result' => 
              array (
                'description' => '返回接口查询结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'RoleId' => 
                  array (
                    'description' => '空间角色ID，包括预置角色和自定义角色：

- 25：空间管理员（预置角色）
- 26：开发者（预置角色）
- 27：分析者（预置角色）
- 30：阅览者（预置角色）
- 自定义角色：自定义角色对应的角色ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '25',
                  ),
                  'RoleName' => 
                  array (
                    'description' => '角色名称。',
                    'type' => 'string',
                    'example' => '空间管理员',
                  ),
                  'AuthConfigList' => 
                  array (
                    'description' => '角色的权限配置列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '具体的权限配置。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AuthKey' => 
                        array (
                          'description' => '权限类型：
- portal_create：数据门户
- dashboard_create：仪表板
- report_create：电子表格
- screen_create：数据大屏
- analysis：即席分析
- offline_download：自助取数
- data_form：数据填报
- quick_etl：数据准备
- cube：数据集
- datasource：数据源',
                          'type' => 'string',
                          'example' => 'portal_create',
                        ),
                        'ActionAuthKeys' => 
                        array (
                          'description' => '权限范围。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '具体的权限：
- edit：新建
- use：使用
- list：展示列表',
                            'type' => 'string',
                            'example' => 'edit',
                          ),
                        ),
                      ),
                    ),
                  ),
                  'IsSystemRole' => 
                  array (
                    'description' => '是否是预置角色。取值范围：

- true：是
- false：否',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'User.Role.NotExist',
            'errorMessage' => 'User role not exist: %s.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          3 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          10 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          11 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          12 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          13 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          14 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          15 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          16 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D8749D65-E80A-433C-AF1B-CE9C180FF3B4\\",\\n  \\"Result\\": {\\n    \\"RoleId\\": 25,\\n    \\"RoleName\\": \\"空间管理员\\",\\n    \\"AuthConfigList\\": [\\n      {\\n        \\"AuthKey\\": \\"portal_create\\",\\n        \\"ActionAuthKeys\\": [\\n          \\"edit\\"\\n        ]\\n      }\\n    ],\\n    \\"IsSystemRole\\": true\\n  },\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '获取指定空间角色的配置信息',
    ),
    'QueryOrganizationRoleConfig' => 
    array (
      'summary' => '获取指定组织角色的配置',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RoleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '组织角色ID，包括预置角色和自定义角色：

- 组织管理员（预置角色）：111111111
- 权限管理员（预置角色）：111111112
- 普通用户（预置角色）：111111113
- 自定义角色：自定义角色对应的角色ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '111111111',
          ),
        ),
      ),
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
                'example' => 'BCE45E6D-9304-4F94-86BB-5A772B1615FF',
              ),
              'Result' => 
              array (
                'description' => '组织角色配置详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'RoleId' => 
                  array (
                    'description' => '组织角色ID，包括预置角色和自定义角色：

- 组织管理员（预置角色）：111111111
- 权限管理员（预置角色）：111111112
- 普通用户（预置角色）：111111113
- 自定义角色：自定义角色对应的角色ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '111111111',
                  ),
                  'RoleName' => 
                  array (
                    'description' => '角色名称。',
                    'type' => 'string',
                    'example' => '组织管理员',
                  ),
                  'AuthConfigList' => 
                  array (
                    'description' => '角色的权限配置列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '具体的权限配置。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AuthKey' => 
                        array (
                          'description' => '权限类型：
- quick_monitor：指标监控
- subscription：订阅管理
- offline_download：自助取数
- resource_package：资源包管理
- organization_ask：组织识别码（AK/SK）
- developer_openapi：开放API
- data_service：数据服务
- admin_authorize3rd：嵌入分析
- component_manage：自定义组件
- template_open：自定义模版
- custom_driver：自定义驱动（仅独立部署支持）
- open_platform_custom_plugin：自定义插件（仅独立部署支持）
- enterprise_safety：企业安全',
                          'type' => 'string',
                          'example' => 'quick_monitor',
                        ),
                      ),
                    ),
                  ),
                  'IsSystemRole' => 
                  array (
                    'description' => '是否是预置角色。取值范围：

- true：是
- false：否',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'User.Role.NotExist',
            'errorMessage' => 'User role not exist: %s.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          3 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          10 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          11 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          12 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          13 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          14 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          15 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          16 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BCE45E6D-9304-4F94-86BB-5A772B1615FF\\",\\n  \\"Result\\": {\\n    \\"RoleId\\": 111111111,\\n    \\"RoleName\\": \\"组织管理员\\",\\n    \\"AuthConfigList\\": [\\n      {\\n        \\"AuthKey\\": \\"quick_monitor\\"\\n      }\\n    ],\\n    \\"IsSystemRole\\": true\\n  },\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '获取指定组织角色的配置信息',
    ),
    'ListWorkspaceRoles' => 
    array (
      'summary' => '获取空间角色列表。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WorkspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '95296e95-ca89-4c7d-8af9-dedf0ad0****',
          ),
        ),
      ),
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
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'description' => '空间角色列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RoleId' => 
                    array (
                      'description' => '空间角色ID，包括预置角色和自定义角色：

- 25：空间管理员（预置角色）
- 26：开发者（预置角色）
- 27：分析者（预置角色）
- 30：阅览者（预置角色）
- 自定义角色：自定义角色对应的角色ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '25',
                    ),
                    'RoleName' => 
                    array (
                      'description' => '角色名称。',
                      'type' => 'string',
                      'example' => '空间管理员',
                    ),
                    'AuthConfigList' => 
                    array (
                      'description' => '角色的权限配置列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '具体的权限配置。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'AuthKey' => 
                          array (
                            'description' => '权限类型：
- portal_create：数据门户
- dashboard_create：仪表板
- report_create：电子表格
- screen_create：数据大屏
- analysis：即席分析
- offline_download：自助取数
- data_form：数据填报
- quick_etl：数据准备
- cube：数据集
- datasource：数据源',
                            'type' => 'string',
                            'example' => 'portal_create',
                          ),
                          'ActionAuthKeys' => 
                          array (
                            'description' => '权限范围。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '具体的权限：
- edit：新建
- use：使用
- list：展示列表',
                              'type' => 'string',
                              'example' => 'edit',
                            ),
                          ),
                        ),
                      ),
                    ),
                    'IsSystemRole' => 
                    array (
                      'description' => '是否是预置角色。取值范围：

- true：是
- false：否',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                  ),
                ),
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功

- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'Invalid.Workspace',
            'errorMessage' => 'The workspace is not owned by the organization.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          3 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          10 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          11 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          12 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          13 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          14 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          15 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          16 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": [\\n    {\\n      \\"RoleId\\": 25,\\n      \\"RoleName\\": \\"空间管理员\\",\\n      \\"AuthConfigList\\": [\\n        {\\n          \\"AuthKey\\": \\"portal_create\\",\\n          \\"ActionAuthKeys\\": [\\n            \\"edit\\"\\n          ]\\n        }\\n      ],\\n      \\"IsSystemRole\\": true\\n    }\\n  ],\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '获取空间角色列表',
    ),
    'ListOrganizationRoles' => 
    array (
      'summary' => '获取组织角色列表。',
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
                'example' => '7AAB95D7-2E11-4FE2-94BC-858E4FC0C976',
              ),
              'Result' => 
              array (
                'description' => '返回组织角色列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '角色配置详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RoleId' => 
                    array (
                      'description' => '角色ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '111111111',
                    ),
                    'RoleName' => 
                    array (
                      'description' => '角色名称。',
                      'type' => 'string',
                      'example' => '组织管理员',
                    ),
                    'AuthConfigList' => 
                    array (
                      'description' => '角色的权限配置列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '具体的权限配置。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'AuthKey' => 
                          array (
                            'description' => '权限类型：
- quick_monitor：指标监控
- subscription：订阅管理
- offline_download：自助取数
- resource_package：资源包管理
- organization_ask：组织识别码（AK/SK）
- developer_openapi：开放API
- data_service：数据服务
- admin_authorize3rd：嵌入分析
- component_manage：自定义组件
- template_open：自定义模版
- custom_driver：自定义驱动（仅独立部署支持）
- open_platform_custom_plugin：自定义插件（仅独立部署支持）
- enterprise_safety：企业安全',
                            'type' => 'string',
                            'example' => 'enterprise_safety',
                          ),
                        ),
                      ),
                    ),
                    'IsSystemRole' => 
                    array (
                      'description' => '是否是预置角色。取值范围：

- true：是
- false：否',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                  ),
                ),
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：
- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          5 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          9 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          10 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          11 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          13 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          14 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          15 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7AAB95D7-2E11-4FE2-94BC-858E4FC0C976\\",\\n  \\"Result\\": [\\n    {\\n      \\"RoleId\\": 111111111,\\n      \\"RoleName\\": \\"组织管理员\\",\\n      \\"AuthConfigList\\": [\\n        {\\n          \\"AuthKey\\": \\"enterprise_safety\\"\\n        }\\n      ],\\n      \\"IsSystemRole\\": true\\n    }\\n  ],\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '获取组织角色列表',
    ),
    'ListOrganizationRoleUsers' => 
    array (
      'summary' => '获取指定组织角色下的用户列表。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RoleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '组织角色ID，包括预置角色和自定义角色：

- 组织管理员（预置角色）：111111111
- 权限管理员（预置角色）：111111112
- 普通用户（预置角色）：111111113
- 自定义角色：自定义角色对应的角色ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '111111111',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。

- 默认值1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页行数。
- 默认值10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'Keyword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '组织成员昵称的关键字。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '小刘',
          ),
        ),
      ),
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
                'example' => 'BCE45E6D-9304-4F94-86BB-5A772B1615FF',
              ),
              'Result' => 
              array (
                'description' => '返回组织角色下的用户列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalNum' => 
                  array (
                    'description' => '总行数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'TotalPages' => 
                  array (
                    'description' => '总页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageNum' => 
                  array (
                    'description' => '页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '请求接口时设置的每页行数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Data' => 
                  array (
                    'description' => '用户列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '用户详情。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'UserId' => 
                        array (
                          'description' => '组织成员在Quick BI的UserID。',
                          'type' => 'string',
                          'example' => 'b5d8fd9348cc4327****afb604',
                        ),
                        'NickName' => 
                        array (
                          'description' => '组织成员的昵称。',
                          'type' => 'string',
                          'example' => '测试用户',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：
- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'User.Role.NotExist',
            'errorMessage' => 'User role not exist: %s.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          3 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          10 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          11 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          12 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          13 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          14 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          15 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          16 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BCE45E6D-9304-4F94-86BB-5A772B1615FF\\",\\n  \\"Result\\": {\\n    \\"TotalNum\\": 10,\\n    \\"TotalPages\\": 1,\\n    \\"PageNum\\": 10,\\n    \\"PageSize\\": 1,\\n    \\"Data\\": [\\n      {\\n        \\"UserId\\": \\"b5d8fd9348cc4327****afb604\\",\\n        \\"NickName\\": \\"测试用户\\"\\n      }\\n    ]\\n  },\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '获取指定组织角色下的用户列表',
    ),
    'AddShareReport' => 
    array (
      'summary' => '添加数据作品的一个分享配置。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WorksId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分享作品的ID。这里的作品包括数据门户，仪表板，电子表格，自助取数。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '6b407e50-e774-406b-9956-da2425c2****',
          ),
        ),
        1 => 
        array (
          'name' => 'ShareToId',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '被分享者的ID，可能是Quick BI的用户ID，也可能是用户组ID。

- ShareToType=0（用户）时，ShareTo为用户ID。
- ShareToType=1（用户组）时，ShareTo为用户组ID。
- ShareToType=2（组织）时，ShareTo为组织ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'de4bc5f9429141cc8091cdd1c15b****',
          ),
        ),
        2 => 
        array (
          'name' => 'ShareToType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分享类型。取值范围：

- 0：用户
- 1：用户组
- 2：组织',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '2',
            'minimum' => '0',
            'example' => '0',
          ),
        ),
        3 => 
        array (
          'name' => 'ExpireDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分享的有效期限，格式为毫秒级时间戳 。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1608202110838',
          ),
        ),
        4 => 
        array (
          'name' => 'AuthPoint',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权类型。取值范围：

- 1：仅查看
- 3：查看并导出',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '3',
            'minimum' => '1',
            'example' => '3',
            'enum' => 
            array (
              0 => '1',
              1 => '3',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '05739b8e-3de0-4204-9669-7f04f02522b9',
              ),
              'Result' => 
              array (
                'description' => '返回接口执行结果。取值范围：

- true：执行成功
- false：执行失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Report.NotExist.Error',
            'errorMessage' => 'This work does not exist. It may have been deleted. Work ID is %s.',
          ),
          1 => 
          array (
            'errorCode' => 'Workspace.Not.Exist',
            'errorMessage' => 'The group workspace does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'Workspace.NotIn.Organization',
            'errorMessage' => 'The workspace is not owned by the organization.',
          ),
          3 => 
          array (
            'errorCode' => 'Workspace.Share.Forbidden',
            'errorMessage' => 'Content in the current group workspace cannot be shared.',
          ),
          4 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'Workspace.OutsideShare.Forbidden',
            'errorMessage' => 'Content in the current group workspace cannot be shared with another organization.',
          ),
          6 => 
          array (
            'errorCode' => 'Usergroup.Not.Exist',
            'errorMessage' => 'The user group does not exist.',
          ),
          7 => 
          array (
            'errorCode' => 'UserGroup.NotIn.Organization',
            'errorMessage' => 'The user group is not in the current organization.',
          ),
          8 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          9 => 
          array (
            'errorCode' => 'Share.ExpireDate.Error',
            'errorMessage' => 'The expire date is illegal.',
          ),
          10 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          11 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          12 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          13 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          14 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          15 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          16 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          17 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          18 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          19 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          20 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          21 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          22 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          23 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"05739b8e-3de0-4204-9669-7f04f02522b9\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<AddShareReportResponse>\\n    <RequestId>05739b8e-3de0-4204-9669-7f04f02522b9</RequestId>\\n    <Result>true</Result>\\n    <Success>true</Success>\\n</AddShareReportResponse>","errorExample":""}]',
      'title' => '添加数据作品分享配置',
    ),
    'CancelReportShare' => 
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ReportId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '作品的ID。这里的作品包括数据门户，仪表板，电子表格，自助取数。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '6b407e50-e774-406b-9956-da2425c2****',
          ),
        ),
        1 => 
        array (
          'name' => 'ShareToIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '被分享者的ID，可能是Quick BI的用户ID，也可能是用户组ID。

- ShareToType=0（用户）时，ShareTo为用户ID。
- ShareToType=1（用户组）时，ShareTo为用户组ID。
- ShareToType=2（组织）时，ShareTo为组织ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'de4bc5f9429141cc8091cdd1c15b****',
          ),
        ),
        2 => 
        array (
          'name' => 'ShareToType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '删除方式。取值范围：

- 0：按用户删除
- 1：按用户组删除
- 2：按组织删除',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '0',
          ),
        ),
      ),
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
                'example' => 'DC4E1E63-B337-44F8-8C22-6F00DF67E2C3',
              ),
              'Result' => 
              array (
                'description' => '返回接口执行结果。取值范围：

- true：执行成功
- false：执行失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Report.NotExist.Error',
            'errorMessage' => 'This work does not exist. It may have been deleted. Work ID is %s.',
          ),
          1 => 
          array (
            'errorCode' => 'Resource.NotBelongTo.CurrentOrganization',
            'errorMessage' => 'The resource does not belong to the current organization.',
          ),
          2 => 
          array (
            'errorCode' => 'User.NotBelongTo.CurrentOrganization',
            'errorMessage' => 'The user %s does not belong to the current organization.',
          ),
          3 => 
          array (
            'errorCode' => 'Usergroup.NotBelongTo.CurrentOrganization',
            'errorMessage' => 'The usergroup %s does not belong to the current organization.',
          ),
          4 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          5 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          6 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          8 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          10 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          11 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          13 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          14 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          15 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          16 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          17 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          18 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          19 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DC4E1E63-B337-44F8-8C22-6F00DF67E2C3\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CancelReportShareResponse>\\n    <RequestId>DC4E1E63-B337-44F8-8C22-6F00DF67E2C3</RequestId>\\n    <Result>true</Result>\\n    <Success>true</Success>\\n</CancelReportShareResponse>","errorExample":""}]',
      'title' => '删除数据作品的分享授权',
      'summary' => '删除数据作品的一个分享授权。',
    ),
    'QuerySharesToUserList' => 
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
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户ID。此处的用户ID为Quick BI的UserID，而非阿里云的UID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '46e53****5ba4b679ee22e2a2927****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DC4E1E63-B337-44F8-8C22-6F00DF67E2C3',
              ),
              'Result' => 
              array (
                'description' => '返回授权给用户的作品列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '报表的发布状态。取值范围：

- 0：未发布
- 1：已发布
- 2：已修改未发布
- 3：已下线',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'ThirdPartAuthFlag' => 
                    array (
                      'description' => '第三方嵌入状态。取值范围：

- 0：未开通嵌入
- 1：已开通嵌入',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'WorksId' => 
                    array (
                      'description' => '报表ID。',
                      'type' => 'string',
                      'example' => '97f7f4c1-543a-4069-8e8d-a56cfcd6****',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间的毫秒级时间戳。',
                      'type' => 'string',
                      'example' => '1530078690000',
                    ),
                    'WorkType' => 
                    array (
                      'description' => '作品类型。取值范围：

- DATAPRODUCT：数据门户
- PAGE：仪表板
- FULLPAGE：全屏仪表板
- REPORT：电子表格
- dashboardOfflineQuery：自助取数',
                      'type' => 'string',
                      'example' => 'DATAFORM',
                    ),
                    'OwnerName' => 
                    array (
                      'description' => '作品所有者的阿里云账户名。',
                      'type' => 'string',
                      'example' => 'w****@aliyun.com',
                    ),
                    'WorkspaceName' => 
                    array (
                      'description' => '报表所在工作空间的名称。',
                      'type' => 'string',
                      'example' => '专业版回归',
                    ),
                    'OwnerId' => 
                    array (
                      'description' => '作品所有者在Quickbi 的UserID。',
                      'type' => 'string',
                      'example' => '74f5527216d14e9892245320ebf2****',
                    ),
                    'ModifyName' => 
                    array (
                      'description' => '修改者的阿里云账户名。',
                      'type' => 'string',
                      'example' => '13855265****@163.com',
                    ),
                    'WorkspaceId' => 
                    array (
                      'description' => '报表所在工作空间的ID。',
                      'type' => 'string',
                      'example' => 'c5f86ad2-ef53-4c51-8720-162ecfdb****',
                    ),
                    'SecurityLevel' => 
                    array (
                      'description' => '作品协同授权的安全策略。取值：
- 0：私密
- 12：授权指定成员
- 1或11：授权所有空间成员

>- 若您使用旧版权限，则返回值为1。
- 若您使用新版权限，则返回值为11。',
                      'type' => 'string',
                      'example' => '0',
                    ),
                    'Description' => 
                    array (
                      'description' => '作品备注。',
                      'type' => 'string',
                      'example' => '测试报表的描述',
                    ),
                    'WorkName' => 
                    array (
                      'description' => '报表名称。',
                      'type' => 'string',
                      'example' => '测试报表',
                    ),
                    'ModifyTime' => 
                    array (
                      'description' => '修改时间的毫秒级时间戳。',
                      'type' => 'string',
                      'example' => '1530078690000',
                    ),
                    'Directory' => 
                    array (
                      'description' => '作品所在的目录信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'PathId' => 
                        array (
                          'description' => '资源所在目录的路径ID。',
                          'type' => 'string',
                          'example' => '66ffe22b-83be-47fd-b49d-9ca58d29****/f7f6e22b-83be-47fd-b49d-9ca686a9****',
                        ),
                        'PathName' => 
                        array (
                          'description' => '资源所在目录的路径名称。',
                          'type' => 'string',
                          'example' => '一级目录/二级目录',
                        ),
                        'Name' => 
                        array (
                          'description' => '资源名称。',
                          'type' => 'string',
                          'example' => '图表报表',
                        ),
                        'Id' => 
                        array (
                          'description' => '资源所在的目录ID。',
                          'type' => 'string',
                          'example' => 'f7f6e22b-83be-47fd-b49d-9ca686a9****',
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
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          5 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          9 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          10 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          11 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          13 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          14 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          15 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"DC4E1E63-B337-44F8-8C22-6F00DF67E2C3\\",\\n  \\"Result\\": [\\n    {\\n      \\"Status\\": 1,\\n      \\"ThirdPartAuthFlag\\": 0,\\n      \\"WorksId\\": \\"97f7f4c1-543a-4069-8e8d-a56cfcd6****\\",\\n      \\"CreateTime\\": \\"1530078690000\\",\\n      \\"WorkType\\": \\"DATAFORM\\",\\n      \\"OwnerName\\": \\"w****@aliyun.com\\",\\n      \\"WorkspaceName\\": \\"专业版回归\\",\\n      \\"OwnerId\\": \\"74f5527216d14e9892245320ebf2****\\",\\n      \\"ModifyName\\": \\"13855265****@163.com\\",\\n      \\"WorkspaceId\\": \\"c5f86ad2-ef53-4c51-8720-162ecfdb****\\",\\n      \\"SecurityLevel\\": \\"0\\",\\n      \\"Description\\": \\"测试报表的描述\\",\\n      \\"WorkName\\": \\"测试报表\\",\\n      \\"ModifyTime\\": \\"1530078690000\\",\\n      \\"Directory\\": {\\n        \\"PathId\\": \\"66ffe22b-83be-47fd-b49d-9ca58d29****/f7f6e22b-83be-47fd-b49d-9ca686a9****\\",\\n        \\"PathName\\": \\"一级目录/二级目录\\",\\n        \\"Name\\": \\"图表报表\\",\\n        \\"Id\\": \\"f7f6e22b-83be-47fd-b49d-9ca686a9****\\"\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<QuerySharesToUserListResponse>\\n    <Success>true</Success>\\n    <RequestId>DC4E1E63-B337-44F8-8C22-6F00DF67E2C3</RequestId>\\n    <Result>\\n        <Status>1</Status>\\n        <ThirdPartAuthFlag>0</ThirdPartAuthFlag>\\n        <WorksId>97f7f4c1-543a-4069-8e8d-a56cfcd6****</WorksId>\\n        <CreateTime>1530078690000</CreateTime>\\n        <WorkType>DATAFORM</WorkType>\\n        <OwnerName>w****@aliyun.com</OwnerName>\\n        <WorkspaceName>专业版回归</WorkspaceName>\\n        <OwnerId>74f5527216d14e9892245320ebf2****</OwnerId>\\n        <ModifyName>13855265****@163.com</ModifyName>\\n        <WorkspaceId>c5f86ad2-ef53-4c51-8720-162ecfdb****</WorkspaceId>\\n        <SecurityLevel>0</SecurityLevel>\\n        <Description>测试报表的描述</Description>\\n        <WorkName>测试报表</WorkName>\\n        <ModifyTime>1530078690000</ModifyTime>\\n        <Directory>\\n            <PathId>66ffe22b-83be-47fd-b49d-9ca58d29****/f7f6e22b-83be-47fd-b49d-9ca686a9****</PathId>\\n            <PathName>一级目录/二级目录</PathName>\\n            <Name>图表报表</Name>\\n            <Id>f7f6e22b-83be-47fd-b49d-9ca686a9****</Id>\\n        </Directory>\\n    </Result>\\n</QuerySharesToUserListResponse>","errorExample":""}]',
      'title' => '查询授权给用户的作品列表',
      'summary' => '查询授权给用户的作品列表。',
    ),
    'QueryShareList' => 
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
          'name' => 'ReportId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '作品ID。这里的作品包括数据门户、仪表板、电子表格、自助取数、即席分析、数据填报、数据大屏。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '6b407e50-e774-406b-9956-da2425c2****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DC4E1E63-B337-44F8-8C22-6F00DF67E2C3',
              ),
              'Result' => 
              array (
                'description' => '返回作品被分享给的对象列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ShareId' => 
                    array (
                      'description' => '分享配置ID。',
                      'type' => 'string',
                      'example' => '0ab9659e-29cf-47d7-a364-3a91553b****',
                    ),
                    'ShareToId' => 
                    array (
                      'description' => '分享目标的ID，可能是在Quick BI的用户ID，可能是用户组ID。

- 当ShareToType=2（所有组织内的成员）的时候，ShareToId为组织ID。',
                      'type' => 'string',
                      'example' => '95296e95-ca89-4c7d-8af9-dedf0ad0****',
                    ),
                    'AuthPoint' => 
                    array (
                      'description' => '分享权限。取值范围：

- 1：仅查看
- 3：查看和导出',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '3',
                    ),
                    'ExpireDate' => 
                    array (
                      'description' => '授权有效时间的毫秒级时间戳。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1640102400000',
                    ),
                    'ShareToType' => 
                    array (
                      'description' => '分享类型。取值范围：

- 0：用户
- 1：用户组
- 2：组织
- 3：空间',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'ReportId' => 
                    array (
                      'description' => '作品ID。',
                      'type' => 'string',
                      'example' => '6b407e50-e774-406b-9956-da2425c2****',
                    ),
                    'ShareToName' => 
                    array (
                      'description' => '分享对象的名称。',
                      'type' => 'string',
                      'example' => '小张',
                    ),
                    'ShareType' => 
                    array (
                      'description' => '被分享作品的类型。取值范围：
- product：数据门户
- dashboard：仪表板
- worksheet：电子表格
- dashboardOfflineQuery：自助取数
- ANALYSIS：即席分析
- DATAFORM：数据填报
- SCREEN：数据大屏',
                      'type' => 'string',
                      'example' => 'product',
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
            'errorCode' => 'Report.NotExist.Error',
            'errorMessage' => 'This work does not exist. It may have been deleted. Work ID is %s.',
          ),
          1 => 
          array (
            'errorCode' => 'Workspace.Not.Exist',
            'errorMessage' => 'The group workspace does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'Workspace.NotIn.Organization',
            'errorMessage' => 'The workspace is not owned by the organization.',
          ),
          3 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          4 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          5 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          7 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          10 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          11 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          12 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          13 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          14 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          15 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          16 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          17 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          18 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"DC4E1E63-B337-44F8-8C22-6F00DF67E2C3\\",\\n  \\"Result\\": [\\n    {\\n      \\"ShareId\\": \\"0ab9659e-29cf-47d7-a364-3a91553b****\\",\\n      \\"ShareToId\\": \\"95296e95-ca89-4c7d-8af9-dedf0ad0****\\",\\n      \\"AuthPoint\\": 3,\\n      \\"ExpireDate\\": 1640102400000,\\n      \\"ShareToType\\": 0,\\n      \\"ReportId\\": \\"6b407e50-e774-406b-9956-da2425c2****\\",\\n      \\"ShareToName\\": \\"小张\\",\\n      \\"ShareType\\": \\"product\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<QueryShareListResponse>\\n    <Success>true</Success>\\n    <RequestId>DC4E1E63-B337-44F8-8C22-6F00DF67E2C3</RequestId>\\n    <Result>\\n        <ShareId>0ab9659e-29cf-47d7-a364-3a91553b****</ShareId>\\n        <ShareToId>95296e95-ca89-4c7d-8af9-dedf0ad0****</ShareToId>\\n        <AuthPoint>3</AuthPoint>\\n        <ExpireDate>1640102400000</ExpireDate>\\n        <ShareToType>0</ShareToType>\\n        <ShareToName>小张</ShareToName>\\n        <ShareType>0</ShareType>\\n    </Result>\\n</QueryShareListResponse>","errorExample":""}]',
      'title' => '查询作品的分享记录',
      'summary' => '查询作品被分享给哪些对象的列表，只返回仍然在有效期限内的分享配置。',
    ),
    'AuthorizeMenu' => 
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
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DataPortalId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据门户的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0d173abb53e84c8ca7495429163b****',
          ),
        ),
        1 => 
        array (
          'name' => 'MenuIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据门户的叶子节点菜单ID。

- 目录菜单无法进行授权操作
- 支持批量传参，ID之间用半角逗号（,）隔开，批量修改的最大数为100',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '54kqgoa****,pg1n135****',
          ),
        ),
        2 => 
        array (
          'name' => 'UserGroupIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户组ID列表。

- 支持批量传参，ID之间用半角逗号（,）隔开，批量修改的最大数为200
- UserGroupIds和UserIds不能同时为空',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '34fd141d-4598-4093-8c33-8e066dcb****,3d2c23d4-2b41-4af8-a1f5-f6390f32****',
          ),
        ),
        3 => 
        array (
          'name' => 'UserIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户ID列表。此处为Quick BI的UserID，而非阿里云的UID。

- 支持批量传参，ID之间用半角逗号（,）隔开，批量修改的最大数为200',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '204627493484****,121344444790****',
          ),
        ),
        4 => 
        array (
          'name' => 'AuthPointsValue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权菜单的权限。取值范围：

- 1：查看
- 3：查看+导出（默认）',
            'type' => 'integer',
            'format' => 'int32',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '188F0B12-00EF-41B3-944A-FB7EF06C9F43',
              ),
              'Result' => 
              array (
                'description' => '授权成功的菜单数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Report.NotExist.Error',
            'errorMessage' => 'This work does not exist. It may have been deleted. Work ID is %s.',
          ),
          1 => 
          array (
            'errorCode' => 'Workspace.NotIn.Organization',
            'errorMessage' => 'The workspace is not owned by the organization.',
          ),
          2 => 
          array (
            'errorCode' => 'AccessMenu.NotMatch.Portal',
            'errorMessage' => 'The menu does not match the BI portal.',
          ),
          3 => 
          array (
            'errorCode' => 'FolderMenu.CanNot.Authorize',
            'errorMessage' => 'The folder type menu cannot be authorized. Menu ID: %s.',
          ),
          4 => 
          array (
            'errorCode' => 'Menu.NotBelongTo.CurrentDataportal',
            'errorMessage' => 'Menu %s does not belong to the current data portal %s.',
          ),
          5 => 
          array (
            'errorCode' => 'User.NotBelongTo.CurrentOrganization',
            'errorMessage' => 'The user %s does not belong to the current organization.',
          ),
          6 => 
          array (
            'errorCode' => 'Usergroup.NotBelongTo.CurrentOrganization',
            'errorMessage' => 'The usergroup %s does not belong to the current organization.',
          ),
          7 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          8 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          9 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          10 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          11 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          12 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          13 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          14 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          15 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          16 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          17 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          18 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          19 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          20 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          21 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          22 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"188F0B12-00EF-41B3-944A-FB7EF06C9F43\\",\\n  \\"Result\\": 2,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<AuthorizeMenuResponse>\\n    <RequestId>188F0B12-00EF-41B3-944A-FB7EF06C9F43</RequestId>\\n    <Result>2</Result>\\n    <Success>true</Success>\\n</AuthorizeMenuResponse>","errorExample":""}]',
      'title' => '数据门户菜单批量授权',
      'summary' => '数据门户菜单的批量授权，已经授权的会自动略过。',
    ),
    'CancelAuthorizationMenu' => 
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
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DataPortalId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据门户的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0d173abb53e84c8ca7495429163b****',
          ),
        ),
        1 => 
        array (
          'name' => 'MenuIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据门户的叶子节点菜单ID。

- 目录菜单无法进行授权操作
- 支持批量传参，ID之间用半角逗号（,）隔开，批量修改的最大数为100',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '54kqgoa****,pg1n135****',
          ),
        ),
        2 => 
        array (
          'name' => 'UserGroupIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户组ID列表。

- 支持批量传参，ID之间用半角逗号（,）隔开，批量修改的最大数为200
- UserGroupIds和UserIds不能同时为空',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '34fd141d-4598-4093-8c33-8e066dcb****,3d2c23d4-2b41-4af8-a1f5-f6390f32****',
          ),
        ),
        3 => 
        array (
          'name' => 'UserIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户ID列表。此处为Quick BI的UserID，而非阿里云的UID。

- 支持批量传参，ID之间用半角逗号（,）隔开，批量修改的最大数为200',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '204627493484****,121344444790****',
          ),
        ),
      ),
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
                'example' => 'D8749D65-E80A-433C-AF1B-CE9C180FF3B4',
              ),
              'Result' => 
              array (
                'description' => '取消授权成功的菜单数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Report.NotExist.Error',
            'errorMessage' => 'This work does not exist. It may have been deleted. Work ID is %s.',
          ),
          1 => 
          array (
            'errorCode' => 'Workspace.NotIn.Organization',
            'errorMessage' => 'The workspace is not owned by the organization.',
          ),
          2 => 
          array (
            'errorCode' => 'AccessMenu.NotMatch.Portal',
            'errorMessage' => 'The menu does not match the BI portal.',
          ),
          3 => 
          array (
            'errorCode' => 'FolderMenu.CanNot.Authorize',
            'errorMessage' => 'The folder type menu cannot be authorized. Menu ID: %s.',
          ),
          4 => 
          array (
            'errorCode' => 'Menu.NotBelongTo.CurrentDataportal',
            'errorMessage' => 'Menu %s does not belong to the current data portal %s.',
          ),
          5 => 
          array (
            'errorCode' => 'User.NotBelongTo.CurrentOrganization',
            'errorMessage' => 'The user %s does not belong to the current organization.',
          ),
          6 => 
          array (
            'errorCode' => 'Usergroup.NotBelongTo.CurrentOrganization',
            'errorMessage' => 'The usergroup %s does not belong to the current organization.',
          ),
          7 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          8 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          9 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          10 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          11 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          12 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          13 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          14 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          15 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          16 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          17 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          18 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          19 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          20 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          21 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          22 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D8749D65-E80A-433C-AF1B-CE9C180FF3B4\\",\\n  \\"Result\\": 2,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CancelAuthorizationMenuResponse>\\n    <RequestId>D8749D65-E80A-433C-AF1B-CE9C180FF3B4</RequestId>\\n    <Result>2</Result>\\n    <Success>true</Success>\\n</CancelAuthorizationMenuResponse>","errorExample":""}]',
      'title' => '批量取消数据门户菜单授权',
      'summary' => '根据门户菜单ID，取消指定用户、用户组的授权记录。',
    ),
    'ChangeVisibilityModel' => 
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DataPortalId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据门户的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0d173abb53e84c8ca7495429163b****',
          ),
        ),
        1 => 
        array (
          'name' => 'MenuIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据门户的叶子节点菜单ID。

- 目录菜单无法进行授权操作
- 支持批量传参，ID之间用半角逗号（,）隔开，批量修改的最大数为100',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '54kqgoa****,pg1n135****',
          ),
        ),
        2 => 
        array (
          'name' => 'ShowOnlyWithAccess',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否仅授权可见。取值范围：

- true：仅授权可见
- false：都可见',
            'type' => 'boolean',
            'required' => true,
            'docRequired' => true,
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
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'description' => '修改成功的菜单数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Report.NotExist.Error',
            'errorMessage' => 'This work does not exist. It may have been deleted. Work ID is %s.',
          ),
          1 => 
          array (
            'errorCode' => 'AccessMenu.NotMatch.Portal',
            'errorMessage' => 'The menu does not match the BI portal.',
          ),
          2 => 
          array (
            'errorCode' => 'FolderMenu.CanNot.Authorize',
            'errorMessage' => 'The folder type menu cannot be authorized. Menu ID: %s.',
          ),
          3 => 
          array (
            'errorCode' => 'Menu.NotBelongTo.CurrentDataportal',
            'errorMessage' => 'Menu %s does not belong to the current data portal %s.',
          ),
          4 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          5 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          6 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          8 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          10 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          11 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          13 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          14 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          15 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          16 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          17 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          18 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          19 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": 2,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ChangeVisibilityModelResponse>\\n    <RequestId>D787E1A3-A93C-424A-B626-C2B05DF8D885</RequestId>\\n    <Result>2</Result>\\n    <Success>true</Success>\\n</ChangeVisibilityModelResponse>","errorExample":""}]',
      'title' => '修改数据门户菜单的可见方式',
      'summary' => '修改数据门户菜单的可见方式，是否仅授权可见。',
    ),
    'ListPortalMenus' => 
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
      'operationType' => 'read',
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DataPortalId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据门户的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0d173abb53e84c8ca7495429163b****',
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Quick BI中的用户ID。传入时列表仅展示用户有权限的菜单。',
            'type' => 'string',
            'required' => false,
            'example' => '1234567***',
          ),
        ),
      ),
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
                'example' => '75912036-5527-4B7E-9265-B481D6651AC2',
              ),
              'Result' => 
              array (
                'description' => '分级门户菜单列表详情的JSON字符串。取值范围：

- menuType：菜单类型。
    - 0：仪表板
    - 1：外链
    - 2：电子表格
    - 4：目录文件夹
    - 5：表单填报
    - 6：自助取数
- menuId：菜单ID
- uri： 菜单关联资源的ID或者URL
- showOnlyWithAccess：是否仅授权可见
- menuName：菜单显示名称
- dependentPermisson：菜单关联的报表资源是否有权限
- children：子菜单',
                'type' => 'string',
                'example' => '[{"children":[{"children":[{"children":[{"menuId":"54kqgoa****","menuName":"报表菜单","menuType":0,"showOnlyWithAccess":true,"dependentPermisson":false,"uri":"e5da4a3f-d7f9-4262-a39e-a840043c****"},{"menuId":"pg1n135****","menuName":"目录菜单","menuType":4,"showOnlyWithAccess":false,"dependentPermisson":true}],"menuId":"23a7d5d8-e55a-4737-b6a1-3c585505****","menuName":"pop三级菜单","menuType":4,"showOnlyWithAccess":true,"dependentPermisson":true}],"menuId":"80764f3c-affd-45a1-aaa1-bb039d8a****","menuName":"pop二级菜单","menuType":4,"showOnlyWithAccess":false,"dependentPermisson":true}],"menuId":"277f968a-22ff-4ce6-83f0-a82950f4****","menuName":"pop一级菜单","menuType":4,"showOnlyWithAccess":false,"dependentPermisson":true}]',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：
- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          5 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          9 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          10 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          11 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          13 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          14 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          15 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"75912036-5527-4B7E-9265-B481D6651AC2\\",\\n  \\"Result\\": \\"[{\\\\\\"children\\\\\\":[{\\\\\\"children\\\\\\":[{\\\\\\"children\\\\\\":[{\\\\\\"menuId\\\\\\":\\\\\\"54kqgoa****\\\\\\",\\\\\\"menuName\\\\\\":\\\\\\"报表菜单\\\\\\",\\\\\\"menuType\\\\\\":0,\\\\\\"showOnlyWithAccess\\\\\\":true,\\\\\\"dependentPermisson\\\\\\":false,\\\\\\"uri\\\\\\":\\\\\\"e5da4a3f-d7f9-4262-a39e-a840043c****\\\\\\"},{\\\\\\"menuId\\\\\\":\\\\\\"pg1n135****\\\\\\",\\\\\\"menuName\\\\\\":\\\\\\"目录菜单\\\\\\",\\\\\\"menuType\\\\\\":4,\\\\\\"showOnlyWithAccess\\\\\\":false,\\\\\\"dependentPermisson\\\\\\":true}],\\\\\\"menuId\\\\\\":\\\\\\"23a7d5d8-e55a-4737-b6a1-3c585505****\\\\\\",\\\\\\"menuName\\\\\\":\\\\\\"pop三级菜单\\\\\\",\\\\\\"menuType\\\\\\":4,\\\\\\"showOnlyWithAccess\\\\\\":true,\\\\\\"dependentPermisson\\\\\\":true}],\\\\\\"menuId\\\\\\":\\\\\\"80764f3c-affd-45a1-aaa1-bb039d8a****\\\\\\",\\\\\\"menuName\\\\\\":\\\\\\"pop二级菜单\\\\\\",\\\\\\"menuType\\\\\\":4,\\\\\\"showOnlyWithAccess\\\\\\":false,\\\\\\"dependentPermisson\\\\\\":true}],\\\\\\"menuId\\\\\\":\\\\\\"277f968a-22ff-4ce6-83f0-a82950f4****\\\\\\",\\\\\\"menuName\\\\\\":\\\\\\"pop一级菜单\\\\\\",\\\\\\"menuType\\\\\\":4,\\\\\\"showOnlyWithAccess\\\\\\":false,\\\\\\"dependentPermisson\\\\\\":true}]\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ListPortalMenusResponse>\\n    <RequestId>75912036-5527-4B7E-9265-B481D6651AC2</RequestId>\\n    <Result>[{\\"children\\":[{\\"children\\":[{\\"children\\":[{\\"menuId\\":\\"54kqgoa****\\",\\"menuName\\":\\"报表菜单\\",\\"menuType\\":0,\\"showOnlyWithAccess\\":true,\\"dependentPermisson\\":false,\\"uri\\":\\"e5da4a3f-d7f9-4262-a39e-a840043c****\\"},{\\"menuId\\":\\"pg1n135****\\",\\"menuName\\":\\"目录菜单\\",\\"menuType\\":4,\\"showOnlyWithAccess\\":false,\\"dependentPermisson\\":true}],\\"menuId\\":\\"23a7d5d8-e55a-4737-b6a1-3c585505****\\",\\"menuName\\":\\"pop三级菜单\\",\\"menuType\\":4,\\"showOnlyWithAccess\\":true,\\"dependentPermisson\\":true}],\\"menuId\\":\\"80764f3c-affd-45a1-aaa1-bb039d8a****\\",\\"menuName\\":\\"pop二级菜单\\",\\"menuType\\":4,\\"showOnlyWithAccess\\":false,\\"dependentPermisson\\":true}],\\"menuId\\":\\"277f968a-22ff-4ce6-83f0-a82950f4****\\",\\"menuName\\":\\"pop一级菜单\\",\\"menuType\\":4,\\"showOnlyWithAccess\\":false,\\"dependentPermisson\\":true}]</Result>\\n    <Success>true</Success>\\n</ListPortalMenusResponse>","errorExample":""}]',
      'title' => '获取数据门户菜单列表',
      'summary' => '获取具体数据门户下的分层菜单列表。',
    ),
    'ListPortalMenuAuthorization' => 
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
      'operationType' => 'read',
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DataPortalId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据门户的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0d173abb53e84c8ca7495429163b****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D8749D65-E80A-433C-AF1B-CE9C180FF3B4',
              ),
              'Result' => 
              array (
                'description' => '门户菜单的授权详情列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ShowOnlyWithAccess' => 
                    array (
                      'description' => '是否仅授权可见。取值范围：

- true：仅授权可见
- false：都可见',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'MenuId' => 
                    array (
                      'description' => '数据门户的叶子节点菜单ID。',
                      'type' => 'string',
                      'example' => '54kqgoa****',
                    ),
                    'Receivers' => 
                    array (
                      'description' => '菜单所授权的对象详情。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ReceiverId' => 
                          array (
                            'description' => '授权对象ID。',
                            'type' => 'string',
                            'example' => '121344444790****',
                          ),
                          'ReceiverType' => 
                          array (
                            'description' => '授权对象类型。取值范围：

- 0：用户
- 1：用户组',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Workspace.NotIn.Organization',
            'errorMessage' => 'The workspace is not owned by the organization.',
          ),
          1 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          3 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          10 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          11 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          12 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          13 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          14 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          15 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          16 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"D8749D65-E80A-433C-AF1B-CE9C180FF3B4\\",\\n  \\"Result\\": [\\n    {\\n      \\"ShowOnlyWithAccess\\": true,\\n      \\"MenuId\\": \\"54kqgoa****\\",\\n      \\"Receivers\\": [\\n        {\\n          \\"ReceiverId\\": \\"121344444790****\\",\\n          \\"ReceiverType\\": 0\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListPortalMenuAuthorizationResponse>\\n    <Success>true</Success>\\n    <RequestId>D8749D65-E80A-433C-AF1B-CE9C180FF3B4</RequestId>\\n    <Result>\\n        <ShowOnlyWithAccess>true</ShowOnlyWithAccess>\\n        <MenuId>54kqgoa****</MenuId>\\n        <Receivers>\\n            <ReceiverId>121344444790****</ReceiverId>\\n            <ReceiverType>0</ReceiverType>\\n        </Receivers>\\n    </Result>\\n</ListPortalMenuAuthorizationResponse>","errorExample":""}]',
      'title' => '获取数据门户菜单的授权详情',
      'summary' => '获取数据门户菜单的授权详情列表。',
    ),
    'SetDataLevelPermissionRuleConfig' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RuleModel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '{
    "rule": "a5bb24da-****-a891683e14da",   // 行列权限规则的ID,当传入时为修改行级权限规则,否则新增
    "cubeId": "7c7223ae-****-3c744528014b",  // 数据集ID
    "ruleName": "测试行级权限", // 行级权限规则的名称
    "ruleLevelType": "ROW_LEVEL", // 行级权限类型：ROW_LEVEL：行级权限,COLUMN_LEVEL：列级权限
    "ruleTargetScope": "ALL", // 行级权限规则针对的人群：1：所有人,2：指定人
    "hitTakeEffect": 1, //命中后规则生效还是不生效（针对列级权限）：1：生效 （默认生效）,0：不生效
    "ruleUsersModel": {
        "userGroups": [
            "9bd2c6440ac542****589f16bf12ca8178dd", // 用户组人群的用户组ID
            "0d5fb19b-****-1248fc27ca51",
            "3d2c23d4-****-f6390f325c2d"
        ],
        "users": [
            "43342****3784358", // 用户人群的UserID
            "Huang****2e3fa822"
        ]
    },
    "ruleContentModel": {
        "ruleContentType": "ROW_FIELD", // 行列权限的规则类型
        "ruleContentJson": "{\\"conditionNode\\":{\\"caption\\":\\"周期\\",\\"isMeasure\\":false,\\"pathId\\":\\"7d3b***bc6\\",\\"relationOperator\\":\\"not-null\\",\\"name\\":\\"7d3b***bc6\\",\\"value\\":{\\"value\\":[\\"\\"],\\"valueType\\":\\"ENUM\\"}}}", // 规则的JSON字符串
        "ruleOriginConfigJson": "{\\"operator\\":\\"and\\",\\"operands\\":[{\\"labelName\\":\\"周期\\",\\"isValid\\":true,\\"uniqueId\\":\\"5\\",\\"fieldId\\":\\"7d3b***bc6\\",\\"error\\":false,\\"fieldType\\":\\"string\\",\\"defaultValue\\":{\\"selectType\\":\\"condition\\",\\"value\\":{\\"conditionOp\\":\\"not-null\\",\\"conditionValue\\":\\"\\"},\\"valueType\\":\\"ENUM\\"}}],\\"isRelation\\":true}" // 前端模板要是用的JSON结果（行级权限专用）
    }
}',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{
    "cubeId": "aa574353-41cf-****-8d0d-455176c101fa",
    "hitTakeEffect": 1,
    "isOpen": 1,
    "permissionMode": "COMPLEX",
    "ruleContentModel": {
        "ruleContent": {
            "pathId": [
                "264b7a970b"
            ]
        },
        "ruleContentJson": "{\\"pathId\\":[\\"264b7a970b\\"]}",
        "ruleContentType": "COLUMN_FORBID"
    },
    "ruleId": "3971fa8e-f7e0-****-b6e3-5b3167dd7247",
    "ruleLevelType": "COLUMN_LEVEL",
    "ruleName": "规则名称",
    "ruleTargetScope": "ALL"
}',
          ),
        ),
      ),
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
                'example' => 'D8749D65-E80A-433C-AF1B-CE9C180FF3B4',
              ),
              'Result' => 
              array (
                'description' => '保存成功的行列权限信息。',
                'type' => 'string',
                'example' => '{
    "cubeId": "aa574353-41cf-****-8d0d-455176c101fa",
    "hitTakeEffect": 1,
    "isOpen": 1,
    "permissionMode": "COMPLEX",
    "ruleContentModel": {
        "ruleContent": {
            "pathId": [
                "264b7a970b"
            ]
        },
        "ruleContentJson": "{\\"pathId\\":[\\"264b7a970b\\"]}",
        "ruleContentType": "COLUMN_FORBID"
    },
    "ruleId": "3971fa8e-f7e0-****-b6e3-5b3167dd7247",
    "ruleLevelType": "COLUMN_LEVEL",
    "ruleName": "规则名称",
    "ruleTargetScope": "ALL"
}',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Cube.Not.Exist',
            'errorMessage' => 'The Cube does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'CubePermission.Columnlevel.VersionError',
            'errorMessage' => 'You are not allowed to use the new dataLevelPermission API.',
          ),
          2 => 
          array (
            'errorCode' => 'CubePermission.ColumnlevelField.Repeat',
            'errorMessage' => 'There are duplicate field configurations.',
          ),
          3 => 
          array (
            'errorCode' => 'RowLevelPermission.SwitchClose.Error',
            'errorMessage' => 'The row level permission switch must be on.',
          ),
          4 => 
          array (
            'errorCode' => 'RowLevelPermission.Rule.NotExsist',
            'errorMessage' => 'The row level permission rule does not exist: %s.',
          ),
          5 => 
          array (
            'errorCode' => 'RowLevelPermission.Rule.NotBelongToCube',
            'errorMessage' => 'The row level permission rule does not belong to the current cube.',
          ),
          6 => 
          array (
            'errorCode' => 'Cube.NotBelongTo.CurrentOrganization',
            'errorMessage' => 'The cube does not belong to the current organization %s.',
          ),
          7 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          8 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          9 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          10 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          11 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          12 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          13 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          14 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          15 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          16 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          17 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          18 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          19 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          20 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          21 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          22 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D8749D65-E80A-433C-AF1B-CE9C180FF3B4\\",\\n  \\"Result\\": \\"{\\\\n    \\\\\\"cubeId\\\\\\": \\\\\\"aa574353-41cf-****-8d0d-455176c101fa\\\\\\",\\\\n    \\\\\\"hitTakeEffect\\\\\\": 1,\\\\n    \\\\\\"isOpen\\\\\\": 1,\\\\n    \\\\\\"permissionMode\\\\\\": \\\\\\"COMPLEX\\\\\\",\\\\n    \\\\\\"ruleContentModel\\\\\\": {\\\\n        \\\\\\"ruleContent\\\\\\": {\\\\n            \\\\\\"pathId\\\\\\": [\\\\n                \\\\\\"264b7a970b\\\\\\"\\\\n            ]\\\\n        },\\\\n        \\\\\\"ruleContentJson\\\\\\": \\\\\\"{\\\\\\\\\\\\\\"pathId\\\\\\\\\\\\\\":[\\\\\\\\\\\\\\"264b7a970b\\\\\\\\\\\\\\"]}\\\\\\",\\\\n        \\\\\\"ruleContentType\\\\\\": \\\\\\"COLUMN_FORBID\\\\\\"\\\\n    },\\\\n    \\\\\\"ruleId\\\\\\": \\\\\\"3971fa8e-f7e0-****-b6e3-5b3167dd7247\\\\\\",\\\\n    \\\\\\"ruleLevelType\\\\\\": \\\\\\"COLUMN_LEVEL\\\\\\",\\\\n    \\\\\\"ruleName\\\\\\": \\\\\\"规则名称\\\\\\",\\\\n    \\\\\\"ruleTargetScope\\\\\\": \\\\\\"ALL\\\\\\"\\\\n}\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<SetDataLevelPermissionRuleConfigResponse>\\n    <RequestId>D8749D65-E80A-433C-AF1B-CE9C180FF3B4</RequestId>\\n    <Result>true</Result>\\n    <Success>true</Success>\\n</SetDataLevelPermissionRuleConfigResponse>","errorExample":""}]',
      'title' => '设置单条数据集行列权限配置信息',
      'summary' => '设置单条数据集行列权限配置信息（新增和更新）。',
      'description' => '>：当前接口仅支持Quick BI新版行列权限模型。若您仍在使用老的行列权限，请先一键迁移至新的行列权限模型后再调用该接口。一键迁移至新的行列权限模型的操作步骤：在组织管理-->安全配置-->行列权限升级新版中，单击**一键升级**，升级至新版行级权限。',
    ),
    'AddDataLevelPermissionRuleUsers' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AddUserModel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '{
    "ruleId": "a5bb24da-***-a891683e14da", // 行列权限规则ID
    "cubeId": "7c7223ae-***-3c744528014b", // 数据集ID
    "addModel": {
        "userGroups": [
            "0d5fb19b-***-1248fc27ca51", // 添加用户组人群的用户组ID
            "3d2c23d4-***-f6390f325c2d"
        ],
        "users": [
            "4334***358", // 添加用户人群的UserID
            "Huang***3fa822"
        ]
    }
}',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"ruleId":"a5bb24da-***-a891683e14da","cubeId":"7c7223ae-***-3c744528014b","addModel":{"userGroups":["0d5fb19b-***-1248fc27ca51","3d2c23d4-***-f6390f325c2d"],"users":["4334***358","Huang***3fa822"]}}',
          ),
        ),
      ),
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
                'example' => 'D8749D65-E80A-433C-AF1B-CE9C180FF3B4',
              ),
              'Result' => 
              array (
                'description' => '接口执行结果。取值范围：
- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Cube.Not.Exist',
            'errorMessage' => 'The Cube does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'CubePermission.Columnlevel.VersionError',
            'errorMessage' => 'You are not allowed to use the new dataLevelPermission API.',
          ),
          2 => 
          array (
            'errorCode' => 'RowLevelPermission.SwitchClose.Error',
            'errorMessage' => 'The row level permission switch must be on.',
          ),
          3 => 
          array (
            'errorCode' => 'RowLevelPermission.Rule.NotExsist',
            'errorMessage' => 'The row level permission rule does not exist: %s.',
          ),
          4 => 
          array (
            'errorCode' => 'RowLevelPermission.Rule.NotBelongToCube',
            'errorMessage' => 'The row level permission rule does not belong to the current cube.',
          ),
          5 => 
          array (
            'errorCode' => 'Cube.NotBelongTo.CurrentOrganization',
            'errorMessage' => 'The cube does not belong to the current organization %s.',
          ),
          6 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          7 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          8 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          10 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          11 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          12 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          13 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          14 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          15 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          16 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          17 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          18 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D8749D65-E80A-433C-AF1B-CE9C180FF3B4\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<AddDataLevelPermissionRuleUsersResponse>\\n    <RequestId>D8749D65-E80A-433C-AF1B-CE9C180FF3B4</RequestId>\\n    <Result>true</Result>\\n    <Success>true</Success>\\n</AddDataLevelPermissionRuleUsersResponse>","errorExample":""}]',
      'title' => '添加行列权限规则人群',
      'summary' => '针对单条行列权限规则增量添加选定的人群。',
      'description' => '>：当前接口仅支持Quick BI新版行列权限模型。若您仍在使用老的行列权限，请先一键迁移至新的行列权限模型后再调用该接口。一键迁移至新的行列权限模型的操作步骤：在组织管理-->安全配置-->行列权限升级新版中，单击**一键升级**，升级至新版行级权限。',
    ),
    'AddDataLevelPermissionWhiteList' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CubeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '7c7223ae-***-3c744528014b',
          ),
        ),
        1 => 
        array (
          'name' => 'RuleType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '行级权限类型：

- ROW_LEVEL：行级权限，
- COLUMN_LEVEL：列级权限',
            'type' => 'string',
            'required' => false,
            'example' => 'ROW_LEVEL',
          ),
        ),
        2 => 
        array (
          'name' => 'OperateType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '操作类型： 

- ADD：增加白名单
- DELETE：删除白名单',
            'type' => 'string',
            'required' => false,
            'example' => 'ADD',
          ),
        ),
        3 => 
        array (
          'name' => 'TargetType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改白名单对应的类型：

- 1：用户 
- 2：用户组',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'TargetIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权对象，同时支持多个授权对象，多个对象以英文逗号分隔。取值范围：

- TargetType=1（用户）时，为用户ID。
- TargetType=2（用户组）时，为用户组ID。 ',
            'type' => 'string',
            'required' => false,
            'example' => '43342***435,1553a****41231',
          ),
        ),
      ),
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
                'example' => 'D8749D65-E80A-433C-AF1B-CE9C180FF3B4',
              ),
              'Result' => 
              array (
                'description' => '接口执行结果。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Cube.Not.Exist',
            'errorMessage' => 'The Cube does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'CubePermission.Columnlevel.VersionError',
            'errorMessage' => 'You are not allowed to use the new dataLevelPermission API.',
          ),
          2 => 
          array (
            'errorCode' => 'RowLevelPermission.SwitchClose.Error',
            'errorMessage' => 'The row level permission switch must be on.',
          ),
          3 => 
          array (
            'errorCode' => 'RowLevelPermission.Rule.NotExsist',
            'errorMessage' => 'The row level permission rule does not exist: %s.',
          ),
          4 => 
          array (
            'errorCode' => 'RowLevelPermission.Rule.NotBelongToCube',
            'errorMessage' => 'The row level permission rule does not belong to the current cube.',
          ),
          5 => 
          array (
            'errorCode' => 'Cube.NotBelongTo.CurrentOrganization',
            'errorMessage' => 'The cube does not belong to the current organization %s.',
          ),
          6 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          7 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          8 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          10 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          11 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          12 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          13 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          14 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          15 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          16 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          17 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          18 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          19 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          20 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          21 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D8749D65-E80A-433C-AF1B-CE9C180FF3B4\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<AddDataLevelPermissionWhiteListResponse>\\n    <RequestId>D8749D65-E80A-433C-AF1B-CE9C180FF3B4</RequestId>\\n    <Result>true</Result>\\n    <Success>true</Success>\\n</AddDataLevelPermissionWhiteListResponse>","errorExample":""}]',
      'title' => '增量修改行列权限白名单',
      'summary' => '修改指定数据集行列权限的白名单。',
      'description' => '>：当前接口仅支持Quick BI新版行列权限模型。若您仍在使用老的行列权限，请先一键迁移至新的行列权限模型后再调用该接口。一键迁移至新的行列权限模型的操作步骤：在组织管理-->安全配置-->行列权限升级新版中，单击**一键升级**，升级至新版行级权限。',
    ),
    'DeleteDataLevelRuleConfig' => 
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CubeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '7c7223ae-****-3c744528014b',
          ),
        ),
        1 => 
        array (
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '行列权限的规则ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'a5bb24da-****-a891683e14da',
          ),
        ),
      ),
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
                'example' => 'D8749D65-E80A-433C-AF1B-CE9C180FF3B4',
              ),
              'Result' => 
              array (
                'description' => '接口执行结果。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Cube.Not.Exist',
            'errorMessage' => 'The Cube does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'CubePermission.Columnlevel.VersionError',
            'errorMessage' => 'You are not allowed to use the new dataLevelPermission API.',
          ),
          2 => 
          array (
            'errorCode' => 'RowLevelPermission.SwitchClose.Error',
            'errorMessage' => 'The row level permission switch must be on.',
          ),
          3 => 
          array (
            'errorCode' => 'RowLevelPermission.Rule.NotExsist',
            'errorMessage' => 'The row level permission rule does not exist: %s.',
          ),
          4 => 
          array (
            'errorCode' => 'RowLevelPermission.Rule.NotBelongToCube',
            'errorMessage' => 'The row level permission rule does not belong to the current cube.',
          ),
          5 => 
          array (
            'errorCode' => 'Cube.NotBelongTo.CurrentOrganization',
            'errorMessage' => 'The cube does not belong to the current organization %s.',
          ),
          6 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          7 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          8 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          10 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          11 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          12 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          13 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          14 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          15 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          16 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          17 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          18 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          19 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          20 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          21 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D8749D65-E80A-433C-AF1B-CE9C180FF3B4\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteDataLevelRuleConfigResponse>\\n    <RequestId>D8749D65-E80A-433C-AF1B-CE9C180FF3B4</RequestId>\\n    <Result>true</Result>\\n    <Success>true</Success>\\n</DeleteDataLevelRuleConfigResponse>","errorExample":""}]',
      'title' => '删除行列权限规则',
      'summary' => '删除单条行列权限规则。',
      'description' => '>：当前接口仅支持Quick BI新版行列权限模型。若您仍在使用老的行列权限，请先一键迁移至新的行列权限模型后再调用该接口。一键迁移至新的行列权限模型的操作步骤：在组织管理-->安全配置-->行列权限升级新版中，单击**一键升级**，升级至新版行级权限。',
    ),
    'DeleteDataLevelPermissionRuleUsers' => 
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DeleteUserModel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '{
    "ruleId": "a5bb24da-***-a891683e14da", // 行列权限规则ID
    "cubeId": "7c7223ae-***-3c744528014b", // 数据集ID
    "delModel": {
        "userGroups": [
            "0d5fb19b-***-1248fc27ca51", // 删除用户组人群的用户组ID
            "3d2c23d4-***-f6390f325c2d"
        ],
        "users": [
            "4334***358", // 删除用户人群的UserID
            "Huang***3fa822"
        ]
    }
}',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '	{"ruleId":"a5bb24da-***-a891683e14da","cubeId":"7c7223ae-***-3c744528014b","delModel":{"userGroups":["0d5fb19b-***-1248fc27ca51","3d2c23d4-***-f6390f325c2d"],"users":["4334***358","Huang***3fa822"]}}',
          ),
        ),
      ),
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
                'example' => 'D8749D65-E80A-433C-AF1B-CE9C180FF3B4',
              ),
              'Result' => 
              array (
                'description' => '接口执行结果。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Cube.Not.Exist',
            'errorMessage' => 'The Cube does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'CubePermission.Columnlevel.VersionError',
            'errorMessage' => 'You are not allowed to use the new dataLevelPermission API.',
          ),
          2 => 
          array (
            'errorCode' => 'RowLevelPermission.SwitchClose.Error',
            'errorMessage' => 'The row level permission switch must be on.',
          ),
          3 => 
          array (
            'errorCode' => 'RowLevelPermission.Rule.NotExsist',
            'errorMessage' => 'The row level permission rule does not exist: %s.',
          ),
          4 => 
          array (
            'errorCode' => 'RowLevelPermission.Rule.NotBelongToCube',
            'errorMessage' => 'The row level permission rule does not belong to the current cube.',
          ),
          5 => 
          array (
            'errorCode' => 'Cube.NotBelongTo.CurrentOrganization',
            'errorMessage' => 'The cube does not belong to the current organization %s.',
          ),
          6 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          7 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          8 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          10 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          11 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          12 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          13 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          14 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          15 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          16 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          17 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          18 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          19 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          20 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          21 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D8749D65-E80A-433C-AF1B-CE9C180FF3B4\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteDataLevelPermissionRuleUsersResponse>\\n    <RequestId>D8749D65-E80A-433C-AF1B-CE9C180FF3B4</RequestId>\\n    <Result>true</Result>\\n    <Success>true</Success>\\n</DeleteDataLevelPermissionRuleUsersResponse>","errorExample":""}]',
      'title' => '删除行列规则的人群',
      'summary' => '针对单条行列权限规则删除选定的人群。',
      'description' => '>：当前接口仅支持Quick BI新版行列权限模型。若您仍在使用老的行列权限，请先一键迁移至新的行列权限模型后再调用该接口。一键迁移至新的行列权限模型的操作步骤：在组织管理-->安全配置-->行列权限升级新版中，单击**一键升级**，升级至新版行级权限。',
    ),
    'UpdateDataLevelPermissionStatus' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CubeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '7c7223ae-****-3c744528014b',
          ),
        ),
        1 => 
        array (
          'name' => 'RuleType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集行列权限类型。取值范围：

- ROW_LEVEL：行级权限
- COLUMN_LEVEL：列级权限',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ROW_LEVEL',
          ),
        ),
        2 => 
        array (
          'name' => 'IsOpen',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '更新行列权限开关状态。取值范围：

- 1：打开
- 0：关闭',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '10',
            'minimum' => '0',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D8749D65-E80A-433C-AF1B-CE9C180FF3B4',
              ),
              'Result' => 
              array (
                'description' => '接口执行结果。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Cube.Not.Exist',
            'errorMessage' => 'The Cube does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'CubePermission.Columnlevel.VersionError',
            'errorMessage' => 'You are not allowed to use the new dataLevelPermission API.',
          ),
          2 => 
          array (
            'errorCode' => 'RowLevelPermission.SwitchClose.Error',
            'errorMessage' => 'The row level permission switch must be on.',
          ),
          3 => 
          array (
            'errorCode' => 'RowLevelPermission.Rule.NotExsist',
            'errorMessage' => 'The row level permission rule does not exist: %s.',
          ),
          4 => 
          array (
            'errorCode' => 'RowLevelPermission.Rule.NotBelongToCube',
            'errorMessage' => 'The row level permission rule does not belong to the current cube.',
          ),
          5 => 
          array (
            'errorCode' => 'Cube.NotBelongTo.CurrentOrganization',
            'errorMessage' => 'The cube does not belong to the current organization %s.',
          ),
          6 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          7 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          8 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          10 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          11 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          12 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          13 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          14 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          15 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          16 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          17 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          18 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          19 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          20 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          21 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D8749D65-E80A-433C-AF1B-CE9C180FF3B4\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UpdateDataLevelPermissionStatusResponse>\\n    <RequestId>D8749D65-E80A-433C-AF1B-CE9C180FF3B4</RequestId>\\n    <Result>true</Result>\\n    <Success>true</Success>\\n</UpdateDataLevelPermissionStatusResponse>","errorExample":""}]',
      'title' => '更新数据集行列权限开关状态',
      'summary' => '更新数据集行列权限开关状态。',
      'description' => '>：当前接口仅支持Quick BI新版行列权限模型。若您仍在使用老的行列权限，请先一键迁移至新的行列权限模型后再调用该接口。一键迁移至新的行列权限模型的操作步骤：在组织管理-->安全配置-->行列权限升级新版中，单击**一键升级**，升级至新版行级权限。',
    ),
    'SetDataLevelPermissionExtraConfig' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CubeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '7c7223ae-******-3c744528014b',
          ),
        ),
        1 => 
        array (
          'name' => 'RuleType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集行列权限类型。取值范围：

- ROW_LEVEL：行级权限
- COLUMN_LEVEL：列级权限',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ROW_LEVEL',
          ),
        ),
        2 => 
        array (
          'name' => 'MissHitPolicy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '未命中规则时的策略：

- NONE：无权限
- ALL：拥有所有权限',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'NONE',
          ),
        ),
      ),
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
                'example' => 'B70E1FBD-E533-52F2-A7A1-E02B92F78DDF',
              ),
              'Result' => 
              array (
                'description' => '接口执行结果。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Cube.Not.Exist',
            'errorMessage' => 'The Cube does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'CubePermission.Columnlevel.VersionError',
            'errorMessage' => 'You are not allowed to use the new dataLevelPermission API.',
          ),
          2 => 
          array (
            'errorCode' => 'RowLevelPermission.SwitchClose.Error',
            'errorMessage' => 'The row level permission switch must be on.',
          ),
          3 => 
          array (
            'errorCode' => 'RowLevelPermission.Rule.NotExsist',
            'errorMessage' => 'The row level permission rule does not exist: %s.',
          ),
          4 => 
          array (
            'errorCode' => 'RowLevelPermission.Rule.NotBelongToCube',
            'errorMessage' => 'The row level permission rule does not belong to the current cube.',
          ),
          5 => 
          array (
            'errorCode' => 'Cube.NotBelongTo.CurrentOrganization',
            'errorMessage' => 'The cube does not belong to the current organization %s.',
          ),
          6 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          7 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          8 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          10 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          11 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          12 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          13 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          14 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          15 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          16 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          17 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          18 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          19 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          20 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          21 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B70E1FBD-E533-52F2-A7A1-E02B92F78DDF\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<SetDataLevelPermissionExtraConfigResponse>\\n    <RequestId>B70E1FBD-E533-52F2-A7A1-E02B92F78DDF</RequestId>\\n    <Result>true</Result>\\n    <Success>true</Success>\\n</SetDataLevelPermissionExtraConfigResponse>","errorExample":""}]',
      'title' => '设置行列权限额外配置',
      'summary' => '设置行列权限的额外配置。',
      'description' => '>：当前接口仅支持Quick BI新版行列权限模型。若您仍在使用老的行列权限，请先一键迁移至新的行列权限模型后再调用该接口。一键迁移至新的行列权限模型的操作步骤：在组织管理-->安全配置-->行列权限升级新版中，单击**一键升级**，升级至新版行级权限。',
    ),
    'SetDataLevelPermissionWhiteList' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WhiteListModel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '{
    "ruleType": "ROW_LEVEL",  // 行级权限类型
    "usersModel": {
            "userGroups": [
                "0d5fb19b-***-1248fc27ca51",  // 用户组ID
                "3d2c23d4-***-f6390f325c2d"
            ],
            "users": [
                "4334***358",  // Quick BI用户的UserID
                "Huang***3fa822"
            ]
    },
    "cubeId": "7c7223ae-31d1-4d2f-b11f-3c744528014b"
}',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"ruleType":"ROW_LEVEL","usersModel":{"userGroups":["26edcb76-****-bdbab78267cb","187e6dd5-1611-4cf7-a034-1a93bd5fecf9"],"users":["4334***358","Huang***3fa822"]},"cubeId":"7c7223ae-****44528014b"}',
          ),
        ),
      ),
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
                'example' => 'D8749D65-E80A-433C-AF1B-CE9C180FF3B4',
              ),
              'Result' => 
              array (
                'description' => '接口执行结果。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Cube.Not.Exist',
            'errorMessage' => 'The Cube does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'CubePermission.Columnlevel.VersionError',
            'errorMessage' => 'You are not allowed to use the new dataLevelPermission API.',
          ),
          2 => 
          array (
            'errorCode' => 'RowLevelPermission.SwitchClose.Error',
            'errorMessage' => 'The row level permission switch must be on.',
          ),
          3 => 
          array (
            'errorCode' => 'RowLevelPermission.Rule.NotExsist',
            'errorMessage' => 'The row level permission rule does not exist: %s.',
          ),
          4 => 
          array (
            'errorCode' => 'RowLevelPermission.Rule.NotBelongToCube',
            'errorMessage' => 'The row level permission rule does not belong to the current cube.',
          ),
          5 => 
          array (
            'errorCode' => 'Cube.NotBelongTo.CurrentOrganization',
            'errorMessage' => 'The cube does not belong to the current organization %s.',
          ),
          6 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          7 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          8 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          10 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          11 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          12 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          13 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          14 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          15 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          16 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          17 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          18 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          19 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          20 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          21 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D8749D65-E80A-433C-AF1B-CE9C180FF3B4\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<SetDataLevelPermissionWhiteListResponse>\\n    <RequestId>D8749D65-E80A-433C-AF1B-CE9C180FF3B4</RequestId>\\n    <Result>true</Result>\\n    <Success>true</Success>\\n</SetDataLevelPermissionWhiteListResponse>","errorExample":""}]',
      'title' => '设置行级权限白名单',
      'summary' => '设置指定行级权限的白名单列表。',
      'description' => '>：当前接口仅支持Quick BI新版行列权限模型。若您仍在使用老的行列权限，请先一键迁移至新的行列权限模型后再调用该接口。一键迁移至新的行列权限模型的操作步骤：在组织管理-->安全配置-->行列权限升级新版中，单击**一键升级**，升级至新版行级权限。',
    ),
    'QueryDatasetSwitchInfo' => 
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
          'name' => 'CubeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '7c7223ae-****-3c744528014b',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FAECEFA8-09BB-58AB-BC58-C8ACEFE4D232',
              ),
              'Result' => 
              array (
                'description' => '数据集行列权限开关详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'IsOpenRowLevelPermission' => 
                  array (
                    'description' => '行级权限开关状态。

- 1：开启
- 0：关闭',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'CubeId' => 
                  array (
                    'description' => '数据集ID。',
                    'type' => 'string',
                    'example' => '7c7223ae-****-3c744528014b',
                  ),
                  'IsOpenColumnLevelPermission' => 
                  array (
                    'description' => '列级字段权限开关状态。取值范围：

- 1：开启
- 0：关闭',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Cube.Not.Exist',
            'errorMessage' => 'The Cube does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'CubePermission.Columnlevel.VersionError',
            'errorMessage' => 'You are not allowed to use the new dataLevelPermission API.',
          ),
          2 => 
          array (
            'errorCode' => 'Cube.NotBelongTo.CurrentOrganization',
            'errorMessage' => 'The cube does not belong to the current organization %s.',
          ),
          3 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          4 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          5 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          7 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          10 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          11 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          12 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          13 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          14 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          15 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          16 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          17 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          18 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"FAECEFA8-09BB-58AB-BC58-C8ACEFE4D232\\",\\n  \\"Result\\": {\\n    \\"IsOpenRowLevelPermission\\": 1,\\n    \\"CubeId\\": \\"7c7223ae-****-3c744528014b\\",\\n    \\"IsOpenColumnLevelPermission\\": 1\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryDatasetSwitchInfoResponse>\\n    <Success>true</Success>\\n    <RequestId>FAECEFA8-09BB-58AB-BC58-C8ACEFE4D232</RequestId>\\n    <Result>\\n        <IsOpenRowLevelPermission>1</IsOpenRowLevelPermission>\\n        <CubeId>7c7223ae-****-3c744528014b</CubeId>\\n        <IsOpenColumnLevelPermission>1</IsOpenColumnLevelPermission>\\n    </Result>\\n</QueryDatasetSwitchInfoResponse>","errorExample":""}]',
      'title' => '获取数据集行级权限开关状态',
      'summary' => '获取指定数据集的行级权限开关状态。',
      'description' => '>：当前接口仅支持Quick BI新版行列权限模型。若您仍在使用老的行列权限，请先一键迁移至新的行列权限模型后再调用该接口。一键迁移至新的行列权限模型的操作步骤：在组织管理-->安全配置-->行列权限升级新版中，单击**一键升级**，升级至新版行级权限。',
    ),
    'ListCubeDataLevelPermissionConfig' => 
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CubeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '7c7223ae-****-3c744528014b',
          ),
        ),
        1 => 
        array (
          'name' => 'RuleType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集行列权限类型。取值范围：

- ROW_LEVEL：行级权限
- COLUMN_LEVEL：列级权限',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ROW_LEVEL',
          ),
        ),
      ),
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
                'example' => 'D8749D65-E80A-433C-AF1B-CE9C180FF3B4',
              ),
              'Result' => 
              array (
                'description' => '{
    "isOpen": 1,
    "extraConfigModel": {           // 额外配置信息
            "ruleType": "ROW_LEVEL",         //行级权限类型
                "missHitPolicy": "NONE",         //命中规则策略：NONE无权限，ALL有权限
            "cubeId": "7c7223ae-31d1-4d2f-b11f-3c744528014b"   //数据集ID
    },
    "ruleType": "ROW_LEVEL",   //行列权限类型  
    "ruleModels": [
        {
                "ruleUsersModel": {      // 针对的人群
                    "userGroups": [
                                        "0d5fb19b-****-1248fc27ca51",  // 用户组ID
                                        "4aa3f089-****-85f0-0e8ac7c2dee9"
                                    ],
                    "users": [
                                        "HuangJia***2e3fa822",   // 用户的UserID
                                        "4334***84358"
                                    ]
                 },
            "ruleContentModel": {
                "ruleContentType": "ROW_FIELD",   //行列权限类型
                "ruleContentJson": "{\\"conditionNode\\":{\\"caption\\":\\"周期\\",\\"isMeasure\\":false,\\"pathId\\":\\"7d3b073bc6\\",\\"relationOperator\\":\\"not-null\\",\\"name\\":\\"7d3b073bc6\\",\\"value\\":{\\"value\\":[\\"\\"],\\"valueType\\":\\"ENUM\\"}}}",             //行列权限规则的JSON串
                "ruleOriginConfigJson": "{\\"operator\\":\\"and\\",\\"operands\\":[{\\"labelName\\":\\"周期\\",\\"isValid\\":true,\\"uniqueId\\":\\"5\\",\\"fieldId\\":\\"7d3b073bc6\\",\\"error\\":false,\\"fieldType\\":\\"string\\",\\"defaultValue\\":{\\"selectType\\":\\"condition\\",\\"value\\":{\\"conditionOp\\":\\"not-null\\",\\"conditionValue\\":\\"\\"},\\"valueType\\":\\"ENUM\\"}}],\\"isRelation\\":true}"
            },              //前端需求的固定格式JSON串
            "isOpen": 1,    // 行列权限配置的开关状态   1.开启  0.关闭
            "hitTakeEffect": 1,  // 针对列级权限，命中后规则是否生效  1生效、0不生效。
            "ruleName": "测试行级权限_勿删",   // 行列权限规则的名称
            "ruleLevelType": "ROW_LEVEL",   //行列权限类型
            "ruleId": "a5bb24da-772f-45e8-a43c-a891683e14da",   // 行列权限规则的ID
            "cubeId": "7c7223ae-31d1-4d2f-b11f-3c744528014b",  // 数据集ID
            "ruleTargetScope": "OTHERS"      规则生效范围：ALL所有人、OTHERS指定人
        }
    ],
    "cubeId": "7c7223ae-31d1-4d2f-b11f-3c744528014b"   // 数据集ID
}',
                'type' => 'string',
                'example' => '行列权限列表的JSON串，详情见描述。',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Cube.Not.Exist',
            'errorMessage' => 'The Cube does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'CubePermission.Columnlevel.VersionError',
            'errorMessage' => 'You are not allowed to use the new dataLevelPermission API.',
          ),
          2 => 
          array (
            'errorCode' => 'RowLevelPermission.SwitchClose.Error',
            'errorMessage' => 'The row level permission switch must be on.',
          ),
          3 => 
          array (
            'errorCode' => 'RowLevelPermission.Rule.NotExsist',
            'errorMessage' => 'The row level permission rule does not exist: %s.',
          ),
          4 => 
          array (
            'errorCode' => 'RowLevelPermission.Rule.NotBelongToCube',
            'errorMessage' => 'The row level permission rule does not belong to the current cube.',
          ),
          5 => 
          array (
            'errorCode' => 'Cube.NotBelongTo.CurrentOrganization',
            'errorMessage' => 'The cube does not belong to the current organization %s.',
          ),
          6 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          7 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          8 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          10 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          11 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          12 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          13 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          14 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          15 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          16 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          17 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          18 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          19 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          20 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          21 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D8749D65-E80A-433C-AF1B-CE9C180FF3B4\\",\\n  \\"Result\\": \\"行列权限列表的JSON串，详情见描述。\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ListCubeDataLevelPermissionConfigResponse>\\n    <RequestId>D8749D65-E80A-433C-AF1B-CE9C180FF3B4</RequestId>\\n    <Result>行列权限列表的JSON串，详情见描述。</Result>\\n    <Success>true</Success>\\n</ListCubeDataLevelPermissionConfigResponse>","errorExample":""}]',
      'title' => '获取数据集行列权限配置列表',
      'summary' => '获取指定数据集的行列权限配置列表。',
      'description' => '>：当前接口仅支持Quick BI新版行列权限模型。若您仍在使用老的行列权限，请先一键迁移至新的行列权限模型后再调用该接口。一键迁移至新的行列权限模型的操作步骤：在组织管理-->安全配置-->行列权限升级新版中，单击**一键升级**，升级至新版行级权限。',
    ),
    'ListDataLevelPermissionWhiteList' => 
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CubeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '3d5db23c-e4f2-49dd-a883-92285b48e14a',
          ),
        ),
        1 => 
        array (
          'name' => 'RuleType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '白名单所属的行列权限类型：

- ROW_LEVEL：行级权限
- COLUMN_LEVEL：列级权限',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ROW_LEVEL',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D8749D65-E80A-433C-AF1B-CE9C180FF3B4',
              ),
              'Result' => 
              array (
                'description' => '指定行级权限类型的白名单列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'CubeId' => 
                  array (
                    'description' => '数据集ID。',
                    'type' => 'string',
                    'example' => '7c7223ae-****-3c744528014b',
                  ),
                  'RuleType' => 
                  array (
                    'description' => '数据集行列权限类型。取值范围：

- ROW_LEVEL：行级权限
- COLUMN_LEVEL：列级权限',
                    'type' => 'string',
                    'example' => 'ROW_LEVEL',
                  ),
                  'UsersModel' => 
                  array (
                    'description' => '白名单信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'UserGroups' => 
                      array (
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '用户组ID。',
                          'type' => 'string',
                          'example' => '0d5fb19b-***-1248fc27ca51',
                        ),
                      ),
                      'Users' => 
                      array (
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => 'Quick BI用户的UserID。',
                          'type' => 'string',
                          'example' => '4334***358',
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
            'errorCode' => 'Cube.Not.Exist',
            'errorMessage' => 'The Cube does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'CubePermission.Columnlevel.VersionError',
            'errorMessage' => 'You are not allowed to use the new dataLevelPermission API.',
          ),
          2 => 
          array (
            'errorCode' => 'RowLevelPermission.SwitchClose.Error',
            'errorMessage' => 'The row level permission switch must be on.',
          ),
          3 => 
          array (
            'errorCode' => 'RowLevelPermission.Rule.NotExsist',
            'errorMessage' => 'The row level permission rule does not exist: %s.',
          ),
          4 => 
          array (
            'errorCode' => 'RowLevelPermission.Rule.NotBelongToCube',
            'errorMessage' => 'The row level permission rule does not belong to the current cube.',
          ),
          5 => 
          array (
            'errorCode' => 'Cube.NotBelongTo.CurrentOrganization',
            'errorMessage' => 'The cube does not belong to the current organization %s.',
          ),
          6 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          7 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          9 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          10 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          11 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          12 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          13 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          14 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          15 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          16 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          17 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          18 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          19 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          20 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"D8749D65-E80A-433C-AF1B-CE9C180FF3B4\\",\\n  \\"Result\\": {\\n    \\"CubeId\\": \\"7c7223ae-****-3c744528014b\\",\\n    \\"RuleType\\": \\"ROW_LEVEL\\",\\n    \\"UsersModel\\": {\\n      \\"UserGroups\\": [\\n        \\"0d5fb19b-***-1248fc27ca51\\"\\n      ],\\n      \\"Users\\": [\\n        \\"4334***358\\"\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListDataLevelPermissionWhiteListResponse>\\n    <Success>true</Success>\\n    <RequestId>D8749D65-E80A-433C-AF1B-CE9C180FF3B4</RequestId>\\n    <Result>\\n        <CubeId>7c7223ae-****-3c744528014b</CubeId>\\n        <RuleType>ROW_LEVEL</RuleType>\\n        <UsersModel>\\n            <UserGroups>0d5fb19b-***-1248fc27ca51</UserGroups>\\n            <Users>4334***358</Users>\\n        </UsersModel>\\n    </Result>\\n</ListDataLevelPermissionWhiteListResponse>","errorExample":""}]',
      'title' => '获取数据集行列权限白名单列表',
      'summary' => '根据行列权限种类，获取数据集行列权限的白名单列表。',
      'description' => '>：当前接口仅支持Quick BI新版行列权限模型。若您仍在使用老的行列权限，请先一键迁移至新的行列权限模型后再调用该接口。一键迁移至新的行列权限模型的操作步骤：在组织管理-->安全配置-->行列权限升级新版中，单击**一键升级**，升级至新版行级权限。',
    ),
    'AddUserToWorkspace' => 
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
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WorkspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '95296e95-ca89-4c7d-8af9-dedf0ad0****',
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '被添加的Quick BI用户ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'de4bc5f9429141cc8091cdd1c15b****',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预置空间角色ID。取值范围：
- 25：空间管理员
- 26：空间开发者
- 27：空间分析师
- 30：空间查看者',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '30',
            'minimum' => '25',
            'example' => '25',
            'enum' => 
            array (
              0 => '25',
              1 => '26',
              2 => '27',
              3 => '30',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'description' => '返回接口执行结果。取值范围：

- true：执行成功
- false：执行失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Workspace.NotIn.Organization',
            'errorMessage' => 'The workspace is not owned by the organization.',
          ),
          1 => 
          array (
            'errorCode' => 'User.RoleType.Valid',
            'errorMessage' => 'The role ID is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'Workspace.Not.Exist',
            'errorMessage' => 'The group workspace does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'Workspace.Type.Error',
            'errorMessage' => 'The type of group workspace is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          5 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          6 => 
          array (
            'errorCode' => 'Viewer.AddInTo.Workspace',
            'errorMessage' => 'Organization members with viewer type are not allowed to add to workspace: %s.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.User.Organization',
            'errorMessage' => 'The user is not in your organization.',
          ),
          8 => 
          array (
            'errorCode' => 'User.AlreadyIn.Workspace',
            'errorMessage' => 'This user already exists.',
          ),
          9 => 
          array (
            'errorCode' => 'User.AlreadyIn.Role',
            'errorMessage' => 'The user is already assigned this role.',
          ),
          10 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          11 => 
          array (
            'errorCode' => 'AnalystUser.NotSupport.AdminOrDevRole',
            'errorMessage' => 'Analyst users do not support granting workspace administrator or developer roles.',
          ),
          12 => 
          array (
            'errorCode' => 'UserAnalyst.NotSupport.ThisRole',
            'errorMessage' => 'This role has permissions that analysts cannot grant.',
          ),
          13 => 
          array (
            'errorCode' => 'Viewer.CannotHave.CustomRole',
            'errorMessage' => 'Organization viewer cannot have custom roles.',
          ),
          14 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          15 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          16 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          17 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          18 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          19 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          20 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          21 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          22 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          23 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          24 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          25 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<AddUserToWorkspaceResponse>\\n    <RequestId>D787E1A3-A93C-424A-B626-C2B05DF8D885</RequestId>\\n    <Result>true</Result>\\n    <Success>true</Success>\\n</AddUserToWorkspaceResponse>","errorExample":""}]',
      'title' => '添加成员到工作空间',
      'summary' => '添加成员到指定工作空间。',
    ),
    'AddWorkspaceUsers' => 
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
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WorkspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '95296e95-ca89-4c7d-8af9-dedf0ad0****',
          ),
        ),
        1 => 
        array (
          'name' => 'UserIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户ID。此处为Quick BI的UserID，而非阿里云的UID。

- 支持批量传参，用户ID之间用半角逗号（,）隔开。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'de4bc5f9429141cc8091cdd1c15b****',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预置空间角色ID。取值范围：
- 25：空间管理员
- 26：空间开发者
- 27：空间分析师
- 30：空间查看者',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '30',
            'minimum' => '25',
            'example' => '25',
            'enum' => 
            array (
              0 => '25',
              1 => '26',
              2 => '27',
              3 => '30',
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
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：
- true：请求成功，存在添加部分成员成功，部分失败的情况，添加失败的原因参考返回结果中的FailureDetail
- false：请求失败，不会持久化任何数据',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7AAB95D7-2E11-4FE2-94BC-858E4FC0C976',
              ),
              'Result' => 
              array (
                'description' => '返回接口执行结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'Failure' => 
                  array (
                    'description' => '添加失败的用户数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'FailureDetail' => 
                  array (
                    'description' => '添加失败的原因。',
                    'type' => 'object',
                    'example' => '{"2046274934845893" : "AE0150010001: This user already exists.", "1213444447906552" : "AE0150010001: This user already exists."}',
                  ),
                  'Total' => 
                  array (
                    'description' => '添加用户的总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'Success' => 
                  array (
                    'description' => '添加成功的用户数。',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Workspace.NotIn.Organization',
            'errorMessage' => 'The workspace is not owned by the organization.',
          ),
          1 => 
          array (
            'errorCode' => 'User.RoleType.Valid',
            'errorMessage' => 'The role ID is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          3 => 
          array (
            'errorCode' => 'Viewer.CannotHave.CustomRole',
            'errorMessage' => 'Organization viewer cannot have custom roles.',
          ),
          4 => 
          array (
            'errorCode' => 'UserAnalyst.NotSupport.ThisRole',
            'errorMessage' => 'This role has permissions that analysts cannot grant.',
          ),
          5 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          6 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          8 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          10 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          11 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          13 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          14 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          15 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          16 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          17 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          18 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          19 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Workspace.Not.Exist',
            'errorMessage' => 'The group workspace does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'Viewer.AddInTo.Workspace',
            'errorMessage' => 'Organization members with viewer type are not allowed to add to workspace: %s.',
          ),
          3 => 
          array (
            'errorCode' => 'User.AlreadyIn.Workspace',
            'errorMessage' => 'This user already exists.',
          ),
          4 => 
          array (
            'errorCode' => 'User.AlreadyIn.Role',
            'errorMessage' => 'The user is already assigned this role.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"7AAB95D7-2E11-4FE2-94BC-858E4FC0C976\\",\\n  \\"Result\\": {\\n    \\"Failure\\": 2,\\n    \\"FailureDetail\\": {\\n      \\"2046274934845893\\": \\"AE0150010001: This user already exists.\\",\\n      \\"1213444447906552\\": \\"AE0150010001: This user already exists.\\"\\n    },\\n    \\"Total\\": 3,\\n    \\"Success\\": 1\\n  }\\n}","type":"json"}]',
      'title' => '批量添加成员到工作空间',
      'summary' => '批量添加成员到工作空间。',
    ),
    'DeleteUserFromWorkspace' => 
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WorkspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '95296e95-ca89-4c7d-8af9-dedf0ad0****',
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待删除的用户ID。此处的用户ID为Quick BI的UserID，而非阿里云的UID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'de4bc5f9429141cc8091cdd1c15b****',
          ),
        ),
      ),
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
                'example' => 'DC4E1E63-B337-44F8-8C22-6F00DF67E2C3',
              ),
              'Result' => 
              array (
                'description' => '返回接口执行结果。取值范围：

- true：执行成功
- false：执行失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Workspace.NotIn.Organization',
            'errorMessage' => 'The workspace is not owned by the organization.',
          ),
          1 => 
          array (
            'errorCode' => 'Workspace.Not.Exist',
            'errorMessage' => 'The group workspace does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          3 => 
          array (
            'errorCode' => 'Workspace.Type.Error',
            'errorMessage' => 'The type of group workspace is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'CanNot.Remove.WorkspaceOwner',
            'errorMessage' => 'You cannot remove the group workspace owner from the group.',
          ),
          5 => 
          array (
            'errorCode' => 'User.NotIn.Workspace',
            'errorMessage' => 'The user is not a member of the group workspace.',
          ),
          6 => 
          array (
            'errorCode' => 'Cannot.TransferTo.Owner',
            'errorMessage' => 'You cannot transfer an item to its current owner.',
          ),
          7 => 
          array (
            'errorCode' => 'Works.Transfer.Error',
            'errorMessage' => 'You are not authorized to transfer this item.',
          ),
          8 => 
          array (
            'errorCode' => 'Transfer.TargetUser.NotExist',
            'errorMessage' => 'The new owner does not exist. Please ensure that the target user has logged on to the system.',
          ),
          9 => 
          array (
            'errorCode' => 'PersonalWorkspace.NotSupport.AllTransfer',
            'errorMessage' => 'Personal workspaces cannot be transferred.',
          ),
          10 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          11 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          12 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          13 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          14 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          15 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          16 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          17 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          18 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          19 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          20 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          21 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          22 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          23 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          24 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DC4E1E63-B337-44F8-8C22-6F00DF67E2C3\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteUserFromWorkspaceResponse>\\n    <RequestId>DC4E1E63-B337-44F8-8C22-6F00DF67E2C3</RequestId>\\n    <Result>true</Result>\\n    <Success>true</Success>\\n</DeleteUserFromWorkspaceResponse>","errorExample":""}]',
      'title' => '删除工作空间成员',
      'summary' => '删除指定工作空间的成员。',
    ),
    'UpdateWorkspaceUsersRole' => 
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WorkspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '95296e95-ca89-4c7d-8af9-dedf0ad0****',
          ),
        ),
        1 => 
        array (
          'name' => 'UserIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户ID。此处为Quick BI的UserID，而非阿里云的UID。

- 支持批量传参，用户ID之间用半角逗号（,）隔开。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '136516262323****,124498444445****',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预置空间角色ID，已有角色会被覆盖。取值范围：
- 25：空间管理员
- 26：空间开发者
- 27：空间分析师
- 30：空间查看者',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '30',
            'minimum' => '25',
            'example' => '25',
            'enum' => 
            array (
              0 => '25',
              1 => '26',
              2 => '27',
              3 => '30',
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
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功，存在部分成员修改成功，部分修改失败的情况，失败的原因参考返回结果中的FailureDetail
- false：请求失败，不会持久化任何数据',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7AAB95D7-2E11-4FE2-94BC-858E4FC0C976',
              ),
              'Result' => 
              array (
                'description' => '返回接口执行结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'Failure' => 
                  array (
                    'description' => '修改失败的用户数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'FailureDetail' => 
                  array (
                    'description' => '修改失败的原因。',
                    'type' => 'object',
                  ),
                  'Total' => 
                  array (
                    'description' => '修改用户的总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'Success' => 
                  array (
                    'description' => '修改成功的用户数。',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Workspace.NotIn.Organization',
            'errorMessage' => 'The workspace is not owned by the organization.',
          ),
          1 => 
          array (
            'errorCode' => 'User.RoleType.Valid',
            'errorMessage' => 'The role ID is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'Workspace.Not.Exist',
            'errorMessage' => 'The group workspace does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'Workspace.Type.Error',
            'errorMessage' => 'The type of group workspace is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          5 => 
          array (
            'errorCode' => 'Remove.AdminRoleOf.WorkspaceOwner',
            'errorMessage' => 'The owner of the group workspace must be assigned the administrator role.',
          ),
          6 => 
          array (
            'errorCode' => 'User.NotIn.Workspace',
            'errorMessage' => 'The user is not a member of the group workspace.',
          ),
          7 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          8 => 
          array (
            'errorCode' => 'AnalystUser.NotSupport.AdminOrDevRole',
            'errorMessage' => 'Analyst users do not support granting workspace administrator or developer roles.',
          ),
          9 => 
          array (
            'errorCode' => 'Viewer.CannotHave.CustomRole',
            'errorMessage' => 'Organization viewer cannot have custom roles.',
          ),
          10 => 
          array (
            'errorCode' => 'UserAnalyst.NotSupport.ThisRole',
            'errorMessage' => 'This role has permissions that analysts cannot grant.',
          ),
          11 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          12 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          13 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          14 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          15 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          16 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          17 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          18 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          19 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          20 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          21 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          22 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          23 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          24 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"7AAB95D7-2E11-4FE2-94BC-858E4FC0C976\\",\\n  \\"Result\\": {\\n    \\"Failure\\": 0,\\n    \\"FailureDetail\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"Total\\": 2,\\n    \\"Success\\": 2\\n  }\\n}","errorExample":""},{"type":"xml","example":"<UpdateWorkspaceUsersRoleResponse>\\n    <Success>true</Success>\\n    <RequestId>7AAB95D7-2E11-4FE2-94BC-858E4FC0C976</RequestId>\\n    <Result>\\n        <Failure>0</Failure>\\n        <Total>2</Total>\\n        <Success>2</Success>\\n    </Result>\\n</UpdateWorkspaceUsersRoleResponse>","errorExample":""}]',
      'title' => '批量更新工作空间成员的角色',
      'summary' => '批量更新工作空间成员的角色信息，已有角色会被覆盖。',
    ),
    'UpdateWorkspaceUserRole' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WorkspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '95296e95-ca89-4c7d-8af9-dedf0ad0****',
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Quick BI用户ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'f5698bedeb384b1986afccd9e434****',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预置空间角色ID，已有角色会被覆盖。取值范围：
- 25：空间管理员
- 26：空间开发者
- 27：空间分析师
- 30：空间查看者',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '30',
            'minimum' => '25',
            'example' => '25',
            'enum' => 
            array (
              0 => '25',
              1 => '26',
              2 => '27',
              3 => '30',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'description' => '返回接口执行结果。取值范围：

- true：执行成功
- false：执行失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Workspace.NotIn.Organization',
            'errorMessage' => 'The workspace is not owned by the organization.',
          ),
          1 => 
          array (
            'errorCode' => 'Workspace.Not.Exist',
            'errorMessage' => 'The group workspace does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'Workspace.Type.Error',
            'errorMessage' => 'The type of group workspace is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          4 => 
          array (
            'errorCode' => 'User.NotIn.Workspace',
            'errorMessage' => 'The user is not a member of the group workspace.',
          ),
          5 => 
          array (
            'errorCode' => 'Remove.AdminRoleOf.WorkspaceOwner',
            'errorMessage' => 'The owner of the group workspace must be assigned the administrator role.',
          ),
          6 => 
          array (
            'errorCode' => 'User.RoleType.Valid',
            'errorMessage' => 'The role ID is invalid.',
          ),
          7 => 
          array (
            'errorCode' => 'User.AlreadyIn.Role',
            'errorMessage' => 'The user is already assigned this role.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          9 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          10 => 
          array (
            'errorCode' => 'AnalystUser.NotSupport.AdminOrDevRole',
            'errorMessage' => 'Analyst users do not support granting workspace administrator or developer roles.',
          ),
          11 => 
          array (
            'errorCode' => 'UserAnalyst.NotSupport.ThisRole',
            'errorMessage' => 'This role has permissions that analysts cannot grant.',
          ),
          12 => 
          array (
            'errorCode' => 'Viewer.CannotHave.CustomRole',
            'errorMessage' => 'Organization viewer cannot have custom roles.',
          ),
          13 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          14 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          15 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          16 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          17 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          18 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          19 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          20 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          21 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          22 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          23 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          24 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          25 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UpdateWorkspaceUserRoleResponse>\\n    <RequestId>D787E1A3-A93C-424A-B626-C2B05DF8D885</RequestId>\\n    <Result>true</Result>\\n    <Success>true</Success>\\n</UpdateWorkspaceUserRoleResponse>","errorExample":""}]',
      'title' => '修改工作空间成员角色',
      'summary' => '修改工作空间下指定成员的角色，已有的角色会被覆盖。',
    ),
    'QueryWorkspaceUserList' => 
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
          'name' => 'WorkspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '95296e95-ca89-4c7d-8af9-dedf0ad0****',
          ),
        ),
        1 => 
        array (
          'name' => 'Keyword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间成员用户名的关键字。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '分析',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间成员列表的当前页码：

- 起始值：1
- 默认值：1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'maximum' => '1000000',
            'minimum' => '1',
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
            'description' => '分页查询时的每页行数：

- 默认值：10
- 最大值：1000',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'maximum' => '1000',
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
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'description' => '返回成员列表的分页结果，成员的详细信息列表存放在返回参数Data中。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalPages' => 
                  array (
                    'description' => '总页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageNum' => 
                  array (
                    'description' => '页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '请求接口时设置的每页行数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'TotalNum' => 
                  array (
                    'description' => '总行数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Data' => 
                  array (
                    'description' => '空间成员信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'UserId' => 
                        array (
                          'description' => 'Quick BI用户ID。',
                          'type' => 'string',
                          'example' => 'de4bc5f9429141cc8091cdd1c15b****',
                        ),
                        'AccountId' => 
                        array (
                          'description' => '阿里云账号ID。',
                          'type' => 'string',
                          'example' => '16020915****8429',
                        ),
                        'NickName' => 
                        array (
                          'description' => '昵称。',
                          'type' => 'string',
                          'example' => '我就是那个分析师大神',
                        ),
                        'AccountName' => 
                        array (
                          'description' => '阿里云账号名称。',
                          'type' => 'string',
                          'example' => 'pop****@aliyunid.test',
                        ),
                        'Role' => 
                        array (
                          'description' => '空间成员的预置空间角色信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'RoleCode' => 
                            array (
                              'description' => '预置角色对应的编码。',
                              'type' => 'string',
                              'example' => 'role_workspace_admin',
                            ),
                            'RoleName' => 
                            array (
                              'description' => '预置角色的名称。',
                              'type' => 'string',
                              'example' => '管理员',
                            ),
                            'RoleId' => 
                            array (
                              'description' => '预置角色ID。取值范围：

- 25：空间管理员
- 26：空间开发者
- 27：空间分析师
- 30：空间查看者',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '25',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Workspace.NotIn.Organization',
            'errorMessage' => 'The workspace is not owned by the organization.',
          ),
          1 => 
          array (
            'errorCode' => 'Workspace.Not.Exist',
            'errorMessage' => 'The group workspace does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'Invalid.User.Organization',
            'errorMessage' => 'The user is not in your organization.',
          ),
          3 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          4 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          5 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          10 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          11 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          12 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          13 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          14 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          15 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          16 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          17 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": {\\n    \\"TotalPages\\": 1,\\n    \\"PageNum\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"TotalNum\\": 1,\\n    \\"Data\\": [\\n      {\\n        \\"UserId\\": \\"de4bc5f9429141cc8091cdd1c15b****\\",\\n        \\"AccountId\\": \\"16020915****8429\\",\\n        \\"NickName\\": \\"我就是那个分析师大神\\",\\n        \\"AccountName\\": \\"pop****@aliyunid.test\\",\\n        \\"Role\\": {\\n          \\"RoleCode\\": \\"role_workspace_admin\\",\\n          \\"RoleName\\": \\"管理员\\",\\n          \\"RoleId\\": 25\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryWorkspaceUserListResponse>\\n    <Success>true</Success>\\n    <RequestId>D787E1A3-A93C-424A-B626-C2B05DF8D885</RequestId>\\n    <Result>\\n        <TotalPages>1</TotalPages>\\n        <PageNum>1</PageNum>\\n        <PageSize>10</PageSize>\\n        <TotalNum>1</TotalNum>\\n        <Data>\\n            <UserId>de4bc5f9429141cc8091cdd1c15b****</UserId>\\n            <AccountId>16020915****8429</AccountId>\\n            <NickName>我就是那个分析师大神</NickName>\\n            <AccountName>pop****@aliyunid.test</AccountName>\\n            <Role>\\n                <RoleCode>role_workspace_admin</RoleCode>\\n                <RoleName>管理员</RoleName>\\n                <RoleId>25</RoleId>\\n            </Role>\\n        </Data>\\n    </Result>\\n</QueryWorkspaceUserListResponse>","errorExample":""}]',
      'title' => '查询工作空间下的成员列表',
      'summary' => '查询指定工作空间下的成员列表信息。',
    ),
    'QueryOrganizationWorkspaceList' => 
    array (
      'summary' => '获取当前组织下的工作空间列表信息。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Keyword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '空间名称的关键字。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '程序',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间列表的当前页码：

- 起始值：1
- 默认值：1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'maximum' => '1000000',
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
            'description' => '分页查询时的每页行数：

- 默认值：10
- 最大值：1000',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'maximum' => '1000',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户在Quick BI的ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'fe67f61a35a94b7da1a34ba174a7****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'description' => '返回工作空间列表的分页结果，工作空间的详细信息列表存放在返回参数Data中。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalPages' => 
                  array (
                    'description' => '总页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageNum' => 
                  array (
                    'description' => '页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '请求接口时设置的每页行数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'TotalNum' => 
                  array (
                    'description' => '总行数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Data' => 
                  array (
                    'description' => '工作空间列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CreateUserAccountName' => 
                        array (
                          'description' => '创建者的阿里云账号名称。',
                          'type' => 'string',
                          'example' => 'pop****@aliyun.com',
                        ),
                        'Owner' => 
                        array (
                          'description' => '工作空间所有者的Quick BI用户ID。',
                          'type' => 'string',
                          'example' => 'de4bc5f9429141cc8091cdd1c15b****',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '工作空间创建时间。',
                          'type' => 'string',
                          'example' => '2020-11-10 17:51:07',
                        ),
                        'WorkspaceName' => 
                        array (
                          'description' => '工作空间名称。',
                          'type' => 'string',
                          'example' => '测试空间',
                        ),
                        'OrganizationId' => 
                        array (
                          'description' => '工作空间的所属组织ID。',
                          'type' => 'string',
                          'example' => '2fe4fbd8-588f-489a-b3e1-e92c7af0****',
                        ),
                        'WorkspaceId' => 
                        array (
                          'description' => '工作空间ID。',
                          'type' => 'string',
                          'example' => '7350a155-0e94-4c6c-8620-57bbec38****',
                        ),
                        'AllowShareOperation' => 
                        array (
                          'description' => '作品是否可授权分享。取值范围：

- true：授权
- false：不授权',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'CreateUser' => 
                        array (
                          'description' => '创建者的Quick BI用户ID。',
                          'type' => 'string',
                          'example' => 'de4bc5f9429141cc8091cdd1c15b****',
                        ),
                        'ModifiedTime' => 
                        array (
                          'description' => '工作空间最新修改时间。',
                          'type' => 'string',
                          'example' => '2020-11-10 17:51:07',
                        ),
                        'WorkspaceDescription' => 
                        array (
                          'description' => '工作空间备注。',
                          'type' => 'string',
                          'example' => '该空间是测试空间',
                        ),
                        'ModifyUser' => 
                        array (
                          'description' => '修改者的Quick BI用户ID。',
                          'type' => 'string',
                          'example' => 'de4bc5f9429141cc8091cdd1c15b****',
                        ),
                        'AllowPublishOperation' => 
                        array (
                          'description' => '作品是否可公开。取值范围：

- true：公开
- false：不公开',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'OwnerAccountName' => 
                        array (
                          'description' => '工作空间所有者阿里云账号名称。',
                          'type' => 'string',
                          'example' => 'pop****@aliyun.com',
                        ),
                        'ModifyUserAccountName' => 
                        array (
                          'description' => '修改者的阿里云账号名。',
                          'type' => 'string',
                          'example' => 'pop****@aliyun.com',
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
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          5 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          9 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          10 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          11 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          13 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          14 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          15 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": {\\n    \\"TotalPages\\": 1,\\n    \\"PageNum\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"TotalNum\\": 1,\\n    \\"Data\\": [\\n      {\\n        \\"CreateUserAccountName\\": \\"pop****@aliyun.com\\",\\n        \\"Owner\\": \\"de4bc5f9429141cc8091cdd1c15b****\\",\\n        \\"CreateTime\\": \\"2020-11-10 17:51:07\\",\\n        \\"WorkspaceName\\": \\"测试空间\\",\\n        \\"OrganizationId\\": \\"2fe4fbd8-588f-489a-b3e1-e92c7af0****\\",\\n        \\"WorkspaceId\\": \\"7350a155-0e94-4c6c-8620-57bbec38****\\",\\n        \\"AllowShareOperation\\": true,\\n        \\"CreateUser\\": \\"de4bc5f9429141cc8091cdd1c15b****\\",\\n        \\"ModifiedTime\\": \\"2020-11-10 17:51:07\\",\\n        \\"WorkspaceDescription\\": \\"该空间是测试空间\\",\\n        \\"ModifyUser\\": \\"de4bc5f9429141cc8091cdd1c15b****\\",\\n        \\"AllowPublishOperation\\": true,\\n        \\"OwnerAccountName\\": \\"pop****@aliyun.com\\",\\n        \\"ModifyUserAccountName\\": \\"pop****@aliyun.com\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryOrganizationWorkspaceListResponse>\\n    <Result>\\n        <TotalPages>1</TotalPages>\\n        <PageNum>1</PageNum>\\n        <PageSize>10</PageSize>\\n        <TotalNum>1</TotalNum>\\n        <Data>\\n            <CreateUserAccountName>pop****@aliyun.com</CreateUserAccountName>\\n            <Owner>de4bc5f9429141cc8091cdd1c15b****</Owner>\\n            <CreateTime>2020-11-10 17:51:07</CreateTime>\\n            <WorkspaceName>测试空间</WorkspaceName>\\n            <OrganizationId>2fe4fbd8-588f-489a-b3e1-e92c7af0****</OrganizationId>\\n            <WorkspaceId>7350a155-0e94-4c6c-8620-57bbec38****</WorkspaceId>\\n            <AllowShareOperation>true</AllowShareOperation>\\n            <CreateUser>de4bc5f9429141cc8091cdd1c15b****</CreateUser>\\n            <ModifiedTime>2020-11-10 17:51:07</ModifiedTime>\\n            <WorkspaceDescription>该空间是测试空间</WorkspaceDescription>\\n            <ModifyUser>de4bc5f9429141cc8091cdd1c15b****</ModifyUser>\\n            <AllowPublishOperation>true</AllowPublishOperation>\\n            <OwnerAccountName>pop****@aliyun.com</OwnerAccountName>\\n            <ModifyUserAccountName>pop****@aliyun.com</ModifyUserAccountName>\\n        </Data>\\n    </Result>\\n</QueryOrganizationWorkspaceListResponse>","errorExample":""}]',
      'title' => '获取组织下的工作空间列表',
    ),
    'QueryUserRoleInfoInWorkspace' => 
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
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Quick BI用户ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'f5698bedeb384b1986afccd9e434****',
          ),
        ),
        1 => 
        array (
          'name' => 'WorkspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '95296e95-ca89-4c7d-8af9-dedf0ad0****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'description' => '用户的预置空间角色信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'RoleCode' => 
                  array (
                    'description' => '预置角色编码。',
                    'type' => 'string',
                    'example' => 'role_workspace_admin',
                  ),
                  'RoleName' => 
                  array (
                    'description' => '预置角色名称。',
                    'type' => 'string',
                    'example' => '空间管理员',
                  ),
                  'RoleId' => 
                  array (
                    'description' => '预置角色ID。取值范围：
- 25：空间管理员
- 26：空间开发者
- 27：空间分析师
- 30：空间查看者',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '25',
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
            'errorCode' => 'Workspace.NotIn.Organization',
            'errorMessage' => 'The workspace is not owned by the organization.',
          ),
          1 => 
          array (
            'errorCode' => 'Workspace.Not.Exist',
            'errorMessage' => 'The group workspace does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'User.RoleType.Valid',
            'errorMessage' => 'The role ID is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'User.NotIn.Workspace',
            'errorMessage' => 'The user is not a member of the group workspace.',
          ),
          4 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          5 => 
          array (
            'errorCode' => 'User.PresetWorkspaceRole.NotExist',
            'errorMessage' => 'User does not have a predefined workspace role.',
          ),
          6 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          7 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          9 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          10 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          11 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          12 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          13 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          14 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          15 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          16 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          17 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          18 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          19 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          20 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": {\\n    \\"RoleCode\\": \\"role_workspace_admin\\",\\n    \\"RoleName\\": \\"空间管理员\\",\\n    \\"RoleId\\": 25\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryUserRoleInfoInWorkspaceResponse>\\n    <Success>true</Success>\\n    <RequestId>D787E1A3-A93C-424A-B626-C2B05DF8D885</RequestId>\\n    <Result>\\n        <RoleCode>role_workspace_admin</RoleCode>\\n        <RoleName>管理员</RoleName>\\n        <RoleId>25</RoleId>\\n    </Result>\\n</QueryUserRoleInfoInWorkspaceResponse>","errorExample":""}]',
      'title' => '查询工作空间成员的预置角色',
      'summary' => '获取指定工作空间成员的预置空间角色信息。',
    ),
    'UpdateEmbeddedStatus' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WorksId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '作品ID。

- 支持批量修改，用半角逗号（,）分割。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '897ce25e-f993-4abd-af84-d13c5610****',
          ),
        ),
        1 => 
        array (
          'name' => 'ThirdPartAuthFlag',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开通作品的嵌入功能。取值范围：

- true：开通嵌入
- false：关闭嵌入',
            'type' => 'boolean',
            'required' => true,
            'docRequired' => true,
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
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'description' => '开通或关闭的作品数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Auth3Rd.Over.MaxQuota',
            'errorMessage' => 'You have reached the maximum number of reports that can be shared. Please upgrade the configurations or remove some reports first.',
          ),
          1 => 
          array (
            'errorCode' => 'Resource.NotBelongTo.CurrentOrganization',
            'errorMessage' => 'The resource does not belong to the current organization.',
          ),
          2 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          3 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          4 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          6 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          10 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          11 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          12 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          13 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          14 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          15 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          16 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          17 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": 1,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UpdateEmbeddedStatusResponse>\\n    <RequestId>D787E1A3-A93C-424A-B626-C2B05DF8D885</RequestId>\\n    <Result>1</Result>\\n    <Success>true</Success>\\n</UpdateEmbeddedStatusResponse>","errorExample":""}]',
      'title' => '更改报表的嵌入状态',
      'summary' => '更改报表的嵌入状态，开通嵌入、或者关闭嵌入。',
    ),
    'QueryWorksByOrganization' => 
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
          'name' => 'WorksType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询作品的类型，填空为查询所有类型。取值范围：

- DATAPRODUCT：数据门户
- PAGE：仪表板
- FULLPAGE：全屏仪表板
- REPORT：电子表格
- dashboardOfflineQuery：自助取数',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'PAGE',
          ),
        ),
        1 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询作品的状态。取值范围：

- 0：未发布
- 1：已发布
- 2：已修改未发布
- 3：已下线',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'ThirdPartAuthFlag',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '第三方嵌入状态。取值范围：

- 0：暂未开通嵌入
- 1：已开通嵌入',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。

- 默认值1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'maximum' => '99999999',
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页行数。

- 默认值10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'maximum' => '1000',
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
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'description' => '返回组织下所有符合请求条件的作品列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalPages' => 
                  array (
                    'description' => '总页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageNum' => 
                  array (
                    'description' => '页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '请求接口时设置的每页行数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'TotalNum' => 
                  array (
                    'description' => '总行数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Data' => 
                  array (
                    'description' => '作品列表详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '报表状态。取值范围：

- 0：未发布
- 1：已发布
- 2：已修改未发布
- 3：已下线',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'Auth3rdFlag' => 
                        array (
                          'description' => '第三方嵌入状态。取值范围：

- 0：暂未开通嵌入
- 1：已开通嵌入',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'GmtModify' => 
                        array (
                          'description' => '作品修改的毫秒级时间戳。',
                          'type' => 'string',
                          'example' => '1572334870000',
                        ),
                        'WorksId' => 
                        array (
                          'description' => '作品ID。',
                          'type' => 'string',
                          'example' => '897ce25e-****-****-af84-d13c5610****',
                        ),
                        'WorkType' => 
                        array (
                          'description' => '作品类型。取值范围：

- DATAPRODUCT：数据门户
- PAGE：仪表板
- FULLPAGE：全屏仪表板
- REPORT：电子表格',
                          'type' => 'string',
                          'example' => 'PAGE',
                        ),
                        'OwnerName' => 
                        array (
                          'description' => '作品所有者的阿里云账户名。',
                          'type' => 'string',
                          'example' => '李四',
                        ),
                        'WorkspaceName' => 
                        array (
                          'description' => '作品所属工作空间名称。',
                          'type' => 'string',
                          'example' => '测试工作空间',
                        ),
                        'OwnerId' => 
                        array (
                          'description' => '作品所有者在Quick BI的UserID。',
                          'type' => 'string',
                          'example' => '作品所属工作空间名称。',
                        ),
                        'ModifyName' => 
                        array (
                          'description' => '作品修改者的阿里云账户名。',
                          'type' => 'string',
                          'example' => '张三',
                        ),
                        'WorkspaceId' => 
                        array (
                          'description' => '作品所属工作空间的ID。',
                          'type' => 'string',
                          'example' => '作品修改者的阿里云账户名。',
                        ),
                        'SecurityLevel' => 
                        array (
                          'description' => '作品协同授权的安全策略。取值：
- 0：私密
- 12：授权指定成员
- 1或11：授权所有空间成员

>- 若您使用旧版权限，则返回值为1。
- 若您使用新版权限，则返回值为11。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'Description' => 
                        array (
                          'description' => '作品备注。',
                          'type' => 'string',
                          'example' => '备注',
                        ),
                        'WorkName' => 
                        array (
                          'description' => '作品名称。',
                          'type' => 'string',
                          'example' => '测试报表',
                        ),
                        'GmtCreate' => 
                        array (
                          'description' => '作品创建的毫秒级时间戳。',
                          'type' => 'string',
                          'example' => '1496651577000',
                        ),
                        'Directory' => 
                        array (
                          'description' => '作品所属目录。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'PathId' => 
                            array (
                              'description' => '所属目录ID的层级结构，以『/』分隔。',
                              'type' => 'string',
                              'example' => '83d37ba6-d909-48a2-a517-f4d05c3a****',
                            ),
                            'PathName' => 
                            array (
                              'description' => '所属目录名称的层级结构，以『/』分隔。',
                              'type' => 'string',
                              'example' => '测试目录',
                            ),
                            'Name' => 
                            array (
                              'description' => '所属目录名称。',
                              'type' => 'string',
                              'example' => '测试目录',
                            ),
                            'Id' => 
                            array (
                              'description' => '所属目录ID。',
                              'type' => 'string',
                              'example' => '83d37ba6-d909-48a2-a517-f4d05c3a****',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          5 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          9 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          10 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          11 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          13 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          14 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          15 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": {\\n    \\"TotalPages\\": 1,\\n    \\"PageNum\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"TotalNum\\": 1,\\n    \\"Data\\": [\\n      {\\n        \\"Status\\": 1,\\n        \\"Auth3rdFlag\\": 1,\\n        \\"GmtModify\\": \\"1572334870000\\",\\n        \\"WorksId\\": \\"897ce25e-****-****-af84-d13c5610****\\",\\n        \\"WorkType\\": \\"PAGE\\",\\n        \\"OwnerName\\": \\"李四\\",\\n        \\"WorkspaceName\\": \\"测试工作空间\\",\\n        \\"OwnerId\\": \\"作品所属工作空间名称。\\",\\n        \\"ModifyName\\": \\"张三\\",\\n        \\"WorkspaceId\\": \\"作品修改者的阿里云账户名。\\",\\n        \\"SecurityLevel\\": \\"1\\",\\n        \\"Description\\": \\"备注\\",\\n        \\"WorkName\\": \\"测试报表\\",\\n        \\"GmtCreate\\": \\"1496651577000\\",\\n        \\"Directory\\": {\\n          \\"PathId\\": \\"83d37ba6-d909-48a2-a517-f4d05c3a****\\",\\n          \\"PathName\\": \\"测试目录\\",\\n          \\"Name\\": \\"测试目录\\",\\n          \\"Id\\": \\"83d37ba6-d909-48a2-a517-f4d05c3a****\\"\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryWorksByOrganizationResponse>\\n    <Success>true</Success>\\n    <RequestId>D787E1A3-A93C-424A-B626-C2B05DF8D885</RequestId>\\n    <Result>\\n        <TotalPages>1</TotalPages>\\n        <PageNum>1</PageNum>\\n        <PageSize>10</PageSize>\\n        <TotalNum>1</TotalNum>\\n        <Data>\\n            <Status>1</Status>\\n            <Auth3rdFlag>1</Auth3rdFlag>\\n            <GmtModify>1572334870000</GmtModify>\\n            <WorksId>897ce25e-****-****-af84-d13c5610****</WorksId>\\n            <WorkType>PAGE</WorkType>\\n            <OwnerName>李四</OwnerName>\\n            <WorkspaceName>测试工作空间</WorkspaceName>\\n            <OwnerId>作品所属工作空间名称。</OwnerId>\\n            <ModifyName>张三</ModifyName>\\n            <WorkspaceId>作品修改者的阿里云账户名。</WorkspaceId>\\n            <SecurityLevel>1</SecurityLevel>\\n            <Description>备注</Description>\\n            <WorkName>测试报表</WorkName>\\n            <GmtCreate>1496651577000</GmtCreate>\\n            <Directory>\\n                <PathId>83d37ba6-d909-48a2-a517-f4d05c3a****</PathId>\\n                <PathName>测试目录</PathName>\\n                <Name>测试目录</Name>\\n                <Id>83d37ba6-d909-48a2-a517-f4d05c3a****</Id>\\n            </Directory>\\n        </Data>\\n    </Result>\\n</QueryWorksByOrganizationResponse>","errorExample":""}]',
      'title' => '查询组织下的所有作品',
      'summary' => '查询整个组织下的所有作品，可指定作品类型。',
    ),
    'QueryWorksByWorkspace' => 
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
          'name' => 'WorkspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '89713491-cb4f-4579-b889-e82c35f1****',
          ),
        ),
        1 => 
        array (
          'name' => 'WorksType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '作品类型。取值范围：

- DATAPRODUCT：数据门户
- PAGE：仪表板
- FULLPAGE：全屏仪表板
- REPORT：电子表格',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'PAGE',
          ),
        ),
        2 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '作品状态。取值范围：

- 0：未发布
- 1：已发布
- 2：已修改未发布
- 3：已下线',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '0',
          ),
        ),
        3 => 
        array (
          'name' => 'ThirdPartAuthFlag',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '第三方嵌入状态。取值范围：

- 0：暂未开通嵌入
- 1：已开通嵌入',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '0',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。

- 默认值1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'maximum' => '99999999',
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页行数。

- 默认值10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'maximum' => '1000',
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
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'description' => '返回组织工作空间下所有符合请求条件的作品列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalPages' => 
                  array (
                    'description' => '总页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageNum' => 
                  array (
                    'description' => '页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '请求接口时设置的每页行数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'TotalNum' => 
                  array (
                    'description' => '总行数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Data' => 
                  array (
                    'description' => '作品列表详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '仪表板，全屏仪表板，电子表格的状态。其他作品类型默认为1，取值范围：

- 0：未发布
- 1：已发布
- 2：已修改未发布
- 3：已下线',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'GmtModify' => 
                        array (
                          'description' => '作品修改的毫秒级时间戳。',
                          'type' => 'string',
                          'example' => '1572334870000',
                        ),
                        'Auth3rdFlag' => 
                        array (
                          'description' => '第三方嵌入状态。取值范围：

- 0：暂未开通嵌入
- 1：已开通嵌入',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'WorksId' => 
                        array (
                          'description' => '作品ID。',
                          'type' => 'string',
                          'example' => '897ce25e-f993-4abd-af84-d13c5610****',
                        ),
                        'WorkType' => 
                        array (
                          'description' => '作品类型。取值范围：

- DATAPRODUCT：数据门户
- PAGE：仪表板
- FULLPAGE：全屏仪表板
- REPORT：电子表格
- dashboardOfflineQuery：自助取数
- ANALYSIS：即席分析
- DATAFORM：表单填报',
                          'type' => 'string',
                          'example' => 'PAGE',
                        ),
                        'OwnerName' => 
                        array (
                          'description' => '作品所有者的昵称。',
                          'type' => 'string',
                          'example' => '李四',
                        ),
                        'WorkspaceName' => 
                        array (
                          'description' => '作品所属工作空间名称。',
                          'type' => 'string',
                          'example' => '测试工作空间',
                        ),
                        'OwnerId' => 
                        array (
                          'description' => '作品所有者在Quick BI的UserID。',
                          'type' => 'string',
                          'example' => '作品所属工作空间名称。',
                        ),
                        'ModifyName' => 
                        array (
                          'description' => '作品修改者的昵称。',
                          'type' => 'string',
                          'example' => '张三',
                        ),
                        'WorkspaceId' => 
                        array (
                          'description' => '作品所属工作空间的ID。',
                          'type' => 'string',
                          'example' => '87c6b145-090c-43e1-9426-8f93be23****',
                        ),
                        'SecurityLevel' => 
                        array (
                          'description' => '作品协同授权的安全策略。取值：
- 0：私密
- 12：授权指定成员
- 1或11：授权所有空间成员

>- 若您使用旧版权限，则返回值为1。
- 若您使用新版权限，则返回值为11。',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'Description' => 
                        array (
                          'description' => '作品备注。',
                          'type' => 'string',
                          'example' => '备注',
                        ),
                        'WorkName' => 
                        array (
                          'description' => '作品名称。',
                          'type' => 'string',
                          'example' => '测试报表',
                        ),
                        'GmtCreate' => 
                        array (
                          'description' => '作品创建的毫秒级时间戳。',
                          'type' => 'string',
                          'example' => '1496651577000',
                        ),
                        'Directory' => 
                        array (
                          'description' => '作品所属目录。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'PathId' => 
                            array (
                              'description' => '所属目录ID的层级结构，以『/』分隔。',
                              'type' => 'string',
                              'example' => '83d37ba6-d909-48a2-a517-f4d05c3a****',
                            ),
                            'PathName' => 
                            array (
                              'description' => '所属目录名称的层级结构，以『/』分隔。',
                              'type' => 'string',
                              'example' => '测试目录',
                            ),
                            'Name' => 
                            array (
                              'description' => '所属目录名称。',
                              'type' => 'string',
                              'example' => '所属目录名称。',
                            ),
                            'Id' => 
                            array (
                              'description' => '所属目录ID。',
                              'type' => 'string',
                              'example' => '83d37ba6-d909-48a2-a517-f4d05c3a****',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          5 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          9 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          10 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          11 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          13 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          14 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          15 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": {\\n    \\"TotalPages\\": 1,\\n    \\"PageNum\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"TotalNum\\": 1,\\n    \\"Data\\": [\\n      {\\n        \\"Status\\": 1,\\n        \\"GmtModify\\": \\"1572334870000\\",\\n        \\"Auth3rdFlag\\": 1,\\n        \\"WorksId\\": \\"897ce25e-f993-4abd-af84-d13c5610****\\",\\n        \\"WorkType\\": \\"PAGE\\",\\n        \\"OwnerName\\": \\"李四\\",\\n        \\"WorkspaceName\\": \\"测试工作空间\\",\\n        \\"OwnerId\\": \\"作品所属工作空间名称。\\",\\n        \\"ModifyName\\": \\"张三\\",\\n        \\"WorkspaceId\\": \\"87c6b145-090c-43e1-9426-8f93be23****\\",\\n        \\"SecurityLevel\\": \\"0\\",\\n        \\"Description\\": \\"备注\\",\\n        \\"WorkName\\": \\"测试报表\\",\\n        \\"GmtCreate\\": \\"1496651577000\\",\\n        \\"Directory\\": {\\n          \\"PathId\\": \\"83d37ba6-d909-48a2-a517-f4d05c3a****\\",\\n          \\"PathName\\": \\"测试目录\\",\\n          \\"Name\\": \\"所属目录名称。\\",\\n          \\"Id\\": \\"83d37ba6-d909-48a2-a517-f4d05c3a****\\"\\n        }\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询工作空间下的所有作品',
      'summary' => '查询组织下某个工作空间下的所有作品，可指定作品类型。',
    ),
    'QueryReadableResourcesListByUserId' => 
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
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Quick BI用户ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'de4bc5f9429141cc8091cdd1c15b****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'description' => '用户有权限查看的作品列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '报表状态。取值范围：

- 0：未发布
- 1：已发布
- 2：已修改未发布
- 3：已下线',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'ThirdPartAuthFlag' => 
                    array (
                      'description' => '第三方嵌入状态。取值范围：

- 0：暂未开通嵌入
- 1：已开通嵌入',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'WorksId' => 
                    array (
                      'description' => '作品ID。',
                      'type' => 'string',
                      'example' => '03366b16-69ce-43c8-b782-56c2f6ec****',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间的毫秒级时间戳。',
                      'type' => 'string',
                      'example' => '1611023338000',
                    ),
                    'WorkType' => 
                    array (
                      'description' => '作品类型。取值范围：

- DATAPRODUCT：数据门户
- PAGE：仪表板
- FULLPAGE：全屏仪表板
- REPORT：电子表格',
                      'type' => 'string',
                      'example' => 'PAGE',
                    ),
                    'OwnerName' => 
                    array (
                      'description' => '所有者的阿里云账户名。',
                      'type' => 'string',
                      'example' => '张三',
                    ),
                    'WorkspaceName' => 
                    array (
                      'description' => '作品所属工作空间名称。',
                      'type' => 'string',
                      'example' => '测试工作空间',
                    ),
                    'OwnerId' => 
                    array (
                      'description' => '作品所有者的Quick BI的UserID。',
                      'type' => 'string',
                      'example' => '46e5374665ba4b679ee22e2a2927****',
                    ),
                    'ModifyName' => 
                    array (
                      'description' => '修改者的阿里云账户名。',
                      'type' => 'string',
                      'example' => '李四',
                    ),
                    'WorkspaceId' => 
                    array (
                      'description' => '作品所属工作空间ID。',
                      'type' => 'string',
                      'example' => '89713491-cb4f-4579-b889-e82c35f1****',
                    ),
                    'SecurityLevel' => 
                    array (
                      'description' => '作品协同授权的安全策略。取值：
- 0：私密
- 12：授权指定成员
- 1或11：授权所有空间成员

>- 若您使用旧版权限，则返回值为1。
- 若您使用新版权限，则返回值为11。',
                      'type' => 'string',
                      'example' => '0',
                    ),
                    'Description' => 
                    array (
                      'description' => '作品备注。',
                      'type' => 'string',
                      'example' => '备注',
                    ),
                    'WorkName' => 
                    array (
                      'description' => '作品名称。',
                      'type' => 'string',
                      'example' => '公司地区表',
                    ),
                    'ModifyTime' => 
                    array (
                      'description' => '修改时间的毫秒级时间戳。',
                      'type' => 'string',
                      'example' => '1611023338000',
                    ),
                    'Directory' => 
                    array (
                      'description' => '作品所处的目录结构。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'PathId' => 
                        array (
                          'description' => '目录ID的层级结构，以『/』分隔。',
                          'type' => 'string',
                          'example' => 'e4276ea5-b232-4fb1-8f0f-efcee4a2****',
                        ),
                        'PathName' => 
                        array (
                          'description' => '目录名称的层级结构，以『/』分隔。',
                          'type' => 'string',
                          'example' => '测试目录',
                        ),
                        'Name' => 
                        array (
                          'description' => '所属目录名称。',
                          'type' => 'string',
                          'example' => '测试目录',
                        ),
                        'Id' => 
                        array (
                          'description' => '所属目录ID。',
                          'type' => 'string',
                          'example' => 'e4276ea5-b232-4fb1-8f0f-efcee4a2****',
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
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          5 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          9 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          10 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          11 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          13 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          14 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          15 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": [\\n    {\\n      \\"Status\\": 1,\\n      \\"ThirdPartAuthFlag\\": 1,\\n      \\"WorksId\\": \\"03366b16-69ce-43c8-b782-56c2f6ec****\\",\\n      \\"CreateTime\\": \\"1611023338000\\",\\n      \\"WorkType\\": \\"PAGE\\",\\n      \\"OwnerName\\": \\"张三\\",\\n      \\"WorkspaceName\\": \\"测试工作空间\\",\\n      \\"OwnerId\\": \\"46e5374665ba4b679ee22e2a2927****\\",\\n      \\"ModifyName\\": \\"李四\\",\\n      \\"WorkspaceId\\": \\"89713491-cb4f-4579-b889-e82c35f1****\\",\\n      \\"SecurityLevel\\": \\"0\\",\\n      \\"Description\\": \\"备注\\",\\n      \\"WorkName\\": \\"公司地区表\\",\\n      \\"ModifyTime\\": \\"1611023338000\\",\\n      \\"Directory\\": {\\n        \\"PathId\\": \\"e4276ea5-b232-4fb1-8f0f-efcee4a2****\\",\\n        \\"PathName\\": \\"测试目录\\",\\n        \\"Name\\": \\"测试目录\\",\\n        \\"Id\\": \\"e4276ea5-b232-4fb1-8f0f-efcee4a2****\\"\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<QueryReadableResourcesListByUserIdResponse>\\n    <Success>true</Success>\\n    <RequestId>D787E1A3-A93C-424A-B626-C2B05DF8D885</RequestId>\\n    <Result>\\n        <Status>1</Status>\\n        <ThirdPartAuthFlag>1</ThirdPartAuthFlag>\\n        <WorksId>03366b16-69ce-43c8-b782-56c2f6ec****</WorksId>\\n        <CreateTime>1611023338000</CreateTime>\\n        <WorkType>PAGE</WorkType>\\n        <OwnerName>张三</OwnerName>\\n        <WorkspaceName>测试工作空间</WorkspaceName>\\n        <OwnerId>46e5374665ba4b679ee22e2a2927****</OwnerId>\\n        <ModifyName>李四</ModifyName>\\n        <WorkspaceId>89713491-cb4f-4579-b889-e82c35f1****</WorkspaceId>\\n        <SecurityLevel>0</SecurityLevel>\\n        <Description>备注</Description>\\n        <WorkName>公司地区表</WorkName>\\n        <ModifyTime>1611023338000</ModifyTime>\\n        <Directory>\\n            <PathId>e4276ea5-b232-4fb1-8f0f-efcee4a2****</PathId>\\n            <PathName>测试目录</PathName>\\n            <Name>测试目录</Name>\\n            <Id>e4276ea5-b232-4fb1-8f0f-efcee4a2****</Id>\\n        </Directory>\\n    </Result>\\n</QueryReadableResourcesListByUserIdResponse>","errorExample":""}]',
      'title' => '查询用户有权查看的作品列表',
      'summary' => '查询用户有权查看的作品列表，包含空间下与分享授权的报表。',
    ),
    'CheckReadable' => 
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WorksId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '作品的ID。这里的资源包括数据门户，仪表板，电子表格，自助取数。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '95296e95-ca89-4c7d-8af9-dedf0ad0****',
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待检测的Quick BI用户ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'de4bc5f9429141cc8091cdd1c15b****',
          ),
        ),
      ),
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
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'description' => '返回接口执行结果。取值范围：

- true：执行成功
- false：执行失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Report.NotExist.Error',
            'errorMessage' => 'This work does not exist. It may have been deleted. Work ID is %s.',
          ),
          1 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          3 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          10 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          11 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          12 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          13 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          14 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          15 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          16 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CheckReadableResponse>\\n    <RequestId>D787E1A3-A93C-424A-B626-C2B05DF8D885</RequestId>\\n    <Result>true</Result>\\n    <Success>true</Success>\\n</CheckReadableResponse>","errorExample":""}]',
      'title' => '查询用户对数据作品的查看权限',
      'summary' => '查询用户对数据作品（仪表板、电子表格等）是否有权限查看。',
    ),
    'QueryEmbeddedInfo' => 
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
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'description' => '组织下报表的嵌入信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'EmbeddedCount' => 
                  array (
                    'description' => '当前已经嵌入报表的数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'MaxCount' => 
                  array (
                    'description' => '最大可嵌入报表的数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '100',
                  ),
                  'Detail' => 
                  array (
                    'description' => '嵌入作品的统计信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'DashboardOfflineQuery' => 
                      array (
                        'description' => '嵌入的自助取数数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'Report' => 
                      array (
                        'description' => '嵌入的电子表格数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'Page' => 
                      array (
                        'description' => '嵌入的仪表板数量。',
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
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          5 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          9 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          10 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          11 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          13 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          14 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          15 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": {\\n    \\"EmbeddedCount\\": 3,\\n    \\"MaxCount\\": 100,\\n    \\"Detail\\": {\\n      \\"DashboardOfflineQuery\\": 1,\\n      \\"Report\\": 1,\\n      \\"Page\\": 1\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryEmbeddedInfoResponse>\\n    <Success>true</Success>\\n    <RequestId>D787E1A3-A93C-424A-B626-C2B05DF8D885</RequestId>\\n    <Result>\\n        <EmbeddedCount>3</EmbeddedCount>\\n        <MaxCount>100</MaxCount>\\n        <Detail>\\n            <DashboardOfflineQuery>1</DashboardOfflineQuery>\\n            <Report>1</Report>\\n            <Page>1</Page>\\n        </Detail>\\n    </Result>\\n</QueryEmbeddedInfoResponse>","errorExample":""}]',
      'title' => '获取组织嵌入配置',
      'summary' => '获取组织下的嵌入配置，包括最大嵌入数和已经嵌入数等。',
    ),
    'QueryEmbeddedStatus' => 
    array (
      'summary' => '查询某个报表是否已经开通嵌入。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WorksId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的作品ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '95296e95-ca89-4c7d-8af9-dedf0ad0****',
          ),
        ),
      ),
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
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'description' => '作品是否开通嵌入。取值范围：
- true：嵌入
- false：未嵌入',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Report.NotExist.Error',
            'errorMessage' => 'This work does not exist. It may have been deleted. Work ID is %s.',
          ),
          1 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'Resource.NotBelongTo.CurrentOrganization',
            'errorMessage' => 'The resource does not belong to the current organization.',
          ),
          3 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          4 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          6 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          10 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          11 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          12 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          13 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          14 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          15 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          16 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          17 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '查询报表嵌入状态',
    ),
    'QueryWorks' => 
    array (
      'summary' => '查询指定数据作品信息。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WorksId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '报表ID',
            'description' => '报表ID',
            'type' => 'string',
            'required' => true,
            'example' => 'abcd****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'title' => 'QueryWorksModel',
                'description' => '作品详情信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'WorksId' => 
                  array (
                    'title' => '作品ID',
                    'description' => '作品ID。',
                    'type' => 'string',
                    'example' => '95296e95-ca89-4c7d-8af9-dedf0ad0****',
                  ),
                  'WorkType' => 
                  array (
                    'title' => '作品类型',
                    'description' => '查询作品的类型，填空为查询所有类型。取值范围：

- DATAPRODUCT：数据门户
- PAGE：仪表板
- FULLPAGE：全屏仪表板
- REPORT：电子表格
- dashboardOfflineQuery：自助取数',
                    'type' => 'string',
                    'example' => 'PAGE',
                  ),
                  'WorkName' => 
                  array (
                    'title' => '作品名称',
                    'description' => '作品名称。',
                    'type' => 'string',
                    'example' => '测试报表',
                  ),
                  'WorkspaceId' => 
                  array (
                    'title' => '所属工作空间',
                    'description' => '作品所属工作空间的ID。',
                    'type' => 'string',
                    'example' => '87c6b145-090c-43e1-9426-8f93be23****',
                  ),
                  'WorkspaceName' => 
                  array (
                    'title' => '所属空间名称',
                    'description' => '作品所属工作空间名称。',
                    'type' => 'string',
                    'example' => '测试空间',
                  ),
                  'Directory' => 
                  array (
                    'title' => '所属空间目录信息',
                    'description' => '作品所属目录。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Id' => 
                      array (
                        'title' => '目录ID',
                        'description' => '所属目录ID。',
                        'type' => 'string',
                        'example' => '83d37ba6-d909-48a2-a517-f4d05c3a****',
                      ),
                      'Name' => 
                      array (
                        'title' => '目录名称',
                        'description' => '目录名称。',
                        'type' => 'string',
                        'example' => '测试目录',
                      ),
                      'PathId' => 
                      array (
                        'title' => '目录ID的路径，例如：aa/bb/cc/dd',
                        'description' => '所属目录ID的层级结构，以『/』分隔。',
                        'type' => 'string',
                        'example' => '83d37ba6-d909-48a2-a517-f4d05c3a****',
                      ),
                      'PathName' => 
                      array (
                        'title' => '目录ID的路径名称，例如：一层目录/二层目录',
                        'description' => '所属目录名称的层级结构，以『/』分隔。',
                        'type' => 'string',
                        'example' => '测试目录',
                      ),
                    ),
                  ),
                  'SecurityLevel' => 
                  array (
                    'title' => '安全策略：0 私有 1 协同编辑。 （',
                    'description' => '作品协同授权的安全策略。取值：
- 0：私密
- 12：授权指定成员
- 1或11：授权所有空间成员

>- 若您使用旧版权限，则返回值为1。
- 若您使用新版权限，则返回值为11。',
                    'type' => 'string',
                    'example' => '0',
                  ),
                  'Auth3rdFlag' => 
                  array (
                    'title' => '第三方嵌入状态',
                    'description' => '第三方嵌入状态。取值范围：

- 0：暂未开通嵌入
- 1：已开通嵌入',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'Description' => 
                  array (
                    'title' => '描述',
                    'description' => '作品备注。',
                    'type' => 'string',
                    'example' => '备注',
                  ),
                  'OwnerId' => 
                  array (
                    'title' => '所有者Id',
                    'description' => '作品所有者在Quick BI的UserID。',
                    'type' => 'string',
                    'example' => '9187a612aa474e2a8ac1414d5529****',
                  ),
                  'OwnerName' => 
                  array (
                    'title' => '所有者显示名称',
                    'description' => '作品所有者的阿里云账户名。',
                    'type' => 'string',
                    'example' => '张三',
                  ),
                  'ModifyName' => 
                  array (
                    'title' => '修改显示名称',
                    'description' => '作品修改者的阿里云账户名。',
                    'type' => 'string',
                    'example' => '张三',
                  ),
                  'GmtCreate' => 
                  array (
                    'title' => '创建时间d',
                    'description' => '作品创建的毫秒级时间戳。',
                    'type' => 'string',
                    'example' => '1496651577000',
                  ),
                  'GmtModify' => 
                  array (
                    'title' => '修改时间',
                    'description' => '作品修改的毫秒级时间戳。',
                    'type' => 'string',
                    'example' => '1496651577000',
                  ),
                  'Status' => 
                  array (
                    'title' => '报表发布状态 @PublishStatusEnum',
                    'description' => '报表状态。取值范围：

- 0：未发布
- 1：已发布
- 2：已修改未发布
- 3：已下线',
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
            'errorCode' => 'Invalid.Works.Empty',
            'errorMessage' => 'This work does not exist. It may have been deleted. Work ID is %s.',
          ),
          1 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'Resource.NotBelongTo.CurrentOrganization',
            'errorMessage' => 'The resource does not belong to the current organization.',
          ),
          3 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          4 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          6 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          10 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          11 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          12 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          13 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          14 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          15 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          16 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          17 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": {\\n    \\"WorksId\\": \\"95296e95-ca89-4c7d-8af9-dedf0ad0****\\",\\n    \\"WorkType\\": \\"PAGE\\",\\n    \\"WorkName\\": \\"测试报表\\",\\n    \\"WorkspaceId\\": \\"87c6b145-090c-43e1-9426-8f93be23****\\",\\n    \\"WorkspaceName\\": \\"测试空间\\",\\n    \\"Directory\\": {\\n      \\"Id\\": \\"83d37ba6-d909-48a2-a517-f4d05c3a****\\",\\n      \\"Name\\": \\"测试目录\\",\\n      \\"PathId\\": \\"83d37ba6-d909-48a2-a517-f4d05c3a****\\",\\n      \\"PathName\\": \\"测试目录\\"\\n    },\\n    \\"SecurityLevel\\": \\"0\\",\\n    \\"Auth3rdFlag\\": 0,\\n    \\"Description\\": \\"备注\\",\\n    \\"OwnerId\\": \\"9187a612aa474e2a8ac1414d5529****\\",\\n    \\"OwnerName\\": \\"张三\\",\\n    \\"ModifyName\\": \\"张三\\",\\n    \\"GmtCreate\\": \\"1496651577000\\",\\n    \\"GmtModify\\": \\"1496651577000\\",\\n    \\"Status\\": 0\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryWorksResponse>\\n    <Success>true</Success>\\n    <RequestId>D787E1A3-A93C-424A-B626-C2B05DF8D885</RequestId>\\n    <Result>\\n        <WorksId>95296e95-ca89-4c7d-8af9-dedf0ad0****</WorksId>\\n        <WorkType>PAGE</WorkType>\\n        <WorkName>测试报表</WorkName>\\n        <WorkspaceId>87c6b145-090c-43e1-9426-8f93be23****</WorkspaceId>\\n        <WorkspaceName>测试空间</WorkspaceName>\\n        <Directory>\\n            <Id>83d37ba6-d909-48a2-a517-f4d05c3a****</Id>\\n            <Name>测试目录</Name>\\n            <PathId>83d37ba6-d909-48a2-a517-f4d05c3a****</PathId>\\n            <PathName>测试目录</PathName>\\n        </Directory>\\n        <SecurityLevel>0</SecurityLevel>\\n        <Auth3rdFlag>0</Auth3rdFlag>\\n        <Description>备注</Description>\\n        <OwnerId>9187a612aa474e2a8ac1414d5529****</OwnerId>\\n        <OwnerName>张三</OwnerName>\\n        <ModifyName>张三</ModifyName>\\n        <GmtCreate>1496651577000</GmtCreate>\\n        <GmtModify>1496651577000</GmtModify>\\n        <Status>0</Status>\\n    </Result>\\n</QueryWorksResponse>","errorExample":""}]',
      'title' => '查询数据作品信息',
    ),
    'QueryWorksBloodRelationship' => 
    array (
      'summary' => '获取数据作品的血缘关系，包括各组件引用的数据集以及查询字段信息。目前仅支持的数据作品包含仪表板、电子表格、自助取数。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WorksId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '报表ID',
            'description' => '数据作品的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'abcd****',
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
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'description' => '作品血缘信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ComponentId' => 
                    array (
                      'title' => '组件ID or  sheetId',
                      'description' => '组件ID。',
                      'type' => 'string',
                      'example' => '0696083a-ca72-4d89-8e7a-c017910e0***',
                    ),
                    'ComponentName' => 
                    array (
                      'description' => '组件名称。',
                      'type' => 'string',
                      'example' => '线图',
                    ),
                    'ComponentType' => 
                    array (
                      'title' => '组件类型',
                      'description' => '组件类型。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '3',
                    ),
                    'ComponentTypeName' => 
                    array (
                      'description' => '组件类型名称。',
                      'type' => 'string',
                      'example' => 'LINE',
                    ),
                    'QueryParams' => 
                    array (
                      'title' => '查询参数引用的列信息',
                      'description' => '查询参数引用列的列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Uid' => 
                          array (
                            'title' => '字段唯一ID。即cube中的name',
                            'description' => '字段唯一ID。',
                            'type' => 'string',
                            'example' => 'Ndc78a4_order_number',
                          ),
                          'PathId' => 
                          array (
                            'title' => '全局唯一的PathId。位于cube的level中pathId',
                            'description' => '全局唯一的PathId。',
                            'type' => 'string',
                            'example' => 'schema7d1944eb-443e-48c6-8123-bf45a99e7e74.dc78a4ed-880d-452e-b017-90cfc10c83e5_company_sales_record.[Ndc78a4_order_level].[Ndc78a4_order_level].[Ndc78a4_order_level]',
                          ),
                          'Caption' => 
                          array (
                            'title' => '字段显示名称',
                            'description' => '字段原名。',
                            'type' => 'string',
                            'example' => 'order_number',
                          ),
                          'DataType' => 
                          array (
                            'title' => '字段类型',
                            'description' => '字段类型。取值范围：

- string：字符串类型
- date：仅包含年月日部分的日期类型
- datetime：通用日期类型
- time：仅包含时分秒部分的日期类型
- number：数值类型
- boolean：布尔类型
- geographic：地理位置
- url：字符串类型
- imageUrl：图片链接类型
- multivalue：多值列',
                            'type' => 'string',
                            'example' => 'number',
                          ),
                          'IsMeasure' => 
                          array (
                            'title' => '是否是度量',
                            'description' => '是否是度量。取值范围：

true：是
false：否',
                            'type' => 'boolean',
                            'example' => 'true',
                          ),
                          'AreaId' => 
                          array (
                            'title' => '所属位置：',
                            'description' => '所属位置ID。',
                            'type' => 'string',
                            'example' => 'area_column',
                          ),
                          'AreaName' => 
                          array (
                            'description' => '所属位置名称。',
                            'type' => 'string',
                            'example' => '列（度量）',
                          ),
                        ),
                      ),
                    ),
                    'DatasetId' => 
                    array (
                      'title' => '数据集ID',
                      'description' => '数据集ID。',
                      'type' => 'string',
                      'example' => 'dc78a4ed-880d-452e-b017-90cfc10c83e5_company_sales_record',
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
            'errorCode' => 'Invalid.Works.Empty',
            'errorMessage' => 'This work does not exist. It may have been deleted. Work ID is %s.',
          ),
          1 => 
          array (
            'errorCode' => 'Invalid.WorksId.Not.Publish',
            'errorMessage' => 'Works %s is not published yet.',
          ),
          2 => 
          array (
            'errorCode' => 'Invalid.Workspace',
            'errorMessage' => 'The workspace is not owned by the organization.',
          ),
          3 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          4 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          5 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          7 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          10 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          11 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          12 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          13 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          14 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          15 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          16 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          17 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          18 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": [\\n    {\\n      \\"ComponentId\\": \\"0696083a-ca72-4d89-8e7a-c017910e0***\\",\\n      \\"ComponentName\\": \\"线图\\",\\n      \\"ComponentType\\": 3,\\n      \\"ComponentTypeName\\": \\"LINE\\",\\n      \\"QueryParams\\": [\\n        {\\n          \\"Uid\\": \\"Ndc78a4_order_number\\",\\n          \\"PathId\\": \\"schema7d1944eb-443e-48c6-8123-bf45a99e7e74.dc78a4ed-880d-452e-b017-90cfc10c83e5_company_sales_record.[Ndc78a4_order_level].[Ndc78a4_order_level].[Ndc78a4_order_level]\\",\\n          \\"Caption\\": \\"order_number\\",\\n          \\"DataType\\": \\"number\\",\\n          \\"IsMeasure\\": true,\\n          \\"AreaId\\": \\"area_column\\",\\n          \\"AreaName\\": \\"列（度量）\\"\\n        }\\n      ],\\n      \\"DatasetId\\": \\"dc78a4ed-880d-452e-b017-90cfc10c83e5_company_sales_record\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<QueryWorksBloodRelationshipResponse>\\n    <Success>true</Success>\\n    <RequestId>D787E1A3-A93C-424A-B626-C2B05DF8D885</RequestId>\\n    <Result>\\n        <ComponentId>0696083a-ca72-4d89-8e7a-c017910e0***</ComponentId>\\n        <ComponentName>线图</ComponentName>\\n        <ComponentType>3</ComponentType>\\n        <ComponentTypeName>LINE</ComponentTypeName>\\n        <QueryParams>\\n            <Uid>Ndc78a4_order_number</Uid>\\n            <PathId>schema7d1944eb-443e-48c6-8123-bf45a99e7e74.dc78a4ed-880d-452e-b017-90cfc10c83e5_company_sales_record.[Ndc78a4_order_level].[Ndc78a4_order_level].[Ndc78a4_order_level]</PathId>\\n            <Caption>order_number</Caption>\\n            <DataType>number</DataType>\\n            <IsMeasure>true</IsMeasure>\\n            <AreaId>area_column</AreaId>\\n            <AreaName>列（度量）</AreaName>\\n        </QueryParams>\\n        <DatasetId>dc78a4ed-880d-452e-b017-90cfc10c83e5_company_sales_record</DatasetId>\\n    </Result>\\n</QueryWorksBloodRelationshipResponse>","errorExample":""}]',
      'title' => '查询数据作品的血缘信息',
    ),
    'QueryComponentPerformance' => 
    array (
      'summary' => '查询组件性能日志。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'QueryType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询类型：

- **lastDay**：昨天
- **sevenDays**：七天内
- **thirtyDays**：三十天内',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'sevenDays',
          ),
        ),
        1 => 
        array (
          'name' => 'WorkspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '89713491-cb4f-4579-b889-e82c35f1****',
          ),
        ),
        2 => 
        array (
          'name' => 'ReportId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '作品的ID。这里的作品包括数据门户，仪表板，电子表格，自助取数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '6b407e50-e774-406b-9956-da2425c2****',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'report',
          ),
        ),
        4 => 
        array (
          'name' => 'CostTimeAvgMin',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '平均耗时（分钟）。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时的每页行数：
- 默认值：10
- 最大值：1000',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '100',
          ),
        ),
        6 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间成员列表的当前页码：

- 起始值：1
- 默认值：1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BCE45E6D-9304-4F94-86BB-5A772B1615FF',
              ),
              'Result' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'description' => '组件性能分析模型。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ComponentId' => 
                    array (
                      'description' => '组件ID。',
                      'type' => 'string',
                      'example' => '0696083a-ca72-4d89-8e7a-c017910e0***',
                    ),
                    'ComponentName' => 
                    array (
                      'description' => '组件名称。',
                      'type' => 'string',
                      'example' => '线图',
                    ),
                    'ReportId' => 
                    array (
                      'description' => '作品ID。',
                      'type' => 'string',
                      'example' => '6b407e50-e774-406b-9956-da2425c2****',
                    ),
                    'ReportName' => 
                    array (
                      'description' => '报告名称。',
                      'type' => 'string',
                      'example' => 'ClusterRiskReport',
                    ),
                    'ReportType' => 
                    array (
                      'description' => '报表类型。',
                      'type' => 'string',
                      'example' => 'report',
                    ),
                    'QueryTimeoutCount' => 
                    array (
                      'description' => '图表查询超时次数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'RepeatSqlQueryPercent' => 
                    array (
                      'description' => '重复查询占比。',
                      'type' => 'string',
                      'example' => '0.3',
                    ),
                    'WorkspaceName' => 
                    array (
                      'description' => '空间名称。',
                      'type' => 'string',
                      'example' => '测试空间',
                    ),
                    'WorkspaceId' => 
                    array (
                      'description' => '空间唯一ID。',
                      'type' => 'string',
                      'example' => '89713491-cb4f-4579-b889-e82c35f1****',
                    ),
                    'RepeatQueryPercentNum' => 
                    array (
                      'description' => '重复查询数量。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '2',
                    ),
                    'RepeatQueryPercent' => 
                    array (
                      'description' => '重复查询占比。',
                      'type' => 'string',
                      'example' => '0.3',
                    ),
                    'QuickIndexCostTimeAvg' => 
                    array (
                      'description' => '命中Quick引擎平均查询耗时。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '0.3',
                    ),
                    'QuickIndexQueryCount' => 
                    array (
                      'description' => '命中Quick引擎次数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '3',
                    ),
                    'CacheCostTimeAvg' => 
                    array (
                      'description' => '命中缓存平均耗时。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '0.3',
                    ),
                    'CacheQueryCount' => 
                    array (
                      'description' => '命中缓存次数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '3',
                    ),
                    'RepeatSqlQueryCount' => 
                    array (
                      'description' => '重复查询次数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '5',
                    ),
                    'CostTimeAvg' => 
                    array (
                      'description' => '平均查询时间。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '0.3',
                    ),
                    'QueryCountAvg' => 
                    array (
                      'description' => '平均查询次数。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '0.3',
                    ),
                    'QueryCount' => 
                    array (
                      'description' => '查询次数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '5',
                    ),
                    'QueryTimeoutCountPercent' => 
                    array (
                      'description' => '图表查询超时次数占比。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '0.3',
                    ),
                    'QueryOverTenSecPercentNum' => 
                    array (
                      'description' => '查询超过10s查询次数占比。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '0.3',
                    ),
                    'QueryOverFivePercentNum' => 
                    array (
                      'description' => '查询超过5s查询次数。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '5',
                    ),
                    'QueryOverTenSecPercent' => 
                    array (
                      'description' => '查询超过10s占比。',
                      'type' => 'string',
                      'example' => '0.3',
                    ),
                    'QueryOverFiveSecPercent' => 
                    array (
                      'description' => '查询超过5s占比。',
                      'type' => 'string',
                      'example' => '0.3',
                    ),
                  ),
                ),
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          5 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          9 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          10 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          11 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          13 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          14 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          15 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BCE45E6D-9304-4F94-86BB-5A772B1615FF\\",\\n  \\"Result\\": [\\n    {\\n      \\"ComponentId\\": \\"0696083a-ca72-4d89-8e7a-c017910e0***\\",\\n      \\"ComponentName\\": \\"线图\\",\\n      \\"ReportId\\": \\"6b407e50-e774-406b-9956-da2425c2****\\",\\n      \\"ReportName\\": \\"ClusterRiskReport\\",\\n      \\"ReportType\\": \\"report\\",\\n      \\"QueryTimeoutCount\\": 1,\\n      \\"RepeatSqlQueryPercent\\": \\"0.3\\",\\n      \\"WorkspaceName\\": \\"测试空间\\",\\n      \\"WorkspaceId\\": \\"89713491-cb4f-4579-b889-e82c35f1****\\",\\n      \\"RepeatQueryPercentNum\\": 2,\\n      \\"RepeatQueryPercent\\": \\"0.3\\",\\n      \\"QuickIndexCostTimeAvg\\": 0.3,\\n      \\"QuickIndexQueryCount\\": 3,\\n      \\"CacheCostTimeAvg\\": 0.3,\\n      \\"CacheQueryCount\\": 3,\\n      \\"RepeatSqlQueryCount\\": 5,\\n      \\"CostTimeAvg\\": 0.3,\\n      \\"QueryCountAvg\\": 0.3,\\n      \\"QueryCount\\": 5,\\n      \\"QueryTimeoutCountPercent\\": 0.3,\\n      \\"QueryOverTenSecPercentNum\\": 0.3,\\n      \\"QueryOverFivePercentNum\\": 5,\\n      \\"QueryOverTenSecPercent\\": \\"0.3\\",\\n      \\"QueryOverFiveSecPercent\\": \\"0.3\\"\\n    }\\n  ],\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '查询组件性能日志',
    ),
    'QueryReportPerformance' => 
    array (
      'summary' => '查询报表性能日志。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'QueryType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询类型：

- **lastDay**：昨天
- **sevenDays**：七天内
- **thirtyDays**：三十天内',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'sevenDays',
          ),
        ),
        1 => 
        array (
          'name' => 'WorkspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '95296e95-ca89-4c7d-8af9-dedf0ad0****',
          ),
        ),
        2 => 
        array (
          'name' => 'ReportId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '报表ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '6b407e50-e774-406b-9956-da2425c2****',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'report',
          ),
        ),
        4 => 
        array (
          'name' => 'CostTimeAvgMin',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '平均耗时（分钟）。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时的每页行数：
- 默认值：10
- 最大值：1000',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '10',
          ),
        ),
        6 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '组织成员列表的当前页码：

- 起始值：1
- 默认值：1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1FC71085-D5FD-08E0-813A-4D4BD1031BC5',
              ),
              'Result' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'description' => '报告性能分析模型。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ReportId' => 
                    array (
                      'description' => '作品ID。',
                      'type' => 'string',
                      'example' => '6b407e50-e774-406b-9956-da2425c2****',
                    ),
                    'ReportName' => 
                    array (
                      'description' => '报告名称。',
                      'type' => 'string',
                      'example' => 'ClusterAddonUpgradeReport',
                    ),
                    'ComponentQueryCount' => 
                    array (
                      'description' => '图表查询次数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'ComponentQueryCountAvg' => 
                    array (
                      'description' => '图表平均查询次数。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '2.0',
                    ),
                    'ReportType' => 
                    array (
                      'description' => '报表类型。',
                      'type' => 'string',
                      'example' => 'report',
                    ),
                    'QueryTimeoutCount' => 
                    array (
                      'description' => '图表查询超时次数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '8',
                    ),
                    'RepeatSqlQueryPercent' => 
                    array (
                      'description' => '重复查询占比。',
                      'type' => 'string',
                      'example' => '0.7
',
                    ),
                    'WorkspaceName' => 
                    array (
                      'description' => '空间名称。',
                      'type' => 'string',
                      'example' => '自定义模板',
                    ),
                    'WorkspaceId' => 
                    array (
                      'description' => '作品所属工作空间ID。',
                      'type' => 'string',
                      'example' => 'ab46ed33-6278-4ef7-8013-8c1335f266ee',
                    ),
                    'RepeatQueryPercentNum' => 
                    array (
                      'description' => '重复查询数量。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '3',
                    ),
                    'RepeatQueryPercent' => 
                    array (
                      'description' => '重复查询占比。',
                      'type' => 'string',
                      'example' => '0.8',
                    ),
                    'QuickIndexCostTimeAvg' => 
                    array (
                      'description' => '命中Quick引擎平均查询耗时。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '10',
                    ),
                    'QuickIndexQueryCount' => 
                    array (
                      'description' => '命中Quick引擎次数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '5',
                    ),
                    'CacheCostTimeAvg' => 
                    array (
                      'description' => '命中缓存平均耗时。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '2.2',
                    ),
                    'CacheQueryCount' => 
                    array (
                      'description' => '命中缓存次数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'RepeatSqlQueryCount' => 
                    array (
                      'description' => '重复查询次数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'CostTimeAvg' => 
                    array (
                      'description' => '平均查询时间。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '0.2',
                    ),
                    'QueryCountAvg' => 
                    array (
                      'description' => '平均查询次数。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '3.3',
                    ),
                    'QueryCount' => 
                    array (
                      'description' => '查询次数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '50',
                    ),
                    'QueryTimeoutCountPercent' => 
                    array (
                      'description' => '图表查询超时次数占比。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '0.5',
                    ),
                    'QueryOverTenSecPercentNum' => 
                    array (
                      'description' => '查询超过10s查询次数。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '0.5',
                    ),
                    'QueryOverFivePercentNum' => 
                    array (
                      'description' => '查询超过5s查询次数占比。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '0.5',
                    ),
                    'QueryOverTenSecPercent' => 
                    array (
                      'description' => '查询超过10s占比。',
                      'type' => 'string',
                      'example' => '0.5',
                    ),
                    'QueryOverFiveSecPercent' => 
                    array (
                      'description' => '查询超过5s占比。',
                      'type' => 'string',
                      'example' => '0.5',
                    ),
                  ),
                ),
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'True',
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
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          5 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          9 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          10 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          11 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          13 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          14 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          15 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1FC71085-D5FD-08E0-813A-4D4BD1031BC5\\",\\n  \\"Result\\": [\\n    {\\n      \\"ReportId\\": \\"6b407e50-e774-406b-9956-da2425c2****\\",\\n      \\"ReportName\\": \\"ClusterAddonUpgradeReport\\",\\n      \\"ComponentQueryCount\\": 1,\\n      \\"ComponentQueryCountAvg\\": 2,\\n      \\"ReportType\\": \\"report\\",\\n      \\"QueryTimeoutCount\\": 8,\\n      \\"RepeatSqlQueryPercent\\": \\"0.7\\\\n\\",\\n      \\"WorkspaceName\\": \\"自定义模板\\",\\n      \\"WorkspaceId\\": \\"ab46ed33-6278-4ef7-8013-8c1335f266ee\\",\\n      \\"RepeatQueryPercentNum\\": 3,\\n      \\"RepeatQueryPercent\\": \\"0.8\\",\\n      \\"QuickIndexCostTimeAvg\\": 10,\\n      \\"QuickIndexQueryCount\\": 5,\\n      \\"CacheCostTimeAvg\\": 2.2,\\n      \\"CacheQueryCount\\": 1,\\n      \\"RepeatSqlQueryCount\\": 1,\\n      \\"CostTimeAvg\\": 0.2,\\n      \\"QueryCountAvg\\": 3.3,\\n      \\"QueryCount\\": 50,\\n      \\"QueryTimeoutCountPercent\\": 0.5,\\n      \\"QueryOverTenSecPercentNum\\": 0.5,\\n      \\"QueryOverFivePercentNum\\": 0.5,\\n      \\"QueryOverTenSecPercent\\": \\"0.5\\",\\n      \\"QueryOverFiveSecPercent\\": \\"0.5\\"\\n    }\\n  ],\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '查询报表性能日志',
    ),
    'ModifyApiDatasourceParameters' => 
    array (
      'summary' => '修改指定API数据源的配置。',
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
          'name' => 'ApiId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API数据源的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'b66a66de51f24d149116c17718138194',
          ),
        ),
        1 => 
        array (
          'name' => 'WorkspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '726bee5a-****-43e1-9a8e-b550f0120f35',
          ),
        ),
        2 => 
        array (
          'name' => 'Parameters',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'JSONArray格式的API数据参数配置，修改的参数数量不能超过10个。
- name：普通参数或查询语句中的参数名称
- value：普通参数或查询语句中的参数值
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '[{"name":"token","value":"xxxxxxxxxxxx"},{"name":"pageSize","value":100}]',
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
                'example' => 'D8749D65-E80A-433C-AF1B-CE9C180FF3B4',
              ),
              'Result' => 
              array (
                'description' => '接口执行结果。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'ApiDataSource.NotIn.Workspace',
            'errorMessage' => 'Target apiId not in target workspace.',
          ),
          2 => 
          array (
            'errorCode' => 'Workspace.NotIn.Organization',
            'errorMessage' => 'The workspace is not owned by the organization.',
          ),
          3 => 
          array (
            'errorCode' => 'ApiDatasource.Not.Exist',
            'errorMessage' => 'Api datasource not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'ApiDatasource.Param.IsNull',
            'errorMessage' => 'Api datasource modify parameters is null.',
          ),
          5 => 
          array (
            'errorCode' => 'ApiDatasource.Param.Oversize',
            'errorMessage' => 'The number of parameters of API data source exceeds the limit and cannot exceed %s.',
          ),
          6 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          7 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          9 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          10 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          11 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          12 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          13 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          14 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          15 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          16 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          17 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          18 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          19 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          20 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D8749D65-E80A-433C-AF1B-CE9C180FF3B4\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '修改API数据源配置',
      'description' => '修改查询语句时，仅支持修改最上层的JsonObject，不支持多层嵌套内的参数修改。具体的参数说明详见[创建API数据源。](https://help.aliyun.com/document_detail/409330.html)',
    ),
    'ListApiDatasource' => 
    array (
      'summary' => '查询API数据源列表。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WorkspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '89713491-cb4f-4579-b889-e82c35f1****',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API数据源列表的当前页码：

- 起始值：1
- 默认值：1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时的每页行数：

- 默认值：10
- 最大值：100',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'KeyWord',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API数据源名称的关键字。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '测试',
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
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'description' => '返回查询结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNum' => 
                  array (
                    'description' => '请求获取的数据页码数，用于翻页。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '请求接口时设置的每页行数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'Data' => 
                  array (
                    'description' => '查询到的API数据源列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ApiId' => 
                        array (
                          'description' => 'API数据源的ID。',
                          'type' => 'string',
                          'example' => '0f2c3c6409be4dc0810f2a5785e816a8',
                        ),
                        'JobId' => 
                        array (
                          'description' => '任务ID。',
                          'type' => 'string',
                          'example' => 'REST_API_SYNC_0f2c3c6409be4dc0810f2a5785e816a8',
                        ),
                        'ShowName' => 
                        array (
                          'description' => 'API数据源的名称。',
                          'type' => 'string',
                          'example' => '测试数据源',
                        ),
                        'DataSize' => 
                        array (
                          'description' => 'API数据源的数据量。
- 单位：KB',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.39746094',
                        ),
                        'StatusType' => 
                        array (
                          'description' => 'API数据源同步任务状态。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'enumValueTitles' => 
                          array (
                            0 => '待运行',
                            1 => '运行中',
                            2 => '成功',
                            3 => '失败',
                          ),
                          'example' => '2',
                        ),
                        'Parameters' => 
                        array (
                          'description' => 'JSONArray格式的参数配置。
- name：参数名称
- value：参数值',
                          'type' => 'string',
                          'example' => '[{"name":"token","value":"xxxxxxxxxxxx"},{"name":"pageSize","value":100}]',
                        ),
                        'Body' => 
                        array (
                          'description' => 'JSON格式的查询语句参数配置，用户可以自行定义。',
                          'type' => 'string',
                          'example' => '{"key1":"value1"}',
                        ),
                        'DateUpdateTime' => 
                        array (
                          'description' => 'API数据源最后同步时间。',
                          'type' => 'string',
                          'example' => '2022-05-25 16:19:43',
                        ),
                        'GmtCreate' => 
                        array (
                          'description' => '创建时间。',
                          'type' => 'string',
                          'example' => '2022-05-25 16:19:43',
                        ),
                        'GmtModified' => 
                        array (
                          'description' => '修改时间。',
                          'type' => 'string',
                          'example' => '2022-05-25 16:19:43',
                        ),
                      ),
                    ),
                  ),
                  'TotalNum' => 
                  array (
                    'description' => '总行数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                ),
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          2 => 
          array (
            'errorCode' => 'Workspace.NotIn.Organization',
            'errorMessage' => 'The workspace is not owned by the organization.',
          ),
          3 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          4 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          6 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          10 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          11 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          12 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          13 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          14 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          15 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          16 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": {\\n    \\"PageNum\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Data\\": [\\n      {\\n        \\"ApiId\\": \\"0f2c3c6409be4dc0810f2a5785e816a8\\",\\n        \\"JobId\\": \\"REST_API_SYNC_0f2c3c6409be4dc0810f2a5785e816a8\\",\\n        \\"ShowName\\": \\"测试数据源\\",\\n        \\"DataSize\\": 0.39746094,\\n        \\"StatusType\\": 2,\\n        \\"Parameters\\": \\"[{\\\\\\"name\\\\\\":\\\\\\"token\\\\\\",\\\\\\"value\\\\\\":\\\\\\"xxxxxxxxxxxx\\\\\\"},{\\\\\\"name\\\\\\":\\\\\\"pageSize\\\\\\",\\\\\\"value\\\\\\":100}]\\",\\n        \\"Body\\": \\"{\\\\\\"key1\\\\\\":\\\\\\"value1\\\\\\"}\\",\\n        \\"DateUpdateTime\\": \\"2022-05-25 16:19:43\\",\\n        \\"GmtCreate\\": \\"2022-05-25 16:19:43\\",\\n        \\"GmtModified\\": \\"2022-05-25 16:19:43\\"\\n      }\\n    ],\\n    \\"TotalNum\\": 1\\n  },\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '查询API数据源列表',
      'description' => '具体的参数说明详见[创建API数据源。](https://help.aliyun.com/document_detail/409330.html)',
    ),
    'QueryDatasetInfo' => 
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
          'name' => 'DatasetId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集唯一ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'a201c85c-******',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '接口是否成功返回，取值范围：

- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'a4d1a221d-41za1-****',
              ),
              'Result' => 
              array (
                'description' => '数据集信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'GmtModify' => 
                  array (
                    'description' => '数据集最新修改时间。',
                    'type' => 'string',
                    'example' => '1629450382000',
                  ),
                  'DsName' => 
                  array (
                    'description' => '数据源名称。',
                    'type' => 'string',
                    'example' => 'odps',
                  ),
                  'DsId' => 
                  array (
                    'description' => '数据源唯一ID。',
                    'type' => 'string',
                    'example' => 'a201c85c-******',
                  ),
                  'OwnerName' => 
                  array (
                    'description' => '数据集所有者名称。',
                    'type' => 'string',
                    'example' => '大娃',
                  ),
                  'WorkspaceName' => 
                  array (
                    'description' => '数据集所处空间名称。',
                    'type' => 'string',
                    'example' => '测试空间',
                  ),
                  'OwnerId' => 
                  array (
                    'description' => '数据集所有者在Quick BI的用户ID。',
                    'type' => 'string',
                    'example' => 'b8494aab26124*****',
                  ),
                  'DatasetName' => 
                  array (
                    'description' => '数据集名称。',
                    'type' => 'string',
                    'example' => 'opds_40',
                  ),
                  'RowLevel' => 
                  array (
                    'description' => '行级权限是否开启，取值范围：

- true：开启
- false：关闭',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'WorkspaceId' => 
                  array (
                    'description' => '数据集所属工作空间唯一ID。',
                    'type' => 'string',
                    'example' => '420abef4-a79b-4289-b12****',
                  ),
                  'CustimzeSql' => 
                  array (
                    'description' => '是否自定义SQL，取值范围：

- true：是
- false：否',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'GmtCreate' => 
                  array (
                    'description' => '数据集创建时间。',
                    'type' => 'string',
                    'example' => '1629450382000',
                  ),
                  'DsType' => 
                  array (
                    'description' => '数据源类型，取值范围：

- mysql
- odps
- oracle
- …等Quick BI支持的数据源类型',
                    'type' => 'string',
                    'example' => 'odps',
                  ),
                  'DatasetId' => 
                  array (
                    'description' => '数据集唯一ID。',
                    'type' => 'string',
                    'example' => 'a201c85c-******',
                  ),
                  'OpenOfflineAcceleration' => 
                  array (
                    'description' => '是否开启抽取加速，取值范围：

- true：开启
- false：关闭',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'CubeTableList' => 
                  array (
                    'description' => '数据集所使用的表的列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TableName' => 
                        array (
                          'description' => '表名称。',
                          'type' => 'string',
                          'example' => 'viewdasb8494aab2612473cb74992159fe****',
                        ),
                        'DatasourceId' => 
                        array (
                          'description' => '数据源ID。',
                          'type' => 'string',
                          'example' => 'dfefd7f4-fc6e-42c9-b4******',
                        ),
                        'DsType' => 
                        array (
                          'description' => '数据源类型，取值范围：

- mysql
- odps
- oracle
- ...等Quick BI支持的数据源类型',
                          'type' => 'string',
                          'example' => 'maxcompute',
                        ),
                        'UniqueId' => 
                        array (
                          'description' => '表唯一ID。',
                          'type' => 'string',
                          'example' => '7a62530b36',
                        ),
                        'FactTable' => 
                        array (
                          'description' => '是否是数据源表，取值范围：

- true：数据源表
- false：自定义表',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'Caption' => 
                        array (
                          'description' => '表的显示名称。',
                          'type' => 'string',
                          'example' => 'odps_40',
                        ),
                        'Customsql' => 
                        array (
                          'description' => '是否是自定义SQL表，取值范围：

- true：自定义SQL表
- false：非自定义SQL表',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'Sql' => 
                        array (
                          'description' => '当为自定义SQL表时，此为具体SQL。',
                          'type' => 'string',
                          'example' => 'select * from ****',
                        ),
                      ),
                    ),
                  ),
                  'DimensionList' => 
                  array (
                    'description' => '数据集中所有维度的列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DataType' => 
                        array (
                          'description' => '数据类型； 取值范围：

- string：字符
- number：数字
- datetime：时间',
                          'type' => 'string',
                          'example' => 'string',
                        ),
                        'Expression' => 
                        array (
                          'description' => '计算维度的表达式；仅对计算维度有效。',
                          'type' => 'string',
                          'example' => 'example_expression',
                        ),
                        'FactColumn' => 
                        array (
                          'description' => '实际物理字段。',
                          'type' => 'string',
                          'example' => 'city',
                        ),
                        'DimensionType' => 
                        array (
                          'description' => '维度类型，取值范围：

- standard_dimension：普通维度
- calculate_dimension：计算维度
- group_dimension：分组维度',
                          'type' => 'string',
                          'example' => 'group_dimension',
                        ),
                        'Granularity' => 
                        array (
                          'description' => '粒度。',
                          'type' => 'string',
                          'example' => 'example_granularity',
                        ),
                        'RefUid' => 
                        array (
                          'description' => '分组度量，引用的字段唯一ID。当且仅当该度量为分组度量时非NULL。',
                          'type' => 'string',
                          'example' => '308f7****',
                        ),
                        'Caption' => 
                        array (
                          'description' => '维度显示名称。',
                          'type' => 'string',
                          'example' => 'city',
                        ),
                        'Uid' => 
                        array (
                          'description' => '唯一ID。',
                          'type' => 'string',
                          'example' => 'a69774***',
                        ),
                        'TableUniqueId' => 
                        array (
                          'description' => '所属表的唯一ID，对应CubeTypeList的UniqueId。',
                          'type' => 'string',
                          'example' => '7a62530***',
                        ),
                      ),
                    ),
                  ),
                  'MeasureList' => 
                  array (
                    'description' => '数据集所有度量的列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DataType' => 
                        array (
                          'description' => '数据类型； 取值范围：

- string：字符
- number：数字
- datetime：时间',
                          'type' => 'string',
                          'example' => 'string',
                        ),
                        'Expression' => 
                        array (
                          'description' => '计算度量的表达式；仅对计算度量有效。',
                          'type' => 'string',
                          'example' => 'example_expression',
                        ),
                        'MeasureType' => 
                        array (
                          'description' => '度量类型，取值范围：

- standard_measure：普通度量
- calculate_measure：计算度量',
                          'type' => 'string',
                          'example' => 'calculate_measure',
                        ),
                        'FactColumn' => 
                        array (
                          'description' => '实际物理字段。',
                          'type' => 'string',
                          'example' => 'profit_amt',
                        ),
                        'Caption' => 
                        array (
                          'description' => '度量显示名称。',
                          'type' => 'string',
                          'example' => 'profit_amt',
                        ),
                        'TableUniqueId' => 
                        array (
                          'description' => '所属表的唯一ID，对应CubeTypeList的UniqueId。',
                          'type' => 'string',
                          'example' => '7a62530b36',
                        ),
                        'Uid' => 
                        array (
                          'description' => '度量唯一ID。',
                          'type' => 'string',
                          'example' => '88b680****',
                        ),
                      ),
                    ),
                  ),
                  'Directory' => 
                  array (
                    'description' => '数据集所属目录信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'PathId' => 
                      array (
                        'description' => '目录ID的路径，例如：aa/bb/cc/dd。',
                        'type' => 'string',
                        'example' => '88b680****',
                      ),
                      'PathName' => 
                      array (
                        'description' => '目录ID的路径名称，例如：一层目录/二层目录。',
                        'type' => 'string',
                        'example' => '测试目录',
                      ),
                      'Name' => 
                      array (
                        'description' => '目录名称。',
                        'type' => 'string',
                        'example' => '测试目录',
                      ),
                      'Id' => 
                      array (
                        'description' => '目录ID。',
                        'type' => 'string',
                        'example' => 'a3eecab7-618d-4f9f-*****',
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
            'errorCode' => 'Cube.Not.Exist',
            'errorMessage' => 'The Cube does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'Not.WorkspaceCube.Error',
            'errorMessage' => 'You can only use the %s dataset of the current workspace.',
          ),
          2 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'Decryption.Error',
            'errorMessage' => 'An error occurred while decoding.',
          ),
          4 => 
          array (
            'errorCode' => 'Datasource.UserPermission.Error',
            'errorMessage' => 'You do not have datasource authorization.',
          ),
          5 => 
          array (
            'errorCode' => 'CubeMeta.ToXml.Error',
            'errorMessage' => 'An error occurred while converting the data object to the XML format.',
          ),
          6 => 
          array (
            'errorCode' => 'Datasource.NotFound.Error',
            'errorMessage' => 'The specified data source does not exist: %s.',
          ),
          7 => 
          array (
            'errorCode' => 'Cube.ParseToXml.Error',
            'errorMessage' => 'An error occurred while parsing a dataset object to XML format.',
          ),
          8 => 
          array (
            'errorCode' => 'DatasourceId.IsNull.Error',
            'errorMessage' => 'You must select a data source before selecting the table.',
          ),
          9 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          10 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          11 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          12 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          13 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          14 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          15 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          16 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          17 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          18 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          19 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          20 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          21 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          22 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          23 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"a4d1a221d-41za1-****\\",\\n  \\"Result\\": {\\n    \\"GmtModify\\": \\"1629450382000\\",\\n    \\"DsName\\": \\"odps\\",\\n    \\"DsId\\": \\"a201c85c-******\\",\\n    \\"OwnerName\\": \\"大娃\\",\\n    \\"WorkspaceName\\": \\"测试空间\\",\\n    \\"OwnerId\\": \\"b8494aab26124*****\\",\\n    \\"DatasetName\\": \\"opds_40\\",\\n    \\"RowLevel\\": false,\\n    \\"WorkspaceId\\": \\"420abef4-a79b-4289-b12****\\",\\n    \\"CustimzeSql\\": false,\\n    \\"GmtCreate\\": \\"1629450382000\\",\\n    \\"DsType\\": \\"odps\\",\\n    \\"DatasetId\\": \\"a201c85c-******\\",\\n    \\"OpenOfflineAcceleration\\": false,\\n    \\"CubeTableList\\": [\\n      {\\n        \\"TableName\\": \\"viewdasb8494aab2612473cb74992159fe****\\",\\n        \\"DatasourceId\\": \\"dfefd7f4-fc6e-42c9-b4******\\",\\n        \\"DsType\\": \\"maxcompute\\",\\n        \\"UniqueId\\": \\"7a62530b36\\",\\n        \\"FactTable\\": true,\\n        \\"Caption\\": \\"odps_40\\",\\n        \\"Customsql\\": false,\\n        \\"Sql\\": \\"select * from ****\\"\\n      }\\n    ],\\n    \\"DimensionList\\": [\\n      {\\n        \\"DataType\\": \\"string\\",\\n        \\"Expression\\": \\"example_expression\\",\\n        \\"FactColumn\\": \\"city\\",\\n        \\"DimensionType\\": \\"group_dimension\\",\\n        \\"Granularity\\": \\"example_granularity\\",\\n        \\"RefUid\\": \\"308f7****\\",\\n        \\"Caption\\": \\"city\\",\\n        \\"Uid\\": \\"a69774***\\",\\n        \\"TableUniqueId\\": \\"7a62530***\\"\\n      }\\n    ],\\n    \\"MeasureList\\": [\\n      {\\n        \\"DataType\\": \\"string\\",\\n        \\"Expression\\": \\"example_expression\\",\\n        \\"MeasureType\\": \\"calculate_measure\\",\\n        \\"FactColumn\\": \\"profit_amt\\",\\n        \\"Caption\\": \\"profit_amt\\",\\n        \\"TableUniqueId\\": \\"7a62530b36\\",\\n        \\"Uid\\": \\"88b680****\\"\\n      }\\n    ],\\n    \\"Directory\\": {\\n      \\"PathId\\": \\"88b680****\\",\\n      \\"PathName\\": \\"测试目录\\",\\n      \\"Name\\": \\"测试目录\\",\\n      \\"Id\\": \\"a3eecab7-618d-4f9f-*****\\"\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryDatasetInfoResponse>\\n    <Success>true</Success>\\n    <RequestId>a4d1a221d-41za1-****</RequestId>\\n    <Result>\\n        <GmtModify>1629450382000</GmtModify>\\n        <DsName>odps</DsName>\\n        <DsId>a201c85c-******</DsId>\\n        <OwnerName>大娃</OwnerName>\\n        <WorkspaceName>测试空间</WorkspaceName>\\n        <OwnerId>b8494aab26124*****</OwnerId>\\n        <DatasetName>opds_40</DatasetName>\\n        <RowLevel>false</RowLevel>\\n        <WorkspaceId>420abef4-a79b-4289-b12****</WorkspaceId>\\n        <CustimzeSql>false</CustimzeSql>\\n        <GmtCreate>1629450382000</GmtCreate>\\n        <DsType>odps</DsType>\\n        <DatasetId>a201c85c-******</DatasetId>\\n        <CubeTableList>\\n            <TableName>viewdasb8494aab2612473cb74992159fe****</TableName>\\n            <DatasourceId>dfefd7f4-fc6e-42c9-b4******</DatasourceId>\\n            <DsType>maxcompute</DsType>\\n            <UniqueId>7a62530b36</UniqueId>\\n            <FactTable>true</FactTable>\\n            <Caption>odps_40</Caption>\\n            <Customsql>false</Customsql>\\n            <Sql>select * from ****</Sql>\\n        </CubeTableList>\\n        <DimensionList>\\n            <DataType>string</DataType>\\n            <Expression>example_expression</Expression>\\n            <FactColumn>city</FactColumn>\\n            <DimensionType>group_dimension</DimensionType>\\n            <Granularity>example_granularity</Granularity>\\n            <RefUid>308f7****</RefUid>\\n            <Caption>city</Caption>\\n            <Uid>a69774***</Uid>\\n            <TableUniqueId>7a62530***</TableUniqueId>\\n        </DimensionList>\\n        <MeasureList>\\n            <DataType>string</DataType>\\n            <Expression>example_expression</Expression>\\n            <MeasureType>calculate_measure</MeasureType>\\n            <FactColumn>profit_amt</FactColumn>\\n            <Caption>profit_amt</Caption>\\n            <TableUniqueId>7a62530b36</TableUniqueId>\\n            <Uid>88b680****</Uid>\\n        </MeasureList>\\n        <Directory>\\n            <PathId>88b680****</PathId>\\n            <PathName>测试目录</PathName>\\n            <Name>测试目录</Name>\\n            <Id>a3eecab7-618d-4f9f-*****</Id>\\n        </Directory>\\n    </Result>\\n</QueryDatasetInfoResponse>","errorExample":""}]',
      'title' => '查询数据集详情V2',
      'summary' => '查询指定数据集的信息。',
    ),
    'QueryDatasetDetailInfo' => 
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
          'name' => 'DatasetId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '5820f58c-c734-4d8a-baf1-7979af4f****',
          ),
        ),
      ),
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
                'example' => 'DC4E1E63-B337-44F8-8C22-6F00DF67E2C3',
              ),
              'Result' => 
              array (
                'description' => '返回JSON格式的数据集数据：
`{ "cube": { "dimensions": [ { "caption": "客户名称", "dataType": "string", "dimensionType": "standard_dimension", "factColumn": "customer_name", "uid": "N5820f5_customer_name" }, { "caption": "订单编号", "dataType": "string", "dimensionType": "standard_dimension", "factColumn": "order_id", "uid": "N5820f5_order_id" }, ], "measures": [ { "caption": "订单金额", "dataType": "number", "factColumn": "order_amt", "measureType": "standard_measure", "uid": "N5820f5_order_amt" } ], "table": { "customsql": false, "dsId": "261b252d-c3c3-498a-a0a7-5d1ec6cd****", "tableName": "company_sales_record_copy" } }, "datasetId": "5820f58c-c734-4d8a-baf1-7979af4f****", "datasetName": "company_sales_record_copy12", "datasource": { "dsId": "261b252d-c3c3-498a-a0a7-5d1ec6cd****", "dsName": "立三自用", "dsType": "mysql" }, "directory": { "id": "schemaad8aad00-9c55-4984-a767-b4e0ec60****", "name": "我的数据集", "pathId": "schemaad8aad00-9c55-4984-a767-b4e0ec60****", "pathName": "我的数据集" }, "ownerId": "13651626232****", "ownerName": "张三", "rowLevel": false, "workspaceId": "95296e95-ca89-4c7d-8af9-dedf0ad0****", "workspaceName": "测试工作空间" }`',
                'type' => 'string',
                'example' => '返回JSON格式的数据集数据，详见左侧说明。',
              ),
              'Success' => 
              array (
                'description' => '返回接口执行结果。取值范围：

- true：执行成功
- false：执行失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Cube.Not.Exist',
            'errorMessage' => 'The Cube does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'Not.WorkspaceCube.Error',
            'errorMessage' => 'You can only use the %s dataset of the current workspace.',
          ),
          2 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'DatasourceId.IsNull.Error',
            'errorMessage' => 'You must select a data source before selecting the table.',
          ),
          4 => 
          array (
            'errorCode' => 'Datasource.UserPermission.Error',
            'errorMessage' => 'You do not have datasource authorization.',
          ),
          5 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          6 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          7 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          9 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          10 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          11 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          12 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          13 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          14 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          15 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          16 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          17 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          18 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          19 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DC4E1E63-B337-44F8-8C22-6F00DF67E2C3\\",\\n  \\"Result\\": \\"返回JSON格式的数据集数据，详见左侧说明。\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<QueryDatasetDetailInfoResponse>\\n    <RequestId>DC4E1E63-B337-44F8-8C22-6F00DF67E2C3</RequestId>\\n    <Result>返回JSON格式的数据集数据，详见右侧说明。</Result>\\n    <Success>true</Success>\\n</QueryDatasetDetailInfoResponse>","errorExample":""}]',
      'title' => '查询数据集详情',
      'summary' => '查询指定数据集的详情，包括所属数据源、目录、以及数据集模型。',
      'description' => '其中包括所属数据源、目录、以及数据集模型（包含维度、度量、物理字段、自定义SQL文本、关联关系等信息）。',
    ),
    'QueryDatasetList' => 
    array (
      'summary' => '查询指定工作空间的数据集列表，按照创建时间倒序排列。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WorkspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '95296e95-ca89-4c7d-8af9-dedf0ad0****',
          ),
        ),
        1 => 
        array (
          'name' => 'DirectoryId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定目录ID。

- 若该字段不为空，则获取该目录下的所有数据集。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'schemaad8aad00-9c55-4984-a767-b4e0ec60****',
          ),
        ),
        2 => 
        array (
          'name' => 'WithChildren',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否递归包好子目录下的数据集。取值范围：

- true：返回directoryId目录下所有递归子目录下的数据集。
- false：仅返回directoryId指定目录下的数据集，不包含子目录下的。',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'Keyword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集名称搜索关键字。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '测试数据集',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集列表的当前页码：

- 起始值：1
- 默认值：1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时的每页行数：

- 默认值：10
- 最大值：1000',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
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
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'description' => '返回数据集列表的分页结果，数据集列表的详细信息存放在返回参数Data中。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalPages' => 
                  array (
                    'description' => '总页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageNum' => 
                  array (
                    'description' => '页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '请求接口时设置的每页行数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'TotalNum' => 
                  array (
                    'description' => '总行数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Data' => 
                  array (
                    'description' => '数据集列表详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RowLevel' => 
                        array (
                          'description' => '是否开启行级权限。取值范围：

- true：开启
- false：关闭',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'WorkspaceId' => 
                        array (
                          'description' => '工作空间ID。',
                          'type' => 'string',
                          'example' => '95296e95-ca89-4c7d-8af9-dedf0ad06adf',
                        ),
                        'Description' => 
                        array (
                          'description' => '数据集备注。',
                          'type' => 'string',
                          'example' => '测试用数据集',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建时间。',
                          'type' => 'string',
                          'example' => '2020-11-02 10:36:05',
                        ),
                        'OwnerName' => 
                        array (
                          'description' => '数据集拥有者的昵称。',
                          'type' => 'string',
                          'example' => '张三',
                        ),
                        'WorkspaceName' => 
                        array (
                          'description' => '工作空间名称。',
                          'type' => 'string',
                          'example' => '测试空间',
                        ),
                        'OwnerId' => 
                        array (
                          'description' => '数据集拥有者在Quick BI的UserID。',
                          'type' => 'string',
                          'example' => '136516262323****',
                        ),
                        'ModifyTime' => 
                        array (
                          'description' => '修改时间。',
                          'type' => 'string',
                          'example' => '2020-11-02 10:36:05',
                        ),
                        'DatasetName' => 
                        array (
                          'description' => '数据集名称。',
                          'type' => 'string',
                          'example' => 'company_sales_record_copy12',
                        ),
                        'DatasetId' => 
                        array (
                          'description' => '数据集ID。',
                          'type' => 'string',
                          'example' => '5820f58c-c734-4d8a-baf1-7979af4f****',
                        ),
                        'OpenOfflineAcceleration' => 
                        array (
                          'description' => '是否开启抽取加速。取值范围：

- true：开启
- false：关闭',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'DataSource' => 
                        array (
                          'description' => '数据集所属数据源信息',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'DsType' => 
                            array (
                              'description' => '数据源类型。',
                              'type' => 'string',
                              'example' => 'mysql',
                            ),
                            'DsName' => 
                            array (
                              'description' => '数据源名称。',
                              'type' => 'string',
                              'example' => '测试数据源',
                            ),
                            'DsId' => 
                            array (
                              'description' => '数据源ID。',
                              'type' => 'string',
                              'example' => '261b252d-c3c3-498a-a0a7-5d1ec6cd****',
                            ),
                          ),
                        ),
                        'Directory' => 
                        array (
                          'description' => '数据集所处目录信息',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'PathId' => 
                            array (
                              'description' => '所处目录路径的ID。',
                              'type' => 'string',
                              'example' => 'schemaad8aad00-9c55-4984-a767-b4e0ec60****',
                            ),
                            'PathName' => 
                            array (
                              'description' => '所处目录路径的名称。',
                              'type' => 'string',
                              'example' => '我的数据集目录',
                            ),
                            'Name' => 
                            array (
                              'description' => '目录名称。',
                              'type' => 'string',
                              'example' => '我的数据集目录',
                            ),
                            'Id' => 
                            array (
                              'description' => '目录ID。',
                              'type' => 'string',
                              'example' => 'schemaad8aad00-9c55-4984-a767-b4e0ec60****',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Workspace.NotIn.Organization',
            'errorMessage' => 'The workspace is not owned by the organization.',
          ),
          1 => 
          array (
            'errorCode' => 'CubeSchema.Not.Exist',
            'errorMessage' => 'The cube schema does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          3 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          4 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          6 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          10 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          11 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          12 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          13 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          14 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          15 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          16 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          17 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": {\\n    \\"TotalPages\\": 1,\\n    \\"PageNum\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"TotalNum\\": 1,\\n    \\"Data\\": [\\n      {\\n        \\"RowLevel\\": true,\\n        \\"WorkspaceId\\": \\"95296e95-ca89-4c7d-8af9-dedf0ad06adf\\",\\n        \\"Description\\": \\"测试用数据集\\",\\n        \\"CreateTime\\": \\"2020-11-02 10:36:05\\",\\n        \\"OwnerName\\": \\"张三\\",\\n        \\"WorkspaceName\\": \\"测试空间\\",\\n        \\"OwnerId\\": \\"136516262323****\\",\\n        \\"ModifyTime\\": \\"2020-11-02 10:36:05\\",\\n        \\"DatasetName\\": \\"company_sales_record_copy12\\",\\n        \\"DatasetId\\": \\"5820f58c-c734-4d8a-baf1-7979af4f****\\",\\n        \\"OpenOfflineAcceleration\\": true,\\n        \\"DataSource\\": {\\n          \\"DsType\\": \\"mysql\\",\\n          \\"DsName\\": \\"测试数据源\\",\\n          \\"DsId\\": \\"261b252d-c3c3-498a-a0a7-5d1ec6cd****\\"\\n        },\\n        \\"Directory\\": {\\n          \\"PathId\\": \\"schemaad8aad00-9c55-4984-a767-b4e0ec60****\\",\\n          \\"PathName\\": \\"我的数据集目录\\",\\n          \\"Name\\": \\"我的数据集目录\\",\\n          \\"Id\\": \\"schemaad8aad00-9c55-4984-a767-b4e0ec60****\\"\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryDatasetListResponse>\\n    <Success>true</Success>\\n    <RequestId>D787E1A3-A93C-424A-B626-C2B05DF8D885</RequestId>\\n    <Result>\\n        <TotalPages>1</TotalPages>\\n        <PageNum>1</PageNum>\\n        <PageSize>10</PageSize>\\n        <TotalNum>1</TotalNum>\\n        <Data>\\n            <RowLevel>true</RowLevel>\\n            <WorkspaceId>95296e95-ca89-4c7d-8af9-dedf0ad06adf</WorkspaceId>\\n            <Description>测试用数据集</Description>\\n            <CreateTime>2020-11-02 10:36:05</CreateTime>\\n            <OwnerName>张三</OwnerName>\\n            <WorkspaceName>测试空间</WorkspaceName>\\n            <OwnerId>136516262323****</OwnerId>\\n            <ModifyTime>2020-11-02 10:36:05</ModifyTime>\\n            <DatasetName>company_sales_record_copy12</DatasetName>\\n            <DatasetId>5820f58c-c734-4d8a-baf1-7979af4f****</DatasetId>\\n            <DataSource>\\n                <DsType>mysql</DsType>\\n                <DsName>测试数据源</DsName>\\n                <DsId>261b252d-c3c3-498a-a0a7-5d1ec6cd****</DsId>\\n            </DataSource>\\n            <Directory>\\n                <PathId>schemaad8aad00-9c55-4984-a767-b4e0ec60****</PathId>\\n                <PathName>我的数据集目录</PathName>\\n                <Name>我的数据集目录</Name>\\n                <Id>schemaad8aad00-9c55-4984-a767-b4e0ec60****</Id>\\n            </Directory>\\n        </Data>\\n    </Result>\\n</QueryDatasetListResponse>","errorExample":""}]',
      'title' => '查询工作空间数据集列表',
    ),
    'AllotDatasetAccelerationTask' => 
    array (
      'summary' => '触发数据集Quick引擎的采集加速。',
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
          'name' => 'CubeId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '数据集ID。',
            'description' => '数据集ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '7c7223ae-****-3c744528014b',
          ),
        ),
      ),
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
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D8749D65-E80A-433C-AF1B-CE9C180FF3B4',
              ),
              'Result' => 
              array (
                'title' => '是否执行成功。',
                'description' => '返回结果：
- true：任务触发成功
- false：任务触发失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'Quick.Job.NotExist',
            'errorMessage' => 'The acceleration job is not found,please check the acceleration configuration.',
          ),
          2 => 
          array (
            'errorCode' => 'Cube.Not.Exist',
            'errorMessage' => 'The Cube does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'Last.Job.Failed',
            'errorMessage' => 'Last job status is warn or failure, please check.',
          ),
          4 => 
          array (
            'errorCode' => 'Repeat.Running.Job',
            'errorMessage' => 'Job is already in progress.',
          ),
          5 => 
          array (
            'errorCode' => 'User.OperationPermission.Error',
            'errorMessage' => 'You are not authorized to operate this object.',
          ),
          6 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          7 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          9 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          10 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          11 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          12 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          13 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          14 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          15 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          16 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          17 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          18 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          19 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          20 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D8749D65-E80A-433C-AF1B-CE9C180FF3B4\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '触发数据集抽取加速',
    ),
    'QueryCubePerformance' => 
    array (
      'summary' => '查询数据集性能日志。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'QueryType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询类型：

- **lastDay**：昨天
- **sevenDays**：七天内
- **thirtyDays**：三十天内',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'sevenDays',
          ),
        ),
        1 => 
        array (
          'name' => 'WorkspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '95296e95-ca89-4c7d-8af9-dedf0ad0****',
          ),
        ),
        2 => 
        array (
          'name' => 'CubeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '7c7223ae-****-3c744528014b',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间成员列表的当前页码：

- 起始值：1
- 默认值：1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时的每页行数：
- 默认值：10
- 最大值：1000
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '100',
          ),
        ),
        5 => 
        array (
          'name' => 'CostTimeAvgMin',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '平均耗时（分钟）。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '685072a0-1fd5-40ef-ae6b-cf94e79e718f',
              ),
              'Result' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据集诊断信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CubeId' => 
                    array (
                      'description' => '数据集ID。',
                      'type' => 'string',
                      'example' => '7c7223ae-****-3c744528014b',
                    ),
                    'CubeName' => 
                    array (
                      'description' => '数据集名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'QueryTimeoutCount' => 
                    array (
                      'description' => '图表查询超时次数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'RepeatSqlQueryPercent' => 
                    array (
                      'description' => '重复查询占比。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'WorkspaceName' => 
                    array (
                      'description' => '空间名称。',
                      'type' => 'string',
                      'example' => '测试工作空间',
                    ),
                    'WorkspaceId' => 
                    array (
                      'description' => '作品所属工作空间的ID。',
                      'type' => 'string',
                      'example' => '87c6b145-090c-43e1-9426-8f93be23****',
                    ),
                    'RepeatQueryPercentNum' => 
                    array (
                      'description' => '重复查询数。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '1',
                    ),
                    'RepeatQueryPercent' => 
                    array (
                      'description' => '重复查询占比。',
                      'type' => 'string',
                      'example' => '0.3',
                    ),
                    'QuickIndexCostTimeAvg' => 
                    array (
                      'description' => '命中Quick引擎平均查询耗时。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '1',
                    ),
                    'QuickIndexQueryCount' => 
                    array (
                      'description' => '命中Quick引擎次数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'CacheCostTimeAvg' => 
                    array (
                      'description' => '命中缓存平均耗时。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '1',
                    ),
                    'CacheQueryCount' => 
                    array (
                      'description' => '命中缓存次数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'RepeatSqlQueryCount' => 
                    array (
                      'description' => '重复查询次数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'CostTimeAvg' => 
                    array (
                      'description' => '平均查询时间。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '1',
                    ),
                    'QueryCountAvg' => 
                    array (
                      'description' => '平均查询次数。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '1',
                    ),
                    'QueryCount' => 
                    array (
                      'description' => '查询次数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '50',
                    ),
                    'QueryTimeoutCountPercent' => 
                    array (
                      'description' => '图表查询超时次数占比。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '1',
                    ),
                    'QueryOverTenSecPercentNum' => 
                    array (
                      'description' => '查询超过10s查询次数占比。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '1.0',
                    ),
                    'QueryOverFivePercentNum' => 
                    array (
                      'description' => '查询超过5s查询次数占比。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '1.0',
                    ),
                    'QueryOverTenSecPercent' => 
                    array (
                      'description' => '查询超过10s占比。',
                      'type' => 'string',
                      'example' => '1.0',
                    ),
                    'QueryOverFiveSecPercent' => 
                    array (
                      'description' => '查询超过5s占比。',
                      'type' => 'string',
                      'example' => '1.0',
                    ),
                  ),
                ),
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          5 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          9 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          10 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          11 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          13 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          14 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          15 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"685072a0-1fd5-40ef-ae6b-cf94e79e718f\\",\\n  \\"Result\\": [\\n    {\\n      \\"CubeId\\": \\"7c7223ae-****-3c744528014b\\",\\n      \\"CubeName\\": \\"test\\",\\n      \\"QueryTimeoutCount\\": 1,\\n      \\"RepeatSqlQueryPercent\\": \\"1\\",\\n      \\"WorkspaceName\\": \\"测试工作空间\\",\\n      \\"WorkspaceId\\": \\"87c6b145-090c-43e1-9426-8f93be23****\\",\\n      \\"RepeatQueryPercentNum\\": 1,\\n      \\"RepeatQueryPercent\\": \\"0.3\\",\\n      \\"QuickIndexCostTimeAvg\\": 1,\\n      \\"QuickIndexQueryCount\\": 1,\\n      \\"CacheCostTimeAvg\\": 1,\\n      \\"CacheQueryCount\\": 1,\\n      \\"RepeatSqlQueryCount\\": 1,\\n      \\"CostTimeAvg\\": 1,\\n      \\"QueryCountAvg\\": 1,\\n      \\"QueryCount\\": 50,\\n      \\"QueryTimeoutCountPercent\\": 1,\\n      \\"QueryOverTenSecPercentNum\\": 1,\\n      \\"QueryOverFivePercentNum\\": 1,\\n      \\"QueryOverTenSecPercent\\": \\"1.0\\",\\n      \\"QueryOverFiveSecPercent\\": \\"1.0\\"\\n    }\\n  ],\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '查询数据集性能日志',
    ),
    'QueryCubeOptimization' => 
    array (
      'summary' => '查询数据集优化建议。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WorkspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '95296e95-ca89-4c7d-8af9-dedf0ad0****',
          ),
        ),
      ),
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
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CubePerformanceDiagnoseModel' => 
                    array (
                      'description' => '数据集诊断信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CubeId' => 
                        array (
                          'description' => '数据集ID。',
                          'type' => 'string',
                          'example' => '3e45b61a-9ba8-4c7c-8248-8dbe69945636',
                        ),
                        'CubeName' => 
                        array (
                          'description' => '数据集名称。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'QueryTimeoutCount' => 
                        array (
                          'description' => '图表查询超时次数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'RepeatSqlQueryPercent' => 
                        array (
                          'description' => '重复查询占比。',
                          'type' => 'string',
                          'example' => '0.3',
                        ),
                        'WorkspaceName' => 
                        array (
                          'description' => '工作空间名称。',
                          'type' => 'string',
                          'example' => 'eco0sh0prods',
                        ),
                        'WorkspaceId' => 
                        array (
                          'description' => '工作空间ID。',
                          'type' => 'string',
                          'example' => '6ea74bff-c818-4188-b462-dbb45a24dbac',
                        ),
                        'RepeatQueryPercentNum' => 
                        array (
                          'description' => '重复查询数。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '2',
                        ),
                        'RepeatQueryPercent' => 
                        array (
                          'description' => '重复查询占比。',
                          'type' => 'string',
                          'example' => '0.1',
                        ),
                        'QuickIndexCostTimeAvg' => 
                        array (
                          'description' => '命中Quick引擎平均查询耗时。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '1',
                        ),
                        'QuickIndexQueryCount' => 
                        array (
                          'description' => '命中Quick引擎次数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'CacheCostTimeAvg' => 
                        array (
                          'description' => '命中缓存平均耗时。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '1',
                        ),
                        'CacheQueryCount' => 
                        array (
                          'description' => '命中缓存次数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'RepeatSqlQueryCount' => 
                        array (
                          'description' => '重复查询次数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'CostTimeAvg' => 
                        array (
                          'description' => '平均查询时间。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '1.0',
                        ),
                        'QueryCountAvg' => 
                        array (
                          'description' => '平均查询次数。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '2',
                        ),
                        'QueryCount' => 
                        array (
                          'description' => '查询次数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '50',
                        ),
                        'QueryTimeoutCountPercent' => 
                        array (
                          'description' => '图表查询超时次数占比。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '0.3',
                        ),
                        'QueryOverTenSecPercentNum' => 
                        array (
                          'description' => '查询超过10s查询次数占比。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '0.3',
                        ),
                        'QueryOverFivePercentNum' => 
                        array (
                          'description' => '查询超过5s查询次数占比。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '0.1',
                        ),
                        'QueryOverTenSecPercent' => 
                        array (
                          'description' => '查询超过10s占比。',
                          'type' => 'string',
                          'example' => '0.1',
                        ),
                        'QueryOverFiveSecPercent' => 
                        array (
                          'description' => '查询超过5s占比。',
                          'type' => 'string',
                          'example' => '0.5',
                        ),
                      ),
                    ),
                    'AdviceType' => 
                    array (
                      'description' => '建议的类型，取值说明：
- **OPEN_CACHE**：开放缓存。
- **OPEN_QUICK_ENGINE**：开放快速缓存。
- **INCREASE_CACHE_TIME**：增长缓存时间。',
                      'type' => 'string',
                      'example' => 'OPENQUICKENGINE',
                    ),
                  ),
                ),
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：
- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          5 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          9 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          10 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          11 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          13 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          14 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          15 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": [\\n    {\\n      \\"CubePerformanceDiagnoseModel\\": {\\n        \\"CubeId\\": \\"3e45b61a-9ba8-4c7c-8248-8dbe69945636\\",\\n        \\"CubeName\\": \\"test\\",\\n        \\"QueryTimeoutCount\\": 1,\\n        \\"RepeatSqlQueryPercent\\": \\"0.3\\",\\n        \\"WorkspaceName\\": \\"eco0sh0prods\\",\\n        \\"WorkspaceId\\": \\"6ea74bff-c818-4188-b462-dbb45a24dbac\\",\\n        \\"RepeatQueryPercentNum\\": 2,\\n        \\"RepeatQueryPercent\\": \\"0.1\\",\\n        \\"QuickIndexCostTimeAvg\\": 1,\\n        \\"QuickIndexQueryCount\\": 2,\\n        \\"CacheCostTimeAvg\\": 1,\\n        \\"CacheQueryCount\\": 2,\\n        \\"RepeatSqlQueryCount\\": 2,\\n        \\"CostTimeAvg\\": 1,\\n        \\"QueryCountAvg\\": 2,\\n        \\"QueryCount\\": 50,\\n        \\"QueryTimeoutCountPercent\\": 0.3,\\n        \\"QueryOverTenSecPercentNum\\": 0.3,\\n        \\"QueryOverFivePercentNum\\": 0.1,\\n        \\"QueryOverTenSecPercent\\": \\"0.1\\",\\n        \\"QueryOverFiveSecPercent\\": \\"0.5\\"\\n      },\\n      \\"AdviceType\\": \\"OPENQUICKENGINE\\"\\n    }\\n  ],\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '查询数据集优化建议',
    ),
    'SaveFavorites' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '收藏作品的用户ID。此处的用户ID为Quick BI的UserID，而非阿里云的UID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '121344444790****',
          ),
        ),
        1 => 
        array (
          'name' => 'WorksId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '收藏作品的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'd23e84a1-82a0-4292-bfdb-521306c3****',
          ),
        ),
      ),
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
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'description' => '返回接口执行结果。取值范围：

- true：执行成功
- false：执行失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Workspace.NotIn.Organization',
            'errorMessage' => 'The workspace is not owned by the organization.',
          ),
          1 => 
          array (
            'errorCode' => 'Report.NotExist.Error',
            'errorMessage' => 'This work does not exist. It may have been deleted. Work ID is %s.',
          ),
          2 => 
          array (
            'errorCode' => 'Workspace.Not.Exist',
            'errorMessage' => 'The group workspace does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'Workspace.Status.Error',
            'errorMessage' => 'This group workspace has been disabled or deleted.',
          ),
          4 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          5 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          6 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          8 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          10 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          11 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          13 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          14 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          15 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          16 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          17 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          18 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          19 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<SaveFavoritesResponse>\\n    <RequestId>D787E1A3-A93C-424A-B626-C2B05DF8D885</RequestId>\\n    <Result>true</Result>\\n    <Success>true</Success>\\n</SaveFavoritesResponse>","errorExample":""}]',
      'title' => '添加作品收藏',
      'summary' => '添加用户的收藏数据作品。',
    ),
    'CancelCollection' => 
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
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WorksId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '取消收藏的作品ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '5d6ae4e7-cede-43cd-b4d3-d2fd442a9202',
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '收藏用户的ID。此处的用户ID为Quick BI的UserID，而非阿里云的UID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '121344444790****',
          ),
        ),
      ),
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
                'example' => '7c7223ae-****-3c744528014b',
              ),
              'Result' => 
              array (
                'description' => '返回接口执行结果。取值范围：

- true：执行成功
- false：执行失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Workspace.NotIn.Organization',
            'errorMessage' => 'The workspace is not owned by the organization.',
          ),
          1 => 
          array (
            'errorCode' => 'Favorite.NotCancel.Permission',
            'errorMessage' => 'You have not added this work to favorites.',
          ),
          2 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          3 => 
          array (
            'errorCode' => 'Report.NotExist.Error',
            'errorMessage' => 'This work does not exist. It may have been deleted. Work ID is %s.',
          ),
          4 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          5 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          7 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          10 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          11 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          12 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          13 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          14 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          15 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          16 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          17 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          18 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7c7223ae-****-3c744528014b\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CancelCollectionResponse>\\n    <RequestId>7c7223ae-****-3c744528014b</RequestId>\\n    <Result>true</Result>\\n    <Success>true</Success>\\n</CancelCollectionResponse>","errorExample":""}]',
      'title' => '取消作品收藏',
      'summary' => '取消用户收藏的数据作品。',
    ),
    'ListCollections' => 
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
      'operationType' => 'read',
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户ID。此处的用户ID为Quick BI的UserID，而非阿里云的UID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'fe67f61a35a94b7da1a34ba174a7****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '收藏记录的主键 ID。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '162A632E-0A88-51CF-98F8-94FDEE82DB7D',
              ),
              'Result' => 
              array (
                'description' => '用户收藏的报表列表详情。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'WorkspaceId' => 
                    array (
                      'description' => '工作空间ID。',
                      'type' => 'string',
                      'example' => '9337d121-a78f-4c1b-a8bc-f81de117****',
                    ),
                    'WorksType' => 
                    array (
                      'description' => '作品类型。取值范围：

- DATAPRODUCT：数据门户
- PAGE：仪表板
- REPORT：电子表格
- dataForm：数据填报
- dashboardOfflineQuery：自助取数',
                      'type' => 'string',
                      'example' => 'dashboardOfflineQuery',
                    ),
                    'FavoriteId' => 
                    array (
                      'description' => '收藏记录的主键 ID。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '12373',
                    ),
                    'WorksId' => 
                    array (
                      'description' => '作品的ID。',
                      'type' => 'string',
                      'example' => '95296e95-ca89-4c7d-8af9-dedf0ad0****',
                    ),
                    'WorksName' => 
                    array (
                      'description' => '作品的名称。',
                      'type' => 'string',
                      'example' => '奇异博士',
                    ),
                    'WorkspaceName' => 
                    array (
                      'description' => '工作空间名称。',
                      'type' => 'string',
                      'example' => '测试工作空间',
                    ),
                    'OwnerId' => 
                    array (
                      'description' => '作品所有者的用户ID。此处的用户ID为Quick BI的UserID，而非阿里云的UID。',
                      'type' => 'string',
                      'example' => 'fe67f61a35a94b7da1a34ba174a7****',
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
            'errorCode' => 'Workspace.NotIn.Organization',
            'errorMessage' => 'The workspace is not owned by the organization.',
          ),
          1 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          3 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          10 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          11 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          12 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          13 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          14 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          15 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          16 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"162A632E-0A88-51CF-98F8-94FDEE82DB7D\\",\\n  \\"Result\\": [\\n    {\\n      \\"WorkspaceId\\": \\"9337d121-a78f-4c1b-a8bc-f81de117****\\",\\n      \\"WorksType\\": \\"dashboardOfflineQuery\\",\\n      \\"FavoriteId\\": 12373,\\n      \\"WorksId\\": \\"95296e95-ca89-4c7d-8af9-dedf0ad0****\\",\\n      \\"WorksName\\": \\"奇异博士\\",\\n      \\"WorkspaceName\\": \\"测试工作空间\\",\\n      \\"OwnerId\\": \\"fe67f61a35a94b7da1a34ba174a7****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListCollectionsResponse>\\n    <Success>true</Success>\\n    <RequestId>162A632E-0A88-51CF-98F8-94FDEE82DB7D</RequestId>\\n    <Result>\\n        <WorkspaceId>9337d121-a78f-4c1b-a8bc-f81de117****</WorkspaceId>\\n        <WorksType>dashboardOfflineQuery</WorksType>\\n        <FavoriteId>12373</FavoriteId>\\n        <WorksId>95296e95-ca89-4c7d-8af9-dedf0ad0****</WorksId>\\n        <WorksName>奇异博士</WorksName>\\n        <WorkspaceName>测试工作空间</WorkspaceName>\\n        <OwnerId>fe67f61a35a94b7da1a34ba174a7****</OwnerId>\\n    </Result>\\n</ListCollectionsResponse>","errorExample":""}]',
      'title' => '获取用户收藏作品列表',
      'summary' => '获取用户收藏的作品列表。',
    ),
    'ListFavoriteReports' => 
    array (
      'summary' => '获取指定用户在首页看板中展示的收藏作品列表。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询用户在Quick BI中的UserID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'b5d8fd9348cc4327****afb604',
          ),
        ),
        1 => 
        array (
          'name' => 'Keyword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '作品名称的关键字。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '财务报表',
          ),
        ),
        2 => 
        array (
          'name' => 'TreeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询作品的类型（填空查询所有类型）。取值范围 ：
- DATAPRODUCT：数据门户
- PAGE：仪表板
- REPORT：电子表格',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'PAGE',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询作品列表的行数：
默认值：10
最大值：9999',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'description' => '返回查询结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalNum' => 
                  array (
                    'description' => '总行数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'TotalPages' => 
                  array (
                    'description' => '总页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageNum' => 
                  array (
                    'description' => '页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '	
请求接口时设置的每页行数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'Data' => 
                  array (
                    'description' => '查询到的作品列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TreeId' => 
                        array (
                          'description' => '作品ID。',
                          'type' => 'string',
                          'example' => '977c7698-****-****-****-44b7304d20fc',
                        ),
                        'Type' => 
                        array (
                          'description' => '作品类型。取值范围 ：
- DATAPRODUCT：数据门户
- PAGE：仪表板
- REPORT：电子表格',
                          'type' => 'string',
                          'example' => 'PAGE',
                        ),
                        'Name' => 
                        array (
                          'description' => '作品名称。',
                          'type' => 'string',
                          'example' => '测试报表',
                        ),
                        'OwnerNum' => 
                        array (
                          'description' => '作品所有者的UserID。',
                          'type' => 'string',
                          'example' => '1365*****238860',
                        ),
                        'OwnerName' => 
                        array (
                          'description' => '作品所有者的阿里云账号名。',
                          'type' => 'string',
                          'example' => 'luyaotest的昵称非管理员',
                        ),
                        'GmtCreate' => 
                        array (
                          'description' => '作品创建时间戳。',
                          'type' => 'string',
                          'example' => '1640088615000',
                        ),
                        'GmtModified' => 
                        array (
                          'description' => '作品修改的时间戳。',
                          'type' => 'string',
                          'example' => '1640595729000',
                        ),
                        'PublishStatus' => 
                        array (
                          'description' => '作品的发布状态。取值范围：

- 0：未发布
- 1：已发布
- 2：已修改保存未发布
- 3：已下线',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'Favorite' => 
                        array (
                          'description' => '查询用户是否收藏了该作品。
',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'HasViewAuth' => 
                        array (
                          'description' => '查询用户是拥有作品的查看权限。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'HasEditAuth' => 
                        array (
                          'description' => '查询用户是拥有作品的编辑权限。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'WorkspaceId' => 
                        array (
                          'description' => '作品所属的工作空间ID。',
                          'type' => 'string',
                          'example' => '523793cb-****-****-****-aa71c65ffa39',
                        ),
                        'WorkspaceName' => 
                        array (
                          'description' => '作品所属的工作空间名称。',
                          'type' => 'string',
                          'example' => '测试工作空间',
                        ),
                        'FavoriteDate' => 
                        array (
                          'description' => '作品收藏时间戳',
                          'type' => 'string',
                          'example' => '1640088615000',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：
- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'Invalid.User.Organization',
            'errorMessage' => 'The user is not in your organization.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          3 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          9 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          10 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          11 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          13 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          14 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          15 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": {\\n    \\"TotalNum\\": 1,\\n    \\"TotalPages\\": 1,\\n    \\"PageNum\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Data\\": [\\n      {\\n        \\"TreeId\\": \\"977c7698-****-****-****-44b7304d20fc\\",\\n        \\"Type\\": \\"PAGE\\",\\n        \\"Name\\": \\"测试报表\\",\\n        \\"OwnerNum\\": \\"1365*****238860\\",\\n        \\"OwnerName\\": \\"luyaotest的昵称非管理员\\",\\n        \\"GmtCreate\\": \\"1640088615000\\",\\n        \\"GmtModified\\": \\"1640595729000\\",\\n        \\"PublishStatus\\": 1,\\n        \\"Favorite\\": true,\\n        \\"HasViewAuth\\": true,\\n        \\"HasEditAuth\\": true,\\n        \\"WorkspaceId\\": \\"523793cb-****-****-****-aa71c65ffa39\\",\\n        \\"WorkspaceName\\": \\"测试工作空间\\",\\n        \\"FavoriteDate\\": \\"1640088615000\\"\\n      }\\n    ]\\n  },\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ListFavoriteReportsResponse>\\n    <RequestId>D787E1A3-A93C-424A-B626-C2B05DF8D885</RequestId>\\n    <Result>\\n        <TotalNum>1</TotalNum>\\n        <TotalPages>1</TotalPages>\\n        <PageNum>1</PageNum>\\n        <PageSize>10</PageSize>\\n        <Data>\\n            <TreeId>977c7698-****-****-****-44b7304d20fc</TreeId>\\n            <Type>PAGE</Type>\\n            <Name>测试报表</Name>\\n            <OwnerNum>1365*****238860</OwnerNum>\\n            <OwnerName>luyaotest的昵称非管理员</OwnerName>\\n            <GmtCreate>1640088615000</GmtCreate>\\n            <GmtModified>1640595729000</GmtModified>\\n            <PublishStatus>1</PublishStatus>\\n            <Favorite>true</Favorite>\\n            <HasViewAuth>true</HasViewAuth>\\n            <HasEditAuth>true</HasEditAuth>\\n            <WorkspaceId>523793cb-****-****-****-aa71c65ffa39</WorkspaceId>\\n            <WorkspaceName>测试工作空间</WorkspaceName>\\n        </Data>\\n    </Result>\\n    <Success>true</Success>\\n</ListFavoriteReportsResponse>","errorExample":""}]',
      'title' => '首页看板收藏列表',
    ),
    'ListRecentViewReports' => 
    array (
      'summary' => '获取指定用户在首页看板中展示的常看和足迹列表。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的用户在Quick BI中的UserID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'b5d8fd9348cc4327****afb604',
          ),
        ),
        1 => 
        array (
          'name' => 'Keyword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '作品名称的关键字。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '财务报表',
          ),
        ),
        2 => 
        array (
          'name' => 'TreeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询作品的类型（填空查询所有类型）。取值范围 ：
- DATAPRODUCT：数据门户
- PAGE：仪表板
- REPORT：电子表格',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'PAGE',
          ),
        ),
        3 => 
        array (
          'name' => 'QueryMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询模式。取值范围：

- 1：按访问次数排序
- 2：按最近访问时间排序',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询作品列表的行数：

- 默认值：10
- 最大值：9999',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '10',
            'default' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'OffsetDay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询最近多少天的数据（默认10天）。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'description' => '返回查询结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalNum' => 
                  array (
                    'description' => '总行数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'TotalPages' => 
                  array (
                    'description' => '总页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageNum' => 
                  array (
                    'description' => '页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页显示的数据条数。

- 默认为10条
- 最大为100条',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'Data' => 
                  array (
                    'description' => '查询到的作品列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TreeId' => 
                        array (
                          'description' => '作品ID。',
                          'type' => 'string',
                          'example' => '977c7698-****-****-****-44b7304d20fc',
                        ),
                        'Type' => 
                        array (
                          'description' => '作品类型。取值范围 ：
- DATAPRODUCT：数据门户
- PAGE：仪表板
- REPORT：电子表格',
                          'type' => 'string',
                          'example' => 'PAGE',
                        ),
                        'Name' => 
                        array (
                          'description' => '作品名称。',
                          'type' => 'string',
                          'example' => '测试报表',
                        ),
                        'OwnerNum' => 
                        array (
                          'description' => '作品所有者的UserID。',
                          'type' => 'string',
                          'example' => '1365*****238860',
                        ),
                        'OwnerName' => 
                        array (
                          'description' => '作品所有者的阿里云账号名。',
                          'type' => 'string',
                          'example' => '李四',
                        ),
                        'GmtCreate' => 
                        array (
                          'description' => '作品创建时间戳。',
                          'type' => 'string',
                          'example' => '1496651577000',
                        ),
                        'GmtModified' => 
                        array (
                          'description' => '作品修改的时间戳。',
                          'type' => 'string',
                          'example' => '1640595729000',
                        ),
                        'PublishStatus' => 
                        array (
                          'description' => '作品的发布状态。取值范围：
- 0：未发布
- 1：已发布
- 2：已修改保存未发布
- 3：已下线',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'Favorite' => 
                        array (
                          'description' => '查询用户是否收藏了该作品。
',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'HasViewAuth' => 
                        array (
                          'description' => '查询用户是拥有作品的查看权限。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'HasEditAuth' => 
                        array (
                          'description' => '查询用户是拥有作品的编辑权限。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'WorkspaceId' => 
                        array (
                          'description' => '作品所属的工作空间ID。',
                          'type' => 'string',
                          'example' => '523793cb-****-****-****-aa71c65ffa39',
                        ),
                        'WorkspaceName' => 
                        array (
                          'description' => '作品所属的工作空间名称。',
                          'type' => 'string',
                          'example' => '测试工作空间',
                        ),
                        'ViewCount' => 
                        array (
                          'description' => '作品被访问的次数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '7',
                        ),
                        'LatestViewTime' => 
                        array (
                          'description' => '作品最后一次被访问的时间戳。',
                          'type' => 'string',
                          'example' => '1642067498000',
                        ),
                      ),
                    ),
                  ),
                  'Attention' => 
                  array (
                    'type' => 'string',
                    'example' => '当前API返回的分页参数如TotalNum等即将下线，如有使用请及时修改',
                    'default' => '当前API返回的分页参数如TotalNum等即将下线，如有使用请及时修改',
                  ),
                ),
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：
- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'Invalid.User.Organization',
            'errorMessage' => 'The user is not in your organization.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          3 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          9 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          10 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          11 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          13 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          14 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          15 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": {\\n    \\"TotalNum\\": 1,\\n    \\"TotalPages\\": 1,\\n    \\"PageNum\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Data\\": [\\n      {\\n        \\"TreeId\\": \\"977c7698-****-****-****-44b7304d20fc\\",\\n        \\"Type\\": \\"PAGE\\",\\n        \\"Name\\": \\"测试报表\\",\\n        \\"OwnerNum\\": \\"1365*****238860\\",\\n        \\"OwnerName\\": \\"李四\\",\\n        \\"GmtCreate\\": \\"1496651577000\\",\\n        \\"GmtModified\\": \\"1640595729000\\",\\n        \\"PublishStatus\\": 1,\\n        \\"Favorite\\": true,\\n        \\"HasViewAuth\\": true,\\n        \\"HasEditAuth\\": true,\\n        \\"WorkspaceId\\": \\"523793cb-****-****-****-aa71c65ffa39\\",\\n        \\"WorkspaceName\\": \\"测试工作空间\\",\\n        \\"ViewCount\\": 7,\\n        \\"LatestViewTime\\": \\"1642067498000\\"\\n      }\\n    ],\\n    \\"Attention\\": \\"当前API返回的分页参数如TotalNum等即将下线，如有使用请及时修改\\"\\n  },\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ListRecentViewReportsResponse>\\n    <RequestId>D787E1A3-A93C-424A-B626-C2B05DF8D885</RequestId>\\n    <Result>\\n        <TotalNum>1</TotalNum>\\n        <TotalPages>1</TotalPages>\\n        <PageNum>1</PageNum>\\n        <PageSize>10</PageSize>\\n        <Data>\\n            <TreeId>977c7698-****-****-****-44b7304d20fc</TreeId>\\n            <Type>PAGE</Type>\\n            <Name>测试报表</Name>\\n            <OwnerNum>1365*****238860</OwnerNum>\\n            <OwnerName>李四</OwnerName>\\n            <GmtCreate>1496651577000</GmtCreate>\\n            <GmtModified>1640595729000</GmtModified>\\n            <PublishStatus>1</PublishStatus>\\n            <Favorite>true</Favorite>\\n            <HasViewAuth>true</HasViewAuth>\\n            <HasEditAuth>true</HasEditAuth>\\n            <WorkspaceId>523793cb-****-****-****-aa71c65ffa39</WorkspaceId>\\n            <WorkspaceName>测试工作空间</WorkspaceName>\\n            <ViewCount>7</ViewCount>\\n            <LatestViewTime>1642067498000</LatestViewTime>\\n        </Data>\\n    </Result>\\n    <Success>true</Success>\\n</ListRecentViewReportsResponse>","errorExample":""}]',
      'title' => '获取首页看板常看和足迹列表',
    ),
    'ListSharedReports' => 
    array (
      'summary' => '获取指定用户在首页看板中展示的被授权的作品列表。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询用户在Quick BI中的UserID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'b5d8fd9348cc4327****afb604',
          ),
        ),
        1 => 
        array (
          'name' => 'Keyword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '作品名称的关键字。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '测试报表',
          ),
        ),
        2 => 
        array (
          'name' => 'TreeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询作品的类型（填空查询所有类型）。取值范围 ：
- DATAPRODUCT：数据门户
- PAGE：仪表板
- REPORT：电子表格',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'PAGE',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询作品列表的行数：

- 默认值：10
- 最大值：9999',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'description' => '返回查询结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalNum' => 
                  array (
                    'description' => '总行数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'TotalPages' => 
                  array (
                    'description' => '总页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageNum' => 
                  array (
                    'description' => '页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '请求接口时设置的每页行数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'Data' => 
                  array (
                    'description' => '查询到的作品列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TreeId' => 
                        array (
                          'description' => '作品ID。',
                          'type' => 'string',
                          'example' => '977c7698-****-****-****-44b7304d20fc',
                        ),
                        'Type' => 
                        array (
                          'description' => '作品类型。取值范围 ：
- DATAPRODUCT：数据门户
- PAGE：仪表板
- REPORT：电子表格',
                          'type' => 'string',
                          'example' => 'PAGE',
                        ),
                        'Name' => 
                        array (
                          'description' => '作品名称。',
                          'type' => 'string',
                          'example' => '测试报表',
                        ),
                        'OwnerNum' => 
                        array (
                          'description' => '作品所有者的UserID。',
                          'type' => 'string',
                          'example' => '1365*****238860',
                        ),
                        'OwnerName' => 
                        array (
                          'description' => '作品所有者的阿里云账号名。',
                          'type' => 'string',
                          'example' => 'test账号',
                        ),
                        'GmtCreate' => 
                        array (
                          'description' => '作品创建时间戳。',
                          'type' => 'string',
                          'example' => '1640088615000',
                        ),
                        'GmtModified' => 
                        array (
                          'description' => '作品修改的时间戳。',
                          'type' => 'string',
                          'example' => '1644373980000',
                        ),
                        'PublishStatus' => 
                        array (
                          'description' => '作品的发布状态。取值范围：

- 0：未发布
- 1：已发布
- 2：已修改保存未发布
- 3：已下线',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'Favorite' => 
                        array (
                          'description' => '查询用户是否收藏了该作品。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'HasViewAuth' => 
                        array (
                          'description' => '查询用户是拥有作品的查看权限。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'HasEditAuth' => 
                        array (
                          'description' => '查询用户是拥有作品的编辑权限。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'WorkspaceId' => 
                        array (
                          'description' => '作品所属的工作空间ID。',
                          'type' => 'string',
                          'example' => 'gfidm145-****-****-9426-8f93be23****',
                        ),
                        'WorkspaceName' => 
                        array (
                          'description' => '作品所属的工作空间名称。',
                          'type' => 'string',
                          'example' => '测试工作空间',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：
- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'Invalid.User.Organization',
            'errorMessage' => 'The user is not in your organization.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          3 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          9 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          10 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          11 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          13 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          14 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          15 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": {\\n    \\"TotalNum\\": 1,\\n    \\"TotalPages\\": 1,\\n    \\"PageNum\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Data\\": [\\n      {\\n        \\"TreeId\\": \\"977c7698-****-****-****-44b7304d20fc\\",\\n        \\"Type\\": \\"PAGE\\",\\n        \\"Name\\": \\"测试报表\\",\\n        \\"OwnerNum\\": \\"1365*****238860\\",\\n        \\"OwnerName\\": \\"test账号\\",\\n        \\"GmtCreate\\": \\"1640088615000\\",\\n        \\"GmtModified\\": \\"1644373980000\\",\\n        \\"PublishStatus\\": 1,\\n        \\"Favorite\\": true,\\n        \\"HasViewAuth\\": true,\\n        \\"HasEditAuth\\": true,\\n        \\"WorkspaceId\\": \\"gfidm145-****-****-9426-8f93be23****\\",\\n        \\"WorkspaceName\\": \\"测试工作空间\\"\\n      }\\n    ]\\n  },\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ListSharedReportsResponse>\\n    <RequestId>D787E1A3-A93C-424A-B626-C2B05DF8D885</RequestId>\\n    <Result>\\n        <TotalNum>1</TotalNum>\\n        <TotalPages>1</TotalPages>\\n        <PageNum>1</PageNum>\\n        <PageSize>10</PageSize>\\n        <Data>\\n            <TreeId>977c7698-****-****-****-44b7304d20fc</TreeId>\\n            <Type>PAGE</Type>\\n            <Name>测试报表</Name>\\n            <OwnerNum>1365*****238860</OwnerNum>\\n            <OwnerName>test账号</OwnerName>\\n            <GmtCreate>1640088615000</GmtCreate>\\n            <GmtModified>1644373980000</GmtModified>\\n            <PublishStatus>1</PublishStatus>\\n            <Favorite>true</Favorite>\\n            <HasViewAuth>true</HasViewAuth>\\n            <HasEditAuth>true</HasEditAuth>\\n            <WorkspaceId>gfidm145-****-****-9426-8f93be23****</WorkspaceId>\\n            <WorkspaceName>测试工作空间</WorkspaceName>\\n        </Data>\\n    </Result>\\n    <Success>true</Success>\\n</ListSharedReportsResponse>","errorExample":""}]',
      'title' => '获取首页看板被授权的作品列表',
    ),
    'QueryDataService' => 
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
          'name' => 'ApiId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据服务中的API ID，请参见：[数据服务](~~144980~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'f4cc43bc3***',
          ),
        ),
        1 => 
        array (
          'name' => 'Conditions',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据服务的查询条件，以Key和Value的形式传入。map类型的字符串。其中，Key为请求参数的参数名，Value为请求参数的参数值。Key和Value必须成对出现。

**说明：**

-  请求参数的操作符设置为**枚举筛选**时支持value包含多个值，此时value值的格式是JSON形式的List。例如： `area=["华东","华北","华南"] `     

- 对于日期，根据类型不同，提供不同的入参格式：

    - 年：2019

    - 季：2019Q1

    - 月：201901  （携带0）
    
    - 周：2019-52

    - 日：20190101

    - 时：14:00:00 （分、秒为00）
    
    - 分：14:12:00 （秒为00）

    - 秒：14:34:34',
            'type' => 'string',
            'required' => false,
            'example' => '{ "area": ["华东", "华北"],  "shopping_date": "2019Q1",  }',
          ),
        ),
        2 => 
        array (
          'name' => 'ReturnFields',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回参数的参数名列表，List 类型字符串。',
            'type' => 'string',
            'required' => false,
            'example' => '["area", "city", "price", "date"]',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功

- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '78C1AA2D-9201-599E-A0BA-6FC462E57A95',
              ),
              'Result' => 
              array (
                'description' => '返回接口查询结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'Sql' => 
                  array (
                    'description' => '请求查询的 SQL。',
                    'type' => 'string',
                    'example' => 'SELECT COMPANY_T_1_.`area` AS D_AREA_2_, COMPANY_T_1_.`city` AS D_CITY_3_, SUM(COMPANY_T_1_.`profit_amt`) AS D_PROFIT_4_ FROM `quickbi_test`.`company_sales_record_copy` AS COMPANY_T_1_ WHERE COMPANY_T_1_.`area` LIKE \'%华东%\' GROUP BY COMPANY_T_1_.`area`, COMPANY_T_1_.`city` HAVING SUM(COMPANY_T_1_.`order_amt`) > 1 LIMIT 0, 10',
                  ),
                  'Headers' => 
                  array (
                    'description' => '列头。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'description' => '字段类型，用于区分是字段类型为维度或度量字段。',
                          'type' => 'string',
                          'example' => 'StandardDimension',
                        ),
                        'DataType' => 
                        array (
                          'description' => '字段的数据类型。一般有
number、string、date、datetime、time、geographic。',
                          'type' => 'string',
                          'example' => 'string',
                        ),
                        'Granularity' => 
                        array (
                          'description' => '维度字段的粒度。
当请求字段为日期维度或地理维度字段，才会返回该字段，取值范围：

- 日期粒度：yearRegion（年）、 monthRegion（月）、weekRegion（周）、dayRegion（日）、hourRegion（时）、minRegion（分）、secRegion（秒）

- 地理信息粒度：COUNTRY（国际级）、PROVINCE（省级）、CITY（市级）、XIAN（区县）、REGION（区域）',
                          'type' => 'string',
                          'example' => 'yearRegion',
                        ),
                        'Label' => 
                        array (
                          'description' => '字段别名，结果参数values中map数据行的key。',
                          'type' => 'string',
                          'example' => 'area',
                        ),
                        'Column' => 
                        array (
                          'description' => '字段名，对应物理表字段名。',
                          'type' => 'string',
                          'example' => '具体的物理字段名',
                        ),
                        'Aggregator' => 
                        array (
                          'description' => '聚合操作符。度量字段才会有，例如SUM、AVG和MAX。',
                          'type' => 'string',
                          'example' => 'SUM',
                        ),
                      ),
                    ),
                  ),
                  'Values' => 
                  array (
                    'description' => '返回查询到的结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '返回数据的行和列。

此参数为List<Map>结构，每个Map即一行数据。其中Map中的Key对应 Headers#Label字段。',
                      'type' => 'object',
                      'example' => '[{"area":"华东","city":"三明市"},{"area":"华东","city":"上海市"}]',
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
            'errorCode' => 'API.No.Permission',
            'errorMessage' => 'You are not authorized to call the data service API operation.',
          ),
          1 => 
          array (
            'errorCode' => 'API.Not.Exist',
            'errorMessage' => 'The data service API operation does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'Cube.Not.Exist',
            'errorMessage' => 'The Cube does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'Invalid.Parameter.Conditions',
            'errorMessage' => 'The specified Conditions is invalid. %s is not defined.',
          ),
          4 => 
          array (
            'errorCode' => 'Invalid.Parameter.ReturnFields',
            'errorMessage' => 'The specified returnFields is invalid. %s is not defined.',
          ),
          5 => 
          array (
            'errorCode' => 'Missing.Conditions',
            'errorMessage' => 'The specified Conditions is invalid. You must specify %s.',
          ),
          6 => 
          array (
            'errorCode' => 'Missing.Dimension.Measure',
            'errorMessage' => 'The dimension or measure %s does not exist in Cube.',
          ),
          7 => 
          array (
            'errorCode' => 'Rowlevel.Permission.Forbbiden',
            'errorMessage' => 'The request is denied by row level permission. The dataset is %s, %s %s.',
          ),
          8 => 
          array (
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          9 => 
          array (
            'errorCode' => 'Datasource.Sql.ExecuteFailed',
            'errorMessage' => 'Failed to execute the SQL statement in the data source.',
          ),
          10 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          11 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          12 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          13 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          14 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          15 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          16 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          17 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          18 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          19 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          20 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          21 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          22 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          23 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          24 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"78C1AA2D-9201-599E-A0BA-6FC462E57A95\\",\\n  \\"Result\\": {\\n    \\"Sql\\": \\"SELECT COMPANY_T_1_.`area` AS D_AREA_2_, COMPANY_T_1_.`city` AS D_CITY_3_, SUM(COMPANY_T_1_.`profit_amt`) AS D_PROFIT_4_ FROM `quickbi_test`.`company_sales_record_copy` AS COMPANY_T_1_ WHERE COMPANY_T_1_.`area` LIKE \'%华东%\' GROUP BY COMPANY_T_1_.`area`, COMPANY_T_1_.`city` HAVING SUM(COMPANY_T_1_.`order_amt`) > 1 LIMIT 0, 10\\",\\n    \\"Headers\\": [\\n      {\\n        \\"Type\\": \\"StandardDimension\\",\\n        \\"DataType\\": \\"string\\",\\n        \\"Granularity\\": \\"yearRegion\\",\\n        \\"Label\\": \\"area\\",\\n        \\"Column\\": \\"具体的物理字段名\\",\\n        \\"Aggregator\\": \\"SUM\\"\\n      }\\n    ],\\n    \\"Values\\": [\\n      [\\n        {\\n          \\"area\\": \\"华东\\",\\n          \\"city\\": \\"三明市\\"\\n        },\\n        {\\n          \\"area\\": \\"华东\\",\\n          \\"city\\": \\"上海市\\"\\n        }\\n      ]\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryDataServiceResponse>\\n    <Success>true</Success>\\n    <RequestId>78C1AA2D-9201-599E-A0BA-6FC462E57A95</RequestId>\\n    <Result>\\n        <Sql>SELECT COMPANY_T_1_.`area` AS D_AREA_2_, COMPANY_T_1_.`city` AS D_CITY_3_, SUM(COMPANY_T_1_.`profit_amt`) AS D_PROFIT_4_ FROM `quickbi_test`.`company_sales_record_copy` AS COMPANY_T_1_ WHERE COMPANY_T_1_.`area` LIKE \'%华东%\' GROUP BY COMPANY_T_1_.`area`, COMPANY_T_1_.`city` HAVING SUM(COMPANY_T_1_.`order_amt`) &gt; 1 LIMIT 0, 10</Sql>\\n        <Headers>\\n            <Type>StandardDimension</Type>\\n            <DataType>string</DataType>\\n            <Granularity>yearRegion</Granularity>\\n            <Label>area</Label>\\n            <Column>具体的物理字段名</Column>\\n            <Aggregator>SUM</Aggregator>\\n        </Headers>\\n        <Values/>\\n    </Result>\\n</QueryDataServiceResponse>","errorExample":""}]',
      'title' => '调用数据服务API',
      'summary' => '对数据服务中已创建的API进行调用。',
      'description' => '# 前提条件
您通过Quick BI的数据服务，创建数据服务的API，具体请参见[数据服务](~~144980~~)。

# 使用限制
* 数据服务功能仅针对专业版客户开放。 
* 数据服务API调用，接口超时时间为60s，单个API的QPS为10次/秒。
* 数据服务API所引用数据集，如果开启了行级权限，API调用的时候可能会被行级权限策略拦截。',
    ),
    'CreateTicket4Copilot' => 
    array (
      'summary' => '用于生成智能小Q嵌入Ticket。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CopilotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开通嵌入的智能小Q 模块 ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccd3428c-dd23-460c-a608-26bae29dffee',
          ),
        ),
        1 => 
        array (
          'name' => 'TicketNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ticket的票据数量取值范围：

- 默认值为1。

- 建议值为1。

- 最大值为99999。

每次使用票据访问后，Ticket的票据数量减1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Quick BI的UserId。

- 您可以调用【3.1.7 根据三方账号获取用户具体信息】或者其他接口获取。

<notice>注意：userId和accountName只填一个即可，不填时默认绑定报表的owner，访问报表时将以该用户身份访问。</notice>',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '9c-asdawf-casxcasd-asdasd',
          ),
        ),
        3 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户的账号名称。
<notice>注意：userId和accountName只填一个即可，不填时默认绑定报表的owner，访问报表时将以该用户身份访问。</notice>',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '测试用户',
          ),
        ),
        4 => 
        array (
          'name' => 'AccountType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户的账号类型:

- 1：阿里云主账号

- 3：QuickBI 自建账号。

- 4：钉钉

- 5：阿里云RAM账号

- 6：三方账号（SAML、OAuth等协议对对接的账号）

- 9：企业微信

- 10：飞书

<notice>注意：accountName不为空，则accountType不能为空。</notice>',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'enumValueTitles' => 
            array (
            ),
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'ExpireTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '过期时间。

- 单位分钟，最大240（4小时）。

- 默认240。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '200',
          ),
        ),
      ),
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
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'description' => '开通嵌入的智能小Q 模块 ID。',
                'type' => 'string',
                'example' => 'f5eeb52e-d9c2-4a8b-80e3-47ab55c2****',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功

- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          5 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          9 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          10 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          11 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          13 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          14 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          15 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Authorize3rdTicket.Num.HasNoLeft',
            'errorMessage' => 'There is no ticket number left, please generate new ticket.',
          ),
          1 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'CopilotEmbed.Config.NotFind',
            'errorMessage' => 'Can not find copilot embed config with this copilot ID.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": \\"f5eeb52e-d9c2-4a8b-80e3-47ab55c2****\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '生成智能小Q嵌入Ticket',
    ),
    'CreateTicket' => 
    array (
      'summary' => '生成报表嵌入需要使用的ticket。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WorksId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开通嵌入的报表ID。
目前仅支持仪表板，电子表格，自助取数和大屏。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'a206f5f3-****-e9b17c835b03',
          ),
        ),
        1 => 
        array (
          'name' => 'CmptId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '组件ID。为以上仪表板中某个组件的ID，其他作品类型不支持。
获取组件ID调用的接口请参见[QueryWorksBloodRelationship](https://next.api.aliyun.com/api/quickbi-public/2022-01-01/QueryWorksBloodRelationship?spm=a2c4g.11186623.0.0.15615d7aWVvWAl&params={}&lang=JAVA&tab=DOC&sdkStyle=old)。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '0fc6a275c7f64f17b1****a306ce0f31',
          ),
        ),
        2 => 
        array (
          'name' => 'TicketNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Ticket的票据数量，每次使用票据访问后，Ticket的票据数量减1。
- 默认值为1。
- 建议值为1。
- 最大值为99999。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Quick BI的UserId，非您的阿里云账号ID。
您可以调用[QueryUserInfoByAccount](https://next.api.aliyun.com/api/quickbi-public/2022-01-01/QueryUserInfoByAccount?spm=a2c4g.11186623.0.0.15615d7aWVvWAl&params={}&tab=DOC&sdkStyle=old)接口，获取UserId。UserId样例为fe67f61a35a94b7da1a34ba174a7****。

> UserId和AccountName只填一个即可，不填时默认绑定报表的Owner，访问报表时将以该用户身份访问。若您需要配置数据行级权限，请参见[行级权限](https://help.aliyun.com/document_detail/323482.htm?spm=a2c4g.11186623.0.0.3da12f1fUfqvPi#section-6jx-sa4-0vz)。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '46e537466****92704c8',
          ),
        ),
        4 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户的账号名称。

- 如果用户是阿里云主账号**wangwu**，格式为**[主账号]**，例如**wangwu**。
- 如果用户是RAM账号**zhangsan**@aliyun.cn**，格式为**[主账号：子账号]**，例如**wangwu:zhangsan****。

> UserId和AccountName只填一个即可，不填时默认绑定报表的Owner，访问报表时将以该用户身份访问。若您需要配置数据行级权限，请参见[行级权限](https://help.aliyun.com/document_detail/323482.htm?spm=a2c4g.11186623.0.0.3da12f1fUfqvPi#section-6jx-sa4-0vz)。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '测试用户',
          ),
        ),
        5 => 
        array (
          'name' => 'AccountType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户的账号类型。
- 1：阿里云账号
- 3：Quick BI自建账号
- 4：钉钉
- 5：RAM子账号
- 9：企业微信
- 10：飞书
> 若AccountName不为空时，则AccountType也不能为空。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'ExpireTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '过期时间
- 单位：分钟
- 默认：240',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '200',
          ),
        ),
        7 => 
        array (
          'name' => 'WatermarkParam',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '报表的水印参数。
- 不得超过50个字符。
- 当报表类型为大屏时，不支持水印传参。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '三方嵌入',
          ),
        ),
        8 => 
        array (
          'name' => 'GlobalParam',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '报表过滤条件的全局参数。
- JsonArray格式的字符串。

> 若您需要使用全局参数能力，请联系[Quick BI运营负责人](https://h5-alimebot.dingtalk.com/intl/index.htm?spm=a2c4g.11186623.0.0.3da14f6chrDv9e&sourceType=ding_talk&from=DEFFB9G5KBByQkwq23wneFIOmaJ)。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '[{"paramKey":"price","joinType":"and","conditionList":[{"operate":">","value":"0"}]}]',
          ),
        ),
      ),
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
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'description' => '生成ticket的值。',
                'type' => 'string',
                'example' => 'ccd3428c-****-****-a608-26bae29dffee',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：
- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'Authorize3rdTicket.BindedWorks.Mismatch',
            'errorMessage' => 'The report bound by the ticket mismatches the actual report.',
          ),
          2 => 
          array (
            'errorCode' => 'Authorize3rdTicket.Expired',
            'errorMessage' => 'Ticket [%s] has expired.',
          ),
          3 => 
          array (
            'errorCode' => 'Authorize3rdTicket.HasNo.LoginToken',
            'errorMessage' => 'The request [%s] has no token.',
          ),
          4 => 
          array (
            'errorCode' => 'Authorize3rdTicket.NotExist',
            'errorMessage' => 'Ticket %s does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'Authorize3rdTicket.Num.Exceed',
            'errorMessage' => 'The number of tickets %s  is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'Authorize3rdTicket.Num.HasNoLeft',
            'errorMessage' => 'There is no ticket number left, please generate new ticket.',
          ),
          7 => 
          array (
            'errorCode' => 'Report.NotExist.Error',
            'errorMessage' => 'This work does not exist. It may have been deleted. Work ID is %s.',
          ),
          8 => 
          array (
            'errorCode' => 'Authorize3Rd.Report.Unauthorized',
            'errorMessage' => 'The report is not enabled for third party embedding.',
          ),
          9 => 
          array (
            'errorCode' => 'Cube.Not.Exist',
            'errorMessage' => 'The Cube does not exist.',
          ),
          10 => 
          array (
            'errorCode' => 'Datasource.NotFound.Error',
            'errorMessage' => 'The specified data source does not exist: %s.',
          ),
          11 => 
          array (
            'errorCode' => 'Report.NotExist',
            'errorMessage' => 'The dashboard does not exist.',
          ),
          12 => 
          array (
            'errorCode' => 'Organization.Workspace.Inconformity',
            'errorMessage' => 'The workspace does not match the organization.',
          ),
          13 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          14 => 
          array (
            'errorCode' => 'Parameter.Length.Exceed',
            'errorMessage' => 'Parameter length exceeds maximum limit: [%s].',
          ),
          15 => 
          array (
            'errorCode' => 'Invalid.User.Organization',
            'errorMessage' => 'The user is not in your organization.',
          ),
          16 => 
          array (
            'errorCode' => 'GlobalParam.Restricted.Use',
            'errorMessage' => 'The global parameter function is restricted in your version.',
          ),
          17 => 
          array (
            'errorCode' => 'Authorize3rdTicket.Unsupport.ScreenWatermark',
            'errorMessage' => 'Screen embed does not support watermark parameters.',
          ),
          18 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          19 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          20 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          21 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          22 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          23 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          24 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          25 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          26 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          27 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          28 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          29 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          30 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": \\"ccd3428c-****-****-a608-26bae29dffee\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreateTicketResponse>\\n    <RequestId>D787E1A3-A93C-424A-B626-C2B05DF8D885</RequestId>\\n    <Result>ccd3428c-****-****-a608-26bae29dffee</Result>\\n    <Success>true</Success>\\n</CreateTicketResponse>","errorExample":""}]',
      'title' => '生成报表嵌入ticket',
      'description' => '具体使用方法详见[报表嵌入数据权限控制和传参的安全增强方案](https://help.aliyun.com/document_detail/391291.html)。',
    ),
    'DeleteTicket' => 
    array (
      'summary' => '删除免登嵌入报表的指定ticket。',
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Ticket',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '三方嵌入的票据值，即URL中的accessTicket值。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '040e6f79d****7d283c7206c070',
          ),
        ),
      ),
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
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'description' => '是否删除成功。取值范围：
- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：
- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'Authorize3rdTicket.BindedWorks.Mismatch',
            'errorMessage' => 'The report bound by the ticket mismatches the actual report.',
          ),
          2 => 
          array (
            'errorCode' => 'Authorize3rdTicket.Expired',
            'errorMessage' => 'Ticket [%s] has expired.',
          ),
          3 => 
          array (
            'errorCode' => 'Authorize3rdTicket.HasNo.LoginToken',
            'errorMessage' => 'The request [%s] has no token.',
          ),
          4 => 
          array (
            'errorCode' => 'Authorize3rdTicket.NotExist',
            'errorMessage' => 'Ticket %s does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'Authorize3rdTicket.Num.Exceed',
            'errorMessage' => 'The number of tickets %s  is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'Authorize3rdTicket.Num.HasNoLeft',
            'errorMessage' => 'There is no ticket number left, please generate new ticket.',
          ),
          7 => 
          array (
            'errorCode' => 'NoPermissionTo.Operate.Object',
            'errorMessage' => 'You are not authorized to operate the objects.',
          ),
          8 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          9 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          10 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          11 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          12 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          13 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          14 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          15 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          16 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          17 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          18 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          19 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          20 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          21 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          22 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteTicketResponse>\\n    <RequestId>D787E1A3-A93C-424A-B626-C2B05DF8D885</RequestId>\\n    <Result>true</Result>\\n    <Success>true</Success>\\n</DeleteTicketResponse>","errorExample":""}]',
      'title' => '删除嵌入ticket',
    ),
    'DelayTicketExpireTime' => 
    array (
      'summary' => '更新嵌入报表的ticket的失效时间。',
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
          'name' => 'Ticket',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '三方嵌入的票据值，即URL中的accessTicket值。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '040e6f79d33444838e*****c7206c070',
          ),
        ),
        1 => 
        array (
          'name' => 'ExpireTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要延期的时间。
- 单位分钟，取值范围0~240（4小时）。
- 已过期的票据无法延期。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '200',
          ),
        ),
      ),
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
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'description' => '是否延期成功。取值范围：
- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：
- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'Authorize3rdTicket.BindedWorks.Mismatch',
            'errorMessage' => 'The report bound by the ticket mismatches the actual report.',
          ),
          2 => 
          array (
            'errorCode' => 'Authorize3rdTicket.Expired',
            'errorMessage' => 'Ticket [%s] has expired.',
          ),
          3 => 
          array (
            'errorCode' => 'Authorize3rdTicket.HasNo.LoginToken',
            'errorMessage' => 'The request [%s] has no token.',
          ),
          4 => 
          array (
            'errorCode' => 'Authorize3rdTicket.NotExist',
            'errorMessage' => 'Ticket %s does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'Authorize3rdTicket.Num.Exceed',
            'errorMessage' => 'The number of tickets %s  is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'Authorize3rdTicket.Num.HasNoLeft',
            'errorMessage' => 'There is no ticket number left, please generate new ticket.',
          ),
          7 => 
          array (
            'errorCode' => 'NoPermissionTo.Operate.Object',
            'errorMessage' => 'You are not authorized to operate the objects.',
          ),
          8 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          9 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          10 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          11 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          12 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          13 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          14 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          15 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          16 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          17 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          18 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          19 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          20 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          21 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          22 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DelayTicketExpireTimeResponse>\\n    <RequestId>D787E1A3-A93C-424A-B626-C2B05DF8D885</RequestId>\\n    <Result>true</Result>\\n    <Success>true</Success>\\n</DelayTicketExpireTimeResponse>","errorExample":""}]',
      'title' => '更新嵌入ticket的失效时间',
    ),
    'UpdateTicketNum' => 
    array (
      'summary' => '对用于免登嵌入报表的指定的ticket进行更新票据数量操作。',
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
          'name' => 'Ticket',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '三方嵌入的票据值，即URL中的accessTicket值。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '040e6f79d33444838***83c7206c070',
          ),
        ),
        1 => 
        array (
          'name' => 'TicketNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '票据数。
- 取值范围：1~99998，建议值为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'description' => '是否更新成功。取值范围：
- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'Authorize3rdTicket.BindedWorks.Mismatch',
            'errorMessage' => 'The report bound by the ticket mismatches the actual report.',
          ),
          2 => 
          array (
            'errorCode' => 'Authorize3rdTicket.Expired',
            'errorMessage' => 'Ticket [%s] has expired.',
          ),
          3 => 
          array (
            'errorCode' => 'Authorize3rdTicket.HasNo.LoginToken',
            'errorMessage' => 'The request [%s] has no token.',
          ),
          4 => 
          array (
            'errorCode' => 'Authorize3rdTicket.NotExist',
            'errorMessage' => 'Ticket %s does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'Authorize3rdTicket.Num.Exceed',
            'errorMessage' => 'The number of tickets %s  is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'Authorize3rdTicket.Num.HasNoLeft',
            'errorMessage' => 'There is no ticket number left, please generate new ticket.',
          ),
          7 => 
          array (
            'errorCode' => 'NoPermissionTo.Operate.Object',
            'errorMessage' => 'You are not authorized to operate the objects.',
          ),
          8 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          9 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          10 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          11 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          12 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          13 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          14 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          15 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          16 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          17 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          18 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          19 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          20 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          21 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          22 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UpdateTicketNumResponse>\\n    <RequestId>D787E1A3-A93C-424A-B626-C2B05DF8D885</RequestId>\\n    <Result>true</Result>\\n    <Success>true</Success>\\n</UpdateTicketNumResponse>","errorExample":""}]',
      'title' => '更新嵌入ticket票据数量',
    ),
    'QueryTicketInfo' => 
    array (
      'summary' => '获取免登嵌入报表的指定ticket的详情信息。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Ticket',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '票据值。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'a27a9aec-****-****-bd40-1a21ea41d7c5',
          ),
        ),
      ),
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
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'description' => '生成的票据详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'AccessTicket' => 
                  array (
                    'description' => '票据。',
                    'type' => 'string',
                    'example' => 'a27a9aec-****-****-bd40-1a21ea41d7c5',
                  ),
                  'OrganizationId' => 
                  array (
                    'description' => '组织ID。',
                    'type' => 'string',
                    'example' => '2fe4fbd8-****-****-b3e1-e92c7af083ea',
                  ),
                  'UserId' => 
                  array (
                    'description' => 'Quick BI的用户ID。',
                    'type' => 'string',
                    'example' => '974e50**********9033f46',
                  ),
                  'UsedTicketNum' => 
                  array (
                    'description' => '已消费的票据数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '47',
                  ),
                  'MaxTicketNum' => 
                  array (
                    'description' => '最大支持的票据数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '9999',
                  ),
                  'RegisterTime' => 
                  array (
                    'description' => '票据的注册时间。',
                    'type' => 'string',
                    'example' => '2022-01-09 22:23:49',
                  ),
                  'InvalidTime' => 
                  array (
                    'description' => '票据的失效时间。',
                    'type' => 'string',
                    'example' => '2022-01-30 03:03:49',
                  ),
                  'WorksId' => 
                  array (
                    'description' => '报表ID。',
                    'type' => 'string',
                    'example' => 'ccd3428c-****-****-a608-26bae29dffee',
                  ),
                  'CmptId' => 
                  array (
                    'description' => '报表内的组件ID。',
                    'type' => 'string',
                    'example' => 'sfdgsds-****-****-a608-mghdgd',
                  ),
                  'GlobalParam' => 
                  array (
                    'description' => '全局参数。',
                    'type' => 'string',
                    'example' => '[{&quot;paramKey&quot;:&quot;price&quot;,&quot;joinType&quot;:&quot;and&quot;,&quot;conditionList&quot;:[{&quot;operate&quot;:&quot;&gt;&quot;,&quot;value&quot;:&quot;0&quot;}]},{&quot;paramKey&quot;:&quot;product_type&quot;,&quot;joinType&quot;:&quot;and&quot;,&quot;conditionList&quot;:[{&quot;operate&quot;:&quot;in&quot;,&quot;value&quot;:[&quot;办公用品&quot;,&quot;家具产品&quot;]}]}]\\n',
                  ),
                  'WatermarkParam' => 
                  array (
                    'description' => '水印参数。',
                    'type' => 'string',
                    'example' => 'Ticket三方嵌入',
                  ),
                ),
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：
- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'Authorize3rdTicket.BindedWorks.Mismatch',
            'errorMessage' => 'The report bound by the ticket mismatches the actual report.',
          ),
          2 => 
          array (
            'errorCode' => 'Authorize3rdTicket.Expired',
            'errorMessage' => 'Ticket [%s] has expired.',
          ),
          3 => 
          array (
            'errorCode' => 'Authorize3rdTicket.HasNo.LoginToken',
            'errorMessage' => 'The request [%s] has no token.',
          ),
          4 => 
          array (
            'errorCode' => 'Authorize3rdTicket.NotExist',
            'errorMessage' => 'Ticket %s does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'Authorize3rdTicket.Num.Exceed',
            'errorMessage' => 'The number of tickets %s  is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'Authorize3rdTicket.Num.HasNoLeft',
            'errorMessage' => 'There is no ticket number left, please generate new ticket.',
          ),
          7 => 
          array (
            'errorCode' => 'NoPermissionTo.Operate.Object',
            'errorMessage' => 'You are not authorized to operate the objects.',
          ),
          8 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          9 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          10 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          11 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          12 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          13 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          14 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          15 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          16 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          17 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          18 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          19 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          20 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          21 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          22 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": {\\n    \\"AccessTicket\\": \\"a27a9aec-****-****-bd40-1a21ea41d7c5\\",\\n    \\"OrganizationId\\": \\"2fe4fbd8-****-****-b3e1-e92c7af083ea\\",\\n    \\"UserId\\": \\"974e50**********9033f46\\",\\n    \\"UsedTicketNum\\": 47,\\n    \\"MaxTicketNum\\": 9999,\\n    \\"RegisterTime\\": \\"2022-01-09 22:23:49\\",\\n    \\"InvalidTime\\": \\"2022-01-30 03:03:49\\",\\n    \\"WorksId\\": \\"ccd3428c-****-****-a608-26bae29dffee\\",\\n    \\"CmptId\\": \\"sfdgsds-****-****-a608-mghdgd\\",\\n    \\"GlobalParam\\": \\"[{&quot;paramKey&quot;:&quot;price&quot;,&quot;joinType&quot;:&quot;and&quot;,&quot;conditionList&quot;:[{&quot;operate&quot;:&quot;&gt;&quot;,&quot;value&quot;:&quot;0&quot;}]},{&quot;paramKey&quot;:&quot;product_type&quot;,&quot;joinType&quot;:&quot;and&quot;,&quot;conditionList&quot;:[{&quot;operate&quot;:&quot;in&quot;,&quot;value&quot;:[&quot;办公用品&quot;,&quot;家具产品&quot;]}]}]\\\\\\\\n\\",\\n    \\"WatermarkParam\\": \\"Ticket三方嵌入\\"\\n  },\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<QueryTicketInfoResponse>\\n    <RequestId>D787E1A3-A93C-424A-B626-C2B05DF8D885</RequestId>\\n    <Result>\\n        <AccessTicket>a27a9aec-****-****-bd40-1a21ea41d7c5</AccessTicket>\\n        <OrganizationId>2fe4fbd8-****-****-b3e1-e92c7af083ea</OrganizationId>\\n        <UserId>974e50**********9033f46</UserId>\\n        <UsedTicketNum>47</UsedTicketNum>\\n        <MaxTicketNum>9999</MaxTicketNum>\\n        <RegisterTime>2022-01-09 22:23:49</RegisterTime>\\n        <InvalidTime>2022-01-30 03:03:49</InvalidTime>\\n        <WorksId>ccd3428c-****-****-a608-26bae29dffee</WorksId>\\n        <CmptId>sfdgsds-****-****-a608-mghdgd</CmptId>\\n        <GlobalParam>[{&amp;quot;paramKey&amp;quot;:&amp;quot;price&amp;quot;,&amp;quot;joinType&amp;quot;:&amp;quot;and&amp;quot;,&amp;quot;conditionList&amp;quot;:[{&amp;quot;operate&amp;quot;:&amp;quot;&amp;gt;&amp;quot;,&amp;quot;value&amp;quot;:&amp;quot;0&amp;quot;}]},{&amp;quot;paramKey&amp;quot;:&amp;quot;product_type&amp;quot;,&amp;quot;joinType&amp;quot;:&amp;quot;and&amp;quot;,&amp;quot;conditionList&amp;quot;:[{&amp;quot;operate&amp;quot;:&amp;quot;in&amp;quot;,&amp;quot;value&amp;quot;:[&amp;quot;办公用品&amp;quot;,&amp;quot;家具产品&amp;quot;]}]}]\\\\n</GlobalParam>\\n        <WatermarkParam>Ticket三方嵌入</WatermarkParam>\\n    </Result>\\n    <Success>true</Success>\\n</QueryTicketInfoResponse>","errorExample":""}]',
      'title' => '查询嵌入报表ticket详情',
    ),
    'ResultCallback' => 
    array (
      'summary' => '自定义审批流回调接口，用户自行对Quick BI的审批流进行处理。',
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
          'name' => 'ApplicationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '审批流的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'c5ea0db8-****-****-9081-04bc0df4c6a3',
          ),
        ),
        1 => 
        array (
          'name' => 'HandleReason',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '审批理由。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '你不是A部门分析师。',
          ),
        ),
        2 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '审批结果：

- 1：通过
- 2：拒绝',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D787E1A3-A93C-424A-B626-C2B05DF8D885',
              ),
              'Result' => 
              array (
                'description' => '返回接口执行结果。取值范围：

- true：执行成功
- false：执行失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。取值范围：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Internal.System.Error',
            'errorMessage' => 'An internal system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'Application.Object.NotExist',
            'errorMessage' => 'The object you are operating does not exist or has been deleted.',
          ),
          2 => 
          array (
            'errorCode' => 'Application.RecordClosed',
            'errorMessage' => 'The closed application record cannot be operated.',
          ),
          3 => 
          array (
            'errorCode' => 'Application.NotExist',
            'errorMessage' => 'The application is not exists.',
          ),
          4 => 
          array (
            'errorCode' => 'Instance.Expired',
            'errorMessage' => 'Your instance has expired.',
          ),
          5 => 
          array (
            'errorCode' => 'Instance.Not.Exist',
            'errorMessage' => 'The specified instance does not exist.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Organization',
            'errorMessage' => 'The specified organizational unit does not exist.',
          ),
          7 => 
          array (
            'errorCode' => 'User.Not.In.Organization',
            'errorMessage' => 'The specified user is not in the organizational unit.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Parameter',
            'errorMessage' => 'An error occurred while verifying parameters.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.Parameter.Error',
            'errorMessage' => 'The parameter is invalid:%s.',
          ),
          10 => 
          array (
            'errorCode' => 'Invalid.Param.Error',
            'errorMessage' => 'The parameter is invalid.',
          ),
          11 => 
          array (
            'errorCode' => 'Invalid.User.Admin',
            'errorMessage' => 'You are not an administrator of this organization.',
          ),
          12 => 
          array (
            'errorCode' => 'System.Param.Empty',
            'errorMessage' => 'You must specify the %s parameter.',
          ),
          13 => 
          array (
            'errorCode' => 'Access.Forbidden',
            'errorMessage' => 'Your instance version or access key is not allowed to call the API operation, only professional version supports calling.',
          ),
          14 => 
          array (
            'errorCode' => 'UserInfo.Error',
            'errorMessage' => 'The personal information is invalid.',
          ),
          15 => 
          array (
            'errorCode' => 'ApiUser.Not.Exists',
            'errorMessage' => 'The specified user does not exist.',
          ),
          16 => 
          array (
            'errorCode' => 'User.Not.WorkspaceAdmin',
            'errorMessage' => 'Only administrators of the group workspace can perform this operation.',
          ),
          17 => 
          array (
            'errorCode' => 'Not.ApiCall.AuthUser',
            'errorMessage' => 'You are not an administrator or API call auth user of this organization.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D787E1A3-A93C-424A-B626-C2B05DF8D885\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '自定义审批流回调接口',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'quickbi-public.cn-shanghai-finance-1.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'quickbi-public.cn-hangzhou.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'quickbi-public.ap-southeast-1.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'quickbi-public.cn-hongkong.aliyuncs.com',
    ),
  ),
);
<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'ResourceManager',
    'version' => '2020-03-31',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 142920,
      'title' => '资源目录',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'EnableResourceDirectory',
        1 => 'SendVerificationCodeForEnableRD',
        2 => 'GetResourceDirectory',
        3 => 'DestroyResourceDirectory',
      ),
    ),
    1 => 
    array (
      'id' => 190386,
      'title' => '资源夹',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateFolder',
        1 => 'GetFolder',
        2 => 'UpdateFolder',
        3 => 'DeleteFolder',
        4 => 'ListFoldersForParent',
        5 => 'ListAncestors',
      ),
    ),
    2 => 
    array (
      'id' => 190387,
      'title' => '成员',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateResourceAccount',
        1 => 'UpdateAccount',
        2 => 'GetAccount',
        3 => 'GetPayerForAccount',
        4 => 'ListAccounts',
        5 => 'ListAccountsForParent',
        6 => 'MoveAccount',
        7 => 'RemoveCloudAccount',
        8 => 'BindSecureMobilePhone',
        9 => 'SendVerificationCodeForBindSecureMobilePhone',
        10 => 'ChangeAccountEmail',
        11 => 'RetryChangeAccountEmail',
        12 => 'CancelChangeAccountEmail',
        13 => 'CheckAccountDelete',
        14 => 'DeleteAccount',
        15 => 'SetMemberDeletionPermission',
        16 => 'GetAccountDeletionStatus',
        17 => 'GetAccountDeletionCheckResult',
        18 => 'InviteAccountToResourceDirectory',
        19 => 'GetHandshake',
        20 => 'CancelHandshake',
        21 => 'ListHandshakesForAccount',
        22 => 'ListHandshakesForResourceDirectory',
        23 => 'AcceptHandshake',
        24 => 'DeclineHandshake',
      ),
    ),
    3 => 
    array (
      'id' => 142993,
      'title' => '管控策略',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'EnableControlPolicy',
        1 => 'GetControlPolicyEnablementStatus',
        2 => 'DisableControlPolicy',
        3 => 'CreateControlPolicy',
        4 => 'GetControlPolicy',
        5 => 'UpdateControlPolicy',
        6 => 'DeleteControlPolicy',
        7 => 'AttachControlPolicy',
        8 => 'DetachControlPolicy',
        9 => 'ListControlPolicies',
        10 => 'ListControlPolicyAttachmentsForTarget',
        11 => 'ListTargetAttachmentsForControlPolicy',
      ),
    ),
    4 => 
    array (
      'id' => 190388,
      'title' => '可信服务',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListTrustedServiceStatus',
        1 => 'RegisterDelegatedAdministrator',
        2 => 'DeregisterDelegatedAdministrator',
        3 => 'ListDelegatedAdministrators',
        4 => 'ListDelegatedServicesForAccount',
      ),
    ),
    5 => 
    array (
      'id' => 142982,
      'title' => '资源组',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateResourceGroup',
        1 => 'DeleteResourceGroup',
        2 => 'UpdateResourceGroup',
        3 => 'ListResourceGroups',
        4 => 'ListResources',
        5 => 'GetResourceGroup',
        6 => 'MoveResources',
        7 => 'EnableAssociatedTransfer',
        8 => 'DisableAssociatedTransfer',
        9 => 'UpdateAssociatedTransferSetting',
        10 => 'ListAssociatedTransferSetting',
      ),
    ),
    6 => 
    array (
      'id' => 142976,
      'title' => '角色',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateRole',
        1 => 'DeleteRole',
        2 => 'UpdateRole',
        3 => 'GetRole',
        4 => 'ListRoles',
      ),
    ),
    7 => 
    array (
      'id' => 142958,
      'title' => '服务关联角色',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateServiceLinkedRole',
        1 => 'DeleteServiceLinkedRole',
        2 => 'GetServiceLinkedRoleDeletionStatus',
      ),
    ),
    8 => 
    array (
      'id' => 142962,
      'title' => '权限策略',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreatePolicy',
        1 => 'DeletePolicy',
        2 => 'SetDefaultPolicyVersion',
        3 => 'AttachPolicy',
        4 => 'DetachPolicy',
        5 => 'ListPolicies',
        6 => 'GetPolicy',
        7 => 'ListPolicyAttachments',
        8 => 'CreatePolicyVersion',
        9 => 'DeletePolicyVersion',
        10 => 'ListPolicyVersions',
        11 => 'GetPolicyVersion',
      ),
    ),
    9 => 
    array (
      'id' => 190389,
      'title' => '标签',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'TagResources',
        1 => 'UntagResources',
        2 => 'ListTagResources',
        3 => 'ListTagKeys',
        4 => 'ListTagValues',
      ),
    ),
    10 => 
    array (
      'id' => 190390,
      'title' => '其他（不维护）',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'InitResourceDirectory',
        1 => 'CreateCloudAccount',
        2 => 'PromoteResourceAccount',
        3 => 'ResendPromoteResourceAccountEmail',
        4 => 'ResendCreateCloudAccountEmail',
        5 => 'CancelCreateCloudAccount',
        6 => 'CancelPromoteResourceAccount',
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
    'EnableResourceDirectory' => 
    array (
      'summary' => '调用EnableResourceDirectory开通资源目录。',
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
          'name' => 'MAName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新管理账号名称。

格式：`<前缀>@rdadmin.aliyunid.com`。其中，<前缀>允许输入英文字母、数字、特殊字符`_.-`，且必须以英文字母或数字开头和结尾，不能输入连续特殊字符。<前缀>的长度为2~50个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'user01@rdadmin.aliyunid.com',
          ),
        ),
        1 => 
        array (
          'name' => 'MASecureMobilePhone',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新创建管理账号的安全手机号码。

置空表示采用当前登录账号的安全手机号码。该手机号码必须与[SendVerificationCodeForEnableRD](~~364248~~)中获取验证码时使用的手机号码一致。

格式：`<国家码>-<手机号码>`。

<props="intl">
> 不支持填写`86-<手机号码>`的中国内地手机号码。</props>


<props="china">
> 仅支持填写`86-<手机号码>`的中国内地手机号码。</props>
',
            'type' => 'string',
            'required' => false,
            'example' => 'xx-13900001234',
          ),
        ),
        2 => 
        array (
          'name' => 'VerificationCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '验证码。

您可以调用[SendVerificationCodeForEnableRD](~~364248~~)获取验证码。',
            'type' => 'string',
            'required' => false,
            'example' => '123456',
          ),
        ),
        3 => 
        array (
          'name' => 'EnableMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开通方式。取值：

- CurrentAccount：使用当前登录账号开通资源目录。
- NewManagementAccount：新创建管理账号开通资源目录。该方式下，您需要配置`MAName`、`MASecureMobilePhone`和`VerificationCode`。',
            'type' => 'string',
            'required' => true,
            'example' => 'CurrentAccount',
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
              'ResourceDirectory' => 
              array (
                'description' => '资源目录信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'ResourceDirectoryId' => 
                  array (
                    'description' => '资源目录ID。',
                    'type' => 'string',
                    'example' => 'rd-54****',
                  ),
                  'MasterAccountId' => 
                  array (
                    'description' => '管理账号ID。',
                    'type' => 'string',
                    'example' => '507408460615****',
                  ),
                  'MasterAccountName' => 
                  array (
                    'description' => '管理账号名称。',
                    'type' => 'string',
                    'example' => 'alice@example.com',
                  ),
                  'RootFolderId' => 
                  array (
                    'description' => 'Root资源夹ID。',
                    'type' => 'string',
                    'example' => 'r-G9****',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '资源目录开通时间。',
                    'type' => 'string',
                    'example' => '2021-12-08T02:15:31.744Z',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'EC2FE94D-A4A2-51A1-A493-5C273A36C46A',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'NotSupport.AccountInAnotherResourceDirectory',
            'errorMessage' => 'The specified account is an Alibaba Cloud account or already exists in another resource directory.',
          ),
          1 => 
          array (
            'errorCode' => 'Invalid.EnterpriseName',
            'errorMessage' => 'You must specify the enterprise name.',
          ),
          2 => 
          array (
            'errorCode' => 'EnterpriseRealNameVerificationError',
            'errorMessage' => 'The specified account does not pass enterprise real-name verification. We recommend you first complete enterprise real-name verification for the account.',
          ),
          3 => 
          array (
            'errorCode' => 'EntityAlreadyExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is already enabled. We recommend that you do not enable the resource directory again.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.ManagementAccountName.AlreadyUsed',
            'errorMessage' => 'The ManagementAccountName has been used.',
          ),
          5 => 
          array (
            'errorCode' => 'Invalid.VerificationCode',
            'errorMessage' => 'The verification code is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidParameter.ManagementAccountName',
            'errorMessage' => 'The management account name is in the wrong format.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidParameter.ManagementAccountSecurityInfo',
            'errorMessage' => 'The parameter management account secure mobile phone is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'MissingSecureMobilePhone',
            'errorMessage' => 'Secure mobile phone is missing.',
          ),
          9 => 
          array (
            'errorCode' => 'MissingSecurityInfo',
            'errorMessage' => 'Security info is missing.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResourceDirectory\\": {\\n    \\"ResourceDirectoryId\\": \\"rd-54****\\",\\n    \\"MasterAccountId\\": \\"507408460615****\\",\\n    \\"MasterAccountName\\": \\"alice@example.com\\",\\n    \\"RootFolderId\\": \\"r-G9****\\",\\n    \\"CreateTime\\": \\"2021-12-08T02:15:31.744Z\\"\\n  },\\n  \\"RequestId\\": \\"EC2FE94D-A4A2-51A1-A493-5C273A36C46A\\"\\n}","errorExample":""},{"type":"xml","example":"<EnableResourceDirectoryResponse>\\n    <RequestId>EC2FE94D-A4A2-51A1-A493-5C273A36C46A</RequestId>\\n    <ResourceDirectory>\\n        <ResourceDirectoryId>rd-54****</ResourceDirectoryId>\\n        <MasterAccountName>alice@example.com</MasterAccountName>\\n        <RootFolderId>r-G9****</RootFolderId>\\n        <CreateTime>2021-12-08T02:15:31.744Z</CreateTime>\\n        <MasterAccountId>507408460615****</MasterAccountId>\\n    </ResourceDirectory>\\n</EnableResourceDirectoryResponse>","errorExample":""}]',
      'title' => '开通资源目录',
      'description' => '您可以使用当前登录账号或新创建管理账号两种方式开通资源目录。更多信息，请参见[开通资源目录](~~111215~~)。

本文将提供一个示例，使用当前登录账号开通资源目录。',
    ),
    'SendVerificationCodeForEnableRD' => 
    array (
      'summary' => '通过创建新管理账号开通资源目录时，调用SendVerificationCodeForEnableRD向新管理账号的安全手机号码发送验证码。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SecureMobilePhone',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新创建的管理账号的安全手机号码。置空表示采用当前登录账号的安全手机号码。

格式：`<国家码>-<手机号码>`。

<props="intl">
> 不支持填写`86-<手机号码>`的中国内地手机号码。</props>

<props="china">
> 仅支持填写`86-<手机号码>`的中国内地手机号码。</props>
',
            'type' => 'string',
            'required' => false,
            'example' => 'xx-13900001234',
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
                'example' => 'EC2FE94D-A4A2-51A1-A493-5C273A36C46A',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'NotSupport.AccountInAnotherResourceDirectory',
            'errorMessage' => 'The specified account is an Alibaba Cloud account or already exists in another resource directory.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityAlreadyExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is already enabled. We recommend that you do not enable the resource directory again.',
          ),
          2 => 
          array (
            'errorCode' => 'SendValidateCodeExceedsLimitForAccount',
            'errorMessage' => 'For the same account, the number of verification codes sent exceeds the limit.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.MobileCountryCode',
            'errorMessage' => 'The current site does not support the country code.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC2FE94D-A4A2-51A1-A493-5C273A36C46A\\"\\n}","errorExample":""},{"type":"xml","example":"<SendVerificationCodeForEnableRDResponse>\\n    <RequestId>EC2FE94D-A4A2-51A1-A493-5C273A36C46A</RequestId>\\n</SendVerificationCodeForEnableRDResponse>","errorExample":""}]',
      'title' => '发送验证码',
      'description' => '每个阿里云账号每天最多发送100次验证码。',
    ),
    'GetResourceDirectory' => 
    array (
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CD76D376-2517-4924-92C5-DBC52262F93A',
              ),
              'ResourceDirectory' => 
              array (
                'description' => '资源目录信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'RootFolderId' => 
                  array (
                    'description' => 'Root资源夹ID。',
                    'type' => 'string',
                    'example' => 'r-Zo****',
                  ),
                  'ResourceDirectoryId' => 
                  array (
                    'description' => '资源目录ID。',
                    'type' => 'string',
                    'example' => 'rd-St****',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '资源目录开通时间。',
                    'type' => 'string',
                    'example' => '2019-02-18T15:32:10.473Z',
                  ),
                  'MasterAccountId' => 
                  array (
                    'description' => '管理账号ID。',
                    'type' => 'string',
                    'example' => '172845045600****',
                  ),
                  'MasterAccountName' => 
                  array (
                    'description' => '管理账号名称。',
                    'type' => 'string',
                    'example' => 'aliyun-admin',
                  ),
                  'ControlPolicyStatus' => 
                  array (
                    'description' => '管控策略状态。取值：

- Enabled：已开启。
- PendingEnable：开启中。
- Disabled：已关闭。
- PendingDisable：关闭中。',
                    'type' => 'string',
                    'example' => 'Enabled',
                  ),
                  'MemberDeletionStatus' => 
                  array (
                    'description' => '是否开启了成员删除许可。取值：
- Enabled：已开启。允许通过调用[DeleteAccount](~~311546~~)删除资源账号类型的成员。
- Disabled：已关闭。不允许删除资源账号类型的成员。',
                    'type' => 'string',
                    'example' => 'Enabled',
                  ),
                  'IdentityInformation' => 
                  array (
                    'description' => '成员实名信息。',
                    'type' => 'string',
                    'example' => '***有限公司',
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
            'errorCode' => 'ResourceDirectoryNotInUse',
            'errorMessage' => 'The specified account is not an Alibaba Cloud account or a member account of the resource directory.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CD76D376-2517-4924-92C5-DBC52262F93A\\",\\n  \\"ResourceDirectory\\": {\\n    \\"RootFolderId\\": \\"r-Zo****\\",\\n    \\"ResourceDirectoryId\\": \\"rd-St****\\",\\n    \\"CreateTime\\": \\"2019-02-18T15:32:10.473Z\\",\\n    \\"MasterAccountId\\": \\"172845045600****\\",\\n    \\"MasterAccountName\\": \\"aliyun-admin\\",\\n    \\"ControlPolicyStatus\\": \\"Enabled\\",\\n    \\"MemberDeletionStatus\\": \\"Enabled\\",\\n    \\"IdentityInformation\\": \\"***有限公司\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetResourceDirectoryResponse>\\n    <RequestId>CD76D376-2517-4924-92C5-DBC52262F93A</RequestId>\\n    <ResourceDirectory>\\n        <RootFolderId>r-Zo****</RootFolderId>\\n        <ResourceDirectoryId>rd-St****</ResourceDirectoryId>\\n        <CreateTime>2019-02-18T15:32:10.473Z</CreateTime>\\n        <MasterAccountId>172845045600****</MasterAccountId>\\n        <MasterAccountName>aliyun-admin</MasterAccountName>\\n        <ControlPolicyStatus>Enabled</ControlPolicyStatus>\\n        <MemberDeletionStatus>Enabled</MemberDeletionStatus>\\n        <IdentityInformation>***有限公司</IdentityInformation>\\n    </ResourceDirectory>\\n</GetResourceDirectoryResponse>","errorExample":""}]',
      'title' => '获取资源目录信息',
      'summary' => '调用GetResourceDirectory获取资源目录信息。管理账号调用时，返回管理账号开通的资源目录详情。成员调用时，返回成员所属的资源目录详情。',
      'description' => '本文将提供一个示例，使用管理账号查询其开通的资源目录详情。',
    ),
    'DestroyResourceDirectory' => 
    array (
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
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
                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
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
            'errorCode' => 'EntityNotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'DeleteConflict.ResourceDirectory.Account',
            'errorMessage' => 'Failed to delete the resource directory because one or more member accounts exist. We recommend that you first remove these member accounts.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DestroyResourceDirectoryResponse>\\r\\n  <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\r\\n</DestroyResourceDirectoryResponse>","errorExample":""}]',
      'title' => '关闭资源目录',
      'summary' => '调用DestroyResourceDirectory关闭资源目录。此操作不可恢复，请您慎重操作。',
      'description' => '关闭资源目录前，请确认已完成以下操作：
- 资源目录内所有成员已被移除。关于如何移除成员，请参见[RemoveCloudAccount](~~159431~~)。
- 资源目录内除Root资源夹外的资源夹已全部删除。关于如何删除资源夹，请参见[DeleteFolder](~~159432~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateFolder' => 
    array (
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
          'name' => 'ParentFolderId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '父资源夹ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'r-b1****',
          ),
        ),
        1 => 
        array (
          'name' => 'FolderName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源夹名称。

长度为1~24个字符或汉字，可包含汉字、英文字母、数字、下划线（_）、半角句号（.）和短划线（-）。',
            'type' => 'string',
            'required' => true,
            'example' => 'rdFolder',
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
                'example' => 'C2CBCA30-C8DD-423E-B4AD-4FB694C9180C',
              ),
              'Folder' => 
              array (
                'description' => '资源夹信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'FolderId' => 
                  array (
                    'description' => '资源夹ID。',
                    'type' => 'string',
                    'example' => 'fd-u8B321****',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '资源夹创建时间。',
                    'type' => 'string',
                    'example' => '2019-02-19T09:34:50.757Z',
                  ),
                  'ParentFolderId' => 
                  array (
                    'description' => '父资源夹ID。',
                    'type' => 'string',
                    'example' => 'r-b1****',
                  ),
                  'FolderName' => 
                  array (
                    'description' => '资源夹名称。',
                    'type' => 'string',
                    'example' => 'rdFolder',
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
            'errorCode' => 'InvalidParameter.ParentFolderId',
            'errorMessage' => 'The ParentFolderId is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingParameter.Folder.Name',
            'errorMessage' => 'You must specify the resource folder name.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.Folder.Name',
            'errorMessage' => 'The Name of folder is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.Folder.Name.Length',
            'errorMessage' => 'The Name of folder exceeds the length limit.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.Folder.Name.AlreadyUsed',
            'errorMessage' => 'The name already exists under the same parent. Please change to another name.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExists.Folder',
            'errorMessage' => 'The resource directory folder does not exist.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'LimitExceeded.Folder.Depth',
            'errorMessage' => 'The folder depth exceeds the limit of 5.',
          ),
          1 => 
          array (
            'errorCode' => 'QuotaExceeded.Folder.Count',
            'errorMessage' => 'The number of folders exceeds the quota.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C2CBCA30-C8DD-423E-B4AD-4FB694C9180C\\",\\n  \\"Folder\\": {\\n    \\"FolderId\\": \\"fd-u8B321****\\",\\n    \\"CreateTime\\": \\"2019-02-19T09:34:50.757Z\\",\\n    \\"ParentFolderId\\": \\"r-b1****\\",\\n    \\"FolderName\\": \\"rdFolder\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<CreateFolderResponse>\\r\\n        <Folder>\\r\\n            <FolderName>rdFolder</FolderName> \\r\\n            <ParentFolderId>r-b1****</ParentFolderId>\\r\\n            <FolderId>fd-u8B321****</FolderId>\\r\\n            <CreateTime>2019-02-19T09:34:50.757Z</CreateTime>\\r\\n        </Folder>\\r\\n        <RequestId>C2CBCA30-C8DD-423E-B4AD-4FB694C9180C</RequestId>\\r\\n</CreateFolderResponse>","errorExample":""}]',
      'title' => '创建资源夹',
      'summary' => '调用CreateFolder创建资源夹。',
      'description' => '> 最多支持创建5级资源夹。

本文将提供一个示例，在Root资源夹下，创建一个名为`rdFolder`的资源夹。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetFolder' => 
    array (
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FolderId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源夹ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'fd-Jyl5U7****',
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
                'example' => 'C2CBCA30-C8DD-423E-B4AD-4FB694C9180C',
              ),
              'Folder' => 
              array (
                'description' => '资源夹信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'FolderId' => 
                  array (
                    'description' => '资源夹ID。',
                    'type' => 'string',
                    'example' => 'fd-Jyl5U7****',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '资源夹创建时间。',
                    'type' => 'string',
                    'example' => '2021-06-15T06:39:08.521Z',
                  ),
                  'ParentFolderId' => 
                  array (
                    'description' => '父资源夹ID。',
                    'type' => 'string',
                    'example' => 'r-Wm****',
                  ),
                  'FolderName' => 
                  array (
                    'description' => '资源夹名称。',
                    'type' => 'string',
                    'example' => 'Applications',
                  ),
                  'ResourceDirectoryPath' => 
                  array (
                    'description' => '资源夹在资源目录中的路径ID（RDPath）。',
                    'type' => 'string',
                    'example' => 'rd-3G****/r-Wm****/fd-Jyl5U7****',
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
            'errorCode' => 'MissingParameter.FolderId',
            'errorMessage' => 'You must specify FolderId.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.FolderId',
            'errorMessage' => 'The FolderId is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExists.Folder',
            'errorMessage' => 'The resource directory folder does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C2CBCA30-C8DD-423E-B4AD-4FB694C9180C\\",\\n  \\"Folder\\": {\\n    \\"FolderId\\": \\"fd-Jyl5U7****\\",\\n    \\"CreateTime\\": \\"2021-06-15T06:39:08.521Z\\",\\n    \\"ParentFolderId\\": \\"r-Wm****\\",\\n    \\"FolderName\\": \\"Applications\\",\\n    \\"ResourceDirectoryPath\\": \\"rd-3G****/r-Wm****/fd-Jyl5U7****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<GetFolderResponse>\\r\\n\\t<RequestId>88EF473E-D5CD-589F-AAB3-F6E0D12AECA3</RequestId>\\r\\n\\t<Folder>\\r\\n\\t\\t<CreateTime>2021-06-15T06:39:08.521Z</CreateTime>\\r\\n\\t\\t<FolderId>fd-Jyl5U7****</FolderId>\\r\\n\\t\\t<FolderName>Applications</FolderName>\\r\\n\\t\\t<ParentFolderId>r-Wm****</ParentFolderId>\\r\\n\\t\\t<ResourceDirectoryPath>rd-3G****/r-Wm****/fd-Jyl5U7****</ResourceDirectoryPath>\\r\\n\\t</Folder>\\r\\n</GetFolderResponse>","errorExample":""}]',
      'title' => '获取资源夹信息',
      'summary' => '调用GetFolder获取资源夹信息。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateFolder' => 
    array (
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
          'name' => 'FolderId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源夹ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'fd-u8B321****',
          ),
        ),
        1 => 
        array (
          'name' => 'NewFolderName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新资源夹名称。

长度为1~24个字符或汉字，可包含汉字、英文字母、数字、下划线（_）、点号（.）和短横线（-）。',
            'type' => 'string',
            'required' => true,
            'example' => 'rdFolder',
          ),
        ),
      ),
      'responses' => 
      array (
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
                'example' => 'C2CBCA30-C8DD-423E-B4AD-4FB694C9180C',
              ),
              'Folder' => 
              array (
                'description' => '资源夹信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'FolderId' => 
                  array (
                    'description' => '资源夹ID。',
                    'type' => 'string',
                    'example' => 'fd-u8B321****',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '资源夹创建时间。',
                    'type' => 'string',
                    'example' => '2019-02-19T09:34:50.757Z',
                  ),
                  'ParentFolderId' => 
                  array (
                    'description' => '父资源夹ID。',
                    'type' => 'string',
                    'example' => 'r-b1****',
                  ),
                  'FolderName' => 
                  array (
                    'description' => '资源夹名称。',
                    'type' => 'string',
                    'example' => 'rdFolder',
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
            'errorCode' => 'MissingParameter.Folder.Name',
            'errorMessage' => 'You must specify the resource folder name.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Folder.Name',
            'errorMessage' => 'The Name of folder is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.Folder.Name.Length',
            'errorMessage' => 'The Name of folder exceeds the length limit.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter.FolderId',
            'errorMessage' => 'You must specify FolderId.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.FolderId',
            'errorMessage' => 'The FolderId is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameter.Folder.Name.AlreadyUsed',
            'errorMessage' => 'The name already exists under the same parent. Please change to another name.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExists.Folder',
            'errorMessage' => 'The resource directory folder does not exist.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'LimitExceeded.Folder.Depth',
            'errorMessage' => 'The folder depth exceeds the limit of 5.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C2CBCA30-C8DD-423E-B4AD-4FB694C9180C\\",\\n  \\"Folder\\": {\\n    \\"FolderId\\": \\"fd-u8B321****\\",\\n    \\"CreateTime\\": \\"2019-02-19T09:34:50.757Z\\",\\n    \\"ParentFolderId\\": \\"r-b1****\\",\\n    \\"FolderName\\": \\"rdFolder\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<UpdateFolderResponse>\\r\\n    <Folder>\\r\\n        <FolderName>rdFolder</FolderName>\\r\\n        <ParentFolderId>r-b1****</ParentFolderId>\\r\\n        <FolderId>fd-u8B321****</FolderId>\\r\\n        <CreateTime>2019-02-19T09:34:50.757Z</CreateTime>\\r\\n    </Folder>\\r\\n    <RequestId>C2CBCA30-C8DD-423E-B4AD-4FB694C9180C</RequestId>\\r\\n</UpdateFolderResponse>","errorExample":""}]',
      'title' => '修改资源夹名称',
      'summary' => '调用UpdateFolder修改资源夹名称。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteFolder' => 
    array (
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
          'name' => 'FolderId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源夹ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'fd-ae1in7****',
          ),
        ),
      ),
      'responses' => 
      array (
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
                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MissingParameter.FolderId',
            'errorMessage' => 'You must specify FolderId.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.FolderId',
            'errorMessage' => 'The FolderId is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExists.Folder',
            'errorMessage' => 'The resource directory folder does not exist.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'DeleteConflict.Folder.SubFolder',
            'errorMessage' => 'This folder has sub folders.',
          ),
          1 => 
          array (
            'errorCode' => 'DeleteConflict.Folder.Account',
            'errorMessage' => 'This folder has accounts.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DeleteFolderResponse>\\r\\n  <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\r\\n</DeleteFolderResponse>","errorExample":""}]',
      'title' => '删除资源夹',
      'summary' => '调用DeleteFolder删除资源夹。',
      'description' => '> 删除资源夹前，请确保资源夹下不存在成员或子资源夹。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListFoldersForParent' => 
    array (
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ParentFolderId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '父资源夹ID。

当该参数置空时，查询的是Root资源夹下的下一级子资源夹。',
            'type' => 'string',
            'required' => false,
            'example' => 'r-b1****',
          ),
        ),
        1 => 
        array (
          'name' => 'QueryKeyword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询关键字，例如：资源夹名称。

支持模糊查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'rdFolder',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。

起始值：1。默认值：1。',
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
            'description' => '分页时每页显示的数据行数。

取值范围：1~100。默认值：10。
',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '数据总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7B8A4E7D-6CFF-471D-84DF-195A7A241ECB',
              ),
              'PageSize' => 
              array (
                'description' => '分页时每页显示的数据行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '5',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Folders' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Folder' => 
                  array (
                    'description' => '资源夹列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '资源夹列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'FolderId' => 
                        array (
                          'description' => '资源夹ID。',
                          'type' => 'string',
                          'example' => 'rd-evic31****',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '资源夹创建时间。',
                          'type' => 'string',
                          'example' => '2015-01-23T12:33:18Z',
                        ),
                        'FolderName' => 
                        array (
                          'description' => '资源夹名称。',
                          'type' => 'string',
                          'example' => 'project-1',
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
            'errorCode' => 'InvalidParameter.ParentFolderId',
            'errorMessage' => 'The ParentFolderId is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExists.Folder',
            'errorMessage' => 'The resource directory folder does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 2,\\n  \\"RequestId\\": \\"7B8A4E7D-6CFF-471D-84DF-195A7A241ECB\\",\\n  \\"PageSize\\": 5,\\n  \\"PageNumber\\": 1,\\n  \\"Folders\\": {\\n    \\"Folder\\": [\\n      {\\n        \\"FolderId\\": \\"rd-evic31****\\",\\n        \\"CreateTime\\": \\"2015-01-23T12:33:18Z\\",\\n        \\"FolderName\\": \\"project-1\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ListFoldersForParentResponse>\\r\\n        <RequestId>7B8A4E7D-6CFF-471D-84DF-195A7A241ECB</RequestId>\\r\\n        <PageNumber>1</PageNumber>\\r\\n        <PageSize>5</PageSize>\\r\\n        <TotalCount>2</TotalCount>\\r\\n        <Folders>\\r\\n            <Folder>\\r\\n                <FolderId>rd-evic31****</FolderId>\\r\\n                <FolderName>project-1</FolderName>\\r\\n                <CreateTime>2015-01-23T12:33:18Z</CreateTime>\\r\\n            </Folder>\\r\\n            <Folder>\\r\\n                <FolderId>fd-evic31****</FolderId>\\r\\n                <FolderName>project-2</FolderName>\\r\\n                <CreateTime>2015-01-23T12:33:18Z</CreateTime>\\r\\n            </Folder>\\r\\n        </Folders>\\r\\n</ListFoldersForParentResponse>","errorExample":""}]',
      'title' => '查看指定资源夹的子资源夹信息',
      'summary' => '调用ListFoldersForParent查询指定资源夹的子资源夹列表。',
      'description' => '> 只能查看指定资源夹下一级的子资源夹列表，无法查看更深层级的资源夹列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListAncestors' => 
    array (
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ChildId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '子资源夹ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'fd-i1c9nr****',
          ),
        ),
      ),
      'responses' => 
      array (
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
                'example' => '83AFBEB6-DC03-406E-9686-867461FF6698',
              ),
              'Folders' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Folder' => 
                  array (
                    'description' => '资源夹信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '资源夹信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'FolderId' => 
                        array (
                          'description' => '资源夹ID。',
                          'type' => 'string',
                          'example' => 'r-b1****',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '资源夹创建时间。',
                          'type' => 'string',
                          'example' => '2019-01-18T10:03:35.217Z',
                        ),
                        'FolderName' => 
                        array (
                          'description' => '资源夹名称。',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MissingParameter.ChildId',
            'errorMessage' => 'You must specify ChildId.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.ChildId',
            'errorMessage' => 'The ChildId is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExists.Folder',
            'errorMessage' => 'The resource directory folder does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"83AFBEB6-DC03-406E-9686-867461FF6698\\",\\n  \\"Folders\\": {\\n    \\"Folder\\": [\\n      {\\n        \\"FolderId\\": \\"r-b1****\\",\\n        \\"CreateTime\\": \\"2019-01-18T10:03:35.217Z\\",\\n        \\"FolderName\\": \\"root\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ListAncestorsResponse>\\r\\n    <Folders>\\r\\n      <Folder>\\r\\n        <FolderName>root</FolderName>\\r\\n        <FolderId>r-b1****</FolderId>\\r\\n        <CreateTime>2019-01-18T10:03:35.217Z</CreateTime>\\r\\n      </Folder>\\r\\n      <Folder>\\r\\n        <FolderName>myFirstFd</FolderName>\\r\\n        <FolderId>fd-0adR35****</FolderId>\\r\\n        <CreateTime>2019-01-23T08:48:37.530Z</CreateTime>\\r\\n      </Folder>\\r\\n    </Folders>\\r\\n    <RequestId>83AFBEB6-DC03-406E-9686-867461FF6698</RequestId>\\r\\n</ListAncestorsResponse>","errorExample":""}]',
      'title' => '查看指定资源夹的所有父资源夹信息',
      'summary' => '调用ListAncestors查看指定资源夹的所有父资源夹信息。返回结果将按照从上到下的顺序展示资源夹信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateResourceAccount' => 
    array (
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
          'name' => 'DisplayName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '成员显示名称。

长度范围：2~50个字符或汉字。

格式：允许输入汉字、英文字母、数字、下划线（_）、半角句号（.）、短划线（-）和空格。

成员显示名称在资源目录内必须唯一。',
            'type' => 'string',
            'required' => true,
            'example' => 'Dev',
          ),
        ),
        1 => 
        array (
          'name' => 'ParentFolderId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '父资源夹ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'fd-r23M55****',
          ),
        ),
        2 => 
        array (
          'name' => 'PayerAccountId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结算账号ID。置空则采用新创建的成员自主结算。',
            'type' => 'string',
            'required' => false,
            'example' => '12323344****',
          ),
        ),
        3 => 
        array (
          'name' => 'AccountNamePrefix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号名称前缀。置空则系统随机生成。

<props="china">长度范围：2~50个字符或汉字。</props>

<props="intl">长度范围：2~37个字符。</props>

格式：允许输入英文字母、数字和特殊字符`_.-`，必须以英文字母或数字开头和结尾，且不能输入连续的特殊字符`_.-`。

完整账号名称的格式为<AccountNamePrefix>@<ResourceDirectoryId>.aliyunid.com，例如：`alice@rd-3G****.aliyunid.com`

账号名称在资源目录内必须唯一。


',
            'type' => 'string',
            'required' => false,
            'example' => 'alice',
          ),
        ),
        4 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '成员的标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '成员的标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'k1',
                ),
                'Value' => 
                array (
                  'description' => '标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'v1',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'ResellAccountType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '成员的身份类型。取值：

- resell（默认值）：分销账号。创建的成员将自动与您的分销商建立分销关系，同时您需要使用管理账号为新成员付款。
- non_resell ：非分销账号。创建的成员为阿里云普通账号，与您当前的分销商无关联关系，该账号直接从阿里云购买资源，需自主付款。

> 该参数仅支持国际站分销客户。',
            'type' => 'string',
            'required' => false,
            'example' => 'resell',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'Account' => 
              array (
                'description' => '成员信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '成员加入状态。取值为CreateSuccess，表示创建成功。',
                    'type' => 'string',
                    'example' => 'CreateSuccess',
                  ),
                  'Type' => 
                  array (
                    'description' => '成员类型。取值为ResourceAccount，表示资源账号。',
                    'type' => 'string',
                    'example' => 'ResourceAccount',
                  ),
                  'DisplayName' => 
                  array (
                    'description' => '成员显示名称。',
                    'type' => 'string',
                    'example' => 'Dev',
                  ),
                  'FolderId' => 
                  array (
                    'description' => '资源夹ID。',
                    'type' => 'string',
                    'example' => 'fd-r23M55****',
                  ),
                  'ResourceDirectoryId' => 
                  array (
                    'description' => '资源目录ID。',
                    'type' => 'string',
                    'example' => 'rd-3G****',
                  ),
                  'JoinTime' => 
                  array (
                    'description' => '成员加入时间（UTC时间）。',
                    'type' => 'string',
                    'example' => '2020-12-31T03:37:39.456Z',
                  ),
                  'AccountId' => 
                  array (
                    'description' => '成员ID。',
                    'type' => 'string',
                    'example' => '112730938585****',
                  ),
                  'JoinMethod' => 
                  array (
                    'description' => '成员加入方式。取值：

- invited：邀请。
- created：创建。',
                    'type' => 'string',
                    'example' => 'created',
                  ),
                  'ModifyTime' => 
                  array (
                    'description' => '成员修改时间（UTC时间）。',
                    'type' => 'string',
                    'example' => '2020-12-31T03:37:39.456Z',
                  ),
                  'AccountName' => 
                  array (
                    'description' => '账号名称。',
                    'type' => 'string',
                    'example' => 'alice@rd-3g****.aliyunid.com',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B356A415-D860-43E5-865A-E2193D62BBD6',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MissingParameter.Account.DisplayName',
            'errorMessage' => 'You must specify DisplayName.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Account.DisplayName',
            'errorMessage' => 'The DisplayName of account is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.Account.DisplayName.Length',
            'errorMessage' => 'The DisplayName of the account exceeds the length limit.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.ParentFolderId',
            'errorMessage' => 'The ParentFolderId is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.Account.AccountNamePrefix',
            'errorMessage' => 'The account name prefix is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameter.Account.AccountNamePrefix.Length',
            'errorMessage' => 'The account name prefix exceeds the length limit.',
          ),
          6 => 
          array (
            'errorCode' => 'NotSupport.Site.Action',
            'errorMessage' => 'Site does not allow current action.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExists.Folder',
            'errorMessage' => 'The resource directory folder does not exist.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'LimitExceeded.Account',
            'errorMessage' => 'The maximum number of member accounts in a resource directory exceeds the limit.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Account.DisplayName.AlreadyUsed',
            'errorMessage' => 'The displayname of account has been used.',
          ),
          2 => 
          array (
            'errorCode' => 'EntityAlreadyExists.ResourceDirectory.Account',
            'errorMessage' => 'The email address that the system generates when you create a member account already exists. Try again later.',
          ),
          3 => 
          array (
            'errorCode' => 'Invalid.PayRelation',
            'errorMessage' => 'Failed to create a member. The specified billing account is unavailable. Please change to another billing account and try again.',
          ),
          4 => 
          array (
            'errorCode' => 'NotSupport.PayerAccountInAnotherResourceDirectory',
            'errorMessage' => 'The specified settlement account does not exist in the resource directory. You must specify a valid settlement account.',
          ),
          5 => 
          array (
            'errorCode' => 'CreateAccountDisabled',
            'errorMessage' => 'The specified resource directory cannot create a new account.',
          ),
          6 => 
          array (
            'errorCode' => 'PaymentAccountEnterpriseVerifyError',
            'errorMessage' => 'The type of the payment account is not enterprise verified.',
          ),
          7 => 
          array (
            'errorCode' => 'PaymentAccountFinancialRelationshipVerifyError',
            'errorMessage' => 'The payment account must not be the beneficiary account from other financial relationships.',
          ),
          8 => 
          array (
            'errorCode' => 'PaymentAccountEnterpriseTypeError',
            'errorMessage' => 'The type of the payment account is not enterprise.',
          ),
          9 => 
          array (
            'errorCode' => 'PaymentAccountFinancialRelationshipsChangeFrequencyVerifyError',
            'errorMessage' => 'The financial relationship of payment account changes too frequently. Please try again later.',
          ),
          10 => 
          array (
            'errorCode' => 'MemberAccountVirtualCloudOperatorVerifyError',
            'errorMessage' => 'The type of the member account must not be virtual operator.',
          ),
          11 => 
          array (
            'errorCode' => 'MemberAccountResellerVerifyError',
            'errorMessage' => 'The type of the member account must not be reseller.',
          ),
          12 => 
          array (
            'errorCode' => 'PaymentAccountVirtualCloudOperatorVerifyError',
            'errorMessage' => 'The type of the payment account must not be virtual operator.',
          ),
          13 => 
          array (
            'errorCode' => 'PaymentAccountResellerVerifyError',
            'errorMessage' => 'The type of the payment account must not be reseller.',
          ),
          14 => 
          array (
            'errorCode' => 'InconsistentEnterpriseNameError',
            'errorMessage' => 'The enterprise name of the payment account and the member account must be consistent.',
          ),
          15 => 
          array (
            'errorCode' => 'PaymentAccountEnterpriseInvoiceError',
            'errorMessage' => 'No enterprise invoice header information is set for the payment account.',
          ),
          16 => 
          array (
            'errorCode' => 'UnknownFinancialError',
            'errorMessage' => 'An unknown financial error occurred.',
          ),
          17 => 
          array (
            'errorCode' => 'BusinessRestricted',
            'errorMessage' => 'Business is restricted. Please contact your customer service manager.',
          ),
          18 => 
          array (
            'errorCode' => 'PaymentAccountCreditIdentityTypeError',
            'errorMessage' => 'Non-credit identity type or insufficient credit limit, cannot be used as payment account.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Account\\": {\\n    \\"Status\\": \\"CreateSuccess\\",\\n    \\"Type\\": \\"ResourceAccount\\",\\n    \\"DisplayName\\": \\"Dev\\",\\n    \\"FolderId\\": \\"fd-r23M55****\\",\\n    \\"ResourceDirectoryId\\": \\"rd-3G****\\",\\n    \\"JoinTime\\": \\"2020-12-31T03:37:39.456Z\\",\\n    \\"AccountId\\": \\"112730938585****\\",\\n    \\"JoinMethod\\": \\"created\\",\\n    \\"ModifyTime\\": \\"2020-12-31T03:37:39.456Z\\",\\n    \\"AccountName\\": \\"alice@rd-3g****.aliyunid.com\\"\\n  },\\n  \\"RequestId\\": \\"B356A415-D860-43E5-865A-E2193D62BBD6\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateResourceAccountResponse>\\n    <Account>\\n        <Status>CreateSuccess</Status>\\n        <Type>ResourceAccount</Type>\\n        <DisplayName>Dev</DisplayName>\\n        <FolderId>fd-r23M55****</FolderId>\\n        <ResourceDirectoryId>rd-3G****</ResourceDirectoryId>\\n        <JoinTime>2020-12-31T03:37:39.456Z</JoinTime>\\n        <AccountId>112730938585****</AccountId>\\n        <JoinMethod>created</JoinMethod>\\n        <ModifyTime>2020-12-31T03:37:39.456Z</ModifyTime>\\n        <AccountName>alice@rd-3g****.aliyunid.com</AccountName>\\n    </Account>\\n    <RequestId>B356A415-D860-43E5-865A-E2193D62BBD6</RequestId>\\n</CreateResourceAccountResponse>","errorExample":""}]',
      'title' => '创建资源账号类型的成员',
      'summary' => '调用CreateResourceAccount创建资源账号类型的成员。',
      'description' => '在资源目录内，成员作为资源容器，是一种资源分组单位。成员通常用于指代一个项目或应用，每个成员中的资源相对其他成员中的资源是物理隔离的。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateAccount' => 
    array (
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
          'name' => 'NewDisplayName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新的成员名称。
> `NewDisplayName`与`NewAccountType`任选其一设置，不能同时设置。',
            'type' => 'string',
            'required' => false,
            'example' => 'admin',
          ),
        ),
        1 => 
        array (
          'name' => 'NewAccountType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新的成员类型。取值：

- ResourceAccount：将指定的云账号切换为资源账号。
- CloudAccount：将指定的资源账号切换为云账号。

> `NewDisplayName`与`NewAccountType`任选其一设置，不能同时设置。',
            'type' => 'string',
            'required' => false,
            'example' => 'ResourceAccount',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '成员ID。',
            'type' => 'string',
            'required' => true,
            'example' => '12323344****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'Account' => 
              array (
                'description' => '成员信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '成员加入状态。取值：

- CreateSuccess：创建成功。
- InviteSuccess：邀请成功。
- Removed：已移除。
- SwitchSuccess：切换成功。',
                    'type' => 'string',
                    'example' => 'CreateSuccess',
                  ),
                  'Type' => 
                  array (
                    'description' => '成员类型。取值：

- CloudAccount：云账号。
- ResourceAccount：资源账号。',
                    'type' => 'string',
                    'example' => 'ResourceAccount',
                  ),
                  'DisplayName' => 
                  array (
                    'description' => '成员名称。',
                    'type' => 'string',
                    'example' => 'admin',
                  ),
                  'FolderId' => 
                  array (
                    'description' => '资源夹ID。',
                    'type' => 'string',
                    'example' => 'fd-bVaRIG****',
                  ),
                  'ResourceDirectoryId' => 
                  array (
                    'description' => '资源目录ID。',
                    'type' => 'string',
                    'example' => 'rd-k3****',
                  ),
                  'JoinTime' => 
                  array (
                    'description' => '成员加入时间（UTC时间）。',
                    'type' => 'string',
                    'example' => '2015-01-23T12:33:18Z',
                  ),
                  'AccountId' => 
                  array (
                    'description' => '成员ID。',
                    'type' => 'string',
                    'example' => '12323344****',
                  ),
                  'JoinMethod' => 
                  array (
                    'description' => '成员加入方式。取值：

- invited：邀请。
- created：创建。',
                    'type' => 'string',
                    'example' => 'created',
                  ),
                  'ModifyTime' => 
                  array (
                    'description' => '成员修改时间（UTC时间）。',
                    'type' => 'string',
                    'example' => '2015-01-23T12:33:18Z',
                  ),
                  'AccountName' => 
                  array (
                    'description' => '阿里云账号名称。',
                    'type' => 'string',
                    'example' => 'ecs-manager@aliyun.com',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
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
            'errorCode' => 'EntityNotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExists.Account',
            'errorMessage' => 'This resource directory account does not exist.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.Account.DisplayName.AlreadyUsed',
            'errorMessage' => 'The displayname of account has been used.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingDisplayNameOrAccountType',
            'errorMessage' => 'Either display name or account type must be specified.',
          ),
          2 => 
          array (
            'errorCode' => 'AccountTypeMismatch',
            'errorMessage' => 'The type or status of the member account cannot satisfy the current operation.',
          ),
          3 => 
          array (
            'errorCode' => 'LegalEntityDifferent',
            'errorMessage' => 'The account legal entity is different from the one of the Management Account.',
          ),
          4 => 
          array (
            'errorCode' => 'CallerIdentityError',
            'errorMessage' => 'Please use the RAM user or role of the Management Account.',
          ),
          5 => 
          array (
            'errorCode' => 'MissingSecurityInfo',
            'errorMessage' => 'The current member is not configured with a secure email or mobile phone, and the switchover fails.',
          ),
          6 => 
          array (
            'errorCode' => 'PrimaryAkInUse',
            'errorMessage' => 'The root user has an AccessKey pair in use.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Account\\": {\\n    \\"Status\\": \\"CreateSuccess\\",\\n    \\"Type\\": \\"ResourceAccount\\",\\n    \\"DisplayName\\": \\"admin\\",\\n    \\"FolderId\\": \\"fd-bVaRIG****\\",\\n    \\"ResourceDirectoryId\\": \\"rd-k3****\\",\\n    \\"JoinTime\\": \\"2015-01-23T12:33:18Z\\",\\n    \\"AccountId\\": \\"12323344****\\",\\n    \\"JoinMethod\\": \\"created\\",\\n    \\"ModifyTime\\": \\"2015-01-23T12:33:18Z\\",\\n    \\"AccountName\\": \\"ecs-manager@aliyun.com\\"\\n  },\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<UpdateAccountResponse>\\r\\n    <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\r\\n    <Account>\\r\\n        <ResourceDirectoryId>rd-k3****</ResourceDirectoryId>\\r\\n        <AccountId>12323344****</AccountId>\\r\\n        <DisplayName>admin</DisplayName>\\r\\n        <FolderId>fd-bVaRIG****</FolderId>\\r\\n        <JoinMethod>created</JoinMethod>\\r\\n        <JoinTime>2015-01-23T12:33:18Z</JoinTime>\\r\\n        <Type>ResourceAccount</Type>\\r\\n        <Status>CreateSuccess</Status>\\r\\n        <RecordId>06950264-3f0d-4ca9-82dd-6ee7a3d33d6b</RecordId>\\r\\n        <ModifyTime>2015-01-23T12:33:18Z</ModifyTime>\\r\\n    </Account>\\r\\n</UpdateAccountResponse>","errorExample":""}]',
      'title' => '修改成员信息',
      'summary' => '调用UpdateAccount修改成员名称或切换成员类型。',
      'description' => '### 前提条件

- 为确保系统可以记录到管理操作的具体操作者，请使用管理账号下具有资源目录管理权限（AliyunResourceDirectoryFullAccess）的RAM用户或RAM角色调用本API。
- 资源账号切换为云账号时需要满足的条件，请参见[资源账号切换为云账号](~~111233~~)。
- 云账号切换为资源账号时需要满足的条件，请参见[云账号切换为资源账号](~~209980~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetAccount' => 
    array (
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AccountId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '成员ID。',
            'type' => 'string',
            'required' => true,
            'example' => '181761095690****',
          ),
        ),
        1 => 
        array (
          'name' => 'IncludeTags',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回标签信息。取值：

- false（默认值）：不返回。
- true：返回。',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'Account' => 
              array (
                'description' => '成员信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '成员加入状态。取值：

- CreateSuccess：创建成功。
- PromoteVerifying：升级确认中。
- PromoteFailed：升级失败。
- PromoteExpired：升级过期。
- PromoteCancelled：升级取消。
- PromoteSuccess：升级成功。
- InviteSuccess：邀请成功。',
                    'type' => 'string',
                    'example' => 'CreateSuccess',
                  ),
                  'Type' => 
                  array (
                    'description' => '成员类型。取值：

- CloudAccount：云账号。
- ResourceAccount：资源账号。',
                    'type' => 'string',
                    'example' => 'ResourceAccount',
                  ),
                  'DisplayName' => 
                  array (
                    'description' => '成员名称。',
                    'type' => 'string',
                    'example' => 'admin',
                  ),
                  'FolderId' => 
                  array (
                    'description' => '资源夹ID。',
                    'type' => 'string',
                    'example' => 'fd-bVaRIG****',
                  ),
                  'ResourceDirectoryId' => 
                  array (
                    'description' => '资源目录ID。',
                    'type' => 'string',
                    'example' => 'rd-k3****',
                  ),
                  'IdentityInformation' => 
                  array (
                    'description' => '实名认证信息。',
                    'type' => 'string',
                    'example' => 'aliyun-admin',
                  ),
                  'JoinTime' => 
                  array (
                    'description' => '成员加入时间。',
                    'type' => 'string',
                    'example' => '2015-01-23T12:33:18Z',
                  ),
                  'AccountId' => 
                  array (
                    'description' => '成员ID。',
                    'type' => 'string',
                    'example' => '181761095690****',
                  ),
                  'JoinMethod' => 
                  array (
                    'description' => '成员加入方式。取值：

- invited：邀请。
- created：创建。',
                    'type' => 'string',
                    'example' => 'created',
                  ),
                  'ModifyTime' => 
                  array (
                    'description' => '成员修改时间。',
                    'type' => 'string',
                    'example' => '2015-01-23T12:33:18Z',
                  ),
                  'AccountName' => 
                  array (
                    'description' => '账号名称。',
                    'type' => 'string',
                    'example' => 'someone@example.com',
                  ),
                  'ResourceDirectoryPath' => 
                  array (
                    'description' => '成员在资源目录中的路径ID（RDPath）。',
                    'type' => 'string',
                    'example' => 'rd-k3****/r-Wm****/fd-bVaRIG****/181761095690****',
                  ),
                  'Tags' => 
                  array (
                    'description' => '标签。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '标签列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Key' => 
                        array (
                          'description' => '标签键。',
                          'type' => 'string',
                          'example' => 'tag_key',
                        ),
                        'Value' => 
                        array (
                          'description' => '标签值。',
                          'type' => 'string',
                          'example' => 'tag_value',
                        ),
                      ),
                    ),
                  ),
                  'Location' => 
                  array (
                    'description' => '成员所在资源目录的位置。',
                    'type' => 'string',
                    'example' => 'root/AlRd****/Z5Aa****',
                  ),
                  'EmailStatus' => 
                  array (
                    'description' => '邮箱状态。取值：

- 空：不存在邮箱修改记录。
- WAIT_MODIFY：正在修改中。
- CANCELLED：修改取消。
- EXPIRED：修改过期。',
                    'type' => 'string',
                    'example' => 'WAIT_MODIFY',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MissingParameter.AccountId',
            'errorMessage' => 'You must specify AccountId.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.AccountId',
            'errorMessage' => 'The AccountId is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.Account',
            'errorMessage' => 'This resource directory account does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Account\\": {\\n    \\"Status\\": \\"CreateSuccess\\",\\n    \\"Type\\": \\"ResourceAccount\\",\\n    \\"DisplayName\\": \\"admin\\",\\n    \\"FolderId\\": \\"fd-bVaRIG****\\",\\n    \\"ResourceDirectoryId\\": \\"rd-k3****\\",\\n    \\"IdentityInformation\\": \\"aliyun-admin\\",\\n    \\"JoinTime\\": \\"2015-01-23T12:33:18Z\\",\\n    \\"AccountId\\": \\"181761095690****\\",\\n    \\"JoinMethod\\": \\"created\\",\\n    \\"ModifyTime\\": \\"2015-01-23T12:33:18Z\\",\\n    \\"AccountName\\": \\"someone@example.com\\",\\n    \\"ResourceDirectoryPath\\": \\"rd-k3****/r-Wm****/fd-bVaRIG****/181761095690****\\",\\n    \\"Tags\\": [\\n      {\\n        \\"Key\\": \\"tag_key\\",\\n        \\"Value\\": \\"tag_value\\"\\n      }\\n    ],\\n    \\"Location\\": \\"root/AlRd****/Z5Aa****\\",\\n    \\"EmailStatus\\": \\"WAIT_MODIFY\\"\\n  },\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\"\\n}","errorExample":""},{"type":"xml","example":"<GetAccountResponse>\\n    <Account>\\n        <Status>CreateSuccess</Status>\\n        <Type>ResourceAccount</Type>\\n        <DisplayName>admin</DisplayName>\\n        <FolderId>fd-bVaRIG****</FolderId>\\n        <ResourceDirectoryId>rd-k3****</ResourceDirectoryId>\\n        <IdentityInformation>aliyun-admin</IdentityInformation>\\n        <JoinTime>2015-01-23T12:33:18Z</JoinTime>\\n        <AccountId>181761095690****</AccountId>\\n        <JoinMethod>created</JoinMethod>\\n        <ModifyTime>2015-01-23T12:33:18Z</ModifyTime>\\n        <AccountName>someone@example.com</AccountName>\\n        <ResourceDirectoryPath>rd-k3****/r-Wm****/fd-bVaRIG****/181761095690****</ResourceDirectoryPath>\\n        <Tags>\\n            <Key>tag_key</Key>\\n            <Value>tag_value</Value>\\n        </Tags>\\n        <Location>root/AlRd****/Z5Aa****</Location>\\n        <EmailStatus>WAIT_MODIFY</EmailStatus>\\n    </Account>\\n    <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\n</GetAccountResponse>","errorExample":""}]',
      'title' => '获取成员信息',
      'summary' => '调用GetAccount获取成员信息。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetPayerForAccount' => 
    array (
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AccountId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '成员账号ID。',
            'type' => 'string',
            'required' => true,
            'example' => '12323344****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'PayerAccountName' => 
              array (
                'description' => '结算账号名称。',
                'type' => 'string',
                'example' => 'Alice',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
              ),
              'PayerAccountId' => 
              array (
                'description' => '结算账号ID。',
                'type' => 'string',
                'example' => '172841235500****',
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
            'errorCode' => 'EntityNotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExists.Account',
            'errorMessage' => 'This resource directory account does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PayerAccountName\\": \\"Alice\\",\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\",\\n  \\"PayerAccountId\\": \\"172841235500****\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<GetPayerForAccountResponse>\\r\\n\\t<RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\r\\n\\t<PayerAccountId>172841235500****</PayerAccountId>\\r\\n\\t<PayerAccountName>Alice</PayerAccountName>\\r\\n</GetPayerForAccountResponse>\\t\\r\\n","errorExample":""}]',
      'title' => '获取结算账号信息',
      'summary' => '调用GetPayerForAccount获取成员的结算账号信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListAccounts' => 
    array (
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
            'description' => '页码。

起始值：1。默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
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
            'description' => '分页时每页显示的数据行数。

取值范围：1~100。默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '通过标签过滤。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '过滤的标签列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'tag_key',
                ),
                'Value' => 
                array (
                  'description' => '标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'tag_value',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'IncludeTags',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回标签信息。取值：
- false（默认值）：不返回。
- true：返回。',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '数据总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7B8A4E7D-6CFF-471D-84DF-195A7A241ECB',
              ),
              'PageSize' => 
              array (
                'description' => '分页时每页显示的数据行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '5',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Accounts' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Account' => 
                  array (
                    'description' => '成员列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '成员列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '成员加入状态。取值：

- CreateSuccess：创建成功。
- PromoteVerifying：升级确认中。
- PromoteFailed：升级失败。
- PromoteExpired：升级过期。
- PromoteCancelled：升级取消。
- PromoteSuccess：升级成功。
- InviteSuccess：邀请成功。',
                          'type' => 'string',
                          'example' => 'CreateSuccess',
                        ),
                        'Type' => 
                        array (
                          'description' => '成员类型。取值：

- CloudAccount：云账号。
- ResourceAccount：资源账号。',
                          'type' => 'string',
                          'example' => 'ResourceAccount',
                        ),
                        'DisplayName' => 
                        array (
                          'description' => '成员名称。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'FolderId' => 
                        array (
                          'description' => '资源夹ID。',
                          'type' => 'string',
                          'example' => 'fd-QRzuim****',
                        ),
                        'ResourceDirectoryId' => 
                        array (
                          'description' => '资源目录ID。',
                          'type' => 'string',
                          'example' => 'rd-3G****',
                        ),
                        'JoinTime' => 
                        array (
                          'description' => '成员加入时间（UTC时间）。',
                          'type' => 'string',
                          'example' => '2021-01-18T08:01:50.522Z',
                        ),
                        'AccountId' => 
                        array (
                          'description' => '成员账号ID。',
                          'type' => 'string',
                          'example' => '181761095690****',
                        ),
                        'JoinMethod' => 
                        array (
                          'description' => '成员加入方式。取值：

- invited：邀请。
- created：创建。',
                          'type' => 'string',
                          'example' => 'created',
                        ),
                        'ModifyTime' => 
                        array (
                          'description' => '成员修改时间（UTC时间）。',
                          'type' => 'string',
                          'example' => '2021-01-18T08:04:37.668Z',
                        ),
                        'ResourceDirectoryPath' => 
                        array (
                          'description' => '成员在资源目录中的路径ID（RDPath）。',
                          'type' => 'string',
                          'example' => 'rd-3G****/r-Wm****/fd-QRzuim****/181761095690****',
                        ),
                        'Tags' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Tag' => 
                            array (
                              'description' => '成员所有的标签。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '成员所有的标签列表。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Key' => 
                                  array (
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'example' => 'tag_key',
                                  ),
                                  'Value' => 
                                  array (
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'example' => 'tag_value',
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
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 2,\\n  \\"RequestId\\": \\"7B8A4E7D-6CFF-471D-84DF-195A7A241ECB\\",\\n  \\"PageSize\\": 5,\\n  \\"PageNumber\\": 1,\\n  \\"Accounts\\": {\\n    \\"Account\\": [\\n      {\\n        \\"Status\\": \\"CreateSuccess\\",\\n        \\"Type\\": \\"ResourceAccount\\",\\n        \\"DisplayName\\": \\"test\\",\\n        \\"FolderId\\": \\"fd-QRzuim****\\",\\n        \\"ResourceDirectoryId\\": \\"rd-3G****\\",\\n        \\"JoinTime\\": \\"2021-01-18T08:01:50.522Z\\",\\n        \\"AccountId\\": \\"181761095690****\\",\\n        \\"JoinMethod\\": \\"created\\",\\n        \\"ModifyTime\\": \\"2021-01-18T08:04:37.668Z\\",\\n        \\"ResourceDirectoryPath\\": \\"rd-3G****/r-Wm****/fd-QRzuim****/181761095690****\\",\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"Key\\": \\"tag_key\\",\\n              \\"Value\\": \\"tag_value\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListAccountsResponse>\\n    <TotalCount>2</TotalCount>\\n    <RequestId>7B8A4E7D-6CFF-471D-84DF-195A7A241ECB</RequestId>\\n    <PageSize>1</PageSize>\\n    <PageNumber>2</PageNumber>\\n    <Accounts>\\n        <Status>CreateSuccess</Status>\\n        <Type>ResourceAccount</Type>\\n        <DisplayName>test</DisplayName>\\n        <FolderId>fd-QRzuim****</FolderId>\\n        <ResourceDirectoryId>rd-3G****</ResourceDirectoryId>\\n        <JoinTime>2021-01-18T08:01:50.522Z</JoinTime>\\n        <AccountId>181761095690****</AccountId>\\n        <JoinMethod>created</JoinMethod>\\n        <ModifyTime>2021-01-18T08:04:37.668Z</ModifyTime>\\n        <ResourceDirectoryPath>rd-3G****/r-Wm****/fd-QRzuim****/181761095690****</ResourceDirectoryPath>\\n        <Tags>\\n            <Key>tag_key</Key>\\n            <Value>tag_value</Value>\\n        </Tags>\\n    </Accounts>\\n</ListAccountsResponse>","errorExample":""}]',
      'title' => '查看整个资源目录下的成员信息',
      'summary' => '调用ListAccounts查询整个资源目录下的所有成员列表。',
      'description' => '资源目录的管理账号和可信服务的委派管理员账号可以调用该接口。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListAccountsForParent' => 
    array (
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ParentFolderId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源夹ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'fd-bVaRIG****',
          ),
        ),
        1 => 
        array (
          'name' => 'QueryKeyword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询关键字，例如：成员名称。

支持模糊查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'admin',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。

起始值：1。默认值：1。',
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
            'description' => '分页时每页显示的数据行数。

取值范围：1~100。默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '通过标签过滤。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '过滤的标签列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'tag_key',
                ),
                'Value' => 
                array (
                  'description' => '标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'tag_value',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'IncludeTags',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回标签信息。取值：

- false（默认值）：不返回。
- true：返回。',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '数据总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7B8A4E7D-6CFF-471D-84DF-195A7A241ECB',
              ),
              'PageSize' => 
              array (
                'description' => '分页时每页显示的数据行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '5',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Accounts' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Account' => 
                  array (
                    'description' => '成员信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '成员信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '成员加入状态。取值：

- CreateSuccess：创建成功。
- PromoteVerifying：升级确认中。
- PromoteFailed：升级失败。
- PromoteExpired：升级过期。
- PromoteCancelled：升级取消。
- PromoteSuccess：升级成功。
- InviteSuccess：邀请成功。',
                          'type' => 'string',
                          'example' => 'CreateSuccess',
                        ),
                        'Type' => 
                        array (
                          'description' => '成员类型。取值：

- CloudAccount：云账号。
- ResourceAccount：资源账号。',
                          'type' => 'string',
                          'example' => 'ResourceAccount',
                        ),
                        'DisplayName' => 
                        array (
                          'description' => '成员名称。',
                          'type' => 'string',
                          'example' => 'admin',
                        ),
                        'FolderId' => 
                        array (
                          'description' => '资源夹ID。',
                          'type' => 'string',
                          'example' => 'fd-bVaRIG****',
                        ),
                        'ResourceDirectoryId' => 
                        array (
                          'description' => '资源目录ID。',
                          'type' => 'string',
                          'example' => 'rd-k4****',
                        ),
                        'JoinTime' => 
                        array (
                          'description' => '成员加入时间（UTC时间）。',
                          'type' => 'string',
                          'example' => '2015-01-23T12:33:18Z',
                        ),
                        'AccountId' => 
                        array (
                          'description' => '成员账号ID。',
                          'type' => 'string',
                          'example' => '184311716100****',
                        ),
                        'JoinMethod' => 
                        array (
                          'description' => '成员加入方式。取值：

- invited：邀请。
- created：创建。',
                          'type' => 'string',
                          'example' => 'created',
                        ),
                        'ModifyTime' => 
                        array (
                          'description' => '成员修改时间（UTC时间）。',
                          'type' => 'string',
                          'example' => '2015-01-23T12:33:18Z',
                        ),
                        'Tags' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Tag' => 
                            array (
                              'description' => '成员所有的标签。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '成员标签列表。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Key' => 
                                  array (
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'example' => 'tag_key',
                                  ),
                                  'Value' => 
                                  array (
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'example' => 'tag_value',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.ParentFolderId',
            'errorMessage' => 'The ParentFolderId is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExists.Folder',
            'errorMessage' => 'The resource directory folder does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 2,\\n  \\"RequestId\\": \\"7B8A4E7D-6CFF-471D-84DF-195A7A241ECB\\",\\n  \\"PageSize\\": 5,\\n  \\"PageNumber\\": 1,\\n  \\"Accounts\\": {\\n    \\"Account\\": [\\n      {\\n        \\"Status\\": \\"CreateSuccess\\",\\n        \\"Type\\": \\"ResourceAccount\\",\\n        \\"DisplayName\\": \\"admin\\",\\n        \\"FolderId\\": \\"fd-bVaRIG****\\",\\n        \\"ResourceDirectoryId\\": \\"rd-k4****\\",\\n        \\"JoinTime\\": \\"2015-01-23T12:33:18Z\\",\\n        \\"AccountId\\": \\"184311716100****\\",\\n        \\"JoinMethod\\": \\"created\\",\\n        \\"ModifyTime\\": \\"2015-01-23T12:33:18Z\\",\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"Key\\": \\"tag_key\\",\\n              \\"Value\\": \\"tag_value\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListAccountsForParentResponse>\\n    <TotalCount>2</TotalCount>\\n    <RequestId>7B8A4E7D-6CFF-471D-84DF-195A7A241ECB</RequestId>\\n    <PageSize>1</PageSize>\\n    <PageNumber>2</PageNumber>\\n    <Accounts>\\n        <Status>CreateSuccess</Status>\\n        <Type>ResourceAccount</Type>\\n        <DisplayName>admin</DisplayName>\\n        <FolderId>fd-bVaRIG****</FolderId>\\n        <ResourceDirectoryId>rd-k4****</ResourceDirectoryId>\\n        <JoinTime>2015-01-23T12:33:18Z</JoinTime>\\n        <AccountId>184311716100****</AccountId>\\n        <JoinMethod>created</JoinMethod>\\n        <ModifyTime>2015-01-23T12:33:18Z</ModifyTime>\\n        <Tags>\\n            <Key>tag_key</Key>\\n            <Value>tag_value</Value>\\n        </Tags>\\n    </Accounts>\\n</ListAccountsForParentResponse>","errorExample":""}]',
      'title' => '查看资源夹下的成员列表',
      'summary' => '调用ListAccountsForParent查询资源夹下的成员列表。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'MoveAccount' => 
    array (
      'summary' => '调用MoveAccount将成员移动到另一个资源夹。',
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
          'name' => 'AccountId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要移动的账号ID。',
            'type' => 'string',
            'required' => true,
            'example' => '12323344****',
          ),
        ),
        1 => 
        array (
          'name' => 'DestinationFolderId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标资源夹ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'fd-bVaRIG****',
          ),
        ),
      ),
      'responses' => 
      array (
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
                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MissingParameter.AccountId',
            'errorMessage' => 'You must specify AccountId.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.AccountId',
            'errorMessage' => 'The AccountId is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingParameter.DestinationFolderId',
            'errorMessage' => 'You must specify DestinationFolderId.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.DestinationFolderId',
            'errorMessage' => 'The DestinationFolderId is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.Account',
            'errorMessage' => 'This resource directory account does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
          ),
          2 => 
          array (
            'errorCode' => 'EntityNotExists.Folder',
            'errorMessage' => 'The resource directory folder does not exist.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccountTypeOrStatusMismatch',
            'errorMessage' => 'You cannot perform the action on the member account.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<MoveAccountResponse>\\r\\n  <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\r\\n</MoveAccountResponse>","errorExample":""}]',
      'title' => '将成员移动到另一个资源夹',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RemoveCloudAccount' => 
    array (
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
          'name' => 'AccountId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '成员ID。',
            'type' => 'string',
            'required' => true,
            'example' => '177242285274****',
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
                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MissingParameter.AccountId',
            'errorMessage' => 'You must specify AccountId.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.AccountId',
            'errorMessage' => 'The AccountId is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.Account',
            'errorMessage' => 'This resource directory account does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccountTypeOrStatusMismatch',
            'errorMessage' => 'You cannot perform the action on the member account.',
          ),
          1 => 
          array (
            'errorCode' => 'Deny.TrustedService',
            'errorMessage' => 'You attempted to remove an account that is used in %s. To complete this operation, you must first remove this account from the Trusted Service.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<RemoveCloudAccountResponse>\\r\\n  <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\r\\n</RemoveCloudAccountResponse>","errorExample":""}]',
      'title' => '移除云账号类型的成员',
      'summary' => '调用RemoveCloudAccount移除云账号类型的成员。移除后，该成员将作为独立的阿里云账号存在，不再被资源目录的管理账号管控。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'BindSecureMobilePhone' => 
    array (
      'summary' => '调用BindSecureMobilePhone为资源账号类型的成员设置安全手机号码。',
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
          'name' => 'VerificationCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '验证码。

您可以调用[SendVerificationCodeForBindSecureMobilePhone](~~372556~~)获取验证码。',
            'type' => 'string',
            'required' => true,
            'example' => '123456',
          ),
        ),
        1 => 
        array (
          'name' => 'SecureMobilePhone',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全手机号码。

该手机号码必须与[SendVerificationCodeForBindSecureMobilePhone](~~372556~~)中获取验证码时设置的手机号码一致。

格式：<国家码>-<手机号码>。

<props="china">
> 仅支持填写`86-<手机号码>`的中国内地手机号码。</props>


<props="intl">
> 不支持填写`86-<手机号码>`的中国内地手机号码。</props>',
            'type' => 'string',
            'required' => true,
            'example' => 'xx-13900001234',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '成员ID。',
            'type' => 'string',
            'required' => true,
            'example' => '138660628348****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0217AFEB-5318-56D4-B167-1933D83EDF3F',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'NotSupport.Site.Action',
            'errorMessage' => 'Site does not allow current action.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'NotSupport.AccountInAnotherResourceDirectory',
            'errorMessage' => 'The specified account is an Alibaba Cloud account or already exists in another resource directory.',
          ),
          1 => 
          array (
            'errorCode' => 'Invalid.EnterpriseName',
            'errorMessage' => 'You must specify the enterprise name.',
          ),
          2 => 
          array (
            'errorCode' => 'EnterpriseRealNameVerificationError',
            'errorMessage' => 'The specified account does not pass enterprise real-name verification. We recommend you first complete enterprise real-name verification for the account.',
          ),
          3 => 
          array (
            'errorCode' => 'EntityAlreadyExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is already enabled. We recommend that you do not enable the resource directory again.',
          ),
          4 => 
          array (
            'errorCode' => 'Invalid.VerificationCode',
            'errorMessage' => 'The verification code is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'AccountTypeMismatch',
            'errorMessage' => 'The type or status of the member account cannot satisfy the current operation.',
          ),
          6 => 
          array (
            'errorCode' => 'AccountSecureMobileAlreadyExists',
            'errorMessage' => 'The secure mobile number of the member already exists.',
          ),
          7 => 
          array (
            'errorCode' => 'CallerIdentityError',
            'errorMessage' => 'Please use the RAM user or role of the Management Account.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0217AFEB-5318-56D4-B167-1933D83EDF3F\\"\\n}","errorExample":""},{"type":"xml","example":"<BindSecureMobilePhoneResponse>\\n    <RequestId>0217AFEB-5318-56D4-B167-1933D83EDF3F</RequestId>\\n</BindSecureMobilePhoneResponse>","errorExample":""}]',
      'title' => '设置安全手机号码',
      'description' => '本API仅用于首次设置资源账号安全手机号码，不能用于修改已有的安全手机号码。

为确保系统可以记录到管理操作的具体操作者，请使用管理账号下具有资源目录管理权限（AliyunResourceDirectoryFullAccess）的RAM用户或RAM角色调用本API。

本文将提供一个示例，为成员`138660628348****`设置安全手机号码。',
    ),
    'SendVerificationCodeForBindSecureMobilePhone' => 
    array (
      'summary' => '为资源账号类型的成员设置安全手机号码时，调用SendVerificationCodeForBindSecureMobilePhone向安全手机发送验证码。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SecureMobilePhone',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全手机号码。

格式：<国家码>-<手机号码>。

<props="china">
> 仅支持填写`86-<手机号码>`的中国内地手机号码。</props>


<props="intl">
> 不支持填写`86-<手机号码>`的中国内地手机号码。</props>
',
            'type' => 'string',
            'required' => true,
            'example' => 'xx-13900001234',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '成员的账号ID。',
            'type' => 'string',
            'required' => true,
            'example' => '138660628348****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DCD43660-75DD-5D15-B342-1B83FCA5B913',
              ),
              'ExpirationDate' => 
              array (
                'description' => '验证码过期时间。',
                'type' => 'string',
                'example' => '2021-12-17T07:38:41.747Z',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'NotSupport.AccountInAnotherResourceDirectory',
            'errorMessage' => 'The specified account is an Alibaba Cloud account or already exists in another resource directory.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityAlreadyExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is already enabled. We recommend that you do not enable the resource directory again.',
          ),
          2 => 
          array (
            'errorCode' => 'SendValidateCodeExceedsLimitForAccount',
            'errorMessage' => 'For the same account, the number of verification codes sent exceeds the limit.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.MobileCountryCode',
            'errorMessage' => 'The current site does not support the country code.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DCD43660-75DD-5D15-B342-1B83FCA5B913\\",\\n  \\"ExpirationDate\\": \\"2021-12-17T07:38:41.747Z\\"\\n}","errorExample":""},{"type":"xml","example":"<SendVerificationCodeForBindSecureMobilePhoneResponse>\\n    <RequestId>DCD43660-75DD-5D15-B342-1B83FCA5B913</RequestId>\\n    <ExpirationDate>2021-12-17T07:38:41.747Z</ExpirationDate>\\n</SendVerificationCodeForBindSecureMobilePhoneResponse>","errorExample":""}]',
      'title' => '向安全手机发送验证码',
      'description' => '为确保系统可以记录到管理操作的具体操作者，请使用管理账号下具有资源目录管理权限（AliyunResourceDirectoryFullAccess）的RAM用户或RAM角色调用本API。',
    ),
    'ChangeAccountEmail' => 
    array (
      'summary' => '调用ChangeAccountEmail修改成员邮箱。',
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
          'name' => 'AccountId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '成员ID。',
            'type' => 'string',
            'required' => true,
            'example' => '181761095690****',
          ),
        ),
        1 => 
        array (
          'name' => 'Email',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '成员邮箱。

> 系统将自动发送验证邮件到所填邮箱，通过验证后修改才会生效，验证通过后系统会同步修改该账号的邮箱和安全邮箱。',
            'type' => 'string',
            'required' => true,
            'example' => 'someone@example.com',
          ),
        ),
      ),
      'responses' => 
      array (
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
                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'NotSupportedOperation.Account.EmailModify',
            'errorMessage' => 'The operation is not supported because the account email is being modifying.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExists.Account',
            'errorMessage' => 'This resource directory account does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\"\\n}","errorExample":""},{"type":"xml","example":"<ChangeAccountEmailResponse>\\n    <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\n</ChangeAccountEmailResponse>","errorExample":""}]',
      'title' => '修改成员邮箱',
    ),
    'RetryChangeAccountEmail' => 
    array (
      'summary' => '调用RetryChangeAccountEmail重新发送修改成员邮箱的确认邮件。',
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
          'name' => 'AccountId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '成员ID。',
            'type' => 'string',
            'required' => true,
            'example' => '181761095690****',
          ),
        ),
      ),
      'responses' => 
      array (
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
                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
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
            'errorCode' => 'EntityNotExists.EmailModifyRecord',
            'errorMessage' => 'This email modification record of the account does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
          ),
          2 => 
          array (
            'errorCode' => 'EntityNotExists.Account',
            'errorMessage' => 'This resource directory account does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\"\\n}","errorExample":""},{"type":"xml","example":"<RetryChangeAccountEmailResponse>\\n    <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\n</RetryChangeAccountEmailResponse>","errorExample":""}]',
      'title' => '重新发送修改成员邮箱的确认邮件',
    ),
    'CancelChangeAccountEmail' => 
    array (
      'summary' => '调用CancelChangeAccountEmail取消修改成员邮箱。',
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
          'name' => 'AccountId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '成员ID。',
            'type' => 'string',
            'required' => true,
            'example' => '181761095690****',
          ),
        ),
      ),
      'responses' => 
      array (
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
                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
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
            'errorCode' => 'EntityNotExists.EmailModifyRecord',
            'errorMessage' => 'This email modification record of the account does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
          ),
          2 => 
          array (
            'errorCode' => 'EntityNotExists.Account',
            'errorMessage' => 'This resource directory account does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\"\\n}","errorExample":""},{"type":"xml","example":"<CancelChangeAccountEmailResponse>\\n    <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\n</CancelChangeAccountEmailResponse>","errorExample":""}]',
      'title' => '取消修改成员邮箱',
    ),
    'CheckAccountDelete' => 
    array (
      'summary' => '调用CheckAccountDelete执行成员删除检查任务。',
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
          'name' => 'AccountId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待删除的成员ID。',
            'type' => 'string',
            'required' => true,
            'example' => '179855839641****',
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
                'example' => '7CDDDCEF-CDFD-0825-B7D7-217BE0897B22',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MissingParameter.AccountId',
            'errorMessage' => 'You must specify AccountId.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.AccountId',
            'errorMessage' => 'The AccountId is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.Account',
            'errorMessage' => 'This resource directory account does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccountTypeOrStatusMismatch',
            'errorMessage' => 'You cannot perform the action on the member account.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidControlPolicyEnablementStatus',
            'errorMessage' => 'The control policy enablement status is not valid to perform this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'NoLicense.ResourceDirectory',
            'errorMessage' => 'The resource directory has not enabled the delete operation.',
          ),
          3 => 
          array (
            'errorCode' => 'UnknownError.Account',
            'errorMessage' => 'The deletion failed. An unknown error occurred. Please try again later.',
          ),
          4 => 
          array (
            'errorCode' => 'CallerIdentityError.DeleteAccount',
            'errorMessage' => 'Please use the RAM user or role of the management account to delete.',
          ),
          5 => 
          array (
            'errorCode' => 'RemoveConfilctAccountAsDelegatedAdministator',
            'errorMessage' => 'You attempted to remove a member that is registered as a delegated administrator. To complete this operation, you must first deregister this account as a delegated administrator.',
          ),
          6 => 
          array (
            'errorCode' => 'LegalEntityDifferent',
            'errorMessage' => 'The account legal entity is different from the one of the Management Account.',
          ),
          7 => 
          array (
            'errorCode' => 'MemberTypeError.DeleteAccount',
            'errorMessage' => 'You can only delete accounts of the resource account type created by Resource Directory.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7CDDDCEF-CDFD-0825-B7D7-217BE0897B22\\"\\n}","errorExample":""},{"type":"xml","example":"<CheckAccountDeleteResponse>\\n    <RequestId>7CDDDCEF-CDFD-0825-B7D7-217BE0897B22</RequestId>\\n</CheckAccountDeleteResponse>","errorExample":""}]',
      'title' => '成员删除检查',
      'description' => '删除成员前，您需要调用本API对目标成员进行删除前的条件检查。',
      'extraInfo' => '### 后续操作
您可以调用[GetAccountDeletionCheckResult](~~448775~~)查询删除检查的结果。',
    ),
    'DeleteAccount' => 
    array (
      'summary' => '调用DeleteAccount删除资源类型的成员。',
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
          'name' => 'AccountId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待删除的成员ID。',
            'type' => 'string',
            'required' => true,
            'example' => '169946124551****',
          ),
        ),
        1 => 
        array (
          'name' => 'AbandonableCheckId',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '可以选择放弃并继续执行成员删除的检查项ID。

该ID从[GetAccountDeletionCheckResult](~~448775~~)的返回参数AbandonableChecks中获取。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '可以选择放弃并继续执行成员删除的检查项ID。

该ID从[GetAccountDeletionCheckResult](~~448775~~)的返回参数AbandonableChecks中获取。',
              'type' => 'string',
              'required' => false,
              'example' => 'NON_SP_cs',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '009429F8-C1C0-5872-B674-A6C2333B9647',
              ),
              'DeletionType' => 
              array (
                'description' => '删除类型。取值：

- 0：直接删除。如果成员最近30天内不存在后付费资源，则系统会直接删除该成员。
- 1：静默期删除。如果成员最近30天内存在后付费资源，则会进入静默期。等待静默期结束后，系统才会开始删除该成员。关于静默期的更多信息，请参见[什么是成员删除的静默期](~~446079~~)。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MissingParameter.AccountId',
            'errorMessage' => 'You must specify AccountId.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.AccountId',
            'errorMessage' => 'The AccountId is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.Account',
            'errorMessage' => 'This resource directory account does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccountNotExist.DeleteAccount',
            'errorMessage' => 'The deletion failed. The account does not exist. Please confirm whether it has been deleted.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidControlPolicyEnablementStatus',
            'errorMessage' => 'The control policy enablement status is not valid to perform this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'NoLicense.ResourceDirectory',
            'errorMessage' => 'The resource directory has not enabled the delete operation.',
          ),
          3 => 
          array (
            'errorCode' => 'CallerIdentityError.DeleteAccount',
            'errorMessage' => 'Please use the RAM user or role of the management account to delete.',
          ),
          4 => 
          array (
            'errorCode' => 'RemoveConfilctAccountAsDelegatedAdministator',
            'errorMessage' => 'You attempted to remove a member that is registered as a delegated administrator. To complete this operation, you must first deregister this account as a delegated administrator.',
          ),
          5 => 
          array (
            'errorCode' => 'LegalEntityDifferent',
            'errorMessage' => 'The account legal entity is different from the one of the Management Account.',
          ),
          6 => 
          array (
            'errorCode' => 'MemberTypeError.DeleteAccount',
            'errorMessage' => 'You can only delete accounts of the resource account type created by Resource Directory.',
          ),
          7 => 
          array (
            'errorCode' => 'NotSupport.HasPayerAccount',
            'errorMessage' => 'This account has a payer account. Please release the financial relationship of this account first.',
          ),
          8 => 
          array (
            'errorCode' => 'NotSupportedOperation.DeletingAccount',
            'errorMessage' => 'The operation is not supported because the account is being deleted.',
          ),
          9 => 
          array (
            'errorCode' => 'NotSupportedOperation.CheckingAccount',
            'errorMessage' => 'The operation is not supported because the account is checking for deletion.',
          ),
          10 => 
          array (
            'errorCode' => 'UnknownError.Account',
            'errorMessage' => 'The deletion failed. An unknown error occurred. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"009429F8-C1C0-5872-B674-A6C2333B9647\\",\\n  \\"DeletionType\\": \\"0\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteAccountResponse>\\n    <RequestId>55B22096-0D0C-542D-9A01-9B95977D3A10</RequestId>\\n    <DeletionType>0</DeletionType>\\n</DeleteAccountResponse>","errorExample":""}]',
      'title' => '删除资源类型的成员',
      'description' => '删除成员前，建议您先调用[CheckAccountDelete](~~448542~~)和[GetAccountDeletionCheckResult](~~448775~~)，对成员进行删除前的条件检查。只有符合删除条件的成员，才能调用DeleteAccount成功将其删除。

成功提交成员删除申请后，您可以通过[GetAccountDeletionStatus](~~449001~~)查询删除状态。且成员一旦删除，成员中的所有资源及数据都会被删除，您无法再次登录和使用它，将无法找回，请您谨慎操作。关于成员删除的更多信息，请参见[删除资源账号类型的成员](~~446078~~)。',
    ),
    'SetMemberDeletionPermission' => 
    array (
      'summary' => '调用SetMemberDeletionPermission开启或关闭成员删除许可。',
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
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开启或关闭成员删除许可。取值：

- Enabled：开启。
- Disabled：关闭。',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C55A4CAA-9039-1DDF-91CE-FCC134513D29',
              ),
              'MemberDeletionStatus' => 
              array (
                'description' => '成员删除许可状态。取值：

- Enabled：已开启。
- Disabled：已关闭。',
                'type' => 'string',
                'example' => 'Enabled',
              ),
              'ManagementAccountId' => 
              array (
                'description' => '资源目录的管理账号ID。',
                'type' => 'string',
                'example' => '151266687691****',
              ),
              'ResourceDirectoryId' => 
              array (
                'description' => '资源目录ID。',
                'type' => 'string',
                'example' => 'rd-3G****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.Status',
            'errorMessage' => 'The specified Status is invalid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'MemberAccountAccessDenied',
            'errorMessage' => 'The member account is not allowed to perform the operation.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C55A4CAA-9039-1DDF-91CE-FCC134513D29\\",\\n  \\"MemberDeletionStatus\\": \\"Enabled\\",\\n  \\"ManagementAccountId\\": \\"151266687691****\\",\\n  \\"ResourceDirectoryId\\": \\"rd-3G****\\"\\n}","errorExample":""},{"type":"xml","example":"<SetMemberDeletionPermissionResponse>\\n    <ResourceDirectoryId>rd-3G****</ResourceDirectoryId>\\n    <RequestId>C55A4CAA-9039-1DDF-91CE-FCC134513D29</RequestId>\\n    <MemberDeletionStatus>Enabled</MemberDeletionStatus>\\n    <ManagementAccountId>151266687691****</ManagementAccountId>\\n</SetMemberDeletionPermissionResponse>","errorExample":""}]',
      'title' => '开启或关闭成员删除许可',
      'description' => '当开启成员删除许可后，才能删除资源账号类型的成员。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
    ),
    'GetAccountDeletionStatus' => 
    array (
      'summary' => '调用GetAccountDeletionStatus查询成员删除状态。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AccountId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '成员ID。',
            'type' => 'string',
            'required' => true,
            'example' => '169946124551****',
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
              'RdAccountDeletionStatus' => 
              array (
                'description' => '成员删除状态。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '状态。取值：

- Success：删除成功。
- Checking：检查中。
- Deleting：删除中。
- CheckFailed：检查失败。
- DeleteFailed：删除失败。',
                    'type' => 'string',
                    'example' => 'Success',
                  ),
                  'AccountId' => 
                  array (
                    'description' => '成员ID。',
                    'type' => 'string',
                    'example' => '169946124551****',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '删除开始时间。',
                    'type' => 'string',
                    'example' => '2022-08-23T17:05:30+08:00',
                  ),
                  'DeletionTime' => 
                  array (
                    'description' => '删除结束时间。',
                    'type' => 'string',
                    'required' => true,
                    'example' => '2022-08-23T17:06:01+08:00',
                  ),
                  'FailReasonList' => 
                  array (
                    'description' => '删除失败原因。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '删除失败原因。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Name' => 
                        array (
                          'description' => '检查项所属的云服务名称。',
                          'type' => 'string',
                          'example' => 'Others',
                        ),
                        'Description' => 
                        array (
                          'description' => '检查项描述。',
                          'type' => 'string',
                          'example' => 'This account has a payer account. Please release the financial relationship of this account first.',
                        ),
                      ),
                    ),
                  ),
                  'DeletionType' => 
                  array (
                    'description' => '删除类型。取值：

- 0：直接删除。如果成员最近30天内不存在后付费资源，则系统会直接删除该成员。
- 1：静默期删除。如果成员最近30天内存在后付费资源，则会进入静默期。等待静默期结束后，系统才会开始删除该成员。关于静默期的更多信息，请参见[什么是成员删除的静默期](~~446079~~)。',
                    'type' => 'string',
                    'example' => '0',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8AA43293-7C8F-5730-8F2D-7F864EC092C5',
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
            'errorCode' => 'EntityNotExists.Account',
            'errorMessage' => 'This resource directory account does not exist.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.CheckAccount',
            'errorMessage' => 'There is no check task for this account',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RdAccountDeletionStatus\\": {\\n    \\"Status\\": \\"Success\\",\\n    \\"AccountId\\": \\"169946124551****\\",\\n    \\"CreateTime\\": \\"2022-08-23T17:05:30+08:00\\",\\n    \\"DeletionTime\\": \\"2022-08-23T17:06:01+08:00\\",\\n    \\"FailReasonList\\": [\\n      {\\n        \\"Name\\": \\"Others\\",\\n        \\"Description\\": \\"This account has a payer account. Please release the financial relationship of this account first.\\"\\n      }\\n    ],\\n    \\"DeletionType\\": \\"0\\"\\n  },\\n  \\"RequestId\\": \\"8AA43293-7C8F-5730-8F2D-7F864EC092C5\\"\\n}","errorExample":""},{"type":"xml","example":"<GetAccountDeletionStatusResponse>\\n    <RequestId>8AA43293-7C8F-5730-8F2D-7F864EC092C5</RequestId>\\n    <RdAccountDeletionStatus>\\n        <Status>Success</Status>\\n        <AccountId>169946124551****</AccountId>\\n        <DeletionType>0</DeletionType>\\n        <CreateTime>2022-08-23T17:05:30+08:00</CreateTime>\\n        <DeletionTime>2022-08-23T17:06:01+08:00</DeletionTime>\\n    </RdAccountDeletionStatus>\\n</GetAccountDeletionStatusResponse>","errorExample":""}]',
      'title' => '查询成员删除状态',
      'description' => '本文将提供一个示例，查询成员`169946124551****`的删除状态。返回结果显示，该成员已成功删除。',
    ),
    'GetAccountDeletionCheckResult' => 
    array (
      'summary' => '调用GetAccountDeletionCheckResult查询成员删除检查结果。',
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
          'name' => 'AccountId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待删除成员的ID。',
            'type' => 'string',
            'required' => true,
            'example' => '179855839641****',
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
                'example' => '54AC391D-4F7F-5F08-B8D3-0AECDE6EC5BD',
              ),
              'AccountDeletionCheckResultInfo' => 
              array (
                'description' => '成员删除检查结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '检查状态。取值：

- PreCheckComplete：检查完成。
- PreChecking：检查中。',
                    'type' => 'string',
                    'example' => 'PreCheckComplete',
                  ),
                  'AllowDelete' => 
                  array (
                    'description' => '是否允许删除。取值：
- true：允许删除。
- false：不允许删除。',
                    'type' => 'string',
                    'example' => 'false',
                  ),
                  'NotAllowReason' => 
                  array (
                    'description' => '不允许删除的原因。
> 当AllowDelete为false时，返回该参数值。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '不允许删除的原因。
> 当AllowDelete为false时，返回该参数值。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Description' => 
                        array (
                          'description' => '检查项描述。',
                          'type' => 'string',
                          'example' => 'This account is an Enterprise Finance associated account. Please remove the financial association of this account before deleting it.',
                        ),
                        'CheckId' => 
                        array (
                          'description' => '检查项ID。',
                          'type' => 'string',
                          'example' => 'NON_SP_efc',
                        ),
                        'CheckName' => 
                        array (
                          'description' => '检查项所属的云服务名称。',
                          'type' => 'string',
                          'example' => 'Enterprise finance',
                        ),
                      ),
                    ),
                  ),
                  'AbandonableChecks' => 
                  array (
                    'description' => '您可以选择放弃并继续执行成员删除的检查项。

> 当AllowDelete为true时，可能返回该参数值。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '您可以选择放弃并继续执行成员删除的检查项。
> 当AllowDelete为true时，可能返回该参数值。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Description' => 
                        array (
                          'description' => '检查项描述。',
                          'type' => 'string',
                          'example' => '存在云产品实例运行，请联系客服人员提工单处理。',
                        ),
                        'CheckId' => 
                        array (
                          'description' => '检查项ID。',
                          'type' => 'string',
                          'example' => 'NON_SP_cs',
                        ),
                        'CheckName' => 
                        array (
                          'description' => '检查项所属的云服务名称。',
                          'type' => 'string',
                          'example' => '容器服务',
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
            'errorCode' => 'MissingParameter.AccountId',
            'errorMessage' => 'You must specify AccountId.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.AccountId',
            'errorMessage' => 'The AccountId is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.Account',
            'errorMessage' => 'This resource directory account does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccountTypeOrStatusMismatch',
            'errorMessage' => 'You cannot perform the action on the member account.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExists.CheckAccount',
            'errorMessage' => 'There is no check task for this account',
          ),
          2 => 
          array (
            'errorCode' => 'UnknownError.Account',
            'errorMessage' => 'The deletion failed. An unknown error occurred. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54AC391D-4F7F-5F08-B8D3-0AECDE6EC5BD\\",\\n  \\"AccountDeletionCheckResultInfo\\": {\\n    \\"Status\\": \\"PreCheckComplete\\",\\n    \\"AllowDelete\\": \\"false\\",\\n    \\"NotAllowReason\\": [\\n      {\\n        \\"Description\\": \\"This account is an Enterprise Finance associated account. Please remove the financial association of this account before deleting it.\\",\\n        \\"CheckId\\": \\"NON_SP_efc\\",\\n        \\"CheckName\\": \\"Enterprise finance\\"\\n      }\\n    ],\\n    \\"AbandonableChecks\\": [\\n      {\\n        \\"Description\\": \\"存在云产品实例运行，请联系客服人员提工单处理。\\",\\n        \\"CheckId\\": \\"NON_SP_cs\\",\\n        \\"CheckName\\": \\"容器服务\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetAccountDeletionCheckResultResponse>\\n    <AccountDeletionCheckResultInfo>\\n        <Status>PreCheckComplete</Status>\\n        <NotAllowReason>\\n            <Description>instance number:1</Description>\\n            <CheckName>eip_pre</CheckName>\\n            <CheckId>SP_eip_eip_pre</CheckId>\\n        </NotAllowReason>\\n        <NotAllowReason>\\n            <Description>This account is an Enterprise Finance associated account. Please remove the financial association of this account before deleting it.</Description>\\n            <CheckName>Enterprise finance</CheckName>\\n            <CheckId>NON_SP_efc</CheckId>\\n        </NotAllowReason>\\n        <AllowDelete>false</AllowDelete>\\n    </AccountDeletionCheckResultInfo>\\n    <RequestId>54AC391D-4F7F-5F08-B8D3-0AECDE6EC5BD</RequestId>\\n</GetAccountDeletionCheckResultResponse>","errorExample":""}]',
      'title' => '查询成员删除检查结果',
      'description' => '在您调用[CheckAccountDelete](~~448542~~)执行了成员删除检查任务后，您可以调用GetAccountDeletionCheckResult查询成员删除检查的结果。如果符合删除检查要求，则该成员允许删除；否则，请手动处理不符合项，直至符合要求为止。

本文将提供一个示例，查询待删除成员`179855839641****`的删除检查结果。返回结果显示，该成员不符合删除要求。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
    ),
    'InviteAccountToResourceDirectory' => 
    array (
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
          'name' => 'TargetEntity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '被邀请账号ID或登录邮箱。',
            'type' => 'string',
            'required' => true,
            'example' => 'someone@example.com',
          ),
        ),
        1 => 
        array (
          'name' => 'TargetType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '被邀请账号类型。

- Account：账号ID。
- Email：账号登录邮箱。',
            'type' => 'string',
            'required' => true,
            'example' => 'Email',
          ),
        ),
        2 => 
        array (
          'name' => 'Note',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备注。

最大长度为1024个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '欢迎您加入',
          ),
        ),
        3 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '标签',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'k1',
                ),
                'Value' => 
                array (
                  'description' => '标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'v1',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
              ),
              'Handshake' => 
              array (
                'description' => '邀请信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '邀请状态。取值：

- Pending：等待确认。
- Accepted：已接受。
- Cancelled：已取消。
- Declined：已拒绝。
- Expired：超时。',
                    'type' => 'string',
                    'example' => 'Pending',
                  ),
                  'ExpireTime' => 
                  array (
                    'description' => '邀请的过期时间（UTC时间）。',
                    'type' => 'string',
                    'example' => '2018-08-24T09:55:41Z',
                  ),
                  'ResourceDirectoryId' => 
                  array (
                    'description' => '资源目录ID。',
                    'type' => 'string',
                    'example' => 'rd-abcdef****',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '邀请的创建时间（UTC时间）。',
                    'type' => 'string',
                    'example' => '2018-08-10T09:55:41Z',
                  ),
                  'Note' => 
                  array (
                    'description' => '备注。',
                    'type' => 'string',
                    'example' => '欢迎您加入',
                  ),
                  'TargetEntity' => 
                  array (
                    'description' => '被邀请账号ID或登录邮箱。',
                    'type' => 'string',
                    'example' => 'someone@example.com',
                  ),
                  'MasterAccountId' => 
                  array (
                    'description' => '资源目录管理账号ID。',
                    'type' => 'string',
                    'example' => '172841235500****',
                  ),
                  'MasterAccountName' => 
                  array (
                    'description' => '资源目录管理账号名称。',
                    'type' => 'string',
                    'example' => 'Alice',
                  ),
                  'ModifyTime' => 
                  array (
                    'description' => '邀请的修改时间（UTC时间）。',
                    'type' => 'string',
                    'example' => '2018-08-10T09:55:41Z',
                  ),
                  'TargetType' => 
                  array (
                    'description' => '被邀请账号类型。取值：

- Account：账号ID。
- Email：账号登录邮箱。',
                    'type' => 'string',
                    'example' => 'Email',
                  ),
                  'HandshakeId' => 
                  array (
                    'description' => '邀请ID。',
                    'type' => 'string',
                    'example' => 'h-ycm4rp****',
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
            'errorCode' => 'MissingParameter.TargetEntity',
            'errorMessage' => 'You must specify TargetEntity.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.TargetEntity',
            'errorMessage' => 'The TargetEntity is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingParameter.TargetType',
            'errorMessage' => 'You must specify TargetType.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.TargetType',
            'errorMessage' => 'The TargetType is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.Note.Length',
            'errorMessage' => 'The length of the invitation note exceeds the limit.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameter.Note',
            'errorMessage' => 'The Note is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'LimitExceeded.Account',
            'errorMessage' => 'The maximum number of member accounts in a resource directory exceeds the limit.',
          ),
          1 => 
          array (
            'errorCode' => 'LimitExceeded.InvitationRate',
            'errorMessage' => 'The number of invitations sent exceeds the limit.',
          ),
          2 => 
          array (
            'errorCode' => 'EntityAlreadyExists.Handshake',
            'errorMessage' => 'Handshakes with the same target entity already exist.',
          ),
          3 => 
          array (
            'errorCode' => 'NotSupport.AccountInAnotherResourceDirectory',
            'errorMessage' => 'Your account is a management account for another resource directory or a member of another resource directory.',
          ),
          4 => 
          array (
            'errorCode' => 'LegalEntityMismatch',
            'errorMessage' => 'Your account does not have the same legal entity as the master account.',
          ),
          5 => 
          array (
            'errorCode' => 'Invalid.AccountType',
            'errorMessage' => 'The specified profile type of account is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\",\\n  \\"Handshake\\": {\\n    \\"Status\\": \\"Pending\\",\\n    \\"ExpireTime\\": \\"2018-08-24T09:55:41Z\\",\\n    \\"ResourceDirectoryId\\": \\"rd-abcdef****\\",\\n    \\"CreateTime\\": \\"2018-08-10T09:55:41Z\\",\\n    \\"Note\\": \\"欢迎您加入\\",\\n    \\"TargetEntity\\": \\"someone@example.com\\",\\n    \\"MasterAccountId\\": \\"172841235500****\\",\\n    \\"MasterAccountName\\": \\"Alice\\",\\n    \\"ModifyTime\\": \\"2018-08-10T09:55:41Z\\",\\n    \\"TargetType\\": \\"Email\\",\\n    \\"HandshakeId\\": \\"h-ycm4rp****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<InviteAccountToResourceDirectoryResponse>\\n    <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\n    <Handshake>\\n        <HandshakeId>h-ycm4rp****</HandshakeId>\\n        <ResourceDirectoryId>rd-abcdef****</ResourceDirectoryId>\\n        <MasterAccountId>172841235500****</MasterAccountId>\\n        <MasterAccountName>Alice</MasterAccountName>\\n        <TargetEntity>someone@example.com</TargetEntity>\\n        <TargetType>Email</TargetType>\\n        <Note>欢迎您加入</Note>\\n        <Status>Pending</Status>\\n        <CreateTime>2018-08-10T09:55:41Z</CreateTime>\\n        <ModifyTime>2018-08-10T09:55:41Z</ModifyTime>\\n        <ExpireTime>2018-08-24T09:55:41Z</ExpireTime>\\n    </Handshake>\\n</InviteAccountToResourceDirectoryResponse>","errorExample":""}]',
      'title' => '邀请外部账号加入资源目录',
      'summary' => '调用InviteAccountToResourceDirectory邀请外部账号加入资源目录。',
      'description' => '本文将提供一个示例，邀请外部账号`someone@example.com`加入资源目录。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetHandshake' => 
    array (
      'summary' => '调用GetHandshake获取邀请信息。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'HandshakeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '邀请ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'h-ycm4rp****',
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
                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
              ),
              'Handshake' => 
              array (
                'description' => '邀请信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '邀请状态。取值：

- Pending：等待确认。
- Accepted：已接受。
- Cancelled：已取消。
- Declined：已拒绝。
- Expired：超时。',
                    'type' => 'string',
                    'example' => 'Pending',
                  ),
                  'ExpireTime' => 
                  array (
                    'description' => '邀请的过期时间（UTC时间）。',
                    'type' => 'string',
                    'example' => '2018-08-24T09:55:41Z',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '邀请的创建时间（UTC时间）。',
                    'type' => 'string',
                    'example' => '2018-08-10T09:55:41Z',
                  ),
                  'TargetEntity' => 
                  array (
                    'description' => '被邀请账号ID或登录邮箱。',
                    'type' => 'string',
                    'example' => 'someone@example.com',
                  ),
                  'MasterAccountId' => 
                  array (
                    'description' => '资源目录管理账号ID。',
                    'type' => 'string',
                    'example' => '172841235500****',
                  ),
                  'HandshakeId' => 
                  array (
                    'description' => '邀请ID。',
                    'type' => 'string',
                    'example' => 'h-ycm4rp****',
                  ),
                  'MasterAccountRealName' => 
                  array (
                    'description' => '资源目录管理账号实名认证信息。

> 被邀请方调用此接口时，才能查看该参数。',
                    'type' => 'string',
                    'example' => 'company',
                  ),
                  'ResourceDirectoryId' => 
                  array (
                    'description' => '资源目录ID。',
                    'type' => 'string',
                    'example' => 'rd-abcdef****',
                  ),
                  'InvitedAccountRealName' => 
                  array (
                    'description' => '被邀请方实名认证信息。

> 被邀请方调用此接口时，才能查看该参数。',
                    'type' => 'string',
                    'example' => 'Alice',
                  ),
                  'Note' => 
                  array (
                    'description' => '备注。',
                    'type' => 'string',
                    'example' => '欢迎您加入',
                  ),
                  'MasterAccountName' => 
                  array (
                    'description' => '资源目录管理账号名称。',
                    'type' => 'string',
                    'example' => 'company@example.com',
                  ),
                  'TargetType' => 
                  array (
                    'description' => '被邀请账号类型。取值：

- Account：账号ID。
- Email：账号登录邮箱。',
                    'type' => 'string',
                    'example' => 'Email',
                  ),
                  'ModifyTime' => 
                  array (
                    'description' => '邀请的修改时间（UTC时间）。',
                    'type' => 'string',
                    'example' => '2018-08-10T09:55:41Z',
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
            'errorCode' => 'MissingParameter.HandshakeId',
            'errorMessage' => 'You must specify HandshakeId.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.HandshakeId',
            'errorMessage' => 'The HandshakeId is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.Handshake',
            'errorMessage' => 'The specified handshake does not exist.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'HandshakeStatusMismatch',
            'errorMessage' => 'The invitation is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingAccountRealName',
            'errorMessage' => 'The name of the invited account is not specified.',
          ),
          2 => 
          array (
            'errorCode' => 'NoRealNameAuthentication',
            'errorMessage' => 'The account invited has not passed real-name authentication.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\",\\n  \\"Handshake\\": {\\n    \\"Status\\": \\"Pending\\",\\n    \\"ExpireTime\\": \\"2018-08-24T09:55:41Z\\",\\n    \\"CreateTime\\": \\"2018-08-10T09:55:41Z\\",\\n    \\"TargetEntity\\": \\"someone@example.com\\",\\n    \\"MasterAccountId\\": \\"172841235500****\\",\\n    \\"HandshakeId\\": \\"h-ycm4rp****\\",\\n    \\"MasterAccountRealName\\": \\"company\\",\\n    \\"ResourceDirectoryId\\": \\"rd-abcdef****\\",\\n    \\"InvitedAccountRealName\\": \\"Alice\\",\\n    \\"Note\\": \\"欢迎您加入\\",\\n    \\"MasterAccountName\\": \\"company@example.com\\",\\n    \\"TargetType\\": \\"Email\\",\\n    \\"ModifyTime\\": \\"2018-08-10T09:55:41Z\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetHandshakeResponse>\\n    <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\n    <Handshake>\\n        <HandshakeId>h-ycm4rp****</HandshakeId>\\n        <ResourceDirectoryId>rd-abcdef****</ResourceDirectoryId>\\n        <MasterAccountId>172841235500****</MasterAccountId>\\n        <MasterAccountName>company@example.com</MasterAccountName>\\n        <MasterAccountRealName>company</MasterAccountRealName>\\n        <InvitedAccountRealName>Alice</InvitedAccountRealName>\\n        <TargetEntity>someone@example.com</TargetEntity>\\n        <TargetType>Email</TargetType>\\n        <Note>欢迎您加入</Note>\\n        <Status>Pending</Status>\\n        <CreateTime>2018-08-10T09:55:41Z</CreateTime>\\n        <ModifyTime>2018-08-10T09:55:41Z</ModifyTime>\\n        <ExpireTime>2018-08-24T09:55:41Z</ExpireTime>\\n    </Handshake>\\n</GetHandshakeResponse>","errorExample":""}]',
      'title' => '获取邀请信息',
      'description' => '本文将提供一个示例，获取ID为`h-ycm4rp****`的邀请信息。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CancelHandshake' => 
    array (
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
          'name' => 'HandshakeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '邀请ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'h-ycm4rp****',
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
                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
              ),
              'Handshake' => 
              array (
                'description' => '邀请信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '邀请状态。取值：

- Pending：等待确认。
- Accepted：已接受。
- Cancelled：已取消。
- Declined：已拒绝。
- Expired：超时。',
                    'type' => 'string',
                    'example' => 'Cancelled',
                  ),
                  'ExpireTime' => 
                  array (
                    'description' => '邀请的过期时间（UTC时间）。',
                    'type' => 'string',
                    'example' => '2018-08-24T09:55:41Z',
                  ),
                  'ResourceDirectoryId' => 
                  array (
                    'description' => '资源目录ID。',
                    'type' => 'string',
                    'example' => 'h-ycm4rp****',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '邀请的创建时间（UTC时间）。',
                    'type' => 'string',
                    'example' => '2018-08-10T09:55:41Z',
                  ),
                  'Note' => 
                  array (
                    'description' => '备注。',
                    'type' => 'string',
                    'example' => '欢迎您加入',
                  ),
                  'TargetEntity' => 
                  array (
                    'description' => '被邀请账号ID或登录邮箱。',
                    'type' => 'string',
                    'example' => 'someone@example.com',
                  ),
                  'MasterAccountId' => 
                  array (
                    'description' => '资源目录管理账号ID。',
                    'type' => 'string',
                    'example' => '172841235500****',
                  ),
                  'MasterAccountName' => 
                  array (
                    'description' => '资源目录管理账号名称。',
                    'type' => 'string',
                    'example' => 'Alice',
                  ),
                  'ModifyTime' => 
                  array (
                    'description' => '邀请的修改时间（UTC时间）。',
                    'type' => 'string',
                    'example' => '2018-08-10T09:55:41Z',
                  ),
                  'TargetType' => 
                  array (
                    'description' => '被邀请账号类型。取值：

- Account：账号ID。
- Email：账号登录邮箱。',
                    'type' => 'string',
                    'example' => 'Email',
                  ),
                  'HandshakeId' => 
                  array (
                    'description' => '邀请ID。',
                    'type' => 'string',
                    'example' => 'h-ycm4rp****',
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
            'errorCode' => 'MissingParameter.HandshakeId',
            'errorMessage' => 'You must specify HandshakeId.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.HandshakeId',
            'errorMessage' => 'The HandshakeId is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.Handshake',
            'errorMessage' => 'The specified handshake does not exist.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'HandshakeStatusMismatch',
            'errorMessage' => 'The invitation is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\",\\n  \\"Handshake\\": {\\n    \\"Status\\": \\"Cancelled\\",\\n    \\"ExpireTime\\": \\"2018-08-24T09:55:41Z\\",\\n    \\"ResourceDirectoryId\\": \\"h-ycm4rp****\\",\\n    \\"CreateTime\\": \\"2018-08-10T09:55:41Z\\",\\n    \\"Note\\": \\"欢迎您加入\\",\\n    \\"TargetEntity\\": \\"someone@example.com\\",\\n    \\"MasterAccountId\\": \\"172841235500****\\",\\n    \\"MasterAccountName\\": \\"Alice\\",\\n    \\"ModifyTime\\": \\"2018-08-10T09:55:41Z\\",\\n    \\"TargetType\\": \\"Email\\",\\n    \\"HandshakeId\\": \\"h-ycm4rp****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CancelHandshakeResponse>\\n    <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\n    <Handshake>\\n        <HandshakeId>h-ycm4rp****</HandshakeId>\\n        <ResourceDirectoryId>rd-abcdef****</ResourceDirectoryId>\\n        <MasterAccountId>172841235500****</MasterAccountId>\\n        <MasterAccountName>Alice</MasterAccountName>\\n        <TargetEntity>someone@example.com</TargetEntity>\\n        <TargetType>Email</TargetType>\\n        <Note>欢迎您加入</Note>\\n        <Status>Cancelled</Status>\\n        <CreateTime>2018-08-10T09:55:41Z</CreateTime>\\n        <ModifyTime>2018-08-10T09:55:41Z</ModifyTime>\\n        <ExpireTime>2018-08-24T09:55:41Z</ExpireTime>\\n    </Handshake>\\n</CancelHandshakeResponse>","errorExample":""}]',
      'title' => '取消邀请',
      'summary' => '调用CancelHandshake取消邀请。',
      'description' => '本文将提供一个示例，取消ID为`h-ycm4rp****`的邀请。',
      'extraInfo' => ' ',
    ),
    'ListHandshakesForAccount' => 
    array (
      'summary' => '调用ListHandshakesForAccount查询当前账号下的邀请记录。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。

起始值：1。默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
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
            'description' => '分页时每页显示的数据条数。

取值范围：1~100。默认值：10。',
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
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '邀请记录总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
              ),
              'PageSize' => 
              array (
                'description' => '分页时每页显示的数据条数。',
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
              'Handshakes' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Handshake' => 
                  array (
                    'description' => '邀请记录。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '邀请记录',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '邀请状态。取值：

- Pending：等待确认。
- Accepted：已接受。
- Cancelled：已取消。
- Declined：已拒绝。
- Expired：超时。',
                          'type' => 'string',
                          'example' => 'Pending',
                        ),
                        'ExpireTime' => 
                        array (
                          'description' => '邀请的过期时间（UTC时间）。',
                          'type' => 'string',
                          'example' => '2018-08-24T09:55:41Z',
                        ),
                        'ResourceDirectoryId' => 
                        array (
                          'description' => '资源目录ID。',
                          'type' => 'string',
                          'example' => 'rd-abcdef****',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '邀请的创建时间（UTC时间）。',
                          'type' => 'string',
                          'example' => '2018-08-10T09:55:41Z',
                        ),
                        'Note' => 
                        array (
                          'description' => '备注。',
                          'type' => 'string',
                          'example' => '欢迎您加入',
                        ),
                        'TargetEntity' => 
                        array (
                          'description' => '被邀请的阿里云账号ID或登录邮箱。',
                          'type' => 'string',
                          'example' => 'someone@example.com',
                        ),
                        'MasterAccountId' => 
                        array (
                          'description' => '资源目录管理账号ID。',
                          'type' => 'string',
                          'example' => '172841235500****',
                        ),
                        'MasterAccountName' => 
                        array (
                          'description' => '资源目录管理账号名称。',
                          'type' => 'string',
                          'example' => 'CompanyA',
                        ),
                        'ModifyTime' => 
                        array (
                          'description' => '邀请的修改时间（UTC时间）。',
                          'type' => 'string',
                          'example' => '2018-08-10T09:55:41Z',
                        ),
                        'TargetType' => 
                        array (
                          'description' => '被邀请的阿里云账号类型。取值：

- Account：账号ID。
- Email：账号登录邮箱。',
                          'type' => 'string',
                          'example' => 'Email',
                        ),
                        'HandshakeId' => 
                        array (
                          'description' => '邀请ID。',
                          'type' => 'string',
                          'example' => 'h-4N57QZzCTtES****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 2,\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"Handshakes\\": {\\n    \\"Handshake\\": [\\n      {\\n        \\"Status\\": \\"Pending\\",\\n        \\"ExpireTime\\": \\"2018-08-24T09:55:41Z\\",\\n        \\"ResourceDirectoryId\\": \\"rd-abcdef****\\",\\n        \\"CreateTime\\": \\"2018-08-10T09:55:41Z\\",\\n        \\"Note\\": \\"欢迎您加入\\",\\n        \\"TargetEntity\\": \\"someone@example.com\\",\\n        \\"MasterAccountId\\": \\"172841235500****\\",\\n        \\"MasterAccountName\\": \\"CompanyA\\",\\n        \\"ModifyTime\\": \\"2018-08-10T09:55:41Z\\",\\n        \\"TargetType\\": \\"Email\\",\\n        \\"HandshakeId\\": \\"h-4N57QZzCTtES****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListHandshakesForAccountResponse>\\n    <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>10</PageSize>\\n    <TotalCount>2</TotalCount>\\n    <Handshakes>\\n        <Handshake>\\n            <HandshakeId>h-4N57QZzCTtES****</HandshakeId>\\n            <ResourceDirectoryId>rd-abcdef****</ResourceDirectoryId>\\n            <MasterAccountId>172841235500****</MasterAccountId>\\n            <MasterAccountName>CompanyA</MasterAccountName>\\n            <TargetEntity>someone@example.com</TargetEntity>\\n            <TargetType>Email</TargetType>\\n            <Note>欢迎您加入</Note>\\n            <Status>Pending</Status>\\n            <CreateTime>2018-08-10T09:55:41Z</CreateTime>\\n            <ModifyTime>2018-08-10T09:55:41Z</ModifyTime>\\n            <ExpireTime>2018-08-24T09:55:41Z</ExpireTime>\\n        </Handshake>\\n        <Handshake>\\n            <HandshakeId>h-BeJZW63fHT4l****</HandshakeId>\\n            <ResourceDirectoryId>rd-abcdef****</ResourceDirectoryId>\\n            <MasterAccountId>172841235500****</MasterAccountId>\\n            <MasterAccountName>CompanyA</MasterAccountName>\\n            <TargetEntity>172841235500****</TargetEntity>\\n            <TargetType>Account</TargetType>\\n            <Note>欢迎您加入</Note>\\n            <Status>Pending</Status>\\n            <CreateTime>2018-08-10T09:55:41Z</CreateTime>\\n            <ModifyTime>2018-08-10T09:55:41Z</ModifyTime>\\n            <ExpireTime>2018-08-24T09:55:41Z</ExpireTime>\\n        </Handshake>\\n    </Handshakes>\\n</ListHandshakesForAccountResponse>","errorExample":""}]',
      'title' => '查看当前账号下的邀请记录',
      'description' => '本文将提供一个示例，查询当前管理账号`172841235500****`的邀请记录。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListHandshakesForResourceDirectory' => 
    array (
      'summary' => '调用ListHandshakesForResourceDirectory查看资源目录下的所有邀请列表。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。

起始值：1。默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
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
            'description' => '分页时每页显示的数据行数。

取值范围：1~100。默认值：10。',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '数据总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
              ),
              'PageSize' => 
              array (
                'description' => '分页时每页显示的数据行数。',
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
              'Handshakes' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Handshake' => 
                  array (
                    'description' => '邀请信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '邀请信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '邀请状态。取值：

- Pending：等待确认。
- Accepted：已接受。
- Cancelled：已取消。
- Declined：已拒绝。
- Expired：超时。',
                          'type' => 'string',
                          'example' => 'Pending',
                        ),
                        'ExpireTime' => 
                        array (
                          'description' => '邀请的过期时间（UTC时间）。',
                          'type' => 'string',
                          'example' => '2018-08-24T09:55:41Z',
                        ),
                        'ResourceDirectoryId' => 
                        array (
                          'description' => '资源目录ID。',
                          'type' => 'string',
                          'example' => 'rd-abcdef****',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '邀请的创建时间（UTC时间）。',
                          'type' => 'string',
                          'example' => '2018-08-10T09:55:41Z',
                        ),
                        'Note' => 
                        array (
                          'description' => '备注。',
                          'type' => 'string',
                          'example' => '欢迎您加入',
                        ),
                        'TargetEntity' => 
                        array (
                          'description' => '被邀请账号ID或登录邮箱。',
                          'type' => 'string',
                          'example' => 'someone@example.com',
                        ),
                        'MasterAccountId' => 
                        array (
                          'description' => '资源目录管理账号ID。',
                          'type' => 'string',
                          'example' => '172841235500****',
                        ),
                        'MasterAccountName' => 
                        array (
                          'description' => '资源目录管理账号名称。',
                          'type' => 'string',
                          'example' => 'Alice',
                        ),
                        'ModifyTime' => 
                        array (
                          'description' => '邀请的修改时间（UTC时间）。',
                          'type' => 'string',
                          'example' => '2018-08-10T09:55:41Z',
                        ),
                        'TargetType' => 
                        array (
                          'description' => '被邀请账号类型。取值：

- Account：账号ID。
- Email：账号登录邮箱。',
                          'type' => 'string',
                          'example' => 'Email',
                        ),
                        'HandshakeId' => 
                        array (
                          'description' => '邀请ID。',
                          'type' => 'string',
                          'example' => 'h-ycm4rp****',
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 2,\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"Handshakes\\": {\\n    \\"Handshake\\": [\\n      {\\n        \\"Status\\": \\"Pending\\",\\n        \\"ExpireTime\\": \\"2018-08-24T09:55:41Z\\",\\n        \\"ResourceDirectoryId\\": \\"rd-abcdef****\\",\\n        \\"CreateTime\\": \\"2018-08-10T09:55:41Z\\",\\n        \\"Note\\": \\"欢迎您加入\\",\\n        \\"TargetEntity\\": \\"someone@example.com\\",\\n        \\"MasterAccountId\\": \\"172841235500****\\",\\n        \\"MasterAccountName\\": \\"Alice\\",\\n        \\"ModifyTime\\": \\"2018-08-10T09:55:41Z\\",\\n        \\"TargetType\\": \\"Email\\",\\n        \\"HandshakeId\\": \\"h-ycm4rp****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListHandshakesForResourceDirectoryResponse>\\n    <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>10</PageSize>\\n    <TotalCount>2</TotalCount>\\n    <Handshakes>\\n        <Handshake>\\n            <HandshakeId>h-ycm4rp****</HandshakeId>\\n            <ResourceDirectoryId>rd-abcdef****</ResourceDirectoryId>\\n            <MasterAccountId>172841235500****</MasterAccountId>\\n            <MasterAccountName>Alice</MasterAccountName>\\n            <InviteEntity>someone@example.com</InviteEntity>\\n            <InviteType>Email</InviteType>\\n            <Note>欢迎您加入</Note>\\n            <Status>Pending</Status>\\n            <CreateTime>2018-08-10T09:55:41Z</CreateTime>\\n            <ModifyTime>2018-08-10T09:55:41Z</ModifyTime>\\n            <ExpireTime>2018-08-24T09:55:41Z</ExpireTime>\\n        </Handshake>\\n        <Handshake>\\n            <HandshakeId>h-ycm4rp****</HandshakeId>\\n            <ResourceDirectoryId>rd-abcdef****</ResourceDirectoryId>\\n            <MasterAccountId>172841235500****</MasterAccountId>\\n            <MasterAccountName>Alice</MasterAccountName>\\n            <TargetEntity>172841235500****</TargetEntity>\\n            <TargetType>Account</TargetType>\\n            <Note>欢迎您加入</Note>\\n            <Status>Pending</Status>\\n            <CreateTime>2018-08-10T09:55:41Z</CreateTime>\\n            <ModifyTime>2018-08-10T09:55:41Z</ModifyTime>\\n            <ExpireTime>2018-08-24T09:55:41Z</ExpireTime>\\n        </Handshake>\\n    </Handshakes>\\n</ListHandshakesForResourceDirectoryResponse>","errorExample":""}]',
      'title' => '查看资源目录下的所有邀请列表',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AcceptHandshake' => 
    array (
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
          'name' => 'HandshakeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '邀请ID。

您可以调用[ListHandshakesForAccount](~~160006~~)获取邀请ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'h-Ih8IuPfvV0t0****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5828C836-3286-49A6-9006-15231BB19342',
              ),
              'Handshake' => 
              array (
                'description' => '邀请信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '邀请状态。取值：

- Pending：等待确认。
- Accepted：已接受。
- Cancelled：已取消。
- Declined：已拒绝。
- Expired：超时。',
                    'type' => 'string',
                    'example' => 'Accepted',
                  ),
                  'ExpireTime' => 
                  array (
                    'description' => '邀请的过期时间（UTC时间）。',
                    'type' => 'string',
                    'example' => '2021-01-20T02:15:40Z',
                  ),
                  'ResourceDirectoryId' => 
                  array (
                    'description' => '资源目录ID。',
                    'type' => 'string',
                    'example' => 'rd-3G****',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '邀请的创建时间（UTC时间）。',
                    'type' => 'string',
                    'example' => '2021-01-06T02:15:40Z',
                  ),
                  'Note' => 
                  array (
                    'description' => '备注。',
                    'type' => 'string',
                    'example' => '欢迎您加入',
                  ),
                  'TargetEntity' => 
                  array (
                    'description' => '被邀请的阿里云账号ID或登录邮箱。',
                    'type' => 'string',
                    'example' => '177242285274****',
                  ),
                  'MasterAccountId' => 
                  array (
                    'description' => '资源目录的管理账号ID。',
                    'type' => 'string',
                    'example' => '151266687691****',
                  ),
                  'MasterAccountName' => 
                  array (
                    'description' => '资源目录的管理账号名称。',
                    'type' => 'string',
                    'example' => 'CompanyA',
                  ),
                  'ModifyTime' => 
                  array (
                    'description' => '邀请的修改时间（UTC时间）。',
                    'type' => 'string',
                    'example' => '2021-01-06T02:16:40Z',
                  ),
                  'TargetType' => 
                  array (
                    'description' => '被邀请的阿里云账号类型。取值：

- Account：阿里云账号ID。
- Email：阿里云账号登录邮箱。',
                    'type' => 'string',
                    'example' => 'Account',
                  ),
                  'HandshakeId' => 
                  array (
                    'description' => '邀请ID。',
                    'type' => 'string',
                    'example' => 'h-Ih8IuPfvV0t0****',
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
            'errorCode' => 'MissingParameter.HandshakeId',
            'errorMessage' => 'You must specify HandshakeId.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.HandshakeId',
            'errorMessage' => 'The HandshakeId is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.Handshake',
            'errorMessage' => 'The specified handshake does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'SpecifiedResourceDirectoryNotExists',
            'errorMessage' => 'The specified resource directory does not exist. You must specify a valid resource directory.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'HandshakeStatusMismatch',
            'errorMessage' => 'The invitation is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'NotSupport.AccountInAnotherResourceDirectory',
            'errorMessage' => 'Your account is a management account for another resource directory or a member of another resource directory.',
          ),
          2 => 
          array (
            'errorCode' => 'Invalid.AccountType',
            'errorMessage' => 'The specified profile type of account is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'NotSupport.Account.RealNameType',
            'errorMessage' => 'Your account is not a real-name of enterprise type, so you cannot accept the invitation.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5828C836-3286-49A6-9006-15231BB19342\\",\\n  \\"Handshake\\": {\\n    \\"Status\\": \\"Accepted\\",\\n    \\"ExpireTime\\": \\"2021-01-20T02:15:40Z\\",\\n    \\"ResourceDirectoryId\\": \\"rd-3G****\\",\\n    \\"CreateTime\\": \\"2021-01-06T02:15:40Z\\",\\n    \\"Note\\": \\"欢迎您加入\\",\\n    \\"TargetEntity\\": \\"177242285274****\\",\\n    \\"MasterAccountId\\": \\"151266687691****\\",\\n    \\"MasterAccountName\\": \\"CompanyA\\",\\n    \\"ModifyTime\\": \\"2021-01-06T02:16:40Z\\",\\n    \\"TargetType\\": \\"Account\\",\\n    \\"HandshakeId\\": \\"h-Ih8IuPfvV0t0****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<AcceptHandshakeResponse>\\n    <RequestId>5828C836-3286-49A6-9006-15231BB19342</RequestId>\\n    <Handshake>\\n        <Status>Accepted</Status>\\n        <ModifyTime>2021-01-06T02:16:40Z</ModifyTime>\\n        <ResourceDirectoryId>rd-3G****</ResourceDirectoryId>\\n        <HandshakeId>h-Ih8IuPfvV0t0****</HandshakeId>\\n        <Note>欢迎您加入</Note>\\n        <CreateTime>2021-01-06T02:15:40Z</CreateTime>\\n        <TargetType>Account</TargetType>\\n        <MasterAccountId>151266687691****</MasterAccountId>\\n        <MasterAccountName>CompanyA</MasterAccountName>\\n        <ExpireTime>2021-01-20T02:15:40Z</ExpireTime>\\n        <TargetEntity>177242285274****</TargetEntity>\\n    </Handshake>\\n</AcceptHandshakeResponse>","errorExample":""}]',
      'title' => '被邀请的阿里云账号接受邀请',
      'summary' => '被邀请的阿里云账号调用AcceptHandshake接受邀请。',
      'description' => '被邀请的阿里云账号成功加入资源目录后，会成为资源目录的成员。资源目录默认使用被邀请的阿里云账号名称作为该成员的成员名称和账号名称。

本文将提供一个示例，被邀请的阿里云账号`177242285274****`接受来自资源目录`rd-3G****`的邀请，邀请ID是`h-Ih8IuPfvV0t0****`。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeclineHandshake' => 
    array (
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
          'name' => 'HandshakeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '邀请ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'h-ycm4rp****',
          ),
        ),
      ),
      'responses' => 
      array (
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
                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
              ),
              'Handshake' => 
              array (
                'description' => '邀请信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '邀请状态。取值：

- Pending：等待确认。
- Accepted：已接受。
- Cancelled：已取消。
- Declined：已拒绝。
- Expired：超时。',
                    'type' => 'string',
                    'example' => 'Declined',
                  ),
                  'ExpireTime' => 
                  array (
                    'description' => '邀请的过期时间。',
                    'type' => 'string',
                    'example' => '2018-08-10T09:55:41Z',
                  ),
                  'ResourceDirectoryId' => 
                  array (
                    'description' => '资源目录ID。',
                    'type' => 'string',
                    'example' => 'rd-abcdef****',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '邀请的创建时间。',
                    'type' => 'string',
                    'example' => '2018-08-10T09:55:41Z',
                  ),
                  'Note' => 
                  array (
                    'description' => '备注。',
                    'type' => 'string',
                    'example' => '欢迎您加入',
                  ),
                  'TargetEntity' => 
                  array (
                    'description' => '被邀请账号ID或登录邮箱。',
                    'type' => 'string',
                    'example' => 'someone@example.com',
                  ),
                  'MasterAccountId' => 
                  array (
                    'description' => '资源目录主账号ID。',
                    'type' => 'string',
                    'example' => '172841235500****',
                  ),
                  'MasterAccountName' => 
                  array (
                    'description' => '资源目录主账号名称。',
                    'type' => 'string',
                    'example' => 'Alice',
                  ),
                  'ModifyTime' => 
                  array (
                    'description' => '邀请的修改时间。',
                    'type' => 'string',
                    'example' => '2018-08-10T09:55:41Z',
                  ),
                  'TargetType' => 
                  array (
                    'description' => '被邀请账号类型。取值：

- Account：账号ID。
- Email：账号登录邮箱。',
                    'type' => 'string',
                    'example' => 'Email',
                  ),
                  'HandshakeId' => 
                  array (
                    'description' => '邀请ID。',
                    'type' => 'string',
                    'example' => 'h-ycm4rp****',
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
            'errorCode' => 'MissingParameter.HandshakeId',
            'errorMessage' => 'You must specify HandshakeId.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.HandshakeId',
            'errorMessage' => 'The HandshakeId is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.Handshake',
            'errorMessage' => 'The specified handshake does not exist.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'HandshakeStatusMismatch',
            'errorMessage' => 'The invitation is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\",\\n  \\"Handshake\\": {\\n    \\"Status\\": \\"Declined\\",\\n    \\"ExpireTime\\": \\"2018-08-10T09:55:41Z\\",\\n    \\"ResourceDirectoryId\\": \\"rd-abcdef****\\",\\n    \\"CreateTime\\": \\"2018-08-10T09:55:41Z\\",\\n    \\"Note\\": \\"欢迎您加入\\",\\n    \\"TargetEntity\\": \\"someone@example.com\\",\\n    \\"MasterAccountId\\": \\"172841235500****\\",\\n    \\"MasterAccountName\\": \\"Alice\\",\\n    \\"ModifyTime\\": \\"2018-08-10T09:55:41Z\\",\\n    \\"TargetType\\": \\"Email\\",\\n    \\"HandshakeId\\": \\"h-ycm4rp****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DeclineHandshakeResponse>\\r\\n\\t<RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\r\\n\\t<Handshake>\\r\\n\\t\\t<HandshakeId>h-ycm4rp****</HandshakeId>\\r\\n\\t\\t<ResourceDirectoryId>rd-abcdef****</ResourceDirectoryId>\\r\\n\\t\\t<MasterAccountId>172841235500****</MasterAccountId>\\r\\n\\t\\t<MasterAccountName>Alice</MasterAccountName>\\r\\n\\t\\t<TargetEntity>someone@example.com</TargetEntity>\\r\\n\\t\\t<TargetType>Email</TargetType>\\r\\n\\t\\t<Note>欢迎您加入</Note>\\r\\n\\t\\t<Status>Declined</Status>\\r\\n\\t\\t<CreateTime>2018-08-10T09:55:41Z</CreateTime>\\r\\n\\t\\t<ModifyTime>2018-08-10T09:55:41Z</ModifyTime>\\r\\n\\t\\t<ExpireTime>2018-08-17T09:55:41Z7</ExpireTime>\\r\\n\\t</Handshake>\\r\\n</DeclineHandshakeResponse>\\t\\r\\n","errorExample":""}]',
      'title' => '被邀请的阿里云账号拒绝邀请',
      'summary' => '被邀请的阿里云账号调用DeclineHandshake拒绝邀请。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'EnableControlPolicy' => 
    array (
      'summary' => '调用EnableControlPolicy开启管控策略功能。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
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
              'EnablementStatus' => 
              array (
                'description' => '管控策略状态。取值：

- Enabled：已开启。
- PendingEnable：开启中。
- Disabled：已关闭。
- PendingDisable：关闭中。',
                'type' => 'string',
                'example' => 'PendingEnable',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8CE7BD95-EFFA-4911-A1E0-BD4412697FEB',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'Throttling.EnableControlPolicy',
            'errorMessage' => 'The enable operation is too frequent. Please try again in %s minute(s).',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"EnablementStatus\\": \\"PendingEnable\\",\\n  \\"RequestId\\": \\"8CE7BD95-EFFA-4911-A1E0-BD4412697FEB\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<EnableControlPolicyResponse>\\r\\n\\t<EnablementStatus>PendingEnable</EnablementStatus>\\r\\n\\t<RequestId>8CE7BD95-EFFA-4911-A1E0-BD4412697FEB</RequestId>\\r\\n</EnableControlPolicyResponse>","errorExample":""}]',
      'title' => '开启管控策略功能',
      'description' => '资源目录管控策略是一种基于资源结构（资源夹或成员账号）的访问控制策略，可以统一管理资源目录各层级内资源访问的权限边界，建立企业整体访问控制原则或局部专用原则。管控策略只定义权限边界，并不真正授予权限，您还需要在某个成员账号中使用访问控制（RAM）设置权限后，相应身份才具备对资源的访问权限。更多信息，请参见[管控策略概述](~~178671~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetControlPolicyEnablementStatus' => 
    array (
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
              'EnablementStatus' => 
              array (
                'description' => '管控策略状态。取值：

- Enabled：已开启。
- PendingEnable：开启中。
- Disabled：已关闭。
- PendingDisable：关闭中。',
                'type' => 'string',
                'example' => 'Disabled',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1DC39A4E-3B52-4EFE-9F93-4897D7FFA0C4',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"EnablementStatus\\": \\"Disabled\\",\\n  \\"RequestId\\": \\"1DC39A4E-3B52-4EFE-9F93-4897D7FFA0C4\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<GetControlPolicyEnablementStatusResponse>\\r\\n\\t<EnablementStatus>Disabled</EnablementStatus>\\r\\n\\t<RequestId>1DC39A4E-3B52-4EFE-9F93-4897D7FFA0C4</RequestId>\\r\\n</GetControlPolicyEnablementStatusResponse>","errorExample":""}]',
      'title' => '查询管控策略功能的开启或关闭状态',
      'summary' => '调用GetControlPolicyEnablementStatus查询管控策略功能的开启或关闭状态。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DisableControlPolicy' => 
    array (
      'summary' => '调用DisableControlPolicy关闭管控策略功能。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
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
              'EnablementStatus' => 
              array (
                'description' => '管控策略状态。取值：

- Enabled：已开启。
- PendingEnable：开启中。
- Disabled：已关闭。
- PendingDisable：关闭中。',
                'type' => 'string',
                'example' => 'PendingDisable',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7C709979-451D-4C92-835D-7DDCCAA562E9',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"EnablementStatus\\": \\"PendingDisable\\",\\n  \\"RequestId\\": \\"7C709979-451D-4C92-835D-7DDCCAA562E9\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DisableControlPolicyResponse>\\r\\n\\t<EnablementStatus>PendingDisable</EnablementStatus>\\r\\n\\t<RequestId>7C709979-451D-4C92-835D-7DDCCAA562E9</RequestId>\\r\\n</DisableControlPolicyResponse>\\t\\r\\n","errorExample":""}]',
      'title' => '关闭管控策略功能',
      'description' => '关闭管控策略功能后，您绑定到资源夹和成员账号上的管控策略会全部自动解绑。但管控策略本身不会被删除，只是不能再绑定到任何目标节点上。

> 关闭管控策略将会影响整个资源目录内资源夹和成员账号的权限，请谨慎操作。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateControlPolicy' => 
    array (
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
          'name' => 'PolicyName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '管控策略名称。

长度为1~128个字符，必须以英文字母开头，可以包含英文字母、数字和短划线（-）。',
            'type' => 'string',
            'required' => true,
            'example' => 'ExampleControlPolicy',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '管控策略描述。

长度为1~1024个字符，必须以英文字母开头，可以包含英文字母、数字、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'ExampleControlPolicy',
          ),
        ),
        2 => 
        array (
          'name' => 'EffectScope',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '管控策略的生效范围。

取值：RAM，表示该管控策略仅针对RAM用户或RAM角色生效。

',
            'type' => 'string',
            'required' => true,
            'example' => 'RAM',
          ),
        ),
        3 => 
        array (
          'name' => 'PolicyDocument',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '管控策略内容。

最大长度为4096个字符。

管控策略语言，请参见[管控策略语言](~~179096~~)。

管控策略示例，请参见[自定义管控策略示例](~~181474~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '{"Version":"1","Statement":[{"Effect":"Deny","Action":["ram:UpdateRole","ram:DeleteRole","ram:AttachPolicyToRole","ram:DetachPolicyFromRole"],"Resource":"acs:ram:*:*:role/ResourceDirectoryAccountAccessRole"}]}',
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
              'ControlPolicy' => 
              array (
                'description' => '管控策略详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'UpdateDate' => 
                  array (
                    'description' => '管控策略更新时间。',
                    'type' => 'string',
                    'example' => '2021-03-18T09:24:19Z',
                  ),
                  'Description' => 
                  array (
                    'description' => '管控策略描述。',
                    'type' => 'string',
                    'example' => 'ExampleControlPolicy',
                  ),
                  'EffectScope' => 
                  array (
                    'description' => '管控策略生效范围。


取值：RAM，表示该管控策略仅针对RAM用户或RAM角色生效。',
                    'type' => 'string',
                    'example' => 'RAM',
                  ),
                  'AttachmentCount' => 
                  array (
                    'description' => '管控策略被引用的次数。',
                    'type' => 'string',
                    'example' => '0',
                  ),
                  'PolicyName' => 
                  array (
                    'description' => '管控策略名称。',
                    'type' => 'string',
                    'example' => 'ExampleControlPolicy',
                  ),
                  'PolicyId' => 
                  array (
                    'description' => '管控策略ID。',
                    'type' => 'string',
                    'example' => 'cp-jExXAqIYkwHN****',
                  ),
                  'CreateDate' => 
                  array (
                    'description' => '管控策略创建时间。',
                    'type' => 'string',
                    'example' => '2021-03-18T09:24:19Z',
                  ),
                  'PolicyType' => 
                  array (
                    'description' => '管控策略类型。取值：

- System：系统管控策略。
- Custom：自定义管控策略。',
                    'type' => 'string',
                    'example' => 'Custom',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '776B05B3-A0B0-464B-A191-F4E1119A94B2',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.PolicyDocument.Length',
            'errorMessage' => 'The maximum length of the policy document is exceeded. It must not exceed 4096 characters.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ControlPolicy\\": {\\n    \\"UpdateDate\\": \\"2021-03-18T09:24:19Z\\",\\n    \\"Description\\": \\"ExampleControlPolicy\\",\\n    \\"EffectScope\\": \\"RAM\\",\\n    \\"AttachmentCount\\": \\"0\\",\\n    \\"PolicyName\\": \\"ExampleControlPolicy\\",\\n    \\"PolicyId\\": \\"cp-jExXAqIYkwHN****\\",\\n    \\"CreateDate\\": \\"2021-03-18T09:24:19Z\\",\\n    \\"PolicyType\\": \\"Custom\\"\\n  },\\n  \\"RequestId\\": \\"776B05B3-A0B0-464B-A191-F4E1119A94B2\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<CreateControlPolicyResponse>\\r\\n\\t<ControlPolicy>\\r\\n\\t\\t<PolicyType>Custom</PolicyType>\\r\\n\\t\\t<UpdateDate>2021-03-18T09:24:19Z</UpdateDate>\\r\\n\\t\\t<Description>ExampleControlPolicy</Description>\\r\\n\\t\\t<AttachmentCount>0</AttachmentCount>\\r\\n\\t\\t<PolicyName>ExampleControlPolicy</PolicyName>\\r\\n\\t\\t<CreateDate>2021-03-18T09:24:19Z</CreateDate>\\r\\n\\t\\t<PolicyId>cp-jExXAqIYkwHN****</PolicyId>\\r\\n\\t\\t<EffectScope>RAM</EffectScope>\\r\\n\\t</ControlPolicy>\\r\\n\\t<RequestId>776B05B3-A0B0-464B-A191-F4E1119A94B2</RequestId>\\r\\n</CreateControlPolicyResponse>\\t\\r\\n","errorExample":""}]',
      'title' => '创建自定义管控策略',
      'summary' => '调用CreateControlPolicy创建自定义管控策略。',
      'description' => '本文将提供一个示例，创建一个名为`ExampleControlPolicy`的管控策略，禁止修改ResourceDirectoryAccountAccessRole角色及其权限。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetControlPolicy' => 
    array (
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
            'description' => '管控策略ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cp-SImPt8GCEwiq****',
          ),
        ),
        1 => 
        array (
          'name' => 'Language',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定返回结果中管控策略描述的语言。取值：

- zh-CN（默认值）：中文。
- en：英文。
- ja：日文。

> 该参数仅在系统管控策略时有效。',
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
              'ControlPolicy' => 
              array (
                'description' => '管控策略详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'PolicyDocument' => 
                  array (
                    'description' => '管控策略内容。',
                    'type' => 'string',
                    'example' => '{\\"Version\\":\\"1\\",\\"Statement\\":[{\\"Effect\\":\\"Deny\\",\\"Action\\":[\\"ram:UpdateRole\\",\\"ram:DeleteRole\\",\\"ram:AttachPolicyToRole\\",\\"ram:DetachPolicyFromRole\\"],\\"Resource\\":\\"acs:ram:*:*:role/ResourceDirectoryAccountAccessRole\\"}]}',
                  ),
                  'UpdateDate' => 
                  array (
                    'description' => '管控策略更新时间。',
                    'type' => 'string',
                    'example' => '2021-03-18T08:51:33Z',
                  ),
                  'Description' => 
                  array (
                    'description' => '管控策略描述。',
                    'type' => 'string',
                    'example' => 'ExampleControlPolicy',
                  ),
                  'EffectScope' => 
                  array (
                    'description' => '管控策略生效范围。取值：

- All：表示该管控策略针对阿里云账号、RAM用户或RAM角色生效。
- RAM：表示该管控策略仅针对RAM用户或RAM角色生效。',
                    'type' => 'string',
                    'example' => 'RAM',
                  ),
                  'AttachmentCount' => 
                  array (
                    'description' => '管控策略被引用的次数。',
                    'type' => 'string',
                    'example' => '0',
                  ),
                  'PolicyName' => 
                  array (
                    'description' => '管控策略名称。',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'PolicyId' => 
                  array (
                    'description' => '管控策略ID。',
                    'type' => 'string',
                    'example' => 'cp-SImPt8GCEwiq****',
                  ),
                  'CreateDate' => 
                  array (
                    'description' => '管控策略创建时间。',
                    'type' => 'string',
                    'example' => '2021-03-18T08:51:33Z',
                  ),
                  'PolicyType' => 
                  array (
                    'description' => '管控策略类型。取值：

- System：系统管控策略。
- Custom：自定义管控策略。',
                    'type' => 'string',
                    'example' => 'Custom',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'AB769936-CDFA-4D52-8CE2-A3581800044A',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ControlPolicy\\": {\\n    \\"PolicyDocument\\": \\"{\\\\\\\\\\\\\\"Version\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"1\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"Statement\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"Effect\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"Deny\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"Action\\\\\\\\\\\\\\":[\\\\\\\\\\\\\\"ram:UpdateRole\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"ram:DeleteRole\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"ram:AttachPolicyToRole\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"ram:DetachPolicyFromRole\\\\\\\\\\\\\\"],\\\\\\\\\\\\\\"Resource\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"acs:ram:*:*:role/ResourceDirectoryAccountAccessRole\\\\\\\\\\\\\\"}]}\\",\\n    \\"UpdateDate\\": \\"2021-03-18T08:51:33Z\\",\\n    \\"Description\\": \\"ExampleControlPolicy\\",\\n    \\"EffectScope\\": \\"RAM\\",\\n    \\"AttachmentCount\\": \\"0\\",\\n    \\"PolicyName\\": \\"test\\",\\n    \\"PolicyId\\": \\"cp-SImPt8GCEwiq****\\",\\n    \\"CreateDate\\": \\"2021-03-18T08:51:33Z\\",\\n    \\"PolicyType\\": \\"Custom\\"\\n  },\\n  \\"RequestId\\": \\"AB769936-CDFA-4D52-8CE2-A3581800044A\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<GetControlPolicyResponse>\\r\\n\\t<ControlPolicy>\\r\\n\\t\\t<PolicyType>Custom</PolicyType>\\r\\n\\t\\t<UpdateDate>2021-03-18T08:51:33Z</UpdateDate>\\r\\n\\t\\t<Description>ExampleControlPolicy</Description>\\r\\n\\t\\t<AttachmentCount>0</AttachmentCount>\\r\\n\\t\\t<PolicyName>test</PolicyName>\\r\\n\\t\\t<PolicyDocument>{&quot;Version&quot;:&quot;1&quot;,&quot;Statement&quot;:[{&quot;Effect&quot;:&quot;Deny&quot;,&quot;Action&quot;:[&quot;ram:UpdateRole&quot;,&quot;ram:DeleteRole&quot;,&quot;ram:AttachPolicyToRole&quot;,&quot;ram:DetachPolicyFromRole&quot;],&quot;Resource&quot;:&quot;acs:ram:*:*:role/ResourceDirectoryAccountAccessRole&quot;}]}</PolicyDocument>\\r\\n\\t\\t<CreateDate>2021-03-18T08:51:33Z</CreateDate>\\r\\n\\t\\t<PolicyId>cp-SImPt8GCEwiq****</PolicyId>\\r\\n\\t\\t<EffectScope>RAM</EffectScope>\\r\\n\\t</ControlPolicy>\\r\\n\\t<RequestId>AB769936-CDFA-4D52-8CE2-A3581800044A</RequestId>\\r\\n</GetControlPolicyResponse>\\t\\r\\n","errorExample":""}]',
      'title' => '查询管控策略详情',
      'summary' => '调用GetControlPolicy查询管控策略的详情。',
      'description' => '本文将提供一个示例，查询ID为`cp-SImPt8GCEwiq****`的管控策略详情。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateControlPolicy' => 
    array (
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
          'name' => 'PolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '管控策略ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cp-jExXAqIYkwHN****',
          ),
        ),
        1 => 
        array (
          'name' => 'NewPolicyName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新的管控策略名称。

长度为1~128个字符，必须以英文字母开头，可以包含英文字母、数字和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'NewControlPolicy',
          ),
        ),
        2 => 
        array (
          'name' => 'NewDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新的管控策略描述。

长度为1~1024个字符，必须以英文字母开头，可以包含英文字母、数字、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'ExampleControlPolicy',
          ),
        ),
        3 => 
        array (
          'name' => 'NewPolicyDocument',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新的管控策略内容。

最大长度为4096个字符。

管控策略语言，请参见[管控策略语言](~~179096~~)。

管控策略示例，请参见[自定义管控策略示例](~~181474~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '{"Version":"1","Statement":[{"Effect":"Deny","Action":["ram:UpdateRole","ram:DeleteRole","ram:AttachPolicyToRole","ram:DetachPolicyFromRole"],"Resource":"acs:ram:*:*:role/ResourceDirectoryAccountAccessRole"}]}',
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
              'ControlPolicy' => 
              array (
                'description' => '管控策略详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'UpdateDate' => 
                  array (
                    'description' => '管控策略更新时间。',
                    'type' => 'string',
                    'example' => '2021-03-18T10:04:55Z',
                  ),
                  'Description' => 
                  array (
                    'description' => '管控策略描述。',
                    'type' => 'string',
                    'example' => 'ExampleControlPolicy',
                  ),
                  'EffectScope' => 
                  array (
                    'description' => '管控策略生效范围。取值：

- All：表示该管控策略针对阿里云账号、RAM用户或RAM角色生效。
- RAM：表示该管控策略仅针对RAM用户或RAM角色生效。',
                    'type' => 'string',
                    'example' => 'RAM',
                  ),
                  'AttachmentCount' => 
                  array (
                    'description' => '管控策略被引用的次数。',
                    'type' => 'string',
                    'example' => '0',
                  ),
                  'PolicyName' => 
                  array (
                    'description' => '管控策略名称。',
                    'type' => 'string',
                    'example' => 'NewControlPolicy',
                  ),
                  'PolicyId' => 
                  array (
                    'description' => '管控策略ID。',
                    'type' => 'string',
                    'example' => 'cp-jExXAqIYkwHN****',
                  ),
                  'CreateDate' => 
                  array (
                    'description' => '管控策略创建时间。',
                    'type' => 'string',
                    'example' => '2021-03-18T09:24:19Z',
                  ),
                  'PolicyType' => 
                  array (
                    'description' => '管控策略类型。取值：

- System：系统管控策略。
- Custom：自定义管控策略。',
                    'type' => 'string',
                    'example' => 'Custom',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2DFCE4C9-04A9-4C83-BB14-FE791275EC53',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.NewPolicyDocument.Length',
            'errorMessage' => 'Unable to save your policy. A policy contains a maximum of 4096 characters.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ControlPolicy\\": {\\n    \\"UpdateDate\\": \\"2021-03-18T10:04:55Z\\",\\n    \\"Description\\": \\"ExampleControlPolicy\\",\\n    \\"EffectScope\\": \\"RAM\\",\\n    \\"AttachmentCount\\": \\"0\\",\\n    \\"PolicyName\\": \\"NewControlPolicy\\",\\n    \\"PolicyId\\": \\"cp-jExXAqIYkwHN****\\",\\n    \\"CreateDate\\": \\"2021-03-18T09:24:19Z\\",\\n    \\"PolicyType\\": \\"Custom\\"\\n  },\\n  \\"RequestId\\": \\"2DFCE4C9-04A9-4C83-BB14-FE791275EC53\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<UpdateControlPolicyResponse>\\r\\n\\t<ControlPolicy>\\r\\n\\t\\t<PolicyType>Custom</PolicyType>\\r\\n\\t\\t<UpdateDate>2021-03-18T10:04:55Z</UpdateDate>\\r\\n\\t\\t<Description>ExampleControlPolicy</Description>\\r\\n\\t\\t<AttachmentCount>0</AttachmentCount>\\r\\n\\t\\t<PolicyName>NewControlPolicy</PolicyName>\\r\\n\\t\\t<CreateDate>2021-03-18T09:24:19Z</CreateDate>\\r\\n\\t\\t<PolicyId>cp-jExXAqIYkwHN****</PolicyId>\\r\\n\\t\\t<EffectScope>RAM</EffectScope>\\r\\n\\t</ControlPolicy>\\r\\n\\t<RequestId>2DFCE4C9-04A9-4C83-BB14-FE791275EC53</RequestId>\\r\\n</UpdateControlPolicyResponse>\\t\\r\\n","errorExample":""}]',
      'title' => '修改自定义管控策略',
      'summary' => '调用UpdateControlPolicy修改自定义管控策略。',
      'description' => '本文将提供一个示例，修改管控策略`cp-jExXAqIYkwHN****`的名称为`NewControlPolicy`。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteControlPolicy' => 
    array (
      'summary' => '调用DeleteControlPolicy删除自定义管控策略。',
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
          'name' => 'PolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '管控策略ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cp-SImPt8GCEwiq****',
          ),
        ),
      ),
      'responses' => 
      array (
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
                'example' => 'C8541E06-B207-46BF-92C9-DC8DE4609D75',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C8541E06-B207-46BF-92C9-DC8DE4609D75\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DeleteControlPolicyResponse>\\r\\n\\t<RequestId>C8541E06-B207-46BF-92C9-DC8DE4609D75</RequestId>\\r\\n</DeleteControlPolicyResponse>\\t\\r\\n","errorExample":""}]',
      'title' => '删除自定义管控策略',
      'description' => '对于已绑定了资源夹或成员账号的自定义管控策略，需要先调用[DetachControlPolicy](~~208331~~)解绑，然后才能删除。

本文将提供一个示例，删除自定义管控策略`cp-SImPt8GCEwiq****`。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AttachControlPolicy' => 
    array (
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
          'name' => 'PolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '管控策略ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cp-jExXAqIYkwHN****',
          ),
        ),
        1 => 
        array (
          'name' => 'TargetId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标节点。取值：

- Root ID：为Root资源夹绑定管控策略。
- 资源夹ID：为资源夹绑定管控策略。
- 成员ID：为成员绑定管控策略。',
            'type' => 'string',
            'required' => true,
            'example' => 'fd-ZDNPiT****',
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
                'example' => '95060F1D-6990-4645-8920-A81D1BBFE992',
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
            'errorCode' => 'EntityNotExists.Target',
            'errorMessage' => 'The specified target does not exist in the resource directory.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"95060F1D-6990-4645-8920-A81D1BBFE992\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<AttachControlPolicyResponse>\\r\\n\\t<RequestId>95060F1D-6990-4645-8920-A81D1BBFE992</RequestId>\\r\\n</AttachControlPolicyResponse>","errorExample":""}]',
      'title' => '绑定自定义管控策略',
      'summary' => '调用AttachControlPolicy绑定管控策略。',
      'description' => '绑定成功后，资源夹或成员将会立即受到管控策略的管控。请务必确定绑定操作的结果是符合预期的，以免影响您的业务正常运行。

系统会默认为资源夹和成员绑定系统策略FullAliyunAccess。

管控策略在绑定节点下整体生效，即父资源夹绑定的管控策略，会在其子资源夹及其成员上生效。

每个节点（资源夹、成员）最多允许绑定10条管控策略。

本文将提供一个示例，为资源夹`fd-ZDNPiT****`绑定自定义策略`cp-jExXAqIYkwHN****`。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DetachControlPolicy' => 
    array (
      'summary' => '调用DetachControlPolicy解绑管控策略。',
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
          'name' => 'PolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '管控策略ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cp-jExXAqIYkwHN****',
          ),
        ),
        1 => 
        array (
          'name' => 'TargetId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标节点。取值：

- Root ID：为Root资源夹解绑管控策略。
- 资源夹ID：为资源夹解绑管控策略。
- 成员ID：为成员解绑管控策略。',
            'type' => 'string',
            'required' => true,
            'example' => 'fd-ZDNPiT****',
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
                'example' => '9EA4F962-1A2E-4AFE-BE0C-B14736FC46CC',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'NotSupport.DetachLastControlPolicy',
            'errorMessage' => 'It is not detach the last control policy on the target node.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.Target',
            'errorMessage' => 'The specified target does not exist in the resource directory.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9EA4F962-1A2E-4AFE-BE0C-B14736FC46CC\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DetachControlPolicyResponse>\\r\\n\\t<RequestId>9EA4F962-1A2E-4AFE-BE0C-B14736FC46CC</RequestId>\\r\\n</DetachControlPolicyResponse>\\t\\r\\n","errorExample":""}]',
      'title' => '解绑自定义管控策略',
      'description' => '解绑成功后，原绑定的资源夹或成员将会立即失去管控策略的管控。请务必确定解绑操作的结果是符合预期的，以免影响您的业务正常运行。

系统策略和自定义管控策略都可以解绑，但资源夹或成员上绑定的最后一条管控策略不允许解绑。

本文将提供一个示例，为资源夹`fd-ZDNPiT****`解绑自定义策略`cp-jExXAqIYkwHN****`。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListControlPolicies' => 
    array (
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PolicyType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '管控策略类型。取值：

- System：系统管控策略。
- Custom：自定义管控策略。',
            'type' => 'string',
            'required' => false,
            'example' => 'System',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。

起始值：1。默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '200000',
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
            'description' => '分页时每页显示的数据条数。

取值范围：1~100。默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'Language',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定返回结果中管控策略描述的语言。取值：

- zh-CN（默认值）：中文。
- en：英文。
- ja：日文。

> 该参数仅在系统管控策略时有效。',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '管控策略数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9424A34C-3471-45AD-B6AB-924BBDFE42F9',
              ),
              'PageSize' => 
              array (
                'description' => '分页时每页显示的数据条数。',
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
              'ControlPolicies' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ControlPolicy' => 
                  array (
                    'description' => '管控策略列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '管控策略列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'UpdateDate' => 
                        array (
                          'description' => '管控策略更新时间。',
                          'type' => 'string',
                          'example' => '2020-08-05T06:32:24Z',
                        ),
                        'Description' => 
                        array (
                          'description' => '管控策略描述。',
                          'type' => 'string',
                          'example' => '支持阿里云所有操作的系统管控策略',
                        ),
                        'EffectScope' => 
                        array (
                          'description' => '管控策略生效范围。取值：

- All：表示该管控策略针对阿里云账号、RAM用户或RAM角色生效。
- RAM：表示该管控策略仅针对RAM用户或RAM角色生效。
',
                          'type' => 'string',
                          'example' => 'All',
                        ),
                        'AttachmentCount' => 
                        array (
                          'description' => '管控策略被引用的次数。',
                          'type' => 'string',
                          'example' => '44',
                        ),
                        'PolicyName' => 
                        array (
                          'description' => '管控策略名称。',
                          'type' => 'string',
                          'example' => 'FullAliyunAccess',
                        ),
                        'PolicyId' => 
                        array (
                          'description' => '管控策略ID。',
                          'type' => 'string',
                          'example' => 'cp-FullAliyunAccess',
                        ),
                        'CreateDate' => 
                        array (
                          'description' => '管控策略创建时间。',
                          'type' => 'string',
                          'example' => '2020-08-05T06:32:24Z',
                        ),
                        'PolicyType' => 
                        array (
                          'description' => '管控策略类型。取值：

- System：系统管控策略。
- Custom：自定义管控策略。',
                          'type' => 'string',
                          'example' => 'System',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"9424A34C-3471-45AD-B6AB-924BBDFE42F9\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"ControlPolicies\\": {\\n    \\"ControlPolicy\\": [\\n      {\\n        \\"UpdateDate\\": \\"2020-08-05T06:32:24Z\\",\\n        \\"Description\\": \\"支持阿里云所有操作的系统管控策略\\",\\n        \\"EffectScope\\": \\"All\\",\\n        \\"AttachmentCount\\": \\"44\\",\\n        \\"PolicyName\\": \\"FullAliyunAccess\\",\\n        \\"PolicyId\\": \\"cp-FullAliyunAccess\\",\\n        \\"CreateDate\\": \\"2020-08-05T06:32:24Z\\",\\n        \\"PolicyType\\": \\"System\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ListControlPoliciesResponse>\\r\\n\\t<TotalCount>1</TotalCount>\\r\\n\\t<RequestId>9424A34C-3471-45AD-B6AB-924BBDFE42F9</RequestId>\\r\\n\\t<PageSize>10</PageSize>\\r\\n\\t<PageNumber>1</PageNumber>\\r\\n\\t<ControlPolicies>\\r\\n\\t\\t<ControlPolicy>\\r\\n\\t\\t\\t<PolicyType>System</PolicyType>\\r\\n\\t\\t\\t<UpdateDate>2020-08-05T06:32:24Z</UpdateDate>\\r\\n\\t\\t\\t<Description>支持阿里云所有操作的系统管控策略</Description>\\r\\n\\t\\t\\t<AttachmentCount>44</AttachmentCount>\\r\\n\\t\\t\\t<PolicyName>FullAliyunAccess</PolicyName>\\r\\n\\t\\t\\t<CreateDate>2020-08-05T06:32:24Z</CreateDate>\\r\\n\\t\\t\\t<PolicyId>cp-FullAliyunAccess</PolicyId>\\r\\n\\t\\t\\t<EffectScope>All</EffectScope>\\r\\n\\t\\t</ControlPolicy>\\r\\n\\t</ControlPolicies>\\r\\n</ListControlPoliciesResponse>\\t\\r\\n","errorExample":""}]',
      'title' => '查询管控策略列表',
      'summary' => '调用ListControlPolicies查询管控策略列表。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListControlPolicyAttachmentsForTarget' => 
    array (
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TargetId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标节点。取值：

- Root ID：查询Root节点绑定的管控策略。
- 资源夹ID：查询资源夹绑定的管控策略。
- 成员ID：查询成员绑定的管控策略。',
            'type' => 'string',
            'required' => true,
            'example' => 'fd-ZDNPiT****',
          ),
        ),
        1 => 
        array (
          'name' => 'Language',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定返回结果中管控策略描述的语言。取值：

- zh-CN（默认值）：中文。
- en：英文。
- ja：日文。

> 该参数仅在系统管控策略时有效。',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C276B600-7B7A-49E8-938C-E16CFA955A82',
              ),
              'ControlPolicyAttachments' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ControlPolicyAttachment' => 
                  array (
                    'description' => '已绑定的管控策略列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '已绑定的管控策略列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Description' => 
                        array (
                          'description' => '管控策略描述。',
                          'type' => 'string',
                          'example' => 'ExampleControlPolicy',
                        ),
                        'EffectScope' => 
                        array (
                          'description' => '管控策略生效范围。取值：

- All：表示该管控策略针对阿里云账号、RAM用户或RAM角色生效。
- RAM：表示该管控策略仅针对RAM用户或RAM角色生效。',
                          'type' => 'string',
                          'example' => 'RAM',
                        ),
                        'PolicyName' => 
                        array (
                          'description' => '管控策略名称。',
                          'type' => 'string',
                          'example' => 'ExampleControlPolicy',
                        ),
                        'PolicyId' => 
                        array (
                          'description' => '管控策略ID。',
                          'type' => 'string',
                          'example' => 'cp-jExXAqIYkwHN****',
                        ),
                        'AttachDate' => 
                        array (
                          'description' => '绑定管控策略的时间。',
                          'type' => 'string',
                          'example' => '2021-03-19T02:56:24Z',
                        ),
                        'PolicyType' => 
                        array (
                          'description' => '管控策略类型。取值：

- System：系统管控策略。
- Custom：自定义管控策略。',
                          'type' => 'string',
                          'example' => 'Custom',
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.Target',
            'errorMessage' => 'The specified target does not exist in the resource directory.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C276B600-7B7A-49E8-938C-E16CFA955A82\\",\\n  \\"ControlPolicyAttachments\\": {\\n    \\"ControlPolicyAttachment\\": [\\n      {\\n        \\"Description\\": \\"ExampleControlPolicy\\",\\n        \\"EffectScope\\": \\"RAM\\",\\n        \\"PolicyName\\": \\"ExampleControlPolicy\\",\\n        \\"PolicyId\\": \\"cp-jExXAqIYkwHN****\\",\\n        \\"AttachDate\\": \\"2021-03-19T02:56:24Z\\",\\n        \\"PolicyType\\": \\"Custom\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ListControlPolicyAttachmentsForTargetResponse>\\r\\n\\t<RequestId>C276B600-7B7A-49E8-938C-E16CFA955A82</RequestId>\\r\\n\\t<ControlPolicyAttachments>\\r\\n\\t\\t<ControlPolicyAttachment>\\r\\n\\t\\t\\t<PolicyType>System</PolicyType>\\r\\n\\t\\t\\t<Description>支持阿里云所有操作的系统管控策略</Description>\\r\\n\\t\\t\\t<AttachDate>2021-03-18T07:27:59Z</AttachDate>\\r\\n\\t\\t\\t<PolicyName>FullAliyunAccess</PolicyName>\\r\\n\\t\\t\\t<PolicyId>cp-FullAliyunAccess</PolicyId>\\r\\n\\t\\t</ControlPolicyAttachment>\\r\\n\\t\\t<ControlPolicyAttachment>\\r\\n\\t\\t\\t<PolicyType>Custom</PolicyType>\\r\\n\\t\\t\\t<Description>ExampleControlPolicy</Description>\\r\\n\\t\\t\\t<AttachDate>2021-03-19T02:56:24Z</AttachDate>\\r\\n\\t\\t\\t<PolicyName>ExampleControlPolicy</PolicyName>\\r\\n\\t\\t\\t<PolicyId>cp-jExXAqIYkwHN****</PolicyId>\\r\\n\\t\\t</ControlPolicyAttachment>\\r\\n\\t</ControlPolicyAttachments>\\r\\n</ListControlPolicyAttachmentsForTargetResponse>\\t\\r\\n","errorExample":""}]',
      'title' => '查询节点绑定的管控策略',
      'summary' => '调用ListControlPolicyAttachmentsForTarget查询资源夹或成员账号绑定的管控策略列表。',
      'description' => '本文将提供一个示例，查询资源夹`fd-ZDNPiT****`绑定的管控策略列表。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListTargetAttachmentsForControlPolicy' => 
    array (
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '管控策略ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cp-jExXAqIYkwHN****',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。

起始值：1。默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '200000',
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
            'description' => '分页时每页显示的数据条数。

取值范围：1~100。默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
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
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '绑定的目标节点数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B32BD3D6-1089-41F3-8E70-E0079BC7D760',
              ),
              'PageSize' => 
              array (
                'description' => '分页时每页显示的数据条数。',
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
              'TargetAttachments' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'TargetAttachment' => 
                  array (
                    'description' => '绑定的目标节点列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '绑定的目标节点列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TargetId' => 
                        array (
                          'description' => '绑定的目标节点ID。',
                          'type' => 'string',
                          'example' => 'fd-ZDNPiT****',
                        ),
                        'TargetName' => 
                        array (
                          'description' => '绑定的目标节点名称。',
                          'type' => 'string',
                          'example' => 'Dev_Department',
                        ),
                        'AttachDate' => 
                        array (
                          'description' => '管控策略绑定时间。',
                          'type' => 'string',
                          'example' => '2021-03-19T02:56:24Z',
                        ),
                        'TargetType' => 
                        array (
                          'description' => '绑定的目标节点类型。取值：

- Root：Root节点。
- Folder：资源夹。
- Account：成员账号。',
                          'type' => 'string',
                          'example' => 'Folder',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"B32BD3D6-1089-41F3-8E70-E0079BC7D760\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"TargetAttachments\\": {\\n    \\"TargetAttachment\\": [\\n      {\\n        \\"TargetId\\": \\"fd-ZDNPiT****\\",\\n        \\"TargetName\\": \\"Dev_Department\\",\\n        \\"AttachDate\\": \\"2021-03-19T02:56:24Z\\",\\n        \\"TargetType\\": \\"Folder\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ListTargetAttachmentsForControlPolicyResponse>\\r\\n\\t<TotalCount>1</TotalCount>\\r\\n\\t<RequestId>B32BD3D6-1089-41F3-8E70-E0079BC7D760</RequestId>\\r\\n\\t<PageSize>10</PageSize>\\r\\n\\t<PageNumber>1</PageNumber>\\r\\n\\t<TargetAttachments>\\r\\n\\t\\t<TargetAttachment>\\r\\n\\t\\t\\t<AttachDate>2021-03-19T02:56:24Z</AttachDate>\\r\\n\\t\\t\\t<TargetType>Folder</TargetType>\\r\\n\\t\\t\\t<TargetName>Dev_Department</TargetName>\\r\\n\\t\\t\\t<TargetId>fd-ZDNPiT****</TargetId>\\r\\n\\t\\t</TargetAttachment>\\r\\n\\t</TargetAttachments>\\r\\n</ListTargetAttachmentsForControlPolicyResponse>\\t\\r\\n\\r\\n\\t\\r\\n","errorExample":""}]',
      'title' => '查询管控策略绑定的节点',
      'summary' => '调用ListTargetAttachmentsForControlPolicy查询管控策略绑定的节点。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListTrustedServiceStatus' => 
    array (
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。

起始值：1。默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
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
            'description' => '分页时每页显示的数据行数。

取值范围：1~100。默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'AdminAccountId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '管理账号或委派管理员账号。取值：
- 管理账号（默认值）：查询管理账号已启用的可信服务列表。
- 委派管理员账号：查询委派管理员账号已启用的可信服务列表。

关于可信服务和委派管理员账号的更多信息，请参见[可信服务概述](~~208133~~)和[管理委派管理员账号](~~208117~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '177242285274****',
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
              'TotalCount' => 
              array (
                'description' => '数据总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CD76D376-2517-4924-92C5-DBC52262F93A',
              ),
              'PageSize' => 
              array (
                'description' => '分页时每页显示的数据行数。',
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
              'EnabledServicePrincipals' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'EnabledServicePrincipal' => 
                  array (
                    'description' => '已启用的可信服务列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '已启用的可信服务列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ServicePrincipal' => 
                        array (
                          'description' => '可信服务标识。',
                          'type' => 'string',
                          'example' => 'config.aliyuncs.com',
                        ),
                        'EnableTime' => 
                        array (
                          'description' => '启用可信服务的时间。',
                          'type' => 'string',
                          'example' => '2019-02-18T15:32:10.473Z',
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 2,\\n  \\"RequestId\\": \\"CD76D376-2517-4924-92C5-DBC52262F93A\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"EnabledServicePrincipals\\": {\\n    \\"EnabledServicePrincipal\\": [\\n      {\\n        \\"ServicePrincipal\\": \\"config.aliyuncs.com\\",\\n        \\"EnableTime\\": \\"2019-02-18T15:32:10.473Z\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ListTrustedServiceStatusResponse>\\r\\n    <EnabledServicePrincipal>\\r\\n        <ServicePrincipal>config.aliyuncs.com</ServicePrincipal>\\r\\n        <EnableTime>2019-02-18T15:32:10.473Z</EnableTime>\\r\\n    </EnabledServicePrincipal>\\r\\n    <EnabledServicePrincipal>\\r\\n        <ServicePrincipal>actiontrail.aliyuncs.com</ServicePrincipal>\\r\\n        <EnableTime>2019-02-16T15:32:10.473Z</EnableTime>\\r\\n    </EnabledServicePrincipal>\\r\\n    <RequestId>CD76D376-2517-4924-92C5-DBC52262F93A</RequestId>\\r\\n</ListTrustedServiceStatusResponse>","errorExample":""}]',
      'title' => '查询已启用的可信服务列表',
      'summary' => '调用ListTrustedServiceStatus查询管理账号或委派管理员账号已启用的可信服务列表。',
      'description' => '> 该接口仅限管理账号或委派管理员账号使用。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RegisterDelegatedAdministrator' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'AccountId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源目录中的成员账号UID。',
            'type' => 'string',
            'required' => true,
            'example' => '181761095690****',
          ),
        ),
        1 => 
        array (
          'name' => 'ServicePrincipal',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可信服务的标识。

具体信息，请参见[支持的可信服务](~~208133~~)中的`可信服务标识`列。',
            'type' => 'string',
            'required' => true,
            'example' => 'cloudfw.aliyuncs.com',
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
                'example' => '0A45FC8F-54D2-4A65-8338-25E5DEBDA304',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.ServicePrincipal',
            'errorMessage' => 'The specified ServicePrincipal is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'AccountAlreadyRegistered',
            'errorMessage' => 'The specified account is already a delegated administrator for this service.',
          ),
          2 => 
          array (
            'errorCode' => 'DelegatedAccountNumberExceeded',
            'errorMessage' => 'The maximum number of delegated administrators for the service principal is exceeded.',
          ),
          3 => 
          array (
            'errorCode' => 'CannotRegisterMasterAsDelegatedAdministrator',
            'errorMessage' => 'You attempted to register the enterprise management account as a delegated administrator for the service. You can designate only a member account as a delegated administrator.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0A45FC8F-54D2-4A65-8338-25E5DEBDA304\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<RegisterDelegatedAdministratorResponse>\\r\\n\\t<RequestId>0A45FC8F-54D2-4A65-8338-25E5DEBDA304</RequestId>\\r\\n</RegisterDelegatedAdministratorResponse>\\t\\r\\n","errorExample":""}]',
      'title' => '添加委派管理员账号',
      'summary' => '调用RegisterDelegatedAdministrator将资源目录的成员账号设置为可信服务的委派管理员账号。',
      'description' => '设置完成后，委派管理员账号将获得访问资源目录组织信息的授权，从而具有了对组织成员和结构的可见性。委派管理员账号在指定可信服务中将代表企业管理账号执行服务相关管理操作。
使用限制：
- 只有部分可信服务支持委派管理员功能。更多信息，请参见[支持的可信服务](~~208133~~)。
- 只有资源目录的企业管理账号及其下被授权的RAM用户和RAM角色才能调用该API。
- 可信服务允许添加的委派管理员账号数量由各可信服务定义。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeregisterDelegatedAdministrator' => 
    array (
      'summary' => '调用DeregisterDelegatedAdministrator移除可信服务的委派管理员账号。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'AccountId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源目录中的成员账号UID。',
            'type' => 'string',
            'required' => true,
            'example' => '181761095690****',
          ),
        ),
        1 => 
        array (
          'name' => 'ServicePrincipal',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可信服务的标识。

具体信息，请参见[支持的可信服务](~~208133~~)中的`可信服务标识`列。',
            'type' => 'string',
            'required' => true,
            'example' => 'cloudfw.aliyuncs.com',
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
                'example' => 'DF5D5C52-7BD0-40E7-94C6-23A1505038A2',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.ServicePrincipal',
            'errorMessage' => 'The specified ServicePrincipal is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'AccountNotRegistered',
            'errorMessage' => 'The specified account is not a delegated administrator for this service.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DF5D5C52-7BD0-40E7-94C6-23A1505038A2\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DeregisterDelegatedAdministratorResponse>\\r\\n\\t<RequestId>DF5D5C52-7BD0-40E7-94C6-23A1505038A2</RequestId>\\r\\n</DeregisterDelegatedAdministratorResponse>\\t\\r\\n","errorExample":""}]',
      'title' => '移除委派管理员账号',
      'description' => '> 如果被移除的委派管理账号在可信服务中存在历史管理任务，移除操作可能对可信服务的正常使用产生影响。请在移除前慎重考虑可能产生的影响，然后再进行移除操作。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListDelegatedAdministrators' => 
    array (
      'summary' => '调用ListDelegatedAdministrators查询可信服务的委派管理员账号列表。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ServicePrincipal',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可信服务的标识。

具体信息，请参见[支持的可信服务](~~208133~~)中的`可信服务标识`列。',
            'type' => 'string',
            'required' => false,
            'example' => 'cloudfw.aliyuncs.com',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。

起始值：1。默认值：1。',
            'type' => 'integer',
            'format' => 'int64',
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
            'description' => '分页时每页显示的数据行数。

取值范围：1~100。默认值：10。',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '009C3A02-7D4B-416C-9CE7-548C91508F1E',
              ),
              'TotalCount' => 
              array (
                'description' => '数据总条数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2',
              ),
              'PageSize' => 
              array (
                'description' => '分页时每页显示的数据行数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'Accounts' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Account' => 
                  array (
                    'description' => '委派管理员账号信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '账号信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AccountId' => 
                        array (
                          'description' => '成员UID。',
                          'type' => 'string',
                          'example' => '138660628348****',
                        ),
                        'DisplayName' => 
                        array (
                          'description' => '成员名称。',
                          'type' => 'string',
                          'example' => 'abc',
                        ),
                        'JoinMethod' => 
                        array (
                          'description' => '成员加入方式。取值：

- invited：邀请。
- created：创建。',
                          'type' => 'string',
                          'example' => 'created',
                        ),
                        'ServicePrincipal' => 
                        array (
                          'description' => '可信服务的标识。',
                          'type' => 'string',
                          'example' => 'cloudfw.aliyuncs.com',
                        ),
                        'DelegationEnabledTime' => 
                        array (
                          'description' => '设置为委派管理员账号的时间戳。',
                          'type' => 'string',
                          'example' => '1616652684164',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"009C3A02-7D4B-416C-9CE7-548C91508F1E\\",\\n  \\"TotalCount\\": 2,\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"Accounts\\": {\\n    \\"Account\\": [\\n      {\\n        \\"AccountId\\": \\"138660628348****\\",\\n        \\"DisplayName\\": \\"abc\\",\\n        \\"JoinMethod\\": \\"created\\",\\n        \\"ServicePrincipal\\": \\"cloudfw.aliyuncs.com\\",\\n        \\"DelegationEnabledTime\\": \\"1616652684164\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ListDelegatedAdministratorsResponse>\\r\\n\\t<RequestId>009C3A02-7D4B-416C-9CE7-548C91508F1E</RequestId>\\r\\n\\t<TotalCount>2</TotalCount>\\r\\n\\t<PageSize>10</PageSize>\\r\\n\\t<PageNumber>1</PageNumber>\\r\\n\\t<Accounts>\\r\\n\\t\\t<Account>\\r\\n\\t\\t\\t<DelegationEnabledTime>1616652684164</DelegationEnabledTime>\\r\\n\\t\\t\\t<JoinMethod>created</JoinMethod>\\r\\n\\t\\t\\t<AccountId>138660628348****</AccountId>\\r\\n\\t\\t\\t<ServicePrincipal>cloudfw.aliyuncs.com</ServicePrincipal>\\r\\n\\t\\t\\t<DisplayName>abc</DisplayName>\\r\\n\\t\\t</Account>\\r\\n\\t\\t<Account>\\r\\n\\t\\t\\t<DelegationEnabledTime>1616489836069</DelegationEnabledTime>\\r\\n\\t\\t\\t<JoinMethod>invited</JoinMethod>\\r\\n\\t\\t\\t<AccountId>177242285274****</AccountId>\\r\\n\\t\\t\\t<ServicePrincipal>cloudfw.aliyuncs.com</ServicePrincipal>\\r\\n\\t\\t\\t<DisplayName>test</DisplayName>\\r\\n\\t\\t</Account>\\r\\n\\t</Accounts>\\r\\n</ListDelegatedAdministratorsResponse>\\t\\r\\n","errorExample":""}]',
      'title' => '查询可信服务的委派管理员账号',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListDelegatedServicesForAccount' => 
    array (
      'summary' => '调用ListDelegatedServicesForAccount查询指定成员被设置为哪些可信服务的委派管理员账号。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'AccountId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '成员ID。',
            'type' => 'string',
            'required' => true,
            'example' => '138660628348****',
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
                'example' => 'D9C03B94-9396-4794-A74B-13DC437556A6',
              ),
              'DelegatedServices' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DelegatedService' => 
                  array (
                    'description' => '可信服务列表。

> 如果返回为空，则表示查询的成员不是委派管理员账号。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '可信服务信列表。

> 如果返回为空，则表示查询的成员不是委派管理员账号。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DelegationEnabledTime' => 
                        array (
                          'description' => '设置为委派管理员账号的时间戳。',
                          'type' => 'string',
                          'example' => '1616652684164',
                        ),
                        'ServicePrincipal' => 
                        array (
                          'description' => '可信服务的标识。',
                          'type' => 'string',
                          'example' => 'cloudfw.aliyuncs.com',
                        ),
                        'Status' => 
                        array (
                          'description' => '可信服务的启用状态。取值：

- ENABLED：已启用。
- DISABLED：未启用。',
                          'type' => 'string',
                          'example' => 'ENABLED',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D9C03B94-9396-4794-A74B-13DC437556A6\\",\\n  \\"DelegatedServices\\": {\\n    \\"DelegatedService\\": [\\n      {\\n        \\"DelegationEnabledTime\\": \\"1616652684164\\",\\n        \\"ServicePrincipal\\": \\"cloudfw.aliyuncs.com\\",\\n        \\"Status\\": \\"ENABLED\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListDelegatedServicesForAccountResponse>\\n    <RequestId>D9C03B94-9396-4794-A74B-13DC437556A6</RequestId>\\n    <DelegatedServices>\\n        <DelegatedService>\\n            <Status>ENABLED</Status>\\n            <DelegationEnabledTime>1616652684164</DelegationEnabledTime>\\n            <ServicePrincipal>cloudfw.aliyuncs.com</ServicePrincipal>\\n        </DelegatedService>\\n    </DelegatedServices>\\n</ListDelegatedServicesForAccountResponse>","errorExample":""}]',
      'title' => '查询指定成员账号是否为委派管理员账号',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateResourceGroup' => 
    array (
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
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组唯一标识。

长度为3~50个字符，可包含英文字母、数字和短划线（-）。必须以英文字母开头。',
            'type' => 'string',
            'required' => true,
            'example' => 'my-project',
          ),
        ),
        1 => 
        array (
          'name' => 'DisplayName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组显示名称。

长度为1~50个字符或汉字。',
            'type' => 'string',
            'required' => true,
            'example' => 'my-project',
          ),
        ),
        2 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。

最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'k1',
                ),
                'Value' => 
                array (
                  'description' => '标签值。

最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'v1',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
              ),
              'ResourceGroup' => 
              array (
                'description' => '资源组信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'DisplayName' => 
                  array (
                    'description' => '资源组显示名称。',
                    'type' => 'string',
                    'example' => 'my-project',
                  ),
                  'Status' => 
                  array (
                    'description' => '资源组状态。取值：
- Creating：创建中。
- OK：创建成功。',
                    'type' => 'string',
                    'example' => 'Creating',
                  ),
                  'RegionStatuses' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'RegionStatus' => 
                      array (
                        'description' => '各个地域的资源组状态。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '各个地域的资源组状态。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Status' => 
                            array (
                              'description' => '资源组状态。取值：
- Creating：创建中。
- OK：创建成功。',
                              'type' => 'string',
                              'example' => 'Creating',
                            ),
                            'RegionId' => 
                            array (
                              'description' => '地域ID。',
                              'type' => 'string',
                              'example' => 'cn-qingdao',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'AccountId' => 
                  array (
                    'description' => '资源组所属的阿里云账号ID。',
                    'type' => 'string',
                    'example' => '151266687691****',
                  ),
                  'Name' => 
                  array (
                    'description' => '资源组唯一标识。',
                    'type' => 'string',
                    'example' => 'my-project',
                  ),
                  'CreateDate' => 
                  array (
                    'description' => '资源组创建时间（UTC时间）。',
                    'type' => 'string',
                    'example' => '2021-06-05T14:39:13+08:00',
                  ),
                  'Id' => 
                  array (
                    'description' => '资源组ID。',
                    'type' => 'string',
                    'example' => 'rg-9gLOoK****',
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
            'errorCode' => 'InvalidParameter.Name.InvalidChars',
            'errorMessage' => 'The Name is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Name.Length',
            'errorMessage' => 'The maximum length of Name is exceeded.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.DisplayName.Length',
            'errorMessage' => 'The maximum length of DisplayName is exceeded.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter.DisplayName',
            'errorMessage' => 'You must specify DisplayName.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.DisplayName',
            'errorMessage' => 'The DisplayName is invalid.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'LimitExceeded.ResourceGroup',
            'errorMessage' => 'The count of resource groups beyond the current limits.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\",\\n  \\"ResourceGroup\\": {\\n    \\"DisplayName\\": \\"my-project\\",\\n    \\"Status\\": \\"Creating\\",\\n    \\"RegionStatuses\\": {\\n      \\"RegionStatus\\": [\\n        {\\n          \\"Status\\": \\"Creating\\",\\n          \\"RegionId\\": \\"cn-qingdao\\"\\n        }\\n      ]\\n    },\\n    \\"AccountId\\": \\"151266687691****\\",\\n    \\"Name\\": \\"my-project\\",\\n    \\"CreateDate\\": \\"2021-06-05T14:39:13+08:00\\",\\n    \\"Id\\": \\"rg-9gLOoK****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<CreateResourceGroupResponse>\\r\\n\\t<RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\r\\n\\t<ResourceGroup>\\r\\n\\t\\t<Status>Creating</Status>\\r\\n\\t\\t<RegionStatuses>\\r\\n\\t\\t\\t<RegionStatus>\\r\\n\\t\\t\\t\\t<Status>Creating</Status>\\r\\n\\t\\t\\t\\t<RegionId>ap-northeast-1</RegionId>\\r\\n\\t\\t\\t</RegionStatus>\\r\\n\\t\\t\\t<RegionStatus>\\r\\n\\t\\t\\t\\t<Status>Creating</Status>\\r\\n\\t\\t\\t\\t<RegionId>ap-south-1</RegionId>\\r\\n\\t\\t\\t</RegionStatus>\\r\\n\\t\\t\\t<RegionStatus>\\r\\n\\t\\t\\t\\t<Status>Creating</Status>\\r\\n\\t\\t\\t\\t<RegionId>ap-southeast-1</RegionId>\\r\\n\\t\\t\\t</RegionStatus>\\r\\n\\t\\t\\t<RegionStatus>\\r\\n\\t\\t\\t\\t<Status>Creating</Status>\\r\\n\\t\\t\\t\\t<RegionId>ap-southeast-2</RegionId>\\r\\n\\t\\t\\t</RegionStatus>\\r\\n\\t\\t\\t<RegionStatus>\\r\\n\\t\\t\\t\\t<Status>Creating</Status>\\r\\n\\t\\t\\t\\t<RegionId>ap-southeast-3</RegionId>\\r\\n\\t\\t\\t</RegionStatus>\\r\\n\\t\\t\\t<RegionStatus>\\r\\n\\t\\t\\t\\t<Status>Creating</Status>\\r\\n\\t\\t\\t\\t<RegionId>ap-southeast-5</RegionId>\\r\\n\\t\\t\\t</RegionStatus>\\r\\n\\t\\t\\t<RegionStatus>\\r\\n\\t\\t\\t\\t<Status>Creating</Status>\\r\\n\\t\\t\\t\\t<RegionId>cn-beijing</RegionId>\\r\\n\\t\\t\\t</RegionStatus>\\r\\n\\t\\t\\t<RegionStatus>\\r\\n\\t\\t\\t\\t<Status>Creating</Status>\\r\\n\\t\\t\\t\\t<RegionId>cn-chengdu</RegionId>\\r\\n\\t\\t\\t</RegionStatus>\\r\\n\\t\\t\\t<RegionStatus>\\r\\n\\t\\t\\t\\t<Status>Creating</Status>\\r\\n\\t\\t\\t\\t<RegionId>cn-guangzhou</RegionId>\\r\\n\\t\\t\\t</RegionStatus>\\r\\n\\t\\t\\t<RegionStatus>\\r\\n\\t\\t\\t\\t<Status>Creating</Status>\\r\\n\\t\\t\\t\\t<RegionId>cn-hangzhou</RegionId>\\r\\n\\t\\t\\t</RegionStatus>\\r\\n\\t\\t\\t<RegionStatus>\\r\\n\\t\\t\\t\\t<Status>Creating</Status>\\r\\n\\t\\t\\t\\t<RegionId>cn-hangzhou-cloudstone</RegionId>\\r\\n\\t\\t\\t</RegionStatus>\\r\\n\\t\\t\\t<RegionStatus>\\r\\n\\t\\t\\t\\t<Status>Creating</Status>\\r\\n\\t\\t\\t\\t<RegionId>cn-hangzhou-test-306</RegionId>\\r\\n\\t\\t\\t</RegionStatus>\\r\\n\\t\\t\\t<RegionStatus>\\r\\n\\t\\t\\t\\t<Status>Creating</Status>\\r\\n\\t\\t\\t\\t<RegionId>cn-heyuan</RegionId>\\r\\n\\t\\t\\t</RegionStatus>\\r\\n\\t\\t\\t<RegionStatus>\\r\\n\\t\\t\\t\\t<Status>Creating</Status>\\r\\n\\t\\t\\t\\t<RegionId>cn-hongkong</RegionId>\\r\\n\\t\\t\\t</RegionStatus>\\r\\n\\t\\t\\t<RegionStatus>\\r\\n\\t\\t\\t\\t<Status>Creating</Status>\\r\\n\\t\\t\\t\\t<RegionId>cn-huhehaote</RegionId>\\r\\n\\t\\t\\t</RegionStatus>\\r\\n\\t\\t\\t<RegionStatus>\\r\\n\\t\\t\\t\\t<Status>Creating</Status>\\r\\n\\t\\t\\t\\t<RegionId>cn-north-2-gov-1</RegionId>\\r\\n\\t\\t\\t</RegionStatus>\\r\\n\\t\\t\\t<RegionStatus>\\r\\n\\t\\t\\t\\t<Status>Creating</Status>\\r\\n\\t\\t\\t\\t<RegionId>cn-qingdao</RegionId>\\r\\n\\t\\t\\t</RegionStatus>\\r\\n\\t\\t\\t<RegionStatus>\\r\\n\\t\\t\\t\\t<Status>Creating</Status>\\r\\n\\t\\t\\t\\t<RegionId>cn-shanghai</RegionId>\\r\\n\\t\\t\\t</RegionStatus>\\r\\n\\t\\t\\t<RegionStatus>\\r\\n\\t\\t\\t\\t<Status>Creating</Status>\\r\\n\\t\\t\\t\\t<RegionId>cn-shanghai-finance-1</RegionId>\\r\\n\\t\\t\\t</RegionStatus>\\r\\n\\t\\t\\t<RegionStatus>\\r\\n\\t\\t\\t\\t<Status>Creating</Status>\\r\\n\\t\\t\\t\\t<RegionId>cn-shenzhen</RegionId>\\r\\n\\t\\t\\t</RegionStatus>\\r\\n\\t\\t\\t<RegionStatus>\\r\\n\\t\\t\\t\\t<Status>Creating</Status>\\r\\n\\t\\t\\t\\t<RegionId>cn-shenzhen-finance-1</RegionId>\\r\\n\\t\\t\\t</RegionStatus>\\r\\n\\t\\t\\t<RegionStatus>\\r\\n\\t\\t\\t\\t<Status>Creating</Status>\\r\\n\\t\\t\\t\\t<RegionId>cn-wulanchabu</RegionId>\\r\\n\\t\\t\\t</RegionStatus>\\r\\n\\t\\t\\t<RegionStatus>\\r\\n\\t\\t\\t\\t<Status>Creating</Status>\\r\\n\\t\\t\\t\\t<RegionId>cn-zhangjiakou</RegionId>\\r\\n\\t\\t\\t</RegionStatus>\\r\\n\\t\\t\\t<RegionStatus>\\r\\n\\t\\t\\t\\t<Status>Creating</Status>\\r\\n\\t\\t\\t\\t<RegionId>eu-central-1</RegionId>\\r\\n\\t\\t\\t</RegionStatus>\\r\\n\\t\\t\\t<RegionStatus>\\r\\n\\t\\t\\t\\t<Status>Creating</Status>\\r\\n\\t\\t\\t\\t<RegionId>eu-west-1</RegionId>\\r\\n\\t\\t\\t</RegionStatus>\\r\\n\\t\\t\\t<RegionStatus>\\r\\n\\t\\t\\t\\t<Status>Creating</Status>\\r\\n\\t\\t\\t\\t<RegionId>me-east-1</RegionId>\\r\\n\\t\\t\\t</RegionStatus>\\r\\n\\t\\t\\t<RegionStatus>\\r\\n\\t\\t\\t\\t<Status>Creating</Status>\\r\\n\\t\\t\\t\\t<RegionId>rus-west-1</RegionId>\\r\\n\\t\\t\\t</RegionStatus>\\r\\n\\t\\t\\t<RegionStatus>\\r\\n\\t\\t\\t\\t<Status>Creating</Status>\\r\\n\\t\\t\\t\\t<RegionId>us-east-1</RegionId>\\r\\n\\t\\t\\t</RegionStatus>\\r\\n\\t\\t\\t<RegionStatus>\\r\\n\\t\\t\\t\\t<Status>Creating</Status>\\r\\n\\t\\t\\t\\t<RegionId>us-west-1</RegionId>\\r\\n\\t\\t\\t</RegionStatus>\\r\\n\\t\\t</RegionStatuses>\\r\\n\\t\\t<AccountId>151266687691****</AccountId>\\r\\n\\t\\t<DisplayName>my-project</DisplayName>\\r\\n\\t\\t<Id>rg-9gLOoK****</Id>\\r\\n\\t\\t<CreateDate>2021-06-05T14:39:13+08:00</CreateDate>\\r\\n\\t\\t<Name>my-project</Name>\\r\\n\\t</ResourceGroup>\\r\\n</CreateResourceGroupResponse>\\r\\n\\t\\r\\n","errorExample":""}]',
      'title' => '创建资源组',
      'summary' => '调用CreateResourceGroup创建资源组。',
      'description' => '> 一个阿里云账号下最多创建30个资源组。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteResourceGroup' => 
    array (
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
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。

您可以调用[ListResourceGroups](~~158855~~)查询资源组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'rg-9gLOoK****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1C488B66-B819-4D14-8711-C4EAAA13AC01',
              ),
              'ResourceGroup' => 
              array (
                'description' => '资源组信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'DisplayName' => 
                  array (
                    'description' => '资源组显示名称。',
                    'type' => 'string',
                    'example' => 'my-project',
                  ),
                  'Status' => 
                  array (
                    'description' => '资源组状态。取值：

- Creating：创建中。
- OK：创建成功。
- PendingDelete：等待删除。',
                    'type' => 'string',
                    'example' => 'PendingDelete',
                  ),
                  'RegionStatuses' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'RegionStatus' => 
                      array (
                        'description' => '各个地域的资源组状态。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '各个地域的资源组状态。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Status' => 
                            array (
                              'description' => '资源组状态。取值：

- Creating：创建中。
- OK：创建成功。
- PendingDelete：等待删除。
- Deleting：删除中。',
                              'type' => 'string',
                              'example' => 'PendingDelete',
                            ),
                            'RegionId' => 
                            array (
                              'description' => '地域ID。',
                              'type' => 'string',
                              'example' => 'cn-qingdao',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'AccountId' => 
                  array (
                    'description' => '资源组所属的阿里云账号ID。',
                    'type' => 'string',
                    'example' => '123456789****',
                  ),
                  'Name' => 
                  array (
                    'description' => '资源组唯一标识。',
                    'type' => 'string',
                    'example' => 'my-project',
                  ),
                  'CreateDate' => 
                  array (
                    'description' => '资源组创建时间（UTC时间）。',
                    'type' => 'string',
                    'example' => '2015-01-23T12:33:18Z',
                  ),
                  'Id' => 
                  array (
                    'description' => '资源组ID。',
                    'type' => 'string',
                    'example' => 'rg-9gLOoK****',
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
            'errorCode' => 'InvalidParameter.ResourceGroupId',
            'errorMessage' => 'The ResourceGroupId is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceGroup',
            'errorMessage' => 'The specified resource group does not exist. You must first create a resource group.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'DeleteConflict.ResourceGroup.Resource',
            'errorMessage' => 'Failed to delete the resource group because one or more cloud resources exist in the resource group. Try again later after you release the cloud resources.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1C488B66-B819-4D14-8711-C4EAAA13AC01\\",\\n  \\"ResourceGroup\\": {\\n    \\"DisplayName\\": \\"my-project\\",\\n    \\"Status\\": \\"PendingDelete\\",\\n    \\"RegionStatuses\\": {\\n      \\"RegionStatus\\": [\\n        {\\n          \\"Status\\": \\"PendingDelete\\",\\n          \\"RegionId\\": \\"cn-qingdao\\"\\n        }\\n      ]\\n    },\\n    \\"AccountId\\": \\"123456789****\\",\\n    \\"Name\\": \\"my-project\\",\\n    \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\",\\n    \\"Id\\": \\"rg-9gLOoK****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DeleteResourceGroupResponse>\\r\\n\\t<RequestId>1C488B66-B819-4D14-8711-C4EAAA13AC01</RequestId>\\r\\n\\t<ResourceGroup>\\r\\n\\t\\t<Id>rg-9gLOoK****</Id>\\r\\n\\t\\t<AccountId>123456789****</AccountId>\\r\\n\\t\\t<Name>my-project</Name>\\r\\n\\t\\t<DisplayName>my-project</DisplayName>\\r\\n\\t\\t<Status>PendingDelete</Status>\\r\\n\\t\\t<RegionStatuses>\\r\\n\\t\\t\\t<RegionStatus>\\r\\n\\t\\t\\t\\t<RegionId>cn-hangzhou</RegionId>\\r\\n\\t\\t\\t\\t<Status>PendingDelete</Status>\\r\\n\\t\\t\\t</RegionStatus>\\r\\n\\t\\t\\t<RegionStatus>\\r\\n\\t\\t\\t\\t<RegionId>cn-qingdao</RegionId>\\r\\n\\t\\t\\t\\t<Status>PendingDelete</Status>\\r\\n\\t\\t\\t</RegionStatus>\\r\\n\\t\\t</RegionStatuses>\\r\\n\\t\\t<CreateDate>2015-01-23T12:33:18Z</CreateDate>\\r\\n\\t</ResourceGroup>\\r\\n</DeleteResourceGroupResponse>\\t\\r\\n","errorExample":""}]',
      'title' => '删除资源组',
      'summary' => '调用DeleteResourceGroup删除资源组。',
      'description' => '> 删除资源组前，请先删除资源组中的资源。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateResourceGroup' => 
    array (
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
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。

您可以调用[ListResourceGroups](~~158855~~)获取资源组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'rg-9gLOoK****',
          ),
        ),
        1 => 
        array (
          'name' => 'NewDisplayName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组显示名称。

长度为1~50个字符或汉字。',
            'type' => 'string',
            'required' => true,
            'example' => 'project',
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
                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
              ),
              'ResourceGroup' => 
              array (
                'description' => '资源组信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'DisplayName' => 
                  array (
                    'description' => '资源组显示名称。',
                    'type' => 'string',
                    'example' => 'project',
                  ),
                  'AccountId' => 
                  array (
                    'description' => '资源组所属的阿里云账号ID。',
                    'type' => 'string',
                    'example' => '123456789****',
                  ),
                  'Name' => 
                  array (
                    'description' => '资源组唯一标识。',
                    'type' => 'string',
                    'example' => 'my-project',
                  ),
                  'CreateDate' => 
                  array (
                    'description' => '资源组创建时间（UTC时间）。',
                    'type' => 'string',
                    'example' => '2015-01-23T12:33:18+08:00',
                  ),
                  'Id' => 
                  array (
                    'description' => '资源组ID。',
                    'type' => 'string',
                    'example' => 'rg-9gLOoK****',
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
            'errorCode' => 'InvalidParameter.ResourceGroupId',
            'errorMessage' => 'The ResourceGroupId is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.DisplayName',
            'errorMessage' => 'The DisplayName is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingParameter.DisplayName',
            'errorMessage' => 'You must specify DisplayName.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.DisplayName.Length',
            'errorMessage' => 'The maximum length of DisplayName is exceeded.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceGroup',
            'errorMessage' => 'The specified resource group does not exist. You must first create a resource group.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\",\\n  \\"ResourceGroup\\": {\\n    \\"DisplayName\\": \\"project\\",\\n    \\"AccountId\\": \\"123456789****\\",\\n    \\"Name\\": \\"my-project\\",\\n    \\"CreateDate\\": \\"2015-01-23T12:33:18+08:00\\",\\n    \\"Id\\": \\"rg-9gLOoK****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<UpdateResourceGroupResponse>\\r\\n\\t<RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\r\\n\\t<ResourceGroup>\\r\\n\\t\\t<Id>rg-9gLOoK****</Id>\\r\\n\\t\\t<AccountId>123456789****</AccountId>\\r\\n\\t\\t<Name>my-project</Name>\\r\\n\\t\\t<DisplayName>project</DisplayName>\\r\\n\\t\\t<CreateDate>2015-01-23T12:33:18+08:00</CreateDate>\\r\\n\\t</ResourceGroup>\\r\\n</UpdateResourceGroupResponse>","errorExample":""}]',
      'title' => '修改资源组的显示名称',
      'summary' => '调用UpdateResourceGroup修改资源组的显示名称。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListResourceGroups' => 
    array (
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组状态，用于查询的过滤条件。取值：

- Creating：创建中。
- OK：创建成功。
- PendingDelete：等待删除。',
            'type' => 'string',
            'required' => false,
            'example' => 'OK',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。

起始值：1。默认值：1。',
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
            'description' => '分页时每页显示的数据条数。

取值范围：1~100。默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID，用于查询的过滤条件。

长度不能超过18个字符，且以`rg-`开头。

> 该参数已被收编到参数`ResourceGroupIds`，如果您同时设置了`ResourceGroupId`和`ResourceGroupIds`，则会以`ResourceGroupIds`为准。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-9gLOoK****',
          ),
        ),
        4 => 
        array (
          'name' => 'DisplayName',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '资源组显示名称，用于查询的过滤条件。支持模糊查询。

长度不能超过50个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'my-project',
          ),
        ),
        5 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组唯一标识，用于查询的过滤条件。支持模糊查询。

长度不能超过50个字符，可包含英文字母、数字和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'my-project',
          ),
        ),
        6 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '标签，用于查询的过滤条件。

最多可以设置20个标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签，用于查询的过滤条件。

最多可以设置20个标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'k1',
                ),
                'Value' => 
                array (
                  'description' => '标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'v1',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'IncludeTags',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回标签信息。取值：

- false（默认值）：不返回。

- true：返回。
> 当您设置了标签过滤条件后，不论`IncludeTags`为何值，都会返回标签信息。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        8 => 
        array (
          'name' => 'ResourceGroupIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '资源组ID列表，用于查询的过滤条件。

最多可以设置100个资源组ID。

> 如果您同时设置了`ResourceGroupId`和`ResourceGroupIds`，则会以`ResourceGroupIds`为准。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源组ID列表，用于查询的过滤条件。

最多可以设置100个资源组ID。

> 如果您同时设置了`ResourceGroupId`和`ResourceGroupIds`，则会以`ResourceGroupIds`为准。',
              'type' => 'string',
              'required' => false,
              'example' => '{"rg-1hSBH2****","rg-9gLOoK****"}',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '符合请求参数条件的数据总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4B450CA1-36E8-4AA2-8461-86B42BF4CC4E',
              ),
              'PageSize' => 
              array (
                'description' => '分页时每页显示的数据条数。',
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
              'ResourceGroups' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ResourceGroup' => 
                  array (
                    'description' => '资源组列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '资源组列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DisplayName' => 
                        array (
                          'description' => '资源组显示名称。',
                          'type' => 'string',
                          'example' => 'my-project',
                        ),
                        'Status' => 
                        array (
                          'description' => '资源组状态。取值：
- Creating：创建中。
- OK：创建成功。
- PendingDelete：等待删除。',
                          'type' => 'string',
                          'example' => 'OK',
                        ),
                        'AccountId' => 
                        array (
                          'description' => '资源组所属的阿里云账号ID。',
                          'type' => 'string',
                          'example' => '123456789****',
                        ),
                        'Name' => 
                        array (
                          'description' => '资源组唯一标识。',
                          'type' => 'string',
                          'example' => 'my-project',
                        ),
                        'CreateDate' => 
                        array (
                          'description' => '资源组创建时间（UTC时间）。',
                          'type' => 'string',
                          'example' => '2015-01-23T12:33:18Z',
                        ),
                        'Id' => 
                        array (
                          'description' => '资源组ID。',
                          'type' => 'string',
                          'example' => 'rg-9gLOoK****',
                        ),
                        'Tags' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Tag' => 
                            array (
                              'description' => '标签列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '标签列表。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'TagKey' => 
                                  array (
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'example' => 'k1',
                                  ),
                                  'TagValue' => 
                                  array (
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'example' => 'v1',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 2,\\n  \\"RequestId\\": \\"4B450CA1-36E8-4AA2-8461-86B42BF4CC4E\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"ResourceGroups\\": {\\n    \\"ResourceGroup\\": [\\n      {\\n        \\"DisplayName\\": \\"my-project\\",\\n        \\"Status\\": \\"OK\\",\\n        \\"AccountId\\": \\"123456789****\\",\\n        \\"Name\\": \\"my-project\\",\\n        \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\",\\n        \\"Id\\": \\"rg-9gLOoK****\\",\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"TagKey\\": \\"k1\\",\\n              \\"TagValue\\": \\"v1\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListResourceGroupsResponse>\\n    <RequestId>4B450CA1-36E8-4AA2-8461-86B42BF4CC4E</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>10</PageSize>\\n    <TotalCount>2</TotalCount>\\n    <ResourceGroups>\\n        <ResourceGroup>\\n            <Id>rg-1hSBH2****</Id>\\n            <AccountId>123456789****</AccountId>\\n            <Name>default</Name>\\n            <DisplayName>默认资源组</DisplayName>\\n            <Status>OK</Status>\\n            <CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n            <Tags>\\n                <Tag>\\n                    <TagKey>k1</TagKey>\\n                    <TagValue>v1</TagValue>\\n                </Tag>\\n            </Tags>\\n        </ResourceGroup>\\n        <ResourceGroup>\\n            <Id>rg-9gLOoK****</Id>\\n            <AccountId>123456789****</AccountId>\\n            <Name>my-project</Name>\\n            <DisplayName>my-project</DisplayName>\\n            <Status>OK</Status>\\n            <CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n            <Tags>\\n                <Tag>\\n                    <TagKey>k2</TagKey>\\n                    <TagValue>v2</TagValue>\\n                </Tag>\\n            </Tags>\\n        </ResourceGroup>\\n    </ResourceGroups>\\n</ListResourceGroupsResponse>","errorExample":""}]',
      'title' => '查询资源组列表',
      'summary' => '调用ListResourceGroups查询资源组列表。',
      'description' => '您可以调用本API查询当前账号下的所有资源组列表，也可以根据资源组状态、资源组ID、资源组标识或资源组显示名称查询对应的资源组列表。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListResources' => 
    array (
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
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-uPJpP****',
          ),
        ),
        1 => 
        array (
          'name' => 'Service',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云服务代码。

您可以从[支持资源组的云服务](~~94479~~)的**云服务代码**列获取。',
            'type' => 'string',
            'required' => false,
            'example' => 'ecs',
          ),
        ),
        2 => 
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
        3 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。

您可以从[支持资源组的云服务](~~94479~~)的**资源类型**列获取。',
            'type' => 'string',
            'required' => false,
            'example' => 'instance',
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'i-23v38****',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。

起始值：1。默认值：1。',
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
            'description' => '分页时每页显示的数据条数。

取值范围：1~100。默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        7 => 
        array (
          'name' => 'ResourceTypes',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '资源类型列表。最多支持50组。

> 如果您设置了`ResourceTypes`，则请求参数中单独设置的`Service`和`ResourceType`将不生效。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源类型列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Service' => 
                array (
                  'description' => '云服务代码。

N的取值范围：1~50。

您可以从[支持资源组的云服务](~~94479~~)的**云服务代码**列获取。
> `ResourceTypes`中的`Service`和`ResourceType`参数必须同时设置，否则将不生效。
',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ecs',
                ),
                'ResourceType' => 
                array (
                  'description' => '资源类型。

N的取值范围：1~50。

您可以从[支持资源组的云服务](~~94479~~)的**资源类型**列获取。
> `ResourceTypes`中的`Service`和`ResourceType`参数必须同时设置，否则将不生效。
',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'instance',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '数据总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
              ),
              'PageSize' => 
              array (
                'description' => '分页时每页显示的数据条数。',
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
              'Resources' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Resource' => 
                  array (
                    'description' => '资源信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '资源信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Service' => 
                        array (
                          'description' => '云服务代码。',
                          'type' => 'string',
                          'example' => 'ecs',
                        ),
                        'ResourceType' => 
                        array (
                          'description' => '资源类型。',
                          'type' => 'string',
                          'example' => 'instance',
                        ),
                        'ResourceGroupId' => 
                        array (
                          'description' => '资源组ID。',
                          'type' => 'string',
                          'example' => 'rg-uPJpP****',
                        ),
                        'ResourceId' => 
                        array (
                          'description' => '资源ID。',
                          'type' => 'string',
                          'example' => 'i-23v38****',
                        ),
                        'CreateDate' => 
                        array (
                          'description' => '资源创建时间（UTC时间）。',
                          'type' => 'string',
                          'example' => '2015-01-23T12:33:18Z',
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
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceIds',
            'errorMessage' => 'The ResourceIds is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'LimitExceeded.ResourceIds',
            'errorMessage' => 'The maximum number of ResourceId is exceeded.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"Resources\\": {\\n    \\"Resource\\": [\\n      {\\n        \\"Service\\": \\"ecs\\",\\n        \\"ResourceType\\": \\"instance\\",\\n        \\"ResourceGroupId\\": \\"rg-uPJpP****\\",\\n        \\"ResourceId\\": \\"i-23v38****\\",\\n        \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ListResourcesResponse>\\r\\n\\t<RequesgtId>04F0F334-1335-436C-A1D7-6C044FE73368</RequesgtId>\\r\\n\\t<PageNumber>1</PageNumber>\\r\\n\\t<PageSize>10</PageSize>\\r\\n\\t<TotalCount>1</TotalCount>\\r\\n\\t<Resources>\\r\\n\\t\\t<Resource>\\r\\n\\t\\t\\t<ResourceGroupId>rg-uPJpP****</ResourceGroupId>\\r\\n\\t\\t\\t<Service>ecs</Service>\\r\\n\\t\\t\\t<ResourceType>instance</ResourceType>\\r\\n\\t\\t\\t<ResourceId>i-23v38****</ResourceId>\\r\\n\\t\\t\\t<RegionId>cn-hangzhou</RegionId>\\r\\n\\t\\t\\t<CreateDate>2015-01-23T12:33:18Z</CreateDate>\\r\\n\\t\\t</Resource>\\r\\n\\t</Resources>\\r\\n</ListResourcesResponse>\\t","errorExample":""}]',
      'title' => '查看当前账号可以访问的资源列表',
      'summary' => '调用ListResources查询当前账号可以访问的资源组中的资源列表。',
      'description' => '> 该API支持通过RAM角色方式调用，但不支持角色的会话策略。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetResourceGroup' => 
    array (
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。

您可以调用[ListResourceGroups](~~158855~~)查询资源组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'rg-9gLOoK****',
          ),
        ),
        1 => 
        array (
          'name' => 'IncludeTags',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回标签信息。取值：

- false（默认值）：不返回。
- true：返回。',
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
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2D69A58F-345C-4FDE-88E4-BF5189484043',
              ),
              'ResourceGroup' => 
              array (
                'description' => '资源组信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'DisplayName' => 
                  array (
                    'description' => '资源组显示名称。',
                    'type' => 'string',
                    'example' => 'my-project',
                  ),
                  'Status' => 
                  array (
                    'description' => '资源组状态。取值：

- Creating：创建中。
- OK：创建成功。
- PendingDelete：等待删除。',
                    'type' => 'string',
                    'example' => 'OK',
                  ),
                  'RegionStatuses' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'RegionStatus' => 
                      array (
                        'description' => '各个地域的资源组状态。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '各个地域的资源组状态。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Status' => 
                            array (
                              'description' => '资源组状态。取值：

- Creating：创建中。
- OK：创建成功。
- PendingDelete：等待删除。
- Deleting：删除中。',
                              'type' => 'string',
                              'example' => 'OK',
                            ),
                            'RegionId' => 
                            array (
                              'description' => '地域ID。',
                              'type' => 'string',
                              'example' => 'cn-qingdao',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'AccountId' => 
                  array (
                    'description' => '资源组所属的阿里云账号ID。',
                    'type' => 'string',
                    'example' => '123456789****',
                  ),
                  'Name' => 
                  array (
                    'description' => '资源组唯一标识。',
                    'type' => 'string',
                    'example' => 'my-project',
                  ),
                  'CreateDate' => 
                  array (
                    'description' => '资源组创建时间（UTC时间）。',
                    'type' => 'string',
                    'example' => '2015-01-23T12:33:18Z',
                  ),
                  'Id' => 
                  array (
                    'description' => '资源组ID。',
                    'type' => 'string',
                    'example' => 'rg-9gLOoK****',
                  ),
                  'Tags' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Tag' => 
                      array (
                        'description' => '标签列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '标签列表。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'TagKey' => 
                            array (
                              'description' => '标签键。',
                              'type' => 'string',
                              'example' => 'k1',
                            ),
                            'TagValue' => 
                            array (
                              'description' => '标签值。',
                              'type' => 'string',
                              'example' => 'v1',
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
            'errorCode' => 'InvalidParameter.ResourceGroupId',
            'errorMessage' => 'The ResourceGroupId is invalid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to perform the operation.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceGroup',
            'errorMessage' => 'The specified resource group does not exist. You must first create a resource group.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2D69A58F-345C-4FDE-88E4-BF5189484043\\",\\n  \\"ResourceGroup\\": {\\n    \\"DisplayName\\": \\"my-project\\",\\n    \\"Status\\": \\"OK\\",\\n    \\"RegionStatuses\\": {\\n      \\"RegionStatus\\": [\\n        {\\n          \\"Status\\": \\"OK\\",\\n          \\"RegionId\\": \\"cn-qingdao\\"\\n        }\\n      ]\\n    },\\n    \\"AccountId\\": \\"123456789****\\",\\n    \\"Name\\": \\"my-project\\",\\n    \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\",\\n    \\"Id\\": \\"rg-9gLOoK****\\",\\n    \\"Tags\\": {\\n      \\"Tag\\": [\\n        {\\n          \\"TagKey\\": \\"k1\\",\\n          \\"TagValue\\": \\"v1\\"\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetResourceGroupResponse>\\n    <RequestId>2D69A58F-345C-4FDE-88E4-BF5189484043</RequestId>\\n    <ResourceGroup>\\n        <Id>rg-9gLOoK****</Id>\\n        <AccountId>123456789****</AccountId>\\n        <Name>my-project</Name>\\n        <DisplayName>my-project</DisplayName>\\n        <Status>OK</Status>\\n        <RegionStatuses>\\n            <RegionStatus>\\n                <RegionId>cn-hangzhou</RegionId>\\n                <Status>OK</Status>\\n            </RegionStatus>\\n            <RegionStatus>\\n                <RegionId>cn-qingdao</RegionId>\\n                <Status>OK</Status>\\n            </RegionStatus>\\n        </RegionStatuses>\\n        <CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n        <Tags>\\n            <Tag>\\n                <TagKey>k1</TagKey>\\n                <TagValue>v1</TagValue>\\n            </Tag>\\n        </Tags>\\n    </ResourceGroup>\\n</GetResourceGroupResponse>","errorExample":""}]',
      'title' => '查询资源组信息',
      'summary' => '调用GetResourceGroup查询资源组信息。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'MoveResources' => 
    array (
      'summary' => '调用MoveResources将资源从一个资源组转移到另一个资源组。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '将要转入的目标资源组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'rg-aekzmeobk5w****',
          ),
        ),
        1 => 
        array (
          'name' => 'Resources',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '将要转移的资源列表。

> 每次最多转移10个资源。多个资源请分批转移。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '将要转移的资源列表。',
              'type' => 'object',
              'properties' => 
              array (
                'ResourceId' => 
                array (
                  'description' => '资源ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'i-23v38****',
                ),
                'ResourceType' => 
                array (
                  'description' => '资源类型。

您可以从[支持资源组的云服务](~~94479~~)的**资源类型**列获取。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'instance',
                ),
                'RegionId' => 
                array (
                  'description' => '资源所属的地域ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'cn-hangzhou',
                ),
                'Service' => 
                array (
                  'description' => '云服务代码。

您可以从[支持资源组的云服务](~~94479~~)的**云服务代码**列获取。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ecs',
                ),
              ),
              'required' => false,
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C00B89D3-3247-11DE-95D8-A7C01FB0AB4F',
              ),
              'Responses' => 
              array (
                'description' => '返回结果。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回结果。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Service' => 
                    array (
                      'description' => '云服务代码。',
                      'type' => 'string',
                      'example' => 'ecs',
                    ),
                    'ResourceId' => 
                    array (
                      'description' => '资源ID。',
                      'type' => 'string',
                      'example' => 'i-23v38****',
                    ),
                    'ResourceType' => 
                    array (
                      'description' => '资源类型。',
                      'type' => 'string',
                      'example' => 'instance',
                    ),
                    'RequestId' => 
                    array (
                      'description' => '请求ID。',
                      'type' => 'string',
                      'example' => 'C00B89D3-3247-11DE-95D8-A7C01FB0AB4F',
                    ),
                    'Status' => 
                    array (
                      'description' => '状态。取值：

- SUCCESS：成功。
- FAIL：失败。',
                      'type' => 'string',
                      'example' => 'FAIL',
                    ),
                    'ErrorCode' => 
                    array (
                      'description' => '错误代码。

> 资源转移失败时返回该参数。',
                      'type' => 'string',
                      'example' => 'NoPermission',
                    ),
                    'ErrorMsg' => 
                    array (
                      'description' => '错误信息。
> 资源转移失败时返回该参数。',
                      'type' => 'string',
                      'example' => '没权限',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '资源所属的地域ID。',
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'SERVICE_REGION_NO_ENDPOINT',
            'errorMessage' => 'Please input right service and region',
          ),
          1 => 
          array (
            'errorCode' => 'EntityExists.AssociatedTransferTask',
            'errorMessage' => 'An associated transfer task is in progress. Try again later.',
          ),
          2 => 
          array (
            'errorCode' => 'NotAllowMove.ExistsAssociatedTransferRule',
            'errorMessage' => 'Associated resources cannot be transferred while the primary resource is being transferred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C00B89D3-3247-11DE-95D8-A7C01FB0AB4F\\",\\n  \\"Responses\\": [\\n    {\\n      \\"Service\\": \\"ecs\\",\\n      \\"ResourceId\\": \\"i-23v38****\\",\\n      \\"ResourceType\\": \\"instance\\",\\n      \\"RequestId\\": \\"C00B89D3-3247-11DE-95D8-A7C01FB0AB4F\\",\\n      \\"Status\\": \\"FAIL\\",\\n      \\"ErrorCode\\": \\"NoPermission\\",\\n      \\"ErrorMsg\\": \\"没权限\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<MoveResourcesResponse>\\n    <RequestId>C00B89D3-3247-11DE-95D8-A7C01FB0AB4F</RequestId>\\n    <Responses>\\n        <Service>ecs</Service>\\n        <ResourceId>i-23v38****</ResourceId>\\n        <ResourceType>instance</ResourceType>\\n        <RequestId>C00B89D3-3247-11DE-95D8-A7C01FB0AB4F</RequestId>\\n        <Status>SUCCESS</Status>\\n        <ErrorCode/>\\n        <ErrorMsg/>\\n        <RegionId>cn-hangzhou</RegionId>\\n    </Responses>\\n</MoveResourcesResponse>","errorExample":""}]',
      'title' => '资源转组',
      'description' => '支持跨地域、跨云服务、跨资源组批量转移资源。

支持转移资源组的云服务，请参见[支持资源组的云服务](~~94479~~)的**API**列。',
    ),
    'EnableAssociatedTransfer' => 
    array (
      'summary' => '调用EnableAssociatedTransfer开通关联资源跟随转组功能。',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2D69A58F-345C-4FDE-88E4-BF5189484114',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'UnsupportedOperation.RepeatEnableAssociatedTransferSetting',
            'errorMessage' => 'Repeat enable associated transfer setting is not supported.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2D69A58F-345C-4FDE-88E4-BF5189484114\\"\\n}","errorExample":""},{"type":"xml","example":"<EnableAssociatedTransferResponse>\\n    <RequestId>2D69A58F-345C-4FDE-88E4-BF5189484114</RequestId>\\n</EnableAssociatedTransferResponse>","errorExample":""}]',
      'title' => '开通关联资源跟随转组功能',
    ),
    'DisableAssociatedTransfer' => 
    array (
      'summary' => '调用DisableAssociatedTransfer关闭关联资源跟随转组功能。',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7CE0AE54-6F27-5522-A429-4C5EE8FD40C8',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'UnsupportedOperation.RepeatDisableAssociatedTransferSetting',
            'errorMessage' => 'Repeat disable associated transfer setting is not supported.',
          ),
          1 => 
          array (
            'errorCode' => 'UnsupportedOperation.DisableAssociatedTransferSetting',
            'errorMessage' => 'UnsupportedOperation.DisableAssociatedTransferSetting',
          ),
          2 => 
          array (
            'errorCode' => 'EntityExists.AssociatedTransferTasks',
            'errorMessage' => 'Disable associated transfer setting is not supported when associated transfer task exists.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7CE0AE54-6F27-5522-A429-4C5EE8FD40C8\\"\\n}","errorExample":""},{"type":"xml","example":"<DisableAssociatedTransferResponse>\\n    <RequestId>7CE0AE54-6F27-5522-A429-4C5EE8FD40C8</RequestId>\\n</DisableAssociatedTransferResponse>","errorExample":""}]',
      'title' => '关闭关联资源跟随转组功能',
    ),
    'UpdateAssociatedTransferSetting' => 
    array (
      'summary' => '调用UpdateAssociatedTransferSetting更新关联转组功能设置。',
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
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RuleSettings',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '关联转组功能规则设置。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '关联转组功能规则设置。',
              'type' => 'object',
              'properties' => 
              array (
                'Status' => 
                array (
                  'description' => '关联转组功能开通状态。取值：

- Enable：开启。
- Disable：关闭。',
                  'type' => 'string',
                  'required' => true,
                  'enumValueTitles' => 
                  array (
                  ),
                  'example' => 'Enable',
                  'enum' => 
                  array (
                    0 => 'Enable',
                    1 => 'Disable',
                  ),
                ),
                'MasterService' => 
                array (
                  'description' => '主资源的云服务代码。

您可以从[支持资源组的云服务](~~94479~~)的**云服务代码**列获取云服务代码。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ecs',
                ),
                'MasterResourceType' => 
                array (
                  'description' => '主资源的资源类型。

您可以从[支持资源组的云服务](~~94479~~)的**资源类型**列获取资源类型。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'instance',
                ),
                'AssociatedService' => 
                array (
                  'description' => '关联资源的云服务代码。

您可以从[支持资源组的云服务](~~94479~~)的**云服务代码**列获取云服务代码。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ecs',
                ),
                'AssociatedResourceType' => 
                array (
                  'description' => '关联资源的资源类型。

您可以从[支持资源组的云服务](~~94479~~)的**资源类型**列获取资源类型。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'disk',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'EnableExistingResourcesTransfer',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否启动存量关联资源跟随转组任务。取值：

- false：不启动存量关联资源跟随转组任务。
- true：启动存量关联资源跟随转组任务。',
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
            'title' => 'Schema of Response',
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7B8A4E7D-6CFF-471D-84DF-195A7A241ECB',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'UnsupportedOperation.UpdateAssociatedTransferRuleSetting',
            'errorMessage' => 'Updating associated transfer rule setting before open associated transfer is not supported.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.AssociatedTransferRule',
            'errorMessage' => 'The associated transfer rule does not EXIST.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7B8A4E7D-6CFF-471D-84DF-195A7A241ECB\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateAssociatedTransferSettingResponse>\\n    <RequestId>7B8A4E7D-6CFF-471D-84DF-195A7A241ECB</RequestId>\\n</UpdateAssociatedTransferSettingResponse>","errorExample":""}]',
      'title' => '更新关联转组功能设置',
      'description' => '支持关联资源跟随转组的云资源，请参见[关联资源跟随转组](~~606232~~)。',
    ),
    'ListAssociatedTransferSetting' => 
    array (
      'summary' => '调用ListAssociatedTransferSetting获取关联转组功能设置。',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7556FD65-45D2-5C45-9FC9-A7DE831C775C',
              ),
              'AssociatedTransferSetting' => 
              array (
                'description' => '关联转组功能设置。',
                'type' => 'object',
                'properties' => 
                array (
                  'AccountId' => 
                  array (
                    'description' => '阿里云账号（主账号）ID。',
                    'type' => 'string',
                    'example' => '121998723923****',
                  ),
                  'Status' => 
                  array (
                    'description' => '关联转组功能开通状态。取值：

- Enable：开启。
- Disable：关闭。',
                    'type' => 'string',
                    'example' => 'Enable',
                  ),
                  'RuleSettings' => 
                  array (
                    'description' => '关联转组功能规则设置。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '关联转组功能规则设置。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AssociatedResourceType' => 
                        array (
                          'description' => '关联资源的资源类型。',
                          'type' => 'string',
                          'example' => 'disk',
                        ),
                        'MasterResourceType' => 
                        array (
                          'description' => '主资源的资源类型。',
                          'type' => 'string',
                          'example' => 'instance',
                        ),
                        'AssociatedService' => 
                        array (
                          'description' => '关联资源的云服务代码。',
                          'type' => 'string',
                          'example' => 'ecs',
                        ),
                        'MasterService' => 
                        array (
                          'description' => '主资源的云服务代码。',
                          'type' => 'string',
                          'example' => 'ecs',
                        ),
                        'Status' => 
                        array (
                          'description' => '关联转组功能开通状态。取值：

- Enable：开启。
- Disable：关闭。',
                          'type' => 'string',
                          'example' => 'Enable',
                        ),
                      ),
                    ),
                  ),
                  'EnableExistingResourcesTransfer' => 
                  array (
                    'description' => '是否启动存量关联资源跟随转组任务。取值：

- false：不启动存量关联资源跟随转组任务。
- true：启动存量关联资源跟随转组任务。',
                    'type' => 'string',
                    'example' => 'true',
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
            'errorCode' => 'EntityNotExists.AssociatedTransferSetting',
            'errorMessage' => 'The associated transfer setting does not EXIST.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7556FD65-45D2-5C45-9FC9-A7DE831C775C\\",\\n  \\"AssociatedTransferSetting\\": {\\n    \\"AccountId\\": \\"121998723923****\\",\\n    \\"Status\\": \\"Enable\\",\\n    \\"RuleSettings\\": [\\n      {\\n        \\"AssociatedResourceType\\": \\"disk\\",\\n        \\"MasterResourceType\\": \\"instance\\",\\n        \\"AssociatedService\\": \\"ecs\\",\\n        \\"MasterService\\": \\"ecs\\",\\n        \\"Status\\": \\"Enable\\"\\n      }\\n    ],\\n    \\"EnableExistingResourcesTransfer\\": \\"true\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListAssociatedTransferSettingResponse>\\n    <RequestId>7556FD65-45D2-5C45-9FC9-A7DE831C775C</RequestId>\\n    <AssociatedTransferSetting>\\n        <AccountId>121998723923****</AccountId>\\n        <Status>Enable</Status>\\n        <RuleSettings>\\n            <AssociatedResourceType>disk</AssociatedResourceType>\\n            <MasterResourceType>instance</MasterResourceType>\\n            <AssociatedService>ecs</AssociatedService>\\n            <MasterService>ecs</MasterService>\\n            <Status>Enable</Status>\\n        </RuleSettings>\\n        <EnableExistingResourcesTransfer>true</EnableExistingResourcesTransfer>\\n    </AssociatedTransferSetting>\\n</ListAssociatedTransferSettingResponse>","errorExample":""}]',
      'title' => '获取关联转组功能设置',
    ),
    'CreateRole' => 
    array (
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
          'name' => 'RoleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '角色名称。

长度为1~64个字符，可包含英文字母、数字、点号（.）和短横线（-）。',
            'type' => 'string',
            'required' => true,
            'example' => 'ECSAdmin',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '角色描述。

长度为1~1024个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'ECS管理角色',
          ),
        ),
        2 => 
        array (
          'name' => 'AssumeRolePolicyDocument',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '扮演角色的权限策略内容。

指定允许扮演该角色的一个或多个主体，这个主体可以是阿里云账号、阿里云服务或身份提供商。

> RAM用户不能扮演可信实体为阿里云服务的RAM角色。 ',
            'type' => 'string',
            'required' => true,
            'example' => '{ "Statement": [ { "Action": "sts:AssumeRole", "Effect": "Allow", "Principal": { "RAM": "acs:ram::12345678901234****:root" } } ], "Version": "1" }',
          ),
        ),
        3 => 
        array (
          'name' => 'MaxSessionDuration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '角色最大会话时间。

取值范围：3600秒~43200秒。默认值：3600秒。

取值为空时将采用默认值。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '3600',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Role' => 
              array (
                'description' => '角色信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'AssumeRolePolicyDocument' => 
                  array (
                    'description' => '扮演角色的权限策略内容。',
                    'type' => 'string',
                    'example' => '{ \\"Statement\\": [ { \\"Action\\": \\"sts:AssumeRole\\", \\"Effect\\": \\"Allow\\", \\"Principal\\": { \\"RAM\\": \\"acs:ram::12345678901234****:root\\" } } ], \\"Version\\": \\"1\\" }',
                  ),
                  'RolePrincipalName' => 
                  array (
                    'description' => '被授权角色名称。',
                    'type' => 'string',
                    'example' => 'ECSAdmin@role.123456.onaliyunservice.com',
                  ),
                  'Description' => 
                  array (
                    'description' => '角色描述。',
                    'type' => 'string',
                    'example' => 'ECS管理角色',
                  ),
                  'MaxSessionDuration' => 
                  array (
                    'description' => '角色最大会话时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '3600',
                  ),
                  'RoleName' => 
                  array (
                    'description' => '角色名称。',
                    'type' => 'string',
                    'example' => 'ECSAdmin',
                  ),
                  'CreateDate' => 
                  array (
                    'description' => '角色创建时间。',
                    'type' => 'string',
                    'example' => '2015-01-23T12:33:18Z',
                  ),
                  'Arn' => 
                  array (
                    'description' => '角色的资源描述符。',
                    'type' => 'string',
                    'example' => 'acs:ram::123456789012****:role/ECSAdmin',
                  ),
                  'RoleId' => 
                  array (
                    'description' => '角色ID。',
                    'type' => 'string',
                    'example' => '90123456789****',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.RoleName.InvalidChars',
            'errorMessage' => 'The specified role name contains invalid characters.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.RoleName.Length',
            'errorMessage' => 'The maximum length of the role name is exceeded.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.AssumeRolePolicyDocument.Length',
            'errorMessage' => 'The maximum length of the trust policy document of the role is exceeded.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityAlreadyExists.Role',
            'errorMessage' => 'The role already exists.',
          ),
          1 => 
          array (
            'errorCode' => 'MalformedPolicyDocument',
            'errorMessage' => 'The policy format is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'LimitExceeded.Role',
            'errorMessage' => 'The maximum number of roles is exceeded.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Role\\": {\\n    \\"AssumeRolePolicyDocument\\": \\"{ \\\\\\\\\\\\\\"Statement\\\\\\\\\\\\\\": [ { \\\\\\\\\\\\\\"Action\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"sts:AssumeRole\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"Effect\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"Allow\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"Principal\\\\\\\\\\\\\\": { \\\\\\\\\\\\\\"RAM\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"acs:ram::12345678901234****:root\\\\\\\\\\\\\\" } } ], \\\\\\\\\\\\\\"Version\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"1\\\\\\\\\\\\\\" }\\",\\n    \\"RolePrincipalName\\": \\"ECSAdmin@role.123456.onaliyunservice.com\\",\\n    \\"Description\\": \\"ECS管理角色\\",\\n    \\"MaxSessionDuration\\": 3600,\\n    \\"RoleName\\": \\"ECSAdmin\\",\\n    \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\",\\n    \\"Arn\\": \\"acs:ram::123456789012****:role/ECSAdmin\\",\\n    \\"RoleId\\": \\"90123456789****\\"\\n  },\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<CreateRoleResponse>\\r\\n\\t<RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\r\\n\\t<Role>\\r\\n\\t\\t<RoleId>90123456789****</RoleId>\\r\\n\\t\\t<RoleName>ECSAdmin</RoleName>\\r\\n\\t\\t<RolePrincipalName>ECSAdmin@role.123456.onaliyunservice.com</RolePrincipalName>\\r\\n\\t\\t<Arn>acs:ram::123456789012****:role/ECSAdmin</Arn>\\r\\n\\t\\t<Description>ECS管理角色</Description>\\r\\n\\t\\t<MaxSessionDuration>3600</MaxSessionDuration>\\r\\n\\t\\t<AssumeRolePolicyDocument>{ &quot;Statement&quot;: [ { &quot;Action&quot;: &quot;sts:AssumeRole&quot;, &quot;Effect&quot;: &quot;Allow&quot;, &quot;Principal&quot;: { &quot;RAM&quot;: &quot;acs:ram::12345678901234****:root&quot; } } ], &quot;Version&quot;: &quot;1&quot; }</AssumeRolePolicyDocument>\\r\\n\\t\\t<CreateDate>2015-01-23T12:33:18Z</CreateDate>\\r\\n\\t</Role>\\r\\n</CreateRoleResponse>\\t\\r\\n","errorExample":""}]',
      'title' => '创建角色',
      'summary' => '调用CreateRole创建角色。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteRole' => 
    array (
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
          'name' => 'RoleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '角色名称。

长度为1~64个字符，可包含英文字母、数字、点号（.）和短横线（-）。',
            'type' => 'string',
            'required' => true,
            'example' => 'ECSAdmin',
          ),
        ),
      ),
      'responses' => 
      array (
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
                'example' => '898FAB24-7509-43EE-A287-086FE4C44394',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.RoleName.InvalidChars',
            'errorMessage' => 'The specified role name contains invalid characters.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.RoleName.Length',
            'errorMessage' => 'The maximum length of the role name is exceeded.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.Role',
            'errorMessage' => 'The role does not exist.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'DeleteConflict.Role.Policy',
            'errorMessage' => 'The role cannot have any attached policies when you delete it.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"898FAB24-7509-43EE-A287-086FE4C44394\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\r\\n<DeleteRoleResponse>\\r\\n     <RequestId type=\\"string\\">898FAB24-7509-43EE-A287-086FE4C44394</RequestId>\\r\\n</DeleteRoleResponse>","errorExample":""}]',
      'title' => '删除角色',
      'summary' => '调用DeleteRole删除角色。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateRole' => 
    array (
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
          'name' => 'RoleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'RAM角色名称。

长度为1~64个字符，可包含英文字母、数字、半角句号（.）和短划线（-）。',
            'type' => 'string',
            'required' => true,
            'example' => 'ECSAdmin',
          ),
        ),
        1 => 
        array (
          'name' => 'NewAssumeRolePolicyDocument',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'RAM角色的信任策略。',
            'type' => 'string',
            'required' => false,
            'example' => '{ "Statement": [ { "Action": "sts:AssumeRole", "Effect": "Allow", "Principal": { "RAM": "acs:ram::12345678901234****:root" } } ], "Version": "1" }',
          ),
        ),
        2 => 
        array (
          'name' => 'NewMaxSessionDuration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'RAM角色最大会话时间。

取值范围：3600秒~43200秒。默认值：3600秒。

取值为空时将采用默认值。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '3600',
          ),
        ),
        3 => 
        array (
          'name' => 'NewDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'RAM角色描述。

长度为1~1024个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'ECS管理员',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Role' => 
              array (
                'description' => 'RAM角色信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'AssumeRolePolicyDocument' => 
                  array (
                    'description' => 'RAM角色的信任策略。',
                    'type' => 'string',
                    'example' => '{ \\"Statement\\": [ { \\"Action\\": \\"sts:AssumeRole\\", \\"Effect\\": \\"Allow\\", \\"Principal\\": { \\"RAM\\": \\"acs:ram::12345678901234****:root\\" } } ], \\"Version\\": \\"1\\" }',
                  ),
                  'RolePrincipalName' => 
                  array (
                    'description' => '被授权RAM角色名称。',
                    'type' => 'string',
                    'example' => 'ECSAdmin@role.123456.onaliyunservice.com',
                  ),
                  'Description' => 
                  array (
                    'description' => 'RAM角色描述。',
                    'type' => 'string',
                    'example' => 'ECS管理角色',
                  ),
                  'UpdateDate' => 
                  array (
                    'description' => 'RAM角色更新时间。',
                    'type' => 'string',
                    'example' => '2016-01-23T12:33:18Z',
                  ),
                  'MaxSessionDuration' => 
                  array (
                    'description' => 'RAM角色最大会话时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '3600',
                  ),
                  'RoleName' => 
                  array (
                    'description' => 'RAM角色名称。',
                    'type' => 'string',
                    'example' => 'ECSAdmin',
                  ),
                  'CreateDate' => 
                  array (
                    'description' => 'RAM角色创建时间。',
                    'type' => 'string',
                    'example' => '2015-01-23T12:33:18Z',
                  ),
                  'RoleId' => 
                  array (
                    'description' => 'RAM角色ID。',
                    'type' => 'string',
                    'example' => '90123456789****',
                  ),
                  'Arn' => 
                  array (
                    'description' => 'RAM角色的资源描述符。',
                    'type' => 'string',
                    'example' => 'acs:ram::123456789012****:role/ECSAdmin',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.RoleName.InvalidChars',
            'errorMessage' => 'The specified role name contains invalid characters.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.RoleName.Length',
            'errorMessage' => 'The maximum length of the role name is exceeded.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.NewAssumeRolePolicyDocument.Length',
            'errorMessage' => 'The maximum length of the new trust policy document of the role is exceeded.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.Role',
            'errorMessage' => 'The role does not exist.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'MalformedPolicyDocument',
            'errorMessage' => 'The policy format is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Role\\": {\\n    \\"AssumeRolePolicyDocument\\": \\"{ \\\\\\\\\\\\\\"Statement\\\\\\\\\\\\\\": [ { \\\\\\\\\\\\\\"Action\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"sts:AssumeRole\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"Effect\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"Allow\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"Principal\\\\\\\\\\\\\\": { \\\\\\\\\\\\\\"RAM\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"acs:ram::12345678901234****:root\\\\\\\\\\\\\\" } } ], \\\\\\\\\\\\\\"Version\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"1\\\\\\\\\\\\\\" }\\",\\n    \\"RolePrincipalName\\": \\"ECSAdmin@role.123456.onaliyunservice.com\\",\\n    \\"Description\\": \\"ECS管理角色\\",\\n    \\"UpdateDate\\": \\"2016-01-23T12:33:18Z\\",\\n    \\"MaxSessionDuration\\": 3600,\\n    \\"RoleName\\": \\"ECSAdmin\\",\\n    \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\",\\n    \\"RoleId\\": \\"90123456789****\\",\\n    \\"Arn\\": \\"acs:ram::123456789012****:role/ECSAdmin\\"\\n  },\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<UpdateRoleResponse>\\r\\n\\t<RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\r\\n\\t<Role>\\r\\n\\t\\t<RoleId>90123456789****</RoleId>\\r\\n\\t\\t<RoleName>ECSAdmin</RoleName>\\r\\n\\t\\t<RolePrincipalName>ECSAdmin@role.123456.onaliyunservice.com</RolePrincipalName>\\r\\n\\t\\t<Arn>acs:ram::123456789012****:role/ECSAdmin</Arn>\\r\\n\\t\\t<Description>ECS管理角色</Description>\\r\\n        <MaxSessionDuration>3600</MaxSessionDuration>\\r\\n\\t\\t<AssumeRolePolicyDocument>{ &quot;Statement&quot;: [ { &quot;Action&quot;: &quot;sts:AssumeRole&quot;, &quot;Effect&quot;: &quot;Allow&quot;, &quot;Principal&quot;: { &quot;RAM&quot;: &quot;acs:ram::12345678901234****:root&quot; } } ], &quot;Version&quot;: &quot;1&quot; }</AssumeRolePolicyDocument>\\r\\n\\t\\t<CreateDate>2015-01-23T12:33:18Z</CreateDate>\\r\\n\\t\\t<UpdateDate>2016-01-23T12:33:18Z</UpdateDate>\\r\\n\\t</Role>\\r\\n</UpdateRoleResponse>\\t\\r\\n","errorExample":""}]',
      'title' => '更新角色信息',
      'summary' => '调用UpdateRole更新RAM角色信息。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetRole' => 
    array (
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RoleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '角色名称。

长度为1~64个字符，可包含英文字母、数字、点号（.）和短横线（-）。',
            'type' => 'string',
            'required' => true,
            'example' => 'ECSAdmin',
          ),
        ),
        1 => 
        array (
          'name' => 'Language',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言类型。角色描述将以此语言返回。

- en：英文。
- zh-CN：中文。
- ja：日文。',
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
              'Role' => 
              array (
                'description' => '角色信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'AssumeRolePolicyDocument' => 
                  array (
                    'description' => '扮演角色的权限策略内容。',
                    'type' => 'string',
                    'example' => '{ \\"Statement\\": [ { \\"Action\\": \\"sts:AssumeRole\\", \\"Effect\\": \\"Allow\\", \\"Principal\\": { \\"RAM\\": \\"acs:ram::12345678901234****:root\\" } } ], \\"Version\\": \\"1\\" }',
                  ),
                  'RolePrincipalName' => 
                  array (
                    'description' => '被授权角色名称。',
                    'type' => 'string',
                    'example' => 'ECSAdmin@role.123456.onaliyunservice.com',
                  ),
                  'UpdateDate' => 
                  array (
                    'description' => '角色更新时间。',
                    'type' => 'string',
                    'example' => '2016-01-23T12:33:18Z',
                  ),
                  'Description' => 
                  array (
                    'description' => '角色描述。',
                    'type' => 'string',
                    'example' => 'ECS管理角色',
                  ),
                  'MaxSessionDuration' => 
                  array (
                    'description' => '角色最大会话时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '3600',
                  ),
                  'LatestDeletionTask' => 
                  array (
                    'description' => '最近一次删除任务信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'DeletionTaskId' => 
                      array (
                        'description' => '删除任务ID。',
                        'type' => 'string',
                        'example' => 'ECSAdmin/cc61514b-26eb-4453-ab53-b142eb702a3d',
                      ),
                      'CreateDate' => 
                      array (
                        'description' => '删除任务创建时间。',
                        'type' => 'string',
                        'example' => '2018-10-23T12:33:18Z',
                      ),
                    ),
                  ),
                  'RoleName' => 
                  array (
                    'description' => '角色名称。',
                    'type' => 'string',
                    'example' => 'ECSAdmin',
                  ),
                  'CreateDate' => 
                  array (
                    'description' => '角色创建时间。',
                    'type' => 'string',
                    'example' => '2015-01-23T12:33:18Z',
                  ),
                  'RoleId' => 
                  array (
                    'description' => '角色ID。',
                    'type' => 'string',
                    'example' => '90123456789****',
                  ),
                  'Arn' => 
                  array (
                    'description' => '角色的资源描述符。',
                    'type' => 'string',
                    'example' => 'acs:ram::123456789012****:role/ECSAdmin',
                  ),
                  'IsServiceLinkedRole' => 
                  array (
                    'description' => '是否为服务关联角色。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.RoleName.InvalidChars',
            'errorMessage' => 'The specified role name contains invalid characters.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.RoleName.Length',
            'errorMessage' => 'The maximum length of the role name is exceeded.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.Role',
            'errorMessage' => 'The role does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Role\\": {\\n    \\"AssumeRolePolicyDocument\\": \\"{ \\\\\\\\\\\\\\"Statement\\\\\\\\\\\\\\": [ { \\\\\\\\\\\\\\"Action\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"sts:AssumeRole\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"Effect\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"Allow\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"Principal\\\\\\\\\\\\\\": { \\\\\\\\\\\\\\"RAM\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"acs:ram::12345678901234****:root\\\\\\\\\\\\\\" } } ], \\\\\\\\\\\\\\"Version\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"1\\\\\\\\\\\\\\" }\\",\\n    \\"RolePrincipalName\\": \\"ECSAdmin@role.123456.onaliyunservice.com\\",\\n    \\"UpdateDate\\": \\"2016-01-23T12:33:18Z\\",\\n    \\"Description\\": \\"ECS管理角色\\",\\n    \\"MaxSessionDuration\\": 3600,\\n    \\"LatestDeletionTask\\": {\\n      \\"DeletionTaskId\\": \\"ECSAdmin/cc61514b-26eb-4453-ab53-b142eb702a3d\\",\\n      \\"CreateDate\\": \\"2018-10-23T12:33:18Z\\"\\n    },\\n    \\"RoleName\\": \\"ECSAdmin\\",\\n    \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\",\\n    \\"RoleId\\": \\"90123456789****\\",\\n    \\"Arn\\": \\"acs:ram::123456789012****:role/ECSAdmin\\",\\n    \\"IsServiceLinkedRole\\": true\\n  },\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<GetRoleResponse>\\r\\n\\t<RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\r\\n\\t<Role>\\r\\n\\t\\t<RoleId>90123456789****</RoleId>\\r\\n\\t\\t<RoleName>ECSAdmin</RoleName>\\r\\n\\t\\t<RolePrincipalName>ECSAdmin@role.123456.onaliyunservice.com</RolePrincipalName>\\r\\n\\t\\t<Arn>acs:ram::123456789012****:role/ECSAdmin</Arn>\\r\\n\\t\\t<IsServiceLinkedRole>true</IsServiceLinkedRole>\\r\\n\\t\\t<LatestDeletionTask>\\r\\n\\t\\t\\t<CreateDate>2018-10-23T12:33:18Z</CreateDate>\\r\\n\\t\\t\\t<DeletionTaskId>ECSAdmin/cc61514b-26eb-4453-ab53-b142eb702a3d</DeletionTaskId>\\r\\n\\t\\t</LatestDeletionTask>\\r\\n\\t\\t<Description>ECS管理角色</Description>\\r\\n        <MaxSessionDuration>3600</MaxSessionDuration>\\r\\n\\t\\t<AssumeRolePolicyDocument>{ &quot;Statement&quot;: [ { &quot;Action&quot;: &quot;sts:AssumeRole&quot;, &quot;Effect&quot;: &quot;Allow&quot;, &quot;Principal&quot;: { &quot;RAM&quot;: &quot;acs:ram::12345678901234****:root&quot; } } ], &quot;Version&quot;: &quot;1&quot; }</AssumeRolePolicyDocument>\\r\\n\\t\\t<CreateDate>2015-01-23T12:33:18Z</CreateDate>\\r\\n\\t\\t<UpdateDate>2016-01-23T12:33:18Z</UpdateDate>\\r\\n\\t</Role>\\r\\n</GetRoleResponse>\\t\\r\\n","errorExample":""}]',
      'title' => '获取角色信息',
      'summary' => '调用GetRole获取角色信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListRoles' => 
    array (
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
            'description' => '页码。

起始值：1。默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
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
            'description' => '分页时每页显示的数据行数。

取值范围：1~100。默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'Language',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言类型。角色描述将以此语言返回。

- en：英文。
- zh-CN：中文。
- ja：日文。',
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
              'TotalCount' => 
              array (
                'description' => '角色总个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7B8A4E7D-6CFF-471D-84DF-195A7A241ECB',
              ),
              'PageSize' => 
              array (
                'description' => '分页时每页显示的数据行数。',
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
              'Roles' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Role' => 
                  array (
                    'description' => '角色信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '角色信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RolePrincipalName' => 
                        array (
                          'description' => '被授权角色名称。',
                          'type' => 'string',
                          'example' => 'ECSAdmin@role.123456.onaliyunservice.com',
                        ),
                        'UpdateDate' => 
                        array (
                          'description' => '角色更新时间。',
                          'type' => 'string',
                          'example' => '2016-01-23T12:33:18Z',
                        ),
                        'Description' => 
                        array (
                          'description' => '角色描述。',
                          'type' => 'string',
                          'example' => 'ECS管理角色',
                        ),
                        'MaxSessionDuration' => 
                        array (
                          'description' => '角色最大会话时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '3600',
                        ),
                        'LatestDeletionTask' => 
                        array (
                          'description' => '最近一次删除任务信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'DeletionTaskId' => 
                            array (
                              'description' => '删除任务ID。',
                              'type' => 'string',
                              'example' => 'ECSAdmin/cc61514b-26eb-4453-ab53-b142eb70****',
                            ),
                            'CreateDate' => 
                            array (
                              'description' => '删除任务创建时间。',
                              'type' => 'string',
                              'example' => '2018-10-23T12:33:18Z',
                            ),
                          ),
                        ),
                        'RoleName' => 
                        array (
                          'description' => '角色名称。',
                          'type' => 'string',
                          'example' => 'ECSAdmin',
                        ),
                        'CreateDate' => 
                        array (
                          'description' => '角色创建时间。',
                          'type' => 'string',
                          'example' => '2015-01-23T12:33:18Z',
                        ),
                        'RoleId' => 
                        array (
                          'description' => '角色ID。',
                          'type' => 'string',
                          'example' => '90123456789****',
                        ),
                        'Arn' => 
                        array (
                          'description' => '角色的资源描述符。',
                          'type' => 'string',
                          'example' => 'acs:ram::123456789012****:role/ECSAdmin',
                        ),
                        'IsServiceLinkedRole' => 
                        array (
                          'description' => '是否服务关联角色。',
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
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 2,\\n  \\"RequestId\\": \\"7B8A4E7D-6CFF-471D-84DF-195A7A241ECB\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"Roles\\": {\\n    \\"Role\\": [\\n      {\\n        \\"RolePrincipalName\\": \\"ECSAdmin@role.123456.onaliyunservice.com\\",\\n        \\"UpdateDate\\": \\"2016-01-23T12:33:18Z\\",\\n        \\"Description\\": \\"ECS管理角色\\",\\n        \\"MaxSessionDuration\\": 3600,\\n        \\"LatestDeletionTask\\": {\\n          \\"DeletionTaskId\\": \\"ECSAdmin/cc61514b-26eb-4453-ab53-b142eb70****\\",\\n          \\"CreateDate\\": \\"2018-10-23T12:33:18Z\\"\\n        },\\n        \\"RoleName\\": \\"ECSAdmin\\",\\n        \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\",\\n        \\"RoleId\\": \\"90123456789****\\",\\n        \\"Arn\\": \\"acs:ram::123456789012****:role/ECSAdmin\\",\\n        \\"IsServiceLinkedRole\\": true\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ListRolesResponse>\\r\\n\\t<RequestId>7B8A4E7D-6CFF-471D-84DF-195A7A241ECB</RequestId>\\r\\n\\t<PageNumber>1</PageNumber>\\r\\n\\t<PageSize>10</PageSize>\\r\\n\\t<TotalCount>2</TotalCount>\\r\\n\\t<Roles>\\r\\n\\t\\t<Role>\\r\\n\\t\\t\\t<RoleId>90123456789****</RoleId>\\r\\n\\t\\t\\t<RoleName>ECSAdmin</RoleName>\\r\\n\\t\\t\\t<RolePrincipalName>ECSAdmin@role.123456.onaliyunservice.com</RolePrincipalName>\\r\\n\\t\\t\\t<Arn>acs:ram::123456789012****:role/ECSAdmin</Arn>\\r\\n\\t\\t\\t<IsServiceLinkedRole>true</IsServiceLinkedRole>\\r\\n\\t\\t\\t<LatestDeletionTask>\\r\\n\\t\\t\\t\\t<CreateDate>2018-10-23T12:33:18Z</CreateDate>\\r\\n\\t\\t\\t\\t<DeletionTaskId>ECSAdmin/cc61514b-26eb-4453-ab53-b142eb70****</DeletionTaskId>\\r\\n\\t\\t\\t</LatestDeletionTask>\\r\\n\\t\\t\\t<Description>ECS管理角色</Description>\\r\\n            <MaxSessionDuration>3600</MaxSessionDuration>\\r\\n\\t\\t\\t<CreateDate>2015-01-23T12:33:18Z</CreateDate>\\r\\n\\t\\t\\t<UpdateDate>2015-01-23T12:33:18Z</UpdateDate>\\r\\n\\t\\t</Role>\\r\\n\\t\\t<Role>\\r\\n\\t\\t\\t<RoleId>90123456789****</RoleId>\\r\\n\\t\\t\\t<RoleName>OSSReadonlyAccess</RoleName>\\r\\n\\t\\t\\t<RolePrincipalName>OSSReadonlyAccess@role.123456.onaliyunservice.com</RolePrincipalName>\\r\\n\\t\\t\\t<Arn>acs:ram::123456789012****:role/OSSReadonlyAccess</Arn>\\r\\n\\t\\t\\t<Description>OSS只读访问角色</Description>\\r\\n            <MaxSessionDuration>3600</MaxSessionDuration>\\r\\n\\t\\t\\t<CreateDate>2015-01-23T12:33:18Z</CreateDate>\\r\\n\\t\\t\\t<UpdateDate>2015-01-23T12:33:18Z</UpdateDate>\\r\\n\\t\\t</Role>\\r\\n\\t</Roles>\\r\\n</ListRolesResponse>\\t\\r\\n","errorExample":""}]',
      'title' => '查看角色列表',
      'summary' => '调用ListRoles查看角色列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateServiceLinkedRole' => 
    array (
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ServiceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务名称。

具体信息，请参见[支持服务关联角色的云服务](~~461722~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'polardb.aliyuncs.com',
          ),
        ),
        1 => 
        array (
          'name' => 'CustomSuffix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '角色名称后缀。

角色名称（含后缀）的总长度为1~64个字符，可包含英文字母、数字、半角句号（.）和短划线（-）。

例如：假设后缀为`Example`，则角色名称为`ServiceLinkedRoleName_Example`，且最大长度不能超过64个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'Example',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务关联角色描述。

只有允许自定义后缀的服务关联角色才能填写角色描述，否则，角色描述将使用预设值且不能修改。

长度为1~1024个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'Service Linked Role for PolarDB. PolarDB will use this role to access your resources in other services.',
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
              'Role' => 
              array (
                'description' => '角色信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'AssumeRolePolicyDocument' => 
                  array (
                    'description' => '角色的信任策略内容。',
                    'type' => 'string',
                    'example' => '{\\"Statement\\":[{\\"Action\\":\\"sts:AssumeRole\\",\\"Effect\\":\\"Allow\\",\\"Principal\\":{\\"Service\\":[\\"polardb.aliyuncs.com\\"]}}],\\"Version\\":\\"1\\"}',
                  ),
                  'RolePrincipalName' => 
                  array (
                    'description' => '带域名后缀的角色名称。',
                    'type' => 'string',
                    'example' => 'AliyunServiceRoleForPolarDB@role.test.onaliyunservice.com',
                  ),
                  'Description' => 
                  array (
                    'description' => '角色描述。',
                    'type' => 'string',
                    'example' => 'Service Linked Role for PolarDB. PolarDB will use this role to access your resources in other services.',
                  ),
                  'RoleName' => 
                  array (
                    'description' => '角色名称。',
                    'type' => 'string',
                    'example' => 'AliyunServiceRoleForPolarDB',
                  ),
                  'CreateDate' => 
                  array (
                    'description' => '角色创建时间（UTC时间）。',
                    'type' => 'string',
                    'example' => '2020-06-30T08:14:16Z',
                  ),
                  'Arn' => 
                  array (
                    'description' => '角色的资源描述符。',
                    'type' => 'string',
                    'example' => 'acs:ram::177242285274****:role/aliyunserviceroleforpolardb',
                  ),
                  'RoleId' => 
                  array (
                    'description' => '角色ID。',
                    'type' => 'string',
                    'example' => '32833240981067****',
                  ),
                  'IsServiceLinkedRole' => 
                  array (
                    'description' => '是否为服务关联角色。取值：

- true：是服务关联角色。
- false：不是服务关联角色。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE58D7CF-03BC-432A-B42D-BC3390C8C2E1',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.CustomSuffix.NotAllowed',
            'errorMessage' => 'Custom suffix is not allowed for this Service Linked Role.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.CustomSuffix.InvalidChars',
            'errorMessage' => 'The parameter CustomSuffix contains invalid characters.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.CustomSuffix.Length',
            'errorMessage' => 'The maximum length of the parameter CustomSuffix is exceeded.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.Description.NotAllowed',
            'errorMessage' => 'Custom description is not allowed for default service linked role.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.Description.Length',
            'errorMessage' => 'The maximum length of the description is exceeded. It must not exceed 1024 characters.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.Service',
            'errorMessage' => 'The service does not exist.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityAlreadyExists.Role',
            'errorMessage' => 'The role already exists.',
          ),
          1 => 
          array (
            'errorCode' => 'LimitExceeded.Role',
            'errorMessage' => 'The maximum number of roles is exceeded.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Role\\": {\\n    \\"AssumeRolePolicyDocument\\": \\"{\\\\\\\\\\\\\\"Statement\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"Action\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"sts:AssumeRole\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"Effect\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"Allow\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"Principal\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"Service\\\\\\\\\\\\\\":[\\\\\\\\\\\\\\"polardb.aliyuncs.com\\\\\\\\\\\\\\"]}}],\\\\\\\\\\\\\\"Version\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"1\\\\\\\\\\\\\\"}\\",\\n    \\"RolePrincipalName\\": \\"AliyunServiceRoleForPolarDB@role.test.onaliyunservice.com\\",\\n    \\"Description\\": \\"Service Linked Role for PolarDB. PolarDB will use this role to access your resources in other services.\\",\\n    \\"RoleName\\": \\"AliyunServiceRoleForPolarDB\\",\\n    \\"CreateDate\\": \\"2020-06-30T08:14:16Z\\",\\n    \\"Arn\\": \\"acs:ram::177242285274****:role/aliyunserviceroleforpolardb\\",\\n    \\"RoleId\\": \\"32833240981067****\\",\\n    \\"IsServiceLinkedRole\\": true\\n  },\\n  \\"RequestId\\": \\"FE58D7CF-03BC-432A-B42D-BC3390C8C2E1\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateServiceLinkedRoleResponse>\\n    <Role>\\n        <RoleName>AliyunServiceRoleForPolarDB</RoleName>\\n        <Description>Service Linked Role for PolarDB. PolarDB will use this role to access your resources in other services.</Description>\\n        <AssumeRolePolicyDocument>{\\"Statement\\":[{\\"Action\\":\\"sts:AssumeRole\\",\\"Effect\\":\\"Allow\\",\\"Principal\\":{\\"Service\\":[\\"polardb.aliyuncs.com\\"]}}],\\"Version\\":\\"1\\"}</AssumeRolePolicyDocument>\\n        <Arn>acs:ram::177242285274****:role/aliyunserviceroleforpolardb</Arn>\\n        <IsServiceLinkedRole>true</IsServiceLinkedRole>\\n        <CreateDate>2020-06-30T08:14:16Z</CreateDate>\\n        <RoleId>32833240981067****</RoleId>\\n        <RolePrincipalName>AliyunServiceRoleForPolarDB@role.test.onaliyunservice.com</RolePrincipalName>\\n    </Role>\\n    <RequestId>FE58D7CF-03BC-432A-B42D-BC3390C8C2E1</RequestId>\\n</CreateServiceLinkedRoleResponse>","errorExample":""}]',
      'title' => '创建服务关联角色',
      'summary' => '调用CreateServiceLinkedRole创建服务关联角色。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteServiceLinkedRole' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'RoleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '角色名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'AliyunServiceRoleForPolarDB',
          ),
        ),
      ),
      'responses' => 
      array (
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
                'example' => 'B595E5BF-FF5F-4E7F-B95A-B90FE242FEB6',
              ),
              'DeletionTaskId' => 
              array (
                'description' => '删除任务ID。',
                'type' => 'string',
                'example' => 'task/acs-service-role/polardb.aliyuncs.com/AliyunServiceRoleForPolarDB/64c4f9cc-fac2-4692-ae1b-804ae4b9****',
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
            'errorCode' => 'EntityNotExist.Role',
            'errorMessage' => 'The role does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExist.ServiceLinkedRole',
            'errorMessage' => 'This role exists but is not a Service Linked Role.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B595E5BF-FF5F-4E7F-B95A-B90FE242FEB6\\",\\n  \\"DeletionTaskId\\": \\"task/acs-service-role/polardb.aliyuncs.com/AliyunServiceRoleForPolarDB/64c4f9cc-fac2-4692-ae1b-804ae4b9****\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteServiceLinkedRoleResponse>\\n    <RequestId>B595E5BF-FF5F-4E7F-B95A-B90FE242FEB6</RequestId>\\n    <DeletionTaskId>task/acs-service-role/polardb.aliyuncs.com/AliyunServiceRoleForPolarDB/64c4f9cc-fac2-4692-ae1b-804ae4b9****</DeletionTaskId>\\n</DeleteServiceLinkedRoleResponse>","errorExample":""}]',
      'title' => '删除服务关联角色',
      'summary' => '调用DeleteServiceLinkedRole删除服务关联角色。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetServiceLinkedRoleDeletionStatus' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DeletionTaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '删除任务ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'task/acs-service-role/hdr.aliyuncs.com/AliyunServiceRoleForHdr/c4d22c52-247f-4ee1-83a2-6c0460bd****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Status' => 
              array (
                'description' => '任务状态。

- SUCCEEDED：删除成功。
- IN_PROGRESS：正在删除中。
- FAILED：删除失败。
- NOT_STARTED：删除未开始。
- INTERNAL_ERROR：内部异常错误。',
                'type' => 'string',
                'example' => 'FAILED',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '07194EB1-DB50-4513-A51D-99B30D635AEF',
              ),
              'Reason' => 
              array (
                'description' => '删除任务失败的原因。',
                'type' => 'object',
                'properties' => 
                array (
                  'Message' => 
                  array (
                    'description' => '失败信息。',
                    'type' => 'string',
                    'example' => 'Service-Linked Role acs:ram::196813227629****:role/aliyunserviceroleforhdr cannot be deleted as it is in use by hdr.aliyuncs.com.',
                  ),
                  'RoleUsages' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'RoleUsage' => 
                      array (
                        'description' => '使用服务关联角色的资源信息。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '使用服务关联角色的资源信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Region' => 
                            array (
                              'description' => '地域。',
                              'type' => 'string',
                              'example' => 'global',
                            ),
                            'Resources' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Resource' => 
                                array (
                                  'description' => '资源列表。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => '资源列表。',
                                    'type' => 'string',
                                    'example' => 'acs:hdr::196813227629****:sitepair/s-000h0y6kld0zwk8l****',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.DeletionTaskId',
            'errorMessage' => 'The DeletionTaskId is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.DeletionTaskId.Length',
            'errorMessage' => 'The length of DeletionTaskId must be between 26 and 255 characters.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.ServiceLinkedRole.DeletionTask',
            'errorMessage' => 'The deletion task for the given ID does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"FAILED\\",\\n  \\"RequestId\\": \\"07194EB1-DB50-4513-A51D-99B30D635AEF\\",\\n  \\"Reason\\": {\\n    \\"Message\\": \\"Service-Linked Role acs:ram::196813227629****:role/aliyunserviceroleforhdr cannot be deleted as it is in use by hdr.aliyuncs.com.\\",\\n    \\"RoleUsages\\": {\\n      \\"RoleUsage\\": [\\n        {\\n          \\"Region\\": \\"global\\",\\n          \\"Resources\\": {\\n            \\"Resource\\": [\\n              \\"acs:hdr::196813227629****:sitepair/s-000h0y6kld0zwk8l****\\"\\n            ]\\n          }\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\n<GetServiceLinkedRoleDeletionStatusResponse>\\n    <Status>FAILED</Status>\\n    <RequestId>07194EB1-DB50-4513-A51D-99B30D635AEF</RequestId>\\n    <Reason>\\n        <Message>Service-Linked Role acs:ram::196813227629****:role/aliyunserviceroleforhdr cannot be deleted as it is in use by hdr.aliyuncs.com.</Message>\\n        <RoleUsages>\\n            <RoleUsage>\\n                <Region>global</Region>\\n                <Resources>\\n                    <Resource>acs:hdr::196813227629****:sitepair/s-000h0y6kld0zwk8l****</Resource>\\n                </Resources>\\n            </RoleUsage>\\n        </RoleUsages>\\n    </Reason>\\n</GetServiceLinkedRoleDeletionStatusResponse>","errorExample":""}]',
      'title' => '获取删除服务关联角色的任务状态',
      'summary' => '调用GetServiceLinkedRoleDeletionStatus获取删除服务关联角色的任务状态。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PolicyName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限策略名称。

长度为1~128个字符，可包含英文字母、数字和短划线（-）。',
            'type' => 'string',
            'required' => true,
            'example' => 'OSS-Administrator',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限策略描述。

长度为1~1024个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'OSS管理员权限',
          ),
        ),
        2 => 
        array (
          'name' => 'PolicyDocument',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限策略内容。

长度为1~2048个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '{ "Statement": [{ "Action": ["oss:*"], "Effect": "Allow", "Resource": ["acs:oss:*:*:*"]}], "Version": "1"}',
          ),
        ),
      ),
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
                'description' => '权限策略信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'DefaultVersion' => 
                  array (
                    'description' => '权限策略版本号。默认值：v1。
',
                    'type' => 'string',
                    'example' => 'v1',
                  ),
                  'Description' => 
                  array (
                    'description' => '权限策略描述。',
                    'type' => 'string',
                    'example' => 'OSS管理员权限',
                  ),
                  'PolicyName' => 
                  array (
                    'description' => '权限策略名称。',
                    'type' => 'string',
                    'example' => 'OSS-Administrator',
                  ),
                  'CreateDate' => 
                  array (
                    'description' => '权限策略创建时间。',
                    'type' => 'string',
                    'example' => '2015-01-23T12:33:18Z',
                  ),
                  'PolicyType' => 
                  array (
                    'description' => '权限策略类型。取值：
- Custom：自定义策略。
- System：系统策略。',
                    'type' => 'string',
                    'example' => 'Custom',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.PolicyName.InvalidChars',
            'errorMessage' => 'The policy name contains invalid characters. It must only contain upper or lower case letters, numbers, and dash (-).',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.PolicyName.Length',
            'errorMessage' => 'The length of the policy name is invalid. It must be 1 to 128 characters in length.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.PolicyDocument.Length',
            'errorMessage' => 'The maximum length of the policy document is exceeded. It must not exceed 2048 characters.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.Description.Length',
            'errorMessage' => 'The maximum length of the description is exceeded. It must not exceed 1024 characters.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'MalformedPolicyDocument',
            'errorMessage' => 'The policy format is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityAlreadyExists.Policy',
            'errorMessage' => 'The policy already exists.',
          ),
          2 => 
          array (
            'errorCode' => 'LimitExceeded.Policy',
            'errorMessage' => 'The maximum number of policies is exceeded.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Policy\\": {\\n    \\"DefaultVersion\\": \\"v1\\",\\n    \\"Description\\": \\"OSS管理员权限\\",\\n    \\"PolicyName\\": \\"OSS-Administrator\\",\\n    \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\",\\n    \\"PolicyType\\": \\"Custom\\"\\n  },\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<CreatePolicyResponse>\\r\\n\\t<RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\r\\n\\t<Policy>\\r\\n\\t\\t<PolicyName>OSS-Administrator</PolicyName>\\r\\n\\t\\t<PolicyType>Custom</PolicyType>\\r\\n\\t\\t<Description>OSS管理员权限</Description>\\r\\n\\t\\t<DefaultVersion>v1</DefaultVersion>\\r\\n\\t\\t<CreateDate>2015-01-23T12:33:18Z</CreateDate>\\r\\n\\t</Policy>\\r\\n</CreatePolicyResponse>","errorExample":""}]',
      'title' => '创建权限策略',
      'summary' => '调用CreatePolicy创建一个权限策略。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PolicyName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限策略名称。

长度为1~128个字符，可包含英文字母、数字和短横线（-）。',
            'type' => 'string',
            'required' => true,
            'example' => 'OSS-Administrator',
          ),
        ),
      ),
      'responses' => 
      array (
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
                'example' => '898FAB24-7509-43EE-A287-086FE4C44394',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.PolicyName.InvalidChars',
            'errorMessage' => 'The policy name contains invalid characters. It must only contain upper or lower case letters, numbers, and dash (-).',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.PolicyName.Length',
            'errorMessage' => 'The length of the policy name is invalid. It must be 1 to 128 characters in length.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.Policy',
            'errorMessage' => 'The policy does not exist.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'DeleteConflict.Policy.User',
            'errorMessage' => 'Before deleting the policy, it may not be attached to any user.',
          ),
          1 => 
          array (
            'errorCode' => 'DeleteConflict.Policy.Group',
            'errorMessage' => 'The policy cannot be attached to any group when you delete it.',
          ),
          2 => 
          array (
            'errorCode' => 'DeleteConflict.Policy.Version',
            'errorMessage' => 'You must delete all non-default versions before you delete the policy.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"898FAB24-7509-43EE-A287-086FE4C44394\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DeletePolicyResponse>\\r\\n\\t<RequestId>898FAB24-7509-43EE-A287-086FE4C44394</RequestId>\\r\\n</DeletePolicyResponse>","errorExample":""}]',
      'title' => '删除权限策略',
      'summary' => '调用DeletePolicy删除指定的权限策略。',
      'description' => '> - 删除权限策略前，必须删除此权限策略的非默认版本。关于如何删除权限策略版本，请参见[DeletePolicyVersion](~~159041~~)。
> - 删除权限策略前，应保证当前权限策略未被引用（即未授予RAM用户、用户组或RAM角色）。关于如何移除授权，请参见[DetachPolicy](~~159168~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetDefaultPolicyVersion' => 
    array (
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
          'name' => 'PolicyName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限策略名称。

长度为1~128个字符，可包含英文字母、数字和短横线（-）。',
            'type' => 'string',
            'required' => true,
            'example' => 'OSS-Administrator',
          ),
        ),
        1 => 
        array (
          'name' => 'VersionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限策略版本标识。',
            'type' => 'string',
            'required' => true,
            'example' => 'v2',
          ),
        ),
      ),
      'responses' => 
      array (
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
                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.PolicyName.InvalidChars',
            'errorMessage' => 'The policy name contains invalid characters. It must only contain upper or lower case letters, numbers, and dash (-).',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.PolicyName.Length',
            'errorMessage' => 'The length of the policy name is invalid. It must be 1 to 128 characters in length.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.VersionId.Format',
            'errorMessage' => 'The specified version ID is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.Policy',
            'errorMessage' => 'The policy does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExist.Policy.Version',
            'errorMessage' => 'The policy version does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<SetDefaultPolicyVersionResponse>\\r\\n\\t<RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\r\\n</SetDefaultPolicyVersionResponse>","errorExample":""}]',
      'title' => '设置权限策略默认版本',
      'summary' => '调用SetDefaultPolicyVersion设置权限策略默认版本。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AttachPolicy' => 
    array (
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权范围。取值：

- 资源组ID：权限在指定的资源组内生效。
- 阿里云账号ID：被授权对象所属的阿里云账号ID，权限在该阿里云账号内生效。',
            'type' => 'string',
            'required' => true,
            'example' => 'rg-9gLOoK****',
          ),
        ),
        1 => 
        array (
          'name' => 'PolicyType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限策略类型。取值：

- Custom：自定义权限策略。
- System：系统权限策略。',
            'type' => 'string',
            'required' => true,
            'example' => 'System',
          ),
        ),
        2 => 
        array (
          'name' => 'PolicyName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限策略名称。

长度为1~128个字符，可包含英文字母、数字和短划线（-）。',
            'type' => 'string',
            'required' => true,
            'example' => 'AdministratorAccess',
          ),
        ),
        3 => 
        array (
          'name' => 'PrincipalType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '被授权对象类型。取值：

- IMSUser：RAM用户。
- IMSGroup：RAM用户组。
- ServiceRole：RAM角色。',
            'type' => 'string',
            'required' => true,
            'example' => 'IMSUser',
          ),
        ),
        4 => 
        array (
          'name' => 'PrincipalName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '被授权对象的名称。具体如下：

- RAM用户：格式为<UserName>@<AccountAlias>.onaliyun.com，其中<UserName>为RAM用户名称，<AccountAlias>为账号别名。
- RAM用户组：格式为<GroupName>@group.<AccountAlias>.onaliyun.com，其中<GroupName>为RAM用户组名称，<AccountAlias>为账号别名。
- RAM角色：格式为<RoleName>@role.<AccountAlias>.onaliyunservice.com，其中<RoleName>为RAM角色名称，<AccountAlias>为账号别名。

> 账号别名是默认域名中的一部分，请调用[GetDefaultDomain](~~186720~~)获取账号别名。
',
            'type' => 'string',
            'required' => true,
            'example' => 'alice@demo.onaliyun.com',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '697852FB-50D7-44D9-9774-530C31EAC572',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.PolicyType',
            'errorMessage' => 'The specified policy type is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.Policy',
            'errorMessage' => 'The policy does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceGroup',
            'errorMessage' => 'The specified resource group does not exist. You must first create a resource group.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'Invalid.ResourceGroup.Status',
            'errorMessage' => 'You cannot perform an operation on a resource group that is being created or deleted.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"697852FB-50D7-44D9-9774-530C31EAC572\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<AttachPolicyToUserResponse>\\r\\n\\t<RequestId>697852FB-50D7-44D9-9774-530C31EAC572</RequestId>\\r\\n</AttachPolicyToUserResponse>","errorExample":""}]',
      'title' => '为RAM身份授权',
      'summary' => '调用AttachPolicy为授权对象（RAM用户、RAM用户组或RAM角色）添加权限策略，即授权。完成授权后，被授权对象将获得指定资源组或阿里云账号内资源的访问权限。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DetachPolicy' => 
    array (
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
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID或资源组所属的云账号ID。

指定要从哪个资源组或云账号中移除授权。',
            'type' => 'string',
            'required' => true,
            'example' => 'rg-9gLOoK****',
          ),
        ),
        1 => 
        array (
          'name' => 'PolicyType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限策略类型。取值：

- Custom：自定义策略。
- System：系统策略。',
            'type' => 'string',
            'required' => true,
            'example' => 'Custom',
          ),
        ),
        2 => 
        array (
          'name' => 'PolicyName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限策略名称。

长度为1~128个字符，可包含英文字母、数字和短横线（-）。',
            'type' => 'string',
            'required' => true,
            'example' => 'OSS-Administrator',
          ),
        ),
        3 => 
        array (
          'name' => 'PrincipalType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '被授权对象类型。取值：

- IMSUser：RAM用户。
- IMSGroup：RAM用户组。
- ServiceRole：RAM角色。',
            'type' => 'string',
            'required' => true,
            'example' => 'IMSUser',
          ),
        ),
        4 => 
        array (
          'name' => 'PrincipalName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '被授权对象名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'alice@demo.onaliyun.com',
          ),
        ),
      ),
      'responses' => 
      array (
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
                'example' => '697852FB-50D7-44D9-9774-530C31EAC572',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.PolicyType',
            'errorMessage' => 'The specified policy type is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.Policy',
            'errorMessage' => 'The policy does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceGroup',
            'errorMessage' => 'The specified resource group does not exist. You must first create a resource group.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'Invalid.ResourceGroup.Status',
            'errorMessage' => 'You cannot perform an operation on a resource group that is being created or deleted.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"697852FB-50D7-44D9-9774-530C31EAC572\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DetachPolicyFromUserResponse>\\r\\n\\t<RequestId>697852FB-50D7-44D9-9774-530C31EAC572</RequestId>\\r\\n</DetachPolicyFromUserResponse>","errorExample":""}]',
      'title' => '为RAM身份移除权限',
      'summary' => '调用DetachPolicy移除指定对象的权限策略。移除授权后，该对象将失去对当前资源组或账号中资源的操作权限。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PolicyType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限策略类型。取值为空表示列出所有类型的权限策略。 

- Custom：自定义策略。
- System：系统策略。',
            'type' => 'string',
            'required' => false,
            'example' => 'Custom',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。

起始值：1。默认值：1。',
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
            'description' => '分页时每页显示的数据行数。

取值范围：1~100。默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'Language',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言类型。系统权限策略的描述将以此语言返回。

- en：英文。
- zh-CN：中文。
- ja：日文。',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '数据总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'Policies' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Policy' => 
                  array (
                    'description' => '权限策略信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '权限策略信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DefaultVersion' => 
                        array (
                          'description' => '权限策略默认版本。',
                          'type' => 'string',
                          'example' => 'v1',
                        ),
                        'Description' => 
                        array (
                          'description' => '权限策略描述。',
                          'type' => 'string',
                          'example' => 'OSS管理员权限',
                        ),
                        'UpdateDate' => 
                        array (
                          'description' => '权限策略更新时间。',
                          'type' => 'string',
                          'example' => '2016-02-11T18:39:12Z',
                        ),
                        'AttachmentCount' => 
                        array (
                          'description' => '引用次数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'PolicyName' => 
                        array (
                          'description' => '权限策略名称。',
                          'type' => 'string',
                          'example' => 'OSS-Administrator',
                        ),
                        'CreateDate' => 
                        array (
                          'description' => '权限策略创建时间。',
                          'type' => 'string',
                          'example' => '2015-01-23T12:33:18Z',
                        ),
                        'PolicyType' => 
                        array (
                          'description' => '权限策略类型。

- Custom：自定义策略。
- System：系统策略。',
                          'type' => 'string',
                          'example' => 'Custom',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7B8A4E7D-6CFF-471D-84DF-195A7A241ECB',
              ),
              'PageSize' => 
              array (
                'description' => '分页时每页显示的数据行数。',
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
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 2,\\n  \\"Policies\\": {\\n    \\"Policy\\": [\\n      {\\n        \\"DefaultVersion\\": \\"v1\\",\\n        \\"Description\\": \\"OSS管理员权限\\",\\n        \\"UpdateDate\\": \\"2016-02-11T18:39:12Z\\",\\n        \\"AttachmentCount\\": 1,\\n        \\"PolicyName\\": \\"OSS-Administrator\\",\\n        \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\",\\n        \\"PolicyType\\": \\"Custom\\"\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"7B8A4E7D-6CFF-471D-84DF-195A7A241ECB\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1\\n}","errorExample":""},{"type":"xml","example":"<ListPoliciesResponse>\\n    <RequestId>7B8A4E7D-6CFF-471D-84DF-195A7A241ECB</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>10</PageSize>\\n    <TotalCount>2</TotalCount>\\n    <Policies>\\n        <Policy>\\n            <PolicyName>OSS-Administrator</PolicyName>\\n            <PolicyType>Custom</PolicyType>\\n            <Description>OSS管理员权限</Description>\\n            <DefaultVersion>v1</DefaultVersion>\\n            <CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n            <UpdateDate>2015-01-23T12:33:18Z</UpdateDate>\\n            <AttachmentCount>1</AttachmentCount>\\n        </Policy>\\n        <Policy>\\n            <PolicyName>ReadOnlyAccess</PolicyName>\\n            <PolicyType>System</PolicyType>\\n            <Description>只读权限</Description>\\n            <DefaultVersion>v1</DefaultVersion>\\n            <CreateDate>2015-02-11T18:39:12Z</CreateDate>\\n            <UpdateDate>2015-02-11T18:39:12Z</UpdateDate>\\n            <AttachmentCount>2</AttachmentCount>\\n        </Policy>\\n    </Policies>\\n</ListPoliciesResponse>","errorExample":""}]',
      'title' => '查看权限策略列表',
      'summary' => '调用ListPolicies查看权限策略列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PolicyName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限策略名称。

长度为1~128个字符，可包含英文字母、数字和短划线（-）。',
            'type' => 'string',
            'required' => true,
            'example' => 'OSS-Administrator',
          ),
        ),
        1 => 
        array (
          'name' => 'PolicyType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限策略类型。取值：

- Custom：自定义策略。
- System：系统策略。',
            'type' => 'string',
            'required' => true,
            'example' => 'Custom',
            'enum' => 
            array (
              0 => 'Custom',
              1 => 'System',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'Language',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言类型。系统权限策略的描述将以此语言返回。取值：

- en：英文。
- zh-CN：中文。
- ja：日文。',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'Policy' => 
              array (
                'description' => '权限策略信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'DefaultVersion' => 
                  array (
                    'description' => '权限策略默认版本。',
                    'type' => 'string',
                    'example' => 'v1',
                  ),
                  'UpdateDate' => 
                  array (
                    'description' => '权限策略更新时间。',
                    'type' => 'string',
                    'example' => '2016-01-23T12:33:18Z',
                  ),
                  'Description' => 
                  array (
                    'description' => '权限策略描述。',
                    'type' => 'string',
                    'example' => 'OSS管理员权限',
                  ),
                  'PolicyDocument' => 
                  array (
                    'description' => '权限策略内容。',
                    'type' => 'string',
                    'example' => ' { "Statement": [{ "Action": ["oss:*"], "Effect": "Allow", "Resource": ["acs:oss:*:*:*"]}], "Version": "1"}',
                  ),
                  'AttachmentCount' => 
                  array (
                    'description' => '引用次数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'PolicyName' => 
                  array (
                    'description' => '权限策略名称。',
                    'type' => 'string',
                    'example' => 'OSS-Administrator',
                  ),
                  'CreateDate' => 
                  array (
                    'description' => '权限策略创建时间。',
                    'type' => 'string',
                    'example' => '2015-01-23T12:33:18Z',
                  ),
                  'PolicyType' => 
                  array (
                    'description' => '权限策略类型。取值：

- Custom：自定义策略。
- System：系统策略。',
                    'type' => 'string',
                    'example' => 'Custom',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '697852FB-50D7-44D9-9774-530C31EAC572',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.PolicyType',
            'errorMessage' => 'The specified policy type is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.PolicyName.InvalidChars',
            'errorMessage' => 'The policy name contains invalid characters. It must only contain upper or lower case letters, numbers, and dash (-).',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.PolicyName.Length',
            'errorMessage' => 'The length of the policy name is invalid. It must be 1 to 128 characters in length.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.Policy',
            'errorMessage' => 'The policy does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Policy\\": {\\n    \\"DefaultVersion\\": \\"v1\\",\\n    \\"UpdateDate\\": \\"2016-01-23T12:33:18Z\\",\\n    \\"Description\\": \\"OSS管理员权限\\",\\n    \\"PolicyDocument\\": \\" { \\\\\\"Statement\\\\\\": [{ \\\\\\"Action\\\\\\": [\\\\\\"oss:*\\\\\\"], \\\\\\"Effect\\\\\\": \\\\\\"Allow\\\\\\", \\\\\\"Resource\\\\\\": [\\\\\\"acs:oss:*:*:*\\\\\\"]}], \\\\\\"Version\\\\\\": \\\\\\"1\\\\\\"}\\",\\n    \\"AttachmentCount\\": 0,\\n    \\"PolicyName\\": \\"OSS-Administrator\\",\\n    \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\",\\n    \\"PolicyType\\": \\"Custom\\"\\n  },\\n  \\"RequestId\\": \\"697852FB-50D7-44D9-9774-530C31EAC572\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<GetPolicyResponse>\\r\\n\\t<RequestId>697852FB-50D7-44D9-9774-530C31EAC572</RequestId>\\r\\n\\t<Policy>\\r\\n\\t\\t<PolicyName>OSS-Administrator</PolicyName>\\r\\n\\t\\t<PolicyType>Custom</PolicyType>\\r\\n\\t\\t<Description>OSS管理员权限</Description>\\r\\n\\t\\t<DefaultVersion>v1</DefaultVersion>\\r\\n\\t\\t<PolicyDocument>{ &quot;Statement&quot;: [{ &quot;Action&quot;: [&quot;oss:*&quot;], &quot;Effect&quot;: &quot;Allow&quot;, &quot;Resource&quot;: [&quot;acs:oss:*:*:*&quot;]}], &quot;Version&quot;: &quot;1&quot;}</PolicyDocument>\\r\\n\\t\\t<CreateDate>2015-01-23T12:33:18Z</CreateDate>\\r\\n\\t\\t<UpdateDate>2016-01-23T12:33:18Z</UpdateDate>\\r\\n\\t\\t<AttachmentCount>0</AttachmentCount>\\r\\n\\t</Policy>\\r\\n</GetPolicyResponse>\\t\\r\\n","errorExample":""}]',
      'title' => '获取指定的权限策略信息',
      'summary' => '调用GetPolicy获取指定的权限策略信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListPolicyAttachments' => 
    array (
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID或资源组所属的阿里云账号ID。取值为空表示列出当前账号下的所有授权记录。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-001',
          ),
        ),
        1 => 
        array (
          'name' => 'PolicyType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限策略类型。取值为空表示列出所有类型的权限策略。

- Custom：自定义策略。
- System：系统策略。',
            'type' => 'string',
            'required' => false,
            'example' => 'System',
          ),
        ),
        2 => 
        array (
          'name' => 'PolicyName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限策略名称。

长度为1~128个字符，可包含英文字母、数字和短横线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'AdministratorAccess',
          ),
        ),
        3 => 
        array (
          'name' => 'PrincipalType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '被授权对象类型。取值为空表示列出所有类型的被授权对象。

- IMSUser：RAM用户。
- IMSGroup：RAM用户组。
- ServiceRole：RAM角色。',
            'type' => 'string',
            'required' => false,
            'example' => 'IMSUser',
          ),
        ),
        4 => 
        array (
          'name' => 'PrincipalName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '被授权对象名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'alice@demo.onaliyun.com',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。

起始值：1。默认值：1。',
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
            'description' => '分页时每页显示的数据行数。

取值范围：1~100。默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        7 => 
        array (
          'name' => 'Language',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言类型。系统权限策略的描述将以此语言返回。

- en：英文。
- zh-CN：中文。
- ja：日文。',
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
              'TotalCount' => 
              array (
                'description' => '数据总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'PolicyAttachments' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'PolicyAttachment' => 
                  array (
                    'description' => '权限策略信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '权限策略信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Description' => 
                        array (
                          'description' => '权限策略描述。',
                          'type' => 'string',
                          'example' => '管理员权限',
                        ),
                        'ResourceGroupId' => 
                        array (
                          'description' => '资源组ID或资源组所属的阿里云账号ID。',
                          'type' => 'string',
                          'example' => 'rg-9gLOoK****',
                        ),
                        'PolicyName' => 
                        array (
                          'description' => '权限策略名称。',
                          'type' => 'string',
                          'example' => 'AdministratorAccess',
                        ),
                        'PrincipalName' => 
                        array (
                          'description' => '被授权对象名称。',
                          'type' => 'string',
                          'example' => 'alice@demo.onaliyun.com',
                        ),
                        'AttachDate' => 
                        array (
                          'description' => '授权时间。',
                          'type' => 'string',
                          'example' => '2015-01-23T12:33:18Z',
                        ),
                        'PolicyType' => 
                        array (
                          'description' => '权限策略类型。

- Custom：自定义策略。
- System：系统策略。',
                          'type' => 'string',
                          'example' => 'System',
                        ),
                        'PrincipalType' => 
                        array (
                          'description' => '被授权对象类型。

- IMSUser：RAM用户。
- IMSGroup：RAM用户组。
- ServiceRole：RAM角色。',
                          'type' => 'string',
                          'example' => 'IMSUser',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7B8A4E7D-6CFF-471D-84DF-195A7A241ECB',
              ),
              'PageSize' => 
              array (
                'description' => '分页时每页显示的数据行数。',
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
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.PolicyType',
            'errorMessage' => 'The specified policy type is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceGroup',
            'errorMessage' => 'The specified resource group does not exist. You must first create a resource group.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExist.Policy',
            'errorMessage' => 'The policy does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 2,\\n  \\"PolicyAttachments\\": {\\n    \\"PolicyAttachment\\": [\\n      {\\n        \\"Description\\": \\"管理员权限\\",\\n        \\"ResourceGroupId\\": \\"rg-9gLOoK****\\",\\n        \\"PolicyName\\": \\"AdministratorAccess\\",\\n        \\"PrincipalName\\": \\"alice@demo.onaliyun.com\\",\\n        \\"AttachDate\\": \\"2015-01-23T12:33:18Z\\",\\n        \\"PolicyType\\": \\"System\\",\\n        \\"PrincipalType\\": \\"IMSUser\\"\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"7B8A4E7D-6CFF-471D-84DF-195A7A241ECB\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ListPolicyAttachmentsResponse>\\r\\n\\t<RequestId>7B8A4E7D-6CFF-471D-84DF-195A7A241ECB</RequestId>\\r\\n\\t<PageNumber>1</PageNumber>\\r\\n\\t<PageSize>10</PageSize>\\r\\n\\t<TotalCount>2</TotalCount>\\r\\n\\t<PolicyAttachments>\\r\\n\\t\\t<PolicyAttachment>\\r\\n\\t\\t\\t<ResourceGroupId>rg-9gLOoK****</ResourceGroupId>\\r\\n\\t\\t\\t<PolicyType>System</PolicyType>\\r\\n\\t\\t\\t<PolicyName>AdministratorAccess</PolicyName>\\r\\n\\t\\t\\t<PrincipalType>IMSUser</PrincipalType>\\r\\n\\t\\t\\t<PrincipalName>alice@demo.onaliyun.com</PrincipalName>\\r\\n\\t\\t\\t<AttachDate>2015-01-23T12:33:18Z</AttachDate>\\r\\n\\t\\t\\t<Description>管理员权限</Description>\\r\\n\\t\\t</PolicyAttachment>\\r\\n\\t\\t<PolicyAttachment>\\r\\n\\t\\t\\t<ResourceGroupId>12983255839348****</ResourceGroupId>\\r\\n\\t\\t\\t<PolicyType>Custom</PolicyType>\\r\\n\\t\\t\\t<PolicyName>OSS-Bucket1-Access</PolicyName>\\r\\n\\t\\t\\t<PrincipalType>ServiceRole</PrincipalType>\\r\\n\\t\\t\\t<PrincipalName>image-service@role.demo.onaliyunservice.com</PrincipalName>\\r\\n\\t\\t\\t<AttachDate>2015-01-23T12:33:18Z</AttachDate>\\r\\n\\t\\t\\t<Description>OSS bucket 1的访问权限</Description>\\r\\n\\t\\t</PolicyAttachment>\\r\\n\\t</PolicyAttachments>\\r\\n</ListPolicyAttachmentsResponse>\\t\\r\\n","errorExample":""}]',
      'title' => '查看授权列表',
      'summary' => '调用ListPolicyAttachments查看授权列表。',
      'description' => '您可以查看以下信息：

- 阿里云账号或资源组下的所有授权记录。
- RAM用户、RAM用户组、RAM角色被授予的所有权限策略。
- 阿里云账号或资源组下拥有某个权限的RAM用户、RAM用户组、RAM角色。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreatePolicyVersion' => 
    array (
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PolicyName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限策略名称。

长度为1~128个字符，可包含英文字母、数字和短横线（-）。',
            'type' => 'string',
            'required' => true,
            'example' => 'OSS-Administrator',
          ),
        ),
        1 => 
        array (
          'name' => 'PolicyDocument',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限策略内容。

长度为1~2048个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '{ "Statement": [{ "Action": ["oss:*"], "Effect": "Allow", "Resource": ["acs:oss:*:*:*"]}], "Version": "1"}',
          ),
        ),
        2 => 
        array (
          'name' => 'SetAsDefault',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否设置为默认权限策略。 

- false（默认值）：不设置为默认权限策略。
- true：设置为默认权限策略。',
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
              'PolicyVersion' => 
              array (
                'description' => '权限策略版本信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'IsDefaultVersion' => 
                  array (
                    'description' => '是否为权限策略默认版本。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'VersionId' => 
                  array (
                    'description' => '权限策略版本标识。',
                    'type' => 'string',
                    'example' => 'v3',
                  ),
                  'CreateDate' => 
                  array (
                    'description' => '权限策略版本创建时间。',
                    'type' => 'string',
                    'example' => '2015-01-23T12:33:18',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.PolicyName.InvalidChars',
            'errorMessage' => 'The policy name contains invalid characters. It must only contain upper or lower case letters, numbers, and dash (-).',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.PolicyName.Length',
            'errorMessage' => 'The length of the policy name is invalid. It must be 1 to 128 characters in length.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.Policy',
            'errorMessage' => 'The policy does not exist.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'LimitExceeded.Policy.Version',
            'errorMessage' => 'The maximum number of policy versions is exceeded.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PolicyVersion\\": {\\n    \\"IsDefaultVersion\\": false,\\n    \\"VersionId\\": \\"v3\\",\\n    \\"CreateDate\\": \\"2015-01-23T12:33:18\\"\\n  },\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<CreatePolicyVersionResponse>\\r\\n\\t<RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\r\\n\\t<PolicyVersion>\\r\\n\\t\\t<VersionId>v3</VersionId>\\r\\n\\t\\t<IsDefaultVersion>false</IsDefaultVersion>\\r\\n\\t\\t<CreateDate>2015-01-23T12:33:18Z</CreateDate>\\r\\n\\t</PolicyVersion>\\r\\n</CreatePolicyVersionResponse>\\t\\r\\n","errorExample":""}]',
      'title' => '创建权限策略版本',
      'summary' => '调用CreatePolicyVersion创建权限策略版本。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeletePolicyVersion' => 
    array (
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PolicyName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限策略名称。

长度为1~128个字符，可包含英文字母、数字和短横线（-）。',
            'type' => 'string',
            'required' => true,
            'example' => 'OSS-Administrator',
          ),
        ),
        1 => 
        array (
          'name' => 'VersionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限策略版本标识。

您可以调用[ListPolicyVersions](~~159982~~)查询权限策略版本标识。',
            'type' => 'string',
            'required' => true,
            'example' => 'v3',
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
                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.PolicyName.InvalidChars',
            'errorMessage' => 'The policy name contains invalid characters. It must only contain upper or lower case letters, numbers, and dash (-).',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.PolicyName.Length',
            'errorMessage' => 'The length of the policy name is invalid. It must be 1 to 128 characters in length.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.VersionId.Format',
            'errorMessage' => 'The specified version ID is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.Policy',
            'errorMessage' => 'The policy does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExist.Policy.Version',
            'errorMessage' => 'The policy version does not exist.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'DeleteConflict.Policy.Version.Default',
            'errorMessage' => 'You cannot delete the default policy version.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DeletePolicyVersionResponse>\\r\\n\\t\\t<RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\r\\n</DeletePolicyVersionResponse>","errorExample":""}]',
      'title' => '删除权限策略版本',
      'summary' => '调用DeletePolicyVersion删除权限策略版本。',
      'description' => '> 权限策略默认版本不能删除。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListPolicyVersions' => 
    array (
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PolicyType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限策略类型。取值：

- Custom：自定义策略。
- System：系统策略。',
            'type' => 'string',
            'required' => true,
            'example' => 'Custom',
          ),
        ),
        1 => 
        array (
          'name' => 'PolicyName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限策略名称。

长度为1~128个字符，可包含英文字母、数字和短横线（-）。',
            'type' => 'string',
            'required' => true,
            'example' => 'OSS-Administrator',
          ),
        ),
      ),
      'responses' => 
      array (
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
                'example' => '7B8A4E7D-6CFF-471D-84DF-195A7A241ECB',
              ),
              'PolicyVersions' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'PolicyVersion' => 
                  array (
                    'description' => '权限策略版本信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '权限策略版本信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'IsDefaultVersion' => 
                        array (
                          'description' => '是否为权限策略默认版本。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'VersionId' => 
                        array (
                          'description' => '权限策略版本标识。',
                          'type' => 'string',
                          'example' => 'v3',
                        ),
                        'CreateDate' => 
                        array (
                          'description' => '权限策略版本创建时间。',
                          'type' => 'string',
                          'example' => '2015-01-23T12:33:18Z',
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
            'errorCode' => 'InvalidParameter.PolicyType',
            'errorMessage' => 'The specified policy type is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.PolicyName.InvalidChars',
            'errorMessage' => 'The policy name contains invalid characters. It must only contain upper or lower case letters, numbers, and dash (-).',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.PolicyName.Length',
            'errorMessage' => 'The length of the policy name is invalid. It must be 1 to 64 characters in length.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.Policy',
            'errorMessage' => 'The policy does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7B8A4E7D-6CFF-471D-84DF-195A7A241ECB\\",\\n  \\"PolicyVersions\\": {\\n    \\"PolicyVersion\\": [\\n      {\\n        \\"IsDefaultVersion\\": false,\\n        \\"VersionId\\": \\"v3\\",\\n        \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ListPolicyVersionsResponse>\\r\\n\\t<RequestId>7B8A4E7D-6CFF-471D-84DF-195A7A241ECB</RequestId>\\r\\n\\t<PolicyVersions>\\r\\n\\t\\t<PolicyVersion>\\r\\n\\t\\t\\t<VersionId>v3</VersionId>\\r\\n\\t\\t\\t<IsDefaultVersion>false</IsDefaultVersion>\\r\\n\\t\\t\\t<CreateDate>2015-01-23T12:33:18Z</CreateDate>\\r\\n\\t\\t</PolicyVersion>\\r\\n\\t\\t<PolicyVersion>\\r\\n\\t\\t\\t<VersionId>v5</VersionId>\\r\\n\\t\\t\\t<IsDefaultVersion>true</IsDefaultVersion>\\r\\n\\t\\t\\t<CreateDate>2015-02-26T01:25:52Z</CreateDate>\\r\\n\\t\\t</PolicyVersion>\\r\\n\\t</PolicyVersions>\\r\\n</ListPolicyVersionsResponse>\\t\\r\\n","errorExample":""}]',
      'title' => '查看权限策略版本列表',
      'summary' => '调用ListPolicyVersions查看权限策略版本列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetPolicyVersion' => 
    array (
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PolicyType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限策略类型。取值：

- Custom：自定义策略。
- System：系统策略。',
            'type' => 'string',
            'required' => true,
            'example' => 'Custom',
            'enum' => 
            array (
              0 => 'Custom',
              1 => 'System',
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'PolicyName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限策略名称。

长度为1~128个字符，可包含英文字母、数字和短横线（-）。',
            'type' => 'string',
            'required' => true,
            'example' => 'OSS-Administrator',
          ),
        ),
        2 => 
        array (
          'name' => 'VersionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限策略版本标识。',
            'type' => 'string',
            'required' => true,
            'example' => 'v3',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'PolicyVersion' => 
              array (
                'description' => '权限策略版本信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'IsDefaultVersion' => 
                  array (
                    'description' => '是否为权限策略默认版本。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'PolicyDocument' => 
                  array (
                    'description' => '权限策略内容。',
                    'type' => 'string',
                    'example' => '{ \\"Statement\\": [{ \\"Action\\": [\\"oss:*\\"], \\"Effect\\": \\"Allow\\", \\"Resource\\": [\\"acs:oss:*:*:*\\"]}], \\"Version\\": \\"1\\"}',
                  ),
                  'VersionId' => 
                  array (
                    'description' => '权限策略版本标识。',
                    'type' => 'string',
                    'example' => 'v3',
                  ),
                  'CreateDate' => 
                  array (
                    'description' => '权限策略版本创建时间。',
                    'type' => 'string',
                    'example' => '2015-01-23T12:33:18Z',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.PolicyType',
            'errorMessage' => 'The specified policy type is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.PolicyName.InvalidChars',
            'errorMessage' => 'The policy name contains invalid characters. It must only contain upper or lower case letters, numbers, and dash (-).',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.PolicyName.Length',
            'errorMessage' => 'The length of the policy name is invalid. It must be 1 to 128 characters in length.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.VersionId.Format',
            'errorMessage' => 'The specified version ID is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.Policy',
            'errorMessage' => 'The policy does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExist.Policy.Version',
            'errorMessage' => 'The policy version does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PolicyVersion\\": {\\n    \\"IsDefaultVersion\\": false,\\n    \\"PolicyDocument\\": \\"{ \\\\\\\\\\\\\\"Statement\\\\\\\\\\\\\\": [{ \\\\\\\\\\\\\\"Action\\\\\\\\\\\\\\": [\\\\\\\\\\\\\\"oss:*\\\\\\\\\\\\\\"], \\\\\\\\\\\\\\"Effect\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"Allow\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"Resource\\\\\\\\\\\\\\": [\\\\\\\\\\\\\\"acs:oss:*:*:*\\\\\\\\\\\\\\"]}], \\\\\\\\\\\\\\"Version\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"1\\\\\\\\\\\\\\"}\\",\\n    \\"VersionId\\": \\"v3\\",\\n    \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\"\\n  },\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<GetPolicyVersionResponse>\\r\\n\\t<RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\r\\n\\t<PolicyVersion>\\r\\n\\t\\t<VersionId>v3</VersionId>\\r\\n\\t\\t<IsDefaultVersion>false</IsDefaultVersion>\\r\\n\\t\\t<CreateDate>2015-01-23T12:33:18Z</CreateDate>\\r\\n\\t\\t<PolicyDocument>{ &quot;Statement&quot;: [{ &quot;Action&quot;: [&quot;oss:*&quot;], &quot;Effect&quot;: &quot;Allow&quot;, &quot;Resource&quot;: [&quot;acs:oss:*:*:*&quot;]}], &quot;Version&quot;: &quot;1&quot;}</PolicyDocument>\\r\\n\\t</PolicyVersion>\\r\\n</GetPolicyVersionResponse>\\t\\r\\n","errorExample":""}]',
      'title' => '获取某个权限策略的版本',
      'summary' => '调用GetPolicyVersion获取某个权限策略的版本。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'TagResources' => 
    array (
      'summary' => '调用TagResources为资源组或资源目录的成员绑定标签。',
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
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '资源组ID或资源目录成员ID。

最多可以指定50个。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源组ID或资源目录成员ID。

最多可以指定50个。',
              'type' => 'string',
              'required' => false,
              'example' => 'rg-aekz6bre2uq****',
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '标签。

最多可以绑定20个标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签。

最多可以绑定20个标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。

最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'k1',
                ),
                'Value' => 
                array (
                  'description' => '标签值。

最多支持128个字符，不能以`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'v1',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。取值：

- ResourceGroup（默认值）：为资源组绑定标签。
- Account：为资源目录成员绑定标签。

> 当为资源目录成员绑定标签时，该参数为必选。',
            'type' => 'string',
            'required' => false,
            'example' => 'ResourceGroup',
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
                'example' => 'E7747EDF-EDDC-5B38-9B6A-6392B9C92B1C',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E7747EDF-EDDC-5B38-9B6A-6392B9C92B1C\\"\\n}","errorExample":""},{"type":"xml","example":"<TagResourcesResponse>\\n    <RequestId>E7747EDF-EDDC-5B38-9B6A-6392B9C92B1C</RequestId>\\n</TagResourcesResponse>","errorExample":""}]',
      'title' => '绑定标签',
    ),
    'UntagResources' => 
    array (
      'summary' => '调用UntagResources解绑资源组或资源目成员的标签。',
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
          'name' => 'All',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否解绑指定资源组或资源目录成员的全部标签。取值：
- false（默认值）：否
- true：是',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '资源组ID或资源目录成员ID。

最多可以指定50个。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源组ID或资源目录成员ID。

最多可以指定50个。',
              'type' => 'string',
              'required' => false,
              'example' => 'rg-aek2dpwyrfr****',
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'TagKey',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '标签键。

最多可以解绑20个标签键。

> 当解绑全部标签的参数`All`取值为`true`时，不需要设置标签键。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签键。

最多可以解绑20个标签键。
> 当解绑全部标签的参数`All`取值为`true`时，不需要设置标签键。',
              'type' => 'string',
              'required' => false,
              'example' => 'k1',
            ),
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。取值：

- ResourceGroup（默认值）：解绑资源组的标签。
- Account：解绑资源目录成员的标签。

> 当解绑资源目录成员的标签时，该参数为必选。',
            'type' => 'string',
            'required' => false,
            'example' => 'ResourceGroup',
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
                'example' => 'E7747EDF-EDDC-5B38-9B6A-6392B9C92B1C',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E7747EDF-EDDC-5B38-9B6A-6392B9C92B1C\\"\\n}","errorExample":""},{"type":"xml","example":"<UntagResourcesResponse>\\n    <RequestId>E7747EDF-EDDC-5B38-9B6A-6392B9C92B1C</RequestId>\\n</UntagResourcesResponse>","errorExample":""}]',
      'title' => '解绑标签',
    ),
    'ListTagResources' => 
    array (
      'summary' => '调用ListTagResources查询资源组或资源目录成员绑定的标签列表。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一个查询开始的Token。',
            'type' => 'string',
            'required' => false,
            'example' => 'caeba0bbb2be03f84eb48b699f0a****',
          ),
        ),
        1 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页时每页显示的数据行数。

取值范围：1~100。默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '标签。查询的过滤条件。

最多可以指定20个标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签。查询的过滤条件。

最多可以指定20个标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'k1',
                ),
                'Value' => 
                array (
                  'description' => '标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'v1',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '资源组ID或资源目录成员ID。查询的过滤条件。

> 查询资源目录成员绑定的标签列表时，必须同时指定`ResourceId`和`ResourceType`，且`ResourceType`取值为`Account`。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源组ID或资源目录成员ID。查询的过滤条件。

> 查询资源目录成员绑定的标签列表时，必须同时指定`ResourceId`和`ResourceType`，且`ResourceType`取值为`Account`。',
              'type' => 'string',
              'required' => false,
              'example' => 'rg-aekz6bre2uq****',
            ),
            'required' => false,
            'maxItems' => 50,
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。查询的过滤条件。取值：

- ResourceGroup（默认值）：查询资源组的标签。
- Account：查询资源目录成员的标签。',
            'type' => 'string',
            'required' => false,
            'example' => 'ResourceGroup',
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
                'description' => '根据`NextToken`判断是否具备下一个查询开始的`Token`。取值：

- 如果`NextToken`为空，即`"NextToken": ""`，表示没有下一个。
- 如果`NextToken`有值，则该值就是下一个查询开始的`Token`。',
                'type' => 'string',
                'example' => 'caeba0bbb2be03f84eb48b699f0a****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8054B059-6B36-53BF-AA45-B8C9A0ED05AB',
              ),
              'TagResources' => 
              array (
                'description' => '标签列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TagValue' => 
                    array (
                      'description' => '标签值。',
                      'type' => 'string',
                      'example' => 'k1',
                    ),
                    'ResourceId' => 
                    array (
                      'description' => '资源组ID或资源目录成员ID。',
                      'type' => 'string',
                      'example' => 'rg-aekz6bre2uq****',
                    ),
                    'TagKey' => 
                    array (
                      'description' => '标签键。',
                      'type' => 'string',
                      'example' => 'k1',
                    ),
                    'ResourceType' => 
                    array (
                      'description' => '资源类型。取值：

- resourcegroup：资源组。
- Account：资源目录成员。',
                      'type' => 'string',
                      'example' => 'resourcegroup',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a****\\",\\n  \\"RequestId\\": \\"8054B059-6B36-53BF-AA45-B8C9A0ED05AB\\",\\n  \\"TagResources\\": [\\n    {\\n      \\"TagValue\\": \\"k1\\",\\n      \\"ResourceId\\": \\"rg-aekz6bre2uq****\\",\\n      \\"TagKey\\": \\"k1\\",\\n      \\"ResourceType\\": \\"resourcegroup\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListTagResourcesResponse>\\n    <RequestId>8054B059-6B36-53BF-AA45-B8C9A0ED05AB</RequestId>\\n    <TagResources>\\n        <ResourceId>rg-aekz6bre2uq****</ResourceId>\\n        <TagKey>k1</TagKey>\\n        <ResourceType>resourcegroup</ResourceType>\\n        <TagValue>v1</TagValue>\\n    </TagResources>\\n</ListTagResourcesResponse>","errorExample":""}]',
      'title' => '查询标签列表',
    ),
    'ListTagKeys' => 
    array (
      'summary' => '调用ListTagKeys查询资源目录成员的标签键列表。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一个查询开始的Token。',
            'type' => 'string',
            'required' => false,
            'example' => 'TGlzdFJlc291cm****',
          ),
        ),
        1 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '单次请求返回结果的最大条数。

取值范围：1~100。默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '资源类型。

取值：Account，表示资源目录的成员。',
            'type' => 'string',
            'required' => true,
            'example' => 'Account',
          ),
        ),
        3 => 
        array (
          'name' => 'KeyFilter',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模糊查询的标签键。',
            'type' => 'string',
            'required' => false,
            'example' => 'team',
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
                'description' => '根据NextToken判断是否具备下一个查询开始的Token。取值：

- 如果NextToken为空，即`"NextToken": ""`，表示没有下一个。
- 如果NextToken有值，则该值就是下一个查询开始的Token。',
                'type' => 'string',
                'example' => 'TGlzdFJlc291cm****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DC09A6AA-2713-4E10-A2E9-E6C5C43A8842',
              ),
              'Tags' => 
              array (
                'description' => '标签键信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签键信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Key' => 
                    array (
                      'description' => '标签键。',
                      'type' => 'string',
                      'example' => 'team',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"TGlzdFJlc291cm****\\",\\n  \\"RequestId\\": \\"DC09A6AA-2713-4E10-A2E9-E6C5C43A8842\\",\\n  \\"Tags\\": [\\n    {\\n      \\"Key\\": \\"team\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListTagKeysResponse>\\n    <NextToken>caeba0bbb2be03f84eb48b699f0a****</NextToken>\\n    <RequestId>DC09A6AA-2713-4E10-A2E9-E6C5C43A8842</RequestId>\\n    <Tags>\\n        <Key>team</Key>\\n    </Tags>\\n</ListTagKeysResponse>","errorExample":""}]',
      'title' => '查询标签键列表',
    ),
    'ListTagValues' => 
    array (
      'summary' => '调用ListTagValues查询指定标签键对应的标签值。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一个查询开始的Token。',
            'type' => 'string',
            'required' => false,
            'example' => 'TGlzdFJlc291cm****',
          ),
        ),
        1 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '单次请求返回结果的最大条数。

取值范围：1~100。默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '资源类型。

取值：Account，表示资源目录的成员。',
            'type' => 'string',
            'required' => true,
            'example' => 'Account',
          ),
        ),
        3 => 
        array (
          'name' => 'TagKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签键，用于查询的过滤条件。',
            'type' => 'string',
            'required' => true,
            'example' => 'k1',
          ),
        ),
        4 => 
        array (
          'name' => 'ValueFilter',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模糊查询的标签值。',
            'type' => 'string',
            'required' => false,
            'example' => 'v1',
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
                'description' => '根据NextToken判断是否具备下一个查询开始的Token。取值：

- 如果NextToken为空，即`"NextToken": ""`，表示没有下一个。
- 如果NextToken有值，则该值就是下一个查询开始的Token。',
                'type' => 'string',
                'example' => 'TGlzdFJlc291cm****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DC09A6AA-2713-4E10-A2E9-E6C5C43A8842',
              ),
              'Tags' => 
              array (
                'description' => '标签值信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签值信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Value' => 
                    array (
                      'description' => '标签值。',
                      'type' => 'string',
                      'example' => 'v1',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"TGlzdFJlc291cm****\\",\\n  \\"RequestId\\": \\"DC09A6AA-2713-4E10-A2E9-E6C5C43A8842\\",\\n  \\"Tags\\": [\\n    {\\n      \\"Value\\": \\"v1\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListTagValuesResponse>\\n    <NextToken>TGlzdFJlc291cm****</NextToken>\\n    <RequestId>DC09A6AA-2713-4E10-A2E9-E6C5C43A8842</RequestId>\\n    <Tags>\\n        <Value>v1</Value>\\n    </Tags>\\n</ListTagValuesResponse>","errorExample":""}]',
      'title' => '查询指定标签键对应的标签值',
      'description' => '### 使用说明
本文将提供一个示例，查询标签键k1对应的标签值。返回结果显示：标签键k1对应的标签值为v1。',
    ),
    'InitResourceDirectory' => 
    array (
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
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
                'example' => 'CD76D376-2517-4924-92C5-DBC52262F93A',
              ),
              'ResourceDirectory' => 
              array (
                'description' => '资源目录信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'RootFolderId' => 
                  array (
                    'description' => 'Root资源夹ID。',
                    'type' => 'string',
                    'example' => 'r-Zo****',
                  ),
                  'ResourceDirectoryId' => 
                  array (
                    'description' => '资源目录ID。',
                    'type' => 'string',
                    'example' => 'rd-Ss****',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '资源目录开通时间。',
                    'type' => 'string',
                    'example' => '2019-02-18T15:32:10.473Z',
                  ),
                  'MasterAccountId' => 
                  array (
                    'description' => '企业管理账号ID。',
                    'type' => 'string',
                    'example' => '172841235500****',
                  ),
                  'MasterAccountName' => 
                  array (
                    'description' => '企业管理账号名称。',
                    'type' => 'string',
                    'example' => 'aliyun-****',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'NotSupport.AccountInAnotherResourceDirectory',
            'errorMessage' => 'The specified account is an Alibaba Cloud account or already exists in another resource directory.',
          ),
          1 => 
          array (
            'errorCode' => 'EnterpriseRealNameVerificationError',
            'errorMessage' => 'The specified account does not pass enterprise real-name verification. We recommend you first complete enterprise real-name verification for the account.',
          ),
          2 => 
          array (
            'errorCode' => 'Invalid.AccountType',
            'errorMessage' => 'The specified profile type of account is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'Invalid.EnterpriseName',
            'errorMessage' => 'You must specify the enterprise name.',
          ),
          4 => 
          array (
            'errorCode' => 'NotSupport.Account.Site',
            'errorMessage' => 'The caller is not a China site account, which is not supported.',
          ),
          5 => 
          array (
            'errorCode' => 'EntityAlreadyExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is already enabled. We recommend that you do not enable the resource directory again.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CD76D376-2517-4924-92C5-DBC52262F93A\\",\\n  \\"ResourceDirectory\\": {\\n    \\"RootFolderId\\": \\"r-Zo****\\",\\n    \\"ResourceDirectoryId\\": \\"rd-Ss****\\",\\n    \\"CreateTime\\": \\"2019-02-18T15:32:10.473Z\\",\\n    \\"MasterAccountId\\": \\"172841235500****\\",\\n    \\"MasterAccountName\\": \\"aliyun-****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<InitResourceDirectoryResponse>\\r\\n    <ResourceDirectory>\\r\\n        <RootFolderId>r-Zo****</RootFolderId>\\r\\n        <ResourceDirectoryId>rd-Ss****</ResourceDirectoryId>\\r\\n        <MasterAccountId>172841235500****</MasterAccountId>\\r\\n        <MasterAccountName>aliyun-****</MasterAccountName>\\r\\n        <CreateTime>2019-02-18T15:32:10.473Z</CreateTime>\\r\\n    </ResourceDirectory>\\r\\n    <RequestId>CD76D376-2517-4924-92C5-DBC52262F93A</RequestId>\\r\\n</InitResourceDirectoryResponse>","errorExample":""}]',
      'title' => '开通资源目录',
      'summary' => '调用InitResourceDirectory开通资源目录。开通资源目录后，系统会为您创建一个Root资源夹，并将当前账号设置为企业管理账号。该企业管理账号具有管理资源目录的所有权限。',
      'description' => '> - 请使用经过企业实名认证的账号开通资源目录。个人实名认证账号不能开通资源目录。
> - 建议您将企业管理账号仅作为资源目录的管理员，不建议您在企业管理账号下订购云产品资源。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateCloudAccount' => 
    array (
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DisplayName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '成员名称。

长度为2~50个字符或汉字，可包含汉字、英文字母、数字、下划线（_）、英文句点（.）和短划线（-）。

成员名称在资源目录内必须唯一。',
            'type' => 'string',
            'required' => true,
            'example' => 'admin-****',
          ),
        ),
        1 => 
        array (
          'name' => 'ParentFolderId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '父资源夹ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'fd-bVaRIG****',
          ),
        ),
        2 => 
        array (
          'name' => 'Email',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云账号登录邮箱。',
            'type' => 'string',
            'required' => true,
            'example' => 'someone@example.com',
          ),
        ),
        3 => 
        array (
          'name' => 'PayerAccountId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结算账号ID。取值为空表示采用当前账号结算。',
            'type' => 'string',
            'required' => false,
            'example' => '12323344****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'Account' => 
              array (
                'description' => '成员信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '成员加入状态。

- CreateSuccess：创建成功。
- CreateVerifying：创建确认中。
- CreateFailed：创建失败。
- CreateExpired：创建过期。
- CreateCancelled：创建取消。
- PromoteVerifying：升级确认中。
- PromoteFailed：升级失败。
- PromoteExpired：升级过期。
- PromoteCancelled：升级取消。
- PromoteSuccess：升级成功。
- InviteSuccess：邀请成功。
- Removed：已移出。',
                    'type' => 'string',
                    'example' => 'CreateVerifying',
                  ),
                  'Type' => 
                  array (
                    'description' => '成员类型。取值为CloudAccount表示云账号。',
                    'type' => 'string',
                    'example' => 'CloudAccount',
                  ),
                  'DisplayName' => 
                  array (
                    'description' => '成员名称。',
                    'type' => 'string',
                    'example' => 'admin-****',
                  ),
                  'FolderId' => 
                  array (
                    'description' => '资源夹ID。',
                    'type' => 'string',
                    'example' => 'fd-bVaRIG****',
                  ),
                  'ResourceDirectoryId' => 
                  array (
                    'description' => '资源目录ID。',
                    'type' => 'string',
                    'example' => 'rd-k3****',
                  ),
                  'RecordId' => 
                  array (
                    'description' => '账号记录ID。',
                    'type' => 'string',
                    'example' => '06950264-3f0d-4ca9-82dd-6ee7a3d3****',
                  ),
                  'AccountId' => 
                  array (
                    'description' => '账号ID。',
                    'type' => 'string',
                    'example' => '12323344****',
                  ),
                  'JoinMethod' => 
                  array (
                    'description' => '成员加入方式。

- invited：邀请。
- created：创建。',
                    'type' => 'string',
                    'example' => 'created',
                  ),
                  'ModifyTime' => 
                  array (
                    'description' => '成员修改时间。',
                    'type' => 'string',
                    'example' => '2015-01-23T12:33:18Z',
                  ),
                  'AccountName' => 
                  array (
                    'description' => '账号名称。',
                    'type' => 'string',
                    'example' => 'someone@example.com',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MissingParameter.Account.DisplayName',
            'errorMessage' => 'You must specify DisplayName.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Account.DisplayName',
            'errorMessage' => 'The DisplayName of account is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.Account.DisplayName.Length',
            'errorMessage' => 'The DisplayName of the account exceeds the length limit.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.ParentFolderId',
            'errorMessage' => 'The ParentFolderId is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'MissingParameter.Email',
            'errorMessage' => 'You must specify Email.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameter.Email',
            'errorMessage' => 'The Email is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExists.Folder',
            'errorMessage' => 'The resource directory folder does not exist.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'LimitExceeded.Account',
            'errorMessage' => 'The maximum number of member accounts in a resource directory exceeds the limit.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Account.DisplayName.AlreadyUsed',
            'errorMessage' => 'The displayname of account has been used.',
          ),
          2 => 
          array (
            'errorCode' => 'EntityAlreadyExists.ResourceDirectory.Account',
            'errorMessage' => 'The email address that the system generates when you create a member account already exists. Try again later.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.Email.AlreadyUsed',
            'errorMessage' => 'The email has been used.',
          ),
          4 => 
          array (
            'errorCode' => 'Invalid.PayRelation',
            'errorMessage' => 'Failed to create a member. The specified billing account is unavailable. Please change to another billing account and try again.',
          ),
          5 => 
          array (
            'errorCode' => 'NotSupport.PayerAccountInAnotherResourceDirectory',
            'errorMessage' => 'The specified settlement account does not exist in the resource directory. You must specify a valid settlement account.',
          ),
          6 => 
          array (
            'errorCode' => 'CreateAccountDisabled',
            'errorMessage' => 'This resource directory is denied to create account.',
          ),
          7 => 
          array (
            'errorCode' => 'PaymentAccountEnterpriseVerifyError',
            'errorMessage' => 'The type of the payment account is not enterprise verified.',
          ),
          8 => 
          array (
            'errorCode' => 'PaymentAccountFinancialRelationshipVerifyError',
            'errorMessage' => 'The payment account must not be the beneficiary account from other financial relationships.',
          ),
          9 => 
          array (
            'errorCode' => 'PaymentAccountEnterpriseTypeError',
            'errorMessage' => 'The type of the payment account is not enterprise.',
          ),
          10 => 
          array (
            'errorCode' => 'PaymentAccountFinancialRelationshipsChangeFrequencyVerifyError',
            'errorMessage' => 'The financial relationship of payment account changes too frequently. Please try again later.',
          ),
          11 => 
          array (
            'errorCode' => 'MemberAccountVirtualCloudOperatorVerifyError',
            'errorMessage' => 'The type of the member account must not be virtual operator.',
          ),
          12 => 
          array (
            'errorCode' => 'MemberAccountResellerVerifyError',
            'errorMessage' => 'The type of the member account must not be reseller.',
          ),
          13 => 
          array (
            'errorCode' => 'PaymentAccountVirtualCloudOperatorVerifyError',
            'errorMessage' => 'The type of the payment account must not be virtual operator.',
          ),
          14 => 
          array (
            'errorCode' => 'PaymentAccountResellerVerifyError',
            'errorMessage' => 'The type of the payment account must not be reseller.',
          ),
          15 => 
          array (
            'errorCode' => 'PaymentAccountCreditIdentityTypeError',
            'errorMessage' => 'The identity of the payment account is not credit.',
          ),
          16 => 
          array (
            'errorCode' => 'InconsistentEnterpriseNameError',
            'errorMessage' => 'The enterprise name of the payment account and the member account must be consistent.',
          ),
          17 => 
          array (
            'errorCode' => 'PaymentAccountEnterpriseInvoiceError',
            'errorMessage' => 'No enterprise invoice header information is set for the payment account.',
          ),
          18 => 
          array (
            'errorCode' => 'UnknownFinancialError',
            'errorMessage' => 'An unknown financial error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Account\\": {\\n    \\"Status\\": \\"CreateVerifying\\",\\n    \\"Type\\": \\"CloudAccount\\",\\n    \\"DisplayName\\": \\"admin-****\\",\\n    \\"FolderId\\": \\"fd-bVaRIG****\\",\\n    \\"ResourceDirectoryId\\": \\"rd-k3****\\",\\n    \\"RecordId\\": \\"06950264-3f0d-4ca9-82dd-6ee7a3d3****\\",\\n    \\"AccountId\\": \\"12323344****\\",\\n    \\"JoinMethod\\": \\"created\\",\\n    \\"ModifyTime\\": \\"2015-01-23T12:33:18Z\\",\\n    \\"AccountName\\": \\"someone@example.com\\"\\n  },\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<CreateCloudAccountResponse>\\r\\n    <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\r\\n    <Account>\\r\\n        <ResourceDirectoryId>rd-k3****</ResourceDirectoryId>\\r\\n        <AccountId>12323344****</AccountId>\\r\\n        <AccountName>someone@example.com</AccountName>\\r\\n        <DisplayName>admin-****</DisplayName>\\r\\n        <FolderId>fd-bVaRIG****</FolderId>\\r\\n        <JoinMethod>created</JoinMethod>\\r\\n        <Type>CloudAccount</Type>\\r\\n        <Status>CreateVerifying</Status>\\r\\n        <RecordId>06950264-3f0d-4ca9-82dd-6ee7a3d3****</RecordId>\\r\\n        <ModifyTime>2015-01-23T12:33:18Z</ModifyTime>\\r\\n    </Account>\\r\\n</CreateCloudAccountResponse>","errorExample":""}]',
      'title' => '创建云账号类型的成员',
      'summary' => '创建资源目录云账号类型的成员。',
      'description' => '资源目录中有资源账号和云账号两种不同类型的成员。 

- 资源账号（推荐）：资源账号类型的成员只作为资源的容器并完全依赖于资源目录存在，是一种更为安全、创建更为简单的账号。创建资源账号类型的成员，请参见[CreateResourceAccount](~~159392~~)。 

> 资源账号也可以升级为云账号，请参见[PromoteResourceAccount](~~159395~~)。

- 云账号：云账号具备阿里云账号的全部特征，包括允许Root登录访问。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'PromoteResourceAccount' => 
    array (
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
          'name' => 'AccountId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要升级的资源账号ID。',
            'type' => 'string',
            'required' => true,
            'example' => '12323344****',
          ),
        ),
        1 => 
        array (
          'name' => 'Email',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '升级后的云账号登录邮箱。',
            'type' => 'string',
            'required' => true,
            'example' => 'someone@example.com',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Account' => 
              array (
                'description' => '成员信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '成员加入状态。

- CreateSuccess：创建成功。
- CreateVerifying：创建确认中。
- CreateFailed：创建失败。
- CreateExpired：创建过期。
- CreateCancelled：创建取消。
- PromoteVerifying：升级确认中。
- PromoteFailed：升级失败。
- PromoteExpired：升级过期。
- PromoteCancelled：升级取消。
- PromoteSuccess：升级成功。
- InviteSuccess：邀请成功。
- Removed：已移出。',
                    'type' => 'string',
                    'example' => 'PromoteVerifying',
                  ),
                  'Type' => 
                  array (
                    'description' => '成员类型。

- CloudAccount：云账号。
- ResourceAccount：资源账号。',
                    'type' => 'string',
                    'example' => 'ResourceAccount',
                  ),
                  'DisplayName' => 
                  array (
                    'description' => '成员名称。',
                    'type' => 'string',
                    'example' => 'admin',
                  ),
                  'FolderId' => 
                  array (
                    'description' => '资源夹ID。',
                    'type' => 'string',
                    'example' => 'fd-bVaRIG****',
                  ),
                  'ResourceDirectoryId' => 
                  array (
                    'description' => '资源目录ID。',
                    'type' => 'string',
                    'example' => 'rd-k3****',
                  ),
                  'RecordId' => 
                  array (
                    'description' => '账号记录ID。',
                    'type' => 'string',
                    'example' => '06950264-3f0d-4ca9-82dd-6ee7a3d33d6b',
                  ),
                  'JoinTime' => 
                  array (
                    'description' => '成员加入时间。',
                    'type' => 'string',
                    'example' => '2015-01-23T12:33:18Z',
                  ),
                  'AccountId' => 
                  array (
                    'description' => '账号ID。',
                    'type' => 'string',
                    'example' => '12323344****',
                  ),
                  'JoinMethod' => 
                  array (
                    'description' => '成员加入方式。

- invited：邀请。
- created：创建。',
                    'type' => 'string',
                    'example' => 'created',
                  ),
                  'AccountName' => 
                  array (
                    'description' => '账号名称。',
                    'type' => 'string',
                    'example' => 'someone@example.com',
                  ),
                  'ModifyTime' => 
                  array (
                    'description' => '成员修改时间。',
                    'type' => 'string',
                    'example' => '2015-01-23T12:33:18Z',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MissingParameter.AccountId',
            'errorMessage' => 'You must specify AccountId.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.AccountId',
            'errorMessage' => 'The AccountId is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingParameter.Email',
            'errorMessage' => 'You must specify Email.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.Email',
            'errorMessage' => 'The Email is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.Account',
            'errorMessage' => 'This resource directory account does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccountTypeOrStatusMismatch',
            'errorMessage' => 'You cannot perform the action on the member account.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Email.AlreadyUsed',
            'errorMessage' => 'The email has been used.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Account\\": {\\n    \\"Status\\": \\"PromoteVerifying\\",\\n    \\"Type\\": \\"ResourceAccount\\",\\n    \\"DisplayName\\": \\"admin\\",\\n    \\"FolderId\\": \\"fd-bVaRIG****\\",\\n    \\"ResourceDirectoryId\\": \\"rd-k3****\\",\\n    \\"RecordId\\": \\"06950264-3f0d-4ca9-82dd-6ee7a3d33d6b\\",\\n    \\"JoinTime\\": \\"2015-01-23T12:33:18Z\\",\\n    \\"AccountId\\": \\"12323344****\\",\\n    \\"JoinMethod\\": \\"created\\",\\n    \\"AccountName\\": \\"someone@example.com\\",\\n    \\"ModifyTime\\": \\"2015-01-23T12:33:18Z\\"\\n  },\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<PromoteResourceAccountResponse>\\r\\n    <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\r\\n    <Account>\\r\\n        <ResourceDirectoryId>rd-k3****</ResourceDirectoryId>\\r\\n        <AccountId>12323344****</AccountId>\\r\\n        <DisplayName>admin</DisplayName>\\r\\n        <FolderId>fd-bVaRIG****</FolderId>\\r\\n        <JoinMethod>created</JoinMethod>\\r\\n        <JoinTime>2015-01-23T12:33:18Z</JoinTime>\\r\\n        <Type>ResourceAccount</Type>\\r\\n        <Status>PromoteVerifying</Status>\\r\\n        <RecordId>06950264-3f0d-4ca9-82dd-6ee7a3d33d6b</RecordId>\\r\\n        <ModifyTime>2015-01-23T12:33:18Z</ModifyTime>\\r\\n    </Account>\\r\\n</PromoteResourceAccountResponse>","errorExample":""}]',
      'title' => '将资源账号升级为云账号',
      'summary' => '将资源账号升级为云账号，异步操作。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ResendPromoteResourceAccountEmail' => 
    array (
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
          'name' => 'RecordId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号记录ID。',
            'type' => 'string',
            'required' => true,
            'example' => '06950264-3f0d-4ca9-82dd-6ee7a3d3****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Account' => 
              array (
                'description' => '成员信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '成员加入状态。

- CreateSuccess：创建成功。
- CreateVerifying：创建确认中。
- CreateFailed：创建失败。
- CreateExpired：创建过期。
- CreateCancelled：创建取消。
- PromoteVerifying：升级确认中。
- PromoteFailed：升级失败。
- PromoteExpired：升级过期。
- PromoteCancelled：升级取消。
- PromoteSuccess：升级成功。
- InviteSuccess：邀请成功。
- Removed：已移出。',
                    'type' => 'string',
                    'example' => 'PromoteVerifying',
                  ),
                  'Type' => 
                  array (
                    'description' => '成员类型。

- CloudAccount：云账号。
- ResourceAccount：资源账号。',
                    'type' => 'string',
                    'example' => 'ResourceAccount',
                  ),
                  'DisplayName' => 
                  array (
                    'description' => '成员名称。',
                    'type' => 'string',
                    'example' => 'admin',
                  ),
                  'FolderId' => 
                  array (
                    'description' => '资源夹ID。',
                    'type' => 'string',
                    'example' => 'fd-bVaRIG****',
                  ),
                  'ResourceDirectoryId' => 
                  array (
                    'description' => '资源目录ID。',
                    'type' => 'string',
                    'example' => 'rd-k3****',
                  ),
                  'RecordId' => 
                  array (
                    'description' => '账号记录ID。',
                    'type' => 'string',
                    'example' => '16950264-3f0d-4ca9-82dd-6ee7a3d3****',
                  ),
                  'JoinTime' => 
                  array (
                    'description' => '成员加入时间。',
                    'type' => 'string',
                    'example' => '2015-01-23T12:33:18Z',
                  ),
                  'AccountId' => 
                  array (
                    'description' => '账号ID。',
                    'type' => 'string',
                    'example' => '12323344****',
                  ),
                  'JoinMethod' => 
                  array (
                    'description' => '成员加入方式。

- invited：邀请。
- created：创建。',
                    'type' => 'string',
                    'example' => 'created',
                  ),
                  'AccountName' => 
                  array (
                    'description' => '账号名称。',
                    'type' => 'string',
                    'example' => 'someone@example.com',
                  ),
                  'ModifyTime' => 
                  array (
                    'description' => '成员修改时间。',
                    'type' => 'string',
                    'example' => '2015-01-23T12:33:18Z',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MissingParameter.RecordId',
            'errorMessage' => 'You must specify RecordId.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExists.AccountRecord',
            'errorMessage' => 'This resource directory account recordId does not exist.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccountTypeOrStatusMismatch',
            'errorMessage' => 'You cannot perform the action on the member account.',
          ),
          1 => 
          array (
            'errorCode' => 'LimitExceeded.Frequency',
            'errorMessage' => 'The frequency of request exceeds limit.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Account\\": {\\n    \\"Status\\": \\"PromoteVerifying\\",\\n    \\"Type\\": \\"ResourceAccount\\",\\n    \\"DisplayName\\": \\"admin\\",\\n    \\"FolderId\\": \\"fd-bVaRIG****\\",\\n    \\"ResourceDirectoryId\\": \\"rd-k3****\\",\\n    \\"RecordId\\": \\"16950264-3f0d-4ca9-82dd-6ee7a3d3****\\",\\n    \\"JoinTime\\": \\"2015-01-23T12:33:18Z\\",\\n    \\"AccountId\\": \\"12323344****\\",\\n    \\"JoinMethod\\": \\"created\\",\\n    \\"AccountName\\": \\"someone@example.com\\",\\n    \\"ModifyTime\\": \\"2015-01-23T12:33:18Z\\"\\n  },\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ResendPromoteResourceAccountEmailResponse>\\r\\n    <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\r\\n    <Account>\\r\\n        <ResourceDirectoryId>rd-k3****</ResourceDirectoryId>\\r\\n        <AccountId>12323344****</AccountId>\\r\\n        <DisplayName>admin</DisplayName>\\r\\n        <FolderId>fd-bVaRIG****</FolderId>\\r\\n        <JoinMethod>created</JoinMethod>\\r\\n        <JoinTime>2015-01-23T12:33:18Z</JoinTime>\\r\\n        <Type>ResourceAccount</Type>\\r\\n        <Status>PromoteVerifying</Status>\\r\\n        <RecordId>16950264-3f0d-4ca9-82dd-6ee7a3d33d6b</RecordId>\\r\\n        <ModifyTime>2015-01-23T12:33:18Z</ModifyTime>\\r\\n    </Account>\\r\\n</ResendPromoteResourceAccountEmailResponse>","errorExample":""}]',
      'title' => '重新发送资源账号升级云账号邮件',
      'summary' => '重新发送资源账号升级为云账号的确认邮件。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ResendCreateCloudAccountEmail' => 
    array (
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
          'name' => 'RecordId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号记录ID。',
            'type' => 'string',
            'required' => true,
            'example' => '06950264-3f0d-4ca9-82dd-6ee7a3d3****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Account' => 
              array (
                'description' => '成员信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '成员加入状态。

- CreateSuccess：创建成功。
- CreateVerifying：创建确认中。
- CreateFailed：创建失败。
- CreateExpired：创建过期。
- CreateCancelled：创建取消。
- PromoteVerifying：升级确认中。
- PromoteFailed：升级失败。
- PromoteExpired：升级过期。
- PromoteCancelled：升级取消。
- PromoteSuccess：升级成功。
- InviteSuccess：邀请成功。
- Removed：已移出。',
                    'type' => 'string',
                    'example' => 'CreateVerifying',
                  ),
                  'Type' => 
                  array (
                    'description' => '成员类型。取值为CloudAccount表示云账号。',
                    'type' => 'string',
                    'example' => 'CloudAccount',
                  ),
                  'DisplayName' => 
                  array (
                    'description' => '成员名称。',
                    'type' => 'string',
                    'example' => 'admin',
                  ),
                  'FolderId' => 
                  array (
                    'description' => '资源夹ID。',
                    'type' => 'string',
                    'example' => 'fd-bVaRIG****',
                  ),
                  'ResourceDirectoryId' => 
                  array (
                    'description' => '资源目录ID。',
                    'type' => 'string',
                    'example' => 'rd-k3****',
                  ),
                  'RecordId' => 
                  array (
                    'description' => '账号记录ID。',
                    'type' => 'string',
                    'example' => '16950264-3f0d-4ca9-82dd-6ee7a3d3****',
                  ),
                  'JoinTime' => 
                  array (
                    'description' => '成员加入时间。',
                    'type' => 'string',
                    'example' => '2015-01-23T12:33:18Z',
                  ),
                  'AccountId' => 
                  array (
                    'description' => '账号ID。',
                    'type' => 'string',
                    'example' => '12323344****',
                  ),
                  'JoinMethod' => 
                  array (
                    'description' => '成员加入方式。

- invited：邀请。
- created：创建。',
                    'type' => 'string',
                    'example' => 'created',
                  ),
                  'AccountName' => 
                  array (
                    'description' => '账号名称。',
                    'type' => 'string',
                    'example' => 'someone@example.com',
                  ),
                  'ModifyTime' => 
                  array (
                    'description' => '成员修改时间。',
                    'type' => 'string',
                    'example' => '2015-01-23T12:33:18Z',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MissingParameter.RecordId',
            'errorMessage' => 'You must specify RecordId.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExists.AccountRecord',
            'errorMessage' => 'This resource directory account recordId does not exist.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccountTypeOrStatusMismatch',
            'errorMessage' => 'You cannot perform the action on the member account.',
          ),
          1 => 
          array (
            'errorCode' => 'LimitExceeded.Frequency',
            'errorMessage' => 'The frequency of request exceeds limit.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Account\\": {\\n    \\"Status\\": \\"CreateVerifying\\",\\n    \\"Type\\": \\"CloudAccount\\",\\n    \\"DisplayName\\": \\"admin\\",\\n    \\"FolderId\\": \\"fd-bVaRIG****\\",\\n    \\"ResourceDirectoryId\\": \\"rd-k3****\\",\\n    \\"RecordId\\": \\"16950264-3f0d-4ca9-82dd-6ee7a3d3****\\",\\n    \\"JoinTime\\": \\"2015-01-23T12:33:18Z\\",\\n    \\"AccountId\\": \\"12323344****\\",\\n    \\"JoinMethod\\": \\"created\\",\\n    \\"AccountName\\": \\"someone@example.com\\",\\n    \\"ModifyTime\\": \\"2015-01-23T12:33:18Z\\"\\n  },\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ResendCreateCloudAccountEmailResponse>\\r\\n    <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\r\\n    <Account>\\r\\n        <ResourceDirectoryId>rd-k3****</ResourceDirectoryId>\\r\\n        <AccountId>12323344****</AccountId>\\r\\n        <DisplayName>admin</DisplayName>\\r\\n        <FolderId>fd-bVaRIG****</FolderId>\\r\\n        <JoinMethod>created</JoinMethod>\\r\\n        <JoinTime>2015-01-23T12:33:18Z</JoinTime>\\r\\n        <Type>CloudAccount</Type>\\r\\n        <Status>CreateVerifying</Status>\\r\\n        <RecordId>16950264-3f0d-4ca9-82dd-6ee7a3d33d6b</RecordId>\\r\\n        <ModifyTime>2015-01-23T12:33:18Z</ModifyTime>\\r\\n    </Account>\\r\\n</ResendCreateCloudAccountEmailResponse>","errorExample":""}]',
      'title' => '重新发送创建云账号的邮件',
      'summary' => '重新发送创建云账号的确认邮件。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CancelCreateCloudAccount' => 
    array (
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
          'name' => 'RecordId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号记录ID。',
            'type' => 'string',
            'required' => true,
            'example' => '06950264-3f0d-4ca9-82dd-6ee7a3d3****',
          ),
        ),
      ),
      'responses' => 
      array (
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
                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MissingParameter.RecordId',
            'errorMessage' => 'You must specify RecordId.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.AccountRecord',
            'errorMessage' => 'This resource directory account recordId does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccountTypeOrStatusMismatch',
            'errorMessage' => 'You cannot perform the action on the member account.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<CancelCreateCloudAccountResponse>\\r\\n  <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\r\\n</CancelCreateCloudAccountResponse>","errorExample":""}]',
      'title' => '取消创建云账号类型的成员',
      'summary' => '取消创建资源目录云账号类型的成员。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CancelPromoteResourceAccount' => 
    array (
      'summary' => '取消升级资源目录资源账号为云账号。',
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
          'name' => 'RecordId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号记录ID。',
            'type' => 'string',
            'required' => true,
            'example' => '06950264-3f0d-4ca9-82dd-6ee7a3d3****',
          ),
        ),
      ),
      'responses' => 
      array (
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
                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MissingParameter.RecordId',
            'errorMessage' => 'You must specify RecordId.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.AccountRecord',
            'errorMessage' => 'This resource directory account recordId does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccountTypeOrStatusMismatch',
            'errorMessage' => 'You cannot perform the action on the member account.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<CancelPromoteResourceAccountResponse>\\r\\n  <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\r\\n</CancelPromoteResourceAccountResponse>","errorExample":""}]',
      'title' => '取消升级资源账号为云账号',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'resourcemanager.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'resourcemanager.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'resourcemanager.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'resourcemanager.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'resourcemanager.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'resourcemanager.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'resourcemanager.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'resourcemanager.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'resourcemanager.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'resourcemanager.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'resourcemanager.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'resourcemanager.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'resourcemanager.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'resourcemanager.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'resourcemanager.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'resourcemanager.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'resourcemanager.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'resourcemanager.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'resourcemanager.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'resourcemanager.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'resourcemanager.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'resourcemanager.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'resourcemanager.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'resourcemanager.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'resourcemanager.aliyuncs.com',
    ),
  ),
);
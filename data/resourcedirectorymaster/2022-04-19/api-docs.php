<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'ResourceDirectoryMaster',
        'version' => '2022-04-19',
    ],
    'directories' => [
        [
            'id' => 177793,
            'title' => '服务',
            'type' => 'directory',
            'children' => [
                'EnableResourceDirectory',
                'SendVerificationCodeForEnableRD',
                'GetResourceDirectory',
                'DestroyResourceDirectory',
            ],
        ],
        [
            'id' => 177974,
            'title' => '资源夹',
            'type' => 'directory',
            'children' => [
                'CreateFolder',
                'GetFolder',
                'DeleteFolder',
                'ListFoldersForParent',
                'UpdateFolder',
                'ListAncestors',
            ],
        ],
        [
            'id' => 177981,
            'title' => '成员',
            'type' => 'directory',
            'children' => [
                'CreateResourceAccount',
                'GetAccount',
                'MoveAccount',
                'UpdateAccount',
                'ListAccounts',
                'RemoveCloudAccount',
                'ListAccountsForParent',
                'GetPayerForAccount',
                'InviteAccountToResourceDirectory',
                'AcceptHandshake',
                'GetHandshake',
                'DeclineHandshake',
                'CancelHandshake',
                'ListHandshakesForAccount',
                'ListHandshakesForResourceDirectory',
                'SendVerificationCodeForBindSecureMobilePhone',
                'BindSecureMobilePhone',
                'SetMemberDeletionPermission',
                'CheckAccountDelete',
                'GetAccountDeletionCheckResult',
                'DeleteAccount',
                'GetAccountDeletionStatus',
                'TagResources',
                'UntagResources',
                'ListTagResources',
                'ListTagKeys',
                'ListTagValues',
                'ChangeAccountEmail',
                'RetryChangeAccountEmail',
                'CancelChangeAccountEmail',
                'AddMessageContact',
                'SendEmailVerificationForMessageContact',
                'SendPhoneVerificationForMessageContact',
                'ListMessageContactVerifications',
                'AssociateMembers',
                'DisassociateMembers',
                'GetMessageContact',
                'ListMessageContacts',
                'DeleteMessageContact',
                'GetMessageContactDeletionStatus',
                'UpdateMessageContact',
                'CancelMessageContactUpdate',
                'PrecheckForConsolidatedBillingAccount',
            ],
        ],
        [
            'id' => 178012,
            'title' => '管控策略',
            'type' => 'directory',
            'children' => [
                'EnableControlPolicy',
                'DisableControlPolicy',
                'GetControlPolicyEnablementStatus',
                'CreateControlPolicy',
                'GetControlPolicy',
                'ListControlPolicies',
                'UpdateControlPolicy',
                'DeleteControlPolicy',
                'AttachControlPolicy',
                'DetachControlPolicy',
                'ListControlPolicyAttachmentsForTarget',
                'ListTargetAttachmentsForControlPolicy',
            ],
        ],
        [
            'id' => 178025,
            'title' => '可信服务',
            'type' => 'directory',
            'children' => [
                'ListTrustedServiceStatus',
                'RegisterDelegatedAdministrator',
                'DeregisterDelegatedAdministrator',
                'ListDelegatedAdministrators',
                'ListDelegatedServicesForAccount',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'EnableResourceDirectory' => [
            'summary' => '调用EnableResourceDirectory开通资源目录。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'MAName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新管理账号名称。'."\n"
                            ."\n"
                            .'格式：`<前缀>@rdadmin.aliyunid.com`。其中，<前缀>允许输入英文字母、数字、特殊字符`_.-`，且必须以英文字母或数字开头和结尾，不能输入连续特殊字符。<前缀>的长度为2~50个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'user01@rdadmin.aliyunid.com',
                    ],
                ],
                [
                    'name' => 'MASecureMobilePhone',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新创建管理账号的安全手机号码。'."\n"
                            ."\n"
                            .'置空表示采用当前登录账号的安全手机号码。该手机号码必须与[SendVerificationCodeForEnableRD](~~SendVerificationCodeForEnableRD~~)中获取验证码时使用的手机号码一致。'."\n"
                            ."\n"
                            .'格式：`<国家码>-<手机号码>`。'."\n"
                            ."\n"
                            .'<props="intl">'."\n"
                            .'> 不支持填写`86-<手机号码>`的中国内地手机号码。'."\n"
                            .'</props>'."\n"
                            ."\n\n"
                            .'<props="china">'."\n"
                            .'> 仅支持填写`86-<手机号码>`的中国内地手机号码。'."\n"
                            .'</props>',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'xx-13900001234',
                    ],
                ],
                [
                    'name' => 'VerificationCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '验证码。'."\n"
                            ."\n"
                            .'您可以调用[SendVerificationCodeForEnableRD](~~SendVerificationCodeForEnableRD~~)获取验证码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123456',
                    ],
                ],
                [
                    'name' => 'EnableMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开通方式。取值：'."\n"
                            ."\n"
                            .'- CurrentAccount：使用当前登录账号开通资源目录。'."\n"
                            .'- NewManagementAccount：新创建管理账号开通资源目录。该方式下，您需要配置`MAName`、`MASecureMobilePhone`和`VerificationCode`。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'CurrentAccount',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：开通资源目录检查，不会实际开通资源目录。'."\n"
                            .'- **false**（默认值）：开通资源目录。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'ResourceDirectory' => [
                                'description' => '资源目录信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ResourceDirectoryId' => [
                                        'description' => '资源目录ID。',
                                        'type' => 'string',
                                        'example' => 'rd-54****',
                                    ],
                                    'MasterAccountId' => [
                                        'description' => '管理账号ID。',
                                        'type' => 'string',
                                        'example' => '507408460615****',
                                    ],
                                    'MasterAccountName' => [
                                        'description' => '管理账号名称。',
                                        'type' => 'string',
                                        'example' => 'alice@example.com',
                                    ],
                                    'RootFolderId' => [
                                        'description' => 'Root资源夹ID。',
                                        'type' => 'string',
                                        'example' => 'r-G9****',
                                    ],
                                    'CreateTime' => [
                                        'description' => '资源目录开通时间。',
                                        'type' => 'string',
                                        'example' => '2021-12-08T02:15:31.744Z',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'EC2FE94D-A4A2-51A1-A493-5C273A36C46A',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                409 => [
                    [
                        'errorCode' => 'NotSupport.AccountInAnotherResourceDirectory',
                        'errorMessage' => 'The specified account is an Alibaba Cloud account or already exists in another resource directory.',
                    ],
                    [
                        'errorCode' => 'Invalid.EnterpriseName',
                        'errorMessage' => 'You must specify the enterprise name.',
                    ],
                    [
                        'errorCode' => 'EnterpriseRealNameVerificationError',
                        'errorMessage' => 'The specified account does not pass enterprise real-name verification. We recommend you first complete enterprise real-name verification for the account.',
                    ],
                    [
                        'errorCode' => 'EntityAlreadyExists.ResourceDirectory',
                        'errorMessage' => 'The resource directory for the account is already enabled. We recommend that you do not enable the resource directory again.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.ManagementAccountName.AlreadyUsed',
                        'errorMessage' => 'The ManagementAccountName has been used.',
                    ],
                    [
                        'errorCode' => 'Invalid.VerificationCode',
                        'errorMessage' => 'The verification code is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.ManagementAccountName',
                        'errorMessage' => 'The management account name is in the wrong format.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.ManagementAccountSecurityInfo',
                        'errorMessage' => 'The parameter management account secure mobile phone is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingSecureMobilePhone',
                        'errorMessage' => 'Secure mobile phone is missing.',
                    ],
                    [
                        'errorCode' => 'MissingSecurityInfo',
                        'errorMessage' => 'Security info is missing.',
                    ],
                    [
                        'errorCode' => 'NotSupport.Account.Site',
                        'errorMessage' => 'The caller is not a China site account, which is not supported.',
                    ],
                    [
                        'errorCode' => 'Invalid.AccountType',
                        'errorMessage' => 'The specified profile type of account is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResourceDirectory\\": {\\n    \\"ResourceDirectoryId\\": \\"rd-54****\\",\\n    \\"MasterAccountId\\": \\"507408460615****\\",\\n    \\"MasterAccountName\\": \\"alice@example.com\\",\\n    \\"RootFolderId\\": \\"r-G9****\\",\\n    \\"CreateTime\\": \\"2021-12-08T02:15:31.744Z\\"\\n  },\\n  \\"RequestId\\": \\"EC2FE94D-A4A2-51A1-A493-5C273A36C46A\\"\\n}","errorExample":""},{"type":"xml","example":"<EnableResourceDirectoryResponse>\\n    <RequestId>EC2FE94D-A4A2-51A1-A493-5C273A36C46A</RequestId>\\n    <ResourceDirectory>\\n        <ResourceDirectoryId>rd-54****</ResourceDirectoryId>\\n        <MasterAccountName>alice@example.com</MasterAccountName>\\n        <RootFolderId>r-G9****</RootFolderId>\\n        <CreateTime>2021-12-08T02:15:31.744Z</CreateTime>\\n        <MasterAccountId>507408460615****</MasterAccountId>\\n    </ResourceDirectory>\\n</EnableResourceDirectoryResponse>","errorExample":""}]',
            'title' => '开通资源目录',
            'description' => '您可以使用当前登录账号或新创建管理账号两种方式开通资源目录。更多信息，请参见[开通资源目录](~~111215~~)。',
        ],
        'SendVerificationCodeForEnableRD' => [
            'summary' => '通过新创建的管理账号开通资源目录时，调用SendVerificationCodeForEnableRD向新管理账号的安全手机发送验证码。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'SecureMobilePhone',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新创建的管理账号的安全手机号码。置空表示采用当前登录账号的安全手机号码。'."\n"
                            ."\n"
                            .'格式：`<国家码>-<手机号码>`。'."\n"
                            ."\n"
                            .'<props="intl">'."\n"
                            .'> 不支持填写`86-<手机号码>`的中国内地手机号码。'."\n"
                            .'</props>'."\n"
                            ."\n"
                            .'<props="china">'."\n"
                            .'> 仅支持填写`86-<手机号码>`的中国内地手机号码。'."\n"
                            .'</props>',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'xx-13900001234',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'EC2FE94D-A4A2-51A1-A493-5C273A36C46A',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                409 => [
                    [
                        'errorCode' => 'NotSupport.AccountInAnotherResourceDirectory',
                        'errorMessage' => 'The specified account is an Alibaba Cloud account or already exists in another resource directory.',
                    ],
                    [
                        'errorCode' => 'EntityAlreadyExists.ResourceDirectory',
                        'errorMessage' => 'The resource directory for the account is already enabled. We recommend that you do not enable the resource directory again.',
                    ],
                    [
                        'errorCode' => 'SendValidateCodeExceedsLimitForAccount',
                        'errorMessage' => 'For the same account, the number of verification codes sent exceeds the limit.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.MobileCountryCode',
                        'errorMessage' => 'The current site does not support the country code.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC2FE94D-A4A2-51A1-A493-5C273A36C46A\\"\\n}","errorExample":""},{"type":"xml","example":"<SendVerificationCodeForEnableRDResponse>\\n    <RequestId>EC2FE94D-A4A2-51A1-A493-5C273A36C46A</RequestId>\\n</SendVerificationCodeForEnableRDResponse>","errorExample":""}]',
            'title' => '向新管理账号的安全手机发送验证码',
            'description' => '每个阿里云账号每天最多发送100次验证码。',
        ],
        'GetResourceDirectory' => [
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
                'operationType' => 'get',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CD76D376-2517-4924-92C5-DBC52262F93A',
                            ],
                            'ResourceDirectory' => [
                                'description' => '资源目录信息。',
                                'type' => 'object',
                                'properties' => [
                                    'RootFolderId' => [
                                        'description' => 'Root资源夹ID。',
                                        'type' => 'string',
                                        'example' => 'r-Zo****',
                                    ],
                                    'ResourceDirectoryId' => [
                                        'description' => '资源目录ID。',
                                        'type' => 'string',
                                        'example' => 'rd-St****',
                                    ],
                                    'CreateTime' => [
                                        'description' => '资源目录开通时间。',
                                        'type' => 'string',
                                        'example' => '2019-02-18T15:32:10.473Z',
                                    ],
                                    'MasterAccountId' => [
                                        'description' => '管理账号ID。',
                                        'type' => 'string',
                                        'example' => '172845045600****',
                                    ],
                                    'MasterAccountName' => [
                                        'description' => '管理账号名称。',
                                        'type' => 'string',
                                        'example' => 'aliyun-admin',
                                    ],
                                    'ControlPolicyStatus' => [
                                        'description' => '管控策略状态。取值：'."\n"
                                            ."\n"
                                            .'- Enabled：已开启。'."\n"
                                            .'- PendingEnable：开启中。'."\n"
                                            .'- Disabled：已关闭。'."\n"
                                            .'- PendingDisable：关闭中。',
                                        'type' => 'string',
                                        'example' => 'Enabled',
                                    ],
                                    'MemberDeletionStatus' => [
                                        'description' => '是否开启了成员删除许可。取值：'."\n"
                                            .'- Enabled：已开启。允许通过调用[DeleteAccount](~~DeleteAccount~~)删除资源账号类型的成员。'."\n"
                                            .'- Disabled：已关闭。不允许删除资源账号类型的成员。',
                                        'type' => 'string',
                                        'example' => 'Enabled',
                                    ],
                                    'IdentityInformation' => [
                                        'description' => '成员实名信息。',
                                        'type' => 'string',
                                        'example' => '***有限公司',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'ResourceDirectoryNotInUse',
                        'errorMessage' => 'The specified account is not an Alibaba Cloud account or a member account of the resource directory.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CD76D376-2517-4924-92C5-DBC52262F93A\\",\\n  \\"ResourceDirectory\\": {\\n    \\"RootFolderId\\": \\"r-Zo****\\",\\n    \\"ResourceDirectoryId\\": \\"rd-St****\\",\\n    \\"CreateTime\\": \\"2019-02-18T15:32:10.473Z\\",\\n    \\"MasterAccountId\\": \\"172845045600****\\",\\n    \\"MasterAccountName\\": \\"aliyun-admin\\",\\n    \\"ControlPolicyStatus\\": \\"Enabled\\",\\n    \\"MemberDeletionStatus\\": \\"Enabled\\",\\n    \\"IdentityInformation\\": \\"***有限公司\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetResourceDirectoryResponse>\\n    <RequestId>CD76D376-2517-4924-92C5-DBC52262F93A</RequestId>\\n    <ResourceDirectory>\\n        <RootFolderId>r-Zo****</RootFolderId>\\n        <ResourceDirectoryId>rd-St****</ResourceDirectoryId>\\n        <CreateTime>2019-02-18T15:32:10.473Z</CreateTime>\\n        <MasterAccountId>172845045600****</MasterAccountId>\\n        <MasterAccountName>aliyun-admin</MasterAccountName>\\n        <ControlPolicyStatus>Enabled</ControlPolicyStatus>\\n        <MemberDeletionStatus>Enabled</MemberDeletionStatus>\\n        <IdentityInformation>***有限公司</IdentityInformation>\\n    </ResourceDirectory>\\n</GetResourceDirectoryResponse>","errorExample":""}]',
            'title' => '获取资源目录信息',
            'summary' => '调用GetResourceDirectory获取资源目录信息。管理账号调用时，返回管理账号开通的资源目录详情。成员调用时，返回成员所属的资源目录详情。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DestroyResourceDirectory' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.ResourceDirectory',
                        'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'DeleteConflict.ResourceDirectory.Account',
                        'errorMessage' => 'Failed to delete the resource directory because one or more member accounts exist. We recommend that you first remove these member accounts.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DestroyResourceDirectoryResponse>\\r\\n  <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\r\\n</DestroyResourceDirectoryResponse>","errorExample":""}]',
            'title' => '关闭资源目录',
            'summary' => '调用DestroyResourceDirectory关闭资源目录。此操作不可恢复，请您慎重操作。',
            'description' => '关闭资源目录前，请确认已完成以下操作：'."\n"
                .'- 资源目录内所有云账号类型的成员已被移除。具体操作，请参见[RemoveCloudAccount](~~RemoveCloudAccount~~)。'."\n"
                .'- 资源目录内除Root资源夹外的资源夹已全部删除。具体操作，请参见[DeleteFolder](~~DeleteFolder~~)。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateFolder' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'ParentFolderId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '父资源夹ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'r-b1****',
                    ],
                ],
                [
                    'name' => 'FolderName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源夹名称。'."\n"
                            ."\n"
                            .'长度为1~24个字符或汉字，可包含汉字、英文字母、数字、下划线（_）、半角句号（.）和短划线（-）。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rdFolder',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C2CBCA30-C8DD-423E-B4AD-4FB694C9180C',
                            ],
                            'Folder' => [
                                'description' => '资源夹信息。',
                                'type' => 'object',
                                'properties' => [
                                    'FolderId' => [
                                        'description' => '资源夹ID。',
                                        'type' => 'string',
                                        'example' => 'fd-u8B321****',
                                    ],
                                    'CreateTime' => [
                                        'description' => '资源夹创建时间。',
                                        'type' => 'string',
                                        'example' => '2019-02-19T09:34:50.757Z',
                                    ],
                                    'ParentFolderId' => [
                                        'description' => '父资源夹ID。',
                                        'type' => 'string',
                                        'example' => 'r-b1****',
                                    ],
                                    'FolderName' => [
                                        'description' => '资源夹名称。',
                                        'type' => 'string',
                                        'example' => 'rdFolder',
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
                        'errorCode' => 'InvalidParameter.ParentFolderId',
                        'errorMessage' => 'The ParentFolderId is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.Folder.Name',
                        'errorMessage' => 'You must specify the resource folder name.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Folder.Name',
                        'errorMessage' => 'The Name of folder is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Folder.Name.Length',
                        'errorMessage' => 'The Name of folder exceeds the length limit.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Folder.Name.AlreadyUsed',
                        'errorMessage' => 'The name already exists under the same parent. Please change to another name.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.ResourceDirectory',
                        'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
                    ],
                    [
                        'errorCode' => 'EntityNotExists.Folder',
                        'errorMessage' => 'The resource directory folder does not exist.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'LimitExceeded.Folder.Depth',
                        'errorMessage' => 'The folder depth exceeds the limit of 5.',
                    ],
                    [
                        'errorCode' => 'QuotaExceeded.Folder.Count',
                        'errorMessage' => 'The number of folders exceeds the quota.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C2CBCA30-C8DD-423E-B4AD-4FB694C9180C\\",\\n  \\"Folder\\": {\\n    \\"FolderId\\": \\"fd-u8B321****\\",\\n    \\"CreateTime\\": \\"2019-02-19T09:34:50.757Z\\",\\n    \\"ParentFolderId\\": \\"r-b1****\\",\\n    \\"FolderName\\": \\"rdFolder\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<CreateFolderResponse>\\r\\n        <Folder>\\r\\n            <FolderName>rdFolder</FolderName> \\r\\n            <ParentFolderId>r-b1****</ParentFolderId>\\r\\n            <FolderId>fd-u8B321****</FolderId>\\r\\n            <CreateTime>2019-02-19T09:34:50.757Z</CreateTime>\\r\\n        </Folder>\\r\\n        <RequestId>C2CBCA30-C8DD-423E-B4AD-4FB694C9180C</RequestId>\\r\\n</CreateFolderResponse>","errorExample":""}]',
            'title' => '创建资源夹',
            'summary' => '调用CreateFolder创建资源夹。',
            'description' => '最多支持创建5级资源夹。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetFolder' => [
            'summary' => '调用GetFolder获取资源夹信息。',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'FolderId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源夹ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fd-Jyl5U7****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C2CBCA30-C8DD-423E-B4AD-4FB694C9180C',
                            ],
                            'Folder' => [
                                'description' => '资源夹信息。',
                                'type' => 'object',
                                'properties' => [
                                    'FolderId' => [
                                        'description' => '资源夹ID。',
                                        'type' => 'string',
                                        'example' => 'fd-Jyl5U7****',
                                    ],
                                    'CreateTime' => [
                                        'description' => '资源夹创建时间。',
                                        'type' => 'string',
                                        'example' => '2021-06-15T06:39:08.521Z',
                                    ],
                                    'ParentFolderId' => [
                                        'description' => '父资源夹ID。',
                                        'type' => 'string',
                                        'example' => 'r-Wm****',
                                    ],
                                    'FolderName' => [
                                        'description' => '资源夹名称。',
                                        'type' => 'string',
                                        'example' => 'Applications',
                                    ],
                                    'ResourceDirectoryPath' => [
                                        'description' => '资源夹在资源目录中的路径ID（RDPath）。',
                                        'type' => 'string',
                                        'example' => 'rd-3G****/r-Wm****/fd-Jyl5U7****',
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
                        'errorCode' => 'MissingParameter.FolderId',
                        'errorMessage' => 'You must specify FolderId.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.FolderId',
                        'errorMessage' => 'The FolderId is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.ResourceDirectory',
                        'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
                    ],
                    [
                        'errorCode' => 'EntityNotExists.Folder',
                        'errorMessage' => 'The resource directory folder does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C2CBCA30-C8DD-423E-B4AD-4FB694C9180C\\",\\n  \\"Folder\\": {\\n    \\"FolderId\\": \\"fd-Jyl5U7****\\",\\n    \\"CreateTime\\": \\"2021-06-15T06:39:08.521Z\\",\\n    \\"ParentFolderId\\": \\"r-Wm****\\",\\n    \\"FolderName\\": \\"Applications\\",\\n    \\"ResourceDirectoryPath\\": \\"rd-3G****/r-Wm****/fd-Jyl5U7****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<GetFolderResponse>\\r\\n\\t<RequestId>88EF473E-D5CD-589F-AAB3-F6E0D12AECA3</RequestId>\\r\\n\\t<Folder>\\r\\n\\t\\t<CreateTime>2021-06-15T06:39:08.521Z</CreateTime>\\r\\n\\t\\t<FolderId>fd-Jyl5U7****</FolderId>\\r\\n\\t\\t<FolderName>Applications</FolderName>\\r\\n\\t\\t<ParentFolderId>r-Wm****</ParentFolderId>\\r\\n\\t\\t<ResourceDirectoryPath>rd-3G****/r-Wm****/fd-Jyl5U7****</ResourceDirectoryPath>\\r\\n\\t</Folder>\\r\\n</GetFolderResponse>","errorExample":""}]',
            'title' => '获取资源夹信息',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteFolder' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'FolderId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源夹ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fd-ae1in7****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MissingParameter.FolderId',
                        'errorMessage' => 'You must specify FolderId.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.FolderId',
                        'errorMessage' => 'The FolderId is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.ResourceDirectory',
                        'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
                    ],
                    [
                        'errorCode' => 'EntityNotExists.Folder',
                        'errorMessage' => 'The resource directory folder does not exist.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'DeleteConflict.Folder.SubFolder',
                        'errorMessage' => 'This folder has sub folders.',
                    ],
                    [
                        'errorCode' => 'DeleteConflict.Folder.Account',
                        'errorMessage' => 'This folder has accounts.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DeleteFolderResponse>\\r\\n  <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\r\\n</DeleteFolderResponse>","errorExample":""}]',
            'title' => '删除资源夹',
            'summary' => '调用DeleteFolder删除资源夹。',
            'description' => '删除资源夹前，请确保资源夹下不存在成员或子资源夹。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListFoldersForParent' => [
            'summary' => '调用ListFoldersForParent查询指定资源夹的子资源夹列表。',
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
            ],
            'parameters' => [
                [
                    'name' => 'ParentFolderId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '父资源夹ID。'."\n"
                            ."\n"
                            .'当该参数置空时，查询的是Root资源夹下的下一级子资源夹。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'r-b1****',
                    ],
                ],
                [
                    'name' => 'QueryKeyword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询关键字，例如：资源夹名称。'."\n"
                            ."\n"
                            .'支持模糊查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rdFolder',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码。'."\n"
                            ."\n"
                            .'起始值：1。默认值：1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页时每页显示的数据行数。'."\n"
                            ."\n"
                            .'取值范围：1~100。默认值：10。'."\n",
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '数据总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '7B8A4E7D-6CFF-471D-84DF-195A7A241ECB',
                            ],
                            'PageSize' => [
                                'description' => '分页时每页显示的数据行数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '5',
                            ],
                            'PageNumber' => [
                                'description' => '页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Folders' => [
                                'type' => 'object',
                                'properties' => [
                                    'Folder' => [
                                        'description' => '资源夹列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '资源夹列表。',
                                            'type' => 'object',
                                            'properties' => [
                                                'FolderId' => [
                                                    'description' => '资源夹ID。',
                                                    'type' => 'string',
                                                    'example' => 'rd-evic31****',
                                                ],
                                                'CreateTime' => [
                                                    'description' => '资源夹创建时间。',
                                                    'type' => 'string',
                                                    'example' => '2015-01-23T12:33:18Z',
                                                ],
                                                'FolderName' => [
                                                    'description' => '资源夹名称。',
                                                    'type' => 'string',
                                                    'example' => 'project-1',
                                                ],
                                            ],
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
                        'errorCode' => 'InvalidParameter.ParentFolderId',
                        'errorMessage' => 'The ParentFolderId is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.ResourceDirectory',
                        'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
                    ],
                    [
                        'errorCode' => 'EntityNotExists.Folder',
                        'errorMessage' => 'The resource directory folder does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 2,\\n  \\"RequestId\\": \\"7B8A4E7D-6CFF-471D-84DF-195A7A241ECB\\",\\n  \\"PageSize\\": 5,\\n  \\"PageNumber\\": 1,\\n  \\"Folders\\": {\\n    \\"Folder\\": [\\n      {\\n        \\"FolderId\\": \\"rd-evic31****\\",\\n        \\"CreateTime\\": \\"2015-01-23T12:33:18Z\\",\\n        \\"FolderName\\": \\"project-1\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ListFoldersForParentResponse>\\r\\n        <RequestId>7B8A4E7D-6CFF-471D-84DF-195A7A241ECB</RequestId>\\r\\n        <PageNumber>1</PageNumber>\\r\\n        <PageSize>5</PageSize>\\r\\n        <TotalCount>2</TotalCount>\\r\\n        <Folders>\\r\\n            <Folder>\\r\\n                <FolderId>rd-evic31****</FolderId>\\r\\n                <FolderName>project-1</FolderName>\\r\\n                <CreateTime>2015-01-23T12:33:18Z</CreateTime>\\r\\n            </Folder>\\r\\n            <Folder>\\r\\n                <FolderId>fd-evic31****</FolderId>\\r\\n                <FolderName>project-2</FolderName>\\r\\n                <CreateTime>2015-01-23T12:33:18Z</CreateTime>\\r\\n            </Folder>\\r\\n        </Folders>\\r\\n</ListFoldersForParentResponse>","errorExample":""}]',
            'title' => '查询指定资源夹的子资源夹列表',
            'description' => '您只能查看指定资源夹下一级的子资源夹列表，无法查看更深层级的资源夹列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateFolder' => [
            'summary' => '调用UpdateFolder修改资源夹名称。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'FolderId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源夹ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fd-u8B321****',
                    ],
                ],
                [
                    'name' => 'NewFolderName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新资源夹名称。'."\n"
                            ."\n"
                            .'长度为1~24个字符或汉字，可包含汉字、英文字母、数字、下划线（_）、点号（.）和短横线（-）。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rdFolder',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C2CBCA30-C8DD-423E-B4AD-4FB694C9180C',
                            ],
                            'Folder' => [
                                'description' => '资源夹信息。',
                                'type' => 'object',
                                'properties' => [
                                    'FolderId' => [
                                        'description' => '资源夹ID。',
                                        'type' => 'string',
                                        'example' => 'fd-u8B321****',
                                    ],
                                    'CreateTime' => [
                                        'description' => '资源夹创建时间。',
                                        'type' => 'string',
                                        'example' => '2019-02-19T09:34:50.757Z',
                                    ],
                                    'ParentFolderId' => [
                                        'description' => '父资源夹ID。',
                                        'type' => 'string',
                                        'example' => 'r-b1****',
                                    ],
                                    'FolderName' => [
                                        'description' => '资源夹名称。',
                                        'type' => 'string',
                                        'example' => 'rdFolder',
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
                        'errorCode' => 'MissingParameter.Folder.Name',
                        'errorMessage' => 'You must specify the resource folder name.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Folder.Name',
                        'errorMessage' => 'The Name of folder is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Folder.Name.Length',
                        'errorMessage' => 'The Name of folder exceeds the length limit.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.FolderId',
                        'errorMessage' => 'You must specify FolderId.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.FolderId',
                        'errorMessage' => 'The FolderId is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Folder.Name.AlreadyUsed',
                        'errorMessage' => 'The name already exists under the same parent. Please change to another name.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.ResourceDirectory',
                        'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
                    ],
                    [
                        'errorCode' => 'EntityNotExists.Folder',
                        'errorMessage' => 'The resource directory folder does not exist.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'LimitExceeded.Folder.Depth',
                        'errorMessage' => 'The folder depth exceeds the limit of 5.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C2CBCA30-C8DD-423E-B4AD-4FB694C9180C\\",\\n  \\"Folder\\": {\\n    \\"FolderId\\": \\"fd-u8B321****\\",\\n    \\"CreateTime\\": \\"2019-02-19T09:34:50.757Z\\",\\n    \\"ParentFolderId\\": \\"r-b1****\\",\\n    \\"FolderName\\": \\"rdFolder\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<UpdateFolderResponse>\\r\\n    <Folder>\\r\\n        <FolderName>rdFolder</FolderName>\\r\\n        <ParentFolderId>r-b1****</ParentFolderId>\\r\\n        <FolderId>fd-u8B321****</FolderId>\\r\\n        <CreateTime>2019-02-19T09:34:50.757Z</CreateTime>\\r\\n    </Folder>\\r\\n    <RequestId>C2CBCA30-C8DD-423E-B4AD-4FB694C9180C</RequestId>\\r\\n</UpdateFolderResponse>","errorExample":""}]',
            'title' => '修改资源夹',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListAncestors' => [
            'summary' => '调用ListAncestors查看指定资源夹的所有父资源夹信息。',
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
            ],
            'parameters' => [
                [
                    'name' => 'ChildId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '子资源夹ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fd-i1c9nr****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '83AFBEB6-DC03-406E-9686-867461FF6698',
                            ],
                            'Folders' => [
                                'type' => 'object',
                                'properties' => [
                                    'Folder' => [
                                        'description' => '资源夹信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '资源夹信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'FolderId' => [
                                                    'description' => '资源夹ID。',
                                                    'type' => 'string',
                                                    'example' => 'r-b1****',
                                                ],
                                                'CreateTime' => [
                                                    'description' => '资源夹创建时间。',
                                                    'type' => 'string',
                                                    'example' => '2019-01-18T10:03:35.217Z',
                                                ],
                                                'FolderName' => [
                                                    'description' => '资源夹名称。',
                                                    'type' => 'string',
                                                    'example' => 'root',
                                                ],
                                            ],
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
                        'errorCode' => 'MissingParameter.ChildId',
                        'errorMessage' => 'You must specify ChildId.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.ChildId',
                        'errorMessage' => 'The ChildId is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.ResourceDirectory',
                        'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
                    ],
                    [
                        'errorCode' => 'EntityNotExists.Folder',
                        'errorMessage' => 'The resource directory folder does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"83AFBEB6-DC03-406E-9686-867461FF6698\\",\\n  \\"Folders\\": {\\n    \\"Folder\\": [\\n      {\\n        \\"FolderId\\": \\"r-b1****\\",\\n        \\"CreateTime\\": \\"2019-01-18T10:03:35.217Z\\",\\n        \\"FolderName\\": \\"root\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ListAncestorsResponse>\\r\\n    <Folders>\\r\\n      <Folder>\\r\\n        <FolderName>root</FolderName>\\r\\n        <FolderId>r-b1****</FolderId>\\r\\n        <CreateTime>2019-01-18T10:03:35.217Z</CreateTime>\\r\\n      </Folder>\\r\\n      <Folder>\\r\\n        <FolderName>myFirstFd</FolderName>\\r\\n        <FolderId>fd-0adR35****</FolderId>\\r\\n        <CreateTime>2019-01-23T08:48:37.530Z</CreateTime>\\r\\n      </Folder>\\r\\n    </Folders>\\r\\n    <RequestId>83AFBEB6-DC03-406E-9686-867461FF6698</RequestId>\\r\\n</ListAncestorsResponse>","errorExample":""}]',
            'title' => '查看指定资源夹的所有父资源夹信息',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateResourceAccount' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'DisplayName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '成员显示名称。'."\n"
                            ."\n"
                            .'长度范围：2~50个字符或汉字。'."\n"
                            ."\n"
                            .'格式：允许输入汉字、英文字母、数字、下划线（_）、半角句号（.）、短划线（-）和空格。'."\n"
                            ."\n"
                            .'成员显示名称在资源目录内必须唯一。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Dev',
                    ],
                ],
                [
                    'name' => 'ParentFolderId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '父资源夹ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'fd-r23M55****',
                    ],
                ],
                [
                    'name' => 'PayerAccountId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结算账号ID。置空则采用新创建的成员自主结算。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '12323344****',
                    ],
                ],
                [
                    'name' => 'AccountNamePrefix',
                    'in' => 'query',
                    'schema' => [
                        'description' => '账号名称前缀。置空则系统随机生成。'."\n"
                            ."\n"
                            .'<props="china">长度范围：2~50个字符或汉字。</props>'."\n"
                            ."\n"
                            .'<props="intl">长度范围：2~37个字符。</props>'."\n"
                            ."\n"
                            .'格式：允许输入英文字母、数字和特殊字符`_.-`，必须以英文字母或数字开头和结尾，且不能输入连续的特殊字符`_.-`。'."\n"
                            ."\n"
                            .'完整账号名称的格式为<AccountNamePrefix>@<ResourceDirectoryId>.aliyunid.com，例如：`alice@rd-3G****.aliyunid.com`'."\n"
                            ."\n"
                            .'账号名称在资源目录内必须唯一。'."\n"
                            ."\n\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'alice',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '成员的标签。',
                        'type' => 'array',
                        'items' => [
                            'description' => '成员的标签。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'k1',
                                ],
                                'Value' => [
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'v1',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ResellAccountType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '成员的身份类型。取值：'."\n"
                            ."\n"
                            .'- resell（默认值）：分销账号。创建的成员将自动与您的分销商建立分销关系，同时您需要使用管理账号为新成员付款。'."\n"
                            .'- non_resell ：非分销账号。创建的成员为阿里云普通账号，与您当前的分销商无关联关系，该账号直接从阿里云购买资源，需自主付款。'."\n"
                            ."\n"
                            .'> 该参数仅支持国际站分销客户。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'resell',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- true：发送检查请求，不会实际创建成员。检查项当前包括当前账号是否允许设置成员的身份类型。如果检查不通过，则返回对应错误码。'."\n"
                            .'- false（默认）：发送正常请求，通过检查后直接创建成员。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'Account' => [
                                'description' => '成员信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '成员加入状态。取值为CreateSuccess，表示创建成功。',
                                        'type' => 'string',
                                        'example' => 'CreateSuccess',
                                    ],
                                    'Type' => [
                                        'description' => '成员类型。取值为ResourceAccount，表示资源账号。',
                                        'type' => 'string',
                                        'example' => 'ResourceAccount',
                                    ],
                                    'DisplayName' => [
                                        'description' => '成员显示名称。',
                                        'type' => 'string',
                                        'example' => 'Dev',
                                    ],
                                    'FolderId' => [
                                        'description' => '资源夹ID。',
                                        'type' => 'string',
                                        'example' => 'fd-r23M55****',
                                    ],
                                    'ResourceDirectoryId' => [
                                        'description' => '资源目录ID。',
                                        'type' => 'string',
                                        'example' => 'rd-3G****',
                                    ],
                                    'JoinTime' => [
                                        'description' => '成员加入时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2020-12-31T03:37:39.456Z',
                                    ],
                                    'AccountId' => [
                                        'description' => '成员ID。',
                                        'type' => 'string',
                                        'example' => '112730938585****',
                                    ],
                                    'JoinMethod' => [
                                        'description' => '成员加入方式。取值：'."\n"
                                            ."\n"
                                            .'- invited：邀请。'."\n"
                                            .'- created：创建。',
                                        'type' => 'string',
                                        'example' => 'created',
                                    ],
                                    'ModifyTime' => [
                                        'description' => '成员修改时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2020-12-31T03:37:39.456Z',
                                    ],
                                    'AccountName' => [
                                        'description' => '账号名称。',
                                        'type' => 'string',
                                        'example' => 'alice@rd-3g****.aliyunid.com',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'B356A415-D860-43E5-865A-E2193D62BBD6',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MissingParameter.Account.DisplayName',
                        'errorMessage' => 'You must specify DisplayName.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Account.DisplayName',
                        'errorMessage' => 'The DisplayName of account is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Account.DisplayName.Length',
                        'errorMessage' => 'The DisplayName of the account exceeds the length limit.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.ParentFolderId',
                        'errorMessage' => 'The ParentFolderId is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Account.AccountNamePrefix',
                        'errorMessage' => 'The account name prefix is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Account.AccountNamePrefix.Length',
                        'errorMessage' => 'The account name prefix exceeds the length limit.',
                    ],
                    [
                        'errorCode' => 'NotSupport.Site.Action',
                        'errorMessage' => 'Site does not allow current action.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.ResourceDirectory',
                        'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
                    ],
                    [
                        'errorCode' => 'EntityNotExists.Folder',
                        'errorMessage' => 'The resource directory folder does not exist.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'LimitExceeded.Account',
                        'errorMessage' => 'The maximum number of member accounts in a resource directory exceeds the limit.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Account.DisplayName.AlreadyUsed',
                        'errorMessage' => 'The displayname of account has been used.',
                    ],
                    [
                        'errorCode' => 'EntityAlreadyExists.ResourceDirectory.Account',
                        'errorMessage' => 'The email address that the system generates when you create a member account already exists. Try again later.',
                    ],
                    [
                        'errorCode' => 'Invalid.PayRelation',
                        'errorMessage' => 'Failed to create a member. The specified billing account is unavailable. Please change to another billing account and try again.',
                    ],
                    [
                        'errorCode' => 'NotSupport.PayerAccountInAnotherResourceDirectory',
                        'errorMessage' => 'The specified settlement account does not exist in the resource directory. You must specify a valid settlement account.',
                    ],
                    [
                        'errorCode' => 'CreateAccountDisabled',
                        'errorMessage' => 'The specified resource directory cannot create a new account.',
                    ],
                    [
                        'errorCode' => 'PaymentAccountEnterpriseVerifyError',
                        'errorMessage' => 'The type of the payment account is not enterprise verified.',
                    ],
                    [
                        'errorCode' => 'PaymentAccountFinancialRelationshipVerifyError',
                        'errorMessage' => 'The payment account must not be the beneficiary account from other financial relationships.',
                    ],
                    [
                        'errorCode' => 'PaymentAccountEnterpriseTypeError',
                        'errorMessage' => 'The type of the payment account is not enterprise.',
                    ],
                    [
                        'errorCode' => 'PaymentAccountFinancialRelationshipsChangeFrequencyVerifyError',
                        'errorMessage' => 'The financial relationship of payment account changes too frequently. Please try again later.',
                    ],
                    [
                        'errorCode' => 'MemberAccountVirtualCloudOperatorVerifyError',
                        'errorMessage' => 'The type of the member account must not be virtual operator.',
                    ],
                    [
                        'errorCode' => 'MemberAccountResellerVerifyError',
                        'errorMessage' => 'The type of the member account must not be reseller.',
                    ],
                    [
                        'errorCode' => 'PaymentAccountVirtualCloudOperatorVerifyError',
                        'errorMessage' => 'The type of the payment account must not be virtual operator.',
                    ],
                    [
                        'errorCode' => 'PaymentAccountResellerVerifyError',
                        'errorMessage' => 'The type of the payment account must not be reseller.',
                    ],
                    [
                        'errorCode' => 'PaymentAccountCreditIdentityTypeError',
                        'errorMessage' => 'The identity of the payment account is not credit.',
                    ],
                    [
                        'errorCode' => 'InconsistentEnterpriseNameError',
                        'errorMessage' => 'The enterprise name of the payment account and the member account must be consistent.',
                    ],
                    [
                        'errorCode' => 'PaymentAccountEnterpriseInvoiceError',
                        'errorMessage' => 'No enterprise invoice header information is set for the payment account.',
                    ],
                    [
                        'errorCode' => 'UnknownFinancialError',
                        'errorMessage' => 'An unknown financial error occurred.',
                    ],
                    [
                        'errorCode' => 'BusinessRestricted',
                        'errorMessage' => 'Business is restricted. Please contact your customer service manager.',
                    ],
                    [
                        'errorCode' => 'FundAccountHasArrearsAmount',
                        'errorMessage' => 'There are arrears in the current payment account. You cannot change the payment account. Please settle the arrears and try again.',
                    ],
                    [
                        'errorCode' => 'FundAccountOwnerPayedByOthers',
                        'errorMessage' => 'If the payment has been made by another account, it is not allowed to be used as the main payment account.',
                    ],
                    [
                        'errorCode' => 'UserOwnFundAccountPayForOthers',
                        'errorMessage' => 'If the account has been used as the main payment account, it is not allowed to set up payment by others.',
                    ],
                    [
                        'errorCode' => 'EcoRelationCheckFailed',
                        'errorMessage' => 'Accounts associated with partners are not allowed to set up agency payment relationships.',
                    ],
                    [
                        'errorCode' => 'NotSupport.SettingResellAccountType',
                        'errorMessage' => 'The current account does not support setting the resellAccountType for members.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Account\\": {\\n    \\"Status\\": \\"CreateSuccess\\",\\n    \\"Type\\": \\"ResourceAccount\\",\\n    \\"DisplayName\\": \\"Dev\\",\\n    \\"FolderId\\": \\"fd-r23M55****\\",\\n    \\"ResourceDirectoryId\\": \\"rd-3G****\\",\\n    \\"JoinTime\\": \\"2020-12-31T03:37:39.456Z\\",\\n    \\"AccountId\\": \\"112730938585****\\",\\n    \\"JoinMethod\\": \\"created\\",\\n    \\"ModifyTime\\": \\"2020-12-31T03:37:39.456Z\\",\\n    \\"AccountName\\": \\"alice@rd-3g****.aliyunid.com\\"\\n  },\\n  \\"RequestId\\": \\"B356A415-D860-43E5-865A-E2193D62BBD6\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateResourceAccountResponse>\\n    <Account>\\n        <Status>CreateSuccess</Status>\\n        <Type>ResourceAccount</Type>\\n        <DisplayName>Dev</DisplayName>\\n        <FolderId>fd-r23M55****</FolderId>\\n        <ResourceDirectoryId>rd-3G****</ResourceDirectoryId>\\n        <JoinTime>2020-12-31T03:37:39.456Z</JoinTime>\\n        <AccountId>112730938585****</AccountId>\\n        <JoinMethod>created</JoinMethod>\\n        <ModifyTime>2020-12-31T03:37:39.456Z</ModifyTime>\\n        <AccountName>alice@rd-3g****.aliyunid.com</AccountName>\\n    </Account>\\n    <RequestId>B356A415-D860-43E5-865A-E2193D62BBD6</RequestId>\\n</CreateResourceAccountResponse>","errorExample":""}]',
            'title' => '创建成员',
            'summary' => '调用CreateResourceAccount创建资源账号类型的成员。',
            'description' => '在资源目录内，成员作为资源容器，是一种资源分组单位。成员通常用于指代一个项目或应用，每个成员中的资源相对其他成员中的资源是物理隔离的。'."\n"
                ."\n"
                .'本文将提供一个示例，在资源夹`fd-r23M55****`下创建一个成员，其成员显示名称为`Dev`，账号名称前缀为`alice`。',
            'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetAccount' => [
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'AccountId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '成员ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '181761095690****',
                    ],
                ],
                [
                    'name' => 'IncludeTags',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否返回标签信息。取值：'."\n"
                            ."\n"
                            .'- false（默认值）：不返回。'."\n"
                            .'- true：返回。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'Account' => [
                                'description' => '成员信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '成员加入状态。取值：'."\n"
                                            ."\n"
                                            .'- CreateSuccess：创建成功。'."\n"
                                            .'- PromoteVerifying：升级确认中。'."\n"
                                            .'- PromoteFailed：升级失败。'."\n"
                                            .'- PromoteExpired：升级过期。'."\n"
                                            .'- PromoteCancelled：升级取消。'."\n"
                                            .'- PromoteSuccess：升级成功。'."\n"
                                            .'- InviteSuccess：邀请成功。',
                                        'type' => 'string',
                                        'example' => 'CreateSuccess',
                                    ],
                                    'Type' => [
                                        'description' => '成员类型。取值：'."\n"
                                            ."\n"
                                            .'- CloudAccount：云账号。'."\n"
                                            .'- ResourceAccount：资源账号。',
                                        'type' => 'string',
                                        'example' => 'ResourceAccount',
                                    ],
                                    'DisplayName' => [
                                        'description' => '成员名称。',
                                        'type' => 'string',
                                        'example' => 'admin',
                                    ],
                                    'FolderId' => [
                                        'description' => '资源夹ID。',
                                        'type' => 'string',
                                        'example' => 'fd-bVaRIG****',
                                    ],
                                    'ResourceDirectoryId' => [
                                        'description' => '资源目录ID。',
                                        'type' => 'string',
                                        'example' => 'rd-k3****',
                                    ],
                                    'IdentityInformation' => [
                                        'description' => '实名认证信息。',
                                        'type' => 'string',
                                        'example' => 'aliyun-admin',
                                    ],
                                    'JoinTime' => [
                                        'description' => '成员加入时间。',
                                        'type' => 'string',
                                        'example' => '2015-01-23T12:33:18Z',
                                    ],
                                    'AccountId' => [
                                        'description' => '成员ID。',
                                        'type' => 'string',
                                        'example' => '181761095690****',
                                    ],
                                    'JoinMethod' => [
                                        'description' => '成员加入方式。取值：'."\n"
                                            ."\n"
                                            .'- invited：邀请。'."\n"
                                            .'- created：创建。',
                                        'type' => 'string',
                                        'example' => 'created',
                                    ],
                                    'ModifyTime' => [
                                        'description' => '成员修改时间。',
                                        'type' => 'string',
                                        'example' => '2015-01-23T12:33:18Z',
                                    ],
                                    'AccountName' => [
                                        'description' => '账号名称。',
                                        'type' => 'string',
                                        'example' => 'someone@example.com',
                                    ],
                                    'ResourceDirectoryPath' => [
                                        'description' => '成员在资源目录中的路径ID（RDPath）。',
                                        'type' => 'string',
                                        'example' => 'rd-k3****/r-Wm****/fd-bVaRIG****/181761095690****',
                                    ],
                                    'Tags' => [
                                        'description' => '标签。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '标签列表。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Key' => [
                                                    'description' => '标签键。',
                                                    'type' => 'string',
                                                    'example' => 'tag_key',
                                                ],
                                                'Value' => [
                                                    'description' => '标签值。',
                                                    'type' => 'string',
                                                    'example' => 'tag_value',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Location' => [
                                        'description' => '成员所在资源目录的位置。',
                                        'type' => 'string',
                                        'example' => 'root/AlRd****/Z5Aa****',
                                    ],
                                    'EmailStatus' => [
                                        'description' => '邮箱状态。取值：'."\n"
                                            ."\n"
                                            .'- 空：不存在邮箱修改记录。'."\n"
                                            .'- WAIT_MODIFY：正在修改中。'."\n"
                                            .'- CANCELLED：修改取消。'."\n"
                                            .'- EXPIRED：修改过期。',
                                        'type' => 'string',
                                        'example' => 'WAIT_MODIFY',
                                    ],
                                    'HasSecureMobilePhone' => [
                                        'description' => '成员是否已绑定安全手机。取值：'."\n"
                                            .'- true：成员已绑定安全手机。'."\n"
                                            .'- false：成员未绑定安全手机。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MissingParameter.AccountId',
                        'errorMessage' => 'You must specify AccountId.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.AccountId',
                        'errorMessage' => 'The AccountId is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.Account',
                        'errorMessage' => 'This resource directory account does not exist.',
                    ],
                    [
                        'errorCode' => 'EntityNotExists.ResourceDirectory',
                        'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Account\\": {\\n    \\"Status\\": \\"CreateSuccess\\",\\n    \\"Type\\": \\"ResourceAccount\\",\\n    \\"DisplayName\\": \\"admin\\",\\n    \\"FolderId\\": \\"fd-bVaRIG****\\",\\n    \\"ResourceDirectoryId\\": \\"rd-k3****\\",\\n    \\"IdentityInformation\\": \\"aliyun-admin\\",\\n    \\"JoinTime\\": \\"2015-01-23T12:33:18Z\\",\\n    \\"AccountId\\": \\"181761095690****\\",\\n    \\"JoinMethod\\": \\"created\\",\\n    \\"ModifyTime\\": \\"2015-01-23T12:33:18Z\\",\\n    \\"AccountName\\": \\"someone@example.com\\",\\n    \\"ResourceDirectoryPath\\": \\"rd-k3****/r-Wm****/fd-bVaRIG****/181761095690****\\",\\n    \\"Tags\\": [\\n      {\\n        \\"Key\\": \\"tag_key\\",\\n        \\"Value\\": \\"tag_value\\"\\n      }\\n    ],\\n    \\"Location\\": \\"root/AlRd****/Z5Aa****\\",\\n    \\"EmailStatus\\": \\"WAIT_MODIFY\\",\\n    \\"HasSecureMobilePhone\\": true\\n  },\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\"\\n}","errorExample":""},{"type":"xml","example":"<GetAccountResponse>\\n    <Account>\\n        <Status>CreateSuccess</Status>\\n        <Type>ResourceAccount</Type>\\n        <DisplayName>admin</DisplayName>\\n        <FolderId>fd-bVaRIG****</FolderId>\\n        <ResourceDirectoryId>rd-k3****</ResourceDirectoryId>\\n        <IdentityInformation>aliyun-admin</IdentityInformation>\\n        <JoinTime>2015-01-23T12:33:18Z</JoinTime>\\n        <AccountId>181761095690****</AccountId>\\n        <JoinMethod>created</JoinMethod>\\n        <ModifyTime>2015-01-23T12:33:18Z</ModifyTime>\\n        <AccountName>someone@example.com</AccountName>\\n        <ResourceDirectoryPath>rd-k3****/r-Wm****/fd-bVaRIG****/181761095690****</ResourceDirectoryPath>\\n        <Tags>\\n            <Key>tag_key</Key>\\n            <Value>tag_value</Value>\\n        </Tags>\\n        <Location>root/AlRd****/Z5Aa****</Location>\\n        <EmailStatus>WAIT_MODIFY</EmailStatus>\\n    </Account>\\n    <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\n</GetAccountResponse>","errorExample":""}]',
            'title' => '查询成员信息',
            'summary' => '调用GetAccount查询成员信息。',
        ],
        'MoveAccount' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'AccountId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要移动的账号ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12323344****',
                    ],
                ],
                [
                    'name' => 'DestinationFolderId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标资源夹ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fd-bVaRIG****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MissingParameter.AccountId',
                        'errorMessage' => 'You must specify AccountId.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.AccountId',
                        'errorMessage' => 'The AccountId is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.DestinationFolderId',
                        'errorMessage' => 'You must specify DestinationFolderId.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.DestinationFolderId',
                        'errorMessage' => 'The DestinationFolderId is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.Account',
                        'errorMessage' => 'This resource directory account does not exist.',
                    ],
                    [
                        'errorCode' => 'EntityNotExists.ResourceDirectory',
                        'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
                    ],
                    [
                        'errorCode' => 'EntityNotExists.Folder',
                        'errorMessage' => 'The resource directory folder does not exist.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'AccountTypeOrStatusMismatch',
                        'errorMessage' => 'You cannot perform the action on the member account.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<MoveAccountResponse>\\r\\n  <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\r\\n</MoveAccountResponse>","errorExample":""}]',
            'title' => '移动成员',
            'summary' => '调用MoveAccount将成员移动到另一个资源夹。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateAccount' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'NewDisplayName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新的成员名称。'."\n"
                            .'> `NewDisplayName`与`NewAccountType`任选其一设置，不能同时设置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'admin',
                    ],
                ],
                [
                    'name' => 'NewAccountType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新的成员类型。取值：'."\n"
                            ."\n"
                            .'- ResourceAccount：将指定的云账号切换为资源账号。'."\n"
                            .'- CloudAccount：将指定的资源账号切换为云账号。'."\n"
                            ."\n"
                            .'> `NewDisplayName`与`NewAccountType`任选其一设置，不能同时设置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ResourceAccount',
                    ],
                ],
                [
                    'name' => 'AccountId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '成员ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12323344****',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- true：发送检查请求，不会修改成员信息。检查项包括成员状态是否可以修改、成员是否具有安全信息等。如果检查不通过，则返回对应错误码。'."\n"
                            .'- false（默认）：发送正常请求，通过检查后直接修改成员。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'Account' => [
                                'description' => '成员信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '成员加入状态。取值：'."\n"
                                            ."\n"
                                            .'- CreateSuccess：创建成功。'."\n"
                                            .'- InviteSuccess：邀请成功。'."\n"
                                            .'- Removed：已移除。'."\n"
                                            .'- SwitchSuccess：切换成功。',
                                        'type' => 'string',
                                        'example' => 'CreateSuccess',
                                    ],
                                    'Type' => [
                                        'description' => '成员类型。取值：'."\n"
                                            ."\n"
                                            .'- CloudAccount：云账号。'."\n"
                                            .'- ResourceAccount：资源账号。',
                                        'type' => 'string',
                                        'example' => 'ResourceAccount',
                                    ],
                                    'DisplayName' => [
                                        'description' => '成员名称。',
                                        'type' => 'string',
                                        'example' => 'admin',
                                    ],
                                    'FolderId' => [
                                        'description' => '资源夹ID。',
                                        'type' => 'string',
                                        'example' => 'fd-bVaRIG****',
                                    ],
                                    'ResourceDirectoryId' => [
                                        'description' => '资源目录ID。',
                                        'type' => 'string',
                                        'example' => 'rd-k3****',
                                    ],
                                    'JoinTime' => [
                                        'description' => '成员加入时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2015-01-23T12:33:18Z',
                                    ],
                                    'AccountId' => [
                                        'description' => '成员ID。',
                                        'type' => 'string',
                                        'example' => '12323344****',
                                    ],
                                    'JoinMethod' => [
                                        'description' => '成员加入方式。取值：'."\n"
                                            ."\n"
                                            .'- invited：邀请。'."\n"
                                            .'- created：创建。',
                                        'type' => 'string',
                                        'example' => 'created',
                                    ],
                                    'ModifyTime' => [
                                        'description' => '成员修改时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2015-01-23T12:33:18Z',
                                    ],
                                    'AccountName' => [
                                        'description' => '阿里云账号名称。',
                                        'type' => 'string',
                                        'example' => 'ecs-manager@aliyun.com',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.ResourceDirectory',
                        'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
                    ],
                    [
                        'errorCode' => 'EntityNotExists.Account',
                        'errorMessage' => 'This resource directory account does not exist.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'InvalidParameter.Account.DisplayName.AlreadyUsed',
                        'errorMessage' => 'The displayname of account has been used.',
                    ],
                    [
                        'errorCode' => 'MissingDisplayNameOrAccountType',
                        'errorMessage' => 'Either display name or account type must be specified.',
                    ],
                    [
                        'errorCode' => 'AccountTypeMismatch',
                        'errorMessage' => 'The type or status of the member account cannot satisfy the current operation.',
                    ],
                    [
                        'errorCode' => 'PrimaryAkInUse',
                        'errorMessage' => 'The account has the primary AK in use.',
                    ],
                    [
                        'errorCode' => 'MissingSecurityInfo',
                        'errorMessage' => 'Security information is missing.',
                    ],
                    [
                        'errorCode' => 'LegalEntityDifferent',
                        'errorMessage' => 'The account legal entity is different from the one of the Management Account.',
                    ],
                    [
                        'errorCode' => 'CallerIdentityError',
                        'errorMessage' => 'Please use the RAM user or role of the Management Account.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Account\\": {\\n    \\"Status\\": \\"CreateSuccess\\",\\n    \\"Type\\": \\"ResourceAccount\\",\\n    \\"DisplayName\\": \\"admin\\",\\n    \\"FolderId\\": \\"fd-bVaRIG****\\",\\n    \\"ResourceDirectoryId\\": \\"rd-k3****\\",\\n    \\"JoinTime\\": \\"2015-01-23T12:33:18Z\\",\\n    \\"AccountId\\": \\"12323344****\\",\\n    \\"JoinMethod\\": \\"created\\",\\n    \\"ModifyTime\\": \\"2015-01-23T12:33:18Z\\",\\n    \\"AccountName\\": \\"ecs-manager@aliyun.com\\"\\n  },\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<UpdateAccountResponse>\\r\\n    <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\r\\n    <Account>\\r\\n        <ResourceDirectoryId>rd-k3****</ResourceDirectoryId>\\r\\n        <AccountId>12323344****</AccountId>\\r\\n        <DisplayName>admin</DisplayName>\\r\\n        <FolderId>fd-bVaRIG****</FolderId>\\r\\n        <JoinMethod>created</JoinMethod>\\r\\n        <JoinTime>2015-01-23T12:33:18Z</JoinTime>\\r\\n        <Type>ResourceAccount</Type>\\r\\n        <Status>CreateSuccess</Status>\\r\\n        <RecordId>06950264-3f0d-4ca9-82dd-6ee7a3d33d6b</RecordId>\\r\\n        <ModifyTime>2015-01-23T12:33:18Z</ModifyTime>\\r\\n    </Account>\\r\\n</UpdateAccountResponse>","errorExample":""}]',
            'title' => '修改成员',
            'summary' => '调用UpdateAccount修改成员名称或切换成员类型。',
            'description' => '### 前提条件'."\n"
                ."\n"
                .'- 为确保系统可以记录到管理操作的具体操作者，请使用管理账号下具有资源目录管理权限（AliyunResourceDirectoryFullAccess）的RAM用户或RAM角色调用本API。'."\n"
                .'- 资源账号切换为云账号时需要满足的条件，请参见[资源账号切换为云账号](~~111233~~)。'."\n"
                .'- 云账号切换为资源账号时需要满足的条件，请参见[云账号切换为资源账号](~~209980~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListAccounts' => [
            'methods' => [
                'post',
                'get',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码。'."\n"
                            ."\n"
                            .'起始值：1。默认值：1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页时每页显示的数据行数。'."\n"
                            ."\n"
                            .'取值范围：1~100。默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'QueryKeyword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询关键字，例如：成员名称。'."\n"
                            ."\n"
                            .'支持模糊查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Advance',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '通过标签过滤。',
                        'type' => 'array',
                        'items' => [
                            'description' => '过滤的标签列表。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'tag_key',
                                ],
                                'Value' => [
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'tag_value',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IncludeTags',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否返回标签信息。取值：'."\n"
                            ."\n"
                            .'- false（默认值）：不返回。'."\n"
                            .'- true：返回。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '数据总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '7B8A4E7D-6CFF-471D-84DF-195A7A241ECB',
                            ],
                            'PageSize' => [
                                'description' => '分页时每页显示的数据行数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '5',
                            ],
                            'PageNumber' => [
                                'description' => '页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Accounts' => [
                                'type' => 'object',
                                'properties' => [
                                    'Account' => [
                                        'description' => '成员列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '成员列表。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '成员加入状态。取值：'."\n"
                                                        ."\n"
                                                        .'- CreateSuccess：创建成功。'."\n"
                                                        .'- PromoteVerifying：升级确认中。'."\n"
                                                        .'- PromoteFailed：升级失败。'."\n"
                                                        .'- PromoteExpired：升级过期。'."\n"
                                                        .'- PromoteCancelled：升级取消。'."\n"
                                                        .'- PromoteSuccess：升级成功。'."\n"
                                                        .'- InviteSuccess：邀请成功。',
                                                    'type' => 'string',
                                                    'example' => 'CreateSuccess',
                                                ],
                                                'Type' => [
                                                    'description' => '成员类型。取值：'."\n"
                                                        ."\n"
                                                        .'- CloudAccount：云账号。'."\n"
                                                        .'- ResourceAccount：资源账号。',
                                                    'type' => 'string',
                                                    'example' => 'ResourceAccount',
                                                ],
                                                'DisplayName' => [
                                                    'description' => '成员名称。',
                                                    'type' => 'string',
                                                    'example' => 'test',
                                                ],
                                                'FolderId' => [
                                                    'description' => '资源夹ID。',
                                                    'type' => 'string',
                                                    'example' => 'fd-QRzuim****',
                                                ],
                                                'ResourceDirectoryId' => [
                                                    'description' => '资源目录ID。',
                                                    'type' => 'string',
                                                    'example' => 'rd-3G****',
                                                ],
                                                'JoinTime' => [
                                                    'description' => '成员加入时间（UTC时间）。',
                                                    'type' => 'string',
                                                    'example' => '2021-01-18T08:01:50.522Z',
                                                ],
                                                'AccountId' => [
                                                    'description' => '成员账号ID。',
                                                    'type' => 'string',
                                                    'example' => '181761095690****',
                                                ],
                                                'JoinMethod' => [
                                                    'description' => '成员加入方式。取值：'."\n"
                                                        ."\n"
                                                        .'- invited：邀请。'."\n"
                                                        .'- created：创建。',
                                                    'type' => 'string',
                                                    'example' => 'created',
                                                ],
                                                'ModifyTime' => [
                                                    'description' => '成员修改时间（UTC时间）。',
                                                    'type' => 'string',
                                                    'example' => '2021-01-18T08:04:37.668Z',
                                                ],
                                                'ResourceDirectoryPath' => [
                                                    'description' => '成员在资源目录中的路径ID（RDPath）。',
                                                    'type' => 'string',
                                                    'example' => 'rd-3G****/r-Wm****/fd-QRzuim****/181761095690****',
                                                ],
                                                'AccountName' => [
                                                    'description' => '账号名称。',
                                                    'type' => 'string',
                                                    'example' => 'oxy01414357@alibaba-inc.com',
                                                ],
                                                'DeletionStatus' => [
                                                    'description' => '成员删除状态。取值：'."\n"
                                                        .'- Checking：检查中。'."\n"
                                                        .'- Deleting：删除中。'."\n"
                                                        .'- CheckFailed：检查失败。'."\n"
                                                        .'- DeleteFailed：删除失败。'."\n"
                                                        ."\n"
                                                        .'> 当账号未发起删除流程时，该字段为空。',
                                                    'type' => 'string',
                                                    'example' => 'Checking',
                                                ],
                                                'Tags' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Tag' => [
                                                            'description' => '成员所有的标签。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '成员所有的标签列表。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Key' => [
                                                                        'description' => '标签键。',
                                                                        'type' => 'string',
                                                                        'example' => 'tag_key',
                                                                    ],
                                                                    'Value' => [
                                                                        'description' => '标签值。',
                                                                        'type' => 'string',
                                                                        'example' => 'tag_value',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.ResourceDirectory',
                        'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 2,\\n  \\"RequestId\\": \\"7B8A4E7D-6CFF-471D-84DF-195A7A241ECB\\",\\n  \\"PageSize\\": 5,\\n  \\"PageNumber\\": 1,\\n  \\"Accounts\\": {\\n    \\"Account\\": [\\n      {\\n        \\"Status\\": \\"CreateSuccess\\",\\n        \\"Type\\": \\"ResourceAccount\\",\\n        \\"DisplayName\\": \\"test\\",\\n        \\"FolderId\\": \\"fd-QRzuim****\\",\\n        \\"ResourceDirectoryId\\": \\"rd-3G****\\",\\n        \\"JoinTime\\": \\"2021-01-18T08:01:50.522Z\\",\\n        \\"AccountId\\": \\"181761095690****\\",\\n        \\"JoinMethod\\": \\"created\\",\\n        \\"ModifyTime\\": \\"2021-01-18T08:04:37.668Z\\",\\n        \\"ResourceDirectoryPath\\": \\"rd-3G****/r-Wm****/fd-QRzuim****/181761095690****\\",\\n        \\"AccountName\\": \\"oxy01414357@alibaba-inc.com\\",\\n        \\"DeletionStatus\\": \\"Checking\\",\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"Key\\": \\"tag_key\\",\\n              \\"Value\\": \\"tag_value\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListAccountsResponse>\\n    <TotalCount>2</TotalCount>\\n    <RequestId>7B8A4E7D-6CFF-471D-84DF-195A7A241ECB</RequestId>\\n    <PageSize>1</PageSize>\\n    <PageNumber>2</PageNumber>\\n    <Accounts>\\n        <Status>CreateSuccess</Status>\\n        <Type>ResourceAccount</Type>\\n        <DisplayName>test</DisplayName>\\n        <FolderId>fd-QRzuim****</FolderId>\\n        <ResourceDirectoryId>rd-3G****</ResourceDirectoryId>\\n        <JoinTime>2021-01-18T08:01:50.522Z</JoinTime>\\n        <AccountId>181761095690****</AccountId>\\n        <JoinMethod>created</JoinMethod>\\n        <ModifyTime>2021-01-18T08:04:37.668Z</ModifyTime>\\n        <ResourceDirectoryPath>rd-3G****/r-Wm****/fd-QRzuim****/181761095690****</ResourceDirectoryPath>\\n        <Tags>\\n            <Key>tag_key</Key>\\n            <Value>tag_value</Value>\\n        </Tags>\\n    </Accounts>\\n</ListAccountsResponse>","errorExample":""}]',
            'title' => '查询整个资源目录下的所有成员列表',
            'summary' => '调用ListAccounts查询整个资源目录下的所有成员列表。',
            'description' => '资源目录的管理账号和可信服务的委派管理员账号可以调用该接口。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'RemoveCloudAccount' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'AccountId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '成员ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '177242285274****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MissingParameter.AccountId',
                        'errorMessage' => 'You must specify AccountId.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.AccountId',
                        'errorMessage' => 'The AccountId is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.Account',
                        'errorMessage' => 'This resource directory account does not exist.',
                    ],
                    [
                        'errorCode' => 'EntityNotExists.ResourceDirectory',
                        'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'AccountTypeOrStatusMismatch',
                        'errorMessage' => 'You cannot perform the action on the member account.',
                    ],
                    [
                        'errorCode' => 'Deny.TrustedService',
                        'errorMessage' => 'You attempted to remove an account that is used in %s. To complete this operation, you must first remove this account from the Trusted Service.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<RemoveCloudAccountResponse>\\r\\n  <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\r\\n</RemoveCloudAccountResponse>","errorExample":""}]',
            'title' => '移除云账号类型的成员',
            'summary' => '调用RemoveCloudAccount移除云账号类型的成员。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListAccountsForParent' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'ParentFolderId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源夹ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'fd-bVaRIG****',
                    ],
                ],
                [
                    'name' => 'QueryKeyword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询关键字，例如：成员名称。'."\n"
                            ."\n"
                            .'支持模糊查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'admin',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码。'."\n"
                            ."\n"
                            .'起始值：1。默认值：1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页时每页显示的数据行数。'."\n"
                            ."\n"
                            .'取值范围：1~100。默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '通过标签过滤。',
                        'type' => 'array',
                        'items' => [
                            'description' => '过滤的标签列表。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'tag_key',
                                ],
                                'Value' => [
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'tag_value',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IncludeTags',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否返回标签信息。取值：'."\n"
                            ."\n"
                            .'- false（默认值）：不返回。'."\n"
                            .'- true：返回。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '数据总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '7B8A4E7D-6CFF-471D-84DF-195A7A241ECB',
                            ],
                            'PageSize' => [
                                'description' => '分页时每页显示的数据行数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '5',
                            ],
                            'PageNumber' => [
                                'description' => '页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Accounts' => [
                                'type' => 'object',
                                'properties' => [
                                    'Account' => [
                                        'description' => '成员信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '成员信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '成员加入状态。取值：'."\n"
                                                        ."\n"
                                                        .'- CreateSuccess：创建成功。'."\n"
                                                        .'- PromoteVerifying：升级确认中。'."\n"
                                                        .'- PromoteFailed：升级失败。'."\n"
                                                        .'- PromoteExpired：升级过期。'."\n"
                                                        .'- PromoteCancelled：升级取消。'."\n"
                                                        .'- PromoteSuccess：升级成功。'."\n"
                                                        .'- InviteSuccess：邀请成功。',
                                                    'type' => 'string',
                                                    'example' => 'CreateSuccess',
                                                ],
                                                'Type' => [
                                                    'description' => '成员类型。取值：'."\n"
                                                        ."\n"
                                                        .'- CloudAccount：云账号。'."\n"
                                                        .'- ResourceAccount：资源账号。',
                                                    'type' => 'string',
                                                    'example' => 'ResourceAccount',
                                                ],
                                                'DisplayName' => [
                                                    'description' => '成员名称。',
                                                    'type' => 'string',
                                                    'example' => 'admin',
                                                ],
                                                'FolderId' => [
                                                    'description' => '资源夹ID。',
                                                    'type' => 'string',
                                                    'example' => 'fd-bVaRIG****',
                                                ],
                                                'ResourceDirectoryId' => [
                                                    'description' => '资源目录ID。',
                                                    'type' => 'string',
                                                    'example' => 'rd-k4****',
                                                ],
                                                'JoinTime' => [
                                                    'description' => '成员加入时间（UTC时间）。',
                                                    'type' => 'string',
                                                    'example' => '2015-01-23T12:33:18Z',
                                                ],
                                                'AccountId' => [
                                                    'description' => '成员账号ID。',
                                                    'type' => 'string',
                                                    'example' => '184311716100****',
                                                ],
                                                'JoinMethod' => [
                                                    'description' => '成员加入方式。'."\n"
                                                        ."\n"
                                                        .'- invited：邀请。'."\n"
                                                        .'- created：创建。',
                                                    'type' => 'string',
                                                    'example' => 'created',
                                                ],
                                                'ModifyTime' => [
                                                    'description' => '成员修改时间（UTC时间）。',
                                                    'type' => 'string',
                                                    'example' => '2015-01-23T12:33:18Z',
                                                ],
                                                'AccountName' => [
                                                    'description' => '账号名称。',
                                                    'type' => 'string',
                                                    'example' => 'hdd01429358@alibaba-inc.com',
                                                ],
                                                'DeletionStatus' => [
                                                    'description' => '成员删除状态。取值：'."\n"
                                                        .'- Checking：检查中。'."\n"
                                                        .'- Deleting：删除中。'."\n"
                                                        .'- CheckFailed：检查失败。'."\n"
                                                        .'- DeleteFailed：删除失败。'."\n"
                                                        ."\n"
                                                        .'> 当账号未发起删除流程时，该字段为空。',
                                                    'type' => 'string',
                                                    'example' => 'Checking',
                                                ],
                                                'Tags' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Tag' => [
                                                            'description' => '成员所有的标签。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '成员标签列表。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Key' => [
                                                                        'description' => '标签键。',
                                                                        'type' => 'string',
                                                                        'example' => 'tag_key',
                                                                    ],
                                                                    'Value' => [
                                                                        'description' => '标签值。',
                                                                        'type' => 'string',
                                                                        'example' => 'tag_value',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
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
                        'errorCode' => 'InvalidParameter.ParentFolderId',
                        'errorMessage' => 'The ParentFolderId is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.ResourceDirectory',
                        'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
                    ],
                    [
                        'errorCode' => 'EntityNotExists.Folder',
                        'errorMessage' => 'The resource directory folder does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 2,\\n  \\"RequestId\\": \\"7B8A4E7D-6CFF-471D-84DF-195A7A241ECB\\",\\n  \\"PageSize\\": 5,\\n  \\"PageNumber\\": 1,\\n  \\"Accounts\\": {\\n    \\"Account\\": [\\n      {\\n        \\"Status\\": \\"CreateSuccess\\",\\n        \\"Type\\": \\"ResourceAccount\\",\\n        \\"DisplayName\\": \\"admin\\",\\n        \\"FolderId\\": \\"fd-bVaRIG****\\",\\n        \\"ResourceDirectoryId\\": \\"rd-k4****\\",\\n        \\"JoinTime\\": \\"2015-01-23T12:33:18Z\\",\\n        \\"AccountId\\": \\"184311716100****\\",\\n        \\"JoinMethod\\": \\"created\\",\\n        \\"ModifyTime\\": \\"2015-01-23T12:33:18Z\\",\\n        \\"AccountName\\": \\"hdd01429358@alibaba-inc.com\\",\\n        \\"DeletionStatus\\": \\"Checking\\",\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"Key\\": \\"tag_key\\",\\n              \\"Value\\": \\"tag_value\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListAccountsForParentResponse>\\n    <TotalCount>2</TotalCount>\\n    <RequestId>7B8A4E7D-6CFF-471D-84DF-195A7A241ECB</RequestId>\\n    <PageSize>1</PageSize>\\n    <PageNumber>2</PageNumber>\\n    <Accounts>\\n        <Status>CreateSuccess</Status>\\n        <Type>ResourceAccount</Type>\\n        <DisplayName>admin</DisplayName>\\n        <FolderId>fd-bVaRIG****</FolderId>\\n        <ResourceDirectoryId>rd-k4****</ResourceDirectoryId>\\n        <JoinTime>2015-01-23T12:33:18Z</JoinTime>\\n        <AccountId>184311716100****</AccountId>\\n        <JoinMethod>created</JoinMethod>\\n        <ModifyTime>2015-01-23T12:33:18Z</ModifyTime>\\n        <Tags>\\n            <Key>tag_key</Key>\\n            <Value>tag_value</Value>\\n        </Tags>\\n    </Accounts>\\n</ListAccountsForParentResponse>","errorExample":""}]',
            'title' => '查询资源夹下的成员列表',
            'summary' => '调用ListAccountsForParent查询资源夹下的成员列表。',
            'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetPayerForAccount' => [
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'AccountId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '账号ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12323344****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'PayerAccountName' => [
                                'description' => '结算账号名称。',
                                'type' => 'string',
                                'example' => 'Alice',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
                            ],
                            'PayerAccountId' => [
                                'description' => '结算账号ID。',
                                'type' => 'string',
                                'example' => '172841235500****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.ResourceDirectory',
                        'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
                    ],
                    [
                        'errorCode' => 'EntityNotExists.Account',
                        'errorMessage' => 'This resource directory account does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"PayerAccountName\\": \\"Alice\\",\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\",\\n  \\"PayerAccountId\\": \\"172841235500****\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<GetPayerForAccountResponse>\\r\\n\\t<RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\r\\n\\t<PayerAccountId>172841235500****</PayerAccountId>\\r\\n\\t<PayerAccountName>Alice</PayerAccountName>\\r\\n</GetPayerForAccountResponse>\\t\\r\\n","errorExample":""}]',
            'title' => '获取结算账号信息',
            'summary' => '调用GetPayerForAccount获取结算账号信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'InviteAccountToResourceDirectory' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'TargetEntity',
                    'in' => 'query',
                    'schema' => [
                        'description' => '被邀请账号ID或登录邮箱。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'someone@example.com',
                    ],
                ],
                [
                    'name' => 'TargetType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '被邀请账号类型。取值：'."\n"
                            ."\n"
                            .'- Account：账号ID。'."\n"
                            .'- Email：账号登录邮箱。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Email',
                    ],
                ],
                [
                    'name' => 'Note',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备注。'."\n"
                            ."\n"
                            .'最大长度为1024个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '欢迎您加入',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '标签。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'k1',
                                ],
                                'Value' => [
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'v1',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ParentFolderId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '父资源夹ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'r-b1****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
                            ],
                            'Handshake' => [
                                'description' => '邀请信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '邀请状态。取值：'."\n"
                                            ."\n"
                                            .'- Pending：等待确认。'."\n"
                                            .'- Accepted：已接受。'."\n"
                                            .'- Cancelled：已取消。'."\n"
                                            .'- Declined：已拒绝。'."\n"
                                            .'- Expired：超时。',
                                        'type' => 'string',
                                        'example' => 'Pending',
                                    ],
                                    'ExpireTime' => [
                                        'description' => '邀请的过期时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2018-08-24T09:55:41Z',
                                    ],
                                    'ResourceDirectoryId' => [
                                        'description' => '资源目录ID。',
                                        'type' => 'string',
                                        'example' => 'rd-abcdef****',
                                    ],
                                    'CreateTime' => [
                                        'description' => '邀请的创建时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2018-08-10T09:55:41Z',
                                    ],
                                    'Note' => [
                                        'description' => '备注。',
                                        'type' => 'string',
                                        'example' => '欢迎您加入',
                                    ],
                                    'TargetEntity' => [
                                        'description' => '被邀请账号ID或登录邮箱。',
                                        'type' => 'string',
                                        'example' => 'someone@example.com',
                                    ],
                                    'MasterAccountId' => [
                                        'description' => '资源目录管理账号ID。',
                                        'type' => 'string',
                                        'example' => '172841235500****',
                                    ],
                                    'MasterAccountName' => [
                                        'description' => '资源目录管理账号名称。',
                                        'type' => 'string',
                                        'example' => 'Alice',
                                    ],
                                    'ModifyTime' => [
                                        'description' => '邀请的修改时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2018-08-10T09:55:41Z',
                                    ],
                                    'TargetType' => [
                                        'description' => '被邀请账号类型。取值：'."\n"
                                            ."\n"
                                            .'- Account：账号ID。'."\n"
                                            .'- Email：账号登录邮箱。',
                                        'type' => 'string',
                                        'example' => 'Email',
                                    ],
                                    'HandshakeId' => [
                                        'description' => '邀请ID。',
                                        'type' => 'string',
                                        'example' => 'h-ycm4rp****',
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
                        'errorCode' => 'MissingParameter.TargetEntity',
                        'errorMessage' => 'You must specify TargetEntity.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.TargetEntity',
                        'errorMessage' => 'The TargetEntity is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.TargetType',
                        'errorMessage' => 'You must specify TargetType.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.TargetType',
                        'errorMessage' => 'The TargetType is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Note.Length',
                        'errorMessage' => 'The length of the invitation note exceeds the limit.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Note',
                        'errorMessage' => 'The Note is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.ParentFolderId',
                        'errorMessage' => 'The ParentFolderId is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.AccountId',
                        'errorMessage' => 'The AccountId is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.ResourceDirectory',
                        'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
                    ],
                    [
                        'errorCode' => 'EntityNotExists.Folder',
                        'errorMessage' => 'The resource directory folder does not exist.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'LimitExceeded.Account',
                        'errorMessage' => 'The maximum number of member accounts in a resource directory exceeds the limit.',
                    ],
                    [
                        'errorCode' => 'LimitExceeded.InvitationRate',
                        'errorMessage' => 'The number of invitations sent exceeds the limit.',
                    ],
                    [
                        'errorCode' => 'EntityAlreadyExists.Handshake',
                        'errorMessage' => 'Handshakes with the same target entity already exist.',
                    ],
                    [
                        'errorCode' => 'Invalid.AccountType',
                        'errorMessage' => 'The specified profile type of account is invalid.',
                    ],
                    [
                        'errorCode' => 'EntityAlreadyExists.ResourceDir.Account',
                        'errorMessage' => 'This resource directory account already exists.',
                    ],
                    [
                        'errorCode' => 'LimitExceeded.Invitation.InvalidTarget',
                        'errorMessage' => 'The maximum number of invalid targets that can be invited by a single account is exceeded.',
                    ],
                    [
                        'errorCode' => 'NotSupport.AccountInAnotherResourceDirectory',
                        'errorMessage' => 'The invited account already belongs to another resource directory. To continue, remove the account from the other resource directory.',
                    ],
                    [
                        'errorCode' => 'LegalEntityMismatch',
                        'errorMessage' => 'The account does not have the same legal entity as the management account.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\",\\n  \\"Handshake\\": {\\n    \\"Status\\": \\"Pending\\",\\n    \\"ExpireTime\\": \\"2018-08-24T09:55:41Z\\",\\n    \\"ResourceDirectoryId\\": \\"rd-abcdef****\\",\\n    \\"CreateTime\\": \\"2018-08-10T09:55:41Z\\",\\n    \\"Note\\": \\"欢迎您加入\\",\\n    \\"TargetEntity\\": \\"someone@example.com\\",\\n    \\"MasterAccountId\\": \\"172841235500****\\",\\n    \\"MasterAccountName\\": \\"Alice\\",\\n    \\"ModifyTime\\": \\"2018-08-10T09:55:41Z\\",\\n    \\"TargetType\\": \\"Email\\",\\n    \\"HandshakeId\\": \\"h-ycm4rp****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<InviteAccountToResourceDirectoryResponse>\\n    <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\n    <Handshake>\\n        <HandshakeId>h-ycm4rp****</HandshakeId>\\n        <ResourceDirectoryId>rd-abcdef****</ResourceDirectoryId>\\n        <MasterAccountId>172841235500****</MasterAccountId>\\n        <MasterAccountName>Alice</MasterAccountName>\\n        <TargetEntity>someone@example.com</TargetEntity>\\n        <TargetType>Email</TargetType>\\n        <Note>欢迎您加入</Note>\\n        <Status>Pending</Status>\\n        <CreateTime>2018-08-10T09:55:41Z</CreateTime>\\n        <ModifyTime>2018-08-10T09:55:41Z</ModifyTime>\\n        <ExpireTime>2018-08-24T09:55:41Z</ExpireTime>\\n    </Handshake>\\n</InviteAccountToResourceDirectoryResponse>","errorExample":""}]',
            'title' => '邀请外部账号加入资源目录',
            'summary' => '调用InviteAccountToResourceDirectory邀请外部账号加入资源目录。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'AcceptHandshake' => [
            'summary' => '被邀请的阿里云账号调用AcceptHandshake接受邀请。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'HandshakeId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '邀请ID。'."\n"
                            ."\n"
                            .'您可以调用[ListHandshakesForAccount](~~ListHandshakesForAccount~~)获取邀请ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'h-Ih8IuPfvV0t0****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '5828C836-3286-49A6-9006-15231BB19342',
                            ],
                            'Handshake' => [
                                'description' => '邀请信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '邀请状态。取值：'."\n"
                                            ."\n"
                                            .'- Pending：等待确认。'."\n"
                                            .'- Accepted：已接受。'."\n"
                                            .'- Cancelled：已取消。'."\n"
                                            .'- Declined：已拒绝。'."\n"
                                            .'- Expired：超时。',
                                        'type' => 'string',
                                        'example' => 'Accepted',
                                    ],
                                    'ExpireTime' => [
                                        'description' => '邀请的过期时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2021-01-20T02:15:40Z',
                                    ],
                                    'ResourceDirectoryId' => [
                                        'description' => '资源目录ID。',
                                        'type' => 'string',
                                        'example' => 'rd-3G****',
                                    ],
                                    'CreateTime' => [
                                        'description' => '邀请的创建时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2021-01-06T02:15:40Z',
                                    ],
                                    'Note' => [
                                        'description' => '备注。',
                                        'type' => 'string',
                                        'example' => '欢迎您加入',
                                    ],
                                    'TargetEntity' => [
                                        'description' => '被邀请的阿里云账号ID或登录邮箱。',
                                        'type' => 'string',
                                        'example' => '177242285274****',
                                    ],
                                    'MasterAccountId' => [
                                        'description' => '资源目录的管理账号ID。',
                                        'type' => 'string',
                                        'example' => '151266687691****',
                                    ],
                                    'MasterAccountName' => [
                                        'description' => '资源目录的管理账号名称。',
                                        'type' => 'string',
                                        'example' => 'CompanyA',
                                    ],
                                    'ModifyTime' => [
                                        'description' => '邀请的修改时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2021-01-06T02:16:40Z',
                                    ],
                                    'TargetType' => [
                                        'description' => '被邀请的阿里云账号类型。取值：'."\n"
                                            ."\n"
                                            .'- Account：阿里云账号ID。'."\n"
                                            .'- Email：阿里云账号登录邮箱。',
                                        'type' => 'string',
                                        'example' => 'Account',
                                    ],
                                    'HandshakeId' => [
                                        'description' => '邀请ID。',
                                        'type' => 'string',
                                        'example' => 'h-Ih8IuPfvV0t0****',
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
                        'errorCode' => 'MissingParameter.HandshakeId',
                        'errorMessage' => 'You must specify HandshakeId.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.HandshakeId',
                        'errorMessage' => 'The HandshakeId is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.Handshake',
                        'errorMessage' => 'The specified handshake does not exist.',
                    ],
                    [
                        'errorCode' => 'SpecifiedResourceDirectoryNotExists',
                        'errorMessage' => 'The specified resource directory does not exist. You must specify a valid resource directory.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'HandshakeStatusMismatch',
                        'errorMessage' => 'The invitation is invalid.',
                    ],
                    [
                        'errorCode' => 'NotSupport.AccountInAnotherResourceDirectory',
                        'errorMessage' => 'Your account is a management account for another resource directory or a member of another resource directory.',
                    ],
                    [
                        'errorCode' => 'Invalid.AccountType',
                        'errorMessage' => 'The specified profile type of account is invalid.',
                    ],
                    [
                        'errorCode' => 'NotSupport.Account.RealNameType',
                        'errorMessage' => 'Your account is not a real-name of enterprise type, so you cannot accept the invitation.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5828C836-3286-49A6-9006-15231BB19342\\",\\n  \\"Handshake\\": {\\n    \\"Status\\": \\"Accepted\\",\\n    \\"ExpireTime\\": \\"2021-01-20T02:15:40Z\\",\\n    \\"ResourceDirectoryId\\": \\"rd-3G****\\",\\n    \\"CreateTime\\": \\"2021-01-06T02:15:40Z\\",\\n    \\"Note\\": \\"欢迎您加入\\",\\n    \\"TargetEntity\\": \\"177242285274****\\",\\n    \\"MasterAccountId\\": \\"151266687691****\\",\\n    \\"MasterAccountName\\": \\"CompanyA\\",\\n    \\"ModifyTime\\": \\"2021-01-06T02:16:40Z\\",\\n    \\"TargetType\\": \\"Account\\",\\n    \\"HandshakeId\\": \\"h-Ih8IuPfvV0t0****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<AcceptHandshakeResponse>\\n    <RequestId>5828C836-3286-49A6-9006-15231BB19342</RequestId>\\n    <Handshake>\\n        <Status>Accepted</Status>\\n        <ModifyTime>2021-01-06T02:16:40Z</ModifyTime>\\n        <ResourceDirectoryId>rd-3G****</ResourceDirectoryId>\\n        <HandshakeId>h-Ih8IuPfvV0t0****</HandshakeId>\\n        <Note>欢迎您加入</Note>\\n        <CreateTime>2021-01-06T02:15:40Z</CreateTime>\\n        <TargetType>Account</TargetType>\\n        <MasterAccountId>151266687691****</MasterAccountId>\\n        <MasterAccountName>CompanyA</MasterAccountName>\\n        <ExpireTime>2021-01-20T02:15:40Z</ExpireTime>\\n        <TargetEntity>177242285274****</TargetEntity>\\n    </Handshake>\\n</AcceptHandshakeResponse>","errorExample":""}]',
            'title' => '接受邀请',
            'description' => '被邀请的阿里云账号成功加入资源目录后，会成为资源目录的成员。资源目录默认使用被邀请的阿里云账号名称作为该成员的成员名称和账号名称。',
            'responseParamsDescription' => ' ',
        ],
        'GetHandshake' => [
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'HandshakeId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '邀请ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'h-ycm4rp****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
                            ],
                            'Handshake' => [
                                'description' => '邀请信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '邀请状态。'."\n"
                                            ."\n"
                                            .'- Pending：等待确认。'."\n"
                                            .'- Accepted：已接受。'."\n"
                                            .'- Cancelled：已取消。'."\n"
                                            .'- Declined：已拒绝。'."\n"
                                            .'- Expired：超时。',
                                        'type' => 'string',
                                        'example' => 'Pending',
                                    ],
                                    'ExpireTime' => [
                                        'description' => '邀请的过期时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2018-08-24T09:55:41Z',
                                    ],
                                    'CreateTime' => [
                                        'description' => '邀请的创建时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2018-08-10T09:55:41Z',
                                    ],
                                    'TargetEntity' => [
                                        'description' => '被邀请账号ID或登录邮箱。',
                                        'type' => 'string',
                                        'example' => 'someone@example.com',
                                    ],
                                    'MasterAccountId' => [
                                        'description' => '资源目录管理账号ID。',
                                        'type' => 'string',
                                        'example' => '172841235500****',
                                    ],
                                    'HandshakeId' => [
                                        'description' => '邀请ID。',
                                        'type' => 'string',
                                        'example' => 'h-ycm4rp****',
                                    ],
                                    'MasterAccountRealName' => [
                                        'description' => '资源目录管理账号实名认证信息。'."\n"
                                            ."\n"
                                            .'> 被邀请方调用此接口时，才能查看该参数。',
                                        'type' => 'string',
                                        'example' => 'company',
                                    ],
                                    'ResourceDirectoryId' => [
                                        'description' => '资源目录ID。',
                                        'type' => 'string',
                                        'example' => 'rd-abcdef****',
                                    ],
                                    'InvitedAccountRealName' => [
                                        'description' => '被邀请方实名认证信息。'."\n"
                                            ."\n"
                                            .'> 被邀请方调用此接口时，才能查看该参数。',
                                        'type' => 'string',
                                        'example' => 'Alice',
                                    ],
                                    'Note' => [
                                        'description' => '备注。',
                                        'type' => 'string',
                                        'example' => '欢迎您加入',
                                    ],
                                    'MasterAccountName' => [
                                        'description' => '资源目录管理账号名称。',
                                        'type' => 'string',
                                        'example' => 'company@example.com',
                                    ],
                                    'TargetType' => [
                                        'description' => '被邀请账号类型。'."\n"
                                            ."\n"
                                            .'- Account：账号ID。'."\n"
                                            .'- Email：账号登录邮箱。',
                                        'type' => 'string',
                                        'example' => 'Email',
                                    ],
                                    'ModifyTime' => [
                                        'description' => '邀请的修改时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2018-08-10T09:55:41Z',
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
                        'errorCode' => 'MissingParameter.HandshakeId',
                        'errorMessage' => 'You must specify HandshakeId.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.HandshakeId',
                        'errorMessage' => 'The HandshakeId is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.Handshake',
                        'errorMessage' => 'The specified handshake does not exist.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'HandshakeStatusMismatch',
                        'errorMessage' => 'The invitation is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingAccountRealName',
                        'errorMessage' => 'The name of the invited account is not specified.',
                    ],
                    [
                        'errorCode' => 'NoRealNameAuthentication',
                        'errorMessage' => 'The account invited has not passed real-name authentication.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\",\\n  \\"Handshake\\": {\\n    \\"Status\\": \\"Pending\\",\\n    \\"ExpireTime\\": \\"2018-08-24T09:55:41Z\\",\\n    \\"CreateTime\\": \\"2018-08-10T09:55:41Z\\",\\n    \\"TargetEntity\\": \\"someone@example.com\\",\\n    \\"MasterAccountId\\": \\"172841235500****\\",\\n    \\"HandshakeId\\": \\"h-ycm4rp****\\",\\n    \\"MasterAccountRealName\\": \\"company\\",\\n    \\"ResourceDirectoryId\\": \\"rd-abcdef****\\",\\n    \\"InvitedAccountRealName\\": \\"Alice\\",\\n    \\"Note\\": \\"欢迎您加入\\",\\n    \\"MasterAccountName\\": \\"company@example.com\\",\\n    \\"TargetType\\": \\"Email\\",\\n    \\"ModifyTime\\": \\"2018-08-10T09:55:41Z\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetHandshakeResponse>\\n    <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\n    <Handshake>\\n        <HandshakeId>h-ycm4rp****</HandshakeId>\\n        <ResourceDirectoryId>rd-abcdef****</ResourceDirectoryId>\\n        <MasterAccountId>172841235500****</MasterAccountId>\\n        <MasterAccountName>company@example.com</MasterAccountName>\\n        <MasterAccountRealName>company</MasterAccountRealName>\\n        <InvitedAccountRealName>Alice</InvitedAccountRealName>\\n        <TargetEntity>someone@example.com</TargetEntity>\\n        <TargetType>Email</TargetType>\\n        <Note>欢迎您加入</Note>\\n        <Status>Pending</Status>\\n        <CreateTime>2018-08-10T09:55:41Z</CreateTime>\\n        <ModifyTime>2018-08-10T09:55:41Z</ModifyTime>\\n        <ExpireTime>2018-08-24T09:55:41Z</ExpireTime>\\n    </Handshake>\\n</GetHandshakeResponse>","errorExample":""}]',
            'title' => '获取邀请信息',
            'summary' => '调用GetHandshake获取邀请信息。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeclineHandshake' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'HandshakeId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '邀请ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'h-ycm4rp****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
                            ],
                            'Handshake' => [
                                'description' => '邀请信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '邀请状态。'."\n"
                                            ."\n"
                                            .'- Pending：等待确认。'."\n"
                                            .'- Accepted：已接受。'."\n"
                                            .'- Cancelled：已取消。'."\n"
                                            .'- Declined：已拒绝。'."\n"
                                            .'- Expired：超时。',
                                        'type' => 'string',
                                        'example' => 'Declined',
                                    ],
                                    'ExpireTime' => [
                                        'description' => '邀请的过期时间。',
                                        'type' => 'string',
                                        'example' => '2018-08-10T09:55:41Z',
                                    ],
                                    'ResourceDirectoryId' => [
                                        'description' => '资源目录ID。',
                                        'type' => 'string',
                                        'example' => 'rd-abcdef****',
                                    ],
                                    'CreateTime' => [
                                        'description' => '邀请的创建时间。',
                                        'type' => 'string',
                                        'example' => '2018-08-10T09:55:41Z',
                                    ],
                                    'Note' => [
                                        'description' => '备注。',
                                        'type' => 'string',
                                        'example' => '欢迎您加入',
                                    ],
                                    'TargetEntity' => [
                                        'description' => '被邀请账号ID或登录邮箱。',
                                        'type' => 'string',
                                        'example' => 'someone@example.com',
                                    ],
                                    'MasterAccountId' => [
                                        'description' => '资源目录主账号ID。',
                                        'type' => 'string',
                                        'example' => '172841235500****',
                                    ],
                                    'MasterAccountName' => [
                                        'description' => '资源目录主账号名称。',
                                        'type' => 'string',
                                        'example' => 'Alice',
                                    ],
                                    'ModifyTime' => [
                                        'description' => '邀请的修改时间。',
                                        'type' => 'string',
                                        'example' => '2018-08-10T09:55:41Z',
                                    ],
                                    'TargetType' => [
                                        'description' => '被邀请账号类型。'."\n"
                                            ."\n"
                                            .'- Account：账号ID。'."\n"
                                            .'- Email：账号登录邮箱。',
                                        'type' => 'string',
                                        'example' => 'Email',
                                    ],
                                    'HandshakeId' => [
                                        'description' => '邀请ID。',
                                        'type' => 'string',
                                        'example' => 'h-ycm4rp****',
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
                        'errorCode' => 'MissingParameter.HandshakeId',
                        'errorMessage' => 'You must specify HandshakeId.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.HandshakeId',
                        'errorMessage' => 'The HandshakeId is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.Handshake',
                        'errorMessage' => 'The specified handshake does not exist.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'HandshakeStatusMismatch',
                        'errorMessage' => 'The invitation is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\",\\n  \\"Handshake\\": {\\n    \\"Status\\": \\"Declined\\",\\n    \\"ExpireTime\\": \\"2018-08-10T09:55:41Z\\",\\n    \\"ResourceDirectoryId\\": \\"rd-abcdef****\\",\\n    \\"CreateTime\\": \\"2018-08-10T09:55:41Z\\",\\n    \\"Note\\": \\"欢迎您加入\\",\\n    \\"TargetEntity\\": \\"someone@example.com\\",\\n    \\"MasterAccountId\\": \\"172841235500****\\",\\n    \\"MasterAccountName\\": \\"Alice\\",\\n    \\"ModifyTime\\": \\"2018-08-10T09:55:41Z\\",\\n    \\"TargetType\\": \\"Email\\",\\n    \\"HandshakeId\\": \\"h-ycm4rp****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DeclineHandshakeResponse>\\r\\n\\t<RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\r\\n\\t<Handshake>\\r\\n\\t\\t<HandshakeId>h-ycm4rp****</HandshakeId>\\r\\n\\t\\t<ResourceDirectoryId>rd-abcdef****</ResourceDirectoryId>\\r\\n\\t\\t<MasterAccountId>172841235500****</MasterAccountId>\\r\\n\\t\\t<MasterAccountName>Alice</MasterAccountName>\\r\\n\\t\\t<TargetEntity>someone@example.com</TargetEntity>\\r\\n\\t\\t<TargetType>Email</TargetType>\\r\\n\\t\\t<Note>欢迎您加入</Note>\\r\\n\\t\\t<Status>Declined</Status>\\r\\n\\t\\t<CreateTime>2018-08-10T09:55:41Z</CreateTime>\\r\\n\\t\\t<ModifyTime>2018-08-10T09:55:41Z</ModifyTime>\\r\\n\\t\\t<ExpireTime>2018-08-17T09:55:41Z7</ExpireTime>\\r\\n\\t</Handshake>\\r\\n</DeclineHandshakeResponse>\\t\\r\\n","errorExample":""}]',
            'title' => '拒绝邀请',
            'summary' => '调用DeclineHandshake拒绝邀请。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CancelHandshake' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'HandshakeId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '邀请ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'h-ycm4rp****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
                            ],
                            'Handshake' => [
                                'description' => '邀请信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '邀请状态。'."\n"
                                            ."\n"
                                            .'- Pending：等待确认。'."\n"
                                            .'- Accepted：已接受。'."\n"
                                            .'- Cancelled：已取消。'."\n"
                                            .'- Declined：已拒绝。'."\n"
                                            .'- Expired：超时。',
                                        'type' => 'string',
                                        'example' => 'Cancelled',
                                    ],
                                    'ExpireTime' => [
                                        'description' => '邀请的过期时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2018-08-24T09:55:41Z',
                                    ],
                                    'ResourceDirectoryId' => [
                                        'description' => '资源目录ID。',
                                        'type' => 'string',
                                        'example' => 'h-ycm4rp****',
                                    ],
                                    'CreateTime' => [
                                        'description' => '邀请的创建时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2018-08-10T09:55:41Z',
                                    ],
                                    'Note' => [
                                        'description' => '备注。',
                                        'type' => 'string',
                                        'example' => '欢迎您加入',
                                    ],
                                    'TargetEntity' => [
                                        'description' => '被邀请账号ID或登录邮箱。',
                                        'type' => 'string',
                                        'example' => 'someone@example.com',
                                    ],
                                    'MasterAccountId' => [
                                        'description' => '资源目录管理账号ID。',
                                        'type' => 'string',
                                        'example' => '172841235500****',
                                    ],
                                    'MasterAccountName' => [
                                        'description' => '资源目录管理账号名称。',
                                        'type' => 'string',
                                        'example' => 'Alice',
                                    ],
                                    'ModifyTime' => [
                                        'description' => '邀请的修改时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2018-08-10T09:55:41Z',
                                    ],
                                    'TargetType' => [
                                        'description' => '被邀请账号类型。'."\n"
                                            ."\n"
                                            .'- Account：账号ID。'."\n"
                                            .'- Email：账号登录邮箱。',
                                        'type' => 'string',
                                        'example' => 'Email',
                                    ],
                                    'HandshakeId' => [
                                        'description' => '邀请ID。',
                                        'type' => 'string',
                                        'example' => 'h-ycm4rp****',
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
                        'errorCode' => 'MissingParameter.HandshakeId',
                        'errorMessage' => 'You must specify HandshakeId.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.HandshakeId',
                        'errorMessage' => 'The HandshakeId is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.Handshake',
                        'errorMessage' => 'The specified handshake does not exist.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'HandshakeStatusMismatch',
                        'errorMessage' => 'The invitation is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\",\\n  \\"Handshake\\": {\\n    \\"Status\\": \\"Cancelled\\",\\n    \\"ExpireTime\\": \\"2018-08-24T09:55:41Z\\",\\n    \\"ResourceDirectoryId\\": \\"h-ycm4rp****\\",\\n    \\"CreateTime\\": \\"2018-08-10T09:55:41Z\\",\\n    \\"Note\\": \\"欢迎您加入\\",\\n    \\"TargetEntity\\": \\"someone@example.com\\",\\n    \\"MasterAccountId\\": \\"172841235500****\\",\\n    \\"MasterAccountName\\": \\"Alice\\",\\n    \\"ModifyTime\\": \\"2018-08-10T09:55:41Z\\",\\n    \\"TargetType\\": \\"Email\\",\\n    \\"HandshakeId\\": \\"h-ycm4rp****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CancelHandshakeResponse>\\n    <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\n    <Handshake>\\n        <HandshakeId>h-ycm4rp****</HandshakeId>\\n        <ResourceDirectoryId>rd-abcdef****</ResourceDirectoryId>\\n        <MasterAccountId>172841235500****</MasterAccountId>\\n        <MasterAccountName>Alice</MasterAccountName>\\n        <TargetEntity>someone@example.com</TargetEntity>\\n        <TargetType>Email</TargetType>\\n        <Note>欢迎您加入</Note>\\n        <Status>Cancelled</Status>\\n        <CreateTime>2018-08-10T09:55:41Z</CreateTime>\\n        <ModifyTime>2018-08-10T09:55:41Z</ModifyTime>\\n        <ExpireTime>2018-08-24T09:55:41Z</ExpireTime>\\n    </Handshake>\\n</CancelHandshakeResponse>","errorExample":""}]',
            'title' => '取消邀请',
            'summary' => '调用CancelHandshake取消邀请。',
            'responseParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
            'extraInfo' => ' ',
        ],
        'ListHandshakesForAccount' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码。'."\n"
                            ."\n"
                            .'起始值：1。默认值：1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页时每页显示的数据条数。'."\n"
                            ."\n"
                            .'取值范围：1~100。默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '邀请记录总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
                            ],
                            'PageSize' => [
                                'description' => '分页时每页显示的数据条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'PageNumber' => [
                                'description' => '页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Handshakes' => [
                                'type' => 'object',
                                'properties' => [
                                    'Handshake' => [
                                        'description' => '邀请记录。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '邀请记录',
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '邀请状态。'."\n"
                                                        ."\n"
                                                        .'- Pending：等待确认。'."\n"
                                                        .'- Accepted：已接受。'."\n"
                                                        .'- Cancelled：已取消。'."\n"
                                                        .'- Declined：已拒绝。'."\n"
                                                        .'- Expired：超时。',
                                                    'type' => 'string',
                                                    'example' => 'Pending',
                                                ],
                                                'ExpireTime' => [
                                                    'description' => '邀请的过期时间（UTC时间）。',
                                                    'type' => 'string',
                                                    'example' => '2018-08-24T09:55:41Z',
                                                ],
                                                'ResourceDirectoryId' => [
                                                    'description' => '资源目录ID。',
                                                    'type' => 'string',
                                                    'example' => 'rd-abcdef****',
                                                ],
                                                'CreateTime' => [
                                                    'description' => '邀请的创建时间（UTC时间）。',
                                                    'type' => 'string',
                                                    'example' => '2018-08-10T09:55:41Z',
                                                ],
                                                'Note' => [
                                                    'description' => '备注。',
                                                    'type' => 'string',
                                                    'example' => '欢迎您加入',
                                                ],
                                                'TargetEntity' => [
                                                    'description' => '被邀请的阿里云账号ID或登录邮箱。',
                                                    'type' => 'string',
                                                    'example' => 'someone@example.com',
                                                ],
                                                'MasterAccountId' => [
                                                    'description' => '资源目录管理账号ID。',
                                                    'type' => 'string',
                                                    'example' => '172841235500****',
                                                ],
                                                'MasterAccountName' => [
                                                    'description' => '资源目录管理账号名称。',
                                                    'type' => 'string',
                                                    'example' => 'CompanyA',
                                                ],
                                                'ModifyTime' => [
                                                    'description' => '邀请的修改时间（UTC时间）。',
                                                    'type' => 'string',
                                                    'example' => '2018-08-10T09:55:41Z',
                                                ],
                                                'TargetType' => [
                                                    'description' => '被邀请的阿里云账号类型。'."\n"
                                                        ."\n"
                                                        .'- Account：账号ID。'."\n"
                                                        .'- Email：账号登录邮箱。',
                                                    'type' => 'string',
                                                    'example' => 'Email',
                                                ],
                                                'HandshakeId' => [
                                                    'description' => '邀请ID。',
                                                    'type' => 'string',
                                                    'example' => 'h-4N57QZzCTtES****',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 2,\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"Handshakes\\": {\\n    \\"Handshake\\": [\\n      {\\n        \\"Status\\": \\"Pending\\",\\n        \\"ExpireTime\\": \\"2018-08-24T09:55:41Z\\",\\n        \\"ResourceDirectoryId\\": \\"rd-abcdef****\\",\\n        \\"CreateTime\\": \\"2018-08-10T09:55:41Z\\",\\n        \\"Note\\": \\"欢迎您加入\\",\\n        \\"TargetEntity\\": \\"someone@example.com\\",\\n        \\"MasterAccountId\\": \\"172841235500****\\",\\n        \\"MasterAccountName\\": \\"CompanyA\\",\\n        \\"ModifyTime\\": \\"2018-08-10T09:55:41Z\\",\\n        \\"TargetType\\": \\"Email\\",\\n        \\"HandshakeId\\": \\"h-4N57QZzCTtES****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListHandshakesForAccountResponse>\\n    <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>10</PageSize>\\n    <TotalCount>2</TotalCount>\\n    <Handshakes>\\n        <Handshake>\\n            <HandshakeId>h-4N57QZzCTtES****</HandshakeId>\\n            <ResourceDirectoryId>rd-abcdef****</ResourceDirectoryId>\\n            <MasterAccountId>172841235500****</MasterAccountId>\\n            <MasterAccountName>CompanyA</MasterAccountName>\\n            <TargetEntity>someone@example.com</TargetEntity>\\n            <TargetType>Email</TargetType>\\n            <Note>欢迎您加入</Note>\\n            <Status>Pending</Status>\\n            <CreateTime>2018-08-10T09:55:41Z</CreateTime>\\n            <ModifyTime>2018-08-10T09:55:41Z</ModifyTime>\\n            <ExpireTime>2018-08-24T09:55:41Z</ExpireTime>\\n        </Handshake>\\n        <Handshake>\\n            <HandshakeId>h-BeJZW63fHT4l****</HandshakeId>\\n            <ResourceDirectoryId>rd-abcdef****</ResourceDirectoryId>\\n            <MasterAccountId>172841235500****</MasterAccountId>\\n            <MasterAccountName>CompanyA</MasterAccountName>\\n            <TargetEntity>172841235500****</TargetEntity>\\n            <TargetType>Account</TargetType>\\n            <Note>欢迎您加入</Note>\\n            <Status>Pending</Status>\\n            <CreateTime>2018-08-10T09:55:41Z</CreateTime>\\n            <ModifyTime>2018-08-10T09:55:41Z</ModifyTime>\\n            <ExpireTime>2018-08-24T09:55:41Z</ExpireTime>\\n        </Handshake>\\n    </Handshakes>\\n</ListHandshakesForAccountResponse>","errorExample":""}]',
            'title' => '查询当前账号的邀请记录',
            'summary' => '调用ListHandshakesForAccount查询当前账号的邀请记录。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListHandshakesForResourceDirectory' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码。'."\n"
                            ."\n"
                            .'起始值：1。默认值：1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页时每页显示的数据行数。'."\n"
                            ."\n"
                            .'取值范围：1~100。默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '数据总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
                            ],
                            'PageSize' => [
                                'description' => '分页时每页显示的数据行数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'PageNumber' => [
                                'description' => '页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Handshakes' => [
                                'type' => 'object',
                                'properties' => [
                                    'Handshake' => [
                                        'description' => '邀请信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '邀请信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '邀请状态。'."\n"
                                                        ."\n"
                                                        .'- Pending：等待确认。'."\n"
                                                        .'- Accepted：已接受。'."\n"
                                                        .'- Cancelled：已取消。'."\n"
                                                        .'- Declined：已拒绝。'."\n"
                                                        .'- Expired：超时。',
                                                    'type' => 'string',
                                                    'example' => 'Pending',
                                                ],
                                                'ExpireTime' => [
                                                    'description' => '邀请的过期时间（UTC时间）。',
                                                    'type' => 'string',
                                                    'example' => '2018-08-24T09:55:41Z',
                                                ],
                                                'ResourceDirectoryId' => [
                                                    'description' => '资源目录ID。',
                                                    'type' => 'string',
                                                    'example' => 'rd-abcdef****',
                                                ],
                                                'CreateTime' => [
                                                    'description' => '邀请的创建时间（UTC时间）。',
                                                    'type' => 'string',
                                                    'example' => '2018-08-10T09:55:41Z',
                                                ],
                                                'Note' => [
                                                    'description' => '备注。',
                                                    'type' => 'string',
                                                    'example' => '欢迎您加入',
                                                ],
                                                'TargetEntity' => [
                                                    'description' => '被邀请账号ID或登录邮箱。',
                                                    'type' => 'string',
                                                    'example' => 'someone@example.com',
                                                ],
                                                'MasterAccountId' => [
                                                    'description' => '资源目录管理账号ID。',
                                                    'type' => 'string',
                                                    'example' => '172841235500****',
                                                ],
                                                'MasterAccountName' => [
                                                    'description' => '资源目录管理账号名称。',
                                                    'type' => 'string',
                                                    'example' => 'Alice',
                                                ],
                                                'ModifyTime' => [
                                                    'description' => '邀请的修改时间（UTC时间）。',
                                                    'type' => 'string',
                                                    'example' => '2018-08-10T09:55:41Z',
                                                ],
                                                'TargetType' => [
                                                    'description' => '被邀请账号类型。'."\n"
                                                        ."\n"
                                                        .'- Account：账号ID。'."\n"
                                                        .'- Email：账号登录邮箱。',
                                                    'type' => 'string',
                                                    'example' => 'Email',
                                                ],
                                                'HandshakeId' => [
                                                    'description' => '邀请ID。',
                                                    'type' => 'string',
                                                    'example' => 'h-ycm4rp****',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.ResourceDirectory',
                        'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 2,\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"Handshakes\\": {\\n    \\"Handshake\\": [\\n      {\\n        \\"Status\\": \\"Pending\\",\\n        \\"ExpireTime\\": \\"2018-08-24T09:55:41Z\\",\\n        \\"ResourceDirectoryId\\": \\"rd-abcdef****\\",\\n        \\"CreateTime\\": \\"2018-08-10T09:55:41Z\\",\\n        \\"Note\\": \\"欢迎您加入\\",\\n        \\"TargetEntity\\": \\"someone@example.com\\",\\n        \\"MasterAccountId\\": \\"172841235500****\\",\\n        \\"MasterAccountName\\": \\"Alice\\",\\n        \\"ModifyTime\\": \\"2018-08-10T09:55:41Z\\",\\n        \\"TargetType\\": \\"Email\\",\\n        \\"HandshakeId\\": \\"h-ycm4rp****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListHandshakesForResourceDirectoryResponse>\\n    <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>10</PageSize>\\n    <TotalCount>2</TotalCount>\\n    <Handshakes>\\n        <Handshake>\\n            <HandshakeId>h-ycm4rp****</HandshakeId>\\n            <ResourceDirectoryId>rd-abcdef****</ResourceDirectoryId>\\n            <MasterAccountId>172841235500****</MasterAccountId>\\n            <MasterAccountName>Alice</MasterAccountName>\\n            <InviteEntity>someone@example.com</InviteEntity>\\n            <InviteType>Email</InviteType>\\n            <Note>欢迎您加入</Note>\\n            <Status>Pending</Status>\\n            <CreateTime>2018-08-10T09:55:41Z</CreateTime>\\n            <ModifyTime>2018-08-10T09:55:41Z</ModifyTime>\\n            <ExpireTime>2018-08-24T09:55:41Z</ExpireTime>\\n        </Handshake>\\n        <Handshake>\\n            <HandshakeId>h-ycm4rp****</HandshakeId>\\n            <ResourceDirectoryId>rd-abcdef****</ResourceDirectoryId>\\n            <MasterAccountId>172841235500****</MasterAccountId>\\n            <MasterAccountName>Alice</MasterAccountName>\\n            <TargetEntity>172841235500****</TargetEntity>\\n            <TargetType>Account</TargetType>\\n            <Note>欢迎您加入</Note>\\n            <Status>Pending</Status>\\n            <CreateTime>2018-08-10T09:55:41Z</CreateTime>\\n            <ModifyTime>2018-08-10T09:55:41Z</ModifyTime>\\n            <ExpireTime>2018-08-24T09:55:41Z</ExpireTime>\\n        </Handshake>\\n    </Handshakes>\\n</ListHandshakesForResourceDirectoryResponse>","errorExample":""}]',
            'title' => '查看资源目录下的所有邀请列表',
            'summary' => '调用ListHandshakesForResourceDirectory查看资源目录下的所有邀请列表。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'SendVerificationCodeForBindSecureMobilePhone' => [
            'summary' => '为资源账号类型的成员设置安全手机号码时，调用SendVerificationCodeForBindSecureMobilePhone向安全手机发送验证码。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'SecureMobilePhone',
                    'in' => 'query',
                    'schema' => [
                        'description' => '安全手机号码。'."\n"
                            ."\n"
                            .'格式：<国家码>-<手机号码>。'."\n"
                            ."\n"
                            .'<props="china">'."\n"
                            .'> 仅支持填写`86-<手机号码>`的中国内地手机号码。</props>'."\n"
                            ."\n\n"
                            .'<props="intl">'."\n"
                            .'> 不支持填写`86-<手机号码>`的中国内地手机号码。</props>'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'xx-13900001234',
                    ],
                ],
                [
                    'name' => 'AccountId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '成员的账号ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '138660628348****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'DCD43660-75DD-5D15-B342-1B83FCA5B913',
                            ],
                            'ExpirationDate' => [
                                'description' => '验证码过期时间。',
                                'type' => 'string',
                                'example' => '2021-12-17T07:38:41.747Z',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                409 => [
                    [
                        'errorCode' => 'NotSupport.AccountInAnotherResourceDirectory',
                        'errorMessage' => 'The specified account is an Alibaba Cloud account or already exists in another resource directory.',
                    ],
                    [
                        'errorCode' => 'EntityAlreadyExists.ResourceDirectory',
                        'errorMessage' => 'The resource directory for the account is already enabled. We recommend that you do not enable the resource directory again.',
                    ],
                    [
                        'errorCode' => 'SendValidateCodeExceedsLimitForAccount',
                        'errorMessage' => 'For the same account, the number of verification codes sent exceeds the limit.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.MobileCountryCode',
                        'errorMessage' => 'The current site does not support the country code.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DCD43660-75DD-5D15-B342-1B83FCA5B913\\",\\n  \\"ExpirationDate\\": \\"2021-12-17T07:38:41.747Z\\"\\n}","errorExample":""},{"type":"xml","example":"<SendVerificationCodeForBindSecureMobilePhoneResponse>\\n    <RequestId>DCD43660-75DD-5D15-B342-1B83FCA5B913</RequestId>\\n    <ExpirationDate>2021-12-17T07:38:41.747Z</ExpirationDate>\\n</SendVerificationCodeForBindSecureMobilePhoneResponse>","errorExample":""}]',
            'title' => '向安全手机发送验证码',
            'description' => '为确保系统可以记录到管理操作的具体操作者，请使用管理账号下具有资源目录管理权限（AliyunResourceDirectoryFullAccess）的RAM用户或RAM角色调用本API。',
        ],
        'BindSecureMobilePhone' => [
            'summary' => '调用BindSecureMobilePhone为资源账号类型的成员设置安全手机号码。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'VerificationCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '验证码。'."\n"
                            ."\n"
                            .'您可以调用[SendVerificationCodeForBindSecureMobilePhone](~~SendVerificationCodeForBindSecureMobilePhone~~)获取验证码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '123456',
                    ],
                ],
                [
                    'name' => 'SecureMobilePhone',
                    'in' => 'query',
                    'schema' => [
                        'description' => '安全手机号码。'."\n"
                            ."\n"
                            .'该手机号码必须与[SendVerificationCodeForBindSecureMobilePhone](~~SendVerificationCodeForBindSecureMobilePhone~~)中获取验证码时设置的手机号码一致。'."\n"
                            ."\n"
                            .'格式：<国家码>-<手机号码>。'."\n"
                            ."\n"
                            .'<props="china">'."\n"
                            .'> 仅支持填写`86-<手机号码>`的中国内地手机号码。</props>'."\n"
                            ."\n\n"
                            .'<props="intl">'."\n"
                            .'> 不支持填写`86-<手机号码>`的中国内地手机号码。</props>',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'xx-13900001234',
                    ],
                ],
                [
                    'name' => 'AccountId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '成员ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '138660628348****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0217AFEB-5318-56D4-B167-1933D83EDF3F',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'NotSupport.Site.Action',
                        'errorMessage' => 'Site does not allow current action.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'NotSupport.AccountInAnotherResourceDirectory',
                        'errorMessage' => 'The specified account is an Alibaba Cloud account or already exists in another resource directory.',
                    ],
                    [
                        'errorCode' => 'Invalid.EnterpriseName',
                        'errorMessage' => 'You must specify the enterprise name.',
                    ],
                    [
                        'errorCode' => 'EnterpriseRealNameVerificationError',
                        'errorMessage' => 'The specified account does not pass enterprise real-name verification. We recommend you first complete enterprise real-name verification for the account.',
                    ],
                    [
                        'errorCode' => 'EntityAlreadyExists.ResourceDirectory',
                        'errorMessage' => 'The resource directory for the account is already enabled. We recommend that you do not enable the resource directory again.',
                    ],
                    [
                        'errorCode' => 'Invalid.VerificationCode',
                        'errorMessage' => 'The verification code is invalid.',
                    ],
                    [
                        'errorCode' => 'AccountTypeMismatch',
                        'errorMessage' => 'The type or status of the member account cannot satisfy the current operation.',
                    ],
                    [
                        'errorCode' => 'AccountSecureMobileAlreadyExists',
                        'errorMessage' => 'The secure mobile number of the member already exists.',
                    ],
                    [
                        'errorCode' => 'CallerIdentityError',
                        'errorMessage' => 'Please use the RAM user or role of the Management Account.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0217AFEB-5318-56D4-B167-1933D83EDF3F\\"\\n}","errorExample":""},{"type":"xml","example":"<BindSecureMobilePhoneResponse>\\n    <RequestId>0217AFEB-5318-56D4-B167-1933D83EDF3F</RequestId>\\n</BindSecureMobilePhoneResponse>","errorExample":""}]',
            'title' => '设置安全手机号码',
            'description' => '本API仅用于首次设置资源账号安全手机号码，不能用于修改已有的安全手机号码。'."\n"
                ."\n"
                .'为确保系统可以记录到管理操作的具体操作者，请使用管理账号下具有资源目录管理权限（AliyunResourceDirectoryFullAccess）的RAM用户或RAM角色调用本API。',
        ],
        'SetMemberDeletionPermission' => [
            'summary' => '调用SetMemberDeletionPermission开启或关闭成员删除许可。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开启或关闭成员删除许可。取值：'."\n"
                            ."\n"
                            .'- Enabled：开启。'."\n"
                            .'- Disabled：关闭。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Enabled',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C55A4CAA-9039-1DDF-91CE-FCC134513D29',
                            ],
                            'MemberDeletionStatus' => [
                                'description' => '成员删除许可状态。取值：'."\n"
                                    ."\n"
                                    .'- Enabled：已开启。'."\n"
                                    .'- Disabled：已关闭。',
                                'type' => 'string',
                                'example' => 'Enabled',
                            ],
                            'ManagementAccountId' => [
                                'description' => '资源目录的管理账号ID。',
                                'type' => 'string',
                                'example' => '151266687691****',
                            ],
                            'ResourceDirectoryId' => [
                                'description' => '资源目录ID。',
                                'type' => 'string',
                                'example' => 'rd-3G****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter.Status',
                        'errorMessage' => 'The specified Status is invalid.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'MemberAccountAccessDenied',
                        'errorMessage' => 'The member account is not allowed to perform the operation.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'EntityNotExists.ResourceDirectory',
                        'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C55A4CAA-9039-1DDF-91CE-FCC134513D29\\",\\n  \\"MemberDeletionStatus\\": \\"Enabled\\",\\n  \\"ManagementAccountId\\": \\"151266687691****\\",\\n  \\"ResourceDirectoryId\\": \\"rd-3G****\\"\\n}","errorExample":""},{"type":"xml","example":"<SetMemberDeletionPermissionResponse>\\n    <ResourceDirectoryId>rd-3G****</ResourceDirectoryId>\\n    <RequestId>C55A4CAA-9039-1DDF-91CE-FCC134513D29</RequestId>\\n    <MemberDeletionStatus>Enabled</MemberDeletionStatus>\\n    <ManagementAccountId>151266687691****</ManagementAccountId>\\n</SetMemberDeletionPermissionResponse>","errorExample":""}]',
            'title' => '开启或关闭成员删除许可',
            'description' => '当开启成员删除许可后，才能删除资源账号类型的成员。',
        ],
        'CheckAccountDelete' => [
            'summary' => '调用CheckAccountDelete执行成员删除检查任务。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'AccountId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待删除的成员ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '179855839641****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '7CDDDCEF-CDFD-0825-B7D7-217BE0897B22',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MissingParameter.AccountId',
                        'errorMessage' => 'You must specify AccountId.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.AccountId',
                        'errorMessage' => 'The AccountId is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.Account',
                        'errorMessage' => 'This resource directory account does not exist.',
                    ],
                    [
                        'errorCode' => 'EntityNotExists.ResourceDirectory',
                        'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'AccountTypeOrStatusMismatch',
                        'errorMessage' => 'You cannot perform the action on the member account.',
                    ],
                    [
                        'errorCode' => 'InvalidControlPolicyEnablementStatus',
                        'errorMessage' => 'The control policy enablement status is not valid to perform this operation.',
                    ],
                    [
                        'errorCode' => 'NoLicense.ResourceDirectory',
                        'errorMessage' => 'The resource directory has not enabled the delete operation.',
                    ],
                    [
                        'errorCode' => 'UnknownError.Account',
                        'errorMessage' => 'The deletion failed. An unknown error occurred. Please try again later.',
                    ],
                    [
                        'errorCode' => 'CallerIdentityError.DeleteAccount',
                        'errorMessage' => 'Please use the RAM user or role of the management account to delete.',
                    ],
                    [
                        'errorCode' => 'RemoveConfilctAccountAsDelegatedAdministator',
                        'errorMessage' => 'You attempted to remove a member that is registered as a delegated administrator. To complete this operation, you must first deregister this account as a delegated administrator.',
                    ],
                    [
                        'errorCode' => 'LegalEntityDifferent',
                        'errorMessage' => 'The account legal entity is different from the one of the Management Account.',
                    ],
                    [
                        'errorCode' => 'MemberTypeError.DeleteAccount',
                        'errorMessage' => 'You can only delete accounts of the resource account type created by Resource Directory.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7CDDDCEF-CDFD-0825-B7D7-217BE0897B22\\"\\n}","errorExample":""},{"type":"xml","example":"<CheckAccountDeleteResponse>\\n    <RequestId>7CDDDCEF-CDFD-0825-B7D7-217BE0897B22</RequestId>\\n</CheckAccountDeleteResponse>","errorExample":""}]',
            'title' => '成员删除检查',
            'description' => '删除成员前，您需要调用本API对目标成员进行删除前的条件检查。',
            'extraInfo' => '### 后续操作'."\n"
                .'您可以调用[GetAccountDeletionCheckResult](~~GetAccountDeletionCheckResult~~)查询删除检查的结果。',
        ],
        'GetAccountDeletionCheckResult' => [
            'summary' => '调用GetAccountDeletionCheckResult查询成员删除检查结果。',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'AccountId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待删除成员的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '179855839641****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '54AC391D-4F7F-5F08-B8D3-0AECDE6EC5BD',
                            ],
                            'AccountDeletionCheckResultInfo' => [
                                'description' => '成员删除检查结果。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '检查状态。取值：'."\n"
                                            ."\n"
                                            .'- PreCheckComplete：检查完成。'."\n"
                                            .'- PreChecking：检查中。',
                                        'type' => 'string',
                                        'example' => 'PreCheckComplete',
                                    ],
                                    'AllowDelete' => [
                                        'description' => '是否允许删除。取值：'."\n"
                                            .'- true：允许删除。'."\n"
                                            .'- false：不允许删除。',
                                        'type' => 'string',
                                        'example' => 'false',
                                    ],
                                    'NotAllowReason' => [
                                        'description' => '不允许删除的原因。'."\n"
                                            .'> 当AllowDelete为false时，返回该参数值。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '不允许删除的原因。'."\n"
                                                .'> 当AllowDelete为false时，返回该参数值。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Description' => [
                                                    'description' => '检查项描述。',
                                                    'type' => 'string',
                                                    'example' => 'This account is an Enterprise Finance associated account. Please remove the financial association of this account before deleting it.',
                                                ],
                                                'CheckId' => [
                                                    'description' => '检查项ID。',
                                                    'type' => 'string',
                                                    'example' => 'NON_SP_efc',
                                                ],
                                                'CheckName' => [
                                                    'description' => '检查项所属的云服务名称。',
                                                    'type' => 'string',
                                                    'example' => 'Enterprise finance',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'AbandonableChecks' => [
                                        'description' => '您可以选择放弃并继续执行成员删除的检查项。'."\n"
                                            ."\n"
                                            .'> 当AllowDelete为true时，可能返回该参数值。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '您可以选择放弃并继续执行成员删除的检查项。'."\n"
                                                .'> 当AllowDelete为true时，可能返回该参数值。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Description' => [
                                                    'description' => '检查项描述。',
                                                    'type' => 'string',
                                                    'example' => '存在云产品实例运行，请联系客服人员提工单处理。',
                                                ],
                                                'CheckId' => [
                                                    'description' => '检查项ID。',
                                                    'type' => 'string',
                                                    'example' => 'NON_SP_cs',
                                                ],
                                                'CheckName' => [
                                                    'description' => '检查项所属的云服务名称。',
                                                    'type' => 'string',
                                                    'example' => '容器服务',
                                                ],
                                            ],
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
                        'errorCode' => 'MissingParameter.AccountId',
                        'errorMessage' => 'You must specify AccountId.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.AccountId',
                        'errorMessage' => 'The AccountId is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.Account',
                        'errorMessage' => 'This resource directory account does not exist.',
                    ],
                    [
                        'errorCode' => 'EntityNotExists.ResourceDirectory',
                        'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'AccountTypeOrStatusMismatch',
                        'errorMessage' => 'You cannot perform the action on the member account.',
                    ],
                    [
                        'errorCode' => 'EntityNotExists.CheckAccount',
                        'errorMessage' => 'There is no check task for this account',
                    ],
                    [
                        'errorCode' => 'UnknownError.Account',
                        'errorMessage' => 'The deletion failed. An unknown error occurred. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54AC391D-4F7F-5F08-B8D3-0AECDE6EC5BD\\",\\n  \\"AccountDeletionCheckResultInfo\\": {\\n    \\"Status\\": \\"PreCheckComplete\\",\\n    \\"AllowDelete\\": \\"false\\",\\n    \\"NotAllowReason\\": [\\n      {\\n        \\"Description\\": \\"This account is an Enterprise Finance associated account. Please remove the financial association of this account before deleting it.\\",\\n        \\"CheckId\\": \\"NON_SP_efc\\",\\n        \\"CheckName\\": \\"Enterprise finance\\"\\n      }\\n    ],\\n    \\"AbandonableChecks\\": [\\n      {\\n        \\"Description\\": \\"存在云产品实例运行，请联系客服人员提工单处理。\\",\\n        \\"CheckId\\": \\"NON_SP_cs\\",\\n        \\"CheckName\\": \\"容器服务\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetAccountDeletionCheckResultResponse>\\n    <AccountDeletionCheckResultInfo>\\n        <Status>PreCheckComplete</Status>\\n        <NotAllowReason>\\n            <Description>instance number:1</Description>\\n            <CheckName>eip_pre</CheckName>\\n            <CheckId>SP_eip_eip_pre</CheckId>\\n        </NotAllowReason>\\n        <NotAllowReason>\\n            <Description>This account is an Enterprise Finance associated account. Please remove the financial association of this account before deleting it.</Description>\\n            <CheckName>Enterprise finance</CheckName>\\n            <CheckId>NON_SP_efc</CheckId>\\n        </NotAllowReason>\\n        <AllowDelete>false</AllowDelete>\\n    </AccountDeletionCheckResultInfo>\\n    <RequestId>54AC391D-4F7F-5F08-B8D3-0AECDE6EC5BD</RequestId>\\n</GetAccountDeletionCheckResultResponse>","errorExample":""}]',
            'title' => '查询成员删除检查结果',
            'description' => '在您调用[CheckAccountDelete](~~CheckAccountDelete~~)执行了成员删除检查任务后，您可以调用[GetAccountDeletionCheckResult](~~GetAccountDeletionCheckResult~~)查询成员删除检查的结果。如果符合删除检查要求，则该成员允许删除；否则，请手动处理不符合项，直至符合要求为止。',
        ],
        'DeleteAccount' => [
            'summary' => '调用DeleteAccount删除资源类型的成员。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'AccountId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待删除的成员ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '169946124551****',
                    ],
                ],
                [
                    'name' => 'AbandonableCheckId',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '可以选择放弃并继续执行成员删除的检查项ID。'."\n"
                            ."\n"
                            .'该ID从[GetAccountDeletionCheckResult](~~GetAccountDeletionCheckResult~~)的返回参数AbandonableChecks中获取。',
                        'type' => 'array',
                        'items' => [
                            'description' => '可以选择放弃并继续执行成员删除的检查项ID。'."\n"
                                ."\n"
                                .'该ID从[GetAccountDeletionCheckResult](~~GetAccountDeletionCheckResult~~)的返回参数AbandonableChecks中获取。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'NON_SP_cs',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '009429F8-C1C0-5872-B674-A6C2333B9647',
                            ],
                            'DeletionType' => [
                                'description' => '删除类型。取值：'."\n"
                                    ."\n"
                                    .'- 0：直接删除。如果成员最近30天内不存在后付费资源，则系统会直接删除该成员。'."\n"
                                    .'- 1：静默期删除。如果成员最近30天内存在后付费资源，则会进入静默期。等待静默期结束后，系统才会开始删除该成员。关于静默期的更多信息，请参见[什么是成员删除的静默期](~~446079~~)。',
                                'type' => 'string',
                                'example' => '0',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MissingParameter.AccountId',
                        'errorMessage' => 'You must specify AccountId.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.AccountId',
                        'errorMessage' => 'The AccountId is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.Account',
                        'errorMessage' => 'This resource directory account does not exist.',
                    ],
                    [
                        'errorCode' => 'EntityNotExists.ResourceDirectory',
                        'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'AccountTypeOrStatusMismatch',
                        'errorMessage' => 'You cannot perform the action on the member account.',
                    ],
                    [
                        'errorCode' => 'NoLicense.ResourceDirectory',
                        'errorMessage' => 'The resource directory has not enabled the delete operation.',
                    ],
                    [
                        'errorCode' => 'UnknownError.Account',
                        'errorMessage' => 'Delete failed. An unknown error occurred. Please try again later.',
                    ],
                    [
                        'errorCode' => 'AccountNotExist.DeleteAccount',
                        'errorMessage' => 'The deletion failed. The account does not exist. Please confirm whether it has been deleted.',
                    ],
                    [
                        'errorCode' => 'ExistProcessingDeleteFlow.DeleteAccount',
                        'errorMessage' => 'The request is invalid. The account is already in the process of deletion. Please do not repeat the operation.',
                    ],
                    [
                        'errorCode' => 'CreditControlBlock.DeleteAccount',
                        'errorMessage' => 'The deletion failed. There are unsettled bills in the current account. Please settle them first and try again.',
                    ],
                    [
                        'errorCode' => 'SpBlock.DeleteAccount',
                        'errorMessage' => 'The deletion failed. There is a specific product under the current account. Please clear it and try again.',
                    ],
                    [
                        'errorCode' => 'PeripheralError.DeleteAccount',
                        'errorMessage' => 'The deletion failed. The deletion process is abnormal. Please try again later.',
                    ],
                    [
                        'errorCode' => 'MemberTypeError.DeleteAccount',
                        'errorMessage' => 'Cloud account type members do not support deletion.',
                    ],
                    [
                        'errorCode' => 'CallerIdentityError.DeleteAccount',
                        'errorMessage' => 'Please use the RAM user or role of the management account to delete.',
                    ],
                    [
                        'errorCode' => 'ExistPrepaidInstance.DeleteAccount',
                        'errorMessage' => 'The deletion failed. There are prepaid products under the current account. Please release them and try again.',
                    ],
                    [
                        'errorCode' => 'ForbidDelete.Account',
                        'errorMessage' => 'Delete is prohibited. The current account is abnormal. Please contact customer service.',
                    ],
                    [
                        'errorCode' => 'QuotaExceeded.DeleteAccount',
                        'errorMessage' => 'You have exceeded delete account quota for the past 30 days.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"009429F8-C1C0-5872-B674-A6C2333B9647\\",\\n  \\"DeletionType\\": \\"0\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteAccountResponse>\\n    <RequestId>55B22096-0D0C-542D-9A01-9B95977D3A10</RequestId>\\n    <DeletionType>0</DeletionType>\\n</DeleteAccountResponse>","errorExample":""}]',
            'title' => '删除资源账号',
            'description' => '删除成员前，建议您先调用[CheckAccountDelete](~~CheckAccountDelete~~)和[GetAccountDeletionCheckResult](~~GetAccountDeletionCheckResult~~)，对成员进行删除前的条件检查。只有符合删除条件的成员，才能调用DeleteAccount成功将其删除。'."\n"
                ."\n"
                .'成功提交成员删除申请后，您可以通过[GetAccountDeletionStatus](~~GetAccountDeletionStatus~~)查询删除状态。且成员一旦删除，成员中的所有资源及数据都会被删除，您无法再次登录和使用它，将无法找回，请您谨慎操作。关于成员删除的更多信息，请参见[删除资源账号类型的成员](~~446078~~)。',
        ],
        'GetAccountDeletionStatus' => [
            'summary' => '调用GetAccountDeletionStatus查询成员删除状态。',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'AccountId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '成员ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '169946124551****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RdAccountDeletionStatus' => [
                                'description' => '成员删除状态。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '状态。取值：'."\n"
                                            ."\n"
                                            .'- Success：删除成功。'."\n"
                                            .'- Checking：检查中。'."\n"
                                            .'- Deleting：删除中。'."\n"
                                            .'- CheckFailed：检查失败。'."\n"
                                            .'- DeleteFailed：删除失败。',
                                        'type' => 'string',
                                        'example' => 'Success',
                                    ],
                                    'AccountId' => [
                                        'description' => '成员ID。',
                                        'type' => 'string',
                                        'example' => '169946124551****',
                                    ],
                                    'CreateTime' => [
                                        'description' => '删除开始时间。',
                                        'type' => 'string',
                                        'example' => '2022-08-23T17:05:30+08:00',
                                    ],
                                    'DeletionTime' => [
                                        'description' => '删除结束时间。',
                                        'type' => 'string',
                                        'required' => true,
                                        'example' => '2022-08-23T17:06:01+08:00',
                                    ],
                                    'FailReasonList' => [
                                        'description' => '删除失败原因。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '删除失败原因。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Name' => [
                                                    'description' => '检查项所属的云服务名称。',
                                                    'type' => 'string',
                                                    'example' => 'Others',
                                                ],
                                                'Description' => [
                                                    'description' => '检查项描述。',
                                                    'type' => 'string',
                                                    'example' => 'This account has a payer account. Please release the financial relationship of this account first.',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'DeletionType' => [
                                        'description' => '删除类型。取值：'."\n"
                                            ."\n"
                                            .'- 0：直接删除。如果成员最近30天内不存在后付费资源，则系统会直接删除该成员。'."\n"
                                            .'- 1：静默期删除。如果成员最近30天内存在后付费资源，则会进入静默期。等待静默期结束后，系统才会开始删除该成员。关于静默期的更多信息，请参见[什么是成员删除的静默期](~~446079~~)。',
                                        'type' => 'string',
                                        'example' => '0',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '8AA43293-7C8F-5730-8F2D-7F864EC092C5',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.Account',
                        'errorMessage' => 'This resource directory account does not exist.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'EntityNotExists.CheckAccount',
                        'errorMessage' => 'There is no check task for this account',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RdAccountDeletionStatus\\": {\\n    \\"Status\\": \\"Success\\",\\n    \\"AccountId\\": \\"169946124551****\\",\\n    \\"CreateTime\\": \\"2022-08-23T17:05:30+08:00\\",\\n    \\"DeletionTime\\": \\"2022-08-23T17:06:01+08:00\\",\\n    \\"FailReasonList\\": [\\n      {\\n        \\"Name\\": \\"Others\\",\\n        \\"Description\\": \\"This account has a payer account. Please release the financial relationship of this account first.\\"\\n      }\\n    ],\\n    \\"DeletionType\\": \\"0\\"\\n  },\\n  \\"RequestId\\": \\"8AA43293-7C8F-5730-8F2D-7F864EC092C5\\"\\n}","errorExample":""},{"type":"xml","example":"<GetAccountDeletionStatusResponse>\\n    <RequestId>8AA43293-7C8F-5730-8F2D-7F864EC092C5</RequestId>\\n    <RdAccountDeletionStatus>\\n        <Status>Success</Status>\\n        <AccountId>169946124551****</AccountId>\\n        <DeletionType>0</DeletionType>\\n        <CreateTime>2022-08-23T17:05:30+08:00</CreateTime>\\n        <DeletionTime>2022-08-23T17:06:01+08:00</DeletionTime>\\n    </RdAccountDeletionStatus>\\n</GetAccountDeletionStatusResponse>","errorExample":""}]',
            'title' => '查询成员删除状态',
        ],
        'TagResources' => [
            'summary' => '调用TagResources为资源目录的成员绑定标签。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '资源目录成员ID。'."\n"
                            ."\n"
                            .'最多可以指定50个。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源目录成员ID。'."\n"
                                ."\n"
                                .'最多可以指定50个。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '1524***',
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '标签。'."\n"
                            ."\n"
                            .'最多可以绑定20个标签。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签。'."\n"
                                ."\n"
                                .'最多可以绑定20个标签。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。'."\n"
                                        ."\n"
                                        .'最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'k1',
                                ],
                                'Value' => [
                                    'description' => '标签值。'."\n"
                                        ."\n"
                                        .'最多支持128个字符，不能以`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'v1',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类型。取值：'."\n"
                            ."\n"
                            .'- Account：为资源目录成员绑定标签。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Account',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E7747EDF-EDDC-5B38-9B6A-6392B9C92B1C',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E7747EDF-EDDC-5B38-9B6A-6392B9C92B1C\\"\\n}","errorExample":""},{"type":"xml","example":"<TagResourcesResponse>\\n    <RequestId>E7747EDF-EDDC-5B38-9B6A-6392B9C92B1C</RequestId>\\n</TagResourcesResponse>","errorExample":""}]',
            'title' => '绑定标签',
        ],
        'UntagResources' => [
            'summary' => '调用UntagResources解绑资源目成员的标签。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'All',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否解绑指定资源目录成员的全部标签。取值：'."\n"
                            .'- false（默认值）：否'."\n"
                            .'- true：是',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '资源目录成员ID。'."\n"
                            ."\n"
                            .'最多可以指定50个。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源目录成员ID。'."\n"
                                ."\n"
                                .'最多可以指定50个。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '1524****',
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TagKey',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '标签键。'."\n"
                            ."\n"
                            .'最多可以解绑20个标签键。'."\n"
                            ."\n"
                            .'> 当解绑全部标签的参数`All`取值为`true`时，不需要设置标签键。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签键。'."\n"
                                ."\n"
                                .'最多可以解绑20个标签键。'."\n"
                                .'> 当解绑全部标签的参数`All`取值为`true`时，不需要设置标签键。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'k1',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类型。取值：'."\n"
                            ."\n"
                            .'- Account：解绑资源目录成员的标签。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Account',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E7747EDF-EDDC-5B38-9B6A-6392B9C92B1C',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E7747EDF-EDDC-5B38-9B6A-6392B9C92B1C\\"\\n}","errorExample":""},{"type":"xml","example":"<UntagResourcesResponse>\\n    <RequestId>E7747EDF-EDDC-5B38-9B6A-6392B9C92B1C</RequestId>\\n</UntagResourcesResponse>","errorExample":""}]',
            'title' => '解绑标签',
        ],
        'ListTagResources' => [
            'summary' => '调用ListTagResources查询资源目录成员绑定的标签列表。',
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
            ],
            'parameters' => [
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下一个查询开始的Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'caeba0bbb2be03f84eb48b699f0a****',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页时每页显示的数据行数。'."\n"
                            ."\n"
                            .'取值范围：1~100。默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '标签。查询的过滤条件。'."\n"
                            ."\n"
                            .'最多可以指定20个标签。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签。查询的过滤条件。'."\n"
                                ."\n"
                                .'最多可以指定20个标签。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'k1',
                                ],
                                'Value' => [
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'v1',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '资源目录成员ID。查询的过滤条件。'."\n"
                            ."\n"
                            .'> 查询资源目录成员绑定的标签列表时，必须同时指定`ResourceId`和`ResourceType`，且`ResourceType`取值为`Account`。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源目录成员ID。查询的过滤条件。'."\n"
                                ."\n"
                                .'> 查询资源目录成员绑定的标签列表时，必须同时指定`ResourceId`和`ResourceType`，且`ResourceType`取值为`Account`。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '1098***',
                        ],
                        'required' => false,
                        'maxItems' => 50,
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类型。查询的过滤条件。取值：'."\n"
                            ."\n"
                            .'- Account：查询资源目录成员的标签。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Account',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '根据`NextToken`判断是否具备下一个查询开始的`Token`。取值：'."\n"
                                    ."\n"
                                    .'- 如果`NextToken`为空，即`"NextToken": ""`，表示没有下一个。'."\n"
                                    .'- 如果`NextToken`有值，则该值就是下一个查询开始的`Token`。',
                                'type' => 'string',
                                'example' => 'caeba0bbb2be03f84eb48b699f0a****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '8054B059-6B36-53BF-AA45-B8C9A0ED05AB',
                            ],
                            'TagResources' => [
                                'description' => '标签列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '标签列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'TagValue' => [
                                            'description' => '标签值。',
                                            'type' => 'string',
                                            'example' => 'k1',
                                        ],
                                        'ResourceId' => [
                                            'description' => '资源目录成员ID。',
                                            'type' => 'string',
                                            'example' => '1098***',
                                        ],
                                        'TagKey' => [
                                            'description' => '标签键。',
                                            'type' => 'string',
                                            'example' => 'k1',
                                        ],
                                        'ResourceType' => [
                                            'description' => '资源类型。取值：'."\n"
                                                ."\n"
                                                .'- Account：资源目录成员。',
                                            'type' => 'string',
                                            'example' => 'Account',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a****\\",\\n  \\"RequestId\\": \\"8054B059-6B36-53BF-AA45-B8C9A0ED05AB\\",\\n  \\"TagResources\\": [\\n    {\\n      \\"TagValue\\": \\"k1\\",\\n      \\"ResourceId\\": \\"1098***\\",\\n      \\"TagKey\\": \\"k1\\",\\n      \\"ResourceType\\": \\"Account\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListTagResourcesResponse>\\n    <RequestId>8054B059-6B36-53BF-AA45-B8C9A0ED05AB</RequestId>\\n    <TagResources>\\n        <ResourceId>rg-aekz6bre2uq****</ResourceId>\\n        <TagKey>k1</TagKey>\\n        <ResourceType>resourcegroup</ResourceType>\\n        <TagValue>v1</TagValue>\\n    </TagResources>\\n</ListTagResourcesResponse>","errorExample":""}]',
            'title' => '查询标签列表',
        ],
        'ListTagKeys' => [
            'summary' => '调用ListTagKeys查询标签键列表。',
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
            ],
            'parameters' => [
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下一个查询开始的Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TGlzdFJlc291cm****',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '单次请求返回结果的最大条数。'."\n"
                            ."\n"
                            .'取值范围：1~100。默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'description' => '资源类型。'."\n"
                            ."\n"
                            .'取值：Account，表示资源目录的成员。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Account',
                    ],
                ],
                [
                    'name' => 'KeyFilter',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模糊查询的标签键。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'team',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '根据NextToken判断是否具备下一个查询开始的Token。取值：'."\n"
                                    ."\n"
                                    .'- 如果NextToken为空，即`"NextToken": ""`，表示没有下一个。'."\n"
                                    .'- 如果NextToken有值，则该值就是下一个查询开始的Token。',
                                'type' => 'string',
                                'example' => 'TGlzdFJlc291cm****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'DC09A6AA-2713-4E10-A2E9-E6C5C43A8842',
                            ],
                            'Tags' => [
                                'description' => '标签键信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '标签键信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Key' => [
                                            'description' => '标签键。',
                                            'type' => 'string',
                                            'example' => 'team',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"TGlzdFJlc291cm****\\",\\n  \\"RequestId\\": \\"DC09A6AA-2713-4E10-A2E9-E6C5C43A8842\\",\\n  \\"Tags\\": [\\n    {\\n      \\"Key\\": \\"team\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListTagKeysResponse>\\n    <NextToken>caeba0bbb2be03f84eb48b699f0a****</NextToken>\\n    <RequestId>DC09A6AA-2713-4E10-A2E9-E6C5C43A8842</RequestId>\\n    <Tags>\\n        <Key>team</Key>\\n    </Tags>\\n</ListTagKeysResponse>","errorExample":""}]',
            'title' => '查询标签键列表',
        ],
        'ListTagValues' => [
            'summary' => '调用ListTagValues查询指定标签键对应的标签值。',
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
            ],
            'parameters' => [
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下一个查询开始的Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TGlzdFJlc291cm****',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '单次请求返回结果的最大条数。'."\n"
                            ."\n"
                            .'取值范围：1~100。默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'description' => '资源类型。'."\n"
                            ."\n"
                            .'取值：Account，表示资源目录的成员。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Account',
                    ],
                ],
                [
                    'name' => 'TagKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签键，用于查询的过滤条件。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'k1',
                    ],
                ],
                [
                    'name' => 'ValueFilter',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模糊查询的标签值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '根据NextToken判断是否具备下一个查询开始的Token。取值：'."\n"
                                    ."\n"
                                    .'- 如果NextToken为空，即`"NextToken": ""`，表示没有下一个。'."\n"
                                    .'- 如果NextToken有值，则该值就是下一个查询开始的Token。',
                                'type' => 'string',
                                'example' => 'TGlzdFJlc291cm****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'DC09A6AA-2713-4E10-A2E9-E6C5C43A8842',
                            ],
                            'Tags' => [
                                'description' => '标签值信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '标签值信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Value' => [
                                            'description' => '标签值。',
                                            'type' => 'string',
                                            'example' => 'v1',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"TGlzdFJlc291cm****\\",\\n  \\"RequestId\\": \\"DC09A6AA-2713-4E10-A2E9-E6C5C43A8842\\",\\n  \\"Tags\\": [\\n    {\\n      \\"Value\\": \\"v1\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListTagValuesResponse>\\n    <NextToken>TGlzdFJlc291cm****</NextToken>\\n    <RequestId>DC09A6AA-2713-4E10-A2E9-E6C5C43A8842</RequestId>\\n    <Tags>\\n        <Value>v1</Value>\\n    </Tags>\\n</ListTagValuesResponse>","errorExample":""}]',
            'title' => '查询指定标签键对应的标签值',
        ],
        'ChangeAccountEmail' => [
            'summary' => '调用ChangeAccountEmail修改成员邮箱。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'AccountId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '成员ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '181761095690****',
                    ],
                ],
                [
                    'name' => 'Email',
                    'in' => 'query',
                    'schema' => [
                        'description' => '成员邮箱。'."\n"
                            ."\n"
                            .'> 系统将自动发送验证邮件到所填邮箱，通过验证后修改才会生效，验证通过后系统会同步修改该账号的邮箱和安全邮箱。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'someone@example.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'NotSupportedOperation.Account.EmailModify',
                        'errorMessage' => 'The operation is not supported because the account email is being modifying.',
                    ],
                    [
                        'errorCode' => 'NotSupport.InvitedAccount',
                        'errorMessage' => 'The current operation is not supported for accounts invited to join the resource directory.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.ResourceDirectory',
                        'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
                    ],
                    [
                        'errorCode' => 'EntityNotExists.Account',
                        'errorMessage' => 'This resource directory account does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\"\\n}","errorExample":""},{"type":"xml","example":"<ChangeAccountEmailResponse>\\n    <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\n</ChangeAccountEmailResponse>","errorExample":""}]',
            'title' => '修改成员邮箱',
        ],
        'RetryChangeAccountEmail' => [
            'summary' => '调用RetryChangeAccountEmail重新发送修改成员邮箱的确认邮件。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'AccountId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '成员ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '181761095690****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.EmailModifyRecord',
                        'errorMessage' => 'This email modification record of the account does not exist.',
                    ],
                    [
                        'errorCode' => 'EntityNotExists.ResourceDirectory',
                        'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
                    ],
                    [
                        'errorCode' => 'EntityNotExists.Account',
                        'errorMessage' => 'This resource directory account does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\"\\n}","errorExample":""},{"type":"xml","example":"<RetryChangeAccountEmailResponse>\\n    <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\n</RetryChangeAccountEmailResponse>","errorExample":""}]',
            'title' => '重新发送修改成员邮箱的确认邮件',
        ],
        'CancelChangeAccountEmail' => [
            'summary' => '调用CancelChangeAccountEmail取消修改成员邮箱。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'AccountId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '成员ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '181761095690****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.EmailModifyRecord',
                        'errorMessage' => 'This email modification record of the account does not exist.',
                    ],
                    [
                        'errorCode' => 'EntityNotExists.ResourceDirectory',
                        'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
                    ],
                    [
                        'errorCode' => 'EntityNotExists.Account',
                        'errorMessage' => 'This resource directory account does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\"\\n}","errorExample":""},{"type":"xml","example":"<CancelChangeAccountEmailResponse>\\n    <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\n</CancelChangeAccountEmailResponse>","errorExample":""}]',
            'title' => '取消修改成员邮箱',
        ],
        'AddMessageContact' => [
            'summary' => '添加消息通知联系人。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '联系人的名称。'."\n"
                            ."\n"
                            .'联系人的名称在资源目录内必须唯一。'."\n"
                            ."\n"
                            .'格式：2~12个英文字母或汉字。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'tom',
                    ],
                ],
                [
                    'name' => 'EmailAddress',
                    'in' => 'query',
                    'schema' => [
                        'description' => '联系人的邮箱地址。'."\n"
                            ."\n"
                            .'添加邮箱地址后，您需要继续调用[SendEmailVerificationForMessageContact](~~SendEmailVerificationForMessageContact~~)向该邮箱地址发送验证信息，通过验证后，该联系人的邮箱地址才能生效。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'someone***@example.com',
                    ],
                ],
                [
                    'name' => 'PhoneNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '联系人的手机号码。'."\n"
                            ."\n"
                            .'格式：`<国家码>-<手机号码>`。'."\n"
                            ."\n"
                            .'> 仅支持填写`86-<手机号码>`的中国内地手机号码。'."\n"
                            ."\n"
                            .'添加手机号码后，您需要继续调用[SendPhoneVerificationForMessageContact](~~SendPhoneVerificationForMessageContact~~)向该手机号码发送验证信息，通过验证后，该联系人的手机号码才能生效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '86-139****1234',
                    ],
                ],
                [
                    'name' => 'Title',
                    'in' => 'query',
                    'schema' => [
                        'description' => '联系人的职位。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'FinanceDirector' => '财务负责人',
                            'TechnicalDirector' => '技术负责人',
                            'MaintenanceDirector' => '运维负责人',
                            'CEO' => 'CEO',
                            'ProjectDirector' => '项目负责人',
                            'Other' => '其它',
                        ],
                        'example' => 'TechnicalDirector',
                    ],
                ],
                [
                    'name' => 'MessageTypes',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '联系人接收的消息分类。',
                        'type' => 'array',
                        'items' => [
                            'description' => '联系人接收的消息分类。',
                            'type' => 'string',
                            'required' => false,
                            'enumValueTitles' => [
                                'ServiceMessage' => '服务消息',
                                'FaultMessage' => '故障消息',
                                'AccountExpenses' => '账号资金消息',
                                'SecurityMessage' => '安全消息',
                                'ActivityMessage' => '活动消息',
                                'ProductMessage' => '产品消息',
                            ],
                            'example' => 'AccountExpenses',
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '2DFCE4C9-04A9-4C83-BB14-FE791275EC53',
                            ],
                            'Contact' => [
                                'description' => '联系人信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ContactId' => [
                                        'description' => '联系人ID。',
                                        'type' => 'string',
                                        'example' => 'c-qL4HqKONzOM7****',
                                    ],
                                    'CreateDate' => [
                                        'description' => '联系人创建时间。',
                                        'type' => 'string',
                                        'example' => '2023-03-27 17:19:21',
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
                        'errorCode' => 'MissingParameter.Name',
                        'errorMessage' => 'You must specify Name.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Name',
                        'errorMessage' => 'The Name is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Name.Length',
                        'errorMessage' => 'The Name exceeds the length limit.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Name.AlreadyUsed',
                        'errorMessage' => 'The Name already exists. Please change to another name.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.EmailAddress',
                        'errorMessage' => 'You must specify EmailAddress.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.EmailAddress',
                        'errorMessage' => 'The EmailAddress is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.PhoneNumber',
                        'errorMessage' => 'You must specify PhoneNumber.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.PhoneNumber',
                        'errorMessage' => 'The PhoneNumber is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.Title',
                        'errorMessage' => 'You must specify Title.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Title',
                        'errorMessage' => 'The Title is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.MessageTypes',
                        'errorMessage' => 'You must specify MessageTypes.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.MessageTypes',
                        'errorMessage' => 'The MessageTypes is invalid.',
                    ],
                    [
                        'errorCode' => 'LimitExceeded.Contacts',
                        'errorMessage' => 'The maximum number of contacts in a resource directory exceeds the limit.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.MobileCountryCode',
                        'errorMessage' => 'The current site does not support the country code.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.EmailAddress.Length',
                        'errorMessage' => 'The EmailAddress exceeds the length limit.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'ConcurrentCallNotSupported',
                        'errorMessage' => 'The operation conflicts with other operations. Please try again later.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2DFCE4C9-04A9-4C83-BB14-FE791275EC53\\",\\n  \\"Contact\\": {\\n    \\"ContactId\\": \\"c-qL4HqKONzOM7****\\",\\n    \\"CreateDate\\": \\"2023-03-27 17:19:21\\"\\n  }\\n}","type":"json"}]',
            'title' => '添加联系人',
        ],
        'SendEmailVerificationForMessageContact' => [
            'summary' => '向联系人的邮箱发送验证信息。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'ContactId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '联系人ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'c-5gsZAGt***PGduDF',
                    ],
                ],
                [
                    'name' => 'EmailAddress',
                    'in' => 'query',
                    'schema' => [
                        'description' => '联系人的邮箱地址。'."\n"
                            ."\n"
                            .'该邮箱地址为您在[AddMessageContact](~~AddMessageContact~~)中设置的邮箱地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'someone***@example.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '7B8A4E7D-6CFF-471D-84DF-195A7A241ECB',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MissingParameter.ContactId',
                        'errorMessage' => 'You must specify ContactId.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.ContactId',
                        'errorMessage' => 'The ContactId is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.EmailAddress',
                        'errorMessage' => 'You must specify EmailAddress.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.EmailAddress',
                        'errorMessage' => 'The EmailAddress is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.Contact',
                        'errorMessage' => 'This Contact does not exist.',
                    ],
                    [
                        'errorCode' => 'EntityNotExists.Contact.Verification',
                        'errorMessage' => 'This contact verification does not exist.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'SendValidateCodeExceedsLimitForAccount',
                        'errorMessage' => 'For the same account, the number of verification codes sent exceeds the limit.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7B8A4E7D-6CFF-471D-84DF-195A7A241ECB\\"\\n}","type":"json"}]',
            'title' => '向联系人邮箱发送验证信息',
        ],
        'SendPhoneVerificationForMessageContact' => [
            'summary' => '向联系人的手机号码发送验证信息。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'ContactId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '联系人ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'c-qL4HqKONzOM7****',
                    ],
                ],
                [
                    'name' => 'PhoneNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '联系人的手机号码。'."\n"
                            ."\n"
                            .'格式：`<国家码>-<手机号码>`'."\n"
                            ."\n"
                            .'该手机号码为您在[AddMessageContact](~~AddMessageContact~~)中设置的手机号码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '86-139****1234',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CD76D376-2517-4924-92C5-DBC52262F93A',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MissingParameter.ContactId',
                        'errorMessage' => 'You must specify ContactId.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.ContactId',
                        'errorMessage' => 'The ContactId is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.PhoneNumber',
                        'errorMessage' => 'You must specify PhoneNumber.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.PhoneNumber',
                        'errorMessage' => 'The PhoneNumber is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.MobileCountryCode',
                        'errorMessage' => 'The current site does not support the country code.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.Contact',
                        'errorMessage' => 'This Contact does not exist.',
                    ],
                    [
                        'errorCode' => 'EntityNotExists.Contact.Verification',
                        'errorMessage' => 'This contact verification does not exist.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'SendValidateCodeExceedsLimitForAccount',
                        'errorMessage' => 'For the same account, the number of verification codes sent exceeds the limit.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CD76D376-2517-4924-92C5-DBC52262F93A\\"\\n}","type":"json"}]',
            'title' => '向联系人手机发送验证信息',
        ],
        'ListMessageContactVerifications' => [
            'summary' => '查询联系人的手机或邮箱的待验证记录。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'ContactId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '联系人ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'c-qL4HqKONzOM7****',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页时每页显示的数据条数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CD76D376-2517-4924-92C5-DBC52262F93A',
                            ],
                            'TotalCount' => [
                                'description' => '数据总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '48',
                            ],
                            'PageSize' => [
                                'description' => '分页时每页显示的数据行数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'PageNumber' => [
                                'description' => '页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'ContactVerifications' => [
                                'description' => '联系人待验证记录。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '联系人待验证记录。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ContactId' => [
                                            'description' => '联系人ID。',
                                            'type' => 'string',
                                            'example' => 'c-qL4HqKONzOM7****',
                                        ],
                                        'Target' => [
                                            'description' => '验证目标。取值：'."\n"
                                                ."\n"
                                                .'- 手机号码。'."\n"
                                                .'- 邮箱。',
                                            'type' => 'string',
                                            'example' => 'someone***@example.com',
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
                        'errorCode' => 'InvalidParameter.ContactId',
                        'errorMessage' => 'The ContactId is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.ContactId',
                        'errorMessage' => 'You must specify ContactId.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.Contact',
                        'errorMessage' => 'This Contact does not exist.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CD76D376-2517-4924-92C5-DBC52262F93A\\",\\n  \\"TotalCount\\": 48,\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"ContactVerifications\\": [\\n    {\\n      \\"ContactId\\": \\"c-qL4HqKONzOM7****\\",\\n      \\"Target\\": \\"someone***@example.com\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询联系人待验证记录',
        ],
        'AssociateMembers' => [
            'summary' => '为资源目录、资源夹或成员绑定联系人。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ContactId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '联系人ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'c-qL4HqKONzOM7****',
                    ],
                ],
                [
                    'name' => 'Members',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '绑定目标。',
                        'type' => 'array',
                        'items' => [
                            'description' => '绑定目标。取值：'."\n"
                                ."\n"
                                .'- 资源目录ID：为整个资源目录绑定联系人。'."\n"
                                .'- 资源夹ID：为指定资源夹绑定联系人。'."\n"
                                .'- 成员ID：为指定成员绑定联系人。'."\n"
                                ."\n"
                                .'N的取值范围：1~5，即每次最多添加5个绑定目标。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'fd-ZDNPiT****',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '95060F1D-6990-4645-8920-A81D1BBFE992',
                            ],
                            'Members' => [
                                'description' => '绑定目标。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '绑定目标。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ContactId' => [
                                            'description' => '联系人ID。',
                                            'type' => 'string',
                                            'example' => 'c-qL4HqKONzOM7****',
                                        ],
                                        'MemberId' => [
                                            'description' => '绑定目标ID。取值：'."\n"
                                                ."\n"
                                                .'- 资源目录ID。'."\n"
                                                .'- 资源夹ID。'."\n"
                                                .'- 成员ID。',
                                            'type' => 'string',
                                            'example' => 'fd-ZDNPiT****',
                                        ],
                                        'ModifyDate' => [
                                            'description' => '绑定时间。',
                                            'type' => 'string',
                                            'example' => '2023-03-27 17:19:21',
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
                        'errorCode' => 'InvalidParameter.ContactId',
                        'errorMessage' => 'The ContactId is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.ContactId',
                        'errorMessage' => 'You must specify ContactId.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Members',
                        'errorMessage' => 'The Members is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Members.Duplicate',
                        'errorMessage' => 'The Members contains duplicate values.',
                    ],
                    [
                        'errorCode' => 'LimitExceeded.ContactMembers',
                        'errorMessage' => 'The maximum number of contact members exceeds the limit.',
                    ],
                    [
                        'errorCode' => 'InvalidMember',
                        'errorMessage' => 'The member does not exist in the resource directory.',
                    ],
                    [
                        'errorCode' => 'ContactStatusMismatchAction',
                        'errorMessage' => 'The status of the contact does not allow the specified operation.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.Contact',
                        'errorMessage' => 'This Contact does not exist.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'ConcurrentCallNotSupported',
                        'errorMessage' => 'The operation conflicts with other operations. Please try again later.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"95060F1D-6990-4645-8920-A81D1BBFE992\\",\\n  \\"Members\\": [\\n    {\\n      \\"ContactId\\": \\"c-qL4HqKONzOM7****\\",\\n      \\"MemberId\\": \\"fd-ZDNPiT****\\",\\n      \\"ModifyDate\\": \\"2023-03-27 17:19:21\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '绑定联系人',
        ],
        'DisassociateMembers' => [
            'summary' => '为资源目录、资源夹或成员解绑联系人。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ContactId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '联系人ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'c-qL4HqKONzOM7****',
                    ],
                ],
                [
                    'name' => 'Members',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '解绑目标。',
                        'type' => 'array',
                        'items' => [
                            'description' => '解绑目标。取值：'."\n"
                                ."\n"
                                .'- 资源目录ID：为整个资源目录解绑联系人。'."\n"
                                .'- 资源夹ID：为指定资源夹解绑联系人。'."\n"
                                .'- 成员ID：为指定成员解绑联系人。'."\n"
                                ."\n"
                                .'N的取值范围：1~5，即每次最多解绑5个目标。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'fd-ZDNPiT****',
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '95060F1D-6990-4645-8920-A81D1BBFE992',
                            ],
                            'Members' => [
                                'description' => '解绑目标。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '解绑目标。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ContactId' => [
                                            'description' => '联系人ID。',
                                            'type' => 'string',
                                            'example' => 'c-qL4HqKONzOM7****',
                                        ],
                                        'MemberId' => [
                                            'description' => '解绑目标ID。取值：'."\n"
                                                ."\n"
                                                .'- 资源目录ID。'."\n"
                                                .'- 资源夹ID。'."\n"
                                                .'- 成员ID。',
                                            'type' => 'string',
                                            'example' => 'fd-ZDNPiT****',
                                        ],
                                        'ModifyDate' => [
                                            'description' => '解绑时间。',
                                            'type' => 'string',
                                            'example' => '2023-03-27 17:19:21',
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
                        'errorCode' => 'InvalidParameter.ContactId',
                        'errorMessage' => 'The ContactId is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.ContactId',
                        'errorMessage' => 'You must specify ContactId.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Members',
                        'errorMessage' => 'The Members is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Members.Duplicate',
                        'errorMessage' => 'The Members contains duplicate values.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Members.Length',
                        'errorMessage' => 'The maximum number of Members exceeds the limit.',
                    ],
                    [
                        'errorCode' => 'QuotaExceeded.Members',
                        'errorMessage' => 'The maximum number of Members exceeds the limit.',
                    ],
                    [
                        'errorCode' => 'InvalidMember',
                        'errorMessage' => 'The member does not exist in the resource directory.',
                    ],
                    [
                        'errorCode' => 'ContactStatusMismatchAction',
                        'errorMessage' => 'The status of the contact does not allow the specified operation.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.Contact',
                        'errorMessage' => 'This Contact does not exist.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"95060F1D-6990-4645-8920-A81D1BBFE992\\",\\n  \\"Members\\": [\\n    {\\n      \\"ContactId\\": \\"c-qL4HqKONzOM7****\\",\\n      \\"MemberId\\": \\"fd-ZDNPiT****\\",\\n      \\"ModifyDate\\": \\"2023-03-27 17:19:21\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '解绑联系人',
        ],
        'GetMessageContact' => [
            'summary' => '查询联系人信息。',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ContactId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '联系人ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'c-qL4HqKONzOM7****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
                            ],
                            'Contact' => [
                                'description' => '联系人信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ContactId' => [
                                        'description' => '联系人ID。',
                                        'type' => 'string',
                                        'example' => 'c-qL4HqKONzOM7****',
                                    ],
                                    'MessageTypes' => [
                                        'description' => '联系人接收的消息分类。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '联系人接收的消息分类。',
                                            'type' => 'string',
                                            'example' => 'AccountExpenses',
                                        ],
                                    ],
                                    'CreateDate' => [
                                        'description' => '联系人的创建时间。',
                                        'type' => 'string',
                                        'example' => '2023-03-27 17:19:21',
                                    ],
                                    'Name' => [
                                        'description' => '联系人的名称。',
                                        'type' => 'string',
                                        'example' => 'tom',
                                    ],
                                    'EmailAddress' => [
                                        'description' => '联系人的邮箱地址。',
                                        'type' => 'string',
                                        'example' => 'someone***@example.com',
                                    ],
                                    'PhoneNumber' => [
                                        'description' => '联系人的手机号码。',
                                        'type' => 'string',
                                        'example' => '86-139****1234',
                                    ],
                                    'Title' => [
                                        'description' => '联系人的职位。',
                                        'type' => 'string',
                                        'example' => 'TechnicalDirector',
                                    ],
                                    'Members' => [
                                        'description' => '绑定目标。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '绑定目标。',
                                            'type' => 'string',
                                            'example' => 'fd-ZDNPiT****',
                                        ],
                                    ],
                                    'Status' => [
                                        'description' => '联系人状态。取值：'."\n"
                                            ."\n"
                                            .'- Verifying：待验证。'."\n"
                                            .'- Active：已生效。'."\n"
                                            .'- Deleting：删除中。',
                                        'type' => 'string',
                                        'example' => 'Active',
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
                        'errorCode' => 'InvalidParameter.ContactId',
                        'errorMessage' => 'The ContactId is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.ContactId',
                        'errorMessage' => 'You must specify ContactId.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.Contact',
                        'errorMessage' => 'This Contact does not exist.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\",\\n  \\"Contact\\": {\\n    \\"ContactId\\": \\"c-qL4HqKONzOM7****\\",\\n    \\"MessageTypes\\": [\\n      \\"AccountExpenses\\"\\n    ],\\n    \\"CreateDate\\": \\"2023-03-27 17:19:21\\",\\n    \\"Name\\": \\"tom\\",\\n    \\"EmailAddress\\": \\"someone***@example.com\\",\\n    \\"PhoneNumber\\": \\"86-139****1234\\",\\n    \\"Title\\": \\"TechnicalDirector\\",\\n    \\"Members\\": [\\n      \\"fd-ZDNPiT****\\"\\n    ],\\n    \\"Status\\": \\"Active\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询联系人信息',
        ],
        'ListMessageContacts' => [
            'summary' => '查询联系人列表。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'ContactId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '联系人ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'c-qL4HqKONzOM7****',
                    ],
                ],
                [
                    'name' => 'Member',
                    'in' => 'query',
                    'schema' => [
                        'description' => '绑定目标ID。取值：'."\n"
                            ."\n"
                            .'- 资源目录ID。'."\n"
                            .'- 资源夹ID。'."\n"
                            .'- 成员ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'fd-ZDNPiT****',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页时每页显示的数据条数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '95060F1D-6990-4645-8920-A81D1BBFE992',
                            ],
                            'TotalCount' => [
                                'description' => '数据总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'PageSize' => [
                                'description' => '分页时每页显示的数据条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'PageNumber' => [
                                'description' => '页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Contacts' => [
                                'description' => '消息联系人列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '消息联系人列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ContactId' => [
                                            'description' => '联系人ID。',
                                            'type' => 'string',
                                            'example' => 'c-qL4HqKONzOM7****',
                                        ],
                                        'Name' => [
                                            'description' => '联系人的名称。',
                                            'type' => 'string',
                                            'example' => 'tom',
                                        ],
                                        'EmailAddress' => [
                                            'description' => '联系人的邮箱地址。',
                                            'type' => 'string',
                                            'example' => 'someone***@example.com',
                                        ],
                                        'PhoneNumber' => [
                                            'description' => '联系人的手机号码。',
                                            'type' => 'string',
                                            'example' => '86-139****1234',
                                        ],
                                        'Title' => [
                                            'description' => '联系人的职位。',
                                            'type' => 'string',
                                            'example' => 'TechnicalDirector',
                                        ],
                                        'MessageTypes' => [
                                            'description' => '联系人接收的消息分类。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '联系人接收的消息分类。',
                                                'type' => 'string',
                                                'example' => 'AccountExpenses',
                                            ],
                                        ],
                                        'Members' => [
                                            'description' => '绑定目标。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '绑定目标。',
                                                'type' => 'string',
                                                'example' => 'fd-ZDNPiT****',
                                            ],
                                        ],
                                        'Status' => [
                                            'description' => '联系人状态。取值：'."\n"
                                                ."\n"
                                                .'- Verifying：待验证。'."\n"
                                                .'- Active：生效。'."\n"
                                                .'- Deleting：删除中。',
                                            'type' => 'string',
                                            'example' => 'Active',
                                        ],
                                        'CreateDate' => [
                                            'description' => '添加联系人的时间。',
                                            'type' => 'string',
                                            'example' => '2023-03-27 17:19:21',
                                        ],
                                        'AssociatedDate' => [
                                            'description' => '绑定联系人的时间。',
                                            'type' => 'string',
                                            'example' => '2023-03-27 17:19:21',
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
                        'errorCode' => 'InvalidParameter.ContactId',
                        'errorMessage' => 'The ContactId is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Member',
                        'errorMessage' => 'The Member is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.Contact',
                        'errorMessage' => 'This Contact does not exist.',
                    ],
                    [
                        'errorCode' => 'EntityNotExists.Member',
                        'errorMessage' => 'This Member does not exist.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"95060F1D-6990-4645-8920-A81D1BBFE992\\",\\n  \\"TotalCount\\": 20,\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"Contacts\\": [\\n    {\\n      \\"ContactId\\": \\"c-qL4HqKONzOM7****\\",\\n      \\"Name\\": \\"tom\\",\\n      \\"EmailAddress\\": \\"someone***@example.com\\",\\n      \\"PhoneNumber\\": \\"86-139****1234\\",\\n      \\"Title\\": \\"TechnicalDirector\\",\\n      \\"MessageTypes\\": [\\n        \\"AccountExpenses\\"\\n      ],\\n      \\"Members\\": [\\n        \\"fd-ZDNPiT****\\"\\n      ],\\n      \\"Status\\": \\"Active\\",\\n      \\"CreateDate\\": \\"2023-03-27 17:19:21\\",\\n      \\"AssociatedDate\\": \\"2023-03-27 17:19:21\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询联系人列表',
        ],
        'DeleteMessageContact' => [
            'summary' => '删除联系人。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'ContactId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '联系人ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'c-qL4HqKONzOM7****',
                    ],
                ],
                [
                    'name' => 'RetainContactInMembers',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否保留成员中的联系人。取值：'."\n"
                            .'- true（默认值）：保留。保留成员中的此联系人，联系人仍可以接收成员的消息。'."\n"
                            .'- false：不保留。将此联系人从成员中移除，此联系人不再接收成员的消息。当选择False时此接口结果异步返回，您可以通过[GetMessageContactDeletionStatus](~~GetMessageContactDeletionStatus~~)获取删除结果。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
                            ],
                            'Status' => [
                                'description' => '联系人删除状态。取值：'."\n"
                                    .'- Deleting：删除中。'."\n"
                                    .'- Deleted：已删除。',
                                'type' => 'string',
                                'example' => 'Deleting',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter.ContactId',
                        'errorMessage' => 'The ContactId is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.ContactId',
                        'errorMessage' => 'You must specify ContactId.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.Contact',
                        'errorMessage' => 'This Contact does not exist.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'ConcurrentCallNotSupported',
                        'errorMessage' => 'The operation conflicts with other operations. Please try again later.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\",\\n  \\"Status\\": \\"Deleting\\"\\n}","type":"json"}]',
            'title' => '删除联系人',
        ],
        'GetMessageContactDeletionStatus' => [
            'summary' => '查询联系人删除状态。',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ContactId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '联系人ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'c-qL4HqKONzOM7****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '95060F1D-6990-4645-8920-A81D1BBFE992',
                            ],
                            'ContactDeletionStatus' => [
                                'description' => '联系人删除信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '联系人删除状态。取值：'."\n"
                                            .'- Deleting：删除中。'."\n"
                                            .'- Failed：删除失败。',
                                        'type' => 'string',
                                        'example' => 'Deleting',
                                    ],
                                    'ContactId' => [
                                        'description' => '联系人ID。',
                                        'type' => 'string',
                                        'example' => 'c-qL4HqKONzOM7****',
                                    ],
                                    'FailReasonList' => [
                                        'description' => '删除失败的联系人列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '删除失败的联系人列表。',
                                            'type' => 'object',
                                            'properties' => [
                                                'AccountId' => [
                                                    'description' => '成员ID。',
                                                    'type' => 'string',
                                                    'example' => '199796839435****',
                                                ],
                                                'MessageTypes' => [
                                                    'description' => '联系人接收的消息分类。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '联系人接收的消息分类。',
                                                        'type' => 'string',
                                                        'example' => 'AccountExpenses',
                                                    ],
                                                ],
                                            ],
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
                        'errorCode' => 'InvalidParameter.ContactId',
                        'errorMessage' => 'The ContactId is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.ContactId',
                        'errorMessage' => 'You must specify ContactId.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.Contact',
                        'errorMessage' => 'This Contact does not exist.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"95060F1D-6990-4645-8920-A81D1BBFE992\\",\\n  \\"ContactDeletionStatus\\": {\\n    \\"Status\\": \\"Deleting\\",\\n    \\"ContactId\\": \\"c-qL4HqKONzOM7****\\",\\n    \\"FailReasonList\\": [\\n      {\\n        \\"AccountId\\": \\"199796839435****\\",\\n        \\"MessageTypes\\": [\\n          \\"AccountExpenses\\"\\n        ]\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询联系人删除状态',
        ],
        'UpdateMessageContact' => [
            'summary' => '更新联系人信息。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ContactId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '联系人ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'c-qL4HqKONzOM7****',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '联系人的名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'tom',
                    ],
                ],
                [
                    'name' => 'EmailAddress',
                    'in' => 'query',
                    'schema' => [
                        'description' => '联系人的邮箱地址。'."\n"
                            ."\n"
                            .'添加邮箱地址后，您需要继续调用[SendEmailVerificationForMessageContact](~~SendEmailVerificationForMessageContact~~)向该邮箱地址发送验证信息，通过验证后，该联系人的邮箱地址才能生效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'someone***@example.com',
                    ],
                ],
                [
                    'name' => 'PhoneNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '联系人的手机号码。'."\n"
                            ."\n"
                            .'格式：`<国家码>-<手机号码>`。'."\n"
                            ."\n"
                            .'<props="china">'."\n"
                            .'> 仅支持填写`86-<手机号码>`的中国内地手机号码。</props>'."\n"
                            ."\n"
                            .'添加手机号码后，您需要继续调用[SendPhoneVerificationForMessageContact](~~SendPhoneVerificationForMessageContact~~)向该手机号码发送验证信息，通过验证后，该联系人的手机号码才能生效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '86-139****1234',
                    ],
                ],
                [
                    'name' => 'Title',
                    'in' => 'query',
                    'schema' => [
                        'description' => '联系人的职位。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'FinanceDirector' => '财务负责人',
                            'TechnicalDirector' => '技术负责人',
                            'MaintenanceDirector' => '运维负责人',
                            'CEO' => 'CEO',
                            'ProjectDirector' => '项目负责人',
                            'Other' => '其它',
                        ],
                        'example' => 'TechnicalDirector',
                    ],
                ],
                [
                    'name' => 'MessageTypes',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '联系人接收的消息分类。',
                        'type' => 'array',
                        'items' => [
                            'description' => '联系人接收的消息分类。',
                            'type' => 'string',
                            'required' => false,
                            'enumValueTitles' => [
                                'ServiceMessage' => '服务消息',
                                'FaultMessage' => '故障消息',
                                'AccountExpenses' => '账号资金消息',
                                'SecurityMessage' => '安全消息',
                                'ActivityMessage' => '活动消息',
                                'ProductMessage' => '产品消息',
                            ],
                            'example' => 'AccountExpenses',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter.Name',
                        'errorMessage' => 'The Name is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Name.Length',
                        'errorMessage' => 'The Name exceeds the length limit.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Name.AlreadyUsed',
                        'errorMessage' => 'The Name already exists. Please change to another name.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.EmailAddress',
                        'errorMessage' => 'The EmailAddress is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.PhoneNumber',
                        'errorMessage' => 'The PhoneNumber is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Title',
                        'errorMessage' => 'The Title is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.MessageTypes',
                        'errorMessage' => 'The MessageTypes is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.MobileCountryCode',
                        'errorMessage' => 'The current site does not support the country code.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.ContactId',
                        'errorMessage' => 'The ContactId is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.ContactId',
                        'errorMessage' => 'You must specify ContactId.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.EmailAddress.Length',
                        'errorMessage' => 'The EmailAddress exceeds the length limit.',
                    ],
                    [
                        'errorCode' => 'ContactStatusMismatchAction',
                        'errorMessage' => 'The status of the contact does not allow the specified operation.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.Contact',
                        'errorMessage' => 'This Contact does not exist.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'ConcurrentCallNotSupported',
                        'errorMessage' => 'The operation conflicts with other operations. Please try again later.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\"\\n}","type":"json"}]',
            'title' => '更新联系人信息',
        ],
        'CancelMessageContactUpdate' => [
            'summary' => '取消更新联系人手机或邮箱。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ContactId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '联系人ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'c-qL4HqKONzOM7****',
                    ],
                ],
                [
                    'name' => 'PhoneNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '联系人的手机号码。'."\n"
                            ."\n"
                            .'格式：`<国家码>-<手机号码>`。'."\n"
                            ."\n"
                            .'<props="china">'."\n"
                            .'> 仅支持填写`86-<手机号码>`的中国内地手机号码。</props>',
                        'type' => 'string',
                        'required' => false,
                        'example' => '86-139****1234',
                    ],
                ],
                [
                    'name' => 'EmailAddress',
                    'in' => 'query',
                    'schema' => [
                        'description' => '联系人的邮箱地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'someone***@example.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MissingParameter.ContactId',
                        'errorMessage' => 'You must specify ContactId.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.ContactId',
                        'errorMessage' => 'The ContactId is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.PhoneNumber',
                        'errorMessage' => 'The PhoneNumber is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.MobileCountryCode',
                        'errorMessage' => 'The current site does not support the country code.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.EmailAddress',
                        'errorMessage' => 'The EmailAddress is invalid.',
                    ],
                    [
                        'errorCode' => 'ContactStatusMismatchAction',
                        'errorMessage' => 'The status of the contact does not allow the specified operation.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.Contact',
                        'errorMessage' => 'This Contact does not exist.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\"\\n}","type":"json"}]',
            'title' => '取消更新联系人手机或邮箱',
        ],
        'PrecheckForConsolidatedBillingAccount' => [
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'BillingAccountId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '管理账号ID或成员ID，该账号将作为财务托管主账号。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '111***089',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9E6B6CA8-9E7A-521F-A743-AA582714727E',
                            ],
                            'Reasons' => [
                                'description' => '检查失败原因。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '检查失败原因。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Code' => [
                                            'description' => '检查失败错误码。',
                                            'type' => 'string',
                                            'example' => 'PaymentAccountEnterpriseInvoiceError',
                                        ],
                                        'Message' => [
                                            'description' => '检查失败错误描述。',
                                            'type' => 'string',
                                            'example' => 'No enterprise invoice header information is set for the payment account.',
                                        ],
                                    ],
                                ],
                            ],
                            'Result' => [
                                'description' => '检查结果。取值：'."\n"
                                    ."\n"
                                    .'- true：检查成功。'."\n"
                                    .'- false：检查失败。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'MemberAccountOperationNotAllowed',
                        'errorMessage' => 'The member account is not allowed to perform the operation.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'EntityNotExists.ResourceDirectory',
                        'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
                    ],
                    [
                        'errorCode' => 'EntityNotExists.Account',
                        'errorMessage' => 'This resource directory account does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9E6B6CA8-9E7A-521F-A743-AA582714727E\\",\\n  \\"Reasons\\": [\\n    {\\n      \\"Code\\": \\"PaymentAccountEnterpriseInvoiceError\\",\\n      \\"Message\\": \\"No enterprise invoice header information is set for the payment account.\\"\\n    }\\n  ],\\n  \\"Result\\": false\\n}","type":"json"}]',
            'title' => '检查账号是否可以作为财务托管主账号',
            'summary' => '检查管理账号或者成员是否可以作为财务托管主账号。',
        ],
        'EnableControlPolicy' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'EnablementStatus' => [
                                'description' => '管控策略状态。取值：'."\n"
                                    ."\n"
                                    .'- Enabled：已开启。'."\n"
                                    .'- PendingEnable：开启中。'."\n"
                                    .'- Disabled：已关闭。'."\n"
                                    .'- PendingDisable：关闭中。',
                                'type' => 'string',
                                'example' => 'PendingEnable',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '8CE7BD95-EFFA-4911-A1E0-BD4412697FEB',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                409 => [
                    [
                        'errorCode' => 'Throttling.EnableControlPolicy',
                        'errorMessage' => 'The enable operation is too frequent. Please try again in %s minute(s).',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"EnablementStatus\\": \\"PendingEnable\\",\\n  \\"RequestId\\": \\"8CE7BD95-EFFA-4911-A1E0-BD4412697FEB\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<EnableControlPolicyResponse>\\r\\n\\t<EnablementStatus>PendingEnable</EnablementStatus>\\r\\n\\t<RequestId>8CE7BD95-EFFA-4911-A1E0-BD4412697FEB</RequestId>\\r\\n</EnableControlPolicyResponse>","errorExample":""}]',
            'title' => '开启管控策略',
            'summary' => '调用EnableControlPolicy开启管控策略功能。',
            'description' => '资源目录管控策略是一种基于资源结构（资源夹或成员账号）的访问控制策略，可以统一管理资源目录各层级内资源访问的权限边界，建立企业整体访问控制原则或局部专用原则。管控策略只定义权限边界，并不真正授予权限，您还需要在某个成员账号中使用访问控制（RAM）设置权限后，相应身份才具备对资源的访问权限。更多信息，请参见[管控策略概述](~~178671~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DisableControlPolicy' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'EnablementStatus' => [
                                'description' => '管控策略状态。取值：'."\n"
                                    ."\n"
                                    .'- Enabled：已开启。'."\n"
                                    .'- PendingEnable：开启中。'."\n"
                                    .'- Disabled：已关闭。'."\n"
                                    .'- PendingDisable：关闭中。',
                                'type' => 'string',
                                'example' => 'PendingDisable',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '7C709979-451D-4C92-835D-7DDCCAA562E9',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"EnablementStatus\\": \\"PendingDisable\\",\\n  \\"RequestId\\": \\"7C709979-451D-4C92-835D-7DDCCAA562E9\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DisableControlPolicyResponse>\\r\\n\\t<EnablementStatus>PendingDisable</EnablementStatus>\\r\\n\\t<RequestId>7C709979-451D-4C92-835D-7DDCCAA562E9</RequestId>\\r\\n</DisableControlPolicyResponse>\\t\\r\\n","errorExample":""}]',
            'title' => '关闭管控策略',
            'summary' => '调用DisableControlPolicy关闭管控策略功能。',
            'description' => '关闭管控策略功能后，您绑定到资源夹和成员账号上的管控策略会全部自动解绑。但管控策略本身不会被删除，只是不能再绑定到任何目标节点上。'."\n"
                ."\n"
                .'> 关闭管控策略将会影响整个资源目录内资源夹和成员账号的权限，请谨慎操作。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetControlPolicyEnablementStatus' => [
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
                'operationType' => 'get',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'EnablementStatus' => [
                                'description' => '管控策略状态。取值：'."\n"
                                    ."\n"
                                    .'- Enabled：已开启。'."\n"
                                    .'- PendingEnable：开启中。'."\n"
                                    .'- Disabled：已关闭。'."\n"
                                    .'- PendingDisable：关闭中。',
                                'type' => 'string',
                                'example' => 'Disabled',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1DC39A4E-3B52-4EFE-9F93-4897D7FFA0C4',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"EnablementStatus\\": \\"Disabled\\",\\n  \\"RequestId\\": \\"1DC39A4E-3B52-4EFE-9F93-4897D7FFA0C4\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<GetControlPolicyEnablementStatusResponse>\\r\\n\\t<EnablementStatus>Disabled</EnablementStatus>\\r\\n\\t<RequestId>1DC39A4E-3B52-4EFE-9F93-4897D7FFA0C4</RequestId>\\r\\n</GetControlPolicyEnablementStatusResponse>","errorExample":""}]',
            'title' => '查询管控策略功能的状态',
            'summary' => '调用GetControlPolicyEnablementStatus查询管控策略功能的开启或关闭状态。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateControlPolicy' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'PolicyName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '管控策略名称。'."\n"
                            ."\n"
                            .'长度为1~128个字符，必须以英文字母开头，可以包含英文字母、数字和短划线（-）。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ExampleControlPolicy',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '管控策略描述。'."\n"
                            ."\n"
                            .'长度为1~1024个字符，必须以英文字母开头，可以包含英文字母、数字、下划线（_）和短划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ExampleControlPolicy',
                    ],
                ],
                [
                    'name' => 'EffectScope',
                    'in' => 'query',
                    'schema' => [
                        'description' => '管控策略的生效范围。'."\n"
                            ."\n"
                            .'取值：RAM，表示该管控策略仅针对RAM用户或RAM角色生效。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'RAM',
                    ],
                ],
                [
                    'name' => 'PolicyDocument',
                    'in' => 'query',
                    'schema' => [
                        'description' => '管控策略内容。'."\n"
                            ."\n"
                            .'最大长度为4096个字符。'."\n"
                            ."\n"
                            .'管控策略语言，请参见[管控策略语言](~~179096~~)。'."\n"
                            ."\n"
                            .'管控策略示例，请参见[自定义管控策略示例](~~181474~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '{"Version":"1","Statement":[{"Effect":"Deny","Action":["ram:UpdateRole","ram:DeleteRole","ram:AttachPolicyToRole","ram:DetachPolicyFromRole"],"Resource":"acs:ram:*:*:role/ResourceDirectoryAccountAccessRole"}]}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'ControlPolicy' => [
                                'description' => '管控策略详情。',
                                'type' => 'object',
                                'properties' => [
                                    'UpdateDate' => [
                                        'description' => '管控策略更新时间。',
                                        'type' => 'string',
                                        'example' => '2021-03-18T09:24:19Z',
                                    ],
                                    'Description' => [
                                        'description' => '管控策略描述。',
                                        'type' => 'string',
                                        'example' => 'ExampleControlPolicy',
                                    ],
                                    'EffectScope' => [
                                        'description' => '管控策略生效范围。'."\n"
                                            ."\n\n"
                                            .'取值：RAM，表示该管控策略仅针对RAM用户或RAM角色生效。',
                                        'type' => 'string',
                                        'example' => 'RAM',
                                    ],
                                    'AttachmentCount' => [
                                        'description' => '管控策略被引用的次数。',
                                        'type' => 'string',
                                        'example' => '0',
                                    ],
                                    'PolicyName' => [
                                        'description' => '管控策略名称。',
                                        'type' => 'string',
                                        'example' => 'ExampleControlPolicy',
                                    ],
                                    'PolicyId' => [
                                        'description' => '管控策略ID。',
                                        'type' => 'string',
                                        'example' => 'cp-jExXAqIYkwHN****',
                                    ],
                                    'CreateDate' => [
                                        'description' => '管控策略创建时间。',
                                        'type' => 'string',
                                        'example' => '2021-03-18T09:24:19Z',
                                    ],
                                    'PolicyType' => [
                                        'description' => '管控策略类型。取值：'."\n"
                                            ."\n"
                                            .'- System：系统管控策略。'."\n"
                                            .'- Custom：自定义管控策略。',
                                        'type' => 'string',
                                        'example' => 'Custom',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '776B05B3-A0B0-464B-A191-F4E1119A94B2',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                409 => [
                    [
                        'errorCode' => 'InvalidParameter.PolicyDocument.Length',
                        'errorMessage' => 'The maximum length of the policy document is exceeded. It must not exceed 4096 characters.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"ControlPolicy\\": {\\n    \\"UpdateDate\\": \\"2021-03-18T09:24:19Z\\",\\n    \\"Description\\": \\"ExampleControlPolicy\\",\\n    \\"EffectScope\\": \\"RAM\\",\\n    \\"AttachmentCount\\": \\"0\\",\\n    \\"PolicyName\\": \\"ExampleControlPolicy\\",\\n    \\"PolicyId\\": \\"cp-jExXAqIYkwHN****\\",\\n    \\"CreateDate\\": \\"2021-03-18T09:24:19Z\\",\\n    \\"PolicyType\\": \\"Custom\\"\\n  },\\n  \\"RequestId\\": \\"776B05B3-A0B0-464B-A191-F4E1119A94B2\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<CreateControlPolicyResponse>\\r\\n\\t<ControlPolicy>\\r\\n\\t\\t<PolicyType>Custom</PolicyType>\\r\\n\\t\\t<UpdateDate>2021-03-18T09:24:19Z</UpdateDate>\\r\\n\\t\\t<Description>ExampleControlPolicy</Description>\\r\\n\\t\\t<AttachmentCount>0</AttachmentCount>\\r\\n\\t\\t<PolicyName>ExampleControlPolicy</PolicyName>\\r\\n\\t\\t<CreateDate>2021-03-18T09:24:19Z</CreateDate>\\r\\n\\t\\t<PolicyId>cp-jExXAqIYkwHN****</PolicyId>\\r\\n\\t\\t<EffectScope>RAM</EffectScope>\\r\\n\\t</ControlPolicy>\\r\\n\\t<RequestId>776B05B3-A0B0-464B-A191-F4E1119A94B2</RequestId>\\r\\n</CreateControlPolicyResponse>\\t\\r\\n","errorExample":""}]',
            'title' => '创建管控策略',
            'summary' => '调用CreateControlPolicy创建自定义管控策略。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetControlPolicy' => [
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PolicyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '管控策略ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cp-SImPt8GCEwiq****',
                    ],
                ],
                [
                    'name' => 'Language',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定返回结果中管控策略描述的语言。取值：'."\n"
                            ."\n"
                            .'- zh-CN（默认值）：中文。'."\n"
                            .'- en：英文。'."\n"
                            .'- ja：日文。'."\n"
                            ."\n"
                            .'> 该参数仅在系统管控策略时有效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh-CN',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'ControlPolicy' => [
                                'description' => '管控策略详情。',
                                'type' => 'object',
                                'properties' => [
                                    'PolicyDocument' => [
                                        'description' => '管控策略内容。',
                                        'type' => 'string',
                                        'example' => '{\\"Version\\":\\"1\\",\\"Statement\\":[{\\"Effect\\":\\"Deny\\",\\"Action\\":[\\"ram:UpdateRole\\",\\"ram:DeleteRole\\",\\"ram:AttachPolicyToRole\\",\\"ram:DetachPolicyFromRole\\"],\\"Resource\\":\\"acs:ram:*:*:role/ResourceDirectoryAccountAccessRole\\"}]}',
                                    ],
                                    'UpdateDate' => [
                                        'description' => '管控策略更新时间。',
                                        'type' => 'string',
                                        'example' => '2021-03-18T08:51:33Z',
                                    ],
                                    'Description' => [
                                        'description' => '管控策略描述。',
                                        'type' => 'string',
                                        'example' => 'ExampleControlPolicy',
                                    ],
                                    'EffectScope' => [
                                        'description' => '管控策略生效范围。取值：'."\n"
                                            ."\n"
                                            .'- All：表示该管控策略针对阿里云账号、RAM用户或RAM角色生效。'."\n"
                                            .'- RAM：表示该管控策略仅针对RAM用户或RAM角色生效。',
                                        'type' => 'string',
                                        'example' => 'RAM',
                                    ],
                                    'AttachmentCount' => [
                                        'description' => '管控策略被引用的次数。',
                                        'type' => 'string',
                                        'example' => '0',
                                    ],
                                    'PolicyName' => [
                                        'description' => '管控策略名称。',
                                        'type' => 'string',
                                        'example' => 'test',
                                    ],
                                    'PolicyId' => [
                                        'description' => '管控策略ID。',
                                        'type' => 'string',
                                        'example' => 'cp-SImPt8GCEwiq****',
                                    ],
                                    'CreateDate' => [
                                        'description' => '管控策略创建时间。',
                                        'type' => 'string',
                                        'example' => '2021-03-18T08:51:33Z',
                                    ],
                                    'PolicyType' => [
                                        'description' => '管控策略类型。取值：'."\n"
                                            ."\n"
                                            .'- System：系统管控策略。'."\n"
                                            .'- Custom：自定义管控策略。',
                                        'type' => 'string',
                                        'example' => 'Custom',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'AB769936-CDFA-4D52-8CE2-A3581800044A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"ControlPolicy\\": {\\n    \\"PolicyDocument\\": \\"{\\\\\\\\\\\\\\"Version\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"1\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"Statement\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"Effect\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"Deny\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"Action\\\\\\\\\\\\\\":[\\\\\\\\\\\\\\"ram:UpdateRole\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"ram:DeleteRole\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"ram:AttachPolicyToRole\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"ram:DetachPolicyFromRole\\\\\\\\\\\\\\"],\\\\\\\\\\\\\\"Resource\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"acs:ram:*:*:role/ResourceDirectoryAccountAccessRole\\\\\\\\\\\\\\"}]}\\",\\n    \\"UpdateDate\\": \\"2021-03-18T08:51:33Z\\",\\n    \\"Description\\": \\"ExampleControlPolicy\\",\\n    \\"EffectScope\\": \\"RAM\\",\\n    \\"AttachmentCount\\": \\"0\\",\\n    \\"PolicyName\\": \\"test\\",\\n    \\"PolicyId\\": \\"cp-SImPt8GCEwiq****\\",\\n    \\"CreateDate\\": \\"2021-03-18T08:51:33Z\\",\\n    \\"PolicyType\\": \\"Custom\\"\\n  },\\n  \\"RequestId\\": \\"AB769936-CDFA-4D52-8CE2-A3581800044A\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<GetControlPolicyResponse>\\r\\n\\t<ControlPolicy>\\r\\n\\t\\t<PolicyType>Custom</PolicyType>\\r\\n\\t\\t<UpdateDate>2021-03-18T08:51:33Z</UpdateDate>\\r\\n\\t\\t<Description>ExampleControlPolicy</Description>\\r\\n\\t\\t<AttachmentCount>0</AttachmentCount>\\r\\n\\t\\t<PolicyName>test</PolicyName>\\r\\n\\t\\t<PolicyDocument>{&quot;Version&quot;:&quot;1&quot;,&quot;Statement&quot;:[{&quot;Effect&quot;:&quot;Deny&quot;,&quot;Action&quot;:[&quot;ram:UpdateRole&quot;,&quot;ram:DeleteRole&quot;,&quot;ram:AttachPolicyToRole&quot;,&quot;ram:DetachPolicyFromRole&quot;],&quot;Resource&quot;:&quot;acs:ram:*:*:role/ResourceDirectoryAccountAccessRole&quot;}]}</PolicyDocument>\\r\\n\\t\\t<CreateDate>2021-03-18T08:51:33Z</CreateDate>\\r\\n\\t\\t<PolicyId>cp-SImPt8GCEwiq****</PolicyId>\\r\\n\\t\\t<EffectScope>RAM</EffectScope>\\r\\n\\t</ControlPolicy>\\r\\n\\t<RequestId>AB769936-CDFA-4D52-8CE2-A3581800044A</RequestId>\\r\\n</GetControlPolicyResponse>\\t\\r\\n","errorExample":""}]',
            'title' => '查询管控策略的详情',
            'summary' => '调用GetControlPolicy查询管控策略的详情。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListControlPolicies' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'PolicyType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '管控策略类型。取值：'."\n"
                            ."\n"
                            .'- System：系统管控策略。'."\n"
                            .'- Custom：自定义管控策略。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'System',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码。'."\n"
                            ."\n"
                            .'起始值：1。默认值：1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '200000',
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页时每页显示的数据条数。'."\n"
                            ."\n"
                            .'取值范围：1~100。默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'Language',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定返回结果中管控策略描述的语言。取值：'."\n"
                            ."\n"
                            .'- zh-CN（默认值）：中文。'."\n"
                            .'- en：英文。'."\n"
                            .'- ja：日文。'."\n"
                            ."\n"
                            .'> 该参数仅在系统管控策略时有效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh-CN',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '管控策略数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9424A34C-3471-45AD-B6AB-924BBDFE42F9',
                            ],
                            'PageSize' => [
                                'description' => '分页时每页显示的数据条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'PageNumber' => [
                                'description' => '页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'ControlPolicies' => [
                                'type' => 'object',
                                'properties' => [
                                    'ControlPolicy' => [
                                        'description' => '管控策略列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '管控策略列表。',
                                            'type' => 'object',
                                            'properties' => [
                                                'UpdateDate' => [
                                                    'description' => '管控策略更新时间。',
                                                    'type' => 'string',
                                                    'example' => '2020-08-05T06:32:24Z',
                                                ],
                                                'Description' => [
                                                    'description' => '管控策略描述。',
                                                    'type' => 'string',
                                                    'example' => '支持阿里云所有操作的系统管控策略',
                                                ],
                                                'EffectScope' => [
                                                    'description' => '管控策略生效范围。取值：'."\n"
                                                        ."\n"
                                                        .'- All：表示该管控策略针对阿里云账号、RAM用户或RAM角色生效。'."\n"
                                                        .'- RAM：表示该管控策略仅针对RAM用户或RAM角色生效。'."\n",
                                                    'type' => 'string',
                                                    'example' => 'All',
                                                ],
                                                'AttachmentCount' => [
                                                    'description' => '管控策略被引用的次数。',
                                                    'type' => 'string',
                                                    'example' => '44',
                                                ],
                                                'PolicyName' => [
                                                    'description' => '管控策略名称。',
                                                    'type' => 'string',
                                                    'example' => 'FullAliyunAccess',
                                                ],
                                                'PolicyId' => [
                                                    'description' => '管控策略ID。',
                                                    'type' => 'string',
                                                    'example' => 'cp-FullAliyunAccess',
                                                ],
                                                'CreateDate' => [
                                                    'description' => '管控策略创建时间。',
                                                    'type' => 'string',
                                                    'example' => '2020-08-05T06:32:24Z',
                                                ],
                                                'PolicyType' => [
                                                    'description' => '管控策略类型。取值：'."\n"
                                                        ."\n"
                                                        .'- System：系统管控策略。'."\n"
                                                        .'- Custom：自定义管控策略。',
                                                    'type' => 'string',
                                                    'example' => 'System',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"9424A34C-3471-45AD-B6AB-924BBDFE42F9\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"ControlPolicies\\": {\\n    \\"ControlPolicy\\": [\\n      {\\n        \\"UpdateDate\\": \\"2020-08-05T06:32:24Z\\",\\n        \\"Description\\": \\"支持阿里云所有操作的系统管控策略\\",\\n        \\"EffectScope\\": \\"All\\",\\n        \\"AttachmentCount\\": \\"44\\",\\n        \\"PolicyName\\": \\"FullAliyunAccess\\",\\n        \\"PolicyId\\": \\"cp-FullAliyunAccess\\",\\n        \\"CreateDate\\": \\"2020-08-05T06:32:24Z\\",\\n        \\"PolicyType\\": \\"System\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ListControlPoliciesResponse>\\r\\n\\t<TotalCount>1</TotalCount>\\r\\n\\t<RequestId>9424A34C-3471-45AD-B6AB-924BBDFE42F9</RequestId>\\r\\n\\t<PageSize>10</PageSize>\\r\\n\\t<PageNumber>1</PageNumber>\\r\\n\\t<ControlPolicies>\\r\\n\\t\\t<ControlPolicy>\\r\\n\\t\\t\\t<PolicyType>System</PolicyType>\\r\\n\\t\\t\\t<UpdateDate>2020-08-05T06:32:24Z</UpdateDate>\\r\\n\\t\\t\\t<Description>支持阿里云所有操作的系统管控策略</Description>\\r\\n\\t\\t\\t<AttachmentCount>44</AttachmentCount>\\r\\n\\t\\t\\t<PolicyName>FullAliyunAccess</PolicyName>\\r\\n\\t\\t\\t<CreateDate>2020-08-05T06:32:24Z</CreateDate>\\r\\n\\t\\t\\t<PolicyId>cp-FullAliyunAccess</PolicyId>\\r\\n\\t\\t\\t<EffectScope>All</EffectScope>\\r\\n\\t\\t</ControlPolicy>\\r\\n\\t</ControlPolicies>\\r\\n</ListControlPoliciesResponse>\\t\\r\\n","errorExample":""}]',
            'title' => '查询管控策略列表',
            'summary' => '调用ListControlPolicies查询管控策略列表。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateControlPolicy' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'PolicyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '管控策略ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cp-jExXAqIYkwHN****',
                    ],
                ],
                [
                    'name' => 'NewPolicyName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新的管控策略名称。'."\n"
                            ."\n"
                            .'长度为1~128个字符，必须以英文字母开头，可以包含英文字母、数字和短划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'NewControlPolicy',
                    ],
                ],
                [
                    'name' => 'NewDescription',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新的管控策略描述。'."\n"
                            ."\n"
                            .'长度为1~1024个字符，必须以英文字母开头，可以包含英文字母、数字、下划线（_）和短划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ExampleControlPolicy',
                    ],
                ],
                [
                    'name' => 'NewPolicyDocument',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新的管控策略内容。'."\n"
                            ."\n"
                            .'最大长度为4096个字符。'."\n"
                            ."\n"
                            .'管控策略语言，请参见[管控策略语言](~~179096~~)。'."\n"
                            ."\n"
                            .'管控策略示例，请参见[自定义管控策略示例](~~181474~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"Version":"1","Statement":[{"Effect":"Deny","Action":["ram:UpdateRole","ram:DeleteRole","ram:AttachPolicyToRole","ram:DetachPolicyFromRole"],"Resource":"acs:ram:*:*:role/ResourceDirectoryAccountAccessRole"}]}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'ControlPolicy' => [
                                'description' => '管控策略详情。',
                                'type' => 'object',
                                'properties' => [
                                    'UpdateDate' => [
                                        'description' => '管控策略更新时间。',
                                        'type' => 'string',
                                        'example' => '2021-03-18T10:04:55Z',
                                    ],
                                    'Description' => [
                                        'description' => '管控策略描述。',
                                        'type' => 'string',
                                        'example' => 'ExampleControlPolicy',
                                    ],
                                    'EffectScope' => [
                                        'description' => '管控策略生效范围。取值：'."\n"
                                            ."\n"
                                            .'- All：表示该管控策略针对阿里云账号、RAM用户或RAM角色生效。'."\n"
                                            .'- RAM：表示该管控策略仅针对RAM用户或RAM角色生效。',
                                        'type' => 'string',
                                        'example' => 'RAM',
                                    ],
                                    'AttachmentCount' => [
                                        'description' => '管控策略被引用的次数。',
                                        'type' => 'string',
                                        'example' => '0',
                                    ],
                                    'PolicyName' => [
                                        'description' => '管控策略名称。',
                                        'type' => 'string',
                                        'example' => 'NewControlPolicy',
                                    ],
                                    'PolicyId' => [
                                        'description' => '管控策略ID。',
                                        'type' => 'string',
                                        'example' => 'cp-jExXAqIYkwHN****',
                                    ],
                                    'CreateDate' => [
                                        'description' => '管控策略创建时间。',
                                        'type' => 'string',
                                        'example' => '2021-03-18T09:24:19Z',
                                    ],
                                    'PolicyType' => [
                                        'description' => '管控策略类型。取值：'."\n"
                                            ."\n"
                                            .'- System：系统管控策略。'."\n"
                                            .'- Custom：自定义管控策略。',
                                        'type' => 'string',
                                        'example' => 'Custom',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '2DFCE4C9-04A9-4C83-BB14-FE791275EC53',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter.NewPolicyDocument.Length',
                        'errorMessage' => 'Unable to save your policy. A policy contains a maximum of 4096 characters.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"ControlPolicy\\": {\\n    \\"UpdateDate\\": \\"2021-03-18T10:04:55Z\\",\\n    \\"Description\\": \\"ExampleControlPolicy\\",\\n    \\"EffectScope\\": \\"RAM\\",\\n    \\"AttachmentCount\\": \\"0\\",\\n    \\"PolicyName\\": \\"NewControlPolicy\\",\\n    \\"PolicyId\\": \\"cp-jExXAqIYkwHN****\\",\\n    \\"CreateDate\\": \\"2021-03-18T09:24:19Z\\",\\n    \\"PolicyType\\": \\"Custom\\"\\n  },\\n  \\"RequestId\\": \\"2DFCE4C9-04A9-4C83-BB14-FE791275EC53\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<UpdateControlPolicyResponse>\\r\\n\\t<ControlPolicy>\\r\\n\\t\\t<PolicyType>Custom</PolicyType>\\r\\n\\t\\t<UpdateDate>2021-03-18T10:04:55Z</UpdateDate>\\r\\n\\t\\t<Description>ExampleControlPolicy</Description>\\r\\n\\t\\t<AttachmentCount>0</AttachmentCount>\\r\\n\\t\\t<PolicyName>NewControlPolicy</PolicyName>\\r\\n\\t\\t<CreateDate>2021-03-18T09:24:19Z</CreateDate>\\r\\n\\t\\t<PolicyId>cp-jExXAqIYkwHN****</PolicyId>\\r\\n\\t\\t<EffectScope>RAM</EffectScope>\\r\\n\\t</ControlPolicy>\\r\\n\\t<RequestId>2DFCE4C9-04A9-4C83-BB14-FE791275EC53</RequestId>\\r\\n</UpdateControlPolicyResponse>\\t\\r\\n","errorExample":""}]',
            'title' => '修改自定义管控策略',
            'summary' => '调用UpdateControlPolicy修改自定义管控策略。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteControlPolicy' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'PolicyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '管控策略ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cp-SImPt8GCEwiq****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C8541E06-B207-46BF-92C9-DC8DE4609D75',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C8541E06-B207-46BF-92C9-DC8DE4609D75\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DeleteControlPolicyResponse>\\r\\n\\t<RequestId>C8541E06-B207-46BF-92C9-DC8DE4609D75</RequestId>\\r\\n</DeleteControlPolicyResponse>\\t\\r\\n","errorExample":""}]',
            'title' => '删除管控策略',
            'summary' => '调用DeleteControlPolicy删除自定义管控策略。',
            'description' => '对于已绑定了资源夹或成员账号的自定义管控策略，需要先调用[DetachControlPolicy](~~DetachControlPolicy~~)解绑，然后才能删除。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'AttachControlPolicy' => [
            'summary' => '调用AttachControlPolicy绑定管控策略。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'PolicyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '管控策略ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cp-jExXAqIYkwHN****',
                    ],
                ],
                [
                    'name' => 'TargetId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标节点。取值：'."\n"
                            ."\n"
                            .'- Root ID：为Root资源夹绑定管控策略。'."\n"
                            .'- 资源夹ID：为资源夹绑定管控策略。'."\n"
                            .'- 成员ID：为成员绑定管控策略。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fd-ZDNPiT****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '95060F1D-6990-4645-8920-A81D1BBFE992',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.Target',
                        'errorMessage' => 'The specified target does not exist in the resource directory.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"95060F1D-6990-4645-8920-A81D1BBFE992\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<AttachControlPolicyResponse>\\r\\n\\t<RequestId>95060F1D-6990-4645-8920-A81D1BBFE992</RequestId>\\r\\n</AttachControlPolicyResponse>","errorExample":""}]',
            'title' => '绑定管控策略',
            'description' => '绑定成功后，资源夹或成员将会立即受到管控策略的管控。请务必确定绑定操作的结果是符合预期的，以免影响您的业务正常运行。'."\n"
                ."\n"
                .'系统会默认为资源夹和成员绑定系统策略FullAliyunAccess。'."\n"
                ."\n"
                .'管控策略在绑定节点下整体生效，即父资源夹绑定的管控策略，会在其子资源夹及其成员上生效。'."\n"
                ."\n"
                .'每个节点（资源夹、成员）最多允许绑定10条管控策略。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DetachControlPolicy' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'PolicyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '管控策略ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cp-jExXAqIYkwHN****',
                    ],
                ],
                [
                    'name' => 'TargetId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标节点。取值：'."\n"
                            ."\n"
                            .'- Root ID：为Root资源夹解绑管控策略。'."\n"
                            .'- 资源夹ID：为资源夹解绑管控策略。'."\n"
                            .'- 成员ID：为成员解绑管控策略。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fd-ZDNPiT****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9EA4F962-1A2E-4AFE-BE0C-B14736FC46CC',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'NotSupport.DetachLastControlPolicy',
                        'errorMessage' => 'It is not detach the last control policy on the target node.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.Target',
                        'errorMessage' => 'The specified target does not exist in the resource directory.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9EA4F962-1A2E-4AFE-BE0C-B14736FC46CC\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DetachControlPolicyResponse>\\r\\n\\t<RequestId>9EA4F962-1A2E-4AFE-BE0C-B14736FC46CC</RequestId>\\r\\n</DetachControlPolicyResponse>\\t\\r\\n","errorExample":""}]',
            'title' => '解绑管控策略',
            'summary' => '调用DetachControlPolicy解绑管控策略。',
            'description' => '解绑成功后，原绑定的资源夹或成员将会立即失去管控策略的管控。请务必确定解绑操作的结果是符合预期的，以免影响您的业务正常运行。'."\n"
                ."\n"
                .'系统策略和自定义管控策略都可以解绑，但资源夹或成员上绑定的最后一条管控策略不允许解绑。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListControlPolicyAttachmentsForTarget' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'TargetId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标节点。取值：'."\n"
                            ."\n"
                            .'- Root ID：查询Root节点绑定的管控策略。'."\n"
                            .'- 资源夹ID：查询资源夹绑定的管控策略。'."\n"
                            .'- 成员ID：查询成员绑定的管控策略。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fd-ZDNPiT****',
                    ],
                ],
                [
                    'name' => 'Language',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定返回结果中管控策略描述的语言。取值：'."\n"
                            ."\n"
                            .'- zh-CN（默认值）：中文。'."\n"
                            .'- en：英文。'."\n"
                            .'- ja：日文。'."\n"
                            ."\n"
                            .'> 该参数仅在系统管控策略时有效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh-CN',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C276B600-7B7A-49E8-938C-E16CFA955A82',
                            ],
                            'ControlPolicyAttachments' => [
                                'type' => 'object',
                                'properties' => [
                                    'ControlPolicyAttachment' => [
                                        'description' => '已绑定的管控策略列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '已绑定的管控策略列表。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Description' => [
                                                    'description' => '管控策略描述。',
                                                    'type' => 'string',
                                                    'example' => 'ExampleControlPolicy',
                                                ],
                                                'EffectScope' => [
                                                    'description' => '管控策略生效范围。取值：'."\n"
                                                        ."\n"
                                                        .'- All：表示该管控策略针对阿里云账号、RAM用户或RAM角色生效。'."\n"
                                                        .'- RAM：表示该管控策略仅针对RAM用户或RAM角色生效。',
                                                    'type' => 'string',
                                                    'example' => 'RAM',
                                                ],
                                                'PolicyName' => [
                                                    'description' => '管控策略名称。',
                                                    'type' => 'string',
                                                    'example' => 'ExampleControlPolicy',
                                                ],
                                                'PolicyId' => [
                                                    'description' => '管控策略ID。',
                                                    'type' => 'string',
                                                    'example' => 'cp-jExXAqIYkwHN****',
                                                ],
                                                'AttachDate' => [
                                                    'description' => '绑定管控策略的时间。',
                                                    'type' => 'string',
                                                    'example' => '2021-03-19T02:56:24Z',
                                                ],
                                                'PolicyType' => [
                                                    'description' => '管控策略类型。取值：'."\n"
                                                        ."\n"
                                                        .'- System：系统管控策略。'."\n"
                                                        .'- Custom：自定义管控策略。',
                                                    'type' => 'string',
                                                    'example' => 'Custom',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.Target',
                        'errorMessage' => 'The specified target does not exist in the resource directory.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C276B600-7B7A-49E8-938C-E16CFA955A82\\",\\n  \\"ControlPolicyAttachments\\": {\\n    \\"ControlPolicyAttachment\\": [\\n      {\\n        \\"Description\\": \\"ExampleControlPolicy\\",\\n        \\"EffectScope\\": \\"RAM\\",\\n        \\"PolicyName\\": \\"ExampleControlPolicy\\",\\n        \\"PolicyId\\": \\"cp-jExXAqIYkwHN****\\",\\n        \\"AttachDate\\": \\"2021-03-19T02:56:24Z\\",\\n        \\"PolicyType\\": \\"Custom\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ListControlPolicyAttachmentsForTargetResponse>\\r\\n\\t<RequestId>C276B600-7B7A-49E8-938C-E16CFA955A82</RequestId>\\r\\n\\t<ControlPolicyAttachments>\\r\\n\\t\\t<ControlPolicyAttachment>\\r\\n\\t\\t\\t<PolicyType>System</PolicyType>\\r\\n\\t\\t\\t<Description>支持阿里云所有操作的系统管控策略</Description>\\r\\n\\t\\t\\t<AttachDate>2021-03-18T07:27:59Z</AttachDate>\\r\\n\\t\\t\\t<PolicyName>FullAliyunAccess</PolicyName>\\r\\n\\t\\t\\t<PolicyId>cp-FullAliyunAccess</PolicyId>\\r\\n\\t\\t</ControlPolicyAttachment>\\r\\n\\t\\t<ControlPolicyAttachment>\\r\\n\\t\\t\\t<PolicyType>Custom</PolicyType>\\r\\n\\t\\t\\t<Description>ExampleControlPolicy</Description>\\r\\n\\t\\t\\t<AttachDate>2021-03-19T02:56:24Z</AttachDate>\\r\\n\\t\\t\\t<PolicyName>ExampleControlPolicy</PolicyName>\\r\\n\\t\\t\\t<PolicyId>cp-jExXAqIYkwHN****</PolicyId>\\r\\n\\t\\t</ControlPolicyAttachment>\\r\\n\\t</ControlPolicyAttachments>\\r\\n</ListControlPolicyAttachmentsForTargetResponse>\\t\\r\\n","errorExample":""}]',
            'title' => '查询资源夹或成员绑定的管控策略列表',
            'summary' => '调用ListControlPolicyAttachmentsForTarget查询资源夹或成员绑定的管控策略列表。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListTargetAttachmentsForControlPolicy' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'PolicyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '管控策略ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cp-jExXAqIYkwHN****',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码。'."\n"
                            ."\n"
                            .'起始值：1。默认值：1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '200000',
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页时每页显示的数据条数。'."\n"
                            ."\n"
                            .'取值范围：1~100。默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '绑定的目标节点数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'B32BD3D6-1089-41F3-8E70-E0079BC7D760',
                            ],
                            'PageSize' => [
                                'description' => '分页时每页显示的数据条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'PageNumber' => [
                                'description' => '页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'TargetAttachments' => [
                                'type' => 'object',
                                'properties' => [
                                    'TargetAttachment' => [
                                        'description' => '绑定的目标节点列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '绑定的目标节点列表。',
                                            'type' => 'object',
                                            'properties' => [
                                                'TargetId' => [
                                                    'description' => '绑定的目标节点ID。',
                                                    'type' => 'string',
                                                    'example' => 'fd-ZDNPiT****',
                                                ],
                                                'TargetName' => [
                                                    'description' => '绑定的目标节点名称。',
                                                    'type' => 'string',
                                                    'example' => 'Dev_Department',
                                                ],
                                                'AttachDate' => [
                                                    'description' => '管控策略绑定时间。',
                                                    'type' => 'string',
                                                    'example' => '2021-03-19T02:56:24Z',
                                                ],
                                                'TargetType' => [
                                                    'description' => '绑定的目标节点类型。取值：'."\n"
                                                        ."\n"
                                                        .'- Root：Root节点。'."\n"
                                                        .'- Folder：资源夹。'."\n"
                                                        .'- Account：成员账号。',
                                                    'type' => 'string',
                                                    'example' => 'Folder',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"B32BD3D6-1089-41F3-8E70-E0079BC7D760\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"TargetAttachments\\": {\\n    \\"TargetAttachment\\": [\\n      {\\n        \\"TargetId\\": \\"fd-ZDNPiT****\\",\\n        \\"TargetName\\": \\"Dev_Department\\",\\n        \\"AttachDate\\": \\"2021-03-19T02:56:24Z\\",\\n        \\"TargetType\\": \\"Folder\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ListTargetAttachmentsForControlPolicyResponse>\\r\\n\\t<TotalCount>1</TotalCount>\\r\\n\\t<RequestId>B32BD3D6-1089-41F3-8E70-E0079BC7D760</RequestId>\\r\\n\\t<PageSize>10</PageSize>\\r\\n\\t<PageNumber>1</PageNumber>\\r\\n\\t<TargetAttachments>\\r\\n\\t\\t<TargetAttachment>\\r\\n\\t\\t\\t<AttachDate>2021-03-19T02:56:24Z</AttachDate>\\r\\n\\t\\t\\t<TargetType>Folder</TargetType>\\r\\n\\t\\t\\t<TargetName>Dev_Department</TargetName>\\r\\n\\t\\t\\t<TargetId>fd-ZDNPiT****</TargetId>\\r\\n\\t\\t</TargetAttachment>\\r\\n\\t</TargetAttachments>\\r\\n</ListTargetAttachmentsForControlPolicyResponse>\\t\\r\\n\\r\\n\\t\\r\\n","errorExample":""}]',
            'title' => '查询管控策略绑定的目标节点',
            'summary' => '调用ListTargetAttachmentsForControlPolicy查询管控策略绑定的目标节点。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListTrustedServiceStatus' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码。'."\n"
                            ."\n"
                            .'起始值：1。默认值：1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页时每页显示的数据行数。'."\n"
                            ."\n"
                            .'取值范围：1~100。默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'AdminAccountId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '企业管理账号或委派管理员账号。取值：'."\n"
                            .'- 企业管理账号（默认值）：查询企业管理账号已启用的可信服务列表。'."\n"
                            .'- 委派管理员账号：查询委派管理员账号已启用的可信服务列表。'."\n"
                            ."\n"
                            .'关于可信服务和委派管理员的更多信息，请参见[可信服务概述](~~208133~~)和[管理委派管理员账号](~~208117~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '177242285274****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '数据总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CD76D376-2517-4924-92C5-DBC52262F93A',
                            ],
                            'PageSize' => [
                                'description' => '分页时每页显示的数据行数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'PageNumber' => [
                                'description' => '页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'EnabledServicePrincipals' => [
                                'type' => 'object',
                                'properties' => [
                                    'EnabledServicePrincipal' => [
                                        'description' => '已启用的可信服务列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '已启用的可信服务列表。',
                                            'type' => 'object',
                                            'properties' => [
                                                'ServicePrincipal' => [
                                                    'description' => '可信服务标识。',
                                                    'type' => 'string',
                                                    'example' => 'config.aliyuncs.com',
                                                ],
                                                'EnableTime' => [
                                                    'description' => '启用可信服务的时间。',
                                                    'type' => 'string',
                                                    'example' => '2019-02-18T15:32:10.473Z',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.ResourceDirectory',
                        'errorMessage' => 'The resource directory for the account is not enabled. We recommend that you first enable the resource directory for the account.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 2,\\n  \\"RequestId\\": \\"CD76D376-2517-4924-92C5-DBC52262F93A\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"EnabledServicePrincipals\\": {\\n    \\"EnabledServicePrincipal\\": [\\n      {\\n        \\"ServicePrincipal\\": \\"config.aliyuncs.com\\",\\n        \\"EnableTime\\": \\"2019-02-18T15:32:10.473Z\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ListTrustedServiceStatusResponse>\\r\\n    <EnabledServicePrincipal>\\r\\n        <ServicePrincipal>config.aliyuncs.com</ServicePrincipal>\\r\\n        <EnableTime>2019-02-18T15:32:10.473Z</EnableTime>\\r\\n    </EnabledServicePrincipal>\\r\\n    <EnabledServicePrincipal>\\r\\n        <ServicePrincipal>actiontrail.aliyuncs.com</ServicePrincipal>\\r\\n        <EnableTime>2019-02-16T15:32:10.473Z</EnableTime>\\r\\n    </EnabledServicePrincipal>\\r\\n    <RequestId>CD76D376-2517-4924-92C5-DBC52262F93A</RequestId>\\r\\n</ListTrustedServiceStatusResponse>","errorExample":""}]',
            'title' => '查询企业管理账号或委派管理员账号已启用的可信服务列表',
            'summary' => '调用ListTrustedServiceStatus查询企业管理账号或委派管理员账号已启用的可信服务列表。',
            'description' => '该接口仅限企业管理账号或委派管理员账号使用。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'RegisterDelegatedAdministrator' => [
            'methods' => [
                'post',
                'get',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'AccountId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源目录中的成员ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '181761095690****',
                    ],
                ],
                [
                    'name' => 'ServicePrincipal',
                    'in' => 'query',
                    'schema' => [
                        'description' => '可信服务的标识。'."\n"
                            ."\n"
                            .'具体信息，请参见[支持的可信服务](~~208133~~)中的`可信服务标识`列。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cloudfw.aliyuncs.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0A45FC8F-54D2-4A65-8338-25E5DEBDA304',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                409 => [
                    [
                        'errorCode' => 'InvalidParameter.ServicePrincipal',
                        'errorMessage' => 'The specified ServicePrincipal is invalid.',
                    ],
                    [
                        'errorCode' => 'AccountAlreadyRegistered',
                        'errorMessage' => 'The specified account is already a delegated administrator for this service.',
                    ],
                    [
                        'errorCode' => 'DelegatedAccountNumberExceeded',
                        'errorMessage' => 'The maximum number of delegated administrators for the service principal is exceeded.',
                    ],
                    [
                        'errorCode' => 'CannotRegisterMasterAsDelegatedAdministrator',
                        'errorMessage' => 'You attempted to register the enterprise management account as a delegated administrator for the service. You can designate only a member account as a delegated administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0A45FC8F-54D2-4A65-8338-25E5DEBDA304\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<RegisterDelegatedAdministratorResponse>\\r\\n\\t<RequestId>0A45FC8F-54D2-4A65-8338-25E5DEBDA304</RequestId>\\r\\n</RegisterDelegatedAdministratorResponse>\\t\\r\\n","errorExample":""}]',
            'title' => '将资源目录的成员设置为可信服务的委派管理员账号',
            'summary' => '调用RegisterDelegatedAdministrator将资源目录的成员设置为可信服务的委派管理员账号。',
            'description' => '设置完成后，委派管理员账号将获得访问资源目录组织信息的授权，从而具有了对组织成员和结构的可见性。委派管理员账号在指定可信服务中将代表企业管理账号执行服务相关管理操作。'."\n"
                .'使用限制：'."\n"
                .'- 只有部分可信服务支持委派管理员功能。更多信息，请参见[支持的可信服务](~~208133~~)。'."\n"
                .'- 只有资源目录的企业管理账号及其下被授权的RAM用户和RAM角色才能调用该API。'."\n"
                .'- 可信服务允许添加的委派管理员账号数量由各可信服务定义。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeregisterDelegatedAdministrator' => [
            'summary' => '调用DeregisterDelegatedAdministrator移除可信服务的委派管理员账号。',
            'methods' => [
                'post',
                'get',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'AccountId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源目录中的成员ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '181761095690****',
                    ],
                ],
                [
                    'name' => 'ServicePrincipal',
                    'in' => 'query',
                    'schema' => [
                        'description' => '可信服务的标识。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cloudfw.aliyuncs.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'DF5D5C52-7BD0-40E7-94C6-23A1505038A2',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                409 => [
                    [
                        'errorCode' => 'InvalidParameter.ServicePrincipal',
                        'errorMessage' => 'The specified ServicePrincipal is invalid.',
                    ],
                    [
                        'errorCode' => 'AccountNotRegistered',
                        'errorMessage' => 'The specified account is not a delegated administrator for this service.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DF5D5C52-7BD0-40E7-94C6-23A1505038A2\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DeregisterDelegatedAdministratorResponse>\\r\\n\\t<RequestId>DF5D5C52-7BD0-40E7-94C6-23A1505038A2</RequestId>\\r\\n</DeregisterDelegatedAdministratorResponse>\\t\\r\\n","errorExample":""}]',
            'title' => '移除可信服务的委派管理员账号',
            'description' => '如果被移除的委派管理账号在可信服务中存在历史管理任务，移除操作可能对可信服务的正常使用产生影响。请在移除前慎重考虑可能产生的影响，然后再进行移除操作。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListDelegatedAdministrators' => [
            'summary' => '调用ListDelegatedAdministrators查询可信服务的委派管理员账号列表。',
            'methods' => [
                'post',
                'get',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'ServicePrincipal',
                    'in' => 'query',
                    'schema' => [
                        'description' => '可信服务的标识。'."\n"
                            ."\n"
                            .'具体信息，请参见[支持的可信服务](~~208133~~)中的`可信服务标识`列。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cloudfw.aliyuncs.com',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码。'."\n"
                            ."\n"
                            .'起始值：1。默认值：1。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页时每页显示的数据行数。'."\n"
                            ."\n"
                            .'取值范围：1~100。默认值：10。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '009C3A02-7D4B-416C-9CE7-548C91508F1E',
                            ],
                            'TotalCount' => [
                                'description' => '数据总条数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2',
                            ],
                            'PageSize' => [
                                'description' => '分页时每页显示的数据行数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'PageNumber' => [
                                'description' => '页码。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'Accounts' => [
                                'type' => 'object',
                                'properties' => [
                                    'Account' => [
                                        'description' => '委派管理员账号信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '账号信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'AccountId' => [
                                                    'description' => '成员ID。',
                                                    'type' => 'string',
                                                    'example' => '138660628348****',
                                                ],
                                                'DisplayName' => [
                                                    'description' => '成员名称。',
                                                    'type' => 'string',
                                                    'example' => 'abc',
                                                ],
                                                'JoinMethod' => [
                                                    'description' => '成员加入方式。取值：'."\n"
                                                        ."\n"
                                                        .'- invited：邀请。'."\n"
                                                        .'- created：创建。',
                                                    'type' => 'string',
                                                    'example' => 'created',
                                                ],
                                                'ServicePrincipal' => [
                                                    'description' => '可信服务的标识。',
                                                    'type' => 'string',
                                                    'example' => 'cloudfw.aliyuncs.com',
                                                ],
                                                'DelegationEnabledTime' => [
                                                    'description' => '设置为委派管理员账号的时间戳。',
                                                    'type' => 'string',
                                                    'example' => '1616652684164',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"009C3A02-7D4B-416C-9CE7-548C91508F1E\\",\\n  \\"TotalCount\\": 2,\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"Accounts\\": {\\n    \\"Account\\": [\\n      {\\n        \\"AccountId\\": \\"138660628348****\\",\\n        \\"DisplayName\\": \\"abc\\",\\n        \\"JoinMethod\\": \\"created\\",\\n        \\"ServicePrincipal\\": \\"cloudfw.aliyuncs.com\\",\\n        \\"DelegationEnabledTime\\": \\"1616652684164\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ListDelegatedAdministratorsResponse>\\r\\n\\t<RequestId>009C3A02-7D4B-416C-9CE7-548C91508F1E</RequestId>\\r\\n\\t<TotalCount>2</TotalCount>\\r\\n\\t<PageSize>10</PageSize>\\r\\n\\t<PageNumber>1</PageNumber>\\r\\n\\t<Accounts>\\r\\n\\t\\t<Account>\\r\\n\\t\\t\\t<DelegationEnabledTime>1616652684164</DelegationEnabledTime>\\r\\n\\t\\t\\t<JoinMethod>created</JoinMethod>\\r\\n\\t\\t\\t<AccountId>138660628348****</AccountId>\\r\\n\\t\\t\\t<ServicePrincipal>cloudfw.aliyuncs.com</ServicePrincipal>\\r\\n\\t\\t\\t<DisplayName>abc</DisplayName>\\r\\n\\t\\t</Account>\\r\\n\\t\\t<Account>\\r\\n\\t\\t\\t<DelegationEnabledTime>1616489836069</DelegationEnabledTime>\\r\\n\\t\\t\\t<JoinMethod>invited</JoinMethod>\\r\\n\\t\\t\\t<AccountId>177242285274****</AccountId>\\r\\n\\t\\t\\t<ServicePrincipal>cloudfw.aliyuncs.com</ServicePrincipal>\\r\\n\\t\\t\\t<DisplayName>test</DisplayName>\\r\\n\\t\\t</Account>\\r\\n\\t</Accounts>\\r\\n</ListDelegatedAdministratorsResponse>\\t\\r\\n","errorExample":""}]',
            'title' => '查询可信服务的委派管理员账号列表',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListDelegatedServicesForAccount' => [
            'summary' => '调用ListDelegatedServicesForAccount查询指定成员被设置为哪些可信服务的委派管理员账号。',
            'methods' => [
                'post',
                'get',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'AccountId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '成员ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '138660628348****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D9C03B94-9396-4794-A74B-13DC437556A6',
                            ],
                            'DelegatedServices' => [
                                'type' => 'object',
                                'properties' => [
                                    'DelegatedService' => [
                                        'description' => '可信服务列表。'."\n"
                                            ."\n"
                                            .'> 如果返回为空，则表示查询的成员不是委派管理员账号。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '可信服务信列表。'."\n"
                                                ."\n"
                                                .'> 如果返回为空，则表示查询的成员不是委派管理员账号。',
                                            'type' => 'object',
                                            'properties' => [
                                                'DelegationEnabledTime' => [
                                                    'description' => '设置为委派管理员账号的时间戳。',
                                                    'type' => 'string',
                                                    'example' => '1616652684164',
                                                ],
                                                'ServicePrincipal' => [
                                                    'description' => '可信服务的标识。',
                                                    'type' => 'string',
                                                    'example' => 'cloudfw.aliyuncs.com',
                                                ],
                                                'Status' => [
                                                    'description' => '可信服务的启用状态。取值：'."\n"
                                                        ."\n"
                                                        .'- ENABLED：已启用。'."\n"
                                                        .'- DISABLED：未启用。',
                                                    'type' => 'string',
                                                    'example' => 'ENABLED',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D9C03B94-9396-4794-A74B-13DC437556A6\\",\\n  \\"DelegatedServices\\": {\\n    \\"DelegatedService\\": [\\n      {\\n        \\"DelegationEnabledTime\\": \\"1616652684164\\",\\n        \\"ServicePrincipal\\": \\"cloudfw.aliyuncs.com\\",\\n        \\"Status\\": \\"ENABLED\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListDelegatedServicesForAccountResponse>\\n    <RequestId>D9C03B94-9396-4794-A74B-13DC437556A6</RequestId>\\n    <DelegatedServices>\\n        <DelegatedService>\\n            <Status>ENABLED</Status>\\n            <DelegationEnabledTime>1616652684164</DelegationEnabledTime>\\n            <ServicePrincipal>cloudfw.aliyuncs.com</ServicePrincipal>\\n        </DelegatedService>\\n    </DelegatedServices>\\n</ListDelegatedServicesForAccountResponse>","errorExample":""}]',
            'title' => '查询指定成员被设置为哪些可信服务的委派管理员账号',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'resourcedirectory.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'resourcedirectory-intl.aliyuncs.com',
        ],
    ],
];
<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'ecd',
        'version' => '2020-10-02',
    ],
    'directories' => [
        [
            'id' => 168218,
            'title' => '客户端',
            'type' => 'directory',
            'children' => [
                'GetLoginToken',
                'GetConnectionTicket',
                'RefreshLoginToken',
                'StartDesktops',
                'StopDesktops',
                'RebootDesktops',
            ],
        ],
        [
            'id' => 168749,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'ApproveFotaUpdate',
                'ChangePassword',
                'DeleteFingerPrintTemplate',
                'DescribeDirectories',
                'DescribeFingerPrintTemplates',
                'DescribeGlobalDesktops',
                'DescribeOfficeSites',
                'DescribeRegions',
                'DescribeSnapshots',
                'EncryptPassword',
                'GetCloudDriveServiceMountToken',
                'IsKeepAlive',
                'ReportSessionStatus',
                'ResetPassword',
                'ResetSnapshot',
                'SendTokenCode',
                'SetFingerPrintTemplate',
                'SetFingerPrintTemplateDescription',
                'UnbindUserDesktop',
                'VerifyCredential',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'GetLoginToken' => [
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
                    'Anonymous' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。可以调用[DescribeRegions](~~196646~~)获取无影云电脑支持的地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClientId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端生成的唯一ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'f4a0dc8e-1702-4728-9a60-95b27a35****',
                    ],
                ],
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '办公网络ID，与`OfficeSiteId`含义相同。建议停止使用`DirectoryId`，改为使用`OfficeSiteId`。`DirectoryId`和`OfficeSiteId`只能填写一个，不可同时填写。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'cn-hangzhou+dir-885351****',
                    ],
                ],
                [
                    'name' => 'OfficeSiteId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '办公网络ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou+dir-885351****',
                    ],
                ],
                [
                    'name' => 'SessionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '登录的会话ID。'."\n"
                            ."\n"
                            .'- 若未绑定虚拟MFA设备或者未开启客户端二次认证，则不需要填写`SessionId`。'."\n"
                            .'- 若已绑定虚拟MFA设备或者已开启客户端二次认证，则`ADPassword`之后的登录认证阶段需要填写`SessionId`。可从便捷账号验证（即`GetLoginToken`请求处于`ADPassword`阶段）的返回结果中获取`SessionId`。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'cd45e873-650d-4d70-acb9-f996187a****',
                    ],
                ],
                [
                    'name' => 'CurrentStage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前登录认证阶段，依次为：'."\n"
                            ."\n"
                            .'- `ADPassword`：验证用户信息。当使用便捷账号或者AD账号的账密认证时填写此值。'."\n"
                            .'- `MFABind`：绑定虚拟MFA设备。'."\n"
                            .'- `MFAVerify`：验证虚拟MFA设备生成的安全码。'."\n"
                            .'- `TokenVerify`：客户端二次认证。'."\n"
                            .'- `ChangePassword`：修改用户密码。'."\n"
                            .'- `KeepAliveVerify`:  KeepAliveToken有效时，可用于换取LoginToken。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'ADPassword',
                    ],
                ],
                [
                    'name' => 'EndUserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '便捷用户或AD用户的用户名。当`CurrentStage`为`ADPassword`时必填。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'alice',
                    ],
                ],
                [
                    'name' => 'Password',
                    'in' => 'query',
                    'schema' => [
                        'description' => '便捷用户或AD用户的密码。当`CurrentStage`为`ADPassword`时必填。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'Password1234',
                    ],
                ],
                [
                    'name' => 'OldPassword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '旧密码。当`CurrentStage`为`ChangePassword`时必填。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'OldPassword',
                    ],
                ],
                [
                    'name' => 'NewPassword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新密码。当`CurrentStage`为`ChangePassword`时必填。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'NewPassword',
                    ],
                ],
                [
                    'name' => 'AuthenticationCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '虚拟MFA设备生成的安全码。当`CurrentStage`为`MFAVerify`时必填。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '47****',
                    ],
                ],
                [
                    'name' => 'ClientOS',
                    'in' => 'query',
                    'schema' => [
                        'description' => '运行客户端的设备的操作系统。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Windows_NT 10.0.18363 x64',
                    ],
                ],
                [
                    'name' => 'ClientVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端版本。若使用无影客户端，可在客户端登录界面的**关于**对话框中查看该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2.1.0-R-20210731.151756',
                    ],
                ],
                [
                    'name' => 'TokenCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '若已在无影云电脑控制台开启客户端二次认证，且识别到当前登录用户有风险时，会发送该二次认证验证码到终端用户邮箱。当`CurrentStage`为`TokenVerify`时必填。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '63****',
                    ],
                ],
                [
                    'name' => 'KeepAlive',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否保持登录。',
                        'type' => 'boolean',
                        'required' => false,
                        'enumValueTitles' => [
                            'null' => '不保持登录 [默认值]',
                            'true' => '保持登录',
                            'false' => '不保持登录',
                        ],
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'KeepAliveToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于保持登录的凭证（Token），在登录成功且用户开启了保持登录选项后，接口会返回`KeepAliveToken`，在`KeepAliveToken`有效期内可以调用`GetLoginToken`接口并将`CurrentStage`设为`KeepAliveVerify`来换取登录凭证（LoginToken）。当`CurrentStage`为`KeepAliveVerify`时，`KeepAliveToken`必填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'hide',
                    ],
                ],
                [
                    'name' => 'Uuid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端唯一标识。若使用无影客户端，可在客户端登录界面的**关于**对话框中查看该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'C78CA9E99315687575DD2844C1F3****',
                    ],
                ],
                [
                    'name' => 'ClientType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '无影软件客户端类型。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'HTML5' => 'Web客户端',
                            'WINDOWS' => 'Windows客户端',
                            'MACOS' => 'macOS客户端',
                            'IOS' => 'iOS客户端',
                            'ANDROID' => 'Android客户端',
                        ],
                        'example' => 'WINDOWS',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'Email' => [
                                'description' => '用户邮箱。在登录后随LoginToken返回。    '."\n"
                                    ."\n"
                                    .'- 如果是便捷用户，返回创建便捷用户时设置的邮箱。'."\n"
                                    .'- 如果是AD用户，返回以下形式：`用户名@AD域名`。',
                                'type' => 'string',
                                'example' => 'alice',
                            ],
                            'Secret' => [
                                'description' => '绑定虚拟MFA设备时的密钥。用于`MFABind`阶段。'."\n"
                                    ."\n"
                                    .'> 关于各认证阶段的详细信息，参见本接口请求参数`CurrentStage`的参数说明。',
                                'type' => 'string',
                                'example' => '5OCLLKKOJU5HPBX66H3QCTWYI7MH****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                            'EndUserId' => [
                                'description' => '便捷账号用户名或AD用户名。',
                                'type' => 'string',
                                'example' => 'alice',
                            ],
                            'LoginToken' => [
                                'description' => '登录凭证。',
                                'type' => 'string',
                                'example' => 'v18101ac6a9e69c66b04a163031680463660b4b216cd758f34b60b9ad6a7c7f7334b83dd8f75eef4209c68f9f1080b****',
                            ],
                            'NextStage' => [
                                'description' => '预期的下一阶段。例如，若管理员在无影云电脑控制台开启了MFA认证，则当用户名密码认证通过后（即`ADPassword`阶段后），该参数会返回`MFAVerify`，表示此时需要做MFA认证。'."\n"
                                    ."\n"
                                    .'> 关于各认证阶段的详细信息，参见本接口请求参数`CurrentStage`的参数说明。',
                                'type' => 'string',
                                'example' => 'MFAVerify',
                            ],
                            'QrCodePng' => [
                                'description' => '绑定虚拟MFA设备时的密钥二维码。使用Base64编码。可以为空，用于`MFABind`阶段。'."\n"
                                    ."\n"
                                    .'> 关于各认证阶段的详细信息，参见本接口请求参数`CurrentStage`的参数说明。',
                                'type' => 'string',
                                'example' => '5OCLLKKOJU5HPBX66H3QCTWY******',
                            ],
                            'Label' => [
                                'description' => '便捷用户属性。如果是AD用户，则返回空值。',
                                'type' => 'string',
                                'example' => 'test:wuying',
                            ],
                            'SessionId' => [
                                'description' => '会话ID。 仅在同一会话第一次调用`GetLoginToken`时返回。需要多次认证时，后续的阶段需要传入该参数。'."\n"
                                    ."\n"
                                    .'> 关于各认证阶段的详细信息，参见本接口请求参数`CurrentStage`的参数说明。',
                                'type' => 'string',
                                'example' => 'd6ec166d-ab93-4286-bf7f-a18bb929****',
                            ],
                            'Phone' => [
                                'description' => '便捷用户的手机号。如果是AD用户，则返回空值。',
                                'type' => 'string',
                                'example' => '1381111****',
                            ],
                            'TenantId' => [
                                'description' => '阿里云账号ID。硬件终端识别使用。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '166353906220****',
                            ],
                            'KeepAliveToken' => [
                                'description' => '用于保持登录的凭证（Token），在登录成功且用户开启了保持登录选项后，接口会返回`KeepAliveToken`。若未开启保持登录选项，则返回空值。',
                                'type' => 'string',
                                'example' => '006YwvYMsesWWsDBZnVB+Wq9AvJDVIqOY3YCktvtb7+KxMb3ClnNlV8+l/knhZYrXUmeP06IzkjF+IgcZ3vZKOyMprDyFHjCy1r27FRE/U7+geWCl8iQ+yF8GaCRHfJEkC2+ROs93HkT4tfHxyY1J8W7O7ZQGUC/cdCvm+cCP6FIy73IUuPuVR6PcKYXIpEZPW',
                            ],
                            'Industry' => [
                                'description' => '> 内部专用字段，不对外开放使用。',
                                'type' => 'string',
                                'example' => 'edu',
                            ],
                            'Props' => [
                                'description' => '> 内部专用字段，不对外开放使用。',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'string',
                                    'description' => '> 内部专用字段，不对外开放使用。',
                                    'example' => '{\'dingUserName\': u\'\\u674e\\u66fc\', \'role\': \'student\'}',
                                ],
                            ],
                            'WindowDisplayMode' => [
                                'description' => '> 内部专用字段，不对外开放使用。',
                                'type' => 'string',
                                'example' => 'mode',
                            ],
                            'RiskVerifyInfo' => [
                                'description' => '登录风险识别相关信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Email' => [
                                        'description' => '触发核身时，通过该邮箱进行验证。',
                                        'type' => 'string',
                                        'example' => 'user@example.com',
                                    ],
                                    'LastLockDuration' => [
                                        'description' => '账号锁定时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1713749778',
                                    ],
                                    'Locked' => [
                                        'description' => '账号是否已锁定。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'true' => '是',
                                            'false' => '否',
                                        ],
                                        'example' => 'true',
                                    ],
                                    'Phone' => [
                                        'description' => '触发核身时，通过该手机号进行验证。',
                                        'type' => 'string',
                                        'example' => '1381111****',
                                    ],
                                ],
                            ],
                            'Reason' => [
                                'description' => '> 内部专用字段，不对外开放使用。',
                                'type' => 'string',
                                'example' => 'null',
                            ],
                            'PasswordStrategy' => [
                                'description' => '> 内部专用字段，不对外开放使用。',
                                'type' => 'object',
                                'properties' => [
                                    'TenantPasswordLength' => [
                                        'description' => '> 内部专用字段，不对外开放使用。',
                                        'type' => 'string',
                                        'example' => 'null',
                                    ],
                                    'TenantAlternativeChars' => [
                                        'description' => '> 内部专用字段，不对外开放使用。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '> 内部专用字段，不对外开放使用。',
                                            'type' => 'string',
                                            'example' => 'null',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Email\\": \\"alice\\",\\n  \\"Secret\\": \\"5OCLLKKOJU5HPBX66H3QCTWYI7MH****\\",\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"EndUserId\\": \\"alice\\",\\n  \\"LoginToken\\": \\"v18101ac6a9e69c66b04a163031680463660b4b216cd758f34b60b9ad6a7c7f7334b83dd8f75eef4209c68f9f1080b****\\",\\n  \\"NextStage\\": \\"MFAVerify\\",\\n  \\"QrCodePng\\": \\"5OCLLKKOJU5HPBX66H3QCTWY******\\",\\n  \\"Label\\": \\"test:wuying\\",\\n  \\"SessionId\\": \\"d6ec166d-ab93-4286-bf7f-a18bb929****\\",\\n  \\"Phone\\": \\"1381111****\\",\\n  \\"TenantId\\": 0,\\n  \\"KeepAliveToken\\": \\"006YwvYMsesWWsDBZnVB+Wq9AvJDVIqOY3YCktvtb7+KxMb3ClnNlV8+l/knhZYrXUmeP06IzkjF+IgcZ3vZKOyMprDyFHjCy1r27FRE/U7+geWCl8iQ+yF8GaCRHfJEkC2+ROs93HkT4tfHxyY1J8W7O7ZQGUC/cdCvm+cCP6FIy73IUuPuVR6PcKYXIpEZPW\\",\\n  \\"Industry\\": \\"edu\\",\\n  \\"Props\\": {\\n    \\"key\\": \\"{\'dingUserName\': u\'\\\\\\\\u674e\\\\\\\\u66fc\', \'role\': \'student\'}\\"\\n  },\\n  \\"WindowDisplayMode\\": \\"mode\\",\\n  \\"RiskVerifyInfo\\": {\\n    \\"Email\\": \\"user@example.com\\",\\n    \\"LastLockDuration\\": 1713749778,\\n    \\"Locked\\": \\"true\\",\\n    \\"Phone\\": \\"1381111****\\"\\n  },\\n  \\"Reason\\": \\"null\\",\\n  \\"PasswordStrategy\\": {\\n    \\"TenantPasswordLength\\": \\"null\\",\\n    \\"TenantAlternativeChars\\": [\\n      \\"null\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetLoginTokenResponse>\\n    <Email>alice</Email>\\n    <Secret>5OCLLKKOJU5HPBX66H3QCTWYI7MH****</Secret>\\n    <RequestId>1CBAFFAB-B697-4049-A9B1-67E1FC5F****</RequestId>\\n    <EndUserId>alice</EndUserId>\\n    <LoginToken>v18101ac6a9e69c66b04a163031680463660b4b216cd758f34b60b9ad6a7c7f7334b83dd8f75eef4209c68f9f1080b****</LoginToken>\\n    <NextStage>MFAVerify</NextStage>\\n    <QrCodePng>5OCLLKKOJU5HPBX66H3QCTWY******</QrCodePng>\\n    <Label>test:wuying</Label>\\n    <SessionId>d6ec166d-ab93-4286-bf7f-a18bb929****</SessionId>\\n    <Phone>1381111****</Phone>\\n    <KeepAliveToken>006YwvYMsesWWsDBZnVB+Wq9AvJDVIqOY3YCktvtb7+KxMb3ClnNlV8+l/knhZYrXUmeP06IzkjF+IgcZ3vZKOyMprDyFHjCy1r27FRE/U7+geWCl8iQ+yF8GaCRHfJEkC2+ROs93HkT4tfHxyY1J8W7O7ZQGUC/cdCvm+cCP6FIy73IUuPuVR6PcKYXIpEZPW</KeepAliveToken>\\n    <Industry>edu</Industry>\\n    <Props>\\n        <key>{\'dingUserName\': u\'\\\\u674e\\\\u66fc\', \'role\': \'student\'}</key>\\n    </Props>\\n</GetLoginTokenResponse>","errorExample":""}]',
            'title' => '获取登录凭证',
            'summary' => '获取登录凭证。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetConnectionTicket' => [
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
                    'Anonymous' => [],
                ],
            ],
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。可以调用[DescribeRegions](~~196646~~)获取无影云桌面支持的地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClientId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端生成的唯一ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'f4a0dc8e-1702-4728-9a60-95b27a35****',
                    ],
                ],
                [
                    'name' => 'SessionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话ID。调用GetLoginToken获取',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'cd45e873-650d-4d70-acb9-f996187a****',
                    ],
                ],
                [
                    'name' => 'LoginToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '登录凭证。调用GetLoginToken获取',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'v18101ac6a9e69c66b04a163031680463660b4b216cd758f34b60b9ad6a7c7f7334b83dd8f75eef4209c68f9f1080b****',
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '桌面连接任务ID。     '."\n"
                            .'首次调用本接口时无需配置，后续调用本接口时配置为上一次调用本接口返回的`TaskId`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2afbad19-778a-4fc5-9674-1f19c638****',
                    ],
                ],
                [
                    'name' => 'DesktopId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云桌面ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ecd-gx2x1dhsmucyy****',
                    ],
                ],
                [
                    'name' => 'ClientOS',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端操作系统。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Windows_NT 10.0.18363 x64',
                    ],
                ],
                [
                    'name' => 'ClientVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端版本。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2.1.0-R-20210731.151756',
                    ],
                ],
                [
                    'name' => 'ClientType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端类型。取值范围：'."\n"
                            ."\n"
                            .'- windows'."\n"
                            .'- linux'."\n"
                            .'- mac'."\n"
                            .'- ios'."\n"
                            .'- android',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'windows',
                    ],
                ],
                [
                    'name' => 'CommandContent',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '乐播需求，获取Tickek成功后自动在session里启动乐播应用。',
                        'description' => '当前参数可以配置自定义用户态应用，当成功获取凭证后，自动执行应用。'."\n"
                            ."\n"
                            .'- appPath：String类型，应用启动文件路径，例如：`"C:\\\\Program Files (x86)\\\\000\\\\000.exe"`，注意路径分隔符要用双斜杠（\\\\\\）。'."\n"
                            .'- appParameter：String类型，应用启动参数，例如：`"meetingid 000 meetingname aaa"`，注意参数与参数之间直接用空格。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{'."\n"
                            .'      "startApplication": {'."\n"
                            .'            "startApplicationList": ['."\n"
                            .'                  {'."\n"
                            .'                        "sessionName": "",'."\n"
                            .'                        "appList": ['."\n"
                            .'                              {'."\n"
                            .'                                    "appPath": "C:\\\\Program Files\\\\Google\\\\Chrome\\\\Application\\\\chrome.exe",'."\n"
                            .'                                    "appParameter": "www.example.com www.example1.com"'."\n"
                            .'                              }'."\n"
                            .'                        ]'."\n"
                            .'                  }'."\n"
                            .'            ]'."\n"
                            .'      }'."\n"
                            .'}',
                        'maxLength' => 1024000,
                    ],
                ],
                [
                    'name' => 'Uuid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端唯一标识。若使用无影客户端，可在客户端登录界面的**关于**对话框中查看该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '28c80e90-f71e-4c23-93d6-1225329cf949',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                            'TaskStatus' => [
                                'description' => '任务状态。',
                                'type' => 'string',
                                'enumValueTitles' => [
                                    'FAILED' => '失败',
                                    'RUNNING' => '运行中',
                                    'FINISHED' => '已完成',
                                ],
                                'example' => 'FINISHED',
                            ],
                            'Ticket' => [
                                'description' => '桌面连接凭证。',
                                'type' => 'string',
                                'example' => 'W0VuY29kaW5nXQ0KSW5wdXRFbmNvZGluZz1V********',
                            ],
                            'TaskId' => [
                                'description' => '桌面连接任务ID。',
                                'type' => 'string',
                                'example' => '2afbad19-778a-4fc5-9674-1f19c63862da',
                            ],
                            'TaskCode' => [
                                'description' => '用于连接用户实例的Ticket，使用时需要先将其内容执行base64的解码，并保存为xxx.ica文件，然后打开这个文件。Python代码示例：'."\n"
                                    ."\n"
                                    .'```'."\n"
                                    .'import base64'."\n"
                                    .'response = {'."\n"
                                    .'    "Ticket": "W0VuY29kaW5nXQ0KSW5wdXRFbmNvZGluZz1V********",'."\n"
                                    .'    "RequestId": "1CBAFFAB-B697-4049-A9B1-67E1FC5F****",'."\n"
                                    .'}'."\n"
                                    .'f = open (\'xxx.ica\', \'w\')'."\n"
                                    .'out = base64.b64decode(response[\'Ticket\'])'."\n"
                                    .'f.write(out)'."\n"
                                    .'f.close()'."\n"
                                    .'```',
                                'type' => 'string',
                                'example' => 'W0VuY29kaW5nXQ0KSW5wdXRFbmNvZGluZz1V********',
                            ],
                            'TaskMessage' => [
                                'description' => '云电脑连接任务ID。',
                                'type' => 'string',
                                'example' => '2afbad19-778a-4fc5-9674-1f19c638****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"TaskStatus\\": \\"FINISHED\\",\\n  \\"Ticket\\": \\"W0VuY29kaW5nXQ0KSW5wdXRFbmNvZGluZz1V********\\",\\n  \\"TaskId\\": \\"2afbad19-778a-4fc5-9674-1f19c63862da\\",\\n  \\"TaskCode\\": \\"W0VuY29kaW5nXQ0KSW5wdXRFbmNvZGluZz1V********\\",\\n  \\"TaskMessage\\": \\"2afbad19-778a-4fc5-9674-1f19c638****\\"\\n}","errorExample":""},{"type":"xml","example":"<GetConnectionTicketResponse>\\n    <Ticket>W0VuY29kaW5nXQ0KSW5wdXRFbmNvZGluZz1V********</Ticket>\\n    <TaskId>2afbad19-778a-4fc5-9674-1f19c63862da</TaskId>\\n    <RequestId>484256DA-D816-44D2-9D86-B6EE4D5BA78C</RequestId>\\n    <TaskStatus>Finished</TaskStatus>\\n</GetConnectionTicketResponse>","errorExample":""}]',
            'title' => '获取桌面连接凭证',
            'summary' => '获取桌面连接凭证。',
            'description' => '首次调用该接口时，将返回`TaskID`，使用该`TaskID`继续调用该接口，直到`TaskStatus`的值变为FINISHED或者FAILED。`TaskStatus`为FINISHED时，`Ticket`的值即为客户端连接桌面的Ticket。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'RefreshLoginToken' => [
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
                    'Anonymous' => [],
                ],
            ],
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。可以调用[DescribeRegions](~~196646~~)获取无影云桌面支持的地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClientId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端生成的唯一ID，参考UUID。该参数非敏感字段，无需加密。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'f4a0dc8e-1702-4728-9a60-95b27a35****',
                    ],
                ],
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '> 此参数不开放使用。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'cn-hangzhou+dir-jedbpr4sl9l37****',
                    ],
                ],
                [
                    'name' => 'OfficeSiteId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作区ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'cn-shanghai+dir-238191****',
                    ],
                ],
                [
                    'name' => 'SessionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'cd45e873-650d-4d70-acb9-f996187a****',
                    ],
                ],
                [
                    'name' => 'EndUserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户名。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'alice',
                    ],
                ],
                [
                    'name' => 'LoginToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '登录凭证。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'v18101ac6a9e69c66b04a163031680463660b4b216cd758f34b60b9ad6a7c7f7334b83dd8f75eef4209c68f9f1080b****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                            'LoginToken' => [
                                'description' => '登录凭证。',
                                'type' => 'string',
                                'example' => 'v1c27bab6c205b2fdfac916434306375722776d6aa89e30b7836d18c95ade9137f0f5ac4325260782184e96ee2b3f0****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"LoginToken\\": \\"v1c27bab6c205b2fdfac916434306375722776d6aa89e30b7836d18c95ade9137f0f5ac4325260782184e96ee2b3f0****\\"\\n}","errorExample":""},{"type":"xml","example":"<RefreshLoginTokenResponse>\\r\\n    <RequestId>FE379906-08A4-5893-9C18-77C32566D944</RequestId>\\r\\n</RefreshLoginTokenResponse>","errorExample":""}]',
            'title' => '刷新登录凭证',
            'summary' => '刷新登录凭证。',
            'description' => '登录凭证（LoginToken）的有效期为8小时。如果在8小时内，终端用户没有退出客户端，客户端需要重新刷新登录凭证。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'StartDesktops' => [
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
                    'Anonymous' => [],
                ],
            ],
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。可以调用[DescribeRegions](~~196646~~)获取无影云电脑支持的地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClientId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端生成的唯一ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'f4a0dc8e-1702-4728-9a60-95b27a35****',
                    ],
                ],
                [
                    'name' => 'SessionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'cd45e873-650d-4d70-acb9-f996187a****',
                    ],
                ],
                [
                    'name' => 'LoginToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '登录凭证。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'v18101ac6a9e69c66b04a163031680463660b4b216cd758f34b60b9ad6a7c7f7334b83dd8f75eef4209c68f9f1080b****',
                    ],
                ],
                [
                    'name' => 'ClientOS',
                    'in' => 'query',
                    'schema' => [
                        'description' => '运行客户端的设备的操作系统。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Windows_NT 10.0.18363 x64',
                    ],
                ],
                [
                    'name' => 'ClientVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端版本。若使用无影客户端，可在客户端登录界面的**关于**对话框中查看该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => ' 2.1.0-R-20210731.151756',
                    ],
                ],
                [
                    'name' => 'DesktopId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '云电脑ID列表。可设置1\\~20个。',
                        'type' => 'array',
                        'items' => [
                            'description' => '云电脑ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ecd-cg27ufmapab08****',
                        ],
                        'required' => true,
                        'example' => 'ecd-cg27ufmapab08****',
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '21e7be12-aa4f-4389-b3e1-82f4a1b5****',
                    ],
                ],
                [
                    'name' => 'Uuid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端唯一标识符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '71F6A700735E74A61161A53F0C47****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\"\\n}","errorExample":""},{"type":"xml","example":"<StartDesktopsResponse>\\r\\n    <RequestId>1CBAFFAB-B697-4049-A9B1-67E1FC5FEB53</RequestId>\\r\\n</StartDesktopsResponse>","errorExample":""}]',
            'title' => '启动云电脑',
            'summary' => '启动一台或者多台云电脑。',
            'description' => '云电脑的状态必须为已停止（Stopped），接口调用成功后，云电脑的状态将变更为运行中（Running）。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'StopDesktops' => [
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
                    'Anonymous' => [],
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。可以调用[DescribeRegions](~~196646~~)获取无影云电脑支持的地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClientId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端生成的唯一ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'f4a0dc8e-1702-4728-9a60-95b27a35****',
                    ],
                ],
                [
                    'name' => 'SessionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'cd45e873-650d-4d70-acb9-f996187a****',
                    ],
                ],
                [
                    'name' => 'LoginToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '登录凭证。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'v18101ac6a9e69c66b04a163031680463660b4b216cd758f34b60b9ad6a7c7f7334b83dd8f75eef4209c68f9f1080b****',
                    ],
                ],
                [
                    'name' => 'ClientOS',
                    'in' => 'query',
                    'schema' => [
                        'description' => '运行客户端的设备的操作系统。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Windows_NT 10.0.18363 x64',
                    ],
                ],
                [
                    'name' => 'ClientVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端版本。若使用无影客户端，可在客户端登录界面的**关于**对话框中查看该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2.1.0-R-20210731.151756',
                    ],
                ],
                [
                    'name' => 'DesktopId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '云电脑ID列表。可设置1\\~20个。',
                        'type' => 'array',
                        'items' => [
                            'description' => '云电脑ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ecd-7w78ozhjcwa3u****	',
                        ],
                        'required' => true,
                        'example' => 'ecd-7w78ozhjcwa3u****	',
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '',
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '6ce412a8-399f-49f9-9518-66ee028a****',
                    ],
                ],
                [
                    'name' => 'SessionToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '登录凭证。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '04b7b80a0b020715c5c1b4175fc4771698****9e2a759557a4624665fd53ae40',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\"\\n}","errorExample":""},{"type":"xml","example":"<StopDesktopsResponse>\\r\\n    <RequestId>1CBAFFAB-B697-4049-A9B1-67E1FC5FEB53</RequestId>\\r\\n</StopDesktopsResponse>","errorExample":""}]',
            'title' => '停止云电脑',
            'summary' => '停止一台或者多台云电脑。',
            'description' => '云电脑的状态必须为运行中（Running）。接口调用成功后，云电脑的状态将变更为已停止（Stopped）。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'RebootDesktops' => [
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
                    'Anonymous' => [],
                ],
            ],
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。可以调用[DescribeRegions](~~196646~~)获取无影云电脑支持的地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClientId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端生成的唯一ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'f4a0dc8e-1702-4728-9a60-95b27a35****',
                    ],
                ],
                [
                    'name' => 'SessionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'cd45e873-650d-4d70-acb9-f996187a****',
                    ],
                ],
                [
                    'name' => 'LoginToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '登录凭证。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'v18101ac6a9e69c66b04a163031680463660b4b216cd758f34b60b9ad6a7c7f7334b83dd8f75eef4209c68f9f1080b****',
                    ],
                ],
                [
                    'name' => 'ClientOS',
                    'in' => 'query',
                    'schema' => [
                        'description' => '运行客户端的设备的操作系统。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Windows_NT 10.0.18363 x64',
                    ],
                ],
                [
                    'name' => 'ClientVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端版本。若使用无影客户端，可在客户端登录界面的**关于**对话框中查看该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2.1.0-R-20210731.151756',
                    ],
                ],
                [
                    'name' => 'DesktopId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '云电脑ID列表。可设置1\\~20个。',
                        'type' => 'array',
                        'items' => [
                            'description' => '云电脑ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ecd-7w78ozhjcwa3u****',
                        ],
                        'required' => true,
                        'example' => 'ecd-7w78ozhjcwa3u****	',
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '40401e62-5caf-4508-8de7-bf98af12****',
                    ],
                ],
                [
                    'name' => 'SessionToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '登录凭证。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '04b7b80a0b020715c5c1b4175fc4771698****9e2a759557a4624665fd53ae40',
                    ],
                ],
                [
                    'name' => 'Uuid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端唯一标识符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '91761ED27169E2FC564F29388E2D****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\"\\n}","errorExample":""},{"type":"xml","example":"<RebootDesktopsResponse>\\r\\n    <RequestId>1CBAFFAB-B697-4049-A9B1-67E1FC5FEB53</RequestId>\\r\\n</RebootDesktopsResponse>","errorExample":""}]',
            'title' => '重启云电脑',
            'summary' => '重启一台或者多台云电脑。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ApproveFotaUpdate' => [
            'summary' => '允许桌面FOTA升级。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'Anonymous' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClientId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端生成的唯一ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd4452bd7-88df-4b90-a409-806da674****',
                    ],
                ],
                [
                    'name' => 'SessionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '4771b873-c757-4893-973c-7f5beejh****',
                    ],
                ],
                [
                    'name' => 'LoginToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '登录凭证。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'v18390c954ce59e2915ef16663205371721e0db9a46179ac89249a203320459523cb54ad08efe324784dd0eba25950****',
                    ],
                ],
                [
                    'name' => 'DesktopId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云桌面ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ecd-138dsptkrt00u****',
                    ],
                ],
                [
                    'name' => 'AppVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用版本。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '0.0.1-D-20220513.14****',
                    ],
                ],
                [
                    'name' => 'Uuid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端唯一标识。若使用无影客户端，可在客户端登录界面的关于对话框中查看该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '28c80e90-f71e-4c23-93d6-1225329c****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\"\\n}","type":"json"}]',
            'title' => '允许桌面FOTA升级',
        ],
        'ChangePassword' => [
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
                    'Anonymous' => [],
                ],
            ],
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClientId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端生成的唯一ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '42f6645a-9c3c-4772-be2a-cc5f5732****',
                    ],
                ],
                [
                    'name' => 'OfficeSiteId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作区ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-shanghai+dir-227468****',
                    ],
                ],
                [
                    'name' => 'SessionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'EndUserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'liming',
                    ],
                ],
                [
                    'name' => 'LoginToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '登录凭证。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'v18101ac6a9e69c66b04a163031680463660b4b216cd758f34b60b9ad6a7c7f7334b83dd8f75eef4209c68f9f1080b****',
                    ],
                ],
                [
                    'name' => 'OldPassword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '旧密码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '12345678',
                    ],
                ],
                [
                    'name' => 'NewPassword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新密码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '67436290',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '484256DA-D816-44D2-9D86-B6EE4D5B****',
                            ],
                            'LoginToken' => [
                                'description' => '登录凭证。',
                                'type' => 'string',
                                'example' => 'v18101ac6a9e69c66b04a163031680463660b4b216cd758f34b60b9ad6a7c7f7334b83dd8f75eef4209c68f9f1080b****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"484256DA-D816-44D2-9D86-B6EE4D5B****\\",\\n  \\"LoginToken\\": \\"v18101ac6a9e69c66b04a163031680463660b4b216cd758f34b60b9ad6a7c7f7334b83dd8f75eef4209c68f9f1080b****\\"\\n}","type":"json"}]',
            'title' => '修改密码',
        ],
        'DeleteFingerPrintTemplate' => [
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
                    'Anonymous' => [],
                ],
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClientId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端生成的唯一ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '59e86b39-ccac-4dfa-93d7-1f724052****',
                    ],
                ],
                [
                    'name' => 'SessionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '6df06330-3b75-4768-b334-41a73a64****',
                    ],
                ],
                [
                    'name' => 'LoginToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '登录凭证。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'v1c0436c721786529914f16516396228454fa6284c9b80f9917f25ebbec2aa30c10343e3f6f9aff64500ce13808aef****',
                    ],
                ],
                [
                    'name' => 'Index',
                    'in' => 'query',
                    'schema' => [
                        'description' => '索引。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '4',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '40401e62-5caf-4508-8de7-bf98af12****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '134BD0B2-B848-5743-9CE2-C1FD3D5F****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"134BD0B2-B848-5743-9CE2-C1FD3D5F****\\"\\n}","type":"json"}]',
            'title' => '删除指纹模板',
        ],
        'DescribeDirectories' => [
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
                    'Anonymous' => [],
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClientId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端生成的唯一ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '54c17e1d-2d72-4b87-aa33-25f3b3f2****',
                    ],
                ],
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '目录ID对象。',
                        'type' => 'array',
                        'items' => [
                            'description' => '目录ID。同工作区ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'cn-hangzhou+dir-gx2x1dhsmu52rd****',
                        ],
                        'required' => false,
                        'maxItems' => 100,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F369A091-002F-49C8-AD55-02A77629****',
                            ],
                            'Directories' => [
                                'description' => '目录信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '目录信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'DirectoryType' => [
                                            'description' => '目录类型。',
                                            'type' => 'string',
                                            'example' => 'AD_CONNECTOR',
                                        ],
                                        'SsoServiceUrl' => [
                                            'description' => 'SSO连接。',
                                            'type' => 'string',
                                            'example' => 'https://eds-cn-shanghai-67726****',
                                        ],
                                        'DesktopAccessType' => [
                                            'description' => '连接云桌面时允许使用的方式。'."\n"
                                                .'- INTERNET：公网连接；'."\n"
                                                .'- VPC：VPC连接；'."\n"
                                                .'- ANY：公网和VPC都允许。',
                                            'type' => 'string',
                                            'example' => 'INTERNET',
                                        ],
                                        'DirectoryId' => [
                                            'description' => '目录ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou+dir-gx2x1dhsmu52rd****',
                                        ],
                                        'ProviderId' => [
                                            'description' => '用户账号BID。',
                                            'type' => 'string',
                                            'example' => '26842',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F369A091-002F-49C8-AD55-02A77629****\\",\\n  \\"Directories\\": [\\n    {\\n      \\"DirectoryType\\": \\"AD_CONNECTOR\\",\\n      \\"SsoServiceUrl\\": \\"https://eds-cn-shanghai-67726****\\",\\n      \\"DesktopAccessType\\": \\"INTERNET\\",\\n      \\"DirectoryId\\": \\"cn-hangzhou+dir-gx2x1dhsmu52rd****\\",\\n      \\"ProviderId\\": \\"26842\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询目录详细信息',
            'summary' => '用于查询目录详细信息。',
        ],
        'DescribeFingerPrintTemplates' => [
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
                    'Anonymous' => [],
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClientId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端生成的唯一ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '61e39dc6-0450-45f6-a372-2a09e938****',
                    ],
                ],
                [
                    'name' => 'SessionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => false,
                        'example' => 'a5062d68-e550-4d09-8288-67c8ba9e****',
                    ],
                ],
                [
                    'name' => 'LoginToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '登录凭证。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'v189646d6f329e4dfcbf51653542202890570fec26e4f9ee26427c5920fcd93871f017d2190199c4c7d0c0bf00f573****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9C1D3FBE-84E1-5ABB-AD98-2003AC71****',
                            ],
                            'FingerPrintTemplates' => [
                                'description' => '指纹模板对象。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '指纹模板对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Index' => [
                                            'description' => '索引。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'CreationTime' => [
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2022-03-13T13:26:29Z',
                                        ],
                                        'LoginTime' => [
                                            'description' => '登录时间。',
                                            'type' => 'string',
                                            'example' => '2022-03-13T13:26:29Z',
                                        ],
                                        'EndUserId' => [
                                            'description' => '用户。',
                                            'type' => 'string',
                                            'example' => 'liming',
                                        ],
                                        'Description' => [
                                            'description' => '描述信息。',
                                            'type' => 'string',
                                            'example' => 'Finger 1',
                                        ],
                                        'OfficeSiteId' => [
                                            'description' => '工作区ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou+dir-074949****',
                                        ],
                                        'ClientId' => [
                                            'description' => '客户端生成的唯一ID。',
                                            'type' => 'string',
                                            'example' => '2258a3d5-b8f8-4d79-a221-eaecf211****',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9C1D3FBE-84E1-5ABB-AD98-2003AC71****\\",\\n  \\"FingerPrintTemplates\\": [\\n    {\\n      \\"Index\\": 1,\\n      \\"CreationTime\\": \\"2022-03-13T13:26:29Z\\",\\n      \\"LoginTime\\": \\"2022-03-13T13:26:29Z\\",\\n      \\"EndUserId\\": \\"liming\\",\\n      \\"Description\\": \\"Finger 1\\",\\n      \\"OfficeSiteId\\": \\"cn-hangzhou+dir-074949****\\",\\n      \\"ClientId\\": \\"2258a3d5-b8f8-4d79-a221-eaecf211****\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '描述指纹模板',
        ],
        'DescribeGlobalDesktops' => [
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
                    'Anonymous' => [],
                ],
            ],
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作区ID。同OfficeSiteId。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'cn-hangzhou+dir-880841****',
                    ],
                ],
                [
                    'name' => 'OfficeSiteId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作区ID。DirectoryId即将弃用，优先使用此字段。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou+dir-880841****',
                    ],
                ],
                [
                    'name' => 'ClientId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端生成的唯一ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'c213150d-7ac3-432c-b749-6e1e090b****',
                    ],
                ],
                [
                    'name' => 'SessionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话ID。'."\n"
                            .'通过登录接口GetLoginToken获取，返回参数：SessionId。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '5c456a41-1e65-4e72-ab4d-5dcfff52****',
                    ],
                ],
                [
                    'name' => 'LoginToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '登录凭证。'."\n"
                            .'通过GetLoginToken接口登录获取，或登录后通过更新接口RefreshLoginToken获取。返回参数：LoginToken。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'v147c9114a180489f89691663893169****',
                    ],
                ],
                [
                    'name' => 'DesktopStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云桌面状态。取值范围：'."\n"
                            ."\n"
                            .'- Pending：等待中'."\n"
                            .'- Starting：启动中'."\n"
                            .'- Running：运行中'."\n"
                            .'- Stopping：停止中'."\n"
                            .'- Rebuilding：重建中'."\n"
                            .'- Stopped：已关机'."\n"
                            .'- Expired：已过期'."\n"
                            .'- Deleted：已删除',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Running',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时每页行数。'."\n"
                            ."\n"
                            .'- 最大值：500'."\n"
                            .'- 默认值：10',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '500',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下一个查询开始的Token，NextToken为空表示没有下一个。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'eyJkZWZhdWx0IjpbIjk2MjEy****',
                    ],
                ],
                [
                    'name' => 'DesktopName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云桌面名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DesktopTest',
                    ],
                ],
                [
                    'name' => 'DesktopId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '云桌面ID。可设置一个或多个，取值范围：1~20。',
                        'type' => 'array',
                        'items' => [
                            'description' => '云桌面ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ecd-hkbl45il187d6****',
                        ],
                        'required' => false,
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'SearchRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '搜索地域ID。用于过滤出指定地域的桌面信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'DesktopAccessType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '连接云桌面时允许使用的接入方式。取值范围：'."\n"
                            ."\n"
                            .'- INTERNET：只允许客户端通过公网连接云桌面。'."\n"
                            .'- VPC：只允许处于VPC网络内的客户端连接云桌面。'."\n"
                            .'- Any：不限制方式。使用客户端连接云桌面时可以自行选择连接方式。'."\n"
                            ."\n"
                            .'默认值：INTERNET。'."\n"
                            ."\n"
                            .'> VPC连接方式依赖于阿里云私网连接（PrivateLink）服务，该服务不收取费用。该参数设置为VPC或者Any时，系统将自动为您开通私网连接服务。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'INTERNET',
                    ],
                ],
                [
                    'name' => 'QueryFotaUpdate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否查询镜像更新信息。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'WithoutLatency',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否查询实时桌面信息。当前接口中桌面状态信息有1~3秒延迟，如果需要准确信息可将此值设为true。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'OrderBy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序字段，若不指定则按照创建时间倒序。取值为AssignTime：按照分配时间排序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AssignTime',
                    ],
                ],
                [
                    'name' => 'SortType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序方式，默认为增序。取值：'."\n"
                            .'- ASC：增序'."\n"
                            .'- DESC：降序',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ASC',
                    ],
                ],
                [
                    'name' => 'Keyword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '关键字。支持模糊搜索桌面ID、云桌面名称和终端用户自定义的桌面名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ecd',
                    ],
                ],
                [
                    'name' => 'LoginRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作区所在的地域ID，使用组织ID登录时置为空。使用工作区ID登录时，该参数必填，使用组织ID登录时，该参数可为空。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '下一个查询开始的Token，NextToken为空表示没有下一个。',
                                'type' => 'string',
                                'example' => 'eyJkZWZhdWx0IjpbIjIwMjItMDgtMTdUM****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4686A731-D601-548C-83E2-4CB6371E****',
                            ],
                            'Desktops' => [
                                'description' => '云桌面详细信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '云桌面详细信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'CreationTime' => [
                                            'description' => '云桌面的创建时间。',
                                            'type' => 'string',
                                            'example' => '2020-11-06T08:28Z',
                                        ],
                                        'ChargeType' => [
                                            'description' => '付费类型。可能值：'."\n"
                                                .'- PostPaid：按量付费'."\n"
                                                .'- PrePaid：包年包月',
                                            'type' => 'string',
                                            'example' => 'PostPaid',
                                        ],
                                        'DesktopName' => [
                                            'description' => '云桌面名称。',
                                            'type' => 'string',
                                            'example' => 'testDesktopName',
                                        ],
                                        'HostName' => [
                                            'description' => '主机名称。',
                                            'type' => 'string',
                                            'example' => 'testName',
                                        ],
                                        'DesktopGroupId' => [
                                            'description' => '桌面组ID。',
                                            'type' => 'string',
                                            'example' => 'dg-3uiojcc0j4kh7****',
                                        ],
                                        'DesktopId' => [
                                            'description' => '云桌面ID。',
                                            'type' => 'string',
                                            'example' => 'ecd-gx2x1dhsmucyy****',
                                        ],
                                        'RegionId' => [
                                            'description' => '地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'LastStartTime' => [
                                            'description' => '上次开机时间，即最近一次的开机时间。',
                                            'type' => 'string',
                                            'example' => '2021-07-13T15:59Z',
                                        ],
                                        'Cpu' => [
                                            'description' => 'CPU个数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                        ],
                                        'EndUserId' => [
                                            'description' => '终端用户名称。',
                                            'type' => 'string',
                                            'example' => 'User1',
                                        ],
                                        'ExpiredTime' => [
                                            'description' => '云桌面的过期时间。    '."\n"
                                                ."\n"
                                                .'- 对于包年包月云桌面，该返回值有实际意义。'."\n"
                                                .'- 对于按量付费云桌面，均返回2099-12-31T15:59Z。',
                                            'type' => 'string',
                                            'example' => '2021-12-31T15:59Z',
                                        ],
                                        'DesktopStatus' => [
                                            'description' => '云桌面状态。',
                                            'type' => 'string',
                                            'example' => 'Running',
                                        ],
                                        'DesktopType' => [
                                            'description' => '云桌面规格。',
                                            'type' => 'string',
                                            'example' => 'ecd.basic.large',
                                        ],
                                        'ConnectionStatus' => [
                                            'description' => '终端节点连接状态。取值：'."\n"
                                                ."\n"
                                                .'- Pending：修改中'."\n"
                                                ."\n"
                                                .'- Connecting：连接中'."\n"
                                                ."\n"
                                                .'- Connected：已连接'."\n"
                                                ."\n"
                                                .'- Disconnecting：断开连接中'."\n"
                                                ."\n"
                                                .'- Disconnected：未连接'."\n"
                                                ."\n"
                                                .'- Deleting：删除中',
                                            'type' => 'string',
                                            'example' => 'Disconnected',
                                        ],
                                        'Memory' => [
                                            'description' => '云桌面的内存。单位为MiB。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '4096',
                                        ],
                                        'ImageId' => [
                                            'description' => '镜像ID。',
                                            'type' => 'string',
                                            'example' => 'm-4zfb6zj728hhr****',
                                        ],
                                        'DirectoryId' => [
                                            'description' => '同OfficeSiteId，工作区ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou+dir-jedbpr4sl9l37****	',
                                        ],
                                        'Disks' => [
                                            'description' => '磁盘信息。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '磁盘信息。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'DiskType' => [
                                                        'description' => '磁盘类型。可能值：'."\n"
                                                            .'- SYSTEM：系统盘'."\n"
                                                            .'- DATA：数据盘',
                                                        'type' => 'string',
                                                        'example' => 'SYSTEM',
                                                    ],
                                                    'DiskId' => [
                                                        'description' => '磁盘ID。',
                                                        'type' => 'string',
                                                        'example' => 'd-jedbpr4sl9l37****',
                                                    ],
                                                    'DiskSize' => [
                                                        'description' => '磁盘大小。单位：GiB。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '80',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'OsType' => [
                                            'description' => '操作系统类型。可能值：'."\n"
                                                .'-Windows'."\n"
                                                .'-Linux',
                                            'type' => 'string',
                                            'example' => 'Windows',
                                        ],
                                        'Sessions' => [
                                            'description' => '会话信息列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '会话信息。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'EndUserId' => [
                                                        'description' => '终端用户信息。',
                                                        'type' => 'string',
                                                        'example' => 'User1',
                                                    ],
                                                    'EstablishmentTime' => [
                                                        'description' => '会话创建时间。',
                                                        'type' => 'string',
                                                        'example' => '2021-03-07T08:23Z',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'PolicyGroupId' => [
                                            'description' => '策略ID。',
                                            'type' => 'string',
                                            'example' => 'pg-9cktlowtxfl6****',
                                        ],
                                        'EndUserIds' => [
                                            'description' => '终端用户列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '终端用户名。',
                                                'type' => 'string',
                                                'example' => 'User1',
                                            ],
                                        ],
                                        'GpuMemory' => [
                                            'description' => '显存大小。'."\n"
                                                .'对于GPU型云桌面，该返回值有实际意义。单位：MB。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2048',
                                        ],
                                        'FotaUpdate' => [
                                            'description' => '镜像的更新信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Project' => [
                                                    'description' => '项目名称。',
                                                    'type' => 'string',
                                                    'example' => 'testProject',
                                                ],
                                                'Channel' => [
                                                    'description' => '订阅通道',
                                                    'type' => 'string',
                                                    'example' => 'Enterprise',
                                                ],
                                                'CurrentAppVersion' => [
                                                    'description' => '桌面当前版本号。',
                                                    'type' => 'string',
                                                    'example' => '0.0.0-D-20220102.xxxx',
                                                ],
                                                'NewAppVersion' => [
                                                    'description' => '更新后的应用版本号。',
                                                    'type' => 'string',
                                                    'example' => '0.0.0-R-20220307.xxxx',
                                                ],
                                                'Force' => [
                                                    'description' => '是否强制升级。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'ReleaseNote' => [
                                                    'description' => '可升级的版本描述。',
                                                    'type' => 'string',
                                                    'example' => '测试升级包03-07',
                                                ],
                                                'Size' => [
                                                    'description' => '可升级的版本安装包大小。',
                                                    'type' => 'string',
                                                    'example' => '100',
                                                ],
                                                'ReleaseNoteEn' => [
                                                    'description' => '可升级的版本英文描述。',
                                                    'type' => 'string',
                                                    'example' => 'Release note',
                                                ],
                                                'ReleaseNoteJp' => [
                                                    'description' => '可升级的版本日文描述。',
                                                    'type' => 'string',
                                                    'example' => 'リリースノート',
                                                ],
                                            ],
                                        ],
                                        'ProtocolType' => [
                                            'description' => '协议类型。可能值：'."\n"
                                                .'- HDX'."\n"
                                                .'- ASP',
                                            'type' => 'string',
                                            'example' => 'ASP',
                                        ],
                                        'OfficeSiteId' => [
                                            'description' => '工作区ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou+dir-363353****',
                                        ],
                                        'NetworkInterfaceIp' => [
                                            'description' => '网卡IP。',
                                            'type' => 'string',
                                            'example' => '192.168.xx.xx',
                                        ],
                                        'UserCustomName' => [
                                            'description' => '用户自定义桌面名称。',
                                            'type' => 'string',
                                            'example' => 'testDesktop',
                                        ],
                                        'ManagementFlags' => [
                                            'description' => '云桌面管理状态列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '云桌面管理状态。可能值：'."\n"
                                                    ."\n"
                                                    .'- NO_FLAG：无状态'."\n"
                                                    ."\n"
                                                    .'- UPDATING：升级中'."\n"
                                                    ."\n"
                                                    .'- MIGRATING：工作区迁移中'."\n"
                                                    ."\n"
                                                    .'- ASSIGNING：分配用户中'."\n"
                                                    ."\n"
                                                    .'- UNDER_MAINTENANCE：维护模式中'."\n"
                                                    ."\n"
                                                    .'- ENTER_MAINTENANCE：进入维护模式中'."\n"
                                                    ."\n"
                                                    .'- MIGRATING_PROTOCOL：协议迁移中',
                                                'type' => 'string',
                                                'example' => 'UPDATING',
                                            ],
                                        ],
                                        'LocalName' => [
                                            'description' => '地域名称。',
                                            'type' => 'string',
                                            'example' => '（华东2）上海',
                                        ],
                                        'RealDesktopId' => [
                                            'description' => '如果是桌面组桌面并且已分配真实桌面，则显示桌面ID。',
                                            'type' => 'string',
                                            'example' => 'ecd-gx2x1dhsm****',
                                        ],
                                        'DesktopTimers' => [
                                            'description' => '桌面定时器对象。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'TimerType' => [
                                                        'description' => '定时任务类型。'."\n"
                                                            ."\n"
                                                            .'- TimerBoot：定时开机'."\n"
                                                            .'- TimerShutdown：定时关机'."\n"
                                                            .'- TimerReboot：定时重启'."\n"
                                                            .'- NoOperationShutdown：无操作关机'."\n"
                                                            .'- NoOperationReboot：无操作重启'."\n"
                                                            .'- NoOperationDisconnect：无操作断连'."\n"
                                                            .'- NoConnectShutdown：无连接关机'."\n"
                                                            .'- TimerReset：定时重置',
                                                        'type' => 'string',
                                                        'example' => 'NoConnectShutdown',
                                                    ],
                                                    'CronExpression' => [
                                                        'description' => '定时任务cron表达式。'."\n"
                                                            ."\n"
                                                            .'例如：`0 0 4 1/1 * ?`表示从每月第一天上午4时开始，每天执行操作。',
                                                        'type' => 'string',
                                                        'example' => '0 0 0 ? * 1',
                                                    ],
                                                    'Interval' => [
                                                        'description' => '时间间隔，单位为秒。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '60',
                                                    ],
                                                    'Enforce' => [
                                                        'description' => '是否强制执行。为true表示忽略桌面及连接状态检测，强制执行定时任务。',
                                                        'type' => 'boolean',
                                                        'example' => 'false',
                                                    ],
                                                    'ResetType' => [
                                                        'description' => '如果是重置任务，需设置重置类型。取值：'."\n"
                                                            .'-     `RESET_TYPE_SYSTEM`： 重置系统盘'."\n"
                                                            .'-     `RESET_TYPE_USER_DISK`：重置数据盘'."\n"
                                                            .'-     `RESET_TYPE_BOTH`：系统盘和数据盘',
                                                        'type' => 'string',
                                                        'example' => 'RESET_TYPE_BOTH',
                                                    ],
                                                    'AllowClientSetting' => [
                                                        'description' => '是否允许客户端设置策略。',
                                                        'type' => 'boolean',
                                                        'example' => 'true',
                                                    ],
                                                    'OperationType' => [
                                                        'description' => '定时任务类型。可能值：'."\n"
                                                            ."\n"
                                                            .'- SHUTDOWN：关机'."\n"
                                                            .'- HIBERNATE：休眠',
                                                        'type' => 'string',
                                                        'example' => 'SHUTDOWN',
                                                    ],
                                                    'ExecutionTime' => [
                                                        'description' => '任务执行时间。',
                                                        'type' => 'string',
                                                        'example' => '2021-12-31T15:59Z',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Clients' => [
                                            'description' => '支持的客户端信息。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '支持的客户端信息。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Status' => [
                                                        'description' => '客户端状态，取值：'."\n"
                                                            ."\n"
                                                            .'- ON：允许登录'."\n"
                                                            .'- OFF：不允许登录',
                                                        'type' => 'string',
                                                        'example' => 'ON',
                                                    ],
                                                    'ClientType' => [
                                                        'description' => '客户端类型，取值：'."\n"
                                                            ."\n"
                                                            .'- macos：Mac客户端'."\n"
                                                            .'- ios：IOS客户端'."\n"
                                                            .'- android：Android客户端'."\n"
                                                            .'- html5：Web客户端'."\n"
                                                            .'- windows：Windows客户端'."\n"
                                                            .'- linux：Linux客户端',
                                                        'type' => 'string',
                                                        'example' => 'windows',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'SupportHibernation' => [
                                            'description' => '是否支持休眠。取值：'."\n"
                                                ."\n"
                                                .'- true：支持'."\n"
                                                .'- false：不支持',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'HibernationBeta' => [
                                            'description' => '是否为休眠测试版本。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'SessionType' => [
                                            'description' => '会话类型。可能值：'."\n"
                                                ."\n"
                                                .'- SINGLE_SESSION：单会话'."\n"
                                                .'- MULTIPLE_SESSION：多会话',
                                            'type' => 'string',
                                            'example' => 'SINGLE_SESSION',
                                        ],
                                        'Platform' => [
                                            'description' => '操作系统平台信息。可能值：'."\n"
                                                .'- CentOS'."\n"
                                                .'- Ubuntu'."\n"
                                                .'- Windows Server 2016'."\n"
                                                .'- Windows Server 2019'."\n"
                                                .'- UOS'."\n",
                                            'type' => 'string',
                                            'example' => 'Ubuntu',
                                        ],
                                        'Os' => [
                                            'description' => '操作系统类型',
                                            'type' => 'string',
                                            'example' => 'Windows',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"eyJkZWZhdWx0IjpbIjIwMjItMDgtMTdUM****\\",\\n  \\"RequestId\\": \\"4686A731-D601-548C-83E2-4CB6371E****\\",\\n  \\"Desktops\\": [\\n    {\\n      \\"CreationTime\\": \\"2020-11-06T08:28Z\\",\\n      \\"ChargeType\\": \\"PostPaid\\",\\n      \\"DesktopName\\": \\"testDesktopName\\",\\n      \\"HostName\\": \\"testName\\",\\n      \\"DesktopGroupId\\": \\"dg-3uiojcc0j4kh7****\\",\\n      \\"DesktopId\\": \\"ecd-gx2x1dhsmucyy****\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"LastStartTime\\": \\"2021-07-13T15:59Z\\",\\n      \\"Cpu\\": 2,\\n      \\"EndUserId\\": \\"User1\\",\\n      \\"ExpiredTime\\": \\"2021-12-31T15:59Z\\",\\n      \\"DesktopStatus\\": \\"Running\\",\\n      \\"DesktopType\\": \\"ecd.basic.large\\",\\n      \\"ConnectionStatus\\": \\"Disconnected\\",\\n      \\"Memory\\": 4096,\\n      \\"ImageId\\": \\"m-4zfb6zj728hhr****\\",\\n      \\"DirectoryId\\": \\"cn-hangzhou+dir-jedbpr4sl9l37****\\\\t\\",\\n      \\"Disks\\": [\\n        {\\n          \\"DiskType\\": \\"SYSTEM\\",\\n          \\"DiskId\\": \\"d-jedbpr4sl9l37****\\",\\n          \\"DiskSize\\": 80\\n        }\\n      ],\\n      \\"OsType\\": \\"Windows\\",\\n      \\"Sessions\\": [\\n        {\\n          \\"EndUserId\\": \\"User1\\",\\n          \\"EstablishmentTime\\": \\"2021-03-07T08:23Z\\"\\n        }\\n      ],\\n      \\"PolicyGroupId\\": \\"pg-9cktlowtxfl6****\\",\\n      \\"EndUserIds\\": [\\n        \\"User1\\"\\n      ],\\n      \\"GpuMemory\\": 2048,\\n      \\"FotaUpdate\\": {\\n        \\"Project\\": \\"testProject\\",\\n        \\"Channel\\": \\"Enterprise\\",\\n        \\"CurrentAppVersion\\": \\"0.0.0-D-20220102.xxxx\\",\\n        \\"NewAppVersion\\": \\"0.0.0-R-20220307.xxxx\\",\\n        \\"Force\\": false,\\n        \\"ReleaseNote\\": \\"测试升级包03-07\\",\\n        \\"Size\\": \\"100\\",\\n        \\"ReleaseNoteEn\\": \\"Release note\\",\\n        \\"ReleaseNoteJp\\": \\"リリースノート\\"\\n      },\\n      \\"ProtocolType\\": \\"ASP\\",\\n      \\"OfficeSiteId\\": \\"cn-hangzhou+dir-363353****\\",\\n      \\"NetworkInterfaceIp\\": \\"192.168.xx.xx\\",\\n      \\"UserCustomName\\": \\"testDesktop\\",\\n      \\"ManagementFlags\\": [\\n        \\"UPDATING\\"\\n      ],\\n      \\"LocalName\\": \\"（华东2）上海\\",\\n      \\"RealDesktopId\\": \\"ecd-gx2x1dhsm****\\",\\n      \\"DesktopTimers\\": [\\n        {\\n          \\"TimerType\\": \\"NoConnectShutdown\\",\\n          \\"CronExpression\\": \\"0 0 0 ? * 1\\",\\n          \\"Interval\\": 60,\\n          \\"Enforce\\": false,\\n          \\"ResetType\\": \\"RESET_TYPE_BOTH\\",\\n          \\"AllowClientSetting\\": true,\\n          \\"OperationType\\": \\"SHUTDOWN\\",\\n          \\"ExecutionTime\\": \\"2021-12-31T15:59Z\\"\\n        }\\n      ],\\n      \\"Clients\\": [\\n        {\\n          \\"Status\\": \\"ON\\",\\n          \\"ClientType\\": \\"windows\\"\\n        }\\n      ],\\n      \\"SupportHibernation\\": true,\\n      \\"HibernationBeta\\": true,\\n      \\"SessionType\\": \\"SINGLE_SESSION\\",\\n      \\"Platform\\": \\"Ubuntu\\",\\n      \\"Os\\": \\"Windows\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询全地域云桌面详细信息',
            'summary' => '查询多个区域云桌面详细信息。目前仅支持中国内地对应的区域查询（不包含南京）。',
            'description' => '- 此接口为中心化域名，接入点为上海，不支持其他区域调用。'."\n"
                .'- 此接口中的桌面状态信息与实际值有1~3秒延迟。',
        ],
        'DescribeOfficeSites' => [
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
                    'Anonymous' => [],
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。可以调用[DescribeRegions](~~196646~~)获取无影云桌面支持的地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClientId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端生成的唯一ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '42f6645a-9c3c-4772-be2a-cc5f5732****',
                    ],
                ],
                [
                    'name' => 'OfficeSiteId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '工作区ID。可设置1~100个。',
                        'type' => 'array',
                        'items' => [
                            'description' => '工作区ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'cn-hangzhou+dir-363353****',
                        ],
                        'required' => false,
                        'maxItems' => 100,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                            'OfficeSites' => [
                                'description' => '工作区信息集合。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '工作区对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'SsoServiceUrl' => [
                                            'description' => 'SSO连接。',
                                            'type' => 'string',
                                            'example' => 'https://eds-cn-shanghai-67****',
                                        ],
                                        'DesktopAccessType' => [
                                            'description' => '连接云桌面时允许使用的接入方式。'."\n"
                                                ."\n"
                                                .'> VPC连接方式依赖于阿里云私网连接PrivateLink服务，该服务不收取费用。该参数设置为VPC或者Any时，系统将自动为您开通私网连接服务。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'INTERNET' => '只允许客户端通过公网连接云桌面。 [默认值]',
                                                'VPC' => '只允许处于VPC网络内的客户端连接云桌面。',
                                                'Any' => '不限制方式。使用客户端连接云桌面时可以自行选择连接方式。',
                                            ],
                                            'example' => 'VPC',
                                        ],
                                        'DesktopVpcEndpoint' => [
                                            'description' => 'VPC连接桌面时所使用的终端节点。',
                                            'type' => 'string',
                                            'example' => 'http://ep-bp1s2vmbj55r5rzc****.epsrv-bp1pcfhpwvlpny01****.cn-hangzhou.privatelink.aliyuncs.com',
                                        ],
                                        'OfficeSiteType' => [
                                            'description' => '工作区账号系统类型。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'ad_connector' => '企业AD账号',
                                                'simple' => '便捷账号',
                                            ],
                                            'example' => 'SIMPLE',
                                        ],
                                        'ProviderId' => [
                                            'description' => '用户账号BID。',
                                            'type' => 'string',
                                            'example' => '268****',
                                        ],
                                        'OfficeSiteId' => [
                                            'description' => '工作区ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou+dir-363353****',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"OfficeSites\\": [\\n    {\\n      \\"SsoServiceUrl\\": \\"https://eds-cn-shanghai-67****\\",\\n      \\"DesktopAccessType\\": \\"VPC\\",\\n      \\"DesktopVpcEndpoint\\": \\"http://ep-bp1s2vmbj55r5rzc****.epsrv-bp1pcfhpwvlpny01****.cn-hangzhou.privatelink.aliyuncs.com\\",\\n      \\"OfficeSiteType\\": \\"SIMPLE\\",\\n      \\"ProviderId\\": \\"268****\\",\\n      \\"OfficeSiteId\\": \\"cn-hangzhou+dir-363353****\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询工作区详细信息',
            'summary' => '调用DescribeOfficeSites查询工作区的详细信息。',
        ],
        'DescribeRegions' => [
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
                    'Anonymous' => [],
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClientId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端生成的唯一ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ac4a73ad-789a-449a-a88f-d18571d6****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                            'Regions' => [
                                'description' => '地域信息对象。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '地域信息对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'RegionEndpoint' => [
                                            'description' => '地域对应的Endpoint。',
                                            'type' => 'string',
                                            'example' => 'ecd.cn-hangzhou.aliyuncs.com',
                                        ],
                                        'RegionId' => [
                                            'description' => '地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"Regions\\": [\\n    {\\n      \\"RegionEndpoint\\": \\"ecd.cn-hangzhou.aliyuncs.com\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查看可选的地域和可用区',
        ],
        'DescribeSnapshots' => [
            'summary' => '查询一台云桌面的快照列表和快照的详细信息。',
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
                    'Anonymous' => [],
                ],
            ],
            'operationType' => 'read',
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。可以调用[DescribeRegions](~~196646~~)获取无影云桌面支持的地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DesktopId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云桌面ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ecd-gx2x1dhsmucyy****',
                    ],
                ],
                [
                    'name' => 'SnapshotId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '快照ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 's-2ze81owrnv9pity4****',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，每页最大行数。默认值：100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下一个查询开始的Token，NextToken为空表示没有下一个。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AAAAAV3MpHK1AP0pfERHZN5pu6nmB7qrRFJ8vmttjxPL****',
                    ],
                ],
                [
                    'name' => 'ClientId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户ClientID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '16dad2b6-3c6d-4e4c-b057-78ecb13c****',
                    ],
                ],
                [
                    'name' => 'SessionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'a99b9aca-bac5-4da2-819e-400ce98f****',
                    ],
                ],
                [
                    'name' => 'LoginToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '登录凭证。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'v16abfb945208fc5745061668654680853da4a25202d1a394fcad57bba484e9827ad43ea7d10fb6bf13d44a4adc0e9****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '下一个查询开始的Token，NextToken为空表示没有下一个。',
                                'type' => 'string',
                                'example' => 'AAAAAV3MpHK1AP0pfERHZN5pu6nmB7qrRFJ8vmttjxPL****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '51592A88-0F2C-55E6-AD2C-2AD9C10D****',
                            ],
                            'Snapshots' => [
                                'description' => '快照信息集合。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'CreationTime' => [
                                            'description' => '快照创建时间。按照[ISO8601](~~25696~~)标准表示，并使用UTC +0时间，格式为yyyy-MM-ddTHH:mm:ssZ。',
                                            'type' => 'string',
                                            'example' => '2020-12-20T14:52:28Z',
                                        ],
                                        'Status' => [
                                            'description' => '快照状态。'."\n"
                                                .'枚举值：'."\n"
                                                .'- PROGRESSING: 创建中'."\n"
                                                .'- FAILED: 创建失败'."\n"
                                                .'- ACCOMPLISHED: 完成创建',
                                            'type' => 'string',
                                            'enumValueTitles' => [],
                                            'example' => 'ACCOMPLISHED',
                                        ],
                                        'SnapshotType' => [
                                            'description' => '快照创建类型。'."\n"
                                                .'枚举值：'."\n"
                                                .'- AUTO: 自动创建快照'."\n"
                                                .'- USER: 手动创建快照',
                                            'type' => 'string',
                                            'enumValueTitles' => [],
                                            'example' => 'USER',
                                        ],
                                        'SnapshotName' => [
                                            'description' => '快照名称。',
                                            'type' => 'string',
                                            'example' => 'testSnapshotName',
                                        ],
                                        'Progress' => [
                                            'description' => '创建桌面时的进度。',
                                            'type' => 'string',
                                            'example' => '100%',
                                        ],
                                        'Description' => [
                                            'description' => '快照描述信息。',
                                            'type' => 'string',
                                            'example' => 'testDescription',
                                        ],
                                        'SnapshotId' => [
                                            'description' => '快照ID。',
                                            'type' => 'string',
                                            'example' => 's-2zeipxmnhej803x7****',
                                        ],
                                        'RemainTime' => [
                                            'description' => '正在创建的快照剩余完成时间。单位为秒。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '30',
                                        ],
                                        'SourceDiskSize' => [
                                            'description' => '源磁盘容量。单位：GiB。',
                                            'type' => 'string',
                                            'example' => '150',
                                        ],
                                        'SourceDiskType' => [
                                            'description' => '源磁盘类型。'."\n"
                                                .'可能值：'."\n"
                                                .'- SYSTEM：系统盘。'."\n"
                                                .'- DATA：数据盘。',
                                            'type' => 'string',
                                            'example' => 'SYSTEM',
                                        ],
                                        'DesktopId' => [
                                            'description' => '快照所属的云桌面ID。',
                                            'type' => 'string',
                                            'example' => 'ecd-g03l3tlm8djoj****',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"AAAAAV3MpHK1AP0pfERHZN5pu6nmB7qrRFJ8vmttjxPL****\\",\\n  \\"RequestId\\": \\"51592A88-0F2C-55E6-AD2C-2AD9C10D****\\",\\n  \\"Snapshots\\": [\\n    {\\n      \\"CreationTime\\": \\"2020-12-20T14:52:28Z\\",\\n      \\"Status\\": \\"ACCOMPLISHED\\",\\n      \\"SnapshotType\\": \\"USER\\",\\n      \\"SnapshotName\\": \\"testSnapshotName\\",\\n      \\"Progress\\": \\"100%\\",\\n      \\"Description\\": \\"testDescription\\",\\n      \\"SnapshotId\\": \\"s-2zeipxmnhej803x7****\\",\\n      \\"RemainTime\\": 30,\\n      \\"SourceDiskSize\\": \\"150\\",\\n      \\"SourceDiskType\\": \\"SYSTEM\\",\\n      \\"DesktopId\\": \\"ecd-g03l3tlm8djoj****\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询云桌面快照信息',
        ],
        'EncryptPassword' => [
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
                    'Anonymous' => [],
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'ClientId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端生成的唯一ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1d40776f-e9cb-4e2b-a8da-308d10e8****',
                    ],
                ],
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录 ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'cn-beijing+dir-131196****',
                    ],
                ],
                [
                    'name' => 'OfficeSiteId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作区ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'cn-beijing+dir-131196****',
                    ],
                ],
                [
                    'name' => 'SessionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => false,
                        'example' => 'c78e2e52-23d9-4401-a648-e67ac6ff****',
                    ],
                ],
                [
                    'name' => 'LoginToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '登录凭证。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'v1b16dcff3ab21a6c5ec01652238375511cff5a1db59fd4dc49afb37e2ea7a626af6f38109fd0498b6abd9de1af7743****',
                    ],
                ],
                [
                    'name' => 'Password',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Ab123456',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回对象。',
                        'type' => 'object',
                        'properties' => [
                            'EncryptedPassword' => [
                                'description' => '已加密密码。',
                                'type' => 'string',
                                'example' => 'd34601bc-e6b1-4433-b0cc-8f6c5e52;n4apvGub3OBoj4Grwg==;thhO4UEomJfdvwnwlA==',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'AF538DA8-FFC6-52DA-8FF8-7B92579F****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"EncryptedPassword\\": \\"d34601bc-e6b1-4433-b0cc-8f6c5e52;n4apvGub3OBoj4Grwg==;thhO4UEomJfdvwnwlA==\\",\\n  \\"RequestId\\": \\"AF538DA8-FFC6-52DA-8FF8-7B92579F****\\"\\n}","type":"json"}]',
            'title' => '加密密码',
        ],
        'GetCloudDriveServiceMountToken' => [
            'summary' => '获取云盘登录凭证。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'Anonymous' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'LoginToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '登录凭证。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v1972cd3446f0e523598916520951742474e6624fcdea6652994d47bc6157d27f7cc900c339db67882j3no4nh5bk3b4****',
                    ],
                ],
                [
                    'name' => 'SessionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '14e1fe41-ce9b-491d-aa8c-345jk2n4bk****',
                    ],
                ],
                [
                    'name' => 'ClientId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端生成的唯一ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '00e122c3-13fb-4fc3-bc7a-5d9acb89****',
                    ],
                ],
                [
                    'name' => 'OfficeSiteId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作区ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou+dir-7186763****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回对象。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'DC27288A-F9E1-5092-9B5B-71C27D15****',
                            ],
                            'Token' => [
                                'description' => '返回Token信息列表。',
                                'type' => 'object',
                                'properties' => [
                                    'Token' => [
                                        'description' => 'Token值。',
                                        'type' => 'string',
                                        'example' => '7836fa6eced7dc8d54c775k34iu3h4i2kh534f****',
                                    ],
                                    'ExpiredAfter' => [
                                        'description' => '到期时间。',
                                        'type' => 'string',
                                        'example' => '2022-10-10T04:41:35Z',
                                    ],
                                    'UsedSize' => [
                                        'description' => '已使用的容量。单位：GiB。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '605089',
                                    ],
                                    'TotalSize' => [
                                        'description' => '云盘总容量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '6050416754750',
                                    ],
                                    'DomainId' => [
                                        'description' => '云盘域名。',
                                        'type' => 'string',
                                        'example' => 'h****',
                                    ],
                                    'Status' => [
                                        'description' => '当前云盘用户的状态。取值范围：'."\n"
                                            ."\n"
                                            .'- enabled'."\n"
                                            .'- disabled',
                                        'type' => 'string',
                                        'example' => 'enabled',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DC27288A-F9E1-5092-9B5B-71C27D15****\\",\\n  \\"Token\\": {\\n    \\"Token\\": \\"7836fa6eced7dc8d54c775k34iu3h4i2kh534f****\\",\\n    \\"ExpiredAfter\\": \\"2022-10-10T04:41:35Z\\",\\n    \\"UsedSize\\": 605089,\\n    \\"TotalSize\\": 6050416754750,\\n    \\"DomainId\\": \\"h****\\",\\n    \\"Status\\": \\"enabled\\"\\n  }\\n}","type":"json"}]',
            'title' => '获取云盘登录凭证',
        ],
        'IsKeepAlive' => [
            'summary' => '是否保持登录判断接口',
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
                    'Anonymous' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ClientId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端生成的唯一ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'f4a0dc8e-1702-4728-9a60-95b27a35****',
                    ],
                ],
                [
                    'name' => 'OfficeSiteId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作区ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou+dir-885351****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。可以调用DescribeRegions获取无影云桌面支持的地域列表。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****'."\n",
                            ],
                            'OfficeSiteId' => [
                                'description' => '工作区ID。',
                                'type' => 'string',
                                'example' => 'cn-hangzhou+dir-885351****'."\n",
                            ],
                            'TenantId' => [
                                'description' => '阿里云租户UID。',
                                'type' => 'string',
                                'example' => '141631846826****',
                            ],
                            'IsKeepAlive' => [
                                'description' => '是否保持登录。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\\\n\\",\\n  \\"OfficeSiteId\\": \\"cn-hangzhou+dir-885351****\\\\n\\",\\n  \\"TenantId\\": \\"141631846826****\\",\\n  \\"IsKeepAlive\\": true\\n}","type":"json"}]',
            'title' => '判断是否已开启保持登录',
        ],
        'ReportSessionStatus' => [
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
                    'Anonymous' => [],
                ],
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'i-bp167fcodoa90ixn****',
                    ],
                ],
                [
                    'name' => 'SessionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'SessionStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话状态。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'enumValueTitles' => [
                            'SessionLogOff' => '会话关闭',
                            'DesktopTimerDisconnection' => '桌面定时任务断连',
                            'SessionReboot' => '重启',
                            'DesktopTimerShutdown' => '桌面定时任务开机',
                            'SessionLock' => '登录用户锁定会话',
                            'SessionShutdown' => '关机',
                            'SessionUnLock' => '登录用户未锁定会话',
                            'DesktopTimerReboot' => '桌面定时任务重启',
                            'ConsoleConnect' => '会话开始前的控制台连接',
                            'SessionLogOn' => '会话开始',
                            'SessionPopup' => '断开连接前会话退出',
                            'SessionDisconnect' => '会话断连',
                            'ConsoleDisconnect' => '会话注销后控制台断开连接',
                        ],
                        'example' => 'SessionLogOn',
                    ],
                ],
                [
                    'name' => 'SessionChangeTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话变更的持续时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '1642909143781',
                    ],
                ],
                [
                    'name' => 'EndUserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '连接用户。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'liming',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0EE5DE20-25F4-5870-9D56-C259A45B****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0EE5DE20-25F4-5870-9D56-C259A45B****\\"\\n}","type":"json"}]',
            'title' => '报告会话状态',
        ],
        'ResetPassword' => [
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
                    'Anonymous' => [],
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClientId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端生成的唯一ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '95e41934-383e-4c9f-824f-3b93b19b****',
                    ],
                ],
                [
                    'name' => 'OfficeSiteId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作区ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou+dir-899235****',
                    ],
                ],
                [
                    'name' => 'EndUserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'liming',
                    ],
                ],
                [
                    'name' => 'Email',
                    'in' => 'query',
                    'schema' => [
                        'description' => '邮箱。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'a***@example.edu',
                    ],
                ],
                [
                    'name' => 'phone',
                    'in' => 'query',
                    'schema' => [
                        'description' => '电话。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '1827912****',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2f00ab32-a473-4c90-9aae-dd8842ae****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A00477A5-167F-56D2-A315-EA77E4BD****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A00477A5-167F-56D2-A315-EA77E4BD****\\"\\n}","type":"json"}]',
            'title' => '重置密码',
        ],
        'ResetSnapshot' => [
            'summary' => '恢复快照对应的磁盘数据。',
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
                    'Anonymous' => [],
                ],
            ],
            'operationType' => 'write',
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'SnapshotId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '快照ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 's-2zeipxmnhej803x7****',
                    ],
                ],
                [
                    'name' => 'ClientId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端生成的唯一ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'b9d8ddfd-65d4-4857-9e97-56477d1f****',
                    ],
                ],
                [
                    'name' => 'SessionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '05182b8c-bb0d-49d3-963c-ee63a507****',
                    ],
                ],
                [
                    'name' => 'LoginToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '登录凭证。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'v1fdef51b727aa91d6c881658978508114d3f5680fa99a66b2a631d17d5bb4860cccf1173be24d77d5ef1423c83aea****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\"\\n}","type":"json"}]',
            'title' => '恢复快照对应的磁盘数据',
        ],
        'SendTokenCode' => [
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
                    'Anonymous' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ClientId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端生成的唯一ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'f4a0dc8e-1702-4728-9a60-95b27a35****',
                    ],
                ],
                [
                    'name' => 'OfficeSiteId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作区ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou+dir-2925105532',
                    ],
                ],
                [
                    'name' => 'LoginToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '登录凭证。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'v28101ac6a9e69c66b04a163031680463660b4b216cd758f34b60b9ad6a7c7f7334b83dd8f75eef4209c68f9f1080b****',
                    ],
                ],
                [
                    'name' => 'SessionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'cd45e873-650d-4d70-acb9-f996187a****',
                    ],
                ],
                [
                    'name' => 'EndUserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户名。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'alice',
                    ],
                ],
                [
                    'name' => 'ClientOS',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端运行的操作系统。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Windows_NT 10.0.18363 x64',
                    ],
                ],
                [
                    'name' => 'ClientVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端版本。若使用无影客户端，可在客户端登录界面的关于对话框中查看该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2.1.0-R-20210731.151756',
                    ],
                ],
                [
                    'name' => 'TokenCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '若已在无影云桌面控制台开启客户端二次认证，且识别到当前登录用户有风险时，会发送该二次认证验证码到终端用户邮箱。当CurrentStage为TokenVerify时必填。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '63****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '134BD0B2-B848-5743-9CE2-C1FD3D5F****'."\n",
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"134BD0B2-B848-5743-9CE2-C1FD3D5F****\\\\n\\"\\n}","type":"json"}]',
            'title' => '发送登录验证码信息。',
        ],
        'SetFingerPrintTemplate' => [
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
                    'Anonymous' => [],
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClientId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端生成的唯一ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '347431a9-90f6-448e-82c4-42bc84a9****',
                    ],
                ],
                [
                    'name' => 'SessionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => false,
                        'example' => '8b42538a-246e-45a1-95ea-e5c65b09****',
                    ],
                ],
                [
                    'name' => 'LoginToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '登录凭证。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'v11c73e7af0cb43ff39301651142485099ffb447085d76c4147519dbaa21c3bd90d53045e327c1f525ee6331c52556****',
                    ],
                ],
                [
                    'name' => 'FingerPrintTemplate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指纹模板。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'goG3gG8AAABhujtscn',
                    ],
                ],
                [
                    'name' => 'EncryptedFingerPrintTemplate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '已加密的指纹模板。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AAAAAAAAAAAAAA',
                    ],
                ],
                [
                    'name' => 'EncryptedKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '加密密钥。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'drjfspchj',
                    ],
                ],
                [
                    'name' => 'Password',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'As53328794',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '描述。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'testDescription',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123e4567-e89b-12d3-a456-42665544****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Index' => [
                                'description' => '索引。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CDE666EA-4FCD-5024-895C-8698E3D3****',
                            ],
                            'EncryptedPassword' => [
                                'description' => '已加密密码。',
                                'type' => 'string',
                                'example' => '0711abb9-4cf8-41b2-9d0e-b51209468631;da4VFPNxwY3CZegFjOrCNw==;iHp2l9/qGcfD4tWx7jZIZQ==',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Index\\": 1,\\n  \\"RequestId\\": \\"CDE666EA-4FCD-5024-895C-8698E3D3****\\",\\n  \\"EncryptedPassword\\": \\"0711abb9-4cf8-41b2-9d0e-b51209468631;da4VFPNxwY3CZegFjOrCNw==;iHp2l9/qGcfD4tWx7jZIZQ==\\"\\n}","type":"json"}]',
            'title' => '设置指纹模板',
        ],
        'SetFingerPrintTemplateDescription' => [
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
                    'Anonymous' => [],
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClientId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端生成的唯一ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0764064c-1609-4d3c-8cb7-ab8d3feg****',
                    ],
                ],
                [
                    'name' => 'SessionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => false,
                        'example' => 'd28520d4-da0b-4a97-981d-683db865****',
                    ],
                ],
                [
                    'name' => 'LoginToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '登录凭证。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'v14e5a2404c495249f7541646535779667ea0b5d87754b5d2d2a3099bda774f3832e24756ef3e66eb574b1f3e99078****',
                    ],
                ],
                [
                    'name' => 'Index',
                    'in' => 'query',
                    'schema' => [
                        'description' => '索引。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '描述。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Finger 1',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '',
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '40401e62-5caf-4508-8de7-bf98af12****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BBD7DFD1-A5DE-51D9-8FD6-3BF54EF4****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BBD7DFD1-A5DE-51D9-8FD6-3BF54EF4****\\"\\n}","type":"json"}]',
            'title' => '设置指纹模板描述',
        ],
        'UnbindUserDesktop' => [
            'summary' => '解绑用户桌面。',
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
                    'Anonymous' => [],
                ],
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'LoginToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '登录凭证。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'v12307f5e0****',
                    ],
                ],
                [
                    'name' => 'ClientType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端的类型。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'windows',
                    ],
                ],
                [
                    'name' => 'ClientId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端生成的唯一ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '58f96f67-7944-4f97-9342-****',
                    ],
                ],
                [
                    'name' => 'SessionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3b053331-dc98-43d8-b247-****',
                    ],
                ],
                [
                    'name' => 'UserDesktopId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户桌面ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ud-sdfs****',
                    ],
                ],
                [
                    'name' => 'Force',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否强制解绑。'."\n"
                            .'- true：即使在连接状态下也会解绑。'."\n"
                            .'- false：只有在未连接的状态下才解绑。',
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
                        'description' => '返回信息合集。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D5B7CF35-E078-5EBF-A010-****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IdempotentParameterMismatch',
                        'errorMessage' => 'The request uses the same client token as a previous, but non-identical request. Do not reuse a client token with different requests, unless the requests are identical.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D5B7CF35-E078-5EBF-A010-****\\"\\n}","type":"json"}]',
            'title' => '解绑用户桌面',
        ],
        'VerifyCredential' => [
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
                    'Anonymous' => [],
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'ClientId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端生成的唯一ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd0b95762-0541-4b53-a0e4-7ed09f39****',
                    ],
                ],
                [
                    'name' => 'OfficeSiteId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作区ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-shanghai+dir-227468****',
                    ],
                ],
                [
                    'name' => 'SessionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'eb17af2e-1dd6-4cc4-a3ee-3a14d0d7****',
                    ],
                ],
                [
                    'name' => 'LoginToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '登录凭证。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'v1f5772a1c60dbea9fd8e1648567079018086448d234b5bc8e30bec0ba6e80c41c767c4dd0db51e9e5c4e0f111431a****',
                    ],
                ],
                [
                    'name' => 'CredentialType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定要清除的登录凭据类型。取值：'."\n"
                            .'- Password：密码'."\n"
                            .'- MfaPasscode：多因子认证'."\n"
                            .'- FingerPrint：指纹',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'Password',
                    ],
                ],
                [
                    'name' => 'Credential',
                    'in' => 'query',
                    'schema' => [
                        'description' => '认证信息。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123456789cyG',
                    ],
                ],
                [
                    'name' => 'EncryptedKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待加密的密钥ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'drjfs****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D5F0BDFB-A229-5F1D-B790-33709D43****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D5F0BDFB-A229-5F1D-B790-33709D43****\\"\\n}","type":"json"}]',
            'title' => '验证客户端本地会话解锁的凭证',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'ap-southeast-7',
            'endpoint' => 'ecd.ap-southeast-7.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'ecd.cn-qingdao.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'ecd.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'ecd.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'ecd.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'ecd.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-nanjing',
            'endpoint' => 'ecd.cn-nanjing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'ecd.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-guangzhou',
            'endpoint' => 'ecd.cn-guangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'ecd.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'ecd.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'ecd.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'ecd.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'ecd.ap-southeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-6',
            'endpoint' => 'ecd.ap-southeast-6.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'ecd.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'ecd.eu-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'ecd.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'ecd.cn-hangzhou-finance.aliyuncs.com',
        ],
    ],
];
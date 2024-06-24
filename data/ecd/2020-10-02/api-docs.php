<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'ecd',
    'version' => '2020-10-02',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 168218,
      'title' => '客户端',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetLoginToken',
        1 => 'GetConnectionTicket',
        2 => 'RefreshLoginToken',
        3 => 'StartDesktops',
        4 => 'StopDesktops',
        5 => 'RebootDesktops',
      ),
    ),
    1 => 
    array (
      'id' => 168749,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ApproveFotaUpdate',
        1 => 'ChangePassword',
        2 => 'DeleteFingerPrintTemplate',
        3 => 'DescribeDirectories',
        4 => 'DescribeFingerPrintTemplates',
        5 => 'DescribeGlobalDesktops',
        6 => 'DescribeOfficeSites',
        7 => 'DescribeRegions',
        8 => 'DescribeSnapshots',
        9 => 'EncryptPassword',
        10 => 'GetCloudDriveServiceMountToken',
        11 => 'IsKeepAlive',
        12 => 'ReportSessionStatus',
        13 => 'ResetPassword',
        14 => 'ResetSnapshot',
        15 => 'SendTokenCode',
        16 => 'SetFingerPrintTemplate',
        17 => 'SetFingerPrintTemplateDescription',
        18 => 'UnbindUserDesktop',
        19 => 'VerifyCredential',
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
    'GetLoginToken' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'Anonymous' => 
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
            'description' => '地域ID。可以调用[DescribeRegions](~~196646~~)获取无影云电脑支持的地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端生成的唯一ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'f4a0dc8e-1702-4728-9a60-95b27a35****',
          ),
        ),
        2 => 
        array (
          'name' => 'DirectoryId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '办公网络ID，与`OfficeSiteId`含义相同。建议停止使用`DirectoryId`，改为使用`OfficeSiteId`。`DirectoryId`和`OfficeSiteId`只能填写一个，不可同时填写。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou+dir-885351****',
          ),
        ),
        3 => 
        array (
          'name' => 'OfficeSiteId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '办公网络ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou+dir-885351****',
          ),
        ),
        4 => 
        array (
          'name' => 'SessionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '登录的会话ID。

- 若未绑定虚拟MFA设备或者未开启客户端二次认证，则不需要填写`SessionId`。
- 若已绑定虚拟MFA设备或者已开启客户端二次认证，则`ADPassword`之后的登录认证阶段需要填写`SessionId`。可从便捷账号验证（即`GetLoginToken`请求处于`ADPassword`阶段）的返回结果中获取`SessionId`。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cd45e873-650d-4d70-acb9-f996187a****',
          ),
        ),
        5 => 
        array (
          'name' => 'CurrentStage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前登录认证阶段，依次为：

- `ADPassword`：验证用户信息。当使用便捷账号或者AD账号的账密认证时填写此值。
- `MFABind`：绑定虚拟MFA设备。
- `MFAVerify`：验证虚拟MFA设备生成的安全码。
- `TokenVerify`：客户端二次认证。
- `ChangePassword`：修改用户密码。
- `KeepAliveVerify`:  KeepAliveToken有效时，可用于换取LoginToken。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'ADPassword',
          ),
        ),
        6 => 
        array (
          'name' => 'EndUserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '便捷用户或AD用户的用户名。当`CurrentStage`为`ADPassword`时必填。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'alice',
          ),
        ),
        7 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '便捷用户或AD用户的密码。当`CurrentStage`为`ADPassword`时必填。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'Password1234',
          ),
        ),
        8 => 
        array (
          'name' => 'OldPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '旧密码。当`CurrentStage`为`ChangePassword`时必填。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'OldPassword',
          ),
        ),
        9 => 
        array (
          'name' => 'NewPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新密码。当`CurrentStage`为`ChangePassword`时必填。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'NewPassword',
          ),
        ),
        10 => 
        array (
          'name' => 'AuthenticationCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟MFA设备生成的安全码。当`CurrentStage`为`MFAVerify`时必填。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '47****',
          ),
        ),
        11 => 
        array (
          'name' => 'ClientOS',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运行客户端的设备的操作系统。',
            'type' => 'string',
            'required' => false,
            'example' => 'Windows_NT 10.0.18363 x64',
          ),
        ),
        12 => 
        array (
          'name' => 'ClientVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端版本。若使用无影客户端，可在客户端登录界面的**关于**对话框中查看该参数。',
            'type' => 'string',
            'required' => false,
            'example' => '2.1.0-R-20210731.151756',
          ),
        ),
        13 => 
        array (
          'name' => 'TokenCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '若已在无影云电脑控制台开启客户端二次认证，且识别到当前登录用户有风险时，会发送该二次认证验证码到终端用户邮箱。当`CurrentStage`为`TokenVerify`时必填。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '63****',
          ),
        ),
        14 => 
        array (
          'name' => 'KeepAlive',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否保持登录。',
            'type' => 'boolean',
            'required' => false,
            'enumValueTitles' => 
            array (
              'null' => '不保持登录 [默认值]',
              'true' => '保持登录',
              'false' => '不保持登录',
            ),
            'example' => 'false',
          ),
        ),
        15 => 
        array (
          'name' => 'KeepAliveToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保持登录的凭证（Token），在登录成功且用户开启了保持登录选项后，接口会返回`KeepAliveToken`，在`KeepAliveToken`有效期内可以调用`GetLoginToken`接口并将`CurrentStage`设为`KeepAliveVerify`来换取登录凭证（LoginToken）。当`CurrentStage`为`KeepAliveVerify`时，`KeepAliveToken`必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'hide',
          ),
        ),
        16 => 
        array (
          'name' => 'Uuid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端唯一标识。若使用无影客户端，可在客户端登录界面的**关于**对话框中查看该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'C78CA9E99315687575DD2844C1F3****',
          ),
        ),
        17 => 
        array (
          'name' => 'ClientType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '无影软件客户端类型。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'HTML5' => 'Web客户端',
              'WINDOWS' => 'Windows客户端',
              'MACOS' => 'macOS客户端',
              'IOS' => 'iOS客户端',
              'ANDROID' => 'Android客户端',
            ),
            'example' => 'WINDOWS',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'Email' => 
              array (
                'description' => '用户邮箱。在登录后随LoginToken返回。    

- 如果是便捷用户，返回创建便捷用户时设置的邮箱。
- 如果是AD用户，返回以下形式：`用户名@AD域名`。',
                'type' => 'string',
                'example' => 'alice',
              ),
              'Secret' => 
              array (
                'description' => '绑定虚拟MFA设备时的密钥。用于`MFABind`阶段。

> 关于各认证阶段的详细信息，参见本接口请求参数`CurrentStage`的参数说明。',
                'type' => 'string',
                'example' => '5OCLLKKOJU5HPBX66H3QCTWYI7MH****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
              ),
              'EndUserId' => 
              array (
                'description' => '便捷账号用户名或AD用户名。',
                'type' => 'string',
                'example' => 'alice',
              ),
              'LoginToken' => 
              array (
                'description' => '登录凭证。',
                'type' => 'string',
                'example' => 'v18101ac6a9e69c66b04a163031680463660b4b216cd758f34b60b9ad6a7c7f7334b83dd8f75eef4209c68f9f1080b****',
              ),
              'NextStage' => 
              array (
                'description' => '预期的下一阶段。例如，若管理员在无影云电脑控制台开启了MFA认证，则当用户名密码认证通过后（即`ADPassword`阶段后），该参数会返回`MFAVerify`，表示此时需要做MFA认证。

> 关于各认证阶段的详细信息，参见本接口请求参数`CurrentStage`的参数说明。',
                'type' => 'string',
                'example' => 'MFAVerify',
              ),
              'QrCodePng' => 
              array (
                'description' => '绑定虚拟MFA设备时的密钥二维码。使用Base64编码。可以为空，用于`MFABind`阶段。

> 关于各认证阶段的详细信息，参见本接口请求参数`CurrentStage`的参数说明。',
                'type' => 'string',
                'example' => '5OCLLKKOJU5HPBX66H3QCTWY******',
              ),
              'Label' => 
              array (
                'description' => '便捷用户属性。如果是AD用户，则返回空值。',
                'type' => 'string',
                'example' => 'test:wuying',
              ),
              'SessionId' => 
              array (
                'description' => '会话ID。 仅在同一会话第一次调用`GetLoginToken`时返回。需要多次认证时，后续的阶段需要传入该参数。

> 关于各认证阶段的详细信息，参见本接口请求参数`CurrentStage`的参数说明。',
                'type' => 'string',
                'example' => 'd6ec166d-ab93-4286-bf7f-a18bb929****',
              ),
              'Phone' => 
              array (
                'description' => '便捷用户的手机号。如果是AD用户，则返回空值。',
                'type' => 'string',
                'example' => '1381111****',
              ),
              'TenantId' => 
              array (
                'description' => '阿里云账号ID。硬件终端识别使用。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '166353906220****',
              ),
              'KeepAliveToken' => 
              array (
                'description' => '用于保持登录的凭证（Token），在登录成功且用户开启了保持登录选项后，接口会返回`KeepAliveToken`。若未开启保持登录选项，则返回空值。',
                'type' => 'string',
                'example' => '006YwvYMsesWWsDBZnVB+Wq9AvJDVIqOY3YCktvtb7+KxMb3ClnNlV8+l/knhZYrXUmeP06IzkjF+IgcZ3vZKOyMprDyFHjCy1r27FRE/U7+geWCl8iQ+yF8GaCRHfJEkC2+ROs93HkT4tfHxyY1J8W7O7ZQGUC/cdCvm+cCP6FIy73IUuPuVR6PcKYXIpEZPW',
              ),
              'Industry' => 
              array (
                'description' => '> 内部专用字段，不对外开放使用。',
                'type' => 'string',
                'example' => 'edu',
              ),
              'Props' => 
              array (
                'description' => '> 内部专用字段，不对外开放使用。',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'string',
                  'description' => '> 内部专用字段，不对外开放使用。',
                  'example' => '{\'dingUserName\': u\'\\u674e\\u66fc\', \'role\': \'student\'}',
                ),
              ),
              'WindowDisplayMode' => 
              array (
                'description' => '> 内部专用字段，不对外开放使用。',
                'type' => 'string',
                'example' => 'mode',
              ),
              'RiskVerifyInfo' => 
              array (
                'description' => '登录风险识别相关信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Email' => 
                  array (
                    'description' => '触发核身时，通过该邮箱进行验证。',
                    'type' => 'string',
                    'example' => 'user@example.com',
                  ),
                  'LastLockDuration' => 
                  array (
                    'description' => '账号锁定时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1713749778',
                  ),
                  'Locked' => 
                  array (
                    'description' => '账号是否已锁定。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'true' => '是',
                      'false' => '否',
                    ),
                    'example' => 'true',
                  ),
                  'Phone' => 
                  array (
                    'description' => '触发核身时，通过该手机号进行验证。',
                    'type' => 'string',
                    'example' => '1381111****',
                  ),
                ),
              ),
              'Reason' => 
              array (
                'description' => '> 内部专用字段，不对外开放使用。',
                'type' => 'string',
                'example' => 'null',
              ),
              'PasswordStrategy' => 
              array (
                'description' => '> 内部专用字段，不对外开放使用。',
                'type' => 'object',
                'properties' => 
                array (
                  'TenantPasswordLength' => 
                  array (
                    'description' => '> 内部专用字段，不对外开放使用。',
                    'type' => 'string',
                    'example' => 'null',
                  ),
                  'TenantAlternativeChars' => 
                  array (
                    'description' => '> 内部专用字段，不对外开放使用。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '> 内部专用字段，不对外开放使用。',
                      'type' => 'string',
                      'example' => 'null',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Email\\": \\"alice\\",\\n  \\"Secret\\": \\"5OCLLKKOJU5HPBX66H3QCTWYI7MH****\\",\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"EndUserId\\": \\"alice\\",\\n  \\"LoginToken\\": \\"v18101ac6a9e69c66b04a163031680463660b4b216cd758f34b60b9ad6a7c7f7334b83dd8f75eef4209c68f9f1080b****\\",\\n  \\"NextStage\\": \\"MFAVerify\\",\\n  \\"QrCodePng\\": \\"5OCLLKKOJU5HPBX66H3QCTWY******\\",\\n  \\"Label\\": \\"test:wuying\\",\\n  \\"SessionId\\": \\"d6ec166d-ab93-4286-bf7f-a18bb929****\\",\\n  \\"Phone\\": \\"1381111****\\",\\n  \\"TenantId\\": 0,\\n  \\"KeepAliveToken\\": \\"006YwvYMsesWWsDBZnVB+Wq9AvJDVIqOY3YCktvtb7+KxMb3ClnNlV8+l/knhZYrXUmeP06IzkjF+IgcZ3vZKOyMprDyFHjCy1r27FRE/U7+geWCl8iQ+yF8GaCRHfJEkC2+ROs93HkT4tfHxyY1J8W7O7ZQGUC/cdCvm+cCP6FIy73IUuPuVR6PcKYXIpEZPW\\",\\n  \\"Industry\\": \\"edu\\",\\n  \\"Props\\": {\\n    \\"key\\": \\"{\'dingUserName\': u\'\\\\\\\\u674e\\\\\\\\u66fc\', \'role\': \'student\'}\\"\\n  },\\n  \\"WindowDisplayMode\\": \\"mode\\",\\n  \\"RiskVerifyInfo\\": {\\n    \\"Email\\": \\"user@example.com\\",\\n    \\"LastLockDuration\\": 1713749778,\\n    \\"Locked\\": \\"true\\",\\n    \\"Phone\\": \\"1381111****\\"\\n  },\\n  \\"Reason\\": \\"null\\",\\n  \\"PasswordStrategy\\": {\\n    \\"TenantPasswordLength\\": \\"null\\",\\n    \\"TenantAlternativeChars\\": [\\n      \\"null\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetLoginTokenResponse>\\n    <Email>alice</Email>\\n    <Secret>5OCLLKKOJU5HPBX66H3QCTWYI7MH****</Secret>\\n    <RequestId>1CBAFFAB-B697-4049-A9B1-67E1FC5F****</RequestId>\\n    <EndUserId>alice</EndUserId>\\n    <LoginToken>v18101ac6a9e69c66b04a163031680463660b4b216cd758f34b60b9ad6a7c7f7334b83dd8f75eef4209c68f9f1080b****</LoginToken>\\n    <NextStage>MFAVerify</NextStage>\\n    <QrCodePng>5OCLLKKOJU5HPBX66H3QCTWY******</QrCodePng>\\n    <Label>test:wuying</Label>\\n    <SessionId>d6ec166d-ab93-4286-bf7f-a18bb929****</SessionId>\\n    <Phone>1381111****</Phone>\\n    <KeepAliveToken>006YwvYMsesWWsDBZnVB+Wq9AvJDVIqOY3YCktvtb7+KxMb3ClnNlV8+l/knhZYrXUmeP06IzkjF+IgcZ3vZKOyMprDyFHjCy1r27FRE/U7+geWCl8iQ+yF8GaCRHfJEkC2+ROs93HkT4tfHxyY1J8W7O7ZQGUC/cdCvm+cCP6FIy73IUuPuVR6PcKYXIpEZPW</KeepAliveToken>\\n    <Industry>edu</Industry>\\n    <Props>\\n        <key>{\'dingUserName\': u\'\\\\u674e\\\\u66fc\', \'role\': \'student\'}</key>\\n    </Props>\\n</GetLoginTokenResponse>","errorExample":""}]',
      'title' => '获取登录凭证',
      'summary' => '获取登录凭证。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetConnectionTicket' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'Anonymous' => 
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
            'description' => '地域ID。可以调用[DescribeRegions](~~196646~~)获取无影云桌面支持的地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端生成的唯一ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'f4a0dc8e-1702-4728-9a60-95b27a35****',
          ),
        ),
        2 => 
        array (
          'name' => 'SessionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话ID。调用GetLoginToken获取',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cd45e873-650d-4d70-acb9-f996187a****',
          ),
        ),
        3 => 
        array (
          'name' => 'LoginToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '登录凭证。调用GetLoginToken获取',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'v18101ac6a9e69c66b04a163031680463660b4b216cd758f34b60b9ad6a7c7f7334b83dd8f75eef4209c68f9f1080b****',
          ),
        ),
        4 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '桌面连接任务ID。     
首次调用本接口时无需配置，后续调用本接口时配置为上一次调用本接口返回的`TaskId`。',
            'type' => 'string',
            'required' => false,
            'example' => '2afbad19-778a-4fc5-9674-1f19c638****',
          ),
        ),
        5 => 
        array (
          'name' => 'DesktopId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云桌面ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'ecd-gx2x1dhsmucyy****',
          ),
        ),
        6 => 
        array (
          'name' => 'ClientOS',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端操作系统。',
            'type' => 'string',
            'required' => false,
            'example' => 'Windows_NT 10.0.18363 x64',
          ),
        ),
        7 => 
        array (
          'name' => 'ClientVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端版本。',
            'type' => 'string',
            'required' => false,
            'example' => '2.1.0-R-20210731.151756',
          ),
        ),
        8 => 
        array (
          'name' => 'ClientType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端类型。取值范围：

- windows
- linux
- mac
- ios
- android',
            'type' => 'string',
            'required' => false,
            'example' => 'windows',
          ),
        ),
        9 => 
        array (
          'name' => 'CommandContent',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'title' => '乐播需求，获取Tickek成功后自动在session里启动乐播应用。',
            'description' => '当前参数可以配置自定义用户态应用，当成功获取凭证后，自动执行应用。

- appPath：String类型，应用启动文件路径，例如：`"C:\\\\Program Files (x86)\\\\000\\\\000.exe"`，注意路径分隔符要用双斜杠（\\\\\\）。
- appParameter：String类型，应用启动参数，例如：`"meetingid 000 meetingname aaa"`，注意参数与参数之间直接用空格。',
            'type' => 'string',
            'required' => false,
            'example' => '{
      "startApplication": {
            "startApplicationList": [
                  {
                        "sessionName": "",
                        "appList": [
                              {
                                    "appPath": "C:\\\\Program Files\\\\Google\\\\Chrome\\\\Application\\\\chrome.exe",
                                    "appParameter": "www.example.com www.example1.com"
                              }
                        ]
                  }
            ]
      }
}',
            'maxLength' => 1024000,
          ),
        ),
        10 => 
        array (
          'name' => 'Uuid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端唯一标识。若使用无影客户端，可在客户端登录界面的**关于**对话框中查看该参数。',
            'type' => 'string',
            'required' => false,
            'example' => '28c80e90-f71e-4c23-93d6-1225329cf949',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
              ),
              'TaskStatus' => 
              array (
                'description' => '任务状态。',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'FAILED' => '失败',
                  'RUNNING' => '运行中',
                  'FINISHED' => '已完成',
                ),
                'example' => 'FINISHED',
              ),
              'Ticket' => 
              array (
                'description' => '桌面连接凭证。',
                'type' => 'string',
                'example' => 'W0VuY29kaW5nXQ0KSW5wdXRFbmNvZGluZz1V********',
              ),
              'TaskId' => 
              array (
                'description' => '桌面连接任务ID。',
                'type' => 'string',
                'example' => '2afbad19-778a-4fc5-9674-1f19c63862da',
              ),
              'TaskCode' => 
              array (
                'description' => '用于连接用户实例的Ticket，使用时需要先将其内容执行base64的解码，并保存为xxx.ica文件，然后打开这个文件。Python代码示例：

```
import base64
response = {
    "Ticket": "W0VuY29kaW5nXQ0KSW5wdXRFbmNvZGluZz1V********",
    "RequestId": "1CBAFFAB-B697-4049-A9B1-67E1FC5F****",
}
f = open (\'xxx.ica\', \'w\')
out = base64.b64decode(response[\'Ticket\'])
f.write(out)
f.close()
```',
                'type' => 'string',
                'example' => 'W0VuY29kaW5nXQ0KSW5wdXRFbmNvZGluZz1V********',
              ),
              'TaskMessage' => 
              array (
                'description' => '云电脑连接任务ID。',
                'type' => 'string',
                'example' => '2afbad19-778a-4fc5-9674-1f19c638****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"TaskStatus\\": \\"FINISHED\\",\\n  \\"Ticket\\": \\"W0VuY29kaW5nXQ0KSW5wdXRFbmNvZGluZz1V********\\",\\n  \\"TaskId\\": \\"2afbad19-778a-4fc5-9674-1f19c63862da\\",\\n  \\"TaskCode\\": \\"W0VuY29kaW5nXQ0KSW5wdXRFbmNvZGluZz1V********\\",\\n  \\"TaskMessage\\": \\"2afbad19-778a-4fc5-9674-1f19c638****\\"\\n}","errorExample":""},{"type":"xml","example":"<GetConnectionTicketResponse>\\n    <Ticket>W0VuY29kaW5nXQ0KSW5wdXRFbmNvZGluZz1V********</Ticket>\\n    <TaskId>2afbad19-778a-4fc5-9674-1f19c63862da</TaskId>\\n    <RequestId>484256DA-D816-44D2-9D86-B6EE4D5BA78C</RequestId>\\n    <TaskStatus>Finished</TaskStatus>\\n</GetConnectionTicketResponse>","errorExample":""}]',
      'title' => '获取桌面连接凭证',
      'summary' => '获取桌面连接凭证。',
      'description' => '首次调用该接口时，将返回`TaskID`，使用该`TaskID`继续调用该接口，直到`TaskStatus`的值变为FINISHED或者FAILED。`TaskStatus`为FINISHED时，`Ticket`的值即为客户端连接桌面的Ticket。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RefreshLoginToken' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'Anonymous' => 
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
            'description' => '地域ID。可以调用[DescribeRegions](~~196646~~)获取无影云桌面支持的地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端生成的唯一ID，参考UUID。该参数非敏感字段，无需加密。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'f4a0dc8e-1702-4728-9a60-95b27a35****',
          ),
        ),
        2 => 
        array (
          'name' => 'DirectoryId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '> 此参数不开放使用。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou+dir-jedbpr4sl9l37****',
          ),
        ),
        3 => 
        array (
          'name' => 'OfficeSiteId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作区ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-shanghai+dir-238191****',
          ),
        ),
        4 => 
        array (
          'name' => 'SessionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cd45e873-650d-4d70-acb9-f996187a****',
          ),
        ),
        5 => 
        array (
          'name' => 'EndUserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'alice',
          ),
        ),
        6 => 
        array (
          'name' => 'LoginToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '登录凭证。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'v18101ac6a9e69c66b04a163031680463660b4b216cd758f34b60b9ad6a7c7f7334b83dd8f75eef4209c68f9f1080b****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
              ),
              'LoginToken' => 
              array (
                'description' => '登录凭证。',
                'type' => 'string',
                'example' => 'v1c27bab6c205b2fdfac916434306375722776d6aa89e30b7836d18c95ade9137f0f5ac4325260782184e96ee2b3f0****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"LoginToken\\": \\"v1c27bab6c205b2fdfac916434306375722776d6aa89e30b7836d18c95ade9137f0f5ac4325260782184e96ee2b3f0****\\"\\n}","errorExample":""},{"type":"xml","example":"<RefreshLoginTokenResponse>\\r\\n    <RequestId>FE379906-08A4-5893-9C18-77C32566D944</RequestId>\\r\\n</RefreshLoginTokenResponse>","errorExample":""}]',
      'title' => '刷新登录凭证',
      'summary' => '刷新登录凭证。',
      'description' => '登录凭证（LoginToken）的有效期为8小时。如果在8小时内，终端用户没有退出客户端，客户端需要重新刷新登录凭证。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'StartDesktops' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'Anonymous' => 
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
            'description' => '地域ID。可以调用[DescribeRegions](~~196646~~)获取无影云电脑支持的地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端生成的唯一ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'f4a0dc8e-1702-4728-9a60-95b27a35****',
          ),
        ),
        2 => 
        array (
          'name' => 'SessionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cd45e873-650d-4d70-acb9-f996187a****',
          ),
        ),
        3 => 
        array (
          'name' => 'LoginToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '登录凭证。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'v18101ac6a9e69c66b04a163031680463660b4b216cd758f34b60b9ad6a7c7f7334b83dd8f75eef4209c68f9f1080b****',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientOS',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运行客户端的设备的操作系统。',
            'type' => 'string',
            'required' => false,
            'example' => 'Windows_NT 10.0.18363 x64',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端版本。若使用无影客户端，可在客户端登录界面的**关于**对话框中查看该参数。',
            'type' => 'string',
            'required' => false,
            'example' => ' 2.1.0-R-20210731.151756',
          ),
        ),
        6 => 
        array (
          'name' => 'DesktopId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '云电脑ID列表。可设置1\\~20个。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '云电脑ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'ecd-cg27ufmapab08****',
            ),
            'required' => true,
            'example' => 'ecd-cg27ufmapab08****',
            'maxItems' => 100,
          ),
        ),
        7 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '21e7be12-aa4f-4389-b3e1-82f4a1b5****',
          ),
        ),
        8 => 
        array (
          'name' => 'Uuid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端唯一标识符。',
            'type' => 'string',
            'required' => false,
            'example' => '71F6A700735E74A61161A53F0C47****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\"\\n}","errorExample":""},{"type":"xml","example":"<StartDesktopsResponse>\\r\\n    <RequestId>1CBAFFAB-B697-4049-A9B1-67E1FC5FEB53</RequestId>\\r\\n</StartDesktopsResponse>","errorExample":""}]',
      'title' => '启动云电脑',
      'summary' => '启动一台或者多台云电脑。',
      'description' => '云电脑的状态必须为已停止（Stopped），接口调用成功后，云电脑的状态将变更为运行中（Running）。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'StopDesktops' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'Anonymous' => 
          array (
          ),
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
            'description' => '地域ID。可以调用[DescribeRegions](~~196646~~)获取无影云电脑支持的地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端生成的唯一ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'f4a0dc8e-1702-4728-9a60-95b27a35****',
          ),
        ),
        2 => 
        array (
          'name' => 'SessionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cd45e873-650d-4d70-acb9-f996187a****',
          ),
        ),
        3 => 
        array (
          'name' => 'LoginToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '登录凭证。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'v18101ac6a9e69c66b04a163031680463660b4b216cd758f34b60b9ad6a7c7f7334b83dd8f75eef4209c68f9f1080b****',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientOS',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运行客户端的设备的操作系统。',
            'type' => 'string',
            'required' => false,
            'example' => 'Windows_NT 10.0.18363 x64',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端版本。若使用无影客户端，可在客户端登录界面的**关于**对话框中查看该参数。',
            'type' => 'string',
            'required' => false,
            'example' => '2.1.0-R-20210731.151756',
          ),
        ),
        6 => 
        array (
          'name' => 'DesktopId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '云电脑ID列表。可设置1\\~20个。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '云电脑ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'ecd-7w78ozhjcwa3u****	',
            ),
            'required' => true,
            'example' => 'ecd-7w78ozhjcwa3u****	',
            'maxItems' => 100,
          ),
        ),
        7 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '',
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '6ce412a8-399f-49f9-9518-66ee028a****',
          ),
        ),
        8 => 
        array (
          'name' => 'SessionToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '登录凭证。',
            'type' => 'string',
            'required' => false,
            'example' => '04b7b80a0b020715c5c1b4175fc4771698****9e2a759557a4624665fd53ae40',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\"\\n}","errorExample":""},{"type":"xml","example":"<StopDesktopsResponse>\\r\\n    <RequestId>1CBAFFAB-B697-4049-A9B1-67E1FC5FEB53</RequestId>\\r\\n</StopDesktopsResponse>","errorExample":""}]',
      'title' => '停止云电脑',
      'summary' => '停止一台或者多台云电脑。',
      'description' => '云电脑的状态必须为运行中（Running）。接口调用成功后，云电脑的状态将变更为已停止（Stopped）。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RebootDesktops' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'Anonymous' => 
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
            'description' => '地域ID。可以调用[DescribeRegions](~~196646~~)获取无影云电脑支持的地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端生成的唯一ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'f4a0dc8e-1702-4728-9a60-95b27a35****',
          ),
        ),
        2 => 
        array (
          'name' => 'SessionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cd45e873-650d-4d70-acb9-f996187a****',
          ),
        ),
        3 => 
        array (
          'name' => 'LoginToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '登录凭证。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'v18101ac6a9e69c66b04a163031680463660b4b216cd758f34b60b9ad6a7c7f7334b83dd8f75eef4209c68f9f1080b****',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientOS',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运行客户端的设备的操作系统。',
            'type' => 'string',
            'required' => false,
            'example' => 'Windows_NT 10.0.18363 x64',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端版本。若使用无影客户端，可在客户端登录界面的**关于**对话框中查看该参数。',
            'type' => 'string',
            'required' => false,
            'example' => '2.1.0-R-20210731.151756',
          ),
        ),
        6 => 
        array (
          'name' => 'DesktopId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '云电脑ID列表。可设置1\\~20个。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '云电脑ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'ecd-7w78ozhjcwa3u****',
            ),
            'required' => true,
            'example' => 'ecd-7w78ozhjcwa3u****	',
            'maxItems' => 100,
          ),
        ),
        7 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '40401e62-5caf-4508-8de7-bf98af12****',
          ),
        ),
        8 => 
        array (
          'name' => 'SessionToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '登录凭证。',
            'type' => 'string',
            'required' => false,
            'example' => '04b7b80a0b020715c5c1b4175fc4771698****9e2a759557a4624665fd53ae40',
          ),
        ),
        9 => 
        array (
          'name' => 'Uuid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端唯一标识符。',
            'type' => 'string',
            'required' => false,
            'example' => '91761ED27169E2FC564F29388E2D****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\"\\n}","errorExample":""},{"type":"xml","example":"<RebootDesktopsResponse>\\r\\n    <RequestId>1CBAFFAB-B697-4049-A9B1-67E1FC5FEB53</RequestId>\\r\\n</RebootDesktopsResponse>","errorExample":""}]',
      'title' => '重启云电脑',
      'summary' => '重启一台或者多台云电脑。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ApproveFotaUpdate' => 
    array (
      'summary' => '允许桌面FOTA升级。',
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
          'Anonymous' => 
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
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端生成的唯一ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'd4452bd7-88df-4b90-a409-806da674****',
          ),
        ),
        2 => 
        array (
          'name' => 'SessionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '4771b873-c757-4893-973c-7f5beejh****',
          ),
        ),
        3 => 
        array (
          'name' => 'LoginToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '登录凭证。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'v18390c954ce59e2915ef16663205371721e0db9a46179ac89249a203320459523cb54ad08efe324784dd0eba25950****',
          ),
        ),
        4 => 
        array (
          'name' => 'DesktopId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云桌面ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'ecd-138dsptkrt00u****',
          ),
        ),
        5 => 
        array (
          'name' => 'AppVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用版本。',
            'type' => 'string',
            'required' => true,
            'example' => '0.0.1-D-20220513.14****',
          ),
        ),
        6 => 
        array (
          'name' => 'Uuid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端唯一标识。若使用无影客户端，可在客户端登录界面的关于对话框中查看该参数。',
            'type' => 'string',
            'required' => false,
            'example' => '28c80e90-f71e-4c23-93d6-1225329c****',
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
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\"\\n}","type":"json"}]',
      'title' => '允许桌面FOTA升级',
    ),
    'ChangePassword' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'Anonymous' => 
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
          'name' => 'ClientId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端生成的唯一ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '42f6645a-9c3c-4772-be2a-cc5f5732****',
          ),
        ),
        2 => 
        array (
          'name' => 'OfficeSiteId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作区ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-shanghai+dir-227468****',
          ),
        ),
        3 => 
        array (
          'name' => 'SessionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'EndUserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'liming',
          ),
        ),
        5 => 
        array (
          'name' => 'LoginToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '登录凭证。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'v18101ac6a9e69c66b04a163031680463660b4b216cd758f34b60b9ad6a7c7f7334b83dd8f75eef4209c68f9f1080b****',
          ),
        ),
        6 => 
        array (
          'name' => 'OldPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '旧密码。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '12345678',
          ),
        ),
        7 => 
        array (
          'name' => 'NewPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新密码。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '67436290',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '484256DA-D816-44D2-9D86-B6EE4D5B****',
              ),
              'LoginToken' => 
              array (
                'description' => '登录凭证。',
                'type' => 'string',
                'example' => 'v18101ac6a9e69c66b04a163031680463660b4b216cd758f34b60b9ad6a7c7f7334b83dd8f75eef4209c68f9f1080b****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"484256DA-D816-44D2-9D86-B6EE4D5B****\\",\\n  \\"LoginToken\\": \\"v18101ac6a9e69c66b04a163031680463660b4b216cd758f34b60b9ad6a7c7f7334b83dd8f75eef4209c68f9f1080b****\\"\\n}","type":"json"}]',
      'title' => '修改密码',
    ),
    'DeleteFingerPrintTemplate' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'Anonymous' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
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
          'name' => 'ClientId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端生成的唯一ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '59e86b39-ccac-4dfa-93d7-1f724052****',
          ),
        ),
        2 => 
        array (
          'name' => 'SessionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '6df06330-3b75-4768-b334-41a73a64****',
          ),
        ),
        3 => 
        array (
          'name' => 'LoginToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '登录凭证。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'v1c0436c721786529914f16516396228454fa6284c9b80f9917f25ebbec2aa30c10343e3f6f9aff64500ce13808aef****',
          ),
        ),
        4 => 
        array (
          'name' => 'Index',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '索引。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '4',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '40401e62-5caf-4508-8de7-bf98af12****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '134BD0B2-B848-5743-9CE2-C1FD3D5F****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"134BD0B2-B848-5743-9CE2-C1FD3D5F****\\"\\n}","type":"json"}]',
      'title' => '删除指纹模板',
    ),
    'DescribeDirectories' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'Anonymous' => 
          array (
          ),
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
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端生成的唯一ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '54c17e1d-2d72-4b87-aa33-25f3b3f2****',
          ),
        ),
        2 => 
        array (
          'name' => 'DirectoryId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '目录ID对象。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '目录ID。同工作区ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'cn-hangzhou+dir-gx2x1dhsmu52rd****',
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
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F369A091-002F-49C8-AD55-02A77629****',
              ),
              'Directories' => 
              array (
                'description' => '目录信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '目录信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DirectoryType' => 
                    array (
                      'description' => '目录类型。',
                      'type' => 'string',
                      'example' => 'AD_CONNECTOR',
                    ),
                    'SsoServiceUrl' => 
                    array (
                      'description' => 'SSO连接。',
                      'type' => 'string',
                      'example' => 'https://eds-cn-shanghai-67726****',
                    ),
                    'DesktopAccessType' => 
                    array (
                      'description' => '连接云桌面时允许使用的方式。
- INTERNET：公网连接；
- VPC：VPC连接；
- ANY：公网和VPC都允许。',
                      'type' => 'string',
                      'example' => 'INTERNET',
                    ),
                    'DirectoryId' => 
                    array (
                      'description' => '目录ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou+dir-gx2x1dhsmu52rd****',
                    ),
                    'ProviderId' => 
                    array (
                      'description' => '用户账号BID。',
                      'type' => 'string',
                      'example' => '26842',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F369A091-002F-49C8-AD55-02A77629****\\",\\n  \\"Directories\\": [\\n    {\\n      \\"DirectoryType\\": \\"AD_CONNECTOR\\",\\n      \\"SsoServiceUrl\\": \\"https://eds-cn-shanghai-67726****\\",\\n      \\"DesktopAccessType\\": \\"INTERNET\\",\\n      \\"DirectoryId\\": \\"cn-hangzhou+dir-gx2x1dhsmu52rd****\\",\\n      \\"ProviderId\\": \\"26842\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询目录详细信息',
      'summary' => '用于查询目录详细信息。',
    ),
    'DescribeFingerPrintTemplates' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'Anonymous' => 
          array (
          ),
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
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端生成的唯一ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '61e39dc6-0450-45f6-a372-2a09e938****',
          ),
        ),
        2 => 
        array (
          'name' => 'SessionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => false,
            'example' => 'a5062d68-e550-4d09-8288-67c8ba9e****',
          ),
        ),
        3 => 
        array (
          'name' => 'LoginToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '登录凭证。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'v189646d6f329e4dfcbf51653542202890570fec26e4f9ee26427c5920fcd93871f017d2190199c4c7d0c0bf00f573****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9C1D3FBE-84E1-5ABB-AD98-2003AC71****',
              ),
              'FingerPrintTemplates' => 
              array (
                'description' => '指纹模板对象。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '指纹模板对象。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Index' => 
                    array (
                      'description' => '索引。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'CreationTime' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2022-03-13T13:26:29Z',
                    ),
                    'LoginTime' => 
                    array (
                      'description' => '登录时间。',
                      'type' => 'string',
                      'example' => '2022-03-13T13:26:29Z',
                    ),
                    'EndUserId' => 
                    array (
                      'description' => '用户。',
                      'type' => 'string',
                      'example' => 'liming',
                    ),
                    'Description' => 
                    array (
                      'description' => '描述信息。',
                      'type' => 'string',
                      'example' => 'Finger 1',
                    ),
                    'OfficeSiteId' => 
                    array (
                      'description' => '工作区ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou+dir-074949****',
                    ),
                    'ClientId' => 
                    array (
                      'description' => '客户端生成的唯一ID。',
                      'type' => 'string',
                      'example' => '2258a3d5-b8f8-4d79-a221-eaecf211****',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9C1D3FBE-84E1-5ABB-AD98-2003AC71****\\",\\n  \\"FingerPrintTemplates\\": [\\n    {\\n      \\"Index\\": 1,\\n      \\"CreationTime\\": \\"2022-03-13T13:26:29Z\\",\\n      \\"LoginTime\\": \\"2022-03-13T13:26:29Z\\",\\n      \\"EndUserId\\": \\"liming\\",\\n      \\"Description\\": \\"Finger 1\\",\\n      \\"OfficeSiteId\\": \\"cn-hangzhou+dir-074949****\\",\\n      \\"ClientId\\": \\"2258a3d5-b8f8-4d79-a221-eaecf211****\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '描述指纹模板',
    ),
    'DescribeGlobalDesktops' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'Anonymous' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'DirectoryId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作区ID。同OfficeSiteId。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou+dir-880841****',
          ),
        ),
        2 => 
        array (
          'name' => 'OfficeSiteId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作区ID。DirectoryId即将弃用，优先使用此字段。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou+dir-880841****',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端生成的唯一ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'c213150d-7ac3-432c-b749-6e1e090b****',
          ),
        ),
        4 => 
        array (
          'name' => 'SessionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话ID。
通过登录接口GetLoginToken获取，返回参数：SessionId。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '5c456a41-1e65-4e72-ab4d-5dcfff52****',
          ),
        ),
        5 => 
        array (
          'name' => 'LoginToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '登录凭证。
通过GetLoginToken接口登录获取，或登录后通过更新接口RefreshLoginToken获取。返回参数：LoginToken。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'v147c9114a180489f89691663893169****',
          ),
        ),
        6 => 
        array (
          'name' => 'DesktopStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云桌面状态。取值范围：

- Pending：等待中
- Starting：启动中
- Running：运行中
- Stopping：停止中
- Rebuilding：重建中
- Stopped：已关机
- Expired：已过期
- Deleted：已删除',
            'type' => 'string',
            'required' => false,
            'example' => 'Running',
          ),
        ),
        7 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时每页行数。

- 最大值：500
- 默认值：10',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '500',
          ),
        ),
        8 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一个查询开始的Token，NextToken为空表示没有下一个。',
            'type' => 'string',
            'required' => false,
            'example' => 'eyJkZWZhdWx0IjpbIjk2MjEy****',
          ),
        ),
        9 => 
        array (
          'name' => 'DesktopName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云桌面名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'DesktopTest',
          ),
        ),
        10 => 
        array (
          'name' => 'DesktopId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '云桌面ID。可设置一个或多个，取值范围：1~20。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '云桌面ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'ecd-hkbl45il187d6****',
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        11 => 
        array (
          'name' => 'SearchRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '搜索地域ID。用于过滤出指定地域的桌面信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
          ),
        ),
        12 => 
        array (
          'name' => 'DesktopAccessType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '连接云桌面时允许使用的接入方式。取值范围：

- INTERNET：只允许客户端通过公网连接云桌面。
- VPC：只允许处于VPC网络内的客户端连接云桌面。
- Any：不限制方式。使用客户端连接云桌面时可以自行选择连接方式。

默认值：INTERNET。

> VPC连接方式依赖于阿里云私网连接（PrivateLink）服务，该服务不收取费用。该参数设置为VPC或者Any时，系统将自动为您开通私网连接服务。',
            'type' => 'string',
            'required' => false,
            'example' => 'INTERNET',
          ),
        ),
        13 => 
        array (
          'name' => 'QueryFotaUpdate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否查询镜像更新信息。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        14 => 
        array (
          'name' => 'WithoutLatency',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否查询实时桌面信息。当前接口中桌面状态信息有1~3秒延迟，如果需要准确信息可将此值设为true。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        15 => 
        array (
          'name' => 'OrderBy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序字段，若不指定则按照创建时间倒序。取值为AssignTime：按照分配时间排序。',
            'type' => 'string',
            'required' => false,
            'example' => 'AssignTime',
          ),
        ),
        16 => 
        array (
          'name' => 'SortType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序方式，默认为增序。取值：
- ASC：增序
- DESC：降序',
            'type' => 'string',
            'required' => false,
            'example' => 'ASC',
          ),
        ),
        17 => 
        array (
          'name' => 'Keyword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '关键字。支持模糊搜索桌面ID、云桌面名称和终端用户自定义的桌面名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'ecd',
          ),
        ),
        18 => 
        array (
          'name' => 'LoginRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作区所在的地域ID，使用组织ID登录时置为空。使用工作区ID登录时，该参数必填，使用组织ID登录时，该参数可为空。',
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
              'NextToken' => 
              array (
                'description' => '下一个查询开始的Token，NextToken为空表示没有下一个。',
                'type' => 'string',
                'example' => 'eyJkZWZhdWx0IjpbIjIwMjItMDgtMTdUM****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4686A731-D601-548C-83E2-4CB6371E****',
              ),
              'Desktops' => 
              array (
                'description' => '云桌面详细信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '云桌面详细信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CreationTime' => 
                    array (
                      'description' => '云桌面的创建时间。',
                      'type' => 'string',
                      'example' => '2020-11-06T08:28Z',
                    ),
                    'ChargeType' => 
                    array (
                      'description' => '付费类型。可能值：
- PostPaid：按量付费
- PrePaid：包年包月',
                      'type' => 'string',
                      'example' => 'PostPaid',
                    ),
                    'DesktopName' => 
                    array (
                      'description' => '云桌面名称。',
                      'type' => 'string',
                      'example' => 'testDesktopName',
                    ),
                    'HostName' => 
                    array (
                      'description' => '主机名称。',
                      'type' => 'string',
                      'example' => 'testName',
                    ),
                    'DesktopGroupId' => 
                    array (
                      'description' => '桌面组ID。',
                      'type' => 'string',
                      'example' => 'dg-3uiojcc0j4kh7****',
                    ),
                    'DesktopId' => 
                    array (
                      'description' => '云桌面ID。',
                      'type' => 'string',
                      'example' => 'ecd-gx2x1dhsmucyy****',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'LastStartTime' => 
                    array (
                      'description' => '上次开机时间，即最近一次的开机时间。',
                      'type' => 'string',
                      'example' => '2021-07-13T15:59Z',
                    ),
                    'Cpu' => 
                    array (
                      'description' => 'CPU个数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'EndUserId' => 
                    array (
                      'description' => '终端用户名称。',
                      'type' => 'string',
                      'example' => 'User1',
                    ),
                    'ExpiredTime' => 
                    array (
                      'description' => '云桌面的过期时间。    

- 对于包年包月云桌面，该返回值有实际意义。
- 对于按量付费云桌面，均返回2099-12-31T15:59Z。',
                      'type' => 'string',
                      'example' => '2021-12-31T15:59Z',
                    ),
                    'DesktopStatus' => 
                    array (
                      'description' => '云桌面状态。',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'DesktopType' => 
                    array (
                      'description' => '云桌面规格。',
                      'type' => 'string',
                      'example' => 'ecd.basic.large',
                    ),
                    'ConnectionStatus' => 
                    array (
                      'description' => '终端节点连接状态。取值：

- Pending：修改中

- Connecting：连接中

- Connected：已连接

- Disconnecting：断开连接中

- Disconnected：未连接

- Deleting：删除中',
                      'type' => 'string',
                      'example' => 'Disconnected',
                    ),
                    'Memory' => 
                    array (
                      'description' => '云桌面的内存。单位为MiB。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '4096',
                    ),
                    'ImageId' => 
                    array (
                      'description' => '镜像ID。',
                      'type' => 'string',
                      'example' => 'm-4zfb6zj728hhr****',
                    ),
                    'DirectoryId' => 
                    array (
                      'description' => '同OfficeSiteId，工作区ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou+dir-jedbpr4sl9l37****	',
                    ),
                    'Disks' => 
                    array (
                      'description' => '磁盘信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '磁盘信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'DiskType' => 
                          array (
                            'description' => '磁盘类型。可能值：
- SYSTEM：系统盘
- DATA：数据盘',
                            'type' => 'string',
                            'example' => 'SYSTEM',
                          ),
                          'DiskId' => 
                          array (
                            'description' => '磁盘ID。',
                            'type' => 'string',
                            'example' => 'd-jedbpr4sl9l37****',
                          ),
                          'DiskSize' => 
                          array (
                            'description' => '磁盘大小。单位：GiB。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '80',
                          ),
                        ),
                      ),
                    ),
                    'OsType' => 
                    array (
                      'description' => '操作系统类型。可能值：
-Windows
-Linux',
                      'type' => 'string',
                      'example' => 'Windows',
                    ),
                    'Sessions' => 
                    array (
                      'description' => '会话信息列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '会话信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'EndUserId' => 
                          array (
                            'description' => '终端用户信息。',
                            'type' => 'string',
                            'example' => 'User1',
                          ),
                          'EstablishmentTime' => 
                          array (
                            'description' => '会话创建时间。',
                            'type' => 'string',
                            'example' => '2021-03-07T08:23Z',
                          ),
                        ),
                      ),
                    ),
                    'PolicyGroupId' => 
                    array (
                      'description' => '策略ID。',
                      'type' => 'string',
                      'example' => 'pg-9cktlowtxfl6****',
                    ),
                    'EndUserIds' => 
                    array (
                      'description' => '终端用户列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '终端用户名。',
                        'type' => 'string',
                        'example' => 'User1',
                      ),
                    ),
                    'GpuMemory' => 
                    array (
                      'description' => '显存大小。
对于GPU型云桌面，该返回值有实际意义。单位：MB。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2048',
                    ),
                    'FotaUpdate' => 
                    array (
                      'description' => '镜像的更新信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Project' => 
                        array (
                          'description' => '项目名称。',
                          'type' => 'string',
                          'example' => 'testProject',
                        ),
                        'Channel' => 
                        array (
                          'description' => '订阅通道',
                          'type' => 'string',
                          'example' => 'Enterprise',
                        ),
                        'CurrentAppVersion' => 
                        array (
                          'description' => '桌面当前版本号。',
                          'type' => 'string',
                          'example' => '0.0.0-D-20220102.xxxx',
                        ),
                        'NewAppVersion' => 
                        array (
                          'description' => '更新后的应用版本号。',
                          'type' => 'string',
                          'example' => '0.0.0-R-20220307.xxxx',
                        ),
                        'Force' => 
                        array (
                          'description' => '是否强制升级。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'ReleaseNote' => 
                        array (
                          'description' => '可升级的版本描述。',
                          'type' => 'string',
                          'example' => '测试升级包03-07',
                        ),
                        'Size' => 
                        array (
                          'description' => '可升级的版本安装包大小。',
                          'type' => 'string',
                          'example' => '100',
                        ),
                        'ReleaseNoteEn' => 
                        array (
                          'description' => '可升级的版本英文描述。',
                          'type' => 'string',
                          'example' => 'Release note',
                        ),
                        'ReleaseNoteJp' => 
                        array (
                          'description' => '可升级的版本日文描述。',
                          'type' => 'string',
                          'example' => 'リリースノート',
                        ),
                      ),
                    ),
                    'ProtocolType' => 
                    array (
                      'description' => '协议类型。可能值：
- HDX
- ASP',
                      'type' => 'string',
                      'example' => 'ASP',
                    ),
                    'OfficeSiteId' => 
                    array (
                      'description' => '工作区ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou+dir-363353****',
                    ),
                    'NetworkInterfaceIp' => 
                    array (
                      'description' => '网卡IP。',
                      'type' => 'string',
                      'example' => '192.168.xx.xx',
                    ),
                    'UserCustomName' => 
                    array (
                      'description' => '用户自定义桌面名称。',
                      'type' => 'string',
                      'example' => 'testDesktop',
                    ),
                    'ManagementFlags' => 
                    array (
                      'description' => '云桌面管理状态列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '云桌面管理状态。可能值：

- NO_FLAG：无状态

- UPDATING：升级中

- MIGRATING：工作区迁移中

- ASSIGNING：分配用户中

- UNDER_MAINTENANCE：维护模式中

- ENTER_MAINTENANCE：进入维护模式中

- MIGRATING_PROTOCOL：协议迁移中',
                        'type' => 'string',
                        'example' => 'UPDATING',
                      ),
                    ),
                    'LocalName' => 
                    array (
                      'description' => '地域名称。',
                      'type' => 'string',
                      'example' => '（华东2）上海',
                    ),
                    'RealDesktopId' => 
                    array (
                      'description' => '如果是桌面组桌面并且已分配真实桌面，则显示桌面ID。',
                      'type' => 'string',
                      'example' => 'ecd-gx2x1dhsm****',
                    ),
                    'DesktopTimers' => 
                    array (
                      'description' => '桌面定时器对象。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'TimerType' => 
                          array (
                            'description' => '定时任务类型。

- TimerBoot：定时开机
- TimerShutdown：定时关机
- TimerReboot：定时重启
- NoOperationShutdown：无操作关机
- NoOperationReboot：无操作重启
- NoOperationDisconnect：无操作断连
- NoConnectShutdown：无连接关机
- TimerReset：定时重置',
                            'type' => 'string',
                            'example' => 'NoConnectShutdown',
                          ),
                          'CronExpression' => 
                          array (
                            'description' => '定时任务cron表达式。

例如：`0 0 4 1/1 * ?`表示从每月第一天上午4时开始，每天执行操作。',
                            'type' => 'string',
                            'example' => '0 0 0 ? * 1',
                          ),
                          'Interval' => 
                          array (
                            'description' => '时间间隔，单位为秒。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '60',
                          ),
                          'Enforce' => 
                          array (
                            'description' => '是否强制执行。为true表示忽略桌面及连接状态检测，强制执行定时任务。',
                            'type' => 'boolean',
                            'example' => 'false',
                          ),
                          'ResetType' => 
                          array (
                            'description' => '如果是重置任务，需设置重置类型。取值：
-     `RESET_TYPE_SYSTEM`： 重置系统盘
-     `RESET_TYPE_USER_DISK`：重置数据盘
-     `RESET_TYPE_BOTH`：系统盘和数据盘',
                            'type' => 'string',
                            'example' => 'RESET_TYPE_BOTH',
                          ),
                          'AllowClientSetting' => 
                          array (
                            'description' => '是否允许客户端设置策略。',
                            'type' => 'boolean',
                            'example' => 'true',
                          ),
                          'OperationType' => 
                          array (
                            'description' => '定时任务类型。可能值：

- SHUTDOWN：关机
- HIBERNATE：休眠',
                            'type' => 'string',
                            'example' => 'SHUTDOWN',
                          ),
                          'ExecutionTime' => 
                          array (
                            'description' => '任务执行时间。',
                            'type' => 'string',
                            'example' => '2021-12-31T15:59Z',
                          ),
                        ),
                      ),
                    ),
                    'Clients' => 
                    array (
                      'description' => '支持的客户端信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '支持的客户端信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Status' => 
                          array (
                            'description' => '客户端状态，取值：

- ON：允许登录
- OFF：不允许登录',
                            'type' => 'string',
                            'example' => 'ON',
                          ),
                          'ClientType' => 
                          array (
                            'description' => '客户端类型，取值：

- macos：Mac客户端
- ios：IOS客户端
- android：Android客户端
- html5：Web客户端
- windows：Windows客户端
- linux：Linux客户端',
                            'type' => 'string',
                            'example' => 'windows',
                          ),
                        ),
                      ),
                    ),
                    'SupportHibernation' => 
                    array (
                      'description' => '是否支持休眠。取值：

- true：支持
- false：不支持',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'HibernationBeta' => 
                    array (
                      'description' => '是否为休眠测试版本。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'SessionType' => 
                    array (
                      'description' => '会话类型。可能值：

- SINGLE_SESSION：单会话
- MULTIPLE_SESSION：多会话',
                      'type' => 'string',
                      'example' => 'SINGLE_SESSION',
                    ),
                    'Platform' => 
                    array (
                      'description' => '操作系统平台信息。可能值：
- CentOS
- Ubuntu
- Windows Server 2016
- Windows Server 2019
- UOS
',
                      'type' => 'string',
                      'example' => 'Ubuntu',
                    ),
                    'Os' => 
                    array (
                      'description' => '操作系统类型',
                      'type' => 'string',
                      'example' => 'Windows',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"eyJkZWZhdWx0IjpbIjIwMjItMDgtMTdUM****\\",\\n  \\"RequestId\\": \\"4686A731-D601-548C-83E2-4CB6371E****\\",\\n  \\"Desktops\\": [\\n    {\\n      \\"CreationTime\\": \\"2020-11-06T08:28Z\\",\\n      \\"ChargeType\\": \\"PostPaid\\",\\n      \\"DesktopName\\": \\"testDesktopName\\",\\n      \\"HostName\\": \\"testName\\",\\n      \\"DesktopGroupId\\": \\"dg-3uiojcc0j4kh7****\\",\\n      \\"DesktopId\\": \\"ecd-gx2x1dhsmucyy****\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"LastStartTime\\": \\"2021-07-13T15:59Z\\",\\n      \\"Cpu\\": 2,\\n      \\"EndUserId\\": \\"User1\\",\\n      \\"ExpiredTime\\": \\"2021-12-31T15:59Z\\",\\n      \\"DesktopStatus\\": \\"Running\\",\\n      \\"DesktopType\\": \\"ecd.basic.large\\",\\n      \\"ConnectionStatus\\": \\"Disconnected\\",\\n      \\"Memory\\": 4096,\\n      \\"ImageId\\": \\"m-4zfb6zj728hhr****\\",\\n      \\"DirectoryId\\": \\"cn-hangzhou+dir-jedbpr4sl9l37****\\\\t\\",\\n      \\"Disks\\": [\\n        {\\n          \\"DiskType\\": \\"SYSTEM\\",\\n          \\"DiskId\\": \\"d-jedbpr4sl9l37****\\",\\n          \\"DiskSize\\": 80\\n        }\\n      ],\\n      \\"OsType\\": \\"Windows\\",\\n      \\"Sessions\\": [\\n        {\\n          \\"EndUserId\\": \\"User1\\",\\n          \\"EstablishmentTime\\": \\"2021-03-07T08:23Z\\"\\n        }\\n      ],\\n      \\"PolicyGroupId\\": \\"pg-9cktlowtxfl6****\\",\\n      \\"EndUserIds\\": [\\n        \\"User1\\"\\n      ],\\n      \\"GpuMemory\\": 2048,\\n      \\"FotaUpdate\\": {\\n        \\"Project\\": \\"testProject\\",\\n        \\"Channel\\": \\"Enterprise\\",\\n        \\"CurrentAppVersion\\": \\"0.0.0-D-20220102.xxxx\\",\\n        \\"NewAppVersion\\": \\"0.0.0-R-20220307.xxxx\\",\\n        \\"Force\\": false,\\n        \\"ReleaseNote\\": \\"测试升级包03-07\\",\\n        \\"Size\\": \\"100\\",\\n        \\"ReleaseNoteEn\\": \\"Release note\\",\\n        \\"ReleaseNoteJp\\": \\"リリースノート\\"\\n      },\\n      \\"ProtocolType\\": \\"ASP\\",\\n      \\"OfficeSiteId\\": \\"cn-hangzhou+dir-363353****\\",\\n      \\"NetworkInterfaceIp\\": \\"192.168.xx.xx\\",\\n      \\"UserCustomName\\": \\"testDesktop\\",\\n      \\"ManagementFlags\\": [\\n        \\"UPDATING\\"\\n      ],\\n      \\"LocalName\\": \\"（华东2）上海\\",\\n      \\"RealDesktopId\\": \\"ecd-gx2x1dhsm****\\",\\n      \\"DesktopTimers\\": [\\n        {\\n          \\"TimerType\\": \\"NoConnectShutdown\\",\\n          \\"CronExpression\\": \\"0 0 0 ? * 1\\",\\n          \\"Interval\\": 60,\\n          \\"Enforce\\": false,\\n          \\"ResetType\\": \\"RESET_TYPE_BOTH\\",\\n          \\"AllowClientSetting\\": true,\\n          \\"OperationType\\": \\"SHUTDOWN\\",\\n          \\"ExecutionTime\\": \\"2021-12-31T15:59Z\\"\\n        }\\n      ],\\n      \\"Clients\\": [\\n        {\\n          \\"Status\\": \\"ON\\",\\n          \\"ClientType\\": \\"windows\\"\\n        }\\n      ],\\n      \\"SupportHibernation\\": true,\\n      \\"HibernationBeta\\": true,\\n      \\"SessionType\\": \\"SINGLE_SESSION\\",\\n      \\"Platform\\": \\"Ubuntu\\",\\n      \\"Os\\": \\"Windows\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询全地域云桌面详细信息',
      'summary' => '查询多个区域云桌面详细信息。目前仅支持中国内地对应的区域查询（不包含南京）。',
      'description' => '- 此接口为中心化域名，接入点为上海，不支持其他区域调用。
- 此接口中的桌面状态信息与实际值有1~3秒延迟。',
    ),
    'DescribeOfficeSites' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'Anonymous' => 
          array (
          ),
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
            'description' => '地域ID。可以调用[DescribeRegions](~~196646~~)获取无影云桌面支持的地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端生成的唯一ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '42f6645a-9c3c-4772-be2a-cc5f5732****',
          ),
        ),
        2 => 
        array (
          'name' => 'OfficeSiteId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '工作区ID。可设置1~100个。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '工作区ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'cn-hangzhou+dir-363353****',
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
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
              ),
              'OfficeSites' => 
              array (
                'description' => '工作区信息集合。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '工作区对象。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SsoServiceUrl' => 
                    array (
                      'description' => 'SSO连接。',
                      'type' => 'string',
                      'example' => 'https://eds-cn-shanghai-67****',
                    ),
                    'DesktopAccessType' => 
                    array (
                      'description' => '连接云桌面时允许使用的接入方式。

> VPC连接方式依赖于阿里云私网连接PrivateLink服务，该服务不收取费用。该参数设置为VPC或者Any时，系统将自动为您开通私网连接服务。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'INTERNET' => '只允许客户端通过公网连接云桌面。 [默认值]',
                        'VPC' => '只允许处于VPC网络内的客户端连接云桌面。',
                        'Any' => '不限制方式。使用客户端连接云桌面时可以自行选择连接方式。',
                      ),
                      'example' => 'VPC',
                    ),
                    'DesktopVpcEndpoint' => 
                    array (
                      'description' => 'VPC连接桌面时所使用的终端节点。',
                      'type' => 'string',
                      'example' => 'http://ep-bp1s2vmbj55r5rzc****.epsrv-bp1pcfhpwvlpny01****.cn-hangzhou.privatelink.aliyuncs.com',
                    ),
                    'OfficeSiteType' => 
                    array (
                      'description' => '工作区账号系统类型。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'ad_connector' => '企业AD账号',
                        'simple' => '便捷账号',
                      ),
                      'example' => 'SIMPLE',
                    ),
                    'ProviderId' => 
                    array (
                      'description' => '用户账号BID。',
                      'type' => 'string',
                      'example' => '268****',
                    ),
                    'OfficeSiteId' => 
                    array (
                      'description' => '工作区ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou+dir-363353****',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"OfficeSites\\": [\\n    {\\n      \\"SsoServiceUrl\\": \\"https://eds-cn-shanghai-67****\\",\\n      \\"DesktopAccessType\\": \\"VPC\\",\\n      \\"DesktopVpcEndpoint\\": \\"http://ep-bp1s2vmbj55r5rzc****.epsrv-bp1pcfhpwvlpny01****.cn-hangzhou.privatelink.aliyuncs.com\\",\\n      \\"OfficeSiteType\\": \\"SIMPLE\\",\\n      \\"ProviderId\\": \\"268****\\",\\n      \\"OfficeSiteId\\": \\"cn-hangzhou+dir-363353****\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询工作区详细信息',
      'summary' => '调用DescribeOfficeSites查询工作区的详细信息。',
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
          'Anonymous' => 
          array (
          ),
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
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端生成的唯一ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ac4a73ad-789a-449a-a88f-d18571d6****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
              ),
              'Regions' => 
              array (
                'description' => '地域信息对象。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '地域信息对象。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RegionEndpoint' => 
                    array (
                      'description' => '地域对应的Endpoint。',
                      'type' => 'string',
                      'example' => 'ecd.cn-hangzhou.aliyuncs.com',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"Regions\\": [\\n    {\\n      \\"RegionEndpoint\\": \\"ecd.cn-hangzhou.aliyuncs.com\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查看可选的地域和可用区',
    ),
    'DescribeSnapshots' => 
    array (
      'summary' => '查询一台云桌面的快照列表和快照的详细信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'Anonymous' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。可以调用[DescribeRegions](~~196646~~)获取无影云桌面支持的地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DesktopId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云桌面ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'ecd-gx2x1dhsmucyy****',
          ),
        ),
        2 => 
        array (
          'name' => 'SnapshotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '快照ID。',
            'type' => 'string',
            'required' => false,
            'example' => 's-2ze81owrnv9pity4****',
          ),
        ),
        3 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，每页最大行数。默认值：100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一个查询开始的Token，NextToken为空表示没有下一个。',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAAV3MpHK1AP0pfERHZN5pu6nmB7qrRFJ8vmttjxPL****',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户ClientID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '16dad2b6-3c6d-4e4c-b057-78ecb13c****',
          ),
        ),
        6 => 
        array (
          'name' => 'SessionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'a99b9aca-bac5-4da2-819e-400ce98f****',
          ),
        ),
        7 => 
        array (
          'name' => 'LoginToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '登录凭证。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'v16abfb945208fc5745061668654680853da4a25202d1a394fcad57bba484e9827ad43ea7d10fb6bf13d44a4adc0e9****',
          ),
        ),
      ),
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
                'example' => 'AAAAAV3MpHK1AP0pfERHZN5pu6nmB7qrRFJ8vmttjxPL****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '51592A88-0F2C-55E6-AD2C-2AD9C10D****',
              ),
              'Snapshots' => 
              array (
                'description' => '快照信息集合。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CreationTime' => 
                    array (
                      'description' => '快照创建时间。按照[ISO8601](~~25696~~)标准表示，并使用UTC +0时间，格式为yyyy-MM-ddTHH:mm:ssZ。',
                      'type' => 'string',
                      'example' => '2020-12-20T14:52:28Z',
                    ),
                    'Status' => 
                    array (
                      'description' => '快照状态。
枚举值：
- PROGRESSING: 创建中
- FAILED: 创建失败
- ACCOMPLISHED: 完成创建',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                      ),
                      'example' => 'ACCOMPLISHED',
                    ),
                    'SnapshotType' => 
                    array (
                      'description' => '快照创建类型。
枚举值：
- AUTO: 自动创建快照
- USER: 手动创建快照',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                      ),
                      'example' => 'USER',
                    ),
                    'SnapshotName' => 
                    array (
                      'description' => '快照名称。',
                      'type' => 'string',
                      'example' => 'testSnapshotName',
                    ),
                    'Progress' => 
                    array (
                      'description' => '创建桌面时的进度。',
                      'type' => 'string',
                      'example' => '100%',
                    ),
                    'Description' => 
                    array (
                      'description' => '快照描述信息。',
                      'type' => 'string',
                      'example' => 'testDescription',
                    ),
                    'SnapshotId' => 
                    array (
                      'description' => '快照ID。',
                      'type' => 'string',
                      'example' => 's-2zeipxmnhej803x7****',
                    ),
                    'RemainTime' => 
                    array (
                      'description' => '正在创建的快照剩余完成时间。单位为秒。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '30',
                    ),
                    'SourceDiskSize' => 
                    array (
                      'description' => '源磁盘容量。单位：GiB。',
                      'type' => 'string',
                      'example' => '150',
                    ),
                    'SourceDiskType' => 
                    array (
                      'description' => '源磁盘类型。
可能值：
- SYSTEM：系统盘。
- DATA：数据盘。',
                      'type' => 'string',
                      'example' => 'SYSTEM',
                    ),
                    'DesktopId' => 
                    array (
                      'description' => '快照所属的云桌面ID。',
                      'type' => 'string',
                      'example' => 'ecd-g03l3tlm8djoj****',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"AAAAAV3MpHK1AP0pfERHZN5pu6nmB7qrRFJ8vmttjxPL****\\",\\n  \\"RequestId\\": \\"51592A88-0F2C-55E6-AD2C-2AD9C10D****\\",\\n  \\"Snapshots\\": [\\n    {\\n      \\"CreationTime\\": \\"2020-12-20T14:52:28Z\\",\\n      \\"Status\\": \\"ACCOMPLISHED\\",\\n      \\"SnapshotType\\": \\"USER\\",\\n      \\"SnapshotName\\": \\"testSnapshotName\\",\\n      \\"Progress\\": \\"100%\\",\\n      \\"Description\\": \\"testDescription\\",\\n      \\"SnapshotId\\": \\"s-2zeipxmnhej803x7****\\",\\n      \\"RemainTime\\": 30,\\n      \\"SourceDiskSize\\": \\"150\\",\\n      \\"SourceDiskType\\": \\"SYSTEM\\",\\n      \\"DesktopId\\": \\"ecd-g03l3tlm8djoj****\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询云桌面快照信息',
    ),
    'EncryptPassword' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'Anonymous' => 
          array (
          ),
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
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端生成的唯一ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1d40776f-e9cb-4e2b-a8da-308d10e8****',
          ),
        ),
        2 => 
        array (
          'name' => 'DirectoryId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目录 ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-beijing+dir-131196****',
          ),
        ),
        3 => 
        array (
          'name' => 'OfficeSiteId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作区ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-beijing+dir-131196****',
          ),
        ),
        4 => 
        array (
          'name' => 'SessionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => false,
            'example' => 'c78e2e52-23d9-4401-a648-e67ac6ff****',
          ),
        ),
        5 => 
        array (
          'name' => 'LoginToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '登录凭证。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'v1b16dcff3ab21a6c5ec01652238375511cff5a1db59fd4dc49afb37e2ea7a626af6f38109fd0498b6abd9de1af7743****',
          ),
        ),
        6 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '密码。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Ab123456',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回对象。',
            'type' => 'object',
            'properties' => 
            array (
              'EncryptedPassword' => 
              array (
                'description' => '已加密密码。',
                'type' => 'string',
                'example' => 'd34601bc-e6b1-4433-b0cc-8f6c5e52;n4apvGub3OBoj4Grwg==;thhO4UEomJfdvwnwlA==',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'AF538DA8-FFC6-52DA-8FF8-7B92579F****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"EncryptedPassword\\": \\"d34601bc-e6b1-4433-b0cc-8f6c5e52;n4apvGub3OBoj4Grwg==;thhO4UEomJfdvwnwlA==\\",\\n  \\"RequestId\\": \\"AF538DA8-FFC6-52DA-8FF8-7B92579F****\\"\\n}","type":"json"}]',
      'title' => '加密密码',
    ),
    'GetCloudDriveServiceMountToken' => 
    array (
      'summary' => '获取云盘登录凭证。',
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
          'Anonymous' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
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
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoginToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '登录凭证。',
            'type' => 'string',
            'required' => false,
            'example' => 'v1972cd3446f0e523598916520951742474e6624fcdea6652994d47bc6157d27f7cc900c339db67882j3no4nh5bk3b4****',
          ),
        ),
        2 => 
        array (
          'name' => 'SessionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话ID。',
            'type' => 'string',
            'required' => false,
            'example' => '14e1fe41-ce9b-491d-aa8c-345jk2n4bk****',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端生成的唯一ID。',
            'type' => 'string',
            'required' => false,
            'example' => '00e122c3-13fb-4fc3-bc7a-5d9acb89****',
          ),
        ),
        4 => 
        array (
          'name' => 'OfficeSiteId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作区ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou+dir-7186763****',
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
            'description' => '返回对象。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DC27288A-F9E1-5092-9B5B-71C27D15****',
              ),
              'Token' => 
              array (
                'description' => '返回Token信息列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'Token' => 
                  array (
                    'description' => 'Token值。',
                    'type' => 'string',
                    'example' => '7836fa6eced7dc8d54c775k34iu3h4i2kh534f****',
                  ),
                  'ExpiredAfter' => 
                  array (
                    'description' => '到期时间。',
                    'type' => 'string',
                    'example' => '2022-10-10T04:41:35Z',
                  ),
                  'UsedSize' => 
                  array (
                    'description' => '已使用的容量。单位：GiB。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '605089',
                  ),
                  'TotalSize' => 
                  array (
                    'description' => '云盘总容量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '6050416754750',
                  ),
                  'DomainId' => 
                  array (
                    'description' => '云盘域名。',
                    'type' => 'string',
                    'example' => 'h****',
                  ),
                  'Status' => 
                  array (
                    'description' => '当前云盘用户的状态。取值范围：

- enabled
- disabled',
                    'type' => 'string',
                    'example' => 'enabled',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DC27288A-F9E1-5092-9B5B-71C27D15****\\",\\n  \\"Token\\": {\\n    \\"Token\\": \\"7836fa6eced7dc8d54c775k34iu3h4i2kh534f****\\",\\n    \\"ExpiredAfter\\": \\"2022-10-10T04:41:35Z\\",\\n    \\"UsedSize\\": 605089,\\n    \\"TotalSize\\": 6050416754750,\\n    \\"DomainId\\": \\"h****\\",\\n    \\"Status\\": \\"enabled\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取云盘登录凭证',
    ),
    'IsKeepAlive' => 
    array (
      'summary' => '是否保持登录判断接口',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'Anonymous' => 
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
          'name' => 'ClientId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端生成的唯一ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'f4a0dc8e-1702-4728-9a60-95b27a35****',
          ),
        ),
        1 => 
        array (
          'name' => 'OfficeSiteId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作区ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou+dir-885351****',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。可以调用DescribeRegions获取无影云桌面支持的地域列表。',
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
                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****
',
              ),
              'OfficeSiteId' => 
              array (
                'description' => '工作区ID。',
                'type' => 'string',
                'example' => 'cn-hangzhou+dir-885351****
',
              ),
              'TenantId' => 
              array (
                'description' => '阿里云租户UID。',
                'type' => 'string',
                'example' => '141631846826****',
              ),
              'IsKeepAlive' => 
              array (
                'description' => '是否保持登录。',
                'type' => 'boolean',
                'example' => 'True',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\\\n\\",\\n  \\"OfficeSiteId\\": \\"cn-hangzhou+dir-885351****\\\\n\\",\\n  \\"TenantId\\": \\"141631846826****\\",\\n  \\"IsKeepAlive\\": true\\n}","type":"json"}]',
      'title' => '判断是否已开启保持登录',
    ),
    'ReportSessionStatus' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'Anonymous' => 
          array (
          ),
        ),
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'i-bp167fcodoa90ixn****',
          ),
        ),
        2 => 
        array (
          'name' => 'SessionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2',
          ),
        ),
        3 => 
        array (
          'name' => 'SessionStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话状态。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'enumValueTitles' => 
            array (
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
            ),
            'example' => 'SessionLogOn',
          ),
        ),
        4 => 
        array (
          'name' => 'SessionChangeTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话变更的持续时间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '1642909143781',
          ),
        ),
        5 => 
        array (
          'name' => 'EndUserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '连接用户。',
            'type' => 'string',
            'required' => false,
            'example' => 'liming',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0EE5DE20-25F4-5870-9D56-C259A45B****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0EE5DE20-25F4-5870-9D56-C259A45B****\\"\\n}","type":"json"}]',
      'title' => '报告会话状态',
    ),
    'ResetPassword' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'Anonymous' => 
          array (
          ),
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
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端生成的唯一ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '95e41934-383e-4c9f-824f-3b93b19b****',
          ),
        ),
        2 => 
        array (
          'name' => 'OfficeSiteId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作区ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou+dir-899235****',
          ),
        ),
        3 => 
        array (
          'name' => 'EndUserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'liming',
          ),
        ),
        4 => 
        array (
          'name' => 'Email',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '邮箱。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'a***@example.edu',
          ),
        ),
        5 => 
        array (
          'name' => 'phone',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '电话。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '1827912****',
          ),
        ),
        6 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2f00ab32-a473-4c90-9aae-dd8842ae****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A00477A5-167F-56D2-A315-EA77E4BD****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A00477A5-167F-56D2-A315-EA77E4BD****\\"\\n}","type":"json"}]',
      'title' => '重置密码',
    ),
    'ResetSnapshot' => 
    array (
      'summary' => '恢复快照对应的磁盘数据。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'Anonymous' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
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
          'name' => 'SnapshotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '快照ID。',
            'type' => 'string',
            'required' => true,
            'example' => 's-2zeipxmnhej803x7****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端生成的唯一ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'b9d8ddfd-65d4-4857-9e97-56477d1f****',
          ),
        ),
        3 => 
        array (
          'name' => 'SessionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '05182b8c-bb0d-49d3-963c-ee63a507****',
          ),
        ),
        4 => 
        array (
          'name' => 'LoginToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '登录凭证。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'v1fdef51b727aa91d6c881658978508114d3f5680fa99a66b2a631d17d5bb4860cccf1173be24d77d5ef1423c83aea****',
          ),
        ),
      ),
      'responses' => 
      array (
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
                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\"\\n}","type":"json"}]',
      'title' => '恢复快照对应的磁盘数据',
    ),
    'SendTokenCode' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'Anonymous' => 
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
          'name' => 'ClientId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端生成的唯一ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'f4a0dc8e-1702-4728-9a60-95b27a35****',
          ),
        ),
        1 => 
        array (
          'name' => 'OfficeSiteId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作区ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou+dir-2925105532',
          ),
        ),
        2 => 
        array (
          'name' => 'LoginToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '登录凭证。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'v28101ac6a9e69c66b04a163031680463660b4b216cd758f34b60b9ad6a7c7f7334b83dd8f75eef4209c68f9f1080b****',
          ),
        ),
        3 => 
        array (
          'name' => 'SessionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cd45e873-650d-4d70-acb9-f996187a****',
          ),
        ),
        4 => 
        array (
          'name' => 'EndUserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户名。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'alice',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientOS',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端运行的操作系统。',
            'type' => 'string',
            'required' => false,
            'example' => 'Windows_NT 10.0.18363 x64',
          ),
        ),
        6 => 
        array (
          'name' => 'ClientVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端版本。若使用无影客户端，可在客户端登录界面的关于对话框中查看该参数。',
            'type' => 'string',
            'required' => false,
            'example' => '2.1.0-R-20210731.151756',
          ),
        ),
        7 => 
        array (
          'name' => 'TokenCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '若已在无影云桌面控制台开启客户端二次认证，且识别到当前登录用户有风险时，会发送该二次认证验证码到终端用户邮箱。当CurrentStage为TokenVerify时必填。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '63****',
          ),
        ),
      ),
      'responses' => 
      array (
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
                'example' => '134BD0B2-B848-5743-9CE2-C1FD3D5F****
',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"134BD0B2-B848-5743-9CE2-C1FD3D5F****\\\\n\\"\\n}","type":"json"}]',
      'title' => '发送登录验证码信息。',
    ),
    'SetFingerPrintTemplate' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'Anonymous' => 
          array (
          ),
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
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端生成的唯一ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '347431a9-90f6-448e-82c4-42bc84a9****',
          ),
        ),
        2 => 
        array (
          'name' => 'SessionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => false,
            'example' => '8b42538a-246e-45a1-95ea-e5c65b09****',
          ),
        ),
        3 => 
        array (
          'name' => 'LoginToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '登录凭证。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'v11c73e7af0cb43ff39301651142485099ffb447085d76c4147519dbaa21c3bd90d53045e327c1f525ee6331c52556****',
          ),
        ),
        4 => 
        array (
          'name' => 'FingerPrintTemplate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指纹模板。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'goG3gG8AAABhujtscn',
          ),
        ),
        5 => 
        array (
          'name' => 'EncryptedFingerPrintTemplate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '已加密的指纹模板。',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAAAAAAAAAAA',
          ),
        ),
        6 => 
        array (
          'name' => 'EncryptedKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '加密密钥。',
            'type' => 'string',
            'required' => false,
            'example' => 'drjfspchj',
          ),
        ),
        7 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '密码。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'As53328794',
          ),
        ),
        8 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '描述。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'testDescription',
          ),
        ),
        9 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
              'Index' => 
              array (
                'description' => '索引。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CDE666EA-4FCD-5024-895C-8698E3D3****',
              ),
              'EncryptedPassword' => 
              array (
                'description' => '已加密密码。',
                'type' => 'string',
                'example' => '0711abb9-4cf8-41b2-9d0e-b51209468631;da4VFPNxwY3CZegFjOrCNw==;iHp2l9/qGcfD4tWx7jZIZQ==',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Index\\": 1,\\n  \\"RequestId\\": \\"CDE666EA-4FCD-5024-895C-8698E3D3****\\",\\n  \\"EncryptedPassword\\": \\"0711abb9-4cf8-41b2-9d0e-b51209468631;da4VFPNxwY3CZegFjOrCNw==;iHp2l9/qGcfD4tWx7jZIZQ==\\"\\n}","type":"json"}]',
      'title' => '设置指纹模板',
    ),
    'SetFingerPrintTemplateDescription' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'Anonymous' => 
          array (
          ),
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
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端生成的唯一ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0764064c-1609-4d3c-8cb7-ab8d3feg****',
          ),
        ),
        2 => 
        array (
          'name' => 'SessionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => false,
            'example' => 'd28520d4-da0b-4a97-981d-683db865****',
          ),
        ),
        3 => 
        array (
          'name' => 'LoginToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '登录凭证。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'v14e5a2404c495249f7541646535779667ea0b5d87754b5d2d2a3099bda774f3832e24756ef3e66eb574b1f3e99078****',
          ),
        ),
        4 => 
        array (
          'name' => 'Index',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '索引。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '描述。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Finger 1',
          ),
        ),
        6 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '',
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '40401e62-5caf-4508-8de7-bf98af12****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BBD7DFD1-A5DE-51D9-8FD6-3BF54EF4****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BBD7DFD1-A5DE-51D9-8FD6-3BF54EF4****\\"\\n}","type":"json"}]',
      'title' => '设置指纹模板描述',
    ),
    'UnbindUserDesktop' => 
    array (
      'summary' => '解绑用户桌面。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'Anonymous' => 
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
          'name' => 'LoginToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '登录凭证。',
            'type' => 'string',
            'required' => true,
            'example' => 'v12307f5e0****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端的类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'windows',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端生成的唯一ID。',
            'type' => 'string',
            'required' => true,
            'example' => '58f96f67-7944-4f97-9342-****',
          ),
        ),
        4 => 
        array (
          'name' => 'SessionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话ID。',
            'type' => 'string',
            'required' => true,
            'example' => '3b053331-dc98-43d8-b247-****',
          ),
        ),
        5 => 
        array (
          'name' => 'UserDesktopId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户桌面ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ud-sdfs****',
          ),
        ),
        6 => 
        array (
          'name' => 'Force',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否强制解绑。
- true：即使在连接状态下也会解绑。
- false：只有在未连接的状态下才解绑。',
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
            'title' => 'Schema of Response',
            'description' => '返回信息合集。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D5B7CF35-E078-5EBF-A010-****',
              ),
            ),
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D5B7CF35-E078-5EBF-A010-****\\"\\n}","type":"json"}]',
      'title' => '解绑用户桌面',
    ),
    'VerifyCredential' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'Anonymous' => 
          array (
          ),
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
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端生成的唯一ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'd0b95762-0541-4b53-a0e4-7ed09f39****',
          ),
        ),
        2 => 
        array (
          'name' => 'OfficeSiteId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作区ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-shanghai+dir-227468****',
          ),
        ),
        3 => 
        array (
          'name' => 'SessionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'eb17af2e-1dd6-4cc4-a3ee-3a14d0d7****',
          ),
        ),
        4 => 
        array (
          'name' => 'LoginToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '登录凭证。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'v1f5772a1c60dbea9fd8e1648567079018086448d234b5bc8e30bec0ba6e80c41c767c4dd0db51e9e5c4e0f111431a****',
          ),
        ),
        5 => 
        array (
          'name' => 'CredentialType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要清除的登录凭据类型。取值：
- Password：密码
- MfaPasscode：多因子认证
- FingerPrint：指纹',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'Password',
          ),
        ),
        6 => 
        array (
          'name' => 'Credential',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '认证信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123456789cyG',
          ),
        ),
        7 => 
        array (
          'name' => 'EncryptedKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待加密的密钥ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'drjfs****',
          ),
        ),
      ),
      'responses' => 
      array (
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
                'example' => 'D5F0BDFB-A229-5F1D-B790-33709D43****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D5F0BDFB-A229-5F1D-B790-33709D43****\\"\\n}","type":"json"}]',
      'title' => '验证客户端本地会话解锁的凭证',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'ap-southeast-7',
      'endpoint' => 'ecd.ap-southeast-7.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'ecd.cn-qingdao.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'ecd.cn-beijing.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'ecd.cn-zhangjiakou.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'ecd.cn-hangzhou.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'ecd.cn-shanghai.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-nanjing',
      'endpoint' => 'ecd.cn-nanjing.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'ecd.cn-shenzhen.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-guangzhou',
      'endpoint' => 'ecd.cn-guangzhou.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'ecd.cn-chengdu.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'ecd.cn-hongkong.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'ecd.ap-northeast-1.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'ecd.ap-southeast-1.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'ecd.ap-southeast-2.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'ap-southeast-6',
      'endpoint' => 'ecd.ap-southeast-6.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'ecd.us-west-1.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'ecd.eu-west-1.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'ecd.eu-central-1.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'ecd.cn-hangzhou-finance.aliyuncs.com',
    ),
  ),
);
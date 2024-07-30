<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'ecs-workbench',
        'version' => '2022-02-20',
    ],
    'directories' => [
        [
            'id' => 184047,
            'title' => 'instance',
            'type' => 'directory',
            'children' => [
                'LoginInstance',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'LoginInstance' => [
            'summary' => '登录ECS实例，使用此API可以登录ECS实例。',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceLoginInfo',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '登录的实例信息',
                        'type' => 'object',
                        'properties' => [
                            'InstanceType' => [
                                'description' => '登录的实例类型',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'ecs/eci/ack',
                            ],
                            'RegionId' => [
                                'description' => '实例所在的地域',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'cn-hangzhou/cn-beijing',
                            ],
                            'InstanceId' => [
                                'description' => '实例ID',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'i-123',
                            ],
                            'VpcId' => [
                                'description' => '实例的vpc的ID',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'vpc-abc',
                            ],
                            'NetworkAccessMode' => [
                                'description' => '实例的网络类型，vpc或者经典',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'vpc/classic',
                            ],
                            'Host' => [
                                'description' => '登录的IP',
                                'type' => 'string',
                                'required' => false,
                                'example' => '127.0.0.1',
                            ],
                            'Port' => [
                                'description' => '登录的端口号',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '22/3389',
                            ],
                            'Protocol' => [
                                'description' => '登录的协议',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'ssh/rdp/ack',
                            ],
                            'Username' => [
                                'description' => '登录的用户名',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'root/Administrator',
                            ],
                            'AuthenticationType' => [
                                'description' => '认证类型',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'password/certificate',
                            ],
                            'Password' => [
                                'description' => '登录的密码',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'xxxxx',
                            ],
                            'Certificate' => [
                                'description' => '当AuthenticationType是certificate的时候，登录的私钥',
                                'type' => 'string',
                                'required' => false,
                                'example' => '----begin----'."\n"
                                    .'----end----',
                            ],
                            'PassPhrase' => [
                                'description' => '当AuthenticationType是certificate，并且certificate是加密的时候，加密所用的密码',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'xxxx',
                            ],
                            'Options' => [
                                'description' => '额外的参数',
                                'type' => 'object',
                                'properties' => [
                                    'ContainerInfo' => [
                                        'description' => '协议是ack的时候，容器的信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'ClusterId' => [
                                                'description' => '容器所在的集群ID',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'abcdef',
                                            ],
                                            'ClusterName' => [
                                                'description' => '容器所在集群的名字',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'abc',
                                            ],
                                            'Namespace' => [
                                                'description' => '容器所在的命名空间',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'abc',
                                            ],
                                            'Deployment' => [
                                                'description' => '创建容器的Deployment',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'abc',
                                            ],
                                            'PodName' => [
                                                'description' => '容器所在的PodName',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'abc',
                                            ],
                                            'ContainerName' => [
                                                'description' => '容器的名字',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'abc',
                                            ],
                                            'Headers' => [
                                                'description' => '额外需要的Header',
                                                'type' => 'object',
                                                'required' => false,
                                                'example' => '{"abc":"def"}',
                                            ],
                                            'Endpoint' => [
                                                'description' => '扩展参数',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'abc',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'NotificationRecipientUrl' => [
                                        'description' => '扩展参数，用于登录成功后通知的地址，目前不可填写',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'abc',
                                    ],
                                    'NotificationEventTypes' => [
                                        'description' => '扩展参数，用于登录成功后通知的事件类型，目前不可填写',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'abc',
                                    ],
                                    'NotificationRetryLimit' => [
                                        'description' => '扩展参数，用于登录成功后通知的重试的次数，目前不可填写',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '3',
                                    ],
                                    'NotificationRetryIntervalSeconds' => [
                                        'description' => '扩展参数，用于登录成功后通知失败的重试间隔时间，目前不可填写',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '10',
                                    ],
                                    'SessionControl' => [
                                        'description' => '扩展参数，用于登录成功后通知的控制地址，目前不可填写',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'abc',
                                    ],
                                    'OperationDisableSeconds' => [
                                        'description' => 'rdp登录后禁用操作时间',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '1200',
                                    ],
                                    'AudioMuteSeconds' => [
                                        'description' => '音频禁音时间',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '1200',
                                    ],
                                    'VideoFreezeSeconds' => [
                                        'description' => '视频禁用时间',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '1200',
                                    ],
                                    'FixedHeight' => [
                                        'description' => 'rdp连接中固定的高度',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '100',
                                    ],
                                    'FixedWidth' => [
                                        'description' => 'rdp连接中固定的宽度',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '100',
                                    ],
                                ],
                                'required' => false,
                            ],
                            'ExpireTime' => [
                                'description' => '登录的失效时间',
                                'type' => 'string',
                                'required' => false,
                                'example' => '2022-11-30 00:00:00',
                            ],
                            'DurationSeconds' => [
                                'description' => '登录的持续时间',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '123',
                            ],
                            'DockerExec' => [
                                'description' => '容器初始化执行命令',
                                'type' => 'string',
                                'required' => false,
                                'example' => '/bin/sh',
                            ],
                            'DockerContainerName' => [
                                'description' => '容器名字',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'nginx',
                            ],
                            'ResourceGroupId' => [
                                'description' => '资源组ID',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'rg-abcd',
                            ],
                            'CredentialToken' => [
                                'description' => '凭据登录Token',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'abcd',
                            ],
                            'LoginByInstanceCredential' => [
                                'description' => '是否通过凭据登录',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                            ],
                            'LoginByInstanceShortcut' => [
                                'description' => '是否通过快捷登录',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                            ],
                            'ShortcutToken' => [
                                'description' => '快捷登录Token',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'abcd',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserAccount',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '实际登录的账户，扩展参数，目前不可使用',
                        'type' => 'object',
                        'properties' => [
                            'ParentId' => [
                                'description' => '账户的主账号ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '1234',
                            ],
                            'AccountId' => [
                                'description' => '账户的ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '1234',
                            ],
                            'AccountPlatform' => [
                                'description' => '账户的平台，目前是阿里云平台',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'aas',
                            ],
                            'EmpId' => [
                                'description' => '扩展参数，账户在企业的工号',
                                'type' => 'string',
                                'required' => false,
                                'example' => '123abc',
                            ],
                            'Options' => [
                                'description' => '额外参数',
                                'type' => 'object',
                                'properties' => [
                                    'LoginLimit' => [
                                        'description' => '账户的登录次数限制',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                        'example' => '3',
                                    ],
                                ],
                                'required' => false,
                            ],
                            'AccountStructure' => [
                                'description' => '账户的结构参数,主账号是2，子账号是3，sts账号是4',
                                'type' => 'string',
                                'required' => false,
                                'example' => '2/3/4',
                            ],
                            'LoginName' => [
                                'description' => '登录的名字',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'abc',
                            ],
                            'DurationSeconds' => [
                                'description' => '账户的持续时间',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '100',
                            ],
                            'ExpireTime' => [
                                'description' => '账户的过期时间',
                                'type' => 'string',
                                'required' => false,
                                'example' => '2022-11-30 00:00:00'."\n",
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PartnerInfo',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '合作伙伴信息，扩展参数，暂时不可以填写',
                        'type' => 'object',
                        'properties' => [
                            'PartnerId' => [
                                'description' => '合作伙伴的ID，扩展参数',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'abc',
                            ],
                            'PartnerName' => [
                                'description' => '合作伙伴的名字，扩展参数',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'abc',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'abc-123',
                            ],
                            'Success' => [
                                'description' => '请求是否成功',
                                'type' => 'string',
                                'example' => 'true/false',
                            ],
                            'Code' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => 'InvalidParamter',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '用户名密码错误',
                            ],
                            'Root' => [
                                'description' => '登录成功返回的具体信息',
                                'type' => 'object',
                                'properties' => [
                                    'InstanceLoginInfoList' => [
                                        'description' => '登录成功返回的地址列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '登录成功的实例列表信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'InstanceLoginView' => [
                                                    'description' => '登录的实例View信息',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'DefaultViewUrl' => [
                                                            'description' => '登录的实例的默认View，使用这个url必须要有阿里云的登录态，也就是当前浏览器处于阿里云的合理登录状态',
                                                            'type' => 'string',
                                                            'example' => 'abc',
                                                        ],
                                                    ],
                                                ],
                                                'InstanceId' => [
                                                    'description' => '登录的实例ID',
                                                    'type' => 'string',
                                                    'example' => 'i-abc',
                                                ],
                                                'InstanceLoginToken' => [
                                                    'description' => '登录的会话的Token',
                                                    'type' => 'string',
                                                    'example' => '134',
                                                ],
                                                'LoginSuccess' => [
                                                    'description' => '登录是否成功',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'DisposableAccount' => [
                                        'description' => '扩展参数，一次性账户的登录信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'LoginUrl' => [
                                                'description' => '一次性账户的登录URL，目前暂不开放',
                                                'type' => 'string',
                                                'example' => 'abc',
                                            ],
                                            'LoginFormActionUrl' => [
                                                'description' => '一次性账户的登录Action的地址，目前暂不开放',
                                                'type' => 'string',
                                                'example' => 'abc',
                                            ],
                                        ],
                                    ],
                                    'SessionControl' => [
                                        'description' => '登录的控制地址信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'BaseUrl' => [
                                                'description' => '登录的控制地址信息',
                                                'type' => 'string',
                                                'example' => 'abc',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"abc-123\\",\\n  \\"Success\\": \\"true/false\\",\\n  \\"Code\\": \\"InvalidParamter\\",\\n  \\"Message\\": \\"用户名密码错误\\",\\n  \\"Root\\": {\\n    \\"InstanceLoginInfoList\\": [\\n      {\\n        \\"InstanceLoginView\\": {\\n          \\"DefaultViewUrl\\": \\"abc\\"\\n        },\\n        \\"InstanceId\\": \\"i-abc\\",\\n        \\"InstanceLoginToken\\": \\"134\\",\\n        \\"LoginSuccess\\": true\\n      }\\n    ],\\n    \\"DisposableAccount\\": {\\n      \\"LoginUrl\\": \\"abc\\",\\n      \\"LoginFormActionUrl\\": \\"abc\\"\\n    },\\n    \\"SessionControl\\": {\\n      \\"BaseUrl\\": \\"abc\\"\\n    }\\n  }\\n}","type":"json"}]',
            'title' => '登录实例',
            'description' => '使用此API将会创建服务关联角色 [`AliyunServiceRoleForECSWorkbench`](https://help.aliyun.com/zh/ecs/user-guide/service-linked-role-for-workbench)',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'ecs-workbench.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'ecs-workbench.cn-beijing.aliyuncs.com',
        ],
    ],
];
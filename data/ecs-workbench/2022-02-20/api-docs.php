<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'ecs-workbench',
    'version' => '2022-02-20',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 184047,
      'title' => 'instance',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'LoginInstance',
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
    'LoginInstance' => 
    array (
      'summary' => '登录ECS实例，使用此API可以登录ECS实例。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceLoginInfo',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '登录的实例信息',
            'type' => 'object',
            'properties' => 
            array (
              'InstanceType' => 
              array (
                'description' => '登录的实例类型',
                'type' => 'string',
                'required' => false,
                'example' => 'ecs/eci/ack',
              ),
              'RegionId' => 
              array (
                'description' => '实例所在的地域',
                'type' => 'string',
                'required' => false,
                'example' => 'cn-hangzhou/cn-beijing',
              ),
              'InstanceId' => 
              array (
                'description' => '实例ID',
                'type' => 'string',
                'required' => false,
                'example' => 'i-123',
              ),
              'VpcId' => 
              array (
                'description' => '实例的vpc的ID',
                'type' => 'string',
                'required' => false,
                'example' => 'vpc-abc',
              ),
              'NetworkAccessMode' => 
              array (
                'description' => '实例的网络类型，vpc或者经典',
                'type' => 'string',
                'required' => false,
                'example' => 'vpc/classic',
              ),
              'Host' => 
              array (
                'description' => '登录的IP',
                'type' => 'string',
                'required' => false,
                'example' => '127.0.0.1',
              ),
              'Port' => 
              array (
                'description' => '登录的端口号',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '22/3389',
              ),
              'Protocol' => 
              array (
                'description' => '登录的协议',
                'type' => 'string',
                'required' => false,
                'example' => 'ssh/rdp/ack',
              ),
              'Username' => 
              array (
                'description' => '登录的用户名',
                'type' => 'string',
                'required' => false,
                'example' => 'root/Administrator',
              ),
              'AuthenticationType' => 
              array (
                'description' => '认证类型',
                'type' => 'string',
                'required' => false,
                'example' => 'password/certificate',
              ),
              'Password' => 
              array (
                'description' => '登录的密码',
                'type' => 'string',
                'required' => false,
                'example' => 'xxxxx',
              ),
              'Certificate' => 
              array (
                'description' => '当AuthenticationType是certificate的时候，登录的私钥',
                'type' => 'string',
                'required' => false,
                'example' => '----begin----
----end----',
              ),
              'PassPhrase' => 
              array (
                'description' => '当AuthenticationType是certificate，并且certificate是加密的时候，加密所用的密码',
                'type' => 'string',
                'required' => false,
                'example' => 'xxxx',
              ),
              'Options' => 
              array (
                'description' => '额外的参数',
                'type' => 'object',
                'properties' => 
                array (
                  'ContainerInfo' => 
                  array (
                    'description' => '协议是ack的时候，容器的信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ClusterId' => 
                      array (
                        'description' => '容器所在的集群ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'abcdef',
                      ),
                      'ClusterName' => 
                      array (
                        'description' => '容器所在集群的名字',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'abc',
                      ),
                      'Namespace' => 
                      array (
                        'description' => '容器所在的命名空间',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'abc',
                      ),
                      'Deployment' => 
                      array (
                        'description' => '创建容器的Deployment',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'abc',
                      ),
                      'PodName' => 
                      array (
                        'description' => '容器所在的PodName',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'abc',
                      ),
                      'ContainerName' => 
                      array (
                        'description' => '容器的名字',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'abc',
                      ),
                      'Headers' => 
                      array (
                        'description' => '额外需要的Header',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{"abc":"def"}',
                      ),
                      'Endpoint' => 
                      array (
                        'description' => '扩展参数',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'abc',
                      ),
                    ),
                    'required' => false,
                  ),
                  'NotificationRecipientUrl' => 
                  array (
                    'description' => '扩展参数，用于登录成功后通知的地址，目前不可填写',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'abc',
                  ),
                  'NotificationEventTypes' => 
                  array (
                    'description' => '扩展参数，用于登录成功后通知的事件类型，目前不可填写',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'abc',
                  ),
                  'NotificationRetryLimit' => 
                  array (
                    'description' => '扩展参数，用于登录成功后通知的重试的次数，目前不可填写',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '3',
                  ),
                  'NotificationRetryIntervalSeconds' => 
                  array (
                    'description' => '扩展参数，用于登录成功后通知失败的重试间隔时间，目前不可填写',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '10',
                  ),
                  'SessionControl' => 
                  array (
                    'description' => '扩展参数，用于登录成功后通知的控制地址，目前不可填写',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'abc',
                  ),
                  'OperationDisableSeconds' => 
                  array (
                    'description' => 'rdp登录后禁用操作时间',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '1200',
                  ),
                  'AudioMuteSeconds' => 
                  array (
                    'description' => '音频禁音时间',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '1200',
                  ),
                  'VideoFreezeSeconds' => 
                  array (
                    'description' => '视频禁用时间',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '1200',
                  ),
                  'FixedHeight' => 
                  array (
                    'description' => 'rdp连接中固定的高度',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '100',
                  ),
                  'FixedWidth' => 
                  array (
                    'description' => 'rdp连接中固定的宽度',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '100',
                  ),
                ),
                'required' => false,
              ),
              'ExpireTime' => 
              array (
                'description' => '登录的失效时间',
                'type' => 'string',
                'required' => false,
                'example' => '2022-11-30 00:00:00',
              ),
              'DurationSeconds' => 
              array (
                'description' => '登录的持续时间',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '123',
              ),
              'DockerExec' => 
              array (
                'description' => '容器初始化执行命令',
                'type' => 'string',
                'required' => false,
                'example' => '/bin/sh',
              ),
              'DockerContainerName' => 
              array (
                'description' => '容器名字',
                'type' => 'string',
                'required' => false,
                'example' => 'nginx',
              ),
              'ResourceGroupId' => 
              array (
                'description' => '资源组ID',
                'type' => 'string',
                'required' => false,
                'example' => 'rg-abcd',
              ),
              'CredentialToken' => 
              array (
                'description' => '凭据登录Token',
                'type' => 'string',
                'required' => false,
                'example' => 'abcd',
              ),
              'LoginByInstanceCredential' => 
              array (
                'description' => '是否通过凭据登录',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'LoginByInstanceShortcut' => 
              array (
                'description' => '是否通过快捷登录',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'ShortcutToken' => 
              array (
                'description' => '快捷登录Token',
                'type' => 'string',
                'required' => false,
                'example' => 'abcd',
              ),
            ),
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'UserAccount',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '实际登录的账户，扩展参数，目前不可使用',
            'type' => 'object',
            'properties' => 
            array (
              'ParentId' => 
              array (
                'description' => '账户的主账号ID',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '1234',
              ),
              'AccountId' => 
              array (
                'description' => '账户的ID',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '1234',
              ),
              'AccountPlatform' => 
              array (
                'description' => '账户的平台，目前是阿里云平台',
                'type' => 'string',
                'required' => false,
                'example' => 'aas',
              ),
              'EmpId' => 
              array (
                'description' => '扩展参数，账户在企业的工号',
                'type' => 'string',
                'required' => false,
                'example' => '123abc',
              ),
              'Options' => 
              array (
                'description' => '额外参数',
                'type' => 'object',
                'properties' => 
                array (
                  'LoginLimit' => 
                  array (
                    'description' => '账户的登录次数限制',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => false,
                    'example' => '3',
                  ),
                ),
                'required' => false,
              ),
              'AccountStructure' => 
              array (
                'description' => '账户的结构参数,主账号是2，子账号是3，sts账号是4',
                'type' => 'string',
                'required' => false,
                'example' => '2/3/4',
              ),
              'LoginName' => 
              array (
                'description' => '登录的名字',
                'type' => 'string',
                'required' => false,
                'example' => 'abc',
              ),
              'DurationSeconds' => 
              array (
                'description' => '账户的持续时间',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '100',
              ),
              'ExpireTime' => 
              array (
                'description' => '账户的过期时间',
                'type' => 'string',
                'required' => false,
                'example' => '2022-11-30 00:00:00
',
              ),
            ),
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'PartnerInfo',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '合作伙伴信息，扩展参数，暂时不可以填写',
            'type' => 'object',
            'properties' => 
            array (
              'PartnerId' => 
              array (
                'description' => '合作伙伴的ID，扩展参数',
                'type' => 'string',
                'required' => false,
                'example' => 'abc',
              ),
              'PartnerName' => 
              array (
                'description' => '合作伙伴的名字，扩展参数',
                'type' => 'string',
                'required' => false,
                'example' => 'abc',
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
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'abc-123',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功',
                'type' => 'string',
                'example' => 'true/false',
              ),
              'Code' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => 'InvalidParamter',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => '用户名密码错误',
              ),
              'Root' => 
              array (
                'description' => '登录成功返回的具体信息',
                'type' => 'object',
                'properties' => 
                array (
                  'InstanceLoginInfoList' => 
                  array (
                    'description' => '登录成功返回的地址列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '登录成功的实例列表信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'InstanceLoginView' => 
                        array (
                          'description' => '登录的实例View信息',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'DefaultViewUrl' => 
                            array (
                              'description' => '登录的实例的默认View，使用这个url必须要有阿里云的登录态，也就是当前浏览器处于阿里云的合理登录状态',
                              'type' => 'string',
                              'example' => 'abc',
                            ),
                          ),
                        ),
                        'InstanceId' => 
                        array (
                          'description' => '登录的实例ID',
                          'type' => 'string',
                          'example' => 'i-abc',
                        ),
                        'InstanceLoginToken' => 
                        array (
                          'description' => '登录的会话的Token',
                          'type' => 'string',
                          'example' => '134',
                        ),
                        'LoginSuccess' => 
                        array (
                          'description' => '登录是否成功',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                      ),
                    ),
                  ),
                  'DisposableAccount' => 
                  array (
                    'description' => '扩展参数，一次性账户的登录信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'LoginUrl' => 
                      array (
                        'description' => '一次性账户的登录URL，目前暂不开放',
                        'type' => 'string',
                        'example' => 'abc',
                      ),
                      'LoginFormActionUrl' => 
                      array (
                        'description' => '一次性账户的登录Action的地址，目前暂不开放',
                        'type' => 'string',
                        'example' => 'abc',
                      ),
                    ),
                  ),
                  'SessionControl' => 
                  array (
                    'description' => '登录的控制地址信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'BaseUrl' => 
                      array (
                        'description' => '登录的控制地址信息',
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"abc-123\\",\\n  \\"Success\\": \\"true/false\\",\\n  \\"Code\\": \\"InvalidParamter\\",\\n  \\"Message\\": \\"用户名密码错误\\",\\n  \\"Root\\": {\\n    \\"InstanceLoginInfoList\\": [\\n      {\\n        \\"InstanceLoginView\\": {\\n          \\"DefaultViewUrl\\": \\"abc\\"\\n        },\\n        \\"InstanceId\\": \\"i-abc\\",\\n        \\"InstanceLoginToken\\": \\"134\\",\\n        \\"LoginSuccess\\": true\\n      }\\n    ],\\n    \\"DisposableAccount\\": {\\n      \\"LoginUrl\\": \\"abc\\",\\n      \\"LoginFormActionUrl\\": \\"abc\\"\\n    },\\n    \\"SessionControl\\": {\\n      \\"BaseUrl\\": \\"abc\\"\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '登录实例',
      'description' => '使用此API将会创建服务关联角色 [`AliyunServiceRoleForECSWorkbench`](https://help.aliyun.com/zh/ecs/user-guide/service-linked-role-for-workbench)',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'ecs-workbench.cn-hangzhou.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'ecs-workbench.cn-beijing.aliyuncs.com',
    ),
  ),
);
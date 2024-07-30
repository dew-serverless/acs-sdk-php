<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'FC',
        'product' => 'FC',
        'version' => '2023-03-30',
    ],
    'directories' => [
        [
            'id' => 187616,
            'title' => '自定义域名',
            'type' => 'directory',
            'children' => [
                'CreateCustomDomain',
                'DeleteCustomDomain',
                'GetCustomDomain',
                'ListCustomDomains',
                'UpdateCustomDomain',
            ],
        ],
        [
            'id' => 187623,
            'title' => '函数',
            'type' => 'directory',
            'children' => [
                'DeleteFunctionVersion',
                'GetFunctionCode',
                'ListFunctionVersions',
                'PublishFunctionVersion',
                'CreateFunction',
                'DeleteFunction',
                'GetFunction',
                'ListFunctions',
                'InvokeFunction',
                'UpdateFunction',
            ],
        ],
        [
            'id' => 187624,
            'title' => '别名',
            'type' => 'directory',
            'children' => [
                'DeleteAlias',
                'GetAlias',
                'ListAliases',
                'UpdateAlias',
                'CreateAlias',
            ],
        ],
        [
            'id' => 187621,
            'title' => '触发器',
            'type' => 'directory',
            'children' => [
                'CreateTrigger',
                'DeleteTrigger',
                'GetTrigger',
                'ListTriggers',
                'UpdateTrigger',
            ],
        ],
        [
            'id' => 187619,
            'title' => '函数异步配置',
            'type' => 'directory',
            'children' => [
                'DeleteAsyncInvokeConfig',
                'GetAsyncInvokeConfig',
                'ListAsyncInvokeConfigs',
                'PutAsyncInvokeConfig',
            ],
        ],
        [
            'id' => 187617,
            'title' => '预留函数配置',
            'type' => 'directory',
            'children' => [
                'DeleteProvisionConfig',
                'GetProvisionConfig',
                'ListProvisionConfigs',
                'PutProvisionConfig',
            ],
        ],
        [
            'id' => 187620,
            'title' => '函数并发配置',
            'type' => 'directory',
            'children' => [
                'DeleteConcurrencyConfig',
                'GetConcurrencyConfig',
                'ListConcurrencyConfigs',
                'PutConcurrencyConfig',
            ],
        ],
        [
            'id' => 187615,
            'title' => '层',
            'type' => 'directory',
            'children' => [
                'CreateLayerVersion',
                'DeleteLayerVersion',
                'GetLayerVersion',
                'GetLayerVersionByArn',
                'ListLayerVersions',
                'ListLayers',
                'PutLayerACL',
            ],
        ],
        [
            'id' => 187618,
            'title' => '实例',
            'type' => 'directory',
            'children' => [
                'ListInstances',
            ],
        ],
        [
            'id' => 187622,
            'title' => 'VPC绑定',
            'type' => 'directory',
            'children' => [
                'ListVpcBindings',
                'CreateVpcBinding',
                'DeleteVpcBinding',
            ],
        ],
        [
            'id' => 187909,
            'title' => '标签',
            'type' => 'directory',
            'children' => [
                'TagResources',
                'ListTagResources',
                'UntagResources',
            ],
        ],
        [
            'id' => 191490,
            'title' => '异步任务',
            'type' => 'directory',
            'children' => [
                'GetAsyncTask',
                'ListAsyncTasks',
                'StopAsyncTask',
            ],
        ],
    ],
    'components' => [
        'schemas' => [
            'AccelerationInfo' => [
                'title' => '镜像加速信息（已废弃）',
                'description' => '镜像加速信息',
                'type' => 'object',
                'properties' => [
                    'status' => [
                        'title' => '镜像加速状态（已废弃）',
                        'description' => '镜像加速状态',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Ready',
                    ],
                ],
            ],
            'Alias' => [
                'title' => '别名信息',
                'description' => '别名信息。',
                'type' => 'object',
                'properties' => [
                    'additionalVersionWeight' => [
                        'title' => '灰度版本',
                        'description' => '灰度版本权重。',
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'description' => '灰度比例。取值为0和1之间的小数。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '0.5',
                        ],
                    ],
                    'aliasName' => [
                        'title' => '别名名称',
                        'description' => '别名名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'prod',
                    ],
                    'createdTime' => [
                        'title' => '创建时间',
                        'description' => '创建时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2006-01-02T15:04:05Z07:00',
                    ],
                    'description' => [
                        'title' => '别名描述信息',
                        'description' => '别名描述信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'alias for pre env',
                    ],
                    'lastModifiedTime' => [
                        'title' => '修改时间',
                        'description' => '修改时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2006-01-02T15:04:05Z07:00',
                    ],
                    'versionId' => [
                        'title' => '别名指向的版本',
                        'description' => '别名指向的版本。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
            ],
            'AsyncConfig' => [
                'title' => '异步调用配置',
                'description' => '异步调用配置',
                'type' => 'object',
                'properties' => [
                    'asyncTask' => [
                        'title' => '是否开启异步任务',
                        'description' => '是否开启异步任务',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                    'createdTime' => [
                        'title' => '创建时间',
                        'description' => '创建时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2006-01-02T15:04:05Z07:00',
                    ],
                    'destinationConfig' => [
                        'title' => '目标配置',
                        'description' => '目标配置',
                        'required' => false,
                        '$ref' => '#/components/schemas/DestinationConfig',
                    ],
                    'functionArn' => [
                        'title' => '函数资源标识',
                        'description' => '函数资源标识',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'acs:fc:cn-shanghai:1234/functions/my-func',
                    ],
                    'lastModifiedTime' => [
                        'title' => '最后修改时间',
                        'description' => '最后修改时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2006-01-02T15:04:05Z07:00',
                    ],
                    'maxAsyncEventAgeInSeconds' => [
                        'title' => '事件最大存活时间',
                        'description' => '事件最大存活时间',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '3600',
                    ],
                    'maxAsyncRetryAttempts' => [
                        'title' => '异步调用重试次数',
                        'description' => '异步调用重试次数',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '3',
                    ],
                ],
            ],
            'AsyncTask' => [
                'title' => '异步任务信息',
                'description' => '异步任务信息',
                'type' => 'object',
                'properties' => [
                    'alreadyRetriedTimes' => [
                        'title' => '异步任务失败后的已重试次数',
                        'description' => '异步任务失败后的已重试次数',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '3',
                    ],
                    'destinationStatus' => [
                        'title' => '异步任务的最终状态',
                        'description' => '异步任务的最终状态',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Succeeded',
                    ],
                    'durationMs' => [
                        'title' => '异步任务的执行耗时',
                        'description' => '异步任务的执行耗时',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1000',
                    ],
                    'endTime' => [
                        'title' => '异步任务结束时间，单位为毫秒',
                        'description' => '异步任务结束时间，单位为毫秒',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1633449590000',
                    ],
                    'events' => [
                        'title' => '异步任务事件列表',
                        'description' => '异步任务事件列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '异步任务事件。',
                            '$ref' => '#/components/schemas/AsyncTaskEvent',
                        ],
                        'required' => false,
                    ],
                    'functionArn' => [
                        'title' => '函数资源标识',
                        'description' => '函数资源标识',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'acs:fc:cn-shanghai:1234/functions/my-func',
                    ],
                    'instanceId' => [
                        'title' => '异步任务对应的实例 ID',
                        'description' => '异步任务对应的实例 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'D4-*******9FD1-882707E',
                    ],
                    'qualifier' => [
                        'title' => '函数的版本或别名。',
                        'description' => '函数的版本或别名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'prod',
                    ],
                    'requestId' => [
                        'title' => '本次异步任务对应的请求 ID',
                        'description' => '本次异步任务对应的请求 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'e026ae92-61e5-472f-b32d-1c9e3c4e****',
                    ],
                    'returnPayload' => [
                        'title' => '异步任务执行完成后的响应内容',
                        'description' => '异步任务执行完成后的响应内容。大小限制为 1 MB。'."\n"
                            .'该字段当前处于内测阶段，如您需要使用，请[联系我们](~~2513733~~)为您开通。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'result',
                    ],
                    'startedTime' => [
                        'title' => '异步任务开始时间，单位为毫秒',
                        'description' => '异步任务开始时间，单位为毫秒',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1633449590000',
                    ],
                    'status' => [
                        'title' => '异步任务的执行状态',
                        'description' => '异步任务的执行状态。'."\n"
                            ."\n"
                            .'- Enqueued：异步消息已入队，等待处理。'."\n"
                            ."\n"
                            .'- Succeeded：调用执行成功。'."\n"
                            ."\n"
                            .'- Failed：调用执行失败。'."\n"
                            ."\n"
                            .'- Running：调用执行中。'."\n"
                            ."\n"
                            .'- Stopped：调用执行终止。'."\n"
                            ."\n"
                            .'- Stopping：执行停止中。'."\n"
                            ."\n"
                            .'- Invalid：您的执行因函数被删除等原因处于无效状态（任务未被执行）。'."\n"
                            ."\n"
                            .'- Expired：您为任务配置了最长排队等待的期限。该任务因为超期被丢弃（任务未被执行）。'."\n"
                            ."\n"
                            .'- Retrying：异步调用因执行错误重试中。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Running',
                    ],
                    'taskErrorMessage' => [
                        'title' => '异步任务失败的错误消息',
                        'description' => '异步任务失败的错误消息',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'UnhandledInvocationError',
                    ],
                    'taskId' => [
                        'title' => '异步任务 ID',
                        'description' => '异步任务 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'e026ae92-61e5-472f-b32d-1c9e3c4e****',
                    ],
                    'taskPayload' => [
                        'title' => '异步任务执行时的入参内容',
                        'description' => '异步任务执行时的入参内容',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'body',
                    ],
                ],
            ],
            'AsyncTaskEvent' => [
                'title' => '任务事件内容',
                'description' => '任务事件内容',
                'type' => 'object',
                'properties' => [
                    'eventDetail' => [
                        'title' => '事件负载内容',
                        'description' => '事件负载内容',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'body',
                    ],
                    'eventId' => [
                        'title' => '事件 ID',
                        'description' => '事件 ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                    'status' => [
                        'title' => '任务状态',
                        'description' => '事件执行状态。'."\n"
                            ."\n"
                            .'- Enqueued：异步消息已入队，等待处理。'."\n"
                            ."\n"
                            .'- Succeeded：调用执行成功。'."\n"
                            ."\n"
                            .'- Failed：调用执行失败。'."\n"
                            ."\n"
                            .'- Running：调用执行中。'."\n"
                            ."\n"
                            .'- Stopped：调用执行终止。'."\n"
                            ."\n"
                            .'- Stopping：执行停止中。'."\n"
                            ."\n"
                            .'- Invalid：您的执行因函数被删除等原因处于无效状态（任务未被执行）。'."\n"
                            ."\n"
                            .'- Expired：您为任务配置了最长排队等待的期限。该任务因为超期被丢弃（任务未被执行）。'."\n"
                            ."\n"
                            .'- Retrying：异步调用因执行错误重试中。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Succeeded',
                    ],
                    'timestamp' => [
                        'title' => '事件发生时间，单位毫秒',
                        'description' => '事件发生时间，单位毫秒',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1647420449721',
                    ],
                ],
            ],
            'AuthConfig' => [
                'title' => '权限认证配置',
                'description' => '权限认证配置',
                'type' => 'object',
                'properties' => [
                    'authInfo' => [
                        'title' => '认证信息',
                        'description' => '认证信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{}',
                    ],
                    'authType' => [
                        'title' => '认证类型',
                        'description' => '认证类型。anonymous, function或者jwt。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'anonymous',
                    ],
                ],
            ],
            'BatchWindow' => [
                'title' => 'EventBridge 触发器的批处理窗口配置',
                'description' => 'EventBridge 触发器的批处理窗口配置',
                'type' => 'object',
                'properties' => [
                    'CountBasedWindow' => [
                        'title' => '窗口中最大可容纳的事件数量。当达到此阈值，会触发窗口内的数据往下游推送。当存在多个窗口时，有一个窗口满足即触发。',
                        'description' => '窗口中最大可容纳的事件数量。当达到此阈值，会触发窗口内的数据往下游推送。当存在多个窗口时，有一个窗口满足即触发。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '100',
                    ],
                    'TimeBasedWindow' => [
                        'title' => '窗口中最大可容纳的时间范围内的事件（单位秒）。当达到此阈值，会触发窗口内的数据往下游推送。当存在多个窗口时，有一个窗口满足即触发。',
                        'description' => '窗口中最大可容纳的时间范围内的事件（单位秒）。当达到此阈值，会触发窗口内的数据往下游推送。当存在多个窗口时，有一个窗口满足即触发。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'CDNTriggerConfig' => [
                'title' => 'CDN 触发器配置',
                'description' => 'CDN 触发器配置',
                'type' => 'object',
                'properties' => [
                    'eventName' => [
                        'title' => '触发事件名称，详情请参考文档：https://help.aliyun.com/zh/fc/overview-27?spm=a2c4g.11186623.0.i4#section-8fg-smg-ysp',
                        'description' => '触发事件名称，详情请参考 [CDN 事件定义](https://help.aliyun.com/zh/fc/overview-27?spm=a2c4g.11186623.0.i4#section-8fg-smg-ysp)',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CdnDomainStarted',
                    ],
                    'eventVersion' => [
                        'title' => '触发事件版本，目前仅支持 1.0.0 事件版本',
                        'description' => '触发事件版本，目前仅支持 1.0.0 事件版本',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1.0.0',
                    ],
                    'filter' => [
                        'title' => '事件过滤规则描述',
                        'description' => '事件过滤规则描述',
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'description' => '事件过滤规则集合。',
                            'type' => 'array',
                            'items' => [
                                'description' => '事件过滤关键字符串。',
                                'type' => 'string',
                                'example' => 'filter-key',
                            ],
                        ],
                    ],
                    'notes' => [
                        'title' => '触发器描述',
                        'description' => '触发器描述',
                        'type' => 'string',
                        'required' => false,
                        'example' => '缓存事件触发器',
                    ],
                ],
            ],
            'CertConfig' => [
                'title' => '证书配置',
                'description' => '证书配置',
                'type' => 'object',
                'properties' => [
                    'certName' => [
                        'title' => '证书名称',
                        'description' => '证书名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-cert',
                        'maxLength' => 128,
                        'minLength' => 1,
                    ],
                    'certificate' => [
                        'title' => 'PEM格式证书',
                        'description' => 'PEM格式证书',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PEM format',
                        'maxLength' => 20480,
                    ],
                    'privateKey' => [
                        'title' => 'PEM格式私钥',
                        'description' => 'PEM格式私钥',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PEM format',
                        'maxLength' => 4096,
                    ],
                ],
            ],
            'ConcurrencyConfig' => [
                'title' => '函数并发配置',
                'description' => '函数并发配置',
                'type' => 'object',
                'properties' => [
                    'functionArn' => [
                        'title' => '阿里云资源的标识',
                        'description' => '阿里云资源的标识',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'acs:fc:cn-shanghai:123:functions/demo',
                    ],
                    'reservedConcurrency' => [
                        'title' => '预留并发，函数预留账号并发的一部份，其他函数不可以使用这部份并发。预留并发包括预留实例和按量实例的总并发。',
                        'description' => '预留并发，函数预留账号并发的一部份，其他函数不可以使用这部份并发。预留并发包括预留实例和按量实例的总并发。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'CreateAliasInput' => [
                'title' => '创建别名的请求参数',
                'description' => '创建别名的请求参数',
                'type' => 'object',
                'properties' => [
                    'additionalVersionWeight' => [
                        'title' => '灰度版本',
                        'description' => '灰度版本权重',
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '0.5',
                        ],
                    ],
                    'aliasName' => [
                        'title' => '别名名称',
                        'description' => '别名名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'prod',
                        'maxLength' => 128,
                        'minLength' => 1,
                    ],
                    'description' => [
                        'title' => '别名描述信息',
                        'description' => '别名描述信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my alias',
                        'maxLength' => 256,
                    ],
                    'versionId' => [
                        'title' => '别名指向的版本',
                        'description' => '别名指向的版本',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                        'maxLength' => 10,
                        'minLength' => 1,
                    ],
                ],
            ],
            'CreateCustomDomainInput' => [
                'title' => '创建自定义域名的请求信息',
                'description' => '创建自定义域名的请求信息。',
                'type' => 'object',
                'properties' => [
                    'authConfig' => [
                        'title' => '权限认证配置',
                        'description' => '权限认证配置。',
                        'required' => false,
                        '$ref' => '#/components/schemas/AuthConfig',
                    ],
                    'certConfig' => [
                        'title' => 'HTTPS证书的信息。',
                        'description' => 'HTTPS证书的信息。',
                        'required' => false,
                        '$ref' => '#/components/schemas/CertConfig',
                    ],
                    'domainName' => [
                        'title' => '域名。填写已在阿里云备案或接入备案的自定义域名名称。',
                        'description' => '域名。填写已在阿里云备案或接入备案的自定义域名名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com',
                        'maxLength' => 256,
                        'minLength' => 1,
                    ],
                    'protocol' => [
                        'title' => '域名支持的协议类型。HTTP：仅支持HTTP协议。HTTPS：仅支持HTTPS协议。HTTP,HTTPS：支持HTTP及HTTPS协议。',
                        'description' => '域名支持的协议类型。HTTP：仅支持HTTP协议。HTTPS：仅支持HTTPS协议。HTTP,HTTPS：支持HTTP及HTTPS协议。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'HTTP',
                    ],
                    'routeConfig' => [
                        'title' => '路由表：自定义域名访问时的PATH到Function的映射。',
                        'description' => '路由表：自定义域名访问时的PATH到Function的映射。',
                        'required' => false,
                        '$ref' => '#/components/schemas/RouteConfig',
                    ],
                    'tlsConfig' => [
                        'title' => 'TLS配置信息。',
                        'description' => 'TLS配置信息。',
                        'required' => false,
                        '$ref' => '#/components/schemas/TLSConfig',
                    ],
                    'wafConfig' => [
                        'title' => 'Web应用防火墙配置信息。',
                        'description' => 'Web应用防火墙配置信息。',
                        'required' => false,
                        '$ref' => '#/components/schemas/WAFConfig',
                    ],
                ],
            ],
            'CreateFunctionInput' => [
                'title' => '函数创建请求参数',
                'description' => '函数创建请求参数',
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'title' => '函数代码ZIP包。code和customContainerConfig二选一。',
                        'description' => '函数代码ZIP包。code和customContainerConfig二选一。',
                        'required' => false,
                        '$ref' => '#/components/schemas/InputCodeLocation',
                    ],
                    'cpu' => [
                        'title' => '函数的CPU规格，单位为vCPU，为0.05 vCPU的倍数。',
                        'description' => '函数的CPU规格，单位为vCPU，为0.05 vCPU的倍数。最小值为0.05，最大值为16。同时cpu和memorySize（按GB算）比例要在1:1和1:4之间。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '1',
                    ],
                    'customContainerConfig' => [
                        'title' => '自定义容器运行时的相关配置，成功配置后函数可以使用自定义容器镜像执行函数。code和customContainerConfig二选一。',
                        'description' => '自定义容器运行时的相关配置，成功配置后函数可以使用自定义容器镜像执行函数。code和customContainerConfig二选一。',
                        'required' => false,
                        '$ref' => '#/components/schemas/CustomContainerConfig',
                    ],
                    'customDNS' => [
                        'title' => '自定义DNS配置。',
                        'description' => '自定义DNS配置。',
                        'required' => false,
                        '$ref' => '#/components/schemas/CustomDNS',
                    ],
                    'customRuntimeConfig' => [
                        'title' => '自定义运行时配置。',
                        'description' => '自定义运行时配置。',
                        'required' => false,
                        '$ref' => '#/components/schemas/CustomRuntimeConfig',
                    ],
                    'description' => [
                        'title' => '函数的描述。',
                        'description' => '函数的描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my function',
                        'maxLength' => 256,
                    ],
                    'diskSize' => [
                        'title' => '函数的磁盘规格，单位为MB，可选值为512 MB或10240 MB。',
                        'description' => '函数的磁盘规格，单位为MB，可选值为512 MB或10240 MB。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '512',
                    ],
                    'environmentVariables' => [
                        'title' => '函数的环境变量，可以在运行环境中访问设置的环境变量。',
                        'description' => '函数的环境变量，可以在运行环境中访问设置的环境变量。',
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'description' => '环境变量的值。',
                            'type' => 'string',
                            'example' => 'value1',
                        ],
                    ],
                    'functionName' => [
                        'title' => '函数的名称。只能包含字母、数字、下划线（_）和短划线（-），不能以数字、短划线（-）开头，长度范围为1~64个字符。',
                        'description' => '函数的名称。只能包含字母、数字、下划线（_）和短划线（-），不能以数字、短划线（-）开头，长度范围为1~64个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-function-1',
                        'maxLength' => 128,
                        'minLength' => 1,
                    ],
                    'gpuConfig' => [
                        'title' => '函数GPU配置。',
                        'description' => '函数GPU配置。',
                        'required' => false,
                        '$ref' => '#/components/schemas/GPUConfig',
                    ],
                    'handler' => [
                        'title' => '函数执行的入口，具体格式和运行时相关。',
                        'description' => '函数执行的入口，具体格式和运行时相关。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'index.handler',
                        'maxLength' => 128,
                        'minLength' => 1,
                    ],
                    'instanceConcurrency' => [
                        'title' => '实例最大并发度。',
                        'description' => '实例最大并发度。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                    'instanceLifecycleConfig' => [
                        'title' => '实例生命周期回调方法配置。',
                        'description' => '实例生命周期回调方法配置。',
                        'required' => false,
                        '$ref' => '#/components/schemas/InstanceLifecycleConfig',
                    ],
                    'internetAccess' => [
                        'title' => 'service config',
                        'description' => '是否允许函数访问公网。默认值为true。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                    'layers' => [
                        'title' => '层的列表。多个层会按照数组下标从大到小的顺序进行合并，下标小的层的内容会覆盖下标大的层的同名文件。',
                        'description' => '层的列表。多个层会按照数组下标从大到小的顺序进行合并，下标小的层的内容会覆盖下标大的层的同名文件。',
                        'type' => 'array',
                        'items' => [
                            'description' => '层ARN。',
                            'type' => 'string',
                            'example' => 'acs:fc:cn-beijing:186824xxxxxx:layers/fc_layer/versions/1',
                        ],
                        'required' => false,
                    ],
                    'logConfig' => [
                        'title' => '日志配置。函数产生的日志会被写入到配置的日志库中。',
                        'description' => '日志配置。函数产生的日志会被写入到配置的日志库中。',
                        'required' => false,
                        '$ref' => '#/components/schemas/LogConfig',
                    ],
                    'memorySize' => [
                        'title' => '函数的内存规格，单位为MB，内存大小为64 MB的倍数。不同的函数实例类型，内存规格存在差异。',
                        'description' => '函数的内存规格，单位为MB，内存大小为64 MB的倍数。最小值为128MB，最大值为32GB。同时cpu和memorySize（按GB算）比例要在1:1和1:4之间。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '512',
                    ],
                    'nasConfig' => [
                        'title' => 'NAS配置。配置此参数后，函数可以访问指定的NAS资源。',
                        'description' => 'NAS配置。配置此参数后，函数可以访问指定的NAS资源。',
                        'required' => false,
                        '$ref' => '#/components/schemas/NASConfig',
                    ],
                    'ossMountConfig' => [
                        'title' => 'OSS挂载配置。',
                        'description' => 'OSS挂载配置。',
                        'required' => false,
                        '$ref' => '#/components/schemas/OSSMountConfig',
                    ],
                    'role' => [
                        'title' => '授予函数计算所需权限的RAM角色，使用场景包含：1. 把函数产生的日志发送到您的日志库中。2. 为函数在执行过程中访问其他云资源生成的临时访问令牌。',
                        'description' => '用户授权给函数计算的RAM角色，设置后函数计算将扮演该角色生成临时访问凭证。在函数中可以使用该角色的临时访问凭证来访问指定的阿里云服务，例如OSS和OTS。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'acs:ram::188077086902****:role/fc-test',
                        'maxLength' => 300,
                    ],
                    'runtime' => [
                        'title' => '函数的运行时环境。',
                        'description' => '函数的运行时环境。目前支持的运行环境有：nodejs8, nodejs10, nodejs12, nodejs14, nodejs16, nodejs18, nodejs20, go1, python3, python3.9, python3.10, java8, java11, php7.2, dotnetcore3.1, custom, custom.debian10, custom-container。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'python3.10',
                    ],
                    'timeout' => [
                        'title' => '函数运行的超时时间，单位为秒，最小1秒，默认3秒。函数超过这个时间后会被终止执行。',
                        'description' => '函数运行的超时时间，单位为秒，最小1秒，最大值为86400秒，默认值是3秒。函数超过这个时间后会被终止执行。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '60',
                    ],
                    'tracingConfig' => [
                        'title' => '链路追踪配置。当函数计算与链路追踪集成后，您可以记录请求在函数计算的耗时时间、查看函数的冷启动时间、记录函数内部时间的消耗等。',
                        'description' => '链路追踪配置。当函数计算与链路追踪集成后，您可以记录请求在函数计算的耗时时间、查看函数的冷启动时间、记录函数内部时间的消耗等。',
                        'required' => false,
                        '$ref' => '#/components/schemas/TracingConfig',
                    ],
                    'vpcConfig' => [
                        'title' => 'VPC配置。配置此参数后，函数可以访问指定的VPC资源。',
                        'description' => 'VPC配置。配置此参数后，函数可以访问指定的VPC资源。',
                        'required' => false,
                        '$ref' => '#/components/schemas/VPCConfig',
                    ],
                ],
            ],
            'CreateLayerVersionInput' => [
                'title' => '创建层版本的请求参数',
                'description' => '创建层版本的请求参数。',
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'title' => '层的代码信息。',
                        'description' => '层的代码信息。',
                        'required' => false,
                        '$ref' => '#/components/schemas/InputCodeLocation',
                    ],
                    'compatibleRuntime' => [
                        'title' => '层支持的运行时环境列表。',
                        'description' => '层支持的运行时环境列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '运行时。',
                            'type' => 'string',
                            'example' => 'python3.10',
                        ],
                        'required' => false,
                    ],
                    'description' => [
                        'title' => '层版本的描述信息。',
                        'description' => '层版本的描述信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my first layer',
                        'maxLength' => 256,
                    ],
                    'license' => [
                        'title' => '层的许可协议。',
                        'description' => '层的许可协议。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Apache',
                    ],
                ],
            ],
            'CreateTriggerInput' => [
                'title' => '创建触发器的请求参数',
                'description' => '创建触发器的请求参数',
                'type' => 'object',
                'properties' => [
                    'description' => [
                        'title' => '触发器的描述。',
                        'description' => '触发器的描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'trigger for test',
                        'maxLength' => 256,
                    ],
                    'invocationRole' => [
                        'title' => '事件源（如OSS）调用函数所需的角色。',
                        'description' => '事件源（如OSS）调用函数所需的角色。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'acs:ram::1234567890:role/fc-test',
                        'maxLength' => 300,
                    ],
                    'qualifier' => [
                        'title' => '函数的版本或别名。',
                        'description' => '函数的版本或别名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LATEST',
                    ],
                    'sourceArn' => [
                        'title' => '触发器事件源的Aliyun Resource Name。',
                        'description' => '触发器事件源的Aliyun Resource Name。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'acs:oss:cn-shanghai:12345:mybucket',
                        'maxLength' => 300,
                        'minLength' => 1,
                    ],
                    'triggerConfig' => [
                        'title' => '触发器配置，针对不同类型的触发器，配置有所不同。',
                        'description' => '触发器配置，针对不同类型的触发器，配置有所不同。具体格式请参见如下对应的数据结构：'."\n"
                            .'  - OSS触发器：请参见[OSSTriggerConfig](~~2766465~~)。'."\n"
                            .'  - 日志服务触发器：请参见[SLSTriggerConfig](~~2766469~~)。'."\n"
                            .'  - 定时触发器：请参见[TimerTriggerConfig](~~2754638~~)。'."\n"
                            .'  - HTTP触发器：请参见[HTTPTriggerConfig](~~2766461~~)。'."\n"
                            .'  - Tablestore触发器：只需要填写完整的**SourceArn**参数便可, 这里无需额外配置，取值为空{}。'."\n"
                            .'  - CDN事件触发器：请参见[CDNTriggerConfig](~~2766462~~)。'."\n"
                            .'  - MNS主题触发器：请参见[MNSTopicTriggerConfig](~~2766464~~)。'."\n"
                            .'  - EventBridge触发器：请参见[EventBridgeTriggerConfig](~~2766447~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '{"events":["oss:ObjectCreated:*"],"filter":{"key":{"prefix":"/prefix","suffix":".zip"}}}',
                    ],
                    'triggerName' => [
                        'title' => '触发器的名称。要求只能包含字母、数字、下划线(_)和短划线(-)。不能以数字、短划线(-)开头，长度限制为1~128个字符。',
                        'description' => '触发器的名称。要求只能包含字母、数字、下划线(_)和短划线(-)。不能以数字、短划线(-)开头，长度限制为1~128个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'oss_create_object_demo',
                        'maxLength' => 128,
                        'minLength' => 1,
                    ],
                    'triggerType' => [
                        'title' => '触发器的类型。',
                        'description' => '触发器的类型。'."\n"
                            .'具体取值和触发器类型对应关系如下所示：'."\n"
                            .'  - **oss**：OSS触发器。更多信息，请参见[OSS触发器概述](~~2513613~~)。'."\n"
                            .'  - **log**：日志服务触发器。更多信息，请参见[日志服务触发器概述](~~2513638~~)。'."\n"
                            .'  - **timer**：定时触发器。更多信息，请参见[定时触发器概述](~~2513611~~)。'."\n"
                            .'  - **http**：HTTP触发器。更多信息，请参见[HTTP触发器概述](~~2513634~~)。'."\n"
                            .'  - **tablestore**：Tablestore触发器。更多信息，请参见[Tablestore触发器概述](~~2513640~~)。'."\n"
                            .'  - **cdn_events**：CDN事件触发器。更多信息，请参见[CDN事件触发器概述](~~2513636~~)。'."\n"
                            .'  - **mns_topic**：MNS主题触发器。更多信息，请参见[MNS主题触发器概述](~~2513641~~)。'."\n"
                            .'  - **eventbridge**：EventBridge触发器。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'oss',
                    ],
                ],
            ],
            'CreateVpcBindingInput' => [
                'title' => '创建 vpc binding 请求参数',
                'description' => '创建VPC绑定请求参数',
                'type' => 'object',
                'properties' => [
                    'vpcId' => [
                        'title' => 'VPC实例ID',
                        'description' => 'VPC实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vpc-8vb8x8dggvr0a****',
                        'minLength' => 1,
                    ],
                ],
            ],
            'CustomContainerConfig' => [
                'title' => '自定义容器运行时的配置信息',
                'description' => '自定义容器运行时的配置信息。',
                'type' => 'object',
                'properties' => [
                    'accelerationInfo' => [
                        'title' => '镜像加速信息（已废弃）',
                        'description' => '镜像加速信息。',
                        'required' => false,
                        '$ref' => '#/components/schemas/AccelerationInfo',
                    ],
                    'accelerationType' => [
                        'title' => '是否开启镜像加速。Default: 默认值，表示开启镜像加速。None: 表示关闭镜像加速。（已废弃）',
                        'description' => '是否开启镜像加速。Default表示开启镜像加速，None表示关闭镜像加速。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Default',
                    ],
                    'acrInstanceId' => [
                        'title' => 'ACR企业版镜像仓库ID，使用ACR企业版镜像时须传入。（已废弃）',
                        'description' => 'ACR企业版镜像仓库ID，使用ACR企业版镜像时须传入。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cri-xxxxxxxxxx',
                    ],
                    'command' => [
                        'title' => '容器启动参数。',
                        'description' => '容器启动参数。',
                        'type' => 'array',
                        'items' => [
                            'description' => '启动参数。',
                            'type' => 'string',
                            'example' => 'arg1',
                        ],
                        'required' => false,
                    ],
                    'entrypoint' => [
                        'title' => '容器启动命令。',
                        'description' => '容器启动命令。',
                        'type' => 'array',
                        'items' => [
                            'description' => '启动命令。',
                            'type' => 'string',
                            'example' => '/code/bootstrap',
                        ],
                        'required' => false,
                    ],
                    'healthCheckConfig' => [
                        'title' => '函数自定义健康检查配置',
                        'description' => '函数自定义健康检查配置。',
                        'required' => false,
                        '$ref' => '#/components/schemas/CustomHealthCheckConfig',
                    ],
                    'image' => [
                        'title' => '容器镜像地址。',
                        'description' => '容器镜像地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'registry-vpc.cn-hangzhou.aliyuncs.com/fc-demo/helloworld:v1beta1',
                    ],
                    'port' => [
                        'title' => '自定义容器运行时HTTP Server的监听端口。',
                        'description' => '自定义容器运行时HTTP Server的监听端口。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '9000',
                    ],
                    'resolvedImageUri' => [
                        'title' => '所部署的镜像的实际digest版本, 函数启动时实际使用此digest指定的代码版本',
                        'description' => '所部署的镜像的实际digest版本，函数启动时实际使用此digest指定的代码版本。由GetFunction时返回，作为参数时无需提供。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'stand-sh-registry-vpc.cn-shanghai.cr.aliyuncs.com/fc-demo2/springboot-helloworld@sha256:68d1****0d64d6',
                    ],
                ],
            ],
            'CustomDNS' => [
                'title' => '函数自定义DNS配置',
                'description' => '函数自定义DNS配置。',
                'type' => 'object',
                'properties' => [
                    'dnsOptions' => [
                        'title' => 'resolv.conf文件中的DNS解析配置列表。每一项对应一个键值对，格式为key:value，其中键为必填',
                        'description' => 'resolv.conf文件中的DNS解析配置列表。每一项对应一个键值对，格式为key:value，其中键为必填。',
                        'type' => 'array',
                        'items' => [
                            'description' => 'DNS选项。',
                            '$ref' => '#/components/schemas/DNSOption',
                        ],
                        'required' => false,
                    ],
                    'nameServers' => [
                        'title' => 'DNS服务器的IP地址列表',
                        'description' => 'DNS服务器的IP地址列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => 'DNS服务器。',
                            'type' => 'string',
                            'example' => '8.8.x.x',
                        ],
                        'required' => false,
                    ],
                    'searches' => [
                        'title' => 'DNS搜索域列表',
                        'description' => 'DNS搜索域列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => 'DNS搜索域。',
                            'type' => 'string',
                            'example' => 'ns1.svc.cluster-domain.example',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'CustomDomain' => [
                'title' => '自定义域名信息',
                'description' => '自定义域名信息',
                'type' => 'object',
                'properties' => [
                    'accountId' => [
                        'title' => '您的阿里云账号（主账号）ID。',
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '186851234023****',
                    ],
                    'apiVersion' => [
                        'title' => '函数计算的API版本。',
                        'description' => '函数计算的API版本。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2023-03-30',
                    ],
                    'authConfig' => [
                        'title' => '权限认证配置',
                        'description' => '权限认证配置',
                        'required' => false,
                        '$ref' => '#/components/schemas/AuthConfig',
                    ],
                    'certConfig' => [
                        'title' => 'HTTPS证书的信息。',
                        'description' => 'HTTPS证书的信息。',
                        'required' => false,
                        '$ref' => '#/components/schemas/CertConfig',
                    ],
                    'createdTime' => [
                        'title' => '自定义域名的创建时间。',
                        'description' => '自定义域名的创建时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2023-03-30T08:02:19Z',
                    ],
                    'domainName' => [
                        'title' => '域名。',
                        'description' => '域名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'example.com',
                    ],
                    'lastModifiedTime' => [
                        'title' => '自定义域名上一次被更新的时间。',
                        'description' => '自定义域名上一次被更新的时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2023-03-30T08:02:19Z',
                    ],
                    'protocol' => [
                        'title' => '域名支持的协议类型。HTTP：仅支持HTTP协议。HTTPS：仅支持HTTPS协议。HTTP,HTTPS：支持HTTP及HTTPS协议。',
                        'description' => '域名支持的协议类型。HTTP：仅支持HTTP协议。HTTPS：仅支持HTTPS协议。HTTP,HTTPS：支持HTTP及HTTPS协议。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'HTTP',
                    ],
                    'routeConfig' => [
                        'title' => '路由表：自定义域名访问时的PATH到Function的映射。',
                        'description' => '路由表：自定义域名访问时的PATH到Function的映射。',
                        'required' => false,
                        '$ref' => '#/components/schemas/RouteConfig',
                    ],
                    'subdomainCount' => [
                        'title' => '子域名的数量。',
                        'description' => '子域名的数量。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                    'tlsConfig' => [
                        'title' => 'TLS配置信息。',
                        'description' => 'TLS配置信息。',
                        'required' => false,
                        '$ref' => '#/components/schemas/TLSConfig',
                    ],
                    'wafConfig' => [
                        'title' => 'Web应用防火墙配置信息。',
                        'description' => 'Web应用防火墙配置信息。',
                        'required' => false,
                        '$ref' => '#/components/schemas/WAFConfig',
                    ],
                ],
            ],
            'CustomHealthCheckConfig' => [
                'title' => '函数自定义健康检查配置，仅适用于Custom Runtime和Custom Container',
                'description' => '函数自定义健康检查配置，仅适用于Custom Runtime和Custom Container。',
                'type' => 'object',
                'properties' => [
                    'failureThreshold' => [
                        'title' => '健康检查失败次数阈值，达到该值后系统认为检查失败。取值范围1~120。默认值为3。',
                        'description' => '健康检查失败次数阈值，达到该值后系统认为检查失败。取值范围1~120。默认值为3。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                    'httpGetUrl' => [
                        'title' => '容器自定义健康检查URL地址。长度不超过2048个字符。',
                        'description' => '容器自定义健康检查URL地址。长度不超过2048个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/ready',
                    ],
                    'initialDelaySeconds' => [
                        'title' => '容器启动到发起健康检查的延迟。取值范围0~120。默认值为0。',
                        'description' => '容器启动到发起健康检查的延迟。取值范围0~120。默认值为0。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                    'periodSeconds' => [
                        'title' => '健康检查周期。取值范围1~120。默认值为3。',
                        'description' => '健康检查周期。取值范围1~120。默认值为3。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                    'successThreshold' => [
                        'title' => '健康检查成功次数阈值，达到该值后系统认为检查成功。取值范围1~120。默认值为1。',
                        'description' => '健康检查成功次数阈值，达到该值后系统认为检查成功。取值范围1~120。默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                    'timeoutSeconds' => [
                        'title' => '健康检查超时时间。取值范围1~3。默认值为1。',
                        'description' => '健康检查超时时间。取值范围1~3。默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
            ],
            'CustomRuntimeConfig' => [
                'title' => '自定义运行时的配置信息',
                'description' => '自定义运行时的配置信息。',
                'type' => 'object',
                'properties' => [
                    'args' => [
                        'title' => '实例启动参数。',
                        'description' => '实例启动参数。',
                        'type' => 'array',
                        'items' => [
                            'description' => '启动参数。',
                            'type' => 'string',
                            'example' => 'arg1',
                        ],
                        'required' => false,
                    ],
                    'command' => [
                        'title' => '实例启动命令。',
                        'description' => '实例启动命令。',
                        'type' => 'array',
                        'items' => [
                            'description' => '启动命令。',
                            'type' => 'string',
                            'example' => '/code/bootstrap',
                        ],
                        'required' => false,
                    ],
                    'healthCheckConfig' => [
                        'title' => '函数自定义健康检查配置。',
                        'description' => '函数自定义健康检查配置。',
                        'required' => false,
                        '$ref' => '#/components/schemas/CustomHealthCheckConfig',
                    ],
                    'port' => [
                        'title' => 'HTTP Server的监听端口。',
                        'description' => 'HTTP Server的监听端口。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '9000',
                    ],
                ],
            ],
            'DNSOption' => [
                'title' => 'DNS解析配置',
                'description' => 'DNS解析配置',
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'title' => '配置项名称',
                        'description' => '配置项名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ndots',
                        'maxLength' => 256,
                    ],
                    'value' => [
                        'title' => '配置项值',
                        'description' => '配置项值',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2',
                        'maxLength' => 256,
                    ],
                ],
            ],
            'DeadLetterQueue' => [
                'title' => 'EventBridge 触发器的死信队列配置',
                'description' => 'EventBridge 触发器的死信队列配置',
                'type' => 'object',
                'properties' => [
                    'Arn' => [
                        'title' => '死信队列的 ARN',
                        'description' => '死信队列的 ARN',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'acs:mq:cn-shanghai:14319991365*****:/instances/MQ_INST_14319991365*****_BYWs****/topic/testTopic',
                    ],
                ],
            ],
            'DeliveryOption' => [
                'title' => 'EventBridge 触发器的事件推送配置',
                'description' => 'EventBridge 触发器的事件推送配置',
                'type' => 'object',
                'properties' => [
                    'concurrency' => [
                        'title' => '上游事件源投递事件到函数计算的并发最大值，目前仅针对在 Kafka 作为事件源时有效。',
                        'description' => '上游事件源投递事件到函数计算的并发最大值，目前仅针对在 Kafka 作为事件源时有效。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '2',
                    ],
                    'eventSchema' => [
                        'title' => '函数入口参数 event 中每个数据元素的格式。CloudEvents：以通用格式描述事件数据的规范，包含事件描述以及事件负载数据，旨在简化不同服务、平台间的事件声明和传输，默认值。RawData：只投递事件负载数据，不包含CloudEvents格式中的其它元数据信息。',
                        'description' => '函数入口参数 event 中每个数据元素的格式。CloudEvents：以通用格式描述事件数据的规范，包含事件描述以及事件负载数据，旨在简化不同服务、平台间的事件声明和传输，默认值。RawData：只投递事件负载数据，不包含CloudEvents格式中的其它元数据信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'RawData',
                    ],
                ],
            ],
            'Destination' => [
                'title' => '异步调用目标结构体',
                'description' => '异步调用目标结构体',
                'type' => 'object',
                'properties' => [
                    'destination' => [
                        'title' => '异步调用目标资源描述符',
                        'description' => '异步调用目标资源描述符',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'acs:fc:cn-shanghai:xxx:functions/f1',
                        'maxLength' => 512,
                    ],
                ],
            ],
            'DestinationConfig' => [
                'title' => '异步调用目标的配置信息',
                'description' => '异步调用目标的配置信息',
                'type' => 'object',
                'properties' => [
                    'onFailure' => [
                        'title' => '失败的回调目标结构体。',
                        'description' => '失败的回调目标结构体。',
                        'required' => false,
                        '$ref' => '#/components/schemas/Destination',
                    ],
                    'onSuccess' => [
                        'title' => '成功的回调目标结构体。',
                        'description' => '成功的回调目标结构体。',
                        'required' => false,
                        '$ref' => '#/components/schemas/Destination',
                    ],
                ],
            ],
            'EqualRule' => [
                'title' => '自定义域名完全匹配重写规则配置',
                'description' => '自定义域名完全匹配重写规则配置',
                'type' => 'object',
                'properties' => [
                    'match' => [
                        'title' => '匹配规则',
                        'description' => '匹配规则',
                        'type' => 'string',
                        'required' => true,
                        'example' => '/old',
                        'maxLength' => 256,
                    ],
                    'replacement' => [
                        'title' => '替换规则',
                        'description' => '替换规则',
                        'type' => 'string',
                        'required' => true,
                        'example' => '/new',
                        'maxLength' => 256,
                    ],
                ],
            ],
            'Error' => [
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'object',
                'properties' => [
                    'Code' => [
                        'title' => '错误码',
                        'description' => '错误码',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FunctionNotFound',
                    ],
                    'Message' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'function not found',
                    ],
                    'RequestId' => [
                        'title' => '请求ID',
                        'description' => '请求ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1-64e70cf1-5cbef92ea8fc8c42899cf5d1',
                    ],
                ],
            ],
            'EventBridgeTriggerConfig' => [
                'title' => 'EventBridge 触发器配置',
                'description' => 'EventBridge 触发器配置',
                'type' => 'object',
                'properties' => [
                    'asyncInvocationType' => [
                        'title' => '触发器调用函数的方式。true：同步调用。false：异步调用，默认值。',
                        'description' => '触发器调用函数的方式，取值如下：'."\n"
                            ."\n"
                            .'- **true**：同步调用。'."\n"
                            ."\n"
                            .'- **false**：异步调用。'."\n"
                            ."\n"
                            .'> 默认取值为**false**',
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'eventRuleFilterPattern' => [
                        'title' => '事件模式。JSON格式，详细规则，请参见：https://help.aliyun.com/zh/eventbridge/user-guide/event-patterns?spm=a2c4g.11186623.0.i21',
                        'description' => '事件模式。JSON格式，详细规则请参考[事件模式](https://help.aliyun.com/zh/eventbridge/user-guide/event-patterns?spm=a2c4g.11186623.0.i21)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{}',
                    ],
                    'eventSinkConfig' => [
                        'title' => '事件目标配置',
                        'description' => '事件目标配置',
                        'required' => false,
                        '$ref' => '#/components/schemas/EventSinkConfig',
                    ],
                    'eventSourceConfig' => [
                        'title' => '事件源配置。',
                        'description' => '事件源配置。',
                        'required' => false,
                        '$ref' => '#/components/schemas/EventSourceConfig',
                    ],
                    'runOptions' => [
                        'title' => '运行环境参数配置',
                        'description' => '运行环境参数配置',
                        'required' => false,
                        '$ref' => '#/components/schemas/RunOptions',
                    ],
                    'triggerEnable' => [
                        'title' => '是否启用触发器。true: 启用触发器，默认值。false: 禁用触发器。',
                        'description' => '是否启用触发器，取值如下：'."\n"
                            ."\n"
                            .'- **true**：启用触发器。'."\n"
                            ."\n"
                            .'- **false**：禁用触发器。'."\n"
                            ."\n"
                            .'> 默认取值为**true**',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'EventSinkConfig' => [
                'title' => 'EventBridge 触发器的 sink 端配置',
                'description' => 'EventBridge 触发器的 sink 端配置',
                'type' => 'object',
                'properties' => [
                    'deliveryOption' => [
                        'title' => '事件推送配置',
                        'description' => '事件推送配置',
                        'required' => false,
                        '$ref' => '#/components/schemas/DeliveryOption',
                    ],
                ],
            ],
            'EventSourceConfig' => [
                'title' => 'EventBridge 触发器的事件源配置',
                'description' => 'EventBridge 触发器的事件源配置',
                'type' => 'object',
                'properties' => [
                    'eventSourceParameters' => [
                        'title' => '自定义事件源参数',
                        'description' => '自定义事件源参数，自定义事件源包括：MNS、RocketMQ、RabbitMQ、Kafka、MQTT、DTS。',
                        'required' => false,
                        '$ref' => '#/components/schemas/EventSourceParameters',
                    ],
                    'eventSourceType' => [
                        'title' => '触发器事件源类型。Default：表示 EventBridge 官方触发源，默认值。MNS：消息队列 MNS 队列作为触发源。RocketMQ：消息队列 RocketMQ 版作为触发源。RabbitMQ：消息队列 RabbitMQ 版作为触发源。Kafka：云消息队列 Kafka 版作为触发源。MQTT：云消息队列 MQTT 版作为触发源。DTS：数据传输服务 DTS 作为触发源。注意，该字段不可更新，更新时传入该字段将被忽略。',
                        'description' => '触发器事件源类型，包含如下几种类型：'."\n"
                            ."\n"
                            .'- **Default**：表示EventBridge 官方触发源。'."\n"
                            ."\n"
                            .'- **MNS**：消息队列 MNS 队列作为触发源。'."\n"
                            ."\n"
                            .'- **RocketMQ**：消息队列 RocketMQ 版作为触发源。'."\n"
                            ."\n"
                            .'- **RabbitMQ**：消息队列 RabbitMQ 版作为触发源。'."\n"
                            ."\n"
                            .'- **Kafka**：云消息队列 Kafka 版作为触发源。'."\n"
                            ."\n"
                            .'- **MQTT**：云消息队列 MQTT 版作为触发源。'."\n"
                            ."\n"
                            .'- **DTS**：数据传输服务 DTS 作为触发源。'."\n"
                            ."\n"
                            .'> 注意，该字段不可更新，更新时传入该字段将被忽略。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MNS',
                    ],
                ],
            ],
            'EventSourceParameters' => [
                'title' => 'EventBridge 触发器的自定义事件源参数',
                'description' => 'EventBridge 触发器的自定义事件源参数',
                'type' => 'object',
                'properties' => [
                    'sourceDTSParameters' => [
                        'title' => '事件源为数据传输服务DTS时的自定义参数配置',
                        'description' => '事件源为数据传输服务DTS时的自定义参数配置',
                        'required' => false,
                        '$ref' => '#/components/schemas/SourceDTSParameters',
                    ],
                    'sourceKafkaParameters' => [
                        'title' => '事件源为消息队列Kafka版时的自定义参数配置',
                        'description' => '事件源为消息队列Kafka版时的自定义参数配置',
                        'required' => false,
                        '$ref' => '#/components/schemas/SourceKafkaParameters',
                    ],
                    'sourceMNSParameters' => [
                        'title' => '事件源为消息服务MNS时的自定义参数配置',
                        'description' => '事件源为消息服务MNS时的自定义参数配置',
                        'required' => false,
                        '$ref' => '#/components/schemas/SourceMNSParameters',
                    ],
                    'sourceMQTTParameters' => [
                        'title' => '事件源为云消息队列MQTT版时的自定义参数配置',
                        'description' => '事件源为云消息队列MQTT版时的自定义参数配置',
                        'required' => false,
                        '$ref' => '#/components/schemas/SourceMQTTParameters',
                    ],
                    'sourceRabbitMQParameters' => [
                        'title' => '事件源为消息队列RabbitMQ版时的自定义参数配置',
                        'description' => '事件源为消息队列RabbitMQ版时的自定义参数配置',
                        'required' => false,
                        '$ref' => '#/components/schemas/SourceRabbitMQParameters',
                    ],
                    'sourceRocketMQParameters' => [
                        'title' => '事件源为消息队列RockerMQ版时的自定义参数配置',
                        'description' => '事件源为消息队列RockerMQ版时的自定义参数配置',
                        'required' => false,
                        '$ref' => '#/components/schemas/SourceRocketMQParameters',
                    ],
                ],
            ],
            'Filter' => [
                'title' => 'OSS 触发器配置过滤器配置',
                'description' => 'OSS 触发器配置过滤器配置',
                'type' => 'object',
                'properties' => [
                    'key' => [
                        'title' => '事件过滤规则描述。',
                        'description' => '事件过滤规则描述。',
                        'required' => false,
                        '$ref' => '#/components/schemas/Key',
                    ],
                ],
            ],
            'Function' => [
                'title' => '函数配置信息',
                'description' => '函数配置信息。',
                'type' => 'object',
                'properties' => [
                    'codeChecksum' => [
                        'title' => '函数代码包的CRC-64值。',
                        'description' => '函数代码包的CRC-64值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2825179536350****',
                    ],
                    'codeSize' => [
                        'title' => '系统返回的函数代码包的大小，单位Byte。',
                        'description' => '系统返回的函数代码包的大小，单位Byte。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '412',
                    ],
                    'cpu' => [
                        'title' => '函数的CPU规格，单位为vCPU，为0.05 vCPU的倍数。',
                        'description' => '函数的CPU规格，单位为vCPU，为0.05 vCPU的倍数。最小值为0.05，最大值为16。同时cpu和memorySize（按GB算）比例要在1:1和1:4之间。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '1',
                    ],
                    'createdTime' => [
                        'title' => '函数的创建时间。',
                        'description' => '函数的创建时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2023-04-01T08:15:27Z',
                    ],
                    'customContainerConfig' => [
                        'title' => '自定义容器运行时的相关配置，成功配置后函数可以使用自定义容器镜像执行函数。code和customContainerConfig二选一。',
                        'description' => '自定义容器运行时的相关配置，成功配置后函数可以使用自定义容器镜像执行函数。code和customContainerConfig二选一。',
                        'required' => false,
                        '$ref' => '#/components/schemas/CustomContainerConfig',
                    ],
                    'customDNS' => [
                        'title' => '自定义DNS配置。',
                        'description' => '自定义DNS配置。',
                        'required' => false,
                        '$ref' => '#/components/schemas/CustomDNS',
                    ],
                    'customRuntimeConfig' => [
                        'title' => '自定义运行时配置。',
                        'description' => '自定义运行时配置。',
                        'required' => false,
                        '$ref' => '#/components/schemas/CustomRuntimeConfig',
                    ],
                    'description' => [
                        'title' => '函数的描述。',
                        'description' => '函数的描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my function',
                    ],
                    'diskSize' => [
                        'title' => '函数的磁盘规格，单位为MB，可选值为512 MB或10240 MB。',
                        'description' => '函数的磁盘规格，单位为MB，可选值为512 MB或10240 MB。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '512',
                    ],
                    'environmentVariables' => [
                        'title' => '函数的环境变量，可以在运行环境中访问设置的环境变量。',
                        'description' => '函数的环境变量，可以在运行环境中访问设置的环境变量。',
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'description' => '环境变量的值。',
                            'type' => 'string',
                            'example' => 'value1',
                        ],
                    ],
                    'functionArn' => [
                        'title' => '函数资源标识。',
                        'description' => '函数资源标识。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'acs:fc:cn-shanghai:123:functions/functionName',
                    ],
                    'functionId' => [
                        'title' => '系统为每个函数生成的ID，全局唯一。',
                        'description' => '系统为每个函数生成的ID，全局唯一。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'aa715851-1c20-4b89-a8fb-***',
                    ],
                    'functionName' => [
                        'title' => '函数的名称。',
                        'description' => '函数的名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my-function-1',
                    ],
                    'gpuConfig' => [
                        'title' => '函数GPU配置。',
                        'description' => '函数GPU配置。',
                        'required' => false,
                        '$ref' => '#/components/schemas/GPUConfig',
                    ],
                    'handler' => [
                        'title' => '函数执行的入口，具体格式和运行时相关。',
                        'description' => '函数执行的入口，具体格式和运行时相关。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'index.handler',
                    ],
                    'instanceConcurrency' => [
                        'title' => '实例最大并发度',
                        'description' => '实例最大并发度',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                    'instanceLifecycleConfig' => [
                        'title' => '实例生命周期回调方法配置。',
                        'description' => '实例生命周期回调方法配置。',
                        'required' => false,
                        '$ref' => '#/components/schemas/InstanceLifecycleConfig',
                    ],
                    'internetAccess' => [
                        'title' => 'service config',
                        'description' => '是否允许函数访问公网。默认值为true。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                    'lastModifiedTime' => [
                        'title' => '函数上一次被更新的时间。',
                        'description' => '函数上一次被更新的时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2023-05-01T08:15:27Z',
                    ],
                    'lastUpdateStatus' => [
                        'title' => '最近一次函数更新操作的状态，当函数新建成功时，此值为Successful，可选值：Successful、 Failed、 InProgress。',
                        'description' => '最近一次函数更新操作的状态，当函数新建成功时，此值为Successful，可选值：Successful、 Failed、 InProgress。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'InProgress',
                    ],
                    'lastUpdateStatusReason' => [
                        'title' => '导致最近一次函数更新操作状态为当前值的原因。',
                        'description' => '导致最近一次函数更新操作状态为当前值的原因。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'The system is currently processing the acceleration optimization for the image.',
                    ],
                    'lastUpdateStatusReasonCode' => [
                        'title' => '导致最近一次函数更新操作状态为当前值的原因的状态码。',
                        'description' => '导致最近一次函数更新操作状态为当前值的原因的状态码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ImageOptimizing',
                    ],
                    'layers' => [
                        'title' => '层的列表。',
                        'description' => '层的列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '层信息。',
                            '$ref' => '#/components/schemas/FunctionLayer',
                        ],
                        'required' => false,
                    ],
                    'logConfig' => [
                        'title' => '日志配置。函数产生的日志会被写入到配置的日志库中。',
                        'description' => '日志配置。函数产生的日志会被写入到配置的日志库中。',
                        'required' => false,
                        '$ref' => '#/components/schemas/LogConfig',
                    ],
                    'memorySize' => [
                        'title' => '函数的内存规格，单位为MB，内存大小为64 MB的倍数。',
                        'description' => '函数的内存规格，单位为MB，内存大小为64 MB的倍数。最小值为128MB，最大值为32GB。同时cpu和memorySize（按GB算）比例要在1:1和1:4之间。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '512',
                    ],
                    'nasConfig' => [
                        'title' => 'NAS配置。配置此参数后，函数可以访问指定的NAS资源。',
                        'description' => 'NAS配置。配置此参数后，函数可以访问指定的NAS资源。',
                        'required' => false,
                        '$ref' => '#/components/schemas/NASConfig',
                    ],
                    'ossMountConfig' => [
                        'title' => 'OSS挂载配置。',
                        'description' => 'OSS挂载配置。',
                        'required' => false,
                        '$ref' => '#/components/schemas/OSSMountConfig',
                    ],
                    'role' => [
                        'title' => '授予函数计算所需权限的RAM角色。',
                        'description' => '用户授权给函数计算的RAM角色，设置后函数计算将扮演该角色生成临时访问凭证。在函数中可以使用该角色的临时访问凭证来访问指定的阿里云服务，例如OSS和OTS。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'acs:ram::188077086902****:role/fc-test',
                    ],
                    'runtime' => [
                        'title' => '函数的运行时环境。',
                        'description' => '函数的运行时环境。目前支持的运行环境有：nodejs8, nodejs10, nodejs12, nodejs14, nodejs16, nodejs18, nodejs20, go1, python3, python3.9, python3.10, java8, java11, php7.2, dotnetcore3.1, custom, custom.debian10, custom-container。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'python3.10',
                    ],
                    'state' => [
                        'title' => 'function state',
                        'description' => 'function state',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Pending',
                    ],
                    'stateReason' => [
                        'title' => '函数处于当前状态的原因。',
                        'description' => '函数处于当前状态的原因。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Function creating',
                    ],
                    'stateReasonCode' => [
                        'title' => '函数处于当前状态的原因的状态码。',
                        'description' => '函数处于当前状态的原因的状态码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Creating',
                    ],
                    'timeout' => [
                        'title' => '函数运行的超时时间。',
                        'description' => '函数运行的超时时间，单位为秒，最小1秒，最大值为86400秒，默认值是3秒。函数超过这个时间后会被终止执行。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '60',
                    ],
                    'tracingConfig' => [
                        'title' => '链路追踪配置。当函数计算与链路追踪集成后，您可以记录请求在函数计算的耗时时间、查看函数的冷启动时间、记录函数内部时间的消耗等。',
                        'description' => '链路追踪配置。当函数计算与链路追踪集成后，您可以记录请求在函数计算的耗时时间、查看函数的冷启动时间、记录函数内部时间的消耗等。',
                        'required' => false,
                        '$ref' => '#/components/schemas/TracingConfig',
                    ],
                    'vpcConfig' => [
                        'title' => 'VPC配置。配置此参数后，函数可以访问指定的VPC资源。',
                        'description' => 'VPC配置。配置此参数后，函数可以访问指定的VPC资源。',
                        'required' => false,
                        '$ref' => '#/components/schemas/VPCConfig',
                    ],
                ],
            ],
            'FunctionLayer' => [
                'title' => '函数配置的层信息',
                'description' => '函数配置的层信息',
                'type' => 'object',
                'properties' => [
                    'arn' => [
                        'title' => '层版本的资源标识。',
                        'description' => '层版本的资源标识。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'acs:fc:cn-beijing:186824xxxxxx:layers/fc_layer/versions/1',
                    ],
                    'size' => [
                        'title' => '层的代码包大小，单位为Byte。',
                        'description' => '层的代码包大小，单位为Byte。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '421',
                    ],
                ],
            ],
            'GPUConfig' => [
                'title' => '函数GPU配置信息',
                'description' => '函数GPU配置信息。',
                'type' => 'object',
                'properties' => [
                    'gpuMemorySize' => [
                        'title' => 'GPU显存规格，单位为MB，为1024MB的倍数',
                        'description' => 'GPU显存规格，单位为MB，为1024MB的倍数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2048',
                    ],
                    'gpuType' => [
                        'title' => 'GPU 卡类型。 fc.gpu.tesla.1：GPU实例Tesla系列T4卡型。fc.gpu.ampere.1：GPU实例Ampere系列A10卡型。',
                        'description' => 'GPU 卡类型。 fc.gpu.tesla.1表示GPU实例Tesla系列T4卡型。fc.gpu.ampere.1表示GPU实例Ampere系列A10卡型。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'fc.gpu.ampere.1',
                        'maxLength' => 128,
                    ],
                ],
            ],
            'GetResourceTagsOutput' => [
                'title' => '查询标签信息',
                'description' => '查询标签信息。',
                'type' => 'object',
                'properties' => [
                    'resouceType' => [
                        'title' => '资源类型名称。函数计算3.0中的函数：ALIYUN::FC::FUNCTION,函数计算旧版本中的服务：ALIYUN::FC::SERVICE。',
                        'description' => '资源类型名称。函数计算3.0中的函数：ALIYUN::FC::FUNCTION,函数计算旧版本中的服务：ALIYUN::FC::SERVICE。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ALIYUN::FC::FUNCTION',
                    ],
                    'resourceArn' => [
                        'title' => '阿里云资源描述符。',
                        'description' => '阿里云资源描述符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'acs:fc:cn-shanghai:****:functions/demo',
                    ],
                    'tags' => [
                        'title' => '标签字典。取值说明如下：key：表示标签键，value：表示标签值。',
                        'description' => '标签字典。',
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'description' => '标签值。',
                            'type' => 'string',
                            'example' => 'value1',
                        ],
                    ],
                ],
            ],
            'HTTPTrigger' => [
                'title' => 'HTTP 触发器配置',
                'description' => 'HTTP 触发器配置',
                'type' => 'object',
                'properties' => [
                    'urlInternet' => [
                        'title' => '公网域名地址。在互联网可以通过HTTP协议或者HTTPS协议访问HTTP Trigger。',
                        'description' => '公网域名地址。在互联网可以通过HTTP协议或者HTTPS协议访问HTTP Trigger。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://svc-func-xxxxxxxx.cn-hangzhou.fcapp.run',
                    ],
                    'urlIntranet' => [
                        'title' => '私网域名地址。在VPC可以通过HTTP协议或者HTTPS协议访问HTTP Trigger。',
                        'description' => '私网域名地址。在VPC可以通过HTTP协议或者HTTPS协议访问HTTP Trigger。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://svc-func-xxxxxxxx.cn-hangzhou-vpc.fcapp.run',
                    ],
                ],
            ],
            'HTTPTriggerConfig' => [
                'title' => 'HTTP 触发器配置',
                'description' => 'HTTP 触发器配置',
                'type' => 'object',
                'properties' => [
                    'authConfig' => [
                        'title' => '鉴权配置',
                        'description' => '鉴权配置',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"JWKS":{"foo":"bar"},"TokenLookup":"header:Authorization:Bearer,cookie:AuthorizationCookie","ClaimPassBy":"query:uid:uid,header:name:name"}',
                    ],
                    'authType' => [
                        'title' => '认证类型。function：表示需要认证，默认值。anonymous：表示不需要认证。',
                        'description' => '认证类型，包含如下两种类型：'."\n"
                            ."\n"
                            .'- **function**：表示需要认证。'."\n"
                            ."\n"
                            .'- **anonymous**：表示不需要认证。'."\n"
                            ."\n"
                            .'> 默认类型为 **function**',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'anonymous',
                    ],
                    'disableURLInternet' => [
                        'title' => '禁用默认公网域名访问的开关。设置为true时，访问函数默认提供的公网URL地址会返回403错误。设置为false时，不会有任何影响。',
                        'description' => '禁用默认公网域名访问的开关。设置为true时，访问函数默认提供的公网URL地址会返回403错误。设置为false时，不会有任何影响。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                    'methods' => [
                        'title' => '请求方法列表。允许同时支持多种方法。',
                        'description' => '请求方法列表。允许同时支持多种方法。',
                        'type' => 'array',
                        'items' => [
                            'description' => '请求方法名，包含如下枚举值：'."\n"
                                ."\n"
                                .'- HEAD'."\n"
                                ."\n"
                                .'- DELETE'."\n"
                                ."\n"
                                .'- POST'."\n"
                                ."\n"
                                .'- GET'."\n"
                                ."\n"
                                .'- OPTIONS'."\n"
                                ."\n"
                                .'- PUT'."\n"
                                ."\n"
                                .'- PATCH',
                            'type' => 'string',
                            'example' => 'GET',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'InputCodeLocation' => [
                'title' => '函数代码配置',
                'description' => '函数代码配置。可以使用两种方式提供代码包：'."\n"
                    .'1. 直接将代码包的内容包含在请求中，此时zipFile必须设置。'."\n"
                    .'2. 将代码包上传到OSS，在请求中包含OSS文件的地址，此时ossBucketName和ossObjectName必须设置。',
                'type' => 'object',
                'properties' => [
                    'checksum' => [
                        'title' => '函数代码包的CRC-64值。',
                        'description' => '函数代码包的CRC-64值。如果提供了checksum，则函数计算会校验代码包的checksum是否和提供的一致。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2825179536350****',
                    ],
                    'ossBucketName' => [
                        'title' => '存放函数代码ZIP包的OSS Bucket名称。',
                        'description' => '用户存放函数代码ZIP包的OSS Bucket名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo-bucket',
                        'maxLength' => 63,
                        'minLength' => 3,
                    ],
                    'ossObjectName' => [
                        'title' => '存放函数代码ZIP包的OSS Object名称。',
                        'description' => '用户存放函数代码ZIP包的OSS Object名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo-object',
                    ],
                    'zipFile' => [
                        'title' => '函数代码ZIP包的Base 64编码。',
                        'description' => '函数代码ZIP包的Base 64编码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'UEsDBAoAAAAAANF',
                    ],
                ],
            ],
            'InstanceInfo' => [
                'title' => '函数实例信息',
                'description' => '函数实例信息。',
                'type' => 'object',
                'properties' => [
                    'instanceId' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1ef6b6ff-7f7b-485e-ab49-501ac681****',
                    ],
                    'versionId' => [
                        'title' => '函数版本。',
                        'description' => '实例所属函数的版本。如果是LATEST别名下的函数实例，则返回版本号为0。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
            ],
            'InstanceLifecycleConfig' => [
                'title' => '实例生命周期回调方法配置',
                'description' => '实例生命周期回调方法配置',
                'type' => 'object',
                'properties' => [
                    'initializer' => [
                        'title' => 'Initializer 回调方法配置',
                        'description' => 'Initializer回调方法配置',
                        'required' => false,
                        '$ref' => '#/components/schemas/LifecycleHook',
                    ],
                    'preStop' => [
                        'title' => 'PreStop 回调方法配置',
                        'description' => 'PreStop回调方法配置',
                        'required' => false,
                        '$ref' => '#/components/schemas/LifecycleHook',
                    ],
                ],
            ],
            'JobConfig' => [
                'title' => 'SLS 触发器任务配置',
                'description' => 'SLS 触发器任务配置',
                'type' => 'object',
                'properties' => [
                    'maxRetryTime' => [
                        'title' => '最大重试次数。取值范围为0～100。日志服务根据触发间隔每次触发函数执行时，如果遇到错误（例如权限不足、网络失败、函数执行异常返回等），该参数定义本次触发所允许的最大重试次数。对于本次触发，如果超过最大重试次数仍无法成功的，需要等到下一次触发间隔到来时，由日志服务再次触发函数执行。',
                        'description' => '最大重试次数。取值范围为0～100。日志服务根据触发间隔每次触发函数执行时，如果遇到错误（例如权限不足、网络失败、函数执行异常返回等），该参数定义本次触发所允许的最大重试次数。对于本次触发，如果超过最大重试次数仍无法成功的，需要等到下一次触发间隔到来时，由日志服务再次触发函数执行。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '3',
                    ],
                    'triggerInterval' => [
                        'title' => '日志服务触发函数运行的间隔。比如每隔120秒将logstore在最近120秒内的数据取出到函数服务，以执行自定义计算。',
                        'description' => '日志服务触发函数运行的间隔。比如每隔120秒将logstore在最近120秒内的数据取出到函数服务，以执行自定义计算。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '60',
                    ],
                ],
            ],
            'Key' => [
                'title' => 'OSS 触发器过滤规则描述',
                'description' => 'OSS 触发器过滤规则描述',
                'type' => 'object',
                'properties' => [
                    'prefix' => [
                        'title' => '限定事件相关的资源名称，只关注以Prefix作为前缀的资源相关的事件，例如Prefix是“serverless_"，则只有以"serverless_"开始的资源相关的事件才能触发当前函数。',
                        'description' => '限定事件相关的资源名称，只关注以Prefix作为前缀的资源相关的事件，例如Prefix是“serverless_"，则只有以"serverless_"开始的资源相关的事件才能触发当前函数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'serverless_',
                    ],
                    'suffix' => [
                        'title' => '限定事件相关的资源名称，只关注以Suffix作为后缀的资源相关的事件，例如Suffix是“.zip"，则只有以".zip"为后缀的资源相关的事件才能触发当前函数。',
                        'description' => '限定事件相关的资源名称，只关注以Suffix作为后缀的资源相关的事件，例如Suffix是“.zip"，则只有以".zip"为后缀的资源相关的事件才能触发当前函数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '.zip',
                    ],
                ],
            ],
            'Layer' => [
                'title' => '层的详细信息',
                'description' => '层的详细信息',
                'type' => 'object',
                'properties' => [
                    'acl' => [
                        'title' => '层的权限。取值0代表私有，取值1代表公有。官方公共层默认为公有，自定义层可以设置为私有或者公有。',
                        'description' => '层的权限。取值0代表私有，取值1代表公有。官方公共层默认为公有，自定义层可以设置为私有或者公有。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0',
                    ],
                    'code' => [
                        'title' => '层的代码包信息',
                        'description' => '层的代码包信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/OutputCodeLocation',
                    ],
                    'codeChecksum' => [
                        'title' => '层代码包的crc64校验码，根据ECMA-182标准计算得出。',
                        'description' => '层代码包的crc64校验码，根据ECMA-182标准计算得出。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2825179536350****',
                    ],
                    'codeSize' => [
                        'title' => '层的代码包大小，单位为Byte。',
                        'description' => '层的代码包大小，单位为Byte。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '421',
                    ],
                    'compatibleRuntime' => [
                        'title' => '层支持的运行时环境列表。',
                        'description' => '层支持的运行时环境列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '运行时。',
                            'type' => 'string',
                            'example' => 'python3.10',
                        ],
                        'required' => false,
                    ],
                    'createTime' => [
                        'title' => '层版本的创建时间。',
                        'description' => '层版本的创建时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2023-03-30T11:08:00Z',
                    ],
                    'description' => [
                        'title' => '版本的描述信息。',
                        'description' => '版本的描述信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'My first layer',
                        'maxLength' => 256,
                    ],
                    'layerName' => [
                        'title' => '层的名称。',
                        'description' => '层的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'MyLayer',
                        'maxLength' => 128,
                        'minLength' => 1,
                    ],
                    'layerVersionArn' => [
                        'title' => '层版本资源的名称，格式为 acs:fc:{region}:{accountID}:layers/{layerName}/versions/{layerVersion}.',
                        'description' => '层版本资源的名称，格式为 acs:fc:{region}:{accountID}:layers/{layerName}/versions/{layerVersion}.',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'acs:fc:cn-beijing:186824xxxxxx:layers/fc_layer/versions/1',
                    ],
                    'license' => [
                        'title' => '许可协议。',
                        'description' => '许可协议。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Apache',
                    ],
                    'version' => [
                        'title' => '层的版本。',
                        'description' => '层的版本。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
            ],
            'LifecycleHook' => [
                'title' => '实例生命周期回调方法配置',
                'description' => '实例生命周期回调方法配置',
                'type' => 'object',
                'properties' => [
                    'handler' => [
                        'title' => '回调方法的执行入口，含义与请求处理程序类似。',
                        'description' => '回调方法的执行入口，含义与请求处理程序类似。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'index.initializer',
                        'maxLength' => 128,
                    ],
                    'timeout' => [
                        'title' => '回调方法的超时时间，单位为秒。',
                        'description' => '回调方法的超时时间，单位为秒。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'ListAliasesOutput' => [
                'title' => '函数别名列表',
                'description' => '函数别名列表',
                'type' => 'object',
                'properties' => [
                    'aliases' => [
                        'title' => '别名列表',
                        'description' => '别名列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '别名信息',
                            '$ref' => '#/components/schemas/Alias',
                        ],
                        'required' => false,
                    ],
                    'nextToken' => [
                        'title' => '下一个版本名',
                        'description' => '下一个版本名',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
            ],
            'ListAsyncInvokeConfigOutput' => [
                'title' => '获取函数异步配置列表的响应信息',
                'description' => '获取函数异步配置列表的响应信息。',
                'type' => 'object',
                'properties' => [
                    'configs' => [
                        'title' => '异步调用配置列表',
                        'description' => '异步调用配置列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '异步调用配置。',
                            '$ref' => '#/components/schemas/AsyncConfig',
                        ],
                        'required' => false,
                    ],
                    'nextToken' => [
                        'title' => '用来返回更多结果。第一次查询不需要提供这个参数，后续查询的Token从返回结果中获取。',
                        'description' => '用来返回更多结果。第一次查询不需要提供这个参数，后续查询的Token从返回结果中获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '8bj81uI8n****',
                    ],
                ],
            ],
            'ListAsyncTaskOutput' => [
                'title' => '列举异步任务信息响应内容',
                'description' => '列举异步任务信息响应内容。',
                'type' => 'object',
                'properties' => [
                    'nextToken' => [
                        'title' => '用来返回更多的查询结果。如果这个值没有返回，则说明没有更多结',
                        'description' => '分页标记，用来返回更多结果。如果这个值没有返回，则说明没有更多结果。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MTIzNCNhYmM='."\n",
                    ],
                    'tasks' => [
                        'title' => '异步任务信息列表',
                        'description' => '异步任务信息列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '异步任务信息。',
                            '$ref' => '#/components/schemas/AsyncTask',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'ListConcurrencyConfigsOutput' => [
                'title' => '获取函数的并发配置列表信息',
                'description' => '获取函数的并发配置列表信息。',
                'type' => 'object',
                'properties' => [
                    'configs' => [
                        'title' => '并发配置列表',
                        'description' => '并发配置列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '并发配置。',
                            '$ref' => '#/components/schemas/ConcurrencyConfig',
                        ],
                        'required' => false,
                    ],
                    'nextToken' => [
                        'title' => '用来返回更多的查询结果。如果这个值没有返回，则说明没有更多结果。',
                        'description' => '用来返回更多的查询结果。如果这个值没有返回，则说明没有更多结果。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'next_token',
                    ],
                ],
            ],
            'ListCustomDomainOutput' => [
                'title' => '获取自定义域名列表的响应信息',
                'description' => '获取自定义域名列表的响应信息',
                'type' => 'object',
                'properties' => [
                    'customDomains' => [
                        'title' => '自定义域名列表',
                        'description' => '自定义域名列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '自定义域名。',
                            '$ref' => '#/components/schemas/CustomDomain',
                        ],
                        'required' => false,
                    ],
                    'nextToken' => [
                        'title' => '当符合查询条件的数据未读取完时，服务端会返回nextToken，此时可以使用nextToken继续读取后面的数据。第一次查询不需要提供这个参数。',
                        'description' => '当符合查询条件的数据未读取完时，服务端会返回nextToken，此时可以使用nextToken继续读取后面的数据。第一次查询不需要提供这个参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'next_domain_name',
                    ],
                ],
            ],
            'ListFunctionsOutput' => [
                'title' => '获取函数列表响应信息',
                'description' => '获取函数列表响应信息',
                'type' => 'object',
                'properties' => [
                    'functions' => [
                        'title' => '函数信息列表',
                        'description' => '函数信息列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '函数信息',
                            '$ref' => '#/components/schemas/Function',
                        ],
                        'required' => false,
                    ],
                    'nextToken' => [
                        'title' => '用来返回更多的查询结果。如果这个值没有返回，则说明没有更多结果。',
                        'description' => '用来返回更多的查询结果。如果这个值没有返回，则说明没有更多结果。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'next_function_name',
                    ],
                ],
            ],
            'ListInstancesOutput' => [
                'title' => '查询返回的实例信息列表',
                'description' => '查询返回的实例信息列表',
                'type' => 'object',
                'properties' => [
                    'instances' => [
                        'title' => '实例列表信息',
                        'description' => '实例列表信息',
                        'type' => 'array',
                        'items' => [
                            'description' => '实例信息',
                            '$ref' => '#/components/schemas/InstanceInfo',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'ListLayerVersionOutput' => [
                'title' => '获取指定层的版本列表',
                'description' => '获取指定层的版本列表。',
                'type' => 'object',
                'properties' => [
                    'layers' => [
                        'title' => '层版本的列表。',
                        'description' => '层版本的列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '层版本。',
                            '$ref' => '#/components/schemas/Layer',
                        ],
                        'required' => false,
                    ],
                    'nextVersion' => [
                        'title' => '剩余列表的起始版本名，用来返回更多结果。',
                        'description' => '剩余列表的起始版本名，用来返回更多结果。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'ListLayersOutput' => [
                'title' => '获取层列表',
                'description' => '获取层列表',
                'type' => 'object',
                'properties' => [
                    'layers' => [
                        'title' => '层的列表。',
                        'description' => '层的列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '层信息。',
                            '$ref' => '#/components/schemas/Layer',
                        ],
                        'required' => false,
                    ],
                    'nextToken' => [
                        'title' => '剩余列表的起始层名，用来返回更多结果。',
                        'description' => '剩余列表的起始层名，用来返回更多结果。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'next-layer-name',
                    ],
                ],
            ],
            'ListProvisionConfigsOutput' => [
                'title' => '获取函数预留配置信息',
                'description' => '获取函数预留配置信息。',
                'type' => 'object',
                'properties' => [
                    'nextToken' => [
                        'title' => '下次查询的起始Token。如果这个值没有返回，则说明没有更多结果。',
                        'description' => '下次查询的起始Token。如果这个值没有返回，则说明没有更多结果。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'next_token',
                    ],
                    'provisionConfigs' => [
                        'title' => '函数预留配置',
                        'description' => '函数预留配置列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '预留配置。',
                            '$ref' => '#/components/schemas/ProvisionConfig',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'ListTagResourcesOutput' => [
                'title' => '查询绑定指定标签的资源信息',
                'description' => '查询绑定指定标签的资源信息。',
                'type' => 'object',
                'properties' => [
                    'NextToken' => [
                        'title' => '用来返回更多结果。第一次查询不需要提供这个参数，后续查询的Token从返回结果中获取。',
                        'description' => '用来返回更多结果。第一次查询不需要提供这个参数，后续查询的Token从返回结果中获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'next_token',
                    ],
                    'RequestId' => [
                        'title' => 'TODO',
                        'description' => '请求ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'xxx',
                    ],
                    'TagResources' => [
                        'title' => '被打标签的资源列表。',
                        'description' => '查询到的资源和标签的信息。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源和标签的信息，包含了资源ID、资源类型和标签键值等信息。',
                            '$ref' => '#/components/schemas/TagResource',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'ListTaggedResourcesOutput' => [
                'title' => '具有指定标签的资源列表',
                'description' => '具有指定标签的资源列表',
                'type' => 'object',
                'properties' => [
                    'nextToken' => [
                        'title' => '用来返回更多结果。第一次查询不需要提供这个参数，后续查询的Token从返回结果中获取。',
                        'description' => '用来返回更多结果。第一次查询不需要提供这个参数，后续查询的Token从返回结果中获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'next_token',
                    ],
                    'resources' => [
                        'title' => '被打标签的资源列表。',
                        'description' => '被打标签的资源列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源信息。',
                            '$ref' => '#/components/schemas/Resource',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'ListTriggersOutput' => [
                'title' => '获取触发器列表的响应结构体',
                'description' => '获取触发器列表的响应结构体。',
                'type' => 'object',
                'properties' => [
                    'nextToken' => [
                        'title' => '下一个触发器的名称。用来返回更多的查询结果。如果这个值没有返回，则说明没有更多结果。',
                        'description' => '下一个触发器的名称。用来返回更多的查询结果。如果这个值没有返回，则说明没有更多结果。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'next_token',
                    ],
                    'triggers' => [
                        'title' => '触发器列表',
                        'description' => '触发器列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '触发器信息。',
                            '$ref' => '#/components/schemas/Trigger',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'ListVersionsOutput' => [
                'title' => '列出版本的请求参数',
                'description' => '列出版本的请求参数',
                'type' => 'object',
                'properties' => [
                    'direction' => [
                        'title' => '版本排序方式',
                        'description' => '版本排序方式',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FORWARD',
                    ],
                    'nextToken' => [
                        'title' => '下一个版本ID',
                        'description' => '下一个版本ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '3',
                    ],
                    'versions' => [
                        'title' => '版本ID列表',
                        'description' => '版本ID列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '版本信息',
                            '$ref' => '#/components/schemas/Version',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'ListVpcBindingsOutput' => [
                'title' => '列出服务/函数下的全部 vpc binding 的请求参数',
                'description' => '列出服务/函数下的全部VPC绑定的请求参数',
                'type' => 'object',
                'properties' => [
                    'vpcIds' => [
                        'title' => 'VPC实例ID列表',
                        'description' => 'VPC实例ID列表',
                        'type' => 'array',
                        'items' => [
                            'description' => 'VPC ID',
                            'type' => 'string',
                            'example' => 'vpc-8vb8x8dggvr0axxxxxxxx',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'LogConfig' => [
                'title' => '函数日志配置',
                'description' => '函数日志配置',
                'type' => 'object',
                'properties' => [
                    'enableInstanceMetrics' => [
                        'title' => '是否开启实例级别指标。开启该功能后，您可以查看实例级别的CPU使用情况、内存使用情况、实例网络情况和实例内请求数等核心指标信息。false：默认值，表示关闭实例级别指标。true：表示开启实例级别指标。',
                        'description' => '是否开启实例级别指标。开启该功能后，您可以查看实例级别的CPU使用情况、内存使用情况、实例网络情况和实例内请求数等核心指标信息。false：默认值，表示关闭实例级别指标。true：表示开启实例级别指标。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                    'enableRequestMetrics' => [
                        'title' => '是否开启请求级别指标。开启该功能后，您可以查看该服务下所有函数的某次调用所消耗的时间及内存。false：表示关闭请求级别指标。true：默认值，表示开启请求级别指标。',
                        'description' => '是否开启请求级别指标。开启该功能后，您可以查看该服务下所有函数的某次调用所消耗的时间及内存。false：表示关闭请求级别指标。true：默认值，表示开启请求级别指标。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                    'logBeginRule' => [
                        'title' => '日志行首匹配规则',
                        'description' => '日志行首匹配规则',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DefaultRegex',
                    ],
                    'logstore' => [
                        'title' => '日志服务的Logstore名称。',
                        'description' => '日志服务的Logstore名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test-logstore',
                        'maxLength' => 63,
                    ],
                    'project' => [
                        'title' => '日志服务的Project名称',
                        'description' => '日志服务的Project名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test-project',
                        'maxLength' => 63,
                    ],
                ],
            ],
            'MNSTopicTriggerConfig' => [
                'title' => 'MNS 主题触发器配置',
                'description' => 'MNS 主题触发器配置',
                'type' => 'object',
                'properties' => [
                    'filterTag' => [
                        'title' => '过滤标签。只有收到包含了此处设置的过滤标签字符串的消息时，才会触发函数执行。',
                        'description' => '过滤标签。只有收到包含了此处设置的过滤标签字符串的消息时，才会触发函数执行。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'serverless',
                    ],
                    'notifyContentFormat' => [
                        'title' => '触发事件的内容格式。有 JSON 与 STREAM 两种格式，默认为 STREAM',
                        'description' => '触发事件的内容格式，目前支持如下两种格式：'."\n"
                            ."\n"
                            .'- **JSON**'."\n"
                            ."\n"
                            .'- **STREAM**'."\n"
                            ."\n"
                            .'> 默认格式为 STREAM。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'JSON',
                    ],
                    'notifyStrategy' => [
                        'title' => '重试策略。BACKOFF_RETRY：表示退避重试；重试3次，每次重试的间隔时间是10秒到20秒之间的随机值，默认值。EXPONENTIAL_DECAY_RETRY：表示指数衰减重试；重试176次，每次重试的间隔时间指数递增至512秒，总计重试时间为1天。每次重试的具体间隔为：1，2，4，8，16，32，64，128，256，512，512...512 （共167个512）。',
                        'description' => '重试策略。'."\n"
                            ."\n"
                            .'- **BACKOFF_RETRY**：表示退避重试；重试3次，每次重试的间隔时间是10秒到20秒之间的随机值，默认值。'."\n"
                            ."\n"
                            .'- **EXPONENTIAL_DECAY_RETRY**：表示指数衰减重试；重试176次，每次重试的间隔时间指数递增至512秒，总计重试时间为1天。每次重试的具体间隔为：1，2，4，8，16，32，64，128，256，512，512...512（共167个512）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'BACKOFF_RETRY',
                    ],
                ],
            ],
            'NASConfig' => [
                'title' => 'NAS配置',
                'description' => 'NAS配置。',
                'type' => 'object',
                'properties' => [
                    'groupId' => [
                        'title' => '群组ID。',
                        'description' => '群组ID。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '100',
                    ],
                    'mountPoints' => [
                        'title' => '挂载点列表。',
                        'description' => '挂载点列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '挂载点信息。',
                            '$ref' => '#/components/schemas/NASMountConfig',
                        ],
                        'required' => false,
                        'maxItems' => 5,
                    ],
                    'userId' => [
                        'title' => '账号ID。',
                        'description' => '账号ID。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
            ],
            'NASMountConfig' => [
                'title' => 'NAS挂载点列表',
                'description' => 'NAS挂载点列表',
                'type' => 'object',
                'properties' => [
                    'enableTLS' => [
                        'title' => '使用传输加密方式挂载。 说明：仅通用型NAS支持传输加密',
                        'description' => '使用传输加密方式挂载。 说明：仅通用型NAS支持传输加密',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                    'mountDir' => [
                        'title' => '本地挂载目录。',
                        'description' => '本地挂载目录。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/home/test',
                        'maxLength' => 64,
                    ],
                    'serverAddr' => [
                        'title' => 'NAS服务器地址。',
                        'description' => 'NAS服务器地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '***-uni85.cn-hangzhou.nas.com:/',
                        'maxLength' => 128,
                    ],
                ],
            ],
            'OSSMountConfig' => [
                'title' => 'OSS挂载配置',
                'description' => 'OSS挂载配置。',
                'type' => 'object',
                'properties' => [
                    'mountPoints' => [
                        'title' => 'OSS挂载点配置。',
                        'description' => 'OSS挂载点列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => 'OSS挂载点配置。',
                            '$ref' => '#/components/schemas/OSSMountPoint',
                        ],
                        'required' => false,
                        'maxItems' => 5,
                    ],
                ],
            ],
            'OSSMountPoint' => [
                'title' => 'OSS挂载点配置',
                'description' => 'OSS挂载点配置',
                'type' => 'object',
                'properties' => [
                    'bucketName' => [
                        'title' => '挂载的OSS Bucket。',
                        'description' => '挂载的OSS Bucket。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my-bucket',
                        'maxLength' => 64,
                        'minLength' => 3,
                    ],
                    'bucketPath' => [
                        'title' => '挂载的OSS Bucket路径。',
                        'description' => '挂载的OSS Bucket路径。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/my-dir',
                        'maxLength' => 128,
                    ],
                    'endpoint' => [
                        'title' => 'OSS访问地址。',
                        'description' => 'OSS访问地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http://oss-cn-shanghai.aliyuncs.com',
                        'maxLength' => 128,
                    ],
                    'mountDir' => [
                        'title' => '挂载目录。',
                        'description' => '挂载目录。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/mnt/dir',
                        'maxLength' => 64,
                        'minLength' => 2,
                    ],
                    'readOnly' => [
                        'title' => '是否只读。',
                        'description' => '是否只读。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'OSSTriggerConfig' => [
                'title' => 'OSS 触发器配置',
                'description' => 'OSS 触发器配置。',
                'type' => 'object',
                'properties' => [
                    'events' => [
                        'title' => '事件列表，请填写OSS对象存储相关的事件。事件类型请参考：https://help.aliyun.com/zh/fc/overview-of-oss-event-triggers?spm=a2c4g.11186623.0.i174',
                        'description' => '事件列表，请填写OSS对象存储相关的事件。事件类型请参见[OSS 触发事件列表](~~2513613~~)。',
                        'type' => 'array',
                        'items' => [
                            'description' => '事件类型名称，支持事件类型名称中包含通配符号。具体事件类型，请参见 [OSS 触发事件列表](~~2513613~~)。',
                            'type' => 'string',
                            'example' => 'oss:ObjectCreated:*',
                        ],
                        'required' => false,
                    ],
                    'filter' => [
                        'title' => '事件过滤规则',
                        'description' => '事件过滤规则。',
                        'required' => false,
                        '$ref' => '#/components/schemas/Filter',
                    ],
                ],
            ],
            'OutputCodeLocation' => [
                'title' => '代码包配置',
                'description' => '代码包配置',
                'type' => 'object',
                'properties' => [
                    'location' => [
                        'title' => '代码包的地址。',
                        'description' => '代码包的地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://xyz.oss-cn-shanghai.aliyuncs.com/xxx/xxx/xxx',
                    ],
                    'repositoryType' => [
                        'title' => '代码包的类型。',
                        'description' => '代码包的类型。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'OSS',
                    ],
                ],
            ],
            'OutputFuncCode' => [
                'title' => '函数代码包信息',
                'description' => '函数代码包信息',
                'type' => 'object',
                'properties' => [
                    'checksum' => [
                        'title' => '函数代码包的CRC64值。',
                        'description' => '函数代码包的CRC64值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1234567890',
                    ],
                    'url' => [
                        'title' => '函数代码包的URL。',
                        'description' => '函数代码包的URL。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http://func-code.oss-cn-shanghai.aliyuncs.com/1a2b3c4d5e6f',
                    ],
                ],
            ],
            'PathConfig' => [
                'title' => '自定义域名路由配置',
                'description' => '自定义域名路由配置',
                'type' => 'object',
                'properties' => [
                    'functionName' => [
                        'title' => '函数名',
                        'description' => '函数名',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'myFunction',
                    ],
                    'methods' => [
                        'title' => '支持的方法',
                        'description' => '支持的方法',
                        'type' => 'array',
                        'items' => [
                            'description' => 'HTTP方法。支持的方法有：HEAD, GET, POST, PUT, DELETE, PATCH, OPTIONS。',
                            'type' => 'string',
                            'example' => 'GET',
                        ],
                        'required' => false,
                    ],
                    'path' => [
                        'title' => '路由匹配规则',
                        'description' => '路由匹配规则',
                        'type' => 'string',
                        'required' => true,
                        'example' => '/api/*',
                        'maxLength' => 2048,
                    ],
                    'qualifier' => [
                        'title' => '版本或者别名',
                        'description' => '版本或者别名',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'myAlias',
                    ],
                    'rewriteConfig' => [
                        'title' => '重写配置',
                        'description' => '重写配置',
                        'required' => false,
                        '$ref' => '#/components/schemas/RewriteConfig',
                    ],
                ],
            ],
            'ProvisionConfig' => [
                'title' => '函数预留配置',
                'description' => '函数预留配置',
                'type' => 'object',
                'properties' => [
                    'alwaysAllocateCPU' => [
                        'title' => '是否始终分配CPU给函数实例。',
                        'description' => '是否始终分配CPU给函数实例。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                    'current' => [
                        'title' => '实际资源个数。',
                        'description' => '实际资源个数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                    'currentError' => [
                        'title' => '预留实例创建失败时的错误信息。',
                        'description' => '预留实例创建失败时的错误信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'image not found',
                    ],
                    'functionArn' => [
                        'title' => '函数的资源描述',
                        'description' => '函数的资源描述',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'acs:fc:cn-shanghai:124:functions/myFunction',
                    ],
                    'scheduledActions' => [
                        'title' => '定时策略配置。',
                        'description' => '定时策略配置。',
                        'type' => 'array',
                        'items' => [
                            'description' => '定时策略。',
                            '$ref' => '#/components/schemas/ScheduledAction',
                        ],
                        'required' => false,
                    ],
                    'target' => [
                        'title' => '目标资源个数。',
                        'description' => '目标资源个数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '5',
                    ],
                    'targetTrackingPolicies' => [
                        'title' => '指标追踪伸缩策略配置。',
                        'description' => '指标追踪伸缩策略配置。',
                        'type' => 'array',
                        'items' => [
                            'description' => '指标追踪策略。',
                            '$ref' => '#/components/schemas/TargetTrackingPolicy',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'PublishVersionInput' => [
                'title' => '发布版本的请求参数',
                'description' => '发布版本的请求参数',
                'type' => 'object',
                'properties' => [
                    'description' => [
                        'title' => '版本描述信息',
                        'description' => '版本描述信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my version',
                        'maxLength' => 256,
                    ],
                ],
            ],
            'PutAsyncInvokeConfigInput' => [
                'title' => '函数异步配置信息',
                'description' => '函数异步配置信息',
                'type' => 'object',
                'properties' => [
                    'asyncTask' => [
                        'title' => '是否开启异步任务（非必填）',
                        'description' => '是否开启异步任务（非必填）',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                    'destinationConfig' => [
                        'title' => '异步调用目标的配置结构体（非必填）。',
                        'description' => '异步调用目标的配置结构体（非必填）。',
                        'required' => false,
                        '$ref' => '#/components/schemas/DestinationConfig',
                    ],
                    'maxAsyncEventAgeInSeconds' => [
                        'title' => '消息最大存活时长（非必填），取值范围[1,2592000]。单位：秒。',
                        'description' => '消息最大存活时长（非必填），取值范围[1,604800]，默认为86400，单位为秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '300',
                    ],
                    'maxAsyncRetryAttempts' => [
                        'title' => '异步调用失败后的最大重试次数，非必填。取值范围[0,8]。当您未进行配置时，系统内部默认重试次数为3。',
                        'description' => '异步调用失败后的最大重试次数，非必填。取值范围[0,8]。当您未进行配置时，系统内部默认重试次数为3。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '3',
                    ],
                ],
            ],
            'PutConcurrencyInput' => [
                'title' => '设置函数的并发配置',
                'description' => '设置函数的并发配置',
                'type' => 'object',
                'properties' => [
                    'reservedConcurrency' => [
                        'title' => '预留并发，函数预留账号并发的一部份，其他函数不可以使用这部份并发。预留并发包括预留实例和按量实例的总并发。',
                        'description' => '预留并发，函数预留账号并发的一部份，其他函数不可以使用这部份并发。预留并发包括预留实例和按量实例的总并发。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '10',
                    ],
                ],
            ],
            'PutProvisionConfigInput' => [
                'title' => '申请或更新预留资源的配置',
                'description' => '申请或更新预留资源的配置',
                'type' => 'object',
                'properties' => [
                    'alwaysAllocateCPU' => [
                        'title' => '是否始终分配CPU，默认为true。',
                        'description' => '是否始终分配CPU，默认为true。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                    'scheduledActions' => [
                        'title' => '定时策略配置。',
                        'description' => '定时策略配置。',
                        'type' => 'array',
                        'items' => [
                            'description' => '定时策略。',
                            '$ref' => '#/components/schemas/ScheduledAction',
                        ],
                        'required' => false,
                    ],
                    'target' => [
                        'title' => '预留的目标资源个数。取值范围为[0,10000]。',
                        'description' => '预留的目标资源个数。取值范围为[0,10000]。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1',
                    ],
                    'targetTrackingPolicies' => [
                        'title' => '指标追踪伸缩策略配置。',
                        'description' => '指标追踪伸缩策略配置。',
                        'type' => 'array',
                        'items' => [
                            'description' => '指标追踪策略。',
                            '$ref' => '#/components/schemas/TargetTrackingPolicy',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'RegexRule' => [
                'title' => '自定义域名正则重写规则配置',
                'description' => '自定义域名正则重写规则配置',
                'type' => 'object',
                'properties' => [
                    'match' => [
                        'title' => '匹配规则',
                        'description' => '匹配规则',
                        'type' => 'string',
                        'required' => true,
                        'example' => '^/api/.+?/(.*)',
                        'maxLength' => 256,
                    ],
                    'replacement' => [
                        'title' => '替换规则',
                        'description' => '替换规则',
                        'type' => 'string',
                        'required' => true,
                        'example' => '/api/v2/$1',
                        'maxLength' => 256,
                    ],
                ],
            ],
            'Resource' => [
                'title' => '资源标签信息',
                'description' => '资源标签信息。',
                'type' => 'object',
                'properties' => [
                    'resouceType' => [
                        'title' => '资源类型名称。函数计算3.0中的函数：ALIYUN::FC::FUNCTION,函数计算旧版本中的服务：ALIYUN::FC::SERVICE。',
                        'description' => '资源类型名称。函数计算3.0中的函数：ALIYUN::FC::FUNCTION,函数计算旧版本中的服务：ALIYUN::FC::SERVICE。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ALIYUN::FC::FUNCTION',
                    ],
                    'resourceArn' => [
                        'title' => '阿里云资源描述符。',
                        'description' => '阿里云资源描述符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'acs:fc:cn-shanghai:****:functions/demo',
                    ],
                    'tags' => [
                        'title' => '标签字典。取值说明如下：key：表示标签键，value：表示标签值。',
                        'description' => '标签字典。',
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'string',
                            'example' => 'value1',
                        ],
                    ],
                ],
            ],
            'RetryStrategy' => [
                'title' => 'EventBridge 触发器的重试策略配置',
                'description' => '事件推送失败时的重试策略。',
                'type' => 'object',
                'properties' => [
                    'PushRetryStrategy' => [
                        'title' => '重试策略。BACKOFF_RETRY：退避重试。EXPONENTIAL_DECAY_RETRY：指数衰减重试。',
                        'description' => '重试策略，包含如下两种策略：'."\n"
                            ."\n"
                            .'- **BACKOFF_RETRY**：退避重试。'."\n"
                            ."\n"
                            .'- **EXPONENTIAL_DECAY_RETRY**：指数衰减重试。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'BACKOFF_RETRY',
                    ],
                ],
            ],
            'RewriteConfig' => [
                'title' => '重写规则配置',
                'description' => '重写规则配置',
                'type' => 'object',
                'properties' => [
                    'equalRules' => [
                        'title' => '精确匹配规则列表',
                        'description' => '精确匹配规则列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '精确匹配规则',
                            '$ref' => '#/components/schemas/EqualRule',
                        ],
                        'required' => false,
                    ],
                    'regexRules' => [
                        'title' => '正则匹配规则列表',
                        'description' => '正则匹配规则列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '正则匹配规则',
                            '$ref' => '#/components/schemas/RegexRule',
                        ],
                        'required' => false,
                    ],
                    'wildcardRules' => [
                        'title' => '通配匹配规则列表',
                        'description' => '通配匹配规则列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '通配匹配规则',
                            '$ref' => '#/components/schemas/WildcardRule',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'RouteConfig' => [
                'title' => '路由匹配规则配置',
                'description' => '路由匹配规则配置',
                'type' => 'object',
                'properties' => [
                    'routes' => [
                        'title' => '路由配置列表',
                        'description' => '路由配置列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '路由配置',
                            '$ref' => '#/components/schemas/PathConfig',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'RunOptions' => [
                'title' => 'EventBridge 触发器运行环境参数配置',
                'description' => 'EventBridge 触发器运行环境参数配置',
                'type' => 'object',
                'properties' => [
                    'batchWindow' => [
                        'title' => '攒批窗口配置。',
                        'description' => '攒批窗口配置。',
                        'required' => false,
                        '$ref' => '#/components/schemas/BatchWindow',
                    ],
                    'deadLetterQueue' => [
                        'title' => '是否启用死信队列。配置该参数即为启用死信队列，默认不启用死信队列，超过重试策略后的消息将被丢弃。支持配置消息服务 MNS、云消息队列 RocketMQ 版、消息队列 Kafka 版以及事件总线 EventBridge。',
                        'description' => '是否启用死信队列。配置该参数即为启用死信队列，默认不启用死信队列，超过重试策略后的消息将被丢弃。支持配置消息服务 MNS、云消息队列 RocketMQ 版、消息队列 Kafka 版以及事件总线 EventBridge。',
                        'required' => false,
                        '$ref' => '#/components/schemas/DeadLetterQueue',
                    ],
                    'errorsTolerance' => [
                        'title' => '异常容忍策略。NONE：不容忍异常，默认值。ALL：容忍所有异常。',
                        'description' => '异常容忍策略，包含如下两种策略：'."\n"
                            ."\n"
                            .'- **NONE**：不容忍异常，默认值。'."\n"
                            ."\n"
                            .'- **ALL**：容忍所有异常。'."\n"
                            ."\n"
                            .'> 默认策略为**NONE**',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ALL',
                    ],
                    'mode' => [
                        'title' => '消息数据推送到函数计算时的底层应用模式。event-streaming：事件流模式，按照数组格式推送事件，会根据用户推送配置将一个或多个消息事件以批的形式推送到函数中进行处理，适合端到端的流式数据处理场景，该模式下支持的事件源类型有 MNS、RocketMQ、RabbitMQ、Kafka、MQTT 以及 DTS。event-driven：事件模式，每次会将单个消息作为事件参数传入函数中，事件遵循CloudEvents规范，，该模式下支持的事件源有 Default、MNS、RocketMQ 以及 RabbitMQ，注意：该模式下，不支持攒批配置。',
                        'description' => '消息数据推送到函数计算时的底层应用模式，包含如下两种模式：'."\n"
                            ."\n"
                            .'- **event-streaming**：事件流模式，按照数组格式推送事件，会根据用户推送配置将一个或多个消息事件以批的形式推送到函数中进行处理，适合端到端的流式数据处理场景，该模式下支持的事件源类型有 MNS、RocketMQ、RabbitMQ、Kafka、MQTT 以及 DTS。'."\n"
                            ."\n"
                            .'- **event-driven**：事件模式，每次会将单个消息作为事件参数传入函数中，事件遵循CloudEvents规范，，该模式下支持的事件源有 Default、MNS、RocketMQ 以及 RabbitMQ，注意，该模式下，不支持攒批配置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'event-streaming',
                    ],
                    'retryStrategy' => [
                        'title' => '事件推送失败时的重试策略。',
                        'description' => '事件推送失败时的重试策略。',
                        'required' => false,
                        '$ref' => '#/components/schemas/RetryStrategy',
                    ],
                ],
            ],
            'SLSTriggerConfig' => [
                'title' => 'SLS 触发器配置',
                'description' => 'SLS 触发器配置',
                'type' => 'object',
                'properties' => [
                    'enable' => [
                        'title' => '是否启用触发器',
                        'description' => '是否启用触发器',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                    'functionParameter' => [
                        'title' => '调用参数。日志服务将该配置内容作为event的一部分传入函数，该配置内容必须是JSON格式的字符串。',
                        'description' => '调用参数。日志服务将该配置内容作为event的一部分传入函数，该配置内容必须是JSON格式的字符串。',
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'description' => '调用参数内容。日志服务将该配置内容作为 event 的一部分传入函数，该配置内容必须是 JSON 格式的字符串。',
                            'type' => 'string',
                            'example' => '{"foo":"bar"}',
                        ],
                    ],
                    'jobConfig' => [
                        'title' => '触发器读取日志间隔及错误重试配置。',
                        'description' => '触发器读取日志间隔及错误重试配置。',
                        'required' => false,
                        '$ref' => '#/components/schemas/JobConfig',
                    ],
                    'logConfig' => [
                        'title' => '触发操作自身的日志配置。',
                        'description' => '触发操作自身的日志配置。',
                        'required' => false,
                        '$ref' => '#/components/schemas/SLSTriggerLogConfig',
                    ],
                    'sourceConfig' => [
                        'title' => '触发源配置。',
                        'description' => '触发源配置。',
                        'required' => false,
                        '$ref' => '#/components/schemas/SourceConfig',
                    ],
                ],
            ],
            'SLSTriggerLogConfig' => [
                'title' => 'SLS 触发器日志配置',
                'description' => 'SLS 触发器日志配置',
                'type' => 'object',
                'properties' => [
                    'logstore' => [
                        'title' => 'Logstore名称。触发函数的过程中发生的异常和函数执行统计信息会记录到该Logstore。',
                        'description' => 'Logstore名称。触发函数的过程中发生的异常和函数执行统计信息会记录到该Logstore。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my-sls-logstore-name',
                    ],
                    'project' => [
                        'title' => 'Project名称。触发函数的过程中发生的异常和函数执行统计信息会记录到该Project下的Logstore中。',
                        'description' => 'Project名称。触发函数的过程中发生的异常和函数执行统计信息会记录到该Project下的Logstore中。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my-sls-project-name',
                    ],
                ],
            ],
            'ScheduledAction' => [
                'title' => '定时策略配置',
                'description' => '定时策略配置',
                'type' => 'object',
                'properties' => [
                    'endTime' => [
                        'title' => '策略失效时间。',
                        'description' => '策略失效时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2024-03-10T10:10:10Z',
                    ],
                    'name' => [
                        'title' => '策略名称。',
                        'description' => '策略名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_1',
                    ],
                    'scheduleExpression' => [
                        'title' => '定时配置。',
                        'description' => '定时配置。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cron(0 0 22 * * *)',
                    ],
                    'startTime' => [
                        'title' => '策略生效时间。',
                        'description' => '策略生效时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2023-03-10T10:10:10Z',
                    ],
                    'target' => [
                        'title' => '预留的目标资源个数。',
                        'description' => '预留的目标资源个数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '50',
                    ],
                ],
            ],
            'SourceConfig' => [
                'title' => 'SLS 触发器配置事件源配置',
                'description' => 'SLS 触发器配置事件源配置',
                'type' => 'object',
                'properties' => [
                    'logstore' => [
                        'title' => 'Logstore名称。当前触发器会定时从此Logstore中订阅数据，然后触发函数。',
                        'description' => 'Logstore名称。当前触发器会定时从此Logstore中订阅数据，然后触发函数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my-sls-logstore-name',
                    ],
                    'startTime' => [
                        'title' => '消费起始时间，单位为秒，若不指定，则会从最新数据开始消费。若指定，则会对指定时间之后写入的数据产生触发事件，针对存量数据消费，在追上实时触发进度以前会忽略触发间隔来追赶消费延迟，当追赶完成后，此时触发没有延迟，开始按照设置的触发事件间隔来触发函数调用。',
                        'description' => '消费起始时间，单位为秒，若不指定，则会从最新数据开始消费。若指定，则会对指定时间之后写入的数据产生触发事件，针对存量数据消费，在追上实时触发进度以前会忽略触发间隔来追赶消费延迟，当追赶完成后，此时触发没有延迟，开始按照设置的触发事件间隔来触发函数调用。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1704790317',
                    ],
                ],
            ],
            'SourceDTSParameters' => [
                'title' => 'EventBridge 数据传输服务DTS版的自定义事件源参数',
                'description' => 'EventBridge 数据传输服务DTS版的自定义事件源参数',
                'type' => 'object',
                'properties' => [
                    'BrokerUrl' => [
                        'title' => '数据订阅通道的网络地址及端口号信息。',
                        'description' => '数据订阅通道的网络地址及端口号信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dts-cn-shanghai-vpc.com:18003',
                    ],
                    'InitCheckPoint' => [
                        'title' => '消费位点，即SDK客户端消费第一条数据的时间戳，格式为Unix时间戳。',
                        'description' => '消费位点，即SDK客户端消费第一条数据的时间戳，格式为Unix时间戳。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1677340805',
                    ],
                    'Password' => [
                        'title' => '消费组的账号密码。',
                        'description' => '消费组的账号密码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dtsTest123',
                    ],
                    'RegionId' => [
                        'title' => '数据传输服务DTS版的实例所属地域。',
                        'description' => '数据传输服务DTS版的实例所属地域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                    'Sid' => [
                        'title' => '消费组ID。',
                        'description' => '消费组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dtse34j22j025a****',
                    ],
                    'TaskId' => [
                        'title' => '任务 ID。',
                        'description' => '任务 ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'e34z2gm325q****',
                    ],
                    'Topic' => [
                        'title' => '数据订阅通道的订阅Topic。',
                        'description' => '数据订阅通道的订阅Topic。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn_shanghai_vpc_rm_uf6398ykj0218****_dts_trigger_upgrade_from_old_version2',
                    ],
                    'Username' => [
                        'title' => '消费组的账号。',
                        'description' => '消费组的账号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dts_trigger',
                    ],
                ],
            ],
            'SourceKafkaParameters' => [
                'title' => 'EventBridge 消息队列Kafka版的自定义事件源参数',
                'description' => 'EventBridge 消息队列Kafka版的自定义事件源参数',
                'type' => 'object',
                'properties' => [
                    'ConsumerGroup' => [
                        'title' => '订阅该Topic的消费者所对应的Group ID。',
                        'description' => '订阅该Topic的消费者所对应的Group ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DEFAULT_GROUP',
                    ],
                    'InstanceId' => [
                        'title' => '消息队列Kafka版的实例的ID。',
                        'description' => '消息队列Kafka版的实例的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'r-8vb64581862c****',
                    ],
                    'Network' => [
                        'title' => '网络配置 ：默认值Default，VPC网络是PublicNetwork。',
                        'description' => '网络配置 ：默认值Default，VPC网络是PublicNetwork。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Default',
                    ],
                    'OffsetReset' => [
                        'title' => '偏移量。earliest：最早消费位点。latest：最新消费位点。',
                        'description' => '偏移量。earliest：最早消费位点。latest：最新消费位点。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'latest',
                    ],
                    'RegionId' => [
                        'title' => '消息队列Kafka版的实例所属地域。',
                        'description' => '消息队列Kafka版的实例所属地域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                    'SecurityGroupId' => [
                        'title' => '安全组 ID',
                        'description' => '安全组 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sg-bp1iv19sp1msc7zot4****',
                    ],
                    'Topic' => [
                        'title' => '消息队列 Kafka 版实例下的 Topic 名称',
                        'description' => '消息队列 Kafka 版实例下的 Topic 名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'popvip_center_robot_order',
                    ],
                    'VSwitchIds' => [
                        'title' => '交换机 ID',
                        'description' => '交换机 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vsw-bp179l3llg3jjxwrq72****',
                    ],
                    'VpcId' => [
                        'title' => 'VPC 网络的 ID',
                        'description' => 'VPC 网络的 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vpc-8vblalsi0vbhizr77****',
                    ],
                ],
            ],
            'SourceMNSParameters' => [
                'title' => 'EventBridge 消息服务MNS版的自定义事件源参数',
                'description' => 'EventBridge 消息服务MNS版的自定义事件源参数',
                'type' => 'object',
                'properties' => [
                    'IsBase64Decode' => [
                        'title' => '是否开启Base64编码。true：开启 Base64 编码，默认值。false：不开启 Base64 编码。',
                        'description' => '是否开启Base64编码。true：开启 Base64 编码，默认值。false：不开启 Base64 编码。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                    'QueueName' => [
                        'title' => '消息服务MNS的Queue的名称。',
                        'description' => '消息服务MNS的Queue的名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo',
                    ],
                    'RegionId' => [
                        'title' => '消息服务MNS Queue所属地域。',
                        'description' => '消息服务MNS Queue所属地域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai',
                    ],
                ],
            ],
            'SourceMQTTParameters' => [
                'title' => 'EventBridge 消息队列MQTT版的自定义事件源参数',
                'description' => 'EventBridge 消息队列MQTT版的自定义事件源参数',
                'type' => 'object',
                'properties' => [
                    'InstanceId' => [
                        'title' => '消息队列MQTT版的实例的ID。',
                        'description' => '消息队列MQTT版的实例的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'mqtt-****',
                    ],
                    'RegionId' => [
                        'title' => '消息队列MQTT版的实例所属地域。',
                        'description' => '消息队列MQTT版的实例所属地域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                    'Topic' => [
                        'title' => '消息队列MQTT版实例的Topic的名称。',
                        'description' => '消息队列MQTT版实例的Topic的名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testTopic',
                    ],
                ],
            ],
            'SourceRabbitMQParameters' => [
                'title' => 'EventBridge 消息队列RabbitMQ版的自定义事件源参数',
                'description' => 'EventBridge 消息队列RabbitMQ版的自定义事件源参数',
                'type' => 'object',
                'properties' => [
                    'InstanceId' => [
                        'title' => '消息队列RabbitMQ版的实例的ID。',
                        'description' => '消息队列RabbitMQ版的实例的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'amqp-cn-nif22u74****',
                    ],
                    'QueueName' => [
                        'title' => '消息队列RabbitMQ版实例的Queue的名称。',
                        'description' => '消息队列RabbitMQ版实例的Queue的名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo',
                    ],
                    'RegionId' => [
                        'title' => '消息队列RabbitMQ版的实例所属地域。',
                        'description' => '消息队列RabbitMQ版的实例所属地域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                    'VirtualHostName' => [
                        'title' => '消息队列RabbitMQ版实例的Vhost的名称。',
                        'description' => '消息队列RabbitMQ版实例的Vhost的名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'eb-connect',
                    ],
                ],
            ],
            'SourceRocketMQParameters' => [
                'title' => 'EventBridge 消息队列RocketMQ版的自定义事件源参数',
                'description' => 'EventBridge 消息队列RocketMQ版的自定义事件源参数。',
                'type' => 'object',
                'properties' => [
                    'AuthType' => [
                        'title' => '认证类型。取值为 ACL 或为空。取值为 ACL 表示开启鉴权，需填写 InstanceUsername 和 InstancePassword。',
                        'description' => '认证类型。取值为 ACL 或为空。取值为 ACL 表示开启鉴权，需填写 InstanceUsername 和 InstancePassword。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ACL',
                    ],
                    'FilterType' => [
                        'title' => '消息过滤类型。',
                        'description' => '消息过滤类型。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Tag',
                    ],
                    'GroupID' => [
                        'title' => '消息队列 RocketMQ 版的 Group ID',
                        'description' => '消息队列 RocketMQ 版的 Group ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'GID_group1',
                    ],
                    'InstanceEndpoint' => [
                        'title' => '消息队列 RocketMQ 版的实例接入点信息。',
                        'description' => '消息队列 RocketMQ 版的实例接入点信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'registry-vpc.cn-hangzhou.aliyuncs.com',
                    ],
                    'InstanceId' => [
                        'title' => '消息队列 RocketMQ 版的实例 ID',
                        'description' => '消息队列 RocketMQ 版的实例 ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MQ_INST_164901546557****_BAAN****',
                    ],
                    'InstanceNetwork' => [
                        'title' => '网络类型。',
                        'description' => '网络类型。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PrivateNetwork',
                    ],
                    'InstancePassword' => [
                        'title' => '消息队列 RocketMQ 版的实例的密码。',
                        'description' => '消息队列 RocketMQ 版的实例的密码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
                    ],
                    'InstanceSecurityGroupId' => [
                        'title' => '安全组 ID。',
                        'description' => '安全组 ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sg-hp35r2hc3a3sv8q2****',
                    ],
                    'InstanceType' => [
                        'title' => '消息队列 RocketMQ 版的实例类型。',
                        'description' => '消息队列 RocketMQ 版的实例类型。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Cloud_5',
                    ],
                    'InstanceUsername' => [
                        'title' => '消息队列 RocketMQ 版的实例的用户名。使用公网访问时，SDK 代码中需要配置实例的用户名和密码，进行身份验证。',
                        'description' => '消息队列 RocketMQ 版的实例的用户名。使用公网访问时，SDK 代码中需要配置实例的用户名和密码，进行身份验证。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6W0xz2uPfiwp****',
                    ],
                    'InstanceVSwitchIds' => [
                        'title' => '实例所关联的交换机 ID。',
                        'description' => '实例所关联的交换机 ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vsw-uf6gwtbn6etadpvz7****',
                    ],
                    'InstanceVpcId' => [
                        'title' => '实例所关联的专有网络的 ID。',
                        'description' => '实例所关联的专有网络的 ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vpc-uf6of9452b2pba82c****',
                    ],
                    'Offset' => [
                        'title' => '消息的消费位点。CONSUME_FROM_LAST_OFFSET：从最新位点开始消费，默认值。CONSUME_FROM_FIRST_OFFSET：从最早位点开始消费。CONSUME_FROM_TIMESTAMP：从指定时间点的位点开始消费。',
                        'description' => '消息的消费位点。'."\n"
                            ."\n"
                            .'- CONSUME_FROM_LAST_OFFSET：从最新位点开始消费，默认值。'."\n"
                            .'- CONSUME_FROM_FIRST_OFFSET：从最早位点开始消费。'."\n"
                            .'- CONSUME_FROM_TIMESTAMP：从指定时间点的位点开始消费。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CONSUME_FROM_TIMESTAMP',
                    ],
                    'RegionId' => [
                        'title' => '消息队列RocketMQ版Queue所属地域。',
                        'description' => '消息队列RocketMQ版Queue所属地域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai',
                    ],
                    'Tag' => [
                        'title' => '消息的过滤标签。',
                        'description' => '消息的过滤标签。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                    'Timestamp' => [
                        'title' => '时间戳。仅当参数 Offset 取值为 CONSUME_FROM_TIMESTAMP 时，该参数有效。',
                        'description' => '时间戳。仅当参数 Offset 取值为 CONSUME_FROM_TIMESTAMP 时，该参数有效。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1636597951964',
                    ],
                    'Topic' => [
                        'title' => '消息队列 RocketMQ 版实例的 Topic 名称。',
                        'description' => '消息队列 RocketMQ 版实例的 Topic 名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'myTopic',
                    ],
                ],
            ],
            'TLSConfig' => [
                'title' => 'TLS配置',
                'description' => 'TLS配置。',
                'type' => 'object',
                'properties' => [
                    'cipherSuites' => [
                        'title' => 'TLS加密套件列表。',
                        'description' => 'TLS加密套件列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => 'TLS加密套件。',
                            'type' => 'string',
                            'example' => 'TLS_RSA_WITH_RC4_128_SHA',
                        ],
                        'required' => true,
                    ],
                    'maxVersion' => [
                        'title' => 'TLS最大版本号。枚举值：TLSv1.3, TLSv1.2, TLSv1.1, TLSv1.0',
                        'description' => 'TLS最大版本号。枚举值：TLSv1.3, TLSv1.2, TLSv1.1, TLSv1.0',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TLSv1.3',
                    ],
                    'minVersion' => [
                        'title' => 'TLS最小版本号。枚举值：TLSv1.3, TLSv1.2, TLSv1.1, TLSv1.0',
                        'description' => 'TLS最小版本号。枚举值：TLSv1.3, TLSv1.2, TLSv1.1, TLSv1.0',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'TLSv1.0',
                    ],
                ],
            ],
            'Tag' => [
                'title' => '标签',
                'description' => '标签',
                'type' => 'object',
                'properties' => [
                    'Key' => [
                        'title' => '标签名',
                        'description' => '标签名',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'k1',
                    ],
                    'Value' => [
                        'title' => '标签值',
                        'description' => '标签值',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v1',
                    ],
                ],
            ],
            'TagResource' => [
                'title' => '资源标签信息',
                'description' => '资源标签信息。',
                'type' => 'object',
                'properties' => [
                    'ResourceId' => [
                        'title' => '阿里云资源描述符。',
                        'description' => '阿里云资源描述符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'acs:fc:cn-shanghai:****:functions/demo',
                    ],
                    'ResourceType' => [
                        'title' => '资源类型名称。函数计算3.0中的函数：ALIYUN::FC::FUNCTION,函数计算旧版本中的服务：ALIYUN::FC::SERVICE。',
                        'description' => '资源类型名称。'."\n"
                            ."\n"
                            .'函数计算3.0中的函数类型：ALIYUN::FC::FUNCTION，简写：function。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'function',
                    ],
                    'TagKey' => [
                        'title' => '标签键',
                        'description' => '标签键。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'key1',
                    ],
                    'TagValue' => [
                        'title' => '标签值',
                        'description' => '标签值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'key1',
                    ],
                ],
            ],
            'TagResourceInput' => [
                'title' => '给指定资源打标签',
                'description' => '给指定资源打标签',
                'type' => 'object',
                'properties' => [
                    'resourceArn' => [
                        'title' => '资源描述符。',
                        'description' => '资源描述符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'acs:fc:cn-shanghai:xxx:functions/f1',
                        'minLength' => 1,
                    ],
                    'tags' => [
                        'title' => '标签字典。',
                        'description' => '标签字典。',
                        'type' => 'object',
                        'required' => true,
                        'additionalProperties' => [
                            'type' => 'string',
                            'example' => 'value1',
                        ],
                    ],
                ],
            ],
            'TagResourcesInput' => [
                'title' => '给指定资源打标签',
                'description' => '给指定资源打标签',
                'type' => 'object',
                'properties' => [
                    'ResourceId' => [
                        'title' => '资源ID列表',
                        'description' => '资源ID列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源ID。',
                            'type' => 'string',
                            'example' => 'acs:fc:cn-shanghai:xxx:functions/f1',
                        ],
                        'required' => true,
                    ],
                    'ResourceType' => [
                        'title' => '资源类型',
                        'description' => '资源类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FUNCTION',
                    ],
                    'Tag' => [
                        'title' => '标签列表',
                        'description' => '标签列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签信息。',
                            '$ref' => '#/components/schemas/Tag',
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'TargetTrackingPolicy' => [
                'title' => '指标追踪伸缩策略配置',
                'description' => '指标追踪伸缩策略配置',
                'type' => 'object',
                'properties' => [
                    'endTime' => [
                        'title' => '策略结束时间（UTC）。',
                        'description' => '策略结束时间（UTC）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2024-03-10T10:10:10Z',
                    ],
                    'maxCapacity' => [
                        'title' => '扩容的最大值。',
                        'description' => '扩容的最大值。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '10',
                    ],
                    'metricTarget' => [
                        'title' => '指标的追踪值。',
                        'description' => '指标的追踪值。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => true,
                        'example' => '0.6',
                    ],
                    'metricType' => [
                        'title' => '跟踪的指标类型：ProvisionedConcurrencyUtilization：预留模式实例并发度利用率。CPUUtilization：CPU利用率。GPUMemUtilization：GPU利用率。',
                        'description' => '跟踪的指标类型：ProvisionedConcurrencyUtilization：预留模式实例并发度利用率。CPUUtilization：CPU利用率。GPUMemUtilization：GPU利用率。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'CPUUtilization',
                    ],
                    'minCapacity' => [
                        'title' => '缩容的最小值。',
                        'description' => '缩容的最小值。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1',
                    ],
                    'name' => [
                        'title' => '策略名称。',
                        'description' => '策略名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_1',
                    ],
                    'startTime' => [
                        'title' => '策略开始生效时间（UTC）。',
                        'description' => '策略开始生效时间（UTC）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2023-03-10T10:10:10Z',
                    ],
                ],
            ],
            'TimerTriggerConfig' => [
                'title' => '定时触发器配置',
                'description' => '定时触发器配置',
                'type' => 'object',
                'properties' => [
                    'cronExpression' => [
                        'title' => '触发周期表达式。按照时间间隔触发：以每间隔4分钟为例，表达式为 “@every 4m”。按照CRON表达式触发：常见格式类似 “0 0 4 * * *”',
                        'description' => '触发周期表达式。按照时间间隔触发：以每间隔4分钟为例，表达式为 “@every 4m”。按照CRON表达式触发：常见格式类似 “0 0 4 * * *”',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0 0 4 * * *',
                    ],
                    'enable' => [
                        'title' => '是否启用触发器',
                        'description' => '是否启用触发器',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                    'payload' => [
                        'title' => '输入自定义的参数，该触发消息将会作为event中payload的值。',
                        'description' => '输入自定义的参数，该触发消息将会作为event中payload的值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"workflowInstanceId":"39639"}',
                    ],
                ],
            ],
            'TracingConfig' => [
                'title' => '链路追踪配置',
                'description' => '链路追踪配置',
                'type' => 'object',
                'properties' => [
                    'params' => [
                        'title' => '链路追踪参数。参数为map[string]string，其中key为"endpoint"，value为您的链路追踪内网接入点。 例如 endpoint: http://tracing-analysis-dc-hz.aliyuncs.com/adapt_xxx/api/otlp/traces 。',
                        'description' => '链路追踪参数。参数为map[string]string，其中key为"endpoint"，value为您的链路追踪内网接入点。 例如 endpoint: http://tracing-analysis-dc-hz.aliyuncs.com/adapt_xxx/api/otlp/traces 。',
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'string',
                            'example' => 'http://tracing-analysis-dc-hz.aliyuncs.com/adapt_xxx/api/otlp/traces',
                        ],
                    ],
                    'type' => [
                        'title' => '链路追踪协议类型，目前只支持Jaeger。',
                        'description' => '链路追踪协议类型，目前只支持Jaeger。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Jaeger',
                    ],
                ],
            ],
            'Trigger' => [
                'title' => '触发器的配置信息',
                'description' => '触发器的配置信息。',
                'type' => 'object',
                'properties' => [
                    'createdTime' => [
                        'title' => '触发器的创建时间。',
                        'description' => '触发器的创建时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2020-08-20T02:28:21Z',
                    ],
                    'description' => [
                        'title' => '触发器的描述。',
                        'description' => '触发器的描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_description',
                    ],
                    'httpTrigger' => [
                        'title' => 'HTTP 触发器信息。',
                        'description' => 'HTTP 触发器信息。',
                        'required' => false,
                        '$ref' => '#/components/schemas/HTTPTrigger',
                    ],
                    'invocationRole' => [
                        'title' => '事件源（如OSS）调用函数所需的角色。',
                        'description' => '事件源（如OSS）调用函数所需的角色。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'acs:ram::151641468453****:role/my-role',
                    ],
                    'lastModifiedTime' => [
                        'title' => '触发器的上次修改时间。',
                        'description' => '触发器的上次修改时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2020-04-23T06:32:43Z',
                    ],
                    'qualifier' => [
                        'title' => '函数的版本或别名。',
                        'description' => '函数的版本或别名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LATEST',
                    ],
                    'sourceArn' => [
                        'title' => '触发器事件源的Aliyun Resource Name。',
                        'description' => '触发器事件源的Aliyun Resource Name。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'acs:oss:cn-hangzhou:151641468453****:my-bucket',
                    ],
                    'status' => [
                        'title' => '触发器的状态。',
                        'description' => '触发器的状态。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'OK',
                    ],
                    'targetArn' => [
                        'title' => '函数的资源标识。',
                        'description' => '函数的资源标识。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'acs:oss:cn-hangzhou:151641468453****:my-bucket',
                    ],
                    'triggerConfig' => [
                        'title' => '触发器配置，针对不同类型的触发器，配置有所不同。',
                        'description' => '触发器配置，针对不同类型的触发器，配置有所不同。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{'."\n"
                            .'      "events": ['."\n"
                            .'            "oss:ObjectCreated:*"'."\n"
                            .'      ],'."\n"
                            .'      "filter": {'."\n"
                            .'            "key": {'."\n"
                            .'                  "prefix": "/prefix",'."\n"
                            .'                  "suffix": ".zip"'."\n"
                            .'            }'."\n"
                            .'      }'."\n"
                            .'}',
                    ],
                    'triggerId' => [
                        'title' => '触发器的唯一ID。',
                        'description' => '触发器的唯一ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '546959b5-ce1a-4991-8891-df7a02b25086',
                    ],
                    'triggerName' => [
                        'title' => '触发器的名称。要求只能包含字母、数字、下划线(_)和短划线(-)。不能以数字、短划线(-)开头，长度限制为1~128个字符。',
                        'description' => '触发器的名称。要求只能包含字母、数字、下划线(_)和短划线(-)。不能以数字、短划线(-)开头，长度限制为1~128个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'defaultTrigger',
                    ],
                    'triggerType' => [
                        'title' => '触发器的类型。',
                        'description' => '触发器的类型。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http',
                    ],
                ],
            ],
            'UpdateAliasInput' => [
                'title' => '更新别名的请求参数',
                'description' => '更新别名的请求参数',
                'type' => 'object',
                'properties' => [
                    'additionalVersionWeight' => [
                        'title' => '灰度版本',
                        'description' => '灰度版本权重',
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '0.5',
                        ],
                    ],
                    'description' => [
                        'title' => '别名的描述信息',
                        'description' => '别名的描述信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my alias',
                        'maxLength' => 256,
                    ],
                    'versionId' => [
                        'title' => '别名指向的版本',
                        'description' => '别名指向的版本',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                        'maxLength' => 10,
                        'minLength' => 1,
                    ],
                ],
            ],
            'UpdateCustomDomainInput' => [
                'title' => '更新自定义域名的请求信息',
                'description' => '更新自定义域名的请求信息',
                'type' => 'object',
                'properties' => [
                    'authConfig' => [
                        'title' => '权限认证配置',
                        'description' => '权限认证配置',
                        'required' => false,
                        '$ref' => '#/components/schemas/AuthConfig',
                    ],
                    'certConfig' => [
                        'title' => 'HTTPS证书的信息。',
                        'description' => 'HTTPS证书的信息。',
                        'required' => false,
                        '$ref' => '#/components/schemas/CertConfig',
                    ],
                    'protocol' => [
                        'title' => '域名支持的协议类型。HTTP：仅支持HTTP协议。HTTPS：仅支持HTTPS协议。HTTP,HTTPS：支持HTTP及HTTPS协议。',
                        'description' => '域名支持的协议类型。HTTP：仅支持HTTP协议。HTTPS：仅支持HTTPS协议。HTTP,HTTPS：支持HTTP及HTTPS协议。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'HTTP',
                    ],
                    'routeConfig' => [
                        'title' => '路由表：自定义域名访问时的PATH到Function的映射。',
                        'description' => '路由表：自定义域名访问时的PATH到Function的映射。',
                        'required' => false,
                        '$ref' => '#/components/schemas/RouteConfig',
                    ],
                    'tlsConfig' => [
                        'title' => 'TLS配置信息。',
                        'description' => 'TLS配置信息。',
                        'required' => false,
                        '$ref' => '#/components/schemas/TLSConfig',
                    ],
                    'wafConfig' => [
                        'title' => 'Web应用防火墙配置信息。',
                        'description' => 'Web应用防火墙配置信息。',
                        'required' => false,
                        '$ref' => '#/components/schemas/WAFConfig',
                    ],
                ],
            ],
            'UpdateFunctionInput' => [
                'title' => '函数更新请求参数',
                'description' => '函数更新请求参数。',
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'title' => '函数代码ZIP包。code和customContainerConfig二选一。',
                        'description' => '函数代码ZIP包。code和customContainerConfig二选一。',
                        'required' => false,
                        '$ref' => '#/components/schemas/InputCodeLocation',
                    ],
                    'cpu' => [
                        'title' => '函数的CPU规格，单位为vCPU，为0.05 vCPU的倍数。',
                        'description' => '函数的CPU规格，单位为vCPU，取值需要为0.05 vCPU的倍数。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '1',
                    ],
                    'customContainerConfig' => [
                        'title' => '自定义容器运行时的相关配置，成功配置后函数可以使用自定义容器镜像执行函数。code和customContainerConfig二选一。',
                        'description' => '自定义容器运行时的相关配置，成功配置后函数可以使用自定义容器镜像执行函数。code和customContainerConfig二选一。',
                        'required' => false,
                        '$ref' => '#/components/schemas/CustomContainerConfig',
                    ],
                    'customDNS' => [
                        'title' => '自定义DNS配置。',
                        'description' => '自定义DNS配置。',
                        'required' => false,
                        '$ref' => '#/components/schemas/CustomDNS',
                    ],
                    'customRuntimeConfig' => [
                        'title' => '自定义运行时配置。',
                        'description' => '自定义运行时配置。',
                        'required' => false,
                        '$ref' => '#/components/schemas/CustomRuntimeConfig',
                    ],
                    'description' => [
                        'title' => '函数的描述。',
                        'description' => '函数的描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my function',
                        'maxLength' => 256,
                    ],
                    'diskSize' => [
                        'title' => '函数的磁盘规格，单位为MB，可选值为512 MB或10240 MB。',
                        'description' => '函数的磁盘规格，单位为MB，可选值为512 MB或10240 MB。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '512',
                    ],
                    'environmentVariables' => [
                        'title' => '函数的环境变量，可以在运行环境中访问设置的环境变量。',
                        'description' => '函数的环境变量，可以在运行环境中访问设置的环境变量。',
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'string',
                            'example' => 'value1',
                        ],
                    ],
                    'gpuConfig' => [
                        'title' => '函数GPU配置。',
                        'description' => '函数GPU配置。',
                        'required' => false,
                        '$ref' => '#/components/schemas/GPUConfig',
                    ],
                    'handler' => [
                        'title' => '函数执行的入口，具体格式和运行时相关。',
                        'description' => '函数执行的入口，具体格式和运行时相关。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'index.handler',
                        'maxLength' => 128,
                        'minLength' => 1,
                    ],
                    'instanceConcurrency' => [
                        'title' => '实例最大并发度。',
                        'description' => '实例最大并发度。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                    'instanceLifecycleConfig' => [
                        'title' => '实例生命周期回调方法配置。',
                        'description' => '实例生命周期回调方法配置。',
                        'required' => false,
                        '$ref' => '#/components/schemas/InstanceLifecycleConfig',
                    ],
                    'internetAccess' => [
                        'title' => 'service config',
                        'description' => '是否允许访问公网。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                    'layers' => [
                        'title' => '层的列表。多个层会按照数组下标从大到小的顺序进行合并，下标小的层的内容会覆盖下标大的层的同名文件。',
                        'description' => '层的列表。多个层会按照数组下标从大到小的顺序进行合并，下标小的层的内容会覆盖下标大的层的同名文件。',
                        'type' => 'array',
                        'items' => [
                            'description' => '层ARN。',
                            'type' => 'string',
                            'example' => 'acs:fc:cn-beijing:186824xxxxxx:layers/fc_layer/versions/1',
                        ],
                        'required' => false,
                    ],
                    'logConfig' => [
                        'title' => '日志配置。函数产生的日志会被写入到配置的日志库中。',
                        'description' => '日志配置。函数产生的日志会被写入到配置的日志库中。',
                        'required' => false,
                        '$ref' => '#/components/schemas/LogConfig',
                    ],
                    'memorySize' => [
                        'title' => '函数的内存规格，单位为MB，内存大小为64 MB的倍数。不同的函数实例类型，内存规格存在差异。',
                        'description' => '函数的内存规格，单位为MB，内存大小为64 MB的倍数。不同的函数实例类型，内存规格存在差异。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '512',
                    ],
                    'nasConfig' => [
                        'title' => 'NAS配置。配置此参数后，函数可以访问指定的NAS资源。',
                        'description' => 'NAS配置。配置此参数后，函数可以访问指定的NAS资源。',
                        'required' => false,
                        '$ref' => '#/components/schemas/NASConfig',
                    ],
                    'ossMountConfig' => [
                        'title' => 'OSS挂载配置。',
                        'description' => 'OSS挂载配置。',
                        'required' => false,
                        '$ref' => '#/components/schemas/OSSMountConfig',
                    ],
                    'role' => [
                        'title' => '授予函数计算所需权限的RAM角色，使用场景包含：1. 把函数产生的日志发送到您的日志库中。2. 为函数在执行过程中访问其他云资源生成的临时访问令牌。',
                        'description' => '授予函数计算所需权限的RAM角色，使用场景包含：1. 把函数产生的日志发送到您的日志库中。2. 为函数在执行过程中访问其他云资源生成的临时访问令牌。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'acs:ram::188077086902****:role/fc-test',
                        'maxLength' => 300,
                    ],
                    'runtime' => [
                        'title' => '函数的运行时环境。',
                        'description' => '函数的运行时环境。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'nodejs14',
                    ],
                    'timeout' => [
                        'title' => '函数运行的超时时间，单位为秒，最小1秒，默认3秒。函数超过这个时间后会被终止执行。',
                        'description' => '函数运行的超时时间，单位为秒，最小1秒，默认3秒。函数超过这个时间后会被终止执行。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '60',
                    ],
                    'tracingConfig' => [
                        'title' => '链路追踪配置。当函数计算与链路追踪集成后，您可以记录请求在函数计算的耗时时间、查看函数的冷启动时间、记录函数内部时间的消耗等。',
                        'description' => '链路追踪配置。当函数计算与链路追踪集成后，您可以记录请求在函数计算的耗时时间、查看函数的冷启动时间、记录函数内部时间的消耗等。',
                        'required' => false,
                        '$ref' => '#/components/schemas/TracingConfig',
                    ],
                    'vpcConfig' => [
                        'title' => 'VPC配置。配置此参数后，函数可以访问指定的VPC资源。',
                        'description' => 'VPC配置。配置此参数后，函数可以访问指定的VPC资源。',
                        'required' => false,
                        '$ref' => '#/components/schemas/VPCConfig',
                    ],
                ],
            ],
            'UpdateTriggerInput' => [
                'title' => '更新触发器的请求参数',
                'description' => '更新触发器的请求参数',
                'type' => 'object',
                'properties' => [
                    'description' => [
                        'title' => '触发器的描述。',
                        'description' => '触发器的描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'trigger for test',
                        'maxLength' => 256,
                    ],
                    'invocationRole' => [
                        'title' => '事件源（如OSS）调用函数所需的角色。',
                        'description' => '事件源（如OSS）调用函数所需的角色。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'acs:ram::1234567890:role/fc-test',
                        'maxLength' => 300,
                    ],
                    'qualifier' => [
                        'title' => '函数的版本或别名。',
                        'description' => '函数的版本或别名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LATEST',
                    ],
                    'triggerConfig' => [
                        'title' => '触发器配置，针对不同类型的触发器，配置有所不同。',
                        'description' => '触发器配置，针对不同类型的触发器，配置有所不同。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"events":["oss:ObjectCreated:*"],"filter":{"key":{"prefix":"/prefix","suffix":".zip"}}}',
                    ],
                ],
            ],
            'VPCConfig' => [
                'title' => 'VPC配置',
                'description' => 'VPC配置',
                'type' => 'object',
                'properties' => [
                    'securityGroupId' => [
                        'title' => '安全组ID。',
                        'description' => '安全组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sg-bp18hj1wtxgy3b0***',
                        'maxLength' => 50,
                    ],
                    'vSwitchIds' => [
                        'title' => '交换机列表。',
                        'description' => '交换机列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '交换机ID。',
                            'type' => 'string',
                            'example' => 'vsw-bp1ozpcrdc6r****',
                        ],
                        'required' => false,
                        'maxItems' => 10,
                    ],
                    'vpcId' => [
                        'title' => 'VPC网络ID。',
                        'description' => 'VPC网络ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vpc-***',
                        'maxLength' => 50,
                    ],
                ],
            ],
            'Version' => [
                'title' => '版本信息',
                'description' => '版本信息',
                'type' => 'object',
                'properties' => [
                    'createdTime' => [
                        'title' => '创建时间',
                        'description' => '创建时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2006-01-02T15:04:05Z07:00',
                    ],
                    'description' => [
                        'title' => '版本描述信息',
                        'description' => '版本描述信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my version',
                    ],
                    'lastModifiedTime' => [
                        'title' => '更新时间',
                        'description' => '更新时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2006-01-02T15:04:05Z07:00',
                    ],
                    'versionId' => [
                        'title' => '版本ID',
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
            ],
            'WAFConfig' => [
                'title' => '自定义域名 WAF 开启/关闭 配置',
                'description' => '自定义域名WAF配置',
                'type' => 'object',
                'properties' => [
                    'enableWAF' => [
                        'title' => '是否开启 WAF 防护',
                        'description' => '是否开启WAF防护',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'WildcardRule' => [
                'title' => '自定义域名通配符重写规则配置',
                'description' => '自定义域名通配符重写规则配置',
                'type' => 'object',
                'properties' => [
                    'match' => [
                        'title' => '匹配规则',
                        'description' => '匹配规则',
                        'type' => 'string',
                        'required' => true,
                        'example' => '/api/*',
                        'maxLength' => 256,
                    ],
                    'replacement' => [
                        'title' => '替换规则',
                        'description' => '替换规则',
                        'type' => 'string',
                        'required' => true,
                        'example' => '/$1',
                        'maxLength' => 256,
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'CreateCustomDomain' => [
            'summary' => '创建自定义域名。',
            'path' => '/2023-03-30/custom-domains',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '178552',
                'abilityTreeNodes' => [
                    'FEATUREfc8VOFD7',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '自定义域名信息',
                        'description' => '自定义域名信息',
                        'required' => true,
                        '$ref' => '#/components/schemas/CreateCustomDomainInput',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '自定义域名信息',
                    'schema' => [
                        'title' => '自定义域名信息',
                        'description' => '自定义域名信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/CustomDomain',
                    ],
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"accountId\\": \\"\\",\\n  \\"apiVersion\\": \\"2023-03-30\\",\\n  \\"authConfig\\": {\\n    \\"authInfo\\": \\"{}\\",\\n    \\"authType\\": \\"anonymous, function, jwt\\"\\n  },\\n  \\"certConfig\\": {\\n    \\"certName\\": \\"my-cert\\",\\n    \\"certificate\\": \\"PEM format\\",\\n    \\"privateKey\\": \\"PEM format\\"\\n  },\\n  \\"createdTime\\": \\"2023-03-30T08:02:19Z\\",\\n  \\"domainName\\": \\"example.com\\",\\n  \\"lastModifiedTime\\": \\"2023-03-30T08:02:19Z\\",\\n  \\"protocol\\": \\"HTTP\\",\\n  \\"routeConfig\\": {\\n    \\"routes\\": [\\n      {\\n        \\"functionName\\": \\"myFunction\\",\\n        \\"methods\\": [\\n          \\"GET\\"\\n        ],\\n        \\"path\\": \\"/api/*\\",\\n        \\"qualifier\\": \\"myAlias\\",\\n        \\"rewriteConfig\\": {\\n          \\"equalRules\\": [\\n            {\\n              \\"match\\": \\"/old\\",\\n              \\"replacement\\": \\"/new\\"\\n            }\\n          ],\\n          \\"regexRules\\": [\\n            {\\n              \\"match\\": \\"^/api/.+?/(.*)\\",\\n              \\"replacement\\": \\"/api/v2/$1\\"\\n            }\\n          ],\\n          \\"wildcardRules\\": [\\n            {\\n              \\"match\\": \\"/api/*\\",\\n              \\"replacement\\": \\"/$1\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  },\\n  \\"subdomainCount\\": \\"1\\",\\n  \\"tlsConfig\\": {\\n    \\"cipherSuites\\": [\\n      \\"TLS_RSA_WITH_RC4_128_SHA\\"\\n    ],\\n    \\"maxVersion\\": \\"TLSv1.3\\",\\n    \\"minVersion\\": \\"TLSv1.0\\"\\n  },\\n  \\"wafConfig\\": {\\n    \\"enableWAF\\": true\\n  }\\n}","type":"json"}]',
            'title' => '创建自定义域名',
        ],
        'DeleteCustomDomain' => [
            'summary' => '删除自定义域名。',
            'path' => '/2023-03-30/custom-domains/{domainName}',
            'methods' => [
                'delete',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
                'abilityTreeCode' => '178514',
                'abilityTreeNodes' => [
                    'FEATUREfc8VOFD7',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'domainName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '域名',
                        'description' => '域名',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'foo.bar.com',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                204 => [
                    'description' => 'No Content',
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '删除自定义域名',
        ],
        'GetCustomDomain' => [
            'summary' => '获取自定义域名配置。',
            'path' => '/2023-03-30/custom-domains/{domainName}',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '178522',
                'abilityTreeNodes' => [
                    'FEATUREfc8VOFD7',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'domainName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '域名',
                        'description' => '域名',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'foo.bar.com',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '自定义域名信息',
                    'schema' => [
                        'title' => '自定义域名信息',
                        'description' => '自定义域名信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/CustomDomain',
                    ],
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"accountId\\": \\"\\",\\n  \\"apiVersion\\": \\"2023-03-30\\",\\n  \\"authConfig\\": {\\n    \\"authInfo\\": \\"{}\\",\\n    \\"authType\\": \\"anonymous, function, jwt\\"\\n  },\\n  \\"certConfig\\": {\\n    \\"certName\\": \\"my-cert\\",\\n    \\"certificate\\": \\"PEM format\\",\\n    \\"privateKey\\": \\"PEM format\\"\\n  },\\n  \\"createdTime\\": \\"2023-03-30T08:02:19Z\\",\\n  \\"domainName\\": \\"example.com\\",\\n  \\"lastModifiedTime\\": \\"2023-03-30T08:02:19Z\\",\\n  \\"protocol\\": \\"HTTP\\",\\n  \\"routeConfig\\": {\\n    \\"routes\\": [\\n      {\\n        \\"functionName\\": \\"myFunction\\",\\n        \\"methods\\": [\\n          \\"GET\\"\\n        ],\\n        \\"path\\": \\"/api/*\\",\\n        \\"qualifier\\": \\"myAlias\\",\\n        \\"rewriteConfig\\": {\\n          \\"equalRules\\": [\\n            {\\n              \\"match\\": \\"/old\\",\\n              \\"replacement\\": \\"/new\\"\\n            }\\n          ],\\n          \\"regexRules\\": [\\n            {\\n              \\"match\\": \\"^/api/.+?/(.*)\\",\\n              \\"replacement\\": \\"/api/v2/$1\\"\\n            }\\n          ],\\n          \\"wildcardRules\\": [\\n            {\\n              \\"match\\": \\"/api/*\\",\\n              \\"replacement\\": \\"/$1\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  },\\n  \\"subdomainCount\\": \\"1\\",\\n  \\"tlsConfig\\": {\\n    \\"cipherSuites\\": [\\n      \\"TLS_RSA_WITH_RC4_128_SHA\\"\\n    ],\\n    \\"maxVersion\\": \\"TLSv1.3\\",\\n    \\"minVersion\\": \\"TLSv1.0\\"\\n  },\\n  \\"wafConfig\\": {\\n    \\"enableWAF\\": true\\n  }\\n}","type":"json"}]',
            'title' => '获取自定义域名',
        ],
        'ListCustomDomains' => [
            'summary' => '获取自定义域名信息列表。',
            'path' => '/2023-03-30/custom-domains',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
                'abilityTreeCode' => '178557',
                'abilityTreeNodes' => [
                    'FEATUREfc8VOFD7',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'prefix',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '域名前缀',
                        'description' => '域名前缀',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'foo',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '分页起始标记',
                        'description' => '分页起始标记',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MTIzNCNhYmM=',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'limit',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '返回的自定义域名数量',
                        'description' => '返回的自定义域名数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '自定义域名列表',
                    'schema' => [
                        'title' => '自定义域名列表',
                        'description' => '自定义域名列表',
                        'required' => false,
                        '$ref' => '#/components/schemas/ListCustomDomainOutput',
                    ],
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"customDomains\\": [\\n    {\\n      \\"accountId\\": \\"\\",\\n      \\"apiVersion\\": \\"2023-03-30\\",\\n      \\"authConfig\\": {\\n        \\"authInfo\\": \\"{}\\",\\n        \\"authType\\": \\"anonymous, function, jwt\\"\\n      },\\n      \\"certConfig\\": {\\n        \\"certName\\": \\"my-cert\\",\\n        \\"certificate\\": \\"PEM format\\",\\n        \\"privateKey\\": \\"PEM format\\"\\n      },\\n      \\"createdTime\\": \\"2023-03-30T08:02:19Z\\",\\n      \\"domainName\\": \\"example.com\\",\\n      \\"lastModifiedTime\\": \\"2023-03-30T08:02:19Z\\",\\n      \\"protocol\\": \\"HTTP\\",\\n      \\"routeConfig\\": {\\n        \\"routes\\": [\\n          {\\n            \\"functionName\\": \\"myFunction\\",\\n            \\"methods\\": [\\n              \\"GET\\"\\n            ],\\n            \\"path\\": \\"/api/*\\",\\n            \\"qualifier\\": \\"myAlias\\",\\n            \\"rewriteConfig\\": {\\n              \\"equalRules\\": [\\n                {\\n                  \\"match\\": \\"/old\\",\\n                  \\"replacement\\": \\"/new\\"\\n                }\\n              ],\\n              \\"regexRules\\": [\\n                {\\n                  \\"match\\": \\"^/api/.+?/(.*)\\",\\n                  \\"replacement\\": \\"/api/v2/$1\\"\\n                }\\n              ],\\n              \\"wildcardRules\\": [\\n                {\\n                  \\"match\\": \\"/api/*\\",\\n                  \\"replacement\\": \\"/$1\\"\\n                }\\n              ]\\n            }\\n          }\\n        ]\\n      },\\n      \\"subdomainCount\\": \\"1\\",\\n      \\"tlsConfig\\": {\\n        \\"cipherSuites\\": [\\n          \\"TLS_RSA_WITH_RC4_128_SHA\\"\\n        ],\\n        \\"maxVersion\\": \\"TLSv1.3\\",\\n        \\"minVersion\\": \\"TLSv1.0\\"\\n      },\\n      \\"wafConfig\\": {\\n        \\"enableWAF\\": true\\n      }\\n    }\\n  ],\\n  \\"nextToken\\": \\"next_domain_name\\"\\n}","type":"json"}]',
            'title' => '列出自定义域名',
        ],
        'UpdateCustomDomain' => [
            'summary' => '更新自定义域名。',
            'path' => '/2023-03-30/custom-domains/{domainName}',
            'methods' => [
                'put',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '178510',
                'abilityTreeNodes' => [
                    'FEATUREfc8VOFD7',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'domainName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '域名',
                        'description' => '域名',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'foo.bar.com',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '自定义域名信息',
                        'description' => '自定义域名信息',
                        'required' => true,
                        '$ref' => '#/components/schemas/UpdateCustomDomainInput',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '自定义域名信息',
                    'schema' => [
                        'title' => '自定义域名信息',
                        'description' => '自定义域名信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/CustomDomain',
                    ],
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"accountId\\": \\"\\",\\n  \\"apiVersion\\": \\"2023-03-30\\",\\n  \\"authConfig\\": {\\n    \\"authInfo\\": \\"{}\\",\\n    \\"authType\\": \\"anonymous, function, jwt\\"\\n  },\\n  \\"certConfig\\": {\\n    \\"certName\\": \\"my-cert\\",\\n    \\"certificate\\": \\"PEM format\\",\\n    \\"privateKey\\": \\"PEM format\\"\\n  },\\n  \\"createdTime\\": \\"2023-03-30T08:02:19Z\\",\\n  \\"domainName\\": \\"example.com\\",\\n  \\"lastModifiedTime\\": \\"2023-03-30T08:02:19Z\\",\\n  \\"protocol\\": \\"HTTP\\",\\n  \\"routeConfig\\": {\\n    \\"routes\\": [\\n      {\\n        \\"functionName\\": \\"myFunction\\",\\n        \\"methods\\": [\\n          \\"GET\\"\\n        ],\\n        \\"path\\": \\"/api/*\\",\\n        \\"qualifier\\": \\"myAlias\\",\\n        \\"rewriteConfig\\": {\\n          \\"equalRules\\": [\\n            {\\n              \\"match\\": \\"/old\\",\\n              \\"replacement\\": \\"/new\\"\\n            }\\n          ],\\n          \\"regexRules\\": [\\n            {\\n              \\"match\\": \\"^/api/.+?/(.*)\\",\\n              \\"replacement\\": \\"/api/v2/$1\\"\\n            }\\n          ],\\n          \\"wildcardRules\\": [\\n            {\\n              \\"match\\": \\"/api/*\\",\\n              \\"replacement\\": \\"/$1\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  },\\n  \\"subdomainCount\\": \\"1\\",\\n  \\"tlsConfig\\": {\\n    \\"cipherSuites\\": [\\n      \\"TLS_RSA_WITH_RC4_128_SHA\\"\\n    ],\\n    \\"maxVersion\\": \\"TLSv1.3\\",\\n    \\"minVersion\\": \\"TLSv1.0\\"\\n  },\\n  \\"wafConfig\\": {\\n    \\"enableWAF\\": true\\n  }\\n}","type":"json"}]',
            'title' => '更新自定义域名',
        ],
        'DeleteFunctionVersion' => [
            'summary' => '删除函数版本。',
            'path' => '/2023-03-30/functions/{functionName}/versions/{versionId}',
            'methods' => [
                'delete',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-func',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'versionId',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数版本',
                        'description' => '函数版本',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                204 => [
                    'description' => 'No Content',
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '删除函数版本',
        ],
        'GetFunctionCode' => [
            'summary' => '获取函数代码包的详情。',
            'path' => '/2023-03-30/functions/{functionName}/code',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => 'Function name',
                        'description' => '函数名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-func',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '函数版本或别名',
                        'description' => '函数版本或别名',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LATEST',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '函数代码信息',
                    'schema' => [
                        'title' => '函数代码信息',
                        'description' => '函数代码信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/OutputFuncCode',
                    ],
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"checksum\\": \\"1234567890\\",\\n  \\"url\\": \\"http://func-code.oss-cn-shanghai.aliyuncs.com/1a2b3c4d5e6f\\"\\n}","type":"json"}]',
            'title' => '获取函数代码',
        ],
        'ListFunctionVersions' => [
            'summary' => '查询指定函数的版本列表。',
            'path' => '/2023-03-30/functions/{functionName}/versions',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-func',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '分页起始标记',
                        'description' => '分页起始标记',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MTIzNCNhYmM=',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'direction',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '版本排序方式',
                        'description' => '版本排序方式。BACKWARD或者FORWARD。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'BACKWARD',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'limit',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '返回的版本数量',
                        'description' => '返回的版本数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '函数版本列表',
                    'schema' => [
                        'title' => '函数版本列表',
                        'description' => '函数版本列表',
                        'required' => false,
                        '$ref' => '#/components/schemas/ListVersionsOutput',
                    ],
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"direction\\": \\"FORWARD\\",\\n  \\"nextToken\\": \\"3\\",\\n  \\"versions\\": [\\n    {\\n      \\"createdTime\\": \\"2006-01-02T15:04:05Z07:00\\",\\n      \\"description\\": \\"my version\\",\\n      \\"lastModifiedTime\\": \\"2006-01-02T15:04:05Z07:00\\",\\n      \\"versionId\\": \\"1\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '列出函数版本',
        ],
        'PublishFunctionVersion' => [
            'summary' => '发布函数版本。',
            'path' => '/2023-03-30/functions/{functionName}/versions',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-func',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数版本信息',
                        'description' => '函数版本信息',
                        'required' => true,
                        '$ref' => '#/components/schemas/PublishVersionInput',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '函数版本信息',
                    'schema' => [
                        'title' => '函数版本信息',
                        'description' => '函数版本信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Version',
                    ],
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"createdTime\\": \\"2006-01-02T15:04:05Z07:00\\",\\n  \\"description\\": \\"my version\\",\\n  \\"lastModifiedTime\\": \\"2006-01-02T15:04:05Z07:00\\",\\n  \\"versionId\\": \\"1\\"\\n}","type":"json"}]',
            'title' => '发布函数版本',
        ],
        'CreateFunction' => [
            'summary' => '创建函数。',
            'path' => '/2023-03-30/functions',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数配置信息',
                        'description' => '函数配置信息',
                        'required' => true,
                        '$ref' => '#/components/schemas/CreateFunctionInput',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '函数配置信息',
                    'schema' => [
                        'title' => '函数配置信息',
                        'description' => '函数配置信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Function',
                    ],
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"codeChecksum\\": \\"2825179536350****\\",\\n  \\"codeSize\\": 412,\\n  \\"cpu\\": 1,\\n  \\"createdTime\\": \\"2023-04-01T08:15:27Z\\",\\n  \\"customContainerConfig\\": {\\n    \\"accelerationInfo\\": {\\n      \\"status\\": \\"deprecated\\"\\n    },\\n    \\"accelerationType\\": \\"deprecated\\",\\n    \\"acrInstanceId\\": \\"deprecated\\",\\n    \\"command\\": [\\n      \\"arg1\\"\\n    ],\\n    \\"entrypoint\\": [\\n      \\"/code/bootstrap\\"\\n    ],\\n    \\"healthCheckConfig\\": {\\n      \\"failureThreshold\\": 1,\\n      \\"httpGetUrl\\": \\"/ready\\",\\n      \\"initialDelaySeconds\\": 1,\\n      \\"periodSeconds\\": 1,\\n      \\"successThreshold\\": 2,\\n      \\"timeoutSeconds\\": 2\\n    },\\n    \\"image\\": \\"registry-vpc.cn-hangzhou.aliyuncs.com/fc-demo/helloworld:v1\\",\\n    \\"port\\": 9000,\\n    \\"resolvedImageUri\\": \\"stand-sh-registry-vpc.cn-shanghai.cr.aliyuncs.com/fc-demo2/springboot-helloworld@sha256:68d1****0d64d6\\"\\n  },\\n  \\"customDNS\\": {\\n    \\"dnsOptions\\": [\\n      {\\n        \\"name\\": \\"ndots\\",\\n        \\"value\\": \\"2\\"\\n      }\\n    ],\\n    \\"nameServers\\": [\\n      \\"8.8.x.x\\"\\n    ],\\n    \\"searches\\": [\\n      \\"ns1.svc.cluster-domain.example\\"\\n    ]\\n  },\\n  \\"customRuntimeConfig\\": {\\n    \\"args\\": [\\n      \\"arg1\\"\\n    ],\\n    \\"command\\": [\\n      \\"/code/bootstrap\\"\\n    ],\\n    \\"healthCheckConfig\\": {\\n      \\"failureThreshold\\": 1,\\n      \\"httpGetUrl\\": \\"/ready\\",\\n      \\"initialDelaySeconds\\": 1,\\n      \\"periodSeconds\\": 1,\\n      \\"successThreshold\\": 2,\\n      \\"timeoutSeconds\\": 2\\n    },\\n    \\"port\\": 9000\\n  },\\n  \\"description\\": \\"my function\\",\\n  \\"diskSize\\": 512,\\n  \\"environmentVariables\\": {\\n    \\"key\\": \\"value1\\"\\n  },\\n  \\"functionArn\\": \\"acs:fc:cn-shanghai:123:functions/functionName\\",\\n  \\"functionId\\": \\"aa715851-1c20-4b89-a8fb-***\\",\\n  \\"functionName\\": \\"my-function-1\\",\\n  \\"gpuConfig\\": {\\n    \\"gpuMemorySize\\": 2048,\\n    \\"gpuType\\": \\"fc.gpu.ampere.1\\"\\n  },\\n  \\"handler\\": \\"index.handler\\",\\n  \\"instanceConcurrency\\": 1,\\n  \\"instanceLifecycleConfig\\": {\\n    \\"initializer\\": {\\n      \\"handler\\": \\"index.initializer\\",\\n      \\"timeout\\": 10\\n    },\\n    \\"preStop\\": {\\n      \\"handler\\": \\"index.initializer\\",\\n      \\"timeout\\": 10\\n    }\\n  },\\n  \\"internetAccess\\": true,\\n  \\"lastModifiedTime\\": \\"2023-05-01T08:15:27Z\\",\\n  \\"lastUpdateStatus\\": \\"InProgress\\",\\n  \\"lastUpdateStatusReason\\": \\"The system is currently processing the acceleration optimization for the image.\\",\\n  \\"lastUpdateStatusReasonCode\\": \\"ImageOptimizing\\",\\n  \\"layers\\": [\\n    {\\n      \\"arn\\": \\"acs:fc:cn-beijing:186824xxxxxx:layers/fc_layer/versions/1\\",\\n      \\"size\\": 421\\n    }\\n  ],\\n  \\"logConfig\\": {\\n    \\"enableInstanceMetrics\\": true,\\n    \\"enableRequestMetrics\\": true,\\n    \\"logBeginRule\\": \\"DefaultRegex\\",\\n    \\"logstore\\": \\"test-logstore\\",\\n    \\"project\\": \\"test-project\\"\\n  },\\n  \\"memorySize\\": 512,\\n  \\"nasConfig\\": {\\n    \\"groupId\\": 100,\\n    \\"mountPoints\\": [\\n      {\\n        \\"enableTLS\\": true,\\n        \\"mountDir\\": \\"/home/test\\",\\n        \\"serverAddr\\": \\"***-uni85.cn-hangzhou.nas.com:/\\"\\n      }\\n    ],\\n    \\"userId\\": 100\\n  },\\n  \\"ossMountConfig\\": {\\n    \\"mountPoints\\": [\\n      {\\n        \\"bucketName\\": \\"my-bucket\\",\\n        \\"bucketPath\\": \\"/my-dir\\",\\n        \\"endpoint\\": \\"http://oss-cn-shanghai.aliyuncs.com\\",\\n        \\"mountDir\\": \\"/mnt/dir\\",\\n        \\"readOnly\\": true\\n      }\\n    ]\\n  },\\n  \\"role\\": \\"acs:ram::188077086902****:role/fc-test\\",\\n  \\"runtime\\": \\"python3.10\\",\\n  \\"state\\": \\"Pending\\",\\n  \\"stateReason\\": \\"Function creating\\",\\n  \\"stateReasonCode\\": \\"Creating\\",\\n  \\"timeout\\": 60,\\n  \\"tracingConfig\\": {\\n    \\"params\\": {\\n      \\"key\\": \\"tracing_analysis_jaeger_endpoint\\"\\n    },\\n    \\"type\\": \\"Jaeger\\"\\n  },\\n  \\"vpcConfig\\": {\\n    \\"securityGroupId\\": \\"sg-bp18hj1wtxgy3b0***\\",\\n    \\"vSwitchIds\\": [\\n      \\"vsw-bp1ozpcrdc6r****\\"\\n    ],\\n    \\"vpcId\\": \\"vpc-***\\"\\n  }\\n}","type":"json"}]',
            'title' => '创建函数',
        ],
        'DeleteFunction' => [
            'summary' => '删除函数。',
            'path' => '/2023-03-30/functions/{functionName}',
            'methods' => [
                'delete',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
                'abilityTreeCode' => '178556',
                'abilityTreeNodes' => [
                    'FEATUREfcM7AF1D',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-func',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                204 => [
                    'description' => 'No Content',
                    'examples' => [],
                ],
                500 => [
                    'description' => 'Internal Server Error',
                    'headers' => [],
                    'schema' => [
                        'title' => 'Internal Server Error',
                        'description' => 'Internal Server Error',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '删除函数',
        ],
        'GetFunction' => [
            'summary' => '获取函数信息。',
            'path' => '/2023-03-30/functions/{functionName}',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '178530',
                'abilityTreeNodes' => [
                    'FEATUREfcM7AF1D',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-func',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '函数版本或别名',
                        'description' => '函数版本或别名',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LATEST',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '函数信息',
                    'schema' => [
                        'title' => '函数信息',
                        'description' => '函数信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Function',
                    ],
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"codeChecksum\\": \\"2825179536350****\\",\\n  \\"codeSize\\": 412,\\n  \\"cpu\\": 1,\\n  \\"createdTime\\": \\"2023-04-01T08:15:27Z\\",\\n  \\"customContainerConfig\\": {\\n    \\"accelerationInfo\\": {\\n      \\"status\\": \\"deprecated\\"\\n    },\\n    \\"accelerationType\\": \\"deprecated\\",\\n    \\"acrInstanceId\\": \\"deprecated\\",\\n    \\"command\\": [\\n      \\"arg1\\"\\n    ],\\n    \\"entrypoint\\": [\\n      \\"/code/bootstrap\\"\\n    ],\\n    \\"healthCheckConfig\\": {\\n      \\"failureThreshold\\": 1,\\n      \\"httpGetUrl\\": \\"/ready\\",\\n      \\"initialDelaySeconds\\": 1,\\n      \\"periodSeconds\\": 1,\\n      \\"successThreshold\\": 2,\\n      \\"timeoutSeconds\\": 2\\n    },\\n    \\"image\\": \\"registry-vpc.cn-hangzhou.aliyuncs.com/fc-demo/helloworld:v1\\",\\n    \\"port\\": 9000,\\n    \\"resolvedImageUri\\": \\"stand-sh-registry-vpc.cn-shanghai.cr.aliyuncs.com/fc-demo2/springboot-helloworld@sha256:68d1****0d64d6\\"\\n  },\\n  \\"customDNS\\": {\\n    \\"dnsOptions\\": [\\n      {\\n        \\"name\\": \\"ndots\\",\\n        \\"value\\": \\"2\\"\\n      }\\n    ],\\n    \\"nameServers\\": [\\n      \\"8.8.x.x\\"\\n    ],\\n    \\"searches\\": [\\n      \\"ns1.svc.cluster-domain.example\\"\\n    ]\\n  },\\n  \\"customRuntimeConfig\\": {\\n    \\"args\\": [\\n      \\"arg1\\"\\n    ],\\n    \\"command\\": [\\n      \\"/code/bootstrap\\"\\n    ],\\n    \\"healthCheckConfig\\": {\\n      \\"failureThreshold\\": 1,\\n      \\"httpGetUrl\\": \\"/ready\\",\\n      \\"initialDelaySeconds\\": 1,\\n      \\"periodSeconds\\": 1,\\n      \\"successThreshold\\": 2,\\n      \\"timeoutSeconds\\": 2\\n    },\\n    \\"port\\": 9000\\n  },\\n  \\"description\\": \\"my function\\",\\n  \\"diskSize\\": 512,\\n  \\"environmentVariables\\": {\\n    \\"key\\": \\"value1\\"\\n  },\\n  \\"functionArn\\": \\"acs:fc:cn-shanghai:123:functions/functionName\\",\\n  \\"functionId\\": \\"aa715851-1c20-4b89-a8fb-***\\",\\n  \\"functionName\\": \\"my-function-1\\",\\n  \\"gpuConfig\\": {\\n    \\"gpuMemorySize\\": 2048,\\n    \\"gpuType\\": \\"fc.gpu.ampere.1\\"\\n  },\\n  \\"handler\\": \\"index.handler\\",\\n  \\"instanceConcurrency\\": 1,\\n  \\"instanceLifecycleConfig\\": {\\n    \\"initializer\\": {\\n      \\"handler\\": \\"index.initializer\\",\\n      \\"timeout\\": 10\\n    },\\n    \\"preStop\\": {\\n      \\"handler\\": \\"index.initializer\\",\\n      \\"timeout\\": 10\\n    }\\n  },\\n  \\"internetAccess\\": true,\\n  \\"lastModifiedTime\\": \\"2023-05-01T08:15:27Z\\",\\n  \\"lastUpdateStatus\\": \\"InProgress\\",\\n  \\"lastUpdateStatusReason\\": \\"The system is currently processing the acceleration optimization for the image.\\",\\n  \\"lastUpdateStatusReasonCode\\": \\"ImageOptimizing\\",\\n  \\"layers\\": [\\n    {\\n      \\"arn\\": \\"acs:fc:cn-beijing:186824xxxxxx:layers/fc_layer/versions/1\\",\\n      \\"size\\": 421\\n    }\\n  ],\\n  \\"logConfig\\": {\\n    \\"enableInstanceMetrics\\": true,\\n    \\"enableRequestMetrics\\": true,\\n    \\"logBeginRule\\": \\"DefaultRegex\\",\\n    \\"logstore\\": \\"test-logstore\\",\\n    \\"project\\": \\"test-project\\"\\n  },\\n  \\"memorySize\\": 512,\\n  \\"nasConfig\\": {\\n    \\"groupId\\": 100,\\n    \\"mountPoints\\": [\\n      {\\n        \\"enableTLS\\": true,\\n        \\"mountDir\\": \\"/home/test\\",\\n        \\"serverAddr\\": \\"***-uni85.cn-hangzhou.nas.com:/\\"\\n      }\\n    ],\\n    \\"userId\\": 100\\n  },\\n  \\"ossMountConfig\\": {\\n    \\"mountPoints\\": [\\n      {\\n        \\"bucketName\\": \\"my-bucket\\",\\n        \\"bucketPath\\": \\"/my-dir\\",\\n        \\"endpoint\\": \\"http://oss-cn-shanghai.aliyuncs.com\\",\\n        \\"mountDir\\": \\"/mnt/dir\\",\\n        \\"readOnly\\": true\\n      }\\n    ]\\n  },\\n  \\"role\\": \\"acs:ram::188077086902****:role/fc-test\\",\\n  \\"runtime\\": \\"python3.10\\",\\n  \\"state\\": \\"Pending\\",\\n  \\"stateReason\\": \\"Function creating\\",\\n  \\"stateReasonCode\\": \\"Creating\\",\\n  \\"timeout\\": 60,\\n  \\"tracingConfig\\": {\\n    \\"params\\": {\\n      \\"key\\": \\"tracing_analysis_jaeger_endpoint\\"\\n    },\\n    \\"type\\": \\"Jaeger\\"\\n  },\\n  \\"vpcConfig\\": {\\n    \\"securityGroupId\\": \\"sg-bp18hj1wtxgy3b0***\\",\\n    \\"vSwitchIds\\": [\\n      \\"vsw-bp1ozpcrdc6r****\\"\\n    ],\\n    \\"vpcId\\": \\"vpc-***\\"\\n  }\\n}","type":"json"}]',
            'title' => '获取函数',
        ],
        'ListFunctions' => [
            'summary' => '获取函数列表。',
            'path' => '/2023-03-30/functions',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
                'abilityTreeCode' => '178520',
                'abilityTreeNodes' => [
                    'FEATUREfcM7AF1D',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'prefix',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '函数名称前缀',
                        'description' => '函数名称前缀。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my-func',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '分页起始标记',
                        'description' => '分页起始标记。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MTIzNCNhYmM=',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'limit',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '返回函数的数量',
                        'description' => '返回函数的数量，最小值为1，最大值为100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '函数列表',
                    'schema' => [
                        'title' => '函数列表',
                        'description' => '函数列表',
                        'required' => false,
                        '$ref' => '#/components/schemas/ListFunctionsOutput',
                    ],
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"functions\\": [\\n    {\\n      \\"codeChecksum\\": \\"2825179536350****\\",\\n      \\"codeSize\\": 412,\\n      \\"cpu\\": 1,\\n      \\"createdTime\\": \\"2023-04-01T08:15:27Z\\",\\n      \\"customContainerConfig\\": {\\n        \\"accelerationInfo\\": {\\n          \\"status\\": \\"deprecated\\"\\n        },\\n        \\"accelerationType\\": \\"deprecated\\",\\n        \\"acrInstanceId\\": \\"deprecated\\",\\n        \\"command\\": [\\n          \\"arg1\\"\\n        ],\\n        \\"entrypoint\\": [\\n          \\"/code/bootstrap\\"\\n        ],\\n        \\"healthCheckConfig\\": {\\n          \\"failureThreshold\\": 1,\\n          \\"httpGetUrl\\": \\"/ready\\",\\n          \\"initialDelaySeconds\\": 1,\\n          \\"periodSeconds\\": 1,\\n          \\"successThreshold\\": 2,\\n          \\"timeoutSeconds\\": 2\\n        },\\n        \\"image\\": \\"registry-vpc.cn-hangzhou.aliyuncs.com/fc-demo/helloworld:v1\\",\\n        \\"port\\": 9000,\\n        \\"resolvedImageUri\\": \\"stand-sh-registry-vpc.cn-shanghai.cr.aliyuncs.com/fc-demo2/springboot-helloworld@sha256:68d1****0d64d6\\"\\n      },\\n      \\"customDNS\\": {\\n        \\"dnsOptions\\": [\\n          {\\n            \\"name\\": \\"ndots\\",\\n            \\"value\\": \\"2\\"\\n          }\\n        ],\\n        \\"nameServers\\": [\\n          \\"8.8.x.x\\"\\n        ],\\n        \\"searches\\": [\\n          \\"ns1.svc.cluster-domain.example\\"\\n        ]\\n      },\\n      \\"customRuntimeConfig\\": {\\n        \\"args\\": [\\n          \\"arg1\\"\\n        ],\\n        \\"command\\": [\\n          \\"/code/bootstrap\\"\\n        ],\\n        \\"healthCheckConfig\\": {\\n          \\"failureThreshold\\": 1,\\n          \\"httpGetUrl\\": \\"/ready\\",\\n          \\"initialDelaySeconds\\": 1,\\n          \\"periodSeconds\\": 1,\\n          \\"successThreshold\\": 2,\\n          \\"timeoutSeconds\\": 2\\n        },\\n        \\"port\\": 9000\\n      },\\n      \\"description\\": \\"my function\\",\\n      \\"diskSize\\": 512,\\n      \\"environmentVariables\\": {\\n        \\"key\\": \\"value1\\"\\n      },\\n      \\"functionArn\\": \\"acs:fc:cn-shanghai:123:functions/functionName\\",\\n      \\"functionId\\": \\"aa715851-1c20-4b89-a8fb-***\\",\\n      \\"functionName\\": \\"my-function-1\\",\\n      \\"gpuConfig\\": {\\n        \\"gpuMemorySize\\": 2048,\\n        \\"gpuType\\": \\"fc.gpu.ampere.1\\"\\n      },\\n      \\"handler\\": \\"index.handler\\",\\n      \\"instanceConcurrency\\": 1,\\n      \\"instanceLifecycleConfig\\": {\\n        \\"initializer\\": {\\n          \\"handler\\": \\"index.initializer\\",\\n          \\"timeout\\": 10\\n        },\\n        \\"preStop\\": {\\n          \\"handler\\": \\"index.initializer\\",\\n          \\"timeout\\": 10\\n        }\\n      },\\n      \\"internetAccess\\": true,\\n      \\"lastModifiedTime\\": \\"2023-05-01T08:15:27Z\\",\\n      \\"lastUpdateStatus\\": \\"InProgress\\",\\n      \\"lastUpdateStatusReason\\": \\"The system is currently processing the acceleration optimization for the image.\\",\\n      \\"lastUpdateStatusReasonCode\\": \\"ImageOptimizing\\",\\n      \\"layers\\": [\\n        {\\n          \\"arn\\": \\"acs:fc:cn-beijing:186824xxxxxx:layers/fc_layer/versions/1\\",\\n          \\"size\\": 421\\n        }\\n      ],\\n      \\"logConfig\\": {\\n        \\"enableInstanceMetrics\\": true,\\n        \\"enableRequestMetrics\\": true,\\n        \\"logBeginRule\\": \\"DefaultRegex\\",\\n        \\"logstore\\": \\"test-logstore\\",\\n        \\"project\\": \\"test-project\\"\\n      },\\n      \\"memorySize\\": 512,\\n      \\"nasConfig\\": {\\n        \\"groupId\\": 100,\\n        \\"mountPoints\\": [\\n          {\\n            \\"enableTLS\\": true,\\n            \\"mountDir\\": \\"/home/test\\",\\n            \\"serverAddr\\": \\"***-uni85.cn-hangzhou.nas.com:/\\"\\n          }\\n        ],\\n        \\"userId\\": 100\\n      },\\n      \\"ossMountConfig\\": {\\n        \\"mountPoints\\": [\\n          {\\n            \\"bucketName\\": \\"my-bucket\\",\\n            \\"bucketPath\\": \\"/my-dir\\",\\n            \\"endpoint\\": \\"http://oss-cn-shanghai.aliyuncs.com\\",\\n            \\"mountDir\\": \\"/mnt/dir\\",\\n            \\"readOnly\\": true\\n          }\\n        ]\\n      },\\n      \\"role\\": \\"acs:ram::188077086902****:role/fc-test\\",\\n      \\"runtime\\": \\"python3.10\\",\\n      \\"state\\": \\"Pending\\",\\n      \\"stateReason\\": \\"Function creating\\",\\n      \\"stateReasonCode\\": \\"Creating\\",\\n      \\"timeout\\": 60,\\n      \\"tracingConfig\\": {\\n        \\"params\\": {\\n          \\"key\\": \\"tracing_analysis_jaeger_endpoint\\"\\n        },\\n        \\"type\\": \\"Jaeger\\"\\n      },\\n      \\"vpcConfig\\": {\\n        \\"securityGroupId\\": \\"sg-bp18hj1wtxgy3b0***\\",\\n        \\"vSwitchIds\\": [\\n          \\"vsw-bp1ozpcrdc6r****\\"\\n        ],\\n        \\"vpcId\\": \\"vpc-***\\"\\n      }\\n    }\\n  ],\\n  \\"nextToken\\": \\"next_function_name\\"\\n}","type":"json"}]',
            'title' => '列出函数',
        ],
        'InvokeFunction' => [
            'summary' => '调用执行函数。',
            'path' => '/2023-03-30/functions/{functionName}/invocations',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/octet-stream',
            ],
            'produces' => [
                'application/octet-stream',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '178547',
                'abilityTreeNodes' => [
                    'FEATUREfcF6EK4A',
                    'FEATUREfcRNHOYK',
                    'FEATUREfcYBHLF0',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-func',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '函数版本或别名',
                        'description' => '函数版本或别名',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LATEST',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'x-fc-invocation-type',
                    'in' => 'header',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '函数调用类型',
                        'description' => '函数调用类型。Sync或者Async。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Sync',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'x-fc-log-type',
                    'in' => 'header',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '函数调用返回日志类型',
                        'description' => '函数调用返回日志类型。None或者Tail。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Tail',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '函数调用参数',
                        'description' => '函数调用参数',
                        'type' => 'string',
                        'format' => 'binary',
                        'required' => false,
                        'example' => 'event',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'x-fc-async-task-id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '异步任务 ID。您需要事先开启异步任务。'."\n"
                            ."\n"
                            .'> 建议您在使用 SDK 调用时设置与业务相关的 ID，方便对相关执行进行后续操作。例如，一个视频处理函数可以使用视频文件名作为调用 ID，通过该 ID 可以查看视频是否处理完成或终止视频的处理。该 ID 的命名规则只能以英文大小写字母或下划线（_）开头，由英文大小写字母、数字（0-9）、下划线（_）及短划线（-）组成，不超过 128 个字符。如果您未设置异步调用的 ID，系统则会自动生成一个 ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test-id',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '函数调用响应',
                    'schema' => [
                        'title' => '函数调用响应',
                        'description' => '函数调用响应',
                        'type' => 'string',
                        'format' => 'binary',
                        'required' => false,
                        'example' => 'response',
                    ],
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"\\"response\\"","type":"json"}]',
            'title' => '调用函数',
        ],
        'UpdateFunction' => [
            'summary' => '更新函数信息。',
            'path' => '/2023-03-30/functions/{functionName}',
            'methods' => [
                'put',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '178513',
                'abilityTreeNodes' => [
                    'FEATUREfcM7AF1D',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-func',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数信息',
                        'description' => '函数信息',
                        'required' => true,
                        '$ref' => '#/components/schemas/UpdateFunctionInput',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '更新后的函数信息',
                    'schema' => [
                        'title' => '更新后的函数信息',
                        'description' => '更新后的函数信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Function',
                    ],
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"codeChecksum\\": \\"2825179536350****\\",\\n  \\"codeSize\\": 412,\\n  \\"cpu\\": 1,\\n  \\"createdTime\\": \\"2023-04-01T08:15:27Z\\",\\n  \\"customContainerConfig\\": {\\n    \\"accelerationInfo\\": {\\n      \\"status\\": \\"deprecated\\"\\n    },\\n    \\"accelerationType\\": \\"deprecated\\",\\n    \\"acrInstanceId\\": \\"deprecated\\",\\n    \\"command\\": [\\n      \\"arg1\\"\\n    ],\\n    \\"entrypoint\\": [\\n      \\"/code/bootstrap\\"\\n    ],\\n    \\"healthCheckConfig\\": {\\n      \\"failureThreshold\\": 1,\\n      \\"httpGetUrl\\": \\"/ready\\",\\n      \\"initialDelaySeconds\\": 1,\\n      \\"periodSeconds\\": 1,\\n      \\"successThreshold\\": 2,\\n      \\"timeoutSeconds\\": 2\\n    },\\n    \\"image\\": \\"registry-vpc.cn-hangzhou.aliyuncs.com/fc-demo/helloworld:v1\\",\\n    \\"port\\": 9000,\\n    \\"resolvedImageUri\\": \\"stand-sh-registry-vpc.cn-shanghai.cr.aliyuncs.com/fc-demo2/springboot-helloworld@sha256:68d1****0d64d6\\"\\n  },\\n  \\"customDNS\\": {\\n    \\"dnsOptions\\": [\\n      {\\n        \\"name\\": \\"ndots\\",\\n        \\"value\\": \\"2\\"\\n      }\\n    ],\\n    \\"nameServers\\": [\\n      \\"8.8.x.x\\"\\n    ],\\n    \\"searches\\": [\\n      \\"ns1.svc.cluster-domain.example\\"\\n    ]\\n  },\\n  \\"customRuntimeConfig\\": {\\n    \\"args\\": [\\n      \\"arg1\\"\\n    ],\\n    \\"command\\": [\\n      \\"/code/bootstrap\\"\\n    ],\\n    \\"healthCheckConfig\\": {\\n      \\"failureThreshold\\": 1,\\n      \\"httpGetUrl\\": \\"/ready\\",\\n      \\"initialDelaySeconds\\": 1,\\n      \\"periodSeconds\\": 1,\\n      \\"successThreshold\\": 2,\\n      \\"timeoutSeconds\\": 2\\n    },\\n    \\"port\\": 9000\\n  },\\n  \\"description\\": \\"my function\\",\\n  \\"diskSize\\": 512,\\n  \\"environmentVariables\\": {\\n    \\"key\\": \\"value1\\"\\n  },\\n  \\"functionArn\\": \\"acs:fc:cn-shanghai:123:functions/functionName\\",\\n  \\"functionId\\": \\"aa715851-1c20-4b89-a8fb-***\\",\\n  \\"functionName\\": \\"my-function-1\\",\\n  \\"gpuConfig\\": {\\n    \\"gpuMemorySize\\": 2048,\\n    \\"gpuType\\": \\"fc.gpu.ampere.1\\"\\n  },\\n  \\"handler\\": \\"index.handler\\",\\n  \\"instanceConcurrency\\": 1,\\n  \\"instanceLifecycleConfig\\": {\\n    \\"initializer\\": {\\n      \\"handler\\": \\"index.initializer\\",\\n      \\"timeout\\": 10\\n    },\\n    \\"preStop\\": {\\n      \\"handler\\": \\"index.initializer\\",\\n      \\"timeout\\": 10\\n    }\\n  },\\n  \\"internetAccess\\": true,\\n  \\"lastModifiedTime\\": \\"2023-05-01T08:15:27Z\\",\\n  \\"lastUpdateStatus\\": \\"InProgress\\",\\n  \\"lastUpdateStatusReason\\": \\"The system is currently processing the acceleration optimization for the image.\\",\\n  \\"lastUpdateStatusReasonCode\\": \\"ImageOptimizing\\",\\n  \\"layers\\": [\\n    {\\n      \\"arn\\": \\"acs:fc:cn-beijing:186824xxxxxx:layers/fc_layer/versions/1\\",\\n      \\"size\\": 421\\n    }\\n  ],\\n  \\"logConfig\\": {\\n    \\"enableInstanceMetrics\\": true,\\n    \\"enableRequestMetrics\\": true,\\n    \\"logBeginRule\\": \\"DefaultRegex\\",\\n    \\"logstore\\": \\"test-logstore\\",\\n    \\"project\\": \\"test-project\\"\\n  },\\n  \\"memorySize\\": 512,\\n  \\"nasConfig\\": {\\n    \\"groupId\\": 100,\\n    \\"mountPoints\\": [\\n      {\\n        \\"enableTLS\\": true,\\n        \\"mountDir\\": \\"/home/test\\",\\n        \\"serverAddr\\": \\"***-uni85.cn-hangzhou.nas.com:/\\"\\n      }\\n    ],\\n    \\"userId\\": 100\\n  },\\n  \\"ossMountConfig\\": {\\n    \\"mountPoints\\": [\\n      {\\n        \\"bucketName\\": \\"my-bucket\\",\\n        \\"bucketPath\\": \\"/my-dir\\",\\n        \\"endpoint\\": \\"http://oss-cn-shanghai.aliyuncs.com\\",\\n        \\"mountDir\\": \\"/mnt/dir\\",\\n        \\"readOnly\\": true\\n      }\\n    ]\\n  },\\n  \\"role\\": \\"acs:ram::188077086902****:role/fc-test\\",\\n  \\"runtime\\": \\"python3.10\\",\\n  \\"state\\": \\"Pending\\",\\n  \\"stateReason\\": \\"Function creating\\",\\n  \\"stateReasonCode\\": \\"Creating\\",\\n  \\"timeout\\": 60,\\n  \\"tracingConfig\\": {\\n    \\"params\\": {\\n      \\"key\\": \\"tracing_analysis_jaeger_endpoint\\"\\n    },\\n    \\"type\\": \\"Jaeger\\"\\n  },\\n  \\"vpcConfig\\": {\\n    \\"securityGroupId\\": \\"sg-bp18hj1wtxgy3b0***\\",\\n    \\"vSwitchIds\\": [\\n      \\"vsw-bp1ozpcrdc6r****\\"\\n    ],\\n    \\"vpcId\\": \\"vpc-***\\"\\n  }\\n}","type":"json"}]',
            'title' => '更新函数',
        ],
        'DeleteAlias' => [
            'summary' => '删除别名。',
            'path' => '/2023-03-30/functions/{functionName}/aliases/{aliasName}',
            'methods' => [
                'delete',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-func',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'aliasName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数别名名称',
                        'description' => '函数别名名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-alias',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                204 => [
                    'description' => 'No Content',
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '删除别名',
        ],
        'GetAlias' => [
            'summary' => '获取别名信息。',
            'path' => '/2023-03-30/functions/{functionName}/aliases/{aliasName}',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-func',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'aliasName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数别名名称',
                        'description' => '函数别名名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-alias',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '函数别名信息',
                    'schema' => [
                        'title' => '函数别名信息',
                        'description' => '函数别名信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Alias',
                    ],
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"additionalVersionWeight\\": {\\n    \\"key\\": 0.5\\n  },\\n  \\"aliasName\\": \\"prod\\",\\n  \\"createdTime\\": \\"2006-01-02T15:04:05Z07:00\\",\\n  \\"description\\": \\"alias for pre env\\",\\n  \\"lastModifiedTime\\": \\"2006-01-02T15:04:05Z07:00\\",\\n  \\"versionId\\": \\"1\\"\\n}","type":"json"}]',
            'title' => '获取别名',
        ],
        'ListAliases' => [
            'summary' => '查询别名列表信息。',
            'path' => '/2023-03-30/functions/{functionName}/aliases',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-func',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'prefix',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '别名名称前缀',
                        'description' => '别名名称前缀',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my-alias',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '分页起始标记',
                        'description' => '分页起始标记',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MTIzNCNhYmM=',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'limit',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '返回的别名数量',
                        'description' => '返回的别名数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '函数别名信息',
                    'schema' => [
                        'title' => '函数别名信息',
                        'description' => '函数别名信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/ListAliasesOutput',
                    ],
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"aliases\\": [\\n    {\\n      \\"additionalVersionWeight\\": {\\n        \\"key\\": 0.5\\n      },\\n      \\"aliasName\\": \\"prod\\",\\n      \\"createdTime\\": \\"2006-01-02T15:04:05Z07:00\\",\\n      \\"description\\": \\"alias for pre env\\",\\n      \\"lastModifiedTime\\": \\"2006-01-02T15:04:05Z07:00\\",\\n      \\"versionId\\": \\"1\\"\\n    }\\n  ],\\n  \\"nextToken\\": \\"test\\"\\n}","type":"json"}]',
            'title' => '列出别名',
        ],
        'UpdateAlias' => [
            'summary' => '更新别名。',
            'path' => '/2023-03-30/functions/{functionName}/aliases/{aliasName}',
            'methods' => [
                'put',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-func',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'aliasName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数别名名称',
                        'description' => '函数别名名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-alias',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '待更新的别名信息',
                        'description' => '待更新的别名信息',
                        'required' => true,
                        '$ref' => '#/components/schemas/UpdateAliasInput',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '更新后的别名信息',
                    'schema' => [
                        'title' => '更新后的别名信息',
                        'description' => '更新后的别名信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Alias',
                    ],
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"additionalVersionWeight\\": {\\n    \\"key\\": 0.5\\n  },\\n  \\"aliasName\\": \\"prod\\",\\n  \\"createdTime\\": \\"2006-01-02T15:04:05Z07:00\\",\\n  \\"description\\": \\"alias for pre env\\",\\n  \\"lastModifiedTime\\": \\"2006-01-02T15:04:05Z07:00\\",\\n  \\"versionId\\": \\"1\\"\\n}","type":"json"}]',
            'title' => '更新别名',
        ],
        'CreateAlias' => [
            'summary' => '创建别名。',
            'path' => '/2023-03-30/functions/{functionName}/aliases',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-func',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '创建别名的请求参数',
                        'description' => '创建别名的请求参数',
                        'required' => true,
                        '$ref' => '#/components/schemas/CreateAliasInput',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '创建的别名信息',
                    'schema' => [
                        'title' => '创建的别名信息',
                        'description' => '创建的别名信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Alias',
                    ],
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"additionalVersionWeight\\": {\\n    \\"key\\": 0.5\\n  },\\n  \\"aliasName\\": \\"prod\\",\\n  \\"createdTime\\": \\"2006-01-02T15:04:05Z07:00\\",\\n  \\"description\\": \\"alias for pre env\\",\\n  \\"lastModifiedTime\\": \\"2006-01-02T15:04:05Z07:00\\",\\n  \\"versionId\\": \\"1\\"\\n}","type":"json"}]',
            'title' => '创建别名',
        ],
        'CreateTrigger' => [
            'summary' => '创建触发器。',
            'path' => '/2023-03-30/functions/{functionName}/triggers',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '178518',
                'abilityTreeNodes' => [
                    'FEATUREfc0CDUNQ',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-func',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '触发器配置',
                        'description' => '触发器配置',
                        'required' => true,
                        '$ref' => '#/components/schemas/CreateTriggerInput',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '触发器配置',
                    'schema' => [
                        'title' => '触发器配置',
                        'description' => '触发器配置',
                        'required' => false,
                        '$ref' => '#/components/schemas/Trigger',
                    ],
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"createdTime\\": \\"\\",\\n  \\"description\\": \\"\\",\\n  \\"httpTrigger\\": {\\n    \\"urlInternet\\": \\"https://svc-func-xxxxxxxx.cn-hangzhou.fcapp.run\\",\\n    \\"urlIntranet\\": \\"https://svc-func-xxxxxxxx.cn-hangzhou-vpc.fcapp.run\\"\\n  },\\n  \\"invocationRole\\": \\"\\",\\n  \\"lastModifiedTime\\": \\"\\",\\n  \\"qualifier\\": \\"\\",\\n  \\"sourceArn\\": \\"\\",\\n  \\"status\\": \\"\\",\\n  \\"targetArn\\": \\"\\",\\n  \\"triggerConfig\\": \\"\\",\\n  \\"triggerId\\": \\"\\",\\n  \\"triggerName\\": \\"\\",\\n  \\"triggerType\\": \\"\\"\\n}","type":"json"}]',
            'title' => '创建触发器',
        ],
        'DeleteTrigger' => [
            'summary' => '删除指定的触发器。',
            'path' => '/2023-03-30/functions/{functionName}/triggers/{triggerName}',
            'methods' => [
                'delete',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
                'abilityTreeCode' => '178540',
                'abilityTreeNodes' => [
                    'FEATUREfc0CDUNQ',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-func',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'triggerName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '触发器名称',
                        'description' => '触发器名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-trigger',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                204 => [
                    'description' => 'No Content',
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '删除触发器',
        ],
        'GetTrigger' => [
            'summary' => '获取指定的触发器详情。',
            'path' => '/2023-03-30/functions/{functionName}/triggers/{triggerName}',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '178539',
                'abilityTreeNodes' => [
                    'FEATUREfc0CDUNQ',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-func',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'triggerName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '触发器名称',
                        'description' => '触发器名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-trigger',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '触发器配置',
                    'schema' => [
                        'title' => '触发器配置',
                        'description' => '触发器配置',
                        'required' => false,
                        '$ref' => '#/components/schemas/Trigger',
                    ],
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"createdTime\\": \\"\\",\\n  \\"description\\": \\"\\",\\n  \\"httpTrigger\\": {\\n    \\"urlInternet\\": \\"https://svc-func-xxxxxxxx.cn-hangzhou.fcapp.run\\",\\n    \\"urlIntranet\\": \\"https://svc-func-xxxxxxxx.cn-hangzhou-vpc.fcapp.run\\"\\n  },\\n  \\"invocationRole\\": \\"\\",\\n  \\"lastModifiedTime\\": \\"\\",\\n  \\"qualifier\\": \\"\\",\\n  \\"sourceArn\\": \\"\\",\\n  \\"status\\": \\"\\",\\n  \\"targetArn\\": \\"\\",\\n  \\"triggerConfig\\": \\"\\",\\n  \\"triggerId\\": \\"\\",\\n  \\"triggerName\\": \\"\\",\\n  \\"triggerType\\": \\"\\"\\n}","type":"json"}]',
            'title' => '获取触发器',
        ],
        'ListTriggers' => [
            'summary' => '查询指定函数的触发器列表。',
            'path' => '/2023-03-30/functions/{functionName}/triggers',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
                'abilityTreeCode' => '178550',
                'abilityTreeNodes' => [
                    'FEATUREfc0CDUNQ',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-func',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'prefix',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '触发器名称前缀',
                        'description' => '触发器名称前缀',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my-trigger',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '分页起始标记',
                        'description' => '分页起始标记',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MTIzNCNhYmM=',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'limit',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '返回的触发器数量',
                        'description' => '返回的触发器数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '触发器列表',
                    'schema' => [
                        'title' => '触发器列表',
                        'description' => '触发器列表',
                        'required' => false,
                        '$ref' => '#/components/schemas/ListTriggersOutput',
                    ],
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"nextToken\\": \\"next_token\\",\\n  \\"triggers\\": [\\n    {\\n      \\"createdTime\\": \\"\\",\\n      \\"description\\": \\"\\",\\n      \\"httpTrigger\\": {\\n        \\"urlInternet\\": \\"https://svc-func-xxxxxxxx.cn-hangzhou.fcapp.run\\",\\n        \\"urlIntranet\\": \\"https://svc-func-xxxxxxxx.cn-hangzhou-vpc.fcapp.run\\"\\n      },\\n      \\"invocationRole\\": \\"\\",\\n      \\"lastModifiedTime\\": \\"\\",\\n      \\"qualifier\\": \\"\\",\\n      \\"sourceArn\\": \\"\\",\\n      \\"status\\": \\"\\",\\n      \\"targetArn\\": \\"\\",\\n      \\"triggerConfig\\": \\"\\",\\n      \\"triggerId\\": \\"\\",\\n      \\"triggerName\\": \\"\\",\\n      \\"triggerType\\": \\"\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '列出触发器',
        ],
        'UpdateTrigger' => [
            'summary' => '更新触发器信息。',
            'path' => '/2023-03-30/functions/{functionName}/triggers/{triggerName}',
            'methods' => [
                'put',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '178536',
                'abilityTreeNodes' => [
                    'FEATUREfc0CDUNQ',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-func',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'triggerName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '触发器名称',
                        'description' => '触发器名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-trigger',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '触发器配置',
                        'description' => '触发器配置',
                        'required' => true,
                        '$ref' => '#/components/schemas/UpdateTriggerInput',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '更新后的触发器配置',
                    'schema' => [
                        'title' => '更新后的触发器配置',
                        'description' => '更新后的触发器配置',
                        'required' => false,
                        '$ref' => '#/components/schemas/Trigger',
                    ],
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"createdTime\\": \\"\\",\\n  \\"description\\": \\"\\",\\n  \\"httpTrigger\\": {\\n    \\"urlInternet\\": \\"https://svc-func-xxxxxxxx.cn-hangzhou.fcapp.run\\",\\n    \\"urlIntranet\\": \\"https://svc-func-xxxxxxxx.cn-hangzhou-vpc.fcapp.run\\"\\n  },\\n  \\"invocationRole\\": \\"\\",\\n  \\"lastModifiedTime\\": \\"\\",\\n  \\"qualifier\\": \\"\\",\\n  \\"sourceArn\\": \\"\\",\\n  \\"status\\": \\"\\",\\n  \\"targetArn\\": \\"\\",\\n  \\"triggerConfig\\": \\"\\",\\n  \\"triggerId\\": \\"\\",\\n  \\"triggerName\\": \\"\\",\\n  \\"triggerType\\": \\"\\"\\n}","type":"json"}]',
            'title' => '更新触发器',
        ],
        'DeleteAsyncInvokeConfig' => [
            'summary' => '删除异步调用配置。',
            'path' => '/2023-03-30/functions/{functionName}/async-invoke-config',
            'methods' => [
                'delete',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-func',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '函数版本或别名',
                        'description' => '函数版本或别名',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LATEST',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                204 => [
                    'description' => 'No Content',
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '删除异步配置',
        ],
        'GetAsyncInvokeConfig' => [
            'summary' => '获取指定函数的异步调用配置。',
            'path' => '/2023-03-30/functions/{functionName}/async-invoke-config',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-func',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '函数版本或别名',
                        'description' => '函数版本或别名',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LATEST',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '函数异步调用配置信息',
                    'schema' => [
                        'title' => '函数异步调用配置信息',
                        'description' => '函数异步调用配置信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/AsyncConfig',
                    ],
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"asyncTask\\": true,\\n  \\"createdTime\\": \\"2006-01-02T15:04:05Z07:00\\",\\n  \\"destinationConfig\\": {\\n    \\"onFailure\\": {\\n      \\"destination\\": \\"acs:fc:cn-shanghai:xxx:functions/f1\\"\\n    },\\n    \\"onSuccess\\": {\\n      \\"destination\\": \\"acs:fc:cn-shanghai:xxx:functions/f1\\"\\n    }\\n  },\\n  \\"functionArn\\": \\"acs:fc:cn-shanghai:1234/functions/my-func\\",\\n  \\"lastModifiedTime\\": \\"2006-01-02T15:04:05Z07:00\\",\\n  \\"maxAsyncEventAgeInSeconds\\": 3600,\\n  \\"maxAsyncRetryAttempts\\": 3\\n}","type":"json"}]',
            'title' => '获取异步配置',
        ],
        'ListAsyncInvokeConfigs' => [
            'summary' => '查询指定函数的所有异步配置信息。',
            'path' => '/2023-03-30/async-invoke-configs',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '函数名称，若不指定则列出所有函数的异步调用配置',
                        'description' => '函数名称，若不指定则列出所有函数的异步调用配置',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my-func',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '分页起始标记',
                        'description' => '分页起始标记',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MTIzNCNhYmM=',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'limit',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '返回的数量限制',
                        'description' => '返回的数量限制',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '函数异步调用配置列表',
                    'schema' => [
                        'title' => '函数异步调用配置列表',
                        'description' => '函数异步调用配置列表',
                        'required' => false,
                        '$ref' => '#/components/schemas/ListAsyncInvokeConfigOutput',
                    ],
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"configs\\": [\\n    {\\n      \\"asyncTask\\": true,\\n      \\"createdTime\\": \\"2006-01-02T15:04:05Z07:00\\",\\n      \\"destinationConfig\\": {\\n        \\"onFailure\\": {\\n          \\"destination\\": \\"acs:fc:cn-shanghai:xxx:functions/f1\\"\\n        },\\n        \\"onSuccess\\": {\\n          \\"destination\\": \\"acs:fc:cn-shanghai:xxx:functions/f1\\"\\n        }\\n      },\\n      \\"functionArn\\": \\"acs:fc:cn-shanghai:1234/functions/my-func\\",\\n      \\"lastModifiedTime\\": \\"2006-01-02T15:04:05Z07:00\\",\\n      \\"maxAsyncEventAgeInSeconds\\": 3600,\\n      \\"maxAsyncRetryAttempts\\": 3\\n    }\\n  ],\\n  \\"nextToken\\": \\"8bj81uI8n****\\"\\n}","type":"json"}]',
            'title' => '列出函数异步配置',
        ],
        'PutAsyncInvokeConfig' => [
            'summary' => '创建或更新函数的异步调用配置。',
            'path' => '/2023-03-30/functions/{functionName}/async-invoke-config',
            'methods' => [
                'put',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '178523',
                'abilityTreeNodes' => [
                    'FEATUREfcM7AF1D',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数异步调用配置',
                        'description' => '函数异步调用配置',
                        'required' => true,
                        '$ref' => '#/components/schemas/PutAsyncInvokeConfigInput',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-func',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '函数版本或别名',
                        'description' => '函数版本或别名',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LATEST',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '函数异步调用配置信息',
                    'schema' => [
                        'title' => '函数异步调用配置信息',
                        'description' => '函数异步调用配置信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/AsyncConfig',
                    ],
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"asyncTask\\": true,\\n  \\"createdTime\\": \\"2006-01-02T15:04:05Z07:00\\",\\n  \\"destinationConfig\\": {\\n    \\"onFailure\\": {\\n      \\"destination\\": \\"acs:fc:cn-shanghai:xxx:functions/f1\\"\\n    },\\n    \\"onSuccess\\": {\\n      \\"destination\\": \\"acs:fc:cn-shanghai:xxx:functions/f1\\"\\n    }\\n  },\\n  \\"functionArn\\": \\"acs:fc:cn-shanghai:1234/functions/my-func\\",\\n  \\"lastModifiedTime\\": \\"2006-01-02T15:04:05Z07:00\\",\\n  \\"maxAsyncEventAgeInSeconds\\": 3600,\\n  \\"maxAsyncRetryAttempts\\": 3\\n}","type":"json"}]',
            'title' => '设置函数异步配置',
        ],
        'DeleteProvisionConfig' => [
            'summary' => '删除预留配置。',
            'path' => '/2023-03-30/functions/{functionName}/provision-config',
            'methods' => [
                'delete',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-func',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '函数别名或LATEST',
                        'description' => '函数别名或LATEST',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LATEST',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                204 => [
                    'description' => 'No Content',
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '删除预留配置',
        ],
        'GetProvisionConfig' => [
            'summary' => '获取预留配置。',
            'path' => '/2023-03-30/functions/{functionName}/provision-config',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-func',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '函数别名或LATEST',
                        'description' => '函数别名或LATEST',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LATEST',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '预留配置信息',
                    'schema' => [
                        'title' => '预留配置信息',
                        'description' => '预留配置信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/ProvisionConfig',
                    ],
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"alwaysAllocateCPU\\": true,\\n  \\"current\\": 1,\\n  \\"currentError\\": \\"image not found\\",\\n  \\"functionArn\\": \\"acs:fc:cn-shanghai:124:functions/myFunction\\",\\n  \\"scheduledActions\\": [\\n    {\\n      \\"endTime\\": \\"2024-03-10T10:10:10Z\\",\\n      \\"name\\": \\"test_1\\",\\n      \\"scheduleExpression\\": \\"cron(0 0 22 * * *)\\",\\n      \\"startTime\\": \\"2023-03-10T10:10:10Z\\",\\n      \\"target\\": 50\\n    }\\n  ],\\n  \\"target\\": 5,\\n  \\"targetTrackingPolicies\\": [\\n    {\\n      \\"endTime\\": \\"2024-03-10T10:10:10Z\\",\\n      \\"maxCapacity\\": 10,\\n      \\"metricTarget\\": 0.6,\\n      \\"metricType\\": \\"CPUUtilization\\",\\n      \\"minCapacity\\": 1,\\n      \\"name\\": \\"test_1\\",\\n      \\"startTime\\": \\"2023-03-10T10:10:10Z\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取预留配置',
        ],
        'ListProvisionConfigs' => [
            'summary' => '查询预留配置列表。',
            'path' => '/2023-03-30/provision-configs',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '函数名称，若不指定则列出所有函数的预留配置',
                        'description' => '函数名称，若不指定则列出所有函数的预留配置',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my-func',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '分页起始标记',
                        'description' => '分页起始标记',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MTIzNCNhYmM=',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'limit',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '返回的预留配置数量',
                        'description' => '返回的预留配置数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '预留配置列表',
                    'schema' => [
                        'title' => '预留配置列表',
                        'description' => '预留配置列表',
                        'required' => false,
                        '$ref' => '#/components/schemas/ListProvisionConfigsOutput',
                    ],
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"nextToken\\": \\"next_token\\",\\n  \\"provisionConfigs\\": [\\n    {\\n      \\"alwaysAllocateCPU\\": true,\\n      \\"current\\": 1,\\n      \\"currentError\\": \\"image not found\\",\\n      \\"functionArn\\": \\"acs:fc:cn-shanghai:124:functions/myFunction\\",\\n      \\"scheduledActions\\": [\\n        {\\n          \\"endTime\\": \\"2024-03-10T10:10:10Z\\",\\n          \\"name\\": \\"test_1\\",\\n          \\"scheduleExpression\\": \\"cron(0 0 22 * * *)\\",\\n          \\"startTime\\": \\"2023-03-10T10:10:10Z\\",\\n          \\"target\\": 50\\n        }\\n      ],\\n      \\"target\\": 5,\\n      \\"targetTrackingPolicies\\": [\\n        {\\n          \\"endTime\\": \\"2024-03-10T10:10:10Z\\",\\n          \\"maxCapacity\\": 10,\\n          \\"metricTarget\\": 0.6,\\n          \\"metricType\\": \\"CPUUtilization\\",\\n          \\"minCapacity\\": 1,\\n          \\"name\\": \\"test_1\\",\\n          \\"startTime\\": \\"2023-03-10T10:10:10Z\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '列出函数预留配置',
        ],
        'PutProvisionConfig' => [
            'summary' => '创建预留配置。',
            'path' => '/2023-03-30/functions/{functionName}/provision-config',
            'methods' => [
                'put',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-func',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '函数别名或LATEST',
                        'description' => '函数别名或LATEST',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LATEST',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '预留配置信息',
                        'description' => '预留配置信息',
                        'required' => true,
                        '$ref' => '#/components/schemas/PutProvisionConfigInput',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '预留配置信息',
                    'schema' => [
                        'title' => '预留配置信息',
                        'description' => '预留配置信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/ProvisionConfig',
                    ],
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"alwaysAllocateCPU\\": true,\\n  \\"current\\": 1,\\n  \\"currentError\\": \\"image not found\\",\\n  \\"functionArn\\": \\"acs:fc:cn-shanghai:124:functions/myFunction\\",\\n  \\"scheduledActions\\": [\\n    {\\n      \\"endTime\\": \\"2024-03-10T10:10:10Z\\",\\n      \\"name\\": \\"test_1\\",\\n      \\"scheduleExpression\\": \\"cron(0 0 22 * * *)\\",\\n      \\"startTime\\": \\"2023-03-10T10:10:10Z\\",\\n      \\"target\\": 50\\n    }\\n  ],\\n  \\"target\\": 5,\\n  \\"targetTrackingPolicies\\": [\\n    {\\n      \\"endTime\\": \\"2024-03-10T10:10:10Z\\",\\n      \\"maxCapacity\\": 10,\\n      \\"metricTarget\\": 0.6,\\n      \\"metricType\\": \\"CPUUtilization\\",\\n      \\"minCapacity\\": 1,\\n      \\"name\\": \\"test_1\\",\\n      \\"startTime\\": \\"2023-03-10T10:10:10Z\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '设置函数预留实例',
        ],
        'DeleteConcurrencyConfig' => [
            'summary' => '删除并发度配置。',
            'path' => '/2023-03-30/functions/{functionName}/concurrency',
            'methods' => [
                'delete',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-func',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                204 => [
                    'description' => 'No Content',
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '删除并发度配置',
        ],
        'GetConcurrencyConfig' => [
            'summary' => '获取并发度配置。',
            'path' => '/2023-03-30/functions/{functionName}/concurrency',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-func',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '函数并发度配置',
                    'schema' => [
                        'title' => '函数并发度配置',
                        'description' => '函数并发度配置',
                        'required' => false,
                        '$ref' => '#/components/schemas/ConcurrencyConfig',
                    ],
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"functionArn\\": \\"acs:fc:cn-shanghai:123:functions/demo\\",\\n  \\"reservedConcurrency\\": 10\\n}","type":"json"}]',
            'title' => '获取并发度配置',
        ],
        'ListConcurrencyConfigs' => [
            'summary' => '查询并发度配置列表。',
            'path' => '/2023-03-30/concurrency-configs',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '函数名称，若不指定则列出所有函数的并发度配置',
                        'description' => '函数名称，若不指定则列出所有函数的并发度配置',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my-func',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '分页起始标记',
                        'description' => '分页起始标记',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MTIzNCNhYmM=',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'limit',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '返回的数量限制',
                        'description' => '返回的数量限制',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '函数并发度配置列表',
                    'schema' => [
                        'title' => '函数并发度配置列表',
                        'description' => '函数并发度配置列表',
                        'required' => false,
                        '$ref' => '#/components/schemas/ListConcurrencyConfigsOutput',
                    ],
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"configs\\": [\\n    {\\n      \\"functionArn\\": \\"acs:fc:cn-shanghai:123:functions/demo\\",\\n      \\"reservedConcurrency\\": 10\\n    }\\n  ],\\n  \\"nextToken\\": \\"next_token\\"\\n}","type":"json"}]',
            'title' => '列出函数并发度配置',
        ],
        'PutConcurrencyConfig' => [
            'summary' => '设置函数并发度。',
            'path' => '/2023-03-30/functions/{functionName}/concurrency',
            'methods' => [
                'put',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-func',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数并发度配置信息',
                        'description' => '函数并发度配置信息',
                        'required' => true,
                        '$ref' => '#/components/schemas/PutConcurrencyInput',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '函数并发度配置信息',
                    'schema' => [
                        'title' => '函数并发度配置信息',
                        'description' => '函数并发度配置信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/ConcurrencyConfig',
                    ],
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"functionArn\\": \\"acs:fc:cn-shanghai:123:functions/demo\\",\\n  \\"reservedConcurrency\\": 10\\n}","type":"json"}]',
            'title' => '设置函数并发度',
        ],
        'CreateLayerVersion' => [
            'summary' => '发布层版本。',
            'path' => '/2023-03-30/layers/{layerName}/versions',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'layerName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '层名称',
                        'description' => '层名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-layer',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '层配置信息',
                        'description' => '层配置信息',
                        'required' => true,
                        '$ref' => '#/components/schemas/CreateLayerVersionInput',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '层配置信息',
                    'schema' => [
                        'title' => '层配置信息',
                        'description' => '层配置信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Layer',
                    ],
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"acl\\": \\"0\\",\\n  \\"code\\": {\\n    \\"location\\": \\"https://xyz.oss-cn-shanghai.aliyuncs.com/xxx/xxx/xxx\\",\\n    \\"repositoryType\\": \\"OSS\\"\\n  },\\n  \\"codeChecksum\\": \\"2825179536350****\\",\\n  \\"codeSize\\": 421,\\n  \\"compatibleRuntime\\": [\\n    \\"python3.10\\"\\n  ],\\n  \\"createTime\\": \\"2023-03-30T11:08:00Z\\",\\n  \\"description\\": \\"My first layer\\",\\n  \\"layerName\\": \\"MyLayer\\",\\n  \\"layerVersionArn\\": \\"acs:fc:cn-beijing:186824xxxxxx:layers/fc_layer/versions/1\\",\\n  \\"license\\": \\"Apache\\",\\n  \\"version\\": 1\\n}","type":"json"}]',
            'title' => '创建层版本',
        ],
        'DeleteLayerVersion' => [
            'summary' => '删除层版本。',
            'path' => '/2023-03-30/layers/{layerName}/versions/{version}',
            'methods' => [
                'delete',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'layerName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '层名称',
                        'description' => '层名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-layer',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'version',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '层版本',
                        'description' => '层版本',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                204 => [
                    'description' => 'No Content',
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '删除层版本',
        ],
        'GetLayerVersion' => [
            'summary' => '获取层的版本信息。',
            'path' => '/2023-03-30/layers/{layerName}/versions/{version}',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'layerName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '层名称',
                        'description' => '层名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-layer',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'version',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '层版本',
                        'description' => '层版本',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '层配置信息',
                    'schema' => [
                        'title' => '层配置信息',
                        'description' => '层配置信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Layer',
                    ],
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"acl\\": \\"0\\",\\n  \\"code\\": {\\n    \\"location\\": \\"https://xyz.oss-cn-shanghai.aliyuncs.com/xxx/xxx/xxx\\",\\n    \\"repositoryType\\": \\"OSS\\"\\n  },\\n  \\"codeChecksum\\": \\"2825179536350****\\",\\n  \\"codeSize\\": 421,\\n  \\"compatibleRuntime\\": [\\n    \\"python3.10\\"\\n  ],\\n  \\"createTime\\": \\"2023-03-30T11:08:00Z\\",\\n  \\"description\\": \\"My first layer\\",\\n  \\"layerName\\": \\"MyLayer\\",\\n  \\"layerVersionArn\\": \\"acs:fc:cn-beijing:186824xxxxxx:layers/fc_layer/versions/1\\",\\n  \\"license\\": \\"Apache\\",\\n  \\"version\\": 1\\n}","type":"json"}]',
            'title' => '获取层版本',
        ],
        'GetLayerVersionByArn' => [
            'summary' => '通过ARN获取层的版本信息。',
            'path' => '/2023-03-30/layerarn/{arn}',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'arn',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '层资源标识',
                        'description' => '层资源标识',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'acs:fc:cn-shanghai:1234:layers/my-layer/versions/1',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '层版本信息',
                    'schema' => [
                        'title' => '层版本信息',
                        'description' => '层版本信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Layer',
                    ],
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"acl\\": \\"0\\",\\n  \\"code\\": {\\n    \\"location\\": \\"https://xyz.oss-cn-shanghai.aliyuncs.com/xxx/xxx/xxx\\",\\n    \\"repositoryType\\": \\"OSS\\"\\n  },\\n  \\"codeChecksum\\": \\"2825179536350****\\",\\n  \\"codeSize\\": 421,\\n  \\"compatibleRuntime\\": [\\n    \\"python3.10\\"\\n  ],\\n  \\"createTime\\": \\"2023-03-30T11:08:00Z\\",\\n  \\"description\\": \\"My first layer\\",\\n  \\"layerName\\": \\"MyLayer\\",\\n  \\"layerVersionArn\\": \\"acs:fc:cn-beijing:186824xxxxxx:layers/fc_layer/versions/1\\",\\n  \\"license\\": \\"Apache\\",\\n  \\"version\\": 1\\n}","type":"json"}]',
            'title' => '通过ARN获取层版本',
        ],
        'ListLayerVersions' => [
            'summary' => '获取层的版本列表。',
            'path' => '/2023-03-30/layers/{layerName}/versions',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'layerName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '层名称',
                        'description' => '层名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-layer',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'startVersion',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '起始版本',
                        'description' => '起始版本',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'limit',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '返回的版本数量',
                        'description' => '返回的版本数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '层版本列表',
                    'schema' => [
                        'title' => '层版本列表',
                        'description' => '层版本列表',
                        'required' => false,
                        '$ref' => '#/components/schemas/ListLayerVersionOutput',
                    ],
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"layers\\": [\\n    {\\n      \\"acl\\": \\"0\\",\\n      \\"code\\": {\\n        \\"location\\": \\"https://xyz.oss-cn-shanghai.aliyuncs.com/xxx/xxx/xxx\\",\\n        \\"repositoryType\\": \\"OSS\\"\\n      },\\n      \\"codeChecksum\\": \\"2825179536350****\\",\\n      \\"codeSize\\": 421,\\n      \\"compatibleRuntime\\": [\\n        \\"python3.10\\"\\n      ],\\n      \\"createTime\\": \\"2023-03-30T11:08:00Z\\",\\n      \\"description\\": \\"My first layer\\",\\n      \\"layerName\\": \\"MyLayer\\",\\n      \\"layerVersionArn\\": \\"acs:fc:cn-beijing:186824xxxxxx:layers/fc_layer/versions/1\\",\\n      \\"license\\": \\"Apache\\",\\n      \\"version\\": 1\\n    }\\n  ],\\n  \\"nextVersion\\": 10\\n}","type":"json"}]',
            'title' => '列出层版本',
        ],
        'ListLayers' => [
            'summary' => '获取层列表。',
            'path' => '/2023-03-30/layers',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'prefix',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '层名称前缀',
                        'description' => '层名称前缀',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my-layer',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '分页起始标记',
                        'description' => '分页起始标记',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MTIzNCNhYmM=',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'limit',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '返回的层数量',
                        'description' => '返回的层数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'public',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '是否公开层',
                        'description' => '是否公开层。true或者false。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'true',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'official',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '是否官方层',
                        'description' => '是否官方层。true或者false。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'true',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '层列表',
                    'schema' => [
                        'title' => '层列表',
                        'description' => '层列表',
                        'required' => false,
                        '$ref' => '#/components/schemas/ListLayersOutput',
                    ],
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"layers\\": [\\n    {\\n      \\"acl\\": \\"0\\",\\n      \\"code\\": {\\n        \\"location\\": \\"https://xyz.oss-cn-shanghai.aliyuncs.com/xxx/xxx/xxx\\",\\n        \\"repositoryType\\": \\"OSS\\"\\n      },\\n      \\"codeChecksum\\": \\"2825179536350****\\",\\n      \\"codeSize\\": 421,\\n      \\"compatibleRuntime\\": [\\n        \\"python3.10\\"\\n      ],\\n      \\"createTime\\": \\"2023-03-30T11:08:00Z\\",\\n      \\"description\\": \\"My first layer\\",\\n      \\"layerName\\": \\"MyLayer\\",\\n      \\"layerVersionArn\\": \\"acs:fc:cn-beijing:186824xxxxxx:layers/fc_layer/versions/1\\",\\n      \\"license\\": \\"Apache\\",\\n      \\"version\\": 1\\n    }\\n  ],\\n  \\"nextToken\\": \\"next-layer-name\\"\\n}","type":"json"}]',
            'title' => '列出层',
        ],
        'PutLayerACL' => [
            'summary' => '修改层的权限。',
            'path' => '/2023-03-30/layers/{layerName}/acl',
            'methods' => [
                'put',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'layerName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '层名称',
                        'description' => '层名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-layer',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'public',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '是否公开层',
                        'description' => '是否公开层。true或者false。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'true',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                204 => [
                    'description' => 'No Content',
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '设置层访问权限',
        ],
        'ListInstances' => [
            'summary' => '查询函数实例列表。',
            'path' => '/2023-03-30/functions/{functionName}/instances',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-func',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '函数版本或别名',
                        'description' => '函数版本或别名',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LATEST',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'withAllActive',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '是否列出所有实例',
                        'description' => '是否列出所有实例。true或者false。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '函数实例列表',
                    'schema' => [
                        'title' => '函数实例列表',
                        'description' => '函数实例列表',
                        'required' => false,
                        '$ref' => '#/components/schemas/ListInstancesOutput',
                    ],
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"instances\\": [\\n    {\\n      \\"instanceId\\": \\"1ef6b6ff-7f7b-485e-ab49-501ac681****\\",\\n      \\"versionId\\": \\"LATEST\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '列出函数实例',
        ],
        'ListVpcBindings' => [
            'summary' => '查询已创建的VPC连接。',
            'path' => '/2023-03-30/functions/{functionName}/vpc-bindings',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-func',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => 'VPC绑定配置列表',
                    'schema' => [
                        'title' => 'VPC绑定配置列表',
                        'description' => 'VPC绑定配置列表',
                        'required' => false,
                        '$ref' => '#/components/schemas/ListVpcBindingsOutput',
                    ],
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"vpcIds\\": [\\n    \\"vpc-8vb8x8dggvr0axxxxxxxx\\"\\n  ]\\n}","type":"json"}]',
            'title' => '列出VPC绑定配置',
        ],
        'CreateVpcBinding' => [
            'summary' => '创建VPC连接。',
            'path' => '/2023-03-30/functions/{functionName}/vpc-bindings',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [],
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-func',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => 'VPC绑定配置',
                        'description' => 'VPC绑定配置',
                        'required' => true,
                        '$ref' => '#/components/schemas/CreateVpcBindingInput',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => 'OK',
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '创建VPC绑定',
        ],
        'DeleteVpcBinding' => [
            'summary' => '删除指定VPC防火墙策略组的访问控制策略。',
            'path' => '/2023-03-30/functions/{functionName}/vpc-bindings/{vpcId}',
            'methods' => [
                'delete',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [],
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-func',
                    ],
                    'examples' => [],
                ],
                [
                    'name' => 'vpcId',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => 'VPC实例ID',
                        'description' => 'VPC实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vpc-bp106zxlfj1fqc9',
                    ],
                    'examples' => [],
                ],
            ],
            'responses' => [
                204 => [
                    'description' => 'No Content',
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '删除VPC绑定',
        ],
        'TagResources' => [
            'summary' => '给指定资源打标签。',
            'path' => '/2023-03-30/tags-v2',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '资源标签配置',
                        'description' => '资源标签配置',
                        'required' => true,
                        '$ref' => '#/components/schemas/TagResourcesInput',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => 'OK',
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '设置资源标签',
        ],
        'ListTagResources' => [
            'summary' => '列出所有被打标签的资源。',
            'path' => '/2023-03-30/tags-v2',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '资源数量类型, ALIYUN::FC::FUNCTION 表示函数计算3.0版本中的函数',
                        'description' => '资源类型。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ALIYUN::FC:FUNCTION',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'style' => 'json',
                    'schema' => [
                        'title' => '资源标识列表',
                        'description' => '资源ID列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'acs:fc:cn-shanghai:1234/functions/my-func',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'style' => 'json',
                    'schema' => [
                        'title' => '标签列表',
                        'description' => '标签列表。'."\n"
                            ."\n"
                            .'一次最多支持查询20个标签。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签信息。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。'."\n"
                                        ."\n"
                                        .'最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'k1',
                                ],
                                'Value' => [
                                    'description' => '标签值。'."\n"
                                        ."\n"
                                        .'标签值最多支持128个字符，可以为空字符串。',
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
                    'name' => 'NextToken',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '下一个查询开始Token',
                        'description' => '下一个查询开始Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MTIzNCNhYmM=',
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '返回的资源数量',
                        'description' => '返回的资源数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '资源列表',
                    'schema' => [
                        'title' => '资源列表',
                        'description' => '资源列表',
                        'required' => false,
                        '$ref' => '#/components/schemas/ListTagResourcesOutput',
                    ],
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"next_token\\",\\n  \\"RequestId\\": \\"\\",\\n  \\"TagResources\\": [\\n    {\\n      \\"ResourceId\\": \\"acs:fc:cn-shanghai:****:functions/demo\\",\\n      \\"ResourceType\\": \\"ALIYUN::FC::FUNCTION\\",\\n      \\"TagKey\\": \\"key1\\",\\n      \\"TagValue\\": \\"key1\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询资源标签关系',
        ],
        'UntagResources' => [
            'summary' => '删除资源的标签。',
            'path' => '/2023-03-30/tags-v2',
            'methods' => [
                'delete',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '资源类型',
                        'description' => '资源类型',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'function',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'style' => 'json',
                    'schema' => [
                        'title' => '资源标识列表',
                        'description' => '资源标识列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源ID。'."\n"
                                ."\n"
                                .'函数的ARN信息。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'acs:fc:cn-shanghai:xxx:functions/f1',
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TagKey',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'style' => 'json',
                    'schema' => [
                        'title' => '标签名称列表',
                        'description' => '要移除的标签。最多指定50个。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签键。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'k1',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'All',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '是否删除所有标签',
                        'description' => '是否删除所有标签',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => 'OK',
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '删除资源标签',
        ],
        'GetAsyncTask' => [
            'summary' => '获取指定异步任务详情。',
            'path' => '/2023-03-30/functions/{functionName}/async-tasks/{taskId}',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '213992',
                'abilityTreeNodes' => [
                    'FEATUREfcYBHLF0',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-func',
                    ],
                ],
                [
                    'name' => 'taskId',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '异步任务 id',
                        'description' => '异步任务ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'e026ae92-61e5-472f-b32d-1c9e3c4e****',
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '函数版本或别名',
                        'description' => '函数版本或别名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LATEST',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '异步任务信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '异步任务信息',
                        'description' => '异步任务信息。该参数下的 returnPayload 字段当前处于内测阶段，如您需要使用，请[联系我们](~~2513733~~)为您开通。',
                        'required' => false,
                        '$ref' => '#/components/schemas/AsyncTask',
                    ],
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"alreadyRetriedTimes\\": 3,\\n  \\"destinationStatus\\": \\"Succeeded\\",\\n  \\"durationMs\\": 1000,\\n  \\"endTime\\": 1633449590000,\\n  \\"events\\": [\\n    {\\n      \\"eventDetail\\": \\"body\\",\\n      \\"eventId\\": 1,\\n      \\"status\\": \\"Succeeded\\",\\n      \\"timestamp\\": 1647420449721\\n    }\\n  ],\\n  \\"functionArn\\": \\"acs:fc:cn-shanghai:1234/functions/my-func\\",\\n  \\"instanceId\\": \\"D4-*******9FD1-882707E\\",\\n  \\"qualifier\\": \\"prod\\",\\n  \\"requestId\\": \\"e026ae92-61e5-472f-b32d-1c9e3c4e****\\",\\n  \\"returnPayload\\": \\"result\\",\\n  \\"startedTime\\": 1633449590000,\\n  \\"status\\": \\"Running\\",\\n  \\"taskErrorMessage\\": \\"UnhandledInvocationError\\",\\n  \\"taskId\\": \\"e026ae92-61e5-472f-b32d-1c9e3c4e****\\",\\n  \\"taskPayload\\": \\"body\\"\\n}","type":"json"}]',
            'title' => '获取异步任务',
        ],
        'ListAsyncTasks' => [
            'summary' => '获取异步任务详情列表。',
            'path' => '/2023-03-30/functions/{functionName}/async-tasks',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [
                'operationType' => 'list',
                'abilityTreeCode' => '213993',
                'abilityTreeNodes' => [
                    'FEATUREfcYBHLF0',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-func',
                    ],
                ],
                [
                    'name' => 'prefix',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '异步任务id前缀',
                        'description' => '异步任务ID前缀，指定后会返回符合前缀的异步任务列表。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'job-',
                    ],
                ],
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '分页起始标记',
                        'description' => '分页标记，用来返回更多结果。第一次查询不需要提供这个参数，后续查询的 Token 从返回结果中获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MTIzNCNhYmM=',
                    ],
                ],
                [
                    'name' => 'limit',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '返回异步任务的数量',
                        'description' => '返回异步任务的数量。默认返回 50 个，取值范围[1,100]。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '函数版本或别名',
                        'description' => '函数版本或别名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LATEST',
                    ],
                ],
                [
                    'name' => 'status',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '异步任务执行状态。Enqueued 表示请求已经成功入队；Running 表示正在执行中；Succeeded 表示执行成功；Failed 表示执行失败；Stopped 表示停止执行；Expired 表示请求已过期',
                        'description' => '异步任务执行状态。'."\n"
                            .'- Enqueued：异步消息已入队，等待处理。'."\n"
                            ."\n"
                            .'- Succeeded：调用执行成功。'."\n"
                            ."\n"
                            .'- Failed：调用执行失败。'."\n"
                            ."\n"
                            .'- Running：调用执行中。'."\n"
                            ."\n"
                            .'- Stopped：调用执行终止。'."\n"
                            ."\n"
                            .'- Stopping：执行停止中。'."\n"
                            ."\n"
                            .'- Invalid：您的执行因函数被删除等原因处于无效状态（任务未被执行）。'."\n"
                            ."\n"
                            .'- Expired：您为任务配置了最长排队等待的期限。该任务因为超期被丢弃（任务未被执行）。'."\n"
                            ."\n"
                            .'- Retrying：异步调用因执行错误重试中。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Running',
                    ],
                ],
                [
                    'name' => 'startedTimeBegin',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '异步任务启动时间段的开始时间',
                        'description' => '异步任务启动时间段的开始时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1640966400000',
                    ],
                ],
                [
                    'name' => 'startedTimeEnd',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '异步任务启动时间段的结束时间',
                        'description' => '异步任务启动时间段的结束时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1640966400000',
                    ],
                ],
                [
                    'name' => 'sortOrderByTime',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '返回异步任务列表的排序方式。asc 表示生序；desc 表示降序',
                        'description' => '返回异步任务列表的排序方式。'."\n"
                            ."\n"
                            .'- asc 表示升序'."\n"
                            ."\n"
                            .'- desc 表示降序',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'asc',
                    ],
                ],
                [
                    'name' => 'includePayload',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '是否返回异步任务的入参',
                        'description' => '是否返回异步任务的入参。'."\n"
                            ."\n"
                            .'- true：当该参数设置为true时，异步任务的列表将返回`invocationPayload`字段。'."\n"
                            ."\n"
                            .'- false：当该参数设置为false时，则不返回`invocationPayload`字段。'."\n"
                            ."\n"
                            .'> `invocationPayload`字段表示异步任务函数运行时的输入参数。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'description' => '异步任务列表',
                    'headers' => [],
                    'schema' => [
                        'title' => '异步任务列表',
                        'description' => '返回数据结构体',
                        'required' => false,
                        '$ref' => '#/components/schemas/ListAsyncTaskOutput',
                    ],
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"nextToken\\": \\"\\",\\n  \\"tasks\\": [\\n    {\\n      \\"alreadyRetriedTimes\\": 3,\\n      \\"destinationStatus\\": \\"Succeeded\\",\\n      \\"durationMs\\": 1000,\\n      \\"endTime\\": 1633449590000,\\n      \\"events\\": [\\n        {\\n          \\"eventDetail\\": \\"body\\",\\n          \\"eventId\\": 1,\\n          \\"status\\": \\"Succeeded\\",\\n          \\"timestamp\\": 1647420449721\\n        }\\n      ],\\n      \\"functionArn\\": \\"acs:fc:cn-shanghai:1234/functions/my-func\\",\\n      \\"instanceId\\": \\"D4-*******9FD1-882707E\\",\\n      \\"qualifier\\": \\"prod\\",\\n      \\"requestId\\": \\"e026ae92-61e5-472f-b32d-1c9e3c4e****\\",\\n      \\"returnPayload\\": \\"result\\",\\n      \\"startedTime\\": 1633449590000,\\n      \\"status\\": \\"Running\\",\\n      \\"taskErrorMessage\\": \\"UnhandledInvocationError\\",\\n      \\"taskId\\": \\"e026ae92-61e5-472f-b32d-1c9e3c4e****\\",\\n      \\"taskPayload\\": \\"body\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取异步任务列表',
        ],
        'StopAsyncTask' => [
            'summary' => '停止异步任务。',
            'path' => '/2023-03-30/functions/{functionName}/async-tasks/{taskId}/stop',
            'methods' => [
                'put',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '213994',
                'abilityTreeNodes' => [
                    'FEATUREfcYBHLF0',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-func',
                    ],
                ],
                [
                    'name' => 'taskId',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '异步任务 id',
                        'description' => '异步任务ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'e026ae92-61e5-472f-b32d-1c9e3c4e****',
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '函数版本或别名',
                        'description' => '函数版本或别名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LATEST',
                    ],
                ],
            ],
            'responses' => [
                204 => [
                    'description' => 'No Content',
                    'examples' => [],
                ],
                500 => [
                    'description' => '错误信息',
                    'headers' => [],
                    'schema' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Error',
                    ],
                    'examples' => [],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '停止异步任务',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'ap-southeast-7',
            'endpoint' => 'fcv3.ap-southeast-7.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'fcv3.cn-qingdao.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'fcv3.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'fcv3.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'fcv3.cn-huhehaote.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'fcv3.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'fcv3.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'fcv3.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'fcv3.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'fcv3.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'fcv3.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'fcv3.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'fcv3.ap-southeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'fcv3.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'fcv3.ap-southeast-5.aliyuncs.com	',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'fcv3.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'fcv3.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'fcv3.eu-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'fcv3.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'fcv3.ap-south-1.aliyuncs.com',
        ],
    ],
];
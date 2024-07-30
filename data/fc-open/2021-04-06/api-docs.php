<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'FC',
        'product' => 'FC-Open',
        'version' => '2021-04-06',
    ],
    'directories' => [
        [
            'id' => 163711,
            'title' => '预付费',
            'type' => 'directory',
            'children' => [
                'ListReservedCapacities',
            ],
        ],
        [
            'id' => 163713,
            'title' => '可用区',
            'type' => 'directory',
            'children' => [
                'GetAccountSettings',
            ],
        ],
        [
            'id' => 163715,
            'title' => '服务',
            'type' => 'directory',
            'children' => [
                'CreateService',
                'DeleteService',
                'UpdateService',
                'ListServices',
                'GetService',
            ],
        ],
        [
            'id' => 163721,
            'title' => '服务版本',
            'type' => 'directory',
            'children' => [
                'DeleteServiceVersion',
                'PublishServiceVersion',
                'ListServiceVersions',
            ],
        ],
        [
            'id' => 163725,
            'title' => '触发器',
            'type' => 'directory',
            'children' => [
                'CreateTrigger',
                'DeleteTrigger',
                'UpdateTrigger',
                'GetTrigger',
                'ListTriggers',
            ],
        ],
        [
            'id' => 163731,
            'title' => '自定义域名',
            'type' => 'directory',
            'children' => [
                'CreateCustomDomain',
                'DeleteCustomDomain',
                'UpdateCustomDomain',
                'GetCustomDomain',
                'ListCustomDomains',
            ],
        ],
        [
            'id' => 163737,
            'title' => '别名',
            'type' => 'directory',
            'children' => [
                'CreateAlias',
                'DeleteAlias',
                'UpdateAlias',
                'GetAlias',
                'ListAliases',
            ],
        ],
        [
            'id' => 163743,
            'title' => '函数',
            'type' => 'directory',
            'children' => [
                'CreateFunction',
                'DeleteFunction',
                'UpdateFunction',
                'GetFunction',
                'GetFunctionCode',
                'ListFunctions',
                'InvokeFunction',
            ],
        ],
        [
            'id' => 163751,
            'title' => '函数异步配置',
            'type' => 'directory',
            'children' => [
                'PutFunctionAsyncInvokeConfig',
                'DeleteFunctionAsyncInvokeConfig',
                'GetFunctionAsyncInvokeConfig',
                'ListFunctionAsyncInvokeConfigs',
            ],
        ],
        [
            'id' => 163756,
            'title' => '函数按量配置',
            'type' => 'directory',
            'children' => [
                'DeleteFunctionOnDemandConfig',
                'GetFunctionOnDemandConfig',
                'ListOnDemandConfigs',
                'PutFunctionOnDemandConfig',
            ],
        ],
        [
            'id' => 163761,
            'title' => '预留函数配置',
            'type' => 'directory',
            'children' => [
                'GetProvisionConfig',
                'ListProvisionConfigs',
                'PutProvisionConfig',
            ],
        ],
        [
            'id' => 163765,
            'title' => '异步任务',
            'type' => 'directory',
            'children' => [
                'StopStatefulAsyncInvocation',
                'ListStatefulAsyncInvocationFunctions',
                'GetStatefulAsyncInvocation',
                'ListStatefulAsyncInvocations',
            ],
        ],
        [
            'id' => 163769,
            'title' => '层',
            'type' => 'directory',
            'children' => [
                'CreateLayerVersion',
                'DeleteLayerVersion',
                'ListLayers',
                'ListLayerVersions',
                'GetLayerVersion',
                'PutLayerACL',
            ],
        ],
        [
            'id' => 163775,
            'title' => '事件源',
            'type' => 'directory',
            'children' => [
                'ListEventSources',
                'DeregisterEventSource',
                'RegisterEventSource',
            ],
        ],
        [
            'id' => 163779,
            'title' => 'VPC绑定',
            'type' => 'directory',
            'children' => [
                'CreateVpcBinding',
                'DeleteVpcBinding',
                'ListVpcBindings',
            ],
        ],
        [
            'id' => 163783,
            'title' => '标签',
            'type' => 'directory',
            'children' => [
                'GetResourceTags',
                'ListTaggedResources',
                'TagResource',
                'UntagResource',
            ],
        ],
        [
            'id' => 169531,
            'title' => '实例',
            'type' => 'directory',
            'children' => [
                'ListInstances',
            ],
        ],
        [
            'id' => 171912,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'ClaimGPUInstance',
                'ReleaseGPUInstance',
            ],
        ],
    ],
    'components' => [
        'schemas' => [
            'AccelerationInfo' => [
                'title' => 'A short description of struct',
                'description' => '自定义容器加速信息。',
                'type' => 'object',
                'properties' => [
                    'status' => [
                        'title' => '镜像加速状态，取值 Preparing 或 Ready',
                        'description' => '函数调用的加速状态：'."\n"
                            .'  * **Preparing**：加速正在准备中。准备加速的过程中，函数的调用会使用没有加速效果的原始镜像。'."\n"
                            .'  * **Ready**：加速完成。加速完成后函数的调用会有加速效果。',
                        'type' => 'string',
                        'example' => 'Preparing',
                    ],
                ],
            ],
            'AsyncConfigMeta' => [
                'title' => '异步配置所属函数及服务元数据。',
                'description' => '确认AsyncConfig所属资源的三元组（ServiceName/Functionname/Qualifier）。',
                'type' => 'object',
                'properties' => [
                    'serviceName' => [
                        'title' => '异步配置所属服务名称。',
                        'description' => '异步任务所属的服务名称。',
                        'type' => 'string',
                        'example' => 'serviceName',
                    ],
                    'functionName' => [
                        'title' => '异步配置所属函数名称。',
                        'description' => '异步任务所属的函数名称。',
                        'type' => 'string',
                        'example' => 'functionName',
                    ],
                    'qualifier' => [
                        'title' => '异步配置所属服务版本/别名。',
                        'description' => '异步任务所属的服务版本或别名。',
                        'type' => 'string',
                        'example' => 'LATEST',
                    ],
                ],
            ],
            'AvailableAZ' => [
                'title' => 'A short description of struct',
                'description' => '可用区列表。',
                'type' => 'object',
                'properties' => [
                    'availableAZs' => [
                        'title' => 'az',
                        'description' => '可用区。',
                        'type' => 'string',
                        'example' => '[\'cn-chengdu-a\', \'cn-chengdu-b\']',
                    ],
                ],
            ],
            'BatchWindow' => [
                'title' => 'A short description of struct',
                'description' => '攒批窗口配置',
                'type' => 'object',
                'properties' => [
                    'CountBasedWindow' => [
                        'title' => 'CountBasedWindow',
                        'description' => '窗口中最大可容纳的事件数量。当达到此阈值，会触发窗口内的数据往下游推送。当存在多个窗口时，有一个窗口满足即触发。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '100',
                    ],
                    'TimeBasedWindow' => [
                        'title' => 'TimeBasedWindow',
                        'description' => '窗口中最大可容纳的时间范围内的事件（单位秒）。当达到此阈值，会触发窗口内的数据往下游推送。当存在多个窗口时，有一个窗口满足即触发。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '10',
                    ],
                ],
            ],
            'CDNEventsTriggerConfig' => [
                'title' => 'A short description of struct',
                'description' => 'CDN事件触发器配置。',
                'type' => 'object',
                'properties' => [
                    'eventName' => [
                        'title' => 'eventName',
                        'description' => '选择一个触发事件类型。如何选择触发事件类型，请参见CDN事件定义。',
                        'type' => 'string',
                        'example' => 'CdnDomainStarted',
                    ],
                    'eventVersion' => [
                        'title' => 'eventVersion',
                        'description' => '触发事件的版本号。目前仅支持1.0.0事件版本。',
                        'type' => 'string',
                        'example' => '1.0.0',
                    ],
                    'notes' => [
                        'title' => 'notes',
                        'description' => '触发器描述。',
                        'type' => 'string',
                        'example' => '缓存事件触发器',
                    ],
                    'filter' => [
                        'title' => 'filter',
                        'description' => '事件过滤规则描述。',
                        'type' => 'object',
                        'additionalProperties' => [
                            'description' => '事件过滤规则集合。',
                            'type' => 'array',
                            'items' => [
                                'description' => '事件过滤关键字符串。',
                                'type' => 'string',
                                'example' => 'filter-key',
                            ],
                            'enumValueTitles' => [],
                        ],
                    ],
                ],
            ],
            'CertConfig' => [
                'title' => 'HTTPS 证书配置',
                'description' => 'HTTPS证书配置。',
                'type' => 'object',
                'properties' => [
                    'certName' => [
                        'title' => '证书名称',
                        'description' => '证书的名称。支持字母、数字、下划线（_）和短划线（-），不能以数字和短划线（-）开头。长度范围为1~128个字符。',
                        'type' => 'string',
                        'example' => 'my-cert',
                    ],
                    'certificate' => [
                        'title' => '证书，如果是证书链则依次填写多个证书',
                        'description' => '证书，如果是证书链，则需要依次填写多个证书。'."\n"
                            ."\n",
                        'type' => 'string',
                        'example' => '-----BEGIN CERTIFICATE----- xxxxx -----END CERTIFICATE-----',
                    ],
                    'privateKey' => [
                        'title' => '私钥',
                        'description' => '私钥。',
                        'type' => 'string',
                        'example' => '-----BEGIN RSA PRIVATE KEY----- xxxxx -----END RSA PRIVATE KEY-----',
                    ],
                ],
            ],
            'Code' => [
                'title' => 'A short description of struct',
                'description' => '函数代码。',
                'type' => 'object',
                'properties' => [
                    'ossBucketName' => [
                        'title' => '函数代码包的OSS bucket name',
                        'description' => '存放函数代码ZIP包的OSS Bucket名称。',
                        'type' => 'string',
                        'example' => 'demo-bucket',
                    ],
                    'ossObjectName' => [
                        'title' => '函数代码包的OSS对象名',
                        'description' => '存放函数代码ZIP包的OSS Object名称。',
                        'type' => 'string',
                        'example' => 'demo-key',
                    ],
                    'zipFile' => [
                        'title' => '直接在request body中上传code zip包的base64编码',
                        'description' => '函数代码ZIP包的Base 64编码。',
                        'type' => 'string',
                        'example' => 'UEsDBAoAAAAAANFUiFYAAAAAAAAAAAAAAAAFABwAY29kZS9VVAkAA6rTMGSq0zBk dXgLAAEE9gEAAAQUAAAAUEsDBBQAAAAIANFUiFaigyIV4wEAAM4DAAANABwAY29k ZS9pbmRleC5qc1VUCQADqtMwZKvTMGR1eAsAAQT2AQAABBQAAAB1k81u1DAQx+9+ irnFqVJHHCioq+UAEqIcALXlhBByktmNqWOntrPbgPZF+iy8E6+AvfYmUYFc4vH/ NzOZj+y4gS26a75/rZsR1mDwfhAGaWb4/rzyd1m+IrtIvdWme4oFpNx44cRV/wCC Rkh5Rm41oOKVRHAtglDCCS7FDzSwQe4Gg0Bb53p7WZYtyp55cRwUq3VXNroeOlTu W4OOC1k+e37x8sUFa10nc9JL5NYH7PwhQH+HH1TthFbALVQo9f73r0eCD702zrIl uAZaa+XwwRVQcykrXt/lsH4FPwmAV6yWyKTe0mzyEmobCoSJp2qQsoAs3B5W5Kwk U6qWq0bGNL5DhW+T7QtIGac8TzL5VkgNe21kc+xkAEKre254Z32s6BOenrv2MjSf hVMx3d8PaATaKCVjVlvkDZqkJmNWO3StbiCq0ZjFMGe07vP1VQIGI2e1lsJP4+pT 0k5mBA6xknn9YktOo6JoTHFcp3xRoF81oKH4Oxz9hJf1LLHYoB2XA8ZlPEFfvN/X 1YILE2AW3btj2dTLRfTLZ+pA/kNnb8LklDu/HXvM/Mh530tR8/D95XerVbaIEsfF 0g8SXszpG2f8/tAFllKohr6/+fiB2SMgNiON/gWk7QpslifHQ1g18gdQSwECHgMK AAAAAADRVIhWAAAAAAAAAAAAAAAABQAYAAAAAAAAABAA7UEAAAAAY29kZS9VVAUA A6rTMGR1eAsAAQT2AQAABBQAAABQSwECHgMUAAAACADRVIhWooMiFeMBAADOAwAA DQAYAAAAAAABAAAApIE/AAAAY29kZS9pbmRleC5qc1VUBQADqtMwZHV4CwABBPYB AAAEFAAAAFBLBQYAAAAAAgACAJ4AAABpAgAAAAA=',
                    ],
                ],
            ],
            'CustomContainerConfig' => [
                'title' => 'custom-container 运行时相关配置，配置后function可以使用自定义容器镜像执行函数',
                'description' => '自定义容器相关函数配置。',
                'type' => 'object',
                'properties' => [
                    'args' => [
                        'title' => '容器启动参数',
                        'description' => '容器启动参数。'."\n"
                            ."\n",
                        'type' => 'string',
                        'example' => '["-arg1", "value1"]',
                    ],
                    'command' => [
                        'title' => '容器启动命令，等同于 Docker ENTRYPOINT',
                        'description' => '容器启动命令。'."\n",
                        'type' => 'string',
                        'example' => '["/code/myserver"]',
                    ],
                    'image' => [
                        'title' => '容器镜像地址，实例值： registry-vpc.cn-hangzhou.aliyuncs.com/fc-demo/helloworld:v1beta1',
                        'description' => '容器镜像地址。'."\n"
                            ."\n",
                        'type' => 'string',
                        'example' => 'registry-vpc.cn-hangzhou.aliyuncs.com/fc-demo/helloworld:v1beta1',
                    ],
                    'accelerationType' => [
                        'title' => '镜像加速类型，取值Default为开启加速，None为关闭加速，默认开启',
                        'description' => '是否开启镜像加速。'."\n"
                            .'  * **Default**：默认值，表示开启镜像加速。'."\n"
                            .'  * **None**：表示关闭镜像加速。',
                        'type' => 'string',
                        'example' => 'Default',
                    ],
                    'instanceID' => [
                        'title' => 'ACR企业版镜像仓库ID，使用ACR企业版镜像时须传入',
                        'description' => 'ACR企业版镜像仓库ID，使用ACR企业版镜像时须传入。',
                        'type' => 'string',
                        'example' => 'cri-xxxxxxxxxx',
                    ],
                    'webServerMode' => [
                        'title' => '镜像运行是否为Web Server模式，取值true需要在容器镜像中实现Web Server来监听端口并处理请求，取值false需要容器运行后主动退出进程，并且ExitCode需要为0。默认true',
                        'description' => '镜像运行是否为Web Server模式。'."\n"
                            .'- 取值为true表示需要在容器镜像中实现Web Server来监听端口并处理请求。'."\n"
                            .'- 取值为false表示需要容器运行后主动退出进程，并且ExitCode需要为0。'."\n"
                            ."\n"
                            .'默认值为true。',
                        'type' => 'boolean',
                        'example' => 'true',
                        'default' => 'true',
                    ],
                ],
            ],
            'CustomContainerConfigInfo' => [
                'title' => 'A short description of struct',
                'description' => '自定义容器相关函数配置。',
                'type' => 'object',
                'properties' => [
                    'args' => [
                        'title' => '容器启动参数',
                        'description' => '容器启动参数。'."\n"
                            ."\n",
                        'type' => 'string',
                        'example' => '["-arg1", "value1"]',
                    ],
                    'command' => [
                        'title' => '容器启动命令，等同于 Docker ENTRYPOINT',
                        'description' => '容器启动命令。'."\n"
                            ."\n",
                        'type' => 'string',
                        'example' => '["/code/myserver"]',
                    ],
                    'image' => [
                        'title' => '容器镜像地址，实例值： registry-vpc.cn-hangzhou.aliyuncs.com/fc-demo/helloworld:v1beta1',
                        'description' => '容器镜像地址。'."\n"
                            ."\n",
                        'type' => 'string',
                        'example' => 'registry-vpc.cn-hangzhou.aliyuncs.com/fc-demo/helloworld:v1beta1',
                    ],
                    'accelerationType' => [
                        'title' => '镜像加速类型，取值Default为开启加速，None为关闭加速，默认开启',
                        'description' => '是否开启镜像加速。'."\n"
                            .'  * Default：默认值，表示开启镜像加速。'."\n"
                            .'  * None：表示关闭镜像加速。',
                        'type' => 'string',
                        'example' => 'Default',
                    ],
                    'accelerationInfo' => [
                        'description' => '自定义容器加速信息。',
                        '$ref' => '#/components/schemas/AccelerationInfo',
                    ],
                    'instanceID' => [
                        'title' => 'ACR企业版镜像仓库ID，使用ACR企业版镜像时须传入',
                        'description' => 'ACR企业版镜像仓库ID，使用ACR企业版镜像时须传入。',
                        'type' => 'string',
                        'example' => 'cri-xxxxxxxxxx',
                    ],
                    'webServerMode' => [
                        'title' => '镜像运行是否为Web Server模式，取值true需要在容器镜像中实现Web Server来监听端口并处理请求，取值false需要容器运行后主动退出进程，并且ExitCode需要为0。默认true',
                        'description' => '镜像运行是否为Web Server模式。'."\n"
                            ."\n"
                            .'- 取值为true表示需要在容器镜像中实现Web Server来监听端口并处理请求。'."\n"
                            .'- 取值为false表示需要容器运行后主动退出进程，并且ExitCode需要为0。'."\n"
                            .'默认值为true。',
                        'type' => 'boolean',
                        'example' => 'true',
                        'default' => 'true',
                    ],
                ],
            ],
            'CustomDNS' => [
                'title' => 'A short description of struct',
                'description' => '函数自定义DNS配置。',
                'type' => 'object',
                'properties' => [
                    'nameServers' => [
                        'title' => 'DNS 服务器的 IP 地址列表',
                        'description' => 'DNS服务器的IP地址列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => 'DNS服务器的IP地址。',
                            'type' => 'string',
                            'example' => '8.8.x.x',
                        ],
                    ],
                    'searches' => [
                        'title' => 'DNS 搜索域的列表',
                        'description' => 'DNS搜索域列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => 'DNS搜索域值。',
                            'type' => 'string',
                            'example' => 'ns1.svc.cluster-domain.example',
                        ],
                    ],
                    'dnsOptions' => [
                        'title' => 'DNS resolver 配置参数列表',
                        'description' => 'resolv.conf文件中的配置项列表。每一项对应一个键值对，格式为key:value，其中键为必填。',
                        'type' => 'array',
                        'items' => [
                            'description' => 'resolv.conf文件中的配置项。',
                            '$ref' => '#/components/schemas/DNSOption',
                        ],
                    ],
                ],
            ],
            'CustomHealthCheckConfig' => [
                'title' => '自定义健康检查配置结构体',
                'description' => 'Custom Runtime和Custom Container自定义健康检查配置。',
                'type' => 'object',
                'properties' => [
                    'httpGetUrl' => [
                        'title' => '容器自定义健康检查URL地址',
                        'description' => '容器自定义健康检查URL地址。长度不超过2048个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '/ready',
                    ],
                    'initialDelaySeconds' => [
                        'title' => '容器启动到发起健康检查的延迟',
                        'description' => '容器启动到发起健康检查的延迟。取值范围0~120，单位为秒，默认值为0。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                    ],
                    'periodSeconds' => [
                        'title' => '健康检查周期',
                        'description' => '健康检查周期。取值范围1~120，单位为秒，默认值为3。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                    ],
                    'timeoutSeconds' => [
                        'title' => '健康检查超时时间',
                        'description' => '健康检查超时时间。取值范围1~3，单位为秒，默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '2',
                    ],
                    'failureThreshold' => [
                        'title' => '健康检查失败次数阈值，达到该值后系统认为检查失败',
                        'description' => '健康检查失败次数阈值，达到该值后系统认为检查失败。取值范围1~120，单位为秒，默认值为3。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                    ],
                    'successThreshold' => [
                        'title' => '健康检查成功次数阈值，达到该值后系统认为检查成功',
                        'description' => '健康检查成功次数阈值，达到该值后系统认为检查成功。取值范围1~120，单位为秒，默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '2',
                    ],
                ],
            ],
            'CustomRuntimeConfig' => [
                'title' => 'Custom Runtime函数详细配置',
                'description' => 'Custom Runtime函数详细配置。',
                'type' => 'object',
                'properties' => [
                    'command' => [
                        'title' => '启动入口命令',
                        'description' => 'Custom Runtime启动的自定义入口命令列表。列表内有多个命令时按顺序拼接。',
                        'type' => 'array',
                        'items' => [
                            'description' => '容器启动命令。'."\n"
                                ."\n",
                            'type' => 'string',
                            'example' => '/code/myBootstrap',
                        ],
                    ],
                    'args' => [
                        'title' => '启动入口命令接收的参数',
                        'description' => 'Custom Runtime启动命令接收的参数列表，按顺序依次传入。',
                        'type' => 'array',
                        'items' => [
                            'description' => '容器启动参数。'."\n"
                                ."\n",
                            'type' => 'string',
                            'example' => 'args1',
                        ],
                    ],
                ],
            ],
            'DNSOption' => [
                'title' => 'A short description of struct',
                'description' => 'DNS解析器配置，k-v结构。',
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'title' => 'DNS option 名称',
                        'description' => '配置项名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ndots',
                    ],
                    'value' => [
                        'title' => 'DNS option 值',
                        'description' => '配置项值。',
                        'type' => 'string',
                        'example' => '2',
                    ],
                ],
                'example' => 't',
            ],
            'DeadLetterQueue' => [
                'title' => 'A short description of struct',
                'description' => '死信队列资源标识，支持如下云产品作为死信队列：'."\n"
                    .'- 消息服务MNS'."\n"
                    .'- 云消息队列 RocketMQ 版'."\n"
                    .'- 消息队列 Kafka 版'."\n"
                    .'- 事件总线 EventBridge',
                'type' => 'object',
                'properties' => [
                    'Arn' => [
                        'title' => 'Arn',
                        'description' => '死信队列ARN。',
                        'type' => 'string',
                        'example' => 'acs:mq:cn-shanghai:14319991365*****:/instances/MQ_INST_14319991365*****_BYWs****/topic/testTopic',
                    ],
                ],
            ],
            'DeliveryOption' => [
                'title' => 'A short description of struct',
                'description' => '事件推送配置。',
                'type' => 'object',
                'properties' => [
                    'mode' => [
                        'title' => 'mode',
                        'description' => '><notice>该参数已废弃。></notice>'."\n"
                            .'消息数据推送到函数计算时的底层应用模式：'."\n"
                            ."\n"
                            .'- event-streaming：事件流模式，按照数组格式推送事件，会根据用户推送配置将一个或多个消息事件以批的形式推送到函数中进行处理，适合端到端的流式数据处理场景。'."\n"
                            .'- event-driven：事件模式，每次会将单个消息作为事件参数传入函数中，事件遵循CloudEvents规范。注意：该模式下，不支持攒批配置。',
                        'type' => 'string',
                        'example' => 'event-streaming',
                        'enum' => [
                            'event-driven',
                            'event-streaming',
                        ],
                    ],
                    'eventSchema' => [
                        'title' => 'eventSchema',
                        'description' => '指定函数入口参数 event 中每个数据元素的格式。'."\n"
                            ."\n"
                            .'- CloudEvents：以通用格式描述事件数据的规范，包含事件描述以及事件负载数据，旨在简化不同服务、平台间的事件声明和传输。'."\n"
                            .'- RawData：只投递事件负载数据，不包含CloudEvents格式中的其它元数据信息。',
                        'type' => 'string',
                        'enumValueTitles' => [
                            'RawData' => 'RawData',
                            'CloudEvents' => 'CloudEvents',
                        ],
                        'example' => 'RawData',
                    ],
                    'concurrency' => [
                        'title' => 'concurrency',
                        'description' => '><notice>目前仅针对在 Kafka 作为事件源时有效。></notice>'."\n"
                            .'上游事件源投递事件到函数计算的并发最大值。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '2',
                    ],
                ],
            ],
            'Destination' => [
                'title' => 'A short description of struct',
                'description' => '异步调用目标结构体。',
                'type' => 'object',
                'properties' => [
                    'destination' => [
                        'title' => 'destination',
                        'description' => '异步调用目标资源描述符。',
                        'type' => 'string',
                        'example' => 'acs:fc:cn-shanghai:xxx:services/s1/functions/f1',
                    ],
                ],
            ],
            'DestinationConfig' => [
                'title' => '异步调用目标配置',
                'description' => '异步调用目标的配置信息。',
                'type' => 'object',
                'properties' => [
                    'onSuccess' => [
                        'description' => '成功的回调目标结构体。',
                        'example' => '{     "destination":"acs:fc:cn-shanghai:xxx:services/s1/functions/f1" }',
                        '$ref' => '#/components/schemas/Destination',
                    ],
                    'onFailure' => [
                        'description' => '失败的回调目标结构体。',
                        'example' => '{     "destination":"acs:fc:cn-shanghai:xxx:services/s1/functions/f1" }',
                        '$ref' => '#/components/schemas/Destination',
                    ],
                ],
            ],
            'Error' => [
                'title' => '错误',
                'description' => '错误。',
                'type' => 'object',
                'properties' => [
                    'errorCode' => [
                        'title' => '错误码',
                        'description' => '错误码。',
                        'type' => 'string',
                        'example' => 'FUNCTION_NOT_FOUND',
                    ],
                    'errorMessage' => [
                        'title' => '错误信息描述',
                        'description' => '错误信息。',
                        'type' => 'string',
                        'example' => 'function not found',
                    ],
                ],
            ],
            'ErrorInfo' => [
                'title' => 'A short description of struct',
                'description' => '预留实例创建过程中产生的错误',
                'type' => 'object',
                'properties' => [
                    'errorMessage' => [
                        'title' => '错误信息',
                        'type' => 'string',
                    ],
                    'stackTrace' => [
                        'title' => '错误堆栈',
                        'type' => 'string',
                    ],
                ],
            ],
            'EventBridgeTriggerConfig' => [
                'title' => 'A short description of struct',
                'description' => 'EventBridge触发器配置。',
                'type' => 'object',
                'properties' => [
                    'triggerEnable' => [
                        'title' => 'triggerEnable',
                        'description' => '触发器禁用开关。等同于EventBridge侧对应事件规则的[禁用开关](~~163710~~)，取值说明如下：'."\n"
                            .'- true：启用触发器。'."\n"
                            .'- false：禁用触发器。',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                    'asyncInvocationType' => [
                        'title' => 'asyncInvocationType',
                        'description' => '触发器调用函数的方式。目前支持同步调用以及异步调用，取值说明如下：'."\n"
                            .'- true：异步调用函数。'."\n"
                            .'- false：同步调用函数。',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                    'eventRuleFilterPattern' => [
                        'title' => 'eventRuleFilterPattern',
                        'description' => '事件模式。JSON格式，详细规则，请参见[EventBridge事件模式](~~181432~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '\'{"source":["acs.oss"],"type":["oss:BucketCreated:PutBucket"]}\'',
                    ],
                    'eventSourceConfig' => [
                        'description' => '事件源配置。',
                        'required' => true,
                        '$ref' => '#/components/schemas/EventSourceConfig',
                    ],
                    'eventSinkConfig' => [
                        'description' => '事件目标配置',
                        '$ref' => '#/components/schemas/EventSinkConfig',
                    ],
                    'runOptions' => [
                        'description' => '运行环境参数配置',
                        '$ref' => '#/components/schemas/RunOptions',
                    ],
                ],
            ],
            'EventSinkConfig' => [
                'title' => 'A short description of struct',
                'description' => '事件目标配置',
                'type' => 'object',
                'properties' => [
                    'deliveryOption' => [
                        'title' => 'deliveryOption',
                        'description' => '事件推送配置',
                        '$ref' => '#/components/schemas/DeliveryOption',
                    ],
                ],
            ],
            'EventSourceConfig' => [
                'title' => 'A short description of struct',
                'description' => 'EventBridge触发器事件源配置。',
                'type' => 'object',
                'properties' => [
                    'eventSourceType' => [
                        'title' => 'eventSourceType',
                        'description' => '触发器事件源类型，目前支持如下四种触发源：'."\n"
                            .'- Default：表示EventBridge官方触发源。'."\n"
                            .'- MNS：消息队列MNS队列作为触发源。'."\n"
                            .'- RocketMQ：消息队列RocketMQ版作为触发源。'."\n"
                            .'- RabbitMQ：消息队列RabbitMQ版作为触发源。'."\n"
                            .'- Kafka：云消息队列 Kafka 版作为触发源。'."\n"
                            .'- MQTT：云消息队列 MQTT 版作为触发源。'."\n"
                            .'- DTS：数据传输服务 DTS 作为触发源。'."\n"
                            ."\n"
                            .'> 该字段不可更新，更新时传入该字段将被忽略。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'RabbitMQ' => 'RabbitMQ',
                            'MQTT' => 'MQTT',
                            'DTS' => 'DTS',
                            'MNS' => 'MNS',
                            'Kafka' => 'Kafka',
                            'Default' => 'Default',
                            'RocketMQ' => 'RocketMQ',
                        ],
                        'example' => 'Default',
                    ],
                    'eventSourceParameters' => [
                        'description' => '自定义事件源参数，自定义事件源包括：MNS、RocketMQ、RabbitMQ、Kafka、MQTT、DTS。',
                        '$ref' => '#/components/schemas/EventSourceParameters',
                    ],
                ],
            ],
            'EventSourceParameters' => [
                'title' => 'A short description of struct',
                'description' => 'EventBridge触发器自定义事件源参数。',
                'type' => 'object',
                'properties' => [
                    'sourceMNSParameters' => [
                        'description' => '事件源为消息服务MNS时的自定义参数配置。配置内容，请参见'."\n"
                            .'[SourceMNSParameters](~~343386~~)。',
                        '$ref' => '#/components/schemas/SourceMNSParameters',
                    ],
                    'sourceRocketMQParameters' => [
                        'description' => '事件源为消息队列RockerMQ版时的自定义参数配置。配置内容，请参见[SourceRocketMQParameters](~~343386~~)。',
                        '$ref' => '#/components/schemas/SourceRocketMQParameters',
                    ],
                    'sourceRabbitMQParameters' => [
                        'description' => '事件提供方为消息队列RabbitMQ版。',
                        '$ref' => '#/components/schemas/SourceRabbitMQParameters',
                    ],
                    'sourceKafkaParameters' => [
                        'description' => '事件提供方为云消息队列Kafka版。',
                        '$ref' => '#/components/schemas/SourceKafkaParameters',
                    ],
                    'sourceDTSParameters' => [
                        'description' => '事件提供方为数据传输服务DTS。',
                        '$ref' => '#/components/schemas/SourceDTSParameters',
                    ],
                    'sourceMQTTParameters' => [
                        'description' => '事件提供方为云消息队列MQTT版。',
                        '$ref' => '#/components/schemas/SourceMQTTParameters',
                    ],
                ],
            ],
            'HTTPTriggerConfig' => [
                'title' => 'HTTP触发器配置',
                'description' => 'HTTP触发器配置。',
                'type' => 'object',
                'properties' => [
                    'authType' => [
                        'title' => '认证类型',
                        'description' => '认证类型。默认值是function，表示需要认证。',
                        'type' => 'string',
                        'example' => 'anonymous, function',
                        'default' => 'function',
                        'enum' => [
                            'anonymous',
                            'function',
                        ],
                    ],
                    'methods' => [
                        'title' => '允许的HTTP方法列表',
                        'description' => '请求方法列表。允许同时支持多种方法。',
                        'type' => 'array',
                        'items' => [
                            'description' => '请求方法名。',
                            'type' => 'string',
                            'enumValueTitles' => [
                                'HEAD' => 'HEAD',
                                'DELETE' => 'DELETE',
                                'POST' => 'POST',
                                'GET' => 'GET',
                                'OPTIONS' => 'OPTIONS',
                                'PUT' => 'PUT',
                                'PATCH' => 'PATCH',
                            ],
                            'example' => 'GET, POST',
                            'default' => 'GET',
                            'enum' => [
                                'HEAD',
                                'GET',
                                'POST',
                                'PUT',
                                'DELETE',
                                'PATCH',
                                'OPTIONS',
                            ],
                        ],
                    ],
                    'disableURLInternet' => [
                        'title' => '禁用默认公网域名访问',
                        'description' => '禁用默认公网域名访问的开关。设置为true时，访问函数默认提供的公网URL地址会返回403错误。设置为false时，不会有任何影响。',
                        'type' => 'boolean',
                        'enumValueTitles' => [
                            'true' => 'true',
                            'false' => 'false',
                        ],
                        'default' => 'false',
                    ],
                    'authConfig' => [
                        'title' => '鉴权配置',
                        'description' => '鉴权配置',
                        'type' => 'string',
                    ],
                ],
            ],
            'InstanceLifecycleConfig' => [
                'title' => 'A short description of struct',
                'description' => '实例生命周期函数配置。',
                'type' => 'object',
                'properties' => [
                    'preFreeze' => [
                        'description' => 'PreFreeze函数配置。',
                        '$ref' => '#/components/schemas/LifecycleHook',
                    ],
                    'preStop' => [
                        'description' => 'PreStop函数配置。',
                        '$ref' => '#/components/schemas/LifecycleHook',
                    ],
                ],
            ],
            'JWTAuthConfig' => [
                'title' => 'JWT 鉴权配置',
                'type' => 'object',
                'properties' => [
                    'jwks' => [
                        'title' => 'jwks',
                        'type' => 'string',
                    ],
                    'tokenLookup' => [
                        'title' => 'JWT Token 配置',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'example' => 'header:auth',
                        ],
                    ],
                    'claimPassBy' => [
                        'title' => 'JWT Claim 转换',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'example' => 'header:userID:userIDToFunction',
                        ],
                        'example' => 'header:userID:userIDToFunction',
                    ],
                    'whiteList' => [
                        'title' => '白名单',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'example' => '/public/*',
                        ],
                    ],
                    'blackList' => [
                        'title' => '黑名单',
                        'type' => 'string',
                        'example' => '/userInfo/*',
                    ],
                ],
            ],
            'JaegerConfig' => [
                'title' => 'A short description of struct',
                'description' => '链路追踪配置。',
                'type' => 'object',
                'properties' => [
                    'endpoint' => [
                        'title' => 'endpoint',
                        'description' => '链路追踪服务地址。',
                        'type' => 'string',
                        'example' => 'http://tracing-analysis-dc-hz-internal.aliyuncs.com/adapt_******_******/api/traces',
                    ],
                ],
            ],
            'JobConfig' => [
                'title' => 'A short description of struct',
                'description' => 'JobConfig。',
                'type' => 'object',
                'properties' => [
                    'maxRetryTime' => [
                        'title' => 'maxRetryTime',
                        'description' => '最大重试次数。取值范围为0～100。日志服务根据触发间隔每次触发函数执行时，如果遇到错误（例如权限不足、网络失败、函数执行异常返回等），该参数定义本次触发所允许的最大重试次数。对于本次触发，如果超过最大重试次数仍无法成功的，需要等到下一次触发间隔到来时，由日志服务再次触发函数执行。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '3',
                    ],
                    'triggerInterval' => [
                        'title' => 'triggerInterval',
                        'description' => '日志服务触发函数运行的间隔。比如每隔120秒将logstore在最近120秒内的数据取出到函数服务，以执行自定义计算。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '60',
                    ],
                ],
            ],
            'JobLogConfig' => [
                'title' => 'A short description of struct',
                'description' => '触发操作自身的日志配置。',
                'type' => 'object',
                'properties' => [
                    'project' => [
                        'title' => 'project',
                        'description' => 'Project名称。触发函数的过程中发生的异常和函数执行统计信息会记录到该Project下的Logstore中。',
                        'type' => 'string',
                        'example' => 'my-sls-project-name'."\n",
                    ],
                    'logstore' => [
                        'title' => 'logstore',
                        'description' => 'Logstore名称。触发函数的过程中发生的异常和函数执行统计信息会记录到该Logstore。',
                        'type' => 'string',
                        'example' => 'my-sls-logstore-name',
                    ],
                ],
            ],
            'Layer' => [
                'title' => '层结构',
                'description' => 'Layer返回结构体。',
                'type' => 'object',
                'properties' => [
                    'layerName' => [
                        'title' => '层名称',
                        'description' => '层的名称。',
                        'type' => 'string',
                        'example' => 'MyLayer',
                    ],
                    'version' => [
                        'title' => '层版本',
                        'description' => '层的版本。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                    ],
                    'description' => [
                        'title' => '层描述',
                        'description' => '版本的描述信息。',
                        'type' => 'string',
                        'example' => 'the first layer',
                    ],
                    'code' => [
                        'title' => '层代码',
                        'description' => '层的代码包信息。',
                        '$ref' => '#/components/schemas/LayerCode',
                    ],
                    'codeSize' => [
                        'title' => '层代码大小',
                        'description' => '层的代码包大小，单位为Byte。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '421',
                    ],
                    'codeChecksum' => [
                        'title' => '层Checksum',
                        'description' => '层代码包的crc64校验码，根据**ECMA-182标准**计算得出。',
                        'type' => 'string',
                        'example' => '2825179536350****',
                    ],
                    'createTime' => [
                        'title' => '层创建时间',
                        'description' => '层版本的创建时间。',
                        'type' => 'string',
                        'example' => '2022-01-01T11:08:00Z',
                    ],
                    'acl' => [
                        'title' => '层访问类型',
                        'description' => '层的权限。取值0代表私有，取值1代表公有。官方公共层默认为公有，自定义层可以设置为私有或者公有。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
                    ],
                    'arn' => [
                        'title' => 'arn',
                        'description' => '【待废弃】层资源的名称。',
                        'type' => 'string',
                        'example' => 'xxxxxxxx#Layer-name#1',
                    ],
                    'arnV2' => [
                        'title' => 'arnV2',
                        'description' => '层资源的名称，格式为 `acs:fc:{region}:{accountID}:layers/{layerName}/versions/{layerVersion}`.',
                        'type' => 'string',
                        'example' => 'acs:fc:cn-beijing:186824xxxxxx:layers/fc_layer/versions/1',
                    ],
                    'license' => [
                        'title' => '许可协议',
                        'description' => '许可协议。',
                        'type' => 'string',
                        'example' => 'MIT',
                    ],
                    'compatibleRuntime' => [
                        'title' => 'compatibleRuntime',
                        'description' => '层支持的运行时环境列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '运行时名称。当前支持**nodejs16**、**nodejs14**、**nodejs12**、**nodejs10**、**nodejs8**、**nodejs6**、**python3.9**、**python3**、**python2.7**、**java11**、**java8**、**php7.2**、**go1**、**dotnetcore3.1**、**dotnetcore2.1**和**custom**。',
                            'type' => 'string',
                            'example' => 'python3',
                        ],
                    ],
                ],
            ],
            'LayerCode' => [
                'title' => '层代码结构',
                'description' => '层的代码。',
                'type' => 'object',
                'properties' => [
                    'repositoryType' => [
                        'title' => '层代码类型',
                        'description' => '层的代码类型。',
                        'type' => 'string',
                        'example' => 'OSS',
                    ],
                    'location' => [
                        'title' => '层代码位置',
                        'description' => '层的代码地址。',
                        'type' => 'string',
                        'example' => 'https://xyz.oss-cnxxx.aliyuncs.com/xxx/xxx/xxx',
                    ],
                ],
            ],
            'LifecycleHook' => [
                'title' => 'A short description of struct',
                'description' => '生命周期函数配置。',
                'type' => 'object',
                'properties' => [
                    'handler' => [
                        'title' => 'handler name',
                        'description' => '函数执行的入口，更多信息，请参见[函数入口](~~157704~~)。',
                        'type' => 'string',
                        'example' => 'index.preStop',
                    ],
                    'timeout' => [
                        'title' => 'timeout in second',
                        'description' => '运行的超时时间，单位为秒。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                    ],
                ],
            ],
            'LogConfig' => [
                'title' => '日志配置',
                'description' => '函数日志配置。',
                'type' => 'object',
                'properties' => [
                    'logstore' => [
                        'title' => '日志库',
                        'description' => 'Logstore名称。',
                        'type' => 'string',
                        'example' => 'test-prj',
                    ],
                    'project' => [
                        'title' => '日志项目',
                        'description' => 'Project名称。',
                        'type' => 'string',
                        'example' => 'test-logstore',
                    ],
                    'enableRequestMetrics' => [
                        'title' => '开启请求级别指标',
                        'description' => '是否开启请求级别指标。开启该功能后，您可以查看该服务下所有函数的某次调用所消耗的时间及内存。'."\n"
                            .'  * **false**：表示关闭请求级别指标。'."\n"
                            .'  * **true**：默认值，表示开启请求级别指标。',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                    'enableInstanceMetrics' => [
                        'title' => '开启实例级别指标',
                        'description' => '是否开启实例级别指标。开启该功能后，您可以查看实例级别的CPU使用情况、内存使用情况、实例网络情况和实例内请求数等核心指标信息。'."\n"
                            .'  * **false**：默认值，表示关闭实例级别指标。'."\n"
                            .'  * **true**：表示开启实例级别指标。',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                    'logBeginRule' => [
                        'title' => '日志切分规则',
                        'description' => '选择日志分割规则。表示按规则将日志进行切分，切分后的日志块将被写入到SLS。'."\n"
                            .'  * **None**：默认值，表示关闭日志分割规则。'."\n"
                            .'  * **DefaultRegex**：表示将日志分割规则设置为默认正则规则。当该功能设置为DefaultRegex后，默认分割日志的规则将按照行首是否带有日期进行切分，例如您的日志行首是2021-10-10将被认为是一块日志的首行，首行和接下来连续不带日期的日志将被作为整体写入到SLS。',
                        'type' => 'string',
                        'example' => 'DefaultRegex',
                    ],
                ],
            ],
            'LogTriggerConfig' => [
                'title' => 'A short description of struct',
                'description' => '日志服务SLS触发器配置。',
                'type' => 'object',
                'properties' => [
                    'sourceConfig' => [
                        'description' => '触发源配置。',
                        '$ref' => '#/components/schemas/SourceConfig',
                    ],
                    'jobConfig' => [
                        'description' => '触发器读取日志间隔及错误重试配置。',
                        '$ref' => '#/components/schemas/JobConfig',
                    ],
                    'functionParameter' => [
                        'title' => 'functionParameter',
                        'description' => '调用参数。',
                        'type' => 'object',
                        'additionalProperties' => [
                            'description' => '调用参数内容。日志服务将该配置内容作为event的一部分传入函数，该配置内容必须是JSON格式的字符串。',
                            'type' => 'string',
                            'example' => '"serverless"',
                        ],
                    ],
                    'logConfig' => [
                        'description' => '触发操作自身的日志配置。',
                        'example' => '{\'project\': \'my-sls-project\', \'logstore\': \'my-sls-logstore\'}',
                        '$ref' => '#/components/schemas/JobLogConfig',
                    ],
                    'enable' => [
                        'title' => 'enable',
                        'description' => '是否启用触发器。'."\n"
                            ."\n"
                            .'- **true**：启用触发器。'."\n"
                            .'- **false**：不开启触发器。这种情况下，配置参数将不生效。'."\n"
                            ."\n",
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                ],
            ],
            'MeteringConfig' => [
                'title' => '计量信息',
                'type' => 'object',
                'properties' => [
                    'payerId' => [
                        'title' => '支付用户',
                        'type' => 'string',
                    ],
                    'role' => [
                        'title' => '权限',
                        'type' => 'string',
                    ],
                    'logConfig' => [
                        'title' => '日志仓库',
                        '$ref' => '#/components/schemas/LogConfig',
                    ],
                ],
            ],
            'MnsTopicTriggerConfig' => [
                'title' => 'A short description of struct',
                'description' => 'MNS主题触发器配置。',
                'type' => 'object',
                'properties' => [
                    'filterTag' => [
                        'title' => 'filterTag',
                        'description' => '过滤标签。只有收到包含了此处设置的过滤标签字符串的消息时，才会触发函数执行。',
                        'type' => 'string',
                        'example' => '“serverless”',
                    ],
                    'notifyContentFormat' => [
                        'title' => 'notifyContentFormat',
                        'description' => '触发事件的内容格式。 目前支持下面两种内容格式：'."\n"
                            .'- **JSON**'."\n"
                            .'- **STREAM**',
                        'type' => 'string',
                        'enumValueTitles' => [
                            'STREAM' => 'STREAM',
                            'JSON' => 'JSON',
                        ],
                        'example' => 'JSON',
                    ],
                    'notifyStrategy' => [
                        'title' => 'notifyStrategy',
                        'description' => '重试策略。目前支持下面两种重试策略：'."\n"
                            .'- **BACKOFF\\_RETRY**：表示退避重试；重试3次，每次重试的间隔时间是10秒到20秒之间的随机值。'."\n"
                            ."\n"
                            .'- **EXPONENTIAL\\_DECAY\\_RETRY**：表示指数衰减重试；重试176次，每次重试的间隔时间指数递增至512秒，总计重试时间为1天。每次重试的具体间隔为：1，2，4，8，16，32，64，128，256，512，512...512 （共167个512）。',
                        'type' => 'string',
                        'enumValueTitles' => [
                            'EXPONENTIAL_DECAY_RETRY' => 'EXPONENTIAL_DECAY_RETRY',
                            'BACKOFF_RETRY' => 'BACKOFF_RETRY',
                        ],
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
                        'title' => 'groupID',
                        'description' => '群组ID。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '100',
                    ],
                    'mountPoints' => [
                        'title' => '挂载点',
                        'description' => '挂载点列表。'."\n"
                            ."\n",
                        'type' => 'array',
                        'items' => [
                            'description' => '挂载点。',
                            'type' => 'object',
                            'properties' => [
                                'mountDir' => [
                                    'title' => '本地挂载目录',
                                    'description' => '本地挂载目录。'."\n"
                                        ."\n",
                                    'type' => 'string',
                                    'example' => '/home/test',
                                ],
                                'serverAddr' => [
                                    'title' => 'NAS服务器地址',
                                    'description' => 'NAS服务器地址。'."\n"
                                        ."\n",
                                    'type' => 'string',
                                    'example' => '***-uni85.cn-hangzhou.nas.aliyuncs.com:/',
                                ],
                                'enableTLS' => [
                                    'title' => '使用传输加密方式挂载',
                                    'description' => '使用传输加密方式挂载。'."\n"
                                        .'说明：仅通用型NAS支持传输加密。',
                                    'type' => 'boolean',
                                    'example' => 'false',
                                ],
                            ],
                        ],
                    ],
                    'userId' => [
                        'title' => 'userID',
                        'description' => '账号ID。'."\n"
                            ."\n",
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '100',
                    ],
                ],
            ],
            'OSSMountConfig' => [
                'title' => 'OSS挂载配置',
                'description' => 'OSS挂载配置。',
                'type' => 'object',
                'properties' => [
                    'mountPoints' => [
                        'title' => 'OSS挂载点配置',
                        'description' => 'OSS挂载点配置。',
                        'type' => 'array',
                        'items' => [
                            'description' => 'OSS挂载点的详细配置信息。',
                            'type' => 'object',
                            'properties' => [
                                'bucketName' => [
                                    'title' => '挂载的OSS bucket',
                                    'description' => '挂载的OSS Bucket。',
                                    'type' => 'string',
                                    'example' => 'my-bucket',
                                ],
                                'mountDir' => [
                                    'title' => '挂载目录',
                                    'description' => '挂载目录。',
                                    'type' => 'string',
                                    'example' => '/mnt/dir',
                                ],
                                'readOnly' => [
                                    'title' => '是否只读',
                                    'description' => '挂载OSS Bucket后，挂载目录的访问权限是否为只读。取值说明如下：'."\n"
                                        .'- true：只读。'."\n"
                                        .'- false：读写。',
                                    'type' => 'boolean',
                                    'example' => 'true',
                                ],
                                'endpoint' => [
                                    'title' => 'OSS访问地址',
                                    'description' => 'OSS访问地址。',
                                    'type' => 'string',
                                    'example' => 'http://oss-cn-shanghai.aliyuncs.com',
                                ],
                                'bucketPath' => [
                                    'title' => '挂载的OSS bucket路径',
                                    'description' => '挂载的OSS Bucket路径。',
                                    'type' => 'string',
                                    'example' => '/my-dir',
                                ],
                            ],
                        ],
                    ],
                ],
                'required' => false,
            ],
            'OSSTriggerConfig' => [
                'title' => 'A short description of struct',
                'description' => '触发器配置。',
                'type' => 'object',
                'properties' => [
                    'events' => [
                        'title' => 'events',
                        'description' => '事件列表，请填写OSS对象存储相关的事件。',
                        'type' => 'array',
                        'items' => [
                            'description' => '事件类型名称，支持事件类型名称中包含通配符号。具体事件类型，请参见[OSS触发事件列表](~~62922~~)。',
                            'type' => 'string',
                            'example' => '"oss:ObjectCreated:*"',
                        ],
                    ],
                    'filter' => [
                        'description' => '事件过滤规则。',
                        '$ref' => '#/components/schemas/OSSTriggerFilter',
                    ],
                ],
            ],
            'OSSTriggerFilter' => [
                'title' => 'A short description of struct',
                'description' => '事件过滤规则。',
                'type' => 'object',
                'properties' => [
                    'key' => [
                        'description' => '事件过滤规则描述。',
                        'example' => '参考下面完整配置中的key部分格式及内容：'."\n"
                            .'{"events": ["oss:ObjectCreated:*"], "filter": {"key": {"prefix": "/prefix", "suffix": ".zip"}}}',
                        '$ref' => '#/components/schemas/OSSTriggerKey',
                    ],
                ],
            ],
            'OSSTriggerKey' => [
                'title' => 'A short description of struct',
                'description' => '事件过滤规则描述。',
                'type' => 'object',
                'properties' => [
                    'prefix' => [
                        'title' => 'prefix',
                        'description' => '限定事件相关的资源名称，只关注以Prefix作为前缀的资源相关的事件，例如Prefix是“serverless\\_"，则只有以"serverless\\_"开始的资源相关的事件才能触发当前函数。',
                        'type' => 'string',
                        'example' => '"serverless_"',
                    ],
                    'suffix' => [
                        'title' => 'suffix',
                        'description' => '限定事件相关的资源名称，只关注以Suffix作为后缀的资源相关的事件，例如Suffix是“.zip"，则只有以".zip"为后缀的资源相关的事件才能触发当前函数。',
                        'type' => 'string',
                        'example' => '".zip"',
                    ],
                ],
            ],
            'OnDemandConfig' => [
                'title' => '按量资源配置',
                'description' => '按量资源配置',
                'type' => 'object',
                'properties' => [
                    'resource' => [
                        'title' => '函数详情',
                        'description' => '资源的描述。',
                        'type' => 'string',
                        'example' => '123#serviceName#alias#functionName',
                    ],
                    'maximumInstanceCount' => [
                        'title' => 'todo',
                        'description' => '按量实例的上限值。最小值为0，表示禁止按量调用。最大值不超过账号级别的并发度限制，默认为300。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '10',
                    ],
                ],
            ],
            'OpenReservedCapacity' => [
                'title' => 'A short description of struct',
                'description' => '预付费实例信息。',
                'type' => 'object',
                'properties' => [
                    'instanceId' => [
                        'title' => 'instanceId',
                        'description' => '预付费实例ID信息。',
                        'type' => 'string',
                        'example' => 'fc-xxxx',
                    ],
                    'cu' => [
                        'title' => 'cu',
                        'description' => '购买的预付费CU数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '15',
                    ],
                    'deadline' => [
                        'title' => 'deadline',
                        'description' => '返回函数执行的超时时间，格式为Unix时间戳，单位：毫秒。',
                        'type' => 'string',
                        'example' => '150000000',
                    ],
                    'createdTime' => [
                        'title' => 'createdTime',
                        'description' => '创建时间。',
                        'type' => 'string',
                        'example' => '2020-04-03T05:57:28Z',
                    ],
                    'lastModifiedTime' => [
                        'title' => 'lastModifiedTime',
                        'description' => '上一次被更新的时间。',
                        'type' => 'string',
                        'example' => '2020-04-03T05:57:28Z',
                    ],
                    'isRefunded' => [
                        'title' => 'isRefunded',
                        'description' => '是否已经退款。',
                        'type' => 'string',
                        'example' => 'true',
                    ],
                ],
            ],
            'OutputCodeLocation' => [
                'title' => 'A short description of struct',
                'description' => '层的代码地址。',
                'type' => 'object',
                'properties' => [
                    'repositoryType' => [
                        'title' => 'repositoryType',
                        'description' => '层的代码类型。',
                        'type' => 'string',
                        'example' => 'OSS',
                    ],
                    'location' => [
                        'title' => 'location',
                        'description' => '层的代码地址。',
                        'type' => 'string',
                        'example' => 'https://xyz.oss-cnxxx.aliyuncs.com/xxx/xxx/xxx',
                    ],
                ],
            ],
            'PathConfig' => [
                'title' => '单条路径匹配规则，根据请求的路径和方法匹配指定版本/别名的函数',
                'description' => '自定义域名单条路由规则。',
                'type' => 'object',
                'properties' => [
                    'functionName' => [
                        'title' => '该路径/方法对应的函数名称',
                        'description' => '此条路由规则对应的函数名称。'."\n"
                            ."\n",
                        'type' => 'string',
                        'example' => 'f1',
                    ],
                    'methods' => [
                        'title' => '请求方法，不填表示当前路径的所有方法匹配同一函数',
                        'description' => '此条路由规则支持的请求方法列表。'."\n"
                            ."\n",
                        'type' => 'array',
                        'items' => [
                            'description' => '请求方法。',
                            'type' => 'string',
                            'enumValueTitles' => [
                                'HEAD' => 'HEAD',
                                'DELETE' => 'DELETE',
                                'POST' => 'POST',
                                'GET' => 'GET',
                                'OPTIONS' => 'OPTIONS',
                                'PUT' => 'PUT',
                                'PATCH' => 'PATCH',
                            ],
                            'example' => 'GET',
                            'enum' => [
                                'HEAD',
                                'GET',
                                'POST',
                                'PUT',
                                'DELETE',
                                'PATCH',
                            ],
                        ],
                    ],
                    'path' => [
                        'title' => '请求路径',
                        'description' => '此条路由规则对应的请求路径。'."\n"
                            ."\n",
                        'type' => 'string',
                        'example' => '/login',
                    ],
                    'qualifier' => [
                        'title' => '该路径/方法对应服务的版本/别名',
                        'description' => '此条路由规则对应的函数所在服务的版本。更多信息，请参见[版本简介](~~96351~~)。',
                        'type' => 'string',
                        'example' => 'prod',
                    ],
                    'serviceName' => [
                        'title' => '该路径/方法对应的服务名称',
                        'description' => '此条路由规则对应的函数所在服务的名称。'."\n"
                            ."\n",
                        'type' => 'string',
                        'example' => 's1',
                    ],
                    'rewriteConfig' => [
                        'title' => 'URI重写配置',
                        'description' => 'URI重写配置。',
                        '$ref' => '#/components/schemas/RewriteConfig',
                    ],
                ],
            ],
            'PolicyItem' => [
                'title' => '灰度规则项',
                'description' => '规则项具体描述实体。',
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'title' => '参数类型。可以取HTTP请求中的有关值。',
                        'description' => '参数类型。可以取HTTP请求中的有关值。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Header',
                        'enum' => [
                            'Header',
                            'Cookie',
                            'Param',
                        ],
                    ],
                    'key' => [
                        'title' => 'key指定控制流量灰度的字段名。 例如key为"x-test-uid"，则请求中"x-test-uid" 字段的值将决定请求是否被路由到灰度版本上',
                        'description' => 'key指定控制流量灰度的字段名。 例如key为`x-test-uid`，则请求中`x-test-uid`字段的值将决定请求是否被路由到灰度版本上。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'x-test-uid',
                    ],
                    'value' => [
                        'title' => 'value指定控制流量灰度的字段值。 请求中由参数key指定的字段实际值会和参数value字段值，按指定的运算符进行比较，决定请求是否被路由到灰度版本上',
                        'description' => 'value指定控制流量灰度的字段值。 请求中由参数key指定的字段实际值会和参数value字段值，按指定的运算符进行比较，决定请求是否被路由到灰度版本上。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '11111',
                    ],
                    'operator' => [
                        'title' => 'operator指定运算符。  将请求中由参数key指定的字段的实际值和参数 value 指定的值，按指定的运算符进行比较。  取值：    ● >, <, >=, <=, = 和 != ，大小比较规则遵循字典序；  ● in ：字符串包含关系；  ●  percent: 百分比值（取值范围 (0,100] 的整数)  表示根据请求中指定字段key对应的实际值分布，按百分比灰度。其中字段由参数key指定，百分比值由参数 value 指定 。 例如一条 { type=Header, key=uid, value=20, operator=percent } 的规则，表示根据请求 header 中字段 uid 的值的分布，其中 20% 的请求路由到灰度版本上。',
                        'description' => 'operator指定运算符。  将请求中由参数key指定的字段的实际值和参数value指定的值，按指定的运算符进行比较。取值如下：'."\n"
                            ."\n"
                            .'- **>**、**<**、**>=**、**<=**、**=**和**!=**：大小比较规则遵循字典序。'."\n"
                            .'- **in**：字符串包含关系。'."\n"
                            .'- **percent**：百分比值，取值范围为 (0,100] 的整数。表示根据请求中指定字段key对应的实际值分布，按百分比灰度。其中字段由参数key指定，百分比值由参数value指定 。 例如，一条`{ type=Header, key=uid, value=20, operator=percent }`的规则，表示根据请求header中字段uid的值的分布，其中20%的请求路由到灰度版本上。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '=',
                        'enum' => [
                            '>',
                            '<',
                            '>=',
                            '<=',
                            '=',
                            '!=',
                            'in',
                            'percent',
                        ],
                    ],
                ],
                'required' => false,
            ],
            'PreFreeze' => [
                'title' => 'A short description of struct',
                'description' => 'PreFreeze函数定义。',
                'type' => 'object',
                'properties' => [
                    'handler' => [
                        'title' => 'preFreeze handler name',
                        'description' => 'PreFreeze函数执行的入口。',
                        'type' => 'string',
                        'example' => 'index.preFreeze',
                    ],
                    'timeout' => [
                        'title' => 'handler timeout',
                        'description' => 'PreFreeze函数超时时间。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                    ],
                ],
            ],
            'PreStop' => [
                'title' => 'A short description of struct',
                'description' => 'PreStop函数定义。',
                'type' => 'object',
                'properties' => [
                    'handler' => [
                        'title' => 'PreStop handler',
                        'description' => 'PreStop函数执行的入口。'."\n"
                            ."\n",
                        'type' => 'string',
                        'example' => 'index.PreStop',
                    ],
                    'timeout' => [
                        'title' => 'PreStop hander timeout',
                        'description' => 'PreStop函数超时时间。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                    ],
                ],
            ],
            'RdsTriggerConfig' => [
                'title' => 'A short description of struct',
                'description' => 'RdsTriggerConfig',
                'type' => 'object',
                'properties' => [
                    'subscriptionObjects' => [
                        'title' => 'subscriptionObjects',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'retry' => [
                        'title' => 'retry',
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'concurrency' => [
                        'title' => 'concurrency',
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'eventFormat' => [
                        'title' => 'eventFormat',
                        'type' => 'string',
                    ],
                ],
            ],
            'Resource' => [
                'title' => 'A short description of struct',
                'description' => 'Resource',
                'type' => 'object',
                'properties' => [
                    'resourceArn' => [
                        'title' => 'resourceArn',
                        'description' => '阿里云资源的标识。'."\n"
                            .'> 您可以通过此参数确认该资源所属的账号、服务、地域等。目前只能给Top Level资源的服务进行标签的相关操作。',
                        'type' => 'string',
                        'example' => 'acs:fc:cn-shanghai:188077086902****:services/demo',
                    ],
                    'tags' => [
                        'title' => 'tags',
                        'description' => '标签字典。取值说明如下：'."\n"
                            .'  - **key**：表示标签键。'."\n"
                            .'  - **value**：表示标签值。',
                        'type' => 'object',
                        'additionalProperties' => [
                            'description' => '标签值。',
                            'type' => 'string',
                            'example' => 'tag-value',
                        ],
                    ],
                ],
            ],
            'RetryStrategy' => [
                'title' => 'A short description of struct',
                'description' => '事件推送失败时的重试策略',
                'type' => 'object',
                'properties' => [
                    'PushRetryStrategy' => [
                        'title' => 'PushRetryStrategy',
                        'description' => '重试策略：'."\n"
                            ."\n"
                            .'- BACKOFF_RETRY：退避重试。'."\n"
                            .'- EXPONENTIAL_DECAY_RETRY：指数衰减重试。',
                        'type' => 'string',
                        'enumValueTitles' => [
                            'EXPONENTIAL_DECAY_RETRY' => 'EXPONENTIAL_DECAY_RETRY',
                            'BACKOFF_RETRY' => 'BACKOFF_RETRY',
                        ],
                        'example' => 'BACKOFF_RETRY',
                    ],
                    'MaximumEventAgeInSeconds' => [
                        'title' => 'MaximumEventAgeInSeconds',
                        'description' => '最大重试时间，单位为秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '512',
                    ],
                    'MaximumRetryAttempts' => [
                        'title' => 'MaximumRetryAttempts',
                        'description' => '最大重试次数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '3',
                    ],
                ],
            ],
            'RewriteConfig' => [
                'title' => 'URI重写配置',
                'description' => 'URI重写配置',
                'type' => 'object',
                'properties' => [
                    'equalRules' => [
                        'title' => '完全匹配规则',
                        'description' => '完全匹配规则',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'match' => [
                                    'title' => '匹配规则',
                                    'description' => '匹配规则',
                                    'type' => 'string',
                                    'example' => '/old',
                                ],
                                'replacement' => [
                                    'title' => '替换规则',
                                    'description' => '替换规则',
                                    'type' => 'string',
                                    'example' => '/new',
                                ],
                            ],
                        ],
                    ],
                    'wildcardRules' => [
                        'title' => '通配符匹配规则',
                        'description' => '通配符匹配规则',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'match' => [
                                    'title' => '匹配规则',
                                    'description' => '匹配规则',
                                    'type' => 'string',
                                    'example' => '/api/*',
                                ],
                                'replacement' => [
                                    'title' => '替换规则',
                                    'description' => '替换规则',
                                    'type' => 'string',
                                    'example' => '/$1',
                                ],
                            ],
                        ],
                    ],
                    'regexRules' => [
                        'title' => '正则匹配规则',
                        'description' => '正则匹配规则',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'match' => [
                                    'title' => '匹配规则',
                                    'description' => '匹配规则',
                                    'type' => 'string',
                                    'example' => '^/js/(.*?)$',
                                ],
                                'replacement' => [
                                    'title' => '替换规则',
                                    'description' => '替换规则',
                                    'type' => 'string',
                                    'example' => '/public/javascripts/$1',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'RouteConfig' => [
                'title' => 'A short description of struct',
                'description' => 'RouteConfig的具体信息。',
                'type' => 'object',
                'properties' => [
                    'routes' => [
                        'title' => 'routes',
                        'description' => '路由表：自定义域名访问时的PATH到Function的映射列表。'."\n"
                            ."\n",
                        'type' => 'array',
                        'items' => [
                            'description' => '自定义域名访问时PATH到Function的单条映射规则。',
                            '$ref' => '#/components/schemas/PathConfig',
                        ],
                    ],
                ],
            ],
            'RoutePolicy' => [
                'title' => '灰度规则：满足灰度规则的流量，将被路由至灰度实例',
                'description' => '灰度规则：满足灰度规则条件的流量，打向灰度实例。',
                'type' => 'object',
                'properties' => [
                    'condition' => [
                        'title' => '条件模式：灰度规则项的逻辑运算。 枚举值： AND:  全部灰度规则项满足则命中。 OR: 任意一个灰度规则项满足则命中。',
                        'description' => '条件模式：灰度规则项的逻辑运算。 取值如下： '."\n"
                            .'- **AND**:  全部灰度规则项满足则命中。 '."\n"
                            .'- **OR**: 任意一个灰度规则项满足则命中。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AND',
                    ],
                    'policyItems' => [
                        'title' => '灰度规则项数组',
                        'description' => '灰度规则项数组。',
                        'type' => 'array',
                        'items' => [
                            'description' => '灰度规则项。',
                            'required' => true,
                            '$ref' => '#/components/schemas/PolicyItem',
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'RunOptions' => [
                'title' => 'A short description of struct',
                'description' => '运行环境参数。',
                'type' => 'object',
                'properties' => [
                    'batchWindow' => [
                        'title' => 'batchWindow',
                        'description' => '攒批窗口配置。',
                        '$ref' => '#/components/schemas/BatchWindow',
                    ],
                    'retryStrategy' => [
                        'title' => 'retryStrategy',
                        'description' => '事件推送失败时的重试策略。',
                        '$ref' => '#/components/schemas/RetryStrategy',
                    ],
                    'deadLetterQueue' => [
                        'title' => 'deadLetterQueue',
                        'description' => '是否启用死信队列。默认不启用死信队列，超过重试策略后的消息将被丢弃。',
                        '$ref' => '#/components/schemas/DeadLetterQueue',
                    ],
                    'maximumTasks' => [
                        'title' => 'maximumTasks',
                        'description' => '并发配额（消费者数量）。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1',
                    ],
                    'errorsTolerance' => [
                        'title' => 'errorsTolerance',
                        'description' => '异常容忍策略：'."\n"
                            ."\n"
                            .'- NONE：不容忍异常。'."\n"
                            .'- ALL：容忍所有异常。',
                        'type' => 'string',
                        'enumValueTitles' => [
                            'ALL' => 'ALL',
                            'NONE' => 'NONE',
                        ],
                        'example' => 'ALL',
                    ],
                    'mode' => [
                        'title' => 'mode',
                        'description' => '消息数据推送到函数计算时的底层应用模式：'."\n"
                            ."\n"
                            .'- event-streaming：事件流模式，按照数组格式推送事件，会根据用户推送配置将一个或多个消息事件以批的形式推送到函数中进行处理，适合端到端的流式数据处理场景。'."\n"
                            .'- event-driven：事件模式，每次会将单个消息作为事件参数传入函数中，事件遵循CloudEvents规范。注意：该模式下，不支持攒批配置。',
                        'type' => 'string',
                        'enumValueTitles' => [
                            'event-streaming' => 'event-streaming',
                            'event-driven' => 'event-driven',
                        ],
                        'example' => 'event-streaming',
                    ],
                ],
            ],
            'ScheduledActions' => [
                'title' => 'A short description of struct',
                'description' => '定时伸缩配置。',
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'title' => 'name',
                        'description' => '策略名称。',
                        'type' => 'string',
                        'example' => 'name',
                    ],
                    'startTime' => [
                        'title' => 'startTime',
                        'description' => '策略生效时间。',
                        'type' => 'string',
                        'example' => '2020-10-10T10:10:10Z',
                    ],
                    'endTime' => [
                        'title' => 'endTime',
                        'description' => '策略失效时间。',
                        'type' => 'string',
                        'example' => '2021-10-10T10:10:10Z',
                    ],
                    'target' => [
                        'title' => 'target',
                        'description' => '预留的目标资源个数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '50',
                    ],
                    'scheduleExpression' => [
                        'title' => 'scheduleExpression',
                        'description' => '定时配置。',
                        'type' => 'string',
                        'example' => 'cron(0/30 * * * *)',
                    ],
                ],
            ],
            'SourceConfig' => [
                'title' => 'A short description of struct',
                'description' => '触发源配置。',
                'type' => 'object',
                'properties' => [
                    'logstore' => [
                        'title' => 'logstore',
                        'description' => 'Logstore名称。当前触发器会定时从此Logstore中订阅数据，然后触发函数。',
                        'type' => 'string',
                        'example' => 'my-sls-logstore-name'."\n",
                    ],
                ],
            ],
            'SourceDTSParameters' => [
                'title' => 'A short description of struct',
                'description' => '事件源为数据传输服务 DTS时的自定义参数配置。',
                'type' => 'object',
                'properties' => [
                    'RegionId' => [
                        'title' => 'RegionId',
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-shanghai',
                    ],
                    'BrokerUrl' => [
                        'title' => 'BrokerUrl',
                        'description' => '数据订阅通道的网络地址及端口号信息。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dts-cn-shanghai-vpc.aliyuncs.com:18003',
                    ],
                    'Topic' => [
                        'title' => 'Topic',
                        'description' => '数据订阅通道的订阅Topic。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn_shanghai_vpc_rm_uf6398ykj0218****_dts_trigger_upgrade_from_old_version2',
                    ],
                    'Sid' => [
                        'title' => 'Sid',
                        'description' => '消费组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dtse34j22j025a****',
                    ],
                    'Username' => [
                        'title' => 'Username',
                        'description' => '消费组的账号。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dts_trigger',
                    ],
                    'Password' => [
                        'title' => 'Password',
                        'description' => '消费组的账号密码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dtsTest123',
                    ],
                    'InitCheckPoint' => [
                        'title' => 'InitCheckPoint',
                        'description' => '消费位点，即SDK客户端消费第一条数据的时间戳，格式为Unix时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1677340805',
                    ],
                    'TaskId' => [
                        'title' => 'TaskId',
                        'description' => '任务id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'e34z2gm325q****',
                    ],
                ],
            ],
            'SourceKafkaParameters' => [
                'title' => 'A short description of struct',
                'description' => '事件源为云消息队列 Kafka 版时的自定义参数配置。',
                'type' => 'object',
                'properties' => [
                    'RegionId' => [
                        'title' => 'RegionId',
                        'description' => '地域ID。',
                        'type' => 'string',
                        'example' => 'cn-hangzhou',
                    ],
                    'InstanceId' => [
                        'title' => 'InstanceId',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'r-8vb64581862c****'."\n",
                    ],
                    'Topic' => [
                        'title' => 'Topic',
                        'description' => 'Topic名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'popvip_center_robot_order',
                    ],
                    'ConsumerGroup' => [
                        'title' => 'ConsumerGroup',
                        'description' => '订阅该Topic的消费者所对应的Group ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'DEFAULT_GROUP',
                    ],
                    'OffsetReset' => [
                        'title' => 'OffsetReset',
                        'description' => '偏移量，取值说明如下：'."\n"
                            .'- earliest：最早消费位点。'."\n"
                            .'- latest：最新消费位点。',
                        'type' => 'string',
                        'enumValueTitles' => [
                            'earliest' => 'earliest',
                            'latest' => 'latest',
                        ],
                        'example' => 'latest',
                    ],
                    'Network' => [
                        'title' => 'Network',
                        'description' => '网络配置 ：默认值Default，VPC网络是PublicNetwork。',
                        'type' => 'string',
                        'example' => 'Default',
                    ],
                    'VpcId' => [
                        'title' => 'VpcId',
                        'description' => 'VPC ID。',
                        'type' => 'string',
                        'example' => 'vpc-8vblalsi0vbhizr77****'."\n",
                    ],
                    'VSwitchIds' => [
                        'title' => 'VSwitchIds',
                        'description' => '虚拟交换机ID。',
                        'type' => 'string',
                        'example' => 'vsw-bp179l3llg3jjxwrq72****'."\n",
                    ],
                    'SecurityGroupId' => [
                        'title' => 'SecurityGroupId',
                        'description' => '安全组ID。',
                        'type' => 'string',
                        'example' => 'sg-bp1iv19sp1msc7zot4****'."\n",
                    ],
                ],
            ],
            'SourceMNSParameters' => [
                'title' => 'A short description of struct',
                'description' => '事件源为消息服务MNS时的自定义参数配置。',
                'type' => 'object',
                'properties' => [
                    'RegionId' => [
                        'title' => 'RegionId',
                        'description' => '消息服务MNS Queue所属地域。',
                        'type' => 'string',
                        'example' => 'cn-hangzhou',
                    ],
                    'QueueName' => [
                        'title' => 'QueueName',
                        'description' => '消息服务MNS的Queue的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo',
                    ],
                    'IsBase64Decode' => [
                        'title' => 'IsBase64Decode',
                        'description' => '是否开启Base64编码。默认为true。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'SourceMQTTParameters' => [
                'title' => 'A short description of struct',
                'description' => '事件源为云消息队列 MQTT 版时的自定义参数配置。',
                'type' => 'object',
                'properties' => [
                    'RegionId' => [
                        'title' => 'RegionId',
                        'description' => '地域ID。',
                        'type' => 'string',
                        'example' => 'cn-shanghai',
                    ],
                    'InstanceId' => [
                        'title' => 'InstanceId',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'mqtt-****',
                    ],
                    'Topic' => [
                        'title' => 'Topic',
                        'description' => '消息的Topic。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'testTopic',
                    ],
                ],
            ],
            'SourceRabbitMQParameters' => [
                'title' => 'A short description of struct',
                'description' => '事件源为消息队列RockerMQ版时的自定义参数配置。',
                'type' => 'object',
                'properties' => [
                    'RegionId' => [
                        'title' => 'RegionId',
                        'description' => '消息队列RabbitMQ版的实例所属地域。',
                        'type' => 'string',
                        'example' => 'cn-hangzhou',
                    ],
                    'InstanceId' => [
                        'title' => 'InstanceId',
                        'description' => '消息队列RabbitMQ版的实例的ID。更多信息，请参见[使用限制](~~101627~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'amqp-cn-nif22u74****',
                    ],
                    'VirtualHostName' => [
                        'title' => 'VirtualHostName',
                        'description' => '消息队列RabbitMQ版实例的Vhost的名称。更多信息，请参见[使用限制](~~101627~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'eb-connect',
                    ],
                    'QueueName' => [
                        'title' => 'QueueName',
                        'description' => '消息队列RabbitMQ版实例的Queue的名称。更多信息，请参见[使用限制](~~101627~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo',
                    ],
                ],
            ],
            'SourceRocketMQParameters' => [
                'title' => 'A short description of struct',
                'description' => '事件源为消息队列RockerMQ版时的自定义参数配置。',
                'type' => 'object',
                'properties' => [
                    'RegionId' => [
                        'title' => 'RegionId',
                        'description' => '消息队列RocketMQ版的实例所属地域。',
                        'type' => 'string',
                        'example' => 'cn-hangzhou',
                    ],
                    'InstanceId' => [
                        'title' => 'InstanceId',
                        'description' => '消息队列RocketMQ版的实例ID。更多信息，请参见[使用限制](~~85006~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'MQ_INST_164901546557****_BAAN****',
                    ],
                    'Topic' => [
                        'title' => 'Topic',
                        'description' => '消息队列RocketMQ版实例的Topic名称。更多信息，请参见[使用限制](~~85006~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'mytopic',
                    ],
                    'Tag' => [
                        'title' => 'Tag',
                        'description' => '消息的过滤标签。',
                        'type' => 'string',
                        'example' => 'test',
                    ],
                    'Offset' => [
                        'title' => 'Offset',
                        'description' => '消息的消费位点。取值说明如下：'."\n"
                            ."\n"
                            .'- CONSUME_FROM_LAST_OFFSET：从最新位点开始消费。'."\n"
                            ."\n"
                            .'- CONSUME_FROM_FIRST_OFFSET：从最早位点开始消费。'."\n"
                            ."\n"
                            .'- CONSUME_FROM_TIMESTAMP：从指定时间点的位点开始消费。'."\n"
                            ."\n"
                            .'默认值：CONSUME_FROM_LAST_OFFSET。',
                        'type' => 'string',
                        'example' => 'CONSUME_FROM_TIMESTAMP',
                    ],
                    'Timestamp' => [
                        'title' => 'Timestamp',
                        'description' => '时间戳。仅当参数Offset取值为CONSUME_FROM_TIMESTAMP时，该参数有效。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1636597951964',
                    ],
                    'GroupID' => [
                        'title' => 'GroupID',
                        'description' => '消息队列RocketMQ版的Group ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'GID_group1',
                    ],
                    'InstanceType' => [
                        'title' => 'InstanceType',
                        'description' => '消息队列RocketMQ版的实例类型。',
                        'type' => 'string',
                        'example' => 'Cloud_5',
                    ],
                    'InstanceEndpoint' => [
                        'title' => 'InstanceEndpoint',
                        'description' => '消息队列RocketMQ版的实例接入点信息。',
                        'type' => 'string',
                        'example' => 'registry-vpc.cn-hangzhou.aliyuncs.com',
                    ],
                    'InstanceUsername' => [
                        'title' => 'InstanceUsername',
                        'description' => '消息队列RocketMQ版的实例的用户名。使用公网访问时，SDK代码中需要配置实例的用户名和密码，进行身份验证。',
                        'type' => 'string',
                        'example' => '6W0xz2uPfiwp****',
                    ],
                    'InstancePassword' => [
                        'title' => 'InstancePassword',
                        'description' => '消息队列RocketMQ版的实例的密码。',
                        'type' => 'string',
                        'example' => '****',
                    ],
                    'FilterType' => [
                        'title' => 'FilterType',
                        'description' => '消息过滤类型。',
                        'type' => 'string',
                        'example' => 'Tag',
                    ],
                    'FilterSql' => [
                        'title' => 'FilterSql',
                        'description' => '无效参数，您无需配置。',
                        'type' => 'string',
                        'example' => '无',
                    ],
                    'AuthType' => [
                        'title' => 'AuthType',
                        'description' => '认证类型。取值为ACL或为空。取值为ACL表示开启鉴权，需填写InstanceUsername和InstancePassword。',
                        'type' => 'string',
                        'example' => 'ACL',
                    ],
                    'InstanceVpcId' => [
                        'title' => 'InstanceVpcId',
                        'description' => '实例所关联的专有网络的ID。',
                        'type' => 'string',
                        'example' => 'vpc-uf6of9452b2pba82c****',
                    ],
                    'InstanceVSwitchIds' => [
                        'title' => 'InstanceVSwitchIds',
                        'description' => '实例所关联的交换机ID。',
                        'type' => 'string',
                        'example' => 'vsw-uf6gwtbn6etadpvz7****',
                    ],
                    'InstanceSecurityGroupId' => [
                        'title' => 'InstanceSecurityGroupId',
                        'description' => '安全组ID。',
                        'type' => 'string',
                        'example' => 'sg-hp35r2hc3a3sv8q2****',
                    ],
                    'InstanceNetwork' => [
                        'title' => 'InstanceNetwork',
                        'description' => '网络类型。',
                        'type' => 'string',
                        'example' => 'PrivateNetwork',
                    ],
                ],
            ],
            'StatefulAsyncInvocation' => [
                'title' => '异步任务结构体。',
                'description' => '异步任务结构体。',
                'type' => 'object',
                'properties' => [
                    'functionName' => [
                        'title' => '异步任务所属的函数的名称。',
                        'description' => '异步任务所属的函数的名称。',
                        'type' => 'string',
                        'example' => 'functionName',
                    ],
                    'serviceName' => [
                        'title' => '异步任务所属的服务的名称。',
                        'description' => '异步任务所属的服务的名称。',
                        'type' => 'string',
                        'example' => 'serviceName',
                    ],
                    'qualifier' => [
                        'title' => '异步任务所属的服务的别名或版本。',
                        'description' => '异步任务所属的服务的别名或版本。',
                        'type' => 'string',
                        'example' => 'LATEST',
                    ],
                    'invocationId' => [
                        'title' => '异步任务ID。',
                        'description' => '异步任务的任务ID。',
                        'type' => 'string',
                        'example' => 'demo-id',
                    ],
                    'status' => [
                        'title' => '异步任务的执行状态。      Enqueued：异步消息已入队，等待处理。      Succeeded：调用执行成功。      Failed：调用执行失败。      Running：调用执行中。      Stopped：调用执行终止。      Stopping：执行停止中。      Invalid：您的执行因函数被删除等原因处于无效状态（任务未被执行）。      Expired：您为任务配置了最长排队等待的期限。该任务因为超期被丢弃（任务未被执行）。      Retrying：异步调用因执行错误重试中。',
                        'description' => '异步任务的执行状态。'."\n"
                            ."\n"
                            .'- **Enqueued**：异步消息已入队，等待处理。'."\n"
                            ."\n"
                            .'- **Succeeded**：调用执行成功。'."\n"
                            .'- **Failed**：调用执行失败。'."\n"
                            .'- **Running**：调用执行中。'."\n"
                            .'- **Stopped**：调用执行终止。'."\n"
                            .'- **Stopping**：执行停止中。'."\n"
                            .'- **Invalid**：您的执行因函数被删除等原因处于无效状态（任务未被执行）。'."\n"
                            .'- **Expired**：您为任务配置了最长排队等待的期限。该任务因为超期被丢弃（任务未被执行）。'."\n"
                            .'- **Retrying**：异步调用因执行错误重试中。',
                        'type' => 'string',
                        'example' => 'Running',
                    ],
                    'startedTime' => [
                        'title' => '异步任务的开始时间。',
                        'description' => '异步任务开始时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1633449590000',
                    ],
                    'endTime' => [
                        'title' => '异步任务的结束时间。',
                        'description' => '异步任务结束时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1633449599000',
                    ],
                    'destinationStatus' => [
                        'title' => '异步任务的目的状态。',
                        'description' => '本次异步任务状态。',
                        'type' => 'string',
                        'example' => 'Succeeded',
                    ],
                    'invocationErrorMessage' => [
                        'title' => '异步任务的错误消息。',
                        'description' => '异步任务失败的错误消息。',
                        'type' => 'string',
                        'example' => 'UnhandledInvocationError',
                    ],
                    'invocationPayload' => [
                        'title' => '异步任务的任务触发事件。',
                        'description' => '本次异步任务的触发事件。',
                        'type' => 'string',
                        'example' => '{"key1":"value1","key2":"value2"}',
                    ],
                    'alreadyRetriedTimes' => [
                        'title' => '异步任务调用失败后的已重试次数。',
                        'description' => '本次异步任务失败后的已重试次数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '3',
                    ],
                    'requestId' => [
                        'title' => '异步任务的请求ID。',
                        'description' => '异步任务的请求ID。',
                        'type' => 'string',
                        'example' => 'ABA740D4-********-882707EADC37',
                    ],
                    'instanceId' => [
                        'title' => '异步任务的执行实例ID。',
                        'description' => '异步任务的执行实例ID。',
                        'type' => 'string',
                        'example' => 'D4-*******9FD1-882707E',
                    ],
                    'events' => [
                        'title' => '异步任务事件列表。',
                        'description' => '异步任务事件列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '异步任务事件。',
                            '$ref' => '#/components/schemas/StatefulAsyncInvocationEvent',
                        ],
                        'required' => false,
                    ],
                    'durationMs' => [
                        'title' => '异步任务执行时长。',
                        'description' => '异步任务执行时长。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '100',
                    ],
                    'returnPayload' => [
                        'title' => '异步任务返回结果。',
                        'description' => '异步任务返回结果。大小限制为1 MB。  '."\n"
                            .'该字段当前处于内测阶段，如您需要使用，请[联系我们](~~53087~~)为您开通。',
                        'type' => 'string',
                        'example' => 'my-result',
                    ],
                ],
            ],
            'StatefulAsyncInvocationEvent' => [
                'title' => '异步任务事件。',
                'description' => '异步任务事件。',
                'type' => 'object',
                'properties' => [
                    'eventId' => [
                        'title' => '事件ID。',
                        'description' => '事件ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1',
                    ],
                    'status' => [
                        'title' => '事件执行状态。',
                        'description' => '事件执行状态。'."\n"
                            .'- **Enqueued**：异步消息已入队，等待处理。'."\n"
                            .'- **Succeeded**：调用执行成功。'."\n"
                            .'- **Failed**：调用执行失败。'."\n"
                            .'- **Running**：调用执行中。'."\n"
                            .'- **Stopped**：调用执行终止。'."\n"
                            .'- **Stopping**：执行停止中。'."\n"
                            .'- **Invalid**：您的执行因函数被删除等原因处于无效状态（任务未被执行）。'."\n"
                            .'- **Expired**：您为任务配置了最长排队等待的期限。该任务因为超期被丢弃（任务未被执行）。'."\n"
                            .'- **Retrying**：异步调用因执行错误重试中。',
                        'type' => 'string',
                        'example' => 'Enqueued',
                    ],
                    'timestamp' => [
                        'title' => '事件时间。',
                        'description' => '事件时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1647420449721',
                    ],
                    'eventDetail' => [
                        'title' => '事件详细数据。',
                        'description' => '事件详细数据。',
                        'type' => 'string',
                        'example' => '{"Error":"UnhandledInvocationError"}',
                    ],
                ],
            ],
            'TLSConfig' => [
                'title' => 'FC支持的TLS配置',
                'description' => 'TLS配置。',
                'type' => 'object',
                'properties' => [
                    'minVersion' => [
                        'title' => 'TLS最小版本号',
                        'description' => 'TLS最小版本号。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'TLSv1.3' => 'TLSv1.3',
                            'TLSv1.2' => 'TLSv1.2',
                            'TLSv1.1' => 'TLSv1.1',
                            'TLSv1.0' => 'TLSv1.0',
                        ],
                        'example' => 'TLSv1.0',
                    ],
                    'cipherSuites' => [
                        'title' => 'TLS加密套件列表',
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
                        'title' => 'TLS最大版本号',
                        'description' => 'TLS最大版本号。',
                        'type' => 'string',
                        'enumValueTitles' => [
                            'TLSv1.3' => 'TLSv1.3',
                            'TLSv1.2' => 'TLSv1.2',
                            'TLSv1.1' => 'TLSv1.1',
                            'TLSv1.0' => 'TLSv1.0',
                        ],
                        'example' => 'TLSv1.3',
                    ],
                ],
            ],
            'TargetTrackingPolicies' => [
                'title' => 'A short description of struct',
                'description' => '指标追踪伸缩配置。',
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'title' => 'name',
                        'description' => '策略名称。',
                        'type' => 'string',
                        'example' => 'test_1',
                    ],
                    'startTime' => [
                        'title' => 'startTime',
                        'description' => '策略开始生效时间（UTC）。',
                        'type' => 'string',
                        'example' => '2020-10-10T10:10:10Z',
                    ],
                    'endTime' => [
                        'title' => 'endTime',
                        'description' => '策略结束时间（UTC）。',
                        'type' => 'string',
                        'example' => '2020-10-10T10:10:10Z',
                    ],
                    'metricType' => [
                        'title' => 'metricType',
                        'description' => '跟踪的指标类型：'."\n"
                            .'- **ProvisionedConcurrencyUtilization**：预留模式实例并发度利用率。'."\n"
                            .'- **CPUUtilization**：CPU利用率。'."\n"
                            .'- **GPUMemUtilization**：GPU利用率。'."\n"
                            ."\n\n",
                        'type' => 'string',
                        'example' => 'CPUUtilization',
                    ],
                    'metricTarget' => [
                        'title' => 'metricTarget',
                        'description' => '指标的追踪值。',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '0.6',
                    ],
                    'minCapacity' => [
                        'title' => 'minCapacity',
                        'description' => '缩容的最小值。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '10',
                    ],
                    'maxCapacity' => [
                        'title' => 'maxCapacity',
                        'description' => '扩容的最大值。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '100',
                    ],
                ],
            ],
            'TimeTriggerConfig' => [
                'title' => 'A short description of struct',
                'description' => '时间触发器配置。',
                'type' => 'object',
                'properties' => [
                    'payload' => [
                        'title' => 'payload',
                        'description' => '输入自定义的参数，该触发消息将会作为event中payload的值。',
                        'type' => 'string',
                        'example' => '{\\"workflowInstanceId\\":\\"39639\\"}',
                    ],
                    'cronExpression' => [
                        'title' => 'cronExpression',
                        'description' => '触发周期表达式。 目前支持两种类型表达式：'."\n"
                            ."\n"
                            .'- 按照时间间隔触发：以每间隔4分钟为例，表达式为 “@every 4m”'."\n"
                            .'- 按照CRON表达式触发：常见格式类似 “0 0 4 * * *”'."\n",
                        'type' => 'string',
                        'example' => '“0 0 4 * * *”',
                    ],
                    'enable' => [
                        'title' => 'enable',
                        'description' => '是否启用触发器。'."\n"
                            ."\n"
                            .'- **true**：启用触发器。'."\n"
                            .'- **false**：不开启触发器。这种情况下，配置参数将不生效。'."\n"
                            ."\n",
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                ],
            ],
            'TracingConfig' => [
                'title' => '链路追踪配置',
                'description' => '链路追踪配置。',
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'title' => '链路追踪协议类型，目前只支持 Jaeger',
                        'description' => '链路追踪协议类型，目前只支持Jaeger。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Jaeger',
                    ],
                    'params' => [
                        'title' => '链路追踪参数。当协议类型为 Jaeger 时，参数为 map[string]string，其中 key 为 "endpoint"，value 为您的链路追踪内网接入点。例如 endpoint: http://tracing-analysis-dc-hz.aliyuncs.com/adapt_xxx/api/otlp/traces',
                        'description' => '链路追踪参数。当协议类型为Jaeger时，参数为map[string]string，其中key为"endpoint"，value为您的链路追踪内网接入点。'."\n"
                            .'例如endpoint: `http://tracing-analysis-dc-hz.aliyuncs.com/adapt_xxx/api/otlp/traces`	。',
                        'type' => 'object',
                        'required' => true,
                        'additionalProperties' => [
                            'description' => '链路追踪的参数。',
                            'type' => 'string',
                            'required' => true,
                            'example' => '{"endpoint": "tracing_analysis_jaeger_endpoint"}',
                        ],
                    ],
                ],
            ],
            'Trigger' => [
                'title' => 'trigger struct',
                'description' => 'trigger struct',
                'type' => 'object',
                'properties' => [
                    'triggerName' => [
                        'title' => 'trigger name',
                        'type' => 'string',
                        'example' => 'abc',
                    ],
                    'invocationRole' => [
                        'title' => 'invocation role',
                        'type' => 'string',
                    ],
                    'qualifier' => [
                        'title' => 'qualifier',
                        'type' => 'string',
                    ],
                    'sourceArn' => [
                        'title' => 'source arn',
                        'type' => 'string',
                    ],
                    'targetArn' => [
                        'title' => 'target arn',
                        'type' => 'string',
                    ],
                    'triggerConfig' => [
                        'title' => 'trigger config',
                        'type' => 'string',
                    ],
                    'triggerType' => [
                        'title' => 'trigger type',
                        'type' => 'string',
                    ],
                    'createdTime' => [
                        'title' => 'created time',
                        'type' => 'string',
                    ],
                    'lastModifiedTime' => [
                        'title' => 'last modified time',
                        'type' => 'string',
                    ],
                    'triggerId' => [
                        'title' => 'trigger Id',
                        'type' => 'string',
                    ],
                    'domainName' => [
                        'title' => 'domain name',
                        'type' => 'string',
                    ],
                    'urlInternet' => [
                        'title' => 'url Internet',
                        'type' => 'string',
                    ],
                    'urlIntranet' => [
                        'title' => 'url Intranet',
                        'type' => 'string',
                    ],
                    'status' => [
                        'title' => 'status',
                        'type' => 'string',
                    ],
                ],
            ],
            'VPCConfig' => [
                'title' => 'VPC配置',
                'description' => 'VPC配置。',
                'type' => 'object',
                'properties' => [
                    'securityGroupId' => [
                        'title' => '安全组ID',
                        'description' => '安全组ID。'."\n"
                            ."\n",
                        'type' => 'string',
                        'example' => 'sg-bp18hj1wtxgy3b0***',
                    ],
                    'vSwitchIds' => [
                        'title' => 'VSwitch ID列表',
                        'description' => '交换机列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '交换机ID。',
                            'type' => 'string',
                            'example' => 'vsw-bp1ozpcrdc6r****',
                        ],
                    ],
                    'vpcId' => [
                        'title' => 'VPC ID',
                        'description' => 'VPC网络ID。',
                        'type' => 'string',
                        'example' => 'vpc-***',
                    ],
                    'role' => [
                        'title' => 'Role',
                        'description' => '授予服务下函数访问的资源权限。',
                        'type' => 'string',
                        'example' => 'acs:ram::1234567890:role/fc-test',
                    ],
                ],
            ],
            'VendorConfig' => [
                'title' => 'A short description of struct',
                'type' => 'object',
                'properties' => [
                    'meteringConfig' => [
                        '$ref' => '#/components/schemas/MeteringConfig',
                    ],
                ],
            ],
            'WAFConfig' => [
                'type' => 'object',
                'properties' => [
                    'enableWAF' => [
                        'title' => '是否开启Web应用防火墙',
                        'description' => '是否开启Web应用防火墙。',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'ListReservedCapacities' => [
            'summary' => '获取购买过的预付费实例的信息列表。该API已废弃，不建议继续使用。',
            'path' => '/2021-04-06/reserved-capacities',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下次查询token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '8bj81uI8n****',
                    ],
                ],
                [
                    'name' => 'limit',
                    'in' => 'query',
                    'schema' => [
                        'title' => '一次返回的数量，取值范围[1, 100]',
                        'description' => '返回结果数量限制。取值范围[1, 100]。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数计算的API被调用的时间，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '自定义请求ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'asdf****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '获取预留费实例返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'reservedCapacities' => [
                                'title' => 'reservedCapacities',
                                'description' => '预付费实例列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '预付费实例信息。',
                                    '$ref' => '#/components/schemas/OpenReservedCapacity',
                                ],
                            ],
                            'nextToken' => [
                                'title' => 'nextToken',
                                'description' => '下次查询token。',
                                'type' => 'string',
                                'example' => '8bj81uI8n****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"reservedCapacities\\": [\\n    {\\n      \\"instanceId\\": \\"\\",\\n      \\"cu\\": 0,\\n      \\"deadline\\": \\"\\",\\n      \\"createdTime\\": \\"\\",\\n      \\"lastModifiedTime\\": \\"\\",\\n      \\"isRefunded\\": \\"\\"\\n    }\\n  ],\\n  \\"nextToken\\": \\"8bj81uI8n****\\"\\n}","type":"json"}]',
            'title' => '查询预付费实例信息【已废弃】',
        ],
        'GetAccountSettings' => [
            'summary' => '获取账户信息。',
            'path' => '/2021-04-06/account-settings',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [],
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数计算的API被调用的时间，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '自定义请求ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rid281s******',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回的可用区信息。',
                        'type' => 'object',
                        'properties' => [
                            'availableAZs' => [
                                'title' => '可用区列表',
                                'description' => '可用区列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '可用区。',
                                    'type' => 'string',
                                    'example' => 'cn-hangzhou-f',
                                ],
                            ],
                            'defaultRole' => [
                                'title' => '默认服务角色',
                                'description' => '默认服务角色。',
                                'type' => 'string',
                                'example' => 'acs:ram::1234:role/aliyunfcdefaultrole',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"availableAZs\\": [\\n    \\"cn-hangzhou-f\\"\\n  ],\\n  \\"defaultRole\\": \\"acs:ram::1234:role/aliyunfcdefaultrole\\"\\n}","type":"json"}]',
            'title' => '获取可用区',
        ],
        'CreateService' => [
            'summary' => '创建服务。',
            'path' => '/2021-04-06/services',
            'methods' => [
                'post',
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
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '服务',
                        'description' => '服务定义。',
                        'type' => 'object',
                        'properties' => [
                            'description' => [
                                'title' => '服务描述',
                                'description' => '服务的描述。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'service_description',
                            ],
                            'internetAccess' => [
                                'title' => '公网访问设置',
                                'description' => '是否允许函数访问公网：'."\n"
                                    ."\n"
                                    .'- **true**：允许函数访问公网，默认值。'."\n"
                                    .'- **false**：不允许函数访问公网。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'logConfig' => [
                                'description' => '日志配置。函数产生的日志会被写入到配置的日志库中。',
                                'required' => false,
                                '$ref' => '#/components/schemas/LogConfig',
                            ],
                            'nasConfig' => [
                                'description' => 'NAS配置。配置此参数后，函数可以访问指定的NAS资源。',
                                'required' => false,
                                '$ref' => '#/components/schemas/NASConfig',
                            ],
                            'role' => [
                                'title' => '服务角色',
                                'description' => '授予函数计算所需权限的RAM角色，使用场景包含：'."\n"
                                    ."\n"
                                    .'- 把函数产生的日志发送到您的日志库中。'."\n"
                                    .'- 为函数在执行过程中访问其他云资源生成的临时访问令牌。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'acs:ram::188077086902****:role/fc-test',
                            ],
                            'serviceName' => [
                                'title' => '服务名称',
                                'description' => '服务的名称。只能包含字母、数字、下划线（_）和短划线（-）。不能以数字、短划线（-）开头。长度范围为1~128个字符。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'service_Name',
                            ],
                            'vpcConfig' => [
                                'description' => 'VPC配置。配置此参数后，函数可以访问指定的VPC资源。',
                                'required' => false,
                                '$ref' => '#/components/schemas/VPCConfig',
                            ],
                            'tracingConfig' => [
                                'description' => '链路追踪配置。当函数计算与链路追踪集成后，您可以记录请求在函数计算的耗时时间、查看函数的冷启动时间、记录函数内部时间的消耗等。更多信息，请参见[链路追踪](~~189804~~)。',
                                'required' => false,
                                '$ref' => '#/components/schemas/TracingConfig',
                            ],
                            'ossMountConfig' => [
                                'title' => 'OSS挂载配置',
                                'description' => 'OSS挂载配置。',
                                'required' => false,
                                '$ref' => '#/components/schemas/OSSMountConfig',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '自定义请求ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'asdf****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [
                        'etag' => [
                            'schema' => [
                                'title' => 'etag，用于更改服务。以确保实际更改的服务和期望更改的服务是一致的',
                                'type' => 'string',
                                'example' => '5e547e5605e1dc17a78a6191bc18fbc5',
                            ],
                        ],
                    ],
                    'schema' => [
                        'title' => '服务定义',
                        'description' => '创建服务请求的返回值。',
                        'type' => 'object',
                        'properties' => [
                            'createdTime' => [
                                'title' => '创建时间',
                                'description' => '服务的创建时间。',
                                'type' => 'string',
                                'example' => '2016-08-15T16:06:05.000+0000',
                            ],
                            'description' => [
                                'title' => '服务描述',
                                'description' => '服务的描述。',
                                'type' => 'string',
                                'example' => 'service_description',
                            ],
                            'internetAccess' => [
                                'title' => '公网访问设置',
                                'description' => '是否允许函数访问公网：'."\n"
                                    ."\n"
                                    .'- **true**：允许函数访问公网。'."\n"
                                    .'- **false**：不允许函数访问公网。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'lastModifiedTime' => [
                                'title' => '上次更新时间',
                                'description' => '服务上一次被更新的时间。',
                                'type' => 'string',
                                'example' => '2016-08-15T16:06:05.000+0000',
                            ],
                            'logConfig' => [
                                'description' => '日志配置。函数产生的日志会被写入到配置的日志库中。',
                                '$ref' => '#/components/schemas/LogConfig',
                            ],
                            'nasConfig' => [
                                'description' => 'NAS配置。配置此参数后，函数可以访问指定的NAS资源。',
                                '$ref' => '#/components/schemas/NASConfig',
                            ],
                            'role' => [
                                'title' => '服务角色',
                                'description' => '授予函数计算所需权限的RAM角色，使用场景包含：'."\n"
                                    ."\n"
                                    .'- 把函数产生的日至发送到您的日志库中。'."\n"
                                    .'- 为函数在执行过程中访问其他云资源生成的临时访问令牌。',
                                'type' => 'string',
                                'example' => 'acs:ram::188077086902****:role/fc-test',
                            ],
                            'serviceId' => [
                                'title' => '服务ID',
                                'description' => '系统为服务生成的ID，全网唯一。',
                                'type' => 'string',
                                'example' => '2d28e0e9-9ba5-4eed-8b1a-d3d9cd24e737',
                            ],
                            'serviceName' => [
                                'title' => '服务名称',
                                'description' => '服务的名称。',
                                'type' => 'string',
                                'example' => 'service_Name',
                            ],
                            'vpcConfig' => [
                                'description' => 'VPC配置。配置此参数后，函数可以访问指定的VPC资源。',
                                '$ref' => '#/components/schemas/VPCConfig',
                            ],
                            'tracingConfig' => [
                                'description' => '链路追踪配置。当函数计算与链路追踪集成后，您可以记录请求在函数计算的耗时时间、查看函数的冷启动时间、记录函数内部时间的消耗等。更多信息，请参见[链路追踪](~~189804~~)。',
                                '$ref' => '#/components/schemas/TracingConfig',
                            ],
                            'ossMountConfig' => [
                                'title' => 'OSS挂载配置',
                                'description' => 'OSS挂载配置。',
                                '$ref' => '#/components/schemas/OSSMountConfig',
                            ],
                            'useSLRAuthentication' => [
                                'description' => '服务是否使用服务关联角色授权模式：'."\n"
                                    .'- true：使用服务关联角色授权模式。'."\n"
                                    .'- false：未使用服务关联角色授权模式。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                400 => [],
                403 => [],
                409 => [],
                500 => [],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"createdTime\\": \\"2016-08-15T16:06:05.000+0000\\",\\n  \\"description\\": \\"service_description\\",\\n  \\"internetAccess\\": true,\\n  \\"lastModifiedTime\\": \\"2016-08-15T16:06:05.000+0000\\",\\n  \\"logConfig\\": {\\n    \\"logstore\\": \\"test-prj\\",\\n    \\"project\\": \\"test-logstore\\",\\n    \\"enableRequestMetrics\\": true,\\n    \\"enableInstanceMetrics\\": true,\\n    \\"logBeginRule\\": \\"DefaultRegex\\"\\n  },\\n  \\"nasConfig\\": {\\n    \\"groupId\\": 100,\\n    \\"mountPoints\\": [\\n      {\\n        \\"mountDir\\": \\"/home/test\\",\\n        \\"serverAddr\\": \\"***-uni85.cn-hangzhou.nas.aliyuncs.com:/\\",\\n        \\"enableTLS\\": false\\n      }\\n    ],\\n    \\"userId\\": 100\\n  },\\n  \\"role\\": \\"acs:ram::188077086902****:role/fc-test\\",\\n  \\"serviceId\\": \\"2d28e0e9-9ba5-4eed-8b1a-d3d9cd24e737\\",\\n  \\"serviceName\\": \\"service_Name\\",\\n  \\"vpcConfig\\": {\\n    \\"securityGroupId\\": \\"sg-bp18hj1wtxgy3b0***\\",\\n    \\"vSwitchIds\\": [\\n      \\"vsw-bp1ozpcrdc6r****\\"\\n    ],\\n    \\"vpcId\\": \\"vpc-***\\",\\n    \\"role\\": \\"\\"\\n  },\\n  \\"tracingConfig\\": {\\n    \\"type\\": \\"Jaeger\\",\\n    \\"params\\": {\\n      \\"key\\": \\"http://tracing-analysis-dc-hz.aliyuncs.com/adapt_xxx/api/otlp/traces\\"\\n    }\\n  },\\n  \\"ossMountConfig\\": {\\n    \\"mountPoints\\": [\\n      {\\n        \\"bucketName\\": \\"my-bucket\\",\\n        \\"mountDir\\": \\"/mnt/dir\\",\\n        \\"readOnly\\": true,\\n        \\"endpoint\\": \\"http://oss-cn-shanghai.aliyuncs.com\\",\\n        \\"bucketPath\\": \\"/my-dir\\"\\n      }\\n    ]\\n  },\\n  \\"useSLRAuthentication\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '创建服务',
            'description' => "\n",
        ],
        'DeleteService' => [
            'summary' => '删除服务。',
            'path' => '/2021-04-06/services/{serviceName}',
            'methods' => [
                'delete',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'If-Match',
                    'in' => 'header',
                    'schema' => [
                        'title' => '用于确保实际更改的资源和期望更改的资源是一致的，该值来自Create，Get和Update API的响应',
                        'description' => '确保实际更改的服务和期望更改的服务是一致的，该值来源于[CreateService](~~175256~~)、[UpdateService](~~188167~~)和[GetService](~~189225~~)接口的响应。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'service_name',
                    ],
                ],
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '服务名称',
                        'description' => '服务名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-service',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数计算的API被调用的时间，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '自定义请求ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'r9s89isisi****',
                    ],
                ],
            ],
            'responses' => [
                204 => [],
                400 => [],
                403 => [],
                [],
                409 => [],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '删除服务',
        ],
        'UpdateService' => [
            'summary' => '更新服务信息。',
            'path' => '/2021-04-06/services/{serviceName}',
            'methods' => [
                'put',
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
            ],
            'parameters' => [
                [
                    'name' => 'If-Match',
                    'in' => 'header',
                    'schema' => [
                        'title' => '用于确保实际更改的资源和期望更改的资源是一致的，该值来自Create，Get和Update API的响应',
                        'description' => '确保实际更改的服务和期望更改的服务是一致的，该值来源于[CreateService](~~175256~~)、[UpdateService](~~188167~~)和[GetService](~~189225~~)接口的响应。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'e19d5cd5af0378da05f63f891c7467af',
                    ],
                ],
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '服务名称',
                        'description' => '服务的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-service',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '服务',
                        'description' => '服务定义。',
                        'type' => 'object',
                        'properties' => [
                            'description' => [
                                'title' => '服务描述',
                                'description' => '服务的描述。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'test service',
                            ],
                            'internetAccess' => [
                                'title' => '公网访问设置',
                                'description' => '是否允许函数访问公网：'."\n"
                                    .'  - **true**：允许函数访问公网。'."\n"
                                    .'  - **false**：不允许函数访问公网。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'logConfig' => [
                                'description' => '日志配置，函数产生的日志会写入这里配置的Logstore中。',
                                'required' => false,
                                '$ref' => '#/components/schemas/LogConfig',
                            ],
                            'nasConfig' => [
                                'description' => 'NAS配置，配置后函数可以访问指定NAS资源。',
                                'required' => false,
                                '$ref' => '#/components/schemas/NASConfig',
                            ],
                            'role' => [
                                'title' => '服务角色',
                                'description' => '授予函数计算所需权限的RAM角色，使用场景包含：'."\n"
                                    .'  - 把函数产生的日志发送到您的Logstore中。'."\n"
                                    .'  - 为函数在执行中访问其他云资源生成Token。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'acs:ram::1234567890:role/fc-test',
                            ],
                            'vpcConfig' => [
                                'description' => 'VPC配置，配置后函数计算可以访问指定VPC资源。',
                                'required' => false,
                                '$ref' => '#/components/schemas/VPCConfig',
                            ],
                            'tracingConfig' => [
                                'description' => '链路追踪配置。当函数计算与链路追踪集成后，您可以记录请求在函数计算的耗时时间、查看函数的冷启动时间、记录函数内部时间的消耗等，更多信息，请参见[链路追踪](~~189804~~)。'."\n",
                                'required' => false,
                                '$ref' => '#/components/schemas/TracingConfig',
                            ],
                            'ossMountConfig' => [
                                'title' => 'OSS挂载配置',
                                'description' => 'OSS挂载配置。',
                                'required' => false,
                                '$ref' => '#/components/schemas/OSSMountConfig',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数计算的API被调用的时间，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '自定义请求ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rid281s******',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [
                        'ETag' => [
                            'schema' => [
                                'title' => 'etag，用于更改服务。以确保实际更改的服务和期望更改的服务是一致的',
                                'type' => 'string',
                                'example' => '5e547e5605e1dc17a78a6191bc18fbc5',
                            ],
                        ],
                    ],
                    'schema' => [
                        'title' => '服务定义',
                        'description' => '服务的定义。',
                        'type' => 'object',
                        'properties' => [
                            'createdTime' => [
                                'title' => '创建时间',
                                'description' => '服务的创建时间。',
                                'type' => 'string',
                                'example' => '2016-08-15T16:06:05.000+0000',
                            ],
                            'description' => [
                                'title' => '服务描述',
                                'description' => '服务的描述。',
                                'type' => 'string',
                                'example' => 'test_description',
                            ],
                            'internetAccess' => [
                                'title' => '公网访问设置',
                                'description' => '是否允许函数访问公网：'."\n"
                                    .'  - **true**：允许函数访问公网。'."\n"
                                    .'  - **false**：不允许函数访问公网。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'lastModifiedTime' => [
                                'title' => '上次更新时间',
                                'description' => '服务上一次被更新的时间。',
                                'type' => 'string',
                                'example' => '2016-08-15T16:06:05.000+0000',
                            ],
                            'logConfig' => [
                                'description' => '日志配置，函数产生的日志会写入这里配置的Logstore。',
                                '$ref' => '#/components/schemas/LogConfig',
                            ],
                            'nasConfig' => [
                                'description' => 'NAS配置，配置后函数可以访问指定NAS资源。',
                                '$ref' => '#/components/schemas/NASConfig',
                            ],
                            'role' => [
                                'title' => '服务角色',
                                'description' => '授予函数计算所需权限的RAM角色，使用场景包含：'."\n"
                                    .'  - 把函数产生的日志发送到您的Logstore中。'."\n"
                                    .'  - 为函数在执行中访问其他云资源生成Token。',
                                'type' => 'string',
                                'example' => 'acs:ram::1234567890:role/fc-test',
                            ],
                            'serviceId' => [
                                'title' => '服务ID',
                                'description' => '系统为每个服务生成的唯一ID。',
                                'type' => 'string',
                                'example' => '2d28e0e9-9ba5-4eed-8b1a-d3d9cd24e737',
                            ],
                            'serviceName' => [
                                'title' => '服务名称',
                                'description' => '服务的名称。',
                                'type' => 'string',
                                'example' => 'demo-service',
                            ],
                            'vpcConfig' => [
                                'description' => 'VPC配置，配置后函数可以访问指定VPC资源。',
                                '$ref' => '#/components/schemas/VPCConfig',
                            ],
                            'tracingConfig' => [
                                'description' => '链路追踪配置。当函数计算与链路追踪集成后，您可以记录请求在函数计算的耗时时间、查看函数的冷启动时间、记录函数内部时间的消耗等，更多信息，请参见[链路追踪](~~189804~~)。',
                                '$ref' => '#/components/schemas/TracingConfig',
                            ],
                            'ossMountConfig' => [
                                'title' => 'OSS挂载配置',
                                'description' => 'OSS挂载配置。',
                                '$ref' => '#/components/schemas/OSSMountConfig',
                            ],
                            'useSLRAuthentication' => [
                                'description' => '服务是否使用服务关联角色授权模式：'."\n"
                                    .'- true：使用服务关联角色授权模式。'."\n"
                                    .'- false：未使用服务关联角色授权模式。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                400 => [],
                403 => [],
                [],
                500 => [],
                'headers' => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"createdTime\\": \\"2016-08-15T16:06:05.000+0000\\",\\n  \\"description\\": \\"test_description\\",\\n  \\"internetAccess\\": true,\\n  \\"lastModifiedTime\\": \\"2016-08-15T16:06:05.000+0000\\",\\n  \\"logConfig\\": {\\n    \\"logstore\\": \\"test-prj\\",\\n    \\"project\\": \\"test-logstore\\",\\n    \\"enableRequestMetrics\\": true,\\n    \\"enableInstanceMetrics\\": true,\\n    \\"logBeginRule\\": \\"DefaultRegex\\"\\n  },\\n  \\"nasConfig\\": {\\n    \\"groupId\\": 100,\\n    \\"mountPoints\\": [\\n      {\\n        \\"mountDir\\": \\"/home/test\\",\\n        \\"serverAddr\\": \\"***-uni85.cn-hangzhou.nas.aliyuncs.com:/\\",\\n        \\"enableTLS\\": false\\n      }\\n    ],\\n    \\"userId\\": 100\\n  },\\n  \\"role\\": \\"acs:ram::1234567890:role/fc-test\\",\\n  \\"serviceId\\": \\"2d28e0e9-9ba5-4eed-8b1a-d3d9cd24e737\\",\\n  \\"serviceName\\": \\"demo-service\\",\\n  \\"vpcConfig\\": {\\n    \\"securityGroupId\\": \\"sg-bp18hj1wtxgy3b0***\\",\\n    \\"vSwitchIds\\": [\\n      \\"vsw-bp1ozpcrdc6r****\\"\\n    ],\\n    \\"vpcId\\": \\"vpc-***\\",\\n    \\"role\\": \\"\\"\\n  },\\n  \\"tracingConfig\\": {\\n    \\"type\\": \\"Jaeger\\",\\n    \\"params\\": {\\n      \\"key\\": \\"http://tracing-analysis-dc-hz.aliyuncs.com/adapt_xxx/api/otlp/traces\\"\\n    }\\n  },\\n  \\"ossMountConfig\\": {\\n    \\"mountPoints\\": [\\n      {\\n        \\"bucketName\\": \\"my-bucket\\",\\n        \\"mountDir\\": \\"/mnt/dir\\",\\n        \\"readOnly\\": true,\\n        \\"endpoint\\": \\"http://oss-cn-shanghai.aliyuncs.com\\",\\n        \\"bucketPath\\": \\"/my-dir\\"\\n      }\\n    ]\\n  },\\n  \\"useSLRAuthentication\\": true\\n}","type":"json"}]',
            'title' => '更新服务',
        ],
        'ListServices' => [
            'summary' => '获取服务列表。',
            'path' => '/2021-04-06/services',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'limit',
                    'in' => 'query',
                    'schema' => [
                        'title' => '最多返回个数',
                        'description' => '限定此次返回资源的数量。如果不设定，默认返回20，最大不能超过100。返回结果可以小于指定的数量，但不会多于指定的数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'enumValueTitles' => [],
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '下次查询token',
                        'description' => '用来标记当前开始读取的位置，置空表示从头开始。第一次查询不需要提供这个参数，后续查询的Token从返回结果中获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'caeba0****be03f84eb48b699f0a4883',
                    ],
                ],
                [
                    'name' => 'prefix',
                    'in' => 'query',
                    'schema' => [
                        'title' => '前缀',
                        'description' => '限定返回的资源名称，名称必须以Prefix作为前缀，例如Prefix是a，则返回的资源名均是以a开始的。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'prefix_text',
                    ],
                ],
                [
                    'name' => 'startKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '起始key',
                        'description' => '设定结果从startKey之后（包括startKey）按字母排序的第一个开始返回。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'nextService',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '自定义请求ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rid281s******',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '查询服务响应',
                        'description' => '服务的定义。',
                        'type' => 'object',
                        'properties' => [
                            'nextToken' => [
                                'title' => '下次查询token',
                                'description' => '用来表示当前调用返回读取到的位置，空代表数据已经读取完毕。',
                                'type' => 'string',
                                'example' => 'caeba0****be03f84eb48b699f0a4883',
                            ],
                            'services' => [
                                'title' => '服务列表',
                                'description' => '服务列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '服务信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'createdTime' => [
                                            'title' => '创建时间',
                                            'description' => '服务的创建时间。',
                                            'type' => 'string',
                                            'example' => '2020-04-03T05:57:28Z',
                                        ],
                                        'description' => [
                                            'title' => '服务描述',
                                            'description' => '服务的描述。',
                                            'type' => 'string',
                                            'example' => 'test_description',
                                        ],
                                        'internetAccess' => [
                                            'title' => '公网访问设置',
                                            'description' => '是否允许函数访问公网：'."\n"
                                                .'  - **true**：允许函数访问公网。'."\n"
                                                .'  - **false**：不允许函数访问公网。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'lastModifiedTime' => [
                                            'title' => '上次更新时间',
                                            'description' => '服务上一次被更新的时间。',
                                            'type' => 'string',
                                            'example' => '2020-04-03T05:57:28Z',
                                        ],
                                        'logConfig' => [
                                            'description' => '日志配置，函数产生的日志会写入这里配置的Logstore。',
                                            '$ref' => '#/components/schemas/LogConfig',
                                        ],
                                        'nasConfig' => [
                                            'description' => 'NAS配置，配置后函数可以访问指定NAS资源。',
                                            '$ref' => '#/components/schemas/NASConfig',
                                        ],
                                        'role' => [
                                            'title' => '服务角色',
                                            'description' => '授予函数计算所需权限的RAM角色，使用场景包含：'."\n"
                                                .'  - 把函数产生的日志发送到您的Logstore中。'."\n"
                                                .'  - 为函数在执行中访问其他云资源生成Token。',
                                            'type' => 'string',
                                            'example' => 'acs:ram::198613743****:role/fc-public-test',
                                        ],
                                        'serviceId' => [
                                            'title' => '服务ID',
                                            'description' => '系统为每个服务生成的ID，全网唯一。',
                                            'type' => 'string',
                                            'example' => 'c910061f-****-44e6-b659-***c',
                                        ],
                                        'serviceName' => [
                                            'title' => '服务信息',
                                            'description' => '服务的名称。',
                                            'type' => 'string',
                                            'example' => 'service_name',
                                        ],
                                        'vpcConfig' => [
                                            'description' => 'VPC配置，配置后函数可以访问指定VPC资源。',
                                            '$ref' => '#/components/schemas/VPCConfig',
                                        ],
                                        'tracingConfig' => [
                                            'description' => '链路追踪配置。当函数计算与链路追踪集成后，您可以记录请求在函数计算的耗时时间、查看函数的冷启动时间、记录函数内部时间的消耗等，更多信息，请参见[链路追踪](~~189804~~)。',
                                            '$ref' => '#/components/schemas/TracingConfig',
                                        ],
                                        'ossMountConfig' => [
                                            'title' => 'OSS挂载配置',
                                            'description' => 'OSS挂载配置。',
                                            '$ref' => '#/components/schemas/OSSMountConfig',
                                        ],
                                        'useSLRAuthentication' => [
                                            'description' => '服务是否使用服务关联角色授权模式：'."\n"
                                                .'- true：使用服务关联角色授权模式。'."\n"
                                                .'- false：未使用服务关联角色授权模式。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                400 => [],
                403 => [],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"nextToken\\": \\"caeba0****be03f84eb48b699f0a4883\\",\\n  \\"services\\": [\\n    {\\n      \\"createdTime\\": \\"2020-04-03T05:57:28Z\\",\\n      \\"description\\": \\"test_description\\",\\n      \\"internetAccess\\": true,\\n      \\"lastModifiedTime\\": \\"2020-04-03T05:57:28Z\\",\\n      \\"logConfig\\": {\\n        \\"logstore\\": \\"test-prj\\",\\n        \\"project\\": \\"test-logstore\\",\\n        \\"enableRequestMetrics\\": true,\\n        \\"enableInstanceMetrics\\": true,\\n        \\"logBeginRule\\": \\"DefaultRegex\\"\\n      },\\n      \\"nasConfig\\": {\\n        \\"groupId\\": 100,\\n        \\"mountPoints\\": [\\n          {\\n            \\"mountDir\\": \\"/home/test\\",\\n            \\"serverAddr\\": \\"***-uni85.cn-hangzhou.nas.aliyuncs.com:/\\",\\n            \\"enableTLS\\": false\\n          }\\n        ],\\n        \\"userId\\": 100\\n      },\\n      \\"role\\": \\"acs:ram::198613743****:role/fc-public-test\\",\\n      \\"serviceId\\": \\"c910061f-****-44e6-b659-***c\\",\\n      \\"serviceName\\": \\"service_name\\",\\n      \\"vpcConfig\\": {\\n        \\"securityGroupId\\": \\"sg-bp18hj1wtxgy3b0***\\",\\n        \\"vSwitchIds\\": [\\n          \\"vsw-bp1ozpcrdc6r****\\"\\n        ],\\n        \\"vpcId\\": \\"vpc-***\\",\\n        \\"role\\": \\"\\"\\n      },\\n      \\"tracingConfig\\": {\\n        \\"type\\": \\"Jaeger\\",\\n        \\"params\\": {\\n          \\"key\\": \\"http://tracing-analysis-dc-hz.aliyuncs.com/adapt_xxx/api/otlp/traces\\"\\n        }\\n      },\\n      \\"ossMountConfig\\": {\\n        \\"mountPoints\\": [\\n          {\\n            \\"bucketName\\": \\"my-bucket\\",\\n            \\"mountDir\\": \\"/mnt/dir\\",\\n            \\"readOnly\\": true,\\n            \\"endpoint\\": \\"http://oss-cn-shanghai.aliyuncs.com\\",\\n            \\"bucketPath\\": \\"/my-dir\\"\\n          }\\n        ]\\n      },\\n      \\"useSLRAuthentication\\": true\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取服务列表',
        ],
        'GetService' => [
            'summary' => '查询指定的服务信息。',
            'path' => '/2021-04-06/services/{serviceName}',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '服务名称',
                        'description' => '服务的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-service',
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'schema' => [
                        'title' => '限定符',
                        'description' => '服务的版本或别名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '自定义请求ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rid281s******',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [
                        'ETag' => [
                            'schema' => [
                                'title' => 'etag，用于更改服务。以确保实际更改的服务和期望更改的服务是一致的',
                                'type' => 'string',
                                'example' => '5e547e5605e1dc17a78a6191bc18fbc5',
                            ],
                        ],
                    ],
                    'schema' => [
                        'title' => '服务定义',
                        'description' => '服务定义。',
                        'type' => 'object',
                        'properties' => [
                            'createdTime' => [
                                'title' => '创建时间',
                                'description' => '服务的创建时间。',
                                'type' => 'string',
                                'example' => '2020-04-03T05:57:28Z',
                            ],
                            'description' => [
                                'title' => '服务描述',
                                'description' => '服务的描述。',
                                'type' => 'string',
                                'example' => 'demo-service-test',
                            ],
                            'internetAccess' => [
                                'title' => '公网访问设置',
                                'description' => '是否允许函数访问公网：'."\n"
                                    .'  - **true**：允许函数访问公网。'."\n"
                                    .'  - **false**：不允许函数访问公网。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'lastModifiedTime' => [
                                'title' => '上次更新时间',
                                'description' => '服务上一次被更新的时间。',
                                'type' => 'string',
                                'example' => '2020-04-03T05:57:28Z',
                            ],
                            'logConfig' => [
                                'description' => '日志配置，函数产生的日志会写入这里配置的Logstore。',
                                '$ref' => '#/components/schemas/LogConfig',
                            ],
                            'nasConfig' => [
                                'description' => 'NAS配置，配置后函数可以访问指定NAS资源。',
                                '$ref' => '#/components/schemas/NASConfig',
                            ],
                            'role' => [
                                'title' => '服务角色',
                                'description' => '服务中函数所使用的角色，使函数可以获得角色所拥有的权限，实现跨产品访问。使用场景包含：'."\n"
                                    .'  - 把函数产生的日志发送到您的Logstore中。'."\n"
                                    .'  - 为函数在执行中访问其他云资源生成Token。',
                                'type' => 'string',
                                'example' => 'acs:ram::1234567890:role/fc-test',
                            ],
                            'serviceId' => [
                                'title' => '服务ID',
                                'description' => '系统生成的服务ID，全网唯一。',
                                'type' => 'string',
                                'example' => '2d28e0e9-9ba5-4eed-8b1a-d3d9cd24e737',
                            ],
                            'serviceName' => [
                                'title' => '服务名称',
                                'description' => '服务的名称。',
                                'type' => 'string',
                                'example' => 'demo-service',
                            ],
                            'vpcConfig' => [
                                'description' => 'VPC配置，配置后函数可以访问指定VPC资源。',
                                '$ref' => '#/components/schemas/VPCConfig',
                            ],
                            'tracingConfig' => [
                                'description' => '链路追踪配置。当函数计算与链路追踪集成后，您可以记录请求在函数计算的耗时时间、查看函数的冷启动时间、记录函数内部时间的消耗等，更多信息，请参见[链路追踪](~~189804~~)。',
                                '$ref' => '#/components/schemas/TracingConfig',
                            ],
                            'ossMountConfig' => [
                                'title' => 'OSS挂载配置',
                                'description' => 'OSS挂载配置。',
                                '$ref' => '#/components/schemas/OSSMountConfig',
                            ],
                            'useSLRAuthentication' => [
                                'description' => '服务是否使用服务关联角色授权模式：'."\n"
                                    .'- true：使用服务关联角色授权模式。'."\n"
                                    .'- false：未使用服务关联角色授权模式。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                400 => [],
                403 => [],
                [],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"createdTime\\": \\"2020-04-03T05:57:28Z\\",\\n  \\"description\\": \\"demo-service-test\\",\\n  \\"internetAccess\\": true,\\n  \\"lastModifiedTime\\": \\"2020-04-03T05:57:28Z\\",\\n  \\"logConfig\\": {\\n    \\"logstore\\": \\"test-prj\\",\\n    \\"project\\": \\"test-logstore\\",\\n    \\"enableRequestMetrics\\": true,\\n    \\"enableInstanceMetrics\\": true,\\n    \\"logBeginRule\\": \\"DefaultRegex\\"\\n  },\\n  \\"nasConfig\\": {\\n    \\"groupId\\": 100,\\n    \\"mountPoints\\": [\\n      {\\n        \\"mountDir\\": \\"/home/test\\",\\n        \\"serverAddr\\": \\"***-uni85.cn-hangzhou.nas.aliyuncs.com:/\\",\\n        \\"enableTLS\\": false\\n      }\\n    ],\\n    \\"userId\\": 100\\n  },\\n  \\"role\\": \\"acs:ram::1234567890:role/fc-test\\",\\n  \\"serviceId\\": \\"2d28e0e9-9ba5-4eed-8b1a-d3d9cd24e737\\",\\n  \\"serviceName\\": \\"demo-service\\",\\n  \\"vpcConfig\\": {\\n    \\"securityGroupId\\": \\"sg-bp18hj1wtxgy3b0***\\",\\n    \\"vSwitchIds\\": [\\n      \\"vsw-bp1ozpcrdc6r****\\"\\n    ],\\n    \\"vpcId\\": \\"vpc-***\\",\\n    \\"role\\": \\"\\"\\n  },\\n  \\"tracingConfig\\": {\\n    \\"type\\": \\"Jaeger\\",\\n    \\"params\\": {\\n      \\"key\\": \\"http://tracing-analysis-dc-hz.aliyuncs.com/adapt_xxx/api/otlp/traces\\"\\n    }\\n  },\\n  \\"ossMountConfig\\": {\\n    \\"mountPoints\\": [\\n      {\\n        \\"bucketName\\": \\"my-bucket\\",\\n        \\"mountDir\\": \\"/mnt/dir\\",\\n        \\"readOnly\\": true,\\n        \\"endpoint\\": \\"http://oss-cn-shanghai.aliyuncs.com\\",\\n        \\"bucketPath\\": \\"/my-dir\\"\\n      }\\n    ]\\n  },\\n  \\"useSLRAuthentication\\": true\\n}","type":"json"}]',
            'title' => '获取服务信息',
        ],
        'DeleteServiceVersion' => [
            'summary' => '删除服务版本。',
            'path' => '/2021-04-06/services/{serviceName}/versions/{versionId}',
            'methods' => [
                'delete',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '服务名称',
                        'description' => '服务的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-service',
                    ],
                ],
                [
                    'name' => 'versionId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '版本ID',
                        'description' => '服务的版本号。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数计算调用请求的调用链ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rid281s******',
                    ],
                ],
            ],
            'responses' => [
                204 => [],
                400 => [],
                403 => [],
                [],
                409 => [],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '删除服务版本',
        ],
        'PublishServiceVersion' => [
            'summary' => '发布服务版本。',
            'path' => '/2021-04-06/services/{serviceName}/versions',
            'methods' => [
                'post',
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
            ],
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '服务名称',
                        'description' => '服务的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-service',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '版本',
                        'description' => '版本定义。',
                        'type' => 'object',
                        'properties' => [
                            'description' => [
                                'title' => '版本描述',
                                'description' => '版本的描述。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'test_description',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'If-Match',
                    'in' => 'header',
                    'schema' => [
                        'title' => '服务的ETag，可通过GetService接口获得。若发布版本时服务的ETag与传入的不一致，则发布版本会失败。',
                        'description' => '确保实际更改的服务和期望更改的服务是一致的，该值来源于[CreateService](~~175256~~)、[UpdateService](~~188167~~)和[GetService](~~189225~~)接口的响应。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'e19d5cd5af0378da05f63f891c7467af',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数计算调用请求的调用链ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rid281s******',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [
                        'ETag' => [
                            'schema' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'schema' => [
                        'title' => '版本响应',
                        'description' => '版本响应。',
                        'type' => 'object',
                        'properties' => [
                            'createdTime' => [
                                'title' => '创建时间',
                                'description' => '服务版本的创建时间。',
                                'type' => 'string',
                                'example' => '2016-08-15T16:06:05.000+0000',
                            ],
                            'description' => [
                                'title' => '版本描述',
                                'description' => '服务的版本描述。',
                                'type' => 'string',
                                'example' => 'test_description',
                            ],
                            'lastModifiedTime' => [
                                'title' => '上次更新时间',
                                'description' => '服务的版本上一次被更新的时间。',
                                'type' => 'string',
                                'example' => '2016-08-15T16:06:05.000+0000',
                            ],
                            'versionId' => [
                                'title' => '版本ID',
                                'description' => '服务的版本号。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                        ],
                    ],
                ],
                400 => [],
                403 => [],
                [],
                409 => [],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"createdTime\\": \\"2016-08-15T16:06:05.000+0000\\",\\n  \\"description\\": \\"test_description\\",\\n  \\"lastModifiedTime\\": \\"2016-08-15T16:06:05.000+0000\\",\\n  \\"versionId\\": \\"1\\"\\n}","type":"json"}]',
            'title' => '发布服务版本',
        ],
        'ListServiceVersions' => [
            'summary' => '获取服务版本列表。',
            'path' => '/2021-04-06/services/{serviceName}/versions',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '服务名称',
                        'description' => '服务的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-service',
                    ],
                ],
                [
                    'name' => 'limit',
                    'in' => 'query',
                    'schema' => [
                        'title' => '最多返回个数',
                        'description' => '限定此次返回资源的数量。如果不设定，默认返回20，最大不能超过100。返回结果可以小于指定的数量，但不会多于指定的数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '下次查询token',
                        'description' => '用来返回更多结果。第一次查询不需要提供这个参数，后续查询的Token从返回结果中获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '8bj81uI8n****',
                    ],
                ],
                [
                    'name' => 'startKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '起始key',
                        'description' => '设定结果从startKey之后（包括startKey）按版本号排序的第一个开始返回。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'nextservice',
                    ],
                ],
                [
                    'name' => 'direction',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序方向',
                        'description' => '限定返回的版本排序方向：'."\n"
                            .'  - **FORWARD**：从小到大排序。'."\n"
                            .'  - **BACKWARD**：默认值，从大到小排序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'BACKWARD',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数计算调用请求的调用链ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rid281s******',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '查询版本响应',
                        'description' => '查询版本返回的响应体。',
                        'type' => 'object',
                        'properties' => [
                            'direction' => [
                                'title' => '排序方向',
                                'description' => '限定返回的版本排序方向：'."\n"
                                    .'  - **FORWARD**：从小到大排序。'."\n"
                                    .'  - **BACKWARD**：默认值，从大到小排序。',
                                'type' => 'string',
                                'example' => 'BACKWARD',
                            ],
                            'nextToken' => [
                                'title' => '下次查询token',
                                'description' => '用来返回更多结果。第一次查询不需要提供这个参数，后续查询的Token从返回结果中获取。',
                                'type' => 'string',
                                'example' => 'eJhojW7N****',
                            ],
                            'versions' => [
                                'title' => '版本列表',
                                'description' => '版本列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '版本列表对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'createdTime' => [
                                            'title' => '创建时间',
                                            'description' => '服务版本的创建时间。',
                                            'type' => 'string',
                                            'example' => '2020-03-16T06:23:50Z',
                                        ],
                                        'description' => [
                                            'title' => '版本描述',
                                            'description' => '服务的版本描述。',
                                            'type' => 'string',
                                            'example' => 'test_description',
                                        ],
                                        'lastModifiedTime' => [
                                            'title' => '上次更新时间',
                                            'description' => '服务的版本上一次被更新的时间。',
                                            'type' => 'string',
                                            'example' => '2020-07-15T06:12:31Z',
                                        ],
                                        'versionId' => [
                                            'title' => '版本ID',
                                            'description' => '服务的版本号。',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                400 => [],
                403 => [],
                [],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"direction\\": \\"BACKWARD\\",\\n  \\"nextToken\\": \\"eJhojW7N****\\",\\n  \\"versions\\": [\\n    {\\n      \\"createdTime\\": \\"2020-03-16T06:23:50Z\\",\\n      \\"description\\": \\"test_description\\",\\n      \\"lastModifiedTime\\": \\"2020-07-15T06:12:31Z\\",\\n      \\"versionId\\": \\"1\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取服务版本列表',
        ],
        'CreateTrigger' => [
            'summary' => '创建触发器。',
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/triggers',
            'methods' => [
                'post',
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
            ],
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'service名称',
                        'description' => '服务的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demoService',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'function名称',
                        'description' => '函数的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demoFunction',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'trigger对象',
                        'description' => '触发器的定义。',
                        'type' => 'object',
                        'properties' => [
                            'invocationRole' => [
                                'title' => 'event source，如OSS，使用该role去invoke function',
                                'description' => '事件源（如OSS）调用函数所需的角色。更多信息，请参见[触发器简介](~~53102~~)。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'acs:ram::1234567890:role/fc-test',
                            ],
                            'qualifier' => [
                                'title' => 'service版本',
                                'description' => '服务的版本或别名。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'LATEST',
                            ],
                            'sourceArn' => [
                                'title' => 'event source的Aliyun Resource Name（ARN',
                                'description' => '触发器事件源的Aliyun Resource Name。对于定时、HTTP和EventBridge类型的触发器可忽略该参数，其它类型触发器该参数为必填项。对于 EB 触发器，若主动填写该字段，表示将 EB 侧已存在资源关联到该触发器，注意，**两个不同 EB 触发器不要配置同一个 sourceArn**，否则触发器的更新/删除操作会相互影响',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'acs:oss:cn-shanghai:12345:mybucket',
                            ],
                            'triggerConfig' => [
                                'title' => 'trigger配置，针对不同的trigger类型，trigger配置会有所不同',
                                'description' => '触发器配置，针对不同类型的触发器，配置有所不同。具体格式请参考如下对应的数据结构：'."\n"
                                    ."\n"
                                    .'  - OSS触发器：请参见[OSSTriggerConfig](~~415697~~)。'."\n"
                                    .'  - 日志服务触发器：请参见[LogTriggerConfig](~~415694~~)。'."\n"
                                    .'  - 定时触发器：请参见[TimeTriggerConfig](~~415712~~)。'."\n"
                                    .'  - HTTP触发器：请参见[HTTPTriggerConfig](~~415685~~)。'."\n"
                                    .'  - Tablestore触发器：只需要填写完整的**SourceArn**参数便可, 这里无需额外配置，取值为空{}。'."\n"
                                    .'  - CDN事件触发器：请参见[CDNEventsTriggerConfig](~~415674~~)。'."\n"
                                    .'  - MNS主题触发器：请参见[MnsTopicTriggerConfig](~~415695~~)。'."\n"
                                    .'  - EventBridge触发器：请参见[EventBridgeTriggerConfig](~~2508622~~)。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '{"events": ["oss:ObjectCreated:*"], "filter": {"key": {"prefix": "/prefix", "suffix": ".zip"}}}',
                            ],
                            'triggerName' => [
                                'title' => 'trigger名称',
                                'description' => '触发器的名称。要求只能包含字母、数字、下划线\\(_)和短划线\\(-)。不能以数字、短划线\\(-)开头，长度限制为1~128个字符。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'oss_create_object_demo',
                            ],
                            'triggerType' => [
                                'title' => 'trigger类型，如 oss, log, tablestore, timer, http, cdn_events, mns_topic',
                                'description' => '触发器的类型。具体取值和触发器类型对应关系如下所示：'."\n"
                                    .'  - **oss**：OSS触发器。更多信息，请参见[OSS触发器概述](~~62922~~)。'."\n"
                                    .'  - **log**：日志服务触发器。更多信息，请参见[日志服务触发器概述](~~84386~~)。'."\n"
                                    .'  - **timer**：定时触发器。更多信息，请参见[定时触发器概述](~~68172~~)。'."\n"
                                    .'  - **http**：HTTP触发器。更多信息，请参见[HTTP触发器概述](~~71229~~)。'."\n"
                                    .'  - **tablestore**：Tablestore触发器。更多信息，请参见[Tablestore触发器概述](~~100092~~)。'."\n"
                                    .'  - **cdn_events**：CDN事件触发器。更多信息，请参见[CDN事件触发器概述](~~73333~~)。'."\n"
                                    .'  - **mns_topic**：MNS主题触发器。更多信息，请参见[MNS主题触发器概述](~~97032~~)。'."\n"
                                    .'  - **eventbridge**：EventBridge触发器。',
                                'type' => 'string',
                                'required' => true,
                                'enumValueTitles' => [
                                    'cdn_events' => 'cdn_events',
                                    'timer' => 'timer',
                                    'log' => 'log',
                                    'mns_topic' => 'mns_topic',
                                    'eventbridge' => 'eventbridge',
                                    'http' => 'http',
                                    'oss' => 'oss',
                                    'tablestore' => 'tablestore',
                                ],
                                'example' => 'oss',
                            ],
                            'description' => [
                                'description' => '触发器的描述。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'trigger for test',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '客户端发起请求的时间。格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '自定义请求ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my-test-trace-id',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [
                        'ETag' => [
                            'schema' => [
                                'title' => 'trigger etag，用于更改trigger。以确保实际更改的trigger和期望更改的trigger是一致的',
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'schema' => [
                        'title' => 'TriggerResponse',
                        'description' => '触发器定义。',
                        'type' => 'object',
                        'properties' => [
                            'createdTime' => [
                                'title' => '创建时间',
                                'description' => '触发器的创建时间。',
                                'type' => 'string',
                                'example' => '2016-08-15T15:00:00.000+0000',
                            ],
                            'invocationRole' => [
                                'title' => '调用函数使用的RAM角色的ARN',
                                'description' => '事件源调用函数使用的RAM角色的ARN。',
                                'type' => 'string',
                                'example' => 'acs:ram::1234567890:role/fc-test',
                            ],
                            'lastModifiedTime' => [
                                'title' => '上次修改时间',
                                'description' => '触发器的上次修改时间。',
                                'type' => 'string',
                                'example' => '016-08-15T17:00:00.000+0000',
                            ],
                            'qualifier' => [
                                'title' => 'service版本',
                                'description' => '服务的版本。',
                                'type' => 'string',
                                'example' => 'LATEST',
                            ],
                            'sourceArn' => [
                                'title' => 'event source的Aliyun Resource Name（ARN',
                                'description' => '事件源的Aliyun Resource Name。',
                                'type' => 'string',
                                'example' => 'acs:oss:cn-shanghai:12345:mybucket',
                            ],
                            'triggerConfig' => [
                                'title' => 'trigger配置对象',
                                'description' => '触发器配置，针对不同类型的触发器，配置有所不同。',
                                'type' => 'string',
                                'example' => '{"events": ["oss:ObjectCreated:*"], "filter": {"key": {"prefix": "/prefix", "suffix": ".zip"}}}',
                            ],
                            'triggerName' => [
                                'title' => 'trigger名称',
                                'description' => '触发器的名称。要求只能包含字母、数字、下划线（_）和短划线（-）。不能以数字、短划线（-）开头，长度限制为1~128个字符。',
                                'type' => 'string',
                                'example' => 'oss_create_object_trigger_demo',
                            ],
                            'triggerType' => [
                                'title' => 'trigger类型，如 oss, log, tablestore, timer, http, cdn_events, mns_topic',
                                'description' => '触发器的类型，例如**oss**、**log**、**tablestore**、**timer**、**http**、**cdn_events**、**mns\\_topic**、**eventbridge**。',
                                'type' => 'string',
                                'example' => 'oss',
                            ],
                            'description' => [
                                'description' => '触发器的描述。',
                                'type' => 'string',
                                'example' => 'trigger for test',
                            ],
                            'triggerId' => [
                                'description' => '触发器的唯一ID。',
                                'type' => 'string',
                                'example' => '3e270f2f-cef2-421a-bc86-ff4e8088****',
                            ],
                            'domainName' => [
                                'title' => '域名名称，使用域名名称拼接上函数计算域名，可以采用HTTP协议调用到触发器对应版本的函数。例如{domainName}.cn-shanghai.fc.aliyuncs.com',
                                'description' => '域名名称，使用域名名称拼接上函数计算域名，可以采用HTTP协议调用到触发器对应版本的函数。例如`{domainName}.cn-shanghai.fc.aliyuncs.com`。',
                                'type' => 'string',
                                'example' => 'demo-service-demo-function-jkhksh',
                            ],
                            'urlInternet' => [
                                'title' => '公网域名地址。在互联网可以通过HTTP协议或者HTTPS协议访问HTTP Trigger。',
                                'description' => '公网域名地址。在互联网可以通过HTTP协议或者HTTPS协议访问HTTP Trigger。',
                                'type' => 'string',
                                'example' => 'https://svc-func-xxxxxxxx.cn-hangzhou.fcapp.run',
                            ],
                            'urlIntranet' => [
                                'title' => '私网域名地址。在VPC可以通过HTTP协议或者HTTPS协议访问HTTP Trigger。',
                                'description' => '私网域名地址。在VPC可以通过HTTP协议或者HTTPS协议访问HTTP Trigger。',
                                'type' => 'string',
                                'example' => 'https://svc-func-xxxxxxxx.cn-hangzhou-vpc.fcapp.run',
                            ],
                        ],
                    ],
                ],
                400 => [],
                403 => [],
                [],
                409 => [],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"createdTime\\": \\"2016-08-15T15:00:00.000+0000\\",\\n  \\"invocationRole\\": \\"acs:ram::1234567890:role/fc-test\\",\\n  \\"lastModifiedTime\\": \\"016-08-15T17:00:00.000+0000\\",\\n  \\"qualifier\\": \\"LATEST\\",\\n  \\"sourceArn\\": \\"acs:oss:cn-shanghai:12345:mybucket\\",\\n  \\"triggerConfig\\": \\"{\\\\\\"events\\\\\\": [\\\\\\"oss:ObjectCreated:*\\\\\\"], \\\\\\"filter\\\\\\": {\\\\\\"key\\\\\\": {\\\\\\"prefix\\\\\\": \\\\\\"/prefix\\\\\\", \\\\\\"suffix\\\\\\": \\\\\\".zip\\\\\\"}}}\\",\\n  \\"triggerName\\": \\"oss_create_object_trigger_demo\\",\\n  \\"triggerType\\": \\"oss\\",\\n  \\"description\\": \\"trigger for test\\",\\n  \\"triggerId\\": \\"3e270f2f-cef2-421a-bc86-ff4e8088****\\",\\n  \\"domainName\\": \\"demo-service-demo-function-jkhksh\\",\\n  \\"urlInternet\\": \\"https://svc-func-xxxxxxxx.cn-hangzhou.fcapp.run\\",\\n  \\"urlIntranet\\": \\"https://svc-func-xxxxxxxx.cn-hangzhou-vpc.fcapp.run\\"\\n}","type":"json"}]',
            'title' => '创建触发器',
        ],
        'DeleteTrigger' => [
            'summary' => '删除指定的触发器。',
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/triggers/{triggerName}',
            'methods' => [
                'delete',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'If-Match',
                    'in' => 'header',
                    'schema' => [
                        'title' => '用于确保实际更改的资源和期望更改的资源是一致的，该值来自Create，Get和Update API的响应',
                        'description' => '用于确保实际更改的资源和期望更改的资源是一致的，该值来自[CreateTrigger](~~415729~~)、[GetTrigger](~~415732~~)和[UpdateTrigger](~~415731~~)的响应。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'e19d5cd5af0378da05f63f891c74****',
                    ],
                ],
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'service名称',
                        'description' => '服务的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demoService',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'function名称',
                        'description' => '函数的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demoFunction',
                    ],
                ],
                [
                    'name' => 'triggerName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '删除trigger',
                        'description' => '触发器的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demoTrigger',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '客户端发起请求的时间。格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '自定义请求ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my-test-trace-id',
                    ],
                ],
            ],
            'responses' => [
                204 => [],
                400 => [],
                403 => [],
                [],
                409 => [],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '删除触发器',
        ],
        'UpdateTrigger' => [
            'summary' => '更新触发器信息。',
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/triggers/{triggerName}',
            'methods' => [
                'put',
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
            ],
            'parameters' => [
                [
                    'name' => 'If-Match',
                    'in' => 'header',
                    'schema' => [
                        'title' => '用于确保实际更改的资源和期望更改的资源是一致的，该值来自Create，Get和Update API的响应',
                        'description' => '用于确保实际更改的资源和期望更改的资源是一致的，该值来自[CreateTrigger](~~190054~~)、[GetTrigger](~~190056~~)和[UpdateTrigger](~~190055~~)的响应。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'e19d5cd5af0378da05f63f891c7467af',
                    ],
                ],
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'service名称',
                        'description' => '服务的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demoService',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'function名称',
                        'description' => '函数的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demoFunction',
                    ],
                ],
                [
                    'name' => 'triggerName',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'trigger名称',
                        'description' => '触发器的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demoTrigger',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'trigger更新结构体',
                        'description' => '触发器的定义。',
                        'type' => 'object',
                        'properties' => [
                            'invocationRole' => [
                                'title' => 'event source，如OSS，使用该role去invoke function',
                                'description' => '事件源（如OSS）调用函数所需的角色。更多信息，请参见[触发器简介](~~53102~~)。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'acs:ram::123456xxxx:role/fc-test',
                            ],
                            'qualifier' => [
                                'title' => 'service版本',
                                'description' => '服务的版本或别名。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'LATEST',
                            ],
                            'triggerConfig' => [
                                'title' => 'trigger配置，针对不同的trigger类型，trigger配置会有所不同	',
                                'description' => '触发器配置，针对不同类型的触发器，配置有所不同。具体格式请参考如下对应的数据结构：'."\n"
                                    ."\n"
                                    .'  - OSS触发器：请参见[OSSTriggerConfig](~~415697~~)。'."\n"
                                    .'  - 日志服务触发器：请参见[LogTriggerConfig](~~415694~~)。'."\n"
                                    .'  - 定时触发器：请参见[TimeTriggerConfig](~~415712~~)。'."\n"
                                    .'  - HTTP触发器：请参见[HTTPTriggerConfig](~~415685~~)。'."\n"
                                    .'  - Tablestore触发器：只需要填写完整的**SourceArn**参数便可，这里无需额外配置，取值为空{}。'."\n"
                                    .'  - CDN事件触发器：请参见[CDNEventsTriggerConfig](~~415674~~)。'."\n"
                                    .'  - MNS主题触发器：请参见[MnsTopicTriggerConfig](~~415695~~)。'."\n"
                                    .'  - EventBridge触发器：请参见[EventBridgeTriggerConfig](~~2508622~~)。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '{"events": ["oss:ObjectCreated:*"], "filter": {"key": {"prefix": "/prefix", "suffix": ".zip"}}}',
                            ],
                            'description' => [
                                'description' => '触发器的描述。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'trigger for test',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '客户端发起请求的时间。格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '自定义请求ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my-test-trace-id',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [
                        'ETag' => [
                            'schema' => [
                                'title' => 'trigger etag，用于更改trigger。以确保实际更改的trigger和期望更改的trigger是一致的',
                                'type' => 'string',
                                'example' => '5e547e5605e1dc17a78a6191bc18fbc5',
                            ],
                        ],
                    ],
                    'schema' => [
                        'title' => 'TriggerResponse',
                        'description' => '返回的触发器定义。',
                        'type' => 'object',
                        'properties' => [
                            'createdTime' => [
                                'title' => '创建时间',
                                'description' => '创建时间。',
                                'type' => 'string',
                                'example' => '2016-08-15T15:00:00.000+0000',
                            ],
                            'invocationRole' => [
                                'title' => '调用函数使用的RAM角色的ARN',
                                'description' => '事件源调用函数使用的RAM角色的ARN。',
                                'type' => 'string',
                                'example' => 'acs:ram::123456xxxx:role/fc-test',
                            ],
                            'lastModifiedTime' => [
                                'title' => '上次修改时间',
                                'description' => '上次修改时间。',
                                'type' => 'string',
                                'example' => '016-08-15T17:00:00.000+0000',
                            ],
                            'qualifier' => [
                                'title' => 'service版本',
                                'description' => '服务的版本或别名。',
                                'type' => 'string',
                                'example' => 'LATEST',
                            ],
                            'sourceArn' => [
                                'title' => 'event source的Aliyun Resource Name（ARN',
                                'description' => '事件源的Aliyun Resource Name。',
                                'type' => 'string',
                                'example' => 'acs:oss:cn-shanghai:12345xxxx:mybucket',
                            ],
                            'triggerConfig' => [
                                'title' => 'trigger配置对象',
                                'description' => '触发器配置，针对不同类型的触发器，配置有所不同。',
                                'type' => 'string',
                                'example' => '{"events": ["oss:ObjectCreated:*"], "filter": {"key": {"prefix": "/prefix", "suffix": ".zip"}}}',
                            ],
                            'triggerName' => [
                                'title' => 'trigger名称',
                                'description' => '触发器的名称。',
                                'type' => 'string',
                                'example' => 'demoTrigger',
                            ],
                            'triggerType' => [
                                'title' => 'trigger类型，如 oss, log, tablestore, timer, http, cdn_events, mns_topic',
                                'description' => '触发器的类型，例如**oss**、**log**、**tablestore**、**timer**、**http**、**cdn_events**、**mns\\_topic**、**eventbridge**。',
                                'type' => 'string',
                                'example' => 'oss',
                            ],
                            'description' => [
                                'description' => '触发器的描述。',
                                'type' => 'string',
                                'example' => 'trigger for test',
                            ],
                            'triggerId' => [
                                'description' => '触发器的唯一ID。',
                                'type' => 'string',
                                'example' => '3e270f2f-cef2-421a-bc86-ff4e8088****',
                            ],
                            'domainName' => [
                                'title' => '域名名称，使用域名名称拼接上函数计算域名，可以采用HTTP协议调用到触发器对应版本的函数。例如{domainName}.cn-shanghai.fc.aliyuncs.com',
                                'description' => '域名名称，使用域名名称拼接上函数计算域名，可以采用HTTP协议调用到触发器对应版本的函数。例如`{domainName}.cn-shanghai.fc.aliyuncs.com`。',
                                'type' => 'string',
                                'example' => 'demo-service-demo-function-jkhksh',
                            ],
                            'urlInternet' => [
                                'title' => '公网域名地址。在互联网可以通过HTTP协议或者HTTPS协议访问HTTP Trigger。',
                                'description' => '公网域名地址。在互联网可以通过HTTP协议或者HTTPS协议访问HTTP Trigger。',
                                'type' => 'string',
                                'example' => 'https://svc-func-xxxxxxxx.cn-hangzhou.fcapp.run',
                            ],
                            'urlIntranet' => [
                                'title' => '私网域名地址。在VPC可以通过HTTP协议或者HTTPS协议访问HTTP Trigger。',
                                'description' => '私网域名地址。在VPC可以通过HTTP协议或者HTTPS协议访问HTTP Trigger。',
                                'type' => 'string',
                                'example' => 'https://svc-func-xxxxxxxx.cn-hangzhou-vpc.fcapp.run',
                            ],
                            'status' => [
                                'title' => '触发器当前状态，仅对EventBridge类型的触发器有效',
                                'description' => '触发器当前状态，仅对EventBridge类型的触发器有效',
                                'type' => 'string',
                                'example' => 'RUNNING',
                            ],
                            'targetArn' => [
                                'title' => '触发器关联的函数ResourceArn',
                                'description' => '触发器关联的函数ResourceArn',
                                'type' => 'string',
                                'example' => 'acs:fc::123456xxxx:services/my-test-service.LATEST/functions/my-test-function',
                            ],
                        ],
                    ],
                ],
                400 => [],
                403 => [],
                [],
                409 => [],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"createdTime\\": \\"2016-08-15T15:00:00.000+0000\\",\\n  \\"invocationRole\\": \\"acs:ram::123456xxxx:role/fc-test\\",\\n  \\"lastModifiedTime\\": \\"016-08-15T17:00:00.000+0000\\",\\n  \\"qualifier\\": \\"LATEST\\",\\n  \\"sourceArn\\": \\"acs:oss:cn-shanghai:12345xxxx:mybucket\\",\\n  \\"triggerConfig\\": \\"{\\\\\\"events\\\\\\": [\\\\\\"oss:ObjectCreated:*\\\\\\"], \\\\\\"filter\\\\\\": {\\\\\\"key\\\\\\": {\\\\\\"prefix\\\\\\": \\\\\\"/prefix\\\\\\", \\\\\\"suffix\\\\\\": \\\\\\".zip\\\\\\"}}}\\",\\n  \\"triggerName\\": \\"demoTrigger\\",\\n  \\"triggerType\\": \\"oss\\",\\n  \\"description\\": \\"trigger for test\\",\\n  \\"triggerId\\": \\"3e270f2f-cef2-421a-bc86-ff4e8088****\\",\\n  \\"domainName\\": \\"demo-service-demo-function-jkhksh\\",\\n  \\"urlInternet\\": \\"https://svc-func-xxxxxxxx.cn-hangzhou.fcapp.run\\",\\n  \\"urlIntranet\\": \\"https://svc-func-xxxxxxxx.cn-hangzhou-vpc.fcapp.run\\",\\n  \\"status\\": \\"RUNNING\\",\\n  \\"targetArn\\": \\"acs:fc::123456xxxx:services/my-test-service.LATEST/functions/my-test-function\\"\\n}","type":"json"}]',
            'title' => '更新触发器',
        ],
        'GetTrigger' => [
            'summary' => '获取指定的触发器详情。',
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/triggers/{triggerName}',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'service名称',
                        'description' => '服务的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demoService',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'function名称',
                        'description' => '函数的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demoFunction',
                    ],
                ],
                [
                    'name' => 'triggerName',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'trigger名称',
                        'description' => '触发器的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demoTrigger',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '客户端发起请求的时间。格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '自定义请求ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my-test-trace-id',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [
                        'ETag' => [
                            'schema' => [
                                'title' => 'trigger etag，用于更改trigger。以确保实际更改的trigger和期望更改的trigger是一致的',
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'schema' => [
                        'title' => 'TriggerResponse',
                        'description' => '触发器详情。',
                        'type' => 'object',
                        'properties' => [
                            'createdTime' => [
                                'title' => '创建时间',
                                'description' => '触发器的创建时间。',
                                'type' => 'string',
                                'example' => '2022-10-20T02:52:03Z',
                            ],
                            'invocationRole' => [
                                'title' => '调用函数使用的RAM角色的ARN',
                                'description' => '事件源调用函数使用的RAM角色的ARN。',
                                'type' => 'string',
                                'example' => 'acs:ram::123456xxxx:role/fc-test',
                            ],
                            'lastModifiedTime' => [
                                'title' => '上次修改时间',
                                'description' => '触发器的上次修改时间。',
                                'type' => 'string',
                                'example' => '2022-10-20T03:17:09Z',
                            ],
                            'qualifier' => [
                                'title' => 'service版本',
                                'description' => '服务的版本或别名。',
                                'type' => 'string',
                                'example' => 'LATEST',
                            ],
                            'sourceArn' => [
                                'title' => 'event source的Aliyun Resource Name（ARN',
                                'description' => '事件源的Aliyun Resource Name。',
                                'type' => 'string',
                                'example' => 'acs:oss:cn-shanghai:123456xxxx:mybucket',
                            ],
                            'triggerConfig' => [
                                'title' => 'trigger配置对象',
                                'description' => '触发器配置，针对不同类型的触发器，配置有所不同。具体格式请参考如下对应的数据结构：'."\n"
                                    ."\n"
                                    .'  - OSS触发器：请参见[OSSTriggerConfig](~~415697~~)。'."\n"
                                    .'  - 日志服务触发器：请参见[LogTriggerConfig](~~415694~~)。'."\n"
                                    .'  - 定时触发器：请参见[TimeTriggerConfig](~~415712~~)。'."\n"
                                    .'  - HTTP触发器：请参见[HTTPTriggerConfig](~~415685~~)。'."\n"
                                    .'  - Tablestore触发器：只需要填写完整的**SourceArn**参数便可, 这里无需额外配置，取值为空{}。'."\n"
                                    .'  - CDN事件触发器：请参见[CDNEventsTriggerConfig](~~415674~~)。'."\n"
                                    .'  - MNS主题触发器：请参见[MnsTopicTriggerConfig](~~415695~~)。'."\n"
                                    .'  - EventBridge触发器：请参见[EventBridgeTriggerConfig](~~2508622~~)。',
                                'type' => 'string',
                                'example' => '{"events": ["oss:ObjectCreated:*"], "filter": {"key": {"prefix": "/prefix", "suffix": ".zip"}}}',
                            ],
                            'triggerName' => [
                                'title' => 'trigger名称',
                                'description' => '触发器的名称。',
                                'type' => 'string',
                                'example' => 'demoTrigger',
                            ],
                            'triggerType' => [
                                'title' => 'trigger类型，如 oss, log, tablestore, timer, http, cdn_events, mns_topic',
                                'description' => '触发器的类型，例如**oss**、**log**、**tablestore**、**timer**、**http**、**cdn\\_events**、**mns\\_topic**、**eventbridge**。',
                                'type' => 'string',
                                'example' => 'oss',
                            ],
                            'description' => [
                                'description' => '触发器的描述。',
                                'type' => 'string',
                                'example' => 'trigger for test',
                            ],
                            'triggerId' => [
                                'description' => '触发器的唯一ID。',
                                'type' => 'string',
                                'example' => '3e270f2f-cef2-421a-bc86-ff4e8088476a',
                            ],
                            'domainName' => [
                                'title' => '域名名称，使用域名名称拼接上函数计算域名，可以采用HTTP协议调用到触发器对应版本的函数。例如{domainName}.cn-shanghai.fc.aliyuncs.com',
                                'description' => '域名名称，使用域名名称拼接上函数计算域名，可以采用HTTP协议调用到触发器对应版本的函数。例如`{domainName}.cn-shanghai.fc.aliyuncs.com`。',
                                'type' => 'string',
                                'example' => 'demo-service-demo-function-jkhksh',
                            ],
                            'urlInternet' => [
                                'title' => '公网域名地址。在互联网可以通过HTTP协议或者HTTPS协议访问HTTP Trigger。',
                                'description' => '公网域名地址。在互联网可以通过HTTP协议或者HTTPS协议访问HTTP Trigger。',
                                'type' => 'string',
                                'example' => 'https://svc-func-xxxxxxxx.cn-hangzhou.fcapp.run',
                            ],
                            'urlIntranet' => [
                                'title' => '私网域名地址。在VPC可以通过HTTP协议或者HTTPS协议访问HTTP Trigger。',
                                'description' => '私网域名地址。在VPC可以通过HTTP协议或者HTTPS协议访问HTTP Trigger。',
                                'type' => 'string',
                                'example' => 'https://svc-func-xxxxxxxx.cn-hangzhou-vpc.fcapp.run',
                            ],
                        ],
                    ],
                ],
                400 => [],
                403 => [],
                [],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"createdTime\\": \\"2022-10-20T02:52:03Z\\",\\n  \\"invocationRole\\": \\"acs:ram::123456xxxx:role/fc-test\\",\\n  \\"lastModifiedTime\\": \\"2022-10-20T03:17:09Z\\",\\n  \\"qualifier\\": \\"LATEST\\",\\n  \\"sourceArn\\": \\"acs:oss:cn-shanghai:123456xxxx:mybucket\\",\\n  \\"triggerConfig\\": \\"{\\\\\\"events\\\\\\": [\\\\\\"oss:ObjectCreated:*\\\\\\"], \\\\\\"filter\\\\\\": {\\\\\\"key\\\\\\": {\\\\\\"prefix\\\\\\": \\\\\\"/prefix\\\\\\", \\\\\\"suffix\\\\\\": \\\\\\".zip\\\\\\"}}}\\",\\n  \\"triggerName\\": \\"demoTrigger\\",\\n  \\"triggerType\\": \\"oss\\",\\n  \\"description\\": \\"trigger for test\\",\\n  \\"triggerId\\": \\"3e270f2f-cef2-421a-bc86-ff4e8088476a\\",\\n  \\"domainName\\": \\"demo-service-demo-function-jkhksh\\",\\n  \\"urlInternet\\": \\"https://svc-func-xxxxxxxx.cn-hangzhou.fcapp.run\\",\\n  \\"urlIntranet\\": \\"https://svc-func-xxxxxxxx.cn-hangzhou-vpc.fcapp.run\\"\\n}","type":"json"}]',
            'title' => '获取触发器信息',
        ],
        'ListTriggers' => [
            'summary' => '查询指定函数的触发器列表。',
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/triggers',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'service名称',
                        'description' => '服务的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-service',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'function名称',
                        'description' => '函数的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-function',
                    ],
                ],
                [
                    'name' => 'limit',
                    'in' => 'query',
                    'schema' => [
                        'title' => '限定此次返回资源的数量。如果不设定，默认返回20，最大不能超过100。返回结果可能小于指定的数量，但不会多于指定的数量',
                        'description' => '限定此次返回资源的数量。如果不设定，默认返回20，最大不能超过100。返回结果可能小于指定的数量，但不会多于指定的数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '用来返回更多结果。第一次查询不需要提供这个参数，后续查询的token从返回结果中获取',
                        'description' => '用来返回更多结果。第一次查询不需要提供这个参数，后续查询的token从返回结果中获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'f-trigger',
                    ],
                ],
                [
                    'name' => 'prefix',
                    'in' => 'query',
                    'schema' => [
                        'title' => '限定返回的资源名称必须以prefix作为前缀',
                        'description' => '限定返回的资源名称必须以prefix作为前缀。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'a',
                    ],
                ],
                [
                    'name' => 'startKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '设定结果从startKey之后（包括startKey）按字母排序的第一个开始返回',
                        'description' => '设定结果从startKey之后（包括startKey）按字母排序的第一个开始返回。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'a-trigger',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '客户端发起请求的时间。格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '自定义请求ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my-test-trace-id',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ListTriggers response',
                        'description' => '查询触发器的返回结构体。',
                        'type' => 'object',
                        'properties' => [
                            'nextToken' => [
                                'title' => '用来返回更多的查询结果。如果这个值没有返回，则说明没有更多结果',
                                'description' => '用来返回更多的查询结果。如果这个值没有返回，则说明没有更多结果。',
                                'type' => 'string',
                                'example' => 'f-trigger',
                            ],
                            'triggers' => [
                                'title' => 'Trigger列表',
                                'description' => 'Trigger列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '触发器详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'createdTime' => [
                                            'title' => '创建时间',
                                            'description' => '触发器的创建时间。',
                                            'type' => 'string',
                                            'example' => '2022-10-20T02:52:03Z',
                                        ],
                                        'invocationRole' => [
                                            'title' => '调用函数使用的RAM角色的ARN',
                                            'description' => '事件源调用函数使用的RAM角色的ARN。',
                                            'type' => 'string',
                                            'example' => 'acs:ram::123456xxxx:role/fc-test',
                                        ],
                                        'lastModifiedTime' => [
                                            'title' => '上次修改时间',
                                            'description' => '触发器的上次修改时间。',
                                            'type' => 'string',
                                            'example' => '2022-10-20T03:17:09Z',
                                        ],
                                        'qualifier' => [
                                            'title' => 'service版本',
                                            'description' => '服务的版本和别名。',
                                            'type' => 'string',
                                            'example' => 'LATEST',
                                        ],
                                        'sourceArn' => [
                                            'title' => 'event source的Aliyun Resource Name（ARN',
                                            'description' => '事件源的Aliyun Resource Name。',
                                            'type' => 'string',
                                            'example' => 'acs:oss:cn-shanghai:123456xxxx:mybucket',
                                        ],
                                        'triggerConfig' => [
                                            'title' => 'trigger配置对象',
                                            'description' => '触发器配置，针对不同类型的触发器，配置有所不同。具体格式请参考如下对应的数据结构：'."\n"
                                                ."\n"
                                                .'  - OSS触发器：请参见[OSSTriggerConfig](~~415697~~)。'."\n"
                                                .'  - 日志服务触发器：请参见[LogTriggerConfig](~~415694~~)。'."\n"
                                                .'  - 定时触发器：请参见[TimeTriggerConfig](~~415712~~)。'."\n"
                                                .'  - HTTP触发器：请参见[HTTPTriggerConfig](~~415685~~)。'."\n"
                                                .'  - Tablestore触发器：只需要填写完整的**SourceArn**参数便可, 这里无需额外配置，取值为空{}。'."\n"
                                                .'  - CDN事件触发器：请参见[CDNEventsTriggerConfig](~~struct:CDNEventsTriggerConfig~~)。'."\n"
                                                .'  - MNS主题触发器：请参见[MnsTopicTriggerConfig](~~415695~~)。'."\n"
                                                .'  - EventBridge触发器：请参见[EventBridgeTriggerConfig](~~struct:EventBridgeTriggerConfig~~)。',
                                            'type' => 'string',
                                            'example' => '{"events": ["oss:ObjectCreated:*"], "filter": {"key": {"prefix": "/prefix", "suffix": ".zip"}}}',
                                        ],
                                        'triggerName' => [
                                            'title' => 'trigger名称',
                                            'description' => '触发器的名称。',
                                            'type' => 'string',
                                            'example' => 'demoTrigger',
                                        ],
                                        'triggerType' => [
                                            'title' => 'trigger类型，如 oss, log, tablestore, timer, http, cdn_events, mns_topic',
                                            'description' => '触发器的类型，例如**oss**、**log**、**tablestore**、**timer**、**http**、**cdn\\_events**、**mns\\_topic**、**eventbridge**。',
                                            'type' => 'string',
                                            'example' => 'oss',
                                        ],
                                        'description' => [
                                            'description' => '触发器的描述。',
                                            'type' => 'string',
                                            'example' => 'trigger for test',
                                        ],
                                        'triggerId' => [
                                            'description' => '触发器的唯一ID。',
                                            'type' => 'string',
                                            'example' => '3e270f2f-cef2-421a-bc86-ff4e8088****',
                                        ],
                                        'domainName' => [
                                            'title' => '域名名称，使用域名名称拼接上函数计算域名，可以采用HTTP协议调用到触发器对应版本的函数。例如{domainName}.cn-shanghai.fc.aliyuncs.com',
                                            'description' => '域名名称，使用域名名称拼接上函数计算域名，可以采用HTTP协议调用到触发器对应版本的函数。例如`{domainName}.cn-shanghai.fc.aliyuncs.com`。',
                                            'type' => 'string',
                                            'example' => 'demo-service-demo-function-jkhksh',
                                        ],
                                        'urlInternet' => [
                                            'title' => '公网域名地址。在互联网可以通过HTTP协议或者HTTPS协议访问HTTP Trigger。',
                                            'description' => '公网域名地址。在互联网可以通过HTTP协议或者HTTPS协议访问HTTP Trigger。',
                                            'type' => 'string',
                                            'example' => 'https://svc-func-xxxxxxxx.cn-hangzhou.fcapp.run',
                                        ],
                                        'urlIntranet' => [
                                            'title' => '私网域名地址。在VPC可以通过HTTP协议或者HTTPS协议访问HTTP Trigger。',
                                            'description' => '私网域名地址。在VPC可以通过HTTP协议或者HTTPS协议访问HTTP Trigger。',
                                            'type' => 'string',
                                            'example' => 'https://svc-func-xxxxxxxx.cn-hangzhou-vpc.fcapp.run',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                400 => [],
                403 => [],
                [],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"nextToken\\": \\"f-trigger\\",\\n  \\"triggers\\": [\\n    {\\n      \\"createdTime\\": \\"2022-10-20T02:52:03Z\\",\\n      \\"invocationRole\\": \\"acs:ram::123456xxxx:role/fc-test\\",\\n      \\"lastModifiedTime\\": \\"2022-10-20T03:17:09Z\\",\\n      \\"qualifier\\": \\"LATEST\\",\\n      \\"sourceArn\\": \\"acs:oss:cn-shanghai:123456xxxx:mybucket\\",\\n      \\"triggerConfig\\": \\"{\\\\\\"events\\\\\\": [\\\\\\"oss:ObjectCreated:*\\\\\\"], \\\\\\"filter\\\\\\": {\\\\\\"key\\\\\\": {\\\\\\"prefix\\\\\\": \\\\\\"/prefix\\\\\\", \\\\\\"suffix\\\\\\": \\\\\\".zip\\\\\\"}}}\\",\\n      \\"triggerName\\": \\"demoTrigger\\",\\n      \\"triggerType\\": \\"oss\\",\\n      \\"description\\": \\"trigger for test\\",\\n      \\"triggerId\\": \\"3e270f2f-cef2-421a-bc86-ff4e8088****\\",\\n      \\"domainName\\": \\"demo-service-demo-function-jkhksh\\",\\n      \\"urlInternet\\": \\"https://svc-func-xxxxxxxx.cn-hangzhou.fcapp.run\\",\\n      \\"urlIntranet\\": \\"https://svc-func-xxxxxxxx.cn-hangzhou-vpc.fcapp.run\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取触发器列表',
        ],
        'CreateCustomDomain' => [
            'summary' => '创建自定义域名。',
            'path' => '/2021-04-06/custom-domains',
            'methods' => [
                'post',
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
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '域名定义。',
                        'type' => 'object',
                        'properties' => [
                            'domainName' => [
                                'description' => '域名。填写已在阿里云备案或接入备案的自定义域名名称。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'example.com',
                            ],
                            'protocol' => [
                                'description' => '域名支持的协议类型：'."\n"
                                    ."\n"
                                    .'- **HTTP**：仅支持HTTP协议。'."\n"
                                    ."\n"
                                    .'- **HTTPS**：仅支持HTTPS协议。'."\n"
                                    ."\n"
                                    .'- **HTTP,HTTPS**：支持HTTP及HTTPS协议。',
                                'type' => 'string',
                                'required' => false,
                                'enumValueTitles' => [],
                                'example' => 'HTTP',
                            ],
                            'routeConfig' => [
                                'description' => '路由表：自定义域名访问时的PATH到Function的映射。'."\n"
                                    ."\n",
                                'required' => false,
                                '$ref' => '#/components/schemas/RouteConfig',
                            ],
                            'certConfig' => [
                                'description' => 'HTTPS证书的信息。'."\n"
                                    ."\n",
                                'required' => false,
                                '$ref' => '#/components/schemas/CertConfig',
                            ],
                            'tlsConfig' => [
                                'description' => 'TLS配置信息。',
                                'required' => false,
                                '$ref' => '#/components/schemas/TLSConfig',
                            ],
                            'wafConfig' => [
                                'description' => 'Web应用防火墙配置信息。',
                                'required' => false,
                                '$ref' => '#/components/schemas/WAFConfig',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => 'API调用时间，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '自定义请求ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rid281s******',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'domainName' => [
                                'title' => 'Id of the request',
                                'description' => '域名。',
                                'type' => 'string',
                                'example' => 'example.com	',
                            ],
                            'accountId' => [
                                'description' => '您的阿里云账号（主账号）ID。',
                                'type' => 'string',
                                'example' => '1986114****4305	',
                            ],
                            'protocol' => [
                                'description' => '域名支持的协议类型：'."\n"
                                    ."\n"
                                    .'- **HTTP**：仅支持HTTP协议。'."\n"
                                    .'- **HTTPS**：仅支持HTTPS协议。'."\n"
                                    .'- **HTTP,HTTPS**：支持HTTP及HTTPS协议。'."\n",
                                'type' => 'string',
                                'example' => 'HTTP',
                            ],
                            'certConfig' => [
                                'description' => 'HTTPS证书的配置信息。'."\n"
                                    ."\n",
                                '$ref' => '#/components/schemas/CertConfig',
                            ],
                            'tlsConfig' => [
                                'description' => 'TLS配置信息。',
                                '$ref' => '#/components/schemas/TLSConfig',
                            ],
                            'apiVersion' => [
                                'description' => 'API的版本。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '2016-08-15	',
                            ],
                            'routeConfig' => [
                                'description' => '路由表：自定义域名访问时的PATH到Function的映射。'."\n"
                                    ."\n",
                                '$ref' => '#/components/schemas/RouteConfig',
                            ],
                            'createdTime' => [
                                'description' => '域名绑定的时间。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '2020-07-27T08:02:19Z	',
                            ],
                            'lastModifiedTime' => [
                                'description' => '域名上一次被更新的时间。'."\n"
                                    ."\n\n",
                                'type' => 'string',
                                'example' => '2020-07-27T08:02:19Z',
                            ],
                            'wafConfig' => [
                                'description' => 'Web应用防火墙配置信息。',
                                '$ref' => '#/components/schemas/WAFConfig',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"domainName\\": \\"example.com\\\\t\\",\\n  \\"accountId\\": \\"1986114****4305\\\\t\\",\\n  \\"protocol\\": \\"HTTP\\",\\n  \\"certConfig\\": {\\n    \\"certName\\": \\"\\",\\n    \\"certificate\\": \\"-----BEGIN CERTIFICATE----- xxxxx -----END CERTIFICATE-----\\",\\n    \\"privateKey\\": \\"-----BEGIN RSA PRIVATE KEY----- xxxxx -----END RSA PRIVATE KEY-----\\"\\n  },\\n  \\"tlsConfig\\": {\\n    \\"minVersion\\": \\"TLSv1.0\\",\\n    \\"cipherSuites\\": [\\n      \\"TLS_RSA_WITH_RC4_128_SHA\\"\\n    ],\\n    \\"maxVersion\\": \\"TLSv1.3\\"\\n  },\\n  \\"apiVersion\\": \\"2016-08-15\\\\t\\",\\n  \\"routeConfig\\": {\\n    \\"routes\\": [\\n      {\\n        \\"functionName\\": \\"f1\\",\\n        \\"methods\\": [\\n          \\"GET\\"\\n        ],\\n        \\"path\\": \\"/login\\",\\n        \\"qualifier\\": \\"prod\\",\\n        \\"serviceName\\": \\"s1\\",\\n        \\"rewriteConfig\\": {\\n          \\"equalRules\\": [\\n            {\\n              \\"match\\": \\"/old\\",\\n              \\"replacement\\": \\"/new\\"\\n            }\\n          ],\\n          \\"wildcardRules\\": [\\n            {\\n              \\"match\\": \\"/api/*\\",\\n              \\"replacement\\": \\"/$1\\"\\n            }\\n          ],\\n          \\"regexRules\\": [\\n            {\\n              \\"match\\": \\"^/js/(.*?)$\\",\\n              \\"replacement\\": \\"/public/javascripts/$1\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  },\\n  \\"createdTime\\": \\"2020-07-27T08:02:19Z\\\\t\\",\\n  \\"lastModifiedTime\\": \\"2020-07-27T08:02:19Z\\",\\n  \\"wafConfig\\": {\\n    \\"enableWAF\\": true\\n  }\\n}","type":"json"}]',
            'title' => '创建自定义域名',
        ],
        'DeleteCustomDomain' => [
            'summary' => '删除自定义域名。',
            'path' => '/2021-04-06/custom-domains/{domainName}',
            'methods' => [
                'delete',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'domainName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '域名名称',
                        'description' => '域名名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => 'API调用时间，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '自定义请求ID。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rid281s******',
                    ],
                ],
            ],
            'responses' => [
                204 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '删除自定义域名',
        ],
        'UpdateCustomDomain' => [
            'summary' => '更新自定义域名。',
            'path' => '/2021-04-06/custom-domains/{domainName}',
            'methods' => [
                'put',
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
            ],
            'parameters' => [
                [
                    'name' => 'domainName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com	',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体。',
                        'type' => 'object',
                        'properties' => [
                            'protocol' => [
                                'description' => '域名支持的协议类型：'."\n"
                                    ."\n"
                                    .'- **HTTP**：仅支持HTTP协议。'."\n"
                                    ."\n"
                                    .'- **HTTPS**：仅支持HTTPS协议。'."\n"
                                    ."\n"
                                    .'- **HTTP,HTTPS**：同时支持HTTP及HTTPS协议。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'HTTP',
                            ],
                            'routeConfig' => [
                                'description' => '路由表：自定义域名访问时的PATH到Function的映射。'."\n"
                                    ."\n",
                                'required' => false,
                                '$ref' => '#/components/schemas/RouteConfig',
                            ],
                            'certConfig' => [
                                'description' => 'HTTPS证书的配置信息。'."\n"
                                    ."\n",
                                'required' => false,
                                '$ref' => '#/components/schemas/CertConfig',
                            ],
                            'tlsConfig' => [
                                'description' => 'TLS配置信息。',
                                'required' => false,
                                '$ref' => '#/components/schemas/TLSConfig',
                            ],
                            'wafConfig' => [
                                'description' => 'Web应用防火墙配置信息。',
                                'required' => false,
                                '$ref' => '#/components/schemas/WAFConfig',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => 'API调用时间，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '自定义请求ID。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'asdf*****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '域名更新结果。',
                        'type' => 'object',
                        'properties' => [
                            'domainName' => [
                                'description' => '域名。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => 'example.com	',
                            ],
                            'accountId' => [
                                'description' => '您的阿里云账号（主账号）ID。'."\n",
                                'type' => 'string',
                                'example' => '1986114****4305	',
                            ],
                            'protocol' => [
                                'description' => '域名支持的协议类型。'."\n"
                                    ."\n"
                                    .'- **HTTP**：仅支持HTTP协议。'."\n"
                                    .'- **HTTPS**：仅支持HTTPS协议。'."\n"
                                    .'- **HTTP,HTTPS**：支持HTTP及HTTPS协议。'."\n",
                                'type' => 'string',
                                'example' => 'HTTP',
                            ],
                            'apiVersion' => [
                                'description' => 'API版本。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '2016-08-15	',
                            ],
                            'createdTime' => [
                                'description' => '域名的创建时间。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '2020-07-27T08:02:19Z	',
                            ],
                            'lastModifiedTime' => [
                                'description' => '域名上一次被更新的时间。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '2020-07-27T08:02:19Z',
                            ],
                            'certConfig' => [
                                'description' => 'HTTPS证书的配置信息。'."\n"
                                    ."\n",
                                '$ref' => '#/components/schemas/CertConfig',
                            ],
                            'routeConfig' => [
                                'description' => '路由表：自定义域名访问时的PATH到Function的映射。'."\n"
                                    ."\n",
                                '$ref' => '#/components/schemas/RouteConfig',
                            ],
                            'tlsConfig' => [
                                'description' => 'TLS配置信息。',
                                '$ref' => '#/components/schemas/TLSConfig',
                            ],
                            'wafConfig' => [
                                'description' => 'Web应用防火墙配置信息。',
                                '$ref' => '#/components/schemas/WAFConfig',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"domainName\\": \\"example.com\\\\t\\",\\n  \\"accountId\\": \\"1986114****4305\\\\t\\",\\n  \\"protocol\\": \\"HTTP\\",\\n  \\"apiVersion\\": \\"2016-08-15\\\\t\\",\\n  \\"createdTime\\": \\"2020-07-27T08:02:19Z\\\\t\\",\\n  \\"lastModifiedTime\\": \\"2020-07-27T08:02:19Z\\",\\n  \\"certConfig\\": {\\n    \\"certName\\": \\"\\",\\n    \\"certificate\\": \\"-----BEGIN CERTIFICATE----- xxxxx -----END CERTIFICATE-----\\",\\n    \\"privateKey\\": \\"-----BEGIN RSA PRIVATE KEY----- xxxxx -----END RSA PRIVATE KEY-----\\"\\n  },\\n  \\"routeConfig\\": {\\n    \\"routes\\": [\\n      {\\n        \\"functionName\\": \\"f1\\",\\n        \\"methods\\": [\\n          \\"GET\\"\\n        ],\\n        \\"path\\": \\"/login\\",\\n        \\"qualifier\\": \\"prod\\",\\n        \\"serviceName\\": \\"s1\\",\\n        \\"rewriteConfig\\": {\\n          \\"equalRules\\": [\\n            {\\n              \\"match\\": \\"/old\\",\\n              \\"replacement\\": \\"/new\\"\\n            }\\n          ],\\n          \\"wildcardRules\\": [\\n            {\\n              \\"match\\": \\"/api/*\\",\\n              \\"replacement\\": \\"/$1\\"\\n            }\\n          ],\\n          \\"regexRules\\": [\\n            {\\n              \\"match\\": \\"^/js/(.*?)$\\",\\n              \\"replacement\\": \\"/public/javascripts/$1\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  },\\n  \\"tlsConfig\\": {\\n    \\"minVersion\\": \\"TLSv1.0\\",\\n    \\"cipherSuites\\": [\\n      \\"TLS_RSA_WITH_RC4_128_SHA\\"\\n    ],\\n    \\"maxVersion\\": \\"TLSv1.3\\"\\n  },\\n  \\"wafConfig\\": {\\n    \\"enableWAF\\": true\\n  }\\n}","type":"json"}]',
            'title' => '更新自定义域名',
        ],
        'GetCustomDomain' => [
            'summary' => '获取自定义域名配置。',
            'path' => '/2021-04-06/custom-domains/{domainName}',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'domainName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '域名。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com	',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => 'API调用时间，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '自定义请求ID。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'r4isu4sls****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'domainName' => [
                                'title' => 'Id of the request',
                                'description' => '域名。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => 'example.com',
                            ],
                            'accountId' => [
                                'description' => '您的阿里云账号（主账号）ID。'."\n",
                                'type' => 'string',
                                'example' => '2016-08-15	',
                            ],
                            'protocol' => [
                                'description' => '域名支持的协议类型：'."\n"
                                    ."\n"
                                    .'- **HTTP**：仅支持HTTP协议。'."\n"
                                    .'- **HTTPS**：仅支持HTTPS协议。'."\n"
                                    .'- **HTTP,HTTPS**：支持HTTP及HTTPS协议。'."\n",
                                'type' => 'string',
                                'example' => 'HTTP',
                            ],
                            'apiVersion' => [
                                'description' => 'API版本。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '2016-08-15	',
                            ],
                            'createdTime' => [
                                'description' => '域名的创建时间。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '2020-07-27T08:02:19Z	',
                            ],
                            'lastModifiedTime' => [
                                'description' => '域名上一次被更新的时间。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '2020-07-27T08:02:19Z	',
                            ],
                            'certConfig' => [
                                'description' => 'HTTPS证书的配置信息。'."\n"
                                    ."\n",
                                '$ref' => '#/components/schemas/CertConfig',
                            ],
                            'tlsConfig' => [
                                'description' => 'TLS配置信息。',
                                '$ref' => '#/components/schemas/TLSConfig',
                            ],
                            'routeConfig' => [
                                'description' => '路由表：自定义域名访问时的PATH到Function的映射。'."\n"
                                    ."\n",
                                '$ref' => '#/components/schemas/RouteConfig',
                            ],
                            'wafConfig' => [
                                'description' => 'Web应用防火墙配置信息。',
                                '$ref' => '#/components/schemas/WAFConfig',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"domainName\\": \\"example.com\\",\\n  \\"accountId\\": \\"2016-08-15\\\\t\\",\\n  \\"protocol\\": \\"HTTP\\",\\n  \\"apiVersion\\": \\"2016-08-15\\\\t\\",\\n  \\"createdTime\\": \\"2020-07-27T08:02:19Z\\\\t\\",\\n  \\"lastModifiedTime\\": \\"2020-07-27T08:02:19Z\\\\t\\",\\n  \\"certConfig\\": {\\n    \\"certName\\": \\"\\",\\n    \\"certificate\\": \\"-----BEGIN CERTIFICATE----- xxxxx -----END CERTIFICATE-----\\",\\n    \\"privateKey\\": \\"-----BEGIN RSA PRIVATE KEY----- xxxxx -----END RSA PRIVATE KEY-----\\"\\n  },\\n  \\"tlsConfig\\": {\\n    \\"minVersion\\": \\"TLSv1.0\\",\\n    \\"cipherSuites\\": [\\n      \\"TLS_RSA_WITH_RC4_128_SHA\\"\\n    ],\\n    \\"maxVersion\\": \\"TLSv1.3\\"\\n  },\\n  \\"routeConfig\\": {\\n    \\"routes\\": [\\n      {\\n        \\"functionName\\": \\"f1\\",\\n        \\"methods\\": [\\n          \\"GET\\"\\n        ],\\n        \\"path\\": \\"/login\\",\\n        \\"qualifier\\": \\"prod\\",\\n        \\"serviceName\\": \\"s1\\",\\n        \\"rewriteConfig\\": {\\n          \\"equalRules\\": [\\n            {\\n              \\"match\\": \\"/old\\",\\n              \\"replacement\\": \\"/new\\"\\n            }\\n          ],\\n          \\"wildcardRules\\": [\\n            {\\n              \\"match\\": \\"/api/*\\",\\n              \\"replacement\\": \\"/$1\\"\\n            }\\n          ],\\n          \\"regexRules\\": [\\n            {\\n              \\"match\\": \\"^/js/(.*?)$\\",\\n              \\"replacement\\": \\"/public/javascripts/$1\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  },\\n  \\"wafConfig\\": {\\n    \\"enableWAF\\": true\\n  }\\n}","type":"json"}]',
            'title' => '获取自定义域名配置',
        ],
        'ListCustomDomains' => [
            'summary' => '获取自定义域名信息列表。',
            'path' => '/2021-04-06/custom-domains',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'prefix',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设定返回域名的前缀。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'prefix_text	',
                    ],
                ],
                [
                    'name' => 'startKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设定结果从startKey之后（包括startKey）按字母排序的第一个开始返回。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'next_service	',
                    ],
                ],
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当符合查询条件的数据未读取完时，服务端会返回nextToken，此时可以使用nextToken继续读取后面的数据。第一次查询不需要提供这个参数。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'fc-thinkphp-demo.functioncompute.com	',
                    ],
                ],
                [
                    'name' => 'limit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '限定此次返回资源的数量。取值范围[0,100]，默认值为20。返回结果小于或等于指定的数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => 'API调用时间，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '自定义请求ID。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'asdf*****',
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
                            'nextToken' => [
                                'description' => '当符合查询条件的数据未读取完时，服务端会返回nextToken，此时可以使用nextToken继续读取后面的数据。第一次查询不需要提供这个参数。',
                                'type' => 'string',
                                'example' => 'example.com',
                            ],
                            'customDomains' => [
                                'description' => '符合列举条件的域名列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '域名信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'domainName' => [
                                            'description' => '域名。',
                                            'type' => 'string',
                                            'example' => 'example.com	',
                                        ],
                                        'accountId' => [
                                            'description' => '您的阿里云账号（主账号）ID。'."\n",
                                            'type' => 'string',
                                            'example' => '1986114****4305	',
                                        ],
                                        'protocol' => [
                                            'description' => '域名支持的协议类型。'."\n"
                                                ."\n"
                                                .'- **HTTP**：仅支持HTTP协议。'."\n"
                                                .'- **HTTPS**：仅支持HTTPS协议。'."\n"
                                                .'- **HTTP,HTTPS**：支持HTTP及HTTPS协议。'."\n",
                                            'type' => 'string',
                                            'example' => 'HTTP	',
                                        ],
                                        'apiVersion' => [
                                            'description' => 'API的版本。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => '2016-08-15	',
                                        ],
                                        'createdTime' => [
                                            'description' => '域名的创建时间。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => '2020-07-27T08:02:19Z	',
                                        ],
                                        'lastModifiedTime' => [
                                            'description' => '域名上一次被更新的时间。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => '2020-07-27T08:02:19Z	',
                                        ],
                                        'certConfig' => [
                                            'description' => 'HTTPS证书的配置信息。'."\n"
                                                ."\n",
                                            '$ref' => '#/components/schemas/CertConfig',
                                        ],
                                        'tlsConfig' => [
                                            'description' => 'TLS配置信息。',
                                            '$ref' => '#/components/schemas/TLSConfig',
                                        ],
                                        'routeConfig' => [
                                            'description' => '路由表：定义域名访问时的PATH到Function的映射。'."\n"
                                                ."\n",
                                            '$ref' => '#/components/schemas/RouteConfig',
                                        ],
                                        'wafConfig' => [
                                            'description' => 'Web应用防火墙配置信息。',
                                            '$ref' => '#/components/schemas/WAFConfig',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"nextToken\\": \\"example.com\\",\\n  \\"customDomains\\": [\\n    {\\n      \\"domainName\\": \\"example.com\\\\t\\",\\n      \\"accountId\\": \\"1986114****4305\\\\t\\",\\n      \\"protocol\\": \\"HTTP\\\\t\\",\\n      \\"apiVersion\\": \\"2016-08-15\\\\t\\",\\n      \\"createdTime\\": \\"2020-07-27T08:02:19Z\\\\t\\",\\n      \\"lastModifiedTime\\": \\"2020-07-27T08:02:19Z\\\\t\\",\\n      \\"certConfig\\": {\\n        \\"certName\\": \\"\\",\\n        \\"certificate\\": \\"-----BEGIN CERTIFICATE----- xxxxx -----END CERTIFICATE-----\\",\\n        \\"privateKey\\": \\"-----BEGIN RSA PRIVATE KEY----- xxxxx -----END RSA PRIVATE KEY-----\\"\\n      },\\n      \\"tlsConfig\\": {\\n        \\"minVersion\\": \\"TLSv1.0\\",\\n        \\"cipherSuites\\": [\\n          \\"TLS_RSA_WITH_RC4_128_SHA\\"\\n        ],\\n        \\"maxVersion\\": \\"TLSv1.3\\"\\n      },\\n      \\"routeConfig\\": {\\n        \\"routes\\": [\\n          {\\n            \\"functionName\\": \\"f1\\",\\n            \\"methods\\": [\\n              \\"GET\\"\\n            ],\\n            \\"path\\": \\"/login\\",\\n            \\"qualifier\\": \\"prod\\",\\n            \\"serviceName\\": \\"s1\\",\\n            \\"rewriteConfig\\": {\\n              \\"equalRules\\": [\\n                {\\n                  \\"match\\": \\"/old\\",\\n                  \\"replacement\\": \\"/new\\"\\n                }\\n              ],\\n              \\"wildcardRules\\": [\\n                {\\n                  \\"match\\": \\"/api/*\\",\\n                  \\"replacement\\": \\"/$1\\"\\n                }\\n              ],\\n              \\"regexRules\\": [\\n                {\\n                  \\"match\\": \\"^/js/(.*?)$\\",\\n                  \\"replacement\\": \\"/public/javascripts/$1\\"\\n                }\\n              ]\\n            }\\n          }\\n        ]\\n      },\\n      \\"wafConfig\\": {\\n        \\"enableWAF\\": true\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取自定义域名列表信息',
        ],
        'CreateAlias' => [
            'summary' => '创建别名。',
            'path' => '/2021-04-06/services/{serviceName}/aliases',
            'methods' => [
                'post',
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
            ],
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '服务名称',
                        'description' => '服务的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'service_name',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '别名',
                        'description' => '别名的定义。',
                        'type' => 'object',
                        'properties' => [
                            'additionalVersionWeight' => [
                                'title' => '额外版本权重',
                                'description' => '别名指向的灰度版本以及灰度权重。'."\n"
                                    ."\n"
                                    .'- 灰度版本只在调用函数时生效。'."\n"
                                    .'- 由版本号和对应的权重组成，例如，2:0.05表明调用函数时，版本2为灰度版本，切5%的流量到灰度版本，95%的流量默认到主版本。',
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'example' => '1',
                                    'description' => '流量权重，取值范围\\[0,1]。',
                                ],
                            ],
                            'aliasName' => [
                                'title' => '别名名称',
                                'description' => '别名的名称。只能包含字母、数字、下划线（\\_）和中划线（-），不能以数字、中划线（-）开头，长度范围为1~128个字符，且值不能为**LATEST**。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'alias_test',
                            ],
                            'description' => [
                                'title' => '别名描述',
                                'description' => '别名的描述。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'test_description',
                            ],
                            'versionId' => [
                                'title' => '版本ID',
                                'description' => '别名指向的版本ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '1',
                            ],
                            'resolvePolicy' => [
                                'title' => '灰度方式：随机灰度或者规则灰度，默认值为随机灰度'."\n"
                                    .'枚举值：'."\n"
                                    .'Random'."\n"
                                    .'Content',
                                'description' => '灰度方式。取值如下：'."\n"
                                    ."\n"
                                    .'- **Random**：随机灰度。'."\n"
                                    .'- **Content**：规则灰度。'."\n"
                                    .'默认值：无。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'Random',
                                'default' => 'Random',
                            ],
                            'routePolicy' => [
                                'title' => '灰度规则：满足灰度规则条件的流量，会被路由至灰度实例',
                                'description' => '灰度规则。满足灰度规则条件的流量，会被路由至灰度实例。',
                                'required' => false,
                                '$ref' => '#/components/schemas/RoutePolicy',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数计算调用请求的调用链ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'r9s89isisi****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [
                        'etag' => [
                            'schema' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'schema' => [
                        'title' => '别名定义',
                        'description' => '别名的定义。',
                        'type' => 'object',
                        'properties' => [
                            'additionalVersionWeight' => [
                                'title' => '额外版本权重',
                                'description' => '别名指向的灰度版本以及灰度权重。'."\n"
                                    ."\n"
                                    .'- 灰度版本只在调用函数时生效。'."\n"
                                    .'- 由版本号和对应的权重组成，例如，2:0.05表明调用函数时，版本2为灰度版本，切5%的流量到灰度版本，95%的流量默认到主版本。',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'example' => '1',
                                    'description' => '流量权重，取值范围\\[0,1]。',
                                ],
                            ],
                            'aliasName' => [
                                'title' => '别名名称',
                                'description' => '别名的名称。',
                                'type' => 'string',
                                'example' => 'alias_test',
                            ],
                            'createdTime' => [
                                'title' => '创建时间',
                                'description' => '别名的创建时间。',
                                'type' => 'string',
                                'example' => '2020-04-23T06:32:43Z',
                            ],
                            'description' => [
                                'title' => '别名描述',
                                'description' => '别名的描述。',
                                'type' => 'string',
                                'example' => 'test_description',
                            ],
                            'lastModifiedTime' => [
                                'title' => '上次更新时间',
                                'description' => '别名上一次被更新的时间。',
                                'type' => 'string',
                                'example' => '2020-04-23T06:32:43Z',
                            ],
                            'versionId' => [
                                'title' => '版本ID',
                                'description' => '别名指向的版本ID。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'resolvePolicy' => [
                                'description' => '灰度方式。取值如下：'."\n"
                                    ."\n"
                                    .'- **Random**：随机灰度，为默认值。'."\n"
                                    .'- **Content**：规则灰度。',
                                'type' => 'string',
                                'example' => 'Random',
                            ],
                            'routePolicy' => [
                                'description' => '灰度规则：满足灰度规则条件的流量，打向灰度实例。',
                                '$ref' => '#/components/schemas/RoutePolicy',
                            ],
                        ],
                    ],
                ],
                400 => [],
                403 => [],
                [],
                409 => [],
                500 => [],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"additionalVersionWeight\\": {\\n    \\"key\\": 1\\n  },\\n  \\"aliasName\\": \\"alias_test\\",\\n  \\"createdTime\\": \\"2020-04-23T06:32:43Z\\",\\n  \\"description\\": \\"test_description\\",\\n  \\"lastModifiedTime\\": \\"2020-04-23T06:32:43Z\\",\\n  \\"versionId\\": \\"1\\",\\n  \\"resolvePolicy\\": \\"Random\\",\\n  \\"routePolicy\\": {\\n    \\"condition\\": \\"AND\\",\\n    \\"policyItems\\": [\\n      {\\n        \\"type\\": \\"Header\\",\\n        \\"key\\": \\"x-test-uid\\",\\n        \\"value\\": \\"11111\\",\\n        \\"operator\\": \\"=\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateAliasResponse>\\n    <additionalVersionWeight>\\n        <key>1</key>\\n    </additionalVersionWeight>\\n    <aliasName>alias_test</aliasName>\\n    <createdTime>2020-04-23T06:32:43Z</createdTime>\\n    <description>test_description</description>\\n    <lastModifiedTime>2020-04-23T06:32:43Z</lastModifiedTime>\\n    <versionId>1</versionId>\\n</CreateAliasResponse>","errorExample":""}]',
            'title' => '创建别名',
        ],
        'DeleteAlias' => [
            'summary' => '删除别名。',
            'path' => '/2021-04-06/services/{serviceName}/aliases/{aliasName}',
            'methods' => [
                'delete',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '服务名称',
                        'description' => '服务名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-service',
                    ],
                ],
                [
                    'name' => 'aliasName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '别名',
                        'description' => '别名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'If-Match',
                    'in' => 'header',
                    'schema' => [
                        'description' => '如果传入的ETag和Object的ETag匹配，则正常传输Object，并返回200 OK；如果传入的ETag和Object的ETag不匹配，则返回412 Precondition Failed。'."\n"
                            ."\n"
                            .'Object的ETag值用于验证数据是否发生了更改，您可以基于ETag值验证数据完整性。默认值：无。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'e19d5cd5af0378da05f63f891c7467af',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数计算调用请求的调用链ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'r9s89isisi****',
                    ],
                ],
            ],
            'responses' => [
                204 => [],
                400 => [],
                403 => [],
                [],
                409 => [],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '删除别名',
        ],
        'UpdateAlias' => [
            'summary' => '更新别名。',
            'path' => '/2021-04-06/services/{serviceName}/aliases/{aliasName}',
            'methods' => [
                'put',
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
            ],
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '服务名称',
                        'description' => '服务名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-service',
                    ],
                ],
                [
                    'name' => 'aliasName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '别名',
                        'description' => '别名的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'alias_test',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '别名',
                        'description' => '别名的定义。',
                        'type' => 'object',
                        'properties' => [
                            'additionalVersionWeight' => [
                                'title' => '额外版本权重',
                                'description' => '别名指向的灰度版本以及灰度权重。'."\n"
                                    ."\n"
                                    .'- 灰度版本只在调用函数时生效。'."\n"
                                    .'- 由版本号和对应的权重组成，例如，2:0.05表明调用函数时，版本2为灰度版本，切5%的流量到灰度版本，95%的流量默认到主版本。',
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'example' => '1',
                                    'description' => '流量权重，取值范围[0,1]。',
                                ],
                            ],
                            'description' => [
                                'title' => '别名描述',
                                'description' => '别名的描述。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'test_description',
                            ],
                            'versionId' => [
                                'title' => '版本ID',
                                'description' => '别名指向的版本ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1',
                            ],
                            'resolvePolicy' => [
                                'title' => '灰度方式：随机灰度或者规则灰度，默认值为随机灰度'."\n"
                                    .'枚举值：'."\n"
                                    .'Random'."\n"
                                    .'Content',
                                'description' => '灰度方式。取值如下：'."\n"
                                    ."\n"
                                    .'- **Random**：随机灰度，为默认值。'."\n"
                                    .'- **Content**：规则灰度。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'Random',
                                'default' => 'Content',
                            ],
                            'routePolicy' => [
                                'title' => '灰度规则：满足灰度规则条件的流量，会被路由至灰度实例',
                                'description' => '灰度规则。满足灰度规则条件的流量，会被路由至灰度实例。',
                                'required' => false,
                                '$ref' => '#/components/schemas/RoutePolicy',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'If-Match',
                    'in' => 'header',
                    'schema' => [
                        'description' => '如果传入的ETag和Object的ETag匹配，则正常传输Object，并返回200 OK；如果传入的ETag和Object的ETag不匹配，则返回412 Precondition Failed。'."\n"
                            ."\n"
                            .'Object的ETag值用于验证数据是否发生了更改，您可以基于ETag值验证数据完整性。默认值：无。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'e19d5cd5af0378da05f63f891c7467af',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数计算调用请求的调用链ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rid281s******',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [
                        'ETag' => [
                            'schema' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'schema' => [
                        'title' => '别名定义',
                        'description' => '别名的定义。',
                        'type' => 'object',
                        'properties' => [
                            'additionalVersionWeight' => [
                                'title' => '额外版本权重',
                                'description' => '别名指向的灰度版本以及灰度权重。'."\n"
                                    ."\n"
                                    .'- 灰度版本只在调用函数时生效。'."\n"
                                    .'- 由版本号和对应的权重组成，例如，2:0.05表明调用函数时，版本2为灰度版本，切5%的流量到灰度版本，95%的流量默认到主版本。',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'example' => '1',
                                    'description' => '流量权重，取值范围[0,1]。',
                                ],
                            ],
                            'aliasName' => [
                                'title' => '别名名称',
                                'description' => '别名名称。',
                                'type' => 'string',
                                'example' => 'test',
                            ],
                            'createdTime' => [
                                'title' => '创建时间',
                                'description' => '别名的创建时间。',
                                'type' => 'string',
                                'example' => '2016-08-15T16:06:05.000+0000',
                            ],
                            'description' => [
                                'title' => '别名描述',
                                'description' => '别名的描述。',
                                'type' => 'string',
                                'example' => 'test_description',
                            ],
                            'lastModifiedTime' => [
                                'title' => '上次更新时间',
                                'description' => '别名上一次被更新的时间。',
                                'type' => 'string',
                                'example' => '2016-08-15T16:06:05.000+0000',
                            ],
                            'versionId' => [
                                'title' => '版本ID',
                                'description' => '别名指向的版本ID。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'resolvePolicy' => [
                                'description' => '灰度方式。取值如下：'."\n"
                                    ."\n"
                                    .'- **Random**：随机灰度，为默认值。'."\n"
                                    .'- **Content**：规则灰度。',
                                'type' => 'string',
                                'example' => 'Random',
                            ],
                            'routePolicy' => [
                                'description' => '灰度规则：满足灰度规则条件的流量，打向灰度实例。',
                                '$ref' => '#/components/schemas/RoutePolicy',
                            ],
                        ],
                    ],
                ],
                400 => [],
                403 => [],
                [],
                409 => [],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"additionalVersionWeight\\": {\\n    \\"key\\": 1\\n  },\\n  \\"aliasName\\": \\"test\\",\\n  \\"createdTime\\": \\"2016-08-15T16:06:05.000+0000\\",\\n  \\"description\\": \\"test_description\\",\\n  \\"lastModifiedTime\\": \\"2016-08-15T16:06:05.000+0000\\",\\n  \\"versionId\\": \\"1\\",\\n  \\"resolvePolicy\\": \\"Random\\",\\n  \\"routePolicy\\": {\\n    \\"condition\\": \\"AND\\",\\n    \\"policyItems\\": [\\n      {\\n        \\"type\\": \\"Header\\",\\n        \\"key\\": \\"x-test-uid\\",\\n        \\"value\\": \\"11111\\",\\n        \\"operator\\": \\"=\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '更新别名',
        ],
        'GetAlias' => [
            'summary' => '获取别名信息。',
            'path' => '/2021-04-06/services/{serviceName}/aliases/{aliasName}',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '服务名称',
                        'description' => '服务的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'service_name',
                    ],
                ],
                [
                    'name' => 'aliasName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '别名',
                        'description' => '别名的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'alias_test',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数计算调用请求的调用链ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'r4isu4sls****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [
                        'ETag' => [
                            'schema' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'schema' => [
                        'title' => '别名定义',
                        'description' => '别名的定义。',
                        'type' => 'object',
                        'properties' => [
                            'additionalVersionWeight' => [
                                'title' => '额外版本权重',
                                'description' => '别名指向的灰度版本以及灰度权重。'."\n"
                                    ."\n"
                                    .'- 灰度版本只在调用函数时生效。'."\n"
                                    .'- 由版本号和对应的权重组成，例如，2:0.05表明调用函数时，版本2为灰度版本，切5%的流量到灰度版本，95%的流量默认到主版本。',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'description' => '流量权重，取值范围\\[0,1]。',
                                    'example' => '1',
                                ],
                            ],
                            'aliasName' => [
                                'title' => '别名名称',
                                'description' => '别名的名称。',
                                'type' => 'string',
                                'example' => 'alias_test',
                            ],
                            'createdTime' => [
                                'title' => '创建时间',
                                'description' => '别名创建的时间。',
                                'type' => 'string',
                                'example' => '2020-07-27T06:37:29Z',
                            ],
                            'description' => [
                                'title' => '别名描述',
                                'description' => '别名的描述。',
                                'type' => 'string',
                                'example' => 'test_description',
                            ],
                            'lastModifiedTime' => [
                                'title' => '上次更新时间',
                                'description' => '别名上一次被更新的时间。',
                                'type' => 'string',
                                'example' => '2020-07-27T06:37:29Z',
                            ],
                            'versionId' => [
                                'title' => '版本ID',
                                'description' => '别名指向的版本。',
                                'type' => 'string',
                                'example' => '2',
                            ],
                            'resolvePolicy' => [
                                'title' => '灰度方式：随机灰度或者规则灰度，默认值为随机灰度'."\n"
                                    .'枚举值：'."\n"
                                    .'Random'."\n"
                                    .'Content',
                                'description' => '灰度方式。取值如下：'."\n"
                                    ."\n"
                                    .'- **Random**：随机灰度，为默认值。'."\n"
                                    .'- **Content**：规则灰度。',
                                'type' => 'string',
                                'example' => 'Random',
                                'default' => 'Content',
                            ],
                            'routePolicy' => [
                                'title' => '灰度规则：满足灰度规则条件的流量，会被路由至灰度实例',
                                'description' => '灰度规则。满足灰度规则条件的流量，会被路由至灰度实例。',
                                '$ref' => '#/components/schemas/RoutePolicy',
                            ],
                        ],
                    ],
                ],
                400 => [],
                403 => [],
                [],
                500 => [],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"additionalVersionWeight\\": {\\n    \\"key\\": 1\\n  },\\n  \\"aliasName\\": \\"alias_test\\",\\n  \\"createdTime\\": \\"2020-07-27T06:37:29Z\\",\\n  \\"description\\": \\"test_description\\",\\n  \\"lastModifiedTime\\": \\"2020-07-27T06:37:29Z\\",\\n  \\"versionId\\": \\"2\\",\\n  \\"resolvePolicy\\": \\"Random\\",\\n  \\"routePolicy\\": {\\n    \\"condition\\": \\"AND\\",\\n    \\"policyItems\\": [\\n      {\\n        \\"type\\": \\"Header\\",\\n        \\"key\\": \\"x-test-uid\\",\\n        \\"value\\": \\"11111\\",\\n        \\"operator\\": \\"=\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetAliasResponse>\\n    <additionalVersionWeight>\\n        <key>1</key>\\n    </additionalVersionWeight>\\n    <aliasName>alias_test</aliasName>\\n    <createdTime>2020-07-27T06:37:29Z</createdTime>\\n    <description>test_description</description>\\n    <lastModifiedTime>2020-07-27T06:37:29Z</lastModifiedTime>\\n    <versionId>2</versionId>\\n</GetAliasResponse>","errorExample":""}]',
            'title' => '查询别名',
        ],
        'ListAliases' => [
            'summary' => '查询别名列表信息。',
            'path' => '/2021-04-06/services/{serviceName}/aliases',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '服务名称',
                        'description' => '服务名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-service',
                    ],
                ],
                [
                    'name' => 'limit',
                    'in' => 'query',
                    'schema' => [
                        'title' => '最多返回个数',
                        'description' => '限定此次返回资源的数量。如果不设定，默认返回20，最大不能超过100。返回结果可能小于指定的数量，但不会多于指定的数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '下次查询token',
                        'description' => '用来返回更多结果。第一次查询不需要提供这个参数，后续查询的Token从返回结果中获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'caeba0be03****f84eb48b699f0a4883',
                    ],
                ],
                [
                    'name' => 'prefix',
                    'in' => 'query',
                    'schema' => [
                        'title' => '前缀',
                        'description' => '限定返回的资源名称必须以prefix作为前缀。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'prefix_text',
                    ],
                ],
                [
                    'name' => 'startKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '起始key',
                        'description' => '设定结果从startKey之后（包括startKey）按字母排序的第一个开始返回。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'nextkey',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数计算调用请求的调用链ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'r9s89isisi****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '查询别名响应',
                        'description' => '查询别名响应。',
                        'type' => 'object',
                        'properties' => [
                            'aliases' => [
                                'title' => '别名列表',
                                'description' => '别名列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '别名的定义。',
                                    'type' => 'object',
                                    'properties' => [
                                        'additionalVersionWeight' => [
                                            'title' => '额外版本权重',
                                            'description' => '别名指向的灰度版本以及灰度权重。'."\n"
                                                ."\n"
                                                .'- 灰度版本只在调用函数时生效。'."\n"
                                                .'- 由版本号和对应的权重组成，例如，2:0.05表明调用函数时，版本2为灰度版本，切5%的流量到灰度版本，95%的流量默认到主版本。',
                                            'type' => 'object',
                                            'additionalProperties' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'description' => '流量权重，取值范围[0,1]。',
                                                'example' => '1',
                                            ],
                                        ],
                                        'aliasName' => [
                                            'title' => '别名名称',
                                            'description' => '别名名称。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'createdTime' => [
                                            'title' => '创建时间',
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2016-08-15T16:06:05.000+0000',
                                        ],
                                        'description' => [
                                            'title' => '别名描述',
                                            'description' => '别名描述。',
                                            'type' => 'string',
                                            'example' => '这是一个示例别名',
                                        ],
                                        'lastModifiedTime' => [
                                            'title' => '上次更新时间',
                                            'description' => '上次更新时间。',
                                            'type' => 'string',
                                            'example' => '2016-08-15T16:06:05.000+0000',
                                        ],
                                        'versionId' => [
                                            'title' => '版本ID',
                                            'description' => '版本ID。',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'resolvePolicy' => [
                                            'title' => '灰度方式：随机灰度或者规则灰度，默认值为随机灰度'."\n"
                                                .'枚举值：'."\n"
                                                .'Random'."\n"
                                                .'Content',
                                            'description' => '灰度方式。取值如下：'."\n"
                                                ."\n"
                                                .'- **Random**：随机灰度，为默认值。'."\n"
                                                .'- **Content**：规则灰度。',
                                            'type' => 'string',
                                            'example' => 'Random',
                                            'default' => 'Content',
                                        ],
                                        'routePolicy' => [
                                            'title' => '灰度规则：满足灰度规则条件的流量，会被路由至灰度实例',
                                            'description' => '灰度规则。满足灰度规则条件的流量，会被路由至灰度实例。',
                                            '$ref' => '#/components/schemas/RoutePolicy',
                                        ],
                                    ],
                                ],
                            ],
                            'nextToken' => [
                                'title' => '下次查询token',
                                'description' => '下次查询Token。',
                                'type' => 'string',
                                'example' => '8bj81uI8n****',
                            ],
                        ],
                    ],
                ],
                400 => [],
                403 => [],
                [],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"aliases\\": [\\n    {\\n      \\"additionalVersionWeight\\": {\\n        \\"key\\": 1\\n      },\\n      \\"aliasName\\": \\"test\\",\\n      \\"createdTime\\": \\"2016-08-15T16:06:05.000+0000\\",\\n      \\"description\\": \\"这是一个示例别名\\",\\n      \\"lastModifiedTime\\": \\"2016-08-15T16:06:05.000+0000\\",\\n      \\"versionId\\": \\"1\\",\\n      \\"resolvePolicy\\": \\"Random\\",\\n      \\"routePolicy\\": {\\n        \\"condition\\": \\"AND\\",\\n        \\"policyItems\\": [\\n          {\\n            \\"type\\": \\"Header\\",\\n            \\"key\\": \\"x-test-uid\\",\\n            \\"value\\": \\"11111\\",\\n            \\"operator\\": \\"=\\"\\n          }\\n        ]\\n      }\\n    }\\n  ],\\n  \\"nextToken\\": \\"8bj81uI8n****\\"\\n}","type":"json"}]',
            'title' => '获取别名列表信息',
        ],
        'CreateFunction' => [
            'summary' => '创建函数。',
            'path' => '/2021-04-06/services/{serviceName}/functions',
            'methods' => [
                'post',
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
            ],
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '服务名称',
                        'description' => '服务的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'serviceName',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'function',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '函数结构体',
                        'description' => '函数的定义。',
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'description' => '函数代码ZIP包。**code**和**customContainerConfig**二选一。',
                                'required' => false,
                                '$ref' => '#/components/schemas/Code',
                            ],
                            'customContainerConfig' => [
                                'description' => 'Custom Container运行时的相关配置，成功配置后函数可以使用自定义容器镜像执行函数。**code**和**customContainerConfig**二选一。',
                                'required' => false,
                                '$ref' => '#/components/schemas/CustomContainerConfig',
                            ],
                            'layers' => [
                                'title' => '层列表',
                                'description' => '层的列表。'."\n"
                                    .'> 多个层会按照数组下标从大到小的顺序进行合并，下标小的层的内容会覆盖下标大的层的同名文件。'."\n"
                                    ."\n",
                                'type' => 'array',
                                'items' => [
                                    'description' => '层资源的名称。格式为acs:fc:{region}:{accountID}:layers/{layerName}/versions/{layerVersion}。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'layerName',
                                ],
                                'required' => false,
                            ],
                            'description' => [
                                'title' => '函数描述',
                                'description' => '函数的描述。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'function-description',
                            ],
                            'functionName' => [
                                'title' => '函数名称',
                                'description' => '函数的名称。只能包含字母、数字、下划线（_）和短划线（-），不能以数字、短划线（-）开头，长度范围为1~64个字符。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'functionName',
                            ],
                            'handler' => [
                                'title' => 'function执行的入口，具体格式和语言相关',
                                'description' => '函数执行的入口，具体格式和语言相关。详细信息，请参见[函数入口](~~157704~~)。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'index.handler',
                            ],
                            'initializationTimeout' => [
                                'title' => '初始化function运行的超时时间，单位为秒，最小1秒，默认3秒。初始化function超过这个时间后会被终止执行',
                                'description' => '初始化函数运行的超时时间，默认值为3秒，单位为秒。最小1秒，最大为5分钟。当初始化函数超过这个时间后，函数会被终止执行。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '60',
                            ],
                            'initializer' => [
                                'title' => '初始化 function 执行的入口，具体格式和语言相关',
                                'description' => '初始化函数执行的入口。详细信息，请参见[Initializer函数](~~157704~~)。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'index.initializer',
                            ],
                            'memorySize' => [
                                'title' => 'function的内存规格，单位为MB，为64MB的倍数',
                                'description' => '函数的内存规格，单位为MB，内存大小为64 MB的倍数。不同的函数实例类型，内存规格存在差异。更多信息，请参见[实例规格](~~179379~~)。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '512',
                            ],
                            'runtime' => [
                                'title' => 'function运行的语言环境，目前支持nodejs6, nodejs8, python2.7, python3, java8',
                                'description' => '函数运行的语言环境。目前支持**nodejs20**、**nodejs18**、**nodejs20**、**nodejs18**、**nodejs16**、**nodejs14**、**nodejs12**、**nodejs10**、**nodejs8**、**nodejs6**、**nodejs4.4**、**python3.10**、**python3.9**、**python3**、**python2.7**、**java11**、**java8**、**go1**、**php7.2**、**dotnetcore3.1**、**dotnetcore2.1**、**custom.debian10**、**custom**和**custom-container**。更多信息，请参见[支持的函数运行环境列表](~~73338~~)。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'python3.9',
                            ],
                            'timeout' => [
                                'title' => 'function运行的超时时间，单位为秒，最小1秒，默认3秒。function超过这个时间后会被终止执行',
                                'description' => '函数运行的超时时间，单位为秒，最小1秒，默认3秒。函数超过这个时间后会被终止执行。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '60',
                            ],
                            'caPort' => [
                                'title' => '自定义、自定义容器运行时 HTTP Server 的监听端口',
                                'description' => '自定义、自定义容器运行时HTTP Server的监听端口。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '9000',
                            ],
                            'environmentVariables' => [
                                'description' => '函数的环境变量，您可以在函数中通过环境变量访问环境变量。更多信息，请参见[环境变量](~~69777~~)。',
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                    'description' => '环境变量配置。',
                                    'example' => '{"key":"value"}',
                                ],
                            ],
                            'instanceConcurrency' => [
                                'description' => '实例最大并发度。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '10',
                            ],
                            'instanceSoftConcurrency' => [
                                'description' => '实例软并发度，用于优雅扩容。当实例上的并发数超过软并发度时，会触发实例扩容。例如，您的实例启动较慢，可以通过设置合适的软实例并发度，提前启动实例。'."\n"
                                    ."\n"
                                    .'取值小于或等于**instanceConcurrency**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '5',
                            ],
                            'instanceType' => [
                                'description' => '函数的实例类型，取值如下：'."\n"
                                    .'  * **e1**：弹性实例。'."\n"
                                    .'  * **c1**：性能实例。'."\n"
                                    .'  * **fc.gpu.tesla.1**：GPU实例Tesla系列T4卡型。'."\n"
                                    .'  * **fc.gpu.ampere.1**：GPU实例Ampere系列A10卡型。'."\n"
                                    .'  * **g1**：同**fc.gpu.tesla.1**。'."\n"
                                    ."\n"
                                    .'默认值：e1',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'e1',
                            ],
                            'customRuntimeConfig' => [
                                'title' => 'Custom Runtime函数详细配置',
                                'description' => 'Custom Runtime函数详细配置。',
                                'required' => false,
                                '$ref' => '#/components/schemas/CustomRuntimeConfig',
                            ],
                            'instanceLifecycleConfig' => [
                                'description' => '实例生命周期配置。',
                                'required' => false,
                                '$ref' => '#/components/schemas/InstanceLifecycleConfig',
                            ],
                            'customDNS' => [
                                'title' => '函数自定义DNS配置',
                                'description' => '函数自定义DNS配置。',
                                'required' => false,
                                '$ref' => '#/components/schemas/CustomDNS',
                            ],
                            'customHealthCheckConfig' => [
                                'title' => '函数自定义健康检查配置，仅适用于Custom runtime/container',
                                'description' => '函数自定义健康检查配置，仅适用于Custom Runtime和Custom Container。',
                                'required' => false,
                                '$ref' => '#/components/schemas/CustomHealthCheckConfig',
                            ],
                            'cpu' => [
                                'title' => 'function的CPU规格，单位为vCPU，为0.05vCPU的倍数',
                                'description' => '函数的CPU规格，单位为vCPU，为0.05 vCPU的倍数。',
                                'type' => 'number',
                                'format' => 'float',
                                'required' => false,
                                'example' => '1.5',
                            ],
                            'diskSize' => [
                                'title' => 'function的磁盘规格，单位为MB，可选值为512MB或10240MB',
                                'description' => '函数的磁盘规格，单位为MB，可选值为512 MB或10240 MB。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '512',
                            ],
                            'gpuMemorySize' => [
                                'title' => 'function的GPU显存规格，单位为MB，为1024MB的倍数',
                                'description' => 'function的GPU显存规格，单位为MB，为1024MB的倍数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '2048',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Code-Checksum',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数代码包的CRC-64值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1506052139770049xxxx',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '调用函数的ID，与返回参数requestId对应。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test-trace-id',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [
                        'ETag' => [
                            'schema' => [
                                'title' => 'function etag，用于更改function。以确保实际更改的function和期望更改的function是一致的.',
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'schema' => [
                        'title' => 'FunctionResponse',
                        'description' => '创建函数的返回值。',
                        'type' => 'object',
                        'properties' => [
                            'codeChecksum' => [
                                'title' => 'function code包的CRC64值',
                                'description' => '函数代码包的CRC64值。',
                                'type' => 'string',
                                'example' => '5434025278388143772',
                            ],
                            'codeSize' => [
                                'title' => '系统返回的function的code包大小，单位为byte Example : 1024',
                                'description' => '系统返回的函数代码包的大小，单位为Byte。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1024',
                            ],
                            'createdTime' => [
                                'title' => 'function创建时间',
                                'description' => '函数的创建时间。',
                                'type' => 'string',
                                'example' => '2016-08-15T15:00:00.000+0000',
                            ],
                            'customContainerConfig' => [
                                'description' => 'Custom Container运行时的相关配置，配置后函数可以使用自定义容器镜像执行函数。',
                                '$ref' => '#/components/schemas/CustomContainerConfig',
                            ],
                            'layers' => [
                                'description' => '层的列表。'."\n"
                                    .'> 多个层会按照数组下标从大到小的顺序进行合并，下标小的层的内容会覆盖下标大的层的同名文件。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '层资源的名称。',
                                    'type' => 'string',
                                    'example' => 'md5#layername#version',
                                ],
                            ],
                            'description' => [
                                'title' => '函数描述',
                                'description' => '函数描述。',
                                'type' => 'string',
                                'example' => 'This is a demo hello world function',
                            ],
                            'functionId' => [
                                'title' => '系统为每个function生成的唯一ID',
                                'description' => '系统为每个函数生成的唯一ID。',
                                'type' => 'string',
                                'example' => '2d28e0e9-9ba5-4eed-8b1a-d3d9cd24'."\n"
                                    .'****',
                            ],
                            'functionName' => [
                                'title' => '函数名称',
                                'description' => '函数名称。',
                                'type' => 'string',
                                'example' => 'demo-function',
                            ],
                            'handler' => [
                                'title' => 'function的执行入口',
                                'description' => '函数的执行入口。',
                                'type' => 'string',
                                'example' => 'index.handler',
                            ],
                            'lastModifiedTime' => [
                                'title' => 'function上次修改时间',
                                'description' => '函数上次修改时间。',
                                'type' => 'string',
                                'example' => '2016-08-15T17:00:00.000+0000',
                            ],
                            'memorySize' => [
                                'title' => 'function的内存规格，单位为MB，为64MB的倍数',
                                'description' => '函数设置的内存大小，单位为MB。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '512',
                            ],
                            'runtime' => [
                                'title' => 'function运行的语言环境，目前支持nodejs6, nodejs8, python2.7, python3, java8',
                                'description' => '函数运行的语言环境。目前支持**nodejs20**、**nodejs18**、**nodejs20**、**nodejs18**、**nodejs16**、**nodejs14**、**nodejs12**、**nodejs10**、**nodejs8**、**nodejs6**、**nodejs4.4**、**python3.10**、**python3.9**、**python3**、**python2.7**、**java11**、**java8**、**go1**、**php7.2**、**dotnetcore3.1**、**dotnetcore2.1**、**custom.debian10**、**custom**和**custom-container**。更多信息，请参见[支持的函数运行环境列表](~~73338~~)。',
                                'type' => 'string',
                                'example' => 'python3.9',
                            ],
                            'timeout' => [
                                'title' => '运行的超时时间，单位为秒',
                                'description' => '函数运行的超时时间，单位为秒，默认60秒。最小1秒，最长10分钟。如果函数运行超过设置的时间，函数运行将被终止。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'initializationTimeout' => [
                                'title' => '初始化function运行的超时时间，单位为秒，最小1秒，默认3秒。初始化function超过这个时间后会被终止执行',
                                'description' => '初始化函数运行的超时时间，单位为秒，最小1秒，默认3秒。初始化函数超过这个时间后会被终止执行。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '60',
                            ],
                            'initializer' => [
                                'title' => '初始化 function 执行的入口，具体格式和语言相关',
                                'description' => '初始化函数执行的入口，具体格式和语言相关。',
                                'type' => 'string',
                                'example' => 'index.handler',
                            ],
                            'caPort' => [
                                'title' => '自定义、自定义容器运行时 HTTP Server 的监听端口',
                                'description' => 'Custom Runtime或Custom Container运行时HTTP Server的监听端口。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '9000',
                            ],
                            'environmentVariables' => [
                                'description' => '为函数设置的环境变量，可以在函数中获取环境变量的值。更多信息，请参见[环境变量](~~69777~~)。',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'string',
                                    'description' => '环境变量配置。',
                                    'example' => '{"key":"value"}',
                                ],
                            ],
                            'instanceConcurrency' => [
                                'description' => '单个函数实例允许的最大并发度。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'instanceSoftConcurrency' => [
                                'description' => '实例软并发度，用于优雅扩容。当实例上的并发数超过软并发度时，会触发实例扩容。例如，您的实例启动较慢，可以通过设置合适的软实例并发度，提前启动实例。'."\n"
                                    ."\n"
                                    .'取值小于或等于**instanceConcurrency**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '5',
                            ],
                            'instanceType' => [
                                'description' => '函数的实例类型，取值如下：'."\n"
                                    .'  * **e1**：弹性实例。'."\n"
                                    .'  * **c1**：性能实例。'."\n"
                                    .'  * **fc.gpu.tesla.1**：GPU实例Tesla系列T4卡型。'."\n"
                                    .'  * **fc.gpu.ampere.1**：GPU实例Ampere系列A10卡型。'."\n"
                                    .'  * **g1**：同**fc.gpu.tesla.1**。',
                                'type' => 'string',
                                'example' => 'e1',
                            ],
                            'instanceLifecycleConfig' => [
                                'description' => '实例生命周期配置。'."\n"
                                    ."\n",
                                '$ref' => '#/components/schemas/InstanceLifecycleConfig',
                            ],
                            'customDNS' => [
                                'title' => '函数自定义DNS配置',
                                'description' => '函数自定义DNS配置。',
                                '$ref' => '#/components/schemas/CustomDNS',
                            ],
                            'customRuntimeConfig' => [
                                'title' => 'Custom Runtime函数详细配置',
                                'description' => 'Custom Runtime函数详细配置。',
                                '$ref' => '#/components/schemas/CustomRuntimeConfig',
                            ],
                            'customHealthCheckConfig' => [
                                'title' => '函数自定义健康检查配置，仅适用于Custom runtime/container',
                                'description' => '函数自定义健康检查配置，仅适用于Custom Runtime和Custom Container。',
                                '$ref' => '#/components/schemas/CustomHealthCheckConfig',
                            ],
                            'cpu' => [
                                'title' => 'function的CPU规格，单位为vCPU，为0.05vCPU的倍数',
                                'description' => '函数的CPU规格，单位为vCPU，为0.05 vCPU的倍数。',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '1.5',
                            ],
                            'diskSize' => [
                                'title' => 'function的磁盘规格，单位为MB，可选值为512MB或10240MB',
                                'description' => '函数的磁盘规格，单位为MB，可选值为512 MB或10240 MB。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '512',
                            ],
                            'gpuMemorySize' => [
                                'title' => 'function的GPU显存规格，单位为MB，为1024MB的倍数',
                                'description' => 'function的GPU显存规格，单位为MB，为1024MB的倍数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2048',
                            ],
                            'layersArnV2' => [
                                'title' => '层的arn列表',
                                'description' => '层的arn列表',
                                'type' => 'array',
                                'items' => [
                                    'title' => '层资源定位符',
                                    'description' => '层资源定位符',
                                    'type' => 'string',
                                    'example' => 'acs:fc:cn-hangzhou:official:layers/Python310/versions/2',
                                ],
                            ],
                        ],
                    ],
                ],
                400 => [],
                403 => [],
                [],
                409 => [],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"codeChecksum\\": \\"5434025278388143772\\",\\n  \\"codeSize\\": 1024,\\n  \\"createdTime\\": \\"2016-08-15T15:00:00.000+0000\\",\\n  \\"customContainerConfig\\": {\\n    \\"args\\": \\"[\\\\\\"-arg1\\\\\\", \\\\\\"value1\\\\\\"]\\",\\n    \\"command\\": \\"[\\\\\\"/code/myserver\\\\\\"]\\",\\n    \\"image\\": \\"registry-vpc.cn-hangzhou.aliyuncs.com/fc-demo/helloworld:v1beta1\\",\\n    \\"accelerationType\\": \\"Default\\",\\n    \\"instanceID\\": \\"cri-xxxxxxxxxx\\",\\n    \\"webServerMode\\": true\\n  },\\n  \\"layers\\": [\\n    \\"md5#layername#version\\"\\n  ],\\n  \\"description\\": \\"This is a demo hello world function\\",\\n  \\"functionId\\": \\"2d28e0e9-9ba5-4eed-8b1a-d3d9cd24\\\\n****\\",\\n  \\"functionName\\": \\"demo-function\\",\\n  \\"handler\\": \\"index.handler\\",\\n  \\"lastModifiedTime\\": \\"2016-08-15T17:00:00.000+0000\\",\\n  \\"memorySize\\": 512,\\n  \\"runtime\\": \\"python3.9\\",\\n  \\"timeout\\": 10,\\n  \\"initializationTimeout\\": 60,\\n  \\"initializer\\": \\"index.handler\\",\\n  \\"caPort\\": 9000,\\n  \\"environmentVariables\\": {\\n    \\"key\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\"\\n  },\\n  \\"instanceConcurrency\\": 10,\\n  \\"instanceSoftConcurrency\\": 5,\\n  \\"instanceType\\": \\"e1\\",\\n  \\"instanceLifecycleConfig\\": {\\n    \\"preFreeze\\": {\\n      \\"handler\\": \\"\\",\\n      \\"timeout\\": 0\\n    },\\n    \\"preStop\\": {\\n      \\"handler\\": \\"\\",\\n      \\"timeout\\": 0\\n    }\\n  },\\n  \\"customDNS\\": {\\n    \\"nameServers\\": [\\n      \\"8.8.8.8\\"\\n    ],\\n    \\"searches\\": [\\n      \\"ns1.svc.cluster-domain.example\\"\\n    ],\\n    \\"dnsOptions\\": [\\n      {\\n        \\"name\\": \\"ndots\\",\\n        \\"value\\": \\"2\\"\\n      }\\n    ]\\n  },\\n  \\"customRuntimeConfig\\": {\\n    \\"command\\": [\\n      \\"/code/myBootstrap\\"\\n    ],\\n    \\"args\\": [\\n      \\"args1\\"\\n    ]\\n  },\\n  \\"customHealthCheckConfig\\": {\\n    \\"httpGetUrl\\": \\"\\",\\n    \\"initialDelaySeconds\\": 0,\\n    \\"periodSeconds\\": 0,\\n    \\"timeoutSeconds\\": 0,\\n    \\"failureThreshold\\": 0,\\n    \\"successThreshold\\": 0\\n  },\\n  \\"cpu\\": 1.5,\\n  \\"diskSize\\": 512,\\n  \\"gpuMemorySize\\": 2048,\\n  \\"layersArnV2\\": [\\n    \\"acs:fc:cn-hangzhou:official:layers/Python310/versions/2\\"\\n  ]\\n}","type":"json"}]',
            'title' => '创建函数',
        ],
        'DeleteFunction' => [
            'summary' => '删除函数。删除函数前需要先删除函数的触发器。',
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}',
            'methods' => [
                'delete',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'If-Match',
                    'in' => 'header',
                    'schema' => [
                        'title' => '用于确保实际更改的资源和期望更改的资源是一致的，该值来自Create，Get和Update API的响应',
                        'description' => '用于确保实际更改的资源和期望更改的资源是一致的，该值来自Create，Get和Update API的响应。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'e19d5cd5af0378da05f63f891c7467af',
                    ],
                ],
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'service名称',
                        'description' => '服务名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demoService',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'function名称',
                        'description' => '函数名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demoFunction',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '调用函数的ID，与返回参数requestId对应。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test-trace-id',
                    ],
                ],
            ],
            'responses' => [
                204 => [],
                400 => [],
                403 => [],
                [],
                409 => [],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '删除函数',
        ],
        'UpdateFunction' => [
            'summary' => '更新函数信息。',
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}',
            'methods' => [
                'put',
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
            ],
            'parameters' => [
                [
                    'name' => 'If-Match',
                    'in' => 'header',
                    'schema' => [
                        'title' => '用于确保实际更改的资源和期望更改的资源是一致的，该值来自Create，Get和Update API的响应',
                        'description' => '用于确保实际更改的资源和期望更改的资源是一致的，该值来自[CreateFunction](~~415747~~)、[GetFunction](~~415750~~)和[UpdateFunction](~~415749~~)的响应。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'e19d5cd5af0378da05f63f891c7467af',
                    ],
                ],
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'service名称',
                        'description' => '服务名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demoService',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'function名称',
                        'description' => '函数名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demoFunction',
                    ],
                ],
                [
                    'name' => 'functionUpdateFields',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '更新函数结构体',
                        'description' => '更新函数结构体。',
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'description' => '**Code**支持两种方式提供函数代码包，在一次请求中必须且只能使用其中一种：'."\n"
                                    ."\n"
                                    .'- 指定存储代码包的**ossBucketName**和**ossObjectName**。'."\n"
                                    .'- 指定**zipFile**为ZIP包的Base64编码内容。'."\n",
                                'required' => false,
                                '$ref' => '#/components/schemas/Code',
                            ],
                            'customContainerConfig' => [
                                'description' => 'Custom Container运行时的相关配置。配置后函数可以使用自定义容器镜像执行函数。',
                                'required' => false,
                                '$ref' => '#/components/schemas/CustomContainerConfig',
                            ],
                            'layers' => [
                                'description' => '层的列表。'."\n"
                                    .'> 多个层会按照数组下标从大到小的顺序进行合并，下标小的层的内容会覆盖下标大的层的同名文件。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '层资源的名称。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'layername',
                                ],
                                'required' => false,
                            ],
                            'description' => [
                                'title' => '函数描述',
                                'description' => '函数描述。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'test desc',
                            ],
                            'environmentVariables' => [
                                'title' => '为函数设置的环境变量，可以在函数中获取环境变量的值',
                                'description' => '为函数设置的环境变量，可以在函数中获取环境变量的值。更多信息，请参见[环境变量](~~69777~~)。',
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                    'description' => '环境变量配置。',
                                    'example' => '{"key":"value"}',
                                ],
                            ],
                            'handler' => [
                                'title' => 'function执行的入口，具体格式和语言相关',
                                'description' => '函数执行的入口，具体格式和语言相关。详细信息，请参见[函数入口](~~157704~~)。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'index.handler',
                            ],
                            'memorySize' => [
                                'title' => 'function的内存规格，单位为MB，为64MB的倍数',
                                'description' => '函数的内存规格，单位为MB，内存大小为64 MB的倍数。不同的函数实例类型，内存规格存在差异。更多信息，请参见[实例规格](~~179379~~)。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '512',
                            ],
                            'runtime' => [
                                'title' => 'runtime',
                                'description' => '函数运行的语言环境。目前支持**nodejs20**、**nodejs18**、**nodejs16**、**nodejs14**、**nodejs12**、**nodejs10**、**nodejs8**、**nodejs6**、**nodejs4.4**、**python3.10**、**python3.9**、**python3**、**python2.7**、**java11**、**java8**、**go1**、**php7.2**、**dotnetcore3.1**、**dotnetcore2.1**、**custom.debian10**、**custom**和**custom-container**。更多信息，请参见[支持的函数运行环境列表](~~73338~~)。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'python3.9',
                            ],
                            'timeout' => [
                                'title' => 'function运行的超时时间，单位为秒，最小1秒，默认3秒。function超过这个时间后会被终止执行',
                                'description' => '函数运行的超时时间，单位为秒，最小1秒，默认3秒。函数超过这个时间后会被终止执行。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '60',
                            ],
                            'initializationTimeout' => [
                                'title' => '初始化function运行的超时时间，单位为秒，最小1秒，默认3秒。初始化function超过这个时间后会被终止执行',
                                'description' => '初始化函数运行的超时时间，单位为秒，最小1秒，默认3秒。初始化函数超过这个时间后会被终止执行。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '60',
                            ],
                            'initializer' => [
                                'title' => '初始化 function 执行的入口，具体格式和语言相关',
                                'description' => '初始化函数执行的入口，具体格式和语言相关。详细信息，请参见[函数入口](~~157704~~)。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'index.handler',
                            ],
                            'caPort' => [
                                'title' => '自定义、自定义容器运行时 HTTP Server 的监听端口',
                                'description' => '自定义、自定义容器运行时HTTP Server的监听端口。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '9000',
                            ],
                            'InstanceConcurrency' => [
                                'title' => '单个实例的最大并发度',
                                'description' => '实例最大并发度。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '10',
                            ],
                            'instanceSoftConcurrency' => [
                                'description' => '实例软并发度，用于优雅扩容。当实例上的并发数超过软并发度时，会触发实例扩容。例如，您的实例启动较慢，可以通过设置合适的软实例并发度，提前启动实例。'."\n"
                                    ."\n"
                                    .'取值小于或等于**instanceConcurrency**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '5',
                            ],
                            'instanceType' => [
                                'description' => '函数的实例类型，取值如下：'."\n"
                                    .'  * **e1**：弹性实例。'."\n"
                                    .'  * **c1**：性能实例。'."\n"
                                    .'  * **fc.gpu.tesla.1**：GPU实例Tesla系列T4卡型。'."\n"
                                    .'  * **fc.gpu.ampere.1**：GPU实例Ampere系列A10卡型。'."\n"
                                    .'  * **g1**：同**fc.gpu.tesla.1**。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'e1',
                            ],
                            'instanceLifecycleConfig' => [
                                'description' => '实例生命周期配置。',
                                'required' => false,
                                '$ref' => '#/components/schemas/InstanceLifecycleConfig',
                            ],
                            'customDNS' => [
                                'title' => '函数自定义DNS配置',
                                'description' => '函数自定义DNS配置。',
                                'required' => false,
                                '$ref' => '#/components/schemas/CustomDNS',
                            ],
                            'customRuntimeConfig' => [
                                'title' => 'Custom Runtime函数详细配置',
                                'description' => 'Custom Runtime函数详细配置。',
                                'required' => false,
                                '$ref' => '#/components/schemas/CustomRuntimeConfig',
                            ],
                            'customHealthCheckConfig' => [
                                'title' => '函数自定义健康检查配置，仅适用于Custom runtime/container',
                                'description' => '函数自定义健康检查配置，仅适用于Custom Runtime和Custom Container。',
                                'required' => false,
                                '$ref' => '#/components/schemas/CustomHealthCheckConfig',
                            ],
                            'cpu' => [
                                'title' => 'function的CPU规格，单位为vCPU，为0.05vCPU的倍数',
                                'description' => '函数的CPU规格，单位为vCPU，为0.05 vCPU的倍数。',
                                'type' => 'number',
                                'format' => 'float',
                                'required' => false,
                                'example' => '1.5',
                            ],
                            'diskSize' => [
                                'title' => 'function的磁盘规格，单位为MB，可选值为512MB或10240MB',
                                'description' => '函数的磁盘规格，单位为MB，可选值为512 MB或10240 MB。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '512',
                            ],
                            'gpuMemorySize' => [
                                'title' => 'function的GPU显存规格，单位为MB，为1024MB的倍数',
                                'description' => 'function的GPU显存规格，单位为MB，为1024MB的倍数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '2048',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Code-Checksum',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数代码包的CRC-64值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1506052139770049xxxx',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '调用函数的ID，与返回参数requestId对应。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test-trace-id',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [
                        'ETag' => [
                            'schema' => [
                                'title' => 'function etag，用于更改function。以确保实际更改的function和期望更改的function是一致的.',
                                'type' => 'string',
                                'example' => '5e547e5605e1dc17a78a6191bc18fbc5',
                            ],
                        ],
                    ],
                    'schema' => [
                        'title' => 'FunctionResponse',
                        'description' => '更新函数的返回值。',
                        'type' => 'object',
                        'properties' => [
                            'codeChecksum' => [
                                'title' => 'function code包的CRC64值',
                                'description' => '函数代码包的CRC64值。',
                                'type' => 'string',
                                'example' => '5434025278388143772',
                            ],
                            'codeSize' => [
                                'title' => '系统返回的function的code包大小，单位为byte Example : 1024',
                                'description' => '系统返回的函数代码包的大小，单位为Byte。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1024',
                            ],
                            'createdTime' => [
                                'title' => 'function创建时间',
                                'description' => '函数创建时间。',
                                'type' => 'string',
                                'example' => '2016-08-15T15:00:00.000+0000',
                            ],
                            'customContainerConfig' => [
                                'description' => 'Custom Container运行时的相关配置，配置后函数可以使用自定义容器镜像执行函数。',
                                '$ref' => '#/components/schemas/CustomContainerConfig',
                            ],
                            'layers' => [
                                'description' => '层的列表。'."\n"
                                    .'> 多个层会按照数组下标从大到小的顺序进行合并，下标小的层的内容会覆盖下标大的层的同名文件。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '层资源的名称。',
                                    'type' => 'string',
                                    'example' => 'md5#layername#version',
                                ],
                            ],
                            'description' => [
                                'title' => '函数描述',
                                'description' => '函数描述。',
                                'type' => 'string',
                                'example' => 'This is a demo hello world function',
                            ],
                            'environmentVariables' => [
                                'title' => '为函数设置的环境变量，可以在函数中获取环境变量的值',
                                'description' => '为函数设置的环境变量，可以在函数中获取环境变量的值。更多信息，请参见[环境变量](~~69777~~)。',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'string',
                                    'description' => '环境变量配置。',
                                    'example' => '{"key":"value"}',
                                ],
                            ],
                            'functionId' => [
                                'title' => '系统为每个function生成的唯一ID',
                                'description' => '系统为每个函数生成的唯一ID。',
                                'type' => 'string',
                                'example' => '2d28e0e9-9ba5-4eed-8b1a-d3d9cd24****',
                            ],
                            'functionName' => [
                                'title' => '函数名称',
                                'description' => '函数名称。',
                                'type' => 'string',
                                'example' => 'demo-function',
                            ],
                            'handler' => [
                                'title' => 'function的执行入口',
                                'description' => '函数的执行入口。',
                                'type' => 'string',
                                'example' => 'index.handler',
                            ],
                            'lastModifiedTime' => [
                                'title' => 'function上次修改时间',
                                'description' => '函数上次修改时间。',
                                'type' => 'string',
                                'example' => '2016-08-15T17:00:00.000+0000',
                            ],
                            'memorySize' => [
                                'title' => 'function的内存规格，单位为MB，为64MB的倍数',
                                'description' => '函数设置的内存大小，单位为MB。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '512',
                            ],
                            'runtime' => [
                                'title' => 'function运行的语言环境，目前支持nodejs6, nodejs8, python2.7, python3, java8',
                                'description' => '函数运行的语言环境。目前支持**nodejs20**、**nodejs18**、**nodejs16**、**nodejs14**、**nodejs12**、**nodejs10**、**nodejs8**、**nodejs6**、**nodejs4.4**、**python3.10**、**python3.9**、**python3**、**python2.7**、**java11**、**java8**、**go1**、**php7.2**、**dotnetcore3.1**、**dotnetcore2.1**、**custom.debian10**、**custom**和**custom-container**。更多信息，请参见[支持的函数运行环境列表](~~73338~~)。',
                                'type' => 'string',
                                'example' => 'python3.9',
                            ],
                            'timeout' => [
                                'title' => '运行的超时时间，单位为秒',
                                'description' => '运行的超时时间，单位为秒。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'initializationTimeout' => [
                                'title' => '初始化function运行的超时时间，单位为秒，最小1秒，默认3秒。初始化function超过这个时间后会被终止执行',
                                'description' => '初始化函数运行的超时时间，单位为秒，最小1秒，默认3秒。初始化函数超过这个时间后会被终止执行。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '60',
                            ],
                            'initializer' => [
                                'title' => '初始化 function 执行的入口，具体格式和语言相关',
                                'description' => '初始化函数执行的入口，具体格式和语言相关。',
                                'type' => 'string',
                                'example' => 'index.handler',
                            ],
                            'caPort' => [
                                'title' => '自定义、自定义容器运行时 HTTP Server 的监听端口',
                                'description' => 'Custom Runtime或Custom Container运行时HTTP Server的监听端口。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '9000',
                            ],
                            'instanceType' => [
                                'description' => '函数的实例类型，取值如下：'."\n"
                                    .'  * **e1**：弹性实例。'."\n"
                                    .'  * **c1**：性能实例。'."\n"
                                    .'  * **fc.gpu.tesla.1**：GPU实例Tesla系列T4卡型。'."\n"
                                    .'  * **fc.gpu.ampere.1**：GPU实例Ampere系列A10卡型。'."\n"
                                    .'  * **g1**：同**fc.gpu.tesla.1**。',
                                'type' => 'string',
                                'example' => 'e1',
                            ],
                            'instanceSoftConcurrency' => [
                                'description' => '实例软并发度，用于优雅扩容。当实例上的并发数超过软并发度时，会触发实例扩容。例如，您的实例启动较慢，可以通过设置合适的软实例并发度，提前启动实例。'."\n"
                                    ."\n"
                                    .'取值小于或等于**instanceConcurrency**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '5',
                            ],
                            'instanceLifecycleConfig' => [
                                'description' => '实例生命周期配置。',
                                '$ref' => '#/components/schemas/InstanceLifecycleConfig',
                            ],
                            'customDNS' => [
                                'title' => '函数自定义DNS配置',
                                'description' => '函数自定义DNS配置。',
                                '$ref' => '#/components/schemas/CustomDNS',
                            ],
                            'customRuntimeConfig' => [
                                'title' => 'Custom Runtime函数详细配置',
                                'description' => 'Custom Runtime函数详细配置。',
                                '$ref' => '#/components/schemas/CustomRuntimeConfig',
                            ],
                            'customHealthCheckConfig' => [
                                'title' => '函数自定义健康检查配置，仅适用于Custom runtime/container',
                                'description' => '函数自定义健康检查配置，仅适用于Custom Runtime和Custom Container。',
                                '$ref' => '#/components/schemas/CustomHealthCheckConfig',
                            ],
                            'cpu' => [
                                'title' => 'function的CPU规格，单位为vCPU，为0.05vCPU的倍数',
                                'description' => '函数的CPU规格，单位为vCPU，为0.05 vCPU的倍数。',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '1.5',
                            ],
                            'diskSize' => [
                                'title' => 'function的磁盘规格，单位为MB，可选值为512MB或10240MB',
                                'description' => '函数的磁盘规格，单位为MB，可选值为512 MB或10240 MB。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '512',
                            ],
                            'instanceConcurrency' => [
                                'title' => '单个实例的最大并发度',
                                'description' => '单个实例的并发度。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'gpuMemorySize' => [
                                'title' => 'function的GPU显存规格，单位为MB，为1024MB的倍数',
                                'description' => 'function的GPU显存规格，单位为MB，为1024MB的倍数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2048',
                            ],
                            'layersArnV2' => [
                                'title' => '层的arn列表',
                                'description' => '层的arn列表',
                                'type' => 'array',
                                'items' => [
                                    'title' => '层资源定位符',
                                    'description' => '层资源定位符',
                                    'type' => 'string',
                                    'example' => 'acs:fc:cn-hangzhou:official:layers/Python310/versions/2',
                                ],
                            ],
                        ],
                    ],
                ],
                400 => [],
                403 => [],
                [],
                409 => [],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"codeChecksum\\": \\"5434025278388143772\\",\\n  \\"codeSize\\": 1024,\\n  \\"createdTime\\": \\"2016-08-15T15:00:00.000+0000\\",\\n  \\"customContainerConfig\\": {\\n    \\"args\\": \\"[\\\\\\"-arg1\\\\\\", \\\\\\"value1\\\\\\"]\\",\\n    \\"command\\": \\"[\\\\\\"/code/myserver\\\\\\"]\\",\\n    \\"image\\": \\"registry-vpc.cn-hangzhou.aliyuncs.com/fc-demo/helloworld:v1beta1\\",\\n    \\"accelerationType\\": \\"Default\\",\\n    \\"instanceID\\": \\"cri-xxxxxxxxxx\\",\\n    \\"webServerMode\\": true\\n  },\\n  \\"layers\\": [\\n    \\"md5#layername#version\\"\\n  ],\\n  \\"description\\": \\"This is a demo hello world function\\",\\n  \\"environmentVariables\\": {\\n    \\"key\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\"\\n  },\\n  \\"functionId\\": \\"2d28e0e9-9ba5-4eed-8b1a-d3d9cd24****\\",\\n  \\"functionName\\": \\"demo-function\\",\\n  \\"handler\\": \\"index.handler\\",\\n  \\"lastModifiedTime\\": \\"2016-08-15T17:00:00.000+0000\\",\\n  \\"memorySize\\": 512,\\n  \\"runtime\\": \\"python3.9\\",\\n  \\"timeout\\": 10,\\n  \\"initializationTimeout\\": 60,\\n  \\"initializer\\": \\"index.handler\\",\\n  \\"caPort\\": 9000,\\n  \\"instanceType\\": \\"e1\\",\\n  \\"instanceSoftConcurrency\\": 5,\\n  \\"instanceLifecycleConfig\\": {\\n    \\"preFreeze\\": {\\n      \\"handler\\": \\"\\",\\n      \\"timeout\\": 0\\n    },\\n    \\"preStop\\": {\\n      \\"handler\\": \\"\\",\\n      \\"timeout\\": 0\\n    }\\n  },\\n  \\"customDNS\\": {\\n    \\"nameServers\\": [\\n      \\"8.8.8.8\\"\\n    ],\\n    \\"searches\\": [\\n      \\"ns1.svc.cluster-domain.example\\"\\n    ],\\n    \\"dnsOptions\\": [\\n      {\\n        \\"name\\": \\"ndots\\",\\n        \\"value\\": \\"2\\"\\n      }\\n    ]\\n  },\\n  \\"customRuntimeConfig\\": {\\n    \\"command\\": [\\n      \\"/code/myBootstrap\\"\\n    ],\\n    \\"args\\": [\\n      \\"args1\\"\\n    ]\\n  },\\n  \\"customHealthCheckConfig\\": {\\n    \\"httpGetUrl\\": \\"\\",\\n    \\"initialDelaySeconds\\": 0,\\n    \\"periodSeconds\\": 0,\\n    \\"timeoutSeconds\\": 0,\\n    \\"failureThreshold\\": 0,\\n    \\"successThreshold\\": 0\\n  },\\n  \\"cpu\\": 1.5,\\n  \\"diskSize\\": 512,\\n  \\"instanceConcurrency\\": 10,\\n  \\"gpuMemorySize\\": 2048,\\n  \\"layersArnV2\\": [\\n    \\"acs:fc:cn-hangzhou:official:layers/Python310/versions/2\\"\\n  ]\\n}","type":"json"}]',
            'title' => '更新函数',
        ],
        'GetFunction' => [
            'summary' => '获取函数信息。',
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}',
            'methods' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'service名称',
                        'description' => '服务的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'service_name',
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'service版本, 可以是versionId或者aliasName',
                        'description' => '服务的版本ID或者别名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demoQualifier',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'function名称',
                        'description' => '函数的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'function_name',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => ' 自定义请求ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'asdf****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [
                        'ETag' => [
                            'schema' => [
                                'title' => 'function etag，用于更改function。以确保实际更改的function和期望更改的function是一致的.',
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'schema' => [
                        'title' => 'FunctionResponse',
                        'description' => '函数的定义。',
                        'type' => 'object',
                        'properties' => [
                            'codeChecksum' => [
                                'title' => 'function code包的CRC64值',
                                'description' => '函数代码包的CRC-64值。',
                                'type' => 'string',
                                'example' => '2825179536350****',
                            ],
                            'codeSize' => [
                                'title' => '系统返回的function的code包大小，单位为byte Example : 1024',
                                'description' => '系统返回的函数代码包的大小，单位Byte。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '421',
                            ],
                            'createdTime' => [
                                'title' => 'function创建时间',
                                'description' => '函数的创建时间。',
                                'type' => 'string',
                                'example' => '2020-04-01T08:15:27Z',
                            ],
                            'description' => [
                                'title' => '函数描述',
                                'description' => '函数的描述。',
                                'type' => 'string',
                                'example' => 'test_description',
                            ],
                            'environmentVariables' => [
                                'title' => '为函数设置的环境变量，可以在函数中获取环境变量的值',
                                'description' => '为函数设置的环境变量，可以在函数中获取环境变量的值。更多信息，请参见[环境变量](~~69777~~)。',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'string',
                                    'description' => '环境变量配置。',
                                    'example' => '{"key":"value"}',
                                ],
                            ],
                            'functionId' => [
                                'title' => '系统为每个function生成的唯一ID',
                                'description' => '系统为每个函数生成的ID，全局唯一。',
                                'type' => 'string',
                                'example' => 'aa715851-1c20-4b89-a8fb-***',
                            ],
                            'functionName' => [
                                'title' => '函数名称',
                                'description' => '函数的名称。',
                                'type' => 'string',
                                'example' => 'function_name',
                            ],
                            'handler' => [
                                'title' => 'function的执行入口',
                                'description' => '函数执行的入口，更多信息，请参见[函数入口](~~157704~~)。',
                                'type' => 'string',
                                'example' => 'index.handler',
                            ],
                            'lastModifiedTime' => [
                                'title' => 'function上次修改时间',
                                'description' => '函数上一次被更新的时间。',
                                'type' => 'string',
                                'example' => '2020-04-01T08:15:27Z',
                            ],
                            'memorySize' => [
                                'title' => 'function的内存规格，单位为MB，为64MB的倍数',
                                'description' => '函数的内存规格，单位为MB，内存大小为64 MB的倍数。不同的函数实例类型，内存规格存在差异。更多信息，请参见[实例规格](~~179379~~)。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '256',
                            ],
                            'runtime' => [
                                'title' => 'function运行的语言环境，目前支持nodejs6, nodejs8, python2.7, python3, java8',
                                'description' => '函数运行的语言环境。当前支持**nodejs20**、**nodejs18**、**nodejs16**、**nodejs14**、**nodejs12**、**nodejs10**、**nodejs8**、**nodejs6**、**nodejs4.4**、**python3.10**、**python3.9**、**python3**、**python2.7**、**java11**、**java8**、**go1**、**php7.2**、**dotnetcore2.1**、**custom.debian10**、**custom**和**custom-container**。',
                                'type' => 'string',
                                'example' => 'python3',
                            ],
                            'timeout' => [
                                'title' => '运行的超时时间，单位为秒',
                                'description' => '函数运行的超时时间，单位为秒，默认60秒。最小1秒，最长10分钟。如果函数运行超过设置的时间，函数运行将被终止。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '60',
                            ],
                            'initializationTimeout' => [
                                'title' => '初始化function运行的超时时间，单位为秒，最小1秒，默认3秒。初始化function超过这个时间后会被终止执行',
                                'description' => '初始化函数运行的超时时间，单位为秒，默认3秒。最小1秒，最长5分钟。初始化函数超过这个时间后会被终止执行。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '60',
                            ],
                            'initializer' => [
                                'title' => '初始化 function 执行的入口，具体格式和语言相关',
                                'description' => '初始化函数执行的入口，具体格式与语言相关，更多信息，请参见[Initializer函数](~~157704~~)。',
                                'type' => 'string',
                                'example' => 'index.handler',
                            ],
                            'caPort' => [
                                'title' => '自定义、自定义容器运行时 HTTP Server 的监听端口',
                                'description' => 'Custom Runtime或Custom Container运行时HTTP Server的监听端口。'."\n",
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '9000',
                            ],
                            'customContainerConfig' => [
                                'description' => 'Custom Container运行时的相关配置，配置后函数可以使用自定义容器镜像执行函数。',
                                '$ref' => '#/components/schemas/CustomContainerConfigInfo',
                            ],
                            'layers' => [
                                'title' => '层列表',
                                'description' => '层的列表（ARN V1版本）。'."\n"
                                    ."\n"
                                    .'> 多个层会按照数组下标从大到小的顺序进行合并，下标小的层的内容会覆盖下标大的层的同名文件。'."\n"
                                    ."\n"
                                    .'><warning>该参数待废弃，请使用layersArnV2。></warning>',
                                'type' => 'array',
                                'items' => [
                                    'description' => '层资源的名称（ARN V1版本）。',
                                    'type' => 'string',
                                    'example' => '02f81d283888f5ec63442a88fe82b260#Layer-name#1',
                                ],
                            ],
                            'instanceConcurrency' => [
                                'description' => '单个函数实例的并发度。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'instanceSoftConcurrency' => [
                                'description' => '实例软并发度，用于优雅扩容。当实例上的并发数超过软并发度时，会触发实例扩容。例如，您的实例启动较慢，可以通过设置合适的软实例并发度，提前启动实例。'."\n"
                                    ."\n"
                                    .'取值小于或等于**instanceConcurrency**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '5',
                            ],
                            'instanceType' => [
                                'description' => '函数的实例类型，取值如下：'."\n"
                                    .'  * **e1**：弹性实例。'."\n"
                                    .'  * **c1**：性能实例。'."\n"
                                    .'*   **fc.gpu.tesla.1**: GPU实例Tesla系列T4卡型。'."\n"
                                    .'*   **fc.gpu.ampere.1**: GPU实例Ampere系列A10卡型。'."\n"
                                    .'*   **g1**: 同fc.gpu.tesla.1。',
                                'type' => 'string',
                                'example' => 'e1',
                            ],
                            'instanceLifecycleConfig' => [
                                'description' => '实例生命周期配置。',
                                '$ref' => '#/components/schemas/InstanceLifecycleConfig',
                            ],
                            'customDNS' => [
                                'title' => '函数自定义DNS配置',
                                'description' => '函数自定义DNS配置。',
                                '$ref' => '#/components/schemas/CustomDNS',
                            ],
                            'customRuntimeConfig' => [
                                'title' => 'Custom Runtime函数详细配置',
                                'description' => 'Custom Runtime函数详细配置。',
                                '$ref' => '#/components/schemas/CustomRuntimeConfig',
                            ],
                            'customHealthCheckConfig' => [
                                'title' => '函数自定义健康检查配置，仅适用于Custom runtime/container',
                                'description' => '函数自定义健康检查配置，仅适用于Custom Runtime和Custom Container。',
                                '$ref' => '#/components/schemas/CustomHealthCheckConfig',
                            ],
                            'layersArnV2' => [
                                'title' => '层的arn列表',
                                'description' => '层的列表（ARN V2版本）。'."\n"
                                    .'> 多个层会按照数组下标从大到小的顺序进行合并，下标小的层的内容会覆盖下标大的层的同名文件。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '层资源的名称（ARN V2版本）。',
                                    'type' => 'string',
                                    'example' => 'acs:fc:{region}:{accountID}:layers/{layerName}/versions/{layerVersion}',
                                ],
                            ],
                            'cpu' => [
                                'title' => 'function的CPU规格，单位为vCPU，为0.05vCPU的倍数',
                                'description' => '函数的CPU规格，单位为vCPU，为0.05 vCPU的倍数。',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '1.5',
                            ],
                            'diskSize' => [
                                'title' => 'function的磁盘规格，单位为MB，可选值为512MB或10240MB',
                                'description' => '函数的磁盘规格，单位为MB，可选值为512 MB或10240 MB。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '512',
                            ],
                            'gpuMemorySize' => [
                                'title' => 'function的GPU显存规格，单位为MB，为1024MB的倍数',
                                'description' => 'function的GPU显存规格，单位为MB，为1024MB的倍数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2048',
                            ],
                        ],
                    ],
                ],
                400 => [],
                403 => [],
                [],
                500 => [],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"codeChecksum\\": \\"2825179536350****\\",\\n  \\"codeSize\\": 421,\\n  \\"createdTime\\": \\"2020-04-01T08:15:27Z\\",\\n  \\"description\\": \\"test_description\\",\\n  \\"environmentVariables\\": {\\n    \\"key\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\"\\n  },\\n  \\"functionId\\": \\"aa715851-1c20-4b89-a8fb-***\\",\\n  \\"functionName\\": \\"function_name\\",\\n  \\"handler\\": \\"index.handler\\",\\n  \\"lastModifiedTime\\": \\"2020-04-01T08:15:27Z\\",\\n  \\"memorySize\\": 256,\\n  \\"runtime\\": \\"python3\\",\\n  \\"timeout\\": 60,\\n  \\"initializationTimeout\\": 60,\\n  \\"initializer\\": \\"index.handler\\",\\n  \\"caPort\\": 9000,\\n  \\"customContainerConfig\\": {\\n    \\"args\\": \\"[\\\\\\"-arg1\\\\\\", \\\\\\"value1\\\\\\"]\\",\\n    \\"command\\": \\"[\\\\\\"/code/myserver\\\\\\"]\\",\\n    \\"image\\": \\"registry-vpc.cn-hangzhou.aliyuncs.com/fc-demo/helloworld:v1beta1\\",\\n    \\"accelerationType\\": \\"Default\\",\\n    \\"accelerationInfo\\": {\\n      \\"status\\": \\"Preparing\\"\\n    },\\n    \\"instanceID\\": \\"cri-xxxxxxxxxx\\",\\n    \\"webServerMode\\": true\\n  },\\n  \\"layers\\": [\\n    \\"02f81d283888f5ec63442a88fe82b260#Layer-name#1\\"\\n  ],\\n  \\"instanceConcurrency\\": 10,\\n  \\"instanceSoftConcurrency\\": 5,\\n  \\"instanceType\\": \\"e1\\",\\n  \\"instanceLifecycleConfig\\": {\\n    \\"preFreeze\\": {\\n      \\"handler\\": \\"\\",\\n      \\"timeout\\": 0\\n    },\\n    \\"preStop\\": {\\n      \\"handler\\": \\"\\",\\n      \\"timeout\\": 0\\n    }\\n  },\\n  \\"customDNS\\": {\\n    \\"nameServers\\": [\\n      \\"8.8.8.8\\"\\n    ],\\n    \\"searches\\": [\\n      \\"ns1.svc.cluster-domain.example\\"\\n    ],\\n    \\"dnsOptions\\": [\\n      {\\n        \\"name\\": \\"ndots\\",\\n        \\"value\\": \\"2\\"\\n      }\\n    ]\\n  },\\n  \\"customRuntimeConfig\\": {\\n    \\"command\\": [\\n      \\"/code/myBootstrap\\"\\n    ],\\n    \\"args\\": [\\n      \\"args1\\"\\n    ]\\n  },\\n  \\"customHealthCheckConfig\\": {\\n    \\"httpGetUrl\\": \\"\\",\\n    \\"initialDelaySeconds\\": 0,\\n    \\"periodSeconds\\": 0,\\n    \\"timeoutSeconds\\": 0,\\n    \\"failureThreshold\\": 0,\\n    \\"successThreshold\\": 0\\n  },\\n  \\"layersArnV2\\": [\\n    \\"acs:fc:{region}:{accountID}:layers/{layerName}/versions/{layerVersion}\\"\\n  ],\\n  \\"cpu\\": 1.5,\\n  \\"diskSize\\": 512,\\n  \\"gpuMemorySize\\": 2048\\n}","errorExample":""},{"type":"xml","example":"<GetFunctionResponse>\\n    <codeChecksum>2825179536350****</codeChecksum>\\n    <codeSize>421</codeSize>\\n    <createdTime>2020-04-01T08:15:27Z</createdTime>\\n    <description>test_description</description>\\n    <functionId>aa715851-1c20-4b89-a8fb-***</functionId>\\n    <functionName>function_name</functionName>\\n    <handler>index.handler</handler>\\n    <lastModifiedTime>2020-04-01T08:15:27Z</lastModifiedTime>\\n    <memorySize>256</memorySize>\\n    <runtime>python3</runtime>\\n    <timeout>60</timeout>\\n    <initializationTimeout>60</initializationTimeout>\\n    <initializer>index.handler</initializer>\\n    <caPort>9000</caPort>\\n    <customContainerConfig>\\n        <args>[\\"-arg1\\", \\"value1\\"]</args>\\n        <command>[\\"/code/myserver\\"]</command>\\n        <image>registry-vpc.cn-hangzhou.aliyuncs.com/fc-demo/helloworld:v1beta1</image>\\n        <accelerationType>Default</accelerationType>\\n        <accelerationInfo>\\n            <status>Preparing</status>\\n        </accelerationInfo>\\n    </customContainerConfig>\\n    <layers>02f81d283888f5ec63442a88fe82b260#Layer-name#1</layers>\\n    <instanceLifecycleConfig>\\n        <preFreeze/>\\n        <preStop/>\\n    </instanceLifecycleConfig>\\n</GetFunctionResponse>","errorExample":""}]',
            'title' => '获取函数信息',
        ],
        'GetFunctionCode' => [
            'summary' => '获取函数代码包的详情。',
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/code',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'service名称',
                        'description' => '服务名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demoService',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'function名称',
                        'description' => '函数名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demoFunction',
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'service版本, 可以是versionId或者aliasName',
                        'description' => '服务的版本ID或者别名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demoQualifier',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '自定义请求ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rid281s******',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '响应结构体',
                        'description' => '响应结构体。',
                        'type' => 'object',
                        'properties' => [
                            'checksum' => [
                                'title' => 'function code包的CRC64值',
                                'description' => '函数代码包的CRC64值。',
                                'type' => 'string',
                                'example' => '1234567890',
                            ],
                            'url' => [
                                'title' => '获取function代码的URL',
                                'description' => '获取函数代码包的URL。',
                                'type' => 'string',
                                'example' => 'http://func-code.oss-cn-shanghai.aliyuncs.com/1a2b3c4d5e6f',
                            ],
                        ],
                    ],
                ],
                403 => [],
                [],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"checksum\\": \\"1234567890\\",\\n  \\"url\\": \\"http://func-code.oss-cn-shanghai.aliyuncs.com/1a2b3c4d5e6f\\"\\n}","type":"json"}]',
            'title' => '获取函数代码包',
        ],
        'ListFunctions' => [
            'summary' => '获取函数列表。',
            'path' => '/2021-04-06/services/{serviceName}/functions',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'service名称',
                        'description' => '服务名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demoService',
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'service版本, 可以是versionId或者aliasName',
                        'description' => '服务的版本ID或者别名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LATEST',
                    ],
                ],
                [
                    'name' => 'limit',
                    'in' => 'query',
                    'schema' => [
                        'title' => '限定此次返回资源的数量。如果不设定，默认返回20，最大不能超过100。返回结果可能小于指定的数量，但不会多于指定的数量',
                        'description' => '限定此次返回资源的数量。如果不设定，默认返回20，最大不能超过100。返回结果可能小于指定的数量，但不会多于指定的数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '用来返回更多结果。第一次查询不需要提供这个参数，后续查询的token从返回结果中获取',
                        'description' => '用来返回更多结果。第一次查询不需要提供这个参数，后续查询的Token从返回结果中获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '8bj81uI8n****',
                    ],
                ],
                [
                    'name' => 'prefix',
                    'in' => 'query',
                    'schema' => [
                        'title' => '限定返回的资源名称必须以prefix作为前缀',
                        'description' => '限定返回的资源名称必须以prefix作为前缀。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demoFunctionsPrefix',
                    ],
                ],
                [
                    'name' => 'startKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '设定结果从startKey之后（包括startKey）按字母排序的第一个开始返回',
                        'description' => '设定结果从startKey之后（包括startKey）按字母排序的第一个开始返回。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demoStartKey',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '自定义请求ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rid281s******',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ListFunctions Response',
                        'description' => '获取函数列表返回值。',
                        'type' => 'object',
                        'properties' => [
                            'functions' => [
                                'title' => '函数列表',
                                'description' => '函数列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '函数的定义。',
                                    'type' => 'object',
                                    'properties' => [
                                        'codeChecksum' => [
                                            'title' => 'function code包的CRC64值',
                                            'description' => '函数代码包的CRC64值。',
                                            'type' => 'string',
                                            'example' => '5434025278388143772',
                                        ],
                                        'codeSize' => [
                                            'title' => '系统返回的function的code包大小，单位为byte Example : 1024',
                                            'description' => '系统返回的函数代码包的大小，单位为Byte。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1024',
                                        ],
                                        'createdTime' => [
                                            'title' => 'function创建时间',
                                            'description' => '函数创建时间。',
                                            'type' => 'string',
                                            'example' => '2016-08-15T15:00:00.000+0000',
                                        ],
                                        'customContainerConfig' => [
                                            'description' => 'Custom Container运行的相关配置。',
                                            '$ref' => '#/components/schemas/CustomContainerConfig',
                                        ],
                                        'description' => [
                                            'title' => '函数描述',
                                            'description' => '函数描述。',
                                            'type' => 'string',
                                            'example' => 'This is a demo hello world function',
                                        ],
                                        'environmentVariables' => [
                                            'title' => '为函数设置的环境变量，可以在函数中获取环境变量的值',
                                            'description' => '为函数设置的环境变量，可以在函数中获取环境变量的值。',
                                            'type' => 'object',
                                            'additionalProperties' => [
                                                'type' => 'string',
                                                'example' => '{"key":"value"}',
                                                'description' => '环境变量配置。',
                                            ],
                                        ],
                                        'functionId' => [
                                            'title' => '系统为每个function生成的唯一ID',
                                            'description' => '系统为每个函数生成的唯一ID。',
                                            'type' => 'string',
                                            'example' => '2d28e0e9-9ba5-4eed-8b1a-d3d9cd24****',
                                        ],
                                        'functionName' => [
                                            'title' => '函数名称',
                                            'description' => '函数名称。',
                                            'type' => 'string',
                                            'example' => 'demo-function',
                                        ],
                                        'handler' => [
                                            'title' => 'function的执行入口',
                                            'description' => '函数的执行入口。',
                                            'type' => 'string',
                                            'example' => 'index.handler',
                                        ],
                                        'lastModifiedTime' => [
                                            'title' => 'function上次修改时间',
                                            'description' => '函数上次修改时间。',
                                            'type' => 'string',
                                            'example' => '2016-08-15T17:00:00.000+0000',
                                        ],
                                        'memorySize' => [
                                            'title' => 'function的内存规格，单位为MB，为64MB的倍数',
                                            'description' => '函数设置的内存大小，单位为MB。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '512',
                                        ],
                                        'runtime' => [
                                            'title' => 'function运行的语言环境，目前支持nodejs6, nodejs8, python2.7, python3, java8',
                                            'description' => '函数运行的语言环境。目前支持**nodejs16**、**nodejs14**、**nodejs12**、**nodejs10**、**nodejs8**、**nodejs6**、**nodejs4.4**、**python3.10**、**python3.9**、**python3**、**python2.7**、**java11**、**java8**、**go1**、**php7.2**、**dotnetcore3.1**、**dotnetcore2.1**、**custom.debian10**、**custom**和**custom-container**。更多信息，请参见[支持的函数运行环境列表](~~73338~~)。',
                                            'type' => 'string',
                                            'example' => 'python3.9',
                                        ],
                                        'timeout' => [
                                            'title' => '运行的超时时间，单位为秒',
                                            'description' => '函数运行的超时时间，单位为秒，默认60秒。最小1秒，最长10分钟。如果函数运行超过设置的时间，函数运行将被终止。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '10',
                                        ],
                                        'initializationTimeout' => [
                                            'title' => '初始化function运行的超时时间，单位为秒，最小1秒，默认3秒。初始化function超过这个时间后会被终止执行',
                                            'description' => '初始化函数运行的超时时间，单位为秒，默认3秒。最小1秒，最长5分钟。初始化函数超过这个时间后会被终止执行。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '60',
                                        ],
                                        'initializer' => [
                                            'title' => '初始化 function 执行的入口，具体格式和语言相关',
                                            'description' => '初始化函数执行的入口，具体格式与语言相关，更多信息，请参见[Initializer函数](~~157704~~)。',
                                            'type' => 'string',
                                            'example' => 'index.handler',
                                        ],
                                        'caPort' => [
                                            'title' => '自定义、自定义容器运行时 HTTP Server 的监听端口',
                                            'description' => '自定义、自定义容器运行时HTTP Server的监听端口。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '9000',
                                        ],
                                        'instanceConcurrency' => [
                                            'description' => '单个函数实例的并发度。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '10',
                                        ],
                                        'instanceSoftConcurrency' => [
                                            'description' => '实例软并发度，用于优雅扩容。当实例上的并发数超过软并发度时，会触发实例扩容。例如，您的实例启动较慢，可以通过设置合适的软实例并发度，提前启动实例。'."\n"
                                                ."\n"
                                                .'取值小于或等于**instanceConcurrency**。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '5',
                                        ],
                                        'instanceType' => [
                                            'description' => '函数的实例类型，取值如下：'."\n"
                                                .'  * **e1**：弹性实例。'."\n"
                                                .'  * **c1**：性能实例。'."\n"
                                                .'*   **fc.gpu.tesla.1**: GPU实例Tesla系列T4卡型。'."\n"
                                                .'*   **fc.gpu.ampere.1**: GPU实例Ampere系列A10卡型。'."\n"
                                                .'*   **g1**: 同fc.gpu.tesla.1。',
                                            'type' => 'string',
                                            'example' => 'e1',
                                        ],
                                        'layers' => [
                                            'description' => '层的列表。'."\n"
                                                .'> 多个层会按照数组下标从大到小的顺序进行合并，下标小的层的内容会覆盖下标大的层的同名文件。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '层资源的名称。',
                                                'type' => 'string',
                                                'example' => '02f81d283888f5ec63442a88fe82b260#Layer-name#1',
                                            ],
                                        ],
                                        'layersArnV2' => [
                                            'title' => '层的arn列表',
                                            'description' => '层的arn列表',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'string',
                                                'example' => 'acs:fc:cn-hangzhou:official:layers/Python310/versions/2',
                                            ],
                                        ],
                                        'instanceLifecycleConfig' => [
                                            'description' => '实例生命周期配置。',
                                            '$ref' => '#/components/schemas/InstanceLifecycleConfig',
                                        ],
                                        'customDNS' => [
                                            'title' => '函数自定义DNS配置',
                                            'description' => '函数自定义DNS配置',
                                            '$ref' => '#/components/schemas/CustomDNS',
                                        ],
                                        'customRuntimeConfig' => [
                                            'title' => 'Custom Runtime函数详细配置',
                                            'description' => 'Custom Runtime函数详细配置',
                                            '$ref' => '#/components/schemas/CustomRuntimeConfig',
                                        ],
                                        'customHealthCheckConfig' => [
                                            'description' => '函数自定义健康检查配置，仅适用于Custom Runtime和Custom Container。',
                                            '$ref' => '#/components/schemas/CustomHealthCheckConfig',
                                        ],
                                        'cpu' => [
                                            'title' => 'function的CPU规格，单位为vCPU，为0.05vCPU的倍数',
                                            'description' => '函数的CPU规格，单位为vCPU，为0.05 vCPU的倍数。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '1.5',
                                        ],
                                        'diskSize' => [
                                            'title' => 'function的磁盘规格，单位为MB，可选值为512MB或10240MB',
                                            'description' => '函数的磁盘规格，单位为MB，可选值为512 MB或10240 MB。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '512',
                                        ],
                                        'gpuMemorySize' => [
                                            'title' => 'function的GPU显存规格，单位为MB，为1024MB的倍数',
                                            'description' => 'function的GPU显存规格，单位为MB，为1024MB的倍数',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2048',
                                        ],
                                    ],
                                ],
                            ],
                            'nextToken' => [
                                'title' => '用来返回更多的查询结果。如果这个值没有返回，则说明没有更多结果',
                                'description' => '用来返回更多的查询结果。如果这个值没有返回，则说明没有更多结果。',
                                'type' => 'string',
                                'example' => '8bj81uI8n****',
                            ],
                        ],
                    ],
                ],
                400 => [],
                403 => [],
                [],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"functions\\": [\\n    {\\n      \\"codeChecksum\\": \\"5434025278388143772\\",\\n      \\"codeSize\\": 1024,\\n      \\"createdTime\\": \\"2016-08-15T15:00:00.000+0000\\",\\n      \\"customContainerConfig\\": {\\n        \\"args\\": \\"[\\\\\\"-arg1\\\\\\", \\\\\\"value1\\\\\\"]\\",\\n        \\"command\\": \\"[\\\\\\"/code/myserver\\\\\\"]\\",\\n        \\"image\\": \\"registry-vpc.cn-hangzhou.aliyuncs.com/fc-demo/helloworld:v1beta1\\",\\n        \\"accelerationType\\": \\"Default\\",\\n        \\"instanceID\\": \\"cri-xxxxxxxxxx\\",\\n        \\"webServerMode\\": true\\n      },\\n      \\"description\\": \\"This is a demo hello world function\\",\\n      \\"environmentVariables\\": {\\n        \\"key\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\"\\n      },\\n      \\"functionId\\": \\"2d28e0e9-9ba5-4eed-8b1a-d3d9cd24****\\",\\n      \\"functionName\\": \\"demo-function\\",\\n      \\"handler\\": \\"index.handler\\",\\n      \\"lastModifiedTime\\": \\"2016-08-15T17:00:00.000+0000\\",\\n      \\"memorySize\\": 512,\\n      \\"runtime\\": \\"python3.9\\",\\n      \\"timeout\\": 10,\\n      \\"initializationTimeout\\": 60,\\n      \\"initializer\\": \\"index.handler\\",\\n      \\"caPort\\": 9000,\\n      \\"instanceConcurrency\\": 10,\\n      \\"instanceSoftConcurrency\\": 5,\\n      \\"instanceType\\": \\"e1\\",\\n      \\"layers\\": [\\n        \\"02f81d283888f5ec63442a88fe82b260#Layer-name#1\\"\\n      ],\\n      \\"layersArnV2\\": [\\n        \\"acs:fc:cn-hangzhou:official:layers/Python310/versions/2\\"\\n      ],\\n      \\"instanceLifecycleConfig\\": {\\n        \\"preFreeze\\": {\\n          \\"handler\\": \\"\\",\\n          \\"timeout\\": 0\\n        },\\n        \\"preStop\\": {\\n          \\"handler\\": \\"\\",\\n          \\"timeout\\": 0\\n        }\\n      },\\n      \\"customDNS\\": {\\n        \\"nameServers\\": [\\n          \\"8.8.8.8\\"\\n        ],\\n        \\"searches\\": [\\n          \\"ns1.svc.cluster-domain.example\\"\\n        ],\\n        \\"dnsOptions\\": [\\n          {\\n            \\"name\\": \\"ndots\\",\\n            \\"value\\": \\"2\\"\\n          }\\n        ]\\n      },\\n      \\"customRuntimeConfig\\": {\\n        \\"command\\": [\\n          \\"/code/myBootstrap\\"\\n        ],\\n        \\"args\\": [\\n          \\"args1\\"\\n        ]\\n      },\\n      \\"customHealthCheckConfig\\": {\\n        \\"httpGetUrl\\": \\"\\",\\n        \\"initialDelaySeconds\\": 0,\\n        \\"periodSeconds\\": 0,\\n        \\"timeoutSeconds\\": 0,\\n        \\"failureThreshold\\": 0,\\n        \\"successThreshold\\": 0\\n      },\\n      \\"cpu\\": 1.5,\\n      \\"diskSize\\": 512,\\n      \\"gpuMemorySize\\": 2048\\n    }\\n  ],\\n  \\"nextToken\\": \\"8bj81uI8n****\\"\\n}","type":"json"}]',
            'title' => '获取函数列表信息',
        ],
        'InvokeFunction' => [
            'summary' => '调用执行函数。',
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/invocations',
            'methods' => [
                'post',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'X-Fc-Invocation-Type',
                    'in' => 'header',
                    'schema' => [
                        'title' => '调用方式:Sync或者Async，默认值：Sync',
                        'description' => '调用方式。取值说明如下：'."\n"
                            ."\n"
                            .'- **Sync**：同步调用。'."\n"
                            .'- **Async**：异步调用。'."\n"
                            ."\n"
                            .'默认值：同步调用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Sync',
                    ],
                ],
                [
                    'name' => 'X-Fc-Log-Type',
                    'in' => 'header',
                    'schema' => [
                        'title' => '请求返回日志类型, Tail 为返回函数日志最后 4KB 数据，None 或空值则返回不带有日志，默认为 None',
                        'description' => '请求返回日志。'."\n"
                            ."\n"
                            .'- **Tail**：返回当前请求产生的最后4 KB日志。'."\n"
                            .'- **None**：默认值，不返回请求日志。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'None',
                    ],
                ],
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'service名称',
                        'description' => '服务名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demoService',
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'service版本, 可以是versionId或者aliasName',
                        'description' => '服务的版本ID或者别名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demoQualifier',
                        'default' => 'LATEST',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'function名称',
                        'description' => '函数名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demoFunction',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'title' => '事件（event），binary type。函数计算服务将event传递给用户function来处理',
                        'description' => '事件（event），类型为binary。函数计算服务将事件传递给用户的函数来处理。',
                        'type' => 'string',
                        'format' => 'byte',
                        'required' => false,
                        'example' => '{"key":"value"}',
                    ],
                ],
                [
                    'name' => 'X-Fc-Stateful-Async-Invocation-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '异步任务ID。您需要事先开启异步任务。'."\n"
                            .'> 建议您在使用SDK调用时设置与业务相关的ID，方便对相关执行进行后续操作。例如，一个视频处理函数可以使用视频文件名作为调用ID，通过该ID可以查看视频是否处理完成或终止视频的处理。该ID的命名规则只能以英文大小写字母或下划线（\\_）开头，由英文大小写字母、数字（0-9）、下划线（\\_）及短划线（-）组成，不超过128个字符。如果您未设置异步调用的ID，系统则会自动生成一个ID。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test-invoke-id',
                    ],
                ],
                [
                    'name' => 'X-Fc-Stateful-Async-Invocation-Enable',
                    'in' => 'header',
                    'schema' => [
                        'description' => '请求级别异步任务开关。取值说明如下：'."\n"
                            ."\n"
                            .'- **true**：开启本次异步调用为异步任务。'."\n"
                            .'- **false**：默认值。'."\n"
                            ."\n"
                            .'> 本参数仅面向异步调用，对异步调用生效，同步调用不生效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '调用函数的ID，与返回参数**requestId**对应。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test-trace-id',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [
                        'X-Fc-Error-Type' => [
                            'schema' => [
                                'title' => '调用function的错误类型，分为HandledInvocationError和UnhandledInvocationError两种',
                                'type' => 'string',
                                'example' => 'UnhandledInvocationError',
                            ],
                        ],
                        'X-Fc-Log-Result' => [
                            'schema' => [
                                'title' => '调用function产生的日志Tail结果',
                                'type' => 'string',
                                'example' => 'demo log result',
                            ],
                        ],
                        'X-Fc-Code-Checksum' => [
                            'schema' => [
                                'title' => '代码校验',
                                'type' => 'string',
                                'example' => '5697641582914695457',
                            ],
                        ],
                        'X-Fc-Invocation-Duration' => [
                            'schema' => [
                                'title' => '本次函数执行的时间，单位是毫秒',
                                'type' => 'number',
                            ],
                        ],
                        'X-Fc-Max-Memory-Usage' => [
                            'schema' => [
                                'title' => '本次函数执行消耗的最大内存，单位是MB',
                                'type' => 'number',
                            ],
                        ],
                    ],
                    'schema' => [
                        'title' => 'InvokeResponse',
                        'description' => '请求返回值。',
                        'type' => 'string',
                        'format' => 'byte',
                        'example' => 'hello world',
                    ],
                ],
                202 => [],
                403 => [],
                [],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"\\"hello world\\"","type":"json"}]',
            'title' => '调用函数',
        ],
        'PutFunctionAsyncInvokeConfig' => [
            'summary' => '创建或更新函数的异步调用配置。',
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/async-invoke-config',
            'methods' => [
                'put',
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
            ],
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '服务名称',
                        'description' => '服务名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-service',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'helloworld',
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'schema' => [
                        'title' => '别名或版本',
                        'description' => '服务的版本或别名。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [],
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '异步调用配置',
                        'description' => '异步调用配置。',
                        'type' => 'object',
                        'properties' => [
                            'destinationConfig' => [
                                'description' => '异步调用目标的配置结构体。',
                                'required' => false,
                                '$ref' => '#/components/schemas/DestinationConfig',
                            ],
                            'maxAsyncEventAgeInSeconds' => [
                                'title' => '消息最大存活时长',
                                'description' => '消息最大存活时长，取值范围\\[1,604800]，默认为 86400，单位为秒。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '300',
                            ],
                            'maxAsyncRetryAttempts' => [
                                'title' => '异步调用失败后的最大重试次数',
                                'description' => '异步调用失败后的最大重试次数，非必填。取值范围\\[0,8]。当您未进行配置时，系统内部默认重试次数为3。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '3',
                            ],
                            'statefulInvocation' => [
                                'description' => '是否开启异步任务。'."\n"
                                    ."\n"
                                    .'- **true**：表示已开启异步任务。'."\n"
                                    .'- **false**：表示未开启异步任务。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数计算调用请求的调用链ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ksdfjkdmkki***',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '异步调用配置',
                        'description' => '异步调用配置。',
                        'type' => 'object',
                        'properties' => [
                            'createdTime' => [
                                'title' => '创建时间',
                                'description' => '创建时间。',
                                'type' => 'string',
                                'example' => '2020-09-10T02:45:02Z',
                            ],
                            'destinationConfig' => [
                                'description' => '异步调用目标的配置结构体。',
                                'example' => ' {"onSuccess": null,"onFailure": {"destination": "acs:mns:cn-shanghai:123:/queues/xxx/messages"}}',
                                '$ref' => '#/components/schemas/DestinationConfig',
                            ],
                            'function' => [
                                'title' => '函数名称',
                                'description' => '函数名称。',
                                'type' => 'string',
                                'example' => 'helloworld',
                            ],
                            'lastModifiedTime' => [
                                'title' => '最后更改时间',
                                'description' => '最后更改时间。',
                                'type' => 'string',
                                'example' => '2020-09-10T02:45:02Z',
                            ],
                            'maxAsyncEventAgeInSeconds' => [
                                'title' => '消息最大存活时长',
                                'description' => '消息最大存活时长。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '300',
                            ],
                            'maxAsyncRetryAttempts' => [
                                'title' => '异步调用失败后的最大重试次数',
                                'description' => '异步调用失败后的最大重试次数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '3',
                            ],
                            'qualifier' => [
                                'title' => '限定符',
                                'description' => '服务的版本或别名。',
                                'type' => 'string',
                                'example' => 'test',
                            ],
                            'service' => [
                                'title' => '服务名称',
                                'description' => '服务名称。',
                                'type' => 'string',
                                'example' => 'demo-service',
                            ],
                            'statefulInvocation' => [
                                'description' => '是否开启异步任务。'."\n"
                                    ."\n"
                                    .'- **true**：表示已开启异步任务。'."\n"
                                    .'- **false**：表示未开启异步任务。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                400 => [],
                403 => [],
                [],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"createdTime\\": \\"2020-09-10T02:45:02Z\\",\\n  \\"destinationConfig\\": {\\n    \\"onSuccess\\": {\\n      \\"destination\\": \\"\\"\\n    },\\n    \\"onFailure\\": {\\n      \\"destination\\": \\"\\"\\n    }\\n  },\\n  \\"function\\": \\"helloworld\\",\\n  \\"lastModifiedTime\\": \\"2020-09-10T02:45:02Z\\",\\n  \\"maxAsyncEventAgeInSeconds\\": 300,\\n  \\"maxAsyncRetryAttempts\\": 3,\\n  \\"qualifier\\": \\"test\\",\\n  \\"service\\": \\"demo-service\\",\\n  \\"statefulInvocation\\": true\\n}","type":"json"}]',
            'title' => '配置函数异步请求配置',
            'description' => '配置中的StatefulAsyncInvocation即为异步任务的配置项。异步任务在普通的异步调用基础上增加了状态管理的功能，更适用于各类任务场景。',
        ],
        'DeleteFunctionAsyncInvokeConfig' => [
            'summary' => '删除异步调用配置。',
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/async-invoke-config',
            'methods' => [
                'delete',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '服务名称',
                        'description' => '服务名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-service',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'helloworld',
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'schema' => [
                        'title' => '限定符',
                        'description' => '服务的版本或别名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数计算调用请求的调用链ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'asdf*****',
                    ],
                ],
            ],
            'responses' => [
                204 => [],
                400 => [],
                403 => [],
                [],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '删除异步函数配置',
        ],
        'GetFunctionAsyncInvokeConfig' => [
            'summary' => '获取一个服务下某个函数的异步调用配置。',
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/async-invoke-config',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '服务名称',
                        'description' => '服务名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-service',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'helloworld',
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'schema' => [
                        'title' => '限定符',
                        'description' => '服务的版本或别名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数计算调用时间，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Sat, 14 Jul 2017 07:02:38 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数计算调用请求的调用链ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'asdf****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '异步调用配置',
                        'description' => '异步调用配置。',
                        'type' => 'object',
                        'properties' => [
                            'createdTime' => [
                                'title' => '创建时间',
                                'description' => '创建时间。',
                                'type' => 'string',
                                'example' => '2020-09-10T02:45:02Z',
                            ],
                            'destinationConfig' => [
                                'description' => '异步调用目标的配置结构体。',
                                'example' => ' {"onSuccess": null,"onFailure": {"destination": "acs:mns:cn-shanghai:123:/queues/xxx/messages"}}',
                                '$ref' => '#/components/schemas/DestinationConfig',
                            ],
                            'function' => [
                                'title' => '函数名称',
                                'description' => '函数名称。',
                                'type' => 'string',
                                'example' => 'helloworld',
                            ],
                            'lastModifiedTime' => [
                                'title' => '最后更改时间',
                                'description' => '最后更改时间。',
                                'type' => 'string',
                                'example' => '2020-09-10T02:45:02Z',
                            ],
                            'maxAsyncEventAgeInSeconds' => [
                                'title' => '消息最大存活时长',
                                'description' => '消息最大存活时长。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '300',
                            ],
                            'maxAsyncRetryAttempts' => [
                                'title' => '异步调用失败后的最大重试次数',
                                'description' => '异步调用失败后的最大重试次数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '3',
                            ],
                            'qualifier' => [
                                'title' => '限定符',
                                'description' => '服务的版本或别名。',
                                'type' => 'string',
                                'example' => 'test',
                            ],
                            'service' => [
                                'title' => '服务名称',
                                'description' => '服务名称。',
                                'type' => 'string',
                                'example' => 'demo-service',
                            ],
                            'statefulInvocation' => [
                                'description' => '是否开启异步任务。'."\n"
                                    ."\n"
                                    .'- **true**：表示已开启异步任务。'."\n"
                                    .'- **false**：表示未开启异步任务。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                400 => [],
                403 => [],
                [],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"createdTime\\": \\"2020-09-10T02:45:02Z\\",\\n  \\"destinationConfig\\": {\\n    \\"onSuccess\\": {\\n      \\"destination\\": \\"\\"\\n    },\\n    \\"onFailure\\": {\\n      \\"destination\\": \\"\\"\\n    }\\n  },\\n  \\"function\\": \\"helloworld\\",\\n  \\"lastModifiedTime\\": \\"2020-09-10T02:45:02Z\\",\\n  \\"maxAsyncEventAgeInSeconds\\": 300,\\n  \\"maxAsyncRetryAttempts\\": 3,\\n  \\"qualifier\\": \\"test\\",\\n  \\"service\\": \\"demo-service\\",\\n  \\"statefulInvocation\\": true\\n}","type":"json"}]',
            'title' => '获取函数异步配置',
            'description' => '配置中的StatefulAsyncInvocation即为异步任务的配置项。当StatefulAsyncInvocation取值为true时，代表您已开启异步任务，所有的异步调用将变为异步任务模式。',
        ],
        'ListFunctionAsyncInvokeConfigs' => [
            'summary' => '查询一个服务下某个函数的所有异步配置。当配置个数超过limit个数时，将返回nexttoken参数。可以使用该参数进行后续的分页查询。',
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/async-invoke-configs',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '服务名称',
                        'description' => '服务名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-service',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'helloworld',
                    ],
                ],
                [
                    'name' => 'limit',
                    'in' => 'query',
                    'schema' => [
                        'title' => '最多返回个数',
                        'description' => '最多返回个数。 如果不设定，默认返回20，最大不能超过100。返回结果可以小于指定的数量，但不会多于指定的数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '下次查询token',
                        'description' => '用来返回更多结果。第一次查询不需要提供这个参数，后续查询的Token从返回结果中获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '8bj81uI8n****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Code-Checksum',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数代码包的CRC-64值，用于校验完整性。应当由工具自动计算。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1506052139770049xxxx',
                    ],
                ],
                [
                    'name' => 'X-Fc-Log-Type',
                    'in' => 'header',
                    'schema' => [
                        'description' => '请求返回日志。'."\n"
                            ."\n"
                            .'- **Tail**：返回当前请求产生的最后4 KB日志。'."\n"
                            .'- **None**：默认值，不返回请求日志。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Tail',
                    ],
                ],
                [
                    'name' => 'X-Fc-Invocation-Type',
                    'in' => 'header',
                    'schema' => [
                        'description' => '调用方式。'."\n"
                            ."\n"
                            .'- **Sync**：同步调用。'."\n"
                            .'- **Async**：异步调用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Async',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数计算调用时间，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Sat, 14 Jul 2017 07:02:38 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数计算调用请求的调用链ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'asdf****',
                    ],
                ],
                [
                    'name' => 'AccountID',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'deprecated' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '查询异步配置响应',
                        'description' => '查询异步配置结果结构体。',
                        'type' => 'object',
                        'properties' => [
                            'configs' => [
                                'title' => '异步配置列表',
                                'description' => '异步配置列表。',
                                'type' => 'array',
                                'items' => [
                                    'title' => '异步调用配置',
                                    'description' => '异步调用配置。',
                                    'type' => 'object',
                                    'properties' => [
                                        'createdTime' => [
                                            'title' => '创建时间',
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2020-09-10T02:45:02Z',
                                        ],
                                        'destinationConfig' => [
                                            'description' => '异步调用目标的配置结构体。如果您未进行配置，则该项为空值（Null）。',
                                            'example' => ' {"onSuccess": null,"onFailure": {"destination": "acs:mns:cn-shanghai:123:/queues/xxx/messages"}}',
                                            '$ref' => '#/components/schemas/DestinationConfig',
                                        ],
                                        'function' => [
                                            'title' => '函数名称',
                                            'description' => '函数名称。',
                                            'type' => 'string',
                                            'example' => 'helloworld',
                                        ],
                                        'lastModifiedTime' => [
                                            'title' => '最后更改时间',
                                            'description' => '最后更改时间。',
                                            'type' => 'string',
                                            'example' => '2020-09-10T02:45:02Z',
                                        ],
                                        'maxAsyncEventAgeInSeconds' => [
                                            'title' => '消息最大存活时长',
                                            'description' => '消息最大存活时长。如果您未进行配置，则该项为空值（Null）。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '300',
                                        ],
                                        'maxAsyncRetryAttempts' => [
                                            'title' => '异步调用失败后的最大重试次数',
                                            'description' => '异步调用失败后的最大重试次数。如果您未进行配置，则该项为空值（Null）。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '3',
                                        ],
                                        'qualifier' => [
                                            'title' => '限定符',
                                            'description' => '服务所属版本或别名。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'service' => [
                                            'title' => '服务名称',
                                            'description' => '服务名称。',
                                            'type' => 'string',
                                            'example' => 'demo-service',
                                        ],
                                        'statefulInvocation' => [
                                            'description' => '是否开启异步任务。'."\n"
                                                ."\n"
                                                .'- **true**：表示已开启异步任务。'."\n"
                                                .'- **false**：表示未开启异步任务。  '."\n"
                                                ."\n"
                                                .'如果您未进行配置，则该项为空值（Null）。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                    ],
                                ],
                            ],
                            'nextToken' => [
                                'title' => '下次查询token',
                                'description' => '下次查询Token。',
                                'type' => 'string',
                                'example' => 'caeba0be03****f84eb48b699f0a4883',
                            ],
                        ],
                    ],
                ],
                400 => [],
                403 => [],
                [],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"configs\\": [\\n    {\\n      \\"createdTime\\": \\"2020-09-10T02:45:02Z\\",\\n      \\"destinationConfig\\": {\\n        \\"onSuccess\\": {\\n          \\"destination\\": \\"\\"\\n        },\\n        \\"onFailure\\": {\\n          \\"destination\\": \\"\\"\\n        }\\n      },\\n      \\"function\\": \\"helloworld\\",\\n      \\"lastModifiedTime\\": \\"2020-09-10T02:45:02Z\\",\\n      \\"maxAsyncEventAgeInSeconds\\": 300,\\n      \\"maxAsyncRetryAttempts\\": 3,\\n      \\"qualifier\\": \\"test\\",\\n      \\"service\\": \\"demo-service\\",\\n      \\"statefulInvocation\\": true\\n    }\\n  ],\\n  \\"nextToken\\": \\"caeba0be03****f84eb48b699f0a4883\\"\\n}","type":"json"}]',
            'title' => '获取函数异步配置列表',
            'description' => '配置中的StatefulAsyncInvocation即为异步任务的配置项。当StatefulAsyncInvocation取值为true时，代表您已开启异步任务。该配置所对应应函数的所有的异步调用将变为异步任务模式。',
        ],
        'DeleteFunctionOnDemandConfig' => [
            'summary' => '删除函数并发度配置。',
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/on-demand-config',
            'methods' => [
                'delete',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '服务名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'service_Name',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '函数的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-function',
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'schema' => [
                        'title' => '服务别名或LATEST，不支持版本。',
                        'description' => '服务别名或LATEST，不支持版本。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'prod',
                    ],
                ],
                [
                    'name' => 'If-Match',
                    'in' => 'header',
                    'schema' => [
                        'description' => '如果传入的ETag和Object的ETag匹配，则正常传输Object，并返回200 OK；如果传入的ETag和Object的ETag不匹配，则返回412 Precondition Failed。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'e19d5cd5af0378da05f63f891c7467af',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '调用链ID，链路请求的唯一标识。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'r9s89isisi****',
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '删除函数按量配置',
        ],
        'GetFunctionOnDemandConfig' => [
            'summary' => '获取函数的按量配置。',
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/on-demand-config',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '服务的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-service',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '函数的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demoFunction',
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务别名或LATEST，不支持版本。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'prod',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '调用链ID，链路请求的唯一标识。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'asdf****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [
                        'ETag' => [
                            'schema' => [
                                'title' => '当前按量配置的标识，用于修改时提供条件校验(If-Match)，若传入的ETag与实际的不一致，则返回412 PreconditionFailed错误。',
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回的body。',
                        'type' => 'object',
                        'properties' => [
                            'resource' => [
                                'title' => 'Id of the request',
                                'description' => '资源描述。',
                                'type' => 'string',
                                'example' => '12345#servierName#qualifier#functionName',
                            ],
                            'maximumInstanceCount' => [
                                'description' => '最大实例数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"resource\\": \\"12345#servierName#qualifier#functionName\\",\\n  \\"maximumInstanceCount\\": 10\\n}","type":"json"}]',
            'title' => '获取函数的按量配置',
        ],
        'ListOnDemandConfigs' => [
            'summary' => '获取函数的按量配置列表信息。',
            'path' => '/2021-04-06/on-demand-configs',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'prefix',
                    'in' => 'query',
                    'schema' => [
                        'title' => '限定返回的资源名称，名称必须以Prefix作为前缀，例如Prefix是a，则返回的资源名均是以a开始的。',
                        'description' => '限定返回的资源名称，名称必须以Prefix作为前缀，例如Prefix是a，则返回的资源名均是以a开始的。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'prefix_text',
                    ],
                ],
                [
                    'name' => 'startKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '设定结果从startKey之后（包括startKey）按字母排序的第一个开始返回。',
                        'description' => '设定结果从startKey之后（包括startKey）按字母排序的第一个开始返回。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'nextservice',
                    ],
                ],
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '用来返回更多结果。第一次查询不需要提供这个参数，后续查询的Token从返回结果中获取。',
                        'description' => '用来返回更多结果。第一次查询不需要提供这个参数，后续查询的Token从返回结果中获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '8bj81uI8n****',
                    ],
                ],
                [
                    'name' => 'limit',
                    'in' => 'query',
                    'schema' => [
                        'title' => '限定此次返回资源的数量。如果不设定，默认返回20，最大不能超过100。返回结果可以小于指定的数量，但不会多于指定的数量。',
                        'description' => '限定此次返回资源的数量。如果不设定，默认返回20，最大不能超过100。返回结果可以小于指定的数量，但不会多于指定的数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数计算调用请求的调用链ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rid281s******',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回的body。',
                        'type' => 'object',
                        'properties' => [
                            'configs' => [
                                'title' => '预留实例配置',
                                'description' => '按量实例配置。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '配置参数。',
                                    'example' => '[{\'maximumInstanceCount\': 10, \'resource\': \'services/serviceName-bb7f36eb-7f1b-4c42-8f64-401b32ecbf31.aliasName/functions/functionName\'}]',
                                    '$ref' => '#/components/schemas/OnDemandConfig',
                                ],
                            ],
                            'nextToken' => [
                                'title' => '用来返回更多的查询结果。如果这个值没有返回，则说明没有更多结果。',
                                'description' => '用来返回更多的查询结果。如果这个值没有返回，则说明没有更多结果。',
                                'type' => 'string',
                                'example' => 'next_token',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"configs\\": [\\n    {\\n      \\"resource\\": \\"services/serviceName/function/functionName\\",\\n      \\"maximumInstanceCount\\": 10\\n    }\\n  ],\\n  \\"nextToken\\": \\"next_token\\"\\n}","type":"json"}]',
            'title' => '获取函数按量配置列表信息',
        ],
        'PutFunctionOnDemandConfig' => [
            'summary' => '创建函数规则。',
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/on-demand-config',
            'methods' => [
                'put',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '服务名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-service',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '函数的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-function',
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务别名或LATEST，不支持版本。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'prod',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求body参数。',
                        'type' => 'object',
                        'properties' => [
                            'maximumInstanceCount' => [
                                'description' => '按量实例的上限值。具体信息，请参见[实例伸缩限制](~~185038~~)。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                                'example' => '10',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'If-Match',
                    'in' => 'header',
                    'schema' => [
                        'description' => '如果传入的ETag和Object的ETag匹配，则正常传输Object，并返回200 OK；如果传入的ETag和Object的ETag不匹配，则返回412 Precondition Failed。 ',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'e19d5cd5af0378da05f63f891c7467af',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '调用链ID，链路请求的唯一标识。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'r9s89isisi****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [
                        'ETag' => [
                            'schema' => [
                                'title' => '当前按量配置的标识，用于修改时提供条件校验(If-Match)，若传入的ETag与实际的不一致，则返回412 PreconditionFailed错误。',
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回的body。',
                        'type' => 'object',
                        'properties' => [
                            'resource' => [
                                'description' => '资源描述。',
                                'type' => 'string',
                                'example' => '12345#servierName#qualifier#functionName',
                            ],
                            'maximumInstanceCount' => [
                                'description' => '最大实例数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"resource\\": \\"12345#servierName#qualifier#functionName\\",\\n  \\"maximumInstanceCount\\": 10\\n}","type":"json"}]',
            'title' => '配置函数的按量配置',
        ],
        'GetProvisionConfig' => [
            'summary' => '获取预留配置。',
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/provision-config',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '服务名称',
                        'description' => '服务名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demoService',
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '别名名称',
                        'description' => '别名名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'prod',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demoFunction',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数计算调用请求的调用链ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rid281s******',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [
                        'ETag' => [
                            'schema' => [
                                'title' => 'provision config etag， 以确保实际更改的 provision config 和期望更改的 provision config 是一致的',
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'schema' => [
                        'title' => 'provisionConfigResponse',
                        'description' => '函数预留配置。',
                        'type' => 'object',
                        'properties' => [
                            'resource' => [
                                'title' => '资源描述',
                                'description' => '资源描述。',
                                'type' => 'string',
                                'example' => '12345#servierName#qualifier#functionName',
                            ],
                            'target' => [
                                'title' => '目标资源个数',
                                'description' => '目标资源个数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '5',
                            ],
                            'current' => [
                                'title' => '实际资源个数',
                                'description' => '实际资源个数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'scheduledActions' => [
                                'title' => '定时策略配置',
                                'description' => '定时策略配置。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '定时伸缩策略：通过定时伸缩策略您可以更加灵活地配置预留的函数实例，在指定时间将预留的函数实例量设定成需要的值，使函数实例量更好地贴合业务的并发量。',
                                    'example' => '[     {         "Name":"action_1",         "StartTime":"2020-11-01T10:00:00Z",         "EndTime":"2020-11-30T10:00:00Z",         "TargetValue":50,         "ScheduleExpression":"cron(0 0 20 * * *)"     },     {         "Name":"action_2",         "StartTime":"2020-11-01T10:00:00Z",         "EndTime":"2020-11-30T10:00:00Z",         "TargetValue":10,         "ScheduleExpression":"cron(0 0 22 * * *)"     } ]',
                                    '$ref' => '#/components/schemas/ScheduledActions',
                                ],
                            ],
                            'targetTrackingPolicies' => [
                                'title' => '指标追踪伸缩策略配置',
                                'description' => '指标追踪伸缩策略配置。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '指标伸缩策略：根据函数实例并发利用率的情况每分钟对预留资源进行一次伸缩。'."\n"
                                        ."\n"
                                        .'- 当指标超过追踪值metricTarget时，开始以积极的策略扩容预留模式的函数实例量，以使得指标值恢复到追踪值metricTarget附近。'."\n"
                                        .'- 当指标低于追踪值metricTarget时，开始以保守的策略缩容预留模式的函数实例量，以使得指标值逐渐恢复到追踪值metricTarget附近。'."\n"
                                        ."\n"
                                        .'当您在系统中设置了伸缩最大值和最小值，此时预留的函数实例量会在最大值与最小值之间进行伸缩，超出最大值时将停止扩容，低于最小值时将停止缩容。',
                                    'example' => '[     {       "Name": "action_1",       "StartTime": "2020-11-01T10:00:00Z",       "EndTime": "2020-11-30T10:00:00Z",       "MetricType": "ProvisionedConcurrencyUtilization",       "MetricTarget": 0.6,       "MinCapacity": 10,       "MaxCapacity": 100     }   ]',
                                    '$ref' => '#/components/schemas/TargetTrackingPolicies',
                                ],
                            ],
                            'currentError' => [
                                'title' => '预留实例创建失败时的错误信息',
                                'description' => '预留实例创建失败时的错误信息。',
                                'type' => 'string',
                                'example' => 'image not found',
                            ],
                            'alwaysAllocateCPU' => [
                                'title' => '是否始终分配CPU给函数实例。',
                                'description' => '是否始终分配CPU给函数实例。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                400 => [],
                403 => [],
                [],
                409 => [],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"resource\\": \\"12345#servierName#qualifier#functionName\\",\\n  \\"target\\": 5,\\n  \\"current\\": 1,\\n  \\"scheduledActions\\": [\\n    {\\n      \\"name\\": \\"\\",\\n      \\"startTime\\": \\"\\",\\n      \\"endTime\\": \\"\\",\\n      \\"target\\": 0,\\n      \\"scheduleExpression\\": \\"\\"\\n    }\\n  ],\\n  \\"targetTrackingPolicies\\": [\\n    {\\n      \\"name\\": \\"\\",\\n      \\"startTime\\": \\"\\",\\n      \\"endTime\\": \\"\\",\\n      \\"metricType\\": \\"\\",\\n      \\"metricTarget\\": 0,\\n      \\"minCapacity\\": 0,\\n      \\"maxCapacity\\": 0\\n    }\\n  ],\\n  \\"currentError\\": \\"image not found\\",\\n  \\"alwaysAllocateCPU\\": true\\n}","type":"json"}]',
            'title' => '获取函数预留信息',
        ],
        'ListProvisionConfigs' => [
            'summary' => '查询预留配置列表。',
            'path' => '/2021-04-06/provision-configs',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'limit',
                    'in' => 'query',
                    'schema' => [
                        'title' => '限定此次返回资源的数量。如果不设定，默认返回20，最大不能超过100。返回结果可能小于指定的数量，但不会多于指定的数量	',
                        'description' => '限定此次返回资源的数量。如果不设定，默认返回20，最大不能超过100。返回结果可能小于指定的数量，但不会多于指定的数量。 ',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '用来返回更多结果。第一次查询不需要提供这个参数，后续查询的token从返回结果中获取',
                        'description' => '用来返回更多结果。第一次查询不需要提供这个参数，后续查询的token从返回结果中获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demoNextToken',
                    ],
                ],
                [
                    'name' => 'serviceName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '限定返回的资源名称必须属于该service',
                        'description' => '限定返回的资源名称必须属于该service。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'serviceName',
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'schema' => [
                        'title' => '限定返回的资源名称必须属于该qualifier。qualifier只能是aliasName，且必须和serviceName共同使用',
                        'description' => '限定返回的资源名称必须属于该qualifier。qualifier只能是aliasName，且必须和serviceName共同使用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'prod',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数计算调用请求的调用链ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rid281s******',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'listProvisionConfigResponse',
                        'description' => '预留配置列表。',
                        'type' => 'object',
                        'properties' => [
                            'nextToken' => [
                                'title' => '下次查询的起始token	',
                                'description' => '下次查询的起始Token。',
                                'type' => 'string',
                                'example' => 'demoNextToken',
                            ],
                            'provisionConfigs' => [
                                'title' => '预留实例列表',
                                'description' => '预留实例列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '预留配置。',
                                    'type' => 'object',
                                    'properties' => [
                                        'resource' => [
                                            'title' => '资源描述',
                                            'description' => '资源描述。',
                                            'type' => 'string',
                                            'example' => '12345#servierName#qualifier#functionName',
                                        ],
                                        'target' => [
                                            'title' => '目标资源个数',
                                            'description' => '目标资源个数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '5',
                                        ],
                                        'current' => [
                                            'title' => '实际资源个数',
                                            'description' => '实际资源个数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '5',
                                        ],
                                        'scheduledActions' => [
                                            'title' => '定时策略配置',
                                            'description' => '定时策略配置。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '定时伸缩策略：通过定时伸缩策略您可以更加灵活地配置预留的函数实例，在指定时间将预留的函数实例量设定成需要的值，使函数实例量更好地贴合业务的并发量。',
                                                'example' => '[     {       "Name": "action_1",       "StartTime": "2020-11-01T10:00:00Z",       "EndTime": "2020-11-30T10:00:00Z",       "TargetValue": 50,       "ScheduleExpression": "cron(0 0 20 * * *)"     },     {       "Name": "action_2",       "StartTime": "2020-11-01T10:00:00Z",       "EndTime": "2020-11-30T10:00:00Z",       "TargetValue": 10,       "ScheduleExpression": "cron(0 0 22 * * *)"     }   ]',
                                                '$ref' => '#/components/schemas/ScheduledActions',
                                            ],
                                        ],
                                        'targetTrackingPolicies' => [
                                            'title' => '指标追踪伸缩策略配置',
                                            'description' => '指标追踪伸缩策略配置。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '指标伸缩策略：根据函数实例并发利用率的情况每分钟对预留资源进行一次伸缩。'."\n"
                                                    ."\n"
                                                    .'- 当指标超过追踪值metricTarget时，开始以积极的策略扩容预留模式的函数实例量，以使得指标值恢复到追踪值metricTarget附近。'."\n"
                                                    .'- 当指标低于追踪值metricTarget时，开始以保守的策略缩容预留模式的函数实例量，以使得指标值逐渐恢复到追踪值metricTarget附近。'."\n"
                                                    ."\n"
                                                    .'当您在系统中设置了伸缩最大值和最小值时，预留的函数实例量会在最大值与最小值之间进行伸缩，超出最大值时将停止扩容，低于最小值时将停止缩容。',
                                                'example' => '[     {       "Name": "action_1",       "StartTime": "2020-11-01T10:00:00Z",       "EndTime": "2020-11-30T10:00:00Z",       "MetricType": "ProvisionedConcurrencyUtilization",       "MetricTarget": 0.6,       "MinCapacity": 10,       "MaxCapacity": 100,     }   ]',
                                                '$ref' => '#/components/schemas/TargetTrackingPolicies',
                                            ],
                                        ],
                                        'currentError' => [
                                            'title' => '预留实例创建失败时的错误信息',
                                            'description' => '预留实例创建失败时的错误信息。',
                                            'type' => 'string',
                                            'example' => 'image not found',
                                        ],
                                        'alwaysAllocateCPU' => [
                                            'title' => '是否始终分配CPU给函数实例。',
                                            'description' => '是否始终分配CPU给函数实例。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                400 => [],
                403 => [],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"nextToken\\": \\"demoNextToken\\",\\n  \\"provisionConfigs\\": [\\n    {\\n      \\"resource\\": \\"12345#servierName#qualifier#functionName\\",\\n      \\"target\\": 5,\\n      \\"current\\": 5,\\n      \\"scheduledActions\\": [\\n        {\\n          \\"name\\": \\"\\",\\n          \\"startTime\\": \\"\\",\\n          \\"endTime\\": \\"\\",\\n          \\"target\\": 0,\\n          \\"scheduleExpression\\": \\"\\"\\n        }\\n      ],\\n      \\"targetTrackingPolicies\\": [\\n        {\\n          \\"name\\": \\"\\",\\n          \\"startTime\\": \\"\\",\\n          \\"endTime\\": \\"\\",\\n          \\"metricType\\": \\"\\",\\n          \\"metricTarget\\": 0,\\n          \\"minCapacity\\": 0,\\n          \\"maxCapacity\\": 0\\n        }\\n      ],\\n      \\"currentError\\": \\"image not found\\",\\n      \\"alwaysAllocateCPU\\": true\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取预留函数配置列表信息',
        ],
        'PutProvisionConfig' => [
            'summary' => '创建预留配置。',
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/provision-config',
            'methods' => [
                'put',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '服务名称',
                        'description' => '服务名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demoService',
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '别名名称',
                        'description' => '服务别名或LATEST，不支持版本。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'prod',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demoFunction',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '预留实例的配置',
                        'description' => '预留实例的配置。',
                        'type' => 'object',
                        'properties' => [
                            'target' => [
                                'title' => '预留的目标资源个数',
                                'description' => '预留的目标资源个数。取值范围为[0,10000]。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                                'example' => '1',
                            ],
                            'scheduledActions' => [
                                'title' => '定时策略配置',
                                'description' => '定时策略配置。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '定时策略的具体配置。',
                                    'required' => false,
                                    '$ref' => '#/components/schemas/ScheduledActions',
                                ],
                                'required' => false,
                            ],
                            'targetTrackingPolicies' => [
                                'title' => '指标追踪伸缩策略配置',
                                'description' => '指标追踪伸缩策略配置。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '指标追踪伸缩策略的具体配置。',
                                    'required' => false,
                                    '$ref' => '#/components/schemas/TargetTrackingPolicies',
                                ],
                                'required' => false,
                            ],
                            'alwaysAllocateCPU' => [
                                'title' => '当实例进入空闲状态时，是否继续分配CPU。',
                                'description' => '是否始终分配CPU，默认为true。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                                'default' => 'true',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数计算调用请求的调用链ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rid281s******',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'provisionConfigResponse',
                        'description' => 'provisionConfig配置详情。',
                        'type' => 'object',
                        'properties' => [
                            'resource' => [
                                'title' => '资源描述',
                                'description' => '资源描述。',
                                'type' => 'string',
                                'example' => '"12345#servierName#qualifier#functionName"',
                            ],
                            'target' => [
                                'title' => '目标资源个数',
                                'description' => '目标资源个数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '5',
                            ],
                            'current' => [
                                'title' => '实际资源个数',
                                'description' => '实际资源个数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'scheduledActions' => [
                                'title' => '定时策略配置',
                                'description' => '定时策略配置。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '定时伸缩策略：通过定时伸缩策略您可以更加灵活地配置预留的函数实例，在指定时间将预留的函数实例量设定成需要的值，使函数实例量更好地贴合业务的并发量。',
                                    'example' => '[     {       "Name": "action_1",       "StartTime": "2020-11-01T10:00:00Z",       "EndTime": "2020-11-30T10:00:00Z",       "TargetValue": 50,       "ScheduleExpression": "cron(0 0 20 * * *)"     },     {       "Name": "action_2",       "StartTime": "2020-11-01T10:00:00Z",       "EndTime": "2020-11-30T10:00:00Z",       "TargetValue": 10,       "ScheduleExpression": "cron(0 0 22 * * *)"     }   ]',
                                    '$ref' => '#/components/schemas/ScheduledActions',
                                ],
                            ],
                            'targetTrackingPolicies' => [
                                'title' => '指标追踪伸缩策略配置',
                                'description' => '指标追踪伸缩策略配置。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '指标伸缩策略：根据函数实例并发利用率的情况每分钟对预留资源进行一次伸缩。'."\n"
                                        ."\n"
                                        .'- 当指标超过追踪值metricTarget时，开始以积极的策略扩容预留模式的函数实例量，以使得指标值恢复到追踪值metricTarget附近。'."\n"
                                        .'- 当指标低于追踪值metricTarget时，开始以保守的策略缩容预留模式的函数实例量，以使得指标值逐渐恢复到追踪值metricTarget附近。'."\n"
                                        ."\n"
                                        .'当您在系统中设置了伸缩最大值和最小值时，预留的函数实例量会在最大值与最小值之间进行伸缩，超出最大值时将停止扩容，低于最小值时将停止缩容。',
                                    'example' => '[     {       "Name": "action_1",       "StartTime": "2020-11-01T10:00:00Z",       "EndTime": "2020-11-30T10:00:00Z",       "MetricType": "ProvisionedConcurrencyUtilization",       "MetricTarget": 0.6,       "MinCapacity": 10,       "MaxCapacity": 100,     }   ]',
                                    '$ref' => '#/components/schemas/TargetTrackingPolicies',
                                ],
                            ],
                            'alwaysAllocateCPU' => [
                                'title' => '是否始终分配CPU给函数实例。',
                                'description' => '是否始终分配CPU给函数实例。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                400 => [],
                403 => [],
                [],
                409 => [],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"resource\\": \\"\\\\\\"12345#servierName#qualifier#functionName\\\\\\"\\",\\n  \\"target\\": 5,\\n  \\"current\\": 1,\\n  \\"scheduledActions\\": [\\n    {\\n      \\"name\\": \\"\\",\\n      \\"startTime\\": \\"\\",\\n      \\"endTime\\": \\"\\",\\n      \\"target\\": 0,\\n      \\"scheduleExpression\\": \\"\\"\\n    }\\n  ],\\n  \\"targetTrackingPolicies\\": [\\n    {\\n      \\"name\\": \\"\\",\\n      \\"startTime\\": \\"\\",\\n      \\"endTime\\": \\"\\",\\n      \\"metricType\\": \\"\\",\\n      \\"metricTarget\\": 0,\\n      \\"minCapacity\\": 0,\\n      \\"maxCapacity\\": 0\\n    }\\n  ],\\n  \\"alwaysAllocateCPU\\": true\\n}","type":"json"}]',
            'title' => '申请或更新预留资源',
        ],
        'StopStatefulAsyncInvocation' => [
            'summary' => '停止异步任务。',
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/stateful-async-invocations/{invocationId}',
            'methods' => [
                'put',
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
            ],
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '异步任务所属的服务名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-service',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '异步任务所属的函数名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-function',
                    ],
                ],
                [
                    'name' => 'invocationId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '异步任务的任务ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-id',
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'schema' => [
                        'description' => '异步任务所属的服务别名或版本。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LATEST',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Sat, 14 Jul 2017 07:02:38 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数计算调用请求的调用链ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'asdf****',
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '停止异步任务',
            'description' => 'StatefulAsyncInvocation：异步任务。异步任务在普通的异步调用基础上增加了状态管理的功能，更适用于各类任务场景。',
        ],
        'ListStatefulAsyncInvocationFunctions' => [
            'summary' => '获取当前账号下所有已开启异步任务的函数资源列表。',
            'path' => '/2021-04-06/stateful-async-invocation-functions',
            'methods' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'limit',
                    'in' => 'query',
                    'schema' => [
                        'title' => '限定此次返回资源的数量。如果不设定，默认返回20，最大不能超过100。返回结果可以小于指定的数量，但不会多于指定的数量。',
                        'description' => '限定此次返回资源的数量。如果不设定，默认返回20，最大不能超过100。返回结果可以小于指定的数量，但不会多于指定的数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '0',
                        'example' => '20',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '用来标记当前开始读取的位置，置空表示从头开始。第一次查询不需要提供这个参数，后续查询的Token从前一次查询的返回结果中获取。',
                        'description' => '用来标记当前开始读取的位置，置空表示从头开始。第一次查询不需要提供这个参数，后续查询的Token从前一次查询的返回结果中获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '""',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'title' => '您的阿里云账号（主账号）ID。',
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '12348*****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'title' => '发起API调用的日期，用于对请求签名。格式为yyyy-mm-ddhh:mm:ss。',
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'title' => '用于链路追踪的ID。',
                        'description' => '用于链路追踪的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'duytnd-Xsdfasfd***',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '返回结构体。',
                        'description' => '返回结构体。',
                        'type' => 'object',
                        'properties' => [
                            'nextToken' => [
                                'title' => '用来表示当前调用返回读取到的位置，空代表数据已经读取完毕。',
                                'description' => '用来表示当前调用返回读取到的位置，空代表数据已经读取完毕。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'data' => [
                                'title' => '返回的实际数据列表。',
                                'description' => '返回的实际数据列表。',
                                'type' => 'array',
                                'items' => [
                                    'title' => '任务配置所属的服务及函数元数据。',
                                    'description' => '任务配置所属的服务及函数元数据。',
                                    '$ref' => '#/components/schemas/AsyncConfigMeta',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"nextToken\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"data\\": [\\n    {\\n      \\"serviceName\\": \\"serviceName\\",\\n      \\"functionName\\": \\"functionName\\",\\n      \\"qualifier\\": \\"LATEST\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '列举已开启异步任务的函数资源',
            'description' => 'StatefulAsyncInvocation：异步任务。异步任务在普通的异步调用基础上增加了状态管理的功能，更适用于各类任务场景。',
        ],
        'GetStatefulAsyncInvocation' => [
            'summary' => '获取符合条件的异步任务记录。',
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/stateful-async-invocations/{invocationId}',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '异步任务所属的服务名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-service',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '异步任务所属的函数名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-function',
                    ],
                ],
                [
                    'name' => 'invocationId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '异步任务的ID。'."\n"
                            .'> 建议您在使用SDK调用时设置与业务相关的ID，方便对相关执行进行后续操作。例如，一个视频处理函数可以使用视频文件名作为调用ID，通过该ID可以查看视频是否处理完成或终止视频的处理。该ID的命名规则只能以英文大小写字母或下划线（\\_）开头，由英文大小写字母、数字（0-9）、下划线（_）及短划线（-）组成，不超过128个字符。如果您未设置异步调用的ID时，系统则会自动生成一个ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'e026ae92-61e5-472f-b32d-1c9e3c4e****',
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'schema' => [
                        'description' => '异步任务所属服务的别名或版本。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LATEST',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Code-Checksum',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数代码包的CRC-64值，用于校验完整性。应当由工具自动计算。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1506052139770049xxxx',
                    ],
                ],
                [
                    'name' => 'X-Fc-Log-Type',
                    'in' => 'header',
                    'schema' => [
                        'description' => '请求返回日志。'."\n"
                            ."\n"
                            .'- **Tail**：返回当前请求产生的最后4 KB日志。'."\n"
                            .'- **None**：默认值，不返回请求日志。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Tail',
                    ],
                ],
                [
                    'name' => 'X-Fc-Invocation-Type',
                    'in' => 'header',
                    'schema' => [
                        'description' => '调用方式。'."\n"
                            ."\n"
                            .'- **Sync**：同步调用。'."\n"
                            .'- **Async**：异步调用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Async',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Sat, 14 Jul 2017 07:02:38 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数计算调用请求的调用链ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'asdf****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '异步任务调用数据。'."\n"
                            .'该参数下的returnPayload字段当前处于内测阶段，如您需要使用，请[联系我们](~~53087~~)为您开通。',
                        'example' => ' [{"functionName": "demo-function","serviceName": "demo-service","qualifier": "LATEST","invocationId": "id","status": "Succeeded","startedTime": 1640966400000,"endTime": 1640966500000,"destinationStatus": "Succeeded","invocationErrorMessage": "","invocationPayload": "","requestId": "id","alreadyRetriedTimes": 0}]',
                        '$ref' => '#/components/schemas/StatefulAsyncInvocation',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"functionName\\": \\"functionName\\",\\n  \\"serviceName\\": \\"serviceName\\",\\n  \\"qualifier\\": \\"LATEST\\",\\n  \\"invocationId\\": \\"cxxdfd\\",\\n  \\"status\\": \\"Running\\",\\n  \\"startedTime\\": 1633449590,\\n  \\"endTime\\": 1633449599,\\n  \\"destinationStatus\\": \\"Succeeded\\",\\n  \\"invocationErrorMessage\\": \\"UnhandledInvocationError\\",\\n  \\"invocationPayload\\": \\"{\\\\\\"key1\\\\\\":\\\\\\"value1\\\\\\",\\\\\\"key2\\\\\\":\\\\\\"value2\\\\\\"}\\",\\n  \\"alreadyRetriedTimes\\": 3,\\n  \\"requestId\\": \\"ABA740D4-4BA6-5293-9FD1-882707EADC37\\",\\n  \\"instanceId\\": \\"D4-4BA6-5293-9FD1-882707E\\",\\n  \\"events\\": [\\n    {\\n      \\"eventId\\": 1,\\n      \\"status\\": \\"Enqueued\\",\\n      \\"timestamp\\": 1647420449721,\\n      \\"eventDetail\\": \\"{\\\\\\"Error\\\\\\":\\\\\\"UnhandledInvocationError\\\\\\"}\\"\\n    }\\n  ],\\n  \\"durationMs\\": 100,\\n  \\"returnPayload\\": \\"my-result\\"\\n}","type":"json"}]',
            'title' => '获取异步任务信息',
            'description' => 'StatefulAsyncInvocation：异步任务。异步任务在普通的异步调用基础上增加了状态管理的功能，更适用于各类任务场景。',
        ],
        'ListStatefulAsyncInvocations' => [
            'summary' => '获取异步任务中符合某些条件的所有异步调用。',
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/stateful-async-invocations',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '异步任务所属服务的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-service',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '异步任务所属的函数名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-function',
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'schema' => [
                        'description' => '异步任务所属服务的别名或版本。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LATEST',
                    ],
                ],
                [
                    'name' => 'status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '异步任务的执行状态。'."\n"
                            ."\n"
                            .'- **Enqueued**：异步消息已入队，等待处理。'."\n"
                            .'- **Succeeded**：调用执行成功。'."\n"
                            .'- **Failed**：调用执行失败。'."\n"
                            .'- **Running**：调用执行中。'."\n"
                            .'- **Stopped**：调用执行终止。'."\n"
                            .'- **Stopping**：执行停止中。'."\n"
                            .'- **Invalid**：您的执行因函数被删除等原因处于无效状态（任务未被执行）。'."\n"
                            .'- **Expired**：您为任务配置了最长排队等待的期限。该任务因为超期被丢弃（任务未被执行）。'."\n"
                            .'- **Retrying**：异步调用因执行错误重试中。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Running',
                    ],
                ],
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用来返回更多结果。第一次查询不需要提供这个参数，后续查询的Token从返回结果中获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'caeba0****be03f84eb48b699f0a4883',
                    ],
                ],
                [
                    'name' => 'limit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '异步调用的返回个数。默认返回50个，取值范围\\[1,100]。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'startedTimeBegin',
                    'in' => 'query',
                    'schema' => [
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
                    'schema' => [
                        'description' => '异步任务的结束时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1640966400000',
                    ],
                ],
                [
                    'name' => 'sortOrderByTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '异步调用的排序方式：'."\n"
                            ."\n"
                            .'- **asc**：正序。'."\n"
                            .'- **desc**：逆序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'desc',
                    ],
                ],
                [
                    'name' => 'invocationIdPrefix',
                    'in' => 'query',
                    'schema' => [
                        'description' => '异步调用前缀。限定返回的资源名称，假设`invocationidPrefix`为`job`，则返回的资源名必须以`job`开头。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'abcxxx',
                    ],
                ],
                [
                    'name' => 'includePayload',
                    'in' => 'query',
                    'schema' => [
                        'description' => '- **true**：当该参数设置为`true`时，异步任务的列表将返回`invocationPayload`字段。'."\n"
                            .'- **false**：当该参数设置为`false`时，则不返回`invocationPayload`字段。'."\n"
                            ."\n"
                            .'> `invocationPayload`字段表示异步任务函数运行时的输入参数。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Code-Checksum',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数代码包的CRC-64值，用于校验完整性。应当由工具自动计算。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1506052139770049xxxx',
                    ],
                ],
                [
                    'name' => 'X-Fc-Log-Type',
                    'in' => 'header',
                    'schema' => [
                        'description' => '请求返回日志。'."\n"
                            ."\n"
                            .'- **Tail**：返回当前请求产生的最后4 KB日志。'."\n"
                            .'- **None**：默认值，不返回请求日志。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Tail',
                    ],
                ],
                [
                    'name' => 'X-Fc-Invocation-Type',
                    'in' => 'header',
                    'schema' => [
                        'description' => '调用方式。'."\n"
                            ."\n"
                            .'- **Sync**：同步调用。'."\n"
                            .'- **Async**：异步调用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Async',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Sat, 14 Jul 2017 07:02:38 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数计算调用请求的调用链ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'abcxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回数据结构体。',
                        'type' => 'object',
                        'properties' => [
                            'nextToken' => [
                                'description' => '用来返回更多的查询结果。如果这个值没有返回，则说明没有更多结果。',
                                'type' => 'string',
                                'example' => '8bj81uI8n****',
                            ],
                            'invocations' => [
                                'description' => '异步任务的列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '异步任务的列表元素。',
                                    'example' => '[{"functionName": "demo-function","serviceName": "demo-service","qualifier": "LATEST","invocationId": "id","status": "Succeeded","startedTime": 1640966400000,"endTime": 1640966500000,"destinationStatus": "Succeeded","invocationErrorMessage": "","invocationPayload": "","requestId": "id","alreadyRetriedTimes": 0,}]',
                                    '$ref' => '#/components/schemas/StatefulAsyncInvocation',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"nextToken\\": \\"8bj81uI8n****\\",\\n  \\"invocations\\": [\\n    {\\n      \\"functionName\\": \\"functionName\\",\\n      \\"serviceName\\": \\"serviceName\\",\\n      \\"qualifier\\": \\"LATEST\\",\\n      \\"invocationId\\": \\"cxxdfd\\",\\n      \\"status\\": \\"Running\\",\\n      \\"startedTime\\": 1633449590,\\n      \\"endTime\\": 1633449599,\\n      \\"destinationStatus\\": \\"Succeeded\\",\\n      \\"invocationErrorMessage\\": \\"UnhandledInvocationError\\",\\n      \\"invocationPayload\\": \\"{\\\\\\"key1\\\\\\":\\\\\\"value1\\\\\\",\\\\\\"key2\\\\\\":\\\\\\"value2\\\\\\"}\\",\\n      \\"alreadyRetriedTimes\\": 3,\\n      \\"requestId\\": \\"ABA740D4-4BA6-5293-9FD1-882707EADC37\\",\\n      \\"instanceId\\": \\"D4-4BA6-5293-9FD1-882707E\\",\\n      \\"events\\": [\\n        {\\n          \\"eventId\\": 1,\\n          \\"status\\": \\"Enqueued\\",\\n          \\"timestamp\\": 1647420449721,\\n          \\"eventDetail\\": \\"{\\\\\\"Error\\\\\\":\\\\\\"UnhandledInvocationError\\\\\\"}\\"\\n        }\\n      ],\\n      \\"durationMs\\": 100,\\n      \\"returnPayload\\": \\"my-result\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取异步任务信息列表',
            'description' => 'StatefulAsyncInvocation：异步任务。异步任务在普通的异步调用基础上增加了状态管理的功能，更适用于各类任务场景。',
        ],
        'CreateLayerVersion' => [
            'summary' => '发布层版本。',
            'path' => '/2021-04-06/layers/{layerName}/versions',
            'methods' => [
                'post',
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
            ],
            'parameters' => [
                [
                    'name' => 'layerName',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'A short description of struct',
                        'description' => '层的名称。最大长度为128个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'MyLayer',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '层的信息。',
                        'type' => 'object',
                        'properties' => [
                            'description' => [
                                'description' => '层的描述信息。最大长度为256个字符。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'test',
                            ],
                            'compatibleRuntime' => [
                                'description' => '层支持的运行时环境列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '运行时名称。当前支持**nodejs20**、**nodejs18**、**nodejs16**、**nodejs14**、**nodejs12**、**nodejs10**、**nodejs8**、**nodejs6**、**python3.10**、**python3.9**、**python3**、**python2.7**、**java11**、**java8**、**php7.2**、**go1**、**dotnetcore3.1**、**dotnetcore2.1**、**custom.debian10**和**custom**。',
                                    'type' => 'string',
                                    'required' => false,
                                    'enumValueTitles' => [],
                                    'example' => 'python3',
                                ],
                                'required' => false,
                            ],
                            'Code' => [
                                'description' => '层的代码。',
                                'required' => true,
                                '$ref' => '#/components/schemas/Code',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数计算调用请求的调用链ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'r4isu4sls****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [
                        'ETag' => [
                            'schema' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '层的详细信息。',
                        'type' => 'object',
                        'properties' => [
                            'layerName' => [
                                'description' => '层的名称。',
                                'type' => 'string',
                                'example' => 'MyLayer',
                            ],
                            'version' => [
                                'description' => '层的版本。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'description' => [
                                'description' => '版本的描述信息。',
                                'type' => 'string',
                                'example' => 'the first layer',
                            ],
                            'code' => [
                                'description' => '层的代码包信息。',
                                '$ref' => '#/components/schemas/OutputCodeLocation',
                            ],
                            'codesize' => [
                                'description' => '层的代码包大小，单位为Byte。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '421',
                            ],
                            'codeChecksum' => [
                                'description' => '层代码包的crc64校验码，根据**ECMA-182标准**计算得出。',
                                'type' => 'string',
                                'example' => '2825179536350****',
                            ],
                            'createTime' => [
                                'description' => '层版本的创建时间，格式：yyyy-MM-ddTHH:mm:ssZ。',
                                'type' => 'string',
                                'example' => '2022-01-01T11:08:00Z',
                            ],
                            'acl' => [
                                'description' => '层的访问模式。'."\n"
                                    .'取值0代表私有，取值1代表公有。官方公共层默认为公有，自定义层可以设置为私有或者公有。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'compatibleRuntime' => [
                                'description' => '层支持的运行时环境列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '运行时名称。当前支持**nodejs20**、**nodejs18**、**nodejs16**、**nodejs14**、**nodejs12**、**nodejs10**、**nodejs8**、**nodejs6**、**python3.10**、**python3.9**、**python3**、**python2.7**、**java11**、**java8**、**php7.2**、**go1**、**dotnetcore3.1**、**dotnetcore2.1**、**custom.debian10**和**custom**。',
                                    'type' => 'string',
                                    'enumValueTitles' => [],
                                    'example' => 'python3',
                                ],
                            ],
                            'arn' => [
                                'description' => '层资源的名称。',
                                'type' => 'string',
                                'example' => 'xxxxxxxx#Layer-name#1',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"layerName\\": \\"MyLayer\\",\\n  \\"version\\": 1,\\n  \\"description\\": \\"the first layer\\",\\n  \\"code\\": {\\n    \\"repositoryType\\": \\"\\",\\n    \\"location\\": \\"\\"\\n  },\\n  \\"codesize\\": 421,\\n  \\"codeChecksum\\": \\"2825179536350****\\",\\n  \\"createTime\\": \\"2022-01-01T11:08:00Z\\",\\n  \\"acl\\": 0,\\n  \\"compatibleRuntime\\": [\\n    \\"python3\\"\\n  ],\\n  \\"arn\\": \\"xxxxxxxx#Layer-name#1\\"\\n}","type":"json"}]',
            'title' => '创建层版本',
        ],
        'DeleteLayerVersion' => [
            'summary' => '删除层版本。',
            'path' => '/2021-04-06/layers/{layerName}/versions/{version}',
            'methods' => [
                'delete',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'layerName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '层名称',
                        'description' => '层的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'MyLayer',
                    ],
                ],
                [
                    'name' => 'version',
                    'in' => 'path',
                    'schema' => [
                        'title' => '层版本',
                        'description' => '层的版本。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '请求的调用链ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'asdf****',
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '删除层配置',
            'responseParamsDescription' => '无返回参数',
        ],
        'ListLayers' => [
            'summary' => '获取层列表。',
            'path' => '/2021-04-06/layers',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'prefix',
                    'in' => 'query',
                    'schema' => [
                        'title' => '层名称前缀',
                        'description' => '层名称的前缀。限定返回的资源名称，假设Prefix为a，则返回的资源名必须以a开头。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'prefix-Layer',
                    ],
                ],
                [
                    'name' => 'startKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '起始层名称',
                        'description' => '起始层的名称。设定结果从startKey之后（包括startKey）按字母排序的第一个开始返回。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'start-layer-name',
                    ],
                ],
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '下一个层名称',
                        'description' => '用来返回更多结果。第一次查询不需要提供这个参数，后续查询的Token从返回结果中获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'next-layer-name',
                    ],
                ],
                [
                    'name' => 'limit',
                    'in' => 'query',
                    'schema' => [
                        'title' => '最大返回条目数',
                        'description' => '限定此次返回资源的数量。如果不设定，默认返回20，最大不能超过100。返回结果可以小于指定的数量，但不会多于指定的数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'public',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只获取公共层，默认为false。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'official',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否获取官方公共层，当official设为true时，public字段不生效，默认为false。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '请求的调用链ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rid281s******',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应结构体。',
                        'type' => 'object',
                        'properties' => [
                            'layers' => [
                                'title' => '层列表',
                                'description' => '层的列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '层的详细信息。',
                                    'example' => '无',
                                    '$ref' => '#/components/schemas/Layer',
                                ],
                            ],
                            'nextToken' => [
                                'title' => '剩余列表起始层名',
                                'description' => '剩余列表的起始层名，用来返回更多结果。',
                                'type' => 'string',
                                'example' => 'next-layer-name',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"layers\\": [\\n    {\\n      \\"layerName\\": \\"\\",\\n      \\"version\\": 0,\\n      \\"description\\": \\"\\",\\n      \\"code\\": {\\n        \\"repositoryType\\": \\"\\",\\n        \\"location\\": \\"仅在查询具体层版本时返回\\"\\n      },\\n      \\"codeSize\\": 0,\\n      \\"codeChecksum\\": \\"\\",\\n      \\"createTime\\": \\"\\",\\n      \\"acl\\": 0,\\n      \\"arn\\": \\"\\",\\n      \\"arnV2\\": \\"\\",\\n      \\"license\\": \\"\\",\\n      \\"compatibleRuntime\\": [\\n        \\"\\"\\n      ]\\n    }\\n  ],\\n  \\"nextToken\\": \\"next-layer-name\\"\\n}","type":"json"}]',
            'title' => '获取层的列表信息',
        ],
        'ListLayerVersions' => [
            'summary' => '获取层的版本列表。',
            'path' => '/2021-04-06/layers/{layerName}/versions',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'layerName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '层名称',
                        'description' => '层的名称。仅支持查询自定义层版本，不支持查询官方公共层版本。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'MyLayer',
                    ],
                ],
                [
                    'name' => 'startVersion',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '起始版本',
                        'description' => '层的起始版本。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'limit',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '本次读取的最大数据记录数量',
                        'description' => '限定此次返回资源的数量。如果不设定，默认返回20，最大不能超过100。返回结果可以小于指定的数量，但不会多于指定的数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => 'API调用时间，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '请求的调用链ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rid281s******',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应结构体。',
                        'type' => 'object',
                        'properties' => [
                            'layers' => [
                                'title' => '层版本列表',
                                'description' => '层版本列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '层的详细信息。',
                                    'example' => '无',
                                    '$ref' => '#/components/schemas/Layer',
                                ],
                            ],
                            'nextVersion' => [
                                'title' => '剩余列表起始版本号',
                                'description' => '剩余列表起始版本号。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '21',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"layers\\": [\\n    {\\n      \\"layerName\\": \\"\\",\\n      \\"version\\": 0,\\n      \\"description\\": \\"\\",\\n      \\"code\\": {\\n        \\"repositoryType\\": \\"\\",\\n        \\"location\\": \\"仅在查询具体层版本时返回\\"\\n      },\\n      \\"codeSize\\": 0,\\n      \\"codeChecksum\\": \\"\\",\\n      \\"createTime\\": \\"\\",\\n      \\"acl\\": 0,\\n      \\"arn\\": \\"\\",\\n      \\"arnV2\\": \\"\\",\\n      \\"license\\": \\"\\",\\n      \\"compatibleRuntime\\": [\\n        \\"\\"\\n      ]\\n    }\\n  ],\\n  \\"nextVersion\\": 21\\n}","type":"json"}]',
            'title' => '获取层的版本信息',
        ],
        'GetLayerVersion' => [
            'summary' => '获取层的版本信息。',
            'path' => '/2021-04-06/layers/{layerName}/versions/{version}',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'layerName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '层名称',
                        'description' => '层的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'MyLayer',
                    ],
                ],
                [
                    'name' => 'version',
                    'in' => 'path',
                    'schema' => [
                        'title' => '层版本',
                        'description' => '层的版本。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '请求的调用链ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'asdf****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [
                        'ETag' => [
                            'schema' => [
                                'title' => '层版本标识符',
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '层的详细信息。',
                        'example' => '无',
                        '$ref' => '#/components/schemas/Layer',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"layerName\\": \\"\\",\\n  \\"version\\": 0,\\n  \\"description\\": \\"\\",\\n  \\"code\\": {\\n    \\"repositoryType\\": \\"\\",\\n    \\"location\\": \\"仅在查询具体层版本时返回\\"\\n  },\\n  \\"codeSize\\": 0,\\n  \\"codeChecksum\\": \\"\\",\\n  \\"createTime\\": \\"\\",\\n  \\"acl\\": 0,\\n  \\"arn\\": \\"\\",\\n  \\"arnV2\\": \\"\\",\\n  \\"license\\": \\"\\",\\n  \\"compatibleRuntime\\": [\\n    \\"\\"\\n  ]\\n}","type":"json"}]',
            'title' => '获取层配置',
        ],
        'PutLayerACL' => [
            'summary' => '修改层的权限。',
            'path' => '/2021-04-06/layers/{layerName}/acl',
            'methods' => [
                'put',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'layerName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '',
                        'description' => '层的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'MyLayer',
                    ],
                ],
                [
                    'name' => 'public',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否公开。'."\n"
                            .'- **true**：公开。'."\n"
                            .'- **false**：不公开。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => 'API调用时间，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '请求的调用链ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'asdf****',
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '设置层的权限',
        ],
        'ListEventSources' => [
            'summary' => '获取函数计算调用事件源列表。',
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/event-sources',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '服务名称',
                        'description' => '服务名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-service',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-function',
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'schema' => [
                        'title' => '别名或版本',
                        'description' => '别名或版本。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LATEST',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Sat, 14 Jul 2017 07:02:38 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数计算调用请求的调用链ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'asdf****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回值事件源列表结构体。',
                        'type' => 'object',
                        'properties' => [
                            'eventSources' => [
                                'title' => '事件源列表',
                                'description' => '事件源列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '事件源结构体。',
                                    'type' => 'object',
                                    'properties' => [
                                        'sourceArn' => [
                                            'title' => '事件源资源标识符',
                                            'description' => '事件源资源标识符。',
                                            'type' => 'string',
                                            'example' => 'acs:eventbridge:cn-shanghai:123456:eventbus/mns-test/rule/fc-test1/target/abc',
                                        ],
                                        'createdTime' => [
                                            'title' => '创建时间',
                                            'description' => '事件源创建时间。',
                                            'type' => 'string',
                                            'example' => '2016-08-15T16:06:05.000+0000',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                403 => [],
                [],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"eventSources\\": [\\n    {\\n      \\"sourceArn\\": \\"acs:eventbridge:cn-shanghai:123456:eventbus/mns-test/rule/fc-test1/target/abc\\",\\n      \\"createdTime\\": \\"2016-08-15T16:06:05.000+0000\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取事件源列表信息',
        ],
        'DeregisterEventSource' => [
            'summary' => '取消注册函数计算调用事件源服务。该API已废弃，不建议您继续使用。',
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/event-sources/{sourceArn}',
            'methods' => [
                'delete',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '服务名称',
                        'description' => '服务名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-service',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-function',
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'schema' => [
                        'title' => '别名或版本',
                        'description' => '别名或版本。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LATEST',
                    ],
                ],
                [
                    'name' => 'sourceArn',
                    'in' => 'path',
                    'schema' => [
                        'title' => '事件源资源标识符',
                        'description' => '事件源资源标识符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'acs:eventbridge:cn-shanghai:123456:eventbus/mns-test/rule/fc-test1/target/abc',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Sat, 14 Jul 2017 07:02:38 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数计算调用请求的调用链ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'asdf****',
                    ],
                ],
            ],
            'responses' => [
                204 => [],
                400 => [],
                403 => [],
                [],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '注销事件源【已废弃】',
        ],
        'RegisterEventSource' => [
            'summary' => '注册函数计算调用事件源服务。',
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/event-sources',
            'methods' => [
                'post',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '服务名称',
                        'description' => '服务名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-service',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '函数名称',
                        'description' => '函数名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-function',
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'schema' => [
                        'title' => '别名或版本',
                        'description' => '别名或版本。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LATEST',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体参数。',
                        'type' => 'object',
                        'properties' => [
                            'sourceArn' => [
                                'title' => '事件源资源标识符',
                                'description' => '事件源资源标识符。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'acs:eventbridge:cn-shanghai:123456:eventbus/mns-test/rule/fc-test1/target/abc',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Sat, 14 Jul 2017 07:02:38 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数计算调用请求的调用链ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'asdf****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '请求返回结构体。',
                        'type' => 'object',
                        'properties' => [
                            'sourceArn' => [
                                'title' => '事件源资源标识符',
                                'description' => '事件源资源标识符。',
                                'type' => 'string',
                                'example' => 'acs:eventbridge:cn-shanghai:123456:eventbus/mns-test/rule/fc-test1/target/abc',
                            ],
                            'createdTime' => [
                                'title' => '创建时间',
                                'description' => '事件源创建时间。',
                                'type' => 'string',
                                'example' => '2016-08-15T16:06:05.000+0000',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"sourceArn\\": \\"acs:eventbridge:cn-shanghai:123456:eventbus/mns-test/rule/fc-test1/target/abc\\",\\n  \\"createdTime\\": \\"2016-08-15T16:06:05.000+0000\\"\\n}","type":"json"}]',
            'title' => '注册事件源',
        ],
        'CreateVpcBinding' => [
            'summary' => '创建VPC连接。',
            'path' => '/2021-04-06/services/{serviceName}/bindings',
            'methods' => [
                'post',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'A short description of struct',
                        'description' => '服务名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-service',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求结构。',
                        'type' => 'object',
                        'properties' => [
                            'vpcId' => [
                                'description' => '要绑定的vpcID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'v-xxxx',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '自定义请求ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'asdf****',
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '绑定VPC服务',
        ],
        'DeleteVpcBinding' => [
            'summary' => '删除指定VPC防火墙策略组的访问控制策略。',
            'path' => '/2021-04-06/services/{serviceName}/bindings/{vpcId}',
            'methods' => [
                'delete',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '服务名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demoService',
                    ],
                ],
                [
                    'name' => 'vpcId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '要删除的绑定VPC ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vpc-xxxx',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '自定义请求ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'asdf****',
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '删除VPC绑定',
        ],
        'ListVpcBindings' => [
            'summary' => '查询已创建的VPC连接。',
            'path' => '/2021-04-06/services/{serviceName}/bindings',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '服务名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'serviceName',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '自定义请求ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rid281s******',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '获取绑定的VPC ID列表返回值。',
                        'type' => 'object',
                        'properties' => [
                            'vpcIds' => [
                                'description' => '绑定的VPC ID列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '绑定的VPC ID信息。',
                                    'type' => 'string',
                                    'example' => 'vpc-xxxx',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"vpcIds\\": [\\n    \\"vpc-xxxx\\"\\n  ]\\n}","type":"json"}]',
            'title' => '获取VPC绑定列表',
        ],
        'GetResourceTags' => [
            'summary' => '获取指定资源所有的标签信息。',
            'path' => '/2021-04-06/tag',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'resourceArn',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => 'Resource ARN 全称或者简称',
                        'description' => '阿里云资源的标识。'."\n"
                            .'> 您可以通过此参数确认该资源所属的账号、服务、地域等。目前只能给Top Level资源的服务进行标签的相关操作。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'acs:fc:cn-shanghai:188077086902****:services/demo',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '自定义请求ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my-test-trace-id',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'getResourceTagsResponse',
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'resourceArn' => [
                                'title' => 'Resource ARN 全称',
                                'description' => '阿里云资源的标识。'."\n"
                                    ."\n"
                                    .'> 您可以通过此参数确认该资源所属的账号、服务、地域等。',
                                'type' => 'string',
                                'example' => 'acs:fc:cn-shanghai:188077086902****:services/demo',
                            ],
                            'tags' => [
                                'title' => 'tag 列表',
                                'description' => '标签字典。',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'string',
                                    'example' => '{"k1":"v1"}',
                                    'description' => '标签字典。取值说明如下：'."\n"
                                        .'- **key**：表示标签键。'."\n"
                                        .'- **value**：表示标签值。',
                                ],
                                'example' => '{"k1":"v1"}',
                            ],
                        ],
                        'example' => 'acs:fc:cn-shanghai:188077086902****:services/demo',
                    ],
                ],
                400 => [],
                403 => [],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"resourceArn\\": \\"acs:fc:cn-shanghai:188077086902****:services/demo\\",\\n  \\"tags\\": {\\n    \\"key\\": \\"{\\\\\\"k1\\\\\\":\\\\\\"v1\\\\\\"}\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询标签信息',
        ],
        'ListTaggedResources' => [
            'summary' => '列出所有被打标签的服务。',
            'path' => '/2021-04-06/tags',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用来返回更多结果。第一次查询不需要提供这个参数，后续查询的Token从返回结果中获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'a-service',
                    ],
                ],
                [
                    'name' => 'limit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '限定此次返回资源的数量。如果不设定，默认返回20，最大不能超过100。返回结果可能小于指定的数量，但不会多于指定的数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '自定义请求ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my-test-trace-id',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'nextToken' => [
                                'description' => '用来返回更多结果。第一次查询不需要提供这个参数，后续查询的Token从返回结果中获取。',
                                'type' => 'string',
                                'example' => 'a-service',
                            ],
                            'resources' => [
                                'description' => '被打标签的Service资源列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '标签资源信息。',
                                    '$ref' => '#/components/schemas/Resource',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"nextToken\\": \\"a-service\\",\\n  \\"resources\\": [\\n    {\\n      \\"resourceArn\\": \\"\\",\\n      \\"tags\\": {\\n        \\"key\\": \\"\\"\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询多个服务已绑定的标签列表',
        ],
        'TagResource' => [
            'summary' => '给指定资源打标签。',
            'path' => '/2021-04-06/tag',
            'methods' => [
                'post',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'allowEmptyValue' => false,
                    'style' => 'json',
                    'schema' => [
                        'title' => '标签详情',
                        'description' => '标签详情。',
                        'type' => 'object',
                        'properties' => [
                            'resourceArn' => [
                                'description' => '阿里云资源的标识。'."\n"
                                    .'> 您可以通过此参数确认该资源所属的账号、服务、地域等。目前只能给Top Level资源的服务进行标签的相关操作。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'acs:fc:cn-shanghai:188077086902****:services/demo',
                            ],
                            'tags' => [
                                'description' => '标签字典。',
                                'type' => 'object',
                                'required' => true,
                                'additionalProperties' => [
                                    'type' => 'string',
                                    'description' => '标签字典。取值说明如下：'."\n"
                                        .'  - **key**：表示标签键，长度范围为[1, 128]。'."\n"
                                        .'  - **value**：表示标签值，长度范围为[1, 128]。'."\n"
                                        ."\n"
                                        .'区分大小写。如果指定多个标签，则会为指定资源同时创建并绑定多个标签。同一个资源上的同一个标签键只能对应一个标签值。如果您尝试添加已有标签键，则对应的标签值会更新为新值。'."\n"
                                        ."\n"
                                        .'不能以aliyun和acs:开头，不能包含`http://`或者`https://`。',
                                    'example' => '{"k1":"v1" , "k2":"v2"}',
                                ],
                                'example' => '{"k1":"v1"}',
                            ],
                        ],
                        'required' => false,
                        'example' => '	 acs:fc:cn-shanghai:188077086902****:services/demo',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '自定义请求ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my-test-trace-id',
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '配置标签',
        ],
        'UntagResource' => [
            'summary' => '删除资源的标签。',
            'path' => '/2021-04-06/tag',
            'methods' => [
                'put',
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
                'abilityTreeCode' => '22410',
                'abilityTreeNodes' => [
                    'FEATUREfcNKPGZ0',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'allowEmptyValue' => false,
                    'style' => 'json',
                    'schema' => [
                        'title' => '取消标签资源详情',
                        'description' => '取消标签资源详情。',
                        'type' => 'object',
                        'properties' => [
                            'resourceArn' => [
                                'title' => '目前只能给 top level 资源 service 进行标签的相关操作, ARN 可以是类似 services/foo 或者 acs:fc:cn-shanghai:123456789:services/foo',
                                'description' => '阿里云资源的标识。'."\n"
                                    .'> 您可以通过此参数确认该资源所属的账号、服务、地域等。目前只能给Top Level资源的服务进行标签的相关操作。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'acs:fc:cn-shanghai:188077086902****:services/demo',
                            ],
                            'tagKeys' => [
                                'title' => 'tag key 值列表， 最大为 20，当 all=false， length 至少为 1. 当 length 大于 1 时， 可以忽略 all 值',
                                'description' => '要删除的标签的键值列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '标签的键值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'k1',
                                ],
                                'required' => false,
                            ],
                            'all' => [
                                'title' => '删除所有 tag，默认值为 false',
                                'description' => '是否删除所有标签，当且仅当未传入标签键时生效。取值说明如下：'."\n"
                                    .'  - **true**：删除所有标签。'."\n"
                                    .'  - **false**：不删除所有标签。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                            ],
                        ],
                        'required' => false,
                        'example' => 'acs:fc:cn-shanghai:188077086902****:services/demo',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '函数的调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Wed, 11 May 2022 09:00:00 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '自定义请求ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my-test-trace-id',
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                400 => [],
                403 => [],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '删除资源的标签',
        ],
        'ListInstances' => [
            'summary' => '查询函数当前的可用实例列表。',
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/instances',
            'methods' => [
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
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '106320',
                'abilityTreeNodes' => [
                    'FEATUREfcW4XOQV',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '服务的名称',
                        'description' => '服务的名称。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'demoService',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '函数的名称',
                        'description' => '函数的名称。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'demoFunction',
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'schema' => [
                        'title' => '服务的版本或别名。默认是LATEST。'."\n"
                            ."\n"
                            .'此处的qualifier同InvokeFunction的qualifier含义一致，即调用ListInstances时指定qualifier=test查询出来的实例，就是调用InvokeFunction时qualifier=test链路上的实例。',
                        'description' => '版本或者别名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dev',
                    ],
                ],
                [
                    'name' => 'instanceIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '实例ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '实例ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '["1ef6b6ff-7f7b-485e-ab49-501ac681****", "04db0821-c6d2-4c10-970b-93e36f1a****"]',
                        ],
                        'required' => false,
                        'maxItems' => 1000,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'limit',
                    'in' => 'query',
                    'schema' => [
                        'title' => '限定此次返回资源的数量，取值范围[0,1000]。'."\n"
                            ."\n"
                            .'返回结果可以小于指定的数量，但不能多于指定的数量。',
                        'description' => '限定此次返回资源的数量，取值范围[0,1000]。'."\n"
                            ."\n"
                            .'返回结果可以小于指定的数量，但不能多于指定的数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '查询返回的实例信息列表。',
                        'type' => 'object',
                        'properties' => [
                            'instances' => [
                                'description' => '查询返回的实例信息列表。'."\n",
                                'type' => 'array',
                                'items' => [
                                    'description' => '实例信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'instanceId' => [
                                            'title' => '实例ID。'."\n"
                                                ."\n",
                                            'description' => '实例ID。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => '1ef6b6ff-7f7b-485e-ab49-501ac681****',
                                        ],
                                        'versionId' => [
                                            'title' => '实例所属的服务版本。如果是LATEST别名下的函数实例，则返回版本号为0。'."\n"
                                                ."\n",
                                            'description' => '实例所属的服务版本。如果是LATEST别名下的函数实例，则返回版本号为0。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"instances\\": [\\n    {\\n      \\"instanceId\\": \\"1ef6b6ff-7f7b-485e-ab49-501ac681****\\",\\n      \\"versionId\\": \\"1\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查看实例信息',
            'description' => 'ListInstances接口提供了查询函数当前可用实例的能力。'."\n"
                ."\n"
                .'可用实例是指正在执行请求，或者可被调度以处理请求的实例。ListInstances接口查询得到的实例与具有相同 '."\n"
                .'`ServiceName`、`FunctionName`和`Qualifier`的InvokeFunction接口流量链路下的活跃实例保持一致。',
        ],
        'ClaimGPUInstance' => [
            'summary' => '获取GPU渲染实例。该API已废弃，不建议继续使用。',
            'path' => '/2021-04-06/gpuInstances',
            'methods' => [
                'post',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'GPU渲染实例配置',
                        'description' => 'GPU渲染实例配置。',
                        'type' => 'object',
                        'properties' => [
                            'instanceType' => [
                                'title' => 'GPU渲染实例规格',
                                'description' => 'GPU渲染实例规格。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'ecs.gn7i-c8g1.2xlarge',
                            ],
                            'imageId' => [
                                'title' => 'GPU渲染实例镜像ID',
                                'description' => 'GPU渲染实例镜像ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'm-foobar',
                            ],
                            'tcpPortRange' => [
                                'title' => 'GPU渲染实例安全组开放的TCP协议端口范围',
                                'description' => 'GPU渲染实例安全组开放的TCP协议端口范围。',
                                'type' => 'array',
                                'items' => [
                                    'title' => '',
                                    'description' => 'TCP协议的端口范围。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '80/80',
                                ],
                                'required' => false,
                            ],
                            'udpPortRange' => [
                                'title' => 'GPU渲染实例安全组开放的UDP协议端口范围',
                                'description' => 'GPU渲染实例安全组开放的UDP协议端口范围。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'UDP协议的端口范围。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '13000/13002',
                                ],
                                'required' => false,
                            ],
                            'sourceCidrIp' => [
                                'title' => 'GPU渲染实例源端IPv4 CIDR地址块',
                                'description' => 'GPU渲染实例源端IPv4 CIDR地址块。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '0.0.0.0/0',
                            ],
                            'diskPerformanceLevel' => [
                                'title' => 'GPU渲染实例磁盘性能级别',
                                'description' => 'GPU渲染实例磁盘性能级别。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'PL0',
                                'enum' => [
                                    'PL0',
                                    'PL1',
                                ],
                            ],
                            'password' => [
                                'title' => 'GPU渲染实例密码',
                                'description' => 'GPU渲染实例密码。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'MyPassword',
                            ],
                            'internetBandwidthOut' => [
                                'title' => 'GPU渲染实例公网出向带宽',
                                'description' => 'GPU渲染实例公网出向带宽。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '100',
                            ],
                            'diskSizeGigabytes' => [
                                'title' => 'GPU渲染实例系统盘空间',
                                'description' => 'GPU渲染实例系统盘空间。单位为GB。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '100',
                            ],
                            'vpcId' => [
                                'title' => '专有网络ID',
                                'description' => '专有网络ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'v-xxxx',
                            ],
                            'vswId' => [
                                'title' => '交换机ID',
                                'description' => '交换机ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'vsw-xxxx',
                            ],
                            'sgId' => [
                                'title' => '安全组ID',
                                'description' => '安全组ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'sg-xxxx',
                            ],
                            'role' => [
                                'title' => '用户角色',
                                'description' => '用户角色。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'acs:ram::1234567890:role/fc-test',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '调用开始日期，格式为**EEE,d MMM yyyy HH:mm:ss GMT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Sat, 14 Jul 2017 07:02:38 GMT',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '自定义请求ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test-trace-id',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'publicIp' => [
                                'title' => 'Id of the request',
                                'description' => '公网IP地址。',
                                'type' => 'string',
                                'example' => '0.0.0.0',
                            ],
                            'instanceId' => [
                                'description' => '实例ID。',
                                'type' => 'string',
                                'example' => 'i-xxx',
                            ],
                            'createdTime' => [
                                'description' => '实例创建时间。',
                                'type' => 'string',
                                'example' => '2022-11-11 07:31:04.899465017 +0000 UTC m=+37.671563424',
                            ],
                        ],
                    ],
                ],
                400 => [],
                403 => [],
                [],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"publicIp\\": \\"0.0.0.0\\",\\n  \\"instanceId\\": \\"i-xxx\\",\\n  \\"createdTime\\": \\"2022-11-11 07:31:04.899465017 +0000 UTC m=+37.671563424\\"\\n}","type":"json"}]',
            'title' => '获取GPU渲染实例【已废弃】',
        ],
        'ReleaseGPUInstance' => [
            'summary' => '释放GPU渲染实例。该API已废弃，不建议继续使用。',
            'path' => '/2021-04-06/gpuInstances/{instanceId}',
            'methods' => [
                'delete',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '您的阿里云账号（主账号）ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '188077086902****',
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'description' => '调用开始日期，格式为EEE,d MMM yyyy HH:mm:ss GMT。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2022-11-11 07:31:04.899465017 +0000 UTC m=+37.671563424',
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'description' => '自定义请求ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test-trace-id',
                    ],
                ],
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'i-xxx',
                    ],
                ],
            ],
            'responses' => [
                204 => [],
                403 => [],
                [],
                409 => [],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '释放GPU渲染实例【已废弃】',
            'responseParamsDescription' => '无。',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'ap-northeast-2',
            'endpoint' => 'fc.ap-northeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'fc.cn-qingdao.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'fc.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'fc.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'fc.cn-huhehaote.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'fc.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'fc.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'fc.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'fc.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'fc.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'fc.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'fc.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'fc.ap-southeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'fc.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'fc.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'fc.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'fc.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'fc.eu-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'fc.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'fc.ap-south-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'account-id.cn-hangzhou-finance.fc.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-7',
            'endpoint' => 'fc.ap-southeast-7.aliyuncs.com',
        ],
    ],
];
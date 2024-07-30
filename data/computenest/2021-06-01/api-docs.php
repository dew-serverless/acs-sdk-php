<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'ComputeNest',
        'version' => '2021-06-01',
    ],
    'directories' => [
        'CreateServiceInstance',
        'DeleteServiceInstances',
        'ContinueDeployServiceInstance',
        'GetServiceInstance',
        'ListServiceInstanceLogs',
        'ListServiceInstanceResources',
        'ListServiceInstances',
        'ChangeResourceGroup',
        'GetServiceTemplateParameterConstraints',
        'StartServiceInstance',
        'StopServiceInstance',
        'RestartServiceInstance',
        'UpdateServiceInstanceSpec',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreateServiceInstance' => [
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '36939',
                'abilityTreeNodes' => [
                    'FEATUREcomputenestVIKWP9',
                    'FEATUREcomputenestVUFVAC',
                    'FEATUREcomputenestZFWIMH',
                    'FEATUREcomputenestQKB5Y7',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。可能的值：'."\n"
                            ."\n"
                            .'- cn-hangzhou：华东1（杭州） 。'."\n"
                            ."\n"
                            .'- ap-southeast-1：新加坡。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务实例名称。格式要求如下：'."\n"
                            ."\n"
                            .'- 长度不超过64个字符。'."\n"
                            ."\n"
                            .'- 必须以数字或英文字母开头，可包含数字、英文字母、短划线（-）和下划线（_）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TestName',
                    ],
                ],
                [
                    'name' => 'ServiceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'service-0e6fca6a51a54420****',
                    ],
                ],
                [
                    'name' => 'ServiceVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务版本。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Parameters',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '用户实例部署的参数。'."\n"
                            ."\n"
                            .'> 若服务实例包含部署地域信息，需在部署参数中填写。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{'."\n"
                            .'      "RegionId": "cn-hangzhou"'."\n"
                            .'      "NodeCount": 3,'."\n"
                            .'      "SystemDiskSize": 40,'."\n"
                            .'      "InstancePassword": "******"'."\n"
                            .'}',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'EnableInstanceOps',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务实例是否有代运维功能。取值范围：'."\n"
                            ."\n"
                            .'- true：服务实例有代运维功能。'."\n"
                            ."\n"
                            .'- false：服务实例没有代运维功能。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'TemplateName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板名称，服务支持多模板时需要指定模板名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '模板1',
                    ],
                ],
                [
                    'name' => 'OperationMetadata',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '代运维配置。',
                        'type' => 'object',
                        'properties' => [
                            'StartTime' => [
                                'description' => '运维开始时间，只在纯代运维模式下有效。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '2021-12-29T06:48:56Z',
                            ],
                            'EndTime' => [
                                'description' => '运维结束时间，只在纯代运维模式下有效。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '2022-01-28T06:48:56Z',
                            ],
                            'Resources' => [
                                'description' => '导入的资源列表。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '{   "RegionId": "cn-hangzhou",   "Type": "ResourceIds",   "ResourceIds": {     "ALIYUN::ECS::INSTANCE": ["i-xxx", "i-yyy"],     "ALIYUN::RDS::INSTANCE": ["rm-xxx", "rm-yyy"],     "ALIYUN::VPC::VPC": ["vpc-xxx", "vpc-yyy"],     "ALIYUN::SLB::INSTANCE": ["lb-xxx", "lb-yyy"]   } }',
                            ],
                            'ServiceInstanceId' => [
                                'description' => '导入的服务实例ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'si-d6ab3a63ccbb4b17****',
                            ],
                            'ExtraInfo' => [
                                'description' => '代运维服务附加信息。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '  ```json'."\n"
                                    .'  {'."\n"
                                    .'    "vncInfo": ['."\n"
                                    .'      {'."\n"
                                    .'        "instanceId": "i-001",'."\n"
                                    .'        "username": "admin",'."\n"
                                    .'        "password": "******",'."\n"
                                    .'        "vncPassword": "******"'."\n"
                                    .'      }'."\n"
                                    .'    ]'."\n"
                                    .'  }'."\n"
                                    .'  ```',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-bp67acfmxazb4p****',
                    ],
                ],
                [
                    'name' => 'ContactGroup',
                    'in' => 'query',
                    'schema' => [
                        'description' => '接收告警的云监控联系人组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '云账号报警联系人',
                    ],
                ],
                [
                    'name' => 'TrialType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前服务实例的类型。可选值：'."\n"
                            ."\n"
                            .'- Trial：支持试用。'."\n"
                            ."\n"
                            .'- NotTrial：不支持试用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Trial',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '用户自定义标签。',
                        'type' => 'array',
                        'items' => [
                            'description' => '用户自定义标签。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'key1',
                                ],
                                'Value' => [
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'value1',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'SpecificationName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '套餐规格名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '套餐一',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否对此次创建请求执行预检，包括权限、实例状态校验等。可能的值：'."\n"
                            ."\n"
                            .'- true：发送请求，不创建服务实例。'."\n"
                            ."\n"
                            .'- false：发送请求，检查通过后创建服务实例。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'SpecificationCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '商品规格码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'yuncode5425200001',
                    ],
                ],
                [
                    'name' => 'EnableUserPrometheus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否启用Prometheus监控，可能的值：'."\n"
                            ."\n"
                            .'- true：启用。'."\n"
                            ."\n"
                            .'- false：不启用。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'Commodity',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '云市场购买订单信息，服务未上云市场或按量计费不必传。',
                        'type' => 'object',
                        'properties' => [
                            'PayPeriodUnit' => [
                                'description' => '购买时间单位，可传值：'."\n"
                                    ."\n"
                                    .'- Year：年。'."\n"
                                    ."\n"
                                    .'- Month：月。'."\n"
                                    ."\n"
                                    .'- Day：日。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'Year',
                            ],
                            'PayPeriod' => [
                                'description' => '购买时间长度。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '1',
                            ],
                            'AutoRenew' => [
                                'description' => '是否开启自动续费，取值：'."\n"
                                    .'* **true**：开启。'."\n"
                                    .'* **false**：不开启。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                            ],
                            'AutoPay' => [
                                'description' => '订单是否自动支付。取值：'."\n"
                                    ."\n"
                                    .'- **true**：自动支付。'."\n"
                                    .'- **false**：不自动支付。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '服务实例状态。可能值：'."\n"
                                    ."\n"
                                    .'- Created：已创建。'."\n"
                                    ."\n"
                                    .'- Deploying：部署中。'."\n"
                                    ."\n"
                                    .'- DeployedFailed：部署失败。'."\n"
                                    ."\n"
                                    .'- Deployed：已部署。'."\n"
                                    ."\n"
                                    .'- Upgrading：升级中。'."\n"
                                    ."\n"
                                    .'- Deleting：删除中。'."\n"
                                    ."\n"
                                    .'- Deleted：已删除。'."\n"
                                    ."\n"
                                    .'- DeletedFailed：删除失败。',
                                'type' => 'string',
                                'example' => 'Created',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4DB0F536-B3BE-4F0D-BD29-E83FB56D****',
                            ],
                            'ServiceInstanceId' => [
                                'description' => '服务实例ID。',
                                'type' => 'string',
                                'example' => 'si-d6ab3a63ccbb4b17****',
                            ],
                            'MarketInstanceId' => [
                                'description' => '云市场实例ID。',
                                'type' => 'string',
                                'example' => '786***45',
                            ],
                            'OrderId' => [
                                'description' => '订单ID。',
                                'type' => 'string',
                                'example' => '2306175xxxxxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"Created\\",\\n  \\"RequestId\\": \\"4DB0F536-B3BE-4F0D-BD29-E83FB56D****\\",\\n  \\"ServiceInstanceId\\": \\"si-d6ab3a63ccbb4b17****\\",\\n  \\"MarketInstanceId\\": \\"786***45\\",\\n  \\"OrderId\\": \\"2306175xxxxxxxx\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateServiceInstanceResponse>\\n    <Status>Created</Status>\\n    <RequestId>4DB0F536-B3BE-4F0D-BD29-E83FB56D****</RequestId>\\n    <ServiceInstanceId>si-d6ab3a63ccbb4b17****</ServiceInstanceId>\\n</CreateServiceInstanceResponse>","errorExample":""}]',
            'title' => '创建并部署服务实例',
            'summary' => '创建并部署服务实例。',
        ],
        'DeleteServiceInstances' => [
            'summary' => '调用DeleteServiceInstances删除服务实例。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
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
                    'name' => 'ServiceInstanceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '服务实例ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '服务实例ID。N的取值范围：1~100。'."\n"
                                ."\n"
                                .'> 若要删除多个服务实例，服务实例间用&&隔开。例如：ServiceInstanceId.1=xxx&&ServiceInstanceId.2=yyy。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'si-d6ab3a63ccbb4b17****',
                        ],
                        'required' => true,
                        'maxItems' => 100,
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
                                'example' => '4DB0F536-B3BE-4F0D-BD29-E83FB56D550C',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4DB0F536-B3BE-4F0D-BD29-E83FB56D550C\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteServiceInstancesResponse>\\n    <RequestId>4DB0F536-B3BE-4F0D-BD29-E83FB56D550C</RequestId>\\n</DeleteServiceInstancesResponse>","errorExample":""}]',
            'title' => '删除服务实例',
        ],
        'ContinueDeployServiceInstance' => [
            'summary' => '服务实例部署失败后，调用ContinueDeployServiceInstance继续部署该服务实例。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'ServiceInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'si-0e6fca6a51a54420****',
                    ],
                ],
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
                    'name' => 'Parameters',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务实例配置参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"NodeCount": 3, "SystemDiskSize": 40, "InstancePassword": "******"}',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否对此次创建请求执行预检，包括权限、实例状态校验等。可能的值：'."\n"
                            ."\n"
                            .'- true：发送请求，不创建服务实例。'."\n"
                            ."\n"
                            .'- false：发送请求，检查通过后创建服务实例。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'Option',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '重新创建选项。',
                        'type' => 'array',
                        'items' => [
                            'description' => '重新创建选项。可能的值：'."\n"
                                ."\n"
                                .'- TryToFixSignalFailureByRerunEcsCommand：尝试修复已存在的信号失败。当ALIYUN::ROS::WaitCondition类型资源创建失败时，找到与之关联且创建成功的ALIYUN::ECS::RunCommand和ALIYUN::ECS::Invocation类型的资源，对这些资源及依赖其的资源进行重建。'."\n"
                                ."\n"
                                .'- IgnoreExistingSignalFailure：忽略已存在的信号失败。如果之前存在创建失败的ALIYUN::ROS::WaitCondition类型的资源，新一次的创建过程中会直接创建成功。'."\n"
                                ."\n"
                                .'- AutoRecreatingResources：自动重新创建模板内容或引用参数发生变化的资源，包括依赖其的资源。使用该选项，可以简化RecreatingResources.N参数的设置，但也可能造成意料之外的资源重建。'."\n"
                                ."\n"
                                .'> 仅对ROS类型的资源栈生效。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'TryToFixSignalFailureByRerunEcsCommand',
                        ],
                        'required' => false,
                        'maxItems' => 10,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4DB0F536-B3BE-4F0D-BD29-E83FB56D550C',
                            ],
                            'DryRunResult' => [
                                'description' => '校验结果。',
                                'type' => 'object',
                                'properties' => [
                                    'ParametersNotAllowedToBeModified' => [
                                        'description' => '不允许修改的参数。修改参数一定会引发校验错误。'."\n"
                                            .'> 仅在DryRun为true时返回结果。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '不允许修改的参数。修改参数一定会引发校验错误。'."\n"
                                                .'> 仅在DryRun为true时返回结果。',
                                            'type' => 'string',
                                            'example' => 'cidr',
                                        ],
                                    ],
                                    'ParametersConditionallyAllowedToBeModified' => [
                                        'description' => '可能允许修改的参数。'."\n"
                                            .'修改参数是否引起校验错误，取决于参数的取值。'."\n"
                                            .'> 仅在DryRun为true时返回结果。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '可能允许修改的参数。'."\n"
                                                .'修改参数是否引起校验错误，取决于参数的取值。'."\n"
                                                .'> 仅在DryRun为true时返回结果。',
                                            'type' => 'string',
                                            'example' => 'name',
                                        ],
                                    ],
                                    'ParametersAllowedToBeModified' => [
                                        'description' => '允许修改的参数。修改参数不会引发校验错误。'."\n"
                                            .'> 仅在DryRun为true时返回值。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '允许修改的参数。修改参数不会引发校验错误。'."\n"
                                                .'> 仅在DryRun为true时返回值。',
                                            'type' => 'string',
                                            'example' => 'description',
                                        ],
                                    ],
                                ],
                            ],
                            'ServiceInstanceId' => [
                                'description' => '服务实例ID。',
                                'type' => 'string',
                                'example' => 'si-d6ab3a63ccbb4b17****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4DB0F536-B3BE-4F0D-BD29-E83FB56D550C\\",\\n  \\"DryRunResult\\": {\\n    \\"ParametersNotAllowedToBeModified\\": [\\n      \\"cidr\\"\\n    ],\\n    \\"ParametersConditionallyAllowedToBeModified\\": [\\n      \\"name\\"\\n    ],\\n    \\"ParametersAllowedToBeModified\\": [\\n      \\"description\\"\\n    ]\\n  },\\n  \\"ServiceInstanceId\\": \\"si-d6ab3a63ccbb4b17****\\"\\n}","errorExample":""},{"type":"xml","example":"<ContinueDeployServiceInstanceResponse>\\n    <RequestId>4DB0F536-B3BE-4F0D-BD29-E83FB56D550C</RequestId>\\n</ContinueDeployServiceInstanceResponse>","errorExample":""}]',
            'title' => '继续部署服务实例',
            'description' => '待部署服务实例的服务类型为private、部署类型为ros时，部署失败后可调用ContinueDeployServiceInstance继续部署该服务实例。',
        ],
        'GetServiceInstance' => [
            'summary' => '查询指定服务实例的详细信息。',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ServiceInstanceId',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '服务实例ID。'."\n"
                            .'>输入参数时， `ServiceInstanceId`或`MarketInstanceId`其中一个参数必须填写，否则将无法查询服务实例的详细信息。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'si-d6ab3a63ccbb4b17****',
                    ],
                ],
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
                    'name' => 'MarketInstanceId',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '云市场实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '704***59',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Outputs' => [
                                'description' => '创建服务实例返回的输出字段。'."\n"
                                    ."\n"
                                    .'- ROS模式下，返回模板所有输出字段。'."\n"
                                    ."\n"
                                    .'- SPI模式下，返回ISV输出字段和计算巢附加功能输出字段。',
                                'type' => 'string',
                                'example' => '{"InstanceIds":["i-hp38ofxl0dsyfi7z****"]}',
                            ],
                            'Status' => [
                                'description' => '服务实例的部署状态。可能值：'."\n"
                                    ."\n"
                                    .'- Created：已创建。'."\n"
                                    ."\n"
                                    .'- Deploying：部署中。'."\n"
                                    ."\n"
                                    .'- DeployedFailed：部署失败。'."\n"
                                    ."\n"
                                    .'- Deployed：已部署。'."\n"
                                    ."\n"
                                    .'- Upgrading：升级中。'."\n"
                                    ."\n"
                                    .'- Deleting：删除中。'."\n"
                                    ."\n"
                                    .'- Deleted：已删除。'."\n"
                                    ."\n"
                                    .'- DeletedFailed：删除失败。',
                                'type' => 'string',
                                'example' => 'Deployed',
                            ],
                            'TemplateName' => [
                                'description' => '模板名称。',
                                'type' => 'string',
                                'example' => '模板1',
                            ],
                            'UpdateTime' => [
                                'description' => '更新时间。',
                                'type' => 'string',
                                'example' => '2021-05-20T00:00:00Z',
                            ],
                            'Progress' => [
                                'description' => '服务实例的部署进度，单位：%。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '90',
                            ],
                            'Parameters' => [
                                'description' => '部署服务实例输入的参数。',
                                'type' => 'string',
                                'example' => '{"param":"value"}',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4DB0F536-B3BE-4F0D-BD29-E83FB56D550C',
                            ],
                            'ServiceInstanceId' => [
                                'description' => '服务实例ID。',
                                'type' => 'string',
                                'example' => 'si-d6ab3a63ccbb4b17****',
                            ],
                            'CreateTime' => [
                                'description' => '创建时间。',
                                'type' => 'string',
                                'example' => '2021-05-20T00:00:00Z',
                            ],
                            'StatusDetail' => [
                                'description' => '部署实例的状态描述。',
                                'type' => 'string',
                                'example' => 'deploy successfully',
                            ],
                            'Resources' => [
                                'description' => '资源列表。',
                                'type' => 'string',
                                'example' => '[{"StackId": "stack-xxx"}]',
                            ],
                            'Service' => [
                                'description' => '服务详情。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '服务状态。可能的值：'."\n"
                                            ."\n"
                                            .'- Draft：待提交注册。'."\n"
                                            ."\n"
                                            .'- Submited：已提交注册。'."\n"
                                            ."\n"
                                            .'- Approved：已通过注册审核。'."\n"
                                            ."\n"
                                            .'- Online：已上线。'."\n"
                                            ."\n"
                                            .'- Offline：已下线。'."\n"
                                            ."\n"
                                            .'- Deleted：已删除。'."\n"
                                            ."\n"
                                            .'- Launching：服务上线中。',
                                        'type' => 'string',
                                        'example' => 'Online',
                                    ],
                                    'PublishTime' => [
                                        'description' => '发布时间。',
                                        'type' => 'string',
                                        'example' => '2021-05-21T00:00:00Z',
                                    ],
                                    'Version' => [
                                        'description' => '服务版本。',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'DeployMetadata' => [
                                        'description' => '存储服务部署配置的信息。存储的信息与部署类型有关，不同的部署类型存储的数据格式不一样，因此使用JSON String格式进行数据存储。 ',
                                        'type' => 'string',
                                        'example' => '{"EstimateTime":null,"SupplierDeployMetadata":{"DeployTimeout":null},"TemplateConfigs":[{"Name":"模板1","Url":"https://service-info-private.oss-cn-hangzhou.aliyuncs.com/130920852836****/template/af11ec5a-09a0-4aa7-970c-09b51e2a****.json","PredefinedParameters":[],"AllowedRegions":["cn-hangzhou"]}]}',
                                    ],
                                    'DeployType' => [
                                        'description' => '部署类型。可能值：'."\n"
                                            ."\n"
                                            .'- ros：通过ROS部署。'."\n"
                                            ."\n"
                                            .'- terraform：通过Terraform部署。'."\n"
                                            ."\n"
                                            .'- ack：通过ACK部署。'."\n"
                                            ."\n"
                                            .'- spi：调用SPI部署。'."\n"
                                            ."\n"
                                            .'- operation：代运维服务部署。',
                                        'type' => 'string',
                                        'example' => 'ros',
                                    ],
                                    'ServiceId' => [
                                        'description' => '服务ID。',
                                        'type' => 'string',
                                        'example' => 'service-9c8a3522528b4fe8****',
                                    ],
                                    'SupplierUrl' => [
                                        'description' => '服务商地址。',
                                        'type' => 'string',
                                        'example' => 'http://example.com',
                                    ],
                                    'ServiceType' => [
                                        'description' => '服务类型。可能值：'."\n"
                                            ."\n"
                                            .'- private：部署在用户账户下。'."\n"
                                            ."\n"
                                            .'- managed：托管在服务商账户下。'."\n"
                                            ."\n"
                                            .'- operation：代运维服务。',
                                        'type' => 'string',
                                        'example' => 'private',
                                    ],
                                    'SupplierName' => [
                                        'description' => '服务商名称。',
                                        'type' => 'string',
                                        'example' => 'A公司',
                                    ],
                                    'ServiceInfos' => [
                                        'description' => '服务信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '服务信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Locale' => [
                                                    'description' => '服务实例语言。',
                                                    'type' => 'string',
                                                    'example' => 'zh-CN',
                                                ],
                                                'Image' => [
                                                    'description' => '服务图标地址。',
                                                    'type' => 'string',
                                                    'example' => 'https://example.com/service-image/c1c4a559-cc60-4af1-b976-98f356602462.png',
                                                ],
                                                'Name' => [
                                                    'description' => '服务名称。',
                                                    'type' => 'string',
                                                    'example' => 'B数据库',
                                                ],
                                                'ShortDescription' => [
                                                    'description' => '服务概述。',
                                                    'type' => 'string',
                                                    'example' => 'B是A公司自主设计并研发的开源分布式的关系型数据库',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'VersionName' => [
                                        'description' => '服务商自定义版本名称。',
                                        'type' => 'string',
                                        'example' => '版本A',
                                    ],
                                    'UpgradeMetadata' => [
                                        'description' => '升级元数据。',
                                        'type' => 'string',
                                        'example' => '{'."\n"
                                            .'  "Type": "OOS",'."\n"
                                            .'  "Description": "Changelog or something description",'."\n"
                                            .'  "SupportUpgradeFromVersions": [1, 2],'."\n"
                                            .'  "UpgradeSteps": {'."\n"
                                            .'    "PreUpgradeStage": {'."\n"
                                            .'      "Description": "初始化数据库",'."\n"
                                            .'      "Type": "RunCommand",'."\n"
                                            .'      "ResourceName": "EcsRole1",'."\n"
                                            .'      "CommandType": "runShellScript",'."\n"
                                            .'      "CommandContent": "echo hello"'."\n"
                                            .'    },'."\n"
                                            .'    "UpgradeStage": [{'."\n"
                                            .'      "Description": "更新EcsRole1实例",'."\n"
                                            .'      "Type": "RunCommand",'."\n"
                                            .'      "ResourceName": "EcsRole1",'."\n"
                                            .'      "ArtifactsDownloadDirectory": "/home/admin",'."\n"
                                            .'      "CommandType": "runShellScript",'."\n"
                                            .'      "CommandContent": "echo hello"'."\n"
                                            .'    }],'."\n"
                                            .'    "PostUpgradeStage": {'."\n"
                                            .'      "Description": "部署后post check",'."\n"
                                            .'      "Type": "None/RunCommand",'."\n"
                                            .'      "ResourceName": "EcsRole1",'."\n"
                                            .'      "CommandType": "runShellScript",'."\n"
                                            .'      "CommandContent": "echo hello"'."\n"
                                            .'    }'."\n"
                                            .'  }'."\n"
                                            .'}',
                                    ],
                                    'UpgradableServiceVersions' => [
                                        'description' => '可升级的服务版本列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '可升级的服务版本号。',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                    ],
                                    'ServiceProductUrl' => [
                                        'description' => '产品页URL。',
                                        'type' => 'string',
                                        'example' => 'https://service-info-private.oss-cn-hangzhou.aliyuncs.com',
                                    ],
                                    'ServiceDocUrl' => [
                                        'description' => '产品文档的URL。',
                                        'type' => 'string',
                                        'example' => 'http://example.com',
                                    ],
                                ],
                            ],
                            'OperationStartTime' => [
                                'description' => '代运维开始时间。',
                                'type' => 'string',
                                'example' => '2021-12-29T06:48:56Z',
                            ],
                            'OperationEndTime' => [
                                'description' => '代运维结束时间。',
                                'type' => 'string',
                                'example' => '2022-01-28T06:48:56Z',
                            ],
                            'OperatedServiceInstanceId' => [
                                'description' => '被代运维的服务实例ID。',
                                'type' => 'string',
                                'example' => 'si-d6ab3a63ccbb4b17****',
                            ],
                            'EnableInstanceOps' => [
                                'description' => '服务实例是否有代运维功能。可能的值：'."\n"
                                    ."\n"
                                    .'- true：服务实例有代运维功能。'."\n"
                                    ."\n"
                                    .'- false：服务实例没有代运维功能。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'IsOperated' => [
                                'description' => '服务实例的代运维功能是否开启。可能的值：'."\n"
                                    ."\n"
                                    .'- true：服务实例的代运维功能已开启。'."\n"
                                    ."\n"
                                    .'- false：服务实例的代运维功能未开启。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'NetworkConfig' => [
                                'description' => '网络配置信息。'."\n"
                                    ."\n"
                                    .'> 该参数已废弃。'."\n",
                                'type' => 'object',
                                'properties' => [
                                    'EndpointId' => [
                                        'description' => '私网连接的终端节点ID。'."\n"
                                            ."\n"
                                            .'> 该参数已废弃。',
                                        'type' => 'string',
                                        'example' => 'ep-m5ei37240541816b****',
                                    ],
                                    'PrivateZoneId' => [
                                        'description' => '自定义私网域名云解析privatezone的ID。'."\n"
                                            ."\n"
                                            .'> 该参数已废弃。',
                                        'type' => 'string',
                                        'example' => 'cb7f214f80ac348d87daaeac1f35****',
                                    ],
                                    'PrivateVpcConnections' => [
                                        'description' => '私网连接信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '私网连接信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'EndpointId' => [
                                                    'description' => '私网连接的终端节点ID。',
                                                    'type' => 'string',
                                                    'example' => 'ep-m5ei37240541816b****',
                                                ],
                                                'PrivateZoneId' => [
                                                    'description' => '自定义私网域名云解析privatezone的ID。',
                                                    'type' => 'string',
                                                    'example' => 'cb7f214f80ac348d87daaeac1f35****',
                                                ],
                                                'PrivateZoneName' => [
                                                    'description' => '自定义域名。',
                                                    'type' => 'string',
                                                    'example' => 'test.computenest.aliyuncs.com',
                                                ],
                                                'ConnectionConfigs' => [
                                                    'description' => '网络配置信息。'."\n"
                                                        .'主要用于私网连接。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '网络配置信息。'."\n"
                                                            .'主要用于私网连接。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'VpcId' => [
                                                                'description' => '专有网络ID。',
                                                                'type' => 'string',
                                                                'example' => 'vpc-bp1vwnn14rqpyiczj****',
                                                            ],
                                                            'SecurityGroups' => [
                                                                'description' => '安全组名称。',
                                                                'type' => 'array',
                                                                'items' => [
                                                                    'description' => '安全组名称。',
                                                                    'type' => 'string',
                                                                    'example' => '\'sg-m5ec4mvoq9egn7xxxxxx',
                                                                ],
                                                            ],
                                                            'VSwitches' => [
                                                                'description' => '虚拟交换机名称。',
                                                                'type' => 'array',
                                                                'items' => [
                                                                    'description' => '虚拟交换机名称。',
                                                                    'type' => 'string',
                                                                    'example' => 'vsw-uf6iqwohr05dw4mxxxxxx',
                                                                ],
                                                            ],
                                                            'IngressEndpointStatus' => [
                                                                'description' => 'IngressEndpoint状态。可能的值：'."\n"
                                                                    ."\n"
                                                                    .'- Ready（已连接）。'."\n"
                                                                    ."\n"
                                                                    .'- Pending（连接中）。'."\n"
                                                                    ."\n"
                                                                    .'- Failed（连接失败）。'."\n"
                                                                    ."\n"
                                                                    .'- Deleted（已删除）。'."\n"
                                                                    ."\n"
                                                                    .'- Deleting（删除中）。',
                                                                'type' => 'string',
                                                                'example' => 'Ready',
                                                            ],
                                                            'NetworkServiceStatus' => [
                                                                'description' => 'NetworkServiceStatus状态。可能的值：'."\n"
                                                                    ."\n"
                                                                    .'- Ready（已连接）。'."\n"
                                                                    ."\n"
                                                                    .'- Pending（连接中）。'."\n"
                                                                    ."\n"
                                                                    .'- Failed（连接失败）。'."\n"
                                                                    ."\n"
                                                                    .'- Deleted（已删除）。'."\n"
                                                                    ."\n"
                                                                    .'- Deleting（删除中）。',
                                                                'type' => 'string',
                                                                'example' => 'Ready',
                                                            ],
                                                            'EndpointIps' => [
                                                                'description' => '私网连接终端节点IP。',
                                                                'type' => 'array',
                                                                'items' => [
                                                                    'description' => '私网连接终端节点IP。',
                                                                    'type' => 'string',
                                                                    'example' => '192.xxx.xxx.xxx',
                                                                ],
                                                            ],
                                                            'DomainName' => [
                                                                'description' => '域名名称。',
                                                                'type' => 'string',
                                                                'example' => 'ie-569a9be34f5534f6bc6559b5c1xxxxxx.service-51f80502802e48xxxxxx.cn-hangzhou.computenest.aliyuncs.com',
                                                            ],
                                                            'RegionId' => [
                                                                'description' => '基于计算巢内网互联模式构建私网互联时，终端节点所在VPC的地域。',
                                                                'type' => 'string',
                                                                'example' => 'cn-beijing',
                                                            ],
                                                            'ConnectBandwidth' => [
                                                                'description' => '使用计算巢内网互联建立连接的限速带宽。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '1536Mbps',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'RegionId' => [
                                                    'description' => '基于PrivateLink构建私网连接时终端节点所在的地域ID。',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'ReversePrivateVpcConnections' => [
                                        'description' => '反向私网连接信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '反向私网连接信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'EndpointId' => [
                                                    'description' => '反向私网连接的终端节点ID。',
                                                    'type' => 'string',
                                                    'example' => 'ep-m5ei42370541816b****',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Tags' => [
                                'description' => '用户自定义标签。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '用户自定义标签。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Key' => [
                                            'description' => '标签键。',
                                            'type' => 'string',
                                            'example' => 'key1',
                                        ],
                                        'Value' => [
                                            'description' => '标签值。',
                                            'type' => 'string',
                                            'example' => 'value1',
                                        ],
                                    ],
                                ],
                            ],
                            'LicenseEndTime' => [
                                'description' => '许可到期时间。',
                                'type' => 'string',
                                'example' => '2022-01-01T12:00:00',
                            ],
                            'UserId' => [
                                'description' => '用户的AliUid。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '130920852836****',
                            ],
                            'SupplierUid' => [
                                'description' => '服务商AliUid。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '158927391332*****',
                            ],
                            'EndTime' => [
                                'description' => '服务实例过期时间。',
                                'type' => 'string',
                                'example' => '2022-01-01T12:00:00',
                            ],
                            'Source' => [
                                'description' => '服务实例来源。可能的值：'."\n"
                                    ."\n"
                                    .'- User：计算巢用户。'."\n"
                                    ."\n"
                                    .'- Market：云市场。'."\n"
                                    ."\n"
                                    .'- Supplier：计算巢服务商。',
                                'type' => 'string',
                                'example' => 'User',
                            ],
                            'ServiceType' => [
                                'description' => '服务类型。可能的值：'."\n"
                                    ."\n"
                                    .'- private：部署在用户账户下的服务实例。'."\n"
                                    ."\n"
                                    .'- managed：托管在服务商账户下的服务实例。'."\n"
                                    ."\n"
                                    .'- operation：代运维服务实例'."\n"
                                    ."\n"
                                    .'- poc：试用服务实例。',
                                'type' => 'string',
                                'example' => 'private',
                            ],
                            'PayType' => [
                                'description' => '付费类型。取值范围：'."\n"
                                    ."\n"
                                    .'- Permanent：永久购买。'."\n"
                                    ."\n"
                                    .'- Subscription：云市场包年包月。'."\n"
                                    ."\n"
                                    .'- PayAsYouGo：云市场按量付费。'."\n"
                                    ."\n"
                                    .'- CustomFixTime：商家自定义固定时长。'."\n",
                                'type' => 'string',
                                'example' => 'Subscription',
                            ],
                            'Name' => [
                                'description' => '服务实例名称。',
                                'type' => 'string',
                                'example' => 'TestName',
                            ],
                            'EnableUserPrometheus' => [
                                'description' => '是否启用Prometheus监控。可能的值：'."\n"
                                    ."\n"
                                    .'- true：启用。'."\n"
                                    ."\n"
                                    .'- false：不启用。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Components' => [
                                'description' => '云市场额外计费项。',
                                'type' => 'string',
                                'example' => '{"TiKVServerCount":"3","package_version":"yuncode5398300001","PDServerCount":"3","TiDBServerCount":"2"}',
                            ],
                            'PredefinedParameterName' => [
                                'description' => '套餐名称。',
                                'type' => 'string',
                                'example' => '套餐一',
                            ],
                            'MarketInstanceId' => [
                                'description' => '云市场实例ID。',
                                'type' => 'string',
                                'example' => '704***59',
                            ],
                            'ResourceGroupId' => [
                                'description' => '资源组ID。',
                                'type' => 'string',
                                'example' => 'rg-bp67acfmxazb4p****',
                            ],
                            'BizStatus' => [
                                'description' => '服务实例的业务状态。可能的值：'."\n"
                                    ."\n"
                                    .'- Normal：正常。'."\n"
                                    ."\n"
                                    .'- Renewing：续费中。'."\n"
                                    ."\n"
                                    .'- RenewFoiled：续费失败。'."\n"
                                    ."\n"
                                    .'- Expired：已过期。',
                                'type' => 'string',
                                'example' => 'Normal',
                            ],
                            'GrafanaDashBoardUrl' => [
                                'description' => 'grafana大盘链接。',
                                'type' => 'string',
                                'example' => 'https://g.console.aliyun.com/d/xxxxxxxx-cn-mariadb/mysql-xxxxxx-xxxxxxxx-and-dashboard?orgId=355401&refresh=10s',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Outputs\\": \\"{\\\\\\"InstanceIds\\\\\\":[\\\\\\"i-hp38ofxl0dsyfi7z****\\\\\\"]}\\",\\n  \\"Status\\": \\"Deployed\\",\\n  \\"TemplateName\\": \\"模板1\\",\\n  \\"UpdateTime\\": \\"2021-05-20T00:00:00Z\\",\\n  \\"Progress\\": 90,\\n  \\"Parameters\\": \\"{\\\\\\"param\\\\\\":\\\\\\"value\\\\\\"}\\",\\n  \\"RequestId\\": \\"4DB0F536-B3BE-4F0D-BD29-E83FB56D550C\\",\\n  \\"ServiceInstanceId\\": \\"si-d6ab3a63ccbb4b17****\\",\\n  \\"CreateTime\\": \\"2021-05-20T00:00:00Z\\",\\n  \\"StatusDetail\\": \\"deploy successfully\\",\\n  \\"Resources\\": \\"[{\\\\\\"StackId\\\\\\": \\\\\\"stack-xxx\\\\\\"}]\\",\\n  \\"Service\\": {\\n    \\"Status\\": \\"Online\\",\\n    \\"PublishTime\\": \\"2021-05-21T00:00:00Z\\",\\n    \\"Version\\": \\"1\\",\\n    \\"DeployMetadata\\": \\"{\\\\\\"EstimateTime\\\\\\":null,\\\\\\"SupplierDeployMetadata\\\\\\":{\\\\\\"DeployTimeout\\\\\\":null},\\\\\\"TemplateConfigs\\\\\\":[{\\\\\\"Name\\\\\\":\\\\\\"模板1\\\\\\",\\\\\\"Url\\\\\\":\\\\\\"https://service-info-private.oss-cn-hangzhou.aliyuncs.com/130920852836****/template/af11ec5a-09a0-4aa7-970c-09b51e2a****.json\\\\\\",\\\\\\"PredefinedParameters\\\\\\":[],\\\\\\"AllowedRegions\\\\\\":[\\\\\\"cn-hangzhou\\\\\\"]}]}\\",\\n    \\"DeployType\\": \\"ros\\",\\n    \\"ServiceId\\": \\"service-9c8a3522528b4fe8****\\",\\n    \\"SupplierUrl\\": \\"http://example.com\\",\\n    \\"ServiceType\\": \\"private\\",\\n    \\"SupplierName\\": \\"A公司\\",\\n    \\"ServiceInfos\\": [\\n      {\\n        \\"Locale\\": \\"zh-CN\\",\\n        \\"Image\\": \\"https://example.com/service-image/c1c4a559-cc60-4af1-b976-98f356602462.png\\",\\n        \\"Name\\": \\"B数据库\\",\\n        \\"ShortDescription\\": \\"B是A公司自主设计并研发的开源分布式的关系型数据库\\"\\n      }\\n    ],\\n    \\"VersionName\\": \\"版本A\\",\\n    \\"UpgradeMetadata\\": \\"{\\\\n  \\\\\\"Type\\\\\\": \\\\\\"OOS\\\\\\",\\\\n  \\\\\\"Description\\\\\\": \\\\\\"Changelog or something description\\\\\\",\\\\n  \\\\\\"SupportUpgradeFromVersions\\\\\\": [1, 2],\\\\n  \\\\\\"UpgradeSteps\\\\\\": {\\\\n    \\\\\\"PreUpgradeStage\\\\\\": {\\\\n      \\\\\\"Description\\\\\\": \\\\\\"初始化数据库\\\\\\",\\\\n      \\\\\\"Type\\\\\\": \\\\\\"RunCommand\\\\\\",\\\\n      \\\\\\"ResourceName\\\\\\": \\\\\\"EcsRole1\\\\\\",\\\\n      \\\\\\"CommandType\\\\\\": \\\\\\"runShellScript\\\\\\",\\\\n      \\\\\\"CommandContent\\\\\\": \\\\\\"echo hello\\\\\\"\\\\n    },\\\\n    \\\\\\"UpgradeStage\\\\\\": [{\\\\n      \\\\\\"Description\\\\\\": \\\\\\"更新EcsRole1实例\\\\\\",\\\\n      \\\\\\"Type\\\\\\": \\\\\\"RunCommand\\\\\\",\\\\n      \\\\\\"ResourceName\\\\\\": \\\\\\"EcsRole1\\\\\\",\\\\n      \\\\\\"ArtifactsDownloadDirectory\\\\\\": \\\\\\"/home/admin\\\\\\",\\\\n      \\\\\\"CommandType\\\\\\": \\\\\\"runShellScript\\\\\\",\\\\n      \\\\\\"CommandContent\\\\\\": \\\\\\"echo hello\\\\\\"\\\\n    }],\\\\n    \\\\\\"PostUpgradeStage\\\\\\": {\\\\n      \\\\\\"Description\\\\\\": \\\\\\"部署后post check\\\\\\",\\\\n      \\\\\\"Type\\\\\\": \\\\\\"None/RunCommand\\\\\\",\\\\n      \\\\\\"ResourceName\\\\\\": \\\\\\"EcsRole1\\\\\\",\\\\n      \\\\\\"CommandType\\\\\\": \\\\\\"runShellScript\\\\\\",\\\\n      \\\\\\"CommandContent\\\\\\": \\\\\\"echo hello\\\\\\"\\\\n    }\\\\n  }\\\\n}\\",\\n    \\"UpgradableServiceVersions\\": [\\n      \\"1\\"\\n    ],\\n    \\"ServiceProductUrl\\": \\"https://service-info-private.oss-cn-hangzhou.aliyuncs.com\\",\\n    \\"ServiceDocUrl\\": \\"http://example.com\\"\\n  },\\n  \\"OperationStartTime\\": \\"2021-12-29T06:48:56Z\\",\\n  \\"OperationEndTime\\": \\"2022-01-28T06:48:56Z\\",\\n  \\"OperatedServiceInstanceId\\": \\"si-d6ab3a63ccbb4b17****\\",\\n  \\"EnableInstanceOps\\": true,\\n  \\"IsOperated\\": true,\\n  \\"NetworkConfig\\": {\\n    \\"EndpointId\\": \\"ep-m5ei37240541816b****\\",\\n    \\"PrivateZoneId\\": \\"cb7f214f80ac348d87daaeac1f35****\\",\\n    \\"PrivateVpcConnections\\": [\\n      {\\n        \\"EndpointId\\": \\"ep-m5ei37240541816b****\\",\\n        \\"PrivateZoneId\\": \\"cb7f214f80ac348d87daaeac1f35****\\",\\n        \\"PrivateZoneName\\": \\"test.computenest.aliyuncs.com\\",\\n        \\"ConnectionConfigs\\": [\\n          {\\n            \\"VpcId\\": \\"vpc-bp1vwnn14rqpyiczj****\\",\\n            \\"SecurityGroups\\": [\\n              \\"\'sg-m5ec4mvoq9egn7xxxxxx\\"\\n            ],\\n            \\"VSwitches\\": [\\n              \\"vsw-uf6iqwohr05dw4mxxxxxx\\"\\n            ],\\n            \\"IngressEndpointStatus\\": \\"Ready\\",\\n            \\"NetworkServiceStatus\\": \\"Ready\\",\\n            \\"EndpointIps\\": [\\n              \\"192.xxx.xxx.xxx\\"\\n            ],\\n            \\"DomainName\\": \\"ie-569a9be34f5534f6bc6559b5c1xxxxxx.service-51f80502802e48xxxxxx.cn-hangzhou.computenest.aliyuncs.com\\",\\n            \\"RegionId\\": \\"cn-beijing\\",\\n            \\"ConnectBandwidth\\": 0\\n          }\\n        ],\\n        \\"RegionId\\": \\"cn-hangzhou\\"\\n      }\\n    ],\\n    \\"ReversePrivateVpcConnections\\": [\\n      {\\n        \\"EndpointId\\": \\"ep-m5ei42370541816b****\\"\\n      }\\n    ]\\n  },\\n  \\"Tags\\": [\\n    {\\n      \\"Key\\": \\"key1\\",\\n      \\"Value\\": \\"value1\\"\\n    }\\n  ],\\n  \\"LicenseEndTime\\": \\"2022-01-01T12:00:00\\",\\n  \\"UserId\\": 0,\\n  \\"SupplierUid\\": 0,\\n  \\"EndTime\\": \\"2022-01-01T12:00:00\\",\\n  \\"Source\\": \\"User\\",\\n  \\"ServiceType\\": \\"private\\",\\n  \\"PayType\\": \\"Subscription\\",\\n  \\"Name\\": \\"TestName\\",\\n  \\"EnableUserPrometheus\\": true,\\n  \\"Components\\": \\"{\\\\\\"TiKVServerCount\\\\\\":\\\\\\"3\\\\\\",\\\\\\"package_version\\\\\\":\\\\\\"yuncode5398300001\\\\\\",\\\\\\"PDServerCount\\\\\\":\\\\\\"3\\\\\\",\\\\\\"TiDBServerCount\\\\\\":\\\\\\"2\\\\\\"}\\",\\n  \\"PredefinedParameterName\\": \\"套餐一\\",\\n  \\"MarketInstanceId\\": \\"704***59\\",\\n  \\"ResourceGroupId\\": \\"rg-bp67acfmxazb4p****\\",\\n  \\"BizStatus\\": \\"Normal\\",\\n  \\"GrafanaDashBoardUrl\\": \\"https://g.console.aliyun.com/d/xxxxxxxx-cn-mariadb/mysql-xxxxxx-xxxxxxxx-and-dashboard?orgId=355401&refresh=10s\\"\\n}","errorExample":""},{"type":"xml","example":"<GetServiceInstanceResponse>\\n    <Outputs>{\\"InstanceIds\\":[\\"i-hp38ofxl0dsyfi7z****\\"]}</Outputs>\\n    <Status>Deployed</Status>\\n    <TemplateName>模板1</TemplateName>\\n    <UpdateTime>2021-05-20T00:00:00Z</UpdateTime>\\n    <Progress>90</Progress>\\n    <Parameters>{\\"param\\":\\"value\\"}</Parameters>\\n    <RequestId>4DB0F536-B3BE-4F0D-BD29-E83FB56D550C</RequestId>\\n    <ServiceInstanceId>si-d6ab3a63ccbb4b17****</ServiceInstanceId>\\n    <CreateTime>2021-05-20T00:00:00Z</CreateTime>\\n    <StatusDetail>deploy successfully</StatusDetail>\\n    <Resources>[{\\"StackId\\": \\"stack-xxx\\"}]</Resources>\\n    <Service>\\n        <Status>Online</Status>\\n        <PublishTime>2021-05-21T00:00:00Z</PublishTime>\\n        <Version>1</Version>\\n        <DeployMetadata>{\\"EstimateTime\\":null,\\"SupplierDeployMetadata\\":{\\"DeployTimeout\\":null},\\"TemplateConfigs\\":[{\\"Name\\":\\"模板1\\",\\"Url\\":\\"https://service-info-private.oss-cn-hangzhou.aliyuncs.com/130920852836****/template/af11ec5a-09a0-4aa7-970c-09b51e2a****.json\\",\\"PredefinedParameters\\":[],\\"AllowedRegions\\":[\\"cn-hangzhou\\"]}]}</DeployMetadata>\\n        <DeployType>ros</DeployType>\\n        <ServiceId>service-9c8a3522528b4fe8****</ServiceId>\\n        <SupplierUrl>http://example.com</SupplierUrl>\\n        <ServiceType>private</ServiceType>\\n        <SupplierName>A公司</SupplierName>\\n        <ServiceInfos>\\n            <Locale>zh-CN</Locale>\\n            <Image>https://example.com/service-image/c1c4a559-cc60-4af1-b976-98f356602462.png</Image>\\n            <Name>B数据库</Name>\\n            <ShortDescription>B是A公司自主设计并研发的开源分布式的关系型数据库</ShortDescription>\\n        </ServiceInfos>\\n    </Service>\\n    <OperationStartTime>2021-12-29T06:48:56Z</OperationStartTime>\\n    <OperationEndTime>2022-01-28T06:48:56Z</OperationEndTime>\\n    <OperatedServiceInstanceId>si-d6ab3a63ccbb4b17****</OperatedServiceInstanceId>\\n    <EnableInstanceOps>true</EnableInstanceOps>\\n    <IsOperated>true</IsOperated>\\n</GetServiceInstanceResponse>","errorExample":""}]',
            'title' => '查询服务实例的详细信息',
        ],
        'ListServiceInstanceLogs' => [
            'summary' => '调用ListServiceInstanceLogs查询服务实例的部署和升级日志。',
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
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时每页行数。其中最大值为100行，默认值为20行。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'BBBAAfu+XtuBE55iRLHEYYuojI4=',
                    ],
                ],
                [
                    'name' => 'ServiceInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'si-70a3b15bb626435b****',
                    ],
                ],
                [
                    'name' => 'LogSource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '选择日志源。可选值：'."\n"
                            ."\n"
                            .'- computeNest（默认值）：服务实例部署、升级的日志。'."\n"
                            ."\n"
                            .'- application：应用产生的日志。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'computeNest',
                    ],
                ],
                [
                    'name' => 'Logstore',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Logstore信息。'."\n"
                            .'查询应用日志时，需要指定Logstore。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'logabc',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '下一个查询开始Token。',
                                'type' => 'string',
                                'example' => 'AAAAAfu+XtuBE55iRLHEYYuojI4=',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '51945B04-6AA6-410D-93BA-236E0248B104',
                            ],
                            'MaxResults' => [
                                'description' => '分页查询时每页行数。其中最大值为100行，默认值为20行。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'ServiceInstancesLogs' => [
                                'description' => '服务实例日志。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '服务实例日志。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Timestamp' => [
                                            'description' => '服务实例日志的时间戳。',
                                            'type' => 'string',
                                            'example' => '2021-05-21T00:00:00Z',
                                        ],
                                        'Source' => [
                                            'description' => '服务实例日志的来源。可能的值：'."\n"
                                                ."\n"
                                                .'- ros：资源编排ROS产生的日志。'."\n"
                                                ."\n"
                                                .'- computeNest：计算巢产生的日志。',
                                            'type' => 'string',
                                            'example' => 'ros',
                                        ],
                                        'Content' => [
                                            'description' => '日志内容。',
                                            'type' => 'string',
                                            'example' => 'Start creating service instance',
                                        ],
                                        'LogType' => [
                                            'description' => '日志类型。可能的值：'."\n"
                                                .'- serviceInstance：服务实例产生的日志。'."\n"
                                                ."\n"
                                                .'- resource：ROS资源产生的日志。',
                                            'type' => 'string',
                                            'example' => 'serviceInstance',
                                        ],
                                        'ResourceType' => [
                                            'description' => '资源类型。',
                                            'type' => 'string',
                                            'example' => 'ROS.Stack',
                                        ],
                                        'ResourceId' => [
                                            'description' => '关联ID。',
                                            'type' => 'string',
                                            'example' => 'si-5c6525c0589545c3****',
                                        ],
                                        'Status' => [
                                            'description' => '日志状态。可能的值：'."\n"
                                                ."\n"
                                                .'- Creating：创建中。'."\n"
                                                ."\n"
                                                .'- Created：已创建。'."\n"
                                                ."\n"
                                                .'- Deploying：部署中。'."\n"
                                                ."\n"
                                                .'- Deployed：已部署。'."\n"
                                                ."\n"
                                                .'- DeployedFailed：部署失败。'."\n"
                                                ."\n"
                                                .'- Expired：已过期。'."\n"
                                                ."\n"
                                                .'- ExtendSuccess：续费成功。'."\n"
                                                ."\n"
                                                .'- Upgrading：升级中。'."\n"
                                                ."\n"
                                                .'- UpgradeSuccess：升级成功。',
                                            'type' => 'string',
                                            'example' => 'Creating',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"AAAAAfu+XtuBE55iRLHEYYuojI4=\\",\\n  \\"RequestId\\": \\"51945B04-6AA6-410D-93BA-236E0248B104\\",\\n  \\"MaxResults\\": 20,\\n  \\"ServiceInstancesLogs\\": [\\n    {\\n      \\"Timestamp\\": \\"2021-05-21T00:00:00Z\\",\\n      \\"Source\\": \\"ros\\",\\n      \\"Content\\": \\"Start creating service instance\\",\\n      \\"LogType\\": \\"serviceInstance\\",\\n      \\"ResourceType\\": \\"ROS.Stack\\",\\n      \\"ResourceId\\": \\"si-5c6525c0589545c3****\\",\\n      \\"Status\\": \\"Creating\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListServiceInstanceLogsResponse>\\n    <NextToken>AAAAAfu+XtuBE55iRLHEYYuojI4=</NextToken>\\n    <RequestId>51945B04-6AA6-410D-93BA-236E0248B104</RequestId>\\n    <MaxResults>20</MaxResults>\\n    <ServiceInstancesLogs>\\n        <Timestamp>2021-05-21T00:00:00Z</Timestamp>\\n        <ServiceInstanceId>si-ed37319d5b754f74****</ServiceInstanceId>\\n        <Source>ros</Source>\\n        <Content>Start creating service instance</Content>\\n    </ServiceInstancesLogs>\\n</ListServiceInstanceLogsResponse>","errorExample":""}]',
            'title' => '查询服务实例的部署和升级日志',
        ],
        'ListServiceInstanceResources' => [
            'summary' => '调用ListServiceInstanceResources查询服务实例包含的资源。',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时每页行数。每页最大行数100行，默认行数20行。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AAAAAc3HCuYhJi/wvpk4xOr0VLbAx7BkQzyYC+ONO+WudHGKEdB0uWSY7AGnM3qCgm/Ynge7zU6NWdbj0Tegyajyqyc=',
                    ],
                ],
                [
                    'name' => 'ServiceInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'si-d8a0cc2a1ee04dce****',
                    ],
                ],
                [
                    'name' => 'ResourceARN',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '资源ARN（Aliyun Resource Name）。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源ARN（Aliyun Resource Name）。N的取值范围：0~20。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'arn:acs:sag:cn-hangzhou:130920852836****:ccn/ccn-b3qf0q439sq2de****',
                        ],
                        'required' => false,
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '资源标签。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源标签。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '资源的标签键。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'key1',
                                ],
                                'Value' => [
                                    'description' => '资源的标签值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'value1',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'ExpireTimeStart',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源使用的开始时间。'."\n"
                            ."\n"
                            .'><notice>只支持私有化部署服务实例查询。></notice>',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2022-01-01T12:00:00',
                    ],
                ],
                [
                    'name' => 'ExpireTimeEnd',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源使用的结束时间。'."\n"
                            ."\n"
                            .'><notice>只支持私有化部署服务实例查询。></notice>',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2022-03-01T12:00:00',
                    ],
                ],
                [
                    'name' => 'PayType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '付费类型。取值范围：'."\n"
                            ."\n"
                            .'- Subscription：预付费。'."\n"
                            .'- PayAsYouGo：后付费。'."\n"
                            ."\n"
                            .'><notice>只支持私有化部署服务实例查询。></notice>'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Subscription',
                    ],
                ],
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
                    'name' => 'ServiceInstanceResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务实例资源类型。可能的值：'."\n"
                            ."\n"
                            .'- AliyunResource：阿里云资源。'."\n"
                            ."\n"
                            .'- ContainerResource：容器组（Pod）资源。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AliyunResource',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '下一个查询开始Token。',
                                'type' => 'string',
                                'example' => 'AAAAAc3HCuYhJi/wvpk4xOr0VLbAx7BkQzyYC+ONO+WudHGKEdB0uWSY7AGnM3qCgm/Ynge7zU6NWdbj0Tegyajyqyc=',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'B288A0BE-D927-4888-B0F7-B35EF84B6E6F',
                            ],
                            'MaxResults' => [
                                'description' => '分页查询时每页行数。每页最大行数100行，默认行数20行。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'Resources' => [
                                'description' => '资源列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '资源列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ResourceARN' => [
                                            'description' => '资源ARN（Aliyun Resource Name）。',
                                            'type' => 'string',
                                            'example' => 'arn:acs:sag:cn-hangzhou:130920852836****:ccn/ccn-b3qf0q439sq2de****',
                                        ],
                                        'PayType' => [
                                            'description' => '付费类型。取值范围：'."\n"
                                                ."\n"
                                                .'- Subscription：预付费。'."\n"
                                                .'- PayAsYouGo：后付费。',
                                            'type' => 'string',
                                            'example' => 'Subscription',
                                        ],
                                        'RenewStatus' => [
                                            'description' => '续费状态，取值：'."\n"
                                                .'- AutoRenewal：自动续费。'."\n"
                                                .'- ManualRenewal：手动续费。'."\n"
                                                .'- NotRenewal：不续费。',
                                            'type' => 'string',
                                            'example' => 'AutoRenewal',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2022-01-01T12:00:00',
                                        ],
                                        'ExpireTime' => [
                                            'description' => '到期时间。',
                                            'type' => 'string',
                                            'example' => '2022-03-01T12:00:00',
                                        ],
                                        'RenewalPeriod' => [
                                            'description' => '续费周期。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'RenewalPeriodUnit' => [
                                            'description' => '续费周期单位。取值范围：'."\n"
                                                ."\n"
                                                .'- Month：月。'."\n"
                                                .'- Year：年。',
                                            'type' => 'string',
                                            'example' => 'Month',
                                        ],
                                        'ProductType' => [
                                            'description' => '产品类型。',
                                            'type' => 'string',
                                            'example' => 'RDS',
                                        ],
                                        'ProductCode' => [
                                            'description' => '产品代码。',
                                            'type' => 'string',
                                            'example' => 'rds',
                                        ],
                                        'Status' => [
                                            'description' => '运行状态。可能的值：'."\n"
                                                ."\n"
                                                .'- running：运行中。'."\n"
                                                ."\n"
                                                .'- waiting：待运行。'."\n"
                                                ."\n"
                                                .'- terminated：停止运行。'."\n"
                                                .'> 仅查询容器资源时，才会返回运行状态。',
                                            'type' => 'string',
                                            'example' => 'running',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"AAAAAc3HCuYhJi/wvpk4xOr0VLbAx7BkQzyYC+ONO+WudHGKEdB0uWSY7AGnM3qCgm/Ynge7zU6NWdbj0Tegyajyqyc=\\",\\n  \\"RequestId\\": \\"B288A0BE-D927-4888-B0F7-B35EF84B6E6F\\",\\n  \\"MaxResults\\": 20,\\n  \\"Resources\\": [\\n    {\\n      \\"ResourceARN\\": \\"arn:acs:sag:cn-hangzhou:130920852836****:ccn/ccn-b3qf0q439sq2de****\\",\\n      \\"PayType\\": \\"Subscription\\",\\n      \\"RenewStatus\\": \\"AutoRenewal\\",\\n      \\"CreateTime\\": \\"2022-01-01T12:00:00\\",\\n      \\"ExpireTime\\": \\"2022-03-01T12:00:00\\",\\n      \\"RenewalPeriod\\": 1,\\n      \\"RenewalPeriodUnit\\": \\"Month\\",\\n      \\"ProductType\\": \\"RDS\\",\\n      \\"ProductCode\\": \\"rds\\",\\n      \\"Status\\": \\"running\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListServiceInstanceResourcesResponse>\\n    <NextToken>AAAAAc3HCuYhJi/wvpk4xOr0VLbAx7BkQzyYC+ONO+WudHGKEdB0uWSY7AGnM3qCgm/Ynge7zU6NWdbj0Tegyajyqyc=</NextToken>\\n    <RequestId>B288A0BE-D927-4888-B0F7-B35EF84B6E6F</RequestId>\\n    <MaxResults>20</MaxResults>\\n    <Resources>\\n        <ResourceARN>arn:acs:sag:cn-hangzhou:130920852836****:ccn/ccn-b3qf0q439sq2de****</ResourceARN>\\n    </Resources>\\n</ListServiceInstanceResourcesResponse>","errorExample":""}]',
            'title' => '查询服务实例包含的资源',
        ],
        'ListServiceInstances' => [
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
                'abilityTreeCode' => '36941',
                'abilityTreeNodes' => [
                    'FEATUREcomputenest18JMDW',
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
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，每页显示的行数。每页最大100行，默认为20行。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询凭证（Token），取值为上一次API调用返回的**NextToken**参数值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'BBBAAfu+XtuBE55iRLHEYYuojI4=',
                    ],
                ],
                [
                    'name' => 'Filter',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '过滤器。',
                        'type' => 'array',
                        'items' => [
                            'description' => '过滤器。',
                            'type' => 'object',
                            'properties' => [
                                'Value' => [
                                    'description' => '过滤器值列表。',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => '过滤器值列表。N的取值范围：1~10。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'value1',
                                    ],
                                    'required' => false,
                                    'maxItems' => 20,
                                ],
                                'Name' => [
                                    'description' => '过滤器名称，可选择一个或者多个名称进行查询。取值范围：'."\n"
                                        ."\n"
                                        .'- Name：按服务名称查询。'."\n"
                                        .'若您需要模糊搜索，则在value处输入内容格式为：\\*xxx\\*。例如服务名称为我的服务，在模糊搜索时，可输入\\*我的\\*或者\\*服务\\*进行搜索。'."\n"
                                        ."\n"
                                        .'- ServiceInstanceName：按服务实例名称查询，当输入一个服务实例名称时进行模糊查询；当输入多个服务实例名称时进行精确查询。'."\n"
                                        ."\n"
                                        .'- ServiceInstanceId：服务实例ID。'."\n"
                                        ."\n"
                                        .'- ServiceId：服务ID。'."\n"
                                        ."\n"
                                        .'- Version：服务版本。'."\n"
                                        ."\n"
                                        .'- Status：服务实例状态。'."\n"
                                        ."\n"
                                        .'- DeployType：部署类型。'."\n"
                                        ."\n"
                                        .'- ServiceType：服务类型。'."\n"
                                        ."\n"
                                        .'- OperationStartTimeBefore：代运维服务开始前。'."\n"
                                        ."\n"
                                        .'- OperationStartTimeAfter：代运维服务开始后。'."\n"
                                        ."\n"
                                        .'- OperationEndTimeBefore：代运维服务结束前。'."\n"
                                        ."\n"
                                        .'- OperationEndTimeAfter：代运维服务结束后。'."\n"
                                        ."\n"
                                        .'- OperatedServiceInstanceId：私有部署服务下代运维服务实例ID。'."\n"
                                        ."\n"
                                        .'- OperationServiceInstanceId：纯代运维服务下的服务实例ID。'."\n"
                                        ."\n"
                                        .'- EnableInstanceOps：服务实例是否开通代运维服务的功能。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'ServiceInstanceId',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '用户自定义标签。',
                        'type' => 'array',
                        'items' => [
                            'description' => '用户自定义标签。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'key1',
                                ],
                                'Value' => [
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'value1',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-bp67acfmxazb4p****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '下一个查询开始Token。',
                                'type' => 'string',
                                'example' => 'AAAAAfu+XtuBE55iRLHEYYuojI4=',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E50287CB-AABF-4877-92C0-289B339A1546',
                            ],
                            'TotalCount' => [
                                'description' => '结果总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                            'MaxResults' => [
                                'description' => '分页查询时，每页显示的行数。每页最大100行，默认为20行。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'ServiceInstances' => [
                                'description' => '服务实例信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '服务实例信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'description' => '服务实例名称。',
                                            'type' => 'string',
                                            'example' => 'TestName',
                                        ],
                                        'Status' => [
                                            'description' => '服务实例状态。可能值：'."\n"
                                                ."\n"
                                                .'- Created：已创建。'."\n"
                                                ."\n"
                                                .'- Deploying：部署中。'."\n"
                                                ."\n"
                                                .'- DeployedFailed：部署失败。'."\n"
                                                ."\n"
                                                .'- Deployed：已部署。'."\n"
                                                ."\n"
                                                .'- Upgrading：升级中。'."\n"
                                                ."\n"
                                                .'- Deleting：删除中。'."\n"
                                                ."\n"
                                                .'- Deleted：已删除。'."\n"
                                                ."\n"
                                                .'- DeletedFailed：删除失败。',
                                            'type' => 'string',
                                            'example' => 'Deployed',
                                        ],
                                        'Outputs' => [
                                            'description' => '服务实例输出信息。',
                                            'type' => 'string',
                                            'example' => '{"managementUrl": "http://xx.xx"}',
                                        ],
                                        'UpdateTime' => [
                                            'description' => '更新时间。',
                                            'type' => 'string',
                                            'example' => '2021-05-20T00:00:00Z',
                                        ],
                                        'Parameters' => [
                                            'description' => '服务实例参数信息。',
                                            'type' => 'string',
                                            'example' => '{"param":"value"}',
                                        ],
                                        'ServiceInstanceId' => [
                                            'description' => '服务实例ID。',
                                            'type' => 'string',
                                            'example' => 'si-d6ab3a63ccbb4b17****',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2021-05-20T00:00:00Z',
                                        ],
                                        'StatusDetail' => [
                                            'description' => '服务实例的部署信息描述。',
                                            'type' => 'string',
                                            'example' => 'deploy successfully',
                                        ],
                                        'Progress' => [
                                            'description' => '服务实例的部署进度，单位：%。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '90',
                                        ],
                                        'Resources' => [
                                            'description' => '资源列表。',
                                            'type' => 'string',
                                            'example' => '[{"StackId": "stack-xxx"}]',
                                        ],
                                        'TemplateName' => [
                                            'description' => '模板名称。',
                                            'type' => 'string',
                                            'example' => '模板1',
                                        ],
                                        'OperatedServiceInstanceId' => [
                                            'description' => '被代运维的服务实例ID。',
                                            'type' => 'string',
                                            'example' => 'si-d6ab3a63ccbb4b17****',
                                        ],
                                        'Service' => [
                                            'description' => '服务。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '服务状态。',
                                                    'type' => 'string',
                                                    'example' => 'Online',
                                                ],
                                                'PublishTime' => [
                                                    'description' => '发布时间。',
                                                    'type' => 'string',
                                                    'example' => '2021-05-21T00:00:00Z',
                                                ],
                                                'Version' => [
                                                    'description' => '服务版本。',
                                                    'type' => 'string',
                                                    'example' => '1.0',
                                                ],
                                                'DeployType' => [
                                                    'description' => '部署类型。可能值：'."\n"
                                                        ."\n"
                                                        .'- ros：通过ROS部署。'."\n"
                                                        ."\n"
                                                        .'- terraform：通过Terraform部署。'."\n"
                                                        ."\n"
                                                        .'- ack：通过ACK部署。'."\n"
                                                        ."\n"
                                                        .'- spi：调用SPI部署。'."\n"
                                                        ."\n"
                                                        .'- operation：代运维服务部署。',
                                                    'type' => 'string',
                                                    'example' => 'ros',
                                                ],
                                                'ServiceId' => [
                                                    'description' => '服务ID。',
                                                    'type' => 'string',
                                                    'example' => 'service-0e6fca6a51a54420****',
                                                ],
                                                'SupplierUrl' => [
                                                    'description' => '服务商地址。',
                                                    'type' => 'string',
                                                    'example' => 'http://example.com',
                                                ],
                                                'ServiceType' => [
                                                    'description' => '服务类型。可能值：'."\n"
                                                        ."\n"
                                                        .'- private：部署在用户账户下。'."\n"
                                                        ."\n"
                                                        .'- managed：托管在服务商账户下。'."\n"
                                                        ."\n"
                                                        .'- operation：代运维服务。',
                                                    'type' => 'string',
                                                    'example' => 'private',
                                                ],
                                                'SupplierName' => [
                                                    'description' => '服务商名称。',
                                                    'type' => 'string',
                                                    'example' => 'A有限公司',
                                                ],
                                                'ServiceInfos' => [
                                                    'description' => '服务信息。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '服务信息。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Locale' => [
                                                                'description' => '服务实例语言。',
                                                                'type' => 'string',
                                                                'example' => 'zh-CN',
                                                            ],
                                                            'Image' => [
                                                                'description' => '服务图标地址。',
                                                                'type' => 'string',
                                                                'example' => 'https://example.com/service-image/c1c4a559-cc60-4af1-b976-98f356602462.png',
                                                            ],
                                                            'Name' => [
                                                                'description' => '服务名称。',
                                                                'type' => 'string',
                                                                'example' => 'B数据库',
                                                            ],
                                                            'ShortDescription' => [
                                                                'description' => '服务概述。',
                                                                'type' => 'string',
                                                                'example' => 'B是A公司自主设计并研发的开源分布式的关系型数据库',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'VersionName' => [
                                                    'description' => '服务商自定义版本名称。',
                                                    'type' => 'string',
                                                    'example' => '版本A',
                                                ],
                                                'Commodity' => [
                                                    'description' => '商品规格。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'SaasBoostMetadata' => [
                                                            'description' => 'SaasBoost配置元数据。',
                                                            'type' => 'string',
                                                            'example' => '{'."\n"
                                                                .'     //开启/关闭SaaS Boost绑定'."\n"
                                                                .'    "Enabled":true/false,默认为false'."\n"
                                                                .'    //公网交互地址'."\n"
                                                                .'    "PublicAccessUrl":"https://example.com"'."\n"
                                                                .'}',
                                                        ],
                                                        'Type' => [
                                                            'description' => '类型。可能的值：'."\n"
                                                                ."\n"
                                                                .'- Marketplace：云市场。'."\n"
                                                                ."\n"
                                                                .'- Css：凌霄。'."\n"
                                                                ."\n"
                                                                .'- SaasBoost：Saas Boost。',
                                                            'type' => 'string',
                                                            'example' => 'Marketplace',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'OperationStartTime' => [
                                            'description' => '代运维开始时间。',
                                            'type' => 'string',
                                            'example' => '2021-12-29T06:48:56Z',
                                        ],
                                        'OperationEndTime' => [
                                            'description' => '代运维结束时间。',
                                            'type' => 'string',
                                            'example' => '2022-01-28T06:48:56Z',
                                        ],
                                        'EnableInstanceOps' => [
                                            'description' => '服务实例是否有代运维功能。可能的值：'."\n"
                                                ."\n"
                                                .'- true：服务实例有代运维功能。'."\n"
                                                ."\n"
                                                .'- false：服务实例没有代运维功能。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'Tags' => [
                                            'description' => '用户自定义标签。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '用户自定义标签。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Key' => [
                                                        'description' => '标签键。',
                                                        'type' => 'string',
                                                        'example' => 'key1',
                                                    ],
                                                    'Value' => [
                                                        'description' => '标签值。',
                                                        'type' => 'string',
                                                        'example' => 'value1',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Source' => [
                                            'description' => '服务实例创建来源。',
                                            'type' => 'string',
                                            'example' => 'Supplier',
                                        ],
                                        'EndTime' => [
                                            'description' => '服务实例过期时间。',
                                            'type' => 'string',
                                            'example' => '2022-01-01T12:00:00',
                                        ],
                                        'ServiceType' => [
                                            'description' => '服务类型。可能的值：'."\n"
                                                ."\n"
                                                .'- private：部署在用户账户下。'."\n"
                                                ."\n"
                                                .'- managed：托管在服务商账户下。'."\n"
                                                ."\n"
                                                .'- operation：代运维服务。'."\n"
                                                ."\n"
                                                .'- poc：试用服务实例。',
                                            'type' => 'string',
                                            'example' => 'private',
                                        ],
                                        'PayType' => [
                                            'description' => '付费类型。取值范围：'."\n"
                                                ."\n"
                                                .'- Permanent：永久购买。'."\n"
                                                ."\n"
                                                .'- Subscription：云市场包年包月。'."\n"
                                                ."\n"
                                                .'- PayAsYouGo：云市场按量付费。'."\n"
                                                ."\n"
                                                .'- CustomFixTime：商家自定义固定时长。',
                                            'type' => 'string',
                                            'example' => 'Subscription',
                                        ],
                                        'MarketInstanceId' => [
                                            'description' => '云市场实例ID。',
                                            'type' => 'string',
                                            'example' => '5827****',
                                        ],
                                        'ResourceGroupId' => [
                                            'description' => '资源组ID。',
                                            'type' => 'string',
                                            'example' => 'rg-aekz6scpcxxxxxx',
                                        ],
                                        'BizStatus' => [
                                            'description' => '服务实例的业务状态。可能的值：'."\n"
                                                ."\n"
                                                .'- Normal：正常。'."\n"
                                                ."\n"
                                                .'- Renewing：续费中。'."\n"
                                                ."\n"
                                                .'- RenewFoiled：续费失败。'."\n"
                                                ."\n"
                                                .'- Expired：已过期。',
                                            'type' => 'string',
                                            'example' => 'Normal',
                                        ],
                                        'OrderId' => [
                                            'description' => '订单ID。',
                                            'type' => 'string',
                                            'example' => '2306175xxxxxxxx',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"AAAAAfu+XtuBE55iRLHEYYuojI4=\\",\\n  \\"RequestId\\": \\"E50287CB-AABF-4877-92C0-289B339A1546\\",\\n  \\"TotalCount\\": 100,\\n  \\"MaxResults\\": 20,\\n  \\"ServiceInstances\\": [\\n    {\\n      \\"Name\\": \\"TestName\\",\\n      \\"Status\\": \\"Deployed\\",\\n      \\"Outputs\\": \\"{\\\\\\"managementUrl\\\\\\": \\\\\\"http://xx.xx\\\\\\"}\\",\\n      \\"UpdateTime\\": \\"2021-05-20T00:00:00Z\\",\\n      \\"Parameters\\": \\"{\\\\\\"param\\\\\\":\\\\\\"value\\\\\\"}\\",\\n      \\"ServiceInstanceId\\": \\"si-d6ab3a63ccbb4b17****\\",\\n      \\"CreateTime\\": \\"2021-05-20T00:00:00Z\\",\\n      \\"StatusDetail\\": \\"deploy successfully\\",\\n      \\"Progress\\": 90,\\n      \\"Resources\\": \\"[{\\\\\\"StackId\\\\\\": \\\\\\"stack-xxx\\\\\\"}]\\",\\n      \\"TemplateName\\": \\"模板1\\",\\n      \\"OperatedServiceInstanceId\\": \\"si-d6ab3a63ccbb4b17****\\",\\n      \\"Service\\": {\\n        \\"Status\\": \\"Online\\",\\n        \\"PublishTime\\": \\"2021-05-21T00:00:00Z\\",\\n        \\"Version\\": \\"1.0\\",\\n        \\"DeployType\\": \\"ros\\",\\n        \\"ServiceId\\": \\"service-0e6fca6a51a54420****\\",\\n        \\"SupplierUrl\\": \\"http://example.com\\",\\n        \\"ServiceType\\": \\"private\\",\\n        \\"SupplierName\\": \\"A有限公司\\",\\n        \\"ServiceInfos\\": [\\n          {\\n            \\"Locale\\": \\"zh-CN\\",\\n            \\"Image\\": \\"https://example.com/service-image/c1c4a559-cc60-4af1-b976-98f356602462.png\\",\\n            \\"Name\\": \\"B数据库\\",\\n            \\"ShortDescription\\": \\"B是A公司自主设计并研发的开源分布式的关系型数据库\\"\\n          }\\n        ],\\n        \\"VersionName\\": \\"版本A\\",\\n        \\"Commodity\\": {\\n          \\"SaasBoostMetadata\\": \\"{\\\\n     //开启/关闭SaaS Boost绑定\\\\n    \\\\\\"Enabled\\\\\\":true/false,默认为false\\\\n    //公网交互地址\\\\n    \\\\\\"PublicAccessUrl\\\\\\":\\\\\\"https://example.com\\\\\\"\\\\n}\\",\\n          \\"Type\\": \\"Marketplace\\"\\n        }\\n      },\\n      \\"OperationStartTime\\": \\"2021-12-29T06:48:56Z\\",\\n      \\"OperationEndTime\\": \\"2022-01-28T06:48:56Z\\",\\n      \\"EnableInstanceOps\\": true,\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"key1\\",\\n          \\"Value\\": \\"value1\\"\\n        }\\n      ],\\n      \\"Source\\": \\"Supplier\\",\\n      \\"EndTime\\": \\"2022-01-01T12:00:00\\",\\n      \\"ServiceType\\": \\"private\\",\\n      \\"PayType\\": \\"Subscription\\",\\n      \\"MarketInstanceId\\": \\"5827****\\",\\n      \\"ResourceGroupId\\": \\"rg-aekz6scpcxxxxxx\\",\\n      \\"BizStatus\\": \\"Normal\\",\\n      \\"OrderId\\": \\"2306175xxxxxxxx\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListServiceInstancesResponse>\\n    <NextToken>AAAAAfu+XtuBE55iRLHEYYuojI4=</NextToken>\\n    <RequestId>E50287CB-AABF-4877-92C0-289B339A1546</RequestId>\\n    <TotalCount>100</TotalCount>\\n    <MaxResults>20</MaxResults>\\n    <ServiceInstances>\\n        <Status>Deployed</Status>\\n        <Outputs>{\\"managementUrl\\": \\"http://xx.xx\\"}</Outputs>\\n        <UpdateTime>2021-05-20T00:00:00Z</UpdateTime>\\n        <Parameters>{\\"param\\":\\"value\\"}</Parameters>\\n        <ServiceInstanceId>si-d6ab3a63ccbb4b17****</ServiceInstanceId>\\n        <CreateTime>2021-05-20T00:00:00Z</CreateTime>\\n        <StatusDetail>deploy successfully</StatusDetail>\\n        <Progress>90</Progress>\\n        <Resources>[{\\"StackId\\": \\"stack-xxx\\"}]</Resources>\\n        <TemplateName>模板1</TemplateName>\\n        <OperatedServiceInstanceId>si-d6ab3a63ccbb4b17****</OperatedServiceInstanceId>\\n        <Service>\\n            <Status>Online</Status>\\n            <PublishTime>2021-05-21T00:00:00Z</PublishTime>\\n            <Version>1.0</Version>\\n            <DeployType>ros</DeployType>\\n            <ServiceId>service-0e6fca6a51a54420****</ServiceId>\\n            <SupplierUrl>http://example.com</SupplierUrl>\\n            <ServiceType>private</ServiceType>\\n            <SupplierName>A有限公司</SupplierName>\\n            <ServiceInfos>\\n                <Locale>zh-CN</Locale>\\n                <Image>https://example.com/service-image/c1c4a559-cc60-4af1-b976-98f356602462.png</Image>\\n                <Name>B数据库</Name>\\n                <ShortDescription>B是A公司自主设计并研发的开源分布式的关系型数据库</ShortDescription>\\n            </ServiceInfos>\\n        </Service>\\n        <OperationStartTime>2021-12-29T06:48:56Z</OperationStartTime>\\n        <OperationEndTime>2022-01-28T06:48:56Z</OperationEndTime>\\n        <EnableInstanceOps>true</EnableInstanceOps>\\n    </ServiceInstances>\\n</ListServiceInstancesResponse>","errorExample":""}]',
            'title' => '查询服务实例列表',
            'summary' => '调用ListServiceInstances查询服务实例列表。',
        ],
        'ChangeResourceGroup' => [
            'summary' => '修改云资源所属的资源组。',
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
                'operationType' => 'update',
                'abilityTreeCode' => '171476',
                'abilityTreeNodes' => [
                    'FEATUREcomputenest18JMDW',
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
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要修改资源组的云资源的资源ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'si-5dc794a7fd254e******',
                    ],
                ],
                [
                    'name' => 'NewResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要移动到的资源组ID。'."\n"
                            ."\n"
                            .'您可以通过[资源管理控制台](https://resourcemanager.console.aliyun.com/resource-groups)查看资源组ID。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmzmhzo******',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类型。可能的值：'."\n"
                            ."\n"
                            .'- service：服务。'."\n"
                            ."\n"
                            .'- serviceinstance：服务实例。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'service',
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
                                'example' => '464C8CB6-A548-5206-B83C-D32A8E43EC21',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"464C8CB6-A548-5206-B83C-D32A8E43EC21\\"\\n}","type":"json"}]',
            'title' => '更改资源组',
        ],
        'GetServiceTemplateParameterConstraints' => [
            'summary' => '查询ROS模板参数限定值。',
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
                'operationType' => 'get',
                'abilityTreeCode' => '136289',
                'abilityTreeNodes' => [
                    'FEATUREcomputenestVIKWP9',
                    'FEATUREcomputenestVUFVAC',
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
                    'name' => 'ServiceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'service-731f788406024axxxxxx',
                    ],
                ],
                [
                    'name' => 'ServiceVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务版本。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'TemplateName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '模板1',
                    ],
                ],
                [
                    'name' => 'Parameters',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '服务实例配置参数。',
                        'type' => 'array',
                        'items' => [
                            'description' => '服务实例配置参数。',
                            'type' => 'object',
                            'properties' => [
                                'ParameterKey' => [
                                    'description' => '参数的名称。如果未指定参数的名称和值，则ROS将使用模板中指定的默认值。'."\n"
                                        ."\n"
                                        .'> Parameters为可选参数。若指定了Parameters，则ParameterKey为必选参数。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'InstanceType',
                                ],
                                'ParameterValue' => [
                                    'description' => '模板中已定义的参数的取值。'."\n"
                                        ."\n"
                                        .'> Parameters为可选参数。若指定了Parameters，则ParameterValue为必选参数。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'cn-hangzhou-j',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'DeployRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部署地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'TrialType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '使用类型。可选值：'."\n"
                            ."\n"
                            .'- Trial：支持试用。'."\n"
                            ."\n"
                            .'- NotTrial：不支持试用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'NotTrial',
                    ],
                ],
                [
                    'name' => 'SpecificationName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '套餐规格名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '套餐一',
                    ],
                ],
                [
                    'name' => 'ServiceInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'si-461ee95f46ca46xxxxxx',
                    ],
                ],
                [
                    'name' => 'EnablePrivateVpcConnection',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否已开启私网连接。可能的值：'."\n"
                            ."\n"
                            .'- true：已开启'."\n"
                            ."\n"
                            .'- false：未开启',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
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
                                'example' => '449DC03D-A039-56A6-8D6F-6EBCCCE0EE2C',
                            ],
                            'ParameterConstraints' => [
                                'description' => '参数约束信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '参数约束信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Type' => [
                                            'description' => '参数的类型。',
                                            'type' => 'string',
                                            'example' => 'String',
                                        ],
                                        'AllowedValues' => [
                                            'description' => '参数的取值。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '参数的取值。',
                                                'type' => 'string',
                                                'example' => 'cn-hangzhou-h',
                                            ],
                                        ],
                                        'AssociationParameterNames' => [
                                            'description' => '关联参数列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '关联参数列表。',
                                                'type' => 'string',
                                                'example' => 'InstanceType',
                                            ],
                                        ],
                                        'ParameterKey' => [
                                            'description' => '参数的名称。',
                                            'type' => 'string',
                                            'example' => 'ZoneInfo',
                                        ],
                                        'Behavior' => [
                                            'description' => '参数的行为。取值：'."\n"
                                                ."\n"
                                                .'- NoLimit：无限制，此参数没有取值限制。'."\n"
                                                ."\n"
                                                .'- NotSupport：不支持，此参数不支持查询取值。'."\n"
                                                ."\n"
                                                .'- QueryError：查询失败。'."\n"
                                                ."\n"
                                                .'> 当查询结果没有返回AllowedValues时，会额外返回Behavior和BehaviorReason，说明参数的行为和原因。',
                                            'type' => 'string',
                                            'example' => 'NoLimit',
                                        ],
                                        'BehaviorReason' => [
                                            'description' => '参数行为出现的原因。',
                                            'type' => 'string',
                                            'example' => 'No resource property refer to the parameter',
                                        ],
                                        'OriginalConstraints' => [
                                            'description' => '原始约束信息。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '原始约束信息。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'AllowedValues' => [
                                                        'description' => '参数的取值。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '参数的取值。',
                                                            'type' => 'string',
                                                            'example' => 'cn-hangzhou-a',
                                                        ],
                                                    ],
                                                    'PropertyName' => [
                                                        'description' => '属性名称。',
                                                        'type' => 'string',
                                                        'example' => 'ZoneId',
                                                    ],
                                                    'ResourceName' => [
                                                        'description' => '模板中定义的资源名称。',
                                                        'type' => 'string',
                                                        'example' => 'MyECS',
                                                    ],
                                                    'ResourceType' => [
                                                        'description' => '资源类型。',
                                                        'type' => 'string',
                                                        'example' => 'ALIYUN::ECS::InstanceGroup',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'QueryErrors' => [
                                            'description' => '查询失败的详情。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '查询失败的详情。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'ErrorMessage' => [
                                                        'description' => '错误详情。',
                                                        'type' => 'string',
                                                        'example' => 'record not exist',
                                                    ],
                                                    'ResourceName' => [
                                                        'description' => '资源名称。',
                                                        'type' => 'string',
                                                        'example' => 'MyECS',
                                                    ],
                                                    'ResourceType' => [
                                                        'description' => '资源类型。',
                                                        'type' => 'string',
                                                        'example' => 'ALIYUN::ECS::InstanceGroup',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'FamilyConstraints' => [
                                'description' => '套餐族约束。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '套餐族约束。',
                                    'type' => 'string',
                                    'example' => '约束族1',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"449DC03D-A039-56A6-8D6F-6EBCCCE0EE2C\\",\\n  \\"ParameterConstraints\\": [\\n    {\\n      \\"Type\\": \\"String\\",\\n      \\"AllowedValues\\": [\\n        \\"cn-hangzhou-h\\"\\n      ],\\n      \\"AssociationParameterNames\\": [\\n        \\"InstanceType\\"\\n      ],\\n      \\"ParameterKey\\": \\"ZoneInfo\\",\\n      \\"Behavior\\": \\"NoLimit\\",\\n      \\"BehaviorReason\\": \\"No resource property refer to the parameter\\",\\n      \\"OriginalConstraints\\": [\\n        {\\n          \\"AllowedValues\\": [\\n            \\"cn-hangzhou-a\\"\\n          ],\\n          \\"PropertyName\\": \\"ZoneId\\",\\n          \\"ResourceName\\": \\"MyECS\\",\\n          \\"ResourceType\\": \\"ALIYUN::ECS::InstanceGroup\\"\\n        }\\n      ],\\n      \\"QueryErrors\\": [\\n        {\\n          \\"ErrorMessage\\": \\"record not exist\\",\\n          \\"ResourceName\\": \\"MyECS\\",\\n          \\"ResourceType\\": \\"ALIYUN::ECS::InstanceGroup\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"FamilyConstraints\\": [\\n    \\"约束族1\\"\\n  ]\\n}","type":"json"}]',
            'title' => '查询ROS模板参数限定值',
        ],
        'StartServiceInstance' => [
            'summary' => '当服务实例状态为Stopped（已关机）、StartFailed（开机失败）时，调用StartServiceInstance接口启动服务实例。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '213207',
                'abilityTreeNodes' => [
                    'FEATUREcomputenest18JMDW',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-42665544****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务实例所在地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ServiceInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务实例ID。'."\n"
                            ."\n"
                            .'您可以通过调用[ListServiceInstances - 查询服务实例列表](~~396200~~)获取服务实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'si-d6ab3a63ccbb4b17****',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '464C8CB6-A548-5206-B83C-D32A8E43EC21',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"464C8CB6-A548-5206-B83C-D32A8E43EC21\\"\\n}","type":"json"}]',
            'title' => '启动服务实例',
            'description' => '### 前提条件'."\n"
                .'请先确保服务商在创建服务时配置了开机、关机的运维操作。',
        ],
        'StopServiceInstance' => [
            'summary' => '当服务实例状态为Deployed（已部署）、StopFailed（关机失败）时，调用StopServiceInstance接口关闭服务实例。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '213173',
                'abilityTreeNodes' => [
                    'FEATUREcomputenest18JMDW',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-42665544****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务实例所在地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ServiceInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务实例ID。'."\n"
                            ."\n"
                            .'您可以通过调用[ListServiceInstances - 查询服务实例列表](~~396200~~)获取服务实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'si-b58c874912fc4294****',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4DB0F536-B3BE-4F0D-BD29-E83FB56D550C',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4DB0F536-B3BE-4F0D-BD29-E83FB56D550C\\"\\n}","type":"json"}]',
            'title' => '关闭服务实例',
            'description' => '### 前提条件'."\n"
                .'请先确保服务商在创建服务时配置了开机、关机的运维操作。',
        ],
        'RestartServiceInstance' => [
            'summary' => '当服务实例状态为Deployed（已部署）时，调用RestartServiceInstance接口重启服务实例。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '213219',
                'abilityTreeNodes' => [
                    'FEATUREcomputenestVIKWP9',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-42665544****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务实例所在地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ServiceInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务实例ID。'."\n"
                            ."\n"
                            .'您可以通过调用[ListServiceInstances - 查询服务实例列表](~~396200~~)获取服务实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'si-d6ab3a63ccbb4b17****',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '13FE89A5-C036-56BF-A0FF-A31C59819FD7',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"13FE89A5-C036-56BF-A0FF-A31C59819FD7\\"\\n}","type":"json"}]',
            'title' => '重启服务实例',
            'description' => '### 前提条件'."\n"
                .'请先确保服务商在创建服务时配置了重启的运维操作。',
        ],
        'UpdateServiceInstanceSpec' => [
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '161941',
                'abilityTreeNodes' => [
                    'FEATUREcomputenest18JMDW',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ServiceInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务实例ID。'."\n"
                            ."\n"
                            .'您可以通过调用[ListServiceInstances - 查询服务实例列表](~~396200~~)获取服务实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'si-d6ab3a63ccbb4b17****',
                    ],
                ],
                [
                    'name' => 'PredefinedParametersName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务实例套餐名称。'."\n"
                            ."\n"
                            .'当服务商在添加变配操作时设置**变更类型**为**套餐变更**，您可以设置该参数。'."\n"
                            ."\n"
                            .'您可以通过查看[GetService - 查询服务详细信息](~~2340828~~)接口中返回参数**DeployMetadata**的**PredefinedParameters**属性获取服务设置的套餐名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '套餐一',
                    ],
                ],
                [
                    'name' => 'Parameters',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '服务实例变更参数。'."\n"
                            ."\n"
                            .'当服务商在添加变配操作时设置**变更类型**为**参数变更**，您可以设置该参数。'."\n"
                            ."\n"
                            .'> - 您可以通过查看[GetService - 查询服务详细信息](~~2340828~~)接口中返回参数**OperationMetadata**的**ModifyParametersConfig**属性获取服务设置的变更参数。'."\n"
                            .'> - 您还可以通过[计算巢控制台](https://computenest.console.aliyun.com/service/instance/cn-hangzhou)的**服务实例变更**页面查看服务设置的变更参数。'."\n"
                            ."\n"
                            .'例如，如果服务设置了ECS实例规格升配，此时您需要输入比原来服务实例更高的实例规格配置。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{'."\n"
                            .'  "InstanceType": "ecs.g8ise.2xlarge"'."\n"
                            .'}',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否对此次创建请求执行预检，包括权限、实例状态校验等操作。'."\n"
                            ."\n"
                            .'取值：'."\n"
                            ."\n"
                            .'- true：发送请求，不创建服务实例。'."\n"
                            ."\n"
                            .'- false：发送请求，检查通过后创建服务实例。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'EnableUserPrometheus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户侧是否启用Prometheus监控。'."\n"
                            ."\n"
                            .'取值：'."\n"
                            ."\n"
                            .'true：启用。'."\n"
                            ."\n"
                            .'false：不启用。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'OperationName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '变配操作名称。'."\n"
                            ."\n"
                            .'您可以通过查看[GetService - 查询服务详细信息](~~2340828~~)接口中返回参数**OperationMetadata**的**ModifyParametersConfig**属性获取服务设置的变配操作名称和变配操作内容。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '套餐变配',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-42665544****',
                    ],
                ],
                [
                    'name' => 'Commodity',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '云市场购买订单信息，服务未上云市场或按量计费不必传。',
                        'type' => 'object',
                        'properties' => [
                            'AutoPay' => [
                                'description' => '是否自动支付。'."\n"
                                    ."\n"
                                    .'取值：'."\n"
                                    ."\n"
                                    .'- **true**（默认值）：自动支付。您需要确保账户余额充足。'."\n"
                                    ."\n"
                                    .'- **false**：只生成订单不扣费。如果您的支付方式余额不足，可以将参数AutoPay设置为false，此时会生成未支付订单，您可以登录[RDS管理控制台](https://rdsnext.console.aliyun.com/dashboard/cn-beijing)自行支付。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                        ],
                        'required' => false,
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
                                'example' => '06BF8F22-02DC-4750-83DF-3FFC11C065EA',
                            ],
                            'OrderId' => [
                                'description' => '订单ID。',
                                'type' => 'string',
                                'example' => '23396265896****',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"06BF8F22-02DC-4750-83DF-3FFC11C065EA\\",\\n  \\"OrderId\\": \\"23396265896****\\"\\n}","type":"json"}]',
            'title' => '变配服务实例',
            'summary' => '当服务实例的参数值或套餐设置不满足您的要求时，调用UpdateServiceInstanceSpec对服务实例执行变配操作。',
            'description' => '### 前提条件'."\n"
                .'请先确认服务商在创建服务时开启变配功能并完成变配参数设置。',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'computenest.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'computenest.ap-southeast-1.aliyuncs.com',
        ],
    ],
];
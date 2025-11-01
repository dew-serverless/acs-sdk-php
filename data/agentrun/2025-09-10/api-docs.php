<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'AgentRun',
        'version' => '2025-09-10',
    ],
    'components' => [
        'schemas' => [
            'AgentRuntime' => [
                'type' => 'object',
                'properties' => [
                    'agentRuntimeId' => [
                        'type' => 'string',
                    ],
                    'agentRuntimeName' => [
                        'type' => 'string',
                    ],
                    'agentRuntimeArn' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'statusReason' => [
                        'type' => 'string',
                    ],
                    'lastUpdatedAt' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'executionRoleArn' => [
                        'type' => 'string',
                    ],
                    'agentRuntimeVersion' => [
                        'type' => 'string',
                    ],
                    'artifactType' => [
                        'type' => 'string',
                        'enum' => [
                            'Code',
                            'Container',
                        ],
                    ],
                    'codeConfiguration' => [
                        '$ref' => '#/components/schemas/CodeConfiguration',
                    ],
                    'containerConfiguration' => [
                        '$ref' => '#/components/schemas/ContainerConfiguration',
                    ],
                    'networkConfiguration' => [
                        '$ref' => '#/components/schemas/NetworkConfiguration',
                    ],
                    'protocolConfiguration' => [
                        '$ref' => '#/components/schemas/ProtocolConfiguration',
                    ],
                    'cpu' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'memory' => [
                        'type' => 'integer',
                    ],
                    'port' => [
                        'type' => 'integer',
                    ],
                    'sessionConcurrencyLimitPerInstance' => [
                        'type' => 'integer',
                        'minimum' => '1',
                        'maximum' => '200',
                    ],
                    'logConfiguration' => [
                        '$ref' => '#/components/schemas/LogConfiguration',
                    ],
                    'healthCheckConfiguration' => [
                        '$ref' => '#/components/schemas/HealthCheckConfiguration',
                    ],
                    'sessionIdleTimeoutSeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'environmentVariables' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'AgentRuntimeEndpoint' => [
                'type' => 'object',
                'properties' => [
                    'agentRuntimeId' => [
                        'type' => 'string',
                    ],
                    'agentRuntimeEndpointId' => [
                        'type' => 'string',
                    ],
                    'agentRuntimeEndpointArn' => [
                        'type' => 'string',
                    ],
                    'agentRuntimeEndpointName' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'statusReason' => [
                        'type' => 'string',
                    ],
                    'targetVersion' => [
                        'type' => 'string',
                    ],
                    'routingConfiguration' => [
                        '$ref' => '#/components/schemas/RoutingConfiguration',
                    ],
                    'endpointPublicUrl' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'AgentRuntimeEndpointResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/AgentRuntimeEndpoint',
                    ],
                ],
            ],
            'AgentRuntimeResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/AgentRuntime',
                    ],
                ],
            ],
            'AgentRuntimeVersion' => [
                'type' => 'object',
                'properties' => [
                    'agentRuntimeArn' => [
                        'type' => 'string',
                    ],
                    'agentRuntimeId' => [
                        'type' => 'string',
                    ],
                    'agentRuntimeName' => [
                        'type' => 'string',
                    ],
                    'agentRuntimeVersion' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'lastUpdatedAt' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'AgentRuntimeVersionResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/AgentRuntimeVersion',
                    ],
                ],
            ],
            'AiFallbackConfig' => [
                'type' => 'object',
                'properties' => [
                    'serviceConfigs' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/AiFallbackServiceConfig',
                        ],
                    ],
                ],
            ],
            'AiFallbackServiceConfig' => [
                'type' => 'object',
                'properties' => [
                    'serviceId' => [
                        'type' => 'string',
                    ],
                    'targetModelName' => [
                        'type' => 'string',
                    ],
                    'passThroughModelName' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'AiServiceConfig' => [
                'type' => 'object',
                'properties' => [
                    'provider' => [
                        'type' => 'string',
                    ],
                    'address' => [
                        'type' => 'string',
                    ],
                    'enableHealthCheck' => [
                        'type' => 'boolean',
                    ],
                    'protocols' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'apiKeys' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'ApigLLMModel' => [
                'type' => 'object',
                'properties' => [
                    'modelId' => [
                        'type' => 'string',
                    ],
                    'tenantId' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'provider' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'address' => [
                        'type' => 'string',
                    ],
                    'apiKey' => [
                        'type' => 'string',
                    ],
                    'models' => [
                        'type' => 'string',
                    ],
                    'modelsWeight' => [
                        'type' => 'string',
                    ],
                    'desc' => [
                        'type' => 'string',
                    ],
                    'createdTime' => [
                        'type' => 'string',
                    ],
                    'updateTime' => [
                        'type' => 'string',
                    ],
                    'gatewayId' => [
                        'type' => 'string',
                    ],
                    'targetId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'AttachPolicyConfig' => [
                'type' => 'object',
                'properties' => [
                    'className' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'config' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Browser' => [
                'type' => 'object',
                'properties' => [
                    'browserId' => [
                        'type' => 'string',
                    ],
                    'browserName' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                        'enum' => [
                            'CREATING',
                            'CREATE_FAILED',
                            'READY',
                            'DELETING',
                            'DELETED',
                            'DELETE_FAILED',
                        ],
                    ],
                    'statusReason' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'string',
                    ],
                    'lastUpdatedAt' => [
                        'type' => 'string',
                    ],
                    'executionRoleArn' => [
                        'type' => 'string',
                    ],
                    'networkConfiguration' => [
                        '$ref' => '#/components/schemas/NetworkConfiguration',
                    ],
                    'recording' => [
                        '$ref' => '#/components/schemas/BrowserRecordingConfiguration',
                    ],
                    'memory' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'credentialId' => [
                        'type' => 'string',
                    ],
                    'cpu' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'tenantId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'BrowserAutomationStream' => [
                'type' => 'object',
                'properties' => [
                    'streamEndpoint' => [
                        'type' => 'string',
                    ],
                    'streamStatus' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'BrowserLiveViewStream' => [
                'type' => 'object',
                'properties' => [
                    'streamEndpoint' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'BrowserOssLocation' => [
                'type' => 'object',
                'properties' => [
                    'bucket' => [
                        'type' => 'string',
                    ],
                    'prefix' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'BrowserRecordingConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'enabled' => [
                        'type' => 'boolean',
                    ],
                    'ossLocation' => [
                        '$ref' => '#/components/schemas/BrowserOssLocation',
                    ],
                ],
            ],
            'BrowserResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/Browser',
                    ],
                ],
            ],
            'BrowserSessionListOut' => [
                'type' => 'object',
                'properties' => [
                    'total' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'pageNumber' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'pageSize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'items' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/BrowserSessionOut',
                        ],
                    ],
                ],
            ],
            'BrowserSessionOut' => [
                'type' => 'object',
                'required' => true,
                'properties' => [
                    'sessionId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'browserId' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'string',
                    ],
                    'lastUpdatedAt' => [
                        'type' => 'string',
                    ],
                    'browserName' => [
                        'type' => 'string',
                    ],
                    'sessionIdleTimeoutSeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'BrowserStreams' => [
                'type' => 'object',
                'properties' => [
                    'automationStream' => [
                        '$ref' => '#/components/schemas/BrowserAutomationStream',
                    ],
                    'liveViewStream' => [
                        '$ref' => '#/components/schemas/BrowserLiveViewStream',
                    ],
                ],
            ],
            'BrowserViewPort' => [
                'type' => 'object',
                'properties' => [
                    'height' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'width' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                ],
            ],
            'CAPConfig' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'functionName' => [
                        'type' => 'string',
                    ],
                    'templateId' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'CodeConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'zipFile' => [
                        'type' => 'string',
                    ],
                    'ossBucketName' => [
                        'type' => 'string',
                    ],
                    'ossObjectName' => [
                        'type' => 'string',
                    ],
                    'checksum' => [
                        'type' => 'string',
                    ],
                    'language' => [
                        'type' => 'string',
                        'enum' => [
                            'python3.10',
                            'python3.12',
                            'nodejs18',
                            'nodejs20',
                            'java8',
                            'java11',
                        ],
                    ],
                    'command' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'CodeInfo' => [
                'type' => 'object',
                'properties' => [
                    'ossBucketName' => [
                        'type' => 'string',
                    ],
                    'ossObjectName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CodeInterpreter' => [
                'type' => 'object',
                'properties' => [
                    'codeInterpreterId' => [
                        'type' => 'string',
                    ],
                    'codeInterpreterName' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'executionRoleArn' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'string',
                    ],
                    'lastUpdatedAt' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                        'enum' => [
                            'READY',
                            'TERMINATED',
                        ],
                    ],
                    'statusReason' => [
                        'type' => 'string',
                    ],
                    'networkConfiguration' => [
                        '$ref' => '#/components/schemas/NetworkConfiguration',
                    ],
                    'memory' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'cpu' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'tenantId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CodeInterpreterResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/CodeInterpreter',
                    ],
                ],
            ],
            'CodeInterpreterSessionConfig' => [
                'type' => 'object',
                'properties' => [
                    'timeout' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'environment' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'workingDirectory' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CodeInterpreterSessionListOut' => [
                'type' => 'object',
                'properties' => [
                    'total' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'pageNumber' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'pageSize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'items' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/CodeInterpreterSessionOut',
                        ],
                    ],
                ],
            ],
            'CodeInterpreterSessionOut' => [
                'type' => 'object',
                'properties' => [
                    'sessionId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'codeInterpreterId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'status' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'createdAt' => [
                        'type' => 'string',
                    ],
                    'lastUpdatedAt' => [
                        'type' => 'string',
                    ],
                    'sessionIdleTimeoutSeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'codeInterpreterName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CommonResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        'type' => 'any',
                    ],
                ],
            ],
            'ContainerConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'image' => [
                        'type' => 'string',
                    ],
                    'command' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'CreateAgentRuntimeEndpointInput' => [
                'type' => 'object',
                'properties' => [
                    'targetVersion' => [
                        'type' => 'string',
                    ],
                    'agentRuntimeEndpointName' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'routingConfiguration' => [
                        '$ref' => '#/components/schemas/RoutingConfiguration',
                    ],
                ],
            ],
            'CreateAgentRuntimeInput' => [
                'type' => 'object',
                'properties' => [
                    'agentRuntimeName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'artifactType' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'Code',
                            'Container',
                        ],
                    ],
                    'codeConfiguration' => [
                        '$ref' => '#/components/schemas/CodeConfiguration',
                    ],
                    'containerConfiguration' => [
                        '$ref' => '#/components/schemas/ContainerConfiguration',
                    ],
                    'credentialId' => [
                        'type' => 'string',
                    ],
                    'networkConfiguration' => [
                        '$ref' => '#/components/schemas/NetworkConfiguration',
                        'required' => true,
                    ],
                    'protocolConfiguration' => [
                        '$ref' => '#/components/schemas/ProtocolConfiguration',
                    ],
                    'executionRoleArn' => [
                        'type' => 'string',
                    ],
                    'cpu' => [
                        'type' => 'number',
                        'format' => 'float',
                        'required' => true,
                    ],
                    'memory' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'port' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'sessionConcurrencyLimitPerInstance' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'minimum' => '1',
                        'maximum' => '200',
                    ],
                    'environmentVariables' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'logConfiguration' => [
                        '$ref' => '#/components/schemas/LogConfiguration',
                    ],
                    'sessionIdleTimeoutSeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'healthCheckConfiguration' => [
                        '$ref' => '#/components/schemas/HealthCheckConfiguration',
                    ],
                ],
            ],
            'CreateAgentRuntimeVersionInput' => [
                'type' => 'object',
                'properties' => [
                    'description' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CreateApigLLMModelInput' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'provider' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'address' => [
                        'type' => 'string',
                    ],
                    'apiKey' => [
                        'type' => 'string',
                    ],
                    'desc' => [
                        'type' => 'string',
                    ],
                    'models' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'CreateBrowserInput' => [
                'type' => 'object',
                'properties' => [
                    'browserName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'networkConfiguration' => [
                        '$ref' => '#/components/schemas/NetworkConfiguration',
                        'required' => true,
                    ],
                    'executionRoleArn' => [
                        'type' => 'string',
                    ],
                    'memory' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'minimum' => '1024',
                        'maximum' => '16384',
                    ],
                    'cpu' => [
                        'type' => 'number',
                        'format' => 'float',
                        'required' => true,
                    ],
                    'sessionIdleTimeoutSeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'credentialId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CreateCodeInterpreterInput' => [
                'type' => 'object',
                'properties' => [
                    'codeInterpreterName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'networkConfiguration' => [
                        '$ref' => '#/components/schemas/NetworkConfiguration',
                        'required' => true,
                    ],
                    'memory' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'minimum' => '128',
                        'maximum' => '16384',
                    ],
                    'executionRoleArn' => [
                        'type' => 'string',
                    ],
                    'cpu' => [
                        'type' => 'number',
                        'format' => 'float',
                        'required' => true,
                        'minimum' => '2.0',
                        'maximum' => '16.0',
                    ],
                    'sessionIdleTimeoutSeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'credentialId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CreateCredentialInput' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                        'enum' => [
                            'api_key',
                            'jwt',
                        ],
                    ],
                    'secret' => [
                        'type' => 'string',
                    ],
                    'config' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'CreateCredentialOutput' => [
                'type' => 'object',
                'properties' => [
                    'id' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CreateDomainInput' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'protocol' => [
                        'type' => 'string',
                    ],
                    'certIdentifier' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CreateGatewayInput' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'identityId' => [
                        'type' => 'string',
                    ],
                    'networkConfiguration' => [
                        '$ref' => '#/components/schemas/GatewayNetworkConfiguration',
                    ],
                ],
            ],
            'CreateGatewayTargetInput' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'domainId' => [
                        'type' => 'string',
                    ],
                    'targetConfiguration' => [
                        '$ref' => '#/components/schemas/TargetConfiguration',
                    ],
                ],
            ],
            'CreateModelInput' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'provider' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'address' => [
                        'type' => 'string',
                    ],
                    'apiKey' => [
                        'type' => 'string',
                    ],
                    'models' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'desc' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CreateToolData' => [
                'type' => 'object',
                'properties' => [
                    'id' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'toolType' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'string',
                    ],
                    'sourceType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CreateToolInput' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'toolType' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'function_call',
                            'mcp',
                        ],
                    ],
                    'sourceType' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'template',
                            'custom',
                            'schema',
                        ],
                    ],
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'CAPConfig' => [
                        '$ref' => '#/components/schemas/CAPConfig',
                    ],
                ],
            ],
            'CreateToolOutput' => [
                'type' => 'object',
                'properties' => [
                    'success' => [
                        'type' => 'boolean',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/CreateToolData',
                    ],
                ],
            ],
            'CredentialListItem' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'string',
                    ],
                    'updatedAt' => [
                        'type' => 'string',
                    ],
                    'id' => [
                        'type' => 'string',
                    ],
                    'relatedWorloads' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/RelatedWorkload',
                        ],
                    ],
                ],
            ],
            'CustomRuntimeConfig' => [
                'type' => 'object',
                'properties' => [
                    'port' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'command' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'args' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'DeleteBrowserOut' => [
                'type' => 'object',
                'properties' => [
                    'browserId' => [
                        'type' => 'string',
                    ],
                    'browserName' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DeleteBrowserResult' => [
                'type' => 'object',
                'properties' => [
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'code' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/Browser',
                    ],
                ],
            ],
            'DeleteCodeInterpreterOut' => [
                'type' => 'object',
                'properties' => [
                    'codeInterpreterId' => [
                        'type' => 'string',
                    ],
                    'codeInterpreterName' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DeleteCodeInterpreterResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/CodeInterpreter',
                    ],
                ],
            ],
            'DomainInfo' => [
                'type' => 'object',
                'properties' => [
                    'domainId' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'protocol' => [
                        'type' => 'string',
                    ],
                    'certIdentifier' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ErrorResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'FCLinkConfig' => [
                'type' => 'object',
                'properties' => [
                    'functionName' => [
                        'type' => 'string',
                    ],
                    'version' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Gateway' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'gatewayId' => [
                        'type' => 'string',
                    ],
                    'internetUrl' => [
                        'type' => 'string',
                    ],
                    'intranetUrl' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'string',
                    ],
                    'updatedAt' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'GatewayNetworkConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'networkMode' => [
                        'type' => 'string',
                    ],
                    'vpcId' => [
                        'type' => 'string',
                    ],
                    'vswitchIds' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'GetBrowserSessionResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/BrowserSessionOut',
                    ],
                ],
            ],
            'GetCodeInterpreterSessionResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/CodeInterpreterSessionOut',
                    ],
                ],
            ],
            'GetCredentialOutput' => [
                'type' => 'object',
                'properties' => [
                    'id' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                        'enum' => [
                            'api_key',
                            'jwt',
                        ],
                    ],
                    'secret' => [
                        'type' => 'string',
                    ],
                    'config' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'createdAt' => [
                        'type' => 'string',
                    ],
                    'updatedAt' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'GetToolOutput' => [
                'type' => 'object',
                'properties' => [
                    'success' => [
                        'type' => 'boolean',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/ToolInfo',
                    ],
                ],
            ],
            'GrayTrafficWeight' => [
                'type' => 'object',
                'properties' => [
                    'version' => [
                        'type' => 'string',
                    ],
                    'weight' => [
                        'type' => 'number',
                        'format' => 'float',
                        'minimum' => '0',
                        'maximum' => '1',
                    ],
                ],
            ],
            'HealthCheckConfig' => [
                'type' => 'object',
                'properties' => [
                    'httpGetUrl' => [
                        'type' => 'string',
                        'maximum' => '2048',
                    ],
                    'initialDelaySeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'minimum' => '0',
                        'maximum' => '120',
                    ],
                    'periodSeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'minimum' => '1',
                        'maximum' => '120',
                    ],
                    'timeoutSeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'minimum' => '1',
                        'maximum' => '3',
                    ],
                    'failureThreshold' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'minimum' => '1',
                        'maximum' => '120',
                    ],
                    'successThreshold' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'minimum' => '1',
                        'maximum' => '120',
                    ],
                ],
            ],
            'HealthCheckConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'httpGetUrl' => [
                        'type' => 'string',
                        'maximum' => '2048',
                    ],
                    'initialDelaySeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'minimum' => '0',
                        'maximum' => '120',
                    ],
                    'periodSeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'minimum' => '1',
                        'maximum' => '120',
                    ],
                    'timeoutSeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'minimum' => '1',
                        'maximum' => '3',
                    ],
                    'failureThreshold' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'minimum' => '1',
                        'maximum' => '120',
                    ],
                    'successThreshold' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'minimum' => '1',
                        'maximum' => '120',
                    ],
                ],
            ],
            'LLMAPIConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'removeBasePathOnForward' => [
                        'type' => 'boolean',
                    ],
                    'basePath' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'modelCategory' => [
                        'type' => 'string',
                    ],
                    'aiProtocols' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'deployConfigs' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/LLMDeployConfig',
                        ],
                    ],
                    'attachPolicyConfigs' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/AttachPolicyConfig',
                        ],
                    ],
                ],
            ],
            'LLMDeployConfig' => [
                'type' => 'object',
                'properties' => [
                    'backendScene' => [
                        'type' => 'string',
                    ],
                    'autoDeploy' => [
                        'type' => 'boolean',
                    ],
                    'gatewayType' => [
                        'type' => 'string',
                    ],
                    'serviceConfigs' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/TargetServiceConfig',
                        ],
                    ],
                    'policyConfigs' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/PolicyConfig',
                        ],
                    ],
                    'customDomainIds' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'ListAgentRuntimeEndpointsInput' => [
                'type' => 'object',
                'properties' => [
                    'endpointName' => [
                        'type' => 'string',
                    ],
                    'statuses' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'pageNumber' => [
                        'type' => 'integer',
                    ],
                    'pageSize' => [
                        'type' => 'integer',
                    ],
                ],
            ],
            'ListAgentRuntimeEndpointsOutput' => [
                'type' => 'object',
                'properties' => [
                    'items' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/AgentRuntimeEndpoint',
                        ],
                    ],
                    'pageNumber' => [
                        'type' => 'integer',
                    ],
                    'pageSize' => [
                        'type' => 'integer',
                    ],
                    'total' => [
                        'type' => 'integer',
                    ],
                ],
            ],
            'ListAgentRuntimeEndpointsResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/ListAgentRuntimeEndpointsOutput',
                    ],
                ],
            ],
            'ListAgentRuntimeVersionsInput' => [
                'type' => 'object',
                'properties' => [
                    'pageNumber' => [
                        'type' => 'integer',
                    ],
                    'pageSize' => [
                        'type' => 'integer',
                    ],
                ],
            ],
            'ListAgentRuntimeVersionsOutput' => [
                'type' => 'object',
                'properties' => [
                    'items' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/AgentRuntimeVersion',
                        ],
                    ],
                    'pageNumber' => [
                        'type' => 'integer',
                    ],
                    'pageSize' => [
                        'type' => 'integer',
                    ],
                    'total' => [
                        'type' => 'integer',
                    ],
                ],
            ],
            'ListAgentRuntimeVersionsResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/ListAgentRuntimeVersionsOutput',
                    ],
                ],
            ],
            'ListAgentRuntimesInput' => [
                'type' => 'object',
                'properties' => [
                    'agentRuntimeName' => [
                        'type' => 'string',
                    ],
                    'statuses' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'pageNumber' => [
                        'type' => 'integer',
                    ],
                    'pageSize' => [
                        'type' => 'integer',
                    ],
                ],
            ],
            'ListAgentRuntimesOutput' => [
                'type' => 'object',
                'properties' => [
                    'items' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/AgentRuntime',
                        ],
                    ],
                    'pageNumber' => [
                        'type' => 'integer',
                    ],
                    'pageSize' => [
                        'type' => 'integer',
                    ],
                    'total' => [
                        'type' => 'integer',
                    ],
                ],
            ],
            'ListAgentRuntimesResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/ListAgentRuntimesOutput',
                    ],
                ],
            ],
            'ListBrowserSessionResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/BrowserSessionListOut',
                    ],
                ],
            ],
            'ListBrowsersInput' => [
                'type' => 'object',
                'properties' => [
                    'browserName' => [
                        'type' => 'string',
                    ],
                    'pageSize' => [
                        'type' => 'integer',
                    ],
                    'pageNumber' => [
                        'type' => 'integer',
                    ],
                ],
            ],
            'ListBrowsersOutput' => [
                'type' => 'object',
                'properties' => [
                    'pageNumber' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'pageSize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'total' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'items' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Browser',
                        ],
                    ],
                ],
            ],
            'ListBrowsersResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/ListBrowsersOutput',
                    ],
                ],
            ],
            'ListCodeInterpreterSessionResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/CodeInterpreterSessionListOut',
                    ],
                ],
            ],
            'ListCodeInterpretersInput' => [
                'type' => 'object',
                'properties' => [
                    'codeInterpreterName' => [
                        'type' => 'string',
                    ],
                    'pageNumber' => [
                        'type' => 'integer',
                        'minimum' => '1',
                    ],
                    'pageSize' => [
                        'type' => 'integer',
                        'minimum' => '1',
                    ],
                ],
            ],
            'ListCodeInterpretersOutput' => [
                'type' => 'object',
                'properties' => [
                    'pageNumber' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'pageSize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'total' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'items' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/CodeInterpreter',
                        ],
                    ],
                ],
            ],
            'ListCodeInterpretersResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/ListCodeInterpretersOutput',
                    ],
                ],
            ],
            'ListCredentialsOutput' => [
                'type' => 'object',
                'properties' => [
                    'items' => [
                        '$ref' => '#/components/schemas/CredentialListItem',
                    ],
                    'total' => [
                        'type' => 'string',
                    ],
                    'pageSize' => [
                        'type' => 'string',
                    ],
                    'pageNum' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ListDomainsOutput' => [
                'type' => 'object',
                'properties' => [
                    'items' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DomainInfo',
                        ],
                    ],
                    'pageNumber' => [
                        'type' => 'string',
                    ],
                    'pageSize' => [
                        'type' => 'string',
                    ],
                    'totalCount' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ListGatewaysOutput' => [
                'type' => 'object',
                'properties' => [
                    'items' => [
                        '$ref' => '#/components/schemas/Gateway',
                    ],
                    'pageNumber' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'pageSize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'total' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'ListToolsOutput' => [
                'type' => 'object',
                'properties' => [
                    'data' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ToolListItem',
                        ],
                    ],
                    'pageSize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'pageNum' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'total' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'LogConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'project' => [
                        'type' => 'string',
                    ],
                    'logstore' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'MCPAPI' => [
                'type' => 'object',
                'properties' => [
                    'description' => [
                        'type' => 'string',
                    ],
                    'toolId' => [
                        'type' => 'string',
                    ],
                    'match' => [
                        '$ref' => '#/components/schemas/MCPMatch',
                    ],
                    'backendConfig' => [
                        '$ref' => '#/components/schemas/MCPBackendConfig',
                    ],
                    'protocol' => [
                        'type' => 'string',
                    ],
                    'exposedUriPath' => [
                        'type' => 'string',
                    ],
                    'mcpStatisticsEnable' => [
                        'type' => 'boolean',
                    ],
                    'toolsConfig' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'MCPAPIConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'toolId' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'protocol' => [
                        'type' => 'string',
                    ],
                    'exposedUriPath' => [
                        'type' => 'string',
                    ],
                    'mcpStatisticsEnable' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'MCPBackendConfig' => [
                'type' => 'object',
                'properties' => [
                    'scene' => [
                        'type' => 'string',
                    ],
                    'services' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/MCPServiceConfig',
                        ],
                    ],
                ],
            ],
            'MCPMatch' => [
                'type' => 'object',
                'properties' => [
                    'path' => [
                        '$ref' => '#/components/schemas/MCPPathMatch',
                    ],
                ],
            ],
            'MCPPathMatch' => [
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'type' => 'string',
                    ],
                    'value' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'MCPServerConfig' => [
                'type' => 'object',
                'properties' => [
                    'transportType' => [
                        'type' => 'string',
                    ],
                    'serverUrl' => [
                        'type' => 'string',
                    ],
                    'ssePath' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'MCPServiceConfig' => [
                'type' => 'object',
                'properties' => [
                    'serviceId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Model' => [
                'type' => 'object',
                'properties' => [
                    'modelId' => [
                        'type' => 'string',
                    ],
                    'tenantId' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'provider' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'address' => [
                        'type' => 'string',
                    ],
                    'apiKey' => [
                        'type' => 'string',
                    ],
                    'models' => [
                        'type' => 'string',
                    ],
                    'modelsWeight' => [
                        'type' => 'string',
                    ],
                    'desc' => [
                        'type' => 'string',
                    ],
                    'createdTime' => [
                        'type' => 'string',
                    ],
                    'updateTime' => [
                        'type' => 'string',
                    ],
                    'gatewayId' => [
                        'type' => 'string',
                    ],
                    'targetId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'NetworkConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'networkMode' => [
                        'type' => 'string',
                        'enum' => [
                            'PUBLIC',
                            'PRIVATE',
                            'PUBLIC_AND_PRIVATE',
                        ],
                    ],
                    'vpcId' => [
                        'type' => 'string',
                    ],
                    'securityGroupId' => [
                        'type' => 'string',
                    ],
                    'vswitchIds' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'PaginationInfo' => [
                'type' => 'object',
                'properties' => [
                    'page' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'limit' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'total' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'totalPages' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'PolicyConfig' => [
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'type' => 'string',
                    ],
                    'enable' => [
                        'type' => 'boolean',
                    ],
                    'aiFallbackConfig' => [
                        '$ref' => '#/components/schemas/AiFallbackConfig',
                    ],
                ],
            ],
            'ProtocolConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'type' => 'string',
                        'enum' => [
                            'HTTP',
                            'MCP',
                        ],
                    ],
                ],
            ],
            'PublishRuntimeVersionInput' => [
                'type' => 'object',
                'properties' => [
                    'description' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'RelatedWorkload' => [
                'type' => 'object',
                'properties' => [
                    'workloadId' => [
                        'type' => 'string',
                    ],
                    'workloadName' => [
                        'type' => 'string',
                    ],
                    'workloadType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'RoutingConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'versionWeights' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/VersionWeight',
                        ],
                    ],
                ],
            ],
            'ServiceConfig' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'aiServiceConfig' => [
                        '$ref' => '#/components/schemas/AiServiceConfig',
                    ],
                ],
            ],
            'StartBrowserSessionInput' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'StartBrowserSessionResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/BrowserSessionOut',
                    ],
                ],
            ],
            'StartCodeInterpreterSessionInput' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'StartCodeInterpreterSessionResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/CodeInterpreterSessionOut',
                    ],
                ],
            ],
            'StopCodeInterpreterSessionResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Target' => [
                'type' => 'object',
                'properties' => [
                    'targetType' => [
                        'type' => 'string',
                    ],
                    'llmConfig' => [
                        '$ref' => '#/components/schemas/LLMAPIConfiguration',
                    ],
                    'mcpAPI' => [
                        '$ref' => '#/components/schemas/MCPAPI',
                    ],
                ],
            ],
            'TargetConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'targetType' => [
                        'type' => 'string',
                    ],
                    'llmAPIConfig' => [
                        '$ref' => '#/components/schemas/LLMAPIConfiguration',
                    ],
                    'mcpAPIConfig' => [
                        '$ref' => '#/components/schemas/MCPAPIConfiguration',
                    ],
                ],
            ],
            'TargetServiceConfig' => [
                'type' => 'object',
                'properties' => [
                    'weight' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'modelName' => [
                        'type' => 'string',
                    ],
                    'modelNamePattern' => [
                        'type' => 'string',
                    ],
                    'modelId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Template' => [
                'type' => 'object',
                'properties' => [
                    'templateID' => [
                        'type' => 'string',
                    ],
                    'templateVersion' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ToolInfo' => [
                'type' => 'object',
                'properties' => [
                    'id' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'toolType' => [
                        'type' => 'string',
                    ],
                    'schema' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'string',
                    ],
                    'updatedAt' => [
                        'type' => 'string',
                    ],
                    'sourceType' => [
                        'type' => 'string',
                    ],
                    'CAPConfig' => [
                        '$ref' => '#/components/schemas/CAPConfig',
                    ],
                ],
            ],
            'ToolListItem' => [
                'type' => 'object',
                'properties' => [
                    'id' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'toolType' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'string',
                    ],
                    'updatedAt' => [
                        'type' => 'string',
                    ],
                    'sourceType' => [
                        'type' => 'string',
                    ],
                    'schema' => [
                        'type' => 'string',
                    ],
                    'CAPConfig' => [
                        '$ref' => '#/components/schemas/CAPConfig',
                    ],
                ],
            ],
            'TriggerConfig' => [
                'type' => 'object',
                'properties' => [
                    'authType' => [
                        'type' => 'string',
                    ],
                    'methods' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'UpdateAgentRuntimeEndpointInput' => [
                'type' => 'object',
                'properties' => [
                    'agentRuntimeEndpointName' => [
                        'type' => 'string',
                    ],
                    'targetVersion' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'routingConfiguration' => [
                        '$ref' => '#/components/schemas/RoutingConfiguration',
                    ],
                ],
            ],
            'UpdateAgentRuntimeInput' => [
                'type' => 'object',
                'properties' => [
                    'agentRuntimeName' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'artifactType' => [
                        'type' => 'string',
                        'enum' => [
                            'Code',
                            'Container',
                        ],
                    ],
                    'codeConfiguration' => [
                        '$ref' => '#/components/schemas/CodeConfiguration',
                    ],
                    'containerConfiguration' => [
                        '$ref' => '#/components/schemas/ContainerConfiguration',
                    ],
                    'environmentVariables' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'networkConfiguration' => [
                        '$ref' => '#/components/schemas/NetworkConfiguration',
                    ],
                    'protocolConfiguration' => [
                        '$ref' => '#/components/schemas/ProtocolConfiguration',
                    ],
                    'executionRoleArn' => [
                        'type' => 'string',
                    ],
                    'cpu' => [
                        'type' => 'number',
                        'format' => 'float',
                        'required' => true,
                    ],
                    'memory' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'port' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'sessionConcurrencyLimitPerInstance' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'minimum' => '1',
                        'maximum' => '200',
                    ],
                    'logConfiguration' => [
                        '$ref' => '#/components/schemas/LogConfiguration',
                    ],
                    'sessionIdleTimeoutSeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'healthCheckConfiguration' => [
                        '$ref' => '#/components/schemas/HealthCheckConfiguration',
                    ],
                ],
            ],
            'UpdateApigLLMModelInput' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'provider' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'address' => [
                        'type' => 'string',
                    ],
                    'apiKey' => [
                        'type' => 'string',
                    ],
                    'desc' => [
                        'type' => 'string',
                    ],
                    'models' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'UpdateCredentialInput' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                        'enum' => [
                            'api_key',
                            'jwt',
                        ],
                    ],
                    'secret' => [
                        'type' => 'string',
                    ],
                    'config' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'UpdateCredentialOutput' => [
                'type' => 'object',
                'properties' => [
                    'id' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'updatedAt' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'UpdateDomainInput' => [
                'type' => 'object',
                'properties' => [
                    'protocol' => [
                        'type' => 'string',
                    ],
                    'certIdentifier' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'UpdateModelInput' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'provider' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'address' => [
                        'type' => 'string',
                    ],
                    'apiKey' => [
                        'type' => 'string',
                    ],
                    'models' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'desc' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'UpdateTargetConfigurationInput' => [
                'type' => 'object',
                'properties' => [
                    'domainId' => [
                        'type' => 'string',
                    ],
                    'targetConfiguration' => [
                        '$ref' => '#/components/schemas/TargetConfiguration',
                    ],
                ],
            ],
            'UpdateToolData' => [
                'type' => 'object',
                'properties' => [
                    'id' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'sourceType' => [
                        'type' => 'string',
                    ],
                    'toolType' => [
                        'type' => 'string',
                    ],
                    'updatedAt' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'UpdateToolInput' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'UpdateToolOutput' => [
                'type' => 'object',
                'properties' => [
                    'success' => [
                        'type' => 'boolean',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/UpdateToolData',
                    ],
                ],
            ],
            'VersionWeight' => [
                'type' => 'object',
                'properties' => [
                    'version' => [
                        'type' => 'string',
                    ],
                    'weight' => [
                        'type' => 'number',
                        'format' => 'float',
                        'minimum' => '0',
                        'maximum' => '1',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'CreateAgentRuntime' => [
            'path' => '/2025-09-10/agents/runtimes',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/CreateAgentRuntimeInput',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetAgentRuntime' => [
            'path' => '/2025-09-10/agents/runtimes/{agentRuntimeId}',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'parameters' => [
                [
                    'name' => 'agentRuntimeId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'agentRuntimeVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateAgentRuntime' => [
            'path' => '/2025-09-10/agents/runtimes/{agentRuntimeId}',
            'methods' => [
                'put',
            ],
            'schemes' => [
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
            'parameters' => [
                [
                    'name' => 'agentRuntimeId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/UpdateAgentRuntimeInput',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteAgentRuntime' => [
            'path' => '/2025-09-10/agents/runtimes/{agentRuntimeId}',
            'methods' => [
                'delete',
            ],
            'schemes' => [
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
            'parameters' => [
                [
                    'name' => 'agentRuntimeId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListAgentRuntimes' => [
            'path' => '/2025-09-10/agents/runtimes',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'parameters' => [
                [
                    'name' => 'agentRuntimeName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateAgentRuntimeEndpoint' => [
            'path' => '/2025-09-10/agents/runtimes/{agentRuntimeId}/endpoints',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'parameters' => [
                [
                    'name' => 'agentRuntimeId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/CreateAgentRuntimeEndpointInput',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListAgentRuntimeEndpoints' => [
            'path' => '/2025-09-10/agents/runtimes/{agentRuntimeId}/endpoints',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'parameters' => [
                [
                    'name' => 'agentRuntimeId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'endpointName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetAgentRuntimeEndpoint' => [
            'path' => '/2025-09-10/agents/runtimes/{agentRuntimeId}/endpoints/{agentRuntimeEndpointId}',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'parameters' => [
                [
                    'name' => 'agentRuntimeId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'agentRuntimeEndpointId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateAgentRuntimeEndpoint' => [
            'path' => '/2025-09-10/agents/runtimes/{agentRuntimeId}/endpoints/{agentRuntimeEndpointId}',
            'methods' => [
                'put',
            ],
            'schemes' => [
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
            'parameters' => [
                [
                    'name' => 'agentRuntimeId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'agentRuntimeEndpointId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/UpdateAgentRuntimeEndpointInput',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteAgentRuntimeEndpoint' => [
            'path' => '/2025-09-10/agents/runtimes/{agentRuntimeId}/endpoints/{agentRuntimeEndpointId}',
            'methods' => [
                'delete',
            ],
            'schemes' => [
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
            'parameters' => [
                [
                    'name' => 'agentRuntimeId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'agentRuntimeEndpointId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'PublishRuntimeVersion' => [
            'path' => '/2025-09-10/agents/runtimes/{agentRuntimeId}/versions',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'parameters' => [
                [
                    'name' => 'agentRuntimeId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/PublishRuntimeVersionInput',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListAgentRuntimeVersions' => [
            'path' => '/2025-09-10/agents/runtimes/{agentRuntimeId}/versions',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'parameters' => [
                [
                    'name' => 'agentRuntimeId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateCodeInterpreter' => [
            'path' => '/2025-09-10/agents/code-interpreters',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/CreateCodeInterpreterInput',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListCodeInterpreters' => [
            'path' => '/2025-09-10/agents/code-interpreters',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'parameters' => [
                [
                    'name' => 'codeInterpreterName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetCodeInterpreter' => [
            'path' => '/2025-09-10/agents/code-interpreters/{codeInterpreterId}',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'parameters' => [
                [
                    'name' => 'codeInterpreterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteCodeInterpreter' => [
            'path' => '/2025-09-10/agents/code-interpreters/{codeInterpreterId}',
            'methods' => [
                'delete',
            ],
            'schemes' => [
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
            'parameters' => [
                [
                    'name' => 'codeInterpreterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateBrowser' => [
            'path' => '/2025-09-10/agents/browsers',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/CreateBrowserInput',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListBrowsers' => [
            'path' => '/2025-09-10/agents/browsers',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'parameters' => [
                [
                    'name' => 'browserName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'status',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetBrowser' => [
            'path' => '/2025-09-10/agents/browsers/{browserId}',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'parameters' => [
                [
                    'name' => 'browserId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteBrowser' => [
            'path' => '/2025-09-10/agents/browsers/{browserId}',
            'methods' => [
                'delete',
            ],
            'schemes' => [
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
            'parameters' => [
                [
                    'name' => 'browserId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateMemory' => [
            'path' => '/2025-09-10/agents/memories',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'shortTtl' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'longTtl' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'strategy' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetMemory' => [
            'path' => '/2025-09-10/agents/memories/{memoryName}',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'memoryName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateMemory' => [
            'path' => '/2025-09-10/agents/memories/{memoryName}',
            'methods' => [
                'put',
            ],
            'schemes' => [
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
            'parameters' => [
                [
                    'name' => 'memoryName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'shortTtl' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'longTtl' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'strategy' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteMemory' => [
            'path' => '/2025-09-10/agents/memories/{memoryName}',
            'methods' => [
                'delete',
            ],
            'schemes' => [
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
            'parameters' => [
                [
                    'name' => 'memoryName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListMemory' => [
            'path' => '/2025-09-10/agents/memories',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'pattern',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'RetrieveMemory' => [
            'path' => '/2025-09-10/agents/memories/{memoryName}/records',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'query' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'userId' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'namespace' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'metadata' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'additionalProperties' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'memory' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'topk' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'from' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'to' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'store' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'memoryName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListMemorySessions' => [
            'path' => '/2025-09-10/agents/memories/{memoryName}/sessions',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'memoryName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'from',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'to',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetMemorySession' => [
            'path' => '/2025-09-10/agents/memories/{memoryName}/sessions/{sessionId}',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'memoryName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'sessionId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'from',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'to',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateMemoryEvent' => [
            'path' => '/2025-09-10/agents/memories/{memoryName}/events',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'memoryName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'events' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'userId' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'sessionId' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'eventId' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'metadata' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'additionalProperties' => [
                                                'type' => 'any',
                                            ],
                                        ],
                                        'message' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'additionalProperties' => [
                                                    'type' => 'string',
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
        'GetMemoryEvent' => [
            'path' => '/2025-09-10/agents/memories/{memoryName}/sessions/{sessionId}/events/{eventId}',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'memoryName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'sessionId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'eventId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'from',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'to',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListMemoryEvent' => [
            'path' => '/2025-09-10/agents/memories/{memoryName}/sessions/{sessionId}/events',
            'methods' => [
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'memoryName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'sessionId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'from',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'to',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'agentrun.cn-hangzhou.aliyuncs.com',
        ],
    ],
];
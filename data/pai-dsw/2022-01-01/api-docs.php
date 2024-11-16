<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'pai-dsw',
        'version' => '2022-01-01',
    ],
    'components' => [
        'schemas' => [
            'CredentialConfig' => [
                'type' => 'object',
                'properties' => [
                    'Enable' => [
                        'type' => 'boolean',
                    ],
                    'AliyunEnvRoleKey' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Configs' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'Type' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'Roles' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'RoleArn' => [
                                                'type' => 'string',
                                                'required' => true,
                                            ],
                                            'RoleType' => [
                                                'type' => 'string',
                                                'required' => true,
                                            ],
                                            'AssumeRoleFor' => [
                                                'type' => 'string',
                                            ],
                                            'Policy' => [
                                                'type' => 'string',
                                            ],
                                            'UserInfo' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Id' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Type' => [
                                                        'type' => 'string',
                                                    ],
                                                    'AccessKeyId' => [
                                                        'type' => 'string',
                                                    ],
                                                    'SecurityToken' => [
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
            'DemoCategory' => [
                'type' => 'object',
                'properties' => [
                    'SubCategories' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DemoCategory',
                        ],
                    ],
                    'CategoryName' => [
                        'type' => 'string',
                    ],
                    'CategoryCode' => [
                        'type' => 'string',
                    ],
                    'Order' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'ForwardInfo' => [
                'type' => 'object',
                'properties' => [
                    'Enable' => [
                        'type' => 'boolean',
                    ],
                    'ContainerName' => [
                        'type' => 'string',
                    ],
                    'ForwardPort' => [
                        'type' => 'string',
                    ],
                    'NatGatewayId' => [
                        'type' => 'string',
                    ],
                    'EipAllocationId' => [
                        'type' => 'string',
                    ],
                    'SSHPublicKey' => [
                        'type' => 'string',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'ExternalPort' => [
                        'type' => 'string',
                    ],
                    'AccessType' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'ForwardInfoResponse' => [
                'type' => 'object',
                'properties' => [
                    'Enable' => [
                        'type' => 'boolean',
                    ],
                    'ContainerName' => [
                        'type' => 'string',
                    ],
                    'ForwardPort' => [
                        'type' => 'string',
                    ],
                    'NatGatewayId' => [
                        'type' => 'string',
                    ],
                    'EipAllocationId' => [
                        'type' => 'string',
                    ],
                    'SSHPublicKey' => [
                        'type' => 'string',
                    ],
                    'ConnectInfo' => [
                        'type' => 'object',
                        'properties' => [
                            'Phase' => [
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'Intranet' => [
                                'type' => 'object',
                                'properties' => [
                                    'Endpoint' => [
                                        'type' => 'string',
                                    ],
                                    'Port' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'Internet' => [
                                'type' => 'object',
                                'properties' => [
                                    'Endpoint' => [
                                        'type' => 'string',
                                    ],
                                    'Port' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'ExternalPort' => [
                        'type' => 'string',
                    ],
                    'AccessType' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'CreateInstance' => [
            'path' => '/api/v2/instances',
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
                            'WorkspaceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'InstanceName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'EcsSpec' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ImageId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ImageUrl' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Datasets' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'DatasetId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'MountPath' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Uri' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Options' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'OptionType' => [
                                            'type' => 'string',
                                            'deprecated' => true,
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'UserVpc' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'VpcId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VSwitchId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SecurityGroupId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ExtendedCIDRs' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                    'DefaultRoute' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ForwardInfos' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            '$ref' => '#/components/schemas/ForwardInfo',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'Accessibility' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'EnvironmentVariables' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'ResourceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Priority' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'RequestedResource' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'CPU' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Memory' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SharedMemory' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'GPU' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'GPUType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'Labels' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'CloudDisks' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Capacity' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'SubType' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'MountPath' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Path' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Status' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'Available' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'required' => false,
                                                ],
                                                'Usage' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'required' => false,
                                                ],
                                                'Capacity' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'required' => false,
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'WorkspaceSource' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'UserId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Driver' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'CredentialConfig' => [
                                '$ref' => '#/components/schemas/CredentialConfig',
                                'required' => false,
                            ],
                            'Affinity' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'CPU' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Enable' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'ImageAuth' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteInstance' => [
            'path' => '/api/v2/instances/{InstanceId}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateInstance' => [
            'path' => '/api/v2/instances/{InstanceId}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
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
                            'InstanceName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'EcsSpec' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ImageId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ImageUrl' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Datasets' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'DatasetId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'MountPath' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Uri' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Options' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'OptionType' => [
                                            'type' => 'string',
                                            'deprecated' => true,
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'UserVpc' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'VpcId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VSwitchId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SecurityGroupId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ExtendedCIDRs' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                    'DefaultRoute' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ForwardInfos' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            '$ref' => '#/components/schemas/ForwardInfo',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'Accessibility' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DisassociateDatasets' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'DisassociateVpc' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'DisassociateForwardInfos' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'RequestedResource' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'CPU' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Memory' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SharedMemory' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'GPU' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'GPUType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'WorkspaceSource' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'UserId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'CloudDisks' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Capacity' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'SubType' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'Priority' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'Driver' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DisassociateDriver' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'CredentialConfig' => [
                                '$ref' => '#/components/schemas/CredentialConfig',
                                'required' => false,
                            ],
                            'DisassociateCredential' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'Affinity' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'CPU' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Enable' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'ImageAuth' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'StartInstance' => [
            'path' => '/api/v2/instances/{InstanceId}/start',
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
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'StopInstance' => [
            'path' => '/api/v2/instances/{InstanceId}/stop',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SaveImage',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetInstance' => [
            'path' => '/api/v2/instances/{InstanceId}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Token',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListInstances' => [
            'path' => '/api/v2/instances',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'WorkspaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InstanceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PaymentType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Accessibility',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AcceleratorType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Labels',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CreateUserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'GpuType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MinCpu',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxCpu',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MinGpu',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxGpu',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MinMemory',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxMemory',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MinGpuMemory',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxGpuMemory',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ImageName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetInstanceEvents' => [
            'path' => '/api/v2/instances/{InstanceId}/events',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'MaxEventsNum',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Token',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateInstanceLabels' => [
            'path' => '/api/v2/instances/{InstanceId}/labels',
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
                            'Labels' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteInstanceLabels' => [
            'path' => '/api/v2/instances/{InstanceId}/labels',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'LabelKeys',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetLifecycle' => [
            'path' => '/api/v2/instances/{InstanceId}/lifecycle',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SessionNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Token',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetInstanceMetrics' => [
            'path' => '/api/v2/instance/{InstanceId}/metrics',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'MetricType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TimeStep',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateInstanceSnapshot' => [
            'path' => '/api/v2/instances/{InstanceId}/snapshots',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
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
                            'SnapshotName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'SnapshotDescription' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ImageUrl' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Labels' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'ExcludePaths' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'Overwrite' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteInstanceSnapshot' => [
            'path' => '/api/v2/instances/{InstanceId}/snapshots/{SnapshotId}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SnapshotId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetInstanceSnapshot' => [
            'path' => '/api/v2/instances/{InstanceId}/snapshots/{SnapshotId}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SnapshotId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListInstanceSnapshot' => [
            'path' => '/api/v2/instances/{InstanceId}/snapshots',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetResourceGroupStatistics' => [
            'path' => '/api/v2/resourcegroupstatistics',
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
            'parameters' => [
                [
                    'name' => 'WorkspaceIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListInstanceStatistics' => [
            'path' => '/api/v2/instancestatistics',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'WorkspaceIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateInstanceShutdownTimer' => [
            'path' => '/api/v2/instances/{InstanceId}/shutdowntimer',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
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
                            'DueTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'RemainingTimeInMs' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteInstanceShutdownTimer' => [
            'path' => '/api/v2/instances/{InstanceId}/shutdowntimer',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetInstanceShutdownTimer' => [
            'path' => '/api/v2/instances/{InstanceId}/shutdowntimer',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateIdleInstanceCuller' => [
            'path' => '/api/v2/instances/{InstanceId}/idleinstanceculler',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
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
                            'CpuPercentThreshold' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'GpuPercentThreshold' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'MaxIdleTimeInMinutes' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteIdleInstanceCuller' => [
            'path' => '/api/v2/instances/{InstanceId}/idleinstanceculler',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetIdleInstanceCuller' => [
            'path' => '/api/v2/instances/{InstanceId}/idleinstanceculler',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListEcsSpecs' => [
            'path' => '/api/v2/ecsspecs',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AcceleratorType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetUserConfig' => [
            'path' => '/api/v2/userconfig',
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
            'deprecated' => false,
            'parameters' => [],
        ],
        'GetToken' => [
            'path' => '/api/v2/tokens',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ExpireTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetMetrics' => [
            'path' => '/api/v2/instance/{InstanceId}/cms/metrics',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Dimensions',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Length',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Period',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MetricName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'pai-dsw.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'pai-dsw.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'pai-dsw.cn-wulanchabu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'pai-dsw.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'pai-dsw.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'pai-dsw.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'pai-dsw.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'pai-dsw.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'pai-dsw.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'pai-dsw.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'pai-dsw.ap-south-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'pai-dsw.cn-shanghai-finance-1.aliyuncs.com',
        ],
    ],
];
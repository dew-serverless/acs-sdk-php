<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'APIG',
        'version' => '2024-03-27',
    ],
    'components' => [
        'schemas' => [
            'AiServiceConfig' => [
                'type' => 'object',
                'properties' => [
                    'provider' => [
                        'type' => 'string',
                    ],
                    'protocols' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'address' => [
                        'type' => 'string',
                    ],
                    'apiKeys' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'enableHealthCheck' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'AkSkIdentityConfig' => [
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'type' => 'string',
                    ],
                    'generateMode' => [
                        'type' => 'string',
                    ],
                    'ak' => [
                        'type' => 'string',
                    ],
                    'sk' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ApiKeyIdentityConfig' => [
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'type' => 'string',
                    ],
                    'generateMode' => [
                        'type' => 'string',
                    ],
                    'apikey' => [
                        'type' => 'string',
                    ],
                    'apikeySource' => [
                        'type' => 'object',
                        'properties' => [
                            'source' => [
                                'type' => 'string',
                            ],
                            'value' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'ApiRouteConflictInfo' => [
                'type' => 'object',
                'properties' => [
                    'domainInfo' => [
                        'type' => 'object',
                        'properties' => [
                            'domainId' => [
                                'type' => 'string',
                            ],
                            'name' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'conflicts' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'resourceType' => [
                                    'type' => 'string',
                                ],
                                'resourceId' => [
                                    'type' => 'string',
                                ],
                                'resourceName' => [
                                    'type' => 'string',
                                ],
                                'environmentInfo' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'environmentId' => [
                                            'type' => 'string',
                                        ],
                                        'name' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                                'details' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'level' => [
                                                'type' => 'string',
                                            ],
                                            'conflictingMatch' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'operationInfo' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'operationId' => [
                                                                'type' => 'string',
                                                            ],
                                                            'name' => [
                                                                'type' => 'string',
                                                            ],
                                                        ],
                                                    ],
                                                    'match' => [
                                                        '$ref' => '#/components/schemas/HttpRouteMatch',
                                                    ],
                                                ],
                                            ],
                                            'detectedMatch' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'operationInfo' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'operationId' => [
                                                                'type' => 'string',
                                                            ],
                                                            'name' => [
                                                                'type' => 'string',
                                                            ],
                                                        ],
                                                    ],
                                                    'match' => [
                                                        '$ref' => '#/components/schemas/HttpRouteMatch',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'routeInfo' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'routeId' => [
                                            'type' => 'string',
                                        ],
                                        'name' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'Attachment' => [
                'type' => 'object',
                'properties' => [
                    'policyAttachmentId' => [
                        'type' => 'string',
                    ],
                    'attachResourceIds' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'attachResourceType' => [
                        'type' => 'string',
                    ],
                    'environmentId' => [
                        'type' => 'string',
                    ],
                    'gatewayId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'AuthorizationResourceInfo' => [
                'type' => 'object',
                'properties' => [
                    'resourceId' => [
                        'type' => 'string',
                    ],
                    'parentResourceId' => [
                        'type' => 'string',
                    ],
                    'environmentId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Backend' => [
                'type' => 'object',
                'properties' => [
                    'scene' => [
                        'type' => 'string',
                    ],
                    'services' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'serviceId' => [
                                    'type' => 'string',
                                ],
                                'name' => [
                                    'type' => 'string',
                                ],
                                'protocol' => [
                                    'type' => 'string',
                                ],
                                'port' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                                'weight' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                                'version' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'CheckServiceLinkedRoleResult' => [
                'type' => 'object',
                'properties' => [
                    'existed' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'DashboardFilter' => [
                'type' => 'object',
                'properties' => [
                    'routeName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DomainInfo' => [
                'type' => 'object',
                'properties' => [
                    'domainId' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'createFrom' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'protocol' => [
                        'type' => 'string',
                    ],
                    'forceHttps' => [
                        'type' => 'boolean',
                    ],
                    'updateTimestamp' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'createTimestamp' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'certIdentifier' => [
                        'type' => 'string',
                    ],
                    'resourceGroupId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'EnvironmentInfo' => [
                'type' => 'object',
                'properties' => [
                    'environmentId' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'alias' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'gatewayInfo' => [
                        '$ref' => '#/components/schemas/GatewayInfo',
                    ],
                    'subDomainInfos' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/SubDomainInfo',
                        ],
                    ],
                    'default' => [
                        'type' => 'boolean',
                    ],
                    'createTimestamp' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updateTimestamp' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'resourceGroupId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'GatewayInfo' => [
                'type' => 'object',
                'properties' => [
                    'gatewayId' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'vpcInfo' => [
                        'type' => 'object',
                        'properties' => [
                            'vpcId' => [
                                'type' => 'string',
                            ],
                            'name' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'engineVersion' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'GatewayLogConfig' => [
                'type' => 'object',
                'properties' => [
                    'slsConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'enable' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
            'HttpApiApiInfo' => [
                'type' => 'object',
                'properties' => [
                    'httpApiId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'protocols' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'basePath' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'versionInfo' => [
                        '$ref' => '#/components/schemas/HttpApiVersionInfo',
                    ],
                    'environments' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'environmentId' => [
                                    'type' => 'string',
                                ],
                                'backendScene' => [
                                    'type' => 'string',
                                ],
                                'backendType' => [
                                    'type' => 'string',
                                ],
                                'serviceConfigs' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'gatewayServiceId' => [
                                                'type' => 'string',
                                            ],
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                            'protocol' => [
                                                'type' => 'string',
                                            ],
                                            'port' => [
                                                'type' => 'string',
                                            ],
                                            'weight' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                            ],
                                            'version' => [
                                                'type' => 'string',
                                            ],
                                            'match' => [
                                                '$ref' => '#/components/schemas/HttpApiBackendMatchConditions',
                                            ],
                                            'serviceId' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                                'customDomains' => [
                                    'type' => 'array',
                                    'items' => [
                                        '$ref' => '#/components/schemas/HttpApiDomainInfo',
                                    ],
                                ],
                                'name' => [
                                    'type' => 'string',
                                ],
                                'alias' => [
                                    'type' => 'string',
                                ],
                                'gatewayInfo' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'gatewayId' => [
                                            'type' => 'string',
                                        ],
                                        'name' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                                'deployStatus' => [
                                    'type' => 'string',
                                ],
                                'subDomains' => [
                                    'type' => 'array',
                                    'items' => [
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
                                            'networkType' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'ingressInfo' => [
                        'type' => 'object',
                        'properties' => [
                            'sourceId' => [
                                'type' => 'string',
                            ],
                            'ingressClass' => [
                                'type' => 'string',
                            ],
                            'watchNamespace' => [
                                'type' => 'string',
                            ],
                            'environmentInfo' => [
                                'type' => 'object',
                                'properties' => [
                                    'environmentId' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'k8sClusterInfo' => [
                                'type' => 'object',
                                'properties' => [
                                    'clusterId' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'overrideIngressIp' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'resourceGroupId' => [
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
                            '$ref' => '#/components/schemas/HttpApiDeployConfig',
                        ],
                    ],
                ],
            ],
            'HttpApiBackendMatchCondition' => [
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'type' => 'string',
                    ],
                    'key' => [
                        'type' => 'string',
                    ],
                    'value' => [
                        'type' => 'string',
                    ],
                    'operator' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'HttpApiBackendMatchConditions' => [
                'type' => 'object',
                'properties' => [
                    'default' => [
                        'type' => 'boolean',
                    ],
                    'conditions' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/HttpApiBackendMatchCondition',
                        ],
                    ],
                ],
            ],
            'HttpApiDeployConfig' => [
                'type' => 'object',
                'properties' => [
                    'customDomainIds' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'environmentId' => [
                        'type' => 'string',
                    ],
                    'backendScene' => [
                        'type' => 'string',
                    ],
                    'serviceConfigs' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'serviceId' => [
                                    'type' => 'string',
                                ],
                                'weight' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                ],
                                'modelNamePattern' => [
                                    'type' => 'string',
                                ],
                                'modelName' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'policyConfigs' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'type' => [
                                    'type' => 'string',
                                ],
                                'enable' => [
                                    'type' => 'boolean',
                                ],
                                'aiFallbackConfig' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'serviceIds' => [
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'autoDeploy' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'HttpApiDomainInfo' => [
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
                ],
            ],
            'HttpApiInfoByName' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'versionEnabled' => [
                        'type' => 'boolean',
                    ],
                    'versionedHttpApis' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/HttpApiApiInfo',
                        ],
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'HttpApiMockContract' => [
                'type' => 'object',
                'properties' => [
                    'enable' => [
                        'type' => 'boolean',
                    ],
                    'responseCode' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'responseContent' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'HttpApiOperation' => [
                'type' => 'object',
                'properties' => [
                    'method' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'path' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'response' => [
                        '$ref' => '#/components/schemas/HttpApiResponseContract',
                    ],
                    'request' => [
                        '$ref' => '#/components/schemas/HttpApiRequestContract',
                    ],
                    'mock' => [
                        '$ref' => '#/components/schemas/HttpApiMockContract',
                    ],
                ],
            ],
            'HttpApiOperationInfo' => [
                'type' => 'object',
                'properties' => [
                    'operationId' => [
                        'type' => 'string',
                    ],
                    'method' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'path' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'response' => [
                        '$ref' => '#/components/schemas/HttpApiResponseContract',
                    ],
                    'request' => [
                        '$ref' => '#/components/schemas/HttpApiRequestContract',
                    ],
                    'mock' => [
                        '$ref' => '#/components/schemas/HttpApiMockContract',
                    ],
                    'createTimestamp' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'HttpApiParameter' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'required' => [
                        'type' => 'boolean',
                    ],
                    'type' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'defaultValue' => [
                        'type' => 'string',
                    ],
                    'exampleValue' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'HttpApiPublishRevisionInfo' => [
                'type' => 'object',
                'properties' => [
                    'revisionId' => [
                        'type' => 'string',
                    ],
                    'environmentInfo' => [
                        'type' => 'object',
                        'properties' => [
                            'environmentId' => [
                                'type' => 'string',
                            ],
                            'name' => [
                                'type' => 'string',
                            ],
                            'alias' => [
                                'type' => 'string',
                            ],
                            'gatewayInfo' => [
                                'type' => 'object',
                                'properties' => [
                                    'gatewayId' => [
                                        'type' => 'string',
                                    ],
                                    'name' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'subDomains' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/HttpApiDomainInfo',
                        ],
                    ],
                    'customDomains' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/HttpApiDomainInfo',
                        ],
                    ],
                    'backendScene' => [
                        'type' => 'string',
                    ],
                    'backendType' => [
                        'type' => 'string',
                    ],
                    'serviceConfigs' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'gatewayServiceId' => [
                                    'type' => 'string',
                                ],
                                'port' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                                'protocol' => [
                                    'type' => 'string',
                                ],
                                'weight' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                                'version' => [
                                    'type' => 'string',
                                ],
                                'match' => [
                                    '$ref' => '#/components/schemas/HttpApiBackendMatchConditions',
                                ],
                            ],
                        ],
                    ],
                    'dnsConfigs' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'dnsList' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'string',
                                    ],
                                ],
                                'weight' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                                'match' => [
                                    '$ref' => '#/components/schemas/HttpApiBackendMatchConditions',
                                ],
                            ],
                        ],
                    ],
                    'vipConfigs' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'endpoints' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'string',
                                    ],
                                ],
                                'weight' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                                'match' => [
                                    '$ref' => '#/components/schemas/HttpApiBackendMatchConditions',
                                ],
                            ],
                        ],
                    ],
                    'cloudProductConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'cloudProductType' => [
                                'type' => 'string',
                            ],
                            'functionConfigs' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'name' => [
                                            'type' => 'string',
                                        ],
                                        'qualifier' => [
                                            'type' => 'string',
                                        ],
                                        'gatewayServiceId' => [
                                            'type' => 'string',
                                        ],
                                        'weight' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                        ],
                                        'match' => [
                                            '$ref' => '#/components/schemas/HttpApiBackendMatchConditions',
                                        ],
                                    ],
                                ],
                            ],
                            'containerServiceConfigs' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'gatewayServiceId' => [
                                            'type' => 'string',
                                        ],
                                        'name' => [
                                            'type' => 'string',
                                        ],
                                        'namespace' => [
                                            'type' => 'string',
                                        ],
                                        'protocol' => [
                                            'type' => 'string',
                                        ],
                                        'weight' => [
                                            'type' => 'string',
                                        ],
                                        'match' => [
                                            '$ref' => '#/components/schemas/HttpApiBackendMatchConditions',
                                        ],
                                        'port' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                        ],
                                    ],
                                ],
                            ],
                            'mseNacosConfigs' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'gatewayServiceId' => [
                                            'type' => 'string',
                                        ],
                                        'name' => [
                                            'type' => 'string',
                                        ],
                                        'namespace' => [
                                            'type' => 'string',
                                        ],
                                        'groupName' => [
                                            'type' => 'string',
                                        ],
                                        'weight' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                        ],
                                        'match' => [
                                            '$ref' => '#/components/schemas/HttpApiBackendMatchConditions',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'operations' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/HttpApiOperationInfo',
                        ],
                    ],
                    'createTimestamp' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'isCurrentVersion' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'HttpApiRequestContract' => [
                'type' => 'object',
                'properties' => [
                    'headerParameters' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/HttpApiParameter',
                        ],
                    ],
                    'queryParameters' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/HttpApiParameter',
                        ],
                    ],
                    'pathParameters' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/HttpApiParameter',
                        ],
                    ],
                    'body' => [
                        'type' => 'object',
                        'properties' => [
                            'description' => [
                                'type' => 'string',
                            ],
                            'example' => [
                                'type' => 'string',
                            ],
                            'contentType' => [
                                'type' => 'string',
                            ],
                            'jsonSchema' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'HttpApiResponseContract' => [
                'type' => 'object',
                'properties' => [
                    'contentType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'items' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'code' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                                'example' => [
                                    'type' => 'string',
                                ],
                                'description' => [
                                    'type' => 'string',
                                ],
                                'jsonSchema' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'HttpApiVersionConfig' => [
                'type' => 'object',
                'properties' => [
                    'enable' => [
                        'type' => 'boolean',
                    ],
                    'scheme' => [
                        'type' => 'string',
                    ],
                    'headerName' => [
                        'type' => 'string',
                    ],
                    'queryName' => [
                        'type' => 'string',
                    ],
                    'version' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'HttpApiVersionInfo' => [
                'type' => 'object',
                'properties' => [
                    'enable' => [
                        'type' => 'boolean',
                    ],
                    'scheme' => [
                        'type' => 'string',
                    ],
                    'headerName' => [
                        'type' => 'string',
                    ],
                    'queryName' => [
                        'type' => 'string',
                    ],
                    'version' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'HttpDubboTranscoder' => [
                'type' => 'object',
                'properties' => [
                    'dubboServiceName' => [
                        'type' => 'string',
                    ],
                    'dubboServiceVersion' => [
                        'type' => 'string',
                    ],
                    'dubboServiceGroup' => [
                        'type' => 'string',
                    ],
                    'mothedMapList' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'dubboMothedName' => [
                                    'type' => 'string',
                                ],
                                'httpMothed' => [
                                    'type' => 'string',
                                ],
                                'mothedpath' => [
                                    'type' => 'string',
                                ],
                                'passThroughAllHeaders' => [
                                    'type' => 'string',
                                ],
                                'passThroughList' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'string',
                                    ],
                                ],
                                'paramMapsList' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'extractKeySpec' => [
                                                'type' => 'string',
                                            ],
                                            'extractKey' => [
                                                'type' => 'string',
                                            ],
                                            'mappingType' => [
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
            'HttpRoute' => [
                'type' => 'object',
                'properties' => [
                    'routeId' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'deployStatus' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'match' => [
                        '$ref' => '#/components/schemas/HttpRouteMatch',
                    ],
                    'backend' => [
                        '$ref' => '#/components/schemas/Backend',
                    ],
                    'domainInfos' => [
                        'type' => 'array',
                        'items' => [
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
                            ],
                        ],
                    ],
                    'environmentInfo' => [
                        'type' => 'object',
                        'properties' => [
                            'environmentId' => [
                                'type' => 'string',
                            ],
                            'name' => [
                                'type' => 'string',
                            ],
                            'alias' => [
                                'type' => 'string',
                            ],
                            'gatewayInfo' => [
                                'type' => 'object',
                                'properties' => [
                                    'gatewayId' => [
                                        'type' => 'string',
                                    ],
                                    'name' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'subDomains' => [
                                'type' => 'array',
                                'items' => [
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
                                        'networkType' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'createTimestamp' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updateTimestamp' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'HttpRouteMatch' => [
                'type' => 'object',
                'properties' => [
                    'ignoreUriCase' => [
                        'type' => 'boolean',
                    ],
                    'path' => [
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
                    'headers' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'type' => [
                                    'type' => 'string',
                                ],
                                'name' => [
                                    'type' => 'string',
                                ],
                                'value' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'methods' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'queryParams' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'type' => [
                                    'type' => 'string',
                                ],
                                'name' => [
                                    'type' => 'string',
                                ],
                                'value' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'JwtIdentityConfig' => [
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'type' => 'string',
                    ],
                    'secretType' => [
                        'type' => 'string',
                    ],
                    'jwks' => [
                        'type' => 'string',
                    ],
                    'jwtTokenConfig' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'position' => [
                                'type' => 'string',
                            ],
                            'key' => [
                                'type' => 'string',
                            ],
                            'prefix' => [
                                'type' => 'string',
                            ],
                            'pass' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                    'jwtPayloadConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'payloadKeyName' => [
                                'type' => 'string',
                            ],
                            'payloadKeyValue' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'PolicyClassInfo' => [
                'type' => 'object',
                'properties' => [
                    'classId' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'alias' => [
                        'type' => 'string',
                    ],
                    'version' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'direction' => [
                        'type' => 'string',
                    ],
                    'attachableResourceTypes' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'executeStage' => [
                        'type' => 'string',
                    ],
                    'executePriority' => [
                        'type' => 'string',
                    ],
                    'enableLog' => [
                        'type' => 'boolean',
                    ],
                    'deprecated' => [
                        'type' => 'boolean',
                    ],
                    'configExample' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'PolicyDetailInfo' => [
                'type' => 'object',
                'properties' => [
                    'policyId' => [
                        'type' => 'string',
                    ],
                    'classId' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'className' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'config' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'PolicyInfo' => [
                'type' => 'object',
                'properties' => [
                    'policyId' => [
                        'type' => 'string',
                    ],
                    'direction' => [
                        'type' => 'string',
                    ],
                    'className' => [
                        'type' => 'string',
                    ],
                    'classAlias' => [
                        'type' => 'string',
                    ],
                    'config' => [
                        'type' => 'string',
                    ],
                    'attachments' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Attachment',
                        ],
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'executeStage' => [
                        'type' => 'string',
                    ],
                    'executePriority' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ResourceStatistic' => [
                'type' => 'object',
                'properties' => [
                    'resourceType' => [
                        'type' => 'string',
                    ],
                    'resourceCount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'Service' => [
                'type' => 'object',
                'properties' => [
                    'serviceId' => [
                        'type' => 'string',
                    ],
                    'sourceType' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'namespace' => [
                        'type' => 'string',
                    ],
                    'addresses' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'ports' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'port' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                                'name' => [
                                    'type' => 'string',
                                ],
                                'protocol' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'unhealthyEndpoints' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'healthCheck' => [
                        '$ref' => '#/components/schemas/ServiceHealthCheck',
                    ],
                    'healthStatus' => [
                        'type' => 'string',
                    ],
                    'qualifier' => [
                        'type' => 'string',
                    ],
                    'createTimestamp' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updateTimestamp' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'protocol' => [
                        'type' => 'string',
                    ],
                    'gatewayId' => [
                        'type' => 'string',
                    ],
                    'resourceGroupId' => [
                        'type' => 'string',
                    ],
                    'groupName' => [
                        'type' => 'string',
                    ],
                    'aiServiceConfig' => [
                        '$ref' => '#/components/schemas/AiServiceConfig',
                    ],
                ],
            ],
            'ServiceHealthCheck' => [
                'type' => 'object',
                'properties' => [
                    'protocol' => [
                        'type' => 'string',
                    ],
                    'timeout' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'interval' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'healthyThreshold' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'unhealthyThreshold' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'httpPath' => [
                        'type' => 'string',
                    ],
                    'httpHost' => [
                        'type' => 'string',
                    ],
                    'enable' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'ServiceLinkedRole' => [
                'type' => 'object',
                'properties' => [
                    'roleId' => [
                        'type' => 'string',
                    ],
                    'roleName' => [
                        'type' => 'string',
                    ],
                    'arn' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'assumeRolePolicyDocument' => [
                        'type' => 'string',
                    ],
                    'createDate' => [
                        'type' => 'string',
                    ],
                    'rolePrincipalName' => [
                        'type' => 'string',
                    ],
                    'isServiceLinkedRole' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'SslCertMetaInfo' => [
                'type' => 'object',
                'properties' => [
                    'certIdentifier' => [
                        'type' => 'string',
                    ],
                    'isChainCompleted' => [
                        'type' => 'boolean',
                    ],
                    'instanceId' => [
                        'type' => 'string',
                    ],
                    'domain' => [
                        'type' => 'string',
                    ],
                    'fingerprint' => [
                        'type' => 'string',
                    ],
                    'certName' => [
                        'type' => 'string',
                    ],
                    'certId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'commonName' => [
                        'type' => 'string',
                    ],
                    'domainMatchCert' => [
                        'type' => 'boolean',
                    ],
                    'sans' => [
                        'type' => 'string',
                    ],
                    'notBeforeTimestamp' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'notAfterTimestamp' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'algorithm' => [
                        'type' => 'string',
                    ],
                    'keySize' => [
                        'type' => 'string',
                    ],
                    'issuer' => [
                        'type' => 'string',
                    ],
                    'serialNo' => [
                        'type' => 'string',
                    ],
                    'md5' => [
                        'type' => 'string',
                    ],
                    'sha2' => [
                        'type' => 'string',
                    ],
                    'signAlgorithm' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SubDomainInfo' => [
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
                    'networkType' => [
                        'type' => 'string',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'CreateHttpApi' => [
            'path' => '/v1/http-apis',
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
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'protocols' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'enum' => [
                                        'HTTP',
                                        'HTTPS',
                                    ],
                                ],
                            ],
                            'basePath' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'versionConfig' => [
                                '$ref' => '#/components/schemas/HttpApiVersionConfig',
                                'required' => false,
                            ],
                            'type' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ingressConfig' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'environmentId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'sourceId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ingressClass' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'watchNamespace' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'overrideIngressIp' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'resourceGroupId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'aiProtocols' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'deployConfigs' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/HttpApiDeployConfig',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateHttpApi' => [
            'path' => '/v1/http-apis/{httpApiId}',
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
                    'name' => 'httpApiId',
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
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'protocols' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'enum' => [
                                        'HTTP',
                                        'HTTPS',
                                    ],
                                ],
                            ],
                            'basePath' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'versionConfig' => [
                                '$ref' => '#/components/schemas/HttpApiVersionConfig',
                                'required' => false,
                            ],
                            'ingressConfig' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'environmentId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'sourceId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ingressClass' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'watchNamespace' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'overrideIngressIp' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'aiProtocols' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'deployConfigs' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/HttpApiDeployConfig',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetHttpApi' => [
            'path' => '/v1/http-apis/{httpApiId}',
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
                    'name' => 'httpApiId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListHttpApis' => [
            'path' => '/v1/http-apis',
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
                    'name' => 'keyword',
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
                [
                    'name' => 'name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'types',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'gatewayId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'withAuthPolicyInEnvironmentId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'withConsumerInfoById',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'withEnvironmentInfo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'resourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteHttpApi' => [
            'path' => '/v1/http-apis/{httpApiId}',
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
                    'name' => 'httpApiId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateHttpApiOperation' => [
            'path' => '/v1/http-apis/{httpApiId}/operations',
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
                    'name' => 'httpApiId',
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
                            'operations' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/HttpApiOperation',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetHttpApiOperation' => [
            'path' => '/v1/http-apis/{httpApiId}/operations/{operationId}',
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
                    'name' => 'httpApiId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'operationId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateHttpApiOperation' => [
            'path' => '/v1/http-apis/{httpApiId}/operations/{operationId}',
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
                    'name' => 'httpApiId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'operationId',
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
                            'operation' => [
                                '$ref' => '#/components/schemas/HttpApiOperation',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListHttpApiOperations' => [
            'path' => '/v1/http-apis/{httpApiId}/operations',
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
                    'name' => 'httpApiId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'method',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pathLike',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'nameLike',
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
                [
                    'name' => 'name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'withConsumerInEnvironmentId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'withConsumerInfoById',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'consumerAuthorizationRuleId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteHttpApiOperation' => [
            'path' => '/v1/http-apis/{httpApiId}/operations/{operationId}',
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
                    'name' => 'httpApiId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'operationId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetGateway' => [
            'path' => '/v1/gateways/{gatewayId}',
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
                    'name' => 'gatewayId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListGateways' => [
            'path' => '/v1/gateways',
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
                'application/x-www-form-urlencoded',
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'gatewayId',
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
                [
                    'name' => 'name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'keyword',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'resourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'key' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'value' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 20,
                    ],
                ],
            ],
        ],
        'AddGatewaySecurityGroupRule' => [
            'path' => '/v1/gateways/{gatewayId}/security-group-rules',
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
                    'name' => 'gatewayId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
                            'securityGroupId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'portRanges' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteGateway' => [
            'path' => '/v1/gateways/{gatewayId}',
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
                    'name' => 'gatewayId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateEnvironment' => [
            'path' => '/v1/environments',
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
                            'alias' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'gatewayId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'resourceGroupId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetEnvironment' => [
            'path' => '/v1/environments/{environmentId}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'environmentId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'withVpcInfo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'withStatistics',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateEnvironment' => [
            'path' => '/v1/environments/{environmentId}',
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
                            'alias' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'environmentId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteEnvironment' => [
            'path' => '/v1/environments/{environmentId}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'environmentId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListEnvironments' => [
            'path' => '/v1/environments',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'nameLike',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'aliasLike',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'gatewayId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'gatewayNameLike',
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
                [
                    'name' => 'resourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetDomain' => [
            'path' => '/v1/domains/{domainId}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'domainId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'withStatistics',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateDomain' => [
            'path' => '/v1/domains',
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
                            'protocol' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'forceHttps' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'certIdentifier' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'caCertIdentifier' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'http2Option' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'tlsMax' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'tlsMin' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'resourceGroupId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListDomains' => [
            'path' => '/v1/domains',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'nameLike',
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
                    'name' => 'gatewayId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'resourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteDomain' => [
            'path' => '/v1/domains/{domainId}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'domainId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateDomain' => [
            'path' => '/v1/domains/{domainId}',
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
                            'protocol' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'forceHttps' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'certIndentifier' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'caCertIndentifier' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'http2Option' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'tlsMax' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'tlsMin' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'domainId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetHttpApiRoute' => [
            'path' => '/v1/http-apis/{httpApiId}/routes/{routeId}',
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
                    'name' => 'httpApiId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'routeId',
                    'in' => 'path',
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
            'regionId' => 'cn-beijing',
            'endpoint' => 'apig.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'apig.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'apig.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'apig.cn-shenzhen.aliyuncs.com',
        ],
    ],
];
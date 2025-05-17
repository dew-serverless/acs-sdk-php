<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'hcs-mgw',
        'version' => '2024-06-26',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreateJob' => [
            'path' => '/job',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'ImportJob' => [
                                '$ref' => '#/components/schemas/CreateJobInfo',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [],
        ],
        'GetJob' => [
            'path' => '/job/{jobName}',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'byVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'jobName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ImportJob' => [
                                '$ref' => '#/components/schemas/GetJobResp',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListJob' => [
            'path' => '/joblist',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'marker',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'count',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'parentName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'all',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ImportJobList' => [
                                '$ref' => '#/components/schemas/ListJobResp',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateJob' => [
            'path' => '/job/{jobName}',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'ImportJob' => [
                                '$ref' => '#/components/schemas/UpdateJobInfo',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'jobName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [],
        ],
        'DeleteJob' => [
            'path' => '/job/{jobName}',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'forceDelete',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'jobName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [],
        ],
        'ListJobHistory' => [
            'path' => '/jobhistory/{jobName}',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'jobName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'runtimeId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'marker',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'count',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'JobHistoryList' => [
                                '$ref' => '#/components/schemas/ListJobHistoryResp',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateReport' => [
            'path' => '/report',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'CreateReport' => [
                                '$ref' => '#/components/schemas/CreateReportInfo',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [],
        ],
        'GetReport' => [
            'path' => '/report',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'version',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'runtimeId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'GetReportResponse' => [
                                '$ref' => '#/components/schemas/GetReportResp',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetJobResult' => [
            'path' => '/job/{jobName}?jobResult',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'jobName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'runtimeId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ImportJobResult' => [
                                '$ref' => '#/components/schemas/GetJobResultResp',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateAddress' => [
            'path' => '/address',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'ImportAddress' => [
                                '$ref' => '#/components/schemas/CreateAddressInfo',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [],
        ],
        'GetAddress' => [
            'path' => '/address/{addressName}',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'addressName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ImportAddress' => [
                                '$ref' => '#/components/schemas/GetAddressResp',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListAddress' => [
            'path' => '/addresslist',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'marker',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'count',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ImportAddressList' => [
                                '$ref' => '#/components/schemas/ListAddressResp',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateAddress' => [
            'path' => '/address/{addressName}',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'addressName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'ImportAddress' => [
                                '$ref' => '#/components/schemas/UpdateAddressInfo',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'DeleteAddress' => [
            'path' => '/address/{addressName}',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'addressName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [],
        ],
        'VerifyAddress' => [
            'path' => '/address/{addressName}?verify',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'addressName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'VerifyAddressResponse' => [
                                '$ref' => '#/components/schemas/VerifyAddressResp',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateAgent' => [
            'path' => '/agent',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'ImportAgent' => [
                                '$ref' => '#/components/schemas/CreateAgentInfo',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [],
        ],
        'GetAgent' => [
            'path' => '/agent/{agentName}',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'agentName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ImportAgent' => [
                                '$ref' => '#/components/schemas/GetAgentResp',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListAgent' => [
            'path' => '/agentlist',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'marker',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'count',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ImportAgentList' => [
                                '$ref' => '#/components/schemas/ListAgentResp',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetAgentStatus' => [
            'path' => '/agent/{agentName}?status',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'agentName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ImportAgentStatus' => [
                                '$ref' => '#/components/schemas/GetAgentStatusResp',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteAgent' => [
            'path' => '/agent/{agentName}',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'agentName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [],
        ],
        'CreateTunnel' => [
            'path' => '/tunnel',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'ImportTunnel' => [
                                '$ref' => '#/components/schemas/CreateTunnelInfo',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'GetTunnel' => [
            'path' => '/tunnel/{tunnelId}',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'tunnelId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ImportTunnel' => [
                                '$ref' => '#/components/schemas/GetTunnelResp',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateTunnel' => [
            'path' => '/tunnel/{tunnelId}',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'tunnelId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'ImportTunnel' => [
                                '$ref' => '#/components/schemas/UpdateTunnelInfo',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'ListTunnel' => [
            'path' => '/tunnellist',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'marker',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'count',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ImportTunnelList' => [
                                '$ref' => '#/components/schemas/ListTunnelResp',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteTunnel' => [
            'path' => '/tunnel/{tunnelId}',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'tunnelId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'cn-hangzhou.mgw.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'cn-shanghai.mgw.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'cn-beijing.mgw.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'cn-wulanchabu.mgw.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'cn-shenzhen.mgw.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'cn-hongkong.mgw.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'ap-northeast-1.mgw.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'ap-southeast-1.mgw.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'eu-central-1.mgw.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'us-east-1.mgw.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'cn-chengdu.mgw.aliyuncs.com',
        ],
    ],
];
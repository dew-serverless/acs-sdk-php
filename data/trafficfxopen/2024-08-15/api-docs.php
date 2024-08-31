<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'TrafficFxOpen',
        'version' => '2024-08-15',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'Search' => [
            'path' => '/v1/distribution/trade/search',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'trafficAccessTokenAuth' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'source',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'terminal',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'userId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'searchParam',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'xAcsAirticketAccessToken',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'xAcsAirticketLanguage',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'scene',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetToken' => [
            'path' => '/v1/distribution/trade/getToken',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'trafficRootTokenAuth' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'appKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'appSecret',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [],
];
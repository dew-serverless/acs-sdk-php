<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'NonStandardOpen',
        'version' => '2024-09-22',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'GetToken' => [
            'path' => '/v1/distribution/nonstandard/getToken',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'nonStandardRootTokenAuth' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'appKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'appSecret',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'InitCard' => [
            'path' => '/v1/distribution/nonstandard/initCard',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'nonStandardAccessTokenAuth' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'xAcsAirticketAccessToken',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
                    'name' => 'bizParam',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'QueryOrderInfo' => [
            'path' => '/v1/distribution/nonstandard/queryOrderInfo',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'nonStandardAccessTokenAuth' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'xAcsAirticketAccessToken',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
                    'name' => 'bizParam',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'RefundConfirm' => [
            'path' => '/v1/distribution/nonstandard/refundConfirm',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'nonStandardAccessTokenAuth' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'xAcsAirticketAccessToken',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
                    'name' => 'bizParam',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'RefundSubmit' => [
            'path' => '/v1/distribution/nonstandard/refundSubmit',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'nonStandardAccessTokenAuth' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'xAcsAirticketAccessToken',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
                    'name' => 'bizParam',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [],
];
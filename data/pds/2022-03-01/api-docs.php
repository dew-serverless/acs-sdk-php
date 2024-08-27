<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'PDS',
        'product' => 'pds',
        'version' => '2022-03-01',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreateDomain' => [
            'path' => '/v2/domain/create',
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
                            'parent_domain_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'domain_name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'init_drive_enable' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'init_drive_size' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'user_count_quota' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'size_quota' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetDomain' => [
            'path' => '/v2/domain/get',
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
                            'domain_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'get_quota_used' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'fields' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateDomain' => [
            'path' => '/v2/domain/update',
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
                            'domain_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'domain_name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'init_drive_enable' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'init_drive_size' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'user_count_quota' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'size_quota' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'published_app_access_strategy' => [
                                '$ref' => '#/components/schemas/AppAccessStrategy',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListDomains' => [
            'path' => '/v2/domain/list',
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
                            'parent_domain_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'service_code' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'SearchDomains' => [
            'path' => '/v2/domain/search',
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
                                'required' => false,
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'order_by' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteDomain' => [
            'path' => '/v2/domain/delete',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
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
                            'domain_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'Authorize' => [
            'path' => '/v2/oauth/authorize',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'Anonymous' => [],
                ],
            ],
            'consumes' => [
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/octet-stream',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'domain_id',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'client_id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'redirect_uri',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'scope',
                    'in' => 'query',
                    'style' => 'simple',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                    ],
                ],
                [
                    'name' => 'response_type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'state',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'login_type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'hide_consent',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'Token' => [
            'path' => '/v2/oauth/token',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'Anonymous' => [],
                ],
            ],
            'consumes' => [
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'domain_id',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'grant_type',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'code',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'redirect_uri',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'client_id',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'client_secret',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'refresh_token',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'assertion',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetLinkInfoByUserId' => [
            'path' => '/v2/account/get_link_info_by_user_id',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'user_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'LinkAccount' => [
            'path' => '/v2/account/link',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'user_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'type' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'identity' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'extra' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetLinkInfo' => [
            'path' => '/v2/account/get_link_info',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'type' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'identity' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'extra' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UnLinkAccount' => [
            'path' => '/v2/account/unlink',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'user_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'type' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'identity' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'extra' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateGroup' => [
            'path' => '/v2/group/create',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'group_name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'is_root' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'parent_group_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateGroup' => [
            'path' => '/v2/group/update',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'group_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'group_name' => [
                                'type' => 'string',
                                'required' => false,
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
        'GetGroup' => [
            'path' => '/v2/group/get',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'group_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListGroup' => [
            'path' => '/v2/group/list',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteGroup' => [
            'path' => '/v2/group/delete',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'group_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'AddGroupMember' => [
            'path' => '/v2/group/add_member',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'group_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'member_type' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'member_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RemoveGroupMember' => [
            'path' => '/v2/group/remove_member',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'group_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'member_type' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'member_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListGroupMember' => [
            'path' => '/v2/group/list_member',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'group_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'member_type' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateUser' => [
            'path' => '/v2/user/create',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'user_id' => [
                                'type' => 'string',
                                'required' => true,
                                'minLength' => 1,
                                'maxLength' => 1024,
                            ],
                            'nick_name' => [
                                'type' => 'string',
                                'required' => false,
                                'minLength' => 0,
                                'maxLength' => 128,
                            ],
                            'status' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'enabled',
                                    'disabled',
                                ],
                            ],
                            'role' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'user',
                                    'admin',
                                    'superadmin',
                                    'subdomain_admin',
                                    'subdomain_super_admin',
                                ],
                            ],
                            'avatar' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'phone' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'email' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'user_data' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'any',
                                ],
                            ],
                            'group_info_list' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'group_id' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'user_name' => [
                                'type' => 'string',
                                'required' => false,
                                'minLength' => 0,
                                'maxLength' => 128,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                                'minLength' => 0,
                                'maxLength' => 1024,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ImportUser' => [
            'path' => '/v2/user/import',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'authentication_type' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'identity' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'authentication_display_name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'extra' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'nick_name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'auto_create_drive' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'drive_total_size' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'parent_group_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateUser' => [
            'path' => '/v2/user/update',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'user_id' => [
                                'type' => 'string',
                                'required' => true,
                                'minLength' => 1,
                                'maxLength' => 1024,
                            ],
                            'nick_name' => [
                                'type' => 'string',
                                'required' => false,
                                'minLength' => 0,
                                'maxLength' => 128,
                            ],
                            'status' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'enabled',
                                    'disabled',
                                ],
                            ],
                            'role' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'user',
                                    'admin',
                                    'superadmin',
                                    'subdomain_admin',
                                    'subdomain_super_admin',
                                ],
                            ],
                            'avatar' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                                'minLength' => 0,
                                'maxLength' => 1024,
                            ],
                            'phone' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'email' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'user_data' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'group_info_list' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'group_id' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetUser' => [
            'path' => '/v2/user/get',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'user_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListUser' => [
            'path' => '/v2/user/list',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'SearchUser' => [
            'path' => '/v2/user/search',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'nick_name' => [
                                'type' => 'string',
                                'required' => false,
                                'minLength' => 0,
                                'maxLength' => 128,
                            ],
                            'nick_name_for_fuzzy' => [
                                'type' => 'string',
                                'required' => false,
                                'minLength' => 0,
                                'maxLength' => 128,
                            ],
                            'user_name' => [
                                'type' => 'string',
                                'required' => false,
                                'minLength' => 0,
                                'maxLength' => 128,
                            ],
                            'phone' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'email' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'status' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'role' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteUser' => [
            'path' => '/v2/user/delete',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                        'required' => true,
                        'properties' => [
                            'user_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateDrive' => [
            'path' => '/v2/drive/create',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_name' => [
                                'type' => 'string',
                                'required' => true,
                                'minLength' => 1,
                                'maxLength' => 1024,
                            ],
                            'owner' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'owner_type' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'user',
                                    'group',
                                ],
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                                'maxLength' => 1024,
                            ],
                            'drive_type' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [],
                            ],
                            'status' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'enabled',
                                    'disabled',
                                ],
                            ],
                            'total_size' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'default' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateDrive' => [
            'path' => '/v2/drive/update',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'drive_name' => [
                                'type' => 'string',
                                'required' => false,
                                'maxLength' => 128,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                                'maxLength' => 1024,
                            ],
                            'status' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'enabled',
                                    'disabled',
                                ],
                            ],
                            'total_size' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'owner' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetDrive' => [
            'path' => '/v2/drive/get',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListDrive' => [
            'path' => '/v2/drive/list',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '0',
                                'exclusiveMinimum' => true,
                                'maximum' => '100',
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'owner' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'owner_type' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'user',
                                    'group',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetDefaultDrive' => [
            'path' => '/v2/drive/get_default_drive',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'user_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListMyDrives' => [
            'path' => '/v2/drive/list_my_drives',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '0',
                                'exclusiveMinimum' => true,
                                'maximum' => '100',
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'SearchDrive' => [
            'path' => '/v2/drive/search',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '0',
                                'exclusiveMinimum' => true,
                                'maximum' => '100',
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'owner' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'owner_type' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'user',
                                    'group',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteDrive' => [
            'path' => '/v2/drive/delete',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateFile' => [
            'path' => '/v2/file/create',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'name' => [
                                'type' => 'string',
                                'required' => true,
                                'minLength' => 1,
                                'maxLength' => 1024,
                            ],
                            'type' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'file',
                                    'folder',
                                ],
                            ],
                            'parent_file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'drive_id' => [
                                'type' => 'string',
                                'required' => false,
                                'pattern' => '^[0-9]*$',
                            ],
                            'share_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'size' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'content_type' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'part_info_list' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'part_number' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'parallel_sha1_ctx' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'h' => [
                                                    'type' => 'array',
                                                    'required' => false,
                                                    'items' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'required' => false,
                                                    ],
                                                ],
                                                'part_offset' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'required' => false,
                                                ],
                                            ],
                                        ],
                                        'content_md5' => [
                                            'type' => 'string',
                                            'deprecated' => false,
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'user_tags' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/UserTag',
                                    'required' => false,
                                ],
                            ],
                            'hidden' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                                'maxLength' => 1024,
                            ],
                            'content_hash' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'content_hash_name' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'sha1',
                                ],
                            ],
                            'pre_hash' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'check_name_mode' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'ignore',
                                    'auto_rename',
                                    'refuse',
                                ],
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'local_created_at' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'local_modified_at' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'image_media_metadata' => [
                                '$ref' => '#/components/schemas/ImageMediaMetadata',
                                'required' => false,
                            ],
                            'video_media_metadata' => [
                                '$ref' => '#/components/schemas/VideoMediaMetadata',
                                'required' => false,
                            ],
                            'parallel_upload' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteFile' => [
            'path' => '/v2/file/delete',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                                'pattern' => '^[0-9]*$',
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateFile' => [
            'path' => '/v2/file/update',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'name' => [
                                'type' => 'string',
                                'required' => false,
                                'minLength' => 1,
                                'maxLength' => 102,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                                'maxLength' => 1024,
                            ],
                            'labels' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'maxItems' => 100,
                            ],
                            'check_name_mode' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'ignore',
                                    'auto_rename',
                                    'refuse',
                                ],
                            ],
                            'local_modified_at' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'hidden' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'starred' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'SearchFile' => [
            'path' => '/v2/file/search',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'query' => [
                                'type' => 'string',
                                'required' => true,
                                'maxLength' => 4096,
                            ],
                            'order_by' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'name',
                                    'type',
                                    'created_at',
                                    'updated_at',
                                    'size',
                                    'image_time',
                                    'last_access_at',
                                    'custom_type',
                                    'custom_field_1',
                                    'custom_field_2',
                                    'image_overall_score',
                                ],
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '1',
                                'maximum' => '100',
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'return_total_count' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'fields' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'recursive' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListFile' => [
            'path' => '/v2/file/list',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'share_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'drive_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'parent_file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'status' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'uploading',
                                    'available',
                                ],
                            ],
                            'order_by' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'order_direction' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'ASC',
                                    'DESC',
                                ],
                            ],
                            'category' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'image',
                                    'video',
                                    'audio',
                                    'doc',
                                    'app',
                                    'zip',
                                    'others',
                                ],
                            ],
                            'type' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'file',
                                    'folder',
                                ],
                            ],
                            'fields' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'thumbnail_processes' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    '$ref' => '#/components/schemas/ImageProcess',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetFile' => [
            'path' => '/v2/file/get',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'url_expire_sec' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '10',
                                'maximum' => '14400',
                            ],
                            'fields' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'thumbnail_processes' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    '$ref' => '#/components/schemas/ImageProcess',
                                ],
                            ],
                            'share_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DownloadFile' => [
            'path' => '/v2/file/download',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'consumes' => [
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/octet-stream',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'domain_id',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'share_id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'drive_id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'file_id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'image_thumbnail_process',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'video_thumbnail_process',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'office_thumbnail_process',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetUploadUrl' => [
            'path' => '/v2/file/get_upload_url',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'share_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'upload_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'part_info_list' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'part_number' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'parallel_sha1_ctx' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'h' => [
                                                    'type' => 'array',
                                                    'required' => false,
                                                    'items' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'required' => false,
                                                    ],
                                                ],
                                                'part_offset' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'required' => false,
                                                ],
                                            ],
                                        ],
                                        'content_md5' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'content_type' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'parallel_sha256_ctx' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'h' => [
                                                    'type' => 'array',
                                                    'required' => false,
                                                    'items' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'required' => false,
                                                    ],
                                                ],
                                                'part_offset' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'required' => false,
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
        'ListUploadedParts' => [
            'path' => '/v2/file/list_uploaded_parts',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'part_number_marker' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'upload_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'drive_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'share_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CompleteFile' => [
            'path' => '/v2/file/complete',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'upload_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'MoveFile' => [
            'path' => '/v2/file/move',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'to_parent_file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'check_name_mode' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'ignore',
                                    'auto_rename',
                                    'refuse',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CopyFile' => [
            'path' => '/v2/file/copy',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'share_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'drive_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'to_drive_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'to_parent_file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'auto_rename' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetDownloadUrl' => [
            'path' => '/v2/file/get_download_url',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'share_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'drive_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'file_name' => [
                                'type' => 'string',
                                'required' => false,
                                'minLength' => 1,
                                'maxLength' => 1024,
                            ],
                            'expire_sec' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '1',
                                'maximum' => '115200',
                            ],
                            'response_content_type' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'FilePutUserTags' => [
            'path' => '/v2/file/put_usertags',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'user_tags' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'key' => [
                                            'type' => 'string',
                                            'required' => true,
                                            'pattern' => '^[^#]+$',
                                        ],
                                        'value' => [
                                            'type' => 'string',
                                            'required' => false,
                                            'pattern' => '^[^#]+$',
                                        ],
                                    ],
                                ],
                                'minItems' => 1,
                                'maxItems' => 1000,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'FileDeleteUserTags' => [
            'path' => '/v2/file/delete_usertags',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'key_list' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => true,
                                    'pattern' => '^[^#]+$',
                                ],
                                'minItems' => 1,
                                'maxItems' => 1000,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteRevision' => [
            'path' => '/v2/file/revision/delete',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'revision_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateRevision' => [
            'path' => '/v2/file/revision/update',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'revision_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'keep_forever' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'revision_description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RestoreRevision' => [
            'path' => '/v2/file/revision/restore',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'revision_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListRevision' => [
            'path' => '/v2/file/revision/list',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'minimum' => '1',
                                'maximum' => '200',
                            ],
                            'fields' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetRevision' => [
            'path' => '/v2/file/revision/get',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'revision_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'url_expire_sec' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'fields' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ScanFile' => [
            'path' => '/v2/file/scan',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '1',
                                'maximum' => '100',
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'fields' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListDelta' => [
            'path' => '/v2/file/list_delta',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'sync_root_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'cursor' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeltaGetLastCursor' => [
            'path' => '/v2/file/get_last_cursor',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'sync_root_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListReceivedFile' => [
            'path' => '/v2/file/list_received_file',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListMyGroupDrive' => [
            'path' => '/v2/drive/list_my_group_drive',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'FileRemovePermission' => [
            'path' => '/v2/file/remove_permission',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                        'required' => true,
                        'properties' => [
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'member_list' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'identity' => [
                                            '$ref' => '#/components/schemas/Identity',
                                            'required' => true,
                                        ],
                                        'role_id' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'FileAddPermission' => [
            'path' => '/v2/file/add_permission',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'member_list' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    '$ref' => '#/components/schemas/FilePermissionMember',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'FileListPermission' => [
            'path' => '/v2/file/list_permission',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListAssignment' => [
            'path' => '/v2/role/list_assignment',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'manage_resource_type' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'manage_resource_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'AssignRole' => [
            'path' => '/v2/role/assign',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'identity' => [
                                '$ref' => '#/components/schemas/Identity',
                                'required' => true,
                            ],
                            'role_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'manage_resource_type' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'manage_resource_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CancelAssignRole' => [
            'path' => '/v2/role/cancel_assign',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'identity' => [
                                '$ref' => '#/components/schemas/Identity',
                                'required' => true,
                            ],
                            'role_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'manage_resource_type' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'manage_resource_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateShareLink' => [
            'path' => '/v2/share_link/create',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'share_all_files' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'file_id_list' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'user_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'share_pwd' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'expiration' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'share_name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'disable_preview' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'disable_save' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'disable_download' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'preview_limit' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'save_limit' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'download_limit' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'creatable' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'creatable_file_id_list' => [
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
        'UpdateShareLink' => [
            'path' => '/v2/share_link/update',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'share_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'share_pwd' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'expiration' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'share_name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'status' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'preview_count' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'save_count' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'download_count' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'report_count' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'video_preview_count' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'disable_preview' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'disable_save' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'disable_download' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'preview_limit' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'save_limit' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'download_limit' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'SearchShareLink' => [
            'path' => '/v2/share_link/search',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'return_total_count' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'order_by' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'order_direction' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'creators' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'query' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CancelShareLink' => [
            'path' => '/v2/share_link/cancel',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'share_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListShareLink' => [
            'path' => '/v2/share_link/list',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'creator' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'order_by' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'order_direction' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'include_cancelled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetShareLink' => [
            'path' => '/v2/share_link/get',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'share_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetShareLinkByAnonymous' => [
            'path' => '/v2/share_link/get_by_anonymous',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'Anonymous' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'share_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetShareLinkToken' => [
            'path' => '/v2/share_link/get_share_token',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'Anonymous' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'share_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'share_pwd' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'expire_sec' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'TrashFile' => [
            'path' => '/v2/recyclebin/trash',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ClearRecyclebin' => [
            'path' => '/v2/recyclebin/clear',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListRecyclebin' => [
            'path' => '/v2/recyclebin/list',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'fields' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RestoreFile' => [
            'path' => '/v2/recyclebin/restore',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateFacegroup' => [
            'path' => '/v2/image/update_facegroup_info',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'group_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'group_name' => [
                                'type' => 'string',
                                'required' => false,
                                'minLength' => 1,
                                'maxLength' => 128,
                            ],
                            'group_cover_face_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'remarks' => [
                                'type' => 'string',
                                'required' => false,
                                'minLength' => 1,
                                'maxLength' => 128,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListTags' => [
            'path' => '/v2/image/list_tags',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'image_thumbnail_process' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'video_thumbnail_process' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListAddressGroups' => [
            'path' => '/v2/image/list_address_groups',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'image_thumbnail_process' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'video_thumbnail_process' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListFacegroups' => [
            'path' => '/v2/image/list_facegroups',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'remarks' => [
                                'type' => 'string',
                                'required' => false,
                                'minLength' => 1,
                                'maxLength' => 128,
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'return_total_count' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'SearchAddressGroups' => [
            'path' => '/v2/image/search_address_groups',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'tl_geo_point' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'br_geo_point' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'address_level' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'address_names' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'minItems' => 1,
                                'maxItems' => 10,
                            ],
                            'image_thumbnail_process' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'video_thumbnail_process' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RemoveFaceGroupFile' => [
            'path' => '/v2/albums/unassign_facegroup_item',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'face_group_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateStory' => [
            'path' => '/v2/image/create_story',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'story_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'story_type' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'TimeMemory',
                                    'PeopleMemory',
                                    'TagMemory',
                                    'TravelMemory',
                                ],
                            ],
                            'story_sub_type' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'story_name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'story_start_time' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'story_end_time' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'min_image_count' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'minimum' => '1',
                            ],
                            'max_image_count' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'maximum' => '100',
                            ],
                            'custom_labels' => [
                                'type' => 'object',
                                'deprecated' => true,
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'address' => [
                                '$ref' => '#/components/schemas/Address',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateCustomizedStory' => [
            'path' => '/v2/image/create_customized_story',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'story_type' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'story_sub_type' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'story_name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'story_cover' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'file_id' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'revision_id' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'story_files' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'file_id' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'revision_id' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                                'minItems' => 1,
                            ],
                            'custom_labels' => [
                                'type' => 'object',
                                'deprecated' => true,
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
        'SearchStories' => [
            'path' => '/v2/image/find_stories',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'story_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'story_type' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'story_name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'story_start_time_range' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'start' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'end' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'story_end_time_range' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'start' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'end' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'create_time_range' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'start' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'end' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'face_group_ids' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'custom_labels' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'with_empty_stories' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'sort' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'CreateTime',
                                    'StoryName',
                                    'StoryStartTime',
                                    'StoryEndTime',
                                ],
                            ],
                            'order' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'asc',
                                    'desc',
                                ],
                            ],
                            'cover_image_thumbnail_process' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'cover_video_thumbnail_process' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'url_expire_sec' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'deprecated' => true,
                                'required' => false,
                                'minimum' => '10',
                                'maximum' => '86400',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetStory' => [
            'path' => '/v2/image/get_story',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'story_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'cover_image_thumbnail_process' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'cover_video_thumbnail_process' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'image_url_process' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'image_thumbnail_process' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'video_thumbnail_process' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'url_expire_sec' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'deprecated' => true,
                                'required' => false,
                                'minimum' => '10',
                                'maximum' => '86400',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateStory' => [
            'path' => '/v2/image/update_story',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'story_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'story_name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'custom_labels' => [
                                'type' => 'object',
                                'deprecated' => true,
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'cover' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'file_id' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'revision_id' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteStory' => [
            'path' => '/v2/image/delete_story',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'story_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'AddStoryFiles' => [
            'path' => '/v2/image/add_story_files',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'story_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'files' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'file_id' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'revision_id' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                                'maxItems' => 100,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RemoveStoryFiles' => [
            'path' => '/v2/image/remove_story_files',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'story_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'files' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'file_id' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'revision_id' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                                'maxItems' => 100,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateSimilarImageClusterTask' => [
            'path' => '/v2/image/create_similar_image_cluster_task',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetTaskStatus' => [
            'path' => '/v2/image/get_task_status',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'task_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'SearchSimilarImageClusters' => [
            'path' => '/v2/image/query_similar_image_clusters',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'minimum' => '0',
                                'maximum' => '100',
                            ],
                            'order' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'desc',
                                    'asc',
                                ],
                            ],
                            'image_thumbnail_process' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetAsyncTask' => [
            'path' => '/v2/async_task/get',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'async_task_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetVideoPreviewPlayMeta' => [
            'path' => '/v2/file/get_video_preview_play_meta',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'share_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'drive_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'category' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetVideoPreviewPlayInfo' => [
            'path' => '/v2/file/get_video_preview_play_info',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'share_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'drive_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'category' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'template_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'get_without_url' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'url_expire_sec' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            're_transcode' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'get_master_url' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateIdentityToBenefitPkgMapping' => [
            'path' => '/v2/benefit/identity_to_benefit_pkg_mapping/create',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'identity_type' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'user',
                                ],
                            ],
                            'identity_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'benefit_pkg_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'amount' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'expire_time' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateIdentityToBenefitPkgMapping' => [
            'path' => '/v2/benefit/identity_to_benefit_pkg_mapping/update',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'identity_type' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'user',
                                ],
                            ],
                            'identity_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'benefit_pkg_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'amount' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'expire_time' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetIdentityToBenefitPkgMapping' => [
            'path' => '/v2/benefit/identity_to_benefit_pkg_mapping/get',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'identity_type' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'user',
                                ],
                            ],
                            'identity_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'benefit_pkg_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListIdentityToBenefitPkgMapping' => [
            'path' => '/v2/benefit/identity_to_benefit_pkg_mapping/list',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'identity_type' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'user',
                                ],
                            ],
                            'identity_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'include_expired' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'InvestigateFile' => [
            'path' => '/v2/csi/investigate_file',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_file_ids' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'drive_id' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'file_id' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CsiGetFileInfo' => [
            'path' => '/v2/csi/get_file_info',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'url_expire_sec' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '10',
                                'maximum' => '14400',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'Batch' => [
            'path' => '/v2/batch',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                            'resource' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'requests' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'id' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'method' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'url' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'body' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'additionalProperties' => [
                                                'type' => 'any',
                                            ],
                                        ],
                                        'headers' => [
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
        'GetDomainQuota' => [
            'path' => '/v2/domain/get_quota',
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
            'deprecated' => false,
            'parameters' => [],
        ],
        'GroupUpdateName' => [
            'path' => '/v2/group/update_name',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
                    'in' => 'host',
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
                        'properties' => [
                            'group_id' => [
                                'type' => 'string',
                                'required' => true,
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
    'endpoints' => [
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'cn-shenzhen.admin.aliyunpds.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'cn-beijing.admin.aliyunpds.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'cn-zhangjiakou.admin.aliyunpds.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'cn-hangzhou.admin.aliyunpds.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'cn-shanghai.admin.aliyunpds.com',
        ],
    ],
];
<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'appstream-center',
        'version' => '2021-02-18',
    ],
    'directories' => [
        'GetAuthCode',
        [
            'id' => 0,
            'title' => '其它',
            'type' => 'directory',
            'children' => [
                'ExpireLoginToken',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'GetAuthCode' => [
            'summary' => '获取一个包含用户身份信息和权限信息的授权码，在集成场景中可使用该授权码唤起云应用。',
            'methods' => [
                'get',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ExternalUserId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '外部用户ID，该ID由调用方自定义，确保在一个阿里云账号下唯一即可。不能和`EndUserId`同时为空。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'alice',
                    ],
                ],
                [
                    'name' => 'EndUserId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '无影便捷账号的用户名，在一个阿里云账号下唯一。不能和`ExternalUserId`同时为空。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'alice',
                    ],
                ],
                [
                    'name' => 'Policy',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '权限策略，限制授权码的访问权限，为空表示不限制。'."\n"
                            ."\n"
                            .'语法：'."\n"
                            ."\n"
                            .'```json'."\n"
                            .'{'."\n"
                            .'      "Version": "1",'."\n"
                            .'      "Resource": {'."\n"
                            .'            "Type": "<资源类型>",'."\n"
                            .'            "Id": "<资源ID>"'."\n"
                            .'      }'."\n"
                            .'}'."\n"
                            .'```'."\n"
                            ."\n"
                            .'其中，<资源类型>的取值范围是：'."\n"
                            ."\n"
                            .'- AppInstanceGroup：交付组（ID可通过ListAppInstanceGroup接口获取）'."\n"
                            .'- AppInstance：应用实例（专用字段）'."\n"
                            .'- App：应用（ID可通过ListAppInstanceGroup接口获取）',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{'."\n"
                            .'      "Version": "1",'."\n"
                            .'      "Resource": {'."\n"
                            .'            "Type": "AppInstanceGroup",'."\n"
                            .'            "Id": "aig-9ciijz60n4xsv****"'."\n"
                            .'      }'."\n"
                            .'}',
                    ],
                ],
                [
                    'name' => 'AutoCreateUser',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '根据`ExternalUserId`确认是否同步新建EndUserId。仅在`EndUserId`取值为空时生效。',
                        'type' => 'boolean',
                        'required' => false,
                        'enumValueTitles' => [
                            'true' => '同步',
                            'false' => '不同步[默认值]',
                        ],
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                            'AuthModel' => [
                                'description' => '授权码信息。',
                                'type' => 'object',
                                'properties' => [
                                    'AuthCode' => [
                                        'description' => '授权码。该授权码有效期为3分钟，且无论校验成功或失败，只能被使用一次。当为一个用户生成多个授权码时，只有最后一次生成的有效。',
                                        'type' => 'string',
                                        'example' => 'acv2ZEq2TNSqOlX+DvyetHGRT08iPhbWg/os1W4HojpBxkMQZkAnbKSfz/wNvS0E149IQZ5TogvBUE8ghCSVV+QBnv48Y+sn4z9fY5ywZA1peI5s4TplQI0TADBhPZXEIzMOdmbNsDGGlGcKOAq8ixd1Epzdu9XfvRzdLOO6o3zQwTZxXsjOgGBW8JTcgCP9W9iYiIjHIdZ2VCAnmMzuyVkyED8gymEevH10QoclyH/O3s8Yq6VF34gMXihDQeiI8PyiAZrW0JWXSWpdy3n4yGtAqMAgv46FzTA+XJ6C********',
                                    ],
                                    'EndUserId' => [
                                        'description' => '无影便捷账号的用户名。',
                                        'type' => 'string',
                                        'example' => 'alice',
                                    ],
                                    'ExpireTime' => [
                                        'description' => '授权码过期时间，采用ISO 8601标准的UTC时间。',
                                        'type' => 'string',
                                        'example' => '2015-01-23T12:33:18Z',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"AuthModel\\": {\\n    \\"AuthCode\\": \\"acv2ZEq2TNSqOlX+DvyetHGRT08iPhbWg/os1W4HojpBxkMQZkAnbKSfz/wNvS0E149IQZ5TogvBUE8ghCSVV+QBnv48Y+sn4z9fY5ywZA1peI5s4TplQI0TADBhPZXEIzMOdmbNsDGGlGcKOAq8ixd1Epzdu9XfvRzdLOO6o3zQwTZxXsjOgGBW8JTcgCP9W9iYiIjHIdZ2VCAnmMzuyVkyED8gymEevH10QoclyH/O3s8Yq6VF34gMXihDQeiI8PyiAZrW0JWXSWpdy3n4yGtAqMAgv46FzTA+XJ6C********\\",\\n    \\"EndUserId\\": \\"alice\\",\\n    \\"ExpireTime\\": \\"2015-01-23T12:33:18Z\\"\\n  }\\n}","type":"json"}]',
            'title' => '获取授权码',
        ],
        'ExpireLoginToken' => [
            'summary' => '在无影登录态自然失效之前，人工将其置为失效。',
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
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SessionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '登录的会话ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a863f4c3-2f1d-4971-8cf7-e2b92ae9****',
                    ],
                ],
                [
                    'name' => 'LoginToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '登录Token。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'v185fdd7f6d39fa7861981639366085772e150a390a5bb7b43c4e62440d94fc392b945770e1596cebe90085ce0af4d****',
                    ],
                ],
                [
                    'name' => 'EndUserId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '登录用户名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'testuser',
                    ],
                ],
                [
                    'name' => 'OfficeSiteId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '工作区ID。如果是通过工作区登录则必填，如果是通过组织ID登录则可为空。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-beijing+dir-172301****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\"\\n}","type":"json"}]',
            'title' => '将无影登录态置为失效',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'appstream-center.aliyuncs.com',
        ],
    ],
];
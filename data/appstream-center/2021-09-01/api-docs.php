<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'appstream-center',
        'version' => '2021-09-01',
    ],
    'directories' => [
        [
            'id' => 188099,
            'title' => '云Flow',
            'type' => 'directory',
            'children' => [
                [
                    'id' => 188101,
                    'title' => '访问页面',
                    'type' => 'directory',
                    'children' => [
                        'AccessPageSetAcl',
                        'CreateAccessPage',
                        'GetAccessPageSession',
                        'ListAccessPages',
                        'RefreshAccessUrl',
                        'UpdateAccessPageState',
                        'DeleteAccessPage',
                        'AccessPageGetAcl',
                    ],
                ],
                [
                    'id' => 188102,
                    'title' => '会话包',
                    'type' => 'directory',
                    'children' => [
                        'AskSessionPackagePrice',
                        'ListSessionPackages',
                        'BuySessionPackage',
                    ],
                ],
                [
                    'id' => 188103,
                    'title' => '项目',
                    'type' => 'directory',
                    'children' => [
                        'ModifyProjectPolicy',
                        'GetProjectPolicies',
                        'DeleteProject',
                        'CreateProject',
                        'ListProjects',
                    ],
                ],
            ],
        ],
        [
            'id' => 166315,
            'title' => '地域',
            'type' => 'directory',
            'children' => [
                'ListRegions',
            ],
        ],
        [
            'id' => 166366,
            'title' => '资源',
            'type' => 'directory',
            'children' => [
                'ListNodeInstanceType',
                'GetResourcePrice',
                'GetResourceRenewPrice',
            ],
        ],
        [
            'id' => 166320,
            'title' => '交付组',
            'type' => 'directory',
            'children' => [
                'CreateAppInstanceGroup',
                'GetAppInstanceGroup',
                'ListAppInstanceGroup',
                'PageListAppInstanceGroupUser',
                'RenewAppInstanceGroup',
                'UpdateAppInstanceGroupImage',
                'ModifyAppInstanceGroupAttribute',
                'ModifyNodePoolAttribute',
                'AuthorizeInstanceGroup',
                'LogOffAllSessionsInAppInstanceGroup',
                'DeleteAppInstanceGroup',
            ],
        ],
        [
            'id' => 182244,
            'title' => '应用实例',
            'type' => 'directory',
            'children' => [
                'ListAppInstances',
                'DeleteAppInstances',
            ],
        ],
        [
            'id' => 180891,
            'title' => '连接',
            'type' => 'directory',
            'children' => [
                'GetConnectionTicket',
                'Unbind',
            ],
        ],
        [
            'id' => 182247,
            'title' => '调试',
            'type' => 'directory',
            'children' => [
                'CreateImageFromAppInstanceGroup',
                'GetDebugAppInstance',
            ],
        ],
        [
            'id' => 170452,
            'title' => 'OTA升级',
            'type' => 'directory',
            'children' => [
                'ListOtaTask',
                'GetOtaTaskByTaskId',
                'ApproveOtaTask',
                'CancelOtaTask',
            ],
        ],
        [
            'id' => 178496,
            'title' => '管理员账号',
            'type' => 'directory',
            'children' => [
                'ListTenantConfig',
                'ModifyTenantConfig',
            ],
        ],
        [
            'id' => 188729,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'MigrateSessionPackage',
                'AskSessionPackageRenewPrice',
                'RenewSessionPackage',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'AccessPageSetAcl' => [
            'summary' => '访问页面的访问控制管理。',
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
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'AccessPageId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '访问页面Id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a-062wec3cwmayw****',
                    ],
                ],
                [
                    'name' => 'AccessMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '访问页面的访问模式。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'FREE_ACCESS',
                    ],
                ],
                [
                    'name' => 'AccessPageName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '访问页面的名字。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'notepad_test',
                    ],
                ],
                [
                    'name' => 'EffectTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '访问页面Url链接的有效时间。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '7',
                    ],
                ],
                [
                    'name' => 'Unit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '有效时间单位的可选项。'."\n"
                            ."\n"
                            .'- Month'."\n"
                            .'- Minute'."\n"
                            .'- Hour'."\n"
                            .'- Day',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Day',
                        'enum' => [
                            'Minute',
                            'Hour',
                            'Month',
                            'Day',
                        ],
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
                                'description' => '请求Id。',
                                'type' => 'string',
                                'example' => 'E25FC620-6B6F-12D2-A992-AD8727DC****',
                            ],
                            'Code' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'InternalError',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E25FC620-6B6F-12D2-A992-AD8727DC****\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"InternalError\\",\\n  \\"Success\\": \\"true\\"\\n}","type":"json"}]',
            'title' => '访问页面的访问控制管理',
            'description' => '对应云Flow控制台访问页面->访问管理功能。',
        ],
        'CreateAccessPage' => [
            'summary' => '创建访问页面。',
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
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'AccessPageName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '访问页面名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '实验室demo访问页',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'p-065zdecaer07h****',
                    ],
                ],
                [
                    'name' => 'CloudEnvId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云环境ID。默认值为空。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [],
                        'example' => 'c-e-06gdesdaxez****',
                    ],
                ],
                [
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目名称。默认值为空。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [],
                        'example' => '实验室demo',
                    ],
                ],
                [
                    'name' => 'EffectTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '有效时间。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'enumValueTitles' => [
                            '3(默认值)' => '3(默认值)',
                        ],
                        'example' => '7',
                    ],
                ],
                [
                    'name' => 'Unit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '有效时间单位的可选项。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'Month' => '默认值',
                            'Minute' => 'Minute',
                            'Hour' => 'Hour',
                            'Day' => 'Day',
                        ],
                        'example' => 'Day',
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
                                'description' => '请求Id。',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                            'Code' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => '找不到项目',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '创建成功时，返回的访问页面唯一id。',
                                'type' => 'string',
                                'example' => 'a-06xnr5lyp77e7****',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"找不到项目\\",\\n  \\"Success\\": \\"true\\",\\n  \\"Data\\": \\"a-06xnr5lyp77e7****\\"\\n}","type":"json"}]',
            'title' => '创建访问页面',
            'description' => '对应云Flow控制台中的创建访问页面。',
        ],
        'GetAccessPageSession' => [
            'summary' => '获取访问页的会话凭据，连接至访问页面',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'Anonymous' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'AccessPageId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '访问页面Id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a-062wec3cwmayw****',
                    ],
                ],
                [
                    'name' => 'AccessPageToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '访问页凭据',
                        'type' => 'string',
                        'required' => true,
                        'example' => '8141B1A674D48ACB8E5D2D6CE53FDB2F3CF8710A5F8F78578D5254BC6F******',
                    ],
                ],
                [
                    'name' => 'ExternalUserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '外部用户Id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Banca******',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                            'Code' => [
                                'description' => '状态码：'."\n"
                                    ."\n"
                                    .'- `200`：成功。'."\n"
                                    .'- `400`：出错。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '找不到访问页',
                            ],
                            'Success' => [
                                'description' => '请求成功与否，成功返回为true，失败为false',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '访问页凭据对象',
                                'type' => 'object',
                                'properties' => [
                                    'ConnectTicket' => [
                                        'description' => '连接凭据信息',
                                        'type' => 'string',
                                        'example' => 'DQpbRGVza3RvcF0NCkZvcmNlVGxzVHlwZT0xDQpHV1Rva2VuUGFydDE9MDBzQU5DTGVsZ0RqMnAyMGpZdUNkRDMrNTlLekpzUTRXNElPWVdjWGIwZ2QrUkNyais0ZGM3WUJGM1NBdVFJWWl2ejhaWDlvakh1cDJ4c0Vpc3lrQ1I4RVEzeDhIYXdCb2pRRDJReklaQTZIbU52VjdrRlNlWkxQTXV3Y0hNTEZTTkxKaDNOY1BtU0tVYTNqWVVUMFUyKzNqWDBRMXdLM29ZQnJaOFVoL2RWY0xpem5tWEhHTmE0THVGRCtrajloSWlFT0w3b2w4OHY1cjBPelpHZnh4aXlVbk1yQURnRHhoK1F6K3UvdXYxaFYyQ3UwVlduTHJ3cDNRM3hYWWtORW81N00xYWZ4cTJBdWplVmx3aGVxOHd4dDl2Y3NGVGMxNFpPL2hudWdoeGJkaz0NCkdXVG9rZW5QYXJ0Mj0NCkFzcEF1dGhUb2tlbj0wME5LTnlLZXE3UGpzNzNzeURrdEs2NUlaenpYb05WNWxnY3BjVTJMd2NKUEoyMk53WmlrSGNaaDdNVGk2azlLazNyeHFCd2FHZTlmc2NUbFljUDJ0MEVldXRha2paUklMM0x3a0RsT1BZZTZxYmtsay9STHFrajg4dWg0ZFZNTHE2QkF0WVRSeW9ZTC9WUHhaVWxyZEZOQT09DQpBZXNLZXlWZXJzaW9uPTE3MDEyMzk1ODc4NzcNCkdhdGV3YXlEb21haW5BZGRyZXNzPWd3LWFwcC1jbi1oYW5nemhvdS1pLWFwcC10ZXN0MC13aW4ud3V5aW5nLmFsaXl1bmNzLmNvbQ0KR2F0ZXdheUFkZHJlc3M9NDcuOTkuMjIzLjE0OQ0KR2F0ZXdheVBvcnQ9NTkxMg0KR2F0ZXdheVdzc1BvcnQ9ODAwOA0KU3RyZWFtVHlwZT0wDQpSdGNHd1Rva2VuPVAwMFJkc013dVdQVkt4MGtRYUNkSlY3MUc2OC9iaWFhSEJwVn******',
                                    ],
                                    'FlowId' => [
                                        'description' => 'flow ID',
                                        'type' => 'string',
                                        'example' => 'e4fa0b4c18c5437a8b1746e7c228172e',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"找不到访问页\\",\\n  \\"Success\\": \\"true\\",\\n  \\"Data\\": {\\n    \\"ConnectTicket\\": \\"DQpbRGVza3RvcF0NCkZvcmNlVGxzVHlwZT0xDQpHV1Rva2VuUGFydDE9MDBzQU5DTGVsZ0RqMnAyMGpZdUNkRDMrNTlLekpzUTRXNElPWVdjWGIwZ2QrUkNyais0ZGM3WUJGM1NBdVFJWWl2ejhaWDlvakh1cDJ4c0Vpc3lrQ1I4RVEzeDhIYXdCb2pRRDJReklaQTZIbU52VjdrRlNlWkxQTXV3Y0hNTEZTTkxKaDNOY1BtU0tVYTNqWVVUMFUyKzNqWDBRMXdLM29ZQnJaOFVoL2RWY0xpem5tWEhHTmE0THVGRCtrajloSWlFT0w3b2w4OHY1cjBPelpHZnh4aXlVbk1yQURnRHhoK1F6K3UvdXYxaFYyQ3UwVlduTHJ3cDNRM3hYWWtORW81N00xYWZ4cTJBdWplVmx3aGVxOHd4dDl2Y3NGVGMxNFpPL2hudWdoeGJkaz0NCkdXVG9rZW5QYXJ0Mj0NCkFzcEF1dGhUb2tlbj0wME5LTnlLZXE3UGpzNzNzeURrdEs2NUlaenpYb05WNWxnY3BjVTJMd2NKUEoyMk53WmlrSGNaaDdNVGk2azlLazNyeHFCd2FHZTlmc2NUbFljUDJ0MEVldXRha2paUklMM0x3a0RsT1BZZTZxYmtsay9STHFrajg4dWg0ZFZNTHE2QkF0WVRSeW9ZTC9WUHhaVWxyZEZOQT09DQpBZXNLZXlWZXJzaW9uPTE3MDEyMzk1ODc4NzcNCkdhdGV3YXlEb21haW5BZGRyZXNzPWd3LWFwcC1jbi1oYW5nemhvdS1pLWFwcC10ZXN0MC13aW4ud3V5aW5nLmFsaXl1bmNzLmNvbQ0KR2F0ZXdheUFkZHJlc3M9NDcuOTkuMjIzLjE0OQ0KR2F0ZXdheVBvcnQ9NTkxMg0KR2F0ZXdheVdzc1BvcnQ9ODAwOA0KU3RyZWFtVHlwZT0wDQpSdGNHd1Rva2VuPVAwMFJkc013dVdQVkt4MGtRYUNkSlY3MUc2OC9iaWFhSEJwVn******\\",\\n    \\"FlowId\\": \\"e4fa0b4c18c5437a8b1746e7c228172e\\"\\n  }\\n}","type":"json"}]',
            'title' => '获取访问页的会话',
        ],
        'ListAccessPages' => [
            'summary' => '获取访问页面列表。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'AccessPageName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '访问页面名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '实验室demo访问页',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目唯一id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'p-065zdecaer07h****',
                    ],
                ],
                [
                    'name' => 'AccessPageId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '访问页面Id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'a-062wec3cwmayw****',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码（首页传1）, 为空就获取所有数据。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'enumValueTitles' => [
                            '默认值为1' => '默认值为1',
                        ],
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页展示数据（默认20条）',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'enumValueTitles' => [
                            '默认20条' => '默认20条',
                        ],
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'SortType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '"ASC"表示升序，"DESC"表示降序。'."\n"
                            .'排序是根据访问页的创建时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ASC',
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
                                'description' => '请求Id。',
                                'type' => 'string',
                                'example' => 'AF8361BD-5ECB-139A-B019-2E0350CC****',
                            ],
                            'Code' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误消息。',
                                'type' => 'string',
                                'example' => 'InternalError',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '访问页面列表集合。'."\n"
                                    .'数据是数组结构。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '一个访问页面数据集合。',
                                    'type' => 'object',
                                    'properties' => [
                                        'AccessPageId' => [
                                            'description' => '访问页面的Id。',
                                            'type' => 'string',
                                            'example' => 'a-062wec3cwmayw****',
                                        ],
                                        'AccessPageState' => [
                                            'description' => '访问页面的状态。'."\n"
                                                ."\n"
                                                .'- 0 : 上线'."\n"
                                                .'- 1 :  维护'."\n"
                                                .'- 2 : 创建中'."\n"
                                                .'- 3 :  创建失败',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'AccessPageName' => [
                                            'description' => '访问页面的名字。',
                                            'type' => 'string',
                                            'example' => 'notepad_test',
                                        ],
                                        'ProjectId' => [
                                            'description' => '项目Id。',
                                            'type' => 'string',
                                            'example' => 'p-062wec3cwmayu****',
                                        ],
                                        'ProjectName' => [
                                            'description' => '项目的名字。',
                                            'type' => 'string',
                                            'example' => 'notepad_demo',
                                        ],
                                        'ContentId' => [
                                            'description' => '内容的Id。',
                                            'type' => 'string',
                                            'example' => 'c-05to6wm3w5d53****',
                                        ],
                                        'ContentName' => [
                                            'description' => '内容的名字。',
                                            'type' => 'string',
                                            'example' => 'notepad测试',
                                        ],
                                        'AccessUrl' => [
                                            'description' => '访问页面的Url链接。',
                                            'type' => 'string',
                                            'example' => 'id=a-062wec3cwmayw****&token=9E9A62937B0E41F4AEFE5EC9B238156CCDFB682954003AEE940A05FB2568****',
                                        ],
                                        'UrlExpireTime' => [
                                            'description' => '访问页面Url链接的过期时间。',
                                            'type' => 'string',
                                            'example' => '2023-11-23T08:48:15.000+00:00',
                                        ],
                                        'AccessMode' => [
                                            'description' => '访问页面的访问模式（暂未启用）。',
                                            'type' => 'string',
                                            'example' => '暂未启用',
                                        ],
                                        'GmtCreate' => [
                                            'description' => '访问页面的创建时间。',
                                            'type' => 'string',
                                            'example' => '2023-11-16T08:48:15.000+00:00',
                                        ],
                                        'Unit' => [
                                            'description' => '有效时间单位的可选项。'."\n"
                                                .'- Month'."\n"
                                                .'- Minute'."\n"
                                                .'- Hour'."\n"
                                                .'- Day',
                                            'type' => 'string',
                                            'example' => 'Hour',
                                        ],
                                        'EffectTime' => [
                                            'description' => '访问页面Url链接的有效时间。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '168',
                                        ],
                                    ],
                                ],
                            ],
                            'Count' => [
                                'description' => '当前用户的访问页面总数。',
                                'type' => 'string',
                                'example' => '22',
                            ],
                            'PageSize' => [
                                'description' => '返回数据每页的数量。',
                                'type' => 'string',
                                'example' => '20',
                            ],
                            'PageNumber' => [
                                'description' => '返回数据的页数。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"AF8361BD-5ECB-139A-B019-2E0350CC****\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"InternalError\\",\\n  \\"Success\\": \\"true\\",\\n  \\"Data\\": [\\n    {\\n      \\"AccessPageId\\": \\"a-062wec3cwmayw****\\",\\n      \\"AccessPageState\\": \\"1\\",\\n      \\"AccessPageName\\": \\"notepad_test\\",\\n      \\"ProjectId\\": \\"p-062wec3cwmayu****\\",\\n      \\"ProjectName\\": \\"notepad_demo\\",\\n      \\"ContentId\\": \\"c-05to6wm3w5d53****\\",\\n      \\"ContentName\\": \\"notepad测试\\",\\n      \\"AccessUrl\\": \\"id=a-062wec3cwmayw****&token=9E9A62937B0E41F4AEFE5EC9B238156CCDFB682954003AEE940A05FB2568****\\",\\n      \\"UrlExpireTime\\": \\"2023-11-23T08:48:15.000+00:00\\",\\n      \\"AccessMode\\": \\"暂未启用\\",\\n      \\"GmtCreate\\": \\"2023-11-16T08:48:15.000+00:00\\",\\n      \\"Unit\\": \\"Hour\\",\\n      \\"EffectTime\\": 168\\n    }\\n  ],\\n  \\"Count\\": \\"22\\",\\n  \\"PageSize\\": \\"20\\",\\n  \\"PageNumber\\": \\"1\\"\\n}","type":"json"}]',
            'title' => '获取访问页面列表',
            'description' => '对应云Flow控制台中整个访问页面列表。',
        ],
        'RefreshAccessUrl' => [
            'summary' => '重新生成访问页面的超链接',
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
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'AccessPageId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '访问页面Id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'a-062wec3cwmayw****',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                            'Code' => [
                                'description' => '状态码：'."\n"
                                    ."\n"
                                    .'- `200`：成功。'."\n"
                                    .'- `400`：出错。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '找不到访问页',
                            ],
                            'Success' => [
                                'description' => '请求成功与否，成功返回为true，失败为false',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'AccessUrl' => [
                                'description' => '访问页面的超链接',
                                'type' => 'string',
                                'example' => 'https://wuying.aliyun.com/native-solution/cloud-flow/view?id=a-075nu7b9ynrpugvbm&token=67C7557D25540A9130B1ED81E806D4772A7DE693E6F377E3594179772B******',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"找不到访问页\\",\\n  \\"Success\\": \\"true\\",\\n  \\"AccessUrl\\": \\"https://wuying.aliyun.com/native-solution/cloud-flow/view?id=a-075nu7b9ynrpugvbm&token=67C7557D25540A9130B1ED81E806D4772A7DE693E6F377E3594179772B******\\"\\n}","type":"json"}]',
            'title' => '刷新访问页超链接',
        ],
        'UpdateAccessPageState' => [
            'summary' => '更新访问页面状态。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'AccessPageState',
                    'in' => 'query',
                    'schema' => [
                        'description' => '访问页面状态值。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'enumValueTitles' => [
                            '0(上线)' => '0(上线)',
                            '1(维护)' => '1(维护)',
                        ],
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'AccessPageId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '访问页面Id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'a-06xnr5lyp77e7****',
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
                                'description' => '请求Id。',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                            'Code' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'InternalError',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"InternalError\\",\\n  \\"Success\\": \\"true\\"\\n}","type":"json"}]',
            'title' => '更新访问页面状态',
            'description' => '更新访问页面状态。'."\n"
                ."\n"
                .'- 上线：访问页面置为上线状态时，可以对外公开访问。'."\n"
                .'- 维护：访问页面置为维护状态时，不可以对外公开访问；可以进行Flow的编辑和预览操作。',
        ],
        'DeleteAccessPage' => [
            'summary' => '删除已经发布的访问页面以及访问页相关的资源。',
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
                'operationType' => 'delete',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'AccessPageId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '访问页面Id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'a-075nu7bcqim2wvxli',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                            'Code' => [
                                'description' => '状态码：'."\n"
                                    ."\n"
                                    .'- `200`：成功。'."\n"
                                    .'- `400`：出错。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '出错时的错误消息。',
                                'type' => 'string',
                                'example' => '找不到访问页',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"找不到访问页\\",\\n  \\"Success\\": \\"true\\"\\n}","type":"json"}]',
            'title' => '删除访问页面',
        ],
        'AccessPageGetAcl' => [
            'summary' => '获取访问管理页配置。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'AccessPageId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '访问页面Id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'a-075nu7bcqim2wvxli',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                            'Code' => [
                                'description' => '状态码：'."\n"
                                    ."\n"
                                    .'- `200`：成功。'."\n"
                                    .'- `400`：出错。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'The parameter ProductType is invalid.',
                            ],
                            'Success' => [
                                'description' => '请求成功与否，成功返回为true，失败为false',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '访问页配置数据',
                                'type' => 'array',
                                'items' => [
                                    'description' => '访问页面配置对象',
                                    'type' => 'object',
                                    'properties' => [
                                        'AccessUrl' => [
                                            'description' => '访问页超链接',
                                            'type' => 'string',
                                            'example' => 'https://wuying.aliyun.com/native-solution/cloud-flow/view?id=a-075nu7bcqim2wvxli&token=8141B1A674D48ACB8E5D2D6CE53FDB2F3CF8710A5F8F78578D5254BC6F******',
                                        ],
                                        'UrlExpireTime' => [
                                            'description' => 'Url过期时间',
                                            'type' => 'string',
                                            'example' => '2023-12-05 14:28:20',
                                        ],
                                        'AccessMode' => [
                                            'description' => '访问模式：自由访问或者邀请码验证',
                                            'type' => 'string',
                                            'example' => 'FREE_ACCESS',
                                        ],
                                        'EffectTime' => [
                                            'description' => 'Url有效时间',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2023-02-08T03:52Z',
                                        ],
                                        'Unit' => [
                                            'description' => '有效时间单位的可选项',
                                            'type' => 'string',
                                            'example' => 'hour',
                                            'enum' => [
                                                'Month',
                                                'Hour',
                                                'Minute',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"The parameter ProductType is invalid.\\",\\n  \\"Success\\": \\"true\\",\\n  \\"Data\\": [\\n    {\\n      \\"AccessUrl\\": \\"https://wuying.aliyun.com/native-solution/cloud-flow/view?id=a-075nu7bcqim2wvxli&token=8141B1A674D48ACB8E5D2D6CE53FDB2F3CF8710A5F8F78578D5254BC6F******\\",\\n      \\"UrlExpireTime\\": \\"2023-12-05 14:28:20\\",\\n      \\"AccessMode\\": \\"FREE_ACCESS\\",\\n      \\"EffectTime\\": 0,\\n      \\"Unit\\": \\"hour\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取访问页面配置',
        ],
        'AskSessionPackagePrice' => [
            'summary' => '云Flow会话包收费查询。',
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
                    'name' => 'SessionSpec',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话包对应的会话规格。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'appstreaming.vgpu.basic' => '图形型-基础',
                            'appstreaming.vgpu.entry' => '图形型-入门',
                            'appstreaming.vgpu.standard' => '图形型-标准',
                            'appstreaming.general.basic' => '通用型-基础',
                            'appstreaming.general.standard' => '通用型-标准',
                            'appstreaming.vgpu.elementary' => '图形型-初级',
                            'appstreaming.general.entry' => '通用型-入门',
                        ],
                        'example' => 'appstreaming.general.entry'."\n",
                    ],
                ],
                [
                    'name' => 'SessionType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话包对应的会话类型。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'Linux' => 'Linux',
                            'Windows' => 'Windows',
                            'Android' => 'Android',
                        ],
                        'example' => 'Windows'."\n",
                    ],
                ],
                [
                    'name' => 'SessionPackageType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '时长包类型。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            '1000小时，100人并发',
                            '5000小时，500人并发',
                            '25000小时，1000人并发',
                            '1小时，10人并发',
                            '3小时，20人并发',
                        ],
                        'example' => '0'."\n",
                    ],
                ],
                [
                    'name' => 'Region',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话包所属的地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'cn-shanghai' => '华东2（上海）',
                            'cn-hangzhou' => '华东1（杭州）',
                        ],
                        'example' => 'cn-hangzhou'."\n",
                    ],
                ],
                [
                    'name' => 'ChargeType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '购买会话包付费类型',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'PostPaid' => 'PostPaid',
                            'PrePaid' => 'PrePaid',
                        ],
                        'example' => 'PrePaid',
                    ],
                ],
                [
                    'name' => 'Period',
                    'in' => 'query',
                    'schema' => [
                        'description' => '购买时长',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PeriodUnit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '购买时长单位',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'Month' => 'Month',
                            'Day' => 'Day',
                        ],
                        'example' => 'Month'."\n",
                    ],
                ],
                [
                    'name' => 'MaxSessions',
                    'in' => 'query',
                    'schema' => [
                        'description' => '最大并发数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回对象。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '2C64D9E5-DFCD-10A5-A911-xxxxxxx',
                            ],
                            'Data' => [
                                'description' => '返回数据集。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回数据对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Price' => [
                                            'description' => '价格对象。',
                                            'type' => 'object',
                                            'properties' => [
                                                'OriginalPrice' => [
                                                    'description' => '原始价格。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '2000.0',
                                                ],
                                                'DiscountPrice' => [
                                                    'description' => '折扣价格。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '0.0',
                                                ],
                                                'TradePrice' => [
                                                    'description' => '实际交易价格。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '2000.0',
                                                ],
                                                'Currency' => [
                                                    'description' => '币种。',
                                                    'type' => 'string',
                                                    'example' => 'CNY',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2C64D9E5-DFCD-10A5-A911-xxxxxxx\\",\\n  \\"Data\\": [\\n    {\\n      \\"Price\\": {\\n        \\"OriginalPrice\\": 2000,\\n        \\"DiscountPrice\\": 0,\\n        \\"TradePrice\\": 2000,\\n        \\"Currency\\": \\"CNY\\"\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '会话包收费查询',
            'description' => '请确保在使用该接口前，已充分了解无影云Flow的[计费方式和价格](https://www.aliyun.com/price/product#/ecs/detail)。',
        ],
        'ListSessionPackages' => [
            'summary' => '获取项目的会话包列表。',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云Flow项目ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'p-xxxxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'SessionPackageName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话包名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '测试会话包',
                    ],
                ],
                [
                    'name' => 'SortType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义排序类型。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'ASC' => '升序',
                            'DESC' => '降序',
                        ],
                        'example' => 'ASC',
                    ],
                ],
                [
                    'name' => 'SessionPackageId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话包的唯一ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'tp-xxxxxxxx',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页展示数据（默认20条）。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码（首页传1）, 为空就获取所有数据。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'StateList',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '会话包状态列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '会话包状态。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => false,
                            'enumValueTitles' => [
                                1 => '预定',
                                '未支付',
                                '支付成功',
                                '生产成功',
                                '生产失败',
                                '重建',
                                '取消',
                                '包年包月资源到期关停',
                                '包年包月资源超期释放关停',
                            ],
                            'example' => '4',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回对象。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5Fxxxxxxxx'."\n",
                            ],
                            'PageSize' => [
                                'description' => '每页展示数据。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                            'PageNumber' => [
                                'description' => '页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'description' => '当前用户项目总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'Data' => [
                                'description' => '用户会话包数据集。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '用户会话包对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ProjectId' => [
                                            'description' => '云Flow项目ID。',
                                            'type' => 'string',
                                            'example' => 'p-xxxxxxxxxxxx',
                                        ],
                                        'ProjectName' => [
                                            'description' => '云flow项目名称',
                                            'type' => 'string',
                                            'example' => 'wuying-project-npp-test',
                                        ],
                                        'SessionPackageId' => [
                                            'description' => '会话包ID。',
                                            'type' => 'string',
                                            'example' => 'tp-xxxxxxxxx',
                                        ],
                                        'SessionPackageTypeId' => [
                                            'description' => '会话包类型ID。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                '1000小时，100人并发',
                                                '5000小时，500人并发',
                                                '5000小时，500人并发',
                                                '1小时，10人并发',
                                                '3小时，20人并发',
                                            ],
                                            'example' => '0',
                                        ],
                                        'SessionPackageName' => [
                                            'description' => '会话包名称。',
                                            'type' => 'string',
                                            'example' => '测试会话包',
                                        ],
                                        'ChargeType' => [
                                            'description' => '付费方式。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                ' PrePaid' => ' 包年包月',
                                                'PostPaid' => '按量付费',
                                            ],
                                            'example' => 'PostPaid',
                                        ],
                                        'SessionSpec' => [
                                            'description' => '会话包对应的会话规格。',
                                            'type' => 'string',
                                            'example' => 'appstreaming.general.entry',
                                        ],
                                        'MaxHours' => [
                                            'description' => '会话包时长最大值。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1000',
                                        ],
                                        'AvailableHours' => [
                                            'description' => '可用会话时长，剩余可用小时数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '500',
                                        ],
                                        'MaxSessions' => [
                                            'description' => '最大连接数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '100',
                                        ],
                                        'SessionUsageRate' => [
                                            'description' => '使用中的会话数量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '60',
                                        ],
                                        'UserIdentification' => [
                                            'description' => '租户ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '156xxxxxxxxxx',
                                        ],
                                        'Region' => [
                                            'description' => '会话包所属的地域ID。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'cn-shanghai' => '华东2（上海）',
                                                'cn-hangzhou' => '华东1（杭州）',
                                            ],
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'DeleteStatus' => [
                                            'description' => '数据库删除标记。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'enumValueTitles' => [
                                                '未删除',
                                                '已删除',
                                            ],
                                            'example' => '0',
                                        ],
                                        'GmtCreate' => [
                                            'description' => '会话包创建时间。',
                                            'type' => 'string',
                                            'example' => '1701170196000',
                                        ],
                                        'GmtModifiedTime' => [
                                            'description' => '会话包修改时间。',
                                            'type' => 'string',
                                            'example' => '1701170203000',
                                        ],
                                        'InstanceObject' => [
                                            'description' => '实例对象。',
                                            'type' => 'object',
                                            'properties' => [
                                                'ExpiredTime' => [
                                                    'description' => '到期时间。',
                                                    'type' => 'string',
                                                    'example' => '2024-05-28T16:00:00Z',
                                                ],
                                                'InstanceId' => [
                                                    'description' => '会话包ID。',
                                                    'type' => 'string',
                                                    'example' => 'tp-xxxxxxxxxxx',
                                                ],
                                                'InstanceType' => [
                                                    'description' => '会话包类型。',
                                                    'type' => 'string',
                                                    'example' => 'appstreaming.general.entry'."\n",
                                                ],
                                                'ResourceId' => [
                                                    'description' => '会话包项目ID。',
                                                    'type' => 'string',
                                                    'example' => 'p-xxxxxxxxxx',
                                                ],
                                                'ResourceType' => [
                                                    'description' => '会话包付费类型。',
                                                    'type' => 'string',
                                                    'example' => 'AppSessionPackage',
                                                ],
                                                'StartTime' => [
                                                    'description' => '会话包开始时间。',
                                                    'type' => 'string',
                                                    'example' => '2023-11-28T04:14:07Z',
                                                ],
                                                'TotalTime' => [
                                                    'description' => '会话包时长。单位：秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '3600000',
                                                ],
                                                'UsedTime' => [
                                                    'description' => '会话包已使用时间。单位：秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1021',
                                                ],
                                            ],
                                        ],
                                        'State' => [
                                            'description' => '会话包状态。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'enumValueTitles' => [
                                                1 => '预定',
                                                '未支付',
                                                '已支付',
                                                '成功创建',
                                                '创建失败',
                                                '重建',
                                                '取消',
                                                '包年包月资源到期关停',
                                                '包年包月资源超期释放关停',
                                            ],
                                            'example' => '4',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5Fxxxxxxxx\\\\n\\",\\n  \\"PageSize\\": 100,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 1,\\n  \\"Data\\": [\\n    {\\n      \\"ProjectId\\": \\"p-xxxxxxxxxxxx\\",\\n      \\"ProjectName\\": \\"wuying-project-npp-test\\",\\n      \\"SessionPackageId\\": \\"tp-xxxxxxxxx\\",\\n      \\"SessionPackageTypeId\\": \\"0\\",\\n      \\"SessionPackageName\\": \\"测试会话包\\",\\n      \\"ChargeType\\": \\"PostPaid\\",\\n      \\"SessionSpec\\": \\"appstreaming.general.entry\\",\\n      \\"MaxHours\\": 1000,\\n      \\"AvailableHours\\": 500,\\n      \\"MaxSessions\\": 100,\\n      \\"SessionUsageRate\\": 60,\\n      \\"UserIdentification\\": 0,\\n      \\"Region\\": \\"cn-hangzhou\\",\\n      \\"DeleteStatus\\": 0,\\n      \\"GmtCreate\\": \\"1701170196000\\",\\n      \\"GmtModifiedTime\\": \\"1701170203000\\",\\n      \\"InstanceObject\\": {\\n        \\"ExpiredTime\\": \\"2024-05-28T16:00:00Z\\",\\n        \\"InstanceId\\": \\"tp-xxxxxxxxxxx\\",\\n        \\"InstanceType\\": \\"appstreaming.general.entry\\\\n\\",\\n        \\"ResourceId\\": \\"p-xxxxxxxxxx\\",\\n        \\"ResourceType\\": \\"AppSessionPackage\\",\\n        \\"StartTime\\": \\"2023-11-28T04:14:07Z\\",\\n        \\"TotalTime\\": 3600000,\\n        \\"UsedTime\\": 1021\\n      },\\n      \\"State\\": 4\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取项目的会话包列表',
        ],
        'BuySessionPackage' => [
            'summary' => '购买云Flow会话包。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'SessionType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话包对应的会话类型。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'Linux' => 'Linux',
                            'Windows' => 'Windows',
                            'Android' => 'Android',
                        ],
                        'example' => 'Windows',
                    ],
                ],
                [
                    'name' => 'SessionSpec',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话包对应的会话规格。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'appstreaming.vgpu.basic' => '图形型-基础',
                            'appstreaming.vgpu.entry' => '图形型-入门',
                            'appstreaming.vgpu.standard' => '图形型-标准',
                            'appstreaming.general.basic' => '通用型-基础',
                            'appstreaming.general.standard' => '通用型-标准',
                            'appstreaming.vgpu.elementary' => '图形型-初级',
                            'appstreaming.general.entry' => '通用型-入门',
                        ],
                        'example' => 'appstreaming.general.entry',
                    ],
                ],
                [
                    'name' => 'SessionPackageType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '时长包类型。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            '1000小时，100人并发',
                            '5000小时，500人并发',
                            '25000小时，1000人并发',
                            '1小时，10人并发',
                            '3小时，20人并发',
                        ],
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'Region',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话包所属的地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'cn-shanghai' => '华东2（上海）',
                            'cn-hangzhou' => '华东1（杭州）',
                        ],
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'SessionPackageName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话包名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '测试会话包',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云Flow项目ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'p-xxxxxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'ChargeType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '购买会话包付费类型',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'PostPaid' => 'PostPaid',
                            'PrePaid' => 'PrePaid',
                        ],
                        'example' => 'PrePaid',
                    ],
                ],
                [
                    'name' => 'Period',
                    'in' => 'query',
                    'schema' => [
                        'description' => '购买时长',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PeriodUnit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '购买时长单位',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'Month' => 'Month',
                            'Day' => 'Day',
                        ],
                        'example' => 'Month',
                    ],
                ],
                [
                    'name' => 'MaxSessions',
                    'in' => 'query',
                    'schema' => [
                        'description' => '最大并发数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'AutoPay',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否自动支付',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回集合信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5Fxxxxxxxx',
                            ],
                            'Code' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '出错时的错误消息。',
                                'type' => 'string',
                                'example' => 'There is a missing parameter.'."\n",
                            ],
                            'Success' => [
                                'description' => '是否调用成功。true：调用成功。false：调用失败。',
                                'type' => 'string',
                                'example' => 'false',
                            ],
                            'SessionPackageId' => [
                                'description' => '如果创建成功，这个就是会话包的唯一id。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => 'tp-xxxxxxxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5Fxxxxxxxx\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"There is a missing parameter.\\\\n\\",\\n  \\"Success\\": \\"false\\",\\n  \\"SessionPackageId\\": 0\\n}","type":"json"}]',
            'title' => '加购会话包',
            'description' => '请确保在使用该接口前，已充分了解无影云Flow的[计费方式和价格](https://www.aliyun.com/price/product#/ecs/detail)。   '."\n"
                .'对应云Flow控制台加购会话包。',
        ],
        'ModifyProjectPolicy' => [
            'summary' => '修改项目策略。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'FrameRate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '帧率（FPS）。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'TerminalResolutionAdaptation',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启分辨率自适应。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'SessionResolutionWidth',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话分辨率宽度，单位为像素。若TerminalResolutionAdaptation为true，此参数表示最大分辨率高度；若TerminalResolutionAdaptation为false，此参数表示自定义分辨，设置后会话分辨率不跟随终端显示区域变化，始终为此处设置的值。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '4096',
                        'minimum' => '500',
                        'example' => '4096',
                    ],
                ],
                [
                    'name' => 'SessionResolutionHeight',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分辨率的高度，单位为像素。若TerminalResolutionAdaptation为true，此参数表示最大分辨率高度；若TerminalResolutionAdaptation为false，此参数表示自定义分辨，设置后会话分辨率不跟随终端显示区域变化，始终为此处设置的值。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '4096',
                        'minimum' => '500',
                        'example' => '4096',
                    ],
                ],
                [
                    'name' => 'StreamingMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '协议类型。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'webrtc' => 'webrtc流',
                            'video' => '视频流',
                            'mix' => '混合流',
                        ],
                        'example' => 'video',
                        'enum' => [],
                    ],
                ],
                [
                    'name' => 'Clipboard',
                    'in' => 'query',
                    'schema' => [
                        'description' => '剪切板状态。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'enumValueTitles' => [
                            '关闭，默认值',
                            '允许双向粘贴',
                            '允许单向粘贴到云上',
                            '允许单向粘贴到本地',
                        ],
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'FileTransfer',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件操作状态。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'enumValueTitles' => [
                            '不允许传输，【默认值】',
                            '只允许下载',
                            '只允许上传',
                            '允许上传下载',
                        ],
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'KeepAliveDuration',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话断连保留时长，单位为分钟，有效值1-300。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '300',
                        'minimum' => '-1',
                        'example' => '15',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'p-065z4tu9ak07h****'."\n",
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
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                            'Data' => [
                                'description' => '返回none。',
                                'type' => 'string',
                                'example' => 'None',
                            ],
                            'Code' => [
                                'description' => '接口请求返回的状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '出错时的错误消息。',
                                'type' => 'string',
                                'example' => 'There is a missing parameter.',
                            ],
                            'Success' => [
                                'description' => '请求成功与否，成功返回为true，失败为false',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"Data\\": \\"None\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"There is a missing parameter.\\",\\n  \\"Success\\": \\"true\\"\\n}","type":"json"}]',
            'title' => '修改项目策略',
            'description' => '项目相当于云Flow控制台的资源配置模块。',
        ],
        'GetProjectPolicies' => [
            'summary' => '获取项目的策略配置。',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目唯一id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'p-xxxxxxxxxxxxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '项目策略对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '当次请求的Request ID。',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                            'Data' => [
                                'description' => '调用成功时，返回项目信息列表。',
                                'type' => 'object',
                                'properties' => [
                                    'FrameRate' => [
                                        'description' => '帧率（FPS）。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            30 => '30',
                                            60 => '60',
                                        ],
                                        'example' => '30',
                                    ],
                                    'TerminalResolutionAdaptation' => [
                                        'description' => '是否开启分辨率自适应。',
                                        'type' => 'boolean',
                                        'enumValueTitles' => [
                                            'true' => '默认值',
                                            'false' => 'false',
                                        ],
                                        'example' => 'true',
                                    ],
                                    'SessionResolutionWidth' => [
                                        'description' => '会话分辨率宽度。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1920',
                                    ],
                                    'SessionResolutionHeight' => [
                                        'description' => '会话分辨率高度。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1080',
                                    ],
                                    'StreamingMode' => [
                                        'description' => '协议类型。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'webrtc' => 'webrtc流',
                                            'video' => '视频流',
                                            'mix' => '混合流，默认值',
                                        ],
                                        'example' => 'mix',
                                    ],
                                    'SessionSpec' => [
                                        'description' => '会话包对应的会话规格。',
                                        'type' => 'string',
                                        'example' => '暂不支持，没有返回值',
                                    ],
                                    'Clipboard' => [
                                        'description' => '剪切板状态。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'enumValueTitles' => [
                                            '关闭，默认值',
                                            '双向允许',
                                            '允许粘贴到云上',
                                            '允许粘贴到本地',
                                        ],
                                        'example' => '0',
                                    ],
                                    'FileTransfer' => [
                                        'description' => '文件操作状态。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'enumValueTitles' => [
                                            '不允许传输，默认值',
                                            '只允许下载',
                                            '只允许上传',
                                            '允许上传下载',
                                        ],
                                        'example' => '0',
                                    ],
                                    'MaxHours' => [
                                        'description' => '最大小时数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1000',
                                    ],
                                    'MaxSessions' => [
                                        'description' => '最大会话并发数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '60',
                                    ],
                                    'KeepAliveDuration' => [
                                        'description' => '会话断连保留时长，单位为分钟，有效值1-300。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '15',
                                    ],
                                    'ProjectId' => [
                                        'description' => '项目唯一id。',
                                        'type' => 'string',
                                        'example' => 'p-xxxxxxxxxxx',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '接口请求返回的状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '出错时的错误消息。',
                                'type' => 'string',
                                'example' => 'The parameter ProductType is invalid.',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"Data\\": {\\n    \\"FrameRate\\": \\"30\\",\\n    \\"TerminalResolutionAdaptation\\": true,\\n    \\"SessionResolutionWidth\\": 1920,\\n    \\"SessionResolutionHeight\\": 1080,\\n    \\"StreamingMode\\": \\"mix\\",\\n    \\"SessionSpec\\": \\"暂不支持，没有返回值\\",\\n    \\"Clipboard\\": 0,\\n    \\"FileTransfer\\": 0,\\n    \\"MaxHours\\": 1000,\\n    \\"MaxSessions\\": 60,\\n    \\"KeepAliveDuration\\": 15,\\n    \\"ProjectId\\": \\"p-xxxxxxxxxxx\\"\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"The parameter ProductType is invalid.\\",\\n  \\"Success\\": \\"true\\"\\n}","type":"json"}]',
            'title' => '获取项目策略配置',
            'description' => '项目对应云flow控制台的资源配置。',
        ],
        'DeleteProject' => [
            'summary' => '删除项目。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'p-065z4tu9ak07h****'."\n",
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回对象。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                            'Data' => [
                                'description' => '返回None。',
                                'type' => 'boolean',
                                'example' => 'None',
                            ],
                            'Code' => [
                                'description' => '状态码：'."\n"
                                    ."\n"
                                    .'- `200`：成功。'."\n"
                                    .'- `400`：出错。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '接口请求返回的信息。',
                                'type' => 'string',
                                'example' => 'The parameter PoolId is invalid.',
                            ],
                            'Success' => [
                                'description' => '请求成功与否，成功返回为true，失败为false',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"Data\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"The parameter PoolId is invalid.\\",\\n  \\"Success\\": \\"true\\"\\n}","type":"json"}]',
            'title' => '删除项目',
            'description' => '项目相当于云Flow控制台的资源配置模块。',
        ],
        'CreateProject' => [
            'summary' => '创建一个项目实例，项目实例作用如下'."\n"
                .'1. 云上环境、会话包和交付组配置的组合体，用户关联这几个实例'."\n"
                .'2. 作为访问页面的主要输入。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'ContentId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '内容唯一id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'c-06vcpamarryyq****',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'xxx',
                    ],
                ],
                [
                    'name' => 'FrameRate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '帧率（FPS）。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'enumValueTitles' => [
                            30 => '30',
                            60 => '60',
                        ],
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'TerminalResolutionAdaptation',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启分辨率自适应。',
                        'type' => 'boolean',
                        'required' => false,
                        'enumValueTitles' => [
                            'true' => '默认值',
                            'false' => 'false',
                        ],
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'SessionResolutionWidth',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话分辨率宽度，单位为像素。若TerminalResolutionAdaptation为true，此参数表示最大分辨率高度；若TerminalResolutionAdaptation为false，此参数表示自定义分辨，设置后会话分辨率不跟随终端显示区域变化，始终为此处设置的值。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '4096',
                    ],
                ],
                [
                    'name' => 'SessionResolutionHeight',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分辨率的高度，单位为像素。若TerminalResolutionAdaptation为true，此参数表示最大分辨率高度；若TerminalResolutionAdaptation为false，此参数表示自定义分辨，设置后会话分辨率不跟随终端显示区域变化，始终为此处设置的值。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '4096',
                    ],
                ],
                [
                    'name' => 'StreamingMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '协议类型。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'webrtc' => 'webrtc流',
                            'video' => '视频流',
                            'mix' => '混合流，默认值',
                        ],
                        'example' => 'mix',
                    ],
                ],
                [
                    'name' => 'Clipboard',
                    'in' => 'query',
                    'schema' => [
                        'description' => '剪切板状态。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'enumValueTitles' => [
                            '关闭，默认值',
                            '双向允许',
                            '允许粘贴到云上',
                            '允许粘贴到本地',
                        ],
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'FileTransfer',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件操作状态。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'enumValueTitles' => [
                            '不允许传输，默认值',
                            '只允许下载',
                            '只允许上传',
                            '允许上传下载',
                        ],
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'KeepAliveDuration',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话断连保留时长，单位为分钟，有效值1-300。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '15',
                    ],
                ],
                [
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'notepad++xxxxx',
                    ],
                ],
                [
                    'name' => 'CloudEnvId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云环境的唯一id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'c-xxxxxxx',
                    ],
                ],
                [
                    'name' => 'SessionSpec',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目关联的会话规格',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'appstreaming.vgpu.standard(图形型-标准)' => 'appstreaming.vgpu.standard(图形型-标准)',
                            'appstreaming.general.entry(通用型-入门)' => 'appstreaming.general.entry(通用型-入门)',
                            'appstreaming.general.standard(通用型-标准)' => 'appstreaming.general.standard(通用型-标准)',
                            'appstreaming.vgpu.entry(图形型-入门)' => 'appstreaming.vgpu.entry(图形型-入门)',
                            'appstreaming.general.basic(通用型-基础)' => 'appstreaming.general.basic(通用型-基础)',
                            'appstreaming.vgpu.basic(图形型-基础)' => 'appstreaming.vgpu.basic(图形型-基础)',
                            'appstreaming.vgpu.elementary(图形型-初级)' => 'appstreaming.vgpu.elementary(图形型-初级)',
                        ],
                        'example' => 'appstreaming.general.entry',
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
                                'example' => '50158E8B-992E-1286-B174-XXXXXXXXXXXX',
                            ],
                            'Data' => [
                                'description' => '项目id。',
                                'type' => 'string',
                                'example' => 'p-xxxxxxxxxxx',
                            ],
                            'Code' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '出错时的错误消息。',
                                'type' => 'string',
                                'example' => 'There is a missing parameter.',
                            ],
                            'PageNumber' => [
                                'description' => '页码（首页传1）。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '每页展示数据条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。true：调用成功。false：调用失败。',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"50158E8B-992E-1286-B174-XXXXXXXXXXXX\\",\\n  \\"Data\\": \\"p-xxxxxxxxxxx\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"There is a missing parameter.\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"Success\\": \\"true\\"\\n}","type":"json"}]',
            'title' => '创建项目',
            'description' => '1. 项目相当于云Flow控制台的资源配置模块'."\n"
                .'2. 当入参ContentId背后有多个版本的时候，当前api会<notice>使用默认的那个版本</notice> 同时进行绑定'."\n"
                .'3. 只有Content的默认版本是可用状态，调用当前接口才可以成功',
        ],
        'ListProjects' => [
            'summary' => '获取项目列表',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页展示数据条数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'enumValueTitles' => [
                            20 => '默认值',
                        ],
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码（首页传1）。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'p-065z4tu9ak07h****',
                    ],
                ],
                [
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'notepad++***',
                    ],
                ],
                [
                    'name' => 'SortType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序类型。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'ASC' => '升序',
                            'DESC' => '降序',
                        ],
                        'example' => 'ASC',
                    ],
                ],
                [
                    'name' => 'StateList',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '项目状态列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '项目状态。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => false,
                            'enumValueTitles' => [
                                '未配置',
                                '可用',
                                '超期/时间用完',
                            ],
                            'example' => '1',
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
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                            'PageSize' => [
                                'description' => '每页的查询结果数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'PageNumber' => [
                                'description' => '当前展示的查询结果页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Code' => [
                                'description' => '状态码：'."\n"
                                    ."\n"
                                    .'- `200`：成功。'."\n"
                                    .'- `400`：出错。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '出错时的错误消息。',
                                'type' => 'string',
                                'example' => 'There is a missing parameter.',
                            ],
                            'Success' => [
                                'description' => '请求成功与否，成功返回为true，失败为false。',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '调用成功时，返回项目信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '项目信息对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ProjectName' => [
                                            'description' => '项目名称。',
                                            'type' => 'string',
                                            'example' => 'notepad++***'."\n",
                                        ],
                                        'ProjectId' => [
                                            'description' => '项目ID。',
                                            'type' => 'string',
                                            'example' => 'p-065z4tu9ak07h****'."\n",
                                        ],
                                        'ContentId' => [
                                            'description' => '项目关联的内容ID。',
                                            'type' => 'string',
                                            'example' => 'c-06vcpamarryyq****'."\n",
                                        ],
                                        'ContentName' => [
                                            'description' => '项目关联的内容名称。',
                                            'type' => 'string',
                                            'example' => 'notepad++***',
                                        ],
                                        'ProjectState' => [
                                            'description' => '项目对象状态。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                '未配置',
                                                '可用',
                                                '超期/时间用完',
                                            ],
                                            'example' => '0',
                                        ],
                                        'SessionSpec' => [
                                            'description' => '项目的统一会话规格。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'appstreaming.vgpu.basic' => '图形型-基础',
                                                'appstreaming.vgpu.entry' => '图形型-入门',
                                                'appstreaming.vgpu.standard' => '图形型-标准',
                                                'appstreaming.general.basic' => '通用型-基础',
                                                'appstreaming.general.standard' => '通用型-标准',
                                                'appstreaming.vgpu.elementary' => '图形型-初级',
                                                'appstreaming.general.entry' => '通用型-入门',
                                            ],
                                            'example' => 'appstreaming.general.basic',
                                        ],
                                        'AvailableHours' => [
                                            'description' => '可用会话时长，剩余可用小时数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '3174301',
                                        ],
                                        'AccessPageId' => [
                                            'description' => '访问页面Id列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '访问页面Id。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '******',
                                            ],
                                        ],
                                        'MaxHours' => [
                                            'description' => '会话包时长最大值。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1000',
                                        ],
                                        'MaxSessions' => [
                                            'description' => '最大会话数量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '100',
                                        ],
                                        'Description' => [
                                            'description' => '项目描述信息。',
                                            'type' => 'string',
                                            'example' => 'xxx',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '1701141509000',
                                        ],
                                        'InUseSessions' => [
                                            'description' => '使用中的会话数量',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '90',
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'description' => '查询结果的总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '6',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"There is a missing parameter.\\",\\n  \\"Success\\": \\"true\\",\\n  \\"Data\\": [\\n    {\\n      \\"ProjectName\\": \\"notepad++***\\\\n\\",\\n      \\"ProjectId\\": \\"p-065z4tu9ak07h****\\\\n\\",\\n      \\"ContentId\\": \\"c-06vcpamarryyq****\\\\n\\",\\n      \\"ContentName\\": \\"notepad++***\\",\\n      \\"ProjectState\\": \\"0\\",\\n      \\"SessionSpec\\": \\"appstreaming.general.basic\\",\\n      \\"AvailableHours\\": 3174301,\\n      \\"AccessPageId\\": [\\n        0\\n      ],\\n      \\"MaxHours\\": 1000,\\n      \\"MaxSessions\\": 100,\\n      \\"Description\\": \\"xxx\\",\\n      \\"CreateTime\\": \\"1701141509000\\",\\n      \\"InUseSessions\\": 90\\n    }\\n  ],\\n  \\"TotalCount\\": 6\\n}","type":"json"}]',
            'title' => '获取项目列表',
            'description' => '项目相当于云Flow控制台的资源配置模块',
        ],
        'ListRegions' => [
            'summary' => '查询无影云应用支持的地域。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ProductType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定产品类型。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'CloudApp' => '无影云应用',
                        ],
                        'example' => 'CloudApp',
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
                            'RegionModels' => [
                                'description' => '地域ID列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '地域ID。',
                                    'type' => 'object',
                                    'properties' => [
                                        'regionId' => [
                                            'description' => '地域ID。',
                                            'type' => 'string',
                                            'enumValueTitles' => [],
                                            'example' => 'cn-hangzhou',
                                        ],
                                    ],
                                    'example' => 'cn-hangzhou',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"RegionModels\\": [\\n    {\\n      \\"regionId\\": \\"cn-hangzhou\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询支持的地域',
            'description' => '> 通过该接口查询到的地域，并非全部是可用地域。关于可用地域的信息，参见[支持的地域](~~426036~~)。',
        ],
        'ListNodeInstanceType' => [
            'summary' => '查询创建交付组时可选购的资源规格。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ProductType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '产品类型。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'CloudApp' => '无影云应用',
                        ],
                        'example' => 'CloudApp',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需展示的查询结果页码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的查询结果数量。取值范围：1~100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'OsType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '支持的操作系统类型。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'Windows' => 'Windows操作系统',
                        ],
                        'example' => 'Windows',
                    ],
                ],
                [
                    'name' => 'BizRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源所属的地域ID。关于支持的地域详情，请参见[使用限制](~~426036~~)。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'cn-shanghai' => '华东2（上海）',
                            'cn-hangzhou' => '华东1（杭州）',
                        ],
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Language',
                    'in' => 'query',
                    'schema' => [
                        'description' => '语言类型。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'en-US' => '英语（美国）',
                            'zh-CN' => '简体中文',
                        ],
                        'example' => 'zh-CN',
                    ],
                ],
                [
                    'name' => 'NodeInstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定要查询的资源规格类型。如果不填写，则返回所有规格类型。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'appstreaming.vgpu.4c8g.2g',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
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
                            'TotalCount' => [
                                'description' => '查询结果的总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '6',
                            ],
                            'PageSize' => [
                                'description' => '每页的查询结果数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'PageNumber' => [
                                'description' => '当前展示的查询结果页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'NodeInstanceTypeModels' => [
                                'description' => '资源规格列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '资源规格。',
                                    'type' => 'object',
                                    'properties' => [
                                        'NodeInstanceType' => [
                                            'description' => '资源规格类型ID。',
                                            'type' => 'string',
                                            'enumValueTitles' => [],
                                            'example' => 'appstreaming.vgpu.4c8g.2g',
                                        ],
                                        'NodeInstanceTypeFamily' => [
                                            'description' => '资源规格族。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'appstreaming.general' => '无影-通用型',
                                                'appstreaming.vgpu' => '无影-图形型',
                                            ],
                                            'example' => 'appstreaming.vgpu',
                                        ],
                                        'Cpu' => [
                                            'description' => 'vCPU数量。',
                                            'type' => 'string',
                                            'example' => '4',
                                        ],
                                        'Gpu' => [
                                            'description' => 'GPU数量。',
                                            'type' => 'string',
                                            'example' => '2',
                                        ],
                                        'Memory' => [
                                            'description' => '内存大小，单位为MB。'."\n"
                                                ."\n",
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '8192',
                                        ],
                                        'GpuMemory' => [
                                            'description' => '显卡内存大小，单位为MB。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '8192',
                                        ],
                                        'MaxCapacity' => [
                                            'description' => '最大并发会话数，即单个资源可同时连接的会话数。如果同时连接的会话数过多，可能导致应用的使用体验下降。取值范围因资源规格不同而不同。各资源规格对应的取值范围分别是：'."\n"
                                                ."\n"
                                                .'- appstreaming.general.4c8g：1\\~2；'."\n"
                                                .'- appstreaming.general.8c16g：1\\~4；'."\n"
                                                .'- appstreaming.vgpu.8c16g.4g：1\\~4；'."\n"
                                                .'- appstreaming.vgpu.8c31g.16g：1\\~4；'."\n"
                                                .'- appstreaming.vgpu.14c93g.12g：1\\~6；',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '4',
                                        ],
                                        'NodeTypeName' => [
                                            'description' => '资源规格名称。',
                                            'type' => 'string',
                                            'example' => '无影-通用型_4核8G',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"TotalCount\\": 6,\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"NodeInstanceTypeModels\\": [\\n    {\\n      \\"NodeInstanceType\\": \\"appstreaming.vgpu.4c8g.2g\\",\\n      \\"NodeInstanceTypeFamily\\": \\"appstreaming.vgpu\\",\\n      \\"Cpu\\": \\"4\\",\\n      \\"Gpu\\": \\"2\\",\\n      \\"Memory\\": 8192,\\n      \\"GpuMemory\\": 8192,\\n      \\"MaxCapacity\\": 4,\\n      \\"NodeTypeName\\": \\"无影-通用型_4核8G\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询资源规格',
        ],
        'GetResourcePrice' => [
            'summary' => '查询资源的价格信息。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'NodeInstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '购买资源的规格类型ID，可通过[ListNodeInstanceType](~~428502~~)接口获取。'."\n"
                            ."\n"
                            .'AppInstanceType与NodeInstanceType其中一个必须有值。若两个都有值则使用NodeInstanceType。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'appstreaming.vgpu.8c16g.4g' => '无影-图形型_8核16G 4G显存',
                            'appstreaming.general.8c16g' => '无影-通用型_8核16G',
                            'appstreaming.general.4c8g' => '无影-通用型_4核8G',
                            'appstreaming.vgpu.14c93g.12g' => '无影-图形型_14核93G 12G显存',
                            'appstreaming.vgpu.8c31g.16g' => '无影-图形型_8核31G 16G显存',
                        ],
                        'example' => 'appstreaming.vgpu.4c8g.2g',
                    ],
                ],
                [
                    'name' => 'ProductType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '产品类型。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'CloudApp' => '无影云应用',
                        ],
                        'example' => 'CloudApp',
                    ],
                ],
                [
                    'name' => 'ChargeType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '付费方式。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'PostPaid' => '按量付费',
                            'PrePaid' => '包年包月',
                        ],
                        'example' => 'PrePaid',
                    ],
                ],
                [
                    'name' => 'Period',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源购买时长的数量部分，与`PeriodUnit`一起表示完整的购买时长。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PeriodUnit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源购买时长的单位部分，与`Period`一起表示完整的购买时长。可使用的`Period`与`PeriodUnit`的搭配如下：'."\n"
                            ."\n"
                            .'- 1 Week（1周）'."\n"
                            .'- 1 Month（1个月）'."\n"
                            .'- 2 Month（2个月）'."\n"
                            .'- 3 Month（3个月）'."\n"
                            .'- 6 Month（6个月）'."\n"
                            .'- 1 Year（1年）'."\n"
                            .'- 2 Year（2年）'."\n"
                            .'- 3 Year（3年）'."\n"
                            ."\n"
                            .'> 该参数区分大小写。例如，`Week`是有效的，`week`是无效的。另外，如果请求参数不符合上述搭配，例如`2 Week`，虽然调用本接口会成功，但最终在下单阶段会出错。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'Month' => '月',
                            'Year' => '年',
                            'Week' => '周',
                        ],
                        'example' => 'Week',
                    ],
                ],
                [
                    'name' => 'Amount',
                    'in' => 'query',
                    'schema' => [
                        'description' => '购买资源的数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'BizRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '交付组所属的地域ID。关于支持的地域详情，请参见[使用限制](~~426036~~)。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'cn-shanghai' => '华东2（上海）',
                            'cn-hangzhou' => '华东1（杭州）',
                        ],
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'AppInstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '购买会话的规格类型ID，可通过`ListAppInstanceType`接口获取。'."\n"
                            ."\n"
                            .'AppInstanceType与NodeInstanceType其中一个必须有值。若两个都有值则使用NodeInstanceType。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'appstreaming.general',
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
                            'Code' => [
                                'description' => '出错时的错误码。',
                                'type' => 'string',
                                'example' => 'InvalidParameter.ProductType',
                            ],
                            'Message' => [
                                'description' => '出错时的错误消息。',
                                'type' => 'string',
                                'example' => 'The parameter ProductType is invalid.',
                            ],
                            'PriceModel' => [
                                'description' => '价格对象。'."\n"
                                    ."\n"
                                    .'请求参数NodeInstanceType有值时返回此参数。',
                                'type' => 'object',
                                'properties' => [
                                    'Price' => [
                                        'description' => '价格详情。',
                                        'type' => 'object',
                                        'properties' => [
                                            'OriginalPrice' => [
                                                'description' => '原价。',
                                                'type' => 'string',
                                                'example' => '11.00',
                                            ],
                                            'DiscountPrice' => [
                                                'description' => '折减的价格，原价减去折减的价格即为实际价格。',
                                                'type' => 'string',
                                                'example' => '1.00',
                                            ],
                                            'TradePrice' => [
                                                'description' => '实际价格，原价减去折减的价格即为实际价格。',
                                                'type' => 'string',
                                                'example' => '10.00',
                                            ],
                                            'Currency' => [
                                                'description' => '币种。',
                                                'type' => 'string',
                                                'example' => 'CNY',
                                            ],
                                            'Promotions' => [
                                                'description' => '优惠券元数据。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '优惠券元数据。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'OptionCode' => [
                                                            'description' => '优惠券代号。',
                                                            'type' => 'string',
                                                            'example' => 'coupon****',
                                                        ],
                                                        'PromotionId' => [
                                                            'description' => '优惠券ID。',
                                                            'type' => 'string',
                                                            'example' => '17440009****',
                                                        ],
                                                        'PromotionName' => [
                                                            'description' => '优惠券名称。',
                                                            'type' => 'string',
                                                            'example' => '**优惠',
                                                        ],
                                                        'PromotionDesc' => [
                                                            'description' => '优惠券描述。',
                                                            'type' => 'string',
                                                            'example' => '**活动期间的优惠',
                                                        ],
                                                        'Selected' => [
                                                            'description' => '是否选用优惠券。',
                                                            'type' => 'boolean',
                                                            'enumValueTitles' => [
                                                                'true' => '选用',
                                                                'false' => '不选用',
                                                            ],
                                                            'example' => 'true',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Rules' => [
                                        'description' => '价格计算规则。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '价格计算规则。',
                                            'type' => 'object',
                                            'properties' => [
                                                'RuleId' => [
                                                    'description' => '价格计算规则ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '102002100393****',
                                                ],
                                                'Description' => [
                                                    'description' => '价格计算规则描述。',
                                                    'type' => 'string',
                                                    'example' => '用户优惠',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'PriceList' => [
                                'description' => '价格对象列表。'."\n"
                                    ."\n"
                                    .'请求参数AppInstanceType有值时返回此参数。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '价格对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'PriceType' => [
                                            'description' => '价格类型。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Connected' => '使用阶段',
                                                'Standby' => '预开阶段',
                                            ],
                                            'example' => 'Standby',
                                        ],
                                        'Price' => [
                                            'description' => '价格详情。',
                                            'type' => 'object',
                                            'properties' => [
                                                'OriginalPrice' => [
                                                    'description' => '原价。',
                                                    'type' => 'string',
                                                    'example' => '6700',
                                                ],
                                                'DiscountPrice' => [
                                                    'description' => '折减的价格，原价减去折减的价格即为实际价格。',
                                                    'type' => 'string',
                                                    'example' => '999.0',
                                                ],
                                                'TradePrice' => [
                                                    'description' => '实际价格，原价减去折减的价格即为实际价格。',
                                                    'type' => 'string',
                                                    'example' => '5278.0',
                                                ],
                                                'Currency' => [
                                                    'description' => '币种。',
                                                    'type' => 'string',
                                                    'example' => 'CNY',
                                                ],
                                                'Promotions' => [
                                                    'description' => '优惠券元数据。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '优惠券元数据。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'OptionCode' => [
                                                                'description' => '优惠券代号。',
                                                                'type' => 'string',
                                                                'example' => 'coupon****',
                                                            ],
                                                            'PromotionId' => [
                                                                'description' => '优惠券ID。',
                                                                'type' => 'string',
                                                                'example' => '1847709****',
                                                            ],
                                                            'PromotionName' => [
                                                                'description' => '优惠券名称。',
                                                                'type' => 'string',
                                                                'example' => '**优惠',
                                                            ],
                                                            'PromotionDesc' => [
                                                                'description' => '优惠券描述。',
                                                                'type' => 'string',
                                                                'example' => '**活动期间的优惠',
                                                            ],
                                                            'Selected' => [
                                                                'description' => '是否选用优惠券。',
                                                                'type' => 'boolean',
                                                                'enumValueTitles' => [
                                                                    'true' => '选用',
                                                                    'false' => '不选用',
                                                                ],
                                                                'example' => 'true',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Rules' => [
                                            'description' => '价格计算规则。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '价格计算规则。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'RuleId' => [
                                                        'description' => '价格计算规则ID。',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '260904273633****',
                                                    ],
                                                    'Description' => [
                                                        'description' => '价格计算规则描述。',
                                                        'type' => 'string',
                                                        'example' => '用户优惠。',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"Code\\": \\"InvalidParameter.ProductType\\",\\n  \\"Message\\": \\"The parameter ProductType is invalid.\\",\\n  \\"PriceModel\\": {\\n    \\"Price\\": {\\n      \\"OriginalPrice\\": \\"11.00\\",\\n      \\"DiscountPrice\\": \\"1.00\\",\\n      \\"TradePrice\\": \\"10.00\\",\\n      \\"Currency\\": \\"CNY\\",\\n      \\"Promotions\\": [\\n        {\\n          \\"OptionCode\\": \\"coupon****\\",\\n          \\"PromotionId\\": \\"17440009****\\",\\n          \\"PromotionName\\": \\"**优惠\\",\\n          \\"PromotionDesc\\": \\"**活动期间的优惠\\",\\n          \\"Selected\\": true\\n        }\\n      ]\\n    },\\n    \\"Rules\\": [\\n      {\\n        \\"RuleId\\": 0,\\n        \\"Description\\": \\"用户优惠\\"\\n      }\\n    ]\\n  },\\n  \\"PriceList\\": [\\n    {\\n      \\"PriceType\\": \\"Standby\\",\\n      \\"Price\\": {\\n        \\"OriginalPrice\\": \\"6700\\",\\n        \\"DiscountPrice\\": \\"999.0\\",\\n        \\"TradePrice\\": \\"5278.0\\",\\n        \\"Currency\\": \\"CNY\\",\\n        \\"Promotions\\": [\\n          {\\n            \\"OptionCode\\": \\"coupon****\\",\\n            \\"PromotionId\\": \\"1847709****\\",\\n            \\"PromotionName\\": \\"**优惠\\",\\n            \\"PromotionDesc\\": \\"**活动期间的优惠\\",\\n            \\"Selected\\": true\\n          }\\n        ]\\n      },\\n      \\"Rules\\": [\\n        {\\n          \\"RuleId\\": 0,\\n          \\"Description\\": \\"用户优惠。\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询资源价格',
        ],
        'GetResourceRenewPrice' => [
            'summary' => '查询无影云应用资源的续费价格。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ProductType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '产品类型。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'CloudApp' => '无影云应用',
                        ],
                        'example' => 'CloudApp',
                    ],
                ],
                [
                    'name' => 'Period',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源购买时长的数量部分，与`PeriodUnit`一起表示完整的购买时长。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PeriodUnit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源购买时长的单位部分，与`Period`一起表示完整的购买时长。可使用的`Period`与`PeriodUnit`的搭配如下：'."\n"
                            ."\n"
                            .'- 1 Week（1周）'."\n"
                            .'- 1 Month（1个月）'."\n"
                            .'- 2 Month（2个月）'."\n"
                            .'- 3 Month（3个月）'."\n"
                            .'- 6 Month（6个月）'."\n"
                            .'- 1 Year（1年）'."\n"
                            .'- 2 Year（2年）'."\n"
                            .'- 3 Year（3年）'."\n"
                            ."\n"
                            .'> 该参数区分大小写。例如，`Week`是有效的，`week`是无效的。另外，如果请求参数不符合上述搭配，例如`2 Week`，虽然调用本接口会成功，但最终在下单阶段会出错。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'Month' => '月',
                            'Year' => '年',
                            'Week' => '周',
                        ],
                        'example' => 'Week',
                    ],
                ],
                [
                    'name' => 'AppInstanceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '交付组ID。可通过接口[ListAppInstanceGroup](~~428506~~)获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'aig-9ciijz60n4xsv****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
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
                            'Data' => [
                                'description' => '价格对象。',
                                'type' => 'object',
                                'properties' => [
                                    'Price' => [
                                        'description' => '价格详情。',
                                        'type' => 'object',
                                        'properties' => [
                                            'OriginalPrice' => [
                                                'description' => '原价。',
                                                'type' => 'string',
                                                'example' => '11'."\n",
                                            ],
                                            'DiscountPrice' => [
                                                'description' => '折减的价格，原价减去折减的价格即为实际价格。',
                                                'type' => 'string',
                                                'example' => '1',
                                            ],
                                            'TradePrice' => [
                                                'description' => '实际价格，原价减去折减的价格即为实际价格。',
                                                'type' => 'string',
                                                'example' => '10',
                                            ],
                                            'Currency' => [
                                                'description' => '币种。',
                                                'type' => 'string',
                                                'example' => 'CNY',
                                            ],
                                            'Promotions' => [
                                                'description' => '优惠券描述。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '优惠券元数据。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'OptionCode' => [
                                                            'description' => '优惠券代号。',
                                                            'type' => 'string',
                                                            'example' => 'coupon****',
                                                        ],
                                                        'PromotionId' => [
                                                            'description' => '优惠券ID。',
                                                            'type' => 'string',
                                                            'example' => '139965*****',
                                                        ],
                                                        'PromotionName' => [
                                                            'description' => '优惠券名称。',
                                                            'type' => 'string',
                                                            'example' => '**活动',
                                                        ],
                                                        'PromotionDesc' => [
                                                            'description' => '优惠券描述。',
                                                            'type' => 'string',
                                                            'example' => '**活动',
                                                        ],
                                                        'Selected' => [
                                                            'description' => '是否选用优惠券。',
                                                            'type' => 'boolean',
                                                            'enumValueTitles' => [
                                                                'true' => '选用',
                                                                'false' => '不选用',
                                                            ],
                                                            'example' => 'true',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Rules' => [
                                        'description' => '价格计算规则。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '价格计算规则。',
                                            'type' => 'object',
                                            'properties' => [
                                                'RuleId' => [
                                                    'description' => '价格计算规则ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '20002****',
                                                ],
                                                'Description' => [
                                                    'description' => '价格计算规则描述。',
                                                    'type' => 'string',
                                                    'example' => '**活动',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"Data\\": {\\n    \\"Price\\": {\\n      \\"OriginalPrice\\": \\"11\\\\n\\",\\n      \\"DiscountPrice\\": \\"1\\",\\n      \\"TradePrice\\": \\"10\\",\\n      \\"Currency\\": \\"CNY\\",\\n      \\"Promotions\\": [\\n        {\\n          \\"OptionCode\\": \\"coupon****\\",\\n          \\"PromotionId\\": \\"139965*****\\",\\n          \\"PromotionName\\": \\"**活动\\",\\n          \\"PromotionDesc\\": \\"**活动\\",\\n          \\"Selected\\": true\\n        }\\n      ]\\n    },\\n    \\"Rules\\": [\\n      {\\n        \\"RuleId\\": 0,\\n        \\"Description\\": \\"**活动\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询资源续费价格',
        ],
        'CreateAppInstanceGroup' => [
            'summary' => '创建交付组。',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'AppCenterImageId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '应用镜像ID。可从[无影云应用控制台](https://appstreaming.console.aliyun.com/)的**运维**>**自定义镜像**或**系统镜像**页面获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'img-8z4nztpaqvay4****',
                    ],
                ],
                [
                    'name' => 'ProductType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '产品类型。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'CloudApp' => '无影云应用',
                        ],
                        'example' => 'CloudApp',
                    ],
                ],
                [
                    'name' => 'AppInstanceGroupName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '交付组名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '办公应用',
                    ],
                ],
                [
                    'name' => 'Users',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '需添加到交付组分配用户的用户名称列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '需添加到交付组分配用户的用户名称。格式为Users.N=`<用户名>`，其中N取值为大于0的整数。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'Users.1=username1'."\n"
                                .'Users.2=username2',
                        ],
                        'required' => false,
                        'maxItems' => 200,
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '需添加到交付组分配用户的用户信息。如果填写了`Users`参数，则该字段为必需。',
                        'type' => 'object',
                        'properties' => [
                            'Type' => [
                                'description' => '用户账号类型。',
                                'type' => 'string',
                                'required' => false,
                                'enumValueTitles' => [
                                    'Simple' => '便捷账号',
                                ],
                                'example' => 'Simple',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ChargeType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '付费方式。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'PostPaid' => '按量付费',
                            'PrePaid' => '包年包月',
                        ],
                        'example' => 'PrePaid',
                    ],
                ],
                [
                    'name' => 'PromotionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '优惠ID。可通过[GetResourcePrice](~~428503~~)接口获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '17440009****',
                    ],
                ],
                [
                    'name' => 'AutoPay',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否自动付费。',
                        'type' => 'boolean',
                        'required' => false,
                        'enumValueTitles' => [
                            'true' => '自动付费',
                            'false' => '手动付费 [默认值]',
                        ],
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'AutoRenew',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否自动续费。',
                        'type' => 'boolean',
                        'required' => false,
                        'enumValueTitles' => [
                            'true' => '自动续费',
                            'false' => '手动续费 [默认值]',
                        ],
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'Period',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '当参数`ChargeType`取值为`PrePaid`时，该参数表示购买资源的时长，且为必填值。单位由`PeriodUnit`指定。'."\n"
                            ."\n"
                            .'- 如果`PeriodUnit`为`Week`，该参数的取值范围为：'."\n"
                            ."\n"
                            .'   - 1'."\n"
                            ."\n"
                            .'- 如果`PeriodUnit`为`Month`，该参数的取值范围为：'."\n"
                            ."\n"
                            .'   - 1'."\n"
                            .'   - 2'."\n"
                            .'   - 3'."\n"
                            .'   - 6'."\n"
                            ."\n"
                            .'- 如果`PeriodUnit`为`Year`，该参数的取值范围为：'."\n"
                            ."\n"
                            .'   - 1'."\n"
                            .'   - 2'."\n"
                            .'   - 3'."\n"
                            ."\n"
                            .'> 当参数`ChargeType`取值为`PostPaid`时，该参数请填写固定值1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PeriodUnit',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '当参数`ChargeType`取值为`PrePaid`时，该参数表示购买资源的时长单位。'."\n"
                            ."\n"
                            .'> 该参数区分大小写。例如，`Week`是有效的，`week`是无效的。'."\n"
                            .'另外，如果请求参数不符合上述搭配，例如`2 Week`，虽然调用本接口会成功，但最终在下单阶段会出错。'."\n"
                            ."\n"
                            .'> 当参数`ChargeType`取值为`PostPaid`时，该参数请填写固定值`Month`。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'Month' => '月',
                            'Year' => '年',
                            'Week' => '周',
                        ],
                        'example' => 'Week',
                    ],
                ],
                [
                    'name' => 'SessionTimeout',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '应用回收时间，单位为分钟。终端用户将云应用断开连接一段时间后，云上应用进程即退出，这段时间就是应用回收时间。如果永不回收，则填写`-1`。取值范围：-1和3~300，且值为整数。默认值为`15`。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '300',
                        'example' => '15',
                    ],
                ],
                [
                    'name' => 'BizRegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '交付组所属的地域ID。关于支持的地域详情，请参见[使用限制](~~426036~~)。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'cn-shanghai' => '华东2（上海）',
                            'cn-hangzhou' => '华东1（杭州）',
                        ],
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ChargeResourceMode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '售卖模式。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'Node' => '按资源售卖',
                        ],
                        'example' => 'Node',
                    ],
                ],
                [
                    'name' => 'NodePool',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '节点池对象。',
                        'type' => 'object',
                        'properties' => [
                            'NodeInstanceType' => [
                                'description' => '购买资源的规格类型ID，可通过[ListNodeInstanceType](~~428502~~)接口获取。',
                                'type' => 'string',
                                'required' => false,
                                'enumValueTitles' => [
                                    'appstreaming.vgpu.8c16g.4g' => '无影-图形型_8核16G 4G显存',
                                    'appstreaming.general.8c16g' => '无影-通用型_8核16G',
                                    'appstreaming.general.4c8g' => '无影-通用型_4核8G',
                                    'appstreaming.vgpu.14c93g.12g' => '无影-图形型_14核93G 12G显存',
                                    'appstreaming.vgpu.8c31g.16g' => '无影-图形型_8核31G 16G显存',
                                ],
                                'example' => 'appstreaming.general.4c8g',
                            ],
                            'NodeAmount' => [
                                'description' => '购买资源的数量。取值范围：1~100。'."\n"
                                    ."\n"
                                    .'>- 若为包年包月资源，则该参数必填。'."\n"
                                    .'>- 若为按量付费资源，则当弹性模式（`StrategyType`）为固定数量（`NODE_FIXED`）或自动扩缩容（`NODE_SCALING_BY_USAGE`）时该参数必填。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1',
                            ],
                            'NodeCapacity' => [
                                'description' => '并发会话数，即单个资源可同时连接的会话数。如果同时连接的会话数过多，可能导致应用的使用体验下降。取值范围因资源规格不同而不同。各资源规格对应的取值范围分别是：'."\n"
                                    ."\n"
                                    .'- appstreaming.general.4c8g：1\\~2；'."\n"
                                    .'- appstreaming.general.8c16g：1\\~4；'."\n"
                                    .'- appstreaming.vgpu.8c16g.4g：1\\~4；'."\n"
                                    .'- appstreaming.vgpu.8c31g.16g：1\\~4；'."\n"
                                    .'- appstreaming.vgpu.14c93g.12g：1\\~6；',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '2',
                            ],
                            'StrategyType' => [
                                'description' => '弹性模式。'."\n"
                                    ."\n"
                                    .'> '."\n"
                                    .'>- `NODE_FIXED`（固定数量）：适用于包年包月资源和按量付费资源。'."\n"
                                    .'>- `NODE_SCALING_BY_USAGE`（自动扩缩容）：适用于包年包月资源和按量付费资源。'."\n"
                                    .'>- `NODE_SCALING_BY_SCHEDULE`（定时扩缩容）：仅适用于按量付费资源。',
                                'type' => 'string',
                                'required' => false,
                                'enumValueTitles' => [
                                    'NODE_FIXED' => '固定数量（不使用弹性扩缩容）',
                                    'NODE_SCALING_BY_SCHEDULE' => '定时扩缩容',
                                    'NODE_SCALING_BY_USAGE' => '自动扩缩容',
                                ],
                                'example' => 'NODE_FIXED',
                            ],
                            'MaxScalingAmount' => [
                                'description' => '扩容时最多创建资源的数量。`StrategyType`设为`NODE_SCALING_BY_USAGE`（使用弹性资源）时，该字段必填。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '10',
                            ],
                            'ScalingStep' => [
                                'description' => '扩容时每次创建资源的数量。取值范围：1~10。`StrategyType`设为`NODE_SCALING_BY_USAGE`（使用弹性资源）时，该字段必填。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '2',
                            ],
                            'ScalingUsageThreshold' => [
                                'description' => '会话使用率上限阈值（%）。当会话使用率超过该阈值时，将触发自动扩容。会话使用率的计算公式为`会话使用率=当前会话数÷(资源总数×资源并发会话数)×100%`。`StrategyType`设为`NODE_SCALING_BY_USAGE`（使用弹性资源）时，该字段必填。取值范围：0~100。默认值：85。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '85',
                            ],
                            'ScalingDownAfterIdleMinutes' => [
                                'description' => '无会话连接的资源最多保留的时长（分钟）。当资源内无会话连接时，将按照此处设置的时长开始倒计时，倒计时结束时将完成缩容。取值范围：5\\~120。默认值：5。但有以下例外情况：'."\n"
                                    ."\n"
                                    .'- 若缩容后将导致重新触发自动扩容，则不会执行缩容，以免导致反复产生缩容、扩容。'."\n"
                                    .'- 若此时间段内，因会话数增加而触发自动扩容，则该资源不会按原计划缩容，倒计时也将重新开始。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '5',
                            ],
                            'StrategyEnableDate' => [
                                'description' => '策略生效日期。格式为：yyyy-MM-dd。该日期必须大于或等于当前日期。`StrategyType`（弹性模式）设为`NODE_SCALING_BY_SCHEDULE`（定时扩缩容）时，该字段必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '2022-08-01',
                            ],
                            'StrategyDisableDate' => [
                                'description' => '策略失效日期。格式为：yyyy-MM-dd。失效日期与生效日期的间隔必须介于7天到1年之间（含7天和1年）。`StrategyType`（弹性模式）设为`NODE_SCALING_BY_SCHEDULE`（定时扩缩容）时，该字段必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '2022-09-08',
                            ],
                            'WarmUp' => [
                                'description' => '是否开启资源预热策略。`StrategyType`（弹性模式）设为`NODE_SCALING_BY_SCHEDULE`（定时扩缩容）时，该字段必填。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                            ],
                            'RecurrenceSchedules' => [
                                'description' => '策略执行周期列表。`StrategyType`（弹性模式）设为`NODE_SCALING_BY_SCHEDULE`（定时扩缩容）时，该字段必填。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '策略执行周期。',
                                    'type' => 'object',
                                    'properties' => [
                                        'RecurrenceType' => [
                                            'description' => '策略执行周期的类型。必须同时指定`RecurrenceType`和`RecurrenceValues`。 ',
                                            'type' => 'string',
                                            'required' => false,
                                            'enumValueTitles' => [
                                                'weekly' => '周（每周指定几天重复执行一次定时任务）',
                                            ],
                                            'example' => 'weekly',
                                        ],
                                        'RecurrenceValues' => [
                                            'description' => '策略执行周期的数值列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '策略执行周期的数值。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'enumValueTitles' => [
                                                    1 => '周一',
                                                    '周二',
                                                    '周三',
                                                    '周四',
                                                    '周五',
                                                    '周六',
                                                    '周日',
                                                ],
                                                'example' => '1',
                                            ],
                                            'required' => false,
                                            'maxItems' => 7,
                                        ],
                                        'TimerPeriods' => [
                                            'description' => '策略执行周期的时间段列表。时间段设置要求：'."\n"
                                                ."\n"
                                                .'- 最多可添加3个时间段。'."\n"
                                                .'- 时间段之间不重叠。'."\n"
                                                .'- 时间段之间的间隔大于或等于5分钟。'."\n"
                                                .'- 单个时间段的时长大于或等于15分钟。'."\n"
                                                .'- 所有时间段累计不跨天。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '策略执行周期的时间段。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'StartTime' => [
                                                        'description' => '开始时间。格式为HH:mm。',
                                                        'type' => 'string',
                                                        'required' => false,
                                                        'example' => '12:00',
                                                    ],
                                                    'EndTime' => [
                                                        'description' => '结束时间。格式为HH:mm。',
                                                        'type' => 'string',
                                                        'required' => false,
                                                        'example' => '15:00',
                                                    ],
                                                    'Amount' => [
                                                        'description' => '资源数量。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'example' => '2',
                                                    ],
                                                ],
                                                'required' => false,
                                            ],
                                            'required' => false,
                                            'maxItems' => 5,
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                                'maxItems' => 7,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Network',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '网络配置。'."\n"
                            ."\n"
                            .'> 如需使用该参数，请提交工单。',
                        'type' => 'object',
                        'properties' => [
                            'StrategyType' => [
                                'description' => '网络策略类型。',
                                'type' => 'string',
                                'required' => false,
                                'enumValueTitles' => [
                                    'Mixed' => '混合模式，单VPC、双网卡+独立公网IP',
                                    'Shared' => '共享模式，单网卡、NAT网管访问公网',
                                ],
                                'example' => 'Shared',
                            ],
                            'Routes' => [
                                'description' => '路由配置。仅当网络策略类型（`StrategyType`）的值为混合模式（`Mixed`）时可配置。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '路由配置。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Destination' => [
                                            'description' => '访问目标。CIDR格式。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '139.196.XX.XX/32',
                                        ],
                                        'Mode' => [
                                            'description' => '网络出口模式。',
                                            'type' => 'string',
                                            'required' => false,
                                            'enumValueTitles' => [
                                                'Shared' => '通过NAT网管访问',
                                            ],
                                            'example' => 'Shared',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                            'IpExpireMinutes' => [
                                'description' => '公网IP地址使用时长超过这个值时，在下次登录时就会触发IP地址更新。最小值为60。单位为分钟。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '60',
                                'example' => '60',
                            ],
                            'DomainRules' => [
                                'description' => '域名规则配置。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '域名规则。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Domain' => [
                                            'description' => '域名。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'www.example.com',
                                        ],
                                        'Policy' => [
                                            'description' => '策略值。',
                                            'type' => 'string',
                                            'required' => false,
                                            'enumValueTitles' => [
                                                'allow' => '允许访问',
                                                'block' => '禁止访问',
                                            ],
                                            'example' => 'block',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StoragePolicy',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '存储策略。',
                        'type' => 'object',
                        'properties' => [
                            'StorageTypeList' => [
                                'description' => '存储类型列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '存储类型。',
                                    'type' => 'string',
                                    'required' => false,
                                    'enumValueTitles' => [
                                        'OFF' => '关闭',
                                        'PDS' => '网盘与相册服务（Drive and Photo Service）',
                                    ],
                                    'example' => 'PDS',
                                ],
                                'required' => false,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PreOpenAppId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '预开的AppId。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cag-b2ronxxd****',
                    ],
                ],
                [
                    'name' => 'RuntimePolicy',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '运行时策略。',
                        'type' => 'object',
                        'properties' => [
                            'SessionType' => [
                                'description' => '会话类型。',
                                'type' => 'string',
                                'required' => false,
                                'enumValueTitles' => [
                                    'CONSOLE' => 'Console会话',
                                    'NORMAL' => 'RDP会话',
                                ],
                                'example' => 'NORMAL',
                            ],
                            'DebugMode' => [
                                'description' => '是否开启调试模式。如需调用`GetDebugAppInstance`和`CreateImageFromAppInstanceGroup`，则必须将此字段设为`ON`。',
                                'type' => 'string',
                                'required' => false,
                                'enumValueTitles' => [
                                    'OFF' => '关闭',
                                    'ON' => '开启',
                                ],
                                'example' => 'OFF',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SecurityPolicy',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '安全策略。',
                        'type' => 'object',
                        'properties' => [
                            'ResetAfterUnbind' => [
                                'description' => '解绑后是否重置。',
                                'type' => 'boolean',
                                'required' => false,
                                'enumValueTitles' => [
                                    'true' => '重置',
                                    'false' => '不重置',
                                ],
                                'example' => 'true',
                            ],
                            'SkipUserAuthCheck' => [
                                'description' => '是否跳过用户授权校验。',
                                'type' => 'boolean',
                                'required' => false,
                                'enumValueTitles' => [
                                    'true' => '不校验',
                                    'false' => '校验 [默认值]',
                                ],
                                'example' => 'false',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserDefinePolicy',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '用户自定义策略',
                        'type' => 'object',
                        'properties' => [
                            'CustomConfig' => [
                                'description' => '自定义策略内容，需要满足镜像版本规范，如需使用该参数，请提交工单申请开启白名单。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '[{"target":"agent","config":{"abc":"xxx"}}]',
                            ],
                        ],
                        'required' => false,
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
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                            'AppInstanceGroupModel' => [
                                'description' => '交付组。',
                                'type' => 'object',
                                'properties' => [
                                    'AppInstanceGroupId' => [
                                        'description' => '交付组ID。',
                                        'type' => 'string',
                                        'example' => 'aig-9ciijz60n4xsv****',
                                    ],
                                    'OrderId' => [
                                        'description' => '订单ID。',
                                        'type' => 'string',
                                        'example' => '12345****',
                                    ],
                                    'NodePoolId' => [
                                        'description' => '资源组ID。如果同时创建了资源组，则返回该参数。',
                                        'type' => 'string',
                                        'example' => 'rg-ew7va2g1wl3vm****',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"AppInstanceGroupModel\\": {\\n    \\"AppInstanceGroupId\\": \\"aig-9ciijz60n4xsv****\\",\\n    \\"OrderId\\": \\"12345****\\",\\n    \\"NodePoolId\\": \\"rg-ew7va2g1wl3vm****\\"\\n  }\\n}","type":"json"}]',
            'title' => '创建交付组',
            'description' => '请确保在使用该接口前，已充分了解无影云应用的[计费方式和价格](~~426039~~)。'."\n"
                ."\n"
                .'交付组是向终端用户交付云应用的逻辑分组，包括底层依赖的云应用资源、包含云应用的镜像、资源管理策略以及用户分配设置等。详情参见[发布交付组](~~426046~~)。',
        ],
        'GetAppInstanceGroup' => [
            'summary' => '查询指定交付组详细信息。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'AppInstanceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '交付组ID。可通过接口[ListAppInstanceGroup](~~428506~~)获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'aig-9ciijz60n4xsv****',
                    ],
                ],
                [
                    'name' => 'ProductType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '产品类型。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'CloudApp' => '无影云应用',
                        ],
                        'example' => 'CloudApp',
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
                            'AppInstanceGroupModels' => [
                                'title' => 'AppInstanceGroupModels',
                                'description' => 'AppInstanceGroupModels',
                                'type' => 'object',
                                'properties' => [
                                    'Apps' => [
                                        'description' => '应用信息列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '应用信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'AppId' => [
                                                    'description' => '应用ID。',
                                                    'type' => 'string',
                                                    'example' => 'ca-i87mycyn419nu****',
                                                ],
                                                'AppName' => [
                                                    'description' => '应用名称。',
                                                    'type' => 'string',
                                                    'example' => '办公应用',
                                                ],
                                                'AppVersion' => [
                                                    'description' => '应用版本。',
                                                    'type' => 'string',
                                                    'example' => '1.0.0',
                                                ],
                                                'AppVersionName' => [
                                                    'description' => '应用版本名称。',
                                                    'type' => 'string',
                                                    'example' => '初始版本',
                                                ],
                                                'AppIcon' => [
                                                    'description' => '应用图标。',
                                                    'type' => 'string',
                                                    'example' => 'https://app-center-icon-****.png',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'AppCenterImageId' => [
                                        'description' => '应用镜像ID。',
                                        'type' => 'string',
                                        'example' => 'img-8z4nztpaqvay4****',
                                    ],
                                    'RegionId' => [
                                        'description' => '交付组所属的地域ID。关于支持的地域详情，请参见[使用限制](~~426036~~)。',
                                        'type' => 'string',
                                        'example' => 'cn-hangzhou',
                                    ],
                                    'ProductType' => [
                                        'description' => '产品类型。',
                                        'type' => 'string',
                                        'enumValueTitles' => [],
                                        'example' => 'CloudApp',
                                    ],
                                    'AppInstanceType' => [
                                        'description' => '交付组规格类型。',
                                        'type' => 'string',
                                        'example' => '__dynamic__',
                                    ],
                                    'AppInstanceTypeName' => [
                                        'description' => '交付组规格类型名称',
                                        'type' => 'string',
                                        'example' => 'test001',
                                    ],
                                    'AppInstanceGroupId' => [
                                        'description' => '交付组ID。',
                                        'type' => 'string',
                                        'example' => 'aig-9ciijz60n4xsv****',
                                    ],
                                    'Amount' => [
                                        'description' => '用户设置的包年包月资源的数量。最小值为1。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'MinAmount' => [
                                        'description' => '实例数最小值。最小值为1。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'MaxAmount' => [
                                        'description' => '实例数最大值。最小值为1。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'ReserveAmountRatio' => [
                                        'description' => '预留实例百分比，即交付组中未使用的会话比例。取值范围为0~99。',
                                        'type' => 'string',
                                        'example' => '20',
                                    ],
                                    'ReserveMinAmount' => [
                                        'description' => '最小预留实例数，即交付组中未使用会话的最小数量。最小值为1。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'ReserveMaxAmount' => [
                                        'description' => '最大预留实例数，即交付组中未使用会话的最大数量。最小值为1。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '5',
                                    ],
                                    'ScalingStep' => [
                                        'description' => '扩容时每次创建会话的数量。最小值为1。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'ScalingUsageThreshold' => [
                                        'description' => '会话使用率上限阈值（%）。当会话使用率超过该阈值时，将触发自动扩容。会话使用率的计算公式为会话使用率=当前使用中的会话数÷总会话数×100%。取值范围为0~99。',
                                        'type' => 'string',
                                        'example' => '85',
                                    ],
                                    'ScalingDownAfterIdleMinutes' => [
                                        'description' => '无会话连接时长，单位为分钟。当资源内处于无会话连接状态达到此处设置的时长后，将触发自动缩容。最小值为0。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '5',
                                    ],
                                    'ChargeType' => [
                                        'description' => '付费方式。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'PostPaid' => '按量付费',
                                            'PrePaid' => '包年包月',
                                        ],
                                        'example' => 'PrePaid',
                                    ],
                                    'ChargeResourceMode' => [
                                        'description' => '售卖模式。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'AppInstance' => '按会话售卖',
                                            'Node' => '按资源售卖',
                                        ],
                                        'example' => 'Node',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2022-04-26T15:06:16.000+00:00',
                                    ],
                                    'Status' => [
                                        'description' => '交付组状态。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'PUBLISHED' => '发布成功',
                                            'FAILED' => '发布失败',
                                            'MAINTAIN_FAILED' => '更新失败',
                                            'EXPIRED' => '已到期',
                                            'MAINTAINING' => '更新中',
                                            'CEASED' => '已欠费',
                                            'EXPIRED_RECYCLING' => '(过期回收中',
                                            'DEPLOYING' => '发布中',
                                        ],
                                        'example' => 'PUBLISHED',
                                    ],
                                    'NodePool' => [
                                        'description' => '资源组信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '资源组信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'NodePoolId' => [
                                                    'description' => '资源组ID。',
                                                    'type' => 'string',
                                                    'example' => 'rg-g6922kced36hx****',
                                                ],
                                                'NodeInstanceType' => [
                                                    'description' => '购买资源的规格类型ID。',
                                                    'type' => 'string',
                                                    'example' => 'appstreaming.vgpu.4c8g.2g',
                                                ],
                                                'NodeAmount' => [
                                                    'description' => '当前包年包月资源的总数量。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'NodeUsed' => [
                                                    'description' => '使用中的包年包月资源数量。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'NodeCapacity' => [
                                                    'description' => '并发会话数，即单个资源可同时连接的会话数。如果同时连接的会话数过多，可能导致应用的使用体验下降。取值范围因资源规格不同而不同。各资源规格对应的取值范围分别是：'."\n"
                                                        ."\n"
                                                        .'- appstreaming.general.4c8g：1\\~2；'."\n"
                                                        .'- appstreaming.general.8c16g：1\\~4；'."\n"
                                                        .'- appstreaming.vgpu.8c16g.4g：1\\~4；'."\n"
                                                        .'- appstreaming.vgpu.8c31g.16g：1\\~4；'."\n"
                                                        .'- appstreaming.vgpu.14c93g.12g：1\\~6；',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '2',
                                                ],
                                                'ScalingNodeAmount' => [
                                                    'description' => '弹性资源总数量。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '8',
                                                ],
                                                'ScalingNodeUsed' => [
                                                    'description' => '使用中的弹性资源数量。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '4',
                                                ],
                                                'StrategyType' => [
                                                    'description' => '弹性策略类型。'."\n"
                                                        ."\n"
                                                        .'> `NODE_SCALING_BY_USAGE`（按用量伸缩策略）仅适用于`PrePaid`（包年包月）资源；`NODE_SCALING_BY_SCHEDULE`（定时伸缩策略）仅适用于`PostPaid`（按量付费）资源。',
                                                    'type' => 'string',
                                                    'enumValueTitles' => [
                                                        'NODE_FIXED' => '不使用弹性资源',
                                                        'NODE_SCALING_BY_SCHEDULE' => '定时伸缩',
                                                        'NODE_SCALING_BY_USAGE' => '按用量伸缩策略',
                                                    ],
                                                    'example' => 'NODE_FIXED',
                                                ],
                                                'Amount' => [
                                                    'description' => '创建交付组时购买资源的数量。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '2',
                                                ],
                                                'MaxScalingAmount' => [
                                                    'description' => '扩容时最多创建资源的数量。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '8',
                                                ],
                                                'ScalingStep' => [
                                                    'description' => '扩容时每次创建资源的数量。取值范围：1~10。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '2',
                                                ],
                                                'ScalingUsageThreshold' => [
                                                    'description' => '会话使用率上限阈值（%）。当会话使用率超过该阈值时，将触发自动扩容。会话使用率的计算公式为`会话使用率=当前会话数÷(资源总数×资源并发会话数)×100%`。',
                                                    'type' => 'string',
                                                    'example' => '85',
                                                ],
                                                'ScalingDownAfterIdleMinutes' => [
                                                    'description' => '无会话连接时长，单位为分钟。当资源内处于无会话连接状态达到此处设置的时长后，将触发自动缩容。默认值：5。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '5',
                                                ],
                                                'RecurrenceSchedules' => [
                                                    'description' => '策略执行周期列表。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '策略执行周期。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'RecurrenceType' => [
                                                                'description' => '策略执行周期的类型。必须同时指定`RecurrenceType`和`RecurrenceValues`。 ',
                                                                'type' => 'string',
                                                                'example' => 'Weekly',
                                                            ],
                                                            'RecurrenceValues' => [
                                                                'description' => '策略执行周期的数值列表。',
                                                                'type' => 'array',
                                                                'items' => [
                                                                    'description' => '策略执行周期的数值。',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'example' => '1',
                                                                ],
                                                            ],
                                                            'TimerPeriods' => [
                                                                'description' => '策略执行周期的时间段列表。',
                                                                'type' => 'array',
                                                                'items' => [
                                                                    'description' => '策略执行周期的时间段。',
                                                                    'type' => 'object',
                                                                    'properties' => [
                                                                        'Amount' => [
                                                                            'description' => '目标资源数量。',
                                                                            'type' => 'integer',
                                                                            'format' => 'int32',
                                                                            'example' => '5',
                                                                        ],
                                                                        'EndTime' => [
                                                                            'description' => '结束时间。格式为HH:mm',
                                                                            'type' => 'string',
                                                                            'example' => '11:00',
                                                                        ],
                                                                        'StartTime' => [
                                                                            'description' => '开始时间。格式为HH:mm',
                                                                            'type' => 'string',
                                                                            'example' => '09:30',
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'StrategyDisableDate' => [
                                                    'description' => '策略失效日期。格式为：yyyy-MM-dd。',
                                                    'type' => 'string',
                                                    'example' => '2022-09-08',
                                                ],
                                                'StrategyEnableDate' => [
                                                    'description' => '策略生效日期。格式为：yyyy-MM-dd。',
                                                    'type' => 'string',
                                                    'example' => '2022-08-01',
                                                ],
                                                'WarmUp' => [
                                                    'description' => '是否开启资源预热策略。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'NodeTypeName' => [
                                                    'description' => '资源规格名称。',
                                                    'type' => 'string',
                                                    'example' => '无影-通用型_4核8G',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'SpecId' => [
                                        'description' => '与交付组ID唯一对应的ID。',
                                        'type' => 'string',
                                        'example' => 'spec-8o18t8uc31qib0****',
                                    ],
                                    'SessionTimeout' => [
                                        'description' => '会话断连保留时长，单位为分钟。终端用户会话断开连接后，会话将保留此处设置的时长，然后再注销。如果始终保留，则填写`-1`。取值范围：-1和3~300。默认值为`15`。',
                                        'type' => 'string',
                                        'example' => '15',
                                    ],
                                    'AppInstanceGroupName' => [
                                        'description' => '交付组名称。',
                                        'type' => 'string',
                                        'example' => '办公应用',
                                    ],
                                    'ExpiredTime' => [
                                        'description' => '交付组到期时间。',
                                        'type' => 'string',
                                        'example' => '2022-04-27T16:00:00.000+00:00',
                                    ],
                                    'OtaInfo' => [
                                        'description' => 'OTA升级任务信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'OtaVersion' => [
                                                'title' => '当前ota版本',
                                                'description' => '当前OTA版本。',
                                                'type' => 'string',
                                                'example' => '0.0.1-D-20220615.11****',
                                            ],
                                            'NewOtaVersion' => [
                                                'title' => '新ota版本,为空表示没有新版本',
                                                'description' => '新的OTA版本。为空表示没有新版本。',
                                                'type' => 'string',
                                                'example' => '0.0.1-D-20220630.11****',
                                            ],
                                            'TaskId' => [
                                                'title' => '任务id',
                                                'description' => 'OTA升级任务ID。',
                                                'type' => 'string',
                                                'example' => 'ota-e49929gv8acz5****',
                                            ],
                                        ],
                                    ],
                                    'OsType' => [
                                        'title' => '系统类型',
                                        'description' => '系统类型。',
                                        'type' => 'string',
                                        'example' => 'Windows',
                                        'enum' => [
                                            'Windows',
                                            'Linux',
                                            'Android',
                                        ],
                                    ],
                                    'AppCenterImageName' => [
                                        'description' => '应用镜像名称。',
                                        'type' => 'string',
                                        'example' => 'OfficeApps',
                                    ],
                                    'ResourceStatus' => [
                                        'description' => '资源状态。',
                                        'type' => 'string',
                                        'example' => 'AVAILABLE',
                                    ],
                                    'AppPolicyId' => [
                                        'description' => '应用策略ID。',
                                        'type' => 'string',
                                        'example' => 'pg-g3k5wa2ms2****',
                                    ],
                                    'SkipUserAuthCheck' => [
                                        'description' => '是否跳过用户授权校验。',
                                        'type' => 'boolean',
                                        'enumValueTitles' => [
                                            'true' => '不校验',
                                            'false' => '校验 [默认值]',
                                        ],
                                        'example' => 'false',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"AppInstanceGroupModels\\": {\\n    \\"Apps\\": [\\n      {\\n        \\"AppId\\": \\"ca-i87mycyn419nu****\\",\\n        \\"AppName\\": \\"办公应用\\",\\n        \\"AppVersion\\": \\"1.0.0\\",\\n        \\"AppVersionName\\": \\"初始版本\\",\\n        \\"AppIcon\\": \\"https://app-center-icon-****.png\\"\\n      }\\n    ],\\n    \\"AppCenterImageId\\": \\"img-8z4nztpaqvay4****\\",\\n    \\"RegionId\\": \\"cn-hangzhou\\",\\n    \\"ProductType\\": \\"CloudApp\\",\\n    \\"AppInstanceType\\": \\"__dynamic__\\",\\n    \\"AppInstanceTypeName\\": \\"test001\\",\\n    \\"AppInstanceGroupId\\": \\"aig-9ciijz60n4xsv****\\",\\n    \\"Amount\\": 1,\\n    \\"MinAmount\\": 1,\\n    \\"MaxAmount\\": 10,\\n    \\"ReserveAmountRatio\\": \\"20\\",\\n    \\"ReserveMinAmount\\": 1,\\n    \\"ReserveMaxAmount\\": 5,\\n    \\"ScalingStep\\": 10,\\n    \\"ScalingUsageThreshold\\": \\"85\\",\\n    \\"ScalingDownAfterIdleMinutes\\": 5,\\n    \\"ChargeType\\": \\"PrePaid\\",\\n    \\"ChargeResourceMode\\": \\"Node\\",\\n    \\"GmtCreate\\": \\"2022-04-26T15:06:16.000+00:00\\",\\n    \\"Status\\": \\"PUBLISHED\\",\\n    \\"NodePool\\": [\\n      {\\n        \\"NodePoolId\\": \\"rg-g6922kced36hx****\\",\\n        \\"NodeInstanceType\\": \\"appstreaming.vgpu.4c8g.2g\\",\\n        \\"NodeAmount\\": 1,\\n        \\"NodeUsed\\": 1,\\n        \\"NodeCapacity\\": 2,\\n        \\"ScalingNodeAmount\\": 8,\\n        \\"ScalingNodeUsed\\": 4,\\n        \\"StrategyType\\": \\"NODE_FIXED\\",\\n        \\"Amount\\": 2,\\n        \\"MaxScalingAmount\\": 8,\\n        \\"ScalingStep\\": 2,\\n        \\"ScalingUsageThreshold\\": \\"85\\",\\n        \\"ScalingDownAfterIdleMinutes\\": 5,\\n        \\"RecurrenceSchedules\\": [\\n          {\\n            \\"RecurrenceType\\": \\"Weekly\\",\\n            \\"RecurrenceValues\\": [\\n              1\\n            ],\\n            \\"TimerPeriods\\": [\\n              {\\n                \\"Amount\\": 5,\\n                \\"EndTime\\": \\"11:00\\",\\n                \\"StartTime\\": \\"09:30\\"\\n              }\\n            ]\\n          }\\n        ],\\n        \\"StrategyDisableDate\\": \\"2022-09-08\\",\\n        \\"StrategyEnableDate\\": \\"2022-08-01\\",\\n        \\"WarmUp\\": false,\\n        \\"NodeTypeName\\": \\"无影-通用型_4核8G\\"\\n      }\\n    ],\\n    \\"SpecId\\": \\"spec-8o18t8uc31qib0****\\",\\n    \\"SessionTimeout\\": \\"15\\",\\n    \\"AppInstanceGroupName\\": \\"办公应用\\",\\n    \\"ExpiredTime\\": \\"2022-04-27T16:00:00.000+00:00\\",\\n    \\"OtaInfo\\": {\\n      \\"OtaVersion\\": \\"0.0.1-D-20220615.11****\\",\\n      \\"NewOtaVersion\\": \\"0.0.1-D-20220630.11****\\",\\n      \\"TaskId\\": \\"ota-e49929gv8acz5****\\"\\n    },\\n    \\"OsType\\": \\"Windows\\",\\n    \\"AppCenterImageName\\": \\"OfficeApps\\",\\n    \\"ResourceStatus\\": \\"AVAILABLE\\",\\n    \\"AppPolicyId\\": \\"pg-g3k5wa2ms2****\\",\\n    \\"SkipUserAuthCheck\\": false\\n  }\\n}","type":"json"}]',
            'title' => '查询指定交付组详细信息',
        ],
        'ListAppInstanceGroup' => [
            'summary' => '查询多个交付组详细信息，即不指定特定的交付组，而是查询所有满足条件的交付组的详细信息。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的查询结果数量，不可超过`100`。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需展示的查询结果页码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '交付组状态列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '交付组状态。',
                            'type' => 'string',
                            'required' => false,
                            'enumValueTitles' => [
                                'PUBLISHED' => '发布成功',
                                'FAILED' => '发布失败',
                                'MAINTAIN_FAILED' => '更新失败',
                                'EXPIRED' => '已到期',
                                'MAINTAINING' => '更新中',
                                'CEASED' => '已欠费',
                                'EXPIRED_RECYCLING' => '过期回收中',
                                'DEPLOYING' => '发布中',
                            ],
                            'example' => '"Status.1":"PUBLISHED","Status.2":"FAILED"',
                        ],
                        'required' => false,
                        'maxItems' => 1000,
                    ],
                ],
                [
                    'name' => 'AppInstanceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '交付组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'aig-9ciijz60n4xsv****',
                    ],
                ],
                [
                    'name' => 'ProductType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '产品类型。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'CloudApp' => '无影云应用',
                        ],
                        'example' => 'CloudApp',
                    ],
                ],
                [
                    'name' => 'AppInstanceGroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '交付组名称，查询时采用模糊匹配规则。例如，假设填写的交付组名称为`办公应用`，则名称中包含`办公应用`的交付组都会被查询到，例如名为`我的办公应用`、`办公应用A`的交付组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '办公应用',
                    ],
                ],
                [
                    'name' => 'AppCenterImageId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用中心镜像ID',
                        'description' => '应用镜像ID，可从无影云应用控制台的镜像管理页面获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'img-8z4nztpaqvay4****',
                    ],
                ],
                [
                    'name' => 'BizRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '交付组所属的地域ID。关于支持的地域详情，请参见[使用限制](https://help.aliyun.com/document_detail/426036.html)。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'cn-shanghai' => '华东2（上海）',
                            'cn-hangzhou' => '华东1（杭州）',
                        ],
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'NodeInstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '购买资源的规格类型ID。可通过[ListNodeInstanceType](~~428502~~)接口获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'appstreaming.vgpu.4c8g.2g',
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
                            'TotalCount' => [
                                'description' => '查询结果的总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '15',
                            ],
                            'PageSize' => [
                                'description' => '每页的查询结果数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'PageNumber' => [
                                'description' => '当前展示的查询结果页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'AppInstanceGroupModels' => [
                                'title' => 'AppInstanceGroupModels',
                                'description' => '交付组信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '交付组信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Apps' => [
                                            'description' => '应用信息。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '应用信息。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'AppId' => [
                                                        'description' => '应用ID。',
                                                        'type' => 'string',
                                                        'example' => 'ca-i87mycyn419nu****',
                                                    ],
                                                    'AppName' => [
                                                        'description' => '应用名称。',
                                                        'type' => 'string',
                                                        'example' => '办公应用',
                                                    ],
                                                    'AppVersion' => [
                                                        'description' => '应用版本。',
                                                        'type' => 'string',
                                                        'example' => '1.0.0',
                                                    ],
                                                    'AppVersionName' => [
                                                        'description' => '应用版本名称。',
                                                        'type' => 'string',
                                                        'example' => '初始版本',
                                                    ],
                                                    'AppIcon' => [
                                                        'description' => '应用图标。',
                                                        'type' => 'string',
                                                        'example' => 'https://app-center-icon-****.png',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'AppCenterImageId' => [
                                            'description' => '应用镜像ID。',
                                            'type' => 'string',
                                            'example' => 'img-8z4nztpaqvay4****',
                                        ],
                                        'RegionId' => [
                                            'description' => '交付组所属的地域ID。关于支持的地域详情，请参见[使用限制](~~426036~~)。',
                                            'type' => 'string',
                                            'enumValueTitles' => [],
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'ProductType' => [
                                            'description' => '产品类型。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'CloudApp' => '无影云应用',
                                            ],
                                            'example' => 'CloudApp',
                                        ],
                                        'AppInstanceType' => [
                                            'description' => '交付组规格类型。',
                                            'type' => 'string',
                                            'example' => '__dynamic__',
                                        ],
                                        'AppInstanceGroupId' => [
                                            'description' => '交付组ID。',
                                            'type' => 'string',
                                            'example' => 'aig-9ciijz60n4xsv****',
                                        ],
                                        'Amount' => [
                                            'description' => '用户设置的包年包月资源的数量。最小值为1。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'MinAmount' => [
                                            'description' => '实例数最小值。最小值为1。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'MaxAmount' => [
                                            'description' => '实例数最大值。最小值为1。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '10',
                                        ],
                                        'ReserveAmountRatio' => [
                                            'description' => '预留实例百分比，即交付组中未使用的会话比例。取值范围为0~99。',
                                            'type' => 'string',
                                            'example' => '20',
                                        ],
                                        'ReserveMinAmount' => [
                                            'description' => '最小预留实例数，即交付组中未使用会话的最小数量。最小值为1。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'ReserveMaxAmount' => [
                                            'description' => '最大预留实例数，即交付组中未使用会话的最大数量。最小值为1。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '5',
                                        ],
                                        'ScalingStep' => [
                                            'description' => '扩容时每次创建会话的数量。最小值为1。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '10',
                                        ],
                                        'ScalingUsageThreshold' => [
                                            'description' => '会话使用率上限阈值（%）。当会话使用率超过该阈值时，将触发自动扩容。会话使用率的计算公式为会话使用率=当前使用中的会话数÷总会话数×100%。取值范围为0~99。',
                                            'type' => 'string',
                                            'example' => '85',
                                        ],
                                        'ScalingDownAfterIdleMinutes' => [
                                            'description' => '无会话连接时长，单位为分钟。当资源内处于无会话连接状态达到此处设置的时长后，将触发自动缩容。最小值为0。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '5',
                                        ],
                                        'ChargeType' => [
                                            'description' => '付费方式。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'PostPaid' => '按量付费',
                                                'PrePaid' => '包年包月',
                                            ],
                                            'example' => 'PrePaid',
                                        ],
                                        'GmtCreate' => [
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2022-04-26T15:06:16.000+00:00',
                                        ],
                                        'Status' => [
                                            'description' => '交付组状态。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'PUBLISHED' => '发布成功',
                                                'FAILED' => '发布失败',
                                                'MAINTAIN_FAILED' => '更新失败',
                                                'EXPIRED' => '已到期',
                                                'MAINTAINING' => '更新中',
                                                'CEASED' => '已欠费',
                                                'EXPIRED_RECYCLING' => '过期回收中',
                                                'DEPLOYING' => '发布中',
                                            ],
                                            'example' => 'PUBLISHED',
                                        ],
                                        'NodePool' => [
                                            'description' => '资源组信息。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '资源组对象。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'NodePoolId' => [
                                                        'description' => '资源组ID。',
                                                        'type' => 'string',
                                                        'example' => 'rg-g6922kced36hx****',
                                                    ],
                                                    'NodeInstanceType' => [
                                                        'description' => '购买资源的规格类型ID。',
                                                        'type' => 'string',
                                                        'enumValueTitles' => [],
                                                        'example' => 'appstreaming.vgpu.4c8g.2g',
                                                    ],
                                                    'NodeAmount' => [
                                                        'description' => '当前包年包月资源的总数量。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '1',
                                                    ],
                                                    'NodeUsed' => [
                                                        'description' => '使用中的包年包月资源数量。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '1',
                                                    ],
                                                    'NodeCapacity' => [
                                                        'description' => '并发会话数，即单个资源可同时连接的会话数。如果同时连接的会话数过多，可能导致应用的使用体验下降。取值范围因资源规格不同而不同。各资源规格对应的取值范围分别是：'."\n"
                                                            ."\n"
                                                            .'- appstreaming.general.4c8g：1\\~2；'."\n"
                                                            .'- appstreaming.general.8c16g：1\\~4；'."\n"
                                                            .'- appstreaming.vgpu.8c16g.4g：1\\~4；'."\n"
                                                            .'- appstreaming.vgpu.8c31g.16g：1\\~4；'."\n"
                                                            .'- appstreaming.vgpu.14c93g.12g：1\\~6；',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '2',
                                                    ],
                                                    'ScalingNodeAmount' => [
                                                        'description' => '弹性资源总数量。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '8',
                                                    ],
                                                    'ScalingNodeUsed' => [
                                                        'description' => '使用中的弹性资源数量。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '4',
                                                    ],
                                                    'StrategyType' => [
                                                        'description' => '弹性策略类型。'."\n"
                                                            ."\n"
                                                            .'> `NODE_SCALING_BY_USAGE`（按用量伸缩策略）仅适用于`PrePaid`（包年包月）资源；`NODE_SCALING_BY_SCHEDULE`（定时伸缩策略）仅适用于`PostPaid`（按量付费）资源。',
                                                        'type' => 'string',
                                                        'enumValueTitles' => [
                                                            'NODE_FIXED' => '不使用弹性资源',
                                                            'NODE_SCALING_BY_SCHEDULE' => '定时伸缩',
                                                            'NODE_SCALING_BY_USAGE' => '按用量伸缩策略',
                                                        ],
                                                        'example' => 'NODE_FIXED',
                                                    ],
                                                    'Amount' => [
                                                        'description' => '创建交付组时购买资源的数量。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '2',
                                                    ],
                                                    'MaxScalingAmount' => [
                                                        'description' => '扩容时最多创建资源的数量。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '8',
                                                    ],
                                                    'ScalingStep' => [
                                                        'description' => '扩容时每次创建资源的数量。取值范围：1~10。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '2',
                                                    ],
                                                    'ScalingUsageThreshold' => [
                                                        'description' => '会话使用率上限阈值（%）。当会话使用率超过该阈值时，将触发自动扩容。会话使用率的计算公式为`会话使用率=当前会话数÷(资源总数×资源并发会话数)×100%`。',
                                                        'type' => 'string',
                                                        'example' => '85',
                                                    ],
                                                    'ScalingDownAfterIdleMinutes' => [
                                                        'description' => '无会话连接时长，单位为分钟。当资源内处于无会话连接状态达到此处设置的时长后，将触发自动缩容。默认值：5。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '5',
                                                    ],
                                                    'RecurrenceSchedules' => [
                                                        'description' => '策略执行周期列表。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '策略执行周期。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'RecurrenceType' => [
                                                                    'description' => '策略执行周期的类型。必须同时指定`RecurrenceType`和`RecurrenceValues`。 ',
                                                                    'type' => 'string',
                                                                    'enumValueTitles' => [
                                                                        'weekly' => '周（每周指定几天重复执行一次定时任务）',
                                                                    ],
                                                                    'example' => 'Weekly',
                                                                ],
                                                                'RecurrenceValues' => [
                                                                    'description' => '策略执行周期的数值列表。',
                                                                    'type' => 'array',
                                                                    'items' => [
                                                                        'description' => '策略执行周期的数值。',
                                                                        'type' => 'integer',
                                                                        'format' => 'int32',
                                                                        'enumValueTitles' => [
                                                                            1 => '周一',
                                                                            '周二',
                                                                            '周三',
                                                                            '周四',
                                                                            '周五',
                                                                            '周六',
                                                                            '周日',
                                                                        ],
                                                                        'example' => '1',
                                                                    ],
                                                                ],
                                                                'TimerPeriods' => [
                                                                    'description' => '策略执行周期的时间段列表。',
                                                                    'type' => 'array',
                                                                    'items' => [
                                                                        'description' => '策略执行周期的时间段。',
                                                                        'type' => 'object',
                                                                        'properties' => [
                                                                            'Amount' => [
                                                                                'description' => '目标资源数量。',
                                                                                'type' => 'integer',
                                                                                'format' => 'int32',
                                                                                'example' => '5',
                                                                            ],
                                                                            'EndTime' => [
                                                                                'description' => '结束时间。格式为HH:mm',
                                                                                'type' => 'string',
                                                                                'example' => '11:00',
                                                                            ],
                                                                            'StartTime' => [
                                                                                'description' => '开始时间。格式为HH:mm',
                                                                                'type' => 'string',
                                                                                'example' => '09:30',
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    'StrategyDisableDate' => [
                                                        'description' => '策略失效日期。格式为：yyyy-MM-dd。',
                                                        'type' => 'string',
                                                        'example' => '2022-09-08',
                                                    ],
                                                    'StrategyEnableDate' => [
                                                        'description' => '策略生效日期。格式为：yyyy-MM-dd。',
                                                        'type' => 'string',
                                                        'example' => '2022-08-01',
                                                    ],
                                                    'WarmUp' => [
                                                        'description' => '是否开启资源预热策略。',
                                                        'type' => 'boolean',
                                                        'example' => 'false',
                                                    ],
                                                    'NodeTypeName' => [
                                                        'description' => '资源规格名称。',
                                                        'type' => 'string',
                                                        'example' => '无影-通用型_4核8G',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'SpecId' => [
                                            'description' => '与交付组ID唯一对应的ID。',
                                            'type' => 'string',
                                            'example' => 'spec-8o18t8uc31qib0****',
                                        ],
                                        'SessionTimeout' => [
                                            'description' => '会话断连保留时长，单位为分钟。终端用户会话断开连接后，会话将保留此处设置的时长，然后再注销。如果始终保留，则填写`-1`。取值范围：-1和3~300。默认值为`15`。',
                                            'type' => 'string',
                                            'example' => '15',
                                        ],
                                        'AppInstanceGroupName' => [
                                            'description' => '交付组名称。',
                                            'type' => 'string',
                                            'example' => '办公应用',
                                        ],
                                        'ExpiredTime' => [
                                            'description' => '交付组到期时间。',
                                            'type' => 'string',
                                            'example' => '2022-04-27T16:00:00.000+00:00',
                                        ],
                                        'OtaInfo' => [
                                            'description' => 'OTA升级任务信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'OtaVersion' => [
                                                    'title' => '当前ota版本',
                                                    'description' => '当前OTA版本。',
                                                    'type' => 'string',
                                                    'example' => '0.0.1-D-20220615.11****',
                                                ],
                                                'NewOtaVersion' => [
                                                    'title' => '新ota版本,为空表示没有新版本',
                                                    'description' => '新的OTA版本。为空表示没有新版本。',
                                                    'type' => 'string',
                                                    'example' => '0.0.1-D-20220630.11****',
                                                ],
                                                'TaskId' => [
                                                    'title' => '任务id',
                                                    'description' => 'OTA升级任务ID。',
                                                    'type' => 'string',
                                                    'example' => 'ota-e49929gv8acz5****',
                                                ],
                                            ],
                                        ],
                                        'OsType' => [
                                            'title' => '系统类型',
                                            'description' => '系统类型。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Windows' => 'Windows',
                                            ],
                                            'example' => 'Windows',
                                            'enum' => [
                                                'Windows',
                                                'Linux',
                                                'Android',
                                            ],
                                        ],
                                        'ResourceStatus' => [
                                            'description' => '资源状态。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'AVAILABLE' => '可用',
                                                'RELEASED' => '已释放',
                                                'EXPIRED_IN_7_DAYS' => '7天内过期',
                                                'UNAVAILABLE' => '不可用',
                                                'UPGRADING' => '更新中',
                                                'CREATING' => '创建中',
                                            ],
                                            'example' => 'AVAILABLE',
                                        ],
                                        'AppPolicyId' => [
                                            'description' => '策略ID。',
                                            'type' => 'string',
                                            'example' => 'pg-g3k5wa2ms2****',
                                        ],
                                        'ChargeResourceMode' => [
                                            'description' => '售卖模式。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'AppInstance' => '按会话售卖',
                                                'Node' => '按资源售卖',
                                            ],
                                            'example' => 'Node',
                                        ],
                                        'SkipUserAuthCheck' => [
                                            'description' => '是否跳过用户授权校验。',
                                            'type' => 'boolean',
                                            'enumValueTitles' => [
                                                'true' => '不校验',
                                                'false' => '校验 [默认值]',
                                            ],
                                            'example' => 'false',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"TotalCount\\": 15,\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"AppInstanceGroupModels\\": [\\n    {\\n      \\"Apps\\": [\\n        {\\n          \\"AppId\\": \\"ca-i87mycyn419nu****\\",\\n          \\"AppName\\": \\"办公应用\\",\\n          \\"AppVersion\\": \\"1.0.0\\",\\n          \\"AppVersionName\\": \\"初始版本\\",\\n          \\"AppIcon\\": \\"https://app-center-icon-****.png\\"\\n        }\\n      ],\\n      \\"AppCenterImageId\\": \\"img-8z4nztpaqvay4****\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"ProductType\\": \\"CloudApp\\",\\n      \\"AppInstanceType\\": \\"__dynamic__\\",\\n      \\"AppInstanceGroupId\\": \\"aig-9ciijz60n4xsv****\\",\\n      \\"Amount\\": 1,\\n      \\"MinAmount\\": 1,\\n      \\"MaxAmount\\": 10,\\n      \\"ReserveAmountRatio\\": \\"20\\",\\n      \\"ReserveMinAmount\\": 1,\\n      \\"ReserveMaxAmount\\": 5,\\n      \\"ScalingStep\\": 10,\\n      \\"ScalingUsageThreshold\\": \\"85\\",\\n      \\"ScalingDownAfterIdleMinutes\\": 5,\\n      \\"ChargeType\\": \\"PrePaid\\",\\n      \\"GmtCreate\\": \\"2022-04-26T15:06:16.000+00:00\\",\\n      \\"Status\\": \\"PUBLISHED\\",\\n      \\"NodePool\\": [\\n        {\\n          \\"NodePoolId\\": \\"rg-g6922kced36hx****\\",\\n          \\"NodeInstanceType\\": \\"appstreaming.vgpu.4c8g.2g\\",\\n          \\"NodeAmount\\": 1,\\n          \\"NodeUsed\\": 1,\\n          \\"NodeCapacity\\": 2,\\n          \\"ScalingNodeAmount\\": 8,\\n          \\"ScalingNodeUsed\\": 4,\\n          \\"StrategyType\\": \\"NODE_FIXED\\",\\n          \\"Amount\\": 2,\\n          \\"MaxScalingAmount\\": 8,\\n          \\"ScalingStep\\": 2,\\n          \\"ScalingUsageThreshold\\": \\"85\\",\\n          \\"ScalingDownAfterIdleMinutes\\": 5,\\n          \\"RecurrenceSchedules\\": [\\n            {\\n              \\"RecurrenceType\\": \\"Weekly\\",\\n              \\"RecurrenceValues\\": [\\n                1\\n              ],\\n              \\"TimerPeriods\\": [\\n                {\\n                  \\"Amount\\": 5,\\n                  \\"EndTime\\": \\"11:00\\",\\n                  \\"StartTime\\": \\"09:30\\"\\n                }\\n              ]\\n            }\\n          ],\\n          \\"StrategyDisableDate\\": \\"2022-09-08\\",\\n          \\"StrategyEnableDate\\": \\"2022-08-01\\",\\n          \\"WarmUp\\": false,\\n          \\"NodeTypeName\\": \\"无影-通用型_4核8G\\"\\n        }\\n      ],\\n      \\"SpecId\\": \\"spec-8o18t8uc31qib0****\\",\\n      \\"SessionTimeout\\": \\"15\\",\\n      \\"AppInstanceGroupName\\": \\"办公应用\\",\\n      \\"ExpiredTime\\": \\"2022-04-27T16:00:00.000+00:00\\",\\n      \\"OtaInfo\\": {\\n        \\"OtaVersion\\": \\"0.0.1-D-20220615.11****\\",\\n        \\"NewOtaVersion\\": \\"0.0.1-D-20220630.11****\\",\\n        \\"TaskId\\": \\"ota-e49929gv8acz5****\\"\\n      },\\n      \\"OsType\\": \\"Windows\\",\\n      \\"ResourceStatus\\": \\"AVAILABLE\\",\\n      \\"AppPolicyId\\": \\"pg-g3k5wa2ms2****\\",\\n      \\"ChargeResourceMode\\": \\"Node\\",\\n      \\"SkipUserAuthCheck\\": false\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询多个交付组详细信息',
        ],
        'PageListAppInstanceGroupUser' => [
            'summary' => '分页查询交付组中已添加的分配用户。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'AppInstanceGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '交付组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'aig-9ciijz60n4xsv****',
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'ProductType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '产品类型。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'CloudApp' => '无影云应用',
                        ],
                        'example' => 'CloudApp',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '每页的查询结果数量，不可超过`100`。建议填写该参数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '需展示的查询结果页码。建议填写该参数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
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
                            'Users' => [
                                'description' => '查询到的一组用户。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '查询到的用户名。',
                                    'type' => 'string',
                                    'example' => 'username1',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"Users\\": [\\n    \\"username1\\"\\n  ]\\n}","type":"json"}]',
            'title' => '分页查询交付组的分配用户',
        ],
        'RenewAppInstanceGroup' => [
            'summary' => '为交付组续费。',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ProductType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '产品类型。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'CloudApp' => '无影云应用',
                        ],
                        'example' => 'CloudApp',
                    ],
                ],
                [
                    'name' => 'PromotionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '优惠ID。可通过[GetResourcePrice](~~428503~~)接口获得。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '17440009****',
                    ],
                ],
                [
                    'name' => 'AutoPay',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否自动付费。',
                        'type' => 'boolean',
                        'required' => false,
                        'enumValueTitles' => [
                            'true' => '自动付费',
                            'false' => '手动付费 [默认值]',
                        ],
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'Period',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源购买时长的数量部分，与`PeriodUnit`一起表示完整的购买时长。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PeriodUnit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源购买时长的单位部分，与`Period`一起表示完整的购买时长。可使用的`Period`与`PeriodUnit`的搭配如下：'."\n"
                            ."\n"
                            .'- 1 Week（1周）'."\n"
                            .'- 1 Month（1个月）'."\n"
                            .'- 2 Month（2个月）'."\n"
                            .'- 3 Month（3个月）'."\n"
                            .'- 6 Month（6个月）'."\n"
                            .'- 1 Year（1年）'."\n"
                            .'- 2 Year（2年）'."\n"
                            .'- 3 Year（3年）'."\n"
                            ."\n"
                            .'> 该参数区分大小写。例如，`Week`是有效的，`week`是无效的。另外，如果请求参数不符合上述搭配，例如`2 Week`，虽然调用本接口会成功，但最终在下单阶段会出错。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'Month' => '月',
                            'Year' => '年',
                            'Week' => '周',
                        ],
                        'example' => 'Week',
                    ],
                ],
                [
                    'name' => 'AppInstanceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '交付组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'aig-9ciijz60n4xsv****',
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
                            'Code' => [
                                'description' => '出错时的错误码。',
                                'type' => 'string',
                                'example' => 'InvalidParameter.ProductType',
                            ],
                            'OrderId' => [
                                'description' => '订单ID。',
                                'type' => 'string',
                                'example' => '123456****',
                            ],
                            'Message' => [
                                'description' => '出错时的错误消息。',
                                'type' => 'string',
                                'example' => 'The parameter ProductType is invalid.',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"Code\\": \\"InvalidParameter.ProductType\\",\\n  \\"OrderId\\": \\"123456****\\",\\n  \\"Message\\": \\"The parameter ProductType is invalid.\\"\\n}","type":"json"}]',
            'title' => '为交付组续费',
            'description' => '请确保在使用该接口前，已充分了解无影云应用的[计费方式和价格](~~426039~~)。',
        ],
        'UpdateAppInstanceGroupImage' => [
            'summary' => '更新交付组的镜像。',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ProductType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '产品类型。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'CloudApp' => '无影云应用',
                        ],
                        'example' => 'CloudApp',
                    ],
                ],
                [
                    'name' => 'AppInstanceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '交付组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'aig-9ciijz60n4xsv****',
                    ],
                ],
                [
                    'name' => 'AppCenterImageId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用镜像ID，可从无影云应用控制台的镜像管理页面获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'img-8z4nztpaqvay4****',
                    ],
                ],
                [
                    'name' => 'BizRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '交付组所属的地域ID。关于支持的地域详情，请参见[使用限制](https://help.aliyun.com/document_detail/426036.html)。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'cn-shanghai' => '华东2（上海）',
                            'cn-hangzhou' => '华东1（杭州）',
                        ],
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
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
                            'Code' => [
                                'description' => '出错时的错误码。',
                                'type' => 'string',
                                'example' => 'InvalidParameter.ProductType',
                            ],
                            'Message' => [
                                'description' => '出错时的错误消息。',
                                'type' => 'string',
                                'example' => 'The parameter ProductType is invalid.',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"Code\\": \\"InvalidParameter.ProductType\\",\\n  \\"Message\\": \\"The parameter ProductType is invalid.\\"\\n}","type":"json"}]',
            'title' => '更新交付组镜像',
            'description' => '><warning>开始更新镜像后，终端用户访问云应用的会话将会断开，请谨慎操作，以免造成终端用户的数据丢失。></warning>'."\n"
                ."\n"
                .'> 更新发布成功后，一般需要等待2分钟左右，变更才会在终端生效。',
        ],
        'ModifyAppInstanceGroupAttribute' => [
            'summary' => '修改交付组的通用策略，包括并发会话数、会话断连保留时长等。',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ProductType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '产品类型。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'CloudApp' => '无影云应用',
                        ],
                        'example' => 'CloudApp',
                    ],
                ],
                [
                    'name' => 'AppInstanceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '交付组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'aig-9ciijz60n4xsv****',
                    ],
                ],
                [
                    'name' => 'AppInstanceGroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '交付组名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '办公应用',
                    ],
                ],
                [
                    'name' => 'SessionTimeout',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话断连保留时长，单位为分钟。终端用户会话断开连接后，会话将保留此处设置的时长，然后再注销。如果始终保留，则填写`-1`。取值范围：-1和3~300。默认值为`15`。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '300',
                        'example' => '15',
                    ],
                ],
                [
                    'name' => 'NodePool',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '资源组对象。',
                        'type' => 'object',
                        'properties' => [
                            'NodePoolId' => [
                                'description' => '资源组ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'rg-ew7va2g1wl3vm****',
                            ],
                            'NodeCapacity' => [
                                'description' => '并发会话数，即单个资源可同时连接的会话数。如果同时连接的会话数过多，可能导致应用的使用体验下降。取值范围因资源规格不同而不同。各资源规格对应的取值范围分别是：'."\n"
                                    ."\n"
                                    .'- appstreaming.general.4c8g：1\\~2；'."\n"
                                    .'- appstreaming.general.8c16g：1\\~4；'."\n"
                                    .'- appstreaming.vgpu.8c16g.4g：1\\~4；'."\n"
                                    .'- appstreaming.vgpu.8c31g.16g：1\\~4；'."\n"
                                    .'- appstreaming.vgpu.14c93g.12g：1\\~6；',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '2',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StoragePolicy',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '存储策略。',
                        'type' => 'object',
                        'properties' => [
                            'StorageTypeList' => [
                                'description' => '存储类型列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '存储类型。',
                                    'type' => 'string',
                                    'required' => false,
                                    'enumValueTitles' => [
                                        'OFF' => '关闭',
                                        'PDS' => '网盘与相册服务（Drive and Photo Service）',
                                    ],
                                    'example' => 'PDS',
                                ],
                                'required' => false,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SecurityPolicy',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '安全策略。',
                        'type' => 'object',
                        'properties' => [
                            'SkipUserAuthCheck' => [
                                'description' => '是否跳过用户授权校验。',
                                'type' => 'boolean',
                                'required' => false,
                                'enumValueTitles' => [
                                    'true' => '不校验',
                                    'false' => '校验 [默认值]',
                                ],
                                'example' => 'false',
                            ],
                            'ResetAfterUnbind' => [
                                'description' => '解绑后是否重置。',
                                'type' => 'boolean',
                                'required' => false,
                                'enumValueTitles' => [
                                    'true' => '重置',
                                    'false' => '不重置',
                                ],
                                'example' => 'true',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PreOpenMode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '预开模式。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'SINGLE_APP' => '单应用预开',
                            'OFF' => '关闭预开[默认值]',
                        ],
                        'example' => 'OFF',
                    ],
                ],
                [
                    'name' => 'PreOpenAppId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '预开应用的AppId。如果`PreOpenMode`参数为`SINGLE_APP`，则`PreOpenAppId`不能为空字符串。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ca-b2ronxxd****'."\n",
                    ],
                ],
                [
                    'name' => 'Network',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '网络配置。'."\n"
                            ."\n"
                            .'> 如需使用该参数，请提交工单。',
                        'type' => 'object',
                        'properties' => [
                            'DomainRules' => [
                                'description' => '域名规则配置。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '域名规则。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Domain' => [
                                            'description' => '域名。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'www.example.com',
                                        ],
                                        'Policy' => [
                                            'description' => '策略值。',
                                            'type' => 'string',
                                            'required' => false,
                                            'enumValueTitles' => [
                                                'allow' => '允许访问',
                                                'block' => '禁止访问',
                                            ],
                                            'example' => 'block',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                        ],
                        'required' => false,
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
                            'Code' => [
                                'description' => '出错时的错误码。',
                                'type' => 'string',
                                'example' => 'InvalidParameter.ProductType',
                            ],
                            'Message' => [
                                'description' => '出错时的错误消息。',
                                'type' => 'string',
                                'example' => 'The parameter ProductType is invalid.',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"Code\\": \\"InvalidParameter.ProductType\\",\\n  \\"Message\\": \\"The parameter ProductType is invalid.\\"\\n}","type":"json"}]',
            'title' => '修改交付组通用策略',
        ],
        'ModifyNodePoolAttribute' => [
            'methods' => [
                'post',
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
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ProductType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品类型',
                        'description' => '产品类型。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'CloudApp' => '无影云应用',
                        ],
                        'example' => 'CloudApp',
                    ],
                ],
                [
                    'name' => 'PoolId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '资源组id',
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-ew7va2g1wl3vm****',
                    ],
                ],
                [
                    'name' => 'NodeCapacity',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '按资源售卖的，单个节点允许运行的应用实例数',
                        'description' => '并发会话数，即单个资源可同时连接的会话数。如果同时连接的会话数过多，可能导致应用的使用体验下降。取值范围因资源规格不同而不同。各资源规格对应的取值范围分别是：'."\n"
                            ."\n"
                            .'- appstreaming.general.4c8g：1\\~2；'."\n"
                            .'- appstreaming.general.8c16g：1\\~4；'."\n"
                            .'- appstreaming.vgpu.8c16g.4g：1\\~4；'."\n"
                            .'- appstreaming.vgpu.8c31g.16g：1\\~4；'."\n"
                            .'- appstreaming.vgpu.14c93g.12g：1\\~6；',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'NodePoolStrategy',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '节点池策略',
                        'description' => '交付组的自动扩缩容策略。',
                        'type' => 'object',
                        'properties' => [
                            'StrategyType' => [
                                'title' => '策略类型，默认为NODE_FIXED',
                                'description' => '弹性模式。'."\n"
                                    ."\n"
                                    .'> '."\n"
                                    .'- `NODE_FIXED`（固定数量）：适用于包年包月资源和按量付费资源。'."\n"
                                    .'- `NODE_SCALING_BY_USAGE`（自动扩缩容）：适用于包年包月资源和按量付费资源。'."\n"
                                    .'- `NODE_SCALING_BY_SCHEDULE`（定时扩缩容）：仅适用于按量付费资源。',
                                'type' => 'string',
                                'required' => false,
                                'enumValueTitles' => [
                                    'NODE_FIXED' => '固定数量（不使用弹性扩缩容）',
                                    'NODE_SCALING_BY_SCHEDULE' => '定时扩缩容',
                                    'NODE_SCALING_BY_USAGE' => '自动扩缩容',
                                ],
                                'example' => 'NODE_FIXED',
                            ],
                            'NodeAmount' => [
                                'description' => '购买资源的数量。取值范围：1~100。'."\n"
                                    ."\n"
                                    .'> '."\n"
                                    .'- 若为包年包月资源，则该参数不可修改。'."\n"
                                    .'- 若为按量付费资源，则当弹性模式（`StrategyType`）为固定数量（`NODE_FIXED`）或自动扩缩容（`NODE_SCALING_BY_USAGE`）时该参数可修改。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1',
                            ],
                            'MaxScalingAmount' => [
                                'title' => '最大弹性数量',
                                'description' => '扩容时最多创建资源的数量。`StrategyType`设为`NODE_SCALING_BY_USAGE`时，该字段必填。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '10',
                            ],
                            'ScalingStep' => [
                                'title' => '弹性扩容步长',
                                'description' => '扩容时每次创建资源的数量。取值范围：1~10。`StrategyType`设为`NODE_SCALING_BY_USAGE`时，该字段必填。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '2',
                            ],
                            'ScalingUsageThreshold' => [
                                'title' => '触发弹性扩容的会话百分比',
                                'description' => '会话使用率上限阈值（%）。当会话使用率超过该阈值时，将触发自动扩容。会话使用率的计算公式为`会话使用率=当前会话数÷(资源总数×资源并发会话数)×100%`。`StrategyType`设为`NODE_SCALING_BY_USAGE`时，该字段必填。取值范围：0\\~100。默认值：85。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '85',
                            ],
                            'ScalingDownAfterIdleMinutes' => [
                                'title' => '资源回收时间',
                                'description' => '无会话连接的资源最多保留的时长（分钟）。当资源内无会话连接时，将按照此处设置的时长开始倒计时，倒计时结束时将完成缩容。取值范围：5~120。默认值：5。但有以下例外情况：'."\n"
                                    ."\n"
                                    .'- 若缩容后将导致重新触发自动扩容，则不会执行缩容，以免导致反复产生缩容、扩容。'."\n"
                                    .'- 若此时间段内，因会话数增加而触发自动扩容，则该资源不会按原计划缩容，倒计时也将重新开始。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '5',
                            ],
                            'StrategyEnableDate' => [
                                'description' => '策略生效日期。格式为：yyyy-MM-dd。该日期必须大于或等于当前日期。`StrategyType`（弹性模式）设为`NODE_SCALING_BY_SCHEDULE`（定时扩缩容）时，该字段必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '2023-01-05',
                            ],
                            'StrategyDisableDate' => [
                                'description' => '策略失效日期。格式为：yyyy-MM-dd。失效日期与生效日期的间隔必须介于7天到1年之间（含7天和1年）。`StrategyType`（弹性模式）设为`NODE_SCALING_BY_SCHEDULE`（定时扩缩容）时，该字段必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '2023-01-19',
                            ],
                            'WarmUp' => [
                                'description' => '是否开启资源预热策略。`StrategyType`（弹性模式）设为`NODE_SCALING_BY_SCHEDULE`（定时扩缩容）时，该字段必填。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                            ],
                            'RecurrenceSchedules' => [
                                'description' => '策略执行周期列表。`StrategyType`（弹性模式）设为`NODE_SCALING_BY_SCHEDULE`（定时扩缩容）时，该字段必填。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '策略执行周期。',
                                    'type' => 'object',
                                    'properties' => [
                                        'RecurrenceType' => [
                                            'description' => '策略执行周期的类型。必须同时指定`RecurrenceType`和`RecurrenceValues`。 ',
                                            'type' => 'string',
                                            'required' => false,
                                            'enumValueTitles' => [
                                                'weekly' => '周（每周指定几天重复执行一次定时任务）',
                                            ],
                                            'example' => 'weekly',
                                        ],
                                        'RecurrenceValues' => [
                                            'description' => '策略执行周期的数值列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '策略执行周期的数值。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'enumValueTitles' => [
                                                    1 => '周一',
                                                    '周二',
                                                    '周三',
                                                    '周四',
                                                    '周五',
                                                    '周六',
                                                    '周日',
                                                ],
                                                'example' => '1',
                                            ],
                                            'required' => false,
                                            'maxItems' => 7,
                                        ],
                                        'TimerPeriods' => [
                                            'description' => '策略执行周期的时间段列表。时间段设置要求：'."\n"
                                                ."\n"
                                                .'- 最多可添加3个时间段。'."\n"
                                                .'- 时间段之间不重叠。'."\n"
                                                .'- 时间段之间的间隔大于或等于5分钟。'."\n"
                                                .'- 单个时间段的时长大于或等于15分钟。'."\n"
                                                .'- 所有时间段累计不跨天。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '策略执行周期的时间段。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'StartTime' => [
                                                        'description' => '开始时间。格式为HH:mm。',
                                                        'type' => 'string',
                                                        'required' => false,
                                                        'example' => '12:00',
                                                    ],
                                                    'EndTime' => [
                                                        'description' => '结束时间。格式为HH:mm。',
                                                        'type' => 'string',
                                                        'required' => false,
                                                        'example' => '15:00',
                                                    ],
                                                    'Amount' => [
                                                        'description' => '资源数量。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'example' => '2',
                                                    ],
                                                ],
                                                'required' => false,
                                            ],
                                            'required' => false,
                                            'maxItems' => 5,
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                                'maxItems' => 7,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BizRegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '交付组所属的地域ID。关于支持的地域详情，请参见[使用限制](https://help.aliyun.com/document_detail/426036.html)。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'cn-shanghai' => '华东2（上海）',
                            'cn-hangzhou' => '华东1（杭州）',
                        ],
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'BaseResult',
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                            'Code' => [
                                'description' => '出错时的错误码。',
                                'type' => 'string',
                                'example' => 'InvalidParameter.PoolId',
                            ],
                            'Message' => [
                                'description' => '出错时的错误消息。',
                                'type' => 'string',
                                'example' => 'The parameter PoolId is invalid.',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"Code\\": \\"InvalidParameter.PoolId\\",\\n  \\"Message\\": \\"The parameter PoolId is invalid.\\"\\n}","type":"json"}]',
            'title' => '修改交付组弹性模式',
            'summary' => '修改交付组的弹性模式，包括固定数量（不使用弹性扩缩容）、定时扩缩容和自动扩缩容。',
            'description' => '您可以设置无影云应用资源的弹性模式：'."\n"
                ."\n"
                .'- 固定数量：不使用弹性扩缩容。'."\n"
                .'- 自动扩缩容：根据连接会话的数量和无会话连接时长实现资源的自动扩缩容。'."\n"
                .'- 定时扩缩容：在指定日期的指定时间段执行资源的定时扩缩容。'."\n"
                ."\n"
                .'请确保在使用该接口前，已充分了解无影云应用的[计费方式和价格](https://help.aliyun.com/document_detail/426039.html)。',
        ],
        'AuthorizeInstanceGroup' => [
            'summary' => '为交付组添加或移除分配用户。只有添加到分配用户的用户可访问云应用。',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'AppInstanceGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '交付组ID。可调用[ListAppInstanceGroup](~~428506~~)接口获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'aig-9ciijz60n4xsv****',
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'ProductType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '产品类型。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'CloudApp' => '无影云应用',
                        ],
                        'example' => 'CloudApp',
                    ],
                ],
                [
                    'name' => 'AuthorizeUserIds',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要添加交付组授权的用户名列表。可设置1\\~100个。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要添加交付组授权的用户名。可调用[DescribeUsers](~~436936~~)接口获取。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'alice',
                        ],
                        'required' => false,
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'UnAuthorizeUserIds',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要移除交付组授权的用户名列表。可设置1\\~100个。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要移除交付组授权的用户名。可调用[DescribeUsers](~~436936~~)接口获取。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'tom',
                        ],
                        'required' => false,
                        'maxItems' => 100,
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
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\"\\n}","type":"json"}]',
            'title' => '为交付组添加或移除分配用户',
            'description' => '> 变更分配用户后，选中的用户将收到相应的通知邮件。一般需要等待2分钟左右，变更才会在终端生效。'."\n",
        ],
        'LogOffAllSessionsInAppInstanceGroup' => [
            'summary' => '注销已开启定时扩缩容策略的按量付费交付组下所有会话。',
            'methods' => [
                'post',
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
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ProductType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品类型',
                        'description' => '产品类型。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'CloudApp' => '无影云应用',
                        ],
                        'example' => 'CloudApp',
                    ],
                ],
                [
                    'name' => 'AppInstanceGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '实例组id',
                        'description' => '交付组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'aig-9ciijz60n4xsv****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'BaseResult',
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '出错时的错误码。',
                                'type' => 'string',
                                'example' => 'InvalidParameter.ProductType',
                            ],
                            'Message' => [
                                'description' => '出错时的错误消息。',
                                'type' => 'string',
                                'example' => 'The parameter ProductType is invalid.',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"InvalidParameter.ProductType\\",\\n  \\"Message\\": \\"The parameter ProductType is invalid.\\",\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\"\\n}","type":"json"}]',
            'title' => '注销交付组下所有会话',
            'description' => '> 本接口仅适用于已启用定时扩缩容策略的按量付费资源交付组，且仅可在定时扩缩容策略中设置的扩缩容时间段以外的时间调用成功。',
        ],
        'DeleteAppInstanceGroup' => [
            'summary' => '删除"资源型-按量付费"形式的交付组。',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'AppInstanceGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '交付组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'aig-9ciijz60n4xsv****',
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'ProductType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '产品类型。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'CloudApp' => '无影云应用',
                        ],
                        'example' => 'CloudApp',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
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
            'title' => '删除按量付费交付组',
            'description' => '> 本接口不支持删除使用包年包月资源的交付组。',
        ],
        'ListAppInstances' => [
            'summary' => '查询交付组内会话实例的详细信息，包括实例ID、实例状态、创建时间、更新时间、会话状态、主网卡公网IP等。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'AppInstanceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '交付组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'aig-4p5f8tj16yb8b****',
                    ],
                ],
                [
                    'name' => 'AppInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ai-azn3kmwruh1vl****',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '应用实例状态列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '应用实例状态。',
                            'type' => 'string',
                            'required' => true,
                            'enumValueTitles' => [
                                'INIT' => '初始化',
                                'STARTING' => '应用启动中',
                                'CLOSING' => '应用停止中',
                                'CLOSED' => '应用已关闭',
                                'RUNNING' => '应用运行中',
                                'IDLE' => '空闲',
                                'BOUND' => '已绑定',
                                'UNAVAILABLE' => '不可用',
                            ],
                            'example' => 'INIT',
                        ],
                        'required' => false,
                        'maxItems' => 100,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'AppInstanceIdList',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '应用实例ID列表，最大长度为100。',
                        'type' => 'array',
                        'items' => [
                            'description' => '应用实例ID。',
                            'type' => 'string',
                            'required' => true,
                            'example' => 'ai-azn3kmwruh1vl****',
                        ],
                        'required' => false,
                        'maxItems' => 100,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的查询结果数量，不可超过`100`。默认值为`20`。建议填写该参数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '20',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需展示的查询结果页码。默认值为`1`。建议填写该参数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'IncludeDeleted',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否查询已删除的实例信息。'."\n"
                            .'该参数为true时AppInstanceIdList的字段必填，否则会报参数错误。',
                        'type' => 'boolean',
                        'required' => false,
                        'enumValueTitles' => [
                            'true' => '查询',
                            'false' => '不查询[默认值]',
                        ],
                        'example' => 'true',
                        'default' => 'false',
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
                            'TotalCount' => [
                                'description' => '查询结果的总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '18',
                            ],
                            'PageSize' => [
                                'description' => '每页的查询结果数量，不可超过`100`。建议填写该参数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'PageNumber' => [
                                'description' => '需展示的查询结果页码。建议填写该参数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'AppInstanceModels' => [
                                'description' => '查询的应用实例列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '查询的应用实例。',
                                    'type' => 'object',
                                    'properties' => [
                                        'AppInstanceId' => [
                                            'description' => '应用实例ID。',
                                            'type' => 'string',
                                            'example' => 'ai-8dl7dzchklmka****',
                                        ],
                                        'AppInstanceGroupId' => [
                                            'description' => '交付组ID。',
                                            'type' => 'string',
                                            'example' => 'aig-dk8p95irqfst9****',
                                        ],
                                        'Status' => [
                                            'description' => '应用实例状态。',
                                            'type' => 'string',
                                            'example' => 'BOUND',
                                        ],
                                        'MainEthPublicIp' => [
                                            'description' => '主网卡公网IP。交付组网络策略（`StrategyType`）为混合模式（`Mixed`）时才返回该值，否则为空。',
                                            'type' => 'string',
                                            'example' => '10.13.13.211',
                                        ],
                                        'GmtCreate' => [
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2023-03-07T20:29:19.000+08:00',
                                        ],
                                        'GmtModified' => [
                                            'description' => '更新时间。',
                                            'type' => 'string',
                                            'example' => '2023-03-07T20:29:19.000+08:00',
                                        ],
                                        'SessionStatus' => [
                                            'description' => '会话连接状态。实例状态为应用运行中（`RUNNING`）时才返回该值，否则为空。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'disconnect' => '已关闭',
                                                'connect' => '已连接',
                                            ],
                                            'example' => 'connect',
                                        ],
                                        'BindInfo' => [
                                            'description' => '实例与用户绑定相关信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'EndUserId' => [
                                                    'description' => '实例绑定的最终用户ID。',
                                                    'type' => 'string',
                                                    'example' => 'app.test',
                                                ],
                                                'UsageDuration' => [
                                                    'description' => '实例使用时长。单位：秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '2000',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"TotalCount\\": 18,\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"AppInstanceModels\\": [\\n    {\\n      \\"AppInstanceId\\": \\"ai-8dl7dzchklmka****\\",\\n      \\"AppInstanceGroupId\\": \\"aig-dk8p95irqfst9****\\",\\n      \\"Status\\": \\"BOUND\\",\\n      \\"MainEthPublicIp\\": \\"10.13.13.211\\",\\n      \\"GmtCreate\\": \\"2023-03-07T20:29:19.000+08:00\\",\\n      \\"GmtModified\\": \\"2023-03-07T20:29:19.000+08:00\\",\\n      \\"SessionStatus\\": \\"connect\\",\\n      \\"BindInfo\\": {\\n        \\"EndUserId\\": \\"app.test\\",\\n        \\"UsageDuration\\": 2000\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询交付组内实例详细信息',
        ],
        'DeleteAppInstances' => [
            'summary' => '删除指定应用实例。',
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
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'ProductType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '产品类型。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'CloudApp' => '无影云应用',
                        ],
                        'example' => 'CloudApp',
                    ],
                ],
                [
                    'name' => 'AppInstanceGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '交付组ID。可通过接口[ListAppInstanceGroup](~~428506~~)获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'aig-9ciijz60n4xsv****',
                    ],
                ],
                [
                    'name' => 'AppInstanceIds',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '应用实例ID列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '应用实例ID。'."\n"
                                ."\n"
                                .'> 仅特定客户可获取到该参数。',
                            'type' => 'string',
                            'required' => true,
                            'example' => 'ai-gbuea*****',
                        ],
                        'required' => true,
                        'maxItems' => 100,
                        'minItems' => 1,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
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
                            'DeleteAppInstanceModels' => [
                                'description' => '实例删除结果列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '实例删除结果。',
                                    'type' => 'object',
                                    'properties' => [
                                        'AppInstanceId' => [
                                            'description' => '应用实例ID。',
                                            'type' => 'string',
                                            'example' => 'ai-gbuea*****'."\n",
                                        ],
                                        'Success' => [
                                            'description' => '是否成功触发删除。',
                                            'type' => 'boolean',
                                            'enumValueTitles' => [
                                                'true' => '触发成功',
                                                'false' => '触发失败',
                                            ],
                                            'example' => 'true',
                                        ],
                                        'Code' => [
                                            'description' => '出错时的错误码。',
                                            'type' => 'string',
                                            'example' => 'InvalidParameter.ProductType',
                                        ],
                                        'Message' => [
                                            'description' => '出错时的错误消息。',
                                            'type' => 'string',
                                            'example' => 'The parameter ProductType is invalid.',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"DeleteAppInstanceModels\\": [\\n    {\\n      \\"AppInstanceId\\": \\"ai-gbuea*****\\\\n\\",\\n      \\"Success\\": true,\\n      \\"Code\\": \\"InvalidParameter.ProductType\\",\\n      \\"Message\\": \\"The parameter ProductType is invalid.\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '删除指定应用实例',
            'description' => '处于初始化状态或空闲状态的实例才能被删除。该接口仅向特定客户开放。',
        ],
        'GetConnectionTicket' => [
            'summary' => '获取云应用连接凭证。',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'ProductType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '产品类型。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'CloudApp' => '云应用',
                            'AndroidCloud' => '安卓云',
                        ],
                        'example' => 'CloudApp',
                    ],
                ],
                [
                    'name' => 'EndUserId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '便捷账号ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'alice',
                    ],
                ],
                [
                    'name' => 'BizRegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            ."\n"
                            .'> 当传入本参数时，仅会在参数指定地域的交付组中分配应用实例。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [],
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '任务ID。'."\n"
                            ."\n"
                            .'> 非首次调用时必填。使用本参数查询任务状态和连接凭证。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '28778acb-a469-4bc0-8e0f****',
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '应用ID。'."\n"
                            ."\n"
                            .'> 首次调用时必填，后续调用时选填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ca-e4s0puhmwi7v****',
                    ],
                ],
                [
                    'name' => 'AppVersion',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '应用版本。传入本参数时，仅会打开参数所指定版本的应用。如果不传入本参数，则会打开已授权的任意版本的应用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'AppStartParam',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '应用启动参数。关于启动参数的获取方法，请参见[如何获取应用安装参数与启动参数](https://help.aliyun.com/zh/wuying-appstreaming/user-guide/create-an-application?#how-to-get-installation-and-startup-para)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/q /n',
                    ],
                ],
                [
                    'name' => 'AppInstanceGroupIdList',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '交付组列表。'."\n"
                            ."\n"
                            .'> - 当传入本参数时，仅会在参数指定的且已授权的交付组中分配应用实例。'."\n"
                            .'> - 当传入`AppInstanceId`或`AppInstancePersistentId `参数时，本参数必填。',
                        'type' => 'array',
                        'items' => [
                            'description' => '交付组ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'aig-4xz0oy8x4ipyv****',
                        ],
                        'required' => false,
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'AppInstancePersistentId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '持久会话ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'p-0bxls9m3cl7s****',
                    ],
                ],
                [
                    'name' => 'AppInstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '应用实例ID。'."\n"
                            ."\n"
                            .'> '."\n"
                            .'> - 当传入本参数时，仅会尝试分配参数所指定的应用实例。'."\n"
                            .'> - 当传入本参数时，必须同时传入`AppInstanceGroupIdList`参数，且`AppInstanceGroupIdList`中交付组ID的数量为1。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ai-1rznfnrvsa99d****',
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
                            'TaskStatus' => [
                                'description' => '任务状态。',
                                'type' => 'string',
                                'enumValueTitles' => [
                                    'Finished' => '已完成',
                                    'Failed' => '已失败',
                                    'Running' => '执行中',
                                ],
                                'example' => 'Running',
                            ],
                            'TaskId' => [
                                'description' => '任务ID。',
                                'type' => 'string',
                                'example' => 'f3d1b31c-605e-4d04-a896****',
                            ],
                            'BizRegionId' => [
                                'description' => '地域ID。',
                                'type' => 'string',
                                'example' => 'cn-hangzhou',
                            ],
                            'Ticket' => [
                                'description' => '连接云应用的凭证。'."\n"
                                    .'> 非首次调用时显示此参数。',
                                'type' => 'string',
                                'example' => 'DQpbRGVza3RvcF0NCkZvcmNlVGxzVHlwZT0xDQpHV1Rva2VuUGFydDE9MDAva09ROW1FUTU3dU****',
                            ],
                            'AppInstanceGroupId' => [
                                'description' => '交付组ID。',
                                'type' => 'string',
                                'example' => 'aig-53fvrq1oan****',
                            ],
                            'AppInstancePersistentId' => [
                                'description' => '持久会话ID。',
                                'type' => 'string',
                                'example' => 'p-0bxls9m3cl7s****',
                            ],
                            'AppInstanceId' => [
                                'description' => '应用实例ID。',
                                'type' => 'string',
                                'example' => 'ai-7ybdeiyoeh5e****',
                            ],
                            'OsType' => [
                                'description' => '操作系统类型。',
                                'type' => 'string',
                                'enumValueTitles' => [
                                    'Windows' => 'Windows操作系统',
                                ],
                                'example' => 'Windows',
                            ],
                            'TenantId' => [
                                'description' => '租户ID（阿里云账号UID）。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '148871678899****',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"TaskStatus\\": \\"Running\\",\\n  \\"TaskId\\": \\"f3d1b31c-605e-4d04-a896****\\",\\n  \\"BizRegionId\\": \\"cn-hangzhou\\",\\n  \\"Ticket\\": \\"DQpbRGVza3RvcF0NCkZvcmNlVGxzVHlwZT0xDQpHV1Rva2VuUGFydDE9MDAva09ROW1FUTU3dU****\\",\\n  \\"AppInstanceGroupId\\": \\"aig-53fvrq1oan****\\",\\n  \\"AppInstancePersistentId\\": \\"p-0bxls9m3cl7s****\\",\\n  \\"AppInstanceId\\": \\"ai-7ybdeiyoeh5e****\\",\\n  \\"OsType\\": \\"Windows\\",\\n  \\"TenantId\\": 0\\n}","type":"json"}]',
            'title' => '获取云应用连接凭证',
            'description' => '本接口需要多次调用（至少两次）才能最终获得连接凭证。'."\n"
                ."\n"
                .'第一次调用，会为指定的便捷账号分配应用实例，并启动应用。返回启动任务ID（`TaskID`）。'."\n"
                ."\n"
                .'后续调用，需要在请求参数中传入`TaskID`参数，查询任务是否结束，当返回的任务状态（`TaskStatus`）为已完成（`Finished`）时，会同时返回连接凭证（`Ticket`）。',
        ],
        'Unbind' => [
            'summary' => '解绑用户和会话。',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ProductType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '产品类型。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'CloudApp' => '无影云应用',
                        ],
                        'example' => 'CloudApp',
                    ],
                ],
                [
                    'name' => 'EndUserId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用户名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'alice',
                    ],
                ],
                [
                    'name' => 'AppInstanceGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '交付组ID。可调用[GetConnectionTicket](https://help.aliyun.com/zh/wuying-appstreaming/developer-reference/api-appstream-center-2021-09-01-getconnectionticket)接口获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'aig-9ciijz60n4xsv****',
                    ],
                ],
                [
                    'name' => 'AppInstancePersistentId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '持久会话ID。可调用[GetConnectionTicket](https://help.aliyun.com/zh/wuying-appstreaming/developer-reference/api-appstream-center-2021-09-01-getconnectionticket)接口获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'p-0bxls9m3cl7s****',
                    ],
                ],
                [
                    'name' => 'AppInstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '会话ID。可调用[GetConnectionTicket](https://help.aliyun.com/zh/wuying-appstreaming/developer-reference/api-appstream-center-2021-09-01-getconnectionticket)接口获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ai-d297eyf83g5ni****',
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
            'title' => '解绑用户和会话',
        ],
        'CreateImageFromAppInstanceGroup' => [
            'summary' => '通过调试交付组创建新镜像。',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'ProductType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '产品类型。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'CloudApp' => '无影云应用',
                        ],
                        'example' => 'CloudApp',
                    ],
                ],
                [
                    'name' => 'AppCenterImageName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '应用镜像名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_name',
                    ],
                ],
                [
                    'name' => 'AppInstanceGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '交付组ID。可调用[ListAppInstanceGroup](~~428506~~)接口获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'aig-9ciijz60n4xsv****',
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
                            'ImageId' => [
                                'description' => '镜像ID。',
                                'type' => 'string',
                                'example' => 'img-bp13mu****',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"ImageId\\": \\"img-bp13mu****\\"\\n}","type":"json"}]',
            'title' => '通过调试交付组创建新镜像',
        ],
        'GetDebugAppInstance' => [
            'summary' => '获取调试应用实例信息。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ProductType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '产品类型。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'CloudApp' => '无影云应用',
                        ],
                        'example' => 'CloudApp',
                    ],
                ],
                [
                    'name' => 'AppInstanceGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '交付组ID。可通过`listAppInstanceGroup`接口获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'aig-9ciijz60n4xsv****',
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
                            'AppInstanceGroupId' => [
                                'description' => '交付组ID。',
                                'type' => 'string',
                                'example' => 'aig-9ciijz60n4xsv****',
                            ],
                            'AppInstanceId' => [
                                'description' => '应用实例ID。',
                                'type' => 'string',
                                'example' => 'ai-7ybdeiyoeh5e****',
                            ],
                            'AppId' => [
                                'description' => '应用ID。',
                                'type' => 'string',
                                'example' => '__DEBUG_APP',
                            ],
                            'UserId' => [
                                'description' => '用户ID。',
                                'type' => 'string',
                                'example' => '__debug__',
                            ],
                            'AuthCode' => [
                                'description' => '授权码。该授权码有效期为3分钟，且无论校验成功或失败，只能被使用一次。当为一个用户生成多个授权码时，只有最后一次生成的有效。',
                                'type' => 'string',
                                'example' => 'e4e169bea1cc48e8afac53**********',
                            ],
                            'AppVersion' => [
                                'description' => '应用版本ID。',
                                'type' => 'string',
                                'example' => '1.1',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"AppInstanceGroupId\\": \\"aig-9ciijz60n4xsv****\\",\\n  \\"AppInstanceId\\": \\"ai-7ybdeiyoeh5e****\\",\\n  \\"AppId\\": \\"__DEBUG_APP\\",\\n  \\"UserId\\": \\"__debug__\\",\\n  \\"AuthCode\\": \\"e4e169bea1cc48e8afac53**********\\",\\n  \\"AppVersion\\": \\"1.1\\"\\n}","type":"json"}]',
            'title' => '获取调试应用实例信息',
            'responseParamsDescription' => '根据获得的返回参数，您可以拼接URL来获取建连信息。URL拼接示例：'."\n"
                ."\n"
                .'`<https://wuying.aliyun.com/appMyBank>?AppId=__DEBUG_APP&AppVersion=1.0&AppInstanceGroupId=aig-5wfetbb7aovy8****&Env=online&AppInstanceId=ai-c7ruhxqww38ws****&AuthCode=acv2j%2BqjU3GAIBVOz33KxdcVyHJ58Dc2N2GC3ZpWNu9Q3zX84cxbNJcPX5enF%2BPePBEgBHxvF28QQcUOjgMk5tHgQKbe%2FUXbIDfg83vN7C3XMzkXo8ByHepfSLQwFLdP4S83zA327ugaB1w1pNnDwhbSvkfRmTA3JOc%2FNEqNs6w%2FePg5NmS4bRhodpYkb4wL****`'."\n"
                ."\n"
                .'> `<https://wuying.aliyun.com/appMyBank>`需根据您的业务实际情况替换。',
        ],
        'ListOtaTask' => [
            'summary' => '查询OTA升级历史记录。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '每页数量',
                        'description' => '每页的查询结果数量。取值范围：1~100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '页码',
                        'description' => '当前展示的查询结果页码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'AppInstanceGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '实例组id',
                        'description' => '交付组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'aig-53fvrq1oanz6c****',
                    ],
                ],
                [
                    'name' => 'OtaType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'ota类型,取值：'."\n"
                            .'Fota ： agent组件更新'."\n"
                            .'ImageUpdate ： 镜像更新'."\n"
                            .'AppUpdate ： 应用更新',
                        'description' => 'OTA升级任务类型。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'Fota' => '无影系统组件更新',
                        ],
                        'example' => 'Fota',
                        'enum' => [
                            'Fota',
                            'ImageUpdate',
                            'AppUpdate',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
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
                            'TotalCount' => [
                                'description' => 'OTA升级任务总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '6',
                            ],
                            'PageSize' => [
                                'title' => '每页数量',
                                'description' => '每页的查询结果数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'PageNumber' => [
                                'title' => '页码',
                                'description' => '当前展示的查询结果页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'TaskList' => [
                                'title' => 'AppInstanceGroupModels',
                                'description' => 'OTA升级任务列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'OTA升级任务。',
                                    'type' => 'object',
                                    'properties' => [
                                        'OtaVersion' => [
                                            'title' => 'ota版本，格式举例：0.0.1-R-20220708.110604',
                                            'description' => 'OTA版本。',
                                            'type' => 'string',
                                            'example' => '0.0.1-R-20220708.110604',
                                        ],
                                        'TaskDisplayStatus' => [
                                            'title' => '任务展示状态',
                                            'description' => '任务状态。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'FAILED' => '升级失败',
                                                'RUNNING' => '升级中',
                                                'TERMINATED' => '升级停止',
                                                'PART_FINISHED' => '升级成功',
                                                'STANDBY' => '等待升级',
                                                'FINISHED' => '升级成功',
                                            ],
                                            'example' => 'RUNNING',
                                            'enum' => [
                                                'STANDBY',
                                                'RUNNING',
                                                'FAILED',
                                                'TERMINATED',
                                                'FINISHED',
                                                'PART_FINISHED',
                                            ],
                                        ],
                                        'TaskStartTime' => [
                                            'title' => '任务开始时间，ISO-8601格式',
                                            'description' => '任务开始时间，ISO 8601格式。',
                                            'type' => 'string',
                                            'format' => 'iso8601',
                                            'example' => '2022-08-04T14:36:00+08:00',
                                        ],
                                        'TaskId' => [
                                            'title' => '任务id',
                                            'description' => '任务ID。',
                                            'type' => 'string',
                                            'example' => 'ota-be7jzm29wrrz5****',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"TotalCount\\": 6,\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"TaskList\\": [\\n    {\\n      \\"OtaVersion\\": \\"0.0.1-R-20220708.110604\\",\\n      \\"TaskDisplayStatus\\": \\"RUNNING\\",\\n      \\"TaskStartTime\\": \\"2022-08-04T14:36:00+08:00\\",\\n      \\"TaskId\\": \\"ota-be7jzm29wrrz5****\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询OTA升级历史记录',
        ],
        'GetOtaTaskByTaskId' => [
            'summary' => '查询OTA升级任务明细，包括可升级版本、版本说明等。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'TaskId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'ota任务id',
                        'description' => 'OTA升级任务ID。可调用[ListAppInstanceGroup](~~428506~~)获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ota-be7jzm29wrrz5****',
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
                            'Code' => [
                                'title' => '错误码',
                                'description' => '出错时的错误码。',
                                'type' => 'string',
                                'example' => 'OtaTask.Running',
                            ],
                            'Message' => [
                                'title' => '提示',
                                'description' => '出错时的错误消息。',
                                'type' => 'string',
                                'example' => 'The task is running and cannot be sumitted.',
                            ],
                            'ReleaseNote' => [
                                'title' => '版本说明',
                                'description' => '版本说明，描述OTA升级的内容。',
                                'type' => 'string',
                                'example' => '测试升级',
                            ],
                            'OtaVersion' => [
                                'title' => '版本号',
                                'description' => 'OTA版本。',
                                'type' => 'string',
                                'example' => '0.0.1-R-20220708.110604',
                            ],
                            'TaskStartTime' => [
                                'title' => '任务执行时间，ISO-8601格式',
                                'description' => '任务执行时间，ISO 8601格式。',
                                'type' => 'string',
                                'format' => 'iso8601',
                                'example' => '2022-08-04T14:36:00+08:00',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"Code\\": \\"OtaTask.Running\\",\\n  \\"Message\\": \\"The task is running and cannot be sumitted.\\",\\n  \\"ReleaseNote\\": \\"测试升级\\",\\n  \\"OtaVersion\\": \\"0.0.1-R-20220708.110604\\",\\n  \\"TaskStartTime\\": \\"2022-08-04T14:36:00+08:00\\"\\n}","type":"json"}]',
            'title' => '查询OTA升级任务明细',
        ],
        'ApproveOtaTask' => [
            'summary' => '设置OTA升级的执行时间。',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'AppInstanceGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '实例组id',
                        'description' => '交付组ID。可调用[ListAppInstanceGroup](~~428506~~)接口获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'aig-9ciijz60n4xsv****',
                    ],
                ],
                [
                    'name' => 'BizRegionId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '请求发起者所在地域',
                        'description' => '交付组所属的地域ID。可以调用[ListRegions](~~428500~~)查询无影云应用支持的地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [],
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'ota任务id',
                        'description' => 'OTA升级任务ID。可调用[ListAppInstanceGroup](~~428506~~)获取。'."\n"
                            ."\n"
                            .'> 每次调用`ApproveOtaTask`成功后，都会导致`TaskId`变更。因此，再次调用本接口之前，请重新调用`ListAppInstanceGroup`以获取最新的`TaskId`。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ota-be7jzm29wrrz5****',
                    ],
                ],
                [
                    'name' => 'OtaType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'ota类型,取值：'."\n"
                            .'Fota ： agent组件更新'."\n"
                            .'ImageUpdate ： 镜像更新'."\n"
                            .'AppUpdate ： 应用更新',
                        'description' => 'OTA升级任务类型。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'Fota' => '无影系统组件更新',
                            'AppUpdate' => '(未知)',
                            'ImageUpdate' => '(未知)',
                        ],
                        'example' => 'Fota',
                        'enum' => [
                            'Fota',
                            'ImageUpdate',
                            'AppUpdate',
                        ],
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '开始时间，iso8601格式',
                        'description' => 'OTA升级任务的开始时间。按照ISO 8601格式填写。',
                        'type' => 'string',
                        'format' => 'iso8601',
                        'required' => true,
                        'example' => '2022-08-04T14:36:00+08:00',
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
                            'Code' => [
                                'description' => '执行结果。返回`success`表示成功，否则将返回错误信息。',
                                'type' => 'string',
                                'example' => 'OtaTask.Running',
                            ],
                            'Message' => [
                                'description' => '错误信息。当`Code`为`success`时，不返回该参数。',
                                'type' => 'string',
                                'example' => 'The task is running and cannot be sumitted.',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"Code\\": \\"OtaTask.Running\\",\\n  \\"Message\\": \\"The task is running and cannot be sumitted.\\"\\n}","type":"json"}]',
            'title' => '设置OTA升级执行时间',
        ],
        'CancelOtaTask' => [
            'summary' => '取消OTA升级任务。',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'AppInstanceGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '实例组id',
                        'description' => '交付组ID。可调用[ListAppInstanceGroup](~~428506~~)接口获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'aig-53fvrq1oanz6c****',
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '任务id',
                        'description' => 'OTA升级任务ID。可调用[ListAppInstanceGroup](~~428506~~)获取。'."\n"
                            ."\n"
                            .'> 每次调用`ApproveOtaTask`成功后，都会导致`TaskId`变更。因此，再次调用本接口之前，请重新调用`ListAppInstanceGroup`以获取最新的`TaskId`。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ota-be7jzm29wrrz5****',
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
                            'Code' => [
                                'description' => '执行结果。返回`success`表示成功，否则将返回错误信息。',
                                'type' => 'string',
                                'example' => 'OtaTask.Running',
                            ],
                            'Message' => [
                                'description' => '错误信息。当`Code`为`success`时，不返回该参数。',
                                'type' => 'string',
                                'example' => 'The task is running and cannot be sumitted.',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"Code\\": \\"OtaTask.Running\\",\\n  \\"Message\\": \\"The task is running and cannot be sumitted.\\"\\n}","type":"json"}]',
            'title' => '取消OTA升级任务',
        ],
        'ListTenantConfig' => [
            'methods' => [
                'post',
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
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'PlainResult<ListAliUserPropertyModel>',
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                            'TenantConfigModel' => [
                                'description' => '用户配置信息。',
                                'type' => 'object',
                                'properties' => [
                                    'AppInstanceGroupExpireRemind' => [
                                        'description' => '是否开启资源到期提醒。',
                                        'type' => 'boolean',
                                        'enumValueTitles' => [
                                            'true' => '开启',
                                            'false' => '不开启',
                                        ],
                                        'example' => 'true',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"TenantConfigModel\\": {\\n    \\"AppInstanceGroupExpireRemind\\": true\\n  }\\n}","type":"json"}]',
            'title' => '查询管理员账号配置信息',
            'summary' => '查询管理员账号配置信息，例如是否已开启资源到期提醒。',
        ],
        'ModifyTenantConfig' => [
            'methods' => [
                'post',
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
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'AppInstanceGroupExpireRemind',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否开启资源到期提醒。',
                        'type' => 'boolean',
                        'required' => false,
                        'enumValueTitles' => [
                            'true' => '开启',
                            'false' => '不开启',
                        ],
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'BaseResult',
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\"\\n}","type":"json"}]',
            'title' => '修改管理员账号配置信息',
            'summary' => '修改管理员账号配置信息，例如是否开启资源到期提醒。',
        ],
        'MigrateSessionPackage' => [
            'summary' => '支持会话包转移功能，将已付费会话包从 源项目 迁移到 目标项目，源项目和目标项目不可同时为空。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'SourceProjectId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '当前绑定SessionPackageId的源项目id，当SessionPackageId没有绑定项目时，这里请不要填写数据',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'p-xxxxxx123x4312345',
                    ],
                ],
                [
                    'name' => 'DestProjectId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'SessionPackageId将要绑定的目标项目id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'p-xxxxxx123x4312367',
                    ],
                ],
                [
                    'name' => 'SessionPackageId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '会话包的唯一id，请确保这个会话包处于可用状态。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'tp-xxxxxxxxxxxxxxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回的响应对象。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E25FC620-6B6F-12D2-A992-AD8727DC****',
                            ],
                            'Message' => [
                                'description' => '接口请求返回的信息。',
                                'type' => 'string',
                                'example' => '会话包不处于可用状态',
                            ],
                            'Code' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'NO_DATA',
                            ],
                            'Success' => [
                                'description' => '请求成功与否，成功返回为true，失败为false',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E25FC620-6B6F-12D2-A992-AD8727DC****\\",\\n  \\"Message\\": \\"会话包不处于可用状态\\",\\n  \\"Code\\": \\"NO_DATA\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '会话包转移',
        ],
        'AskSessionPackageRenewPrice' => [
            'summary' => '查询会话包续费价格',
            'methods' => [
                'get',
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
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'SessionPackageId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话包ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'tp-***********',
                    ],
                ],
                [
                    'name' => 'PeriodUnit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '续费时间单位',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'Month' => 'Month',
                            'Year' => 'Year',
                        ],
                        'example' => 'Month',
                    ],
                ],
                [
                    'name' => 'Period',
                    'in' => 'query',
                    'schema' => [
                        'description' => '续费时长',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '50158E8B-992E-1286-B174-**********'."\n",
                            ],
                            'Data' => [
                                'description' => '返回数据集',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回数据对象',
                                    'type' => 'object',
                                    'properties' => [
                                        'Price' => [
                                            'description' => '返回价格对象',
                                            'type' => 'object',
                                            'properties' => [
                                                'OriginalPrice' => [
                                                    'description' => '原始价格',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '2000.0',
                                                ],
                                                'DiscountPrice' => [
                                                    'description' => '折扣价格',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '0.0',
                                                ],
                                                'TradePrice' => [
                                                    'description' => '实际交易价格',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '2000.0',
                                                ],
                                                'Currency' => [
                                                    'description' => '币种',
                                                    'type' => 'string',
                                                    'example' => 'CNY',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"50158E8B-992E-1286-B174-**********\\\\n\\",\\n  \\"Data\\": [\\n    {\\n      \\"Price\\": {\\n        \\"OriginalPrice\\": 2000,\\n        \\"DiscountPrice\\": 0,\\n        \\"TradePrice\\": 2000,\\n        \\"Currency\\": \\"CNY\\"\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '会话包续费询价',
            'description' => '请确保在使用该接口前，已充分了解无影云Flow的[计费方式和价格](https://www.aliyun.com/price/product?spm=openapi-amp.newDocPublishment.0.0.6506281fNVbAf4#/ecs/detail)。',
        ],
        'RenewSessionPackage' => [
            'summary' => '为已购买未超期的会话包续费',
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
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'SessionPackageId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话包ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'tp-****',
                    ],
                ],
                [
                    'name' => 'PeriodUnit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '续费时间单位',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'Month' => 'Month',
                            'Year' => 'Year',
                        ],
                        'example' => 'Month',
                    ],
                ],
                [
                    'name' => 'Period',
                    'in' => 'query',
                    'schema' => [
                        'description' => '续费时长',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回信息集合',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '50158E8B-992E-1286-B174-**********',
                            ],
                            'Code' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '出错时的错误信息',
                                'type' => 'string',
                                'example' => 'There is a missing parameter.',
                            ],
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'SessionPackageId' => [
                                'description' => '续费成功则返回会话包ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '22983172******',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"50158E8B-992E-1286-B174-**********\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"There is a missing parameter.\\",\\n  \\"Success\\": \\"success\\",\\n  \\"SessionPackageId\\": 0\\n}","type":"json"}]',
            'title' => '会话包续费',
            'description' => '相当于控制台的续费按钮',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'appstream-center.aliyuncs.com',
        ],
    ],
];
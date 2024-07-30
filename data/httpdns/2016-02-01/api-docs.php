<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Httpdns',
        'version' => '2016-02-01',
    ],
    'directories' => [
        [
            'id' => 0,
            'title' => '其它',
            'type' => 'directory',
            'children' => [
                'AddDomain',
                'DeleteDomain',
                'DescribeDomains',
                'GetAccountInfo',
                'GetResolveCountSummary',
                'GetResolveStatistics',
                'ListDomains',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'AddDomain' => [
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
                    'name' => 'AccountId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'HTTPDNS账户ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123456',
                        'default' => '',
                    ],
                ],
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '域名名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.example.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'DomainName' => [
                                'description' => '域名名称。',
                                'type' => 'string',
                                'example' => 'www.example.com',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'ADA27798-6911-4B06-AF34-53F62F62XXXX',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"DomainName\\": \\"www.example.com\\",\\n  \\"RequestId\\": \\"ADA27798-6911-4B06-AF34-53F62F62XXXX\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<AddDomainResponse>\\n    <RequestId>ADA27798-6911-4B06-AF34-53F62F624D7B</RequestId>\\n    <DomainName>www.aliyun.com</DomainName>\\n</AddDomainResponse>","errorExample":""}]',
            'title' => '添加域名',
            'summary' => '根据传入参数添加域名。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteDomain' => [
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
                    'name' => 'AccountId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'HTTPDNS账户ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '12****',
                        'default' => '',
                    ],
                ],
                [
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '域名名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.example.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'DomainName' => [
                                'description' => '域名名称。',
                                'type' => 'string',
                                'example' => 'www.example.com',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FA8C2599-362D-4113-8FB4-E88A40C2****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"DomainName\\": \\"www.example.com\\",\\n  \\"RequestId\\": \\"FA8C2599-362D-4113-8FB4-E88A40C2****\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<DeleteDomainResponse>\\n    <RequestId>FA8C2599-362D-4113-8FB4-E88A40C2639D</RequestId>\\n    <DomainName>www.aliyun.com</DomainName>\\n</DeleteDomainResponse>","errorExample":""}]',
            'title' => '删除域名',
            'summary' => '根据传入参数删除域名。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDomains' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'AccountId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'HTTPDNS账户ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123456',
                        'default' => '',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页数，起始值为1，默认为1。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时设置的每页行数，最大值100，默认为20。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '20',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'PageSize' => [
                                'description' => '分页大小。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '20',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A6B3BB61-69CB-50E0-9DC0-0C1658D44A47',
                            ],
                            'PageNumber' => [
                                'description' => '当前页数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'description' => '总条目数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '12',
                            ],
                            'Domains' => [
                                'type' => 'object',
                                'properties' => [
                                    'Domain' => [
                                        'description' => '域名列表信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '域名信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'DomainName' => [
                                                    'description' => '域名。',
                                                    'type' => 'string',
                                                    'example' => 'www.aliyun.com',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageSize\\": 20,\\n  \\"RequestId\\": \\"A6B3BB61-69CB-50E0-9DC0-0C1658D44A47\\",\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 12,\\n  \\"Domains\\": {\\n    \\"Domain\\": [\\n      {\\n        \\"DomainName\\": \\"www.aliyun.com\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDomainsResponse>\\n    <PageSize>20</PageSize>\\n    <RequestId>A6B3BB61-69CB-50E0-9DC0-0C1658D44A47</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <TotalCount>12</TotalCount>\\n    <Domains>\\n        <DomainName>www.aliyun.com</DomainName>\\n    </Domains>\\n</DescribeDomainsResponse>","errorExample":""}]',
            'title' => '获取用户的域名列表',
            'summary' => '根据传入参数列出用户的域名。',
        ],
        'GetAccountInfo' => [
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
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '50F9C40E-188D-4208-BE2C-74271337****',
                            ],
                            'AccountInfo' => [
                                'description' => '当前账户信息。',
                                'type' => 'object',
                                'properties' => [
                                    'SignSecret' => [
                                        'description' => '签名密钥。',
                                        'type' => 'string',
                                        'example' => '50F9C40E****',
                                    ],
                                    'SignedCount' => [
                                        'description' => '鉴权接口请求数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '611523',
                                    ],
                                    'PackageCount' => [
                                        'description' => '资源包数（历史遗留字段，当前恒为0）',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'MonthResolveCount' => [
                                        'description' => '本月HTTP类型解析总量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '9927326',
                                    ],
                                    'AccountId' => [
                                        'description' => '账户ID。',
                                        'type' => 'string',
                                        'example' => '1337****',
                                    ],
                                    'UnsignedEnabled' => [
                                        'description' => '非鉴权接口是否开启。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'UserStatus' => [
                                        'description' => 'HTTPDNS账号状态编码，1-账号正常，2-账号欠费，3-账号停服',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'UnsignedCount' => [
                                        'description' => '非鉴权接口请求数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1523',
                                    ],
                                    'MonthHttpsResolveCount' => [
                                        'description' => '本月HTTPS类型解析总量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '3',
                                    ],
                                    'MonthFreeCount' => [
                                        'description' => '每月免费解析量。'."\n"
                                            ."\n"
                                            .'即您每个自然月可以免费调用HTTPDNS服务进行域名解析的次数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1500000',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"50F9C40E-188D-4208-BE2C-74271337****\\",\\n  \\"AccountInfo\\": {\\n    \\"SignSecret\\": \\"50F9C40E****\\",\\n    \\"SignedCount\\": 611523,\\n    \\"PackageCount\\": 0,\\n    \\"MonthResolveCount\\": 9927326,\\n    \\"AccountId\\": \\"1337****\\",\\n    \\"UnsignedEnabled\\": true,\\n    \\"UserStatus\\": 1,\\n    \\"UnsignedCount\\": 1523,\\n    \\"MonthHttpsResolveCount\\": 3,\\n    \\"MonthFreeCount\\": 1500000\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetAccountInfoResponse>\\n    <RequestId>50F9C40E-188D-4208-BE2C-74271337****</RequestId>\\n    <AccountInfo>\\n        <SignSecret>50F9C40E****</SignSecret>\\n        <SignedCount>611523</SignedCount>\\n        <PackageCount>0</PackageCount>\\n        <MonthResolveCount>9927326</MonthResolveCount>\\n        <AccountId>1337****</AccountId>\\n        <UnsignedEnabled>true</UnsignedEnabled>\\n        <UserStatus>1</UserStatus>\\n        <UnsignedCount>1523</UnsignedCount>\\n        <MonthHttpsResolveCount>3</MonthHttpsResolveCount>\\n        <MonthFreeCount>1500000</MonthFreeCount>\\n    </AccountInfo>\\n</GetAccountInfoResponse>","errorExample":""}]',
            'title' => '获取账户信息',
            'summary' => '获取当前HTTPDNS账户信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetResolveCountSummary' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Granularity',
                    'in' => 'query',
                    'schema' => [
                        'description' => '统计数据粒度，可选值有**day**和**month**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'day',
                    ],
                ],
                [
                    'name' => 'TimeSpan',
                    'in' => 'query',
                    'schema' => [
                        'description' => '统计时间跨度。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '7',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '请求结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '3106FFF3-3612-542A-B2CD-3CF4CD48****',
                            ],
                            'ResolveSummary' => [
                                'description' => '统计结果。',
                                'type' => 'object',
                                'properties' => [
                                    'Https6' => [
                                        'description' => 'ipv6 https解析次数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '123',
                                    ],
                                    'Http6' => [
                                        'description' => 'ipv6 http解析次数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '123',
                                    ],
                                    'Http' => [
                                        'description' => 'ipv4 http解析次数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '123',
                                    ],
                                    'Https' => [
                                        'description' => 'ipv4 https解析次数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '123',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3106FFF3-3612-542A-B2CD-3CF4CD48****\\",\\n  \\"ResolveSummary\\": {\\n    \\"Https6\\": 123,\\n    \\"Http6\\": 123,\\n    \\"Http\\": 123,\\n    \\"Https\\": 123\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetResolveCountSummaryResponse>\\n    <RequestId>3106FFF3-3612-542A-B2CD-3CF4CD48A4A5</RequestId>\\n    <ResolveSummary>\\n        <Https6>123</Https6>\\n        <Http6>123</Http6>\\n        <Http>123</Http>\\n        <Https>123</Https>\\n    </ResolveSummary>\\n</GetResolveCountSummaryResponse>","errorExample":""}]',
            'title' => '获取解析及计费统计信息',
            'summary' => '获取解析及计费统计信息，对应控制台中“计费相关”的页面功能。',
        ],
        'GetResolveStatistics' => [
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
                    'name' => 'DomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要获取统计信息的域名。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'www.aliyun.com',
                    ],
                ],
                [
                    'name' => 'Granularity',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据粒度，可选值：**day**和**month**。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'month',
                    ],
                ],
                [
                    'name' => 'TimeSpan',
                    'in' => 'query',
                    'schema' => [
                        'description' => '时间片长度。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'ProtocolName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '解析的协议类型，可选值：http（默认）和https。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https',
                        'default' => 'http',
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
                                'example' => '50F9C40E-188D-B00B-BE2C-7427E531****',
                            ],
                            'DataPoints' => [
                                'type' => 'object',
                                'properties' => [
                                    'DataPoint' => [
                                        'description' => '数据点。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Time' => [
                                                    'description' => '解析时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1488297600',
                                                ],
                                                'Count' => [
                                                    'description' => '请求数。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '9703',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"50F9C40E-188D-B00B-BE2C-7427E531****\\",\\n  \\"DataPoints\\": {\\n    \\"DataPoint\\": [\\n      {\\n        \\"Time\\": 1488297600,\\n        \\"Count\\": 9703\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<GetResolveStatisticsResponse>\\n    <RequestId>50F9C40E-1816-B00B-BE2C-7427E5316481</RequestId>\\n    <DataPoints>\\n        <DataPoint>\\n            <Time>1488297600</Time>\\n            <Count>9703</Count>\\n        </DataPoint>\\n        <DataPoint>\\n            <Time>1490976000</Time>\\n            <Count>9390</Count>\\n        </DataPoint>\\n    </DataPoints>\\n</GetResolveStatisticsResponse>","errorExample":""}]',
            'title' => '获取解析统计信息',
            'summary' => '获取某个域名解析请求的统计信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListDomains' => [
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
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页数，起始值：1，默认值：1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时设置的每页行数，最大值为：100，默认值：20。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '20',
                        'default' => '20',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'PageSize' => [
                                'description' => '本次查询获取的域名数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '5',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '50F9C40E-188D-4208-BE2C-7427E531****',
                            ],
                            'PageNumber' => [
                                'description' => '域名列表总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'description' => '域名列表总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '18',
                            ],
                            'DomainInfos' => [
                                'type' => 'object',
                                'properties' => [
                                    'DomainInfo' => [
                                        'description' => '本次获取的域名列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ResolvedHttps6' => [
                                                    'description' => 'HTTPS-IPv6解析次数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '20',
                                                ],
                                                'Resolved' => [
                                                    'description' => 'HTTP-IPv4解析次数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '10',
                                                ],
                                                'Resolved6' => [
                                                    'description' => 'HTTP-IPv6解析次数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '20',
                                                ],
                                                'DomainName' => [
                                                    'description' => '域名名称。',
                                                    'type' => 'string',
                                                    'example' => 'www.example.com',
                                                ],
                                                'ResolvedHttps' => [
                                                    'description' => 'HTTPS-IPv4解析次数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '10',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageSize\\": 5,\\n  \\"RequestId\\": \\"50F9C40E-188D-4208-BE2C-7427E531****\\",\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 18,\\n  \\"DomainInfos\\": {\\n    \\"DomainInfo\\": [\\n      {\\n        \\"ResolvedHttps6\\": 20,\\n        \\"Resolved\\": 10,\\n        \\"Resolved6\\": 20,\\n        \\"DomainName\\": \\"www.example.com\\",\\n        \\"ResolvedHttps\\": 10\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<ListDomainsResponse>\\n    <RequestId>50F9C40E-188D-4208-BE2C-7427E5316481</RequestId>\\n    <TotalCount>18</TotalCount>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>5</PageSize>\\n    <DomainInfos>\\n        <DomainInfo>\\n            <DomainName>www.aliyun.com</DomainName>\\n            <Resolved>10</Resolved>\\n            <ResolvedHttps>20</ResolvedHttps>\\n        </DomainInfo>\\n        <DomainInfo>\\n            <DomainName>bbs.aliyun.com</DomainName>\\n            <Resolved>10</Resolved>\\n            <ResolvedHttps>20</ResolvedHttps>\\n        </DomainInfo>\\n        <DomainInfo>\\n            <DomainName>www.taobao.com</DomainName>\\n            <Resolved>10</Resolved>\\n            <ResolvedHttps>20</ResolvedHttps>\\n        </DomainInfo>\\n        <DomainInfo>\\n            <DomainName>www.tmall.com</DomainName>\\n            <Resolved>10</Resolved>\\n            <ResolvedHttps>20</ResolvedHttps>\\n        </DomainInfo>\\n        <DomainInfo>\\n            <DomainName>alipay.com</DomainName>\\n            <Resolved>10</Resolved>\\n            <ResolvedHttps>20</ResolvedHttps>\\n        </DomainInfo>\\n    </DomainInfos>\\n</ListDomainsResponse>","errorExample":""}]',
            'title' => '获取用户域名及解析次数',
            'summary' => '根据传入参数列出用户的域名及解析次数。',
            'description' => '# 接口说明'."\n"
                ."\n"
                .'- 查询可以指定页码（PageNumber）和每页的数量（PageSize）。'."\n"
                .'- 域名列表的默认排序方式是按照域名添加的时间从新到旧排序的。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'httpdns.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'httpdns-api.aliyuncs.com',
        ],
    ],
];
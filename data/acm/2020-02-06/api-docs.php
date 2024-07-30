<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'acm',
        'version' => '2020-02-06',
    ],
    'directories' => [
        [
            'id' => 56412,
            'title' => '数据',
            'type' => 'directory',
            'children' => [
                'DescribeImportFileUrl',
                'DescribeTraceByConfiguration',
            ],
        ],
        [
            'id' => 56415,
            'title' => '命名空间',
            'type' => 'directory',
            'children' => [
                'CreateNamespace',
                'DeleteNamespace',
                'UpdateNamespace',
                'DescribeNamespace',
                'DescribeNamespaces',
                'DescribeNamespacesWithCreate',
            ],
        ],
        [
            'id' => 56422,
            'title' => '配置',
            'type' => 'directory',
            'children' => [
                'CreateConfiguration',
                'CloneConfiguration',
                'DeleteConfiguration',
                'DeployConfiguration',
                'BatchExportConfigurations',
                'BatchImportConfigurations',
                'DescribeConfiguration',
                'CheckConfigurationClone',
                'CheckConfigurationExport',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'DescribeImportFileUrl' => [
            'path' => '/diamond-ops/pop/batch/importFileUrl',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ContentType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'FileUrl' => [
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Code' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                401 => [
                    [
                        'errorCode' => 'ServiceDisabled',
                        'errorMessage' => 'You have not activated the ACM service.',
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'DescribeTraceByConfiguration' => [
            'path' => '/diamond-ops/pop/trace/getByConfiguration',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DataId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'Group',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'StartTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EndTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Traces' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Timestamp' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'EventGroups' => [
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'EventType' => [
                                                        'type' => 'string',
                                                    ],
                                                    'EventDetails' => [
                                                        'type' => 'array',
                                                        'items' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Type' => [
                                                                    'type' => 'string',
                                                                ],
                                                                'Delay' => [
                                                                    'type' => 'string',
                                                                ],
                                                                'Ts' => [
                                                                    'type' => 'string',
                                                                ],
                                                                'ResponseIp' => [
                                                                    'type' => 'string',
                                                                ],
                                                                'Event' => [
                                                                    'type' => 'string',
                                                                ],
                                                                'Ext' => [
                                                                    'type' => 'string',
                                                                ],
                                                                'DataId' => [
                                                                    'type' => 'string',
                                                                ],
                                                                'RequestIp' => [
                                                                    'type' => 'string',
                                                                ],
                                                                'LogDate' => [
                                                                    'type' => 'string',
                                                                ],
                                                                'HandleIp' => [
                                                                    'type' => 'string',
                                                                ],
                                                                'Group' => [
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
                            'Code' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                401 => [
                    [
                        'errorCode' => 'ServiceDisabled',
                        'errorMessage' => 'You have not activated the ACM service.',
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'CreateNamespace' => [
            'path' => '/diamond-ops/pop/namespace',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '命名空间名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '测试环境',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '描述',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '6F7CC94A-7711-4873-8848-****',
                            ],
                            'NamespaceId' => [
                                'description' => '命名空间ID',
                                'type' => 'string',
                                'example' => '3115d2bf-1f44-47bf-a855-****',
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'NamespaceNameInvalid',
                        'errorMessage' => 'The specified namespace is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ServiceDisabled',
                        'errorMessage' => 'You have not activated the ACM service.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'NamespaceQuotaExceed',
                        'errorMessage' => 'The maximum number of namespaces is exceeded.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"6F7CC94A-7711-4873-8848-****\\",\\n  \\"NamespaceId\\": \\"3115d2bf-1f44-47bf-a855-****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>6F7CC94A-7711-4873-8848-FCE2F1795625</RequestId>\\n<Message>Success</Message>\\n<Code>OK</Code>","errorExample":""}]',
            'title' => '创建命名空间',
            'summary' => '创建命名空间。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteNamespace' => [
            'path' => '/diamond-ops/pop/namespace',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '112300d2-ca66-42ba-b706-****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '描述',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '611CC94A-7711-4873-8848-****',
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                401 => [
                    [
                        'errorCode' => 'ServiceDisabled',
                        'errorMessage' => 'You have not activated the ACM service.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'NamespacePermissionDenied',
                        'errorMessage' => 'You are not authorized to operate the namespace.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'NamespaceNotExists',
                        'errorMessage' => 'The specified namespace does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'NamespaceInUsage',
                        'errorMessage' => 'The specified namespace is being used.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"611CC94A-7711-4873-8848-****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>612CC94A-7711-4873-8848-****</RequestId>\\n<Message>Success</Message>\\n<Code>OK</Code>","errorExample":""}]',
            'title' => '删除命名空间',
            'summary' => '删除命名空间。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateNamespace' => [
            'path' => '/diamond-ops/pop/namespace',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'NamespaceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '命名空间ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '710b2fbe-0da3-4388-****',
                    ],
                ],
                [
                    'name' => 'NamespaceName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '命名空间名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '测试环境',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '响应描述',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '51193061-ED0D-4EC6-B160-****',
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'NamespaceNameInvalid',
                        'errorMessage' => 'The specified namespace is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ServiceDisabled',
                        'errorMessage' => 'You have not activated the ACM service.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'NamespacePermissionDenied',
                        'errorMessage' => 'You are not authorized to operate the namespace.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"51193061-ED0D-4EC6-B160-****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>5E493061-ED0D-4EC6-B160-C069FCBF7941</RequestId>\\n<Message>Success</Message>\\n<Code>OK</Code>","errorExample":""}]',
            'title' => '更新命名空间',
            'summary' => '更新命名空间。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeNamespace' => [
            'path' => '/diamond-ops/pop/namespace',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '3115d2bf-1f44-47bf-a855-****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '响应描述',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '3116581E-C664-4D3A-A055-****',
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Namespace' => [
                                'description' => '命名空间',
                                'type' => 'object',
                                'properties' => [
                                    'SecretKey' => [
                                        'description' => 'ACM专用SecretKey（即将废弃，不建议使用）',
                                        'type' => 'string',
                                        'example' => '6/eQ0****',
                                    ],
                                    'AccessKey' => [
                                        'description' => 'ACM专用AccessKey（即将废弃，不建议使用）',
                                        'type' => 'string',
                                        'example' => '2c017****',
                                    ],
                                    'Endpoint' => [
                                        'description' => '连接点',
                                        'type' => 'string',
                                        'example' => 'acm.aliyun.com',
                                    ],
                                    'Name' => [
                                        'description' => '命名空间名称',
                                        'type' => 'string',
                                        'example' => '测试环境',
                                    ],
                                    'RegionId' => [
                                        'description' => '区域',
                                        'type' => 'string',
                                        'example' => 'cn-shanghai',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                401 => [
                    [
                        'errorCode' => 'ServiceDisabled',
                        'errorMessage' => 'You have not activated the ACM service.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'NamespacePermissionDenied',
                        'errorMessage' => 'You are not authorized to operate the namespace.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'NamespaceNotExists',
                        'errorMessage' => 'The specified namespace does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"3116581E-C664-4D3A-A055-****\\",\\n  \\"Namespace\\": {\\n    \\"SecretKey\\": \\"6/eQ0****\\",\\n    \\"AccessKey\\": \\"2c017****\\",\\n    \\"Name\\": \\"测试环境\\",\\n    \\"RegionId\\": \\"cn-shanghai\\",\\n    \\"Endpoint\\": \\"acm.aliyun.com\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>51193061-ED0D-4EC6-B160-****</RequestId>\\n<Message>Success</Message>\\n<Code>OK</Code>\\n<Namespace>\\n    <SecretKey>6/eQ****</SecretKey>\\n    <Endpoint>addr-bj-internal.edas.aliyun.com</Endpoint>\\n    <Name>测试环境</Name>\\n    <RegionId>cn-beijing</RegionId>\\n    <AccessKey>2c01****</AccessKey>\\n</Namespace>","errorExample":""}]',
            'title' => '获取命名空间详情',
            'summary' => '获取命名空间详情。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeNamespaces' => [
            'path' => '/diamond-ops/pop/namespace/list',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Namespaces' => [
                                'description' => '命名空间列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Type' => [
                                            'description' => '命名空间类型：'."\n"
                                                .'- 1：默认命名空间'."\n"
                                                .'- 2：自定义命名空间',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'Quota' => [
                                            'description' => '配置数上限',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '200',
                                        ],
                                        'NamespaceId' => [
                                            'description' => '命名空间ID',
                                            'type' => 'string',
                                            'example' => '3115d2bf-1f44-47bf-a855-****',
                                        ],
                                        'ConfigCount' => [
                                            'description' => '配置数',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '20',
                                        ],
                                        'NamespaceName' => [
                                            'description' => '命名空间名称',
                                            'type' => 'string',
                                            'example' => '测试环境',
                                        ],
                                    ],
                                ],
                            ],
                            'Message' => [
                                'description' => '响应描述',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '3116581E-C664-4D3A-A055-****',
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                401 => [
                    [
                        'errorCode' => 'ServiceDisabled',
                        'errorMessage' => 'You have not activated the ACM service.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"3116581E-C664-4D3A-A055-****\\",\\n  \\"Namespaces\\": [\\n    {\\n      \\"Type\\": 1,\\n      \\"ConfigCount\\": 20,\\n      \\"Quota\\": 200,\\n      \\"NamespaceId\\": \\"3115d2bf-1f44-47bf-a855-****\\",\\n      \\"NamespaceName\\": \\"测试环境\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<Namespaces>\\n    <NamespaceName>Default Space(EDAS)</NamespaceName>\\n    <Type>1</Type>\\n    <Quota>200</Quota>\\n    <ConfigCount>48</ConfigCount>\\n    <NamespaceId>0846c173-decf-4b47-8aa0-04b5a561****</NamespaceId>\\n</Namespaces>\\n<RequestId>EDA3B962-37DC-48EC-99FA-20ED0********</RequestId>\\n<Message>Success</Message>\\n<Code>OK</Code>","errorExample":""}]',
            'title' => '获取命名空间列表',
            'summary' => '使用DescribeNamespaces来获取命名空间列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeNamespacesWithCreate' => [
            'path' => '/diamond-ops/pop/namespace/listWithCreate',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Namespaces' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Type' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                        ],
                                        'Quota' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                        ],
                                        'NamespaceId' => [
                                            'type' => 'string',
                                        ],
                                        'ConfigCount' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                        ],
                                        'NamespaceName' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Code' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                401 => [
                    [
                        'errorCode' => 'ServiceDisabled',
                        'errorMessage' => 'You have not activated the ACM service.',
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'CreateConfiguration' => [
            'path' => '/diamond-ops/pop/configuration',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'DataId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配置的ID。允许字符为大小写字母、数字、小数点（.）、冒号（:）、星号（*）、下划线（_）和中划线（-）。当ID前缀为如下值时，ACM会自动使用KMS服务对此配置进行加密存储：'."\n"
                            ."\n"
                            .'- 前缀为`cipher-`：调用 KMS 服务对配置进行加解密，加解密数据的大小不超过 4 KB，最大不超过 6 KB，对特殊符号如and（&amp;）会解密错误，不推荐使用。'."\n"
                            ."\n"
                            .'- 前缀为`cipher-kms-aes-128-`：使用 KMS 的信封加解密方法，配置内容可以超过 6 KB，最大不超过 100 KB。配置内容的明文数据不会传输到 KMS 系统，安全性更高，推荐使用。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'com.aliyun.acm.example',
                    ],
                ],
                [
                    'name' => 'AppName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配置归属的应用名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'app',
                    ],
                ],
                [
                    'name' => 'Group',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '分组',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'DEFAULT_GROUP',
                    ],
                ],
                [
                    'name' => 'Desc',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配置的描述说明',
                        'type' => 'string',
                        'required' => false,
                        'example' => '测试配置',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配置的标签，如存在多个标签，以半角逗号分隔',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'tag1,tag2',
                    ],
                ],
                [
                    'name' => 'Content',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配置的内容',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'key=Hello;value=World',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配置内容的格式，可选值如下：'."\n"
                            ."\n"
                            .'- text'."\n"
                            ."\n"
                            .'- json'."\n"
                            ."\n"
                            .'- xml'."\n"
                            ."\n"
                            .'- yaml'."\n"
                            ."\n"
                            .'- text/html'."\n"
                            ."\n"
                            .'- properties',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'text',
                    ],
                ],
                [
                    'name' => 'NamespaceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '命名空间ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '01146121-decf-4b47-****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '响应描述',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '132BF104-A660-40C7-936B-F805967*****',
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                401 => [
                    [
                        'errorCode' => 'ServiceDisabled',
                        'errorMessage' => 'You have not activated the ACM service.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ConfigurationAlreadyExists',
                        'errorMessage' => 'The configuration item already exists.',
                    ],
                    [
                        'errorCode' => 'ConfigurationInvalidArgument',
                        'errorMessage' => 'The configuration parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'ConfigurationQuotaOrSizeExceed',
                        'errorMessage' => 'The maximum number of configuration items or the maximum length of the configuration item is exceeded.',
                    ],
                    [
                        'errorCode' => 'ConfigurationSizeExceed',
                        'errorMessage' => 'The maximum length of the configuration item is exceeded.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"132BF104-A660-40C7-936B-F805967*****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>132BF104-A660-40C7-936B-F805967*****</RequestId>\\n<Message>Success</Message>\\n<Code>OK</Code>","errorExample":""}]',
            'title' => '创建配置',
            'summary' => '创建配置。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CloneConfiguration' => [
            'path' => '/diamond-ops/pop/batch/clone',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'Policy',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'NamespaceFrom',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'NamespaceTo',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'Data',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Code' => [
                                'type' => 'string',
                            ],
                            'Result' => [
                                'type' => 'object',
                                'properties' => [
                                    'Success' => [
                                        'type' => 'boolean',
                                    ],
                                    'SuccessItems' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'DataId' => [
                                                    'type' => 'string',
                                                ],
                                                'Group' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TotalCount' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                401 => [
                    [
                        'errorCode' => 'ServiceDisabled',
                        'errorMessage' => 'You have not activated the ACM service.',
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'DeleteConfiguration' => [
            'path' => '/diamond-ops/pop/configuration',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'DataId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '配置ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'com.aliyun.acm.example',
                    ],
                ],
                [
                    'name' => 'Group',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分组',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'DEFAULT_GROUP',
                    ],
                ],
                [
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '10d1110d2-ca66-42ba-b706-****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '描述',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '617CC94A-0019-4873-8848-****',
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                401 => [
                    [
                        'errorCode' => 'ServiceDisabled',
                        'errorMessage' => 'You have not activated the ACM service.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'PermissionDenied',
                        'errorMessage' => 'You are not authorized to operate on the specified resources.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ConfigurationNotExists',
                        'errorMessage' => 'The configuration item does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ConfigurationDeleteFail',
                        'errorMessage' => 'Failed to delete the configuration item.',
                    ],
                    [
                        'errorCode' => 'ConfigurationInvalidArgument',
                        'errorMessage' => 'The configuration parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"617CC94A-0019-4873-8848-****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>6F7CC94A-7711-4873-8848-FCE2F1795625</RequestId>\\n<Message>Success</Message>\\n<Code>OK</Code>","errorExample":""}]',
            'title' => '删除配置',
            'summary' => '删除配置。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeployConfiguration' => [
            'path' => '/diamond-ops/pop/configuration',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'DataId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配置ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'com.aliyun.acm.example',
                    ],
                ],
                [
                    'name' => 'AppName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配置归属的应用名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'app',
                    ],
                ],
                [
                    'name' => 'Group',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '分组',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'DEFAULT_GROUP',
                    ],
                ],
                [
                    'name' => 'Desc',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配置描述',
                        'type' => 'string',
                        'required' => false,
                        'example' => '测试配置',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配置的标签，如存在多个标签，以半角逗号分隔',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'tag1,tag2',
                    ],
                ],
                [
                    'name' => 'Content',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配置内容',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Hello World',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配置内容的格式，可选值如下：'."\n"
                            ."\n"
                            .'- text'."\n"
                            ."\n"
                            .'- json'."\n"
                            ."\n"
                            .'- xml'."\n"
                            ."\n"
                            .'- yaml'."\n"
                            ."\n"
                            .'- text/html'."\n"
                            ."\n"
                            .'- properties',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'text',
                    ],
                ],
                [
                    'name' => 'NamespaceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '命名空间ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '111000d2-ca66-42ba-b706-****',
                    ],
                ],
                [
                    'name' => 'BetaIps',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Beta发布的IP列表。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '127.0.0.1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '描述',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '611CC94A-7711-4873-8848-****',
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                401 => [
                    [
                        'errorCode' => 'ServiceDisabled',
                        'errorMessage' => 'You have not activated the ACM service.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ConfigurationDeployFail',
                        'errorMessage' => 'Failed to publish the configuration item.',
                    ],
                    [
                        'errorCode' => 'ConfigurationInvalidArgument',
                        'errorMessage' => 'The configuration parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'ConfigurationQuotaOrSizeExceed',
                        'errorMessage' => 'The maximum number of configuration items or the maximum length of the configuration item is exceeded.',
                    ],
                    [
                        'errorCode' => 'ConfigurationSizeExceed',
                        'errorMessage' => 'The maximum length of the configuration item is exceeded.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"611CC94A-7711-4873-8848-****\\",\\n  \\"Code\\": \\"OK\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>6F7CC94A-7711-4873-8848-FCE2F1795625</RequestId>\\n<Message>Success</Message>\\n<Code>OK</Code>","errorExample":""}]',
            'title' => 'DeployConfiguration',
            'summary' => '发布配置。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'BatchExportConfigurations' => [
            'path' => '/diamond-ops/pop/batch/export',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'Data',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'FileUrl' => [
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Code' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                401 => [
                    [
                        'errorCode' => 'ServiceDisabled',
                        'errorMessage' => 'You have not activated the ACM service.',
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'BatchImportConfigurations' => [
            'path' => '/diamond-ops/pop/batch/import',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'NamespaceId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'Policy',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'FileUrl',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Code' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                401 => [
                    [
                        'errorCode' => 'ServiceDisabled',
                        'errorMessage' => 'You have not activated the ACM service.',
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'DescribeConfiguration' => [
            'path' => '/diamond-ops/pop/configuration',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DataId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '配置ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'com.aliyun.acm.example',
                    ],
                ],
                [
                    'name' => 'Group',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分组',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'DEFAULT_GROUP',
                    ],
                ],
                [
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '101100d2-ca66-42ba-b706-****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '响应描述',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '611CC94A-7711-4873-8848-****',
                            ],
                            'Configuration' => [
                                'description' => '配置',
                                'type' => 'object',
                                'properties' => [
                                    'Type' => [
                                        'description' => '配置内容的格式',
                                        'type' => 'string',
                                        'example' => 'text',
                                    ],
                                    'AppName' => [
                                        'description' => '配置归属的应用名称',
                                        'type' => 'string',
                                        'example' => 'app',
                                    ],
                                    'Tags' => [
                                        'description' => '配置的标签',
                                        'type' => 'string',
                                        'example' => 'tag1,tag2',
                                    ],
                                    'Md5' => [
                                        'description' => '配置的消息摘要',
                                        'type' => 'string',
                                        'example' => '18d2e20****',
                                    ],
                                    'DataId' => [
                                        'description' => '配置ID',
                                        'type' => 'string',
                                        'example' => 'com.aliyun.acm.example',
                                    ],
                                    'Content' => [
                                        'description' => '配置内容',
                                        'type' => 'string',
                                        'example' => 'Hello World',
                                    ],
                                    'Group' => [
                                        'description' => '分组',
                                        'type' => 'string',
                                        'example' => 'DEFAULT_GROUP',
                                    ],
                                    'Desc' => [
                                        'description' => '配置描述',
                                        'type' => 'string',
                                        'example' => '测试配置',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                401 => [
                    [
                        'errorCode' => 'ServiceDisabled',
                        'errorMessage' => 'You have not activated the ACM service.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'PermissionDenied',
                        'errorMessage' => 'You are not authorized to operate on the specified resources.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ConfigurationNotExists',
                        'errorMessage' => 'The configuration item does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"611CC94A-7711-4873-8848-****\\",\\n  \\"Configuration\\": {\\n    \\"Type\\": \\"text\\",\\n    \\"AppName\\": \\"app\\",\\n    \\"Tags\\": \\"tag1,tag2\\",\\n    \\"Md5\\": \\"18d2e20****\\",\\n    \\"DataId\\": \\"com.aliyun.acm.example\\",\\n    \\"Content\\": \\"Hello World\\",\\n    \\"Group\\": \\"DEFAULT_GROUP\\",\\n    \\"Desc\\": \\"测试配置\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>3116581E-C664-4D3A-A055-****</RequestId>\\n<Message>Success</Message>\\n<Configuration>\\n    <Group>DEFAULT_GROUP</Group>\\n    <Desc>测试配置</Desc>\\n    <DataId>com.aliyun.acm.example</DataId>\\n    <Content>Hello World</Content>\\n    <Type>text</Type>\\n    <Md5>078b****</Md5>\\n    <AppName>app</AppName>\\n</Configuration>\\n<Code>OK</Code>","errorExample":""}]',
            'title' => '获取配置',
            'summary' => '获取配置。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CheckConfigurationClone' => [
            'path' => '/diamond-ops/pop/batch/checkForClone',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Policy',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'NamespaceFrom',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'NamespaceTo',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'Data',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Code' => [
                                'type' => 'string',
                            ],
                            'Result' => [
                                'type' => 'object',
                                'properties' => [
                                    'Success' => [
                                        'type' => 'boolean',
                                    ],
                                    'SuccessItems' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'DataId' => [
                                                    'type' => 'string',
                                                ],
                                                'Group' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TotalCount' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                401 => [
                    [
                        'errorCode' => 'ServiceDisabled',
                        'errorMessage' => 'You have not activated the ACM service.',
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'CheckConfigurationExport' => [
            'path' => '/diamond-ops/pop/batch/checkForExport',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'NamespaceId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'Data',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Code' => [
                                'type' => 'string',
                            ],
                            'Result' => [
                                'type' => 'object',
                                'properties' => [
                                    'TotalCount' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                401 => [
                    [
                        'errorCode' => 'ServiceDisabled',
                        'errorMessage' => 'You have not activated the ACM service.',
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'acm.cn-qingdao.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'acm.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'acm.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'acm.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'acm.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'acm.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'acm.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'acm.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'acm.ap-southeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'acm.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'acm.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'acm.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'acm.cn-hangzhou-finance.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'acm.cn-shanghai-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'acm.cn-shenzhen-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-north-2-gov-1',
            'endpoint' => 'acm.cn-north-2-gov-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'acm.ap-northeast-1.aliyuncs.com',
        ],
    ],
];